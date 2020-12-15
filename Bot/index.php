<?php
////////BENCHAMIN LOUIS//////
//CHANNEL:- T.ME/INDUSBOTS////
error_reporting(0);

set_time_limit(0);

flush();
##------------------------------##
define('API_KEY',$BOT_TOKEN);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 function sendmessage($chat_id, $text, $model){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
//==============BENCHAM======================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->id;
$chat_id = $message->chat->id;
$name = $from_id = $message->from->first_name;
$from_id = $message->from->id;
$text = $message->text;
//===============BENCHAM=============//
if($text == "/start") 

            bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"***Hey $name,

Just send me a url to shorten.***",
 'parse_mode'=>'MarkDown',
]);
if($text !== '/start'){

$get = json_decode(file_get_contents("https://gplinks.in/api?api=dd5bcb86437fb6e05e1a2f7797c26caddb4f92a5&url=$text"),true);
$link = $get['shortenedUrl'];

if($get['shortenedUrl']){
bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text'=>"$GENERATED",
   'parse_mode'=>"MarkDown",
]);
   
}else {
bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"<b>PLEASE GIVE ME A VALID URL</b>",
                'parse_mode'=>"HTML",
               
]);
}
}
?>
