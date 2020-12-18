<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		
        if($this->session->userdata('ID')&& $this->session->userdata('Type')=="Hotel Manager")
		{ 
			
		}
		else{
			$message='<div class="alert alert-info">Please Sign In As Hotel Manager</div>';
			$this->session->set_flashdata('message',$message);
			redirect('signin');
        }

    }

	public function index()
	{
			$type='Hotel';
		
		$edata['gallery']=$this->db->where('Type',$type)->get('tbl_gallery')->result_array();
		
			$this->load->view('hotel/include/header');
			$this->load->view('hotel/home',$edata);
			$this->load->view('hotel/include/footer');
			
	}
	
	public function insert_gallery()
	{
			
			
		$this->form_validation->set_rules('type', 'Type', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('hotel/include/header2');
			$this->load->view('hotel/insert_gallery');
			$this->load->view('hotel/include/footer');

		}
		else{

			$idata['Type']=$this->input->post('type');
			
			if(!empty($_FILES) && ($_FILES['organization_image']['name'])){
			

			  $config['upload_path'] = 'images/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg';
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('organization_image')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('signup');
			 } else {
			  $avatar = $this->upload->data();
			  $organization_image = $avatar['file_name'];

			  $idata['Image']=$organization_image;
			 }

			}
			else{
			
			$message='<div class="alert alert-danger">Please Add Your Image</div>';

			$this->session->set_flashdata('message',$message);

			redirect('hotel/insert_gallery');

			}

			$this->db->insert('tbl_gallery',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('hotel/insert_gallery');

		}
	}
	
	public function insert_hotel()
	{
			
			
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('roomno', 'Room Number', 'required|regex_match[/^[0-9-]*$/]');
		$this->form_validation->set_rules('price', 'Price', 'required|regex_match[/^[0-9-]*$/]');
		$this->form_validation->set_rules('rdescription', 'Room Description', 'required');
		$this->form_validation->set_rules('type', 'Room_Type', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('hotel/include/header2');
			$this->load->view('hotel/insert_hotel');
			$this->load->view('hotel/include/footer');

		}
		else{

			$idata['Hotel_name']=$this->session->userdata('Name');
			$idata['Description']=$this->input->post('description');
			$idata['Address']=$this->input->post('address');
			$idata['Phone']=$this->input->post('phone');
			$idata['User_id']=$this->session->userdata('ID');
			$idata['Room_no']=$this->input->post('roomno');
			$idata['Price']=$this->input->post('price');
			$idata['Room_description']=$this->input->post('rdescription');
			$idata['Room_Type']=$this->input->post('type');
			
			if(!empty($_FILES) && ($_FILES['organization_image']['name'])){
			

			  $config['upload_path'] = 'images/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg';
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('organization_image')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('signup');
			 } else {
			  $avatar = $this->upload->data();
			  $organization_image = $avatar['file_name'];

			  $idata['Photo1']=$organization_image;
			 }

			}
			if(!empty($_FILES) && ($_FILES['organization_image1']['name'])){
			

			  $config['upload_path'] = 'images1/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg';
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('organization_image1')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('signup');
			 } else {
			  $avatar = $this->upload->data();
			  $organization_image1 = $avatar['file_name'];

			  $idata['Photo2']=$organization_image1;
			 }

			}
			else{
			
			$message='<div class="alert alert-danger">Please Add Your Image</div>';

			$this->session->set_flashdata('message',$message);

			redirect('hotel/insert_hotel');

			}
			
			$this->db->insert('tbl_room',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('hotel/insert_hotel');

		}
	}
	
	public function view_gallery()
	{
		$type='Hotel';
		
		$data['view_gallery']=$this->db->where('Type',$type)->get('tbl_gallery')->result_array();
		
			$this->load->view('hotel/include/header2');
			$this->load->view('hotel/view_gallery',$data);
			$this->load->view('hotel/include/footer');
			
			
	}
	
	public function view_hotel()
	{
		$data['view_hotel']=$this->db->where('User_id',$this->session->userdata('ID'))->get('tbl_room')->result_array();
		
			$this->load->view('hotel/include/header2');
			$this->load->view('hotel/view_hotel',$data);
			$this->load->view('hotel/include/footer');
			
			
	}
	
	
	public function view_bookings()
	{
		
		$data['view_bookings']=$this->db->select('tbl_room.Room_Type, tbl_room_book.ID as ID, Name ,Email, date, Hotel_name, Mobile, Room_id , Room_no')->from('tbl_room_book,tbl_room,tbl_user')->where('tbl_user.ID=tbl_room_book.User_id')->where('tbl_room_book.Room_id=tbl_room.ID')->where('tbl_room.User_id',$this->session->userdata('ID'))->get()->result_array();
		
			$this->load->view('hotel/include/header2');
			$this->load->view('hotel/view_bookings',$data);
			$this->load->view('hotel/include/footer');
			
			
	}
	
	
	
	public function delete_hotel($id)
	{

			$this->db->where('ID',$id)->where('User_id',$this->session->userdata('ID'))->delete('tbl_room');
			$message='<div class="alert alert-danger">Data Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('hotel/view_hotel');

	}
	
	public function delete_gallery($id)
	{

			$this->db->where('ID',$id)->delete('tbl_gallery');
			$message='<div class="alert alert-danger">Data Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('hotel/view_gallery');

	}
	
	public function delete_bookings($id)
	{

			$this->db->where('ID',$id)->delete('tbl_room_book');
			
			$message='<div class="alert alert-danger">Data Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('hotel/view_bookings');

	}
	
	
	public function edit_hotel($id="")
	{
			
			
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('roomno', 'Room Number', 'required|regex_match[/^[0-9-]*$/]');
		$this->form_validation->set_rules('price', 'Price', 'required|regex_match[/^[0-9-]*$/]');
		$this->form_validation->set_rules('rdescription', 'Room_description', 'required');
		$this->form_validation->set_rules('type', 'Room_Type', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$edata['hotel']=$this->db->where('ID',$id)->where('User_id',$this->session->userdata('ID'))->get('tbl_room')->result_array();
			
			if(empty($edata['hotel'])){

				redirect('hotel/view_hotel');
			}
			
			$this->load->view('hotel/include/header2');
			$this->load->view('hotel/edit_hotel',$edata);
			$this->load->view('hotel/include/footer');

		}
		else{

			$idata['Description']=$this->input->post('description');
			$idata['Address']=$this->input->post('address');
			$idata['Phone']=$this->input->post('phone');
			$idata['Room_no']=$this->input->post('roomno');
			$idata['Price']=$this->input->post('price');
			$idata['Room_description']=$this->input->post('rdescription');
			$idata['Room_Type']=$this->input->post('type');
			
			if(!empty($_FILES) && ($_FILES['organization_image']['name'])){
			

			  $config['upload_path'] = 'images/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg';
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('organization_image')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('signup');
			 } else {
			  $avatar = $this->upload->data();
			  $organization_image = $avatar['file_name'];

			  $idata['Photo1']=$organization_image;
			 }

			}
			
			if(!empty($_FILES) && ($_FILES['organization_image1']['name'])){
			

			  $config['upload_path'] = 'images/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg';
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('organization_image1')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('signup');
			 } else {
			  $avatar = $this->upload->data();
			  $organization_image1 = $avatar['file_name'];

			  $idata['Photo2']=$organization_image1;
			 }

			}
			
			$this->db->where('id',$id)->update('tbl_room',$idata);

			$message='<div class="alert alert-info">Data Updated Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('hotel/view_hotel');

		}
	}
	
	public function edit_gallery($id="")
	{
			
			
		$this->form_validation->set_rules('type', 'Type', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$edata['gallery']=$this->db->where('ID',$id)->get('tbl_gallery')->result_array();
			
			$this->load->view('hotel/include/header2');
			$this->load->view('hotel/edit_gallery',$edata);
			$this->load->view('hotel/include/footer');

		}
		else{

			$idata['Type']=$this->input->post('type');

			if(!empty($_FILES) && ($_FILES['organization_image']['name'])){
			

			  $config['upload_path'] = 'images/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg';
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('organization_image')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('signup');
			 } else {
			  $avatar = $this->upload->data();
			  $organization_image = $avatar['file_name'];

			  $idata['Image1']=$organization_image;
			 }

			}
			
			$this->db->where('id',$id)->update('tbl_gallery',$idata);

			$message='<div class="alert alert-info">Data Updated Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('hotel/view_gallery');

		}
	}
	
	
}
