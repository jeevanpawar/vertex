 <?php
              $me =$_SERVER['REQUEST_METHOD'];
              if ($_POST['mail']=='' && $me =="POST") {
                  $me="";
                  $em="*";
                  $name =stripslashes($_POST['f1']);
				  $email =stripslashes($_POST['f2']);
				  $companyname =stripslashes($_POST['f3']);
				   $email =stripslashes($_POST['f4']);
                  $telephone =stripslashes($_POST['f5']);
                
                /*$enquiry =stripslashes($_POST['enquiry']);
                  $message =stripslashes($_POST['message']);*/
              }
            if ($me != 'POST' ){}
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>

</body>

</html>