<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: OCI8 and DTrace Dynamic Tracing - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/oci8.dtrace.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/oci8.dtrace.php">
 <link rel="alternate" href="https://www.php.net/manual/en/oci8.dtrace.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.oci8.php">
 <link rel="prev" href="https://www.php.net/manual/en/oci8.taf.php">
 <link rel="next" href="https://www.php.net/manual/en/oci8.datatypes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/oci8.dtrace.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/oci8.dtrace.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/oci8.dtrace.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/oci8.dtrace.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/oci8.dtrace.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/oci8.dtrace.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/oci8.dtrace.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/oci8.dtrace.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/oci8.dtrace.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/oci8.dtrace.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/oci8.dtrace.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="OCI8 and DTrace Dynamic Tracing" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: OCI8 and DTrace Dynamic Tracing - Manual" />
<meta name="twitter:description" content="OCI8 and DTrace Dynamic Tracing" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: OCI8 and DTrace Dynamic Tracing - Manual" />
<meta itemprop="description" content="OCI8 and DTrace Dynamic Tracing" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="OCI8 and DTrace Dynamic Tracing" />

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
        <a href="oci8.datatypes.php">
          Supported Datatypes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="oci8.taf.php">
          &laquo; OCI8 Transparent Application Failover (TAF) Support        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.oci8.php'>OCI8</a></li>      </ul>
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
            <option value='en/oci8.dtrace.php' selected="selected">English</option>
            <option value='de/oci8.dtrace.php'>German</option>
            <option value='es/oci8.dtrace.php'>Spanish</option>
            <option value='fr/oci8.dtrace.php'>French</option>
            <option value='it/oci8.dtrace.php'>Italian</option>
            <option value='ja/oci8.dtrace.php'>Japanese</option>
            <option value='pt_BR/oci8.dtrace.php'>Brazilian Portuguese</option>
            <option value='ru/oci8.dtrace.php'>Russian</option>
            <option value='tr/oci8.dtrace.php'>Turkish</option>
            <option value='uk/oci8.dtrace.php'>Ukrainian</option>
            <option value='zh/oci8.dtrace.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="oci8.dtrace" class="chapter">
 <h1 class="title">OCI8 and DTrace Dynamic Tracing</h1>

 <p class="para">
  OCI8 2.0 introduced static DTrace probes that can be used on
  operating systems that support DTrace.
  See <a href="features.dtrace.php" class="link">DTrace Dynamic Tracing</a>
  for an overview of PHP and DTrace.
 </p>

<div class="section">
 <h2 class="title">Installing OCI8 with DTrace Support</h2>
  <p class="para">
   To enable DTrace support in PHP OCI8, build OCI8 as a shared
   extension after setting <code class="literal">PHP_DTRACE</code>.
  </p>
  <p class="para">
   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
$ export PHP_DTRACE=yes
$ pecl install oci8
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   Edit php.ini,
   set <a href="ini.core.php#ini.extension-dir" class="link">extension_dir</a> to the
   directory with the created <var class="filename">oci8.so</var> and also
   enable the extension by adding:
  </p>
  <p class="para">
   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
extension=oci8.so
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   If you install PHP OCI8 from PECL using <var class="filename">phpize</var> and
   <var class="filename">configure</var> (instead
   of <var class="filename">pecl</var>), you will still need to set
   <code class="literal">PHP_DTRACE=yes</code>. This is because
   the <code class="literal">--enable-dtrace</code> option will be ignored by the
   limited <var class="filename">configure</var> script of a PECL bundle.
  </p>

  <p class="para">
   See <a href="install.pecl.php" class="link">Installation of PECL
   extensions</a> for general PECL installation instructions.
  </p>
 </div>

 <div class="section">
  <h2 class="title">DTrace Static Probes in PHP OCI8</h2>
  <table class="doctable table">
   <caption><strong>The following static probes are available in PHP OCI8</strong></caption>
   
    <thead>
     <tr>
      <th>Probe Name</th>
      <th>Probe Description</th>
      <th>Probe Arguments</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><code class="literal">oci8-connect-entry</code></td>
      <td>Initiated by oci_connect(), oci_pconnect() and oci_new_connect(). Fires before database connection is established.</td>
      <td>char *<var class="varname">username</var>, char *<var class="varname">dbname</var>, char *<var class="varname">charset</var>, long <var class="varname">session_mode</var>, int <var class="varname">persistent</var>, int <var class="varname">exclusive</var></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-connect-return</code></td>
      <td>Fires at the end of connection.</td>
      <td>void *<var class="varname">connection</var></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-check-connection</code></td>
      <td>Fires if an Oracle error might have caused the connection to become invalid.</td>
      <td>void *<var class="varname">connection</var>, char *<var class="varname">client_id</var>, int <var class="varname">is_open</var>, long <var class="varname">errcode</var>, unsigned long <var class="varname">server_status</var></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-sqltext</code></td>
      <td>Fires when oci_parse() is executed.</td>
      <td>void *<var class="varname">connection</var>, char *<var class="varname">client_id</var>, void *<var class="varname">statement</var>, char *<var class="varname">sql</var></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-connection-close</code></td>
      <td>Fires when the connection to the database is completely destroyed.</td>
      <td>void *<var class="varname">connection</var></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-error</code></td>
      <td>Fires if an Oracle error occurs.</td>
      <td>int <var class="varname">status</var>, long <var class="varname">errcode</var></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-execute-mode</code></td>
      <td>Fires at <span class="function"><a href="function.oci-execute.php" class="function">oci_execute()</a></span> to show the execution mode.</td>
      <td>void *<var class="varname">connection</var>, char *<var class="varname">client_id</var>, void *<var class="varname">statement</var>, unsigned int <var class="varname">mode</var></td>
     </tr>

    </tbody>
   
  </table>

  <p class="para">
   These probes are useful for tracing OCI8 scripts.
  </p>

  <p class="para">
   The <var class="varname">connection</var> and <var class="varname">statement</var>
   are the pointers to internal structures used for tracking PHP
   connections and executed statements.
  </p>

  <p class="para">
    The <var class="varname">client_id</var> is the value set
    by <span class="function"><a href="function.oci-set-client-identifier.php" class="function">oci_set_client_identifier()</a></span>.
  </p>

  <p class="para">
  </p>

  <p class="para">
  </p>

  <p class="para">
  </p>


  <p class="para">
   Core PHP also has static probes.
   See <a href="features.dtrace.dtrace.php#features.dtrace.static-probes" class="link">DTrace Static
   Probes in Core PHP</a>.
  </p>

  <table class="doctable table">
   <caption><strong>Internal Debugging DTrace Probes in OCI8</strong></caption>
   
    <thead>
     <tr>
      <th>Probe Name</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><code class="literal">oci8-connect-expiry</code></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-connect-lookup</code></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-connect-p-dtor-close</code></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-connect-p-dtor-release</code></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-connect-type</code></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-sesspool-create</code></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-sesspool-stats</code></td>
     </tr>

     <tr>
      <td><code class="literal">oci8-sesspool-type</code></td>
     </tr>

    </tbody>
   
  </table>

  <p class="para">
   These probes are useful for OCI8 maintainers.  Refer to the OCI8 source code for arguments and to see when the will fire.
  </p>
 </div>

 <div class="section">
  <h2 class="title">Listing DTrace Static Probes in PHP OCI8</h2>
  <p class="para">
   To list available probes, start a PHP process and then run:
   <div class="informalexample">
    <div class="example-contents">
<div class="cdata"><pre>
# dtrace -l
</pre></div>
    </div>

   </div>
  </p>
  
  <p class="para">
   The output will be similar to:
   <div class="informalexample">
    <div class="example-contents">
<div class="cdata"><pre>
   ID   PROVIDER            MODULE                          FUNCTION NAME
   [ . . . ]
   17 phpoci22116           oci8.so   php_oci_dtrace_check_connection oci8-check-connection
   18 phpoci22116           oci8.so                php_oci_do_connect oci8-connect-entry
   19 phpoci22116           oci8.so         php_oci_persistent_helper oci8-connect-expiry
   20 phpoci22116           oci8.so             php_oci_do_connect_ex oci8-connect-lookup
   21 phpoci22116           oci8.so  php_oci_pconnection_list_np_dtor oci8-connect-p-dtor-close
   22 phpoci22116           oci8.so  php_oci_pconnection_list_np_dtor oci8-connect-p-dtor-release
   23 phpoci22116           oci8.so                php_oci_do_connect oci8-connect-return
   24 phpoci22116           oci8.so             php_oci_do_connect_ex oci8-connect-type
   25 phpoci22116           oci8.so          php_oci_connection_close oci8-connection-close
   26 phpoci22116           oci8.so                     php_oci_error oci8-error
   27 phpoci22116           oci8.so         php_oci_statement_execute oci8-execute-mode
   28 phpoci22116           oci8.so              php_oci_create_spool oci8-sesspool-create
   29 phpoci22116           oci8.so            php_oci_create_session oci8-sesspool-stats
   30 phpoci22116           oci8.so            php_oci_create_session oci8-sesspool-type
   31 phpoci22116           oci8.so          php_oci_statement_create oci8-sqltext
</pre></div>
    </div>

   </div>
  </p>

   <p class="para">
    The Provider column values consist of <code class="literal">phpoci</code> and
    the process id of the currently running PHP process.
   </p>

   <p class="para">
    The Function column refers to PHP&#039;s internal C implementation
    function names where each provider is located.
   </p>

   <p class="para">
    If a PHP process is not running, then no PHP probes will be shown.
   </p>
 </div>

 <div class="section">
  <h2 class="title">DTrace with PHP OCI8 Example</h2>
  <p class="para">
   This example shows the basics of the DTrace D scripting language.
   <div class="example" id="example-1940">
    <p><strong>Example #1 <var class="filename">user_oci8_probes.d</var> for tracing all user-level PHP OCI8 Static Probes with DTrace</strong></p>
    <div class="example-contents">
<div class="cdata"><pre>
#!/usr/sbin/dtrace -Zs

#pragma D option quiet

php*:::oci8-connect-entry
{
    printf(&quot;%lld: PHP connect-entry\n&quot;, walltimestamp);
    printf(&quot;  credentials=\&quot;%s@%s\&quot;\n&quot;, arg0 ? copyinstr(arg0) : &quot;&quot;, arg1 ? copyinstr(arg1) : &quot;&quot;);
    printf(&quot;  charset=\&quot;%s\&quot;\n&quot;, arg2 ? copyinstr(arg2) : &quot;&quot;);
    printf(&quot;  session_mode=%ld\n&quot;, (long)arg3);
    printf(&quot;  persistent=%d\n&quot;, (int)arg4);
    printf(&quot;  exclusive=%d\n&quot;, (int)arg5);
}

php*:::oci8-connect-return
{
    printf(&quot;%lld: PHP oci8-connect-return\n&quot;, walltimestamp);
    printf(&quot;  connection=0x%p\n&quot;, (void *)arg0);
}

php*:::oci8-connection-close
{
    printf(&quot;%lld: PHP oci8-connect-close\n&quot;, walltimestamp);
    printf(&quot;  connection=0x%p\n&quot;, (void *)arg0);
}

php*:::oci8-error
{
    printf(&quot;%lld: PHP oci8-error\n&quot;, walltimestamp);
    printf(&quot;  status=%d\n&quot;, (int)arg0);
    printf(&quot;  errcode=%ld\n&quot;, (long)arg1);
}

php*:::oci8-check-connection
{
    printf(&quot;%lld: PHP oci8-check-connection\n&quot;, walltimestamp);
    printf(&quot;  connection=0x%p\n&quot;, (void *)arg0);
    printf(&quot;  client_id=\&quot;%s\&quot;\n&quot;, arg1 ? copyinstr(arg1) : &quot;&quot;);
    printf(&quot;  is_open=%d\n&quot;, arg2);
    printf(&quot;  errcode=%ld\n&quot;, (long)arg3);
    printf(&quot;  server_status=%lu\n&quot;, (unsigned long)arg4);
}

php*:::oci8-sqltext
{
    printf(&quot;%lld: PHP oci8-sqltext\n&quot;, walltimestamp);
    printf(&quot;  connection=0x%p\n&quot;, (void *)arg0);
    printf(&quot;  client_id=\&quot;%s\&quot;\n&quot;, arg1 ? copyinstr(arg1) : &quot;&quot;);
    printf(&quot;  statement=0x%p\n&quot;, (void *)arg2);
    printf(&quot;  sql=\&quot;%s\&quot;\n&quot;, arg3 ? copyinstr(arg3) : &quot;&quot;);
}

php*:::oci8-execute-mode
{
    printf(&quot;%lld: PHP oci8-execute-mode\n&quot;, walltimestamp);
    printf(&quot;  connection=0x%p\n&quot;, (void *)arg0);
    printf(&quot;  client_id=\&quot;%s\&quot;\n&quot;, arg1 ? copyinstr(arg1) : &quot;&quot;);
    printf(&quot;  statement=0x%p\n&quot;, (void *)arg2);
    printf(&quot;  mode=0x%x\n&quot;, arg3);
}
</pre></div>
    </div>

   </div>
  </p>

  <p class="para">
   This script uses the <code class="literal">-Z</code> option to
   <var class="filename">dtrace</var>, allowing it to be run when there is no
   PHP process executing.  If this option were omitted the script
   would immediately terminate when no PHP executable was running
   because it knows none of the probes to be monitored are in
   existence.
  </p>

  <p class="para">
   On multi-CPU machines the probe ordering might not appear to be
   sequential. This depends on which CPU was processing the probes,
   and how threads migrate across CPUs.  Displaying probe time stamps
   helps reduce confusion.
  </p>

  <p class="para">
   The script traces all user-level PHP OCI8 static probe points
   throughout the duration of a running PHP script. Run the D script:
   <div class="informalexample">
    <div class="example-contents">
<div class="cdata"><pre>
# ./user_oci8_probes.d
</pre></div>
    </div>

   </div>
  </p>

  <p class="para">
   Run a PHP script or application.  The monitoring D script will
   output each probe&#039;s arguments as it fires.  For example, a simple
   PHP script that queries a table might produce the following trace
   output:
   <div class="informalexample">
    <div class="example-contents">
<div class="cdata"><pre>
1381794982092854582: PHP connect-entry
  credentials=&quot;hr@localhost/pdborcl&quot;
  charset=&quot;&quot;
  session_mode=0
  persistent=0
  exclusive=0
1381794982183158766: PHP oci8-connect-return
  connection=0x7f4a7907bfb8
1381794982183594576: PHP oci8-sqltext
  connection=0x7f4a7907bfb8
  client_id=&quot;Chris&quot;
  statement=0x7f4a7907c2a0
  sql=&quot;select * from employees&quot;
1381794982183783706: PHP oci8-execute-mode
  connection=0x7f4a7907bfb8
  client_id=&quot;Chris&quot;
  statement=0x7f4a7907c2a0
  mode=0x20
1381794982444344390: PHP oci8-connect-close
  connection=0x7f4a7907bfb8
</pre></div>
    </div>

   </div>
  </p>
  
  <p class="para">
   When monitoring is complete, the D script can be terminated with a
   <kbd class="keycombo"><kbd class="keycap">CTRL</kbd>+<kbd class="keycap">C</kbd></kbd>.
  </p>

 </div>

 <div class="section">
  <h2 class="title">See Also</h2>
  <ul class="simplelist">
   <li><a href="features.dtrace.php" class="link">DTrace Dynamic Tracing</a></li>
  </ul>
 </div>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/oci8/dtrace.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Foci8.dtrace%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=oci8.dtrace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/oci8.dtrace.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.oci8.php">OCI8</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.oci8.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="oci8.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="oci8.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="oci8.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="oci8.connection.php" title="OCI8 Connection Handling and Connection Pooling">OCI8 Connection Handling and Connection Pooling</a>
                        </li>
                                                <li class="">
                            <a href="oci8.fan.php" title="OCI8 Fast Application Notification (FAN) Support">OCI8 Fast Application Notification (FAN) Support</a>
                        </li>
                                                <li class="">
                            <a href="oci8.taf.php" title="OCI8 Transparent Application Failover (TAF) Support">OCI8 Transparent Application Failover (TAF) Support</a>
                        </li>
                                                <li class="current">
                            <a href="oci8.dtrace.php" title="OCI8 and DTrace Dynamic Tracing">OCI8 and DTrace Dynamic Tracing</a>
                        </li>
                                                <li class="">
                            <a href="oci8.datatypes.php" title="Supported Datatypes">Supported Datatypes</a>
                        </li>
                                                <li class="">
                            <a href="ref.oci8.php" title="OCI8 Functions">OCI8 Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.ocicollection.php" title="OCICollection">OCICollection</a>
                        </li>
                                                <li class="">
                            <a href="class.ocilob.php" title="OCILob">OCILob</a>
                        </li>
                                                <li class="">
                            <a href="oldaliases.oci8.php" title="OCI8 Obsolete Aliases and Functions">OCI8 Obsolete Aliases and Functions</a>
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
