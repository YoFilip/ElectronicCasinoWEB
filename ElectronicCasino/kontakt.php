<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Electronic Casino</title>
</head>

<body class="kontaktzdjencie">

    <div class="contact-section">

        <h1>Skontaktuj się z nami</h1>
        <div class="border"></div>
        <form class="contact-form" method="post"><br><br><br>


            <input type="text" name="email" id="email" class=" contact-form-text" placeholder="Twój email">


            <textarea name="mess" id="mess" class=" contact-form-text" placeholder="Wiadomość"></textarea>


            <input class="contact-form-button" type="submit" name="submit" value=" Wyślij">
        </form>
    </div>

    <!--PHP-->
    <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

          if(isset($_POST['submit']))
      {
          require_once('class.phpmailer.php');    //dodanie klasy phpmailer
      require_once('class.smtp.php');    //dodanie klasy smtp
   $mail = new PHPMailer();    //utworzenie nowej klasy phpmailer
  $mail->From = "SMTP@electroniccasino.projectsclassf.pl";    //adres e-mail użyty do wysyłania wiadomości
  $mail->FromName = "Casino";    //imię i nazwisko lub nazwa użyta do wysyłania wiadomości
  $mail->AddReplyTo($_POST['email'], "Casino"); //adres e-mail nadawcy oraz jego nazwa
                                               //w polu "Odpowiedz do"
  $mail->Host = "smtp.webio.pl";    //adres serwera SMTP wysyłającego e-mail
  $mail->Mailer = "smtp";    //do wysłania zostanie użyty serwer SMTP
  $mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
  $mail->Username = "SMTP@electroniccasino.projectsclassf.pl";    //nazwa użytkownika do skrzynki e-mail
  $mail->Password = "ELECTRIONICCASINO!1";    //hasło użytkownika do skrzynki e-mail
  $mail->Port = 587; //port serwera SMTP zależny od konfiguracji dostawcy usługi poczty
  $mail->Subject = "Electronic Casiono";    //Temat wiadomości, można stosować zmienne i znaczniki HTML
  $mail->Body = $_POST['mess'];    //Treść wiadomości, można stosować zmienne i znaczniki HTML
  $mail->AddAddress ("filipxpp@wp.pl","Yo Filip");    //adres skrzynki e-mail oraz nazwa
                                                  //adresata, do którego trafi wiadomość
   if($mail->Send())    //sprawdzenie wysłania, jeśli wiadomość została pomyślnie wysłana
      {
      echo ''; //wyświetl ten komunikat
      }
  else    //w przeciwnym wypadku
      {
      echo '';    //wyświetl następujący
      }
      } 
?>
</body>

</html>