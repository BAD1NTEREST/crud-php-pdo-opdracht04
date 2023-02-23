<?php

try {
  $pdo = new PDO("mysql:host=localhost;dbname=Nailstudio","root","");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  exit;
}

$stmt = $pdo->prepare("INSERT INTO Afspraak (email, telefoonnummer, afspraakdatum, afspraaktijd, opmerkingen) VALUES (:email, :telefoonnummer, :afspraakdatum, :afspraaktijd, :opmerkingen)");

$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':telefoonnummer', $_POST['telefoonnummer']);
$stmt->bindParam(':afspraakdatum', $_POST['afspraakdatum']);
$stmt->bindParam(':afspraaktijd', $_POST['afspraaktijd']);
$stmt->bindParam(':opmerkingen', $_POST['opmerkingen']);

try {
  $stmt->execute(); 
  echo "Afspraak is toegevoegd!";
} catch(PDOException $e) {
  echo "Er is een fout opgetreden: " . $e->getMessage();
  exit;
}

try {
    $pdo = new PDO("mysql:host=localhost;dbname=Nailstudio","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
  }
  
  $stmt = $pdo->prepare("SELECT * FROM Afspraak ORDER BY afspraakdatum DESC, afspraaktijd DESC");
  
  try {
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($results as $result) {
      echo $result['email'] . " " . $result['afspraakdatum'] . "<br>";
    }
  } catch(PDOException $e) {
    echo "Er is een fout opgetreden: " . $e->getMessage();
    exit;
  }

?>