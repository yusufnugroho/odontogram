<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/dataTables.bootstrap.min.css">    

<!--Header-->
        <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Perawatan Pasien</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Pasien</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Perawatan Pasien</li>
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
                <div class="col-lg-6 col-md-offset-1">
                    <div class="panel panel-green">
                        <div class="panel-heading">Daftar Perawatan</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="auto">
                                    <thead>
                                       <tr>
                                            <th>NO</th>
                                            <th>Tanggal Perawatan</th>
                                            <th>Diagnosa</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        foreach ($perawatan as $row) {
                                            $no++;
                                        ?>  <tr>
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $row['tanggal_perawatan'];?></td>
                                            <td><?php echo $row['diagnosa_perawatan'];?></td>
                                            <td>
                                                <div class="btn btn-warning btn-sm detail_button" style="" data-toggle="modal" data-target="#detail_modal" id="detail_<?php echo $row['id_perawatan']?>">Detail</div>
                                                <div class="btn btn-danger btn-sm hapus_button" style="" data-toggle="modal" data-target="#hapus_modal" id="hapus_<?php echo $row['id_perawatan']?>">Hapus</div>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                               
                                <a href="<?php echo base_url();?>pasien/perawatan_tambah/<?php echo $id_pasien?>" class="btn btn-primary">Tambah Perawatan</a>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-4 ">
                    <div class="panel panel-green">
                        <div class="panel-heading">Detail Perawatan</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row" id="detail_perawatan">
                                Klik "detail" pada tabel di samping untuk melihat detail perawatan
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
<!--Footer-->

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
                    var id_rawat = $(this).attr("id");
                    $.post("<?php echo base_url()?>index.php/ajaxcontroller/get_detail_perawatan",
                    {
                      id_perawatan : id_rawat,
                    },
                    function(data,status){
                        if (status == 'success'){
                            $("#detail_perawatan").html(data);
                            $("#detail_perawatan").show();
                        }
                    });
                });
                $(".hapus_button").click(function(){
                    var rekam_id = $(this).attr("id");
                    $("#modal_hapus").attr({
                        href: "<?php echo base_url();?>index.php/pasien/perawatan_hapus/"+rekam_id.substr(6,rekam_id.length),
                    });
                });
            </script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>