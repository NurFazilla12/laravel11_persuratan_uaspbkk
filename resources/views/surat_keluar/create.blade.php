@extends('layout.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center pt-10">
        <div class="w-full max-w-2xl">
            <div class="bg-white shadow-md rounded-lg p-8">
                <h2 class="text-2xl font-bold mb-4">Buat Surat Keluar Baru</h2>
                <form method="POST" action="{{ route('suratkeluar.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="id_kop" class="block text-gray-700 font-bold mb-2">Kepala Surat</label>
                        <select name="id_kop" id="id_kop" class="w-full border rounded-lg py-2 px-3">
                            @foreach ($kepalaSurats as $kepalaSurat)
                                <option value="{{ $kepalaSurat->id }}">{{ $kepalaSurat->nama_kop }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="tanggal" class="block text-gray-700 font-bold mb-2">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="w-full border rounded-lg py-2 px-3" required>
                    </div>

                    <div class="mb-4">
                        <label for="no_surat" class="block text-gray-700 font-bold mb-2">Nomor Surat</label>
                        <input type="text" name="no_surat" id="no_surat" class="w-full border rounded-lg py-2 px-3" required>
                    </div>

                    <div class="mb-4">
                        <label for="perihal" class="block text-gray-700 font-bold mb-2">Perihal</label>
                        <input type="text" name="perihal" id="perihal" class="w-full border rounded-lg py-2 px-3" required>
                    </div>

                    <div class="mb-4">
                        <label for="tujuan" class="block text-gray-700 font-bold mb-2">Tujuan</label>
                        <input type="text" name="tujuan" id="tujuan" class="w-full border rounded-lg py-2 px-3" required>
                    </div>

                    <div class="mb-4">
                        <label for="isi_surat" class="block text-gray-700 font-bold mb-2">Isi Surat</label>
                        <textarea name="isi_surat" id="isi_surat" class="w-full border rounded-lg py-2 px-3" rows="5" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="id_tandatangan" class="block text-gray-700 font-bold mb-2">Tanda Tangan</label>
                        <select name="id_tandatangan" id="id_tandatangan" class="w-full border rounded-lg py-2 px-3">
                            @foreach ($namaTandatangans as $namaTandatangan)
                                <option value="{{ $namaTandatangan->id }}">{{ $namaTandatangan->nama_tandatgn }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="id_user" class="block text-gray-700 font-bold mb-2">Dibuat Oleh</label>
                        <select name="id_user" id="id_user" class="w-full border rounded-lg py-2 px-3">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->nama_petugas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
