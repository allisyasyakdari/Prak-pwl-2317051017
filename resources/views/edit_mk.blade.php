@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-indigo-900 to-blue-800 text-white py-12 px-8">
    <div class="max-w-lg mx-auto bg-indigo-950/50 backdrop-blur-sm rounded-2xl shadow-lg p-8 border border-indigo-700">
        <h1 class="text-3xl font-bold mb-6 text-center text-indigo-300">Edit Mata Kuliah</h1>

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="nama_mk" class="block text-indigo-200 font-semibold mb-2">Nama Mata Kuliah</label>
                <input type="text" id="nama_mk" name="nama_mk" 
                    value="{{ $mk->nama_mk }}" required
                    class="w-full px-4 py-2 rounded-lg bg-indigo-900/60 text-white border border-indigo-700 focus:ring-2 focus:ring-indigo-400 focus:outline-none placeholder-indigo-400">
            </div>

            <div>
                <label for="sks" class="block text-indigo-200 font-semibold mb-2">Jumlah SKS</label>
                <input type="number" id="sks" name="sks" 
                    value="{{ $mk->sks }}" required min="1"
                    class="w-full px-4 py-2 rounded-lg bg-indigo-900/60 text-white border border-indigo-700 focus:ring-2 focus:ring-indigo-400 focus:outline-none placeholder-indigo-400">
            </div>

            <div class="flex justify-center gap-4 pt-6">
                <a href="{{ url('/matakuliah') }}" 
                   class="px-5 py-2 rounded-lg bg-gray-700 text-gray-200 hover:bg-gray-600 transition duration-200 shadow-md">
                    Batal
                </a>

                <button type="submit" 
                    class="px-5 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white font-semibold transition duration-200 shadow-md">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
