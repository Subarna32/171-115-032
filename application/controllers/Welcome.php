<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		public function __construct()
    {
        parent::__construct();
        
    }

	public function index()
	{
			$this->load->view('include/header');
			$this->load->view('home');
			$this->load->view('include/footer');
	}
	
	public function home2()
	{
			
			$this->load->view('include/header2');
			$this->load->view('home2');
			$this->load->view('include/footer');
	}

	public function about()
	{
			$this->load->view('include/header2');
			$this->load->view('about');
			$this->load->view('include/footer');
	}
	

	public function contact()
	{
			$this->load->view('include/header2');
			$this->load->view('contact');
			$this->load->view('include/footer');
	}

	
	public function hotel()
	{

			 $this->form_validation->set_rules('check_in', 'Check In', 'required');
			 $this->form_validation->set_rules('check_out', 'Check Out', 'required');
			 $this->form_validation->set_rules('Room_Type', 'Room Type', 'required');
	 

			 if ($this->form_validation->run() ==  FALSE) {

			 	
			 	$data['results']='';


			$this->load->view('include/header2');
			$this->load->view('hotel',$data);
			$this->load->view('include/footer');
			

				
			} else {

			$startTime = date('Y-m-d',strtotime($this->input->post('check_in')));
			$endTime = date('Y-m-d',strtotime($this->input->post('check_out')));
			
			if( $startTime > $endTime ){
			
			
			
			$message='<div class="alert alert-danger">You must check-out after check-in</div>';

			$this->session->set_flashdata('message',$message);
			
			redirect('welcome/hotel');
			
			}
			

			$have_room_id=$this->db->select('Distinct(Room_id)')->where('Room_Type',$this->input->post('Room_Type'))->from('tbl_room_book')->where('date>=',$startTime)->where('date<=',$endTime)->get()->result_array();
			
			
			
			if(!$have_room_id){

				$ids=NULL;
				
			}
			
			foreach ($have_room_id as $r) {
				$ids[]=$r['Room_id']; 
			}
			
		 	$new_array=array();
			
			$data['results']=$this->db->where('Room_Type',$this->input->post('Room_Type'))->where_not_in('ID',$ids)->get('tbl_room')->result_array();
				
			if(!$data['results'])
			{
				$message='<div class="alert alert-danger">Sorry!! No Data Found</div>';

				$this->session->set_flashdata('message',$message);
				
				redirect('welcome/hotel');
			
			}
			else
			{
				
				$this->load->view('include/header2');
				$this->load->view('hotel',$data);
				$this->load->view('include/footer');
				 
			} 
			
				 
			} 


	
	}
	
	public function about_room($id="")
	{


			 $this->form_validation->set_rules('check_in', 'Check In', 'required');
			 $this->form_validation->set_rules('check_out', 'Check Out', 'required');



			 if ($this->form_validation->run() ==  FALSE) {

			 	

			 	$edata['results']=$this->db->where('ID',$id)->get('tbl_room')->result_array();
		
				$this->load->view('include/header2');
				$this->load->view('about_room',$edata);
				
				if($this->input->post('submit')){

			 		$data['script']='<script> $("#myModal2").modal() </script>';


				 $this->load->view('include/footer1',$data);
				}else{
					
					
					$data['script']='';


					$this->load->view('include/footer1',$data);
					
				}


				
			} else {

				 

			 		$startTime = strtotime($this->input->post('check_in'));
					$endTime = strtotime($this->input->post('check_out'));

					for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
					  $idata['date'] = date( 'Y-m-d', $i );  
					  $idata['Room_id'] = $this->input->post('room_id') ;
					  $idata['User_id'] = $this->session->userdata('ID') ;
					  $idata['Room_Type'] = $this->input->post('room_type') ;

					  $this->db->insert('tbl_room_book',$idata);
					  
					}
					$message='<div class="alert alert-success">Your room is Booked</div>';

					$this->session->set_flashdata('message',$message);
									 
					redirect('welcome/about_room/'.$this->input->post('room_id'));
				 

				 
			} 
			


			
	}

	public function gallery()
	{
		$type='Admin';
		
		$edata['gallery']=$this->db->where('Type',$type)->get('tbl_gallery')->result_array();
		
			$this->load->view('include/header2');
			$this->load->view('gallery',$edata);
			$this->load->view('include/footer');
	}
	
	public function emer()
	{
		
			$this->load->view('include/header2');
			$this->load->view('emer');
			$this->load->view('include/footer');
		
	}
	
	public function about_doctor()
	{
			
		$this->form_validation->set_rules('address', 'Address', 'required');
		
		if ($this->form_validation->run() ==  FALSE) {

			 	$data['results']='';


			$this->load->view('include/header2');
			$this->load->view('about_doctor',$data);
			$this->load->view('include/footer');
	
			} else {

			$data['results']=$this->db->where('Address',$this->input->post('address'))->get('tbl_emergency_services')->result_array();
			
			if(!$data['results'])
			{
				$message='<div class="alert alert-danger">Sorry!! No Data Found</div>';

				$this->session->set_flashdata('message',$message);
				
				redirect('welcome/about_doctor');
			
			}
			else
			{
				
				$this->load->view('include/header2');
				$this->load->view('about_doctor',$data);
				$this->load->view('include/footer');
				 
			} 
		} 
	}
	
	public function about_sc($id="")
	{
		$edata['shop']=$this->db->where('ID',$id)->get('tbl_shopping')->result_array();
		
			$this->load->view('include/header2');
			$this->load->view('about_sc',$edata);
			$this->load->view('include/footer2');
	}
	
	public function about_tourist($id="")
	{
		
		$edata['results']=$this->db->where('ID',$id)->get('tbl_tourist')->result_array();
			
			$this->load->view('include/header2');
			$this->load->view('about_tourist',$edata);
			$this->load->view('include/footer');
	}
	
	public function about_fire()
	{
			$type='Fire';
			
			$edata['results']=$this->db->where('Type',$type)->get('tbl_emergency_services')->result_array();
			
			$this->load->view('include/header2');
			$this->load->view('about_fire',$edata);
			$this->load->view('include/footer');
	}
	
	public function about_ambulance()
	{
			$type='Ambulance';
		
			$edata['results']=$this->db->where('Type',$type)->get('tbl_emergency_services')->result_array();
			
			$this->load->view('include/header2');
			$this->load->view('about_ambulance',$edata);
			$this->load->view('include/footer');
	}
	
	public function about_police()
	{
			$type='Police';
		
			$edata['results']=$this->db->where('Type',$type)->get('tbl_emergency_services')->result_array();
			
			$this->load->view('include/header2');
			$this->load->view('about_police',$edata);
			$this->load->view('include/footer');
	}
	
	
	public function rest()
	{
			$this->form_validation->set_rules('Cuisine', 'Cuisine', 'required');
			
			if ($this->form_validation->run() ==  FALSE) {

					$data['results']='';


				$this->load->view('include/header2');
				$this->load->view('rest',$data);
				$this->load->view('include/footer');
		
				} else {

				$data['results']=$this->db->where('Cuisine',$this->input->post('Cuisine'))->get('tbl_food')->result_array();
				
				if(!$data['results'])
				{
					$message='<div class="alert alert-danger">Sorry!! No Data Found</div>';

					$this->session->set_flashdata('message',$message);
					
					redirect('welcome/rest');
				
				}
				else
				{
					
					$this->load->view('include/header2');
					$this->load->view('rest',$data);
					$this->load->view('include/footer');
					 
				} 
			} 
	}
	
	
	public function about_restaurant($id="")
	{
			$edata['food']=$this->db->where('ID',$id)->get('tbl_food')->result_array();
		
			$this->load->view('include/header2');
			$this->load->view('about_restaurant',$edata);
			$this->load->view('include/footer2');
	}
	
	public function sc()
	{

			$this->form_validation->set_rules('Type', 'Type', 'required');
			if ($this->form_validation->run() ==  FALSE) {

			 	$data['results']='';


			$this->load->view('include/header2');
			$this->load->view('sc',$data);
			$this->load->view('include/footer');
	
			} else {

			$data['results']=$this->db->where('Type',$this->input->post('Type'))->get('tbl_shopping')->result_array();
			
			if(!$data['results'])
			{
				$message='<div class="alert alert-danger">Sorry!! No Data Found</div>';

				$this->session->set_flashdata('message',$message);
				
				redirect('welcome/sc');
			
			}
			else
			{
				
				$this->load->view('include/header2');
				$this->load->view('sc',$data);
				$this->load->view('include/footer');
				 
			} 
		} 

	}
	
	public function ft()
	{
		
			$this->form_validation->set_rules('user_origin', 'Starting Place', 'required');
			
			if ($this->form_validation->run() ==  FALSE) {

			 	$data['results']='';

			
			$this->load->view('include/header2');
			$this->load->view('ft',$data);
			$this->load->view('include/footer');
	
			} else {

			$data['results']=$this->db->where('Distance_frm',$this->input->post('user_origin'))->get('tbl_fare')->result_array();
			
			if(!$data['results'])
			{
				$message='<div class="alert alert-danger">Sorry!! No Data Found</div>';

				$this->session->set_flashdata('message',$message);
				
				redirect('welcome/ft');
			
			}
			else
			{
				
				
				$this->load->view('include/header2');
				$this->load->view('ft',$data);
				$this->load->view('include/footer');
			
			}
				 
			} 
	}
	
	public function tourist()
	{

			$data['results']=$this->db->get('tbl_tourist')->result_array();

			$this->load->view('include/header2');
			$this->load->view('tourist',$data);
			$this->load->view('include/footer');
			
	}

}
