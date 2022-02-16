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
        // check number/name for room already exist
        $room = Room::findOrFail($request->room_id);
        if (Desk::where('room_id', $request->room_id)
            ->where('name', $request->name)
            ->where('number', $request->number)
            ->exists()) {
                return redirect()->back()
                    ->withErrors(['error' => 'A desk already exists with that name and number for room '.$room->name]);
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255',],
            'type' => ['required', 'string', 'max:255'],
            'number' => ['required', 'integer'],
            'room_id' => ['required', 'integer'],
        ]);

        $desk = Desk::create([
            'name' => $request->name,
            'type' => $request->type,
            'number' => $request->number,
            'room_id' => $request->room_id,
            'length_cm' => (int)$request->length_cm ?? 0,
            'created_by' => auth()->user()->id,
        ]);

        return redirect()->route('desks.edit', ['desk' => $desk->id])->with('success', 'Created successfully');
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
        $room = $desk->room;
        return view('desks.edit', compact('desk', 'room'));
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
