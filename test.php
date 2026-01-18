<?php
require_once 'config/smtp.php';

$mail = smtp_mailer('pinkysahaniups1999@gmail.com','Test Email','SMTP is working perfectly 🚀');

if ($mail) {
    echo "Mail Sent";
} else {
    echo "Mail Failed";
}
