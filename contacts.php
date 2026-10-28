<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Тук може да добавите mail() функция за изпращане
    echo "<p style='color:green;'>Благодарим ви, $name! Съобщението е изпратено.</p>";
}
?>

<form method="POST">
    <h3>Контакти</h3>
    <p><input type="text" name="name" placeholder="Име" required></p>
    <p><input type="email" name="email" placeholder="Имейл" required></p>
    <p><textarea name="message" placeholder="Съобщение" required></textarea></p>
    <p><button type="submit">Изпрати</button></p>
</form>