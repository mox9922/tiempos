<?php

namespace App\Http\Controllers;

use App\Restringido;
use Illuminate\Http\Request;

/**
 * Class RestringidoController
 * @package App\Http\Controllers
 */
class RestringidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restringidos = Restringido::paginate();

        return view('restringido.index', compact('restringidos'))
            ->with('i', (request()->input('page', 1) - 1) * $restringidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restringido = new Restringido();
        return view('restringido.create', compact('restringido'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Restringido::$rules);

        $restringido = Restringido::create($request->all());

        return redirect()->route('restringidos.index')
            ->with('success', 'Restringido created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restringido = Restringido::find($id);

        return view('restringido.show', compact('restringido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restringido = Restringido::find($id);

        return view('restringido.edit', compact('restringido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Restringido $restringido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restringido $restringido)
    {
        request()->validate(Restringido::$rules);

        $restringido->update($request->all());

        return redirect()->route('restringidos.index')
            ->with('success', 'Restringido updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $restringido = Restringido::find($id)->delete();

        return redirect()->route('restringidos.index')
            ->with('success', 'Restringido deleted successfully');
    }
}
