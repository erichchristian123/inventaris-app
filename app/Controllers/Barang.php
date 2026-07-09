<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $barangModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        $data['barang'] = $this->barangModel->findAll();

        return view('barang/index', $data);
    }

    public function create()
    {
        return view('barang/create');
    }

    public function edit($id)
    {
        $data['barang'] = $this->barangModel->find($id);

        return view('barang/edit', $data);
    }

    public function store()
    {
        $this->barangModel->save([
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah' => $this->request->getPost('jumlah'),
            'kondisi' => $this->request->getPost('kondisi'),
            'tanggal_masuk' => date('Y-m-d')
        ]);

        return redirect()->to('http://localhost/inventaris-app/public/barang');
    }

    public function update($id)
    {
        $this->barangModel->update($id, [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah' => $this->request->getPost('jumlah'),
            'kondisi' => $this->request->getPost('kondisi')
        ]);

        return redirect()->to('http://localhost/inventaris-app/public/barang');
    }

    public function delete($id)
    {
        $this->barangModel->delete($id);

        return redirect()->to('http://localhost/inventaris-app/public/barang');
    }
}