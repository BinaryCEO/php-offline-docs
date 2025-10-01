<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: dba_open - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.dba-open.php">
 <link rel="shorturl" href="https://www.php.net/dba-open">
 <link rel="alternate" href="https://www.php.net/dba-open" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.dba.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.dba-nextkey.php">
 <link rel="next" href="https://www.php.net/manual/en/function.dba-optimize.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.dba-open.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.dba-open.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.dba-open.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.dba-open.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.dba-open.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.dba-open.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.dba-open.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.dba-open.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.dba-open.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.dba-open.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.dba-open.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Open database" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: dba_open - Manual" />
<meta name="twitter:description" content="Open database" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: dba_open - Manual" />
<meta itemprop="description" content="Open database" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Open database" />

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
        <a href="function.dba-optimize.php">
          dba_optimize &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.dba-nextkey.php">
          &laquo; dba_nextkey        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.dba.php'>DBA</a></li>      <li><a href='ref.dba.php'>DBA Functions</a></li>      </ul>
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
            <option value='en/function.dba-open.php' selected="selected">English</option>
            <option value='de/function.dba-open.php'>German</option>
            <option value='es/function.dba-open.php'>Spanish</option>
            <option value='fr/function.dba-open.php'>French</option>
            <option value='it/function.dba-open.php'>Italian</option>
            <option value='ja/function.dba-open.php'>Japanese</option>
            <option value='pt_BR/function.dba-open.php'>Brazilian Portuguese</option>
            <option value='ru/function.dba-open.php'>Russian</option>
            <option value='tr/function.dba-open.php'>Turkish</option>
            <option value='uk/function.dba-open.php'>Ukrainian</option>
            <option value='zh/function.dba-open.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.dba-open" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">dba_open</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">dba_open</span> &mdash; <span class="dc-title">Open database</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.dba-open-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>dba_open</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mode</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$handler</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$permission</code><span class="initializer"> = 0644</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$map_size</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="class.dba-connection.php" class="type Dba\Connection">Dba\Connection</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>dba_open()</strong></span> establishes a database instance for
   <code class="parameter">path</code> with <code class="parameter">mode</code> using
   <code class="parameter">handler</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.dba-open-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">path</code></dt>
     <dd>
      <p class="para">
       Commonly a regular path in your filesystem.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       It is <code class="literal">r</code> for read access, <code class="literal">w</code> for
       read/write access to an already existing database, <code class="literal">c</code>
       for read/write access and database creation if it doesn&#039;t currently exist,
       and <code class="literal">n</code> for create, truncate and read/write access.
       The database is created in BTree mode, other modes (like Hash or Queue)
       are not supported.
      </p>
      <p class="para">
       Additionally you can set the database lock method with the next char. 
       Use <code class="literal">l</code> to lock the database with a <var class="filename">.lck</var>
       file or <code class="literal">d</code> to lock the databasefile itself. It is 
       important that all of your applications do this consistently.
      </p>
      <p class="para">
       If you want to test the access and do not want to wait for the lock 
       you can add <code class="literal">t</code> as third character. When you are 
       absolutely sure that you do not require database locking you can do 
       so by using <code class="literal">-</code> instead of <code class="literal">l</code> or
       <code class="literal">d</code>. When none of <code class="literal">d</code>, 
       <code class="literal">l</code> or <code class="literal">-</code> is used, dba will lock
       on the database file as it would with <code class="literal">d</code>.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        There can only be one writer for one database file. When you use dba on 
        a web server and more than one request requires write operations they can
        only be done one after another. Also read during write is not allowed.
        The dba extension uses locks to prevent this. See the following table:
        <table class="doctable table">
         <caption><strong>DBA locking</strong></caption>
         
          <thead>
           <tr>
            <th>already open</th>
            <th><code class="parameter">mode</code> = &quot;rl&quot;</th>
            <th><code class="parameter">mode</code> = &quot;rlt&quot;</th>
            <th><code class="parameter">mode</code> = &quot;wl&quot;</th>
            <th><code class="parameter">mode</code> = &quot;wlt&quot;</th>
            <th><code class="parameter">mode</code> = &quot;rd&quot;</th>
            <th><code class="parameter">mode</code> = &quot;rdt&quot;</th>
            <th><code class="parameter">mode</code> = &quot;wd&quot;</th>
            <th><code class="parameter">mode</code> = &quot;wdt&quot;</th>
           </tr>

          </thead>

          <tbody class="tbody">
           <tr>
            <td>not open</td>
            <td>ok</td>
            <td>ok</td>
            <td>ok</td>
            <td>ok</td>
            <td>ok</td>
            <td>ok</td>
            <td>ok</td>
            <td>ok</td>
           </tr>

           <tr>
            <td><code class="parameter">mode</code> = &quot;rl&quot;</td>
            <td>ok</td>
            <td>ok</td>
            <td>wait</td>
            <td>false</td>
            <td>illegal</td>
            <td>illegal</td>
            <td>illegal</td>
            <td>illegal</td>
           </tr>

           <tr>
            <td><code class="parameter">mode</code> = &quot;wl&quot;</td>
            <td>wait</td>
            <td>false</td>
            <td>wait</td>
            <td>false</td>
            <td>illegal</td>
            <td>illegal</td>
            <td>illegal</td>
            <td>illegal</td>
           </tr>

           <tr>
            <td><code class="parameter">mode</code> = &quot;rd&quot;</td>
            <td>illegal</td>
            <td>illegal</td>
            <td>illegal</td>
            <td>illegal</td>
            <td>ok</td>
            <td>ok</td>
            <td>wait</td>
            <td>false</td>
           </tr>

           <tr>
            <td><code class="parameter">mode</code> = &quot;wd&quot;</td>
            <td>illegal</td>
            <td>illegal</td>
            <td>illegal</td>
            <td>illegal</td>
            <td>wait</td>
            <td>false</td>
            <td>wait</td>
            <td>false</td>
           </tr>

          </tbody>
         
        </table>

        <ul class="simplelist">
         <li>ok: the second call will be successful.</li>
         <li>wait: the second call waits until <span class="function"><a href="function.dba-close.php" class="function">dba_close()</a></span> is called for the first.</li>
         <li>false: the second call returns false.</li>
         <li>illegal: you must not mix <code class="literal">&quot;l&quot;</code> and <code class="literal">&quot;d&quot;</code> modifiers for <code class="parameter">mode</code> parameter.</li>
        </ul>
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">handler</code></dt>
     <dd>
      <p class="para">
       The name of the <a href="dba.requirements.php" class="link">handler</a> which
       shall be used for accessing <code class="parameter">path</code>. It is passed
       all optional parameters given to <span class="function"><strong>dba_open()</strong></span> and
       can act on behalf of them. If <code class="parameter">handler</code> is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>,
       then the default handler is invoked.
      </p>
     </dd>
    
    
     <dt><code class="parameter">permission</code></dt>
     <dd>
      <p class="para">
       Optional <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> parameter which is passed to the driver. It has the same meaning as
       the <code class="parameter">permissions</code> parameter of <span class="function"><a href="function.chmod.php" class="function">chmod()</a></span>,
       and defaults to <code class="literal">0644</code>.
      </p>
      <p class="para">
       The <code class="literal">db1</code>, <code class="literal">db2</code>, <code class="literal">db3</code>,
       <code class="literal">db4</code>, <code class="literal">dbm</code>, <code class="literal">gdbm</code>,
       <code class="literal">ndbm</code>, and <code class="literal">lmdb</code> drivers support the
       <code class="parameter">permission</code> parameter.
      </p>
     </dd>
    
    
     <dt><code class="parameter">map_size</code></dt>
     <dd>
      <p class="para">
       Optional <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> parameter which is passed to the driver. Its value should be a multiple of the
       page size of the OS, or zero, to use the default map size.
      </p>
      <p class="para">
       Only the <code class="literal">lmdb</code> driver accepts the <code class="parameter">map_size</code> parameter.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       Flags to pass to the database drivers. If <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> the default flags will be provided.
       Currently, only the LMDB driver supports the following flags
       <strong><code><a href="dba.constants.php#constant.dba-lmdb-use-sub-dir">DBA_LMDB_USE_SUB_DIR</a></code></strong> and
       <strong><code><a href="dba.constants.php#constant.dba-lmdb-no-sub-dir">DBA_LMDB_NO_SUB_DIR</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.dba-open-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a <span class="classname"><a href="class.dba-connection.php" class="classname">Dba\Connection</a></span> instance on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.dba-open-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned and an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level error is issued when
   <code class="parameter">handler</code> is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, but there is no default handler.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.dba-open-changelog">
  <h3 class="title">Changelog</h3>
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
       Returns a <span class="classname"><a href="class.dba-connection.php" class="classname">Dba\Connection</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
      </td>
     </tr>

     <tr>
      <td>8.2.0</td>
      <td>
       <code class="parameter">flags</code> is added.
      </td>
     </tr>

     <tr>
      <td>8.2.0</td>
      <td>
       <code class="parameter">handler</code> is now nullable.
      </td>
     </tr>

     <tr>
      <td>7.3.14, 7.4.2</td>
      <td>
       The <code class="literal">lmdb</code> driver now supports an additional <code class="parameter">map_size</code>
       parameter.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.dba-open-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.dba-popen.php" class="function" rel="rdfs-seeAlso">dba_popen()</a> - Open database persistently</span></li>
    <li><span class="function"><a href="function.dba-close.php" class="function" rel="rdfs-seeAlso">dba_close()</a> - Close a DBA database</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dba/functions/dba-open.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.dba-open%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.dba-open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dba-open.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="70566">  <div class="votes">
    <div id="Vu70566">
    <a href="/manual/vote-note.php?id=70566&amp;page=function.dba-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70566">
    <a href="/manual/vote-note.php?id=70566&amp;page=function.dba-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70566" title="57% like this...">
    1
    </div>
  </div>
  <a href="#70566" class="name">
  <strong class="user"><em>doppelbauer at gmail dot com</em></strong></a><a class="genanchor" href="#70566"> &para;</a><div class="date" title="2006-10-20 07:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70566">
<div class="phpcode"><code><span class="html">Windows does not support locking the database. You may use $_ENV to determine the OS:<br /><br />$locking = (stripos($_ENV['OS'],'windows') === false ? 'd' : 'l');</span></code></div>
  </div>
 </div>
  <div class="note" id="97696">  <div class="votes">
    <div id="Vu97696">
    <a href="/manual/vote-note.php?id=97696&amp;page=function.dba-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97696">
    <a href="/manual/vote-note.php?id=97696&amp;page=function.dba-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97696" title="50% like this...">
    0
    </div>
  </div>
  <a href="#97696" class="name">
  <strong class="user"><em>dracoirs at gmail dot com</em></strong></a><a class="genanchor" href="#97696"> &para;</a><div class="date" title="2010-05-03 03:10"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97696">
<div class="phpcode"><code><span class="html">Apache doesn't support Berkeley DB Btree, so you can't manipulate use db4 as the type of database if you want to do DBM authentication with Apache.<br /><br />gdbm seemed to work fine though, even though it supposedly using Btree instead of hash.  It makes you wonder why Apache would use hash for one dbmtype versus btree for another.<br /><br />So since Apache and PHP don't have options to choose the method for the Berkeley DBs, you are out of luck.</span></code></div>
  </div>
 </div>
  <div class="note" id="83254">  <div class="votes">
    <div id="Vu83254">
    <a href="/manual/vote-note.php?id=83254&amp;page=function.dba-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83254">
    <a href="/manual/vote-note.php?id=83254&amp;page=function.dba-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83254" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83254" class="name">
  <strong class="user"><em>mskala at ansuz dot sooke dot bc dot ca</em></strong></a><a class="genanchor" href="#83254"> &para;</a><div class="date" title="2008-05-16 02:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83254">
<div class="phpcode"><code><span class="html">As of GDBM version 1.8.3, GDBM's underlying open call uses non-blocking calls to flock() on systems that have flock().  As a result, calls with "rd" or "wd" locking modes will return error ("Can't be reader" or "Can't be writer") instead of waiting.  Use "rl" or "wl" instead, to make PHP do its own locking external to GDBM.</span></code></div>
  </div>
 </div>
  <div class="note" id="63777">  <div class="votes">
    <div id="Vu63777">
    <a href="/manual/vote-note.php?id=63777&amp;page=function.dba-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63777">
    <a href="/manual/vote-note.php?id=63777&amp;page=function.dba-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63777" title="50% like this...">
    0
    </div>
  </div>
  <a href="#63777" class="name">
  <strong class="user"><em>xy ät affenkrieger.de</em></strong></a><a class="genanchor" href="#63777"> &para;</a><div class="date" title="2006-03-30 06:13"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63777">
<div class="phpcode"><code><span class="html">If you get some strange errors like<br />dba_open(): myDbFilename.db : Permission denied<br />than you are propably using PHP on a Windoze machine. You have to make sure that the following conditions are met:<br /><br />1) Use an absolute path to your db file. Relative paths will cause problems with locking<br />2) Specify a locking mode - that's the second character of the mode-argument, or else opening a dba-file will cause several notices/warnings etc.<br /><br />And a final, general note:<br />3) Always use the english PHP doc on this site - the translations are often old as hell and miss important informations<br /><br />HTH, Nils.</span></code></div>
  </div>
 </div>
  <div class="note" id="79370">  <div class="votes">
    <div id="Vu79370">
    <a href="/manual/vote-note.php?id=79370&amp;page=function.dba-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79370">
    <a href="/manual/vote-note.php?id=79370&amp;page=function.dba-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79370" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#79370" class="name">
  <strong class="user"><em>trohit at blue bottle dot com</em></strong></a><a class="genanchor" href="#79370"> &para;</a><div class="date" title="2007-11-23 03:34"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79370">
<div class="phpcode"><code><span class="html">Here's a simple example to use the dba_open function<br /><br /><span class="default">&lt;?php<br /><br />$id </span><span class="keyword">= </span><span class="default">dba_open</span><span class="keyword">(</span><span class="string">"/tmp/test.db"</span><span class="keyword">, </span><span class="string">"n"</span><span class="keyword">, </span><span class="string">"gdbm"</span><span class="keyword">);<br /><br />if (!</span><span class="default">$id</span><span class="keyword">) {<br />        echo </span><span class="string">"dba_open failed\n"</span><span class="keyword">;<br />        exit;<br />}<br /><br /></span><span class="default">dba_replace</span><span class="keyword">(</span><span class="string">"key"</span><span class="keyword">, </span><span class="string">"This is an example!"</span><span class="keyword">, </span><span class="default">$id</span><span class="keyword">);<br /><br />if (</span><span class="default">dba_exists</span><span class="keyword">(</span><span class="string">"key"</span><span class="keyword">, </span><span class="default">$id</span><span class="keyword">)) {<br />        echo </span><span class="default">dba_fetch</span><span class="keyword">(</span><span class="string">"key"</span><span class="keyword">, </span><span class="default">$id</span><span class="keyword">);<br />        </span><span class="default">dba_delete</span><span class="keyword">(</span><span class="string">"key"</span><span class="keyword">, </span><span class="default">$id</span><span class="keyword">);<br />}<br /><br /></span><span class="default">dba_close</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93369">  <div class="votes">
    <div id="Vu93369">
    <a href="/manual/vote-note.php?id=93369&amp;page=function.dba-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93369">
    <a href="/manual/vote-note.php?id=93369&amp;page=function.dba-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93369" title="30% like this...">
    -5
    </div>
  </div>
  <a href="#93369" class="name">
  <strong class="user"><em>cbemerine at gmail dot com</em></strong></a><a class="genanchor" href="#93369"> &para;</a><div class="date" title="2009-09-06 04:59"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93369">
<div class="phpcode"><code><span class="html">Note the “c” create flag does not work if MySQL was built with the “cdb” DBA handler compile option which is common for many distros.  By definition the cdb DBA handler is optimized for reading/writing and “no updates are allowed.”  <br /><br /><span class="default">&lt;?php<br />$dbh </span><span class="keyword">= </span><span class="default">dba_open</span><span class="keyword">( </span><span class="string">"./data2/productz"</span><span class="keyword">, </span><span class="string">"c"</span><span class="keyword">, </span><span class="string">"cdb"</span><span class="keyword">) or die( </span><span class="string">"Couldn't open Database" </span><span class="keyword">); <br /></span><span class="default">?&gt;<br /></span><br />instead use<br /><br /><span class="default">&lt;?php<br />$dbh </span><span class="keyword">= </span><span class="default">dba_open</span><span class="keyword">( </span><span class="string">"./data2/productz"</span><span class="keyword">, </span><span class="string">"n"</span><span class="keyword">, </span><span class="string">"cdb" </span><span class="keyword">) or die( </span><span class="string">"Couldnt open Database" </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />generates this error message in the /var/log/apache2/error.log: <br />[Sun Sep 06 04:18:15 2009] [error] [client 192.168.1.125] PHP Warning:  dba_open(./data2/productz,c) [&lt;a href='function.dba-open'&gt;function.dba-open&lt;/a&gt;]: Driver initialization failed for handler: cdb: Update operations are not supported in /var/www/projects/testcdb-c.php on line 43<br /><br />see user contributed comment under dba_handlers() to see which DBA handlers are supported by your build of MySQL and note about using “cdb” compiled DBA systems: <br /><br />also see user contributed comment under dba_replace() about incompatibilities with cdb DBA handler compiled MySQL systems.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.dba-open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dba-open.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.dba.php">DBA Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.dba-close.php" title="dba_&#8203;close">dba_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-delete.php" title="dba_&#8203;delete">dba_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-exists.php" title="dba_&#8203;exists">dba_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-fetch.php" title="dba_&#8203;fetch">dba_&#8203;fetch</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-firstkey.php" title="dba_&#8203;firstkey">dba_&#8203;firstkey</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-handlers.php" title="dba_&#8203;handlers">dba_&#8203;handlers</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-insert.php" title="dba_&#8203;insert">dba_&#8203;insert</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-key-split.php" title="dba_&#8203;key_&#8203;split">dba_&#8203;key_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-list.php" title="dba_&#8203;list">dba_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-nextkey.php" title="dba_&#8203;nextkey">dba_&#8203;nextkey</a>
                        </li>
                                                <li class="current">
                            <a href="function.dba-open.php" title="dba_&#8203;open">dba_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-optimize.php" title="dba_&#8203;optimize">dba_&#8203;optimize</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-popen.php" title="dba_&#8203;popen">dba_&#8203;popen</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-replace.php" title="dba_&#8203;replace">dba_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-sync.php" title="dba_&#8203;sync">dba_&#8203;sync</a>
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
