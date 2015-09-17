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
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-offset-1">
                    <div class="panel panel-success">
                        <div class="panel-heading">Daftar Dokter</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="dataTables-example">
                                    <thead>
                                       <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>Alamat Praktik</th>
                                            <th>Telepon</th>
                                            <th>Action</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                    
                                    <?php foreach ($dokter as $row) {
                                        ?>  <tr>
                                            <td><?php echo $row->id_dokter;?></td>
                                            <td><?php echo $row->nama_dokter;?></td>
                                            <td><?php echo $row->alamat_praktik_dokter;?></td>
                                            <td><?php echo $row->telepon_dokter;?></td>
                                            <td>
                                                <a href="<?php echo base_url();?>dokter/ubah/<?php echo $row->id_dokter;?>" class="btn btn-sm btn-warning">Update</a>
                                                <?php if($akses == 'admin'){?>                                               
                                                <a href="<?php echo base_url();?>dokter/detail/<?php echo $row->id_dokter;?>" class="btn btn-sm btn-primary">Detail Dokter</a>
                                                <a href="<?php echo base_url();?>dokter/hapus/<?php echo $row->id_dokter;?>" class="btn btn-sm btn-danger">Hapus</a>
                                                <?php };?>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php if($akses == 'admin'){?>
                                <a href="<?php echo base_url();?>dokter/tambah" class="btn btn-primary">Tambah Dokter</a>    
                                <?php };?>
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


    <!-- /#wrapper -->
<!--Footer-->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>