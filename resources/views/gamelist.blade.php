<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="/css/normalize.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{mix('/css/style.css')}}" />

        <title>Список игр на пенсию</title>
    </head>
    <body>
        <div id="app">
            <header class="header-rgl">
                <div class="container">
                    <div class="header-rgl__wrapper">
                        <div class="header-rgl__avatar">
                            <img src="/images/link-1.svg" alt="username" width="36" height="36">
                        </div>
                    </div>
                </div>
            </header>
            <main class="main-rgl">
                <h1 class="visually-hidden">Список игр</h1>
                {{-- <div class="demo">
                    <div class="container">
                        <div class="demo__text-wrapper">
                            <p class="demo__text">
                                Это демонстрационная версия. После перезагрузки страницы все созданные данные не сохранятся.
                            </p>
                            <p class="demo__text">
                                Здесь можно добавлять платформы, колонки учета и тип носителя игры: цифровая или физическая копия. В будущем планируется добавить больше фич.
                            </p>
                            <p class="demo__text">
                                Итак, вы купили свою первую игру на новой консоли. Через год Вы уже будете мечтать о том, что на пенсии уж точно все 100500 игр в списке будут пройдены.
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
                </div> --}}

                {{-- <div class="add">
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
                                    <span class="add__added-title"><span>PS3</span> <button class="add__added-delete" type="button"></button></span>
                                    <span class="add__added-title"><span>Nintendo Switch</span> <button class="add__added-delete" type="button"></button></span>
                                    <span class="add__added-title"><span>Mega Drive</span> <button class="add__added-delete" type="button"></button></span>
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
                                    <span class="add__added-title"><span>Done</span> <button class="add__added-delete" type="button"></button></span>
                                    <span class="add__added-title"><span>Active</span> <button class="add__added-delete" type="button"></button></span>
                                    <span class="add__added-title"><span>Not begin</span> <button class="add__added-delete" type="button"></button></span>
                                </div>
                            </div>
                            <button class="add__submit" type="button">Сформировать таблицы</button>
                        </div>
                    </div>
                </div> --}}

                <div class="platform">
                    <div class="container">
                        <div class="platform__list">
                            <article class="platform__item">
                                <div class="platform__head" tabindex="0">
                                    <h2 class="platform__title platform__title--open">
                                        Nintendo Switch
                                    </h2>
                                </div>
                                <div class="column">
                                    <div class="column__item">
                                        <div class="column__head">
                                            <div class="column__title">
                                                Done
                                            </div>
                                            <div class="column__count-wrapper">
                                                <div class="column__count">
                                                    <svg width="15" height="11">
                                                        <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                    </svg>
                                                    <span>34</span>
                                                </div>
                                                <div class="column__count">
                                                    <svg width="12" height="12">
                                                        <use xlink:href="/sprite/icons.svg#icon-physic"></use>
                                                    </svg>
                                                    <span>45</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column__body">
                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="15" height="11">
                                                                <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="16" height="13">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-game"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head game__head--open">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="12" height="12">
                                                                <use xlink:href="/sprite/icons.svg#icon-physic"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="game__edit-popup game-edit">
                                                    <div class="game-edit__item game-edit__item--open">
                                                        <button class="game-edit__title" type="button">
                                                            <span>
                                                                Change column
                                                            </span>
                                                            <div class="game-edit__dropdown-icon">
                                                                <svg width="8" height="5">
                                                                    <use xlink:href="/sprite/icons.svg#icon-dropdown-select"></use>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <div class="game-edit__dropdown-list">
                                                            <button class="game-edit__dropdown-item" type="button">Active</button>
                                                            <button class="game-edit__dropdown-item" type="button">Not begin</button>
                                                        </div>
                                                    </div>
                                                    <div class="game-edit__item">
                                                        <button type="button" class="game-edit__title">
                                                            <span>
                                                                Delete
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <div class="game-edit__item">
                                                        <button type="button" class="game-edit__title">
                                                            <span>
                                                                Edit
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head game__head--physic game__head--open">
                                                    <div class="game__exist-type">
                                                        <svg width="15" height="11">
                                                            <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                        </svg>
                                                    </div>
                                                    <span>Metroid</span>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="game__edit-popup game-edit">
                                                    <div class="game-edit__item game-edit__input">
                                                        <label class="game-edit__input-label" for="title">Title:</label>
                                                        <div class="game-edit__input-wrapper">
                                                            <input class="game-edit__input-enter" type="text" value="Metroid" id="title">
                                                        </div>
                                                    </div>
                                                    <div class="game-edit__item">
                                                        <button class="game-edit__title" type="button">
                                                            <span>
                                                                Platform
                                                            </span>
                                                            <div class="game-edit__dropdown-icon">
                                                                <svg width="8" height="5">
                                                                    <use xlink:href="/sprite/icons.svg#icon-dropdown-select"></use>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <div class="game-edit__dropdown-list">
                                                            <button class="game-edit__dropdown-item" type="button">Nintendo Switch</button>
                                                            <button class="game-edit__dropdown-item" type="button">PS4</button>
                                                        </div>
                                                    </div>
                                                    <div class="game-edit__item game-edit__radio">
                                                        <div class="game-edit__radio-item">
                                                            <input class="game-edit__radio-input visually-hidden" type="radio" id="digital-type" name="exist-type" value="digital" checked>
                                                            <label class="game-edit__radio-label" for="digital-type">Digital</label>
                                                        </div>
                                                        <div class="game-edit__radio-item">
                                                            <input class="game-edit__radio-input visually-hidden" type="radio" id="physic-type" name="exist-type" value="physic">
                                                            <label class="game-edit__radio-label" for="physic-type">Physic</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="column__add-game" title="Добавить игру">
                                                <svg width="15" height="15">
                                                    <use xlink:href="/sprite/icons.svg#icon-add-game"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="column__item">
                                        <div class="column__head">
                                            <div class="column__title">
                                                Active
                                            </div>
                                            <div class="column__count-wrapper">
                                                <div class="column__count">
                                                    <svg width="15" height="11">
                                                        <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                    </svg>
                                                    <span>34</span>
                                                </div>
                                                <div class="column__count">
                                                    <svg width="12" height="12">
                                                        <use xlink:href="/sprite/icons.svg#icon-physic"></use>
                                                    </svg>
                                                    <span>45</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column__body">
                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="15" height="11">
                                                                <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="16" height="13">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-game"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="12" height="12">
                                                                <use xlink:href="/sprite/icons.svg#icon-physic"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__exist-type">
                                                        <svg width="15" height="11">
                                                            <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                        </svg>
                                                    </div>
                                                    <span>Metroid</span>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="button" class="column__add-game" title="Добавить игру">
                                                <svg width="15" height="15">
                                                    <use xlink:href="/sprite/icons.svg#icon-add-game"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="column__item">
                                        <div class="column__head">
                                            <div class="column__title">
                                                Active
                                            </div>
                                            <div class="column__count-wrapper">
                                                <div class="column__count">
                                                    <svg width="15" height="11">
                                                        <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                    </svg>
                                                    <span>34</span>
                                                </div>
                                                <div class="column__count">
                                                    <svg width="12" height="12">
                                                        <use xlink:href="/sprite/icons.svg#icon-physic"></use>
                                                    </svg>
                                                    <span>45</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column__body">
                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="15" height="11">
                                                                <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="16" height="13">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-game"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="12" height="12">
                                                                <use xlink:href="/sprite/icons.svg#icon-physic"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__exist-type">
                                                        <svg width="15" height="11">
                                                            <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                        </svg>
                                                    </div>
                                                    <span>Metroid</span>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="button" class="column__add-game" title="Добавить игру">
                                                <svg width="15" height="15">
                                                    <use xlink:href="/sprite/icons.svg#icon-add-game"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="column__item">
                                        <div class="column__head">
                                            <div class="column__title">
                                                Active
                                            </div>
                                            <div class="column__count-wrapper">
                                                <div class="column__count">
                                                    <svg width="15" height="11">
                                                        <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                    </svg>
                                                    <span>34</span>
                                                </div>
                                                <div class="column__count">
                                                    <svg width="12" height="12">
                                                        <use xlink:href="/sprite/icons.svg#icon-physic"></use>
                                                    </svg>
                                                    <span>45</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column__body">
                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="15" height="11">
                                                                <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="16" height="13">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-game"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="12" height="12">
                                                                <use xlink:href="/sprite/icons.svg#icon-physic"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__exist-type">
                                                        <svg width="15" height="11">
                                                            <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                        </svg>
                                                    </div>
                                                    <span>Metroid</span>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="button" class="column__add-game" title="Добавить игру">
                                                <svg width="15" height="15">
                                                    <use xlink:href="/sprite/icons.svg#icon-add-game"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="column__item">
                                        <div class="column__head">
                                            <div class="column__title">
                                                Active
                                            </div>
                                            <div class="column__count-wrapper">
                                                <div class="column__count">
                                                    <svg width="15" height="11">
                                                        <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                    </svg>
                                                    <span>34</span>
                                                </div>
                                                <div class="column__count">
                                                    <svg width="12" height="12">
                                                        <use xlink:href="/sprite/icons.svg#icon-physic"></use>
                                                    </svg>
                                                    <span>45</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column__body">
                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="15" height="11">
                                                                <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="16" height="13">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-game"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="12" height="12">
                                                                <use xlink:href="/sprite/icons.svg#icon-physic"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__exist-type">
                                                        <svg width="15" height="11">
                                                            <use xlink:href="/sprite/icons.svg#icon-digital"></use>
                                                        </svg>
                                                    </div>
                                                    <span>Metroid</span>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="/sprite/icons.svg#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="button" class="column__add-game" title="Добавить игру">
                                                <svg width="15" height="15">
                                                    <use xlink:href="/sprite/icons.svg#icon-add-game"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="platform">
                                <div class="platform__head platform__head--open" tabindex="0">
                                    <h2 class="platform__title">
                                        Nintendo Switch
                                    </h2>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

            </main>
            <footer class="footer-rgl"></footer>
        </div>
        <script src="{{mix('/js/demo.js')}}"></script>
    </body>
</html>
