<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('dashboard.admin.users.index', compact('users'));
    }

    
    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.admin.users.show', compact('user'));
    }

    public function create()
    {
        return view('dashboard.admin.users.create');
    }

    public function edit($id)
{
    $users = User::find($id);
    return view('dashboard.admin.users.edit', compact('users'));
}

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required|min:6', 
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password); // Hash the password
        $user->save();

        return redirect()->route('dashboard.users.index')->with('success', 'User added successfully');
    }

    
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,'.$id,
        'role' => 'required',
        'password' => 'nullable|min:6', // password bisa kosong
    ]);

    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->role = $request->role;
    
    // Periksa apakah password baru diset, jika ya, hash password baru dan simpan
    if ($request->has('password')) {
        $user->password = Hash::make($request->password);
    }

    $user->save();

    return redirect()->route('dashboard.users.index')->with('success', 'User berhasil diperbarui');
}


    
    public function destroy($id)
{
    $user = User::find($id);

    if ($user) {
        $user->delete();
        return redirect()->route('dashboard.users.index')->with('success', 'Pengguna berhasil dihapus');
    } else {
        return redirect()->route('dashboard.users.index')->with('error', 'Pengguna tidak ditemukan');
    }
}

}
