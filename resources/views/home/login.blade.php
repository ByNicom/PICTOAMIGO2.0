<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PictoAmigo</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/index.css')}}"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- Styles -->
        <style>
         
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
        }

        nav {
            height: 76px;
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 5px 20px;
            background-color: #a6dbf4;
        }

        .app {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            height:fit-content;
        }

        .img-container{
            width: 50%;height: 50%;display: grid;place-self: center;
        }

        .img-container img{
            width: 75%;margin: auto auto;
        }

        .form {
            height: 87.7vh;display: flex;flex-direction: column;justify-content: center;align-items: center;
        }

        .form-group-container {
            display: flex;flex-direction: column;
        }

        input {
            height: 50px;
            width: 100%;
            background-color: rgb(182, 180, 192);
            border: 3px solid rgb(124, 122, 130);
            border-radius: 10px;
        }

        label, .label {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: large;
            font-weight: bold;
            letter-spacing: 3px;
            margin-bottom: 5px;
        } 
        
        p a {
            text-decoration: none;
            color: blue;
        }

        .login-button {
            border: 2px solid blue;
            border-radius: 10px;
            color: blue;
            background-color: yellow;
            min-width: fit-content;
            padding: 5px 50px;
        }

        .space {
            margin-bottom: 30px;
        }

        @media (max-width: 420px) {
            .form-container {
                height: fit-content;
                padding-top: 10px;
            }
            .label-container {
                grid-template-columns: 1fr;
                margin-top: 20px;
            }
        }

        </style>

    </head>
<body style="background-image: url(./img/bg.png)">

        <nav class="navbar navbar-expand-lg navbar-dark ">   
            <a ><img src="./img/Logo.png"></a>
        </nav>

        <div class="container">
            <div class="row">
                <div class="app">
                    <div class="img-container">
                        <img src="./img/main.png" >
                    </div>
                    <form method="POST" action="{{route('usuario.login')}}">
                        @csrf
                        <div class="form-group">
                                            <label for="Email">Email:</label>
                                            <input required type="Email" id="Email" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Contraseña:</label>
                                            <input required type="password" id="password" name="password" class="form-control">
                                        </div>
                        <p class="space"></p>
                            <button href="{{route('home.login')}}" class="login-button" type="submit">Ingresar</button>
                        <p><a href="{{route('home.signin')}}">Registrate aca!!</a></p>
                            
                        @if($errors->any())
                            <div class="alert alert-warning mt-2">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>   
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </form>
                </div>
            </div> 
        </div>
        
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>


</html>
