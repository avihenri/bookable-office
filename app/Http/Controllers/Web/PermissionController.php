<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
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
        // $permissions = Permission::orderBy('name','asc')->paginate(5);
        // return view('admin.permissions.index',compact('permissions'))
        //     ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required|unique:permissions,name',
        // ]);

        // Permission::create(['name' => $request->input('name')]);

        // return redirect()->route('permissions.index')->with('success', 'Created successfully');
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
        // $permission = Permission::find($id);

        // return view('admin.permissions.edit', compact('permission'));
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
        // $this->validate($request, [
        //     'name' => 'required',
        // ]);

        // $permission = Permission::find($id);
        // $permission->name = $request->input('name');
        // $permission->save();

        // return redirect()->back()->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $role_has_permissions = DB::table("role_has_permissions")->pluck('permission_id')->all();

        // if (in_array($id, $role_has_permissions)) {
        //     return redirect()->back()->withErrors(['error' => 'Unable to delete. Permission attached to a role.']);
        // }

        // DB::table("permissions")->where('id',$id)->delete();

        // return redirect()->route('permissions.index')->with('success', 'Deleted successfully');
    }
}
