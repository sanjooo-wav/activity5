<?php
namespace App\Http\Controllers;
class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['username'=>'ivofspades','full_name'=>'IV of Spades','role'=>'Manager'],
            ['username'=>'queen','full_name'=>'Queen','role'=>'Cashier'],
            ['username'=>'eraserheads','full_name'=>'Eraserheads','role'=>'Cashier'],
            ['username'=>'thebeatles','full_name'=>'The Beatles','role'=>'Inventory Clerk'],
            ['username'=>'benandben','full_name'=>'Ben&Ben','role'=>'Administrator'],
        ];
        return view('users.index', compact('users'));
    }
}
