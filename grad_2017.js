function grad_2017()
{
    var xml;
    var xhttp = new XMLHttpRequest();

    // !! using this method is deprecated, should figure out
    // a way to use .onreadystatechange()
    xhttp.open("GET", "catalog_2017.xml", false);
    xhttp.send();

    if (xhttp.readyState == 4 && xhttp.status == 200)
    {
        xml = xhttp.responseXML;
    }

    // catalog
    var catalog = document.createElement("div");
    catalog.id = "catalog";

    // catalog attributes
    var xml_catalog = xml.firstChild;
    catalog.dataset.total = xml_catalog.getAttribute('total');

    // fill with tables
    var tables = xml_catalog.children;
    for (var i = 0; i < tables.length; i++)
    {
        catalog.appendChild(parseTable(tables[i]));

    }
    return catalog;
}

function parseTable(xml_table)
{
    // set table_container
    var table_container = document.createElement("div");
    table_container.className = "table_container";

    // set table
    var table = document.createElement("table");

    // table defaults
    table.className="table";
    table.dataset.complete="0";
    table.dataset.inprogress="0";
    table.dataset.credit_gpa="0";
    table.dataset.gpa="0";

    // table xml
    table.id=xml_table.getAttribute('id');
    table.dataset.total=xml_table.getAttribute('total');
    table.dataset.color=xml_table.getAttribute('color');

    // set header
    var header = document.createElement("tr");
    var xml_header = xml_table.children[0];

    header.id = xml_header.getAttribute('id');

    header = setHeader(header, xml_header.getAttribute('title'), xml_table.getAttribute('color1'));

    table.appendChild(header);

    // set courses
    var courses = xml_table.children;
    for (var i = 1; i < courses.length; i++)
    {
        table.appendChild(setCourse(courses[i]));
    }


    // add table to container
    table_container.appendChild(table);

    return table_container;
}

function setHeader(header, title, color)
{
    // checkbox
    var check = document.createElement('td');
    check.className = "list check";

    var input = document.createElement('input');
    input.className = "mainCheck";
    input.type = "checkbox";
    input.tabindex = "2";
    input.value = "check";

    check.appendChild(input);

    // category
    var category = document.createElement('td');

    var input = document.createElement('input');
    input.className="list header";
    input.style.backgroundColor=color;
    input.type="text";
    input.value=title;
    input.readonly="readonly";

    category.appendChild(input);

    // credits
    var credits = document.createElement('td');

    var input = document.createElement('input');
    input.className="list credit total";
    input.style.backgroundColor=color;
    input.type="text";
    input.readonly="readonly";

    credits.appendChild(input);

    // gpa
    var gpa = document.createElement('td');

    var input = document.createElement('input');
    input.className="list grade total";
    input.style.backgroundColor=color;
    input.type="number";
    input.readonly="readonly";

    gpa.appendChild(input);

    header.appendChild(check);
    header.appendChild(category);
    header.appendChild(credits);
    header.appendChild(gpa);

    return header;
}

function setCourse(xml_course)
{
    // set course
    var course = document.createElement("tr");
    course.id = xml_course.getAttribute('id');

    // checkbox
    var check = document.createElement('td');
    check.className = "list check row";

    var input = document.createElement('input');
    input.className = "checkbox";
    input.type = "checkbox";
    input.tabindex = "2";
    input.value = "check";

    check.appendChild(input);

    // courseID
    var courseID = document.createElement('td');

    var input = document.createElement('input');
    input.className = "list course row";
    input.tabindex = "3";
    input.type = "text"
    input.value = xml_course.getAttribute('title');

    if (xml_course.getAttribute('readonly') == "true")
        input.readOnly = "readonly";
    //else

    courseID.appendChild(input);

    // credits
    var credits = document.createElement('td');

    var input = document.createElement('input');
    input.className = "list credit row";
    input.tabIndex = "3";
    input.type = "number";
    input.value = xml_course.getAttribute('credits');

    if (xml_course.getAttribute('readonly') == "true")
        input.readOnly = "readonly";

    credits.appendChild(input);

    // grade
    var grade = document.createElement('td');

    // grade dropdown
    var select = document.createElement('select');
    select.className = "list dropdown row"
    select.tabIndex = "1";

    // grade dropdown option null
    var option = document.createElement('option')
    option.value = "null";
    select.appendChild(option);

    // grade dropdown option A
    var option = document.createElement('option')
    option.value = "4";
    option.innerText = "A";
    select.appendChild(option);

    // grade dropdown option B
    var option = document.createElement('option')
    option.value = "3";
    option.innerText = "B";
    select.appendChild(option);

    // grade dropdown option C
    var option = document.createElement('option')
    option.value = "2";
    option.innerText = "C";
    select.appendChild(option);

    // grade dropdown option D
    var option = document.createElement('option')
    option.value = "1";
    option.innerText = "D";
    select.appendChild(option);

    // grade dropdown option EX
    var option = document.createElement('option')
    option.value = "EX";
    option.innerText = "EX";
    select.appendChild(option);

    grade.appendChild(select);

    // set course
    course.appendChild(check);
    course.appendChild(courseID);
    course.appendChild(credits);
    course.appendChild(grade);

    return course;
}