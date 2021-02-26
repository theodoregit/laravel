<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Room;
use App\Reservation;

use Session;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index')->with('rooms', Room::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'roomtype' => 'required|max:255',
            'price' => 'required',
            'amount' => 'required',
            'desc1' => 'required|max:255',
            'desc2' => 'required|max:255',
            'desc3' => 'required|max:255',
            'image' => 'required|image',
        ]);
        //saving image file
        $image = $request->image;
        $image_upload = time().$image->getClientOriginalName();
        $image->move('uploads/rooms', $image_upload);
        
        //inserting in the database
        $rooms = Room::create([
            'type' => $request->roomtype,
            'price' => $request->price,
            'amount' => $request->amount,
            'desc1' => $request->desc1,
            'desc2' => $request->desc2,
            'desc3' => $request->desc3,
            'image' => 'uploads/rooms/' . $image_upload,
        ]);
        
        Session::flash('success', 'Room added successfully!');
        
        return view('admin.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rooms = Room::find($id);
        return view('admin.edit')->with('rooms', $rooms);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'roomtype' => 'required|max:255',
            'price' => 'required',
            'amount' => 'required',
            'desc1' => 'required|max:255',
            'desc2' => 'required|max:255',
            'desc3' => 'required|max:255',
            'image' => 'image',
        ]);

        $rooms = Room::find($id);

        $rooms->type = $request->roomtype;
        $rooms->price = $request->price;
        $rooms->amount = $request->amount;
        $rooms->desc1 = $request->desc1;
        $rooms->desc2 = $request->desc2;
        $rooms->desc3 = $request->desc3;

        $rooms->save();

        return redirect()->route('rooms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function reserved(){
        $reserve = Reservation::all();
        // $roomtype = Room::find();
        return view('admin.reservations')
            ->with('reserves', $reserve);
    }
}
