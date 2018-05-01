<?php

require('config.php');

require_once('data.php');

require_once 'funcs.php';

if ($config['enable']) {
  $content = require_once($config['tpl_path'] . 'main.php');
}
else {
  $error_msg = "Сайт на техническом обслуживании";
  $content = require_once($config['tpl_path'] . 'off.php');
}
