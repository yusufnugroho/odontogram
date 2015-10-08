
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Ubah Dokter</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="#">Home</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dokter</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i class="fa fa-user-md fa-fw"></i>&nbsp;<a href="#">Dokter</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dokter</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Ubah</li>
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
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-offset-1">
                                        <div class="panel panel-orange">
                                            <div class="panel-heading">
                                                Update Form DVI</div>
                                            <div class="panel-body pan">
                                                <form action="<?php echo base_url();?>dvi/update" method="post">
                                                <?php foreach ($dvi as $row) {?>
                                                <div class="form-body pal">
                                                    <div class="form-group">
                                                        <label>ID DVI</label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="nama_dvi" type="text" value="<?php echo $row['id_dvi'];?>" class="form-control" name="id_dvi"/>
                                                        </div>
                                                    </div>
                 
                                                    <div class="form-group">
                                                        <label>Nama DVI</label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="nama_dvi" type="text" value="<?php echo $row['nama_dvi'];?>" class="form-control" name="nama_dvi"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Tanggal Mulai Aktif</label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="date_dvi" type="date" value="<?php echo $row['date_dvi'];?>" class="form-control" name="date_dvi"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Tanggal Selesai Aktif</label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="date_dvi" type="date" value="<?php echo $row['date2_dvi'];?>" class="form-control" name="date2_dvi"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Password</label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-lock"></i>
                                                            <input id="inputPassword" type="password" value="password" class="form-control" name="password_dvi" /></div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name='id_dokter' value="<?php echo $row['id_dvi'];?>"/>
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary">
                                                        Submit</button>
                                                </div>
                                                <?php 
                                                    # code...
                                                }
                                                ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER--> 