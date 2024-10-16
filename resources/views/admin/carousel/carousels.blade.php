@extends('admin.layouts.admin')

@section('title', 'Carousels')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-6">Carousel Managements</h1>

    <div class="mb-4">
        <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-400">
            Tambah Data
        </button>
    </div>

    <!-- Tabel Carousel dengan data kosong -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-3 px-6 text-left">No</th>
                    <th class="py-3 px-6 text-left">Title</th>
                    <th class="py-3 px-6 text-left">Activity date</th>
                    <th class="py-3 px-6 text-left">Description</th>
                    <th class="py-3 px-6 text-left">Image</th>
                    <th class="py-3 px-6 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="py-3 px-6">1</td>
                    <td class="py-3 px-6">judulnya apaan</td>
                    <td class="py-3 px-6">25 dec 2030</td>
                    <td class="py-3 px-6">Deskripsi contoh gambar carousel.</td>
                    <td class="py-3 px-6">anggap aja poto</td>

                    <td class="py-3 px-6 flex">
                        <!-- Tombol Edit -->
                        <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded-lg mr-2 hover:bg-yellow-400">
                            Edit
                        </a>
                        <!-- Tombol Hapus -->
                        <form action="#" method="POST" onsubmit="return confirm('Apakah kamu yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-400">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                <!-- Tambahkan baris kosong lagi jika diperlukan -->
            </tbody>
        </table>
    </div>
</div>
@endsection