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
}

/*****************************************************************************
checkRowCSC
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