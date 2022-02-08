<?php

require_once("../app.php");

if($request->postHas('submit'))
{
    // $name=$request->post('name');
    // $email=$request->post('email');
    // $balance=$request->post('balance');
    $name = filter_var($request->post('name'), FILTER_SANITIZE_STRING );
    $email = filter_var($request->post('email'), FILTER_SANITIZE_EMAIL );
    $balance = filter_var($request->post('balance'), FILTER_SANITIZE_STRING );
   

    // if($validator->hasError()){
        // $session->set('errors',$validator->getError());
        
    // }else{
        if($name && $email &&$balance){
            
            $user->insert("name,email,balance","'$name','$email','$balance'");
            $session->set('success','Customer Added Successfully');
            header("location:../All-Customers.php");
        }else{
            $session->set('error','yous should write all field');
            header("location:../add-customer.php");
        }

    // }


// }else{
    


}