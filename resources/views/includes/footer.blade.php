<!-- Footer -->
        
        
<!-- <footer class="footer text-right"> </footer> -->
</div> <!-- End wrapper -->
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
<script type='text/javascript' src="assets/js/jquery.min.js"></script>
<script type='text/javascript' src="assets/js/bootstrap.min.js"></script>
<script type='text/javascript' src="assets/js/detect.js"></script>
<script type='text/javascript' src="assets/js/fastclick.js"></script>
<script type='text/javascript' src="assets/js/jquery.slimscroll.js"></script>
<script type='text/javascript' src="assets/js/jquery.blockUI.js"></script> -->
<script type='text/javascript' src="assets/js/waves.js"></script>
<script type='text/javascript' src="assets/js/wow.min.js"></script>
<script type='text/javascript' src="assets/js/jquery.nicescroll.js"></script>
<script type='text/javascript' src="assets/js/jquery.scrollTo.min.js"></script>

<script type='text/javascript' src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script type='text/javascript' src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script type='text/javascript' src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script type='text/javascript' src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script type='text/javascript' src="assets/plugins/datatables/jszip.min.js"></script>
<script type='text/javascript' src="assets/plugins/datatables/pdfmake.min.js"></script>
<script type='text/javascript' src="assets/plugins/datatables/vfs_fonts.js"></script>
<script type='text/javascript' src="assets/plugins/datatables/buttons.html5.min.js"></script>
<script type='text/javascript' src="assets/plugins/datatables/buttons.print.min.js"></script>
<script type='text/javascript' src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script type='text/javascript' src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script type='text/javascript' src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script type='text/javascript' src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script type='text/javascript' src="assets/pages/datatables.init.js"></script>



<!--Morris Chart-->
    <script src="assets/plugins/chartist/dist/chartist.min.js"></script>
    <script src="assets/pages/jquery.chartist.init.js"></script>

<script type='text/javascript' src="assets/plugins/peity/jquery.peity.min.js"></script>
<script type='text/javascript' src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script type='text/javascript' src="assets/pages/jquery.dashboard_3.js"></script>
<script type='text/javascript' src="assets/js/jquery.core.js"></script>
<script type='text/javascript' src="assets/js/jquery.app.js"></script>
<script type='text/javascript' src="assets/js/bootbox.js"></script>
<script type='text/javascript' src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

  <!--C3 Chart-->
        <script type="text/javascript" src="assets/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="assets/plugins/c3/c3.min.js"></script>
        <script src="assets/pages/jquery.c3-chart.init.js"></script>





<!--BOOTBOX -->
  <script>
  $(".alertP").click(function(e)
  {

  });

  </script>
<!--BOOTBOX -->
        
  <script type="text/javascript">
      $(document).ready(function() {
          $('#datatable').dataTable({
            "oLanguage":{
              "sSearch": "Buscar"
            }
          });
          $('#datatable-keytable').DataTable( { keys: true } );
          $('#datatable-responsive').DataTable();
          $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
          var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );


          $('#tablaPerfiles').DataTable({
            "oLanguage":{
              "sSearch":"Buscar"
            }

          });
      } );
      TableManageButtons.init();

  </script>      
        
        
        
        
        
        
        

        

        
        
        
        

        
        
   </body>  

</html>


