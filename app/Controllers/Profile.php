<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\profile_model;
  
class Profile extends Controller
{
    protected $helpers = [];

    public function __construct()
    {
        helper(['form']);
        $this->Profile_model = new Profile_model();
    }

    public function index()
	{
		$model = new Profile_model();
        $data['profile'] = $model->getProfile();
        echo view('profile/index', $data);
	}

    public function create()
    {
        return view('profile/create');
    }

 
    public function store()
    {
        $validation =  \Config\Services::validation();
    
        // get file upload
        $image = $this->request->getFile('profile_image');
        // random name file
        $name = $image->getRandomName();
    
        $data = array(
            'profile_id'           => $this->request->getPost('profile_id'),
            'fullname'          => $this->request->getPost('fullname'),
            'name'          => $this->request->getPost('name'),
            'timestamps'          => $this->request->getPost('timestamps'),
            'asal'          => $this->request->getPost('asal'),
            'hobi'          => $this->request->getPost('hobi'),
            'kuliah_name'         => $this->request->getPost('kuliah_name'),
            'prody'           => $this->request->getPost('prody'),
            'profile_image'         => $name,
            'profile_description'   => $this->request->getPost('profile_description'),
        );
    
        if($validation->run($data, 'profile') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('profile/create'));
        } else {
            // upload file 
            $image->move(ROOTPATH . 'public/uploads', $name);
            // insert
            $simpan = $this->Profile_model->insertProfile($data);
            if($simpan)
            {
                session()->setFlashdata('success', 'Created Profile successfully');
                return redirect()->to(base_url('profile')); 
            }
        }
    }

    public function show($id)
    {  
        $data['profile'] = $this->Profile_model->getProfile($id);
        echo view('profile/show', $data);
    }
    
    public function edit($id)
    {  
        $model = new Profile_model();
        $data['profile'] = $model->getProfile($id)->getRowArray();
        echo view('profile/edit', $data);
    }
    
    public function update()
    {
        $id = $this->request->getPost('profile_id');
    
        $validation =  \Config\Services::validation();
    
        // get file
        $image = $this->request->getFile('profile_image');
        // random name file
        $name = $image->getRandomName();
    
        $data = array(
            'profile_id'           => $this->request->getPost('profile_id'),
            'fullname'          => $this->request->getPost('fullname'),
            'name'          => $this->request->getPost('name'),
            'timestamps'          => $this->request->getPost('timestamps'),
            'asal'          => $this->request->getPost('asal'),
            'hobi'          => $this->request->getPost('hobi'),
            'kuliah_name'         => $this->request->getPost('kuliah_name'),
            'prody'           => $this->request->getPost('prody'),
            'profile_image'         => $name,
            'profile_description'   => $this->request->getPost('profile_description'),
        );
        
        if($validation->run($data, 'profile') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('profile/edit/'.$id));
        } else {
            // upload
            $image->move(ROOTPATH . 'public/uploads', $name);
            // update
            $ubah = $this->profile_model->updateProfile($data, $id);
            if($ubah)
            {
                session()->setFlashdata('info', 'Updated profile successfully');
                return redirect()->to(base_url('profile')); 
            }
        }
    }

    public function delete($id)
    {
        $model = new Profile_model();
        $hapus = $model->deleteProfile($id);
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted Profile successfully');
            return redirect()->to(base_url('profile')); 
        }
    }
}
?>