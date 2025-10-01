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

 <link rel="canonical" href="https://www.php.net/manual/en/cubrid.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/cubrid.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/cubrid.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.cubrid.php">
 <link rel="prev" href="https://www.php.net/manual/en/cubrid.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/cubrid.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/cubrid.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/cubrid.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/cubrid.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/cubrid.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/cubrid.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/cubrid.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/cubrid.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/cubrid.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/cubrid.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/cubrid.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/cubrid.constants.php" hreflang="zh">

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
        <a href="cubrid.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="cubrid.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.cubrid.php'>CUBRID</a></li>      </ul>
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
            <option value='en/cubrid.constants.php' selected="selected">English</option>
            <option value='de/cubrid.constants.php'>German</option>
            <option value='es/cubrid.constants.php'>Spanish</option>
            <option value='fr/cubrid.constants.php'>French</option>
            <option value='it/cubrid.constants.php'>Italian</option>
            <option value='ja/cubrid.constants.php'>Japanese</option>
            <option value='pt_BR/cubrid.constants.php'>Brazilian Portuguese</option>
            <option value='ru/cubrid.constants.php'>Russian</option>
            <option value='tr/cubrid.constants.php'>Turkish</option>
            <option value='uk/cubrid.constants.php'>Ukrainian</option>
            <option value='zh/cubrid.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="cubrid.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
  <p class="para">
  The following constants can be used when executing SQL statement. They can
  be passed to <span class="function"><a href="function.cubrid-prepare.php" class="function">cubrid_prepare()</a></span> and
  <span class="function"><a href="function.cubrid-execute.php" class="function">cubrid_execute()</a></span>.
  <table class="doctable table">
   <caption><strong>CUBRID SQL execution flags</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><strong><code>CUBRID_INCLUDE_OID</code></strong></td>
       <td>Determine whether to get OID during query execution.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_ASYNC</code></strong></td>
       <td>Execute the query in asynchronous mode.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_EXEC_QUERY_ALL</code></strong></td>
       <td>Execute the query in synchronous mode. This flag must be set
        when executing multiple SQL statements.</td>
      </tr>

     </tbody>
    
   </table>

  </p>

  <p class="para">
  The following constants can be used when fetching the results to specify
  fetch behaviour. They can be passed to <span class="function"><a href="function.cubrid-fetch.php" class="function">cubrid_fetch()</a></span> and
  <span class="function"><a href="function.cubrid-fetch-array.php" class="function">cubrid_fetch_array()</a></span>.
  <table class="doctable table">
   <caption><strong>CUBRID fetch flags</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><strong><code>CUBRID_NUM</code></strong></td>
       <td>Get query result as a numeric array (0-default).</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_ASSOC</code></strong></td>
       <td>Get query result as an associative array.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_BOTH</code></strong></td>
       <td>Get query result as both numeric and associative arrays (default value).</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_OBJECT</code></strong></td>
       <td>Get query result an object.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_LOB</code></strong></td>
       <td>The constant CUBRID_LOB can be used when you want to operate the
        lob object. It can be passed to <span class="function"><a href="function.cubrid-fetch.php" class="function">cubrid_fetch()</a></span>,
        <span class="function"><a href="function.cubrid-fetch-row.php" class="function">cubrid_fetch_row()</a></span>,
        <span class="function"><a href="function.cubrid-fetch-array.php" class="function">cubrid_fetch_array()</a></span>,
        <span class="function"><a href="function.cubrid-fetch-assoc.php" class="function">cubrid_fetch_assoc()</a></span> and
        <span class="function"><a href="function.cubrid-fetch-object.php" class="function">cubrid_fetch_object()</a></span>.</td>
      </tr>

     </tbody>
    
   </table>

  </p>

  <p class="para">
   The following constants can be used when positioning the cursor in query
   results. They can be passed to or returned by 
   <span class="function"><a href="function.cubrid-move-cursor.php" class="function">cubrid_move_cursor()</a></span>.
  <table class="doctable table">
   <caption><strong>CUBRID cursor position flags</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><strong><code>CUBRID_CURSOR_FIRST</code></strong></td>
       <td>Move current cursor to the first position in the result.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_CURSOR_CURRENT</code></strong></td>
       <td>Move current cursor as a default value if the origin is not specified.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_CURSOR_LAST</code></strong></td>
       <td>Move current cursor to the last position in the result.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_CURSOR_SUCCESS</code></strong></td>
       <td>Returned value of <span class="function"><a href="function.cubrid-move-cursor.php" class="function">cubrid_move_cursor()</a></span>
        function in case of success. This flag has been removed from 8.4.1.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_NO_MORE_DATA</code></strong></td>
       <td>Returned value of <span class="function"><a href="function.cubrid-move-cursor.php" class="function">cubrid_move_cursor()</a></span>
        function in case of failure. This flag has been removed from 8.4.1.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_CURSOR_ERROR</code></strong></td>
       <td>Returned value of <span class="function"><a href="function.cubrid-move-cursor.php" class="function">cubrid_move_cursor()</a></span>
        function in case of failure. This flag has been removed from 8.4.1.</td>
      </tr>

     </tbody>
    
   </table>

  </p>

  <p class="para">
   The following constants can be used when setting the auto-commit mode for
   the database connection. They can be passed to
   <span class="function"><a href="function.cubrid-set-autocommit.php" class="function">cubrid_set_autocommit()</a></span> or returned by
   <span class="function"><a href="function.cubrid-get-autocommit.php" class="function">cubrid_get_autocommit()</a></span>.
  <table class="doctable table">
   <caption><strong>CUBRID auto-commit mode flags</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><strong><code>CUBRID_AUTOCOMMIT_TRUE</code></strong></td>
       <td>Enable the auto-commit mode.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_AUTOCOMMIT_FALSE</code></strong></td>
       <td>Disable the auto-commit mode.</td>
      </tr>

     </tbody>
    
   </table>

  </p>

  <p class="para">
   The following constants can be used when setting the database parameter.
   They can be passed to <span class="function"><a href="function.cubrid-set-db-parameter.php" class="function">cubrid_set_db_parameter()</a></span>.
  <table class="doctable table">
   <caption><strong>CUBRID parameter flags</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><strong><code>CUBRID_PARAM_ISOLATION_LEVEL</code></strong></td>
       <td>Transaction isolation level for the database connection.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_PARAM_LOCK_TIMEOUT</code></strong></td>
       <td>Transaction timeout in seconds.</td>
      </tr>

     </tbody>
    
   </table>

  </p>

  <p class="para">
   The following constants can be used when setting the transaction isolation
   level. They can be passed to <span class="function"><a href="function.cubrid-set-db-parameter.php" class="function">cubrid_set_db_parameter()</a></span>
   or returned by <span class="function"><a href="function.cubrid-get-db-parameter.php" class="function">cubrid_get_db_parameter()</a></span>.
  <table class="doctable table">
   <caption><strong>CUBRID isolation level flags</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><strong><code>TRAN_COMMIT_CLASS_UNCOMMIT_INSTANCE</code></strong></td>
       <td>The lowest isolation level (1). A dirty, non-repeatable or
        phantom read may occur for the tuple and a non-repeatable read may
        occur for the table as well.</td>
      </tr>

      <tr>
       <td><strong><code>TRAN_COMMIT_CLASS_COMMIT_INSTANCE</code></strong></td>
       <td>A relatively low isolation level (2). A dirty read does not
        occur, but non-repeatable or phantom read may occur.</td>
      </tr>

      <tr>
       <td><strong><code>TRAN_REP_CLASS_UNCOMMIT_INSTANCE</code></strong></td>
       <td>The default isolation of CUBRID (3). A dirty, non-repeatable or
        phantom read may occur for the tuple, but repeatable read is ensured
        for the table.</td>
      </tr>

      <tr>
       <td><strong><code>TRAN_REP_CLASS_COMMIT_INSTANCE</code></strong></td>
       <td>A relatively low isolation level (4). A dirty read does not
        occur, but non-repeatable or phantom read may.</td>
      </tr>

      <tr>
       <td><strong><code>TRAN_REP_CLASS_REP_INSTANCE</code></strong></td>
       <td>A relatively high isolation level (5). A dirty or non-repeatable
       read does not occur, but a phantom read may.</td>
      </tr>

      <tr>
       <td><strong><code>TRAN_SERIALIZABLE</code></strong></td>
       <td>The highest isolation level (6). Problems concerning concurrency
       (e.g. dirty read, non-repeatable read, phantom read, etc.) do not
       occur.</td>
      </tr>

     </tbody>
    
   </table>

  </p>

  <p class="para">
   The following constants can be used when getting schema information. They
   can be passed to <span class="function"><a href="function.cubrid-schema.php" class="function">cubrid_schema()</a></span>.
  <table class="doctable table">
   <caption><strong>CUBRID schema flags</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><strong><code>CUBRID_SCH_CLASS</code></strong></td>
       <td>Get name and type of table in CUBRID.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_VCLASS</code></strong></td>
       <td>Get name and type of view in CUBRID.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_QUERY_SPEC</code></strong></td>
       <td>Get the query definition of view.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_ATTRIBUTE</code></strong></td>
       <td>Get the attributes of table column.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_CLASS_ATTRIBUTE</code></strong></td>
       <td>Get the attributes of table.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_METHOD</code></strong></td>
       <td>Get the instance method. The instance method is a method called
       by a class instance. It is used more often than the class method
       because most operations are executed in the instance.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_CLASS_METHOD</code></strong></td>
       <td>Get the class method. The class method is a method called by a
        class object. It is usually used to create a new class instance or to
        initialize it. It is also used to access or update class
        attributes.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_METHOD_FILE</code></strong></td>
       <td>Get the information of the file where the method of the table is
        defined.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_SUPERCLASS</code></strong></td>
       <td>Get the name and type of table which table inherites attributes
        from.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_SUBCLASS</code></strong></td>
       <td>Get the name and type of table which inherites attributes from
        this table.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_CONSTRAINT</code></strong></td>
       <td>Get the table constraints.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_TRIGGER</code></strong></td>
       <td>Get the table triggers.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_CLASS_PRIVILEGE</code></strong></td>
       <td>Get the privilege information of table.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_ATTR_PRIVILEGE</code></strong></td>
       <td>Get the privilege information of column.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_DIRECT_SUPER_CLASS</code></strong></td>
       <td>Get the direct super table of table.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_PRIMARY_KEY</code></strong></td>
       <td>Get the table primary key.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_IMPORTED_KEYS</code></strong></td>
       <td>Get imported keys of table.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_EXPORTED_KEYS</code></strong></td>
       <td>Get exported keys of table.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_SCH_CROSS_REFERENCE</code></strong></td>
       <td>Get reference relationship of two tables.</td>
      </tr>

     </tbody>
    
   </table>

  </p>

  <p class="para">
  The following constants can be used when reporting errors. They can be
  returned from <span class="function"><a href="function.cubrid-error-code-facility.php" class="function">cubrid_error_code_facility()</a></span>.
  <table class="doctable table">
   <caption><strong>CUBRID error facility code</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><strong><code>CUBRID_FACILITY_DBMS</code></strong></td>
       <td>The error occurred in CUBRID dbms.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_FACILITY_CAS</code></strong></td>
       <td>The error occurred in CUBRID broker cas.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_FACILITY_CCI</code></strong></td>
       <td>The error occurred in CUBRID cci.</td>
      </tr>

      <tr>
       <td><strong><code>CUBRID_FACILITY_CLIENT</code></strong></td>
       <td>The error occurred in CUBRID PHP client.</td>
      </tr>

     </tbody>
    
   </table>

  </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/cubrid/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcubrid.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=cubrid.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/cubrid.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.cubrid.php">CUBRID</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.cubrid.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="cubrid.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="cubrid.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="cubrid.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.cubrid.php" title="CUBRID Functions">CUBRID Functions</a>
                        </li>
                                                <li class="">
                            <a href="cubridmysql.cubrid.php" title="CUBRID MySQL Compatibility Functions">CUBRID MySQL Compatibility Functions</a>
                        </li>
                                                <li class="">
                            <a href="oldaliases.cubrid.php" title="CUBRID Obsolete Aliases and Functions">CUBRID Obsolete Aliases and Functions</a>
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
