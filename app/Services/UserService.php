<?php

namespace App\Services;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserService {
    // Mengambil semua daftar User yang ada
    public function getAllUsers()
    {
        return User::all();
    }

    // Mengambil data user berdasarkan id
    public function getUserById($id)
    {
        $user = User::find($id);
        if (!$user) {
            throw new Exception('User not found');
        }
        return $user;
    }

    // Membuat data User baru
    public function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        if(!$user){
            throw new Exception('Failed to create User data');
        }
        return $user;
    }

    // Edit detail User
    public function updateUser($id, array $data)
    {
        $user = User::find($id);
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        $result = $user->update($data);
        if(!$result) {
            throw new Exception("Error Processing Request", 1);
        }
        return $user;
    }

    // Menghapus User
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
    }
}

?>
