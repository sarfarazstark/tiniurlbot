<?php
//=========BOT TOKEN==========//
$BOT_TOKEN = $_ENV['BOT_TOKEN'];

//=========BOT USERNAME======//
$BOT_USERNAME = $_ENV['BOT_USERNAME'];

//=========GPLINKS API KEY=========//
$GP_API_KEY = $_ENV['GP_API_KEY'];

//===========LINK GENERATED MESSAGE=========//
$GENERATED = $_ENV["LINK_GENERATED_MESSAGE"] = <<<EOM
Thank you for using me☺

HERE IS YOUR SHORTEN <a href="$link">LINK</a>

EOM;
?>
