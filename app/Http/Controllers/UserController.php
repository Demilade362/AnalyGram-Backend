<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('msg', "User Account has been suspended");
    }

    public function allTrashed()
    {
        $users = User::onlyTrashed()->paginate(5);
        return view('admin.users.trashed', compact('users'));
    }

    public function restore($id)
    {
        $user = User::findorFail($id);

        if ($user->trashed()) {
            $user->restore();
            return redirect()->back()->with('msg', "User Account has be restored");
        }

        return redirect()->back();
    }

    public function trashed($id)
    {

        $user = User::findorFail($id);
        if ($user->trashed()) {
            $user->forceDelete();
            return redirect()->back()->with('msg', 'User Account has been permanently Deleted');
        }

        return redirect()->back();
    }
}
