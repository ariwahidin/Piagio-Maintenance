<?php defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['master_m', 'customer_m', 'item_m', 'top_m', 'user_m', 'employee']);
    }

    public function render($view, array $data = null)
    {
        $this->load->view('template/header');
        $this->load->view($view, $data);
        $this->load->view('template/footer');
    }

    public function top()
    {
        $data = array();
        $this->render('master/top', $data);
    }


    public function createChecker()
    {
        $post = $this->input->post();
        date_default_timezone_set('Asia/Jakarta');
        $created_at = date('Y-m-d H:i:s');
        $params = array(
            'name' => $post['checker'],
            'position' => 'checker',
            'created_by' => $_SESSION['user_data']['username'],
            'created_at' => $created_at
        );

        $this->employee->createEmploye($params);
        if ($this->db->affected_rows() > 0) {
            $response = array(
                'success' => true,
                'message' => 'New checker has been created successfully'
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Failed to create new checker'
            );
        }
        echo json_encode($response);
    }

    public function deleteChecker()
    {
        $post = $this->input->post();
        $id = $post['id'];
        date_default_timezone_set('Asia/Jakarta');
        $datetime = date('Y-m-d H:i:s');
        $params = array(
            'delete_by' => $_SESSION['user_data']['username'],
            'delete_at' =>  $datetime,
            'is_delete' => 'Y'
        );
        $this->employee->deleteChecker($id, $params);
        if ($this->db->affected_rows() > 0) {
            $response = array(
                'success' => true,
                'message' => 'Success deleting data'
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Failed deleting data'
            );
        }
        echo json_encode($response);
    }


    public function listChecker()
    {
        $data = array(
            'checker' => $this->employee->getChecker()
        );
        $this->render('master/checker', $data);
    }



    public function getMasterTop()
    {
        $list = $this->top_m->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->GroupNum;
            $row[] = $field->Descript;
            $row[] = $field->ExtraDays;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->item_m->count_all(),
            "recordsFiltered" => $this->item_m->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function customer()
    {
        $data = array();
        $this->render('master/customer', $data);
    }

    public function getMasterCustomer()
    {
        $list = $this->customer_m->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->CardName;
            $row[] = $field->Address;
            $row[] = $field->City;
            $row[] = $field->Phone;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->customer_m->count_all(),
            "recordsFiltered" => $this->customer_m->count_filtered(),
            "data" => $data,
        );

        //output dalam format JSON
        echo json_encode($output);
    }

    public function item()
    {
        $data = array();
        $this->render('master/item', $data);
    }

    public function getMasterItem()
    {
        $list = $this->item_m->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->ItemCode;
            $row[] = $field->FrgnName;
            $row[] = $field->ItemName;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->item_m->count_all(),
            "recordsFiltered" => $this->item_m->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function subdist()
    {
        $data = array();
        $this->render('master/subdist', $data);
    }

    public function getMasterSubdist()
    {
        $subdist = $this->master_m->master_subdist()->result();
        $response = array(
            'subdist' => $subdist
        );
        echo json_encode($response);
    }

    public function prosesSimpan()
    {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);
        var_dump($data);
    }

    public function prosesSimpanCustomer()
    {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);

        $this->customer_m->simpanCustomer($data);

        if ($this->db->affected_rows() > 0) {
            $response = array(
                'success' => true
            );
        } else {
            $response = array(
                'success' => false
            );
        }
        echo json_encode($response);
    }

    public function user()
    {
        $this->render('master/user');
    }

    public function getMasterUsers()
    {
        $list = $this->user_m->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->username;
            $row[] = $field->role;
            // $row[] = $field->ItemName;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->item_m->count_all(),
            "recordsFiltered" => $this->item_m->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function getSubdistForNewUser()
    {
        $subdist = $this->master_m->getSubdistForUser();
        if ($subdist->num_rows() > 0) {
            $response = array(
                'success' => true,
                'data' => $subdist->result()
            );
        } else {
            $response = array(
                'success' => false
            );
        }
        echo json_encode($response);
    }

    public function simpanNewUserSubdist()
    {
        $data = file_get_contents("php://input");
        var_dump($data);
        var_dump($_POST);
    }
}
