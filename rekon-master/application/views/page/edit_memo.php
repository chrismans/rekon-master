<section id="content">

        <!--start container-->

        <div id="breadcrumbs-wrapper" style="width:100%;">
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Memo Pembayaran</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator') ?>">Dashboard</a></li>
                                <li><a href="<?=site_url('administrator/main/memo_pembayaraan')?>">Memo Pembayaraan</a></li>
                                <li class="active">Edit Pembayaraan</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>        	

              <div class="row">
                <div class="col s12 m12 l6"  style="width:100%;">
                  <div class="card-panel" style="width:100%;">
                    <div class="row">
                        <div class="row">
                        <?=form_open('action/edit_memo', "class='stdform stdform2'")?>
                        <?php $id = $this->uri->segment(4);
                        $show_item = $this->db->get_where('tbl_memo', array("id_kategory"=>"$id"));
                        foreach ($show_item->result() as $reduce) { ?> 
                        <input type="hidden" value="<?=$reduce->id_kategory;?>" id="id" name="id">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->nama_proyek;?>" id="nama_proyek" name="nama_proyek" type="text" readonly="1">
                            <label for="nama_proyek" class="active">Nama Proyek</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->spk;?>" id="spk" name="spk" type="text" readonly="1">
                            <label for="spk" class="active">SPK</label>
                          </div>
                        </div>
                        <div class="input-field col s12">
                            <input value="<?=$reduce->uraian;?>" id="uraian" name="uraian" type="text" readonly="1">
                            <label for="uraian" class="active">Uraian Pekerjaan</label>
                          </div>
                        </div>
                         <div class="row">
                           <div class="input-field col s12">
                            <input value="<?=$reduce->tanggal;?>" id="tanggal" name="tanggal" type="text" readonly="1">
                            <label for="tanggal" class="active">Tanggal</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->type;?>" id="type" name="type" type="text" readonly="1">
                            <label for="type" class="active">Type</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->nama_kavling;?>" id="kavling" name="kavling" type="text" readonly="1">
                            <label for="kavling" class="active">Kavling</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->unit;?>" id="unit" name="unit" type="text">
                            <label for="unit" class="active">Jumlah Unit Yang Dikerjakaan</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->progres;?>" id="progres" name="progres" type="text">
                            <label for="progres" class="active">Progres Pekerjaan Dilapangan</label>
                          </div>
                        </div> 

                           <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light" type="submit" name="action">Submit
                              </button>
                              <button onclick="goBack()" class="btn cyan waves-effect waves-light" type="submit" name="action">Cancel
                              </button>
                              <?php } ?>
                              <?php echo form_close(); ?>
                            </div>
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
