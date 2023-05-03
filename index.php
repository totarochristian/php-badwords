<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
  <link rel="stylesheet" href="./styles/general.css">
</head>
<body>
  <!-- Descrizione:
  Creare una pagina PHP con un form che permetta di inviare due campi: un paragrafo ed una parola da censurare ad una seconda pagina php.
  Gestire il tutto con i due file diversi.
  Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
  Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
  - stampare a schermo il paragrafo e la sua lunghezza
  - stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->
  <form action="./censured.php" method="POST" class="d-flex justify-content-center align-items-center flex-column gap-1">
    <h1>PHP Badwords</h1>
    <textarea name="paragraphText" id="paragraphText" cols="30" rows="10" placeholder="Inserisci qui il testo del paragrafo"></textarea>
    <label for="wordToCensure">Inserisci la parola da censurare:</label>
    <input type="text" name="wordToCensure" id="wordToCensure">
    <input type="submit" value="Invia">
  </form>
</body>
</html>