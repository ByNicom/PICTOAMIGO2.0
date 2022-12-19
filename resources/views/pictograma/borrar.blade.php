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



nav {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 5px 20px;
    background-color: #a6dbf4;
}
body {
    height: 100vh;
    background: rgb(82, 231, 225);
}

.mascota img{
    height: 800px;
    border: solid 4px;
    border-radius: 113px;
    background-color: mintcream;
    border-color: black;
}

.form-container {
    height: fit-content;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: auto;
}
.form {
    width: 135%;
    min-width: 75%;
    min-height: 75%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: rgb(186, 90, 45);
    border-radius: 25px;
    padding: 10px 0;
    margin: 20px 0;
}
.input-container {
    display: grid;
    width: 75%;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
    margin-bottom: 50px;
}

input {
    height: 50px;
    width: 100%;
    background-color: rgb(182, 180, 192);
    border: 3px solid rgb(124, 122, 130);
    border-radius: 10px;
}
button{
    background: none;
    border: none;
}

label {
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: large;
    font-weight: bold;
    letter-spacing: 3px;
    margin-bottom: 5px;
}
.form-dato{
    display: flex;
    flex-direction: column;
    background: burlywood;
    align-items: center;
    height: 140px;
    width: 200px;
    border-radius: 14px;
    justify-content: center;
}

.button-img {
    width: 100px;
    height: 100px;
    border-radius: 50px;
    border: solid;
    background-color: #b6b4c0;
}
.cuenta a img {
    height: 70px;
    width: 70px;
    border: solid;
    border-color: black;
    border-radius: 40px;
    background-color: white;
}

.img-container img {
    width: 200px;
    height: 200px;
}
.container-app{
    display: flex;
    flex-direction: column;
}
.row-opciones{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.row{
    display: flex;
    margin-left: 108px;
    margin-top: 100px;
    justify-content: space-around;
}
.borrarPictograma{
    display: flex;
    flex-direction: column;
    align-items: center;
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

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        
        <a href="{{route('home.index')}}"><h1>PictoAmigos</h1></a>
        
        </nav>

    
    <div class="container-app">
        <div id="app" class="form-container">
        <div id="borrarPictograma" style="display:flex;flex-direction:column;align-items:center;">
                            <div class="SeguroParental"><h3>Borrar Pictograma</h3></div>
                                <h3>{{$picto->idPicto}}</h3>
                                <form  method="POST" action="{{route('pictograma.delete')}}" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="input-container">
                                        <div class="form-dato">
                                            <label for="">Id Pictograma</label>
                                            <input readonly type="Text" name="idPicto" value="{{$picto->idPicto}}"/>
                                        </div>
                                        <div class="form-dato">
                                            <label for="">Pictograma</label>
                                            <img src="{{Storage::url($picto->pictograma)}}" style="width: 100px;" src="" alt="">
                                        </div>
                                        <div class="form-dato">
                                            <label for="">Nombre Pictograma</label>
                                            <input readonly type="Text" name="nomPicto" value="{{$picto->nomPicto}}"/>
                                        </div>
                                        <div class="form-dato">
                                            <label for="">Descripcion Pictograma</label>
                                            <input readonly type="Text" name="descPicto" value="{{$picto->descPicto}}"/>
                                        </div>
                                        
                                    </div>
                                    <div class="row-ida" style="display:flex;flex-direction:column;align-items:center;">
                                            <label for="" style="background: orangered;border:solid;border-radius:30px;">Borrar Pictograma</label>
                                                <a href="{{route('pictograma.delete')}}">
                                                    <button >¿seguro?
                                                    </button>
                                                </a>
                                        </div>
                                </form>
                            </div>
                    </div> 
    </div>
</div> 

</body>
</html>