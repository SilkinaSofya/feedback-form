
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback form — МосПолитех</title>
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

        <h1>Форма обратной связи</h1>
        <p class="intro">Заполните форму для отправки обращения.</p>

        <form action="https://httpbin.org/post" method="POST">

            <label for="username">Имя пользователя</label>
            <input type="text" id="username" name="username"
                   placeholder="Введите имя" required>

            <label for="email">E-mail пользователя</label>
            <input type="email" id="email" name="email"
                   placeholder="Введите e-mail" required>

            <label for="type">Тип обращения</label>
            <select id="type" name="type" required>
                <option value="">Выберите тип обращения</option>
                <option value="Жалоба">Жалоба</option>
                <option value="Предложение">Предложение</option>
                <option value="Благодарность">Благодарность</option>
            </select>

            <label for="message">Текст обращения</label>
            <textarea id="message" name="message"
                      rows="5" placeholder="Ваше обращение..."
                      required></textarea>

            <fieldset>
                <legend>Вариант ответа</legend>

                <label>
                    <input type="checkbox" name="reply[]" value="SMS">
                    СМС
                </label>

                <label>
                    <input type="checkbox" name="reply[]" value="E-mail">
                    E-mail
                </label>
            </fieldset>

            <button type="submit" class="button">
                Отправить
            </button>

        </form>

        <a href="headers.php" class="second-link">
            Перейти на вторую страницу →
        </a>

    </section>
</main>

<footer class="site-footer">
    Задание для самостоятельной работы
</footer>

</body>
</html>
