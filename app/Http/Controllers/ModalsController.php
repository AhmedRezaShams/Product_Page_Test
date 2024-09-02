<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalsController extends Controller
{
    public function showModal()
    {
        return view('modal.cart');
    }
}
