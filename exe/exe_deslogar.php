<?php

if (isset($Post['EfetuarLogoff'])):
    unset($_SESSION['login']);
    header('Location:' . BASE);
endif;