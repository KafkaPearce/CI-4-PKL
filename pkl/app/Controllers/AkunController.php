<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAkun;

class AkunController extends BaseController
{

    public function index()
    {
        $akun = $this->modelAkun->findAll();

        $data = [
            'akun' => $akun
        ];
        return view('Akun/index', $data);
    }

    public function save()
    {
        $password = md5($this->request->getPost('password'));
        $this->request->getPost();
        $this->modelAkun->insert([
            
            'email' => $this->request->getPost('email'),
            'password' => $password,
            'status' => $this->request->getPost('status')
        ]);

        $this->modelDetailakun->where('akun', 'akun.email = detail_akun.email')->insert(
            [
                'email' => $this->request->getPost('email'),
                'nama' => $this->request->getPost('nama'),
                'notelp' => $this->request->getPost('no_telp'),
                'alamat' => $this->request->getPost('alamat'),
            ]
        );

        return redirect()->to('akun');
    } 

    public function delete($id)
    {
        $id = base64_decode($id);
        $this->modelAkun->delete($id);
        return redirect()->to('akun');
    }

    public function edit($id)
    {
        $id = base64_decode($id);
        $akun = $this->modelAkun->find($id);
        $data = [
            'akun' => $akun
        ];
        return view('Akun/edit', $data);
    }


    public function update()
    {
        $this->modelAkun->save([
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to('akun');
    }

    public function detail()
    {
        $akun = $this->modelDetailakun
        ->join('akun', 'akun.email = detail_akun.email')->findAll();
                $data = [
            'akun' => $akun
        ];
        return view('Detail/index', $data);
    }

}
