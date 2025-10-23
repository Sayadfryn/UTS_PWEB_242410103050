@extends('layouts.layoutapp')
@section('title', 'Dashboard')
@section('content')
<main class="container mx-auto px-6 pt-24 pb-12">
    <div class="max-w-6xl mx-auto">

        <div class="text-left mb-12">
            <h2 class="text-4xl font-extrabold text-emerald-700">Selamat Datang,</h2>
            <p class="text-5xl font-semibold text-gray-700 mt-3">
                <strong>{{ $username }}</strong>
            </p>
            <p class="mt-4 text-gray-600 text-lg max-w-3xl">
                Senang bertemu kembali di <span class="font-semibold text-emerald-700">Peternakan Nusantara</span>,
                sistem pengelolaan peternakan modern untuk membantu peternak dalam memantau hewan, pakan,
                dan obat secara efisien.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 items-center bg-white rounded-2xl shadow-xl p-8 border border-emerald-100">
            <div>
                <h3 class="text-2xl font-bold text-emerald-700 mb-4">Tentang <span class="text-green-600">Peternakan Nusantara</span></h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    <strong>Peternakan Nusantara</strong> dirancang untuk memudahkan pengelolaan hewan ternak,
                    pakan, dan obat. Dengan fitur yang sederhana dan cepat, pengguna dapat:
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Melihat data hewan, pakan, dan obat secara real-time.</li>
                    <li>Menambah, mengedit, atau menghapus data dengan mudah.</li>
                </ul>
            </div>

            <div class="flex justify-center">
                <img 
                    src="https://tse3.mm.bing.net/th/id/OIP.nzggBmhVImJn31UhCa9oWwHaE8?pid=Api&P=0&h=180" 
                    alt="peternakan" 
                    class="w-64 h-64 object-contain p-4 bg-emerald-50 rounded-2xl shadow-inner border border-emerald-100 hover:scale-105 transition-transform duration-300"
                >
            </div>
        </div>

        <div class="mt-12 text-center">
            <h4 class="text-2xl font-bold text-emerald-700 mb-4">Mulai Kelola Peternakan Anda</h4>
            <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Dengan pengelolaan yang baik, peternakan Anda akan lebih produktif dan sehat.
                Gunakan <strong>Peternakan Nusantara</strong> untuk mengatur hewan, pakan, dan obat secara efisien.
            </p>
            <div class="mt-8 space-x-4">
                <a href="{{ route('dashboardHewan') }}" class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-lg font-semibold shadow-md transition-all duration-200">Kelola Hewan</a>
                <a href="{{ route('dashboardPakan') }}" class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-lg font-semibold shadow-md transition-all duration-200">Kelola Pakan</a>
                <a href="{{ route('dashboardObat') }}" class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-lg font-semibold shadow-md transition-all duration-200">Kelola Obat</a>
            </div>
        </div>

    </div>
</main>
@endsection