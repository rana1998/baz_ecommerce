window.onload = function()
{
 setTimeout(showPage(),3000);
}

function clickprofile()
{
  var profileId=document.getElementById("subprofileId");
  if(profileId.style.display=="block")
  {
  	profileId.style.display="none";
  }
  else
  {
  	profileId.style.display="block";
  }
}


function toggle()
{
var iconhide = document.getElementById("navbar");
var iconsmall =document.getElementById("navbarSmall");
var maincontent =document.getElementById("mainContentDiv");
var logo =document.getElementById("logo");
var menubar =document.getElementById("menubar");
var erp = document.getElementById("erp");


  if (screen.width <= 600) {

  if(iconhide.style.display=="none")
{
  iconhide.style.display="block";
  iconsmall.style.display="none";
  maincontent.style.width="85%";
  logo.style.width="15%";
  menubar.style.width="85%";
  erp.style.display="block";
}
else
 {
  iconhide.style.display="none"
  iconsmall.style.display="block";
  maincontent.style.width="85%";
  logo.style.width="15%";
  menubar.style.width="85%";
  erp.style.display="none";

  }

} 
else{

if(iconhide.style.display=="none")
{
  iconhide.style.display="block";
  iconsmall.style.display="none";
  maincontent.style.width="85%";
  logo.style.width="15%";
  menubar.style.width="85%";
  erp.style.display="block";
}
  else
 {
  iconhide.style.display="none"
  iconsmall.style.display="block";
  maincontent.style.width="90%";
  logo.style.width="10%";
  menubar.style.width="90%";
  erp.style.display="none";
  }

 }

}


function attendclick()
{
var attend = document.getElementById("submenu");
if(attend .style.display=="none")
{
  attend .style.display="block";
}
else
{
	attend.style.display="none"
}

}

function classclick()
{
var attend = document.getElementById("subAttend");
if(attend.style.display=="none")
{
  attend.style.display="block";
}
else
{
	attend.style.display="none"
}

}

function clickhuman()
{
var humanId = document.getElementById("human_resource");
if(humanId.style.display=="none")
{
  humanId.style.display="block";
}
else
{
	humanId.style.display="none"
}

}

function settingclick()
{
  var subsettingId = document.getElementById("subsettingId");
if(subsettingId.style.display=="none")
{
  subsettingId.style.display="block";
}
else
{
 subsettingId.style.display="none"
}
}




