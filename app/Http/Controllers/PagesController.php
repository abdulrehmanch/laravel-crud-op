<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;

class PagesController extends Controller
{
    public function home()
{
    return view('crud.home');
}
}
