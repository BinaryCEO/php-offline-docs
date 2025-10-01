<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: deflate_add - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.deflate-add.php">
 <link rel="shorturl" href="https://www.php.net/deflate-add">
 <link rel="alternate" href="https://www.php.net/deflate-add" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.zlib.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.zlib.php">
 <link rel="next" href="https://www.php.net/manual/en/function.deflate-init.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.deflate-add.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.deflate-add.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.deflate-add.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.deflate-add.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.deflate-add.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.deflate-add.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.deflate-add.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.deflate-add.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.deflate-add.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.deflate-add.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.deflate-add.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Incrementally deflate data" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: deflate_add - Manual" />
<meta name="twitter:description" content="Incrementally deflate data" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: deflate_add - Manual" />
<meta itemprop="description" content="Incrementally deflate data" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Incrementally deflate data" />

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
        <a href="function.deflate-init.php">
          deflate_init &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.zlib.php">
          &laquo; Zlib Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.zlib.php'>Zlib</a></li>      <li><a href='ref.zlib.php'>Zlib Functions</a></li>      </ul>
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
            <option value='en/function.deflate-add.php' selected="selected">English</option>
            <option value='de/function.deflate-add.php'>German</option>
            <option value='es/function.deflate-add.php'>Spanish</option>
            <option value='fr/function.deflate-add.php'>French</option>
            <option value='it/function.deflate-add.php'>Italian</option>
            <option value='ja/function.deflate-add.php'>Japanese</option>
            <option value='pt_BR/function.deflate-add.php'>Brazilian Portuguese</option>
            <option value='ru/function.deflate-add.php'>Russian</option>
            <option value='tr/function.deflate-add.php'>Turkish</option>
            <option value='uk/function.deflate-add.php'>Ukrainian</option>
            <option value='zh/function.deflate-add.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.deflate-add" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">deflate_add</h1>
  <p class="verinfo">(PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">deflate_add</span> &mdash; <span class="dc-title">Incrementally deflate data</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.deflate-add-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>deflate_add</strong></span>(<span class="methodparam"><span class="type"><a href="class.deflatecontext.php" class="type DeflateContext">DeflateContext</a></span> <code class="parameter">$context</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flush_mode</code><span class="initializer"> = <strong><code><a href="zlib.constants.php#constant.zlib-sync-flush">ZLIB_SYNC_FLUSH</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Incrementally deflates data in the specified context.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.deflate-add-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">context</code></dt>
    <dd>
     <p class="para">
      A context created with <span class="function"><a href="function.deflate-init.php" class="function">deflate_init()</a></span>.
     </p>
    </dd>
   
   
    <dt><code class="parameter">data</code></dt>
    <dd>
     <p class="para">
      A chunk of data to compress.
     </p>
    </dd>
   
   
    <dt><code class="parameter">flush_mode</code></dt>
    <dd>
     <p class="para">
      One of <strong><code><a href="zlib.constants.php#constant.zlib-block">ZLIB_BLOCK</a></code></strong>,
      <strong><code><a href="zlib.constants.php#constant.zlib-no-flush">ZLIB_NO_FLUSH</a></code></strong>,
      <strong><code><a href="zlib.constants.php#constant.zlib-partial-flush">ZLIB_PARTIAL_FLUSH</a></code></strong>,
      <strong><code><a href="zlib.constants.php#constant.zlib-sync-flush">ZLIB_SYNC_FLUSH</a></code></strong> (default),
      <strong><code><a href="zlib.constants.php#constant.zlib-full-flush">ZLIB_FULL_FLUSH</a></code></strong>, <strong><code><a href="zlib.constants.php#constant.zlib-finish">ZLIB_FINISH</a></code></strong>.
      Normally you will want to set <strong><code><a href="zlib.constants.php#constant.zlib-no-flush">ZLIB_NO_FLUSH</a></code></strong> to
      maximize compression, and <strong><code><a href="zlib.constants.php#constant.zlib-finish">ZLIB_FINISH</a></code></strong> to terminate
      with the last chunk of data. See the <a href="http://www.zlib.net/manual.html" class="link external">&raquo;&nbsp;zlib manual</a> for a
      detailed description of these constants.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.deflate-add-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a chunk of compressed data,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.deflate-add-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If invalid arguments are given, an error of level
   <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is generated.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.deflate-add-changelog">
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
      <td>8.0.0</td>
      <td>
       <code class="parameter">context</code> expects a <span class="classname"><a href="class.deflatecontext.php" class="classname">DeflateContext</a></span>
       instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.deflate-add-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.deflate-init.php" class="function" rel="rdfs-seeAlso">deflate_init()</a> - Initialize an incremental deflate context</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/zlib/functions/deflate_add.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.deflate-add%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.deflate-add&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.deflate-add.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122932">  <div class="votes">
    <div id="Vu122932">
    <a href="/manual/vote-note.php?id=122932&amp;page=function.deflate-add&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122932">
    <a href="/manual/vote-note.php?id=122932&amp;page=function.deflate-add&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122932" title="66% like this...">
    1
    </div>
  </div>
  <a href="#122932" class="name">
  <strong class="user"><em>douglasjam at gmail dot com</em></strong></a><a class="genanchor" href="#122932"> &para;</a><div class="date" title="2018-07-12 10:03"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122932">
<div class="phpcode"><code><span class="html">Example about to use deflate functions to write a gzip encoded file in chunks.<br /><br /><span class="default">&lt;?php<br /><br />$handler </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'/tmp/test.csv'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);<br /></span><span class="default">$deflateContext </span><span class="keyword">= </span><span class="default">deflate_init</span><span class="keyword">(</span><span class="default">ZLIB_ENCODING_GZIP</span><span class="keyword">, [</span><span class="string">'level' </span><span class="keyword">=&gt; </span><span class="default">9</span><span class="keyword">]);<br /><br /></span><span class="default">$strings </span><span class="keyword">= [<br />    </span><span class="string">'Hello, how are you?' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">,<br />    </span><span class="string">'I am fine thanks' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">,<br />    </span><span class="string">'Hello, how are you?' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">,<br />];<br /><br />foreach (</span><span class="default">$strings </span><span class="keyword">as </span><span class="default">$string</span><span class="keyword">) {<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$handler</span><span class="keyword">, </span><span class="default">deflate_add</span><span class="keyword">(</span><span class="default">$deflateContext</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">ZLIB_NO_FLUSH</span><span class="keyword">));<br />}<br /><br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$handler</span><span class="keyword">, </span><span class="default">deflate_add</span><span class="keyword">(</span><span class="default">$deflateContext</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">ZLIB_FINISH</span><span class="keyword">));<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handler</span><span class="keyword">);<br /><br />echo </span><span class="default">gzdecode</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'/tmp/test.csv'</span><span class="keyword">));</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.deflate-add&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.deflate-add.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.zlib.php">Zlib Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.deflate-add.php" title="deflate_&#8203;add">deflate_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.deflate-init.php" title="deflate_&#8203;init">deflate_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.gzclose.php" title="gzclose">gzclose</a>
                        </li>
                                                <li class="">
                            <a href="function.gzcompress.php" title="gzcompress">gzcompress</a>
                        </li>
                                                <li class="">
                            <a href="function.gzdecode.php" title="gzdecode">gzdecode</a>
                        </li>
                                                <li class="">
                            <a href="function.gzdeflate.php" title="gzdeflate">gzdeflate</a>
                        </li>
                                                <li class="">
                            <a href="function.gzencode.php" title="gzencode">gzencode</a>
                        </li>
                                                <li class="">
                            <a href="function.gzeof.php" title="gzeof">gzeof</a>
                        </li>
                                                <li class="">
                            <a href="function.gzfile.php" title="gzfile">gzfile</a>
                        </li>
                                                <li class="">
                            <a href="function.gzgetc.php" title="gzgetc">gzgetc</a>
                        </li>
                                                <li class="">
                            <a href="function.gzgets.php" title="gzgets">gzgets</a>
                        </li>
                                                <li class="">
                            <a href="function.gzgetss.php" title="gzgetss">gzgetss</a>
                        </li>
                                                <li class="">
                            <a href="function.gzinflate.php" title="gzinflate">gzinflate</a>
                        </li>
                                                <li class="">
                            <a href="function.gzopen.php" title="gzopen">gzopen</a>
                        </li>
                                                <li class="">
                            <a href="function.gzpassthru.php" title="gzpassthru">gzpassthru</a>
                        </li>
                                                <li class="">
                            <a href="function.gzputs.php" title="gzputs">gzputs</a>
                        </li>
                                                <li class="">
                            <a href="function.gzread.php" title="gzread">gzread</a>
                        </li>
                                                <li class="">
                            <a href="function.gzrewind.php" title="gzrewind">gzrewind</a>
                        </li>
                                                <li class="">
                            <a href="function.gzseek.php" title="gzseek">gzseek</a>
                        </li>
                                                <li class="">
                            <a href="function.gztell.php" title="gztell">gztell</a>
                        </li>
                                                <li class="">
                            <a href="function.gzuncompress.php" title="gzuncompress">gzuncompress</a>
                        </li>
                                                <li class="">
                            <a href="function.gzwrite.php" title="gzwrite">gzwrite</a>
                        </li>
                                                <li class="">
                            <a href="function.inflate-add.php" title="inflate_&#8203;add">inflate_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.inflate-get-read-len.php" title="inflate_&#8203;get_&#8203;read_&#8203;len">inflate_&#8203;get_&#8203;read_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.inflate-get-status.php" title="inflate_&#8203;get_&#8203;status">inflate_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.inflate-init.php" title="inflate_&#8203;init">inflate_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-gzhandler.php" title="ob_&#8203;gzhandler">ob_&#8203;gzhandler</a>
                        </li>
                                                <li class="">
                            <a href="function.readgzfile.php" title="readgzfile">readgzfile</a>
                        </li>
                                                <li class="">
                            <a href="function.zlib-decode.php" title="zlib_&#8203;decode">zlib_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.zlib-encode.php" title="zlib_&#8203;encode">zlib_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.zlib-get-coding-type.php" title="zlib_&#8203;get_&#8203;coding_&#8203;type">zlib_&#8203;get_&#8203;coding_&#8203;type</a>
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
