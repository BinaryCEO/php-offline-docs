<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Built-in web server - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/features.commandline.webserver.php">
 <link rel="shorturl" href="https://www.php.net/commandline.webserver">
 <link rel="alternate" href="https://www.php.net/commandline.webserver" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.commandline.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.commandline.interactive.php">
 <link rel="next" href="https://www.php.net/manual/en/features.commandline.ini.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.commandline.webserver.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.commandline.webserver.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.commandline.webserver.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.commandline.webserver.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.commandline.webserver.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.commandline.webserver.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.commandline.webserver.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.commandline.webserver.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.commandline.webserver.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.commandline.webserver.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.commandline.webserver.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Built-in web server" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Built-in web server - Manual" />
<meta name="twitter:description" content="Built-in web server" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Built-in web server - Manual" />
<meta itemprop="description" content="Built-in web server" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Built-in web server" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="features.commandline.ini.php">
          INI settings &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.commandline.interactive.php">
          &laquo; Interactive shell        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='features.php'>Features</a></li>      <li><a href='features.commandline.php'>Command line usage</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/features.commandline.webserver.php' selected="selected">English</option>
            <option value='de/features.commandline.webserver.php'>German</option>
            <option value='es/features.commandline.webserver.php'>Spanish</option>
            <option value='fr/features.commandline.webserver.php'>French</option>
            <option value='it/features.commandline.webserver.php'>Italian</option>
            <option value='ja/features.commandline.webserver.php'>Japanese</option>
            <option value='pt_BR/features.commandline.webserver.php'>Brazilian Portuguese</option>
            <option value='ru/features.commandline.webserver.php'>Russian</option>
            <option value='tr/features.commandline.webserver.php'>Turkish</option>
            <option value='uk/features.commandline.webserver.php'>Ukrainian</option>
            <option value='zh/features.commandline.webserver.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.commandline.webserver" class="section">
  <h2 class="title">Built-in web server</h2>

  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    This web server is designed to aid application development.  It may also
    be useful for testing purposes or for application demonstrations that are
    run in controlled environments. It is not intended to be a full-featured
    web server. It should not be used on a public network.
   </p>
  </div>

  <p class="para">
   The <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> provides a built-in web server.
  </p>

  <p class="para">
   The web server runs only one single-threaded process, so
   PHP applications will stall if a request is blocked.
  </p>

  <p class="para">
    URI requests are served from the current working directory where
    PHP was started, unless the -t option is used to specify an
    explicit document root.  If a URI request does not specify a file,
    then either index.php or index.html in the given directory are
    returned.  If neither file exists, the lookup for index.php and index.html
    will be continued in the parent directory and so on until one is found or
    the document root has been reached. If an index.php or index.html is found,
    it is returned and $_SERVER[&#039;PATH_INFO&#039;] is set to the trailing part of
    the URI. Otherwise a 404 response code is returned.
  </p>

  <p class="para">
    If a PHP file is given on the command line when the web server is
    started it is treated as a &quot;router&quot; script.  The script is run at
    the start of each HTTP request.  If this script returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>,
    then the requested resource is returned as-is.  Otherwise the
    script&#039;s output is returned to the browser.
  </p>

  <p class="para">
   Standard MIME types are returned for files with extensions:
   <span class="simplelist"><code class="literal">.3gp</code>, <code class="literal">.apk</code>, <code class="literal">.avi</code>, <code class="literal">.bmp</code>, <code class="literal">.css</code>, <code class="literal">.csv</code>, <code class="literal">.doc</code>, <code class="literal">.docx</code>, <code class="literal">.flac</code>, <code class="literal">.gif</code>, <code class="literal">.gz</code>, <code class="literal">.gzip</code>, <code class="literal">.htm</code>, <code class="literal">.html</code>, <code class="literal">.ics</code>, <code class="literal">.jpe</code>, <code class="literal">.jpeg</code>, <code class="literal">.jpg</code>, <code class="literal">.js</code>, <code class="literal">.kml</code>, <code class="literal">.kmz</code>, <code class="literal">.m4a</code>, <code class="literal">.mov</code>, <code class="literal">.mp3</code>, <code class="literal">.mp4</code>, <code class="literal">.mpeg</code>, <code class="literal">.mpg</code>, <code class="literal">.odp</code>, <code class="literal">.ods</code>, <code class="literal">.odt</code>, <code class="literal">.oga</code>, <code class="literal">.ogg</code>, <code class="literal">.ogv</code>, <code class="literal">.pdf</code>, <code class="literal">.png</code>, <code class="literal">.pps</code>, <code class="literal">.pptx</code>, <code class="literal">.qt</code>, <code class="literal">.svg</code>, <code class="literal">.swf</code>, <code class="literal">.tar</code>, <code class="literal">.text</code>, <code class="literal">.tif</code>, <code class="literal">.txt</code>, <code class="literal">.wav</code>, <code class="literal">.webm</code>, <code class="literal">.wmv</code>, <code class="literal">.xls</code>, <code class="literal">.xlsx</code>, <code class="literal">.xml</code>, <code class="literal">.xsl</code>, <code class="literal">.xsd</code>, <code class="literal">.zip</code></span>
   .
  </p>

  <p class="simpara">
   As of PHP 7.4.0, the built-in webserver can be configured to fork multiple
   workers in order to test code that requires multiple concurrent requests
   to the built-in webserver.
   Set the <var class="envar">PHP_CLI_SERVER_WORKERS</var> environment variable to the
   number of desired workers before starting the server.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">This feature is not supported on Windows.</span>
  </p></blockquote>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    This <em>experimental</em> feature is <em>not</em>
    intended for production usage. Generally, the built-in Web Server is
    <em>not</em> intended for production usage.
   </p>
  </div>

  <div class="example" id="example-559">
   <p><strong>Example #1 Starting the web server</strong></p> 
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ cd ~/public_html
$ php -S localhost:8000</pre>
</div>
   </div>

   <div class="example-contents"><p>
     The terminal will show:
   </p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
PHP 5.4.0 Development Server started at Thu Jul 21 10:43:28 2011
Listening on localhost:8000
Document root is /home/me/public_html
Press Ctrl-C to quit
</pre></div>
   </div>
   <div class="example-contents"><p>
     After URI requests for http://localhost:8000/ and
     http://localhost:8000/myscript.html the terminal will show
     something similar to:
   </p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
PHP 5.4.0 Development Server started at Thu Jul 21 10:43:28 2011
Listening on localhost:8000
Document root is /home/me/public_html
Press Ctrl-C to quit.
[Thu Jul 21 10:48:48 2011] ::1:39144 GET /favicon.ico - Request read
[Thu Jul 21 10:48:50 2011] ::1:39146 GET / - Request read
[Thu Jul 21 10:48:50 2011] ::1:39147 GET /favicon.ico - Request read
[Thu Jul 21 10:48:52 2011] ::1:39148 GET /myscript.html - Request read
[Thu Jul 21 10:48:52 2011] ::1:39149 GET /favicon.ico - Request read
</pre></div>
   </div>
   <div class="example-contents"><p>
    Note that prior to PHP 7.4.0, symlinked statical resources have not been
    accessible on Windows, unless the router script would handle these.
   </p></div>
  </div>

  <div class="example" id="example-560">
   <p><strong>Example #2 Starting with a specific document root directory</strong></p> 
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ cd ~/public_html
$ php -S localhost:8000 -t foo/</pre>
</div>
   </div>

   <div class="example-contents"><p>
     The terminal will show:
   </p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
PHP 5.4.0 Development Server started at Thu Jul 21 10:50:26 2011
Listening on localhost:8000
Document root is /home/me/public_html/foo
Press Ctrl-C to quit
</pre></div>
   </div>
  </div>

  <div class="example" id="example-561">
   <p><strong>Example #3 Using a Router Script</strong></p> 
<div class="example-contents"><p>
  In this example, requests for images will display them, but requests for HTML files will display &quot;Welcome to PHP&quot;:
</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// router.php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\.(?:png|jpg|jpeg|gif)$/'</span><span style="color: #007700">, </span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">"REQUEST_URI"</span><span style="color: #007700">])) {<br />    return </span><span style="color: #0000BB">false</span><span style="color: #007700">;    </span><span style="color: #FF8000">// serve the requested resource as-is.<br /></span><span style="color: #007700">} else { <br />    echo </span><span style="color: #DD0000">"&lt;p&gt;Welcome to PHP&lt;/p&gt;"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ php -S localhost:8000 router.php</pre>
</div>
   </div>

  </div>

  <div class="example" id="example-562">
   <p><strong>Example #4 Checking for CLI Web Server Use</strong></p> 
<div class="example-contents"><p>
  To reuse a framework router script during development with the CLI web server and later also with a production web server:
</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// router.php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">php_sapi_name</span><span style="color: #007700">() == </span><span style="color: #DD0000">'cli-server'</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">/* route static assets and return false */<br /></span><span style="color: #007700">}<br /></span><span style="color: #FF8000">/* go on with normal index.php operations */<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ php -S localhost:8000 router.php</pre>
</div>
   </div>

  </div>

  <div class="example" id="example-563">
   <p><strong>Example #5 Handling Unsupported File Types</strong></p> 
<div class="example-contents"><p>
  If you need to serve a static resource whose MIME type is not handled by the CLI web server, use:
</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// router.php<br /></span><span style="color: #0000BB">$path </span><span style="color: #007700">= </span><span style="color: #0000BB">pathinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">"SCRIPT_FILENAME"</span><span style="color: #007700">]);<br />if (</span><span style="color: #0000BB">$path</span><span style="color: #007700">[</span><span style="color: #DD0000">"extension"</span><span style="color: #007700">] == </span><span style="color: #DD0000">"el"</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type: text/x-script.elisp"</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">readfile</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">"SCRIPT_FILENAME"</span><span style="color: #007700">]);<br />}<br />else {<br />    return </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ php -S localhost:8000 router.php</pre>
</div>
   </div>

  </div>

  <div class="example" id="example-564">
   <p><strong>Example #6 Accessing the CLI Web Server From Remote Machines</strong></p> 
   <div class="example-contents"><p>
    You can make the web server accessible on port 8000 to any interface with:
   </p></div>
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ php -S 0.0.0.0:8000</pre>
</div>
   </div>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="para">
      The built-in Web Server should not be used on a public network.
    </p>
   </div>
  </div>

 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/features/commandline.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.commandline.webserver%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.commandline.webserver&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.commandline.webserver.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114189">  <div class="votes">
    <div id="Vu114189">
    <a href="/manual/vote-note.php?id=114189&amp;page=features.commandline.webserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114189">
    <a href="/manual/vote-note.php?id=114189&amp;page=features.commandline.webserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114189" title="64% like this...">
    133
    </div>
  </div>
  <a href="#114189" class="name">
  <strong class="user"><em>jonathan at reinink dot ca</em></strong></a><a class="genanchor" href="#114189"> &para;</a><div class="date" title="2014-01-22 03:26"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114189">
<div class="phpcode"><code><span class="html">In order to set project specific configuration options, simply add a php.ini file to your project, and then run the built-in server with this flag:<br /><br />php -S localhost:8000 -c php.ini<br /><br />This is especially helpful for settings that cannot be set at runtime (ini_set()).</span></code></div>
  </div>
 </div>
  <div class="note" id="119706">  <div class="votes">
    <div id="Vu119706">
    <a href="/manual/vote-note.php?id=119706&amp;page=features.commandline.webserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119706">
    <a href="/manual/vote-note.php?id=119706&amp;page=features.commandline.webserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119706" title="64% like this...">
    74
    </div>
  </div>
  <a href="#119706" class="name">
  <strong class="user"><em>Mark Simon</em></strong></a><a class="genanchor" href="#119706"> &para;</a><div class="date" title="2016-08-07 09:55"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119706">
<div class="phpcode"><code><span class="html">It’s not mentioned directly, and may not be obvious, but you can also use this to create a virtual host. This, of course, requires the help of your hosts file.<br /><br />Here are the steps:<br /><br />1    /etc/hosts<br />    127.0.0.1    www.example.com<br /><br />2    cd [root folder]<br />    php -S www.example.com:8000<br /><br />3    Browser:<br />    <a href="http://www.example.com:8000/index.php" rel="nofollow" target="_blank">http://www.example.com:8000/index.php</a><br /><br />Combined with a simple SQLite database, you have a very handy testing environment.</span></code></div>
  </div>
 </div>
  <div class="note" id="120449">  <div class="votes">
    <div id="Vu120449">
    <a href="/manual/vote-note.php?id=120449&amp;page=features.commandline.webserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120449">
    <a href="/manual/vote-note.php?id=120449&amp;page=features.commandline.webserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120449" title="63% like this...">
    58
    </div>
  </div>
  <a href="#120449" class="name">
  <strong class="user"><em>oan at vizrt dot com</em></strong></a><a class="genanchor" href="#120449"> &para;</a><div class="date" title="2017-01-11 01:43"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120449">
<div class="phpcode"><code><span class="html">I painfully experienced behaviour that I can't seem to find documented here so I wanted to save everyone from repeating my mistake by giving the following heads up:<br /><br />When starting php -S on a mac (in my case macOS Sierra) to host a local server, I had trouble with connecting from legacy Java. <br /><br />As it turned out, if you started the php server with <br />"php -S localhost:80" <br />the server will be started with ipv6 support only!<br /><br />To access it via ipv4, you need to change the start up command like so:<br /> "php -S 127.0.0.1:80"<br />which starts server in ipv4 mode only.</span></code></div>
  </div>
 </div>
  <div class="note" id="115907">  <div class="votes">
    <div id="Vu115907">
    <a href="/manual/vote-note.php?id=115907&amp;page=features.commandline.webserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115907">
    <a href="/manual/vote-note.php?id=115907&amp;page=features.commandline.webserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115907" title="60% like this...">
    34
    </div>
  </div>
  <a href="#115907" class="name">
  <strong class="user"><em>tamas at bartatamas dot hu</em></strong></a><a class="genanchor" href="#115907"> &para;</a><div class="date" title="2014-10-13 02:19"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115907">
<div class="phpcode"><code><span class="html">If your URI contains a dot, you'll lose the $_SERVER['PATH_INFO'] variable, when using the built-in webserver.<br />I wanted to write an API, and use .json ending in the URI-s, but then the framework's routing mechanism broke, and it took a lot of time to discover that the reason behind it was its router relying on $_SERVER['PATH_INFO'].<br /><br />References:<br /><a href="https://bugs.php.net/bug.php?id=61286" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=61286</a></span></code></div>
  </div>
 </div>
  <div class="note" id="120058">  <div class="votes">
    <div id="Vu120058">
    <a href="/manual/vote-note.php?id=120058&amp;page=features.commandline.webserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120058">
    <a href="/manual/vote-note.php?id=120058&amp;page=features.commandline.webserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120058" title="59% like this...">
    25
    </div>
  </div>
  <a href="#120058" class="name">
  <strong class="user"><em>matthes at leuffen dot de</em></strong></a><a class="genanchor" href="#120058"> &para;</a><div class="date" title="2016-10-18 01:21"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120058">
<div class="phpcode"><code><span class="html">To output debugging information on the command line you can write output to php://stdout:<br /><br /><span class="default">&lt;?php<br />$path </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">"SCRIPT_FILENAME"</span><span class="keyword">];<br /><br /></span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">"php://stdout"</span><span class="keyword">, </span><span class="string">"\nRequested: </span><span class="default">$path</span><span class="string">"</span><span class="keyword">);<br />echo </span><span class="string">"&lt;p&gt;Hello World&lt;/p&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112667">  <div class="votes">
    <div id="Vu112667">
    <a href="/manual/vote-note.php?id=112667&amp;page=features.commandline.webserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112667">
    <a href="/manual/vote-note.php?id=112667&amp;page=features.commandline.webserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112667" title="58% like this...">
    30
    </div>
  </div>
  <a href="#112667" class="name">
  <strong class="user"><em>Ivan Ferrer</em></strong></a><a class="genanchor" href="#112667"> &para;</a><div class="date" title="2013-07-10 08:03"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112667">
<div class="phpcode"><code><span class="html">On Windows you may find useful to have a phpserver.bat file in shell:sendto with the folowing:<br />explorer <a href="http://localhost:8888" rel="nofollow" target="_blank">http://localhost:8888</a><br />rem check if arg is file or dir<br />if exist "%~1\" (<br />  php -S localhost:8888 -t "%~1"<br />) else (<br />  php -S localhost:8888 -t "%~dp1"<br />)<br /><br />then for fast web testing you only have to SendTo a file or folder to this bat and it will open your explorer and run the server.</span></code></div>
  </div>
 </div>
  <div class="note" id="125107">  <div class="votes">
    <div id="Vu125107">
    <a href="/manual/vote-note.php?id=125107&amp;page=features.commandline.webserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125107">
    <a href="/manual/vote-note.php?id=125107&amp;page=features.commandline.webserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125107" title="57% like this...">
    13
    </div>
  </div>
  <a href="#125107" class="name">
  <strong class="user"><em>deep at deepshah dot me</em></strong></a><a class="genanchor" href="#125107"> &para;</a><div class="date" title="2020-06-10 05:37"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125107">
<div class="phpcode"><code><span class="html">Listen on all addresses of IPv4:<br />php -S 0.0.0.0:80<br /><br />Listen on all addresses of IPv6:<br />php -S [::0]:80</span></code></div>
  </div>
 </div>
  <div class="note" id="124576">  <div class="votes">
    <div id="Vu124576">
    <a href="/manual/vote-note.php?id=124576&amp;page=features.commandline.webserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124576">
    <a href="/manual/vote-note.php?id=124576&amp;page=features.commandline.webserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124576" title="50% like this...">
    1
    </div>
  </div>
  <a href="#124576" class="name">
  <strong class="user"><em>sony at sony-ak dot com</em></strong></a><a class="genanchor" href="#124576"> &para;</a><div class="date" title="2020-01-08 03:49"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124576">
<div class="phpcode"><code><span class="html">To send environment variable as long as with PHP built-in web server, type like this.<br /><br />~$ MYENV=dev php -d variables_order=EGPCS -S 0.0.0.0:8000<br /><br />On PHP script we can check with this code.<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">echo </span><span class="default">getenv</span><span class="keyword">(</span><span class="string">'MYENV'</span><span class="keyword">); </span><span class="comment">// print dev</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122171">  <div class="votes">
    <div id="Vu122171">
    <a href="/manual/vote-note.php?id=122171&amp;page=features.commandline.webserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122171">
    <a href="/manual/vote-note.php?id=122171&amp;page=features.commandline.webserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122171" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122171" class="name">
  <strong class="user"><em>dachund at gmail dot com</em></strong></a><a class="genanchor" href="#122171"> &para;</a><div class="date" title="2017-12-22 06:17"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122171">
<div class="phpcode"><code><span class="html">I fiddled around with the internal webserver and had issues regarding handling static files, that do not contain a dot and a file extension.<br /><br />The webserver responded with 200 without any content for files with URIs like "/testfile".<br /><br />I am not certain if this is a bug, but I created a router.php that now does not use the "return false;" operation in order to pass thru the static file by the internal webserver.<br /><br />Instead I use fpassthru() to do that.<br /><br />In addition to that, my router.php can be configured to...<br />- ... have certain index files, when requesting a directory<br />- ... configure regex routes, so that, if the REQUEST_URI matches the regex, a certain file or directory is requested instead. (something you would do with nginx config or .htaccess ModRewrite)<br /><br />Maybe someone finds this helpful.<br /><br />================================<br /><br /><span class="default">&lt;?php<br /><br />$indexFiles </span><span class="keyword">= [</span><span class="string">'index.html'</span><span class="keyword">, </span><span class="string">'index.php'</span><span class="keyword">];<br /></span><span class="default">$routes </span><span class="keyword">= [<br />  </span><span class="string">'^/api(/.*)?$' </span><span class="keyword">=&gt; </span><span class="string">'/index.php'<br /></span><span class="keyword">];<br /><br /></span><span class="default">$requestedAbsoluteFile </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">) . </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REQUEST_URI'</span><span class="keyword">];<br /><br /></span><span class="comment">// check if the the request matches one of the defined routes<br /></span><span class="keyword">foreach (</span><span class="default">$routes </span><span class="keyword">as </span><span class="default">$regex </span><span class="keyword">=&gt; </span><span class="default">$fn</span><span class="keyword">)<br />{<br />  if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'%'</span><span class="keyword">.</span><span class="default">$regex</span><span class="keyword">.</span><span class="string">'%'</span><span class="keyword">, </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REQUEST_URI'</span><span class="keyword">]))<br />  {<br />    </span><span class="default">$requestedAbsoluteFile </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">) . </span><span class="default">$fn</span><span class="keyword">;<br />    break;<br />  }<br />}<br /><br /></span><span class="comment">// if request is a directory call check if index files exist<br /></span><span class="keyword">if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$requestedAbsoluteFile</span><span class="keyword">))<br />{<br />  foreach (</span><span class="default">$indexFiles </span><span class="keyword">as </span><span class="default">$filename</span><span class="keyword">)<br />  {<br />    </span><span class="default">$fn </span><span class="keyword">= </span><span class="default">$requestedAbsoluteFile</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">;<br />    if (</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">))<br />    {<br />      </span><span class="default">$requestedAbsoluteFile </span><span class="keyword">= </span><span class="default">$fn</span><span class="keyword">;<br />      break;<br />    }<br />  }<br />}<br /><br /></span><span class="comment">// if requested file does not exist or is directory =&gt; 404<br /></span><span class="keyword">if (!</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$requestedAbsoluteFile</span><span class="keyword">))<br />{<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SERVER_PROTOCOL'</span><span class="keyword">].</span><span class="string">' 404 Not Found'</span><span class="keyword">);<br />  </span><span class="default">printf</span><span class="keyword">(</span><span class="string">'"%s" does not exist'</span><span class="keyword">, </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REQUEST_URI'</span><span class="keyword">]);<br />  return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// if requested file is'nt a php file<br /></span><span class="keyword">if (!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\.php$/'</span><span class="keyword">, </span><span class="default">$requestedAbsoluteFile</span><span class="keyword">)) {<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: '</span><span class="keyword">.</span><span class="default">mime_content_type</span><span class="keyword">(</span><span class="default">$requestedAbsoluteFile</span><span class="keyword">));<br />  </span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$requestedAbsoluteFile</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />  </span><span class="default">fpassthru</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br />  return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// if requested file is php, include it<br /></span><span class="keyword">include_once </span><span class="default">$requestedAbsoluteFile</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129107">  <div class="votes">
    <div id="Vu129107">
    <a href="/manual/vote-note.php?id=129107&amp;page=features.commandline.webserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129107">
    <a href="/manual/vote-note.php?id=129107&amp;page=features.commandline.webserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129107" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#129107" class="name">
  <strong class="user"><em>devoldemar</em></strong></a><a class="genanchor" href="#129107"> &para;</a><div class="date" title="2023-12-16 08:06"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129107">
<div class="phpcode"><code><span class="html">Built-in web server uses SAPI logging subsystem. Therefore all messages are written to standard error, and not to standard output stream.<br />If you want to save server logs into a file, the following command will work:<br />php -S 0.0.0.0:80 2&gt;&amp;1 | tee out.log</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.commandline.webserver&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.commandline.webserver.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.commandline.php">Command line usage</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.commandline.differences.php" title="Differences to other SAPIs">Differences to other SAPIs</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.options.php" title="Options">Options</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.usage.php" title="Usage">Usage</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.io-streams.php" title="I/O streams">I/O streams</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.interactive.php" title="Interactive shell">Interactive shell</a>
                        </li>
                                                <li class="current">
                            <a href="features.commandline.webserver.php" title="Built-&#8203;in web server">Built-&#8203;in web server</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.ini.php" title="INI settings">INI settings</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
