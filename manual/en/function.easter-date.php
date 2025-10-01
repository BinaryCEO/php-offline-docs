<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: easter_date - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.easter-date.php">
 <link rel="shorturl" href="https://www.php.net/easter-date">
 <link rel="alternate" href="https://www.php.net/easter-date" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.calendar.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.cal-to-jd.php">
 <link rel="next" href="https://www.php.net/manual/en/function.easter-days.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.easter-date.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.easter-date.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.easter-date.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.easter-date.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.easter-date.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.easter-date.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.easter-date.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.easter-date.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.easter-date.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.easter-date.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.easter-date.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get Unix timestamp for local midnight on Easter of a given year" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: easter_date - Manual" />
<meta name="twitter:description" content="Get Unix timestamp for local midnight on Easter of a given year" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: easter_date - Manual" />
<meta itemprop="description" content="Get Unix timestamp for local midnight on Easter of a given year" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get Unix timestamp for local midnight on Easter of a given year" />

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
        <a href="function.easter-days.php">
          easter_days &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.cal-to-jd.php">
          &laquo; cal_to_jd        </a>
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
            <option value='en/function.easter-date.php' selected="selected">English</option>
            <option value='de/function.easter-date.php'>German</option>
            <option value='es/function.easter-date.php'>Spanish</option>
            <option value='fr/function.easter-date.php'>French</option>
            <option value='it/function.easter-date.php'>Italian</option>
            <option value='ja/function.easter-date.php'>Japanese</option>
            <option value='pt_BR/function.easter-date.php'>Brazilian Portuguese</option>
            <option value='ru/function.easter-date.php'>Russian</option>
            <option value='tr/function.easter-date.php'>Turkish</option>
            <option value='uk/function.easter-date.php'>Ukrainian</option>
            <option value='zh/function.easter-date.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.easter-date" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">easter_date</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">easter_date</span> &mdash; <span class="dc-title">Get Unix timestamp for local midnight on Easter of a given year</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.easter-date-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>easter_date</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$year</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = <strong><code><a href="calendar.constants.php#constant.cal-easter-default">CAL_EASTER_DEFAULT</a></code></strong></span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Returns the Unix timestamp corresponding to midnight on Easter of
   the given year.
  </p>
  <p class="para">
   The date of Easter Day was defined by the Council of Nicaea in
   AD325 as the Sunday after the first full moon which falls on or
   after the Spring Equinox.  The Equinox is assumed to always fall
   on 21st March, so the calculation reduces to determining the date
   of the full moon and the date of the following Sunday.  The
   algorithm used here was introduced around the year 532 by
   Dionysius Exiguus.  Under the Julian Calendar (for years before
   1753) a simple 19-year cycle is used to track the phases of the
   Moon.  Under the Gregorian Calendar (for years after 1753 -
   devised by Clavius and Lilius, and introduced by Pope Gregory
   XIII in October 1582, and into Britain and its then colonies in
   September 1752) two correction factors are added to make the
   cycle more accurate.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.easter-date-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">year</code></dt>
     <dd>
      <p class="para">
       The year must be a number between 1970 and 2037 for 32-bit systems, or between 1970 and 2,000,000,000 for 64-bit systems.
       If omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, defaults to the current year according to the local time.
      </p>
     </dd>
      
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       Allows Easter dates to be calculated based on the Julian calendar when set
       to <strong><code><a href="calendar.constants.php#constant.cal-easter-always-julian">CAL_EASTER_ALWAYS_JULIAN</a></code></strong>. See also <a href="calendar.constants.php" class="link">calendar constants</a>.
       </p>
     </dd>
      
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.easter-date-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The easter date as a unix timestamp.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.easter-date-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the year is earlier than 1970 or later than 2037
   when running on a 32-bit system, or later than 2,000,000,000 on a 64-bit system.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.easter-date-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.3.0</td>
      <td>
       On 64-bit systems, the <code class="parameter">year</code> parameter now accepts values within the range of 1970 to 2,000,000,000.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">year</code> is nullable now.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is now thrown when
       <code class="parameter">year</code> is outside the allowed range.
       Previously, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was raised
       and the function returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.easter-date-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2178">
    <p><strong>Example #1 <span class="function"><strong>easter_date()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"M-d-Y"</span><span style="color: #007700">, </span><span style="color: #0000BB">easter_date</span><span style="color: #007700">(</span><span style="color: #0000BB">1999</span><span style="color: #007700">));        </span><span style="color: #FF8000">// Apr-04-1999<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"M-d-Y"</span><span style="color: #007700">, </span><span style="color: #0000BB">easter_date</span><span style="color: #007700">(</span><span style="color: #0000BB">2000</span><span style="color: #007700">));        </span><span style="color: #FF8000">// Apr-23-2000<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"M-d-Y"</span><span style="color: #007700">, </span><span style="color: #0000BB">easter_date</span><span style="color: #007700">(</span><span style="color: #0000BB">2001</span><span style="color: #007700">));        </span><span style="color: #FF8000">// Apr-15-2001<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <div class="example" id="example-2179">
    <p><strong>Example #2 Using <span class="function"><strong>easter_date()</strong></span> with <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$timestamp </span><span style="color: #007700">= </span><span style="color: #0000BB">easter_date</span><span style="color: #007700">(</span><span style="color: #0000BB">2023</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$datetime </span><span style="color: #007700">= new </span><span style="color: #0000BB">\DateTime</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$datetime</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setTimestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$timestamp</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$datetime</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'M-d-Y'</span><span style="color: #007700">); </span><span style="color: #FF8000">// Apr-09-2023<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.easter-date-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><strong>easter_date()</strong></span> relies on your system&#039;s C library time
    functions, rather than using PHP&#039;s internal date and time functions. As a
    consequence, <span class="function"><strong>easter_date()</strong></span> uses the
    <code class="literal">TZ</code> environment variable to determine the time zone it
    should operate in, rather than using PHP&#039;s
    <a href="datetime.configuration.php#ini.date.timezone" class="link">default time zone</a>, which may
    result in unexpected behaviour when using this function in conjunction
    with other date functions in PHP.
   </p>
   <p class="para">
    As a workaround, you can use the <span class="function"><a href="function.easter-days.php" class="function">easter_days()</a></span> with
    <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span> and <span class="classname"><a href="class.dateinterval.php" class="classname">DateInterval</a></span> to
    calculate the start of Easter in your PHP time zone as follows:
   </p>
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">get_easter_datetime</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$base </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$year</span><span style="color: #DD0000">-03-21"</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$days </span><span style="color: #007700">= </span><span style="color: #0000BB">easter_days</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">);<br /><br />    return </span><span style="color: #0000BB">$base</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(new </span><span style="color: #0000BB">DateInterval</span><span style="color: #007700">(</span><span style="color: #DD0000">"P</span><span style="color: #007700">{</span><span style="color: #0000BB">$days</span><span style="color: #007700">}</span><span style="color: #DD0000">D"</span><span style="color: #007700">));<br />}<br /><br />foreach (</span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">2012</span><span style="color: #007700">, </span><span style="color: #0000BB">2015</span><span style="color: #007700">) as </span><span style="color: #0000BB">$year</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Easter in %d is on %s\n"</span><span style="color: #007700">,<br />           </span><span style="color: #0000BB">$year</span><span style="color: #007700">,<br />           </span><span style="color: #0000BB">get_easter_datetime</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'F j'</span><span style="color: #007700">));<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <p class="para">The above example will output:</p>
    <div class="example-contents screen">
<div class="notescode"><pre class="notescode">Easter in 2012 is on April 8
Easter in 2013 is on March 31
Easter in 2014 is on April 20
Easter in 2015 is on April 5</pre>
</div>
    </div>
   </div>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.easter-date-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li>
     <span class="function"><a href="function.easter-days.php" class="function" rel="rdfs-seeAlso">easter_days()</a> - Get number of days after March 21 on which Easter falls for a given year</span> for calculating Easter 
     before 1970 or after 2037
    </li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/calendar/functions/easter-date.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.easter-date%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.easter-date&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.easter-date.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83794">  <div class="votes">
    <div id="Vu83794">
    <a href="/manual/vote-note.php?id=83794&amp;page=function.easter-date&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83794">
    <a href="/manual/vote-note.php?id=83794&amp;page=function.easter-date&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83794" title="84% like this...">
    30
    </div>
  </div>
  <a href="#83794" class="name">
  <strong class="user"><em>maxie</em></strong></a><a class="genanchor" href="#83794"> &para;</a><div class="date" title="2008-06-12 01:36"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83794">
<div class="phpcode"><code><span class="html">To compute the correct Easter date for Eastern Orthodox Churches I made a function based on the Meeus Julian algorithm:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">orthodox_eastern</span><span class="keyword">(</span><span class="default">$year</span><span class="keyword">) {
<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$year </span><span class="keyword">% </span><span class="default">4</span><span class="keyword">;
<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$year </span><span class="keyword">% </span><span class="default">7</span><span class="keyword">;
<br />    </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$year </span><span class="keyword">% </span><span class="default">19</span><span class="keyword">;
<br />    </span><span class="default">$d </span><span class="keyword">= (</span><span class="default">19 </span><span class="keyword">* </span><span class="default">$c </span><span class="keyword">+ </span><span class="default">15</span><span class="keyword">) % </span><span class="default">30</span><span class="keyword">;
<br />    </span><span class="default">$e </span><span class="keyword">= (</span><span class="default">2 </span><span class="keyword">* </span><span class="default">$a </span><span class="keyword">+ </span><span class="default">4 </span><span class="keyword">* </span><span class="default">$b </span><span class="keyword">- </span><span class="default">$d </span><span class="keyword">+ </span><span class="default">34</span><span class="keyword">) % </span><span class="default">7</span><span class="keyword">;
<br />    </span><span class="default">$month </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">((</span><span class="default">$d </span><span class="keyword">+ </span><span class="default">$e </span><span class="keyword">+ </span><span class="default">114</span><span class="keyword">) / </span><span class="default">31</span><span class="keyword">);
<br />    </span><span class="default">$day </span><span class="keyword">= ((</span><span class="default">$d </span><span class="keyword">+ </span><span class="default">$e </span><span class="keyword">+ </span><span class="default">114</span><span class="keyword">) % </span><span class="default">31</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">;
<br />    
<br />    </span><span class="default">$de </span><span class="keyword">= </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$month</span><span class="keyword">, </span><span class="default">$day </span><span class="keyword">+ </span><span class="default">13</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">);
<br />    
<br />    return </span><span class="default">$de</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121559">  <div class="votes">
    <div id="Vu121559">
    <a href="/manual/vote-note.php?id=121559&amp;page=function.easter-date&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121559">
    <a href="/manual/vote-note.php?id=121559&amp;page=function.easter-date&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121559" title="85% like this...">
    10
    </div>
  </div>
  <a href="#121559" class="name">
  <strong class="user"><em>Alexander Bliznyuk</em></strong></a><a class="genanchor" href="#121559"> &para;</a><div class="date" title="2017-08-23 10:02"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121559">
<div class="phpcode"><code><span class="html">Thank you, @Maxie, for algorythm for computing Orthodox Easter date.<br />It can be improved though. You added 13 days in order to map Julian calendar to Gregorian.  But 13 days is not a constant. It's an accumulated error fixed in Gregorian and should be calculated with this formula: (int)($year / 100) - (int)($year / 400) - 2</span></code></div>
  </div>
 </div>
  <div class="note" id="96686">  <div class="votes">
    <div id="Vu96686">
    <a href="/manual/vote-note.php?id=96686&amp;page=function.easter-date&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96686">
    <a href="/manual/vote-note.php?id=96686&amp;page=function.easter-date&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96686" title="72% like this...">
    11
    </div>
  </div>
  <a href="#96686" class="name">
  <strong class="user"><em>py dot lebecq at gmail dot com</em></strong></a><a class="genanchor" href="#96686"> &para;</a><div class="date" title="2010-03-11 07:44"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96686">
<div class="phpcode"><code><span class="html">I recently had to write a function that allows me to know if today is a holiday.<br /><br />And in France, we have some holidays which depends on the easter date. Maybe this will be helpful to someone.<br /><br />Just modify in the $holidays array the actual holidays dates of your country.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * This function returns an array of timestamp corresponding to french holidays<br /> */<br /></span><span class="keyword">protected static function </span><span class="default">getHolidays</span><span class="keyword">(</span><span class="default">$year </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />{<br />  if (</span><span class="default">$year </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">)<br />  {<br />    </span><span class="default">$year </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y'</span><span class="keyword">));<br />  }<br />    <br />  </span><span class="default">$easterDate  </span><span class="keyword">= </span><span class="default">easter_date</span><span class="keyword">(</span><span class="default">$year</span><span class="keyword">);<br />  </span><span class="default">$easterDay   </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'j'</span><span class="keyword">, </span><span class="default">$easterDate</span><span class="keyword">);<br />  </span><span class="default">$easterMonth </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'n'</span><span class="keyword">, </span><span class="default">$easterDate</span><span class="keyword">);<br />  </span><span class="default">$easterYear   </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y'</span><span class="keyword">, </span><span class="default">$easterDate</span><span class="keyword">);<br /><br />  </span><span class="default">$holidays </span><span class="keyword">= array(<br />    </span><span class="comment">// These days have a fixed date<br />    </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">,  </span><span class="default">1</span><span class="keyword">,  </span><span class="default">$year</span><span class="keyword">),  </span><span class="comment">// 1er janvier<br />    </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">,  </span><span class="default">1</span><span class="keyword">,  </span><span class="default">$year</span><span class="keyword">),  </span><span class="comment">// Fête du travail<br />    </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">,  </span><span class="default">8</span><span class="keyword">,  </span><span class="default">$year</span><span class="keyword">),  </span><span class="comment">// Victoire des alliés<br />    </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">,  </span><span class="default">14</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">),  </span><span class="comment">// Fête nationale<br />    </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">,  </span><span class="default">15</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">),  </span><span class="comment">// Assomption<br />    </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">,  </span><span class="default">$year</span><span class="keyword">),  </span><span class="comment">// Toussaint<br />    </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">),  </span><span class="comment">// Armistice<br />    </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">),  </span><span class="comment">// Noel<br /><br />    // These days have a date depending on easter<br />    </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$easterMonth</span><span class="keyword">, </span><span class="default">$easterDay </span><span class="keyword">+ </span><span class="default">2</span><span class="keyword">,  </span><span class="default">$easterYear</span><span class="keyword">),<br />    </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$easterMonth</span><span class="keyword">, </span><span class="default">$easterDay </span><span class="keyword">+ </span><span class="default">40</span><span class="keyword">, </span><span class="default">$easterYear</span><span class="keyword">),<br />    </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$easterMonth</span><span class="keyword">, </span><span class="default">$easterDay </span><span class="keyword">+ </span><span class="default">50</span><span class="keyword">, </span><span class="default">$easterYear</span><span class="keyword">),<br />  );<br /><br />  </span><span class="default">sort</span><span class="keyword">(</span><span class="default">$holidays</span><span class="keyword">);<br />  <br />  return </span><span class="default">$holidays</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111807">  <div class="votes">
    <div id="Vu111807">
    <a href="/manual/vote-note.php?id=111807&amp;page=function.easter-date&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111807">
    <a href="/manual/vote-note.php?id=111807&amp;page=function.easter-date&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111807" title="60% like this...">
    1
    </div>
  </div>
  <a href="#111807" class="name">
  <strong class="user"><em>Guillaume Dufrene</em></strong></a><a class="genanchor" href="#111807"> &para;</a><div class="date" title="2013-03-30 08:13"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111807">
<div class="phpcode"><code><span class="html">I found a problem with holidays timestamp computation and daylight saving time.<br />An article about it at <a href="http://goo.gl/76t31" rel="nofollow" target="_blank">http://goo.gl/76t31</a> (in french only, sorry).<br /><br />In summary, this year (2013) easter begins before adding an hour for daylight saving time (occured sunday at 3:00). It means that if you do $easter + X, where x is a number of seconds equivalent to one day, 39 days or 50 days, the result is not equals to a midnight timestamp...<br /><br />Here a function to check if a midnight timestamp is equals to an holiday :<br /><br />function isHoliday( $ts ) {<br />// Licence : Creative Commons (BY)<br />// By Webpulser - <a href="http://goo.gl/76t31" rel="nofollow" target="_blank">http://goo.gl/76t31</a><br />  $fixed_holidays = array( ’01-01′, ’01-05′, ’08-05′, ’14-07′, ’15-08′, ’11-11′, ’25-12′ );<br />  $format = ‘d-m’;<br /><br /> $dm = date($format, $ts);<br />  if ( in_array($dm, $fixed_holidays) ) return true;<br /><br /> $easter = easter_date( date(‘Y’, $ts) );<br />  if ( date($format, $easter +   86400) == $dm ) return true;<br />  if ( date($format, $easter + 3369600) == $dm ) return true;<br />  if ( date($format, $easter + 4320000) == $dm ) return true;<br /><br /> return false;<br />}<br /><br />feel free to use / modify.</span></code></div>
  </div>
 </div>
  <div class="note" id="47249">  <div class="votes">
    <div id="Vu47249">
    <a href="/manual/vote-note.php?id=47249&amp;page=function.easter-date&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47249">
    <a href="/manual/vote-note.php?id=47249&amp;page=function.easter-date&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47249" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#47249" class="name">
  <strong class="user"><em>phpuser</em></strong></a><a class="genanchor" href="#47249"> &para;</a><div class="date" title="2004-11-08 08:17"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47249">
<div class="phpcode"><code><span class="html">The algorithm from Bigtree is correct if you add some (int) cast<br /><span class="default">&lt;?php <br />   </span><span class="keyword">function </span><span class="default">easter_date </span><span class="keyword">(</span><span class="default">$Year</span><span class="keyword">) { <br />   <br />       </span><span class="comment">/* <br />       G is the Golden Number-1 <br />       H is 23-Epact (modulo 30) <br />       I is the number of days from 21 March to the Paschal full moon <br />       J is the weekday for the Paschal full moon (0=Sunday, <br />         1=Monday, etc.) <br />       L is the number of days from 21 March to the Sunday on or before <br />         the Paschal full moon (a number between -6 and 28) <br />       */ <br />       <br /><br />         </span><span class="default">$G </span><span class="keyword">= </span><span class="default">$Year </span><span class="keyword">% </span><span class="default">19</span><span class="keyword">; <br />         </span><span class="default">$C </span><span class="keyword">= (int)(</span><span class="default">$Year </span><span class="keyword">/ </span><span class="default">100</span><span class="keyword">); <br />         </span><span class="default">$H </span><span class="keyword">= (int)(</span><span class="default">$C </span><span class="keyword">- (int)(</span><span class="default">$C </span><span class="keyword">/ </span><span class="default">4</span><span class="keyword">) - (int)((</span><span class="default">8</span><span class="keyword">*</span><span class="default">$C</span><span class="keyword">+</span><span class="default">13</span><span class="keyword">) / </span><span class="default">25</span><span class="keyword">) + </span><span class="default">19</span><span class="keyword">*</span><span class="default">$G </span><span class="keyword">+ </span><span class="default">15</span><span class="keyword">) % </span><span class="default">30</span><span class="keyword">; <br />         </span><span class="default">$I </span><span class="keyword">= (int)</span><span class="default">$H </span><span class="keyword">- (int)(</span><span class="default">$H </span><span class="keyword">/ </span><span class="default">28</span><span class="keyword">)*(</span><span class="default">1 </span><span class="keyword">- (int)(</span><span class="default">$H </span><span class="keyword">/ </span><span class="default">28</span><span class="keyword">)*(int)(</span><span class="default">29 </span><span class="keyword">/ (</span><span class="default">$H </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">))*((int)(</span><span class="default">21 </span><span class="keyword">- </span><span class="default">$G</span><span class="keyword">) / </span><span class="default">11</span><span class="keyword">)); <br />         </span><span class="default">$J </span><span class="keyword">= (</span><span class="default">$Year </span><span class="keyword">+ (int)(</span><span class="default">$Year</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">) + </span><span class="default">$I </span><span class="keyword">+ </span><span class="default">2 </span><span class="keyword">- </span><span class="default">$C </span><span class="keyword">+ (int)(</span><span class="default">$C</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">)) % </span><span class="default">7</span><span class="keyword">; <br />         </span><span class="default">$L </span><span class="keyword">= </span><span class="default">$I </span><span class="keyword">- </span><span class="default">$J</span><span class="keyword">; <br />         </span><span class="default">$m </span><span class="keyword">= </span><span class="default">3 </span><span class="keyword">+ (int)((</span><span class="default">$L </span><span class="keyword">+ </span><span class="default">40</span><span class="keyword">) / </span><span class="default">44</span><span class="keyword">); <br />         </span><span class="default">$d </span><span class="keyword">= </span><span class="default">$L </span><span class="keyword">+ </span><span class="default">28 </span><span class="keyword">- </span><span class="default">31 </span><span class="keyword">* ((int)(</span><span class="default">$m </span><span class="keyword">/ </span><span class="default">4</span><span class="keyword">)); <br />         </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$Year</span><span class="keyword">; <br />         </span><span class="default">$E </span><span class="keyword">= </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">); <br /><br />         return </span><span class="default">$E</span><span class="keyword">; <br /><br />   } <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114825">  <div class="votes">
    <div id="Vu114825">
    <a href="/manual/vote-note.php?id=114825&amp;page=function.easter-date&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114825">
    <a href="/manual/vote-note.php?id=114825&amp;page=function.easter-date&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114825" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#114825" class="name">
  <strong class="user"><em>adwil at live dot com</em></strong></a><a class="genanchor" href="#114825"> &para;</a><div class="date" title="2014-04-10 03:01"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114825">
<div class="phpcode"><code><span class="html">Hey, recently I needed a function to get realization dates in online shop, so here it is (ready to go for polish users, please adjust your dates for any other country):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getWorkday</span><span class="keyword">(</span><span class="default">$date1</span><span class="keyword">,</span><span class="default">$workDays</span><span class="keyword">) {<br />        </span><span class="default">$workDays </span><span class="keyword">= (int)</span><span class="default">$workDays</span><span class="keyword">;<br />        if (</span><span class="default">$workDays </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">)<br />            return </span><span class="default">null</span><span class="keyword">;<br /><br />        </span><span class="default">$date1</span><span class="keyword">=</span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'-1 day'</span><span class="keyword">,</span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$date1</span><span class="keyword">));<br /><br />        </span><span class="default">$lastYear </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$hol</span><span class="keyword">=array(</span><span class="string">'01-01'</span><span class="keyword">,</span><span class="string">'01-06'</span><span class="keyword">,</span><span class="string">'05-01'</span><span class="keyword">,</span><span class="string">'05-03'</span><span class="keyword">,</span><span class="string">'08-15'</span><span class="keyword">,</span><span class="string">'11-01'</span><span class="keyword">,</span><span class="string">'11-11'</span><span class="keyword">,</span><span class="string">'12-25'</span><span class="keyword">,</span><span class="string">'12-26'</span><span class="keyword">);  </span><span class="comment">//array of month-date of static holidays (these are from Poland)<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        while (</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$workDays</span><span class="keyword">) {<br />            </span><span class="default">$year </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y'</span><span class="keyword">, </span><span class="default">$date1</span><span class="keyword">);<br />            if (</span><span class="default">$year </span><span class="keyword">!== </span><span class="default">$lastYear</span><span class="keyword">){<br />                </span><span class="default">$lastYear </span><span class="keyword">= </span><span class="default">$year</span><span class="keyword">;<br />                </span><span class="default">$easter </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'m-d'</span><span class="keyword">, </span><span class="default">easter_date</span><span class="keyword">(</span><span class="default">$year</span><span class="keyword">));<br />                </span><span class="default">$date </span><span class="keyword">= </span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$year </span><span class="keyword">. </span><span class="string">'-' </span><span class="keyword">. </span><span class="default">$easter</span><span class="keyword">); </span><span class="comment">// easter<br />                </span><span class="default">$easterSec </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'m-d'</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'+1 day'</span><span class="keyword">, </span><span class="default">$date</span><span class="keyword">)); </span><span class="comment">// easter monday<br />                </span><span class="default">$greens </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'m-d'</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'+49 days'</span><span class="keyword">, </span><span class="default">$date</span><span class="keyword">)); </span><span class="comment">// zielone swiatki<br />                </span><span class="default">$cc </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'m-d'</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'+60 days'</span><span class="keyword">, </span><span class="default">$date</span><span class="keyword">)); </span><span class="comment">// boze cialo<br />                </span><span class="default">$hol</span><span class="keyword">[] = </span><span class="default">$easter</span><span class="keyword">;<br />                </span><span class="default">$hol</span><span class="keyword">[] = </span><span class="default">$easterSec</span><span class="keyword">;<br />                </span><span class="default">$hol</span><span class="keyword">[] = </span><span class="default">$greens</span><span class="keyword">;<br />                </span><span class="default">$hol</span><span class="keyword">[] = </span><span class="default">$cc</span><span class="keyword">;<br />            }<br />            </span><span class="default">$weekDay</span><span class="keyword">=</span><span class="default">date</span><span class="keyword">(</span><span class="string">'w'</span><span class="keyword">,</span><span class="default">$date1</span><span class="keyword">);<br />            if (!(</span><span class="default">$weekDay</span><span class="keyword">==</span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$weekDay</span><span class="keyword">==</span><span class="default">6 </span><span class="keyword">|| </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">date</span><span class="keyword">(</span><span class="string">'m-d'</span><span class="keyword">,</span><span class="default">$date1</span><span class="keyword">),</span><span class="default">$hol</span><span class="keyword">)))<br />                </span><span class="default">$i</span><span class="keyword">++;<br /><br />            </span><span class="default">$date1</span><span class="keyword">=</span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'+1 day'</span><span class="keyword">,</span><span class="default">$date1</span><span class="keyword">);<br />        }<br />        return </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y-m-d'</span><span class="keyword">,</span><span class="default">$date1</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.easter-date&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.easter-date.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.cal-to-jd.php" title="cal_&#8203;to_&#8203;jd">cal_&#8203;to_&#8203;jd</a>
                        </li>
                                                <li class="current">
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
