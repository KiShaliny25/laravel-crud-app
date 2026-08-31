# Laravel Product Management CRUD Application

A simple Product Management CRUD Application built using Laravel and MySQL.

## Features
- **Product List (Index):** View all products in a structured table.
- **Create Product:** Form to add a new product with real-time validation.
- **Edit/Update Product:** Form to edit existing product details.
- **Delete Product:** Remove products with a confirmation modal.
- **Form Validation & Error Handling:** Validations for required fields (`name`, `weight`, `price`).

## Prerequisites
- PHP >= 8.2
- Composer
- XAMPP (MySQL Database)

## Setup Instructions

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/KiShaliny25/laravel-crud-app.git](https://github.com/KiShaliny25/laravel-crud-app.git)
   cd laravel-crud-app
   ```

2. **Install Dependencies:**
   ```bash
   composer install
   ```

3. **Environment Setup:**
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```

    Configure your database connection in `.env`:

    ```env
    DB_DATABASE=product_crud
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

5. **Run Migrations:**
    ```bash
    php artisan migrate
    ```

6. **Serve Application:**
    ```bash
    php artisan serve
    ```
