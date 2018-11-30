<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Siska_12787 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = ModelSiska::all();
		return view('admin',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelUser();
$data->id = $request->id;
$data->nama = $request->nama;
$data->ipv4 = $request->ipv4;
$data->username = $request->username;
$data->password = $request->password;
$data->save();
return redirect()->route('admin.index')->with('alert-success','Berhasil Menambahkan Data!');
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
         $data = ModelSiska::where('id',$id)->get();
		 return view('admin_edit',compact('data'));
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
        $data = ModelSiska::where('id',$id)->first();
		 $data->id = $request->id;
		 $data->nama = $request->nama;
		 $data->email = $request->email;
		 $data->username = $request->username;
		 $data->password = $request->password;
		 $data->save();
		 return redirect()->route('admin.index')->with(
		 'alert-success','Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelSiska::where('id',$id)->first();
		$data->delete();
		 return redirect()->route('admin.index')->with(
		 'alert-success','Data Berhasil dihapus');
    }
}
