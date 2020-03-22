<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->loadAllArts();

	}

	public function loadAllArts(){
		$this->load->model('queries');
		$arts=$this->queries->allArts();
		$this->load->view('admin/admin',['arts'=>$arts]);
	}

	public function loadClassicArts(){
		$this->load->model('queries');
		$classicArts=$this->queries->allClassic();
		$this->load->view('admin/classicArts',['arts'=>$classicArts]);
	}

	public function loadRomanceArts(){
		$this->load->model('queries');
		$romanceArts=$this->queries->allRomance();
		$this->load->view('admin/romanceArts',['arts'=>$romanceArts]);
	}

	public function loadNatureArts(){
		$this->load->model('queries');
		$natureArts=$this->queries->allNature();
		$this->load->view('admin/natureArts',['arts'=>$natureArts]);
	}

	public function loadPencilArts(){
		$this->load->model('queries');
		$pencilArts=$this->queries->allPencilArts();
		$this->load->view('admin/pencilArts',['arts'=>$pencilArts]);
	}

	
	  public function addNewArts()
	  {
		
		  
		 $this->load->view('admin/addNewArts');
	  }

	  public function artSave()
	  {

			$this->form_validation->set_rules('Art_Name','Art Name','required');
			$this->form_validation->set_rules('Artist_Name','Artist Name','required');
			$this->form_validation->set_rules('Category','Category','required');
			
			if($this->form_validation->run()){

				$data=array(
					"Art_Name" =>$this->input->post("Art_Name"),
					"Artist_Name" =>$this->input->post("Artist_Name"),
					"Category" =>$this->input->post("Category")
				);

				$config=[
					'upload_path'=>'./uploads',
					'allowed_types'=>'gif|png|jpg|jppeg'
				];
				$this->load->library('upload',$config);
				$this->form_validation->set_error_delimiters();
				if($this->upload->do_upload()){
					$data=$this->input->post();
					$info=$this->upload->data();
					//echo '<pre>';
					//print_r($info);
					//echo '</prev>';
					$image_path=($info['raw_name'].$info['file_ext']);
					
					//print_r($image_path);
					//exit();
					
					$data['Path' ]=$image_path;
					unset($data['submit']);
					$this->load->model('queries');
					if($this->queries->addArt($data)){
						echo 'Image upload Successfully';
					}
					else{
					  echo 'Failed to add Image';
					}
					exit();
				}
			}else{
			  $this->addNewArts();
		  }

	  }

	  public function updateArts(){
		$this->load->view('admin/updateArt');
	  }

	  public function deleteArts(){
		$this->load->view('admin/deleteArt');
	  }


	  public function update(){
		$this->form_validation->set_rules('Art_Name','Art Name','required');
		$this->form_validation->set_rules('Artist_Name','Artist Name','required');
		$this->form_validation->set_rules('Category','Category','required');
		
		if($this->form_validation->run()){

			$data=array(
				"Art_Id" =>$this->input->post("Art_Id"),
				"Art_Name" =>$this->input->post("Art_Name"),
				"Artist_Name" =>$this->input->post("Artist_Name"),
				"Category" =>$this->input->post("Category"),
				
			);
			
		
				//$data = $this->input->post();
				unset($data['submit']);
				$this->load->model('queries');
				// echo '<pre>';
				
				if($this->queries->updateArt($data, $this->input->post("Art_Id"))){
					echo '<pre>';
					print_r($data);
					echo '</prev>';
					echo 'Image update Successfully';
				}else{
					echo 'Failed to update';
				}
			}

	  }

	  public function delete(){
		$this->form_validation->set_rules('Art_Id','Art ID','required');
		$Id=$this->input->post("Art_Id");
		$this->load->model('queries');
		if($this->queries->deleteArt($Id)){
					echo '<pre>';
					print_r($Id);
					echo '</prev>';
					echo 'Image delete Successfully';
				}else{
					echo 'Failed to delete';
				}
		}

	  }

	  
  
	 

