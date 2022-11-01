(function () {
    "use strict";
    var l = {
        43303: function (e, t, r) {
            var c = r(58687), u = gon;
            const o = new c(".hero-header", {
                strings: u.languages_for_widget,
                typeSpeed: 50,
                backSpeed: 50,
                loop: !0,
                smartBackspace: !0
            })
        }
    }, p = {};

    function n(e) {
        var t = p[e];
        if (t !== void 0) return t.exports;
        var r = p[e] = {id: e, loaded: !1, exports: {}};
        return l[e].call(r.exports, r, r.exports, n), r.loaded = !0, r.exports
    }

    n.m = l, function () {
        var e = [];
        n.O = function (t, r, c, u) {
            if (r) {
                u = u || 0;
                for (var o = e.length; o > 0 && e[o - 1][2] > u; o--) e[o] = e[o - 1];
                e[o] = [r, c, u];
                return
            }
            for (var f = 1 / 0, o = 0; o < e.length; o++) {
                for (var r = e[o][0], c = e[o][1], u = e[o][2], s = !0, a = 0; a < r.length; a++) (u & !1 || f >= u) && Object.keys(n.O).every(function (h) {
                    return n.O[h](r[a])
                }) ? r.splice(a--, 1) : (s = !1, u < f && (f = u));
                if (s) {
                    e.splice(o--, 1);
                    var i = c();
                    i !== void 0 && (t = i)
                }
            }
            return t
        }
    }(), function () {
        n.n = function (e) {
            var t = e && e.__esModule ? function () {
                return e.default
            } : function () {
                return e
            };
            return n.d(t, {a: t}), t
        }
    }(), function () {
        n.d = function (e, t) {
            for (var r in t) n.o(t, r) && !n.o(e, r) && Object.defineProperty(e, r, {enumerable: !0, get: t[r]})
        }
    }(), function () {
        n.g = function () {
            if (typeof globalThis == "object") return globalThis;
            try {
                return this || new Function("return this")()
            } catch (e) {
                if (typeof window == "object") return window
            }
        }()
    }(), function () {
        n.hmd = function (e) {
            return e = Object.create(e), e.children || (e.children = []), Object.defineProperty(e, "exports", {
                enumerable: !0,
                set: function () {
                    throw new Error("ES Modules may not assign module.exports or exports.*, Use ESM export syntax, instead: " + e.id)
                }
            }), e
        }
    }(), function () {
        n.o = function (e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        }
    }(), function () {
        n.r = function (e) {
            typeof Symbol != "undefined" && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(e, "__esModule", {value: !0})
        }
    }(), function () {
        n.j = 516
    }(), function () {
        var e = {516: 0};
        n.O.j = function (c) {
            return e[c] === 0
        };
        var t = function (c, u) {
            var o = u[0], f = u[1], s = u[2], a, i, _ = 0;
            if (o.some(function (v) {
                return e[v] !== 0
            })) {
                for (a in f) n.o(f, a) && (n.m[a] = f[a]);
                if (s) var b = s(n)
            }
            for (c && c(u); _ < o.length; _++) i = o[_], n.o(e, i) && e[i] && e[i][0](), e[i] = 0;
            return n.O(b)
        }, r = self.webpackChunkhexlet_basics = self.webpackChunkhexlet_basics || [];
        r.forEach(t.bind(null, 0)), r.push = t.bind(null, r.push.bind(r))
    }();
    var d = n.O(void 0, [216], function () {
        return n(43303)
    });
    d = n.O(d)
})();
