<?php

/*
include '..\\DansRepo\\includes\\mcs-user.php';

$auth = MCSUSER::authenticate( '1640636', '021019871640636');

echo $auth.value; 

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
        
     
        //$xml = new DomDocument("1.0", "UTF-8");
        
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
                if( $unit->standing['id'] == 'fresh' )  // if processing freshman courses
                {
                    foreach ($unit->standing->children() as $course) // for each required course of freshman level
                    {
                        if( $course['id'] == 'csc110' )  // csc 110
                        {
                            if( $_POST["csc110_chbox"] ) // check to see if the state of the check box associated with the course has changed
                            {
                                $course['isComplete'] = $_POST['csc110_chbox'].Value;  // apply the change to the xml
                            }
                            
                            if( $_POST['csc110_grade'] )  // check to see if the state of the grade input form has changed
                            {
                               $course->grade = $_POST['csc110_grade'].Value;  // apply the change to the xml
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");  // save the modified xml to file
                            
                        }
                        else if( $course['id'] == 'csc150' )  // csc 150
                        {
                            if( $_POST['csc150_chbox'])
                            {
                                $course['isComplete'] = $_POST['csc150_chbox'].Value;
                            }
                            
                            if( $_POST['csc150_grade'] )
                            {
                               $course->grade = $_POST['csc150_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'csc250' )  // csc 250 
                        {
                            if( $_POST['csc250_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc250_chbox'].Value;
                            }
                            
                            if( $_POST['csc250_grade'] )
                            {
                               $course->grade = $_POST['csc250_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'csc251' )  // csc 251
                        {
                            if( $_POST['csc251_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc251_chbox'].Value;
                            }
                            
                            if( $_POST['csc251_grade'] )
                            {
                               $course->grade = $_POST['csc251_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'math123' )
                        {
                            if( $_POST['math123_chbox'] )
                            {
                                $course['isComplete'] = $_POST['math123_chbox'].Value();
                            }
                            
                            if( $_POST['math123_grade'] )
                            {
                               $course->grade = $_POST['math123_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                            
                        }
                        else if( $course['id'] == 'math125' )
                        {
                            if( $_POST['math125_chbox'] )
                            {
                                $course['isComplete'] = $_POST['math125_chbox'].Value;
                            }
                            
                            if( $_POST['math125_grade'] )
                            {
                               $course->grade = $_POST['math125_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                            
                        }
                        else if( $course['id'] == 'engl101' )
                        {
                            if( $_POST['engl101_chbox'] )
                            {
                                $course['isComplete'] = $_POST['engl101_chbox'].Value;
                            }
                            
                            if( $_POST['engl101_grade'] )
                            {
                               $course->grade = $_POST['engl101_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        
                    }
                }
                else if( $unit ->standing['id'] == 'soph')  //if processing sophmore courses
                {
                    foreach ($unit->standing->children() as $course)  // for each required course at the sophmore level
                    {
                        if($course['id'] == 'csc300')
                        {
                            if( $_POST['csc300_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc300_chbox'].Value;
                            }
                            
                            if( $_POST['csc300_grade'] )
                            {
                               $course->grade = $_POST['csc300_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'csc314')
                        {
                            if( $_POST['csc314_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc314_chbox'].Value;
                            }
                            
                            if( $_POST['csc314_grade'] )
                            {
                               $course->grade = $_POST['csc314_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'math225')
                        {
                            if( $_POST['math225_chbox'] )
                            { 
                                $course['isComplete'] = $_POST['math225_chbox'].Value;
                            }
                            
                            if( $_POST['math225_grade'] )
                            {
                               $course->grade = $_POST['math225_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'math315')
                        {
                            if( $_POST['math315_chbox'] )
                            {
                                $course['isComplete'] = $_POST['math315_chbox'].Value;
                            }
                            
                            if( $_POST['math315_grade'] )
                            {
                               $course->grade = $_POST['math315_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'engl279')
                        {
                            if( $_POST['engl279_chbox'] )
                            {
                                $course['isComplete'] = $_POST['engl279_chbox'].Value;
                            }
                            
                            if( $_POST['engl279_grade'] )
                            {
                               $course->grade = $_POST['engl279_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                    }

                }
                else if ($unit->standing['id'] == 'junior')  // if processing junior level classes
                {
                    foreach ($unit->standing->children() as $course)  // for each required course of junior level
                    {
                        if($course['id'] == 'csc317')
                        {
                            if( $_POST['csc317_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc317_chbox'].Value;
                            }
                            
                            if( $_POST['csc317_grade'] )
                            {
                               $course->grade = $_POST['csc317_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'csc372')
                        {
                            if( $_POST['csc372_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc372_chbox'].Value;
                            }
                            
                            if( $_POST['csc372_grade'] )
                            {
                               $course->grade = $_POST['csc372_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'csc461')
                        {
                            if( $_POST['csc461_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc461_chbox'].Value;
                            }
                            
                            if( $_POST['csc461_grade'] )
                            {
                               $course->grade = $_POST['csc461_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'csc484')
                        {
                            if( $_POST['csc484_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc484_chbox'].Value;
                            }
                            
                            if( $_POST['csc484_grade'] )
                            {
                               $course->grade = $_POST['csc484_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'csc470')
                        {
                            if( $_POST['csc470_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc470_chbox'].Value;
                            }
                            
                            if( $_POST['csc470_grade'] )
                            {
                               $course->grade = $_POST['csc470_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'engl289')
                        {
                            if( $_POST['engl289_chbox'] )
                            {
                                $course['isComplete'] = $_POST['engl289_chbox'].Value;
                            }
                            
                            if( $_POST['engl289_grade'] )
                            {
                               $course->grade = $_POST['engl289_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'phys211')
                        {
                            if( $_POST['phys211_chbox'] )
                            {
                                $course['isComplete'] = $_POST['phys211_chbox'].Value;
                            }
                            
                            if( $_POST['phys211_grade'] )
                            {
                               $course->grade = $_POST['phys211_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        
                    }
                    
                }
                else if($unit->standing['id'] == 'senior')  // if processing senior level courses
                {
                    foreach ($unit->standing->children() as $course)  // for each required course at the senior level
                    {
                        if($course['id'] == 'csc421')
                        {
                            if( $_POST['csc421_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc421_chbox'].Value;
                            }
                            
                            if( $_POST['csc421_grade'] )
                            {
                               $course->grade = $_POST['csc421_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'csc465')
                        {
                            
                            if( $_POST['csc465_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc465_chbox'].Value;
                            }
                            
                            if( $_POST['csc465_grade'] )
                            {
                               $course->grade = $_POST['csc465_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'csc467')
                        {
                            
                            if( $_POST['csc467_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc467_chbox'].Value;
                            }
                            
                            if( $_POST['csc467_grade'] )
                            {
                               $course->grade = $_POST['csc467_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'csc456')
                        {
                            if( $_POST['csc456_chbox'] )
                            {
                                $course['isComplete'] = $_POST['csc456_chbox'].Value;
                            }
                            
                            if( $_POST['csc456_grade'] )
                            {
                               $course->grade = $_POST['csc456_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'math381')
                        {
                            if( $_POST['math381_chbox'] )
                            {
                                $course['isComplete'] = $_POST['math381_chbox'].Value;
                            }
                            
                            if( $_POST['math381_grade'] )
                            {
                               $course->grade = $_POST['math381_grade'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }                       
                    }                   
                }               
            }
            else if ($unit->getName() == 'csc_elective')  // if processing the required csc elective courses
            {
                foreach ($unit->csc_elective->children() as $course)  // for each of the said elective courses
                {
                    if($course['id'] == 'cscelective1')
                    {
                        if( $_POST['cscelective1_chbox'] )
                        {
                            $course['isComplete'] = $_POST['cscelective1_chbox'].Value;
                        }
                        
                        if( $_POST['cscelective1_grade'] )
                        {
                           $course->grade = $_POST['cscelective1_grade'].Value;
                        }
                        
                        if( $_POST['cscelective1_name'])  // need to check for the name of the elective and save it to xml
                        {
                            $course->title = $_POST['cscelective1_name'].Value;
                        }
                        
                        if( $_POST['cscelective1_credits'])  // need to check for the credit value of the elective and save it to xml
                        {
                            $course->credits = $_POST['cscelective1_credits'].Value;
                        }
                        
                        $xml->save("..\\student-checklists\\{$file}");
                    }
                    else if( $course['id'] == 'csccelective2')
                    {
                        if( $_POST['cscelective2_chbox'] )
                        {
                            $course['isComplete'] = $_POST['cscelective2_chbox'].Value;
                        }
                        
                        if( $_POST['cscelective2_grade'] )
                        {
                           $course->grade = $_POST['cscelective2_grade'].Value;
                        }
                        
                        if( $_POST['cscelective2_name'])
                        {
                            $course->title = $_POST['cscelective2_name'].Value;
                        }
                        
                        if( $_POST['cscelective2_credits'])
                        {
                            $course->credits = $_POST['cscelective2_credits'].Value;
                        }
                        
                        $xml->save("..\\student-checklists\\{$file}");
                    }
                    else if( $course['id'] == 'cscelective3')
                    {
                        if( $_POST['cscelective3_chbox'] )
                        {
                            $course['isComplete'] = $_POST['cscelective3_chbox'].Value;
                        }
                        
                        if( $_POST['cscelective3_grade'] )
                        {
                           $course->grade = $_POST['cscelective3_grade'].Value;
                        }
                        
                        if( $_POST['cscelective3_name'])
                        {
                            $course->title = $_POST['cscelective3_name'].Value;
                        }
                        
                        if( $_POST['cscelective3_credits'])
                        {
                            $course->credits = $_POST['cscelective3_credits'].Value;
                        }
                        
                        $xml->save("..\\student-checklists\\{$file}");
                    }
                    else if( $course['id'] == 'cscelective4')
                    {
                        if( $_POST['cscelective4_chbox'] )
                        {
                            $course['isComplete'] = $_POST['cscelective4_chbox'].Value;
                        }
                        
                        if( $_POST['cscelective4_grade'] )
                        {
                           $course->grade = $_POST['cscelective4_grade'].Value;
                        }
                        
                        if( $_POST['cscelective4_name'])
                        {
                            $course->title = $_POST['cscelective4_name'].Value;
                        }
                        
                        if( $_POST['cscelective4_credits'])
                        {
                            $course->credits = $_POST['cscelective4_credits'].Value;
                        }
                        
                        $xml->save("..\\student-checklists\\{$file}");
                    }
                    
                }
                
            }
            else if($unit->getName() == 'math_elective')  // if processing the required math elective course
            {
                if( $_POST['math_elective_chbox'] )
                {
                    $course['isComplete'] = $_POST['math_elective_chbox'].Value;
                }
                
                if( $_POST['math_elective_grade'] )
                {
                   $course->grade = $_POST['math_elective_grade'].Value;
                }
                
                if( $_POST['math_elective_name'])
                {
                    $course->title = $_POST['math_elective_name'].Value;
                }
                
                if( $_POST['math_elective_credits'])
                {
                    $course->credits = $_POST['math_elective_credits'].Value;
                }
                
                $xml->save("..\\student-checklists\\{$file}");
            }
            else if( $unit->getName() == 'science_requirement')  // if processing the required science courses
            {
                foreach ($unit->science_requirement->children() as $course)
                    {
                        if($course['id'] == 'scireq1')
                        {
                            if( $_POST['scireq1_chbox'] )
                            {
                                $course['isComplete'] = $_POST['scireq1_chbox'].Value;
                            }
                            
                            if( $_POST['scireq1_grade'] )
                            {
                               $course->grade = $_POST['scireq1_grade'].Value;
                            }
                            
                            if( $_POST['scireq1_name'])
                            {
                                $course->title = $_POST['scireq1_name'].Value;
                            }
                            
                            if( $_POST['scireq1_credits'])
                            {
                                $course->credits = $_POST['scireq1_credits'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'scireq2')
                        {
                            if( $_POST['scireq2_chbox'] )
                            {
                                $course['isComplete'] = $_POST['scireq2_chbox'].Value;
                            }
                            
                            if( $_POST['scireq2_grade'] )
                            {
                               $course->grade = $_POST['scireq2_grade'].Value;
                            }
                            
                            if( $_POST['scireq2_name'])
                            {
                                $course->title = $_POST['scireq2_name'].Value;
                            }
                            
                            if( $_POST['scireq2_credits'])
                            {
                                $course->credits = $_POST['scireq2_credits'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'scilab1')
                        {
                            if( $_POST['scilab1_chbox'] )
                            {
                                $course['isComplete'] = $_POST['scilab1_chbox'].Value;
                            }
                            
                            if( $_POST['scilab1_grade'] )
                            {
                               $course->grade = $_POST['scilab1_grade'].Value;
                            }
                            
                            if( $_POST['scilab1_name'])
                            {
                                $course->title = $_POST['scilab1_name'].Value;
                            }
                            
                            if( $_POST['scilab1_credits'])
                            {
                                $course->credits = $_POST['scilab1_credits'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'scilab2')
                        {
                            if( $_POST['scilab2_chbox'] )
                            {
                                $course['isComplete'] = $_POST['scilab2_chbox'].Value;
                            }
                            
                            if( $_POST['scilab2_grade'] )
                            {
                               $course->grade = $_POST['scilab2_grade'].Value;
                            }
                            
                            if( $_POST['scilab2_name'])
                            {
                                $course->title = $_POST['scilab2_name'].Value;
                            }
                            
                            if( $_POST['scilab2_credits'])
                            {
                                $course->credits = $_POST['scilab2_credits'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        
                    }
                
            }
            else if($unit->getName() == 'libarts')
            {
                foreach ($unit->libarts->children() as $course)
                    {
                        if($course['id'] == 'socsci1')
                        {
                            if( $_POST['socsci1_chbox'] )
                            {
                                $course['isComplete'] = $_POST['socsci1_chbox'].Value;
                            }
                            
                            if( $_POST['socsci1_grade'] )
                            {
                               $course->grade = $_POST['socsci1_grade'].Value;
                            }
                            
                            if( $_POST['socsci1_name'])
                            {
                                $course->title = $_POST['socsci1_name'].Value;
                            }
                            
                            if( $_POST['socsci1_credits'])
                            {
                                $course->credits = $_POST['socsci1_credits'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'socsci2')
                        {
                            if( $_POST['socsci2_chbox'] )
                            {
                                $course['isComplete'] = $_POST['socsci2_chbox'].Value;
                            }
                            
                            if( $_POST['socsci2_grade'] )
                            {
                               $course->grade = $_POST['socsci2_grade'].Value;
                            }
                            
                            if( $_POST['socsci2_name'])
                            {
                                $course->title = $_POST['socsci2_name'].Value;
                            }
                            
                            if( $_POST['socsci2_credits'])
                            {
                                $course->credits = $_POST['socsci2_credits'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'arthum1')
                        {
                            if( $_POST['arthum1_chbox'] )
                            {
                                $course['isComplete'] = $_POST['arthum1_chbox'].Value;
                            }
                            
                            if( $_POST['arthum1_grade'] )
                            {
                               $course->grade = $_POST['arthum1_grade'].Value;
                            }
                            
                            if( $_POST['arthum1_name'])
                            {
                                $course->title = $_POST['arthum1_name'].Value;
                            }
                            
                            if( $_POST['arthum1_credits'])
                            {
                                $course->credits = $_POST['arthum1_credits'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'arthum2')
                        {
                            if( $_POST['arthum2_chbox'] )
                            {
                                $course['isComplete'] = $_POST['arthum2_chbox'].Value;
                            }
                            
                            if( $_POST['arthum2_grade'] )
                            {
                               $course->grade = $_POST['arthum2_grade'].Value;
                            }
                            
                            if( $_POST['arthum2_name'])
                            {
                                $course->title = $_POST['arthum2_name'].Value;
                            }
                            
                            if( $_POST['arthum2_credits'])
                            {
                                $course->credits = $_POST['arthum2_credits'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        else if( $course['id'] == 'arthumsoc')
                        {
                            if( $_POST['arthumsoc_chbox'] )
                            {
                                $course['isComplete'] = $_POST['arthumsoc_chbox'].Value;
                            }
                            
                            if( $_POST['arthumsoc_grade'] )
                            {
                               $course->grade = $_POST['arthumsoc_grade'].Value;
                            }
                            
                            if( $_POST['arthumsoc_name'])
                            {
                                $course->title = $_POST['arthumsoc_name'].Value;
                            }
                            
                            if( $_POST['arthumsoc_credits'])
                            {
                                $course->credits = $_POST['arthumsoc_credits'].Value;
                            }
                            
                            $xml->save("..\\student-checklists\\{$file}");
                        }
                        
                    }
                
            }
            else if( $unit->getName() == 'free')
            {
                foreach ($unit->free->children() as $course )
                {
                    if($course['id'] == 'free1')
                    {
                        if( $_POST['free1_chbox'] )
                        {
                            $course['isComplete'] = $_POST['free1_chbox'].Value;
                        }
                        
                        if( $_POST['free1_grade'] )
                        {
                           $course->grade = $_POST['free1_grade'].Value;
                        }
                        
                        if( $_POST['free1_name'])  // need to check for the name of the elective and save it to xml
                        {
                            $course->title = $_POST['free1_name'].Value;
                        }
                        
                        if( $_POST['free1_credits'])  // need to check for the credit value of the elective and save it to xml
                        {
                            $course->credits = $_POST['free1_credits'].Value;
                        }
                        
                        $xml->save("..\\student-checklists\\{$file}");
                    }
                    else if( $course['id'] == 'free2')
                    {
                        if( $_POST['free2_chbox'] )
                        {
                            $course['isComplete'] = $_POST['free2_chbox'].Value;
                        }
                        
                        if( $_POST['free2_grade'] )
                        {
                           $course->grade = $_POST['free2_grade'].Value;
                        }
                        
                        if( $_POST['free2_name'])
                        {
                            $course->title = $_POST['free2_name'].Value;
                        }
                        
                        if( $_POST['free2_credits'])
                        {
                            $course->credits = $_POST['free2_credits'].Value;
                        }
                        
                        $xml->save("..\\student-checklists\\{$file}");
                    }
                    else if( $course['id'] == 'free3')
                    {
                        if( $_POST['free3_chbox'] )
                        {
                            $course['isComplete'] = $_POST['free3_chbox'].Value;
                        }
                        
                        if( $_POST['free3_grade'] )
                        {
                           $course->grade = $_POST['free3_grade'].Value;
                        }
                        
                        if( $_POST['free3_name'])
                        {
                            $course->title = $_POST['free3_name'].Value;
                        }
                        
                        if( $_POST['free3_credits'])
                        {
                            $course->credits = $_POST['free3_credits'].Value;
                        }
                        
                        $xml->save("..\\student-checklists\\{$file}");
                    }
                    else if( $course['id'] == 'free4')
                    {
                        if( $_POST['free4_chbox'] )
                        {
                            $course['isComplete'] = $_POST['free4_chbox'].Value;
                        }
                        
                        if( $_POST['free4_grade'] )
                        {
                           $course->grade = $_POST['free4_grade'].Value;
                        }
                        
                        if( $_POST['free4_name'])
                        {
                            $course->title = $_POST['free4_name'].Value;
                        }
                        
                        if( $_POST['free4_credits'])
                        {
                            $course->credits = $_POST['free4_credits'].Value;
                        }
                        
                        $xml->save("..\\student-checklists\\{$file}");
                }
                else if( $course['id'] == 'free5')
                    {
                        if( $_POST['free5_chbox'] )
                        {
                            $course['isComplete'] = $_POST['free5_chbox'].Value;
                        }
                        
                        if( $_POST['free5_grade'] )
                        {
                           $course->grade = $_POST['free5_grade'].Value;
                        }
                        
                        if( $_POST['free5_name'])
                        {
                            $course->title = $_POST['free5_name'].Value;
                        }
                        
                        if( $_POST['free5_credits'])
                        {
                            $course->credits = $_POST['free5_credits'].Value;
                        }
                        
                        $xml->save("..\\student-checklists\\{$file}");
                }
                else if( $course['id'] == 'free6')
                    {
                        if( $_POST['free6_chbox'] )
                        {
                            $course['isComplete'] = $_POST['free6_chbox'].Value;
                        }
                        
                        if( $_POST['free6_grade'] )
                        {
                           $course->grade = $_POST['free6_grade'].Value;
                        }
                        
                        if( $_POST['free6_name'])
                        {
                            $course->title = $_POST['free6_name'].Value;
                        }
                        
                        if( $_POST['free6_credits'])
                        {
                            $course->credits = $_POST['free6_credits'].Value;
                        }
                        
                        $xml->save("..\\student-checklists\\{$file}");
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