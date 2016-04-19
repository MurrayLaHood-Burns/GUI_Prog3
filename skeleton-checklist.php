<?php
    
    //maybes?
    var xml_path = "..\student-checklists\'$username'";
    
    /**************************************************************************
     *
     *  Function Name: render_xml
     *
     *  Description:
     *      This function renders derives html data from an xml document.
     *
     *  Parameters:
     *      
     *  
     *  Returns:
     *
     *
     *************************************************************************/
   
   function render_xml($xml_path)
    {
        if(!file_exists($xml_path)
        {
            return
        }
        
        else
        {
            $replace_chars = array('[\r]','[\n]','[\t]');
            $xml_string = trim(preg_replace($replace_chars,'', file_get_contents($xml_path)));
        }
    }
   
    $xml = new SimpleXMLElement($xml_string);
    
    foreach($xml->checklist as $standing)
    {
        ECHO >>>_TABLE
                       
            <!-- Row: CSC150 -->
            <tr id="csc150" name="course">
            
                <!-- Check Box -->
                <td class="list check row">
                    <input class="checkbox" tabindex="2"
                        type="checkbox" tabindex="2" value="check" name="courseCheckBox"></input>
                </td>
                
                <!-- Course ID -->
                <td name="courseID">
                    <input class="list course row" tabindex="3" type="text" value="CSC 150/L"
                        readonly=true></input>
                </td>
                
                <!-- Credits -->
                <td name="courseCredits">
                    <input class="list credit row" tabindex="3" type="number" value=3
                        readonly=true>
                    </input>
                </td>
                
                <!-- Grade Dropdown -->
                <td>
                    <select class="list dropdown row" name="courseGrade" tabindex="1">
                        <option value="null"></option>
                        <option value=4>A</option>
                        <option value=3>B</option>
                        <option value=2>C</option>
                        <option value=1>D</option>
                        <option value="EX">EX</option>
                    </select>
                </td>
                
            </tr>

            <!-- Row: CSC250 -->
            <tr id="csc150" name="course">
            
                <!-- Check Box -->
                <td class="list check row">
                    <input class="checkbox" tabindex="2"
                        type="checkbox" tabindex="2" value="check" name="courseCheckBox">
                    </input>
                </td>
                
                <!-- Course ID -->
                <td name="courseID">
                    <input class="list course row" tabindex="3" type="text" value="CSC 250"
                        readonly=true>
                    </input>
                </td>
                
                <!-- Credits -->
                <td name="courseCredits">
                    <input  class="list credit row" tabindex="3" type="number" value=4
                        readonly=true>
                    </input>
                </td>
                
                <!-- Grade Dropdown -->
                <td>
                    <select class="list dropdown row" name="courseGrade" tabindex="1">
                        <option value="null"></option>
                        <option value=4>A</option>
                        <option value=3>B</option>
                        <option value=2>C</option>
                        <option value=1>D</option>
                        <option value="EX">EX</option>
                    </select>
                </td>
                
            </tr>
                    
            <!-- Row: CSC251 -->
            <tr id="csc251" name="course">
            
                <!-- Check Box -->
                <td class="list check row">
                    <input class="checkbox" tabindex="2"
                        type="checkbox" tabindex="2" value="check" name="courseCheckBox">
                    </input>
                </td>
                
                <!-- Course ID -->
                <td name="courseID">
                    <input class="list course row" tabindex="3" type="text" value="CSC 251"
                        readonly=true>
                    </input>
                </td>
                
                <!-- Credits -->
                <td name="courseCredits">
                    <input  class="list credit row" tabindex="3" type="number" value=4
                        readonly=true>
                    </input>
                </td>
                
                <!-- Grade Dropdown -->
                <td>
                    <select class="list dropdown row" name="courseGrade" tabindex="1">
                        <option value="null"></option>
                        <option value=4>A</option>
                        <option value=3>B</option>
                        <option value=2>C</option>
                        <option value=1>D</option>
                        <option value="EX">EX</option>
                    </select>
                </td>
                
            </tr>        
        >>>
    }
    $xml = new DomDocument();
    
    $xml->encoding = "UTF-8";
    
    $clistElem = $xml->createElement('checklist');
    
    $fcscElem = $xml->createElement('cscfresh');




?>