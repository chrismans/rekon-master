<?php
class Action extends CI_Controller
{
	
	function cek_login() {
		$userid = $this->input->post("userid");
		$userpass = $this->input->post("userpass");
		$query = $this->Noric->cekLogin($userid, $userpass);
		if ($query) {
			foreach ($query as $key => $value) {
				$userdata = array(	'hak_akses' => $value->hak_akses,
									'id_user' => $value->id_user,
									'foto'=> $value->foto,
									'nama' => $value->nama);
				$this->session->set_userdata($userdata);
			}
			redirect('administrator'); 
		}
		else
		{
 			echo ("User name dan password anda salah !");
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('administrator');
	}
	function saveProyek() {
		$this->load->library('form_validation');
		$this->Noric->save_proyek();
		redirect('administrator/main/proyek');
	}
	function saveuser() {
		$this->load->library('form_validation');
		$this->Noric->save_user();
		redirect('administrator/main/user');
	}
	function saveSPK() {
		$this->load->library('form_validation');
		$this->Noric->save_spk();
		redirect('administrator/main/spk');
	}
	function save_ipl() {
		$this->load->library('form_validation');
		$this->Noric->save_ipl();
		redirect('administrator/main/ipl');
	}
	function save_progresunit() {
		$this->load->library('form_validation');
		$this->Noric->save_progresunit();
		redirect('administrator/main/progres_unit');
	}
	function saveSubkon() {
		$this->load->library('form_validation');
		$this->Noric->save_subkon();
		redirect('administrator/main/subkon');
	}			
	function saveKavling() {
		$this->load->library('form_validation');
		$this->Noric->save_kavling();
		redirect('administrator/main/kavling');
	}
	function saveregister(){
		$this->load->library('form_validation');
		$this->Noric->save_register();
		redirect('administrator/main/register');
	}
	function savekwitansi(){
		$this->load->library('form_validation'); 
		$this->Noric->save_kwitansi();
		redirect('administrator/main/kwitansi');
	}
	function savesp(){
		$this->load->library('form_validation');
		$this->Noric->save_sp();
		$this->Noric->save_finance();
		redirect('administrator/main/sertifikat_pembayaran');
	}
	function saveresume(){
		$this->load->library('form_validation');
		$this->Noric->save_resume();
		redirect('administrator/main/resume');
	}
	function save_memo() {
		$this->load->library('form_validation');
		$this->Noric->save_memo();
		redirect('administrator/main/memo_pembayaran');
	}
	function save_contact() {
		$this->load->library('form_validation');
		$this->Noric->save_contact();
		redirect('Home/contact');
	}
	function save_edit() {
		$id=$this->input->post("id");

		$e['nama_proyek'] = $this->input->post('nama_proyek');
		$e['nama_owner'] = $this->input->post('nama_owner');
		$e['telp'] = $this->input->post('telp');
		$e['hp'] = $this->input->post('hp');
		$e['pic'] = $this->input->post('pic');
		$e['alamat'] = $this->input->post('alamat');

		$update = $this->db->query("UPDATE tbl_proyek SET
									nama_proyek = '$e[nama_proyek]',
									nama_owner = '$e[nama_owner]',
									telp = '$e[telp]',
									hp = '$e[hp]',
									pic = '$e[pic]', 
									alamat = '$e[alamat]'
								WHERE id_proyek='$id'");
		if($update) {
			redirect('administrator/main/proyek');
		}
		else {
			echo "Gagal";
		}
	}
	function edit_memo() {
		$id=$this->input->post("id");

		$e['nama_proyek'] = $this->input->post('nama_proyek');
		$e['spk'] = $this->input->post('spk');
		$e['uraian'] = $this->input->post('uraian');
		$e['tanggal'] = $this->input->post('tanggal');
		$e['type'] = $this->input->post('type');
		$e['unit'] = $this->input->post('unit');
		$e['progres'] = $this->input->post('progres');

		$update = $this->db->query("UPDATE tbl_memo SET
									nama_proyek = '$e[nama_proyek]',
									spk = '$e[spk]',
									uraian = '$e[uraian]',
									tanggal = '$e[tanggal]',
									type = '$e[type]', 
									unit = '$e[unit]', 
									progres = '$e[progres]'
								WHERE id_kategory='$id'");
		if($update) {
			redirect('administrator/main/memo_pembayaran');
		}
		else {
			echo "Gagal";
		}
	}
	function update_finance() {
		$this->Noric->save_rekapitulasi();
		$id=$this->input->post("id");

		$e['spk'] = $this->input->post('spk');
		$e['nilai_kontrak'] = $this->input->post('nilai_kontrak');
		$e['progres'] = $this->input->post('progres');
		$e['jumlah_tagih'] = $this->input->post('jumlah_tagih');
		$e['tglbayar'] = $this->input->post('tglbayar');
		$e['nilai_byr'] = $this->input->post('nilai_byr');
		$e['kurang_tgh'] = $this->input->post('kurang_tgh');

		$update = $this->db->query("UPDATE tbl_finance SET
									spk = '$e[spk]',
									nilai_kontrak = '$e[nilai_kontrak]',
									progres = '$e[progres]',
									jumlah_tagih = '$e[jumlah_tagih]', 
									tglbayar = '$e[tglbayar]', 
									nilai_byr = '$e[nilai_byr]', 
									kurang_tgh = '$e[kurang_tgh]'
								WHERE id_finance='$id'");
		if($update) {
			redirect('administrator/main/finance');
		}
		else {
			echo "Gagal";
		}
	}

    function save_visual(){

         $config['upload_path']          = './assets/visualupload/';
         $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
         $config['max_size']     = '100';
               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());
                        redirect('administrator/main/new_visual');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $nm_gbr    =$_FILES['userfile'] ['name'];
                        $namaproyek       =$this->input->post('nama_proyek');
                        $suratpk       = $this->input->post('suratpk');
                        $kavling 	= $this->input->post('nama_kavling');
                        $progres 	= $this->input->post('progres');
                        $this->Noric->uploadgambar( $nm_gbr, $namaproyek, $suratpk, $kavling, $progres); 

                        redirect('administrator/main/visual');


                }
        }
	function edit_spk() {
		$id=$this->input->post("id");

		$e['nama_proyek'] = $this->input->post('nama_proyek');
		$e['tgl_spk'] = $this->input->post('tgl_spk');
		$e['spk'] = $this->input->post('spk');
		$e['uraian'] = $this->input->post('uraian');
		$e['nilai_kontrak'] = $this->input->post('nilai_kontrak');

		$update = $this->db->query("UPDATE tbl_spk SET
									nama_proyek = '$e[nama_proyek]',
									tgl_spk = '$e[tgl_spk]',
									spk = '$e[spk]',
									uraian = '$e[uraian]',
									nilai_kontrak = '$e[nilai_kontrak]'
								WHERE id_spk='$id'");
		if($update) {
			redirect('administrator/main/spk');
		}
		else {
			echo "Gagal";
		}
	}
	function edit_user() {
		$id=$this->input->post("id");

		$e['userid'] = $this->input->post('userid');
		$e['userpass'] = $this->input->post('userpass');
		$e['nama'] = $this->input->post('nama');
		$e['hak_akses'] = $this->input->post('hak_akses');
		$e['status'] = $this->input->post('status');

		$update = $this->db->query("UPDATE tbl_user SET
									userid = '$e[userid]',
									userpass = '$e[userpass]',
									nama = '$e[nama]',
									hak_akses = '$e[hak_akses]',
									status = '$e[status]'
								WHERE id_user='$id'");
		if($update) {
			redirect('administrator/main/user');
		}
		else {
			echo "Gagal";
		}
	}
	function edit_resume() {
		$id=$this->input->post("id");

		$e['nama_pemborong'] = $this->input->post('nama_pemborong');
		$e['spk'] = $this->input->post('spk');
		$e['nama_kavling'] = $this->input->post('nama_kavling');
		$e['type'] = $this->input->post('type');
		$e['satuan'] = $this->input->post('satuan');
		$e['harga_satuan'] = $this->input->post('harga_satuan');
		$e['jumborong'] = $this->input->post('jumborong');
		$e['minggulalu'] = $this->input->post('minggulalu');
		$e['mingguini'] = $this->input->post('mingguini');
		$e['sdmingguini'] = $this->input->post('sdmingguini');
		$e['sisa'] = $this->input->post('sisa');
		$e['tagihanlalu'] = $this->input->post('tagihanlalu');
		$e['tagihanini'] = $this->input->post('tagihanini');
		$e['tagihansisa'] = $this->input->post('tagihansisa');
		$e['retensi'] = $this->input->post('retensi');

		$update = $this->db->query("UPDATE tbl_resume SET
									nama_pemborong = '$e[nama_pemborong]',
									spk = '$e[spk]',
									nama_kavling = '$e[nama_kavling]',
									type = '$e[type]',
									satuan = '$e[satuan]',
									harga_satuan = '$e[harga_satuan]',
									jumborong = '$e[jumborong]',
									minggulalu = '$e[minggulalu]',
									mingguini = '$e[mingguini]',
									sdmingguini = '$e[sdmingguini]',
									sisa = '$e[sisa]',
									tagihanlalu = '$e[tagihanlalu]',
									tagihanini = '$e[tagihanini]',
									tagihansisa = '$e[tagihansisa]',
									retensi = '$e[retensi]'
								WHERE id='$id'");
		if($update) {
			redirect('administrator/main/resume');
		}
		else {
			echo "Gagal";
		}
	}
	function edit_subkon() {
		$id=$this->input->post("id");
		$e['nama_subkon'] = $this->input->post('nama_subkon');
		$e['nama_pemborong'] = $this->input->post('nama_pemborong');
		$e['no_telp'] = $this->input->post('no_telp');
		$e['uraian_pekerjaan'] = $this->input->post('uraian_pekerjaan');

		$update = $this->db->query("UPDATE tbl_subkon SET
									nama_subkon = '$e[nama_subkon]',
									nama_pemborong = '$e[nama_pemborong]',
									no_telp = '$e[no_telp]',
									uraian_pekerjaan = '$e[uraian_pekerjaan]'
								WHERE id_proyek='$id'");
		if($update) {
			redirect('administrator/main/subkon');
		}
		else {
			echo "Gagal";
		}
	}
	function edit_ipl() {
		$id=$this->input->post("id");

		$e['nama_proyek'] = $this->input->post('nama_proyek');
		$e['spk'] = $this->input->post('spk');
		$e['nama_subkon'] = $this->input->post('nama_subkon');
		$e['nama_pemborong'] = $this->input->post('nama_pemborong');
		$e['jenis_pekerjaan'] = $this->input->post('jenis_pekerjaan');
		$update = $this->db->query("UPDATE tbl_ipl SET
									nama_proyek = '$e[nama_proyek]',
									spk = '$e[spk]',
									nama_subkon = '$e[nama_subkon]',
									nama_pemborong = '$e[nama_pemborong]',
									jenis_pekerjaan = '$e[jenis_pekerjaan]'
								WHERE id_ipl='$id'");
		if($update) {
			redirect('administrator/main/ipl');
		}
		else {
			echo "Gagal";
		}
	}
	function edit_progres() {
		$id=$this->input->post("id");
		$e['tgl_tagih1'] = $this->input->post('tgl_tagih1');
		$e['dp'] = $this->input->post('dp');
		$e['tgl_tagih2'] = $this->input->post('tgl_tagih2');
		$e['progres1'] = $this->input->post('progres1');
		$e['tgl_tagih3'] = $this->input->post('tgl_tagih3');
		$e['progres2'] = $this->input->post('progres2');
		$e['tgl_tagih4'] = $this->input->post('tgl_tagih4');
		$e['progres3'] = $this->input->post('progres3');
		$e['tgl_tagih5'] = $this->input->post('tgl_tagih5');
		$e['progres4'] = $this->input->post('progres4');
		$e['tgl_tagih6'] = $this->input->post('tgl_tagih6');
		$e['progres5'] = $this->input->post('progres5');
		$e['tgl_tagih7'] = $this->input->post('tgl_tagih7');
		$e['retensi'] = $this->input->post('retensi');

		$update = $this->db->query("UPDATE tbl_spk SET
									tgl_tagih1 = '$e[tgl_tagih1]',
									dp = '$e[dp]',
									tgl_tagih2 = '$e[tgl_tagih2]',
									progres1 = '$e[progres1]',
									tgl_tagih3 = '$e[tgl_tagih3]',
									progres2 = '$e[progres2]',
									tgl_tagih4 = '$e[tgl_tagih4]',
									progres3 = '$e[progres3]',
									tgl_tagih5 = '$e[tgl_tagih5]',
									progres4 = '$e[progres4]',
									tgl_tagih6 = '$e[tgl_tagih6]',
									progres5 = '$e[progres5]',
									tgl_tagih7 = '$e[tgl_tagih7]',
									retensi = '$e[retensi]'
								WHERE id_spk='$id'");
		if($update) {
			redirect('administrator/main/progres');
		}
		else {
			echo "Gagal";
		}
	}


	function edit_kavling() {
		$id=$this->input->post("id");

		$e['nama_proyek'] = $this->input->post('nama_proyek');
		$e['spk'] = $this->input->post('spk');
		$e['nama_kavling'] = $this->input->post('nama_kavling');
		$e['type'] = $this->input->post('type');
		$e['satuan'] = $this->input->post('satuan');
		$e['status'] = $this->input->post('status');
		$e['harga_satuan'] = $this->input->post('harga_satuan');

		$update = $this->db->query("UPDATE tbl_kavling SET
									nama_proyek = '$e[nama_proyek]',
									spk = '$e[spk]',
									nama_kavling = '$e[nama_kavling]',
									type = '$e[type]',
									satuan = '$e[satuan]',
									status = '$e[status]',
									harga_satuan = '$e[harga_satuan]'
								WHERE id_kavling='$id'");
		if($update) {
			redirect('administrator/main/kavling');
		}
		else {
			echo "Gagal";
		}
	}
	function edit_profile() {

		$config['upload_path'] = './assets/profileupload/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']     = '100';
		
		$this->load->library('upload', $config);
		
		try {
			if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			
		}
			else{
				$data = array('upload_data' => $this->upload->data());
				$id=$this->input->post("id_user");
				$e['nama'] = $this->input->post('nama');
				$e['userid'] = $this->input->post('userid');
				$e['userpass'] = $this->input->post('userpass');
				$e['foto'] =$_FILES['userfile']['name'];
				$update = $this->db->query("UPDATE tbl_user SET
											nama = '$e[nama]',
											userid = '$e[userid]',
											foto = '$e[foto]',
											userpass = '$e[userpass]'
										WHERE id_user='$id'");
			
				if($update) {
					$this->session->sess_destroy();
					redirect('administrator','refresh');
					// redirect("administrator/main/profile/$id");
				}
				else {
					echo "Gagal";
				}
			}
		} catch (Exception $e) {
			// print_r($e->getMessage());
		}

		
	}
	function tandakwitansi() {

		$config['upload_path'] = './assets/tandakwitansi/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']     = '100';
		
		$this->load->library('upload', $config);
		
		try {
			if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			
		}
			else{
				$data = array('upload_data' => $this->upload->data());
				$e['foto'] =$_FILES['userfile']['name'];
				$update = $this->db->query("UPDATE tbl_kwitansi SET
											foto = '$e[foto]'
										WHERE id_kwitansi");
			
				if($update) {
					redirect('action/print_kwitansi');
					
				}
				else {
					echo "Gagal";
				}
			}
		} catch (Exception $e) {
			// print_r($e->getMessage());
		}

		
	}
	function deletespk() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_spk",array("id_spk"=>"$id"));
		if ($data) {
			redirect('administrator/main/spk');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}
	function deleterekap() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_rekapitulasi",array("id_kategory"=>"$id"));
		if ($data) {
			redirect('administrator/main/rekapitulasi');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}
	function deletedatap() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_sp",array("id_sp"=>"$id"));
		if ($data) {
			redirect('administrator/main/data_pembayaran');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}
	function deletecontact() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_contact",array("id_contact"=>"$id"));
		if ($data) {
			redirect('administrator/main/pesan');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}
	function deletefinance() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_finance",array("id_finance"=>"$id"));
		if ($data) {
			redirect('administrator/main/finance');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}
	function deleteresume() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_resume",array("id"=>"$id"));
		if ($data) {
			redirect('administrator/main/resume');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}
	function deleteprogres() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_progres",array("id"=>"$id"));
		if ($data) {
			redirect('administrator/main/progres_unit');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}
	function deletememo() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_memo",array("id_kategory"=>"$id"));
		if ($data) {
			redirect('administrator/main/memo_pembayaran');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}
		function deleteuser() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_user",array("id_user"=>"$id"));
		if ($data) {
			redirect('administrator/main/user');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}
		function deleteregister() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_register",array("id_register"=>"$id"));
		if ($data) {
			redirect('administrator/main/register');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}
	function deletesubkon() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_subkon",array("id_proyek"=>"$id"));
		if ($data) {
			redirect('administrator/main/subkon');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}


	function deleteipl() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_ipl",array("id_ipl"=>"$id"));
		if ($data) {
			redirect('administrator/main/ipl');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}
	function delete(){
			$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_proyek",array("id_proyek"=>"$id"));
		if ($data) {
			redirect('administrator/main/proyek');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}		
	}
	function deleteproyekbox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->delete($ids);
            redirect('administrator/main/proyek');
	}
	function deletecontactbox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deletecontact($ids);
            redirect('administrator/main/pesan');
	}

	function deletespkbox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deletespk($ids);
            redirect('administrator/main/spk');
	}
	function deletememobox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deletememo($ids);
            redirect('administrator/main/memo_pembayaran');
	}
	function deleteresumebox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deleteresume($ids);
            redirect('administrator/main/resume');
	}
	function deletekavlingbox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deletekavling($ids);
            redirect('administrator/main/kavling');
	}
	function deletefinancebox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deletefinance($ids);
            redirect('administrator/main/finance');
	}
	function deleteiplbox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deleteipl($ids);
            redirect('administrator/main/ipl');
	}
	function deletesubkonbox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deletesubkon($ids);
            redirect('administrator/main/subkon');
	}
	function deletevisualbox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deletevisual($ids);
            redirect('administrator/main/visual');
	}
	function deleteregisterbox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deleteregister($ids);
            redirect('administrator/main/register');
	}
	function deleteuserbox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deleteuser($ids);
            redirect('administrator/main/user');
	}
	function deleteprogresbox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deleteprogres($ids);
            redirect('administrator/main/progres_unit');
	}
	function deleterekapbox() {
            $ids = ( explode( ',', $this->input->get_post('ids') ));
            $this->Noric->deleterekap($ids);
            redirect('administrator/main/rekapitulasi');
	}
	function deletekavling() {
		$id = $this->uri->segment(3);
		$data = $this->db->delete("tbl_kavling",array("id_kavling"=>"$id"));
		if ($data) {
			redirect('administrator/main/kavling');
        }
		else{
			echo "Gagal menghapus data yang dipilih !";
		}
	}
	function token(){
		$data = $this->input->post('proyek');
		$this->db->select('tbl_spk.spk, tbl_proyek.nama_owner, tbl_proyek.pic');
		 $this->db->where('tbl_spk.nama_proyek', $data);
		  $this->db->join('tbl_proyek','tbl_proyek.nama_proyek=tbl_spk.nama_proyek');
		  $select = $this->db->get('tbl_spk')->result_array();
		// $select = $this->db->query('SELECT distinct nama_proyek,spk FROM `tbl_spk` where nama_proyek="'.$data.'"')->result_array();

		header('Content-Type: text/json');
		echo json_encode($select);
	}
	function spkmemo(){
		$data = $this->input->post('proyek');
		$this->db->select('tbl_spk.spk, tbl_proyek.nama_owner');
		 $this->db->where('tbl_spk.nama_proyek', $data);
		  $this->db->join('tbl_proyek','tbl_proyek.nama_proyek=tbl_spk.nama_proyek');
		  $select = $this->db->get('tbl_spk')->result_array();
		// $select = $this->db->query('SELECT distinct nama_proyek,spk FROM `tbl_spk` where nama_proyek="'.$data.'"')->result_array();

		header('Content-Type: text/json');
		echo json_encode($select);
	}

	function teeeoken(){
		$data = $this->input->post('type');
		$this->db->select('tbl_kavling.type');
		 $this->db->where('tbl_kavling.nama_proyek', $data);
		  $this->db->join('tbl_subkon','tbl_subkon.nama_proyek=tbl_kavling.nama_proyek');
		  $select = $this->db->get('tbl_kavling')->result_array();

		header('Content-Type: text/json');
		echo json_encode($select);
	}
	 function token3(){
  header('Content-Type: text/text');
  $nama_proyek = $this->input->get_post('id');
  $this->db->where('nama_proyek', $nama_proyek);
  $this->db->select('type');
  $this->db->from('tbl_kavling');
  $result = $this->db->get()->result_array();

  echo json_encode($result);
 }
	function token1(){
		$data = $this->input->post('nama_pemborong');

		$this->db->select('tbl_ipl.spk,tbl_ipl.nama_pemborong');
		$this->db->where('tbl_ipl.nama_pemborong', $data);
		$this->db->join('tbl_ipl','tbl_ipl.nama_pemborong=tbl_resume.nama_pemborong');
		$select = $this->db->get('tbl_resume')->result_array();

		header('Content-Type: text/json');
		echo json_encode($select);
	}	
	function dataspk() {
		$proyek = $this->input->post('proyek');
		$spk = $this->input->post('spk');

		$this->db->select('tbl_spk.nilai_kontrak, tbl_spk.uraian, tbl_kavling.nama_kavling');
		$this->db->join('tbl_kavling', 'tbl_kavling.nama_proyek = tbl_spk.nama_proyek AND tbl_kavling.spk = tbl_spk.spk');
		$this->db->where('tbl_spk.nama_proyek', "'".$proyek."'", FALSE);
		$this->db->where('tbl_spk.spk', "'".$spk."'", FALSE);
		$select = $this->db->get('tbl_spk')->result_array();

		header('Content-Type: text/json');
		echo json_encode($select);
	}
	function datauraian() {
		$proyek = $this->input->post('proyek');
		$spk = $this->input->post('spk');

		$this->db->select('tbl_spk.nilai_kontrak, tbl_spk.uraian');
		$this->db->where('tbl_spk.nama_proyek', "'".$proyek."'", FALSE);
		$this->db->where('tbl_spk.spk', "'".$spk."'", FALSE);
		$select = $this->db->get('tbl_spk')->result_array();

		header('Content-Type: text/json');
		echo json_encode($select);
	}
	function print_spk() {
		$this->load->view('print/print_spk');
	}

	function print_proyek(){
		$this->load->view('print/print_proyek');
	}

	function print_register(){
		$this->load->view('print/print_register');
	}
	function print_rekap(){
		$this->load->view('print/print_rekap');
	}
	function print_user(){
		$this->load->view('print/print_user');
	}
	function printout_ipl(){
		$this->load->view('print/printout_ipl');
	}
	function printout_memo(){
		$this->load->view('print/print_memo');
	}
	function print_visual(){
		$this->load->view('print/print_visual');
	}		
	function printout_progunit(){
		$this->load->view('print/print_progresunit');
	}
	function print_pp(){
		$this->load->view('print/print_pp');
	}
	function print_ipl(){
		$this->load->view('print/print_ipl');
	}
	function print_datapembayaran(){
		$this->load->view('print/print_dp');
	}
	function print_subkon(){
		$this->load->view('print/print_subkon');
	}
	function print_kavling(){
		$this->load->view('print/print_kavling');
	}
	function print_kwitansi(){
		$this->load->view('print/print_kwitansi');
	}


	function exporttoexcel() {
		$this->load->helper('to_excel');
    	$query = $this->db->query("SELECT * FROM tbl_spk");
    	foreach ($query->result() as $key => $value) {
    		$nama = "Data SPK";
    	}
    	to_excel($query, $nama);
	}

	function exportuser() {
		$this->load->helper('to_excel');
    	$query = $this->db->query("SELECT * FROM tbl_user");
    	foreach ($query->result() as $key => $value) {
    		$nama = "Data User";
    	}
    	to_excel($query, $nama);
	}
	function exportrekap() {
		$this->load->helper('to_excel');
    	$query = $this->db->query("SELECT * FROM tbl_rekapitulasi");
    	foreach ($query->result() as $key => $value) {
    		$nama = "Data Rekapitulasi";
    	}
    	to_excel($query, $nama);
	}
	function excelproyek() {
		$this->load->helper('to_excel');
    	$query = $this->db->query("SELECT * FROM tbl_proyek");
    	foreach ($query->result() as $key => $value) {
    		$nama = "Data proyek";
    	}
    	to_excel($query, $nama);
	}
	function excelvisual() {
		$this->load->helper('to_excel');
    	$query = $this->db->query("SELECT * FROM tbl_uploadimage");
    	foreach ($query->result() as $key => $value) {
    		$nama = "Data Visual Report";
    	}
    	to_excel($query, $nama);
	}
	function exceldp() {
		$this->load->helper('to_excel');
    	$query = $this->db->query("SELECT * FROM tbl_sp");
    	foreach ($query->result() as $key => $value) {
    		$nama = "Data pembyaran";
    	}
    	to_excel($query, $nama);
	}

	function export()
	{
		$this->load->helper('to_excel');
    	$query = $this->db->query("SELECT * FROM db_rekon");
    	foreach ($query->result() as $key => $value) {
    	$nama = "Data barang masuk";
    	}
    	to_excel($query, $nama);
	}
	function excelkavling() {
		$this->load->helper('to_excel');
    	$query = $this->db->query("SELECT * FROM tbl_kavling");
    	foreach ($query->result() as $key => $value) {
    		$nama = "Data Kavling";
    	}
    	to_excel($query, $nama);
	}
	function excelregister() {
		$this->load->helper('to_excel');
    	$query = $this->db->query("SELECT * FROM tbl_register");
    	foreach ($query->result() as $key => $value) {
    		$nama = "Data Register";
    	}
    	to_excel($query, $nama);
	}
	function excelprogunit() {
		$this->load->helper('to_excel');
    	$query = $this->db->query("SELECT * FROM tbl_progres");
    	foreach ($query->result() as $key => $value) {
    		$nama = "Data Progres";
    	}
    	to_excel($query, $nama);
	}
	function excelipl() {
		$this->load->helper('to_excel');
    	$query = $this->db->query("SELECT * FROM tbl_ipl");
    	foreach ($query->result() as $key => $value) {
    		$nama = "Data IPL";
    	}
    	to_excel($query, $nama);
	}			
	function excelsubkon() {
		$this->load->helper('to_excel');
    	$query = $this->db->query("SELECT * FROM tbl_subkon");
    	foreach ($query->result() as $key => $value) {
    		$nama = "Data Subkon";
    	}
    	to_excel($query, $nama);
	}
	function kavling()
	{
		$proyek = $this->input->post('proyek');
		$spk = $this->input->post('spk');

		$this->db->select('nama_kavling');
		$this->db->select('luas_bangunan');
		$this->db->select('satuan');
		$this->db->select('harga_satuan');
		$this->db->where('nama_proyek', $proyek);
		$this->db->where('spk', $spk);
		$select = $this->db->get('tbl_spk')->row_array();

		header('Content-Type: text/json');
		echo json_encode($select);		
	}
	function profile(){
		$this->load->view('page/profile');
	}
		function datar() {
		$proyek = $this->input->post('proyek');
		$spk = $this->input->post('spk');

		$this->db->select('tgl_spk');
		$this->db->select('nilai_kontrak');
		$this->db->select('uraian');
		$this->db->where('nama_proyek', $proyek);
		$this->db->where('spk', $spk);
		$select = $this->db->get('tbl_spk')->row_array();

		header('Content-Type: text/json');
		echo json_encode($select);
	}
		function dataf() {
		$spk = $this->input->post('spk');

		$this->db->select('nilai_kontrak');
		$this->db->where('spk', $spk);
		$select = $this->db->get('tbl_sp')->row_array();

		header('Content-Type: text/json');
		echo json_encode($select);
	}
		function type_get() {
		$proyek = $this->input->post('proyek');
		$spk = $this->input->post('spk');

		$this->db->select('type');
		$this->db->where('nama_proyek', $proyek);
		$this->db->where('spk', $spk);
		$select = $this->db->get('tbl_kavling')->result_array();

		header('Content-Type: text/json');
		echo json_encode($select);
	}
		function ambildata() {
		$proyek = $this->input->post('proyek');
		$spk = $this->input->post('spk');

		$this->db->select('type');
		$this->db->where('nama_proyek', $proyek);
		$this->db->where('spk', $spk);
		$select = $this->db->get('tbl_kavling')->result_array();

		header('Content-Type: text/json');
		echo json_encode($select);
	}
		function typememo() {
		$proyek = $this->input->post('proyek');
		$spk = $this->input->post('spk');

		$this->db->select('type');
		$this->db->where('nama_proyek', $proyek);
		$this->db->where('spk', $spk);
		$select = $this->db->get('tbl_kavling')->result_array();

		header('Content-Type: text/json');
		echo json_encode($select);
	}
	function newkavling(){
		$this->load->view('page/new_kavling');
	}

 function getSpk(){
  header('Content-Type: text/text');
  $nama_pemborong = $this->input->get_post('id');
  $this->db->where('nama_pemborong', $nama_pemborong);
  $this->db->select('spk');
  $this->db->from('tbl_ipl');
  $result = $this->db->get()->result_array();

  echo json_encode($result);
 }
 function get_kav(){
  header('Content-Type: text/text');
  $nama_proyek = $this->input->get_post('id');
  $this->db->where('nama_proyek', $nama_proyek);
  $this->db->select('nama_kavling');
  $this->db->from('tbl_kavling');
  $result = $this->db->get()->result_array();

  echo json_encode($result);
 }
  function get_borong(){
  header('Content-Type: text/text');
  $nama_subkon = $this->input->get_post('id');
  $this->db->where('nama_subkon', $nama_subkon);
  $this->db->select('nama_pemborong');
  $this->db->from('tbl_subkon');
  $result = $this->db->get()->result_array();

  echo json_encode($result);
 }
  function get_rsm(){
  header('Content-Type: text/text');
  $spk = $this->input->get_post('spk');
  $this->db->where('spk', $spk);
  $this->db->select('nama_kavling');
  $this->db->from('tbl_resume');
  $result = $this->db->get()->result_array();

  echo json_encode($result);
 }
 function getkavling(){
  header('Content-Type: text/text');
  $spk = $this->input->get_post('spk');
  $this->db->where('spk', $spk);
  $this->db->select('nama_kavling');
  $this->db->from('tbl_kavling');
  $result = $this->db->get()->result_array();
  header('Content-Type: text/json');
  echo json_encode($result);
 }
  function gtfn(){
  header('Content-Type: text/text');
  $spk =  $this->input->post('spk');
  $this->db->where('spk', $spk);
  $result = $this->db->get('tbl_sp')->row_array();
  header('Content-Type: text/json');
  echo json_encode($result);
 }

  function getdata(){
  header('Content-Type: text/text');
  $nama_kavling =  $this->input->post('nama_kavling');
  $this->db->where('nama_kavling', $nama_kavling);
  $result = $this->db->get('tbl_resume')->row_array();
  echo json_encode($result);
 }
   function getdata90(){
  header('Content-Type: text/text');
  $nama_kavling =  $this->input->post('nama_kavling');
  $this->db->where('nama_kavling', $nama_kavling);
  $result = $this->db->get('tbl_kavling')->row_array();
  echo json_encode($result);
 }

  function spkvisual(){
  header('Content-Type: text/text');
  $nama_kavling =  $this->input->post('nama_kavling');
  $this->db->where('nama_kavling', $nama_kavling);
  $result = $this->db->get('tbl_kavling')->result_array();
  echo json_encode($result);
 }
 function kavlingmemo(){
  header('Content-Type: text/text');
  $type = $this->input->get_post('id');
  $this->db->where('type', $type);
  $this->db->select('nama_kavling');
  $this->db->from('tbl_kavling');
  $result = $this->db->get()->result_array();

  echo json_encode($result);
 }
  function getresume(){
  header('Content-Type: text/text');
  $nama_kavling =  $this->input->post('nama_kavling');
  $this->db->where('nama_kavling', $nama_kavling);
  $result = $this->db->get('tbl_kavling')->result_array();
  echo json_encode($result);
 }
 function gtsspk(){
  header('Content-Type: text/text');
  $nama_proyek = $this->input->get_post('id');
  $this->db->where('nama_proyek', $nama_proyek);
  $this->db->select('spk');
  $this->db->from('tbl_spk');
  $result = $this->db->get()->result_array();

  echo json_encode($result);
 }
}