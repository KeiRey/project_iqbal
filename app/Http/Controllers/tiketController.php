<?php

namespace App\Http\Controllers;
use App\tiket;
use Illuminate\Http\Request;
class tiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiket = tiket::all();
        return view('tiket.index', compact('tiket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiket = tiket::all();
        return view('tiket.create', compact('tiket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value= [
            'username'=>$request->username,
            'kategori'=>$request->kategori,
            'tanggal'=>$request-> tanggal,
            'message'=>$request-> message,
        ];
        tiket::create($value);
        return redirect('/tiket');
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
        $tiket = tiket::find($id);
        return view('tiket.edit', compact('tiket'));
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
        $tiket = tiket::find($id);
        $value = [
            'username' =>$request -> username,
            'kategori' =>$request -> kategori,
            'tanggal' =>$request -> tanggal,
            'message' =>$request -> message,

        ];
        $tiket->update($value);
        return redirect('/tiket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiket = tiket::destroy($id);
        return redirect('/tiket');
    }
}
