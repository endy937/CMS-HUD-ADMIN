<?php

namespace App\Services;

use App\Interfaces\UserRepositoryInterface;

class UserService
{
  protected $userRepository;

  public function __construct(UserRepositoryInterface $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  // Ambil semua user
  public function getAllUsers()
  {
    return $this->userRepository->getAll();
  }

  // Ambil user berdasarkan ID
  public function getUserById($id)
  {
    return $this->userRepository->getById($id);
  }

  // Buat user baru
  public function createUser(array $data)
  {
    return $this->userRepository->create($data);
  }

  // Update user
  public function updateUser($id, array $data)
  {
    return $this->userRepository->update($id, $data);
  }

  // Hapus user
  public function deleteUser($id)
  {
    return $this->userRepository->delete($id);
  }
}
