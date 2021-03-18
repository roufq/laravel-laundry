<?php

namespace App\Http\Controllers;
use App\outlet;

use Illuminate\Http\Request;

class OutletsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['outlet'] = Outlet::all();
        return view('admin.outlet.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Outlet();
        $data->nama = $request->get('nama');
        $data->alamat = $request->get('alamat');
        $data->tlp = $request->get('tlp');
        $data->save();
        return redirect('admin/outlet');
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
        $outlet = outlet::where('id',$id)->first();
        return view('admin.outlet.edit', compact('outlet'));
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
        $outlet = Outlet::FindOrFail($id);
        $data = array(
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
        );
        $status = $outlet->fill($data)->save();
        if($status){
            request()->session()->flash('success', 'data berhasil di diedit');
        }else{
            request()->session()->flash('error', 'data gagal di diedit');
        }
        return redirect('admin/outlet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $outlet = Outlet::FindOrFail($id);
        $status = $outlet->delete();
        if($status){
            request()->session()->flash('success','data berhasil di hapus');
        }else{
            request()->session()->flash('eror','data gagal di hapus');
        }
        return redirect('admin/outlet');
    }
}
