/********************************** globals **********************************/
var totalCreditsPossible = 120;
var date_array = {"test": "","2017": ""};

/*****************************************************************************
init
******************************************************************************/
function init()
{
    var gradDate = document.getElementById("grad_date");

    // add event handler to graduation date drop box that changes the page content
	gradDate.onchange = function ()
	{

        // get selected grad date
	    var gradDate = document.getElementById("grad_date");
	    var date = gradDate.value;
	    var catalog = document.getElementById("catalog");

        // replace page with grad date content
	    $(catalog).replaceWith(date_array[date]);
	    initCatalog();
	}

    // initialize default year on page open/refresh
	var catalog = document.getElementById("catalog");
    $(catalog).replaceWith(window.grad_test);
    initCatalog();

    // initialize page values
	date_array["test"] = window.grad_test;
	date_array["2017"] = window.grad_2017();
}


/*****************************************************************************
initCatalog
******************************************************************************/
function initCatalog()
{
    var tables = document.getElementsByClassName("table");
    var i;
    for (i = 0; i < tables.length; i++) {
        initTable(tables[i], tables[i].dataset.color)
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
			var currTable = this.parentNode.parentNode.parentNode;
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
updateStats
******************************************************************************/
function updateStats()
{
	var progress = document.getElementById("progress");
	var gpa = document.getElementById("cumulative_gpa");
	var completedCredits = document.getElementById("completed_credits");
	var inProgress = document.getElementById("in_progress");
	
	var tables = document.getElementsByClassName("table");
	var dataset;
	
	var cumulativeGPA = 0;
	var sumQualityPoints = 0;
	var sumCredGPA = 0;
	var sumCredComplete = 0;
	var sumInProgress = 0;
	var percentComplete = 0;
	var percentInProgress = 0;
	
	var i;
	
    // total the statistic data stored in tables
	for(i=0; i<tables.length; i++)
	{
		dataset = tables[i].dataset;
		
		sumQualityPoints += parseFloat(dataset.gpa) * parseInt(dataset.credit_gpa);
		sumCredGPA += parseInt(dataset.credit_gpa);
		sumInProgress += parseInt(dataset.inprogress);
		
		if(parseInt(dataset.complete) > parseInt(dataset.total))
			sumCredComplete += parseInt(dataset.total);
		else
			sumCredComplete += parseInt(dataset.complete);
	}
	
    // calculate gpa
	if(sumCredGPA == 0)
		cumulativeGPA = 0;
	else
		cumulativeGPA = sumQualityPoints/sumCredGPA;
	
    // calculate progress bar values
	percentComplete = sumCredComplete/totalCreditsPossible * 100;
	percentInProgress = sumInProgress/totalCreditsPossible * 100;
	
    // set html values
	progress.value = Math.round(percentComplete).toString() + "%";
	gpa.value = cumulativeGPA.toFixed(2);
	completedCredits.value = sumCredComplete;
	inProgress.value = sumInProgress;
	
	updateProgress(percentComplete,percentInProgress);
}

/*****************************************************************************
updateProgress
******************************************************************************/
function updateProgress(percentComplete, percentInProgress)
{
	var barComplete = document.getElementById("bar_complete");
	var barInProgress = document.getElementById("bar_inprogress");
	
	var completeWidth = percentComplete;
	var inProgressWidth = percentInProgress;
	
	completeWidth = completeWidth.toString();
	inProgressWidth = inProgressWidth.toString();
	
	barComplete.setAttribute("style","width:"+completeWidth+"%;");
	barInProgress.setAttribute("style","width:"+inProgressWidth+"%;");
	
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
		+ table.dataset.total;
		
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
	table.dataset.complete = sumCreditCompleted;
	table.dataset.inprogress = sumCreditInProgress;
	table.dataset.credit_gpa = sumCreditGPA;
	table.dataset.gpa = GPA;
	
	updateStats();
}