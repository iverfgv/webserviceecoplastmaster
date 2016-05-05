@include('includes.header')


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">




            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Dashboard </h4>
                                <ol class="breadcrumb">
                                    <li>
                                      Catalogos
                                  </li>
                                  <li>
                                      Usuarios
                                  </li>

                              </ol>
                          </div>
                      </div>


                      <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#add-category">ALTA USUARIOS</button>

                      <p class="text-muted m-b-30 font-13"></p>






                      <!-- Inicia Tabla -->
                      <div class="row">
                        <div class="col-sm-12">
                            <div class=" table-responsive">



                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Usuario</th>
                                            <th>Nombre</th>
                                            <th>Perfiles</th>
                                            <th>Ubicaciones</th>
                                            <th>Activo</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>

                                @foreach($usuarios as $usuario)
                                    <tbody>
                                        <tr>
                                            <td>{{$usuario->usuario}}</td>
                                            <td>{{$usuario->nombre}}</td>
                                            <td>{{$usuario->perfil}}</td>
                                            <td>{{$usuario->ubicacion}}</td>
                                            
                                            @if($usuario->activo==1)
                                                <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            @else
                                                <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                            @endif                                         

                                            <td class="editbtn">
                                                

                                                <span data-toggle="modal" data-target="#edit-category">
                                                <i class="fa fa-pencil-square-o" title="Editar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                                                </i>
                                                </span> 

                                                {!!link_to('usuarios/usuariodel/'.$usuario->id, '',array('class'=>'fa fa-ban','style'=>'color:rgb(121,121,121);' , 'title'=>'Eliminar','data-toggle'=>'tooltip', 'data-placement'=>'top', 'data-original-title'=>'Tooltip on top')) !!}
                                            </td>
                                        </tr>

                                    </tbody>
                                @endforeach
                                </table>

                            </div>
                        </div>
                    </div>
                    <!-- Termina Tabla -->





                  </div>
              </div>
          </div>


      </div> <!-- container -->

  </div> <!-- content -->

</div><!-- content-page -->



<!-- Modal Alta -->
{!!Form::open(['route'=>'usuario.store','method','POST'])!!} 
<div class="modal fade none-border" id="add-category" style="display: none;">
    <div class="modal-dialog mdlcustm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><strong>Alta</strong> usuarios</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-md-12">
            <label class="control-label">Usuario</label>
            {!!Form::text('usuario','',['class'=>'form-control form-white','placeholder'=>'Usuario'])!!}
                        </div>

                        <div class="col-md-12">
            <label class="control-label">Nombre</label>
            {!!Form::text('nombre','',['class'=>'form-control form-white','placeholder'=>'Nombre'])!!}
                        </div>

                         <div class="col-md-12">
            <label class="control-label">Contraseña</label>
            {!!Form::text('contrasena','',['class'=>'form-control form-white','placeholder'=>'Contraseña'])!!}
                        </div>

                        <div class="col-md-12">
            <label class="control-label">Perfiles</label>
             {!! Form::select('perfil',App\perfiles::lists('perfil','id'), null,['class'=>'form-control form-white']) !!}
                        </div>

                        <div class="col-md-12">
            <label class="control-label">Ubicaciones</label>
            {!! Form::select('ubicacion',App\ubicaciones::lists('ubicacion','id'), null,['class'=>'form-control form-white']) !!}
                        </div>

                        <div class="col-md-6">
                            <label class="control-label">Activo</label>
                            {!! Form::select('activo',array('si' => 'Si', 'no' => 'No'), null,['class'=>'form-control form-white']) !!}
                        </div>
                    </div>
                </form>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                {!!Form::submit('guardar',['class'=>'btn btn-default'])!!}
            </div>
        </div>
    </div>
</div>
{!!Form::close()!!}
<!-- /Modal Alta -->


<!-- Modal Editar -->
<div class="modal fade none-border" id="edit-category" style="display: none;">
    <div class="modal-dialog mdlcustm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><strong>Editar</strong> empresas</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">

                        <div class="col-md-12">
                            <label class="control-label">Empresa</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>



                        <div class="col-md-12">
                            <label class="control-label">Razon Social</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>


                        <div class="col-md-12">
                            <label class="control-label">Tipo de empresa</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>

                    </div>
                </form>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default waves-effect waves-light save-category" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal Editar -->

@include('includes.footer')