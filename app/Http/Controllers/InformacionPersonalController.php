<?php

namespace App\Http\Controllers;

use App\Models\InformacionPersonal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\InformacionPersonalRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class InformacionPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $informacionPersonal = InformacionPersonal::paginate();

        return view('informacion-personal.index', compact('informacionPersonals'))
            ->with('i', ($request->input('page', 1) - 1) * $informacionPersonal->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $informacionPersonal = new InformacionPersonal();

        return view('informacion-personal.create', compact('informacionPersonal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InformacionPersonalRequest $request): RedirectResponse
    {
        InformacionPersonal::create($request->validated());

        return Redirect::route('informacion-personals.index')
            ->with('success', 'InformacionPersonal created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $informacionPersonal = InformacionPersonal::find($id);

        return view('informacion-personal.show', compact('informacionPersonal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $informacionPersonal = InformacionPersonal::find($id);

        return view('informacion-personal.edit', compact('informacionPersonal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InformacionPersonalRequest $request, InformacionPersonal $informacionPersonal): RedirectResponse
    {
        $informacionPersonal->update($request->validated());

        return Redirect::route('informacion-personals.index')
            ->with('success', 'InformacionPersonal updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        InformacionPersonal::find($id)->delete();

        return Redirect::route('informacion-personal.index')
            ->with('success', 'InformacionPersonal deleted successfully');
    }
}
