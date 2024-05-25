<?php

namespace App\Http\Controllers;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikans = Pendidikan::all();
        return view('pendidikan.indexpendidikan', compact('pendidikans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_institusi' => 'required',
            'jenjang' => 'required',
            'jurusan' => 'required',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
        ]);

        Pendidikan::create([
            'nama_institusi' => $request->nama_institusi,
            'jenjang' => $request->jenjang,
            'jurusan' => $request->jurusan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_lulus' => $request->tahun_lulus,
        ]);

        return redirect()->route('pendidikan.index')->with('success', 'Data Berhasil Ditambahkan!');
    }
    
    public function edit($id)
    {
        // Ambil data admin berdasarkan ID
        $item = Pendidikan::find($id);

        // Periksa jika admin ditemukan
        if (!$item) {
            return redirect()->route('pendidikan.index')->with('error', 'Pendidikan tidak ditemukan');
        }

        // Kirim data ke view
        return view('pendidikan.editpendidikan', compact('item'));
    }

    public function update(Request $request, $id)
    {

        // Ambil data admin berdasarkan ID
        $item = Pendidikan::find($id);

        // Periksa jika admin ditemukan
        if (!$item) {
            return redirect()->route('pendidikan.index')->with('error', 'Pendidikan tidak ditemukan');
        }

        // Perbarui data admin
        $item->nama_institusi = $request->nama_institusi;
        $item->jenjang = $request->jenjang;
        $item->jurusan = $request->jurusan;
        $item->tahun_masuk = $request->tahun_masuk;
        $item->tahun_lulus = $request->tahun_lulus;
        $item->save();

        return redirect()->route('pendidikan.index')->with('success', 'Data Berhasil Diupdate!');
    }

    public function delete($id)
    {
            // Ambil data admin berdasarkan ID
            $item = Pendidikan::find($id);

            // Periksa jika admin ditemukan
            if (!$item) {
                    return redirect()->route('pendidikan.index')->with('error', 'Pendidikan tidak ditemukan');
            }
        
            // Hapus data admin
            $item->delete();
        
            return redirect()->route('pendidikan.index')->with('success', 'Pendidikan berhasil dihapus');
    }

    public function generatePDF()
    {
        
            // Ambil data dari model atau sumber lainnya
            $data = Pendidikan::all();
    
            // Buat instance Dompdf
            $dompdf = new Dompdf();
    
            // Load tampilan dan kirim data
            $view = view('pendidikan.reportpendidikan', compact('data'))->render();
    
            // Load HTML ke Dompdf
            $dompdf->loadHtml($view);
    
            // Konfigurasi dan render PDF
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();
    
            // Tampilkan PDF atau simpan ke file
            return $dompdf->stream('report.pdf');
        
    }
}
