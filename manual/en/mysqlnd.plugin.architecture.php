<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MySQL Native Driver Plugin Architecture - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqlnd.plugin.architecture.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqlnd.plugin.architecture.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqlnd.plugin.architecture.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mysqlnd.plugin.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqlnd.plugin.obtaining.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqlnd.plugin.api.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqlnd.plugin.architecture.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqlnd.plugin.architecture.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqlnd.plugin.architecture.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqlnd.plugin.architecture.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqlnd.plugin.architecture.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqlnd.plugin.architecture.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqlnd.plugin.architecture.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqlnd.plugin.architecture.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqlnd.plugin.architecture.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqlnd.plugin.architecture.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqlnd.plugin.architecture.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="MySQL Native Driver Plugin Architecture" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MySQL Native Driver Plugin Architecture - Manual" />
<meta name="twitter:description" content="MySQL Native Driver Plugin Architecture" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MySQL Native Driver Plugin Architecture - Manual" />
<meta itemprop="description" content="MySQL Native Driver Plugin Architecture" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="MySQL Native Driver Plugin Architecture" />

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
        <a href="mysqlnd.plugin.api.php">
          The mysqlnd plugin API &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqlnd.plugin.obtaining.php">
          &laquo; Obtaining the mysqlnd plugin API        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqlnd.php'>Mysqlnd</a></li>      <li><a href='mysqlnd.plugin.php'>MySQL Native Driver Plugin API</a></li>      </ul>
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
            <option value='en/mysqlnd.plugin.architecture.php' selected="selected">English</option>
            <option value='de/mysqlnd.plugin.architecture.php'>German</option>
            <option value='es/mysqlnd.plugin.architecture.php'>Spanish</option>
            <option value='fr/mysqlnd.plugin.architecture.php'>French</option>
            <option value='it/mysqlnd.plugin.architecture.php'>Italian</option>
            <option value='ja/mysqlnd.plugin.architecture.php'>Japanese</option>
            <option value='pt_BR/mysqlnd.plugin.architecture.php'>Brazilian Portuguese</option>
            <option value='ru/mysqlnd.plugin.architecture.php'>Russian</option>
            <option value='tr/mysqlnd.plugin.architecture.php'>Turkish</option>
            <option value='uk/mysqlnd.plugin.architecture.php'>Ukrainian</option>
            <option value='zh/mysqlnd.plugin.architecture.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqlnd.plugin.architecture" class="section">
  <h2 class="title">MySQL Native Driver Plugin Architecture</h2>
  <p class="para">
   This section provides an overview of the <code class="literal">mysqlnd</code>
   plugin architecture.
  </p>
  <p class="para">
   <strong>MySQL Native Driver Overview</strong>
  </p>
  <p class="para">
   Before developing <code class="literal">mysqlnd</code> plugins, it is useful to
   know a little of how <code class="literal">mysqlnd</code> itself is organized.
   <code class="literal">Mysqlnd</code> consists of the following modules:
  </p>
  <table id="mysqlnd.plugin.orgchart" class="doctable table">
   <caption><strong>The mysqlnd organization chart, per module</strong></caption>
   
    <thead>
     <tr>
      <th>Modules Statistics</th>
      <th>mysqlnd_statistics.c</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>Connection</td>
      <td>mysqlnd.c</td>
     </tr>

     <tr>
      <td>Resultset</td>
      <td>mysqlnd_result.c</td>
     </tr>

     <tr>
      <td>Resultset Metadata</td>
      <td>mysqlnd_result_meta.c</td>
     </tr>

     <tr>
      <td>Statement</td>
      <td>mysqlnd_ps.c</td>
     </tr>

     <tr>
      <td>Network</td>
      <td>mysqlnd_net.c</td>
     </tr>

     <tr>
      <td>Wire protocol</td>
      <td>mysqlnd_wireprotocol.c</td>
     </tr>

    </tbody>
   
  </table>

  <p class="para">
   <strong>C Object-Oriented Paradigm</strong>
  </p>
  <p class="para">
   At the code level, <code class="literal">mysqlnd</code> uses a C pattern for
   implementing object orientation.
  </p>
  <p class="para">
   In C you use a <code class="literal">struct</code> to represent an object.
   Members of the struct represent object properties. Struct members
   pointing to functions represent methods.
  </p>
  <p class="para">
   Unlike with other languages such as C++ or Java, there are no fixed
   rules on inheritance in the C object-oriented paradigm. However,
   there are some conventions that need to be followed that will be
   discussed later.
  </p>
  <p class="para">
   <strong>The PHP Life Cycle</strong>
  </p>
  <p class="para">
   When considering the PHP life cycle there are two basic cycles:
  </p>
  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     PHP engine startup and shutdown cycle
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     Request cycle
    </p>
   </li>
  </ul>
  <p class="para">
   When the PHP engine starts up it will call the module initialization
   (MINIT) function of each registered extension. This allows each
   module to setup variables and allocate resources that will exist for
   the lifetime of the PHP engine process. When the PHP engine shuts
   down it will call the module shutdown (MSHUTDOWN) function of each
   extension.
  </p>
  <p class="para">
   During the lifetime of the PHP engine it will receive a number of
   requests. Each request constitutes another life cycle. On each
   request the PHP engine will call the request initialization function
   of each extension. The extension can perform any variable setup and
   resource allocation required for request processing. As the request
   cycle ends the engine calls the request shutdown (RSHUTDOWN) function
   of each extension so the extension can perform any cleanup required.
  </p>
  <p class="para">
   <strong>How a plugin works</strong>
  </p>
  <p class="para">
   A <code class="literal">mysqlnd</code> plugin works by intercepting calls made
   to <code class="literal">mysqlnd</code> by extensions that use
   <code class="literal">mysqlnd</code>. This is achieved by obtaining the
   <code class="literal">mysqlnd</code> function table, backing it up, and
   replacing it by a custom function table, which calls the functions of
   the plugin as required.
  </p>
  <p class="para">
   The following code shows how the <code class="literal">mysqlnd</code> function
   table is replaced:
  </p>
<div class="example-contents">
<div class="cdata"><pre>
/* a place to store original function table */
struct st_mysqlnd_conn_methods org_methods;

void minit_register_hooks(TSRMLS_D) {
  /* active function table */
  struct st_mysqlnd_conn_methods * current_methods
    = mysqlnd_conn_get_methods();

  /* backup original function table */
  memcpy(&amp;org_methods, current_methods,
    sizeof(struct st_mysqlnd_conn_methods);

  /* install new methods */
  current_methods-&gt;query = MYSQLND_METHOD(my_conn_class, query);
}
</pre></div>
</div>

  <p class="para">
   Connection function table manipulations must be done during Module
   Initialization (MINIT). The function table is a global shared
   resource. In an multi-threaded environment, with a TSRM build, the
   manipulation of a global shared resource during the request
   processing will almost certainly result in conflicts.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Do not use any fixed-size logic when manipulating the
    <code class="literal">mysqlnd</code> function table: new methods may be added
    at the end of the function table. The function table may change at
    any time in the future.
   </p>
  </p></blockquote>
  <p class="para">
   <strong>Calling parent methods</strong>
  </p>
  <p class="para">
   If the original function table entries are backed up, it is still
   possible to call the original function table entries - the parent
   methods.
  </p>
  <p class="para">
   In some cases, such as for
   <code class="literal">Connection::stmt_init()</code>, it is vital to call the
   parent method prior to any other activity in the derived method.
  </p>
<div class="example-contents">
<div class="cdata"><pre>
MYSQLND_METHOD(my_conn_class, query)(MYSQLND *conn,
  const char *query, unsigned int query_len TSRMLS_DC) {

  php_printf(&quot;my_conn_class::query(query = %s)\n&quot;, query);

  query = &quot;SELECT &#039;query rewritten&#039; FROM DUAL&quot;;
  query_len = strlen(query);

  return org_methods.query(conn, query, query_len); /* return with call to parent */
}
</pre></div>
</div>

  <p class="para">
   <strong>Extending properties</strong>
  </p>
  <p class="para">
   A <code class="literal">mysqlnd</code> object is represented by a C struct. It
   is not possible to add a member to a C struct at run time. Users of
   <code class="literal">mysqlnd</code> objects cannot simply add properties to
   the objects.
  </p>
  <p class="para">
   Arbitrary data (properties) can be added to a
   <code class="literal">mysqlnd</code> objects using an appropriate function of
   the
   <code class="literal">mysqlnd_plugin_get_plugin_&lt;object&gt;_data()</code>
   family. When allocating an object <code class="literal">mysqlnd</code> reserves
   space at the end of the object to hold a <code class="literal">void *</code>
   pointer to arbitrary data. <code class="literal">mysqlnd</code> reserves space
   for one <code class="literal">void *</code> pointer per plugin.
  </p>
  <p class="para">
   The following table shows how to calculate the position of the
   pointer for a specific plugin:
  </p>
  <table id="mysqlnd.plugin.pointercalc" class="doctable table">
   <caption><strong>Pointer calculations for mysqlnd</strong></caption>
   
    <thead>
     <tr>
      <th>Memory address</th>
      <th>Contents</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>0</td>
      <td>Beginning of the mysqlnd object C struct</td>
     </tr>

     <tr>
      <td>n</td>
      <td>End of the mysqlnd object C struct</td>
     </tr>

     <tr>
      <td>n + (m x sizeof(void*))</td>
      <td>void* to object data of the m-th plugin</td>
     </tr>

    </tbody>
   
  </table>

  <p class="para">
   If you plan to subclass any of the <code class="literal">mysqlnd</code> object
   constructors, which is allowed, you must keep this in mind!
  </p>
  <p class="para">
   The following code shows extending properties:
  </p>
<div class="example-contents">
<div class="cdata"><pre>
/* any data we want to associate */
typedef struct my_conn_properties {
  unsigned long query_counter;
} MY_CONN_PROPERTIES;

/* plugin id */
unsigned int my_plugin_id;

void minit_register_hooks(TSRMLS_D) {
  /* obtain unique plugin ID */
  my_plugin_id = mysqlnd_plugin_register();
  /* snip - see Extending Connection: methods */
}

static MY_CONN_PROPERTIES** get_conn_properties(const MYSQLND *conn TSRMLS_DC) {
  MY_CONN_PROPERTIES** props;
  props = (MY_CONN_PROPERTIES**)mysqlnd_plugin_get_plugin_connection_data(
    conn, my_plugin_id);
  if (!props || !(*props)) {
    *props = mnd_pecalloc(1, sizeof(MY_CONN_PROPERTIES), conn-&gt;persistent);
    (*props)-&gt;query_counter = 0;
  }
  return props;
}
</pre></div>
</div>

  <p class="para">
   The plugin developer is responsible for the management of plugin data
   memory.
  </p>
  <p class="para">
   Use of the <code class="literal">mysqlnd</code> memory allocator is recommended
   for plugin data. These functions are named using the convention:
   <code class="literal">mnd_*loc()</code>. The <code class="literal">mysqlnd</code>
   allocator has some useful features, such as the ability to use a
   debug allocator in a non-debug build.
  </p>
  <table id="mysqlnd.plugin.subclass" class="doctable table">
   <caption><strong>When and how to subclass</strong></caption>
   
    <thead>
     <tr>
      <th class="empty">&nbsp;</th>
      <th>When to subclass?</th>
      <th>Each instance has its own private function table?</th>
      <th>How to subclass?</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>Connection (MYSQLND)</td>
      <td>MINIT</td>
      <td>No</td>
      <td>mysqlnd_conn_get_methods()</td>
     </tr>

     <tr>
      <td>Resultset (MYSQLND_RES)</td>
      <td>MINIT or later</td>
      <td>Yes</td>
      <td>mysqlnd_result_get_methods() or object method function table
       manipulation</td>
     </tr>

     <tr>
      <td>Resultset Meta (MYSQLND_RES_METADATA)</td>
      <td>MINIT</td>
      <td>No</td>
      <td>mysqlnd_result_metadata_get_methods()</td>
     </tr>

     <tr>
      <td>Statement (MYSQLND_STMT)</td>
      <td>MINIT</td>
      <td>No</td>
      <td>mysqlnd_stmt_get_methods()</td>
     </tr>

     <tr>
      <td>Network (MYSQLND_NET)</td>
      <td>MINIT or later</td>
      <td>Yes</td>
      <td>mysqlnd_net_get_methods() or object method function table manipulation</td>
     </tr>

     <tr>
      <td>Wire protocol (MYSQLND_PROTOCOL)</td>
      <td>MINIT or later</td>
      <td>Yes</td>
      <td>mysqlnd_protocol_get_methods() or object method function table
       manipulation</td>
     </tr>

    </tbody>
   
  </table>

  <p class="para">
   You must not manipulate function tables at any time later than MINIT
   if it is not allowed according to the above table.
  </p>
  <p class="para">
   Some classes contain a pointer to the method function table. All
   instances of such a class will share the same function table. To
   avoid chaos, in particular in threaded environments, such function
   tables must only be manipulated during MINIT.
  </p>
  <p class="para">
   Other classes use copies of a globally shared function table. The
   class function table copy is created together with the object. Each
   object uses its own function table. This gives you two options: you
   can manipulate the default function table of an object at MINIT, and
   you can additionally refine methods of an object without impacting
   other instances of the same class.
  </p>
  <p class="para">
   The advantage of the shared function table approach is performance.
   There is no need to copy a function table for each and every object.
  </p>
  <table id="mysqlnd.plugin.constatus" class="doctable table">
   <caption><strong>Constructor status</strong></caption>
   
    <thead>
     <tr>
      <th>Type</th>
      <th>Allocation, construction, reset</th>
      <th>Can be modified?</th>
      <th>Caller</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>Connection (MYSQLND)</td>
      <td>mysqlnd_init()</td>
      <td>No</td>
      <td>mysqlnd_connect()</td>
     </tr>

     <tr>
      <td>Resultset(MYSQLND_RES)</td>
      <td><p class="para">
        Allocation:
       </p>
       <ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          Connection::result_init()
         </p>
        </li>
       </ul>
       <p class="para">
        Reset and re-initialized during:
       </p>
       <ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          Result::use_result()
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          Result::store_result
         </p>
        </li>
       </ul></td>
      <td>Yes, but call parent!</td>
      <td><ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          Connection::list_fields()
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          Statement::get_result()
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          Statement::prepare() (Metadata only)
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          Statement::resultMetaData()
         </p>
        </li>
       </ul></td>
     </tr>

     <tr>
      <td>Resultset Meta (MYSQLND_RES_METADATA)</td>
      <td>Connection::result_meta_init()</td>
      <td>Yes, but call parent!</td>
      <td>Result::read_result_metadata()</td>
     </tr>

     <tr>
      <td>Statement (MYSQLND_STMT)</td>
      <td>Connection::stmt_init()</td>
      <td>Yes, but call parent!</td>
      <td>Connection::stmt_init()</td>
     </tr>

     <tr>
      <td>Network (MYSQLND_NET)</td>
      <td>mysqlnd_net_init()</td>
      <td>No</td>
      <td>Connection::init()</td>
     </tr>

     <tr>
      <td>Wire protocol (MYSQLND_PROTOCOL)</td>
      <td>mysqlnd_protocol_init()</td>
      <td>No</td>
      <td>Connection::init()</td>
     </tr>

    </tbody>
   
  </table>

  <p class="para">
   It is strongly recommended that you do not entirely replace a
   constructor. The constructors perform memory allocations. The memory
   allocations are vital for the <code class="literal">mysqlnd</code> plugin API
   and the object logic of <code class="literal">mysqlnd</code>. If you do not
   care about warnings and insist on hooking the constructors, you
   should at least call the parent constructor before doing anything in
   your constructor.
  </p>
  <p class="para">
   Regardless of all warnings, it can be useful to subclass
   constructors. Constructors are the perfect place for modifying the
   function tables of objects with non-shared object tables, such as
   Resultset, Network, Wire Protocol.
  </p>
  <table id="mysqlnd.plugin.deststatus" class="doctable table">
   <caption><strong>Destruction status</strong></caption>
   
    <thead>
     <tr>
      <th>Type</th>
      <th>Derived method must call parent?</th>
      <th>Destructor</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>Connection</td>
      <td>yes, after method execution</td>
      <td>free_contents(), end_psession()</td>
     </tr>

     <tr>
      <td>Resultset</td>
      <td>yes, after method execution</td>
      <td>free_result()</td>
     </tr>

     <tr>
      <td>Resultset Meta</td>
      <td>yes, after method execution</td>
      <td>free()</td>
     </tr>

     <tr>
      <td>Statement</td>
      <td>yes, after method execution</td>
      <td>dtor(), free_stmt_content()</td>
     </tr>

     <tr>
      <td>Network</td>
      <td>yes, after method execution</td>
      <td>free()</td>
     </tr>

     <tr>
      <td>Wire protocol</td>
      <td>yes, after method execution</td>
      <td>free()</td>
     </tr>

    </tbody>
   
  </table>

  <p class="para">
   The destructors are the appropriate place to free properties,
   <code class="literal">mysqlnd_plugin_get_plugin_<span class="replaceable">&lt;object&gt;</span>_data()</code>.
  </p>
  <p class="para">
   The listed destructors may not be equivalent to the actual
   <code class="literal">mysqlnd</code> method freeing the object itself. However,
   they are the best possible place for you to hook in and free your
   plugin data. As with constructors you may replace the methods
   entirely but this is not recommended. If multiple methods are listed
   in the above table you will need to hook all of the listed methods
   and free your plugin data in whichever method is called first by
   <code class="literal">mysqlnd</code>.
  </p>
  <p class="para">
   The recommended method for plugins is to simply hook the methods,
   free your memory and call the parent implementation immediately
   following this.
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqlnd/plugin.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqlnd.plugin.architecture%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqlnd.plugin.architecture&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqlnd.plugin.architecture.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="mysqlnd.plugin.php">MySQL Native Driver Plugin API</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqlnd.plugin.mysql-proxy.php" title="A comparison of mysqlnd plugins with MySQL Proxy">A comparison of mysqlnd plugins with MySQL Proxy</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.plugin.obtaining.php" title="Obtaining the mysqlnd plugin API">Obtaining the mysqlnd plugin API</a>
                        </li>
                                                <li class="current">
                            <a href="mysqlnd.plugin.architecture.php" title="MySQL Native Driver Plugin Architecture">MySQL Native Driver Plugin Architecture</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.plugin.api.php" title="The mysqlnd plugin API">The mysqlnd plugin API</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.plugin.developing.php" title="Getting started building a mysqlnd plugin">Getting started building a mysqlnd plugin</a>
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
