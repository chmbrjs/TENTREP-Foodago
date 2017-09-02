<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Order_Controller extends CI_Controller{
    	public function __construct(){
    		parent::__construct();

    		$this->load->model('order');
    	}

		public function index(){
			$this->load->model("order");
			$data["fetch_data_order"] = $this->order->fetch_data_order();
			$data1["fetch_data_penalty"] = $this->order->fetch_data_penalty();
			$this->load->view("account_overview.php", $data);
			$this->load->view("account_overview.php", $data1);
			$this->load->view('add_order');
		}

        public function newOrder(){
			$this->form_validation->set_rules('total_amt', 'Total Order Amount', 'trim|required|xss_clean');
			$this->form_validation->set_rules('timestamp', 'Order Timestamp', 'required|xss_clean');
			$this->form_validation->set_rules('remarks', 'Order Remarks', 'xss_clean');
			$this->form_validation->set_rules('tracking_number', 'Order Tracking Number', 'trim|required|xss_clean');
			$this->form_validation->set_rules('is_shared', 'Order Sharing', 'trim|required|xss_clean');
			$this->form_validation->set_rules('share_code', 'Order Sharing Code', 'trim|xss_clean');
			$this->form_validation->set_rules('user_id', 'Order Owner', 'trim|required|xss_clean');
			$this->form_validation->set_rules('delivery_status_id', 'Order Delivery Status', 'required|xss_clean');

			if($this->form_validation->run() == FALSE){
				$this->load->view('add_order');
			}else{
				$data = array('total_amt' => $this->input->post('total_amt'),
							  'timestamp' => $this->input->post('timestamp'),
							  'remarks' => $this->input->post('remarks'),
							  'tracking_number' => $this->input->post('tracking_number'),
							  'is_shared' => $this->input->post('is_shared'),
							  'share_code' => $this->input->post('share_code'),
							  'user_id' => $this->input->post('user_id'),
							  'delivery_status_id' => $this->input->post('delivery_status_id'));

				$result = $this->order->insert($data);

				if($result == TRUE){
					redirect(base_url() . 'index.php/admin?page_view=admin_table&tn=order&mn=orders');
				}else{
					$this->load->view('add_order', $message);
				}
			}
        }

        public function updateOrder(){

			$data = array('total_amt' => $this->input->post('total_amt'),
			  'timestamp' => $this->input->post('timestamp'),
			  'remarks' => $this->input->post('remarks'),
			  'tracking_number' => $this->input->post('tracking_number'),
			  'is_shared' => $this->input->post('is_shared'),
			  'share_code' => $this->input->post('share_code'),
			  'user_id' => $this->input->post('user_id'),
			  'delivery_status_id' => $this->input->post('delivery_status_id'),
			  'refid' => $this->input->post('refid'));
				  
			$query = $this->order->update($data);
        	
        }

        public function deleteOrder(){
        	$this->form_validation->set_rules('id', 'Order Reference', 'trim|required|xss_clean');

        	if($this->form_validation->run() == FALSE){
        		$this->load->view('delete_order');
        	}else{
        		$data = array('id' => $this->input->post('id'));

        		$result = $this->order->delete($data);

				redirect(base_url() . 'index.php/admin?page_view=admin_table&tn=order&mn=orders');
        	}
        }
    }
?>
