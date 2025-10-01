<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli_stmt::bind_param - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli-stmt.bind-param.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli-stmt.bind-param.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-stmt.bind-param.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli-stmt.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli-stmt.attr-set.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli-stmt.bind-result.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-stmt.bind-param.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli-stmt.bind-param.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli-stmt.bind-param.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli-stmt.bind-param.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli-stmt.bind-param.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli-stmt.bind-param.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli-stmt.bind-param.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli-stmt.bind-param.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli-stmt.bind-param.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli-stmt.bind-param.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli-stmt.bind-param.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binds variables to a prepared statement as parameters" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli_stmt::bind_param - Manual" />
<meta name="twitter:description" content="Binds variables to a prepared statement as parameters" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli_stmt::bind_param - Manual" />
<meta itemprop="description" content="Binds variables to a prepared statement as parameters" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binds variables to a prepared statement as parameters" />

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
        <a href="mysqli-stmt.bind-result.php">
          mysqli_stmt::bind_result &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli-stmt.attr-set.php">
          &laquo; mysqli_stmt::attr_set        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      <li><a href='class.mysqli-stmt.php'>mysqli_stmt</a></li>      </ul>
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
            <option value='en/mysqli-stmt.bind-param.php' selected="selected">English</option>
            <option value='de/mysqli-stmt.bind-param.php'>German</option>
            <option value='es/mysqli-stmt.bind-param.php'>Spanish</option>
            <option value='fr/mysqli-stmt.bind-param.php'>French</option>
            <option value='it/mysqli-stmt.bind-param.php'>Italian</option>
            <option value='ja/mysqli-stmt.bind-param.php'>Japanese</option>
            <option value='pt_BR/mysqli-stmt.bind-param.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli-stmt.bind-param.php'>Russian</option>
            <option value='tr/mysqli-stmt.bind-param.php'>Turkish</option>
            <option value='uk/mysqli-stmt.bind-param.php'>Ukrainian</option>
            <option value='zh/mysqli-stmt.bind-param.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli-stmt.bind-param" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli_stmt::bind_param</h1>
  <h1 class="refname">mysqli_stmt_bind_param</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli_stmt::bind_param</span> -- <span class="refname">mysqli_stmt_bind_param</span> &mdash; <span class="dc-title">Binds variables to a prepared statement as parameters</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli-stmt.bind-param-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli_stmt::bind_param</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$types</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&$var</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&...$vars</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_stmt_bind_param</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.mysqli-stmt.php" class="type mysqli_stmt">mysqli_stmt</a></span> <code class="parameter">$statement</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$types</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&$var</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&...$vars</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Bind variables for the parameter markers in the SQL statement prepared by
   <span class="function"><a href="mysqli.prepare.php" class="function">mysqli_prepare()</a></span> or <span class="function"><a href="mysqli-stmt.prepare.php" class="function">mysqli_stmt_prepare()</a></span>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If data size of a variable exceeds max. allowed packet size
    (max_allowed_packet), you have to specify <code class="literal">b</code> in
    <code class="parameter">types</code> and use
    <span class="function"><a href="mysqli-stmt.send-long-data.php" class="function">mysqli_stmt_send_long_data()</a></span> to send the data in packets.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
      Care must be taken when using <span class="function"><strong>mysqli_stmt_bind_param()</strong></span> in conjunction
      with <span class="function"><a href="function.call-user-func-array.php" class="function">call_user_func_array()</a></span>. Note that <span class="function"><strong>mysqli_stmt_bind_param()</strong></span>
      requires parameters to be passed by reference, whereas <span class="function"><a href="function.call-user-func-array.php" class="function">call_user_func_array()</a></span>
      can accept as a parameter a list of variables that can represent references or values.
    </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli-stmt.bind-param-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">statement</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli-stmt.php" class="classname">mysqli_stmt</a></span> object
returned by <span class="function"><a href="mysqli.stmt-init.php" class="function">mysqli_stmt_init()</a></span>.</p></dd>
    
     <dt><code class="parameter">types</code></dt>
     <dd>
      <p class="para">
       A string that contains one or more characters which specify the types
       for the corresponding bind variables:
       <table id="mysqli-stmt.bind-param.parameters" class="doctable table">
        <caption><strong>Type specification chars</strong></caption>
        
         <thead>
          <tr>
           <th>Character</th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td>i</td>
           <td>corresponding variable has type <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
          </tr>

          <tr>
           <td>d</td>
           <td>corresponding variable has type <span class="type"><a href="language.types.float.php" class="type float">float</a></span></td>
          </tr>

          <tr>
           <td>s</td>
           <td>corresponding variable has type <span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          </tr>

          <tr>
           <td>b</td>
           <td>corresponding variable is a blob and will be sent in packets</td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">var</code></dt>
     <dt><code class="parameter">vars</code></dt>
     <dd>
      <p class="para">
       The number of variables and length of string 
       <code class="parameter">types</code> must match the parameters in the statement.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli-stmt.bind-param-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-mysqli-stmt.bind-param-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If mysqli error reporting is enabled (<strong><code><a href="mysqli.constants.php#constant.mysqli-report-error">MYSQLI_REPORT_ERROR</a></code></strong>) and the requested operation fails,
a warning is generated. If, in addition, the mode is set to <strong><code><a href="mysqli.constants.php#constant.mysqli-report-strict">MYSQLI_REPORT_STRICT</a></code></strong>,
a <span class="classname"><a href="class.mysqli-sql-exception.php" class="classname">mysqli_sql_exception</a></span> is thrown instead.</p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli-stmt.bind-param-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1620">
   <p><strong>Example #1 <span class="methodname"><strong>mysqli_stmt::bind_param()</strong></span> example</strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'my_user'</span><span style="color: #007700">, </span><span style="color: #DD0000">'my_password'</span><span style="color: #007700">, </span><span style="color: #DD0000">'world'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO CountryLanguage VALUES (?, ?, ?, ?)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_param</span><span style="color: #007700">(</span><span style="color: #DD0000">'sssd'</span><span style="color: #007700">, </span><span style="color: #0000BB">$code</span><span style="color: #007700">, </span><span style="color: #0000BB">$language</span><span style="color: #007700">, </span><span style="color: #0000BB">$official</span><span style="color: #007700">, </span><span style="color: #0000BB">$percent</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$code </span><span style="color: #007700">= </span><span style="color: #DD0000">'DEU'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$language </span><span style="color: #007700">= </span><span style="color: #DD0000">'Bavarian'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$official </span><span style="color: #007700">= </span><span style="color: #DD0000">"F"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$percent </span><span style="color: #007700">= </span><span style="color: #0000BB">11.2</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d row inserted.\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">affected_rows</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Clean up table CountryLanguage */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DELETE FROM CountryLanguage WHERE Language='Bavarian'"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d row deleted.\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">affected_rows</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <div class="example-contents"><p>Procedural style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'my_user'</span><span style="color: #007700">, </span><span style="color: #DD0000">'my_password'</span><span style="color: #007700">, </span><span style="color: #DD0000">'world'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"INSERT INTO CountryLanguage VALUES (?, ?, ?, ?)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">mysqli_stmt_bind_param</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #DD0000">'sssd'</span><span style="color: #007700">, </span><span style="color: #0000BB">$code</span><span style="color: #007700">, </span><span style="color: #0000BB">$language</span><span style="color: #007700">, </span><span style="color: #0000BB">$official</span><span style="color: #007700">, </span><span style="color: #0000BB">$percent</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$code </span><span style="color: #007700">= </span><span style="color: #DD0000">'DEU'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$language </span><span style="color: #007700">= </span><span style="color: #DD0000">'Bavarian'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$official </span><span style="color: #007700">= </span><span style="color: #DD0000">"F"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$percent </span><span style="color: #007700">= </span><span style="color: #0000BB">11.2</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">mysqli_stmt_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d row inserted.\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">mysqli_stmt_affected_rows</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">/* Clean up table CountryLanguage */<br /></span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"DELETE FROM CountryLanguage WHERE Language='Bavarian'"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d row deleted.\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">mysqli_affected_rows</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">));</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">1 row inserted.
1 row deleted.</pre>
</div>
   </div>
  </div>
  <div class="example" id="example-1621">
   <p><strong>Example #2 Using <code class="literal">...</code> to provide arguments</strong></p>
   <div class="example-contents"><p>
    The <code class="literal">...</code> operator can be used to provide variable-length
    argument list, e.g. in a <code class="literal">WHERE IN</code> clause.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'my_user'</span><span style="color: #007700">, </span><span style="color: #DD0000">'my_password'</span><span style="color: #007700">, </span><span style="color: #DD0000">'world'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT Language FROM CountryLanguage WHERE CountryCode IN (?, ?)"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Using ... to provide arguments */<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_param</span><span style="color: #007700">(</span><span style="color: #DD0000">'ss'</span><span style="color: #007700">, ...[</span><span style="color: #DD0000">'DEU'</span><span style="color: #007700">, </span><span style="color: #DD0000">'POL'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">store_result</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d rows found.\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">num_rows</span><span style="color: #007700">());</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">10 rows found.</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli-stmt.bind-param-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli-stmt.bind-result.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_bind_result()</a> - Binds variables to a prepared statement for result storage</span></li>
    <li><span class="function"><a href="mysqli-stmt.execute.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_execute()</a> - Executes a prepared statement</span></li>
    <li><span class="function"><a href="mysqli-stmt.fetch.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_fetch()</a> - Fetch results from a prepared statement into the bound variables</span></li>
    <li><span class="function"><a href="mysqli.prepare.php" class="function" rel="rdfs-seeAlso">mysqli_prepare()</a> - Prepares an SQL statement for execution</span></li>
    <li><span class="function"><a href="mysqli-stmt.send-long-data.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_send_long_data()</a> - Send data in blocks</span></li>
    <li><span class="function"><a href="mysqli-stmt.errno.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_errno()</a> - Returns the error code for the most recent statement call</span></li>
    <li><span class="function"><a href="mysqli-stmt.error.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_error()</a> - Returns a string description for last statement error</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli_stmt/bind-param.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli-stmt.bind-param%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli-stmt.bind-param&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-stmt.bind-param.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104073">  <div class="votes">
    <div id="Vu104073">
    <a href="/manual/vote-note.php?id=104073&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104073">
    <a href="/manual/vote-note.php?id=104073&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104073" title="72% like this...">
    69
    </div>
  </div>
  <a href="#104073" class="name">
  <strong class="user"><em>jk at jankriedner dot de</em></strong></a><a class="genanchor" href="#104073"> &para;</a><div class="date" title="2011-05-20 02:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104073">
<div class="phpcode"><code><span class="html">There are some things to note when working with mysqli::bind_param() and array-elements.
<br />Re-assigning an array will break any references, no matter if the keys are identical.
<br />You have to explicitly reassign every single value in an array, for the references to be kept.
<br />Best shown in an example:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">getData</span><span class="keyword">() {
<br />    return array(
<br />        </span><span class="default">0</span><span class="keyword">=&gt;array(
<br />            </span><span class="string">"name"</span><span class="keyword">=&gt;</span><span class="string">"test_0"</span><span class="keyword">,
<br />            </span><span class="string">"email"</span><span class="keyword">=&gt;</span><span class="string">"test_0@example.com"
<br />        </span><span class="keyword">),
<br />        </span><span class="default">1</span><span class="keyword">=&gt;array(
<br />            </span><span class="string">"name"</span><span class="keyword">=&gt;</span><span class="string">"test_1"</span><span class="keyword">,
<br />            </span><span class="string">"email"</span><span class="keyword">=&gt;</span><span class="string">"test_1@example.com"
<br />        </span><span class="keyword">)
<br />    );
<br />}
<br /></span><span class="default">$db  </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">,</span><span class="string">"root"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="string">"tests"</span><span class="keyword">);
<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"INSERT INTO `user` SET `name`=?,`email`=?"</span><span class="keyword">;
<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);
<br /></span><span class="comment">// If you bind array-elements to a prepared statement, the array has to be declared first with the used keys:
<br /></span><span class="default">$arr </span><span class="keyword">= array(</span><span class="string">"name"</span><span class="keyword">=&gt;</span><span class="string">""</span><span class="keyword">,</span><span class="string">"email"</span><span class="keyword">=&gt;</span><span class="string">""</span><span class="keyword">); 
<br /></span><span class="default">$res</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">"ss"</span><span class="keyword">,</span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">],</span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'email'</span><span class="keyword">]);
<br /></span><span class="comment">//So far the introduction...
<br />
<br />/* 
<br />    Example 1 (wont work as expected, creates two empty entries)
<br />    Re-assigning the array in the while()-head generates a new array, whereas references from bind_param stick to the old array
<br />*/
<br /></span><span class="keyword">foreach( </span><span class="default">getData</span><span class="keyword">() as </span><span class="default">$arr </span><span class="keyword">) {
<br />    </span><span class="default">$res</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();
<br />}
<br />
<br /></span><span class="comment">/*
<br />    Example 2 (will work as expected)
<br />    Re-assigning every single value explicitly keeps the references alive
<br />*/
<br /></span><span class="keyword">foreach( </span><span class="default">getData</span><span class="keyword">() as </span><span class="default">$tempArr </span><span class="keyword">) {
<br />    foreach(</span><span class="default">$tempArr </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">) {
<br />        </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">$res</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102917">  <div class="votes">
    <div id="Vu102917">
    <a href="/manual/vote-note.php?id=102917&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102917">
    <a href="/manual/vote-note.php?id=102917&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102917" title="83% like this...">
    32
    </div>
  </div>
  <a href="#102917" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#102917"> &para;</a><div class="date" title="2011-03-14 02:28"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102917">
<div class="phpcode"><code><span class="html">Blob and null handling aside, a couple of notes on how param values are automatically converted and forwarded on to the Mysql engine based on your type string argument:<br /><br />1) PHP will automatically convert the value behind the scenes to the underlying type corresponding to your binding type string.  i.e.:<br /><br /><span class="default">&lt;?php<br /><br />$var </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /></span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">'i'</span><span class="keyword">, </span><span class="default">$var</span><span class="keyword">); </span><span class="comment">// forwarded to Mysql as 1<br /><br /></span><span class="default">?&gt;<br /></span><br />2) Though PHP numbers cannot be reliably cast to (int) if larger than PHP_INT_MAX, behind the scenes, the value will be converted anyway to at most long long depending on the size.  This means that keeping in mind precision limits and avoiding manually casting the variable to (int) first, you can still use the 'i' binding type for larger numbers.  i.e.:<br /><br /><span class="default">&lt;?php<br /><br />$var </span><span class="keyword">= </span><span class="string">'429496729479896'</span><span class="keyword">;<br /></span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">'i'</span><span class="keyword">, </span><span class="default">$var</span><span class="keyword">); </span><span class="comment">// forwarded to Mysql as 429496729479900<br /><br /></span><span class="default">?&gt;<br /></span><br />3) You can default to 's' for most parameter arguments in most cases.  The value will then be automatically cast to string on the back-end before being passed to the Mysql engine.  Mysql will then perform its own conversions with values it receives from PHP on execute.  This allows you to bind not only to larger numbers without concern for precision, but also to objects as long as that object has a '__toString' method.<br /><br />This auto-string casting behavior greatly improves things like datetime handling.  For example: if you extended DateTime class to add a __toString method which outputs the datetime format expected by Mysql, you can just bind to that DateTime_Extended object using type 's'.  i.e.:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// DateTime_Extended has __toString defined to return the Mysql formatted datetime<br /></span><span class="default">$var </span><span class="keyword">= new </span><span class="default">DateTime_Extended</span><span class="keyword">;<br /></span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">'s'</span><span class="keyword">, </span><span class="default">$var</span><span class="keyword">); </span><span class="comment">// forwarded to Mysql as '2011-03-14 17:00:01'<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118951">  <div class="votes">
    <div id="Vu118951">
    <a href="/manual/vote-note.php?id=118951&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118951">
    <a href="/manual/vote-note.php?id=118951&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118951" title="83% like this...">
    8
    </div>
  </div>
  <a href="#118951" class="name">
  <strong class="user"><em>travis at twooutrally dot com</em></strong></a><a class="genanchor" href="#118951"> &para;</a><div class="date" title="2016-03-06 05:59"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118951">
<div class="phpcode"><code><span class="html">Parameter type matters more than you might think!<br /><br />A cautionary tail to any who would seek to find less than thorough solutions for automating prepared statements. Take the following mysqli_stmt extension method for example. <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">public function </span><span class="default">param_type</span><span class="keyword">(</span><span class="default">$param</span><span class="keyword">)<br />{<br />    if (</span><span class="default">ctype_digit</span><span class="keyword">((string) </span><span class="default">$param</span><span class="keyword">)<br />        return </span><span class="default">$param </span><span class="keyword">&lt;= </span><span class="default">PHP_INT_MAX </span><span class="keyword">? </span><span class="string">'i' </span><span class="keyword">: </span><span class="string">'s'</span><span class="keyword">;<br /><br />    if (</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$param</span><span class="keyword">))<br />        return </span><span class="string">'d'</span><span class="keyword">;<br /><br />    return </span><span class="string">'s'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />At face value this seems like a perfectly straightforward and innocuous function. Something like this served as a small piece in a larger automation extension which dutifully served its purpose efficiently handling hundreds of thousands of queries a day.<br /><br />Now I know what you're thinking: it doesn't handle blob types. Well we didn't work with blob types (and still don't) so that's never been an issue. This problem was far more insidious and ultimately pernicious than that.<br /><br />So what went wrong? The problem began to surface when we started automating SELECT queries on a newly created index for a column designed to store telephone numbers. The column was of type VARCHAR but the data stored was always formatted as an integer. Not a problem when performing a write operation but as soon as we went to read from the table on this index everything went to hell.<br /><br />We're not entirely sure, but as near as we can tell the act of binding a parameter to a VARCHAR index as 'i' instead of 's' on a read query is detrimental in the following way: MySQL will ignore the b-tree on the index and perform a full table scan. With smaller tables this may never present itself as a significant performance issue. When your tables get into the tens of millions of rows, however...</span></code></div>
  </div>
 </div>
  <div class="note" id="121385">  <div class="votes">
    <div id="Vu121385">
    <a href="/manual/vote-note.php?id=121385&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121385">
    <a href="/manual/vote-note.php?id=121385&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121385" title="77% like this...">
    5
    </div>
  </div>
  <a href="#121385" class="name">
  <strong class="user"><em>davidharrison at gmail dot com</em></strong></a><a class="genanchor" href="#121385"> &para;</a><div class="date" title="2017-07-16 08:20"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121385">
<div class="phpcode"><code><span class="html">There are two solutions in this page for calling bind_param() via  call_user_func_array() that involve using a user-created function called refValues(), so that you can pass the parameters to bind_param() as references. <br /><br />This works perfectly in PHP v5.3 (and I assume before), but since upgrading to PHP v7.1.7, the refValues() functions here no longer correctly convert the arrays to arrays of references. Instead you will get a warning: <br /><br />"PHP Warning:  Parameter 3 to mysqli_stmt_bind_param() expected to be a reference, value given"<br /><br />I believe this is because of changes to arrays and reference handling as noted in the "Migrating from PHP 5.6.x to PHP 7.0.x" guide in Backwards Incompatibilities (change: "foreach by-value operates on a copy of the array"). <br /><br />So in PHP v7.1.7 at least, the user-created function refValues() no longer returns an array of references but instead a normal array of values. <br /><br />Changing the function definition of refValues() to accept the array as a reference seems to fix this - as intended it returns an array of references and thus bind_param() works as expected (although I haven't tested this super thoroughly to make sure there are no other ill effects, especially in older versions of PHP). <br /><br />New refValues() definition is simply: <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">refValues</span><span class="keyword">(&amp;</span><span class="default">$arr</span><span class="keyword">) </span><span class="comment">// Changed $arr to reference for PHP v7.1.7 <br /></span><span class="keyword">{<br />    if (</span><span class="default">strnatcmp</span><span class="keyword">(</span><span class="default">phpversion</span><span class="keyword">(),</span><span class="string">'5.3'</span><span class="keyword">) &gt;= </span><span class="default">0</span><span class="keyword">) </span><span class="comment">//Reference is required for PHP 5.3+<br />    </span><span class="keyword">{<br />        </span><span class="default">$refs </span><span class="keyword">= array();<br />        foreach(</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />            </span><span class="default">$refs</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = &amp;</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />        return </span><span class="default">$refs</span><span class="keyword">;<br />     }<br />     return </span><span class="default">$arr</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96850">  <div class="votes">
    <div id="Vu96850">
    <a href="/manual/vote-note.php?id=96850&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96850">
    <a href="/manual/vote-note.php?id=96850&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96850" title="80% like this...">
    3
    </div>
  </div>
  <a href="#96850" class="name">
  <strong class="user"><em>eisoft</em></strong></a><a class="genanchor" href="#96850"> &para;</a><div class="date" title="2010-03-18 03:42"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96850">
<div class="phpcode"><code><span class="html">I did a prepared statement for inserting in a simple table - images ( blob ) and their unique identifiers ( string ). All my blobs have smaller sizes than the MAX-ALLOWED-PACKET value.
<br />
<br />I've found that when binding my BLOB parameter, I need to pass it as a STRING, otherwise it's truncated to zero length in my table. So I have to do this:
<br />
<br /><span class="default">&lt;?php
<br />   $ok </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">( </span><span class="string">'ss'</span><span class="keyword">, </span><span class="default">$id</span><span class="keyword">, </span><span class="default">$im </span><span class="keyword">) ;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103144">  <div class="votes">
    <div id="Vu103144">
    <a href="/manual/vote-note.php?id=103144&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103144">
    <a href="/manual/vote-note.php?id=103144&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103144" title="70% like this...">
    10
    </div>
  </div>
  <a href="#103144" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#103144"> &para;</a><div class="date" title="2011-03-28 01:49"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103144">
<div class="phpcode"><code><span class="html">You can bind to variables with NULL values, and on update and insert queries, the corresponding field will be updated to NULL no matter what bind string type you associated it with.  But, for parameters meant for the WHERE clause (ie where field = ?), the query will have no effect and produce no results.<br /><br />When comparing a value against NULL, the MYSQL syntax is either "value IS NULL" or "value IS NOT NULL".  So, you can't pass in something like "WHERE (value = ?)" and expect this to work using a null value parameter.<br /><br />Instead, you can do something like this in your WHERE clause:<br /><br />"WHERE (IF(ISNULL(?), field1 is null, field1 = ?))"<br /><br />Then, pass in the value you want to test twice:<br /><br />bind_param('ss', $value1, $value1);</span></code></div>
  </div>
 </div>
  <div class="note" id="114715">  <div class="votes">
    <div id="Vu114715">
    <a href="/manual/vote-note.php?id=114715&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114715">
    <a href="/manual/vote-note.php?id=114715&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114715" title="69% like this...">
    5
    </div>
  </div>
  <a href="#114715" class="name">
  <strong class="user"><em>tomasz at marcinkowski dot pl</em></strong></a><a class="genanchor" href="#114715"> &para;</a><div class="date" title="2014-03-27 03:46"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114715">
<div class="phpcode"><code><span class="html">When trying to bind a string param you get a "Number of variables doesn't match number of parameters in prepared statement" error, make sure you're not wrapping the question mark with quotes.<br /><br />By mistake I had a query like:<br />SELECT something FROM table WHERE param_name = "?"<br /><br />Binding it with <span class="default">&lt;?php $stmt</span><span class="keyword">-&gt;</span><span class="default">bind</span><span class="keyword">(</span><span class="string">'s'</span><span class="keyword">, </span><span class="default">$param_value</span><span class="keyword">); </span><span class="default">?&gt;</span> had been failing on me. All I had to do was to remove quotes around "?".<br />Hope this saves someone's time.</span></code></div>
  </div>
 </div>
  <div class="note" id="73348">  <div class="votes">
    <div id="Vu73348">
    <a href="/manual/vote-note.php?id=73348&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73348">
    <a href="/manual/vote-note.php?id=73348&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73348" title="71% like this...">
    3
    </div>
  </div>
  <a href="#73348" class="name">
  <strong class="user"><em>flame</em></strong></a><a class="genanchor" href="#73348"> &para;</a><div class="date" title="2007-02-18 08:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73348">
<div class="phpcode"><code><span class="html">Columns with type bigint need to be specified as type 'd' NOT 'i'.
<br />
<br />Using 'i' results in large numbers (eg 3000169151) being truncated.
<br />
<br />--
<br />flame</span></code></div>
  </div>
 </div>
  <div class="note" id="103622">  <div class="votes">
    <div id="Vu103622">
    <a href="/manual/vote-note.php?id=103622&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103622">
    <a href="/manual/vote-note.php?id=103622&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103622" title="66% like this...">
    4
    </div>
  </div>
  <a href="#103622" class="name">
  <strong class="user"><em>asb(.d o,t )han(a   t)n i h e i(d.o_t)dk</em></strong></a><a class="genanchor" href="#103622"> &para;</a><div class="date" title="2011-04-22 06:05"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103622">
<div class="phpcode"><code><span class="html">It should be noted that MySQL has some issues regarding the use of the IN clause in prepared statements.<br /><br />I.e. the code:<br /><span class="default">&lt;?php<br /><br />$idArr </span><span class="keyword">= </span><span class="string">"1, 2, 3, 4"</span><span class="keyword">;<br /></span><span class="default">$int_one </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$int_two </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$int_three </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /></span><span class="default">$int_four </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;<br /><br /></span><span class="default">$db </span><span class="keyword">= new </span><span class="default">MySQLi</span><span class="keyword">();<br /></span><span class="default">$bad_stmt </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">SELECT </span><span class="keyword">`</span><span class="string">idAsLetters</span><span class="keyword">` </span><span class="default">FROM </span><span class="keyword">`</span><span class="string">tbl</span><span class="keyword">` </span><span class="default">WHERE </span><span class="keyword">`</span><span class="string">id</span><span class="keyword">` </span><span class="default">IN</span><span class="keyword">(?));<br /></span><span class="default">$bad_stmt</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">"s"</span><span class="keyword">, </span><span class="default">$idArr</span><span class="keyword">);<br /></span><span class="default">$bad_stmt</span><span class="keyword">-&gt;</span><span class="default">bind_result</span><span class="keyword">(</span><span class="default">$ias</span><span class="keyword">);<br /></span><span class="default">$bad_stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /><br />echo </span><span class="string">"Bad results:" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />while(</span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()){<br />   echo </span><span class="default">$ias </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$good_stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /><br /></span><span class="default">$good_stmt </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">SELECT </span><span class="keyword">`</span><span class="string">idAsLetters</span><span class="keyword">` </span><span class="default">FROM </span><span class="keyword">`</span><span class="string">tbl</span><span class="keyword">` </span><span class="default">WHERE </span><span class="keyword">`</span><span class="string">id</span><span class="keyword">` </span><span class="default">IN</span><span class="keyword">(?, ?, ?, ?));<br /></span><span class="default">$good_stmt</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">"iiii"</span><span class="keyword">, </span><span class="default">$int_one</span><span class="keyword">, </span><span class="default">$int_two</span><span class="keyword">, </span><span class="default">$int_three</span><span class="keyword">, </span><span class="default">$int_four</span><span class="keyword">);<br /></span><span class="default">$good_stmt</span><span class="keyword">-&gt;</span><span class="default">bind_result</span><span class="keyword">(</span><span class="default">$ias</span><span class="keyword">);<br /></span><span class="default">$good_stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /><br />echo </span><span class="string">"God results:" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />while(</span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()){<br />   echo </span><span class="default">$ias </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /></span><span class="default">$bad_stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /><br /></span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>will print this result:<br /><br />Bad results:<br />one<br /><br />Good results:<br />one<br />two<br />three<br />four<br /><br />Using "IN(?)" in a prepared statement will return just one (the first) row from a table/view. This is not an error in PHP, but merely how MySQL handles prepared statements.</span></code></div>
  </div>
 </div>
  <div class="note" id="96148">  <div class="votes">
    <div id="Vu96148">
    <a href="/manual/vote-note.php?id=96148&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96148">
    <a href="/manual/vote-note.php?id=96148&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96148" title="63% like this...">
    3
    </div>
  </div>
  <a href="#96148" class="name">
  <strong class="user"><em>rejohns at nOsPaMpost dot harvard dot edu</em></strong></a><a class="genanchor" href="#96148"> &para;</a><div class="date" title="2010-02-10 08:24"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96148">
<div class="phpcode"><code><span class="html">You can, in fact, use mysqli_bind_parameter to pass a NULL value to the database. simply create a variable and store the NULL value (see the manpage for it) to the variable and bind that. Works great for me anyway.</span></code></div>
  </div>
 </div>
  <div class="note" id="110201">  <div class="votes">
    <div id="Vu110201">
    <a href="/manual/vote-note.php?id=110201&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110201">
    <a href="/manual/vote-note.php?id=110201&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110201" title="60% like this...">
    3
    </div>
  </div>
  <a href="#110201" class="name">
  <strong class="user"><em>xianrenb at gmail dot com</em></strong></a><a class="genanchor" href="#110201"> &para;</a><div class="date" title="2012-09-30 06:52"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110201">
<div class="phpcode"><code><span class="html">It is believed that if one has specified 'b' in $types, the corresponding variable should be set to null, and one has to use mysqli_stmt::send_long_data() or mysqli_stmt_send_long_data() to send the blob, otherwise the blob value would be treated as empty.</span></code></div>
  </div>
 </div>
  <div class="note" id="120472">  <div class="votes">
    <div id="Vu120472">
    <a href="/manual/vote-note.php?id=120472&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120472">
    <a href="/manual/vote-note.php?id=120472&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120472" title="57% like this...">
    1
    </div>
  </div>
  <a href="#120472" class="name">
  <strong class="user"><em>accountant</em></strong></a><a class="genanchor" href="#120472"> &para;</a><div class="date" title="2017-01-16 10:09"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120472">
<div class="phpcode"><code><span class="html">if bind_param() fails due to Number of elements in type definition string doesn't match number of bind variables. it triggers an E_WARNING error. and you will not find that error in $stmt-&gt;error property</span></code></div>
  </div>
 </div>
  <div class="note" id="123558">  <div class="votes">
    <div id="Vu123558">
    <a href="/manual/vote-note.php?id=123558&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123558">
    <a href="/manual/vote-note.php?id=123558&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123558" title="100% like this...">
    2
    </div>
  </div>
  <a href="#123558" class="name">
  <strong class="user"><em>andersmmg at gmail dot com</em></strong></a><a class="genanchor" href="#123558"> &para;</a><div class="date" title="2019-01-29 07:29"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123558">
<div class="phpcode"><code><span class="html">I sometimes forget that you can't put functions inside. For example:<br /><br />If I wanted to use md5() on a value like so:<br /><span class="default">&lt;?php<br />$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">"s"</span><span class="keyword">,</span><span class="default">md5</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span>If would not work. Because it uses the variables by binding them, you need to change them beforehand like this:<br /><span class="default">&lt;?php<br />$val </span><span class="keyword">= </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">"s"</span><span class="keyword">,</span><span class="default">$val</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126299">  <div class="votes">
    <div id="Vu126299">
    <a href="/manual/vote-note.php?id=126299&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126299">
    <a href="/manual/vote-note.php?id=126299&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126299" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126299" class="name">
  <strong class="user"><em>c at zp1 dot net</em></strong></a><a class="genanchor" href="#126299"> &para;</a><div class="date" title="2021-08-01 09:26"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126299">
<div class="phpcode"><code><span class="html">It is very important to understand that you can not supply bind_param values<br /><br />this will not work:<br /><br />    $stmt -&gt; bind_param("s", "value");<br /> <br /><br />you have to do it like this :<br /><br />    $var =  "value";<br />    $stmt -&gt; bind_param("s", $var);</span></code></div>
  </div>
 </div>
  <div class="note" id="120138">  <div class="votes">
    <div id="Vu120138">
    <a href="/manual/vote-note.php?id=120138&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120138">
    <a href="/manual/vote-note.php?id=120138&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120138" title="100% like this...">
    2
    </div>
  </div>
  <a href="#120138" class="name">
  <strong class="user"><em>Matze</em></strong></a><a class="genanchor" href="#120138"> &para;</a><div class="date" title="2016-11-10 07:57"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120138">
<div class="phpcode"><code><span class="html">Hey Folks,<br /><br />just wanted to mention that parameters can only be used for input data, NOT for Table, Columns or Database names.<br />That gave me a headache yesterday!<br />So this code will not work:<br /><br />$searchtype = "Title";<br />$searchterm = "The Fellowship of the Ring: The Lord of the Rings";<br /><br />$query = <br />"SELECT ISBN, Author, Title, Price <br />FROM books <br />WHERE ? = ?";<br /><br />$mySql_stmt = $db-&gt;prepare($query);<br />$mySql_stmt-&gt;bind_param("ss" , $searchtype, $searchterm);<br />$mySql_stmt-&gt;execute(); <br /><br />In contrast, you will have to include the searchtype in ther query directly like this:<br /><br />$searchtype = "Title";<br />$searchterm = "The Fellowship of the Ring: The Lord of the Rings";<br />$query = <br />"SELECT ISBN, Author, Title, Price <br />FROM books <br />WHERE $searchtype = ?";<br /><br />$mySql_stmt = $db-&gt;prepare($query);<br />$mySql_stmt-&gt;bind_param("s", $searchterm);<br />$mySql_stmt-&gt;execute(); <br /><br />Hope that helps someone to have a peaceful nights sleep :)</span></code></div>
  </div>
 </div>
  <div class="note" id="121348">  <div class="votes">
    <div id="Vu121348">
    <a href="/manual/vote-note.php?id=121348&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121348">
    <a href="/manual/vote-note.php?id=121348&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121348" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121348" class="name">
  <strong class="user"><em>Darky</em></strong></a><a class="genanchor" href="#121348"> &para;</a><div class="date" title="2017-07-10 03:23"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121348">
<div class="phpcode"><code><span class="html">A small remark from what I tried:<br />- if you use prepared statements with bind_param and your query looks like<br />"SELECT user_id FROM users WHERE ... = ?" and then you bind an integer param to this, the user_ids you get will be casted to int. On the other hand, if you don't use prepared statements, but sth like "SELECT user_id FROM users WHERE ... = $var", where $var is an int, and just make the query, the fetched results will be strings. (e.g., at var_dump,  ["user_id"]=&gt; string(1) "6" for some row)<br />This is just from what I observed in my project, hope it's correct.</span></code></div>
  </div>
 </div>
  <div class="note" id="113419">  <div class="votes">
    <div id="Vu113419">
    <a href="/manual/vote-note.php?id=113419&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113419">
    <a href="/manual/vote-note.php?id=113419&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113419" title="no votes...">
    0
    </div>
  </div>
  <a href="#113419" class="name">
  <strong class="user"><em>laurence dot mackenzie at stream dot com</em></strong></a><a class="genanchor" href="#113419"> &para;</a><div class="date" title="2013-10-08 09:08"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113419">
<div class="phpcode"><code><span class="html">I just came across a very strange behaviour when using bind_param() with a reflection class.  I figured I ought to post it here to save anyone else who comes across it from banging their head against their desk for an hour (as I just did).<br /><br />First, some background:  I have a set of classes,  one per file format (i.e. CSV, HTML table, etc), which import data from flat files to a temporary table in my database.  The class then transforms the data to 3NF.<br /><br />I'm  using a reflection class to pass an array to mysqli-&gt;bind_param() because the column counts and types are variable.  The code (simplified) I am having issues with is:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/* Code that loops through the rows and columns in the <br /> * flat file and appends the MySQLi 'type' letter to the<br /> * $typeString variable and appends the actual value<br /> * to the $data array.  I left the code out because it's <br /> * (probably) not relevant and would bloat the post.<br /> */<br /></span><span class="default">$stmtInsert </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'INSERT.....'</span><span class="keyword">);<br /></span><span class="default">$typeString </span><span class="keyword">= </span><span class="string">'ississis'</span><span class="keyword">;<br /></span><span class="default">$data </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="string">'two'</span><span class="keyword">, </span><span class="string">'three'</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="string">'five'</span><span class="keyword">, </span><span class="string">'six'</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">, </span><span class="string">'eight'</span><span class="keyword">);<br /><br /></span><span class="comment">/* Here's where the actual strangeness starts happening<br /> */<br /><br />// Merge the parameter types with the parameter values<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">((array) </span><span class="default">$typeString</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br /><br /></span><span class="comment">// Create the reflection class<br /></span><span class="default">$ref </span><span class="keyword">= new </span><span class="default">\ReflectionClass</span><span class="keyword">(</span><span class="string">'mysqli_stmt'</span><span class="keyword">);<br /><br /></span><span class="comment">// Get the bind_param  method<br /></span><span class="default">$method </span><span class="keyword">= </span><span class="default">$ref</span><span class="keyword">-&gt;</span><span class="default">getMethod</span><span class="keyword">(</span><span class="string">'bind_param'</span><span class="keyword">);<br /><br /></span><span class="comment">// Invoke it with $data<br /></span><span class="default">$method</span><span class="keyword">-&gt;</span><span class="default">invokeArgs</span><span class="keyword">(</span><span class="default">$stmtInsert</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br /><br /></span><span class="comment">// Execute the statement<br /></span><span class="default">$stmtInsert</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /><br />}<br /></span><span class="default">?&gt;<br /></span><br />Oddly, in one (and only one) case it started throwing "Warning: Parameter 41 to mysqli_stmt::bind_param() expected to be a reference, value given".  The reflection class throws an exception.  Other import sets using this code work just fine.  Parameter 41 is the last parameter.   Changing the affected code as follows resolves the issue:<br /><br /><span class="default">&lt;?php<br /><br />$ref </span><span class="keyword">= new </span><span class="default">\ReflectionClass</span><span class="keyword">(</span><span class="string">"mysqli_stmt"</span><span class="keyword">);<br /></span><span class="default">$method </span><span class="keyword">= </span><span class="default">$ref</span><span class="keyword">-&gt;</span><span class="default">getMethod</span><span class="keyword">(</span><span class="string">"bind_param"</span><span class="keyword">);<br /></span><span class="default">$data</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">] = (string) </span><span class="default">$data</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">];<br /></span><span class="default">$method</span><span class="keyword">-&gt;</span><span class="default">invokeArgs</span><span class="keyword">(</span><span class="default">$stmtInsert</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">$stmtInsert</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />Not sure what's going on here, but like I said, hopefully this will keep the next person from thinking they're totally insane.</span></code></div>
  </div>
 </div>
  <div class="note" id="104935">  <div class="votes">
    <div id="Vu104935">
    <a href="/manual/vote-note.php?id=104935&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104935">
    <a href="/manual/vote-note.php?id=104935&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104935" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#104935" class="name">
  <strong class="user"><em>alex dot deleyn at gmail dot com</em></strong></a><a class="genanchor" href="#104935"> &para;</a><div class="date" title="2011-07-16 06:50"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104935">
<div class="phpcode"><code><span class="html">MySQL has a "NULL-safe equal" operator (I'm guessing since 5.0)<br /><a href="http://dev.mysql.com/doc/refman/5.0/en/comparison-operators.html#operator_equal-to" rel="nofollow" target="_blank">http://dev.mysql.com/doc/refman/5.0/en/comparison-operators.html#operator_equal-to</a><br /><br />If you use this operator instead of the usual = you can interchange values and null in where clauses.<br /><br />There is however a known bug when using this operator with datetime or timestamp fields: <a href="http://bugs.mysql.com/bug.php?id=36100" rel="nofollow" target="_blank">http://bugs.mysql.com/bug.php?id=36100</a></span></code></div>
  </div>
 </div>
  <div class="note" id="79852">  <div class="votes">
    <div id="Vu79852">
    <a href="/manual/vote-note.php?id=79852&amp;page=mysqli-stmt.bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79852">
    <a href="/manual/vote-note.php?id=79852&amp;page=mysqli-stmt.bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79852" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#79852" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#79852"> &para;</a><div class="date" title="2007-12-15 10:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79852">
<div class="phpcode"><code><span class="html">It's worth noting that you have to bind all parameters in one fell swoop - you can't go through and call bind_param once for each.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli-stmt.bind-param&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-stmt.bind-param.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mysqli-stmt.php">mysqli_stmt</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli-stmt.affected-rows.php" title="$affected_&#8203;rows">$affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.attr-get.php" title="attr_&#8203;get">attr_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.attr-set.php" title="attr_&#8203;set">attr_&#8203;set</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli-stmt.bind-param.php" title="bind_&#8203;param">bind_&#8203;param</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.bind-result.php" title="bind_&#8203;result">bind_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.data-seek.php" title="data_&#8203;seek">data_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.errno.php" title="$errno">$errno</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.error.php" title="$error">$error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.error-list.php" title="$error_&#8203;list">$error_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.execute.php" title="execute">execute</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.fetch.php" title="fetch">fetch</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.field-count.php" title="$field_&#8203;count">$field_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.free-result.php" title="free_&#8203;result">free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.get-result.php" title="get_&#8203;result">get_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.get-warnings.php" title="get_&#8203;warnings">get_&#8203;warnings</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.insert-id.php" title="$insert_&#8203;id">$insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.more-results.php" title="more_&#8203;results">more_&#8203;results</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.next-result.php" title="next_&#8203;result">next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.num-rows.php" title="$num_&#8203;rows">$num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.param-count.php" title="$param_&#8203;count">$param_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.prepare.php" title="prepare">prepare</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.reset.php" title="reset">reset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.result-metadata.php" title="result_&#8203;metadata">result_&#8203;metadata</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.send-long-data.php" title="send_&#8203;long_&#8203;data">send_&#8203;long_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.sqlstate.php" title="$sqlstate">$sqlstate</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.store-result.php" title="store_&#8203;result">store_&#8203;result</a>
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
