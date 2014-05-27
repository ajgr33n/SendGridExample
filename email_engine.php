<?php
    
    require 'sendgrid-php/sendgrid-php.php';

    $from = $_POST['from'];
    alert($from);
    $from_name = $_POST['from_name'];
    $to = $_POST['to']; 
    $reply_to = $_POST['reply_to'];
    $subject = $_POST['subject'];
    $html = $_POST['html']; 

    $sendgrid = new SendGrid('ajgr33n', 'Letmein1');
                $email = new SendGrid\Email();
                $email->addTo( $to )->
                        setFrom( $from )->
                        setFromName( $from_name )->
                        setReplyTo( $reply_to )->
                        setSubject( $subject )->
                        setHtml( $html );

                $response = $sendgrid->send($email);


            ?>

