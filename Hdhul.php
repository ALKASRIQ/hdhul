<?php  
/* 
 @Hdhul تم كتابة الملف بواسطة
*/ 
ob_start(); 
$API_KEY = "Token";#توكن البوت 
define('API_KEY',$API_KEY); 
echo "<a href='https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."'>setwebhook</a>"; 
echo file_get_contents("https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']); 
function bot($method,$datas=[]){ 
$url = "https://api.telegram.org/bot".API_KEY."/".$method; 
$ch = curl_init(); 
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); 
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas); 
$res = curl_exec($ch); 
if(curl_error($ch)){ 
var_dump(curl_error($ch)); 
}else{return json_decode($res);}} 
$update   = json_decode(file_get_contents('php://input')); 
$message  = $update->message; 
$text     = $message->text; 
$chat_id  = $message->chat->id; 
$name     = $message->from->first_name; 
$user     = $message->from->username; 
$message_id = $update->message->message_id; 
$from_id = $update->message->from->id; 
if($update){ 
    file_put_contents('q.txt',preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", file_get_contents('q.txt'))); 
} 
$from_id = $message->from->id;
$ch = "@alhlaa";#معرف قناتك
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"ـ انڪ لست مشـترڪ فـي قـناة الـبـوت  عليڪ الاشتراك في لقناة لتتمڪن من استخدامـة 📮
قـنـاة الـبـوت :- @alhlaa

بعد الاشتراك ارسل
/start",
]);return false;}

if($text=="/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا بك في بوت جاكو الردود - جاك 🌩🌝

تقدر تحكي معو .💢

وتقدر تضيفه بكروب وصعده ادمن يتفاعل ابدا ما يسكت 😹💔🌸

#بطور 🍂 @Hdhul
",

]);
}
if($text == "هلو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هلوات",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "شلونك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"متلل لونك😕",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "تحبني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حدا يحب قرد😳",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "🌚"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"• فِٰـﮧدِٰيَٰتّٰ صُِخّٰـﮧاَٰمٍٰكٍٰ🙊👄ֆ",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "😹"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"• نٍٰشَُـﮧاَٰلْٰلْٰهَٰہۧ دِٰاَٰيَٰمٍٰـﮧهَٰہۧ😻💘ֆ",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "باي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"• وٍّيَٰـﮧنٍٰ رِٰاَٰيَٰـہحٌٰ خّٰلْٰيَٰنٍٰـﮧهَٰہۧ مٍٰتّٰوٍّنٍٰسٌٍيَٰـﮧنٍٰ🙁💔ֆ",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "🌝"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شو غيرت صورتك شنو تعاركت ويه الحب ؟😹🌝",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "😢"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لضوج حبيبي 😢❤️🍃",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "واو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"قميل 🌝🌿",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "☹"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شكو غيرت الصوره شسالفه ؟؟ 🤔🌞",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "😒"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"• شَُبٌِٰيَٰـﮧكٍٰ كٍٰاَٰلْٰـﮧبٌِٰ خّٰلْٰقٍٰتّٰـﮧكٍٰ😟🐈ֆ",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "🙁"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"• تّٰعٍِّـﮧاَٰلْٰ اَٰشَُكٍٰيَٰلْٰـﮧيَٰ هَٰہۧمٍٰوٍّمٍٰـﮧكٍٰ لْٰيَٰـشَُ • ضاَٰيَٰـﮧجًِّ🙁💔ֆ",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "مطي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
       مااحدا مطي غيرك فرخي 🐸",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "رقمج"or $text== "رقمك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        دي ڵـڱ زاحف تلعب ب آآيـ﴿😂﴾ـڕي",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "هه"or $text=="ههه"or $text== "هههه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        ضحكه قرباط🖕",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "اير"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
      بحلقك",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "😂"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        اضحك يا جحش😪",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "10"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/ghdlga/4",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "😹😹"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/ghdlga/6",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "60"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/ghdlga/7",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تعيينت بمكان العبادي عبالكم سهله تحجون ويه جاك 😌🌱",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "تف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ت๋͜ـ💦๋͜ـفـت๋͜ـ💦๋͜ـفـ💦๋͜ـت๋͜ـ💦ـفوو 💧😹",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "كلب"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مرسي 😂",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "هه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تؤبَشُني هـضحٍڪة☺️❤️",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "تفو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وك ✯تـًًًًًًًًًًً(💦😚)ـًًًًًًًًًًف✯ ✯تـًًًًًًًًًًً(💦😚)ـًًًًًًًًًًفو✯ خخـ﴿😚﴾ـخ تـ﴿💦﴾ـفوو خخـ﴿😚﴾ـخ تـ﴿💦﴾ـفوو خہــ💦ــخــ💦ـــــہٰٰخ تٌـٌـٌـٌ﴿💦﴾ـٌـٌـٌـٌف✟ ِ     
خــ😚ــخــ😚ـخ تــ💦ــفــ💦ــوو خخخ تــ💦😚 ـفووو
  .😚◦°˚˚˚˚˚˚°❍  
<//>
_\\ 
😚💨💨💨💨💨💨💨💨💨💨💦 
<))>
​/\​
خــووــووــووــوو💦💨😚تفــووــو لَـ͡‏ـﮩ﴿😌﴾ﮩ̷̴ِْ̬̩̃ـك تـ💦😙ـف تـ💦😙ـف تـ💦ف
خخخخخخخخخخخخخخخخخخخخخخهخخخخخخخخخخخخخخخخخخختتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتففففففففففففففففففففففففففففففففووووووووووووووووااااااااااااااااااااه💦💦💦💦💦💦💦💦💦☔️☔️☔️☔️☔️خخـ﴿😚﴾ـختـ﴿💦﴾ـفوو ‏​‏​​​​​​‏​تـ💦😙ـف ‏​تِـٌ😙💦💦ـفين ‏​ثلاث تـ😗💦💦💦ـ فات‏​​​​ ‏​تف😙ــٌّوُفه ذغِيرَونهٌ ٌ 🌚💦 💦💦💦🌪💨💨💧💦🌊اسحب اقسام ختفووو💦💦💦💦🌊💦💦🌊💦💦 💦 خـٌٌـٌٌلُـِـِِ😁ــِِـِـُصُ عتاد😹 تفواااا💦💦💦💦 وحدي ضغيرة كمان💦💦💦 وتتتتتتتتفففففففوووووووااااااااه تـ💦😙ـف ‏​تِـٌ😙💦💦ـفين 
‏​ثلاث تـ😗💦💦💦ـفات  ‏​​​​ 
‏​تف😙ـٌـٌّوُفه ذغِيرَونهٌ ٌ 🌚💦",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "مح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"أآمــ۾ـــۣۛ﴿؏خۣۛـۣۛـدودكك🙊﴾ۣۣۙـٰ୭ٰۭۢ୭ٰۭۢ୭ۭۢاحـۣۛـہۢۛ🌸🍃.",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "مححح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"💋 امٌـ﴿💋﴾ـ😘ـ﴿👄ـــوَوَوَاح
لـ﴿ُُُ😍﴾ـصق❥ 
نـ﴿ُُُ😉﴾ـسخ❥ 
كـ﴿😜ُُُ﴾بـس❥
طـ﴿😘ُُُ﴾ـﺒ؏❥
دفـ﴿ُُُ😳﴾ــر❥ 
قـ﴿😌ُُُ﴾ــلع❥
شـ﴿ُُُ😭﴾ــلع❥
رفـ﴿ُُُ☺﴾ــع❥ 
لـ﴿😝ُُُ﴾ـﺢﺲ❥
مـ﴿ُُُ😒﴾ـٍّّْـص❥ 
دفـ﴿😍ُُُ﴾ــع❥
💣بم💣 بم 💣بم💣
💓 بحـہـۣۙ﴿ℓσνє﴾ـبـًّۣہـك 💓 
بٍّــِْ🙊ـٍْمٌِوتًَ بًٌٍــٍْربٍّـ😍ـِِّكٌٍْ 💞💞",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "انام"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نقلع صرعنتا🌚💔",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "حبك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"احّ ـّـٌٍ❣ـٍّبّكَ موتات☹️😹",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "تفل"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"👌تـًًًًًًًًًًً(✟ّ💦💨😚✟)ـــًًًًًًًًًًــفُـٍََُّّّّـوٍِّّ",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "غني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لا تظربني لا تظرب 💃💃 كسرت الخيزارانه💃🎋 صارلي سنه وست اشهر💃💃 من ظربتك وجعانه🤒😹",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "غنيلي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اي مو كدامك مغني قديمه 😒🎋 هوه ﴿↜ انـِۨـۛـِۨـۛـِۨيـُِـٌِہۧۥۛ ֆᵛ͢ᵎᵖ ⌯﴾❥  ربي كامز و تكلي غنيلي 🙄😒🕷 آإرۈحُـ✯ـہ✟  😴أنــ💤ــااااام😴  اشرف تالي وكت يردوني اغني 😒☹️",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "غني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"موجوع كلبي😔والتعب بية☹️من اباوع على روحي😢ينكسر كلبي عليه😭",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "تمام"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دٍّﯝٍّﯝٍّؤٍّؤٍٍٍّّّمٍّ﴿😌 ﴾يٍّـٍـٍٍّّﮱٍٍّّﺂٍٍّّړٍّب",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "تسلم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ٲڵڵــﷻــ☝ــﷻــہ يسلمك ويكتر مصراتك🌚☹️",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "لحن"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/ghdlga/8",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "😂😂"){
bot('sendaudio',[
'chat_id'=>$chat_id, 
'audio'=>"https://t.me/ghdlga/5",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "🙄"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        نزل عـــ⌣̴͡͡د̲⌣̴͡͡ ــيونگ يول🤔",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "😍"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        احمبك",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "المطور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        ناكحكم 😆 الخال(https://telegram.me/hdhul)",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "قول10"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        عشرة",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "غني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        اي مو خدام عند الخلفوك ڵـڱ آآيـ﴿😂﴾ـڕي",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "كول والله"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        والله",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "الخال"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        مطوري هاذ(https://telegram.me/hdhul)",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "خاصكك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        اجي وياكم",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "😎"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        كاشخ الوسخ",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "بوس"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        ما ابوس",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "صباحو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        اجا المطي نزع صباحنا شبدك🔥😪",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "كيفك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        اذا بتروح من هون بصير منيح🌚🤞",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "هلو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        هلوات حبي❤️💋",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "مرحبا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        اهلين مطي🌚👌",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "خراس"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        ادحش بطيزك الرصاص🔥🙈",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "60"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        اطرش امك بالساكين🔥🤞",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "10"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        تعمل حالك شادود حاج تخمط كلايش😏فہــ₰ـ﴿🐸﴾ـ₰ـہرخ",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "شكو ماكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        غيرك بالقلب ماكو❤️💋",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "شد"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        اريۂ﴿ُ🐸✋🏻﴾ـدۦ˛⁽❥₎⇣ زلم تصعد وياي فرخي🤤",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "خليني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        ليش ايمت صار عندك 🙂😑",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "كغ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        تعال ارضعك حليب🍼",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "احبك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        كول كغ",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "خاصك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        عم احكي مع اختك💔🤞",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "خاص"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        من اول مادخلت الكروب عرفتك زاحف😒",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "اكرهك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        مو لرجلي😴🌚",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "تحبني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        هف احبك خلص كول خرا💔",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "جاكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        خراي علي متل ماجيت لعندك😑",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "جاك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        قلب جاك💋😍",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "كول خرا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        خرا يلي يطمرك☹️😹",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        اسمي جاك😴💋",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "كول تف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        ✯تـًًًًًًًًًًً(💦😚)ـًًًًًًًًًًف✯",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "رفع مطي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        العضو تم رفعه مطي مميز",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "تنزيل مطي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        تم تنزيله بنجاح",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);    
}
if($text == "رفع عضو مميز"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        تم رفع العضو عضو مميز بنجاح",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}
if($text == "رفع كحبه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        الكحبه تم رفعها كحبه مميزة",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

if($text == "تنزيل كحبه مميزة"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
        تم تنزيلهاا بنجاح",
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
]);
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$name = $message->from->first_name;
$admins = "340539914";
$data = $update->callback_query->data;
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$admin = "340539914"; /* ايدي المطور */

$from_id = $message->from->id;
$ch = "@معرف قناتك";
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"اهلا بك في بوت جاكو الردود - جاك 🌩🌝

تقدر تحكي معو .💢

وتقدر تضيفه بكروب وصعده ادمن يتفاعل ابدا ما يسكت 😹💔🌸

#بطور 🍂 @Hdhul",
]);
bot("sendmessage",[
    "chat_id"=>$sudo,
    "text"=>"- العضو قام بألاشتراك في  البوت ، 📌
- معلومات العضو الذي قام بألاشتراك ؛

• الاسم ؛ $name 
• الايدي ؛ $from_id
• المعرف ؛ @$username
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎ ",

    ]);return false;}
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
if ($text == "/admin" and $chat_id == $admin ) {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"
☑️￤اهلا عزيزي :- المطور .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
        ]);
}
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
      'text'=>"
☑️￤اهلا عزيزي :- المطور .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
]);
file_put_contents('usr.txt', '');
}
#                   المشتركين                   #
if($data == "co" and $update->callback_query->message->chat->id == $admin ){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"
        عدد مشتركين البوت📢 :- [ $c ] .
        ",
        'show_alert'=>true,
]);
}
#                   رسالة للكل                   #
if($data == "ce" and $update->callback_query->message->chat->id == $admin){ 
    file_put_contents("usr.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    'text'=>"▪️ ارسل رسالتك الان 📩 وسيتم نشرها لـ [ $c ] مشترك . 
   ",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>' الغاء 🚫 •','callback_data'=>'off']]    
        ]
    ])
    ]);
}
if($text and $modxe == "yas" and $chat_id == $admin ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
    file_put_contents("usr.txt","no");

} 
}
include 'rd.php';
$su = ايدي المطور; // sudo id
if (preg_match('/^(اضف)(.*)/', $text) and $message->from->id == $su) {
  $rd = str_replace('اضف ', $rd, $text);
  $ex = explode('\n', $rd);
  if (file_exists('rd.php')) {
    $put = '<?php 
    if ($text == '.$ex[0].') {
      bot(\'sendMessage\',[
        \'chat_id\'=>$chat_id,
        \'text\'=>"'.$ex[1].'"
      ]);
    }';
    file_put_contents('rd.php', $put);
    bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"تم الاضافه",
                ]);
  }
  else {
    $put = "\n".'
    if ($text == '.$ex[0].') {
      bot(\'sendMessage\',[
        \'chat_id\'=>$chat_id,
        \'text\'=>"'.$ex[1].'"
      ]);
    }';
    file_put_contents('rd.php', $put,FILE_APPEND);
    bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"تم الاضافه",
                ]);
  }
}
if($new_member){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$message->message_id, 
'text'=>"<b>نووووورت الكروب  ⚜️🌬</b> 
<b>حـبــℓõ√êـ😍ـ ๓îــي  ➖💎</b>  
<b>لاتغادر حبعمري 🐸🚬 🔉</b>",
'parse_mode'=>"html", 
'reply_to_message_id'=>$message->message_id,
]); 
}
