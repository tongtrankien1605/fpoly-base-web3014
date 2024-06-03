<?php

namespace Tongtrankien1605\FpolyBaseWeb3014\Controllers\Admin;

use Tongtrankien1605\FpolyBaseWeb3014\Commons\Controller;
use Tongtrankien1605\FpolyBaseWeb3014\Commons\Helper;
use Tongtrankien1605\FpolyBaseWeb3014\Models\User;

class UserController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {

        [$users, $totalPage] = $this->user->paginate($_GET['page'] ?? 1);

        // $users = $this->user->all();


        // Helper::debug($users);

        $this->renderViewAdmin('users.index', [
            'users' => $users,
            'totalpage' => $totalPage
        ]);



    }

    public function create()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function store()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function show($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function edit($id)
   {
    echo __CLASS__ . '@' . __FUNCTION__;
   } 

   public function update($id)
   {
    echo __CLASS__ . '@' . __FUNCTION__;
   }

   public function delete($id)
   {
    $this->user->delete($id);

    header('Location: ' . url('admin/users'));
    exit();
   }
}
