<?php
namespace App\classes;
use App\classes\User;
use App\classes\ExampleOneInterface;
use App\classes\ExampleTwoInterface;
use App\classes\CategoryTrait;

class Student extends TeacherAbstract implements ExampleOneInterface, ExampleTwoInterface //doesn't support multiple inheritance
{
    use CategoryTrait; //declare at first
    //use CategoryTraitOne, CategoryTraitTwo, CategoryTraitThree, ...;
    protected $country = 'BANGLADESH'; // non static property
    public static $area = 'NewYork';  // static property

    public function __construct()
    {
        $this->name = 'Bob';
        $this->city = 'London';
    }

    public function manage()
    {
        echo "Institute name is $this->name and city is $this->city and country is $this->country".'<br/>';
        echo $this->country.'<br/>';
        echo $this->city.'<br/>';
        echo $this->name.'<br/>';
//        echo $this->index().'<br/>';
        echo $this->add().'<br/>';
        echo self::$area.'<br/>';

    }

    public function one()
    {
        // TODO: Implement one() method.
        echo 'Hello One'.'<br/>';
    }

    public function two()
    {
        // TODO: Implement two() method.
        echo 'Hello Two'.'<br/>';
    }

    public function three()
    {
        // TODO: Implement three() method.
        echo 'Hello Three'.'<br/>';
    }

    public function ten()
    {
        // TODO: Implement ten() method.
        echo 'Hello Ten'.'<br/>';
    }

    public function tenOne()
    {
        // TODO: Implement tenOne() method.
        echo 'Hello TenOne'.'<br/>';
    }

    public function text()
    {
        // TODO: Implement text() method. [Abstract method]
        echo 'Hello Abstract'.'<br/>';
    }

    public static function demo()
    {
        echo 'Hello Static'.'<br/>';
    }
}