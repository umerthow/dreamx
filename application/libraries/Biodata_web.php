<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata_web
{
	protected $CI;
	public $biodata=array();

	public function __construct(){
		
		$this->CI =& get_instance();

		$data=$this->CI->db->query("SELECT * FROM biodata WHERE id='1' ");

		$data=$data->row();

		$this->biodata['foto']=$data->foto;
		$this->biodata['nama']=$data->nama;
		$this->biodata['deskripsi_singkat']=$data->deskripsi_singkat;
		$this->biodata['deskripsi']=$data->deskripsi;
		$this->biodata['link-fb']=$data->link_fb;
		$this->biodata['link_insta'] = $data->link_insta;
		$this->biodata['link_twitter'] = $data->link_twitter;
		$this->biodata['link_linkedin'] = $data->link_linkedin;
		$this->biodata['alamat'] = $data->alamat;
		$this->biodata['email'] = $data->email;
		$this->biodata['telp'] = $data->telp;

	}

	public function get_biodata(){
		return $this->biodata;
	}
}