<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mb_convert_case - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mb-convert-case.php">
 <link rel="shorturl" href="https://www.php.net/mb-convert-case">
 <link rel="alternate" href="https://www.php.net/mb-convert-case" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mbstring.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mb-chr.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mb-convert-encoding.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mb-convert-case.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mb-convert-case.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mb-convert-case.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mb-convert-case.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mb-convert-case.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mb-convert-case.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mb-convert-case.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mb-convert-case.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mb-convert-case.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mb-convert-case.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mb-convert-case.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Perform case folding on a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mb_convert_case - Manual" />
<meta name="twitter:description" content="Perform case folding on a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mb_convert_case - Manual" />
<meta itemprop="description" content="Perform case folding on a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Perform case folding on a string" />

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
        <a href="function.mb-convert-encoding.php">
          mb_convert_encoding &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mb-chr.php">
          &laquo; mb_chr        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.mbstring.php'>Multibyte String</a></li>      <li><a href='ref.mbstring.php'>Multibyte String Functions</a></li>      </ul>
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
            <option value='en/function.mb-convert-case.php' selected="selected">English</option>
            <option value='de/function.mb-convert-case.php'>German</option>
            <option value='es/function.mb-convert-case.php'>Spanish</option>
            <option value='fr/function.mb-convert-case.php'>French</option>
            <option value='it/function.mb-convert-case.php'>Italian</option>
            <option value='ja/function.mb-convert-case.php'>Japanese</option>
            <option value='pt_BR/function.mb-convert-case.php'>Brazilian Portuguese</option>
            <option value='ru/function.mb-convert-case.php'>Russian</option>
            <option value='tr/function.mb-convert-case.php'>Turkish</option>
            <option value='uk/function.mb-convert-case.php'>Ukrainian</option>
            <option value='zh/function.mb-convert-case.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mb-convert-case" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mb_convert_case</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mb_convert_case</span> &mdash; <span class="dc-title">Perform case folding on a string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.mb-convert-case-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mb_convert_case</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$encoding</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Performs case folding on a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>, converted in the way specified by
   <code class="parameter">mode</code>.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.mb-convert-case-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> being converted.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       The mode of the conversion. It can be one of 
       <strong><code><a href="mbstring.constants.php#constant.mb-case-upper">MB_CASE_UPPER</a></code></strong>, 
       <strong><code><a href="mbstring.constants.php#constant.mb-case-lower">MB_CASE_LOWER</a></code></strong>, 
       <strong><code><a href="mbstring.constants.php#constant.mb-case-title">MB_CASE_TITLE</a></code></strong>,
       <strong><code><a href="mbstring.constants.php#constant.mb-case-fold">MB_CASE_FOLD</a></code></strong>,
       <strong><code><a href="mbstring.constants.php#constant.mb-case-upper-simple">MB_CASE_UPPER_SIMPLE</a></code></strong>,
       <strong><code><a href="mbstring.constants.php#constant.mb-case-lower-simple">MB_CASE_LOWER_SIMPLE</a></code></strong>,
       <strong><code><a href="mbstring.constants.php#constant.mb-case-title-simple">MB_CASE_TITLE_SIMPLE</a></code></strong>,
       <strong><code><a href="mbstring.constants.php#constant.mb-case-fold-simple">MB_CASE_FOLD_SIMPLE</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">encoding</code></dt>
     <dd>
      <p class="para">The <code class="parameter">encoding</code>
parameter is the character encoding. If it is omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the internal character
encoding value will be used.</p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.mb-convert-case-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A case folded version of <code class="parameter">string</code> converted in the
   way specified by <code class="parameter">mode</code>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.mb-convert-case-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
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
        Implemented conditional casing rules for the Greek letter sigma
        which only apply to <strong><code><a href="mbstring.constants.php#constant.mb-case-lower">MB_CASE_LOWER</a></code></strong>
        and <strong><code><a href="mbstring.constants.php#constant.mb-case-title">MB_CASE_TITLE</a></code></strong> modes, not
        to <strong><code><a href="mbstring.constants.php#constant.mb-case-lower-simple">MB_CASE_LOWER_SIMPLE</a></code></strong> and
        <strong><code><a href="mbstring.constants.php#constant.mb-case-title-simple">MB_CASE_TITLE_SIMPLE</a></code></strong>.
       </td>
      </tr>

      <tr>
       <td>7.3.0</td>
       <td>
        Added support for
        <strong><code><a href="mbstring.constants.php#constant.mb-case-fold">MB_CASE_FOLD</a></code></strong>,
        <strong><code><a href="mbstring.constants.php#constant.mb-case-upper-simple">MB_CASE_UPPER_SIMPLE</a></code></strong>,
        <strong><code><a href="mbstring.constants.php#constant.mb-case-lower-simple">MB_CASE_LOWER_SIMPLE</a></code></strong>,
        <strong><code><a href="mbstring.constants.php#constant.mb-case-title-simple">MB_CASE_TITLE_SIMPLE</a></code></strong>, and
        <strong><code><a href="mbstring.constants.php#constant.mb-case-fold-simple">MB_CASE_FOLD_SIMPLE</a></code></strong>
        as <code class="parameter">mode</code>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.mb-convert-case-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2763">
    <p><strong>Example #1 <span class="function"><strong>mb_convert_case()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"mary had a Little lamb and she loved it so"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_convert_case</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">MB_CASE_UPPER</span><span style="color: #007700">, </span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_convert_case</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">MB_CASE_TITLE</span><span style="color: #007700">, </span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   <div class="example" id="example-2764">
    <p><strong>Example #2 <span class="function"><strong>mb_convert_case()</strong></span> example with non-Latin UTF-8 text</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_convert_case</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">MB_CASE_UPPER</span><span style="color: #007700">, </span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_convert_case</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">MB_CASE_TITLE</span><span style="color: #007700">, </span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.mb-convert-case-notes">
  <h3 class="title">Notes</h3>
  <p class="para">
   By contrast to the standard case folding functions such as
   <span class="function"><a href="function.strtolower.php" class="function">strtolower()</a></span> and <span class="function"><a href="function.strtoupper.php" class="function">strtoupper()</a></span>,
   case folding is performed on the basis of the Unicode character
   properties. Thus the behaviour of this function is not affected
   by locale settings and it can convert any characters that have
   &#039;alphabetic&#039; property, such a-umlaut (ä).
  </p>
  <p class="para">
   For more information about the Unicode properties, please see <a href="http://www.unicode.org/reports/tr21/" class="link external">&raquo;&nbsp;http://www.unicode.org/reports/tr21/</a>.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mb-convert-case-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mb-strtolower.php" class="function" rel="rdfs-seeAlso">mb_strtolower()</a> - Make a string lowercase</span></li>
    <li><span class="function"><a href="function.mb-strtoupper.php" class="function" rel="rdfs-seeAlso">mb_strtoupper()</a> - Make a string uppercase</span></li>
    <li><span class="function"><a href="function.strtolower.php" class="function" rel="rdfs-seeAlso">strtolower()</a> - Make a string lowercase</span></li>
    <li><span class="function"><a href="function.strtoupper.php" class="function" rel="rdfs-seeAlso">strtoupper()</a> - Make a string uppercase</span></li>
    <li><span class="function"><a href="function.ucfirst.php" class="function" rel="rdfs-seeAlso">ucfirst()</a> - Make a string's first character uppercase</span></li>
    <li><span class="function"><a href="function.ucwords.php" class="function" rel="rdfs-seeAlso">ucwords()</a> - Uppercase the first character of each word in a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mbstring/functions/mb-convert-case.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mb-convert-case%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mb-convert-case&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-convert-case.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124800">  <div class="votes">
    <div id="Vu124800">
    <a href="/manual/vote-note.php?id=124800&amp;page=function.mb-convert-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124800">
    <a href="/manual/vote-note.php?id=124800&amp;page=function.mb-convert-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124800" title="87% like this...">
    12
    </div>
  </div>
  <a href="#124800" class="name">
  <strong class="user"><em>alNzy</em></strong></a><a class="genanchor" href="#124800"> &para;</a><div class="date" title="2020-03-05 08:29"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124800">
<div class="phpcode"><code><span class="html">You can use this function to fix problems related to Turkish "ı", "I", "i", "İ" characters. This function also replaces the weird "i̇" character with regular "i" character ("i̇ =&gt; i").<br /><br />function mb_convert_case_tr($str, $type, $encoding = "UTF-8")<br />{<br /><br />  switch ($type) {<br />    case "u":<br />    case "upper":<br />    case MB_CASE_UPPER:<br />      $type = MB_CASE_UPPER;<br />      break;<br />    case "l":<br />    case "lower":<br />    case MB_CASE_LOWER:<br />      $type = MB_CASE_LOWER;<br />      break;<br />    case "t":<br />    case "title":<br />    case MB_CASE_TITLE:<br />      $type = MB_CASE_TITLE;<br />      break;<br />  }<br /><br />  $str = str_replace("i", "İ", $str);<br />  $str = str_replace("I", "ı", $str);<br /><br />  $str = mb_convert_case($str, $type, $encoding);<br />  $str = str_replace("i̇", "i", $str);<br /><br />  return $str;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="92317">  <div class="votes">
    <div id="Vu92317">
    <a href="/manual/vote-note.php?id=92317&amp;page=function.mb-convert-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92317">
    <a href="/manual/vote-note.php?id=92317&amp;page=function.mb-convert-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92317" title="67% like this...">
    10
    </div>
  </div>
  <a href="#92317" class="name">
  <strong class="user"><em>agash at freemail dot hu</em></strong></a><a class="genanchor" href="#92317"> &para;</a><div class="date" title="2009-07-19 03:27"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92317">
<div class="phpcode"><code><span class="html">as the previouly posted version of this function doesn't handle UTF-8 characters, I simply tried to replace ucfirst to mb_convert_case, but then any previous case foldings were lost while looping through delimiters. <br />So I decided to do an mb_convert_case on the input string (it also deals with words is uppercase wich may also be problematic when doing case-sensitive search), and do the rest of checking after that.<br /><br />As with mb_convert_case, words are capitalized, I also added lowercase convertion for the exceptions, but, for the above mentioned reason, I left ucfirst unchanged.<br /><br />Now it works fine for utf-8 strings as well, except for string delimiters followed by an UTF-8 character ("Mcádám" is unchanged, while "mcdunno's" is converted to "McDunno's" and "ökrös-TÓTH éDUa" in also put in the correct form)<br /><br />I use it for checking user input on names and addresses, so exceptions list contains some hungarian words too.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">titleCase</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$delimiters </span><span class="keyword">= array(</span><span class="string">" "</span><span class="keyword">, </span><span class="string">"-"</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">, </span><span class="string">"'"</span><span class="keyword">, </span><span class="string">"O'"</span><span class="keyword">, </span><span class="string">"Mc"</span><span class="keyword">), </span><span class="default">$exceptions </span><span class="keyword">= array(</span><span class="string">"út"</span><span class="keyword">, </span><span class="string">"u"</span><span class="keyword">, </span><span class="string">"s"</span><span class="keyword">, </span><span class="string">"és"</span><span class="keyword">, </span><span class="string">"utca"</span><span class="keyword">, </span><span class="string">"tér"</span><span class="keyword">, </span><span class="string">"krt"</span><span class="keyword">, </span><span class="string">"körút"</span><span class="keyword">, </span><span class="string">"sétány"</span><span class="keyword">, </span><span class="string">"I"</span><span class="keyword">, </span><span class="string">"II"</span><span class="keyword">, </span><span class="string">"III"</span><span class="keyword">, </span><span class="string">"IV"</span><span class="keyword">, </span><span class="string">"V"</span><span class="keyword">, </span><span class="string">"VI"</span><span class="keyword">, </span><span class="string">"VII"</span><span class="keyword">, </span><span class="string">"VIII"</span><span class="keyword">, </span><span class="string">"IX"</span><span class="keyword">, </span><span class="string">"X"</span><span class="keyword">, </span><span class="string">"XI"</span><span class="keyword">, </span><span class="string">"XII"</span><span class="keyword">, </span><span class="string">"XIII"</span><span class="keyword">, </span><span class="string">"XIV"</span><span class="keyword">, </span><span class="string">"XV"</span><span class="keyword">, </span><span class="string">"XVI"</span><span class="keyword">, </span><span class="string">"XVII"</span><span class="keyword">, </span><span class="string">"XVIII"</span><span class="keyword">, </span><span class="string">"XIX"</span><span class="keyword">, </span><span class="string">"XX"</span><span class="keyword">, </span><span class="string">"XXI"</span><span class="keyword">, </span><span class="string">"XXII"</span><span class="keyword">, </span><span class="string">"XXIII"</span><span class="keyword">, </span><span class="string">"XXIV"</span><span class="keyword">, </span><span class="string">"XXV"</span><span class="keyword">, </span><span class="string">"XXVI"</span><span class="keyword">, </span><span class="string">"XXVII"</span><span class="keyword">, </span><span class="string">"XXVIII"</span><span class="keyword">, </span><span class="string">"XXIX"</span><span class="keyword">, </span><span class="string">"XXX" </span><span class="keyword">)) {<br />       </span><span class="comment">/*<br />        * Exceptions in lower case are words you don't want converted<br />        * Exceptions all in upper case are any words you don't want converted to title case<br />        *   but should be converted to upper case, e.g.:<br />        *   king henry viii or king henry Viii should be King Henry VIII<br />        */<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">mb_convert_case</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">MB_CASE_TITLE</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br /><br />       foreach (</span><span class="default">$delimiters </span><span class="keyword">as </span><span class="default">$dlnr </span><span class="keyword">=&gt; </span><span class="default">$delimiter</span><span class="keyword">){<br />               </span><span class="default">$words </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />               </span><span class="default">$newwords </span><span class="keyword">= array();<br />               foreach (</span><span class="default">$words </span><span class="keyword">as </span><span class="default">$wordnr </span><span class="keyword">=&gt; </span><span class="default">$word</span><span class="keyword">){<br />               <br />                       if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">), </span><span class="default">$exceptions</span><span class="keyword">)){<br />                               </span><span class="comment">// check exceptions list for any words that should be in upper case<br />                               </span><span class="default">$word </span><span class="keyword">= </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br />                       }<br />                       elseif (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">), </span><span class="default">$exceptions</span><span class="keyword">)){<br />                               </span><span class="comment">// check exceptions list for any words that should be in upper case<br />                               </span><span class="default">$word </span><span class="keyword">= </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br />                       }<br />                       <br />                       elseif (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">, </span><span class="default">$exceptions</span><span class="keyword">) ){<br />                               </span><span class="comment">// convert to uppercase (non-utf8 only)<br />                             <br />                               </span><span class="default">$word </span><span class="keyword">= </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">);<br />                               <br />                       }<br />                       </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$newwords</span><span class="keyword">, </span><span class="default">$word</span><span class="keyword">);<br />               }<br />               </span><span class="default">$string </span><span class="keyword">= </span><span class="default">join</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$newwords</span><span class="keyword">);<br />       }</span><span class="comment">//foreach<br />       </span><span class="keyword">return </span><span class="default">$string</span><span class="keyword">;<br />} <br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52418">  <div class="votes">
    <div id="Vu52418">
    <a href="/manual/vote-note.php?id=52418&amp;page=function.mb-convert-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52418">
    <a href="/manual/vote-note.php?id=52418&amp;page=function.mb-convert-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52418" title="64% like this...">
    5
    </div>
  </div>
  <a href="#52418" class="name">
  <strong class="user"><em>Rasa Ravi at tantrajoga dot cz</em></strong></a><a class="genanchor" href="#52418"> &para;</a><div class="date" title="2005-04-30 01:36"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52418">
<div class="phpcode"><code><span class="html">For CZECH characters:<br /><span class="default">&lt;?php<br />$text </span><span class="keyword">= </span><span class="default">mb_convert_case</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">MB_CASE_LOWER</span><span class="keyword">, </span><span class="string">"Windows-1251"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>The right encoding Windows-1250 is not valid (see the list mb_list_encodings), but Windows-1251 will do the same 100%. The function strtolower() ignores czech characters with diacritics.</span></code></div>
  </div>
 </div>
  <div class="note" id="84227">  <div class="votes">
    <div id="Vu84227">
    <a href="/manual/vote-note.php?id=84227&amp;page=function.mb-convert-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84227">
    <a href="/manual/vote-note.php?id=84227&amp;page=function.mb-convert-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84227" title="57% like this...">
    3
    </div>
  </div>
  <a href="#84227" class="name">
  <strong class="user"><em>info at yasarnet dot com</em></strong></a><a class="genanchor" href="#84227"> &para;</a><div class="date" title="2008-07-03 11:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84227">
<div class="phpcode"><code><span class="html">For my case following did the work to capitalize UTF-8 encoded string. <br /><br />function capitalize($str, $encoding = 'UTF-8') {<br />    return mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding) . mb_strtolower(mb_substr($str, 1, mb_strlen($str), $encoding), $encoding);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="90165">  <div class="votes">
    <div id="Vu90165">
    <a href="/manual/vote-note.php?id=90165&amp;page=function.mb-convert-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90165">
    <a href="/manual/vote-note.php?id=90165&amp;page=function.mb-convert-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90165" title="53% like this...">
    1
    </div>
  </div>
  <a href="#90165" class="name">
  <strong class="user"><em>the at psychoticneurotic dot com</em></strong></a><a class="genanchor" href="#90165"> &para;</a><div class="date" title="2009-04-08 10:03"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90165">
<div class="phpcode"><code><span class="html">Building upon Justin's and Alex's work... 
<br />
<br />This function allows you to specify which delimiter(s) to explode on (not just the default space). Now you can correctly capitalize Irish names and hyphenated words (if you want)!
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">titleCase</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$delimiters </span><span class="keyword">= array(</span><span class="string">" "</span><span class="keyword">, </span><span class="string">"-"</span><span class="keyword">, </span><span class="string">"O'"</span><span class="keyword">), </span><span class="default">$exceptions </span><span class="keyword">= array(</span><span class="string">"to"</span><span class="keyword">, </span><span class="string">"a"</span><span class="keyword">, </span><span class="string">"the"</span><span class="keyword">, </span><span class="string">"of"</span><span class="keyword">, </span><span class="string">"by"</span><span class="keyword">, </span><span class="string">"and"</span><span class="keyword">, </span><span class="string">"with"</span><span class="keyword">, </span><span class="string">"II"</span><span class="keyword">, </span><span class="string">"III"</span><span class="keyword">, </span><span class="string">"IV"</span><span class="keyword">, </span><span class="string">"V"</span><span class="keyword">, </span><span class="string">"VI"</span><span class="keyword">, </span><span class="string">"VII"</span><span class="keyword">, </span><span class="string">"VIII"</span><span class="keyword">, </span><span class="string">"IX"</span><span class="keyword">, </span><span class="string">"X"</span><span class="keyword">)) {
<br />       </span><span class="comment">/*
<br />        * Exceptions in lower case are words you don't want converted
<br />        * Exceptions all in upper case are any words you don't want converted to title case
<br />        *   but should be converted to upper case, e.g.:
<br />        *   king henry viii or king henry Viii should be King Henry VIII
<br />        */
<br />       </span><span class="keyword">foreach (</span><span class="default">$delimiters </span><span class="keyword">as </span><span class="default">$delimiter</span><span class="keyword">){
<br />               </span><span class="default">$words </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);
<br />               </span><span class="default">$newwords </span><span class="keyword">= array();
<br />               foreach (</span><span class="default">$words </span><span class="keyword">as </span><span class="default">$word</span><span class="keyword">){
<br />                       if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">), </span><span class="default">$exceptions</span><span class="keyword">)){
<br />                               </span><span class="comment">// check exceptions list for any words that should be in upper case
<br />                               </span><span class="default">$word </span><span class="keyword">= </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">);
<br />                       } elseif (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">, </span><span class="default">$exceptions</span><span class="keyword">)){
<br />                               </span><span class="comment">// convert to uppercase
<br />                               </span><span class="default">$word </span><span class="keyword">= </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">);
<br />                       }
<br />                       </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$newwords</span><span class="keyword">, </span><span class="default">$word</span><span class="keyword">);
<br />               }
<br />               </span><span class="default">$string </span><span class="keyword">= </span><span class="default">join</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$newwords</span><span class="keyword">);
<br />       }
<br />       return </span><span class="default">$string</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129519">  <div class="votes">
    <div id="Vu129519">
    <a href="/manual/vote-note.php?id=129519&amp;page=function.mb-convert-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129519">
    <a href="/manual/vote-note.php?id=129519&amp;page=function.mb-convert-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129519" title="no votes...">
    0
    </div>
  </div>
  <a href="#129519" class="name">
  <strong class="user"><em>turabgarip at gmail dot com</em></strong></a><a class="genanchor" href="#129519"> &para;</a><div class="date" title="2024-05-22 11:25"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129519">
<div class="phpcode"><code><span class="html">As with other string functions, there is a problem with Turkish "i" with this function. There is a bug report from 2015 about the issue but PHP team says "language-specific conditional special case mappings is not implemented", although actually it breaks the logic of the function and renders it non-usable for the purpose.<br /><br /><a href="https://bugs.php.net/bug.php?id=70072" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=70072</a><br /><br />The problem arises from the letter "i" in Latin being a COMPLETELY different letter from "i" in Turkish. Turkish "ı" becomes "I" for capital; while Latin "I" capital is actually capital for "i" and not "ı".<br /><br />PHP takes this into consideration in some cases and ignores it in other cases; which causes an unpredictable behavior. When the letters in question is in the middle or at the beginning of a word, when some of multibyte chars are next to standard Latin chars or another multibyte character etc. These all behave differently, which is simply wrong.<br /><br />There are some user notes trying to cover this but not very efficiently. Because some of them doesn't cover word boundaries and some produce non-standard characters. Here is what I tested and have been using for quite a time:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">mb_convert_case_i</span><span class="keyword">(</span><span class="default">string $string</span><span class="keyword">, </span><span class="default">int $mode </span><span class="keyword">= </span><span class="default">MB_CASE_TITLE</span><span class="keyword">, </span><span class="default">string $encoding </span><span class="keyword">= </span><span class="string">'UTF-8'</span><span class="keyword">): </span><span class="default">string </span><span class="keyword">{<br />    </span><span class="comment">// Turkish "i" is a special case<br />    </span><span class="default">$string </span><span class="keyword">= match(</span><span class="default">$mode</span><span class="keyword">) {<br />        </span><span class="default">MB_CASE_UPPER</span><span class="keyword">, </span><span class="default">MB_CASE_UPPER_SIMPLE </span><span class="keyword">=&gt; </span><span class="default">str_replace</span><span class="keyword">([</span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'ı'</span><span class="keyword">], [</span><span class="string">'İ'</span><span class="keyword">, </span><span class="string">'I'</span><span class="keyword">], </span><span class="default">$string</span><span class="keyword">),<br />        </span><span class="default">MB_CASE_LOWER</span><span class="keyword">, </span><span class="default">MB_CASE_LOWER_SIMPLE </span><span class="keyword">=&gt; </span><span class="default">str_replace</span><span class="keyword">([</span><span class="string">'İ'</span><span class="keyword">, </span><span class="string">'I'</span><span class="keyword">], [</span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'ı'</span><span class="keyword">], </span><span class="default">$string</span><span class="keyword">),<br />        </span><span class="comment">// PHP behaves differently when i and ı are at the beginning of the word<br />        </span><span class="default">MB_CASE_TITLE</span><span class="keyword">, </span><span class="default">MB_CASE_TITLE_SIMPLE </span><span class="keyword">=&gt; </span><span class="default">preg_replace</span><span class="keyword">([</span><span class="string">'/İ/u'</span><span class="keyword">, </span><span class="string">'/I/u'</span><span class="keyword">, </span><span class="string">'/\b(i)/u'</span><span class="keyword">], [</span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'ı'</span><span class="keyword">, </span><span class="string">'İ'</span><span class="keyword">], </span><span class="default">$string</span><span class="keyword">),<br />        default =&gt; </span><span class="default">$string</span><span class="keyword">,<br />    };<br />    return </span><span class="default">mb_convert_case</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />As you have noticed, it uses match syntax which requires PHP 8. For lower versions, you can replace it with switch properly. I haven't tested it for case folding. If you need it, just add another condition to the match.</span></code></div>
  </div>
 </div>
  <div class="note" id="122540">  <div class="votes">
    <div id="Vu122540">
    <a href="/manual/vote-note.php?id=122540&amp;page=function.mb-convert-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122540">
    <a href="/manual/vote-note.php?id=122540&amp;page=function.mb-convert-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122540" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122540" class="name">
  <strong class="user"><em>tavhane at gmail dot com</em></strong></a><a class="genanchor" href="#122540"> &para;</a><div class="date" title="2018-03-24 08:46"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122540">
<div class="phpcode"><code><span class="html">for turkish simple:<br /><br />$str = mb_convert_case(str_replace(['i','I'], ['İ','ı'], $str), MB_CASE_TITLE,"UTF-8");</span></code></div>
  </div>
 </div>
  <div class="note" id="119629">  <div class="votes">
    <div id="Vu119629">
    <a href="/manual/vote-note.php?id=119629&amp;page=function.mb-convert-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119629">
    <a href="/manual/vote-note.php?id=119629&amp;page=function.mb-convert-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119629" title="50% like this...">
    0
    </div>
  </div>
  <a href="#119629" class="name">
  <strong class="user"><em>dave at wp dot pl</em></strong></a><a class="genanchor" href="#119629"> &para;</a><div class="date" title="2016-07-20 12:51"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119629">
<div class="phpcode"><code><span class="html">MB_CASE_TITLE doesn't change letters in quotation marks.<br /><br />Example:<br />mb_convert_case('AAA "aaa"', MB_CASE_TITLE); <br />// Result: Aaa "aaa"</span></code></div>
  </div>
 </div>
  <div class="note" id="126665">  <div class="votes">
    <div id="Vu126665">
    <a href="/manual/vote-note.php?id=126665&amp;page=function.mb-convert-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126665">
    <a href="/manual/vote-note.php?id=126665&amp;page=function.mb-convert-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126665" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#126665" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126665"> &para;</a><div class="date" title="2021-12-05 11:04"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126665">
<div class="phpcode"><code><span class="html">$str = "Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός";<br />$str = mb_convert_case($str, MB_CASE_UPPER, "UTF-8");<br />this convertation does not give the example that you already post <br />but this one<br /><br />$str = mb_convert_case($str, MB_CASE_UPPER, "UTF-8");<br />"ΤΆΧΙΣΤΗ ΑΛΏΠΗΞ ΒΑΦΉΣ ΨΗΜΈΝΗ ΓΗ, ΔΡΑΣΚΕΛΊΖΕΙ ΥΠΈΡ ΝΩΘΡΟΎ ΚΥΝΌΣ"</span></code></div>
  </div>
 </div>
  <div class="note" id="122520">  <div class="votes">
    <div id="Vu122520">
    <a href="/manual/vote-note.php?id=122520&amp;page=function.mb-convert-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122520">
    <a href="/manual/vote-note.php?id=122520&amp;page=function.mb-convert-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122520" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#122520" class="name">
  <strong class="user"><em>webenformasyon at gmail dot com</em></strong></a><a class="genanchor" href="#122520"> &para;</a><div class="date" title="2018-03-18 09:32"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122520">
<div class="phpcode"><code><span class="html">for turkish language I =&gt; i  and i =&gt; I conversion is a problem. It must be I =&gt; ı and i =&gt; İ so my simple solution is<br /><br />    public function title_case_turkish($str){<br /><br /> <br />        $str = str_replace("i", "İ", $str);<br />        $str = str_replace("I", "ı", $str);<br /><br />        $str = mb_convert_case($str, MB_CASE_TITLE,"UTF-8");<br /><br />        return $str;<br /><br />    }</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mb-convert-case&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-convert-case.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mbstring.php">Multibyte String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.mb-check-encoding.php" title="mb_&#8203;check_&#8203;encoding">mb_&#8203;check_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-chr.php" title="mb_&#8203;chr">mb_&#8203;chr</a>
                        </li>
                                                <li class="current">
                            <a href="function.mb-convert-case.php" title="mb_&#8203;convert_&#8203;case">mb_&#8203;convert_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-encoding.php" title="mb_&#8203;convert_&#8203;encoding">mb_&#8203;convert_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-kana.php" title="mb_&#8203;convert_&#8203;kana">mb_&#8203;convert_&#8203;kana</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-variables.php" title="mb_&#8203;convert_&#8203;variables">mb_&#8203;convert_&#8203;variables</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-decode-mimeheader.php" title="mb_&#8203;decode_&#8203;mimeheader">mb_&#8203;decode_&#8203;mimeheader</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-decode-numericentity.php" title="mb_&#8203;decode_&#8203;numericentity">mb_&#8203;decode_&#8203;numericentity</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-detect-encoding.php" title="mb_&#8203;detect_&#8203;encoding">mb_&#8203;detect_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-detect-order.php" title="mb_&#8203;detect_&#8203;order">mb_&#8203;detect_&#8203;order</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encode-mimeheader.php" title="mb_&#8203;encode_&#8203;mimeheader">mb_&#8203;encode_&#8203;mimeheader</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encode-numericentity.php" title="mb_&#8203;encode_&#8203;numericentity">mb_&#8203;encode_&#8203;numericentity</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encoding-aliases.php" title="mb_&#8203;encoding_&#8203;aliases">mb_&#8203;encoding_&#8203;aliases</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg.php" title="mb_&#8203;ereg">mb_&#8203;ereg</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-match.php" title="mb_&#8203;ereg_&#8203;match">mb_&#8203;ereg_&#8203;match</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-replace.php" title="mb_&#8203;ereg_&#8203;replace">mb_&#8203;ereg_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-replace-callback.php" title="mb_&#8203;ereg_&#8203;replace_&#8203;callback">mb_&#8203;ereg_&#8203;replace_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search.php" title="mb_&#8203;ereg_&#8203;search">mb_&#8203;ereg_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-getpos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;getpos">mb_&#8203;ereg_&#8203;search_&#8203;getpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-getregs.php" title="mb_&#8203;ereg_&#8203;search_&#8203;getregs">mb_&#8203;ereg_&#8203;search_&#8203;getregs</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-init.php" title="mb_&#8203;ereg_&#8203;search_&#8203;init">mb_&#8203;ereg_&#8203;search_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-pos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;pos">mb_&#8203;ereg_&#8203;search_&#8203;pos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-regs.php" title="mb_&#8203;ereg_&#8203;search_&#8203;regs">mb_&#8203;ereg_&#8203;search_&#8203;regs</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-setpos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;setpos">mb_&#8203;ereg_&#8203;search_&#8203;setpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-eregi.php" title="mb_&#8203;eregi">mb_&#8203;eregi</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-eregi-replace.php" title="mb_&#8203;eregi_&#8203;replace">mb_&#8203;eregi_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-get-info.php" title="mb_&#8203;get_&#8203;info">mb_&#8203;get_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-http-input.php" title="mb_&#8203;http_&#8203;input">mb_&#8203;http_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-http-output.php" title="mb_&#8203;http_&#8203;output">mb_&#8203;http_&#8203;output</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-internal-encoding.php" title="mb_&#8203;internal_&#8203;encoding">mb_&#8203;internal_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-language.php" title="mb_&#8203;language">mb_&#8203;language</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-lcfirst.php" title="mb_&#8203;lcfirst">mb_&#8203;lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-list-encodings.php" title="mb_&#8203;list_&#8203;encodings">mb_&#8203;list_&#8203;encodings</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ltrim.php" title="mb_&#8203;ltrim">mb_&#8203;ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ord.php" title="mb_&#8203;ord">mb_&#8203;ord</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-output-handler.php" title="mb_&#8203;output_&#8203;handler">mb_&#8203;output_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-parse-str.php" title="mb_&#8203;parse_&#8203;str">mb_&#8203;parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-preferred-mime-name.php" title="mb_&#8203;preferred_&#8203;mime_&#8203;name">mb_&#8203;preferred_&#8203;mime_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-regex-encoding.php" title="mb_&#8203;regex_&#8203;encoding">mb_&#8203;regex_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-regex-set-options.php" title="mb_&#8203;regex_&#8203;set_&#8203;options">mb_&#8203;regex_&#8203;set_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-rtrim.php" title="mb_&#8203;rtrim">mb_&#8203;rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-scrub.php" title="mb_&#8203;scrub">mb_&#8203;scrub</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-send-mail.php" title="mb_&#8203;send_&#8203;mail">mb_&#8203;send_&#8203;mail</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-split.php" title="mb_&#8203;split">mb_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-str-pad.php" title="mb_&#8203;str_&#8203;pad">mb_&#8203;str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-str-split.php" title="mb_&#8203;str_&#8203;split">mb_&#8203;str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strcut.php" title="mb_&#8203;strcut">mb_&#8203;strcut</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strimwidth.php" title="mb_&#8203;strimwidth">mb_&#8203;strimwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-stripos.php" title="mb_&#8203;stripos">mb_&#8203;stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-stristr.php" title="mb_&#8203;stristr">mb_&#8203;stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strlen.php" title="mb_&#8203;strlen">mb_&#8203;strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strpos.php" title="mb_&#8203;strpos">mb_&#8203;strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrchr.php" title="mb_&#8203;strrchr">mb_&#8203;strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrichr.php" title="mb_&#8203;strrichr">mb_&#8203;strrichr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strripos.php" title="mb_&#8203;strripos">mb_&#8203;strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrpos.php" title="mb_&#8203;strrpos">mb_&#8203;strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strstr.php" title="mb_&#8203;strstr">mb_&#8203;strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strtolower.php" title="mb_&#8203;strtolower">mb_&#8203;strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strtoupper.php" title="mb_&#8203;strtoupper">mb_&#8203;strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strwidth.php" title="mb_&#8203;strwidth">mb_&#8203;strwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substitute-character.php" title="mb_&#8203;substitute_&#8203;character">mb_&#8203;substitute_&#8203;character</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substr.php" title="mb_&#8203;substr">mb_&#8203;substr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substr-count.php" title="mb_&#8203;substr_&#8203;count">mb_&#8203;substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-trim.php" title="mb_&#8203;trim">mb_&#8203;trim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ucfirst.php" title="mb_&#8203;ucfirst">mb_&#8203;ucfirst</a>
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
