<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view("home.user.index", compact("user"));
    }

    public function create()
    {
        return view("home.user.tambah");
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'role' => 'required|string|max:50',
        ]);

        User::create([
            'name' => $request->name ?? ($request->role . ' Baru'),
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make('password123'), // default password
            'must_change_password' => true
        ]);

        return redirect('/user')->with('success', 'User baru berhasil ditambahkan. Password default: password123');
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('home.user.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('/user')->with('success', 'User berhasil diedit');
    }

    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();
        return redirect('/user')->with('success', 'User berhasil dihapus');
    }

    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->boolean('must_change_password')->default(false);
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('must_change_password');
    });
}

}

