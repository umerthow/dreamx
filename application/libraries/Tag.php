<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag
{

	protected $CI;
	public $tags;
	public $artikel_headline;

	function __construct(){

		$this->CI=& get_instance();

		$query=$this->CI->db->query("SELECT id_tag AS id, nama_tag AS nama, slug_tag AS slug FROM tags ORDER BY nama_tag ASC");

		$this->tags=$query->result_array();

	}


		public function detail_tag($id){
		$data=$this->CI->db->query("SELECT id_tag AS id, nama_tag AS nama, slug_tag AS slug FROM tags WHERE id_tag='$id'  ");

		if ($data->num_rows()>0){
			return $data->row_array();
		} else {
			return FALSE;
		}
	}

	public function artikel_headline($max=5){

		$max=intval($max);

		$data=$this->CI->db->query("SELECT artikel.artikel_id AS id,
		 artikel.artikel_judul AS judul, 
		 artikel.artikel_isi AS isi,
		 artikel.artikel_tgl_posting AS tanggal,
		 artikel.artikel_tags as tags,
		 artikel.artikel_dibaca AS dibaca,
		 artikel.artikel_seo_url AS slug,		 
		 kategori.nama_kategori,
		 kategori.id_kategori,
		 user.nama_lengkap AS nama_admin,
		 user.id_user AS id_admin,
		 foto_artikel.nama_foto AS foto
		 FROM artikel,kategori,user,foto_artikel
		 WHERE artikel.artikel_sbg_headline='Y' AND artikel.artikel_status='publish' AND kategori.aktif='Y' AND kategori.terhapus='N' AND user.status_user='Y' AND user.terhapus='N' AND artikel.artikel_id_user=user.id_user AND artikel.artikel_kategori=kategori.id_kategori AND foto_artikel.id_foto=(SELECT CASE  foto_artikel.featured WHEN 'Y' THEN id_foto WHEN 'N' THEN id_foto END AS 'id_foto'  FROM foto_artikel WHERE foto_artikel.id_artikel=artikel.artikel_id ORDER BY featured ASC LIMIT 1) ORDER BY artikel.artikel_id DESC LIMIT $max

		 ");

		$this->artikel_headline=$data->result_array();



	}


}