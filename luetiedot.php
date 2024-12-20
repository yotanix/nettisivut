<?php
try {
   
    $pdo = new PDO('mysql:host=localhost;dbname=tieto', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // kaikki viestit
    $stmt = $pdo->query("SELECT nimi, email, viesti, palaute FROM tietokanta ORDER BY palaute DESC");
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
} catch (PDOException $e) {
    echo "<p>Error: " . $e->getMessage() . "</p>";
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viestit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Viestit</h1>
 
    <?php if (empty($messages)): ?>
        <p>Ei viestejä.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Nimi</th>
                    <th>Sähköposti</th>
                    <th>Viesti</th>
                    <th>Palaute</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $message): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($message['nimi']); ?></td>
                        <td><?php echo htmlspecialchars($message['email']); ?></td>
                        <td><?php echo htmlspecialchars($message['viesti']); ?></td>
                        <td><?php echo htmlspecialchars($message['palaute']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
 
</body>
</html>
 