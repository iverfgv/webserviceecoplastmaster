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
                                      Perfiles
                                  </li>

                              </ol>
                          </div>
                      </div> 


                      <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#add-category">ALTA PERFILES</button>

                      <p class="text-muted m-b-30 font-13"></p>







                      <!-- Inicia Tabla -->
                      <div class="row">
                        <div class="col-sm-12">
                            <div class=" table-responsive">



                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Pesaje</th>
                                            <th>Supervisor</th>
                                            <th>Embarques</th>
                                            <th>Administracion</th>
                                            <th>Reportes</th>
                                            <th>Activo</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>

                                @foreach($perfiles as $perfil)
                                    <tbody>
                                        <tr>
                                            <td>{{$perfil->perfil}}</td>
                                            @if($perfil->pesaje==1)
                                                <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            @else
                                                <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                            @endif                                          

                                             @if($perfil->supervisor==1)
                                                <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            @else
                                                <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                            @endif

                                             @if($perfil->embarques==1)
                                                <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            @else
                                                <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                            @endif

                                             @if($perfil->administracion==1)
                                                <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            @else
                                                <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                            @endif

                                             @if($perfil->reportes==1)
                                                <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            @else
                                                <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                            @endif

                                            @if($perfil->activo==1)
                                                <td><i class="fa fa-check-circle-o fa-2x"></i></td>
                                            @else
                                                <td><i class="fa fa-times-circle-o fa-2x"></i></td>
                                            @endif
                                          

                                            <td class="editbtn">
                                                <a href="" title="Detalles" <i class="fa fa-file-text-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></a>

                                                <span id="editar" data-id="1994" data-toggle="modal" data-target="#edit-category-1">
                                                <i class="fa fa-pencil-square-o" title="Editar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                                                </i>
                                                </span> 

                                                {!!link_to('perfiles/perfildel/'.$perfil->id, '',array('class'=>'fa fa-ban','style'=>'color:rgb(121,121,121);' , 'title'=>'Eliminar','data-toggle'=>'tooltip', 'data-placement'=>'top', 'data-original-title'=>'Tooltip on top')) !!}
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
{!!Form::open(['route'=>'perfil.store','method','POST'])!!} 
<div class="modal fade none-border" id="add-category" style="display: none;">
    <div class="modal-dialog mdlcustm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><strong>Alta</strong> perfil</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-md-12">
                    <label class="control-label">Perfil</label>
                    {!!Form::text('perfil','',['class'=>'form-control form-white','placeholder'=>'Nombre'])!!}
                        </div>
                        <div class="col-md-12">

                            <div class="checkbox chkbx">
                                <input type="checkbox" name="pesaje">     
                                <label for="inlineCheckbox1"> Pesaje </label>
                            </div>

                            <div class="checkbox chkbx">
                                <input type="checkbox" name="supervisor">             
                                <label for="inlineCheckbox2"> Supervisor </label>
                            </div>


                            <div class="checkbox chkbx">
                                <input type="checkbox" name="embarques">            
                                <label for="inlineCheckbox3"> Embarques </label>
                            </div>

                            <div class="checkbox chkbx">
                                <input type="checkbox" name="administracion">                
                                <label for="inlineCheckbox4"> Administracion </label>
                            </div>

                            <div class="checkbox chkbx">
                                <input type="checkbox" name="reportes">              
                                <label for="inlineCheckbox5"> Reportes </label>
                            </div>

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
<div class="modal fade none-border" id="edit-category-1" style="display: none;">
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
                            <label class="control-label">Perfil</label>
                            <input class="form-control form-white" placeholder="Nombre" type="text" name="category-name">
                        </div>
                        <div class="col-md-12">

                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                <label for="inlineCheckbox1"> Pesaje </label>
                            </div>

                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox2" value="option2">
                                <label for="inlineCheckbox2"> Supervisor </label>
                            </div>


                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox3" value="option3">
                                <label for="inlineCheckbox3"> Embarques </label>
                            </div>

                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox4" value="option4">
                                <label for="inlineCheckbox4"> Administracion </label>
                            </div>

                            <div class="checkbox chkbx">
                                <input type="checkbox" id="inlineCheckbox5" value="option5">
                                <label for="inlineCheckbox5"> Reportes </label>
                            </div>

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

<script>
function myFunction() {
   alert($(document).on("click", ".modal", function () {
        var myDNI = $(this).data('id');
        $(".modal #DNI").val( myDNI );
        }));
}
</script>

@include('includes.footer')