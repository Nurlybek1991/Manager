
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
            <li><a href="{{ route('board')}}">Доски</a></li>
            <li><a href="{{ route('editTask')}}">Задачи</a></li>
            <li><a href="{{ route('registrate') }}">Выход</a></li>
        </ul>
    </nav>
</header>

<!-- Main Content -->
<main>
    <!-- Team Members Section -->
    <section>
        <h2>Пользователь: &ensp; </h2>
        <article>
            <img src="https://www.terrainhopperusa.com/wp-content/uploads/2019/01/avatar-woman.png" alt="Member Image">
                        <h3>{{$user->firstname}} {{$user->lastname}} </h3>
                        <p>{{$user->email}}</p>
            <form action="{{ route('editProfile') }}" method="GET">
                @csrf
                <button>Данные пользователя</button>
            </form>
        </article>
        <!-- More team members go here... -->
    </section>

    <!-- Featured Boards Section -->
    <section>
        <h2>Доски: &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;</h2>
        <article>
            <img
                src="https://img.freepik.com/free-vector/african-boy-with-chalkboard-classroom-character_24877-59350.jpg?t=st=1720204276~exp=1720207876~hmac=42a0dfe753088115d929e9e5bd2b943e29f69f30c2f0af690b7efbd333a5190c"
                alt="Board Image">
            <h3>Board Title</h3>
            <p>Description of the board</p>
            <form action="{{ route('board') }}" method="GET">
                @csrf
                <button>Просмотреть доски</button>
            </form>
        </article>
        <!-- More featured boards go here... -->
    </section>

    <!-- Recent Tasks Section -->
    {{--    <section>--}}
    {{--        <h2>Список задач: &ensp;</h2>--}}
    {{--        <article>--}}
    {{--            <img src="https://cdn-icons-png.flaticon.com/512/2535/2535556.png" alt="Task Image">--}}
    {{--            <h3>Task Title</h3>--}}
    {{--            <p>Description of the task</p>--}}
    {{--            <form action="{{ route('editTask') }}" method="GET">--}}
    {{--                @csrf--}}
    {{--            <button>Просмотреть список задач</button>--}}
    {{--            </form>--}}
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
