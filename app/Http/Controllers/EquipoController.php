<?php

namespace App\Http\Controllers;

use App\Models\EquipoDeComputo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = EquipoDeComputo::all(); 
        return view('equipos.equipodecomputos', compact('equipos'));
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'procesador' => 'required',
            'ram' => 'required',
            'disco_duro' => 'required',
            'sistema_operativo' => 'required',
            'estado' => 'required',
            'numero_serie' => 'required|unique:equipodecomputo',
        ]);

        $equipo = new EquipoDeComputo();
        $equipo->marca = $request->marca;
        $equipo->modelo = $request->modelo;
        $equipo->procesador = $request->procesador;
        $equipo->ram = $request->ram;
        $equipo->disco_duro = $request->disco_duro;
        $equipo->sistema_operativo = $request->sistema_operativo;
        $equipo->estado = $request->estado;
        $equipo->numero_serie = $request->numero_serie;
        $equipo->save();

        return redirect()->route('equipos.index')->with('success', 'Equipo creado correctamente.');
    }

    public function edit(EquipoDeComputo $equipo)
    {
        return view('equipos.edit', compact('equipo'));
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
            'estado' => 'required',
            'numero_serie' => 'required|unique:equipodecomputo,numero_serie,' . $equipo->id,
        ]);

        $equipo->marca = $request->marca;
        $equipo->modelo = $request->modelo;
        $equipo->procesador = $request->procesador;
        $equipo->ram = $request->ram;
        $equipo->disco_duro = $request->disco_duro;
        $equipo->sistema_operativo = $request->sistema_operativo;
        $equipo->estado = $request->estado;
        $equipo->numero_serie = $request->numero_serie;
        $equipo->save();

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado correctamente.');
    }

    public function destroy(EquipoDeComputo $equipo)
    {
        $equipo->delete();
        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado correctamente.');
    }
}
