<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: IntlDateFormatter::format - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/intldateformatter.format.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/intldateformatter.format.php">
 <link rel="alternate" href="https://www.php.net/manual/en/intldateformatter.format.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.intldateformatter.php">
 <link rel="prev" href="https://www.php.net/manual/en/intldateformatter.create.php">
 <link rel="next" href="https://www.php.net/manual/en/intldateformatter.formatobject.php">

 <link rel="alternate" href="https://www.php.net/manual/en/intldateformatter.format.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/intldateformatter.format.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/intldateformatter.format.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/intldateformatter.format.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/intldateformatter.format.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/intldateformatter.format.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/intldateformatter.format.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/intldateformatter.format.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/intldateformatter.format.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/intldateformatter.format.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/intldateformatter.format.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Format the date/time value as a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: IntlDateFormatter::format - Manual" />
<meta name="twitter:description" content="Format the date/time value as a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: IntlDateFormatter::format - Manual" />
<meta itemprop="description" content="Format the date/time value as a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Format the date/time value as a string" />

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
        <a href="intldateformatter.formatobject.php">
          IntlDateFormatter::formatObject &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="intldateformatter.create.php">
          &laquo; IntlDateFormatter::create        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.intl.php'>intl</a></li>      <li><a href='class.intldateformatter.php'>IntlDateFormatter</a></li>      </ul>
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
            <option value='en/intldateformatter.format.php' selected="selected">English</option>
            <option value='de/intldateformatter.format.php'>German</option>
            <option value='es/intldateformatter.format.php'>Spanish</option>
            <option value='fr/intldateformatter.format.php'>French</option>
            <option value='it/intldateformatter.format.php'>Italian</option>
            <option value='ja/intldateformatter.format.php'>Japanese</option>
            <option value='pt_BR/intldateformatter.format.php'>Brazilian Portuguese</option>
            <option value='ru/intldateformatter.format.php'>Russian</option>
            <option value='tr/intldateformatter.format.php'>Turkish</option>
            <option value='uk/intldateformatter.format.php'>Ukrainian</option>
            <option value='zh/intldateformatter.format.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="intldateformatter.format" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">IntlDateFormatter::format</h1>
  <h1 class="refname">datefmt_format</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8, PECL intl &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">IntlDateFormatter::format</span> -- <span class="refname">datefmt_format</span> &mdash; <span class="dc-title">Format the date/time value as a string</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-intldateformatter.format-description">
  <h3 class="title">Description</h3>
  <p class="para">
   Object-oriented style
  </p>
   <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>IntlDateFormatter::format</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span>|<span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$datetime</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Procedural style
  </p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>datefmt_format</strong></span>(<span class="methodparam"><span class="type"><a href="class.intldateformatter.php" class="type IntlDateFormatter">IntlDateFormatter</a></span> <code class="parameter">$formatter</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="class.intlcalendar.php" class="type IntlCalendar">IntlCalendar</a></span>|<span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$datetime</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Formats the time value as a string.
  </p> 
  </div>


 <div class="refsect1 parameters" id="refsect1-intldateformatter.format-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">formatter</code></dt>
     <dd>
      <p class="para">
       The date formatter resource.
      </p>
     </dd>
    
    
     <dt><code class="parameter">datetime</code></dt>
     <dd>
      <p class="para">
       Value to format. This may be a <span class="classname"><a href="class.datetimeinterface.php" class="classname">DateTimeInterface</a></span> object, an
       <span class="classname"><a href="class.intlcalendar.php" class="classname">IntlCalendar</a></span> object, a <span class="type">numeric</span> type
       representing a (possibly fractional) number of seconds since epoch or an
       <span class="type"><a href="language.types.array.php" class="type array">array</a></span> in the format output by
       <span class="function"><a href="function.localtime.php" class="function">localtime()</a></span>.
      </p>
      <p class="para">
       If a <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span> or an
       <span class="classname"><a href="class.intlcalendar.php" class="classname">IntlCalendar</a></span> object is passed, its timezone is not
       considered. The object will be formatted using the formaterʼs configured
       timezone. If one wants to use the timezone of the object to be formatted,
       <span class="function"><a href="intldateformatter.settimezone.php" class="function">IntlDateFormatter::setTimeZone()</a></span> must be called before
       with the objectʼs timezone. Alternatively, the static function
       <span class="function"><a href="intldateformatter.formatobject.php" class="function">IntlDateFormatter::formatObject()</a></span> may be used instead.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

   
 
 <div class="refsect1 returnvalues" id="refsect1-intldateformatter.format-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The formatted string or, if an error occurred, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.   
  </p>
 </div>

 
 <div class="refsect1 changelog" id="refsect1-intldateformatter.format-changelog">
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
       <td>7.1.5</td>
       <td>
        Support for providing general <span class="classname"><a href="class.datetimeinterface.php" class="classname">DateTimeInterface</a></span> objects to the
        <code class="parameter">datetime</code> parameter was added. Formerly, only proper
        <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span> objects were supported.
       </td>
      </tr>

      <tr>
       <td>PECL intl 3.0.0</td>
       <td>
        Support for providing <span class="classname"><a href="class.intlcalendar.php" class="classname">IntlCalendar</a></span> objects to the
        <code class="parameter">datetime</code> parameter was added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-intldateformatter.format-examples">
  <h3 class="title">Examples</h3>
   <div class="example" id="example-2625">
    <p><strong>Example #1 <span class="function"><strong>datefmt_format()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$fmt </span><span style="color: #007700">= </span><span style="color: #0000BB">datefmt_create</span><span style="color: #007700">(<br />    </span><span style="color: #DD0000">'en_US'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'America/Los_Angeles'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">GREGORIAN<br /></span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">'First Formatted output is ' </span><span style="color: #007700">. </span><span style="color: #0000BB">datefmt_format</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$fmt </span><span style="color: #007700">= </span><span style="color: #0000BB">datefmt_create</span><span style="color: #007700">(<br />    </span><span style="color: #DD0000">'de-DE'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'America/Los_Angeles'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">GREGORIAN<br /></span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">'Second Formatted output is ' </span><span style="color: #007700">. </span><span style="color: #0000BB">datefmt_format</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$fmt </span><span style="color: #007700">= </span><span style="color: #0000BB">datefmt_create</span><span style="color: #007700">(<br />    </span><span style="color: #DD0000">'en_US'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'America/Los_Angeles'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">GREGORIAN</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'MM/dd/yyyy'<br /></span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">'First Formatted output with pattern is ' </span><span style="color: #007700">. </span><span style="color: #0000BB">datefmt_format</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$fmt </span><span style="color: #007700">= </span><span style="color: #0000BB">datefmt_create</span><span style="color: #007700">(<br />    </span><span style="color: #DD0000">'de-DE'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'America/Los_Angeles'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">GREGORIAN</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'MM/dd/yyyy'<br /></span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Second Formatted output with pattern is " </span><span style="color: #007700">. </span><span style="color: #0000BB">datefmt_format</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-2626">
    <p><strong>Example #2 OO example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$fmt </span><span style="color: #007700">= new </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">(<br />    </span><span style="color: #DD0000">'en_US'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'America/Los_Angeles'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">GREGORIAN<br /></span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">'First Formatted output is ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$fmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$fmt </span><span style="color: #007700">= new </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">(<br />    </span><span style="color: #DD0000">'de-DE'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'America/Los_Angeles'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">GREGORIAN<br /></span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">'Second Formatted output is ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$fmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$fmt </span><span style="color: #007700">= new </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">(<br />    </span><span style="color: #DD0000">'en_US'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'America/Los_Angeles'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">GREGORIAN</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'MM/dd/yyyy'<br /></span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">'First Formatted output with pattern is ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$fmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$fmt </span><span style="color: #007700">= new </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">(<br />    </span><span style="color: #DD0000">'de-DE'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'America/Los_Angeles'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">GREGORIAN</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'MM/dd/yyyy'<br /></span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">'Second Formatted output with pattern is ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$fmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
     <p class="para">The above example will output:</p>
     <div class="example-contents screen">
         <div class="examplescode"><pre class="examplescode">First Formatted output is Wednesday, December 31, 1969 4:00:00 PM PT
Second Formatted output is Mittwoch, 31. Dezember 1969 16:00 Uhr GMT-08:00
First Formatted output with pattern is 12/31/1969
Second Formatted output with pattern is 12/31/1969</pre>
</div>
     </div>

   <div class="example" id="example-2627">
   <p><strong>Example #3 With <span class="classname"><a href="class.intlcalendar.php" class="classname">IntlCalendar</a></span> object</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$tz </span><span style="color: #007700">= </span><span style="color: #0000BB">reset</span><span style="color: #007700">(</span><span style="color: #0000BB">iterator_to_array</span><span style="color: #007700">(</span><span style="color: #0000BB">IntlTimeZone</span><span style="color: #007700">::</span><span style="color: #0000BB">createEnumeration</span><span style="color: #007700">(</span><span style="color: #DD0000">'FR'</span><span style="color: #007700">)));<br /></span><span style="color: #0000BB">$formatter </span><span style="color: #007700">= </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">create</span><span style="color: #007700">(<br />    </span><span style="color: #DD0000">'fr_FR'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">FULL</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">$tz</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">IntlDateFormatter</span><span style="color: #007700">::</span><span style="color: #0000BB">GREGORIAN<br /></span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$cal </span><span style="color: #007700">= </span><span style="color: #0000BB">IntlCalendar</span><span style="color: #007700">::</span><span style="color: #0000BB">createInstance</span><span style="color: #007700">(</span><span style="color: #0000BB">$tz</span><span style="color: #007700">, </span><span style="color: #DD0000">'@calendar=islamic-civil'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$cal</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">IntlCalendar</span><span style="color: #007700">::</span><span style="color: #0000BB">FIELD_MONTH</span><span style="color: #007700">, </span><span style="color: #0000BB">8</span><span style="color: #007700">); </span><span style="color: #FF8000">//9th month, Ramadan<br /></span><span style="color: #0000BB">$cal</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">IntlCalendar</span><span style="color: #007700">::</span><span style="color: #0000BB">FIELD_DAY_OF_MONTH</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">); </span><span style="color: #FF8000">//1st day<br /></span><span style="color: #0000BB">$cal</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clear</span><span style="color: #007700">(</span><span style="color: #0000BB">IntlCalendar</span><span style="color: #007700">::</span><span style="color: #0000BB">FIELD_HOUR_OF_DAY</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$cal</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clear</span><span style="color: #007700">(</span><span style="color: #0000BB">IntlCalendar</span><span style="color: #007700">::</span><span style="color: #0000BB">FIELD_MINUTE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$cal</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clear</span><span style="color: #007700">(</span><span style="color: #0000BB">IntlCalendar</span><span style="color: #007700">::</span><span style="color: #0000BB">FIELD_SECOND</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$cal</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clear</span><span style="color: #007700">(</span><span style="color: #0000BB">IntlCalendar</span><span style="color: #007700">::</span><span style="color: #0000BB">FIELD_MILLISECOND</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"In this islamic year, Ramadan started/will start on:\n\t"</span><span style="color: #007700">,<br />        </span><span style="color: #0000BB">$formatter</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$cal</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//Itʼs the formatterʼs timezone that is used:<br /></span><span style="color: #0000BB">$formatter</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setTimeZone</span><span style="color: #007700">(</span><span style="color: #DD0000">'Asia/Tokyo'</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"After changing timezone:\n\t"</span><span style="color: #007700">,<br />        </span><span style="color: #0000BB">$formatter</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$cal</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">In this islamic year, Ramadan started/will start on:
    mardi 9 juillet 2013 19:00:00 heure avancée d’Europe centrale
After changing timezone:
    mercredi 10 juillet 2013 02:00:00 heure normale du Japon</pre>
</div>
    </div>
   </div>

 </div>


 <div class="refsect1 seealso" id="refsect1-intldateformatter.format-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="intldateformatter.create.php" class="function" rel="rdfs-seeAlso">datefmt_create()</a> - Create a date formatter</span></li>
    <li><span class="function"><a href="intldateformatter.parse.php" class="function" rel="rdfs-seeAlso">datefmt_parse()</a> - Parse string to a timestamp value</span></li>
    <li><span class="function"><a href="intldateformatter.geterrorcode.php" class="function" rel="rdfs-seeAlso">datefmt_get_error_code()</a> - Get the error code from last operation</span></li>
    <li><span class="function"><a href="intldateformatter.geterrormessage.php" class="function" rel="rdfs-seeAlso">datefmt_get_error_message()</a> - Get the error text from the last operation</span></li>
    <li><span class="function"><a href="intldateformatter.formatobject.php" class="function" rel="rdfs-seeAlso">datefmt_format_object()</a> - Formats an object</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/dateformatter/format.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fintldateformatter.format%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=intldateformatter.format&amp;repo=en&amp;redirect=https://www.php.net/manual/en/intldateformatter.format.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111321">  <div class="votes">
    <div id="Vu111321">
    <a href="/manual/vote-note.php?id=111321&amp;page=intldateformatter.format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111321">
    <a href="/manual/vote-note.php?id=111321&amp;page=intldateformatter.format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111321" title="96% like this...">
    50
    </div>
  </div>
  <a href="#111321" class="name">
  <strong class="user"><em>mail dot dennisbecker at gmail dot com</em></strong></a><a class="genanchor" href="#111321"> &para;</a><div class="date" title="2013-02-06 04:38"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111321">
<div class="phpcode"><code><span class="html">You should know that PHPs IntlDateFormatter class uses ISO date format codes instead of PHPs date() format codes. It is not really clear mentioned from my point of view.<br /><br />A good list to find ISO codes is available at <a href="http://framework.zend.com/manual/1.12/en/zend.date.constants.html#zend.date.constants.selfdefinedformats" rel="nofollow" target="_blank">http://framework.zend.com/manual/1.12/en/zend.date.constants.html#zend.date.constants.selfdefinedformats</a> and such a list should be added here, too.</span></code></div>
  </div>
 </div>
  <div class="note" id="106070">  <div class="votes">
    <div id="Vu106070">
    <a href="/manual/vote-note.php?id=106070&amp;page=intldateformatter.format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106070">
    <a href="/manual/vote-note.php?id=106070&amp;page=intldateformatter.format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106070" title="100% like this...">
    15
    </div>
  </div>
  <a href="#106070" class="name">
  <strong class="user"><em>con at bartrail dot de</em></strong></a><a class="genanchor" href="#106070"> &para;</a><div class="date" title="2011-10-07 04:47"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106070">
<div class="phpcode"><code><span class="html">I hope this will save some time for others who have to struggle with different php versions on dev and prod plattform in the future:<br /><br />when formatting a DateTime object with a *custom pattern*, be sure to use a timestamp to pass at the IntlDateFormatter::format in order to have it working on different php versions:<br /><br />Example for PHP Version 5.3.5-1ubuntu7.2 (my dev machine):<br /><span class="default">&lt;?php<br />$date </span><span class="keyword">= new </span><span class="default">\DateTime</span><span class="keyword">();<br /><br /></span><span class="default">$dateFormatter </span><span class="keyword">= </span><span class="default">\IntlDateFormatter</span><span class="keyword">::</span><span class="default">create</span><span class="keyword">(<br />  </span><span class="default">\Locale</span><span class="keyword">::</span><span class="default">getDefault</span><span class="keyword">(),<br />  </span><span class="default">\IntlDateFormatter</span><span class="keyword">::</span><span class="default">NONE</span><span class="keyword">,<br />  </span><span class="default">\IntlDateFormatter</span><span class="keyword">::</span><span class="default">NONE</span><span class="keyword">,<br />  </span><span class="default">\date_default_timezone_get</span><span class="keyword">(),<br />  </span><span class="default">\IntlDateFormatter</span><span class="keyword">::</span><span class="default">GREGORIAN</span><span class="keyword">,<br />  </span><span class="string">'EEEE'<br /></span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$dateFormatter</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">)); </span><span class="comment">// string(6) "Monday"<br /></span><span class="default">?&gt;<br /></span><br />Example for PHP Version 5.3.2-1ubuntu4.9 (the prod server):<br /><span class="default">&lt;?php<br /></span><span class="comment">// same formatting as above<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$dateFormatter</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">)); </span><span class="comment">// bool(false)<br /></span><span class="default">?&gt;<br /></span><br />When using $dateFormatter-&gt;format($date-&gt;getTimestamp()), you'll always get the formatted and localized string instead of a false.</span></code></div>
  </div>
 </div>
  <div class="note" id="126471">  <div class="votes">
    <div id="Vu126471">
    <a href="/manual/vote-note.php?id=126471&amp;page=intldateformatter.format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126471">
    <a href="/manual/vote-note.php?id=126471&amp;page=intldateformatter.format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126471" title="84% like this...">
    13
    </div>
  </div>
  <a href="#126471" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126471"> &para;</a><div class="date" title="2021-10-03 03:54"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126471">
<div class="phpcode"><code><span class="html">DATE FIELD SYMBOL TABLE<br /><br /><a href="https://unicode-org.github.io/icu/userguide/format_parse/datetime/#date-field-symbol-table" rel="nofollow" target="_blank">https://unicode-org.github.io/icu/userguide/format_parse/datetime/#date-field-symbol-table</a></span></code></div>
  </div>
 </div>
  <div class="note" id="97988">  <div class="votes">
    <div id="Vu97988">
    <a href="/manual/vote-note.php?id=97988&amp;page=intldateformatter.format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97988">
    <a href="/manual/vote-note.php?id=97988&amp;page=intldateformatter.format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97988" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#97988" class="name">
  <strong class="user"><em>alex</em></strong></a><a class="genanchor" href="#97988"> &para;</a><div class="date" title="2010-05-19 11:10"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97988">
<div class="phpcode"><code><span class="html">It's important to note that a conversion of timezones will be made from the default timezone (date_default_timezone_set()) and the timezone you passed in the constructor (or datefmt_create()).<br /><br />If you are inserting the dates into your database as UTC time, make sure to set date_default_timezone_set to UTC as well (or any other timezone, but they need to be the same). Once you call ::format, you will get the converted time.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=intldateformatter.format&amp;repo=en&amp;redirect=https://www.php.net/manual/en/intldateformatter.format.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.intldateformatter.php">IntlDateFormatter</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intldateformatter.create.php" title="create">create</a>
                        </li>
                                                <li class="current">
                            <a href="intldateformatter.format.php" title="format">format</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.formatobject.php" title="formatObject">formatObject</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.getcalendar.php" title="getCalendar">getCalendar</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.getdatetype.php" title="getDateType">getDateType</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.geterrorcode.php" title="getErrorCode">getErrorCode</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.geterrormessage.php" title="getErrorMessage">getErrorMessage</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.getlocale.php" title="getLocale">getLocale</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.getpattern.php" title="getPattern">getPattern</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.gettimetype.php" title="getTimeType">getTimeType</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.gettimezoneid.php" title="getTimeZoneId">getTimeZoneId</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.getcalendarobject.php" title="getCalendarObject">getCalendarObject</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.gettimezone.php" title="getTimeZone">getTimeZone</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.islenient.php" title="isLenient">isLenient</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.localtime.php" title="localtime">localtime</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.parse.php" title="parse">parse</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.setcalendar.php" title="setCalendar">setCalendar</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.setlenient.php" title="setLenient">setLenient</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.setpattern.php" title="setPattern">setPattern</a>
                        </li>
                                                <li class="">
                            <a href="intldateformatter.settimezone.php" title="setTimeZone">setTimeZone</a>
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
