<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Admin;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = Karyawan::with(['admins', 'pendidikans'])->get();
        return view('karyawan.indexkaryawan', compact('karyawans'));

    }

    public function create()
    {
        $admins = Admin::all();
        $pendidikans = Pendidikan::all();
        return view('karyawan.createkaryawan', compact('admins', 'pendidikans'));
    }

    public function store(Request $request)
    {
        // Karyawan::create($request->all());
        // return redirect()->route('karyawan.index')->with('success', 'Data Berhasil Ditambahkan!');
        $request->validate([
            'id_admin' => 'required',
            'id_pendidikan' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
        ]);

        Karyawan::create([
            'id_admin' => $request->id_admin,
            'id_pendidikan' => $request->id_pendidikan,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);
        $karyawans->save();
        var_dump($request); var_dump($karyawans);die();
        // return redirect()->route('karyawan.index')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
    }
}
