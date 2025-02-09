<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>世界時計</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a href="/php02/index.php" class="header__logo">
                World Clock
            </a>
        </div>
    </header>

    <main>
        <div class="result__content">
            <div class="result-cards">
                <div class="result-cards__img-wrapper">
                    <img src="img/" alt="国旗" class="result-card__img">
                </div>
                <div class="result-card__body">
                    <p class="result-card__city"></p>
                    <p class="result-card__time"></p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>