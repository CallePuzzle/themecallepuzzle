window.addEventListener("load",tamanohead,false);

function tamanohead()
{
	var ancho=$('#page').width();
//	var elemento=document.getElementById('lienzomenu');
//	elemento.style.webkitTransform='scale:(0.9)';
//	elemento.style.mozTransform='scale:(0.9)'; */
	
//	lienzo.translate(lienzomenu.width / 2, lienzomenu.height / 2);
//	limpiarlienzo();
//	lienzo.scale(0.5, 0.5);

var reducir=ancho/(800+5);
var moverizq=1-reducir;
var alto=0.9;
var altoletras=1.1;
//alert(reducir);
if(reducir>1){reducir=1;moverizq=0;}

document.getElementById("tampage").innerHTML="#lienzomenu{transform:scale("+reducir+","+alto+");;-ms-transform:scale("+reducir+","+alto+");-o-transform:scale("+reducir+","+alto+");-moz-transform:scale("+reducir+","+alto+");-webkit-transform:scale("+reducir+","+alto+");left:-"+((moverizq*400)-2)+"px;}#logo{transform:scale("+reducir+","+alto+");-ms-transform:scale("+reducir+","+alto+");-o-transform:scale("+reducir+","+alto+");-moz-transform:scale("+reducir+","+alto+");-webkit-transform:scale("+reducir+","+alto+");left:-"+((moverizq*100)-2)+"px;}";

//document.getElementById("tampage").innerHTML="#branding{transform:scale("+reducir+");}#access ul li a img {transform:scale("+reducir+");}";
}