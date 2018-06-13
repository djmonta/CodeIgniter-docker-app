<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events_model extends CI_Model
{
    public $title;
    
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function addEvent()
    {
        return $this;
    }
}
