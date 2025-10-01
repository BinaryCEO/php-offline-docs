<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Examples - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/sockets.examples.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/sockets.examples.php">
 <link rel="alternate" href="https://www.php.net/manual/en/sockets.examples.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.sockets.php">
 <link rel="prev" href="https://www.php.net/manual/en/sockets.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/sockets.errors.php">

 <link rel="alternate" href="https://www.php.net/manual/en/sockets.examples.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/sockets.examples.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/sockets.examples.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/sockets.examples.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/sockets.examples.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/sockets.examples.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/sockets.examples.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/sockets.examples.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/sockets.examples.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/sockets.examples.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/sockets.examples.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Examples" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Examples - Manual" />
<meta name="twitter:description" content="Examples" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Examples - Manual" />
<meta itemprop="description" content="Examples" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Examples" />

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
        <a href="sockets.errors.php">
          Socket Errors &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="sockets.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.sockets.php'>Sockets</a></li>      </ul>
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
            <option value='en/sockets.examples.php' selected="selected">English</option>
            <option value='de/sockets.examples.php'>German</option>
            <option value='es/sockets.examples.php'>Spanish</option>
            <option value='fr/sockets.examples.php'>French</option>
            <option value='it/sockets.examples.php'>Italian</option>
            <option value='ja/sockets.examples.php'>Japanese</option>
            <option value='pt_BR/sockets.examples.php'>Brazilian Portuguese</option>
            <option value='ru/sockets.examples.php'>Russian</option>
            <option value='tr/sockets.examples.php'>Turkish</option>
            <option value='uk/sockets.examples.php'>Ukrainian</option>
            <option value='zh/sockets.examples.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="sockets.examples" class="chapter">
 <h1 class="title">Examples</h1>

 <p class="para">
  <div class="example" id="example-4793">
   <p><strong>Example #1 Socket example: Simple TCP/IP server</strong></p>
   <div class="example-contents"><p>
    This example shows a simple talkback server. Change the
    <var class="varname">address</var> and <var class="varname">port</var> variables
    to suit your setup and execute. You may then connect to the
    server with a command similar to: <strong class="command">telnet 192.168.1.53
    10000</strong> (where the address and port match your
    setup). Anything you type will then be output on the server
    side, and echoed back to you. To disconnect, enter &#039;quit&#039;.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">#!/usr/local/bin/php -q<br /><span style="color: #0000BB">&lt;?php<br />error_reporting</span><span style="color: #007700">(</span><span style="color: #0000BB">E_ALL</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Allow the script to hang around waiting for connections. */<br /></span><span style="color: #0000BB">set_time_limit</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Turn on implicit output flushing so we see what we're getting<br /> * as it comes in. */<br /></span><span style="color: #0000BB">ob_implicit_flush</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$address </span><span style="color: #007700">= </span><span style="color: #DD0000">'192.168.1.53'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$port </span><span style="color: #007700">= </span><span style="color: #0000BB">10000</span><span style="color: #007700">;<br /><br />if ((</span><span style="color: #0000BB">$sock </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_create</span><span style="color: #007700">(</span><span style="color: #0000BB">AF_INET</span><span style="color: #007700">, </span><span style="color: #0000BB">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #0000BB">SOL_TCP</span><span style="color: #007700">)) === </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"socket_create() failed: reason: " </span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br />if (</span><span style="color: #0000BB">socket_bind</span><span style="color: #007700">(</span><span style="color: #0000BB">$sock</span><span style="color: #007700">, </span><span style="color: #0000BB">$address</span><span style="color: #007700">, </span><span style="color: #0000BB">$port</span><span style="color: #007700">) === </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"socket_bind() failed: reason: " </span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">(</span><span style="color: #0000BB">$sock</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br />if (</span><span style="color: #0000BB">socket_listen</span><span style="color: #007700">(</span><span style="color: #0000BB">$sock</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">) === </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"socket_listen() failed: reason: " </span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">(</span><span style="color: #0000BB">$sock</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br />do {<br />    if ((</span><span style="color: #0000BB">$msgsock </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_accept</span><span style="color: #007700">(</span><span style="color: #0000BB">$sock</span><span style="color: #007700">)) === </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"socket_accept() failed: reason: " </span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">(</span><span style="color: #0000BB">$sock</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />        break;<br />    }<br />    </span><span style="color: #FF8000">/* Send instructions. */<br />    </span><span style="color: #0000BB">$msg </span><span style="color: #007700">= </span><span style="color: #DD0000">"\nWelcome to the PHP Test Server. \n" </span><span style="color: #007700">.<br />        </span><span style="color: #DD0000">"To quit, type 'quit'. To shut down the server type 'shutdown'.\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">socket_write</span><span style="color: #007700">(</span><span style="color: #0000BB">$msgsock</span><span style="color: #007700">, </span><span style="color: #0000BB">$msg</span><span style="color: #007700">, </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$msg</span><span style="color: #007700">));<br /><br />    do {<br />        if (</span><span style="color: #0000BB">false </span><span style="color: #007700">=== (</span><span style="color: #0000BB">$buf </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_read</span><span style="color: #007700">(</span><span style="color: #0000BB">$msgsock</span><span style="color: #007700">, </span><span style="color: #0000BB">2048</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_NORMAL_READ</span><span style="color: #007700">))) {<br />            echo </span><span style="color: #DD0000">"socket_read() failed: reason: " </span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">(</span><span style="color: #0000BB">$msgsock</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />            break </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />        }<br />        if (!</span><span style="color: #0000BB">$buf </span><span style="color: #007700">= </span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$buf</span><span style="color: #007700">)) {<br />            continue;<br />        }<br />        if (</span><span style="color: #0000BB">$buf </span><span style="color: #007700">== </span><span style="color: #DD0000">'quit'</span><span style="color: #007700">) {<br />            break;<br />        }<br />        if (</span><span style="color: #0000BB">$buf </span><span style="color: #007700">== </span><span style="color: #DD0000">'shutdown'</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">socket_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$msgsock</span><span style="color: #007700">);<br />            break </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />        }<br />        </span><span style="color: #0000BB">$talkback </span><span style="color: #007700">= </span><span style="color: #DD0000">"PHP: You said '</span><span style="color: #0000BB">$buf</span><span style="color: #DD0000">'.\n"</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">socket_write</span><span style="color: #007700">(</span><span style="color: #0000BB">$msgsock</span><span style="color: #007700">, </span><span style="color: #0000BB">$talkback</span><span style="color: #007700">, </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$talkback</span><span style="color: #007700">));<br />        echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$buf</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    } while (</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">socket_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$msgsock</span><span style="color: #007700">);<br />} while (</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">socket_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$sock</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-4794">
   <p><strong>Example #2 Socket example: Simple TCP/IP client</strong></p>
   <div class="example-contents"><p>
    This example shows a simple, one-shot HTTP client. It simply
    connects to a page, submits a HEAD request, echoes the reply,
    and exits.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />error_reporting</span><span style="color: #007700">(</span><span style="color: #0000BB">E_ALL</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"&lt;h2&gt;TCP/IP Connection&lt;/h2&gt;\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Get the port for the WWW service. */<br /></span><span style="color: #0000BB">$service_port </span><span style="color: #007700">= </span><span style="color: #0000BB">getservbyname</span><span style="color: #007700">(</span><span style="color: #DD0000">'www'</span><span style="color: #007700">, </span><span style="color: #DD0000">'tcp'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Get the IP address for the target host. */<br /></span><span style="color: #0000BB">$address </span><span style="color: #007700">= </span><span style="color: #0000BB">gethostbyname</span><span style="color: #007700">(</span><span style="color: #DD0000">'www.example.com'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create a TCP/IP socket. */<br /></span><span style="color: #0000BB">$socket </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_create</span><span style="color: #007700">(</span><span style="color: #0000BB">AF_INET</span><span style="color: #007700">, </span><span style="color: #0000BB">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #0000BB">SOL_TCP</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$socket </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"socket_create() failed: reason: " </span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"OK.\n"</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #DD0000">"Attempting to connect to '</span><span style="color: #0000BB">$address</span><span style="color: #DD0000">' on port '</span><span style="color: #0000BB">$service_port</span><span style="color: #DD0000">'..."</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">$address</span><span style="color: #007700">, </span><span style="color: #0000BB">$service_port</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"socket_connect() failed.\nReason: (</span><span style="color: #0000BB">$result</span><span style="color: #DD0000">) " </span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"OK.\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$in </span><span style="color: #007700">= </span><span style="color: #DD0000">"HEAD / HTTP/1.1\r\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$in </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Host: www.example.com\r\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$in </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Connection: Close\r\n\r\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$out </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">"Sending HTTP HEAD request..."</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">socket_write</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">$in</span><span style="color: #007700">, </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$in</span><span style="color: #007700">));<br />echo </span><span style="color: #DD0000">"OK.\n"</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">"Reading response:\n\n"</span><span style="color: #007700">;<br />while (</span><span style="color: #0000BB">$out </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_read</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">2048</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #0000BB">$out</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #DD0000">"Closing socket..."</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">socket_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"OK.\n\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sockets/examples.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsockets.examples%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=sockets.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sockets.examples.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109888">  <div class="votes">
    <div id="Vu109888">
    <a href="/manual/vote-note.php?id=109888&amp;page=sockets.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109888">
    <a href="/manual/vote-note.php?id=109888&amp;page=sockets.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109888" title="58% like this...">
    82
    </div>
  </div>
  <a href="#109888" class="name">
  <strong class="user"><em>javier,javiern at gmail dot com</em></strong></a><a class="genanchor" href="#109888"> &para;</a><div class="date" title="2012-08-30 07:25"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109888">
<div class="phpcode"><code><span class="html">You can easily extend the first example to handle any number of connections instead of jsut one<br /><br />#!/usr/bin/env php<br /><span class="default">&lt;?php<br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /><br /></span><span class="comment">/* Permitir al script esperar para conexiones. */<br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">/* Activar el volcado de salida implícito, así veremos lo que estamo obteniendo<br /> * mientras llega. */<br /></span><span class="default">ob_implicit_flush</span><span class="keyword">();<br /><br /></span><span class="default">$address </span><span class="keyword">= </span><span class="string">'127.0.0.1'</span><span class="keyword">;<br /></span><span class="default">$port </span><span class="keyword">= </span><span class="default">10000</span><span class="keyword">;<br /><br />if ((</span><span class="default">$sock </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">SOL_TCP</span><span class="keyword">)) === </span><span class="default">false</span><span class="keyword">) {<br />    echo </span><span class="string">"socket_create() falló: razón: " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">()) . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br />if (</span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">$address</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />    echo </span><span class="string">"socket_bind() falló: razón: " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">)) . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br />if (</span><span class="default">socket_listen</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />    echo </span><span class="string">"socket_listen() falló: razón: " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">)) . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//clients array<br /></span><span class="default">$clients </span><span class="keyword">= array();<br /><br />do {<br />    </span><span class="default">$read </span><span class="keyword">= array();<br />    </span><span class="default">$read</span><span class="keyword">[] = </span><span class="default">$sock</span><span class="keyword">;<br />    <br />    </span><span class="default">$read </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">,</span><span class="default">$clients</span><span class="keyword">);<br />    <br />    </span><span class="comment">// Set up a blocking call to socket_select<br />    </span><span class="keyword">if(</span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">,</span><span class="default">$write </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$except </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$tv_sec </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">) &lt; </span><span class="default">1</span><span class="keyword">)<br />    {<br />        </span><span class="comment">//    SocketServer::debug("Problem blocking socket_select?");<br />        </span><span class="keyword">continue;<br />    }<br />    <br />    </span><span class="comment">// Handle new Connections<br />    </span><span class="keyword">if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">$read</span><span class="keyword">)) {        <br />        <br />        if ((</span><span class="default">$msgsock </span><span class="keyword">= </span><span class="default">socket_accept</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">)) === </span><span class="default">false</span><span class="keyword">) {<br />            echo </span><span class="string">"socket_accept() falló: razón: " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">)) . </span><span class="string">"\n"</span><span class="keyword">;<br />            break;<br />        }<br />        </span><span class="default">$clients</span><span class="keyword">[] = </span><span class="default">$msgsock</span><span class="keyword">;<br />        </span><span class="default">$key </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$clients</span><span class="keyword">, </span><span class="default">$msgsock</span><span class="keyword">);<br />        </span><span class="comment">/* Enviar instrucciones. */<br />        </span><span class="default">$msg </span><span class="keyword">= </span><span class="string">"\nBienvenido al Servidor De Prueba de PHP. \n" </span><span class="keyword">.<br />        </span><span class="string">"Usted es el cliente numero: </span><span class="keyword">{</span><span class="default">$key</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string">\n" </span><span class="keyword">.<br />        </span><span class="string">"Para salir, escriba 'quit'. Para cerrar el servidor escriba 'shutdown'.\n"</span><span class="keyword">;<br />        </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$msgsock</span><span class="keyword">, </span><span class="default">$msg</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">));<br />        <br />    }<br />    <br />    </span><span class="comment">// Handle Input<br />    </span><span class="keyword">foreach (</span><span class="default">$clients </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$client</span><span class="keyword">) { </span><span class="comment">// for each client        <br />        </span><span class="keyword">if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">, </span><span class="default">$read</span><span class="keyword">)) {<br />            if (</span><span class="default">false </span><span class="keyword">=== (</span><span class="default">$buf </span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">, </span><span class="default">2048</span><span class="keyword">, </span><span class="default">PHP_NORMAL_READ</span><span class="keyword">))) {<br />                echo </span><span class="string">"socket_read() falló: razón: " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">)) . </span><span class="string">"\n"</span><span class="keyword">;<br />                break </span><span class="default">2</span><span class="keyword">;<br />            }<br />            if (!</span><span class="default">$buf </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">)) {<br />                continue;<br />            }<br />            if (</span><span class="default">$buf </span><span class="keyword">== </span><span class="string">'quit'</span><span class="keyword">) {<br />                unset(</span><span class="default">$clients</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">);<br />                break;<br />            }<br />            if (</span><span class="default">$buf </span><span class="keyword">== </span><span class="string">'shutdown'</span><span class="keyword">) {<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">);<br />                break </span><span class="default">2</span><span class="keyword">;<br />            }<br />            </span><span class="default">$talkback </span><span class="keyword">= </span><span class="string">"Cliente </span><span class="keyword">{</span><span class="default">$key</span><span class="keyword">}</span><span class="string">: Usted dijo '</span><span class="default">$buf</span><span class="string">'.\n"</span><span class="keyword">;<br />            </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">, </span><span class="default">$talkback</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$talkback</span><span class="keyword">));<br />            echo </span><span class="string">"</span><span class="default">$buf</span><span class="string">\n"</span><span class="keyword">;<br />        }<br />        <br />    }        <br />} while (</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128052">  <div class="votes">
    <div id="Vu128052">
    <a href="/manual/vote-note.php?id=128052&amp;page=sockets.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128052">
    <a href="/manual/vote-note.php?id=128052&amp;page=sockets.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128052" title="53% like this...">
    1
    </div>
  </div>
  <a href="#128052" class="name">
  <strong class="user"><em>Timofey Bugaevsky</em></strong></a><a class="genanchor" href="#128052"> &para;</a><div class="date" title="2022-12-25 03:53"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128052">
<div class="phpcode"><code><span class="html">Good example from Javier.<br /><br />For using in docker container you can use 0 as an address:<br />$address = '0';<br /><br />To broadcast a message to all clients, you can use socket_write() for all required clients:<br />...<br />    // Handle Input<br />    foreach ($clients as $key =&gt; $client) {<br />        if (in_array($client, $read)) {<br />            ...<br />            if ($buf == 'message') {<br />                $talkback = "$buf $key\n";<br />                foreach ($clients as $curClient) {<br />                    socket_write($curClient, $talkback, strlen($talkback));<br />                }<br />                continue;<br />            }<br />            ...<br />        }<br />    }<br />...</span></code></div>
  </div>
 </div>
  <div class="note" id="121151">  <div class="votes">
    <div id="Vu121151">
    <a href="/manual/vote-note.php?id=121151&amp;page=sockets.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121151">
    <a href="/manual/vote-note.php?id=121151&amp;page=sockets.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121151" title="50% like this...">
    2
    </div>
  </div>
  <a href="#121151" class="name">
  <strong class="user"><em>zital at riseup dot net</em></strong></a><a class="genanchor" href="#121151"> &para;</a><div class="date" title="2017-05-29 08:16"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121151">
<div class="phpcode"><code><span class="html">due to PHP standars modify the code to:<br /><span class="default">&lt;?php<br /></span><span class="comment">//...<br />    </span><span class="default">$write </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />    </span><span class="default">$except </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />    </span><span class="default">$tv_sec </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br /><br />    </span><span class="comment">// Set up a blocking call to socket_select<br />    </span><span class="keyword">if(</span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">, </span><span class="default">$write</span><span class="keyword">, </span><span class="default">$except</span><span class="keyword">, </span><span class="default">$tv_sec</span><span class="keyword">) &lt; </span><span class="default">1</span><span class="keyword">)<br /></span><span class="comment">//...<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=sockets.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sockets.examples.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.sockets.php">Sockets</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.sockets.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="sockets.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="sockets.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="sockets.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="sockets.errors.php" title="Socket Errors">Socket Errors</a>
                        </li>
                                                <li class="">
                            <a href="ref.sockets.php" title="Socket Functions">Socket Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.socket.php" title="Socket">Socket</a>
                        </li>
                                                <li class="">
                            <a href="class.addressinfo.php" title="AddressInfo">AddressInfo</a>
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
