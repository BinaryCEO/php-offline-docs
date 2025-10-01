<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: odbc_connect - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.odbc-connect.php">
 <link rel="shorturl" href="https://www.php.net/odbc-connect">
 <link rel="alternate" href="https://www.php.net/odbc-connect" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.uodbc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.odbc-commit.php">
 <link rel="next" href="https://www.php.net/manual/en/function.odbc-connection-string-is-quoted.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.odbc-connect.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.odbc-connect.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.odbc-connect.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.odbc-connect.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.odbc-connect.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.odbc-connect.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.odbc-connect.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.odbc-connect.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.odbc-connect.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.odbc-connect.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.odbc-connect.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Connect to a datasource" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: odbc_connect - Manual" />
<meta name="twitter:description" content="Connect to a datasource" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: odbc_connect - Manual" />
<meta itemprop="description" content="Connect to a datasource" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Connect to a datasource" />

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
        <a href="function.odbc-connection-string-is-quoted.php">
          odbc_connection_string_is_quoted &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.odbc-commit.php">
          &laquo; odbc_commit        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.uodbc.php'>ODBC</a></li>      <li><a href='ref.uodbc.php'>ODBC Functions</a></li>      </ul>
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
            <option value='en/function.odbc-connect.php' selected="selected">English</option>
            <option value='de/function.odbc-connect.php'>German</option>
            <option value='es/function.odbc-connect.php'>Spanish</option>
            <option value='fr/function.odbc-connect.php'>French</option>
            <option value='it/function.odbc-connect.php'>Italian</option>
            <option value='ja/function.odbc-connect.php'>Japanese</option>
            <option value='pt_BR/function.odbc-connect.php'>Brazilian Portuguese</option>
            <option value='ru/function.odbc-connect.php'>Russian</option>
            <option value='tr/function.odbc-connect.php'>Turkish</option>
            <option value='uk/function.odbc-connect.php'>Ukrainian</option>
            <option value='zh/function.odbc-connect.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.odbc-connect" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">odbc_connect</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">odbc_connect</span> &mdash; <span class="dc-title">Connect to a datasource</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.odbc-connect-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>odbc_connect</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dsn</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$user</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$password</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$cursor_option</code><span class="initializer"> = <strong><code><a href="uodbc.constants.php#constant.sql-cur-use-driver">SQL_CUR_USE_DRIVER</a></code></strong></span></span><br>): <span class="type"><span class="type">Odbc\Connection</span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="simpara">
   The connection id returned by this functions is needed by other
   ODBC functions. You can have multiple connections open at once as long as
   they either use different db or different credentials.
  </p>
  <p class="simpara">
   With some ODBC drivers, executing a complex stored procedure may
   fail with an error similar to: &quot;Cannot open a cursor on a stored
   procedure that has anything other than a single select statement
   in it&quot;.  Using SQL_CUR_USE_ODBC may avoid that error. Also, some
   drivers don&#039;t support the optional row_number parameter in
   <span class="function"><a href="function.odbc-fetch-row.php" class="function">odbc_fetch_row()</a></span>. SQL_CUR_USE_ODBC might help
   in that case, too.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.odbc-connect-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">dsn</code></dt>
     <dd>
      <p class="para">
       The database source name for the connection. Alternatively, a
       DSN-less connection string can be used.
      </p>
     </dd>
    
    
     <dt><code class="parameter">user</code></dt>
     <dd>
      <p class="para">
       The username.
       This parameter is ignored if <code class="parameter">dsn</code> contains <code class="literal">uid</code>.
       To connect without specifying a <code class="parameter">user</code>,
       use <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">password</code></dt>
     <dd>
      <p class="para">
       The password.
       This parameter is ignored if <code class="parameter">dsn</code> contains <code class="literal">pwd</code>.
       To connect without specifying a <code class="parameter">password</code>,
       use <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">cursor_option</code></dt>
     <dd>
      <p class="para">
       This sets the type of cursor to be used
       for this connection. This parameter is not normally needed, but
       can be useful for working around problems with some ODBC drivers.
      </p>
      <span class="simpara">
       The following constants are defined for cursortype:
      </span>
      <p class="para">
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          SQL_CUR_USE_IF_NEEDED
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          SQL_CUR_USE_ODBC
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          SQL_CUR_USE_DRIVER
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.odbc-connect-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an ODBC connection,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.odbc-connect-changelog">
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
  <code class="parameter">odbc</code> expects an <span class="classname"><strong class="classname">Odbc\Connection</strong></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

 <tr>
  <td>8.4.0</td>
  <td>
   This function returns a <span class="classname"><strong class="classname">Odbc\Connection</strong></span> instance now;
   previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
  </td>
 </tr>

     <tr>
  <td>8.4.0</td>
  <td>
   <code class="parameter">user</code> and <code class="parameter">password</code> are now nullable,
   they are now also optional and default to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
  </td>
 </tr>

 <tr>
  <td>8.4.0</td>
  <td>
   Previously, using an empty string for <code class="parameter">password</code> would not include
   <code class="literal">pwd</code> in the generated connection string for <code class="parameter">dsn</code>.
   It is now generated to include a <code class="literal">pwd</code> which has an empty string as its value.
   To restore the previous behaviour <code class="parameter">password</code> can now be set to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
  </td>
 </tr>

 <tr>
  <td>8.4.0</td>
  <td>
   Previously, if <code class="parameter">dsn</code> contained <code class="literal">uid</code> or <code class="literal">pwd</code>
   both <code class="parameter">user</code> and <code class="parameter">password</code> parameters were ignored.
   Now <code class="parameter">user</code> is only ignored if <code class="parameter">dsn</code> contains
   <code class="literal">uid</code>, and <code class="parameter">password</code>  is only ignored if
   <code class="parameter">dsn</code> contains <code class="literal">pwd</code>.
  </td>
 </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.odbc-connect-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1095">
    <p><strong>Example #1 DSN-less connections</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Microsoft SQL Server using the SQL Native Client 10.0 ODBC Driver - allows connection to SQL 7, 2000, 2005 and 2008<br /></span><span style="color: #0000BB">$connection </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"Driver={SQL Server Native Client 10.0};Server=</span><span style="color: #0000BB">$server</span><span style="color: #DD0000">;Database=</span><span style="color: #0000BB">$database</span><span style="color: #DD0000">;"</span><span style="color: #007700">, </span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Microsoft Access<br /></span><span style="color: #0000BB">$connection </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"Driver={Microsoft Access Driver (*.mdb)};Dbq=</span><span style="color: #0000BB">$mdbFilename</span><span style="color: #DD0000">"</span><span style="color: #007700">, </span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Microsoft Excel<br /></span><span style="color: #0000BB">$excelFile </span><span style="color: #007700">= </span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'C:/ExcelData.xls'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$excelDir </span><span style="color: #007700">= </span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$excelFile</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$connection </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"Driver={Microsoft Excel Driver (*.xls)};DriverId=790;Dbq=</span><span style="color: #0000BB">$excelFile</span><span style="color: #DD0000">;DefaultDir=</span><span style="color: #0000BB">$excelDir</span><span style="color: #DD0000">" </span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.odbc-connect-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li>For persistent connections: <span class="function"><a href="function.odbc-pconnect.php" class="function" rel="rdfs-seeAlso">odbc_pconnect()</a> - Open a persistent database connection</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/uodbc/functions/odbc-connect.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.odbc-connect%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.odbc-connect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-connect.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">30 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="123797">  <div class="votes">
    <div id="Vu123797">
    <a href="/manual/vote-note.php?id=123797&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123797">
    <a href="/manual/vote-note.php?id=123797&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123797" title="68% like this...">
    18
    </div>
  </div>
  <a href="#123797" class="name">
  <strong class="user"><em>fr at freedom2ct dot com</em></strong></a><a class="genanchor" href="#123797"> &para;</a><div class="date" title="2019-04-24 01:14"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123797">
<div class="phpcode"><code><span class="html">Under Windows odbc_connect (and PDO ODBC) apparently uses the Windows locale to handle input and output from e.g. MS access and MS SQL Server databases.<br /><br />This causes lots of headaches if one is using other than ASCII characters.<br /><br />Work-round solutions like utf8_encode and mb_convert both fails.<br /><br />The solution I fund working is to perform the following changes to Windows<br /><br />Control Panel &gt; Region &gt; Administrative &gt; Change system locale<br />&gt;Check '&lt;i&gt;Use Unicode UTF-8 for worldwide language support.&lt;/i&gt;'</span></code></div>
  </div>
 </div>
  <div class="note" id="124662">  <div class="votes">
    <div id="Vu124662">
    <a href="/manual/vote-note.php?id=124662&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124662">
    <a href="/manual/vote-note.php?id=124662&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124662" title="60% like this...">
    5
    </div>
  </div>
  <a href="#124662" class="name">
  <strong class="user"><em>nunya at damn dot biz</em></strong></a><a class="genanchor" href="#124662"> &para;</a><div class="date" title="2020-01-29 07:38"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124662">
<div class="phpcode"><code><span class="html">One additional note regarding odbc_pconnect  and possibly other variations of pconnect:<br /><br />If the connection encounters an error (bad SQL, incorrect request, etc), that error will return with  be present in odbc_errormsg for every subsequent action on that connection, even if subsequent actions don't cause another error.<br /><br />For example:<br /><br />A script connects with odbc_pconnect.<br />The connection is created on it's first use.<br />The script calls a query "Select * FROM Table1".<br />Table1 doesn't exist and odbc_errormsg contains that error.<br /><br />Later(days, perhaps), a different script is called using the same parameters to odbc_pconnect.<br />The connection already exists, so it is reused.<br />The script calls a query "Select * FROM Table0".<br />The query runs fine, but odbc_errormsg still returns the error about Table1 not existing.<br /><br />I'm not seeing a way to clear that error using odbc_ functions, so keep your eyes open for this gotcha or use odbc_connect instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="52556">  <div class="votes">
    <div id="Vu52556">
    <a href="/manual/vote-note.php?id=52556&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52556">
    <a href="/manual/vote-note.php?id=52556&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52556" title="56% like this...">
    3
    </div>
  </div>
  <a href="#52556" class="name">
  <strong class="user"><em>webmaster at dzconnexion dot com</em></strong></a><a class="genanchor" href="#52556"> &para;</a><div class="date" title="2005-05-05 08:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52556">
<div class="phpcode"><code><span class="html">Concerning the note posted by Grisu on the 23-Dec-2003 11:51: Connect to an MS-Access Database on the Network via ODBC,<br /><br />PLEASE dont forget to put double slashes as follows:<br /><br />"\\\\Server\\folder\\database.mdb" <br /><br />when setting up the registry key as indicated...</span></code></div>
  </div>
 </div>
  <div class="note" id="17204">  <div class="votes">
    <div id="Vu17204">
    <a href="/manual/vote-note.php?id=17204&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17204">
    <a href="/manual/vote-note.php?id=17204&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17204" title="57% like this...">
    2
    </div>
  </div>
  <a href="#17204" class="name">
  <strong class="user"><em>Mahmoud at iastate dot edu</em></strong></a><a class="genanchor" href="#17204"> &para;</a><div class="date" title="2001-11-29 12:35"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17204">
<div class="phpcode"><code><span class="html">WINNT 4 Workstation, PHP4
<br />
<br />odbc_connect() kept giving me weird errors when trying to connect to a MSaccess DSN(Microsoft Jet engine couldn't open the database 'Unknow'. Another user is using it exclusively, or you dont have permission to use it).
<br />
<br />After going nuts for a while, I realized that my database name had a space in it (course surveys.mdb), I shortened the name to eliminate the space .. and everything worked fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="35331">  <div class="votes">
    <div id="Vu35331">
    <a href="/manual/vote-note.php?id=35331&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35331">
    <a href="/manual/vote-note.php?id=35331&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35331" title="52% like this...">
    3
    </div>
  </div>
  <a href="#35331" class="name">
  <strong class="user"><em>lffranco at dco.pemex.com</em></strong></a><a class="genanchor" href="#35331"> &para;</a><div class="date" title="2003-08-27 06:08"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35331">
<div class="phpcode"><code><span class="html">As always Microsoft is clueless... I've been trying to connect to an Access database on a W2K on the network (not a local file, but mapped on the V: drive), via ODBC.<br /><br />All I got is this message:<br />Warning: SQL error: [Microsoft][ODBC Microsoft Access Driver] '(unknown)' is not a valid path. Make sure that the path name is spelled correctly and that you are connected to the server on which the file resides., SQL state S1009 in SQLConnect in d:\apache\cm\creaart.php on line 13<br /><br />So... I started looking al around and looks like the ODBC driver has some severe problems:<br /><br />1. It cannot access a Access database via a mapped drive. And this is for ANY application, name it PHP, Coldfusion, whatever<br />2. You cannot make a system DSN with a UNC (\\Server\resource), so you must map the drive<br /><br />Cute isn't it?<br /><br />So... I quit on ODBC and went via ADO, this is the code that works:<br /><br />=== CODE ===<br /><br />$db = '\\\\server\\resource\\db.mdb';<br />$conn = new COM('ADODB.Connection');<br />$conn-&gt;Open("DRIVER={Driver do Microsoft Access (*.mdb)}; DBQ=$db");<br /><br />// Driver do Microsoft Access (*.mdb)<br />// must be the name in your odbc drivers, the one you get<br />// from the Data Sources (ODBC).<br />// In this case, I'm in Mexico but the driver name is in portuguese, thanks Microsoft.<br /><br />$sql = 'SELECT username FROM tblUsuarios';<br />$res = $conn-&gt;Execute($sql);<br />while (!$res-&gt;EOF)<br />{<br />    print $res-&gt;Fields['username']-&gt;Value . "&lt;br&gt;";<br />    $res-&gt;MoveNext();<br />}<br /><br />$res-&gt;Close(); <br />$conn-&gt;Close(); <br />$res = null; <br />$conn = null;<br /><br />=== /CODE ===</span></code></div>
  </div>
 </div>
  <div class="note" id="94257">  <div class="votes">
    <div id="Vu94257">
    <a href="/manual/vote-note.php?id=94257&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94257">
    <a href="/manual/vote-note.php?id=94257&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94257" title="50% like this...">
    0
    </div>
  </div>
  <a href="#94257" class="name">
  <strong class="user"><em>Shyam Hazari</em></strong></a><a class="genanchor" href="#94257"> &para;</a><div class="date" title="2009-10-25 03:43"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94257">
<div class="phpcode"><code><span class="html">Here is my successful odbc_connect with mysql on Ubuntu. It took me a while to figure this out. <br /><br />Installed following packages using apt-get.<br /><br />apache2<br />apache2-mpm-prefork<br />apache2-utils<br />apache2.2-common<br />libapache2-mod-php5<br />libdbd-mysql-perl<br />libmyodbc<br />libmysqlclient15off<br />mysql-client-5.0<br />mysql-common<br />mysql-server-5.0<br />mysql-server-core-5.0<br />odbcinst1debian1<br />php5<br />php5-cli<br />php5-common<br />php5-odbc<br />unixodbc<br /><br />/etc/odbc.ini<br />------------<br />myodbc3      = MySQL ODBC 3.51 Driver<br /><br />[myodbc3]<br />Driver         = /usr/lib/odbc/libmyodbc.so<br />Description  = MySQL ODBC 3.51 Driver<br />Server        = localhost<br />Port           = 3306<br />User           = shyam<br />Password    = mypass<br />Database    = mysql<br />Option        = 3   <br />Socket       = /var/run/mysqld/mysqld.sock<br /><br />/etc/odbcinst.ini<br />----------------<br />[MySQL ODBC 3.51 Driver]<br />Description    = MySQL driver<br />Driver        = /usr/lib/odbc/libmyodbc.so<br />Setup        = /usr/lib/odbc/libodbcmyS.so<br />CPTimeout    = <br />CPReuse    = <br />UsageCount    = 1<br /><br />my php script<br />------------<br /><br />&lt;html&gt;<br />&lt;body&gt;<br />&lt;?<br />$conn = odbc_connect("DRIVER={MySQL ODBC 3.51 Driver};Server=localhost;Database=mysql", "shyam", "mypass");<br /><br />$sql = "SELECT user from user";<br />$rs = odbc_exec($conn,$sql);<br />echo "&lt;table&gt;&lt;tr&gt;";<br />echo "&lt;th&gt;User Name&lt;/th&gt;&lt;/tr&gt;";<br />while (odbc_fetch_row($rs))<br /> {<br /> $user = odbc_result($rs,"user");<br /> echo "&lt;tr&gt;&lt;td&gt;$user&lt;/td&gt;&lt;/tr&gt;";<br />}<br />odbc_close($conn);<br />echo "&lt;/table&gt;";<br />?&gt;<br /><br />&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="42854">  <div class="votes">
    <div id="Vu42854">
    <a href="/manual/vote-note.php?id=42854&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42854">
    <a href="/manual/vote-note.php?id=42854&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42854" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#42854" class="name">
  <strong class="user"><em>simonr at no2sp at m dot cogapp dot com</em></strong></a><a class="genanchor" href="#42854"> &para;</a><div class="date" title="2004-06-01 05:26"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42854">
<div class="phpcode"><code><span class="html">To make a DSN-less connection using ODBC to MS-SQL:
<br />
<br /><span class="default">&lt;?php
<br />
<br />$connection_string </span><span class="keyword">= </span><span class="string">'DRIVER={SQL Server};SERVER=&lt;servername&gt;;DATABASE=&lt;databasename&gt;'</span><span class="keyword">;
<br />
<br /></span><span class="default">$user </span><span class="keyword">= </span><span class="string">'username'</span><span class="keyword">;
<br /></span><span class="default">$pass </span><span class="keyword">= </span><span class="string">'password'</span><span class="keyword">;
<br />
<br /></span><span class="default">$connection </span><span class="keyword">= </span><span class="default">odbc_connect</span><span class="keyword">( </span><span class="default">$connection_string</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">, </span><span class="default">$pass </span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />servername is the name of the database server
<br />
<br />databasename is the name of the database
<br />
<br />Note, I've only tried this from a windows box using the Microsoft ODBC drivers.</span></code></div>
  </div>
 </div>
  <div class="note" id="91967">  <div class="votes">
    <div id="Vu91967">
    <a href="/manual/vote-note.php?id=91967&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91967">
    <a href="/manual/vote-note.php?id=91967&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91967" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#91967" class="name">
  <strong class="user"><em>drew at pixelburn dot net</em></strong></a><a class="genanchor" href="#91967"> &para;</a><div class="date" title="2009-07-02 05:32"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91967">
<div class="phpcode"><code><span class="html">[Microsoft][ODBC Driver Manager] Data source name not found and no default driver specified<br /><br />If you keep running  into this on the 64 bit versions of windows, ie server 2008,  and none of the other solutions helped.<br /><br />In a 64 bit windows server operating system, there are TWO odbc managers. When you pull up the usual menu for the odbc / dsn system, it is for the 64 bit odbc manager, and 32 bit applications (vb 6.0, PHP 5) will not work using these dsn's. <br /><br />This is where the 32 bit odbc manager is:<br /><br />C:\Windows\SysWOW64\odbcad32.exe</span></code></div>
  </div>
 </div>
  <div class="note" id="13928">  <div class="votes">
    <div id="Vu13928">
    <a href="/manual/vote-note.php?id=13928&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13928">
    <a href="/manual/vote-note.php?id=13928&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13928" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#13928" class="name">
  <strong class="user"><em>cs at coolspot dot de</em></strong></a><a class="genanchor" href="#13928"> &para;</a><div class="date" title="2001-07-10 01:01"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13928">
<div class="phpcode"><code><span class="html">We've tried hard to connect from php to our IBM DB2 RS/6000 Server. It worked after we compiled with --ibm-db2= option, but it was unbelievable
<br />slow.
<br />
<br />No, just testing some options, we found out that it went from very slow (getting 100 records lasts 1 till 10 seconds) to fast access (almost same speed as with using JDBC from Servlets) to 0.2 till 0.3 seconds.
<br />
<br />We simply added the optional parameter Cursortype to odbc_connect, and with the cursortype SQL_CUR_USE_ODBC it changed in that way!
<br />
<br />Hope this helps anybody who must connect to db2 ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="17056">  <div class="votes">
    <div id="Vu17056">
    <a href="/manual/vote-note.php?id=17056&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17056">
    <a href="/manual/vote-note.php?id=17056&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17056" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#17056" class="name">
  <strong class="user"><em>lomaky at yahoo dot com</em></strong></a><a class="genanchor" href="#17056"> &para;</a><div class="date" title="2001-11-23 02:30"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17056">
<div class="phpcode"><code><span class="html">// simple conection
<br />
<br />
<br />$cnx = odbc_connect('cliente','Administrador','');  
<br />//query
<br />$SQL_Exec_String =  "select * from Clientes";    
<br />//ejecucion query
<br />$cur= odbc_exec( $cnx, $SQL_Exec_String );  
<br />echo  "&lt;table border=1&gt;&lt;tr&gt;&lt;th&gt;Dni&lt;/th&gt;&lt;th&gt;Nombre&lt;/th&gt;".  
<br />         "&lt;th&gt;codigo&lt;/th&gt;&lt;th&gt;ciudad&lt;/th&gt;&lt;/tr&gt;\n";  
<br />    while( odbc_fetch_row( $cur ) ) {  
<br />       $Dni= odbc_result( $cur, 1 );  
<br />       $Nombre= odbc_result( $cur, 2 );  
<br />       $codigo= odbc_result( $cur, 3 ); 
<br />       $ciudad= odbc_result( $cur, 4 ); 
<br />        echo  "&lt;tr&gt;&lt;td&gt;$Dni&lt;/td&gt;&lt;td&gt;$Nombre&lt;/td&gt;".  
<br />             "&lt;td&gt;$codigo&lt;/td&gt;&lt;td&gt;$ciudad&lt;/td&gt;&lt;/tr&gt;\n";  
<br />    }  
<br />    echo  "&lt;/table&gt;";</span></code></div>
  </div>
 </div>
  <div class="note" id="85675">  <div class="votes">
    <div id="Vu85675">
    <a href="/manual/vote-note.php?id=85675&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85675">
    <a href="/manual/vote-note.php?id=85675&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85675" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#85675" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#85675"> &para;</a><div class="date" title="2008-09-11 01:16"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85675">
<div class="phpcode"><code><span class="html">This might be obvious to some, but here is a quick tidbit that might save you some time if you're using FreeTDS in Linux:<br /><br />Be sure that you have these two lines in freetds.conf:<br />dump file = /tmp/freetds.log<br />dump file append = yes<br /><br />so you can tail -f it in the background of debugging the problem.  This helped me find my issue on on CentOS Linux:  <br /> <br />1) tsql test works<br />2) isql test works<br />3) odbc connection in php also works WHEN RUN FROM THE SHELL<br />4) running PHP through apache does NOT work.<br /><br />my /tmp/freetds.log file told me: <br />net.c:168:Connecting to MYDBSERVER port MYDBPORT<br />net.c:237:tds_open_socket: MYDBSERVER:MYDBPORT: Permission denied<br /><br />and the answer was my firewall/SELinux was denying the Apache processes access to connect to the remote MSSQL DB port, but my shell accounts were fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="50571">  <div class="votes">
    <div id="Vu50571">
    <a href="/manual/vote-note.php?id=50571&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50571">
    <a href="/manual/vote-note.php?id=50571&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50571" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#50571" class="name">
  <strong class="user"><em>aamaral at 0kbps dot net</em></strong></a><a class="genanchor" href="#50571"> &para;</a><div class="date" title="2005-03-03 10:16"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50571">
<div class="phpcode"><code><span class="html">Two additional notes regarding ODBC connections to a Network Sybase SQL Anywhere 8 Server..<br /><br />I wrote a script using the PHP5 CLI binary that monitors a directory for changes, then updates a Network Server SQL Anywhere 8 database when a change was detected. Idealy, my program would run indefinately, and issue odbc_connect()/odbc_close() when appropriate. However, it seems that once connected, your odbc session is limited to 30 seconds of active time, after which, the connection becomes stale, and no further queries can be executed.  Instead, it returns a generic "Authentication violation"  error from the odbc driver.<br /><br />Here's an example:<br /><br /><span class="default">&lt;?php<br />  $conn</span><span class="keyword">=</span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="default">$connect_string</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">);<br />  </span><span class="default">$result</span><span class="keyword">=</span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$qry</span><span class="keyword">,</span><span class="default">$conn</span><span class="keyword">);  </span><span class="comment">//returns data<br />  </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">31</span><span class="keyword">);<br />  </span><span class="default">$result</span><span class="keyword">=</span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$qry</span><span class="keyword">,</span><span class="default">$conn</span><span class="keyword">);  </span><span class="comment">//"Authentication Violation"<br /></span><span class="default">?&gt;<br /></span><br />Additionally, it seems that odbc_close() doesn't truely close the connection (at least not using Network SQL Anywhere 8). The resource is no longer usable after the odbc_close() is issued, but as far as the server is concerned, there is still a connection present. The connection doesn't truely close until after the php script has ended, which is unfortunate, because a subsequent odbc_connect() commands appear to reuse the existing stale connection, which was supposedly closed.<br /><br />My workaround was to design my script exit entirely after a the database update had completed.  I then called my script whithin a batch file and put it inside an endless loop.<br /><br />I'm not sure if this is a bug with PHP or what, but I thought I'd share in case someone else is pulling their hair out trying to figure this one out...</span></code></div>
  </div>
 </div>
  <div class="note" id="80873">  <div class="votes">
    <div id="Vu80873">
    <a href="/manual/vote-note.php?id=80873&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80873">
    <a href="/manual/vote-note.php?id=80873&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80873" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#80873" class="name">
  <strong class="user"><em>Ceeclipse</em></strong></a><a class="genanchor" href="#80873"> &para;</a><div class="date" title="2008-02-05 01:36"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80873">
<div class="phpcode"><code><span class="html">"Returns an ODBC connection id or 0 (FALSE) on error."<br /><br />Keep in mind that the following code in PHP5 will not work properly:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if( </span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="string">"test"</span><span class="keyword">, </span><span class="string">"test"</span><span class="keyword">, </span><span class="string">"test"</span><span class="keyword">) === </span><span class="default">false </span><span class="keyword">) {<br />    </span><span class="comment">// Your error reporting/handling here..<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;<br /></span><br />odbc_connect() returns an integer, and not a PHP5 boolean!</span></code></div>
  </div>
 </div>
  <div class="note" id="107783">  <div class="votes">
    <div id="Vu107783">
    <a href="/manual/vote-note.php?id=107783&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107783">
    <a href="/manual/vote-note.php?id=107783&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107783" title="36% like this...">
    -5
    </div>
  </div>
  <a href="#107783" class="name">
  <strong class="user"><em>Abhinav</em></strong></a><a class="genanchor" href="#107783"> &para;</a><div class="date" title="2012-03-04 02:13"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107783">
<div class="phpcode"><code><span class="html">Pls ensure that the MSAccess database format is ".mdb".<br />If it is ".accdb" it will not work!</span></code></div>
  </div>
 </div>
  <div class="note" id="38471">  <div class="votes">
    <div id="Vu38471">
    <a href="/manual/vote-note.php?id=38471&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38471">
    <a href="/manual/vote-note.php?id=38471&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38471" title="35% like this...">
    -5
    </div>
  </div>
  <a href="#38471" class="name">
  <strong class="user"><em>Grisu</em></strong></a><a class="genanchor" href="#38471"> &para;</a><div class="date" title="2003-12-23 03:51"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38471">
<div class="phpcode"><code><span class="html">Connect to an MS-Access Database on the Network via ODBC<br /><br />Apache 2.0.47 with PHP 4.3.4 running on Windows XP Pro<br /><br />If you encounter the error<br />"[Microsoft][ODBC Driver Manager] Data source name not found and no default driver specified, SQL state IM002 in SQLConnect"<br /><br />you should make sure to have the following done:<br /><br />The ODBC-link must be a System-DNS and not a User-DNS. Configure your ODBC-link and then modify your configuration with regedt32. Go to HKEY_LOCAL_MACHINE\SOFTWARE\ODBC\ODBC_INI and open your ODBC-link. The field DBQ contains the path to your database. This path must be without Drive-names (e. g. "M:") so change it to "\\Server\folder\database.mdb". This setting is changed each time you modify your ODBC-configuration using the Windows-tool, so make sure you do this afterwards.<br /><br />Then you go to the Services-Section in your Systemmanagement. Select the properties of your Apache module. In the login-section you have to make sure you login with a valid User-Account for your Network-Server.<br /><br />Please note that this way you still have no permission to access linked tables within the linked database<br /><br />Funny enough all this is not necessary on Win98.</span></code></div>
  </div>
 </div>
  <div class="note" id="50063">  <div class="votes">
    <div id="Vu50063">
    <a href="/manual/vote-note.php?id=50063&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50063">
    <a href="/manual/vote-note.php?id=50063&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50063" title="33% like this...">
    -5
    </div>
  </div>
  <a href="#50063" class="name">
  <strong class="user"><em>aamaral at 0kbps dot net</em></strong></a><a class="genanchor" href="#50063"> &para;</a><div class="date" title="2005-02-16 12:29"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50063">
<div class="phpcode"><code><span class="html">To connect to Sybase SQL Server Anywhere 8.0 on Windows use the following:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//================================================================<br /><br />  // Configure connection parameters<br />  </span><span class="default">$db_host        </span><span class="keyword">= </span><span class="string">"server.mynetwork"</span><span class="keyword">;<br />  </span><span class="default">$db_server_name </span><span class="keyword">= </span><span class="string">"Dev_Server"</span><span class="keyword">;<br />  </span><span class="default">$db_name        </span><span class="keyword">= </span><span class="string">"Dev_Data"</span><span class="keyword">;<br />  </span><span class="default">$db_file        </span><span class="keyword">= </span><span class="string">'c:\dbstorage\dev.db'</span><span class="keyword">;<br />  </span><span class="default">$db_conn_name   </span><span class="keyword">= </span><span class="string">"php_script"</span><span class="keyword">;<br />  </span><span class="default">$db_user        </span><span class="keyword">= </span><span class="string">"dbuser"</span><span class="keyword">;<br />  </span><span class="default">$db_pass        </span><span class="keyword">= </span><span class="string">"dbpass"</span><span class="keyword">;<br /><br /></span><span class="comment">//================================================================<br />  </span><span class="default">$connect_string </span><span class="keyword">= </span><span class="string">"Driver={Adaptive Server Anywhere 8.0};"</span><span class="keyword">.<br />                    </span><span class="string">"CommLinks=tcpip(Host=</span><span class="default">$db_host</span><span class="string">);"</span><span class="keyword">.<br />                    </span><span class="string">"ServerName=</span><span class="default">$db_server_name</span><span class="string">;"</span><span class="keyword">.<br />                    </span><span class="string">"DatabaseName=</span><span class="default">$db_name</span><span class="string">;"</span><span class="keyword">.<br />                    </span><span class="string">"DatabaseFile=</span><span class="default">$db_file</span><span class="string">;"</span><span class="keyword">.<br />                    </span><span class="string">"ConnectionName=</span><span class="default">$db_conn_name</span><span class="string">;"</span><span class="keyword">.<br />                    </span><span class="string">"uid=</span><span class="default">$db_user</span><span class="string">;pwd=</span><span class="default">$db_pass</span><span class="string">"</span><span class="keyword">;<br /><br />  </span><span class="comment">// Connect to DB<br />  </span><span class="default">$conn </span><span class="keyword">= </span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="default">$connect_string</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">);<br /><br />  </span><span class="comment">// Query<br />  </span><span class="default">$qry </span><span class="keyword">= </span><span class="string">"SELECT * FROM my_table"</span><span class="keyword">;<br /><br />  </span><span class="comment">// Get Result<br />  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">,</span><span class="default">$qry</span><span class="keyword">);<br /><br />  </span><span class="comment">// Get Data From Result<br />  </span><span class="keyword">while (</span><span class="default">$data</span><span class="keyword">[] = </span><span class="default">odbc_fetch_array</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">));<br /><br />  </span><span class="comment">// Free Result<br />  </span><span class="default">odbc_free_result</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /><br />  </span><span class="comment">// Close Connection<br />  </span><span class="default">odbc_close</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br /><br />  </span><span class="comment">// Show data<br />  </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br /></span><span class="comment">//================================================================<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="9415">  <div class="votes">
    <div id="Vu9415">
    <a href="/manual/vote-note.php?id=9415&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd9415">
    <a href="/manual/vote-note.php?id=9415&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V9415" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#9415" class="name">
  <strong class="user"><em>phobo_AT_paradise.net.nz</em></strong></a><a class="genanchor" href="#9415"> &para;</a><div class="date" title="2000-11-02 06:01"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom9415">
<div class="phpcode"><code><span class="html">If using Openlink to connect to a Microsoft Access database, you will most likely fine tha odbd_connect() works fine, but discover that ANY query will produce odd results; with SELECT queries failing with "[OpenLink][ODBC][Driver]Driver not capable, SQL state
<br />S1C00 in SQLExecDirect in xxxx.php on line xx" and INSERT / DELETE queries warning "No tuples available at this result index".
<br />
<br />In this case, use the SQL_CUR_USE_ODBC cursor!
<br />
<br />This had me stumped for quite some time; because it was the odbc_exec() which was seemingly at fault... :)
<br />
<br />Siggy</span></code></div>
  </div>
 </div>
  <div class="note" id="96265">  <div class="votes">
    <div id="Vu96265">
    <a href="/manual/vote-note.php?id=96265&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96265">
    <a href="/manual/vote-note.php?id=96265&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96265" title="30% like this...">
    -5
    </div>
  </div>
  <a href="#96265" class="name">
  <strong class="user"><em>ewilde aht bsmdevelopment dawt com</em></strong></a><a class="genanchor" href="#96265"> &para;</a><div class="date" title="2010-02-17 01:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96265">
<div class="phpcode"><code><span class="html">Once you've set up a UnixODBC connection to Informix (as described elsewhere, for example in <a href="http://www.unixodbc.org/" rel="nofollow" target="_blank">http://www.unixodbc.org/</a>), the following PHP code will access a database via its DSN:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// We must set these environment variables for Informix to work.  Either<br />// do it here or in php.ini.<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"INFORMIXDIR=/usr/share/informix"</span><span class="keyword">);<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"ODBCINI=/usr/local/unixODBC/etc/odbc.ini"</span><span class="keyword">);<br /><br /></span><span class="comment">// Open up a connection to the database.<br /></span><span class="keyword">if (!(</span><span class="default">$con </span><span class="keyword">= </span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="string">"CollectOh"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">)))<br />  echo </span><span class="string">"&lt;p&gt;Connection to CollectOh failed.&lt;/p&gt;\n"</span><span class="keyword">;<br />else<br />  {<br />  </span><span class="comment">// Let's try enumerating all of the tables in the database (there ain't<br />  // no "show tables" here).<br />  </span><span class="keyword">if ((</span><span class="default">$res </span><span class="keyword">= </span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$con</span><span class="keyword">, </span><span class="string">"select * from SYSTABLES"</span><span class="keyword">)))<br />    {<br />    echo </span><span class="string">"&lt;p&gt;\n"</span><span class="keyword">;<br />    </span><span class="default">odbc_result_all</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);<br />    echo </span><span class="string">"&lt;/p&gt;\n"</span><span class="keyword">;<br />    }<br /><br />  </span><span class="comment">// Close up shop, like good dobies.<br />  </span><span class="default">odbc_close</span><span class="keyword">(</span><span class="default">$con</span><span class="keyword">);<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="51420">  <div class="votes">
    <div id="Vu51420">
    <a href="/manual/vote-note.php?id=51420&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51420">
    <a href="/manual/vote-note.php?id=51420&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51420" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#51420" class="name">
  <strong class="user"><em>aurelien marchand</em></strong></a><a class="genanchor" href="#51420"> &para;</a><div class="date" title="2005-03-30 07:54"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51420">
<div class="phpcode"><code><span class="html">For three days I fought to be able to connect our Linux intranet server to our AS400 database through ODBC and PHP on Mandrake. I installed everything I thought would work but I still got a: odbc_connect(): SQL error: Missing server name, port, or database name in call to CC_connect., SQL state IM002 in SQLConnect<br /><br />Note that isql was working great but php was failing to connect.<br /><br />The solution:<br />I located and found a PHP module called php-unixODBC (to oppose with php-odbc). Once installed (even though it wasn't for the right version of PHP), I realised it didn't place the file properly. The ini file was in /etc/php/ instead of /etc/php.d/, so I moved it there and renamed the old /etc/php.d/36_odbc.ini to /etc/php.d/36_odbc.ini.sav, so that I now had /etc/php.d/36_unixodbc.ini. I restarted the httpd server and now I was able to access the as400.<br /><br />If you have questions, email _artaxerxes2_at_iname_dot_com (sans the underscore).</span></code></div>
  </div>
 </div>
  <div class="note" id="10930">  <div class="votes">
    <div id="Vu10930">
    <a href="/manual/vote-note.php?id=10930&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10930">
    <a href="/manual/vote-note.php?id=10930&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10930" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#10930" class="name">
  <strong class="user"><em>SilencerX at optidynamic dot com</em></strong></a><a class="genanchor" href="#10930"> &para;</a><div class="date" title="2001-01-26 03:31"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10930">
<div class="phpcode"><code><span class="html">If like me you are using openlink from unix to access an MS Access database on an NT/Win2k machine and find out that your INSERT queries don't do anything and don't report any errors, use odbc_pconnect().
<br />
<br />I couldn't understand what was going on and after a bit of research I found out that with MySQL they recommended using mysql_pconnect() for INSERT queries. I tried the same thing with odbc and it worked.</span></code></div>
  </div>
 </div>
  <div class="note" id="23666">  <div class="votes">
    <div id="Vu23666">
    <a href="/manual/vote-note.php?id=23666&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23666">
    <a href="/manual/vote-note.php?id=23666&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23666" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#23666" class="name">
  <strong class="user"><em>osiris at rich-howard dot co dot uk</em></strong></a><a class="genanchor" href="#23666"> &para;</a><div class="date" title="2002-07-24 10:34"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23666">
<div class="phpcode"><code><span class="html">Thought I'd add a note here on this. I'm using Apache 2.0.39 on Windows XP and PHP 4.2.2.<br /><br />It helps a lot if you don't use capital letters in your dsn string.<br /><br />Thought I also comment on the posts about using system dsns over file dsns. There are lots of posts saying use systems not files, but none (that I have seen) which explain why.<br /><br />Essentially: File DSNs are specific to the current user, therefore the Internet Guest User Account doesn't have rights to them. Systems are available to everyone.<br /><br />Regards<br /><br />Osiris :)</span></code></div>
  </div>
 </div>
  <div class="note" id="83792">  <div class="votes">
    <div id="Vu83792">
    <a href="/manual/vote-note.php?id=83792&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83792">
    <a href="/manual/vote-note.php?id=83792&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83792" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#83792" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#83792"> &para;</a><div class="date" title="2008-06-11 08:08"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83792">
<div class="phpcode"><code><span class="html">I have used mdbtools to access .mdb file on my ubuntu box, as ODBC driver (and PHP)<br />It has very few features, and practically unusable.</span></code></div>
  </div>
 </div>
  <div class="note" id="52401">  <div class="votes">
    <div id="Vu52401">
    <a href="/manual/vote-note.php?id=52401&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52401">
    <a href="/manual/vote-note.php?id=52401&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52401" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#52401" class="name">
  <strong class="user"><em>rotwhiler at hotmail dot com</em></strong></a><a class="genanchor" href="#52401"> &para;</a><div class="date" title="2005-04-29 08:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52401">
<div class="phpcode"><code><span class="html">For anyone having problems with WHERE clauses in their MS Access ODBC requests here?s what I found: SQL requests sent to Access must include quotes around the criteria.<br /><br />$sel = "SELECT * FROM table1 WHERE cust_id = 'cust1'";<br />outputs:<br />SELECT * FROM table1 WHERE cust_id = 'cust1'<br />And works.<br /><br />$sel = ?SELECT * FROM table1 WHERE cust_id = cust1?;<br />outputs:<br />SELECT * FROM table1 WHERE cust_id = cust1<br />And doesn?t work.<br /><br />Here?s the whole block of code:<br />$conn = odbc_connect("database1","","");<br />$sel = "SELECT * FROM table1 WHERE cust_id = 'cust1'";<br />$exec = odbc_exec($conn,$sel);<br />while($row = (odbc_fetch_array($exec)))<br /> $serv[odbc_result($exec,'label')] = $row;<br />print_r($serv);</span></code></div>
  </div>
 </div>
  <div class="note" id="39618">  <div class="votes">
    <div id="Vu39618">
    <a href="/manual/vote-note.php?id=39618&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39618">
    <a href="/manual/vote-note.php?id=39618&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39618" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#39618" class="name">
  <strong class="user"><em>atze at o2o dot com dot au</em></strong></a><a class="genanchor" href="#39618"> &para;</a><div class="date" title="2004-02-04 03:41"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39618">
<div class="phpcode"><code><span class="html">To connect to a SQL DB on a unix srv via odbc one can use one of the following solutions.<br /><br />1. having an odbc.ini (~/.odbc.ini)<br /><br />[PostgreSQL]<br />Description         = PostgreSQL template1<br />Driver              = PostgreSQL<br />Trace               = Yes<br />TraceFile           = /tmp/odbc.log<br />Database            = PerfTest<br />Servername          = localhost<br />UserName            = boss<br />Password            = BigBoss<br />Port                = 5432<br />Protocol            = 6.4<br />ReadOnly            = Yes<br />ConnSettings        =<br /><br />[Default]<br />Driver = /local/lib/libodbc.so<br /><br />2. specifying a DSN <br /><br />function DBCALL($SQL)<br />{        <br />$U = "boss";<br />$DB = "PerfTest";<br />$P = "BigBoss";<br />$Srv = "llocalhost";<br />$DSN = "Driver=PostgreSQL;Server=$Srv;Database=$DB";<br />        <br />echo "Trying to connect to $DSN\n";    <br />if ($CID = odbc_connect ("$DSN","$U","$P",SQL_CUR_USE_ODBC))<br />{<br />    echo "still trying CID = $CID\n";<br />    if ($RES = odbc_exec($CID, $SQL))<br />    {<br />        echo "RES = $RES\n";<br />        print_r($RES);<br />        echo "\n";<br />            <br />        $NR = odbc_num_rows($RES);<br /><br />&lt;snip&gt;<br /><br />Hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="5900">  <div class="votes">
    <div id="Vu5900">
    <a href="/manual/vote-note.php?id=5900&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd5900">
    <a href="/manual/vote-note.php?id=5900&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V5900" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#5900" class="name">
  <strong class="user"><em>cnewbill at onewest dot net</em></strong></a><a class="genanchor" href="#5900"> &para;</a><div class="date" title="2000-05-18 05:55"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom5900">
<div class="phpcode"><code><span class="html">Alot of people share the same kind of problems getting this setup on linux.  I was assigned this problem 2 days ago and I was successful.  My combination was PHP4 RC2, Easysoft OOB, and unixODBC.  These three products work very well together and are real easy to install.  More info <a href="http://www.easysoft.com/products/oob/main.phtml." rel="nofollow" target="_blank">http://www.easysoft.com/products/oob/main.phtml.</a> ps also works good with Perl's DBI.</span></code></div>
  </div>
 </div>
  <div class="note" id="29924">  <div class="votes">
    <div id="Vu29924">
    <a href="/manual/vote-note.php?id=29924&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29924">
    <a href="/manual/vote-note.php?id=29924&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29924" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#29924" class="name">
  <strong class="user"><em>jeremy at austin.ibm.com</em></strong></a><a class="genanchor" href="#29924"> &para;</a><div class="date" title="2003-02-28 02:20"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29924">
<div class="phpcode"><code><span class="html">here's a quick note about using php and db2 that cost me a couple of hours and several recompiles trying to figure out why it didn't work.<br /><br />put the below line in any script<br /><br />     putenv("DB2INSTANCE=db2inst1");<br /><br />Or, set that in your webserver environment somehow.</span></code></div>
  </div>
 </div>
  <div class="note" id="117326">  <div class="votes">
    <div id="Vu117326">
    <a href="/manual/vote-note.php?id=117326&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117326">
    <a href="/manual/vote-note.php?id=117326&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117326" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#117326" class="name">
  <strong class="user"><em>cjbauer2 at hotmail dot com</em></strong></a><a class="genanchor" href="#117326"> &para;</a><div class="date" title="2015-05-21 08:52"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117326">
<div class="phpcode"><code><span class="html">/* Connecting to Microsoft Access with PHP<br />   $conn = odbc_connect("Driver={Microsoft Access Driver (*.mdb)};<br />   Dbq=$mdb_Filename", $user, $password);<br />   <br />This does NOT work on Windows servers.<br />Instead, it needs<br />   $conn-&gt;Open("Provider=Microsoft,.Jet.OLEDB.4.0; Data Source=......<br /><br />Point the variable $mdb_Filename to...<br />   Data Source=C:\inetpub\wwwroot\php\mdb_Filename<br />   or wherever the virtual directory points.</span></code></div>
  </div>
 </div>
  <div class="note" id="10934">  <div class="votes">
    <div id="Vu10934">
    <a href="/manual/vote-note.php?id=10934&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10934">
    <a href="/manual/vote-note.php?id=10934&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10934" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#10934" class="name">
  <strong class="user"><em>fc99 at smm dot de</em></strong></a><a class="genanchor" href="#10934"> &para;</a><div class="date" title="2001-01-26 06:23"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10934">
<div class="phpcode"><code><span class="html">If you don't want to specify your login credentials on your web server, you can leave the login fields blank to use the integrated windows security like here:
<br />
<br />odbc_connect("DSN=DataSource","",""); 
<br />
<br />Make sure you have switched your system dsn to integrated security, too !
<br />
<br />(works on windows machines only, of course)
<br />
<br />flo.</span></code></div>
  </div>
 </div>
  <div class="note" id="68752">  <div class="votes">
    <div id="Vu68752">
    <a href="/manual/vote-note.php?id=68752&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68752">
    <a href="/manual/vote-note.php?id=68752&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68752" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#68752" class="name">
  <strong class="user"><em>sven dot delmeiren at cac dot be</em></strong></a><a class="genanchor" href="#68752"> &para;</a><div class="date" title="2006-08-09 07:39"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68752">
<div class="phpcode"><code><span class="html">Hi,<br /><br />Instructions on how to connect to a Progress database on Linux using the Merant ODBC driver can be found at <a href="http://www.progteg.com/english/documents.html." rel="nofollow" target="_blank">http://www.progteg.com/english/documents.html.</a> <br /><br />Kind regards,<br /><br />Sven Delmeiren<br />Computers &amp; Communications NV</span></code></div>
  </div>
 </div>
  <div class="note" id="59413">  <div class="votes">
    <div id="Vu59413">
    <a href="/manual/vote-note.php?id=59413&amp;page=function.odbc-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59413">
    <a href="/manual/vote-note.php?id=59413&amp;page=function.odbc-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59413" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#59413" class="name">
  <strong class="user"><em>gekkeprutser at gmail dot com</em></strong></a><a class="genanchor" href="#59413"> &para;</a><div class="date" title="2005-12-06 06:35"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59413">
<div class="phpcode"><code><span class="html">I also had a problem with this message: ([ODBC SQL Server driver]Allocation of a Sybase Open Client Context failed). The message only appeared after the server had run for a few hours, so I expected resource starvation. However it was a settings problem and I thought this might benefit others too.<br /><br />In addition to putting a <span class="default">&lt;?php putenv </span><span class="keyword">(</span><span class="string">"SYBASE=c:\sybase"</span><span class="keyword">); </span><span class="default">?&gt;</span>  as described by oottavi above, I also had so specify a locale by setting <span class="default">&lt;?php putenv </span><span class="keyword">(</span><span class="string">"LC_ALL=default"</span><span class="keyword">); </span><span class="default">?&gt;</span>.<br /><br />Even though my locale was already set to a valid one (en_US) I had to set this environment variable to make it work anyhow.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.odbc-connect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-connect.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.uodbc.php">ODBC Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.odbc-autocommit.php" title="odbc_&#8203;autocommit">odbc_&#8203;autocommit</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-binmode.php" title="odbc_&#8203;binmode">odbc_&#8203;binmode</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-close.php" title="odbc_&#8203;close">odbc_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-close-all.php" title="odbc_&#8203;close_&#8203;all">odbc_&#8203;close_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-columnprivileges.php" title="odbc_&#8203;columnprivileges">odbc_&#8203;columnprivileges</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-columns.php" title="odbc_&#8203;columns">odbc_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-commit.php" title="odbc_&#8203;commit">odbc_&#8203;commit</a>
                        </li>
                                                <li class="current">
                            <a href="function.odbc-connect.php" title="odbc_&#8203;connect">odbc_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-is-quoted.php" title="odbc_&#8203;connection_&#8203;string_&#8203;is_&#8203;quoted">odbc_&#8203;connection_&#8203;string_&#8203;is_&#8203;quoted</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-quote.php" title="odbc_&#8203;connection_&#8203;string_&#8203;quote">odbc_&#8203;connection_&#8203;string_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-should-quote.php" title="odbc_&#8203;connection_&#8203;string_&#8203;should_&#8203;quote">odbc_&#8203;connection_&#8203;string_&#8203;should_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-cursor.php" title="odbc_&#8203;cursor">odbc_&#8203;cursor</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-data-source.php" title="odbc_&#8203;data_&#8203;source">odbc_&#8203;data_&#8203;source</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-do.php" title="odbc_&#8203;do">odbc_&#8203;do</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-error.php" title="odbc_&#8203;error">odbc_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-errormsg.php" title="odbc_&#8203;errormsg">odbc_&#8203;errormsg</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-exec.php" title="odbc_&#8203;exec">odbc_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-execute.php" title="odbc_&#8203;execute">odbc_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-array.php" title="odbc_&#8203;fetch_&#8203;array">odbc_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-into.php" title="odbc_&#8203;fetch_&#8203;into">odbc_&#8203;fetch_&#8203;into</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-object.php" title="odbc_&#8203;fetch_&#8203;object">odbc_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-row.php" title="odbc_&#8203;fetch_&#8203;row">odbc_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-len.php" title="odbc_&#8203;field_&#8203;len">odbc_&#8203;field_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-name.php" title="odbc_&#8203;field_&#8203;name">odbc_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-num.php" title="odbc_&#8203;field_&#8203;num">odbc_&#8203;field_&#8203;num</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-precision.php" title="odbc_&#8203;field_&#8203;precision">odbc_&#8203;field_&#8203;precision</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-scale.php" title="odbc_&#8203;field_&#8203;scale">odbc_&#8203;field_&#8203;scale</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-type.php" title="odbc_&#8203;field_&#8203;type">odbc_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-foreignkeys.php" title="odbc_&#8203;foreignkeys">odbc_&#8203;foreignkeys</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-free-result.php" title="odbc_&#8203;free_&#8203;result">odbc_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-gettypeinfo.php" title="odbc_&#8203;gettypeinfo">odbc_&#8203;gettypeinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-longreadlen.php" title="odbc_&#8203;longreadlen">odbc_&#8203;longreadlen</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-next-result.php" title="odbc_&#8203;next_&#8203;result">odbc_&#8203;next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-num-fields.php" title="odbc_&#8203;num_&#8203;fields">odbc_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-num-rows.php" title="odbc_&#8203;num_&#8203;rows">odbc_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-pconnect.php" title="odbc_&#8203;pconnect">odbc_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-prepare.php" title="odbc_&#8203;prepare">odbc_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-primarykeys.php" title="odbc_&#8203;primarykeys">odbc_&#8203;primarykeys</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-procedurecolumns.php" title="odbc_&#8203;procedurecolumns">odbc_&#8203;procedurecolumns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-procedures.php" title="odbc_&#8203;procedures">odbc_&#8203;procedures</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-result.php" title="odbc_&#8203;result">odbc_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-result-all.php" title="odbc_&#8203;result_&#8203;all">odbc_&#8203;result_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-rollback.php" title="odbc_&#8203;rollback">odbc_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-setoption.php" title="odbc_&#8203;setoption">odbc_&#8203;setoption</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-specialcolumns.php" title="odbc_&#8203;specialcolumns">odbc_&#8203;specialcolumns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-statistics.php" title="odbc_&#8203;statistics">odbc_&#8203;statistics</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-tableprivileges.php" title="odbc_&#8203;tableprivileges">odbc_&#8203;tableprivileges</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-tables.php" title="odbc_&#8203;tables">odbc_&#8203;tables</a>
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
