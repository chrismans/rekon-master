<div id="basic-form" class="section" align="center">
              <div class="row">
                <div class="col s12 m12 l6"  style="width:100%;">
                  <div class="card-panel" style="width:100%;">
                  
                    <font size="5" color="#0000" face="Segoe UI">SERTIFIKAT PEMBAYARAN</font>
                    <hr><br>
                    <div class="row">
                <table>
                        <?php $id_kwitansi = $this->uri->segment(4);
                        //$kwitansi = $this->db->get_where('tbl_kwitansi', array("id_kwitansi"=>"$id", DESC));
                        $kwitansi = $this->db->query("SELECT * FROM tbl_kwitansi order by id_kwitansi DESC limit 1");
                        foreach ($kwitansi->result() as $reduce) { ?> 
                  <tr>
                    <td>
                            <label for="first_name" class="active"><font size="2px;">No</font></label>                      
                    </td>
                    <td style="padding-right:70%;">
                        <input type="text" value="<?=$reduce->id_kwitansi." / REKON /";?> <?=date('Y', strtotime($reduce->create_date));?>" id="id" name="id" placeholder="" readonly="" style="width:480%;">
                    </td>
                  </tr>

                  <tr>
                    <td>
                            <label for="first_name" class="active"><font size="2px;">Telah terima dari</font></label>                      
                    </td>
                    <td style="padding-right:70%;">
                        <input type="text" value="<?=$reduce->nama_owner;?>" id="nama_owner" name="nama_owner" placeholder="" readonly="" style="width:480%;">
                    </td>
                  </tr>

                  <tr>
                    <td>
                            <label for="first_name" class="active"><font size="2px;">Uang sejumlah</font></label>                      
                    </td>
                    <?php
                    $angka = isset($_POST['jumlah_tagih']) ? $_POST['jumlah_tagih'] : "0";
                    if ($angka)
                    {
                    echo ucwords(Terbilang($angka));
                    }
                    function Terbilang($a) {
                        $ambil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
                        if ($a < 12)
                            return " " . $ambil[$a];
                        elseif ($a < 20)
                            return Terbilang($a - 10) . "belas";
                        elseif ($a < 100)
                            return Terbilang($a / 10) . " puluh" . Terbilang($a % 10);
                        elseif ($a < 200)
                            return " seratus" . Terbilang($a - 100);
                        elseif ($a < 1000)
                            return Terbilang($a / 100) . " ratus" . Terbilang($a % 100);
                        elseif ($a < 2000)
                            return " seribu" . Terbilang($a - 1000);
                        elseif ($a < 1000000)
                            return Terbilang($a / 1000) . " ribu" . Terbilang($a % 1000);
                        elseif ($a < 1000000000)
                            return Terbilang($a / 1000000) . " juta" . Terbilang($a % 1000000);
                    }
                    ?>
                    <td style="padding-right:70%;">
                            <input readonly="2" value="<?php echo ucwords(Terbilang($reduce->jumlah_tagih))."Rupiah";?>" id="uang" name="jumlah_tagih" type="text" style="width:480%;">
                    </td>
                  </tr>

                  <tr>
                    <td>
                            <label for="first_name" class="active"><font size="2px;">Untuk pembayaran</font></label>                      
                    </td>
                    <td style="padding-right:70%;">
                        <input type="text" value="<?="Tagihan Progres Ke ".$reduce->progres;?>" id="jumlah_tagih" name="jumlah_tagih" placeholder="" readonly="" style="width:480%;">
                    </td>
                  </tr>
                  <tr>
                    <td>
                            <label for="first_name" class="active"><font size="2px;">Nomor SPK</font></label> </td>
                    <td style="padding-right:70%;">
                        <input type="text" value="<?=$reduce->spk;?>" id="spk" name="spk" placeholder="" readonly="" style="width:480%;">
                    </td>
                  </tr>
                  <tr>
                    <td>
                            <label for="first_name" class="active"><font size="2px;">Jenis Pekerjaan</font></label>                      
                    </td>
                    <td style="padding-right:70%;">
                        <input type="text" value="<?=$reduce->jenis_pekerjaan;?>" id="jenis_pekerjaan" name="jenis_pekerjaan" placeholder="" readonly="" style="width:480%;">
                    </td>
                  </tr>
                  </table>
                    <ul class="collection waves-light left" style="width:30%;">
                     <a class="collection-item"><input type="text" value="<?='Rp.'.number_format($reduce->jumlah_tagih).',-';?>" id="jumlah_tagih" name="jumlah_tagih" placeholder="" readonly="" style="width:480%;"><span class="badge"></span></a>
                     </ul>
                     <br>

                       <font size="4" style="padding-left:45%;"> Depok, <?=date('d-m-Y', strtotime($reduce->create_date));?></font>
                     <br>
                     <br>
                     <?php echo form_open_multipart('action/tandakwitansi');?>
                      <div class="file-field input-field">
                      <input class="file-path validate" type="text">
                      <div class="btn">
                        <span>Foto</span>
                        <input type="file" name="userfile">
                      </div>
                    </div>
                     <br>
                 
                     <font size="4" style="padding-left:75%;">test</font>
                          <div class="row" style="padding-left:500px;">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action" style="margin-left:10px;">Send
                              </button>
                              <a href="<?php echo site_url('action/print_kwitansi') ?>"> <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Print
                              </button> </a>
                              </form>
                            <?php } ?>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  </div>
                  </div>