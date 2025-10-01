<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Variables - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reserved.variables.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reserved.variables.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reserved.variables.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/langref.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.references.spot.php">
 <link rel="next" href="https://www.php.net/manual/en/language.variables.superglobals.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reserved.variables.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reserved.variables.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reserved.variables.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reserved.variables.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reserved.variables.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reserved.variables.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reserved.variables.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reserved.variables.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reserved.variables.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reserved.variables.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reserved.variables.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Variables" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Variables - Manual" />
<meta name="twitter:description" content="Predefined Variables" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Variables - Manual" />
<meta itemprop="description" content="Predefined Variables" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Variables" />

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
        <a href="language.variables.superglobals.php">
          Superglobals &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.references.spot.php">
          &laquo; Spotting References        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      </ul>
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
            <option value='en/reserved.variables.php' selected="selected">English</option>
            <option value='de/reserved.variables.php'>German</option>
            <option value='es/reserved.variables.php'>Spanish</option>
            <option value='fr/reserved.variables.php'>French</option>
            <option value='it/reserved.variables.php'>Italian</option>
            <option value='ja/reserved.variables.php'>Japanese</option>
            <option value='pt_BR/reserved.variables.php'>Brazilian Portuguese</option>
            <option value='ru/reserved.variables.php'>Russian</option>
            <option value='tr/reserved.variables.php'>Turkish</option>
            <option value='uk/reserved.variables.php'>Ukrainian</option>
            <option value='zh/reserved.variables.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reserved.variables" class="reference">
 <h1 class="title">Predefined Variables</h1>

 <div class="partintro">

  <p class="para">
   PHP provides predefined variables that represent
   <a href="language.variables.external.php" class="link">external variables</a>,
   built-in environment variables, and other information about the execution
   environment, such as the number and values of the arguments passed to the
   script in the CLI environment.
  </p>

 </div>

 



 



 



 


 






 



 



 



 



 



 



 



 



 



 



 



 



 



 



 



 



 




 



 



 



 




<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="language.variables.superglobals.php">Superglobals</a> — Built-in variables that are always available in all scopes</li><li><a href="reserved.variables.globals.php">$GLOBALS</a> — References all variables available in global scope</li><li><a href="reserved.variables.server.php">$_SERVER</a> — Server and execution environment information</li><li><a href="reserved.variables.get.php">$_GET</a> — HTTP GET variables</li><li><a href="reserved.variables.post.php">$_POST</a> — HTTP POST variables</li><li><a href="reserved.variables.files.php">$_FILES</a> — HTTP File Upload variables</li><li><a href="reserved.variables.request.php">$_REQUEST</a> — HTTP Request variables</li><li><a href="reserved.variables.session.php">$_SESSION</a> — Session variables</li><li><a href="reserved.variables.environment.php">$_ENV</a> — Environment variables</li><li><a href="reserved.variables.cookies.php">$_COOKIE</a> — HTTP Cookies</li><li><a href="reserved.variables.phperrormsg.php">$php_errormsg</a> — The previous error message</li><li><a href="reserved.variables.httpresponseheader.php">$http_response_header</a> — HTTP response headers</li><li><a href="reserved.variables.argc.php">$argc</a> — The number of arguments passed to script</li><li><a href="reserved.variables.argv.php">$argv</a> — Array of arguments passed to script</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/variables.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freserved.variables%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reserved.variables&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.variables.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="55068">  <div class="votes">
    <div id="Vu55068">
    <a href="/manual/vote-note.php?id=55068&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55068">
    <a href="/manual/vote-note.php?id=55068&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55068" title="54% like this...">
    31
    </div>
  </div>
  <a href="#55068" class="name">
  <strong class="user"><em>New York PHP</em></strong></a><a class="genanchor" href="#55068"> &para;</a><div class="date" title="2005-07-24 06:59"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55068">
<div class="phpcode"><code><span class="html">Warning: $_SERVER['PHP_SELF'] can include arbitrary user input. The documentation should be updated to reflect this.<br /><br />The request "<a href="http://example.com/info.php/attack%20here" rel="nofollow" target="_blank">http://example.com/info.php/attack%20here</a>" will run /info.php, but in Apache $_SERVER['PHP_SELF'] will equal "/info.php/attack here". This is a feature, but it means that PHP_SELF must be treated as user input.<br /><br />The attack string could contain urlencoded HTML and JavaScript (cross-site scripting) or it could contain urlencoded linebreaks (HTTP response-splitting).<br /><br />The use of $_SERVER['SCRIPT_NAME'] is recommended instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="74040">  <div class="votes">
    <div id="Vu74040">
    <a href="/manual/vote-note.php?id=74040&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74040">
    <a href="/manual/vote-note.php?id=74040&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74040" title="60% like this...">
    13
    </div>
  </div>
  <a href="#74040" class="name">
  <strong class="user"><em>danvasile at pentest dot ro</em></strong></a><a class="genanchor" href="#74040"> &para;</a><div class="date" title="2007-03-21 12:22"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74040">
<div class="phpcode"><code><span class="html">If you have problems with $_SERVER['HTTPS'], especially if it returns no values at all you should check the results of phpinfo(). It might not be listed at all. <br />Here is a solution to check and change, if necessary, to ssl/https that will work in all cases:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SERVER_PORT'</span><span class="keyword">]!=</span><span class="default">443</span><span class="keyword">) {<br /></span><span class="default">$sslport</span><span class="keyword">=</span><span class="default">443</span><span class="keyword">; </span><span class="comment">//whatever your ssl port is<br /></span><span class="default">$url </span><span class="keyword">= </span><span class="string">"<a href="https://" rel="nofollow" target="_blank">https://</a>"</span><span class="keyword">. </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SERVER_NAME'</span><span class="keyword">] . </span><span class="string">":" </span><span class="keyword">. </span><span class="default">$sslport </span><span class="keyword">. </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REQUEST_URI'</span><span class="keyword">];<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Location: </span><span class="default">$url</span><span class="string">"</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Of course, this should be done before any html tag or php echo/print.</span></code></div>
  </div>
 </div>
  <div class="note" id="79359">  <div class="votes">
    <div id="Vu79359">
    <a href="/manual/vote-note.php?id=79359&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79359">
    <a href="/manual/vote-note.php?id=79359&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79359" title="57% like this...">
    11
    </div>
  </div>
  <a href="#79359" class="name">
  <strong class="user"><em>Nicolae Namolovan</em></strong></a><a class="genanchor" href="#79359"> &para;</a><div class="date" title="2007-11-22 11:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79359">
<div class="phpcode"><code><span class="html">SECURITY RISK !<br /><br />Never ever trust the values that comes from $_SERVER.<br /><br />HTTP_X_FORWARDED, HTTP_X_FORWARDED_FOR, HTTP_FORWARDED_FOR, HTTP_FORWARDED, etc.. can be spoofed !<br /><br />To get the ip of user, use only $_SERVER['REMOTE_ADDR'], otherwise the 'ip' of user can be easily changed by sending a HTTP_X_* header, so user can escape a ban or spoof a trusted ip.<br /><br />Of course this is well know, but I don't see it mentioned in these notes..<br /><br />If you use the ip only for tracking (not for any security features like banning or allow access to something by ip), you can also use HTTP_X_FORWARDED to get user's ip what are behind proxy.</span></code></div>
  </div>
 </div>
  <div class="note" id="62214">  <div class="votes">
    <div id="Vu62214">
    <a href="/manual/vote-note.php?id=62214&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62214">
    <a href="/manual/vote-note.php?id=62214&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62214" title="55% like this...">
    13
    </div>
  </div>
  <a href="#62214" class="name">
  <strong class="user"><em>nathan</em></strong></a><a class="genanchor" href="#62214"> &para;</a><div class="date" title="2006-02-22 08:05"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62214">
<div class="phpcode"><code><span class="html">Also on using IPs to look up country &amp; city, note that what you get might not be entirely accurate.  If their ISP is based in a different city or province/state, the IPs may be owned by the head office, and used across several areas.  <br />You also have rarer situations where they might be SSHed into another server, on the road, at work, at a friend's...  It's a nice idea, but as the example code shows, it should only be used to set defaults.</span></code></div>
  </div>
 </div>
  <div class="note" id="62708">  <div class="votes">
    <div id="Vu62708">
    <a href="/manual/vote-note.php?id=62708&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62708">
    <a href="/manual/vote-note.php?id=62708&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62708" title="56% like this...">
    9
    </div>
  </div>
  <a href="#62708" class="name">
  <strong class="user"><em>Aardvark</em></strong></a><a class="genanchor" href="#62708"> &para;</a><div class="date" title="2006-03-07 01:35"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62708">
<div class="phpcode"><code><span class="html">$_GET may not handle query string parameter values which include escaped Unicode values resulting from applying the JavaScript "escape" function to a Unicode string.<br />To handle this the query parameter value can be obtained  using a function such as:<br /><br />function getQueryParameter ($strParam) {<br />  $aParamList = explode('&amp;', $_SERVER['QUERY_STRING']);<br />  $i = 0;<br />  while ($i &lt; count($aParamList)) {<br />    $aParam = split('=', $aParamList[$i]);<br />    if ($strParam == $aParam[0]) {<br />      return $aParam[1];<br />    } <br />  }<br />  return "";<br />}<br /><br />or by directly building an array or query string values and then processing the parameter string using a function such as the "unescape" function which can be found at <a href="http://www.kanolife.com/escape/2006/03/unicode-url-escapes-in-php.html" rel="nofollow" target="_blank">http://www.kanolife.com/escape/2006/03/unicode-url-escapes-in-php.html</a> (or <a href="http://www.kanolife.com/escape/" rel="nofollow" target="_blank">http://www.kanolife.com/escape/</a> for related info).</span></code></div>
  </div>
 </div>
  <div class="note" id="65690">  <div class="votes">
    <div id="Vu65690">
    <a href="/manual/vote-note.php?id=65690&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65690">
    <a href="/manual/vote-note.php?id=65690&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65690" title="55% like this...">
    9
    </div>
  </div>
  <a href="#65690" class="name">
  <strong class="user"><em>jameslporter at gmail dot com</em></strong></a><a class="genanchor" href="#65690"> &para;</a><div class="date" title="2006-05-05 12:19"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65690">
<div class="phpcode"><code><span class="html">Refer to CanonicalName if you are not getting the ServerName in the $_SERVER[SERVER_NAME] variable....This was a pain to figure out for me...now it works as expected by turning canonical naming on.<br /><br /><a href="http://www.apacheref.com/ref/http_core/UseCanonicalName.html" rel="nofollow" target="_blank">http://www.apacheref.com/ref/http_core/UseCanonicalName.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="72572">  <div class="votes">
    <div id="Vu72572">
    <a href="/manual/vote-note.php?id=72572&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72572">
    <a href="/manual/vote-note.php?id=72572&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72572" title="56% like this...">
    7
    </div>
  </div>
  <a href="#72572" class="name">
  <strong class="user"><em>Joe Marty</em></strong></a><a class="genanchor" href="#72572"> &para;</a><div class="date" title="2007-01-24 11:53"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72572">
<div class="phpcode"><code><span class="html">I think it is very important to note that PHP will automatically replace dots ('.') AND spaces (' ') with underscores ('_') in any incoming POST or GET (or REQUEST) variables.<br /><br />This page notes the dot replacement, but not the space replacement:<br /><a href="http://us2.php.net/manual/en/language.variables.external.php" rel="nofollow" target="_blank">http://us2.php.net/manual/en/language.variables.external.php</a><br /><br />The reason is that '.' and ' ' are not valid characters to use in a variable name.  This is confusing to many people, because most people use the format $_POST['name'] to access these values.  In this case, the name is not used as a variable name but as an array index, in which those characters are valid.<br /><br />However, if the register_globals directive is set, these names must be used as variable names.  As of now, PHP converts the names for these variables before inserting them into the external variable arrays, unfortunately - rather than leaving them as they are for the arrays and changing the names only for the variables set by register_globals.<br /><br />If you want to use:<br />&lt;input name="title for page3.php" type="text"&gt;<br /><br />The value you will get in your POST array, for isntance would be:<br />$_POST['title_for_page3_php']</span></code></div>
  </div>
 </div>
  <div class="note" id="46658">  <div class="votes">
    <div id="Vu46658">
    <a href="/manual/vote-note.php?id=46658&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46658">
    <a href="/manual/vote-note.php?id=46658&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46658" title="57% like this...">
    7
    </div>
  </div>
  <a href="#46658" class="name">
  <strong class="user"><em>mrnopersonality at yahoo dot com</em></strong></a><a class="genanchor" href="#46658"> &para;</a><div class="date" title="2004-10-19 08:13"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46658">
<div class="phpcode"><code><span class="html">Nothing about the message-body ...<br /><br />You can get cookies, session variables, headers, the request-uri , the request method, etc but not the message body. You may want it sometimes when your page is to be requested with the POST method.<br /><br />Maybe they should have mentioned $HTTP_RAW_POST_DATA or php://stdin</span></code></div>
  </div>
 </div>
  <div class="note" id="55337">  <div class="votes">
    <div id="Vu55337">
    <a href="/manual/vote-note.php?id=55337&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55337">
    <a href="/manual/vote-note.php?id=55337&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55337" title="57% like this...">
    6
    </div>
  </div>
  <a href="#55337" class="name">
  <strong class="user"><em>Gregory Boshoff</em></strong></a><a class="genanchor" href="#55337"> &para;</a><div class="date" title="2005-07-31 02:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55337">
<div class="phpcode"><code><span class="html">$_SERVER['QUERY_STRING'] <br /><br />Does not contain XHTML 1.1 compliant ampersands i.e. &amp;amp;<br /><br />So you will need to do something like this if you are to use $_SERVER['QUERY_STRING'] in URL's.<br /><br />//  XHTML 1.1 compliant ampersands <br />$_SERVER['QUERY_STRING'] = <br />str_replace(array('&amp;amp;', '&amp;'), array('&amp;', '&amp;amp;'), <br />$_SERVER['QUERY_STRING']);</span></code></div>
  </div>
 </div>
  <div class="note" id="41295">  <div class="votes">
    <div id="Vu41295">
    <a href="/manual/vote-note.php?id=41295&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41295">
    <a href="/manual/vote-note.php?id=41295&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41295" title="56% like this...">
    7
    </div>
  </div>
  <a href="#41295" class="name">
  <strong class="user"><em>youdontmeanmuch [at] yahoo.com</em></strong></a><a class="genanchor" href="#41295"> &para;</a><div class="date" title="2004-04-05 09:20"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41295">
<div class="phpcode"><code><span class="html">Be carful when using $_SERVER['DOCUMENT_ROOT']; in your applications where you want to distribute them to other people with different server types. It isnt always supported by the webserver (IIS).</span></code></div>
  </div>
 </div>
  <div class="note" id="63831">  <div class="votes">
    <div id="Vu63831">
    <a href="/manual/vote-note.php?id=63831&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63831">
    <a href="/manual/vote-note.php?id=63831&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63831" title="56% like this...">
    6
    </div>
  </div>
  <a href="#63831" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#63831"> &para;</a><div class="date" title="2006-03-31 09:56"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63831">
<div class="phpcode"><code><span class="html">I was unable to convince my hosting company to change their installation of PHP and therefore had to find my own way to computer $_SERVER["DOCUMENT_ROOT"].  I eventually settled on the following, which is a combination of earlier notes (with some typos corrected):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if ( ! isset(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'DOCUMENT_ROOT'</span><span class="keyword">] ) )<br />  </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'DOCUMENT_ROOT'</span><span class="keyword">] = </span><span class="default">str_replace</span><span class="keyword">( </span><span class="string">'\\'</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(<br />    </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SCRIPT_FILENAME'</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">-</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PHP_SELF'</span><span class="keyword">]) ) );<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57325">  <div class="votes">
    <div id="Vu57325">
    <a href="/manual/vote-note.php?id=57325&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57325">
    <a href="/manual/vote-note.php?id=57325&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57325" title="54% like this...">
    7
    </div>
  </div>
  <a href="#57325" class="name">
  <strong class="user"><em>drew dot griffiths at clare dot net</em></strong></a><a class="genanchor" href="#57325"> &para;</a><div class="date" title="2005-09-30 08:51"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57325">
<div class="phpcode"><code><span class="html">Re: You can take advantage of 404 error to an usable redirection using REQUEST_URI ...<br /><br />Whilst this is effective, a line in the .htaccess such as:<br /><br />RewriteEngine On<br />RewriteRule ^profiles/([A-Za-z0-9-]+) showprofile.php?profile=$1 [L,NC,QSA]<br /><br />will throw the requested profile in a variable $profile to the showprofile.php page.  <br /><br />You can further enhance the url (e.g <a href="http://servername/profiles/Jerry/homeaddress/index.htm" rel="nofollow" target="_blank">http://servername/profiles/Jerry/homeaddress/index.htm</a>) and the second variable value homeaddress becomes available in $url_array[3] when used below $url_array=explode("/",$_SERVER['REQUEST_URI']);   <br /><br />Hope this helps - Works well for me<br /><br />Drew</span></code></div>
  </div>
 </div>
  <div class="note" id="64443">  <div class="votes">
    <div id="Vu64443">
    <a href="/manual/vote-note.php?id=64443&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64443">
    <a href="/manual/vote-note.php?id=64443&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64443" title="55% like this...">
    5
    </div>
  </div>
  <a href="#64443" class="name">
  <strong class="user"><em>Ben XO</em></strong></a><a class="genanchor" href="#64443"> &para;</a><div class="date" title="2006-04-14 06:18"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64443">
<div class="phpcode"><code><span class="html">So you have an application in your web space, with a URL such as this:<br /><br /><a href="http://&lt;host&gt;/&lt;installation_path&gt;/" rel="nofollow" target="_blank">http://&lt;host&gt;/&lt;installation_path&gt;/</a><br /><br />and pages such as<br /><br /><a href="http://&lt;host&gt;/&lt;installation_path&gt;/subfolder1/subfolder2/page.php" rel="nofollow" target="_blank">http://&lt;host&gt;/&lt;installation_path&gt;/subfolder1/subfolder2/page.php</a><br /><br />You have a file called config.php in &lt;installation_path&gt; which is include()d by all pages (in subfolders or not).<br /><br />How to work out &lt;installation_path&gt; without hard-coding it into a config file? <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// this is config.php, and it is in &lt;installation_path&gt;<br />// it is included by &lt;installation_path&gt;/page.php<br />// it is included by &lt;installation_path&gt;/subfolder/page2.php<br />// etc<br /><br /></span><span class="default">$_REAL_SCRIPT_DIR </span><span class="keyword">= </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SCRIPT_FILENAME'</span><span class="keyword">])); </span><span class="comment">// filesystem path of this page's directory (page.php)<br /></span><span class="default">$_REAL_BASE_DIR </span><span class="keyword">= </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">)); </span><span class="comment">// filesystem path of this file's directory (config.php)<br /></span><span class="default">$_MY_PATH_PART </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$_REAL_SCRIPT_DIR</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$_REAL_BASE_DIR</span><span class="keyword">)); </span><span class="comment">// just the subfolder part between &lt;installation_path&gt; and the page<br /><br /></span><span class="default">$INSTALLATION_PATH </span><span class="keyword">= </span><span class="default">$_MY_PATH_PART<br />    </span><span class="keyword">? </span><span class="default">substr</span><span class="keyword">( </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SCRIPT_NAME'</span><span class="keyword">]), </span><span class="default">0</span><span class="keyword">, -</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$_MY_PATH_PART</span><span class="keyword">) )<br />    : </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SCRIPT_NAME'</span><span class="keyword">])<br />; </span><span class="comment">// we subtract the subfolder part from the end of &lt;installation_path&gt;, leaving us with just &lt;installation_path&gt; :)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49964">  <div class="votes">
    <div id="Vu49964">
    <a href="/manual/vote-note.php?id=49964&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49964">
    <a href="/manual/vote-note.php?id=49964&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49964" title="55% like this...">
    5
    </div>
  </div>
  <a href="#49964" class="name">
  <strong class="user"><em>Gregory Boshoff</em></strong></a><a class="genanchor" href="#49964"> &para;</a><div class="date" title="2005-02-13 04:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49964">
<div class="phpcode"><code><span class="html">The Environment variable $ENV is useful for coding portable platform specific application constants. <br /><br />// Define a Windows or else Linux root directory path<br />$_ENV['OS'] == 'Windows_NT' ? $path = 'L:\\www\\' : $path = ' /var/www/';<br /><br />define('PATH', $path);<br /><br />echo PATH;</span></code></div>
  </div>
 </div>
  <div class="note" id="53617">  <div class="votes">
    <div id="Vu53617">
    <a href="/manual/vote-note.php?id=53617&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53617">
    <a href="/manual/vote-note.php?id=53617&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53617" title="52% like this...">
    3
    </div>
  </div>
  <a href="#53617" class="name">
  <strong class="user"><em>mfyahya at gmail dot com</em></strong></a><a class="genanchor" href="#53617"> &para;</a><div class="date" title="2005-06-07 06:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53617">
<div class="phpcode"><code><span class="html">If you use Apache's redirection features for custom error pages or whatever, the following Apache's REDIRECT variables are also available in $_SERVER:<br />$_SERVER['REDIRECT_UNIQUE_ID]' <br />$_SERVER['REDIRECT_SCRIPT_URL]' <br />$_SERVER['REDIRECT_SCRIPT_URI]' <br />$_SERVER['REDIRECT_SITE_ROOT]' <br />$_SERVER['REDIRECT_SITE_HTMLROOT]' <br />$_SERVER['REDIRECT_SITE_CGIROOT]' <br />$_SERVER['REDIRECT_STATUS]' <br />$_SERVER['REDIRECT_QUERY_STRING]' <br />$_SERVER['REDIRECT_URL]' <br /><br />I'm not sure if this is a complete list though</span></code></div>
  </div>
 </div>
  <div class="note" id="102926">  <div class="votes">
    <div id="Vu102926">
    <a href="/manual/vote-note.php?id=102926&amp;page=reserved.variables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102926">
    <a href="/manual/vote-note.php?id=102926&amp;page=reserved.variables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102926" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#102926" class="name">
  <strong class="user"><em>dusted at dusted dot dk</em></strong></a><a class="genanchor" href="#102926"> &para;</a><div class="date" title="2011-03-15 02:32"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102926">
<div class="phpcode"><code><span class="html">I use HTTP_X_FORWARDED_FOR because my webserver is behind a reverse proxy.<br />This can be made secure:<br />Configure the reverse proxy to block this field, and override it correctly.<br />Configure the apache server to only accept incoming connections from the reverse proxy.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reserved.variables&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.variables.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="langref.php">Language Reference</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.basic-syntax.php" title="Basic syntax">Basic syntax</a>
                        </li>
                                                <li class="">
                            <a href="language.types.php" title="Types">Types</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.php" title="Variables">Variables</a>
                        </li>
                                                <li class="">
                            <a href="language.constants.php" title="Constants">Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.expressions.php" title="Expressions">Expressions</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.php" title="Operators">Operators</a>
                        </li>
                                                <li class="">
                            <a href="language.control-structures.php" title="Control Structures">Control Structures</a>
                        </li>
                                                <li class="">
                            <a href="language.functions.php" title="Functions">Functions</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.php" title="Classes and Objects">Classes and Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.php" title="Namespaces">Namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.php" title="Enumerations">Enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.errors.php" title="Errors">Errors</a>
                        </li>
                                                <li class="">
                            <a href="language.exceptions.php" title="Exceptions">Exceptions</a>
                        </li>
                                                <li class="">
                            <a href="language.fibers.php" title="Fibers">Fibers</a>
                        </li>
                                                <li class="">
                            <a href="language.generators.php" title="Generators">Generators</a>
                        </li>
                                                <li class="">
                            <a href="language.attributes.php" title="Attributes">Attributes</a>
                        </li>
                                                <li class="">
                            <a href="language.references.php" title="References Explained">References Explained</a>
                        </li>
                                                <li class="current">
                            <a href="reserved.variables.php" title="Predefined Variables">Predefined Variables</a>
                        </li>
                                                <li class="">
                            <a href="reserved.exceptions.php" title="Predefined Exceptions">Predefined Exceptions</a>
                        </li>
                                                <li class="">
                            <a href="reserved.interfaces.php" title="Predefined Interfaces and Classes">Predefined Interfaces and Classes</a>
                        </li>
                                                <li class="">
                            <a href="reserved.attributes.php" title="Predefined Attributes">Predefined Attributes</a>
                        </li>
                                                <li class="">
                            <a href="context.php" title="Context options and parameters">Context options and parameters</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.php" title="Supported Protocols and Wrappers">Supported Protocols and Wrappers</a>
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
