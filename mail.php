<?php
/**
 * Contact Form Mail Handler
 * Techno Engineering Pvt. Ltd.
 * Uses PHPMailer with SMTP (Gmail)
 */

// Load Composer autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Set response header
header('Content-Type: application/json');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data and sanitize
    $name = isset($_POST['contact-name']) ? htmlspecialchars(trim($_POST['contact-name'])) : '';
    $phone = isset($_POST['contact-phone']) ? htmlspecialchars(trim($_POST['contact-phone'])) : '';
    $email = isset($_POST['contact-email']) ? htmlspecialchars(trim($_POST['contact-email'])) : '';
    $message = isset($_POST['contact-message']) ? htmlspecialchars(trim($_POST['contact-message'])) : '';
    $formType = isset($_POST['form_type']) ? htmlspecialchars(trim($_POST['form_type'])) : 'contact';
    
    // Get checkboxes
    $helpType = [];
    if (isset($_POST['individual'])) $helpType[] = 'Individual';
    if (isset($_POST['residentials'])) $helpType[] = 'Residential';
    if (isset($_POST['commercial'])) $helpType[] = 'Commercial';
    $helpTypeStr = !empty($helpType) ? implode(', ', $helpType) : 'Not specified';
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode([
            'success' => false,
            'message' => 'Please fill all required fields.'
        ]);
        exit;
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'success' => false,
            'message' => 'Please enter a valid email address.'
        ]);
        exit;
    }
    
    // Create PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // =============================================
        // SMTP CONFIGURATION - UPDATE THESE SETTINGS
        // =============================================
        
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';           // Gmail SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'kartikpaul366@gmail.com';     // ⚠️ CHANGE THIS: Your Gmail address
        $mail->Password   = 'ehedbemvpfksszqx';        // ⚠️ CHANGE THIS: Gmail App Password (NOT your regular password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        // =============================================
        // EMAIL SETTINGS
        // =============================================
        
        // Recipients
        $mail->setFrom('kartikpaul366@gmail.com', 'Techno Engineering Website');  // ⚠️ CHANGE THIS
        $mail->addAddress('kartikpaul366@gmail.com', 'Kartik Paul');            // Main recipient
        $mail->addReplyTo($email, $name);                                       // Reply to the sender
        
        // Email content
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        
        // Set subject based on form type
        if ($formType === 'quote') {
            $mail->Subject = "New Quote Request from $name - Techno Engineering";
            $formTitle = "Quote Request";
        } else {
            $mail->Subject = "New Contact Form Inquiry from $name - Techno Engineering";
            $formTitle = "Contact Form Submission";
        }
        
        // HTML Email Body
        $mail->Body = "
        <html>
        <head>
            <meta charset='UTF-8'>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: #ed3237; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
                .content { background: #f9f9f9; padding: 30px; border: 1px solid #ddd; }
                .field { margin-bottom: 15px; padding: 10px; background: white; border-radius: 5px; }
                .label { font-weight: bold; color: #ed3237; }
                .footer { background: #333; color: white; padding: 15px; text-align: center; border-radius: 0 0 8px 8px; font-size: 12px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>$formTitle</h2>
                    <p>Techno Engineering Pvt. Ltd.</p>
                </div>
                <div class='content'>
                    <div class='field'>
                        <span class='label'>Name:</span><br>
                        $name
                    </div>
                    <div class='field'>
                        <span class='label'>Phone:</span><br>
                        " . ($phone ? $phone : 'Not provided') . "
                    </div>
                    <div class='field'>
                        <span class='label'>Email:</span><br>
                        <a href='mailto:$email'>$email</a>
                    </div>
                    <div class='field'>
                        <span class='label'>Message:</span><br>
                        " . nl2br($message) . "
                    </div>
                </div>
                <div class='footer'>
                    <p>This email was sent from the contact form on technoengineering.acsinsights.in</p>
                    <p>© " . date('Y') . " Techno Engineering Pvt. Ltd.</p>
                </div>
            </div>
        </body>
        </html>
        ";
        
        // Plain text version for non-HTML email clients
        $mail->AltBody = "
New Contact Form Submission - Techno Engineering

Name: $name
Phone: " . ($phone ? $phone : 'Not provided') . "
Email: $email
Service Type: $helpTypeStr

Message:
$message

---
Sent from technoengineering.acsinsights.in
        ";
        
        // Send the email
        $mail->send();
        
        echo json_encode([
            'success' => true,
            'message' => 'Thank you! Your message has been sent successfully. We will contact you soon.'
        ]);
        
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'message' => "Sorry, there was an error sending your message. Please try again later or contact us directly at +91 98337 71515."
        ]);
        
        // Log error for debugging (optional - comment out in production)
        error_log("Mail Error: " . $mail->ErrorInfo);
    }
    
} else {
    // Not a POST request
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method.'
    ]);
}
?>