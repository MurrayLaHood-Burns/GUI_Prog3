var grad_test = `
    <div id="catalog">
        <!--***************************************************************************
        CSC Freshman
        ****************************************************************************-->
        <div class="table_container" data-total="120">

            <table class="table" id="cscFresh" data-color="rgba(0, 153, 204, .25)"
                   data-total="12" data-complete="0" data-inprogress="0" data-credit_gpa="0" data-gpa="0">

                <!-- Row: Header -->
                <tr id="cscFreshHead" name="tableHeader">

                    <!-- Main Check Box -->
                    <td class="list check">
                        <input class="mainCheck" type="checkbox" tabindex="2" value="check">
                    </td>

                    <!-- Course Category -->
                    <td name="tableCategory">
                        <input class="list header CSC" type="text" value="CSC Freshman:"
                               readonly="readonly">
                    </td>

                    <!-- Total Credits -->
                    <td name="tableCredits">
                        <input class="list credit total CSC" type="text" readonly="readonly">
                    </td>

                    <!-- GPA -->
                    <td name="tableGPA">
                        <input class="list grade total CSC" type="number" readonly="readonly">
                    </td>

                </tr>

                <!-- Row: CSC110 -->
                <tr id="csc110" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="csc110_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">
                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 110"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=1
                               readonly="readonly">

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

                <!-- Row: CSC150 -->
                <tr id="csc150" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="csc150_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">
                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 150/L"
                               readonly="readonly">
                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=3
                               readonly="readonly">

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
                        <input class="checkbox" id="csc250_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 250"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=4
                               readonly="readonly">

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
                        <input class="checkbox" id="csc251_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 251"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=4
                               readonly="readonly">

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

            </table>
        </div>

        <!--***************************************************************************
        CSC Sophomore
        ****************************************************************************-->
        <div class="table_container">

            <table class="table" id="cscSoph" data-color="rgba(0, 153, 204, .25)"
                   data-total=7 data-complete=0 data-inprogress=0 data-credit_gpa=0 data-gpa=0>

                <!-- Row: Header -->
                <tr id="cscSophHead" name="tableHeader">

                    <!-- Main Check Box -->
                    <td class="list check">
                        <input class="mainCheck" type="checkbox" tabindex="2" value="check">
                    </td>

                    <!-- Course Category -->
                    <td name="tableCategory">
                        <input class="list header CSC" type="text" value="CSC Sophomore:"
                               readonly="readonly">

                    </td>

                    <!-- Total Credits -->
                    <td name="tableCredits">
                        <input class="list credit total CSC" type="text" readonly="readonly">
                    </td>

                    <!-- GPA -->
                    <td name="tableGPA">
                        <input class="list grade total CSC" type="number" readonly="readonly">
                    </td>

                </tr>

                <!-- Row: CSC300 -->
                <tr id="csc300" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="csc300_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 300"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=4
                               readonly="readonly">

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

                <!-- Row: CSC314 -->
                <tr id="csc314" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="314_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 314"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=3
                               readonly="readonly">

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

            </table>
        </div>

        <!--***************************************************************************
        CSC Junior
        ****************************************************************************-->
        <div class="table_container">

            <table class="table" id="cscJun" data-color="rgba(0, 153, 204, .25)"
                   data-total=19 data-complete=0 data-inprogress=0 data-credit_gpa=0 data-gpa=0>

                <!-- Row: Header -->
                <tr id="cscJunHead" name="tableHeader">

                    <!-- Main Check Box -->
                    <td class="list check">
                        <input class="mainCheck" type="checkbox" tabindex="2" value="check">
                    </td>

                    <!-- Course Category -->
                    <td name="tableCategory">
                        <input class="list header CSC" type="text" value="CSC Junior:"
                               readonly="readonly">

                    </td>

                    <!-- Total Credits -->
                    <td name="tableCredits">
                        <input class="list credit total CSC" type="text" readonly="readonly">
                    </td>

                    <!-- GPA -->
                    <td name="tableGPA">
                        <input class="list grade total CSC" type="number" readonly="readonly">
                    </td>

                </tr>

                <!-- Row: CSC317 -->
                <tr id="csc317" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="csc217_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 317"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=3
                               readonly="readonly">

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

                <!-- Row: CSC372 -->
                <tr id="csc372" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="csc372_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 372"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=3
                               readonly="readonly">

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

                <!-- Row: CSC461 -->
                <tr id="csc461" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="csc461_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 461"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=4
                               readonly="readonly">

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

                <!-- Row: CSC468 -->
                <tr id="csc468" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="468_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 468"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=3
                               readonly="readonly">

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

                <!-- Row: CSC470 -->
                <tr id="csc470" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="470_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 470"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=3
                               readonly="readonly">

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

                <!-- Row: CSC484 -->
                <tr id="csc484" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="csc484_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 484"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=3
                               readonly="readonly">

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

            </table>
        </div>

        <!--***************************************************************************
        CSC Senior
        ****************************************************************************-->
        <div class="table_container">

            <table class="table" id="cscSen" data-color="rgba(0, 153, 204, .25)"
                   data-total=8 data-complete=0 data-inprogress=0 data-credit_gpa=0 data-gpa=0>

                <!-- Row: Header -->
                <tr id="cscSenHead" name="tableHeader">

                    <!-- Main Check Box -->
                    <td class="list check">
                        <input class="mainCheck" type="checkbox" tabindex="2" value="check">
                    </td>

                    <!-- Course Category -->
                    <td name="tableCategory">
                        <input class="list header CSC" type="text" value="CSC Senior:"
                               readonly="readonly">

                    </td>

                    <!-- Total Credits -->
                    <td name="tableCredits">
                        <input class="list credit total CSC" type="text" readonly="readonly">
                    </td>

                    <!-- GPA -->
                    <td name="tableGPA">
                        <input class="list grade total CSC" type="number" readonly="readonly">
                    </td>

                </tr>

                <!-- Row: CSC456/L -->
                <tr id="csc456" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="csc456_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 456/L"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=4
                               readonly="readonly">

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

                <!-- Row: CSC464 -->
                <tr id="csc464" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="csc464_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 464"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=2
                               readonly="readonly">

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

                <!-- Row: CSC465 -->
                <tr id="csc465" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="csc465_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC 465"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=2
                               readonly="readonly">

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

            </table>
        </div>

        <!--***************************************************************************
        CSC Elective
        ****************************************************************************-->
        <div class="table_container">

            <table class="table" id="cscElect" data-color="rgba(0, 153, 204, .25)"
                   data-total=12 data-complete=0 data-inprogress=0 data-credit_gpa=0 data-gpa=0>

                <!-- Row: Header -->
                <tr id="cscElectHead" name="tableHeader">

                    <!-- Main Check Box -->
                    <td class="list check">
                        <input class="mainCheck" type="checkbox" tabindex="2" value="check">
                    </td>

                    <!-- Course Category -->
                    <td name="tableCategory">
                        <input class="list header CSC" type="text" value="CSC Electives:"
                               readonly="readonly">

                    </td>

                    <!-- Total Credits -->
                    <td name="tableCredits">
                        <input class="list credit total CSC" type="text" readonly="readonly">
                    </td>

                    <!-- GPA -->
                    <td name="tableGPA">
                        <input class="list grade total CSC" type="number" readonly="readonly">
                    </td>

                </tr>

                <!-- Row: CSCElect1 -->
                <tr id="cscelective1" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="cscelective1_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC Elective">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=3
                               min=3 max=4>

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

                <!-- Row: CSCElect2 -->
                <tr id="cscelective2" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="cscelective2_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">
                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC Elective">
                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=3
                               min=3 max=4>
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

                <!-- Row: CSCElect3 -->
                <tr id="cscelective3" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="cscelective3_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC Elective">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=3
                               min=3 max=4>

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

                <!-- Row: CSCElect4 -->
                <tr id="cscelective4" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="cscelective4_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="CSC Elective">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=3
                               min=3 max=4>

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

            </table>

            <a class="list link CSC" href="csc_list.html" target="_blank">
                List of CSC Electives
            </a>

        </div>

        <!--***************************************************************************
        Math
        ****************************************************************************-->
        <div class="table_container">

            <table class="table" id="math" data-color="rgba(51, 102, 255, .25)"
                   data-total=21 data-complete=0 data-inprogress=0 data-credit_gpa=0 data-gpa=0>

                <!-- Row: Header -->
                <tr id="mathHead" name="tableHeader">

                    <!-- Main Check Box -->
                    <td class="list check">
                        <input class="mainCheck" type="checkbox" tabindex="2" value="check">
                    </td>

                    <!-- Course Category -->
                    <td name="tableCategory">
                        <input class="list header MATH" type="text" value="Math:"
                               readonly="readonly">

                    </td>

                    <!-- Total Credits -->
                    <td name="tableCredits">
                        <input class="list credit total MATH" type="text" readonly="readonly">
                    </td>

                    <!-- GPA -->
                    <td name="tableGPA">
                        <input class="list grade total MATH" type="number" readonly="readonly">
                    </td>

                </tr>

                <!-- Row: MATH123 -->
                <tr id="math123" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="math123_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="MATH 123"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=4
                               readonly="readonly">

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

                <!-- Row: MATH125 -->
                <tr id="math125" name="course">

                    <!-- Check Box -->
                    <td class="list check row">
                        <input class="checkbox" id="math125_chbox"
                               type="checkbox" tabindex="2" value="check" name="courseCheckBox">

                    </td>

                    <!-- Course ID -->
                    <td name="courseID">
                        <input class="list course row" tabindex="3" type="text" value="MATH 125"
                               readonly="readonly">

                    </td>

                    <!-- Credits -->
                    <td name="courseCredits">
                        <input class="list credit row" tabindex="3" type="number" value=4
                               readonly="readonly">

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

            </table>

            <a class="list link MATH" href="math_list.html" target="_blank">
                List of MATH Electives
            </a>

        </div>


        <!--***************************************************************************
        Science
        ****************************************************************************-->
        <div class="table_container">

            <table class="table" id="math" data-color="rgba(51, 102, 255, .25)"
                   data-total=21 data-complete=0 data-inprogress=0 data-credit_gpa=0 data-gpa=0>

                <!-- Row: Header -->
                <tr id="mathHead" name="tableHeader">

                    <!-- Main Check Box -->
                    <td class="list check">
                        <input class="mainCheck" type="checkbox" tabindex="2" value="check">
                    </td>

                    <!-- Course Category -->
                    <td name="tableCategory">
                        <input class="list header MATH" type="text" value="Math:"
                               readonly="readonly">

                    </td>

                    <!-- Total Credits -->
                    <td name="tableCredits">
                        <input class="list credit total MATH" type="text" readonly="readonly">
                    </td>

                    <!-- GPA -->
                    <td name="tableGPA">
                        <input class="list grade total MATH" type="number" readonly="readonly">
                    </td>

                </tr>

            </table>

            <!-- Science -->
            <a class="list link SCI" href="science_list.html" target="_blank">
                List of Science Courses
            </a>

        </div>


        <!-- Gen Eds -->
        <a class="list link GEN" href="gen_list.html" target="_blank">
            List of Gen Eds
        </a>

        <!-- English -->
        <!-- Free Credits -->
        <a class="list link FREE" href="free_list.html" target="_blank">
            Free Credit Suggestions
        </a>
    </div>
`
;