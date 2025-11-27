@extends('kasir.layout_kasir.master')

@push('style')
<style>
    /* Animasi global */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    @keyframes shimmer {
        0% { background-position: -1000px 0; }
        100% { background-position: 1000px 0; }
    }
    
    /* Gaya body */
    body {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        min-height: 100vh;
    }
    
    /* Efek hover card yang ditingkatkan */
    .card-hover {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        animation: fadeIn 0.5s ease-out;
    }
    
    .card-hover::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }
    
    .card-hover:hover::before {
        left: 100%;
    }
    
    .card-hover:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }
    
    /* Banner gradient yang ditingkatkan */
    .banner-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        position: relative;
        overflow: hidden;
    }
    
    .banner-gradient::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
        animation: pulse 4s infinite alternate;
    }
    
    /* Chart Card yang ditingkatkan */
    .chart-card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        background: white;
        position: relative;
        overflow: hidden;
        animation: fadeIn 0.7s ease-out;
    }
    
    .chart-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s ease;
    }
    
    .chart-card:hover::after {
        transform: scaleX(1);
    }
    
    .chart-card:hover {
        box-shadow: 0 15px 35px rgba(102, 126, 234, 0.15);
        transform: translateY(-5px);
    }
    
    /* Gaya judul halaman */
    .page-title {
        font-size: 32px;
        font-weight: 700;
        letter-spacing: 0.5px;
        color: #1f2937;
        position: relative;
        display: inline-block;
    }
    
    .page-title::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        border-radius: 2px;
    }
    
    /* Card statistik dengan gradien */
    .stat-card {
        border-radius: 16px;
        position: relative;
        overflow: hidden;
        animation: fadeIn 0.5s ease-out;
    }
    
    .stat-card-1 {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    
    .stat-card-2 {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
    }
    
    .stat-card-3 {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
    }
    
    .stat-card h3 {
        position: relative;
        z-index: 1;
    }
    
    .stat-card p {
        position: relative;
        z-index: 1;
    }
    
    .stat-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
    }
    
    /* Tombol dengan efek hover */
    .btn {
        border-radius: 8px;
        padding: 10px 20px;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
        display: inline-block;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }
    
    /* Efek loading shimmer */
    .shimmer {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 1000px 100%;
        animation: shimmer 2s infinite;
    }
    
    /* Animasi untuk angka */
    .counter {
        display: inline-block;
        animation: pulse 0.5s ease-out;
    }
    
    /* Efek parallax untuk banner */
    .parallax {
        transform: translateZ(0);
        transition: transform 0.5s ease-out;
    }
    
    .parallax:hover {
        transform: perspective(1000px) translateZ(50px);
    }
    
    /* Gaya untuk kontainer */
    .container {
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    /* Gaya untuk tabel */
    .table {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    
    .table th {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    
    /* Gaya untuk notifikasi */
    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 20px;
        border-radius: 8px;
        background: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transform: translateX(400px);
        transition: transform 0.3s ease;
        z-index: 1000;
    }
    
    .notification.show {
        transform: translateX(0);
    }
    
    /* Gaya untuk form input */
    .form-control {
        border-radius: 8px;
        border: 1px solid #e0e0e0;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        outline: none;
    }
    
    /* Efek ripple untuk tombol */
    .ripple {
        position: relative;
        overflow: hidden;
    }
    
    .ripple::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }
    
    .ripple:active::before {
        width: 300px;
        height: 300px;
    }
    
    /* Gaya untuk bagian chart */
    .chart-container {
        position: relative;
        height: 300px;
        width: 100%;
    }
    
    /* Gaya untuk footer */
    .footer {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 20px 0;
        text-align: center;
        margin-top: 50px;
    }
    
    /* Gaya untuk navigasi */
    .nav-item {
        position: relative;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }
    
    .nav-item::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        transform: translateX(-50%);
        transition: width 0.3s ease;
    }
    
    .nav-item:hover::after {
        width: 80%;
    }
    
    /* Gaya untuk badge */
    .badge {
        display: inline-block;
        padding: 3px 8px;
        font-size: 12px;
        font-weight: bold;
        border-radius: 10px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    
    /* Gaya untuk modal */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        align-items: center;
        justify-content: center;
    }
    
    .modal.show {
        display: flex;
    }
    
    .modal-content {
        background: white;
        border-radius: 16px;
        padding: 20px;
        max-width: 500px;
        width: 90%;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        transform: scale(0.8);
        transition: transform 0.3s ease;
    }
    
    .modal.show .modal-content {
        transform: scale(1);
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="flex justify-between items-center mb-6">
        <h1 class="page-title">Dashboard Kasir</h1>
        <p class="text-gray-600">Today · {{ date('d M Y') }}</p>
    </div>

    <!-- Ringkasan Hari Ini -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Total Transaksi -->
        <div class="stat-card stat-card-1 p-5 rounded-xl shadow card-hover">
            <p class="text-sm opacity-90">Transaksi Hari Ini</p>
            <h3 class="text-3xl font-bold mt-2 counter">12</h3>
            <div class="mt-4 text-xs opacity-75">
                <i class="fas fa-arrow-up"></i> 20% dari kemarin
            </div>
        </div>

        <!-- Pendapatan Hari Ini -->
        <div class="stat-card stat-card-2 p-5 rounded-xl shadow card-hover">
            <p class="text-sm opacity-90">Pendapatan Hari Ini</p>
            <h3 class="text-3xl font-bold mt-2 counter">Rp 2.450.000</h3>
            <div class="mt-4 text-xs opacity-75">
                <i class="fas fa-arrow-up"></i> 15% dari kemarin
            </div>
        </div>

        <!-- Produk Sering Dipindai -->
        <div class="stat-card stat-card-3 p-5 rounded-xl shadow card-hover">
            <p class="text-sm opacity-90">Produk Terbanyak Dipindai</p>
            <h3 class="text-xl font-bold mt-2">Bolpoin Snowman</h3>
            <div class="mt-4 text-xs opacity-75">
                <i class="fas fa-arrow-up"></i> 45 unit terjual
            </div>
        </div>
    </div>

    <!-- Banner Sambutan -->
    <div class="banner-gradient rounded-xl shadow p-6 flex justify-between items-center mb-8 card-hover parallax">
        <div>
            <h2 class="text-xl font-semibold mb-2">Halo, Kasir!</h2>
            <p class="opacity-90">Semoga harimu menyenangkan, tetap semangat melayani pelanggan!</p>
            <button class="btn btn-primary ripple mt-4">Lihat Laporan</button>
        </div>
        <img src="https://cdn-icons-png.flaticon.com/512/1995/1995512.png" class="w-36 opacity-90">
    </div>

    <!-- Grafik Penjualan -->
    <div class="bg-white p-6 rounded-xl shadow mb-8 chart-card">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Grafik Penjualan Harian</h2>
            <div class="flex space-x-2">
                <button class="btn btn-sm btn-outline">Minggu</button>
                <button class="btn btn-sm btn-primary">Bulan</button>
                <button class="btn btn-sm btn-outline">Tahun</button>
            </div>
        </div>
        <div class="chart-container">
            <canvas id="salesChart"></canvas>
        </div>
    </div>
    
    <!-- Tabel Transaksi Terkini -->
    <div class="bg-white p-6 rounded-xl shadow mb-8 chart-card">
        <h2 class="text-lg font-semibold mb-4">Transaksi Terkini</h2>
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Waktu</th>
                        <th class="px-4 py-2 text-left">Pelanggan</th>
                        <th class="px-4 py-2 text-left">Total</th>
                        <th class="px-4 py-2 text-left">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">#TRX001</td>
                        <td class="px-4 py-2">09:15</td>
                        <td class="px-4 py-2">Andi Pratama</td>
                        <td class="px-4 py-2">Rp 150.000</td>
                        <td class="px-4 py-2"><span class="badge">Selesai</span></td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">#TRX002</td>
                        <td class="px-4 py-2">10:30</td>
                        <td class="px-4 py-2">Siti Nurhaliza</td>
                        <td class="px-4 py-2">Rp 320.000</td>
                        <td class="px-4 py-2"><span class="badge">Selesai</span></td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">#TRX003</td>
                        <td class="px-4 py-2">11:45</td>
                        <td class="px-4 py-2">Budi Santoso</td>
                        <td class="px-4 py-2">Rp 75.000</td>
                        <td class="px-4 py-2"><span class="badge">Selesai</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Notification -->
<div id="notification" class="notification">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <i class="fas fa-check-circle text-green-500 text-xl"></i>
        </div>
        <div class="ml-3">
            <p class="text-sm font-medium text-gray-900">Notifikasi</p>
            <p class="text-sm text-gray-500">Data berhasil diperbarui</p>
        </div>
        <div class="ml-auto pl-3">
            <button onclick="hideNotification()" class="text-gray-400 hover:text-gray-500">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
</div>

<script>
// Inisialisasi chart
new Chart(document.getElementById('salesChart'), {
    type: 'line',
    data: {
        labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
        datasets: [{
            label: 'Penjualan (Rp)',
            data: [350000, 420000, 500000, 380000, 700000, 620000, 450000],
            borderWidth: 3,
            borderColor: '#667eea',
            backgroundColor: 'rgba(102, 126, 234, 0.15)',
            pointBackgroundColor: '#667eea',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 5,
            pointHoverRadius: 7,
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
                padding: 12,
                titleColor: '#fff',
                bodyColor: '#fff',
                borderColor: '#667eea',
                borderWidth: 1,
                displayColors: false,
                callbacks: {
                    label: function(context) {
                        return 'Rp ' + context.parsed.y.toLocaleString('id-ID');
                    }
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    color: 'rgba(0, 0, 0, 0.05)'
                },
                ticks: {
                    callback: function(value) {
                        return 'Rp ' + value.toLocaleString('id-ID');
                    }
                }
            },
            x: {
                grid: {
                    display: false
                }
            }
        }
    }
});

// Animasi counter
function animateCounter() {
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = +counter.innerText.replace(/[^0-9]/g, '');
        const increment = target / 100;
        
        function updateCounter() {
            const current = +counter.innerText.replace(/[^0-9]/g, '');
            
            if (current < target) {
                counter.innerText = Math.ceil(current + increment).toLocaleString('id-ID');
                setTimeout(updateCounter, 10);
            } else {
                counter.innerText = target.toLocaleString('id-ID');
            }
        }
        
        updateCounter();
    });
}

// Fungsi notifikasi
function showNotification(message) {
    const notification = document.getElementById('notification');
    notification.querySelector('.text-gray-500').innerText = message;
    notification.classList.add('show');
    
    setTimeout(() => {
        hideNotification();
    }, 3000);
}

function hideNotification() {
    const notification = document.getElementById('notification');
    notification.classList.remove('show');
}

// Event listeners
document.addEventListener('DOMContentLoaded', function() {
    animateCounter();
    
    // Simulasi notifikasi setelah 5 detik
    setTimeout(() => {
        showNotification('Transaksi baru telah ditambahkan');
    }, 5000);
});
</script>

@endsection