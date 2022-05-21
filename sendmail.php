<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.14/dist/sweetalert2.all.min.js"></script>
<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['sendmail'])){
        //Load Composer's autoloader
        require 'vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        $yname = $_POST['yname'];
        $ymail = $_POST['yemail'];
        $ysubj = $_POST['ysubj'];
        $ymessage = $_POST['ymessage'];

        try{
            //setup server
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'confessnow.contact@gmail.com';
            $mail->Password = 'secret012345';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
    
            //for recipients
            $mail->setFrom('confessnow.contact@gmail.com','testEmail');
            $mail->addAddress('ebradalanzfrealyn_bscs@plmun.edu.ph');
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
        
            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
            //for email content
            $mail->isHTML(true);
            $mail->Subject = $ysubj;
            $mail->Body = $ymessage;
    
            $mail->send();
            ?>
            <script>
                Swal.fire({
                    title: 'Email Sent!',
                    text: 'Your message has been sent successfully!',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 3500
                })
                setTimeout(function(){
                location.href = "http://localhost/phpmailer/";
                }, 3000);
            </script>
            <?php
            //echo '<script>YOUR MESSAGE HAS BEEN SENT!</script>';
        }catch(Exception $e){
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }