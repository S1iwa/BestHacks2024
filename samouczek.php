<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>praktykuj.edu.pl</title>

    <link rel="stylesheet" type="text/css" href="profilStyle.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="css/animation.css">
</head>

<body>
    <header class="sticky-header" style="top: 0;">
        <a href="index.php">
            <h1 class="header-title">Praktykuj.edu.pl</h1>
        </a>
        <div style="margin-right: 40px" class="header-buttons">
            <?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_type'])): ?>
                <a href="logowanie.php?logout=true" class="cta-button login-button">Wyloguj się</a>
            <?php else: ?>
                <a href="logowanie.php" class="cta-button login-button">Zaloguj się</a>
            <?php endif; ?>
            <a href="#" class="cta-button secondary browse-button">Przeglądaj ogłoszenia</a>
        </div>
    </header>

    <div id="container">
        <article>
            <header>
                <div class="tytul" style="color: #DCF763; font-size: 50px; margin-bottom: 40px">Praktyki studenckie —
                    obowiązki pracodawcy</div>
            </header>
            <section>
                <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px">
                    Praktyki studenckie to nie tylko okazja dla studentów do zdobycia praktycznego doświadczenia w swoim
                    zawodzie, ale także dla firm do nawiązania współpracy z młodymi, utalentowanymi osobami. To szansa
                    na kształtowanie przyszłych pracowników oraz budowanie wizerunku atrakcyjnego pracodawcy.
                </div>
            </section>
            <!-- <section>
                <div style="text-align: center">
                    <img src="zdjTest.jpg"
                        style="width: 80%; border-radius: 30px; border: 4px solid white; margin-bottom: 60px">
                </div>
            </section> -->
            <header>
                <div class="tytul" style="color: #DCF763; font-size: 50px; margin-bottom: 40px">Zagadnienia poruszane w
                    artykule</div>
            </header>
            <section>
                <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px">
                    <ul>
                        <li>Jak zorganizować praktyki studenckie?</li>
                        <li>Gdzie pracodawca może znaleźć praktykantów?</li>
                        <li>Obowiązki pracodawcy wobec praktykantów</li>
                        <li>Korzyści dla pracodawcy</li>
                        <li>Zarządzanie procesami HR</li>
                    </ul>
                </div>
            </section>
            <header>
                <div class="tytul" style="color: #DCF763; font-size: 50px; margin-bottom: 40px">Jak zorganizować praktyki studenckie?</div>
            </header>
            <section>
                <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px">
                    Pracodawca, chcąc zorganizować praktyki, powinien nawiązać współpracę z uczelnią. Każda uczelnia
                    posiada własne regulaminy dotyczące praktyk, a student ma swojego opiekuna praktyk, który koordynuje
                    całość. Praktyki są obowiązkowe, co oznacza, że uczelnie i studenci aktywnie poszukują pracodawców
                    gotowych na taką współpracę.
                </div>
            </section>
            <header>
                <div class="tytul" style="color: #DCF763; font-size: 50px; margin-bottom: 40px">Gdzie pracodawca może znaleźć praktykantów?</div>
            </header>
            <section>
                <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px">
                    Pracodawcy mogą pozyskać praktykantów przez:.
                    <ul>
                        <li><strong>Współpracę z uczelniami</strong> – bezpośredni kontakt lub spotkania z kołami naukowymi,</li>
                        <li><strong>Biura Karier</strong> – oferują platformy do zamieszczania ofert praktyk,</li>
                        <li><strong>Targi pracy i Dni Kariery</strong> – pozwalają na bezpośrednie spotkania z potencjalnymi kandydatami,</li>
                        <li><strong>Portale pracy i media społecznościowe</strong> – studenci aktywnie korzystają z takich platform jak LinkedIn, TikTok czy Instagram,</li>
                        <li><strong>Stronę firmową</strong> – ważne jest, aby sekcja "Kariera" była aktualna i łatwa do znalezienia.</li>
                    </ul>
                </div>
            </section>
            <header>
                <div class="tytul" style="color: #DCF763; font-size: 50px; margin-bottom: 40px">Obowiązki pracodawcy wobec praktykantów</div>
            </header>
            <section>
                <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px">
                <ul>
                        <li><strong>Dokumenty:</strong> Pracodawca zawiera umowę z uczelnią, nie ze studentem. Umowa określa zasady i zakres praktyk, które pracodawca może współtworzyć. Dodatkowo student może dostarczyć skierowanie na praktyki.</li>
                        <li><strong>Wprowadzenie do firmy:</strong> Pracodawca ma obowiązek zapoznać praktykanta z regulaminem pracy oraz zasadami ochrony danych.</li>
                        <li><strong>Dziennik praktyk:</strong> Pracodawca może być zobowiązany do prowadzenia dziennika praktyk, gdzie dokumentowane będą zadania i zdobyte umiejętności.</li>
                        <li><strong>Zaświadczenie:</strong> Po zakończeniu praktyk pracodawca musi wystawić zaświadczenie, które student dostarcza uczelni.</li>
                    </ul>
                </div>
            </section>
            <header>
                <div class="tytul" style="color: #DCF763; font-size: 50px; margin-bottom: 40px">BHP i badania lekarskie</div>
            </header>
            <section>
                <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px">
                    Choć przepisy prawa pracy nie dotyczą bezpośrednio praktyk studenckich, pracodawca musi zapewnić bezpieczne warunki pracy. Obejmuje to szkolenie z zakresu BHP oraz wyposażenie w narzędzia i odzież ochronną. Badania lekarskie nie są wymagane.
                </div>
            </section>
            <header>
                <div class="tytul" style="color: #DCF763; font-size: 50px; margin-bottom: 40px">Wynagrodzenie i obowiązki względem ZUS</div>
            </header>
            <section>
                <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px">
                Praktyki studenckie zazwyczaj są bezpłatne, a w przypadku takich praktyk pracodawca nie musi zgłaszać studentów do ZUS ani odprowadzać składek. Wynagrodzenie może być oferowane według decyzji pracodawcy.
                </div>
            </section>
            <header>
                <div class="tytul" style="color: #DCF763; font-size: 50px; margin-bottom: 40px">Korzyści dla pracodawcy</div>
            </header>
            <section>
                <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px">
                Praktyki studenckie to przede wszystkim możliwość odkrycia utalentowanych kandydatów, których można zatrudnić w przyszłości, zmniejszając koszty rekrutacji. Dodatkową zaletą jest brak konieczności angażowania się w skomplikowane procedury formalne, ponieważ większość dokumentacji przygotowuje uczelnia.
                </div>
            </section>
        </article>
    </div>
    </div>
</body>

</html>