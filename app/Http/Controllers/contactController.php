<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function create()
{
    $Contact=Contact::all();
    return view('pub_veiw.contact',compact('Contact'));

    
}

public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect('/contact');
    


        
    }

    public function msgview(){
        $Contact=Contact::all();
        return view('dashboard_veiw.manage_message',compact('Contact'));


    }

    public function destroy(Contact $Contact)
    {
        Contact::findOrFail($Contact->id)->delete();
        return redirect('/dashboard/msg');
    }



}