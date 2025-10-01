<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/sockets.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/sockets.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/sockets.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.sockets.php">
 <link rel="prev" href="https://www.php.net/manual/en/sockets.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/sockets.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/sockets.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/sockets.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/sockets.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/sockets.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/sockets.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/sockets.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/sockets.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/sockets.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/sockets.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/sockets.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/sockets.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="sockets.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="sockets.resources.php">
          &laquo; Resource Types        </a>
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
            <option value='en/sockets.constants.php' selected="selected">English</option>
            <option value='de/sockets.constants.php'>German</option>
            <option value='es/sockets.constants.php'>Spanish</option>
            <option value='fr/sockets.constants.php'>French</option>
            <option value='it/sockets.constants.php'>Italian</option>
            <option value='ja/sockets.constants.php'>Japanese</option>
            <option value='pt_BR/sockets.constants.php'>Brazilian Portuguese</option>
            <option value='ru/sockets.constants.php'>Russian</option>
            <option value='tr/sockets.constants.php'>Turkish</option>
            <option value='uk/sockets.constants.php'>Ukrainian</option>
            <option value='zh/sockets.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="sockets.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <dl>
  
   <dt id="constant.af-unix">
    <strong><code><a href="sockets.constants.php#constant.af-unix">AF_UNIX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Socket address family of filesystem pathnames in the Unix Domain.
    </span>
   </dd>
  
  
   <dt id="constant.af-inet">
    <strong><code><a href="sockets.constants.php#constant.af-inet">AF_INET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Socket address family of IPv4 in the Internet Domain.
    </span>
   </dd>
  
  
   <dt id="constant.af-inet6">
    <strong><code><a href="sockets.constants.php#constant.af-inet6">AF_INET6</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Socket address family of IPv6 in the Internet Domain. Only available if compiled with IPv6 support.
    </span>
   </dd>
  
  
   <dt id="constant.af-divert">
    <strong><code><a href="sockets.constants.php#constant.af-divert">AF_DIVERT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (FreeBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.sock-stream">
    <strong><code><a href="sockets.constants.php#constant.sock-stream">SOCK_STREAM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sock-dgram">
    <strong><code><a href="sockets.constants.php#constant.sock-dgram">SOCK_DGRAM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sock-raw">
    <strong><code><a href="sockets.constants.php#constant.sock-raw">SOCK_RAW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sock-seqpacket">
    <strong><code><a href="sockets.constants.php#constant.sock-seqpacket">SOCK_SEQPACKET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sock-rdm">
    <strong><code><a href="sockets.constants.php#constant.sock-rdm">SOCK_RDM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sock-conn-dgram">
    <strong><code><a href="sockets.constants.php#constant.sock-conn-dgram">SOCK_CONN_DGRAM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Set the socket to a connection-oriented datagram.
     Available as of PHP 8.4.0. (NetBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.sock-dccp">
    <strong><code><a href="sockets.constants.php#constant.sock-dccp">SOCK_DCCP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Set the socket to a datagram congestion control protocol.
     Available as of PHP 8.4.0. (NetBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.sock-nonblock">
    <strong><code><a href="sockets.constants.php#constant.sock-nonblock">SOCK_NONBLOCK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Set the non-blocking socket status flag.
     Available as of PHP 8.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.sock-cloexec">
    <strong><code><a href="sockets.constants.php#constant.sock-cloexec">SOCK_CLOEXEC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Set the close-on-exec socket status flag.
     Available as of PHP 8.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.msg-oob">
    <strong><code><a href="sockets.constants.php#constant.msg-oob">MSG_OOB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.msg-waitall">
    <strong><code><a href="sockets.constants.php#constant.msg-waitall">MSG_WAITALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.msg-peek">
    <strong><code><a href="sockets.constants.php#constant.msg-peek">MSG_PEEK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.msg-dontroute">
    <strong><code><a href="sockets.constants.php#constant.msg-dontroute">MSG_DONTROUTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.msg-eor">
    <strong><code><a href="sockets.constants.php#constant.msg-eor">MSG_EOR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Not available on Windows platforms.
    </span>
   </dd>
  
  
   <dt id="constant.msg-eof">
    <strong><code><a href="sockets.constants.php#constant.msg-eof">MSG_EOF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Not available on Windows platforms.
    </span>
   </dd>
  
  
   <dt id="constant.msg-zerocopy">
    <strong><code><a href="sockets.constants.php#constant.msg-zerocopy">MSG_ZEROCOPY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.so-debug">
    <strong><code><a href="sockets.constants.php#constant.so-debug">SO_DEBUG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-reuseaddr">
    <strong><code><a href="sockets.constants.php#constant.so-reuseaddr">SO_REUSEADDR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-reuseport">
    <strong><code><a href="sockets.constants.php#constant.so-reuseport">SO_REUSEPORT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This constant is only available on platforms that
     support the <strong><code><a href="sockets.constants.php#constant.so-reuseport">SO_REUSEPORT</a></code></strong> socket option: this
     includes Linux, macOS and *BSD, but does not include Windows.
    </span>
   </dd>
  
  
   <dt id="constant.so-keepalive">
    <strong><code><a href="sockets.constants.php#constant.so-keepalive">SO_KEEPALIVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-dontroute">
    <strong><code><a href="sockets.constants.php#constant.so-dontroute">SO_DONTROUTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-linger">
    <strong><code><a href="sockets.constants.php#constant.so-linger">SO_LINGER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-broadcast">
    <strong><code><a href="sockets.constants.php#constant.so-broadcast">SO_BROADCAST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-oobinline">
    <strong><code><a href="sockets.constants.php#constant.so-oobinline">SO_OOBINLINE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-sndbuf">
    <strong><code><a href="sockets.constants.php#constant.so-sndbuf">SO_SNDBUF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-rcvbuf">
    <strong><code><a href="sockets.constants.php#constant.so-rcvbuf">SO_RCVBUF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-sndlowat">
    <strong><code><a href="sockets.constants.php#constant.so-sndlowat">SO_SNDLOWAT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-rcvlowat">
    <strong><code><a href="sockets.constants.php#constant.so-rcvlowat">SO_RCVLOWAT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-sndtimeo">
    <strong><code><a href="sockets.constants.php#constant.so-sndtimeo">SO_SNDTIMEO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-rcvtimeo">
    <strong><code><a href="sockets.constants.php#constant.so-rcvtimeo">SO_RCVTIMEO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-type">
    <strong><code><a href="sockets.constants.php#constant.so-type">SO_TYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-error">
    <strong><code><a href="sockets.constants.php#constant.so-error">SO_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.so-zerocopy">
    <strong><code><a href="sockets.constants.php#constant.so-zerocopy">SO_ZEROCOPY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.tcp-nodelay">
    <strong><code><a href="sockets.constants.php#constant.tcp-nodelay">TCP_NODELAY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Used to disable Nagle TCP algorithm.
    </span>
   </dd>
  
  
   <dt id="constant.tcp-keepcnt">
    <strong><code><a href="sockets.constants.php#constant.tcp-keepcnt">TCP_KEEPCNT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.tcp-keepidle">
    <strong><code><a href="sockets.constants.php#constant.tcp-keepidle">TCP_KEEPIDLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.tcp-keepintvl">
    <strong><code><a href="sockets.constants.php#constant.tcp-keepintvl">TCP_KEEPINTVL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.tcp-keepalive">
    <strong><code><a href="sockets.constants.php#constant.tcp-keepalive">TCP_KEEPALIVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.tcp-notsent-lowat">
    <strong><code><a href="sockets.constants.php#constant.tcp-notsent-lowat">TCP_NOTSENT_LOWAT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.so-mark">
    <strong><code><a href="sockets.constants.php#constant.so-mark">SO_MARK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.1.0
    </span>
   </dd>
  
  
   <dt id="constant.so-user-cookie">
    <strong><code><a href="sockets.constants.php#constant.so-user-cookie">SO_USER_COOKIE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.1.0
    </span>
   </dd>
  
  
   <dt id="constant.so-rtable">
    <strong><code><a href="sockets.constants.php#constant.so-rtable">SO_RTABLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.so-acceptfilter">
    <strong><code><a href="sockets.constants.php#constant.so-acceptfilter">SO_ACCEPTFILTER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.1.0
    </span>
   </dd>
  
  
   <dt id="constant.so-donttrunc">
    <strong><code><a href="sockets.constants.php#constant.so-donttrunc">SO_DONTTRUNC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.1.0
    </span>
   </dd>
  
  
   <dt id="constant.so-wantmore">
    <strong><code><a href="sockets.constants.php#constant.so-wantmore">SO_WANTMORE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.1.0
    </span>
   </dd>
  
  
   <dt id="constant.so-incoming-cpu">
    <strong><code><a href="sockets.constants.php#constant.so-incoming-cpu">SO_INCOMING_CPU</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.so-meminfo">
    <strong><code><a href="sockets.constants.php#constant.so-meminfo">SO_MEMINFO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.so-bpf-extensions">
    <strong><code><a href="sockets.constants.php#constant.so-bpf-extensions">SO_BPF_EXTENSIONS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.so-setfib">
    <strong><code><a href="sockets.constants.php#constant.so-setfib">SO_SETFIB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.so-attach-reuseport-cbpf">
    <strong><code><a href="sockets.constants.php#constant.so-attach-reuseport-cbpf">SO_ATTACH_REUSEPORT_CBPF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.so-detach-bpf">
    <strong><code><a href="sockets.constants.php#constant.so-detach-bpf">SO_DETACH_BPF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.so-detach-filter">
    <strong><code><a href="sockets.constants.php#constant.so-detach-filter">SO_DETACH_FILTER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.so-rerror">
    <strong><code><a href="sockets.constants.php#constant.so-rerror">SO_RERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (NetBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.so-zeroize">
    <strong><code><a href="sockets.constants.php#constant.so-zeroize">SO_ZEROIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (OpenBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.so-splice">
    <strong><code><a href="sockets.constants.php#constant.so-splice">SO_SPLICE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (OpenBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.so-reuseport-lb">
    <strong><code><a href="sockets.constants.php#constant.so-reuseport-lb">SO_REUSEPORT_LB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (FreeBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.sol-filter">
    <strong><code><a href="sockets.constants.php#constant.sol-filter">SOL_FILTER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.sol-udplite">
    <strong><code><a href="sockets.constants.php#constant.sol-udplite">SOL_UDPLITE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0
    </span>
   </dd>
  
  
   <dt id="constant.udplite-recv-cscov">
    <strong><code><a href="sockets.constants.php#constant.udplite-recv-cscov">UDPLITE_RECV_CSCOV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0
    </span>
   </dd>
  
  
   <dt id="constant.udplite-send-cscov">
    <strong><code><a href="sockets.constants.php#constant.udplite-send-cscov">UDPLITE_SEND_CSCOV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0
    </span>
   </dd>
  
  
   <dt id="constant.tcp-defer-accept">
    <strong><code><a href="sockets.constants.php#constant.tcp-defer-accept">TCP_DEFER_ACCEPT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.1.0
    </span>
   </dd>
  
  
   <dt id="constant.tcp-congestion">
    <strong><code><a href="sockets.constants.php#constant.tcp-congestion">TCP_CONGESTION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.tcp-quickack">
    <strong><code><a href="sockets.constants.php#constant.tcp-quickack">TCP_QUICKACK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.tcp-repair">
    <strong><code><a href="sockets.constants.php#constant.tcp-repair">TCP_REPAIR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.tcp-syncnt">
    <strong><code><a href="sockets.constants.php#constant.tcp-syncnt">TCP_SYNCNT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Set the number of SYN retransmits that TCP should send
     before aborting the attempt to connect.
     Available as of PHP 8.4.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.ip-dontfrag">
    <strong><code><a href="sockets.constants.php#constant.ip-dontfrag">IP_DONTFRAG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (FreeBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.ip-mtu-discover">
    <strong><code><a href="sockets.constants.php#constant.ip-mtu-discover">IP_MTU_DISCOVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.ip-pmtudisc-do">
    <strong><code><a href="sockets.constants.php#constant.ip-pmtudisc-do">IP_PMTUDISC_DO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.ip-pmtudisc-dont">
    <strong><code><a href="sockets.constants.php#constant.ip-pmtudisc-dont">IP_PMTUDISC_DONT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.ip-pmtudisc-want">
    <strong><code><a href="sockets.constants.php#constant.ip-pmtudisc-want">IP_PMTUDISC_WANT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.ip-pmtudisc-probe">
    <strong><code><a href="sockets.constants.php#constant.ip-pmtudisc-probe">IP_PMTUDISC_PROBE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.ip-pmtudisc-interface">
    <strong><code><a href="sockets.constants.php#constant.ip-pmtudisc-interface">IP_PMTUDISC_INTERFACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.ip-pmtudisc-omit">
    <strong><code><a href="sockets.constants.php#constant.ip-pmtudisc-omit">IP_PMTUDISC_OMIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.ip-bind-address-no-port">
    <strong><code><a href="sockets.constants.php#constant.ip-bind-address-no-port">IP_BIND_ADDRESS_NO_PORT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.3.0 (Linux only)
    </span>
   </dd>
  
  
   <dt id="constant.sol-socket">
    <strong><code><a href="sockets.constants.php#constant.sol-socket">SOL_SOCKET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.php-normal-read">
    <strong><code><a href="sockets.constants.php#constant.php-normal-read">PHP_NORMAL_READ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.php-binary-read">
    <strong><code><a href="sockets.constants.php#constant.php-binary-read">PHP_BINARY_READ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sol-tcp">
    <strong><code><a href="sockets.constants.php#constant.sol-tcp">SOL_TCP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sol-udp">
    <strong><code><a href="sockets.constants.php#constant.sol-udp">SOL_UDP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
 </dl>

 <p class="simpara">
  The following constants are defined under Windows and UNIX-like platforms.
  Each constant is only defined if their equal is available on the platform.
 </p>

 <dl>
  
   <dt id="constant.socket-eintr">
    <strong><code><a href="sockets.constants.php#constant.socket-eintr">SOCKET_EINTR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Interrupted system call.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ebadf">
    <strong><code><a href="sockets.constants.php#constant.socket-ebadf">SOCKET_EBADF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Bad file descriptor number.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eacces">
    <strong><code><a href="sockets.constants.php#constant.socket-eacces">SOCKET_EACCES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Permission denied.
    </span>
   </dd>
  
  
   <dt id="constant.socket-efault">
    <strong><code><a href="sockets.constants.php#constant.socket-efault">SOCKET_EFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Bad address.
    </span>
   </dd>
  
  
   <dt id="constant.socket-einval">
    <strong><code><a href="sockets.constants.php#constant.socket-einval">SOCKET_EINVAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Invalid argument.
    </span>
   </dd>
  
  
   <dt id="constant.socket-emfile">
    <strong><code><a href="sockets.constants.php#constant.socket-emfile">SOCKET_EMFILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Too many open files.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enametoolong">
    <strong><code><a href="sockets.constants.php#constant.socket-enametoolong">SOCKET_ENAMETOOLONG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     File name too long.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enotempty">
    <strong><code><a href="sockets.constants.php#constant.socket-enotempty">SOCKET_ENOTEMPTY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Directory not empty.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eloop">
    <strong><code><a href="sockets.constants.php#constant.socket-eloop">SOCKET_ELOOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Too many symbolic links encountered.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ewouldblock">
    <strong><code><a href="sockets.constants.php#constant.socket-ewouldblock">SOCKET_EWOULDBLOCK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Operation would block.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eremote">
    <strong><code><a href="sockets.constants.php#constant.socket-eremote">SOCKET_EREMOTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Object is remote.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eusers">
    <strong><code><a href="sockets.constants.php#constant.socket-eusers">SOCKET_EUSERS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Too many users.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enotsock">
    <strong><code><a href="sockets.constants.php#constant.socket-enotsock">SOCKET_ENOTSOCK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Socket operation on non-socket.
    </span>
   </dd>
  
  
   <dt id="constant.socket-edestaddrreq">
    <strong><code><a href="sockets.constants.php#constant.socket-edestaddrreq">SOCKET_EDESTADDRREQ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Destination address required.
    </span>
   </dd>
  
  
   <dt id="constant.socket-emsgsize">
    <strong><code><a href="sockets.constants.php#constant.socket-emsgsize">SOCKET_EMSGSIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Message too long.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eprototype">
    <strong><code><a href="sockets.constants.php#constant.socket-eprototype">SOCKET_EPROTOTYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Protocol wrong type for socket.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eprotonosupport">
    <strong><code><a href="sockets.constants.php#constant.socket-eprotonosupport">SOCKET_EPROTONOSUPPORT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Protocol not supported.
    </span>
   </dd>
  
  
   <dt id="constant.socket-esocktnosupport">
    <strong><code><a href="sockets.constants.php#constant.socket-esocktnosupport">SOCKET_ESOCKTNOSUPPORT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Socket type not supported.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eopnotsupp">
    <strong><code><a href="sockets.constants.php#constant.socket-eopnotsupp">SOCKET_EOPNOTSUPP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Operation not supported on transport endpoint.
    </span>
   </dd>
  
  
   <dt id="constant.socket-epfnosupport">
    <strong><code><a href="sockets.constants.php#constant.socket-epfnosupport">SOCKET_EPFNOSUPPORT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Protocol family not supported.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eafnosupport">
    <strong><code><a href="sockets.constants.php#constant.socket-eafnosupport">SOCKET_EAFNOSUPPORT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Address family not supported by protocol.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eaddrnotavail">
    <strong><code><a href="sockets.constants.php#constant.socket-eaddrnotavail">SOCKET_EADDRNOTAVAIL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Cannot assign requested address.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enetdown">
    <strong><code><a href="sockets.constants.php#constant.socket-enetdown">SOCKET_ENETDOWN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Network is down.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enetunreach">
    <strong><code><a href="sockets.constants.php#constant.socket-enetunreach">SOCKET_ENETUNREACH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Network is unreachable.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enetreset">
    <strong><code><a href="sockets.constants.php#constant.socket-enetreset">SOCKET_ENETRESET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Network dropped connection because of reset.
    </span>
   </dd>
  
  
   <dt id="constant.socket-econnaborted">
    <strong><code><a href="sockets.constants.php#constant.socket-econnaborted">SOCKET_ECONNABORTED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Software caused connection abort.
    </span>
   </dd>
  
  
   <dt id="constant.socket-econnreset">
    <strong><code><a href="sockets.constants.php#constant.socket-econnreset">SOCKET_ECONNRESET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Connection reset by peer.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enobufs">
    <strong><code><a href="sockets.constants.php#constant.socket-enobufs">SOCKET_ENOBUFS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No buffer space available.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eisconn">
    <strong><code><a href="sockets.constants.php#constant.socket-eisconn">SOCKET_EISCONN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Transport endpoint is already connected.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enotconn">
    <strong><code><a href="sockets.constants.php#constant.socket-enotconn">SOCKET_ENOTCONN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Transport endpoint is not connected.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eshutdown">
    <strong><code><a href="sockets.constants.php#constant.socket-eshutdown">SOCKET_ESHUTDOWN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Cannot send after transport endpoint shutdown.
    </span>
   </dd>
  
  
   <dt id="constant.socket-etimedout">
    <strong><code><a href="sockets.constants.php#constant.socket-etimedout">SOCKET_ETIMEDOUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Connection timed out.
    </span>
   </dd>
  
  
   <dt id="constant.socket-econnrefused">
    <strong><code><a href="sockets.constants.php#constant.socket-econnrefused">SOCKET_ECONNREFUSED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Connection refused.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ehostdown">
    <strong><code><a href="sockets.constants.php#constant.socket-ehostdown">SOCKET_EHOSTDOWN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Host is down.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ehostunreach">
    <strong><code><a href="sockets.constants.php#constant.socket-ehostunreach">SOCKET_EHOSTUNREACH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No route to host.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ealready">
    <strong><code><a href="sockets.constants.php#constant.socket-ealready">SOCKET_EALREADY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Operation already in progress.
    </span>
   </dd>
  
  
   <dt id="constant.socket-einprogress">
    <strong><code><a href="sockets.constants.php#constant.socket-einprogress">SOCKET_EINPROGRESS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Operation now in progress.
    </span>
   </dd>
  
 </dl>

 <p class="simpara">
  The following constants are only defined under Windows.
 </p>

 <dl>







  
   <dt id="constant.socket-enoprotoopt">
    <strong><code><a href="sockets.constants.php#constant.socket-enoprotoopt">SOCKET_ENOPROTOOPT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  





  
   <dt id="constant.socket-eaddrinuse">
    <strong><code><a href="sockets.constants.php#constant.socket-eaddrinuse">SOCKET_EADDRINUSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  










  
   <dt id="constant.socket-etoomyrefs">
    <strong><code><a href="sockets.constants.php#constant.socket-etoomyrefs">SOCKET_ETOOMYREFS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  







  
   <dt id="constant.socket-eproclim">
    <strong><code><a href="sockets.constants.php#constant.socket-eproclim">SOCKET_EPROCLIM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  

  
   <dt id="constant.socket-eduot">
    <strong><code><a href="sockets.constants.php#constant.socket-eduot">SOCKET_EDUOT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.socket-estale">
    <strong><code><a href="sockets.constants.php#constant.socket-estale">SOCKET_ESTALE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  

  
   <dt id="constant.socket-ediscon">
    <strong><code><a href="sockets.constants.php#constant.socket-ediscon">SOCKET_EDISCON</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.socket-sysnotready">
    <strong><code><a href="sockets.constants.php#constant.socket-sysnotready">SOCKET_SYSNOTREADY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.socket-vernotsupported">
    <strong><code><a href="sockets.constants.php#constant.socket-vernotsupported">SOCKET_VERNOTSUPPORTED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.socket-notinitialised">
    <strong><code><a href="sockets.constants.php#constant.socket-notinitialised">SOCKET_NOTINITIALISED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.socket-host-not-found">
    <strong><code><a href="sockets.constants.php#constant.socket-host-not-found">SOCKET_HOST_NOT_FOUND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.socket-try-again">
    <strong><code><a href="sockets.constants.php#constant.socket-try-again">SOCKET_TRY_AGAIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.socket-no-recovery">
    <strong><code><a href="sockets.constants.php#constant.socket-no-recovery">SOCKET_NO_RECOVERY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.socket-no-data">
    <strong><code><a href="sockets.constants.php#constant.socket-no-data">SOCKET_NO_DATA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.socket-no-address">
    <strong><code><a href="sockets.constants.php#constant.socket-no-address">SOCKET_NO_ADDRESS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
 </dl>

 <p class="simpara">
  The following constants are only available on UNIX-like
  platforms. Each constant is only defined if their equal is
  available on the platform.
 </p>

 <dl>
  
   <dt id="constant.socket-eperm">
    <strong><code><a href="sockets.constants.php#constant.socket-eperm">SOCKET_EPERM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Operation not permitted.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enoent">
    <strong><code><a href="sockets.constants.php#constant.socket-enoent">SOCKET_ENOENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No such file or directory.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eio">
    <strong><code><a href="sockets.constants.php#constant.socket-eio">SOCKET_EIO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     I/O error.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enxio">
    <strong><code><a href="sockets.constants.php#constant.socket-enxio">SOCKET_ENXIO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No such device or address.
    </span>
   </dd>
  
  
   <dt id="constant.socket-e2big">
    <strong><code><a href="sockets.constants.php#constant.socket-e2big">SOCKET_E2BIG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Arg list too long.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eagain">
    <strong><code><a href="sockets.constants.php#constant.socket-eagain">SOCKET_EAGAIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Try again.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enomem">
    <strong><code><a href="sockets.constants.php#constant.socket-enomem">SOCKET_ENOMEM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Out of memory.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enotblk">
    <strong><code><a href="sockets.constants.php#constant.socket-enotblk">SOCKET_ENOTBLK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Block device required.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ebusy">
    <strong><code><a href="sockets.constants.php#constant.socket-ebusy">SOCKET_EBUSY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Device or resource busy.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eexist">
    <strong><code><a href="sockets.constants.php#constant.socket-eexist">SOCKET_EEXIST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     File exists.
    </span>
   </dd>
  
  
   <dt id="constant.socket-exdev">
    <strong><code><a href="sockets.constants.php#constant.socket-exdev">SOCKET_EXDEV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Cross-device link.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enodev">
    <strong><code><a href="sockets.constants.php#constant.socket-enodev">SOCKET_ENODEV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No such device.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enotdir">
    <strong><code><a href="sockets.constants.php#constant.socket-enotdir">SOCKET_ENOTDIR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Not a directory.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eisdir">
    <strong><code><a href="sockets.constants.php#constant.socket-eisdir">SOCKET_EISDIR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Is a directory.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enfile">
    <strong><code><a href="sockets.constants.php#constant.socket-enfile">SOCKET_ENFILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     File table overflow.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enotty">
    <strong><code><a href="sockets.constants.php#constant.socket-enotty">SOCKET_ENOTTY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Not a typewriter.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enospc">
    <strong><code><a href="sockets.constants.php#constant.socket-enospc">SOCKET_ENOSPC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No space left on device.
    </span>
   </dd>
  
  
   <dt id="constant.socket-espipe">
    <strong><code><a href="sockets.constants.php#constant.socket-espipe">SOCKET_ESPIPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Illegal seek.
    </span>
   </dd>
  
  
   <dt id="constant.socket-erofs">
    <strong><code><a href="sockets.constants.php#constant.socket-erofs">SOCKET_EROFS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Read-only file system.
    </span>
   </dd>
  
  
   <dt id="constant.socket-emlink">
    <strong><code><a href="sockets.constants.php#constant.socket-emlink">SOCKET_EMLINK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Too many links.
    </span>
   </dd>
  
  
   <dt id="constant.socket-epipe">
    <strong><code><a href="sockets.constants.php#constant.socket-epipe">SOCKET_EPIPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Broken pipe.
    </span>
   </dd>
  

  
   <dt id="constant.socket-enolck">
    <strong><code><a href="sockets.constants.php#constant.socket-enolck">SOCKET_ENOLCK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No record locks available.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enosys">
    <strong><code><a href="sockets.constants.php#constant.socket-enosys">SOCKET_ENOSYS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Function not implemented.
    </span>
   </dd>
  



  
   <dt id="constant.socket-enomsg">
    <strong><code><a href="sockets.constants.php#constant.socket-enomsg">SOCKET_ENOMSG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No message of desired type.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eidrm">
    <strong><code><a href="sockets.constants.php#constant.socket-eidrm">SOCKET_EIDRM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Identifier removed.
    </span>
   </dd>
  
  
   <dt id="constant.socket-echrng">
    <strong><code><a href="sockets.constants.php#constant.socket-echrng">SOCKET_ECHRNG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Channel number out of range.
    </span>
   </dd>
  
  
   <dt id="constant.socket-el2nsync">
    <strong><code><a href="sockets.constants.php#constant.socket-el2nsync">SOCKET_EL2NSYNC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Level 2 not synchronized.
    </span>
   </dd>
  
  
   <dt id="constant.socket-el3hlt">
    <strong><code><a href="sockets.constants.php#constant.socket-el3hlt">SOCKET_EL3HLT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Level 3 halted.
    </span>
   </dd>
  
  
   <dt id="constant.socket-el3rst">
    <strong><code><a href="sockets.constants.php#constant.socket-el3rst">SOCKET_EL3RST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Level 3 reset.
    </span>
   </dd>
  
  
   <dt id="constant.socket-elnrng">
    <strong><code><a href="sockets.constants.php#constant.socket-elnrng">SOCKET_ELNRNG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Link number out of range.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eunatch">
    <strong><code><a href="sockets.constants.php#constant.socket-eunatch">SOCKET_EUNATCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Protocol driver not attached.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enocsi">
    <strong><code><a href="sockets.constants.php#constant.socket-enocsi">SOCKET_ENOCSI</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No CSI structure available.
    </span>
   </dd>
  
  
   <dt id="constant.socket-el2hlt">
    <strong><code><a href="sockets.constants.php#constant.socket-el2hlt">SOCKET_EL2HLT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Level 2 halted.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ebade">
    <strong><code><a href="sockets.constants.php#constant.socket-ebade">SOCKET_EBADE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Invalid exchange.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ebadr">
    <strong><code><a href="sockets.constants.php#constant.socket-ebadr">SOCKET_EBADR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Invalid request descriptor.
    </span>
   </dd>
  
  
   <dt id="constant.socket-exfull">
    <strong><code><a href="sockets.constants.php#constant.socket-exfull">SOCKET_EXFULL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Exchange full.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enoano">
    <strong><code><a href="sockets.constants.php#constant.socket-enoano">SOCKET_ENOANO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No anode.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ebadrqc">
    <strong><code><a href="sockets.constants.php#constant.socket-ebadrqc">SOCKET_EBADRQC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Invalid request code.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ebadslt">
    <strong><code><a href="sockets.constants.php#constant.socket-ebadslt">SOCKET_EBADSLT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Invalid slot.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enostr">
    <strong><code><a href="sockets.constants.php#constant.socket-enostr">SOCKET_ENOSTR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Device not a stream.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enodata">
    <strong><code><a href="sockets.constants.php#constant.socket-enodata">SOCKET_ENODATA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No data available.
    </span>
   </dd>
  
  
   <dt id="constant.socket-etime">
    <strong><code><a href="sockets.constants.php#constant.socket-etime">SOCKET_ETIME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Timer expired.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enosr">
    <strong><code><a href="sockets.constants.php#constant.socket-enosr">SOCKET_ENOSR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Out of streams resources.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enonet">
    <strong><code><a href="sockets.constants.php#constant.socket-enonet">SOCKET_ENONET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Machine is not on the network.
    </span>
   </dd>
  

  
   <dt id="constant.socket-enolink">
    <strong><code><a href="sockets.constants.php#constant.socket-enolink">SOCKET_ENOLINK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Link has been severed.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eadv">
    <strong><code><a href="sockets.constants.php#constant.socket-eadv">SOCKET_EADV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Advertise error.
    </span>
   </dd>
  
  
   <dt id="constant.socket-esrmnt">
    <strong><code><a href="sockets.constants.php#constant.socket-esrmnt">SOCKET_ESRMNT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Srmount error.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ecomm">
    <strong><code><a href="sockets.constants.php#constant.socket-ecomm">SOCKET_ECOMM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Communication error on send.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eproto">
    <strong><code><a href="sockets.constants.php#constant.socket-eproto">SOCKET_EPROTO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Protocol error.
    </span>
   </dd>
  
  
   <dt id="constant.socket-emultihop">
    <strong><code><a href="sockets.constants.php#constant.socket-emultihop">SOCKET_EMULTIHOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Multihop attempted.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ebadmsg">
    <strong><code><a href="sockets.constants.php#constant.socket-ebadmsg">SOCKET_EBADMSG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Not a data message.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enotuniq">
    <strong><code><a href="sockets.constants.php#constant.socket-enotuniq">SOCKET_ENOTUNIQ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Name not unique on network.
    </span>
   </dd>
  
  
   <dt id="constant.socket-ebadfd">
    <strong><code><a href="sockets.constants.php#constant.socket-ebadfd">SOCKET_EBADFD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     File descriptor in bad state.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eremchg">
    <strong><code><a href="sockets.constants.php#constant.socket-eremchg">SOCKET_EREMCHG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Remote address changed.
    </span>
   </dd>
  
  
   <dt id="constant.socket-erestart">
    <strong><code><a href="sockets.constants.php#constant.socket-erestart">SOCKET_ERESTART</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Interrupted system call should be restarted.
    </span>
   </dd>
  
  
   <dt id="constant.socket-estrpipe">
    <strong><code><a href="sockets.constants.php#constant.socket-estrpipe">SOCKET_ESTRPIPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Streams pipe error.
    </span>
   </dd>
  





  
   <dt id="constant.socket-eprotoopt">
    <strong><code><a href="sockets.constants.php#constant.socket-eprotoopt">SOCKET_EPROTOOPT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Protocol not available.
    </span>
   </dd>
  





  
   <dt id="constant.socket-addrinuse">
    <strong><code><a href="sockets.constants.php#constant.socket-addrinuse">SOCKET_ADDRINUSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Address already in use.
    </span>
   </dd>
  










  
   <dt id="constant.socket-etoomanyrefs">
    <strong><code><a href="sockets.constants.php#constant.socket-etoomanyrefs">SOCKET_ETOOMANYREFS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Too many references: cannot splice.
    </span>
   </dd>
  






  
   <dt id="constant.socket-eisnam">
    <strong><code><a href="sockets.constants.php#constant.socket-eisnam">SOCKET_EISNAM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Is a named type file.
    </span>
   </dd>
  
  
   <dt id="constant.socket-eremoteio">
    <strong><code><a href="sockets.constants.php#constant.socket-eremoteio">SOCKET_EREMOTEIO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Remote I/O error.
    </span>
   </dd>
  
  
   <dt id="constant.socket-edquot">
    <strong><code><a href="sockets.constants.php#constant.socket-edquot">SOCKET_EDQUOT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Quota exceeded.
    </span>
   </dd>
  
  
   <dt id="constant.socket-enomedium">
    <strong><code><a href="sockets.constants.php#constant.socket-enomedium">SOCKET_ENOMEDIUM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No medium found.
    </span>
   </dd>
  
  
   <dt id="constant.socket-emediumtype">
    <strong><code><a href="sockets.constants.php#constant.socket-emediumtype">SOCKET_EMEDIUMTYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Wrong medium type.
    </span>
   </dd>
  
  
   <dt id="constant.scm-rights">
    <strong><code><a href="sockets.constants.php#constant.scm-rights">SCM_RIGHTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Send or receive a set of  open  file  descriptors  from  another process.
    </span>
   </dd>
  
  
   <dt id="constant.scm-credentials">
    <strong><code><a href="sockets.constants.php#constant.scm-credentials">SCM_CREDENTIALS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.scm-creds">
    <strong><code><a href="sockets.constants.php#constant.scm-creds">SCM_CREDS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.scm-creds2">
    <strong><code><a href="sockets.constants.php#constant.scm-creds2">SCM_CREDS2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.local-creds">
    <strong><code><a href="sockets.constants.php#constant.local-creds">LOCAL_CREDS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.local-creds-persistent">
    <strong><code><a href="sockets.constants.php#constant.local-creds-persistent">LOCAL_CREDS_PERSISTENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-off">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-off">SKF_AD_OFF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-protocol">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-protocol">SKF_AD_PROTOCOL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-pkttype">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-pkttype">SKF_AD_PKTTYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-ifindex">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-ifindex">SKF_AD_IFINDEX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-nlattr">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-nlattr">SKF_AD_NLATTR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-nlattr-nest">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-nlattr-nest">SKF_AD_NLATTR_NEST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-mark">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-mark">SKF_AD_MARK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-queue">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-queue">SKF_AD_QUEUE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-hatype">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-hatype">SKF_AD_HATYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-rxhash">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-rxhash">SKF_AD_RXHASH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-cpu">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-cpu">SKF_AD_CPU</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-alu-xor-x">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-alu-xor-x">SKF_AD_ALU_XOR_X</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-vlan-tag">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-vlan-tag">SKF_AD_VLAN_TAG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-vlan-tag-present">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-vlan-tag-present">SKF_AD_VLAN_TAG_PRESENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-pay-offset">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-pay-offset">SKF_AD_PAY_OFFSET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-random">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-random">SKF_AD_RANDOM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-vlan-tpid">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-vlan-tpid">SKF_AD_VLAN_TPID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.skf-ad-max">
    <strong><code><a href="sockets.constants.php#constant.skf-ad-max">SKF_AD_MAX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.2.0
    </span>
   </dd>
  
  
   <dt id="constant.ai-addrconfig">
    <strong><code><a href="sockets.constants.php#constant.ai-addrconfig">AI_ADDRCONFIG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ai-all">
    <strong><code><a href="sockets.constants.php#constant.ai-all">AI_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ai-canonidn">
    <strong><code><a href="sockets.constants.php#constant.ai-canonidn">AI_CANONIDN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ai-canonname">
    <strong><code><a href="sockets.constants.php#constant.ai-canonname">AI_CANONNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ai-idn">
    <strong><code><a href="sockets.constants.php#constant.ai-idn">AI_IDN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ai-numerichost">
    <strong><code><a href="sockets.constants.php#constant.ai-numerichost">AI_NUMERICHOST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ai-numericserv">
    <strong><code><a href="sockets.constants.php#constant.ai-numericserv">AI_NUMERICSERV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ai-passive">
    <strong><code><a href="sockets.constants.php#constant.ai-passive">AI_PASSIVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ai-v4mapped">
    <strong><code><a href="sockets.constants.php#constant.ai-v4mapped">AI_V4MAPPED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.fil-attach">
    <strong><code><a href="sockets.constants.php#constant.fil-attach">FIL_ATTACH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.fil-detach">
    <strong><code><a href="sockets.constants.php#constant.fil-detach">FIL_DETACH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipproto-ip">
    <strong><code><a href="sockets.constants.php#constant.ipproto-ip">IPPROTO_IP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipproto-ipv6">
    <strong><code><a href="sockets.constants.php#constant.ipproto-ipv6">IPPROTO_IPV6</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipv6-hoplimit">
    <strong><code><a href="sockets.constants.php#constant.ipv6-hoplimit">IPV6_HOPLIMIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipv6-multicast-hops">
    <strong><code><a href="sockets.constants.php#constant.ipv6-multicast-hops">IPV6_MULTICAST_HOPS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipv6-multicast-if">
    <strong><code><a href="sockets.constants.php#constant.ipv6-multicast-if">IPV6_MULTICAST_IF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipv6-multicast-loop">
    <strong><code><a href="sockets.constants.php#constant.ipv6-multicast-loop">IPV6_MULTICAST_LOOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipv6-pktinfo">
    <strong><code><a href="sockets.constants.php#constant.ipv6-pktinfo">IPV6_PKTINFO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipv6-recvhoplimit">
    <strong><code><a href="sockets.constants.php#constant.ipv6-recvhoplimit">IPV6_RECVHOPLIMIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipv6-recvpktinfo">
    <strong><code><a href="sockets.constants.php#constant.ipv6-recvpktinfo">IPV6_RECVPKTINFO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipv6-recvtclass">
    <strong><code><a href="sockets.constants.php#constant.ipv6-recvtclass">IPV6_RECVTCLASS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipv6-tclass">
    <strong><code><a href="sockets.constants.php#constant.ipv6-tclass">IPV6_TCLASS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipv6-unicast-hops">
    <strong><code><a href="sockets.constants.php#constant.ipv6-unicast-hops">IPV6_UNICAST_HOPS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ipv6-v6only">
    <strong><code><a href="sockets.constants.php#constant.ipv6-v6only">IPV6_V6ONLY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ip-multicast-if">
    <strong><code><a href="sockets.constants.php#constant.ip-multicast-if">IP_MULTICAST_IF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ip-multicast-loop">
    <strong><code><a href="sockets.constants.php#constant.ip-multicast-loop">IP_MULTICAST_LOOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ip-multicast-ttl">
    <strong><code><a href="sockets.constants.php#constant.ip-multicast-ttl">IP_MULTICAST_TTL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.ip-portrange">
    <strong><code><a href="sockets.constants.php#constant.ip-portrange">IP_PORTRANGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Set the port range used for selecting a local port	number.
     Available as of PHP 8.4.0. (FreeBSD/NetBSD/OpenBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.ip-portrange-default">
    <strong><code><a href="sockets.constants.php#constant.ip-portrange-default">IP_PORTRANGE_DEFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Use the default range of port values.
     Available as of PHP 8.4.0. (FreeBSD/NetBSD/OpenBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.ip-portrange-high">
    <strong><code><a href="sockets.constants.php#constant.ip-portrange-high">IP_PORTRANGE_HIGH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Use a high	range of port values.
     Available as of PHP 8.4.0. (FreeBSD/NetBSD/OpenBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.ip-portrange-low">
    <strong><code><a href="sockets.constants.php#constant.ip-portrange-low">IP_PORTRANGE_LOW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Use a low range of port values.
     Available as of PHP 8.4.0. (FreeBSD/NetBSD/OpenBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.mcast-block-source">
    <strong><code><a href="sockets.constants.php#constant.mcast-block-source">MCAST_BLOCK_SOURCE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.mcast-join-group">
    <strong><code><a href="sockets.constants.php#constant.mcast-join-group">MCAST_JOIN_GROUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.mcast-join-source-group">
    <strong><code><a href="sockets.constants.php#constant.mcast-join-source-group">MCAST_JOIN_SOURCE_GROUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.mcast-leave-group">
    <strong><code><a href="sockets.constants.php#constant.mcast-leave-group">MCAST_LEAVE_GROUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.mcast-leave-source-group">
    <strong><code><a href="sockets.constants.php#constant.mcast-leave-source-group">MCAST_LEAVE_SOURCE_GROUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.mcast-unblock-source">
    <strong><code><a href="sockets.constants.php#constant.mcast-unblock-source">MCAST_UNBLOCK_SOURCE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.msg-cmsg-cloexec">
    <strong><code><a href="sockets.constants.php#constant.msg-cmsg-cloexec">MSG_CMSG_CLOEXEC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.msg-confirm">
    <strong><code><a href="sockets.constants.php#constant.msg-confirm">MSG_CONFIRM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.msg-ctrunc">
    <strong><code><a href="sockets.constants.php#constant.msg-ctrunc">MSG_CTRUNC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.msg-dontwait">
    <strong><code><a href="sockets.constants.php#constant.msg-dontwait">MSG_DONTWAIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.msg-errqueue">
    <strong><code><a href="sockets.constants.php#constant.msg-errqueue">MSG_ERRQUEUE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.msg-more">
    <strong><code><a href="sockets.constants.php#constant.msg-more">MSG_MORE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.msg-nosignal">
    <strong><code><a href="sockets.constants.php#constant.msg-nosignal">MSG_NOSIGNAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.msg-trunc">
    <strong><code><a href="sockets.constants.php#constant.msg-trunc">MSG_TRUNC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.msg-waitforone">
    <strong><code><a href="sockets.constants.php#constant.msg-waitforone">MSG_WAITFORONE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.sol-local">
    <strong><code><a href="sockets.constants.php#constant.sol-local">SOL_LOCAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.somaxconn">
    <strong><code><a href="sockets.constants.php#constant.somaxconn">SOMAXCONN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.so-bindtodevice">
    <strong><code><a href="sockets.constants.php#constant.so-bindtodevice">SO_BINDTODEVICE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.so-family">
    <strong><code><a href="sockets.constants.php#constant.so-family">SO_FAMILY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.so-label">
    <strong><code><a href="sockets.constants.php#constant.so-label">SO_LABEL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.so-listenqlen">
    <strong><code><a href="sockets.constants.php#constant.so-listenqlen">SO_LISTENQLEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.so-listenqlimit">
    <strong><code><a href="sockets.constants.php#constant.so-listenqlimit">SO_LISTENQLIMIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.so-passcred">
    <strong><code><a href="sockets.constants.php#constant.so-passcred">SO_PASSCRED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.so-peerlabel">
    <strong><code><a href="sockets.constants.php#constant.so-peerlabel">SO_PEERLABEL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.so-exclusiveaddruse">
    <strong><code><a href="sockets.constants.php#constant.so-exclusiveaddruse">SO_EXCLUSIVEADDRUSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Prevents other sockets from being forcibly bound to the same address and port.
     Available as of PHP 8.4.0. (Windows only)
    </span>
   </dd>
  
  
   <dt id="constant.so-exclbind">
    <strong><code><a href="sockets.constants.php#constant.so-exclbind">SO_EXCLBIND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Enable/disable exclusive binding of the socket.
     Available as of PHP 8.4.0. (Solaris only)
    </span>
   </dd>
  
  
   <dt id="constant.so-nosigpipe">
    <strong><code><a href="sockets.constants.php#constant.so-nosigpipe">SO_NOSIGPIPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Controls generation of SIGPIPE for the socket.
     Available as of PHP 8.4.0. (macOs and FreeBSD only)
    </span>
   </dd>
  
  
   <dt id="constant.so-linger-sec">
    <strong><code><a href="sockets.constants.php#constant.so-linger-sec">SO_LINGER_SEC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Similar to <strong><code><a href="sockets.constants.php#constant.so-linger">SO_LINGER</a></code></strong> but lingering is in seconds
     as opposed to time clicks on macOs.
     Available as of PHP 8.4.0. (macOs only)
    </span>
   </dd>
  
  
   <dt id="constant.so-bindtoifindex">
    <strong><code><a href="sockets.constants.php#constant.so-bindtoifindex">SO_BINDTOIFINDEX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Bind a socket to a specific network interface by its index.
     Available as of PHP 8.4.0.
    </span>
   </dd>
  
 </dl>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sockets/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsockets.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=sockets.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sockets.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112369">  <div class="votes">
    <div id="Vu112369">
    <a href="/manual/vote-note.php?id=112369&amp;page=sockets.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112369">
    <a href="/manual/vote-note.php?id=112369&amp;page=sockets.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112369" title="70% like this...">
    4
    </div>
  </div>
  <a href="#112369" class="name">
  <strong class="user"><em>gvgvgvijayan at gmail dot com</em></strong></a><a class="genanchor" href="#112369"> &para;</a><div class="date" title="2013-06-07 02:15"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112369">
<div class="phpcode"><code><span class="html">$a = get_defined_constants(TRUE);<br />foreach ($a as $k =&gt; $v) {<br />    printf('%-25s &lt;br/&gt;', $k);<br />    foreach ($v as $k =&gt; $v) {<br />        printf('&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp---&gt;%-25s %d&lt;br/&gt;', $k, $v);<br />    }<br />}<br /><br />this may look duplicate for previous anonymous post but that code snippet only return 1 for constants value<br />1--&gt;first called the get_defined_constants by passing argument true to categorize the data<br />2--&gt;then using foreach iterate over index of the array<br />3--&gt;here printf is used to print title of the category<br />4--&gt;then it move on to interrior array and display the list of contants available in each category along with its value</span></code></div>
  </div>
 </div>
  <div class="note" id="124915">  <div class="votes">
    <div id="Vu124915">
    <a href="/manual/vote-note.php?id=124915&amp;page=sockets.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124915">
    <a href="/manual/vote-note.php?id=124915&amp;page=sockets.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124915" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124915" class="name">
  <strong class="user"><em>kenverhaegen at gmail dot com</em></strong></a><a class="genanchor" href="#124915"> &para;</a><div class="date" title="2020-04-15 10:14"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124915">
<div class="phpcode"><code><span class="html">Seems like SOCKET_EAGAIN is an alias of SOCKET_EWOULDBLOCK (int 11)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=sockets.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sockets.constants.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="sockets.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
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
