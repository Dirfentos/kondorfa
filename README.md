# Kondorfa

Ez a projekt egy Laravel 11 alapú webalkalmazás, amely a Kondorfa település köré épülő funkcionalitásokat gyűjti össze. A cél egy alap backend létrehozása naptár funkcióval, események adatbázisban való tárolásával.

## Főbb jellemzők

- Laravel 11 alapú backend  
- Eseménynaptár megjelenítése a főoldalon (`welcome.blade.php`)  
- Események adatbázisban tárolva  
- Testreszabott CSS stílus (kék színséma)  
- SQLite adatbázis használata  

## Telepítés

1. Klónozd a repót:

```bash
git clone https://github.com/Dirfentos/kondorfa.git
cd kondorfa
```

2. Telepítsd a PHP csomagokat:

```bash
composer install
```

3. Hozd létre az `.env` fájlt és generáld a kulcsot:

```bash
cp .env.example .env
php artisan key:generate
```

4. Adatbázis migrálása:

```bash
php artisan migrate
```

5. Indítsd el a Laravel szervert:

```bash
php artisan serve
```

## Szerző

- Dirfentos – [GitHub profil](https://github.com/Dirfentos)

## Licenc

Ez a projekt MIT licenc alatt érhető el.

## Megjegyzés

A képeket egy facebook csoportból szereztem, amelyben a falubeliek osztották meg a képeket, igyekeztem semmiképp sem beilleszteni személyt a projektbe
