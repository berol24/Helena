
function openPage(pageName, elmnt, backgroundColor, color) {

  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
      tabcontent[i].style.backgroundColor = ""; 
      tabcontent[i].style.color = ""; 
  }

 
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
      tablinks[i].style.color = ""; 
  }


  var selectedTab = document.getElementById(pageName);
  selectedTab.style.display = "block";
  selectedTab.style.backgroundColor = backgroundColor; 
  selectedTab.style.color = color;
  

  elmnt.style.backgroundColor = backgroundColor;
  elmnt.style.color = color;
}


document.getElementById("defaultOpen").click();





















