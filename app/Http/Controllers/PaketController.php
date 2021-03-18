<?php

namespace App\Http\Controllers;

use App\Paket;
use App\outlet;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['paket'] = Paket::all();
        return view('admin.paket.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['outlet'] = outlet::get();
        return view('admin.paket.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Paket();
        $data->outlet_id = $request->get('outlet_id');
        $data->jenis = $request->get('jenis');
        $data->nama_paket = $request->get('nama_paket');
        $data->harga = $request->get('harga');
        $data->save();
        return redirect('admin/paket');
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
        $data['outlet'] = outlet::get();
        $data['paket'] = Paket::where('id',$id)->first();
        return view('admin.paket.edit', $data);
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
        $paket = Paket::FindOrFail($id);
        $data = array(
            'outlat_id' => $request->outlet_id,
            'jenis' => $request->jenis,
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
        );
        $status = $paket->fill($data)->save();
        if($status){
            request()->session()->flash('success', 'Data berhasil di ubah');
        }else{
            request()->session()->flash('eror', 'Data gagal di ubah');
        };
        return redirect('admin/paket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = Paket::FindOrFail($id);
        $status = $paket->delete();
        if($status){
            request()->session()->flash('success','data berhasil di hapus');
        }else{
            request()->session()->flash('eror','data gagal di hapus');
        }
        return redirect('admin/paket');
    }
    public function paket($id){
        $paket = paket::findOrFail($id);
        return $paket;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    }
}
