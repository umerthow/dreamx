<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section
{
	protected $CI;
	public $section1;
	public $section4;

	public function __construct(){
		$this->CI =& get_instance();
		

	}



	public function get_section1(){
		$data=$this->CI->db->query("SELECT * FROM tsection_item WHERE id_section=1 ORDER BY id ASC");

		$this->section1 = $data->result_array();
	}

	public function get_section4(){

		$data=$this->CI->db->query("SELECT * FROM tsection_item WHERE id_section=4 ORDER BY id ASC");

		$this->section4 = $data->result_array();;
	}

}


?>