var meatArray = ["Beef", "Pork", "Chicken", "Lamb"];
var meatId = [2, 3, 1, 4];
var vegetableArray = ["Fumak", "Chaisim", "Khailan", "BokChoy"];
var vegetableId = [8, 6, 7, 9];
var noodleArray = ["Udon", "Ramen"];
var noodleId = [10, 11];
var fruitArray = ["Apple", "Pineapple", "Watermelon", "Pear"];
var fruitId = [12, 13, 14, 15];
var etcArray = ["Soda", "Beer", "Chocolate" , "Bread"];
var etcId = [16, 17];

myDiv = document.getElementById("input-checkbox");
var flag =0;

function clearDiv(myDiv){
	document.getElementById(myDiv).innerHTML = "";
}

function labelMeat(){
	if(flag != 1){
		clearDiv("input-checkbox");
		flag=1;

		for(var i =0; i < meatArray.length; i++){
			var checkBox = document.createElement("input");
			var label = document.createElement("label");
			var myEnter2 = document.createElement("br");
			var myEnter1 = document.createElement("br");

			checkBox.type = "checkbox";
			checkBox.value = meatArray[i];
			checkBox.name = meatId[i];

			myDiv.appendChild(myEnter1);
			myDiv.appendChild(checkBox);
			myDiv.appendChild(label);
			myDiv.appendChild(myEnter2);
			label.appendChild(document.createTextNode(meatArray[i]));
		}
	}
}

function labelVegetable(){	
	if(flag != 2){
		clearDiv("input-checkbox");
		flag=2;

		for(var i =0; i < vegetableArray.length; i++){
			var checkBox = document.createElement("input");
			var label = document.createElement("label");
			var myEnter2 = document.createElement("br");
			var myEnter1 = document.createElement("br");

			checkBox.type = "checkbox";
			checkBox.value = vegetableArray[i];
            checkBox.name = vegetableId[i];

			myDiv.appendChild(myEnter1);
			myDiv.appendChild(checkBox);
			myDiv.appendChild(label);
			myDiv.appendChild(myEnter2);
			label.appendChild(document.createTextNode(vegetableArray[i]));
		}
	}
}

// function labelSpice(){
// 	if(flag != 3){
// 		clearDiv("input-checkbox");
// 		flag=3;
//
// 		for(var i =0; i < spiceArray.length; i++){
// 			var checkBox = document.createElement("input");
// 			var label = document.createElement("label");
// 			var myEnter2 = document.createElement("br");
// 			var myEnter1 = document.createElement("br");
//
// 			checkBox.type = "checkbox";
// 			checkBox.value = spiceArray[i];
//
// 			myDiv.appendChild(myEnter1);
// 			myDiv.appendChild(checkBox);
// 			myDiv.appendChild(label);
// 			myDiv.appendChild(myEnter2);
// 			label.appendChild(document.createTextNode(spiceArray[i]));
// 		}
// 	}
// }

function labelNoodle(){	
	if(flag != 3){
		clearDiv("input-checkbox");
		flag=3;

		for(var i =0; i < noodleArray.length; i++){
			var checkBox = document.createElement("input");
			var label = document.createElement("label");
			var myEnter2 = document.createElement("br");
			var myEnter1 = document.createElement("br");

			checkBox.type = "checkbox";
			checkBox.value = noodleArray[i];
            checkBox.name = noodleId[i];

			myDiv.appendChild(myEnter1);
			myDiv.appendChild(checkBox);
			myDiv.appendChild(label);
			myDiv.appendChild(myEnter2);
			label.appendChild(document.createTextNode(noodleArray[i]));
		}
	}
}

function labelFruit(){
	if(flag != 4){
		clearDiv("input-checkbox");
		flag=4;

		for(var i =0; i < fruitArray.length; i++){
			var checkBox = document.createElement("input");
			var label = document.createElement("label");
			var myEnter2 = document.createElement("br");
			var myEnter1 = document.createElement("br");

			checkBox.type = "checkbox";
			checkBox.value = fruitArray[i];
            checkBox.name = fruitId[i];

			myDiv.appendChild(myEnter1);
			myDiv.appendChild(checkBox);
			myDiv.appendChild(label);
			myDiv.appendChild(myEnter2);
			label.appendChild(document.createTextNode(fruitArray[i]));
		}
	}
}

function labelETC(){
	if(flag != 5){
		clearDiv("input-checkbox");
		flag=5;

		for(var i =0; i < etcArray.length; i++){
			var checkBox = document.createElement("input");
			var label = document.createElement("label");
			var myEnter2 = document.createElement("br");
			var myEnter1 = document.createElement("br");

			checkBox.type = "checkbox";
			checkBox.value = etcArray[i];
            checkBox.name = etcId[i];

			myDiv.appendChild(myEnter1);
			myDiv.appendChild(checkBox);
			myDiv.appendChild(label);
			myDiv.appendChild(myEnter2);
			label.appendChild(document.createTextNode(etcArray[i]));
		}
	}
}





