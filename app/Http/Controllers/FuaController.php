<?php

namespace App\Http\Controllers;

use App\Models\Fua;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Models\Redess;
use Auth;
use Pdf;

class FuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['eess'] = Redess::where('redess', Auth::user()->redess)->get();
        return view('fuas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['eess'] = Redess::where('redess', Auth::user()->redess)->get();
        return view('fuas.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        //dd($request);
        $validation = request()->validate([
            'codigo_ipress' => 'required',
            'tipo_documento' => 'required',
            'dni' => 'required',            
            'asegurado_paterno' => 'required',
            'asegurado_materno' => 'required',
            'asegurado_nombres' => 'required',
            'asegurado_genero' => 'required',
        ]);
    
        $fua = Fua::create($request->all());

        return redirect()->route('fuas.edit', ['fua' => $fua])->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fua $fua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fua $fua) : View
    {
        return view('fuas.edit',compact('fua'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fua $fua)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fua $fua)
    {
        //
    }


    public function reporteFUA(Fua $fua){
        $data['fua'] = $fua;
        $data['redess'] = Redess::find($fua->codigo_ipress);
        $pdf = Pdf::loadView('fuas.reporte', $data);
        $pdf->set_paper('a4');
        return $pdf->stream('fua.pdf');
    }

    public function reporteFUA2(Fua $fua){
        $data['fua'] = $fua;
        $data['redess'] = Redess::find($fua->codigo_ipress);
        return view('fuas.reporte', $data);
    }
}
