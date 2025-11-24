@extends('admin.layout.app')

@section('content')

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-semibold">Dashboard</h1>
    <p class="text-gray-600">Today · 10 Jan 2025</p>
</div>

<div class="bg-white rounded-xl shadow p-6 flex justify-between items-center mb-8">
    <div>
        <h2 class="text-xl font-semibold mb-2">Selamat datang!</h2>
        <p class="text-gray-600">Kamu punya 1 orderan di minggu ini!</p>
    </div>
    <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" class="w-40 opacity-80">
</div>
    <div class="bg-indigo-100 text-indigo-700 p-5 rounded-xl shadow">
        <p class="text-sm">Total Pendapatan</p>
        <h3 class="text-2xl font-bold mt-2">Rp 12.450.000</h3>
    </div>

    <div class="bg-purple-100 text-purple-700 p-5 rounded-xl shadow">
        <p class="text-sm">Produk</p>
        <h3 class="text-2xl font-bold mt-2">20</h3>
    </div>

    <div class="bg-red-100 text-red-700 p-5 rounded-xl shadow">
        <p class="text-sm">Orderan Bulan Ini</p>
        <h3 class="text-2xl font-bold mt-2">30</h3>
    </div>
</div>

<div class="bg-white p-6 rounded-xl shadow mb-8">
    <h2 class="text-lg font-semibold mb-4">Produk Terlaris</h2>

    <canvas id="topProductsChart" height="150"></canvas>
</div>

<script>
new Chart(document.getElementById('topProductsChart'), {
    type: 'bar',
    data: {
        labels: ['Beras', 'Gula', 'Gula 1/2 kg', 'Pewarna Makanan'],
        datasets: [{
            label: 'Jumlah Terjual',
            data: [20, 18, 15, 10],
            borderWidth: 1
        }]
    },
    options: {
        indexAxis: 'y'
    }
});
</script>

@endsection
