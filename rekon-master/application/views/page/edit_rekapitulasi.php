<section id="content">

        <!--start container-->

        <div id="breadcrumbs-wrapper" class="" style="width:100%;">
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Edit Rekapitulasi</h5>
                            <ol class="breadcrumb">
                                <li><a href="index-2.html">Dashboard</a></li>
                                <li><a href="<?=site_url('administrator/main/rekapitulasi')?>">Rekapitulasi</a></li>
                                <li class="active">Edit Rekapitulasi</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>          

        <div class="col s12 m12 l6">
                  <div class="card-panel">
                    <h4 class="header2">Edit Rekapitulasi</h4>
                    <div class="row">
                        <div class="row">
                        <?=form_open('action/edit_rekapitulasi');?>
                        <?php $id = $this->uri->segment(4);
                        $show_item = $this->db->get_where('tbl_rekapitulasi', array("id_kategory"=>"$id"));
                        foreach ($show_item->result() as $reduce) { ?>
                            <div class="input-field col s12">
                            <label for="spk" class="active">Surat Perintah Kerja</label>
                            <select name="spk" id="spk">
                            <?php $query = $this->db->get('tbl_spk');
                            foreach ($query->result() as $datap) { ?>
                              <option value="<?=$datap->spk;?>"><?=$datap->spk;?></option>
                             <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" value="<?php echo $reduce->nilai_kontrak; ?>" id="nilai_kontrak" type="text" name="nilai_kontrak">
                            <label for="nilai_kontrak" class="active">Nilai Kontrak</label>
                          </div>                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" value="<?php echo $reduce->progres; ?>" id="progres" type="text" name="progres">
                            <label for="progres" class="active">Progress</label>
                          </div>
                        </div>  
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" value="<?php echo $reduce->tgl_tagih; ?>" id="tgl_tagih" type="date" name="tgl_tagih">
                            <label for="tgl_tagih" class="active">Tanggal Penagihan</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" value="<?php echo $reduce->nilai_tagih; ?>" id="nilai_tagih" type="text" name="nilai_tagih">
                            <label for="nilai_tagih" class="active">Nilai Tagihan</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" value="<?php echo $reduce->tgl_pembayaran; ?>" id="tgl_pembayaran" type="date" name="tgl_pembayaran">
                            <label for="tgl_pembayaran" class="active">Tanggal Pembayaran</label>
                          </div>
                        </div>  
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" value="<?php echo $reduce->nilai_pembayaran; ?>" id="nilai_pembayaran" type="text" name="nilai_pembayaran">
                            <label for="nilai_pembayaran" class="active">Nilai Pembayaran</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" value="<?php echo $reduce->jumlah_tagih; ?>" id="jumlah_tagih" type="text" name="jumlah_tagih">
                            <label for="jumlah_tagih" class="active">Jumlah Tagih</label>
                          </div>
                        </div>                          
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" value="<?php echo $reduce->jumlah_pembayaran; ?>" id="jumlah_pembayaran" type="text" name="jumlah_pembayaran">
                            <label for="jumlah_pembayaran" class="active">Jumlah Pembayaran</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" value="<?php echo $reduce->total; ?>" id="total" type="text" name="total">
                            <label for="total" class="active">Total</label>
                          </div>
                        </div>
                         <?php } ?>                                                                                                                                       
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light" onclick="return confirm('Apakah data yang di ubah sudah sesuai?')" type="submit" name="action">Submit
                              </button>
                              <button onclick="goBack()" class="btn cyan waves-effect waves-light" type="submit" name="action">Cancel
                              </button>
                             
                              <?=form_close();?>
                            </div>
                          </div>
                        </div> 
                    </div>
                  </div>
                </div>
        <!--start container-->
</section>   
           
        <!--end container-->
      <!-- END CONTENT --> 
                <!--end container-->
<script>
function goBack() {
    window.history.go(-1);
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#nama_proyek').on('change', function(){
    var dataProyek = $(this).val();
    $('#spk').empty();
      $.ajax({
        url: "<?php echo site_url('action/token') ?>",
        type: "POST",
        data: {proyek: dataProyek},
        success: function(notice){
          var htmlSpk = '';
          notice.map(function(obj) {
            var data = '<option value="{0}">{0}</option>';
            htmlSpk += data.format([obj.spk]);
          });

          $('#spk').html(htmlSpk);
          $("#spk").material_select();

          $('#spk').on('change', function(e) {
            var value = $(this).val();
            $('#spk_hidden').val(value);

            $.ajax({
              url: "<?php echo site_url('action/datar') ?>", 
              type: "POST", 
              data: {proyek: dataProyek, spk: value},
              success: function(dataSpk) {
                $('#nilai_kontrak').val(dataSpk.nilai_kontrak);
                $('#uraian').val(dataSpk.uraian);
              }
            });
          });
        }
      })
  })
})
</script>