<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\RegisterController;
    use App\User;
    use App\user1;
    use App\user2;
    use App\user3;
    use App\user4;
    use App\user5;
    use App\user6;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Foundation\Auth\RegistersUsers;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    class RegisterController extends Controller
    {

        public function showUser1RegisterForm()
        {
            return view('auth.register', ['url' => 'user1']);
        }
    
        public function showUser2RegisterForm()
        {
            return view('auth.register', ['url' => 'user2']);
        }

        public function showUser3RegisterForm()
        {
            return view('auth.register', ['url' => 'user3']);
        }
    
        public function showUser4RegisterForm()
        {
            return view('auth.register', ['url' => 'user4']);
        }

        public function showUser5RegisterForm()
        {
            return view('auth.register', ['url' => 'user5']);
        }
    
        public function showUser6RegisterForm()
        {
            return view('auth.register', ['url' => 'user6']);
        }

// create mothods
        protected function createUser1(Request $request)
        {
            $this->validator($request->all())->validate();
            $writer = Writer::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->intended('login/user1');
        }

        protected function createUser2(Request $request)
        {
            $this->validator($request->all())->validate();
            $writer = Writer::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->intended('login/user2');
        }
        protected function createUser3(Request $request)
        {
            $this->validator($request->all())->validate();
            $writer = Writer::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->intended('login/user3');
        }
        protected function createUser4(Request $request)
        {
            $this->validator($request->all())->validate();
            $writer = Writer::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->intended('login/user4');
        }
        protected function createUser5(Request $request)
        {
            $this->validator($request->all())->validate();
            $writer = Writer::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->intended('login/user5');
        }
        protected function createUser6(Request $request)
        {
            $this->validator($request->all())->validate();
            $writer = Writer::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->intended('login/user6');
        }

        public function __construct()
        {
            $this->middleware('guest');
            $this->middleware('guest:user1');
            $this->middleware('guest:user2');
            $this->middleware('guest:user3');
            $this->middleware('guest:user4');
            $this->middleware('guest:user5');
            $this->middleware('guest:user6');

        }


    }