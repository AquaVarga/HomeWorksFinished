var listScreen = document.querySelector(".ListForm");
var editScreen = document.querySelector(".EditForm");
var newScreen = document.querySelector(".NewForm");

newScreen.querySelector("button").onclick = function()
{
	newScreen.classList.add("hidden");	
};
editScreen.querySelector("button").onclick = function()
{
	editScreen.classList.add("hidden");
};

