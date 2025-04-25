<?php 

/**
  * Function to create custom url
  * uses site_url() function
  *
  * @param string $url any slug
  *
  * @return string site_url
  * 
  */
if (!function_exists('url')) {

	function url($url='')
	{
		return site_url($url);
	}

}

/**
  * Function to get url of assets folder
  *
  * @param string $url any slug 
  *
  * @return string url
  * 
  */
if (!function_exists('assets_url')) {

	function assets_url($url='')
	{
		return base_url('assets/'.$url);
	}

}

/**
  * Function to get url of upload folder
  *
  * @param string $url any slug 
  *
  * @return string url
  * 
  */
if (!function_exists('urlUpload')) {

	function urlUpload($url='', $time = false)
	{
		return base_url('uploads/'.$url).($time ? '?'.time() : '');
	}

}

/**
  * Function for user profile url
  *
  * @param string $id - user id of the user
  *
  * @return string profile url
  * 
  */
if (!function_exists('userProfile')) {

	function userProfile($id)
	{
		$CI =& get_instance();

		$url = urlUpload('users/'.$id.'.png?'.time());

		if($id!='default')
			$url = urlUpload('users/'.$id.'.'.$CI->users_model->getRowById($id, 'img_type').'?'.time());

		return $url;
	}

}




/**
  * Function to check and get 'post' request
  *
  * @param string $key - key to check in 'post' request
  *
  * @return string value - uses codeigniter Input library 
  * 
  */
if (!function_exists('post')) {

	function post($key)
	{
		$CI =& get_instance();
		return !empty($CI->input->post($key, true)) ? $CI->input->post($key, true) : false;
	}

}

/**
  * Function to check and get 'get' request
  *
  * @param string $key - key to check in 'get' request
  *
  * @return string value - uses codeigniter Input library 
  * 
  */
if (!function_exists('get')) {

	function get($key)
	{
		$CI =& get_instance();
		return !empty($CI->input->get($key, true)) ? $CI->input->get($key, true) : false;
	}


}

/**
  * Die/Stops the request if its not a 'post' requetst type
  *
  * @return boolean
  * 
  */
if (!function_exists('postAllowed')) {

	function postAllowed()
	{
		$CI =& get_instance();
		if(count($CI->input->post()) <= 0)
			die('Invalid Request');

		return true;

	}


}


/**
  * Function to dump the passed data
  * Die & Dumps the whole data passed
  *
  * uses - var_dump & die together
  *
  * @param all $key - All Accepted - string,int,boolean,etc
  *
  * @return boolean
  * 
  */
if (!function_exists('dd')) {

	function dd($key)
	{
		die(var_dump($key));
		return true;
	}


}


/**
  * Function to check if the user is loggedIn
  *
  * @return boolean
  * 
  */
if (!function_exists('is_logged')) {

	function is_logged()
	{
		$CI =& get_instance();

		$login_token_match = false;

		$isLogged = !empty($CI->session->userdata('login')) &&  !empty($CI->session->userdata('logged')) ? (object) $CI->session->userdata('logged') : false;
		$_token = $isLogged && !empty($CI->session->userdata('login_token')) ? $CI->session->userdata('login_token') : false;

		if(!$isLogged){
			$isLogged = get_cookie('login') && !empty(get_cookie('logged')) ? json_decode(get_cookie('logged')): false;
			$_token = $isLogged && !empty(get_cookie('login_token')) ? get_cookie('login_token') : false;
		}

		if($isLogged){
			$user = $CI->users_model->getById( $CI->db->escape((int) $isLogged->id) );
			// verify login_token
			$login_token_match = (sha1($user->id.$user->password.$isLogged->time) == $_token);
		}

		return $isLogged && $login_token_match;
	}


}


/**
  * Function that returns the data of loggedIn user
  *
  * @param string $key Any key/Column name that exists in users table
  *
  * @return boolean
  * 
  */
if (!function_exists('logged')) {

	function logged($key = false)
	{
		$CI =& get_instance();

		if(!is_logged())
			return false;

		$logged = !empty($CI->session->userdata('login')) ? $CI->users_model->getById($CI->session->userdata('logged')['id']) : false;

		if(!$logged){
			$logged = $CI->users_model->getById( json_decode(get_cookie('logged'))->id );
		}

		return (!$key)?$logged:$logged->{$key};

	}


}

/**
  * Returns Path of view
  *
  * @param string $path - path/file info
  *
  * @return boolean
  * 
  */
if (!function_exists('viewPath')) {

	function viewPath($path)
	{
		return VIEWPATH.'/'.$path.'.php';
	}


}

/**
  * Returns Path of view
  *
  * @param string $date any format
  *
  * @return string date format Y-m-d that most mysql db supports
  * 
  */
if (!function_exists('DateFomatDb')) {

	function DateFomatDb($date)
	{
		return date( 'Y-m-d', strtotime($date));
	}


}

/**
  * Currency formating
  *
  * @param int/float/string $amount
  *
  * @return string $amount formated amount with currency symbol
  * 
  */
if (!function_exists('currency')) {

	function currency($amount)
	{
		return '$ '. $amount;
	}


}

/**
  * Find & returns the vlaue if exists in db
  *
  * @param string $key key which is used to check in db - Refrence: settings table - key column
  *
  * @return string/boolean $value if exists value else false
  * 
  */
if (!function_exists('setting')) {

	function setting($key = '')
	{
		$CI =& get_instance();
		return !empty($value = $CI->settings_model->getValueByKey($key)) ? $value : false;
	}


}


/**
  * Generates teh html for breadcrumb - Supports AdminLte
  *
  * @param array $args Array of values
  * 
  */
if (!function_exists('breadcrumb')) {

	function breadcrumb($args = '')
	{
		$html = '<ol class="breadcrumb">';
		$i = 0;
		foreach ($args as $key => $value) {
			if(count($args) < $i)
				$html .= '<li><a href="'.url($key).'">'.$value.'</a></li>';
			else
				$html .= '<li class="active">'.$value.'</li>';
			$i++;
		}
		    
		    
		$html .= '</ol>';
		echo $html;
	}


}


/**
  * Finds and return the ipaddres of client user
  *
  * @param array $ipaddress IpAddress
  * 
  */
if (!function_exists('ip_address')) {

	function ip_address() {
	    $ipaddress = '';
	    if (isset($_SERVER['HTTP_CLIENT_IP']))
	        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED'];
	    else if(isset($_SERVER['REMOTE_ADDR']))
	        $ipaddress = $_SERVER['REMOTE_ADDR'];
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}

}

/**
  * Provides the shortcodes which are available in any email template
  *
  * @return array $data Array of shortcodes
  * 
  */
if (!function_exists('getEmailShortCodes')) {

	function getEmailShortCodes() {

		$data = [
			'site_url' => site_url(),
			'company_name' => setting('company_name'),
		];

		return $data;
	}

}




/**
  * Redirects with error if user doesnt have the permission to passed key/module
  *
  * @param string $code Code permissions
  * 
  * @return boolean true/false
  * 
  */
if (!function_exists('ifPermissions')) {

	function ifPermissions($code = '') {

		$CI =& get_instance();

		if ( hasPermissions($code) ) {
			return true;
		}

		;

		redirect('errors/permission_denied');
		die;

		return false;
	}

}

/**
  * Check and return boolean if user have the permission to passed key or not
  *
  * @param string $code Code permissions
  * 
  * @return boolean true/false
  * 
  */
if (!function_exists('hasPermissions')) {

	function hasPermissions($code = '') {

		$CI =& get_instance();

		if ( !empty( $CI->role_permissions_model->getByWhere([ 'role' => logged('role'), 'permission' => $code ]) ) ) {

			return true;
			
		}

		return false;

	}

}

/**
  * Redirects with error if user doesnt have the permission to passed key/module
  *
  * @param string $code Code permissions
  * 
  * @return boolean true/false
  * 
  */
if (!function_exists('notAllowedDemo')) {

	function notAllowedDemo($url = '') {

		$CI =& get_instance();

		$CI->session->set_flashdata('alert-type', 'danger');
		$CI->session->set_flashdata('alert', 'This action is disabled in <strong>Demo</strong> !');

		redirect($url);

		return false;
	}

}

/**
  * Hides Some Characters in Email. Basically Used in Forget Password System
  *
  * @param string $email Email 
  * 
  * @return string
  * 
  */
if (!function_exists('obfuscate_email')) {

	function obfuscate_email($email) {

		$em   = explode("@",$email);
	    $name = implode(array_slice($em, 0, count($em)-1), '@');
	    $len  = floor(strlen($name)/2);

	    return substr($name,0, $len) . str_repeat('*', $len) . "@" . end($em);  
	
	}

}


/**
  * return language code
  *
  * @return string
  * 
  */
  if (!function_exists('getUserlang')) {

	function getUserlang() {

	    return !empty( get_cookie('current_lang', true) ) ? get_cookie('current_lang', true) : setting('default_lang');
	
	}

}


/**
  * return language code
  *
  * @return string
  * 
  */
  if (!function_exists('setUserlang')) {

	function setUserlang($code) {

	    return set_cookie('current_lang', $code, 86400*30);
		// set_cookie())
	
	}

}


function supported_languages()
{

	$supported_languages = json_decode('{
		"en":{
			"name":"English",
			"nativeName":"english"
		},
		"es":{
			"name":"Spanish",
			"nativeName":"español"
		},
		"hi":{
			"name":"Hindi",
			"nativeName":"हिन्दी"
		}
	}');
	

	$all_languages = json_decode('{
		"ab":{
			"name":"Abkhaz",
			"nativeName":"аҧсуа"
		},
		"aa":{
			"name":"Afar",
			"nativeName":"Afaraf"
		},
		"af":{
			"name":"Afrikaans",
			"nativeName":"Afrikaans"
		},
		"ak":{
			"name":"Akan",
			"nativeName":"Akan"
		},
		"sq":{
			"name":"Albanian",
			"nativeName":"Shqip"
		},
		"am":{
			"name":"Amharic",
			"nativeName":"አማርኛ"
		},
		"ar":{
			"name":"Arabic",
			"nativeName":"العربية"
		},
		"an":{
			"name":"Aragonese",
			"nativeName":"Aragonés"
		},
		"hy":{
			"name":"Armenian",
			"nativeName":"Հայերեն"
		},
		"as":{
			"name":"Assamese",
			"nativeName":"অসমীয়া"
		},
		"av":{
			"name":"Avaric",
			"nativeName":"авар мацӀ, магӀарул мацӀ"
		},
		"ae":{
			"name":"Avestan",
			"nativeName":"avesta"
		},
		"ay":{
			"name":"Aymara",
			"nativeName":"aymar aru"
		},
		"az":{
			"name":"Azerbaijani",
			"nativeName":"azərbaycan dili"
		},
		"bm":{
			"name":"Bambara",
			"nativeName":"bamanankan"
		},
		"ba":{
			"name":"Bashkir",
			"nativeName":"башҡорт теле"
		},
		"eu":{
			"name":"Basque",
			"nativeName":"euskara, euskera"
		},
		"be":{
			"name":"Belarusian",
			"nativeName":"Беларуская"
		},
		"bn":{
			"name":"Bengali",
			"nativeName":"বাংলা"
		},
		"bh":{
			"name":"Bihari",
			"nativeName":"भोजपुरी"
		},
		"bi":{
			"name":"Bislama",
			"nativeName":"Bislama"
		},
		"bs":{
			"name":"Bosnian",
			"nativeName":"bosanski jezik"
		},
		"br":{
			"name":"Breton",
			"nativeName":"brezhoneg"
		},
		"bg":{
			"name":"Bulgarian",
			"nativeName":"български език"
		},
		"my":{
			"name":"Burmese",
			"nativeName":"ဗမာစာ"
		},
		"ca":{
			"name":"Catalan; Valencian",
			"nativeName":"Català"
		},
		"ch":{
			"name":"Chamorro",
			"nativeName":"Chamoru"
		},
		"ce":{
			"name":"Chechen",
			"nativeName":"нохчийн мотт"
		},
		"ny":{
			"name":"Chichewa; Chewa; Nyanja",
			"nativeName":"chiCheŵa, chinyanja"
		},
		"zh":{
			"name":"Chinese",
			"nativeName":"中文 (Zhōngwén), 汉语, 漢語"
		},
		"cv":{
			"name":"Chuvash",
			"nativeName":"чӑваш чӗлхи"
		},
		"kw":{
			"name":"Cornish",
			"nativeName":"Kernewek"
		},
		"co":{
			"name":"Corsican",
			"nativeName":"corsu, lingua corsa"
		},
		"cr":{
			"name":"Cree",
			"nativeName":"ᓀᐦᐃᔭᐍᐏᐣ"
		},
		"hr":{
			"name":"Croatian",
			"nativeName":"hrvatski"
		},
		"cs":{
			"name":"Czech",
			"nativeName":"česky, čeština"
		},
		"da":{
			"name":"Danish",
			"nativeName":"dansk"
		},
		"dv":{
			"name":"Divehi; Dhivehi; Maldivian;",
			"nativeName":"ދިވެހި"
		},
		"nl":{
			"name":"Dutch",
			"nativeName":"Nederlands, Vlaams"
		},
		"en":{
			"name":"English",
			"nativeName":"English"
		},
		"eo":{
			"name":"Esperanto",
			"nativeName":"Esperanto"
		},
		"et":{
			"name":"Estonian",
			"nativeName":"eesti, eesti keel"
		},
		"ee":{
			"name":"Ewe",
			"nativeName":"Eʋegbe"
		},
		"fo":{
			"name":"Faroese",
			"nativeName":"føroyskt"
		},
		"fj":{
			"name":"Fijian",
			"nativeName":"vosa Vakaviti"
		},
		"fi":{
			"name":"Finnish",
			"nativeName":"suomi, suomen kieli"
		},
		"fr":{
			"name":"French",
			"nativeName":"français, langue française"
		},
		"ff":{
			"name":"Fula; Fulah; Pulaar; Pular",
			"nativeName":"Fulfulde, Pulaar, Pular"
		},
		"gl":{
			"name":"Galician",
			"nativeName":"Galego"
		},
		"ka":{
			"name":"Georgian",
			"nativeName":"ქართული"
		},
		"de":{
			"name":"German",
			"nativeName":"Deutsch"
		},
		"el":{
			"name":"Greek, Modern",
			"nativeName":"Ελληνικά"
		},
		"gn":{
			"name":"Guaraní",
			"nativeName":"Avañeẽ"
		},
		"gu":{
			"name":"Gujarati",
			"nativeName":"ગુજરાતી"
		},
		"ht":{
			"name":"Haitian; Haitian Creole",
			"nativeName":"Kreyòl ayisyen"
		},
		"ha":{
			"name":"Hausa",
			"nativeName":"Hausa, هَوُسَ"
		},
		"he":{
			"name":"Hebrew (modern)",
			"nativeName":"עברית"
		},
		"hz":{
			"name":"Herero",
			"nativeName":"Otjiherero"
		},
		"hi":{
			"name":"Hindi",
			"nativeName":"हिन्दी, हिंदी"
		},
		"ho":{
			"name":"Hiri Motu",
			"nativeName":"Hiri Motu"
		},
		"hu":{
			"name":"Hungarian",
			"nativeName":"Magyar"
		},
		"ia":{
			"name":"Interlingua",
			"nativeName":"Interlingua"
		},
		"id":{
			"name":"Indonesian",
			"nativeName":"Bahasa Indonesia"
		},
		"ie":{
			"name":"Interlingue",
			"nativeName":"Originally called Occidental; then Interlingue after WWII"
		},
		"ga":{
			"name":"Irish",
			"nativeName":"Gaeilge"
		},
		"ig":{
			"name":"Igbo",
			"nativeName":"Asụsụ Igbo"
		},
		"ik":{
			"name":"Inupiaq",
			"nativeName":"Iñupiaq, Iñupiatun"
		},
		"io":{
			"name":"Ido",
			"nativeName":"Ido"
		},
		"is":{
			"name":"Icelandic",
			"nativeName":"Íslenska"
		},
		"it":{
			"name":"Italian",
			"nativeName":"Italiano"
		},
		"iu":{
			"name":"Inuktitut",
			"nativeName":"ᐃᓄᒃᑎᑐᑦ"
		},
		"ja":{
			"name":"Japanese",
			"nativeName":"日本語 (にほんご／にっぽんご)"
		},
		"jv":{
			"name":"Javanese",
			"nativeName":"basa Jawa"
		},
		"kl":{
			"name":"Kalaallisut, Greenlandic",
			"nativeName":"kalaallisut, kalaallit oqaasii"
		},
		"kn":{
			"name":"Kannada",
			"nativeName":"ಕನ್ನಡ"
		},
		"kr":{
			"name":"Kanuri",
			"nativeName":"Kanuri"
		},
		"ks":{
			"name":"Kashmiri",
			"nativeName":"कश्मीरी, كشميري‎"
		},
		"kk":{
			"name":"Kazakh",
			"nativeName":"Қазақ тілі"
		},
		"km":{
			"name":"Khmer",
			"nativeName":"ភាសាខ្មែរ"
		},
		"ki":{
			"name":"Kikuyu, Gikuyu",
			"nativeName":"Gĩkũyũ"
		},
		"rw":{
			"name":"Kinyarwanda",
			"nativeName":"Ikinyarwanda"
		},
		"ky":{
			"name":"Kirghiz, Kyrgyz",
			"nativeName":"кыргыз тили"
		},
		"kv":{
			"name":"Komi",
			"nativeName":"коми кыв"
		},
		"kg":{
			"name":"Kongo",
			"nativeName":"KiKongo"
		},
		"ko":{
			"name":"Korean",
			"nativeName":"한국어 (韓國語), 조선말 (朝鮮語)"
		},
		"ku":{
			"name":"Kurdish",
			"nativeName":"Kurdî, كوردی‎"
		},
		"kj":{
			"name":"Kwanyama, Kuanyama",
			"nativeName":"Kuanyama"
		},
		"la":{
			"name":"Latin",
			"nativeName":"latine, lingua latina"
		},
		"lb":{
			"name":"Luxembourgish, Letzeburgesch",
			"nativeName":"Lëtzebuergesch"
		},
		"lg":{
			"name":"Luganda",
			"nativeName":"Luganda"
		},
		"li":{
			"name":"Limburgish, Limburgan, Limburger",
			"nativeName":"Limburgs"
		},
		"ln":{
			"name":"Lingala",
			"nativeName":"Lingála"
		},
		"lo":{
			"name":"Lao",
			"nativeName":"ພາສາລາວ"
		},
		"lt":{
			"name":"Lithuanian",
			"nativeName":"lietuvių kalba"
		},
		"lu":{
			"name":"Luba-Katanga",
			"nativeName":""
		},
		"lv":{
			"name":"Latvian",
			"nativeName":"latviešu valoda"
		},
		"gv":{
			"name":"Manx",
			"nativeName":"Gaelg, Gailck"
		},
		"mk":{
			"name":"Macedonian",
			"nativeName":"македонски јазик"
		},
		"mg":{
			"name":"Malagasy",
			"nativeName":"Malagasy fiteny"
		},
		"ms":{
			"name":"Malay",
			"nativeName":"bahasa Melayu, بهاس ملايو‎"
		},
		"ml":{
			"name":"Malayalam",
			"nativeName":"മലയാളം"
		},
		"mt":{
			"name":"Maltese",
			"nativeName":"Malti"
		},
		"mi":{
			"name":"Māori",
			"nativeName":"te reo Māori"
		},
		"mr":{
			"name":"Marathi (Marāṭhī)",
			"nativeName":"मराठी"
		},
		"mh":{
			"name":"Marshallese",
			"nativeName":"Kajin M̧ajeļ"
		},
		"mn":{
			"name":"Mongolian",
			"nativeName":"монгол"
		},
		"na":{
			"name":"Nauru",
			"nativeName":"Ekakairũ Naoero"
		},
		"nv":{
			"name":"Navajo, Navaho",
			"nativeName":"Diné bizaad, Dinékʼehǰí"
		},
		"nb":{
			"name":"Norwegian Bokmål",
			"nativeName":"Norsk bokmål"
		},
		"nd":{
			"name":"North Ndebele",
			"nativeName":"isiNdebele"
		},
		"ne":{
			"name":"Nepali",
			"nativeName":"नेपाली"
		},
		"ng":{
			"name":"Ndonga",
			"nativeName":"Owambo"
		},
		"nn":{
			"name":"Norwegian Nynorsk",
			"nativeName":"Norsk nynorsk"
		},
		"no":{
			"name":"Norwegian",
			"nativeName":"Norsk"
		},
		"ii":{
			"name":"Nuosu",
			"nativeName":"ꆈꌠ꒿ Nuosuhxop"
		},
		"nr":{
			"name":"South Ndebele",
			"nativeName":"isiNdebele"
		},
		"oc":{
			"name":"Occitan",
			"nativeName":"Occitan"
		},
		"oj":{
			"name":"Ojibwe, Ojibwa",
			"nativeName":"ᐊᓂᔑᓈᐯᒧᐎᓐ"
		},
		"cu":{
			"name":"Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic",
			"nativeName":"ѩзыкъ словѣньскъ"
		},
		"om":{
			"name":"Oromo",
			"nativeName":"Afaan Oromoo"
		},
		"or":{
			"name":"Oriya",
			"nativeName":"ଓଡ଼ିଆ"
		},
		"os":{
			"name":"Ossetian, Ossetic",
			"nativeName":"ирон æвзаг"
		},
		"pa":{
			"name":"Panjabi, Punjabi",
			"nativeName":"ਪੰਜਾਬੀ, پنجابی‎"
		},
		"pi":{
			"name":"Pāli",
			"nativeName":"पाऴि"
		},
		"fa":{
			"name":"Persian",
			"nativeName":"فارسی"
		},
		"pl":{
			"name":"Polish",
			"nativeName":"polski"
		},
		"ps":{
			"name":"Pashto, Pushto",
			"nativeName":"پښتو"
		},
		"pt":{
			"name":"Portuguese",
			"nativeName":"Português"
		},
		"qu":{
			"name":"Quechua",
			"nativeName":"Runa Simi, Kichwa"
		},
		"rm":{
			"name":"Romansh",
			"nativeName":"rumantsch grischun"
		},
		"rn":{
			"name":"Kirundi",
			"nativeName":"kiRundi"
		},
		"ro":{
			"name":"Romanian, Moldavian, Moldovan",
			"nativeName":"română"
		},
		"ru":{
			"name":"Russian",
			"nativeName":"русский язык"
		},
		"sa":{
			"name":"Sanskrit (Saṁskṛta)",
			"nativeName":"संस्कृतम्"
		},
		"sc":{
			"name":"Sardinian",
			"nativeName":"sardu"
		},
		"sd":{
			"name":"Sindhi",
			"nativeName":"सिन्धी, سنڌي، سندھی‎"
		},
		"se":{
			"name":"Northern Sami",
			"nativeName":"Davvisámegiella"
		},
		"sm":{
			"name":"Samoan",
			"nativeName":"gagana faa Samoa"
		},
		"sg":{
			"name":"Sango",
			"nativeName":"yângâ tî sängö"
		},
		"sr":{
			"name":"Serbian",
			"nativeName":"српски језик"
		},
		"gd":{
			"name":"Scottish Gaelic; Gaelic",
			"nativeName":"Gàidhlig"
		},
		"sn":{
			"name":"Shona",
			"nativeName":"chiShona"
		},
		"si":{
			"name":"Sinhala, Sinhalese",
			"nativeName":"සිංහල"
		},
		"sk":{
			"name":"Slovak",
			"nativeName":"slovenčina"
		},
		"sl":{
			"name":"Slovene",
			"nativeName":"slovenščina"
		},
		"so":{
			"name":"Somali",
			"nativeName":"Soomaaliga, af Soomaali"
		},
		"st":{
			"name":"Southern Sotho",
			"nativeName":"Sesotho"
		},
		"es":{
			"name":"Spanish; Castilian",
			"nativeName":"español, castellano"
		},
		"su":{
			"name":"Sundanese",
			"nativeName":"Basa Sunda"
		},
		"sw":{
			"name":"Swahili",
			"nativeName":"Kiswahili"
		},
		"ss":{
			"name":"Swati",
			"nativeName":"SiSwati"
		},
		"sv":{
			"name":"Swedish",
			"nativeName":"svenska"
		},
		"ta":{
			"name":"Tamil",
			"nativeName":"தமிழ்"
		},
		"te":{
			"name":"Telugu",
			"nativeName":"తెలుగు"
		},
		"tg":{
			"name":"Tajik",
			"nativeName":"тоҷикӣ, toğikī, تاجیکی‎"
		},
		"th":{
			"name":"Thai",
			"nativeName":"ไทย"
		},
		"ti":{
			"name":"Tigrinya",
			"nativeName":"ትግርኛ"
		},
		"bo":{
			"name":"Tibetan Standard, Tibetan, Central",
			"nativeName":"བོད་ཡིག"
		},
		"tk":{
			"name":"Turkmen",
			"nativeName":"Türkmen, Түркмен"
		},
		"tl":{
			"name":"Tagalog",
			"nativeName":"Wikang Tagalog, ᜏᜒᜃᜅ᜔ ᜆᜄᜎᜓᜄ᜔"
		},
		"tn":{
			"name":"Tswana",
			"nativeName":"Setswana"
		},
		"to":{
			"name":"Tonga (Tonga Islands)",
			"nativeName":"faka Tonga"
		},
		"tr":{
			"name":"Turkish",
			"nativeName":"Türkçe"
		},
		"ts":{
			"name":"Tsonga",
			"nativeName":"Xitsonga"
		},
		"tt":{
			"name":"Tatar",
			"nativeName":"татарча, tatarça, تاتارچا‎"
		},
		"tw":{
			"name":"Twi",
			"nativeName":"Twi"
		},
		"ty":{
			"name":"Tahitian",
			"nativeName":"Reo Tahiti"
		},
		"ug":{
			"name":"Uighur, Uyghur",
			"nativeName":"Uyƣurqə, ئۇيغۇرچە‎"
		},
		"uk":{
			"name":"Ukrainian",
			"nativeName":"українська"
		},
		"ur":{
			"name":"Urdu",
			"nativeName":"اردو"
		},
		"uz":{
			"name":"Uzbek",
			"nativeName":"zbek, Ўзбек, أۇزبېك‎"
		},
		"ve":{
			"name":"Venda",
			"nativeName":"Tshivenḓa"
		},
		"vi":{
			"name":"Vietnamese",
			"nativeName":"Tiếng Việt"
		},
		"vo":{
			"name":"Volapük",
			"nativeName":"Volapük"
		},
		"wa":{
			"name":"Walloon",
			"nativeName":"Walon"
		},
		"cy":{
			"name":"Welsh",
			"nativeName":"Cymraeg"
		},
		"wo":{
			"name":"Wolof",
			"nativeName":"Wollof"
		},
		"fy":{
			"name":"Western Frisian",
			"nativeName":"Frysk"
		},
		"xh":{
			"name":"Xhosa",
			"nativeName":"isiXhosa"
		},
		"yi":{
			"name":"Yiddish",
			"nativeName":"ייִדיש"
		},
		"yo":{
			"name":"Yoruba",
			"nativeName":"Yorùbá"
		},
		"za":{
			"name":"Zhuang, Chuang",
			"nativeName":"Saɯ cueŋƅ, Saw cuengh"
		}
	}');

	return $supported_languages;

	//    die(var_dump($list));
}


// lang_codes();