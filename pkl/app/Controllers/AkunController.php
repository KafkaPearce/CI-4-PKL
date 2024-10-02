<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
    public function detail()
    {
        $akun = $this->modelDetailakun
        ->join('akun', 'akun.email = detail_akun.email')->findAll();
                $data = [
            'akun' => $akun
        ];
        return view('Detail/index', $data);
    }
    
    public function save()
    {
        $foto = $this->request->getFile('foto');
        $foto->move(targetPath: 'img');
        $namafoto = $foto->getName();
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
                'no_telp' => $this->request->getPost('notelp'),
                'alamat' => $this->request->getPost('alamat'),
                'foto' => $namafoto
            ]
        );

        return redirect()->to('akun');
    } 

    public function delete($id)
    {
        $foto = $this->modelDetailakun->find($id);

        unlink('img/' . $foto['foto']);

        $id = base64_decode($id);
        $this->modelAkun->delete($id);
        return redirect()->to('akun');
    }

    public function edit($id)
    {
        $id = base64_decode($id);
        $akun = $this->modelAkun->find($id);
        $detail = $this->modelDetailakun->where('email', $id)->first();
        $data = [
            'akun' => $akun,
            'detail' => $detail
            ];
        return view('akun/edit', $data);
    }


    public function update()
    {
        $this->modelAkun->save([
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'status' => $this->request->getPost('status'),
        ]);

        $this->modelDetailakun->where('akun' , 'akun.email = detail_akun.email')->save(
            [
                'email' => $this->request->getPost('email'),
                'nama' => $this->request->getPost('nama'),
                'no_telp' => $this->request->getPost('notelp'),
                'alamat' => $this->request->getPost('alamat'),
                'foto' => $this->request->getPost('foto')
            ]
            );
        return redirect()->to('akun');
    }


}
