<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="/css/normalize.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{ mix('/css/style.css') }}" />

  <title>Список игр на пенсию</title>
</head>

<body>
  <div style="display: none;">
    @include('icons')
  </div>
  <div id="app">
    <header class="header-rgl">
      <div class="container">
        <div class="header-rgl__wrapper">
          @include('markup._nav')
          <div class="header-rgl__avatar">
            <img src="/images/link-1.svg" alt="username" width="36" height="36">
          </div>
        </div>
      </div>
    </header>
    <main class="main-rgl">
      <h1 class="visually-hidden">Список игр</h1>
      <div class="demo">
        <div class="container">
          <div class="demo__text-wrapper">
            <p class="demo__text">
              Это демонстрационная версия. После перезагрузки страницы все созданные данные не сохранятся.
            </p>
            <p class="demo__text">
              Здесь можно добавлять платформы, колонки учета и тип носителя игры: цифровая или физическая копия. В
              будущем планируется добавить больше фич.
            </p>
            <p class="demo__text">
              Итак, вы купили свою первую игру на новой консоли. Через год Вы уже будете мечтать о том, что на пенсии уж
              точно все 100500 игр в списке будут пройдены.
            </p>
          </div>

          <div class="demo__start-wrapper">
            <a class="gb-btn demo__start" type="button">
              <span>Начать учитывать</span>
            </a>
            <a class="gb-btn demo__start" type="button">
              <span>Просто покажите уже этот ваш список игр!</span>
            </a>
          </div>
        </div>
      </div>
    </main>
    <footer class="footer-rgl"></footer>
  </div>
</body>

</html>
