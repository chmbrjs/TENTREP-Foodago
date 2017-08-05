<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Main extends CI_Controller{
		public function __construct(){
			parent::__construct();

			$this->load->model('category');

			$this->load->model('restaurant');

			$this->load->model('FoodItem');

			$this->load->model('FoodItemHasFeedback');

			$this->load->model('RestaurantHasCategory');

			$this->load->model('RestaurantHasSubCategory');

			$this->load->model('SubCategory');

            $this->load->model('feedback');

            $this->load->model('order');
		}

		public function index(){
			if($this->session->userdata['user_type'] == 'System Administrator' || $this->session->userdata['user_type'] == 'Aggregator' || $this->session->userdata['user_type'] == 'Restaurant Owner'){
				// LOAD AdminLTE DASHBOARD
			}else{
				$this->load->view('main');
			}
		}
	}
?>