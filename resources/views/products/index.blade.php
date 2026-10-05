<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk IT Del</title>
    <!-- Bootstrap 5.3 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Judul Utama -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h2 class="fw-bold text-primary mb-1">Katalog Produk Toko Del</h2>
                        <p class="text-muted mb-0">Sistem Manajemen Produk berbasis Laravel 11 MVC</p>
                    </div>
                    <span class="badge bg-primary fs-6 px-3 py-2">IT Del Framework App</span>
                </div>

                <!-- Kartu Formulir Tambah Produk -->
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white fw-bold py-3">
                        Formulir Tambah Produk
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label class="form-label fw-semibold">Kode Produk</label>
                                    <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode') }}" placeholder="Contoh: PRD001">
                                    @error('kode')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-5">
                                    <label class="form-label fw-semibold">Nama Produk</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Masukkan nama barang">
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Harga Produk (Rp)</label>
                                    <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}" placeholder="Contoh: 50000">
                                    @error('harga')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 text-end mt-4">
                                    <button type="submit" class="btn btn-primary px-4 fw-semibold">Simpan Produk</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Kartu Tabel Daftar Produk -->
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white fw-bold py-3">
                        Daftar Produk Terdaftar
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-4">Kode</th>
                                        <th>Nama Produk</th>
                                        <th class="pe-4 text-end">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $item)
                                        <tr>
                                            <td class="ps-4">
                                                <span class="badge bg-secondary-subtle text-dark border fw-mono fs-6">{{ $item->kode }}</span>
                                            </td>
                                            <td class="fw-medium text-dark">{{ $item->nama }}</td>
                                            <td class="pe-4 text-end fw-bold text-success">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center py-4 text-muted">Belum ada data produk tersedia.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Navigasi Paginasi -->
                    <div class="card-footer bg-white py-3">
                        <div class="d-flex justify-content-end">
                            {{ $products->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html> 
