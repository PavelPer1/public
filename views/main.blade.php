@extends('base.base')

@section('content')
<!-- Объединенная Hero Section с информацией о шоу -->
    <section class="hero">
        <div class="hero-bg">
            <img src="front/images/IMG_3945.JPG" alt="Фон шоу-мюзикла">
        </div>
        
        <div class="container">
            <div class="hero-content">
                <h1>Свидание вслепую</h1>
                <p class="subtitle">Юмористический шоу-мюзикл на котором смешно до икоты, сексуально до мурашек, и очень музыкально</p>
                <a href="#pricing" class="btn btn-large">Купить билеты</a>
                
                <!-- Кнопка "Подробнее" -->
                <button class="btn btn-primary show-details-btn" onclick="toggleDetails()">
                    Подробнее
                    <span class="arrow">↓</span>
                </button>
                
                <div class="social-hero">
                    <p>Подпишитесь на нас в соц сетях:</p>
                    <div class="social-links">
                        <a href="{!! $documentObject['telegram'] !!}" class="social-link" target="_blank"><i class="fab fa-telegram"></i></a>
                        <a href="{!! $documentObject['whatsApp'] !!}" class="social-link" target="_blank"><i class="fab fa-vk"></i></a>
                        <a href="{!! $documentObject['instagram'] !!}" class="social-link" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция "О шоу" - теперь отдельно от hero -->
    <section id="about" class="section about-show">
        <div class="container">
            <!-- Детальная информация о шоу (скрыта по умолчанию) -->
            <div class="detailed-info" id="detailedInfo">
                <div class="detailed-content">
                    <h2 class="show-title">Шоу-мюзикл «Свидание вслепую»</h2>

                    <div class="info-grid">
                        <div class="info-item">
                            <h3>Жанр</h3>
                            <p>Юмористическое шоу-мюзикл, с ноткой эротики</p>
                        </div>
                        <div class="info-item">
                            <h3>Настрой</h3>
                            <p>Провокационный, ироничный, музыкальный</p>
                        </div>
                        <div class="info-item">
                            <h3>Для кого</h3>
                            <p>Для взрослых, которые не верят в сказки, но верят в искренний смех, отличную музыку и жаркий сюжет</p>
                        </div>
                    </div>
                    
                    <!-- Краткая информация в виде блоков -->
                    <div class="short-info">
                        <div class="highlights">
                            <div class="highlight-item">
                                <h3>СМЕШНО до икоты</h3>
                            </div>
                            <div class="highlight-item">
                                <h3>СЕКСУАЛЬНО до мурашек</h3>
                            </div>
                            <div class="highlight-item">
                                <h3>МУЗЫКАЛЬНО до гусиной кожи</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="why-visit">
                        <h3>Почему стоит посетить?</h3>
                        <ul>
                            <li><strong>СМЕШНО до икоты</strong></li>
                            <li><strong>СЕКСУАЛЬНО до мурашек</strong></li>
                            <li><strong>МУЗЫКАЛЬНО до гусиной кожи</strong></li>
                        </ul>
                    </div>
                    
                    <div class="premiere-info">
                        <p><strong>Премьера нашего откровенного, красивого и дерзкого мюзикла —<br>
                        19 апреля в баре «Smoke Dog» Холодильный переулок 3, стр.2</strong></p>
                        
                        <div class="warning">
                            <p><strong>18+</strong>: Наш юмор, наши сцены и наш скандальный замысел требуют взрослой аудитории с отличным чувством юмора.</p>
                            <p class="final-note">Держите руку на пульсе. Это будет жарко!</p>
                        </div>
                    </div>

                    <!-- Видео блок -->
                    <div class="video-section">
                        <h3 class="show-title">Видео</h3>
                        <div class="video-container">
                            <video class="horizontal-video" src="{!! $documentObject['about_video'] !!}" controls></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cast and Team -->
    <section id="cast-and-team" class="section-dark">
        <div class="container">
            <h2>Актёрский состав и команда</h2>
            <div class="cast-grid">
                <div class="cast-card">
                    <div class="cast-image">
                        <img src="{!! $documentObject['cast_image'] !!}" alt="Алексей Иванов">
                    </div>
                    <div class="cast-info">
                        <h3>Звездный состав</h3>
                        <p>Профессиональные актёры с опытом работы в театре и кино</p>
                        <a href="{{ UrlProcessor::makeUrl(2) }}" class="btn">Посмотреть всех артистов</a>
                    </div>
                </div>
                <div class="cast-card">
                    <div class="cast-image">
                        <img src="{!! $documentObject['team_image'] !!}" alt="Алексей Иванов">
                    </div>
                    <div class="cast-info">
                        <h3>Творческая команда</h3>
                        <p>Режиссёры, композиторы, хореографы и художники</p>
                        <a href="{{ UrlProcessor::makeUrl(3) }}" class="btn">Вся команда</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Media -->
    <section id="media" class="section-dark">
        <div class="container">
            <h2>Фото и видео</h2>
            
            <div class="media-tabs">
                <button class="tab-btn active" data-tab="photos">Фото</button>
                <button class="tab-btn" data-tab="video">Видео</button>
            </div>
            
            <div class="tab-content active" id="photos-tab">
                <div class="photo-grid">
                    <div class="photo-item">
                        <img src="front/images/gallery/2d922d54150bb2d1b288fcf50eacc689.jpg" alt="Кадр из шоу 1">
                    </div>
                    <div class="photo-item">
                        <img src="front/images/gallery/3c5f6330acaab53f02edf28a779c79e9.png" alt="Кадр из шоу 2">
                    </div>
                    <div class="photo-item">
                        <img src="front/images/gallery/9_caf0923b.jpg" alt="Кадр из шоу 3">
                    </div>
                    <div class="photo-item">
                        <img src="front/images/gallery/01704bd80d2d4538ef3c87095b0cfc5d.jpg" alt="Кадр из шоу 4">
                    </div>
                    <div class="photo-item">
                        <img src="front/images/gallery/b2479dda3190f88edb38999f80ee1c97.jpg" alt="Кадр из шоу 5">
                    </div>
                    <div class="photo-item">
                        <img src="front/images/gallery/IbFktkuTURBXy8xYWIwYWVmNC04MzVjLTRjOTktOTZlYy04YWQwNDkwZDBkNzMuanBlZ5GVAs0DFs0CD8LD.jpg" alt="Кадр из шоу 6" >
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="video-tab">
                <div class="video-grid">
                    <!-- Видео 1 -->
                    <div class="video-item">
                        <video controls muted playsinline poster="images/videos/poster1.jpg" 
                            autoplay loop preload="metadata" class="vertical-video">
                            <source src="front/video/IMG_4192.MOV" type="video/mp4">
                            Ваш браузер не поддерживает видео тег.
                        </video>
                    </div>
                    
                    <!-- Видео 2 -->
                    <div class="video-item">
                        <video controls muted playsinline poster="images/videos/poster2.jpg" 
                            autoplay loop preload="metadata" class="vertical-video">
                            <source src="front/video/IMG_4220.MOV" type="video/mp4">
                            Ваш браузер не поддерживает видео тег.
                        </video>
                    </div>
                    
                    <!-- Видео 3 -->
                    <div class="video-item">
                        <video controls muted playsinline poster="images/videos/poster3.jpg" 
                            autoplay loop preload="metadata" class="vertical-video">
                            <source src="front/video/IMG_4247.MOV" type="video/mp4">
                            Ваш браузер не поддерживает видео тег.
                        </video>
                    </div>
                    
                    <!-- Видео 4 -->
                    <div class="video-item">
                        <video controls muted playsinline poster="images/videos/poster4.jpg" 
                            autoplay loop preload="metadata" class="vertical-video">
                            <source src="front/video/IMG_4186.MOV" type="video/mp4">
                            Ваш браузер не поддерживает видео тег.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Become Artist Preview -->
    <section id="artist-preview">
        <div class="container">
            <h2>Стать Артистом</h2>
            <p class="section-subtitle">Присоединяйтесь к нашему проекту</p>
            
            <div class="artist-preview-content">
                <div class="artist-preview-text">
                    <h3>Участвуйте в уникальном шоу-мюзикле!</h3>
                    <p>Мы ищем талантливых артистов для участия в нашем проекте. 4 месяца интенсивной подготовки, профессиональное обучение и выступление на большой сцене.</p>
                    
                    <div class="benefits-grid">
                        <div class="benefit">
                            <i class="fas fa-graduation-cap"></i>
                            <h4>Профессиональное обучение</h4>
                            <p>Индивидуальные занятия с педагогами</p>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-music"></i>
                            <h4>Сценический опыт</h4>
                            <p>Выступление на профессиональной сцене</p>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-users"></i>
                            <h4>Работа в команде</h4>
                            <p>Совместное творчество с профессионалами</p>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-star"></i>
                            <h4>Творческий рост</h4>
                            <p>Развитие актёрских и вокальных навыков</p>
                        </div>
                    </div>
                    
                    <a href="artist.html" class="btn btn-large" target="_blank">Подать заявку на участие</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
<section id="partners" class="section-dark">
    <div class="container">
        <h2>Партнёрам</h2>
        
        <div class="partners-content">
            <div class="partners-info">
                <h3>Сотрудничество с нами</h3>
                <p>Мы открыты для партнёрства с брендами, организациями и компаниями, которые хотят стать частью нашего уникального проекта. Вместе мы можем создать незабываемое событие в мире музыкального театра.</p>
                <p>Предлагаем различные форматы сотрудничества: спонсорство, бартерные отношения, совместные проекты и мероприятия.</p>
                <div class="partners-button-container">
                    <button class="btn">Отправить предложение</button>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Pricing -->
    <section id="pricing">
        <div class="container">
            <h2>Стоимость билетов</h2>
            <p class="section-subtitle">Выберите подходящий вариант посещения нашего шоу. Билеты можно приобрести онлайн или в кассах театра.</p>
            
            <div class="pricing-cards">
                <div class="pricing-card">
                    <h3>Стандарт</h3>
                    <div class="price">2500 <span>руб.</span></div>
                    <ul class="pricing-features">
                        <li>Место на балконе</li>
                        <li>Брошюра о шоу</li>
                        <li>Бесплатный гардероб</li>
                        <li>Доступ в фойе</li>
                    </ul>
                    <a href="#" class="btn">Купить билет</a>
                </div>
                
                <div class="pricing-card featured">
                    <h3>Премиум</h3>
                    <div class="price">5000 <span>руб.</span></div>
                    <ul class="pricing-features">
                        <li>Места в партере (ряды 5-10)</li>
                        <li>Брошюра о шоу + сувенир</li>
                        <li>Бесплатный гардероб</li>
                        <li>Фуршет во время антракта</li>
                        <li>Встреча с актёрами после шоу</li>
                    </ul>
                    <a href="#" class="btn">Купить билет</a>
                </div>
                
                <div class="pricing-card">
                    <h3>VIP</h3>
                    <div class="price">8500 <span>руб.</span></div>
                    <ul class="pricing-features">
                        <li>Лучшие места в партере (ряды 1-4)</li>
                        <li>Подарочный набор</li>
                        <li>Личный гардероб</li>
                        <li>VIP-фуршет с шампанским</li>
                        <li>Личная встреча с актёрами</li>
                        <li>Фотосессия с актёрами</li>
                    </ul>
                    <a href="#" class="btn">Купить билет</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section id="partners" class="section-dark">
        <div class="container">
            <h2>Наши Партнёры</h2>
            <p class="section-subtitle">Благодарим наших партнёров за поддержку проекта</p>
            
            <div class="partners-grid">
                <div class="partner-logo">
                    <img src="{!! $documentObject['partners_1'] !!}" alt="Партнёр 1">
                </div>
                <div class="partner-logo">
                    <img src="{!! $documentObject['partners_2'] !!}" alt="Партнёр 2">
                </div>
                <div class="partner-logo">
                    <img src="{!! $documentObject['partners_3'] !!}" alt="Партнёр 3">
                </div>
                <div class="partner-logo">
                    <img src="{!! $documentObject['partners_4'] !!}" alt="Партнёр 4">
                </div>
                <div class="partner-logo">
                    <img src="{!! $documentObject['partners_5'] !!}" alt="Партнёр 5">
                </div>
                <div class="partner-logo">
                    <img src="{!! $documentObject['partners_6'] !!}" alt="Партнёр 6">
                </div>
            </div>
            
        </div>
    </section>

     <!-- Contact -->
    <section id="contact">
        <div class="container">
            <h2>Контакты</h2>
            
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Адрес</h3>
                    <p>{!! $documentObject['adress'] !!}</p>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Телефон</h3>
                    <p>{!! $documentObject['phone_number'] !!}</p>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p>{!! $documentObject['email_base'] !!}</p>
                </div>
            </div>
            
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-vk"></i></a>
                <a href="{!! $documentObject['telegram'] !!}" class="social-link"><i class="fab fa-telegram"></i></a>
                <a href="{!! $documentObject['instagram'] !!}" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </section>
@endsection