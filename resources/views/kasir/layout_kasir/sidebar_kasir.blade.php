<aside class="w-64 bg-white h-screen shadow-lg fixed p-6">

    <h1 class="text-2xl font-bold mb-10">Minbell Kasir</h1>

    <nav class="space-y-3">

       <a href="{{ route('dashboard_kasir') }}"
         class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-gray-100
        {{ request()->routeIs('kasir.dashboard') ? 'bg-indigo-100 text-indigo-700' : '' }}">
         🏠 <span>Dashboard</span>
     </a>


        <!-- Mulai Transaksi -->
        <a href="{{ route('transaksi_kasir') }}"
           class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-gray-100
           {{ request()->routeIs('kasir.transaksi_kasir') ? 'bg-indigo-100 text-indigo-700' : '' }}">
            🧾 <span>Transaksi Baru</span>
        </a>

        <!-- Riwayat Transaksi -->
        <a href="{{ route('riwayat') }}"
           class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-gray-100
           {{ request()->routeIs('riwayat') ? 'bg-indigo-100 text-indigo-700' : '' }}">
            📜 <span>Riwayat Transaksi</span>
        </a>

        <!-- Cek Stok (Kasir hanya melihat) -->
        <a href="{{ route('stok') }}"
           class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-gray-100
           {{ request()->routeIs('stok') ? 'bg-indigo-100 text-indigo-700' : '' }}">
            📦 <span>Cek Stok Barang</span>
        </a>
    

    </nav>
</aside>
