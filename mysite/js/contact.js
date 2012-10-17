	
/*
	Author:        Portfolio Site
	Created On:	   Kelly Purdie
	Revised On:	   March 1 2012
	Language: 	   Java Script
	
	Related Files:
	
*/
var textboxes = new Array();

window.onload = init;

var $$ = function (id)
	{
		return document.getElementById(id);
	}//End $
	
function init()//declaring variable and when will the function be call
{	
	var inputs = new Array();
	inputs = document.getElementsByTagName("input"); //tag name <input>
	
	
	$$("newsletter").onsubmit = validateForm;
	
	/*var select = new Array();
	select = document.getElementsByTagName("select"); //tag name <input>*/
	
	option = new Array();
	
	
	for (var i = 0; i < inputs.length; i++) // walks all the input boxes (array)  
	{
		if (inputs[i].type == "text") // if it finds text
		{
			textboxes.push(inputs[i]); //???
		}
	}//End for
	for (var i = 0; i < textboxes.length; i++)
	{
		textboxes[i].onblur = validateField;
	}//End for

	/*($("month")+$("day")+$("year")).onchange = validateDate;
	
	
	$("month").onchange = validateDate;
	$("day").onchange = validateDate;
	$("year").onchange = validateDate;*/
}// End init
/*
function validateDate()
{
	var month_select = $("month"); //assigning the <id> month to the variable "X"
	var month_option = month_select[month_select.selectedIndex].text; //calling the id's select option's text and assigning it to the variable m
	var day_select = $("day");//assigning the <id> day to the variable "X"
	var day_option = day_select[day_select.selectedIndex].text;
	var year_select = $("year");
	var year_option = year_select[year_select.selectedIndex].text;
	var dd= month_option + " " + day_option + "," + year_option; //assigning the order of Date to the variable dd as you pull the information
	var date = new Date(dd); // assigned or store the new date "dd" to variable "date"
	date = date.toString();//convert number data to strings
	var code = (date.substring(0, date.indexOf(dd[0]+dd[1]+dd[2])));
	
		if ( date == "invalid date")
		{
		$("error").className = "error";
		}
		else if ( code == "")
		{
		$("error").className = "error";
		}
		else
		{
		$("error").className = "hidden"
		}
		console.log(code);
	
}*/
	
function validateField()
{
	var id = this.id;
	var valid = false;
	
	var code = (id.substring(0, id.indexOf("_")));/*substring = extract from 0 to the first under score so up to but not including */
	/*	if (code == "req"){	valid = (this.value.length > 0);}//End if
	else if (code == "email"){valid = testEmail(this.value);}// End of else if "this code was replace by the switch code*/
		
	switch (code)
	{
		case "req":
		 valid  = (this.value.length > 0);
		 break;
		case "email":
		 valid = testEmail (this.value);
		 break;
	 }//End switch
	if (valid)
	{
		this.className = "";
	}//End if
	else
	{
		this.className = "error";
		
		//field.focus(); field.select(); to make the user not leave the box untill field is complete.
		//(not support by firefox)
	}
}//End validateField
function testEmail(email)
{
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	
	return emailRegEx.test(email);
}//End testEmail

function validateForm()
{

	var valid = true;
	for(var i = 0; i < textboxes.length; i++)
	{
		textboxes[i].focus();
		textboxes[i].blur();
		
		if (textboxes[i].className == "error")
		{
			
			valid = false;
			break;
		}//End if
	}//End for 
	/*
	if ($("req_birthday").value == "default") // if the select box value == default?
	{
		valid = false;
		$("req_birthday").className = "error"; //If yes change the className to "error"
	}// End if
	*/
	
	return valid;
}//End validateForm