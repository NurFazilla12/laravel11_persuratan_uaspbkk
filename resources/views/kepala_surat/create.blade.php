@extends('layout.app')

@section('content')
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
        <h1 class="text-3xl font-bold mb-4">Tambah Kop Surat</h1>
        <form action="{{route('kepalasurat.store')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="nama_kop" class="block text-gray-700 font-bold mb-2">Nama Kop</label>
                <input type="text" name="nama_kop" id="nama_kop" placeholder="Masukkan nama Kop"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="alamat_kop" class="block text-gray-700 font-bold mb-2">Alamat Kop</label>
                <input type="text" name="alamat_kop" id="alamat_kop" placeholder="Masukkan Alamat Kop"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="nama_tujuan" class="block text-gray-700 font-bold mb-2">Nama Tujuan</label>
                <input type="text" name="nama_tujuan" id="nama_tujuan" placeholder="Masukkan Nama Tujuan"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="id_user" class="block text-gray-700 font-bold mb-2">Pilih User</label>
                <select name="id_user" id="id_user"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($users as $user)
                        <option value={{ $user->id }}>{{ $user->nama_petugas }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit"
                class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
        </form>
    </div>
@endsection
