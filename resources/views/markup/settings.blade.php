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
      <div class="add">
        <div class="container">
          <div class="add__form">
            <div class="add__item">
              <div class="add__field-wrapper">
                <label for="add-console" class="add__label">Добавить консоль</label>
                <div class="add__input-wrapper">
                  <input type="text" id="add-console" class="add__input">
                </div>
                <button type="button" class="add__button"></button>
              </div>
              <div class="add__added-wrapper">
                <span class="add__added-title">
                  <span title="Переименовать" tabindex="0" class="add__added-text">Not begin</span>
                  <button title="Удалить" class="add__added-delete" type="button">
                    <svg width="10" height="10">
                      <use xlink:href="#icon-edit-close"></use>
                    </svg>
                  </button>
                </span>
                <span class="add__added-title">
                  <span title="Переименовать" tabindex="0" class="add__added-text">Not begin</span>
                  <button title="Удалить" class="add__added-delete" type="button">
                    <svg width="10" height="10">
                      <use xlink:href="#icon-edit-close"></use>
                    </svg>
                  </button>
                </span>
                <span class="add__added-title">
                  <span title="Переименовать" tabindex="0" class="add__added-text">Not begin</span>
                  <button title="Удалить" class="add__added-delete" type="button">
                    <svg width="10" height="10">
                      <use xlink:href="#icon-edit-close"></use>
                    </svg>
                  </button>
                </span>
              </div>
            </div>
            <div class="add__item">
              <div class="add__field-wrapper">
                <label for="add-column" class="add__label">Добавить колонку</label>
                <div class="add__input-wrapper">
                  <input type="text" id="add-column" class="add__input">
                </div>
                <button type="button" class="add__button"></button>
              </div>
              <div class="add__added-wrapper">
                <span class="add__added-title">
                  <span title="Переименовать" tabindex="0" class="add__added-text">Not begin</span>
                  <button title="Удалить" class="add__added-delete" type="button">
                    <svg width="10" height="10">
                      <use xlink:href="#icon-edit-close"></use>
                    </svg>
                  </button>
                </span>
                <span class="add__added-title">
                  <span title="Переименовать" tabindex="0" class="add__added-text">Not begin</span>
                  <button title="Удалить" class="add__added-delete" type="button">
                    <svg width="10" height="10">
                      <use xlink:href="#icon-edit-close"></use>
                    </svg>
                  </button>
                </span>
                <span class="add__added-title">
                  <span title="Переименовать" tabindex="0" class="add__added-text">Not begin</span>
                  <button title="Удалить" class="add__added-delete" type="button">
                    <svg width="10" height="10">
                      <use xlink:href="#icon-edit-close"></use>
                    </svg>
                  </button>
                </span>
              </div>
            </div>
            <button class="add__submit" type="button">Сформировать таблицы</button>
          </div>
        </div>
      </div>

    </main>
    <footer class="footer-rgl"></footer>
  </div>
</body>

</html>
