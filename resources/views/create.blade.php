<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<div class="col-md-12"><h3 class="head">USUARIO</h3>
        <p>PÁGINA PARA LOS USUARIOS</p>
                  </div>
                
                <br><br><br>               					   
               <table>
               <h1>Usuarios:<br></h1>
                @foreach($log as $l)
                <tr>
                    <td>{{$l->usuarios_id}}</td>
                    <td>{{$l->log}}</td>
                    <td>{{$l->fecha}}</td>
                </tr>
                @endforeach
                </tr></table>

                <h1>*************</h1>

                  {!!Form::open(['route'=>'RESTService.movimiento.store','method','POST'])!!} 
        
                  <LABEL for="nombre">usuario id: </LABEL>
                  <INPUT type="text" name="id"><BR>
                  <LABEL for="apellido">log: </LABEL>
                  <INPUT type="text" name="log"><BR>
                   <LABEL for="apellido">fecha: </LABEL>
                  <INPUT type="text" name="fecha"><BR> 
		              
                      {!!Form::submit('enviar',['class'=>'','placeholder'=>'Nombre'])!!}

                {!!Form::close()!!}


</body>
</html>