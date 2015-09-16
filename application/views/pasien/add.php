
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Tambah Pasien</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="#">Home</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Pasien</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i class="fa fa-user-md fa-fw"></i>&nbsp;<a href="#">Pasien</a>&nbsp;&nbsp;<i
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
                                    <div class="col-lg-10 col-md-offset-1">
                                        <div class="panel panel-orange">
                                            <div class="panel-heading">
                                                Form Tambah Pasien</div>
                                            <div class="panel-body pan">
                                                <form action="<?php echo base_url();?>index.php/pasien/add" method="post" enctype="multipart/form-data">
                                                <div class="form-body pal">
                                                    <div class="row" id="pasien_2" style="display: none">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                Golongan Darah
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputGD" type="radio" class="form-control" value="A" name="GD"/> A</div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputGD" type="radio" class="form-control" value="A" name="GD"/> B</div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputGD" type="radio" class="form-control" value="AB" name="GD"/> AB</div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputGD" type="radio" class="form-control" value="O" name="GD"/> O</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                Penyakit Jantung
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputPJ" type="radio" class="form-control" value="N" name="PJ"/> Tidak Ada</div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputPJ" type="radio" class="form-control" value="Y" name="PJ"/> Ada</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                Diabetes
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputDS" type="radio" class="form-control" value="N" name="DS"/> Tidak Ada</div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputDS" type="radio" class="form-control" value="Y" name="DS"/> Ada</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                Haemophilia
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputHA" type="radio" class="form-control" value="N" name="HA"/> Tidak Ada</div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputHA" type="radio" class="form-control" value="Y" name="HA"/> Ada</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                Hepatitis
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputHS" type="radio" class="form-control" value="N" name="HS"/> Tidak Ada</div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputHS" type="radio" class="form-control" value="Y" name="HS"/> Ada</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                Gastring
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputGG" type="radio" class="form-control" value="N" name="GG"/> Tidak Ada</div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputGG" type="radio" class="form-control" value="Y" name="GG"/> Ada</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                Penyakit Lainnya
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputPL" type="radio" class="form-control" value="N" name="PL"/> Tidak Ada</div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <input id="inputPL" type="radio" class="form-control" value="Y" name="PL"/> Ada</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                Alergi Terhadap Obat-obatan
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <select class="form-control" id="inputAO" name="inputAO" required>
                                                                        <option value="none"> Tidak Ada </option>
                                                                        <option value="ada"> Ada </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group" style="display: none" id="inputAOtextGroup">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-medkit"></i>
                                                                <input id="inputAOtext" type="text" placeholder="Alergi terhadap Obat" class="form-control" name="AOtext"/></div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                Alergi Terhadap Makanan
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <select class="form-control" id="inputAM" name="inputAM" required>
                                                                        <option value="none"> Tidak Ada </option>
                                                                        <option value="ada"> Ada </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group" style="display: none" id="inputAMtextGroup">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-tree"></i>
                                                                <input id="inputAMtext" type="text" placeholder="Alergi terhadap Makanan" class="form-control" name="AMtext"/></div>
                                                        </div>
                                                    </div>

                                                    <div class="row" id="pasien_1">
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                <input id="inputName" type="text" placeholder="Nama" class="form-control" required name="nama_pasien"/></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-envelope"></i>
                                                                <input id="inputID" type="text" placeholder="KTP" class="form-control" required name="ktp_pasien"/></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input id="inputTempatLahir" type="text" placeholder="Tempat Lahir" class="form-control" required name="tempat_lahir_pasien"/></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input id="inputTanggalLahir" type="date" placeholder="Tanggal Lahir" class="form-control" required name="tanggal_lahir_pasien"/></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input id="inputJK" type="radio" class="form-control" value="laki" name="jenis_kelamin_pasien"/> Laki-laki</div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input id="inputJK" type="radio" class="form-control" value="perempuan" name="jenis_kelamin_pasien"/> Perempuan</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                <input id="inputSuku" type="text" placeholder="Suku" class="form-control" required name="suku_pasien"/></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                <input id="inputPekerjaan" type="text" placeholder="Pekerjaan" class="form-control" required name="pekerjaan_pasien"/></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                <input id="inputAlamatRumah" type="text" placeholder="Alamat Rumah" class="form-control" required name="alamat_rumah_pasien"/></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                <input id="inputTeleponRumah" type="text" placeholder="Telepon Rumah" class="form-control" required name="telepon_rumah_pasien"/></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                <input id="inputAlamatKantor" type="text" placeholder="Alamat Kantor" class="form-control" required name="alamat_kantor_pasien"/></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                <input id="inputPonsel" type="text" placeholder="No. Ponsel" class="form-control" required name="ponsel_pasien"/></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div> Foto Pasien</div>
                                                            <div class="input-icon right">
                                                                <i class="fa fa-lock"></i>
                                                                <input id="inputFoto" type="file" name="userFile" class="form-control" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions text-right pal">
                                                    <button type="button" class="btn btn-primary" id="next">
                                                        Next</button>
                                                    <button type="button" class="btn btn-primary" id="back" style="display:none">
                                                        Back</button>
                                                    <button type="submit" class="btn btn-primary" id="submit" style="display:none">
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
            <script src="<?php echo base_url();?>assets/script/jquery-1.10.2.min.js"></script>
            <script>
            $("#next").click(function(){
                $("#pasien_2").show();
                $("#pasien_1").hide();
                $("#next").hide();
                $("#submit").show();
                $("#back").show();
            });
            $("#back").click(function(){
                $("#pasien_1").show();
                $("#pasien_2").hide();
                $("#next").show();
                $("#submit").hide();
                $("#back").hide();
            });
            $("#inputAO").change(function(){
                var option_value = $("#inputAO").val();
                if (option_value == "ada"){
                    $("#inputAOtextGroup").show();
                }
                else if (option_value == 'none'){
                    $("#inputAOtextGroup").hide();
                }
            });
            $("#inputAM").change(function(){
                var option_value = $("#inputAM").val();
                if (option_value == "ada"){
                    $("#inputAMtextGroup").show();
                }
                else if (option_value == 'none'){
                    $("#inputAMtextGroup").hide();
                }
            });
            </script>