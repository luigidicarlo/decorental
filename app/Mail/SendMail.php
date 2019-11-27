<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $products;
    public $cartTotal;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($products, $cartTotal)
    {
        $this->products = $products;
        $this->cartTotal = $cartTotal;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Presupuesto Decorental')->view('emails.budget');
    }
}
