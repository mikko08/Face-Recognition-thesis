<?php

	class Camera extends CI_Controller{

		public function dashboard(){
			$this->load->view('templates/header');
			$this->load->view('pages/camera.php');
			$this->load->view('templates/footer');
		}
	}

