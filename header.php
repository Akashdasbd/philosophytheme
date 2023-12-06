<!DOCTYPE html>
<html class="no-js" lang="<?php language_attributes(); ?>">

<head>

    <meta charset="utf-8">
    <meta name="description" content>
    <meta name="author" content>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php wp_head(); ?>
    <script nonce="02cb55f2-fcfe-4914-a860-b75efc54cf37">
        (function(w, d) {
            ! function(j, k, l, m) {
                j[l] = j[l] || {};
                j[l].executed = [];
                j.zaraz = {
                    deferred: [],
                    listeners: []
                };
                j.zaraz.q = [];
                j.zaraz._f = function(n) {
                    return async function() {
                        var o = Array.prototype.slice.call(arguments);
                        j.zaraz.q.push({
                            m: n,
                            a: o
                        })
                    }
                };
                for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                j.zaraz.init = () => {
                    var q = k.getElementsByTagName(m)[0],
                        r = k.createElement(m),
                        s = k.getElementsByTagName("title")[0];
                    s && (j[l].t = k.getElementsByTagName("title")[0].text);
                    j[l].x = Math.random();
                    j[l].w = j.screen.width;
                    j[l].h = j.screen.height;
                    j[l].j = j.innerHeight;
                    j[l].e = j.innerWidth;
                    j[l].l = j.location.href;
                    j[l].r = k.referrer;
                    j[l].k = j.screen.colorDepth;
                    j[l].n = k.characterSet;
                    j[l].o = (new Date).getTimezoneOffset();
                    if (j.dataLayer)
                        for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                                ...x[1],
                                ...y[1]
                            })), {}))) zaraz.set(w[0], w[1], {
                            scope: "page"
                        });
                    j[l].q = [];
                    for (; j.zaraz.q.length;) {
                        const z = j.zaraz.q.shift();
                        j[l].q.push(z)
                    }
                    r.defer = !0;
                    for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith("_zaraz_"))).forEach((B => {
                        try {
                            j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                        } catch {
                            j[l]["z_" + B.slice(7)] = A.getItem(B)
                        }
                    }));
                    r.referrerPolicy = "origin";
                    r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                    q.parentNode.insertBefore(r, q)
                };
                ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body id="top" <?php body_class(); ?>>

    <section class="s-pageheader <?php if (is_home()) echo "s-pageheader--home " ?>" >
        <header class="header">
            <div class="header__content row">
                <div class="header__logo">
                    <?php 
                    if (has_custom_logo()) {
                        the_custom_logo();
                    }else{
                        echo "<h3><a href='".home_url("/")."'>".get_bloginfo("name")."</a></h3>";
                    }
                    ?>
                </div>
                <ul class="header__social">
                    <?php 
                    if (is_active_sidebar("header_social_links")) {
                        dynamic_sidebar("header_social_links");
                    }
                    ?>
                </ul>
                <a class="header__search-trigger" href="#0"></a>



                <div class="header__search">

                <?php get_search_form();?>

                    <a href="#0" title="Close Search" class="header__overlay-close">Close</a>
                </div>
                <?php get_template_part("template_part/common/nevigition") ?>
            </div>
        </header>
        <?php
        if (is_home()) {
         get_template_part("template_part/home-blog/futher") ;
        }
         ?>
</section>