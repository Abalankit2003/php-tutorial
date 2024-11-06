<?php

declare(strict_types = 1);

namespace App\Controllers;

class invoiceController
{
    public function index() : string
    {
        // unset($_SESSION['count']); // It unsets the count
        return (string) \View :: make('invoices/index');
    }

    public function create() : string
    {
        return (string) \View :: make('invoices/create');

        
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
