<?php

namespace App\Http\Controllers;

use App\Models\Index;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\IndexRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $indices = Index::paginate();

        return view('index.index', compact('indices'))
            ->with('i', ($request->input('page', 1) - 1) * $indices->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $index = new Index();

        return view('index.create', compact('index'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IndexRequest $request): RedirectResponse
    {
        Index::create($request->validated());

        return Redirect::route('indices.index')
            ->with('success', 'Index created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $index = Index::find($id);

        return view('index.show', compact('index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $index = Index::find($id);

        return view('index.edit', compact('index'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IndexRequest $request, Index $index): RedirectResponse
    {
        $index->update($request->validated());

        return Redirect::route('indices.index')
            ->with('success', 'Index updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Index::find($id)->delete();

        return Redirect::route('indices.index')
            ->with('success', 'Index deleted successfully');
    }
}
