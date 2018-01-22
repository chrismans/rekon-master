
                <!--start container-->

                    <!-- START WRAPPER -->
                <div id="breadcrumbs-wrapper" class="" style="width:100%;">
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">PP</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator');?>">Dashboard</a></li>
                                <li class="active">PP</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>

                <div class="container"><br><br>
                <b>A. Kontrak Pekerjaan</b><br>
                <p>&nbsp&nbsp&nbsp&nbsp Nilai Kontrak</p>
                <p>&nbsp&nbsp&nbsp&nbsp Jasa Kontruksi 10%</p>
                <br>
                <b>B. Realisasi Biaya Kontruksi</b><br>
                <p>&nbsp&nbsp&nbsp&nbsp Nilai Kontrak</p>
                <p>&nbsp&nbsp&nbsp&nbsp Jasa Kontruksi 10%</p>
                <br>
                <b>C. Sisa Anngaran (A-B)</b>
                <br><br>
                <b>D. Waktu Pelaksanaan & Masa Retensi</b><br>                                                                                
                <div class="col s12 m8 l9">
                  
                  <table id="data-table-simple" class="responsive-table display dataTable" cellspacing="0" role="grid" aria-describedby="data-table-simple_info" border="1">
                    <thead>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Pelaksanaan :</th>    
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">120</th>    
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Hari Kerja</th>    
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Realisasi Pelaksanaan - IPL Mandor</th>    

                    </thead>
                    <tfoot>
                        <tr><th rowspan="1" colspan="1">Name Proyek</th><th rowspan="1" colspan="1">Tanggal Surat Perintah Kerja</th><th rowspan="1" colspan="1">Surat Perintah Kerja</th><th rowspan="1" colspan="1">Uraian</th><th rowspan="1" colspan="1">Nilai Kontrak</th><th rowspan="1" colspan="1">Modify</th></tr>
                    </tfoot>
                 
                    <tbody>
                    <tr role="row" class="odd">
                      <td>27-feb-15</td>
                      <td>SD</td>
                      <td>27-jun-15</td>
                      </tr>
                      <hr>
                          <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Retensi Berakhir :</th>    
                          <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">100</th>    
                          <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Hari Kerja </th>    
                        
                    <tr role="row" class="odd">
                      <td>27-jun-15</td>
                      <td>SD</td>
                      <td>5-oct-jun-15</td>
                      </tr>

                    </tbody>
                    <br><br>
                </div>
              </div>
            </div>
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a href="#" class="btn-floating btn-large red" alt"New Proyek" title="New Proyek">
                  <i class="large mdi-content-add-circle"></i>
                </a>
            </div>
            </table>
            </div>
            </div>

            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/print_pp');?>" title="Print"><li class="mdi-action-print"></li>
            </a>
            </div>