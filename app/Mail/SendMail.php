<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
// use App\Http\Controllers\MailController;
class SendMail extends Mailable
{
use Queueable, SerializesModels;
/**
* Create a new message instance.
*/
public $name, $email, $mess;
public function __construct($name, $email, $mess)
{
$this->name = $name;
$this->email = $email;
$this->mess = $mess;
}
/**
* Get the message envelope.
*/
public function envelope(): Envelope
{
return new Envelope(
// subject: 'Sandroft Website Mail',
subject: "Contact Open Hands Network",
);
}
/**
* Get the message content definition.
*/
public function content(): Content
{
return new Content(
// view: 'sand',
markdown: 'email.email_to_admin',
);
}
/**
* Get the attachments for the message.
*
* @return array<int, \Illuminate\Mail\Mailables\Attachment>
*/
public function attachments(): array
{
return [];
}
}