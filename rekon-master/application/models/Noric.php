<?php
class Noric extends CI_Model
{

	function cekLogin($userid, $userpass) {
		$query = $this->db->get_where("tbl_user", array("userid"=>$userid, "userpass"=>$userpass));
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
function delete($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id_proyek', $did);
            $this->db->delete('tbl_proyek');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deleteuser($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id_user', $did);
            $this->db->delete('tbl_user');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deletecontact($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id_contact', $did);
            $this->db->delete('tbl_contact');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deleterekap($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id_kategory', $did);
            $this->db->delete('tbl_rekapitulasi');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deletememo($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id_kategory', $did);
            $this->db->delete('tbl_memo');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deletefinance($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id_finance', $did);
            $this->db->delete('tbl_finance');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deletespk($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id_spk', $did);
            $this->db->delete('tbl_spk');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deletekavling($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id_kavling', $did);
            $this->db->delete('tbl_kavling');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deleteresume($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id', $did);
            $this->db->delete('tbl_resume');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deleteipl($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id_ipl', $did);
            $this->db->delete('tbl_ipl');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deletevisual($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id', $did);
            $this->db->delete('tbl_uploadimage');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deleteprogres($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id', $did);
            $this->db->delete('tbl_progres');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deleteregister($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id_register', $did);
            $this->db->delete('tbl_register');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
function deletesubkon($ids){
        $ids = $ids;
       $count = 0;
        foreach ($ids as $id){
           $did = intval($id).'<br>';
            $this->db->where('id_proyek', $did);
            $this->db->delete('tbl_subkon');
            $count = $count+1;
       }

        echo'<div class="alert alert-success" style="margin-top:-17px;font-weight:bold">
            '.$count.' Item deleted successfully
            </div>';
        $count = 0;
}
	function save_proyek() {
		$save_data = array(
				'nama_proyek'	=> $this->input->post('nama_proyek'),
				'nama_owner'	=> $this->input->post('nama_owner'),
				'telp'			=> $this->input->post('telp'),
				'hp'			=> $this->input->post('hp'),
				'pic'			=> $this->input->post('pic'),
				'email'			=> $this->input->post('email'),
				'alamat'		=> $this->input->post('alamat')
			);

		$this->db->set('create_date', 'NOW()', FALSE);
		$save = $this->db->insert('tbl_proyek', $save_data);
		return $save;
	}
	function save_user() {
		$save_data = array(
				'userid'	=> $this->input->post('username'),
				'userpass'	=> $this->input->post('password'),
				'nama'			=> $this->input->post('nama'),
				'hak_akses'			=> $this->input->post('hak_akses'),
				'status'			=> $this->input->post('status')
			);

		$this->db->set('create_date', 'NOW()', FALSE);
		$save = $this->db->insert('tbl_user', $save_data);
		return $save;
	}
	function save_resume() {
		$save_data = array(
				'nama_pemborong'	=> $this->input->post('nama_pemborong'),
				'spk'				=> $this->input->post('spk_hidden'),
				'nama_kavling'		=> $this->input->post('nama_kavling_hidden'),
				'type'				=> $this->input->post('type'),
				'satuan'			=> $this->input->post('satuan'),
				'harga_satuan'		=> $this->input->post('harga_satuan'),
				'jumborong'			=> $this->input->post('jumborong'),
				'minggulalu'		=> $this->input->post('minggulalu'),
				'mingguini'			=> $this->input->post('mingguini'),
				'sdmingguini'		=> $this->input->post('sdmingguini'),
				'sisa'				=> $this->input->post('sisa'),
				'tagihanlalu'		=> $this->input->post('tagihanlalu'),
				'tagihanini'		=> $this->input->post('tagihanini'),
				'tagihansisa'		=> $this->input->post('tagihansisa'),
				'retensi'			=> $this->input->post('retensi')
			);

		$this->db->set('create_date', 'NOW()', FALSE);
		$save = $this->db->insert('tbl_resume', $save_data);
		return $save;
	}
	function save_memo() {
		$save_data = array(
				'nama_proyek'				=> $this->input->post('nama_proyek'),
				'spk'						=> $this->input->post('spk_hidden'),
				'uraian'			=> $this->input->post('uraian'),
				'tanggal'					=> $this->input->post('tanggal'),
				'type'						=> $this->input->post('type_hidden'),
				'nama_kavling'					=> $this->input->post('nama_kavling_hidden'),
				'unit'						=> $this->input->post('unit'),
				'progres'			=> $this->input->post('progres'),
			);
		$this->db->set('create_date', 'NOW()', FALSE);
		$save = $this->db->insert('tbl_memo', $save_data);
		return $save;
	}
	function save_spk() {
		$save_spk = array(
				'nama_proyek'	=> $this->input->post('nama_proyek'),
				'tgl_spk'		=> $this->input->post('tgl_spk'),
				'spk'			=> $this->input->post('spk'),
				'uraian'		=> $this->input->post('uraian'),
				'nilai_kontrak'	=> $this->input->post('nilai_kontrak')
			);

		$this->db->set('create_date', 'NOW()', FALSE);
		$save = $this->db->insert('tbl_spk', $save_spk);
		return $save;
	}
	function save_kwitansi() {
		$save_kwitansi = array(
				'nama_owner'			=> $this->input->post('nama_owner'),
				'jumlah_tagih'			=> $this->input->post('jumlah_tagih'),
				'spk'					=> $this->input->post('spk_hidden'),
				'progres' 				=> $this->input->post('progres'),
				'jenis_pekerjaan'		=> $this->input->post('jenis_pekerjaan')
			);

		$this->db->set('create_date', 'NOW()', FALSE);
		$save = $this->db->insert('tbl_kwitansi', $save_kwitansi);
		return $save;
	}
	function save_finance() {
		$save_finance = array(
				'spk'			=> $this->input->post('spk_hidden'),
				'nilai_kontrak'			=> $this->input->post('nilai_kontrak'),
				'jumlah_tagih'			=> $this->input->post('jumlah_tagih'),
				'progres'			=> $this->input->post('progres'),
				'tgl_tagih'			=> $this->input->post('tgl_tagih')
			);
		$save = $this->db->insert('tbl_finance', $save_finance);
		return $save;
	}
	function save_contact() {
		$save_contact = array(
				'nama'			=> $this->input->post('nama'),
				'email'			=> $this->input->post('email'),
				'subject'			=> $this->input->post('subject'),
				'pesan'			=> $this->input->post('pesan')
			);
		$this->db->set('create_date', 'NOW()', FALSE);
		$save = $this->db->insert('tbl_contact', $save_contact);
		return $save;
	}
	function save_subkon() {
		$save_data = array(
				'nama_proyek'				=> $this->input->post('nama_proyek'),
				'nama_subkon'				=> $this->input->post('nama_subkon'),
				'spk'						=> $this->input->post('spk_hidden'),
				'nama_pemborong'			=> $this->input->post('nama_pemborong'),
				'no_telp'					=> $this->input->post('no_telp'),
	//			'tipe'						=> $this->input->post('type_hidden'),
				'uraian_pekerjaan'			=> $this->input->post('uraian_pekerjaan'),
	//			'satuan'					=> $this->input->post('satuan'),
	//			'harga'						=> $this->input->post('harga'),
			);

		$this->db->set('create_date', 'NOW()', FALSE);
		$save = $this->db->insert('tbl_subkon', $save_data);
		return $save;
	}
	function save_progresunit() {
		$save_data = array(
				'spk'							=> $this->input->post('spk'),
				'kavling'			=> $this->input->post('nama_kavling_hidden'),
				'progres'						=> $this->input->post('sdmingguini'),
			);

		$this->db->set('create_date', 'NOW()', FALSE);
		$save = $this->db->insert('tbl_progres', $save_data);
		return $save;
	}

		function save_sp() {

		$jenis_pekerjaan =$this->input->post('jenis_pekerjaan');
		$progres = $this->input->post('progres_hidden');
		echo $jenis_pekerjaan;

		if ($jenis_pekerjaan == 'unit') {

			if($progres == 10) {
				$save_sp = array(
					'nama_proyek'			=> $this->input->post('nama_proyek'),
					'spk'					=> $this->input->post('spk_hidden'),
					'nama_owner'			=> $this->input->post('nama_owner'),
					'nilai_kontrak'			=> $this->input->post('nilai_kontrak'),
					'jenis_pekerjaan' 		=> $this->input->post('jenis_pekerjaan'),
					'dp'					=> $progres . '%',
					'tgl_tagih1'			=> $this->input->post('tgl_tagih'),
					'jumlah_tagih'			=> $this->input->post('jumlah_tagih'),
					'sisa_tagih'			=> $this->input->post('nilai_kontrak') - $this->input->post('jumlah_tagih')
				);
				$this->db->set('create_date', 'NOW()', FALSE);
				$save = $this->db->insert('tbl_sp', $save_sp);
			}
			elseif ($progres == 25) {
				$this->db->set('jumlah_tagih', 'jumlah_tagih + '.$this->input->post('jumlah_tagih'), FALSE);
				$this->db->set('sisa_tagih', 'sisa_tagih - '.($this->input->post('jumlah_tagih')), FALSE);

				$this->db->set('progres1', $progres . '%');
				$this->db->set('tgl_tagih2', $this->input->post('tgl_tagih'));
				$this->db->where('nama_proyek', $this->input->post('nama_proyek'));
				$this->db->where('spk', $this->input->post('spk_hidden'));
				$this->db->update('tbl_sp');
			}
			elseif ($progres == 50) {
				$this->db->set('jumlah_tagih', 'jumlah_tagih + '.$this->input->post('jumlah_tagih'), FALSE);
				$this->db->set('sisa_tagih', 'sisa_tagih - '.($this->input->post('jumlah_tagih')), FALSE);

				$this->db->set('progres2', $progres . '%');
				$this->db->set('tgl_tagih3', $this->input->post('tgl_tagih'));
				$this->db->where('nama_proyek', $this->input->post('nama_proyek'));
				$this->db->where('spk', $this->input->post('spk_hidden'));
				$this->db->update('tbl_sp');
			}
			elseif ($progres == 85) {
				$this->db->set('jumlah_tagih', 'jumlah_tagih + '.$this->input->post('jumlah_tagih'), FALSE);
				$this->db->set('sisa_tagih', 'sisa_tagih - '.($this->input->post('jumlah_tagih')), FALSE);

				$this->db->set('progres3', $progres . '%');
				$this->db->set('tgl_tagih4', $this->input->post('tgl_tagih'));
				$this->db->where('nama_proyek', $this->input->post('nama_proyek'));
				$this->db->where('spk', $this->input->post('spk_hidden'));
				$this->db->update('tbl_sp');
			}
			elseif ($progres == 100) {
				$this->db->set('jumlah_tagih', 'jumlah_tagih + '.$this->input->post('jumlah_tagih'), FALSE);
				$this->db->set('sisa_tagih', 'sisa_tagih - '.($this->input->post('jumlah_tagih')), FALSE);

				$this->db->set('progres4', $progres . '%');
				$this->db->set('tgl_tagih5', $this->input->post('tgl_tagih'));
				$this->db->where('nama_proyek', $this->input->post('nama_proyek'));
				$this->db->where('spk', $this->input->post('spk_hidden'));
				$this->db->update('tbl_sp');
			}
			elseif ($progres == 5) {
				$this->db->set('jumlah_tagih', 'jumlah_tagih + '.$this->input->post('jumlah_tagih'), FALSE);
				$this->db->set('sisa_tagih', 'sisa_tagih - '.($this->input->post('jumlah_tagih')), FALSE);

				$this->db->set('progres5', $progres . '%');
				$this->db->set('tgl_tagih6', $this->input->post('tgl_tagih'));
				$this->db->where('nama_proyek', $this->input->post('nama_proyek'));
				$this->db->where('spk', $this->input->post('spk_hidden'));
				$this->db->update('tbl_sp');
			}
		}
		elseif ($jenis_pekerjaan=='infrastruktur') {
			if($progres == 50) {
				$save_sp = array(
					'nama_proyek'		=> $this->input->post('nama_proyek'),
					'spk'			=> $this->input->post('spk_hidden'),
					'nama_owner'	=> $this->input->post('nama_owner'),
					'nilai_kontrak'	=> $this->input->post('nilai_kontrak'),
					'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan'),
					'progres2'			=> $progres . '%',
					'tgl_tagih3'	=> $this->input->post('tgl_tagih'),
					'jumlah_tagih'	=> $this->input->post('jumlah_tagih'),
					'sisa_tagih'	=> $this->input->post('nilai_kontrak') - $this->input->post('jumlah_tagih')
				);
				$this->db->set('create_date', 'NOW()', FALSE);
				$save = $this->db->insert('tbl_sp', $save_sp);
				echo $this->db->last_query();
			}
			elseif ($progres == 100) {
				$this->db->set('jumlah_tagih', 'jumlah_tagih + '.$this->input->post('jumlah_tagih'), FALSE);
				$this->db->set('sisa_tagih', 'sisa_tagih - '.($this->input->post('jumlah_tagih')), FALSE);

				$this->db->set('progres5', $progres . '%');
				$this->db->set('tgl_tagih6', $this->input->post('tgl_tagih'));
				$this->db->where('nama_proyek', $this->input->post('nama_proyek'));
				$this->db->where('spk', $this->input->post('spk_hidden'));
				$this->db->update('tbl_sp');
			}
			elseif ($progres == 5) {
				$this->db->set('jumlah_tagih', 'jumlah_tagih + '.$this->input->post('jumlah_tagih'), FALSE);
				$this->db->set('sisa_tagih', 'sisa_tagih - '.($this->input->post('jumlah_tagih')), FALSE);

				$this->db->set('retensi', $progres . '%');
				$this->db->set('tgl_tagih7', $this->input->post('tgl_tagih'));
				$this->db->where('nama_proyek', $this->input->post('nama_proyek'));
				$this->db->where('spk', $this->input->post('spk_hidden'));
				$this->db->update('tbl_sp');
			}
		}elseif ($jenis_pekerjaan=='pondasi') {
		if($progres == 100) {
				$save_sp = array(
					'nama_proyek'	=> $this->input->post('nama_proyek'),
					'spk'			=> $this->input->post('spk_hidden'),
					'nama_owner'	=> $this->input->post('nama_owner'),
					'nilai_kontrak'	=> $this->input->post('nilai_kontrak'),
					'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan'),
					'progres5'			=> $progres . '%',
					'tgl_tagih6'	=> $this->input->post('tgl_tagih'),
					'jumlah_tagih'	=> $this->input->post('jumlah_tagih'),
					'sisa_tagih'	=> $this->input->post('nilai_kontrak') - $this->input->post('jumlah_tagih')
				);
				$this->db->set('create_date', 'NOW()', FALSE);
				$save = $this->db->insert('tbl_sp', $save_sp);
			}
					elseif ($progres == 5) {
				$this->db->set('jumlah_tagih', 'jumlah_tagih + '.$this->input->post('jumlah_tagih'), FALSE);
				$this->db->set('sisa_tagih', 'sisa_tagih - '.($this->input->post('jumlah_tagih')), FALSE);

				$this->db->set('retensi', $progres . '%');
				$this->db->set('tgl_tagih7', $this->input->post('tgl_tagih'));
				$this->db->where('nama_proyek', $this->input->post('nama_proyek'));
				$this->db->where('spk', $this->input->post('spk_hidden'));
				$this->db->update('tbl_sp');
			}
		}
	}
	function save_ipl() {

			$save_data = array(
				'nama_proyek'	=> $this->input->post('nama_proyek'),
				'spk'			=> $this->input->post('spk_hidden'),
				'type'			=> $this->input->post('type_hidden'),
				'nama_subkon'			=> $this->input->post('nama_subkon'),
				'nama_pemborong'=> $this->input->post('pemborong_hidden'),
			);
		$datacek = $this->input->post('jenis_pekerjaan');
		$save_data['jenis_pekerjaan'] = implode(",", $datacek);

    $this->db->insert('tbl_ipl', $save_data);
	}
	function save_register(){
		$save_data = array(
				'nama_proyek'		=>$this->input->post('nama_proyek'),
				'spk'				=> $this->input->post('spk_hidden'),
				'uraian'			=> $this->input->post('uraian'),
				'nilai_kontrak'		=> $this->input->post('nilai_kontrak')
			);

		$this->db->set('create_date', 'NOW()', FALSE);

		$save = $this->db->insert('tbl_register', $save_data);
		return $save;
	}
	function save_rekapitulasi() {
		$save_data = array(
				'spk'				=> $this->input->post('spk'),
				'nilai_kontrak'		=> $this->input->post('nilai_kontrak'),
				'progres'			=> $this->input->post('progres'),
				'tgl_tagih'			=> $this->input->post('tgl_tagih'),
				// 'nilai_tagih'		=> $this->input->post('nilai_tagih'),
				'tglbayar'	=> $this->input->post('tglbayar'),
				'nilai_pembayaran'	=> $this->input->post('nilai_byr'),
				'jumlah_tagih'		=> $this->input->post('jumlah_tagih')
				// 'jumlah_pembayaran'	=> $this->input->post('jumlah_pembayaran'),
				// 'total'				=> $this->input->post('total')
			);

		$this->db->set('create_date', 'NOW()', FALSE);
		$save = $this->db->insert('tbl_rekapitulasi', $save_data);
		return $save;
	}
	function save_kavling() {

		$nama_kavling =$this->input->post('nama_kavling',true);
		$type =$this->input->post('type',true);
		$satuan = $this->input->post('satuan');
		$status = $this->input->post('status');
		$harga_satuan = $this->input->post('harga_satuan');

		foreach ($nama_kavling as $key => $nk) {

			$save_kavling = array(
					'nama_proyek'	=> $this->input->post('nama_proyek',true),
					'spk'			=> $this->input->post('spk',true),
					'nama_kavling'	=> $nk,
					'type'	=> $type[$key],
					'satuan'	=> $satuan[$key],
					'status'	=> $status[$key],
					'harga_satuan'	=> $harga_satuan[$key]
				);

			$this->db->set('create_date', 'NOW()', FALSE);
			$save = $this->db->insert('tbl_kavling', $save_kavling);
		}
		return $save;
	}

    function uploadgambar( $nm_gbr, $namaproyek, $suratpk, $kavling, $progres){
    	$simpan=$this->db->query("INSERT INTO `rekon`.`tbl_uploadimage` (`id`, `nm_gmbr`, `namaproyek`, `suratpk`, `kavling`, `progres`) VALUES (NULL, '$nm_gbr', '$namaproyek', '$suratpk', '$kavling', '$progres')");
    return $simpan;
}
}
