<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Apache 2.x on Unix systems - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.unix.apache2.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.unix.apache2.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.unix.apache2.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.unix.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.unix.commandline.php">
 <link rel="next" href="https://www.php.net/manual/en/install.unix.nginx.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.unix.apache2.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.unix.apache2.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.unix.apache2.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.unix.apache2.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.unix.apache2.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.unix.apache2.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.unix.apache2.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.unix.apache2.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.unix.apache2.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.unix.apache2.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.unix.apache2.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Apache 2.x on Unix systems" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Apache 2.x on Unix systems - Manual" />
<meta name="twitter:description" content="Apache 2.x on Unix systems" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Apache 2.x on Unix systems - Manual" />
<meta itemprop="description" content="Apache 2.x on Unix systems" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Apache 2.x on Unix systems" />

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
        <a href="install.unix.nginx.php">
          Nginx 1.4.x on Unix systems &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.unix.commandline.php">
          &laquo; CGI and command line setups        </a>
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
            <option value='en/install.unix.apache2.php' selected="selected">English</option>
            <option value='de/install.unix.apache2.php'>German</option>
            <option value='es/install.unix.apache2.php'>Spanish</option>
            <option value='fr/install.unix.apache2.php'>French</option>
            <option value='it/install.unix.apache2.php'>Italian</option>
            <option value='ja/install.unix.apache2.php'>Japanese</option>
            <option value='pt_BR/install.unix.apache2.php'>Brazilian Portuguese</option>
            <option value='ru/install.unix.apache2.php'>Russian</option>
            <option value='tr/install.unix.apache2.php'>Turkish</option>
            <option value='uk/install.unix.apache2.php'>Ukrainian</option>
            <option value='zh/install.unix.apache2.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.unix.apache2" class="sect1">
 <h2 class="title">Apache 2.x on Unix systems</h2>

 <p class="para">
  This section contains notes and hints specific to Apache 2.x installs
  of PHP on Unix systems.
 </p>
   
 <div class="warning"><strong class="warning">Warning</strong><p class="para">We do not recommend using a
threaded MPM in production with Apache 2. Use the prefork MPM, which is
the default MPM with Apache 2.0 and 2.2.
For information on why, read the related FAQ entry on using
<a href="faq.installation.php#faq.installation.apache2" class="link">Apache2 with a threaded MPM</a></p></div>
    
 <p class="para">
  The <a href="http://httpd.apache.org/docs/current/" class="link external">&raquo;&nbsp;Apache Documentation</a>
  is the most authoritative source of information on the Apache 2.x server.
  More information about installation options for Apache may be found
  there.
 </p>

 <p class="para">
  The most recent version of Apache HTTP Server may be obtained from
  <a href="http://httpd.apache.org/" class="link external">&raquo;&nbsp;Apache download site</a>,
  and a fitting PHP version from the above mentioned places.
  This quick guide covers only the basics to get started with Apache 2.x
  and PHP. For more information read the
  <a href="http://httpd.apache.org/docs/current/" class="link external">&raquo;&nbsp;Apache Documentation</a>.
  The version numbers have been omitted here, to ensure the
  instructions are not incorrect. In the examples below, &#039;NN&#039; should be
  replaced with the specific version of Apache being used.
 </p>

 <p class="para">
  There are currently two versions of Apache 2.x - there&#039;s 2.4 and 2.2.
  While there are various reasons for choosing each, 2.4 is the current
  latest version, and the one that is recommended, if that option is
  available to you. However, the instructions here will work for either
  2.4 or 2.2. Note that Apache httpd 2.2 is officially End Of Life,
  and no new development or patches are being issued for it.
 </p>

 <ol type="1">
  <li class="listitem">
   <p class="para">
    Obtain the Apache HTTP server from the location listed above,
    and unpack it:
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
tar -xzf httpd-2.x.NN.tar.gz
</pre></div>
    </div>
   </div>
  </li>

  <li class="listitem">
   <p class="para">
    Likewise, obtain and unpack the PHP source:
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
tar -xzf php-NN.tar.gz
</pre></div>
    </div>
   </div>
  </li>
   
  <li class="listitem">
   <p class="para">
    Build and install Apache. Consult the Apache install documentation for
    more details on building Apache.
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
cd httpd-2_x_NN
./configure --enable-so
make
make install
</pre></div>
    </div>
   </div>
  </li>

  <li class="listitem">
   <p class="para">
    Now you have Apache 2.x.NN available under /usr/local/apache2,
    configured with loadable module support and the standard MPM prefork.
    To test the installation use your normal procedure for starting
    the Apache server, e.g.:

    <div class="informalexample">
     <div class="example-contents screen">
<div class="cdata"><pre>
/usr/local/apache2/bin/apachectl start
</pre></div>
     </div>
    </div>

    and stop the server to go on with the configuration for PHP:

    <div class="informalexample">
     <div class="example-contents screen">
<div class="cdata"><pre>
/usr/local/apache2/bin/apachectl stop
</pre></div>
     </div>
    </div>
   </p>
  </li>

  <li class="listitem">
   <p class="para">
    Now, configure and build PHP. This is where you customize PHP
    with various options, like which extensions will be enabled. Run
    <strong class="command">./configure --help</strong> for a list of available options. In our example
    we&#039;ll do a simple configure with Apache 2 and MySQL support.
   </p>

   <p class="para">
    If you built Apache from source, as described above, the below example will
    match your path for <strong class="command">apxs</strong>, but if you installed Apache some other way, you&#039;ll
    need to adjust the path to <strong class="command">apxs</strong> accordingly. Note that some distros may rename
    <strong class="command">apxs</strong> to <strong class="command">apxs2</strong>.
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
cd ../php-NN
./configure --with-apxs2=/usr/local/apache2/bin/apxs --with-pdo-mysql
make
make install
</pre></div>
    </div>
   </div>

   <p class="para">
    If you decide to change your configure options after installation,
    you&#039;ll need to re-run the <strong class="command">configure</strong>, <strong class="command">make</strong>,
    and <strong class="command">make install</strong> steps.
    You only need to restart apache for the new module to take effect.
    A recompile of Apache is not needed.
   </p>
         
   <p class="para">
    Note that unless told otherwise, <strong class="command">make install</strong> will also install
    <a href="https://pear.php.net/" class="link external">&raquo;&nbsp;PEAR</a>,
    various PHP tools such as <a href="install.pecl.phpize.php" class="link">phpize</a>,
    install the PHP CLI, and more.
   </p>
  </li>

  <li class="listitem">
   <p class="para">
    Setup your <var class="filename">php.ini</var>.
   </p>
    
   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
cp php.ini-development /usr/local/lib/php.ini
</pre></div>
    </div>
   </div>

   <p class="para">
    You may edit your <code class="literal">.ini</code> file to set PHP options. If you prefer having
    <var class="filename">php.ini</var> in another location,
    use <code class="literal">--with-config-file-path=/some/path</code> in step 5.
   </p>
   
   <p class="para">
    If you instead choose <var class="filename">php.ini-production</var>, be certain to read the list
    of changes within, as they affect how PHP behaves.
   </p>
  </li>

  <li class="listitem">
   <p class="para">
    Edit your <var class="filename">httpd.conf</var> to load the PHP module. The path on the right hand
    side of the <code class="literal">LoadModule</code> statement must point to the path of the PHP
    module on your system. The <strong class="command">make install</strong> from above may have already
    added this for you, but be sure to check.
   </p>

   <div class="informalexample">
    <p class="para">
     For PHP 8:
    </p>

    <div class="example-contents">
<div class="apache-confcode"><pre class="apache-confcode">LoadModule php_module modules/libphp.so</pre>
</div>
    </div>

   </div>

   <div class="informalexample">
    <p class="para">
     For PHP 7:
    </p>

    <div class="example-contents">
<div class="apache-confcode"><pre class="apache-confcode">LoadModule php7_module modules/libphp7.so</pre>
</div>
    </div>

   </div>
  </li>

  <li class="listitem">
   <p class="para">
    Tell Apache to parse certain extensions as PHP. For example, let&#039;s have
    Apache parse <code class="literal">.php</code> files as PHP. Instead of only using the Apache <code class="literal">AddType</code>
    directive, we want to avoid potentially dangerous uploads and created
    files such as <var class="filename">exploit.php.jpg</var> from being executed as PHP. Using this
    example, you could have any extension(s) parse as PHP by simply adding
    them. We&#039;ll add <code class="literal">.php</code> to demonstrate.
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="apache-confcode"><pre class="apache-confcode">&lt;FilesMatch \.php$&gt;
    SetHandler application/x-httpd-php
&lt;/FilesMatch&gt;</pre>
</div>
    </div>

   </div>

   <p class="para">
    Or, if we wanted to allow <code class="literal">.php</code>, <code class="literal">.php2</code>,
    <code class="literal">.php3</code>, <code class="literal">.php4</code>, <code class="literal">.php5</code>,
    <code class="literal">.php6</code>, and <code class="literal">.phtml</code> files to be
    executed as PHP, but nothing else, we&#039;d use this:
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="apache-confcode"><pre class="apache-confcode">&lt;FilesMatch &quot;\.ph(p[2-6]?|tml)$&quot;&gt;
    SetHandler application/x-httpd-php
&lt;/FilesMatch&gt;</pre>
</div>
    </div>

   </div>

   <p class="para">
    And to allow <code class="literal">.phps</code> files to be handled by the php source filter, and
    displayed as syntax-highlighted source code, use this:
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="apache-confcode"><pre class="apache-confcode">&lt;FilesMatch &quot;\.phps$&quot;&gt;
    SetHandler application/x-httpd-php-source
&lt;/FilesMatch&gt;</pre>
</div>
    </div>

   </div>

   <p class="para">
    <code class="literal">mod_rewrite</code> may be used to allow any arbitrary <code class="literal">.php</code> file to be displayed
    as syntax-highlighted source code, without having to rename or copy it
    to a <code class="literal">.phps</code> file:
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="apache-confcode"><pre class="apache-confcode">RewriteEngine On
RewriteRule (.*\.php)s$ $1 [H=application/x-httpd-php-source]</pre>
</div>
    </div>

   </div>

   <p class="para">
    The php source filter should not be enabled on production systems, where
    it may expose confidential or otherwise sensitive information embedded in
    source code.
   </p>
  </li>

  <li class="listitem">
   <p class="para">
    Use your normal procedure for starting the Apache server, e.g.:
   </p>
  
   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
/usr/local/apache2/bin/apachectl start
</pre></div>
    </div>
   </div>

   <p class="para">OR</p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
service httpd restart
</pre></div>
    </div>
   </div>
  </li>
 </ol>

 <p class="para">
  Following the steps above you will have a running Apache2 web server with
  support for PHP as a <code class="literal">SAPI</code> module. Of course, there are
  many more configuration options available for Apache and PHP. For more
  information type <strong class="command">./configure --help</strong> in the corresponding
  source tree.
 </p>

 <p class="para">
  Apache may be built multithreaded by selecting the
  <var class="filename">worker</var> MPM, rather than the standard
  <var class="filename">prefork</var> MPM, when Apache is built. This is done by
  adding the following option to the argument passed to <strong class="command">./configure</strong>, in
  step 3 above:
 </p>

 <div class="informalexample">
  <div class="example-contents screen">
<div class="cdata"><pre>
--with-mpm=worker
</pre></div>
  </div>
 </div>

 <p class="para">
  This should not be undertaken without being aware of the consequences of
  this decision, and having at least a fair understanding of
  the implications. The Apache documentation
  regarding <a href="http://httpd.apache.org/docs/current/mpm.html" class="link external">&raquo;&nbsp;MPM-Modules</a>
  discusses MPMs in a great deal more detail.
 </p>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   The <a href="faq.installation.php#faq.installation.apache.multiviews" class="link">Apache MultiViews
   FAQ</a> discusses using multiviews with PHP.
  </p>
 </p></blockquote>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   To build a multithreaded version of Apache, the target system must support threads.
   In this case, PHP should also be built with
   Zend Thread Safety (ZTS). Under this configuration, not all extensions will be available.
   The recommended setup is to build Apache with the default
   <var class="filename">prefork</var> MPM-Module.
  </p>
 </p></blockquote>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/unix/apache2.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.unix.apache2%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.unix.apache2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.unix.apache2.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92797">  <div class="votes">
    <div id="Vu92797">
    <a href="/manual/vote-note.php?id=92797&amp;page=install.unix.apache2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92797">
    <a href="/manual/vote-note.php?id=92797&amp;page=install.unix.apache2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92797" title="53% like this...">
    13
    </div>
  </div>
  <a href="#92797" class="name">
  <strong class="user"><em>nmmm at nmmm dot nu</em></strong></a><a class="genanchor" href="#92797"> &para;</a><div class="date" title="2009-08-09 01:13"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92797">
<div class="phpcode"><code><span class="html">When I upgrade to apache 2.2, this:
<br />
<br />AddType application/x-httpd-php .php5
<br />AddType application/x-httpd-php .php42
<br />AddType application/x-httpd-php .php4
<br />AddType application/x-httpd-php .php3
<br />AddType application/x-httpd-php .php
<br />AddType application/x-httpd-php .phtm
<br />AddType application/x-httpd-php .phtml
<br />AddType application/x-httpd-php .asp
<br />
<br />...does not worked for me, so I did this:
<br />
<br />&lt;FilesMatch "\.(php*|phtm|phtml|asp|aspx)$"&gt;
<br />SetHandler application/x-httpd-php
<br />&lt;/FilesMatch&gt;
<br />
<br />Another interesting point with Apache 2.2 is following.
<br />Let suppose we installed PHP as module. But for some directory, we need to use PHP as CGI (probably because of custom configuration). This can be done using:
<br />
<br />&lt;FilesMatch "\.(php*|phtm|phtml|asp|aspx)$"&gt;
<br />SetHandler none
<br />&lt;/FilesMatch&gt;
<br />
<br />AddType application/x-httpd-php-custom .php
<br />Action  application/x-httpd-php-custom  /cgi-bin/php-huge
<br />
<br />Note type must be different than "application/x-httpd-php" and also you need to deactivate the handler on sertain extention. You can do mixed configuration:
<br />
<br />&lt;FilesMatch "\.(php)$"&gt;
<br />SetHandler none
<br />&lt;/FilesMatch&gt;
<br />
<br />AddType application/x-httpd-php-custom .php
<br />Action  application/x-httpd-php-custom  /cgi-bin/php-huge
<br />
<br />in such case files like *.php5 and so on will be parsed via module, but *.php will go to php-huge executable.</span></code></div>
  </div>
 </div>
  <div class="note" id="127890">  <div class="votes">
    <div id="Vu127890">
    <a href="/manual/vote-note.php?id=127890&amp;page=install.unix.apache2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127890">
    <a href="/manual/vote-note.php?id=127890&amp;page=install.unix.apache2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127890" title="63% like this...">
    8
    </div>
  </div>
  <a href="#127890" class="name">
  <strong class="user"><em>Morning Star</em></strong></a><a class="genanchor" href="#127890"> &para;</a><div class="date" title="2022-11-03 06:46"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127890">
<div class="phpcode"><code><span class="html">I had just installed php8.1.12 on a machine used for writing C code. <br /><br />Below are some libraries that I needed to download on a debian-based OS. <br /><br />apt-get install libpcre3 libpcre3-dev <br />apt-get install apache2-dev<br />apt-get install libxml2-dev<br />apt-get install libsqlite3-dev<br /><br />These were the missing packages that I required. <br />If you get an error regarding a missing package or library, for example when I needed sqlite3, run the command: <br /><br />apt search sqlite3<br /><br />And you'll be able to see if there's any dev or lib packages. <br /><br />The apache2 instructions worked flawlessly at the time of php8.1.12; and in order to get certain requirements for an application, I had to run the php configure file like so:<br /><br />./configure --with-apxs2=/usr/local/apache2/bin/apxs --with-pdo-mysql --with-mysqli --with-zip --enable-gd<br /><br />The extra flags allowed me to use both types of mysql, allowed me to utilize PHP zip archiving, and allowed me to use Gnatt stuff.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=install.unix.apache2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.unix.apache2.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="install.unix.apache2.php" title="Apache 2.x on Unix systems">Apache 2.x on Unix systems</a>
                        </li>
                                                <li class="">
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
