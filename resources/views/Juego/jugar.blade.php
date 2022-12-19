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
    background: rgb(173,250,243);
    background: linear-gradient(126deg, rgba(173,250,243,1) 8%, rgba(17,238,150,1) 87%);
}

nav {
    display: flex;
    width: 100%;
    height: fit-content;
    justify-content: center;
    align-items: center;
    padding: 5px 20px;
    background-color: #a6dbf4;
}
.cuenta a img {
    height: 70px;
    width: 70px;
    border: solid;
    border-color: black;
    border-radius: 40px;
    background-color: white;
}
main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

</style>

</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container_nav">
        <div class="row" style="Display:flex;">
                    <div class="Logo">
                    <a href="{{route('home.index')}}"></a>
                    </div>
                    <div class="cuenta">
                    <a href="{{route('cuenta.index')}}">
                    </a>
                    </div>
                </div>
        </div>
    </nav>
    <div class="main">
        <div class="columna1">
            <div class="Titulo">
                <label for="">Categoria: {{$categoria->nomCat}}</label>
                <br>
                <label >Palabra Clave: {{$pictoElegido->descPicto}}</label>

            </div>
            <div class="reproducir">
                <button></button>
                <label for=""></label>
            </div>
        </div>
        <div class="columna2">
            
            @foreach ($array_pictos as $p)
                <div class="pictogramas">
                    <img src="{{Storage::url($p->pictograma)}}" alt="" height="150" width="150">
                </div>
            @endforeach

        </div>
    </div>

</body>
</html>