@extends('layout.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Detail Surat</h1>
        <div class="bg-white shadow-md rounded-lg p-6">

            <div class="flex justify-center mb-5">
                <div>
                    <p class="font-bold text-2xl text-center underline">{{ $data->kepalaSurat->nama_kop }}</p>
                    <p class="text-gray-600 text-center">{{ $data->no_surat }}</p>
                </div>
            </div>

            <div class="mb-5">
                <p class="font-semibold">Yang bertanda tangan di bawah ini:</p>
                <div class="flex gap-10">
                    <p class="font-semibold">Nama:</p>
                    <p>{{ $data->tandatangan->nama_tandatgn }}</p>
                </div>
                <div class="flex gap-10">
                    <p class="font-semibold">Jabatan:</p>
                    <p>{{ $data->tandatangan->jabatan }}</p>
                </div>
                <div class="flex gap-10">
                    <p class="font-semibold">NIP:</p>
                    <p>{{ $data->tandatangan->nip }}</p>
                </div>
            </div>

            <div class="mb-5">
                <p class="font-semibold">Kepada yang terhormat dengan ini menerangkan bahwa:</p>
                <div class="flex gap-10">
                    <p class="font-semibold">Nama:</p>
                    <p>{{ $data->kepalaSurat->nama_tujuan }}</p>
                </div>
                <div class="flex gap-10">
                    <p class="font-semibold">Perusahaan:</p>
                    <p>{{ $data->kepalaSurat->alamat_kop }}</p>
                </div>
            </div>

            <div class="mb-5">
                <p class="font-semibold">Isi Surat:</p>
                <p>{{ $data->isi_surat }}</p>
            </div>

            <div class="mb-5">
                <h1 class="text-xl font-bold mt-6 mb-2">Tujuan</h1>
                <p class="text-gray-600">{{ $data->tujuan }}</p>
            </div>

            <div class="mb-5 w-full">

                <p class="text-gray-600 text-right">{{ $data->tanggal }}</p>
            </div>
        </div>
    </div>
@endsection
