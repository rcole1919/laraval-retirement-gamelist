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
                        <div class="table">
                            <div class="table__wrapper">
                                <table class="table__content">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="table__th">
                                                    Название
                                                </div>
                                            </th>
                                            <th>
                                                <div tabindex="0" class="table__th table__th--sortable">
                                                    Тип
                                                </div>
                                            </th>
                                            <th>
                                                <div tabindex="0" data-sort="asc" class="table__th table__th--sortable">
                                                    Платформа
                                                </div>
                                            </th>
                                            <th>
                                                <div tabindex="0" data-sort="desc" class="table__th table__th--sortable">
                                                    Статус
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Zelda
                                            </td>
                                            <td class="table__exist-type">
                                                <svg width="14" height="14">
                                                    <use xlink:href="#icon-physic"></use>
                                                </svg>
                                            </td>
                                            <td>
                                                Nintendo Switch
                                            </td>
                                            <td>
                                                Done
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Metroid
                                            </td>
                                            <td class="table__exist-type">
                                                <svg width="14" height="14">
                                                    <use xlink:href="#icon-digital"></use>
                                                </svg>
                                            </td>
                                            <td>
                                                Nintendo Switch
                                            </td>
                                            <td>
                                                Not Begin
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            <footer class="footer-rgl"></footer>
        </div>
    </body>
</html>
