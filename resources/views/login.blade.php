<img src="https://darksoul-git.github.io/Naruto-Login-Template/DarkSoul%20-%20%20naruto%20sign1.png"
     alt="darksoul-naruto-sign1" class="naruto-sign2"/>
<img src="https://darksoul-git.github.io/Naruto-Login-Template/DarkSoul%20-%20naruto%20sign2.png"
     alt="darksoul-naruto-sign2" class="naruto-sign1"/>
<div class="darksoul-container">
    <div class="square"><h1>Логин</h1></div>
    <form class="f-col m-auto form-container" action="{{ route('login')}}" method="post">
        @csrf
        <label class="mb-10">Почта</label>
        <input class="darksoul-input" type="email" name="email" value="{{old('email')}}" required autofocus>
        @error ('email')
        <span class="darksoul-input" style="color: red">{{ $message}}</span>
        @enderror
        <label class="mb-10 mt-20">Пароль</label>
        <div class="darksoul-password f-row">
            <input class="m-auto darksoul-input" type="password" name="password" id="password" required>
            <img class="m-auto eye-icon" width="18" height="18"
                 src="https://img.icons8.com/fluency-systems-filled/48/FD7E14/visible.png" alt="visible"
                 onclick="toggle()"/>
        </div>
        @error ('password')
        <span class="darksoul-input" style="color: red">{{ $message}}</span>
        @enderror
        <div class="form-group mb-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Запомнить
                </label>
            </div>
        </div>
        <button class="mt-40 m-auto darksoul-hover-fill-button" type="submit">
            <div class="color-fill"></div>
            <p>Логин</p></button>
        <p>У вас нет аккаунта? <a href="{{route('registrate')}}" id='log'>Регистрация</a></p>
    </form>
</div>
{{--<p class="disclaimer">Designed & Created by <a href="https://darksoul-codepen.github.io/" target="_blank">DarkSoul</a> &nbsp;| Icons by <a href="https://icons8.com/" target="_blank">Icons8</a></p>--}}

<style>
    @import url('https://fonts.googleapis.com/css2?family=Belanosima&family=Rubik+Vinyl&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');

    body {
        margin: 0;
        width: 100vw;
        height: 100vh;
        display: flex;
        font-family: 'Belanosima', sans-serif;
        background-image: url("https://darksoul-git.github.io/Naruto-Login-Template/DarkSoul%20-%20Naruto%20Wallpaper.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .f-col {
        display: flex;
        flex-direction: column;
    }

    .f-row {
        display: flex;
    }

    .m-auto {
        margin: auto;
    }

    .mt-10 {
        margin-top: 10px;
    }

    .mt-20 {
        margin-top: 20px;
    }

    .mt-30 {
        margin-top: 30px;
    }

    .mt-40 {
        margin-top: 40px;
    }

    .mb-10 {
        margin-bottom: 10px;
    }

    .mb-20 {
        margin-bottom: 20px;
    }

    .mb-30 {
        margin-bottom: 10px;
    }

    .mb-40 {
        margin-bottom: 20px;
    }

    .darksoul-container {
        width: 500px;
        height: 400px;
        margin: auto;
        display: flex;
        background-color: rgb(255, 255, 255);
        box-shadow: 1px 1px 20px rgb(228, 228, 228);
        border-radius: 25px;
    }

    .square {
        width: 200px;
        height: 200px;
        background-color: orange;
        box-shadow: 1px 1px 20px orange;
        z-index: 100;
        margin: auto;
        margin-left: -50px;
        border-radius: 25px;
    }

    .square h1 {
        text-align: center;
        color: white;
    }

    .darksoul-hover-fill-button {
        display: flex;
        width: 100px;
        height: 40px;
        border-radius: 5px;
        outline: none;
        border: 1px solid orange;
        background-color: white;
        font-family: 'Belanosima', sans-serif;
        cursor: pointer;
        align-items: center;
        justify-content: left;

    }

    .color-fill {
        position: absolute;
        margin-left: -7px;
        width: 100px;
        height: 1px;
        background-color: orange;
        visibility: hidden;
    }

    .darksoul-hover-fill-button:hover .color-fill {
        visibility: visible;
        width: 100px;
        height: 40px;
        border-radius: 5px;
        transition: all 0.5s;
        background-color: orange;
    }

    .darksoul-hover-fill-button:hover {
        box-shadow: 1px 1px 20px orange;
        transition: all 1s;
    }

    .darksoul-hover-fill-button:hover p {
        color: white;
        transition: all 0.3s;
    }

    .darksoul-hover-fill-button p {
        margin: auto;
        font-size: larger;
        z-index: 10;
    }

    .form-container {
        margin-right: 50px;
        width: 50%;
    }

    .darksoul-input {
        all: unset;
        border-bottom: 1px solid rgba(0, 0, 0, 0.259);
        padding-bottom: 5px;
        background-color: white;
        font-size: medium;
        font-weight: 200 !important;
        width: 90%;
    }

    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active {
        -webkit-box-shadow: 0 0 0 30px white inset !important;
    }

    .darksoul-password {
        width: 100%;
    }

    .darksoul-password:hover .eye-icon {
        visibility: visible;
    }

    .eye-icon {
        visibility: hidden;
        z-index: 100;
        margin-left: 10px;
    }

    .eye-icon:hover {
        cursor: pointer;
    }

    .naruto-sign1 {
        width: 150px;
        height: 150px;
        position: absolute;
        margin-bottom: auto;
        bottom: 50px;
        margin-left: auto;
        left: 100px;
        transform: rotateZ(0deg);
        animation-name: sign1-animate;
        animation-duration: 6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    .naruto-sign2 {
        width: 150px;
        height: 150px;
        position: absolute;
        margin-top: auto;
        top: 50px;
        margin-right: auto;
        right: 100px;
        transform: rotateZ(0deg);
        animation-name: sign2-animate;
        animation-duration: 5s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes sign1-animate {
        0% {
            transform: rotateZ(0deg);
        }
        50% {
            transform: rotateZ(50deg);
        }
        100% {
            transform: rotateZ(0deg);
        }
    }

    @keyframes sign2-animate {
        0% {
        }
        100% {
            transform: rotateZ(360deg);
        }
    }


    @media only screen and (max-width: 700px) {
        body {
            margin: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            font-family: 'Belanosima', sans-serif;
            background-image: url("https://darksoul-git.github.io/Naruto-Login-Template/DarkSoul%20-%20Naruto%20Phone%20Wallpaper.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }

        .darksoul-container {
            width: 80%;
            height: 350px;
            margin: auto;
            display: flex;
            flex-direction: column;
            background-color: rgb(255, 255, 255);
            box-shadow: 1px 1px 20px rgb(228, 228, 228);
            border-radius: 25px;
        }

        .square {
            width: 150px;
            height: 150px;
            background-color: orange;
            box-shadow: 1px 1px 20px orange;
            z-index: 100;
            margin: auto;
            margin-top: -50px;
            border-radius: 25px;
        }

        .form-container {
            margin: auto;
            width: 80%;
            height: 50%;
        }

        .darksoul-hover-fill-button {
            margin: auto;
            margin-top: 20px;
            display: flex;
            width: 100px;
            height: 40px;
            border-radius: 5px;
            outline: none;
            border: 1px solid orange;
            background-color: white;
            font-family: 'Belanosima', sans-serif;
            cursor: pointer;
            align-items: center;
            justify-content: left;

        }

        .naruto-sign1 {
            width: 100px;
            height: 100px;
            position: absolute;
            margin-bottom: auto;
            bottom: 20px;
            margin-left: auto;
            left: 20px;
            transform: rotateZ(0deg);

        }

        .naruto-sign2 {
            width: 100px;
            height: 100px;
            position: absolute;
            margin-top: auto;
            top: 20px;
            margin-right: auto;
            right: 10px;
            transform: rotateZ(0deg);
            animation-name: sign2-animate;
            animation-duration: 5s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
    }

    .disclaimer {
        position: absolute;
        bottom: 0px;
        left: 0;
        margin-left: auto;
        right: 0;
        margin-right: auto;
        width: fit-content;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    .disclaimer a {
        text-decoration: none;
        color: #202020;
        font-family: "Kaushan Script", cursive;
        font-weight: 900;
    }

    .disclaimer a:hover {
        text-decoration: overline;
    }
</style>
