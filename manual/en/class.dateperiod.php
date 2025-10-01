<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DatePeriod - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.dateperiod.php">
 <link rel="shorturl" href="https://www.php.net/dateperiod">
 <link rel="alternate" href="https://www.php.net/dateperiod" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.datetime.php">
 <link rel="prev" href="https://www.php.net/manual/en/dateinterval.format.php">
 <link rel="next" href="https://www.php.net/manual/en/dateperiod.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.dateperiod.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.dateperiod.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.dateperiod.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.dateperiod.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.dateperiod.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.dateperiod.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.dateperiod.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.dateperiod.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.dateperiod.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.dateperiod.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.dateperiod.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The DatePeriod class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DatePeriod - Manual" />
<meta name="twitter:description" content="The DatePeriod class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DatePeriod - Manual" />
<meta itemprop="description" content="The DatePeriod class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The DatePeriod class" />

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
        <a href="dateperiod.construct.php">
          DatePeriod::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="dateinterval.format.php">
          &laquo; DateInterval::format        </a>
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
            <option value='en/class.dateperiod.php' selected="selected">English</option>
            <option value='de/class.dateperiod.php'>German</option>
            <option value='es/class.dateperiod.php'>Spanish</option>
            <option value='fr/class.dateperiod.php'>French</option>
            <option value='it/class.dateperiod.php'>Italian</option>
            <option value='ja/class.dateperiod.php'>Japanese</option>
            <option value='pt_BR/class.dateperiod.php'>Brazilian Portuguese</option>
            <option value='ru/class.dateperiod.php'>Russian</option>
            <option value='tr/class.dateperiod.php'>Turkish</option>
            <option value='uk/class.dateperiod.php'>Ukrainian</option>
            <option value='zh/class.dateperiod.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.dateperiod" class="reference">

 <h1 class="title">The DatePeriod class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>


  <div class="section" id="dateperiod.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Represents a date period.
   </p>
   <p class="para">
    A date period allows iteration over a set of dates and times, recurring at
    regular intervals, over a given period.
   </p>
  </div>


  <div class="section" id="dateperiod.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">DatePeriod</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.dateperiod.php#dateperiod.constants.exclude-start-date"><var class="varname">EXCLUDE_START_DATE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.dateperiod.php#dateperiod.constants.include-end-date"><var class="varname">INCLUDE_END_DATE</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.dateperiod.php#dateperiod.props.start">$<var class="varname">start</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.dateperiod.php#dateperiod.props.current">$<var class="varname">current</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.dateperiod.php#dateperiod.props.end">$<var class="varname">end</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.dateinterval.php" class="type DateInterval">DateInterval</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.dateperiod.php#dateperiod.props.interval">$<var class="varname">interval</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.dateperiod.php#dateperiod.props.recurrences">$<var class="varname">recurrences</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.dateperiod.php#dateperiod.props.include-start-date">$<var class="varname">include_start_date</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.dateperiod.php#dateperiod.props.include-end-date">$<var class="varname">include_end_date</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="dateperiod.construct.php" class="methodname">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span> <code class="parameter">$start</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.dateinterval.php" class="type DateInterval">DateInterval</a></span> <code class="parameter">$interval</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$recurrences</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span><br>)</div>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="dateperiod.construct.php" class="methodname">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span> <code class="parameter">$start</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.dateinterval.php" class="type DateInterval">DateInterval</a></span> <code class="parameter">$interval</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span> <code class="parameter">$end</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span><br>)</div>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="dateperiod.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$isostr</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="dateperiod.createfromiso8601string.php" class="methodname">createFromISO8601String</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$specification</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type">static</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="dateperiod.getdateinterval.php" class="methodname">getDateInterval</a></span>(): <span class="type"><a href="class.dateinterval.php" class="type DateInterval">DateInterval</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="dateperiod.getenddate.php" class="methodname">getEndDate</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="dateperiod.getrecurrences.php" class="methodname">getRecurrences</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="dateperiod.getstartdate.php" class="methodname">getStartDate</a></span>(): <span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span></div>

   }</div>


  </div>


  <div class="section" id="dateperiod.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>
    
     <dt id="dateperiod.constants.exclude-start-date">
      <strong><code><a href="class.dateperiod.php#dateperiod.constants.exclude-start-date">DatePeriod::EXCLUDE_START_DATE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">Exclude start date, used in <span class="function"><a href="dateperiod.construct.php" class="function">DatePeriod::__construct()</a></span>.</p>
     </dd>
    

    
     <dt id="dateperiod.constants.include-end-date">
      <strong><code><a href="class.dateperiod.php#dateperiod.constants.include-end-date">DatePeriod::INCLUDE_END_DATE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">Include end date, used in <span class="function"><a href="dateperiod.construct.php" class="function">DatePeriod::__construct()</a></span>.</p>
     </dd>
    

   </dl>
  </div>


  <div class="section" id="dateperiod.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="dateperiod.props.recurrences"><var class="varname">recurrences</var></dt>
     <dd>
      <p class="para">
       The minimum amount of instances as retured by the iterator.
      </p>
      <p class="para">
       If the number of recurrences has been explicitly passed through the
       <var class="varname">recurrences</var> parameter in the constructor of the
       <span class="classname"><strong class="classname">DatePeriod</strong></span> instance, then this property contains
       this value, <em>plus</em> one if the start date has not been disabled
       through <strong><code><a href="class.dateperiod.php#dateperiod.constants.exclude-start-date">DatePeriod::EXCLUDE_START_DATE</a></code></strong>,
       <em>plus</em> one if the end date has been enabled through
       <strong><code><a href="class.dateperiod.php#dateperiod.constants.include-end-date">DatePeriod::INCLUDE_END_DATE</a></code></strong>.
      </p>
      <p class="para">
       If the number of recurrences has not been explicitly passed, then this
       property contains the minimum number of returned instances. This would
       be <code class="literal">0</code>, <em>plus</em> one if the start date
       has not been disabled through
       <strong><code><a href="class.dateperiod.php#dateperiod.constants.exclude-start-date">DatePeriod::EXCLUDE_START_DATE</a></code></strong>,
       <em>plus</em> one if the end date has been enabled through
       <strong><code><a href="class.dateperiod.php#dateperiod.constants.include-end-date">DatePeriod::INCLUDE_END_DATE</a></code></strong>.
      </p>
      <p class="para">
       <div class="informalexample">
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$start </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">'2018-12-31 00:00:00'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$end   </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">'2021-12-31 00:00:00'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$interval </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateInterval</span><span style="color: #007700">(</span><span style="color: #DD0000">'P1M'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$recurrences </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// recurrences explicitly set through the constructor<br /></span><span style="color: #0000BB">$period </span><span style="color: #007700">= new </span><span style="color: #0000BB">DatePeriod</span><span style="color: #007700">(</span><span style="color: #0000BB">$start</span><span style="color: #007700">, </span><span style="color: #0000BB">$interval</span><span style="color: #007700">, </span><span style="color: #0000BB">$recurrences</span><span style="color: #007700">, </span><span style="color: #0000BB">DatePeriod</span><span style="color: #007700">::</span><span style="color: #0000BB">EXCLUDE_START_DATE</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$period</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recurrences</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$period </span><span style="color: #007700">= new </span><span style="color: #0000BB">DatePeriod</span><span style="color: #007700">(</span><span style="color: #0000BB">$start</span><span style="color: #007700">, </span><span style="color: #0000BB">$interval</span><span style="color: #007700">, </span><span style="color: #0000BB">$recurrences</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$period</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recurrences</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$period </span><span style="color: #007700">= new </span><span style="color: #0000BB">DatePeriod</span><span style="color: #007700">(</span><span style="color: #0000BB">$start</span><span style="color: #007700">, </span><span style="color: #0000BB">$interval</span><span style="color: #007700">, </span><span style="color: #0000BB">$recurrences</span><span style="color: #007700">, </span><span style="color: #0000BB">DatePeriod</span><span style="color: #007700">::</span><span style="color: #0000BB">INCLUDE_END_DATE</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$period</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recurrences</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// recurrences not set in the constructor<br /></span><span style="color: #0000BB">$period </span><span style="color: #007700">= new </span><span style="color: #0000BB">DatePeriod</span><span style="color: #007700">(</span><span style="color: #0000BB">$start</span><span style="color: #007700">, </span><span style="color: #0000BB">$interval</span><span style="color: #007700">, </span><span style="color: #0000BB">$end</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$period</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recurrences</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$period </span><span style="color: #007700">= new </span><span style="color: #0000BB">DatePeriod</span><span style="color: #007700">(</span><span style="color: #0000BB">$start</span><span style="color: #007700">, </span><span style="color: #0000BB">$interval</span><span style="color: #007700">, </span><span style="color: #0000BB">$end</span><span style="color: #007700">, </span><span style="color: #0000BB">DatePeriod</span><span style="color: #007700">::</span><span style="color: #0000BB">EXCLUDE_START_DATE</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$period</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recurrences</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
         </div>

         <p class="para">The above example will output:</p>
         <div class="example-contents screen"><br />
5<br />
6<br />
7<br />
1<br />
0<br />
         </div>
        </div>
       </p>
      <p class="para">
       See also <span class="methodname"><a href="dateperiod.getrecurrences.php" class="methodname">DatePeriod::getRecurrences()</a></span>.
      </p>
     </dd>
    
    
     <dt id="dateperiod.props.include-end-date"><var class="varname">include_end_date</var></dt>
     <dd>
      <p class="para">
       Whether to include the end date in the set of recurring dates or not.
      </p>
     </dd>
    
    
     <dt id="dateperiod.props.include-start-date"><var class="varname">include_start_date</var></dt>
     <dd>
      <p class="para">
       Whether to include the start date in the set of recurring dates or not.
      </p>
     </dd>
    
    
     <dt id="dateperiod.props.start"><var class="varname">start</var></dt>
     <dd>
      <p class="para">
       The start date of the period.
      </p>
     </dd>
    
    
     <dt id="dateperiod.props.current"><var class="varname">current</var></dt>
     <dd>
      <p class="para">
       During iteration this will contain the current date within the period.
      </p>
     </dd>
    
    
     <dt id="dateperiod.props.end"><var class="varname">end</var></dt>
     <dd>
      <p class="para">
       The end date of the period.
      </p>
     </dd>
    
    
     <dt id="dateperiod.props.interval"><var class="varname">interval</var></dt>
     <dd>
      <p class="para">
       An ISO 8601 repeating interval specification.
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

      <tr>
       <td>8.2.0</td>
       <td>
        The <strong><code><a href="class.dateperiod.php#dateperiod.constants.include-end-date">DatePeriod::INCLUDE_END_DATE</a></code></strong> constant and
        <span class="property">include_end_date</span> property have been added.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <span class="classname"><strong class="classname">DatePeriod</strong></span> implements
        <span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span> now.
        Previously, <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span> was implemented instead.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>

 </div>

 































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="dateperiod.construct.php">DatePeriod::__construct</a> — Creates a new DatePeriod object</li><li><a href="dateperiod.createfromiso8601string.php">DatePeriod::createFromISO8601String</a> — Creates a new DatePeriod object from an ISO8601 string</li><li><a href="dateperiod.getdateinterval.php">DatePeriod::getDateInterval</a> — Gets the interval</li><li><a href="dateperiod.getenddate.php">DatePeriod::getEndDate</a> — Gets the end date</li><li><a href="dateperiod.getrecurrences.php">DatePeriod::getRecurrences</a> — Gets the number of recurrences</li><li><a href="dateperiod.getstartdate.php">DatePeriod::getStartDate</a> — Gets the start date</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/dateperiod.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.dateperiod%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.dateperiod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.dateperiod.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120483">  <div class="votes">
    <div id="Vu120483">
    <a href="/manual/vote-note.php?id=120483&amp;page=class.dateperiod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120483">
    <a href="/manual/vote-note.php?id=120483&amp;page=class.dateperiod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120483" title="75% like this...">
    32
    </div>
  </div>
  <a href="#120483" class="name">
  <strong class="user"><em>mail at pascalhofmann dot de</em></strong></a><a class="genanchor" href="#120483"> &para;</a><div class="date" title="2017-01-19 09:58"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120483">
<div class="phpcode"><code><span class="html">When looping over a DatePeriod object, the returned objects always implement DateTimeInterface. The exact type returned depends on how the DatePeriod was created. If $start was a DateTimeImmutable, the objects returned will be of type DateTimeImmutable. If a DateTime object was used, the objects returned will be of type DateTime.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.dateperiod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.dateperiod.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="class.dateinterval.php" title="DateInterval">DateInterval</a>
                        </li>
                                                <li class="current">
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
