<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width" />
        <link rel="icon" href="{{ 'favicon.ico' | asset_path }}">
        <meta name="google-site-verification" content="RPg14Se6qY0euai1l2eDaFxrPa2qEs6NXLufgZ-162A" />

        {% if page.name contains "listing" %}
        <meta property="og:image" content="{{ request.listing.image_url | crop: '500x500' }}&1546"/>
        <meta property="og:title" content="{{ request.listing.copy_heading }}" />
        <meta property="og:description" content="{{ request.listing.copy_heading }} {{ request.listing.copy_text }}" />
        <meta property="og:url" content="http://www.bellrealestate.com.au{{ request.full_path }}" />
        <link rel="image_src" href="{{ request.listing.image_url | crop: '500x500' }}" />
        {% endif %}

        {% if page.name == 'home' %}
        <title>Houses For Sale Rent Buy Real Estate in Belgrave, Emerald, Olinda, Warburton, Yarra Junction & Woori Yallock – Bell Real Estate</title>
        <meta name="description" content="Bell Real Estate - buy sell rent property. Real estate for sale & rent in Belgrave, Emerald, Olinda, Warburton, Yarra Junction & Woori Yallock." />
        <meta name="keywords" content="houses for sale,real estate listings,real estate agents,rent real estate,buy house,buy real estate,houses for rent,homes for sale,real estate search,find real estate,rent real estate Victoria,real estate agent,property for sale,property for rent" />
        {% elsif page.name == "buying" %}
        <title>Buy Real Estate houses property Belgrave, Emerald, Olinda, Warburton, Yarra Junction & Woori Yallock – Bell Real Estate</title>
        <meta name="description" content="Bell Real Estate - buy property houses. Real estate for sale in Belgrave, Emerald, Olinda, Warburton, Yarra Junction & Woori Yallock." />
        <link rel="canonical" href="http://bellrealestate.com.au{{ 'buying' | page_path }}"/>
        <meta name="keywords" content="buy house,houses for sale,real estate listings,real estate agents,buy house,homes for sale,real estate search,house for sale,buy real estate,real estate buy,buying real estate,real estate to buy,buying real estate,real estate buy houses,real estate buying,real estate buy houses" />

        {% if request.query contains "office_id=1" %}
        <title>Buy Real Estate houses property Belgrave, Emerald, Olinda, Warburton, Yarra Junction & Woori Yallock – Bell Real Estate</title>
        <meta name="description" content="Bell Real Estate - buy property houses. Real estate for sale in Belgrave, Emerald, Olinda, Warburton, Yarra Junction & Woori Yallock." />
        <link rel="canonical" href="http://bellrealestate.com.au{{ 'buying' | page_path }}"/>
        <meta name="keywords" content="buy house,houses for sale,real estate listings,real estate agents,buy house,homes for sale,real estate search,house for sale,buy real estate,real estate buy,buying real estate,real estate to buy,buying real estate,real estate buy houses,real estate buying,real estate buy houses" />
        <script>(function () {
                var _fbq = window._fbq || (window._fbq = []);
                if (!_fbq.loaded) {
                    var fbds = document.createElement('script');
                    fbds.async = true;
                    fbds.src = '//connect.facebook.net/en_US/fbds.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(fbds, s);
                    _fbq.loaded = true;
                }
                _fbq.push(['addPixelId', '1637132283167341']);
            })();
            window._fbq = window._fbq || [];
            window._fbq.push(['track', 'PixelInitialized', {}]);
        </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1637132283167341&amp;ev=PixelInitialized" /></noscript>
    {% elsif request.query contains "office_id=1" %}
    <script>window.location='http://www.bellrealestate.com.au/buying?office_id=1'</script>
    {% elsif request.query contains "direction=desc&order=date_listed" %}
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '1637132283167341']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1637132283167341&amp;ev=PixelInitialized" /></noscript>
    {% endif %}
    {% elsif page.name == "renting" %}
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '1637132283167341']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1637132283167341&amp;ev=PixelInitialized" /></noscript>
    <title>Rent lease Real Estate houses property Belgrave, Emerald, Olinda, Warburton, Yarra Junction & Woori Yallock – Bell Real Estate</title>
    <meta name="description" content="Find real estate properties for rent in Belgrave, Emerald, Olinda, Warburton, Yarra Junction & Woori Yallock – Bell Real Estate. Search the latest rental property listings & contact Bell real estate" />
    <meta name="keywords" content="houses for rent,house for rent,houses to rent,homes for rent,properties for rent,property for rent,for rent,rent property,home for rent,real estate for rent" />
    {% elsif page.name == "selling" %}
    <title>Sell list Real Estate property houses in Belgrave, Emerald, Olinda, Warburton, Yarra Junction & Woori Yallock – Bell Real Estate</title>
    <meta name="description" content="Sell list real estate with bellrealestate.com.au. Professional experienced real estate agents for selling your home property." />
    <meta name="keywords" content="Selling real estate,Sell house,Sell property,Sell real estate,house to sell,property for sale,house for sale,real estate for sale,homes for sale,properties for sale,home for sale,house sale,domain houses for sale,real estate houses for sale" />
    {% elsif page.name == "about" %}
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '1637132283167341']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1637132283167341&amp;ev=PixelInitialized" /></noscript>
    <title>Houses For Sale Rent Buy Real Estate in Belgrave, Emerald, Olinda, Warburton, Yarra Junction & Woori Yallock – Bell Real Estate</title>
    <meta name="description" content="Buy, sell, and rent Houses in Belgrave, Emerald, Olinda, Warburton, Yarra Junction & Woori Yallock – Bell Real Estate Agents" />
    <meta name="keywords" content="Real estate agents,real estate listings,rent real estate,real estate search,rent real estate,real estate search,real estate homes,real estate apartments,real estate agents,property for sale victoria" />

    {% elsif page.name == "contact" %}
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '1637132283167341']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1637132283167341&amp;ev=PixelInitialized" /></noscript>
    <title>Contact Bell Real Estate Belgrave, Emerald, Olinda, Warburton, Yarra Junction & Woori Yallock</title>
    <meta name="description" content="Contact bellrealestate.com.au – Australia’s most trusted real estate website for buying, selling, and renting." />
    <meta name="keywords" content="search real estate,sell buy rent real estate,rent to buy real estate,sell buy rent real estate,buy rent sell" />
    {% elsif page.name =="inspections" %}
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '1637132283167341']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1637132283167341&amp;ev=PixelInitialized" /></noscript>
    <title>Bell Real Estate</title>
    {% elsif page.name == "office" %}
    {% if request.query contains "office_id=1" %}
    <title>Real Estate Property For Sale, Rent, buy in Yarra Junction, Gladysdale, Wesburn, Hoddles Creek, Woori Yallock, Launching Place, Millgrove – bellrealestate.com.au</title>
    <meta name="description" content="Bell Real Estate agents are leaders and experts in buying, selling, and renting properties, and committed to providing outstanding real estate service." />
    <meta name="keywords" content="Yarra Junction real estate,property for sale Yarra Junction,real estate for sale Yarra Junction,Yarra Junction real estate,houses for sale Yarra Junction,Yarra Junction real estate agent" />
    {% elsif request.query contains "office_id=2" %}
    <title>Real Estate Property For Sale, Rent, buy in Belgrave, Upwey, Tecoma, Selby, Kallista  – Bell Real Estate Belgrave</title>
    <meta name="description" content="Bell Real estate Belgrave. Drop by and meet with our experienced consultants for all your real estate needs." />
    <meta name="keywords" content="belgrave real estate,property for sale belgrave,real estate for sale belgrave,belgrave real estate,houses for sale Belgrave,Belgrave real estate agent" />
    {% elsif request.query contains "office_id=3" %}
    <title>Real Estate Property For Sale, Rent, buy in Emerald, Cockatoo, Gembrook, Avonsleigh, Macclesfield – bellrealestate.com.au</title>
    <meta name="description" content="Buy, rent and sell real estate at our Emerald, Victoria office. Talk to our real estate experts to learn more about industry tips and selling strategies." />
    <meta name="keywords" content="Emerald real estate,property for sale Emerald,real estate for sale Emerald,Emerald real estate,houses for sale Emerald,Emerald real estate agent" />
    {% elsif request.query contains "office_id=4" %}
    <title>Real Estate Property For Sale, Rent, buy in Olinda, Sassafras, Mt Dandenong, Kalorama – bellrealestate.com.au</title>
    <meta name="description" content="Buy, rent, and sell real estate at our Olinda, Victoria office." />
    <meta name="keywords" content="Olinda real estate,property for sale Olinda,real estate for sale Olinda,Olinda real estate,houses for sale Olinda,Olinda real estate agent" />
    {% elsif request.query contains "office_id=5" %}
    <title>Real Estate Property For Sale, Rent, buy in Warburton, Millgrove, East Warburton, Reefton, Wesburn– bellrealestate.com.au</title>
    <meta name="description" content="Visit our real estate office in Woori Yallock for property search or listings. Sell, buy, rent real estate with Bellrealestate.com.au" />
    <meta name="keywords" content="Warburton real estate,property for sale Warburton,real estate for sale Warburton,Warburton real estate,houses for sale Warburton,Warburton real estate agent" />
    {% elsif request.query contains "office_id=6" %}
    <title>Real Estate Property For Sale, Rent, buy in Woori Yallock, Launching Place, Yellingbo, Don Valley, Hoddles Creek – bellrealestate.com.au</title>
    <meta name="description" content="Real estate & property for sale or rent in Yarra Junction. List your property & experience world class service, providing you with all your real estate needs." />
    <meta name="keywords" content="Woori Yallock real estate,property for sale Woori Yallock,real estate for sale Woori Yallock,Woori Yallock real estate,houses for sale Woori Yallock,Woori Yallock real estate agent" />
    {% endif %}
    {% elsif page.name == "team" %}
    {% if request.query contains "office_id=1" %}
    <title>Real Estate Property For Sale, Rent, buy in Yarra Junction, Gladysdale, Wesburn, Hoddles Creek, Woori Yallock, Launching Place, Millgrove – bellrealestate.com.au</title>
    <meta name="description" content="Real estate sold properties from around Melbourne, Australia. Search real estate listings to find out house and land values." />
    <meta name="keywords" content="Yarra Junction real estate,property for sale Yarra Junction,real estate for sale Yarra Junction,Yarra Junction real estate,houses for sale Yarra Junction,Yarra Junction real estate agent" />
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '1637132283167341']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1637132283167341&amp;ev=PixelInitialized" /></noscript>

    {% elsif request.query contains "office_id=6" %}
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '1637132283167341']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1637132283167341&amp;ev=PixelInitialized" /></noscript>
    <title>Bell Real Estate</title>
    {% elsif request.query contains "office_id=5" %}
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '1637132283167341']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1637132283167341&amp;ev=PixelInitialized" /></noscript>
    <title>Bell Real Estate</title>
    {% else %}
    <title>Bell Real Estate</title>

    {% endif %}


    {% elsif page.name contains "listing" %}
    <title>{{ request.listing.full_address }} - Bell Real Estate</title>
    <meta name="description" content="{{ request.listing.copy_heading }} {{ request.listing.copy_text }}" />
    <meta name="keywords" content="{{ request.listing.property_category }} for {% if request.listing.sales? %}sale{% else %}rent{% endif %} in {{ request.listing.street_address }} {{ request.listing.suburb }}" />
    {% else %}
    <title>Bell Real Estate</title>
    {% endif %}


    {{ "bootstrap.css" | asset_path | stylesheet_tag }}
    {{ "main.css" | asset_path | stylesheet_tag }}

    {{ "modernizr-2.6.2-respond-1.1.0.min.js" | asset_path | javascript_tag }}

    <script>

        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {

                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)

        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                ga('create', 'UA-40976805-13', 'bellrealestate.com.au');
        ga('send', 'pageview');



    </script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-44527744-1']);
        { % if listing % }
        _gaq.push(['_setCustomVar', 1, 'Office', '{{ listing.office.name }}', 3]);
        _gaq.push(['_setCustomVar', 2, 'id', '{{ listing.id }}', 3]);
        { % endif % }
        { % if analytics_page_name % }
        _gaq.push(['_trackPageview', '{{ analytics_page_name }}']);
        { % else % }
        _gaq.push(['_trackPageview']);
        { % endif % }
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

</head>
<body>