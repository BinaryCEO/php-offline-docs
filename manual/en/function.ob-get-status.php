<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ob_get_status - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ob-get-status.php">
 <link rel="shorturl" href="https://www.php.net/ob-get-status">
 <link rel="alternate" href="https://www.php.net/ob-get-status" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.outcontrol.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ob-get-level.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ob-implicit-flush.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ob-get-status.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ob-get-status.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ob-get-status.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ob-get-status.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ob-get-status.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ob-get-status.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ob-get-status.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ob-get-status.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ob-get-status.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ob-get-status.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ob-get-status.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get status of output buffers" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ob_get_status - Manual" />
<meta name="twitter:description" content="Get status of output buffers" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ob_get_status - Manual" />
<meta itemprop="description" content="Get status of output buffers" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get status of output buffers" />

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
        <a href="function.ob-implicit-flush.php">
          ob_implicit_flush &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ob-get-level.php">
          &laquo; ob_get_level        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.outcontrol.php'>Output Control</a></li>      <li><a href='ref.outcontrol.php'>Output Control Functions</a></li>      </ul>
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
            <option value='en/function.ob-get-status.php' selected="selected">English</option>
            <option value='de/function.ob-get-status.php'>German</option>
            <option value='es/function.ob-get-status.php'>Spanish</option>
            <option value='fr/function.ob-get-status.php'>French</option>
            <option value='it/function.ob-get-status.php'>Italian</option>
            <option value='ja/function.ob-get-status.php'>Japanese</option>
            <option value='pt_BR/function.ob-get-status.php'>Brazilian Portuguese</option>
            <option value='ru/function.ob-get-status.php'>Russian</option>
            <option value='tr/function.ob-get-status.php'>Turkish</option>
            <option value='uk/function.ob-get-status.php'>Ukrainian</option>
            <option value='zh/function.ob-get-status.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ob-get-status" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ob_get_status</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ob_get_status</span> &mdash; <span class="dc-title">Get status of output buffers</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.ob-get-status-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ob_get_status</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$full_status</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>ob_get_status()</strong></span> returns status information on either
   the top level output buffer or all active output buffer levels if
   <code class="parameter">full_status</code> is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ob-get-status-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">full_status</code></dt>
     <dd>
      <p class="para">
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> to return all active output buffer levels. If <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> or not
       set, only the top level output buffer is returned.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ob-get-status-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   If <code class="parameter">full_status</code> is omitted or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> a simple array
   holding status information on the active output level is returned.
  </p>
  <p class="para">
   If <code class="parameter">full_status</code> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> an array
   with one element for each active output buffer level is returned.
   The output level is used as key of the top level array and each array
   element itself is another array holding status information
   on one active output level.
  </p>
  <p class="para">
   An empty array is returned if output buffering is not turned on.
  </p>
  <p class="para">
   <table class="segmentedlist">
    <caption><strong><span class="function"><strong>ob_get_status()</strong></span> return array elements</strong></caption>
    <thead><tr><th>Key</th><th>Value</th>
    </tr></thead><tbody><tr class="seglistitem">
     <td class="seg">name</td>
     <td class="seg">
      Name of active output handler (see the return values of
      <span class="function"><a href="function.ob-list-handlers.php" class="function">ob_list_handlers()</a></span> for details)
     </td>
    </tr>
    <tr class="seglistitem">
     <td class="seg">type</td>
     <td class="seg">
      <code class="literal">0</code> (internal handler) or
      <code class="literal">1</code> (user supplied handler)
     </td>
    </tr>
    <tr class="seglistitem">
     <td class="seg">flags</td>
     <td class="seg">
      Bitmask of flags set by <span class="function"><a href="function.ob-start.php" class="function">ob_start()</a></span>,
      the type of output handler (see above)
      and the status of the buffering process
      (<a href="outcontrol.constants.php#outcontrol.constants.flags-returned-by-handler" class="link">
       <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-start">PHP_OUTPUT_HANDLER_<span class="replaceable">*</span></a></code></strong>
      </a> constants).
      If the handler successfully processed the buffer and did not return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>,
      <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-started">PHP_OUTPUT_HANDLER_STARTED</a></code></strong> and
      <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-processed">PHP_OUTPUT_HANDLER_PROCESSED</a></code></strong> will be set.
      If the handler failed while processing the buffer or returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>,
      <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-started">PHP_OUTPUT_HANDLER_STARTED</a></code></strong> and
      <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-disabled">PHP_OUTPUT_HANDLER_DISABLED</a></code></strong> will be set.
     </td>
    </tr>
    <tr class="seglistitem">
     <td class="seg">level</td>
     <td class="seg">
      Output nesting level (zero based). Note that the value returned for the
      same level by <span class="function"><a href="function.ob-get-level.php" class="function">ob_get_level()</a></span> is off by one.
      The first level is <code class="literal">0</code> for <span class="function"><strong>ob_get_status()</strong></span>,
      and <code class="literal">1</code> for <span class="function"><a href="function.ob-get-level.php" class="function">ob_get_level()</a></span>.
     </td>
    </tr>
    <tr class="seglistitem">
     <td class="seg">chunk_size</td>
     <td class="seg">
      Chunk size in bytes. Set by <span class="function"><a href="function.ob-start.php" class="function">ob_start()</a></span>
      or <a href="outcontrol.configuration.php#ini.output-buffering" class="link">output_buffering</a> is enabled
      and its value is set to a positive integer
     </td>
    </tr>
    <tr class="seglistitem">
     <td class="seg">buffer_size</td>
     <td class="seg">
      Output buffer size in bytes
     </td>
    </tr>
    <tr class="seglistitem">
     <td class="seg">buffer_used</td>
     <td class="seg">
      Size of data in output buffer in bytes
      (the same as the integer return value of <span class="function"><a href="function.ob-get-length.php" class="function">ob_get_length()</a></span>)
     </td>
    </tr>
   </tbody></table>
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ob-get-status-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-624">
    <p><strong>Example #1 Array returned when <code class="parameter">full_status</code> is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></strong></p>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [name] =&gt; URL-Rewriter
    [type] =&gt; 0
    [flags] =&gt; 112
    [level] =&gt; 2
    [chunk_size] =&gt; 0
    [buffer_size] =&gt; 16384
    [buffer_used] =&gt; 1024
)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-625">
    <p><strong>Example #2 Array returned when <code class="parameter">full_status</code> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></strong></p>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [0] =&gt; Array
        (
            [name] =&gt; default output handler
            [type] =&gt; 0
            [flags] =&gt; 112
            [level] =&gt; 1
            [chunk_size] =&gt; 0
            [buffer_size] =&gt; 16384
            [buffer_used] =&gt; 2048
        )

    [1] =&gt; Array
        (
            [name] =&gt; URL-Rewriter
            [type] =&gt; 0
            [flags] =&gt; 112
            [level] =&gt; 2
            [chunk_size] =&gt; 0
            [buffer_size] =&gt; 16384
            [buffer_used] =&gt; 1024
        )

)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ob-get-status-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ob-get-level.php" class="function" rel="rdfs-seeAlso">ob_get_level()</a> - Return the nesting level of the output buffering mechanism</span></li>
    <li><span class="function"><a href="function.ob-list-handlers.php" class="function" rel="rdfs-seeAlso">ob_list_handlers()</a> - List all output handlers in use</span></li>
    <li><span class="function"><a href="function.ob-get-length.php" class="function" rel="rdfs-seeAlso">ob_get_length()</a> - Return the length of the output buffer</span></li>
    <li><span class="function"><a href="function.ob-start.php" class="function" rel="rdfs-seeAlso">ob_start()</a> - Turn on output buffering</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/outcontrol/functions/ob-get-status.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ob-get-status%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ob-get-status&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ob-get-status.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121633">  <div class="votes">
    <div id="Vu121633">
    <a href="/manual/vote-note.php?id=121633&amp;page=function.ob-get-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121633">
    <a href="/manual/vote-note.php?id=121633&amp;page=function.ob-get-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121633" title="66% like this...">
    4
    </div>
  </div>
  <a href="#121633" class="name">
  <strong class="user"><em>rmagalhaess at hotmail dot com</em></strong></a><a class="genanchor" href="#121633"> &para;</a><div class="date" title="2017-09-12 07:32"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121633">
<div class="phpcode"><code><span class="html">The fields inside the array returned by ob_get_status() are:<br /><br />Array<br />(<br />    [name] =&gt; default output handler<br />    [type] =&gt; 0<br />    [flags] =&gt; 112<br />    [level] =&gt; 1<br />    [chunk_size] =&gt; 0<br />    [buffer_size] =&gt; 16384<br />    [buffer_used] =&gt; 0<br />)<br /><br />These values are filled just after the function ob_start()</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ob-get-status&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ob-get-status.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.outcontrol.php">Output Control Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.flush.php" title="flush">flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-clean.php" title="ob_&#8203;clean">ob_&#8203;clean</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-end-clean.php" title="ob_&#8203;end_&#8203;clean">ob_&#8203;end_&#8203;clean</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-end-flush.php" title="ob_&#8203;end_&#8203;flush">ob_&#8203;end_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-flush.php" title="ob_&#8203;flush">ob_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-clean.php" title="ob_&#8203;get_&#8203;clean">ob_&#8203;get_&#8203;clean</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-contents.php" title="ob_&#8203;get_&#8203;contents">ob_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-flush.php" title="ob_&#8203;get_&#8203;flush">ob_&#8203;get_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-length.php" title="ob_&#8203;get_&#8203;length">ob_&#8203;get_&#8203;length</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-level.php" title="ob_&#8203;get_&#8203;level">ob_&#8203;get_&#8203;level</a>
                        </li>
                                                <li class="current">
                            <a href="function.ob-get-status.php" title="ob_&#8203;get_&#8203;status">ob_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-implicit-flush.php" title="ob_&#8203;implicit_&#8203;flush">ob_&#8203;implicit_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-list-handlers.php" title="ob_&#8203;list_&#8203;handlers">ob_&#8203;list_&#8203;handlers</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-start.php" title="ob_&#8203;start">ob_&#8203;start</a>
                        </li>
                                                <li class="">
                            <a href="function.output-add-rewrite-var.php" title="output_&#8203;add_&#8203;rewrite_&#8203;var">output_&#8203;add_&#8203;rewrite_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.output-reset-rewrite-vars.php" title="output_&#8203;reset_&#8203;rewrite_&#8203;vars">output_&#8203;reset_&#8203;rewrite_&#8203;vars</a>
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
