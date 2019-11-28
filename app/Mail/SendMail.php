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
    public $client;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($products, $cartTotal, $client) {
        $this->products = $products;
        $this->cartTotal = $cartTotal;
        $this->client = $client;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->subject('Presupuesto Decorental')->view('emails.budget');
    }
}
