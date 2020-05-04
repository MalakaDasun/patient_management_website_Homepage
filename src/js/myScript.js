function loadData(name) {
if (name=="btn1"){
	document.getElementById("para").innerHTML = "The history of iPhone began with a request from Apple Inc. CEO Steve Jobs to the company engineers, asking them to investigate the use of touchscreen devices and tablet computers (which later came to fruition with the iPad)"
	document.getElementById("image1").src ="images/iphone.jpeg";
}
else if (name=="btn2") {
    document.getElementById("para").innerHTML = "The history of iPhone began with a request from Apple Inc. CEO Steve Jobs to the company engineers, asking them to investigate the use of touchscreen devices and tablet computers (which later came to fruition with the iPad)";
	document.getElementById("image1").src ="images/nokia.jpeg";
}
else if(name=="btn3"){
    document.getElementById("para").innerHTML = "The history of iPhone began with a request from Apple Inc. CEO Steve Jobs to the company engineers, asking them to investigate the use of touchscreen devices and tablet computers (which later came to fruition with the iPad)";
	document.getElementById("image1").src="images/samsung.jpg";
}
else if(name=="btn4"){
    document.getElementById("para").innerHTML = "The history of iPhone began with a request from Apple Inc. CEO Steve Jobs to the company engineers, asking them to investigate the use of touchscreen devices and tablet computers (which later came to fruition with the iPad)";
	document.getElementById("image1").src="images/oppo.jpg";
}
else{
	  alert("Invalid!!!");
  }

}

function priceForLoop(){
	var phone = ["IPhone XS = Rs 10000/=","Apple iPhone XR = Rs 5000/=","iPhone 8 = Rs 15000/=","IPhone X = Rs 25000/=","Nova 5 = Rs 10000/="];
	
	for (i = 0, len = phone.length, list="List of Average Prices (using For Loop) <br/>"; i < len; i++) { 
			list += phone[i] + "<br />";
	}
	document.getElementById("image1").src="images/list.jpg";
	document.getElementById("para").innerHTML = list;
}

function priceForInLoop(){
	var phone = [];
	phone["IPhone XS"] = "Rs 1000/=";
	phone["Apple iPhone XR"] = "Rs 500/=";
	phone["iPhone 8"] = "Rs 1500/="; 
	phone["IPhone X"] = "Rs 2500/=";
	phone["Nova 5"] = "Rs 100/=";
			
	var list="List of Average Prices (using For In Loop)<br/>";
	for(var item in phone) {
		list += item + " : " + phone[item] + "<br />";
	}
	document.getElementById("image1").src="images/list.jpg";
	document.getElementById("para").innerHTML = list;
}

function priceHigher(){
	var phone = [];
	phone["IPhone XS"] = 1000;
	phone["Apple iPhone XR"] = 500;
	phone["iPhone 8"] = 1500; 
	phone["IPhone X"] = 2500;
	phone["Nova 5"] = 100;
		
    var HighPrice = "List of high cost mobile phones <br/>";
	for(var item in phone) {
		if(phone[item] >1000){
			HighPrice += item + " : " + phone[item] + "<br />";
	}
    }
	document.getElementById("image1").src="images/list.jpg";
	document.getElementById("para").innerHTML = HighPrice;
}

function priceLower(){
	var phone = [];
	phone["IPhone XS"] = 1000;
	phone["Apple iPhone XR"] = 500;
	phone["iPhone 8"] = 1500; 
	phone["IPhone X"] = 2500;
	phone["Nova 5"] = 100;
		
    var LowPrice = "List of high cost mobile phones <br/>";
	for(var item in phone) {
		if(phone[item] <1000){
			LowPrice += item + " : " + phone[item] + "<br />";
	}
    }
	document.getElementById("image1").src="images/list.jpg";
	document.getElementById("para").innerHTML = LowPrice;
}

function checkPassword(){
	if(document.getElementById("pwd").value != document.getElementById("cnfrmpwd").value){
        alert("Password Mismatch!");
		return false;
    }else{
        alert("Success!");
		return true;
    }	
}

function enableButton(){
	if(document.getElementById("checkBox").checked){
	 document.getElementById("submitBtn").disabled=false;
	}
	else{
		 document.getElementById("submitBtn").disabled=true;
	}
}