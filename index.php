<?php
ob_start();
define('API_KEY','CHANGE_THIS');

function onyx($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

// Fetching UPDATE
$update = json_decode(file_get_contents('php://input'));

$callbackq = $update->callback_query;
$callbackqid = $update->callback_query->id;

if(isset($update->callback_query)){
    $callbackMessage = 'شما یک ذکر گفتید';
    var_dump(onyx('answerCallbackQuery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>$callbackMessage
    ]));
  
    $chat_id = $update->callback_query->message->chat->id;
    $message_id = $update->callback_query->message->message_id;
    $salavat = $update->callback_query->data +1;
    $salavatback = $update->callback_query->data -1;
  
    var_dump(
        onyx('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"شما تا کنون $salavat ذکر بجا آورده اید📿",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [
                    ['text'=>"📿ذکر بفرست📿 ($salavat)",'callback_data'=>"$salavat"]
                ],[
                    ['text'=>"📿یکی زیاد شد📿 ($salavat)",'callback_data'=>"$salavatback"]
                ],[
                    ['text'=>"📿سورس ربات📿",'url'=>'https://netparadis.com/salavat-shomar-telegram-bot-source-php']
                ]
                ]
            ])
        ])
    );
  

}else{
    var_dump(onyx('sendMessage',[
        'chat_id'=>$update->message->chat->id,
                  'text'=>"برای فرستادن ذکر یکی از دکمه های زیر را انتخاب کنید📿

",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [
                    ['text'=>"📿ذکر بفرست📿",'callback_data'=>"1"]
                ],[
                ]
            ]
        ])
    ]));
}  



file_put_contents('log',ob_get_clean());
