// JavaScript Document

function calc()
{	
	document.getElementById('num1Help').innerHTML='';
	document.getElementById('num2Help').innerHTML='';
	var output=document.getElementById('answer');
	var num1=document.getElementById("num1").value;
    var num2=document.getElementById("num2").value;
    var answer;
    var regEx=/^\d+$/;
    if (!num1.match(regEx)) {
        document.getElementById('num1Help').innerHTML='Positive numbers only!';
		document.getElementById('submit').classList.remove('btn-success');
		document.getElementById('submit').classList.add('btn-warning');
		document.getElementById('submit').classList.remove('btn-danger');
		document.getElementById('submit').classList.remove('disabled');
		console.log('Some error message');
		console.log('Num 1 is: '+num1);
		output.innerHTML='The answer is: '
    } else if (!num2.match(regEx)) {
		document.getElementById('num2Help').innerHTML='Positive numbers only!';
		document.getElementById('submit').classList.remove('btn-success');
		document.getElementById('submit').classList.add('btn-warning');
		document.getElementById('submit').classList.remove('btn-danger');
		document.getElementById('submit').classList.remove('disabled');
		console.log('Some error message');
		console.log('Num 2 is: '+num1);
		output.innerHTML='The answer is: '
	} else {
		document.getElementById('submit').classList.remove('btn-warning');
        document.getElementById('submit').classList.remove('disabled');
		document.getElementById('submit').classList.remove('btn-danger');
		document.getElementById('submit').classList.add('btn-success');
		document.getElementById('num1Help').innerHTML='';
		document.getElementById('num2Help').innerHTML='';
		answer=execute(num1, num2);
		console.log('Everything looks good');
        output.innerHTML='The answer is: '+answer;
    }
}

function execute(num1, num2){
	
	var funct=document.getElementById("funct").value;
	var answer;
	
	if (funct.match("multiply")){
		answer = num1 * num2;
	} else if (funct.match("add")){
		answer = Number(num1) + Number(num2);
	} else if (funct.match("subtract")){
		answer = num1 - num2;
	} else if (funct.match("divide")){
		answer = num1 / num2;
	}
	
	return answer;
}