<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: jdtofrench - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.jdtofrench.php">
 <link rel="shorturl" href="https://www.php.net/jdtofrench">
 <link rel="alternate" href="https://www.php.net/jdtofrench" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.calendar.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.jdmonthname.php">
 <link rel="next" href="https://www.php.net/manual/en/function.jdtogregorian.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.jdtofrench.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.jdtofrench.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.jdtofrench.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.jdtofrench.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.jdtofrench.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.jdtofrench.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.jdtofrench.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.jdtofrench.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.jdtofrench.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.jdtofrench.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.jdtofrench.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Converts a Julian Day Count to the French Republican Calendar" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: jdtofrench - Manual" />
<meta name="twitter:description" content="Converts a Julian Day Count to the French Republican Calendar" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: jdtofrench - Manual" />
<meta itemprop="description" content="Converts a Julian Day Count to the French Republican Calendar" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Converts a Julian Day Count to the French Republican Calendar" />

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
        <a href="function.jdtogregorian.php">
          jdtogregorian &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.jdmonthname.php">
          &laquo; jdmonthname        </a>
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
            <option value='en/function.jdtofrench.php' selected="selected">English</option>
            <option value='de/function.jdtofrench.php'>German</option>
            <option value='es/function.jdtofrench.php'>Spanish</option>
            <option value='fr/function.jdtofrench.php'>French</option>
            <option value='it/function.jdtofrench.php'>Italian</option>
            <option value='ja/function.jdtofrench.php'>Japanese</option>
            <option value='pt_BR/function.jdtofrench.php'>Brazilian Portuguese</option>
            <option value='ru/function.jdtofrench.php'>Russian</option>
            <option value='tr/function.jdtofrench.php'>Turkish</option>
            <option value='uk/function.jdtofrench.php'>Ukrainian</option>
            <option value='zh/function.jdtofrench.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.jdtofrench" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">jdtofrench</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">jdtofrench</span> &mdash; <span class="dc-title">Converts a Julian Day Count to the French Republican Calendar</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.jdtofrench-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>jdtofrench</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$julian_day</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Converts a Julian Day Count to the French Republican Calendar.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.jdtofrench-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">julian_day</code></dt>
     <dd>
      <p class="para">
       A julian day number as integer
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.jdtofrench-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The french revolution date as a string in the form &quot;month/day/year&quot;
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.jdtofrench-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.frenchtojd.php" class="function" rel="rdfs-seeAlso">frenchtojd()</a> - Converts a date from the French Republican Calendar to a Julian Day Count</span></li> 
    <li><span class="function"><a href="function.cal-from-jd.php" class="function" rel="rdfs-seeAlso">cal_from_jd()</a> - Converts from Julian Day Count to a supported calendar</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/calendar/functions/jdtofrench.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.jdtofrench%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.jdtofrench&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.jdtofrench.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="96673">  <div class="votes">
    <div id="Vu96673">
    <a href="/manual/vote-note.php?id=96673&amp;page=function.jdtofrench&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96673">
    <a href="/manual/vote-note.php?id=96673&amp;page=function.jdtofrench&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96673" title="60% like this...">
    1
    </div>
  </div>
  <a href="#96673" class="name">
  <strong class="user"><em>pieterc dot depraetere at ugent dot be</em></strong></a><a class="genanchor" href="#96673"> &para;</a><div class="date" title="2010-03-10 02:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96673">
<div class="phpcode"><code><span class="html">If you want to convert a date later than September 22nd 1806, you could use this function. It's a bit crude and due to the fact the original function terminates in the middle of 1806, it uses 1805 as it's 'terminus post quem'.
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">extended_jdtofrench </span><span class="keyword">(</span><span class="default">$juliandate</span><span class="keyword">) {
<br />    if (</span><span class="default">$juliandate </span><span class="keyword">&gt; </span><span class="default">2380945</span><span class="keyword">) {
<br />        </span><span class="comment">// jdtofrench () only accepts dates until september 1806
<br />        </span><span class="default">$gregorian_date </span><span class="keyword">= </span><span class="default">jdtogregorian </span><span class="keyword">(</span><span class="default">$juliandate</span><span class="keyword">);
<br />        </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">explode </span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$gregorian_date</span><span class="keyword">);
<br />        </span><span class="default">$year </span><span class="keyword">= </span><span class="default">$temp</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];
<br />        </span><span class="default">$juliandate </span><span class="keyword">= </span><span class="default">gregoriantojd </span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$temp</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">1805</span><span class="keyword">);
<br />        </span><span class="default">$republican_date </span><span class="keyword">= </span><span class="default">jdtofrench </span><span class="keyword">(</span><span class="default">$juliandate</span><span class="keyword">);
<br />        </span><span class="default">$republican_date </span><span class="keyword">= </span><span class="default">explode </span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$republican_date</span><span class="keyword">);
<br />        </span><span class="default">$diff </span><span class="keyword">= </span><span class="default">$year </span><span class="keyword">- </span><span class="default">1805</span><span class="keyword">;
<br />        </span><span class="default">$republican_date</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">$republican_date</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] + </span><span class="default">$diff</span><span class="keyword">;
<br />    } else {
<br />        </span><span class="default">$republican_date </span><span class="keyword">= </span><span class="default">jdtofrench </span><span class="keyword">(</span><span class="default">$juliandate</span><span class="keyword">);
<br />    }
<br />    return </span><span class="default">$republican_date</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="64056">  <div class="votes">
    <div id="Vu64056">
    <a href="/manual/vote-note.php?id=64056&amp;page=function.jdtofrench&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64056">
    <a href="/manual/vote-note.php?id=64056&amp;page=function.jdtofrench&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64056" title="100% like this...">
    1
    </div>
  </div>
  <a href="#64056" class="name">
  <strong class="user"><em>squenz at titania dot bottoms-dream dot de</em></strong></a><a class="genanchor" href="#64056"> &para;</a><div class="date" title="2006-04-06 08:25"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64056">
<div class="phpcode"><code><span class="html">Here is a small piece of code to obtain the string data for a correctly converted gregorian date:
<br />
<br /><span class="default">&lt;?php
<br />$arDateFrench </span><span class="keyword">= </span><span class="default">gregorian2FrenchDateArray</span><span class="keyword">(</span><span class="default">11</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">, </span><span class="default">1799</span><span class="keyword">) ;
<br />
<br />echo </span><span class="default">$arDateFrench</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$arDateFrench</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] . </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$arDateFrench</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] ;
<br />
<br /></span><span class="comment">/* the output will be:
<br />    18 Brumaire VIII
<br />
<br />*/
<br />
<br /></span><span class="keyword">function </span><span class="default">gregorian2FrenchDateArray</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">)
<br />{
<br />
<br />    </span><span class="default">$julian_date </span><span class="keyword">= </span><span class="default">gregoriantojd</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);
<br />    </span><span class="default">$french </span><span class="keyword">= </span><span class="default">jdtofrench</span><span class="keyword">(</span><span class="default">$julian_date</span><span class="keyword">);
<br />    if(</span><span class="default">$french </span><span class="keyword">== </span><span class="string">"0/0/0"</span><span class="keyword">)
<br />        return </span><span class="string">"" </span><span class="keyword">;
<br />
<br />    </span><span class="default">$arD </span><span class="keyword">= </span><span class="default">split</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$french</span><span class="keyword">) ;
<br />    
<br />    </span><span class="comment">// get the month name 
<br />    </span><span class="default">$monthname </span><span class="keyword">= </span><span class="default">FrenchMonthNames</span><span class="keyword">(</span><span class="default">$arD</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) ;
<br />    
<br />    </span><span class="comment">/* convert the year number to roman digits (as most historians do and documents of the time did */
<br />    </span><span class="default">$stryear </span><span class="keyword">= </span><span class="default">decrom</span><span class="keyword">(</span><span class="default">$arD</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) ;
<br />    return array(</span><span class="default">$monthname</span><span class="keyword">, </span><span class="default">$arD</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$stryear </span><span class="keyword">) ;
<br />}
<br />
<br />function </span><span class="default">FrenchMonthNames</span><span class="keyword">(</span><span class="default">$mo</span><span class="keyword">)
<br />{
<br />    </span><span class="comment">/* The names have been invented by Fabre d'Églantine, a second or rather third rank poet
<br />of primarily pastoral poems, with each name referring to the respective period in the agricultural year; e.g. "Vendémiaire" (approx. September) is derived from "vendange" ("harvest"), "Brumaire" (Ocotober/November) from "brume" ("fog") and so on ...     */
<br />    
<br />    
<br />    </span><span class="default">$arMo </span><span class="keyword">= array(</span><span class="string">"Vendémiaire"</span><span class="keyword">, 
<br />                      </span><span class="string">"Brumaire"</span><span class="keyword">,
<br />                      </span><span class="string">"Frimaire"</span><span class="keyword">,
<br />                      </span><span class="string">"Nivôse"</span><span class="keyword">, 
<br />                      </span><span class="string">"Pluviôse"</span><span class="keyword">,
<br />                      </span><span class="string">"Ventôse"</span><span class="keyword">, 
<br />                      </span><span class="string">"Germinal"</span><span class="keyword">,
<br />                      </span><span class="string">"Floréal"</span><span class="keyword">, 
<br />                      </span><span class="string">"Prairial"</span><span class="keyword">,
<br />                      </span><span class="string">"Messidor"</span><span class="keyword">, 
<br />                      </span><span class="string">"Thermidor"</span><span class="keyword">, 
<br />                      </span><span class="string">"Fructidor"</span><span class="keyword">,
<br />                      </span><span class="string">"Sansculottide"</span><span class="keyword">) ;
<br />
<br />    if(</span><span class="default">$mo </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$arMo</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">) 
<br />        return </span><span class="default">$arMo</span><span class="keyword">[</span><span class="default">$mo</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">] ;
<br />    
<br />}
<br />
<br />function </span><span class="default">decrom</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">){
<br />       </span><span class="default">$digits</span><span class="keyword">=array(
<br />           </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">"I"</span><span class="keyword">,
<br />           </span><span class="default">4 </span><span class="keyword">=&gt; </span><span class="string">"IV"</span><span class="keyword">,
<br />           </span><span class="default">5 </span><span class="keyword">=&gt; </span><span class="string">"V"</span><span class="keyword">,
<br />           </span><span class="default">9 </span><span class="keyword">=&gt; </span><span class="string">"IX"</span><span class="keyword">,
<br />           </span><span class="default">10 </span><span class="keyword">=&gt; </span><span class="string">"X"</span><span class="keyword">,
<br />           </span><span class="default">40 </span><span class="keyword">=&gt; </span><span class="string">"XL"</span><span class="keyword">,
<br />           </span><span class="default">50 </span><span class="keyword">=&gt; </span><span class="string">"L"</span><span class="keyword">,
<br />           </span><span class="default">90 </span><span class="keyword">=&gt; </span><span class="string">"XC"</span><span class="keyword">,
<br />           </span><span class="default">100 </span><span class="keyword">=&gt; </span><span class="string">"C"</span><span class="keyword">,
<br />           </span><span class="default">400 </span><span class="keyword">=&gt; </span><span class="string">"CD"</span><span class="keyword">,
<br />           </span><span class="default">500 </span><span class="keyword">=&gt; </span><span class="string">"D"</span><span class="keyword">,
<br />           </span><span class="default">900 </span><span class="keyword">=&gt; </span><span class="string">"CM"</span><span class="keyword">,
<br />           </span><span class="default">1000 </span><span class="keyword">=&gt; </span><span class="string">"M"
<br />       </span><span class="keyword">);
<br />       </span><span class="default">krsort</span><span class="keyword">(</span><span class="default">$digits</span><span class="keyword">);
<br />       </span><span class="default">$retval</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;
<br />       foreach(</span><span class="default">$digits </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){
<br />           while(</span><span class="default">$dec</span><span class="keyword">&gt;=</span><span class="default">$key</span><span class="keyword">){
<br />               </span><span class="default">$dec</span><span class="keyword">-=</span><span class="default">$key</span><span class="keyword">;
<br />               </span><span class="default">$retval</span><span class="keyword">.=</span><span class="default">$value</span><span class="keyword">;
<br />           }
<br />       }
<br />       return </span><span class="default">$retval</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122477">  <div class="votes">
    <div id="Vu122477">
    <a href="/manual/vote-note.php?id=122477&amp;page=function.jdtofrench&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122477">
    <a href="/manual/vote-note.php?id=122477&amp;page=function.jdtofrench&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122477" title="no votes...">
    0
    </div>
  </div>
  <a href="#122477" class="name">
  <strong class="user"><em>popy-dev</em></strong></a><a class="genanchor" href="#122477"> &para;</a><div class="date" title="2018-03-06 10:45"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122477">
<div class="phpcode"><code><span class="html">Also note that there are few date converters handling French calendar outside the jdtofrench covered range.</span></code></div>
  </div>
 </div>
  <div class="note" id="36948">  <div class="votes">
    <div id="Vu36948">
    <a href="/manual/vote-note.php?id=36948&amp;page=function.jdtofrench&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36948">
    <a href="/manual/vote-note.php?id=36948&amp;page=function.jdtofrench&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36948" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#36948" class="name">
  <strong class="user"><em>serged at noos dot fr</em></strong></a><a class="genanchor" href="#36948"> &para;</a><div class="date" title="2003-10-28 09:00"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36948">
<div class="phpcode"><code><span class="html">Very limited function:
<br />
<br />(extract from source of 4.3.3)
<br />These routines only convert dates in years 1 through 14 (Gregorian dates 22 September 1792 through 22 September 1806).  This more than  covers the period when the calendar was in use.
<br /> 
<br />Pour les fran?ais :
<br />Ces routines ne converitssent les dates que de l'an 1 ? 14 (du 22 septembre 1792 au 22 septembre 1806). Cela couvre plus que la p?riode pendant laquelle le calendrier ? ?t? utilis?.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.jdtofrench&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.jdtofrench.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
