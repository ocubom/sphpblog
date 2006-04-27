function openpopup(popurl, w, h, sizable) {
	str = 'width='+(w+20)+',height='+(h+30);
	if ( sizable != true ) {
		str = str + ',scrollbars=no,resizable=no,status=no';
	} else {
		str = str + ',scrollbars=yes,resizable=yes,status=yes';
	}
	window.open(popurl,'',str);
}

/**
 * Read the JavaScript cookies tutorial at:
 *   http://www.netspade.com/articles/javascript/cookies.xml
 */

/**
 * Sets a Cookie with the given name and value.
 *
 * name       Name of the cookie
 * value      Value of the cookie
 * [expires]  Expiration date of the cookie (default: end of current session)
 * [path]     Path where the cookie is valid (default: path of calling document)
 * [domain]   Domain where the cookie is valid
 *              (default: domain of calling document)
 * [secure]   Boolean value indicating if the cookie transmission requires a
 *              secure transmission
 */
function setCookie(name, value, expires, path, domain, secure) {
	document.cookie= name + "=" + escape(value) +
		((expires) ? "; expires=" + expires.toGMTString() : "") +
		((path) ? "; path=" + path : "") +
		((domain) ? "; domain=" + domain : "") +
		((secure) ? "; secure" : "");
}

/**
 * Gets the value of the specified cookie.
 *
 * name  Name of the desired cookie.
 *
 * Returns a string containing value of specified cookie,
 *   or null if cookie does not exist.
 */
function getCookie(name) {
	var dc = document.cookie;
	var prefix = name + "=";
	var begin = dc.indexOf("; " + prefix);
	if (begin == -1) {
		begin = dc.indexOf(prefix);
		if (begin != 0) return null;
	} else {
		begin += 2;
	}
	var end = document.cookie.indexOf(";", begin);
	if (end == -1) {
		end = dc.length;
	}
	return unescape(dc.substring(begin + prefix.length, end));
}

/**
 * Deletes the specified cookie.
 *
 * name      name of the cookie
 * [path]    path of the cookie (must be same as path used to create cookie)
 * [domain]  domain of the cookie (must be same as domain used to create cookie)
 */
function deleteCookie(name, path, domain) {
	if (getCookie(name)) {
		document.cookie = name + "=" + 
			((path) ? "; path=" + path : "") +
			((domain) ? "; domain=" + domain : "") +
			"; expires=Thu, 01-Jan-70 00:00:01 GMT";
	}
}

Array.prototype.contains = function (element) {
	for ( var i=0; i<this.length; i++ ) {
		if ( this[i]==element ) {
			return i;
		}
	}
	return false;
}

Array.prototype.remove = function (element) {
	var result = false;
	var array = [];
	for (var i = 0; i < this.length; i++) {
		if (this[i] == element) {
			result = true;
		} else {
			array.push(this[i]);
		}
	}
	this.length = 0;
	for (var i = 0; i < array.length; i++) {
		this.push(array[i]);
	}
	array = null;
	return result;
};

Array.prototype.addUnique = function (element) {
	if (this.contains(element) === false) {
		this.push(element);
	}
};

function toggleBlock(id, forceVisible) {
	forceVisible = (forceVisible==undefined) ? false : forceVisible;
	
	// Variables
	var styleObj;
	var linkObj;
	
	// Get Element
	if (document.getElementById) {
		// this is the way the standards work
		styleObj = document.getElementById('toggle'+id).style;
		linkObj = document.getElementById('link'+id);
		
	} else if (document.all) {
		// this is the way old msie versions work
		styleObj = document.all[id].style;
		linkObj = document.all[id];
		
	} else if (document.layers) {
		// this is the way nn4 works
		styleObj = document.layers[id].style;
		linkObj = document.layers[id];
	}
	
	// Toggle
	var cookieStr = getCookie('toggledItems');
	var toggleArr = Array();
	if (cookieStr) {
		toggleArr = cookieStr.split(',');
	}
	
	if (styleObj.display && forceVisible==false) {
		// HIDE
		toggleArr.remove(id);
		styleObj.display = "";
		linkObj.innerHTML = "[+]";
	}else{
		// SHOW
		toggleArr.addUnique(id);
		styleObj.display = "block";
		linkObj.innerHTML = "[-]";
	}
	
	setCookie('toggledItems', toggleArr.toString());
}

function pageInit() {
	var cookieStr = getCookie('toggledItems');
	var toggleArr = Array();
	if (cookieStr) {
		toggleArr = cookieStr.split(',');
		for ( var i=0; i<toggleArr.length; i++ ) {
			toggleBlock(toggleArr[i], true);
		}
	}
}
