
<?php
$url = "https://httpbin.org/get";

$headers = get_headers($url);

if ($headers === false) {
    $result = "Не удалось получить заголовки сайта.";
} else {
    $result = implode("\n", $headers);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get headers — МосПолитех</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="site-header">
    <div class="logo">
        <span class="logo-mark">МП</span>
        <span>МОСКОВСКИЙ<br>ПОЛИТЕХ</span>
    </div>

    <div class="header-title">
        Самостоятельная работа<br>
        <strong>Feedback form</strong>
    </div>
</header>

<main class="container">
    <section class="form-card">

        <h1>Результат get_headers()</h1>

        <p class="intro">
            HTTP-заголовки сайта https://httpbin.org/get
        </p>

        <label for="headers-result">Результат работы функции:</label>

        <textarea
            id="headers-result"
            rows="14"
            readonly
        ><?= htmlspecialchars($result, ENT_QUOTES, 'UTF-8') ?></textarea>

        <a href="index.php" class="button second-button">
            ← Вернуться к форме
        </a>

    </section>
</main>

<footer class="site-footer">
    Задание для самостоятельной работы
</footer>

</body>
</html>
