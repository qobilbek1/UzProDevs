<?php
ob_start();
define('API_KEY','1303714147:AAHjDrWPR_fDrLtsNCqz-ZZc4UkTZtv6Ojg');
//tokenni yozing
$admin = "1055802801"; 
$kun = date('d-m-20y', strtotime('2 hour'));
$soat= date('H:i', strtotime('2 hour'));
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
function put($fayl,$nima){  
file_put_contents("$fayl","$nima");  
}  
function get($fayl){  
$get = file_get_contents("$fayl");  
return $get;  
}  
   function ty($chat_id){ 
   return bot('sendChatAction', [
   'chat_id' => $chat_id,
   'action' => 'typing',
   ]);
   } 
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }
          $replyc= json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);
$efede = json_decode(file_get_contents('php://input'), true);

$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$mtext = $message->text;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$tx = $message->text;
$text1 = $message->text;
$mtext = $message->text;
$first_name = $message->from->first_name;
$step = file_get_contents("data/$fadmin/name.txt");
$is_bot = $message->new_chat_member->is_bot;
$new_chat_members = $message->new_chat_member->id;
$titlea = $message->chat->title;
$cty = $update->message->chat->type;
$capt = $message->caption;
$forwardch = $message->forward_from_chat;



//callback
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

//bu yerni o'zgartirishingiz mumkin.
//files
$text = $message->text;
$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;

//group
$ctitle = $update->message->chat->title;
$cuname = $update->message->chat->username;
$chat_id = $update->message->chat->id;
$cid = $update->message->chat->id;
$turi = $update->message->chat->type;
$cty = $update->message->chat->type;

//call_back
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$calltext = $update->callback_query->message->text;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

//user
$ufname = $update->message->from->first_name;
$chatuser = $update->message->chat->username;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;

//reply

$id = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repulogin = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;


$mid = $message->message_id;
$edname = $editm ->from->first_name;
$forward2 = $update->message->forward_from;
$editm = $update->edited_message;

//Yangi odam id si
$new_user = $message->new_chat_member;
$new_user_id = $message->new_chat_member->id;
$new_user_fname= $message->new_chat_member->first_name;
$username = $message->from->username;
$fname= $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$is_member = $message->new_chat_member->is_member;
mkdir("del");
mkdir("panel");
mkdir("stat");
$capt = $message->caption;
$replytx = $message->reply_to_message->text;
$url = $message->entities[0]->type;
$user =  $message->entities[1]->type;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$type = $message->chat->type;
$text = $message->text;
$from_user_first_name = $message->reply_to_message->from->first_name;
$tx = $message->text;
if($type=="supergroup" or $type=="group"){
    $ex = $msgs[$text];
$ex = explode("|",$ex);
    $txt = $ex[rand(0,count($ex)-1)];
bot("sendmessage",[
	'chat_id'=>$message->chat->id,
	'text'=>"$txt",
	'reply_to_message_id'=>$mid
	]);
}
//Yangi odam id si
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$ismcha = $message->from->first_name;
$familiya = $message->from->last_name;
$bio1 = $message->from->about;
$login = $message->from->username;
$soat1 = date('H:i:s',strtotime('2 hour')); 
$sana1 = date('d-M Y',strtotime('2 hour'));
$sana2 = date('z',strtotime('2 hour'));
$gmt = date('O',strtotime('2 hour'));
$oynomi = date('F',strtotime('2 hour'));
$buoy = date('t',strtotime('2 hour'));

if($replytx){
    if($type=="supergroup"  or $type=="group"){
   	$replytx = $message->reply_to_message->text;
   	      	if(strpos($msgs[$replytx],"$text") !==false){
   	}else{
		$msgs[$replytx] ="$text|$msgs[$replytx]";
		file_put_contents('msgs.json', json_encode($msgs));
	}
	
}
}
if(($text=="/del_doc") and $cid==$admin){
unlink("msgs.json");
bot("sendmessage",[
"chat_id"=>$cid,
'parse_mode'=>"markdown",
"text"=>"*🗑Baza Tozalandi*"
]);
}

if($text=="/doc"){
bot("senddocument",[
"chat_id"=>$message->chat->id,
"document"=>new CURLFile("msgs.json")
]);
}


// start
    if(stripos($mtext,"") !== false){
  $text = "";
  $a=json_encode(bot(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ])));
}

$phpbotgroup = $message->new_chat_member->id;
$chat_id = $message->chat->id;
$fadmin = $message->from->id;
$uzphpkod = $message->new_chat_member->is_bot;
$from_first_name = $message->from->first_name;

$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
mkdir("stat");
$sudo = '1055802801';
$m = file_get_contents("$chat_id.txt");
if (!is_dir('co')) {
	mkdir('co');
}


        if (($phpbotgroup != NUll)&&($uzphpkod!=true)) {
$netkod = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $netkod->result->status;
if($get =="member"){
$balltop=file_get_contents("ball.dat");
$baling="$balltop\n$chat_id=$user_id";
file_put_contents("ball.dat",$baling);
$balltop=file_get_contents("ball.dat");
$ballsoni="$chat_id=$user_id";
$ballstr=substr_count($balltop,"$ballsoni");
if($ballstr=="100"){
$admok = bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
if($admok->ok){  
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$from_first_name](tg://user?id=$fadmin) *Jami Ballaringiz Soni 100 ga Yetgani Uchun, Endi Siz Guruh Adminisiz*,\n👏Tabriklaymiz!",
        'parse_mode'=>'markdown',
    ]);
}
}elseif($ballstr<"100"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$from_first_name](tg://user?id=$fadmin) Sizga *+1 BALL*, Berildi Ballaringiz Soni 100 Ball Bo'lganda Avtomatik Admin Bo'lasiz!💎\n*Jami Ballaringiz Soni: $ballstr~100*",
        'parse_mode'=>'markdown',
    ]);
}
}
}



if($data=="fon"){
   bot('editMessageText',[
   'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'text'=> "💥 Botimiz orqali Telegram foningizni takrorlanmas va HD suratlarga o'zgartiring⚡️
💟 Marhamat istalgan fonni tanlang 👇",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🖼Fon HD', 'url'=>"https://t.me/bg/JzHJF0HUAFIBAAAAYqIF-a2x4DY"],['text'=>'🗽Fon HD','url'=>"https://t.me/bg/G87eMCd6-FEBAAAApSBi5CBqx0c"]], 
[['text'=>'🖼Fon HD', 'url'=>"https://t.me/bg/Yd1Rl3CKiUkBAAAAJQbVxmElXcw"],['text'=>'🗼Fon HD','url'=>"https://t.me/bg/sp-xMi7A-VEBAAAABRn6rGsUKFs"]],
[['text'=>'🌁Fon HD', 'url'=>"https://t.me/bg/pATdUMGs-FEBAAAA0r1Q5aJbg2w"],['text'=>'⛪️Fon HD','url'=>"https://t.me/bg/Yd1Rl3CKiUkBAAAAJQbVxmElXcw"]],
[['text'=>'🏖Fon HD', 'url'=>"https://t.me/bg/pATdUMGs-FEBAAAA0r1Q5aJbg2w"],['text'=>'🌋Fon HD','url'=>"https://t.me/bg/I9m3arXQiFIBAAAAyYGQ6povw_E"]],
[['text'=>'🔙Orqaga Qaytish','callback_data'=>'back']],
]
]),
]);
}



// start
    if(stripos($mtext,"/start") !== false and $cty == "private"){
  $text = "👊Salom! [$first_name](tg://user?id=$fadmin)
Mening Ismim *Erkamoy*
Meni guruhlarga qo'shing! Kimdur Salom Berganda 
Birinchi bo'lib kamina Alik olaman! Hazilni Yoqtiraman!
*Salom Kimsan Kimman * va yana ko'plab so'zlarga hazillar qilaman!
Mani Guruhingizga Qo'shing Hazillashamiz!

qo'limdan keladigan ishlar haqida batafsil:
 /haqida 
";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=>'markdown',
  ]));
}

if($text=="/haqida" and $cty == "private"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'text'=>"* 😎 Salom! 
👨‍✈️@ErkamoyRobot ni *`yani meni` *Guruhingizga Admin qilsangiz:
📝 Guruh infosiga soat, hafta kuni, sana va chiroyli status qo°yaman (Hamisha ishlab turadi).
🛡 Guruhingizni botlardan himoya qilaman.
😷 Reklamalarni Tozalayman. Va Suhbatlashaman!
⭕️ Kirdi chiqdilarni Tozalayman.
🔞 Video, Sticker, Arablar va boshqalarni O'chiraman!
🦾Qoidalarni Buzganlarga 3tagacha Ogohlantirish Beraman Yana Shu Hol 
Takrorlansa Mendan Jazo Olishadi!
🥇Guruhga 100 odam qushganga AvtoAdmin Beraman!
💎 Va yana Koplab vazifalarni Bajaraman!
🔥 /panel buyrug'i orqali  o'z guruhingizga moslab olishingiz mumkin!*",
]);
} 

if($data=="buyruq"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"`/panel` - Bu buyruq guruh* Adminlar*ida ishlaydi
`/warn` - Bitta ogohlantirish* (Ayblov)* beradi
`/unwarn` -* Ayblov*larni olib tashlaydi
`/mywarn` - Sizdagi *Ayblovlar* soni
`/mute` - *Mute* rejimiga tushuradi
`/unmute` - *Mute* rejimidan chiqaradi
`/ban` - Guruhdan *Ban* qiladi
`/unban` - *Ban* rejimidan chiqaradi
`/addstar` - Guruhda *Ishonchli Odamlar *Ruyxatiga Kiritish
`/delstar` - Guruhda* Ishonchli odamlar* Ruyxatidan Olib tashlash
`/allstars` - Guruhdagi *Ishonchli odamlar* Ruyxati
`/admin` - Guruh Azosini Guruhga *Admin* Qilib Belgilash
`/deladmin` - Guruh Azosini Guruh *Admin*ligidan olish
`Bu Buyruqlar Guruhda Reply qilib Yoziladi`

Botimizning Foydali Buyruqlari!
`/new_year ` - *Yangi Yilgacha* Qolgan Vaqt😁
`/myid` - Uzingizning Shaxsiy *ID raqamingiz!*
`/vaqt` -* Bugungi Kun* Haqida Batafsil
`/kalit` so'z - Biror so'zni kiritsa adminga yuboradi yoki gruppadan u so'zni o'chiradi",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}

if($data=="tgtili"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"??🇿 Bu bo'lim orqali telegramingiz tilini qulay oson o'zgartira olasiz!
⬇️ Shunchaki o'rnatmoqchi bo'lgan tilingizni tanlang:

<a href='tg://setlanguage?lang=uzbekcyr'>🇸🇱 O'zbek</a>

<a href='tg://setlanguage?lang=ru'>🇷🇺 Русский</a>

<a href='tg://setlanguage?lang=en'>🇵🇷 English</a>",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}





if(stristr($text,"ض") or stristr($text, 'ص') or stristr($text, 'ث') or stristr($text, 'ق') or stristr($text, 'ف') or stristr($text, 'غ') or stristr($text, 'ع') or stristr($text, 'ه') or stristr($text, 'خ') or stristr($text, 'ح') or stristr($text, 'ج') or stristr($text, 'ش') or stristr($text, 'س') or stristr($text, 'ي') or stristr($text, 'ب') or stristr($text, 'ل') or stristr($text, 'ا') or stristr($text, 'ت') or stristr($text, 'ن') or stristr($text, 'م') or stristr($text, 'ك') or stristr($text, 'ط') or stristr($text, 'ذ') or stristr($text, 'ء') or stristr($text, 'ؤ') or stristr($text, 'ر') or stristr($text, 'ى') or stristr($text, 'ئ') or stristr($text, 'ة') or stristr($text, 'و') or stristr($text, 'ز') or stristr($text, 'ظ') or stristr($text, 'د') or stristr($text, 'أ') or stristr($text, 'إ') or stristr($text, 'آ') and $cty =="supergroup"){
bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
      ]);
bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$user_id,
        'until_date'=>strtotime("+ 30 minutes "),
      ]);

   bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$user_id'>$ufname</a> Habarida Arab Harflari Qatnashgani Uchun MUTE Qilindi",
        'parse_mode'=>'html',
      ]);
  }




if($data=="referal"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"*Pul Ushlash Uchun Eng Zor Botlar Royhati Va Ular 100% ISHONCHLI*",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>'1⃣ Minimalka 20 rubl','url'=>'https://t.me/Mardan_robot?start=1055802801']],
                     [['text'=>'Like, Prosmotr Ishlash','url'=>'https://t.me/nitroseenbot?start=1055802801']],
                         [['text'=>'Like, Prosmotr Ishlash 2','url'=>'https://t.me/rapidseenbot?start=1055802801']],
                                [['text'=>'Like, Prosmotr Ishlash 3','url'=>'https://t.me/harpseenbot?start=1055802801']],
              [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]],
           ]
        ])
    ]);
}


$iwonc=get("del/$chat_id.txt");

     $gett = bot('getChatMember', ['chat_id' => $chat_id,'user_id' => $user_id,]);
     $get = $gett->result->status;

     $gett1 = bot('getChatMember', ['chat_id' => $chat_id,'user_id' => $id,]);
     $get1 = $gett1->result->status;

     $gett2 = bot('getChatMember', ['chat_id' => $callcid,'user_id' => $clid,]);
     $get2 = $gett2->result->status;




if($tx=="/allstars" or $tx=="/allstars@ErkamoyRobot"){
if((mb_stripos($iwonc,$user_id)!==false) or ($get =="administrator" or $get == "creator") or $user_id==$admin){
$list=[];
$star=get("del/$chat_id.txt");
$ex=explode("\n",$star);
foreach($ex as $txt){
$exp=explode("~",$txt);
$names="$exp[0]";
$ids="$exp[1]";
$users="$exp[2]";
array_push($list,[['text'=>$names,'url'=>"https://telegram.me/$users"],]);
}
$dels=get("del/$chat_id.dat");
$send=get("del/$chat_id.php");
$ex=explode("~",$send);
$send=$ex[0];
$adm=$ex[1];
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*Guruhimizdagi ishonchi odamlar Ro'yhati:*",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
        'inline_keyboard'=>
         $list
        ])
    ]);
  }
}

if(mb_stripos($tx,"/addstar")!==false){
if($get =="administrator" or $get == "creator"){
if($get1 =="administrator" or $get1 == "creator"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) $ctitle gruhida Admin bo'lgani uchun *Ishonchli odam* Ro'yxatiga qo'shilmaydi",
        'parse_mode'=>'markdown']);
}else{
$baza=get("del/$chat_id.txt");
if(mb_stripos($baza,$id)!==false){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) $ctitle gruhida avvalroq *ishonchli odam* deb qabul qilingan\n*Ishonchli odamlar Royhati* /allstars",
        'parse_mode'=>'markdown',
      ]);
}else{
put("del/$chat_id.txt","$baza\n$repname~$id~$repulogin");
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) $ctitle gruhida *ishonchli odam* deb qabul qilindi\n*Ishonchli odamlar Royhati* /allstars",
        'parse_mode'=>'markdown',
      ]);
   }
  }
 }
}

if(mb_stripos($tx,"/delstar")!==false){
$baza=get("del/$chat_id.txt");
if($get =="administrator" or $get == "creator"){
$str=str_replace("$repname~$id~$repulogin\n","",$baza);
put("del/$chat_id.txt",$str);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) *$ctitle* gruhida ishonchli odam qatoridan chiqarildi",
        'parse_mode'=>'markdown',
      ]);
   }
}

if($text == "/admin"){
if($get =="administrator" or $get == "creator"){
      bot('promoteChatmember',[
      'chat_id'=>$chat_id,
      'user_id'=>$id,
      'can_change_info'=>true,
      'can_post_messages'=>false,
      'can_edit_messages'=>false,
      'can_delete_messages'=>true,
      'can_invite_users'=>true,
      'can_restrict_members'=>true,
      'can_pin_messages'=>true,
      'can_promote_members'=>false
   ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) *$ctitle* gruhida admin qilib tayinlandi",
        'parse_mode'=>'markdown',
      ]);
}
}

if($text == "/deladmin"){
if($get =="administrator" or $get == "creator"){
      bot('promoteChatmember',[
      'chat_id'=>$chat_id,
      'user_id'=>$id,
      'can_change_info'=>false,
      'can_post_messages'=>false,
      'can_edit_messages'=>false,
      'can_delete_messages'=>false,
      'can_invite_users'=>false,
      'can_restrict_members'=>false,
      'can_pin_messages'=>false,
      'can_promote_members'=>false
   ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) *$ctitle* gruhida adminlikdan olindi",
        'parse_mode'=>'markdown',
      ]);
}
}

if(mb_stripos($tx,"/kalit")!==false){
if($turi=="supergroup" or $turi=="group"){
if($get=="administrator" or $get == "creator"){
$tx=strtolower($tx);
$ex=explode("/kalit",$tx);
$tx="$ex[1]";
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$tx,
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[ 
                [['text'=>"⚠ Taqiqlansin",'callback_data'=>"deleted"]],
                [['text'=>"📩 Menga yuborilsin",'callback_data'=>"sending"]],
            ]
        ])
      ]);
    }
  }
}

if($data=="deleted"){
if($get2 =="administrator" or $get2 == "creator"){
  $str=str_replace(",","\n",$calltext);
  put("del/$callcid.dat","$str");
   bot('editmessagetext',[
       'chat_id'=>$callcid,
       'message_id'=>$callmid,
       'text'=>"😉Ok:Ushbu kalit so'zlar shu Groupdan o'chirib tashlanadi\n*$str*",
       'parse_mode'=>"markdown"
     ]);
   }
}

if($data=="sending"){
if($get2 =="administrator" or $get2 == "creator"){
  $str=str_replace(",","\n",$calltext);
  put("del/$callcid.php","$str~$clid");
   bot('editmessagetext',[
       'chat_id'=>$callcid,
       'message_id'=>$callmid,
       'text'=>"😉Ok:Ushbu kalit so'zlarni Sizga yuborib turaman\n*$str*",
       'parse_mode'=>"markdown"
     ]);
  }
}

$maxsus=file_get_contents("del/$chat_id.dat");
$ex=explode("\n",$maxsus);
foreach($ex as $soz){
if(mb_stripos($tx,$soz)!==false){
if($get=="member"){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
      ]);
   $send=bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"Hurmatli [$ufname](tg://user?id=$user_id) Sizni ogohlantiraman Siz taqiqlangan So'z ishlatdingiz😡\nbu Hol boshqa qaytarilmasin",
        'parse_mode'=>'markdown',
      ]);
  }
$sending=$send->ok;
if($sending){
exit;
}
}
}

$spes=file_get_contents("del/$chat_id.php");
$ex=explode("~",$spes);
$adm="$ex[1]";
$txt3="$ex[0]";
$ex=explode("\n",$txt3);
foreach($ex as $soz){
if(mb_stripos($tx,$soz)!==false){
   $send=bot('sendmessage',[
        'chat_id'=>$adm,
        'text'=>"[$ufname](tg://user?id=$user_id) kalit so'z ishlatdi\n*$tx*",
        'parse_mode'=>'markdown',
      ]);
  }
$sending=$send->ok;
if($sending){
exit;
}
}






if (($cty=="supergroup")&&($new_chat_members != NUll)&&($is_bot!=false)) {
   $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>😡 Guruhda Men Borman, Boshqa Bot Qo'shish Mumkin Emas!</b>",
      'parse_mode' => 'html'
  ]);
}



if($data=="botlar"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"📢 @UzProDevs - Jamoasining Loyihalari!
🤖 @ErkamoyRobot - Guruh Nazoratchisi...
🤖 @RandomLikeUzBot - Kanallardagi Postlarga 👍👎qoyib beradi
🤖 @sjt8_bot - Online Test Bot.
👨‍💻 Admin: @qobilbek1",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}
if($data=="back"){
  $text = "😎 Assalom Alaykum!
👨‍✈️@ErkamoyRobot ni Guruhingizga Admin qilsangiz:
📝 Guruh infosiga soat, hafta kuni, sana va chiroyli status qo'yadi (Hamisha ishlab turadi).
🛡 Guruhingizni botlardan himoya qiladi.
😷 Reklamalarni Tozalaydi. Va Suhbatlashadi!
⭕️ Kirdi chiqdilarni tozalaydi.
🔞 Video, Sticker, Arablar va boshqalarni o'chiradi!
🦾Qoidalarni Buzganlarga 3tagacha Ogohlantirish Beradi Yana Shu Hol 
Takrorlansa Botdan Jazo Olishadi!
🥇Guruhga 100 odam qushganga AvtoAdmin
💎 Va yana Koplab vazifalarni bajaradi!
🔥 /panel buyrug'i orqali botni o'z guruhingizga moslab olishingiz mumkin!";
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>$text,
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
             [['text'=>'♨Buyruqlar','callback_data'=>"buyruq"],['text'=>'🤖 Loyihalar','callback_data'=>"botlar"]],
             [['text'=>'🔥 Pul ishlash','callback_data'=>"referal"],['text'=>'🇺🇿 Telegram tillari','callback_data'=>"tgtili"]],
                 [['text'=>'💥HD FONLAR','callback_data'=>"fon"]],
          [['text'=>'➕ Guruhga Qushish','url'=>'https://telegram.me/ErkamoyRobot?startgroup=new'],['text'=>'👨‍💻 Admin','url'=>'https://telegram.me/qobilbek1']],
           ]
        ])
    ]);
}


$gett = bot('getChatMember', [
     'chat_id' => $chat_id,
     'user_id' => $user_id,
     ]);
     $get = $gett->result->status;

if($tx=="/mute"){
if($get =="administrator" or $get == "creator"){ 
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Siz Admin Buyrugi Bilan 3 Soatga *Mute* Rejimiga Tushurildingiz",
        'parse_mode'=>'markdown',
    ]);
  bot('restrictChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id,    
    'until_date'=>strtotime("+ 180 minutes "), 
  ]);    
}
}


if($tx=="/unmute"){
if($get =="administrator" or $get == "creator"){ 
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Siz Admin Ruxsati Bilan *Mute* Rejimidan Olindingiz! *Qoidalarga Amal Qiling*☝️",
        'parse_mode'=>'markdown',
    ]);
  bot('restrictChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id, 
    'can_send_messages'=>true,    
    'can_send_media_messages'=>true,    
    'can_send_other_messages'=>true,    
    'can_add_web_page_previews'=>true    
  ]);    
}
}


if($tx=="/ban" or $tx=="/Ban" or $tx=="/ban@ErkamoyRobot"){
if($get =="administrator" or $get == "creator"){ 
  bot('kickChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id, 
    'can_send_messages'=>false,    
    'can_send_media_messages'=>false,    
    'can_send_other_messages'=>false,    
    'can_add_web_page_previews'=>false    
  ]);    
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Admin Tomonidan Guruhdan Chiqarilib *Ban* Qilindi",
        'parse_mode'=>'markdown',
    ]);
  }
}

if($tx=="/warn" or $tx=="/Jazo" or $tx=="/Warn" or $tx=="/warn@ErkamoyRobot"){
if($get =="administrator" or $get == "creator"){ 
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$id";
file_put_contents("warn.dat",$jazo);
$war=file_get_contents("warn.dat");
$soni="$chat_id=$id";
 $str=substr_count($war,"$soni");
if($str=="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
  bot('restrictChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id,    
    'until_date'=>strtotime("+ 9999999999999999 minutes "), 
  ]);    
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Sizga Admin Tomonidan *1 Ogohlantirish*️ Berildi!\n Ogohlantrilishlaringiz Soni *3* Taga Yetganligi Sababli *Mute* Rejimidasiz!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Sizga Admin Tomonidan *1 Ogohlantirish*️ Berildi!\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
}
}
}
if($tx=="/unwarn" or $tx=="/unwarn" or $tx=="/delwarn" or $tx=="/unwarn@ErkamoyRobot"){
if($get =="administrator" or $get == "creator"){ 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$id";
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Sizdan Admin Buyrug'i Bilan Ayblovlar Olib Tashlandi",
        'parse_mode'=>'markdown',
    ]);
  }
}

if($tx=="/mywarn" or $tx=="/Jazolarim" or $tx=="/MyWarn" or $tx=="/mywarn@ErkamoyRobot"){
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id)Sizdagi Ayblovlar Soni $str~3",
        'parse_mode'=>'markdown',
    ]);
}

if($tx=="/unban" or $tx=="/Unban" or $tx=="/unban@ErkamoyRobot"){
if($get =="administrator" or $get == "creator"){ 
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$repname](tg://user?id=$id) Admin Ruxsati Bilan😎 *Bandan* Olindi!",
        'parse_mode'=>'markdown',
    ]);
  bot('unbanChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id,    
  ]);    
}
}






if($soat<"777"){
$usa = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $usa->result;
$kun3 = date('N'); 
$yil =date('Y');
$mast ="@UzProDevs"; 
$kun =date('d-M', strtotime('2 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$message="👋 Guruhimizga Hush Kelibsiz!
😊 Kuningiz Hayrli Va Barokatli O'tsin!
☺️ Eslatib O'tamiz:
🗓 Bugun: $kun $yil-yil
🔵 Hafta kuni: $hafta1
⌚️ Soat: $soat
👥 Guruh Azolari: $count"; 
  bot('setChatDescription',[ 
        'chat_id'=>$chat_id, 
        'description'=>"$message", 
        'parse_mode'=>'html', 
    ]); 
}



if(mb_stripos($tx,"/start")!==false and $cty =="private"){

   $baza=file_get_contents("lichka.db");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("lichka.db","a");
   fwrite($file,$txt);
   fclose($file);
   }
}
if($tx  and $cty =="supergroup" or $cty =="group"){

   $baza=file_get_contents("gruppa.db");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("gruppa.db","a");
   fwrite($file,$txt);
   fclose($file);
   }
}
  
if($tx == "📊Statistika" and $cty =="private"){
      $use=file_get_contents("lichka.db");
      $us=substr_count($use,"\n");
$grp=file_get_contents("gruppa.db");
$gr=substr_count($grp,"\n");
$all=$use+grp;
      $text = "<b>📡 Bot Foydalanuvchilari
👥 Super Group: $gr
👤 Userlar: $us
👨‍👩‍👧‍👦 Jami: $all
🏆</b> @UzProDevs";
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'parse_mode'=>'html',
   'text'=>$text,
  ]);
}





if($tx == "/new_year" or $tx == "/new_year@ErkamoyRobot") {   
$kun1 = date('z ',strtotime('5 hour')); 
$a = 364;
$c2 = $a-$kun1;
$d = date('L ',strtotime('5 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('5 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('5 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('5 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;
  bot('sendmessage',[   
   'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,  
   'text'=>"😃* Urra!
🎄 Yangi Yilga $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!
❄️ Kirib Kelayotgan Yangi yil Bilan! *", 'parse_mode'=>'markdown', 
]);   
  bot('sendChatAction',['chat_id'=>$chat_id,
 'action'=>"typing"]);
}   



if($tx== "Vaqt" or $tx== "Soat" or $tx== "vaqt" or $tx== "soat" or $tx== "sana" or $tx== "Sana" or $tx== "вакт" or $tx== "Вакт" or $tx== "Bugun" or $tx== "bugun"){ 
      $kun3 = date('N'); 
      $yil =date('Y');
      $mast ="📣 @UzProDevs"; 
      $kun =date('d-M', strtotime('2 hour')); 
      $soat=date('H:i:s', strtotime('2 hour')); 
      $hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
      $ex=explode("$kun3",$hafta); 
      $hafta1="$ex[1]"; 
      $message="🗓 <b>Bugun: $kun $yil-yil</b>
🔵 Hafta kuni: <b>$hafta1</b>
⌚️ Soat: <b>$soat</b>
👨‍💻 $mast"; 
  bot('sendmessage',[ 
        'chat_id'=>$chat_id, 
        'text'=>"$message", 
        'parse_mode'=>'html', 
    ]); 
}



// yangi azo
elseif(isset($update->message-> new_chat_member )){
    $name = $message->from->first_name;
bot('deleteMessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$mesid,
    ]);
}

// chiqib ketdi
elseif(isset($update->message-> left_chat_member )){
    $name = $message->from->first_name;
bot('deleteMessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$mesid,
    ]);
}
// chiqib ketdi
elseif(isset($update->message-> leaveChat )){
    $name = $message->from->first_name;
bot('deleteMessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$mesid,
    ]);
}



if(mb_stripos($tx,"qobilbek")!==false){
  bot('sendmessage',[
   'chat_id'=>$admin,
   'parse_mode'=>'markdown',
   'disable_web_page_preview'=>true,
   'text'=>"✉️ *Yangi Xabar!*
👥 Guruh: *$ctitle*
👤 Kimdan: *$ufname $uname*
📎 Login: [@$ulogin]
🆔 : *$user_id* 
🗝 Guruh Useri: [@$chatuser]
[⤴️ Xabarga Borish](t.me/$chatuser/$mid)
📝 Matn: *$tx*",
  ]);
}

if(mb_stripos($tx,"/myid")!==false){
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text'=>"` $fadmin`",
'parse_mode'=>'markdown'
]);
}
if(mb_stripos($tx,"newgr")!==false){
  $usa = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $usa->result;
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text'=>"*Assalom alaykum $titlea Guruhining $count Azolari!
Siz Bilan Ekanimdan Bahtiyorman!
Guruhingizni Himoya Qilishim Uchun Meni Admin Qiling*",
'parse_mode'=>'markdown'
]);
}







 $gett = bot('getChatMember', ['chat_id' => $chat_id,'user_id' => $user_id,]);
     $get = $gett->result->status;

     $gett1 = bot('getChatMember', ['chat_id' => $chat_id,'user_id' => $id,]);
     $get1 = $gett1->result->status;

     $gett2 = bot('getChatMember', ['chat_id' => $callcid,'user_id' => $clid,]);
     $get2 = $gett2->result->status;
$iwonc=get("del/$chat_id.txt");

if((mb_stripos($iwonc,$user_id)!==false) or ($get =="administrator" or $get == "creator") or $user_id==$admin){
}else{
    if(isset($photo) || isset($gif)){
$fot=get("panel/$chat_id.dat");
    if(mb_stripos($fot,"📷 Photo ❌")!==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str>="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
 $vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Rasm Yuborish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
}
}
}
if(isset($sticker)){
$fot=get("panel/$chat_id.dat");
    if(mb_stripos($fot,"🎭 Sticker ❌")!==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str=="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
$vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Sticker Yuborish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
   }
  }
 }

if($document){
if(isset($gif)){
}else{
$fot=get("panel/$chat_id.dat");
     if(mb_stripos($fot,"📁 Fayl ❌")!==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
     bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str>="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
$vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Fayl Yuborish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
   }
  }
 }
}
$capt = $message->caption;
if((mb_stripos($text,"https://") !==false) or (stripos($capt,"https://")!==false) or (stripos($capt,"bot?start=")!==false) or (stripos($text,"bot?start=")!==false) or (stripos($text,"https://")!==false) or (stripos($capt,"@")!==false) or (stripos($capt,"@")!==false) or (stripos($text,"@")!==false ) or (stripos($text,".com")!==false) or (stripos($text,".ru")!==false) or (stripos($text,".dog")!==false) or (stripos($text,"://")!==false) or (stripos($text,"http")!==false) or (stripos($text,"@")!==false) or (stripos($text,".me")!==false) or (stripos($text,".be")!==false) and $cty == "supergroup" or $cty =="group"){
$fot=get("panel/$chat_id.dat");
if(mb_stripos($fot,"🔗 Link ❌") !==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
     bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str=="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
$vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Reklama Yuborish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
   }
  }
}
if($video){
$vid=get("panel/$chat_id.dat");
     if(mb_stripos($vid,"🎬 Video ❌")!==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
     bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str>="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
$vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Video Yuborish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
   }
  }
 }

if($music){
$fot=get("panel/$chat_id.dat");
     if(mb_stripos($fot,"🎶 Music ❌")!==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
     bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str>="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
$vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Music Yuborish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
   }
  }
 }
$forward = $update->message->forward_from;
if($forward){
$fot=get("panel/$chat_id.dat");
    if(mb_stripos($fot,"➡ Forward ❌")!==false){
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("warn.dat",$jazo); 
$war=file_get_contents("warn.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
if($str=="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
$vaqti = strtotime("180 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $user_id,
      'until_date'=> $vaqti
  ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) *Qoida Buzarlik* Qilgani Uchun 3 Soatga Mute Rejimiga Tushurildi!",
        'parse_mode'=>'markdown',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$ufname $uname](tg://user?id=$user_id) Sizni *OGOHLANTIRAMAN!* Bu Guruhda *Forward Qilish* Taqiqlangan\n Ogohlantrilishlaringiz Soni *$str~3*",
        'parse_mode'=>'markdown',
    ]);
   }
  }
 }
}

if($turi=="supergroup" or $turi=="group"){
$baza=get("del/$chat_id.txt");
if(mb_stripos($baza,$user_id)!==false){
$ex=explode("~$user_id~",$baza);
$name=$ex[0];
$user=$ex[1];
if($ufname != $name){
$str=str_replace("$name","$ufname",$baza);
put("del/$chat_id.txt",$str);
}
$baza=get("del/$chat_id.txt");
if($user != $ulogin){
$str=str_replace("$user","$ulogin",$baza);
put("del/$chat_id.txt",$str);
}
}
}


if(isset($message)){
$baza=get("panel/$chat_id.dat");
if($baza){
}else{
$txt="🎭 Sticker ⭕️\n📷 Photo ⭕️\n📁 Fayl ⭕️\n🔗 Link ⭕️\n🎬 Video ⭕️\n🎶 Music ⭕️\n➡ Forward ⭕️\n😡Faqat Admin Uchun ";
put("panel/$chat_id.dat","$txt");
}
}
if ($get=="administrator" or $get=="creator"){
if($tx=="/panel" or $tx=="/panel@ErkamoyRobot"){
$markup=[];
$baza=get("panel/$chat_id.dat");
$ex=explode("\n",$baza);
foreach($ex as $get){
array_push($markup,[['text'=>$get,'callback_data'=>"+$get"],]);
}
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"👨‍✈️ * Guruh Adminlari Uchun:\n⚙️ Sozlamalarni belgilang\n\n⭕️ Ruhsat etilgan fayllar\n❌Taqiqlangan fayllar*",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
        'inline_keyboard'=>
         $markup
       ])
    ]);
}
}
if($tx=="/panel" or $tx=="/ban" or $tx=="/mute" or $tx=="/warn" or $tx=="/kalit"or $tx=="/unban"or $tx=="/unmute"or $tx=="/nowarn"or $tx=="/kalit" and $get=="member" and $cty =="supergroup"){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
      ]);
    }

if($get2 =="administrator" or $get2 == "creator"){ 
if(mb_stripos($data,"+")!==false){
$ex=explode("+",$data);
$button=$ex[1];
$exp=explode(" ",$button);
$type=$exp[1];
$var=$exp[2];
$get=get("panel/$callcid.dat");
if($var=="⭕️"){
$str=str_replace("$type ⭕️","$type ❌",$get);
}else{
$str=str_replace("$type ❌","$type ⭕️",$get);
}
put("panel/$callcid.dat",$str);
$markup=[];
$file=get("panel/$callcid.dat");
$ex2=explode("\n",$file);
foreach($ex2 as $buttons){
array_push($markup,[['text'=>$buttons,'callback_data'=>"+$buttons"],]);
}
    bot('editMessageReplyMarkup',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'inline_query_id'=>$qid,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>
            $markup
          ])
    ]);
}
}

if((stripos($mtext,"Salom") !== false) or (stripos($mtext,"салом")!==false)){
 if($fadmin==$admin){
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"Assalomu Alaykum Xo'jain! XushKelibsiz!",
      ]);
  }else{
  $name = $message->from->first_name;
  $input = array("Assalom","Salom $name ,guruhimiz sizga yoqtimi?","Salom, ismiz nima?","Assaalomu alaykum","Привет, как дело?","Qaleysiz?","Sizga ham salom","Salom.", "Salom qaleysiz?","Vaalaykum salom,baxtli bo‘ling😊.","Yaxshimisiz $name,namuncha ko‘rinmay ketdiz?", "Juda sersalom ekansiz☺", "Assalomu aleykum.", "Salom $name.", "Iye keling,endi sizni eslab turgandik","Ana,yana bittasi keldi😂","Salom meni tanidizmi?","Salom bergan kishini...Xudo o‘nglar ishini.","Namuncha salom beruras","Salomim so‘lim-so‘lim  kitobdadur o‘ng  qo‘lim.Tringlab hech qoymagan telegramda chap qo‘lim🤣🤣🤣","Sizni ko‘radigan kun ham  bor ekanu!","Salom,yaxshimisiz?","Qaleysiz?","Asssalomu alekooom boy ota.Ishlar qaley?","Sava","Привет ","Hello $name,qaleysiz?","Salom.Nik daxshatu a?","Ehe keb qoling, anu gap nima bo'ldi?","Yuragizni sevgi muhabbat qoplagan vaqda to‘g‘ri shu yerga kelevering,ok?","Garov  o‘ynaymizmi  kimnidur sevib qolgansiz?Agar adashayotgan bo‘lsam,garov haqida unuting😆","Bolla, qizla bitta fikr bor!","Keling,sizni ham ko‘radigan  kun  bor ekanu");
  $rand=rand(0,26);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}
  }
if((stripos($mtext,"Zo‘r") !== false) or (stripos($mtext,"yaxshi")!==false) or (stripos($mtext,"Zor")!==false) or (stripos($mtext,"Zo'r")!==false)){
  $name = $message->from->first_name;
  $input = array("Qayerdansiz?","Juda  yaxshi 😁","👍","Ok.","Qaysi viloyatdansiz?", "Nima uchun","Har doim shunday bo'lsin.","Qayerliksiz?");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Toshkent")!==false) or (stripos($mtext,"Andijon")!==false) or (stripos($mtext,"Fargona")!==false) or (stripos($mtext,"Farg'ona")!==false)  or  (stripos($mtext,"Namangan")!==false) or  (stripos($mtext,"Sirdaryo")!==false) or (stripos($mtext,"Jizzax")!==false) or (stripos($mtext,"Qashqadaryo")!==false) or (stripos($mtext,"Surxondaryo")!==false) or (stripos($mtext,"Buxoro")!==false) or (stripos($mtext,"Xorazim")!==false) or (stripos($mtext,"Nukus")!==false) or (stripos($mtext,"Qoraqalpoq")!==false)  or  (stripos($mtext,"Qarshidan")!==false) or  (stripos($mtext,"Guliston")!==false) or (stripos($mtext,"Qoqon")!==false) or (stripos($mtext,"nanay")!==false) or (stripos($mtext,"Nanay")!==false) or (stripos($mtext,"Kattakorgon")!==false) or (stripos($mtext,"Chilonzor")!==false)){
$input = array("Qayeridan?","Zo'rku👍","Hmm,Chiroyli shahar","Yaxshi,lekin biz tomondan ancha uzoq ekan.","O‘zidanmi?", "Yoge,zorku.","Qayeridan.","Hm,u yerda chiroyli joylar ko‘p deb eshitganman.");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Hm") !== false) or (stripos($mtext,"Xm")!==false)){
  $name = $message->from->first_name;
  $input = array("Nega  hm deysiz gapiring","Hm","Nima Hm?","😂","Zerikdingizmi?","Negadur zerikdim", "Tinchlikmi?","Mbingiz kam qoldimi deyman 😁","Qayerliksiz?");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Tinchlikmi") !== false)){
  $name = $message->from->first_name;
  $input = array("Ha tinchlik","Nima edi?","O'zizdan so'rasak");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

 if($text1 == "Hayrli tun" || $text1 == "Spakoyni noc" || $text1 == "Xayrli tun" || $text1 == "Xayrli tun hamaga"){
       bot('sendvoice',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'voice'=>"http://telegram.me/majnunuz/8"
    ]);
  }

if((stripos($mtext,"Rostdanmi") !== false) or (stripos($mtext,"rostanmi")!==false) or (stripos($mtext,"rostmi")!==false)){
  $name = $message->from->first_name;
  $input = array("Ha rost","Bilmadim","Ha","Men qayerdan bilay ","Yolg'ondan :)");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"O‘idan") !== false) or (stripos($mtext,"O'zidan")!==false) or (stripos($mtext,"o‘zidan")!==false) or (stripos($mtext,"Sentridan")!==false)){
  $name = $message->from->first_name;
  $input = array("Ha yaxshi","Shahardanmisiz?","Zo'rku");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Buxoro")!==false)){
$input = array("Wow,men ham Samarqandlik","Hamshahar ekanmiz!","Men ham Samarqandlikman 😊","Qayeridan?","Bitta joydan ekanmiz");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Yoge")!==false) or (stripos($mtext,"rostanmi")!==false)  or (stripos($mtext,"rostdanmi")!==false)  or (stripos($mtext,"Yog'e")!==false)){
$input = array("Ha","Ha shunaqa","Hm shunday","Haye.","Ha rost");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

  

  if($text1 == "Ok" or  $text1 == "ok" or $text1 == "OK" or $text1 == "oK"){
  $input = array("Ok!!!","Nok🍐","Sok","👌","Tok?","😏","?","👍","Ok");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Kimni") !== false){
  $input  = array("Bilmasam?","Natashani jiyani","Bugun havo zo‘r-ku a?","Men bilmayman");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

if(stripos($mtext,"Qanaqa") !== false){
  $input  = array("Man qayerdan bilay?","Hech qanaqa 😆","Shunaqa","Bilmasam");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

if((stripos($mtext,"Qaleys") !== false) or (stripos($mtext,"Qalaysan")!==false)  or (stripos($mtext,"Qaliysan")!==false) or (stripos($mtext,"Qaneysan")!==false)  or  (stripos($mtext,"Qanneysan")!==false)){
  $input = array("Cho‘tki 😁","Zo‘r.", "Zo‘r, o‘zingizchi?","Kechagidan  yaxshi 😁","Yaxshi, so‘raganingiz uchun rahmat!", "Zo‘r", "Zo‘r, o‘zingizchi?", "Chidasa bo‘ladi 👌");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Erkamoy") !== false) or (stripos($mtext,"erkamoy") !== false) or (stripos($mtext,"erkaxon") !== false) or (stripos($mtext,"Erik")!==false)){
  $input = array("Qaleysiz?","Har zamonda bir yozib turingda siz ham","Uydagilar erga bervoramiz deb qoymayapti","Profilingizdagi rasm zo‘r 👍","Bugun hamma jim negadir?","Shu ismimni deb hamma meni rus deb o'ylaydi😜","Admin ko'rinmaydimi?","Mbingiz kam qolibdi 😂", "Men shu yerdaman.", "Ho‘v?", "Shunaqa chaqirishingiz juda ham yoqadi-da ☺️", "Nima?", "Menda ishingiz bormi?", "Hozir kimdir meni esladimi?","Tinchgina ovqatlanishga ham qoyishmaydi-de bular","Qulog‘im  sizda!","Labbay?!","Eshitaman?","Hozir kelaman mb kam qolibdi","Salom, biror nima kerakmi?","Shu ismni qayerdadir eshitganman-da 🤔","Ana kapitan");
  $rand=rand(0,14);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if((stripos($mtext,"Rahmat")!==false) or (stripos($mtext,"Raxmat")!== false)){
  $input = array("Arzimaydi 😊","Arziysiz","😊","Rahmatga hojat yo‘q!");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Kimman") !== false){
  $name = $message->from->first_name;
  $input = array("$name bo‘lsangiz kerak yana bilmadim.","O‘zingiz  bilmasangiz, men qayerdan bilaman?!","Betakrorsiz","Ajinagul...degan sinfdoshim esimga tushib ketdi 😢","N1","Kapitan","Ponchik","Kunfu panda","Kim san, Shu serialni kim  ko‘rgan?","Kim bo‘lsangiz  ham avvalo inson bo’ling!","Brucleeni quritilgani 😂","Boyvacha","Eng zo‘risiz","Men qayerdan bilay");
  $rand=rand(0,13);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Kimsan")!== false){
  $name = $message->from->first_name;
  $input = array("N1","Shu savolni eshitsam negadir nickimga hech nima yozilmagan ekan degan hayolga boraman!?","Hazillash robotcha!","Kim deb o‘ylaysiz?","Traktorchi Abdusattorni qo‘shinisi Sobirni amakivachchasiga boja bo‘lgan G‘anisher degan aka bor-ku, o‘sha mashinasiga tonirofka qildiribdi 😜","Kapitan Telegram","Mashaman","Sirliman 🎩","O‘ziz kimsiz?","Har doim shu savolni beraverib charchamadingizmi?","Tinchlikmi kimligim bilan qiziqib qolibsiz?!","Menmi?","Nima edi 😡...Vux qo‘rqib ketdingiz-a?","Leonardo Dekapryo,","Mishani xizmatdosh jo'rasi!");
  $rand=rand(0,13);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(mb_stripos($text,"golos") !== false){ 
$input = array("qanaqa golos","Bemalol Golos Kerakmi","Tanishmaymizmi","Ismim Erkamoy siznikichi","ismiz nima");
  $rand=rand(0,4);
  $soz="$input[$rand]";
$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=uzb&ie=UTF-8&text='.urlencode($soz));
file_put_contents('vo.ogg',$vo);
bot('SendVoice',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'voice'=>new CURLFile('vo.ogg'),
]);
}


if(mb_stripos($text,"xursandman") !== false){ 
$input = array("menam juda xursandman","albatta xursand boling","juda yaxshi","menam","shunaqa deng");
  $rand=rand(0,4);
  $soz="$input[$rand]";
$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text='.urlencode($soz));
file_put_contents('vo.ogg',$vo);
bot('SendVoice',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'voice'=>new CURLFile('vo.ogg'),
]);
}

if(mb_stripos($text,"/ovoz") !== false){ 
$ex = explode(" ",$text);
$ovoz = str_replace("/ovoz","",$text);
$royal_coder = file_get_contents('http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text='.urlencode($ovoz));
file_put_contents('vo.ogg',$royal_coder);
bot('SendVoice',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'voice'=>new CURLFile('vo.ogg'),
'caption'=>"Ovoz: $ovoz",
]);
}
 

$panel=json_encode(['resize_keyboard'=>true,'keyboard'=>[
[['text'=>"📊Statistika"],],
[['text'=>"👥Guruhlarga Xabar Yuborish"],['text'=>"👤A`zolarga Xabar Yuborish"],],
[['text'=>"📃Text Reklama Qilish"],],
]
]);
$lichka=file_get_contents("lichka.db");
$xabar = file_get_contents("lichka.txt");
if($text=="👤A`zolarga Xabar Yuborish" and $cid==$admin){
  bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Userlarga yuboriladigan xabar matnini kiriting!",
    'parse_mode'=>"html",
'reply_markup'=>$back,
]);file_put_contents("lichka.txt","send");
}
if($xabar=="send" and $cid==$admin){
if($text=="🔙Orqaga🔙" or $text=="📃Text Reklama Qilish" or $text=="👥Guruhlarga Xabar Yuborish" or $text=="📊Statistika" or $text=="👤A`zolarga Xabar Yuborish"){
file_put_contents("lichka.txt","stop");
}else{
  $lich = file_get_contents("lichka.db");
  $lichka = explode("\n",$lich);
  foreach($lichka as $lichkalar){
  $okuser=bot("copyMessage",[
    'chat_id'=>$lichkalar,
'from_chat_id'=>$admin,
    'message_id'=>$mid,
    'parse_mode'=>'html',
]);
}
}
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$cid,
    'text'=>"✅Hamma userlarga yuborildi!✅",
    'parse_mode'=>'html','reply_markup'=>$panel,
]);file_put_contents("lichka.txt","oooo");
}
}
if($text=="👥Guruhlarga Xabar Yuborish" and $cid==$admin){
  bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Guruxlarga yuboriladigan xabar matnini kiriting!",
    'parse_mode'=>"html",
'reply_markup'=>$back,
]);file_put_contents("lichka.txt","sendg");
}
if($xabar=="sendg" and $cid==$admin){
if($text=="🔙Orqaga🔙" or $text=="📃Text Reklama Qilish" or $text=="👥Guruhlarga Xabar Yuborish" or $text=="📊Statistika" or $text=="👤A`zolarga Xabar Yuborish"){
file_put_contents("lichka.txt","stop");
}else{
  $lih = file_get_contents("gruppa.db");
  $licka = explode("\n",$lih);
  foreach($licka as $lichklar){
  $oktuser=bot("copyMessage",[
'from_chat_id'=>$admin,
    'chat_id'=>$lichklar,
    'message_id'=>$mid,
    'parse_mode'=>'html',
]);
}
}
if($oktuser){
  bot("sendmessage",[
    'chat_id'=>$cid,
    'text'=>"✅Hamma Gruppaga yuborildi!✅",
    'parse_mode'=>'html','reply_markup'=>$panel,
]);file_put_contents("lichka.txt","oooo");
}
}
if($text=="/admin" or $text=="🔙Orqaga🔙"){
if($cid==$admin){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"ADMIN PANEL✅",'reply_markup'=>$panel,
]);
}}

if($text=="📃Text Reklama Qilish" and $cid==$admin){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📝Matningizni Yuboring!",
'reply_markup'=>$back,
]);file_put_contents("lichka.txt","rek");
}
if($xabar=="rek"){
if($text=="🔙Orqaga🔙" or $text=="📃Text Reklama Qilish" or $text=="👥Guruhlarga Xabar Yuborish" or $text=="📊Statistika" or $text=="👤A`zolarga Xabar Yuborish"){
file_put_contents("lichka.txt","stop");
}else{
file_put_contents("text.txt","$text");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🔘Tugma va Manzilni Namunadek Yuboring!\n⚠️Namuna: Tugma + Manzil",
'reply_markup'=>$rpl,
]);
}}
if($reply=="🔘Tugma va Manzilni Namunadek Yuboring!\n⚠️Namuna: Tugma + Manzil"){
$t=explode(" + ",$text);
$knopka=$t[0];
$ssilka=$t[1];
$sms=file_get_contents("text.txt");
$lich = file_get_contents("lichka.db");
  $lichka = explode("\n",$lich);
  foreach($lichka as $lichkalar){
  $okruser=bot("sendMessage",[
    'chat_id'=>$lichkalar,
'text'=>$sms,
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$knopka,'url'=>$ssilka]],
]
])
]);
}
}
if($okruser){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"Hamma userlarga Textli Reklama yuborildi!✅",
    'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
unlink("text.txt");
}

mkdir("admin");
