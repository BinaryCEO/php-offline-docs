<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: IntlCalendar - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.intlcalendar.php">
 <link rel="shorturl" href="https://www.php.net/intlcalendar">
 <link rel="alternate" href="https://www.php.net/intlcalendar" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.intl.php">
 <link rel="prev" href="https://www.php.net/manual/en/messageformatter.setpattern.php">
 <link rel="next" href="https://www.php.net/manual/en/intlcalendar.add.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.intlcalendar.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.intlcalendar.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.intlcalendar.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.intlcalendar.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.intlcalendar.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.intlcalendar.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.intlcalendar.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.intlcalendar.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.intlcalendar.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.intlcalendar.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.intlcalendar.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The IntlCalendar class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: IntlCalendar - Manual" />
<meta name="twitter:description" content="The IntlCalendar class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: IntlCalendar - Manual" />
<meta itemprop="description" content="The IntlCalendar class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The IntlCalendar class" />

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
        <a href="intlcalendar.add.php">
          IntlCalendar::add &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="messageformatter.setpattern.php">
          &laquo; MessageFormatter::setPattern        </a>
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
            <option value='en/class.intlcalendar.php' selected="selected">English</option>
            <option value='de/class.intlcalendar.php'>German</option>
            <option value='es/class.intlcalendar.php'>Spanish</option>
            <option value='fr/class.intlcalendar.php'>French</option>
            <option value='it/class.intlcalendar.php'>Italian</option>
            <option value='ja/class.intlcalendar.php'>Japanese</option>
            <option value='pt_BR/class.intlcalendar.php'>Brazilian Portuguese</option>
            <option value='ru/class.intlcalendar.php'>Russian</option>
            <option value='tr/class.intlcalendar.php'>Turkish</option>
            <option value='uk/class.intlcalendar.php'>Ukrainian</option>
            <option value='zh/class.intlcalendar.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.intlcalendar" class="reference">

 <h1 class="title">The IntlCalendar class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8, PECL &gt;= 3.0.0a1)</p>


  <div class="section" id="intlcalendar.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="intlcalendar.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">IntlCalendar</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-era"><var class="varname">FIELD_ERA</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-year"><var class="varname">FIELD_YEAR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-month"><var class="varname">FIELD_MONTH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-week-of-year"><var class="varname">FIELD_WEEK_OF_YEAR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-week-of-month"><var class="varname">FIELD_WEEK_OF_MONTH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-date"><var class="varname">FIELD_DATE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-year"><var class="varname">FIELD_DAY_OF_YEAR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-week"><var class="varname">FIELD_DAY_OF_WEEK</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-week-in-month"><var class="varname">FIELD_DAY_OF_WEEK_IN_MONTH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-am-pm"><var class="varname">FIELD_AM_PM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-hour"><var class="varname">FIELD_HOUR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-hour-of-day"><var class="varname">FIELD_HOUR_OF_DAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-minute"><var class="varname">FIELD_MINUTE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-second"><var class="varname">FIELD_SECOND</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-millisecond"><var class="varname">FIELD_MILLISECOND</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-zone-offset"><var class="varname">FIELD_ZONE_OFFSET</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-dst-offset"><var class="varname">FIELD_DST_OFFSET</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-year-woy"><var class="varname">FIELD_YEAR_WOY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-dow-local"><var class="varname">FIELD_DOW_LOCAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-extended-year"><var class="varname">FIELD_EXTENDED_YEAR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-julian-day"><var class="varname">FIELD_JULIAN_DAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-milliseconds-in-day"><var class="varname">FIELD_MILLISECONDS_IN_DAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-is-leap-month"><var class="varname">FIELD_IS_LEAP_MONTH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-field-count"><var class="varname">FIELD_FIELD_COUNT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-month"><var class="varname">FIELD_DAY_OF_MONTH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-sunday"><var class="varname">DOW_SUNDAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-monday"><var class="varname">DOW_MONDAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-tuesday"><var class="varname">DOW_TUESDAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-wednesday"><var class="varname">DOW_WEDNESDAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-thursday"><var class="varname">DOW_THURSDAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-friday"><var class="varname">DOW_FRIDAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-saturday"><var class="varname">DOW_SATURDAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-type-weekday"><var class="varname">DOW_TYPE_WEEKDAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-type-weekend"><var class="varname">DOW_TYPE_WEEKEND</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-type-weekend-offset"><var class="varname">DOW_TYPE_WEEKEND_OFFSET</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.dow-type-weekend-cease"><var class="varname">DOW_TYPE_WEEKEND_CEASE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.walltime-first"><var class="varname">WALLTIME_FIRST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.walltime-last"><var class="varname">WALLTIME_LAST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlcalendar.php#intlcalendar.constants.walltime-next-valid"><var class="varname">WALLTIME_NEXT_VALID</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">private</span> <span class="methodname"><a href="intlcalendar.construct.php" class="methodname">__construct</a></span>()</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.add.php" class="methodname">add</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.after.php" class="methodname">after</a></span>(<span class="methodparam"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span> <code class="parameter">$other</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.before.php" class="methodname">before</a></span>(<span class="methodparam"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span> <code class="parameter">$other</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.clear.php" class="methodname">clear</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$field</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlcalendar.createinstance.php" class="methodname">createInstance</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.intltimezone.php" class="type IntlTimeZone">IntlTimeZone</a></span>|<span class="type"><a href="class.datetimezone.php" class="type DateTimeZone">DateTimeZone</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$timezone</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.equals.php" class="methodname">equals</a></span>(<span class="methodparam"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span> <code class="parameter">$other</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.fielddifference.php" class="methodname">fieldDifference</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$timestamp</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlcalendar.fromdatetime.php" class="methodname">fromDateTime</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.datetime.php" class="type DateTime">DateTime</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$datetime</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.get.php" class="methodname">get</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getactualmaximum.php" class="methodname">getActualMaximum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getactualminimum.php" class="methodname">getActualMinimum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlcalendar.getavailablelocales.php" class="methodname">getAvailableLocales</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getdayofweektype.php" class="methodname">getDayOfWeekType</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfWeek</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.geterrorcode.php" class="methodname">getErrorCode</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.geterrormessage.php" class="methodname">getErrorMessage</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getfirstdayofweek.php" class="methodname">getFirstDayOfWeek</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getgreatestminimum.php" class="methodname">getGreatestMinimum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlcalendar.getkeywordvaluesforlocale.php" class="methodname">getKeywordValuesForLocale</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$keyword</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$locale</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$onlyCommon</code></span>): <span class="type"><span class="type"><a href="class.intliterator.php" class="type IntlIterator">IntlIterator</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getleastmaximum.php" class="methodname">getLeastMaximum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getlocale.php" class="methodname">getLocale</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getmaximum.php" class="methodname">getMaximum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getminimaldaysinfirstweek.php" class="methodname">getMinimalDaysInFirstWeek</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getminimum.php" class="methodname">getMinimum</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlcalendar.getnow.php" class="methodname">getNow</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getrepeatedwalltimeoption.php" class="methodname">getRepeatedWallTimeOption</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getskippedwalltimeoption.php" class="methodname">getSkippedWallTimeOption</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.gettime.php" class="methodname">getTime</a></span>(): <span class="type"><span class="type"><a href="language.types.float.php" class="type float">float</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.gettimezone.php" class="methodname">getTimeZone</a></span>(): <span class="type"><span class="type"><a href="class.intltimezone.php" class="type IntlTimeZone">IntlTimeZone</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.gettype.php" class="methodname">getType</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.getweekendtransition.php" class="methodname">getWeekendTransition</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfWeek</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.indaylighttime.php" class="methodname">inDaylightTime</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.isequivalentto.php" class="methodname">isEquivalentTo</a></span>(<span class="methodparam"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span> <code class="parameter">$other</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.islenient.php" class="methodname">isLenient</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.isset.php" class="methodname">isSet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.isweekend.php" class="methodname">isWeekend</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$timestamp</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.roll.php" class="methodname">roll</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.set.php" class="methodname">set</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.set.php" class="methodname">set</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$year</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$month</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfMonth</code><span class="initializer"> = NULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$hour</code><span class="initializer"> = NULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minute</code><span class="initializer"> = NULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$second</code><span class="initializer"> = NULL</span></span><br>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setdate.php" class="methodname">setDate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$year</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$month</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfMonth</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setdatetime.php" class="methodname">setDateTime</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$year</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$month</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfMonth</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$hour</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minute</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$second</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setfirstdayofweek.php" class="methodname">setFirstDayOfWeek</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dayOfWeek</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setlenient.php" class="methodname">setLenient</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$lenient</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setminimaldaysinfirstweek.php" class="methodname">setMinimalDaysInFirstWeek</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$days</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setrepeatedwalltimeoption.php" class="methodname">setRepeatedWallTimeOption</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.setskippedwalltimeoption.php" class="methodname">setSkippedWallTimeOption</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.settime.php" class="methodname">setTime</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$timestamp</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.settimezone.php" class="methodname">setTimeZone</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.intltimezone.php" class="type IntlTimeZone">IntlTimeZone</a></span>|<span class="type"><a href="class.datetimezone.php" class="type DateTimeZone">DateTimeZone</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$timezone</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlcalendar.todatetime.php" class="methodname">toDateTime</a></span>(): <span class="type"><span class="type"><a href="class.datetime.php" class="type DateTime">DateTime</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

   }</div>


  </div>
  

  <div class="section" id="intlcalendar.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>

    
     <dt id="intlcalendar.constants.field-era">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-era">IntlCalendar::FIELD_ERA</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field numerically representing an era, for instance
       <code class="literal">1</code> for AD and <code class="literal">0</code> for BC in the
       Gregorian/Julian calendars and <code class="literal">235</code> for the Heisei
       (平成) era in the Japanese calendar. Not all calendars have more than
       one era.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-year">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-year">IntlCalendar::FIELD_YEAR</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the year. This is not unique across eras.  If the
       calendar type has more than one era, generally the minimum value for
       this field will be <code class="literal">1</code>.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-month">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-month">IntlCalendar::FIELD_MONTH</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the month. The month sequence is zero-based, so
       January (here used to signify the first month of the calendar; this
       may be called another name, such as Muharram in the Islamic calendar)
       is represented by <code class="literal">0</code>, February by
       <code class="literal">1</code>, …, December by <code class="literal">11</code> and, for
       calendars that have it, the 13th or leap month by
       <code class="literal">12</code>.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-week-of-year">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-week-of-year">IntlCalendar::FIELD_WEEK_OF_YEAR</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the number of the week of the year. This depends on
       which day of the week is <a href="intlcalendar.getfirstdayofweek.php" class="link">deemed to start the
       week</a> and the <a href="intlcalendar.getminimaldaysinfirstweek.php" class="link">minimal number of days
       in a week</a>.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-week-of-month">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-week-of-month">IntlCalendar::FIELD_WEEK_OF_MONTH</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the number of the week of the month. This depends on
       which day of the week is <a href="intlcalendar.getfirstdayofweek.php" class="link">deemed to start the
       week</a> and the <a href="intlcalendar.getminimaldaysinfirstweek.php" class="link">minimal number of days
       in a week</a>.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-date">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-date">IntlCalendar::FIELD_DATE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the day of the month. The same as
       <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-month">IntlCalendar::FIELD_DAY_OF_MONTH</a></code></strong>, which has a
       clearer name.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-day-of-year">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-year">IntlCalendar::FIELD_DAY_OF_YEAR</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the day of the year. For the Gregorian calendar,
       starts with <code class="literal">1</code> and ends with
       <code class="literal">365</code> or <code class="literal">366</code>.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-day-of-week">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-week">IntlCalendar::FIELD_DAY_OF_WEEK</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the day of the week. Its values start with
       <code class="literal">1</code> (Sunday, see <a href="class.intlcalendar.php#intlcalendar.constants.dow-sunday" class="link"><strong><code><a href="class.intlcalendar.php#intlcalendar.constants.dow-sunday">IntlCalendar::DOW_SUNDAY</a></code></strong></a>
       and subsequent constants) and the last valid value is 7 (Saturday).
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-day-of-week-in-month">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-week-in-month">IntlCalendar::FIELD_DAY_OF_WEEK_IN_MONTH</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Given a day of the week (Sunday, Monday, …), this calendar
       field assigns an ordinal to such a day of the week in a specific month.
       Thus, if the value of this field is <code class="literal">1</code> and the value of the day of the
       week is <code class="literal">2</code> (Monday), then the set day of the month is the 1st Monday of the
       month; the maximum value is <code class="literal">5</code>.
      </p>
      <p class="para">
       Additionally, the value <code class="literal">0</code> and negative values are
       also allowed. The value <code class="literal">0</code> encompasses the seven days
       that occur immediately before the first seven days of a month (which
       therefore have a ‘day of week in month’ with value
       <code class="literal">1</code>). Negative values starts counting from the end of
       the month – <code class="literal">-1</code> points to the last occurrence of a
       day of the week in a month, <code class="literal">-2</code> to the second last,
       and so on.
      </p>
      <p class="para">
       Unlike <a href="class.intlcalendar.php#intlcalendar.constants.field-week-of-month" class="link"><strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-week-of-month">IntlCalendar::FIELD_WEEK_OF_MONTH</a></code></strong></a>
       and  <a href="class.intlcalendar.php#intlcalendar.constants.field-week-of-year" class="link"><strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-week-of-year">IntlCalendar::FIELD_WEEK_OF_YEAR</a></code></strong></a>,
       this value does not depend on
       <span class="function"><a href="intlcalendar.getfirstdayofweek.php" class="function">IntlCalendar::getFirstDayOfWeek()</a></span> or on
       <span class="function"><a href="intlcalendar.getminimaldaysinfirstweek.php" class="function">IntlCalendar::getMinimalDaysInFirstWeek()</a></span>. The first
       Monday is the first Monday, even if it occurs in a week that belongs to
       the previous month.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-am-pm">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-am-pm">IntlCalendar::FIELD_AM_PM</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field indicating whether a time is before noon (value
       <code class="literal">0</code>, AM) or after (<code class="literal">1</code>). Midnight is
       AM, noon is PM.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-hour">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-hour">IntlCalendar::FIELD_HOUR</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the hour, without specifying whether itʼs in the
       morning or in the afternoon. Valid values are <code class="literal">0</code> to
       <code class="literal">11</code>.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-hour-of-day">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-hour-of-day">IntlCalendar::FIELD_HOUR_OF_DAY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the full (24h) hour of the day. Valid values are
       <code class="literal">0</code> to <code class="literal">23</code>.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-minute">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-minute">IntlCalendar::FIELD_MINUTE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the minutes component of the time.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-second">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-second">IntlCalendar::FIELD_SECOND</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the seconds component of the time.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-millisecond">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-millisecond">IntlCalendar::FIELD_MILLISECOND</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field the milliseconds component of the time.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-zone-offset">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-zone-offset">IntlCalendar::FIELD_ZONE_OFFSET</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field indicating the raw offset of the timezone, in
       milliseconds. The raw offset is the timezone offset, excluding any
       offset due to daylight saving time.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-dst-offset">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-dst-offset">IntlCalendar::FIELD_DST_OFFSET</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the daylight saving time offset of the calendarʼs
       timezone, in milliseconds, if active for calendarʼs time.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-year-woy">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-year-woy">IntlCalendar::FIELD_YEAR_WOY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field representing the year for <a href="class.intlcalendar.php#intlcalendar.constants.field-week-of-year" class="link">week of year</a>
       purposes.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-dow-local">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-dow-local">IntlCalendar::FIELD_DOW_LOCAL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for the localized day of the week. This is a value
       between <code class="literal">1</code> and <code class="literal">7</code>,
       <code class="literal">1</code> being used for the day of the week that matches
       the value returned by
       <span class="function"><a href="intlcalendar.getfirstdayofweek.php" class="function">IntlCalendar::getFirstDayOfWeek()</a></span>.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-extended-year">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-extended-year">IntlCalendar::FIELD_EXTENDED_YEAR</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for a year number representation that is continuous
       across eras. For the Gregorian calendar, the value of this field
       matches that of <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-year">IntlCalendar::FIELD_YEAR</a></code></strong> for AD
       years; a BC year <code class="literal">y</code> is represented by <code class="literal">-y +
       1</code>.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-julian-day">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-julian-day">IntlCalendar::FIELD_JULIAN_DAY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field for a modified Julian day number. It is different from a
       conventional Julian day number in that its transitions occur at local
       zone midnight rather than at noon UTC. It uniquely identifies a date.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-milliseconds-in-day">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-milliseconds-in-day">IntlCalendar::FIELD_MILLISECONDS_IN_DAY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field encompassing the information in
       <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-hour-of-day">IntlCalendar::FIELD_HOUR_OF_DAY</a></code></strong>,
       <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-minute">IntlCalendar::FIELD_MINUTE</a></code></strong>,
       <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-second">IntlCalendar::FIELD_SECOND</a></code></strong> and
       <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-millisecond">IntlCalendar::FIELD_MILLISECOND</a></code></strong>. Range is from the
       <code class="literal">0</code> to <code class="literal">24 * 3600 * 1000 - 1</code>. It is
       not the amount of milliseconds elapsed in the day since on DST
       transitions it will have discontinuities analog to those of the wall
       time.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-is-leap-month">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-is-leap-month">IntlCalendar::FIELD_IS_LEAP_MONTH</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Calendar field whose value is <code class="literal">1</code> for indicating a
       leap month and <code class="literal">0</code> otherwise.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-field-count">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-field-count">IntlCalendar::FIELD_FIELD_COUNT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       The total number of fields.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.field-day-of-month">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-day-of-month">IntlCalendar::FIELD_DAY_OF_MONTH</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Alias for <a href="class.intlcalendar.php#intlcalendar.constants.field-date" class="link"><strong><code><a href="class.intlcalendar.php#intlcalendar.constants.field-date">IntlCalendar::FIELD_DATE</a></code></strong></a>.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.dow-sunday">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.dow-sunday">IntlCalendar::DOW_SUNDAY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">Sunday.</p>
     </dd>
    

    
     <dt id="intlcalendar.constants.dow-monday">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.dow-monday">IntlCalendar::DOW_MONDAY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">Monday.</p>
     </dd>
    

    
     <dt id="intlcalendar.constants.dow-tuesday">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.dow-tuesday">IntlCalendar::DOW_TUESDAY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">Tuesday.</p>
     </dd>
    

    
     <dt id="intlcalendar.constants.dow-wednesday">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.dow-wednesday">IntlCalendar::DOW_WEDNESDAY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">Wednesday.</p>
     </dd>
    

    
     <dt id="intlcalendar.constants.dow-thursday">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.dow-thursday">IntlCalendar::DOW_THURSDAY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">Thursday.</p>
     </dd>
    

    
     <dt id="intlcalendar.constants.dow-friday">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.dow-friday">IntlCalendar::DOW_FRIDAY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">Friday.</p>
     </dd>
    

    
     <dt id="intlcalendar.constants.dow-saturday">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.dow-saturday">IntlCalendar::DOW_SATURDAY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">Saturday.</p>
     </dd>
    

    
     <dt id="intlcalendar.constants.dow-type-weekday">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.dow-type-weekday">IntlCalendar::DOW_TYPE_WEEKDAY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Output of <span class="function"><a href="intlcalendar.getdayofweektype.php" class="function">IntlCalendar::getDayOfWeekType()</a></span>
       indicating a day of week is a weekday.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.dow-type-weekend">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.dow-type-weekend">IntlCalendar::DOW_TYPE_WEEKEND</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Output of <span class="function"><a href="intlcalendar.getdayofweektype.php" class="function">IntlCalendar::getDayOfWeekType()</a></span>
       indicating a day of week belongs to the weekend.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.dow-type-weekend-offset">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.dow-type-weekend-offset">IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Output of <span class="function"><a href="intlcalendar.getdayofweektype.php" class="function">IntlCalendar::getDayOfWeekType()</a></span>
       indicating the weekend begins during the given day of week.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.dow-type-weekend-cease">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.dow-type-weekend-cease">IntlCalendar::DOW_TYPE_WEEKEND_CEASE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Output of <span class="function"><a href="intlcalendar.getdayofweektype.php" class="function">IntlCalendar::getDayOfWeekType()</a></span>
       indicating the weekend ends during the given day of week.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.walltime-first">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.walltime-first">IntlCalendar::WALLTIME_FIRST</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Output of <span class="function"><a href="intlcalendar.getskippedwalltimeoption.php" class="function">IntlCalendar::getSkippedWallTimeOption()</a></span>
       indicating that wall times in the skipped range should refer to the
       same instant as wall times with one hour less and of
       <span class="function"><a href="intlcalendar.getrepeatedwalltimeoption.php" class="function">IntlCalendar::getRepeatedWallTimeOption()</a></span>
       indicating the wall times in the repeated range should refer to the
       instant of the first occurrence of such wall time.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.walltime-last">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.walltime-last">IntlCalendar::WALLTIME_LAST</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Output of <span class="function"><a href="intlcalendar.getskippedwalltimeoption.php" class="function">IntlCalendar::getSkippedWallTimeOption()</a></span>
       indicating that wall times in the skipped range should refer to the
       same instant as wall times with one hour after and of
       <span class="function"><a href="intlcalendar.getrepeatedwalltimeoption.php" class="function">IntlCalendar::getRepeatedWallTimeOption()</a></span>
       indicating the wall times in the repeated range should refer to the
       instant of the second occurrence of such wall time.
      </p>
     </dd>
    

    
     <dt id="intlcalendar.constants.walltime-next-valid">
      <strong><code><a href="class.intlcalendar.php#intlcalendar.constants.walltime-next-valid">IntlCalendar::WALLTIME_NEXT_VALID</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Output of <span class="function"><a href="intlcalendar.getskippedwalltimeoption.php" class="function">IntlCalendar::getSkippedWallTimeOption()</a></span>
       indicating that wall times in the skipped range should refer to the
       instant when the daylight saving time transition occurs (begins).
      </p>
     </dd>
    

   </dl>
  </div>


  <div class="section">
   <h2 class="title">Changelog</h2>
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.4.0</td>
       <td>
        The class constants are now typed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>

 </div>

 
















































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="intlcalendar.add.php">IntlCalendar::add</a> — Add a (signed) amount of time to a field</li><li><a href="intlcalendar.after.php">IntlCalendar::after</a> — Whether this objectʼs time is after that of the passed object</li><li><a href="intlcalendar.before.php">IntlCalendar::before</a> — Whether this objectʼs time is before that of the passed object</li><li><a href="intlcalendar.clear.php">IntlCalendar::clear</a> — Clear a field or all fields</li><li><a href="intlcalendar.construct.php">IntlCalendar::__construct</a> — Private constructor for disallowing instantiation</li><li><a href="intlcalendar.createinstance.php">IntlCalendar::createInstance</a> — Create a new IntlCalendar</li><li><a href="intlcalendar.equals.php">IntlCalendar::equals</a> — Compare time of two IntlCalendar objects for equality</li><li><a href="intlcalendar.fielddifference.php">IntlCalendar::fieldDifference</a> — Calculate difference between given time and this objectʼs time</li><li><a href="intlcalendar.fromdatetime.php">IntlCalendar::fromDateTime</a> — Create an IntlCalendar from a DateTime object or string</li><li><a href="intlcalendar.get.php">IntlCalendar::get</a> — Get the value for a field</li><li><a href="intlcalendar.getactualmaximum.php">IntlCalendar::getActualMaximum</a> — The maximum value for a field, considering the objectʼs current time</li><li><a href="intlcalendar.getactualminimum.php">IntlCalendar::getActualMinimum</a> — The minimum value for a field, considering the objectʼs current time</li><li><a href="intlcalendar.getavailablelocales.php">IntlCalendar::getAvailableLocales</a> — Get array of locales for which there is data</li><li><a href="intlcalendar.getdayofweektype.php">IntlCalendar::getDayOfWeekType</a> — Tell whether a day is a weekday, weekend or a day that has a transition between the two</li><li><a href="intlcalendar.geterrorcode.php">IntlCalendar::getErrorCode</a> — Get last error code on the object</li><li><a href="intlcalendar.geterrormessage.php">IntlCalendar::getErrorMessage</a> — Get last error message on the object</li><li><a href="intlcalendar.getfirstdayofweek.php">IntlCalendar::getFirstDayOfWeek</a> — Get the first day of the week for the calendarʼs locale</li><li><a href="intlcalendar.getgreatestminimum.php">IntlCalendar::getGreatestMinimum</a> — Get the largest local minimum value for a field</li><li><a href="intlcalendar.getkeywordvaluesforlocale.php">IntlCalendar::getKeywordValuesForLocale</a> — Get set of locale keyword values</li><li><a href="intlcalendar.getleastmaximum.php">IntlCalendar::getLeastMaximum</a> — Get the smallest local maximum for a field</li><li><a href="intlcalendar.getlocale.php">IntlCalendar::getLocale</a> — Get the locale associated with the object</li><li><a href="intlcalendar.getmaximum.php">IntlCalendar::getMaximum</a> — Get the global maximum value for a field</li><li><a href="intlcalendar.getminimaldaysinfirstweek.php">IntlCalendar::getMinimalDaysInFirstWeek</a> — Get minimal number of days the first week in a year or month can have</li><li><a href="intlcalendar.getminimum.php">IntlCalendar::getMinimum</a> — Get the global minimum value for a field</li><li><a href="intlcalendar.getnow.php">IntlCalendar::getNow</a> — Get number representing the current time</li><li><a href="intlcalendar.getrepeatedwalltimeoption.php">IntlCalendar::getRepeatedWallTimeOption</a> — Get behavior for handling repeating wall time</li><li><a href="intlcalendar.getskippedwalltimeoption.php">IntlCalendar::getSkippedWallTimeOption</a> — Get behavior for handling skipped wall time</li><li><a href="intlcalendar.gettime.php">IntlCalendar::getTime</a> — Get time currently represented by the object</li><li><a href="intlcalendar.gettimezone.php">IntlCalendar::getTimeZone</a> — Get the objectʼs timezone</li><li><a href="intlcalendar.gettype.php">IntlCalendar::getType</a> — Get the calendar type</li><li><a href="intlcalendar.getweekendtransition.php">IntlCalendar::getWeekendTransition</a> — Get time of the day at which weekend begins or ends</li><li><a href="intlcalendar.indaylighttime.php">IntlCalendar::inDaylightTime</a> — Whether the objectʼs time is in Daylight Savings Time</li><li><a href="intlcalendar.isequivalentto.php">IntlCalendar::isEquivalentTo</a> — Whether another calendar is equal but for a different time</li><li><a href="intlcalendar.islenient.php">IntlCalendar::isLenient</a> — Whether date/time interpretation is in lenient mode</li><li><a href="intlcalendar.isset.php">IntlCalendar::isSet</a> — Whether a field is set</li><li><a href="intlcalendar.isweekend.php">IntlCalendar::isWeekend</a> — Whether a certain date/time is in the weekend</li><li><a href="intlcalendar.roll.php">IntlCalendar::roll</a> — Add value to field without carrying into more significant fields</li><li><a href="intlcalendar.set.php">IntlCalendar::set</a> — Set a time field or several common fields at once</li><li><a href="intlcalendar.setdate.php">IntlCalendar::setDate</a> — Set a date fields</li><li><a href="intlcalendar.setdatetime.php">IntlCalendar::setDateTime</a> — Set a date and time fields</li><li><a href="intlcalendar.setfirstdayofweek.php">IntlCalendar::setFirstDayOfWeek</a> — Set the day on which the week is deemed to start</li><li><a href="intlcalendar.setlenient.php">IntlCalendar::setLenient</a> — Set whether date/time interpretation is to be lenient</li><li><a href="intlcalendar.setminimaldaysinfirstweek.php">IntlCalendar::setMinimalDaysInFirstWeek</a> — Set minimal number of days the first week in a year or month can have</li><li><a href="intlcalendar.setrepeatedwalltimeoption.php">IntlCalendar::setRepeatedWallTimeOption</a> — Set behavior for handling repeating wall times at negative timezone offset transitions</li><li><a href="intlcalendar.setskippedwalltimeoption.php">IntlCalendar::setSkippedWallTimeOption</a> — Set behavior for handling skipped wall times at positive timezone offset transitions</li><li><a href="intlcalendar.settime.php">IntlCalendar::setTime</a> — Set the calendar time in milliseconds since the epoch</li><li><a href="intlcalendar.settimezone.php">IntlCalendar::setTimeZone</a> — Set the timezone used by this calendar</li><li><a href="intlcalendar.todatetime.php">IntlCalendar::toDateTime</a> — Convert an IntlCalendar into a DateTime object</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/intlcalendar.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.intlcalendar%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.intlcalendar&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.intlcalendar.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128133">  <div class="votes">
    <div id="Vu128133">
    <a href="/manual/vote-note.php?id=128133&amp;page=class.intlcalendar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128133">
    <a href="/manual/vote-note.php?id=128133&amp;page=class.intlcalendar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128133" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128133" class="name">
  <strong class="user"><em>Doug</em></strong></a><a class="genanchor" href="#128133"> &para;</a><div class="date" title="2023-01-20 03:54"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128133">
<div class="phpcode"><code><span class="html">Example obtaining a week and its boundaries (for building a calendar view):<br /><br /><span class="default">&lt;?php<br />$date </span><span class="keyword">= new </span><span class="default">DateTime</span><span class="keyword">(</span><span class="string">'now'</span><span class="keyword">);<br /></span><span class="default">$locale </span><span class="keyword">= </span><span class="string">'en_US'</span><span class="keyword">;<br /><br /></span><span class="default">$thisWeek </span><span class="keyword">= </span><span class="default">IntlCalendar</span><span class="keyword">::</span><span class="default">fromDateTime</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">, </span><span class="default">$locale</span><span class="keyword">);<br /></span><span class="default">$thisWeek</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="default">IntlCalendar</span><span class="keyword">::</span><span class="default">FIELD_DAY_OF_WEEK</span><span class="keyword">, </span><span class="default">$thisWeek</span><span class="keyword">-&gt;</span><span class="default">getFirstDayOfWeek</span><span class="keyword">());<br /></span><span class="comment">// $thisWeek now points to the first day of the week<br /></span><span class="default">$weekStart </span><span class="keyword">= </span><span class="default">$thisWeek</span><span class="keyword">-&gt;</span><span class="default">toDateTime</span><span class="keyword">();<br /><br /></span><span class="default">$daysToAdvance </span><span class="keyword">= </span><span class="default">$thisWeek</span><span class="keyword">-&gt;</span><span class="default">getMaximum</span><span class="keyword">(</span><span class="default">IntlCalendar</span><span class="keyword">::</span><span class="default">FIELD_DAY_OF_WEEK</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">;<br /></span><span class="comment">// Maximum number of days in a week minus 1 gets you to the last day<br /></span><span class="default">$weekEnd </span><span class="keyword">= </span><span class="default">$weekStart</span><span class="keyword">-&gt;</span><span class="default">modify</span><span class="keyword">(</span><span class="string">"+</span><span class="keyword">{</span><span class="default">$daysToAdvance</span><span class="keyword">}</span><span class="string"> days"</span><span class="keyword">);<br /><br /></span><span class="default">$previousWeek </span><span class="keyword">= </span><span class="default">IntlCalendar</span><span class="keyword">::</span><span class="default">fromDateTime</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">, </span><span class="default">$locale</span><span class="keyword">);<br /></span><span class="default">$previousWeek</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">IntlCalendar</span><span class="keyword">::</span><span class="default">FIELD_WEEK_OF_YEAR</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$previousWeek </span><span class="keyword">= </span><span class="default">$previousWeek</span><span class="keyword">-&gt;</span><span class="default">toDateTime</span><span class="keyword">();<br /><br /></span><span class="default">$nextWeek </span><span class="keyword">= </span><span class="default">IntlCalendar</span><span class="keyword">::</span><span class="default">fromDateTime</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">, </span><span class="default">$locale</span><span class="keyword">);<br /></span><span class="default">$nextWeek</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">IntlCalendar</span><span class="keyword">::</span><span class="default">FIELD_WEEK_OF_YEAR</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$nextWeek </span><span class="keyword">= </span><span class="default">$nextWeek</span><span class="keyword">-&gt;</span><span class="default">toDateTime</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.intlcalendar&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.intlcalendar.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="class.intlcalendar.php" title="IntlCalendar">IntlCalendar</a>
                        </li>
                                                <li class="">
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
