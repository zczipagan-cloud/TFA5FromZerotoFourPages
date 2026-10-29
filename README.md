# IT0049 TFA5 Laravel POS Foundations

This source implements the required four pages: `/`, `/about`, `/customers`, and `/users`. The account pages receive temporary static PHP arrays from their controllers and render each record with Blade `@foreach`.

## Run locally

Create a Laravel project, copy these files into the matching folders, then run:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

The separate `INFINITYFREE_UPLOAD` folder is the shared-hosting version for InfinityFree.
