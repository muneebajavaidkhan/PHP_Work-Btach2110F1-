<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Sample
{
    public $s1;
    // public function __construct() //default
    // {
    //     echo 'Default constructor called<br>';
    // }

    public function __construct($res)
    {
        //paramterized constructor
        $this->s1 = $res;
    }

    function infos()
    {
        echo 'Check this method' . $this->s1;
    }
}
$S = new Sample('Abc');
$S->infos();
?>
      
     
</body>
</html>