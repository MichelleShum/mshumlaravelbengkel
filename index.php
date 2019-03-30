
 <?php

//function
function printstudents($anotherstudent = 'aminah')
{
    //array
    $students = ['ali','akau','abu'];

    $students[]=$anotherstudent();

    foreach($students as $student)
    {
        echo $student.' ';
    }
}
printstudents(function(){
    return 'abab';
});
//copy paste trait
trait CanRun
{
    public function run()
    {
        echo "im running";
    }
}
class human
{
    public function scream() //no put static also can call its 
    {
        echo "<br>";
        echo "HI";
    
    }
}
class student extends Human
{
    use CanRun;
    protected $legs = 2;
    protected $language = 'bahasa melayu';
    public static function speak() //static tell you this object is static 
    {
        echo "<br>";
        echo "Hello World";
    }
}

//scope installation object , just call function speak
student::speak();
student::scream();
?>