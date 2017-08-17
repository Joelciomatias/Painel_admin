<?php

if (isset($Post['EfetuarLogin'])):
    $_SESSION['login']['user_email'] = $Post['user_email'];
    $_SESSION['login']['user_senha'] = $Post['user_senha'];
    header('Location:' . BASE);
endif;