<?php

use Illuminate\Http\Request;
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

function userExists($email)
{
    $repeatedEmails = DB::select('select email from users where email = :email', ['email' => $email]);

    if (!empty($repeatedEmails)) {
        return true;
    }

    return false;
}

Route::get('/', function (Request $request) {

    if ($request->session()->has("userName")) {
        return view("kendoVersion.loggedIn", ["name" => $request->session()->get("userName")]);
    }
    return view('kendoVersion.login');
});

Route::get('jsonTest', function (Request $request) {

    $alreadyExists = true;
    return response()->json([
        'exists' => $alreadyExists,
    ]);
});



Route::get('emailExists', function (Request $request) {

    $alreadyExists = userExists($request->input('email'));
    return response()->json([
        'exists' => $alreadyExists,
    ]);
});

Route::get('logout', function (Request $request) {
    if ($request->session()->has("userName") and $request->session()->has("email")) {
        $request->session()->remove("userName");
        $request->session()->remove("email");
    }
    return redirect("/");
});


Route::post('ajaxLogin', function (Request $request) {

    if ($request->session()->has("userName")) {
        return view("loggedIn", ["userName" => $request->session()->get("useName")]);
    }
    $user = DB::select('select name from users where email=? and password=?', [
        $request->input('email'),
        $request->input('password')
    ]);


    if (!empty($user)) {
        $request->session()->put("email", $request->input("email"));
        $request->session()->put("userName", $user[0]->name);
        return response()->json(['response' => 'success']);
    }
    return response()->json(["response" => "error"]);
});


Route::get('passwordRecovery', function (Request $request) {
    if ($request->session()->has("userName")) {
        return view("kendoVersion.loggedIn", ["name" => $request->session()->get("userName")]);
    }
    return view("kendoVersion.passwordRecovery");
});
Route::get('loginView', function (Request $request) {
    if ($request->session()->has("userName")) {
        return view("kendoVersion.loggedIn", ["name" => $request->session()->get("userName")]);
    }
    return view("kendoVersion.login");
});

Route::get('register', function (Request $request) {
    if ($request->session()->has("userName")) {
        return view("kendoVersion.loggedIn", ["name" => $request->session()->get("userName")]);
    }
    return view("kendoVersion.register");
});


Route::post('ajaxRegister', function (Request $request) {
    if (!userExists($request->input("email"))) {
        DB::insert('insert into users (email,name,lastName,password) values (?, ?,?,?)', [
            $request->input('email'), $request->input('name'), $request->input('lastname'), $request->input('password')
        ]);
        return response()->json(["status" => "success"]);
    } else {
        return response()->json(["status" => "error"]);
    }
});

Route::post('requestPasswordRecovery', function (Request $request) {
    $email = $request->input("email");
    $emailExists = DB::select('select * from users where email = ?', [$email]);

    if (!empty($emailExists)) {
        $password = DB::select('select password from users where email=?', [$email])[0]->password;
        Mail::to($email)->send(new MailtrapExample("Elias Segundo", "123"));
    }
    return response()->json(["msg" => "If email exists in our DB youll receive your pass soon (: "]);
});
