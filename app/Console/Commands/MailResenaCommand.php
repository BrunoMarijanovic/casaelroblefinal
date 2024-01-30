<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Reserva;
use App\Mail\EmailRecordarResena;
use Illuminate\Support\Facades\Mail;

class MailResenaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:mail-resena';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar un correo para que hagan la reseña los usuarios';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Se enviará el correo si la reserva finalizó hace 2 dias
        $sendDay = date('Y-m-d', strtotime("-2 day"));

        $reservasFinalizadas = Reserva::where('fechaFin', $sendDay)
            ->where('mailEnviado', 0)
            ->get();
        foreach($reservasFinalizadas as $reserva)
        {
            if (str_contains($reserva->email, '@'))
            {
                Mail::to($reserva->email)->send(new EmailRecordarResena($reserva));
                $reserva->mailEnviado = 1;
                $reserva->save();
            }
        }
    }
}
