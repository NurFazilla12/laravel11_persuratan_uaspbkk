@extends('layout.app')

@section('content')

<div class="flex-1 p-4">
    <div class="grid grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Jumlah User</h2>
            <p class="text-gray-600">{{ $jumlahUser }}</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Jumlah Surat Keluar</h2>
            <p class="text-gray-600">{{ $jumlahSuratKeluar }}</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Jumlah Tandatangan</h2>
            <p class="text-gray-600">{{ $jumlahTandatangan }}</p>
        </div>
    </div>
</div>
@endsection
