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
    class City
    {
        //properties
        public $name;

        //Methods
        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }
    }

    $Newyorks = new City(); //object create
    $Newyorks->set_name('Newyork');
    echo $Newyorks->get_name();
    ?>
</body>
</html>