<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class ClientPageController extends Controller
{
    public function index(){
        $rooms = new Room;
        return view('index')
            ->with('title', 'BlueSem')
            ->with('rooms', $rooms->all());
    }

    public function book($id){
        return view('client.book')->with('id', Room::find($id));
    }
}
