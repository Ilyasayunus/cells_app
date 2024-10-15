<!-- resources/views/admin/dashboard.blade.php -->
@extends('admin.layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto">
    <!-- Judul halaman -->
    <h1 class="text-3xl font-bold mb-6">Halaman Utama</h1>
    
    <!-- Sambutan -->
    <p class="mb-6">Selamat datang Admin CELLS - UPI</p>
   
    <!-- Box Informasi Utama -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-2xl font-semibold mb-4">Informasi Terkini</h2>
        <p class="text-gray-700">Berikut adalah beberapa informasi penting yang harus Anda ketahui. Silakan periksa pembaruan terbaru di sistem ini.</p>
    </div>

    <!-- Section Tambahan (opsional) -->
    <div class="bg-blue-100 shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Aktivitas Terbaru</h2>
        <p class="text-gray-600">Tidak ada aktivitas terbaru saat ini. Harap periksa kembali nanti untuk pembaruan.</p>
    </div>
</div>
@endsection
