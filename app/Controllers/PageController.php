<?php

namespace App\Controllers;

class PageController extends BaseController{

    public function index()
    {
        echo view("home");
    }

    public function about()
    {
        echo view("about");
    }

    public function contact()
    {
        $data['name'] = "Belajar CodeIgniter";
        echo view("contact", $data);
    }

    public function faqs()
    {
        echo view("faq");
    }

    public function karyawan()
    {
        echo view("karyawan");
    }

    public function homeDosen()
    {
        echo view("homeDosen");
    }

    public function homeMahasiswa()
    {
        echo view("homeMahasiswa");
    }

    public function homeAdmin(){
        return view('homeAdmin');
    }
}

?>