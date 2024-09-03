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

<!-- Main Content -->
<main>

    <body>

    <div class="board">
        <div class="column" id="to-do">
            <h2>To Do</h2>
            <div class="card">
                <div class="card-header">Task 1</div>
                <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
            <div class="card">
                <div class="card-header">Task 2</div>
                <div class="card-body">Pellentesque sed diam eu eros hendrerit mattis.</div>
            </div>
        </div>

        <div class="column" id="in-progress">
            <h2>In Progress</h2>
        </div>

        <div class="column" id="done">
            <h2>Done</h2>
        </div>
    </div>

    </body>
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

    body {
        margin: 0;
        padding: 0;
    }

    .board {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #fafafa;
    }

    .column {
        width: 30%;
        min-width: 200px;
        max-width: 300px;
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px;
    }

    .card {
        background-color: white;
        padding: 10px;
        margin-bottom: 10px;
        cursor: move;
    }

    .card-header {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .card-body {
        padding: 5px;
        overflow: auto;
    }

</style>
