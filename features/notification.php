<?php
include_once './email/gmail.php';

 function recieve_confirmation_email_for_register_subjects($email,$first_name){

		$message=" Thank You for  Registration in our website,for conformation click<a href='http://localhost/online_medicine_store/online-medicine-shopping/'>here</a> ";
                        $email_body="Welcome :".$first_name."<br>";
                        $email_body.="<table>";
                      
              
                        $email_body .='<tr>
                    <td>'.$message.'</td>

                    </tr>';
                      
                        $email_body.="</table>";
                        $email_body.="<br><center><font color='blue'><font face='Times New Roman' size='2'><i>© All Copyrights Reserved For <a href='http://localhost/online_medicine_store/online-medicine-shopping/'>media_store</i></font></a></font></center>";
                        $subject="Course Registration";
                        SendEmail($email, $subject, $email_body);
}

?>