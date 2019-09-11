<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function index(){
        //logica e converzaciones listadas por usuario conectado
        return Message::all();
    }
}
