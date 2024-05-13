@extends('layout.app')

@section('content')
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
        <h1 class="text-3xl font-bold mb-4">Edit Kop Surat</h1>
        <form action="{{ route('kepalasurat.update', $data->id) }}" method="post">
            @method('patch')
            @csrf
            <div class="mb-4">
                <label for="nama_kop" class="block text-gray-700 font-bold mb-2">Nama Kop</label>
                <input type="text" name="nama_kop" id="nama_kop" value={{ $data->nama_kop}}
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="alamat_kop" class="block text-gray-700 font-bold mb-2">Alamat Kop</label>
                <input type="text" name="alamat_kop" id="alamat_kop" value={{ $data->alamat_kop}}
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="nama_tujuan" class="block text-gray-700 font-bold mb-2">Nama Tujuan</label>
                <input type="text" name="nama_tujuan" id="nama_tujuan" value={{ $data->nama_tujuan}}
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <select name="id_user" id="id_user"
                    class="hidden appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                    <option value={{ $data->id_user}}></option>

                </select>
            </div>
            <button type="submit"
                class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
        </form>
    </div>
@endsection
