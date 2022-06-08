window.addEventListener('load', function () {
    window.scrollTo(0,0);
  });  

let Language = localStorage.getItem('Language');
	console.log(Language);

function toggleLanguage(Language) {
	// var element = document.body;
	// element.classList.toggle("dark-mode");

	if (Language === "Nederlands") {
	  $("#nlbtn").show();  
	  $("#enbtn").hide();  
	  $("#nlText").show();
	  $("#enText").hide();
    	localStorage.setItem('Language', 'Nederlands');
	}
	if (Language === "English"){
	  $("#enbtn").show();  
	  $("#nlbtn").hide();  
	  $("#enText").show();  
	  $("#nlText").hide(); 
    	localStorage.setItem('Language', 'English');
	}
}

const enableTranslate = () => {
	// 1. Add the class to the body
	// document.body.classList.add('dark-mode');
	// var element = document.body;
	// element.classList.toggle("dark-mode");

	$("#enbtn").show();  
	$("#nlbtn").hide();  
	$("#enText").show();  
	$("#nlText").hide();

    // 2. Update Language in localStorage
	localStorage.setItem('Language', 'English');
}

const disableTranslate = () => {
	// 1. Remove the class from the body
  	var element = document.body;
  	$("#nlbtn").show();  
	$("#enbtn").hide();  
	$("#nlText").show();
	$("#enText").hide();

	// 2. Update Language in localStorage 
    localStorage.setItem('Language', 'Nederlands');
}
if (Language === 'English'){
	enableTranslate();
}
if (Language === 'Nederlands'){
	disableTranslate();
}

let Mode = localStorage.getItem('Mode');
	console.log(Mode);


function toggleMode(Mode) {
	var element = document.body;
	element.classList.toggle("dark-mode");

	if (Mode === "Light") {
	  $("#lightbtn").show();  
	  $("#darkbtn").hide();  
    	localStorage.setItem('Mode', 'Light');
	}
	if (Mode === "Dark"){
	  $("#darkbtn").show();  
	  $("#lightbtn").hide();  
    	localStorage.setItem('Mode', 'Dark');
	}
  	// Mode = localStorage.getItem('Mode'); 

	// console.log(Mode);
}

const enableDarkMode = () => {
	// 1. Add the class to the body
	// document.body.classList.add('dark-mode');
	var element = document.body;
	
	element.classList.toggle("dark-mode");
	$("#darkbtn").show();  
 	$("#lightbtn").hide();

    // 2. Update Mode in localStorage
	localStorage.setItem('Mode', 'Dark');
}

const disableDarkMode = () => {
	// 1. Remove the class from the body
  	var element = document.body;
  	$("#lightbtn").show();  
	$("#darkbtn").hide(); 

	// 2. Update Mode in localStorage 
    localStorage.setItem('Mode', 'Light');
}
if (Mode === 'Dark'){
	enableDarkMode();
}
if (Mode === 'Light'){
	disableDarkMode();
}


// slideshow
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}