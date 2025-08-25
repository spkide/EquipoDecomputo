<?php

namespace App\Http\Controllers;

use App\Models\EquipoDeComputo;
use Illuminate\Http\Request;


class EquipoController extends Controller
{
    public function index()
    {
       $equipos = Equipodecomputo::all(); // Trae todos los registros
        return view('equipos.equipodecomputos', compact('equipos')); // Pasa los datos a la vista   
    }

    public function create()
    {
        return view('equipodecomputos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'procesador' => 'required',
            'ram' => 'required',
            'disco_duro' => 'required',
            'almacenamiento' => 'required',
            'sistema_operativo' => 'required',
            'estado' => 'required',
            'numero_serie' => 'required|unique:equipodecomputos',
        ]);

        $equipo = new EquipoDeComputo();
        $equipo->fill($request->all());
        $equipo->save();

        return redirect()->route('equipos.index')->with('success','Equipo creado correctamente.');
    }

    public function edit(EquipoDeComputo $equipo)
    {
        return view('equipodecomputos.edit', compact('equipo'));
    }

    public function update(Request $request, EquipoDeComputo $equipo)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'procesador' => 'required',
            'ram' => 'required',
            'disco_duro' => 'required',
            'sistema_operativo' => 'required',
            'numero_serie' => 'required|unique:equipodecomputos,numero_serie,'.$equipo->id,
        ]);

        $equipo->update($request->all());
        return redirect()->route('equipos.index')->with('success','Equipo actualizado correctamente.');
    }

    public function destroy(EquipoDeComputo $equipo)
    {
        $equipo->delete();
        return redirect()->route('equipos.index')->with('success','Equipo eliminado correctamente.');
    }
}
