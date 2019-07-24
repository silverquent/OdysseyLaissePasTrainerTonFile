<?php


class Upload

{
  
    private $file;
    

    public function __construct($file )
    {
        $this->file=$file;
       
    }


public function info()
{

    return $this->file['name'];
}

    public function verification  ()
    {

        if ((isset($_POST['submit'])) && (!empty($_POST['submit']))) {
            echo 'Le post existe <br> ';
    
            }
            return;
      
    }



}









?>