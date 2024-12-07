<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OpinionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OpinionController extends Controller
{
    
    public function index(Request $request): View
    {
        $opinions = Opinion::paginate();

        return view('opinion.index', compact('opinions'))
            ->with('i', ($request->input('page', 1) - 1) * $opinions->perPage());
    }

   
    public function create(): View
    {
        $opinion = new Opinion();

        return view('opinion.create', compact('opinion'));
    }


    public function store(OpinionRequest $request): RedirectResponse
    {
        Opinion::create($request->validated());

        return Redirect::route('opinions.index')
            ->with('success', 'Opinión creada exitosamente.');
    }

    
    public function show($id): View
    {
        $opinion = Opinion::find($id);

        return view('opinion.show', compact('opinion'));
    }

    
    public function edit($id): View
    {
        $opinion = Opinion::find($id);

        return view('opinion.edit', compact('opinion'));
    }

    
    public function update(OpinionRequest $request, Opinion $opinion): RedirectResponse
    {
        $opinion->update($request->validated());

        return Redirect::route('opinions.index')
            ->with('success', 'Opinión actualizada exitosamente.');
    }

    public function destroy($id): RedirectResponse
    {
        Opinion::find($id)->delete();

        return Redirect::route('opinions.index')
            ->with('success', 'Opinión eliminada exitosamente.');
    }
}
