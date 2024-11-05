<?php

declare(strict_types = 1);

namespace App\Classes;

class invoice
{
    public function index() : string
    {
        return 'Invoices';
    }

    public function create() : string
    {
        return '<form action="/invoice/store" method="post"><label>Amount</label><input type="text" name="amount" /></form>';
    }

    public function store() : void
    {
        $amount = $_POST['amount'];

        var_dump($amount);
    }

    public function session() : void
    {
        
    }
}
