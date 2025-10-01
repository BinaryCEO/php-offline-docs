<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: odbc_columns - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.odbc-columns.php">
 <link rel="shorturl" href="https://www.php.net/odbc-columns">
 <link rel="alternate" href="https://www.php.net/odbc-columns" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.uodbc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.odbc-columnprivileges.php">
 <link rel="next" href="https://www.php.net/manual/en/function.odbc-commit.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.odbc-columns.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.odbc-columns.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.odbc-columns.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.odbc-columns.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.odbc-columns.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.odbc-columns.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.odbc-columns.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.odbc-columns.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.odbc-columns.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.odbc-columns.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.odbc-columns.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Lists the column names in specified tables" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: odbc_columns - Manual" />
<meta name="twitter:description" content="Lists the column names in specified tables" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: odbc_columns - Manual" />
<meta itemprop="description" content="Lists the column names in specified tables" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Lists the column names in specified tables" />

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
        <a href="function.odbc-commit.php">
          odbc_commit &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.odbc-columnprivileges.php">
          &laquo; odbc_columnprivileges        </a>
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
            <option value='en/function.odbc-columns.php' selected="selected">English</option>
            <option value='de/function.odbc-columns.php'>German</option>
            <option value='es/function.odbc-columns.php'>Spanish</option>
            <option value='fr/function.odbc-columns.php'>French</option>
            <option value='it/function.odbc-columns.php'>Italian</option>
            <option value='ja/function.odbc-columns.php'>Japanese</option>
            <option value='pt_BR/function.odbc-columns.php'>Brazilian Portuguese</option>
            <option value='ru/function.odbc-columns.php'>Russian</option>
            <option value='tr/function.odbc-columns.php'>Turkish</option>
            <option value='uk/function.odbc-columns.php'>Ukrainian</option>
            <option value='zh/function.odbc-columns.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.odbc-columns" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">odbc_columns</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">odbc_columns</span> &mdash; <span class="dc-title">Lists the column names in specified tables</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.odbc-columns-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>odbc_columns</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type">Odbc\Connection</span> <code class="parameter">$odbc</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$catalog</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$schema</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$table</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$column</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type">Odbc\Result</span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Lists all columns in the requested range.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.odbc-columns-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">odbc</code></dt>
     <dd>
      <p class="para">The ODBC connection object,
see <span class="function"><a href="function.odbc-connect.php" class="function">odbc_connect()</a></span> for details.</p>
     </dd>
    
    
     <dt><code class="parameter">catalog</code></dt>
     <dd>
      <p class="para">
       The catalog (&#039;qualifier&#039; in ODBC 2 parlance).
      </p>
     </dd>
    
    
     <dt><code class="parameter">schema</code></dt>
     <dd>
      <p class="para">
       The schema (&#039;owner&#039; in ODBC 2 parlance).
       This parameter accepts the following search patterns:
<code class="literal">%</code> to match zero or more characters,
and <code class="literal">_</code> to match a single character.
      </p>
     </dd>
    
    
     <dt><code class="parameter">table</code></dt>
     <dd>
      <p class="para">
       The table name.
       This parameter accepts the following search patterns:
<code class="literal">%</code> to match zero or more characters,
and <code class="literal">_</code> to match a single character.
      </p>
     </dd>
    
    
     <dt><code class="parameter">column</code></dt>
     <dd>
      <p class="para">
       The column name.
       This parameter accepts the following search patterns:
<code class="literal">%</code> to match zero or more characters,
and <code class="literal">_</code> to match a single character.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.odbc-columns-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an ODBC result object or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <p class="para">
   The result set has the following columns:
   <ul class="itemizedlist">
    <li class="listitem"><span class="simpara"><code class="literal">TABLE_CAT</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">TABLE_SCHEM</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">TABLE_NAME</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">COLUMN_NAME</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">DATA_TYPE</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">TYPE_NAME</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">COLUMN_SIZE</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">BUFFER_LENGTH</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">DECIMAL_DIGITS</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">NUM_PREC_RADIX</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">NULLABLE</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">REMARKS</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">COLUMN_DEF</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">SQL_DATA_TYPE</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">SQL_DATETIME_SUB</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">CHAR_OCTET_LENGTH</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">ORDINAL_POSITION</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">IS_NULLABLE</code></span></li>
   </ul>
   Drivers can report additional columns.
  </p>
  <p class="simpara">
   The result set is ordered by <code class="literal">TABLE_CAT</code>, <code class="literal">TABLE_SCHEM</code>,
   <code class="literal">TABLE_NAME</code> and <code class="literal">ORDINAL_POSITION</code>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.odbc-columns-changelog">
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
      <td>8.0.0</td>
      <td>
       <code class="parameter">schema</code>, <code class="parameter">table</code> and <code class="parameter">column</code>
       are now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.odbc-columns-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="odbc-columns.example.basic">
   <p><strong>Example #1 List Columns of a Table</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$dsn</span><span style="color: #007700">, </span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$pass</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$columns </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_columns</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'TutorialDB'</span><span style="color: #007700">, </span><span style="color: #DD0000">'dbo'</span><span style="color: #007700">, </span><span style="color: #DD0000">'test'</span><span style="color: #007700">, </span><span style="color: #DD0000">'%'</span><span style="color: #007700">);<br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">))) {<br />    </span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />    break; </span><span style="color: #FF8000">// further rows omitted for brevity<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [TABLE_CAT] =&gt; TutorialDB
    [TABLE_SCHEM] =&gt; dbo
    [TABLE_NAME] =&gt; TEST
    [COLUMN_NAME] =&gt; id
    [DATA_TYPE] =&gt; 4
    [TYPE_NAME] =&gt; int
    [COLUMN_SIZE] =&gt; 10
    [BUFFER_LENGTH] =&gt; 4
    [DECIMAL_DIGITS] =&gt; 0
    [NUM_PREC_RADIX] =&gt; 10
    [NULLABLE] =&gt; 0
    [REMARKS] =&gt;
    [COLUMN_DEF] =&gt;
    [SQL_DATA_TYPE] =&gt; 4
    [SQL_DATETIME_SUB] =&gt;
    [CHAR_OCTET_LENGTH] =&gt;
    [ORDINAL_POSITION] =&gt; 1
    [IS_NULLABLE] =&gt; NO
)</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.odbc-columns-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.odbc-columnprivileges.php" class="function" rel="rdfs-seeAlso">odbc_columnprivileges()</a> - Lists columns and associated privileges for the given table</span></li>
    <li><span class="function"><a href="function.odbc-procedurecolumns.php" class="function" rel="rdfs-seeAlso">odbc_procedurecolumns()</a> - Retrieve information about parameters to procedures</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/uodbc/functions/odbc-columns.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.odbc-columns%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.odbc-columns&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-columns.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="91544">  <div class="votes">
    <div id="Vu91544">
    <a href="/manual/vote-note.php?id=91544&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91544">
    <a href="/manual/vote-note.php?id=91544&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91544" title="86% like this...">
    11
    </div>
  </div>
  <a href="#91544" class="name">
  <strong class="user"><em>Thomas</em></strong></a><a class="genanchor" href="#91544"> &para;</a><div class="date" title="2009-06-16 06:46"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91544">
<div class="phpcode"><code><span class="html">[MS SQL Server 2005/2008, PHP 5]<br /><br />Imagine you would need to access the column names of a specific table, for instance to display them as table headers for fields with missing information. While browsing the documentation I was kind of lost how to use odbc_columns() without the usage of odbc_result_all() which outputs EVERYTHING in a single HTML table.<br /><br />Here is a way to stuff all output into an array and then access only one or more fields of the odbc_columns() output:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">include(</span><span class="string">'connect.inc'</span><span class="keyword">); </span><span class="comment">// &lt;== Put all your database connection parameters in here. (DSN, PWD, USR, mssql_connect, etc.; returns $connection)<br /><br /></span><span class="default">$outval </span><span class="keyword">= </span><span class="default">odbc_columns</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">"your DB name"</span><span class="keyword">, </span><span class="string">"%"</span><span class="keyword">, </span><span class="string">"your table name"</span><span class="keyword">, </span><span class="string">"%"</span><span class="keyword">);<br /><br /></span><span class="default">$pages </span><span class="keyword">= array();<br />while (</span><span class="default">odbc_fetch_into</span><span class="keyword">(</span><span class="default">$outval</span><span class="keyword">, </span><span class="default">$pages</span><span class="keyword">)) {<br />        echo </span><span class="default">$pages</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] . </span><span class="string">"&lt;br /&gt;\n"</span><span class="keyword">; </span><span class="comment">// presents all fields of the array $pages in a new line until the array pointer reaches the end of array data<br />    </span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />Now your array $pages will have the following contents:<br />([x] is the array index displayed here for better understanding)<br /><br />[0] TABLE_CAT &lt;== your DB name<br />[1] TABLE_SCHEM &lt;== dbo, your table scheme<br />[2] TABLE_NAME &lt;== your table name<br />[3] COLUMN_NAME &lt;== your column names (selected all with "%" in odbc_columns() )<br />[4] DATA_TYPE &lt;== -8<br />[5] TYPE_NAME &lt;== nchar (corresponds to -8, 11 f.i. is datetime and so on)<br />[6] COLUMN_SIZE &lt;== num. val.<br />[7] BUFFER_LENGTH &lt;== num. val.<br />[8] DECIMAL_DIGITS &lt;== num. val. or NULL<br />[9] NUM_PREC_RADIX &lt;== num. val. or NULL<br />[10] NULLABLE &lt;== num. val.<br />[11] REMARKS &lt;== num. val. or NULL<br />[12] COLUMN_DEF &lt;== num. val. or NULL<br />[13] SQL_DATA_TYPE &lt;== num. val.<br />[14] SQL_DATETIME_SUB &lt;== num. val. or NULL<br />[15] CHAR_OCTET_LENGTH &lt;== num. val. or NULL<br />[16] ORDINAL_POSITION &lt;== num. val.<br />[17] IS_NULLABLE &lt;== YES/NO<br />[18] SS_DATA_TYPE &lt;== num. val.<br /><br />Now you can access each field recursivly by its key and output only the DESIRED fields instead of having ALL output from odbc_result_all().<br />Please note that the array key starts at zero (0) instead of one (1), so echo $pages[3] selects COLUMN_NAME from the above list.<br /><br />I hope this helps...<br /><br />Cheers<br />Thomas</span></code></div>
  </div>
 </div>
  <div class="note" id="47718">  <div class="votes">
    <div id="Vu47718">
    <a href="/manual/vote-note.php?id=47718&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47718">
    <a href="/manual/vote-note.php?id=47718&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47718" title="66% like this...">
    1
    </div>
  </div>
  <a href="#47718" class="name">
  <strong class="user"><em>ke3wh at comcast dot net</em></strong></a><a class="genanchor" href="#47718"> &para;</a><div class="date" title="2004-11-26 05:47"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47718">
<div class="phpcode"><code><span class="html">The complete script to get into from a DSN MS Access DB Table and display it is below.<br /><br />function Error_Handler( $msg, $cnx ) {<br />    echo "$msg \n";<br />    odbc_close( $cnx);<br />    exit();<br />    }<br /><br />$cnx = odbc_connect( 'DSN_NAME' , '', '' );//connect to MSAccess<br />    if (!$cnx) {<br />      Error_handler( "Error in odbc_connect" , $cnx );<br />    }  <br /><br />    $res400= odbc_columns($cnx,"DSN_NAME","","TABLE");<br />    echo odbc_result_all($res400);</span></code></div>
  </div>
 </div>
  <div class="note" id="82933">  <div class="votes">
    <div id="Vu82933">
    <a href="/manual/vote-note.php?id=82933&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82933">
    <a href="/manual/vote-note.php?id=82933&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82933" title="60% like this...">
    1
    </div>
  </div>
  <a href="#82933" class="name">
  <strong class="user"><em>php dot lpatrick at spamgourmet dot com</em></strong></a><a class="genanchor" href="#82933"> &para;</a><div class="date" title="2008-05-02 10:52"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82933">
<div class="phpcode"><code><span class="html">Since I was just looking for table descriptions of an MS Access file I didn't know the table structure of, I wrote this (where $inputfile is the Access file name):<br /><br /><span class="default">&lt;?php<br />$conn </span><span class="keyword">= </span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="string">"DRIVER={Microsoft Access Driver (*.mdb)}; DBQ="</span><span class="keyword">.</span><span class="default">$inputfile</span><span class="keyword">;, </span><span class="string">""</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">);<br /><br /></span><span class="default">$tabs </span><span class="keyword">= </span><span class="default">odbc_tables</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br /></span><span class="default">$tables </span><span class="keyword">= array();<br />while (</span><span class="default">odbc_fetch_row</span><span class="keyword">(</span><span class="default">$tabs</span><span class="keyword">)){<br />    if (</span><span class="default">odbc_result</span><span class="keyword">(</span><span class="default">$tabs</span><span class="keyword">,</span><span class="string">"TABLE_TYPE"</span><span class="keyword">)==</span><span class="string">"TABLE"</span><span class="keyword">) {<br />        </span><span class="default">$table_name </span><span class="keyword">= </span><span class="default">odbc_result</span><span class="keyword">(</span><span class="default">$tabs</span><span class="keyword">,</span><span class="string">"TABLE_NAME"</span><span class="keyword">);<br />        </span><span class="default">$tables</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$table_name</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">] = array();<br />        </span><span class="default">$cols </span><span class="keyword">= </span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">,</span><span class="string">'select * from `'</span><span class="keyword">.</span><span class="default">$table_name</span><span class="keyword">.</span><span class="string">'` where 1=2'</span><span class="keyword">);  </span><span class="comment">// we don't want content<br />      </span><span class="default">$ncols </span><span class="keyword">= </span><span class="default">odbc_num_fields</span><span class="keyword">(</span><span class="default">$cols</span><span class="keyword">);<br />        for (</span><span class="default">$n</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$n</span><span class="keyword">&lt;=</span><span class="default">$ncols</span><span class="keyword">; </span><span class="default">$n</span><span class="keyword">++) {<br />            </span><span class="default">$field_name </span><span class="keyword">= </span><span class="default">odbc_field_name</span><span class="keyword">(</span><span class="default">$cols</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">);<br />            </span><span class="default">$tables</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$table_name</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">][</span><span class="string">"</span><span class="keyword">{</span><span class="default">$field_name</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">][</span><span class="string">'len'</span><span class="keyword">] = </span><span class="default">odbc_field_len</span><span class="keyword">(</span><span class="default">$cols</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">);<br />            </span><span class="default">$tables</span><span class="keyword">[</span><span class="string">"</span><span class="keyword">{</span><span class="default">$table_name</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">][</span><span class="string">"</span><span class="keyword">{</span><span class="default">$field_name</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">][</span><span class="string">'type'</span><span class="keyword">] = </span><span class="default">odbc_field_type</span><span class="keyword">(</span><span class="default">$cols</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">);<br />        }<br />    }<br />}<br /></span><span class="default">odbc_close </span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$tables</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108256">  <div class="votes">
    <div id="Vu108256">
    <a href="/manual/vote-note.php?id=108256&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108256">
    <a href="/manual/vote-note.php?id=108256&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108256" title="100% like this...">
    2
    </div>
  </div>
  <a href="#108256" class="name">
  <strong class="user"><em>eion at robbmob dot com</em></strong></a><a class="genanchor" href="#108256"> &para;</a><div class="date" title="2012-04-12 03:47"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108256">
<div class="phpcode"><code><span class="html">Sometimes the array keys of the results of odbc_columns() can be in lower case, instead of upper case (eg 'column_name' instead of 'COLUMN_NAME').  This can vary depending on which ODBC driver you are connecting to.</span></code></div>
  </div>
 </div>
  <div class="note" id="81227">  <div class="votes">
    <div id="Vu81227">
    <a href="/manual/vote-note.php?id=81227&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81227">
    <a href="/manual/vote-note.php?id=81227&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81227" title="100% like this...">
    1
    </div>
  </div>
  <a href="#81227" class="name">
  <strong class="user"><em>jeremie dot legrand at komori-chambon dot fr</em></strong></a><a class="genanchor" href="#81227"> &para;</a><div class="date" title="2008-02-19 02:43"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81227">
<div class="phpcode"><code><span class="html">Here is the way to use odbc_columns() with "Attunity Connect", an ODBC connector to VMS :<br /><br />$db = "my_database";<br />$table = "my_table";<br />$con = odbc_connect($db, "user", "password");<br />$result = odbc_columns($con, $db, "", $table, "%");<br />while (odbc_fetch_row($resu)) {<br />    echo odbc_result_all($resu);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="11499">  <div class="votes">
    <div id="Vu11499">
    <a href="/manual/vote-note.php?id=11499&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd11499">
    <a href="/manual/vote-note.php?id=11499&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V11499" title="100% like this...">
    1
    </div>
  </div>
  <a href="#11499" class="name">
  <strong class="user"><em>LyleE at LocalMotion dot com</em></strong></a><a class="genanchor" href="#11499"> &para;</a><div class="date" title="2001-02-22 11:53"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom11499">
<div class="phpcode"><code><span class="html">Took me a while to figure out this command, thought I would save some other people the time.  We couldn't quite figure out what the qualifier was.  For MSSQL 7.0, it is the Database that you are connecing to.  For the pubs database it would look something like this.
<br />
<br />$rs = odbc_columns($DBConnection, "Pubs", "%", "jobs");
<br />
<br />That would be for showing the jobs table.</span></code></div>
  </div>
 </div>
  <div class="note" id="124180">  <div class="votes">
    <div id="Vu124180">
    <a href="/manual/vote-note.php?id=124180&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124180">
    <a href="/manual/vote-note.php?id=124180&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124180" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124180" class="name">
  <strong class="user"><em>tom at jargonsoft dot com</em></strong></a><a class="genanchor" href="#124180"> &para;</a><div class="date" title="2019-09-08 05:33"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124180">
<div class="phpcode"><code><span class="html">The docs on this page are among the worst in php. I know docs are traditionally terrible for open source code, but this is NOT acceptable:<br />Qualifer: the qualifer. REALLY??<br />How about: ComplexFieldWithManyRules: the ComplexFieldWithManyRules. <br />Give me a break.<br />How about actually defining the meaning and how to use it?<br />Along with several EXAMPLES!!<br />You are giving software developers a bad name with junk like this.</span></code></div>
  </div>
 </div>
  <div class="note" id="72531">  <div class="votes">
    <div id="Vu72531">
    <a href="/manual/vote-note.php?id=72531&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72531">
    <a href="/manual/vote-note.php?id=72531&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72531" title="50% like this...">
    0
    </div>
  </div>
  <a href="#72531" class="name">
  <strong class="user"><em>Artur</em></strong></a><a class="genanchor" href="#72531"> &para;</a><div class="date" title="2007-01-23 06:15"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72531">
<div class="phpcode"><code><span class="html">This is the only way I could actually get field names using odbc_columns. Hope it will be usefull for someone.<br /><br />$result = odbc_columns($odbc,$dbhost,"dbo", "KIR_ViolationDetail");<br /><br />while (odbc_fetch_row($result))<br />{<br />  echo odbc_result($result,"COLUMN_NAME");<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="47403">  <div class="votes">
    <div id="Vu47403">
    <a href="/manual/vote-note.php?id=47403&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47403">
    <a href="/manual/vote-note.php?id=47403&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47403" title="no votes...">
    0
    </div>
  </div>
  <a href="#47403" class="name">
  <strong class="user"><em>laundro at gmail dot com</em></strong></a><a class="genanchor" href="#47403"> &para;</a><div class="date" title="2004-11-15 08:29"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47403">
<div class="phpcode"><code><span class="html">Getting all column names from Excel with ODBC:<br />$cols = odbc_columns($connection, $filename, NULL, $sheet);<br /><br />where:<br />$connection is the result of your odbc_connect;<br />$filename is the filename of the Excel file;<br />$sheet is the name of the Excel worksheet.<br /><br />This is useful when you want to query an Excel file without having to name ranges beforehand. With the results obtained from the above command, you can populate an array and use its contents (ie the column names) for further querying.</span></code></div>
  </div>
 </div>
  <div class="note" id="40219">  <div class="votes">
    <div id="Vu40219">
    <a href="/manual/vote-note.php?id=40219&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40219">
    <a href="/manual/vote-note.php?id=40219&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40219" title="no votes...">
    0
    </div>
  </div>
  <a href="#40219" class="name">
  <strong class="user"><em>netaminas at hotamil dot com</em></strong></a><a class="genanchor" href="#40219"> &para;</a><div class="date" title="2004-02-25 02:21"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40219">
<div class="phpcode"><code><span class="html">Connect with IBM Client Access 32-bit ODBC driver<br /><br />To access table information in DB2 iSeries (AS/400) via ODBC Driver i've tried with this code and worked!!!<br /><br />$conn_ODBC = odbc_connect("DSN", "USER", "PASSW") or die;<br />$tabela = "table name in IBM iSeries";<br />$libname = "library name in IBM iSeries"<br /><br />$res400 = odbc_columns($conn_ODBC, "DSN", $libname, $tabela, "%")  or die("&lt;p&gt;&lt;font color=#FF0000&gt;Erro Na Leitura da Tabela ".$tabela." do AS/400: ".odbc_errormsg());<br /><br />echo odbc_result_all($res400);<br /><br />Netaminas.com<br />PORTUGAL</span></code></div>
  </div>
 </div>
  <div class="note" id="36759">  <div class="votes">
    <div id="Vu36759">
    <a href="/manual/vote-note.php?id=36759&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36759">
    <a href="/manual/vote-note.php?id=36759&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36759" title="no votes...">
    0
    </div>
  </div>
  <a href="#36759" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#36759"> &para;</a><div class="date" title="2003-10-21 11:44"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36759">
<div class="phpcode"><code><span class="html">ODBC &amp; MS ACCESS :<br /><br />odbc_columns($conn,"DSN_NAME","","TABLE_NAME");</span></code></div>
  </div>
 </div>
  <div class="note" id="29797">  <div class="votes">
    <div id="Vu29797">
    <a href="/manual/vote-note.php?id=29797&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29797">
    <a href="/manual/vote-note.php?id=29797&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29797" title="no votes...">
    0
    </div>
  </div>
  <a href="#29797" class="name">
  <strong class="user"><em>Sergio Sartori</em></strong></a><a class="genanchor" href="#29797"> &para;</a><div class="date" title="2003-02-25 08:05"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29797">
<div class="phpcode"><code><span class="html">Using this function on a MS SQL Server 2000 database connection with the syntax:<br /><br />$res = odbc_columns($connId, $dbName, "%", $tableName, "%");<br /><br />I actually get a result set with THESE columns name:<br /><br />TABLE_CAT, TABLE_SCHEM, TABLE_NAME, COLUMN_NAME, DATA_TYPE, TYPE_NAME, COLUMN_SIZE, BUFFER_LENGTH, DECIMAL_DIGITS, NUM_PREC_RADIX, NULLABLE, REMARKS<br /><br />in the order displayed.</span></code></div>
  </div>
 </div>
  <div class="note" id="22285">  <div class="votes">
    <div id="Vu22285">
    <a href="/manual/vote-note.php?id=22285&amp;page=function.odbc-columns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22285">
    <a href="/manual/vote-note.php?id=22285&amp;page=function.odbc-columns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22285" title="no votes...">
    0
    </div>
  </div>
  <a href="#22285" class="name">
  <strong class="user"><em>josh at engledental dot com</em></strong></a><a class="genanchor" href="#22285"> &para;</a><div class="date" title="2002-06-12 05:34"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22285">
<div class="phpcode"><code><span class="html">(PHP4.2.1, Win2k, MSSQL 2K)<br /><br />The result id returned from this function does not appear to behave exactly the same as a result id returned from a query.  <br /><br />I get all sorts of errors when I try to use subsequent odbc functions on the result id, such as:<br /><br />odbc_fetch_into - This function only seems to work if I don't specify a row number or if the row number = 0.<br /><br />odbc_fetch_row - This function will not return a row from the result set.  Under some scenarios, I am able to use it in a while loop, but its seems buggy.  Hence, my odbc_num_of_rows function (hack to replace the non-functional odbc_num_rows function) also doesn't work.<br /><br />I recommend dumping the results into an array immediately and freeing the result id created by this function.<br /><br />ps - If anyone has any further insight or workarounds, I would appreciate them.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.odbc-columns&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-columns.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.odbc-columns.php" title="odbc_&#8203;columns">odbc_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-commit.php" title="odbc_&#8203;commit">odbc_&#8203;commit</a>
                        </li>
                                                <li class="">
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
