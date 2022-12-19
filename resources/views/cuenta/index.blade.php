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


.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}
.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}
.modalDialog > div {
	width: 500px;
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
  -webkit-transition: opacity 400ms ease-in;
-moz-transition: opacity 400ms ease-in;
transition: opacity 400ms ease-in;
}
.close {
	background: #ff0023;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}
.close:hover { background: #00d9ff; }






    </style>

</head>
<body style="background-image: url(./img/bg.png)">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        
        <a href="{{route('home.index')}}"><img src="./img/Logo.png"></a>
        
        </nav>

    <div class="row" style="display: flex;margin-left: 108px;margin-top: 100px;">
        <div class="mascota">
        <img src="./img/Lynx.png">
    </div>
    <div class="container-app">
        <div id="app" class="form-container">
            <form class="form" method="POST" action="{{route('usuario.update')}}" >
                @csrf
                <div class="input-container">
                    <div class="form-dato">
                        <label for="">Nombre</label>
                        <input required type="text" name="NomUsuario" value="{{$usuario->NomUsuario}}"/>
                    </div>
                    <div class="form-dato">
                        <label for="">Apellido</label>
                        <input required type="text" name="ApeUsuario" value="{{$usuario->ApeUsuario}}"/>
                    </div>
                    <div class="form-dato">
                        <label for="">Correo</label>
                        <input readonly  name="email" value="{{$usuario->Email}}"/>
                    </div>
                    <div class="form-dato">
                        <label for="">Contraseña</label>
                        <input required  name="password" value="{{$usuario->password}}"/>
                    </div>
                    
                </div>
                <div class="form-dato" style="margin-bottom: 40px;">
                        <label for="">Clave Parental</label>
                        <input required type="text" name="clave" value="{{$usuario->clave}}"/>
                    </div>
                <button type="submit" >
                    <img src="./img/Send.png" alt="Enviar informacion" class="button-img">
                </button>
            </form>
        </div>
        <div class="row-opciones">
                <div class="cerrar sesion" style="margin-top: 11px;display:flex;flex-direction:column-reverse;">
                    <label for="" style="margin-top: 23px;">Cerrar Sesion</label>
                    <a href="{{route('usuario.logout')}}"><button >
                        <img style="background-color: blue;" src="./img/exit.png" alt="Enviar informacion" class="button-img">
                    </button></a>
                </div>
                <div class="borrar Cuenta" style="display:flex;flex-direction:column-reverse;">
                    <label for="">Borrar Cuenta</label>
                    <button class="limpiar-button" style="width: 167px;">
                        <a href="#eliminarCuenta"><img src="./img/cancelar.png" style="height=100px;width: 160px;;"></a>
                    </button>
                </div>
        </div>
    </div>
    </div>
    <div id="eliminarCuenta" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            <div class="SeguroParental" style="display:flex;flex-direction: column;align-items:center;">
                <h3>¿Seguro de Eliminar tu Cuenta?</h3>
                <hr>
                <img src="./img/LynxAdios.png" alt="" style="width:230px;">
                <div class="row-ida" style="display:flex;flex-direction:column;align-items:center;">
                    <label for="">Borrar Cuenta</label>
                    <a href="{{route('usuario.delete')}}">
                        <button >
                            <img style="background-color: blue;" src="./img/trash.png" alt="Enviar informacion" class="button-img">
                        </button>
                    </a>
                </div>
            </div>            
        </div>
    </div>
</div> 

</body>
</html>