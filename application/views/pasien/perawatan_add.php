<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
              <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Tambah Data Perawatan</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="#">Home</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dokter</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i class="fa fa-user-md fa-fw"></i>&nbsp;<a href="#">Pasien</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i class="fa fa-user-md fa-fw"></i>&nbsp;<a href="#">Perawatan</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Tambah</li>
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
                                                Form Tambah Data Perawatan</div>
                                            <div class="panel-body pan">
                                                <form action="<?php echo base_url();?>index.php/pasien/perawatan_add" method="post">
                                                    <input id="id_pasien" type="hidden" placeholder="id_pasien" class="form-control" name="id_pasien" value="<?php echo $id_pasien?>"/></div>
                                                <div class="form-body pal">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-user"></i>
                                                            <input id="inputGigi" type="text" placeholder="Gigi" class="form-control" name="inputGigi"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-stethoscope"></i>
                                                            <input id="inputKeluhan" type="text" placeholder="Keluhan" class="form-control" name="inputKeluhan"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-stethoscope"></i>
                                                            <input id="inputDiagnosa" type="text" placeholder="Diagnosa" class="form-control" name="inputDiagnosa"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-code"></i>
                                                            <input id="inputICD" type="text" placeholder="KODE ICD 10" class="form-control" name="inputICD"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-ambulance "></i>
                                                            <input id="inputPerawatan" type="text" placeholder="Perawatan" class="form-control" name="inputPerawatan"/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-comment"></i>
                                                            <input id="inputKeterangan" type="text" placeholder="Keterangan" class="form-control" name="inputKeterangan"/></div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary">
                                                        Submit</button>
                                                </div>
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
            <script type="text/javascript">
            $(function(){
            <?php
                $to_js = 'data_diagnosa = [';
                for ($a=0; $a<count($res_diagnosa); $a++){
                    $to_js = $to_js . "\"".$res_diagnosa[$a]->nama_diagnosa."/".$res_diagnosa[$a]->info."\"";
                    if ($a+1 <count($res_diagnosa)){
                        $to_js = $to_js . " , ";
                    }
                }
                $to_js = $to_js . ']';
                echo $to_js;
                ?>;
                $("#inputDiagnosa").autocomplete({
                    source : data_diagnosa,
                });
            });
            </script>
