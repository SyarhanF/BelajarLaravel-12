@extends('layout')

@section('content')
<div class="container mx-auto p-6">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-md border border-slate-200">
        <h1 class="text-2xl font-bold text-slate-800 mb-6">Edit Data Pegawai</h1>

        <form action="/pegawai/{{ $pegawai->id }}/update" method="POST">
            @csrf
            @method('PUT') <div class="mb-4">
                <label class="block text-slate-700 font-semibold mb-2">Nama Lengkap</label>
                <input type="text" name="nama" value="{{ old('nama', $pegawai->nama) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('nama') border-red-500 @enderror">
                @error('nama') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 font-semibold mb-2">NIP</label>
                <input type="text" name="nip" value="{{ old('nip', $pegawai->nip) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('nip') border-red-500 @enderror">
                @error('nip') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 font-semibold mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email', $pegawai->email) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-6">
                <label class="block text-slate-700 font-semibold mb-2">Bidang</label>
                <select name="bidang" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('bidang') border-red-500 @enderror">
                    <option value="IT Support" {{ $pegawai->bidang == 'IT Support' ? 'selected' : '' }}>IT Support</option>
                    <option value="Finance" {{ $pegawai->bidang == 'Finance' ? 'selected' : '' }}>Finance</option>
                    <option value="Administrasi" {{ $pegawai->bidang == 'Administrasi' ? 'selected' : '' }}>Administrasi</option>
                </select>
                @error('bidang') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex justify-end gap-4">
                <a href="/pegawai" class="px-4 py-2 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300">Batal</a>
                <button type="submit" class="px-4 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 shadow-lg">Update Data</button>
            </div>
        </form>
    </div>
</div>
@endsection