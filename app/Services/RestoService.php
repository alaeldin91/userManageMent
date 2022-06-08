<?php
namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
class RestroService{
    public function UserRestoAndTable(){
        return Auth::user()->resturants();
    }

}


?>