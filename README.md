<p align="center">Projekt stworzony na potrzeby Pracy Inżynierskiej o temacie "Aplikacja webowa do wspomagania wyboru zawodu przez uczniów".</p>

<div align="center" id="badges">
  <img src="https://img.shields.io/github/commit-activity/y/biter0o1/Poznaj-Zawod-Praca-Inzynierska?style=plastic" alt=""/>
  <img src="https://img.shields.io/github/issues-pr-closed/biter0o1/Poznaj-Zawod-Praca-Inzynierska" alt=""/>
  <br/>
  <img src="https://img.shields.io/github/repo-size/biter0o1/Poznaj-Zawod-Praca-Inzynierska" alt=""/>
  <img src="https://img.shields.io/github/directory-file-count/biter0o1/Poznaj-Zawod-Praca-Inzynierska" alt=""/>
  <img src="https://img.shields.io/tokei/lines/github/biter0o1/Poznaj-Zawod-Praca-Inzynierska?style=plastic" alt=""/>
  <br/>
  <img src="https://img.shields.io/github/languages/top/biter0o1/Poznaj-Zawod-Praca-Inzynierska" alt=""/>
  <img src="https://img.shields.io/github/languages/count/biter0o1/Poznaj-Zawod-Praca-Inzynierska" alt=""/>
<div/>

Odpalenie aplikacji:

`symfony server:start -d`

`docker-compose up -d`

`npm run dev-server -d`

Załadowanie fixtur:

`php bin/console doctrine:fixtures:load`

Messenger:

`php bin/console messenger:consume async --memory-limit=64M`
