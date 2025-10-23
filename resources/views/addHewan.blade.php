@extends('layouts.Layoutapp')

@section('title', 'Tambah Hewan')

@section('content')
    <main class="container mx-auto px-6 pt-24 pb-12">
        <div class="bg-white rounded-xl shadow-lg p-6 card animate-fade-in max-w-2xl mx-auto">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6"><i class="fas fa-plus mr-2 text-orange-600"></i>Tambah Hewan</h2>

            @if (session('error'))
                <div class="bg-red-100 border-l-4 border-red-600 text-red-700 p-4 mb-4 rounded-r">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('postAddHewan', ['username' => request()->query('username', 'admin')]) }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-paw mr-2"></i>Nama Hewan</label>
                    <input type="text" name="nama_hewan" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="Masukkan nama hewan">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-barcode mr-2"></i>Kode Hewan</label>
                    <input type="text" name="kode_hewan" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="Masukkan kode hewan">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-calendar mr-2"></i>Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-leaf mr-2"></i>Pakan</label>
                    <select name="id_pakan" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600">
                        @foreach ($pakan as $p)
                            <option value="{{ $p['id'] }}">{{ $p['nama_pakan'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-capsules mr-2"></i>Obat</label>
                    <select name="id_obat" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600">
                        @foreach ($obat as $o)
                            <option value="{{ $o['id'] }}">{{ $o['nama_obat'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-comment mr-2"></i>Keterangan</label>
                    <textarea name="keterangan" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="Masukkan keterangan (opsional)"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2"><i class="fas fa-image mr-2"></i>Link Gambar (Opsional)</label>
                    <input type="url" name="gambar_link" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="Masukkan URL gambar">
                </div>
                <div class="flex space-x-4">
                    <x-button type="submit">
                        <i class="fas fa-save mr-2"></i>Simpan
                    </x-button>
                    <x-button href="{{ route('dashboardHewan', ['username' => request()->query('username', 'admin')]) }}" class="bg-blue-600 hover:bg-blue-700">
                        <i class="fas fa-arrow-left mr-2"></i>Kembali
                    </x-button>
                </div>
            </form>
        </div>
    </main>
@endsection