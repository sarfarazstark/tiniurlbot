<?php
////////BENCHAMIN LOUIS//////
//CHANNEL:- T.ME/INDUSBOTS////
error_reporting(0);

set_time_limit(0);

flush();
$API_KEY = '1460906177:AAH147O-HnHcxR8AEnNRezSfyj47jJlwdrw'; //Your token
##------------------------------##
define('API_KEY',$API_KEY);
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
	function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
function Forward($KojaShe, $AzKoja, $KodomMSG)
{
    bot('ForwardMessage', [
        'chat_id' => $KojaShe,
        'from_chat_id' => $AzKoja,
        'message_id' => $KodomMSG
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
$fromid = $update->callback_query->from->id;
$username = $update->message->from->username;
$chatid = $update->callback_query->message->chat->id;
$callback_query = $update->callback_query->data;
$messageid = $update->callback_query->message->message_id;
$reply = $update->message->reply_to_message->message_id;
  $date = date("d/m/y");
$AdminID = 1222113933; //admin user id get it from @MissRose_bot 
 $logchnl = -1001298083207;
 $jk = -1001237862679;
//===============BENCHAM=============//
$tch = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@V3bots&user_id=".$from_id))->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
bot('sendMessage',['chat_id'=>$from_id,'text'=>"***Hey Dude,

You need to Join my Upate Channel to use me.***",
'parse_mode'=>"MarkDown",
]);
}Else{
if ($text == "/start") 

            bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"***Hey $name,

Just send me a url to shorten.***",
 'parse_mode'=>'MarkDown',
            'reply_markup' =>  json_encode([
                'inline_keyboard' => [
                    
                        [['text' => "OUR CHANNEL",'url'=>"https://telegram.me/V3bots"]
                    ],

                    
    ]
])
        ]);

 }
if($text !== '/start'){

$get = json_decode(file_get_contents("https://gplinks.in/api?api=dd5bcb86437fb6e05e1a2f7797c26caddb4f92a5&url=amazon.com"),true);
$short = $get['shortenedUrl'];

if($get['shortenedUrl']){
bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text'=>"SHORTENED URL:- $short",
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
