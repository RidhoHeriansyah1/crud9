<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('pages.sb');
    }
    public function index()
    {
        $data = siswa::all();
        return view('pages.mastersport.master_sport', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.mastersport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
    Session::flash('nis', $request->nis);
    Session::flash('alamat', $request->alamat);

    $request->validate([
        'nama' => 'required',
        'nis' => 'required|unique:siswas',
        'alamat' => 'required',
    ],[
        'nama.required' => 'Silakan Masukkan Nama Lengkap Anda',
        'nis.required' => 'Silakan Masukkan Nama Anda',
        'nis.unique' => 'NIS Tidak Boleh Sama',
        'alamat.required' => 'Silakan Masukkan Alamat Lengkap Anda',
    ]
);
    $data = [
        'nama' => $request->input('nama'),
        'nis' => $request->input('nis'),
        'alamat' => $request->input('alamat'),
    ];
    siswa::create($data);
    return redirect('mastersport')->with('success', 'Data Berhasil Di Tambahkan');
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
        $data = siswa::where('id', $id)->first();
        return view('pages.mastersport.edit', compact('data'));
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
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'alamat' => 'required',
        ],[
            'nama.required' => 'Silakan Masukkan Nama Lengkap Anda',
            'nis.required' => 'Silakan Masukkan Nama Anda',
            'alamat.required' => 'Silakan Masukkan Alamat Lengkap Anda',
        ]
        );
        $data = [
            'nama' => $request->input('nama'),
            'nis' => $request->input('nis'),
            'alamat' => $request->input('alamat'),
        ];
        siswa::where('id', $id)->update($data);
        return redirect('mastersport')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        siswa::where('id', $id)->delete();
        return redirect('mastersport')->with('success', 'Data Berhasil Di Hapus');
    }
}
