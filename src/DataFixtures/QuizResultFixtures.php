<?php

namespace App\DataFixtures;

use App\Entity\QuizResult;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class QuizResultFixtures extends Fixture
{



    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {

    }

    public function load(ObjectManager $manager): void
    {
        $REALISTYCZNY_PRAKTYCZNY = ['type' => 'Realistyczny-Praktyczny', 'sign' => 'R'];
        $BADAWCZY = ['type' => 'Badawczy', 'sign' => 'B'];
        $ARTYSTYCZNY = ['type' => 'Artystyczny', 'sign' => 'A'];
        $SPOLECZNY_SOCJALNY = ['type' => 'Spoleczny-Socjalny', 'sign' => 'S'];
        $PRZEDSIEBIORCZY = ['type' => 'Przedsiebiorczy', 'sign' => 'P'];
        $KONWENCJONALNY = ['type' => 'Konwencjonalny', 'sign' => 'K'];

        $quizResult = new QuizResult();
        $quizResult
            ->setSign($REALISTYCZNY_PRAKTYCZNY['sign'])
            ->setType($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setText('Osoby o takim typie osobowości zawodowej są przedstawiane jako konkretne, praktyczne,
                            prostolinijne, systematyczne. W pracy wykorzystują uzdolnienia manualne, lubią konstruować,
                            budować, mieć do czynienia z maszynami. Dążą do skonkretyzowania, czego się od nich
                            oczekuje, co ma być wykonane.
                            Rekomendowane rodzaje prac – produkcyjna, usługowa, sportowa.
                            Przykładowe zawody – murarz, elektryk, kierowca, stolarz, technik laboratorium, mechanik,
                            jubiler, hydraulik.');

        $manager->persist($quizResult);

        $quizResult = new QuizResult();
        $quizResult
            ->setSign($BADAWCZY['sign'])
            ->setType($BADAWCZY['type'])
            ->setText('Osoby o takim typie osobowości zawodowej są określane jako analityczne, dociekliwe,
                            precyzyjne, konkretne, o szerokim umyśle, ciekawe zjawisk, racjonalne, niezależne, mające
                            zmysł obserwacji. Lubią diagnozować, badać, obserwować, poznawać, rozumieć sedno
                            problemu. Dobrze odnajdują się w pracy koncepcyjnej, samodzielnej, wymagającej logiki
                            myślenia.
                            Rekomendowane rodzaje prac – poznawcza, informacyjna.
                            Przykładowe zawody – analityk rynku, matematyk, programista, biolog, anestezjolog, konsultant,
                            ekonomista.');

        $manager->persist($quizResult);

        $quizResult = new QuizResult();
        $quizResult
            ->setSign($ARTYSTYCZNY['sign'])
            ->setType($ARTYSTYCZNY['type'])
            ->setText('Osoby o takim typie osobowości zawodowej mają zdolności i preferencje artystyczne, są
                            innowacyjne, niekonformistyczne, impulsywne, niestandardowe, opierające się na intuicji,
                            wrażliwe. Decyzje podejmują „na wyczucie”, preferują zadania kreatywne, wolą pracować nad
                            ideami, koncepcjami niż nad konkretnymi produktami.
                            Rekomendowane rodzaje prac – artystyczna, twórcza.
                            Przykładowe zawody – szef reklamy, projektant mebli: mebli, mody, wnętrz, terenów zielonych,
                            tancerz, grafik, pisarz, malarz, fotograf.');

        $manager->persist($quizResult);

        $quizResult = new QuizResult();
        $quizResult
            ->setSign($SPOLECZNY_SOCJALNY['sign'])
            ->setType($SPOLECZNY_SOCJALNY['type'])
            ->setText('Osoby o takim typie osobowości zawodowej są określane jako taktowne, hojne, pomocne,
                            uprzejme, współpracujące, rozumiejące. Preferują pracę bezpośrednio związane z ludźmi. Lubią
                            wyjaśniać, informować, szkolić, pomagać, doradzać.
                            Rekomendowane rodzaje prac – organizacyjna, wychowawcza, opiekuńcza, usługowa, sportowa.
                            Przykładowe zawody – terapeuta, kosmetyczka, nauczyciel, szkoleniowiec, szef personalny,
                            lekarz, pielęgniarka, pracownik socjalny.');

        $manager->persist($quizResult);

        $quizResult = new QuizResult();
        $quizResult
            ->setSign($PRZEDSIEBIORCZY['sign'])
            ->setType($PRZEDSIEBIORCZY['type'])
            ->setText('Osoby o takim typie osobowości zawodowej są energiczne, optymistyczne, entuzjastyczne,
                            ekstrawertyczne, patrzące perspektywicznie, łatwo wyznaczające zadania, pociągające ludzi do
                            osiągnięcia wyznaczonego celu, wywierające wpływ, mające wymierne osiągnięcia. Osoby takie
                            lubią mówić, promować, sprzedawać, przewodzić, przekonywać.
                            Rekomendowane rodzaje prac – organizacyjna, usługowa.
                            Przykładowe zawody – menedżer ds. kluczowych klientów, przedstawiciel handlowy, dziennikarz,
                            agent ubezpieczeniowy, szef marketingu, szef sprzedaży.');

        $manager->persist($quizResult);

        $quizResult = new QuizResult();
        $quizResult
            ->setSign($KONWENCJONALNY['sign'])
            ->setType($KONWENCJONALNY['type'])
            ->setText('Osoby o takim typie osobowości zawodowej są określane jako metodyczne, precyzyjne,
                            praktyczne, systematyczne. Preferują pracę z danymi liczbowymi, przestrzeganie procedur,
                            organizowanie i porządkowanie danych, korzystanie z programów obliczeniowych.
                            Rekomendowane rodzaje prac – organizacyjna, porządkowa, informacyjna.
                            Przykładowe zawody – urzędnik, sekretarka, pracownik biurowy, doradca podatkowy, kasjer,
                            księgowy.');

        $manager->persist($quizResult);
        $manager->flush();

    }
}
