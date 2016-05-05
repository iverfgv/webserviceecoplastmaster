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
                        @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
                          {{Session::get('message')}}
                        </div>
                        @endif
                            <div class="col-sm-12">
                                <h4 class="page-title">Dashboard </h4>
                                <ol class="breadcrumb">

                                    <li>
                                      Embarques
                                  </li>

                              </ol>
                          </div>
                      </div>



                      <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#add-category">ALTA EMBARQUES</button>

                      <p class="text-muted m-b-30 font-13"></p>

                      <!-- Inicia Tabla -->
                      <div class="row">
                        <div class="col-sm-12">
                            <div class=" table-responsive">



                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Fecha</th>
                                            <th>Peso</th>
                                            <th>Material</th>
                                            <th>Usuario</th>
                                            <th>Ubicacion</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>

                                    @foreach($embarques as $emb)
                                    <?php $fecha = substr($emb->fechalocal,0,10); ?>
                                    <tbody>
                                        <tr>

                                            <td> {{ $emb->id }}</td>
                                            <td> {{ $fecha }}</td>
                                            <td> {{ $emb->peso }}</td>
                                            <td> {{ $emb->material  }}</td>
                                            <td> {{ $emb->usuari  }}</td>
                                            <td> {{ $emb->ubica }}</td>

                                            <td class="editbtn">

                                                <span data-toggle="modal" data-target="#edit-category">
                                                    <i class="fa fa-pencil-square-o" title="Editar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                                                    </i>
                                                </span> 

                                             
                                                {!!link_to('embarques/embarquedel/'.$emb->id, '',array('class'=>'fa fa-ban','style'=>'color:rgb(121,121,121);' , 'title'=>'Eliminar','data-toggle'=>'tooltip', 'data-placement'=>'top', 'data-original-title'=>'Tooltip on top')) !!}
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


</div><!-- content-page-->




<!-- Modal alta -->
{!!Form::open(['route'=>'embarques.store','method'=>'POST'])!!}
<div class="modal fade none-border" id="add-category" style="display: none;">
    <div class="modal-dialog mdlcustm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><strong>Alta</strong> embarques</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">

                        <div class="col-md-12">
                            <label class="control-label">ID</label>
                            {!!Form::text('id','',['class'=>'form-control form-white'])!!}
                        </div>
                        <div class="col-md-12">
                            <label class="control-label">Fecha</label>
                             {!!Form::date('fecha','',['class'=>'form-control form-white'])!!}
                        </div>


                        <div class="col-md-12">
                            <label class="control-label">Peso</label>
                           {!!Form::text('peso','',['class'=>'form-control form-white'])!!}
                        </div>
                        <div class="col-md-12">
                            <label class="control-label">Cancelado</label>
                            {!!Form::select('cancelado',array('1' => 'Si', '0' => 'No'),null,['class'=>'form-control form-white'] )!!}
                        </div>
                        <div class="col-md-12">
                            <label class="control-label">Codigo de control</label>
                           {!!Form::text('codigo','',['class'=>'form-control form-white'])!!}
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Material</label>
                           {!!Form::select('material', \App\materiales::lists('material','id'),null,['class'=>'form-control form-white'] )!!}
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Usuario</label>
                            {!!Form::select('usuario', \App\usuarios::lists('usuario','id'),null,['class'=>'form-control form-white'] )!!}
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Ubicacion</label>
                           {!!Form::select('ubicacion', \App\ubicaciones::lists('ubicacion','id'),null,['class'=>'form-control form-white'] )!!}
                        </div>

                    </div>
                </form>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                {!!Form::submit('Guardar',['class'=>'btn btn-default'])!!}
            </div>
        </div>
    </div>
</div>
{!!Form::close()!!} 
<!-- /Modal alta -->



<!-- Modal editar -->
<div class="modal fade none-border" id="edit-category" style="display: none;">
    <div class="modal-dialog mdlcustm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><strong>Editar</strong> embarques</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">

                        <div class="col-md-12">
                            <label class="control-label">ID</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>



                        <div class="col-md-12">
                            <label class="control-label">Fecha</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>


                        <div class="col-md-12">
                            <label class="control-label">Peso</label>
                            <input class="form-control form-white" placeholder="" type="text" name="category-name">
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Material</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Un material</option>
                                <option value="danger">Otro Material</option>

                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Usuario</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Usuario 1</option>
                                <option value="danger">Usuario 2</option>

                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="control-label">Ubicacion</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Ubicacion 1</option>
                                <option value="danger">Ubicacion 2</option>

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
<!-- /modal editar-->




@include('includes.footer')