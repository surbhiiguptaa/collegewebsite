<?php
function bookByAuthorYear($authorName, $year=1910)
{
    echo $year;
    echo "\n";
    echo $authorName;
    echo "\n";
}
$authorName = "William Shakespeare" ;
$year=1920;
bookByAuthorYear($authorName, $year);
?>