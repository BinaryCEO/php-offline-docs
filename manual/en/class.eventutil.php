<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: EventUtil - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.eventutil.php">
 <link rel="shorturl" href="https://www.php.net/eventutil">
 <link rel="alternate" href="https://www.php.net/eventutil" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.event.php">
 <link rel="prev" href="https://www.php.net/manual/en/eventsslcontext.construct.php">
 <link rel="next" href="https://www.php.net/manual/en/eventutil.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.eventutil.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.eventutil.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.eventutil.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.eventutil.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.eventutil.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.eventutil.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.eventutil.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.eventutil.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.eventutil.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.eventutil.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.eventutil.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The EventUtil class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: EventUtil - Manual" />
<meta name="twitter:description" content="The EventUtil class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: EventUtil - Manual" />
<meta itemprop="description" content="The EventUtil class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The EventUtil class" />

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
        <a href="eventutil.construct.php">
          EventUtil::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="eventsslcontext.construct.php">
          &laquo; EventSslContext::__construct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.event.php'>Event</a></li>      </ul>
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
            <option value='en/class.eventutil.php' selected="selected">English</option>
            <option value='de/class.eventutil.php'>German</option>
            <option value='es/class.eventutil.php'>Spanish</option>
            <option value='fr/class.eventutil.php'>French</option>
            <option value='it/class.eventutil.php'>Italian</option>
            <option value='ja/class.eventutil.php'>Japanese</option>
            <option value='pt_BR/class.eventutil.php'>Brazilian Portuguese</option>
            <option value='ru/class.eventutil.php'>Russian</option>
            <option value='tr/class.eventutil.php'>Turkish</option>
            <option value='uk/class.eventutil.php'>Ukrainian</option>
            <option value='zh/class.eventutil.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.eventutil" class="reference">
 <h1 class="title">The EventUtil class</h1>
 
 <div class="partintro"><p class="verinfo">(PECL event &gt;= 1.5.0)</p>

  <div class="section" id="eventutil.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    <span class="classname"><strong class="classname">EventUtil</strong></span>
    is a singleton with supplimentary methods and constants.
   </p>
  </div>

  <div class="section" id="eventutil.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass">
     <strong class="classname"></strong>
    </span>

    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">EventUtil</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.af-inet"><var class="varname">AF_INET</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.af-inet6"><var class="varname">AF_INET6</var></a></var><span class="initializer"> = 10</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.af-unspec"><var class="varname">AF_UNSPEC</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.libevent-version-number"><var class="varname">LIBEVENT_VERSION_NUMBER</var></a></var><span class="initializer"> = 33559808</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-debug"><var class="varname">SO_DEBUG</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-reuseaddr"><var class="varname">SO_REUSEADDR</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-keepalive"><var class="varname">SO_KEEPALIVE</var></a></var><span class="initializer"> = 9</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-dontroute"><var class="varname">SO_DONTROUTE</var></a></var><span class="initializer"> = 5</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-linger"><var class="varname">SO_LINGER</var></a></var><span class="initializer"> = 13</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-broadcast"><var class="varname">SO_BROADCAST</var></a></var><span class="initializer"> = 6</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-oobinline"><var class="varname">SO_OOBINLINE</var></a></var><span class="initializer"> = 10</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-sndbuf"><var class="varname">SO_SNDBUF</var></a></var><span class="initializer"> = 7</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-rcvbuf"><var class="varname">SO_RCVBUF</var></a></var><span class="initializer"> = 8</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-sndlowat"><var class="varname">SO_SNDLOWAT</var></a></var><span class="initializer"> = 19</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-rcvlowat"><var class="varname">SO_RCVLOWAT</var></a></var><span class="initializer"> = 18</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-sndtimeo"><var class="varname">SO_SNDTIMEO</var></a></var><span class="initializer"> = 21</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-rcvtimeo"><var class="varname">SO_RCVTIMEO</var></a></var><span class="initializer"> = 20</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-type"><var class="varname">SO_TYPE</var></a></var><span class="initializer"> = 3</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.so-error"><var class="varname">SO_ERROR</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.sol-socket"><var class="varname">SOL_SOCKET</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.sol-tcp"><var class="varname">SOL_TCP</var></a></var><span class="initializer"> = 6</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.sol-udp"><var class="varname">SOL_UDP</var></a></var><span class="initializer"> = 17</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.ipproto-ip"><var class="varname">IPPROTO_IP</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventutil.php#eventutil.constants.ipproto-ipv6"><var class="varname">IPPROTO_IPV6</var></a></var><span class="initializer"> = 41</span>;</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span>
   <span class="modifier">public</span>
   <span class="methodname"><a href="eventutil.construct.php" class="methodname">__construct</a></span>()</div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="eventutil.getlastsocketerrno.php" class="methodname">getLastSocketErrno</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$socket</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="eventutil.getlastsocketerror.php" class="methodname">getLastSocketError</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$socket</code>
   <span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="eventutil.getsocketfd.php" class="methodname">getSocketFd</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$socket</code>
   </span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="eventutil.getsocketname.php" class="methodname">getSocketName</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$socket</code>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter reference">&$address</code>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&$port</code>
   <span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="eventutil.setsocketoption.php" class="methodname">setSocketOption</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$socket</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$level</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$optname</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$optval</code>
   </span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="eventutil.sslrandpoll.php" class="methodname">sslRandPoll</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>

  </div>

  <div class="section" id="eventutil.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>
    
     <dt id="eventutil.constants.af-inet">
      <strong><code><a href="class.eventutil.php#eventutil.constants.af-inet">EventUtil::AF_INET</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       IPv4 address family
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.af-inet6">
      <strong><code><a href="class.eventutil.php#eventutil.constants.af-inet6">EventUtil::AF_INET6</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       IPv6 address family
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.af-unspec">
      <strong><code><a href="class.eventutil.php#eventutil.constants.af-unspec">EventUtil::AF_UNSPEC</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Unspecified IP address family
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-debug">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-debug">EventUtil::SO_DEBUG</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. Enable socket debugging. Only allowed for processes with
       the
       <code class="literal">CAP_NET_ADMIN</code>
       capability or an effective user ID of
       <code class="literal">0</code>.
       (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-reuseaddr">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-reuseaddr">EventUtil::SO_REUSEADDR</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. Indicates that the rules used in validating addresses
       supplied in a
       <code class="literal">bind(2)</code>
       call should allow reuse of local addresses. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-keepalive">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-keepalive">EventUtil::SO_KEEPALIVE</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. Enable sending of keep-alive messages on
       connection-oriented sockets. Expects an integer boolean flag. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-dontroute">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-dontroute">EventUtil::SO_DONTROUTE</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-linger">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-linger">EventUtil::SO_LINGER</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. When enabled, a
       <code class="literal">close(2)</code>
       or
       <code class="literal">shutdown(2)</code>
       will not return until all queued messages for the socket have been
       successfully sent or the linger timeout has been reached. Otherwise,
       the call returns immediately and the closing is done in the background.
       See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-broadcast">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-broadcast">EventUtil::SO_BROADCAST</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. Reports whether transmission of broadcast messages is
       supported. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-oobinline">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-oobinline">EventUtil::SO_OOBINLINE</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-sndbuf">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-sndbuf">EventUtil::SO_SNDBUF</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-rcvbuf">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-rcvbuf">EventUtil::SO_RCVBUF</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-sndlowat">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-sndlowat">EventUtil::SO_SNDLOWAT</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-rcvlowat">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-rcvlowat">EventUtil::SO_RCVLOWAT</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-sndtimeo">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-sndtimeo">EventUtil::SO_SNDTIMEO</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-rcvtimeo">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-rcvtimeo">EventUtil::SO_RCVTIMEO</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-type">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-type">EventUtil::SO_TYPE</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.so-error">
      <strong><code><a href="class.eventutil.php#eventutil.constants.so-error">EventUtil::SO_ERROR</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.sol-socket">
      <strong><code><a href="class.eventutil.php#eventutil.constants.sol-socket">EventUtil::SOL_SOCKET</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option level. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.sol-tcp">
      <strong><code><a href="class.eventutil.php#eventutil.constants.sol-tcp">EventUtil::SOL_TCP</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option level. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.sol-udp">
      <strong><code><a href="class.eventutil.php#eventutil.constants.sol-udp">EventUtil::SOL_UDP</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Socket option level. See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.ipproto-ip">
      <strong><code><a href="class.eventutil.php#eventutil.constants.ipproto-ip">EventUtil::IPPROTO_IP</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.ipproto-ipv6">
      <strong><code><a href="class.eventutil.php#eventutil.constants.ipproto-ipv6">EventUtil::IPPROTO_IPV6</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       See the
       <code class="literal">socket(7)</code>
       manual page. (Added in event-1.6.0.)
      </p>
     </dd>
    
    
     <dt id="eventutil.constants.libevent-version-number">
      <strong><code><a href="class.eventutil.php#eventutil.constants.libevent-version-number">EventUtil::LIBEVENT_VERSION_NUMBER</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Libevent&#039; version number at the time when Event extension had been
       compiled with the library.
      </p>
     </dd>
    
   </dl>
  </div>

 </div>

 



































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="eventutil.construct.php">EventUtil::__construct</a> — The abstract constructor</li><li><a href="eventutil.getlastsocketerrno.php">EventUtil::getLastSocketErrno</a> — Returns the most recent socket error number</li><li><a href="eventutil.getlastsocketerror.php">EventUtil::getLastSocketError</a> — Returns the most recent socket error</li><li><a href="eventutil.getsocketfd.php">EventUtil::getSocketFd</a> — Returns numeric file descriptor of a socket, or stream</li><li><a href="eventutil.getsocketname.php">EventUtil::getSocketName</a> — Retreives the current address to which the
  socket is bound</li><li><a href="eventutil.setsocketoption.php">EventUtil::setSocketOption</a> — Sets socket options</li><li><a href="eventutil.sslrandpoll.php">EventUtil::sslRandPoll</a> — Generates entropy by means of OpenSSL's RAND_poll()</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/event/eventutil.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.eventutil%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.eventutil&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.eventutil.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.event.php">Event</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.event.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="event.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="event.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="event.flags.php" title="Event flags">Event flags</a>
                        </li>
                                                <li class="">
                            <a href="event.persistence.php" title="About event persistence">About event persistence</a>
                        </li>
                                                <li class="">
                            <a href="event.callbacks.php" title="Event callbacks">Event callbacks</a>
                        </li>
                                                <li class="">
                            <a href="event.constructing.signal.events.php" title="Constructing signal events">Constructing signal events</a>
                        </li>
                                                <li class="">
                            <a href="class.event.php" title="Event">Event</a>
                        </li>
                                                <li class="">
                            <a href="class.eventbase.php" title="EventBase">EventBase</a>
                        </li>
                                                <li class="">
                            <a href="class.eventbuffer.php" title="EventBuffer">EventBuffer</a>
                        </li>
                                                <li class="">
                            <a href="class.eventbufferevent.php" title="EventBufferEvent">EventBufferEvent</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.about.callbacks.php" title="About buffer event callbacks">About buffer event callbacks</a>
                        </li>
                                                <li class="">
                            <a href="class.eventconfig.php" title="EventConfig">EventConfig</a>
                        </li>
                                                <li class="">
                            <a href="class.eventdnsbase.php" title="EventDnsBase">EventDnsBase</a>
                        </li>
                                                <li class="">
                            <a href="class.eventhttp.php" title="EventHttp">EventHttp</a>
                        </li>
                                                <li class="">
                            <a href="class.eventhttpconnection.php" title="EventHttpConnection">EventHttpConnection</a>
                        </li>
                                                <li class="">
                            <a href="class.eventhttprequest.php" title="EventHttpRequest">EventHttpRequest</a>
                        </li>
                                                <li class="">
                            <a href="class.eventlistener.php" title="EventListener">EventListener</a>
                        </li>
                                                <li class="">
                            <a href="class.eventsslcontext.php" title="EventSslContext">EventSslContext</a>
                        </li>
                                                <li class="current">
                            <a href="class.eventutil.php" title="EventUtil">EventUtil</a>
                        </li>
                                                <li class="">
                            <a href="class.eventexception.php" title="EventException">EventException</a>
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
