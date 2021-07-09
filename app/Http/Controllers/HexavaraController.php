<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\modeltagihan;

class HexavaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modeltagihan = modeltagihan::all();
        return view('Hexavara/index', ['coba'=>$modeltagihan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Hexavara/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        modeltagihan::create($request->all());
        return redirect('/hexavara')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(modeltagihan $modeltagihan)
    {
        $id = $modeltagihan->id;
        $cards = DB::select("
        SELECT call_record.incoming_number, call_record.outgoing_number, call_record.duration, call_record.dialed_on 
        FROM customer_detail INNER JOIN call_record 
        ON call_record.incoming_number = customer_detail.phone OR call_record.outgoing_number = customer_detail.phone 
        WHERE customer_detail.id = $id
        ORDER BY call_record.dialed_on;
        ");

        return view('hexavara/show', ['modeltagihan'=>$modeltagihan], ['cards'=>$cards]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(modeltagihan $modeltagihan)
    {
        return view('hexavara/edit', compact('modeltagihan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, modeltagihan $modeltagihan)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        modeltagihan::where('id', $modeltagihan->id)
            ->update([
                'name' => $request->name,
                'phone' => $request->phone
            ]);
        return redirect('/hexavara')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(modeltagihan $modeltagihan)
    {
        modeltagihan::destroy($modeltagihan->id);
        return redirect('/hexavara')->with('status', 'Data Berhasil Dihapus!');
    }
}
