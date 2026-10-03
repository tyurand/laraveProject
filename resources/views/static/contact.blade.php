@extends('layouts.main')

@section('header-title')
    Связь с нами
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="contact-layout">
                <section class="contact-info">
                    <h2>Контакты</h2>
                    <p><strong>Телефон:</strong> +7 (900) 123-45-67</p>
                    <p><strong>Email:</strong> example@mail.ru</p>
                    <p><strong>Адрес:</strong> г. Москва, ул. Примерная, 10</p>
                    <p><strong>Режим работы:</strong> Пн–Пт, 09:00–18:00</p>
                </section>
                <div>
                    @if ($errors->any())
                        <div class="error-message">
                            <ul>
                                @foreach ($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <section class="contact-form">
                        <h2>Напишите нам</h2>

                        <form action="{{ route('contact.post') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Имя</label>
                                <input type="text" id="name" name="name" placeholder="Введите имя"
                                    value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Введите email"
                                    value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label for="message">Сообщение</label>
                                <textarea id="message" name="message"
                                    placeholder="Введите сообщение">{{ old('message') }}</textarea>
                            </div>

                            <button type="submit" class="btn">Отправить</button>
                        </form>
                    </section>
                </div>

            </div>
        </div>
    </main>
@endsection