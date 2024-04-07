<?php

namespace App\Http\Controllers;

use App\Models\Reservas;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function create(Request $request)
    {
        // Crear una nueva instancia de Reserva con los datos del formulario
        $reserva = new Reservas();
        $reserva->name = $request->input('name');
        $reserva->email = $request->input('email');
        $reserva->cuarto = $request->input('cuarto');
        $reserva->precio = $request->input('precio');
        $reserva->fecha_llegada = $request->input('fecha_llegada');
        $reserva->fecha_salida = $request->input('fecha_salida');

        // Guardar la reserva en la base de datos
        $reserva->save();

        // Puedes redirigir a una página de éxito o hacer cualquier otra cosa aquí
        return redirect()->route('reservas');
    }

    public function mostrarReservas()
    {
        // Obtener todas las reservas de la base de datos
        $reservas = Reservas::all();

        // Puedes pasar las reservas a la vista correspondiente
        return view('reservas', ['reservas' => $reservas]);
    }

}
