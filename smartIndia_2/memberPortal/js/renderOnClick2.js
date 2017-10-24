var enroll=document.getElementById("enroll");
var t1=document.getElementById("t1");
var generate=document.getElementById("generate");
var selectSub=document.getElementById("selectSub");
var subIns1=document.getElementById("subIns1");
var submitSub=document.getElementById("submitSub");
var usn=document.getElementById("usn");
var msg=document.getElementById("msgFrmSvr");



function callFile(fileName,id)
{
	
  var xhttp; 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200) 
	{
    document.getElementById(id).innerHTML = this.responseText;
    }
  };
  xhttp.open("GET",fileName, true);
  xhttp.send();
	
}
enroll.onclick=function(){
	msg.style.display="none";
	subIns1.style.display="block";
	callFile('ajax_calls/genForm2.php','t1');
	submitSub.style.display="block";
}

submitSub.onclick=function(){
	subIns1.style.display="none";
	submitSub.style.display="none";
	msg.style.display="block";
	var elmts=document.getElementsByTagName("input");
	var arr =[],j=0;
	for(var i=0;i<elmts.length-1;i++)
	{	if(elmts[i].checked)
		{
			arr[j]=elmts[i].id;
			j++;
		}	
	}
	var str=serialize(arr);
	str=str+"&usn="+usn.value;
	console.log(str);
	callFile("ajax_calls/studentEnrolls.php?"+str,"msgFrmSvr");
	
}

function serialize(arr)
{  var str;
   str="length="+arr.length;
	for(var i=0;i< arr.length;i++)
		str+="&course_id"+i+"="+arr[i];
   return str;
	
	
	
	
}



