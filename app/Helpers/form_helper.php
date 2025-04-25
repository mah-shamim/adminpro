<?php


  /**
  * Function to check and get 'get' request
  *
  * @param string $key - key to check in 'get' request
  *
  * @return string value - uses codeigniter Input library 
  * 
  */
if (!function_exists('form_error')) {

	function form_error($key)
	{
        if($error =  service('session')->getFlashdata('errors')[$key] ?? false):
            return '<span id="exampleInputEmail1-error" style="display: block;" class="error invalid-feedback">'.$error.'</span>';
        endif;

        return null;
	}


}


