@extends('layouts.Layoutapp')

@section('title', 'Edit Profile')

@section('content')
    <main class="container mx-auto px-6 pt-24 pb-12">
        <div class="bg-white rounded-xl shadow-lg p-6 card animate-fade-in max-w-2xl mx-auto">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6"><i class="fas fa-edit mr-2 text-orange-600"></i>Edit Profile</h2>

            @if (session('error'))
                <div class="bg-red-100 border-l-4 border-red-600 text-red-700 p-4 mb-4 rounded-r">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-600 text-green-700 p-4 mb-4 rounded-r">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('postEditProfile', ['username' => $username]) }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-user mr-2"></i>Nama</label>
                    <input type="text" name="nama" value="{{ $user['nama'] ?? '' }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-envelope mr-2"></i>Email</label>
                    <input type="email" name="email" value="{{ $user['email'] ?? '' }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-phone mr-2"></i>Telepon</label>
                    <input type="text" name="telepon" value="{{ $user['no_hp'] ?? '' }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-map-marker-alt mr-2"></i>Alamat</label>
                    <textarea name="alamat" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600">{{ $user['alamat'] ?? '' }}</textarea>
                </div>
                <div class="flex space-x-4">
                    <x-button type="submit">
                        <i class="fas fa-save mr-2"></i>Simpan
                    </x-button>
                    <x-button href="{{ route('profile', ['username' => $username]) }}" class="bg-blue-600 hover:bg-blue-700">
                        <i class="fas fa-arrow-left mr-2"></i>Kembali
                    </x-button>
                </div>
            </form>
        </div>
    </main>
@endsection