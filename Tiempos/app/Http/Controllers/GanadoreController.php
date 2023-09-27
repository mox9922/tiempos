<?php

namespace App\Http\Controllers;

use App\Ganadore;
use Illuminate\Http\Request;

/**
 * Class GanadoreController
 * @package App\Http\Controllers
 */
class GanadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ganadores = Ganadore::paginate();

        return view('ganadore.index', compact('ganadores'))
            ->with('i', (request()->input('page', 1) - 1) * $ganadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ganadore = new Ganadore();
        return view('ganadore.create', compact('ganadore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ganadore::$rules);

        $ganadore = Ganadore::create($request->all());

        return redirect()->route('ganadores.index')
            ->with('success', 'Ganadore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ganadore = Ganadore::find($id);

        return view('ganadore.show', compact('ganadore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ganadore = Ganadore::find($id);

        return view('ganadore.edit', compact('ganadore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ganadore $ganadore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ganadore $ganadore)
    {
        request()->validate(Ganadore::$rules);

        $ganadore->update($request->all());

        return redirect()->route('ganadores.index')
            ->with('success', 'Ganadore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ganadore = Ganadore::find($id)->delete();

        return redirect()->route('ganadores.index')
            ->with('success', 'Ganadore deleted successfully');
    }
}
