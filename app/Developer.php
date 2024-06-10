<?php
namespace App;
class Developer extends Worker{
  public function work(){
    var_dump("$this->name loves adding memes to apps ");
  }
}