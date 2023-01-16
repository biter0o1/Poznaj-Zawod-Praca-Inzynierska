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





        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię pracować rękami.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Badanie nowych idei daje mi zadowolenie.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Zawsze poszukuję nowych sposobów, by dać wyraz moim twórczym zdolnościom.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Doceniam możliwość dzielenia moich osobistych spraw z innymi.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('To, że jestem najważniejszą osobą w grupie, daje mi zadowolenie.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Jest dla mnie sprawą honoru, by dbać o wszystkie szczegóły w mojej pracy.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);


        //

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Nie przeszkadza mi, że zabrudzę ręce w czasie pracy.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Wykształcenie jest dla mnie nieustającym procesem rozwijania i wyostrzania mojego sposobu
                            myślenia.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię ubierać się nietradycyjne i próbować nowe kierunki mody i kolory.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Często wyczuwam, kiedy jakaś osoba odczuwa potrzebę rozmowy.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię organizować ludzi i dawać impuls do pracy.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Rutyna pomaga mi w ukończeniu pracy.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);
        //
        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię kupować rzeczy, które są punktem wyjścia do dalszej pracy.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Czasami mogę siedzieć godzinami i pracować nad rozwiązaniem problemów, czytać lub
                            myśleć o życiu.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Potrafię wyobrazić sobie rzeczy.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Czuję się dobrze, kiedy zajmuję się innymi ludźmi.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię, gdy dają mi kredyt zaufania w pracy.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Jestem podbudowany, wiedząc że dobrze i starannie rozwiązałem powierzone zadanie.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);

        //
        $quizContent = new QuizContent();
        $quizContent
            ->setText('Chciałbym najchętniej być sobą i wykonywać rzeczy praktyczne, pracować rękami.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Chętnie czytam książki na jakikolwiek z tematów, który budzi moją ciekawość.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię wprowadzać w życie nowe pomysły.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('W sytuacji, gdy mam jakieś problemy z innymi, preferuje rozmowę i znalezienie rozwiązania.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Żeby osiągnąć sukces należy mierzyć wysoko.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię sytuację, które wymagają ode mnie podejmowania decyzji i brania za nie
                            odpowiedzialności.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);

        //
        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię dyskutować.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Analizuję dany problem gruntownie, zanim podejmę działania.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię zmieniać otoczeni tak, by uczynić je czymś innym i specjalnym.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Kiedy jest mi przykro znajduję przyjaciela, by z nim porozmawiać.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Kiedy proponuję plan, wolę, żeby inni zajmowali się szczegółami.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Zwykle jestem zadowolony z miejsca, gdzie przebywam.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);
        //
        $quizContent = new QuizContent();
        $quizContent
            ->setText('Praca na świeżym powietrzu dostarcza mi nowego zasobu energii.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Bez przerwy zadaję pytanie. „Dlaczego?”')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Podoba mi się, że moja praca jest wyrazem mojego nastroju i uczuć.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię znajdować sposoby pomagania ludziom, by bardziej byli ludzcy wobec siebie.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Branie udziału w podejmowaniu ważnych decyzji jest niezmiernie ciekawe.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Zawsze cieszę się, gdy ktoś inny przejmuje kierownictwo.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);



        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię, gdy moje otoczenie jest proste i praktyczne.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Roztrząsam problem, dopóki nie znajdę odpowiedzi.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Piękno natury porusza coś ukrytego we mnie.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Bliskie stosunki z innymi są ważne dla mnie.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lepsze stanowisko i awans są ważne dla mnie.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Efektywność to coś dla mnie: pracować określoną ilość godzin każdego dnia.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);


        $quizContent = new QuizContent();
        $quizContent
            ->setText('Dla uniknięcia chaosu potrzebny jest silny system z ustalonym prawem i porządkiem.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Książki zmuszające do myślenia zawsze poszerzają moje horyzonty.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Bardzo cieszę się z możliwości pójścia na wystawę, do teatru czy do kina.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Często pytam ludzi co u nich słychać')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Niezmiernie ciekawą rzeczą jest możliwość wpływania na innych ludzi.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Kiedy przyrzekam, że coś zrobię, wykonuję to do najdrobniejszego szczegółu.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);


        $quizContent = new QuizContent();
        $quizContent
            ->setText('Solidna, fizyczna i twarda praca nikomu nie zaszkodzi.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Chciałbym nauczyć się wszystkiego, co jest dostępne o tematach, które mnie interesują.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Nie chcę być jak inni, lubię robić rzeczy inaczej.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Często pytam ludzi jak mogę im pomóc')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Jestem gotów podjąć ryzyko, by kontynuować sprawy dalej.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię jasne i precyzyjne linie postępowania, kiedy coś zaczynam.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);


        $quizContent = new QuizContent();
        $quizContent
            ->setText('Pierwsze, co widzę w samochodzie to doby silnik.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Ludzie działają stymulująco na mój intelekt.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Kiedy się czymś się zajmuję, mam tendencję do zapominania o całym świecie.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Martwi mnie, że jest tyle ludzi w naszym społeczeństwie, którzy potrzebują pomocy.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Fajnie jest podsuwać innym ludziom pomysły.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Nie znoszę, kiedy ktoś bez przerwy zmienia metodę, kiedy akurat kończę pisanie pracy.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Zwykle znajduje wyjście w sytuacjach „podbramkowych”.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Nawet samo czytanie o odkryciach jest ciekawe.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię robić happeningi.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Zawsze staram się jak mogę, by okazać uwagę ludziom, którzy wyglądają na samotnych i bez
                            przyjaciół.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię działać.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Nie lubię robić rzeczy, które nie są zatwierdzone.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Sport jest ważny, jeśli ciało ma być zdrowe.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Sposób funkcjonowania natury budził zawsze moją ciekawość.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Zabawne jest być w dobrym humorze i robić coś nadzwyczajnego.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Sądzę, że ludzie w głębi duszy są dobrzy.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Jeśli nie daję sobie rady za pierwszym razem, rozpoczynam jeszcze raz z nową energią i
                            entuzjazmem.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Cenię wysoko sytuację, kiedy wiem czego inni ode mnie oczekują.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Lubię podzielić rzeczy na czynniki pierwsze, by zobaczyć czy dam sobie radę.')
            ->setPersonality($REALISTYCZNY_PRAKTYCZNY['type'])
            ->setPersonalitySign($REALISTYCZNY_PRAKTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Nie denerwuję się. Poprostu myśle o następnych krokach.')
            ->setPersonality($BADAWCZY['type'])
            ->setPersonalitySign($BADAWCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Byłoby dla mnie trudno wyobrazić sobie moje życie bez pięknych rzeczy wokół mnie.')
            ->setPersonality($ARTYSTYCZNY['type'])
            ->setPersonalitySign($ARTYSTYCZNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Często tak się dzieje, że inni przychodzą do mnie by opowiedzieć o swoich problemach.')
            ->setPersonality($SPOLECZNY_SOCJALNY['type'])
            ->setPersonalitySign($SPOLECZNY_SOCJALNY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Zwykle nawiązuję kontakt z ludźmi, którzy mogą pokazać mi drogę do nowych możliwości.')
            ->setPersonality($PRZEDSIEBIORCZY['type'])
            ->setPersonalitySign($PRZEDSIEBIORCZY['sign']);

        $manager->persist($quizContent);

        $quizContent = new QuizContent();
        $quizContent
            ->setText('Nie potrzebuje dużo, by być szczęśliwym.')
            ->setPersonality($KONWENCJONALNY['type'])
            ->setPersonalitySign($KONWENCJONALNY['sign']);

        $manager->persist($quizContent);
        $manager->flush();

    }
}
