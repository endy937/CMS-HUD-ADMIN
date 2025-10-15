<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  protected $userService;

  public function __construct(UserService $userService)
  {
    $this->userService = $userService;
  }

  public function index()
  {
    $users = $this->userService->getAllUsers();
    return view('dashboard.pages.management.users.index', compact('users'));
  }

  public function account($id)
  {
    $user = $this->userService->getUserById($id);
    return view('dashboard.pages.management.users.account', compact('user'));
  }


  public function create()
  {
    return view('dashboard.pages.management.users.create');
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'username' => 'required|string|max:255',
      'name' => 'required|string|max:255',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|string|min:6|confirmed',
    ]);

    $data['password'] = bcrypt($data['password']);
    try {
      $this->userService->createUser($data);
      return redirect()
        ->route('dashboard.users.index')
        ->with('success', 'User has been created successfully!');
    } catch (\Exception $e) {
      return back()->withErrors(['error' => 'Failed to create user: ' . $e->getMessage()]);
    }
  }

  public function edit($id)
  {
    $user = $this->userService->getUserById($id);
    return view('dashboard.pages.management.users.edit', compact('user'));
  }

  public function update(Request $request, $id)
  {
    $data = $request->validate([
      'username' => 'required|string|max:255',
      'name' => 'required|string|max:255',
      'email' => 'required|email|unique:users,email,' . $id,
      'password' => 'nullable|string|min:6|confirmed',
    ]);

    if (empty($data['password'])) {
      unset($data['password']);
    } else {
      $data['password'] = bcrypt($data['password']);
    }

    $this->userService->updateUser($id, $data);

    return redirect()->route('dashboard.users.index')->with('success', 'User updated successfully.');
  }

  public function destroy($id)
  {
    $this->userService->deleteUser($id);
    return redirect()->route('dashboard.users.index')->with('success', 'User deleted successfully.');
  }
}
