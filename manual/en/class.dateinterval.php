<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DateInterval - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.dateinterval.php">
 <link rel="shorturl" href="https://www.php.net/dateinterval">
 <link rel="alternate" href="https://www.php.net/dateinterval" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.datetime.php">
 <link rel="prev" href="https://www.php.net/manual/en/datetimezone.listidentifiers.php">
 <link rel="next" href="https://www.php.net/manual/en/dateinterval.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.dateinterval.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.dateinterval.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.dateinterval.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.dateinterval.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.dateinterval.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.dateinterval.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.dateinterval.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.dateinterval.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.dateinterval.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.dateinterval.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.dateinterval.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The DateInterval class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DateInterval - Manual" />
<meta name="twitter:description" content="The DateInterval class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DateInterval - Manual" />
<meta itemprop="description" content="The DateInterval class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The DateInterval class" />

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
        <a href="dateinterval.construct.php">
          DateInterval::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="datetimezone.listidentifiers.php">
          &laquo; DateTimeZone::listIdentifiers        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      <li><a href='book.datetime.php'>Date/Time</a></li>      </ul>
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
            <option value='en/class.dateinterval.php' selected="selected">English</option>
            <option value='de/class.dateinterval.php'>German</option>
            <option value='es/class.dateinterval.php'>Spanish</option>
            <option value='fr/class.dateinterval.php'>French</option>
            <option value='it/class.dateinterval.php'>Italian</option>
            <option value='ja/class.dateinterval.php'>Japanese</option>
            <option value='pt_BR/class.dateinterval.php'>Brazilian Portuguese</option>
            <option value='ru/class.dateinterval.php'>Russian</option>
            <option value='tr/class.dateinterval.php'>Turkish</option>
            <option value='uk/class.dateinterval.php'>Ukrainian</option>
            <option value='zh/class.dateinterval.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.dateinterval" class="reference">

 <h1 class="title">The DateInterval class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>


  <div class="section" id="dateinterval.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Represents a date interval.
   </p>
   <p class="para">
    A date interval stores either a fixed amount of time (in years, months,
    days, hours etc) or a relative time string in the format that
    <span class="classname"><a href="class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span>&#039;s and
    <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span>&#039;s constructors support.
   </p>
   <p class="para">
    More specifically, the information in an object of the
    <span class="classname"><strong class="classname">DateInterval</strong></span> class is an instruction to get from
    one date/time to another date/time. This process is not always reversible.
   </p>
   <p class="para">
    A common way to create a <span class="classname"><strong class="classname">DateInterval</strong></span> object
    is by calculating the difference between two date/time objects through
    <span class="methodname"><a href="datetime.diff.php" class="methodname">DateTimeInterface::diff()</a></span>.
   </p>
   <p class="para">
    Since there is no well defined way to compare date intervals,
    <span class="classname"><strong class="classname">DateInterval</strong></span> instances are
    <a href="language.operators.comparison.php#language.operators.comparison.incomparable" class="link">incomparable</a>.
   </p>
  </div>


  <div class="section" id="dateinterval.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">DateInterval</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.dateinterval.php#dateinterval.props.y">$<var class="varname">y</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.dateinterval.php#dateinterval.props.m">$<var class="varname">m</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.dateinterval.php#dateinterval.props.d">$<var class="varname">d</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.dateinterval.php#dateinterval.props.h">$<var class="varname">h</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.dateinterval.php#dateinterval.props.i">$<var class="varname">i</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.dateinterval.php#dateinterval.props.s">$<var class="varname">s</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.float.php" class="type float">float</a></span>
      <var class="varname"><a href="class.dateinterval.php#dateinterval.props.f">$<var class="varname">f</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.dateinterval.php#dateinterval.props.invert">$<var class="varname">invert</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>
      <var class="varname"><a href="class.dateinterval.php#dateinterval.props.days">$<var class="varname">days</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.dateinterval.php#dateinterval.props.from-string">$<var class="varname">from_string</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.dateinterval.php#dateinterval.props.date-string">$<var class="varname">date_string</var></a></var>;</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="dateinterval.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$duration</code></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="dateinterval.createfromdatestring.php" class="methodname">createFromDateString</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$datetime</code></span>): <span class="type"><a href="class.dateinterval.php" class="type DateInterval">DateInterval</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="dateinterval.format.php" class="methodname">format</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

   }</div>


  </div>
  
  <div class="section" id="dateinterval.props">
   <h2 class="title">Properties</h2>
   <div class="warning"><strong class="warning">Warning</strong>
    <p class="para">
     The available properties listed below depend on PHP version, and should
     be considered as <em>readonly</em>.
    </p>
   </div>
   <dl>
    
     <dt id="dateinterval.props.y"><var class="varname">y</var></dt>
     <dd>
      <p class="para">
       Number of years.
      </p>
     </dd>
    
    
     <dt id="dateinterval.props.m"><var class="varname">m</var></dt>
     <dd>
      <p class="para">
       Number of months.
      </p>
     </dd>
    
    
     <dt id="dateinterval.props.d"><var class="varname">d</var></dt>
     <dd>
      <p class="para">
       Number of days.
      </p>
     </dd>
    
    
     <dt id="dateinterval.props.h"><var class="varname">h</var></dt>
     <dd>
      <p class="para">
       Number of hours.
      </p>
     </dd>
    
    
     <dt id="dateinterval.props.i"><var class="varname">i</var></dt>
     <dd>
      <p class="para">
       Number of minutes.
      </p>
     </dd>
    
    
     <dt id="dateinterval.props.s"><var class="varname">s</var></dt>
     <dd>
      <p class="para">
       Number of seconds.
      </p>
     </dd>
    
    
     <dt id="dateinterval.props.f"><var class="varname">f</var></dt>
     <dd>
      <p class="para">
       Number of microseconds, as a fraction of a second.
      </p>
     </dd>
    
    
     <dt id="dateinterval.props.invert"><var class="varname">invert</var></dt>
     <dd>
      <p class="para">
       Is <code class="literal">1</code> if the interval
       represents a negative time period and
       <code class="literal">0</code> otherwise.
       See <span class="methodname"><a href="dateinterval.format.php" class="methodname">DateInterval::format()</a></span>.
      </p>
     </dd>
    
    
     <dt id="dateinterval.props.days"><var class="varname">days</var></dt>
     <dd>
      <p class="para">
       If the DateInterval object was created by
       <span class="methodname"><a href="datetime.diff.php" class="methodname">DateTimeImmutable::diff()</a></span> or
       <span class="methodname"><a href="datetime.diff.php" class="methodname">DateTime::diff()</a></span>, then this is the
       total number of full days between the start and end dates. Otherwise,
       <var class="varname">days</var> will be <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </p>
     </dd>
    
    
     <dt id="dateinterval.props.from-string"><var class="varname">from_string</var></dt>
     <dd>
      <p class="para">
       If the DateInterval object was created by
       <span class="methodname"><a href="dateinterval.createfromdatestring.php" class="methodname">DateInterval::createFromDateString()</a></span>, then
       this property&#039;s value will be <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, and the
       <var class="varname">date_string</var> property will be populated. Otherwise,
       the value will be <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, and the <var class="varname">y</var> to
       <var class="varname">f</var>, <var class="varname">invert</var>, and
       <var class="varname">days</var> properties will be populated.
      </p>
     </dd>
    
    
     <dt id="dateinterval.props.date-string"><var class="varname">date_string</var></dt>
     <dd>
      <p class="para">
       The string used as argument to
       <span class="methodname"><a href="dateinterval.createfromdatestring.php" class="methodname">DateInterval::createFromDateString()</a></span>.
      </p>
     </dd>
    
   </dl>
  </div>

  <div class="section" id="dateinterval.changelog">
   <h2 class="title">Changelog</h2>
   <p class="para">
    <table class="doctable informaltable">
     
      <thead>
       <tr>
        <th>Version</th>
        <th>Description</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td>8.2.0</td>
        <td>
         The <var class="varname">from_string</var> and <var class="varname">date_string</var>
         properties were added for <span class="classname"><strong class="classname">DateInterval</strong></span>
         instances that were created using the
         <span class="methodname"><a href="dateinterval.createfromdatestring.php" class="methodname">DateInterval::createFromDateString()</a></span> method.
        </td>
       </tr>

       <tr>
        <td>8.2.0</td>
        <td>
         Only the <code class="literal">y</code> to <code class="literal">f</code>,
         <code class="literal">invert</code>, and <code class="literal">days</code> will be visible.
        </td>
       </tr>

       <tr>
        <td>7.4.0</td>
        <td>
         <span class="classname"><strong class="classname">DateInterval</strong></span> instances are incomparable now;
         previously, all <span class="classname"><strong class="classname">DateInterval</strong></span> instances were considered equal.
        </td>
       </tr>

       <tr>
        <td>7.1.0</td>
        <td>The <var class="varname">f</var> property was added.</td>
       </tr>

      </tbody>
     
    </table>

   </p>
  </div>

 </div>

 















<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="dateinterval.construct.php">DateInterval::__construct</a> — Creates a new DateInterval object</li><li><a href="dateinterval.createfromdatestring.php">DateInterval::createFromDateString</a> — Sets up a DateInterval from the relative parts of the string</li><li><a href="dateinterval.format.php">DateInterval::format</a> — Formats the interval</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/dateinterval.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.dateinterval%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.dateinterval&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.dateinterval.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="127977">  <div class="votes">
    <div id="Vu127977">
    <a href="/manual/vote-note.php?id=127977&amp;page=class.dateinterval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127977">
    <a href="/manual/vote-note.php?id=127977&amp;page=class.dateinterval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127977" title="77% like this...">
    55
    </div>
  </div>
  <a href="#127977" class="name">
  <strong class="user"><em>cb</em></strong></a><a class="genanchor" href="#127977"> &para;</a><div class="date" title="2022-12-04 04:12"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127977">
<div class="phpcode"><code><span class="html">If you want to reverse a date interval use array_reverse and iterator_to_array. I've found using invert to be unreliable.<br /><br /><span class="default">&lt;?php<br />$start_date </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">"2021-01-01"</span><span class="keyword">);<br /></span><span class="default">$end_date   </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">"2021-01-05"</span><span class="keyword">); </span><span class="comment">// If you want to include this date, add 1 day<br /><br /></span><span class="default">$interval </span><span class="keyword">= </span><span class="default">DateInterval</span><span class="keyword">::</span><span class="default">createFromDateString</span><span class="keyword">(</span><span class="string">'1 day'</span><span class="keyword">);<br /></span><span class="default">$daterange </span><span class="keyword">= new </span><span class="default">DatePeriod</span><span class="keyword">(</span><span class="default">$start_date</span><span class="keyword">, </span><span class="default">$interval </span><span class="keyword">,</span><span class="default">$end_date</span><span class="keyword">);<br /><br />function </span><span class="default">show_dates </span><span class="keyword">(</span><span class="default">$dr</span><span class="keyword">) {<br />    foreach(</span><span class="default">$dr </span><span class="keyword">as </span><span class="default">$date1</span><span class="keyword">){<br />        echo </span><span class="default">$date1</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'Y-m-d'</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />    }<br />}<br /> <br /></span><span class="default">show_dates </span><span class="keyword">(</span><span class="default">$daterange</span><span class="keyword">);<br />   <br />echo </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">// reverse the array<br /><br /></span><span class="default">$daterange </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">iterator_to_array</span><span class="keyword">(</span><span class="default">$daterange</span><span class="keyword">));<br /><br /></span><span class="default">show_dates </span><span class="keyword">(</span><span class="default">$daterange</span><span class="keyword">);<br />           <br /></span><span class="default">?&gt;<br /></span><br />Gives <br /> 2021-01-01<br /> 2021-01-02<br /> 2021-01-03<br /> 2021-01-04<br /><br /> 2021-01-04<br /> 2021-01-03<br /> 2021-01-02<br /> 2021-01-01</span></code></div>
  </div>
 </div>
  <div class="note" id="129684">  <div class="votes">
    <div id="Vu129684">
    <a href="/manual/vote-note.php?id=129684&amp;page=class.dateinterval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129684">
    <a href="/manual/vote-note.php?id=129684&amp;page=class.dateinterval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129684" title="87% like this...">
    6
    </div>
  </div>
  <a href="#129684" class="name">
  <strong class="user"><em>edgaras at levinson dot lt</em></strong></a><a class="genanchor" href="#129684"> &para;</a><div class="date" title="2024-08-01 02:58"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129684">
<div class="phpcode"><code><span class="html">There is a handy way to compare intervals by adding them to 0 dates and comparing dates instead<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">compare</span><span class="keyword">(</span><span class="default">DateInterval $first</span><span class="keyword">, </span><span class="default">DateInterval $second</span><span class="keyword">): </span><span class="default">int<br /></span><span class="keyword">{<br />    </span><span class="default">$firstDate </span><span class="keyword">= (new </span><span class="default">DateTime</span><span class="keyword">())-&gt;</span><span class="default">setTimestamp</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">$first</span><span class="keyword">);<br />    </span><span class="default">$secondDate </span><span class="keyword">= (new </span><span class="default">DateTime</span><span class="keyword">())-&gt;</span><span class="default">setTimestamp</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">$second</span><span class="keyword">);<br /><br />    return </span><span class="default">$firstDate </span><span class="keyword">&lt;=&gt; </span><span class="default">$secondDate</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">compare</span><span class="keyword">(new </span><span class="default">DateInterval</span><span class="keyword">(</span><span class="string">'P2D'</span><span class="keyword">), new </span><span class="default">DateInterval</span><span class="keyword">(</span><span class="string">'PT48H'</span><span class="keyword">)) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="default">compare</span><span class="keyword">(</span><span class="default">DateInterval</span><span class="keyword">::</span><span class="default">createFromDateString</span><span class="keyword">(</span><span class="string">'2 days'</span><span class="keyword">), </span><span class="default">DateInterval</span><span class="keyword">::</span><span class="default">createFromDateString</span><span class="keyword">(</span><span class="string">'48 hours'</span><span class="keyword">)) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="default">compare</span><span class="keyword">(</span><span class="default">DateInterval</span><span class="keyword">::</span><span class="default">createFromDateString</span><span class="keyword">(</span><span class="string">'2 days'</span><span class="keyword">), </span><span class="default">DateInterval</span><span class="keyword">::</span><span class="default">createFromDateString</span><span class="keyword">(</span><span class="string">'49 hours'</span><span class="keyword">)) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="default">compare</span><span class="keyword">(</span><span class="default">DateInterval</span><span class="keyword">::</span><span class="default">createFromDateString</span><span class="keyword">(</span><span class="string">'2 days'</span><span class="keyword">), </span><span class="default">DateInterval</span><span class="keyword">::</span><span class="default">createFromDateString</span><span class="keyword">(</span><span class="string">'47 hours'</span><span class="keyword">)) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Outputs:<br />0<br />0<br />-1<br />1</span></code></div>
  </div>
 </div>
  <div class="note" id="129175">  <div class="votes">
    <div id="Vu129175">
    <a href="/manual/vote-note.php?id=129175&amp;page=class.dateinterval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129175">
    <a href="/manual/vote-note.php?id=129175&amp;page=class.dateinterval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129175" title="55% like this...">
    2
    </div>
  </div>
  <a href="#129175" class="name">
  <strong class="user"><em>julio dot necronomicon at gmail dot com</em></strong></a><a class="genanchor" href="#129175"> &para;</a><div class="date" title="2024-01-18 03:56"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129175">
<div class="phpcode"><code><span class="html">More simple example i use to add or subtract.<br /><br /><span class="default">&lt;?php<br />$Datetime </span><span class="keyword">= new </span><span class="default">Datetime</span><span class="keyword">(</span><span class="string">'NOW'</span><span class="keyword">, new </span><span class="default">DateTimeZone</span><span class="keyword">(</span><span class="string">'America/Bahia'</span><span class="keyword">));<br /></span><span class="default">$Datetime</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">DateInterval</span><span class="keyword">::</span><span class="default">createFromDateString</span><span class="keyword">(</span><span class="string">'2 day'</span><span class="keyword">));<br /><br />echo </span><span class="default">$Datetime</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">"Y-m-d H:i:s"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130008">  <div class="votes">
    <div id="Vu130008">
    <a href="/manual/vote-note.php?id=130008&amp;page=class.dateinterval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130008">
    <a href="/manual/vote-note.php?id=130008&amp;page=class.dateinterval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130008" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#130008" class="name">
  <strong class="user"><em>anonymous at nospam dot com</em></strong></a><a class="genanchor" href="#130008"> &para;</a><div class="date" title="2025-02-03 06:19"><strong>7 months ago</strong></div>
  <div class="text" id="Hcom130008">
<div class="phpcode"><code><span class="html">Subtracting months may not work as you might expect. <br />Code shows how subtracting 2 months from consecutive days produces potentially unexpected results. <br /><br /><span class="default">&lt;?php<br />$origin </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">'2025-01-31T00:00:00'</span><span class="keyword">);<br /></span><span class="default">$target </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">'2024-11-26T00:00:00'</span><span class="keyword">);<br /><br /></span><span class="default">$interval </span><span class="keyword">= </span><span class="default">date_diff</span><span class="keyword">(</span><span class="default">$origin</span><span class="keyword">, </span><span class="default">$target</span><span class="keyword">);<br />echo </span><span class="string">"interval total days: "</span><span class="keyword">.</span><span class="default">$interval</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'%a days'</span><span class="keyword">);<br /><br />echo </span><span class="string">"interval object years: "</span><span class="keyword">.</span><span class="default">$interval</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'%y years'</span><span class="keyword">);<br />echo </span><span class="string">"interval object months: "</span><span class="keyword">.</span><span class="default">$interval</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'%m months'</span><span class="keyword">);<br />echo </span><span class="string">"interval object days: "</span><span class="keyword">.</span><span class="default">$interval</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'%d days'</span><span class="keyword">);<br /><br /></span><span class="comment">// create 3 dates that are consecutive, but in two months<br /></span><span class="default">$d1 </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">'2025-01-31T00:00:00'</span><span class="keyword">);<br /></span><span class="default">$d2 </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">'2025-02-01T00:00:00'</span><span class="keyword">);<br /></span><span class="default">$d3 </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">'2025-02-02T00:00:00'</span><span class="keyword">);<br /><br /></span><span class="comment">// add (negative) interval object to each date<br /></span><span class="default">$d1</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">$interval</span><span class="keyword">);<br /></span><span class="default">$d2</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">$interval</span><span class="keyword">);<br /></span><span class="default">$d3</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">$interval</span><span class="keyword">);<br /><br />echo </span><span class="string">"Add (negative) interval object to each date. Non-consecutive results: "</span><span class="keyword">;<br />echo(</span><span class="default">$d1</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">"Y-m-d\TH:i:s"</span><span class="keyword">));<br />echo(</span><span class="default">$d2</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">"Y-m-d\TH:i:s"</span><span class="keyword">));<br />echo(</span><span class="default">$d3</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">"Y-m-d\TH:i:s"</span><span class="keyword">));<br /><br /></span><span class="comment">// reset dates<br /></span><span class="default">$d1 </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">'2025-01-31T00:00:00'</span><span class="keyword">);<br /></span><span class="default">$d2 </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">'2025-02-01T00:00:00'</span><span class="keyword">);<br /></span><span class="default">$d3 </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">'2025-02-02T00:00:00'</span><span class="keyword">);<br /><br /></span><span class="comment">// Use same dates, but subtract total number of days instead of adding interval object: ";<br /></span><span class="default">$d1</span><span class="keyword">-&gt;</span><span class="default">sub</span><span class="keyword">(new </span><span class="default">DateInterval</span><span class="keyword">(</span><span class="string">'P'</span><span class="keyword">.</span><span class="default">$interval</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'%a'</span><span class="keyword">).</span><span class="string">'D'</span><span class="keyword">));<br /></span><span class="default">$d2</span><span class="keyword">-&gt;</span><span class="default">sub</span><span class="keyword">(new </span><span class="default">DateInterval</span><span class="keyword">(</span><span class="string">'P'</span><span class="keyword">.</span><span class="default">$interval</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'%a'</span><span class="keyword">).</span><span class="string">'D'</span><span class="keyword">));<br /></span><span class="default">$d3</span><span class="keyword">-&gt;</span><span class="default">sub</span><span class="keyword">(new </span><span class="default">DateInterval</span><span class="keyword">(</span><span class="string">'P'</span><span class="keyword">.</span><span class="default">$interval</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'%a'</span><span class="keyword">).</span><span class="string">'D'</span><span class="keyword">));<br /><br />echo </span><span class="string">"Use same dates, but subtract total number of days instead of adding interval object. Results (consecutive): "</span><span class="keyword">;<br />echo(</span><span class="default">$d1</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">"Y-m-d\TH:i:s"</span><span class="keyword">));<br />echo(</span><span class="default">$d2</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">"Y-m-d\TH:i:s"</span><span class="keyword">));<br />echo(</span><span class="default">$d3</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">"Y-m-d\TH:i:s"</span><span class="keyword">));<br /><br /></span><span class="default">$d1 </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">'2025-01-31T00:00:00'</span><span class="keyword">);<br /></span><span class="default">$d2 </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">'2025-02-01T00:00:00'</span><span class="keyword">);<br /></span><span class="default">$d3 </span><span class="keyword">= </span><span class="default">date_create</span><span class="keyword">(</span><span class="string">'2025-02-02T00:00:00'</span><span class="keyword">);<br /><br /></span><span class="comment">// do month separately for 2025-02-01T00:00:00<br /></span><span class="keyword">echo </span><span class="string">"Do month separately (interesting): "</span><span class="keyword">;<br /><br />echo (</span><span class="string">'Subtract '</span><span class="keyword">. </span><span class="default">$interval</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'%m'</span><span class="keyword">).</span><span class="string">' months (might not expect this):'</span><span class="keyword">);<br />echo (</span><span class="string">'Jan 31 - 2 months (61 days = Dec, 31 days + Nov, 30 days) ==&gt; Dec 1'</span><span class="keyword">);<br />echo (</span><span class="string">'Feb 1  - 2 months (62 days = Dec, 31 days + Jan, 31 days) ==&gt; Dec 1'</span><span class="keyword">);<br /></span><span class="default">$d1</span><span class="keyword">-&gt;</span><span class="default">sub</span><span class="keyword">(new </span><span class="default">DateInterval</span><span class="keyword">(</span><span class="string">'P'</span><span class="keyword">.</span><span class="default">$interval</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'%m'</span><span class="keyword">).</span><span class="string">'M'</span><span class="keyword">));<br />echo </span><span class="default">$d1</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">"Y-m-d\TH:i:s"</span><span class="keyword">);<br /></span><span class="default">$d2</span><span class="keyword">-&gt;</span><span class="default">sub</span><span class="keyword">(new </span><span class="default">DateInterval</span><span class="keyword">(</span><span class="string">'P'</span><span class="keyword">.</span><span class="default">$interval</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'%m'</span><span class="keyword">).</span><span class="string">'M'</span><span class="keyword">));<br />echo </span><span class="default">$d2</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">"Y-m-d\TH:i:s"</span><span class="keyword">);<br /></span><span class="default">$d3</span><span class="keyword">-&gt;</span><span class="default">sub</span><span class="keyword">(new </span><span class="default">DateInterval</span><span class="keyword">(</span><span class="string">'P'</span><span class="keyword">.</span><span class="default">$interval</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">'%m'</span><span class="keyword">).</span><span class="string">'M'</span><span class="keyword">));<br />echo </span><span class="default">$d3</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">"Y-m-d\TH:i:s"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Output: <br /><br />interval total days: 66 days<br />interval object years: 0 years<br />interval object months: 2 months<br />interval object days: 5 days<br /><br />create 3 dates that are consecutive, but in two months:<br />$d1 = 2025-01-31T00:00:00<br />$d2 = 2025-02-01T00:00:00<br />$d3 = 2025-02-02T00:00:00<br /><br />Add (negative) interval object to each date. Non-consecutive results:<br />2024-11-26T00:00:00<br />2024-11-26T00:00:00<br />2024-11-27T00:00:00<br /><br />Use same dates, but subtract total number of days instead of adding interval object. Results (consecutive):<br />2024-11-26T00:00:00<br />2024-11-27T00:00:00<br />2024-11-28T00:00:00<br /><br />Do month separately (interesting):<br /><br />Subtract 2 months (might not expect this):<br />Jan 31 - 2 months (61 days = Dec, 31 days + Nov, 30 days) ==&gt; Dec 1<br />Feb 1 - 2 months (62 days = Dec, 31 days + Jan, 31 days) ==&gt; Dec 1<br />2024-12-01T00:00:00<br />2024-12-01T00:00:00<br />2024-12-02T00:00:00</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.dateinterval&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.dateinterval.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.datetime.php">Date/Time</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.datetime.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="datetime.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="datetime.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="datetime.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.datetime.php" title="DateTime">DateTime</a>
                        </li>
                                                <li class="">
                            <a href="class.datetimeimmutable.php" title="DateTimeImmutable">DateTimeImmutable</a>
                        </li>
                                                <li class="">
                            <a href="class.datetimeinterface.php" title="DateTimeInterface">DateTimeInterface</a>
                        </li>
                                                <li class="">
                            <a href="class.datetimezone.php" title="DateTimeZone">DateTimeZone</a>
                        </li>
                                                <li class="current">
                            <a href="class.dateinterval.php" title="DateInterval">DateInterval</a>
                        </li>
                                                <li class="">
                            <a href="class.dateperiod.php" title="DatePeriod">DatePeriod</a>
                        </li>
                                                <li class="">
                            <a href="ref.datetime.php" title="Date/Time Functions">Date/Time Functions</a>
                        </li>
                                                <li class="">
                            <a href="datetime.error.tree.php" title="Date/Time Errors and Exceptions">Date/Time Errors and Exceptions</a>
                        </li>
                                                <li class="">
                            <a href="datetime.formats.php" title="Supported Date and Time Formats">Supported Date and Time Formats</a>
                        </li>
                                                <li class="">
                            <a href="timezones.php" title="List of Supported Timezones">List of Supported Timezones</a>
                        </li>
                                                <li class="">
                            <a href="class.dateerror.php" title="DateError">DateError</a>
                        </li>
                                                <li class="">
                            <a href="class.dateobjecterror.php" title="DateObjectError">DateObjectError</a>
                        </li>
                                                <li class="">
                            <a href="class.daterangeerror.php" title="DateRangeError">DateRangeError</a>
                        </li>
                                                <li class="">
                            <a href="class.dateexception.php" title="DateException">DateException</a>
                        </li>
                                                <li class="">
                            <a href="class.dateinvalidoperationexception.php" title="DateInvalidOperationException">DateInvalidOperationException</a>
                        </li>
                                                <li class="">
                            <a href="class.dateinvalidtimezoneexception.php" title="DateInvalidTimeZoneException">DateInvalidTimeZoneException</a>
                        </li>
                                                <li class="">
                            <a href="class.datemalformedintervalstringexception.php" title="DateMalformedIntervalStringException">DateMalformedIntervalStringException</a>
                        </li>
                                                <li class="">
                            <a href="class.datemalformedperiodstringexception.php" title="DateMalformedPeriodStringException">DateMalformedPeriodStringException</a>
                        </li>
                                                <li class="">
                            <a href="class.datemalformedstringexception.php" title="DateMalformedStringException">DateMalformedStringException</a>
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
