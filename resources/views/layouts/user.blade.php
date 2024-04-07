<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SecureStay Hotel | @yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="icon" href="hotel.png">
</head>
 
<body>
    <div>
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 text-white">
                            <a href="{{ url('/') }}" class="text-white text-2xl font-bold">SecureStay Hotel</a>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="{{ url('/') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ Request::is('/') ? 'bg-gray-700 text-white' : '' }}">Home</a>
                                <a href="{{ url('/about') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ Request::is('about') ? 'bg-gray-700 text-white' : '' }}">About Us</a>
                                <a href="{{ url('/contactanos') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ Request::is('contact') ? 'bg-gray-700 text-white' : '' }}">Contact Us</a>
                                <a href="{{ url('/rooms') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ Request::is('rooms') ? 'bg-gray-700 text-white' : '' }}">Rooms</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/profile') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ Auth::user()->name }}</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="{{ url('/') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
                    <a href="{{ url('/about') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About Us</a>
                    <a href="{{ url('/contact') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact Us</a>
                    <a href="{{ url('/rooms') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Rooms</a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                        </div>
                        <button class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 px-2 space-y-1">
                        <a href="{{ url('/profile') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your Profile</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>
                        <a href="{{ url('/logout') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign out</a>
                    </div>
                </div>
            </div>
        </nav>
        
        
        
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div>@yield('contents')</div>
            </div>
        </main>
    </div>

    
 
</body>
<br>
<footer class="bg-gray-800 text-white py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <h2 class="text-lg font-bold mb-2">SecureStay Hotel</h2>
                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet est nec ipsum bibendum consectetur.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2">Contact Information</h2>
                <p class="text-sm"><i class="fas fa-map-marker-alt"></i> 123 Main Street, City, Country</p>
                <p class="text-sm"><i class="fas fa-phone"></i> +1 (123) 456-7890</p>
                <p class="text-sm"><i class="fas fa-envelope"></i> info@securestay.com</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2">Follow Us</h2>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-white hover:text-gray-400"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white hover:text-gray-400"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white hover:text-gray-400"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <hr class="mt-4 mb-2 border-gray-600">
        <p class="text-sm text-center">&copy; 2024 SecureStay. All rights reserved.</p>
    </div>
</footer>

 
</html>