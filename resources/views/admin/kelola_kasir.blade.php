@extends('admin.layout.app')

@section('content')

<div class="p-6">

    <h1 class="text-2xl font-bold mb-4">Kelola Kasir</h1>

    {{-- ALERT SUCCESS --}}
    @if (session('success'))
        <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- FORM TAMBAH / EDIT --}}
        <div class="bg-white p-5 rounded shadow">

            @if ($editKasir)
                <h2 class="text-xl font-semibold mb-3">Edit Kasir</h2>
                <form action="{{ route('kelola_kasir.update', $editKasir->id) }}" method="POST">
                    @csrf
            @else
                <h2 class="text-xl font-semibold mb-3">Tambah Kasir</h2>
                <form action="{{ route('kelola_kasir.store') }}" method="POST">
                    @csrf
            @endif

                {{-- Nama --}}
                <label>Nama</label>
                <input type="text" name="nama"
                    class="w-full border p-2 rounded mb-3"
                    value="{{ old('nama', $editKasir->nama ?? '') }}"
                    required>

                {{-- Email --}}
                <label>Email</label>
                <input type="email" name="email"
                    class="w-full border p-2 rounded mb-3"
                    value="{{ old('email', $editKasir->email ?? '') }}"
                    required>

                {{-- Password --}}
                <label>Password</label>
                <input type="password" name="password"
                    class="w-full border p-2 rounded mb-3"
                    placeholder="{{ $editKasir ? 'Kosongkan jika tidak diganti' : '' }}">

                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    {{ $editKasir ? 'Update' : 'Tambah' }}
                </button>

                @if ($editKasir)
                    <a href="{{ route('kelola_kasir') }}"
                       class="ml-2 text-gray-600 underline">Batal</a>
                @endif

            </form>

        </div>

        {{-- TABEL LIST KASIR --}}
        <div class="col-span-2 bg-white p-5 rounded shadow">

            <h2 class="text-xl font-semibold mb-3">Daftar Kasir</h2>

            <table class="w-full border">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border p-2">Nama</th>
                        <th class="border p-2">Email</th>
                        <th class="border p-2 w-32">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($kasir as $item)
                        <tr>
                            <td class="border p-2">{{ $item->nama }}</td>
                            <td class="border p-2">{{ $item->email }}</td>

                            <td class="border p-2 flex gap-2">

                                {{-- Edit --}}
                                <a href="{{ route('kelola_kasir', ['edit' => $item->id]) }}"
                                   class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                    Edit
                                </a>

                                {{-- Delete --}}
                                <form action="{{ route('kelola_kasir.destroy', $item->id) }}" method="POST"
                                      onsubmit="return confirm('Hapus kasir ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                        Hapus
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center p-4 text-gray-500">
                                Belum ada kasir terdaftar.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>

    </div>

</div>

@endsection
