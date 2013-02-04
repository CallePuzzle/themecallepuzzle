window.addEventListener("load",moviltouch,false);


function moviltouch()
{

	var is_touch_device = 'touchstart' in document.documentElement;

	if(is_touch_device==false)
	{
		document.getElementById('inicio').addEventListener('click', function(ev){

			if($("#puzzle-panel").height()==0)
			{
				document.getElementById('puzzle-panel').style.height="100px";
			}
			else
			{
				document.getElementById('puzzle-panel').style.height=0;
			}
				
		}
		, false);

		document.getElementById('entrar').addEventListener('click', function(ev){
			
			window.location.assign(home+'/wp-admin/');
		
		}, false);
	}
	else
	{
		document.getElementById('panel-open').addEventListener('touchstart', function(ev){
			if(document.getElementById('logo').style.opacity=="0.05")
			{
					
			}
			else
			{
				document.getElementById('logo').style.opacity="0.05";
			}
		}, false);

		document.getElementById('entrar').addEventListener('touchstart', function(ev){
			if(document.getElementById('logo').style.opacity=="0.05")
			{
				window.location.assign(home+'/wp-admin/');
			}
			else
			{
				document.getElementById('logo').style.opacity="0.05";
			}
		}, false);
		
	}
}