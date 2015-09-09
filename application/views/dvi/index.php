<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/dataTables.bootstrap.min.css">    

<!--Header-->
        <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            DVI</div>
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
                        <div class="panel-heading">DVI</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="dataTables-example">
                                    <thead>
                                       <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            
                                            <th>Tanggal Mulai Aktif</th>
                                            <th>Tanggal Selesai Aktif</th>
                                            <th>Action</th>

                                        </tr> 
                                    </thead>
                                    <tbody>
                                    
                                    <?php foreach ($dvi as $row) {
                                        //$pass = $row->password_dvi;
                                        //$pass = mdecrypt($pass);
                                        //echo $pass;
                                        ?>  <tr>
                                            <td><?php echo $row->id_dvi;?></td>
                                            <td><?php echo $row->nama_dvi;?></td>
                                            
                                            <td><?php echo $row->date_dvi;?></td>
                                            <td><?php echo $row->date2_dvi;?></td>
                                            <td>
                                                <a href="<?php echo base_url();?>dvi/ubah/<?php echo $row->id_dvi;?>" class="btn btn-sm btn-warning">Update</a>
                                               
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php if($akses == 'admin'){?>
                                <!--<a href="<?php echo base_url();?>dvi/tambah" class="btn btn-primary">Tambah DVI</a>    
                                -->
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