<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Customer extends BaseController{

    public function index()
    {
        echo view('customer/header');
        echo view('customer/pages/home');
        echo view('customer/footer');
    }

    public function registration()
    {
        echo view('customer/header');
        echo view('customer/pages/registration');
        echo view('customer/footer');
    }

    public function spareparts()
    {
        echo view('customer/header');
        echo view('customer/pages/spareparts');
        echo view('customer/footer');
    }

    public function booking()
    {
        echo view('customer/header');
        echo view('customer/pages/booking');
        echo view('customer/footer');
    }

    public function change_password()
    {
        echo view('customer/header');
        echo view('customer/pages/change_password');
        echo view('customer/footer');
    }

    public function profil()
    {
        echo view('customer/header');
        echo view('customer/pages/profil');
        echo view('customer/footer');
    }

    public function pembayaran()
    {
        echo view('customer/header');
        echo view('customer/pages/pembayaran');
        echo view('customer/footer');
    }
}
?>