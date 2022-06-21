<?php
defined('BASEPATH') or exit('No direct script access allowed');


class DashboardController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    ($_SESSION['login'] != true) ? die(redirect('login')) : '';
  }

  public function dashboard()
  {

    // return $this->load->view('dashboard');
  }
  public function adddata()
  {
    if ($this->input->post('type') == 1) {
      $data['first_name'] = $this->input->post('fname');
      $data['last_name	'] = $this->input->post('lname');
      $data['company_name'] = $this->input->post('companyname');
      $data['email'] = $this->input->post('email');
      $data['phone'] = $this->input->post('phone');
      $data['mobile'] = $this->input->post('mobile');
      $data['address'] = $this->input->post('address');
      $data['city'] = $this->input->post('city');
      $data['state'] = $this->input->post('state');
      $data['zip'] = $this->input->post('zip');
      $data['country_code'] = $this->input->post('country');
      $data['status'] = $this->input->post('status');
      $this->db->insert('Registration', $data);
      // print_r($data);
      // echo $this->db->last_query(); exit;
      die(json_encode(array("statusCode" => 200)));
    }

    return redirect('dashboard');
  }

  public function displydata()
  {
    $this->load->model('Customer_model');
    $data['Registration'] = $this->Customer_model->displydata();
    $this->load->view('dashboard', $data);
  }

  public function leadrecordupdate()
  {
    $userId = $_POST['userId'];
    echo json_encode($this->db->select('*')->from('Registration')->where('id', $userId)->get()->row());
    exit;
  }
  public function updatecustomer()
  {


    $update['first_name'] = $this->input->post('model_name');
    $update['last_name	'] = $this->input->post('model_lname');
    $update['company_name'] = $this->input->post('model_company');
    $update['email'] = $this->input->post('model_email');
    $update['phone'] = $this->input->post('model_phone');
    $update['mobile'] = $this->input->post('model_mobile');
    $update['address'] = $this->input->post('model_address');
    $update['city'] = $this->input->post('model_city');
    $update['state'] = $this->input->post('model_state');
    $update['zip'] = $this->input->post('model_zip');
    $update['country_code'] = $this->input->post('model_country');
    $update['status'] = $this->input->post('model_status');

    $id_edit = $_POST['id_edit'];

    $this->db->where('id', $id_edit);
    $this->db->update('Registration', $update);
    if ($update) {
      return redirect('dashboard');
    } else {
      return die(json_encode(['msg' => 'Your data has not been updated']));
    }
  }
 
  function deletedata() {
    $id = $_POST['id_edit'];
    $this->db->where('id', $id);
    $this->db->delete('Registration');
  }
}

 // public function deletedata()
  // {
  //   $userId = $_GET['id_edit'];
  //   $this->db->where('id', $userId);
  //   $result = $this->db->delete('Registration');
  //   if ($result) {
  //     return die(json_encode(['msg' => 'record successfully deleted']));
  //   } else {
  //     return die(json_encode(['msg' => 'Your data has not been deleted']));
  //   }
  // }