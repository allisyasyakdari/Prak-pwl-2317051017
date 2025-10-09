@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-indigo-800 to-blue-900 dark:from-gray-900 dark:to-gray-800 py-10 px-4 transition-colors duration-500">
    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-2xl shadow-2xl p-8">
        <h1 class="text-2xl font-bold mb-6 text-center text-indigo-700 dark:text-indigo-400">
            Buat Pengguna Baru
        </h1>

        <form action="{{ route('user.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="nama" class="block text-gray-700 dark:text-gray-200 font-semibold mb-2">Nama</label>
                <input type="text" id="nama" name="nama"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none dark:bg-gray-700 dark:text-white"
                    placeholder="Masukkan nama pengguna" required>
            </div>

            <div>
                <label for="npm" class="block text-gray-700 dark:text-gray-200 font-semibold mb-2">NPM</label>
                <input type="text" id="npm" name="npm"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none dark:bg-gray-700 dark:text-white"
                    placeholder="Masukkan NPM" required>
            </div>

            <div>
                <label for="kelas_id" class="block text-gray-700 dark:text-gray-200 font-semibold mb-2">Kelas</label>
                <select name="kelas_id" id="kelas_id"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none dark:bg-gray-700 dark:text-white">
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-center">
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-md shadow-md transition">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
