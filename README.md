# 📊 CatatKas - Aplikasi Pencatatan Keuangan Modern

![CatatKas Logo](https://via.placeholder.com/800x400)

CatatKas adalah aplikasi pencatatan keuangan modern yang dirancang untuk memudahkan pengguna dalam mengelola dan memantau arus kas mereka. Dengan antarmuka yang intuitif dan fitur-fitur canggih, CatatKas menjadi solusi terbaik untuk manajemen keuangan personal maupun bisnis.

[![Made with Laravel](https://img.shields.io/badge/Made%20with-Laravel-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com)
[![Built with Tailwind CSS](https://img.shields.io/badge/Built%20with-Tailwind%20CSS-38B2AC?style=for-the-badge&logo=tailwind-css)](https://tailwindcss.com)
[![License MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge)](https://opensource.org/licenses/MIT)

## 📑 Daftar Isi
- [Fitur Utama](#-fitur-utama)
- [Teknologi](#-teknologi)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-instalasi)
- [Struktur Database](#-struktur-database)
- [API Documentation](#-api-documentation)
- [UI/UX Guidelines](#-uiux-guidelines)
- [Kontribusi](#-kontribusi)
- [Lisensi](#-lisensi)

## 🌟 Fitur Utama

### 1. Sistem Login & Role Management
Sistem keamanan yang komprehensif dengan manajemen peran yang fleksibel:

#### Admin Role
- Dashboard khusus admin dengan overview seluruh transaksi
- Manajemen pengguna (CRUD operations)
- Akses ke seluruh data transaksi
- Kemampuan untuk mengelola kategori transaksi
- Laporan analitik detail
- Audit log untuk monitoring aktivitas

#### User Role
- Dashboard personal dengan ringkasan keuangan
- Manajemen transaksi pribadi
- Akses terbatas pada transaksi sendiri
- Kustomisasi kategori personal
- Export data transaksi pribadi

### 2. Pencatatan Kas yang Komprehensif

#### Fitur Pencatatan
- **Transaksi Masuk**
  - Kategori pendapatan (Gaji, Investasi, dll)
  - Upload bukti transaksi
  - Recurring transaction setting
  - Tags dan label kustom

- **Transaksi Keluar**
  - Kategorisasi pengeluaran detail
  - Sistem budget warning
  - Reminder pembayaran
  - Attachment bukti pengeluaran

#### Detail Data Transaksi
- Nominal transaksi (support multi-currency)
- Kategori dan sub-kategori
- Deskripsi detail
- Timestamp dan tracking
- Status transaksi
- Attachment support
- Geolocation (optional)

### 3. Dashboard & Visualisasi Data

#### Dashboard Features
- **Ringkasan Saldo**
  - Total saldo terkini
  - Perbandingan periode
  - Proyeksi cash flow
  - Alert saldo minimum

- **Visualisasi Interaktif**
  - Pie chart distribusi pengeluaran
  - Bar chart trend pemasukan/pengeluaran
  - Line chart analisis temporal
  - Heatmap aktivitas transaksi

#### Analytic Tools
- Filtering data multi-parameter
- Export data dalam berbagai format
- Comparison tools antar periode
- Predictive analysis (trend & forecast)

### 4. API Endpoints

#### Authentication
```
POST /api/v1/auth/login
POST /api/v1/auth/register
POST /api/v1/auth/logout
POST /api/v1/auth/refresh
```

#### Transaction Management
```
GET    /api/v1/transactions
POST   /api/v1/transactions
GET    /api/v1/transactions/{id}
PUT    /api/v1/transactions/{id}
DELETE /api/v1/transactions/{id}
```

#### Categories
```
GET    /api/v1/categories
POST   /api/v1/categories
PUT    /api/v1/categories/{id}
DELETE /api/v1/categories/{id}
```

#### Reports
```
GET /api/v1/reports/daily
GET /api/v1/reports/monthly
GET /api/v1/reports/yearly
GET /api/v1/reports/custom
```

### 5. UI/UX Design System

#### Color Palette
```css
--primary: #2D6BB3;      /* Primary Blue */
--primary-light: #4A8AD3; /* Light Blue */
--primary-dark: #1D4B8C;  /* Dark Blue */
--background: #FFFFFF;    /* White Background */
--text-primary: #333333;  /* Primary Text */
--text-secondary: #666666; /* Secondary Text */
--success: #28A745;       /* Success Green */
--danger: #DC3545;        /* Danger Red */
--warning: #FFC107;       /* Warning Yellow */
--info: #17A2B8;          /* Info Blue */
```

#### Typography
```css
--font-primary: 'Inter', sans-serif;
--font-secondary: 'Poppins', sans-serif;

/* Font Sizes */
--text-xs: 0.75rem;
--text-sm: 0.875rem;
--text-base: 1rem;
--text-lg: 1.125rem;
--text-xl: 1.25rem;
--text-2xl: 1.5rem;
--text-3xl: 1.875rem;
--text-4xl: 2.25rem;
```

#### Component Library
- Custom buttons dengan hover effects
- Input fields dengan validasi visual
- Cards untuk menampilkan data transaksi
- Modal dialogs untuk konfirmasi
- Toast notifications
- Loading states & skeletons
- Responsive tables
- Custom form elements

## 🛠 Teknologi

### Frontend
- Tailwind CSS untuk styling
- Alpine.js untuk interaktivitas
- Chart.js untuk visualisasi data
- Axios untuk HTTP requests
- PWA support

### Backend
- Laravel 10.x
- MySQL/PostgreSQL
- Redis untuk caching
- JWT Authentication
- REST API

### Development Tools
- Docker support
- Laravel Mix
- PHP Unit Testing
- Jest untuk JavaScript testing
- GitHub Actions untuk CI/CD

## 💻 Persyaratan Sistem

- PHP >= 8.1
- Node.js >= 16.0
- Composer
- MySQL >= 8.0
- Redis (optional)
- Git

## 🚀 Instalasi

1. Clone repository
```bash
git clone https://github.com/username/catatkas.git
cd catatkas
```

2. Install dependencies
```bash
composer install
npm install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Konfigurasi database
```bash
php artisan migrate
php artisan db:seed
```

5. Compile assets
```bash
npm run dev
```

6. Jalankan aplikasi
```bash
php artisan serve
```

## 📝 Lisensi

CatatKas dilisensikan di bawah [MIT License](LICENSE).

## 🤝 Kontribusi

Kami sangat menghargai kontribusi dari komunitas. Silakan baca [CONTRIBUTING.md](CONTRIBUTING.md) untuk detail lebih lanjut tentang proses untuk submit pull request kepada kami.

## 📞 Dukungan

Jika Anda menemukan masalah atau memiliki pertanyaan, silakan:
- Buka issue di GitHub
- Hubungi kami di support@catatkas.com
- Kunjungi [dokumentasi online](https://docs.catatkas.com)

---

<p align="center">Made with ❤️ by CatatKas Team</p>