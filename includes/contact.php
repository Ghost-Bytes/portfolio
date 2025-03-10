<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$message = [
    'status' => '',
    'text' => '',
]; // To store success/error messages

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $messageText = htmlspecialchars($_POST['message']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Use your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'williamgivah@gmail.com'; // Your Gmail address
        $mail->Password = 'dtpb hweo tmyp wlmc'; // Use an app password if 2FA is enabled
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Fixed this line
        $mail->Port = 587;

        // Set email headers
        $mail->setFrom($email, $name);
        $mail->addAddress('williamgivah@gmail.com'); // Recipient's email

        // Email content
        $mail->isHTML(false); // Plain text email
        $mail->Subject = $subject;
        $mail->Body = "Name: $name\nEmail: $email\n\nMessage:\n$messageText";

        // Send the email
        if ($mail->send()) {
            $message = [
                'status' => 'success',
                'text' => 'Message sent successfully!'
            ];
        } else {
            $message = [
                'status' => 'error',
                'text' => 'Mailer Error: ' . $mail->ErrorInfo
            ];
        }
    } catch (Exception $e) {
        $message = [
            'status' => 'error',
            'text' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"
        ];
    }
}
?>
<div class="container">
    <div class="section-header">
        <h2>Get In Touch</h2>
        <p>Feel free to reach out to me for any inquiries or opportunities</p>
    </div>
    <div class="contact-container">
        <div class="contact-info">
            <h3>Contact Information</h3>
            <div class="contact-details">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Location</h4>
                        <p><?php echo $personal_info['location']; ?></p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p><?php echo $personal_info['email']; ?></p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h4>Phone</h4>
                        <p><?php echo $personal_info['phone']; ?></p>
                    </div>
                </div>
            </div>
            <div class="social-links">
                <?php foreach ($personal_info['social_links'] as $social): ?>
                <a href="<?php echo $social['url']; ?>" target="_blank" aria-label="<?php echo $social['platform']; ?>">
                    <i class="<?php echo $social['icon']; ?>"></i>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="contact-form-container">
            <!-- Form action points to the same PHP file -->
            <form class="contact-form" action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>

            <!-- Display success or error messages here -->
            <?php if (isset($message)): ?>
                <div class="form-message <?php echo $message['status']; ?>">
                    <?php echo $message['text']; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>