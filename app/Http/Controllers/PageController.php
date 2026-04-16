<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home()
    {
        $name = "Biniyam";

        return view('home', ['name' => $name]);
    }

    public function about()
    {
        return view('about');
    }

    public function students()
    {
        $students = ["Abel", "Kebede", "Biniyam"];

        return view('students', ['students' => $students]);
    }
    



public function submit(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email'
    ]);

    DB::table('contacts')->insert([
        'name' => $request->name,
        'email' => $request->email
    ]);

    return "Data saved successfully!";
}


public function showContacts()
{
    $contacts = DB::table('contacts')->get();

    return view('contacts', ['contacts' => $contacts]);
}
public function delete($id)
{
    DB::table('contacts')->where('id', $id)->delete();

    return redirect('/contacts');
}

public function edit($id)
{
    $contact = DB::table('contacts')->where('id', $id)->first();

    return view('edit', ['contact' => $contact]);
}
public function update(Request $request, $id)
{
    DB::table('contacts')->where('id', $id)->update([
        'name' => $request->name,
        'email' => $request->email
    ]);

    return redirect('/contacts');
}
public function loginForm()
{
    return view('login');
}

public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (auth()->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/contacts');
    }

    return back()->withErrors(['email' => 'Invalid credentials.']);
}

public function logout(Request $request)
{
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
}
}