<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Organisation;
use App\Http\Resources\Offices;

use App\Http\Resources\Organisations;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $organisation =  Organisation::where('id', $user->organisation_id)->first();
        $offices = Offices::collection($organisation->offices)->resolve(); //TODO: rooms

        return view('home', compact('organisation', 'offices'));
    }
}
