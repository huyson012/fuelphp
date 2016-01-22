/*
**************************************
* Event Listener Function v1.4       *
* Autor: Carlos R. L. Rodrigues      *
**************************************
*/
addEvent = function(o, e, f, s){
	var r = o[r = "_" + (e = "on" + e)] = o[r] || (o[e] ? [[o[e], o]] : []), a, c, d;
	r[r.length] = [f, s || o], o[e] = function(e){
		try{
			(e = e || event).preventDefault || (e.preventDefault = function(){e.returnValue = false;});
			e.stopPropagation || (e.stopPropagation = function(){e.cancelBubble = true;});
			e.target || (e.target = e.srcElement || null);
			e.key = (e.which + 1 || e.keyCode + 1) - 1 || 0;
		}catch(f){}
		for(d = 1, f = r.length; f; r[--f] && (a = r[f][0], o = r[f][1], a.call ? c = a.call(o, e) : (o._ = a, c = o._(e), o._ = null), d &= c !== false));
		return e = null, !!d;
    }
};

removeEvent = function(o, e, f, s){
	for(var i = (e = o["_on" + e] || []).length; i;)
		if(e[--i] && e[i][0] == f && (s || o) == e[i][1])
			return delete e[i];
	return false;
};

//+ Carlos R. L. Rodrigues
//@ http://jsfromhell.com/forms/format-currency [rev. #3]
function formatCurrency(o, n, dig, dec){
    new function(c, dig, dec, m){
        addEvent(o, "keypress", function(e, _){
            if((_ = e.key == 45) || e.key > 47 && e.key < 58){
                var o = this, d = 0, n, s, h = o.value.charAt(0) == "-" ? "-" : "",
                l = (s = (o.value.replace(/^(-?)0+/g, "$1") + String.fromCharCode(e.key)).replace(/\D/g, "")).length;
                m + 1 && (o.maxLength = m + (d = o.value.length - l + 1));
                if(m + 1 && l >= m && !_) return false;
                l <= (n = c) && (s = new Array(n - l + 2).join("0") + s);
                for(var i = (l = (s = s.split("")).length) - n; (i -= 3) > 0; s[i - 1] += dig);
                n && n < l && (s[l - ++n] += dec);
                _ ? h ? m + 1 && (o.maxLength = m + d) : s[0] = "-" + s[0] : s[0] = h + s[0];
                o.value = s.join("");
            }
            e.key > 30 && e.preventDefault();
        });
    }(!isNaN(n) ? Math.abs(n) : 2, typeof dig != "string" ? "," : dig, typeof dec != "string" ? "," : dec, o.maxLength);
}