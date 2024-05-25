<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.indexadmin', compact('admins'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        Admin::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.index')->with('success', 'Data Berhasil Ditambahkan!');
    }
    public function edit($id)
    {
        // Ambil data admin berdasarkan ID
        $min = Admin::find($id);

        // Periksa jika admin ditemukan
        if (!$min) {
            return redirect()->route('admin.index')->with('error', 'Admin tidak ditemukan');
        }

        // Kirim data ke view
        return view('admin.editadmin', compact('min'));
    }

    public function update(Request $request, $id)
    {

        // Ambil data admin berdasarkan ID
        $min = Admin::find($id);

        // Periksa jika admin ditemukan
        if (!$min) {
            return redirect()->route('admin.index')->with('error', 'Admin tidak ditemukan');
        }

        // Perbarui data admin
        $min->nama = $request->nama;
        $min->email = $request->email;
        $min->password = bcrypt($request->password);
        $min->save();

        return redirect()->route('admin.index')->with('success', 'Admin berhasil diperbarui');
    }
    public function delete($id)
    {
        // Ambil data admin berdasarkan ID
        $min = Admin::find($id);

        // Periksa jika admin ditemukan
        if (!$min) {
            return redirect()->route('admin.index')->with('error', 'Admin tidak ditemukan');
        }

        // Hapus data admin
        $min->delete();

        return redirect()->route('admin.index')->with('success', 'Admin berhasil dihapus');
    }
    public function generatePDF()
    {
        // Ambil data dari model atau sumber lainnya
        $data = Admin::all();

        // Buat instance Dompdf
        $dompdf = new Dompdf();

        // Load tampilan dan kirim data
        $view = view('admin.reportadmin', compact('data'))->render();

        // Load HTML ke Dompdf
        $dompdf->loadHtml($view);

        // Konfigurasi dan render PDF
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        // Tampilkan PDF atau simpan ke file
        return $dompdf->stream('report.pdf');
    }

}


