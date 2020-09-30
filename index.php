<?php
if ($_SERVER["SERVER_NAME"] === "localhost") {
  header('Location: ./view/pages/observation.php');
} else {
  header('Location: https://meteo.pierrenolot.ovh/view/pages/observation.php');
}
exit();
