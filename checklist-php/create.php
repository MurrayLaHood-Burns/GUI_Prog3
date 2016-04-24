<?php

include '..\\DansRepo\\includes\\mcs-user.php';


if( MCSUSER::isAuthenticated() )  // make sure user is logged in
{
    $user = MCSUSER::getUsername(); // get the username (student id)
    $file = $user.".xml";    // create the string for the .xml file for the student
      

    if(isset ($_POST['submit']))
    {
        $xml = new DomDocument("1.0", "UTF-8");
        
        //try to load the relevant xml file
        $xml.simplexml_load_file("..\\student-checklists\\{$file}");
        
        if( $xml == false )  // if there is not an existing studentid.xml file 
        { 
            //create one
            $xml.simplexml_load_file("..\\student-checklists\\course-checklist.xml");
            $xml->save("{$file}");
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
                            if( _$POST['csc110_chbox'] ) 
                            {
                                $course['isComplete'] = _$POST['csc110_chbox'].Value;
                            }
                            
                            if( _$POST['csc110_grade'] )
                            {
                               $course->grade = _$POST['csc110_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                            
                        }
                        else if( $course['id'] == 'csc150' )  // csc 150
                        {
                            if( _$POST['csc150_chbox'] )
                            {
                                $course['isComplete'] = _$POST['csc150_chbox'].Value;
                            }
                            
                            if( _$POST['csc150_grade'] )
                            {
                               $course->grade = _$POST['csc150_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'csc250' )  // csc 250 
                        {
                            if( _$POST['csc250_chbox'] )
                            {
                                $course['isComplete'] = _$POST['csc250_chbox'].Value;
                            }
                            
                            if( _$POST['csc250_grade'] )
                            {
                               $course->grade = _$POST['csc250_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'csc251' )  // csc 251
                        {
                            if( _$POST['csc251_chbox'] )
                            {
                                $course['isComplete'] = _$POST['csc251_chbox'].Value;
                            }
                            
                            if( _$POST['csc251_grade'] )
                            {
                               $course->grade = _$POST['csc251_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'math123' )
                        {
                            if( _$POST['math123_chbox']
                            {
                                $course['isComplete'] = _$POST['math123_chbox'].Value;
                            }
                            
                            if( _$POST['math123_grade']
                            {
                               $course->grade = _$POST['math123_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                            
                        }
                        else if( $course['id'] == 'math125' )
                        {
                            if( _$POST['math125_chbox']
                            {
                                $course['isComplete'] = _$POST['math125_chbox'].Value;
                            }
                            
                            if( _$POST['math125_grade']
                            {
                               $course->grade = _$POST['math125_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                            
                        }
                        else if( $course['id'] == 'engl101' )
                        {
                            if( _$POST['engl101_chbox']
                            {
                                $course['isComplete'] = _$POST['engl101_chbox'].Value;
                            }
                            
                            if( _$POST['engl101_grade']
                            {
                               $course->grade = _$POST['engl101_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        
                    }
                }
                else if( $unit ->standing['id'] == 'soph')  //if processing sophmore courses
                {
                    foreach ($unit->standing->children() as $course)  // for each required course at the sophmore level
                    {
                        if($course['id'] == 'csc300')
                        {
                            if( _$POST['csc300_chbox']
                            {
                                $course['isComplete'] = _$POST['csc300_chbox'].Value;
                            }
                            
                            if( _$POST['csc300_grade']
                            {
                               $course->grade = _$POST['csc300_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'csc314')
                        {
                            if( _$POST['csc314_chbox']
                            {
                                $course['isComplete'] = _$POST['csc314_chbox'].Value;
                            }
                            
                            if( _$POST['csc314_grade']
                            {
                               $course->grade = _$POST['csc314_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'math225')
                        {
                            if( _$POST['math225_chbox']
                            {
                                $course['isComplete'] = _$POST['math225_chbox'].Value;
                            }
                            
                            if( _$POST['math225_grade']
                            {
                               $course->grade = _$POST['math225_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'math315')
                        {
                            if( _$POST['math315_chbox']
                            {
                                $course['isComplete'] = _$POST['math315_chbox'].Value;
                            }
                            
                            if( _$POST['math315_grade']
                            {
                               $course->grade = _$POST['math315_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'engl279')
                        {
                            if( _$POST['engl279_chbox']
                            {
                                $course['isComplete'] = _$POST['engl279_chbox'].Value;
                            }
                            
                            if( _$POST['engl279_grade']
                            {
                               $course->grade = _$POST['engl279_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                    }

                }
                else if ($unit->standing['id'] == 'junior')  // if processing junior level classes
                {
                    foreach ($unit->standing->children() as $course)  // for each required course of junior level
                    {
                        if($course['id'] == 'csc317')
                        {
                            if( _$POST['csc317_chbox']
                            {
                                $course['isComplete'] = _$POST['csc317_chbox'].Value;
                            }
                            
                            if( _$POST['csc317_grade']
                            {
                               $course->grade = _$POST['csc317_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'csc372')
                        {
                            if( _$POST['csc372_chbox']
                            {
                                $course['isComplete'] = _$POST['csc372_chbox'].Value;
                            }
                            
                            if( _$POST['csc372_grade']
                            {
                               $course->grade = _$POST['csc372_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'csc461')
                        {
                            if( _$POST['csc461_chbox']
                            {
                                $course['isComplete'] = _$POST['csc461_chbox'].Value;
                            }
                            
                            if( _$POST['csc461_grade']
                            {
                               $course->grade = _$POST['csc461_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'csc484')
                        {
                            if( _$POST['csc484_chbox']
                            {
                                $course['isComplete'] = _$POST['csc484_chbox'].Value;
                            }
                            
                            if( _$POST['csc484_grade']
                            {
                               $course->grade = _$POST['csc484_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'csc470')
                        {
                            if( _$POST['csc470_chbox']
                            {
                                $course['isComplete'] = _$POST['csc470_chbox'].Value;
                            }
                            
                            if( _$POST['csc470_grade']
                            {
                               $course->grade = _$POST['csc470_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'engl289')
                        {
                            if( _$POST['engl289_chbox']
                            {
                                $course['isComplete'] = _$POST['engl289_chbox'].Value;
                            }
                            
                            if( _$POST['engl289_grade']
                            {
                               $course->grade = _$POST['engl289_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'phys211')
                        {
                            if( _$POST['phys211_chbox']
                            {
                                $course['isComplete'] = _$POST['phys211_chbox'].Value;
                            }
                            
                            if( _$POST['phys211_grade']
                            {
                               $course->grade = _$POST['phys211_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        
                    }
                    
                }
                else if($unit->standing['id'] == 'senior')  // if processing senior level courses
                {
                    foreach ($unit->standing->children() as $course)  // for each required course at the senior level
                    {
                        if($course['id'] == 'csc421')
                        {
                            if( _$POST['csc421_chbox']
                            {
                                $course['isComplete'] = _$POST['csc421_chbox'].Value;
                            }
                            
                            if( _$POST['csc421_grade']
                            {
                               $course->grade = _$POST['csc421_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'csc465')
                        {
                            
                            if( _$POST['csc465_chbox']
                            {
                                $course['isComplete'] = _$POST['csc465_chbox'].Value;
                            }
                            
                            if( _$POST['csc465_grade']
                            {
                               $course->grade = _$POST['csc465_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'csc467')
                        {
                            
                            if( _$POST['csc467_chbox']
                            {
                                $course['isComplete'] = _$POST['csc467_chbox'].Value;
                            }
                            
                            if( _$POST['csc467_grade']
                            {
                               $course->grade = _$POST['csc467_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'csc456')
                        {
                            if( _$POST['csc456_chbox']
                            {
                                $course['isComplete'] = _$POST['csc456_chbox'].Value;
                            }
                            
                            if( _$POST['csc456_grade']
                            {
                               $course->grade = _$POST['csc456_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'math381')
                        {
                            if( _$POST['math381_chbox']
                            {
                                $course['isComplete'] = _$POST['math381_chbox'].Value;
                            }
                            
                            if( _$POST['math381_grade']
                            {
                               $course->grade = _$POST['math381_grade'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        
                    }
                    
                }
                
            }
            else if ($unit->getName() == 'csc_elective')  // if processing the required csc elective courses
            {
                foreach ($unit->standing->children() as $course)  // for each of the said elective courses
                {
                    if($course['id'] == 'cscelective1')
                    {
                        if( _$POST['cscelective1_chbox']
                        {
                            $course['isComplete'] = _$POST['cscelective1_chbox'].Value;
                        }
                        
                        if( _$POST['cscelective1_grade']
                        {
                           $course->grade = _$POST['cscelective1_grade'].Value;
                        }
                        
                        if( _$POST['cscelective1_name'])
                        {
                            $course->title = _$POST['cscelective1_name'].Value;
                        }
                        
                        if( _$POST['cscelective1_credits'])
                        {
                            $course->credits = _$POST['cscelective1_credits'].Value;
                        }
                        
                        $xml->save("{$file}");
                    }
                    else if( $course['id'] == 'csccelective2')
                    {
                        if( _$POST['cscelective2_chbox']
                        {
                            $course['isComplete'] = _$POST['cscelective2_chbox'].Value;
                        }
                        
                        if( _$POST['cscelective1_grade']
                        {
                           $course->grade = _$POST['cscelective2_grade'].Value;
                        }
                        
                        if( _$POST['cscelective2_name'])
                        {
                            $course->title = _$POST['cscelective2_name'].Value;
                        }
                        
                        if( _$POST['cscelective2_credits'])
                        {
                            $course->credits = _$POST['cscelective2_credits'].Value;
                        }
                        
                        $xml->save("{$file}");
                    }
                    else if( $course['id'] == 'cscelective3')
                    {
                        if( _$POST['cscelective3_chbox']
                        {
                            $course['isComplete'] = _$POST['cscelective3_chbox'].Value;
                        }
                        
                        if( _$POST['cscelective3_grade']
                        {
                           $course->grade = _$POST['cscelective3_grade'].Value;
                        }
                        
                        if( _$POST['cscelective3_name'])
                        {
                            $course->title = _$POST['cscelective3_name'].Value;
                        }
                        
                        if( _$POST['cscelective3_credits'])
                        {
                            $course->credits = _$POST['cscelective3_credits'].Value;
                        }
                        
                        $xml->save("{$file}");
                    }
                    else if( $course['id'] == 'cscelective4')
                    {
                        if( _$POST['cscelective4_chbox']
                        {
                            $course['isComplete'] = _$POST['cscelective4_chbox'].Value;
                        }
                        
                        if( _$POST['cscelective4_grade']
                        {
                           $course->grade = _$POST['cscelective4_grade'].Value;
                        }
                        
                        if( _$POST['cscelective4_name'])
                        {
                            $course->title = _$POST['cscelective4_name'].Value;
                        }
                        
                        if( _$POST['cscelective4_credits'])
                        {
                            $course->credits = _$POST['cscelective4_credits'].Value;
                        }
                        
                        $xml->save("{$file}");
                    }
                    
                }
                
            }
            else if($unit->getName() == 'math_elective')  // if processing the required math elective course
            {
                if( _$POST['math_elective_chbox']
                {
                    $course['isComplete'] = _$POST['math_elective_chbox'].Value;
                }
                
                if( _$POST['math_elective_grade']
                {
                   $course->grade = _$POST['math_elective_grade'].Value;
                }
                
                if( _$POST['math_elective_name'])
                {
                    $course->title = _$POST['math_elective_name'].Value;
                }
                
                if( _$POST['math_elective_credits'])
                {
                    $course->credits = _$POST['math_elective_credits'].Value;
                }
                
                $xml->save("{$file}");
            }
            else if( $unit->getName() == 'science_requirement')  // if processing the required science courses
            {
                foreach ($unit->standing->children() as $course)
                    {
                        if($course['id'] == 'scireq1')
                        {
                            if( _$POST['scireq1_chbox']
                            {
                                $course['isComplete'] = _$POST['scireq1_chbox'].Value;
                            }
                            
                            if( _$POST['scireq1_grade']
                            {
                               $course->grade = _$POST['scireq1_grade'].Value;
                            }
                            
                            if( _$POST['scireq1_name'])
                            {
                                $course->title = _$POST['scireq1_name'].Value;
                            }
                            
                            if( _$POST['scireq1_credits'])
                            {
                                $course->credits = _$POST['scireq1_credits'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'scireq2')
                        {
                            if( _$POST['scireq2_chbox']
                            {
                                $course['isComplete'] = _$POST['scireq2_chbox'].Value;
                            }
                            
                            if( _$POST['scireq2_grade']
                            {
                               $course->grade = _$POST['scireq2_grade'].Value;
                            }
                            
                            if( _$POST['scireq2_name'])
                            {
                                $course->title = _$POST['scireq2_name'].Value;
                            }
                            
                            if( _$POST['scireq2_credits'])
                            {
                                $course->credits = _$POST['scireq2_credits'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'scilab1')
                        {
                            if( _$POST['scilab1_chbox']
                            {
                                $course['isComplete'] = _$POST['scilab1_chbox'].Value;
                            }
                            
                            if( _$POST['scilab1_grade']
                            {
                               $course->grade = _$POST['scilab1_grade'].Value;
                            }
                            
                            if( _$POST['scilab1_name'])
                            {
                                $course->title = _$POST['scilab1_name'].Value;
                            }
                            
                            if( _$POST['scilab1_credits'])
                            {
                                $course->credits = _$POST['scilab1_credits'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'scilab2')
                        {
                            if( _$POST['scilab2_chbox']
                            {
                                $course['isComplete'] = _$POST['scilab2_chbox'].Value;
                            }
                            
                            if( _$POST['scilab2_grade']
                            {
                               $course->grade = _$POST['scilab2_grade'].Value;
                            }
                            
                            if( _$POST['scilab2_name'])
                            {
                                $course->title = _$POST['scilab2_name'].Value;
                            }
                            
                            if( _$POST['scilab2_credits'])
                            {
                                $course->credits = _$POST['scilab2_credits'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        
                    }
                
            }
            else if($unit->getName() == 'libarts')
            {
                foreach ($unit->standing->children() as $course)
                    {
                        if($course['id'] == 'socsci1')
                        {
                            if( _$POST['socsci1_chbox']
                            {
                                $course['isComplete'] = _$POST['socsci1_chbox'].Value;
                            }
                            
                            if( _$POST['socsci1_grade']
                            {
                               $course->grade = _$POST['socsci1_grade'].Value;
                            }
                            
                            if( _$POST['socsci1_name'])
                            {
                                $course->title = _$POST['socsci1_name'].Value;
                            }
                            
                            if( _$POST['socsci1_credits'])
                            {
                                $course->credits = _$POST['socsci1_credits'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'socsci2')
                        {
                            if( _$POST['socsci2_chbox']
                            {
                                $course['isComplete'] = _$POST['socsci2_chbox'].Value;
                            }
                            
                            if( _$POST['socsci2_grade']
                            {
                               $course->grade = _$POST['socsci2_grade'].Value;
                            }
                            
                            if( _$POST['socsci2_name'])
                            {
                                $course->title = _$POST['socsci2_name'].Value;
                            }
                            
                            if( _$POST['socsci2_credits'])
                            {
                                $course->credits = _$POST['socsci2_credits'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'arthum1')
                        {
                            if( _$POST['arthum1_chbox']
                            {
                                $course['isComplete'] = _$POST['arthum1_chbox'].Value;
                            }
                            
                            if( _$POST['arthum1_grade']
                            {
                               $course->grade = _$POST['arthum1_grade'].Value;
                            }
                            
                            if( _$POST['arthum1_name'])
                            {
                                $course->title = _$POST['arthum1_name'].Value;
                            }
                            
                            if( _$POST['arthum1_credits'])
                            {
                                $course->credits = _$POST['arthum1_credits'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'arthum2')
                        {
                            if( _$POST['arthum2_chbox']
                            {
                                $course['isComplete'] = _$POST['arthum2_chbox'].Value;
                            }
                            
                            if( _$POST['arthum2_grade']
                            {
                               $course->grade = _$POST['arthum2_grade'].Value;
                            }
                            
                            if( _$POST['arthum2_name'])
                            {
                                $course->title = _$POST['arthum2_name'].Value;
                            }
                            
                            if( _$POST['arthum2_credits'])
                            {
                                $course->credits = _$POST['arthum2_credits'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        else if( $course['id'] == 'arthumsoc')
                        {
                            if( _$POST['arthumsoc_chbox']
                            {
                                $course['isComplete'] = _$POST['arthumsoc_chbox'].Value;
                            }
                            
                            if( _$POST['arthumsoc_grade']
                            {
                               $course->grade = _$POST['arthumsoc_grade'].Value;
                            }
                            
                            if( _$POST['arthumsoc_name'])
                            {
                                $course->title = _$POST['arthumsoc_name'].Value;
                            }
                            
                            if( _$POST['arthumsoc_credits'])
                            {
                                $course->credits = _$POST['arthumsoc_credits'].Value;
                            }
                            
                            $xml->save("{$file}");
                        }
                        
                    }
                
            }
            else if( $unit->getName() == 'free')
            {
                
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