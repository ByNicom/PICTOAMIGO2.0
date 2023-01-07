<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
        width: 100%;
        height: fit-content;
        padding: 5px 20px;
        background-color: #a6dbf4;
    }

    main {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .titulo label{
        font-size: 47px;
            border: 5px solid black;
            border-radius: 25px;
            background-color: yellow;
            color: cornflowerblue;
            font-weight: bold;
            
    }

    .picto img {
        width: 161px;
        background: none;
    }

    .mainVista{
        padding-top: 80px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    .Busqueda{
        display: flex;
        flex-direction: row;
        margin-left: 20px;
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

    .header{
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    .buscar{
        display: flex;
    }

    .categorias{
        display: flex;
        margin-left: 36px;
    }
    .table{
        margin-top: 30px;
        margin-left: 20px;
        background-color: lemonchiffon;
    }
    .columnaBusqueda{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .FraseCreada{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .AgregarPictograma{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .Frase{
        border: 3px solid black;
        border-radius: 15px;
        height: 100px;
        width: 80%;
        background-color: antiquewhite;
        color: cornflowerblue;
        font-weight: bold;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .botones{
        display: flex;
        justify-content: space-between;
        width: 300px;
    }
    button{
        background: none;
        border: none;
    }
    .cuenta a img {
        height: 70px;
        width: 70px;
        border: solid;
        border-color: black;
        border-radius: 40px;
        background-color: white;
    }
    .row{
        border:1px;
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



</style>
<style>
    
    .Frase img{
        width: 80px;
        height: 60px;
    }
</style>
    

</head>
<body style="background-image: url(./img/bg.png)">

<nav >
        <div class="row-navbar" style="display: flex;">
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
</nav>

    <div class="mainVista">
        <div class="columnaBusqueda">
            <form class="form" method="POST" action="{{route('pictograma.store')}}">
                @csrf
                <div class="Busqueda">
                    <label for="busqueda">B&uacute;squeda</label> <br><br>
                    <div class="buscar">
                        <input type="text" name="busqueda" id="busqueda" class="form-control mx-3" required>
                    </div>
                <div class="form-dato">
                    <select id="color" name="idCatPicto" class="form-control mx-3">
                        @foreach($categorias as $cat)
                            <option value="{{$cat->idCatPicto}}" >{{$cat->nomCat}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="boton">
                    <input type="submit" value="B&uacute;scar" class="btn btn-success">
                </div>
            </form>
        </div>

    
    {{-- <div class="mainVista">
        <div class="columnaBusqueda">
            <div class="busqueda">
                <div class="buscar"></div>
                <form class="form" method="POST" action="{{route('pictograma.buscar')}}">
                    @csrf

                    <label for="busqueda">Buscar: </label>
                    <input type="text" name="busqueda" id="busqueda" required>


                    <select id="color" name="idCatPicto">
                        @foreach($categorias as $cat)
                            <option value="{{$cat->idCatPicto}}" >{{$cat->nomCat}}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn btn-success">Buscar</button>

                </form>
                </div>


            </div>
        </div> --}}



         


<table style="overflow:scroll; width:500px; height:200px;" class="table table-bordered" method="GET" action="{{route('pictograma.all')}}" >
    <thead>
    <tr >
      <th width="200" scope="col">Id Pictograma</th>
      <th width="200" scope="col">Pictograma</th>
      <th width="200" scope="col">Nombre</th>
      <th width="200" scope="col">Detalle</th>
      <th width="200" scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pictogramas as $p)
    <tr class="column" >
        <td width="200">{{$p->idPicto}}</td>
        <td width="200"><div class="picto"><button class="picto-img" id="img-{{$p->idPicto}}"><img src="{{Storage::url($p->pictograma)}}" ></button></div></td>
        <td width="200">{{$p->nomPicto}}</td>
        <td width="200">{{$p->descPicto}}</td>
        <td width="200">
            <div class="botonesPicto">
                <a href="{{route('pictograma.edit',$p->idPicto)}}"><button>Editar</button></a>
                <a href="{{route('pictograma.borrar',$p->idPicto)}}"><button>Borrar</button></a>
            </div>
        </td>
    </tr>
     @endforeach
  </tbody>
 
</table>
        </div>
        <div class="columnFrase">
            <div class="FraseCreada">
                
                <div class="titulo"><label id="a" for="">Frase Creada</label></div>
                <div class="botones">
                    <button class="reproduce-button" style="margin-top:38px;border:solid 5px;border-radius:81px;background:yellow;height:93px;width:100px;">
                        <img src="./img/voz.png" style="width:82px;border:solid4px;border-radius:89px;height:60px;background:yellow;padding:5px;">
                    </button>
                    <button class="limpiar-button" style="margin-top:20px">
                        <img src="./img/cancelar.png" style="height=100px;width:146px;">
                    </button>
                </div>
                <div class="Frase">
                    
                </div>
            </div>
            <div class="AgregarPictograma">
                <div class="titulo"> <label for="">Agregar Pictograma</label></div>
                    <button class="addTask-button" style="margin-top:20px ">
                        <a href="#agregarPictograma">
                        <img src="./img/plus.png" alt="Agregar tarea" ></a>
                    </button>
                    <dialog id="myDialog">
                        <h3>This is the heading</h3>
                        <p>This is the dialog paragraph.</p>
                        <button id="hide">Close</button>                                    
                    </dialog>
                    
                    

                    <div id="openModal" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <div class="SeguroParental"><h3>Seguro Parental</h3></div>
                                <form class="form" @submit.prevent="HandleSubmit">
                                    <div class="input-container" style="display:flex;flex-direction:column;align-items:center;">
                                        <div class="form-dato" style="margin-bottom: 40px;">
                                            <label for=""></label>
                                            <input/>
                                        </div><button  >
                                            <a href="#agregarPictograma">
                                                <img src="./img/Send.png" alt="Enviar informacion" class="button-img" style="height: 82px;">
                                            </a>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div id="agregarPictograma" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <div class="SeguroParental"><h3>Agregar Pictograma</h3></div>
                                <form  method="POST" action="{{route('pictograma.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-container">
                                        <div class="form-dato">
                                            <label for="">Nombre Pictograma</label>
                                            <input type="Text" name="nomPicto"/>
                                        </div>
                                        <div class="form-dato">
                                            <label for="">Descripcion Pictograma</label>
                                            <input type="Text" name="descPicto"/>
                                        </div>
                                        <div class="form-dato">
                                            <label for="color">Selecciona Categoria</label>
                                            <select id="color" name="idCatPicto">
                                                @foreach($categorias as $cat)
                                                    <option value="{{$cat->idCatPicto}}" >{{$cat->nomCat}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-dato">
                                            <label for="">Agregar Pictograma</label>
                                            <input type="file" id="pictograma" name="pictograma" class="form-control-file" required/>
                                        </div>
                                    <button  type="submit">
                                        <img src="./img/Send.png" alt="Enviar informacion" class="button-img">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div> 



                </div>     
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script>
            function adulto() {
                $usuario="";
                var dialog = document.getElementById('myDialog'); 
                if (document.getElementById('flexSwitchCheckDefault').checked) {
                    console.log("adulto");
        	        dialog.show(); 

                    return $usuario;
                    
                } else {
                    console.log("niño");
                    dialog.close(); 
                    return $usuario;
                }
            }

            $(".reproduce-button").click(function(){
                const synth = window.speechSynthesis;
                
                
                const utterThis = new SpeechSynthesisUtterance(frase);

                synth.speak(utterThis);
            });

            $(".limpiar-button").click(function(){
                $('.Frase').html("");
                frase=[];
                valores=[];
                valores_pic = [];

            });

            $(".picto-img").click(function(){

                $("#"+this.id).click(function(event){
                    var existe=false;
                    valores=[];
                    var children = $("tr td")[0].innerHTML;

                    $(this).parents("tr").find('td:eq(2)').each(function(){
                    valores.push(this);
                    });
                    
                    console.log(valores[0].innerHTML)
                    picto=valores[0].innerHTML;
                    existe=frase.includes(picto);
                    if(existe==false){
                        frase.push(valores[0].innerHTML);
                    }else{
                        console.log("no se puede añadir mas de 1 el mismo picto");
                    }

                    //obtener imagen

                    let src_imagen = $("#"+this.id+" img").attr("src");
                    

                    existe=valores_pic.includes(src_imagen);
                    if(!existe){
                        valores_pic.push(src_imagen);
                    }else{
                        console.log("no se puede añadir mas de 1 el mismo picto");
                    }

                    agregarImagen(valores_pic);
                });

                

            });
            var frase=[];
            var valores=[];
            var valores_pic=[];


            function agregarImagen(valores_pic){
                
                //$('.Frase').innerHTML = "";
                $(".Frase").html("");
                

                valores_pic.forEach(element => {

                    let img = new Image();
                    img.src = element;
                    
                    $('.Frase').append(img);
                });

                valores_pic = [];
            
            }



        </script>
    </div>
    
</body>

</html>