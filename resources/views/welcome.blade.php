<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" media="screen" href="/css/normalize.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css" />

        <title>Список игр на пенсию</title>
    </head>
    <body class="index-body">
        <main class="main-index">
            <h1 class="visually-hidden">Список игр на пенсию</h1>
            <div class="castle">
                <div class="castle__logo">
                    <picture>
                        <source media="(max-width: 575px)" srcset="/images/logo-576.png">
                        <source media="(max-width: 767px)" srcset="/images/logo-768.png">
                        <source media="(max-width: 1279px)" srcset="/images/logo-1280.png">
                        <source media="(max-width: 1599px)" srcset="/images/logo-1600.png">
                        <img src="/images/logo.png" width="960" height="50" alt="Список игр на пенсию" class="castle__logo-img">
                    </picture>
                </div>

                <div class="castle__auth">
                    <form class="castle__form auth-form" action="/">
                    <div class="auth-form__item">
                        <label for="ligin">Логин или e-mail</label>
                        <input class="auth-form__input" type="text" id="login" name="login" placeholder="Логин или e-mail">
                    </div>
                    <div class="auth-form__item">
                        <label for="password">Пароль</label>
                        <input class="auth-form__input" type="password" id="password" name="password" placeholder="Пароль">
                    </div>
                    <div class="auth-form__buttons">
                        <button class="auth-form__sign-in" type="submit" formaction="/">
                        Войти
                        </button>
                        <button class="auth-form__reg" type="submit" formaction="/">
                        Зарегистрироваться
                        </button>
                    </div>
                    <div class="auth-form__guest auth-form__guest--forget">
                        <a class="auth-form__link" href="#">Я забыл пароль</a>
                    </div>
                    <div class="auth-form__guest">
                        <a class="auth-form__link" href="gamelist.html">Войти как гость</a>
                    </div>
                    </form>
                </div>

                <div class="bird bird-big bird-one bird-normal"></div>
                <div class="bird bird-big bird-one bird-up"></div>
                <div class="bird bird-big bird-two bird-up"></div>
                <div class="bird bird-big bird-two bird-normal"></div>
                <div class="bird bird-small bird-three bird-up"></div>
                <div class="bird bird-small bird-three bird-normal"></div>
                <div class="bird bird-small bird-four bird-normal"></div>
                <div class="bird bird-small bird-four bird-up"></div>
                <div class="bird bird-small bird-five bird-up"></div>
                <div class="bird bird-small bird-five bird-normal"></div>
                <div class="bird bird-small bird-six bird-normal"></div>
                <div class="bird bird-small bird-six bird-up"></div>

                <div class="flag flag-left flag-normal"></div>
                <div class="flag flag-left flag-up"></div>
                <div class="flag flag-right flag-normal"></div>
                <div class="flag flag-right flag-up"></div>

                <a href="/demo" class="gb-btn castle__button" type="button">
                    <span>press start</span>
                </a>

                <div class="sumo sumo-stand"></div>
                <div class="sumo sumo-walk-1"></div>
                <div class="sumo sumo-walk-2"></div>

                <div class="link"></div>

                <div class="castle__copyright">
                    © 2021 rgamelist.rg - Уютный проект, который поможет вести учет Ваших игр
                </div>
            </div>


        </main>
        {{-- <script src="/bundle.js"></script> --}}
    </body>
</html>
