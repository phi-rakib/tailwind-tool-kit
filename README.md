# Laravel TailwindCSS CRUD

[![Tests](https://github.com/phi-rakib/laravel-tailwind-crud/actions/workflows/run-tests.yml/badge.svg)](https://github.com/phi-rakib/laravel-tailwind-crud/actions/workflows/run-tests.yml)
[![Browser Tests](https://github.com/phi-rakib/laravel-tailwind-crud/actions/workflows/browser-tests.yml/badge.svg)](https://github.com/phi-rakib/laravel-tailwind-crud/actions/workflows/browser-tests.yml)
[![Fix Code Style](https://github.com/phi-rakib/laravel-tailwind-crud/actions/workflows/lint.yml/badge.svg)](https://github.com/phi-rakib/laravel-tailwind-crud/actions/workflows/lint.yml)

## Overview
This is a CRUD application built with Laravel and TailwindCSS. It allows users to create, read, update, and delete products.

## Features
- Product management (CRUD operations)
- Form validation
- Database seeding
- Feature tests
- Browser tests with Laravel Dusk

## Installation

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js & npm

### Steps
1. Clone the repository:
    ```sh
    git clone https://github.com/phi-rakib/laravel-tailwind-crud.git
    ```
2. Navigate to the project directory:
    ```sh
    cd laravel-tailwind-crud
    ```
3. Install dependencies:
    ```sh
    composer install
    npm install
    ```
4. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```sh
    cp .env.example .env
    ```
5. Generate an application key:
    ```sh
    php artisan key:generate
    ```
## Configuration

Update your `.env` file with the necessary configuration for your database and other services.

Example:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## Database Setup

Run the migrations and seed the database:
```sh
php artisan migrate --seed
```
## Models

### Product Model
Located at `app/Models/Product.php`.

#### Fields
- `id`: Primary key
- `name`: String
- `description`: Text
- `price`: Decimal
- `created_at`: Timestamp
- `updated_at`: Timestamp


## Controllers

### ProductController
Located at `app/Http/Controllers/ProductController.php`.

#### Methods
- `index()`: Display a listing of the products.
- `create()`: Show the form for creating a new product.
- `store(Request $request)`: Store a newly created product in the database.
- `show($id)`: Display the specified product.
- `edit($id)`: Show the form for editing the specified product.
- `update(Request $request, $id)`: Update the specified product in the database.
- `destroy($id)`: Remove the specified product from the database.

## Routes

Located at `routes/web.php`.

```php
Route::resource('products', ProductController::class);
```

## Views

Located in `resources/views/products`.

- `index.blade.php`: Display a listing of the products.
- `create.blade.php`: Show the form for creating a new product.
- `edit.blade.php`: Show the form for editing the specified product.
- `show.blade.php`: Display the specified product.

## Testing

### Feature Tests
Located in `tests/Feature`.

Run feature tests:
```sh
php artisan test
```

### Browser Tests
Located in `tests/Browser`.

Run browser tests:
```sh
php artisan dusk
```

### Running TailwindCSS
To compile your TailwindCSS assets, run:
```
npm run dev
```
This will watch your CSS and JavaScript files for changes and recompile them automatically.

### Running the Server

Start the development server:
```sh
php artisan serve
```

### Accessing the Application
Open your web browser and navigate to:
```
http://127.0.0.1:8000/products
```
This will take you to the product index page where you can view the list of products.

## Conclusion

This documentation provides an overview of the CRUD application built with Laravel and TailwindCSS. For more detailed information, refer to the source code and the Laravel documentation.



