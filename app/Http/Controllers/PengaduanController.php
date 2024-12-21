<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use RealRashid\SweetAlert\Facades\Alert;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua pengaduan yang ada
        $items = Pengaduan::orderBy('created_at', 'DESC')->get();
        
        // Menampilkan halaman dengan data pengaduan
        return view('pages.admin.pengaduan.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tampilkan halaman form untuk menambah pengaduan
        return view('pages.admin.pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Added mime types and max size
        ]);

        // Menyimpan data pengaduan ke dalam database
        $data = $request->all();
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('assets/laporan', 'public');
        }

        // Menyimpan pengaduan baru
        Pengaduan::create($data);

        // Menampilkan alert berhasil
        Alert::success('Berhasil', 'Pengaduan berhasil ditambahkan');
        return redirect()->route('pengaduans.index'); // Use route helper instead of hard-coded URL
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Mengambil data pengaduan berdasarkan ID
        $item = Pengaduan::with(['details', 'user'])->findOrFail($id);
        
        // Mengambil tanggapan jika ada
        $tangap = Tanggapan::where('pengaduan_id', $id)->first();

        // Menampilkan detail pengaduan
        return view('pages.admin.pengaduan.detail', [
            'item' => $item,
            'tangap' => $tangap
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Logika untuk edit pengaduan (opsional)
        $pengaduan = Pengaduan::findOrFail($id);
        return view('pages.admin.pengaduan.edit', compact('pengaduan'));
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
        // Menemukan pengaduan yang akan diupdate
        $pengaduan = Pengaduan::findOrFail($id);
        
        // Mengupdate status pengaduan jika ada
        $pengaduan->status = $request->input('status');
        $pengaduan->save(); // Menyimpan perubahan

        // Menampilkan alert sukses
        Alert::success('Berhasil', 'Status pengaduan telah diperbarui');
        return redirect()->route('pengaduans.index'); // Redirect using named route
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Menemukan pengaduan yang akan dihapus
        $pengaduan = Pengaduan::find($id);

        if (!$pengaduan) {
            // Jika pengaduan tidak ditemukan
            Alert::error('Gagal', 'Pengaduan tidak ditemukan');
            return redirect()->route('pengaduans.index'); // Redirect to pengaduans.index if not found
        }

        // Menghapus pengaduan
        $pengaduan->delete();

        // Menampilkan alert sukses
        Alert::success('Berhasil', 'Pengaduan telah dihapus');
        return redirect()->route('pengaduans.index'); // Redirect after deletion
    }
}
