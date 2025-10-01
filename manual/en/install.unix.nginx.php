<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Nginx 1.4.x on Unix systems - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.unix.nginx.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.unix.nginx.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.unix.nginx.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.unix.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.unix.apache2.php">
 <link rel="next" href="https://www.php.net/manual/en/install.unix.lighttpd-14.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.unix.nginx.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.unix.nginx.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.unix.nginx.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.unix.nginx.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.unix.nginx.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.unix.nginx.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.unix.nginx.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.unix.nginx.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.unix.nginx.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.unix.nginx.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.unix.nginx.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Nginx 1.4.x on Unix systems" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Nginx 1.4.x on Unix systems - Manual" />
<meta name="twitter:description" content="Nginx 1.4.x on Unix systems" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Nginx 1.4.x on Unix systems - Manual" />
<meta itemprop="description" content="Nginx 1.4.x on Unix systems" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Nginx 1.4.x on Unix systems" />

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
        <a href="install.unix.lighttpd-14.php">
          Lighttpd 1.4 on Unix systems &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.unix.apache2.php">
          &laquo; Apache 2.x on Unix systems        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='install.php'>Installation and Configuration</a></li>      <li><a href='install.unix.php'>Installation on Unix systems</a></li>      </ul>
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
            <option value='en/install.unix.nginx.php' selected="selected">English</option>
            <option value='de/install.unix.nginx.php'>German</option>
            <option value='es/install.unix.nginx.php'>Spanish</option>
            <option value='fr/install.unix.nginx.php'>French</option>
            <option value='it/install.unix.nginx.php'>Italian</option>
            <option value='ja/install.unix.nginx.php'>Japanese</option>
            <option value='pt_BR/install.unix.nginx.php'>Brazilian Portuguese</option>
            <option value='ru/install.unix.nginx.php'>Russian</option>
            <option value='tr/install.unix.nginx.php'>Turkish</option>
            <option value='uk/install.unix.nginx.php'>Ukrainian</option>
            <option value='zh/install.unix.nginx.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.unix.nginx" class="sect1">
 <h2 class="title">Nginx 1.4.x on Unix systems</h2>

 <p class="para">
  This documentation will cover installing and configuring PHP with
  PHP-FPM for a Nginx 1.4.x HTTP server.
 </p>

 <p class="para">
  This guide will assume that you have built Nginx from source and therefore
  all binaries and configuration files are located at
  <code class="literal">/usr/local/nginx</code>. If this is not the case and you have
  obtained Nginx through other means then please refer to the
  <a href="https://www.nginx.com/resources/wiki/" class="link external">&raquo;&nbsp;Nginx Wiki</a> in order to translate
  this manual to your setup.
 </p>

 <p class="para">
  This guide will cover the basics of configuring an Nginx server to
  process PHP applications and serve them on port 80, it is recommended
  that you study the Nginx and PHP-FPM documentation if you wish to
  optimise your setup past the scope of this documentation.
 </p>

 <p class="para">
  Please note that throughout this documentation version numbers have been
  replaced with an &#039;x&#039; to ensure this documentation stays correct in the future,
  please replace these as necessary with the corresponding version numbers.
 </p>

 <ol type="1">
  <li class="listitem">
   <p class="para">
    It is recommended that you visit the Nginx Wiki
    <a href="https://www.nginx.com/resources/wiki/start/topics/tutorials/install/" class="link external">&raquo;&nbsp;install</a> page 
    in order to obtain and install Nginx on your system.
   </p>
  </li>

  <li class="listitem">
   <p class="para">
    Obtain and unpack the PHP source:
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
tar zxf php-x.x.x
</pre></div>
    </div>
   </div>
  </li>

  <li class="listitem">
   <p class="para">
    Configure and build PHP.  This is where you customize PHP
    with various options, like which extensions will be enabled. Run
    ./configure --help for a list of available options.  In our example
    we&#039;ll do a simple configure with PHP-FPM and MySQLi support.
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
cd ../php-x.x.x
./configure --enable-fpm --with-mysqli
make
sudo make install
</pre></div>
    </div>
   </div>
  </li>

  <li class="listitem">
   <p class="para">
    Obtain and move configuration files to their correct locations
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
cp php.ini-development /usr/local/php/php.ini
cp /usr/local/etc/php-fpm.d/www.conf.default /usr/local/etc/php-fpm.d/www.conf
cp sapi/fpm/php-fpm /usr/local/bin
</pre></div>
    </div>
   </div>
  </li>

  <li class="listitem">
   <p class="para">
    It is important that we prevent Nginx from passing requests to the
    PHP-FPM backend if the file does not exist, allowing us to prevent
    arbitrarily script injection.
   </p>
   <p class="para">
    We can fix this by setting the
    <a href="ini.core.php#ini.cgi.fix-pathinfo" class="link">cgi.fix_pathinfo</a>
    directive to <code class="literal">0</code> within our php.ini file.
   </p>
   <p class="para">
    Load up php.ini:
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
vim /usr/local/php/php.ini
</pre></div>
    </div>
   </div>

   <p class="para">
    Locate <code class="literal">cgi.fix_pathinfo=</code> and modify it as follows:
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
cgi.fix_pathinfo=0
</pre></div>
    </div>
   </div>
  </li>

  <li class="listitem">
   <p class="para">
    php-fpm.conf must be modified to specify that php-fpm must run as the user
    www-data and the group www-data before we can start the service:
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
vim /usr/local/etc/php-fpm.d/www.conf
</pre></div>
    </div>
   </div>

   <p class="para">
    Find and modify the following: 
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
; Unix user/group of processes
; Note: The user is mandatory. If the group is not set, the default user&#039;s group
;       will be used.
user = www-data
group = www-data
</pre></div>
    </div>
   </div>

   <p class="para">
    The php-fpm service can now be started:
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
/usr/local/bin/php-fpm
</pre></div>
    </div>
   </div>

   <p class="para">
    This guide will not configure php-fpm any further, if you are interested
    in further configuring php-fpm then please consult the documentation.
   </p>
  </li>

  <li class="listitem">
   <p class="para">
    Nginx must now be configured to support the processing of PHP applications:
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="cdata"><pre>
vim /usr/local/nginx/conf/nginx.conf
</pre></div>
    </div>

   </div>

   <p class="para">
    Modify the default location block to be aware it must attempt
    to serve .php files:
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="nginx-confcode"><pre class="nginx-confcode">location / {
    root   html;
    index  index.php index.html index.htm;
}</pre>
</div>
    </div>

   </div>

   <p class="para">
    The next step is to ensure that .php files are passed to the
    PHP-FPM backend. Below the commented default PHP location block,
    enter the following:
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="nginx-confcode"><pre class="nginx-confcode">location ~* \.php$ {
    fastcgi_index   index.php;
    fastcgi_pass    127.0.0.1:9000;
    include         fastcgi_params;
    fastcgi_param   SCRIPT_FILENAME    $document_root$fastcgi_script_name;
    fastcgi_param   SCRIPT_NAME        $fastcgi_script_name;
}</pre>
</div>
    </div>

   </div>

   <p class="para">
    Restart Nginx.
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
sudo /usr/local/nginx/sbin/nginx -s stop
sudo /usr/local/nginx/sbin/nginx
</pre></div>
    </div>
   </div>
  </li>

  <li class="listitem">
   <p class="para">
    Create a test file
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
rm /usr/local/nginx/html/index.html
echo &quot;&lt;?php phpinfo(); ?&gt;&quot; &gt;&gt; /usr/local/nginx/html/index.php
</pre></div>
    </div>
   </div>

   <p class="para">
    Now navigate to http://localhost. The phpinfo() should now be shown.
   </p>
  </li>
 </ol>

 <p class="para">
  Following the steps above you will have a running Nginx web server with
  support for PHP as an <code class="literal">FPM</code> <code class="literal">SAPI</code> module.  Of course there are
  many more configuration options available for Nginx and PHP.  For more
  information type <strong class="command">./configure --help</strong> in the corresponding
  source tree.
 </p>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/unix/nginx.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.unix.nginx%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.unix.nginx&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.unix.nginx.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118875">  <div class="votes">
    <div id="Vu118875">
    <a href="/manual/vote-note.php?id=118875&amp;page=install.unix.nginx&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118875">
    <a href="/manual/vote-note.php?id=118875&amp;page=install.unix.nginx&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118875" title="65% like this...">
    45
    </div>
  </div>
  <a href="#118875" class="name">
  <strong class="user"><em>Lenny</em></strong></a><a class="genanchor" href="#118875"> &para;</a><div class="date" title="2016-02-21 02:40"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118875">
<div class="phpcode"><code><span class="html">Building from source is not easy if something is a bit different, and I had a hard time with some directory and configuration options. I was floundering around the web until I found this site that translated from Chinese. No one else had the solution.  I couldn't get php fpm to start until I changed the directory (Item 2.ERROR: Unable to globalize). I had other issues listed but I was able to solve them. Please don't delete this, it is very useful info.<br /><br />The original site  (it is in Chinese, not my site, but I want to give credit):<br /><br />(there is some more there, you can goto the site)<br /><br />blog.dream1987.top/?paged=2<br /><br />Installation problems:<br /><br />1. configure: error:. Xml2-config not found Please check your libxml2 installation.<br /><br />solution:<br /><br />apt-get install libxml2-dev<br /><br /> <br /><br />2.Warning: Declaration of PEAR_Installer :: download () should be compatible with &amp; PEAR_Downloader :: download ($ params) in phar: ///root/php-7.0.0alpha1/pear/install-pear-nozlib.phar/PEAR /Installer.php on line 43<br /><br />Warning: Declaration of PEAR_PackageFile_Parser_v2 :: parse () should be compatible with PEAR_XMLParser :: parse ($ data) in phar: ///root/php-7.0.0alpha1/pear/install-pear-nozlib.phar/PEAR/PackageFile/ Parser / v2.php on line 113 <br />[PEAR] Archive_Tar - already installed: 1.3.13 <br />[PEAR] Console_Getopt - already installed: 1.3.1 <br />[PEAR] Structures_Graph- already installed: 1.0.4<br /><br />Warning: Declaration of PEAR_Task_Replace :: init () should be compatible with PEAR_Task_Common :: init ($ xml, $ fileAttributes, $ lastVersion) in phar: ///root/php-7.0.0alpha1/pear/install-pear-nozlib. phar / PEAR / Task / Replace.php on line 31 <br />[PEAR] XML_Util - already installed: 1.2.3<br /><br />Warning: Declaration of PEAR_Task_Windowseol :: init () should be compatible with PEAR_Task_Common :: init ($ xml, $ fileAttributes, $ lastVersion) in phar: ///root/php-7.0.0alpha1/pear/install-pear-nozlib. phar / PEAR / Task / Windowseol.php on line 76<br /><br />Warning: Declaration of PEAR_Task_Unixeol :: init () should be compatible with PEAR_Task_Common :: init ($ xml, $ fileAttributes, $ lastVersion) in phar: ///root/php-7.0.0alpha1/pear/install-pear-nozlib. phar / PEAR / Task / Unixeol.php on line 76 <br />[PEAR] PEAR - already installed: 1.9.5<br /><br />solution:<br /><br />Workaround not found (<a href="http://pear.php.net/bugs/bug.php?id=20554" rel="nofollow" target="_blank">http://pear.php.net/bugs/bug.php?id=20554</a>)<br /><br />3. Start php-fpm<br /><br />1.ERROR: failed to open configuration file '/usr/local/etc/php-fpm.conf': No such file or directory (2) <br />ERROR: failed to load configuration file '/usr/local/etc/php-fpm.conf' <br />ERROR: FPM initialization failed<br /><br />solution:<br /><br />Php-fpm.conf copy files from the source file to that location.<br /><br />cp /root/php-7.0.0alpha1/sapi/fpm/php-fpm.conf /usr/local/etc/php-fpm.conf<br /><br />2.ERROR: Unable to globalize '/usr/local/NONE/etc/php-fpm.d/*.conf' (ret = 2) from /usr/local/etc/php-fpm.conf at line 125. <br />ERROR: failed to load configuration file '/usr/local/etc/php-fpm.conf' <br />ERROR: FPM initialization failed<br /><br />solution:<br /><br />Edit /usr/local/etc/php-fpm.conf document introduced * .conf part, change to the correct path include = / usr / local / etc / php-fpm.d / *. Conf<br /><br />If there is no /usr/local/etc/php-fpm.d directory, create the directory.<br /><br />3.WARNING: Nothing matches the include pattern '/usr/local/etc/php-fpm.d/*.conf' from /usr/local/etc/php-fpm.conf at line 125. <br />ERROR:. No pool defined at least one pool section must be specified in config file <br />ERROR: failed to post process the configuration <br />ERROR: FPM initialization failed<br /><br />solution:<br /><br />cp www.conf.default www.conf<br /><br />4.ERROR: [pool www] can not get gid for group 'nobody' <br />ERROR: FPM initialization failed<br /><br />solution:<br /><br />Www.conf open files, user and group users into nginx default settings, usually the default is www-data.</span></code></div>
  </div>
 </div>
  <div class="note" id="126291">  <div class="votes">
    <div id="Vu126291">
    <a href="/manual/vote-note.php?id=126291&amp;page=install.unix.nginx&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126291">
    <a href="/manual/vote-note.php?id=126291&amp;page=install.unix.nginx&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126291" title="69% like this...">
    9
    </div>
  </div>
  <a href="#126291" class="name">
  <strong class="user"><em>Leon Nguyen vnlab</em></strong></a><a class="genanchor" href="#126291"> &para;</a><div class="date" title="2021-07-30 04:46"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126291">
<div class="phpcode"><code><span class="html">To maximize the server performance with highest speed, with fewest resources, i have decided to compile PHP 8 manually from minimal Linux/Unix-based OS (my Linux distro is rpm-based packages) <br /><br />My system has successfully powered up by PHP 8.0.9 - with Opcache/JIT enabled &amp; other several PHP extension module. Here is several experience that may save you several hours of research.<br /><br />1. Before step (3) - Configure and build PHP - to ensure that no errors occurs, you can refer to my prerequisites library. <br /><br />sudo dnf install \<br />gcc gcc-c++ make cmake autoconfig \<br />zlib zlib-devel pcre pcre-devel \<br />libxml2-devel libxslt-devel \<br />bzip2-devel curl-devel libzip-devel\<br />sqlite-devel \<br />systemd-devel \<br />openssl-devel \<br />libffi-devel \<br />libpng libpng-devel libwebp libwebp-devel libjpeg libjpeg-devel libXpm libXpm-devel \<br />freetype-devel \<br />gmp-devel \<br />libldb-devel \<br />libc-client libc-client-devel \<br />openldap openldap-devel \<br />oniguruma oniguruma-devel \<br />net-snmp-devel readline-devel unixODBC-devel \<br />uw-imap uw-imap-devel uw-imap-static uw-imap-utils \<br />libicu-devel \<br />enchant2 enchant2-devel \<br />gd gd-devel \<br />libsodium libsodium-devel \<br />libtidy libtidy-devel<br /><br />You may not receive error when issuing ./configure, make &amp;&amp; make install. Even when you manually build your PHP extension package later. <br /><br />2. At step 5 - before modifying php.ini - you may double-check whether the current PHP is reading which php.ini file by this command<br /><br />php -ini | grep php.ini <br /># My result. It is different from tutorial. <br />Configuration File (php.ini) Path =&gt; /usr/local/lib<br />Loaded Configuration File =&gt; /usr/local/lib/php.ini</span></code></div>
  </div>
 </div>
  <div class="note" id="123579">  <div class="votes">
    <div id="Vu123579">
    <a href="/manual/vote-note.php?id=123579&amp;page=install.unix.nginx&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123579">
    <a href="/manual/vote-note.php?id=123579&amp;page=install.unix.nginx&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123579" title="68% like this...">
    7
    </div>
  </div>
  <a href="#123579" class="name">
  <strong class="user"><em>uanaoeng at outlook dot com</em></strong></a><a class="genanchor" href="#123579"> &para;</a><div class="date" title="2019-02-01 08:56"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123579">
<div class="phpcode"><code><span class="html">When I run the following command to start the php-fpm:<br />/usr/local/bin/php-fpm<br /><br />I got the following error information:<br />Unable to globalize '/usr/local/NONE/etc/php-fpm.d/*.conf' (ret=2) from /usr/local/etc/php-fpm.conf at line 143.<br /><br />To fix this error, do:<br />change the string "include=NONE/etc/php-fpm.d/*.conf" to "include=etc/php-fpm.d/*.conf" in the file "/usr/local/etc/php-fpm.conf" with text editor.<br /><br />After that, I try to start the php-fpm again and got error information again:<br />Nothing matches the include pattern '/usr/local/etc/php-fpm.d/*.conf' from /usr/local/etc/php-fpm.conf at line 143.<br /><br />To fix this error, do:<br />cp /usr/local/etc/php-fpm.d/www.conf.default /usr/local/etc/php-fpm.d/www.conf</span></code></div>
  </div>
 </div>
  <div class="note" id="123396">  <div class="votes">
    <div id="Vu123396">
    <a href="/manual/vote-note.php?id=123396&amp;page=install.unix.nginx&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123396">
    <a href="/manual/vote-note.php?id=123396&amp;page=install.unix.nginx&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123396" title="58% like this...">
    4
    </div>
  </div>
  <a href="#123396" class="name">
  <strong class="user"><em>1097625354 at qq dot com</em></strong></a><a class="genanchor" href="#123396"> &para;</a><div class="date" title="2018-12-03 08:31"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123396">
<div class="phpcode"><code><span class="html">cp php/php.ini-development        php/lib/php.ini<br />cp php/etc/php-fpm.conf.default       php/etc/php-fpm.conf<br />cp php/etc/php-fpm.d/www.conf.default     php/etc/php-fpm.d/www.conf</span></code></div>
  </div>
 </div>
  <div class="note" id="118520">  <div class="votes">
    <div id="Vu118520">
    <a href="/manual/vote-note.php?id=118520&amp;page=install.unix.nginx&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118520">
    <a href="/manual/vote-note.php?id=118520&amp;page=install.unix.nginx&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118520" title="58% like this...">
    5
    </div>
  </div>
  <a href="#118520" class="name">
  <strong class="user"><em>Akash Kumar Sharma</em></strong></a><a class="genanchor" href="#118520"> &para;</a><div class="date" title="2015-12-20 08:48"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118520">
<div class="phpcode"><code><span class="html">If you get "File not found" error then add "root ROOT_DIR_LOCATION" directive to PHP location block i.e. "location ~* \.php$ { }" , where ROOT_DIR_LOCATION is root directory like "/usr/share/nginx/html" .</span></code></div>
  </div>
 </div>
  <div class="note" id="118414">  <div class="votes">
    <div id="Vu118414">
    <a href="/manual/vote-note.php?id=118414&amp;page=install.unix.nginx&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118414">
    <a href="/manual/vote-note.php?id=118414&amp;page=install.unix.nginx&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118414" title="60% like this...">
    2
    </div>
  </div>
  <a href="#118414" class="name">
  <strong class="user"><em>nguyentienlong88 at gmail dot com</em></strong></a><a class="genanchor" href="#118414"> &para;</a><div class="date" title="2015-12-03 03:22"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118414">
<div class="phpcode"><code><span class="html">at step 3, after command "sudo make install"<br />if there is problem with pear.php.net (https). Need to change this line (from https to http) in Makefile<br />PEAR_INSTALLER_URL = <a href="http://pear.php.net/install-pear-nozlib.phar" rel="nofollow" target="_blank">http://pear.php.net/install-pear-nozlib.phar</a></span></code></div>
  </div>
 </div>
  <div class="note" id="127148">  <div class="votes">
    <div id="Vu127148">
    <a href="/manual/vote-note.php?id=127148&amp;page=install.unix.nginx&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127148">
    <a href="/manual/vote-note.php?id=127148&amp;page=install.unix.nginx&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127148" title="57% like this...">
    1
    </div>
  </div>
  <a href="#127148" class="name">
  <strong class="user"><em>timy.shark</em></strong></a><a class="genanchor" href="#127148"> &para;</a><div class="date" title="2022-05-30 07:33"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127148">
<div class="phpcode"><code><span class="html">Great effort for this tutorial, thanks a ton, here are my notes if may help anyone, considering default install on WSL2 container<br />Note: composer added for Laravel framework.<br />These are NOT to be copy and pasted as it is, need to be selective as there are annotations beside some commands,<br />Also I've commented # some of the defaults written by the original editor due to mismatch to my current environment.<br /><br />sha256sum  php-x.x.x.tar.gz =&gt; e847745fd66fc8c57fac993a609fefcded93fddccd225f0620a26bb5ae5753c3 <br />    tar zxf php-x.x.x<br />    sudo apt install build-essential<br />    sudo apt install -y composer nginx pkgconf libxml2-dev  libsqlite3-dev zlib1g-dev<br />    cd php-x.x.x<br />    ./configure --enable-fpm --with-mysqli &lt;==Thank you for installing PHP.<br />        make &lt;== takes a while <br />    sudo make test &lt;== optional as recommended<br />    sudo make install &lt;= /usr/local/bin /usr/local/php<br />    sudo cp php.ini-development /usr/local/lib/php.ini<br />    sudo cp /usr/local/etc/php-fpm.d/www.conf.default /usr/local/etc/php-fpm.d/www.conf<br />    sudo cp sapi/fpm/php-fpm /usr/local/bin<br />    sudo vim /usr/local/php/php.ini &lt;= cgi.fix_pathinfo=0<br />    sudo vim /usr/local/etc/php-fpm.d/www.conf &lt;= user=www-data group=www-data<br />    sudo vim sapi/fpm/php-fpm.conf &lt;= edit include=etc/php-fpm.d/*.conf  &lt;- relative path<br />    sudo cp sapi/fpm/php-fpm.conf /usr/local/etc<br />    /usr/local/bin/php -v &lt;= $PATH$ uses /usr/local/bin at first /usr/local/lib/php.ini<br />    sudo /usr/local/bin/php-fpm &lt;= start the service<br />    sudo vim /etc/nginx/sites-available/default &lt;= edit the following under server {}<br />    location / {<br />    #root   html;    <br />    #index  index.php index.html index.htm;<br />}<br />    location ~* \.php$ {<br />    #fastcgi_index   index.php;<br />    fastcgi_pass    127.0.0.1:9000;<br />    include         fastcgi_params;<br />    fastcgi_param   SCRIPT_FILENAME    $document_root$fastcgi_script_name;<br />    fastcgi_param   SCRIPT_NAME        $fastcgi_script_name;<br />}<br />    <br />    *Restart nginx (root /var/www/html) if root path doesn't exist, default is: /usr/share/nginx/html<br />    sudo nginx -t &lt;= Test Nginx conf files<br />    sudo service nginx reload<br />    sudo service nginx stop<br />    sudo service nginx start &lt;= [OK]<br />    <br />php-fpm needs to be in a service, or kill process manually ps -aux | grep php-fpm ; kill &lt;pid&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="124418">  <div class="votes">
    <div id="Vu124418">
    <a href="/manual/vote-note.php?id=124418&amp;page=install.unix.nginx&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124418">
    <a href="/manual/vote-note.php?id=124418&amp;page=install.unix.nginx&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124418" title="54% like this...">
    1
    </div>
  </div>
  <a href="#124418" class="name">
  <strong class="user"><em>610010559 at qq dot com</em></strong></a><a class="genanchor" href="#124418"> &para;</a><div class="date" title="2019-11-21 12:44"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124418">
<div class="phpcode"><code><span class="html">in linux system, if you want to add php-fpm service to system service;  it is easy to do that, because php offer the relate shell script:<br /><br />after make and make install;enter the source code package sapi/fpm/init.d.php-fpm ; type the code in the linux system.  <br />cp sapi/fpm/init.d.php-fpm  /etc/init.d/php-fpm<br /><br />then you can use "php-fpm {start|stop|force-quit|restart|reload|status|configtest} "  command  to control your php-fpm program more convenient .</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=install.unix.nginx&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.unix.nginx.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="install.unix.php">Installation on Unix systems</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="install.unix.debian.php" title="Installing from packages on Debian GNU/Linux and related distributions">Installing from packages on Debian GNU/Linux and related distributions</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.dnf.php" title="Installing from packages on GNU/Linux distributions that use DNF">Installing from packages on GNU/Linux distributions that use DNF</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.openbsd.php" title="Installing from packages or ports on OpenBSD">Installing from packages or ports on OpenBSD</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.source.php" title="Installing from source on Unix and macOS systems">Installing from source on Unix and macOS systems</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.commandline.php" title="CGI and command line setups">CGI and command line setups</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.apache2.php" title="Apache 2.x on Unix systems">Apache 2.x on Unix systems</a>
                        </li>
                                                <li class="current">
                            <a href="install.unix.nginx.php" title="Nginx 1.4.x on Unix systems">Nginx 1.4.x on Unix systems</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.lighttpd-14.php" title="Lighttpd 1.4 on Unix systems">Lighttpd 1.4 on Unix systems</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.litespeed.php" title="LiteSpeed Web Server/OpenLiteSpeed Web Server on Unix systems">LiteSpeed Web Server/OpenLiteSpeed Web Server on Unix systems</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.solaris.php" title="Solaris specific installation tips">Solaris specific installation tips</a>
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
