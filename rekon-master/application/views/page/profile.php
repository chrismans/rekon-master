<div id="basic-form" class="section" align="center">
              <div class="row">
                <div class="col s12 m12 l6"  style="width:100%;">
                  <div class="card-panel" style="width:100%;">
                  
                    <font size="5" color="#0000" face="Segoe UI">PENGATURAN AKUN</font>
                    <hr><br>
                    <div class="row">
                        <?=form_open_multipart('action/edit_profile', "class='stdform stdform2'")?>
                        <?php $id = $this->uri->segment(4);
                        $show_item = $this->db->get_where('tbl_user', array("id_user"=>"$id"));
                        foreach ($show_item->result() as $reduce) { ?>
                        <input type="hidden" name="id_user" value="<?=$reduce->id_user;?>">
                        <div class="input-field col s12">
                          <i class="mdi-image-tag-faces prefix"></i>
                          <input id="nama" type="text" name="nama" value="<?=$reduce->nama;?>">
                          <label for="nama">Name</label>
                        </div>
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input id="userid" type="text" name="userid" value="<?=$reduce->userid;?>">
                          <label for="userid">Username</label>
                        </div>
                        
                        <div class="input-field col s12">
                          <i class="mdi-action-lock-outline prefix"></i>
                          <input id="userpass" type="text" name="userpass" value="<?=$reduce->userpass;?>">
                          <label for="userpass">Password</label>
                        </div>
                        <div class="input-field col s12">
                      <div class="file-field input-field">
                      <input class="file-path validate" type="text">
                      <div class="btn">
                        <span>Foto</span>
                        <input name="userfile" id="foto" type="file">
                      </div>
                    </div>
                        </div>                        
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn waves-effect waves-light indigo right" type="submit" name="action">Simpan Perubahan
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