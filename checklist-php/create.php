<?php

function convertGrade($int)
{
    $return = '';
    if( $int == 4 )
    {
        $return = 'A';
    }
    else if( $int == 3)
    {
        $return = 'B';
    }
    else if( $int == 2)
    {
        $return = 'C';
    }
    else if( $int == 1)
    {
       $return = 'D'; 
    }
    else if( $int == 0)
    {
        $return = 'F';
    }
    else if( $int == -1)
    {
        $return = '';
    }
    
    return $return;
}
/*
include '..\\DansRepo\\includes\\mcs-user.php';




$auth = MCSUSER::authenticate( '1640636', '021019871640636');

echo $auth; 

if( MCSUSER::isAuthenticated())  // make sure user is logged in
{
    $user = MCSUSER::getCurrentUser(); // get the user
    
    $ID = user->getUserName();  // get the username (student id)
    
    $file = $ID.".xml";    // create the string for the student checklist .xml file
      
    */
    
    $file = "1640636.xml";
    
    if($_POST['save_btn'] == 'Submit')  // if the user has click the "save changes" button on the checklist html form
    {
        echo print_r($_POST);
        
     
        $xml = new DomDocument("1.0", "UTF-8");
        $xml->formatOutput = true;
        
        //try to load the relevant xml file
        if( file_exists("..\\student-checklists\\{$file}"))
        {
        $xml = simplexml_load_file("..\\student-checklists\\{$file}");  // try to load an existing checklist xml file 
        }
        else
        {
            $xml = simplexml_load_file("..\\student-checklists\\course-checklist.xml");  // try to load an existing checklist xml file
            $xml->asXML("..\\student-checklists\\{$file}");
        }
        
        // for each of the blocks in the checklist (csc classes, math classes, etc)
        foreach( $xml->children() as $unit)
        {
            //process each one individually, checking for POST requests relevant to the element
            if( $unit->getName() == 'standing' )
            {
                if( $unit['id'] == 'fresh' )  // if processing freshman courses
                {
                   // echo print_r($xml);
                    foreach ($unit->children() as $course) // for each required course of freshman level
                    {
                        if( $course['id'] == 'csc110' )  // csc 110
                        {
                            if( isset($_POST["csc110_chbox"] )) // check to see if the state of the check box associated with the course has changed
                            {
                                 // grab the changed value for the check box
                                 $course['isComplete'] = $_POST['csc110_chbox'];                             
                            }
                            
                            if( isset($_POST['csc110_grade'] ))  // check to see if the state of the grade input form has changed
                            {
                              // apply the change to the xml
                              $course->grade = convertGrade( $_POST['csc110_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));  // save the modified xml to file
                            
                        }
                        else if( $course['id'] == 'csc150' )  // csc 150
                        {
                            if( isset($_POST['csc150_chbox']))
                            {
                                $course['isComplete'] = $_POST['csc150_chbox'];
                            }
                            
                            if( $_POST['csc150_grade'] )
                            {
                               $course->grade = convertGrade( $_POST['csc150_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'csc250' )  // csc 250 
                        {
                            if( isset($_POST['csc250_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc250_chbox'];
                            }
                            
                            if( isset($_POST['csc250_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc250_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'csc251' )  // csc 251
                        {
                            if( isset($_POST['csc251_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc251_chbox'];
                            }
                            
                            if( isset($_POST['csc251_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc251_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'math123' )
                        {
                            if( isset($_POST['math123_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['math123_chbox']();
                            }
                            
                            if( isset($_POST['math123_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['math123_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                            
                        }
                        else if( $course['id'] == 'math125' )
                        {
                            if( isset($_POST['math125_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['math125_chbox'];
                            }
                            
                            if( isset($_POST['math125_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['math125_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                            
                        }
                        else if( $course['id'] == 'engl101' )
                        {
                            if( isset($_POST['engl101_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['engl101_chbox'];
                            }
                            
                            if( isset($_POST['engl101_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['engl101_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        
                        
                    }
                }   
                else if( $unit['id'] == 'soph')  //if processing sophmore courses
                {
                    foreach ($unit->children() as $course)  // for each required course at the sophmore level
                    {
                        if($course['id'] == 'csc300')
                        {
                            if( isset($_POST['csc300_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc300_chbox'];
                            }
                            
                            if( isset($_POST['csc300_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc300_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'csc314')
                        {
                            if( isset($_POST['csc314_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc314_chbox'];
                            }
                            
                            if( isset($_POST['csc314_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc314_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'math225')
                        {
                            if( isset($_POST['math225_chbox'] ))
                            { 
                                $course['isComplete'] = $_POST['math225_chbox'];
                            }
                            
                            if( isset($_POST['math225_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['math225_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'math315')
                        {
                            if( isset($_POST['math315_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['math315_chbox'];
                            }
                            
                            if( isset($_POST['math315_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['math315_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'engl279')
                        {
                            if( isset($_POST['engl279_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['engl279_chbox'];
                            }
                            
                            if( isset($_POST['engl279_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['engl279_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                    }

                }
                else if ($unit['id'] == 'junior')  // if processing junior level classes
                {
                    foreach ($unit->children() as $course)  // for each required course of junior level
                    {
                        if($course['id'] == 'csc317')
                        {
                            if( isset($_POST['csc317_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc317_chbox'];
                            }
                            
                            if( isset($_POST['csc317_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc317_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'csc372')
                        {
                            if( isset($_POST['csc372_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc372_chbox'];
                            }
                            
                            if( isset($_POST['csc372_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc372_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'csc461')
                        {
                            if( isset($_POST['csc461_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc461_chbox'];
                            }
                            
                            if( isset($_POST['csc461_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc461_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'csc484')
                        {
                            if( isset($_POST['csc484_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc484_chbox'];
                            }
                            
                            if( isset($_POST['csc484_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc484_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'csc470')
                        {
                            if( isset($_POST['csc470_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc470_chbox'];
                            }
                            
                            if( isset($_POST['csc470_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc470_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'engl289')
                        {
                            if( isset($_POST['engl289_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['engl289_chbox'];
                            }
                            
                            if( isset($_POST['engl289_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['engl289_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'phys211')
                        {
                            if( isset($_POST['phys211_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['phys211_chbox'];
                            }
                            
                            if( isset($_POST['phys211_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['phys211_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        
                    }
                    
                }
                else if($unit['id'] == 'senior')  // if processing senior level courses
                {
                    foreach ($unit->children() as $course)  // for each required course at the senior level
                    {
                        if($course['id'] == 'csc421')
                        {
                            if( isset($_POST['csc421_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc421_chbox'];
                            }
                            
                            if( isset($_POST['csc421_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc421_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'csc465')
                        {
                            
                            if( isset($_POST['csc465_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc465_chbox'];
                            }
                            
                            if( isset($_POST['csc465_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc465_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'csc467')
                        {
                            
                            if( isset($_POST['csc467_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc467_chbox'];
                            }
                            
                            if( isset($_POST['csc467_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc467_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'csc456')
                        {
                            if( isset($_POST['csc456_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['csc456_chbox'];
                            }
                            
                            if( isset($_POST['csc456_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['csc456_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'math381')
                        {
                            if( isset($_POST['math381_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['math381_chbox'];
                            }
                            
                            if( isset($_POST['math381_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['math381_grade'] );
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }                       
                    }                   
                }               
            }
            else if ($unit->getName() == 'csc_elective')  // if processing the required csc elective courses
            {
                foreach ($unit->children() as $course)  // for each of the said elective courses
                {
                    if($course['id'] == 'cscelective1')
                    {
                        if( isset($_POST['cscelective1_chbox'] ))
                        {
                            $course['isComplete'] = $_POST['cscelective1_chbox'];
                        }
                        
                        if( isset($_POST['cscelective1_grade'] ))
                        {
                           $course->grade = convertGrade( $_POST['cscelective1_grade'] );
                        }
                        
                        if( isset($_POST['cscelective1_name']))  // need to check for the name of the elective and save it to xml
                        {
                            $course->title = $_POST['cscelective1_name'];
                        }
                        
                        if( isset($_POST['cscelective1_credits']) ) // need to check for the credit value of the elective and save it to xml
                        {
                            $course->credits = $_POST['cscelective1_credits'];
                        }
                        
                        htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                    }
                    else if( $course['id'] == 'cscelective2')
                    {
                        if( isset($_POST['cscelective2_chbox'] ))
                        {
                            $course['isComplete'] = $_POST['cscelective2_chbox'];
                        }
                        
                        if( isset($_POST['cscelective2_grade'] ))
                        { 
                           $course->grade = convertGrade( $_POST['cscelective2_grade'] );
                        }
                        
                        if( isset($_POST['cscelective2_name']))
                        {
                            
                            $course->title = $_POST['cscelective2_name'];
                        }
                        
                        if( isset($_POST['cscelective2_credits']))
                        {
                            $course->credits = $_POST['cscelective2_credits'];
                        }
                        
                        htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                    }
                    else if( $course['id'] == 'cscelective3')
                    {
                        if( isset($_POST['cscelective3_chbox'] ))
                        {
                            $course['isComplete'] = $_POST['cscelective3_chbox'];
                        }
                        
                        if( isset($_POST['cscelective3_grade'] ))
                        {
                           $course->grade = convertGrade( $_POST['cscelective3_grade'] );
                        }
                        
                        if( isset($_POST['cscelective3_name']))
                        {
                            $course->title = $_POST['cscelective3_name'];
                        }
                        
                        if( isset($_POST['cscelective3_credits']))
                        {
                            $course->credits = $_POST['cscelective3_credits'];
                        }
                        
                        htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                    }
                    else if( $course['id'] == 'cscelective4')
                    {
                        if( isset($_POST['cscelective4_chbox'] ))
                        {
                            $course['isComplete'] = $_POST['cscelective4_chbox'];
                        }
                        
                        if( isset($_POST['cscelective4_grade'] ))
                        {
                           $course->grade = convertGrade( $_POST['cscelective4_grade'] );
                        }
                        
                        if( isset($_POST['cscelective4_name']))
                        {
                            $course->title = $_POST['cscelective4_name'];
                        }
                        
                        if( isset($_POST['cscelective4_credits']))
                        {
                            $course->credits = $_POST['cscelective4_credits'];
                        }
                        
                        htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                    }
                    
                }
                
            }
            else if($unit->getName() == 'math_elective')  // if processing the required math elective course
            {
                if( isset($_POST['math_elective_chbox'] ))
                {
                    $course['isComplete'] = $_POST['math_elective_chbox'];
                }
                
                if( isset($_POST['math_elective_grade'] ))
                {
                   $course->grade = convertGrade( $_POST['math_elective_grade'] );
                }
                
                if( isset($_POST['math_elective_name']))
                {
                    $course->title = $_POST['math_elective_name'];
                }
                
                if( isset($_POST['math_elective_credits']))
                {
                    $course->credits = $_POST['math_elective_credits'];
                }
                
                htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
            }
            else if( $unit->getName() == 'science_requirement')  // if processing the required science courses
            {
                foreach ($unit->children() as $course)
                    {
                        if($course['id'] == 'scireq1')
                        {
                            if( isset($_POST['scireq1_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['scireq1_chbox'];
                            }
                            
                            if( isset($_POST['scireq1_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['scireq1_grade'] );
                            }
                            
                            if( isset($_POST['scireq1_name']))
                            {
                                $course->title = $_POST['scireq1_name'];
                            }
                            
                            if( isset($_POST['scireq1_credits']))
                            {
                                $course->credits = $_POST['scireq1_credits'];
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'scireq2')
                        {
                            if( isset($_POST['scireq2_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['scireq2_chbox'];
                            }
                            
                            if( isset($_POST['scireq2_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['scireq2_grade'] );
                            }
                            
                            if( isset($_POST['scireq2_name']))
                            {
                                $course->title = $_POST['scireq2_name'];
                            }
                            
                            if( isset($_POST['scireq2_credits']))
                            {
                                $course->credits = $_POST['scireq2_credits'];
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'scilab1')
                        {
                            if( isset($_POST['scilab1_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['scilab1_chbox'];
                            }
                            
                            if( isset($_POST['scilab1_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['scilab1_grade'] );
                            }
                            
                            if( isset($_POST['scilab1_name']))
                            {
                                $course->title = $_POST['scilab1_name'];
                            }
                            
                            if( isset($_POST['scilab1_credits']))
                            {
                                $course->credits = $_POST['scilab1_credits'];
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'scilab2')
                        {
                            if( isset($_POST['scilab2_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['scilab2_chbox'];
                            }
                            
                            if( isset($_POST['scilab2_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['scilab2_grade'] );
                            }
                            
                            if( isset($_POST['scilab2_name']))
                            {
                                $course->title = $_POST['scilab2_name'];
                            }
                            
                            if( isset($_POST['scilab2_credits']))
                            {
                                $course->credits = $_POST['scilab2_credits'];
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        
                    }
                
            }
            else if($unit->getName() == 'libarts')
            {
                foreach ($unit->children() as $course)
                    {
                        if($course['id'] == 'socsci1')
                        {
                            if( isset($_POST['socsci1_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['socsci1_chbox'];
                            }
                            
                            if( isset($_POST['socsci1_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['socsci1_grade'] );
                            }
                            
                            if( isset($_POST['socsci1_name']))
                            {
                                $course->title = $_POST['socsci1_name'];
                            }
                            
                            if( isset($_POST['socsci1_credits']))
                            {
                                $course->credits = $_POST['socsci1_credits'];
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'socsci2')
                        {
                            if( isset($_POST['socsci2_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['socsci2_chbox'];
                            }
                            
                            if( isset($_POST['socsci2_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['socsci2_grade'] );
                            }
                            
                            if( isset($_POST['socsci2_name']))
                            {
                                $course->title = $_POST['socsci2_name'];
                            }
                            
                            if( isset($_POST['socsci2_credits']))
                            {
                                $course->credits = $_POST['socsci2_credits'];
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'arthum1')
                        {
                            if( isset($_POST['arthum1_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['arthum1_chbox'];
                            }
                            
                            if( isset($_POST['arthum1_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['arthum1_grade'] );
                            }
                            
                            if( isset($_POST['arthum1_name']))
                            {
                                $course->title = $_POST['arthum1_name'];
                            }
                            
                            if( isset($_POST['arthum1_credits']))
                            {
                                $course->credits = $_POST['arthum1_credits'];
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'arthum2')
                        {
                            if( isset($_POST['arthum2_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['arthum2_chbox'];
                            }
                            
                            if( isset($_POST['arthum2_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['arthum2_grade'] );
                            }
                            
                            if( isset($_POST['arthum2_name']))
                            {
                                $course->title = $_POST['arthum2_name'];
                            }
                            
                            if( isset($_POST['arthum2_credits']))
                            {
                                $course->credits = $_POST['arthum2_credits'];
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        else if( $course['id'] == 'arthumsoc')
                        {
                            if( isset($_POST['arthumsoc_chbox'] ))
                            {
                                $course['isComplete'] = $_POST['arthumsoc_chbox'];
                            }
                            
                            if( isset($_POST['arthumsoc_grade'] ))
                            {
                               $course->grade = convertGrade( $_POST['arthumsoc_grade'] );
                            }
                            
                            if( isset($_POST['arthumsoc_name']))
                            {
                                $course->title = $_POST['arthumsoc_name'];
                            }
                            
                            if( isset($_POST['arthumsoc_credits']))
                            {
                                $course->credits = $_POST['arthumsoc_credits'];
                            }
                            
                            htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                        }
                        
                    }
                
            }
            else if( $unit->getName() == 'free')
            {
                foreach ($unit->children() as $course )
                {
                    if($course['id'] == 'free1')
                    {
                        if( isset($_POST['free1_chbox'] ))
                        {
                            $course['isComplete'] = $_POST['free1_chbox'];
                        }
                        
                        if( isset($_POST['free1_grade'] ))
                        {
                           $course->grade = convertGrade( $_POST['free1_grade'] );
                        }
                        
                        if( isset($_POST['free1_name'])) // need to check for the name of the elective and save it to xml
                        {
                            $course->title = $_POST['free1_name'];
                        }
                        
                        if( isset($_POST['free1_credits']) ) // need to check for the credit value of the elective and save it to xml
                        {
                            $course->credits = $_POST['free1_credits'];
                        }
                        
                        htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                    }
                    else if( $course['id'] == 'free2')
                    {
                        if( isset($_POST['free2_chbox'] ))
                        {
                            $course['isComplete'] = $_POST['free2_chbox'];
                        }
                        
                        if( isset($_POST['free2_grade'] ))
                        {
                           $course->grade = convertGrade( $_POST['free2_grade'] );
                        }
                        
                        if( isset($_POST['free2_name']))
                        {
                            $course->title = $_POST['free2_name'];
                        }
                        
                        if( isset($_POST['free2_credits']))
                        {
                            $course->credits = $_POST['free2_credits'];
                        }
                        
                        htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                    }
                    else if( $course['id'] == 'free3')
                    {
                        if( isset($_POST['free3_chbox'] ))
                        {
                            $course['isComplete'] = $_POST['free3_chbox'];
                        }
                        
                        if( isset($_POST['free3_grade'] ))
                        {
                           $course->grade = convertGrade( $_POST['free3_grade'] );
                        }
                        
                        if( isset($_POST['free3_name']))
                        {
                            $course->title = $_POST['free3_name'];
                        }
                        
                        if( isset($_POST['free3_credits']))
                        {
                            $course->credits = $_POST['free3_credits'];
                        }
                        
                        htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                    }
                    else if( $course['id'] == 'free4')
                    {
                        if( isset($_POST['free4_chbox'] ))
                        {
                            $course['isComplete'] = $_POST['free4_chbox'];
                        }
                        
                        if( isset($_POST['free4_grade'] ))
                        {
                           $course->grade = convertGrade( $_POST['free4_grade'] );
                        }
                        
                        if( isset($_POST['free4_name']))
                        {
                            $course->title = $_POST['free4_name'];
                        }
                        
                        if( isset($_POST['free4_credits']))
                        {
                            $course->credits = $_POST['free4_credits'];
                        }
                        
                        htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                }
                else if( $course['id'] == 'free5')
                    {
                        if( isset($_POST['free5_chbox'] ))
                        {
                            $course['isComplete'] = $_POST['free5_chbox'];
                        }
                        
                        if( isset($_POST['free5_grade'] ))
                        {
                           $course->grade = convertGrade( $_POST['free5_grade'] );
                        }
                        
                        if( isset($_POST['free5_name']))
                        {
                            $course->title = $_POST['free5_name'];
                        }
                        
                        if( isset($_POST['free5_credits']))
                        {
                            $course->credits = $_POST['free5_credits'];
                        }
                        
                        htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                }
                else if( $course['id'] == 'free6')
                    {
                        if( isset($_POST['free6_chbox'] ))
                        {
                            $course['isComplete'] = $_POST['free6_chbox'];
                        }
                        
                        if( isset($_POST['free6_grade'] ))
                        {
                           $course->grade = convertGrade( $_POST['free6_grade'] );
                        }
                        
                        if( isset($_POST['free6_name']))
                        {
                            $course->title = $_POST['free6_name'];
                        }
                        
                        if( isset($_POST['free6_credits']))
                        {
                            $course->credits = $_POST['free6_credits'];
                        }
                        
                        htmlentities($xml->asXML("..\\student-checklists\\{$file}"));
                }
            }   
            
        }
        
        
        
        /*
        $checklist = $xml->getElementsByTagName("checklist");
        
        $freshman = $checklist->getElementById("fresh");
        
        $csc110 = $freshman->getElementbyId("csc10");
        
        $sophmore = $checklist->getElementById("soph");
        
        $junior = $checklist->getElementById("junior");
        
        $senior = $checklist->getElementById("senior");
        
        $cscElect = $checklist->csc_elective;
        
        $mathElect = $checklist->math_elective;
        
        $sciRequ = $checklist->science_requirement;
        
        $libArt = $checklist->libarts;
        
        $freeCourse = $checklist->free;
        */
              
        
        
        
    }
    
}



?>