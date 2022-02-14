<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Desk;


class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $room = Room::find($request->room);
        return view('desks.create', compact('room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'number' => ['required', 'integer'],
            'room_id' => ['required', 'integer'],
        ]);

        $desk = Desk::create([
            'name' => $request->name,
            'type' => $request->type,
            'number' => $request->number,
            'room_id' => $request->room_id,
            'length_cm' => $request->length_cm ?? 0,
            'created_by' => auth()->user()->id,
        ]);

        $room = Room::find($request->room_id);

        return redirect()->route('desks.edit', ['desk' => $desk->id, 'room' => $room->id])->with('success', 'Created successfully');
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
    public function edit(Desk $desk, Request $request)
    {
        $room = Room::find($request->room);
        return view('desks.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desk $desk)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'number' => ['required', 'integer'],
            'room_id' => ['required', 'integer'],
        ]);

        $formFields = $request->all();
        $formFields['length_cm'] = $formFields['length_cm'] ?? 0;

        $desk->update($formFields);

        return redirect()->back()->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desk $desk)
    {
        // TODO: check if there are contents
        $desk->delete();
        return redirect()->back()->with('success', 'Deleted successfully');

    }
}
