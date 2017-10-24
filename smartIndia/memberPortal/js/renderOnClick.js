var enlist=document.getElementById("enlist");
var subIns1=document.getElementById("subIns1");
var subIns2=document.getElementById("subIns2");
var numsub=document.getElementById("numsub");
var generate=document.getElementById("generate");
var output=document.getElementById("output");
var innerForm=document.getElementById("innerForm");
var t1=document.getElementById("t1");
var submitSub=document.getElementById("submitSub");
var errmsg=document.getElementById("errmsg");
var rb1=document.getElementById("formBased");
var rb2=document.getElementById("csv");
var insCourse=document.getElementById("insertCourse");

var headings= ['course_id','name','type','credits','faculty_id'];




rb1.onclick=function(){
	subIns2.style.display="none";
	subIns1.style.display="block";
	
	
}
rb2.onclick=function(){
	subIns1.style.display="none";
	subIns2.style.display="block";
}

enlist.onclick=function()
{   
    insertCourse.style.display="block"
	
}

generate.onclick=function()
{
    errmsg.style.display="None";
if(isNaN(numsub.value) || (numsub.value >10 || numsub.value <1))   
	errmsg.style.display="block";

else 
{
	//formGen(numsub.value);
	 callFile("ajax_calls/genForm.php?number="+numsub.value);
	 submitSub.style.display="block";
}
	
}




function formGen(num) 
{
t1.innerHTML="";	

var r=t1.insertRow(0);

for(var j=0;j<5;j++)
{
	var y= r.insertCell(j);
	y.innerHTML="<th><strong>"+headings[j]+"</strong></th>";
}
	
	for(var i=0;i<num;i++)
	{
		var row=t1.insertRow(i+1);
		for(var j=0;j<5;j++)
		{var x = row.insertCell(j);
	      x.innerHTML="<input size='15'></input>"; 
		}
	}

submitSub.style.display="block";	
	
}

submitSub.onclick= function()
{
	
	 submitData();
	
	
}

function validate()
{
var tr=document.getElementsByTagName("input");	
var num=numsub.value;
var flag=0;
for(var i=4;i<num+4;)
{
	for(var j=0;j<5;j++,i++)
	{	
	 
	 if(tr[i] != null)
	 {
     	 if((j==0 || j==3 || j==4) && (isNaN(tr[i].value)))  
	  {
		  tr[i].style.border="1px solid red";
		  flag=1;
	  }
	  if((j==1 || j==2)  && (isNotWord(tr[i].value)))
		  
      {
		  tr[i].style.border="1px solid red";
		  flag=1;
	  } 
	 }
     else{	 
      	
		flag=1;
      }
	}
	if(flag==0) return true;
	else false;
	
}

			
}

submitData=function() 
{
submitSub.style.display="none";
var tr=document.getElementsByTagName("input");	
var num=numsub.value;
var k=0,str="ajax_calls/courseValidate.php?";
for(var i=4;i<num*5;i+=5)
{  k=0;
  for(var j=0;j<5;j++)
  {   k=i+j;
	  var data=tr[k].value;
	  str=str+headings[j]+"="+data+"&";
  }
  console.log(str);
  callFile(str);
  str="ajax_calls/courseValidate.php?";  
	
}	
	
}



function callFile(fileName)
{
	
  var xhttp; 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200) 
	{
    document.getElementById("t1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET",fileName, true);
  xhttp.send();
	
}

function isNotWord(word)
{
var regexp1=new RegExp("[a-z|A-Z]");
if(regexp1.test(word)) return false;
else
return true;

}