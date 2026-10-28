<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Портал заявок - Мой Не Сам</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="hero">
    <h1>Портал «<?= 'Мой Не Сам' ?>».</h1>
    <p class="slogan">Бытовые услуги - быстро, честно, по заявке.</p>
    <p class="date">Сегодня <?= date('d.m.Y') ?>, сервер работает на PHP <?= PHP_VERSION ?>.</p>
    <nav class="actions">
      <a class="btn btn-primary" href="login.php">Войти</a>
      <a class="btn btn-secondary" href="register.php">Регистрация</a>
    </nav>

    <section class="services">
      <h2>Наши услуги</h2>
      <ul class="services-list">
        <li>Уборка квартир и офисов</li>
        <li>Мелкий бытовой ремонт</li>
        <li>Сборка и разборка мебели</li>
        <li>Помощь при переезде</li>
      </ul>
    </section>
  </header>

  <script src="js/main.js"></script>
</body>
</html>