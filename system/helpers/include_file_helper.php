<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if(!function_exists('includer')){

    function includer($files){
        foreach($files as $file){
            $this->load->file(base_url().$file."php");
        }
    }
}

?>