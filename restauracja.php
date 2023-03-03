<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja wszystkie smaki</title>
    <link rel="stylesheet" href="styl1.css">
    <script src="skrypt.js"></script>
</head>
<body onload="boom()">
    
    <section id="baner">
        <h1>Witamy w restauracji "Wszystkie Smaki"</h1>
    </section>
    <section id="panel_lewy">
        <img src="menu.jpg" alt="Nasze danie">
    </section>
    <section id="panel_prawy">
        <h4>U nas dobrze zjesz</h4>
        <ol>
            <li>Obiady od 40zł</li>
            <li>Przekąski od 10zł</li>
            <li>Kolacje od 20zł</li>
        </ol>
    </section>
    <section id="panel_dolny">
        <h2>Zarezerwuj stolik on-line</h2>
        <form action="rezerwacja.php" method="POST">
            Data (format rrrr-mm-dd): <br>
            <input type="date" name="data"> <br>
            Ile osób? <br>
            <input type="number" name="osoby"> <br>
            Twój numer telefonu: <br>
            <input type="text" name="nr_tel"> <br>
            <input type="checkbox" name="zgoda">Zgadzam się na przetwarzanie moich danych osobowych <br>
            <input type="reset" value="WYCZYŚĆ">
            <input type="submit" value="REZERWUJ">
        </form> 
    </section>
    <section id="stopka">
        Stronę opracował: 2115
    </section>
</body>
</html>