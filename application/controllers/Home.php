<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends AN_Apricot{

	public function __construct(){
		parent::__construct();
		
	}

	function index(){


		//ambil banner depan
		$this->load->library("banner_depan");

		$data=$this->public_data;
		$data["informasi"]["title"]=$this->title->home();
		$data["informasi"]["current_page"]="home";
		$data["informasi"]["uniqueid"]="home-page";

		$data["informasi"]["og-title"]=$data["informasi"]["title"];
		


		$data["banner_depan"]=$this->banner_depan->banner;
		$data["artikel_headline"]=$this->artikel->artikel_headline($this->system_info["max_headline_artikel"]);
		$data["artikel_head12"]=$this->artikel->artikel_head12($this->system_info["max_headline_artikel"]);
		$data["artikel_head11"]=$this->artikel->artikel_head11($this->system_info["max_headline_artikel"]);
		$data["artikel_head10"]=$this->artikel->artikel_head10($this->system_info["max_headline_artikel"]);
		$data["artikel_head9"]=$this->artikel->artikel_head9($this->system_info["max_headline_artikel"]);
		$data["artikel_head8"]=$this->artikel->artikel_head8($this->system_info["max_headline_artikel"]);
		$data["artikel_head7"]=$this->artikel->artikel_head7($this->system_info["max_headline_artikel"]);
		$data["semua_halaman"]=$this->pages->pages_semua();




	
		$this->load->view($this->tema."/header",$data);
		$this->load->view($this->tema."/home",$data);
		$this->load->view($this->tema."/footer",$data);

	}




}