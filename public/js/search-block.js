! function(e, t) {
    "object" == typeof exports && "undefined" != typeof module ? t(exports, require("jquery")) : "function" == typeof define && define.amd ? define(["exports", "jquery"], t) : t(e.material = {}, e.jQuery)
}(this, function(e, i) {
    "use strict";
    i = i && i.hasOwnProperty("default") ? i.default : i;
    var n, t, o, r, a, s, c, l, d, u, h, f, p, m, g, y, v, b, _, k, S = (r = "show-predecessor", a = "hide" + (t = ".bs.collapse"), s = (o = "show") + t, c = ".expansion-panel", l = ".expansion-panel .collapse", void(n = i)(document).on("" + a, l, function() {
            var e = n(this).closest(c);
            e.removeClass(o);
            var t = e.prev(c);
            t.length && t.removeClass(r)
        }).on("" + s, l, function() {
            var e = n(this).closest(c);
            e.addClass(o);
            var t = e.prev(c);
            t.length && t.addClass(r)
        })),
        w = (h = "." + (u = "md.floatinglabel"), f = "floatinglabel", p = (d = i).fn[f], m = "is-focused", g = "is-dirty", y = "change" + h, v = "focusin" + h, b = "focusout" + h, _ = {
            DATA_PARENT: ".textfield__field",
            DATA_TOGGLE: ".textfield__field .custom-select, .textfield__field .textfield__input"
        }, k = function() {
            function i(e) {
                this._element = e, this._parent = d(e).closest(_.DATA_PARENT)[0]
            }
            var e = i.prototype;
            return e.change = function() {
                d(this._element).val() || d(this._element).is("select") && "" !== d("option:first-child", d(this._element)).html().replace(" ", "") ? d(this._parent).addClass(g) : d(this._parent).removeClass(g)
            }, e.focusin = function() {
                d(this._parent).addClass(m)
            }, e.focusout = function() {
                d(this._parent).removeClass(m)
            }, i._jQueryInterface = function(n) {
                return this.each(function() {
                    var e = n || "change",
                        t = d(this).data(u);
                    if (t || (t = new i(this), d(this).data(u, t)), "string" == typeof e) {
                        if ("undefined" == typeof t[e]) throw new Error('No method named "' + e + '"');
                        t[e]()
                    }
                })
            }, i
        }(), d(document).on(y + " " + v + " " + b, _.DATA_TOGGLE, function(e) {
            k._jQueryInterface.call(d(this), e.type)
        }), d.fn[f] = k._jQueryInterface, d.fn[f].Constructor = k, d.fn[f].noConflict = function() {
            return d.fn[f] = p, k._jQueryInterface
        }, k);
});





function autocomplete(inp, arr) {
    var currentFocus;
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        this.parentNode.appendChild(a);
        for (i = 0; i < arr.length; i++) {
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                b = document.createElement("DIV");
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                b.addEventListener("click", function(e) {
                    inp.value = this.getElementsByTagName("input")[0].value;
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
    });

    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            currentFocus++;
            addActive(x);
        } else if (e.keyCode == 38) {
            currentFocus--;
            addActive(x);
        } else if (e.keyCode == 13) {
            e.preventDefault();
            if (currentFocus > -1) {
                if (x) x[currentFocus].click();
            }
        }
    });
    function addActive(x) {
        if (!x) return false;
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }
    function closeAllLists(elmnt) {
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
}
var countries = ["Suchbegriff","SuchbegrÃ¼ndung","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
autocomplete(document.getElementById("myInput"), countries);


function switchLanguage(language) {
    // Implement your logic here to handle language switching
    console.log("Selected language: " + language);
}