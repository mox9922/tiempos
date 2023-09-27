<?php

namespace App\Http\Controllers;

use App\Comisione;
use Illuminate\Http\Request;

/**
 * Class ComisioneController
 * @package App\Http\Controllers
 */
class ComisioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comisiones = Comisione::paginate();

        return view('comisione.index', compact('comisiones'))
            ->with('i', (request()->input('page', 1) - 1) * $comisiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comisione = new Comisione();
        return view('comisione.create', compact('comisione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Comisione::$rules);

        $comisione = Comisione::create($request->all());

        return redirect()->route('comisiones.index')
            ->with('success', 'Comisione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comisione = Comisione::find($id);

        return view('comisione.show', compact('comisione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comisione = Comisione::find($id);

        return view('comisione.edit', compact('comisione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Comisione $comisione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comisione $comisione)
    {
        request()->validate(Comisione::$rules);

        $comisione->update($request->all());

        return redirect()->route('comisiones.index')
            ->with('success', 'Comisione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comisione = Comisione::find($id)->delete();

        return redirect()->route('comisiones.index')
            ->with('success', 'Comisione deleted successfully');
    }
}
