
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>assets/js/ajax_kota.js"></script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-offset-1">
                    <h1 class="page-header">Detail Dokter</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-offset-1">
                    <div class="panel panel-primary">
                     

                        <?php foreach($detail_dokter as $row){ 
                            ?>

                        <div class="panel-heading">
                           <h3 class="panel-title"><?php if(!empty($row['nama_dokter']))echo $row['nama_dokter']; ?> </h3>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-1">
                                        <table class="table table-user-information">

                                        <tbody>
                                            <?php
                                            $field      = array('id_dokter','nik_dokter','nama_dokter','alamat_dokter','alamat_praktik_dokter','telepon_dokter');
                                            $nameField  = array('id_dokter','nik_dokter','nama_dokter','alamat_dokter','alamat_praktik_dokter','telepon_dokter');
                                                for($j = 0;$j<count($field);$j++)
                                                {
                                                    $value = $row[$field[$j]];    
                                                    echo "
                                                        <tr>
                                                                <td>".$nameField[$j]."</td>
                                                                <td>".$value."</td>
                                                        <tr>
                                                    ";
                                                }
                                                
                                            ?>
                                           
                                        </tbody>
                                        </table>
                                        <?php } ?>
                                        <div class="modal-footer">
                                        <?php
                                        $nik_dokter = $this->session->userdata('nik_dokter');
                                            if(!empty($nik_dokter)){
                                                ?>
                                                <a  class="btn btn-success" style="float:right" href="<?php echo base_url();?>pasien/pasien_dokter/" >Kembali</a>        
                                            <?php
                                            }
                                            else{
                                                ?>
                                                <a  class="btn btn-success" style="float:right" href="<?php echo base_url();?>dokter" >Kembali</a>   
                                                <?php
                                            }
                                        ?>
                                        
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


