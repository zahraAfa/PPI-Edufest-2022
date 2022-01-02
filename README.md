## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Running in Local Environment

### XAMPP

Install all dependencies

```bash
    composer install
```

Copy the example env file and make the required configuration changes in the .env file

```bash
    cp .env.example .env
```

Generate a new application key

```bash
    php artisan key:generate
```

Create Database on DBMS (Navicat, mysql workbench, or phpmyadmin) called as **ppi_edufest_2022**

Migrate the database schema

```bash
    php artisan migrate
```

Fresh the database schema just in case you want to drop and rebuild the schema

```bash
    php artisan migrate:fresh
```

Seed the database

```bash
    php artisan db:seed
```

Start the local development server

```bash
    php artisan serve
```

You can now access the server at <http://localhost:8000>

### Docker

#### First Time Run
- Create new self-signed SSL certificate.
``` bash
mkcert -cert-file docker/traefik/certs/local-cert.pem -key-file docker/traefik/certs/local-key.pem "docker.localhost" "*.docker.localhost" "domain.local" "*.domain.local"
```

- Make sure to set`DB_HOST` in `.env` file to database container name. In this case, it should be set to `database`.

#### Subsequent Run
- Run `docker compose`. To daemonize, use `-d` (running in background). Database should persist between container restarts.
``` bash
docker compose up -d
```

#### Inner Workings

- Container networking is handled by `traefik`, acting as entry points to all incoming connections.
- SSL/TLS/HTTPS also handled by `traefik`. Connection from outside into server is encrypted. Connection between services is unencrypted.
- Database tables and entries should persist between container restarts. This is achieved with `app-entrypoint.sh`, which checks whether database tables exist within `dbdata` volume.
``` 
                    ___________________________
                   / docker compose/swarm node
                   | 
incoming request <=============> traefik <================> app
                   | encrypted             unencrypted \
                   |  traffic                traffic    \
                   |                                     => phpmyadmin
                   |
```
