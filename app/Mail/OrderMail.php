<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $orderData;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $this->orderData = [
            'name' => $data['firstName'] . ' ' . $data['lastName'],
            'email' => $data['email'] ?? '',
            'phone' => $data['phone'],
            'address' => $data['address'],
            'city' => $data['city'],
            'country' => $data['country'],
            'postal' => $data['postal'] ?? '',
            'cart' => $data['cart'] ?? []
        ];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.order')
            ->subject('New Order Received')
            ->with($this->orderData);
    }
} 