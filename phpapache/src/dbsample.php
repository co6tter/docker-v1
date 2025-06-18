<?php
try {
  $dsn = 'mysql:dbname=testdb;host=db';
  $db = new PDO($dsn, 'testuser', 'testpass');
  echo "success\n";
} catch (PDOException $e) {
  echo "failed\n";
  echo $e->getMessage();
  exit;
}
