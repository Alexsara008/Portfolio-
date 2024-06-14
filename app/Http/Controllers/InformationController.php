<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\InformationRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $information = Information::paginate();

        return view('information.index', compact('information'))
            ->with('i', ($request->input('page', 1) - 1) * $information->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $information = new Information();

        return view('information.create', compact('information'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InformationRequest $request): RedirectResponse
    {
        Information::create($request->validated());

        return Redirect::route('information.index')
            ->with('success', 'Information created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $information = Information::find($id);

        return view('information.show', compact('information'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $information = Information::find($id);

        return view('information.edit', compact('information'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InformationRequest $request, Information $information): RedirectResponse
    {
        $information->update($request->validated());

        return Redirect::route('information.index')
            ->with('success', 'Information updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Information::find($id)->delete();

        return Redirect::route('information.index')
            ->with('success', 'Information deleted successfully');
    }
}
