function openpopup(popurl, w, h, sizable) {
	str = 'width='+w+',height='+h;
	if ( sizable != true ) {
		str = str + ',scrollbars=no,resizable=no,status=no';
	} else {
		str = str + ',scrollbars=yes,resizable=yes,status=yes';
	}
	window.open(popurl,'',str);
}

/*
window.onload=function() 
{ 
	status=document.title; 
	defaultStatus=status; 
	for (iForm=0; iForm<document.forms.length; iForm++) 
	{ 
		for (iField=0; iField<document.forms[iForm].length; iField++) 
		{ 
			if (((document.forms[iForm].elements[iField].type=='text') || 
				(document.forms[iForm].elements[iField].type=='textarea')) && 
				(!document.forms[iForm].elements[iField].disabled) && 
				(!document.forms[iForm].elements[iField].readOnly)) 
			{ 
				document.forms[iForm].elements[iField].focus(); 
				return; 
			} 
		} 
	} 
} 
*/
