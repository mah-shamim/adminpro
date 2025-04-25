<?php
namespace App\Validation;

class CustomRules{

  // Rule is to validate mobile number digits
  public function usernameValidation(string $str, string $fields, array $data){

    $user = model('\App\Models\UserModel')->where('username', $str)->orWhere('email', $str)->first();
    return isset($user->id);
  }

	public function validateRecaptcha($str, string $fields, array $data)
	{

    if(setting('google_recaptcha_enabled')!='1'){
      return true;
    }

    if(empty($str)){
      return false;
    }
		
    $userIp =  service('request')->getIPAddress();
    $secret = setting('google_recaptcha_secretkey');

    $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$str."&remoteip=".$userIp;

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      

    $status= json_decode($output, true);

    if (isset($status['success']) && $status['success']) {
      return true;
    }else{
      // $this->form_validation->set_message('validate_recaptcha', 'Google Recaptcha not valid !');  
      return false;
    }
	}

}