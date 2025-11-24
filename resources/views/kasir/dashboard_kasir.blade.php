@extends('kasir.layout_kasir.master')

@push('style')
<style>
    /* Efek hover card */
    .card-hover {
        transition: 0.25s ease;
    }
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    /* Banner gradient */
    .banner-gradient {
        background: linear-gradient(135deg, #4f46e5, #3b82f6);
        color: white;
    }

    /* Chart Card */
    .chart-card {
        border: 1px solid #e5e7eb;
        transition: 0.25s ease;
    }
    .chart-card:hover {
        border-color: #6366f1;
        box-shadow: 0 12px 25px rgba(99, 102, 241, 0.2);
    }

    .page-title {
        font-size: 32px;
        font-weight: 700;
        letter-spacing: 0.5px;
        color: #1f2937;
    }
</style>
@endpush

@section('content')

<div class="flex justify-between items-center mb-6">
    <h1 class="page-title">Dashboard Kasir</h1>
    <p class="text-gray-600">Today · {{ date('d M Y') }}</p>
</div>

<!-- Ringkasan Hari Ini -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

    <!-- Total Transaksi -->
    <div class="bg-indigo-100 text-indigo-700 p-5 rounded-xl shadow card-hover">
        <p class="text-sm">Transaksi Hari Ini</p>
        <h3 class="text-3xl font-bold mt-2">12</h3>
    </div>

    <!-- Pendapatan Hari Ini -->
    <div class="bg-green-100 text-green-700 p-5 rounded-xl shadow card-hover">
        <p class="text-sm">Pendapatan Hari Ini</p>
        <h3 class="text-3xl font-bold mt-2">Rp 2.450.000</h3>
    </div>

    <!-- Produk Sering Dipindai -->
    <div class="bg-yellow-100 text-yellow-700 p-5 rounded-xl shadow card-hover">
        <p class="text-sm">Produk Terbanyak Dipindai</p>
        <h3 class="text-xl font-bold mt-2">Bolpoin Snowman</h3>
    </div>

</div>

<!-- Banner Sambutan -->
<div class="banner-gradient rounded-xl shadow p-6 flex justify-between items-center mb-8 card-hover">
    <div>
        <h2 class="text-xl font-semibold mb-2">Halo, Kasir!</h2>
        <p class="opacity-90">Semoga harimu menyenangkan, tetap semangat melayani pelanggan!</p>
    </div>
    <img src="https://cdn-icons-png.flaticon.com/512/1995/1995512.png" class="w-36 opacity-90">
</div>

<!-- Grafik Penjualan -->
<div class="bg-white p-6 rounded-xl shadow mb-8 chart-card">
    <h2 class="text-lg font-semibold mb-4">Grafik Penjualan Harian</h2>

    <canvas id="salesChart" height="140"></canvas>
</div>

<script>
new Chart(document.getElementById('salesChart'), {
    type: 'line',
    data: {
        labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
        datasets: [{
            label: 'Penjualan (Rp)',
            data: [350000, 420000, 500000, 380000, 700000, 620000, 450000],
            borderWidth: 2,
            borderColor: '#4f46e5',
            backgroundColor: 'rgba(79, 70, 229, 0.15)',
            pointBackgroundColor: '#4f46e5',
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
    }
});
</script>

@endsection
