<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strtotime - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strtotime.php">
 <link rel="shorturl" href="https://www.php.net/strtotime">
 <link rel="alternate" href="https://www.php.net/strtotime" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.datetime.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.strptime.php">
 <link rel="next" href="https://www.php.net/manual/en/function.time.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strtotime.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strtotime.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strtotime.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strtotime.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strtotime.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strtotime.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strtotime.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strtotime.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strtotime.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strtotime.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strtotime.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parse about any English textual datetime description into a Unix timestamp" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strtotime - Manual" />
<meta name="twitter:description" content="Parse about any English textual datetime description into a Unix timestamp" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strtotime - Manual" />
<meta itemprop="description" content="Parse about any English textual datetime description into a Unix timestamp" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parse about any English textual datetime description into a Unix timestamp" />

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
        <a href="function.time.php">
          time &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.strptime.php">
          &laquo; strptime        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      <li><a href='book.datetime.php'>Date/Time</a></li>      <li><a href='ref.datetime.php'>Date/Time Functions</a></li>      </ul>
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
            <option value='en/function.strtotime.php' selected="selected">English</option>
            <option value='de/function.strtotime.php'>German</option>
            <option value='es/function.strtotime.php'>Spanish</option>
            <option value='fr/function.strtotime.php'>French</option>
            <option value='it/function.strtotime.php'>Italian</option>
            <option value='ja/function.strtotime.php'>Japanese</option>
            <option value='pt_BR/function.strtotime.php'>Brazilian Portuguese</option>
            <option value='ru/function.strtotime.php'>Russian</option>
            <option value='tr/function.strtotime.php'>Turkish</option>
            <option value='uk/function.strtotime.php'>Ukrainian</option>
            <option value='zh/function.strtotime.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strtotime" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strtotime</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strtotime</span> &mdash; <span class="dc-title">Parse about any English textual datetime description into a Unix timestamp</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.strtotime-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>strtotime</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$datetime</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$baseTimestamp</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="simpara">
   The function expects to be given a string containing an English date format
   and will try to parse that format into a Unix timestamp (the number of
   seconds since January 1 1970 00:00:00 UTC), relative to the timestamp given
   in <code class="parameter">baseTimestamp</code>, or the current time if
   <code class="parameter">baseTimestamp</code> is not supplied.  The date string parsing
   is defined in <a href="datetime.formats.php" class="link">Date and Time Formats</a>, and
   has several subtle considerations.  Reviewing the full details there is strongly
   recommended.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    The Unix timestamp that this function returns does not contain information
    about time zones. In order to do calculations with date/time information,
    you should use the more capable <span class="classname"><a href="class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span>.
   </p>
  </div>
  <p class="para">
   Each parameter of this function uses the default time zone unless a
   time zone is specified in that parameter.  Be careful not to use
   different time zones in each parameter unless that is intended.
   See <span class="function"><a href="function.date-default-timezone-get.php" class="function">date_default_timezone_get()</a></span> on the various
   ways to define the default time zone.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strtotime-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">datetime</code></dt>
     <dd>
      <p class="para">A date/time string. Valid formats are explained in <a href="datetime.formats.php" class="link">Date and Time Formats</a>.</p>
     </dd>
    
    
     <dt><code class="parameter">baseTimestamp</code></dt>
     <dd>
      <p class="para">
       The timestamp which is used as a base for the calculation of relative
       dates.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.strtotime-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a timestamp on success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.strtotime-errors">
  <h3 class="title">Errors/Exceptions</h3>
   
   <p class="para">
Every call to a date/time function will generate a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
if the time zone is not valid. See also <span class="function"><a href="function.date-default-timezone-set.php" class="function">date_default_timezone_set()</a></span></p>
 
 </div>


 <div class="refsect1 changelog" id="refsect1-function.strtotime-changelog">
  <h3 class="title">Changelog</h3>
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
       <td>8.0.0</td>
       <td>
        <code class="parameter">baseTimestamp</code> is nullable now.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.strtotime-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2308">
    <p><strong>Example #1 A <span class="function"><strong>strtotime()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"now"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"10 September 2000"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"+1 day"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"+1 week"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"+1 week 2 days 4 hours 2 seconds"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"next Thursday"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"last Monday"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2309">
    <p><strong>Example #2 Checking for failure</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'Not Good'</span><span style="color: #007700">;<br /><br />if ((</span><span style="color: #0000BB">$timestamp </span><span style="color: #007700">= </span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)) === </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"The string (</span><span style="color: #0000BB">$str</span><span style="color: #DD0000">) is bogus"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$str</span><span style="color: #DD0000"> == " </span><span style="color: #007700">. </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'l dS \o\f F Y h:i:s A'</span><span style="color: #007700">, </span><span style="color: #0000BB">$timestamp</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.strtotime-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    &quot;Relative&quot; date in this case also means that if a particular component
    of the date/time stamp is not provided, it will be taken verbatim from
    the <code class="parameter">baseTimestamp</code>.  That is, <code class="code">strtotime(&#039;February&#039;)</code>,
    if run on the 31st of May 2022, will be interpreted as <code class="literal">31 February 2022</code>,
    which will overflow into a timestamp on <code class="literal">3 March</code>.
    (In a leap year, it would be <code class="literal">2 March</code>.)  Using
    <code class="code">strtotime(&#039;1 February&#039;)</code> or <code class="code">strtotime(&#039;first day of February&#039;)</code>
    would avoid that problem.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If the number of the year is specified in a two digit format, the values
    between 00-69 are mapped to 2000-2069 and 70-99 to 1970-1999. See the notes
    below for possible differences on 32bit systems (possible dates might end on 
    2038-01-19 03:14:07).
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The valid range of a timestamp is typically from Fri, 13 Dec
    1901 20:45:54 UTC to Tue, 19 Jan 2038 03:14:07 UTC. (These are
    the dates that correspond to the minimum and maximum values for
    a 32-bit signed integer.)
   </p>
   <p class="para">
    For 64-bit versions of PHP, the valid range of a timestamp is effectively
    infinite, as 64 bits can represent approximately 293 billion years in either
    direction.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Using this function for mathematical operations is not advisable.
    It is better to use <span class="methodname"><a href="datetime.add.php" class="methodname">DateTime::add()</a></span> and
    <span class="methodname"><a href="datetime.sub.php" class="methodname">DateTime::sub()</a></span>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.strtotime-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="classname"><a href="class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span></li>
    <li><span class="methodname"><a href="datetimeimmutable.createfromformat.php" class="methodname" rel="rdfs-seeAlso">DateTimeImmutable::createFromFormat()</a> - Parses a time string according to a specified format</span></li>
    <li><a href="datetime.formats.php" class="link">Date and Time Formats</a></li>
    <li><span class="function"><a href="function.checkdate.php" class="function" rel="rdfs-seeAlso">checkdate()</a> - Validate a Gregorian date</span></li>
    <li><span class="function"><a href="function.strptime.php" class="function" rel="rdfs-seeAlso">strptime()</a> - Parse a time/date generated with strftime</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/functions/strtotime.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strtotime%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strtotime&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strtotime.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128319">  <div class="votes">
    <div id="Vu128319">
    <a href="/manual/vote-note.php?id=128319&amp;page=function.strtotime&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128319">
    <a href="/manual/vote-note.php?id=128319&amp;page=function.strtotime&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128319" title="58% like this...">
    14
    </div>
  </div>
  <a href="#128319" class="name">
  <strong class="user"><em>Vyacheslav Belchuk</em></strong></a><a class="genanchor" href="#128319"> &para;</a><div class="date" title="2023-03-17 03:39"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128319">
<div class="phpcode"><code><span class="html">Be careful when using two numbers as the year. I came across this situation:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'24.11.22'</span><span class="keyword">);<br />echo </span><span class="default">date</span><span class="keyword">(</span><span class="string">'d.m.Y H:i:s'</span><span class="keyword">, </span><span class="default">1669324282</span><span class="keyword">)  .  </span><span class="string">"\n\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// But<br /></span><span class="keyword">echo </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'24.11.2022'</span><span class="keyword">);<br />echo </span><span class="default">date</span><span class="keyword">(</span><span class="string">'d.m.Y H:i:s'</span><span class="keyword">, </span><span class="default">1669237200</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br />1669324282<br />25.11.2022 00:11:22<br /><br />1669237200<br />24.11.2022 00:00:00</span></code></div>
  </div>
 </div>
  <div class="note" id="128577">  <div class="votes">
    <div id="Vu128577">
    <a href="/manual/vote-note.php?id=128577&amp;page=function.strtotime&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128577">
    <a href="/manual/vote-note.php?id=128577&amp;page=function.strtotime&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128577" title="58% like this...">
    12
    </div>
  </div>
  <a href="#128577" class="name">
  <strong class="user"><em>info at pipasjourney dot com</em></strong></a><a class="genanchor" href="#128577"> &para;</a><div class="date" title="2023-05-31 10:02"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128577">
<div class="phpcode"><code><span class="html">Be aware of this: 1 month before the 31st day, it will return the same month:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">date</span><span class="keyword">(</span><span class="string">'m'</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'2023-05-30 -1 month'</span><span class="keyword">)) ; </span><span class="comment">//returns 04<br /></span><span class="keyword">echo </span><span class="default">date</span><span class="keyword">(</span><span class="string">'m'</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'2023-05-31 -1 month'</span><span class="keyword">)) ; </span><span class="comment">//returns 05, not 04<br /></span><span class="default">?&gt;<br /></span><br />So, don't use this to operate on the month of the result.<br />A better way to know what month was the previous month would be:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//considering today is 2023-05-31...<br /><br /></span><span class="default">$firstOfThisMonth </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y-m'</span><span class="keyword">) . </span><span class="string">'-01'</span><span class="keyword">; </span><span class="comment">//returns 2023-05-01<br /></span><span class="keyword">echo </span><span class="default">date</span><span class="keyword">(</span><span class="string">'m'</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$firstOfThisMonth </span><span class="keyword">. </span><span class="string">' -1 month'</span><span class="keyword">)) ; </span><span class="comment">//returns 04<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129804">  <div class="votes">
    <div id="Vu129804">
    <a href="/manual/vote-note.php?id=129804&amp;page=function.strtotime&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129804">
    <a href="/manual/vote-note.php?id=129804&amp;page=function.strtotime&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129804" title="64% like this...">
    4
    </div>
  </div>
  <a href="#129804" class="name">
  <strong class="user"><em>elsiland at yahoo dot com</em></strong></a><a class="genanchor" href="#129804"> &para;</a><div class="date" title="2024-10-14 06:46"><strong>11 months ago</strong></div>
  <div class="text" id="Hcom129804">
<div class="phpcode"><code><span class="html">Not sure why, but <br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">"+2 hours"</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">"+2 hrs"</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">"+2 hourss"</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />are returning +2 hours, -2 hours, +8 hours. The latter two should be errors instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="129924">  <div class="votes">
    <div id="Vu129924">
    <a href="/manual/vote-note.php?id=129924&amp;page=function.strtotime&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129924">
    <a href="/manual/vote-note.php?id=129924&amp;page=function.strtotime&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129924" title="60% like this...">
    1
    </div>
  </div>
  <a href="#129924" class="name">
  <strong class="user"><em>event at mail dot de</em></strong></a><a class="genanchor" href="#129924"> &para;</a><div class="date" title="2024-12-20 12:59"><strong>9 months ago</strong></div>
  <div class="text" id="Hcom129924">
<div class="phpcode"><code><span class="html">'timestamp_sdt' for counting from zero hours of a specific day<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="keyword">echo </span><span class="default">$timestamp_sdt </span><span class="keyword">= </span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">date</span><span class="keyword">(</span><span class="string">'d.m.Y'</span><span class="keyword">,</span><span class="default">time</span><span class="keyword">()).</span><span class="string">'00.00.00'</span><span class="keyword">)*</span><span class="default">1000</span><span class="keyword">; echo </span><span class="string">'&lt;br&gt;&lt;br&gt;'</span><span class="keyword">;<br /><br />echo </span><span class="default">date</span><span class="keyword">(</span><span class="string">'d.m.Y H.i.s'</span><span class="keyword">, </span><span class="default">$timestamp_sdt</span><span class="keyword">/</span><span class="default">1000</span><span class="keyword">); echo </span><span class="string">'&lt;br&gt;&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />will give out:<br /><br />1734649200000<br /><br />20.12.2024 00.00.00</span></code></div>
  </div>
 </div>
  <div class="note" id="129353">  <div class="votes">
    <div id="Vu129353">
    <a href="/manual/vote-note.php?id=129353&amp;page=function.strtotime&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129353">
    <a href="/manual/vote-note.php?id=129353&amp;page=function.strtotime&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129353" title="50% like this...">
    0
    </div>
  </div>
  <a href="#129353" class="name">
  <strong class="user"><em>et dot coder at gmail dot com</em></strong></a><a class="genanchor" href="#129353"> &para;</a><div class="date" title="2024-03-25 09:25"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129353">
<div class="phpcode"><code><span class="html">&gt; The Unix timestamp that this function returns does not contain information about time zones. In order to do calculations with date/time information, you should use the more capable DateTimeImmutable.<br /><br />important - does not contain<br /><br /><span class="default">&lt;?php<br />date_default_timezone_set</span><span class="keyword">(</span><span class="string">'Europe/Berlin'</span><span class="keyword">);<br /><br /></span><span class="comment">// ....  a lot of code <br /><br /></span><span class="keyword">echo </span><span class="default">$a </span><span class="keyword">= </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'yesterday 00:00'</span><span class="keyword">);<br /><br /></span><span class="comment">// in $a hour = 23:00:00 and you may not know about it<br />// <a href="https://onlinephp.io/c/ef696" rel="nofollow" target="_blank">https://onlinephp.io/c/ef696</a><br />// use DateTimeImmutable</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130478">  <div class="votes">
    <div id="Vu130478">
    <a href="/manual/vote-note.php?id=130478&amp;page=function.strtotime&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130478">
    <a href="/manual/vote-note.php?id=130478&amp;page=function.strtotime&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130478" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#130478" class="name">
  <strong class="user"><em>PaxtezJustFirstpart at gmail dot com</em></strong></a><a class="genanchor" href="#130478"> &para;</a><div class="date" title="2025-09-11 04:35"><strong>18 days ago</strong></div>
  <div class="text" id="Hcom130478">
<div class="phpcode"><code><span class="html">An interesting gotcha I found today which took a second to track down.<br /><br />strtotime will return false with an empty string, or something that is clearly not a date.  But whitespace returns the current time.<br /><br /><span class="default">&lt;?php<br />$date </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$utc </span><span class="keyword">= </span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$utc</span><span class="keyword">);<br /><br /></span><span class="default">$date </span><span class="keyword">= </span><span class="string">'notADate'</span><span class="keyword">;<br /></span><span class="default">$utc </span><span class="keyword">= </span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$utc</span><span class="keyword">);<br /><br /></span><span class="default">$date </span><span class="keyword">= </span><span class="string">' '</span><span class="keyword">;<br /></span><span class="default">$utc </span><span class="keyword">= </span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$utc</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Will return:<br />string(0) ""<br />bool(false)<br />string(8) "notADate"<br />bool(false)<br />string(1) " "<br />int(1757608141)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strtotime&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strtotime.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.datetime.php">Date/Time Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.checkdate.php" title="checkdate">checkdate</a>
                        </li>
                                                <li class="">
                            <a href="function.date.php" title="date">date</a>
                        </li>
                                                <li class="">
                            <a href="function.date-add.php" title="date_&#8203;add">date_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.date-create.php" title="date_&#8203;create">date_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.date-create-from-format.php" title="date_&#8203;create_&#8203;from_&#8203;format">date_&#8203;create_&#8203;from_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.date-create-immutable.php" title="date_&#8203;create_&#8203;immutable">date_&#8203;create_&#8203;immutable</a>
                        </li>
                                                <li class="">
                            <a href="function.date-create-immutable-from-format.php" title="date_&#8203;create_&#8203;immutable_&#8203;from_&#8203;format">date_&#8203;create_&#8203;immutable_&#8203;from_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.date-date-set.php" title="date_&#8203;date_&#8203;set">date_&#8203;date_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.date-default-timezone-get.php" title="date_&#8203;default_&#8203;timezone_&#8203;get">date_&#8203;default_&#8203;timezone_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.date-default-timezone-set.php" title="date_&#8203;default_&#8203;timezone_&#8203;set">date_&#8203;default_&#8203;timezone_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.date-diff.php" title="date_&#8203;diff">date_&#8203;diff</a>
                        </li>
                                                <li class="">
                            <a href="function.date-format.php" title="date_&#8203;format">date_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.date-get-last-errors.php" title="date_&#8203;get_&#8203;last_&#8203;errors">date_&#8203;get_&#8203;last_&#8203;errors</a>
                        </li>
                                                <li class="">
                            <a href="function.date-interval-create-from-date-string.php" title="date_&#8203;interval_&#8203;create_&#8203;from_&#8203;date_&#8203;string">date_&#8203;interval_&#8203;create_&#8203;from_&#8203;date_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.date-interval-format.php" title="date_&#8203;interval_&#8203;format">date_&#8203;interval_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.date-isodate-set.php" title="date_&#8203;isodate_&#8203;set">date_&#8203;isodate_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.date-modify.php" title="date_&#8203;modify">date_&#8203;modify</a>
                        </li>
                                                <li class="">
                            <a href="function.date-offset-get.php" title="date_&#8203;offset_&#8203;get">date_&#8203;offset_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.date-parse.php" title="date_&#8203;parse">date_&#8203;parse</a>
                        </li>
                                                <li class="">
                            <a href="function.date-parse-from-format.php" title="date_&#8203;parse_&#8203;from_&#8203;format">date_&#8203;parse_&#8203;from_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.date-sub.php" title="date_&#8203;sub">date_&#8203;sub</a>
                        </li>
                                                <li class="">
                            <a href="function.date-sun-info.php" title="date_&#8203;sun_&#8203;info">date_&#8203;sun_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.date-sunrise.php" title="date_&#8203;sunrise">date_&#8203;sunrise</a>
                        </li>
                                                <li class="">
                            <a href="function.date-sunset.php" title="date_&#8203;sunset">date_&#8203;sunset</a>
                        </li>
                                                <li class="">
                            <a href="function.date-time-set.php" title="date_&#8203;time_&#8203;set">date_&#8203;time_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.date-timestamp-get.php" title="date_&#8203;timestamp_&#8203;get">date_&#8203;timestamp_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.date-timestamp-set.php" title="date_&#8203;timestamp_&#8203;set">date_&#8203;timestamp_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.date-timezone-get.php" title="date_&#8203;timezone_&#8203;get">date_&#8203;timezone_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.date-timezone-set.php" title="date_&#8203;timezone_&#8203;set">date_&#8203;timezone_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.getdate.php" title="getdate">getdate</a>
                        </li>
                                                <li class="">
                            <a href="function.gettimeofday.php" title="gettimeofday">gettimeofday</a>
                        </li>
                                                <li class="">
                            <a href="function.gmdate.php" title="gmdate">gmdate</a>
                        </li>
                                                <li class="">
                            <a href="function.gmmktime.php" title="gmmktime">gmmktime</a>
                        </li>
                                                <li class="">
                            <a href="function.gmstrftime.php" title="gmstrftime">gmstrftime</a>
                        </li>
                                                <li class="">
                            <a href="function.idate.php" title="idate">idate</a>
                        </li>
                                                <li class="">
                            <a href="function.localtime.php" title="localtime">localtime</a>
                        </li>
                                                <li class="">
                            <a href="function.microtime.php" title="microtime">microtime</a>
                        </li>
                                                <li class="">
                            <a href="function.mktime.php" title="mktime">mktime</a>
                        </li>
                                                <li class="">
                            <a href="function.strftime.php" title="strftime">strftime</a>
                        </li>
                                                <li class="">
                            <a href="function.strptime.php" title="strptime">strptime</a>
                        </li>
                                                <li class="current">
                            <a href="function.strtotime.php" title="strtotime">strtotime</a>
                        </li>
                                                <li class="">
                            <a href="function.time.php" title="time">time</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-abbreviations-list.php" title="timezone_&#8203;abbreviations_&#8203;list">timezone_&#8203;abbreviations_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-identifiers-list.php" title="timezone_&#8203;identifiers_&#8203;list">timezone_&#8203;identifiers_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-location-get.php" title="timezone_&#8203;location_&#8203;get">timezone_&#8203;location_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-name-from-abbr.php" title="timezone_&#8203;name_&#8203;from_&#8203;abbr">timezone_&#8203;name_&#8203;from_&#8203;abbr</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-name-get.php" title="timezone_&#8203;name_&#8203;get">timezone_&#8203;name_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-offset-get.php" title="timezone_&#8203;offset_&#8203;get">timezone_&#8203;offset_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-open.php" title="timezone_&#8203;open">timezone_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-transitions-get.php" title="timezone_&#8203;transitions_&#8203;get">timezone_&#8203;transitions_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-version-get.php" title="timezone_&#8203;version_&#8203;get">timezone_&#8203;version_&#8203;get</a>
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
