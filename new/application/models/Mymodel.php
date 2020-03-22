<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mymodel extends CI_Model
{

    public function firstname()
    {
        $name2 = $this->lastname();
        return "isuru " . $name2;
    }

    private function lastname()
    {
        return "vindula";
    }
}
