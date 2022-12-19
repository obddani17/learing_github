<?php

namespace App\Http\Controllers;

use App\Mail\welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class homecontroller extends Controller
{
    public function index()
    {
        Mail::to('obddain17@gmail.com')->send(new welcome);
    }
}
