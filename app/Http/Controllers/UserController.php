<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $user = User::all();
    return view("home.user.index", compact("user"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("home.user.tambah");
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|min:3',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'role' => 'required',

        // ]);
     User::create([
        "name"=> $request->name,
        "email"=> $request->email,
        "password"=> bcrypt($request->password),
        "role"=> $request->role,
     ]);
      return redirect('/user')->with('success','User berhasil ditambahkan');
    }

    public function show(string $id)
    {
     $user = User::find($id);
    return view('home.user.edit', compact('user'));
    }


    public function update(Request $request, string $id)
    {

    $user= User::find($id);
    $user->update($request->all());
    return redirect('/user')->with('success','User berhasil di edit');
    }

    public function destroy(string $id)
    {
    $user = User::find($id)->delete();
    return redirect('/user')->with('success','User berhasil dihapus');
    }
}
