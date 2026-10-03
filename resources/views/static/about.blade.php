@extends('layouts.main') {{-- @extends('layouts.main') === @extends('layouts/main') --}}

@section('header-title')
    Про нас
@endsection
@section('content')
    <main>
        <div class="container">
            <section class="about-text">
                <h1 class="section-title">О нас</h1>

                <p>
                    Мы создаём простые и удобные решения без лишних элементов.
                    Главный принцип — понятность, аккуратность и удобство использования.
                </p>

                <p>
                    Этот шаблон можно легко адаптировать под учебный проект,
                    небольшую компанию, портфолио или личный сайт.
                </p>

                <p>
                    В дизайне используются нейтральные серые оттенки и синий
                    как основной акцентный цвет.
                </p>

                <a href="contacts.html" class="btn" style="margin-top: 25px;">Связаться с нами</a>
            </section>
        </div>
    </main>
@endsection