@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-indigo-900 to-blue-800 text-white py-12 px-8">
    <div class="max-w-6xl mx-auto bg-indigo-950/50 backdrop-blur-sm rounded-2xl shadow-lg p-8 border border-indigo-700">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-indigo-300">Daftar Mata Kuliah</h1>
            <a href="{{ route('matakuliah.create') }}" 
               class="bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-lg shadow-md transition duration-200 font-semibold">
                + Tambah Mata Kuliah
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full border border-indigo-700 rounded-lg overflow-hidden">
                <thead class="bg-indigo-800 text-indigo-200 uppercase text-sm">
                    <tr>
                        <th class="px-6 py-3 text-left">ID</th>
                        <th class="px-6 py-3 text-left">Nama Mata Kuliah</th>
                        <th class="px-6 py-3 text-left">SKS</th>
                        <th class="px-6 py-3 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-indigo-950 divide-y divide-indigo-800">
                    @foreach ($mks as $mk)
                        <tr class="hover:bg-indigo-800/60 transition duration-150">
                            <td class="px-6 py-3">{{ $mk->id }}</td>
                            <td class="px-6 py-3">{{ $mk->nama_mk }}</td>
                            <td class="px-6 py-3">{{ $mk->sks }}</td>
                            <td class="px-6 py-3">
                                <div class="flex items-center gap-3">
                                    <a href="{{ route('matakuliah.edit', $mk->id) }}" 
                                       class="bg-blue-600 hover:bg-blue-500 text-white px-3 py-1 rounded-lg text-sm font-medium transition duration-200 shadow-md">
                                        Edit
                                    </a>
                                    
                                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                            class="bg-red-600 hover:bg-red-500 text-white px-3 py-1 rounded-lg text-sm font-medium transition duration-200 shadow-md">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
