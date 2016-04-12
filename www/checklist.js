/********************************** globals **********************************/
var totalGPA = 0;
var totalCreditsGPA = 0;
var totalCreditsTaken = 0;
var totalCreditsPossible = 120;

var cscFreshCreditsGPA = 0;
var cscSophCreditsGPA = 0;
var cscJunCreditsGPA = 0;
var cscSenCreditsGPA = 0;
var mathCreditsGPA = 0;
var sciCreditsGPA = 0;
var genCreditsGPA = 0;
var englCreditsGPA = 0;
var freeCreditsGPA = 0;

/*****************************************************************************
init
******************************************************************************/
function init()
{
	var table = document.getElementById("cscFresh");
	var mainCheck = table.getElementsByClassName("mainCheck");
	mainCheck[0].onchange= function()
		{checkTable("cscFresh","rgba(0, 153, 204, .25)")};
	var checkBoxes = table.getElementsByClassName("checkBox");
	
	
	
	updateTable(table);
}

/*****************************************************************************
checkTable
******************************************************************************/
function checkTable(tableID, color)
{
	var table = document.getElementById(tableID);
	var numRows = table.rows.length;
	var row = table.rows[0];
	var i;
	
	if(row.children[0].children[0].checked == true)
	{
		// check all boxes in table
		for(i=1; i< numRows; i++)
		{
			row = table.rows[i];
			if(row.children[0].children[0].checked == false )
			{
				row.children[0].children[0].checked = true;
				checkRow(row.id,color);
			}
		}
	}
	else
	{
		// uncheck all boxes in table
		for(i=1; i< numRows; i++)
		{
			row = table.rows[i];
			if(row.children[0].children[0].checked == true )
			{
				row.children[0].children[0].checked = false;
				checkRow(row.id,color);
			}
		}
	}
	
	updateTable(table);
}

/*****************************************************************************
checkRow
******************************************************************************/
function checkRow(courseID, color)
{
	var course = document.getElementById(courseID).cells;
	
	if(course[0].lastElementChild.checked)
	{
		// check course
		course[1].style.backgroundColor = color;
		course[2].style.backgroundColor = color;
		course[3].lastElementChild.style.backgroundColor = color;
	}
	else
	{
		// uncheck course
		course[1].style.backgroundColor = "white";
		course[2].style.backgroundColor = "white";
		course[3].lastElementChild.style.backgroundColor = "white";
	}
}
/*****************************************************************************
updateTable
******************************************************************************/
function updateTable(table)
{
	/* table header */
	var creditTotal = table.getElementsByClassName("credit total")[0];
	var gradeTotal = table.getElementsByClassName("grade total")[0];
	
	/* table rows*/
	var checkBoxes = table.getElementsByClassName("checkbox");
	var credits = table.getElementsByClassName("list credit row");
	var grades = table.getElementsByClassName("list dropdown row");
	
	/* credit variables */
	var courseCredits = 0;
	var sumCreditTotal = 0;
	var sumCreditTaken = 0;
	var sumCreditUngraded = 0;
	
	/* gpa variables */
	var courseGrade = 0;
	var sumCreditGPA = 0;
	var sumQualityPoints = 0;
	var GPA = 0;
	
	/* iteration variables */
	var numRows = checkBoxes.length;
	var i;
	
	for(i=0; i<numRows; i++)
	{
		/* grab current course credits and grade */
		courseCredits = parseInt(credits[i].innerText);
		courseGrade = grades[i].value;
		
		/* add credits to total possible */
		sumCreditTotal += courseCredits
		
		/* if current course is checked */
		if( checkBoxes[i].checked )
		{
			/* add credits to taken */
			sumCreditTaken += courseCredits;
			
			/* if course has grade */
			if( !isNaN(courseGrade) )
			{
				/* add credits to GPA credits */
				sumCreditGPA += courseCredits;
				
				/* calculate quality points and add to sum */
				sumQualityPoints += courseCredits * courseGrade;
			}
			/* if course is ungraded */
			else if( courseGrade = 'null' )
			{
				sumCreditUngraded += courseCredits;
			}
		}
	}
	
	/* set header credits */
	creditTotal.innerText = sumCreditTaken.toString() 
		+ '/'
		+ sumCreditTotal.toString();
		
	/* calculate table gpa */
	GPA = sumQualityPoints / sumCreditGPA;
	GPA = GPA.toFixed(2);
	
	/* set header gpa */
	if(isNaN(GPA))
		gradeTotal.innerText = " ";
	else
		gradeTotal.innerText = GPA.toString();
	
	/* set global */
	setTableCreditsGPA(table.id, sumCreditGPA);
}


/*****************************************************************************
setTableCreditsGPA
******************************************************************************/
function setTableCreditsGPA( tableID, creditGPA )
{
	switch(tableID)
	{
		case "cscFresh":
			cscFreshCreditsGPA = creditGPA;
			break;
	}
}

