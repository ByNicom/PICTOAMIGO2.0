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

    .taskOptions-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 20px 0;
    }

    .addTask {
        border: 5px solid black;
        border-radius: 25px;
        background-color: yellow;
        color: green;
        padding: 10px 20px;
    }

    .addTask-button img{
        width: 50px;
        height: 50px;
        
    }

    .schedule {
        margin-left: 10%;
        width: 80%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 5px solid black;
    }

    .header,.row {
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    .header_item {
        width: 100%;
        text-align: center;
    }

    .row_item {
        width: 100%;
        text-align: center;
        background-color: white;
    }

    .header_item:nth-child(1){
        background-color: lightskyblue;
    }

    .header_item:nth-child(2){
        background-color: green;
    }

    .header_item:nth-child(3){
        background-color: yellow;
    }

    .header_item:nth-child(4){
        background-color: orange;
    }

    .header_item:nth-child(5){
        background-color: rgb(229, 103, 103);
    }

    .header_item:nth-child(6){
        background-color: rgb(254, 95, 206);
    }

    .header_item:nth-child(7){
        background-color: rgb(224, 74, 244);
    }

    .header_item:nth-child(8){
        background-color: rgb(161, 114, 227);
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
        width: 400px;
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
        background: #606061;
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

    .img-horario{
        width: 80px;
        height: 70px;
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
<div class="main" style="display: flex;flex-direction: column;align-items: center;">
    <section class="taskOptions-container">
            <div class="addTask">
                <h1>Agregar Actividad</h1>
                <button class="addTask-button" style="margin-top:15px;background: none;border: none;">
                    <a href="#agregarPictograma">
                        <img src="{{asset('img/plus.png')}}" alt="Agregar tarea">
                    </a>
                </button>
            </div>
            
        </section>
        <table style="overflow:scroll; width:500px; height:200px; background:#fff;" class="table table-bordered" method="GET" action="{{route('pictograma.all')}}" >
            <thead>
                <tr >
                    <th class="header_item">Horario</th>
                    <th class="header_item">Lunes</th>
                    <th class="header_item">Martes</th>
                    <th class="header_item">Miercoles</th>
                    <th class="header_item">Jueves</th>
                    <th class="header_item">Viernes</th>
                    <th class="header_item">Sabado</th>
                    <th class="header_item">Domingo</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 6; $i<23; $i++)
                    <tr>
                        <td id="fila_{{$i}}_col_0">{{$i}}:00</td>
                        <td id="fila_{{$i}}_col_1"></td>
                        <td id="fila_{{$i}}_col_2"></td>
                        <td id="fila_{{$i}}_col_3"></td>
                        <td id="fila_{{$i}}_col_4"></td>
                        <td id="fila_{{$i}}_col_5"></td>
                        <td id="fila_{{$i}}_col_6"></td>
                        <td id="fila_{{$i}}_col_7"></td>
                    </tr>
                @endfor
            </tbody>
            </table>
        <div id="agregarPictograma" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <div class="SeguroParental"><h3>Agregar Actividad</h3></div>
                                <hr>
                                <form  method="POST" action="{{route('horario.store')}}">
                                    @csrf
                                    <div class="input-container">
                                        <div class="form-dato">
                                            <label for="Picto">Seleccionar Pictograma</label>
                                            <select name="idPicto">
                                                @foreach($pictos as $p)
                                                    <option value="{{$p->idPicto}}">{{$p->nomPicto}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-dato">
                                            <label for="Picto">Seleccionar Dia</label>
                                            <select name="diaSem">
                                                <option value="Lunes">Lunes</option>
                                                <option value="Martes">Martes</option>
                                                <option value="Miercoles">Miercoles</option>
                                                <option value="Jueves">Jueves</option>
                                                <option value="Viernes">Viernes</option>
                                                <option value="Sabado">Sabado</option>
                                                <option value="Domingo">Domingo</option>
                                            </select>
                                        </div>
                                        <div class="form-dato">
                                            <label for="">Hora Actividad</label>
                                            <select name="fecha" id="">
                                                @for($i = 6; $i<23; $i++)
                                                    <option value="{{$i}}:00">{{$i}}:00</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <button  type="submit">
                                        <img src="./img/Send.png" alt="Enviar informacion" class="button-img">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div> 
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script>

        $('#x').click(function(){
            
            const synth = window.speechSynthesis;
            var text = "{{$p->nomPicto}}";
            
            const utterThis = new SpeechSynthesisUtterance(text);

            synth.speak(utterThis);
        }); 

        $('#y').click(function(){
            
            const synth = window.speechSynthesis;
            var text = "a";
            
            const utterThis = new SpeechSynthesisUtterance(text);

            synth.speak(utterThis);
        }); 


        var dias = [];
        dias['lunes']  = 1;
        dias['martes']  = 2;
        dias['miercoles']  = 3;
        dias['jueves']  = 4;
        dias['viernes']  = 5;
        dias['sabado']  = 6;
        dias['domingo']  = 7;



        @foreach($pictos_semana as $picto)
            var diaSemana = "{{$picto->diaSem}}";
            var fecha = "{{$picto->fecha}}";
            var nomPicto = "{{$picto->nomPicto}}";

            var hora = parseInt(fecha.split(":")[0]);
            var numSemana = dias[diaSemana.toLowerCase()];
            

            $("#fila_"+hora+"_col_"+numSemana).append(
                    $("<img>").addClass("img-horario").attr({src:"{{Storage::url($picto->pictograma)}}",title:"{{$picto->nomPicto}}",onclick:"sonido(title)"}),
            );

        @endforeach



        function adulto() {
            $usuario="";
            if (document.getElementById('flexSwitchCheckDefault').checked) {
                console.log("adulto");
                

                const synth = window.speechSynthesis;
                var text = "adulto";
                
                const utterThis = new SpeechSynthesisUtterance(text);

                synth.speak(utterThis);


                return $usuario;
                
            } else {
                console.log("niño");

                const synth = window.speechSynthesis;
                var text = "niño";
                
                const utterThis = new SpeechSynthesisUtterance(text);

                synth.speak(utterThis);

                return $usuario;
            }
        }


        function sonido(title){
            const synth = window.speechSynthesis;
                var text = title;
                
                const utterThis = new SpeechSynthesisUtterance(text);

                synth.speak(utterThis);
        
        }




    </script>

</body>
</html>