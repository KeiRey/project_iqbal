<?php

namespace App\Http\Controllers;
use App\artikel;
use Illuminate\Http\Request;

class artikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = artikel::all();
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikel = artikel::all();
        return view('artikel.create', compact('artikel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel= [
            'solusi'=>$request->solusi,
            'tiket_id'=>$request-> tiket_id,
            'admin_id'=>$request-> admin_id,
            'password'=>$request-> password,

        ];
        artikel::create($artikel);
        return redirect('/artikel');
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
        $artikel = artikel::find($id);
        return view('artikel.edit', compact('artikel'));
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
        $artikel = artikel::find($id);
        $value = [
            'solusi'=>$request->solusi,
            'tiket'=>$request->tiket_id,
            'admin_id'=>$request->admin_id,
        ];
        $artikel->update($value);
        return redirect('/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = artikel::destroy($id);
        return redirect('/artikel');
    }
}
