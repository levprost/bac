<?php

namespace App\Http\Controllers\Api;

use App\Models\Bac;
use App\Models\User; 
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 


class UserController extends Controller

{
    protected $user;
    public function __construct(User $user) 
    { 
        $this->user = $user; 
    } 
 
    public function currentUser()  
    { 
        $bacData = Bac::where('user_id', auth()->user()->id)->get();
        return response()->json([ 
            'meta' => [ 
                'code' => 200, 
                'status' => 'success', 
                'message' => 'User fetched successfully!', 
            ], 
            'data' => [ 
                'user' => auth()->user(), 
                'bac' => $bacData,
            ], 
        ]); 
    } 
}

