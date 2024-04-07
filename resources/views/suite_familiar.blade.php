@extends('layouts.user')
 
@section('title', 'suite_familiar')
 
@section('contents')

<section class="py-16 bg-white-100">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Texto llamativo -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">¡Explora nuestra Suite Familiar!</h2>
            <p class="text-lg text-gray-600">Disfruta de comodidad y espacio para toda la familia en nuestra suite familiar.</p>
        </div>

        <!-- Imágenes de la suite -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <img src="https://via.placeholder.com/800x600" alt="Suite 1" class="w-full object-cover rounded-lg">
            <img src="https://via.placeholder.com/800x600" alt="Suite 2" class="w-full object-cover rounded-lg">
            <img src="https://via.placeholder.com/800x600" alt="Suite 3" class="w-full object-cover rounded-lg">
        </div>

        <!-- Detalles de la suite -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Detalles de la Suite Familiar</h3>
            <ul class="text-gray-700">
                <li>Precio: $250/noche</li>
                <li>Capacidad: 4 personas</li>
                <li>Tipo: Suite Familiar</li>
                <li>Descripción: Amplia suite con múltiples habitaciones y áreas de estar.</li>
            </ul>
        </div>

        <!-- Formulario de reserva -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">¡Reserva ahora!</h3>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-800 font-semibold">Nombre</label>
                    <input type="text" id="name" name="name" class="w-full border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-800 font-semibold">Correo electrónico</label>
                    <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <label for="check-in" class="block text-gray-800 font-semibold">Fecha de llegada</label>
                    <input type="date" id="check-in" name="check-in" class="w-full border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <label for="check-out" class="block text-gray-800 font-semibold">Fecha de salida</label>
                    <input type="date" id="check-out" name="check-out" class="w-full border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md font-semibold hover:bg-blue-500">Reservar</button>
                </div>
            </form>
        </div>
    </div>
</section>



@endsection