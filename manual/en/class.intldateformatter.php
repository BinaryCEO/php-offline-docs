<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: IntlDateFormatter - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.intldateformatter.php">
 <link rel="shorturl" href="https://www.php.net/intldateformatter">
 <link rel="alternate" href="https://www.php.net/intldateformatter" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.intl.php">
 <link rel="prev" href="https://www.php.net/manual/en/intltimezone.usedaylighttime.php">
 <link rel="next" href="https://www.php.net/manual/en/intldateformatter.create.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.intldateformatter.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.intldateformatter.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.intldateformatter.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.intldateformatter.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.intldateformatter.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.intldateformatter.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.intldateformatter.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.intldateformatter.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.intldateformatter.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.intldateformatter.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.intldateformatter.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The IntlDateFormatter class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: IntlDateFormatter - Manual" />
<meta name="twitter:description" content="The IntlDateFormatter class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: IntlDateFormatter - Manual" />
<meta itemprop="description" content="The IntlDateFormatter class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The IntlDateFormatter class" />

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
        <a href="intldateformatter.create.php">
          IntlDateFormatter::create &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="intltimezone.usedaylighttime.php">
          &laquo; IntlTimeZone::useDaylightTime        </a>
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
            <option value='en/class.intldateformatter.php' selected="selected">English</option>
            <option value='de/class.intldateformatter.php'>German</option>
            <option value='es/class.intldateformatter.php'>Spanish</option>
            <option value='fr/class.intldateformatter.php'>French</option>
            <option value='it/class.intldateformatter.php'>Italian</option>
            <option value='ja/class.intldateformatter.php'>Japanese</option>
            <option value='pt_BR/class.intldateformatter.php'>Brazilian Portuguese</option>
            <option value='ru/class.intldateformatter.php'>Russian</option>
            <option value='tr/class.intldateformatter.php'>Turkish</option>
            <option value='uk/class.intldateformatter.php'>Ukrainian</option>
            <option value='zh/class.intldateformatter.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.intldateformatter" class="reference">
 <h1 class="title">The IntlDateFormatter class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8, PECL intl &gt;= 1.0.0)</p>

  
  <div class="section" id="intldateformatter.intro">
   <h2 class="title">Introduction</h2>
   <p class="simpara">
    Date Formatter is a concrete class that enables locale-dependent formatting/parsing 
    of dates using pattern strings and/or canned patterns.
   </p>
 
   <p class="simpara">
    This class represents the ICU date formatting functionality. 
    It allows users to display dates in a localized format or to parse strings 
    into PHP date values using pattern strings and/or canned patterns.
   </p> 
  </div>
  

  <div class="section" id="intldateformatter.synopsis">
   <h2 class="title">Class synopsis</h2>

   
   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">IntlDateFormatter</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intldateformatter.php#intldateformatter.constants.full"><var class="varname">FULL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intldateformatter.php#intldateformatter.constants.long"><var class="varname">LONG</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intldateformatter.php#intldateformatter.constants.medium"><var class="varname">MEDIUM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intldateformatter.php#intldateformatter.constants.short"><var class="varname">SHORT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intldateformatter.php#intldateformatter.constants.none"><var class="varname">NONE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intldateformatter.php#intldateformatter.constants.relative-full"><var class="varname">RELATIVE_FULL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intldateformatter.php#intldateformatter.constants.relative-long"><var class="varname">RELATIVE_LONG</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intldateformatter.php#intldateformatter.constants.relative-medium"><var class="varname">RELATIVE_MEDIUM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intldateformatter.php#intldateformatter.constants.relative-short"><var class="varname">RELATIVE_SHORT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intldateformatter.php#intldateformatter.constants.gregorian"><var class="varname">GREGORIAN</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intldateformatter.php#intldateformatter.constants.traditional"><var class="varname">TRADITIONAL</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.create.php" class="methodname">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locale</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dateType</code><span class="initializer"> = IntlDateFormatter::FULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeType</code><span class="initializer"> = IntlDateFormatter::FULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="class.intltimezone.php" class="type IntlTimeZone">IntlTimeZone</a></span>|<span class="type"><a href="class.datetimezone.php" class="type DateTimeZone">DateTimeZone</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$timezone</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$calendar</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$pattern</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intldateformatter.create.php" class="methodname">create</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locale</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dateType</code><span class="initializer"> = IntlDateFormatter::FULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeType</code><span class="initializer"> = IntlDateFormatter::FULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="class.intltimezone.php" class="type IntlTimeZone">IntlTimeZone</a></span>|<span class="type"><a href="class.datetimezone.php" class="type DateTimeZone">DateTimeZone</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$timezone</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$calendar</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$pattern</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.intldateformatter.php" class="type IntlDateFormatter">IntlDateFormatter</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.format.php" class="methodname">format</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span>|<span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$datetime</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intldateformatter.formatobject.php" class="methodname">formatObject</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span>|<span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span></span> <code class="parameter">$datetime</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$format</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.getcalendar.php" class="methodname">getCalendar</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.getdatetype.php" class="methodname">getDateType</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.geterrorcode.php" class="methodname">getErrorCode</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.geterrormessage.php" class="methodname">getErrorMessage</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.getlocale.php" class="methodname">getLocale</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = <strong><code><a href="intl.constants.php#constant.uloc-actual-locale">ULOC_ACTUAL_LOCALE</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.getpattern.php" class="methodname">getPattern</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.gettimetype.php" class="methodname">getTimeType</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.gettimezoneid.php" class="methodname">getTimeZoneId</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.getcalendarobject.php" class="methodname">getCalendarObject</a></span>(): <span class="type"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.gettimezone.php" class="methodname">getTimeZone</a></span>(): <span class="type"><span class="type"><a href="class.intltimezone.php" class="type IntlTimeZone">IntlTimeZone</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.islenient.php" class="methodname">isLenient</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.localtime.php" class="methodname">localtime</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$offset</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.parse.php" class="methodname">parse</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$offset</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.setcalendar.php" class="methodname">setCalendar</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$calendar</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.setlenient.php" class="methodname">setLenient</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$lenient</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.setpattern.php" class="methodname">setPattern</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intldateformatter.settimezone.php" class="methodname">setTimeZone</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.intltimezone.php" class="type IntlTimeZone">IntlTimeZone</a></span>|<span class="type"><a href="class.datetimezone.php" class="type DateTimeZone">DateTimeZone</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$timezone</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>
   

  </div>

  <div class="section" id="intldateformatter.seealso">
   <h2 class="title">See Also</h2>
   <p class="para">
    <ul class="simplelist">
     <li>
      <a href="https://unicode-org.github.io/icu-docs/apidoc/dev/icu4c/udat_8h.html" class="link external">&raquo;&nbsp;ICU Date formatter</a>
     </li>
    </ul>
    <ul class="simplelist">
     <li>
      <a href="https://unicode-org.github.io/icu/userguide/format_parse/datetime/#datetime-format-syntax" class="link external">&raquo;&nbsp;ICU Date formats</a>
     </li>
    </ul>
   </p>
  </div>

  

<div class="section" id="intl.intldateformatter-constants">
 <h2 class="title">Predefined Constants</h2>

 <p class="para">
  These constants are used to specify different formats
  in the constructor for DateType and TimeType.
  <dl>
   
    <dt id="intldateformatter.constants.none">
     <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.none">IntlDateFormatter::NONE</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">Do not include this element</span>
    </dd>
   
   
    <dt id="intldateformatter.constants.full">
     <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.full">IntlDateFormatter::FULL</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">Completely specified style (Tuesday, April 12, 1952 AD or 3:30:42pm PST)</span>
    </dd>
   
   
    <dt id="intldateformatter.constants.long">
     <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.long">IntlDateFormatter::LONG</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">Long style (January 12, 1952 or 3:30:32pm)</span>
    </dd>
   
   
    <dt id="intldateformatter.constants.medium">
     <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.medium">IntlDateFormatter::MEDIUM</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">Medium style (Jan 12, 1952)</span>
    </dd>
   
   
    <dt id="intldateformatter.constants.short">
     <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.short">IntlDateFormatter::SHORT</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">Most abbreviated style, only essential data (12/13/52 or 3:30pm)</span>
    </dd>
   
   
    <dt id="intldateformatter.constants.relative-full">
     <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.relative-full">IntlDateFormatter::RELATIVE_FULL</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">
      The same as <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.full">IntlDateFormatter::FULL</a></code></strong>, but yesterday, today, and tomorrow
      show as <code class="literal">yesterday</code>, <code class="literal">today</code>, and <code class="literal">tomorrow</code>,
      respectively.  Available as of PHP 8.0.0, for <code class="parameter">dateType</code> only.
     </span>
    </dd>
   
   
    <dt id="intldateformatter.constants.relative-long">
     <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.relative-long">IntlDateFormatter::RELATIVE_LONG</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">
      The same as <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.long">IntlDateFormatter::LONG</a></code></strong>, but yesterday, today, and tomorrow
      show as <code class="literal">yesterday</code>, <code class="literal">today</code>, and <code class="literal">tomorrow</code>,
      respectively.  Available as of PHP 8.0.0, for <code class="parameter">dateType</code> only.
     </span>
    </dd>
   
   
    <dt id="intldateformatter.constants.relative-medium">
     <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.relative-medium">IntlDateFormatter::RELATIVE_MEDIUM</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">
      The same as <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.medium">IntlDateFormatter::MEDIUM</a></code></strong>, but yesterday, today, and tomorrow
      show as <code class="literal">yesterday</code>, <code class="literal">today</code>, and <code class="literal">tomorrow</code>,
      respectively.  Available as of PHP 8.0.0, for <code class="parameter">dateType</code> only.
     </span>
    </dd>
   
   
    <dt id="intldateformatter.constants.relative-short">
     <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.relative-short">IntlDateFormatter::RELATIVE_SHORT</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">
      The same as <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.short">IntlDateFormatter::SHORT</a></code></strong>, but yesterday, today, and tomorrow
      show as <code class="literal">yesterday</code>, <code class="literal">today</code>, and <code class="literal">tomorrow</code>,
      respectively.  Available as of PHP 8.0.0, for <code class="parameter">dateType</code> only.
     </span>
    </dd>
   
  </dl>
 </p>

 <p class="para" id="intl.intldateformatter-constants.calendartypes">
  The following int constants are used to specify the calendar. 
  These calendars are all based directly on the Gregorian calendar.
  Non-Gregorian calendars need to be specified in locale. 
  Examples might include locale=&quot;hi@calendar=BUDDHIST&quot;.
  <dl>    
   
    <dt id="intldateformatter.constants.traditional">
     <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.traditional">IntlDateFormatter::TRADITIONAL</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">Non-Gregorian Calendar</span>
    </dd>
   
   
    <dt id="intldateformatter.constants.gregorian">
     <strong><code><a href="class.intldateformatter.php#intldateformatter.constants.gregorian">IntlDateFormatter::GREGORIAN</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">Gregorian Calendar</span>
    </dd>
   
  </dl>
 </p>
</div>

 
 


  <div class="section" id="intldateformatter.changelog">
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

 




































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="intldateformatter.create.php">IntlDateFormatter::create</a> — Create a date formatter</li><li><a href="intldateformatter.format.php">IntlDateFormatter::format</a> — Format the date/time value as a string</li><li><a href="intldateformatter.formatobject.php">IntlDateFormatter::formatObject</a> — Formats an object</li><li><a href="intldateformatter.getcalendar.php">IntlDateFormatter::getCalendar</a> — Get the calendar type used for the IntlDateFormatter</li><li><a href="intldateformatter.getdatetype.php">IntlDateFormatter::getDateType</a> — Get the datetype used for the IntlDateFormatter</li><li><a href="intldateformatter.geterrorcode.php">IntlDateFormatter::getErrorCode</a> — Get the error code from last operation</li><li><a href="intldateformatter.geterrormessage.php">IntlDateFormatter::getErrorMessage</a> — Get the error text from the last operation</li><li><a href="intldateformatter.getlocale.php">IntlDateFormatter::getLocale</a> — Get the locale used by formatter</li><li><a href="intldateformatter.getpattern.php">IntlDateFormatter::getPattern</a> — Get the pattern used for the IntlDateFormatter</li><li><a href="intldateformatter.gettimetype.php">IntlDateFormatter::getTimeType</a> — Get the timetype used for the IntlDateFormatter</li><li><a href="intldateformatter.gettimezoneid.php">IntlDateFormatter::getTimeZoneId</a> — Get the timezone-id used for the IntlDateFormatter</li><li><a href="intldateformatter.getcalendarobject.php">IntlDateFormatter::getCalendarObject</a> — Get copy of formatterʼs calendar object</li><li><a href="intldateformatter.gettimezone.php">IntlDateFormatter::getTimeZone</a> — Get formatterʼs timezone</li><li><a href="intldateformatter.islenient.php">IntlDateFormatter::isLenient</a> — Get the lenient used for the IntlDateFormatter</li><li><a href="intldateformatter.localtime.php">IntlDateFormatter::localtime</a> — Parse string to a field-based time value</li><li><a href="intldateformatter.parse.php">IntlDateFormatter::parse</a> — Parse string to a timestamp value</li><li><a href="intldateformatter.setcalendar.php">IntlDateFormatter::setCalendar</a> — Sets the calendar type used by the formatter</li><li><a href="intldateformatter.setlenient.php">IntlDateFormatter::setLenient</a> — Set the leniency of the parser</li><li><a href="intldateformatter.setpattern.php">IntlDateFormatter::setPattern</a> — Set the pattern used for the IntlDateFormatter</li><li><a href="intldateformatter.settimezone.php">IntlDateFormatter::setTimeZone</a> — Sets formatterʼs timezone</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/dateformatter.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.intldateformatter%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.intldateformatter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.intldateformatter.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
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
                                                <li class="">
                            <a href="class.intlgregoriancalendar.php" title="IntlGregorianCalendar">IntlGregorianCalendar</a>
                        </li>
                                                <li class="">
                            <a href="class.intltimezone.php" title="IntlTimeZone">IntlTimeZone</a>
                        </li>
                                                <li class="current">
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
