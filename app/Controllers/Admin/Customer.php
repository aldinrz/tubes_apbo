<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CustomerModel;

class Customer extends BaseController{

    protected $customerModel;
    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }

    public function index()
    {
        $customer = $this->customerModel->findAll();

        $data = [
            'title' => 'Data Customer',
            'user_status' => 'Admin',
            'customer' => $customer,
        ];
        echo view('admin/pages/customer/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Data Customer',
            'user_status' => 'Admin',
            'customer' => $this->customerModel->getCustomer($id),
        ];

        if(empty($data['customer'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Mekanik dengan id '. $id . ' tidak ditemukan.');
        }

        echo view('admin/pages/customer/detail', $data);

    }

    public function delete($id)
    {
        $this->customerModel->delete($id);
        session()->setFlashdata('message', 'Data berhasil dihapus!');

        return redirect()->to(base_url('/admin/customer'));
    }
    
}

