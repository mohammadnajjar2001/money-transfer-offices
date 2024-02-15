<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
                $users = User::all();
        
                foreach ($users as $user) {
                    if (strpos($user->email, '@admin.com') !== false) {
                        // إذا كان البريد يحتوي على '@admin.com'، قم بتحديث الدور إلى 'admin'
                        $user->role_id = 'admin';
                    } 
                    else if(strpos($user->email, '@super.com') !== false) {
                        // إذا كان البريد يحتوي على '@super.com'، قم بتحديث الدور إلى 'admin'
                        $user->role_id = 'super';
                    } 
                    else {
                        // إذا كان البريد لا يحتوي على '@admin.com'، قم بتحديث الدور إلى القيمة الباقية (مثل 'user')
                        $user->role_id = 'user';
                    }
        
                    $user->save();
                }
        
            
            return view('home');
        }
    
    }
