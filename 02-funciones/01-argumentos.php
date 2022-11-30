<?php

class MessageConfig
{
    public $title;

    public $subtitle;

    public $message;

    public $email;

    public $important = false;
}

function createMessage(MessageConfig $messageConfig)
{
    // Aqui va el codigo
    var_dump($messageConfig->title);
}

$config = new MessageConfig();

$config->title = "rtneunartoe";
$config->subtitle = "rutenanrueruaortnsu eaousaoernurtno";
$config->message = "rtuaeorstnu raurtaoeurtntao uraoru oeau teo sartnuse rtoartuetaorur taos tn";
$config->email = "rtueaont@mail.com";
$config->important = true;

createMessage($config);

