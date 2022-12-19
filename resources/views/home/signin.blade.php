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

.form-container {
    width: 80%;
    height: fit-content;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: auto;
}
.form {
    
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
    background-color: #BA5A2D;
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

.img-container {
    width: 55%;
    display: flex;
    justify-content: space-between;
    padding: 20px 0;
}

.img-container img {
    width: 200px;
    height: 200px;
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

    <nav class="navbar">
        
    <a href="{{route('home.login')}}"><img src="./img/Logo.png"></a>
    
    </nav>

    <div id="app" class="form-container">
    <div id="app" class="form-container">
        
        <form method="POST" action="{{route('usuario.signin')}}" class="form" @submit.prevent="HandleSubmit">
            @csrf
            <div class="input-container">
                <div class="form-dato">
                    <label for="">Nombre</label>
                    <input required type="text" name="nombre" placeholder="Ingrese su Nombre">
                </div>
                <div class="form-dato">
                    <label for="">Apellido</label>
                    <input required type="text" name="apellido" placeholder="Ingrese su Apellido">
                </div>
                <div class="form-dato">
                    <label for="">Email</label>
                    <input required type="email" name="email" placeholder="Ingrese su Email">
                </div>
                <div class="form-dato">
                    <label for="">Repita el Email</label>
                    <input required type="email" name="email2" placeholder="Ingrese su Email">
                </div>
                <div class="form-dato">
                    <label for="">Contraseña</label>
                    <input required type="text" name="password" placeholder="Ingrese su Contraseña">
                </div>
                <div class="form-dato">
                    <label for="">Repita contraseña</label>
                    <input required type="text" name="password2" placeholder="Ingrese su Contraseña">
                </div>
                
            </div>
            <div class="form-dato" style="margin-bottom: 40px;">
                    <label for="">clave parental</label>
                    <input required type="text" name="clave" placeholder="Ingrese Clave">
                </div>
            <button type="submit" >
                <img src="./img/Send.png" alt="Enviar informacion" class="button-img">
            </button>
        </form>
    </div>
        <div class="img-container">
            <img src="./img/niña.png" alt="">
            <img src="./img/niño.png" alt="">
        </div>
    </div>

</body>
</html>