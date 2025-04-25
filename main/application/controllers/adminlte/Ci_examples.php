<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ci_examples extends MY_Controller {

    public function basic_datatables()
    {
        $this->view('basic_datatables');
    }

    public function serverside_datatables()
    {
        $this->view('serverside_datatables');
    }

    public function serverside_datatables_data()
    {

        $response = array();

        $postData = $this->input->post();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if($searchValue != ''){
            $searchQuery = " (name like '%".$searchValue."%' or email like '%".$searchValue."%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('users')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('users')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        if($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('users')->result();

        $data = array();

        foreach($records as $record ){

            $data[] = array( 
                "name"=>$record->name,
                "email"=>$record->email,
                "last_login"=>$record->last_login,
            ); 
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        $this->output->set_content_type('application/json')->set_output(json_encode( $response ));

    }

    public function form_validation()
    {

        if( !empty($this->input->post()) ){

            $this->form_validation->set_rules('email', 'Email', 'required|email');
            $this->form_validation->set_rules('password', 'Password', 'required|min:5');
            $this->form_validation->set_rules('terms', 'Terms & Conditions', 'required');

            $this->form_validation->set_error_delimiters('<span class="invalid-feedback" style="display: block;">', '</span>');


            if ($this->form_validation->run() == FALSE)
            {
                $this->view('form_validation');
                return;
            }
            else
            {
                    
            }
        }

        $this->view('form_validation');
    }

    public function file_uploads()
    {

        if( !empty( $_FILES['file'] ) ){

            // die(var_dump($this->input->post('file')));
            
            // if ( empty( $_FILES['file']['name'] ) )
                $this->form_validation->set_rules('file', 'File Upload', 'callback_file_check');

            $this->form_validation->set_error_delimiters('<span class="invalid-feedback" style="display: block;">', '</span>');


            if ( $this->form_validation->run() == FALSE )
            {
                    $this->view('file_uploads');
                return;
            }
            else
            {
                
                $path = $_FILES['file']['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $this->uploadlib->initialize();
                $file = $this->uploadlib->uploadImage('file', '/test_files');

                // die(var_dump($file));


                if($file['status']){
                    
                    $this->session->set_flashdata('alert-type', 'success');
			        $this->session->set_flashdata('alert', 'File has been uploaded Successfully');
                    redirect('adminlte/ci_examples/file_uploads');
                }else{
                    $this->session->set_flashdata('alert-type', 'danger');
			        $this->session->set_flashdata('alert', $this->upload->display_errors());
                    redirect('adminlte/ci_examples/file_uploads');
                }
                                    
            }
        }


        $this->view('file_uploads');
    }

    public function multi_file_uploads()
    {

        if( !empty( $_FILES['files'] ) ){


            if ( !empty($_FILES['files']) == FALSE )
            {
                return;
            }
            else
            {

                $this->uploadlib->initialize();
                
                $file = $this->uploadlib->uploadImage('files', '/test_files');

                if ($file['status']!=FALSE){
                    $response['files'][] = [
                        'name' => $file['data']['file_name'],
                        'size' => $file['data']['file_size'],
                        'url' => urlUpload('test_files').'/'.$file['data']['file_name'],
                        'thumbnailUrl' => urlUpload('test_files').'/'.$file['data']['file_name'],
                        'deleteUrl' => url('/adminlte/ci_examples/multi_file_uploads_delete').'/'.urlencode($file['data']['file_name']),
                        'deleteType' => "DELETE",
                    ];

                    
                }else{
                    $response['files'][] = [
                        'name' => $_FILES['files']['name'],
                        'size' => $_FILES['files']['size'],
                        'error' => $file['error'],
                    ];
                }

                echo json_encode($response);
                header('Content-type: application/json');
                return;
                                    
            }
        }

        $this->view('multi_file_uploads');
        
    }
    

    public function multi_file_uploads_delete( $file )
    {
        $path = FCPATH.'/uploads/test_files/'.urldecode($file);

        if(file_exists($path))
            unlink($path);
        
        $response['files'] = [
            $file => true,
        ];

        echo json_encode($response);
        header('Content-type: application/json');
        return;
    }

    public function multi_file_uploads_files()
    {
        $files = directory_map( './uploads/test_files' );
        $response = ['files'];

        foreach ($files as $i => $file){
             $response['files'][$i] = [
                'name' => $file,
                'size' => filesize( FCPATH.'/uploads/test_files/'. $file ),
                'url' => urlUpload('test_files').'/'.$file,
                'thumbnailUrl' => urlUpload('test_files').'/'.$file,
                            'deleteUrl' => url('/adminlte/ci_examples/multi_file_uploads_delete').'/'.urlencode($file),
                            'deleteType' => "DELETE",
            ];
        }

        echo json_encode($response);
        header('Content-type: application/json');
        return;

    }

    public function file_check($str)
    {
        if (empty($_FILES['file']['name'])){
            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
        }

        return !empty($_FILES['file']['name']);
    }

    private function view($key)
	{
		$this->load->view('adminlte/ci_examples/'.$key, $this->page_data);
	}
    
}
