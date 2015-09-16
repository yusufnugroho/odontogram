
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>assets/js/ajax_kota.js"></script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-offset-1">
                    <h1 class="page-header">Akun Pekerja PHE</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-offset-1">
                    <div class="panel panel-primary">
                     <?php// echo "Domisili Asal".$domisili; echo "Email : ".$email;?>

                        <?php foreach($detail_pasien as $row){ 
                            ?>

                        <div class="panel-heading">
                           <h3 class="panel-title"><?php if(!empty($row['nama_pasien']))echo $row['nama_pasien']; ?> </h3>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-1">
                                        <table class="table table-user-information">

                                        <tbody>
                                            <?php
                                            $field      = array('nama_pasien','tempat_lahir_pasien','tanggal_lahir_pasien','jk_pasien','ktp_pasien','suku_pasien','pekerjaan_pasien','alamat_rumah_pasien','telepon_rumah_pasien','alamat_kantor_pasien','ponsel_pasien','GD','PJ','DS','HA','HS','GG','PL','AO','AOtext','AM','AMtext','foto_pasien');
                                            $nameField  = array('Nama Pasien','Tempat Lahir Pasien','Tanggal Lahir Pasien','Jenis Kelamin Pasien','KTP Pasien','Suku Pasien','Pekerjaan Pasien','Alamat Rumah Pasien','Telepon Rumah Pasien','Alamat Kantor Pasien','Ponsel Pasien','Golongan Darah','Penyakit Jantung','Diabetes','Haemophilia','Hepatitis','Gastring','Penyakit Lainnya','Alergi Obat','Alergi Obat - Penjelasan','Alergi Makanan','Alergi Makanan - Penjelasan','Foto');
                                                for($j = 0;$j<count($field)-1;$j++)
                                                {
                                                    $value = $row[$field[$j]];    
                                                    echo "
                                                        <tr>
                                                                <td>".$nameField[$j]."</td>
                                                                <td>".$value."</td>
                                                        <tr>
                                                    ";
                                                }
                                                echo "
                                                    <tr>
                                                            <td>".$nameField[22]."</td>
                                                            <td><img src=".base_url().$row[$field[22]]."></td>
                                                    <tr>
                                                "
                                                
                                            ?>
                                           
                                        </tbody>
                                        </table>
                                        <?php } ?>
                                        <div class="modal-footer">
                                            <a  class="btn btn-success" style="float:right" href="<?php echo base_url();?>pasien" >Kembali</a>
                                           
                                        </div>
<br><br>
</div>
</table>
<!--Maps-->



                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
<!--FOOTER-->


