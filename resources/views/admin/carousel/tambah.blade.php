@extends('admin.layouts.admin')

@section('title', 'Tambah Carousel')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-6">Tambah Carousel</h1>

    <!-- Form untuk menambah carousel baru -->
    <form action="{{ route('carousels.tambah') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg">
        @csrf

        <!-- Input untuk Title -->
        <div class="mb-6">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
            <input type="text" id="title" name="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Input untuk Activity Date -->
        <div class="mb-6">
            <label for="activity_date" class="block text-gray-700 font-bold mb-2">Activity Date:</label>
            <input type="date" id="activity_date" name="activity_date" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Input untuk Description -->
        <div class="mb-6">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
            <textarea id="description" name="description" rows="4" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
        </div>

        <!-- Input untuk Image -->
        <div class="mb-6">
            <label for="image" class="block text-gray-700 font-bold mb-2">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Tombol Submit -->
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-400">
                Simpan
            </button>
            <a href="{{ route('carousels.tambah') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-400 ml-2">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
