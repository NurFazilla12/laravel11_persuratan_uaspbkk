@extends('layout.app')

@section('content')

<div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
    <h1 class="text-3xl font-bold mb-4">Kop Surat List</h1>
    <a href="{{ route('kepalasurat.create') }}"
        class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Tambah Kepala Surat</a>
    <div class="mt-4">
        <table class="w-full table-auto">
            <thead>
                <tr class="text-left border-b-2 border-gray-300">
                    <th class="px-4 py-2">Nama Kop</th>
                    <th class="px-4 py-2">Alamat Kop</th>
                    <th class="px-4 py-2">Nama Tujuan</th>
                    <th class="px-4 py-2">Dibuat oleh</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr class="border-b-2 border-gray-300">
                        <td class="px-4 py-2">{{ $data->nama_kop}}</td>
                        <td class="px-4 py-2">{{ $data->alamat_kop}}</td>
                        <td class="px-4 py-2">{{ $data->nama_tujuan }}</td>
                        <td class="px-4 py-2">{{ $data->user->nama_petugas }}</td>
                        <td class="px-4 py-2 flex justify-end">
                            <a href="{{ route('kepalasurat.edit', $data->id) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                            <form action="{{ route('kepalasurat.destroy', $data->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
