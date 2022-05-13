<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        require 'sendmail.php';
        //name, email, subj., your message...
    ?>
    <div class="container">
        <form action="" method="post" class="border">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Your Name<span class="text-danger"> *</span></label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Your Email<span class="text-danger"> *</span></label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Subject</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea" style="height: 150px"></textarea>
                        <label for="floatingTextarea">Your Message</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>