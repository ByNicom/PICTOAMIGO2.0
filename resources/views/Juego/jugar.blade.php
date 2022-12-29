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

h1{
    font-size: 46px;
    background: lightgoldenrodyellow;
    border: 4px solid;
    border-radius: 20px;
    margin-left: 40px;
    padding: 4px;
}

main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.pictogramas img{
    margin-bottom: 30px;
    border: solid 5px;
    margin-right: 30px;
    background: white;
}
.Titulo{
    font-size: 45px;
    font-style: normal;
    font-weight: 600;
    color: crimson;
    border: black solid;
    border-radius: 11px;
    background: oldlace;
}
.Categoria{
    font-size: 70px;
    font-style: oblique;
    font-weight: 600;
}
.titucat{
    display: flex;
    align-items: center;
}


</style>

</head>
<body style="background-image: url(./img/bg.png)">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container_nav">
        <div class="row-a" style="Display:flex;">
                    <div class="Logo">
                        <a class="Titulo" href="{{route('home.index')}}">PictoAmigo</a>
                        </div>
                    
                </div>
        </div>
    </nav>
    <div class="main">
        <div class="columna1">
            <div class="TituloJuego">
                <div class="titucat">
                    <label class="Categoria">Categoria: </label><h1>{{$categoria->nomCat}}</h1>
                </div>
                <br>
                <div>  
                    <label class="Pista">Palabra Pista: {{$pictoElegido->descPicto}}</label>
                </div>
                    
                
                
            </div>
            
        </div>
        <div class="columna2" style="display: flex;justify-content: space-around;align-items: center;">
            <div class="reproducir" style="display: flex;flex-direction: column;align-items: center;">
                <button class="reproduce-button" style="margin-top:38px;border:solid 5px;border-radius:81px;background:yellow;height:93px;width:100px;">
                    <img src="./img/voz.png" style="width:82px;border:solid4px;border-radius:89px;height:60px;background:yellow;padding:5px;">
                </button>
                <label style="font-size: 80px;font-weight: 600;font-family: cursive;">{{$pictoElegido->nomPicto}}</label>
            </div>
            <div class="pictogramas" style="display: flex;">
                <div class="pictos1" style="margin-right: 30px;">
                    @foreach ($array_pictos1 as $p1)
                        <div class="pictogramas">
                            <img src="{{Storage::url($p1->pictograma)}}" alt="" height="150" width="150">
                        </div>
                    @endforeach
                </div>
                <div class="pictos2">
                @foreach ($array_pictos2 as $p2)
                    <div class="pictogramas">
                        <img src="{{Storage::url($p2->pictograma)}}" alt="" height="150" width="150">
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

</body>
</html>