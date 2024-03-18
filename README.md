## Kayschima Bingo Cards

Mit diesem kleinen Mini-Projekt könnt ihr euch auf die Schnelle ein paar Bingo-Karten generieren lassen.

## Demo
Eine Demo der Anwendung findet ihr unter [https://bingocards.4motherearth.de](https://bingocards.4motherearth.de)

## Voraussetzungen
Dies ist eine Laravel 11 - Webanwendung. Ihr benötigt also folgende technische Komponenten:
- PHP 8.2 oder höher
- Node.js 20.x mit npm
- folgende PHP-Erweiterungen:
  - Ctype, cURL, DOM, Fileinfo, Filter, Hash, Mbstring, OpenSSL, PCRE, PDO, Session, Tokenizer, XML
- Composer

## Installation
```php
git clone https://github.com/kayschima/bingocards.git
cd bingocards
cp .env.example .env

composer install -o --no-dev
npm install

npm run build

php artisan migrate
php artisan key:generate
```
optional (oder eigenen Webserver entsprechend konfigurieren):
```php
php artisan serve
```

## Sicherheitslücken und Bugs

Wenn euch im Code Sicherheitslücken oder Fehler auffallen sollten, macht gerne ein Issue oder einen Pull Request hier im GitHub-Repository auf.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
