@extends('layouts.Layoutapp')

@section('title', 'Tambah Obat')

@section('content')
    <main class="container mx-auto px-6 pt-24 pb-12">
        <div class="bg-white rounded-xl shadow-lg p-6 card animate-fade-in max-w-2xl mx-auto">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6"><i class="fas fa-plus mr-2 text-orange-600"></i>Tambah Obat</h2>

            @if (session('error'))
                <div class="bg-red-100 border-l-4 border-red-600 text-red-700 p-4 mb-4 rounded-r">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('postAddObat', ['username' => $username]) }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-capsules mr-2"></i>Nama Obat</label>
                    <input type="text" name="nama_obat" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="Masukkan nama obat">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-list mr-2"></i>Jenis</label>
                    <input type="text" name="jenis" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="Masukkan jenis obat">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-syringe mr-2"></i>Dosis</label>
                    <input type="text" name="dosis" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="Masukkan dosis (contoh: 1ml/kg)">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-comment mr-2"></i>Deskripsi</label>
                    <textarea name="deskripsi" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="Masukkan deskripsi obat (opsional)"></textarea>
                </div>
                <div class="flex space-x-4">
                    <x-button type="submit">
                        <i class="fas fa-save mr-2"></i>Simpan
                    </x-button>
                    <x-button href="{{ route('dashboardObat', ['username' => $username]) }}" class="bg-blue-600 hover:bg-blue-700">
                        <i class="fas fa-arrow-left mr-2"></i>Kembali
                    </x-button>
                </div>
            </form>
        </div>
    </main>
@endsection