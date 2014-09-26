<?php
echo 'hello'.'<br />';
echo 'tschüß';
php info();
session_start();
// Verwenden Sie bei PHP 4.0.6 oder niedriger $HTTP_SESSION_VARS
if (!isset($_SESSION['zaehler'])) {
  $_SESSION['zaehler'] = 0;
} else {
  $_SESSION['zaehler']++;
}
?>

<p>
Hallo Besucher, Sie haben diese Seite <?php echo $_SESSION['zaehler']; ?> mal
aufgerufen.
</p>
