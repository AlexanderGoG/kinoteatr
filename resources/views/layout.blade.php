<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="sticky-footer-navbar.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>

<body>

<div class=" d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom bg-dark">
    <div class="container d-flex flex-row  ">
        <a href="/" class="d-flex align-items-center text-white text-decoration-none mt-md-2 ml-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-building "
                 viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                <path
                    d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
            </svg>
            <span class="fs-4">BerFilms</span>
        </a>

        <nav class="d-inline-flex mt-2 ms-md-auto">
            <a class="me-3 py-2 text-white text-decoration-none" href="/about">О нас</a>
            <a class="me-3 py-2 text-white text-decoration-none" href="/rules">Правила</a>
            <a class="btn btn-warning" href="/reviews">Отзывы</a>

        </nav>
    </div>
</div>


<div class="container py-3">
    @yield('main_content')
</div>


<footer class=" card-footer bg-dark pt-4 border-top ">
    <div class="container justify-content-between d-flex  flex-row  text-white    ">
        <div>
            <span>© 2022. Все права защищены</span>
            <br>
        </div>
        <div></div>
        <div></div>
        <div></div>
        <div>
            <h5>Чита</h5>
            <p>ул. Ленина, 79</p>
            <h5>Контакты</h5>
            <span>Единый телефон </span><a href="tel:+73022217737">+7 (3022) 22-22-33</a>
            <p>Директор <a href="tel:73022217515">+ 7 (3022) 333-222</a></p>
        </div>
        <div>
            <h5>Время работы</h5>
            <span>Ежедневно
            <br>с 09:00 до 23:00</span>
        </div>
    </div>
</footer>
</body>

</html>
