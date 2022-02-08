<?php
include('../config.php');
require_once("../app.php");


if($request->postHas('submit'))
{
    $from = $_GET['id'];
    $to = $request->post('to');
    $amount = $request->post('amount');

    // $sql = "SELECT * from users where id=$from";
    // $query = mysqli_query($conn,$sql);
    // $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.
    $sql1=$user->selectId($from);
    // $sql = "SELECT * from users where id=$to";
    // $query = mysqli_query($conn,$sql);
    // $sql2 = mysqli_fetch_array($query);
    $sql2=$user->selectId($from);




    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        // echo '<script type="text/javascript">';
        // echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        // echo '</script>';
        $session->set('error',' Negative values cannot be transferred');
        header("location:../Transfer-history.php");
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='../Transfer-history.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}

?>
