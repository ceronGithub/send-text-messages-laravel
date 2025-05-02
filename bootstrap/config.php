<?php
return array (
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => '587',
    'from' =>
    array (
      'address' => 'xxxxxxxx@gmail.com',
      'name' => 'xxxxxxxx',
    ),
    'encryption' => 'tls',
    'username' => NULL,
    'password' => NULL,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' =>
    array (
      'theme' => 'default',
      'paths' =>
      array (
        0 => '/var/www/html/resources/views/vendor/mail',
      ),
    ),
);
?>