var domainsList = new Array();

synchronizeCookies(domainsList);

function pollCrossDomainCookies() {
	synchronizeCookies(domainsList);
}

setInterval(pollCrossDomainCookies, 60 * 3 * 1000);	//Poll server every 3 minutes


/* Static lib functions */

function setCookie(name, value) {
	document.cookie = name + "=" + escape(value) + "; path=/";
}

function getCookie(szName){ 
	szName = szName.replace(/\./g, "_");

	var i = 0;
	var nStartPosition = 0;
	var nEndPosition = 0;
	var szCookieString = document.cookie;

	while(i <= szCookieString.length) {
		nStartPosition = i;
		nEndPosition = nStartPosition + szName.length;

		if(szCookieString.substring(nStartPosition,nEndPosition) == szName) {
			nStartPosition = nEndPosition + 1;
			nEndPosition = document.cookie.indexOf(";",nStartPosition);

			if(nEndPosition < nStartPosition) {
				nEndPosition = document.cookie.length;
			}

			return document.cookie.substring(nStartPosition,nEndPosition);
			break;
		}
		i++;
	}
	return "";
}

function synchronizeCookies(domains) {
	var i = 0;
	for(; i < domains.length; i++) {
		synchronizeDomainCookies(domains[i]);
	}
}


function synchronizeDomainCookies(domain) {
	var stat_id = getCookie('stat_id');
	var sess_id = 'a754c4fc286489805e28090b56d7d7ce';
	
	var url = 'http://' + domain + '/js/cross-domain.php?sync=1&stat_id=' + stat_id + "&sess_id=" + sess_id;
	
	var d = new Date;
	url += "&t=" + d.getTime();
	
	var scriptObj = document.createElement('script');
	scriptObj.charset = 'utf-8';
	scriptObj.src = url;
	document.getElementsByTagName('head')[0].appendChild(scriptObj);
}