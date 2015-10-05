<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/dataTables.bootstrap.min.css">    

<!--Header-->
        <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Pasien</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Pasien</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Pasien</li>
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
                <div class="col-lg-10 col-md-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Daftar Pasien</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" id="dataTables-example">
                                    <thead>
                                       <tr>
                                        <th>NO</th>
                                        <th>Nama</th>
                                        <th>KTP</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach ($pasien as $row) {
                                    ?>  <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $row->nama_pasien;?></td>
                                        <td><?php echo $row->ktp_pasien;?></td>
                                        <td><?php echo $row->alamat_rumah_pasien;?></td>
                                        <td><?php echo $row->ponsel_pasien;
                                             $no +=1;
                                        ?></td>
                                        <td>
                                        <?php
                                             //$session[] = $this->session->userdata('akses');
                                             // $data['akses'] = $session[0];
                                             //echo "jambu".$akses;
                                            if($akses!= "dvi")
                                            {
                                                ?>
                                                <a href="<?php echo base_url();?>pasien/detail/<?php echo $row->id_pasien;?>" class="btn btn-sm btn-primary">Identitas</a>
                                                <?php
                                            }
                                        ?>
                                            <a href="<?php echo base_url();?>pasien/perawatan/<?php echo $row->id_pasien;?>" class="btn btn-sm btn-warning">Perawatan</a>
                                            <a href="<?php echo base_url();?>rekam/record/<?php echo $row->id_pasien;?>" class="btn btn-sm btn-warning">Odontogram</a>
                                            <a href="<?php echo base_url();?>pasien/hapus/<?php echo $row->id_pasien;?>" class="btn btn-sm btn-danger">Hapus</a>
                                        
                                        </td>
                                    </tr>
                                    <?php
                                    }

                                    ?>
                                    </tbody>
                                </table>
                                <?php
                                if($akses=='dokter')
                                {
                                ?>
                                <a href="<?php echo base_url();?>pasien/tambah" class="btn btn-primary">Tambah Pasien</a>
                                <?php }?>
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