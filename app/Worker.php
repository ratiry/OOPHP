<?php
namespace App;
abstract class Worker{
  protected string $name;
  protected string $opinion;
  private string $sweetDreams;
  public function __construct($name,$opinion){
    
    $this->name=$name;
    $this->opinion=$opinion;
  }

  abstract public function work();
  public function setSweetDreams($sweetDreams):string{
    $this->sweetdrems=$sweetDreams;
  }
}