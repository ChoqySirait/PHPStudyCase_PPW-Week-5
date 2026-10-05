<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk IT Del</title>
</head>
<body>
    <h1>Formulir Tambah Produk</h1>

    <!-- Form dikirim ke rute products.store menggunakan metode HTTP POST -->
    <form action="{{ route('products.store') }}" method="POST">
        <!-- Directif keamanan wajib CSRF untuk mencegah serangan HTTP 419 -->
        @csrf

        <div>
            <label>Kode Produk:</label>
            <!-- Helper old('kode') menjaga isian teks tidak hilang jika validasi gagal -->
            <input type="text" name="kode" value="{{ old('kode') }}">
            @error('kode')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Nama Produk:</label>
            <input type="text" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Harga Produk:</label>
            <input type="number" name="harga" value="{{ old('harga') }}">
            @error('harga')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan Produk</button>
    </form>

    <hr>

    <h2>Daftar Produk Toko Del</h2>

    <!-- Iterasi perulangan koleksi variabel $products dari controller -->
    @foreach ($products as $item)
        <p>{{ $item->kode }} - {{ $item->nama }} (Rp {{ number_format($item->harga, 0, ',', '.') }})</p>
    @endforeach

    <!-- Mencetak tautan navigasi pembagian halaman / paginasi -->
    <div>
        {{ $products->links() }}
    </div>
</body>
</html>
