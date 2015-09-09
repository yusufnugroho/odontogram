<style type="text/css">
.gigi_lancip{
    background: url("<?php echo base_url()?>UserFile/lancip.png");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
.gigi_kotak{
    background: url("<?php echo base_url()?>UserFile/kotak.png");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
</style>
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Tambah Rekaman Gigi</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="#">Home</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Pasien</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i class="fa fa-user-md fa-fw"></i>&nbsp;<a href="#">Rekam</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Pasien</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
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
                                    <div class="col-lg-8">
                                        <div class="panel panel-orange">
                                            <div class="panel-heading">
                                                Form Tambah Rekaman Gigi</div>
                                            <div class="panel-body pan">
                                                <form action="<?php echo base_url();?>index.php/rekam/simpan_rekaman_gigi" method="post" id="myForm">
                                                    <input type="text" hidden value="<?php echo $id_rekam?>" placeholder="" name="id_rekam">
                                                    <div class="form-body pal">
                                                        <div class="row" id="rekam_1">
                                                            <div class="row col-lg-12">
                                                                <!-- Start Odontogram -->
                                                                    <div class="row">
                                                                        <div class="col-lg-6" id="gigi_container">
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:right" data-toggle="modal" id="11">11 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:right" data-toggle="modal" id="12">12 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:right" data-toggle="modal" id="13">13 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="14">14 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="15">15 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="16">16 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="17">17 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="18">18 </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-offset-6">
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:left" data-toggle="modal" id="21">21 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:left" data-toggle="modal" id="22">22 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:left" data-toggle="modal" id="23">23 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="24">24 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="25">25 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="26">26 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="27">27 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="28">28 </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:right" data-toggle="modal" id="51">51 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:right" data-toggle="modal" id="52">52 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:right" data-toggle="modal" id="53">53 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="54">54 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="55">55 </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-offset-6">
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:left" data-toggle="modal" id="61">61 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:left" data-toggle="modal" id="62">62 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:left" data-toggle="modal" id="63">63 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="64">64 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="65">65 </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:right" data-toggle="modal" id="81">81 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:right" data-toggle="modal" id="82">82 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:right" data-toggle="modal" id="83">83 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="84">84 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="85">85 </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-offset-6">
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:left" data-toggle="modal" id="71">71 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:left" data-toggle="modal" id="72">72 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:left" data-toggle="modal" id="73">73 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="74">74 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="75">75 </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:right" data-toggle="modal" id="41">41 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:right" data-toggle="modal" id="42">42 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:right" data-toggle="modal" id="43">43 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="44">44 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="45">45 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="46">46 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="47">47 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:right" data-toggle="modal" id="48">48 </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-offset-6">
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:left" data-toggle="modal" id="31">31 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:left" data-toggle="modal" id="32">32 </div>
                                                                            <div class="col-xs-1 btn btn-warning btn-lg gigi_lancip gigi" style="text-align:center;float:left" data-toggle="modal" id="33">33 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="34">34 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="35">35 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="36">36 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="37">37 </div>
                                                                            <div class="col-xs-1 btn btn-danger btn-lg gigi_kotak gigi" style="text-align:center;float:left" data-toggle="modal" id="38">38 </div>
                                                                        </div>
                                                                    </div>
                                                                <!-- End Odontogram -->
                                                            </div>
                                                        </div>
                                                        <input type="hidden" id="id_pasien" name="id_pasien" value="<?php echo $id_pasien?>">
                                                        <div class="row" id="rekam_2" style="display: none">
                                                            <div class="form-group">
                                                                <label for="oclusi">Oclusi</label>
                                                                <select class="form-control" id="oclusi" name="oclusi" required>
                                                                    <option value="normal"> Normal Bite </option>
                                                                    <option value="cross"> Cross Bite </option>
                                                                    <option value="steep"> Steep Bite </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="mandibula">Torus Mandibularis</label>
                                                                <select class="form-control" id="mandibula" name="mandibula" required>
                                                                    <option value="none"> Tidak Ada </option>
                                                                    <option value="kiri"> Sisi Kiri </option>
                                                                    <option value="kanan"> Sisi Kanan </option>
                                                                    <option value="both"> Kedua Sisi </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="diastema">Diastema</label>
                                                                <select class="form-control" id="diastema" name="diastema" required>
                                                                    <option value="none"> Tidak Ada </option>
                                                                    <option value="ada"> Ada </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="palatinus">Torus Palatinus</label>
                                                                <select class="form-control" id="palatinus" name="palatinus" required>
                                                                    <option value="none"> Tidak Ada </option>
                                                                    <option value="kecil"> Kecil </option>
                                                                    <option value="sedang"> Sedang </option>
                                                                    <option value="besar"> Besar </option>
                                                                    <option value="mulitple"> Mulitple </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="palatum">Palatum</label>
                                                                <select class="form-control" id="palatum" name="palatum" required>
                                                                    <option value="dalam"> Dalam </option>
                                                                    <option value="sedang"> Sedang </option>
                                                                    <option value="rendah"> Rendah </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="anomali">Gigi Anomali</label>
                                                                <select class="form-control" id="anomali" name="anomali" required>
                                                                    <option value="none"> Tidak Ada </option>
                                                                    <option value="ada"> Ada </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-medkit"></i>
                                                                    <input id="lain_lain" type="text" placeholder="Lain-Lain" class="form-control" name="lain_lain"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions text-right pal">
                                                        <button type="button" class="btn btn-primary" id="next">
                                                            Selanjutnya</button>
                                                        <button type="submit" class="btn btn-primary" id="submit" style="display: none">
                                                            Kirim</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-offset-1">
                                                    <div class="panel panel-orange">
                                                        <div class="panel-heading" id="detail_title">
                                                            Form Detail Gigi</div>
                                                        <div class="panel-body pan" id="detail_odontogram">
                                                            <form action="<?php echo base_url();?>index.php/pasien/add" method="post">
                                                                <div class="form-body pal">
                                                                    <div class="alert alert-warning">
                                                                        Pilih salah satu gigi di samping!
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions text-right pal">
                                                                    <button type="submit" class="btn btn-primary" id="detail_submit" style="display: none">
                                                                        Tambah Detail</button>
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
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2014 © Admin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER--> 
            <script src="<?php echo base_url();?>assets/script/jquery-1.10.2.min.js"></script>
            <script>
            var next_clicked = false;
            $("#next").click(function(){
                if (!next_clicked){
                    $("#rekam_2").load("<?php echo base_url()?>index.php/ajaxcontroller/get_odontogram");
                    $("#rekam_2").show();
                    $("#rekam_1").hide();
                    $("#next").html("Kirim");
                    $("#next").hide();
                    $("#submit").show();
                }
            });
            $('#gigi_container').ready(function(){
                var container_width = $('#gigi_container').width();
                var child_width = container_width/8;
                $('.gigi').width(child_width);
                $('.gigi').css({"padding-left":"0px", "padding-right":"0px",});
            });
            $(".gigi").click(function(){
                var selected_gigi = $(this).attr("id")
                $.post("<?php echo base_url()?>index.php/ajaxcontroller/get_detail_odon",
                {
                  id_pasien : <?php echo $id_pasien?>,
                  kode_gigi : selected_gigi,
                  id_rekam : <?php echo $id_rekam?>,
                },
                function(data,status){
                    if (status == 'success'){
                        $("#detail_odontogram").html(data);
                        $("#detail_submit").fadeIn();
                        $("#detail_title").html("Form Detail Gigi No: "+selected_gigi);
                    }
                });
            });
            $("#next").click(function(){
                $("#next").hide();
                $("#submit").fadeIn();
                $("#rekam_1").fadeOut();
                $("#rekam_2").fadeIn();
            });
            </script>