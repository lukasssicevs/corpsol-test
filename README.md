# Laravel Project

This is a Laravel project that includes basic authentication, product CRUD functionality, and auditing of user actions.

## Table of Contents

-   [Laravel Project](#laravel-project)
    -   [Table of Contents](#table-of-contents)
    -   [Installation](#installation)
    -   [Database](#database)
    -   [Running the Application](#running-the-application)
    -   [License](#license)

## Installation

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/your-username/laravel-project.git
    cd laravel-project
    ```

2. **Install Dependencies:**

    ```bash
    composer install
    ```

3. **Set Up Environment Variables:**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configure `.env` File:**

    Update your `.env` file with your database credentials and other necessary configuration.

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

## Database

1. **Create database:**

    ```bash
    CREATE DATABASE your_database_name
    ```

2. **Run Migrations and Seeding:**

    ```bash
    php artisan migrate

    php artisan db:seed --class=AdminUserSeeder
    ```

## Running the Application

1. **Start the Development Server:**

    ```bash
    php artisan serve
    ```

2. **Access the Application:**

    Open your web browser and go to [http://localhost:8000](http://localhost:8000).

3. **Access the Audit API:**

    Open your web browser and go to [http://localhost:8000/api/audit-logs](http://localhost:8000/api/audit-logs).

## License

This project is open-source and available under the [MIT License](LICENSE).
