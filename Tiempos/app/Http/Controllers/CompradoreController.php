<?php

namespace App\Http\Controllers;

use App\Compradore;
use Illuminate\Http\Request;

/**
 * Class CompradoreController
 * @package App\Http\Controllers
 */
class CompradoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compradores = Compradore::paginate();

        return view('compradore.index', compact('compradores'))
            ->with('i', (request()->input('page', 1) - 1) * $compradores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compradore = new Compradore();
        return view('compradore.create', compact('compradore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Compradore::$rules);

        $compradore = Compradore::create($request->all());

        return redirect()->route('compradores.index')
            ->with('success', 'Compradore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compradore = Compradore::find($id);

        return view('compradore.show', compact('compradore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compradore = Compradore::find($id);

        return view('compradore.edit', compact('compradore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Compradore $compradore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compradore $compradore)
    {
        request()->validate(Compradore::$rules);

        $compradore->update($request->all());

        return redirect()->route('compradores.index')
            ->with('success', 'Compradore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $compradore = Compradore::find($id)->delete();

        return redirect()->route('compradores.index')
            ->with('success', 'Compradore deleted successfully');
    }
}
