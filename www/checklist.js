/********************************** globals **********************************/
var totalGPA = 0;
var totalCreditsGPA = 0;
var totalCreditsTaken = 0;
var totalCreditsPossible = 120;

/*****************************************************************************
init
******************************************************************************/
function init()
{
	var tables = document.getElementsByClassName("table");
	var i;
	for(i = 0; i< tables.length; i++)
	{
		initTable(tables[i],tables[i].dataset.color)
	}
}

/*****************************************************************************
initTable
******************************************************************************/
function initTable(table, color)
{
	var mainCheck = table.getElementsByClassName("mainCheck");
	mainCheck[0].onchange= function()
		{checkTable(table,color)};
	var checkBoxes = table.getElementsByClassName("checkbox");
	var creditBoxes = table.getElementsByClassName("list course row");
	var GPABoxes = table.getElementsByClassName("list dropdown row");
	var i;
	for( i = 0; i < checkBoxes.length; i++)
	{
		checkBoxes[i].onchange=function()
		{
			var row = this.parentNode.parentNode;
			var currTable = this.parentNode.parentNode.parentNode.parentNode;
			checkRow(row,currTable.dataset.color)
			updateTable(currTable);
		};
			
		creditBoxes[i].onchange=function()
		{
			var row = this.parentNode.parentNode;
			var currTable = this.parentNode.parentNode.parentNode.parentNode;
			var checkBox = row.getElementsByClassName("checkbox")[0];
			if(checkBox.checked)
				updateTable(currTable);
		}
		
		GPABoxes[i].onchange=function()
		{
			var row = this.parentNode.parentNode;
			var currTable = this.parentNode.parentNode.parentNode.parentNode;
			var checkBox = row.getElementsByClassName("checkbox")[0];
			if(checkBox.checked)
				updateTable(currTable);
		}
		
		updateTable(table);
	}
	
}

/*****************************************************************************
checkTable
******************************************************************************/
function checkTable(table, color)
{
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
				checkRow(row,color);
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
				checkRow(row,color);
			}
		}
	}
	
	updateTable(table);
}

/*****************************************************************************
checkRow
******************************************************************************/
function checkRow(course, color)
{
	course = course.children;
	
	if(course[0].lastElementChild.checked)
	{
		// check course
		course[1].lastElementChild.style.backgroundColor = color;
		course[2].lastElementChild.style.backgroundColor = color;
		course[3].lastElementChild.style.backgroundColor = color;
	}
	else
	{
		// uncheck course
		course[1].lastElementChild.style.backgroundColor = "white";
		course[2].lastElementChild.style.backgroundColor = "white";
		course[3].lastElementChild.style.backgroundColor = "white";
	}
}

/*****************************************************************************
totalGPA
******************************************************************************/
function total_GPA()
{
	var gpa = document.getElementById("cumulative_gpa");
	var completedCredits = document.getElementById("completed_credits");
	var inProgress = document.getElementById("in_progress");
	var tables = document.getElementsByClassName("table");
	var currGPA = 0;
	var currCreditGPA = 0;
	var currCreditComplete = 0;
	var currCreditInProgress = 0;
	var sumQualityPoints = 0;
	var sumCreditGPA = 0;
	var sumInProgress = 0;
	var cumulativeGPA = 0;
	var i;
	
	for(i=0; i<tables.length; i++)
	{
		currGPA = parseFloat(tables[i].dataset.gpa);
		currCreditGPA = parseInt(tables[i].dataset.credit_gpa);
		currCreditTaken = parseInt(tables[i].dataset.credit_complete);
		currCreditInProgress = parseInt(tables[i].dataset.credit_inprogress);
		
		sumQualityPoints += currGPA * currCreditGPA;
		sumCreditGPA += currCreditGPA;
		sumInProgress += currCreditInProgress;
	}
	
	if(sumCreditGPA == 0)
		cumulativeGPA = 0;
	else
		cumulativeGPA = sumQualityPoints/sumCreditGPA;
	
	gpa.value= cumulativeGPA.toFixed(2);
	completedCredits.value = sumCreditGPA;
	inProgress.value = sumInProgress;
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
	var sumCreditCompleted = 0;
	var sumCreditInProgress = 0;
	
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
		courseCredits = parseInt(credits[i].value);
		courseGrade = grades[i].value;
		
		/* if current course is checked */
		if( checkBoxes[i].checked )
		{
			
			/* if course has grade */
			if( !isNaN(courseGrade) )
			{
				/* add credits to taken */
				sumCreditCompleted += courseCredits;
			
				/* add credits to GPA credits */
				sumCreditGPA += courseCredits;
				
				/* calculate quality points and add to sum */
				sumQualityPoints += courseCredits * courseGrade;
			}
			/* if course is ungraded */
			else if( courseGrade == 'null' )
			{
				sumCreditInProgress += courseCredits;
			}
			/* if course is EX */
			else if( courseGrade == 'EX' )
			{
				/* add credits to taken */
				sumCreditCompleted += courseCredits;
			}
		}
	}
	
	/* set header credits */
	creditTotal.value = sumCreditCompleted.toString() 
		+ '/'
		+ table.dataset.credit_total;
		
	/* calculate table gpa */
	if( sumCreditGPA == 0 )
		GPA = 0;
	else
		GPA = sumQualityPoints / sumCreditGPA;
	GPA = GPA.toFixed(2);
	
	/* set header gpa */
	if(isNaN(GPA))
		gradeTotal.value = 0;
	else
		gradeTotal.value = GPA.toString();
	
	/* set table data */
	table.dataset.credit_complete = sumCreditCompleted;
	table.dataset.credit_inprogress = sumCreditInProgress;
	table.dataset.credit_gpa = sumCreditGPA;
	table.dataset.gpa = GPA;
	
	total_GPA();
}


