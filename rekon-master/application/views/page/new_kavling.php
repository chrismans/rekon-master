 
<section id="content">

        <!--start container-->

        <div id="breadcrumbs-wrapper" class="" style="width:100%;">
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">New Kavling</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator');?>">Dashboard</a></li>
                                <li><a href="<?php echo site_url('administrator/main/kavling');?>">Kavling</a></li>
                                <li class="active">New Kavling</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>                  
              <div class="row" align="center">
                <div class="col s12 m12 l6"  style="width:100%;">
                  <div class="card-panel" style="width:100%;">
                    <div class="row">
                        <div class="row">
                         <?=form_open('action/saveKavling');?>                          
                          <div class="input-field col s12">
                            <label for="nama_proyek" class="active">Nama Proyek</label>
                            <select name="nama_proyek" id="nama_proyek">
                            <?php $query = $this->db->query("SELECT DISTINCT nama_proyek FROM tbl_spk");
                            foreach ($query->result() as $datap) { ?>
                              <option value="<?=$datap->nama_proyek;?>"><?=$datap->nama_proyek;?></option>
                             <?php } ?>
                            </select>
                          </div>
                          <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" name="spk_hidden" id="spk_hidden">
                            <label for="spk" class="active">Surat Perintah Kerja</label>                            
                            <select id="spk" name="spk">
                              <option></option>
                            </select>
                          </div>
                        </div>

                  <table class="centered" id="table-data">
                    <thead>
                      <tr>
                        <th data-field="id">No</th>
                        <th width="300" data-field="nama_kavling">Nama Kavling</th>
                        <th data-field="name">Type</th>
                        <th data-field="satuan">Satuan</th>
                        <th data-field="status">Status</th>
                        <th data-field="harga_satuan">Harga Satuan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="tr_clone">
                        <td>1</td>
                        <td>
                            <input id="nama_kavling" name="nama_kavling[]" type="text" autofocus  style="width:50%;">
                        </td>
                        <td>
                            <input id="type" name="type[]" type="text" autofocus style="width:50%;">
                        </td>
                        <td>
                            <input type="text" autofocus name="satuan[]" id="satuan">
                        </td>
                        <td>
                          <select name="status[]" autofocus>
                            <option value="standart" autofocus>Standart</option>
                            <option value="hook" autofocus>Hook</option>
                            <option value="khusus" autofocus>Khusus</option>
                          </select>
                        </td>
                        <td>
                            <input id="harga_satuan" name="harga_satuan[]" autofocus type="text" style="width:50%;">
                        </td>   
                        <td>
                          <input type="button" name="add" value="add" class="tr_clone_add">
                        </td>                           
                        </tr>
                    </tbody>
                    <br>
                  </table>
                  <!-- <a name="add" value="add" id="add" class="btn-floating waves-effect waves-light brown"><i class="mdi-content-add"></i></a> -->
                </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action" style="margin-left:10px;">Submit
                              </button>
                              <button onclick="goBack()" class="btn cyan waves-effect waves-light right" type="submit" name="action">Cancel
                              </button>
                              <?=form_close();?>
                            </div>
                          </div>        
<script type="text/javascript">
  

  var table = $('#table-data')[0];
  var cri = 1;
  $(table).delegate('.tr_clone_add','click',function(){
    cri++;
    var baris = '<tr class="tr_clone"><td>'+cri+'</td><td><input id="nama_kavling" name="nama_kavling[]" type="text" autofocus  style="width:50%;"></td><td><input id="type" name="type[]" type="text" autofocus style="width:50%;"></td><td><input type="text" autofocus name="satuan[]" id="satuan"></td><td><select name="status[]" autofocus><option value="standart" autofocus>Standart</option><option value="hook" autofocus>Hook</option><option value="khusus" autofocus>Khusus</option></select></td><td><input id="harga_satuan" name="harga_satuan[]" autofocus type="text" style="width:50%;"></td><td><input type="button" name="add" value="add" class="tr_clone_add"></td></tr>';
    $(baris).appendTo($(table).find('tbody')).find('select[name="status[]"]').material_select();
  });
</script>

<script>
function goBack() {
    window.history.go(-1);
}
</script>

<script type="text/javascript">
  $("#nama_proyek").on('change', function(){
    var id = $(this).val();
    $.ajax({
      url: '<?php echo site_url("action/gtsspk")?>',
      type: 'POST',
      data: {id: id},
      dataType:'json',
      success : function(data){
        console.log(data);

      $("#spk").empty();
        $("#spk").append('<option selected>------</option>');
        for(var index in data){
          $("#spk").append('<option value='+data[index].spk+'>'+data[index].spk+'</option>');
        }
        $("#spk").material_select();
      }
    })
})
</script> 