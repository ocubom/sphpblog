function openpopup(popurl, w, h, sizable) {
	str = 'width='+(w+20)+',height='+(h+30);
	if ( sizable != true ) {
		str = str + ',scrollbars=no,resizable=no,status=no';
	} else {
		str = str + ',scrollbars=yes,resizable=yes,status=yes';
	}
	window.open(popurl,'',str);
}
