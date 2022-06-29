<?php

namespace App\Controllers;

use App\Models\UsersModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('loginview');
    }

    public function process()
    {
        $users = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'email' => $email,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'email' => $dataUser->email,
                    'name' => $dataUser->name,
                    'role' => $dataUser->role,
                    'logged_in' => TRUE
                ]);
                if(session()->get('role') == "admin"){
                    return redirect()->to(base_url('/homeAdmin'));
                }else if(session()->get('role') == "mahasiswa"){
                    return redirect()->to(base_url('/homeMahasiswa'));
                }else{
                    return redirect()->to(base_url('/homeDosen'));
                }
            } else {
                session()->setFlashdata('error', 'Email & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Email & Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
    session()->destroy();
    return redirect()->to('/login');
    }
}