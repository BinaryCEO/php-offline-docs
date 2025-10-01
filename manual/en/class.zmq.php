<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ZMQ - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.zmq.php">
 <link rel="shorturl" href="https://www.php.net/zmq">
 <link rel="alternate" href="https://www.php.net/zmq" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.zmq.php">
 <link rel="prev" href="https://www.php.net/manual/en/zmq.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/zmq.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.zmq.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.zmq.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.zmq.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.zmq.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.zmq.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.zmq.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.zmq.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.zmq.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.zmq.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.zmq.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.zmq.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The ZMQ class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ZMQ - Manual" />
<meta name="twitter:description" content="The ZMQ class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ZMQ - Manual" />
<meta itemprop="description" content="The ZMQ class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The ZMQ class" />

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
        <a href="zmq.construct.php">
          ZMQ::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="zmq.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.zmq.php'>0MQ messaging</a></li>      </ul>
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
            <option value='en/class.zmq.php' selected="selected">English</option>
            <option value='de/class.zmq.php'>German</option>
            <option value='es/class.zmq.php'>Spanish</option>
            <option value='fr/class.zmq.php'>French</option>
            <option value='it/class.zmq.php'>Italian</option>
            <option value='ja/class.zmq.php'>Japanese</option>
            <option value='pt_BR/class.zmq.php'>Brazilian Portuguese</option>
            <option value='ru/class.zmq.php'>Russian</option>
            <option value='tr/class.zmq.php'>Turkish</option>
            <option value='uk/class.zmq.php'>Ukrainian</option>
            <option value='zh/class.zmq.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.zmq" class="reference">

 <h1 class="title">The ZMQ class</h1>
 

 <div class="partintro"><p class="verinfo">(PECL zmq &gt;= 0.5.0)</p>


  <div class="section" id="zmq.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="zmq.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">ZMQ</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-pair"><var class="varname">SOCKET_PAIR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-pub"><var class="varname">SOCKET_PUB</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-sub"><var class="varname">SOCKET_SUB</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-req"><var class="varname">SOCKET_REQ</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-rep"><var class="varname">SOCKET_REP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-xreq"><var class="varname">SOCKET_XREQ</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-xrep"><var class="varname">SOCKET_XREP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-push"><var class="varname">SOCKET_PUSH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-pull"><var class="varname">SOCKET_PULL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-router"><var class="varname">SOCKET_ROUTER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-dealer"><var class="varname">SOCKET_DEALER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-xpub"><var class="varname">SOCKET_XPUB</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-xsub"><var class="varname">SOCKET_XSUB</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.socket-stream"><var class="varname">SOCKET_STREAM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-hwm"><var class="varname">SOCKOPT_HWM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-sndhwm"><var class="varname">SOCKOPT_SNDHWM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-rcvhwm"><var class="varname">SOCKOPT_RCVHWM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-affinity"><var class="varname">SOCKOPT_AFFINITY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-identity"><var class="varname">SOCKOPT_IDENTITY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-subscribe"><var class="varname">SOCKOPT_SUBSCRIBE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-unsubscribe"><var class="varname">SOCKOPT_UNSUBSCRIBE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-rate"><var class="varname">SOCKOPT_RATE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-recovery-ivl"><var class="varname">SOCKOPT_RECOVERY_IVL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-reconnect-ivl"><var class="varname">SOCKOPT_RECONNECT_IVL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-reconnect-ivl-max"><var class="varname">SOCKOPT_RECONNECT_IVL_MAX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-mcast-loop"><var class="varname">SOCKOPT_MCAST_LOOP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-sndbuf"><var class="varname">SOCKOPT_SNDBUF</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-rcvbuf"><var class="varname">SOCKOPT_RCVBUF</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-rcvmore"><var class="varname">SOCKOPT_RCVMORE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-type"><var class="varname">SOCKOPT_TYPE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-linger"><var class="varname">SOCKOPT_LINGER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-backlog"><var class="varname">SOCKOPT_BACKLOG</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-maxmsgsize"><var class="varname">SOCKOPT_MAXMSGSIZE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-sndtimeo"><var class="varname">SOCKOPT_SNDTIMEO</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-rcvtimeo"><var class="varname">SOCKOPT_RCVTIMEO</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-ipv4only"><var class="varname">SOCKOPT_IPV4ONLY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-last-endpoint"><var class="varname">SOCKOPT_LAST_ENDPOINT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-tcp-keepalive-idle"><var class="varname">SOCKOPT_TCP_KEEPALIVE_IDLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-tcp-keepalive-cnt"><var class="varname">SOCKOPT_TCP_KEEPALIVE_CNT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-tcp-keepalive-intvl"><var class="varname">SOCKOPT_TCP_KEEPALIVE_INTVL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-tcp-accept-filter"><var class="varname">SOCKOPT_TCP_ACCEPT_FILTER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-tcp-accept-filter"><var class="varname">SOCKOPT_TCP_ACCEPT_FILTER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-delay-attach-on-connect"><var class="varname">SOCKOPT_DELAY_ATTACH_ON_CONNECT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-xpub-verbose"><var class="varname">SOCKOPT_XPUB_VERBOSE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-router-raw"><var class="varname">SOCKOPT_ROUTER_RAW</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.sockopt-ipv6"><var class="varname">SOCKOPT_IPV6</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.ctxopt-max-sockets"><var class="varname">CTXOPT_MAX_SOCKETS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.poll-in"><var class="varname">POLL_IN</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.poll-out"><var class="varname">POLL_OUT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.mode-noblock"><var class="varname">MODE_NOBLOCK</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.mode-dontwait"><var class="varname">MODE_DONTWAIT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.mode-sndmore"><var class="varname">MODE_SNDMORE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.err-internal"><var class="varname">ERR_INTERNAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.err-eagain"><var class="varname">ERR_EAGAIN</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.err-enotsup"><var class="varname">ERR_ENOTSUP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.err-efsm"><var class="varname">ERR_EFSM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zmq.php#zmq.constants.err-eterm"><var class="varname">ERR_ETERM</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="methodname"><a href="zmq.construct.php" class="methodname">__construct</a></span>()</div>

   }</div>


  </div>


  <div class="section" id="zmq.constants">
   <h2 class="title">Predefined Constants</h2>
   <div class="section" id="zmq.constants.types">
    <h2 class="title">ZMQ Constant Types</h2>
    <dl>

     
      <dt id="zmq.constants.socket-pair"><strong><code><a href="class.zmq.php#zmq.constants.socket-pair">ZMQ::SOCKET_PAIR</a></code></strong></dt>
      <dd>
       <p class="para">Exclusive pair pattern</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-pub"><strong><code><a href="class.zmq.php#zmq.constants.socket-pub">ZMQ::SOCKET_PUB</a></code></strong></dt>
      <dd>
       <p class="para">Publisher socket</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-sub"><strong><code><a href="class.zmq.php#zmq.constants.socket-sub">ZMQ::SOCKET_SUB</a></code></strong></dt>
      <dd>
       <p class="para">Subscriber socket</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-req"><strong><code><a href="class.zmq.php#zmq.constants.socket-req">ZMQ::SOCKET_REQ</a></code></strong></dt>
      <dd>
       <p class="para">Request socket</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-rep"><strong><code><a href="class.zmq.php#zmq.constants.socket-rep">ZMQ::SOCKET_REP</a></code></strong></dt>
      <dd>
       <p class="para">Reply socket</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-xreq"><strong><code><a href="class.zmq.php#zmq.constants.socket-xreq">ZMQ::SOCKET_XREQ</a></code></strong></dt>
      <dd>
       <p class="para">Alias for SOCKET_DEALER</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-xrep"><strong><code><a href="class.zmq.php#zmq.constants.socket-xrep">ZMQ::SOCKET_XREP</a></code></strong></dt>
      <dd>
       <p class="para">Alias for SOCKET_ROUTER</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-push"><strong><code><a href="class.zmq.php#zmq.constants.socket-push">ZMQ::SOCKET_PUSH</a></code></strong></dt>
      <dd>
       <p class="para">Pipeline upstream push socket</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-pull"><strong><code><a href="class.zmq.php#zmq.constants.socket-pull">ZMQ::SOCKET_PULL</a></code></strong></dt>
      <dd>
       <p class="para">Pipeline downstream pull socket</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-router"><strong><code><a href="class.zmq.php#zmq.constants.socket-router">ZMQ::SOCKET_ROUTER</a></code></strong></dt>
      <dd>
       <p class="para">Extended REP socket that can route replies to requesters</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-dealer"><strong><code><a href="class.zmq.php#zmq.constants.socket-dealer">ZMQ::SOCKET_DEALER</a></code></strong></dt>
      <dd>
       <p class="para">Extended REQ socket that load balances to all connected peers</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-xpub"><strong><code><a href="class.zmq.php#zmq.constants.socket-xpub">ZMQ::SOCKET_XPUB</a></code></strong></dt>
      <dd>
       <p class="para">Similar to SOCKET_PUB, except you can receive subscriptions as messages.
             The subscription message is 0 (unsubscribe) or 1 (subscribe) followed by the topic.</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-xsub"><strong><code><a href="class.zmq.php#zmq.constants.socket-xsub">ZMQ::SOCKET_XSUB</a></code></strong></dt>
      <dd>
       <p class="para">Similar to SOCKET_SUB, except you can send subscriptions as messages. See SOCKET_XPUB for format.</p>
      </dd>
     

     
      <dt id="zmq.constants.socket-stream"><strong><code><a href="class.zmq.php#zmq.constants.socket-stream">ZMQ::SOCKET_STREAM</a></code></strong></dt>
      <dd>
       <p class="para">Used to send and receive TCP data from a non-ØMQ peer. Available if compiled against ZeroMQ 4.x or higher (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>).</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-hwm"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-hwm">ZMQ::SOCKOPT_HWM</a></code></strong></dt>
      <dd>
       <p class="para">The high water mark for inbound and outbound messages is a hard limit on the maximum number of outstanding messages ØMQ shall queue in memory for any single peer that the specified socket is communicating with. Setting this option on a socket will only affect connections made after the option has been set. On ZeroMQ 3.x this is a wrapper for setting both SNDHWM and RCVHWM. (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>).</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-sndhwm"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-sndhwm">ZMQ::SOCKOPT_SNDHWM</a></code></strong></dt>
      <dd>
       <p class="para">The ZMQ_SNDHWM option shall set the high water mark for outbound messages on the specified socket. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>).</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-rcvhwm"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-rcvhwm">ZMQ::SOCKOPT_RCVHWM</a></code></strong></dt>
      <dd>
       <p class="para">The SOCKOPT_RCVHWM option shall set the high water mark for inbound messages on the specified socket. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>).</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-affinity"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-affinity">ZMQ::SOCKOPT_AFFINITY</a></code></strong></dt>
      <dd>
       <p class="para">Set I/O thread affinity (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-identity"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-identity">ZMQ::SOCKOPT_IDENTITY</a></code></strong></dt>
      <dd>
       <p class="para">Set socket identity (Value: <span class="type"><a href="language.types.string.php" class="type string">string</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-subscribe"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-subscribe">ZMQ::SOCKOPT_SUBSCRIBE</a></code></strong></dt>
      <dd>
       <p class="para">Establish message filter. Valid for subscriber socket (Value: <span class="type"><a href="language.types.string.php" class="type string">string</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-unsubscribe"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-unsubscribe">ZMQ::SOCKOPT_UNSUBSCRIBE</a></code></strong></dt>
      <dd>
       <p class="para">Remove message filter. Valid for subscriber socket (Value: <span class="type"><a href="language.types.string.php" class="type string">string</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-rate"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-rate">ZMQ::SOCKOPT_RATE</a></code></strong></dt>
      <dd>
       <p class="para">Set rate for multicast sockets (pgm) (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> &gt;= 0)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-recovery-ivl"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-recovery-ivl">ZMQ::SOCKOPT_RECOVERY_IVL</a></code></strong></dt>
      <dd>
       <p class="para">Set multicast recovery interval (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> &gt;= 0)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-reconnect-ivl"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-reconnect-ivl">ZMQ::SOCKOPT_RECONNECT_IVL</a></code></strong></dt>
      <dd>
       <p class="para"> Set the initial reconnection interval (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> &gt;= 0)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-reconnect-ivl-max"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-reconnect-ivl-max">ZMQ::SOCKOPT_RECONNECT_IVL_MAX</a></code></strong></dt>
      <dd>
       <p class="para"> Set the max reconnection interval (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> &gt;= 0)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-mcast-loop"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-mcast-loop">ZMQ::SOCKOPT_MCAST_LOOP</a></code></strong></dt>
      <dd>
       <p class="para"> Control multicast loopback (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> &gt;= 0)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-sndbuf"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-sndbuf">ZMQ::SOCKOPT_SNDBUF</a></code></strong></dt>
      <dd>
       <p class="para">Set kernel transmit buffer size (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> &gt;= 0)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-rcvbuf"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-rcvbuf">ZMQ::SOCKOPT_RCVBUF</a></code></strong></dt>
      <dd>
       <p class="para"> Set kernel receive buffer size (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> &gt;= 0)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-rcvmore"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-rcvmore">ZMQ::SOCKOPT_RCVMORE</a></code></strong></dt>
      <dd>
       <p class="para">Receive multi-part messages (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-type"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-type">ZMQ::SOCKOPT_TYPE</a></code></strong></dt>
      <dd>
       <p class="para">Get the socket type. Valid for getSockOpt (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-linger"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-linger">ZMQ::SOCKOPT_LINGER</a></code></strong></dt>
      <dd>
       <p class="para">The linger value of the socket. Specifies how long the socket blocks
             trying flush messages after it has been closed (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-backlog"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-backlog">ZMQ::SOCKOPT_BACKLOG</a></code></strong></dt>
      <dd>
       <p class="para">The SOCKOPT_BACKLOG option shall set the maximum length of the queue of outstanding peer connections for the specified socket; this only applies to connection-oriented transports. (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-maxmsgsize"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-maxmsgsize">ZMQ::SOCKOPT_MAXMSGSIZE</a></code></strong></dt>
      <dd>
       <p class="para">Limits the maximum size of the inbound message. Value -1 means no limit. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-sndtimeo"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-sndtimeo">ZMQ::SOCKOPT_SNDTIMEO</a></code></strong></dt>
      <dd>
       <p class="para">Sets the timeout for send operation on the socket. Value -1 means no limit. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-rcvtimeo"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-rcvtimeo">ZMQ::SOCKOPT_RCVTIMEO</a></code></strong></dt>
      <dd>
       <p class="para">Sets the timeout for receive operation on the socket. Value -1 means no limit. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-ipv4only"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-ipv4only">ZMQ::SOCKOPT_IPV4ONLY</a></code></strong></dt>
      <dd>
       <p class="para">Disable IPV6 support if 1. Available if compiled against ZeroMQ 3.x (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-last-endpoint"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-last-endpoint">ZMQ::SOCKOPT_LAST_ENDPOINT</a></code></strong></dt>
      <dd>
       <p class="para">Retrieve the last connected endpoint - for use with * wildcard ports. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.string.php" class="type string">string</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-tcp-keepalive-idle"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-tcp-keepalive-idle">ZMQ::SOCKOPT_TCP_KEEPALIVE_IDLE</a></code></strong></dt>
      <dd>
       <p class="para">Idle time for TCP keepalive. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-tcp-keepalive-cnt"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-tcp-keepalive-cnt">ZMQ::SOCKOPT_TCP_KEEPALIVE_CNT</a></code></strong></dt>
      <dd>
       <p class="para">Count time for TCP keepalive. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-tcp-keepalive-intvl"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-tcp-keepalive-intvl">ZMQ::SOCKOPT_TCP_KEEPALIVE_INTVL</a></code></strong></dt>
      <dd>
       <p class="para">Interval for TCP keepalive. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-delay-attach-on-connect"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-delay-attach-on-connect">ZMQ::SOCKOPT_DELAY_ATTACH_ON_CONNECT</a></code></strong></dt>
      <dd>
       <p class="para">Set a CIDR string to match against incoming TCP connections. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.string.php" class="type string">string</a></span>)</p>
      </dd>
     

      
       <dt id="zmq.constants.sockopt-tcp-accept-filter"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-tcp-accept-filter">ZMQ::SOCKOPT_TCP_ACCEPT_FILTER</a></code></strong></dt>
       <dd>
        <p class="para">Set a CIDR string to match against incoming TCP connections. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.string.php" class="type string">string</a></span>)</p>
       </dd>
      

     
      <dt id="zmq.constants.sockopt-xpub-verbose"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-xpub-verbose">ZMQ::SOCKOPT_XPUB_VERBOSE</a></code></strong></dt>
      <dd>
       <p class="para">Set the XPUB to receive an application message on each instance of a subscription. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.string.php" class="type string">string</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-router-raw"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-router-raw">ZMQ::SOCKOPT_ROUTER_RAW</a></code></strong></dt>
      <dd>
       <p class="para">Sets the raw mode on the ROUTER, when set to 1. In raw mode when using tcp:// transport the socket will read and write without ZeroMQ framing.
               Available if compiled against ZeroMQ 4.0 or higher (Value: <span class="type"><a href="language.types.string.php" class="type string">string</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.sockopt-ipv6"><strong><code><a href="class.zmq.php#zmq.constants.sockopt-ipv6">ZMQ::SOCKOPT_IPV6</a></code></strong></dt>
      <dd>
       <p class="para">Enable IPV6. Available if compiled against ZeroMQ 4.0 or higher (Value: <span class="type"><a href="language.types.string.php" class="type string">string</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.ctxopt-max-sockets"><strong><code><a href="class.zmq.php#zmq.constants.ctxopt-max-sockets">ZMQ::CTXOPT_MAX_SOCKETS</a></code></strong></dt>
      <dd>
       <p class="para">The socket limit for this context. Available if compiled against ZeroMQ 3.x or higher (Value: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</p>
      </dd>
     

     
      <dt id="zmq.constants.poll-in"><strong><code><a href="class.zmq.php#zmq.constants.poll-in">ZMQ::POLL_IN</a></code></strong></dt>
      <dd>
       <p class="para">Poll for incoming data</p>
      </dd>
     

     
      <dt id="zmq.constants.poll-out"><strong><code><a href="class.zmq.php#zmq.constants.poll-out">ZMQ::POLL_OUT</a></code></strong></dt>
      <dd>
       <p class="para">Poll for outgoing data</p>
      </dd>
     

     
      <dt id="zmq.constants.mode-noblock"><strong><code><a href="class.zmq.php#zmq.constants.mode-noblock">ZMQ::MODE_NOBLOCK</a></code></strong></dt>
      <dd>
       <p class="para">Non-blocking operation. Deprecated, use ZMQ::MODE_DONTWAIT instead</p>
      </dd>
     

     
      <dt id="zmq.constants.mode-dontwait"><strong><code><a href="class.zmq.php#zmq.constants.mode-dontwait">ZMQ::MODE_DONTWAIT</a></code></strong></dt>
      <dd>
       <p class="para">Non-blocking operation</p>
      </dd>
     

     
      <dt id="zmq.constants.mode-sndmore"><strong><code><a href="class.zmq.php#zmq.constants.mode-sndmore">ZMQ::MODE_SNDMORE</a></code></strong></dt>
      <dd>
       <p class="para">Send multi-part message</p>
      </dd>
     

     
      <dt id="zmq.constants.device-forwarder"><strong><code><a href="class.zmq.php#zmq.constants.device-forwarder">ZMQ::DEVICE_FORWARDER</a></code></strong></dt>
      <dd>
       <p class="para">Forwarder device</p>
      </dd>
     

     
      <dt id="zmq.constants.device-queue"><strong><code><a href="class.zmq.php#zmq.constants.device-queue">ZMQ::DEVICE_QUEUE</a></code></strong></dt>
      <dd>
       <p class="para">Queue device</p>
      </dd>
     

     
      <dt id="zmq.constants.device-streamer"><strong><code><a href="class.zmq.php#zmq.constants.device-streamer">ZMQ::DEVICE_STREAMER</a></code></strong></dt>
      <dd>
       <p class="para">Streamer device</p>
      </dd>
     

     
      <dt id="zmq.constants.err-internal"><strong><code><a href="class.zmq.php#zmq.constants.err-internal">ZMQ::ERR_INTERNAL</a></code></strong></dt>
      <dd>
       <p class="para">ZMQ extension internal error</p>
      </dd>
     

     
      <dt id="zmq.constants.err-eagain"><strong><code><a href="class.zmq.php#zmq.constants.err-eagain">ZMQ::ERR_EAGAIN</a></code></strong></dt>
      <dd>
       <p class="para">Implies that the operation would block when ZMQ::MODE_DONTWAIT is used</p>
      </dd>
     

     
      <dt id="zmq.constants.err-enotsup"><strong><code><a href="class.zmq.php#zmq.constants.err-enotsup">ZMQ::ERR_ENOTSUP</a></code></strong></dt>
      <dd>
       <p class="para">The operation is not supported by the socket type</p>
      </dd>
     

     
      <dt id="zmq.constants.err-efsm"><strong><code><a href="class.zmq.php#zmq.constants.err-efsm">ZMQ::ERR_EFSM</a></code></strong></dt>
      <dd>
       <p class="para">The operation can not be executed because the socket is not in correct state</p>
      </dd>
     

     
      <dt id="zmq.constants.err-eterm"><strong><code><a href="class.zmq.php#zmq.constants.err-eterm">ZMQ::ERR_ETERM</a></code></strong></dt>
      <dd>
       <p class="para">The context has been terminated</p>
      </dd>
     

    </dl>
   </div>
  </div>



 </div>

 







<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="zmq.construct.php">ZMQ::__construct</a> — ZMQ constructor</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/zmq/zmq.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.zmq%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.zmq&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.zmq.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.zmq.php">0MQ messaging</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.zmq.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="zmq.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="class.zmq.php" title="ZMQ">ZMQ</a>
                        </li>
                                                <li class="">
                            <a href="class.zmqcontext.php" title="ZMQContext">ZMQContext</a>
                        </li>
                                                <li class="">
                            <a href="class.zmqsocket.php" title="ZMQSocket">ZMQSocket</a>
                        </li>
                                                <li class="">
                            <a href="class.zmqpoll.php" title="ZMQPoll">ZMQPoll</a>
                        </li>
                                                <li class="">
                            <a href="class.zmqdevice.php" title="ZMQDevice">ZMQDevice</a>
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
