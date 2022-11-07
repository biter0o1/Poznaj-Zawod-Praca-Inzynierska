<?php

namespace App\DataFixtures;

use App\Entity\QuizContent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class QuizContentFixtures extends Fixture
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

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Posiadanie silnego i zgrabnego ciała jest dla mnie ważną sprawą.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Staram się dogłębnie zrozumieć rzeczy.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Muzyka, kolory, piękno każdego rodzaju może wpłynąć na moje usposobienie.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Ludzie wzbogacają moje życie i nadają mu sens.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Wierze w siebie, w to, że mam wpływ na rzeczy.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Docenia jasno wytyczone kierunki działania, które dokładnie określają , co mam robić.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Zwykle potrafię budować, nosić wszystko sam, sam dawać sobie radę.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Mogę godzinami myśleć o czymś.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Doceniam piękne otoczeni. Kolory i formy znaczą dla mnie bardzo dużo.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Kocham towarzystwo.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię rywalizację.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Muszę mieć najpierw uporządkowane zaplecze, i dopiero potem rozpocząć prace nad projektem.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);

        $manager->flush();
    }
}
