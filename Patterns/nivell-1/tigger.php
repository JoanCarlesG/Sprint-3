<?php
class Tigger{
        static $counter = 0;
        private static $instances = [];

        //El constructor ha de ser private per evitar que es creïn noves instàncies de la classe
        //Només la pròpia classe pot crear una sola instància
        private function __construct()
        {
                echo "Building character..." . PHP_EOL;
                echo "<br>";
        }

        //No es pot clonar o serialitzar, per això s'edita la funció clone() i wakeup() amb protected o private
        protected function __clone(){}
        protected function __wakeup(){}

        //getInstance comprova que ja existeix una instància de la classe 
        //creada pel constructor, i fa un return de la instància
        public static function getInstance(): Tigger
        {
                $class = static::class;
                if (!isset(self::$instances[$class])) {
                        self::$instances[$class] = new static();
                }

                return self::$instances[$class];
        }

        public static function roar()
        {
                echo "Grrr!" . PHP_EOL;
                echo "<br>";
                static::$counter++;

        }
        public static function getCounter()
        {
                echo "Tigger roared ".static::$counter." times";
        }
}
?>