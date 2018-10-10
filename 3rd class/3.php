<?php
function getauthor()
{ 
    return "charles dickens";
}
function bookbyauthoryear($authorname, $year=1910)
{
    echo "this will list of all the books written by" . $authorname ."in the year" .$year;
}
$year=1920;
$authorname= getauthor();
bookbyauthoryear($authorname,$year);
?>
