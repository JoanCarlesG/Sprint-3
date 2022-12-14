<?php
class Duck
{

    public function quack()
    {
        echo "Quack \n";
    }

    public function fly()
    {
        echo "I'm flying \n";
    }
}

class Turkey
{

    public function gobble()
    {
        echo "Gobble gobble \n";
    }

    public function fly()
    {
        echo "I'm flying a short distance \n";
    }
}

class TurkeyAdapter extends Duck{
    private $adapted;

    public function __construct(Turkey $adapted)
    {
        $this->adapted = $adapted;
    }

    public function quack()
    {
        echo "Gobble gobble \n";
    }

    public function fly()
    {
        echo str_repeat("I'm flying a short distance \n", 5);
    }
}
