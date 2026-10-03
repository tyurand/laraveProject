@extends('layouts.main') {{--  @extends('layouts.main')  === @extends('layouts/main') --}}

@section('header-title')
Главная страница 
@endsection
@section('content')
<main>
    <div class="container">
        <section class="hero">
            <h1>Добро пожаловать</h1>
            <p>
                Простой и строгий сайт с минималистичным дизайном.
                Здесь можно разместить информацию о компании, проекте или своей деятельности.
            </p>
            <a href="about.html" class="btn">Узнать больше</a>
        </section>

        <section style="margin-top: 30px;">
            <h2 class="section-title">Наши направления</h2>

            <div class="grid">
                <div class="card">
                    <h3>Качество</h3>
                    <p>Фокусируемся на аккуратной работе и понятном результате.</p>
                </div>

                <div class="card">
                    <h3>Надёжность</h3>
                    <p>Стараемся выполнять задачи последовательно и в срок.</p>
                </div>

                <div class="card">
                    <h3>Развитие</h3>
                    <p>Постоянно улучшаем подходы и ищем практичные решения.</p>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
