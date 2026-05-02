<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        // Jika sudah login, redirect ke admin
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin');
        }

        $data = [
            'title' => 'Login Admin - MagangHub'
        ];
        return view('auth/login', $data);
    }

    public function process()
    {
        // Data statis admin (Hardcoded)
        $valid_username = 'admin';
        $valid_password = 'password123'; // Dalam prakteknya, gunakan hashing

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username === $valid_username && $password === $valid_password) {
            // Set session
            $sessionData = [
                'username' => $username,
                'role' => 'admin',
                'isLoggedIn' => true
            ];
            session()->set($sessionData);
            return redirect()->to('/admin')->with('success', 'Login berhasil!');
        } else {
            return redirect()->back()->with('error', 'Username atau Password salah!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Berhasil logout!');
    }
}
