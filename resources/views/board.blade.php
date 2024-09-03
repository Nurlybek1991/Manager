<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trello</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Header -->
<header>
    <h1>RMAN</h1>
    <!-- Navigation menu -->
    <nav>
        <ul>
            <li><a href="{{ route('main')}}">Главная страница</a></li>
            {{--            <li><a href="{{ route('editTask')}}">Задачи</a></li>--}}
            {{--            <li><a href="{{ route('login') }}">Выход</a></li>--}}
        </ul>
    </nav>
</header>
{{--<h3>{{$user->firstname}} {{$user->lastname}} </h3>--}}
<!-- Main Content -->
<main>
    {{--    @if(empty($boards))--}}
    {{--        <p>Пусто</p>--}}
    {{--        @else--}}
    {{--        <p>Доски:</p>--}}
    {{--    @endif--}}
    <!-- Featured Boards Section -->

    <section>
        <h2>Доски: &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;</h2>
        @foreach($boards as $board)
            <article>
                <img src="https://cdn-icons-png.freepik.com/512/9124/9124141.png" alt="Board Image">
                <form action="{{ route('editTask') }}" method="get">
                    <button type="submit">Перейти</button>
                </form>
                <h3>{{$board->title}}</h3>
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <form action="{{ route("deleteBoard", ['id' => $board->id]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Удалить</button>
                </form>
            </article>
        @endforeach
        <form action="{{ route('editBoard')}}" method="post">
            @csrf
            <input type="text" name="title" placeholder="Новая доска">
            {{--                    <button type="submit">Submit</button>--}}
            <button>Создать</button>
        </form>
    </section>


    {{--    <!-- Recent Tasks Section -->--}}
    {{--    <section>--}}
    {{--        <h2>Список задач: &ensp;</h2>--}}
    {{--        <article>--}}
    {{--            <img src="https://cdn-icons-png.flaticon.com/512/2535/2535556.png" alt="Task Image">--}}
    {{--            <h3>Task Title</h3>--}}
    {{--            <p>Description of the task</p>--}}
    {{--            <button>Просмотреть список задач</button>--}}
    {{--        </article>--}}
    {{--        <!-- More recent tasks go here... -->--}}
    {{--    </section>--}}
</main>

<!-- Footer -->
<footer>
    <p>&copy; Copyright 2024 RMAN Inc.</p>
</footer>

</body>
</html>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        background-color: #333;
        color: #fff;
    }

    h1 {
        margin: 0;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav li {
        display: inline-block;
        margin-left: 10px;
    }

    nav a {
        text-decoration: none;
        color: #fff;
        padding: 5px;
    }

    main {
        margin: 20px 0;
    }

    section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        border-bottom: 1px solid #ddd;
    }

    article {
        flex: 1;
        margin-right: 20px;
    }

    img {
        width: 100px;
        height: 100px;
    }

    h3 {
        margin: 0;
    }

    button {
        padding: 5px 10px;
        background-color: #333;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    footer {
        text-align: center;
        padding: 10px;
        background-color: #333;
        color: #fff;
    }

</style>
