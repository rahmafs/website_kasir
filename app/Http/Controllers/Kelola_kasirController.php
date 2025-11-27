<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Kelola_kasirController extends Controller
{
    public function index()
    {
        $kasir = User::where('role', 'kasir')->get();
        return view('admin.kelola_kasir', [
            'kasir' => $kasir,
            'editKasir' => null
        ]);
    }

    public function index9(Request $request)
    {
        $kasir = User::where('role', 'kasir')->get();

        $editKasir = null;
        if ($request->has('edit')) {
            $editKasir = User::findOrFail($request->edit);
        }

        return view('admin.kelola_kasir', compact('kasir', 'editKasir'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'nama'     => $request->nama,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'kasir'
        ]);

        return redirect()->route('kelola_kasir')
                         ->with('success', 'Kasir berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $kasir = User::findOrFail($id);

        $request->validate([
            'nama'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $kasir->id,
            'password' => 'nullable|min:6'
        ]);

        $kasir->nama  = $request->nama;
        $kasir->email = $request->email;

        if ($request->password) {
            $kasir->password = Hash::make($request->password);
        }

        $kasir->save();

        return redirect()->route('kelola_kasir')
                         ->with('success', 'Kasir berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kasir = User::findOrFail($id);
        $kasir->delete();

        return redirect()->route('kelola_kasir')
                         ->with('success', 'Kasir berhasil dihapus.');
    }
}
