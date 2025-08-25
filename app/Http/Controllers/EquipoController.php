<?php

namespace App\Http\Controllers;

use App\Models\EquipoDeComputo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        // Usar el modelo correctamente
        $equipos = EquipoDeComputo::all(); 
        return view('equipos.equipodecomputo', compact('equipos'));
    }

    public function create()
    {
        return view('equipodecomputo.create');
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
            'numero_serie' => 'required|unique:equipodecomputo',
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
            'numero_serie' => 'required|unique:equipodecomputo,numero_serie,'.$equipo->id,
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
