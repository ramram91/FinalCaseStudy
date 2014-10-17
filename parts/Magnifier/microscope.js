//MICROSCOPE

var magnifier_settings = new Array();
magnifier_settings['width'] = 100;
magnifier_settings['height'] =100;
magnifier_settings['zoom_level'] = 5;

function get_image_offset(e, id)	{
	offset_x = e.offsetX ? e.offsetX : e.pageX - document.getElementById(id).offsetLeft;
	offset_y = e.offsetY ? e.offsetY : e.pageY - document.getElementById(id).offsetTop;
	magnify(document.getElementById(id));
}

function magnify(elmnt)	{
	if(!document.getElementById('magnifier'))	{
		var magnifier = document.createElement('div');
		magnifier.id = 'magnifier';
		magnifier.style.width = magnifier_settings['width'];
		magnifier.style.height = magnifier_settings['height'];
		magnifier.style.overflow = 'hidden';
		magnifier.style.border = '2px solid #000';
		magnifier.style.position = 'relative';

		var magnifier_img = document.createElement('img');
		magnifier_img.id = 'magnifier_img';
		magnifier_img.src = 'images/' + elmnt.id + '.jpg';
		magnifier_img.width = parseInt(elmnt.width) * magnifier_settings['zoom_level'];
		magnifier_img.height = parseInt(elmnt.height) * magnifier_settings['zoom_level'];
	}	else	{
		var magnifier = document.getElementById('magnifier');
		var magnifier_img = document.getElementById('magnifier_img');
	}
	magnifier.style.left = offset_x+25;
	magnifier.style.top = offset_y + 25 - elmnt.height; 
	magnifier_img.style.marginLeft = '-'+ offset_x * magnifier_settings['zoom_level'] + 'px';
	magnifier_img.style.marginTop = '-' + offset_y * magnifier_settings['zoom_level'] + 'px';
	if(!document.getElementById('magnifier'))	{
		magnifier.appendChild(magnifier_img);
		var id = elmnt.id + '_holder';
		document.getElementById(id).appendChild(magnifier);
	}
}

function hide_magnifier(id)	{
	id += '_holder';
	if(document.getElementById('magnifier'))
		document.getElementById(id).removeChild(document.getElementById('magnifier'));
}