
/*
	Author:        	Contact Page of CK.ME webpage
	Created On:	   Kelly Purdie
	Revised On:	   March 19 2012
	Language: 	   Java Script
	
	Related Files:
	
*/

window.onload = init;

var $ = function (id)
	{
		return document.getElementById(id);
	}//End $
	
function init()//declaring variable and when will the function be call
{	
	var inputs = new Array();
	inputs = document.getElementsByTagName("input"); //tag name <input>
	
	textboxes = new Array();
	
	$("newsletter").onsubmit = validateForm;
	
	var select = new Array();
	select = document.getElementsByTagName("select"); //tag name <input>
	
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

	
}// End init


	
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
		
}