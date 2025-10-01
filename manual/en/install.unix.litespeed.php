<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: LiteSpeed Web Server/OpenLiteSpeed Web Server on Unix systems - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.unix.litespeed.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.unix.litespeed.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.unix.litespeed.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.unix.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.unix.lighttpd-14.php">
 <link rel="next" href="https://www.php.net/manual/en/install.unix.solaris.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.unix.litespeed.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.unix.litespeed.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.unix.litespeed.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.unix.litespeed.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.unix.litespeed.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.unix.litespeed.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.unix.litespeed.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.unix.litespeed.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.unix.litespeed.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.unix.litespeed.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.unix.litespeed.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="LiteSpeed Web Server/OpenLiteSpeed Web Server on Unix systems" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: LiteSpeed Web Server/OpenLiteSpeed Web Server on Unix systems - Manual" />
<meta name="twitter:description" content="LiteSpeed Web Server/OpenLiteSpeed Web Server on Unix systems" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: LiteSpeed Web Server/OpenLiteSpeed Web Server on Unix systems - Manual" />
<meta itemprop="description" content="LiteSpeed Web Server/OpenLiteSpeed Web Server on Unix systems" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="LiteSpeed Web Server/OpenLiteSpeed Web Server on Unix systems" />

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
        <a href="install.unix.solaris.php">
          Solaris specific installation tips &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.unix.lighttpd-14.php">
          &laquo; Lighttpd 1.4 on Unix systems        </a>
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
            <option value='en/install.unix.litespeed.php' selected="selected">English</option>
            <option value='de/install.unix.litespeed.php'>German</option>
            <option value='es/install.unix.litespeed.php'>Spanish</option>
            <option value='fr/install.unix.litespeed.php'>French</option>
            <option value='it/install.unix.litespeed.php'>Italian</option>
            <option value='ja/install.unix.litespeed.php'>Japanese</option>
            <option value='pt_BR/install.unix.litespeed.php'>Brazilian Portuguese</option>
            <option value='ru/install.unix.litespeed.php'>Russian</option>
            <option value='tr/install.unix.litespeed.php'>Turkish</option>
            <option value='uk/install.unix.litespeed.php'>Ukrainian</option>
            <option value='zh/install.unix.litespeed.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.unix.litespeed" class="sect1">
 <h2 class="title">LiteSpeed Web Server/OpenLiteSpeed Web Server on Unix systems</h2>

 <p class="para">
  LiteSpeed PHP is an optimized compilation of PHP built to work with LiteSpeed
  products through the LiteSpeed SAPI. LSPHP runs as its own process and has 
  its own standalone binary, which can be used as a simple command line binary to execute 
  PHP scripts from the command line.
 </p>

 <p class="para">
  The LSAPI is a highly optimized API that allows communication between 
  LiteSpeed and third party web engines. Its protocol is similar to FCGI, but is 
  more efficient.
 </p>

 <p class="para">
  This documentation will cover installing and configuring PHP with LSAPI 
  for a LiteSpeed Web Server and OpenLiteSpeed Web Server.
 </p>

 <p class="para">
  This guide will assume that either LSWS or OLS is installed with their 
  default paths and flags. The default installation directory for both web 
  servers is /usr/local/lsws and both can be run from the bin subdirectory.
 </p>

 <p class="para">
  Please note that throughout this documentation, version numbers have been 
  replaced with an <code class="literal">x</code> to ensure this documentation stays correct in the future, 
  please replace these, as necessary, with the corresponding version numbers.
 </p>

 <ol type="1">
  <li class="listitem">
   <p class="para">
    To obtain and install either LiteSpeed Web Server or OpenLiteSpeed Web Server, visit the
    LiteSpeed Web Server documentation
    <a href="https://docs.litespeedtech.com/products/lsws/installation/" class="link external">&raquo;&nbsp;install page</a>
    or OpenLiteSpeed documentation 
    <a href="https://openlitespeed.org/kb/category/installation/more-installation-methods/" class="link external">&raquo;&nbsp;install page</a>.
   </p>
  </li>

  <li class="listitem">
   <p class="para">
    Obtain and unpack the php source:
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
mkdir /home/php
cd /home/php
wget http://us1.php.net/get/php-x.x.x.tar.gz/from/this/mirror
tar -zxvf php-x.x.x.tar.gz
cd php-x.x.x
</pre></div>
    </div>
   </div>
  </li>

  <li class="listitem">
   <p class="para">
    Configure and build PHP. This is where PHP can be customized with various options,
    such as which extensions will be enabled. Run ./configure --help for a list of available 
    options. In the example, we&#039;ll use the default recommended configuration options for 
    LiteSpeed Web Server:
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
./configure ... &#039;--with-litespeed&#039;
make
sudo make install
</pre></div>
    </div>
   </div>
  </li>

  <li class="listitem">
   <p class="para">
    Checking The LSPHP Installation
   </p>

   <p class="para">
    One of the simplest ways to check whether the installation of PHP was successful
    is to run the following code:
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
cd /usr/local/lsws/fcgi-bin/
./lsphp5 -v
</pre></div>
    </div>
   </div>

   <p class="para">
    This should return information about the new PHP build:
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
PHP 5.6.17 (litespeed) (built: Mar 22 2016 11:34:19)
Copyright (c) 1997-2014 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2015 Zend Technologies
</pre></div>
    </div>
   </div>

   <p class="para">
    Notice the <code class="literal">litespeed</code> in parenthesis. This means that the PHP binary has been 
    built with LSAPI support.
   </p>
  </li>
 </ol>

 <p class="para">
  Following the steps above, LiteSpeed / OpenLiteSpeed Web Server should 
  now be running with support for PHP as an SAPI extension. There are many more
  configuration options available for LSWS / OLS and PHP. For more information,
  check out the LiteSpeed documentation about 
  <a href="https://docs.litespeedtech.com/extapp/php/configuration/control/" class="link external">&raquo;&nbsp;PHP</a>.
 </p>

 <p class="para">
  Using LSPHP from the command line:
 </p>

 <p class="para">
  LSPHP(LSAPI + PHP) command line mode is used to process PHP scripts running 
  on a remote server that does not necessarily have a web server running. It is used 
  to process PHP scripts residing on a local web server (separate). This setup is 
  suitable for service scalability as PHP processing is offloaded to a remote server.
 </p>

 <p class="para">
  Start lsphp from the command line on a remote server:
  LSPHP is an executable and can be started manually and bound to IPv4, IPv6, or 
  Unix domain socket addresses with the command line option -b socket_address
 </p>

 <p class="para">
  Examples:
 </p>

 <p class="para">
  Have LSPHP bind to port 3000 on all IPv4 and IPv6 addresses:
 </p>

 <div class="informalexample">
  <div class="example-contents screen">
<div class="cdata"><pre>
/path/to/lsphp -b [::]:3000
</pre></div>
  </div>
 </div>

 <p class="para">
  Have LSPHP bind to port 3000 on all IPv4 addresses:
 </p>

 <div class="informalexample">
  <div class="example-contents screen">
<div class="cdata"><pre>
/path/to/lsphp -b *:3000
</pre></div>
  </div>
 </div>

 <p class="para">
  Have LSPHP bind to address 192.168.0.2:3000:
 </p>

 <div class="informalexample">
  <div class="example-contents screen">
<div class="cdata"><pre>
/path/to/lsphp -b 192.168.0.2:3000
</pre></div>
  </div>
 </div>

 <p class="para">
  Have LSPHP accept requests on Unix domain socket <code class="literal">/tmp/lsphp_manual.sock</code>:
 </p>

 <div class="informalexample">
  <div class="example-contents screen">
<div class="cdata"><pre>
/path/to/lsphp -b /tmp/lsphp_manual.sock
</pre></div>
  </div>
 </div>

 <p class="para">
  Environment variables can be added before the LSPHP executable:
 </p>

 <div class="informalexample">
  <div class="example-contents screen">
<div class="cdata"><pre>
PHP_LSAPI_MAX_REQUESTS=500 PHP_LSAPI_CHILDREN=35 /path/to/lsphp -b IP_address:port
</pre></div>
  </div>
 </div>

 <p class="para">
  Currently LiteSpeed PHP can be used with LiteSpeed Web Server, 
  OpenLiteSpeed Web Server, and Apache mod_lsapi. For steps on 
  server-side configuration, visit the documentation pages for 
  <a href="https://docs.litespeedtech.com/extapp/php/getting_started/" class="link external">&raquo;&nbsp;LiteSpeed Web Server</a> 
  and <a href="https://openlitespeed.org/kb/category/installation/php-installation-guides/" class="link external">&raquo;&nbsp;OpenLiteSpeed</a>.
 </p>

 <p class="para">
  LSPHP can be installed in several other ways as well.
 </p>

 <p class="para">
  CentOS:
  On CentOS, LSPHP can be installed from the LiteSpeed Repository or the Remi 
  Repository  using <a href="https://docs.litespeedtech.com/extapp/php/getting_started/#litespeed-repo-search-packages" class="link external">&raquo;&nbsp;RPM</a>.
 </p>

 <p class="para">
  Debian:
  On Debian, LSPHP can be installed from the LiteSpeed Repository using 
  <a href="https://docs.litespeedtech.com/extapp/php/getting_started/#litespeed-repo-search-packages" class="link external">&raquo;&nbsp;apt</a>.
 </p>

 <p class="para">
  cPanel:
  Visit the respective <a href="https://docs.litespeedtech.com/cp/cpanel/quickstart/#easyapache-integration" class="link external">&raquo;&nbsp;documentation page</a> 
  about how to install LSPHP with cPanel and LSWS/OLS using EasyApache 4.
 </p>

 <p class="para">
  Plesk:
  Plesk can be used with LSPHP on CentOS, CloudLinux, Debian, and Ubuntu, 
  for more details on this, visit the respective <a href="https://docs.litespeedtech.com/cp/plesk/" class="link external">&raquo;&nbsp;documentation page</a>
 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/unix/litespeed.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.unix.litespeed%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.unix.litespeed&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.unix.litespeed.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
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
                                                <li class="">
                            <a href="install.unix.nginx.php" title="Nginx 1.4.x on Unix systems">Nginx 1.4.x on Unix systems</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.lighttpd-14.php" title="Lighttpd 1.4 on Unix systems">Lighttpd 1.4 on Unix systems</a>
                        </li>
                                                <li class="current">
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
