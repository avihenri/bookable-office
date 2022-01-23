<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Resources\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:view-list|can-create|can-edit|can-delete', ['only' => ['index','store']]);
         $this->middleware('permission:can-create', ['only' => ['create','store']]);
         $this->middleware('permission:can-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:can-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::orderBy('first_name','ASC')->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        if (!$user->userHasRoleByIdentifier(User::SUPER_ADMIN)) {
            abort(403);
        }

        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.create', compact('roles', 'user'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->userHasRoleByIdentifier(User::SUPER_ADMIN)) {
            abort(403);
        }

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'organisation_id' => auth()->user()->organisation_id,
        ]);

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')->with('success', 'Created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->userHasRoleByIdentifier(User::SUPER_ADMIN)) {
            abort(403);
        }

        $user = User::find($id);
        $roles = Role::pluck('name', 'id')->all();
        $userRoles = $user->roles->pluck('name','name')->all();

        return view('admin.users.edit', compact('user','roles','userRoles'));
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
        if (!auth()->user()->userHasRoleByIdentifier(User::SUPER_ADMIN)) {
            abort(403);
        }

        $user = User::find($id);

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username,'.$user->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
        ]);

        // update user
        $user->update($request->all());

        // assign roles
        $user->roles()->sync($request->input('roles'));

        return redirect()->back()->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->userHasRoleByIdentifier(User::SUPER_ADMIN)) {
            abort(403);
        }

        User::find($id)->delete();
        return redirect()->route('users.index')->with('success','Deleted successfully');
    }
}
