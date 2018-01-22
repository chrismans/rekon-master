        <style type="text/css">
        #gmb{
            width: 110px;
            height: 70px;
        }
        </style>
        <div class="wrapper">
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img id="gmb" src="<?php echo base_url()."assets/profileupload/".$this->session->userdata('foto');?>" class="circle responsive-img valign profile-image" >
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="<?=site_url('administrator/main/profile/')?>/<?=$this->session->userdata('id_user')?>"><i class="mdi-action-account-circle"></i>Profile</a>
                                    </li>
                                    <li><a href="<?php echo site_url('action/logout'); ?>"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?=$this->session->userdata('nama')?></a>
                                <p class="user-roal"><?php echo $this->session->userdata('hak_akses')?><i class="mdi-navigation-arrow-drop-down right"></i></p>
                            </div>
                        </div>
                    </li>
                    <li class="bold active"><a href="<?=base_url('administrator');?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-list"></i>Master Data</a>
                        <div class="collapsible-body">
                            <ul>

                                <?php if ($this->session->userdata('hak_akses')) { 
                                    if ($this->session->userdata('hak_akses')=='Administrator') {
                                    ?>

                                <li><a href="<?=site_url('administrator/main/proyek')?>"> <img width="26" height="26" src="<?php echo base_url('assets/materialize/images/pro.png'); ?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspProyek</a>
                                </li>
                                <li><a href="<?=site_url('administrator/main/spk')?>"><i class="mdi-action-assignment"></i>SPK</a>
                                </li>
                                <li><a href="<?=site_url('administrator/main/kavling')?>"><i class="mdi-action-account-balance-wallet"></i> Kavling</a>
                                </li>
                                <?php } elseif ($this->session->userdata('hak_akses')=='Kantor') { ?>
                                <li><a href="<?=site_url('administrator/main/proyek')?>"> <img width="26" height="26" src="<?php echo base_url('assets/materialize/images/pro.png'); ?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspProyek</a>
                                </li>
                                <li><a href="<?=site_url('administrator/main/spk')?>"><i class="mdi-action-assignment"></i>SPK</a>
                                </li>
                                <li><a href="<?=site_url('administrator/main/kavling')?>"><i class="mdi-action-account-balance-wallet"></i> Kavling</a>
                                </li>
                                <?php } ?>                            
                                <?php } ?>
                                <li><a href="<?=site_url('administrator/main/ipl')?>"><i class="mdi-action-class"></i>IPL</a>
                                </li>
                                <?php if ($this->session->userdata('hak_akses')) { 
                                    if ($this->session->userdata('hak_akses')=='Administrator') {
                                    ?>

                                <li><a href="<?=site_url('administrator/main/subkon')?>"><i class="mdi-action-account-child"></i> Mandor</a>
                                </li>
                                <?php } elseif ($this->session->userdata('hak_akses')=='Kantor') {?>
                               <li><a href="<?=site_url('administrator/main/subkon')?>"><i class="mdi-action-account-child"></i> Mandor</a>
                                </li>
                                <?php } ?>                                
                                <?php } ?>
                                <?php if ($this->session->userdata('hak_akses')=='Administrator') { ?>
                                <li><a href="<?=site_url('administrator/main/user')?>"><i class="mdi-action-face-unlock"></i>User</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
                                <?php if ($this->session->userdata('hak_akses')) { 
                                    if ($this->session->userdata('hak_akses')=='Administrator') {
                                    ?>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-people-outline"></i>Transaksi</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?=site_url('administrator/main/sertifikat_pembayaran')?>"><i class="mdi-action-assignment-turned-in"></i>sertifikat </a>
                                </li>
                            </ul>
                            <ul>
                                <li><a href="<?=site_url('administrator/main/memo_pembayaran')?>"><i class="mdi-action-description"></i>Memo</a>
                                </li>
                                <li><a href="<?=site_url('administrator/main/finance')?>"><img width="26" height="26" src="<?php echo base_url('assets/materialize/images/finance1.png'); ?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFinance</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
                                <?php } elseif ($this->session->userdata('hak_akses')=='Kantor') {?>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-people-outline"></i>Transaksi</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?=site_url('administrator/main/sertifikat_pembayaran')?>"><i class="mdi-action-assignment-turned-in"></i>sertifikat </a>
                                </li>
                            </ul>
                            <ul>
                                <li><a href="<?=site_url('administrator/main/memo_pembayaran')?>"><i class="mdi-action-description"></i>Memo</a>
                                </li>
                                <li><a href="<?=site_url('administrator/main/finance')?>"><img width="26" height="26" src="<?php echo base_url('assets/materialize/images/finance1.png'); ?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFinance</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>                                
                                <?php } ?>            
            <?php } ?>
                    <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-receipt"></i>Laporan</a>
                        <div class="collapsible-body">
                            <ul>
                                <?php if ($this->session->userdata('hak_akses')) { 
                                    if ($this->session->userdata('hak_akses')=='Administrator') {
                                    ?>
                                <li><a href="<?=site_url('administrator/main/register')?>"><i class="mdi-action-assignment-late"> </i> Register</a>
                                </li>
                                <?php } elseif ($this->session->userdata('hak_akses')=='Kantor') {?>
                                <li><a href="<?=site_url('administrator/main/register')?>"><i class="mdi-action-assignment-late"> </i> Register</a>
                                </li>
                                <?php } ?>
                                <?php } ?>
                                <li><a href="<?=site_url('administrator/main/resume')?>"><i class="mdi-maps-local-attraction"></i> Resume</a>
                                </li>
                                <?php if ($this->session->userdata('hak_akses')) { 
                                    if ($this->session->userdata('hak_akses')=='Administrator') {
                                    ?>
                                <li><a href="<?=site_url('administrator/main/data_pembayaran')?>"><i class="mdi-action-markunread-mailbox"></i>Data</a>
                                </li>
<!--                                 <li><a href="<?=site_url('administrator/main/pp')?>">Progres Pembangunan</a>
                                </li> -->
                                <?php } elseif ($this->session->userdata('hak_akses')=='Kantor') {?>
                                <li><a href="<?=site_url('administrator/main/data_pembayaran')?>"><i class="mdi-action-markunread-mailbox"></i>Data</a>
                                </li>                                
                                <?php } ?>
                                <?php } ?>
                                <li><a href="<?=site_url('administrator/main/visual')?>"><i class="mdi-image-camera-alt"></i>Visual Report</a>
                                </li>
                                <?php if ($this->session->userdata('hak_akses')) { 
                                    if ($this->session->userdata('hak_akses')=='Administrator') {
                                    ?>
                                <li><a href="<?=site_url('administrator/main/progres_unit')?>"><i class="mdi-action-trending-up"></i> <font> Progres Perunit</font></a>
                                </li>
                                <li><a href="<?=site_url('administrator/main/rekapitulasi')?>"><i class="mdi-action-credit-card"></i> Rekapitulasi</a>
                                </li>
                                <li><a href="<?=site_url('administrator/main/pesan')?>"><i class="mdi-content-content-paste"></i> Pesan Masuk</a>
                                </li>
                                <?php } elseif ($this->session->userdata('hak_akses')=='Kantor') {?>
                                <li><a href="<?=site_url('administrator/main/progres_unit')?>"><i class="mdi-action-trending-up"></i> <font> Progres Perunit</font></a>
                                </li>
                                <li><a href="<?=site_url('administrator/main/rekapitulasi')?>"><i class="mdi-action-credit-card"></i> Rekapitulasi</a>
                                </li>
                                <li><a href="<?=site_url('administrator/main/pesan')?>"><i class="mdi-content-content-paste"></i> Pesan Masuk</a>
                                </li>
                                <?php } ?>                                
                                <?php } ?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>

                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i style="background-color:#F95D13;" class="mdi-navigation-menu"></i></a>
            </aside>
         <!--    <aside id="right-sidebar-nav">
                <ul id="chat-out" class="side-nav rightside-navigation">
                    <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>

                    </li>
                    <li class="li-hover">
                        <ul class="chat-collapsible" data-collapsible="expandable">
                        <li>

                            <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>

                            <div class="collapsible-body recent-activity">
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">jadwal Solat</a>
                                        <p style="text-align: center;"><iframe src="http://www.jadwalsholat.org/adzan/ajax.row.php" height="220" width="220" frameborder="0"></iframe><a href="http://www.jadwalsholat.org" target="_blank" rel="nofollow" ><img class="aligncenter"/></a></p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Yesterday</a>
                                        <p>Your Next flight for USA will be on 15th August 2015.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Last Week</a>
                                        <p>Jessy Jay open a new store at S.G Road.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                            <div class="collapsible-body sales-repoart">
                                <div class="sales-repoart-list  chat-out-list row">
                                    <div class="col s8">Target Salse</div>
                                    <div class="col s4"><span id="sales-line-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Payment Due</div>
                                    <div class="col s4"><span id="sales-bar-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Delivery</div>
                                    <div class="col s4"><span id="sales-line-2"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Progress</div>
                                    <div class="col s4"><span id="sales-bar-2"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                            <div class="collapsible-body favorite-associates">
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Eileen Sideways</p>
                                        <p class="place">Los Angeles, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Zaham Sindil</p>
                                        <p class="place">San Francisco, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Renov Leongal</p>
                                        <p class="place">Cebu City, Philippines</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Weno Carasbong</p>
                                        <p>Tokyo, Japan</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Nusja Nawancali</p>
                                        <p class="place">Bangkok, Thailand</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        </ul>
                    </li>
                </ul>
            </aside> -->
        </div>
