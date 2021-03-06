<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inspectors extends CI_Controller {
    /**
    * Get All Data from this method.
    *
    * @return Response
   */
  public function __construct() {
    parent::__construct(); 

    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('M_inspectors');

    $this->ins_obj = new M_inspectors;
 }
    /**
    * Display Data this method.
    *
    * @return Response
   */
  public function index()
  {
      $data['inspectors'] = $this->ins_obj->getAllData();


      $this->load->view('templates/header');       
      $this->load->view('inspectors',$data);
      $this->load->view('templates/footer');
  }



}