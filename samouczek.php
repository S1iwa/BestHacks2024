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
            <section> <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px"> Praktyki studenckie to nie tylko okazja dla studentów do zdobycia praktycznego doświadczenia w swoim zawodzie, ale także dla firm do nawiązania współpracy z młodymi, utalentowanymi osobami. To szansa na kształtowanie przyszłych pracowników oraz budowanie wizerunku atrakcyjnego pracodawcy. </div> </section> <section> <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px"> Dla przedsiębiorców organizacja praktyk studenckich może być kluczowym elementem budowania długoterminowej strategii kadrowej. W dobie wyzwań związanych z rekrutacją wykwalifikowanych pracowników, wielu pracodawców dostrzega korzyści płynące z nawiązania współpracy ze studentami, którzy w przyszłości mogą stać się cennymi członkami ich zespołów. Platforma <b>Praktykuj.edu.pl</b> to narzędzie, które umożliwia skuteczne łączenie firm z utalentowanymi studentami, zainteresowanymi zdobyciem praktycznego doświadczenia zawodowego. </div> </section> <section> <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px"> Dlaczego warto zorganizować praktyki za pośrednictwem platformy <b>Praktykuj.edu.pl</b>? Po pierwsze, jest to doskonała okazja dla przedsiębiorców, aby poznać kandydatów jeszcze przed rozpoczęciem standardowego procesu rekrutacyjnego. Studenci, korzystający z naszej platformy, aktywnie poszukują praktyk, co oznacza, że są zmotywowani do pracy i zdobywania wiedzy. Przedsiębiorcy mają możliwość obserwacji ich rozwoju w realnych warunkach biznesowych, co pozwala na lepszą ocenę ich kompetencji i dopasowanie do zespołu. </div> </section> <section> <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px"> Kolejną zaletą korzystania z platformy <b>Praktykuj.edu.pl</b> jest oszczędność czasu i zasobów. Zamiast prowadzić długotrwałe poszukiwania odpowiednich kandydatów, przedsiębiorcy mają dostęp do bazy studentów, którzy są już gotowi na podjęcie praktyk. To znacząco przyspiesza proces rekrutacji i minimalizuje koszty związane z poszukiwaniem potencjalnych pracowników. Platforma oferuje intuicyjny interfejs, który ułatwia zarówno pracodawcom, jak i studentom, szybkie i efektywne nawiązanie kontaktu. </div> </section> <section> <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px"> Praktyki studenckie organizowane przez <b>Praktykuj.edu.pl</b> to również doskonały sposób na wzmocnienie marki pracodawcy. Firmy, które inwestują w rozwój młodych ludzi, zyskują reputację nowoczesnych, zaangażowanych i odpowiedzialnych społecznie. Przedsiębiorcy mogą pokazać, że zależy im na edukacji i przyszłości młodego pokolenia, co pozytywnie wpływa na postrzeganie ich na rynku pracy. W dłuższej perspektywie współpraca z uczelniami i studentami przyczynia się do tworzenia silnych relacji, które mogą zaowocować stałym dostępem do nowych talentów. </div> </section> <section> <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px"> Korzystanie z platformy <b>Praktykuj.edu.pl</b> to korzyść nie tylko dla studentów, ale również dla samych przedsiębiorców. Dzięki współpracy z młodymi osobami, firmy mogą zyskać nową perspektywę na swoje projekty oraz wprowadzić innowacyjne rozwiązania, które są często inspirowane świeżym spojrzeniem młodych praktykantów. To doskonała okazja do wymiany doświadczeń oraz wzbogacenia wiedzy zespołu o nowe, aktualne trendy i technologie. </div> </section> <section> <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px"> Platforma <b>Praktykuj.edu.pl</b> to zatem idealne miejsce dla przedsiębiorców, którzy chcą nie tylko wspierać młode talenty, ale także skutecznie rozwijać swoją firmę poprzez dostęp do najlepiej przygotowanych studentów. Długofalowe inwestycje w młodych ludzi mogą przynieść realne korzyści, a współpraca na etapie praktyk pozwala firmom budować solidne fundamenty pod przyszłe sukcesy. </div> </section>
        </article>
    </div>
    </div>
</body>

</html>