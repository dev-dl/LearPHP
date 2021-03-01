<?php
class Hogwarts
{
// ----------------------- the attributes ---------------------
    protected $time,$whichHouse;
    private $_routine;          
    const FIRSTCLASS = 9;
    const DINNER = 16;
    const CURFEW = 21;  
  
    public function whichHouse()
    {
        static::hatSorting();
    }

    public function hatSorting()
    {
        echo 'The student is waiting to be sorted';
    }
}

abstract class House extends Hogwarts 
{

    public function hatSorting()
    {
        echo ' The student belongs the house '.get_called_class ();
    }
          
}

class Gryffindor extends House
{
}


echo 'Harry Potter has arrived at Hogwarts, School of Witchcraft and Wizardry. <br />' ;
$HarryPotter = new Hogwarts();
$HarryPotter->whichHouse();
echo "<br />";
echo 'After the sorting ceremony, <br />' ;
$HarryPotter = new Gryffindor();
$HarryPotter->whichHouse();