<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Calendar Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.calendar.php">
 <link rel="shorturl" href="https://www.php.net/calendar">
 <link rel="alternate" href="https://www.php.net/calendar" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.calendar.php">
 <link rel="prev" href="https://www.php.net/manual/en/calendar.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/function.cal-days-in-month.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.calendar.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.calendar.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.calendar.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.calendar.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.calendar.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.calendar.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.calendar.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.calendar.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.calendar.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.calendar.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.calendar.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Calendar Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Calendar Functions - Manual" />
<meta name="twitter:description" content="Calendar Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Calendar Functions - Manual" />
<meta itemprop="description" content="Calendar Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Calendar Functions" />

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
        <a href="function.cal-days-in-month.php">
          cal_days_in_month &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="calendar.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      <li><a href='book.calendar.php'>Calendar</a></li>      </ul>
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
            <option value='en/ref.calendar.php' selected="selected">English</option>
            <option value='de/ref.calendar.php'>German</option>
            <option value='es/ref.calendar.php'>Spanish</option>
            <option value='fr/ref.calendar.php'>French</option>
            <option value='it/ref.calendar.php'>Italian</option>
            <option value='ja/ref.calendar.php'>Japanese</option>
            <option value='pt_BR/ref.calendar.php'>Brazilian Portuguese</option>
            <option value='ru/ref.calendar.php'>Russian</option>
            <option value='tr/ref.calendar.php'>Turkish</option>
            <option value='uk/ref.calendar.php'>Ukrainian</option>
            <option value='zh/ref.calendar.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.calendar" class="reference">
  <h1 class="title">Calendar Functions</h1>



































































































 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.cal-days-in-month.php">cal_days_in_month</a> — Return the number of days in a month for a given year and calendar</li><li><a href="function.cal-from-jd.php">cal_from_jd</a> — Converts from Julian Day Count to a supported calendar</li><li><a href="function.cal-info.php">cal_info</a> — Returns information about a particular calendar</li><li><a href="function.cal-to-jd.php">cal_to_jd</a> — Converts from a supported calendar to Julian Day Count</li><li><a href="function.easter-date.php">easter_date</a> — Get Unix timestamp for local midnight on Easter of a given year</li><li><a href="function.easter-days.php">easter_days</a> — Get number of days after March 21 on which Easter falls for a given year</li><li><a href="function.frenchtojd.php">frenchtojd</a> — Converts a date from the French Republican Calendar to a Julian Day Count</li><li><a href="function.gregoriantojd.php">gregoriantojd</a> — Converts a Gregorian date to Julian Day Count</li><li><a href="function.jddayofweek.php">jddayofweek</a> — Returns the day of the week</li><li><a href="function.jdmonthname.php">jdmonthname</a> — Returns a month name</li><li><a href="function.jdtofrench.php">jdtofrench</a> — Converts a Julian Day Count to the French Republican Calendar</li><li><a href="function.jdtogregorian.php">jdtogregorian</a> — Converts Julian Day Count to Gregorian date</li><li><a href="function.jdtojewish.php">jdtojewish</a> — Converts a Julian day count to a Jewish calendar date</li><li><a href="function.jdtojulian.php">jdtojulian</a> — Converts a Julian Day Count to a Julian Calendar Date</li><li><a href="function.jdtounix.php">jdtounix</a> — Convert Julian Day to Unix timestamp</li><li><a href="function.jewishtojd.php">jewishtojd</a> — Converts a date in the Jewish Calendar to Julian Day Count</li><li><a href="function.juliantojd.php">juliantojd</a> — Converts a Julian Calendar date to Julian Day Count</li><li><a href="function.unixtojd.php">unixtojd</a> — Convert Unix timestamp to Julian Day</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/calendar/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.calendar%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.calendar&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.calendar.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="77159">  <div class="votes">
    <div id="Vu77159">
    <a href="/manual/vote-note.php?id=77159&amp;page=ref.calendar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77159">
    <a href="/manual/vote-note.php?id=77159&amp;page=ref.calendar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77159" title="61% like this...">
    22
    </div>
  </div>
  <a href="#77159" class="name">
  <strong class="user"><em>david dot scourfield at llynfi dot co dot uk</em></strong></a><a class="genanchor" href="#77159"> &para;</a><div class="date" title="2007-08-17 03:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77159">
<div class="phpcode"><code><span class="html">I created this function a while ago and needed it again recently, so had to trawl through some old files to find it. Thought I'd post it here in case anyone else finds it useful.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/*<br /> *    Function to calculate which days are British bank holidays (England &amp; Wales) for a given year.<br /> *<br /> *    Created by David Scourfield, 07 August 2006, and released into the public domain.<br /> *    Anybody may use and/or modify this code.<br /> *<br /> *    USAGE:<br /> *<br /> *    array calculateBankHolidays(int $yr)<br /> *<br /> *    ARGUMENTS<br /> *<br /> *    $yr = 4 digit numeric representation of the year (eg 1997).<br /> *<br /> *    RETURN VALUE<br /> *<br /> *    Returns an array of strings where each string is a date of a bank holiday in the format "yyyy-mm-dd".<br /> *<br /> *    See example below<br /> *<br /> */<br /><br /></span><span class="keyword">function </span><span class="default">calculateBankHolidays</span><span class="keyword">(</span><span class="default">$yr</span><span class="keyword">) {<br /><br />    </span><span class="default">$bankHols </span><span class="keyword">= Array();<br /><br />    </span><span class="comment">// New year's:<br />    </span><span class="keyword">switch ( </span><span class="default">date</span><span class="keyword">(</span><span class="string">"w"</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">"</span><span class="default">$yr</span><span class="string">-01-01 12:00:00"</span><span class="keyword">)) ) {<br />        case </span><span class="default">6</span><span class="keyword">:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-01-03"</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">0</span><span class="keyword">:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-01-02"</span><span class="keyword">;<br />            break;<br />        default:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-01-01"</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// Good friday:<br />    </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="default">date</span><span class="keyword">(</span><span class="string">"Y-m-d"</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">( </span><span class="string">"+"</span><span class="keyword">.(</span><span class="default">easter_days</span><span class="keyword">(</span><span class="default">$yr</span><span class="keyword">) - </span><span class="default">2</span><span class="keyword">).</span><span class="string">" days"</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">"</span><span class="default">$yr</span><span class="string">-03-21 12:00:00"</span><span class="keyword">) ));<br /><br />    </span><span class="comment">// Easter Monday:<br />    </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="default">date</span><span class="keyword">(</span><span class="string">"Y-m-d"</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">( </span><span class="string">"+"</span><span class="keyword">.(</span><span class="default">easter_days</span><span class="keyword">(</span><span class="default">$yr</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">).</span><span class="string">" days"</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">"</span><span class="default">$yr</span><span class="string">-03-21 12:00:00"</span><span class="keyword">) ));<br /><br />    </span><span class="comment">// May Day:<br />    </span><span class="keyword">if (</span><span class="default">$yr </span><span class="keyword">== </span><span class="default">1995</span><span class="keyword">) {<br />        </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"1995-05-08"</span><span class="keyword">; </span><span class="comment">// VE day 50th anniversary year exception<br />    </span><span class="keyword">} else {<br />        switch (</span><span class="default">date</span><span class="keyword">(</span><span class="string">"w"</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-01 12:00:00"</span><span class="keyword">))) {<br />            case </span><span class="default">0</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-02"</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">1</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-01"</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">2</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-07"</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">3</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-06"</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">4</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-05"</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">5</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-04"</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">6</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-03"</span><span class="keyword">;<br />                break;<br />        }<br />    }<br /><br />    </span><span class="comment">// Whitsun:<br />    </span><span class="keyword">if (</span><span class="default">$yr </span><span class="keyword">== </span><span class="default">2002</span><span class="keyword">) { </span><span class="comment">// exception year<br />        </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"2002-06-03"</span><span class="keyword">;<br />        </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"2002-06-04"</span><span class="keyword">;<br />    } else {<br />        switch (</span><span class="default">date</span><span class="keyword">(</span><span class="string">"w"</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-31 12:00:00"</span><span class="keyword">))) {<br />            case </span><span class="default">0</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-25"</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">1</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-31"</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">2</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-30"</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">3</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-29"</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">4</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-28"</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">5</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-27"</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">6</span><span class="keyword">:<br />                </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-05-26"</span><span class="keyword">;<br />                break;<br />        }<br />    }<br /><br />    </span><span class="comment">// Summer Bank Holiday:<br />    </span><span class="keyword">switch (</span><span class="default">date</span><span class="keyword">(</span><span class="string">"w"</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">"</span><span class="default">$yr</span><span class="string">-08-31 12:00:00"</span><span class="keyword">))) {<br />        case </span><span class="default">0</span><span class="keyword">:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-08-25"</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">1</span><span class="keyword">:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-08-31"</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">2</span><span class="keyword">:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-08-30"</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">3</span><span class="keyword">:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-08-29"</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">4</span><span class="keyword">:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-08-28"</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">5</span><span class="keyword">:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-08-27"</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">6</span><span class="keyword">:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-08-26"</span><span class="keyword">;<br />            break;<br />    }<br /><br />    </span><span class="comment">// Christmas:<br />    </span><span class="keyword">switch ( </span><span class="default">date</span><span class="keyword">(</span><span class="string">"w"</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">"</span><span class="default">$yr</span><span class="string">-12-25 12:00:00"</span><span class="keyword">)) ) {<br />        case </span><span class="default">5</span><span class="keyword">:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-12-25"</span><span class="keyword">;<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-12-28"</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">6</span><span class="keyword">:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-12-27"</span><span class="keyword">;<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-12-28"</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">0</span><span class="keyword">:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-12-26"</span><span class="keyword">;<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-12-27"</span><span class="keyword">;<br />            break;<br />        default:<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-12-25"</span><span class="keyword">;<br />            </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$yr</span><span class="string">-12-26"</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// Millenium eve<br />    </span><span class="keyword">if (</span><span class="default">$yr </span><span class="keyword">== </span><span class="default">1999</span><span class="keyword">) {<br />        </span><span class="default">$bankHols</span><span class="keyword">[] = </span><span class="string">"1999-12-31"</span><span class="keyword">;<br />    }<br /><br />    return </span><span class="default">$bankHols</span><span class="keyword">;<br /><br />}<br /><br /></span><span class="comment">/*<br /> *    EXAMPLE:<br /> *<br /> */<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: text/plain"</span><span class="keyword">); <br /><br /></span><span class="default">$bankHolsThisYear </span><span class="keyword">= </span><span class="default">calculateBankHolidays</span><span class="keyword">(</span><span class="default">2007</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$bankHolsThisYear</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Will output this result:<br /><br />Array<br />(<br />    [0] =&gt; 2007-01-01<br />    [1] =&gt; 2007-04-06<br />    [2] =&gt; 2007-04-09<br />    [3] =&gt; 2007-05-07<br />    [4] =&gt; 2007-05-28<br />    [5] =&gt; 2007-08-27<br />    [6] =&gt; 2007-12-25<br />    [7] =&gt; 2007-12-26<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="121685">  <div class="votes">
    <div id="Vu121685">
    <a href="/manual/vote-note.php?id=121685&amp;page=ref.calendar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121685">
    <a href="/manual/vote-note.php?id=121685&amp;page=ref.calendar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121685" title="64% like this...">
    5
    </div>
  </div>
  <a href="#121685" class="name">
  <strong class="user"><em>obaida dot habboush at gmail dot com</em></strong></a><a class="genanchor" href="#121685"> &para;</a><div class="date" title="2017-09-25 11:39"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121685">
<div class="phpcode"><code><span class="html">Hello ,<br /><br />there is a mistake with function name <br /> <br />at class HijriCalendar {<br />.<br />.<br />.<br />.<br />.<br />.<br />function HijriToGregorian($m, $d, $y)<br />    {<br />        ////  jd_to_cal -&gt; It Should Be -&gt; cal_to_jd<br />        return jd_to_cal(CAL_GREGORIAN, HijriCalendar::HijriToJD($m, $d, $y));<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="36257">  <div class="votes">
    <div id="Vu36257">
    <a href="/manual/vote-note.php?id=36257&amp;page=ref.calendar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36257">
    <a href="/manual/vote-note.php?id=36257&amp;page=ref.calendar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36257" title="54% like this...">
    1
    </div>
  </div>
  <a href="#36257" class="name">
  <strong class="user"><em>jthome at fcgov dot com</em></strong></a><a class="genanchor" href="#36257"> &para;</a><div class="date" title="2003-10-02 11:38"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36257">
<div class="phpcode"><code><span class="html">Had a similar problem as curlee, except I needed to create a JDE_ERP date.  [format is CYYDDD]<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">jde_date_create</span><span class="keyword">(</span><span class="default">$month</span><span class="keyword">, </span><span class="default">$day</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">){<br />    </span><span class="comment">/*<br />    *  NOTE: $month and $day CANNOT have leading zeroes, <br />    *        $year must be'YYYY' format<br />    */<br />    </span><span class="default">$jde_year_prefix </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$year</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$jde_year_suffix </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$year</span><span class="keyword">, -</span><span class="default">2</span><span class="keyword">);<br />    <br />    </span><span class="comment">//note that valid years for mktime are 1902-2037<br />    </span><span class="default">$timestamp </span><span class="keyword">= </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$month</span><span class="keyword">, </span><span class="default">$day</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">);<br />    </span><span class="default">$baseline_timestamp </span><span class="keyword">= </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$year</span><span class="keyword">);<br />    <br />    </span><span class="default">$day_count </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">((</span><span class="default">$timestamp </span><span class="keyword">- </span><span class="default">$baseline_timestamp</span><span class="keyword">)/</span><span class="default">86400</span><span class="keyword">);<br />    </span><span class="default">$day_count_padded </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$day_count</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="string">"0"</span><span class="keyword">,</span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br /><br />    return (</span><span class="default">$jde_year_prefix </span><span class="keyword">. </span><span class="default">$jde_year_suffix </span><span class="keyword">. </span><span class="default">$day_count_padded</span><span class="keyword">);<br />    <br />}<br /><br />echo </span><span class="default">jde_date_create</span><span class="keyword">(</span><span class="default">6</span><span class="keyword">,</span><span class="default">25</span><span class="keyword">,</span><span class="default">2000</span><span class="keyword">);</span><span class="comment">// will return '103176'<br /><br /></span><span class="default">?&gt;<br /></span><br />--<br />Jim</span></code></div>
  </div>
 </div>
  <div class="note" id="79079">  <div class="votes">
    <div id="Vu79079">
    <a href="/manual/vote-note.php?id=79079&amp;page=ref.calendar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79079">
    <a href="/manual/vote-note.php?id=79079&amp;page=ref.calendar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79079" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#79079" class="name">
  <strong class="user"><em>simon at chronolabs dot org dot au</em></strong></a><a class="genanchor" href="#79079"> &para;</a><div class="date" title="2007-11-09 11:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79079">
<div class="phpcode"><code><span class="html">This is the egyptian calendar which was the first 365 day calendar on the planet it has no leap year which makes it a little inaccurate but you can work on your own implementation of this code when you like, this is another implementation of the roun floating point code which is a universal code for generating date codec's you can make practically all calendars with this code the $pweight is based on my research on carbon date stamping etc of when egypt epoch or PPO was made, some people argue a few thousand years while other can date egypts epoch being around 30000 years ago!! This is on the basis of tidal marking on statues and momuments when the are was covered in water after construction from sea level rising.<br /><br /><span class="default">&lt;?php<br /><br />print_r</span><span class="keyword">(</span><span class="default">EgyptCalendar</span><span class="keyword">(</span><span class="default">time</span><span class="keyword">(),</span><span class="default">0</span><span class="keyword">));<br /><br />function </span><span class="default">EgyptianCalendar</span><span class="keyword">(</span><span class="default">$unix_time</span><span class="keyword">, </span><span class="default">$gmt</span><span class="keyword">, <br />                 </span><span class="default">$poffset </span><span class="keyword">= </span><span class="string">'1970-02-26 7:45 PM'</span><span class="keyword">, <br />                 </span><span class="default">$pweight </span><span class="keyword">= </span><span class="string">'-9777600.22222222223'</span><span class="keyword">, <br />                 </span><span class="default">$defiency</span><span class="keyword">=</span><span class="string">'nonedeficient'</span><span class="keyword">, <br />                 </span><span class="default">$timeset</span><span class="keyword">= array(</span><span class="string">"hours" </span><span class="keyword">=&gt; </span><span class="default">24</span><span class="keyword">, <br />                                 </span><span class="string">"minutes" </span><span class="keyword">=&gt; </span><span class="default">60</span><span class="keyword">, <br />                                 </span><span class="string">"seconds" </span><span class="keyword">=&gt; </span><span class="default">60</span><span class="keyword">))<br />{<br /></span><span class="comment">// Code Segment 1 – Calculate Floating Point<br /></span><span class="default">$tme </span><span class="keyword">= </span><span class="default">$unix_time</span><span class="keyword">;<br /><br />if (</span><span class="default">$gmt</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">){</span><span class="default">$gmt</span><span class="keyword">=-</span><span class="default">$gmt</span><span class="keyword">;} else {</span><span class="default">$gmt</span><span class="keyword">=</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$gmt</span><span class="keyword">);}<br /><br /></span><span class="default">$ptime </span><span class="keyword">= </span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$poffset</span><span class="keyword">)+(</span><span class="default">60</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">*</span><span class="default">gmt</span><span class="keyword">);<br /></span><span class="default">$weight </span><span class="keyword">= </span><span class="default">$pweight</span><span class="keyword">+(</span><span class="default">1</span><span class="keyword">*</span><span class="default">gmt</span><span class="keyword">);<br /><br /></span><span class="default">$egypt_xa </span><span class="keyword">= (</span><span class="default">$tme</span><span class="keyword">)/(</span><span class="default">24</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">);<br /></span><span class="default">$egypt_ya </span><span class="keyword">= </span><span class="default">$ptime</span><span class="keyword">/(</span><span class="default">24</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">);<br /></span><span class="default">$egypt </span><span class="keyword">= ((</span><span class="default">$egypt_xa </span><span class="keyword">-</span><span class="default">$egypt_ya</span><span class="keyword">) -<br />         </span><span class="default">$weight</span><span class="keyword">)+(</span><span class="default">microtime</span><span class="keyword">/</span><span class="default">999999</span><span class="keyword">);<br /><br /></span><span class="comment">// Code Segment 2 – Set month day arrays<br /></span><span class="default">$nonedeficient </span><span class="keyword">= array(<br />   </span><span class="string">"seq1" </span><span class="keyword">=&gt; array(</span><span class="default">30</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">));<br /><br /></span><span class="default">$monthnames </span><span class="keyword">= array(<br />   </span><span class="string">"seq1" </span><span class="keyword">=&gt; array(</span><span class="string">'Thoth'</span><span class="keyword">,</span><span class="string">'Phaophi'</span><span class="keyword">,</span><span class="string">'Athyr'</span><span class="keyword">,</span><span class="string">'Choiak'</span><span class="keyword">,<br />   </span><span class="string">'Tybi'</span><span class="keyword">, </span><span class="string">'Mecheir'</span><span class="keyword">,</span><span class="string">'Phamenoth'</span><span class="keyword">,</span><span class="string">'Pharmuthi'</span><span class="keyword">,</span><span class="string">'Pachon'</span><span class="keyword">,<br />   </span><span class="string">'Payni'</span><span class="keyword">,</span><span class="string">'Epiphi'</span><span class="keyword">,</span><span class="string">'Mesore'</span><span class="keyword">,</span><span class="string">'epagomenai'</span><span class="keyword">));<br />                                    <br /></span><span class="default">$monthusage </span><span class="keyword">= isset(</span><span class="default">$defiency</span><span class="keyword">) ? ${</span><span class="default">$defiency</span><span class="keyword">} : </span><span class="default">$deficient</span><span class="keyword">;<br /><br /></span><span class="comment">// Code Segment 3 – Calculate month number, day number<br /></span><span class="keyword">foreach(</span><span class="default">$monthusage </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$item</span><span class="keyword">){<br />    </span><span class="default">$i</span><span class="keyword">++;<br />    foreach(</span><span class="default">$item </span><span class="keyword">as </span><span class="default">$numdays</span><span class="keyword">){<br />        </span><span class="default">$ttl_num</span><span class="keyword">=</span><span class="default">$ttl_num</span><span class="keyword">+</span><span class="default">$numdays</span><span class="keyword">;<br />        </span><span class="default">$ttl_num_months</span><span class="keyword">++;<br />    }<br />}<br /><br /></span><span class="default">$revolutionsperyear </span><span class="keyword">= </span><span class="default">$ttl_num </span><span class="keyword">/ </span><span class="default">$i</span><span class="keyword">;<br /></span><span class="default">$numyears </span><span class="keyword">= </span><span class="default">egyptd</span><span class="keyword">((</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$egypt</span><span class="keyword">) / </span><span class="default">$revolutionsperyear</span><span class="keyword">),</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$avg_num_month </span><span class="keyword">= </span><span class="default">$ttl_num_months</span><span class="keyword">/</span><span class="default">$i</span><span class="keyword">;<br /></span><span class="default">$jtl </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$egypt</span><span class="keyword">) - <br />       </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$revolutionsperyear</span><span class="keyword">*(</span><span class="default">$numyears</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">)));<br /><br />while(</span><span class="default">$month</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">){<br />    </span><span class="default">$day</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$u</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    foreach(</span><span class="default">$monthusage </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$item</span><span class="keyword">){<br />        </span><span class="default">$t</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;   <br />        foreach(</span><span class="default">$item </span><span class="keyword">as </span><span class="default">$numdays</span><span class="keyword">){<br />            </span><span class="default">$t</span><span class="keyword">++;<br />            </span><span class="default">$tt</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />            for(</span><span class="default">$sh</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$sh</span><span class="keyword">&lt;=</span><span class="default">$numdays</span><span class="keyword">;</span><span class="default">$sh</span><span class="keyword">++){<br />                </span><span class="default">$ii</span><span class="keyword">=</span><span class="default">$ii</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />                </span><span class="default">$tt</span><span class="keyword">++;<br />                if (</span><span class="default">$ii</span><span class="keyword">==</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$jtl</span><span class="keyword">)){<br />                    if (</span><span class="default">$egypt</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">){<br />                        </span><span class="default">$daynum </span><span class="keyword">= </span><span class="default">$tt</span><span class="keyword">;<br />                        </span><span class="default">$month </span><span class="keyword">= </span><span class="default">$t</span><span class="keyword">;<br />                    } else {<br />                        </span><span class="default">$daynum </span><span class="keyword">= </span><span class="default">$numdays</span><span class="keyword">-</span><span class="default">$tt</span><span class="keyword">;<br />                        </span><span class="default">$month </span><span class="keyword">= </span><span class="default">$avg_num_month</span><span class="keyword">-</span><span class="default">$t</span><span class="keyword">;<br />                    }<br />                    </span><span class="default">$sequence </span><span class="keyword">= </span><span class="default">$key</span><span class="keyword">;<br />                    </span><span class="default">$nodaycount</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;<br />                }<br />            }<br />            if (</span><span class="default">$nodaycount</span><span class="keyword">==</span><span class="default">false</span><span class="keyword">)<br />                </span><span class="default">$day</span><span class="keyword">++;<br />        }<br />        </span><span class="default">$u</span><span class="keyword">++;<br />    }<br />}<br /><br /></span><span class="comment">//$numyears = abs($numyears);<br /><br /></span><span class="default">$timer </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$egypt</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$egypt</span><span class="keyword">,</span><span class="string">'.'</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">,<br />    </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$egypt</span><span class="keyword">)-</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$egypt</span><span class="keyword">,</span><span class="string">'.'</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$egypt_out</span><span class="keyword">= </span><span class="default">$numyears</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$month</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$daynum</span><span class="keyword">.</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$day</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">. <br />    </span><span class="default">floor</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$timer</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">))/</span><span class="default">100</span><span class="keyword">*</span><span class="default">$timeset</span><span class="keyword">[</span><span class="string">'hours'</span><span class="keyword">]).</span><span class="string">':'</span><span class="keyword">. <br />    </span><span class="default">floor</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$timer</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">))/</span><span class="default">100</span><span class="keyword">*</span><span class="default">$timeset</span><span class="keyword">[</span><span class="string">'minutes'</span><span class="keyword">]).</span><span class="string">':'</span><span class="keyword">. <br />    </span><span class="default">floor</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$timer</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">))/</span><span class="default">100</span><span class="keyword">*</span><span class="default">$timeset</span><span class="keyword">[</span><span class="string">'seconds'</span><span class="keyword">]).</span><span class="string">'.'</span><span class="keyword">.<br />    </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$timer</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$timer</span><span class="keyword">)-</span><span class="default">6</span><span class="keyword">);<br /></span><span class="default">$egypt_obj </span><span class="keyword">= array(</span><span class="string">'year'</span><span class="keyword">=&gt;</span><span class="default">$numyears</span><span class="keyword">,<br />    </span><span class="string">'month'</span><span class="keyword">=&gt;</span><span class="default">$month</span><span class="keyword">, <br />    </span><span class="string">'mname' </span><span class="keyword">=&gt; </span><span class="default">$monthnames</span><span class="keyword">[</span><span class="default">$sequence</span><span class="keyword">][</span><span class="default">$month</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">],<br />    </span><span class="string">'day'</span><span class="keyword">=&gt;</span><span class="default">$daynum</span><span class="keyword">, <br />    </span><span class="string">'jtl'</span><span class="keyword">=&gt;</span><span class="default">$jtl</span><span class="keyword">, <br />    </span><span class="string">'day_count'</span><span class="keyword">=&gt;</span><span class="default">$day</span><span class="keyword">,<br />    </span><span class="string">'hours'</span><span class="keyword">=&gt;</span><span class="default">floor</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$timer</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">))/</span><span class="default">100<br />             </span><span class="keyword">*</span><span class="default">$timeset</span><span class="keyword">[</span><span class="string">'hours'</span><span class="keyword">]),<br />    </span><span class="string">'minute'</span><span class="keyword">=&gt;</span><span class="default">floor</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$timer</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">))/</span><span class="default">100<br />              </span><span class="keyword">*</span><span class="default">$timeset</span><span class="keyword">[</span><span class="string">'minutes'</span><span class="keyword">]),<br />    </span><span class="string">'seconds'</span><span class="keyword">=&gt;</span><span class="default">floor</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$timer</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">))/</span><span class="default">100<br />               </span><span class="keyword">*</span><span class="default">$timeset</span><span class="keyword">[</span><span class="string">'seconds'</span><span class="keyword">]),<br />    </span><span class="string">'microtime'</span><span class="keyword">=&gt;</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$timer</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$timer</span><span class="keyword">)-</span><span class="default">6</span><span class="keyword">),<br />                 </span><span class="string">'strout'</span><span class="keyword">=&gt;</span><span class="default">$egypt_out</span><span class="keyword">);<br /><br />return </span><span class="default">$egypt_obj</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />btw in my previous post of the Mayan Tikal calendar the top part of the function was chopped off in my code cut and paste that is the line for the function which looks like, the top 3 line will need to be replace with:<br /><br /><span class="default">&lt;?php<br /><br />print_r</span><span class="keyword">(</span><span class="default">MayanTikalCalendar</span><span class="keyword">(</span><span class="default">time</span><span class="keyword">(),</span><span class="default">0</span><span class="keyword">));<br /><br />function </span><span class="default">MayanTikalCalendar</span><span class="keyword">(</span><span class="default">$unix_time</span><span class="keyword">, </span><span class="default">$gmt</span><span class="keyword">, <br />                                   <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54234">  <div class="votes">
    <div id="Vu54234">
    <a href="/manual/vote-note.php?id=54234&amp;page=ref.calendar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54234">
    <a href="/manual/vote-note.php?id=54234&amp;page=ref.calendar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54234" title="47% like this...">
    -4
    </div>
  </div>
  <a href="#54234" class="name">
  <strong class="user"><em>amichauer at gmx dot de</em></strong></a><a class="genanchor" href="#54234"> &para;</a><div class="date" title="2005-06-27 09:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54234">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">HijriCalendar<br /></span><span class="keyword">{<br />    function </span><span class="default">monthName</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) </span><span class="comment">// $i = 1..12<br />    </span><span class="keyword">{<br />        static </span><span class="default">$month  </span><span class="keyword">= array(<br />            </span><span class="string">"M?x?rr?m"</span><span class="keyword">, </span><span class="string">"Safar"</span><span class="keyword">, </span><span class="string">"Rabig-?l-?ww?l"</span><span class="keyword">, </span><span class="string">"Rabig-?l-Ax?r"</span><span class="keyword">,<br />            </span><span class="string">"C?m?d-?l-?ww?l"</span><span class="keyword">, </span><span class="string">"C?m?d-?l-Ax?r"</span><span class="keyword">, </span><span class="string">"Rac?b"</span><span class="keyword">, </span><span class="string">"???b?n"</span><span class="keyword">,<br />            </span><span class="string">"Ramazan"</span><span class="keyword">, </span><span class="string">"??w?l"</span><span class="keyword">, </span><span class="string">"Z?-?l-Q??d?"</span><span class="keyword">, </span><span class="string">"Z?-?l-Xicc?"<br />        </span><span class="keyword">);<br />        return </span><span class="default">$month</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">];<br />    }<br /><br />    function </span><span class="default">GregorianToHijri</span><span class="keyword">(</span><span class="default">$time </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">$time </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) </span><span class="default">$time </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />        </span><span class="default">$m </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'m'</span><span class="keyword">, </span><span class="default">$time</span><span class="keyword">);<br />        </span><span class="default">$d </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'d'</span><span class="keyword">, </span><span class="default">$time</span><span class="keyword">);<br />        </span><span class="default">$y </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y'</span><span class="keyword">, </span><span class="default">$time</span><span class="keyword">);<br /><br />        return </span><span class="default">HijriCalendar</span><span class="keyword">::</span><span class="default">JDToHijri</span><span class="keyword">(<br />            </span><span class="default">cal_to_jd</span><span class="keyword">(</span><span class="default">CAL_GREGORIAN</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">));<br />    }<br /><br />    function </span><span class="default">HijriToGregorian</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">)<br />    {<br />        return </span><span class="default">jd_to_cal</span><span class="keyword">(</span><span class="default">CAL_GREGORIAN</span><span class="keyword">,<br />            </span><span class="default">HijriCalendar</span><span class="keyword">::</span><span class="default">HijriToJD</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">));<br />    }<br /><br />    </span><span class="comment"># Julian Day Count To Hijri<br />    </span><span class="keyword">function </span><span class="default">JDToHijri</span><span class="keyword">(</span><span class="default">$jd</span><span class="keyword">)<br />    {<br />        </span><span class="default">$jd </span><span class="keyword">= </span><span class="default">$jd </span><span class="keyword">- </span><span class="default">1948440 </span><span class="keyword">+ </span><span class="default">10632</span><span class="keyword">;<br />        </span><span class="default">$n  </span><span class="keyword">= (int)((</span><span class="default">$jd </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) / </span><span class="default">10631</span><span class="keyword">);<br />        </span><span class="default">$jd </span><span class="keyword">= </span><span class="default">$jd </span><span class="keyword">- </span><span class="default">10631 </span><span class="keyword">* </span><span class="default">$n </span><span class="keyword">+ </span><span class="default">354</span><span class="keyword">;<br />        </span><span class="default">$j  </span><span class="keyword">= ((int)((</span><span class="default">10985 </span><span class="keyword">- </span><span class="default">$jd</span><span class="keyword">) / </span><span class="default">5316</span><span class="keyword">)) *<br />            ((int)(</span><span class="default">50 </span><span class="keyword">* </span><span class="default">$jd </span><span class="keyword">/ </span><span class="default">17719</span><span class="keyword">)) +<br />            ((int)(</span><span class="default">$jd </span><span class="keyword">/ </span><span class="default">5670</span><span class="keyword">)) *<br />            ((int)(</span><span class="default">43 </span><span class="keyword">* </span><span class="default">$jd </span><span class="keyword">/ </span><span class="default">15238</span><span class="keyword">));<br />        </span><span class="default">$jd </span><span class="keyword">= </span><span class="default">$jd </span><span class="keyword">- ((int)((</span><span class="default">30 </span><span class="keyword">- </span><span class="default">$j</span><span class="keyword">) / </span><span class="default">15</span><span class="keyword">)) *<br />            ((int)((</span><span class="default">17719 </span><span class="keyword">* </span><span class="default">$j</span><span class="keyword">) / </span><span class="default">50</span><span class="keyword">)) -<br />            ((int)(</span><span class="default">$j </span><span class="keyword">/ </span><span class="default">16</span><span class="keyword">)) *<br />            ((int)((</span><span class="default">15238 </span><span class="keyword">* </span><span class="default">$j</span><span class="keyword">) / </span><span class="default">43</span><span class="keyword">)) + </span><span class="default">29</span><span class="keyword">;<br />        </span><span class="default">$m  </span><span class="keyword">= (int)(</span><span class="default">24 </span><span class="keyword">* </span><span class="default">$jd </span><span class="keyword">/ </span><span class="default">709</span><span class="keyword">);<br />        </span><span class="default">$d  </span><span class="keyword">= </span><span class="default">$jd </span><span class="keyword">- (int)(</span><span class="default">709 </span><span class="keyword">* </span><span class="default">$m </span><span class="keyword">/ </span><span class="default">24</span><span class="keyword">);<br />        </span><span class="default">$y  </span><span class="keyword">= </span><span class="default">30</span><span class="keyword">*</span><span class="default">$n </span><span class="keyword">+ </span><span class="default">$j </span><span class="keyword">- </span><span class="default">30</span><span class="keyword">;<br /><br />        return array(</span><span class="default">$m</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment"># Hijri To Julian Day Count<br />    </span><span class="keyword">function </span><span class="default">HijriToJD</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">)<br />    {<br />        return (int)((</span><span class="default">11 </span><span class="keyword">* </span><span class="default">$y </span><span class="keyword">+ </span><span class="default">3</span><span class="keyword">) / </span><span class="default">30</span><span class="keyword">) +<br />            </span><span class="default">354 </span><span class="keyword">* </span><span class="default">$y </span><span class="keyword">+ </span><span class="default">30 </span><span class="keyword">* </span><span class="default">$m </span><span class="keyword">-<br />            (int)((</span><span class="default">$m </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">) + </span><span class="default">$d </span><span class="keyword">+ </span><span class="default">1948440 </span><span class="keyword">- </span><span class="default">385</span><span class="keyword">;<br />    }<br />};<br /><br /></span><span class="default">$hijri </span><span class="keyword">= </span><span class="default">HijriCalendar</span><span class="keyword">::</span><span class="default">GregorianToHijri</span><span class="keyword">( </span><span class="default">time</span><span class="keyword">() );<br />echo </span><span class="default">$hijri</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">'. '</span><span class="keyword">.</span><span class="default">HijriCalendar</span><span class="keyword">::</span><span class="default">monthName</span><span class="keyword">(</span><span class="default">$hijri</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]).</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$hijri</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79302">  <div class="votes">
    <div id="Vu79302">
    <a href="/manual/vote-note.php?id=79302&amp;page=ref.calendar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79302">
    <a href="/manual/vote-note.php?id=79302&amp;page=ref.calendar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79302" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#79302" class="name">
  <strong class="user"><em>simon at chronolabs dot org dot au</em></strong></a><a class="genanchor" href="#79302"> &para;</a><div class="date" title="2007-11-20 12:20"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79302">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// You need to replace this section in Function EgyptianCalendar<br />// As well as Function MayanTihkalCalendar<br /></span><span class="default">$revolutionsperyear </span><span class="keyword">= </span><span class="default">$ttl_num </span><span class="keyword">/ </span><span class="default">$i</span><span class="keyword">;<br /></span><span class="default">$numyears </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">((</span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$roun</span><span class="keyword">) / </span><span class="default">$revolutionsperyear</span><span class="keyword">));<br /></span><span class="default">$avg_num_month </span><span class="keyword">= </span><span class="default">$ttl_num_months</span><span class="keyword">/</span><span class="default">$i</span><span class="keyword">;<br /></span><span class="default">$jtl </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$roun</span><span class="keyword">) - </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$revolutionsperyear</span><span class="keyword">*(</span><span class="default">$numyears</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">)));<br />while(</span><span class="default">$month</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">){<br />    </span><span class="default">$day</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$u</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    foreach(</span><span class="default">$monthusage </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$item</span><span class="keyword">){<br />        </span><span class="default">$t</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;   <br />        foreach(</span><span class="default">$item </span><span class="keyword">as </span><span class="default">$numdays</span><span class="keyword">){<br />            </span><span class="default">$t</span><span class="keyword">++;<br />            </span><span class="default">$tt</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />            for(</span><span class="default">$sh</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$sh</span><span class="keyword">&lt;=</span><span class="default">$numdays</span><span class="keyword">;</span><span class="default">$sh</span><span class="keyword">++){<br />                </span><span class="default">$ii</span><span class="keyword">=</span><span class="default">$ii</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />                </span><span class="default">$tt</span><span class="keyword">++;<br />                if (</span><span class="default">$ii</span><span class="keyword">==</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$jtl</span><span class="keyword">)){<br />                    if (</span><span class="default">$roun</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">){<br />                        </span><span class="default">$daynum </span><span class="keyword">= </span><span class="default">$tt</span><span class="keyword">;<br />                        </span><span class="default">$month </span><span class="keyword">= </span><span class="default">$t</span><span class="keyword">;<br />                    } else {<br />                        </span><span class="default">$daynum </span><span class="keyword">= </span><span class="default">$numdays</span><span class="keyword">-(</span><span class="default">$tt</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">);<br />                        </span><span class="default">$month </span><span class="keyword">= </span><span class="default">$avg_num_month</span><span class="keyword">-(</span><span class="default">$t</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">);<br />                    }<br />                    </span><span class="default">$sequence </span><span class="keyword">= </span><span class="default">$key</span><span class="keyword">;<br />                    </span><span class="default">$nodaycount</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;<br />                }<br />            }<br />            if (</span><span class="default">$nodaycount</span><span class="keyword">==</span><span class="default">false</span><span class="keyword">)<br />                </span><span class="default">$day</span><span class="keyword">++;<br />        }<br />        </span><span class="default">$u</span><span class="keyword">++;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />This section of code need to be changed in the calculation I noticed today in our RounCalendar we had a zero day this function will calculate the month and day correctly for the calendars, it is a pretty universe piece of code, I am sorry it wasn't properly tested and need some refactoring.</span></code></div>
  </div>
 </div>
  <div class="note" id="79046">  <div class="votes">
    <div id="Vu79046">
    <a href="/manual/vote-note.php?id=79046&amp;page=ref.calendar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79046">
    <a href="/manual/vote-note.php?id=79046&amp;page=ref.calendar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79046" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#79046" class="name">
  <strong class="user"><em>simon at chronolabs dot org dot au</em></strong></a><a class="genanchor" href="#79046"> &para;</a><div class="date" title="2007-11-07 10:00"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79046">
<div class="phpcode"><code><span class="html">This will return the mayan long count calendar which cycle reaches 13.0.0.0.0 in 2012, I have had to compress the changemaya function for this code library so if you want to space it out your more than welcome. It works with unix time. To call the routine use the following syntax. The mayan calendar is a day count that is around 5000 years old, it tracks our cestial position in the galaxy <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="default">MayanLongCount</span><span class="keyword">(</span><span class="default">time</span><span class="keyword">());<br /><br />function </span><span class="default">MayanLongCount</span><span class="keyword">(</span><span class="default">$tme</span><span class="keyword">){<br />    <br />    </span><span class="default">$config </span><span class="keyword">= array(</span><span class="string">'ppo' </span><span class="keyword">=&gt; array(</span><span class="default">13</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">),<br />                    </span><span class="string">'epoch' </span><span class="keyword">=&gt; </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'2012-12-21'</span><span class="keyword">));<br /><br />    </span><span class="default">$diff</span><span class="keyword">=((</span><span class="default">$tme</span><span class="keyword">-</span><span class="default">$config</span><span class="keyword">[</span><span class="string">'epoch'</span><span class="keyword">])/(</span><span class="default">60</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">*</span><span class="default">24</span><span class="keyword">));<br />    </span><span class="default">$ppo </span><span class="keyword">= </span><span class="default">changemaya</span><span class="keyword">(</span><span class="default">$config</span><span class="keyword">[</span><span class="string">'ppo'</span><span class="keyword">],</span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$diff</span><span class="keyword">));<br /><br />    return </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">].</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">].</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">].</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">];<br />}<br /><br />function </span><span class="default">changemaya</span><span class="keyword">(</span><span class="default">$ppo</span><span class="keyword">,</span><span class="default">$diff</span><span class="keyword">){<br />if (</span><span class="default">$diff</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">) { </span><span class="default">$amount</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; } else { </span><span class="default">$amount</span><span class="keyword">=-</span><span class="default">1</span><span class="keyword">; }<br />for (</span><span class="default">$sh</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$sh</span><span class="keyword">&lt;</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$diff</span><span class="keyword">);</span><span class="default">$sh</span><span class="keyword">++){ if (</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">&gt;</span><span class="default">20</span><span class="keyword">){<br />if (</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">&gt;</span><span class="default">20</span><span class="keyword">){ if (</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">&gt;</span><span class="default">20</span><span class="keyword">){<br />if (</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">&gt;</span><span class="default">20</span><span class="keyword">){ if (</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">&gt;</span><span class="default">20</span><span class="keyword">){<br /></span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">;<br />} else { </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]=</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">;}        <br />} else { </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">;    }        <br />} else {</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]=</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">; }<br />} else { </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]=</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">; }<br />} elseif (</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">){ if (</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">){<br />if (</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">){    if (</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">){<br />if (</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">){    </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]=</span><span class="default">20</span><span class="keyword">;    </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">; <br /></span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">;<br />} else { </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="default">20</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]=</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">; }        <br />} else { </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]=</span><span class="default">20</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">; }        <br />} else { </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]=</span><span class="default">20</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]=</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">; }<br />} else { </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]=</span><span class="default">20</span><span class="keyword">; </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]=</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">; }<br />} else { </span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]=</span><span class="default">$ppo</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]+</span><span class="default">$amount</span><span class="keyword">;}}<br />    return </span><span class="default">$ppo</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Thanks!!</span></code></div>
  </div>
 </div>
  <div class="note" id="35392">  <div class="votes">
    <div id="Vu35392">
    <a href="/manual/vote-note.php?id=35392&amp;page=ref.calendar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35392">
    <a href="/manual/vote-note.php?id=35392&amp;page=ref.calendar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35392" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#35392" class="name">
  <strong class="user"><em>curlee at mindspring dot com</em></strong></a><a class="genanchor" href="#35392"> &para;</a><div class="date" title="2003-08-29 08:55"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35392">
<div class="phpcode"><code><span class="html">I solved a problem with Julian dates that are used in the JD Edwards ERP package (running on AS/400).  The Julian format for this system is as follows:  CYYDDD 
<br />
<br />Where C is 0 for 1900 and 1 for 2000
<br />DDD is the day of the year count
<br />
<br />I used the mktime built-in php function to convert dates to the normal DD/MM/YYYY format.  This function will convert dates that are between 1970 and 2038 (limitation of unix timestamps and the mktime function)
<br />
<br />The $jde_date var needs to be a 6 len STRING.... if you use a numeric var type it will drop the leading 0 for any date that represents 1900.... this will botch the substr functions and thus make the whole thing wrong.  
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">jde_date_conv</span><span class="keyword">(</span><span class="default">$jde_date</span><span class="keyword">)
<br />{
<br />
<br /></span><span class="default">$ct </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$jde_date</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">$yr </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$jde_date</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);
<br /></span><span class="default">$dy </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$jde_date</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);
<br />
<br />if(</span><span class="default">$ct </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) </span><span class="default">$yr_pfx </span><span class="keyword">= </span><span class="default">19</span><span class="keyword">;
<br />if(</span><span class="default">$ct </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) </span><span class="default">$yr_pfx </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">;
<br />
<br /></span><span class="default">$tlt_yr </span><span class="keyword">= </span><span class="default">$yr_pfx</span><span class="keyword">.</span><span class="default">$yr</span><span class="keyword">;
<br />
<br /></span><span class="default">$base_time </span><span class="keyword">= </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$tlt_yr</span><span class="keyword">);
<br />
<br /></span><span class="default">$unix_time </span><span class="keyword">= (</span><span class="default">$dy </span><span class="keyword">* </span><span class="default">86400</span><span class="keyword">) + </span><span class="default">$base_time</span><span class="keyword">;
<br />
<br />return </span><span class="default">date</span><span class="keyword">(</span><span class="string">"m/d/Y" </span><span class="keyword">, </span><span class="default">$unix_time</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.calendar&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.calendar.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.calendar.php">Calendar</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.calendar.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="calendar.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="calendar.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="ref.calendar.php" title="Calendar Functions">Calendar Functions</a>
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
