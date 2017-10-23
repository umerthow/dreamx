<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Form_visitors extends AN_Apricot{

	function __construct(){
	 parent::__construct();
	if($this->input->server('REQUEST_METHOD')!='POST'){
		exit("DILARANG");
	}

	$this->load->helper(array('url'));
	}

	function contact(){

		$nama=$this->input->post('name',TRUE);
		$namabelakang='';
		$email=$this->input->post('email',TRUE);

		$phone=$this->input->post('phone',TRUE);
		$organization=$this->input->post('organization',TRUE);
		$position ='';
		$subject ='';
		$pesan=$this->input->post('message',TRUE);

		$alamat ='';

		$url='';

		$tanggal=date("Y:m:d H:i:s",now());

		$ip=$this->input->ip_address();
		$this->db->insert("kontak_masuk",array("nama"=>$nama,"namabelakang"=>$namabelakang,"email"=>$email,"phone"=>$phone,
						"organization"=>$organization, "pesan"=>$pesan,"tanggal"=>$tanggal,"ip"=>$ip));





		if( $this->input->post('g-recaptcha-response')!=FALSE){



			$secret=$this->recaptcha['secret_key'];

			$ip=$this->input->ip_address();

			$chaptcha=$this->input->post('g-recaptcha-response');

			$rsp=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$chaptcha&remoteip=$ip");



			$hasil=json_decode($rsp,true);

			if($hasil['success']==true){



					$this->db->insert("kontak_masuk",array("nama"=>$nama,"namabelakang"=>$namabelakang,"email"=>$email,"phone"=>$phone,
						"organization"=>$organization, "pesan"=>$pesan,"tanggal"=>$tanggal,"ip"=>$ip));




					if($this->input->is_ajax_request()){

						echo json_encode(array("status"=>"sukses"));

						

					} else {

						redirect($url);

					}



			}	else {

						if($this->input->is_ajax_request()){

							echo json_encode(array("status"=>"error","name"=>"chaptcha tidak benar"));

						} else {

							redirect($url);

						}



			}		





		} else {

			

			if($this->input->is_ajax_request()){

				echo json_encode(array("status"=>"error","name"=>"chaptcha belum terisi"));

			} else {

				redirect($url);

			}

		}



	} 

	function subscribe(){
		date_default_timezone_set('Asia/Jakarta');      //Don't forget this..I had used this..just didn't mention it in the post
		$datetime_variable = new DateTime();
		$datetime_formatted = date_format($datetime_variable, 'Y-m-d H:i:s');
		$email = $this->input->post('email');
		$ip=$this->input->ip_address();


		//$user = $this->panel_user_m->get_by_nip_course($id_course,$nip);

		$user =  $this->db->get_where('tsubscribe',

			array(	'email'=> $email
						
						))->row();

		if($user) {
			echo json_encode(array("status"=>"error","name"=>"Maaf email sudah ada, silahkan gunakan email lain."));

		} else {
			$this->db->insert("tsubscribe",array("email"=>$email,"ip"=>$ip,"date"=>$datetime_formatted));



		echo json_encode(array("status"=>"sukses"));

		}


		



	}


	function search_article(){

		$keyword=$this->input->post('keyword',TRUE);
		$clean=trim(preg_replace("/[^A-Za-z0-9-_\s]/","",$keyword));
		$ip=$this->input->ip_address();

		$tanggal=date("Y:m:d H:i:s",now());

		if(strlen($clean)>=3){

		$this->db->insert("pencarian_artikel",array("keyword"=>$keyword,"clean_keyword"=>$clean,"tanggal"=>$tanggal,"ip"=>$ip));
		redirect(baseURL('search/article/'.$clean));


		} else {
			echo "NEED ATLEAST 3 CHARACTERS
				<script>

				window.setTimeout(function(){
					window.history.back(-1);
				},3000)

				</script>
			";
		}



	}

}