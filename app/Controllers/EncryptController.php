<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use function MongoDB\BSON\toJSON;

class EncryptController extends BaseController
{
    public function index()
    {
        return view('encrypt_view.php'); // Vista inicial
    }

    public function encrypt()
    {
        $encrypter = \Config\Services::encrypter();
        $password = $this->request->getPost('password');
        // $encrypted = bin2hex($password);
        $encrypted = bin2hex($encrypter->encrypt($password));

        return view('encrypt_view.php', ['encrypted' => $encrypted]);
    }

    public function decrypt()
    {
        $encryptedPassword = $this->request->getPost('encrypted_password');
        $decrypted = hex2bin($encryptedPassword);

        return view('encrypt_view.php', ['decrypted' => $decrypted]);
    }
}
