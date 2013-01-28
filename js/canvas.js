window.addEventListener("load",pintarmenu,false);

function pintarmenu()
{
	pintarpieza(0);
	pintarpieza(201);
	pintarpieza(402);
	pintarpieza(603);
}

function pintarpieza(donde){
	
	var elemento=document.getElementById('lienzomenu');
	lienzo=elemento.getContext('2d');	
		
	var gradiente=lienzo.createLinearGradient(50+donde,0,50+donde,70);
	gradiente.addColorStop(0,'#c0e3f9');
	gradiente.addColorStop(1,'#FFFFFF');
	lienzo.fillStyle=gradiente;
	lienzo.beginPath();
	lienzo.moveTo(0+donde,0);
	lienzo.lineTo(0+donde,70);
	lienzo.quadraticCurveTo(15+donde,80,30+donde,75);
	lienzo.bezierCurveTo(10+donde,100,100+donde,95,70+donde,75);
	lienzo.quadraticCurveTo(80+donde,75,90+donde,70);
	lienzo.quadraticCurveTo(120+donde,75,130+donde,70);
	lienzo.bezierCurveTo(90+donde,38,195+donde,38,152+donde,71);
	lienzo.quadraticCurveTo(160+donde,80,200+donde,70);
	lienzo.lineTo(200+donde,0);
	lienzo.lineTo(0+donde,0);
	lienzo.fill();

	var gradiente=lienzo.createLinearGradient(50+donde,10,50+donde,120);
	gradiente.addColorStop(0.72,'#9ad5f6');
	gradiente.addColorStop(1,'#39a0e1');
	lienzo.fillStyle=gradiente;
	lienzo.beginPath();
	lienzo.moveTo(0+donde,70);
	lienzo.quadraticCurveTo(15+donde,80,30+donde,75);
	lienzo.bezierCurveTo(10+donde,100,100+donde,95,70+donde,75);
	lienzo.quadraticCurveTo(80+donde,75,90+donde,70);
	lienzo.quadraticCurveTo(120+donde,75,130+donde,70);
	lienzo.bezierCurveTo(90+donde,38,195+donde,38,152+donde,71);
	lienzo.quadraticCurveTo(160+donde,80,200+donde,70);
	lienzo.lineTo(200+donde,145);
	lienzo.lineTo(0+donde,145);
	lienzo.lineTo(0+donde,70);
	lienzo.fill();
}

function sobramenu1(donde)
{
	lienzo.save();
		
	lienzo.shadowColor="rgba(0,0,0,0.5)";
	lienzo.shadowOffsetX=5;
	lienzo.shadowOffsetY=5;
	lienzo.shadowBlur=6;
	
	var gradiente=lienzo.createLinearGradient(50+donde,0,50+donde,70);
	gradiente.addColorStop(0,'#c0e3f9');
	gradiente.addColorStop(1,'#FFFFFF');
	lienzo.fillStyle=gradiente;
	lienzo.beginPath();
	lienzo.moveTo(0+donde,0);
	lienzo.lineTo(0+donde,70);
	lienzo.quadraticCurveTo(15+donde,80,30+donde,75);
	lienzo.bezierCurveTo(10+donde,100,100+donde,95,70+donde,75);
	lienzo.quadraticCurveTo(80+donde,75,90+donde,70);
	lienzo.quadraticCurveTo(120+donde,75,130+donde,70);
	lienzo.bezierCurveTo(90+donde,38,195+donde,38,152+donde,71);
	lienzo.quadraticCurveTo(160+donde,80,200+donde,70);
	lienzo.lineTo(200+donde,0);
	lienzo.lineTo(0+donde,0);
	lienzo.fill();
	
	lienzo.restore();
}


function sobramenu2(donde)
{
	lienzo.save();
		
	lienzo.shadowColor="rgba(0,0,0,0.5)";
	lienzo.shadowOffsetX=5;
	lienzo.shadowOffsetY=5;
	lienzo.shadowBlur=6;
	
	var gradiente=lienzo.createLinearGradient(50+donde,10,50+donde,120);
	gradiente.addColorStop(0.72,'#9ad5f6');
	gradiente.addColorStop(1,'#39a0e1');
	lienzo.fillStyle=gradiente;
	lienzo.beginPath();
	lienzo.moveTo(0+donde,70);
	lienzo.quadraticCurveTo(15+donde,80,30+donde,75);
	lienzo.bezierCurveTo(10+donde,100,100+donde,95,70+donde,75);
	lienzo.quadraticCurveTo(80+donde,75,90+donde,70);
	lienzo.quadraticCurveTo(120+donde,75,130+donde,70);
	lienzo.bezierCurveTo(90+donde,38,195+donde,38,152+donde,71);
	lienzo.quadraticCurveTo(160+donde,80,200+donde,70);
	lienzo.lineTo(200+donde,145);
	lienzo.lineTo(0+donde,145);
	lienzo.lineTo(0+donde,70);
	lienzo.fill();
	
	lienzo.restore();
}

function limpiarlienzo(donde)
{
	lienzo.clearRect(0, 0, lienzomenu.width, lienzomenu.height);
	pintarmenu();
}