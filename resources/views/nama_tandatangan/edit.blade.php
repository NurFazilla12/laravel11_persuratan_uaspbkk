@extends('layout.app')

@section('content')
<div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
    <h1 class="text-3xl font-bold mb-4">Edit Tandatangan</h1>
    <form action="{{ route('tandatangan.update', $data->id) }}" method="POST">
        @method('patch')
        @csrf
        <div class="mb-4">
            <label for="nama_tandatgn" class="block text-gray-700 font-bold mb-2">Nama Tandatangan</label>
            <input type="text" name="nama_tandatgn" id="nama_tandatgn" value={{$data->nama_tandatgn}}
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="jabatan" class="block text-gray-700 font-bold mb-2">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" value={{$data->jabatan}}
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="nip" class="block text-gray-700 font-bold mb-2">NIP</label>
            <input type="text" name="nip" id="nip" value={{$data->nip}}
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit"
            class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Submit</button>
    </form>
</div>

@endsection
