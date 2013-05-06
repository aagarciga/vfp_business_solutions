        <h1>The Markup <small>...powered by HTML5 Boilerplate</small></h1>

        <article>
            <header>
                <h1>Conditional <q>html</q> classes</h1>
            </header>
            <p>
                A series of IE conditional comments apply the relevant IE-specific classes to
                the <q>html</q> tag. This provides one method of specifying CSS fixes for specific
                legacy versions of IE. While you may or may not choose to use this technique in
                your project code, Dandelion MVC <?php echo MVC_VERSION; ?> default CSS does not rely on it.
            </p>
            <p>
                When using the conditional classes technique, applying classes to the <q>html</q>
                element has several benefits:</p>
            <ul>
                <li>It avoids a <a href="http://webforscher.wordpress.com/2010/05/20/ie-6-slowing-down-ie-8/">file blocking issue</a>
                    discovered by Stoyan Stefanov and Markus Leptien.</li>
                <li>It avoids the need for an empty comment that also fixes the above issue.</li>
                <li>CMSes like WordPress and Drupal use the body class more heavily. This makes
                    integrating there a touch simpler.</li>
                <li>It still validates as HTML5.</li>
                <li>It uses the same element as Modernizr (and Dojo). That feels nice.</li>
                <li>It can improve the clarity of code in multi-developer teams.</li>
            </ul>

        </article>

        <article>
            <header>
                <h1>The <q>no-js</q> class</h1>        
            </header>
            <p>
                Allows you to more easily explicitly add custom styles when 
                JavaScript is disabled (<q>no-js</q>) or enabled (<q>js</q>). 
                More here: <a href="http://paulirish.com/2009/avoiding-the-fouc-v3/">Avoiding the FOUC</a>.
            </p>
        </article>

        <article>
            <header>
                <h1>The order of meta tags, and <q>&lt;title&gt;</q></h1>        
            </header>
            <p>
                As recommended by <a href="http://www.whatwg.org/specs/web-apps/current-work/complete/semantics.html#charset">the HTML5 spec</a> 
                (4.2.5.5 Specifying the document's character encoding), add your charset
                declaration early (before any ASCII art ;) to avoid a potential <a href="http://code.google.com/p/doctype/wiki/ArticleUtf7">encoding-related security issue</a> 
                in IE. It should come in the first <a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/semantics.html#charset">1024 bytes</a>.
            </p>
            <p>
                The charset should also come before the <q>&lt;title&gt;</q> tag, due to 
                <a href="http://code.google.com/p/doctype-mirror/wiki/ArticleUtf7">potential XSS vectors</a>.
            </p>
            <p>
                The meta tag for compatibility mode needs to be before all 
                elements except title and meta. You also might want to read 
                <a href="http://h5bp.com/f">Defining Document Compatibility - MSDN</a>.
                And that same meta tag can only be invoked for Google Chrome 
                Frame if it is within the <a href="http://code.google.com/p/chromium/issues/detail?id=23003">first 1024 bytes</a>.
            </p>
        </article>

        <article>
            <header>
                <h1>X-UA-Compatible</h1>        
            </header>
            <p>
                This makes sure the latest version of IE is used in versions of IE that contain
                multiple rendering engines. Even if a site visitor is using IE8 or IE9, it's
                possible that they're not using the latest rendering engine their browser
                contains. To fix this, use:
            </p>
            <pre><code>&lt;meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"&gt;</code></pre>
            <p>
                The <q>meta</q> tag tells the IE rendering engine two things:
            </p>
            <ol>
                <li>It should use the latest, or edge, version of the IE rendering environment.</li>
                <li>If already installed, it should use the Google Chrome Frame rendering engine.</li>
            </ol>
            <p>
                This <q>meta</q> tag ensures that anyone browsing your site in IE is 
                treated to the best possible user experience that their browser can offer.
            </p>
            <p>
                This line breaks validation, and the Google Chrome Frame part won't work inside
                a conditional comment. To avoid these edge case issues it is recommended that
                you **remove this line and use the <q>.htaccess</q>** (or other server config)
                to send these headers instead. You also might want to read 
                <a href="http://groups.google.com/group/html5boilerplate/browse_thread/thread/6d1b6b152aca8ed2">Validating: X-UA-Compatible</a>.
            </p>
            <p>
                If you are serving your site on a non-standard port, you will need to set this
                header on the server-side. This is because the IE preference option 'Display
                intranet sites in Compatibility View' is checked by default.
            </p>
        </article>

        <article>
            <header>
                <h1>Mobile viewport</h1>        
            </header>
            <p>
                There are a few different options that you can use with the 
                <q>viewport</q> meta tag; See 
                <a href="https://docs.google.com/present/view?id=dkx3qtm_22dxsrgcf4">Viewport and Media Queries - The Complete Idiot's Guide</a>. 
                You can find out more in 
                <a href="http://j.mp/mobileviewport">the Apple developer docs</a>. 
                Dandelion MVC <?php echo MVC_VERSION; ?> comes with a simple 
                setup that strikes a good balance for general use cases.
            </p>
            <pre><code>&lt;meta name="viewport" content="width=device-width"&gt;</code></pre>
        </article>

        <article>
            <header>
                <h1>Favicons and Touch Icons</h1>      
            </header>
            <p>
                The shortcut icons should be put in the root directory of your site. 
                Dandelion MVC <?php echo MVC_VERSION; ?> comes with a default set of 
                icons (include favicon and Apple Touch Icons) that you can use as a 
                baseline to create your own.
            </p>
            <p>
                If your site or icons are in a sub-directory, you will need to reference the
                icons using <q>link</q> elements placed in the HTML <q>head</q> of your document.
            </p>
            <p>
                For a comprehensive overview, please read <a href="http://mathiasbynens.be/notes/touch-icons">Everything you always wanted to know
                    about touch icons</a> by Mathias Bynens.
            </p>
        </article>

        <article>
            <header>
                <h1>Modernizr</h1>      
            </header>
            <p>
                Dandelion MVC <?php echo MVC_VERSION; ?> uses a custom build of Modernizr.
            </p>
            <p>
                <a href="http://modernizr.com">Modernizr</a> is a JavaScript library which adds classes to
                the <q>html</q> element based on the results of feature test and which ensures that
                all browsers can make use of HTML5 elements (as it includes the HTML5 Shiv).
                This allows you to target parts of your CSS and JavaScript based on the
                features supported by a browser.
            </p>
            <p>
                In general, in order to keep page load times to a minimum, it's best to call
                any JavaScript at the end of the page because if a script is slow to load
                from an external server it may cause the whole page to hang. That said, the
                Modernizr script *needs* to run *before* the browser begins rendering the page,
                so that browsers lacking support for some of the new HTML5 elements are able to
                handle them properly. Therefore the Modernizr script is the only JavaScript
                file synchronously loaded at the top of the document.
            </p>
        </article>

        <article>
            <header>
                <h1>The content area</h1>      
            </header>
            <p>
                The central part of the Dandelion MVC <?php echo MVC_VERSION; ?> 
                boilerplate template is pretty much empty. This is intentional, in order
                to make the boilerplate suitable for both web page and web app development.
            </p>

            <article>
                <header>
                    <h1>Google Chrome Frame</h1>      
                </header>
                <p>
                    The main content area of the template includes a prompt to install Chrome
                    Frame (which no longer requires administrative rights) for users of IE 6. If
                    you intended to support IE 6, then you should remove the snippet of code.
                </p>
            </article>

            <article>
                <header>
                    <h1>Google CDN for jQuery</h1>      
                </header>
                <p>
                    The Google CDN version of the jQuery JavaScript library is referenced towards
                    the bottom of the page using a protocol-independent path. A local fallback 
                    of jQuery is included for rare instances when the CDN version might 
                    not be available, and to facilitate offline development.
                </p>
                <p>
                    Regardless of which JavaScript library you choose to use, it is well worth the
                    time and effort to look up and reference the Google CDN (Content Delivery
                    Network) version. Your users may already have this version cached in their
                    browsers, and Google's CDN is likely to deliver the asset faster than your
                    server.
                </p>
                <p>
                    This is an intentional use of <a href="http://paulirish.com/2010/the-protocol-relative-url/">protocol-relative URLs</a> 
                </p>
                <p>
                    Using a protocol-relative URL for files that exist on a CDN is
                    problematic when you try to view your local files directly in the browser. The
                    browser will attempt to fetch the file from your local file system. We
                    recommend that you use a local server to test your pages (or Dropbox). This can
                    be done using Python 2.x by running <q>python -m SimpleHTTPServer</q> or Python 3.x
                    with <q>python -m http.server</q> from your local directory, using Ruby by installing
                    and running <a href="https://rubygems.org/gems/asdf">asdf</a>, and by installing any one of
                    XAMPP, MAMP, or WAMP.
                </p>
            </article>

            <article>
                <header>
                    <h1>Google Analytics Tracking Code</h1>      
                </header>
                <p>
                    Finally, an optimized version of the latest Google Analytics tracking code is
                    included. Google recommends that this script be placed at the top of the page.
                    Factors to consider: if you place this script at the top of the page, you'll be
                    able to count users who don’t fully load the page, and you'll incur the max
                    number of simultaneous connections of the browser.
                </p>
                <p>
                    However, putting the code at the bottom keeps all the 
                    scripts together and reinforces that scripts at the bottom 
                    are the right move.
                </p>
                <p>
                    Further information:
                </p>
                <ul>
                    <li>
                        <a href="http://mathiasbynens.be/notes/async-analytics-snippet">
                            Optimizing the asynchronous Google Analytics snippet
                        </a>.
                    </li>
                    <li>
                        <a href="http://code.google.com/apis/analytics/docs/tracking/asyncTracking.html">
                            Tracking Site Activity - Google Analytics
                        </a>
                    </li>
                </ul>
            </article>
        </article>