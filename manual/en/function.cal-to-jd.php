<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: cal_to_jd - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.cal-to-jd.php">
 <link rel="shorturl" href="https://www.php.net/cal-to-jd">
 <link rel="alternate" href="https://www.php.net/cal-to-jd" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.calendar.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.cal-info.php">
 <link rel="next" href="https://www.php.net/manual/en/function.easter-date.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.cal-to-jd.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.cal-to-jd.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.cal-to-jd.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.cal-to-jd.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.cal-to-jd.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.cal-to-jd.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.cal-to-jd.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.cal-to-jd.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.cal-to-jd.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.cal-to-jd.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.cal-to-jd.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Converts from a supported calendar to Julian Day Count" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: cal_to_jd - Manual" />
<meta name="twitter:description" content="Converts from a supported calendar to Julian Day Count" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: cal_to_jd - Manual" />
<meta itemprop="description" content="Converts from a supported calendar to Julian Day Count" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Converts from a supported calendar to Julian Day Count" />

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
        <a href="function.easter-date.php">
          easter_date &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.cal-info.php">
          &laquo; cal_info        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      <li><a href='book.calendar.php'>Calendar</a></li>      <li><a href='ref.calendar.php'>Calendar Functions</a></li>      </ul>
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
            <option value='en/function.cal-to-jd.php' selected="selected">English</option>
            <option value='de/function.cal-to-jd.php'>German</option>
            <option value='es/function.cal-to-jd.php'>Spanish</option>
            <option value='fr/function.cal-to-jd.php'>French</option>
            <option value='it/function.cal-to-jd.php'>Italian</option>
            <option value='ja/function.cal-to-jd.php'>Japanese</option>
            <option value='pt_BR/function.cal-to-jd.php'>Brazilian Portuguese</option>
            <option value='ru/function.cal-to-jd.php'>Russian</option>
            <option value='tr/function.cal-to-jd.php'>Turkish</option>
            <option value='uk/function.cal-to-jd.php'>Ukrainian</option>
            <option value='zh/function.cal-to-jd.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.cal-to-jd" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">cal_to_jd</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">cal_to_jd</span> &mdash; <span class="dc-title">Converts from a supported calendar to Julian Day Count</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.cal-to-jd-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>cal_to_jd</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$calendar</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$month</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$day</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$year</code></span><br>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>cal_to_jd()</strong></span> calculates the Julian day count
   for a date in the specified <code class="parameter">calendar</code>.
   Supported <code class="parameter">calendar</code>s are
   <strong><code><a href="calendar.constants.php#constant.cal-gregorian">CAL_GREGORIAN</a></code></strong>,
   <strong><code><a href="calendar.constants.php#constant.cal-julian">CAL_JULIAN</a></code></strong>,
   <strong><code><a href="calendar.constants.php#constant.cal-jewish">CAL_JEWISH</a></code></strong> and
   <strong><code><a href="calendar.constants.php#constant.cal-french">CAL_FRENCH</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.cal-to-jd-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">calendar</code></dt>
     <dd>
      <p class="para">
       Calendar to convert from, one of 
       <strong><code><a href="calendar.constants.php#constant.cal-gregorian">CAL_GREGORIAN</a></code></strong>,
       <strong><code><a href="calendar.constants.php#constant.cal-julian">CAL_JULIAN</a></code></strong>,
       <strong><code><a href="calendar.constants.php#constant.cal-jewish">CAL_JEWISH</a></code></strong> or
       <strong><code><a href="calendar.constants.php#constant.cal-french">CAL_FRENCH</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">month</code></dt>
     <dd>
      <p class="para">
       The month as a number, the valid range depends 
       on the <code class="parameter">calendar</code>
      </p>
     </dd>
    
    
     <dt><code class="parameter">day</code></dt>
     <dd>
      <p class="para">
       The day as a number, the valid range depends 
       on the <code class="parameter">calendar</code>
      </p>
     </dd>
    
    
     <dt><code class="parameter">year</code></dt>
     <dd>
      <p class="para">
       The year as a number, the valid range depends 
       on the <code class="parameter">calendar</code>
      </p>
     </dd>
      
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.cal-to-jd-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A Julian Day number.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.cal-to-jd-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.cal-from-jd.php" class="function" rel="rdfs-seeAlso">cal_from_jd()</a> - Converts from Julian Day Count to a supported calendar</span></li>
    <li><span class="function"><a href="function.frenchtojd.php" class="function" rel="rdfs-seeAlso">frenchtojd()</a> - Converts a date from the French Republican Calendar to a Julian Day Count</span></li> 
    <li><span class="function"><a href="function.gregoriantojd.php" class="function" rel="rdfs-seeAlso">gregoriantojd()</a> - Converts a Gregorian date to Julian Day Count</span></li>  
    <li><span class="function"><a href="function.jewishtojd.php" class="function" rel="rdfs-seeAlso">jewishtojd()</a> - Converts a date in the Jewish Calendar to Julian Day Count</span></li>  
    <li><span class="function"><a href="function.juliantojd.php" class="function" rel="rdfs-seeAlso">juliantojd()</a> - Converts a Julian Calendar date to Julian Day Count</span></li>  
    <li><span class="function"><a href="function.unixtojd.php" class="function" rel="rdfs-seeAlso">unixtojd()</a> - Convert Unix timestamp to Julian Day</span></li>
   </ul>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/calendar/functions/cal-to-jd.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.cal-to-jd%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.cal-to-jd&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.cal-to-jd.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119904">  <div class="votes">
    <div id="Vu119904">
    <a href="/manual/vote-note.php?id=119904&amp;page=function.cal-to-jd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119904">
    <a href="/manual/vote-note.php?id=119904&amp;page=function.cal-to-jd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119904" title="63% like this...">
    3
    </div>
  </div>
  <a href="#119904" class="name">
  <strong class="user"><em>ashton at ieee dot org</em></strong></a><a class="genanchor" href="#119904"> &para;</a><div class="date" title="2016-09-18 07:46"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119904">
<div class="phpcode"><code><span class="html">Julian days begin at noon, while the days of the Gregorian and Julian calendars are usually thought of as beginning at midnight. For the Gregorian and Julian calendars, the function behaves as if the conversion were performed at noon.</span></code></div>
  </div>
 </div>
  <div class="note" id="119905">  <div class="votes">
    <div id="Vu119905">
    <a href="/manual/vote-note.php?id=119905&amp;page=function.cal-to-jd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119905">
    <a href="/manual/vote-note.php?id=119905&amp;page=function.cal-to-jd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119905" title="50% like this...">
    0
    </div>
  </div>
  <a href="#119905" class="name">
  <strong class="user"><em>ashton at ieee dot org</em></strong></a><a class="genanchor" href="#119905"> &para;</a><div class="date" title="2016-09-18 07:48"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119905">
<div class="phpcode"><code><span class="html">The earliest supported date in the Julian calendar is January 2, 4713 BC. The corresponding Julian day count is 1. PHP treats -4713 as equal to 4713 BC, and does not allow the year 0; this practice is different than the custom of astronomers, who treat -4712 as equal to 4713 BC.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.cal-to-jd&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.cal-to-jd.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.calendar.php">Calendar Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.cal-days-in-month.php" title="cal_&#8203;days_&#8203;in_&#8203;month">cal_&#8203;days_&#8203;in_&#8203;month</a>
                        </li>
                                                <li class="">
                            <a href="function.cal-from-jd.php" title="cal_&#8203;from_&#8203;jd">cal_&#8203;from_&#8203;jd</a>
                        </li>
                                                <li class="">
                            <a href="function.cal-info.php" title="cal_&#8203;info">cal_&#8203;info</a>
                        </li>
                                                <li class="current">
                            <a href="function.cal-to-jd.php" title="cal_&#8203;to_&#8203;jd">cal_&#8203;to_&#8203;jd</a>
                        </li>
                                                <li class="">
                            <a href="function.easter-date.php" title="easter_&#8203;date">easter_&#8203;date</a>
                        </li>
                                                <li class="">
                            <a href="function.easter-days.php" title="easter_&#8203;days">easter_&#8203;days</a>
                        </li>
                                                <li class="">
                            <a href="function.frenchtojd.php" title="frenchtojd">frenchtojd</a>
                        </li>
                                                <li class="">
                            <a href="function.gregoriantojd.php" title="gregoriantojd">gregoriantojd</a>
                        </li>
                                                <li class="">
                            <a href="function.jddayofweek.php" title="jddayofweek">jddayofweek</a>
                        </li>
                                                <li class="">
                            <a href="function.jdmonthname.php" title="jdmonthname">jdmonthname</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtofrench.php" title="jdtofrench">jdtofrench</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtogregorian.php" title="jdtogregorian">jdtogregorian</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtojewish.php" title="jdtojewish">jdtojewish</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtojulian.php" title="jdtojulian">jdtojulian</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtounix.php" title="jdtounix">jdtounix</a>
                        </li>
                                                <li class="">
                            <a href="function.jewishtojd.php" title="jewishtojd">jewishtojd</a>
                        </li>
                                                <li class="">
                            <a href="function.juliantojd.php" title="juliantojd">juliantojd</a>
                        </li>
                                                <li class="">
                            <a href="function.unixtojd.php" title="unixtojd">unixtojd</a>
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
