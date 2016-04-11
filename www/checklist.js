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
	
	setCreditsTotal(tableID);
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
setCreditsTotal
******************************************************************************/
function setCreditsTotal(tableID)
{
	var table = document.getElementById(tableID);
	var numRows = table.rows.length;
	var row;
	var sumTotal = 0;
	var sumChecked = 0;
	var i;
	
	for(i=1; i<numRows;i++)
	{
		row = table.rows[i];
		sumTotal += parseInt(row.children[2].innerText);
		if(row.children[0].children[0].checked == true)
			sumChecked += parseInt(row.children[2].innerText);
	}
	
	row = table.rows[0];
	row.children[2].innerText = sumChecked.toString() 
		+ '/'
		+ sumTotal.toString();
}

/*****************************************************************************
updateCourseCredit
******************************************************************************/
function updateCourseCredit(table,course)
{
	if( course.children[0].checked == true )
		table.rows[0].children[2]
	
}

/*****************************************************************************
setTableGPA
******************************************************************************/
function setTableGPA(tableID,courseID)
{
	
	
}

/*****************************************************************************
setCourseGrade
******************************************************************************/
function setCourseGrade(tableID,courseID)
{
	
	
}