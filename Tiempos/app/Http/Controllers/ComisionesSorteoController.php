<?php

namespace App\Http\Controllers;

use App\ComisionesSorteo;
use Illuminate\Http\Request;

/**
 * Class ComisionesSorteoController
 * @package App\Http\Controllers
 */
class ComisionesSorteoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comisionesSorteos = ComisionesSorteo::paginate();

        return view('comisiones-sorteo.index', compact('comisionesSorteos'))
            ->with('i', (request()->input('page', 1) - 1) * $comisionesSorteos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comisionesSorteo = new ComisionesSorteo();
        return view('comisiones-sorteo.create', compact('comisionesSorteo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ComisionesSorteo::$rules);

        $comisionesSorteo = ComisionesSorteo::create($request->all());

        return redirect()->route('comisiones-sorteos.index')
            ->with('success', 'ComisionesSorteo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comisionesSorteo = ComisionesSorteo::find($id);

        return view('comisiones-sorteo.show', compact('comisionesSorteo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comisionesSorteo = ComisionesSorteo::find($id);

        return view('comisiones-sorteo.edit', compact('comisionesSorteo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ComisionesSorteo $comisionesSorteo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComisionesSorteo $comisionesSorteo)
    {
        request()->validate(ComisionesSorteo::$rules);

        $comisionesSorteo->update($request->all());

        return redirect()->route('comisiones-sorteos.index')
            ->with('success', 'ComisionesSorteo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comisionesSorteo = ComisionesSorteo::find($id)->delete();

        return redirect()->route('comisiones-sorteos.index')
            ->with('success', 'ComisionesSorteo deleted successfully');
    }
}
