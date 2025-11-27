<aside class="w-64 bg-white h-screen shadow-lg fixed p-6">

    <h1 class="text-2xl font-bold mb-10">Minbell</h1>

    <nav class="space-y-3">

        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-gray-100
           {{ request()->routeIs('dashboard') ? 'bg-indigo-100 text-indigo-700' : '' }}">
            🏠 <span>Dashboard</span>
        </a>


        <!-- DATA MASTER -->
        <div>
            <div class="flex items-center justify-between w-full">
                <a href="{{ route('dataMaster') }}"
                   class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-gray-100 w-full">
                    📂 Data Master
                </a>

                <button onclick="toggleMenu('submenuMaster', 'arrowMaster')"
                        class="px-3 py-2 rounded-lg hover:bg-gray-100">
                    <span id="arrowMaster">▼</span>
                </button>
            </div>

            <!-- Submenu Data Master -->
            <div id="submenuMaster" class="ml-8 mt-2 hidden space-y-2">
                <a href="kelola_kasir" class="block text-gray-600 hover:text-indigo-600">Kelola Kasir</a>
                <a href="/admin/produk" class="block text-gray-600 hover:text-indigo-600">Produk</a>
                <a href="/admin/kategori-produk" class="block text-gray-600 hover:text-indigo-600">Kategori Produk</a>
            </div>
        </div>


        <!-- STOK -->
        <a href="#" class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-gray-100">
            📦 <span>Stok</span>
        </a>


        <!-- LAPORAN -->
        <div>
            <div class="flex items-center justify-between w-full">
                <a href="#" class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-gray-100 w-full">
                    📊 Laporan
                </a>

                <button onclick="toggleMenu('submenuLaporan', 'arrowLaporan')"
                        class="px-3 py-2 rounded-lg hover:bg-gray-100">
                    <span id="arrowLaporan">▼</span>
                </button>
            </div>

            <!-- Submenu Laporan -->
            <div id="submenuLaporan" class="ml-8 mt-2 hidden space-y-2">
                <a href="/admin/laporan_keuangan" class="block text-gray-600 hover:text-indigo-600">Laporan Keuangan</a>
                <a href="/admin/laporan_pendapatan" class="block text-gray-600 hover:text-indigo-600">Laporan Pendapatan</a>
                <a href="/admin/laporan_kerugian" class="block text-gray-600 hover:text-indigo-600">Laporan Kerugian</a>
                <a href="/admin/laporan_transaksi" class="block text-gray-600 hover:text-indigo-600">Laporan Transaksi</a>
            </div>
        </div>
    </nav>
</aside>


<script>
function toggleMenu(menuId, arrowId) {
    const menu = document.getElementById(menuId);
    const arrow = document.getElementById(arrowId);

    menu.classList.toggle("hidden");
    arrow.textContent = menu.classList.contains("hidden") ? "▼" : "▲";
}
</script>
