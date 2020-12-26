<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		
        if(($this->session->userdata('ID')) && ($this->session->userdata('Type')=="Admin")){
			
		}
		else{
			$message='<div class="alert alert-info">Please Sign In As Admin</div>';
			$this->session->set_flashdata('message',$message);
			redirect('signin');
        }

    }

	public function index()
	{
		$type='Admin';
		
		$edata['gallery']=$this->db->where('Type',$type)->get('tbl_gallery')->result_array();
		
			$this->load->view('admin/include/header');
			$this->load->view('admin/home',$edata);
			$this->load->view('admin/include/footer');
			
			
	}
	
	public function insert_gallery()
	{
			
			
		$this->form_validation->set_rules('type', 'Type', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/include/header2');
			$this->load->view('admin/insert_gallery');
			$this->load->view('admin/include/footer');

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

			redirect('admin/insert_gallery');

			}

			$this->db->insert('tbl_gallery',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/insert_gallery');

		}
	}

	public function insert_shop_place()
	{
			
			
		$this->form_validation->set_rules('shop_name', 'Name', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('sdescription', 'Short Description', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		$this->form_validation->set_rules('phone', 'Contact', 'required|regex_match[/^[0-9-]*$/]');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/include/header2');
			$this->load->view('admin/insert_shop_place');
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Name']=$this->input->post('shop_name');
			$idata['Description']=$this->input->post('description');
			$idata['Sdescription']=$this->input->post('sdescription');
			$idata['Address']=$this->input->post('address');
			$idata['Type']=$this->input->post('type');
			$idata['Contact']=$this->input->post('phone');

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

			  $idata['Image2']=$organization_image1;
			 }

			}else{
			
			$message='<div class="alert alert-danger">Please Add Your Image</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/insert_shop_place');

			}

			$this->db->insert('tbl_shopping',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/insert_shop_place');

		}
	}
	
	public function insert_tourist()
	{
			
			
		$this->form_validation->set_rules('place_name', 'Name', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('sdescription', 'Short Description', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/include/header2');
			$this->load->view('admin/insert_tourist');
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Name']=$this->input->post('place_name');
			$idata['Description']=$this->input->post('description');
			$idata['Sdescription']=$this->input->post('sdescription');
			

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
			  $idata['Image2']=$organization_image1;
			 }

			}else{
			
			$message='<div class="alert alert-danger">Please Add Your Image</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/insert_tourist');

			}

			$this->db->insert('tbl_tourist',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/insert_tourist');

		}
	}
	
	public function insert_restaurant()
	{
			
			
		$this->form_validation->set_rules('restaurant_name', 'Restaurant_Name', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('sdescription', 'Short Description', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('business_hours', 'Business_hours', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[0-9-]*$/]');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/include/header2');
			$this->load->view('admin/insert_restaurant');
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Restaurant_Name']=$this->input->post('restaurant_name');
			$idata['Description']=$this->input->post('description');
			$idata['Sdescription']=$this->input->post('sdescription');
			$idata['Address']=$this->input->post('address');
			$idata['Business_hours']=$this->input->post('business_hours');
			$idata['Phone']=$this->input->post('phone');

			$idata['Cuisine']=$this->input->post('cuisine');
			
			if(!empty($_FILES) && ($_FILES['organization_image']['name'])){
			

			  $config['upload_path'] = 'images/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
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
			if(!empty($_FILES) && ($_FILES['organization_image1']['name'])){
			

			  $config['upload_path'] = 'images/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('organization_image1')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('signup');
			 } else {
			  $avatar = $this->upload->data();
			  $organization_image1 = $avatar['file_name'];

			  $idata['Image2']=$organization_image1;
			 }

			}
			
			if(!empty($_FILES) && ($_FILES['pdffile']['name'])){
			

			  $config['upload_path'] = 'pdf/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			  
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('pdffile')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('signup');
			 } else {
			  $avatar = $this->upload->data();
			  $pdffile = $avatar['file_name'];

			  $idata['Pdf']=$pdffile;
			 }

			}
			
			else{
			
			$message='<div class="alert alert-danger">Please Add Your Image</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/insert_restaurant');

			}
			
			$this->db->insert('tbl_food',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/insert_restaurant');

		}
	}
	
	public function insert_fare()
	{
			
			
		$this->form_validation->set_rules('service_name', 'Name', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('fare', 'Fare', 'required|regex_match[/^[0-9 ]*$/]');
		$this->form_validation->set_rules('dist_frm', 'Distance_frm', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('dist_to', 'Distance_to', 'required|regex_match[/^[a-zA-Z -]*$/]');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/include/header2');
			$this->load->view('admin/insert_fare');
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Name']=$this->input->post('service_name');
			$idata['Fare']=$this->input->post('fare');
			$idata['Distance_frm']=$this->input->post('dist_frm');
			$idata['Distance_to']=$this->input->post('dist_to');
			
			$this->db->insert('tbl_fare',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/insert_fare');

		}
	}
	
	public function insert_emergency_service()
	{
			
			
		$this->form_validation->set_rules('org_name', 'Organization_name', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[0-9-]*$/]');
		$this->form_validation->set_rules('type', 'Type', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/include/header2');
			$this->load->view('admin/insert_emergency_service');
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Organization_name']=$this->input->post('org_name');
			$idata['Address']=$this->input->post('address');
			$idata['Phone']=$this->input->post('phone');
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

			  $idata['ImagePath']=$organization_image;
			 }

			}else{
			
			$message='<div class="alert alert-danger">Please Add Your Image</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/insert_emergency_service');

			}

			$this->db->insert('tbl_emergency_services',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/insert_emergency_service');

		}
	}
	
	public function view_hotel()
	{
		$data['view_hotel']=$this->db->get('tbl_room')->result_array();
		
			$this->load->view('admin/include/header2');
			$this->load->view('admin/view_hotel',$data);
			$this->load->view('admin/include/footer');
			
			
	}
	
	public function view_bookings()
	{
		
		$data['view_bookings']=$this->db->select('tbl_room.Room_Type, tbl_room_book.ID as ID, Name , Email, date, Hotel_name, Mobile, Room_id , Room_no')->from('tbl_room_book,tbl_room,tbl_user')->where('tbl_user.ID=tbl_room_book.User_id')->where('tbl_room_book.Room_id=tbl_room.ID')->get()->result_array();
		
			$this->load->view('admin/include/header2');
			$this->load->view('admin/view_bookings',$data);
			$this->load->view('admin/include/footer');
			
			
	}
	
	public function view_gallery()
	{
		$type='Admin';
		
		$data['view_gallery']=$this->db->where('Type',$type)->get('tbl_gallery')->result_array();
		
			$this->load->view('admin/include/header2');
			$this->load->view('admin/view_gallery',$data);
			$this->load->view('admin/include/footer');
			
			
	}
	
	public function view_restaurant()
	{
		$data['view_restaurant']=$this->db->get('tbl_food')->result_array();
		
			$this->load->view('admin/include/header2');
			$this->load->view('admin/view_restaurant',$data);
			$this->load->view('admin/include/footer');
			
			
	}
	
	public function view_user()
	{
		$data['view_user']=$this->db->where_not_in('Type','Admin')->get('tbl_user')->result_array();
		
			$this->load->view('admin/include/header2');
			$this->load->view('admin/view_user',$data);
			$this->load->view('admin/include/footer');
			
			
	}
	
	public function view_shop_place()
	{
		$data['view_shop_place']=$this->db->get('tbl_shopping')->result_array();
		
			$this->load->view('admin/include/header2');
			$this->load->view('admin/view_shop_place',$data);
			$this->load->view('admin/include/footer');
			
			
	}
	
	public function view_tourist()
	{
		$data['view_tourist']=$this->db->get('tbl_tourist')->result_array();
		
			$this->load->view('admin/include/header2');
			$this->load->view('admin/view_tourist',$data);
			$this->load->view('admin/include/footer');
			
			
	}
	
	public function view_emergency_service()
	{
		$data['emergency_service']=$this->db->get('tbl_emergency_services')->result_array();
		
			$this->load->view('admin/include/header2');
			$this->load->view('admin/view_emergency_service',$data);
			$this->load->view('admin/include/footer');
			
			
	}
	public function view_fare()
	{
		$data['view_fare']=$this->db->get('tbl_fare')->result_array();
		
			$this->load->view('admin/include/header2');
			$this->load->view('admin/view_fare',$data);
			$this->load->view('admin/include/footer');
			
			
	}
	
	public function delete_bookings($id)
	{

			$this->db->where('ID',$id)->delete('tbl_room_book');
			
			$message='<div class="alert alert-danger">Data Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('admin/view_bookings');

	}
	
	
	public function delete_hotel($id)
	{

			$this->db->where('ID',$id)->delete('tbl_room');
			$message='<div class="alert alert-danger">Data Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('admin/view_hotel');

	}
	
	public function delete_gallery($id)
	{

			$this->db->where('ID',$id)->delete('tbl_gallery');
			$message='<div class="alert alert-danger">Data Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('admin/view_gallery');

	}
	
	public function delete_user($id)
	{

			$this->db->where('ID',$id)->delete('tbl_user');
			$message='<div class="alert alert-danger">Data Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('admin/view_user');

	}
	
	public function delete_shop_place($id)
	{

			$this->db->where('ID',$id)->delete('tbl_shopping');
			$message='<div class="alert alert-danger">Data Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('admin/view_shop_place');

	}
	
	public function delete_tourist($id)
	{

			$this->db->where('ID',$id)->delete('tbl_tourist');
			$message='<div class="alert alert-danger">Data Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('admin/view_tourist');

	}
	
	public function delete_restaurant($id)
	{

			$this->db->where('ID',$id)->delete('tbl_food');
			$message='<div class="alert alert-danger">Data Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('admin/view_restaurant');

	}
	
	public function delete_fare($id)
	{

			$this->db->where('ID',$id)->delete('tbl_fare');
			$message='<div class="alert alert-danger">Data Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('admin/view_fare');

	}
	
	public function delete_emergency_service($id)
	{

			$this->db->where('ID',$id)->delete('tbl_emergency_services');
			$message='<div class="alert alert-danger">Data Deleted Successfully</div>';

			$this->session->set_flashdata('message',$message);

 			redirect('admin/view_emergency_service');

	}
	
	public function edit_hotel($id="")
	{
			
			
		$this->form_validation->set_rules('hotel_name', 'Hotel_name', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('price', 'Price', 'required|regex_match[/^[0-9-]*$/]');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('type', 'Room_Type', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$edata['hotel']=$this->db->where('ID',$id)->get('tbl_room')->result_array();
			
			$this->load->view('admin/include/header2');
			$this->load->view('admin/edit_hotel',$edata);
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Hotel_name']=$this->input->post('hotel_name');
			$idata['Price']=$this->input->post('price');
			$idata['Description']=$this->input->post('description');
			$idata['Address']=$this->input->post('address');
			$idata['Phone']=$this->input->post('phone');
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

			redirect('admin/view_hotel');

		}
	}
	
	public function edit_user($id="")
	{
			
			
		$this->form_validation->set_rules('user_name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('user_email', 'Email', 'required');
		$this->form_validation->set_rules('user_mobile', 'Mobile', 'required|regex_match[/^[0-9]*$/]');
		
		if ($this->form_validation->run() == FALSE)
		{
			$edata['user']=$this->db->where('ID',$id)->get('tbl_user')->result_array();
			
			$this->load->view('admin/include/header2');
			$this->load->view('admin/edit_user',$edata);
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Name']=$this->input->post('user_name');
			$idata['Email']=$this->input->post('user_email');
			$idata['Password']=$this->input->post('user_password');
			$idata['Mobile']=$this->input->post('user_mobile');

			$this->db->where('ID',$id)->update('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Updated Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/view_user');

		}
	
	}
	
	public function edit_restaurant($id="")
	{
			
			
		$this->form_validation->set_rules('restaurant_name', 'Restaurant_Name', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('sdescription', 'Short Description', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('business_hours', 'Business_hours', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[0-9-]*$/]');
		
		if ($this->form_validation->run() == FALSE)
		{
			$edata['restaurant']=$this->db->where('ID',$id)->get('tbl_food')->result_array();
			
			$this->load->view('admin/include/header2');
			$this->load->view('admin/edit_restaurant',$edata);
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Restaurant_Name']=$this->input->post('restaurant_name');
			$idata['Description']=$this->input->post('description');
			$idata['Sdescription']=$this->input->post('sdescription');
			$idata['Address']=$this->input->post('address');
			$idata['Business_hours']=$this->input->post('business_hours');
			$idata['Phone']=$this->input->post('phone');

			$idata['Cuisine']=$this->input->post('cuisine');

			if(!empty($_FILES) && ($_FILES['pdffile']['name'])){
			

			  $config['upload_path'] = 'pdf/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			  
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('pdffile')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('signup');
			 } else {
			  $avatar = $this->upload->data();
			  $pdffile = $avatar['file_name'];

			  $idata['Pdf']=$pdffile;
			 }

			}
			if(!empty($_FILES) && ($_FILES['organization_image']['name'])){
			

			  $config['upload_path'] = 'images/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
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
			if(!empty($_FILES) && ($_FILES['organization_image1']['name'])){
			

			  $config['upload_path'] = 'images/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('organization_image1')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			 
					redirect('signup');
			 } else {
			  $avatar = $this->upload->data();
			  $organization_image1 = $avatar['file_name'];

			  $idata['Image2']=$organization_image1;
			 }

			}
			
			$this->db->where('id',$id)->update('tbl_food',$idata);

			$message='<div class="alert alert-success">Data Updated Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/view_restaurant');

		}
	}
	
	public function edit_shop_place($id="")
	{
			
			
		$this->form_validation->set_rules('shop_name', 'Name', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('sdescription', 'Short Description', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('phone', 'Contact', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$edata['shop']=$this->db->where('ID',$id)->get('tbl_shopping')->result_array();
			
			$this->load->view('admin/include/header2');
			$this->load->view('admin/edit_shop_place',$edata);
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Name']=$this->input->post('shop_name');
			$idata['Description']=$this->input->post('description');
			$idata['Sdescription']=$this->input->post('sdescription');
			$idata['Address']=$this->input->post('address');
			$idata['Contact']=$this->input->post('phone');
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

			  $idata['Image2']=$organization_image1;
			 }

			}

			$this->db->where('id',$id)->update('tbl_shopping',$idata);

			$message='<div class="alert alert-info">Data Updated Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/view_shop_place');

		}
	}
	
	public function edit_gallery($id="")
	{
			
			
		$this->form_validation->set_rules('type', 'Type', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$edata['gallery']=$this->db->where('ID',$id)->get('tbl_gallery')->result_array();
			
			$this->load->view('admin/include/header2');
			$this->load->view('admin/edit_gallery',$edata);
			$this->load->view('admin/include/footer');

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

			redirect('admin/view_gallery');

		}
	}
	
	public function edit_tourist($id="")
	{
			
			
		$this->form_validation->set_rules('place_name', 'Name', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('sdescription', 'Short Description', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$edata['tourist']=$this->db->where('ID',$id)->get('tbl_tourist')->result_array();
			
			$this->load->view('admin/include/header2');
			$this->load->view('admin/edit_tourist',$edata);
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Name']=$this->input->post('place_name');
			$idata['Description']=$this->input->post('description');
			$idata['Sdescription']=$this->input->post('sdescription');

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
			  $idata['Image2']=$organization_image1;
			 }

			}
			$this->db->where('ID',$id)->update('tbl_tourist',$idata);

			$message='<div class="alert alert-info">Data Updated Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/view_tourist');

		}
	}
	
	public function edit_fare($id="")
	{
			
			
		$this->form_validation->set_rules('service_name', 'Name', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('fare', 'Fare', 'required');
		$this->form_validation->set_rules('dist_frm', 'Distance_frm', 'required');
		$this->form_validation->set_rules('dist_to', 'Distance_to', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$edata['fare']=$this->db->where('ID',$id)->get('tbl_fare')->result_array();
			
			$this->load->view('admin/include/header2');
			$this->load->view('admin/edit_fare',$edata);
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Name']=$this->input->post('service_name');
			$idata['Fare']=$this->input->post('fare');
			$idata['Distance_frm']=$this->input->post('dist_frm');
			$idata['Distance_to']=$this->input->post('dist_to');

			$this->db->where('id',$id)->update('tbl_fare',$idata);

			$message='<div class="alert alert-info">Data Updated Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/view_fare');

		}
	}
	
	public function edit_emergency_service($id="")
	{
			
			
		$this->form_validation->set_rules('org_name', 'Organization_name', 'required|regex_match[/^[a-zA-Z -]*$/]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[0-9-]*$/]');
		$this->form_validation->set_rules('type', 'Type', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$edata['service']=$this->db->where('ID',$id)->get('tbl_emergency_services')->result_array();
			
			$this->load->view('admin/include/header2');
			$this->load->view('admin/edit_emergency_service',$edata);
			$this->load->view('admin/include/footer');

		}
		else{

			$idata['Organization_name']=$this->input->post('org_name');
			$idata['Address']=$this->input->post('address');
			$idata['Phone']=$this->input->post('phone');
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

			  $idata['ImagePath']=$organization_image;
			 }

			}

			$this->db->where('id',$id)->update('tbl_emergency_services',$idata);

			$message='<div class="alert alert-info">Data Updated Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('admin/view_emergency_service');

		}
	}
	
	


}
