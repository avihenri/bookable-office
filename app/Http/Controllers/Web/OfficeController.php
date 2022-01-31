<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Office;
use App\Models\Country;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offices = Office::where('organisation_id', auth()->user()->organisation_id)->orderBy('name', 'asc')->get();
        return view('offices.index', compact('offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::orderBy('sort_order', 'asc')->orderBy('name', 'asc')->pluck('nicename', 'id')->all();
        $user = auth()->user();

        return view('offices.create', compact('countries', 'user'));
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
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country_id' => ['required', 'integer'],
            'post_code' => ['required', 'string', 'max:255'],
        ]);

        $office = Office::create([
            'name' => $request->name,
            'desc' => $request->desc ?? '',
            'address' => $request->address,
            'city' => $request->city,
            'country_id' => $request->country_id,
            'post_code' => strtoupper($request->post_code),
            'organisation_id' => auth()->user()->organisation_id,
        ]);

        return redirect()->route('offices.edit', ['office' => $office->id])->with('success', 'Created successfully');
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
    public function edit(Office $office)
    {
        $countries = Country::orderBy('sort_order', 'asc')->orderBy('name', 'asc')->pluck('nicename', 'id')->all();
        $user = auth()->user();

        return view('offices.edit', compact('office', 'countries', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Office $office)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country_id' => ['required', 'integer'],
            'post_code' => ['required', 'string', 'max:255'],
        ]);

        $formFields = $request->all();
        $formFields['desc'] = $formFields['desc'] ?? '';

        // update office
        $office->update($formFields);

        return redirect()->back()->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Office $office)
    {
        // TODO: check if there are rooms
        $office->delete();
        return redirect()->route('offices.index')->with('success', 'Deleted successfully');
    }
}
