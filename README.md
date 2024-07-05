# URLs shortener

# Description

Create a webpage prototype for URLs shortener.

# Installation Requirements

- PHP `>= 8.1`
- MySQL `>=5.7`
- NodeJS `>=18.0`
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- Filter PHP Extension
- Hash PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Session PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- ZIP Extension

# Task Requirements

Create a webpage prototype for URLs shortener.

Requirements
- Create a form, that allows adding URL and system generates short unique URL:
o The format of generated URL: example.com/[hash];
o The short URL must be a valid URL;
o The URL must be shortened till 6 symbols hash, which contains alphanumeric symbols;
o Algorithm must recognize duplicate URL and instead of generating new short URL, show previously
created;
o Upon submit, the URL should be checked using the „Google Safe Browsing“ API
(https://developers.google.com/safe-browsing/v4/lookup-api). Or any other API with the same
function.

- After implementation, upon opening the short URL, the user must be redirected to the original URL.
- Advantage, if functionality could work from folder (e.g.: example.com/something/[hash]).
- For implementation use Laravel and Vue.js.

## Installation

Clone the project or download it directly

```bash
  git clone git@github.com:ahmedalimhmoud/url-shortener.git
```

Go to the project directory

```bash
  cd url-shortener
```

Install dependencies

```bash
  composer install
  npm install
```

Activate Environment File

```bash
  cp .env.example .env
  php artisan key:generate
```

Add your DB variables in env

```bash
  change DB_CONNECTION , DB_DATABASE , DB_USERNAME , DB_PASSWORD 
```

add your google key to GOOGLE_API_KEY

- you can get your api key through this url : https://console.cloud.google.com/marketplace/product/google/safebrowsing.googleapis.com?q=search&referrer=search&project=loyal-karma-425422-c2

- just enable the api then create credintials

```bash
  GOOGLE_API_KEY=XXXXXXXXXXXXXXXX 
```

Migrate your database tables

```bash
  php artisan migrate 
```

Start PHP server

```bash
  php artisan serv
```

Start Node Server
 
```bash
  npm run dev
```

Broswe the frontend views on

```bash
  http://127.0.0.1:8000
```
