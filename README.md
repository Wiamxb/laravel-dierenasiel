# Dierenasiel – Laravel Project

Dit project is een webapplicatie voor een dierenasiel,
ontwikkeld met Laravel.

Bezoekers kunnen:
- informatie bekijken (nieuws en FAQ)
- contact opnemen
- zich registreren

Beheerders (admins) hebben toegang tot
een uitgebreid beheerpaneel.

Dit project focust op communicatie,
informatie en beheer van een dierenasiel.
Adoptie verloopt via externe procedures
en is daarom niet digitaal uitgewerkt
in deze applicatie.

--------------------------------------------------

GEBRUIKTE TECHNOLOGIEËN

- Laravel 12
- PHP 8.4
- SQLite
- Blade
- Tailwind CSS
- Laravel Breeze / Fortify (authenticatie)

--------------------------------------------------

INSTALLATIE

1. Repository klonen
   - git clone https://github.com/Wiamxb/laravel-dierenasiel.git
   - cd laravel-dierenasiel

2. Afhankelijkheden installeren
   - composer install
   - npm install
   - npm run build

3. .env-bestand aanmaken
   - cp .env.example .env
   - php artisan key:generate

4. Database migreren
   - php artisan migrate

5. Server starten
   - php artisan serve

--------------------------------------------------

TESTACCOUNTS

ADMINISTRATOR
- E-mail           : admin@ehb.be
- Wachtwoord       : password!321
- Rol              : Admin
- Doorverwijzing   : Admin dashboard

GEBRUIKER
- E-mail           : wiam@ehb.be
- Wachtwoord       : password!321
- Rol              : Gewone gebruiker
- Doorverwijzing   : Gebruikersdashboard

REGISTRATIE
- Bezoekers kunnen zelf een account aanmaken
- Nieuwe accounts krijgen automatisch de rol gebruiker

--------------------------------------------------

NAVIGATIE EN PAGINA’S

PUBLIEK
- /               : Home
- /news           : Nieuws
- /faq            : Veelgestelde vragen
- /contact        : Contactformulier

INGELOGDE GEBRUIKER
- /dashboard      : Gebruikersdashboard
- /profile        : Profiel bewerken

ADMIN
- /admin/dashboard        : Admin dashboard
- /admin/news             : Nieuwsbeheer
- /admin/faq/categories   : FAQ-categorieën
- /admin/faq/items        : FAQ-vragen
- /admin/contact          : Contactberichten
- /admin/users            : Gebruikersbeheer

--------------------------------------------------

ROLLEN EN RECHTEN

- Bezoeker   → Nieuws, FAQ, contact
- Gebruiker  → Dashboard, profiel
- Admin      → Volledig beheer

--------------------------------------------------

FUNCTIONALITEITEN

NIEUWS
- Admin kan nieuws aanmaken, bewerken en verwijderen
- Bezoekers kunnen nieuws lezen

FAQ
- Admin beheert categorieën en vragen
- Bezoekers zien een overzichtelijke FAQ-pagina

CONTACT
- Bezoekers sturen berichten via het contactformulier
- Admin kan berichten bekijken (inbox)

GEBRUIKERS
- Admin kan alle gebruikers bekijken
- Zoek- en filterfunctie

AUTHENTICATIE
- Inloggen en registreren
- Automatische doorverwijzing op basis van rol
- Beveiligde admin-routes

--------------------------------------------------

STYLING EN GEBRUIKERSERVARING

- Tailwind CSS
- Groene natuurtinten passend bij een dierenasiel
- Duidelijke navigatie
- Responsief ontwerp

--------------------------------------------------

OPMERKINGEN

- SQLite wordt gebruikt voor eenvoud
- Project is opgezet volgens het MVC-principe
- Admin-toegang is volledig afgeschermd

--------------------------------------------------

AUTEUR

- Naam       : Wi'âm Bola
- Opleiding  : Toegepaste Informatica
- School     : Erasmushogeschool Brussel
