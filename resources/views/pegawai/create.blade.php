@extends('layout')

@section('content')
<div class="container mx-auto p-6">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-md border border-slate-200">
        <h1 class="text-2xl font-bold text-slate-800 mb-6">Tambah Data Pegawai</h1>

        <form action="/pegawai/store" method="POST">
            @csrf <div class="mb-4">
                <label class="block text-slate-700 font-semibold mb-2">Nama Lengkap</label>
                <input type="text" name="nama" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('nama') border-red-500 @enderror" value="{{ old('nama') }}">
                @error('nama') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 font-semibold mb-2">NIP</label>
                <input type="text" name="nip" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('nip') border-red-500 @enderror" value="{{ old('nip') }}">
                @error('nip') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 font-semibold mb-2">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-6">
                <label class="block text-slate-700 font-semibold mb-2">Bidang</label>
                <select name="bidang" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('bidang') border-red-500 @enderror">
                    <option value="">-- Pilih Bidang --</option>
                    <option value="IT Support">IT Support</option>
                    <option value="Finance">Finance</option>
                    <option value="Administrasi">Administrasi</option>
                </select>
                @error('bidang') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex justify-end gap-4">
                <a href="/pegawai" class="px-4 py-2 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300">Batal</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 shadow-lg">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection