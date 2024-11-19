<?php
    include 'components/connect.php';

    if (isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id = '';
    }

    //sending message

    if (isset($_POST['send_message'])) {
        if ($user_id != '') {
            // Fetch user name and email from the database
            $fetch_user_details = $conn->prepare("SELECT name, email FROM `users` WHERE id = ?");
            $fetch_user_details->execute([$user_id]);
            $user = $fetch_user_details->fetch(PDO::FETCH_ASSOC);
    
            if ($user) {
                $name = $user['name'];  // Get the user's name
                $email = $user['email']; // Get the user's email
    
                // Sanitize the other inputs
                $subject = $_POST['subject'];
                $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    
                $message = $_POST['message'];
                $message = filter_var($message, FILTER_SANITIZE_STRING);
    
                // Check if the message already exists
                $verify_message = $conn->prepare("SELECT * FROM `message` WHERE user_id = ? AND email = ? AND subject = ? AND message = ?");
                $verify_message->execute([$user_id, $email, $subject, $message]);
    
                if ($verify_message->rowCount() > 0) {
                    $warning_msg[] = 'Message already exists.';
                } else {
                    // Insert the new message
                    $insert_message = $conn->prepare("INSERT INTO `message` (user_id, name, email, subject, message) VALUES(?,?,?,?,?)");
                    $insert_message->execute([$user_id, $name, $email, $subject, $message]);
    
                    $success_msg[] = 'Message inserted successfully';
                }
            } else {
                $warning_msg[] = 'User not found.';
            }
        } else {
            $warning_msg[] = 'Please login first.';
        }
    }
    
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Figuras D' Arte - Contact Us Page</title>
        <link rel="stylesheet" type="text/css" href="css/user_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
    </head>
    <body>
        <?php include 'components/user_header.php'; ?>
        <div class="services">
            <div class="heading">
                <h1>Our Services</h1>
                <p>Just a few clicks to make the reservation online for saving your time and money</p>
                <img src="image/separator-img.png">
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="image/logo.png">
                    <div>
                        <h1>Free shipping fast</h1>
                        <p>fsfsdfgsfd</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/logo.png">
                    <div>
                        <h1>Money back & guarantee</h1>
                        <p>fsfsdfgsfd</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/logo.png">
                    <div>
                        <h1>Online support 24/7</h1>
                        <p>fsfsdfgsfd</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-container">
            <div class="heading">
                <h1>Contact Us</h1>
                <p>Tell us why you want to be a seller!</p>
                <img src="image/separator-img.png">
            </div>
            <form action="" method="post" class="register">
                <div class="input-field">
                    <label>Subject <sup>*</sup></label>
                    <input type="text" name="subject" required placeholder="Subject" class="box">
                </div>
                <div class="input-field">
                    <label>Comment <sup>*</sup></label>
                    <textarea name="message" cols="30" rows="10" required placeholder="" class="box"></textarea>
                </div>
                <button type="submit" name="send_message" class="btn">Send Message</button>
            </form>
        </div>

        <div class="address">
            <div class="heading">
                <h1>Our Contact Details</h1>
                <p>Wowowowow</p>
                <img src="image/separator-img.png">
            </div>
            <div class="box-container">
                <div class="box">
                    <i class="bx bxs-map-alt"></i>
                    <div>
                        <h1>Address</h1>
                        <p>Bacolod City</p>
                    </div>
                </div>
                <div class="box">
                    <i class="bx bxs-phone-incoming"></i>
                    <div>
                        <h1>Phone Number</h1>
                        <p>09563229521</p>
                        <p>09494124721</p>
                    </div>
                </div>
                <div class="box">
                    <i class="bx bxs-envelope"></i>
                    <div>
                        <h1>Email</h1>
                        <p>s2121441@usls.edu.ph</p>
                        <p>s2121441@usls.edu.ph</p>
                    </div>
                </div>
            </div>
        </div>
        

        <?php include 'components/footer.php'; ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="js/user_script.js"></script>
        <?php include 'components/alert.php'; ?>
    </body>
</html>