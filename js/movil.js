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
//alert(reducir);
if(reducir>1){reducir=1;moverizq=0;}

document.getElementById("tampage").innerHTML="#lienzomenu{transform:scale("+reducir+",1);left:-"+((moverizq*400)-2)+"px;-ms-transform:scale("+reducir+",1);left:-"+((moverizq*400)-2)+"px;-o-transform:scale("+reducir+",1);left:-"+((moverizq*400)-2)+"px;-moz-transform:scale("+reducir+",1);left:-"+((moverizq*400)-2)+"px;-webkit-transform:scale("+reducir+",1);left:-"+((moverizq*400)-2)+"px;}";

//document.getElementById("tampage").innerHTML="#branding{transform:scale("+reducir+");}#access ul li a img {transform:scale("+reducir+");}";
}