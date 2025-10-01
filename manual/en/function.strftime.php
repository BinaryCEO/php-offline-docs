<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strftime - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strftime.php">
 <link rel="shorturl" href="https://www.php.net/strftime">
 <link rel="alternate" href="https://www.php.net/strftime" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.datetime.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mktime.php">
 <link rel="next" href="https://www.php.net/manual/en/function.strptime.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strftime.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strftime.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strftime.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strftime.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strftime.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strftime.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strftime.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strftime.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strftime.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strftime.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strftime.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Format a local time/date according to locale settings" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strftime - Manual" />
<meta name="twitter:description" content="Format a local time/date according to locale settings" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strftime - Manual" />
<meta itemprop="description" content="Format a local time/date according to locale settings" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Format a local time/date according to locale settings" />

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
        <a href="function.strptime.php">
          strptime &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mktime.php">
          &laquo; mktime        </a>
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
            <option value='en/function.strftime.php' selected="selected">English</option>
            <option value='de/function.strftime.php'>German</option>
            <option value='es/function.strftime.php'>Spanish</option>
            <option value='fr/function.strftime.php'>French</option>
            <option value='it/function.strftime.php'>Italian</option>
            <option value='ja/function.strftime.php'>Japanese</option>
            <option value='pt_BR/function.strftime.php'>Brazilian Portuguese</option>
            <option value='ru/function.strftime.php'>Russian</option>
            <option value='tr/function.strftime.php'>Turkish</option>
            <option value='uk/function.strftime.php'>Ukrainian</option>
            <option value='zh/function.strftime.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strftime" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strftime</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strftime</span> &mdash; <span class="dc-title">Format a local time/date according to locale settings</span></p>

 </div>

 <div id="function.strftime-refsynopsisdiv">
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function has been
<em>DEPRECATED</em> as of PHP 8.1.0. Relying on this function
is highly discouraged.</p></div>
<p class="para">
 Alternatives to this function include:
</p>

  <ul class="simplelist">
   <li><span class="function"><a href="function.date.php" class="function">date()</a></span></li>
   <li><span class="methodname"><a href="intldateformatter.format.php" class="methodname">IntlDateFormatter::format()</a></span></li>
  </ul>
 </div>

 <div class="refsect1 description" id="refsect1-function.strftime-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="attribute"><a href="class.deprecated.php">#[\Deprecated]</a> </span><br>
   <span class="methodname"><strong>strftime</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$timestamp</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Format the time and/or date according to locale settings. Month and weekday
   names and other language-dependent strings respect the current locale set
   with <span class="function"><a href="function.setlocale.php" class="function">setlocale()</a></span>.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Not all conversion specifiers may be supported by your C library, in which
    case they will not be supported by PHP&#039;s <span class="function"><strong>strftime()</strong></span>.
    Additionally, not all platforms support negative timestamps, so your
    date range may be limited to no earlier than the Unix epoch. This means that
    %e, %T, %R and, %D (and possibly others) - as well as dates prior to
    <code class="literal">Jan 1, 1970</code> - will not work on Windows, some Linux
    distributions, and a few other operating systems. For Windows systems, a
    complete overview of supported conversion specifiers can be found at
    <a href="http://msdn.microsoft.com/en-us/library/fe06s4ak.aspx" class="link external">&raquo;&nbsp;<abbr title="Microsoft Developer Network">MSDN</abbr></a>.
    Instead use the
    <span class="methodname"><a href="intldateformatter.format.php" class="methodname">IntlDateFormatter::format()</a></span> method.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strftime-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">format</code></dt>
     <dd>
      <p class="para">
       <table class="doctable table">
        <caption><strong>The following characters are recognized in the
        <code class="parameter">format</code> parameter string</strong></caption>
        
         <thead>
          <tr>
           <th><code class="parameter">format</code></th>
           <th>Description</th>
           <th>Example returned values</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td style="text-align: center;"><em>Day</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><code class="literal">%a</code></td>
           <td>An abbreviated textual representation of the day</td>
           <td><code class="literal">Sun</code> through <code class="literal">Sat</code></td>
          </tr>

          <tr>
           <td><code class="literal">%A</code></td>
           <td>A full textual representation of the day</td>
           <td><code class="literal">Sunday</code> through <code class="literal">Saturday</code></td>
          </tr>

          <tr>
           <td><code class="literal">%d</code></td>
           <td>Two-digit day of the month (with leading zeros)</td>
           <td><code class="literal">01</code> to <code class="literal">31</code></td>
          </tr>

          <tr>
           <td><code class="literal">%e</code></td>
           <td>
            Day of the month, with a space preceding single digits. Not 
            implemented as described on Windows. See below for more information.
           </td>
           <td><code class="literal"> 1</code> to <code class="literal">31</code></td>
          </tr>

          <tr>
           <td><code class="literal">%j</code></td>
           <td>Day of the year, 3 digits with leading zeros</td>
           <td><code class="literal">001</code> to <code class="literal">366</code></td>
          </tr>

          <tr>
           <td><code class="literal">%u</code></td>
           <td>ISO-8601 numeric representation of the day of the week</td>
           <td><code class="literal">1</code> (for Monday) through <code class="literal">7</code> (for Sunday)</td>
          </tr>

          <tr>
           <td><code class="literal">%w</code></td>
           <td>Numeric representation of the day of the week</td>
           <td><code class="literal">0</code> (for Sunday) through <code class="literal">6</code> (for Saturday)</td>
          </tr>

          <tr>
           <td style="text-align: center;"><em>Week</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><code class="literal">%U</code></td>
           <td>Week number of the given year, starting with the first
           Sunday as the first week</td>
           <td><code class="literal">13</code> (for the 13th full week of the year)</td>
          </tr>

          <tr>
           <td><code class="literal">%V</code></td>
           <td>ISO-8601:1988 week number of the given year, starting with
           the first week of the year with at least 4 weekdays, with Monday
           being the start of the week</td>
           <td><code class="literal">01</code> through <code class="literal">53</code> (where 53
           accounts for an overlapping week)</td>
          </tr>

          <tr>
           <td><code class="literal">%W</code></td>
           <td>A numeric representation of the week of the year, starting
           with the first Monday as the first week</td>
           <td><code class="literal">46</code> (for the 46th week of the year beginning
           with a Monday)</td>
          </tr>

          <tr>
           <td style="text-align: center;"><em>Month</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><code class="literal">%b</code></td>
           <td>Abbreviated month name, based on the locale</td>
           <td><code class="literal">Jan</code> through <code class="literal">Dec</code></td>
          </tr>

          <tr>
           <td><code class="literal">%B</code></td>
           <td>Full month name, based on the locale</td>
           <td><code class="literal">January</code> through <code class="literal">December</code></td>
          </tr>

          <tr>
           <td><code class="literal">%h</code></td>
           <td>Abbreviated month name, based on the locale (an alias of %b)</td>
           <td><code class="literal">Jan</code> through <code class="literal">Dec</code></td>
          </tr>

          <tr>
           <td><code class="literal">%m</code></td>
           <td>Two digit representation of the month</td>
           <td><code class="literal">01</code> (for January) through <code class="literal">12</code> (for December)</td>
          </tr>

          <tr>
           <td style="text-align: center;"><em>Year</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><code class="literal">%C</code></td>
           <td>Two digit representation of the century (year divided by 100, truncated to an integer)</td>
           <td><code class="literal">19</code> for the 20th Century</td>
          </tr>

          <tr>
           <td><code class="literal">%g</code></td>
           <td>Two digit representation of the year going by ISO-8601:1988 standards (see %V)</td>
           <td>Example: <code class="literal">09</code> for the week of January 6, 2009</td>
          </tr>

          <tr>
           <td><code class="literal">%G</code></td>
           <td>The full four-digit version of %g</td>
           <td>Example: <code class="literal">2008</code> for the week of January 3, 2009</td>
          </tr>

          <tr>
           <td><code class="literal">%y</code></td>
           <td>Two digit representation of the year</td>
           <td>Example: <code class="literal">09</code> for 2009, <code class="literal">79</code> for 1979</td>
          </tr>

          <tr>
           <td><code class="literal">%Y</code></td>
           <td>Four digit representation for the year</td>
           <td>Example: <code class="literal">2038</code></td>
          </tr>

          <tr>
           <td style="text-align: center;"><em>Time</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><code class="literal">%H</code></td>
           <td>Two digit representation of the hour in 24-hour format</td>
           <td><code class="literal">00</code> through <code class="literal">23</code></td>
          </tr>

          <tr>
           <td><code class="literal">%k</code></td>
           <td>Hour in 24-hour format, with a space preceding single digits</td>
           <td><code class="literal"> 0</code> through <code class="literal">23</code></td>
          </tr>

          <tr>
           <td><code class="literal">%I</code></td>
           <td>Two digit representation of the hour in 12-hour format</td>
           <td><code class="literal">01</code> through <code class="literal">12</code></td>
          </tr>

          <tr>
           <td><code class="literal">%l (lower-case &#039;L&#039;)</code></td>
           <td>Hour in 12-hour format, with a space preceding single digits</td>
           <td><code class="literal"> 1</code> through <code class="literal">12</code></td>
          </tr>

          <tr>
           <td><code class="literal">%M</code></td>
           <td>Two digit representation of the minute</td>
           <td><code class="literal">00</code> through <code class="literal">59</code></td>
          </tr>

          <tr>
           <td><code class="literal">%p</code></td>
           <td>UPPER-CASE &#039;AM&#039; or &#039;PM&#039; based on the given time</td>
           <td>Example: <code class="literal">AM</code> for 00:31,
           <code class="literal">PM</code> for 22:23. The exact result depends on the
           Operating System, and they can also return lower-case variants, or
           variants with dots (such as <code class="literal">a.m.</code>).</td>
          </tr>

          <tr>
           <td><code class="literal">%P</code></td>
           <td>lower-case &#039;am&#039; or &#039;pm&#039; based on the given time</td>
           <td>Example: <code class="literal">am</code> for 00:31,
           <code class="literal">pm</code> for 22:23. Not supported by all Operating
           Systems.</td>
          </tr>

          <tr>
           <td><code class="literal">%r</code></td>
           <td>Same as &quot;%I:%M:%S %p&quot;</td>
           <td>Example: <code class="literal">09:34:17 PM</code> for 21:34:17</td>
          </tr>

          <tr>
           <td><code class="literal">%R</code></td>
           <td>Same as &quot;%H:%M&quot;</td>
           <td>Example: <code class="literal">00:35</code> for 12:35 AM, <code class="literal">16:44</code> for 4:44 PM</td>
          </tr>

          <tr>
           <td><code class="literal">%S</code></td>
           <td>Two digit representation of the second</td>
           <td><code class="literal">00</code> through <code class="literal">59</code></td>
          </tr>

          <tr>
           <td><code class="literal">%T</code></td>
           <td>Same as &quot;%H:%M:%S&quot;</td>
           <td>Example: <code class="literal">21:34:17</code> for 09:34:17 PM</td>
          </tr>

          <tr>
           <td><code class="literal">%X</code></td>
           <td>Preferred time representation based on locale, without the date</td>
           <td>Example: <code class="literal">03:59:16</code> or <code class="literal">15:59:16</code></td>
          </tr>

          <tr>
           <td><code class="literal">%z</code></td>
           <td>The time zone offset. Not implemented as described on
           Windows. See below for more information.</td>
           <td>Example: <code class="literal">-0500</code> for US Eastern Time</td>
          </tr>

          <tr>
           <td><code class="literal">%Z</code></td>
           <td>The time zone abbreviation. Not implemented as described on
           Windows. See below for more information.</td>
           <td>Example: <code class="literal">EST</code> for Eastern Time</td>
          </tr>

          <tr>
           <td style="text-align: center;"><em>Time and Date Stamps</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><code class="literal">%c</code></td>
           <td>Preferred date and time stamp based on locale</td>
           <td>Example: <code class="literal">Tue Feb  5 00:45:10 2009</code> for
           February 5, 2009 at 12:45:10 AM</td>
          </tr>

          <tr>
           <td><code class="literal">%D</code></td>
           <td>Same as &quot;%m/%d/%y&quot;</td>
           <td>Example: <code class="literal">02/05/09</code> for February 5, 2009</td>
          </tr>

          <tr>
           <td><code class="literal">%F</code></td>
           <td>Same as &quot;%Y-%m-%d&quot; (commonly used in database datestamps)</td>
           <td>Example: <code class="literal">2009-02-05</code> for February 5, 2009</td>
          </tr>

          <tr>
           <td><code class="literal">%s</code></td>
           <td>Unix Epoch Time timestamp (same as the <span class="function"><a href="function.time.php" class="function">time()</a></span>
           function)</td>
           <td>Example: <code class="literal">305815200</code> for September 10, 1979 08:40:00 AM</td>
          </tr>

          <tr>
           <td><code class="literal">%x</code></td>
           <td>Preferred date representation based on locale, without the time</td>
           <td>Example: <code class="literal">02/05/09</code> for February 5, 2009</td>
          </tr>

          <tr>
           <td style="text-align: center;"><em>Miscellaneous</em></td>
           <td>---</td>
           <td>---</td>
          </tr>

          <tr>
           <td><code class="literal">%n</code></td>
           <td>A newline character (&quot;\n&quot;)</td>
           <td>---</td>
          </tr>

          <tr>
           <td><code class="literal">%t</code></td>
           <td>A Tab character (&quot;\t&quot;)</td>
           <td>---</td>
          </tr>

          <tr>
           <td><code class="literal">%%</code></td>
           <td>A literal percentage character (&quot;%&quot;)</td>
           <td>---</td>
          </tr>

         </tbody>
        
       </table>

      </p>
      <div class="warning"><strong class="warning">Warning</strong>
       <p class="simpara">
        Contrary to ISO-9899:1999, Sun Solaris starts with Sunday as 1.  As a
        result, <code class="literal">%u</code> may not function as described in this
        manual.
       </p>
      </div>
      <div class="warning"><strong class="warning">Warning</strong>
       <p class="para">
        <em>Windows only:</em>
       </p>
       <p class="para">
        The <code class="literal">%e</code> modifier is not supported in the Windows
        implementation of this function. To achieve this value, the
        <code class="literal">%#d</code> modifier can be used instead. The example below
        illustrates how to write a cross platform compatible function.
       </p>
       <p class="para">
        The <code class="literal">%z</code> and <code class="literal">%Z</code> modifiers both
        return the time zone name instead of the offset or abbreviation.
       </p>
      </div>
      <div class="warning"><strong class="warning">Warning</strong>
       <p class="simpara">
        <em>macOS and musl only:</em> The <code class="literal">%P</code> modifier 
        is not supported in the macOS implementation of this function.
       </p>
      </div>
     </dd>
    

    
<dt><code class="parameter">timestamp</code></dt><dd><p class="para">
The optional <code class="parameter">timestamp</code> parameter is an
<span class="type"><a href="language.types.integer.php" class="type int">int</a></span> Unix timestamp that defaults to the current
local time if <code class="parameter">timestamp</code> is omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>. In other
words, it defaults to the value of <span class="function"><a href="function.time.php" class="function">time()</a></span>.
</p></dd>

   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.strftime-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a string formatted according <code class="parameter">format</code>
   using the given <code class="parameter">timestamp</code> or the current
   local time if no timestamp is given.  Month and weekday names and
   other language-dependent strings respect the current locale set
   with <span class="function"><a href="function.setlocale.php" class="function">setlocale()</a></span>.
   The function returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if <code class="parameter">format</code> is empty, contains unsupported
   conversion specifiers, or if the length of the returned string would be greater than
   <code class="literal">4095</code>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.strftime-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
Every call to a date/time function will generate a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
if the time zone is not valid. See also <span class="function"><a href="function.date-default-timezone-set.php" class="function">date_default_timezone_set()</a></span></p>
  <p class="para">
   As the output is dependent upon the underlying C library, some conversion
   specifiers are not supported. On Windows, supplying unknown conversion
   specifiers will result in 5 <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> messages and
   return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. On other operating systems you may not get any
   <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> messages and the output may contain the
   conversion specifiers unconverted.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.strftime-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.strftime-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   This example will work if you have the respective locales installed
   in your system.
   <div class="example" id="example-2303">
    <p><strong>Example #1 <span class="function"><strong>strftime()</strong></span> locale examples</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_TIME</span><span style="color: #007700">, </span><span style="color: #DD0000">"C"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%A"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_TIME</span><span style="color: #007700">, </span><span style="color: #DD0000">"fi_FI"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">" in Finnish is %A,"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_TIME</span><span style="color: #007700">, </span><span style="color: #DD0000">"fr_FR"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">" in French %A and"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_TIME</span><span style="color: #007700">, </span><span style="color: #DD0000">"de_DE"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">" in German %A.\n"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2304">
    <p><strong>Example #2 ISO 8601:1988 week number example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/*     December 2002 / January 2003<br />ISOWk  M   Tu  W   Thu F   Sa  Su<br />----- ----------------------------<br />51     16  17  18  19  20  21  22<br />52     23  24  25  26  27  28  29<br />1      30  31   1   2   3   4   5<br />2       6   7   8   9  10  11  12<br />3      13  14  15  16  17  18  19   */<br /><br />// Outputs: 12/28/2002 - %V,%G,%Y = 52,2002,2002<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"12/28/2002 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">, </span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"12/28/2002"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs: 12/30/2002 - %V,%G,%Y = 1,2003,2002<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"12/30/2002 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">, </span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"12/30/2002"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs: 1/3/2003 - %V,%G,%Y = 1,2003,2003<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"1/3/2003 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">,</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"1/3/2003"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs: 1/10/2003 - %V,%G,%Y = 2,2003,2003<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"1/10/2003 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">,</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"1/10/2003"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /><br /><br /></span><span style="color: #FF8000">/*     December 2004 / January 2005<br />ISOWk  M   Tu  W   Thu F   Sa  Su<br />----- ----------------------------<br />51     13  14  15  16  17  18  19<br />52     20  21  22  23  24  25  26<br />53     27  28  29  30  31   1   2<br />1       3   4   5   6   7   8   9<br />2      10  11  12  13  14  15  16   */<br /><br />// Outputs: 12/23/2004 - %V,%G,%Y = 52,2004,2004<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"12/23/2004 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">,</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"12/23/2004"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs: 12/31/2004 - %V,%G,%Y = 53,2004,2004<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"12/31/2004 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">,</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"12/31/2004"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs: 1/2/2005 - %V,%G,%Y = 53,2004,2005<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"1/2/2005 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">,</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"1/2/2005"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs: 1/3/2005 - %V,%G,%Y = 1,2005,2005<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"1/3/2005 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">,</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"1/3/2005"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2305">
    <p><strong>Example #3 Cross platform compatible example using the <code class="literal">%e</code> modifier</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Jan 1: results in: '%e%1%' (%%, e, %%, %e, %%)<br /></span><span style="color: #0000BB">$format </span><span style="color: #007700">= </span><span style="color: #DD0000">'%%e%%%e%%'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Check for Windows to find and replace the %e <br />// modifier correctly<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_OS</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">)) == </span><span style="color: #DD0000">'WIN'</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$format </span><span style="color: #007700">= </span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'#(?&lt;!%)((?:%%)*)%e#'</span><span style="color: #007700">, </span><span style="color: #DD0000">'\1%#d'</span><span style="color: #007700">, </span><span style="color: #0000BB">$format</span><span style="color: #007700">);<br />}<br /><br />echo </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2306">
    <p><strong>Example #4 Display all known and unknown formats</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Describe the formats<br /></span><span style="color: #0000BB">$strftimeFormats </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'A' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'A full textual representation of the day'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'B' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Full month name, based on the locale'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'C' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the century (year divided by 100, truncated to an integer)'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'D' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Same as "%m/%d/%y"'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'E' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'F' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Same as "%Y-%m-%d"'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'G' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'The full four-digit version of %g'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'H' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the hour in 24-hour format'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'I' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the hour in 12-hour format'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'J' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'K' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'L' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'M' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the minute'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'N' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'O' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'P' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'lower-case "am" or "pm" based on the given time'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'Q' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'R' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Same as "%H:%M"'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'S' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the second'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'T' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Same as "%H:%M:%S"'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'U' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Week number of the given year, starting with the first Sunday as the first week'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'V' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'ISO-8601:1988 week number of the given year, starting with the first week of the year with at least 4 weekdays, with Monday being the start of the week'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'W' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'A numeric representation of the week of the year, starting with the first Monday as the first week'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'X' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Preferred time representation based on locale, without the date'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'Y' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Four digit representation for the year'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'Z' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'The time zone offset/abbreviation option NOT given by %z (depends on operating system)'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'a' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'An abbreviated textual representation of the day'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'b' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Abbreviated month name, based on the locale'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'c' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Preferred date and time stamp based on local'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'d' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two-digit day of the month (with leading zeros)'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'e' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Day of the month, with a space preceding single digits'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'f' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'g' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the year going by ISO-8601:1988 standards (see %V)'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'h' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Abbreviated month name, based on the locale (an alias of %b)'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'i' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'j' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Day of the year, 3 digits with leading zeros'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'k' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Hour in 24-hour format, with a space preceding single digits'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'l' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Hour in 12-hour format, with a space preceding single digits'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'m' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the month'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'n' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'A newline character ("\n")'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'o' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'p' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'UPPER-CASE "AM" or "PM" based on the given time'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'q' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'r' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Same as "%I:%M:%S %p"'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'s' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Unix Epoch Time timestamp'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'t' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'A Tab character ("\t")'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'u' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'ISO-8601 numeric representation of the day of the week'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'v' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'w' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Numeric representation of the day of the week'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Preferred date representation based on locale, without the time'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'y' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the year'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'z' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Either the time zone offset from UTC or the abbreviation (depends on operating system)'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'%' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'A literal percentage character ("%")'</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #FF8000">// Results<br /></span><span style="color: #0000BB">$strftimeValues </span><span style="color: #007700">= array();<br /><br /></span><span style="color: #FF8000">// Evaluate the formats whilst suppressing any errors<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$strftimeFormats </span><span style="color: #007700">as </span><span style="color: #0000BB">$format </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$description</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">false </span><span style="color: #007700">!== (</span><span style="color: #0000BB">$value </span><span style="color: #007700">= @</span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%</span><span style="color: #007700">{</span><span style="color: #0000BB">$format</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">))) {<br />        </span><span style="color: #0000BB">$strftimeValues</span><span style="color: #007700">[</span><span style="color: #0000BB">$format</span><span style="color: #007700">] = </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #FF8000">// Find the longest value<br /></span><span style="color: #0000BB">$maxValueLength </span><span style="color: #007700">= </span><span style="color: #0000BB">2 </span><span style="color: #007700">+ </span><span style="color: #0000BB">max</span><span style="color: #007700">(</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'strlen'</span><span style="color: #007700">, </span><span style="color: #0000BB">$strftimeValues</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Report known formats<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$strftimeValues </span><span style="color: #007700">as </span><span style="color: #0000BB">$format </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Known format   : '</span><span style="color: #007700">{</span><span style="color: #0000BB">$format</span><span style="color: #007700">}</span><span style="color: #DD0000">' = "</span><span style="color: #007700">, </span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #DD0000">"'</span><span style="color: #007700">{</span><span style="color: #0000BB">$value</span><span style="color: #007700">}</span><span style="color: #DD0000">'"</span><span style="color: #007700">, </span><span style="color: #0000BB">$maxValueLength</span><span style="color: #007700">), </span><span style="color: #DD0000">" ( </span><span style="color: #007700">{</span><span style="color: #0000BB">$strftimeFormats</span><span style="color: #007700">[</span><span style="color: #0000BB">$format</span><span style="color: #007700">]}</span><span style="color: #DD0000"> )\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Report unknown formats<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">array_diff_key</span><span style="color: #007700">(</span><span style="color: #0000BB">$strftimeFormats</span><span style="color: #007700">, </span><span style="color: #0000BB">$strftimeValues</span><span style="color: #007700">) as </span><span style="color: #0000BB">$format </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$description</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Unknown format : '</span><span style="color: #007700">{</span><span style="color: #0000BB">$format</span><span style="color: #007700">}</span><span style="color: #DD0000">'   "</span><span style="color: #007700">, </span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #DD0000">' '</span><span style="color: #007700">, </span><span style="color: #0000BB">$maxValueLength</span><span style="color: #007700">), (</span><span style="color: #0000BB">$description </span><span style="color: #007700">? </span><span style="color: #DD0000">" ( </span><span style="color: #007700">{</span><span style="color: #0000BB">$description</span><span style="color: #007700">}</span><span style="color: #DD0000"> )" </span><span style="color: #007700">: </span><span style="color: #DD0000">''</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Known format   : &#039;A&#039; = &#039;Friday&#039;            ( A full textual representation of the day )
Known format   : &#039;B&#039; = &#039;December&#039;          ( Full month name, based on the locale )
Known format   : &#039;H&#039; = &#039;11&#039;                ( Two digit representation of the hour in 24-hour format )
Known format   : &#039;I&#039; = &#039;11&#039;                ( Two digit representation of the hour in 12-hour format )
Known format   : &#039;M&#039; = &#039;24&#039;                ( Two digit representation of the minute )
Known format   : &#039;S&#039; = &#039;44&#039;                ( Two digit representation of the second )
Known format   : &#039;U&#039; = &#039;48&#039;                ( Week number of the given year, starting with the first Sunday as the first week )
Known format   : &#039;W&#039; = &#039;48&#039;                ( A numeric representation of the week of the year, starting with the first Monday as the first week )
Known format   : &#039;X&#039; = &#039;11:24:44&#039;          ( Preferred time representation based on locale, without the date )
Known format   : &#039;Y&#039; = &#039;2010&#039;              ( Four digit representation for the year )
Known format   : &#039;Z&#039; = &#039;GMT Standard Time&#039; ( The time zone offset/abbreviation option NOT given by %z (depends on operating system) )
Known format   : &#039;a&#039; = &#039;Fri&#039;               ( An abbreviated textual representation of the day )
Known format   : &#039;b&#039; = &#039;Dec&#039;               ( Abbreviated month name, based on the locale )
Known format   : &#039;c&#039; = &#039;12/03/10 11:24:44&#039; ( Preferred date and time stamp based on local )
Known format   : &#039;d&#039; = &#039;03&#039;                ( Two-digit day of the month (with leading zeros) )
Known format   : &#039;j&#039; = &#039;337&#039;               ( Day of the year, 3 digits with leading zeros )
Known format   : &#039;m&#039; = &#039;12&#039;                ( Two digit representation of the month )
Known format   : &#039;p&#039; = &#039;AM&#039;                ( UPPER-CASE &quot;AM&quot; or &quot;PM&quot; based on the given time )
Known format   : &#039;w&#039; = &#039;5&#039;                 ( Numeric representation of the day of the week )
Known format   : &#039;x&#039; = &#039;12/03/10&#039;          ( Preferred date representation based on locale, without the time )
Known format   : &#039;y&#039; = &#039;10&#039;                ( Two digit representation of the year )
Known format   : &#039;z&#039; = &#039;GMT Standard Time&#039; ( Either the time zone offset from UTC or the abbreviation (depends on operating system) )
Known format   : &#039;%&#039; = &#039;%&#039;                 ( A literal percentage character (&quot;%&quot;) )
Unknown format : &#039;C&#039;                       ( Two digit representation of the century (year divided by 100, truncated to an integer) )
Unknown format : &#039;D&#039;                       ( Same as &quot;%m/%d/%y&quot; )
Unknown format : &#039;E&#039;
Unknown format : &#039;F&#039;                       ( Same as &quot;%Y-%m-%d&quot; )
Unknown format : &#039;G&#039;                       ( The full four-digit version of %g )
Unknown format : &#039;J&#039;
Unknown format : &#039;K&#039;
Unknown format : &#039;L&#039;
Unknown format : &#039;N&#039;
Unknown format : &#039;O&#039;
Unknown format : &#039;P&#039;                       ( lower-case &quot;am&quot; or &quot;pm&quot; based on the given time )
Unknown format : &#039;Q&#039;
Unknown format : &#039;R&#039;                       ( Same as &quot;%H:%M&quot; )
Unknown format : &#039;T&#039;                       ( Same as &quot;%H:%M:%S&quot; )
Unknown format : &#039;V&#039;                       ( ISO-8601:1988 week number of the given year, starting with the first week of the year with at least 4 weekdays, with Monday being the start of the week )
Unknown format : &#039;e&#039;                       ( Day of the month, with a space preceding single digits )
Unknown format : &#039;f&#039;
Unknown format : &#039;g&#039;                       ( Two digit representation of the year going by ISO-8601:1988 standards (see %V) )
Unknown format : &#039;h&#039;                       ( Abbreviated month name, based on the locale (an alias of %b) )
Unknown format : &#039;i&#039;
Unknown format : &#039;k&#039;                       ( Hour in 24-hour format, with a space preceding single digits )
Unknown format : &#039;l&#039;                       ( Hour in 12-hour format, with a space preceding single digits )
Unknown format : &#039;n&#039;                       ( A newline character (&quot;\n&quot;) )
Unknown format : &#039;o&#039;
Unknown format : &#039;q&#039;
Unknown format : &#039;r&#039;                       ( Same as &quot;%I:%M:%S %p&quot; )
Unknown format : &#039;s&#039;                       ( Unix Epoch Time timestamp )
Unknown format : &#039;t&#039;                       ( A Tab character (&quot;\t&quot;) )
Unknown format : &#039;u&#039;                       ( ISO-8601 numeric representation of the day of the week )
Unknown format : &#039;v&#039;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.strftime-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    %G and %V, which are based on ISO 8601:1988 week numbers can
    give unexpected (albeit correct) results if the numbering system
    is not thoroughly understood.  See %V examples in this manual page.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.strftime-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="intldateformatter.format.php" class="methodname" rel="rdfs-seeAlso">IntlDateFormatter::format()</a> - Format the date/time value as a string</span></li>
    <li><span class="methodname"><a href="datetime.format.php" class="methodname" rel="rdfs-seeAlso">DateTimeInterface::format()</a> - Returns date formatted according to given format</span></li>
    <li><a href="http://strftime.net/" class="link external">&raquo;&nbsp;Online strftime() format design tool</a></li>
    <li><span class="function"><a href="function.setlocale.php" class="function" rel="rdfs-seeAlso">setlocale()</a> - Set locale information</span></li>
    <li><span class="function"><a href="function.mktime.php" class="function" rel="rdfs-seeAlso">mktime()</a> - Get Unix timestamp for a date</span></li>
    <li><span class="function"><a href="function.strptime.php" class="function" rel="rdfs-seeAlso">strptime()</a> - Parse a time/date generated with strftime</span></li>
    <li><span class="function"><a href="function.gmstrftime.php" class="function" rel="rdfs-seeAlso">gmstrftime()</a> - Format a GMT/UTC time/date according to locale settings</span></li>
    <li><a href="http://www.opengroup.org/onlinepubs/007908799/xsh/strftime.html" class="link external">&raquo;&nbsp;Open Group specification of <span class="function"><strong>strftime()</strong></span></a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/functions/strftime.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strftime%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strftime&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strftime.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128095">  <div class="votes">
    <div id="Vu128095">
    <a href="/manual/vote-note.php?id=128095&amp;page=function.strftime&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128095">
    <a href="/manual/vote-note.php?id=128095&amp;page=function.strftime&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128095" title="64% like this...">
    4
    </div>
  </div>
  <a href="#128095" class="name">
  <strong class="user"><em>divinity76+spam at gmail dot com</em></strong></a><a class="genanchor" href="#128095"> &para;</a><div class="date" title="2023-01-07 05:56"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128095">
<div class="phpcode"><code><span class="html">there is a strftime compatibility package for php&gt;=8.1 at <a href="https://github.com/alphp/strftime" rel="nofollow" target="_blank">https://github.com/alphp/strftime</a></span></code></div>
  </div>
 </div>
  <div class="note" id="130286">  <div class="votes">
    <div id="Vu130286">
    <a href="/manual/vote-note.php?id=130286&amp;page=function.strftime&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130286">
    <a href="/manual/vote-note.php?id=130286&amp;page=function.strftime&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130286" title="no votes...">
    0
    </div>
  </div>
  <a href="#130286" class="name">
  <strong class="user"><em>oriadam at example dot g dot com</em></strong></a><a class="genanchor" href="#130286"> &para;</a><div class="date" title="2025-05-11 01:29"><strong>4 months ago</strong></div>
  <div class="text" id="Hcom130286">
<div class="phpcode"><code><span class="html">Some formats can be replaced with the `date` function, for example:<br /><br />    strftime("%Y-%m-%d", $time);<br /><br />can be replaced with<br /><br />    date("Y-m-d", $time);</span></code></div>
  </div>
 </div>
  <div class="note" id="129941">  <div class="votes">
    <div id="Vu129941">
    <a href="/manual/vote-note.php?id=129941&amp;page=function.strftime&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129941">
    <a href="/manual/vote-note.php?id=129941&amp;page=function.strftime&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129941" title="50% like this...">
    0
    </div>
  </div>
  <a href="#129941" class="name">
  <strong class="user"><em>kanif dot ahire at gmail dot com</em></strong></a><a class="genanchor" href="#129941"> &para;</a><div class="date" title="2025-01-06 07:51"><strong>8 months ago</strong></div>
  <div class="text" id="Hcom129941">
<div class="phpcode"><code><span class="html">Year is being displayed wrongly. It is displaying 2025 instead of 2024<br />E.g.   strftime("%G-%B-%d %H:%M:%S", strtotime(date('2024-12-30 10:10:10'))); <br />Output: 2025-December-30 10:10:10 <br /> <br />Here G represents 4-digit year corresponding to the ISO week number. Based on this ISO week number year value will be displayed<br />Here B represents full month name<br />Here d represents day of the month (01 to 31)<br /> <br />Now because of this %G value we are getting the issue as ISO week number is calculated wrongly. <br />For example, If 30th December is falling on Monday, Tuesday, or Wednesday it is in W01 of the next year. <br />If it is on a Thursday, it is in W53 of the year just ending. <br />If on a Friday it is in W52 of the year just ending in common years and W53 in leap years. <br />If on a Saturday or Sunday, it is in W52 of the year just ending.<br />In this way week calculation happens and as 30th falls on Monday it is taking as W01 of the next year and it displays wrong year output.<br />For previous year no issue for this error because 30 and 31st Dec falls on sat or Sunday .<br /> <br />This same error occurs even if the Jan 1st falls on Friday. Then it will calculate it as W53 and displays the previous year value instead of current year.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strftime&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strftime.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
