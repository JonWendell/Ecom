<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            // Validate the input data
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]',
            ];

            if ($this->validate($rules)) {
                $userModel = new UserModel();
                $user = $userModel->where('email', $this->request->getPost('email'))->first();

                if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
                    // Store user data in session
                    $session = session();
                    $session->set('user_id', $user['id']);

                    // Redirect to a protected page or perform any other action
                    return redirect()->to('/product');
                } else {
                    $data['validation'] = 'Invalid email or password';
                }
            }
        }


        return view('login', $data);
    }
    public function logout()
{
// Destroy the user session to log out
$session = session();
$session->remove('user_id');

// Redirect to the login page or any other desired page
return redirect()->to('/login');
}
}