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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.mysqli.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.persistconns.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.notes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.constants.php" hreflang="zh">

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
        <a href="mysqli.notes.php">
          Notes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.persistconns.php">
          &laquo; The mysqli Extension and Persistent Connections        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      </ul>
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
            <option value='en/mysqli.constants.php' selected="selected">English</option>
            <option value='de/mysqli.constants.php'>German</option>
            <option value='es/mysqli.constants.php'>Spanish</option>
            <option value='fr/mysqli.constants.php'>French</option>
            <option value='it/mysqli.constants.php'>Italian</option>
            <option value='ja/mysqli.constants.php'>Japanese</option>
            <option value='pt_BR/mysqli.constants.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.constants.php'>Russian</option>
            <option value='tr/mysqli.constants.php'>Turkish</option>
            <option value='uk/mysqli.constants.php'>Ukrainian</option>
            <option value='zh/mysqli.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
  <dl>
   
    <dt id="constant.mysqli-read-default-group">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-read-default-group">MYSQLI_READ_DEFAULT_GROUP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Read options from the named group from <var class="filename">my.cnf</var>
      or the file specified with <strong><code><a href="mysqli.constants.php#constant.mysqli-read-default-file">MYSQLI_READ_DEFAULT_FILE</a></code></strong>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-read-default-file">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-read-default-file">MYSQLI_READ_DEFAULT_FILE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Read options from the named option file instead of from <var class="filename">my.cnf</var>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-opt-can-handle-expired-passwords">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-opt-can-handle-expired-passwords">MYSQLI_OPT_CAN_HANDLE_EXPIRED_PASSWORDS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates to the server that the client can handle sandbox mode
      for expired passwords.
      Can be used with <span class="function"><a href="mysqli.options.php" class="function">mysqli_options()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.mysqli-opt-load-data-local-dir">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-opt-load-data-local-dir">MYSQLI_OPT_LOAD_DATA_LOCAL_DIR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      If enabled, this option specifies the directory
      from which client-side <code class="literal">LOCAL</code> data loading is permitted
      in <code class="literal">LOAD DATA LOCAL</code> statements.
     </span>
    </dd>
   
   
    <dt id="constant.mysqli-opt-connect-timeout">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-opt-connect-timeout">MYSQLI_OPT_CONNECT_TIMEOUT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Connect timeout in seconds.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-opt-read-timeout">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-opt-read-timeout">MYSQLI_OPT_READ_TIMEOUT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Command execution result timeout in seconds. Available as of PHP 7.2.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-opt-local-infile">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-opt-local-infile">MYSQLI_OPT_LOCAL_INFILE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Enables command <code class="literal">LOAD LOCAL INFILE</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-opt-int-and-float-native">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-opt-int-and-float-native">MYSQLI_OPT_INT_AND_FLOAT_NATIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Convert integer and float columns back to PHP numbers. Only valid for mysqlnd.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-opt-net-cmd-buffer-size">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-opt-net-cmd-buffer-size">MYSQLI_OPT_NET_CMD_BUFFER_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The size of the internal command/network buffer. Only valid for mysqlnd.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-opt-net-read-buffer-size">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-opt-net-read-buffer-size">MYSQLI_OPT_NET_READ_BUFFER_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Maximum read chunk size in bytes when reading the body of a MySQL command packet.
      Only valid for mysqlnd.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-opt-ssl-verify-server-cert">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-opt-ssl-verify-server-cert">MYSQLI_OPT_SSL_VERIFY_SERVER_CERT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-init-command">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-init-command">MYSQLI_INIT_COMMAND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Command to execute when connecting to MySQL server. Will automatically be re-executed when reconnecting.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-client-can-handle-expired-passwords">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-client-can-handle-expired-passwords">MYSQLI_CLIENT_CAN_HANDLE_EXPIRED_PASSWORDS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates to the server that the client can handle sandbox mode
      for expired passwords.
      Can be used with <span class="function"><a href="mysqli.real-connect.php" class="function">mysqli_real_connect()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.mysqli-client-found-rows">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-client-found-rows">MYSQLI_CLIENT_FOUND_ROWS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Return number of matched rows, not the number of affected rows.
     </span>
    </dd>
   
   
    <dt id="constant.mysqli-client-ssl-verify-server-cert">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-client-ssl-verify-server-cert">MYSQLI_CLIENT_SSL_VERIFY_SERVER_CERT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Verify server certificate.
     </span>
    </dd>
   
   
    <dt id="constant.mysqli-client-ssl">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-client-ssl">MYSQLI_CLIENT_SSL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Use SSL (encrypted protocol). This option should not be set by application programs;
      it is set internally in the MySQL client library.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-client-compress">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-client-compress">MYSQLI_CLIENT_COMPRESS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Use compression protocol.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-client-interactive">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-client-interactive">MYSQLI_CLIENT_INTERACTIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Allow <code class="literal">interactive_timeout</code> seconds
      (instead of <code class="literal">wait_timeout</code> seconds) of inactivity before
      closing the connection.  The client&#039;s session
      <code class="literal">wait_timeout</code> variable will be set to
      the value of the session <code class="literal">interactive_timeout</code> variable.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-client-ignore-space">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-client-ignore-space">MYSQLI_CLIENT_IGNORE_SPACE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Allow spaces after function names. Makes all functions names reserved words.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-client-no-schema">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-client-no-schema">MYSQLI_CLIENT_NO_SCHEMA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Don&#039;t allow the <code class="literal">db_name.tbl_name.col_name</code> syntax.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-client-multi-queries"><strong><code><a href="mysqli.constants.php#constant.mysqli-client-multi-queries">MYSQLI_CLIENT_MULTI_QUERIES</a></code></strong></dt>
    <dd>
     <p class="para">
      Allows multiple semicolon-delimited queries in a single <span class="function"><a href="mysqli.query.php" class="function">mysqli_query()</a></span> call.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-store-result">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-store-result">MYSQLI_STORE_RESULT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      For using buffered result sets. It has a value of <code class="literal">0</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-store-result-copy-data">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-store-result-copy-data">MYSQLI_STORE_RESULT_COPY_DATA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      As of PHP 8.1, this constant no longer has any effect.
      Before PHP 8.1, this constant is used to copy results
      from the internal <code class="literal">mysqlnd</code> buffer
      into the PHP variables fetched.
      By default, <code class="literal">mysqlnd</code> will use a reference logic
      to avoid copying and duplicating results held in memory.
      For certain result sets, for example, result sets with many small rows,
      the copy approach can reduce the overall memory usage
      because PHP variables holding results may be released earlier.
      Available with <code class="literal">mysqlnd</code> only.
      Deprecated as of PHP 8.4.0.
     </span>
    </dd>
   
   
    <dt id="constant.mysqli-use-result">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-use-result">MYSQLI_USE_RESULT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      For using unbuffered result sets. It has a value of <code class="literal">1</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-assoc">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-assoc">MYSQLI_ASSOC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Columns are returned into the array having the fieldname as the array index.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-num">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-num">MYSQLI_NUM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Columns are returned into the array having an enumerated index.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-both">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-both">MYSQLI_BOTH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Columns are returned into the array having both a numerical index and the fieldname as the associative index.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-not-null-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-not-null-flag">MYSQLI_NOT_NULL_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Indicates that a field is defined as <code class="literal">NOT NULL</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-pri-key-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-pri-key-flag">MYSQLI_PRI_KEY_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is part of a primary index.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-unique-key-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-unique-key-flag">MYSQLI_UNIQUE_KEY_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is part of a unique index.
     </p>
    </dd>
   

   
    <dt id="constant.mysqli-multiple-key-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-multiple-key-flag">MYSQLI_MULTIPLE_KEY_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is part of an index.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-blob-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-blob-flag">MYSQLI_BLOB_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">BLOB</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-unsigned-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-unsigned-flag">MYSQLI_UNSIGNED_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">UNSIGNED</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-zerofill-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-zerofill-flag">MYSQLI_ZEROFILL_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">ZEROFILL</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-auto-increment-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-auto-increment-flag">MYSQLI_AUTO_INCREMENT_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">AUTO_INCREMENT</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-timestamp-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-timestamp-flag">MYSQLI_TIMESTAMP_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">TIMESTAMP</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-set-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-set-flag">MYSQLI_SET_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">SET</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-num-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-num-flag">MYSQLI_NUM_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">NUMERIC</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-part-key-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-part-key-flag">MYSQLI_PART_KEY_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is part of an multi-index.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-group-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-group-flag">MYSQLI_GROUP_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is part of <code class="literal">GROUP BY</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-no-default-value-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-no-default-value-flag">MYSQLI_NO_DEFAULT_VALUE_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A column has no <code class="literal">DEFAULT</code> clause in its definition.
      This does not apply to <code class="literal">NULL</code>
      or to <code class="literal">AUTO_INCREMENT</code> columns
      because such columns have a default value of <code class="literal">NULL</code>
      and an implied default value respectively.
     </span>
    </dd>
   
   
    <dt id="constant.mysqli-type-decimal">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-decimal">MYSQLI_TYPE_DECIMAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">DECIMAL</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-newdecimal">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-newdecimal">MYSQLI_TYPE_NEWDECIMAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Precision math <code class="literal">DECIMAL</code> or <code class="literal">NUMERIC</code> field.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-bit">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-bit">MYSQLI_TYPE_BIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">BIT</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-tiny">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-tiny">MYSQLI_TYPE_TINY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">TINYINT</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-short">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-short">MYSQLI_TYPE_SHORT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">SMALLINT</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-long">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-long">MYSQLI_TYPE_LONG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">INT</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-float">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-float">MYSQLI_TYPE_FLOAT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">FLOAT</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-double">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-double">MYSQLI_TYPE_DOUBLE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">DOUBLE</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-null">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-null">MYSQLI_TYPE_NULL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">DEFAULT NULL</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-timestamp">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-timestamp">MYSQLI_TYPE_TIMESTAMP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">TIMESTAMP</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-longlong">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-longlong">MYSQLI_TYPE_LONGLONG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">BIGINT</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-int24">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-int24">MYSQLI_TYPE_INT24</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">MEDIUMINT</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-date">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-date">MYSQLI_TYPE_DATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">DATE</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-time">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-time">MYSQLI_TYPE_TIME</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">TIME</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-datetime">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-datetime">MYSQLI_TYPE_DATETIME</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">DATETIME</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-year">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-year">MYSQLI_TYPE_YEAR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">YEAR</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-newdate">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-newdate">MYSQLI_TYPE_NEWDATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">DATE</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-interval">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-interval">MYSQLI_TYPE_INTERVAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Alias of <strong><code><a href="mysqli.constants.php#constant.mysqli-type-enum">MYSQLI_TYPE_ENUM</a></code></strong>. Removed as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-enum">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-enum">MYSQLI_TYPE_ENUM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">ENUM</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-set">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-set">MYSQLI_TYPE_SET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">SET</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-tiny-blob">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-tiny-blob">MYSQLI_TYPE_TINY_BLOB</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">TINYBLOB</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-medium-blob">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-medium-blob">MYSQLI_TYPE_MEDIUM_BLOB</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">MEDIUMBLOB</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-long-blob">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-long-blob">MYSQLI_TYPE_LONG_BLOB</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">LONGBLOB</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-blob">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-blob">MYSQLI_TYPE_BLOB</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">BLOB</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-var-string">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-var-string">MYSQLI_TYPE_VAR_STRING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">VARCHAR</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-string">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-string">MYSQLI_TYPE_STRING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">CHAR</code> or <code class="literal">BINARY</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-char">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-char">MYSQLI_TYPE_CHAR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">TINYINT</code>.
      For <code class="literal">CHAR</code>, see <code class="literal">MYSQLI_TYPE_STRING</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-geometry">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-geometry">MYSQLI_TYPE_GEOMETRY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">GEOMETRY</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-json">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-json">MYSQLI_TYPE_JSON</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">JSON</code>.
      Only valid for mysqlnd and MySQL 5.7.8 and up.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-type-vector">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-type-vector">MYSQLI_TYPE_VECTOR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">VECTOR</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-need-data"><strong><code><a href="mysqli.constants.php#constant.mysqli-need-data">MYSQLI_NEED_DATA</a></code></strong></dt>
    <dd>
     <p class="para">
      More data available for bind variable.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-enum-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-enum-flag">MYSQLI_ENUM_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
     Field is defined as <code class="literal">ENUM</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-binary-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-binary-flag">MYSQLI_BINARY_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Field is defined as <code class="literal">BINARY</code>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-cursor-type-for-update">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-cursor-type-for-update">MYSQLI_CURSOR_TYPE_FOR_UPDATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Removed as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-cursor-type-no-cursor">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-cursor-type-no-cursor">MYSQLI_CURSOR_TYPE_NO_CURSOR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-cursor-type-read-only">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-cursor-type-read-only">MYSQLI_CURSOR_TYPE_READ_ONLY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-cursor-type-scrollable">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-cursor-type-scrollable">MYSQLI_CURSOR_TYPE_SCROLLABLE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Removed as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-stmt-attr-cursor-type">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-stmt-attr-cursor-type">MYSQLI_STMT_ATTR_CURSOR_TYPE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-stmt-attr-prefetch-rows">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-stmt-attr-prefetch-rows">MYSQLI_STMT_ATTR_PREFETCH_ROWS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Removed as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-stmt-attr-update-max-length">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-stmt-attr-update-max-length">MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-set-charset-name">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-set-charset-name">MYSQLI_SET_CHARSET_NAME</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-report-index">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-report-index">MYSQLI_REPORT_INDEX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Report if no index or bad index was used in a query.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-report-error">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-report-error">MYSQLI_REPORT_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Report errors from mysqli function calls.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-report-strict">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-report-strict">MYSQLI_REPORT_STRICT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Throw a <code class="literal">mysqli_sql_exception</code> for errors instead of warnings.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-report-all">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-report-all">MYSQLI_REPORT_ALL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Set all options on (report all).
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-report-off">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-report-off">MYSQLI_REPORT_OFF</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Turns reporting off.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-debug-trace-enabled">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-debug-trace-enabled">MYSQLI_DEBUG_TRACE_ENABLED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Is set to 1 if <span class="function"><a href="mysqli.debug.php" class="function">mysqli_debug()</a></span> functionality is enabled.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-server-public-key">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-server-public-key">MYSQLI_SERVER_PUBLIC_KEY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-refresh-grant">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-grant">MYSQLI_REFRESH_GRANT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Refreshes the grant tables.
      Deprecated as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-refresh-log">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-log">MYSQLI_REFRESH_LOG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Flushes the logs, like executing the
      <code class="literal">FLUSH LOGS</code> <abbr>SQL</abbr> statement.
      Deprecated as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-refresh-tables">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-tables">MYSQLI_REFRESH_TABLES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Flushes the table cache, like executing the
      <code class="literal">FLUSH TABLES</code> <abbr>SQL</abbr> statement.
      Deprecated as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-refresh-hosts">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-hosts">MYSQLI_REFRESH_HOSTS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Flushes the host cache, like executing the
      <code class="literal">FLUSH HOSTS</code> <abbr>SQL</abbr> statement.
      Deprecated as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-refresh-replica">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-replica">MYSQLI_REFRESH_REPLICA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Alias of <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-slave">MYSQLI_REFRESH_SLAVE</a></code></strong> constant.
      Available as of PHP 8.1.0. Deprecated as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-refresh-status">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-status">MYSQLI_REFRESH_STATUS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Reset the status variables, like executing the
      <code class="literal">FLUSH STATUS</code> <abbr>SQL</abbr> statement.
      Deprecated as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-refresh-threads">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-threads">MYSQLI_REFRESH_THREADS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Flushes the thread cache.
      Deprecated as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-refresh-slave">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-slave">MYSQLI_REFRESH_SLAVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      On a slave replication server: resets the master server information, and
      restarts the slave. Like executing the <code class="literal">RESET SLAVE</code>
      <abbr>SQL</abbr> statement.
      Deprecated as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-refresh-master">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-master">MYSQLI_REFRESH_MASTER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      On a master replication server: removes the binary log files listed in the
      binary log index, and truncates the index file. Like executing the
      <code class="literal">RESET MASTER</code> <abbr>SQL</abbr> statement.
      Deprecated as of PHP 8.4.0.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-refresh-backup-log">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-backup-log">MYSQLI_REFRESH_BACKUP_LOG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Closes and reopens the backup log files.
      Deprecated as of PHP 8.4.0.
     </span>
    </dd>
   
   
    <dt id="constant.mysqli-trans-cor-and-chain">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-trans-cor-and-chain">MYSQLI_TRANS_COR_AND_CHAIN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Appends &quot;AND CHAIN&quot; to <span class="function"><a href="mysqli.commit.php" class="function">mysqli_commit()</a></span> or
      <span class="function"><a href="mysqli.rollback.php" class="function">mysqli_rollback()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-trans-cor-and-no-chain">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-trans-cor-and-no-chain">MYSQLI_TRANS_COR_AND_NO_CHAIN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Appends &quot;AND NO CHAIN&quot; to <span class="function"><a href="mysqli.commit.php" class="function">mysqli_commit()</a></span> or
      <span class="function"><a href="mysqli.rollback.php" class="function">mysqli_rollback()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-trans-cor-release">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-trans-cor-release">MYSQLI_TRANS_COR_RELEASE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Appends &quot;RELEASE&quot; to <span class="function"><a href="mysqli.commit.php" class="function">mysqli_commit()</a></span> or
      <span class="function"><a href="mysqli.rollback.php" class="function">mysqli_rollback()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-trans-cor-no-release">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-trans-cor-no-release">MYSQLI_TRANS_COR_NO_RELEASE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Appends &quot;NO RELEASE&quot; to <span class="function"><a href="mysqli.commit.php" class="function">mysqli_commit()</a></span> or
      <span class="function"><a href="mysqli.rollback.php" class="function">mysqli_rollback()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-trans-start-read-only">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-trans-start-read-only">MYSQLI_TRANS_START_READ_ONLY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Start the transaction as &quot;START TRANSACTION READ ONLY&quot; with
      <span class="function"><a href="mysqli.begin-transaction.php" class="function">mysqli_begin_transaction()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-trans-start-read-write">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-trans-start-read-write">MYSQLI_TRANS_START_READ_WRITE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Start the transaction as &quot;START TRANSACTION READ WRITE&quot; with
      <span class="function"><a href="mysqli.begin-transaction.php" class="function">mysqli_begin_transaction()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-trans-start-with-consistent-snapshot">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-trans-start-with-consistent-snapshot">MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Start the transaction as &quot;START TRANSACTION WITH CONSISTENT SNAPSHOT&quot;.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-client-ssl-dont-verify-server-cert">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-client-ssl-dont-verify-server-cert">MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Requires MySQL 5.6.5 and up.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-is-mariadb">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-is-mariadb">MYSQLI_IS_MARIADB</a></code></strong>
     (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>)
    </dt>
    <dd>
     <p class="para">
      Whether the mysqli extension has been built against a MariaDB client library.
      Available as of PHP 8.1.2.
     </p>
    </dd>
   
   
    <dt id="constant.mysqli-async">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-async">MYSQLI_ASYNC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The query is performed asynchronously and no result set is immediately returned.
      Available with <code class="literal">mysqlnd</code> only.
     </span>
    </dd>
   
   
    <dt id="constant.mysqli-on-update-now-flag">
     <strong><code><a href="mysqli.constants.php#constant.mysqli-on-update-now-flag">MYSQLI_ON_UPDATE_NOW_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      If a field is updated it will get the current time value.
     </span>
    </dd>
   
  </dl>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83081">  <div class="votes">
    <div id="Vu83081">
    <a href="/manual/vote-note.php?id=83081&amp;page=mysqli.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83081">
    <a href="/manual/vote-note.php?id=83081&amp;page=mysqli.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83081" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83081" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#83081"> &para;</a><div class="date" title="2008-05-09 12:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83081">
<div class="phpcode"><code><span class="html">MYSQLI_TYPE_SHORT is used for SMALLINT, not INT</span></code></div>
  </div>
 </div>
  <div class="note" id="111631">  <div class="votes">
    <div id="Vu111631">
    <a href="/manual/vote-note.php?id=111631&amp;page=mysqli.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111631">
    <a href="/manual/vote-note.php?id=111631&amp;page=mysqli.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111631" title="43% like this...">
    -3
    </div>
  </div>
  <a href="#111631" class="name">
  <strong class="user"><em>jeriba4 at googlemail dot com</em></strong></a><a class="genanchor" href="#111631"> &para;</a><div class="date" title="2013-03-10 06:00"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111631">
<div class="phpcode"><code><span class="html">Note that although CHAR is an explicite string type within MySQL,<br />MYSQLI_TYPE_CHAR is interpreted the same way as MYSQLI_TYPE_TINY, which is the TINYINT numeric type within MySQL.<br />As a consequence, you cannot distinguish these two column types by using their respective type index, as both are set to integer one (1).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.mysqli.php">MySQLi</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.mysqli.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.overview.php" title="Overview">Overview</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.php" title="Quick start guide">Quick start guide</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.persistconns.php" title="The mysqli Extension and Persistent Connections">The mysqli Extension and Persistent Connections</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.notes.php" title="Notes">Notes</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.summary.php" title="The MySQLi Extension Function Summary">The MySQLi Extension Function Summary</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli.php" title="mysqli">mysqli</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-stmt.php" title="mysqli_&#8203;stmt">mysqli_&#8203;stmt</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-result.php" title="mysqli_&#8203;result">mysqli_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-driver.php" title="mysqli_&#8203;driver">mysqli_&#8203;driver</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-warning.php" title="mysqli_&#8203;warning">mysqli_&#8203;warning</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-sql-exception.php" title="mysqli_&#8203;sql_&#8203;exception">mysqli_&#8203;sql_&#8203;exception</a>
                        </li>
                                                <li class="">
                            <a href="ref.mysqli.php" title="Aliases and deprecated Mysqli Functions">Aliases and deprecated Mysqli Functions</a>
                        </li>
                                                <li class="">
                            <a href="changelog.mysqli.php" title="Changelog">Changelog</a>
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
