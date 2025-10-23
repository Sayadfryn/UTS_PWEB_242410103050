@extends('layouts.Layoutapp')

@section('title', 'Dashboard Hewan')

@section('content')
    <main class="container mx-auto px-6 pt-24 pb-12">
        <div class="bg-white rounded-xl shadow-lg p-6 card animate-fade-in">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                <i class="fas fa-paw mr-2 text-orange-600"></i>Kelola Hewan dengan mudah
            </h2>   

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

            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-semibold text-gray-800">Daftar Hewan</h3>
                <x-button href="{{ route('addHewan', ['username' => $username]) }}">
                    <i class="fas fa-plus mr-2"></i>Tambah Hewan
                </x-button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full bg-white rounded-lg">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-4 text-left font-semibold text-gray-800">Nama Hewan</th>
                            <th class="p-4 text-left font-semibold text-gray-800">Kode</th>
                            <th class="p-4 text-left font-semibold text-gray-800">Tanggal Masuk</th>
                            <th class="p-4 text-left font-semibold text-gray-800">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($hewan as $row)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-4 font-medium">{{ $row['nama_hewan'] }}</td>
                                <td class="p-4">{{ $row['kode_hewan'] }}</td>
                                <td class="p-4">{{ \Carbon\Carbon::parse($row['tanggal_masuk'])->format('d-m-Y') }}</td>
                                <td class="p-4 flex space-x-2">
                                    <x-button href="{{ route('viewHewan', ['id' => $row['id'], 'username' => $username]) }}" class="bg-blue-600 hover:bg-blue-700">
                                        <i class="fas fa-eye mr-1"></i>Lihat
                                    </x-button>
                                    <x-button href="{{ route('editHewan', ['id' => $row['id'], 'username' => $username]) }}" class="bg-yellow-600 hover:bg-yellow-700">
                                        <i class="fas fa-edit mr-1"></i>Edit
                                    </x-button>
                                    <x-button href="{{ route('deleteHewan', ['id' => $row['id'], 'username' => $username]) }}" class="bg-red-600 hover:bg-red-700">
                                        <i class="fas fa-trash mr-1"></i>Hapus
                                    </x-button>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="4" class="p-8 text-center text-gray-500">Belum ada hewan yang ditambahkan.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>

@endsection