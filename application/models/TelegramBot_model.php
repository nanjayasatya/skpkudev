<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TelegramBot_model extends CI_Model
{

    public function SendTelegramMSGSKP($msg)
    {
        $telegrambot = '1700008665:AAHQZqPIsJWdrGIMtwn8MqgdjWmwMDDw8Qs';
        $telegramchatid = '-1001200886432';
        $parse_mode = 'html';
        $url = 'https://api.telegram.org/bot' . $telegrambot . '/sendMessage';
        $data = array('chat_id' => $telegramchatid, 'text' => $msg, 'parse_mode' => $parse_mode);
        $options = array('http' => array('method' => 'POST', 'header' => "Content-Type:application/x-www-form-urlencoded\r\n", 'content' => http_build_query($data),),);
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result;
    }

    public function SendTelegramMSGDEV($msg)
    {
        $telegrambot = '1613376774:AAEGoSGHg8KjoNuRV35si9S4oG58jyashL8';
        $telegramchatid = '-1001293697082';
        $parse_mode = 'html';
        $url = 'https://api.telegram.org/bot' . $telegrambot . '/sendMessage';
        $data = array('chat_id' => $telegramchatid, 'text' => $msg, 'parse_mode' => $parse_mode);
        $options = array('http' => array('method' => 'POST', 'header' => "Content-Type:application/x-www-form-urlencoded\r\n", 'content' => http_build_query($data),),);
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result;
    }
}
