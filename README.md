Praca Dyplomowa


Odpalenie aplikacji:

`symfony server:start -d`

`docker-compose up -d` //Odpalenie kontenera z baza danych

`npm run dev-server -d`

Załadowanie fixtur:

`php bin/console doctrine:fixtures:load`

Messenger:

`php bin/console messenger:consume async --memory-limit=64M`