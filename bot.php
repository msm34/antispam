<?php
ob_start();
define('API_KEY','326704662:AAEeaA2qa2gB7YfEDymgQE2MKoAakadkzQE');
define('group',-1001080988148);
define('admin1',130029829);
define('admin2',130029829);
define('admin3',130029829);
$update = json_decode(file_get_contents('php://input'));
function Request($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
///////////////
function zekhtar($ui){
    $oe1 = fopen("e1.txt", "r");
    $oe2 = fopen("e2.txt", "r");
    $oe3 = fopen("e3.txt", "r");
    $oe4 = fopen("e4.txt", "r");
    $e1 = fread($oe1, filesize("e1.txt"));
    $e2 = fread($oe2, filesize("e2.txt"));
    $e3 = fread($oe3, filesize("e3.txt"));
    $e4 = fread($oe4, filesize("e4.txt"));
    fclose($oe1);
    fclose($oe2);
    fclose($oe3);
    fclose($oe4);
    $e1=str_replace("\n[".$ui."]","",$e1);
    $e2=str_replace("\n[".$ui."]","",$e2);
    $e3=str_replace("\n[".$ui."]","",$e3);
    $e4=str_replace("\n[".$ui."]","",$e4);
    $we1 = fopen("e1.txt", "w") or die("Unable to open file!");
    $we2 = fopen("e2.txt", "w") or die("Unable to open file!");
    $we3 = fopen("e3.txt", "w") or die("Unable to open file!");
    $we4 = fopen("e4.txt", "w") or die("Unable to open file!");
    fwrite($we1, $e1);
    fwrite($we2, $e2);
    fwrite($we3, $e3);
    fwrite($we4, $e4);
    fclose($we1);
    fclose($we2);
    fclose($we3);
    fclose($we4);
    return 0;
}
//////////////
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
//////////////////
function sekhtar($ui){
    $oe1 = fopen("e1.txt", "r");
    $e1 = fread($oe1, filesize("e1.txt"));
    fclose($oe1);
    $filename = 'e1.txt';
    $searchfor = "[".$ui."]";
    $fh = fopen($filename, 'r');
    $olddata = fread($fh, filesize($filename));
    if(strpos($olddata, $searchfor)) {
        $oe2 = fopen("e2.txt", "r");
        $e2 = fread($oe2, filesize("e2.txt"));
        fclose($oe2);
        $filename = 'e2.txt';
        $searchfor = "[".$ui."]";
        $fh = fopen($filename, 'r');
        $olddata = fread($fh, filesize($filename));
        if(strpos($olddata, $searchfor)) {
            ////////////////
            $oe3 = fopen("e3.txt", "r");
            $e3 = fread($oe3, filesize("e3.txt"));
            fclose($oe2);
            $filename = 'e3.txt';
            $searchfor = "[".$ui."]";
            $fh = fopen($filename, 'r');
            $olddata = fread($fh, filesize($filename));
            if(strpos($olddata, $searchfor)) {
                /////////////
                $oe4 = fopen("e4.txt", "r");
                $e4 = fread($oe4, filesize("e4.txt"));
                fclose($oe4);
                $filename = 'e4.txt';
                $searchfor = "[".$ui."]";
                $fh = fopen($filename, 'r');
                $olddata = fread($fh, filesize($filename));
                if(strpos($olddata, $searchfor)) {
                    $e=4;
                }
                else{
                    $e=3;
                }
                ////////////
            }
            else{
                $e=2;
            }
            ///////////////
        }
        else{
            $e=1;
        }
    }
    else{
        $e=0;
    }
    return $e;
}
/////////////////
function ekhtar($ui){
    $oe1 = fopen("e1.txt", "r");
    $e1 = fread($oe1, filesize("e1.txt"));
    fclose($oe1);
    $filename = 'e1.txt';
    $searchfor = "[".$ui."]";
    $fh = fopen($filename, 'r');
    $olddata = fread($fh, filesize($filename));
    if(strpos($olddata, $searchfor)) {
        $oe2 = fopen("e2.txt", "r");
        $e2 = fread($oe2, filesize("e2.txt"));
        fclose($oe2);
        $filename = 'e2.txt';
        $searchfor = "[".$ui."]";
        $fh = fopen($filename, 'r');
        $olddata = fread($fh, filesize($filename));
        if(strpos($olddata, $searchfor)) {
            ////////////////
            $oe3 = fopen("e3.txt", "r");
            $e3 = fread($oe3, filesize("e3.txt"));
            fclose($oe2);
            $filename = 'e3.txt';
            $searchfor = "[".$ui."]";
            $fh = fopen($filename, 'r');
            $olddata = fread($fh, filesize($filename));
            if(strpos($olddata, $searchfor)) {
                /////////////
                $oe4 = fopen("e4.txt", "r");
                $e4 = fread($oe4, filesize("e4.txt"));
                fclose($oe4);
                $filename = 'e4.txt';
                $searchfor = "[".$ui."]";
                $fh = fopen($filename, 'r');
                $olddata = fread($fh, filesize($filename));
                if(strpos($olddata, $searchfor)) {
                    $e=5;
                }
                else{
                    $we4 = fopen("e4.txt", "w") or die("Unable to open file!");
                    $t = $e4."\n[".$ui."]";
                    fwrite($we4, $t);
                    fclose($we4);
                    $e=4;
                }
                ////////////
            }
            else{
                $we3 = fopen("e3.txt", "w") or die("Unable to open file!");
                $t = $e3."\n[".$ui."]";
                fwrite($we3, $t);
                fclose($we3);
                $e=3;
            }
            ///////////////
        }
        else{
            $we2 = fopen("e2.txt", "w") or die("Unable to open file!");
            $t = $e2."\n[".$ui."]";
            fwrite($we2, $t);
            fclose($we2);
            $e=2;
        }
    }
    else{
        $we1 = fopen("e1.txt", "w") or die("Unable to open file!");
        $t = $e1."\n[".$ui."]";
        fwrite($we1, $t);
        fclose($we1);
        $e=1;
    }
    return $e;
}
    $text = $update->message->text;
if($update->message->chat->id== group)
{
    if($update->message->from->id== admin1 || $update->message->from->id==admin2 || $update->message->from->id==admin3){
		if (stripos($text, "#ارسال") !== false) {
			 $text=str_replace("#ارسال","",$text);
			Request('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>$text.'
__________________________
طراح  <a href="https://telegram.me/site_sazi">site_sazi</a>',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
        		return false;
		}
		if ($text=="#راهنما"){
			Request('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'سلام '.$update->message->chat->first_name.' عزیز 😍
#اارسال -برای-> ارسال متن به صورت html
#رفع -برای-> رفع مسدودی کاربر
#اخراج -برای-> اخراج کردن کاربر
#بن -برای-> بن کردن کابر
#تعداد_اخطار -برای-> ارسال تعداد اخطار های کاربر
#اخطار -برای-> اخطار دادن به کاربر
#اخطار_صفر -برای-> صفر کردن اخطار های کاربر',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
        		return false;
		}
		if (stripos($text, "#رفع") !== false) {
			 $text=str_replace("#رفع ","",$text);
			Request('unbanChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$text
        		]);
			Request('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'انجام شد 😉',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
        		return false;
		}
		if (stripos($text, "#اخراج") !== false) {
			 $text=str_replace("#اخراج ","",$text);
			Request('kickChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$text
        		]);
			Request('unbanChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$text
        		]);
			Request('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'کاربر با موفقیت اخراج شد 😉',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
        		return false;
		}
		if (stripos($text, "#بن") !== false) {
			 $text=str_replace("#بن ","",$text);
			Request('kickChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$text
        		]);
			Request('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'کاربر با موفقیت بن شد 😉',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
        		return false;
		}
		if (stripos($text, "#تعداد_اخطار") !== false) {
			 $text=str_replace("#تعداد_اخطار ","",$text);
			Request('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'تعداد اخطار های کاربر [ '.$text.' ] برابر با '.sekhtar($text).' میباشد',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
        		return false;
		}
		if (stripos($text, "#اخطار_صفر") !== false) {
			 $text=str_replace("#اخطار_صفر ","",$text);
			Request('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'اخطار های کاربر [ '.$text.' ] برابر با '.zekhtar($text).' شد',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
        		return false;
		}
		if (stripos($text, "#اخطار") !== false) {
			 $text=str_replace("#اخطار ","",$text);
			$e=ekhtar($text);
			Request('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'انجام شد 😉
نعداد اخطار های کاربر [ '.$text.' ] برابر با '.$e.' میباشد',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
			if($e==5){
        			Request('kickChatMember',[
            			'chat_id'=>$update->message->chat->id,
            			'user_id'=>$update->message->from->id
        			]);
			}
        		return false;
		}
	}
	else{
		if (stripos($text, "#سوال") !== false || stripos($text, "#جواب") !== false || stripos($text, "#متن") !== false || stripos($text, "#q") !== false || stripos($text, "#a") !== false || stripos($text, "#t") !== false) {
			if (stripos($text, "www.") !== false || stripos($text, ".ir") !== false || stripos($text, ".com") !== false || stripos($text, "WWW.") !== false || stripos($text, "WWw.") !== false || stripos($text, "Www.") !== false || stripos($text, "WwW.") !== false || stripos($text, "wWW.") !== false || stripos($text, "wWw.") !== false || stripos($text, "wwW.") !== false || stripos($text, ".IR") !== false || stripos($text, ".iR") !== false || stripos($text, ".Ir") !== false || stripos($text, ".Com") !== false || stripos($text, ".cOm") !== false || stripos($text, ".coM") !== false || stripos($text, ".COm") !== false || stripos($text, ".CoM") !== false || stripos($text, ".cOM") !== false || stripos($text, ".COM") !== false || stripos($text, ".in") !== false || stripos($text, ".org") !== false || stripos($text, ".xyz") !== false || stripos($text, ".me") !== false || stripos($text, ".net") !== false || stripos($text, ".pro") !== false) {
$e=ekhtar($update->message->from->id);
Request('sendChatAction',[
'chat_id'=>$update->message->chat->id,
'action'=>'typing'
]);
			        	Request('sendMessage',[
            				'chat_id'=>$update->message->chat->id,
            				'text'=>'🚫 ارسال لینک ممنوع است 🚫
شما 1 اخطار دریافت کردید 
تعداد اخطار های شما :'.$e,
            				'parse_mode'=>'HTML',
            				'reply_to_message_id'=>$update->message->message_id,
            				'disable_web_page_preview'=>true
        				]);
				if($e==5){
        				Request('kickChatMember',[
            				'chat_id'=>$update->message->chat->id,
            				'user_id'=>$update->message->from->id
        				]);
				}
        			return false;
			}
		
			elseif (stripos($text, "هک") !== false) {
Request('sendChatAction',[
'chat_id'=>$update->message->chat->id,
'action'=>'typing'
]);
$e=ekhtar($update->message->from->id);
			        	Request('sendMessage',[
            				'chat_id'=>$update->message->chat->id,
            				'text'=>'🚫 گفتگو درمورد هک و امنیت ممنوع است 🚫
شما 1 اخطار دریافت کردید 
تعداد اخطار های شما :'.$e,
            				'parse_mode'=>'HTML',
            				'reply_to_message_id'=>$update->message->message_id,
            				'disable_web_page_preview'=>true
        				]);
				if($e==5){
        				Request('kickChatMember',[
            				'chat_id'=>$update->message->chat->id,
            				'user_id'=>$update->message->from->id
        				]);
				}
        			return false;
			}
		}
		elseif($text=="#راهنما"){
Request('sendChatAction',[
'chat_id'=>$update->message->chat->id,
'action'=>'typing'
]);
				
			        Request('sendMessage',[
            			'chat_id'=>$update->message->chat->id,
            			'text'=>'تگ های فارسی :
#متن  برای متن
#سوال  برای سوال
#جواب  هم برای جواب
English Tag :
#t For Text
#q For Question
#a For Answer',
            			'parse_mode'=>'HTML',
            			'parse_mode'=>'HTML',
            			'reply_to_message_id'=>$update->message->message_id,
            			'disable_web_page_preview'=>true
        			]);
        		return false;
		}
		elseif($text=="#قوانین"){
Request('sendChatAction',[
'chat_id'=>$update->message->chat->id,
'action'=>'typing'
]);
				
			        Request('sendMessage',[
            			'chat_id'=>$update->message->chat->id,
            			'text'=>'🚫➿ ارسال پیام بدون استفاده از تگ ها ممنوع ( برای اطلاع از تگ ها #راهنما را ارسال کنید )➿🚫
🚫تبلیغات گروه و کانال به هرنحو ممنوع🚫
🚫سلام و احوال پرسی و حاشیه رفتن ممنوع🚫
🚫لینک دادن به سایت و ... دیگه ممنوع🚫
🚫جر و بحث بر سر برتر بودن زبان و IDE ها ممنوع🚫
🚫گفتگو درمورد هک و امنیت ممنوع🚫
🚫فحاشی و بی ادبی به اعضا ممنوع🚫
🚫تبادل پکیج و خرید فروش فایل و ... ممنوع🚫
🚫تکه تکه پیام دادن ممنوع🚫
🚫ارسال مطلب و ... که به گروه مربوط نیست ممنوع🚫
🚫پیغام های JustEmoji ممنوع🚫
🚫ارسال استیکر نامربوط به گروه ممنوع🚫
🔖در صورت رعایت نکردن موارد بالا , اخطار میگیرید و بعد از ۵ اخطار اخراج میشید🔖
➿مدیریت سرزمین برنامه نویسان➿',
            			'parse_mode'=>'HTML',
            			'parse_mode'=>'HTML',
            			'reply_to_message_id'=>$update->message->message_id,
            			'disable_web_page_preview'=>true
        			]);
        		return false;
		}
		elseif($text=="#تعداد_اخطار"){
Request('sendChatAction',[
'chat_id'=>$update->message->chat->id,
'action'=>'typing'
]);
				
			        Request('sendMessage',[
            			'chat_id'=>$update->message->chat->id,
            			'text'=>'تعداد اخطار های شما [ '.$update->message->from->id.' ] برابر با '.sekhtar($text).' میباشد',
            			'parse_mode'=>'HTML',
            			'parse_mode'=>'HTML',
            			'reply_to_message_id'=>$update->message->message_id,
            			'disable_web_page_preview'=>true
        			]);
        		return false;
		}
		elseif($text!==Null){
Request('sendChatAction',[
'chat_id'=>$update->message->chat->id,
'action'=>'typing'
]);
				
$e=ekhtar($update->message->from->id);
			        Request('sendMessage',[
            			'chat_id'=>$update->message->chat->id,
            			'text'=>'به دلیل عدم رعایت قوانین 😡
شما 1 اخطار دریافت کردید 
تعداد اخطار های شما :'.$e,
            			'parse_mode'=>'HTML',
            			'parse_mode'=>'HTML',
            			'reply_to_message_id'=>$update->message->message_id,
            			'disable_web_page_preview'=>true
        			]);
			if($e==5){
        			Request('kickChatMember',[
            			'chat_id'=>$update->message->chat->id,
            			'user_id'=>$update->message->from->id
        			]);
			}
        		return false;
		}
	}
}
else{
Request('sendChatAction',[
'chat_id'=>$update->message->chat->id,
'action'=>'typing'
]);
      if($text=="/start"){
        Request('sendMessage',[
            'chat_id'=>$update->message->chat->id,
            'text'=>'سلام '.$update->message->chat->first_name.' عزیز 😍
__________________________
<a href="https://telegram.me/site_sazi">طراحی ربات آنتی اسپم برای شما</a>
__________________________
Coded With ❤️ by <a href="https://telegram.me/site_sazi">site_sazi</a> 😉',
            'parse_mode'=>'HTML',
            'disable_web_page_preview'=>true
        ]);
        return false;
}
else{
	Request('sendMessage',[
            'chat_id'=>$update->message->chat->id,
            'text'=>$text.'
__________________________
😉 طراحی <a href="https://telegram.me/site_sazi">ارزان</a>',
            'parse_mode'=>'HTML',
            'disable_web_page_preview'=>true
        ]);
        return false;
}
}
