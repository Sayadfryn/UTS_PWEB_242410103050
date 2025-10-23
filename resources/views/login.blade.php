@extends('layouts.Layoutlogin')

@section('content')
    <main class="container mx-auto px-6 mt-20">
        <div class="bg-white p-8 rounded-xl shadow-lg max-w-md mx-auto card animate-fade-in">
            <h2 class="text-2xl font-bold text-center mb-6 text-gray-800"><i class="fas fa-lock mr-2 text-orange-600"></i>Login Admin</h2>
            
            @if (session('error'))
                <div class="bg-red-100 border-l-4 border-red-600 text-red-700 p-4 mb-4 rounded-r">
                    {{ session('error') }}
                </div>
            @endif
            
            <form method="POST" action="{{ route('postLogin') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-user mr-2"></i>Username</label>
                    <input type="text" name="username" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="Masukkan username">
                </div>
                
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-key mr-2"></i>Password</label>
                    <input type="password" name="password" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="Masukkan password">
                </div>
                
                <button type="submit" class="w-full text-white py-3 rounded-lg btn">
                    <i class="fas fa-sign-in-alt mr-2"></i>Masuk
                </button>
            </form>
            <img src="https://2.bp.blogspot.com/-F_C9p4vD9Zg/VXO9E9PmPxI/AAAAAAAABMo/RrUrNbZ-vBc/s1600/ternak%2Bsapi.JPG" class="mt-6 w-full h-auto rounded-lg" alt="Gambar ternak sapi">
        </div>
    </main>
@endsection