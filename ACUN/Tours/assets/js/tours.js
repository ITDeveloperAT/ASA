/**
 * Fher Aguilar
 */

function crajx(tg, prm, nm) {
	var XMLHttpRequestObject = false;
	if (window.XMLHttpRequest) {
		XMLHttpRequestObject = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
	}
	IOG('det.php', tg, prm, nm, XMLHttpRequestObject);
}

function IOG(datasource, divId, prmts, gky, XMLHttpRequestObject) {
	if (XMLHttpRequestObject) {
		var obj = document.getElementById(divId);
		XMLHttpRequestObject.open("POST", datasource);
		XMLHttpRequestObject.setRequestHeader('Content-Type',
				'application/x-www-form-urlencoded');
		XMLHttpRequestObject.onreadystatechange = function() {
			if (XMLHttpRequestObject.readyState == 4
					&& XMLHttpRequestObject.status == 200) {
				obj.innerHTML = XMLHttpRequestObject.responseText;
			}
		}
		switch (gky) {
		case 0:
			XMLHttpRequestObject.send("desc=" + prmts);
			break;
		case 1:
			XMLHttpRequestObject.send("shwyg=" + prmts);
			break;
		}
	}
}

function pst(d, f) {
	crajx('test', d + "#" + f, 0);
}

function sntml(p, q, info) {
	crajx('tt' + q, p + "||" + info, 1);
}