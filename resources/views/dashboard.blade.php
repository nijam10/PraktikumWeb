<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-green-100 text-gray-800">

    <header class="bg-gray -ml-px">
    <div class="mx-auto max-w-7xl px-4 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-indigo-600">Dashboard</h1>
        <div class="flex -space-x-1 overflow-hidden">
            <img class="inline-block size-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
    </div>
    </header>

    <div class="flex">
    <aside class=" w-64 bg-white h-screen shadow hidden md:block">
        <nav class="p-6 space-y-4">
        <a href="#" class="block text-gray-700 hover:text-indigo-600 font-medium">Beranda</a>
        <a href="#" class="block text-gray-700 hover:text-indigo-600 font-medium">Produk</a>
        <a href="#" class="block text-gray-700 hover:text-indigo-600 font-medium">Pesanan</a>
        <a href="#" class="block text-gray-700 hover:text-indigo-600 font-medium">Pengaturan</a>
        </nav>
    </aside>

    <main class="flex-1 p-6">
        <h2 class="text-2xl font-semibold mb-6">Ringkasan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition-all">
            <h3 class="text-gray-600">Pengguna</h3>
            <p class="text-3xl font-bold text-indigo-600">1.250</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition-all">
            <h3 class="text-gray-600">Pendapatan</h3>
            <p class="text-3xl font-bold text-green-500">Rp 24.300.000</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition-all">
            <h3 class="text-gray-600">Penjualan</h3>
            <p class="text-3xl font-bold text-yellow-500">430</p>
        </div>
        </div>
    </main>
    </div>

    </body>
</html>