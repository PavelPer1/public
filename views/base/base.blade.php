<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шоу-Мюзикл | Свидание вслепую</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="front/css/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="{{ UrlProcessor::makeUrl(1) }}"> 
            <div class="logo-section">
                <img src="front/images/logo.png" alt="Лаборатория вокала" class="lab-logo-image-1">
            </div>
            </a>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
            <nav>
                @php
                    // Проверяем, что $documentObject существует и имеет ключ 'id'
                    $currentPageId = isset($documentObject) && isset($documentObject['id']) ? $documentObject['id'] : null;
                    $isActorOrTeamPage = $currentPageId == 2 || $currentPageId == 3;
                @endphp
                <ul id="mainMenu">
                    <li>
                        <a href="{{ UrlProcessor::makeUrl(1) }}">О шоу</a>
                    </li>
                    <li><a href="{{ UrlProcessor::makeUrl(2) }}">Актеры</a></li>
                    <li><a href="{{ UrlProcessor::makeUrl(3) }}">Команда</a></li>
                    <li>
                        @if($isActorOrTeamPage)
                            <a href="{{ UrlProcessor::makeUrl(1) }}#media">Медиа</a>
                        @else
                            <a href="#media">Медиа</a>
                        @endif
                    </li>
                    <li>
                        @if($isActorOrTeamPage)
                            <a href="{{ UrlProcessor::makeUrl(1) }}#artist">Стать Артистом</a>
                        @else
                            <a href="#artist-preview">Стать Артистом</a>
                        @endif
                    </li>
                    <li>
                        @if($isActorOrTeamPage)
                            <a href="{{ UrlProcessor::makeUrl(1) }}#raffle">Розыгрыш</a>
                        @else
                            <a href="#raffle">Розыгрыш</a>
                        @endif
                    </li>
                    <li>
                        @if($isActorOrTeamPage)
                            <a href="{{ UrlProcessor::makeUrl(1) }}#partners">Партнёры</a>
                        @else
                            <a href="#partners">Партнёры</a>
                        @endif
                    </li>
                    <li>
                        @if($isActorOrTeamPage)
                            <a href="{{ UrlProcessor::makeUrl(1) }}#pricing">Стоимость</a>
                        @else
                            <a href="#pricing">Стоимость</a>
                        @endif
                    </li>
                    <li>
                        @if($isActorOrTeamPage)
                            <a href="{{ UrlProcessor::makeUrl(1) }}#contact">Контакты</a>
                        @else
                            <a href="#contact">Контакты</a>
                        @endif
                    </li>
                </ul>
            </nav>
        </div>
    </header>

      <!-- Основное содержимое -->
    <main>
        @yield('content')
    </main>

   <footer>
        <div class="container">
            <div class="footer-logo-section">
                <div class="footer-logo">Свидание<span>вслепую</span></div>
                <img src="front/images/logo.png" alt="Лаборатория вокала" class="lab-logo-image">
            </div>
            <p>Эротический шоу-мюзикл, который вы никогда не забудете</p>
            <div class="social-links">
                <a href="https://t.me/blinddatemusical" class="social-link" target="_blank"><i class="fab fa-telegram"></i></a>
                <a href="https://vk.com/blinddatemusical" class="social-link" target="_blank"><i class="fab fa-vk"></i></a>
                <a href="https://instagram.com/blinddatemusical" class="social-link" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="copyright">
                &copy; 2023 Шоу-Мюзикл "Свидание вслепую". Все права защищены.
            </div>
        </div>
    </footer>

    <script src="front/js/script.js"></script>
</body>

</html>