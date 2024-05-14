<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;




class dosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $katakunci = $request->katakunci;
    $jumlahbaris = 10;
    if (strlen($katakunci)) {
        $data = dosen::where('kode_dosen', 'like', "%" . $katakunci . "%")
            ->orWhere('nama_dosen', 'like', "%" . $katakunci . "%")
            ->orWhere('nidn', 'like', "%" . $katakunci . "%")
            ->paginate($jumlahbaris);
    } else {
        $data = dosen::orderBy('kode_dosen', 'desc')->paginate($jumlahbaris);
    }
    return view('dosen.index')->with('data', $data);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        Session::flash('kode_dosen, $request->kode_dosen');
        Session::flash('nama_dosen, $request->nama_dosen');
        Session::flash('nip_nik, $request->nip_nik');
        Session::flash('nidn, $request->nidn');
        Session::flash('jabatan, $request->jabatan');
        Session::flash('email, $request->email');
        Session::flash('hp_wa, $request->hp_wa');
        Session::flash('alamat, $request->alamat');


        $request->validate([
         'kode_dosen'=>'required|unique:dosen,kode_dosen',
         'nama_dosen'=>'required',
         'nip_nik'=>'required',
         'nidn'=>'required',
         'jabatan'=>'required',
         'email'=>'required',
         'hp_wa'=>'required',
         'alamat'=>'required',
        ],[
            'kode_dosen.required'=>'Kode Dosen wajib diisi',
            'kode_dosen.unique'=> 'kode_dosen sudah ada dalam data', 
            'nama_dosen.required'=>'nama_dosen wajib diisi',
            'nip_nik.required'=>'NIP/NIK wajib diisi',
            'nidn.required'=>'NIDN wajib diisi',
            'jabatan.required'=>'Jabatan wajib diisi',
            'email.required'=>'Email wajib diisi',
            'hp_wa.required'=>'No HP/WA wajib diisi',
            'alamat.required'=>'Alamat wajib diisi',
        ]);
        $data = [
            'kode_dosen'=>$request->kode_dosen,
            'nama_dosen'=>$request->nama_dosen,
            'nip_nik'=>$request->nip_nik,
            'nidn'=>$request->nidn,
            'jabatan'=>$request->jabatan,
            'email'=>$request->email,
            'hp_wa'=>$request->hp_wa,
            'alamat'=>$request->alamat,
        ];
        dosen::create($data);
        return redirect()->to('dosen')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = dosen::where('kode_dosen', $id)->first();
        return view('dosen.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_dosen'=>'required',
            'nama_dosen'=>'required',
            'nip_nik'=>'required',
            'nidn'=>'required',
            'jabatan'=>'required',
            'email'=>'required',
            'hp_wa'=>'required',
            'alamat'=>'required',
           ],[
               'kode_dosen.required'=>'kode dosen wajib diisi',
               'nama_dosen.required'=>'nama dosen wajib diisi',
               'nip_nik.required'=>'NIP/NIK wajib diisi',
               'nidn.required'=>'NIDN wajib diisi',
               'jabatan.required'=>'Jabatan wajib diisi',
               'email.required'=>'Email wajib diisi',
               'hp_wa.required'=>'No HP/WA wajib diisi',
               'alamat.required'=>'Alamat wajib diisi',
           ]);
           $data = [
               'kode_dosen'=>$request->kode_dosen,
               'nama_dosen'=>$request->nama_dosen,
               'nip_nik'=>$request->nip_nik,
               'nidn'=>$request->nidn,
               'jabatan'=>$request->jabatan,
               'email'=>$request->email,
               'hp_wa'=>$request->hp_wa,
               'alamat'=>$request->alamat,
           ];
           dosen::where('kode_dosen', $id)->update($data);
           return redirect()->to('dosen')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dosen::where('kode_dosen',$id)->delete();
        return redirect()->to('dosen')->with('succes','Berhasil Melakukan Delete Data');
    }

  
}
