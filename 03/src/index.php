<?php
require __DIR__ . '/app/bootstrap.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Region Phone</title>
</head>
<body>

<header>
    <div class="wrapper-fluid">
        <div class="wrapper">
            <div class="header-inner">
                <div class="header-col logo-col">
                    <a href="?">Some Logo</a>
                </div>
                <div class="header-col phone-col">
                    <a href="tel:<?= htmlspecialchars($phone) ?>" class="phone-link">
                        <?= htmlspecialchars($phone) ?>
                    </a>
                    <div class="phone-city">
                        <?= $city ? "Ваш город: " . htmlspecialchars($city)
                            : "Город не определён, показываем общий номер." ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="page-content">
    <div class="wrapper-fluid">
        <div class="wrapper">
            <h1>Контакты</h1>
            <p>Ваш IP: <?= htmlspecialchars($ip) ?></p>
            <p>Телефон подбирается в зависимости от определённого города по IP.</p>

            <h2>Debug</h2>
            <pre><?php print_r($result); ?></pre>
        </div>
    </div>
</main>

<footer>
    <div class="wrapper-fluid">
        <div class="wrapper">
            <div class="footer-inner">
                <div class="footer-col logo-col">
                    <a href="?">Some Logo</a>
                </div>
                <div class="footer-col phone-col">
                    <a href="tel:<?= htmlspecialchars($phone) ?>" class="phone-link">
                        <?= htmlspecialchars($phone) ?>
                    </a>
                    <div class="phone-city">
                        <?= $city ? "Ваш город: " . htmlspecialchars($city)
                            : "Город не определён, показываем общий номер." ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
