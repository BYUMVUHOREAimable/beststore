# Best Store - E-commerce Web Application

## Overview
Best Store is a modern e-commerce platform where users can register, login, update their profile, and manage their account. It is built using PHP, MySQL, and Bootstrap for responsive design.

## Features
- User registration and login.
- Profile management (view and update).
- Responsive design with Bootstrap.
- Dynamic copyright year.

## Technologies
- **Frontend**: HTML, CSS, Bootstrap 5.
- **Backend**: PHP, MySQL.
- **Others**: Session management for authentication.

## Installation

### Prerequisites
- PHP 7.4 or higher
- MySQL or MariaDB
- Apache or any web server

### Steps
1. Clone the repo:
   ```bash
   git clone https://github.com/BYUMVUHOREAimable/beststore.git
   cd best-store

Set up the database:

CREATE DATABASE best_store;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    phone VARCHAR(20),
    address TEXT,
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Configure database connection in tools/db.php.

Start the server:

php -S localhost:8000

Usage

Register: /register.php

Login: /login.php

Profile: /profile.php (Edit profile info)

License

MIT License

Contact

For any questions, contact aimablebyumvuhore@gmail.com