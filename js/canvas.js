window.addEventListener("load",pintarmenu,false);

function pintarmenu()
{
	pintarpieza(0);
	pintarpieza(202);
	pintarpieza(404);
}

function pintarpieza(donde){
	
	var elemento=document.getElementById('lienzomenu');
	lienzo=elemento.getContext('2d');	
		
	var gradiente=lienzo.createLinearGradient(50+donde,0,50+donde,130);
	gradiente.addColorStop(0,'#c0e3f9');
	gradiente.addColorStop(1,'#FFFFFF');
	lienzo.fillStyle=gradiente;
	lienzo.beginPath();
	lienzo.moveTo(0+donde,0);
	lienzo.lineTo(0+donde,105);
	lienzo.quadraticCurveTo(15+donde,115,30+donde,110);
	lienzo.bezierCurveTo(10+donde,135,100+donde,130,70+donde,110);
	lienzo.quadraticCurveTo(80+donde,110,90+donde,105);
	lienzo.quadraticCurveTo(120+donde,110,130+donde,105);
	lienzo.bezierCurveTo(90+donde,73,195+donde,73,152+donde,106);
	lienzo.quadraticCurveTo(160+donde,115,200+donde,105);
	lienzo.lineTo(200+donde,0);
	lienzo.lineTo(0+donde,0);
	lienzo.fill();

	var gradiente=lienzo.createLinearGradient(50+donde,30,50+donde,200);
	gradiente.addColorStop(0.72,'#9ad5f6');
	gradiente.addColorStop(1,'#39a0e1');
	lienzo.fillStyle=gradiente;
	lienzo.beginPath();
	lienzo.moveTo(0+donde,105);
	lienzo.quadraticCurveTo(15+donde,115,30+donde,110);
	lienzo.bezierCurveTo(10+donde,135,100+donde,130,70+donde,110);
	lienzo.quadraticCurveTo(80+donde,110,90+donde,105);
	lienzo.quadraticCurveTo(120+donde,110,130+donde,105);
	lienzo.bezierCurveTo(90+donde,73,195+donde,73,152+donde,106);
	lienzo.quadraticCurveTo(160+donde,115,200+donde,105);
	lienzo.lineTo(200+donde,197);
	lienzo.lineTo(0+donde,197);
	lienzo.lineTo(0+donde,105);
	lienzo.fill();
	
}

function sobramenu2(donde)
{
	lienzo.save();
		
	lienzo.shadowColor="rgba(0,0,0,0.5)";
	lienzo.shadowOffsetX=5;
	lienzo.shadowOffsetY=5;
	lienzo.shadowBlur=6;
	
	var gradiente=lienzo.createLinearGradient(50+donde,30,50+donde,200);
	gradiente.addColorStop(0.72,'#9ad5f6');
	gradiente.addColorStop(1,'#39a0e1');
	lienzo.fillStyle=gradiente;
	lienzo.beginPath();
	lienzo.moveTo(0+donde,105);
	lienzo.quadraticCurveTo(15+donde,115,30+donde,110);
	lienzo.bezierCurveTo(10+donde,135,100+donde,130,70+donde,110);
	lienzo.quadraticCurveTo(80+donde,110,90+donde,105);
	lienzo.quadraticCurveTo(120+donde,110,130+donde,105);
	lienzo.bezierCurveTo(90+donde,73,195+donde,73,152+donde,106);
	lienzo.quadraticCurveTo(160+donde,115,200+donde,105);
	lienzo.lineTo(200+donde,197);
	lienzo.lineTo(0+donde,197);
	lienzo.lineTo(0+donde,105);
	lienzo.fill();
	
	lienzo.restore();
}


function sobramenu1(donde)
{
	lienzo.save();
		
	lienzo.shadowColor="rgba(0,0,0,0.5)";
	lienzo.shadowOffsetX=5;
	lienzo.shadowOffsetY=5;
	lienzo.shadowBlur=6;
	
	var gradiente=lienzo.createLinearGradient(50+donde,0,50+donde,130);
	gradiente.addColorStop(0,'#c0e3f9');
	gradiente.addColorStop(1,'#FFFFFF');
	lienzo.fillStyle=gradiente;
	lienzo.beginPath();
	lienzo.moveTo(0+donde,0);
	lienzo.lineTo(0+donde,105);
	lienzo.quadraticCurveTo(15+donde,115,30+donde,110);
	lienzo.bezierCurveTo(10+donde,135,100+donde,130,70+donde,110);
	lienzo.quadraticCurveTo(80+donde,110,90+donde,105);
	lienzo.quadraticCurveTo(120+donde,110,130+donde,105);
	lienzo.bezierCurveTo(90+donde,73,195+donde,73,152+donde,106);
	lienzo.quadraticCurveTo(160+donde,115,200+donde,105);
	lienzo.lineTo(200+donde,0);
	lienzo.lineTo(0+donde,0);
	lienzo.fill();
	
	lienzo.restore();
}

function limpiarlienzo(donde)
{
	lienzo.clearRect(0, 0, lienzomenu.width, lienzomenu.height);
	pintarmenu();
}