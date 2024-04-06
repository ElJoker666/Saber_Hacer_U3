@extends('layouts.user')
 
@section('title', 'Home')
 
@section('contents')

<main class="bg-white-100">
    <!-- Banner inicial -->
<section class="py-16 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-5xl font-bold">Welcome to SecureStay Hotel</h2>
        <p class="mt-4 text-xl">Your perfect destination for a memorable stay!</p>
    </div>
</section>

    
    <!-- Promociones del hotel -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-semibold mb-6 text-gray-900">Special Offers</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Special Spring Offer</h3>
                    <p>Book your stay this spring and get 20% off!</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Family Vacation Package</h3>
                    <p>Enjoy a family vacation with our exclusive package deals!</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Weekend Getaway</h3>
                    <p>Escape for the weekend and save big!</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Marcas con las que trabajamos -->
    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-semibold mb-6 text-gray-900">Our Partners</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="flex items-center justify-center">
                    <img src="https://via.placeholder.com/150" alt="Partner 1" class="h-12">
                </div>
                <div class="flex items-center justify-center">
                    <img src="https://via.placeholder.com/150" alt="Partner 2" class="h-12">
                </div>
                <div class="flex items-center justify-center">
                    <img src="https://via.placeholder.com/150" alt="Partner 3" class="h-12">
                </div>
                <div class="flex items-center justify-center">
                    <img src="https://via.placeholder.com/150" alt="Partner 4" class="h-12">
                </div>
            </div>
        </div>
    </section>

    <!-- Cartas de tipos de habitaciones -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-semibold mb-6 text-gray-900">Room Types</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Tipo de habitación 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" alt="Room 1" class="w-full h-48 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Standard Room</h3>
                        <p class="text-gray-700 mb-4">Ideal for a comfortable stay for individuals or couples.</p>
                        <p class="text-gray-700 mb-2">Price: $100/night</p>
                        <p class="text-gray-700 mb-2">Capacity: 2 persons</p>
                        <p class="text-gray-700 mb-2">Type: Standard</p>
                        <a href="#" class="block bg-gray-800 text-white text-center py-2 px-4 rounded-md hover:bg-gray-700">Book Now</a>
                    </div>
                </div>
                <!-- Tipo de habitación 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" alt="Room 2" class="w-full h-48 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Deluxe Room</h3>
                        <p class="text-gray-700 mb-4">Luxurious room with extra space and amenities.</p>
                        <p class="text-gray-700 mb-2">Price: $150/night</p>
                        <p class="text-gray-700 mb-2">Capacity: 2 persons</p>
                        <p class="text-gray-700 mb-2">Type: Deluxe</p>
                        <a href="#" class="block bg-gray-800 text-white text-center py-2 px-4 rounded-md hover:bg-gray-700">Book Now</a>
                    </div>
                </div>
                <!-- Tipo de habitación 3 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" alt="Room 3" class="w-full h-48 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Suite</h3>
                        <p class="text-gray-700 mb-4">Spacious and elegant suite with stunning views.</p>
                        <p class="text-gray-700 mb-2">Price: $200/night</p>
                        <p class="text-gray-700 mb-2">Capacity: 4 persons</p>
                        <p class="text-gray-700 mb-2">Type: Suite</p>
                        <a href="#" class="block bg-gray-800 text-white text-center py-2 px-4 rounded-md hover:bg-gray-700">Book Now</a>
                    </div>
                </div>
                <!-- Tipo de habitación 4 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" alt="Room 4" class="w-full h-48 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Room with View</h3>
                        <p class="text-gray-700 mb-4">Enjoy stunning views from our premium rooms.</p>
                        <p class="text-gray-700 mb-2">Price: $180/night</p>
                        <p class="text-gray-700 mb-2">Capacity: 2 persons</p>
                        <p class="text-gray-700 mb-2">Type: Premium</p>
                        <a href="#" class="block bg-gray-800 text-white text-center py-2 px-4 rounded-md hover:bg-gray-700">Book Now</a>
                    </div>
                </div>
                <!-- Tipo de habitación 5 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" alt="Room 5" class="w-full h-48 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Penthouse Suite</h3>
                        <p class="text-gray-700 mb-4">Indulge in luxury with our penthouse suite.</p>
                        <p class="text-gray-700 mb-2">Price: $400/night</p>
                        <p class="text-gray-700 mb-2">Capacity: 6 persons</p>
                        <p class="text-gray-700 mb-2">Type: Penthouse</p>
                        <a href="#" class="block bg-gray-800 text-white text-center py-2 px-4 rounded-md hover:bg-gray-700">Book Now</a>
                    </div>
                </div>
                <!-- Tipo de habitación 6 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" alt="Room 5" class="w-full h-48 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Penthouse Suite</h3>
                        <p class="text-gray-700 mb-4">Indulge in luxury with our penthouse suite.</p>
                        <p class="text-gray-700 mb-2">Price: $400/night</p>
                        <p class="text-gray-700 mb-2">Capacity: 6 persons</p>
                        <p class="text-gray-700 mb-2">Type: Penthouse</p>
                        <a href="#" class="block bg-gray-800 text-white text-center py-2 px-4 rounded-md hover:bg-gray-700">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection