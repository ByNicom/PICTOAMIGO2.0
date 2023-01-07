<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PictoAmigo</title>

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
    padding: 5px 20px;
    background-color: #a6dbf4;
    padding-left: 38%;
} 

select{
    width: 256px;
    height: 70px;
    font-size: 46px;
}
button{
    width: 256px;
    height: 70px;
    font-size: 43px;
    margin-left: 127px;
    background-color: burlywood;
    border-color: chocolate;
    border-width: 9px;
}
.container {
    width: 100%;
    max-width: 1000px;
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

.row_nav_logo{
    padding-right: 41%;
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
.cuenta a img {
    height: 70px;
    width: 70px;
    border: solid;
    border-color: black;
    border-radius: 40px;
    background-color: white;
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

    </style>
</head>
<body style="background-image: url(./img/bg.png)">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container_nav">
        <div class="row" style="Display:flex;">
                    <div class="Logo">
                    <a href="{{route('home.index')}}"><img src="./img/Logo.png"></a>
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
        <div class="titulo">
        <img src="./img/titulo.png" alt="">
        </div>
        <div class="container">
            <div class="categorias">
                    <select id="cat" name="idCatPicto">
                        @foreach($categorias as $cat)
                            <option value="{{$cat->idCatPicto}}" >{{$cat->nomCat}}</option>
                        @endforeach
                    </select>
                
                    <button id="jugar">Juguemos!</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <script>
        $( document ).ready(function() {
            $('#jugar').click(function(){
                let valor = $("#cat :selected").val();
                window.location.href = "{{route('juego.jugar')}}?idCat="+valor;
            }); 
        });
    </script>
</body>
</html>