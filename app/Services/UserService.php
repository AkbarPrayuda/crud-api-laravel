<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService {
    // Mengambil semua daftar User yang ada
    public function getAllUser()
    {
        return User::all();
    }

    // Mengambil data user berdasarkan id
    public function getUserById($id)
    {
        return User::findOrFail($id);
    }

    // Membuat data User baru
    public function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }

    // Edit detail User
    public function updateUser(User $user, array $data)
    {
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        $user->update($data);
        return $user;
    }

    // Menghapus User
    public function deleteUser(User $user)
    {
        $user->delete();
    }
}

?>
