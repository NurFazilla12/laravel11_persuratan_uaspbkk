@extends('layout.app')

@section('content')
    <div class="min-w-7xl mx-auto shadow-xl p-5 bg-white">
        <div class="mb-6">
            <h1 class="text-2xl font-bold mb-5">Surat</h1>
            <a href="{{route('suratkeluar.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buat Surat</a>
        </div>

        @foreach ($data as $data)
            <div class="border-b border-gray-200 py-5">
                <div class="flex justify-between">
                    <div>
                        <h1 class="text-xl font-bold">{{ $data->kepalaSurat->nama_kop }}</h1>
                        <h1 class="text-gray-600">{{ $data->kepalaSurat->alamat_kop }}</h1>
                        <h1 class="text-gray-600">{{ $data->kepalaSurat->nama_tujuan }}</h1>
                    </div>
                    <div>
                        <a href="{{route('suratkeluar.show',$data->id)}}"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Detail</a>
                        <form action="{{route('suratkeluar.destroy',$data->id)}}" method="POST" class="inline">
                            @method('delete')
                            @csrf
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
