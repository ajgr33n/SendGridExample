<?php
    require 'sendgrid-php/sendgrid-php.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Email API Testing</title>
    </head>    
    <body>
            <?php 

                $sendgrid = new SendGrid('ajgr33n', 'Letmein1');
                $email    = new SendGrid\Email();
                $email->addTo('ajgr33n@gmail.com')->
                        setFrom('ajg45@columbia.edu')->
                        setFromName("Adam's College Email")->
                        setReplyTo('adam.green@inbox.com')->
                        setSubject('Test from php files')->
                        setHtml('<b>This is html text</b>');

                $response = $sendgrid->send($email);
								
            ?>

            <h2>Email Log</h2>
            <?php
			
			print_r($sendgrid);
            echo "<br/><br/>";
			var_dump($response);
            ?>
        
    </body>
</html>

