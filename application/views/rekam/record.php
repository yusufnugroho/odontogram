<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/dataTables.bootstrap.min.css">    

<!--Header-->
        <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Dokter</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dokter</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Dokter</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8 col-md-offset-1">
                    <div class="panel panel-green">
                        <div class="panel-heading">Daftar Record</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="auto">
                                    <thead>
                                       <tr>
                                            <th>NO</th>
                                            <th>Tanggal Rekam</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        foreach ($rekam_pasien as $row) {
                                            $no++;
                                        ?>  <tr>
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $row['tanggal_rekam'];?></td>
                                            <td>
                                                 <a class="btn btn-primary btn-sm " style=""  href="<?php echo base_url().'laporan/create_pdf/'.$row['id_rekam']?>">Cetak PDF</a>
                                                <div class="btn btn-warning btn-sm detail_button" style="" data-toggle="modal" data-target="#detail_modal" id="detail_<?php echo $row['id_rekam']?>">Detail</div>
                                                <div class="btn btn-danger btn-sm hapus_button" style="" data-toggle="modal" data-target="#hapus_modal" id="hapus_<?php echo $row['id_rekam']?>">Hapus</div>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                               
                                <a href="<?php echo base_url();?>rekam/tambah/<?php echo $id_pasien?>" class="btn btn-primary">Tambah Rekam</a>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
<!--Footer-->
<!--DETAIL MODAL-->
            <div id="detail_modal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Detail</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row" id="modal_content">
                                Loading . . .
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="modal_close">OK</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END DETAIL MODAL-->
            <!--HAPUS MODAL-->
            <div id="hapus_modal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Hapus Rekam</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row" id="modal_content_hapus">
                                <h2>
                                    Apakah Anda ingin menghapus record ini?
                                </h2>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="modal_cancel">Tidak</button>
                            <a type="button" class="btn btn-warning" id="modal_hapus">Iya</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--END HAPUS MODAL-->
            <script src="<?php echo base_url();?>assets/script/jquery-1.10.2.min.js"></script>
            <script type="text/javascript">
                $(".detail_button").click(function(){
                    var rekam_id = $(this).attr("id");
                    $("#modal_content").html("Loading ...");
                    $.post("<?php echo base_url()?>index.php/ajaxcontroller/get_detail_rekam",
                    {
                      id_rekam : rekam_id,
                    },
                    function(data,status){
                        if (status == 'success'){
                            $("#modal_content").html(data);
                            $("#modal_content").show();
                        }
                    });
                });
                $(".hapus_button").click(function(){
                    var rekam_id = $(this).attr("id");
                    
                    $("#modal_hapus").attr({
                        href: "<?php echo base_url();?>index.php/rekam/hapus/"+rekam_id.substr(6,rekam_id.length),
                    });
                });
                $("#modal_close").click(function(){
                    $("#modal_content").html("Loading . . . ")});
            </script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>