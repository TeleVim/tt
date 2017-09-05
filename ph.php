<?php
ob_start();
define('API_KEY','415241877:AAH2e_JwEv3pV6my699xHs-TkskuPQ_QlJQ');
//-----------------------------------------------------------------------------------------
//فانکشن TAKTAZ :
function TAKTAZ($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
	mb_internal_encoding('UTF-8');
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
//-----------------------------------------------------------------------------------------
//متغیر ها :
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$textmassage = $message->text;
$chat_id = $message->chat->id;
mkdir("data/$from_id");
$step= file_get_contents("data/$from_id/file.txt");
$s= file_get_contents("data/$from_id/lvl.txt");
$color= file_get_contents("data/$from_id/color.txt");
$C = "autocrop=on&autocropPadding=66";
mkdir("data/username.txt/$username");
$Dev = 372855231;
$username = $message->from->username;
$txtt = file_get_contents('data/users.txt');
/////////////////////////////
function SendMessage($chat_id, $text){
TAKTAZ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function sendAction($chat_id, $action){
TAKTAZ('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
function Forward($berekoja,$azchejaei,$kodompayam)
{
TAKTAZ('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
function sendphoto($chat_id, $photo, $caption){
 TAKTAZ('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
///////////////////
if($textmassage=="/start"){
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به ربات لوگو ساز خوش امدید🤦🏻‍♂️
لطفا متن های خوتونو به زیان اینگلسی وارد کنید
به به جای فاصله از %20اس تفاده کنید 
مثلا *p%20z*👼🏻",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"SMALL LOGO"],['text'=>"BIG LOGO"]
	],
	[
	['text'=>"GIF"]
	]
	]
	])
	]);
	}
	if($textmassage=="❌"){
	save("data/$from_id/lvl.txt","off");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به ربات لوگو ساز خوش امدید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"SMALL LOGO"],['text'=>"BIG LOGO"]
	],
	[
	['text'=>"GIF"]
	]
	]
	])
	]);
	}
if($textmassage=="SMALL LOGO"){
save("data/$from_id/lvl.txt","on");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"1"],['text'=>"2"],['text'=>"3"]
	],
	[
	['text'=>"4"],['text'=>"5"],['text'=>"6"]
	],
	[
	['text'=>"7"],['text'=>"8"],['text'=>"9"]
	],
	[
	['text'=>"❌"],['text'=>"next▶️"]
	],
	]
	])
	]);
	}
	if($textmassage=="GIF"){
save("data/$from_id/lvl.txt","onnn");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"1"],['text'=>"2"],['text'=>"3"]
	],
	[
	['text'=>"4"],['text'=>"5"],['text'=>"6"]
	],
	[
	['text'=>"7"]
	],
	[
	['text'=>"❌"]
	],
	]
	])
	]);
	}
		if($textmassage=="back🙊"){
save("data/$from_id/lvl.txt","onnn");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"1"],['text'=>"2"],['text'=>"3"]
	],
	[
	['text'=>"4"],['text'=>"5"],['text'=>"6"]
	],
	[
	['text'=>"7"]
	],
	[
	['text'=>"❌"]
	],
	]
	])
	]);
	}
	if($textmassage=="BIG LOGO"){
save("data/$from_id/lvl.txt","onn");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"1"],['text'=>"2"],['text'=>"3"]
	],
	[
	['text'=>"4"],['text'=>"5"],['text'=>"6"]
	],
	[
	['text'=>"7"],['text'=>"8"],['text'=>"9"]
	],
	[
	['text'=>"❌"],['text'=>"next▶️"]
	],
	]
	])
	]);
	}
	if($textmassage=="back"){
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"1"],['text'=>"2"],['text'=>"3"]
	],
	[
	['text'=>"4"],['text'=>"5"],['text'=>"6"]
	],
	[
	['text'=>"7"],['text'=>"8"],['text'=>"9"]
	],
	[
	['text'=>"❌"],['text'=>"next▶️"]
	],
	]
	])
	]);
	}
	if($textmassage=="next▶️"){
save("data/$from_id/lvl.txt","on");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"10"],['text'=>"11"],['text'=>"12"]
	],
	[
	['text'=>"13"],['text'=>"14"],['text'=>"15"]
	],
	[
	['text'=>"16"],['text'=>"17"],['text'=>"18"]
	],
	[
	['text'=>"back"],['text'=>"next🔽"]
	],
	]
	])
	]);
	}
		if($textmassage=="next🔽"){
save("data/$from_id/lvl.txt","on");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"19"],['text'=>"20"],['text'=>"21"]
	],
	[
	['text'=>"22"],['text'=>"23"],['text'=>"24"]
	],
	[
	['text'=>"25"],['text'=>"26"],['text'=>"27"]
	],
	[
	['text'=>"back"],['text'=>"next🔼"]
	],
	]
	])
	]);
	}
			if($textmassage=="next🔼"){
save("data/$from_id/lvl.txt","on");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"28"],['text'=>"29"],['text'=>"30"]
	],
	[
	['text'=>"31"],['text'=>"32"],['text'=>"33"]
	],
	[
	['text'=>"34"],['text'=>"35"],['text'=>"36"]
	],
	[
	['text'=>"back"],['text'=>"next◀️"]
	],
	]
	])
	]);
	}
				if($textmassage=="next◀️"){
save("data/$from_id/lvl.txt","on");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"37"],['text'=>"38"],['text'=>"39"]
	],
	[
	['text'=>"40"],['text'=>"41"],['text'=>"42"]
	],
	[
	['text'=>"43"],['text'=>"44"],['text'=>"45"]
	],
	[
	['text'=>"46"],['text'=>"47"],['text'=>"48"]
	],
	[
	['text'=>"49"],['text'=>"50"]
	],
	[
	['text'=>"back"],['text'=>"❌"]
	],
	]
	])
	]);
	}
	if($textmassage=="RED"){
save("data/$from_id/color.txt","008aff");
save("data/$from_id/color.txt","008aff");
	}
/////////////////////////
/////////////////////////
/////////////////////////
/////////////////////////$color= file_get_contents("data/$from_id/color.txt");
/////////////////////////
if($textmassage=="1" && $s == 'on'){
save("data/$from_id/file.txt","ph");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=star-wars-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 } 
////////////////////222222
if($textmassage=="2" && $s == 'on'){
save("data/$from_id/file.txt","ph2");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph2" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=neon-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 /////33333
 elseif($textmassage=="3" && $s == 'on'){
save("data/$from_id/file.txt","ph3");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph3" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=amazing-3d-logo&fontsize=100&fontname=pistoleer&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
  /////444444
 elseif($textmassage=="4" && $s == 'on'){
save("data/$from_id/file.txt","ph4");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph4" && $s == 'on'){
$logos = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=comics-logo&text=$textmassage"));
$logo1 = $logos->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 //////////////555555
  elseif($textmassage=="5" && $s == 'on'){
save("data/$from_id/file.txt","ph5");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph5" && $s == 'on'){
$logos = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=husky-logo&fontname=ethnocentric&text=$textmassage"));
$logo1 = $logos->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 //////6666666
  elseif($textmassage=="6" && $s == 'on'){
save("data/$from_id/file.txt","ph6");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph6" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=runner-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 } 
  //////77777
  elseif($textmassage=="7" && $s == 'on'){
save("data/$from_id/file.txt","ph7");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph7" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=blackbird-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
  //////88888
  elseif($textmassage=="8" && $s == 'on'){
save("data/$from_id/file.txt","ph8");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph8" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=style-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
   //////9999
  elseif($textmassage=="9" && $s == 'on'){
save("data/$from_id/file.txt","ph9");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph9" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=fluffy-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
//\/\/\//\/\/\/\/\/\/
   //////1111
  elseif($textmassage=="10" && $s == 'on'){
save("data/$from_id/file.txt","ph10");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph10" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=electric&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 
    //////111111
  elseif($textmassage=="11" && $s == 'on'){
save("data/$from_id/file.txt","ph11");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph11" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=graffiti-burn-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
     //////11212
  elseif($textmassage=="12" && $s == 'on'){
save("data/$from_id/file.txt","ph12");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph12" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=smurfs-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
      //////1313
  elseif($textmassage=="13" && $s == 'on'){
save("data/$from_id/file.txt","ph13");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph13" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=glass-logo&fontname=pistoleer&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
       /////1414
  elseif($textmassage=="14" && $s == 'on'){
save("data/$from_id/file.txt","ph14");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph14" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=graffiti-3d-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
        ////1515
  elseif($textmassage=="15" && $s == 'on'){
save("data/$from_id/file.txt","ph15");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph15" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=chrominium-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
         ///1616
  elseif($textmassage=="16" && $s == 'on'){
save("data/$from_id/file.txt","ph16");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph16" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=frozen-logo&fontname=iomanoid&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
          //1717
  elseif($textmassage=="17" && $s == 'on'){
save("data/$from_id/file.txt","ph17");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph17" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=warp-logo&fontname=baskerville&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 ///////////////////
  elseif($textmassage=="18" && $s == 'on'){
save("data/$from_id/file.txt","ph18");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph18" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=harry-potter-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
  ///////////////////19
  elseif($textmassage=="19" && $s == 'on'){
save("data/$from_id/file.txt","ph19");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph19" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=amped-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
   ///////////////////20
  elseif($textmassage=="20" && $s == 'on'){
save("data/$from_id/file.txt","ph20");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph20" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=plasma-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
    //////////////////21
  elseif($textmassage=="21" && $s == 'on'){
save("data/$from_id/file.txt","ph21");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph21" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=inferno-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
     /////////////////22
  elseif($textmassage=="22" && $s == 'on'){
save("data/$from_id/file.txt","ph22");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph22" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=burnt-paper-logo&fontname=blackchancery&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
      ////////////////23
  elseif($textmassage=="23" && $s == 'on'){
save("data/$from_id/file.txt","ph23");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph23" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=winner-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
       ///////////////24
  elseif($textmassage=="24" && $s == 'on'){
save("data/$from_id/file.txt","ph24");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph24" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=surfboard-white-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
        /////////////425
  elseif($textmassage=="25" && $s == 'on'){
save("data/$from_id/file.txt","ph25");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph25" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=bumblebee-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
         ////////////526
  elseif($textmassage=="26" && $s == 'on'){
save("data/$from_id/file.txt","ph26");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph26" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=scribble-logo&fontname=SF+Gushing+Meadow&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
       ///////////627
  elseif($textmassage=="27" && $s == 'on'){
save("data/$from_id/file.txt","ph27");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph27" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=fabulous-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
           //////////728
  elseif($textmassage=="28" && $s == 'on'){
save("data/$from_id/file.txt","ph28");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph28" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=orlando-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
            /////////829
  elseif($textmassage=="29" && $s == 'on'){
save("data/$from_id/file.txt","ph29");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph29" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=crafts-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
            ////////930
  elseif($textmassage=="30" && $s == 'on'){
save("data/$from_id/file.txt","ph30");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph30" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=picnic-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
///////031
  elseif($textmassage=="31" && $s == 'on'){
save("data/$from_id/file.txt","ph31");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph31" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=birdy-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 //////////32
 elseif($textmassage=="32" && $s == 'on'){
save("data/$from_id/file.txt","ph32");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph32" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=brushed-metal-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 ////////////////////33
if($textmassage=="33" && $s == 'on'){
save("data/$from_id/file.txt","ph33");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph33" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=space-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
////////////////////34
if($textmassage=="34" && $s == 'on'){
save("data/$from_id/file.txt","ph34");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph34" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=supermarket-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
   //////////35
if($textmassage=="35" && $s == 'on'){
save("data/$from_id/file.txt","ph35");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph35" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=sound-blast-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
  //////////36
if($textmassage=="36" && $s == 'on'){
save("data/$from_id/file.txt","ph36");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph36" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=minions-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
  //////////37
if($textmassage=="37" && $s == 'on'){
save("data/$from_id/file.txt","ph37");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph37" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=cloud-logo&backgroundRadio=2&backgroundPattern=Rain&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
   //////////38
if($textmassage=="38" && $s == 'on'){
save("data/$from_id/file.txt","ph38");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph38" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=matrix-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
    //////////39
if($textmassage=="39" && $s == 'on'){
save("data/$from_id/file.txt","ph39");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph39" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=wood&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
  //////////40
if($textmassage=="40" && $s == 'on'){
save("data/$from_id/file.txt","ph40");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph40" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=street-sport-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
      //////////41
if($textmassage=="41" && $s == 'on'){
save("data/$from_id/file.txt","ph41");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph41" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=detective-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
       //////////42
if($textmassage=="42" && $s == 'on'){
save("data/$from_id/file.txt","ph42");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph42" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=fancy-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
        //////////43
if($textmassage=="43" && $s == 'on'){
save("data/$from_id/file.txt","ph43");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph43" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=aurora-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
       //////////44
if($textmassage=="44" && $s == 'on'){
save("data/$from_id/file.txt","ph44");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph44" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=dance-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
         //////////45
if($textmassage=="45" && $s == 'on'){
save("data/$from_id/file.txt","ph45");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph45" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=sugar-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 /////46
 if($textmassage=="46" && $s == 'on'){
save("data/$from_id/file.txt","ph46");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph46" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=disco-party-logo&text=*$textmassage*"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
 ]);
 }
 /////////////47
  if($textmassage=="47" && $s == 'on'){
save("data/$from_id/file.txt","ph47");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph47" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=ice-age-logo&fontname=firestarter&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 //////48 
 if($textmassage=="48" && $s == 'on'){
save("data/$from_id/file.txt","ph48");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph48" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=mosaic-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 /////////49
  if($textmassage=="49" && $s == 'on'){
save("data/$from_id/file.txt","ph49");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph49" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=happy-new-year-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 ////////////////////////////50
  if($textmassage=="50" && $s == 'on'){
save("data/$from_id/file.txt","ph50");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph50" && $s == 'on'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=sunrise-logo&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
////////////////////////             ///////////////////////
///////////////////////
//////////////////////
/////////////////////
//////////////////////
////////////////////
///////////////////
//////////////////
if($textmassage=="1" && $s == 'onn'){
save("data/$from_id/file.txt","ph");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=star-wars-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 } 
////////////////////222222
if($textmassage=="2" && $s == 'onn'){
save("data/$from_id/file.txt","ph2");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph2" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=neon-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 /////33333
 elseif($textmassage=="3" && $s == 'onn'){
save("data/$from_id/file.txt","ph3");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph3" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=amazing-3d-logo&fontsize=100&fontname=pistoleer&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
  /////444444
 elseif($textmassage=="4" && $s == 'onn'){
save("data/$from_id/file.txt","ph4");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph4" && $s == 'onn'){
$logos = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=comics-logo&text=$textmassage&$C"));
$logo1 = $logos->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 //////////////555555
  elseif($textmassage=="5" && $s == 'onn'){
save("data/$from_id/file.txt","ph5");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph5" && $s == 'onn'){
$logos = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=husky-logo&fontname=ethnocentric&text=$textmassage&$C"));
$logo1 = $logos->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 //////6666666
  elseif($textmassage=="6" && $s == 'onn'){
save("data/$from_id/file.txt","ph6");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph6" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=runner-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 } 
  //////77777
  elseif($textmassage=="7" && $s == 'onn'){
save("data/$from_id/file.txt","ph7");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph7" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=blackbird-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
  //////88888
  elseif($textmassage=="8" && $s == 'onn'){
save("data/$from_id/file.txt","ph8");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph8" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=style-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
   //////9999
  elseif($textmassage=="9" && $s == 'onn'){
save("data/$from_id/file.txt","ph9");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph9" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=fluffy-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
//\/\/\//\/\/\/\/\/\/
   //////1111
  elseif($textmassage=="10" && $s == 'onn'){
save("data/$from_id/file.txt","ph10");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph10" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=electric&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 
    //////111111
  elseif($textmassage=="11" && $s == 'onn'){
save("data/$from_id/file.txt","ph11");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph11" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=graffiti-burn-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
     //////11212
  elseif($textmassage=="12" && $s == 'onn'){
save("data/$from_id/file.txt","ph12");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph12" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=smurfs-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
      //////1313
  elseif($textmassage=="13" && $s == 'onn'){
save("data/$from_id/file.txt","ph13");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph13" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=glass-logo&fontname=pistoleer&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
       /////1414
  elseif($textmassage=="14" && $s == 'onn'){
save("data/$from_id/file.txt","ph14");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph14" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=graffiti-3d-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
        ////1515
  elseif($textmassage=="15" && $s == 'onn'){
save("data/$from_id/file.txt","ph15");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph15" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=chrominium-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
         ///1616
  elseif($textmassage=="16" && $s == 'onn'){
save("data/$from_id/file.txt","ph16");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph16" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=frozen-logo&fontname=iomanoid&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
          //1717
  elseif($textmassage=="17" && $s == 'onn'){
save("data/$from_id/file.txt","ph17");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph17" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=warp-logo&fontname=baskerville&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 ///////////////////
  elseif($textmassage=="18" && $s == 'onn'){
save("data/$from_id/file.txt","ph18");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph18" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=harry-potter-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
  ///////////////////19
  elseif($textmassage=="19" && $s == 'onn'){
save("data/$from_id/file.txt","ph19");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph19" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=amped-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
   ///////////////////20
  elseif($textmassage=="20" && $s == 'onn'){
save("data/$from_id/file.txt","ph20");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph20" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=plasma-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
    //////////////////21
  elseif($textmassage=="21" && $s == 'onn'){
save("data/$from_id/file.txt","ph21");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph21" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=inferno-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
     /////////////////22
  elseif($textmassage=="22" && $s == 'onn'){
save("data/$from_id/file.txt","ph22");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph22" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=burnt-paper-logo&fontname=blackchancery&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
      ////////////////23
  elseif($textmassage=="23" && $s == 'onn'){
save("data/$from_id/file.txt","ph23");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph23" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=winner-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
       ///////////////24
  elseif($textmassage=="24" && $s == 'onn'){
save("data/$from_id/file.txt","ph24");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph24" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=surfboard-white-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
        /////////////425
  elseif($textmassage=="25" && $s == 'onn'){
save("data/$from_id/file.txt","ph25");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph25" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=bumblebee-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
         ////////////526
  elseif($textmassage=="26" && $s == 'onn'){
save("data/$from_id/file.txt","ph26");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph26" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=scribble-logo&fontname=SF+Gushing+Meadow&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
       ///////////627
  elseif($textmassage=="27" && $s == 'onn'){
save("data/$from_id/file.txt","ph27");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph27" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=fabulous-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
           //////////728
  elseif($textmassage=="28" && $s == 'onn'){
save("data/$from_id/file.txt","ph28");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph28" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=orlando-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
            /////////829
  elseif($textmassage=="29" && $s == 'onn'){
save("data/$from_id/file.txt","ph29");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph29" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=crafts-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
            ////////930
  elseif($textmassage=="30" && $s == 'onn'){
save("data/$from_id/file.txt","ph30");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph30" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=picnic-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
///////031
  elseif($textmassage=="31" && $s == 'onn'){
save("data/$from_id/file.txt","ph31");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph31" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=birdy-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 //////////32
 elseif($textmassage=="32" && $s == 'onn'){
save("data/$from_id/file.txt","ph32");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}

	
elseif($step=="ph32" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=brushed-metal-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 ////////////////////33
if($textmassage=="33" && $s == 'onn'){
save("data/$from_id/file.txt","ph33");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph33" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=space-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
////////////////////34
if($textmassage=="34" && $s == 'onn'){
save("data/$from_id/file.txt","ph34");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph34" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=supermarket-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
   //////////35
if($textmassage=="35" && $s == 'onn'){
save("data/$from_id/file.txt","ph35");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph35" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=sound-blast-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
  //////////36
if($textmassage=="36" && $s == 'onn'){
save("data/$from_id/file.txt","ph36");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph36" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=minions-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
  //////////37
if($textmassage=="37" && $s == 'onn'){
save("data/$from_id/file.txt","ph37");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph37" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=cloud-logo&backgroundRadio=2&backgroundPattern=Rain&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
   //////////38
if($textmassage=="38" && $s == 'onn'){
save("data/$from_id/file.txt","ph38");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph38" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=matrix-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
    //////////39
if($textmassage=="39" && $s == 'onn'){
save("data/$from_id/file.txt","ph39");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph39" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=wood&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
  //////////40
if($textmassage=="40" && $s == 'onn'){
save("data/$from_id/file.txt","ph40");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph40" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=street-sport-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
      //////////41
if($textmassage=="41" && $s == 'onn'){
save("data/$from_id/file.txt","ph41");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph41" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=detective-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
       //////////42
if($textmassage=="42" && $s == 'onn'){
save("data/$from_id/file.txt","ph42");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph42" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=fancy-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
        //////////43
if($textmassage=="43" && $s == 'onn'){
save("data/$from_id/file.txt","ph43");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph43" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=aurora-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
       //////////44
if($textmassage=="44" && $s == 'onn'){
save("data/$from_id/file.txt","ph44");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph44" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=dance-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
         //////////45
if($textmassage=="45" && $s == 'onn'){
save("data/$from_id/file.txt","ph45");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph45" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=sugar-logo&text=$textmassage&$C"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 /////46
 if($textmassage=="46" && $s == 'onn'){
save("data/$from_id/file.txt","ph46");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph46" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=disco-party-logo&$C&text=*$textmassage*"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
 ]);
 }
 /////////////47
  if($textmassage=="47" && $s == 'onn'){
save("data/$from_id/file.txt","ph47");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph47" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=ice-age-logo&fontname=firestarter&$C&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 //////48 
 if($textmassage=="48" && $s == 'onn'){
save("data/$from_id/file.txt","ph48");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph48" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=mosaic-logo&$C&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 /////////49
  if($textmassage=="49" && $s == 'onn'){
save("data/$from_id/file.txt","ph49");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph49" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=happy-new-year-logo&$C&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 ////////////////////////////50
  if($textmassage=="50" && $s == 'onn'){
save("data/$from_id/file.txt","ph50");
  sendAction($chat_id, 'typing');
	TAKTAZ('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خود را بفرستید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back"]
	],
	]
	])
	]);
	}
	
elseif($step=="ph50" && $s == 'onn'){
$logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=sunrise-logo&$C&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendPhoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 ///////////////////////////////
   if($textmassage=="1" && $s == 'onnn'){
save("data/$from_id/file.txt","ph1c1");
sendAction($chat_id, 'typing');
TAKTAZ('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back🙊"]
	],
	]
	])
	]);
	}
	
 elseif($step=="ph1c1" && $s == 'onnn'){
 $logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=flash-anim-logo&textColor=%23f00&fadeoutWidth=200&glowSize=50&afterGlow=178&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 //////////////////
    if($textmassage=="2" && $s == 'onnn'){
save("data/$from_id/file.txt","ph2");
sendAction($chat_id, 'typing');
TAKTAZ('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back🙊"]
	],
	]
	])
	]);
	}
	
 elseif($step=="ph2" && $s == 'onnn'){
 $logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=shake-anim-logo&fontname=black+rose&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 /////////////
     if($textmassage=="3" && $s == 'onnn'){
save("data/$from_id/file.txt","ph3");
sendAction($chat_id, 'typing');
TAKTAZ('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back🙊"]
	],
	]
	])
	]);
	}
	
 elseif($step=="ph3" && $s == 'onnn'){
 $logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=blue-fire&fontname=antilles+3d&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 /////////////
     if($textmassage=="4" && $s == 'onnn'){
save("data/$from_id/file.txt","ph4");
sendAction($chat_id, 'typing');
TAKTAZ('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back🙊"]
	],
	]
	])
	]);
	}
	
 elseif($step=="ph4" && $s == 'onnn'){
 $logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=alien-glow-anim-logo&fontname=barbatrick&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 
  /////////////
     if($textmassage=="5" && $s == 'onnn'){
save("data/$from_id/file.txt","ph5");
sendAction($chat_id, 'typing');
TAKTAZ('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back🙊"]
	],
	]
	])
	]);
	}
	
 elseif($step=="ph5" && $s == 'onnn'){
 $logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=memories-anim-logo&fontsize=194&fontname=cretino&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 
 ////////////////////////////////
      if($textmassage=="6" && $s == 'onnn'){
save("data/$from_id/file.txt","ph6");
sendAction($chat_id, 'typing');
TAKTAZ('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back🙊"]
	],
	]
	])
	]);
	}
	
 elseif($step=="ph6" && $s == 'onnn'){
 $logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=highlight-anim-logo&fontname=plainblack&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 /////////////////////////
       if($textmassage=="7" && $s == 'onnn'){
save("data/$from_id/file.txt","ph7");
sendAction($chat_id, 'typing');
TAKTAZ('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"انتخاب کنید",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"back🙊"]
	],
	]
	])
	]);
	}
	
 elseif($step=="ph7" && $s == 'onnn'){
 $logos1 = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=burn-in-anim-logo&fontname=exotica+medium&text=$textmassage"));
$logo1 = $logos1->src;
save("data/$from_id/file.txt","none");
save("data/$chat_id/ph.txt","$textmassage");
sendAction($chat_id, 'typing');
TAKTAZ('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"$logo1",
  'parse_mode'=>'MarkDown',
 ]);
 }
 $users = file_get_contents('data/username.txt');
$members = explode("\n", $users);
if (!in_array($username, $members)) {
    $adduser = file_get_contents('data/username.txt');
    $adduser .=$username . "\n";
    file_put_contents('data/username.txt', $adduser);
}$users = file_get_contents('data/users.txt');
$members = explode("\n", $users);
if (!in_array($chat_id, $members)) {
    $adduser = file_get_contents('data/users.txt');
    $adduser .= $chat_id . "\n";
    file_put_contents('data/users.txt', $adduser);
}elseif($textmassage=="آمار ربات"){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        sendAction($chat_id, 'typing');
				TAKTAZ('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"تعداد کاربران : $mmemcount",
                'hide_keyboard'=>true,
		]);
		}elseif ($textmassage == 'ارسال به همه' && $from_id == $Dev) {
save("data/$from_id/file.txt","sendtoall");
         TAKTAZ('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'sendtoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","to");
     TAKTAZ('sendmessage',[
          'chat_id'=>$memuser,        'text'=>$textmassage,
    'parse_mode'=>'MarkDown'
        ]);
    }
} elseif ($textmassage == 'فروارد همگانی' && $from_id == $Dev) {
save("data/$from_id/file.txt","fortoall");
         TAKTAZ('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'fortoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","none");
Forward($memuser, $chat_id,$message_id);
    }
}    
?>
