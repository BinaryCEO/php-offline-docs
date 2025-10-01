<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: proc_get_status - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.proc-get-status.php">
 <link rel="shorturl" href="https://www.php.net/proc-get-status">
 <link rel="alternate" href="https://www.php.net/proc-get-status" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.exec.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.proc-close.php">
 <link rel="next" href="https://www.php.net/manual/en/function.proc-nice.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.proc-get-status.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.proc-get-status.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.proc-get-status.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.proc-get-status.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.proc-get-status.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.proc-get-status.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.proc-get-status.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.proc-get-status.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.proc-get-status.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.proc-get-status.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.proc-get-status.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get information about a process opened by proc_open" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: proc_get_status - Manual" />
<meta name="twitter:description" content="Get information about a process opened by proc_open" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: proc_get_status - Manual" />
<meta itemprop="description" content="Get information about a process opened by proc_open" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get information about a process opened by proc_open" />

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
        <a href="function.proc-nice.php">
          proc_nice &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.proc-close.php">
          &laquo; proc_close        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.exec.php'>Program execution</a></li>      <li><a href='ref.exec.php'>Program execution Functions</a></li>      </ul>
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
            <option value='en/function.proc-get-status.php' selected="selected">English</option>
            <option value='de/function.proc-get-status.php'>German</option>
            <option value='es/function.proc-get-status.php'>Spanish</option>
            <option value='fr/function.proc-get-status.php'>French</option>
            <option value='it/function.proc-get-status.php'>Italian</option>
            <option value='ja/function.proc-get-status.php'>Japanese</option>
            <option value='pt_BR/function.proc-get-status.php'>Brazilian Portuguese</option>
            <option value='ru/function.proc-get-status.php'>Russian</option>
            <option value='tr/function.proc-get-status.php'>Turkish</option>
            <option value='uk/function.proc-get-status.php'>Ukrainian</option>
            <option value='zh/function.proc-get-status.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.proc-get-status" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">proc_get_status</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">proc_get_status</span> &mdash; <span class="dc-title">Get information about a process opened by <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span></span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.proc-get-status-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>proc_get_status</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$process</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>proc_get_status()</strong></span> fetches data about a
   process opened using <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span>.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.proc-get-status-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">process</code></dt>
     <dd>
      <p class="para">
       The <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> that will
       be evaluated.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.proc-get-status-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of collected information.
   The returned array contains the following elements:
  </p>
  <p class="para">
  <table class="doctable informaltable">
   
    <thead>
     <tr><th>element</th><th>type</th><th>description</th></tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>command</td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td>
       The command string that was passed to <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span>.
      </td>
     </tr>

     <tr>
      <td>pid</td>
      <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
      <td>process id</td>
     </tr>

     <tr>
      <td>running</td>
      <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
      <td>
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the process is still running, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if it has
       terminated.
      </td>
     </tr>

     <tr>
      <td>signaled</td>
      <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
      <td>
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the child process has been terminated by
       an uncaught signal. Always set to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on Windows.
      </td>
     </tr>

     <tr>
      <td>stopped</td>
      <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
      <td>
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the child process has been stopped by a
       signal. Always set to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on Windows.
      </td>
     </tr>

     <tr>
      <td>exitcode</td>
      <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
      <td>
       The exit code returned by the process (which is only
       meaningful if <code class="literal">running</code> is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>).
       Prior to PHP 8.3.0, only the first call of this function returned the real
       value, the following calls returned <code class="literal">-1</code>.
      </td>
     </tr>

     <tr>
      <td>cached</td>
      <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
      <td>
       As of PHP 8.3.0, this is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> when the exit code is cached.
       Caching is necessary to make sure the exit code is not lost by
       subsequent calls to process APIs.
      </td>
     </tr>

     <tr>
      <td>termsig</td>
      <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
      <td>
       The number of the signal that caused the child process to terminate
       its execution (only meaningful if <code class="literal">signaled</code> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>).
      </td>
     </tr>

     <tr>
      <td>stopsig</td>
      <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
      <td>
       The number of the signal that caused the child process to stop its
       execution (only meaningful if <code class="literal">stopped</code> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>).
      </td>
     </tr>

    </tbody>
   
  </table>

  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.proc-get-status-changelog">
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
      <td>8.3.0</td>
      <td>
       The <code class="literal">&quot;cached&quot;</code> entry has been added to the returned
       array. Prior to PHP 8.3.0, only the first call returned the real exit
       code. The <code class="literal">&quot;cached&quot;</code> entry indicates that the exit code
       was cached.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.proc-get-status-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.proc-open.php" class="function" rel="rdfs-seeAlso">proc_open()</a> - Execute a command and open file pointers for input/output</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/exec/functions/proc-get-status.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.proc-get-status%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.proc-get-status&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.proc-get-status.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93382">  <div class="votes">
    <div id="Vu93382">
    <a href="/manual/vote-note.php?id=93382&amp;page=function.proc-get-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93382">
    <a href="/manual/vote-note.php?id=93382&amp;page=function.proc-get-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93382" title="90% like this...">
    50
    </div>
  </div>
  <a href="#93382" class="name">
  <strong class="user"><em>Mark Seecof</em></strong></a><a class="genanchor" href="#93382"> &para;</a><div class="date" title="2009-09-06 08:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93382">
<div class="phpcode"><code><span class="html">On Unix/Linux, if you change the command line you pass to proc_open() just slightly then proc_get_status() will give you the actual process-id (pid) of your child.<br /><br />Suppose you wish to run the external command /usr/bin/compress to create a BSD foo.Z file.  Rather than proc_open("/usr/bin/compress /tmp/foo",...) you may invoke proc_open("exec /usr/bin/compress /tmp/foo",...) and then proc_get_status()['pid'] will be the actual pid of /usr/bin/compress.<br /><br />Why?  Because the way proc_open() actually works on Unix/Linux is by starting "/bin/sh -c usercmd userargs...", e.g., "/bin/sh -c /usr/bin/compress /tmp/foo".[Note 1]  That means normally your command is the child of the shell, so the pid you retrieve with proc_get_status() is the pid of the shell (PHP's child), and you have to fumble around trying to find the pid of your command (PHP's grandchild).  But if you put "exec" in front of your command, you tell the shell to *replace itself* with your command without starting another process (technically, to exec your command without forking first).  That means your command will inherit the pid of the shell, which is the pid that proc_get_status() returns.<br /><br />So if you would like the actual pid of the process running your command, just prepend "exec " to  your proc_open() command argument then retrieve the pid using proc_get_status().<br /><br />This also makes proc_terminate() and proc_close() work more like you might prefer, since they will affect the actual process running your command (which will be a child process rather than a grandchild process).<br /><br />[Note 1] My guess is that the PHP developers want the shell to expand wildcards in path/filenames.</span></code></div>
  </div>
 </div>
  <div class="note" id="92145">  <div class="votes">
    <div id="Vu92145">
    <a href="/manual/vote-note.php?id=92145&amp;page=function.proc-get-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92145">
    <a href="/manual/vote-note.php?id=92145&amp;page=function.proc-get-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92145" title="86% like this...">
    11
    </div>
  </div>
  <a href="#92145" class="name">
  <strong class="user"><em>php dot net at crazedsanity dot com</em></strong></a><a class="genanchor" href="#92145"> &para;</a><div class="date" title="2009-07-10 08:29"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92145">
<div class="phpcode"><code><span class="html">For clarification, the "exitcode" is only valid the FIRST TIME IT IS CALLED after the process exits.<br /><br />If you have a method that polls a spawned process for its status, you *MUST* have that same method capture the exitcode: if the method is called a second time (after realizing the pid is dead) and it hasn't cached that exitcode, it will receive the -1 mentioned.</span></code></div>
  </div>
 </div>
  <div class="note" id="103189">  <div class="votes">
    <div id="Vu103189">
    <a href="/manual/vote-note.php?id=103189&amp;page=function.proc-get-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103189">
    <a href="/manual/vote-note.php?id=103189&amp;page=function.proc-get-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103189" title="85% like this...">
    10
    </div>
  </div>
  <a href="#103189" class="name">
  <strong class="user"><em>Lachlan Mulcahy</em></strong></a><a class="genanchor" href="#103189"> &para;</a><div class="date" title="2011-03-30 11:40"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103189">
<div class="phpcode"><code><span class="html">It is worth noting that proc_get_status will continue to indicate the process that you spawned is running (because it is!) until that process has been able to write everything it wants to write to the STDOUT and STDERR streams.<br /><br />PHP seems to use a buffer for this and so the spawned process can can get it's write calls to return immediately. <br /><br />However, once this buffer is full the write call will block until you read out some of the information from the stream/pipe.<br /><br />This can manifest itself in many ways but generally the called process will still be running, but just not doing anything as it is blocking on being able to write more to STDERR or STDOUT -- whichever stream buffer is full.<br /><br />To work around this you should include in your loop of checking proc_get_status' running element a "stream_get_contents" on the relevant pipes.<br /><br />I generally use stream_set_blocking($pipies[2], 0) kind of calls to make sure that the stream_get_contents call will not block if there is no data in the stream.<br /><br />This one had me stumped for a while, so hopefully it helps someone!</span></code></div>
  </div>
 </div>
  <div class="note" id="84338">  <div class="votes">
    <div id="Vu84338">
    <a href="/manual/vote-note.php?id=84338&amp;page=function.proc-get-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84338">
    <a href="/manual/vote-note.php?id=84338&amp;page=function.proc-get-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84338" title="71% like this...">
    3
    </div>
  </div>
  <a href="#84338" class="name">
  <strong class="user"><em>webmaster at rouen dot fr</em></strong></a><a class="genanchor" href="#84338"> &para;</a><div class="date" title="2008-07-09 01:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84338">
<div class="phpcode"><code><span class="html">The following function takes an array of shell commands and executes them. It is able to execute up to $nb_max_process at the same time. As soon as one process is terminated, another one is executed. Quite useful if you want to batch process commands on a multi-processor or multi-core environment.<br /><br />The example below tries to convert to PNG a list of SVG files submitted on the command line (using Inkscape).<br /><br />(it's quick and dirty but works very well for me)<br /><br />#!/usr/bin/php<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">pool_execute</span><span class="keyword">(</span><span class="default">$commandes</span><span class="keyword">,</span><span class="default">$nb_max_process</span><span class="keyword">) {<br />  </span><span class="default">$pool</span><span class="keyword">=array();<br />  for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$nb_max_process</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$pool</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]=</span><span class="default">FALSE</span><span class="keyword">;<br />  }<br /><br />  while(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$commandes</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">$commande</span><span class="keyword">=</span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$commandes</span><span class="keyword">);<br /><br />    </span><span class="default">$commande_lancee</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">;<br />    while(</span><span class="default">$commande_lancee</span><span class="keyword">==</span><span class="default">FALSE</span><span class="keyword">) {<br />      </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">50000</span><span class="keyword">);<br /><br />      for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$nb_max_process </span><span class="keyword">and </span><span class="default">$commande_lancee</span><span class="keyword">==</span><span class="default">FALSE</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />        if(</span><span class="default">$pool</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]===</span><span class="default">FALSE</span><span class="keyword">) {<br />          </span><span class="default">$pool</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]=</span><span class="default">proc_open</span><span class="keyword">(</span><span class="default">$commande</span><span class="keyword">,array(),</span><span class="default">$foo</span><span class="keyword">);<br />          </span><span class="default">$commande_lancee</span><span class="keyword">=</span><span class="default">TRUE</span><span class="keyword">;<br />        } else {<br />          </span><span class="default">$etat</span><span class="keyword">=</span><span class="default">proc_get_status</span><span class="keyword">(</span><span class="default">$pool</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />          if(</span><span class="default">$etat</span><span class="keyword">[</span><span class="string">'running'</span><span class="keyword">]==</span><span class="default">FALSE</span><span class="keyword">) {<br />            </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$pool</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />            </span><span class="default">$pool</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]=</span><span class="default">proc_open</span><span class="keyword">(</span><span class="default">$commande</span><span class="keyword">,array(),</span><span class="default">$foo</span><span class="keyword">);<br />            </span><span class="default">$commande_lancee</span><span class="keyword">=</span><span class="default">TRUE</span><span class="keyword">;<br />          }<br />        }<br />      }<br />    }<br />  }<br />}<br /><br /></span><span class="default">$fichiers</span><span class="keyword">=</span><span class="default">$argv</span><span class="keyword">;<br /></span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$fichiers</span><span class="keyword">);<br /></span><span class="default">$commandes</span><span class="keyword">=array();<br />foreach(</span><span class="default">$fichiers </span><span class="keyword">as </span><span class="default">$fichier</span><span class="keyword">) {<br />  </span><span class="default">$entree</span><span class="keyword">=</span><span class="default">$fichier</span><span class="keyword">;<br />  </span><span class="default">$sortie</span><span class="keyword">=</span><span class="default">basename</span><span class="keyword">(</span><span class="default">$fichier</span><span class="keyword">,</span><span class="string">'.svg'</span><span class="keyword">).</span><span class="string">".png"</span><span class="keyword">;<br />  </span><span class="default">$commandes</span><span class="keyword">[]=</span><span class="string">'inkscape --file='</span><span class="keyword">.</span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">$entree</span><span class="keyword">).</span><span class="string">' --export-area-canvas --export-png='</span><span class="keyword">.</span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">$sortie</span><span class="keyword">);<br />}<br /><br /></span><span class="default">pool_execute</span><span class="keyword">(</span><span class="default">$commandes</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83628">  <div class="votes">
    <div id="Vu83628">
    <a href="/manual/vote-note.php?id=83628&amp;page=function.proc-get-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83628">
    <a href="/manual/vote-note.php?id=83628&amp;page=function.proc-get-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83628" title="62% like this...">
    2
    </div>
  </div>
  <a href="#83628" class="name">
  <strong class="user"><em>strrev xc.noxeh@ellij</em></strong></a><a class="genanchor" href="#83628"> &para;</a><div class="date" title="2008-06-05 01:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83628">
<div class="phpcode"><code><span class="html">You can NOT rely on pid+1.<br />You could prefix exec to the command string, this will replace the /bin/sh script with the real thing you want to exec (use only if you don't do 'scary things' like pipes, output redirection, multiple commands, however if you know how they work, go ahead).<br />If you prefix exec, the /bin/sh process will only start your process, and the PID will be the same.</span></code></div>
  </div>
 </div>
  <div class="note" id="128651">  <div class="votes">
    <div id="Vu128651">
    <a href="/manual/vote-note.php?id=128651&amp;page=function.proc-get-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128651">
    <a href="/manual/vote-note.php?id=128651&amp;page=function.proc-get-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128651" title="no votes...">
    0
    </div>
  </div>
  <a href="#128651" class="name">
  <strong class="user"><em>marco dot marsala at live dot it</em></strong></a><a class="genanchor" href="#128651"> &para;</a><div class="date" title="2023-06-30 09:09"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128651">
<div class="phpcode"><code><span class="html">If launching a GNU screen with proc_open, subsequents proc_get_status always return (wrongly) running = false<br /><br />$descriptorspec = array(<br />     0 =&gt; array("pipe", "r"),  // stdin<br />     1 =&gt; array("pipe", "w"),  // stdout<br />     2 =&gt; array("pipe", "w") // stderr<br />);<br />$p = proc_open('screen ...', $descriptorspec, $pipes);<br />var_dump(proc_get_status($p)['running']); // false (wrong)</span></code></div>
  </div>
 </div>
  <div class="note" id="75725">  <div class="votes">
    <div id="Vu75725">
    <a href="/manual/vote-note.php?id=75725&amp;page=function.proc-get-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75725">
    <a href="/manual/vote-note.php?id=75725&amp;page=function.proc-get-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75725" title="no votes...">
    0
    </div>
  </div>
  <a href="#75725" class="name">
  <strong class="user"><em>damien at cyg dot net</em></strong></a><a class="genanchor" href="#75725"> &para;</a><div class="date" title="2007-06-13 06:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75725">
<div class="phpcode"><code><span class="html">Alternatively, if you're calling a subsequent php script using proc_open, you can have that process echo its own actual PID in the output.<br />Also, if you go through the /proc filesystem on linux, you can read through /proc/12345 where 12345 is the pid returned by proc_get_status (the pid of the /bin/sh instance) and it will list its child processes within.</span></code></div>
  </div>
 </div>
  <div class="note" id="74329">  <div class="votes">
    <div id="Vu74329">
    <a href="/manual/vote-note.php?id=74329&amp;page=function.proc-get-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74329">
    <a href="/manual/vote-note.php?id=74329&amp;page=function.proc-get-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74329" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#74329" class="name">
  <strong class="user"><em>andy dot shellam at mailnetwork dot co dot uk</em></strong></a><a class="genanchor" href="#74329"> &para;</a><div class="date" title="2007-04-05 05:16"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74329">
<div class="phpcode"><code><span class="html">Further to my previous note, I've found out the PID returned is the PID of the shell (/bin/sh) that then runs the actual command requested.<br /><br />I've raised this as bug #41003.</span></code></div>
  </div>
 </div>
  <div class="note" id="74328">  <div class="votes">
    <div id="Vu74328">
    <a href="/manual/vote-note.php?id=74328&amp;page=function.proc-get-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74328">
    <a href="/manual/vote-note.php?id=74328&amp;page=function.proc-get-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74328" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#74328" class="name">
  <strong class="user"><em>andy dot shellam at mailnetwork dot co dot uk</em></strong></a><a class="genanchor" href="#74328"> &para;</a><div class="date" title="2007-04-05 04:58"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74328">
<div class="phpcode"><code><span class="html">To the poster above, same here on FreeBSD 6.1, PHP 5.2.1.<br /><br />To get the correct PID to use for posix_kill I have to add 1 to the PID returned from proc_get_status.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.proc-get-status&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.proc-get-status.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.exec.php">Program execution Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.escapeshellarg.php" title="escapeshellarg">escapeshellarg</a>
                        </li>
                                                <li class="">
                            <a href="function.escapeshellcmd.php" title="escapeshellcmd">escapeshellcmd</a>
                        </li>
                                                <li class="">
                            <a href="function.exec.php" title="exec">exec</a>
                        </li>
                                                <li class="">
                            <a href="function.passthru.php" title="passthru">passthru</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-close.php" title="proc_&#8203;close">proc_&#8203;close</a>
                        </li>
                                                <li class="current">
                            <a href="function.proc-get-status.php" title="proc_&#8203;get_&#8203;status">proc_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-nice.php" title="proc_&#8203;nice">proc_&#8203;nice</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-open.php" title="proc_&#8203;open">proc_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-terminate.php" title="proc_&#8203;terminate">proc_&#8203;terminate</a>
                        </li>
                                                <li class="">
                            <a href="function.shell-exec.php" title="shell_&#8203;exec">shell_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.system.php" title="system">system</a>
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
