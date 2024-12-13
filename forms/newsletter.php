<?php
  $receiving_email_address = 'thuanthien6368@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Không thể tải thư viện "Mẫu email PHP"');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['email'];
  $contact->from_email = $_POST['email'];
  $contact->subject ="New Subscription: " . $_POST['email'];

  $contact->add_message( $_POST['email'], 'Email');

  echo $contact->send();
?>
