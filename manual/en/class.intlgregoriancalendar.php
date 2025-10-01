<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: IntlGregorianCalendar - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.intlgregoriancalendar.php">
 <link rel="shorturl" href="https://www.php.net/intlgregoriancalendar">
 <link rel="alternate" href="https://www.php.net/intlgregoriancalendar" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.intl.php">
 <link rel="prev" href="https://www.php.net/manual/en/intlcalendar.todatetime.php">
 <link rel="next" href="https://www.php.net/manual/en/intlgregoriancalendar.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.intlgregoriancalendar.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.intlgregoriancalendar.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.intlgregoriancalendar.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.intlgregoriancalendar.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.intlgregoriancalendar.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.intlgregoriancalendar.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.intlgregoriancalendar.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.intlgregoriancalendar.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.intlgregoriancalendar.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.intlgregoriancalendar.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.intlgregoriancalendar.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The IntlGregorianCalendar class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: IntlGregorianCalendar - Manual" />
<meta name="twitter:description" content="The IntlGregorianCalendar class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: IntlGregorianCalendar - Manual" />
<meta itemprop="description" content="The IntlGregorianCalendar class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The IntlGregorianCalendar class" />

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
        <a href="intlgregoriancalendar.construct.php">
          IntlGregorianCalendar::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="intlcalendar.todatetime.php">
          &laquo; IntlCalendar::toDateTime        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.intl.php'>intl</a></li>      </ul>
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
            <option value='en/class.intlgregoriancalendar.php' selected="selected">English</option>
            <option value='de/class.intlgregoriancalendar.php'>German</option>
            <option value='es/class.intlgregoriancalendar.php'>Spanish</option>
            <option value='fr/class.intlgregoriancalendar.php'>French</option>
            <option value='it/class.intlgregoriancalendar.php'>Italian</option>
            <option value='ja/class.intlgregoriancalendar.php'>Japanese</option>
            <option value='pt_BR/class.intlgregoriancalendar.php'>Brazilian Portuguese</option>
            <option value='ru/class.intlgregoriancalendar.php'>Russian</option>
            <option value='tr/class.intlgregoriancalendar.php'>Turkish</option>
            <option value='uk/class.intlgregoriancalendar.php'>Ukrainian</option>
            <option value='zh/class.intlgregoriancalendar.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.intlgregoriancalendar" class="reference">

 <h1 class="title">The IntlGregorianCalendar class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p>


  <div class="section" id="intlgregoriancalendar.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="intlgregoriancalendar.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">IntlGregorianCalendar</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.intlcalendar.php" class="classname">IntlCalendar</a>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-era"><var class="varname">IntlCalendar::FIELD_ERA</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-year"><var class="varname">IntlCalendar::FIELD_YEAR</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-month"><var class="varname">IntlCalendar::FIELD_MONTH</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-week-of-year"><var class="varname">IntlCalendar::FIELD_WEEK_OF_YEAR</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-week-of-month"><var class="varname">IntlCalendar::FIELD_WEEK_OF_MONTH</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-date"><var class="varname">IntlCalendar::FIELD_DATE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-year"><var class="varname">IntlCalendar::FIELD_DAY_OF_YEAR</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-week"><var class="varname">IntlCalendar::FIELD_DAY_OF_WEEK</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-week-in-month"><var class="varname">IntlCalendar::FIELD_DAY_OF_WEEK_IN_MONTH</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-am-pm"><var class="varname">IntlCalendar::FIELD_AM_PM</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-hour"><var class="varname">IntlCalendar::FIELD_HOUR</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-hour-of-day"><var class="varname">IntlCalendar::FIELD_HOUR_OF_DAY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-minute"><var class="varname">IntlCalendar::FIELD_MINUTE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-second"><var class="varname">IntlCalendar::FIELD_SECOND</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-millisecond"><var class="varname">IntlCalendar::FIELD_MILLISECOND</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-zone-offset"><var class="varname">IntlCalendar::FIELD_ZONE_OFFSET</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-dst-offset"><var class="varname">IntlCalendar::FIELD_DST_OFFSET</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-year-woy"><var class="varname">IntlCalendar::FIELD_YEAR_WOY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-dow-local"><var class="varname">IntlCalendar::FIELD_DOW_LOCAL</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-extended-year"><var class="varname">IntlCalendar::FIELD_EXTENDED_YEAR</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-julian-day"><var class="varname">IntlCalendar::FIELD_JULIAN_DAY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-milliseconds-in-day"><var class="varname">IntlCalendar::FIELD_MILLISECONDS_IN_DAY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-is-leap-month"><var class="varname">IntlCalendar::FIELD_IS_LEAP_MONTH</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-field-count"><var class="varname">IntlCalendar::FIELD_FIELD_COUNT</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-month"><var class="varname">IntlCalendar::FIELD_DAY_OF_MONTH</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-sunday"><var class="varname">IntlCalendar::DOW_SUNDAY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-monday"><var class="varname">IntlCalendar::DOW_MONDAY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-tuesday"><var class="varname">IntlCalendar::DOW_TUESDAY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-wednesday"><var class="varname">IntlCalendar::DOW_WEDNESDAY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-thursday"><var class="varname">IntlCalendar::DOW_THURSDAY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-friday"><var class="varname">IntlCalendar::DOW_FRIDAY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-saturday"><var class="varname">IntlCalendar::DOW_SATURDAY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-type-weekday"><var class="varname">IntlCalendar::DOW_TYPE_WEEKDAY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-type-weekend"><var class="varname">IntlCalendar::DOW_TYPE_WEEKEND</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-type-weekend-offset"><var class="varname">IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-type-weekend-cease"><var class="varname">IntlCalendar::DOW_TYPE_WEEKEND_CEASE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.walltime-first"><var class="varname">IntlCalendar::WALLTIME_FIRST</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.walltime-last"><var class="varname">IntlCalendar::WALLTIME_LAST</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.walltime-next-valid"><var class="varname">IntlCalendar::WALLTIME_NEXT_VALID</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="intlgregoriancalendar.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="class.intltimezone.php" class="type IntlTimeZone">IntlTimeZone</a></span> <code class="parameter">$tz</code><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$locale</code><span class="initializer"> = ?</span></span>)</div>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlgregoriancalendar.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeZoneOrYear</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$localeOrMonth</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfMonth</code></span>)</div>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlgregoriancalendar.construct.php" class="methodname">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeZoneOrYear</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$localeOrMonth</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfMonth</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$hour</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minute</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$second</code><span class="initializer"> = ?</span></span><br>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlgregoriancalendar.createfromdate.php" class="methodname">createFromDate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$year</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$month</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfMonth</code></span>): <span class="type">static</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlgregoriancalendar.createfromdatetime.php" class="methodname">createFromDateTime</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$year</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$month</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfMonth</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$hour</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minute</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$second</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type">static</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlgregoriancalendar.getgregorianchange.php" class="methodname">getGregorianChange</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlgregoriancalendar.isleapyear.php" class="methodname">isLeapYear</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$year</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlgregoriancalendar.setgregorianchange.php" class="methodname">setGregorianChange</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$timestamp</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.add.php" class="methodname">IntlCalendar::add</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.after.php" class="methodname">IntlCalendar::after</a></span>(<span class="methodparam"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span> <code class="parameter">$other</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.before.php" class="methodname">IntlCalendar::before</a></span>(<span class="methodparam"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span> <code class="parameter">$other</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.clear.php" class="methodname">IntlCalendar::clear</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$field</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlcalendar.createinstance.php" class="methodname">IntlCalendar::createInstance</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.intltimezone.php" class="type IntlTimeZone">IntlTimeZone</a></span>|<span class="type"><a href="class.datetimezone.php" class="type DateTimeZone">DateTimeZone</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$timezone</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.equals.php" class="methodname">IntlCalendar::equals</a></span>(<span class="methodparam"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span> <code class="parameter">$other</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.fielddifference.php" class="methodname">IntlCalendar::fieldDifference</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$timestamp</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlcalendar.fromdatetime.php" class="methodname">IntlCalendar::fromDateTime</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.datetime.php" class="type DateTime">DateTime</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$datetime</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.get.php" class="methodname">IntlCalendar::get</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getactualmaximum.php" class="methodname">IntlCalendar::getActualMaximum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getactualminimum.php" class="methodname">IntlCalendar::getActualMinimum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlcalendar.getavailablelocales.php" class="methodname">IntlCalendar::getAvailableLocales</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getdayofweektype.php" class="methodname">IntlCalendar::getDayOfWeekType</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfWeek</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.geterrorcode.php" class="methodname">IntlCalendar::getErrorCode</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.geterrormessage.php" class="methodname">IntlCalendar::getErrorMessage</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getfirstdayofweek.php" class="methodname">IntlCalendar::getFirstDayOfWeek</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getgreatestminimum.php" class="methodname">IntlCalendar::getGreatestMinimum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlcalendar.getkeywordvaluesforlocale.php" class="methodname">IntlCalendar::getKeywordValuesForLocale</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$keyword</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$locale</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$onlyCommon</code></span>): <span class="type"><span class="type"><a href="class.intliterator.php" class="type IntlIterator">IntlIterator</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getleastmaximum.php" class="methodname">IntlCalendar::getLeastMaximum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getlocale.php" class="methodname">IntlCalendar::getLocale</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getmaximum.php" class="methodname">IntlCalendar::getMaximum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getminimaldaysinfirstweek.php" class="methodname">IntlCalendar::getMinimalDaysInFirstWeek</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getminimum.php" class="methodname">IntlCalendar::getMinimum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlcalendar.getnow.php" class="methodname">IntlCalendar::getNow</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getrepeatedwalltimeoption.php" class="methodname">IntlCalendar::getRepeatedWallTimeOption</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getskippedwalltimeoption.php" class="methodname">IntlCalendar::getSkippedWallTimeOption</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.gettime.php" class="methodname">IntlCalendar::getTime</a></span>(): <span class="type"><span class="type"><a href="language.types.float.php" class="type float">float</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.gettimezone.php" class="methodname">IntlCalendar::getTimeZone</a></span>(): <span class="type"><span class="type"><a href="class.intltimezone.php" class="type IntlTimeZone">IntlTimeZone</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.gettype.php" class="methodname">IntlCalendar::getType</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getweekendtransition.php" class="methodname">IntlCalendar::getWeekendTransition</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfWeek</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.indaylighttime.php" class="methodname">IntlCalendar::inDaylightTime</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.isequivalentto.php" class="methodname">IntlCalendar::isEquivalentTo</a></span>(<span class="methodparam"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span> <code class="parameter">$other</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.islenient.php" class="methodname">IntlCalendar::isLenient</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.isset.php" class="methodname">IntlCalendar::isSet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.isweekend.php" class="methodname">IntlCalendar::isWeekend</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$timestamp</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.roll.php" class="methodname">IntlCalendar::roll</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.set.php" class="methodname">IntlCalendar::set</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.set.php" class="methodname">IntlCalendar::set</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$year</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$month</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfMonth</code><span class="initializer"> = NULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$hour</code><span class="initializer"> = NULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minute</code><span class="initializer"> = NULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$second</code><span class="initializer"> = NULL</span></span><br>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setdate.php" class="methodname">IntlCalendar::setDate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$year</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$month</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfMonth</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setdatetime.php" class="methodname">IntlCalendar::setDateTime</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$year</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$month</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfMonth</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$hour</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minute</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$second</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setfirstdayofweek.php" class="methodname">IntlCalendar::setFirstDayOfWeek</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfWeek</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setlenient.php" class="methodname">IntlCalendar::setLenient</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$lenient</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setminimaldaysinfirstweek.php" class="methodname">IntlCalendar::setMinimalDaysInFirstWeek</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$days</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setrepeatedwalltimeoption.php" class="methodname">IntlCalendar::setRepeatedWallTimeOption</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setskippedwalltimeoption.php" class="methodname">IntlCalendar::setSkippedWallTimeOption</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.settime.php" class="methodname">IntlCalendar::setTime</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$timestamp</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.settimezone.php" class="methodname">IntlCalendar::setTimeZone</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.intltimezone.php" class="type IntlTimeZone">IntlTimeZone</a></span>|<span class="type"><a href="class.datetimezone.php" class="type DateTimeZone">DateTimeZone</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$timezone</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.todatetime.php" class="methodname">IntlCalendar::toDateTime</a></span>(): <span class="type"><span class="type"><a href="class.datetime.php" class="type DateTime">DateTime</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

   }</div>


  </div>
  
 </div>

 






























<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="intlgregoriancalendar.construct.php">IntlGregorianCalendar::__construct</a> — Create the Gregorian Calendar class</li><li><a href="intlgregoriancalendar.createfromdate.php">IntlGregorianCalendar::createFromDate</a> — Create a new IntlGregorianCalendar instance from date</li><li><a href="intlgregoriancalendar.createfromdatetime.php">IntlGregorianCalendar::createFromDateTime</a> — Create a new IntlGregorianCalendar instance from date and time</li><li><a href="intlgregoriancalendar.getgregorianchange.php">IntlGregorianCalendar::getGregorianChange</a> — Get the Gregorian Calendar change date</li><li><a href="intlgregoriancalendar.isleapyear.php">IntlGregorianCalendar::isLeapYear</a> — Determine if the given year is a leap year</li><li><a href="intlgregoriancalendar.setgregorianchange.php">IntlGregorianCalendar::setGregorianChange</a> — Set the Gregorian Calendar the change date</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/intlgregoriancalendar.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.intlgregoriancalendar%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.intlgregoriancalendar&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.intlgregoriancalendar.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125452">  <div class="votes">
    <div id="Vu125452">
    <a href="/manual/vote-note.php?id=125452&amp;page=class.intlgregoriancalendar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125452">
    <a href="/manual/vote-note.php?id=125452&amp;page=class.intlgregoriancalendar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125452" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125452" class="name">
  <strong class="user"><em>Julian Sawicki</em></strong></a><a class="genanchor" href="#125452"> &para;</a><div class="date" title="2020-10-22 12:29"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125452">
<div class="phpcode"><code><span class="html">I was using `IntlGregorianCalendar` because it offered a nice way to get the week number of the year as an integer. This differs from `DateTime`; `DateTime` gives you the week number of the year as an string.<br /><br /><span class="default">&lt;?php <br /><br />$dateTime </span><span class="keyword">= new </span><span class="default">DateTime</span><span class="keyword">(</span><span class="string">'21-09-2020 09:00:00'</span><span class="keyword">);<br />echo </span><span class="default">$dateTime</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="string">"W"</span><span class="keyword">); </span><span class="comment">// string '39'<br /><br /></span><span class="default">$intlCalendar </span><span class="keyword">= </span><span class="default">IntlCalendar</span><span class="keyword">::</span><span class="default">fromDateTime </span><span class="keyword">(</span><span class="string">'21-09-2020 09:00:00'</span><span class="keyword">);<br />echo </span><span class="default">$intlCalendar</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">IntlCalendar</span><span class="keyword">::</span><span class="default">FIELD_WEEK_OF_YEAR</span><span class="keyword">); </span><span class="comment">// integer 39</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.intlgregoriancalendar&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.intlgregoriancalendar.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.intl.php">intl</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.intl.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="intl.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="intl.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="intl.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.collator.php" title="Collator">Collator</a>
                        </li>
                                                <li class="">
                            <a href="class.numberformatter.php" title="NumberFormatter">NumberFormatter</a>
                        </li>
                                                <li class="">
                            <a href="class.locale.php" title="Locale">Locale</a>
                        </li>
                                                <li class="">
                            <a href="class.normalizer.php" title="Normalizer">Normalizer</a>
                        </li>
                                                <li class="">
                            <a href="class.messageformatter.php" title="MessageFormatter">MessageFormatter</a>
                        </li>
                                                <li class="">
                            <a href="class.intlcalendar.php" title="IntlCalendar">IntlCalendar</a>
                        </li>
                                                <li class="current">
                            <a href="class.intlgregoriancalendar.php" title="IntlGregorianCalendar">IntlGregorianCalendar</a>
                        </li>
                                                <li class="">
                            <a href="class.intltimezone.php" title="IntlTimeZone">IntlTimeZone</a>
                        </li>
                                                <li class="">
                            <a href="class.intldateformatter.php" title="IntlDateFormatter">IntlDateFormatter</a>
                        </li>
                                                <li class="">
                            <a href="class.resourcebundle.php" title="ResourceBundle">ResourceBundle</a>
                        </li>
                                                <li class="">
                            <a href="class.spoofchecker.php" title="Spoofchecker">Spoofchecker</a>
                        </li>
                                                <li class="">
                            <a href="class.transliterator.php" title="Transliterator">Transliterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlbreakiterator.php" title="IntlBreakIterator">IntlBreakIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlrulebasedbreakiterator.php" title="IntlRuleBasedBreakIterator">IntlRuleBasedBreakIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlcodepointbreakiterator.php" title="IntlCodePointBreakIterator">IntlCodePointBreakIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intldatepatterngenerator.php" title="IntlDatePatternGenerator">IntlDatePatternGenerator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlpartsiterator.php" title="IntlPartsIterator">IntlPartsIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.uconverter.php" title="UConverter">UConverter</a>
                        </li>
                                                <li class="">
                            <a href="ref.intl.grapheme.php" title="Grapheme Functions">Grapheme Functions</a>
                        </li>
                                                <li class="">
                            <a href="ref.intl.idn.php" title="IDN Functions">IDN Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.intlchar.php" title="IntlChar">IntlChar</a>
                        </li>
                                                <li class="">
                            <a href="class.intlexception.php" title="IntlException">IntlException</a>
                        </li>
                                                <li class="">
                            <a href="class.intliterator.php" title="IntlIterator">IntlIterator</a>
                        </li>
                                                <li class="">
                            <a href="ref.intl.php" title="intl Functions">intl Functions</a>
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
