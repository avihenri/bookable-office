<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Office;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $office = Office::find($request->office);
        return view('rooms.create', compact('office'));
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
            'office_id' => ['required', 'integer'],
        ]);

        $room = Room::create([
            'name' => $request->name,
            'office_id' => $request->office_id,
            'type' => $request->type,
            'max_capacity' => $request->max_capacity,
            'created_by' => auth()->user()->id,
        ]);

        $office = Office::find($request->office_id);

        return redirect()->route('rooms.edit', ['room' => $room->id, 'office' => $office->id])->with('success', 'Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room, Request $request)
    {
        $office = $room->office;
        return view('rooms.edit', compact('room', 'office'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'office_id' => ['required', 'integer'],
        ]);

        $formFields = $request->all();
        $formFields['max_capacity'] = $formFields['max_capacity'] ?? 0;

        $room->update($formFields);

        return redirect()->back()->with('success', 'Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        if ($room->desks) {
            return redirect()->back()->withErrors(['error' => 'Unable to delete. Desk(s) attached.']);
        }

        $room->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
