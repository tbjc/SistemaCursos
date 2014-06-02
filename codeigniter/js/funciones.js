$(document).on("ready",main);

function main(){
	$("#AbreRegistro").on("click",AbreRegistro);
	$("#AbreSintesis").on("click",AbreSintesis);
	$("#AbreMaestros").on("click",AbreMaestros);
	$("#AbreConfig").on("click",AbreConfig);
	$("#AbreRegistro2").on("click",AbreRegistro);
	$("#AbreSintesis2").on("click",AbreSintesis);
	$("#AbreMaestros2").on("click",AbreMaestros);
	$("#AbreConfig2").on("click",AbreConfig);
}

function AbreRegistro(){
	$("#welcome").css('display','none');
	$("#RegistroCurso").css('display','block');
	$("#SintesisCurricular").css('display','none');
	$("#registroMaestros").css('display','none');
	$("#ConfigPersonal").css('display','none');
	return false;
}

function AbreSintesis(){
	$("#welcome").css('display','none');
	$("#SintesisCurricular").css('display','block');
	$("#RegistroCurso").css('display','none');
	$("#registroMaestros").css('display','none');
	$("#ConfigPersonal").css('display','none');
	return false;
}

function AbreMaestros(){
	$("#welcome").css('display','none');
	$("#SintesisCurricular").css('display','none');
	$("#RegistroCurso").css('display','none');
	$("#registroMaestros").css('display','block');
	$("#ConfigPersonal").css('display','none');
	return false;
}

function AbreConfig(){
	$("#welcome").css('display','none');
	$("#SintesisCurricular").css('display','none');
	$("#RegistroCurso").css('display','none');
	$("#registroMaestros").css('display','none');
	$("#ConfigPersonal").css('display','block');
	return false;
}