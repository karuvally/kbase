<h1 align="center">Flood Relief Knowledge Base</h1>

<p align="center">Platform for coordinating post disaster situations.</p>

## Table of Contents
- [Requirements](#requirements)
- [Getting started](#getting-started)
- [Laravel docs](#laravel-docs)
<hr>

### Requirements

The system is built using [Laravel](https://laravel.com/) framework, v5.5 (LTS Release) which has the following requirements

- PHP >7.1.3
- MySQL/MariaDB
- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/)

<hr>

### Getting Started

#### Setting up a development environment in GNU/Linux

<details>
<summary>1. Create database and user in MySQL/MariaDB. </summary>

    Database can be created from Command Line or GUI
    PHPMyAdmin(http://phpmyadmin.net/) is an web based tool to manage MySQL databases
    Adminer(https://www.adminer.org/) is a single file web interface to manage MySQL databases
</details>

<details>
<summary>2. Clone the git repo.</summary>

    git clone https://github.com/karuvally/kbase<br>
    cd kbase
</details>

<details>
<summary>3. Install dependencies.</summary>

    composer install
</details>

<details>
<summary>4. Copy the sample environment file and configure it as per your local settings.</summary>

    cp .env.example .env
    php artisan key:generate
</details>

<details>
<summary>5. Run database migrations and initial table seeds.</summary>
    
    php artisan migrate
    php artisan db:seed
</details>

<details>
<summary>6. Run the development server.</summary>
    
    php artisan serv
</details>

<details>
<summary>7. Open http://127.0.0.1:8000 in any web browser</summary>

    That's it! The default credentials are:
    u: admin@example.com
    p: admin
</details>

<hr>

### Laravel Docs

- [Laravel 5.5 Official documentation](https://laravel.com/docs/5.5/)
- [Laracasts](https://laracasts.com/)
<hr>
