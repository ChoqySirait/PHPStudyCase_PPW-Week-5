<div align="center">

  # 🛍️ Katalog Produk Toko Del 

  <p align="center">
    Sistem Manajemen Katalog Produk berbasis Laravel 11 MVC dengan integrasi database MySQL via Laragon, validasi form, paginasi, dan tampilan responsif Bootstrap 5.
  </p>

  <p align="center">
    <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel"></a>
    <a href="https://php.net"><img src="https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"></a>
    <a href="https://mysql.com"><img src="https://img.shields.io/badge/MySQL-8.4-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"></a>
    <a href="https://getbootstrap.com"><img src="https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap"></a>
    <a href="https://vitejs.dev"><img src="https://img.shields.io/badge/Vite-5.0-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite"></a>
  </p>

</div>

---

## 🌟 Fitur Utama

- 📐 **Arsitektur MVC (Model-View-Controller)**: Pemisahan logika data, pemrosesan bisnis, dan antarmuka secara terstruktur.
- 🗄️ **Database Migration & Seeding**: Pembuatan skema tabel otomatis dan *seeding* 50 data produk dummy menggunakan Model Factory.
- ✅ **Validasi Form Request**: Menggunakan `StoreProductRequest` dengan penanganan pesan error kontekstual serta pertahanan data via `old()`.
- 🔄 **Pola Post-Redirect-Get (PRG)**: Mencegah pengiriman data ganda saat pengguna melakukan *refresh* halaman.
- 📄 **Paginasi Data**: Pembagian daftar produk secara dinamis menggunakan `paginate(10)` dan tautan navigasi Bootstrap 5.
- 🎨 **Antarmuka Modern & Responsif**: Desain UI berbasis *Card Layout* Bootstrap 5.3 dan kustomisasi aset terkompilasi via Vite.

---

## 🛠️ Teknologi & Peralatan

| Komponen | Teknologi |
| :--- | :--- |
| **Framework** | Laravel 11 |
| **Bahasa Pemrograman** | PHP 8.3 & JavaScript (ES6) |
| **Database Server** | MySQL 8 (via Laragon) |
| **Frontend UI** | Bootstrap 5.3 & Blade Engine |
| **Asset Bundler** | Vite |
| **Tools Development** | VS Code, Git, GitHub, MySQL Workbench |

---

## 📂 Struktur Proyek

```text
PHPStudyCase_PPW-Week-5/
├── app/
│   ├── Http/
│   │   ├── Controllers/ProductController.php
│   │   └── Requests/StoreProductRequest.php
│   └── Models/Product.php
├── database/
│   ├── factories/ProductFactory.php
│   ├── migrations/2026_10_05_102704_create_products_table.php
│   └── seeders/DatabaseSeeder.php
├── resources/
│   ├── css/app.css
│   ├── js/app.js
│   └── views/products/index.blade.php
├── routes/
│   └── web.php
└── .env
