@extends('layout.app')

@section('content')
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
        <h1 class="text-3xl font-bold mb-4">Tandatangan List</h1>
        <a href="{{ route('tandatangan.create') }}"
            class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Tambah Tandatangan</a>
        <div class="mt-4">
            <table class="w-full table-auto">
                <thead>
                    <tr class="text-left border-b-2 border-gray-300">
                        <th class="px-4 py-2">Nama Tandatangan</th>
                        <th class="px-4 py-2">Jabatan</th>
                        <th class="px-4 py-2">NIP</th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $tandatangan)
                        <tr class="border-b-2 border-gray-300">
                            <td class="px-4 py-2">{{ $tandatangan->nama_tandatgn }}</td>
                            <td class="px-4 py-2">{{ $tandatangan->jabatan }}</td>
                            <td class="px-4 py-2">{{ $tandatangan->nip }}</td>
                            <td class="px-4 py-2 flex justify-end">
                                <a href="{{ route('tandatangan.edit', $tandatangan->id) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                                <form action="{{ route('tandatangan.destroy', $tandatangan->id) }}" method="post">
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
