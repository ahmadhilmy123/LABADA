<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class PetugasController extends Controller
{
    public function index()
    {
        if (Auth::user()->roles != 'ADMIN') {
            Alert::warning('Peringatan', 'Maaf Anda tidak punya akses');
            return back();
        }

        $data = DB::table('users')->whereIn('roles', ['PETUGAS', 'ADMIN'])->orderBy('name')->get();
        return view('pages.admin.petugas.index', ['data' => $data]);
    }

    public function create()
    {
        return view('pages.admin.petugas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|max:16|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|confirmed|min:8',
        ]);

        User::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'roles' => $request->roles ?? 'PETUGAS',  // Default to PETUGAS
            'password' => Hash::make($request->password),
        ]);

        Alert::success('Berhasil', 'Petugas baru ditambahkan');
        return redirect('admin/petugas');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.admin.petugas.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required|string|max:16|unique:users,nik,' . $id,
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'phone' => 'required|string|max:15',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'nik' => $request->nik,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'roles' => $request->roles,
            'password' => $request->has('password') ? Hash::make($request->password) : $user->password,
        ]);

        Alert::success('Berhasil', 'Data petugas telah diperbarui');
        return redirect('admin/petugas');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        Alert::success('Berhasil', 'Petugas telah dihapus');
        return redirect('admin/petugas');
    }
}
