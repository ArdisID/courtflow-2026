# CourtFlow

Aplikasi Booking Lapangan Padel berbasis Laravel 12, Livewire 3, Filament 3, MariaDB dan Docker.

## Tech Stack

- Laravel 12
- Livewire 3
- Filament 3
- MariaDB
- Tailwind CSS
- Docker

## Installation

Clone repository:

```bash
git clone <repository-url>
cd courtflow
```

Copy environment:

```bash
cp src/.env.example src/.env
```

Masuk folder source:

```bash
cd src
```

Install dependency:

```bash
composer install

npm install
```

Generate key:

```bash
php artisan key:generate
```

Jalankan migration dan seeder:

```bash
php artisan migrate --seed
```

Storage link:

```bash
php artisan storage:link
```

Build asset:

```bash
npm run build
```

Jalankan aplikasi:

```bash
php artisan serve
```

## Admin Login

```txt
Email    : admin@courtflow.test
Password : password
```

## Features

- Landing Page
- Court Listing
- Court Booking
- Contact Form
- Admin Panel Filament
- Booking Management
- Court Management
- Customer Management
- Payment Management

## Author

Ardis BS