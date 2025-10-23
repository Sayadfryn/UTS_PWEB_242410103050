@extends('layouts.Layoutapp')

@section('title', 'Profile Admin')

@section('content')
    <main class="container mx-auto px-6 pt-24 pb-12">
        <div class="bg-white rounded-xl shadow-lg p-6 card animate-fade-in max-w-2xl mx-auto">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6"><i class="fas fa-user mr-2 text-orange-600"></i>Profile</h2>

            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-600 text-green-700 p-4 mb-4 rounded-r">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-100 border-l-4 border-red-600 text-red-700 p-4 mb-4 rounded-r">
                    {{ session('error') }}
                </div>
            @endif

            <div class="space-y-4">
                <p><strong>Username:</strong> {{ $username }}</p>
                <p><strong>Nama:</strong> {{ $user['nama'] ?? 'Tidak ada' }}</p>
                <p><strong>Email:</strong> {{ $user['email'] ?? 'Tidak ada' }}</p>
                <p><strong>Telepon:</strong> {{ $user['no_hp'] ?? 'Tidak ada' }}</p>
                <p><strong>Alamat:</strong> {{ $user['alamat'] ?? 'Tidak ada' }}</p>
            </div>

            <div class="mt-6">
                <x-button href="{{ route('editProfile', ['username' => $username]) }}" class="bg-yellow-600 hover:bg-yellow-700">
                    <i class="fas fa-edit mr-2"></i>Edit Profile
                </x-button>
            </div>
        </div>
    </main>
@endsection