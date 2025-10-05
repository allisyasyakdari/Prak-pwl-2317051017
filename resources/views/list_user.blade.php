@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-indigo-900 to-blue-800 text-white py-12 px-8">
    <div class="max-w-6xl mx-auto bg-indigo-950/50 backdrop-blur-sm rounded-2xl shadow-lg p-8 border border-indigo-700">
        <h1 class="text-3xl font-bold mb-6 text-center text-indigo-300">Daftar Pengguna</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full border border-indigo-700 rounded-lg overflow-hidden">
                <thead class="bg-indigo-800 text-indigo-200 uppercase text-sm">
                    <tr>
                        <th class="px-6 py-3 text-left">ID</th>
                        <th class="px-6 py-3 text-left">Nama</th>
                        <th class="px-6 py-3 text-left">NPM</th>
                        <th class="px-6 py-3 text-left">Kelas</th>
                    </tr>
                </thead>
                <tbody class="bg-indigo-950 divide-y divide-indigo-800">
                    @foreach ($users as $user)
                    <tr class="hover:bg-indigo-800/60 transition duration-150">
                        <td class="px-6 py-3">{{ $user->id }}</td>
                        <td class="px-6 py-3">{{ $user->nama }}</td>
                        <td class="px-6 py-3">{{ $user->nim }}</td>
                        <td class="px-6 py-3">{{ $user->nama_kelas }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection