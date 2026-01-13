@extends('base.base')

@section('content')
<!-- Cast -->
    <section id="cast" class="section-dark">
        <div class="container">
            <h2>Команда</h2>
            <div class="cast-grid">
                <div class="cast-card">
                    <div class="cast-image">
                        <img src="images/897.jpg" alt="Алексей Иванов">
                    </div>
                    <div class="cast-info">
                        <h3>Алексей Иванов</h3>
                        <div class="cast-role">Главная роль: Маркус</div>
                        <p>Выпускник ГИТИСа, лауреат театральных премий</p>
                    </div>
                </div>
                
                <div class="cast-card">
                    <div class="cast-image">
                        <img src="images/64578e144b.jpg" alt="Мария Соколова">
                    </div>
                    <div class="cast-info">
                        <h3>Мария Соколова</h3>
                        <div class="cast-role">Главная роль: Элина</div>
                        <p>Прима музыкального театра, обладательница премии "Золотая маска"</p>
                    </div>
                </div>
                
                <div class="cast-card">
                    <div class="cast-image">
                        <img src="images/iskander_fahrutdinov.jpg" alt="Дмитрий Петров">
                    </div>
                    <div class="cast-info">
                        <h3>Дмитрий Петров</h3>
                        <div class="cast-role">Роль: Лорд Вальтер</div>
                        <p>Заслуженный артист России, опыт работы на сцене более 20 лет</p>
                    </div>
                </div>
                
                <div class="cast-card">
                    <div class="cast-image">
                        <img src="images/photo_2023-04-16_13-53-01 (2).jpg" alt="Анна Кузнецова">
                    </div>
                    <div class="cast-info">
                        <h3>Анна Кузнецова</h3>
                        <div class="cast-role">Роль: Королева Ариэль</div>
                        <p>Выпускница Щукинского училища, участница многих мюзиклов</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Main -->
    <section class="back-to-main">
        <div class="container">
            <a href="{{ UrlProcessor::makeUrl(1) }}" class="btn btn-large"><i class="fas fa-arrow-left"></i> На главную страницу</a>
        </div>
    </section>
@endsection