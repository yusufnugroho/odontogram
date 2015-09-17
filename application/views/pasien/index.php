            <!--BEGIN PAGE WRAPPER-->   
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
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                
                                            <div class="col-md-12">
                                                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                                </div>
                                            </div>
                            </div>
                    <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"></h1>
                    </div>
                     <!-- /.col-lg-12 -->
                    </div>
                    <div class="col-lg-12">
                    <div class="row">
                    <div class="col-lg-10 col-md-offset-1">
                        <div class="panel panel-green">
                            <div class="panel-heading">Daftar Pasien</div>
                            <div class="panel-body">
                                <table class="table table-hover-color">
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
                                    <?php foreach ($pasien as $row) {
                                    ?>  <tr>
                                        <td><?php echo $row->id_pasien;?></td>
                                        <td><?php echo $row->nama_pasien;?></td>
                                        <td><?php echo $row->ktp_pasien;?></td>
                                        <td><?php echo $row->alamat_rumah_pasien;?></td>
                                        <td><?php echo $row->ponsel_pasien;?></td>
                                        <td>
                                            <a href="<?php echo base_url();?>index.php/rekam/record/<?php echo $row->id_pasien;?>" class="btn btn-sm btn-warning">Record</a>
                                            <a href="<?php echo base_url();?>index.php/pasien/hapus/<?php echo $row->id_pasien;?>" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <a href="<?php echo base_url();?>index.php/pasien/tambah" class="btn btn-primary">Tambah Pasien</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
    </div>
</div>
<!--END CONTENT-->