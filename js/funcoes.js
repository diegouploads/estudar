//JavaScript Document
var a= 2;
var opcao1= 0;
var opcao2= 0;
var opcao2= 0;
function Opcao1() {
	if(a==2){
		a++;
		tiraPointer();
		document.getElementById("radio1").checked=true;
		document.getElementById('btNova').style.display = 'block';
		opcao1= 1;
		if(document.getElementById("radio1").value == 1){
			document.getElementById('Resposta1').style.backgroundColor = '#A5EC84';
			document.getElementById('resultadoC').style.display = 'block';
			document.getElementById('resultadoE').style.display = 'none';
			
		}else{
			document.getElementById('Resposta1').style.backgroundColor = '#FF438A';
			document.getElementById('resultadoE').style.display = 'block';
			document.getElementById('resultadoC').style.display = 'none';
			if(document.getElementById("radio2").value == 1){
				opcao2= 1;
				document.getElementById('Resposta2').style.backgroundColor = '#A5EC84';
			}
			if(document.getElementById("radio3").value == 1){
				opcao3= 1;
				document.getElementById('Resposta3').style.backgroundColor = '#A5EC84';
			}
		}
	}
}
function Opcao2() {
	if(a==2){
		a++;
		tiraPointer();
		document.getElementById("radio2").checked=true;
		document.getElementById('btNova').style.display = 'block';
		opcao2= 1;
		if(document.getElementById("radio2").value == 1){
			document.getElementById('Resposta2').style.backgroundColor = '#A5EC84';
			document.getElementById('resultadoC').style.display = 'block';
			document.getElementById('resultadoE').style.display = 'none';
		}else{
			document.getElementById('Resposta2').style.backgroundColor = '#FF438A';
			document.getElementById('resultadoE').style.display = 'block';
			document.getElementById('resultadoC').style.display = 'none';
			if(document.getElementById("radio1").value == 1){
				opcao1= 1;
				document.getElementById('Resposta1').style.backgroundColor = '#A5EC84';
			}
			if(document.getElementById("radio3").value == 1){
				opcao3= 1;
				document.getElementById('Resposta3').style.backgroundColor = '#A5EC84';
			}
		}
	}
}
function Opcao3() {
	if(a==2){
		a++;
		tiraPointer();
		document.getElementById("radio3").checked=true;
		document.getElementById('btNova').style.display = 'block';
		opcao3= 1;
		if(document.getElementById("radio3").value == 1){
			document.getElementById('Resposta3').style.backgroundColor = '#A5EC84';
			document.getElementById('resultadoC').style.display = 'block';
			document.getElementById('resultadoE').style.display = 'none';
		}else{
			document.getElementById('Resposta3').style.backgroundColor = '#FF438A';
			document.getElementById('resultadoE').style.display = 'block';
			document.getElementById('resultadoC').style.display = 'none';
			if(document.getElementById("radio2").value == 1){
				opcao2= 1;
				document.getElementById('Resposta2').style.backgroundColor = '#A5EC84';
			}
			if(document.getElementById("radio1").value == 1){
				opcao1= 1;
				document.getElementById('Resposta1').style.backgroundColor = '#A5EC84';
			}
		}
	}
}

function tiraPointer(){
	document.getElementById('Resposta1').style.cursor = 'Default';
	document.getElementById('Resposta2').style.cursor = 'Default';
	document.getElementById('Resposta3').style.cursor = 'Default';
}
function muda(){
	if(a!=2){
		if(opcao1==0){
			document.getElementById('Resposta1').style.backgroundColor = '#D3D7FF';
		}
		if(opcao2==0){
			document.getElementById('Resposta2').style.backgroundColor = '#D3D7FF';
		}
		if(opcao3==0){
			document.getElementById('Resposta3').style.backgroundColor = '#D3D7FF';
		}
	}
}