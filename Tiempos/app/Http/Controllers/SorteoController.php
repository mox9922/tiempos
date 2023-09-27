<?php

namespace App\Http\Controllers;

use App\Sorteo;
use Illuminate\Http\Request;

/**
 * Class SorteoController
 * @package App\Http\Controllers
 */
class SorteoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sorteos = Sorteo::paginate();

        return view('sorteo.index', compact('sorteos'))
            ->with('i', (request()->input('page', 1) - 1) * $sorteos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sorteo = new Sorteo();
        return view('sorteo.create', compact('sorteo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sorteo::$rules);

        $sorteo = Sorteo::create($request->all());

        return redirect()->route('sorteos.index')
            ->with('success', 'Sorteo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sorteo = Sorteo::find($id);

        return view('sorteo.show', compact('sorteo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sorteo = Sorteo::find($id);

        return view('sorteo.edit', compact('sorteo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sorteo $sorteo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sorteo $sorteo)
    {
        request()->validate(Sorteo::$rules);

        $sorteo->update($request->all());

        return redirect()->route('sorteos.index')
            ->with('success', 'Sorteo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sorteo = Sorteo::find($id)->delete();

        return redirect()->route('sorteos.index')
            ->with('success', 'Sorteo deleted successfully');
    }
}
