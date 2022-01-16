<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Users;
use App\Models\User;


class ProfileController extends Controller
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = new Users(auth()->user());

        return view('profile.edit', [
            'user' => $user->resolve(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId)
    {
        $user = User::where('id', $userId)->first();

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username,'.$user->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
        ]);

        // update user
        $user->update($request->all());

        return redirect()->back()->with('success', 'Update successful');
    }

    /**
     * Upload profile image.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function uploadProfileImage(Request $request, $userId)
    {
        $user = User::where('id', $userId)->first();
        $request->validate([
            'image_path' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);

        // File details & save
        $file = $request['image_path'];
        $fileName = $file->getClientOriginalName();
        $file->storeAs('public/profile-image', $fileName);

        // save image path on user
        $user->image_path = "/storage/profile-image/" . $fileName;
        $user->save();

        return redirect()->back()->with('success', 'Image added successfully');
    }

    public function resetPasswordWithoutToken(Request $request) {
        $user = Auth::user();
        $user->password = \Hash::make($request['password']);
        $user->save();

        return redirect()->back()->with(['success' => 'Password reset successfully.']);
    }
}
