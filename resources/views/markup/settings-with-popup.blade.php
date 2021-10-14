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
            <div class="modal">
                <div class="modal__container">
                    <div class="remove">
                        <div class="remove__title">
                            Если удалить консоль, то все игры на ней потеряются, но их можно перенести на другие консоли
                        </div>
                    </div>
                    <div class="modal-radio">
                        <div class="modal-radio__list">
                            <label class="modal-radio__item">
                                <input type="radio" class="modal-radio__radio visually-hidden" name="remove-radio" value="Nintendo Switch" checked>
                                <span class="modal-radio__text">
                                    Nintendo Switch
                                </span>
                            </label>
                            <label class="modal-radio__item">
                                <input type="radio" class="modal-radio__radio visually-hidden" name="remove-radio" value="PS4">
                                <span class="modal-radio__text">
                                    PS4
                                </span>
                            </label>
                            <label class="modal-radio__item">
                                <input type="radio" class="modal-radio__radio visually-hidden" name="remove-radio" value="delete">
                                <span class="modal-radio__text">
                                    Удалить вместе с играми
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="rename">
                        <div class="rename__title">
                            <label for="rename-modal">Переименовать:</label>
                        </div>
                        <div class="rename__input-wrapper">
                            <input class="rename__input" type="text" id="rename-modal" value="Done">
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
