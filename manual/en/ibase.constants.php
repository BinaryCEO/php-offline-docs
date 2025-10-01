<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ibase.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ibase.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ibase.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ibase.php">
 <link rel="prev" href="https://www.php.net/manual/en/ibase.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.ibase.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ibase.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ibase.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ibase.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ibase.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ibase.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ibase.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ibase.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ibase.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ibase.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ibase.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ibase.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="ref.ibase.php">
          Firebird/InterBase Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ibase.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.ibase.php'>Firebird/InterBase</a></li>      </ul>
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
            <option value='en/ibase.constants.php' selected="selected">English</option>
            <option value='de/ibase.constants.php'>German</option>
            <option value='es/ibase.constants.php'>Spanish</option>
            <option value='fr/ibase.constants.php'>French</option>
            <option value='it/ibase.constants.php'>Italian</option>
            <option value='ja/ibase.constants.php'>Japanese</option>
            <option value='pt_BR/ibase.constants.php'>Brazilian Portuguese</option>
            <option value='ru/ibase.constants.php'>Russian</option>
            <option value='tr/ibase.constants.php'>Turkish</option>
            <option value='uk/ibase.constants.php'>Ukrainian</option>
            <option value='zh/ibase.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ibase.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <p class="para">
  The following constants can be passed to <span class="function"><a href="function.ibase-trans.php" class="function">ibase_trans()</a></span>
  to specify transaction behaviour.
  <table class="doctable table">
   <caption><strong>Firebird/InterBase transaction flags</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>IBASE_DEFAULT</td>
       <td>
       The default transaction settings are to be used. This default is
       determined by the client library, which defines it as
       IBASE_WRITE|IBASE_CONCURRENCY|IBASE_WAIT in most cases.</td>
      </tr>

      <tr>
       <td>IBASE_READ</td>
       <td>Starts a read-only transaction.</td>
      </tr>

      <tr>
       <td>IBASE_WRITE</td>
       <td>Starts a read-write transaction.</td>
      </tr>

      <tr>
       <td>IBASE_CONSISTENCY</td>
       <td>Starts a transaction with the isolation level set to
       &#039;consistency&#039;, which means the transaction cannot read from tables
       that are being modified by other concurrent transactions.</td>
      </tr>

      <tr>
       <td>IBASE_CONCURRENCY</td>
       <td>Starts a transaction with the isolation level set to
       &#039;concurrency&#039; (or &#039;snapshot&#039;), which means the transaction 
       has access to all tables, but cannot see changes that were committed
       by other transactions after the transaction was started.</td>
      </tr>

      <tr>
       <td>IBASE_COMMITTED</td>
       <td>Starts a transaction with the isolation level set to
       &#039;read committed&#039;. This flag should be combined with either
       <strong><code>IBASE_REC_VERSION</code></strong> or 
       <strong><code>IBASE_REC_NO_VERSION</code></strong>. This isolation level
       allows access to changes that were committed after the transaction
       was started. If <strong><code>IBASE_REC_NO_VERSION</code></strong> was
       specified, only the latest version of a row can be read. If 
       <strong><code>IBASE_REC_VERSION</code></strong> was specified, a row can
       even be read when a modification to it is pending in a concurrent
       transaction.
      </td>
      </tr>

      <tr>
       <td>IBASE_WAIT</td>
       <td>Indicated that a transaction should wait and retry when a
       conflict occurs.</td>
      </tr>

      <tr>
       <td>IBASE_NOWAIT</td>
       <td>Indicated that a transaction should fail immediately when a
       conflict occurs.</td>
      </tr>

     </tbody>
    
  </table>

 </p>
 
 <p class="para">
  The following constants can be passed to <span class="function"><a href="function.ibase-fetch-row.php" class="function">ibase_fetch_row()</a></span>,
  <span class="function"><a href="function.ibase-fetch-assoc.php" class="function">ibase_fetch_assoc()</a></span> or <span class="function"><a href="function.ibase-fetch-object.php" class="function">ibase_fetch_object()</a></span>
  to specify fetch behaviour.
  <table class="doctable table">
   <caption><strong>Firebird/InterBase fetch flags</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>IBASE_FETCH_BLOBS</td>
       <td>Also available as <strong><code>IBASE_TEXT</code></strong>for backward
       compatibility. Causes BLOB contents to be fetched inline, instead of 
       being fetched as BLOB identifiers.</td>
      </tr>

      <tr>
       <td>IBASE_FETCH_ARRAYS</td>
       <td>Causes arrays to be fetched inline. Otherwise, array
       identifiers are returned. Array identifiers can only be used as
       arguments to INSERT operations, as no functions to handle array
       identifiers are currently available.
       </td>
      </tr>

      <tr>
       <td>IBASE_UNIXTIME</td>
       <td>Causes date and time fields not to be returned as strings,
       but as UNIX timestamps (the number of seconds since the epoch, which
       is 1-Jan-1970 0:00 UTC). Might be problematic if used with dates
       before 1970 on some systems.
       </td>
      </tr>

     </tbody>
    
  </table>

 </p>
 <p class="para">
  The following constants are used to pass requests and options to the service
  API functions (<span class="function"><a href="function.ibase-server-info.php" class="function">ibase_server_info()</a></span>, <span class="function"><a href="function.ibase-db-info.php" class="function">ibase_db_info()</a></span>,
  <span class="function"><a href="function.ibase-backup.php" class="function">ibase_backup()</a></span>, <span class="function"><a href="function.ibase-restore.php" class="function">ibase_restore()</a></span>
  and <span class="function"><a href="function.ibase-maintain-db.php" class="function">ibase_maintain_db()</a></span>). Please refer to
  the Firebird/InterBase manuals for the meaning of these options.
  <dl>
   
    <dt id="constant.ibase-bkp-ignore-checksums">
      <strong><code><a href="ibase.constants.php#constant.ibase-bkp-ignore-checksums">IBASE_BKP_IGNORE_CHECKSUMS</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-backup.php" class="function">ibase_backup()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-bkp-ignore-limbo">
      <strong><code><a href="ibase.constants.php#constant.ibase-bkp-ignore-limbo">IBASE_BKP_IGNORE_LIMBO</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-backup.php" class="function">ibase_backup()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-bkp-metadata-only">
      <strong><code><a href="ibase.constants.php#constant.ibase-bkp-metadata-only">IBASE_BKP_METADATA_ONLY</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-backup.php" class="function">ibase_backup()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-bkp-no-garbage-collect">
      <strong><code><a href="ibase.constants.php#constant.ibase-bkp-no-garbage-collect">IBASE_BKP_NO_GARBAGE_COLLECT</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-backup.php" class="function">ibase_backup()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-bkp-old-descriptions">
      <strong><code><a href="ibase.constants.php#constant.ibase-bkp-old-descriptions">IBASE_BKP_OLD_DESCRIPTIONS</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-backup.php" class="function">ibase_backup()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-bkp-non-transportable">
      <strong><code><a href="ibase.constants.php#constant.ibase-bkp-non-transportable">IBASE_BKP_NON_TRANSPORTABLE</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-backup.php" class="function">ibase_backup()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-bkp-convert">
      <strong><code><a href="ibase.constants.php#constant.ibase-bkp-convert">IBASE_BKP_CONVERT</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      Options to <span class="function"><a href="function.ibase-backup.php" class="function">ibase_backup()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-res-deactivate-idx">
      <strong><code><a href="ibase.constants.php#constant.ibase-res-deactivate-idx">IBASE_RES_DEACTIVATE_IDX</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-restore.php" class="function">ibase_restore()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-res-no-shadow">
      <strong><code><a href="ibase.constants.php#constant.ibase-res-no-shadow">IBASE_RES_NO_SHADOW</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-restore.php" class="function">ibase_restore()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-res-no-validity">
      <strong><code><a href="ibase.constants.php#constant.ibase-res-no-validity">IBASE_RES_NO_VALIDITY</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-restore.php" class="function">ibase_restore()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-res-one-at-a-time">
      <strong><code><a href="ibase.constants.php#constant.ibase-res-one-at-a-time">IBASE_RES_ONE_AT_A_TIME</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-restore.php" class="function">ibase_restore()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-res-replace">
      <strong><code><a href="ibase.constants.php#constant.ibase-res-replace">IBASE_RES_REPLACE</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-res-create">
      <strong><code><a href="ibase.constants.php#constant.ibase-res-create">IBASE_RES_CREATE</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-restore.php" class="function">ibase_restore()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-res-use-all-space">
      <strong><code><a href="ibase.constants.php#constant.ibase-res-use-all-space">IBASE_RES_USE_ALL_SPACE</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      Options to <span class="function"><a href="function.ibase-restore.php" class="function">ibase_restore()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-page-buffers">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-page-buffers">IBASE_PRP_PAGE_BUFFERS</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-sweep-interval">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-sweep-interval">IBASE_PRP_SWEEP_INTERVAL</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-shutdown-db">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-shutdown-db">IBASE_PRP_SHUTDOWN_DB</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-deny-new-transactions">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-deny-new-transactions">IBASE_PRP_DENY_NEW_TRANSACTIONS</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-deny-new-attachments">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-deny-new-attachments">IBASE_PRP_DENY_NEW_ATTACHMENTS</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-reserve-space">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-reserve-space">IBASE_PRP_RESERVE_SPACE</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-res-use-full">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-res-use-full">IBASE_PRP_RES_USE_FULL</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-res">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-res">IBASE_PRP_RES</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-write-mode">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-write-mode">IBASE_PRP_WRITE_MODE</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-wm-async">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-wm-async">IBASE_PRP_WM_ASYNC</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-wm-sync">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-wm-sync">IBASE_PRP_WM_SYNC</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-access-mode">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-access-mode">IBASE_PRP_ACCESS_MODE</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-am-readonly">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-am-readonly">IBASE_PRP_AM_READONLY</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-am-readwrite">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-am-readwrite">IBASE_PRP_AM_READWRITE</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-set-sql-dialect">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-set-sql-dialect">IBASE_PRP_SET_SQL_DIALECT</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-activate">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-activate">IBASE_PRP_ACTIVATE</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-prp-db-online">
      <strong><code><a href="ibase.constants.php#constant.ibase-prp-db-online">IBASE_PRP_DB_ONLINE</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-rpr-check-db">
      <strong><code><a href="ibase.constants.php#constant.ibase-rpr-check-db">IBASE_RPR_CHECK_DB</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-rpr-ignore-checksum">
      <strong><code><a href="ibase.constants.php#constant.ibase-rpr-ignore-checksum">IBASE_RPR_IGNORE_CHECKSUM</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-rpr-kill-shadows">
      <strong><code><a href="ibase.constants.php#constant.ibase-rpr-kill-shadows">IBASE_RPR_KILL_SHADOWS</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-rpr-mend-db">
      <strong><code><a href="ibase.constants.php#constant.ibase-rpr-mend-db">IBASE_RPR_MEND_DB</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-rpr-validate-db">
      <strong><code><a href="ibase.constants.php#constant.ibase-rpr-validate-db">IBASE_RPR_VALIDATE_DB</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-rpr-full">
      <strong><code><a href="ibase.constants.php#constant.ibase-rpr-full">IBASE_RPR_FULL</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-rpr-sweep-db">
      <strong><code><a href="ibase.constants.php#constant.ibase-rpr-sweep-db">IBASE_RPR_SWEEP_DB</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-maintain-db.php" class="function">ibase_maintain_db()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-sts-data-pages">
      <strong><code><a href="ibase.constants.php#constant.ibase-sts-data-pages">IBASE_STS_DATA_PAGES</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-sts-db-log">
      <strong><code><a href="ibase.constants.php#constant.ibase-sts-db-log">IBASE_STS_DB_LOG</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-sts-hdr-pages">
      <strong><code><a href="ibase.constants.php#constant.ibase-sts-hdr-pages">IBASE_STS_HDR_PAGES</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-sts-idx-pages">
      <strong><code><a href="ibase.constants.php#constant.ibase-sts-idx-pages">IBASE_STS_IDX_PAGES</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-sts-sys-relations">
      <strong><code><a href="ibase.constants.php#constant.ibase-sts-sys-relations">IBASE_STS_SYS_RELATIONS</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-db-info.php" class="function">ibase_db_info()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-svc-server-version">
      <strong><code><a href="ibase.constants.php#constant.ibase-svc-server-version">IBASE_SVC_SERVER_VERSION</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-server-info.php" class="function">ibase_server_info()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-svc-implementation">
      <strong><code><a href="ibase.constants.php#constant.ibase-svc-implementation">IBASE_SVC_IMPLEMENTATION</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-server-info.php" class="function">ibase_server_info()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-svc-get-env">
      <strong><code><a href="ibase.constants.php#constant.ibase-svc-get-env">IBASE_SVC_GET_ENV</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-server-info.php" class="function">ibase_server_info()</a></span>
      </span>
    </dd>
   
   
    <dt id="constant.ibase-svc-get-env-lock">
      <strong><code><a href="ibase.constants.php#constant.ibase-svc-get-env-lock">IBASE_SVC_GET_ENV_LOCK</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-svc-get-env-msg">
      <strong><code><a href="ibase.constants.php#constant.ibase-svc-get-env-msg">IBASE_SVC_GET_ENV_MSG</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-svc-user-dbpath">
      <strong><code><a href="ibase.constants.php#constant.ibase-svc-user-dbpath">IBASE_SVC_USER_DBPATH</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-svc-svr-db-info">
      <strong><code><a href="ibase.constants.php#constant.ibase-svc-svr-db-info">IBASE_SVC_SVR_DB_INFO</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
      </span>
    </dd>
   
   
    <dt id="constant.ibase-svc-get-users">
      <strong><code><a href="ibase.constants.php#constant.ibase-svc-get-users">IBASE_SVC_GET_USERS</a></code></strong>
    </dt>
    <dd>
      <span class="simpara">
       Options to <span class="function"><a href="function.ibase-server-info.php" class="function">ibase_server_info()</a></span>
      </span>
    </dd>
   
  </dl>
  </p>         
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ibase/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fibase.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ibase.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ibase.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.ibase.php">Firebird/InterBase</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.ibase.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="ibase.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="ibase.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.ibase.php" title="Firebird/InterBase Functions">Firebird/InterBase Functions</a>
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
