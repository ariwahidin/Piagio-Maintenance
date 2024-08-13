<?php defined('BASEPATH') or exit('No direct script access allowed');

class ItemForklift extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        is_not_logged_in();
        $this->load->model(['user_m', 'role_m', 'item_forklift_m']);
    }

    public function render($view, array $data = null)
    {
        $this->load->view('template/header');
        $this->load->view($view, $data);
        $this->load->view('template/footer');
    }

    public function index()
    {
        $data = array(
            'forklift' => $this->item_forklift_m->getItemCheck()
        );
        $this->render('item_forklift/index', $data);
    }

    public function createForklift()
    {
        $post = $this->input->post();
        $params = array(
            'name' => $post['name'],
            'desc' => $post['desc'],
            'is_deleted' => 'N',
            'created_by' => userId(),
            'created_at' => currentDateTime()
        );

        // var_dump($params);

        $this->item_forklift_m->createForklift($params);
        if ($this->db->affected_rows() > 0) {
            $response = array(
                'success' => true,
                'message' => 'Create new item has been successfully'
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Failed to create new item'
            );
        }
        echo json_encode($response);
    }

    public function editForklift()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $params = array(
            'name' => $post['name'],
            'desc' => $post['desc'],
            'updated_at' => currentDateTime(),
            'updated_by' => userId()
        );
        $this->item_forklift_m->editForklift($id, $params);
        if ($this->db->affected_rows() > 0) {
            $response = array(
                'success' => true,
                'message' => 'Edit item has been successfully'
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Failed to edit item'
            );
        }
        echo json_encode($response);
    }

    public function deleteForklift()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $params = array(
            'is_deleted' => 'Y',
            'deleted_at' => currentDateTime(),
            'deleted_by' => userId()
        );
        $this->item_forklift_m->deleteForklift($id, $params);
        if ($this->db->affected_rows() > 0) {
            $response = array(
                'success' => true,
                'message' => 'Delete item has been successfully'
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Failed to delete item'
            );
        }
        echo json_encode($response);
    }
}
