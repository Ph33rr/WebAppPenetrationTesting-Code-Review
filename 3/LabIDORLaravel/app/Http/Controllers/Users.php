<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Users extends Controller
{
 public function idUser($id) {
	 switch ($id) {
    case 1:
        return view('profile',['Fullname' => 'Abdulrahman',
             'Email' => 'null@null.0x00',
             'Phone' => '0123456789',
             'Address' => 'none',
             'Job' => 'hack everthing',
             'Website' => '127.0.0.1',
             'Github' => 'Ph33rr',
             'Twitter' => '@infosec_90']);
         case 2:
        return view('profile',['Fullname' => 'User2 User2',
            'Email' => 'User2@User2.user2',
            'Phone' => '000000000000',
            'Address' => 'Wolrd',
            'Job' => 'Web Dev',
            'Website' => 'User2.com',
            'Github' => 'User2',
            'Twitter' => 'User2',
            'name' => 'User2']);
         case 3:
        echo view('profile',['Fullname' => 'User3 User3',
            'Email' => 'User3@User3.user3',
            'Phone' => '000000000000',
            'Address' => 'Wolrd',
            'Job' => 'Web Dev',
            'Website' => 'User3.com',
            'Github' => 'User3',
            'Twitter' => 'User3',
            'name' => 'User3']);
     case 4:
        echo view('profile',['Fullname' => 'User4 User4',
            'Email' => 'User4@User4.user4',
            'Phone' => '000000000000',
            'Address' => 'Wolrd',
            'Job' => 'Web Dev',
            'Website' => 'User4.com',
            'Github' => 'User4',
            'Twitter' => 'User4',
            'name' => 'User4']);
	case 5:
        echo view('profile',['Fullname' => 'User5 User5',
            'Email' => 'User5@User5.user5',
            'Phone' => '000000000000',
            'Address' => 'Wolrd',
            'Job' => 'Web Dev',
            'Website' => 'User5.com',
            'Github' => 'User5',
            'Twitter' => 'User5',
            'name' => 'User5']);
	default;
        echo "User ID Not Found";
        break;
}
     return redirect('/user/1');;
    }
	 public function iUser() {
        return view('profile');
    }
}
