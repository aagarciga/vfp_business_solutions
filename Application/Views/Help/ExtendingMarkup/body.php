<h1>Extend and customize Dandelion MVC <small><?php echo MVC_VERSION; ?></small> HTML5 Boilerplate</h1>

<p>
    Here is some useful advice for how you can make your project with Dandelion MVC <small><?php echo MVC_VERSION; ?></small> HTML5
    Boilerplate even better. We don't want to include it all by default, as not
    everything fits with everyone's needs.
</p>

<section>
    <header>
        <h1>DNS prefetching</h1>
    </header>
    <p>
        In short, DNS Prefetching is a method of informing the browser of domain names
        referenced on a site so that the client can resolve the DNS for those hosts,
        cache them, and when it comes time to use them, have a faster turn around on
        the request.
    </p>

    <article>
        <header>
            <h1>Implicit prefetches</h1>
        </header>
        <p>
            There is a lot of prefetching done for you automatically by the browser. When
            the browser encounters an anchor in your html that does not share the same
            domain name as the current location the browser requests, from the client OS,
            the IP address for this new domain. The client first checks its cache and
            then, lacking a cached copy, makes a request from a DNS server. These requests
            happen in the background and are not meant to block the rendering of the
            page.
        </p>

        <p>
            The goal of this is that when the foreign IP address is finally needed it will
            already be in the client cache and will not block the loading of the foreign
            content. Less requests result in faster page load times. The perception of this
            is increased on a mobile platform where DNS latency can be greater.
        </p>

        <h2>
            Disable implicit prefetching:
        </h2>

        <pre><code>&lt;meta http-equiv="x-dns-prefetch-control" content="off"&gt;</code></pre>

        <p>
            Even with X-DNS-Prefetch-Control meta tag (or http header) browsers will still
            prefetch any explicit dns-prefetch links.
        </p>

        <p class="warning">
            This may make your site slower if you rely on resources from foreign domains.
        </p>

    </article>

    <article>
        <header>
            <h1>Explicit prefetches</h1>
        </header>
        <p>
            Typically the browser only scans the HTML for foreign domains. If you have
            resources that are outside of your HTML (a javascript request to a remote
            server or a CDN that hosts content that may not be present on every page of
            your site, for example) then you can queue up a domain name to be prefetched.

        </p>

        <pre><code>&lt;link rel="dns-prefetch" href="//example.com"&gt; 
&lt;link rel="dns-prefetch" href="//ajax.googleapis.com"&gt;</code></pre>

        <p>
            You can use as many of these as you need, but it's best if they are all
            immediately after the <a href="https://developer.mozilla.org/en/HTML/Element/meta#attr-charset">Meta
                Charset</a> element (which should go right at the top of the `head`), so the browser can
            act on them ASAP.
        </p>

        <h2>
            Common Prefetch Links
        </h2>

        <dl>
            <dt>
            Amazon S3
            </dt>
            <dd>
                <pre><code>&lt;link rel="dns-prefetch" href="//s3.amazonaws.com"&gt;</code></pre>
            </dd>

            <dt>
            Google APIs
            </dt>
            <dd>
                <pre><code>&lt;link rel="dns-prefetch" href="//ajax.googleapis.com"&gt;</code></pre>
            </dd>

            <dt>
            Microsoft Ajax Content Delivery Network
            </dt>
            <dd>
                <pre><code>&lt;link rel="dns-prefetch" href="//ajax.microsoft.com"&gt;                    
&lt;link rel="dns-prefetch" href="//ajax.aspnetcdn.com"&gt;</code></pre>
            </dd>
        </dl>

    </article>

    <article>
        <header>
            <h1>Browser support for DNS prefetching</h1>
        </header>

        <p>
            Chrome, Firefox 3.5+, Safari 5+, Opera (Unknown), IE 9 (called "Pre-resolution"
            on blogs.msdn.com)
        </p>
    </article>

</section>

<section>
    <header>
        <h1>Search</h1>
    </header>

    <article>
        <header>
            <h1>Direct search spiders to your sitemap</h1>
        </header>

        <p>
            <a href="http://www.sitemaps.org/protocol.php">Learn how to make a sitemap</a>.
        </p>

        <pre><code>&lt;link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml"&gt;</code></pre>

    </article>

    <article>
        <header>
            <h1>Hide pages from search engines</h1>
        </header>

        <p>
            According to Heather Champ, former community manager at Flickr, you should not
            allow search engines to index your "Contact Us" or "Complaints" page if you
            value your sanity. This is an HTML-centric way of achieving that.
        </p>

        <pre><code>&lt;meta name="robots" content="noindex"&gt;</code></pre>

        <p class="warning">
            Do not include on pages that should appear in search engines.
        </p>

    </article>

    <article>
        <header>
            <h1>Firefox and IE Search Plugins</h1>
        </header>

        <p>
            Sites with in-site search functionality should be strongly considered for a
            browser search plugin. A "search plugin" is an XML file which defines how your
            plugin behaves in the browser. <a href="http://www.google.com/search?ie=UTF-8&q=how+to+make+browser+search+plugin">How to make a browser search
                plugin</a>.
        </p>

        <pre><code>&lt;link rel="search" title="" type="application/opensearchdescription+xml" href=""&gt;</code></pre>

    </article>
</section>

<section>
    <article>
        <header>
            <h1>Prompt users to switch to <q>Desktop Mode</q> in IE10 Metro</h1>
        </header>

        <p>
            IE10 does not support plugins, such as Flash, in Metro mode. If your site
            requires plugins, you can let users know that via the X-UA-Compatible meta
            element, which will prompt them to switch to Desktop Mode.
        </p>

        <pre><code>&lt;meta http-equiv="X-UA-Compatible" content="requiresActiveX=true"&gt;</code></pre>

        <p>
            Here's what it looks like alongside H5BP's default X-UA-Compatible values:
        </p>

        <pre><code>&lt;meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"&gt;</code></pre>

        <p>
            You can find more information in
            <a href="http://blogs.msdn.com/b/ie/archive/2012/01/31/web-sites-and-a-plug-in-free-web.aspx">Microsoft's IEBlog post about prompting for
                plugin use in IE10 Metro Mode</a>.
        </p>
    </article>

    <article>
        <header>
            <h1>IE Pinned Sites (IE9+)</h1>
        </header>

        <p>
            Enabling your application for pinning will allow IE9 users to add it to their
            Windows Taskbar and Start Menu. This comes with a range of new tools that you
            can easily configure with the elements below. See more <a href="http://msdn.microsoft.com/en-us/library/gg131029.aspx">documentation on IE9
                Pinned Sites</a>.
        </p>
    </article>

    <article>
        <header>
            <h1>Name the Pinned Site for Windows</h1>
        </header>

        <p>
            Without this rule, Windows will use the page title as the name for your
            application.
        </p>

        <pre><code>&lt;meta name="application-name" content="Sample Title"&gt;</code></pre>
    </article>

    <article>
        <header>
            <h1>Give your Pinned Site a tooltip</h1>
        </header>

        <p>
            You know — a tooltip. A little textbox that appears when the user holds their
            mouse over your Pinned Site's icon.
        </p>

        <pre><code>&lt;meta name="msapplication-tooltip" content="A description of what this site does."&gt;</code></pre>
    </article>

    <article>
        <header>
            <h1>Set a default page for your Pinned Site</h1>
        </header>

        <p>
            If the site should go to a specific URL when it is pinned (such as the
            homepage), enter it here. One idea is to send it to a special URL so you can
            track the number of pinned users, like so: <q>http://www.example.com/index.html?pinned=true</q>
        </p>

        <pre><code>&lt;meta name="msapplication-starturl" content="http://www.example.com/index.html?pinned=true"&gt;</code></pre>
    </article>

    <article>
        <header>
            <h1>Recolor IE's controls manually for a Pinned Site</h1>
        </header>

        <p>
            IE9+ will automatically use the overall color of your Pinned Site's favicon to
            shade its browser buttons. UNLESS you give it another color here. Only use
            named colors (<q>red</q>) or hex colors (<q>#ff0000</q>).
        </p>

        <pre><code>&lt;meta name="msapplication-navbutton-color" content="#ff0000"&gt;</code></pre>
    </article>

    <article>
        <header>
            <h1>Manually set the window size of a Pinned Site</h1>
        </header>

        <p>
            If the site should open at a certain window size once pinned, you can specify
            the dimensions here. It only supports static pixel dimensions. 800x600
            minimum.
        </p>

        <pre><code>lt;meta name="msapplication-window" content="width=800;height=600"&gt;</code></pre>
    </article>

    <article>
        <header>
            <h1>Jump List <q>Tasks</q> for Pinned Sites</h1>
        </header>

        <p>
            Add Jump List Tasks that will appear when the Pinned Site's icon gets a
            right-click. Each Task goes to the specified URL, and gets its own mini icon
            (essentially a favicon, a 16x16 .ICO). You can add as many of these as you
            need.
        </p>

        <pre><code>&lt;meta name="msapplication-task" content="name=Task 1;action-uri=http://host/Page1.html;icon-uri=http://host/icon1.ico"&gt;
&lt;meta name="msapplication-task" content="name=Task 2;action-uri=http://microsoft.com/Page2.html;icon-uri=http://host/icon2.ico"&gt;</code></pre>
    </article>

    <article>
        <header>
            <h1>(Windows 8) High quality visuals for Pinned Sites</h1>
        </header>

        <p>
            Windows 8 adds the ability for you to provide a PNG tile image and specify the
            tile's background color. <a href="http://blogs.msdn.com/b/ie/archive/2012/06/08/high-quality-visuals-for-pinned-sites-in-windows-8.aspx">Full details on the IE
                blog</a>.
        </p>

        <ul>
            <li>Create a 144x144 image of your site icon, filling all of the canvas, and
                using a transparent background.</li>
            <li>Save this image as a 32-bit PNG and optimize it without reducing
                colour-depth. It can be named whatever you want (e.g. <q>metro-tile.png</q>)</li>
            <li>To reference the tile and its color, add the HTML <q>meta </q> elements described
                in the IE Blog post.</li>
        </ul>
    </article>

    <article>
        <header>
            <h1>(Windows 8) Badges for Pinned Sites</h1>
        </header>

        <p>
            IE10 will poll an XML document for badge information to display on your app's
            tile in the Start screen. The user will be able to receive these badge updates
            even when your app isn't actively running. The badge's value can be a number,
            or one of a predefined list of glyphs.
        </p>

        <ul>
            <li>
                <a href="http://blogs.msdn.com/b/ie/archive/2012/04/03/pinned-sites-in-windows-8.aspx">Tutorial on IEBlog with link to badge XML schema</a>
            </li>
            <li>
                <a href="http://msdn.microsoft.com/en-us/library/ie/br212849.aspx">Available badge values</a>
            </li>
        </ul>

        <pre><code>&lt;meta name="msapplication-badge" value="frequency=NUMBER_IN_MINUTES;polling-uri=http://www.example.com/path/to/file.xml&gt;</code></pre>
    </article>

    <article>
        <header>
            <h1>Disable link highlighting upon tap in IE10</h1>
        </header>

        <p>
            Similar to <a href="http://davidwalsh.name/mobile-highlight-color">-webkit-tap-highlight-color</a>
            in iOS Safari. Unlike that CSS property, this is an HTML meta element, and it's
            value is boolean rather than a color. It's all or nothing.
        </p>

        <pre><code>&lt;meta name="msapplication-tap-highlight" content="no"&gt;</code></pre>

        <p>
            You can read about this useful element and more techniques in <a href="http://blogs.windows.com/windows_phone/b/wpdev/archive/2012/11/15/adapting-your-webkit-optimized-site-for-internet-explorer-10.aspx">Microsoft's documentation on adapting WebKit-oriented apps for IE10</a>.
        </p>
    </article>

    <article>
        <header>
            <h1>Suppress IE6 image toolbar</h1>
        </header>

        <p>
            Kill IE6's pop-up-on-mouseover toolbar for images that can interfere with
            certain designs and be pretty distracting in general.
        </p>

        <pre><code>&lt;meta http-equiv="imagetoolbar" content="false"&gt;</code></pre>
    </article>
</section>

<section>

    <header>
        <h1>Social Networks</h1>
    </header>

    <article>
        <header>
            <h1>Facebook Open Graph data</h1>
        </header>

        <p>
            You can control the information that Facebook and others display when users
            share your site. Below are just the most basic data points you might need. For
            specific content types (including <q>website</q>), see <a href="https://developers.facebook.com/docs/opengraph/objects/builtin/">Facebook's built-in Open
                Graph content templates</a>.
            Take full advantage of Facebook's support for complex data and activity by
            following the <a href="https://developers.facebook.com/docs/opengraph/tutorial/">Open Graph
                tutorial</a>.
        </p>

        <pre><code>&lt;meta property="og:title" content=""&gt;            
&lt;meta property="og:description" content=""&gt;            
&lt;meta property="og:image" content=""&gt;</code></pre>
    </article>

    <article>
        <header>
            <h1>Twitter Cards</h1>
        </header>

        <p>
            Twitter provides a snippet specification that serves a similar purpose to Open
            Graph. In fact, Twitter will use Open Graph when Cards is not available. Note
            that, as of this writing, Twitter requires that app developers activate Cards
            on a per-domain basis. You can read more about the various snippet formats
            and application process in the <a href="https://dev.twitter.com/docs/cards">official Twitter Cards
                documentation</a>.
        </p>

        <pre><code>&lt;meta name="twitter:card" content="summary"&gt;            
&lt;meta name="twitter:site" content="@site_account"&gt;            
&lt;meta name="twitter:creator" content="@individual_account"&gt;            
&lt;meta name="twitter:url" content="http://www.example.com/path/to/page.html"&gt;            
&lt;meta name="twitter:title" content=""&gt;            
&lt;meta name="twitter:description" content=""&gt;            
&lt;meta name="twitter:image" content="http://www.example.com/path/to/image.jpg"&gt;</code></pre>
    </article>

</section>

<section>
    <header>
        <h1>URLs</h1>
    </header>

    <article>
        <header>
            <h1>Canonical URL</h1>
        </header>

        <p>
            Signal to search engines and others "Use this URL for this page!" Useful when
            parameters after a <q>#</q> or <q>?</q> is used to control the display state of a page.
            <q>http://www.example.com/cart.html?shopping-cart-open=true</q> can be indexed as
            the cleaner, more accurate <q>http://www.example.com/cart.html</q>.
        </p>

        <pre><code>&lt;link rel="canonical" href=""&gt;</code></pre>
    </article>

    <article>
        <header>
            <h1>Official shortlink</h1>
        </header>

        <p>
            Signal to the world "This is the shortened URL to use this page!" Poorly
            supported at this time. Learn more by reading the <a href="http://microformats.org/wiki/rel-shortlink">article about shortlinks on
                the Microformats wiki</a>.
        </p>

        <pre><code>&lt;link rel="shortlink" href="site.com"&gt;</code></pre>
    </article>
</section>

<section>
    <header>
        <h1>News Feeds</h1>
    </header>

    <article>
        <header>
            <h1>RSS</h1>
        </header>

        <p>
            Have an RSS feed? Link to it here. Want to <a href="http://www.rssboard.org/rss-specification">learn how to write an RSS feed from
                scratch</a>?
        </p>

        <pre><code>&lt;link rel="alternate" type="application/rss+xml" title="RSS" href="/rss.xml"&gt;</code></pre>
    </article>

    <article>
        <header>
            <h1>Atom</h1>
        </header>

        <p>
            Atom is similar to RSS, and you might prefer to use it instead of or in
            addition to it. <a href="http://www.atomenabled.org/developers/syndication/">See what Atom's all
                about</a>.
        </p>

        <pre><code>&lt;link rel="alternate" type="application/atom+xml" title="Atom" href="/atom.xml"&gt;</code></pre>
    </article>

    <article>
        <header>
            <h1>Pingbacks</h1>
        </header>

        <p>
            Your server may be notified when another site links to yours. The href
            attribute should contain the location of your pingback service.
        </p>

        <pre><code>&lt;link rel="pingback" href=""&gt;</code></pre>
        <ul>
            <li>
                <a href="http://codex.wordpress.org/Introduction_to_Blogging#Pingbacks">High-level explanation</a>
            </li>
            <li>
                <a href="http://www.hixie.ch/specs/pingback/pingback-1.0#TOC5">Step-by-step example case</a>
            </li>
            <li>
                <a href="http://blog.perplexedlabs.com/2009/07/15/xmlrpc-pingbacks-using-php/">PHP pingback service</a>
            </li>
        </ul>
    </article>
</section>

<section>
    <header>
        <h1>App Stores</h1>
    </header>

    <article>
        <header>
            <h1>Install a Chrome Web Store app</h1>
        </header>

        <p>
            Users can install a Chrome app directly from your website, as long as the app
            and site have been associated via Google's Webmaster Tools. Read more on <a href="https://developers.google.com/chrome/web-store/docs/inline_installation">Chrome Web Store's Inline Installation
                docs</a>.
        </p>

        <pre><code>&lt;link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/APP_ID"&gt;</code></pre>
    </article>

    <article>
        <header>
            <h1>Smart App Banners in iOS 6 Safari</h1>
        </header>

        <p>
            Stop bothering everyone with gross modals advertising your entry in the App Store.
            This bit of code will unintrusively allow the user the option to download your iOS
            app, or open it with some data about the user's current state on the website.
        </p>

        <pre><code>&lt;meta name="apple-itunes-app" content="app-id=APP_ID,app-argument=SOME_TEXT"&gt;</code></pre>
    </article>    
</section>

<section>
    <header>
        <h1>Google Analytics augments</h1>
    </header>

    <article>
        <header>
            <h1>More tracking settings</h1>
        </header>

        <p>
            The <a href="http://mathiasbynens.be/notes/async-analytics-snippet">optimized Google Analytics
                snippet</a> ncluded with HTML5 Boilerplate includes something like this:
        </p>

        <pre><code>var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']]</code></pre>

        <p>
            In case you need more settings, just extend the array literal instead of <a href="http://mathiasbynens.be/notes/async-analytics-snippet#dont-push-it"><q>.push()</q> ing to the
                array</a> afterwards:
        </p>

        <pre><code>var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview'], ['_setAllowAnchor', true]];</code></pre>
    </article>

    <article>
        <header>
            <h1>Anonymize IP addresses</h1>
        </header>

        <p>
            In some countries, no personal data may be transferred outside jurisdictions
            that do not have similarly strict laws (i.e. from Germany to outside the EU).
            Thus a webmaster using the Google Analytics script may have to ensure that no
            personal (trackable) data is transferred to the US. You can do that with <a href="http://code.google.com/apis/analytics/docs/gaJS/gaJSApi_gat.html#_gat._anonymizeIp">the <q>_gat.anonymizeIp</q> option</a>.
            In use it looks like this:
        </p>

        <pre><code>var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_gat._anonymizeIp'], ['_trackPageview']];</code></pre>
    </article>  

    <article>
        <header>
            <h1>Track jQuery AJAX requests in Google Analytics</h1>
        </header>

        <p>
            An article by @JangoSteve explains how to <a href="http://www.alfajango.com/blog/track-jquery-ajax-requests-in-google-analytics/">track jQuery AJAX requests in Google
                Analytics</a>.
        </p>

        <p>
            Add this to <q>plugins.js</q>:
        </p>

        <pre><code>/*
 * Log all jQuery AJAX requests to Google Analytics
 * See: http://www.alfajango.com/blog/track-jquery-ajax-requests-in-google-analytics/
 */
if (typeof _gaq !== "undefined" && _gaq !== null) {
    $(document).ajaxSend(function(event, xhr, settings){
        _gaq.push(['_trackPageview', settings.url]);
    });
}</code></pre>
    </article> 

    <article>
        <header>
            <h1>Track JavaScript errors in Google Analytics</h1>
        </header>

        <p>
            Add this function after <q>_gaq</q> is defined:.
        </p>

        <pre><code>(function(window){
    var undefined,
        link = function (href) {
            var a = window.document.createElement('a');
            a.href = href;
            return a;
        };
    window.onerror = function (message, file, row) {
        var host = link(file).hostname;
        _gaq.push([
            '_trackEvent',
            (host == window.location.hostname || host == undefined || host == '' ? '' : 'external ') + 'error',
            message, file + ' LINE: ' + row, undefined, undefined, true
        ]);
    };
}(window));</code></pre>
    </article> 

    <article>
        <header>
            <h1>Track page scroll</h1>
        </header>

        <p>
            Add this function after <q>_gaq</q> is defined:.
        </p>

        <pre><code>$(function(){
    var isDuplicateScrollEvent,
        scrollTimeStart = new Date,
        $window = $(window),
        $document = $(document),
        scrollPercent;

    $window.scroll(function() {
        scrollPercent = Math.round(100 * ($window.height() + $window.scrollTop())/$document.height());
        if (scrollPercent > 90 && !isDuplicateScrollEvent) { //page scrolled to 90%
            isDuplicateScrollEvent = 1;
            _gaq.push(['_trackEvent', 'scroll',
                'Window: ' + $window.height() + 'px; Document: ' + $document.height() + 'px; Time: ' + Math.round((new Date - scrollTimeStart )/1000,1) + 's',
                undefined, undefined, true
            ]);
        }
    });
});</code></pre>
    </article>
</section>

<section>
    <header>
        <h1>Miscellaneous</h1>
    </header>
    <ul>
        <li>
            Use <a href="https://github.com/Modernizr/Modernizr/wiki/HTML5-Cross-browser-Polyfills">HTML5 polyfills</a>.
        </li>
        <li>
            Use <a href="http://microformats.org/wiki/Main_Page">Microformats</a> (via
            <a href="http://microformats.org/wiki/microdata">microdata</a>) for optimum search
            results <a href="http://googlewebmastercentral.blogspot.com/2009/05/introducing-rich-snippets.html">visibility</a>.
        </li>
        <li>
            If you're building a web app you may want <a href="http://johanbrook.com/browsers/native-momentum-scrolling-ios-5/">native style momentum scrolling in
                iOS5</a> using <q>-webkit-overflow-scrolling: touch</q>.
        </li>
        <li>
            Avoid development/stage websites "leaking" into SERPs (search engine results
            page) by <a href="https://github.com/h5bp/html5-boilerplate/issues/804">implementing X-Robots-tag
                headers</a>.
        </li>
        <li>
            Screen readers currently have less-than-stellar support for HTML5 but the JS
            script <a href="https://github.com/yatil/accessifyhtml5.js">accessifyhtml5.js</a> can
            help increase accessibility by adding ARIA roles to HTML5 elements.
        </li>
    </ul>
</section>