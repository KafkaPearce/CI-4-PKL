<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelAkun;
use App\Models\ModelDetailakun;
use Config\Email;

class AkunController extends BaseController
{

    public function index()
    {
        $akun = $this->ModelAkun->findAll();

        $data = [
            'akun' => $akun
        ];
        return view('Akun/index', $data);
    }

    public function save()
    {
        $password = md5($this->request->getPost('password'));
        $this->request->getPost();
        $this->ModelAkun->insert([
            
            'email' => $this->request->getPost('email'),
            'password' => $password,
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to('akun');
    } 

    public function delete($id)
    {
        $id = base64_decode($id);
        $this->ModelAkun->delete($id);
        return redirect()->to('akun');
    }

    public function edit($id)
    {
        $id = base64_decode($id);
        $akun = $this->ModelAkun->find($id);
        $data = [
            'akun' => $akun
        ];
        return view('Akun/edit', $data);
    }


    public function update()
    {
        $this->ModelAkun->save([
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to('akun');
    }

    public function detail()
    {
        $akun = $this->ModelAkun->findAll();
        $detailakun = $this->ModelDetailakun->findAll();
        $data = [
            'akun' => $akun,
            'detailakun' => $detailakun
        ];
        return view('Akun/Detail/index', $data);
    }

}
