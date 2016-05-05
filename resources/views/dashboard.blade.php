@include('includes.header')



<div class="content-page">
            <!-- Start content -->
<div class="content">
<div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Dashboard</h4>
                                <p class="text-muted page-title-alt"></p>
                            </div>
                        </div>

                        <div class="row">

                        </div>


                        

                        
        
                        <!-- end row -->

                        <div class="row">
							<div class="col-lg-12">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Embarques</b></h4>
									<p class="text-muted m-b-30 font-13">
										
									</p>
									
									<div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
								</div>
							</div>
                        	
                        </div>
							

						<div class="row">	
							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Materiales</b></h4>
									<p class="text-muted m-b-30 font-13">
										Example of Label placement chart.
									</p>
									
									<div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
								</div>
							</div>




							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Clientes</b></h4>
									<p class="text-muted m-b-30 font-13">
										Example of Horizontal bar chart.
									</p>
									
									<div id="distributed-series" class="ct-chart ct-golden-section"></div>
								</div>
							</div>


							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">
										<i class="fa fa-bar-chart-o fa-fw"></i>Materiales
									</div>
									 		<canvas id="canvas"></canvas>	
								</div>
							</div>

                        </div> <!-- end row -->

                        
                        

                    </div>

</div> <!-- content -->

</div>

@include('includes.footer')