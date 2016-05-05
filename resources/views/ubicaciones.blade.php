@include('includes.header')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
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
                                      Ubicaciones
                                  </li>

                              </ol>
                          </div>
                      </div>


                      <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#add-category">ALTA UBICACIONES</button>

                      <p class="text-muted m-b-30 font-13"></p>

                
                      <!-- Inicia Tabla -->
                      <div class="row">
                        <div class="col-sm-12">
                            <div class=" table-responsive">


                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Ubicacion</th>
                                            <th>Clave</th>
                                            <th>Descripcion</th>

                                            <th>Activo</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>

                            @foreach($ubicaciones as $ubicacion)
                                    <tbody>
                                        <tr>
                                            <td>{{$ubicacion->ubicacion}}</td>
                                            <td>{{$ubicacion->clave}}</td>
                                            <td>{{$ubicacion->descripcion}}</td>
                                          
                                            @if($ubicacion->activo==1)
                                                <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            @else
                                                <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                            @endif
                                          

                                            <td class="editbtn">
                                                

                                                <span data-toggle="modal" data-target="#edit-category">
                                                <i class="fa fa-pencil-square-o" title="Editar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                                                </i>
                                                </span> 
                                            {!!link_to('ubicaciones/ubicacionesdel/'.$ubicacion->id, '',array('class'=>'fa fa-ban','style'=>'color:rgb(121,121,121);' , 'title'=>'Eliminar','data-toggle'=>'tooltip', 'data-placement'=>'top', 'data-original-title'=>'Tooltip on top')) !!}

                                               
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

    </div> <!-- content-page -->








<!-- ****************************************** modal ubicaciones ************************************ ->

<!-- Modal Alta -->
{!!Form::open(['route'=>'ubicacion.store','method','POST'])!!} 
<div class="modal fade none-border" id="add-category" style="display: none;">
    <div class="modal-dialog mdlcustm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><strong>Alta</strong> Ubicaciones</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-md-12">
            <label class="control-label">Ubicaciones</label>
            {!!Form::text('ubicacion','',['class'=>'form-control form-white','placeholder'=>'Nombre'])!!}
                        </div>
                        <div class="col-md-12">
            <label class="control-label">Clave</label>
            {!!Form::text('clave','',['class'=>'form-control form-white','placeholder'=>'Clave'])!!}
                        </div>

                        <div class="col-md-12">
            <label class="control-label">Descripcion</label>
            {!!Form::text('descripcion','',['class'=>'form-control form-white','placeholder'=>'Descripcion'])!!}
                        </div>

            <div class="col-md-6">
            <label class="control-label">Activo</label>
                {!! Form::select('activo',array('si' => 'Si', 'no' => 'No'), null,['class'=>'form-control form-white']) !!}
                    

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


{!!Form::open(['route'=>'ubicacion.store','method','POST'])!!}
<!-- Modal Editar -->
<div class="modal fade none-border" id="edit-category" style="display: none;">
    <div class="modal-dialog mdlcustm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><strong>Editar</strong> ubicacion</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">

                        <div class="col-md-12">
                            <label class="control-label">Ubicacion</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>



                        <div class="col-md-12">
                            <label class="control-label">Clave</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>


                        <div class="col-md-12">
                            <label class="control-label">Descripcion</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>

                        <div class="col-md-6">
                            <label class="control-label">Activo</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Si</option>
                                <option value="danger">No</option>

                            </select>
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
 {!!Form::close()!!}

<!-- *********************************** modal ubicaciones **************************************-->


    @include('includes.footer')