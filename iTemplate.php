<?php

require_once 'Template2.php';
class iTemplate implements Template2
{
   public $lo, $ol, $lol;
  
   public function sum($lo, $ol)
    {
		$this->lo = $lo;
		$this->ol = $ol;
        $this->lol=$this->lo + $this->ol;
    }
   public function out()
    {
        return $this->lol;
    }
};
?>