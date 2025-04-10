# Task-Basic-CRUD-Application

# Setup Instructions

-   Ensure to have Xampp / Localhost running

-   Clone this project by running : git clone https://github.com/ayodvr/Task-Basic-CRUD-Application.git

-   Install dependencies by running : composer install or composer update

-   Create a new dot ENV file by running: cp .env.example .env

-   Create a new Application key by running: php artisan key:generate

-   Install the "SQLite 3 Editor" extension from the VsCode Marketplace for database

-   Run migrations using: php artisan migrate

-   Seed 5 users by running: php artisan db:seed --class=UserSeeder

-   Run "php artisan serve" to start project

# 📌 Project Scope

-   The Task Management Application is a simple CRUD system developed using Laravel. It allows managing tasks for multiple users without requiring authentication. The project focuses on the core principles of Laravel including routing, controllers, Blade templating, migrations, seeding, and Eloquent ORM.

# 🔧 Features

-   Create, Read, Update, and Delete (CRUD) operations for user tasks.

-   User-specific task management by passing user_id via route parameters.

-   Tasks include fields for title, description, and status.

-   Predefined statuses: pending, in_progress, completed.

-   Blade templates for clean and responsive UI using Bootstrap.

-   Validation on task form inputs to ensure data integrity.

-   Database seeding for auto-generating 5 sample users.

-   Eloquent relationships between User and Task.

# 👤 User Simulation

-   Although authentication is not implemented, the app simulates user-based task management by:

-   Passing a user_id in route parameters.

-   Displaying and managing tasks that belong only to the provided user_id.

# 🧱 Tech Stack

-   Laravel 10+

-   PHP 8+

-   SQLite: "kindly install the "SQLite 3 Editor" extension from the VsCode Marketplace"

-   Bootstrap (for styling)

-   Blade Templating Engine
