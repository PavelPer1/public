@extends('base.base')

@section('content')
<!-- Cast -->
<section id="cast" class="section-dark">
    <div class="container">
        <h2 style="padding-top:60px;">Актёрский состав</h2>
        <div class="cast-grid">
            @foreach($actors as $actor)
                <div class="cast-card">
                    <div class="cast-image">
                        <img src="{{$actor->actor_image}}" alt="{{$actor->actor_name}}">
                    </div>
                    <div class="cast-info">
                        <h3>{{$actor->actor_name}}</h3>
                        <span class="cast-read-more">
                            Наведите для описания <i class="fas fa-arrow-up"></i>
                        </span>
                    </div>
                    <div class="cast-description-overlay">
                        <div class="cast-role">{{$actor->actor_content}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Back to Main -->
<section class="back-to-main">
    <div class="container">
        <a href="{{ UrlProcessor::makeUrl(1) }}" class="btn btn-large"><i class="fas fa-arrow-left"></i> На главную страницу</a>
    </div>
</section>

<style>
/* Сброс всех возможных стилей для этой страницы */
#cast {
    padding: 5rem 0;
    width: 100%;
    overflow-x: hidden;
}

#cast .container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

#cast h2 {
    font-size: 2.5rem;
    text-align: center;
    margin: 0 0 3rem;
    position: relative;
}

#cast h2:after {
    content: '';
    position: absolute;
    width: 100px;
    height: 4px;
    background: var(--accent);
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
}

/* Десктоп: 4 карточки в строке, горизонтальные */
#cast .cast-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: 3rem;
    width: 100%;
}

/* Десктоп: горизонтальные карточки (квадратные фото) */
#cast .cast-card {
    background-color: var(--card-bg);
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.4s ease;
    position: relative;
    cursor: pointer;
    height: auto;
    display: flex;
    flex-direction: column;
}

/* Десктоп: квадратное фото */
#cast .cast-image {
    width: 100%;
    height: 300px; /* Фиксированная высота для квадрата */
    overflow: hidden;
    background-color: #1a1a1a;
    position: relative;
}

#cast .cast-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center top;
    transition: transform 0.6s ease;
    display: block;
}

#cast .cast-card:hover .cast-image img {
    transform: scale(1.1);
}

#cast .cast-info {
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    position: relative;
    z-index: 2;
    min-height: 100px;
    flex-grow: 1;
}

#cast .cast-info h3 {
    margin: 0;
    color: var(--accent);
    font-size: 1.6rem;
    margin-bottom: 10px;
    transition: color 0.3s ease;
    width: 100%;
}

#cast .cast-read-more {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--accent);
    font-size: 0.9rem;
    font-weight: 600;
    opacity: 0;
    transform: translateY(10px);
    transition: all 0.3s ease;
    margin-top: auto;
}

#cast .cast-card:hover .cast-read-more {
    opacity: 1;
    transform: translateY(0);
}

#cast .cast-description-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.85) 100%);
    backdrop-filter: blur(10px);
    padding: 25px 20px;
    transform: translateY(100%);
    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 10;
    border-top: 2px solid var(--accent);
    max-height: 70%;
    overflow-y: auto;
    box-sizing: border-box;
}

#cast .cast-card:hover .cast-description-overlay {
    transform: translateY(0);
}

#cast .cast-role {
    color: var(--text-secondary);
    font-size: 1.1rem;
    line-height: 1.6;
    margin: 0;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.4s ease 0.1s;
    text-align: center;
}

#cast .cast-card:hover .cast-role {
    opacity: 1;
    transform: translateY(0);
}

/* =========================================== */
/* МОБИЛЬНАЯ ВЕРСИЯ - ВЕРТИКАЛЬНЫЕ КАРТОЧКИ */
/* =========================================== */

@media (max-width: 768px) {
    #cast {
        padding: 3rem 0;
    }
    
    #cast h2 {
        font-size: 2rem;
        margin-bottom: 2rem;
    }
    
    /* ВАЖНО: Одна колонка, вертикальный макет */
    #cast .cast-grid {
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        gap: 30px !important;
        margin-top: 2rem !important;
        width: 100% !important;
        max-width: 100% !important;
        padding: 0 !important;
    }
    
    /* ВЕРТИКАЛЬНАЯ карточка на весь экран */
    #cast .cast-card {
        width: 100vw !important; /* Полная ширина экрана */
        max-width: 100% !important;
        margin: 0 !important;
        border-radius: 0 !important;
        display: flex !important;
        flex-direction: column !important;
        min-height: 85vh !important; /* Почти полный экран высотой */
        background: var(--secondary) !important;
    }
    
    /* Вертикальное фото - 70% высоты карточки */
    #cast .cast-image {
        width: 100% !important;
        height: 70vh !important; /* 70% высоты экрана */
        max-height: 600px !important;
        border-radius: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
        flex-shrink: 0 !important;
    }
    
    #cast .cast-image img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        object-position: center top !important;
        display: block !important;
    }
    
    /* Информация - 30% высоты карточки */
    #cast .cast-info {
        width: 100% !important;
        height: 30vh !important;
        min-height: 150px !important;
        max-height: 200px !important;
        padding: 20px 15px !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        align-items: center !important;
        text-align: center !important;
        flex-grow: 0 !important;
    }
    
    #cast .cast-info h3 {
        font-size: 1.8rem !important;
        margin-bottom: 15px !important;
        text-align: center !important;
    }
    
    /* На мобильных показываем кнопку всегда */
    #cast .cast-read-more {
        opacity: 1 !important;
        transform: translateY(0) !important;
        margin-top: 10px !important;
        font-size: 1rem !important;
        justify-content: center !important;
        width: 100% !important;
    }
    
    #cast .cast-description-overlay {
        height: 60vh !important;
        max-height: 500px !important;
        padding: 20px 15px !important;
        border-radius: 0 !important;
    }
    
    #cast .cast-role {
        font-size: 1.1rem !important;
        line-height: 1.7 !important;
        height: 100% !important;
        overflow-y: auto !important;
    }
    
    /* Скрываем скроллбар на мобильных */
    #cast .cast-role::-webkit-scrollbar {
        display: none;
    }
    
    #cast .cast-role {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
}

/* Для очень маленьких экранов (iPhone SE и подобные) */
@media (max-width: 375px) {
    #cast .cast-card {
        min-height: 90vh !important;
    }
    
    #cast .cast-image {
        height: 65vh !important;
    }
    
    #cast .cast-info {
        height: 25vh !important;
        padding: 15px 10px !important;
    }
    
    #cast .cast-info h3 {
        font-size: 1.6rem !important;
    }
    
    #cast .cast-read-more {
        font-size: 0.9rem !important;
    }
    
    #cast .cast-description-overlay {
        height: 55vh !important;
        padding: 15px 10px !important;
    }
}

/* Планшетная версия (768px - 1024px) */
@media (min-width: 769px) and (max-width: 1024px) {
    #cast .cast-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }
    
    #cast .cast-image {
        height: 280px;
    }
}

/* Для тач-устройств */
@media (hover: none) and (pointer: coarse) {
    #cast .cast-card {
        cursor: pointer;
    }
    
    #cast .cast-card:active {
        transform: scale(0.98);
    }
    
    #cast .cast-card.active .cast-description-overlay {
        transform: translateY(0);
    }
    
    #cast .cast-card.active .cast-role {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Back to Main стили */
.back-to-main {
    padding: 3rem 0;
    background-color: var(--section-bg);
    text-align: center;
}

.back-to-main .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: linear-gradient(135deg, var(--lilac) 0%, var(--lilac-dark) 100%);
    padding: 15px 40px;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.back-to-main .btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(168, 85, 247, 0.4);
}

.back-to-main .btn i {
    font-size: 1.1rem;
    transition: transform 0.3s ease;
}

.back-to-main .btn:hover i {
    transform: translateX(-3px);
}

@media (max-width: 768px) {
    .back-to-main {
        padding: 2rem 0;
    }
    
    .back-to-main .btn {
        padding: 12px 30px;
        font-size: 1rem;
        width: 100%;
        max-width: 300px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const castCards = document.querySelectorAll('#cast .cast-card');
    let activeCard = null;
    
    function closeAllCards() {
        castCards.forEach(card => {
            card.classList.remove('active');
        });
        activeCard = null;
    }
    
    castCards.forEach(card => {
        // Для десктопов
        if (window.innerWidth > 768) {
            card.addEventListener('mouseenter', function() {
                this.classList.add('active');
            });
            
            card.addEventListener('mouseleave', function() {
                this.classList.remove('active');
            });
        }
        
        // Для мобильных
        card.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                e.stopPropagation();
                
                if (this === activeCard) {
                    this.classList.remove('active');
                    activeCard = null;
                } else {
                    closeAllCards();
                    this.classList.add('active');
                    activeCard = this;
                    
                    // Прокрутка к активной карточке
                    this.scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
    
    // Закрытие при клике вне карточки
    document.addEventListener('click', function(e) {
        if (!e.target.closest('#cast .cast-card')) {
            closeAllCards();
        }
    });
    
    // Закрытие при нажатии Esc
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeAllCards();
        }
    });
    
    // Сброс при изменении размера окна
    window.addEventListener('resize', function() {
        closeAllCards();
    });
});
</script>
@endsection