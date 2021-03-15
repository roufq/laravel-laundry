<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\detail_transaksi;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['laporan'] =Transaksi::whereBetween('created_at', [$request->get('datetime'), $request->get('batas_waktu') ])->get();

        return view('admin.laporan.index', $data);
    }

    // public function cari(Request $request)
	// {
	// 	// menangkap data pencarian
    //     $datetime = $request->get('datetime');
    //     // $batas_waktu = $request->get('batas_waktu');
    //     $laporan['laporan'] = Transaksi::all();
        
    //     //untuk proses mencari data
    //     if($datetime){
    //         $laporan = Transaksi::where("datetime","LIKE","%$datetime%")->get();
    //     }
    //     // else if($batas_waktu){
    //     //     $laporan = Transaksi::where("batas_waktu","LIKE","%$batas_waktu%")->get();
    //     // }
    // 		// mengirim data laporan ke view index
	// 	return redirect('admin/laporan',$laporan);

	// }

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
        //
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
    public function destroy($id)
    {
        //
    }
}
