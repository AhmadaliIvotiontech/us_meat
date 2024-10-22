<?php
function recoverpass($dz){
    
    $user['to']= $dz['email'];
    // $user['to']= 'zaid@emphatictechnologies.com';
    $password = $dz['password'];
    Mail::send('email_templates/passwordrecover',$dz,function($message) use ($user){
        $message->to($user['to']);
        $message->subject('Password Recovered');
    });
    // dd($dz);
}
