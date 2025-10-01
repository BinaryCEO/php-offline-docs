<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: date - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.date.php">
 <link rel="shorturl" href="https://www.php.net/date">
 <link rel="alternate" href="https://www.php.net/date" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.datetime.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.checkdate.php">
 <link rel="next" href="https://www.php.net/manual/en/function.date-add.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.date.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.date.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.date.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.date.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.date.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.date.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.date.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.date.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.date.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.date.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.date.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Format a Unix timestamp" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: date - Manual" />
<meta name="twitter:description" content="Format a Unix timestamp" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: date - Manual" />
<meta itemprop="description" content="Format a Unix timestamp" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Format a Unix timestamp" />

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
        <a href="function.date-add.php">
          date_add &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.checkdate.php">
          &laquo; checkdate        </a>
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
            <option value='en/function.date.php' selected="selected">English</option>
            <option value='de/function.date.php'>German</option>
            <option value='es/function.date.php'>Spanish</option>
            <option value='fr/function.date.php'>French</option>
            <option value='it/function.date.php'>Italian</option>
            <option value='ja/function.date.php'>Japanese</option>
            <option value='pt_BR/function.date.php'>Brazilian Portuguese</option>
            <option value='ru/function.date.php'>Russian</option>
            <option value='tr/function.date.php'>Turkish</option>
            <option value='uk/function.date.php'>Ukrainian</option>
            <option value='zh/function.date.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.date" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">date</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date</span> &mdash; <span class="dc-title">Format a Unix timestamp</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.date-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>date</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$timestamp</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns a string formatted according to the given format string using the
   given integer <code class="parameter">timestamp</code> (Unix timestamp) or the current time
   if no timestamp is given. In other words, <code class="parameter">timestamp</code>
   is optional and defaults to the value of <span class="function"><a href="function.time.php" class="function">time()</a></span>.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Unix timestamps do not handle timezones. Use the
    <span class="classname"><a href="class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span> class, and its
    <span class="methodname"><a href="datetime.format.php" class="methodname">DateTimeInterface::format()</a></span> formatting method to
    format date/time information with a timezone attached.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.date-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">format</code></dt>
    <dd>
     <p class="para">
      Format accepted by <span class="methodname"><a href="datetime.format.php" class="methodname">DateTimeInterface::format()</a></span>.
     </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        <span class="function"><strong>date()</strong></span> will always generate
        <code class="literal">000000</code> as microseconds since it takes an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
        parameter, whereas <span class="methodname"><a href="datetime.format.php" class="methodname">DateTimeInterface::format()</a></span> does
        support microseconds if an object of type
        <span class="interfacename"><a href="class.datetimeinterface.php" class="interfacename">DateTimeInterface</a></span> was created with microseconds.
       </span>
      </p></blockquote>
    </dd>
   

   
<dt><code class="parameter">timestamp</code></dt><dd><p class="para">
The optional <code class="parameter">timestamp</code> parameter is an
<span class="type"><a href="language.types.integer.php" class="type int">int</a></span> Unix timestamp that defaults to the current
local time if <code class="parameter">timestamp</code> is omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>. In other
words, it defaults to the value of <span class="function"><a href="function.time.php" class="function">time()</a></span>.
</p></dd>

  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.date-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a formatted date string.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.date-errors">
  <h3 class="title">Errors/Exceptions</h3>

   <p class="para">
Every call to a date/time function will generate a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
if the time zone is not valid. See also <span class="function"><a href="function.date-default-timezone-set.php" class="function">date_default_timezone_set()</a></span></p>

 </div>


 <div class="refsect1 changelog" id="refsect1-function.date-changelog">
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
        <code class="parameter">timestamp</code> is nullable now.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.date-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2267">
    <p><strong>Example #1 <span class="function"><strong>date()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// set the default timezone to use.<br /></span><span style="color: #0000BB">date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'UTC'</span><span style="color: #007700">);<br /><br /><br /></span><span style="color: #FF8000">// Prints something like: Monday<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"l"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Prints something like: Monday 8th of August 2005 03:12:46 PM<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'l jS \of F Y h:i:s A'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Prints: July 1, 2000 is on a Saturday<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"July 1, 2000 is on a " </span><span style="color: #007700">. </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"l"</span><span style="color: #007700">, </span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">7</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2000</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">/* use the constants in the format parameter */<br />// prints something like: Wed, 25 Sep 2013 15:28:57 -0700<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">DATE_RFC2822</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// prints something like: 2000-07-01T00:00:00+00:00<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">DATE_ATOM</span><span style="color: #007700">, </span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">7</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2000</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   You can prevent a recognized character in the format string from being
   expanded by escaping it with a preceding backslash. If the character with
   a backslash is already a special sequence, you may need to also escape
   the backslash.
   <div class="example" id="example-2268">
    <p><strong>Example #2 Escaping characters in <span class="function"><strong>date()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// prints something like: Wednesday the 15th<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'l \t\h\e jS'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   It is possible to use <span class="function"><strong>date()</strong></span> and
   <span class="function"><a href="function.mktime.php" class="function">mktime()</a></span> together to find dates in the future
   or the past.
   <div class="example" id="example-2269">
    <p><strong>Example #3 <span class="function"><strong>date()</strong></span> and <span class="function"><a href="function.mktime.php" class="function">mktime()</a></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$tomorrow  </span><span style="color: #007700">= </span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">)  , </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">)+</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$lastmonth </span><span style="color: #007700">= </span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">)-</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">),   </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$nextyear  </span><span style="color: #007700">= </span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">),   </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">),   </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">)+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     This can be more reliable than simply adding or subtracting the number
     of seconds in a day or month to a timestamp because of daylight saving
     time.
    </p>
   </p></blockquote>
  </p>
  <p class="para">
   Some examples of <span class="function"><strong>date()</strong></span> formatting. Note that
   you should escape any other characters, as any which currently
   have a special meaning will produce undesirable results, and
   other characters may be assigned meaning in future PHP versions.
   When escaping, be sure to use single quotes to prevent characters
   like \n from becoming newlines.
   <div class="example" id="example-2270">
    <p><strong>Example #4 <span class="function"><strong>date()</strong></span> Formatting</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the<br />// Mountain Standard Time (MST) Time Zone<br /><br /></span><span style="color: #0000BB">$today </span><span style="color: #007700">= </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"F j, Y, g:i a"</span><span style="color: #007700">);                 </span><span style="color: #FF8000">// March 10, 2001, 5:16 pm<br /></span><span style="color: #0000BB">$today </span><span style="color: #007700">= </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m.d.y"</span><span style="color: #007700">);                         </span><span style="color: #FF8000">// 03.10.01<br /></span><span style="color: #0000BB">$today </span><span style="color: #007700">= </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"j, n, Y"</span><span style="color: #007700">);                       </span><span style="color: #FF8000">// 10, 3, 2001<br /></span><span style="color: #0000BB">$today </span><span style="color: #007700">= </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Ymd"</span><span style="color: #007700">);                           </span><span style="color: #FF8000">// 20010310<br /></span><span style="color: #0000BB">$today </span><span style="color: #007700">= </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'h-i-s, j-m-y, it is w Day'</span><span style="color: #007700">);     </span><span style="color: #FF8000">// 05-16-18, 10-03-01, 1631 1618 6 Satpm01<br /></span><span style="color: #0000BB">$today </span><span style="color: #007700">= </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'\i\t \i\s \t\h\e jS \d\a\y.'</span><span style="color: #007700">);   </span><span style="color: #FF8000">// it is the 10th day.<br /></span><span style="color: #0000BB">$today </span><span style="color: #007700">= </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"D M j G:i:s T Y"</span><span style="color: #007700">);               </span><span style="color: #FF8000">// Sat Mar 10 17:16:18 MST 2001<br /></span><span style="color: #0000BB">$today </span><span style="color: #007700">= </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'H:m:s \m \i\s\ \m\o\n\t\h'</span><span style="color: #007700">);     </span><span style="color: #FF8000">// 17:03:18 m is month<br /></span><span style="color: #0000BB">$today </span><span style="color: #007700">= </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"H:i:s"</span><span style="color: #007700">);                         </span><span style="color: #FF8000">// 17:16:18<br /></span><span style="color: #0000BB">$today </span><span style="color: #007700">= </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y-m-d H:i:s"</span><span style="color: #007700">);                   </span><span style="color: #FF8000">// 2001-03-10 17:16:18 (the MySQL DATETIME format)<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   To format dates in other languages,
   <span class="methodname"><a href="intldateformatter.format.php" class="methodname">IntlDateFormatter::format()</a></span>
   can be used instead of <span class="function"><strong>date()</strong></span>.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.date-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    To generate a timestamp from a string representation of the date, you
    may be able to use <span class="function"><a href="function.strtotime.php" class="function">strtotime()</a></span>. Additionally, some
    databases have functions to convert their date formats into timestamps
    (such as MySQL&#039;s <a href="http://dev.mysql.com/doc/mysql/en/date-and-time-functions.html" class="link external">&raquo;&nbsp;UNIX_TIMESTAMP</a>
    function).
   </p>
  </p></blockquote>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="para">
    Timestamp of the start of the request is available in
    <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER['REQUEST_TIME']</a></var>.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.date-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="datetimeimmutable.construct.php" class="methodname" rel="rdfs-seeAlso">DateTimeImmutable::__construct()</a> - Returns new DateTimeImmutable object</span></li>
    <li><span class="methodname"><a href="datetime.format.php" class="methodname" rel="rdfs-seeAlso">DateTimeInterface::format()</a> - Returns date formatted according to given format</span></li>
    <li><span class="function"><a href="function.gmdate.php" class="function" rel="rdfs-seeAlso">gmdate()</a> - Format a GMT/UTC date/time</span></li>
    <li><span class="function"><a href="function.idate.php" class="function" rel="rdfs-seeAlso">idate()</a> - Format a local time/date part as integer</span></li>
    <li><span class="function"><a href="function.getdate.php" class="function" rel="rdfs-seeAlso">getdate()</a> - Get date/time information</span></li>
    <li><span class="function"><a href="function.getlastmod.php" class="function" rel="rdfs-seeAlso">getlastmod()</a> - Gets time of last page modification</span></li>
    <li><span class="function"><a href="function.mktime.php" class="function" rel="rdfs-seeAlso">mktime()</a> - Get Unix timestamp for a date</span></li>
    <li><span class="methodname"><a href="intldateformatter.format.php" class="methodname" rel="rdfs-seeAlso">IntlDateFormatter::format()</a> - Format the date/time value as a string</span></li>
    <li><span class="function"><a href="function.time.php" class="function" rel="rdfs-seeAlso">time()</a> - Return current Unix timestamp</span></li>
    <li><a href="class.datetimeinterface.php#datetimeinterface.constants.types" class="link">Predefined DateTime Constants</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/functions/date.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.date%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.date&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.date.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.datetime.php">Date/Time Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.checkdate.php" title="checkdate">checkdate</a>
                        </li>
                                                <li class="current">
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
                                                <li class="">
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
