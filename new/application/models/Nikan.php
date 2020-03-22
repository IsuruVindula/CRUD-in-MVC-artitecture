<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nikan extends CI_Model
{
    public function get()
    {
        $data = array(
            'name'=>"chamara",
            'age'=> "22",
            'gender'=>"male"
        );
        return $data;
    }
}
