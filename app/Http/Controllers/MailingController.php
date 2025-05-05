<?php

namespace App\Http\Controllers;

use App\Mail\TrialMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Str;

class MailingController extends Controller
{
    //
    public function storeSMTP(Request $request)
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
            $envContent[29] = "\r\n";      
            $envContent[30] = "MAIL_MAILER=smtp\r\n";
            $envContent[31] = "MAIL_HOST=smtp.gmail.com\r\n";
            $envContent[32] = "MAIL_PORT=587\r\n";            
            $envContent[33] = "MAIL_USERNAME=" . addslashes($request->email) . "\r\n";
            $envContent[34] = "MAIL_PASSWORD=" . addslashes(str_replace(' ', '', $request->appsPasscode)). "\r\n"; 
            $envContent[35] = "MAIL_ENCRYPTION=tls\r\n"; 
            $envContent[36] = "MAIL_FROM_ADDRESS=VictoriaHaven@gmail.com\r\n";
            $envContent[37] = "MAIL_FROM_NAME=VictoriaHaven\r\n";
            $envContent[38] = "\r\n";
        }        
         // Write the updated .env file
        // dd($envContent);
        file_put_contents($envFile, implode('', $envContent));        
        Mail::to($request->email)->send(new TrialMail());      
        return redirect()->back();
    }
}
