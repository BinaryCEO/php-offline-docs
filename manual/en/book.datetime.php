<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Date/Time - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.datetime.php">
 <link rel="shorturl" href="https://www.php.net/datetime">
 <link rel="alternate" href="https://www.php.net/datetime" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.calendar.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.unixtojd.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.datetime.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.datetime.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.datetime.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.datetime.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.datetime.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.datetime.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.datetime.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.datetime.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.datetime.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.datetime.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.datetime.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.datetime.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Date and Time" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Date/Time - Manual" />
<meta name="twitter:description" content="Date and Time" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Date/Time - Manual" />
<meta itemprop="description" content="Date and Time" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Date and Time" />

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
        <a href="intro.datetime.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.unixtojd.php">
          &laquo; unixtojd        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      </ul>
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
            <option value='en/book.datetime.php' selected="selected">English</option>
            <option value='de/book.datetime.php'>German</option>
            <option value='es/book.datetime.php'>Spanish</option>
            <option value='fr/book.datetime.php'>French</option>
            <option value='it/book.datetime.php'>Italian</option>
            <option value='ja/book.datetime.php'>Japanese</option>
            <option value='pt_BR/book.datetime.php'>Brazilian Portuguese</option>
            <option value='ru/book.datetime.php'>Russian</option>
            <option value='tr/book.datetime.php'>Turkish</option>
            <option value='uk/book.datetime.php'>Ukrainian</option>
            <option value='zh/book.datetime.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.datetime" class="book">
 
 <h1 class="title">Date and Time</h1>
 

 
 
 

 







 




 







 




 




 




 




 




 





 








 

 






 













 



 



 



 



 



 



 



 



 




<ul class="chunklist chunklist_book"><li><a href="intro.datetime.php">Introduction</a></li><li><a href="datetime.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="datetime.installation.php">Installation</a></li><li><a href="datetime.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="datetime.constants.php">Predefined Constants</a></li><li><a href="datetime.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="datetime.examples-arithmetic.php">Date/Time Arithmetic</a></li></ul></li><li><a href="class.datetime.php">DateTime</a> — The DateTime class<ul class="chunklist chunklist_book chunklist_children"><li><a href="datetime.add.php">DateTime::add</a> — Modifies a DateTime object, with added amount of days, months, years, hours, minutes and seconds</li><li><a href="datetime.construct.php">DateTime::__construct</a> — Returns new DateTime object</li><li><a href="datetime.createfromformat.php">DateTime::createFromFormat</a> — Parses a time string according to a specified format</li><li><a href="datetime.createfromimmutable.php">DateTime::createFromImmutable</a> — Returns new DateTime instance encapsulating the given DateTimeImmutable object</li><li><a href="datetime.createfrominterface.php">DateTime::createFromInterface</a> — Returns new DateTime object encapsulating the given DateTimeInterface object</li><li><a href="datetime.getlasterrors.php">DateTime::getLastErrors</a> — Alias of DateTimeImmutable::getLastErrors</li><li><a href="datetime.modify.php">DateTime::modify</a> — Alters the timestamp</li><li><a href="datetime.set-state.php">DateTime::__set_state</a> — The __set_state handler</li><li><a href="datetime.setdate.php">DateTime::setDate</a> — Sets the date</li><li><a href="datetime.setisodate.php">DateTime::setISODate</a> — Sets the ISO date</li><li><a href="datetime.settime.php">DateTime::setTime</a> — Sets the time</li><li><a href="datetime.settimestamp.php">DateTime::setTimestamp</a> — Sets the date and time based on an Unix timestamp</li><li><a href="datetime.settimezone.php">DateTime::setTimezone</a> — Sets the time zone for the DateTime object</li><li><a href="datetime.sub.php">DateTime::sub</a> — Subtracts an amount of days, months, years, hours, minutes and seconds from
   a DateTime object</li></ul></li><li><a href="class.datetimeimmutable.php">DateTimeImmutable</a> — The DateTimeImmutable class<ul class="chunklist chunklist_book chunklist_children"><li><a href="datetimeimmutable.add.php">DateTimeImmutable::add</a> — Returns a new object, with added amount of days, months, years, hours, minutes and seconds</li><li><a href="datetimeimmutable.construct.php">DateTimeImmutable::__construct</a> — Returns new DateTimeImmutable object</li><li><a href="datetimeimmutable.createfromformat.php">DateTimeImmutable::createFromFormat</a> — Parses a time string according to a specified format</li><li><a href="datetimeimmutable.createfrominterface.php">DateTimeImmutable::createFromInterface</a> — Returns new DateTimeImmutable object encapsulating the given DateTimeInterface object</li><li><a href="datetimeimmutable.createfrommutable.php">DateTimeImmutable::createFromMutable</a> — Returns new DateTimeImmutable instance encapsulating the given DateTime object</li><li><a href="datetimeimmutable.getlasterrors.php">DateTimeImmutable::getLastErrors</a> — Returns the warnings and errors</li><li><a href="datetimeimmutable.modify.php">DateTimeImmutable::modify</a> — Creates a new object with modified timestamp</li><li><a href="datetimeimmutable.set-state.php">DateTimeImmutable::__set_state</a> — The __set_state handler</li><li><a href="datetimeimmutable.setdate.php">DateTimeImmutable::setDate</a> — Sets the date</li><li><a href="datetimeimmutable.setisodate.php">DateTimeImmutable::setISODate</a> — Sets the ISO date</li><li><a href="datetimeimmutable.settime.php">DateTimeImmutable::setTime</a> — Sets the time</li><li><a href="datetimeimmutable.settimestamp.php">DateTimeImmutable::setTimestamp</a> — Sets the date and time based on a Unix timestamp</li><li><a href="datetimeimmutable.settimezone.php">DateTimeImmutable::setTimezone</a> — Sets the time zone</li><li><a href="datetimeimmutable.sub.php">DateTimeImmutable::sub</a> — Subtracts an amount of days, months, years, hours, minutes and seconds</li></ul></li><li><a href="class.datetimeinterface.php">DateTimeInterface</a> — The DateTimeInterface interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="datetime.diff.php">DateTimeInterface::diff</a> — Returns the difference between two DateTime objects</li><li><a href="datetime.format.php">DateTimeInterface::format</a> — Returns date formatted according to given format</li><li><a href="datetime.getoffset.php">DateTimeInterface::getOffset</a> — Returns the timezone offset</li><li><a href="datetime.gettimestamp.php">DateTimeInterface::getTimestamp</a> — Gets the Unix timestamp</li><li><a href="datetime.gettimezone.php">DateTimeInterface::getTimezone</a> — Return time zone relative to given DateTime</li><li><a href="datetime.serialize.php">DateTime::__serialize</a> — Serialize a DateTime</li><li><a href="datetime.unserialize.php">DateTime::__unserialize</a> — Unserialize an Datetime</li><li><a href="datetime.wakeup.php">DateTime::__wakeup</a> — The __wakeup handler</li></ul></li><li><a href="class.datetimezone.php">DateTimeZone</a> — The DateTimeZone class<ul class="chunklist chunklist_book chunklist_children"><li><a href="datetimezone.construct.php">DateTimeZone::__construct</a> — Creates new DateTimeZone object</li><li><a href="datetimezone.getlocation.php">DateTimeZone::getLocation</a> — Returns location information for a timezone</li><li><a href="datetimezone.getname.php">DateTimeZone::getName</a> — Returns the name of the timezone</li><li><a href="datetimezone.getoffset.php">DateTimeZone::getOffset</a> — Returns the timezone offset from GMT</li><li><a href="datetimezone.gettransitions.php">DateTimeZone::getTransitions</a> — Returns all transitions for the timezone</li><li><a href="datetimezone.listabbreviations.php">DateTimeZone::listAbbreviations</a> — Returns associative array containing dst, offset and the timezone name</li><li><a href="datetimezone.listidentifiers.php">DateTimeZone::listIdentifiers</a> — Returns a numerically indexed array containing all defined timezone identifiers</li></ul></li><li><a href="class.dateinterval.php">DateInterval</a> — The DateInterval class<ul class="chunklist chunklist_book chunklist_children"><li><a href="dateinterval.construct.php">DateInterval::__construct</a> — Creates a new DateInterval object</li><li><a href="dateinterval.createfromdatestring.php">DateInterval::createFromDateString</a> — Sets up a DateInterval from the relative parts of the string</li><li><a href="dateinterval.format.php">DateInterval::format</a> — Formats the interval</li></ul></li><li><a href="class.dateperiod.php">DatePeriod</a> — The DatePeriod class<ul class="chunklist chunklist_book chunklist_children"><li><a href="dateperiod.construct.php">DatePeriod::__construct</a> — Creates a new DatePeriod object</li><li><a href="dateperiod.createfromiso8601string.php">DatePeriod::createFromISO8601String</a> — Creates a new DatePeriod object from an ISO8601 string</li><li><a href="dateperiod.getdateinterval.php">DatePeriod::getDateInterval</a> — Gets the interval</li><li><a href="dateperiod.getenddate.php">DatePeriod::getEndDate</a> — Gets the end date</li><li><a href="dateperiod.getrecurrences.php">DatePeriod::getRecurrences</a> — Gets the number of recurrences</li><li><a href="dateperiod.getstartdate.php">DatePeriod::getStartDate</a> — Gets the start date</li></ul></li><li><a href="ref.datetime.php">Date/Time Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.checkdate.php">checkdate</a> — Validate a Gregorian date</li><li><a href="function.date.php">date</a> — Format a Unix timestamp</li><li><a href="function.date-add.php">date_add</a> — Alias of DateTime::add</li><li><a href="function.date-create.php">date_create</a> — create a new DateTime object</li><li><a href="function.date-create-from-format.php">date_create_from_format</a> — Alias of DateTime::createFromFormat</li><li><a href="function.date-create-immutable.php">date_create_immutable</a> — create a new DateTimeImmutable object</li><li><a href="function.date-create-immutable-from-format.php">date_create_immutable_from_format</a> — Alias of DateTimeImmutable::createFromFormat</li><li><a href="function.date-date-set.php">date_date_set</a> — Alias of DateTime::setDate</li><li><a href="function.date-default-timezone-get.php">date_default_timezone_get</a> — Gets the default timezone used by all date/time functions in a script</li><li><a href="function.date-default-timezone-set.php">date_default_timezone_set</a> — Sets the default timezone used by all date/time functions in a script</li><li><a href="function.date-diff.php">date_diff</a> — Alias of DateTime::diff</li><li><a href="function.date-format.php">date_format</a> — Alias of DateTime::format</li><li><a href="function.date-get-last-errors.php">date_get_last_errors</a> — Alias of DateTimeImmutable::getLastErrors</li><li><a href="function.date-interval-create-from-date-string.php">date_interval_create_from_date_string</a> — Alias of DateInterval::createFromDateString</li><li><a href="function.date-interval-format.php">date_interval_format</a> — Alias of DateInterval::format</li><li><a href="function.date-isodate-set.php">date_isodate_set</a> — Alias of DateTime::setISODate</li><li><a href="function.date-modify.php">date_modify</a> — Alias of DateTime::modify</li><li><a href="function.date-offset-get.php">date_offset_get</a> — Alias of DateTime::getOffset</li><li><a href="function.date-parse.php">date_parse</a> — Returns associative array with detailed info about given date/time</li><li><a href="function.date-parse-from-format.php">date_parse_from_format</a> — Get info about given date formatted according to the specified format</li><li><a href="function.date-sub.php">date_sub</a> — Alias of DateTime::sub</li><li><a href="function.date-sun-info.php">date_sun_info</a> — Returns an array with information about sunset/sunrise and twilight begin/end</li><li><a href="function.date-sunrise.php">date_sunrise</a> — Returns time of sunrise for a given day and location</li><li><a href="function.date-sunset.php">date_sunset</a> — Returns time of sunset for a given day and location</li><li><a href="function.date-time-set.php">date_time_set</a> — Alias of DateTime::setTime</li><li><a href="function.date-timestamp-get.php">date_timestamp_get</a> — Alias of DateTime::getTimestamp</li><li><a href="function.date-timestamp-set.php">date_timestamp_set</a> — Alias of DateTime::setTimestamp</li><li><a href="function.date-timezone-get.php">date_timezone_get</a> — Alias of DateTime::getTimezone</li><li><a href="function.date-timezone-set.php">date_timezone_set</a> — Alias of DateTime::setTimezone</li><li><a href="function.getdate.php">getdate</a> — Get date/time information</li><li><a href="function.gettimeofday.php">gettimeofday</a> — Get current time</li><li><a href="function.gmdate.php">gmdate</a> — Format a GMT/UTC date/time</li><li><a href="function.gmmktime.php">gmmktime</a> — Get Unix timestamp for a GMT date</li><li><a href="function.gmstrftime.php">gmstrftime</a> — Format a GMT/UTC time/date according to locale settings</li><li><a href="function.idate.php">idate</a> — Format a local time/date part as integer</li><li><a href="function.localtime.php">localtime</a> — Get the local time</li><li><a href="function.microtime.php">microtime</a> — Return current Unix timestamp with microseconds</li><li><a href="function.mktime.php">mktime</a> — Get Unix timestamp for a date</li><li><a href="function.strftime.php">strftime</a> — Format a local time/date according to locale settings</li><li><a href="function.strptime.php">strptime</a> — Parse a time/date generated with strftime</li><li><a href="function.strtotime.php">strtotime</a> — Parse about any English textual datetime description into a Unix timestamp</li><li><a href="function.time.php">time</a> — Return current Unix timestamp</li><li><a href="function.timezone-abbreviations-list.php">timezone_abbreviations_list</a> — Alias of DateTimeZone::listAbbreviations</li><li><a href="function.timezone-identifiers-list.php">timezone_identifiers_list</a> — Alias of DateTimeZone::listIdentifiers</li><li><a href="function.timezone-location-get.php">timezone_location_get</a> — Alias of DateTimeZone::getLocation</li><li><a href="function.timezone-name-from-abbr.php">timezone_name_from_abbr</a> — Returns a timezone name by guessing from abbreviation and UTC offset</li><li><a href="function.timezone-name-get.php">timezone_name_get</a> — Alias of DateTimeZone::getName</li><li><a href="function.timezone-offset-get.php">timezone_offset_get</a> — Alias of DateTimeZone::getOffset</li><li><a href="function.timezone-open.php">timezone_open</a> — Alias of DateTimeZone::__construct</li><li><a href="function.timezone-transitions-get.php">timezone_transitions_get</a> — Alias of DateTimeZone::getTransitions</li><li><a href="function.timezone-version-get.php">timezone_version_get</a> — Gets the version of the timezonedb</li></ul></li><li><a href="datetime.error.tree.php">Date/Time Errors and Exceptions</a></li><li><a href="datetime.formats.php">Supported Date and Time Formats</a></li><li><a href="timezones.php">List of Supported Timezones</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="timezones.africa.php">Africa</a></li><li><a href="timezones.america.php">America</a></li><li><a href="timezones.antarctica.php">Antarctica</a></li><li><a href="timezones.arctic.php">Arctic</a></li><li><a href="timezones.asia.php">Asia</a></li><li><a href="timezones.atlantic.php">Atlantic</a></li><li><a href="timezones.australia.php">Australia</a></li><li><a href="timezones.europe.php">Europe</a></li><li><a href="timezones.indian.php">Indian</a></li><li><a href="timezones.pacific.php">Pacific</a></li><li><a href="timezones.others.php">Others</a></li></ul></li><li><a href="class.dateerror.php">DateError</a> — The DateError class</li><li><a href="class.dateobjecterror.php">DateObjectError</a> — The DateObjectError class</li><li><a href="class.daterangeerror.php">DateRangeError</a> — The DateRangeError class</li><li><a href="class.dateexception.php">DateException</a> — The DateException class</li><li><a href="class.dateinvalidoperationexception.php">DateInvalidOperationException</a> — The DateInvalidOperationException class</li><li><a href="class.dateinvalidtimezoneexception.php">DateInvalidTimeZoneException</a> — The DateInvalidTimeZoneException class</li><li><a href="class.datemalformedintervalstringexception.php">DateMalformedIntervalStringException</a> — The DateMalformedIntervalStringException class</li><li><a href="class.datemalformedperiodstringexception.php">DateMalformedPeriodStringException</a> — The DateMalformedPeriodStringException class</li><li><a href="class.datemalformedstringexception.php">DateMalformedStringException</a> — The DateMalformedStringException class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.datetime%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.datetime&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.datetime.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.calendar.php">Date and Time Related Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.calendar.php" title="Calendar">Calendar</a>
                        </li>
                                                <li class="current">
                            <a href="book.datetime.php" title="Date/Time">Date/Time</a>
                        </li>
                                                <li class="">
                            <a href="book.hrtime.php" title="HRTime">HRTime</a>
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
