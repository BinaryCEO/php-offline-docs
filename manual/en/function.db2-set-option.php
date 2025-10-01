<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: db2_set_option - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.db2-set-option.php">
 <link rel="shorturl" href="https://www.php.net/db2-set-option">
 <link rel="alternate" href="https://www.php.net/db2-set-option" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ibm-db2.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.db2-server-info.php">
 <link rel="next" href="https://www.php.net/manual/en/function.db2-special-columns.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.db2-set-option.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.db2-set-option.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.db2-set-option.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.db2-set-option.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.db2-set-option.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.db2-set-option.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.db2-set-option.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.db2-set-option.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.db2-set-option.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.db2-set-option.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.db2-set-option.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set options for connection or statement resources" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: db2_set_option - Manual" />
<meta name="twitter:description" content="Set options for connection or statement resources" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: db2_set_option - Manual" />
<meta itemprop="description" content="Set options for connection or statement resources" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set options for connection or statement resources" />

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
        <a href="function.db2-special-columns.php">
          db2_special_columns &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.db2-server-info.php">
          &laquo; db2_server_info        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.ibm-db2.php'>IBM DB2</a></li>      <li><a href='ref.ibm-db2.php'>IBM DB2 Functions</a></li>      </ul>
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
            <option value='en/function.db2-set-option.php' selected="selected">English</option>
            <option value='de/function.db2-set-option.php'>German</option>
            <option value='es/function.db2-set-option.php'>Spanish</option>
            <option value='fr/function.db2-set-option.php'>French</option>
            <option value='it/function.db2-set-option.php'>Italian</option>
            <option value='ja/function.db2-set-option.php'>Japanese</option>
            <option value='pt_BR/function.db2-set-option.php'>Brazilian Portuguese</option>
            <option value='ru/function.db2-set-option.php'>Russian</option>
            <option value='tr/function.db2-set-option.php'>Turkish</option>
            <option value='uk/function.db2-set-option.php'>Ukrainian</option>
            <option value='zh/function.db2-set-option.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.db2-set-option" class="refentry">
  <div class="refnamediv">
    <h1 class="refname">db2_set_option</h1>
    <p class="verinfo">(PECL ibm_db2 &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">db2_set_option</span> &mdash; <span class="dc-title">Set options for connection or statement resources</span></p>

  </div>
  <div class="refsect1 description" id="refsect1-function.db2-set-option-description">
    <h3 class="title">Description</h3>
    <div class="methodsynopsis dc-description">
      <span class="methodname"><strong>db2_set_option</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$resource</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

    <p class="para rdfs-comment">
     Sets options for a statement resource or a connection resource. You
     cannot set options for result set resources.
    </p>
  </div>

  <div class="refsect1 parameters" id="refsect1-function.db2-set-option-parameters">
    <h3 class="title">Parameters</h3>
    <p class="para">
      <dl>
        
          <dt><code class="parameter">resource</code></dt>
          <dd>
            <p class="para">
             A valid statement resource as returned from
             <span class="function"><a href="function.db2-prepare.php" class="function">db2_prepare()</a></span> or a valid connection resource as
             returned from <span class="function"><a href="function.db2-connect.php" class="function">db2_connect()</a></span> or
             <span class="function"><a href="function.db2-pconnect.php" class="function">db2_pconnect()</a></span>.
            </p>
          </dd>
        
        
          <dt><code class="parameter">options</code></dt>
          <dd>
            <p class="para">
             An associative array containing valid statement or connection
             options. This parameter can be used to change autocommit values,
             cursor types (scrollable or forward), and to specify the case of
             the column names (lower, upper, or natural) that will appear in a
             result set.
              <dl>
                
                  <dt><code class="parameter">autocommit</code></dt>
                  <dd>
                    <p class="para">
                     Passing <strong><code><a href="ibm-db2.constants.php#constant.db2-autocommit-on">DB2_AUTOCOMMIT_ON</a></code></strong> turns
                     autocommit on for the specified connection resource.
                    </p>
                    <p class="para">
                     Passing <strong><code><a href="ibm-db2.constants.php#constant.db2-autocommit-off">DB2_AUTOCOMMIT_OFF</a></code></strong> turns
                     autocommit off for the specified connection resource.
                    </p>
                  </dd>
                
                
                  <dt><code class="parameter">cursor</code></dt>
                  <dd>
                    <p class="para">
                     Passing <strong><code><a href="ibm-db2.constants.php#constant.db2-forward-only">DB2_FORWARD_ONLY</a></code></strong> specifies a
                     forward-only cursor for a statement resource. This is the
                     default cursor type, and is supported by all database
                     servers.
                    </p>
                    <p class="para">
                     Passing <strong><code><a href="ibm-db2.constants.php#constant.db2-scrollable">DB2_SCROLLABLE</a></code></strong> specifies a
                     scrollable cursor for a statement resource. Scrollable
                     cursors enable result set rows to be accessed in
                     non-sequential order, but are only supported by
                     IBM DB2 Universal Database databases.
                    </p>
                  </dd>
                
                
                  <dt><code class="parameter">binmode</code></dt>
                  <dd>
                    <p class="para">
                     Passing <strong><code><a href="ibm-db2.constants.php#constant.db2-binary">DB2_BINARY</a></code></strong> specifies that
                     binary data will be returned as is. This is the default
                     mode. This is the equivalent of setting
                     <code class="literal">ibm_db2.binmode=1</code> in <var class="filename">php.ini</var>.
                    </p>
                    <p class="para">
                     Passing <strong><code><a href="ibm-db2.constants.php#constant.db2-convert">DB2_CONVERT</a></code></strong> specifies that
                     binary data will be converted to hexadecimal encoding,
                     and will be returned as such. This is the equivalent of
                     setting <code class="literal">ibm_db2.binmode=2</code> in <var class="filename">php.ini</var>.
                    </p>
                    <p class="para">
                     Passing <strong><code><a href="ibm-db2.constants.php#constant.db2-passthru">DB2_PASSTHRU</a></code></strong> specifies that
                     binary data will be converted to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>. This is the
                     equivalent of setting <code class="literal">ibm_db2.binmode=3</code>
                     in <var class="filename">php.ini</var>.
                    </p>
                  </dd>
                
                
                  <dt><code class="parameter">db2_attr_case</code></dt>
                  <dd>
                    <p class="para">
                     Passing <strong><code><a href="ibm-db2.constants.php#constant.db2-case-lower">DB2_CASE_LOWER</a></code></strong> specifies that
                     column names of the result set are returned in lower case.
                    </p>
                    <p class="para">
                     Passing <strong><code><a href="ibm-db2.constants.php#constant.db2-case-upper">DB2_CASE_UPPER</a></code></strong> specifies that
                     column names of the result set are returned in upper case.
                    </p>
                    <p class="para">
                     Passing <strong><code><a href="ibm-db2.constants.php#constant.db2-case-natural">DB2_CASE_NATURAL</a></code></strong> specifies that
                     column names of the result set are returned in natural
                     case.
                    </p>
                  </dd>
                
                
                 <dt><code class="parameter">deferred_prepare</code></dt>
                 <dd>
                  <p class="para">
                   Passing <strong><code><a href="ibm-db2.constants.php#constant.db2-deferred-prepare-on">DB2_DEFERRED_PREPARE_ON</a></code></strong> turns deferred
                   prepare on for the specified statement resource.
                  </p>
                  <p class="para">
                   Passing <strong><code><a href="ibm-db2.constants.php#constant.db2-deferred-prepare-off">DB2_DEFERRED_PREPARE_OFF</a></code></strong> turns deferred
                   prepare off for the specified statement resource.
                  </p>
                 </dd>
                
              </dl>
            </p>
            <p class="para">
             The following new i5/OS options are available in ibm_db2 version 1.5.1
             and later. These options apply only when running PHP and ibm_db2 natively on i5 systems.
              <dl>
                
                  <dt><code class="parameter">i5_fetch_only</code></dt>
                  <dd>
                    <p class="para">
                     <code class="literal">DB2_I5_FETCH_ON</code> - Cursors are read-only
                     and cannot be used for positioned updates or deletes. This
                     is the default unless <code class="literal">SQL_ATTR_FOR_FETCH_ONLY</code>
                     environment has been set to <code class="literal">SQL_FALSE</code>.
                    </p>
                    <p class="para">
                     <code class="literal">DB2_I5_FETCH_OFF</code> - Cursors can be used
                     for positioned updates and deletes.
                    </p>
                  </dd>
                
               </dl>
            </p>
            <p class="para">
             The following new option is available in ibm_db2 version 1.8.0 and later.
              <dl>
                
                  <dt><code class="parameter">rowcount</code></dt>
                  <dd>
                    <p class="para">
                     <code class="literal">DB2_ROWCOUNT_PREFETCH_ON</code> - Client can request
                     the full row count prior to fetching, which means that
                     <span class="function"><a href="function.db2-num-rows.php" class="function">db2_num_rows()</a></span> returns the number of rows selected
                     even when a <code class="literal">ROLLFORWARD_ONLY</code> cursor is used.
                    </p>
                    <p class="para">
                     <code class="literal">DB2_ROWCOUNT_PREFETCH_OFF</code> - Client cannot request
                     the full row count prior to fetching.
                    </p>
                  </dd>
                
              </dl>
            </p>
            <p class="para">
             The following new options are available in ibm_db2 version 1.7.0 and later.
              <dl>
                
                  <dt><code class="parameter">trusted_user</code></dt>
                  <dd>
                    <p class="para">
                     To switch the user to a trusted user, pass the User ID (String)
                     of the trusted user as the value of this key. This option can
                     be set on a connection resource only. To use this option, trusted
                     context must be enabled on the connection resource.
                    </p>
                  </dd>
                
                
                  <dt><code class="parameter">trusted_password</code></dt>
                  <dd>
                    <p class="para">
                     The password (String) that corresponds to the user specified
                     by the trusted_user key.
                    </p>
                  </dd>
                
               </dl>
            </p>
            <p class="para">
             The following new options are available in ibm_db2 version 1.6.0 and later.
             These options provide useful tracking information that can be accessed during
             execution with <span class="function"><a href="function.db2-get-option.php" class="function">db2_get_option()</a></span>.
             <blockquote class="note"><p><strong class="note">Note</strong>: 
              <p class="para">
               When the value in each option is being set, some servers might not handle
               the entire length provided and might truncate the value.
              </p>
              <p class="para">
               To ensure that the data specified in each option is converted correctly
               when transmitted to a host system, use only the characters A through Z,
               0 through 9, and the underscore (_) or period (.).
              </p>
             </p></blockquote>
             <dl>
              
               <dt><code class="parameter">userid</code></dt>
               <dd>
                <p class="para">
                 <code class="literal">SQL_ATTR_INFO_USERID</code> - A pointer to a null-terminated
                 character string used to identify the client user ID sent to the host
                 database server when using DB2 Connect.
                 <blockquote class="note"><p><strong class="note">Note</strong>: 
                  <p class="para">
                   DB2 for z/OS and OS/390 servers support up to a length of 16 characters.
                   This user-id is not to be confused with the authentication user-id, it is for
                   identification purposes only and is not used for any authorization.
                  </p>
                 </p></blockquote>
                </p>
               </dd>
              
              
               <dt><code class="parameter">acctstr</code></dt>
               <dd>
                <p class="para">
                 <code class="literal">SQL_ATTR_INFO_ACCTSTR</code> - A pointer to a null-terminated
                 character string used to identify the client accounting string sent to the
                 host database server when using DB2 Connect.
                 <blockquote class="note"><p><strong class="note">Note</strong>: 
                  <p class="para">
                   DB2 for z/OS and OS/390 servers support up to a length of 200 characters.
                  </p>
                 </p></blockquote>
                </p>
               </dd>
              
              
               <dt><code class="parameter">applname</code></dt>
               <dd>
                <p class="para">
                 <code class="literal">SQL_ATTR_INFO_APPLNAME</code> - A pointer to a null-terminated
                 character string used to identify the client application name sent to the
                 host database server when using DB2 Connect.
                 <blockquote class="note"><p><strong class="note">Note</strong>: 
                  <p class="para">
                   DB2 for z/OS and OS/390 servers support up to a length of 32 characters.
                  </p>
                 </p></blockquote>
                </p>
               </dd>
              
              
               <dt><code class="parameter">wrkstnname</code></dt>
               <dd>
                <p class="para">
                 <code class="literal">SQL_ATTR_INFO_WRKSTNNAME</code> - A pointer to a null-terminated
                 character string used to identify the client workstation name sent to the
                 host database server when using DB2 Connect.
                 <blockquote class="note"><p><strong class="note">Note</strong>: 
                  <p class="para">
                   DB2 for z/OS and OS/390 servers support up to a length of 18 characters.
                  </p>
                 </p></blockquote>
                </p>
               </dd>
              
             </dl>
            </p>
          </dd>
        
        
          <dt><code class="parameter">type</code></dt>
          <dd>
            <p class="para">
             An integer value that specifies the type of resource that was
             passed into the function. The type of resource and this value
             must correspond.
            </p>
            <p class="para">
             Passing <code class="literal">1</code> as the value specifies that
             a connection resource has been passed into the function.
            </p>
            <p class="para">
             Passing any integer not equal to <code class="literal">1</code> as
             the value specifies that a statement resource has been
             passed into the function.
            </p>
          </dd>
        
      </dl>
    </p>
    <p class="para">
    </p>
    <p class="para">
     The following table specifies which options are compatible with
     the available resource types:
      <table class="doctable table">
        <caption><strong>Resource-Parameter Matrix</strong></caption>
        
          <col style="text-align: center;" />
          <col style="text-align: center;" />
          <col style="text-align: center;" />
          <col style="text-align: center;" />
          <col style="text-align: center;" />

          <thead>
            <tr>
              <th>Key</th>
              <th>Value</th>
              <th colspan="3">Resource Type</th>
            </tr>

          </thead>


          <tbody class="tbody">
            <tr>
              <td class="empty">&nbsp;</td><td class="empty">&nbsp;</td><td>Connection</td>
              <td>Statement</td>
              <td>Result Set</td>
            </tr>

            <tr>
              <td>autocommit</td>
              <td><strong><code><a href="ibm-db2.constants.php#constant.db2-autocommit-on">DB2_AUTOCOMMIT_ON</a></code></strong></td>
              <td>X</td>
              <td>-</td>
              <td>-</td>
            </tr>

            <tr>
              <td>autocommit</td>
              <td><strong><code><a href="ibm-db2.constants.php#constant.db2-autocommit-off">DB2_AUTOCOMMIT_OFF</a></code></strong></td>
              <td>X</td>
              <td>-</td>
              <td>-</td>
            </tr>

            <tr>
              <td>cursor</td>
              <td><strong><code><a href="ibm-db2.constants.php#constant.db2-scrollable">DB2_SCROLLABLE</a></code></strong></td>
              <td>-</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>cursor</td>
              <td><strong><code><a href="ibm-db2.constants.php#constant.db2-forward-only">DB2_FORWARD_ONLY</a></code></strong></td>
              <td>-</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>binmode</td>
              <td><strong><code><a href="ibm-db2.constants.php#constant.db2-binary">DB2_BINARY</a></code></strong></td>
              <td>X</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>binmode</td>
              <td><strong><code><a href="ibm-db2.constants.php#constant.db2-convert">DB2_CONVERT</a></code></strong></td>
              <td>X</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>binmode</td>
              <td><strong><code><a href="ibm-db2.constants.php#constant.db2-passthru">DB2_PASSTHRU</a></code></strong></td>
              <td>X</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>db2_attr_case</td>
              <td><strong><code><a href="ibm-db2.constants.php#constant.db2-case-lower">DB2_CASE_LOWER</a></code></strong></td>
              <td>X</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>db2_attr_case</td>
              <td><strong><code><a href="ibm-db2.constants.php#constant.db2-case-upper">DB2_CASE_UPPER</a></code></strong></td>
              <td>X</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>db2_attr_case</td>
              <td><strong><code><a href="ibm-db2.constants.php#constant.db2-case-natural">DB2_CASE_NATURAL</a></code></strong></td>
              <td>X</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>deferred_prepare</td>
              <td><strong><code><a href="ibm-db2.constants.php#constant.db2-deferred-prepare-on">DB2_DEFERRED_PREPARE_ON</a></code></strong></td>
              <td>-</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>deferred_prepare</td>
              <td><strong><code><a href="ibm-db2.constants.php#constant.db2-deferred-prepare-off">DB2_DEFERRED_PREPARE_OFF</a></code></strong></td>
              <td>-</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>i5_fetch_only</td>
              <td><code class="literal">DB2_I5_FETCH_ON</code></td>
              <td>-</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>i5_fetch_only</td>
              <td><code class="literal">DB2_I5_FETCH_OFF</code></td>
              <td>-</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>rowcount</td>
              <td><code class="literal">DB2_ROWCOUNT_PREFETCH_ON</code></td>
              <td>-</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>rowcount</td>
              <td><code class="literal">DB2_ROWCOUNT_PREFETCH_OFF</code></td>
              <td>-</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>trusted_user</td>
              <td><code class="literal">&lt;USER NAME&gt; (String)</code></td>
              <td>X</td>
              <td>-</td>
              <td>-</td>
            </tr>

            <tr>
              <td>trusted_password</td>
              <td><code class="literal">&lt;PASSWORD&gt; (String)</code></td>
              <td>X</td>
              <td>-</td>
              <td>-</td>
            </tr>

            <tr>
              <td>userid</td>
              <td><code class="literal">SQL_ATTR_INFO_USERID</code></td>
              <td>X</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>acctstr</td>
              <td><code class="literal">SQL_ATTR_INFO_ACCTSTR</code></td>
              <td>X</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>applname</td>
              <td><code class="literal">SQL_ATTR_INFO_APPLNAME</code></td>
              <td>X</td>
              <td>X</td>
              <td>-</td>
            </tr>

            <tr>
              <td>wrkstnname</td>
              <td><code class="literal">SQL_ATTR_INFO_WRKSTNNAME</code></td>
              <td>X</td>
              <td>X</td>
              <td>-</td>
            </tr>

          </tbody>
        
      </table>

    </p>
  </div>


  <div class="refsect1 returnvalues" id="refsect1-function.db2-set-option-returnvalues">
    <h3 class="title">Return Values</h3>
    <p class="para">
     Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
    </p>
  </div>

  

  
  <div class="refsect1 examples" id="refsect1-function.db2-set-option-examples">
    <h3 class="title">Examples</h3>
    <p class="para">

      <div class="example" id="example-1385">
        <p><strong>Example #1 Setting one parameter with a connection resource</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Database Connection Parameters */<br /></span><span style="color: #0000BB">$database </span><span style="color: #007700">= </span><span style="color: #DD0000">'SAMPLE'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$hostname </span><span style="color: #007700">= </span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$port </span><span style="color: #007700">= </span><span style="color: #0000BB">50000</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$protocol </span><span style="color: #007700">= </span><span style="color: #DD0000">'TCPIP'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Connection String */<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"DRIVER={IBM DB2 ODBC DRIVER};DATABASE=</span><span style="color: #0000BB">$database</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"HOSTNAME=</span><span style="color: #0000BB">$hostname</span><span style="color: #DD0000">;PORT=</span><span style="color: #0000BB">$port</span><span style="color: #DD0000">;PROTOCOL=</span><span style="color: #0000BB">$protocol</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"UID=</span><span style="color: #0000BB">$username</span><span style="color: #DD0000">;PWD=</span><span style="color: #0000BB">$password</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Obtain Connection Resource */<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn_string</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create the associative options array with valid key-value pairs */<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'autocommit' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_AUTOCOMMIT_ON</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Call the function using the correct resource, options array, and type values */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Check if all options could be set correctly */<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)<br />{<br />  echo </span><span style="color: #DD0000">'Options Set Successfully'</span><span style="color: #007700">;<br />}<br />else<br />{<br />  echo </span><span style="color: #DD0000">'Could Not Set Options'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

        <div class="example-contents"><p>The above example will output:</p></div>
        <div class="example-contents screen"><div class="examplescode"><pre class="examplescode">Options Set Successfully</pre>
</div></div>
      </div>

      <div class="example" id="example-1386">
        <p><strong>Example #2 Setting multiple parameters with a connection resource</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Database Connection Parameters */<br /></span><span style="color: #0000BB">$database </span><span style="color: #007700">= </span><span style="color: #DD0000">'SAMPLE'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$hostname </span><span style="color: #007700">= </span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$port </span><span style="color: #007700">= </span><span style="color: #0000BB">50000</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$protocol </span><span style="color: #007700">= </span><span style="color: #DD0000">'TCPIP'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Connection String */<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"DRIVER={IBM DB2 ODBC DRIVER};DATABASE=</span><span style="color: #0000BB">$database</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"HOSTNAME=</span><span style="color: #0000BB">$hostname</span><span style="color: #DD0000">;PORT=</span><span style="color: #0000BB">$port</span><span style="color: #DD0000">;PROTOCOL=</span><span style="color: #0000BB">$protocol</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"UID=</span><span style="color: #0000BB">$username</span><span style="color: #DD0000">;PWD=</span><span style="color: #0000BB">$password</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Obtain Connection Resource */<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn_string</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create the associative options array with valid key-value pairs */<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'autocommit' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_AUTOCOMMIT_OFF</span><span style="color: #007700">,<br />                    </span><span style="color: #DD0000">'binmode' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_PASSTHRU</span><span style="color: #007700">,<br />              </span><span style="color: #DD0000">'db2_attr_case' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_CASE_UPPER</span><span style="color: #007700">,<br />                     </span><span style="color: #DD0000">'cursor' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_SCROLLABLE</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Call the function using the correct resource, options array, and type values */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Check if all options could be set correctly */<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)<br />{<br />  echo </span><span style="color: #DD0000">'Options Set Successfully'</span><span style="color: #007700">;<br />}<br />else<br />{<br />  echo </span><span style="color: #DD0000">'Could Not Set Options'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

        <div class="example-contents"><p>The above example will output:</p></div>
        <div class="example-contents screen"><div class="examplescode"><pre class="examplescode">Options Set Successfully</pre>
</div></div>
      </div>

      
      <div class="example" id="example-1387">
        <p><strong>Example #3 Setting multiple parameters with an invalid key</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Database Connection Parameters */<br /></span><span style="color: #0000BB">$database </span><span style="color: #007700">= </span><span style="color: #DD0000">'SAMPLE'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$hostname </span><span style="color: #007700">= </span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$port </span><span style="color: #007700">= </span><span style="color: #0000BB">50000</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$protocol </span><span style="color: #007700">= </span><span style="color: #DD0000">'TCPIP'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Connection String */<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"DRIVER={IBM DB2 ODBC DRIVER};DATABASE=</span><span style="color: #0000BB">$database</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"HOSTNAME=</span><span style="color: #0000BB">$hostname</span><span style="color: #DD0000">;PORT=</span><span style="color: #0000BB">$port</span><span style="color: #DD0000">;PROTOCOL=</span><span style="color: #0000BB">$protocol</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"UID=</span><span style="color: #0000BB">$username</span><span style="color: #DD0000">;PWD=</span><span style="color: #0000BB">$password</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Obtain Connection Resource */<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn_string</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create the associative options array with valid key-value pairs */<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'autocommit' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_AUTOCOMMIT_OFF</span><span style="color: #007700">,<br />             </span><span style="color: #DD0000">'MY_INVALID_KEY' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_PASSTHRU</span><span style="color: #007700">,<br />              </span><span style="color: #DD0000">'db2_attr_case' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_CASE_UPPER</span><span style="color: #007700">,<br />                     </span><span style="color: #DD0000">'cursor' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_SCROLLABLE</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Call the function using the correct resource, options array, and type values */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Check if all options could be set correctly */<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)<br />{<br />  echo </span><span style="color: #DD0000">'Options Set Successfully'</span><span style="color: #007700">;<br />}<br />else<br />{<br />  echo </span><span style="color: #DD0000">'Could Not Set Options'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

        <div class="example-contents"><p>The above example will output:</p></div>
        <div class="example-contents screen"><div class="examplescode"><pre class="examplescode">Could Not Set Options</pre>
</div></div>
      </div>

      
      <div class="example" id="example-1388">
        <p><strong>Example #4 Setting multiple parameters with an invalid value</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Database Connection Parameters */<br /></span><span style="color: #0000BB">$database </span><span style="color: #007700">= </span><span style="color: #DD0000">'SAMPLE'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$hostname </span><span style="color: #007700">= </span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$port </span><span style="color: #007700">= </span><span style="color: #0000BB">50000</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$protocol </span><span style="color: #007700">= </span><span style="color: #DD0000">'TCPIP'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Connection String */<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"DRIVER={IBM DB2 ODBC DRIVER};DATABASE=</span><span style="color: #0000BB">$database</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"HOSTNAME=</span><span style="color: #0000BB">$hostname</span><span style="color: #DD0000">;PORT=</span><span style="color: #0000BB">$port</span><span style="color: #DD0000">;PROTOCOL=</span><span style="color: #0000BB">$protocol</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"UID=</span><span style="color: #0000BB">$username</span><span style="color: #DD0000">;PWD=</span><span style="color: #0000BB">$password</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Obtain Connection Resource */<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn_string</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create the associative options array with valid key-value pairs */<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'autocommit' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_AUTOCOMMIT_OFF</span><span style="color: #007700">,<br />                    </span><span style="color: #DD0000">'binmode' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'INVALID_VALUE'</span><span style="color: #007700">,<br />              </span><span style="color: #DD0000">'db2_attr_case' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_CASE_UPPER</span><span style="color: #007700">,<br />                     </span><span style="color: #DD0000">'cursor' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_SCROLLABLE</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Call the function using the correct resource, options array, and type values */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Check if all options could be set correctly */<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)<br />{<br />  echo </span><span style="color: #DD0000">'Options Set Successfully'</span><span style="color: #007700">;<br />}<br />else<br />{<br />  echo </span><span style="color: #DD0000">'Could Not Set Options'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

        <div class="example-contents"><p>The above example will output:</p></div>
        <div class="example-contents screen"><div class="examplescode"><pre class="examplescode">Could Not Set Options</pre>
</div></div>
      </div>

      <div class="example" id="example-1389">
        <p><strong>Example #5 Setting multiple parameters with a connection resource and the wrong type</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Database Connection Parameters */<br /></span><span style="color: #0000BB">$database </span><span style="color: #007700">= </span><span style="color: #DD0000">'SAMPLE'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$hostname </span><span style="color: #007700">= </span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$port </span><span style="color: #007700">= </span><span style="color: #0000BB">50000</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$protocol </span><span style="color: #007700">= </span><span style="color: #DD0000">'TCPIP'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Connection String */<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"DRIVER={IBM DB2 ODBC DRIVER};DATABASE=</span><span style="color: #0000BB">$database</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"HOSTNAME=</span><span style="color: #0000BB">$hostname</span><span style="color: #DD0000">;PORT=</span><span style="color: #0000BB">$port</span><span style="color: #DD0000">;PROTOCOL=</span><span style="color: #0000BB">$protocol</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"UID=</span><span style="color: #0000BB">$username</span><span style="color: #DD0000">;PWD=</span><span style="color: #0000BB">$password</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Obtain Connection Resource */<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn_string</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create the associative options array with valid key-value pairs */<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'autocommit' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_AUTOCOMMIT_OFF</span><span style="color: #007700">,<br />                    </span><span style="color: #DD0000">'binmode' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_PASSTHRU</span><span style="color: #007700">,<br />              </span><span style="color: #DD0000">'db2_attr_case' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_CASE_UPPER</span><span style="color: #007700">,<br />                     </span><span style="color: #DD0000">'cursor' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_SCROLLABLE</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Call the function using the correct resource, options array, and the wrong type value */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Check if all options could be set correctly */<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)<br />{<br />  echo </span><span style="color: #DD0000">'Options Set Successfully'</span><span style="color: #007700">;<br />}<br />else<br />{<br />  echo </span><span style="color: #DD0000">'Could Not Set Options'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

        <div class="example-contents"><p>The above example will output:</p></div>
        <div class="example-contents screen"><div class="examplescode"><pre class="examplescode">Could Not Set Options</pre>
</div></div>
      </div>

      <div class="example" id="example-1390">
        <p><strong>Example #6 Setting multiple parameters with the wrong resource</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Database Connection Parameters */<br /></span><span style="color: #0000BB">$database </span><span style="color: #007700">= </span><span style="color: #DD0000">'SAMPLE'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$hostname </span><span style="color: #007700">= </span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$port </span><span style="color: #007700">= </span><span style="color: #0000BB">50000</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$protocol </span><span style="color: #007700">= </span><span style="color: #DD0000">'TCPIP'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Connection String */<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"DRIVER={IBM DB2 ODBC DRIVER};DATABASE=</span><span style="color: #0000BB">$database</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"HOSTNAME=</span><span style="color: #0000BB">$hostname</span><span style="color: #DD0000">;PORT=</span><span style="color: #0000BB">$port</span><span style="color: #DD0000">;PROTOCOL=</span><span style="color: #0000BB">$protocol</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"UID=</span><span style="color: #0000BB">$username</span><span style="color: #DD0000">;PWD=</span><span style="color: #0000BB">$password</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Obtain Connection Resource */<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn_string</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create the associative options array with valid key-value pairs */<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'autocommit' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_AUTOCOMMIT_OFF</span><span style="color: #007700">,<br />                    </span><span style="color: #DD0000">'binmode' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_PASSTHRU</span><span style="color: #007700">,<br />              </span><span style="color: #DD0000">'db2_attr_case' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_CASE_UPPER</span><span style="color: #007700">,<br />                     </span><span style="color: #DD0000">'cursor' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_SCROLLABLE</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT * FROM EMPLOYEE'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Call the function using the wrong resource, and the correct options array, and type values */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Check if all options could be set correctly */<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)<br />{<br />  echo </span><span style="color: #DD0000">'Options Set Successfully'</span><span style="color: #007700">;<br />}<br />else<br />{<br />  echo </span><span style="color: #DD0000">'Could Not Set Options'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

        <div class="example-contents"><p>The above example will output:</p></div>
        <div class="example-contents screen"><div class="examplescode"><pre class="examplescode">Could Not Set Options</pre>
</div></div>
      </div>

      <div class="example" id="example-1391">
        <p><strong>Example #7 Putting it all together</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Database Connection Parameters */<br /></span><span style="color: #0000BB">$database </span><span style="color: #007700">= </span><span style="color: #DD0000">'SAMPLE'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$hostname </span><span style="color: #007700">= </span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$port </span><span style="color: #007700">= </span><span style="color: #0000BB">50000</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$protocol </span><span style="color: #007700">= </span><span style="color: #DD0000">'TCPIP'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Connection String */<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"DRIVER={IBM DB2 ODBC DRIVER};DATABASE=</span><span style="color: #0000BB">$database</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"HOSTNAME=</span><span style="color: #0000BB">$hostname</span><span style="color: #DD0000">;PORT=</span><span style="color: #0000BB">$port</span><span style="color: #DD0000">;PROTOCOL=</span><span style="color: #0000BB">$protocol</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">.= </span><span style="color: #DD0000">"UID=</span><span style="color: #0000BB">$username</span><span style="color: #DD0000">;PWD=</span><span style="color: #0000BB">$password</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Obtain Connection Resource */<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn_string</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create the associative options array with valid key-value pairs */<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'db2_attr_case' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_CASE_LOWER</span><span style="color: #007700">,<br />                        </span><span style="color: #DD0000">'cursor' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_SCROLLABLE</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT * FROM EMPLOYEE WHERE EMPNO = ? OR EMPNO = ?'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Call the function using the correct resource, options array, and type values */<br /></span><span style="color: #0000BB">$option_result </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'000130'</span><span style="color: #007700">, </span><span style="color: #DD0000">'000140'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">/* Get Row 2 before Row 1 since Scrollable Cursor */<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">db2_fetch_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br />print </span><span style="color: #DD0000">'&lt;br /&gt;&lt;br /&gt;'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">db2_fetch_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

        <div class="example-contents"><p>The above example will output:</p></div>
        <div class="example-contents screen"><div class="examplescode"><pre class="examplescode">Array
(
    [empno] =&gt; 000140
    [firstnme] =&gt; HEATHER
    [midinit] =&gt; A
    [lastname] =&gt; NICHOLLS
    [workdept] =&gt; C01
    [phoneno] =&gt; 1793
    [hiredate] =&gt; 1976-12-15
    [job] =&gt; ANALYST
    [edlevel] =&gt; 18
    [sex] =&gt; F
    [birthdate] =&gt; 1946-01-19
    [salary] =&gt; 28420.00
    [bonus] =&gt; 600.00
    [comm] =&gt; 2274.00
)

Array
(
    [empno] =&gt; 000130
    [firstnme] =&gt; DELORES
    [midinit] =&gt; M
    [lastname] =&gt; QUINTANA
    [workdept] =&gt; C01
    [phoneno] =&gt; 4578
    [hiredate] =&gt; 1971-07-28
    [job] =&gt; ANALYST
    [edlevel] =&gt; 16
    [sex] =&gt; F
    [birthdate] =&gt; 1925-09-15
    [salary] =&gt; 23800.00
    [bonus] =&gt; 500.00
    [comm] =&gt; 1904.00
)</pre>
</div></div>
      </div>
      <div class="example" id="example-1392">
        <p><strong>Example #8 i5/OS cursors are read-only</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />  $conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">""</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">, array(</span><span style="color: #DD0000">"i5_lib"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"nobody"</span><span style="color: #007700">));<br />  </span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'select * from names where first = ?'</span><span style="color: #007700">);<br />  </span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #DD0000">"first2"</span><span style="color: #007700">;<br />  </span><span style="color: #0000BB">db2_bind_param</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"name"</span><span style="color: #007700">, </span><span style="color: #0000BB">DB2_PARAM_IN</span><span style="color: #007700">);<br />  </span><span style="color: #0000BB">$options </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"i5_fetch_only"</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">DB2_I5_FETCH_ON</span><span style="color: #007700">);<br />  </span><span style="color: #0000BB">db2_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />  if (</span><span style="color: #0000BB">db2_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">)) {<br />    while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">)) {<br />      echo </span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]}</span><span style="color: #DD0000"> </span><span style="color: #007700">{</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />    }<br />  }<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

        <div class="example-contents"><p>The above example will output:</p></div>
        <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">first2 last2</pre>
</div>
        </div>
      </div>
    </p>
  </div>

  <div class="refsect1 seealso" id="refsect1-function.db2-set-option-seealso">
    <h3 class="title">See Also</h3>
    <p class="para">
      <ul class="simplelist">
        <li><span class="function"><a href="function.db2-connect.php" class="function" rel="rdfs-seeAlso">db2_connect()</a> - Returns a connection to a database</span></li>
        <li><span class="function"><a href="function.db2-pconnect.php" class="function" rel="rdfs-seeAlso">db2_pconnect()</a> - Returns a persistent connection to a database</span></li>
        <li><span class="function"><a href="function.db2-exec.php" class="function" rel="rdfs-seeAlso">db2_exec()</a> - Executes an SQL statement directly</span></li>
        <li><span class="function"><a href="function.db2-prepare.php" class="function" rel="rdfs-seeAlso">db2_prepare()</a> - Prepares an SQL statement to be executed</span></li>
        <li><span class="function"><a href="function.db2-cursor-type.php" class="function" rel="rdfs-seeAlso">db2_cursor_type()</a> - Returns the cursor type used by a statement resource</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ibm_db2/functions/db2-set-option.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.db2-set-option%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.db2-set-option&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.db2-set-option.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="70903">  <div class="votes">
    <div id="Vu70903">
    <a href="/manual/vote-note.php?id=70903&amp;page=function.db2-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70903">
    <a href="/manual/vote-note.php?id=70903&amp;page=function.db2-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70903" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#70903" class="name">
  <strong class="user"><em>rtejpar at ca dot ibm dot com</em></strong></a><a class="genanchor" href="#70903"> &para;</a><div class="date" title="2006-11-03 07:45"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70903">
<div class="phpcode"><code><span class="html">Examples 3 and 4 should output 'Options Set Successfully.'  This is because, only a single option's key/value is set incorrectly (other options are still correct), hence the function must return successfully. (Instead a PHP warning will most probably be issued).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.db2-set-option&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.db2-set-option.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ibm-db2.php">IBM DB2 Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.db2-autocommit.php" title="db2_&#8203;autocommit">db2_&#8203;autocommit</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-bind-param.php" title="db2_&#8203;bind_&#8203;param">db2_&#8203;bind_&#8203;param</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-client-info.php" title="db2_&#8203;client_&#8203;info">db2_&#8203;client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-close.php" title="db2_&#8203;close">db2_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-column-privileges.php" title="db2_&#8203;column_&#8203;privileges">db2_&#8203;column_&#8203;privileges</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-columns.php" title="db2_&#8203;columns">db2_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-commit.php" title="db2_&#8203;commit">db2_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-conn-error.php" title="db2_&#8203;conn_&#8203;error">db2_&#8203;conn_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-conn-errormsg.php" title="db2_&#8203;conn_&#8203;errormsg">db2_&#8203;conn_&#8203;errormsg</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-connect.php" title="db2_&#8203;connect">db2_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-cursor-type.php" title="db2_&#8203;cursor_&#8203;type">db2_&#8203;cursor_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-escape-string.php" title="db2_&#8203;escape_&#8203;string">db2_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-exec.php" title="db2_&#8203;exec">db2_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-execute.php" title="db2_&#8203;execute">db2_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-array.php" title="db2_&#8203;fetch_&#8203;array">db2_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-assoc.php" title="db2_&#8203;fetch_&#8203;assoc">db2_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-both.php" title="db2_&#8203;fetch_&#8203;both">db2_&#8203;fetch_&#8203;both</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-object.php" title="db2_&#8203;fetch_&#8203;object">db2_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-row.php" title="db2_&#8203;fetch_&#8203;row">db2_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-display-size.php" title="db2_&#8203;field_&#8203;display_&#8203;size">db2_&#8203;field_&#8203;display_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-name.php" title="db2_&#8203;field_&#8203;name">db2_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-num.php" title="db2_&#8203;field_&#8203;num">db2_&#8203;field_&#8203;num</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-precision.php" title="db2_&#8203;field_&#8203;precision">db2_&#8203;field_&#8203;precision</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-scale.php" title="db2_&#8203;field_&#8203;scale">db2_&#8203;field_&#8203;scale</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-type.php" title="db2_&#8203;field_&#8203;type">db2_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-width.php" title="db2_&#8203;field_&#8203;width">db2_&#8203;field_&#8203;width</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-foreign-keys.php" title="db2_&#8203;foreign_&#8203;keys">db2_&#8203;foreign_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-free-result.php" title="db2_&#8203;free_&#8203;result">db2_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-free-stmt.php" title="db2_&#8203;free_&#8203;stmt">db2_&#8203;free_&#8203;stmt</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-get-option.php" title="db2_&#8203;get_&#8203;option">db2_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-last-insert-id.php" title="db2_&#8203;last_&#8203;insert_&#8203;id">db2_&#8203;last_&#8203;insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-lob-read.php" title="db2_&#8203;lob_&#8203;read">db2_&#8203;lob_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-next-result.php" title="db2_&#8203;next_&#8203;result">db2_&#8203;next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-num-fields.php" title="db2_&#8203;num_&#8203;fields">db2_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-num-rows.php" title="db2_&#8203;num_&#8203;rows">db2_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-pclose.php" title="db2_&#8203;pclose">db2_&#8203;pclose</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-pconnect.php" title="db2_&#8203;pconnect">db2_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-prepare.php" title="db2_&#8203;prepare">db2_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-primary-keys.php" title="db2_&#8203;primary_&#8203;keys">db2_&#8203;primary_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-procedure-columns.php" title="db2_&#8203;procedure_&#8203;columns">db2_&#8203;procedure_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-procedures.php" title="db2_&#8203;procedures">db2_&#8203;procedures</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-result.php" title="db2_&#8203;result">db2_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-rollback.php" title="db2_&#8203;rollback">db2_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-server-info.php" title="db2_&#8203;server_&#8203;info">db2_&#8203;server_&#8203;info</a>
                        </li>
                                                <li class="current">
                            <a href="function.db2-set-option.php" title="db2_&#8203;set_&#8203;option">db2_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-special-columns.php" title="db2_&#8203;special_&#8203;columns">db2_&#8203;special_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-statistics.php" title="db2_&#8203;statistics">db2_&#8203;statistics</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-stmt-error.php" title="db2_&#8203;stmt_&#8203;error">db2_&#8203;stmt_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-stmt-errormsg.php" title="db2_&#8203;stmt_&#8203;errormsg">db2_&#8203;stmt_&#8203;errormsg</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-table-privileges.php" title="db2_&#8203;table_&#8203;privileges">db2_&#8203;table_&#8203;privileges</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-tables.php" title="db2_&#8203;tables">db2_&#8203;tables</a>
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
