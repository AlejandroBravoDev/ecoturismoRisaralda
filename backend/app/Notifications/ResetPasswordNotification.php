<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification
{
    use Queueable;
    
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $frontendUrl = env('FRONTEND_URL', 'http://localhost:5173');
        $resetUrl = $frontendUrl . "/reset-password/" . $this->token . "?email=" . urlencode($notifiable->email);

        return (new MailMessage)
            ->subject('Recuperar contraseña - Ecoturismo Risaralda')
            ->greeting('¡Hola!')
            ->line('Estás recibiendo este correo porque solicitaste un restablecimiento de contraseña para tu cuenta.')
            ->action('Restablecer Contraseña', $resetUrl)
            ->line('Si no fuiste tú, no requiere ninguna acción adicional.');
    }
}
