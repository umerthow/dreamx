<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Biodata extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function get_biodata(){


		$query1=$this->db->query("SELECT * FROM biodata WHERE id='1'");
		if($query1->num_rows()<1){
			$this->db->query("INSERT INTO biodata (id) VALUES ('1')");
		}


		$query=$this->db->query("SELECT * FROM biodata WHERE id='1'");
		if($query->num_rows()>0){
			$row=$query->row();
			return array(
				"nama"=>$row->nama,
				"foto"=>$row->foto,
				"deskripsi_singkat"=>$row->deskripsi_singkat,
				"deskripsi"=>reversequote($row->deskripsi,"all"),
				"link_fb"=>$row->link_fb,
				"link_insta" => $row->link_insta,
				"link_twitter" => $row->link_twitter,
				"link_linkedin" => $row->link_linkedin,
				"alamat" => $row->alamat,
				"email" => $row->email,
				"telp" => $row->telp
				);
		}
	}


}