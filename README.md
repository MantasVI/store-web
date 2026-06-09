# Store Web

Laravel 12 pagrindu sukurta elektroninės prekybos sistema, skirta Apple produktų (iPhone ir MacBook) katalogui, krepšeliui bei užsakymų valdymui.

## Funkcionalumas

* iPhone produktų katalogas
* MacBook produktų katalogas
* Atskirų produktų peržiūra
* Pirkinių krepšelis
* Kiekio redagavimas krepšelyje
* Produktų šalinimas iš krepšelio
* Registracija ir prisijungimas
* Užsakymų pateikimas
* Užsakymų istorijos peržiūra
* Session pagrindu veikiantis krepšelis
* Laravel Eloquent modeliai ir migracijos

## Naudotos technologijos

### Backend

* PHP 8.2+
* Laravel 12
* Eloquent ORM
* SQLite / MySQL

### Frontend

* Blade Templates
* Vite
* Tailwind CSS 4
* JavaScript

## Projekto struktūra

```text
app/
├── Http/
│   └── Controllers/
│       ├── AuthController.php
│       ├── CartController.php
│       ├── HomeController.php
│       ├── IphoneController.php
│       └── MacController.php
│
├── Models/
│   ├── Iphone.php
│   ├── Macbook.php
│   ├── Order.php
│   ├── OrderItem.php
│   └── User.php

database/
├── migrations/
└── seeders/

resources/
├── views/
├── css/
└── js/

routes/
└── web.php
```

## Sistemos reikalavimai

* PHP >= 8.2
* Composer
* Node.js >= 20
* npm
* SQLite arba MySQL

## Diegimas

### 1. Klonuoti projektą

```bash
git clone https://github.com/MantasVI/store-web.git
cd store-web
```

### 2. Įdiegti PHP priklausomybes

```bash
composer install
```

### 3. Įdiegti JavaScript paketus

```bash
npm install
```

### 4. Sukurti .env failą

```bash
cp .env.example .env
```

### 5. Sugeneruoti aplikacijos raktą

```bash
php artisan key:generate
```

### 6. Sukurti duomenų bazę

SQLite atveju:

```bash
touch database/database.sqlite
```

`.env` faile:

```env
DB_CONNECTION=sqlite
```

### 7. Paleisti migracijas ir seederius

```bash
php artisan migrate:fresh --seed
```

Seederiai automatiškai:

* sukuria testinį vartotoją
* užpildo iPhone produktus
* užpildo MacBook produktus

## Testinis vartotojas

Po seederių paleidimo:

```text
Email: test@example.com
Password: lopas1234
```

## Projekto paleidimas

### Laravel serveris

```bash
php artisan serve
```

### Vite

Atskirame terminale:

```bash
npm run dev
```

Aplikacija bus pasiekiama:

```text
http://127.0.0.1:8000
```

## Pagrindiniai maršrutai

### Bendri puslapiai

| Route   | Aprašymas            |
| ------- | -------------------- |
| /home   | Pagrindinis puslapis |
| /iphone | iPhone katalogas     |
| /mac    | MacBook katalogas    |

### Produktų peržiūra

| Route          |
| -------------- |
| /iphone/{name} |
| /mac/{name}    |

### Krepšelis

| Route                      | Veiksmas           |
| -------------------------- | ------------------ |
| GET /cart                  | Peržiūra           |
| POST /cart/add/{type}/{id} | Pridėti produktą   |
| GET /cart/edit/{id}        | Redaguoti kiekį    |
| PUT /cart/update/{id}      | Atnaujinti kiekį   |
| DELETE /cart/delete/{id}   | Pašalinti produktą |

### Autentifikacija

| Route   |
| ------- |
| /signup |
| /login  |
| /logout |

### Užsakymai

| Route     |
| --------- |
| /checkout |
| /orders   |

## Duomenų modeliai

### Iphone

Saugo:

* pavadinimą
* nuotrauką
* kategoriją
* ekrano dydį
* atmintį
* spalvą
* kainą
* prieinamumą

### Macbook

Saugo:

* pavadinimą
* ekraną
* procesorių
* vaizdo plokštę
* RAM
* atmintį
* spalvą
* kainą
* prieinamumą

### Order

Saugo:

* vartotojo ID
* bendrą sumą
* būseną

### OrderItem

Saugo:

* produkto tipą
* produkto ID
* kiekį
* kainą

## Kaip veikia užsakymo procesas

1. Vartotojas prideda produktus į krepšelį.
2. Produktai saugomi Laravel Session.
3. Paspaudus Checkout:

   * sukuriamas Order įrašas;
   * sukuriami OrderItem įrašai;
   * apskaičiuojama bendra suma;
   * išvalomas krepšelis.
4. Užsakymai matomi `/orders` puslapyje.

## Autorius

Mantas Visakavičius

Vilniaus Universitetas

Laravel internetinės parduotuvės projektas.
