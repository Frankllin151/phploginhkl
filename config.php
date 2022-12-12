<?php

$Ba_se = 'http://127.0.0.1/loginHKL';

$DBname =  'ploginfmw';

$DBhost =  '127.0.0.1';

$DBuser = 'root';

$DBpass = '';

$pdo = new PDO('mysql:dbname=' . $DBname . ';host' . $DBuser, $DBuser, $DBpass);
if (!$pdo) {
  echo 'Not connect';
} else {
  //echo 'sucess connect';
}
