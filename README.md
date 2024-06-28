
# Amikom Lost and Found

Tutorial Install Amikom Lost and Found



## Installation

#### Clone Untuk Backend
```bash
  git clone https://github.com/NicoIzumi30/amikom-lost-and-found.git
  cd amikom-lost-and-found
```

```bash
  composer install
  cp .env.example .env
  php artisan key:generate
  php artisan migrate
  php artisan db:seed UserSeeder
```
```bash
  php artisan serve
```

#### Clone Untuk Front end
```bash
  git clone https://github.com/NicoIzumi30/amikom-lost-and-found.git -b frontend
  cd amikom-lost-and-found
```