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
    background: rgb(82, 231, 225);
}

nav {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 5px 20px;
    background-color: #a6dbf4;
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
    height: 140px;
    width: 200px;
    border-radius: 14px;
    align-items: center;
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

.editarPictograma{
    
    display: flex;
    flex-direction: column;
    align-items: center;
}





    </style>

</head>
<body style="background-image: url(./img/bg.png)">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        
        <a href="{{route('home.index')}}">
            <h1>PictoAmigos</h1>
        </a>
        
        </nav>

    
    <div class="container-app">
        <div id="app" class="form-container">
        <div id="editarPictograma" style="display:flex;flex-direction:column;align-items:center;">
                            <div class="SeguroParental"style="background:yellow;border:solid;border-radius:45px;display:flex;flex-direction:column;align-items:center;}">
                                <h1>Editar Pictograma</h1>
                            </div>
                                <form  method="POST" action="{{route('pictograma.update')}}" enctype="multipart/form-data" style="padding-top:25px">
                                    @csrf
                                    <div class="input-container">
                                        <div class="form-dato">
                                            <label for="">Id Pictograma</label>
                                            <input readonly type="Text" name="idPicto" value="{{$picto->idPicto}}"/>
                                        </div>
                                        <div class="form-dato">
                                            <label for="">Agregar Pictograma</label>
                                            <img src="{{Storage::url($picto->pictograma)}}" style="width: 100px;" src="" alt="">
                                            <input type="hidden" readonly  id="pictograma" name="pictograma" value="{{$picto->pictograma}}"  class="form-control-file"/>
                                        </div>
                                        <div class="form-dato">
                                            <label for="">Nombre Pictograma</label>
                                            <input required type="Text" name="nomPicto" value="{{$picto->nomPicto}}"/>
                                        </div>
                                        <div class="form-dato">
                                            <label for="">Descripcion Pictograma</label>
                                            <input type="Text" name="descPicto" value="{{$picto->descPicto}}"/>
                                        </div>
                                        <div class="form-dato">
                                            <label for="color">Selecciona Categoria</label>
                                            <select id="color" name="idCatPicto">
                                                @foreach($categorias as $cat)
                                                    <option value="{{$cat->idCatPicto}}" >{{$cat->nomCat}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    <button  type="submit" style="background:steelblue;border:solid;border-radius:45px;">
                                        <h1>Editar Pictograma</h1>
                                    </button>
                                </form>
                            </div>
                    </div> 
    </div>
</div> 

</body>
</html>