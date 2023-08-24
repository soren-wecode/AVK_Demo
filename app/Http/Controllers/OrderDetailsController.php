<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class OrderDetailsController
{
    public function index()
    {
        return Inertia::render('OrderDetails');
    }

}
