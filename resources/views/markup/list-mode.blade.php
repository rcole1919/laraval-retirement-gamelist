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

                <div class="platform">
                    <div class="container">
                        <div class="tools">
                            <button type="button" class="tools__button" title="Режим списка по категориям">
                                <svg width="18" height="18">
                                    <use xlink:href="#icon-mode-rg"></use>
                                </svg>
                            </button>
                            <button type="button" class="tools__button" title="Режим сводной таблицы">
                                <svg width="18" height="18">
                                    <use xlink:href="#icon-mode-table"></use>
                                </svg>
                            </button>
                            <button type="button" class="tools__button" title="Настроить таблицы">
                                <svg width="18" height="18">
                                    <use xlink:href="#icon-settings"></use>
                                </svg>
                            </button>
                            <button type="button" class="tools__button" title="Добавить игру">
                                <svg width="18" height="18">
                                    <use xlink:href="#icon-add-game"></use>
                                </svg>
                            </button>
                        </div>
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
                                                        <use xlink:href="#icon-digital"></use>
                                                    </svg>
                                                    <span>34</span>
                                                </div>
                                                <div class="column__count">
                                                    <svg width="12" height="12">
                                                        <use xlink:href="#icon-physic"></use>
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
                                                                <use xlink:href="#icon-digital"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="16" height="13">
                                                            <use xlink:href="#icon-edit-game"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head game__head--open">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="12" height="12">
                                                                <use xlink:href="#icon-physic"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="#icon-edit-close"></use>
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
                                                                    <use xlink:href="#icon-dropdown-select"></use>
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
                                                        <div class="game-edit__sure">
                                                            <span class="game-edit__sure-text">Вы уверены?</span>
                                                            <button type="button" class="game-edit__sure-button">
                                                                <svg width="16" height="12">
                                                                    <use xlink:href="#icon-ok"></use>
                                                                </svg>
                                                            </button>
                                                            <button type="button" class="game-edit__sure-button">
                                                                <svg width="12" height="12">
                                                                    <use xlink:href="#icon-edit-close"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
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
                                                            <use xlink:href="#icon-digital"></use>
                                                        </svg>
                                                    </div>
                                                    <span>Metroid</span>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="#icon-edit-close"></use>
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
                                                                    <use xlink:href="#icon-dropdown-select"></use>
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
                                                    <use xlink:href="#icon-add-game"></use>
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
                                                        <use xlink:href="#icon-digital"></use>
                                                    </svg>
                                                    <span>34</span>
                                                </div>
                                                <div class="column__count">
                                                    <svg width="12" height="12">
                                                        <use xlink:href="#icon-physic"></use>
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
                                                                <use xlink:href="#icon-digital"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="16" height="13">
                                                            <use xlink:href="#icon-edit-game"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="12" height="12">
                                                                <use xlink:href="#icon-physic"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__exist-type">
                                                        <svg width="15" height="11">
                                                            <use xlink:href="#icon-digital"></use>
                                                        </svg>
                                                    </div>
                                                    <span>Metroid</span>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="button" class="column__add-game" title="Добавить игру">
                                                <svg width="15" height="15">
                                                    <use xlink:href="#icon-add-game"></use>
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
                                                        <use xlink:href="#icon-digital"></use>
                                                    </svg>
                                                    <span>34</span>
                                                </div>
                                                <div class="column__count">
                                                    <svg width="12" height="12">
                                                        <use xlink:href="#icon-physic"></use>
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
                                                                <use xlink:href="#icon-digital"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="16" height="13">
                                                            <use xlink:href="#icon-edit-game"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="12" height="12">
                                                                <use xlink:href="#icon-physic"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__exist-type">
                                                        <svg width="15" height="11">
                                                            <use xlink:href="#icon-digital"></use>
                                                        </svg>
                                                    </div>
                                                    <span>Metroid</span>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="button" class="column__add-game" title="Добавить игру">
                                                <svg width="15" height="15">
                                                    <use xlink:href="#icon-add-game"></use>
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
                                                        <use xlink:href="#icon-digital"></use>
                                                    </svg>
                                                    <span>34</span>
                                                </div>
                                                <div class="column__count">
                                                    <svg width="12" height="12">
                                                        <use xlink:href="#icon-physic"></use>
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
                                                                <use xlink:href="#icon-digital"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="16" height="13">
                                                            <use xlink:href="#icon-edit-game"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="12" height="12">
                                                                <use xlink:href="#icon-physic"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__exist-type">
                                                        <svg width="15" height="11">
                                                            <use xlink:href="#icon-digital"></use>
                                                        </svg>
                                                    </div>
                                                    <span>Metroid</span>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="button" class="column__add-game" title="Добавить игру">
                                                <svg width="15" height="15">
                                                    <use xlink:href="#icon-add-game"></use>
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
                                                        <use xlink:href="#icon-digital"></use>
                                                    </svg>
                                                    <span>34</span>
                                                </div>
                                                <div class="column__count">
                                                    <svg width="12" height="12">
                                                        <use xlink:href="#icon-physic"></use>
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
                                                                <use xlink:href="#icon-digital"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="16" height="13">
                                                            <use xlink:href="#icon-edit-game"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__title">
                                                        <div class="game__exist-type">
                                                            <svg width="12" height="12">
                                                                <use xlink:href="#icon-physic"></use>
                                                            </svg>
                                                        </div>
                                                        <span>Zelda</span>
                                                    </div>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="game">
                                                <div class="game__head">
                                                    <div class="game__exist-type">
                                                        <svg width="15" height="11">
                                                            <use xlink:href="#icon-digital"></use>
                                                        </svg>
                                                    </div>
                                                    <span>Metroid</span>
                                                    <button class="game__edit-btn" aria-label="Редактировать">
                                                        <svg width="12" height="12">
                                                            <use xlink:href="#icon-edit-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="button" class="column__add-game" title="Добавить игру">
                                                <svg width="15" height="15">
                                                    <use xlink:href="#icon-add-game"></use>
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
            <div class="modal">
                <div class="modal__container">
                    <div class="add-game">
                        <div class="add-game__title">
                            Добавить игру
                        </div>
                    </div>
                    <div class="rename">
                        <div class="rename__input-wrapper">
                            <input class="rename__input" type="text" id="rename-modal" placeholder="Введите название">
                        </div>
                    </div>
                    <div class="modal-radio">
                        <div class="modal-radio__title">
                            Выберите платформу:
                        </div>
                        <div class="modal-radio__list">
                            <label class="modal-radio__item">
                                <input type="radio" class="modal-radio__radio visually-hidden" name="select-platform" value="Nintendo Switch" checked>
                                <span class="modal-radio__text">
                                    Nintendo Switch
                                </span>
                            </label>
                            <label class="modal-radio__item">
                                <input type="radio" class="modal-radio__radio visually-hidden" name="select-platform" value="PS4">
                                <span class="modal-radio__text">
                                    PS4
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="modal-radio">
                        <div class="modal-radio__title">
                            Выберите статус:
                        </div>
                        <div class="modal-radio__list">
                            <label class="modal-radio__item">
                                <input type="radio" class="modal-radio__radio visually-hidden" name="select-status" value="Nintendo Switch" checked>
                                <span class="modal-radio__text">
                                    Done
                                </span>
                            </label>
                            <label class="modal-radio__item">
                                <input type="radio" class="modal-radio__radio visually-hidden" name="select-status" value="PS4">
                                <span class="modal-radio__text">
                                    Active
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="modal__confirm">
                        <button type="button" class="modal__btn gb-btn">
                            ОК
                        </button>
                        <button type="button" class="modal__btn gb-btn">
                            Отмена
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
