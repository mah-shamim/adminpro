<?php
namespace Adminlte\Controllers;
use App\Controllers\AdminBaseController;
use \Hermawan\DataTables\DataTable;


class Adminlte extends AdminBaseController {

    public $title = 'AdminLte Dashboard';
    public $menu = false;

    
    public function index() {

        $url = service('uri');

        $allSegments = $url->getSegments();

        unset($allSegments[0]);
        
        $path = implode("/", $allSegments);

        if(\file_exists( ROOTPATH.'Modules/Adminlte/Views/'.$path.'.php' )){
            return  view('Adminlte\Views\/'.$path);
        }

        throw  \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        return;
    }

    public function serverside_datatables_data()
    {
        $db = db_connect();
        $builder = $db->table('users')->select('name,email,last_login,role');

        return DataTable::of($builder)->toJson(true);
    }

    public function form_validation()
    {
        
        if($this->request->getMethod(true)!='POST'){
            return redirect()->to('adminlte/ci_examples/form_validation');
        }

        if(!$this->validate([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[5]',
            'terms' => 'required',
        ])){

            return view('Adminlte\Views\ci_examples/form_validation', [
                'validation' => $this->validator,
            ]);

        }else{
            return redirect()->back()->with('notifySuccess', 'Thanks for Submitting Form');
        }
        
    }

    public function file_uploads()
    {

        if($this->request->getMethod(true)!='POST'){
            return redirect()->to('adminlte/ci_examples/file_uploads');
        }

        if(!$this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png]',
                'max_size[file,1024]',
            ],
        ])){
            return view('Adminlte\Views\ci_examples/file_uploads', [
                'validation' => $this->validator,
            ]); 
        }
        else
        {

            $img = $this->request->getFile('file');
            $img->move(FCPATH . 'uploads');

            return redirect()->to('adminlte/ci_examples/file_uploads')->with('notifySuccess', 'File Uploaded Successfully '.$img->getName().' !');
        }
    

        $this->view('file_uploads');
    }

    
    public function multi_file_uploads()
    {


        if( $this->validate([
            'files' => [
                'uploaded[files]',
                'mime_in[files,image/jpg,image/jpeg,image/png]',
                'max_size[files,1024]',
            ],
        ]) ){

            $path = FCPATH . '/uploads/test_files';
            
            $img = $this->request->getFile('files');
            $img->move($path);


            // die(var_dump($img->getName()));
            $file = new \CodeIgniter\Files\File($path.'/'.$img->getName());

            // die(var_dump($file));


            if ($img!=FALSE){
                
                $response['files'][] = [
                    'name' => $img->getName(),
                    'size' => $file->getSize(),
                    'url' => urlUpload('test_files').'/'.$img->getName(),
                    'thumbnailUrl' => urlUpload('test_files').'/'.$img->getName(),
                    'deleteUrl' => url('/adminlte/ci_examples/multi_file_uploads_delete').'/'.urlencode($img->getName()),
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

        return $this->index();
        
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
        \helper('filesystem');
        $files = directory_map( FCPATH.'uploads/test_files' );
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


}
