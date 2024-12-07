<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UsuarioController extends Controller
{
    
    public function index(Request $request): View
    {
        $usuarios = Usuario::paginate();
        return view('usuario.index', compact('usuarios'));
    }

    
    public function create(): View
    {
        $usuario = new Usuario();

        return view('usuario.create', compact('usuario'));
    }

    
    public function store(UsuarioRequest $request): RedirectResponse
    {
        Usuario::create($request->validated());

        return Redirect::route('usuarios.index')
            ->with('success', 'Usuario creado exitosamente.');
    }

    
    public function show($id): View
    {
        $usuario = Usuario::find($id);

        return view('usuario.show', compact('usuario'));
    }

    
    public function edit($id): View
    {
        $usuario = Usuario::find($id);

        return view('usuario.edit', compact('usuario'));
    }

    
    public function update(UsuarioRequest $request, Usuario $usuario): RedirectResponse
    {
        $usuario->update($request->validated());

        return Redirect::route('usuarios.index')
            ->with('success', 'Usuario actualizado exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        Usuario::find($id)->delete();

        return Redirect::route('usuarios.index')
            ->with('success', 'Usuario eliminado exitosamente');
    }
}
