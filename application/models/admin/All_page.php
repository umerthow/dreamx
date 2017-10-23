<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class All_page extends CI_Model {

	public $hasil;

	function __construct(){
		parent::__construct();
	}

	function all_pages(){
		$query=$this->db->query("SELECT * FROM pages ORDER BY page_id DESC");

		if($query->num_rows()>0){
			$no=1;
			foreach($query->result_array() as $value){
				$url="<div class='input-group'>
				<span class='input-group-addon'><i class='fa fa-hand-o-up pilih-url' style='cursor:pointer'></i></span>
				<input type='text' class='form-control area-url' value='".base_url()."page/$value[page_id]-$value[page_url]'/><span class='input-group-addon'><a href='".base_url()."page/$value[page_id]-$value[page_url]' target='_blank'><i class='fa fa-mail-forward'></i></a></span>
				</div>";

				$this->hasil.="<tr>";
				$this->hasil.="<td>$value[page_judul]</td>";
				$this->hasil.="<td>$value[page_status]</td>";
				$this->hasil.="<td>$value[page_created]</td>";
				$this->hasil.="<td>$value[page_edited]</td>";
				$this->hasil.="<td>$url</td>";

				$this->hasil.="<td><a href='".base_url()."admin/page/$value[page_id]'><i class='fa fa-edit btn-edit-page'></i></a> &nbsp; <i style='cursor:pointer;color:red' class='fa fa-times-circle hapus-page' id='$value[page_id]'></i></td>";
				$this->hasil.="</tr>";

			}
		}

	}


	function landing_page(){
		$query=$this->db->query("SELECT a.label, b.*
								FROM tsection a INNER JOIN `tsection_item` b   ON a.noid = b.`id_section` ");

		if($query->num_rows()>0){
			$no=1;
			foreach($query->result_array() as $value){
				$url="";

				$this->hasil.="<tr>";
				$this->hasil.="<td>$value[label]</td>";
				$this->hasil.="<td>$value[caption_title]</td>";
				$this->hasil.="<td>$value[caption_item]</td>";
				$this->hasil.="<td>$value[picture]</td>";
				

				$this->hasil.="<td><a href='".base_url()."admin/land_page/$value[id]'><i class='fa fa-edit btn-edit-page'></i></a> &nbsp; <i style='cursor:pointer;color:red' class='fa fa-times-circle hapus-page' id='$value[id]'></i></td>";
				$this->hasil.="</tr>";

			}
		}

	}

}