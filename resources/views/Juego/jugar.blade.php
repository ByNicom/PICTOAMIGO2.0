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
}.modalDialog {
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
                <button class="reproduce-button" id="x" style="margin-top:38px;border:solid 5px;border-radius:150px;background:yellow;height:250px;width:250px;">
                    <img src="./img/voz.png" style="width:120px;border:solid4px;border-radius:89px;height:100px;background:yellow;padding:5px;">
                </button>
                <label style="font-size: 80px;font-weight: 600;font-family: cursive;">{{$pictoElegido->nomPicto}}</label>
            </div>
            <div class="filaPic1" style="display: flex;flex-direction: column;">
            <div class="pictos1" style="display: flex;">
                <div class="pictos1" style="margin-right: 30px;"><button id="picto1"><a href="#selecPicto">
                    @foreach ($array_pictos1 as $p1)
                        <div class="pictogramas1">
                            <img id="seleccion" src="{{Storage::url($p1->pictograma)}}" alt="{{$p1->nomPicto}}" height="180" width="180">
                        </div>
                    @endforeach</a></button>
                </div>
                <div class="pictos2" style="margin-right: 30px;"><button id="picto2"><a href="#selecPicto">
                    @foreach ($array_pictos2 as $p2)
                        <div class="pictogramas2">
                            <img id="seleccion" src="{{Storage::url($p2->pictograma)}}" alt="{{$p2->nomPicto}}" height="180" width="180">
                        </div>
                    @endforeach</a></button>
                </div>
                </div>
                <div class="filaPic2" style="display: flex;">
                <div class="pictos3" style="margin-right: 30px;"><button id="picto3"><a href="#selecPicto">
                    @foreach ($array_pictos3 as $p3)
                        <div class="pictogramas3">
                            <img id="seleccion" src="{{Storage::url($p3->pictograma)}}" alt="{{$p3->nomPicto}}" height="180" width="180">
                        </div>
                    @endforeach</a></button>
                </div>
                <div class="pictos4" style="margin-right: 30px;"><button id="picto4"><a href="#selecPicto">
                    @foreach ($array_pictos4 as $p4)
                        <div class="pictogramas4">
                            <img id="seleccion" src="{{Storage::url($p4->pictograma)}}" alt="{{$p4->nomPicto}}" height="180" width="180">
                        </div>
                    @endforeach</a></button>
                </div>
            </div>
            <div id="selecPicto" class="modalDialog">
                <div>
                    <div class="input-container">
                        <div id="selecPictoErr" class="form-dato">
                            <h3>Errado</h3>
                            <form  method="POST" action="{{route('pregunta.store')}}" enctype="multipart/form-data">
                                @csrf
                                
                                <input type="hidden" name="idPicto" value="{{$pictoElegido->idPicto}}"/>
                                <input type="hidden" name="pregunta" value="¿Cual es el/la: {{$pictoElegido->nomPicto}}?"/>
                                <input type="hidden" name="respuesta" value=0 />
                            </form>
                            <button  type="submit">
                                <img src="./img/cancelar.png"  alt="Enviar informacion" class="button-img">
                            </button>
                        </div>
                        <div id="selecPictoCorr" class="form-dato">
                            <h3>Correcto</h3>
                            <form  method="POST" action="{{route('pregunta.store')}}" enctype="multipart/form-data">
                                @csrf
                                
                                <input type="hidden" name="idPicto" value="{{$pictoElegido->idPicto}}"/>
                                <input type="hidden" name="pregunta" value="¿Cual es el/la: {{$pictoElegido->nomPicto}}?"/>
                                <input type="hidden" name="respuesta" value=1 />
                            </form>
                            <button  type="submit">
                                <img src="./img/cancelar.png"  alt="Enviar informacion" class="button-img">
                            </button>
                        </div>                                
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script>
        
        $('#x').click(function(){
            const synth = window.speechSynthesis;
            let text = "{{$pictoElegido->nomPicto}}";
            const utterThis = new SpeechSynthesisUtterance(text);

            synth.speak(utterThis);
        }); 
        $('#picto1').click(function(){
            console.log("2");
            const synth = window.speechSynthesis;
            let text = ("{{$p1->nomPicto}}");
            if(text != "{{$pictoElegido->nomPicto}}"){
                $("#selecPictoErr").show();
                $("#selecPictoCorr").hide();
                const utterThis = new SpeechSynthesisUtterance("Vamos! sigue intentando");
                synth.speak(utterThis);
            }else{
                // console.log("correcto");
                $("#selecPictoCorr").show();
                $("#selecPictoErr").hide();
                const utterThis = new SpeechSynthesisUtterance("Felicidades, es la correcta!!");
                synth.speak(utterThis);
            }
        }); 
        $('#picto2').click(function(){
            console.log("2");
            const synth = window.speechSynthesis;
            let text = ("{{$p2->nomPicto}}");
            if(text != "{{$pictoElegido->nomPicto}}"){
                $("#selecPictoErr").show();
                $("#selecPictoCorr").hide();
                const utterThis = new SpeechSynthesisUtterance("Vamos! sigue intentando");
                synth.speak(utterThis);
            }else{
                // console.log("correcto");
                $("#selecPictoCorr").show();
                $("#selecPictoErr").hide();
                const utterThis = new SpeechSynthesisUtterance("Felicidades, es la correcta!!");
                synth.speak(utterThis);
            }
        });
         $('#picto3').click(function(){
            console.log("2");
            const synth = window.speechSynthesis;
            let text = ("{{$p3->nomPicto}}");
            if(text != "{{$pictoElegido->nomPicto}}"){
                $("#selecPictoErr").show();
                $("#selecPictoCorr").hide();
                const utterThis = new SpeechSynthesisUtterance("Vamos! sigue intentando");
                synth.speak(utterThis);
            }else{
                // console.log("correcto");
                $("#selecPictoCorr").show();
                $("#selecPictoErr").hide();
                const utterThis = new SpeechSynthesisUtterance("Felicidades, es la correcta!!");
                synth.speak(utterThis);
            }
        });
         $('#picto4').click(function(){
            console.log("2");
            const synth = window.speechSynthesis;
            let text = ("{{$p4->nomPicto}}");
            if(text != "{{$pictoElegido->nomPicto}}"){
                $("#selecPictoErr").show();
                $("#selecPictoCorr").hide();
                const utterThis = new SpeechSynthesisUtterance("Vamos! sigue intentando");
                synth.speak(utterThis);
            }else{
                // console.log("correcto");
                $("#selecPictoCorr").show();
                $("#selecPictoErr").hide();
                const utterThis = new SpeechSynthesisUtterance("Felicidades, es la correcta!!");
                synth.speak(utterThis);
            }
        }); 
        
    </script>
</body>


</html>