<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PictoAmigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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
    height: fit-content;
    display: flex;
    justify-content: flex-end;
    padding: 5px 20px;
    background-color: #a6dbf4;
} 
.cuenta a img{
    height: 70px;
    width: 70px;
    border: solid;
    border-color: black;
    border-radius: 40px;
    background-color: white;
}

.container {
    width: 100%;
    max-width: 1000px;
    height: 93vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}

.container_nav{

    width: 100%;
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: flex-end;
}



.menu {
    position: relative;
    padding: 50px 20px 30px 20px;
    width: 80%;
    background-color: grey;
    border: 3px dashed rgb(63, 60, 60);
    border-radius: 25px;
    margin: 50px 0;
}

.logo {
    display: flex;
    justify-content: center;
    position: absolute;
    top: -40px;
    left: calc(28%);
}

.options-container {
    display: flex;
    justify-content: space-around;
    color: black;
    font-size: 24px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
}



.option a{
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    color: black;
}

.options-container img {
    width: 75px;
    height: 75px;
}

.pictures {
    display: flex;
    height: 50%;
    width: 100%;
    justify-content: space-between;
    padding: 0 100px;
}
</style>

</head>
<body style="background-image: url(./img/bg.png)">

<nav >
        <div class="container_nav">
        <div class="row_nav" style="Display:flex;">
                    <div class="Logo">
                    <a href="{{route('home.index')}}"><img src="./img/Logo.png"></a>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" onchange="adulto()" id="flexSwitchCheckDefault">
                        
                    </div>
                    <div class="cuenta">
                        <a href="{{route('cuenta.index')}}">
                            <img src="./img/LynxIcono.png" alt="">
                        </a>
                    </div>
                </div>
        </div>
    </nav>

    <div class="container">
        <div class="menu">
            <div class="logo">
                <img src="./img/Logo.png" alt="">
            </div>
            <div class="options-container">
                <div class="option">
                    <a href="{{route('calendario.index')}}">
                        <img src="./img/horario.png" alt="">
                    <p>Horario</p>
                    </a>
                </div>
                <div class="option">
                    <a href="{{route('pictograma.index')}}">
                        <img src="./img/pictogramas.png" alt="">
                        <p>Pictogramas</p>
                    </a>
                </div>
                <div class="option">
                    <a href="{{route('juego.seleccionar')}}">
                        <img src="./img/juego.png" alt="">
                        <p>juegos</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="pictures">
            <div class="">
                <img src="./img/niños1.png" alt=""> 
            </div>
            <div class="">
                <img src="./img/niños2.png" alt="">
            </div>
        </div>
        <script>
            function adulto() {
                $usuario="";
                if (document.getElementById('flexSwitchCheckDefault').checked) {
                    console.log("adulto");
                    
                    return $usuario;
                    
                } else {
                    console.log("niño");
                    return $usuario;
                }
            }
        </script>
    </div>

</body>
</html>