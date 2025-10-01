<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SQLite3::createAggregate - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/sqlite3.createaggregate.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/sqlite3.createaggregate.php">
 <link rel="alternate" href="https://www.php.net/manual/en/sqlite3.createaggregate.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.sqlite3.php">
 <link rel="prev" href="https://www.php.net/manual/en/sqlite3.construct.php">
 <link rel="next" href="https://www.php.net/manual/en/sqlite3.createcollation.php">

 <link rel="alternate" href="https://www.php.net/manual/en/sqlite3.createaggregate.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/sqlite3.createaggregate.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/sqlite3.createaggregate.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/sqlite3.createaggregate.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/sqlite3.createaggregate.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/sqlite3.createaggregate.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/sqlite3.createaggregate.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/sqlite3.createaggregate.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/sqlite3.createaggregate.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/sqlite3.createaggregate.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/sqlite3.createaggregate.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Registers a PHP function for use as an SQL aggregate function" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SQLite3::createAggregate - Manual" />
<meta name="twitter:description" content="Registers a PHP function for use as an SQL aggregate function" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SQLite3::createAggregate - Manual" />
<meta itemprop="description" content="Registers a PHP function for use as an SQL aggregate function" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Registers a PHP function for use as an SQL aggregate function" />

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
        <a href="sqlite3.createcollation.php">
          SQLite3::createCollation &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="sqlite3.construct.php">
          &laquo; SQLite3::__construct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.sqlite3.php'>SQLite3</a></li>      <li><a href='class.sqlite3.php'>SQLite3</a></li>      </ul>
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
            <option value='en/sqlite3.createaggregate.php' selected="selected">English</option>
            <option value='de/sqlite3.createaggregate.php'>German</option>
            <option value='es/sqlite3.createaggregate.php'>Spanish</option>
            <option value='fr/sqlite3.createaggregate.php'>French</option>
            <option value='it/sqlite3.createaggregate.php'>Italian</option>
            <option value='ja/sqlite3.createaggregate.php'>Japanese</option>
            <option value='pt_BR/sqlite3.createaggregate.php'>Brazilian Portuguese</option>
            <option value='ru/sqlite3.createaggregate.php'>Russian</option>
            <option value='tr/sqlite3.createaggregate.php'>Turkish</option>
            <option value='uk/sqlite3.createaggregate.php'>Ukrainian</option>
            <option value='zh/sqlite3.createaggregate.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="sqlite3.createaggregate" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SQLite3::createAggregate</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SQLite3::createAggregate</span> &mdash; <span class="dc-title">Registers a PHP function for use as an SQL aggregate function</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-sqlite3.createaggregate-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SQLite3::createAggregate</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$stepCallback</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$finalCallback</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$argCount</code><span class="initializer"> = -1</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Registers a PHP function or user-defined function for use as an SQL
   aggregate function for use within SQL statements.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-sqlite3.createaggregate-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">name</code></dt>
     <dd>
      <p class="para">
       Name of the SQL aggregate to be created or redefined.
      </p>
     </dd>
    
    
     <dt><code class="parameter">stepCallback</code></dt>
     <dd>
      <p class="para">
       Callback function called for each row of the result set. Your PHP
       function should accumulate the result and store it in the aggregation
       context.
      </p>
      <p class="para">
       This function need to be defined as:
       <div class="methodsynopsis dc-description">
        <span class="methodname"><span class="replaceable">step</span></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$context</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rownumber</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$values</code></span><br>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

       <dl>
        
         <dt><code class="parameter">context</code></dt>
         <dd>
          <p class="para">
           <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> for the first row; on subsequent rows it will have the value
           that was previously returned from the step function; you should use
           this to maintain the aggregate state.
          </p>
         </dd>
        
        
         <dt><code class="parameter">rownumber</code></dt>
         <dd>
          <p class="para">
           The current row number.
          </p>
         </dd>
        
        
         <dt><code class="parameter">value</code></dt>
         <dd>
          <p class="para">
           The first argument passed to the aggregate.
          </p>
         </dd>
        
        
         <dt><code class="parameter">values</code></dt>
         <dd>
          <p class="para">
           Further arguments passed to the aggregate.
          </p>
         </dd>
        
       </dl>
       The return value of this function will be used as the
       <code class="parameter">context</code> argument in the next call of the step or
       finalize functions.
      </p> 
     </dd>
    
    
     <dt><code class="parameter">finalCallback</code></dt>
     <dd>
      <p class="para">
       Callback function to aggregate the &quot;stepped&quot; data from each row. 
       Once all the rows have been processed, this function will be called
       and it should then take the data from the aggregation context and
       return the result. This callback function should return a type understood
       by SQLite (i.e. <a href="language.types.intro.php" class="link">scalar type</a>).
      </p>
      <p class="para">
       This function need to be defined as:
       <div class="methodsynopsis dc-description">
        <span class="methodname"><span class="replaceable">fini</span></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$context</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rownumber</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

       <dl>
        
         <dt><code class="parameter">context</code></dt>
         <dd>
          <p class="para">
           Holds the return value from the very last call to the step function.
          </p>
         </dd>
        
        
         <dt><code class="parameter">rownumber</code></dt>
         <dd>
          <p class="para">
           Always <code class="literal">0</code>.
          </p>
         </dd>
        
       </dl>
       The return value of this function will be used as the return value for
       the aggregate.
      </p>
     </dd>
    
    
     <dt><code class="parameter">argCount</code></dt>
     <dd>
      <p class="para">
       The number of arguments that the SQL aggregate takes. If
       this parameter is negative, then the SQL aggregate may take
       any number of arguments.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-sqlite3.createaggregate-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> upon successful creation of the aggregate,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-sqlite3.createaggregate-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2131">
    <p><strong>Example #1 max_length aggregation function example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$data </span><span style="color: #007700">= array(<br />   </span><span style="color: #DD0000">'one'</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">'two'</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">'three'</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">'four'</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">'five'</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">'six'</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">'seven'</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">'eight'</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">'nine'</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">'ten'</span><span style="color: #007700">,<br />   );<br /></span><span style="color: #0000BB">$db </span><span style="color: #007700">= new </span><span style="color: #0000BB">SQLite3</span><span style="color: #007700">(</span><span style="color: #DD0000">':memory:'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE strings(a)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$insert </span><span style="color: #007700">= </span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'INSERT INTO strings VALUES (?)'</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$data </span><span style="color: #007700">as </span><span style="color: #0000BB">$str</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$insert</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$insert</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}<br /></span><span style="color: #0000BB">$insert </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />function </span><span style="color: #0000BB">max_len_step</span><span style="color: #007700">(</span><span style="color: #0000BB">$context</span><span style="color: #007700">, </span><span style="color: #0000BB">$rownumber</span><span style="color: #007700">, </span><span style="color: #0000BB">$string</span><span style="color: #007700">)<br />{<br />    if (</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">) &gt; </span><span style="color: #0000BB">$context</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$context </span><span style="color: #007700">= </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">);<br />    }<br />    return </span><span style="color: #0000BB">$context</span><span style="color: #007700">;<br />}<br /><br />function </span><span style="color: #0000BB">max_len_finalize</span><span style="color: #007700">(</span><span style="color: #0000BB">$context</span><span style="color: #007700">, </span><span style="color: #0000BB">$rownumber</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #0000BB">$context </span><span style="color: #007700">=== </span><span style="color: #0000BB">null </span><span style="color: #007700">? </span><span style="color: #0000BB">0 </span><span style="color: #007700">: </span><span style="color: #0000BB">$context</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createAggregate</span><span style="color: #007700">(</span><span style="color: #DD0000">'max_len'</span><span style="color: #007700">, </span><span style="color: #DD0000">'max_len_step'</span><span style="color: #007700">, </span><span style="color: #DD0000">'max_len_finalize'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">querySingle</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT max_len(a) from strings'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">int(5)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   In this example, we are creating an aggregating function that will
   calculate the length of the longest string in one of the columns of the
   table.  For each row, the <code class="literal">max_len_step</code> function is
   called and passed a <code class="literal">$context</code> parameter.  The context
   parameter is just like any other PHP variable and be set to hold an array
   or even an object value.  In this example, we are simply using it to hold
   the maximum length we have seen so far; if the
   <code class="literal">$string</code> has a length longer than the current
   maximum, we update the context to hold this new maximum length.
  </p>
  <p class="para">
   After all of the rows have been processed, SQLite calls the
   <code class="literal">max_len_finalize</code> function to determine the aggregate
   result.  Here, we could perform some kind of calculation based on the
   data found in the <code class="literal">$context</code>.  In our simple example
   though, we have been calculating the result as the query progressed, so we
   simply need to return the context value.
  </p>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="para">
    It is NOT recommended for you to store a copy of the values in the context
    and then process them at the end, as you would cause SQLite to use a lot of
    memory to process the query - just think of how much memory you would need
    if a million rows were stored in memory, each containing a string 32 bytes
    in length.
   </p>
  </div>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="para">
    You can use <span class="methodname"><strong>SQLite3::createAggregate()</strong></span> to override SQLite
    native SQL functions.
   </p>
  </div>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sqlite3/sqlite3/createaggregate.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsqlite3.createaggregate%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=sqlite3.createaggregate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sqlite3.createaggregate.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120420">  <div class="votes">
    <div id="Vu120420">
    <a href="/manual/vote-note.php?id=120420&amp;page=sqlite3.createaggregate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120420">
    <a href="/manual/vote-note.php?id=120420&amp;page=sqlite3.createaggregate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120420" title="100% like this...">
    8
    </div>
  </div>
  <a href="#120420" class="name">
  <strong class="user"><em>boris dot dd at gmail dot com</em></strong></a><a class="genanchor" href="#120420"> &para;</a><div class="date" title="2017-01-06 07:57"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120420">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Test </span><span class="keyword">extends </span><span class="default">SQLite3<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">createAggregate</span><span class="keyword">(</span><span class="string">'groupConcat'</span><span class="keyword">, [</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'concatStep'</span><span class="keyword">], [</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'concatFinal'</span><span class="keyword">]);<br />    }<br />    public function </span><span class="default">concatStep</span><span class="keyword">(&amp;</span><span class="default">$context</span><span class="keyword">, </span><span class="default">$rowId</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">)<br />    {<br />        if (!isset(</span><span class="default">$context</span><span class="keyword">)) {<br />            </span><span class="default">$context </span><span class="keyword">= [<br />                </span><span class="string">'delimiter' </span><span class="keyword">=&gt; </span><span class="default">$delimiter</span><span class="keyword">,<br />                </span><span class="string">'data'      </span><span class="keyword">=&gt; []<br />            ];<br />        }<br />        </span><span class="default">$context</span><span class="keyword">[</span><span class="string">'data'</span><span class="keyword">][] = </span><span class="default">$string</span><span class="keyword">;<br />        return </span><span class="default">$context</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">concatFinal</span><span class="keyword">(&amp;</span><span class="default">$context</span><span class="keyword">)<br />    {<br />        return </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$context</span><span class="keyword">[</span><span class="string">'delimiter'</span><span class="keyword">], </span><span class="default">$context</span><span class="keyword">[</span><span class="string">'data'</span><span class="keyword">]);<br />    }<br />}<br /></span><span class="default">$SQLite </span><span class="keyword">= new </span><span class="default">Test</span><span class="keyword">(</span><span class="string">'/tmp/test.sqlite'</span><span class="keyword">);<br /></span><span class="default">$SQLite</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">(</span><span class="string">"create table `test` (`id` TEXT, `color` TEXT, `size` TEXT)"</span><span class="keyword">);<br /></span><span class="default">$SQLite</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">(</span><span class="string">"insert into `test` (`id`, `color`, `size`) values ('1', 'red', 'M')"</span><span class="keyword">);<br /></span><span class="default">$SQLite</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">(</span><span class="string">"insert into `test` (`id`, `color`, `size`) values ('1', 'green', 'M')"</span><span class="keyword">);<br /></span><span class="default">$SQLite</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">(</span><span class="string">"insert into `test` (`id`, `color`, `size`) values ('1', 'blue', 'S')"</span><span class="keyword">);<br /></span><span class="default">$Result </span><span class="keyword">= </span><span class="default">$SQLite</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"select `size`, groupConcat(`color`, ';') as `color` from `test` group by `size`"</span><span class="keyword">);<br />while (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">$Result</span><span class="keyword">-&gt;</span><span class="default">fetchArray</span><span class="keyword">(</span><span class="default">SQLITE3_ASSOC</span><span class="keyword">)) {<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">);<br />}<br /></span><span class="comment">/*<br />Array<br />(<br />    [size] =&gt; M<br />    [color] =&gt; red;green<br />)<br />Array<br />(<br />    [size] =&gt; S<br />    [color] =&gt; blue<br />)<br />*/</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116737">  <div class="votes">
    <div id="Vu116737">
    <a href="/manual/vote-note.php?id=116737&amp;page=sqlite3.createaggregate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116737">
    <a href="/manual/vote-note.php?id=116737&amp;page=sqlite3.createaggregate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116737" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#116737" class="name">
  <strong class="user"><em>sukmaagungsaputra at gmail dot com</em></strong></a><a class="genanchor" href="#116737"> &para;</a><div class="date" title="2015-02-21 05:09"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116737">
<div class="phpcode"><code><span class="html">Lacks of example, right?<br />Let's try to give to SQlite3 the capability like ones of MySQL's<br />- REGEXP operator,<br />- MD5 function, and<br />- GROUP_CONCAT aggregate function<br /><br />$db = new SQLite3($filename);<br />$db-&gt;createFunction('regexp', function ($a,$b) { return preg_match("/$a/i", $b); });<br />$db-&gt;createFunction('md5', function ($a) { return md5($a); });<br />$db-&gt;createAggregate ('group_concat',<br />            function(&amp;$context, $rownumber, $str) { $context[]=$str; return $context; },<br />            function(&amp;$context) {return implode(",", (array) $context); });</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=sqlite3.createaggregate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sqlite3.createaggregate.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.sqlite3.php">SQLite3</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="sqlite3.backup.php" title="backup">backup</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.busytimeout.php" title="busyTimeout">busyTimeout</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.changes.php" title="changes">changes</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="current">
                            <a href="sqlite3.createaggregate.php" title="createAggregate">createAggregate</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.createcollation.php" title="createCollation">createCollation</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.createfunction.php" title="createFunction">createFunction</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.enableexceptions.php" title="enableExceptions">enableExceptions</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.escapestring.php" title="escapeString">escapeString</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.exec.php" title="exec">exec</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.lasterrorcode.php" title="lastErrorCode">lastErrorCode</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.lasterrormsg.php" title="lastErrorMsg">lastErrorMsg</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.lastinsertrowid.php" title="lastInsertRowID">lastInsertRowID</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.loadextension.php" title="loadExtension">loadExtension</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.open.php" title="open">open</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.openblob.php" title="openBlob">openBlob</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.prepare.php" title="prepare">prepare</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.query.php" title="query">query</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.querysingle.php" title="querySingle">querySingle</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.setauthorizer.php" title="setAuthorizer">setAuthorizer</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.version.php" title="version">version</a>
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
