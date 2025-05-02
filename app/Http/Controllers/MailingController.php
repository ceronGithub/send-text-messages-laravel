<?php

namespace App\Http\Controllers;

use App\Mail\TrialMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Str;

class MailingController extends Controller
{
    //
    public function store(Request $request)
    {
        // dd($request->all());
        // putenv("MAIL_USERNAME=$request->email");
        // putenv("MAIL_PASSWORD=$request->appsPasscode");
        // putenv("bootstrap.config.username=$request->email");
        // config('mail.username', $request->email);
        // config('mail.password', $request->appsPasscode);                    
        $envFile = base_path('.env');

        // Read the existing .env file into an array
        $envContent = file($envFile);

        foreach ($envContent as $key => $line){
            $envContent[34] = "MAIL_USERNAME=" . addslashes($request->email) . "\n";
            $envContent[35] = "MAIL_PASSWORD=" . addslashes(str_replace(' ', '', $request->appsPasscode)). "\n"; 
            $envContent[37] = "MAIL_ADDRESS=VictoriaHaven@gmail.com\n";
            $envContent[38] = "MAIL_NAME=VictoriaHaven\n";
        }        
         // Write the updated .env file
        file_put_contents($envFile, implode('', $envContent));        
        Mail::to($request->email)->send(new TrialMail());      
        return redirect()->back();
    }
}
