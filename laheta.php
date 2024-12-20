<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nimi = $_POST['nimi'];
    $email = $_POST['email'];
    $viesti = $_POST['viesti'];
    $palaute = $_POST['palaute'];
   
//tietokanta tiedot
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tieto";
   
    // Luo yhteys
    $conn = new mysqli($servername, $username, $password, $dbname);
   
    // Tarkista yhteys
    if ($conn->connect_error) {
        die("Yhteys epäonnistui: " . $conn->connect_error);
    }
   
   
    $stmt = $conn->prepare("INSERT INTO tietokanta (nimi, email, viesti, palaute) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $nimi, $email, $viesti, $palaute);
   
   
    if ($stmt->execute()) {
       
        header("Location: sivu.php?viesti=Kiitos palautteestasi!");
        exit();
    } else {
        echo "Virhe: " . $stmt->error;
    }
   
    // Sulje tietokantayhteys
    $stmt->close();
    $conn->close();
}


?>
<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">  
</head>
<body>
 
<p><a href="lorem_ipsum.php">Back to the main page</a></p>
 
 
</body>
</html>

