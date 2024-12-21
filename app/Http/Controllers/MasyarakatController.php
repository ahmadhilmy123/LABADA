<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MasyarakatController extends Controller
{
    public function index()
    {
        $userNik = Auth::user()->nik;

        return view('pages.masyarakat.index', ['liat' => $userNik]);
    }

    public function create()
    {
        return view('pages.masyarakat.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'description' => $request->description,
            'user_nik' => Auth::user()->nik,
            'user_id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'image' => $request->file('image')->store('assets/laporan', 'public'),
        ];

        Pengaduan::create($data);

        Alert::success('Berhasil', 'Pengaduan terkirim');
        return redirect()->route('user.pengaduan');
    }

    public function lihat()
    {
        $pengaduan = Auth::user()->pengaduan()->orderBy('created_at', 'DESC')->get();

        return view('pages.masyarakat.detail', ['items' => $pengaduan]);
    }

    public function show($id)
    {
        $item = Pengaduan::with(['user'])->findOrFail($id);
        $tanggapan = Tanggapan::where('pengaduan_id', $id)->first();

        return view('pages.masyarakat.show', [
            'item' => $item,
            'tanggapan' => $tanggapan,
        ]);
    }

}
