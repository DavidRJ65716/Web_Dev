// JavaScript Document
function getInfo()
{	
	document.getElementById('nFirstHelp').innerHTML='';
	document.getElementById('nLastHelp').innerHTML='';
	document.getElementById('emailHelp').innerHTML='';
	document.getElementById('pNumHelp').innerHTML='';
	document.getElementById('dobHelp').innerHTML='';
	document.getElementById('comHelp').innerHTML='';
	
	var outputfn=document.getElementById('firstName');
	var outputln=document.getElementById('lastname');
	var outpute=document.getElementById('emailA');
	var outputpc=document.getElementById('perferContact');
	var outputp=document.getElementById('phoneA');
	var outputd=document.getElementById('date');
	var outputc=document.getElementById('commentA');
	
	var nFirst=document.getElementById("nFirst").value;
    var nLast=document.getElementById("nLast").value;
	var email=document.getElementById("email").value;
	var check=document.getElementById("flexCheckDefault").value;
	var pNum=document.getElementById("phone").value;
	var dob=document.getElementById("dob").value;
	var comment=document.getElementById("comment").value;
    
	var flag = 0;
    var regEx=/\%|\*|\!|\:|\;|\$/;
	var validEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var validPhone = /[0-9]{3}-[0-9]{3}-[0-9]{4}/;
	
    if (nFirst.match(regEx)) {
        document.getElementById('nFirstHelp').innerHTML='First Name only!';
		document.getElementById('submit').classList.remove('btn-success');
		document.getElementById('submit').classList.add('btn-warning');
		document.getElementById('submit').classList.remove('btn-danger');
		document.getElementById('submit').classList.remove('disabled');
		console.log('Some error message');
		console.log('First Name is: ' + nFirst);
		flag = 100;
    } 
	
	if (nLast.match(regEx)) {
		document.getElementById('nLastHelp').innerHTML='Last Name only!';
		document.getElementById('submit').classList.remove('btn-success');
		document.getElementById('submit').classList.add('btn-warning');
		document.getElementById('submit').classList.remove('btn-danger');
		document.getElementById('submit').classList.remove('disabled');
		console.log('Some error message');
		console.log('Last Name is: '+nLast);
		flag = 100;
	}
	
	if (!email.match(validEmail)) {
		document.getElementById('emailHelp').innerHTML='Not a valid email!';
		document.getElementById('submit').classList.remove('btn-success');
		document.getElementById('submit').classList.add('btn-warning');
		document.getElementById('submit').classList.remove('btn-danger');
		document.getElementById('submit').classList.remove('disabled');
		console.log('Some error message');
		console.log('Email: '+email);
		flag = 100;
	}
	
	if (!pNum.match(validPhone)) {
		document.getElementById('pNumHelp').innerHTML='Not a valid Phone Number!';
		document.getElementById('submit').classList.remove('btn-success');
		document.getElementById('submit').classList.add('btn-warning');
		document.getElementById('submit').classList.remove('btn-danger');
		document.getElementById('submit').classList.remove('disabled');
		console.log('Some error message');
		console.log('Phone Number: '+pNum);
		flag = 100;
	}
	
	if (!dob.match(/./)) {
		document.getElementById('dobHelp').innerHTML='Not a valid Date of Birth!';
		document.getElementById('submit').classList.remove('btn-success');
		document.getElementById('submit').classList.add('btn-warning');
		document.getElementById('submit').classList.remove('btn-danger');
		document.getElementById('submit').classList.remove('disabled');
		console.log('Some error message');
		console.log('Date: '+dob);
		flag = 100;
	}	
	
	if (comment.match(regEx)) {
		document.getElementById('comHelp').innerHTML='Comments only!';
		document.getElementById('submit').classList.remove('btn-success');
		document.getElementById('submit').classList.add('btn-warning');
		document.getElementById('submit').classList.remove('btn-danger');
		document.getElementById('submit').classList.remove('disabled');
		console.log('Some error message');
		console.log('Comment is: '+ comment);
		flag = 100;
	}
	
	if(flag == 0){
		document.getElementById('submit').classList.remove('btn-warning');
        document.getElementById('submit').classList.remove('disabled');
		document.getElementById('submit').classList.remove('btn-danger');
		document.getElementById('submit').classList.add('btn-success');


		console.log('Everything looks good');
        outputfn.innerHTML='First Name: '+nFirst;
		outputln.innerHTML='Last Name: '+nLast;
		outpute.innerHTML='Email: '+email;
		if(check.match(/./)){
			outputpc.innerHTML='Peferred Contact Email: '+check;
		}
		outputp.innerHTML='Phone Number: '+pNum;
		outputd.innerHTML='Date of Birth: '+dob;
		outputc.innerHTML='Coomment: '+comment;
    } else {
		flag = 0;
		console.log('Something Went Wrong!');
        outputfn.innerHTML='First Name: ';
		outputln.innerHTML='Last Name: ';
		outpute.innerHTML='Email: ';
		outputpc.innerHTML='Peferred Contact Email: ';
		outputp.innerHTML='Phone Number: ';
		outputd.innerHTML='Date of Birth: ';
		outputc.innerHTML='Coomment: ';
	}
}
