<?php

if(isset ($_POST['update']))
{
    $xml = new DomDocument("1.0", "UTF-8");
    
    $xml.simplexml_load_file('..\\student-checklists\\course-checklist.xml');
    
    $checklist = $xml->getElementsByTagName("checklist");
    
    $freshman = $checklist->standing->getElementById("fresh");
    
    $sophmore = $checklist->standing->getElementById("soph");
    
    $junior = $checklist->standing->getElementById("junior");
    
    $senior = $checklist->standing->getElementById("senior");
    
    $cscElect = $checklist->csc_elective;
    
    $mathElect = $checklist->math_elective;
    
    $sciRequ = $checklist->science_requirement;
    
    $libArt = $checklist->libarts;
    
    $freeCourse = $checklist->free;
    
    
    
    
}


?>