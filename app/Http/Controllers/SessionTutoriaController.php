<?php

namespace App\Http\Controllers;

use App\Models\SessionTutoria;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SessionTutoriaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SessionTutoriaController extends Controller
{
    
    public function index(Request $request): View
    {
        $sessionTutorias = SessionTutoria::paginate();

        return view('session-tutoria.index', compact('sessionTutorias'))
            ->with('i', ($request->input('page', 1) - 1) * $sessionTutorias->perPage());
    }

   
    public function create(): View
    {
        $sessionTutoria = new SessionTutoria();

        return view('session-tutoria.create', compact('sessionTutoria'));
    }

    
    public function store(SessionTutoriaRequest $request): RedirectResponse
    {
        SessionTutoria::create($request->validated());

        return Redirect::route('session-tutorias.index')
            ->with('success', 'Has creado una nueva session exitosamente');
    }

   
     
    public function show($id): View
    {
        $sessionTutoria = SessionTutoria::find($id);

        return view('session-tutoria.show', compact('sessionTutoria'));
    }

   
    public function edit($id): View
    {
        $sessionTutoria = SessionTutoria::find($id);

        return view('session-tutoria.edit', compact('sessionTutoria'));
    }

    
    public function update(SessionTutoriaRequest $request, SessionTutoria $sessionTutoria): RedirectResponse
    {
        $sessionTutoria->update($request->validated());

        return Redirect::route('session-tutorias.index')
            ->with('success', 'la tutoria se ha actualizado exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        SessionTutoria::find($id)->delete();

        return Redirect::route('session-tutorias.index')
            ->with('success', 'la tutoria se ha eliminado exitosamente');
    }
}
