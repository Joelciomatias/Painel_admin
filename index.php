<?php

require 'exe/Exe.inc.php';
require 'inc/Header.inc.php';
if (isset($userlogin)):
    require 'inc/Menu.inc.php';
    if (isset($Get['pag'])):
        require "pag/{$Get['pag']}.php";
    endif;

else:
    require 'pag/login.php';
endif;

require 'inc/Footer.inc.php';
