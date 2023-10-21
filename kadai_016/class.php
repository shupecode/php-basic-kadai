<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function show_price() {
                echo $this->price;
            }
        
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }
        
            public function get_Name() {
                return $this->name;
            }
        
            public function get_Price() {
                return $this->price;
            }
        }
        

        class Animal {
            private $name;
            private $height;
            private $weight;

            public function show_height() {
                echo $this->height;
            }
        
            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        
            public function get_Name() {
                return $this->name;
            }
        
            public function get_height() {
                return $this->height;
            }

            public function get_weight() {
                return $this->weight;
            }
        }

        $Food_Object = new Food('potato', 250);
        
        print_r($Food_Object);
        echo '<br>';

        $Animal_Object = new Animal('dog', 60, 5000);

        print_r($Animal_Object);
        echo '<br>';

        $Food_Object->show_price();
        echo '<br>';

        $Animal_Object->show_height();
        echo '<br>';
        ?>
    </p>
 </body>
 
 </html>
