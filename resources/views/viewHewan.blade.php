@extends('layouts.Layoutapp')

@section('title', 'Detail Hewan')

@section('content')
    <main class="container mx-auto px-6 pt-24 pb-12">
        <div class="bg-white rounded-xl shadow-lg p-6 card animate-fade-in max-w-2xl mx-auto">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6"><i class="fas fa-paw mr-2 text-orange-600"></i>Detail Hewan</h2>

            @if (session('error'))
                <div class="bg-red-100 border-l-4 border-red-600 text-red-700 p-4 mb-4 rounded-r">
                    {{ session('error') }}
                </div>
            @endif

            <div class="space-y-4">
                <p><strong>Nama Hewan:</strong> {{ $hewan['nama_hewan'] }}</p>
                <p><strong>Kode Hewan:</strong> {{ $hewan['kode_hewan'] }}</p>
                <p><strong>Tanggal Masuk:</strong> {{ \Carbon\Carbon::parse($hewan['tanggal_masuk'])->format('d-m-Y') }}</p>
                <p><strong>Pakan:</strong> {{ $pakan_nama }}</p>
                <p><strong>Obat:</strong> {{ $nama_obat }}</p>
                <p><strong>Keterangan:</strong> {{ $hewan['keterangan'] ?: 'Tidak ada keterangan' }}</p>
            </div>
            <div class="mt-6">
                <img src="{{ $gambar }}" alt="Gambar {{ $hewan['nama_hewan'] }}" class="w-full h-auto rounded-lg shadow-md">
            </div>
            <div class="mt-6 flex space-x-4">
                <x-button href="{{ route('editHewan', ['id' => $hewan['id'], 'username' => $username]) }}" class="bg-yellow-600 hover:bg-yellow-700">
                    <i class="fas fa-edit mr-1"></i>Edit
                </x-button>
                <x-button href="{{ route('dashboardHewan', ['username' => $username]) }}" class="bg-blue-600 hover:bg-blue-700">
                    <i class="fas fa-arrow-left mr-1"></i>Kembali
                </x-button>
                <x-button type="button" onclick="window.print()" class="bg-blue-600 hover:bg-blue-700">
                    <i class="fas fa-print mr-1"></i>Cetak
                </x-button>
            </div>
        </div>
    </main>
@endsection