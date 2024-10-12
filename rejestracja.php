<?php
    session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>praktykuj.edu.pl</title>

    <link rel="stylesheet" type="text/css" href="logowanieStyle.css">
</head>

<body>
    <div id="container">
        <form action="zarejestruj.php" method="post" autocomplete="off">
            <div class="title">Zarejestruj się</div>

            <div class="radios">
                <label><input type="radio" id="pracodawcaRadio" name="role" value="pracodawca"> pracodawca</label>
            </div>
            <div class="radios">
                <label><input type="radio" id="studentRadio" name="role" value="student"> student</label>
            </div>

            <div id="pracodawcaForm" class="none">
                <label><input name="nazwa" type="email" placeholder="nazwa" onfocus="this.placeholder=''" onblur="this.placeholder='nazwa'"/></label>

                <label><input name="login" type="email" placeholder="e-mail" onfocus="this.placeholder=''" onblur="this.placeholder='e-mail'"/></label>

                <label><input name="haslo" type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'"/></label>

                <label><input name="haslo2" type="password" placeholder="powtórz hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'"/></label>

                <label><input name="nip" type="text" placeholder="NIP" onfocus="this.placeholder=''" onblur="this.placeholder='NIP'"/></label>

                <label><input name="logo" type="file" accept="image/png" value="logo"/></label>
            </div>

            <div id="studentForm" class="none">
                <label><input name="login" type="email" placeholder="e-mail" onfocus="this.placeholder=''" onblur="this.placeholder='e-mail'"/></label>

                <label><input name="haslo" type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'"/></label>

                <label><input name="haslo2" type="password" placeholder="powtórz hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'"/></label>

                <label><input name="imie" type="text" placeholder="Imie" onfocus="this.placeholder=''" onblur="this.placeholder='Imie'"/></label>

                <label><input name="nazwisko" type="text" placeholder="Nazwisko" onfocus="this.placeholder=''" onblur="this.placeholder='Nazwisko'"/></label>

                <label><input name="PESEL" type="number" placeholder="PESEL" onfocus="this.placeholder=''" onblur="this.placeholder='PESEL'"/></label>

                <label><input name="uczelnia" type="text" placeholder="Uczelnia" onfocus="this.placeholder=''" onblur="this.placeholder='Uczelnia'"/></label>

                <label><input name="kierunek" type="text" placeholder="Kierunek" onfocus="this.placeholder=''" onblur="this.placeholder='Kierunek'"/></label>

                <label><input name="CV" type="file" accept="application/pdf" value="CV"/></label>
            </div>

            <input type="submit" value="Zarejestruj się"/>
        </form>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById("studentForm").classList.add('none');
                document.getElementById("pracodawcaForm").classList.add('none');

                const radios = document.getElementsByName('role');

                radios.forEach(radio => {
                    radio.addEventListener('change', () => {
                        if (document.getElementById('pracodawcaRadio').checked) {
                            document.getElementById('pracodawcaForm').classList.remove('none');
                            document.getElementById('studentForm').classList.add('none');
                            <?php
                                $pracodawca;
                            ?>

                        } else if (document.getElementById('studentRadio').checked) {
                            document.getElementById('studentForm').classList.remove('none');
                            document.getElementById('pracodawcaForm').classList.add('none');
                            <?php
                                $pracownik;
                            ?>
                        }
                    });
                });
            });
        </script>

        <style>
            .none {
                display: none;
            }
        </style>
    </div>
</body>
</html>
