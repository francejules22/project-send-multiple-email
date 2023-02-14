<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap Extension-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <title>Multiple Email Sender</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto bg-white border p-5">
                <h2 class="text-center fw-bold text-dark mb-3">Email Sender</h2>
            <!--Adding Successful Message -->
                 <?php 
                     if(isset($_GET["status"]) && $_GET["status"] == "1") { ?>
                        <div class="alert alert-success">Email Sent Successfully</div>
                  <?php } ?>
                  
            <!--Form Action with POST Method-->
            <!--Using POST Method (the sender name will not showed in url and it is hidden)-->
                <form action="send.php" method="post" enctype="multipart/form-data">
                    <div class="row">

                    <!--First Input for Sender Name-->
                         <div class="col-6 mb-3">
                            <label for="sender_name" class="form-label">Sender Name</label>
                            <input type="text" class="form-control" id="sender_name" name="sender_name" placeholder="Sender Name"  required>
                         </div>

                    <!--Second Input for Sender Email-->
                         <div class="col-6 mb-3">
                            <label for="sender_email" class="form-label">Sender Email</label>
                            <input type="email" class="form-control" id="sender" name="sender" placeholder="Sender Email" required>
                         </div>

                    <!--Third Input for Message-->
                         <div class="col-6 mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" required>
                         </div>

                    <!--Fourth Input for Files(png, jpeg, videos)-->
                         <div class="col-5">
                            <label for="attachments" class="form-label">Attachments (Multiple)</label>
                            <input type="file" class="form-control" multiple id="attachments" name="attachments[]" placeholder="Input Files" required>
                         </div>
                    </div>
                        
                    <!--Fifth Input for Recipient Emails-->
                        <div class="mb-3">
                            <label for="recipient" class="form-label">Recipient Emails</label>
                            <textarea class="form-control" id="recipient" name="recipient" placeholder="Insert Multiple Emails" rows="3" required>
                            </textarea>
                        </div>
                        
                    <!--Six Input for Body-->
                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea class="form-control" id="body" name="body" placeholder="Enter a message" rows="5" required>
                            </textarea>
                        </div>

                    <!--Buttons-->
                        <div class="button-box">
                            <button class="btn btn-primary me-2" name="send" type="submit">Send Email</button>
                            <button class="btn btn-danger" name="reset" type="reset">Reset Form</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>