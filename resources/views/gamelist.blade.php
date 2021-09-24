<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="/css/normalize.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css" />

        <title>Список игр на пенсию</title>
    </head>
    <body>
        <div id="app">
            <header class="header-rgl"></header>
            <main class="main-rgl">
                <h1 class="visually-hidden">Список игр</h1>
                <div class="demo">
                    <p class="demo__text">
                        Это демонстрационная версия. После перезагрузки страницы все созданные данные не сохранятся
                    </p>
                    <p class="demo__text">
                        Здесь можно добавлять платформы, колонки учета и тип носителя игры: цифровая или физическая копия. В будущем планируется добавить больше фич
                    </p>

                    <div class="demo__start-wrapper">
                        <button class="demo__start" type="button">
                            Итак, вы купили свою первую игру на новой консоли. Начнём учитывать! Через год Вы уже будете мечтать о том, что на пенсии уж точно все 100500 игр в списке будут пройдены
                        </button>
                        <button class="demo__start" type="button">
                            Просто покажите уже этот ваш список игр!
                        </button>
                    </div>

                    <div class="add">
                        <form class="add__form">
                            <label for="add-input" class="add__label">Добавить консоль</label>
                            <input type="text" id="add-input" class="add__input">
                            <button type="button" class="add__button"></button>
                        </form>
                    </div>
                </div>

                <article class="platform">
                    <div class="platform__head platform__head--open" tabindex="0">
                        <h2 class="platform__title">
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
                                    <div class="column__count-digital">
                                        34
                                    </div>
                                    <div class="column__count-physic">
                                        45
                                    </div>
                                </div>
                            </div>
                            <div class="column__body">
                                <div class="game">
                                    <div class="game__head game__head--digital">
                                        <div class="game__title">
                                            Zelda
                                        </div>
                                        <button class="game__edit-btn" aria-label="Редактировать"></button>
                                    </div>
                                    <div class="game__edit-popup game-edit">
                                        <div class="game-edit__item game-edit__select game-edit__select--open">
                                            <button class="game-edit__title-wrapper" type="button">
                                                <span class="game-edit__title">
                                                    Change column
                                                </span>
                                                {{-- <svg></svg> --}}
                                            </button>
                                            <div class="game-edit__dropdown-list">
                                                <button clas="game-edit__dropdown-item" type="button">Active</button>
                                                <button clas="game-edit__dropdown-item" type="button">Not begin</button>
                                            </div>
                                        </div>
                                        <div class="game-edit__item">
                                            <button type="button" class="game-edit__title">
                                                Delete
                                            </button>
                                        </div>
                                        <div class="game-edit__item">
                                            <button type="button" class="game-edit__title">
                                                Edit
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="game">
                                    <div class="game__head game__head--physic game__head--open">
                                        <div class="game__title">
                                            Metroid
                                        </div>
                                        <button class="game__edit-btn" aria-label="Редактировать"></button>
                                    </div>
                                    <div class="game__edit-popup game-edit">
                                        <div class="game-edit__item game-edit__input">
                                            <label for="title">Title:</label>
                                            <input type="text" id="title">
                                        </div>
                                        <div class="game-edit__item game-edit__select game-edit__select--open">
                                            <button class="game-edit__title-wrapper" type="button">
                                                <span class="game-edit__title">
                                                    Platform
                                                </span>
                                                {{-- <svg></svg> --}}
                                            </button>
                                            <div class="game-edit__dropdown-list">
                                                <button clas="game-edit__dropdown-item" type="button">Nintendo Switch</button>
                                                <button clas="game-edit__dropdown-item" type="button">PS4</button>
                                            </div>
                                        </div>
                                        <div class="game-edit__item game-edit__radio-wrapper">
                                            <div class="game-edit__radio-item">
                                                <input type="radio" id="digital-type" name="exist-type" value="digital">
                                                <label for="digital-type">Digital</label>
                                            </div>
                                            <div class="game-edit__radio-item">
                                                <input type="radio" id="physic-type" name="exist-type" value="physic">
                                                <label for="physic-type">Physic</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="game">
                                    <div class="game__head game__head--physic">
                                        <div class="game__title">
                                            Doom
                                        </div>
                                        <button class="game__edit-btn" aria-label="Редактировать"></button>
                                    </div>
                                </div>
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

            </main>
            <footer class="footer-rgl"></footer>
        </div>
    </body>
</html>
