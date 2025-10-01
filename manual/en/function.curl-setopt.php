<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: curl_setopt - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.curl-setopt.php">
 <link rel="shorturl" href="https://www.php.net/curl-setopt">
 <link rel="alternate" href="https://www.php.net/curl-setopt" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.curl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.curl-reset.php">
 <link rel="next" href="https://www.php.net/manual/en/function.curl-setopt-array.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.curl-setopt.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.curl-setopt.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.curl-setopt.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.curl-setopt.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.curl-setopt.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.curl-setopt.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.curl-setopt.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.curl-setopt.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.curl-setopt.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.curl-setopt.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.curl-setopt.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set an option for a cURL transfer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: curl_setopt - Manual" />
<meta name="twitter:description" content="Set an option for a cURL transfer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: curl_setopt - Manual" />
<meta itemprop="description" content="Set an option for a cURL transfer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set an option for a cURL transfer" />

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
        <a href="function.curl-setopt-array.php">
          curl_setopt_array &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.curl-reset.php">
          &laquo; curl_reset        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.curl.php'>cURL</a></li>      <li><a href='ref.curl.php'>cURL Functions</a></li>      </ul>
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
            <option value='en/function.curl-setopt.php' selected="selected">English</option>
            <option value='de/function.curl-setopt.php'>German</option>
            <option value='es/function.curl-setopt.php'>Spanish</option>
            <option value='fr/function.curl-setopt.php'>French</option>
            <option value='it/function.curl-setopt.php'>Italian</option>
            <option value='ja/function.curl-setopt.php'>Japanese</option>
            <option value='pt_BR/function.curl-setopt.php'>Brazilian Portuguese</option>
            <option value='ru/function.curl-setopt.php'>Russian</option>
            <option value='tr/function.curl-setopt.php'>Turkish</option>
            <option value='uk/function.curl-setopt.php'>Ukrainian</option>
            <option value='zh/function.curl-setopt.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.curl-setopt" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">curl_setopt</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_setopt</span> &mdash; <span class="dc-title">Set an option for a cURL transfer</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.curl-setopt-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>curl_setopt</strong></span>(<span class="methodparam"><span class="type"><a href="class.curlhandle.php" class="type CurlHandle">CurlHandle</a></span> <code class="parameter">$handle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Sets an option on the given cURL session handle.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.curl-setopt-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt><code class="parameter">handle</code>
</dt><dd><p class="para">A cURL handle returned by
<span class="function"><a href="function.curl-init.php" class="function">curl_init()</a></span>.</p></dd>
    
     <dt><code class="parameter">option</code></dt>
     <dd>
      <p class="para">
       The <strong><code><a href="curl.constants.php#constant.curlopt-abstract-unix-socket">CURLOPT_<span class="replaceable">*</span></a></code></strong> option to set.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The value to be set on <code class="parameter">option</code>.
       See the description of the
       <strong><code><a href="curl.constants.php#constant.curlopt-abstract-unix-socket">CURLOPT_<span class="replaceable">*</span></a></code></strong> constants
       for details on the type of values each constant expects.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.curl-setopt-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.curl-setopt-changelog">
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
       <td>8.4.0</td>
       <td>
        <strong><code><a href="curl.constants.php#constant.curlopt-dns-use-global-cache">CURLOPT_DNS_USE_GLOBAL_CACHE</a></code></strong> no longer has any effect,
        and enabling it on thread-safe PHP builds no longer triggers a warning.
       </td>
      </tr>

      <tr>
 <td>8.0.0</td>
 <td>
  <code class="parameter">handle</code> expects a <span class="classname"><a href="class.curlhandle.php" class="classname">CurlHandle</a></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

      <tr>
       <td>7.3.15, 7.4.3</td>
       <td>
        Introduced <strong><code><a href="curl.constants.php#constant.curlopt-http09-allowed">CURLOPT_HTTP09_ALLOWED</a></code></strong>.
       </td>
      </tr>

      <tr>
       <td>7.3.0</td>
       <td>
        Introduced <strong><code><a href="curl.constants.php#constant.curlopt-abstract-unix-socket">CURLOPT_ABSTRACT_UNIX_SOCKET</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-keep-sending-on-error">CURLOPT_KEEP_SENDING_ON_ERROR</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-pre-proxy">CURLOPT_PRE_PROXY</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-proxy-cainfo">CURLOPT_PROXY_CAINFO</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-proxy-capath">CURLOPT_PROXY_CAPATH</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-proxy-crlfile">CURLOPT_PROXY_CRLFILE</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-proxy-keypasswd">CURLOPT_PROXY_KEYPASSWD</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-proxy-pinnedpublickey">CURLOPT_PROXY_PINNEDPUBLICKEY</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-proxy-sslcert">CURLOPT_PROXY_SSLCERT</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-proxy-sslcerttype">CURLOPT_PROXY_SSLCERTTYPE</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-proxy-ssl-cipher-list">CURLOPT_PROXY_SSL_CIPHER_LIST</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-proxy-sslkey">CURLOPT_PROXY_SSLKEY</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-proxy-sslkeytype">CURLOPT_PROXY_SSLKEYTYPE</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-proxy-ssl-options">CURLOPT_PROXY_SSL_OPTIONS</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-proxy-ssl-verifyhost">CURLOPT_PROXY_SSL_VERIFYHOST</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-proxy-ssl-verifypeer">CURLOPT_PROXY_SSL_VERIFYPEER</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-proxy-sslversion">CURLOPT_PROXY_SSLVERSION</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-proxy-tlsauth-password">CURLOPT_PROXY_TLSAUTH_PASSWORD</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-proxy-tlsauth-type">CURLOPT_PROXY_TLSAUTH_TYPE</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-proxy-tlsauth-username">CURLOPT_PROXY_TLSAUTH_USERNAME</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-socks5-auth">CURLOPT_SOCKS5_AUTH</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-suppress-connect-headers">CURLOPT_SUPPRESS_CONNECT_HEADERS</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-disallow-username-in-url">CURLOPT_DISALLOW_USERNAME_IN_URL</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-dns-shuffle-addresses">CURLOPT_DNS_SHUFFLE_ADDRESSES</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-happy-eyeballs-timeout-ms">CURLOPT_HAPPY_EYEBALLS_TIMEOUT_MS</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-haproxyprotocol">CURLOPT_HAPROXYPROTOCOL</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-proxy-tls13-ciphers">CURLOPT_PROXY_TLS13_CIPHERS</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-ssh-compression">CURLOPT_SSH_COMPRESSION</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-timevalue-large">CURLOPT_TIMEVALUE_LARGE</a></code></strong> and <strong><code><a href="curl.constants.php#constant.curlopt-tls13-ciphers">CURLOPT_TLS13_CIPHERS</a></code></strong>.
       </td>
      </tr>

      <tr>
       <td>7.0.7</td>
       <td>
        Introduced <strong><code><a href="curl.constants.php#constant.curl-http-version-2">CURL_HTTP_VERSION_2</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curl-http-version-2-prior-knowledge">CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curl-http-version-2tls">CURL_HTTP_VERSION_2TLS</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curl-redir-post-301">CURL_REDIR_POST_301</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curl-redir-post-302">CURL_REDIR_POST_302</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curl-redir-post-303">CURL_REDIR_POST_303</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curl-redir-post-all">CURL_REDIR_POST_ALL</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curl-version-kerberos5">CURL_VERSION_KERBEROS5</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curl-version-psl">CURL_VERSION_PSL</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curl-version-unix-sockets">CURL_VERSION_UNIX_SOCKETS</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlauth-negotiate">CURLAUTH_NEGOTIATE</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlauth-ntlm-wb">CURLAUTH_NTLM_WB</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlftp-create-dir">CURLFTP_CREATE_DIR</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlftp-create-dir-none">CURLFTP_CREATE_DIR_NONE</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlftp-create-dir-retry">CURLFTP_CREATE_DIR_RETRY</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlheader-separate">CURLHEADER_SEPARATE</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlheader-unified">CURLHEADER_UNIFIED</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlmopt-chunk-length-penalty-size">CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlmopt-content-length-penalty-size">CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlmopt-max-host-connections">CURLMOPT_MAX_HOST_CONNECTIONS</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlmopt-max-pipeline-length">CURLMOPT_MAX_PIPELINE_LENGTH</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlmopt-max-total-connections">CURLMOPT_MAX_TOTAL_CONNECTIONS</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-connect-to">CURLOPT_CONNECT_TO</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-default-protocol">CURLOPT_DEFAULT_PROTOCOL</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-dns-interface">CURLOPT_DNS_INTERFACE</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-dns-local-ip4">CURLOPT_DNS_LOCAL_IP4</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-dns-local-ip6">CURLOPT_DNS_LOCAL_IP6</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-expect-100-timeout-ms">CURLOPT_EXPECT_100_TIMEOUT_MS</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-headeropt">CURLOPT_HEADEROPT</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-login-options">CURLOPT_LOGIN_OPTIONS</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-path-as-is">CURLOPT_PATH_AS_IS</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-pinnedpublickey">CURLOPT_PINNEDPUBLICKEY</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-pipewait">CURLOPT_PIPEWAIT</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-proxy-service-name">CURLOPT_PROXY_SERVICE_NAME</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-proxyheader">CURLOPT_PROXYHEADER</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-sasl-ir">CURLOPT_SASL_IR</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-service-name">CURLOPT_SERVICE_NAME</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-ssl-enable-alpn">CURLOPT_SSL_ENABLE_ALPN</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-ssl-enable-npn">CURLOPT_SSL_ENABLE_NPN</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-ssl-falsestart">CURLOPT_SSL_FALSESTART</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-ssl-verifystatus">CURLOPT_SSL_VERIFYSTATUS</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-stream-weight">CURLOPT_STREAM_WEIGHT</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-tcp-fastopen">CURLOPT_TCP_FASTOPEN</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-tftp-no-options">CURLOPT_TFTP_NO_OPTIONS</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlopt-unix-socket-path">CURLOPT_UNIX_SOCKET_PATH</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlopt-xoauth2-bearer">CURLOPT_XOAUTH2_BEARER</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlproto-smb">CURLPROTO_SMB</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlproto-smbs">CURLPROTO_SMBS</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlproxy-http-1-0">CURLPROXY_HTTP_1_0</a></code></strong>, <strong><code><a href="curl.constants.php#constant.curlssh-auth-agent">CURLSSH_AUTH_AGENT</a></code></strong> and
        <strong><code><a href="curl.constants.php#constant.curlsslopt-no-revoke">CURLSSLOPT_NO_REVOKE</a></code></strong>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.curl-setopt-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4497">
    <p><strong>Example #1 Initializing a new cURL session and fetching a web page</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// create a new cURL resource<br /></span><span style="color: #0000BB">$ch </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_init</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// set URL and other appropriate options<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_URL</span><span style="color: #007700">, </span><span style="color: #DD0000">"http://www.example.com/"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_HEADER</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// grab URL and pass it to the browser<br /></span><span style="color: #0000BB">curl_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// close cURL resource, and free up system resources<br /></span><span style="color: #0000BB">curl_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.curl-setopt-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Passing an array to <strong><code><a href="curl.constants.php#constant.curlopt-postfields">CURLOPT_POSTFIELDS</a></code></strong> will
    encode the data as <em>multipart/form-data</em>,
    while passing a URL-encoded string will encode the data as
    <em>application/x-www-form-urlencoded</em>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.curl-setopt-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.curl-setopt-array.php" class="function" rel="rdfs-seeAlso">curl_setopt_array()</a> - Set multiple options for a cURL transfer</span></li>
    <li><span class="classname"><a href="class.curlfile.php" class="classname">CURLFile</a></span></li>
    <li><span class="classname"><a href="class.curlstringfile.php" class="classname">CURLStringFile</a></span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/functions/curl-setopt.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.curl-setopt%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.curl-setopt&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-setopt.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">55 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110457">  <div class="votes">
    <div id="Vu110457">
    <a href="/manual/vote-note.php?id=110457&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110457">
    <a href="/manual/vote-note.php?id=110457&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110457" title="78% like this...">
    227
    </div>
  </div>
  <a href="#110457" class="name">
  <strong class="user"><em>rmckay at webaware dot com dot au</em></strong></a><a class="genanchor" href="#110457"> &para;</a><div class="date" title="2012-10-24 12:21"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110457">
<div class="phpcode"><code><span class="html">Please everyone, stop setting CURLOPT_SSL_VERIFYPEER to false or 0. If your PHP installation doesn't have an up-to-date CA root certificate bundle, download the one at the curl website and save it on your server:<br /><br /><a href="http://curl.haxx.se/docs/caextract.html" rel="nofollow" target="_blank">http://curl.haxx.se/docs/caextract.html</a><br /><br />Then set a path to it in your php.ini file, e.g. on Windows:<br /><br />curl.cainfo=c:\php\cacert.pem<br /><br />Turning off CURLOPT_SSL_VERIFYPEER allows man in the middle (MITM) attacks, which you don't want!</span></code></div>
  </div>
 </div>
  <div class="note" id="118967">  <div class="votes">
    <div id="Vu118967">
    <a href="/manual/vote-note.php?id=118967&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118967">
    <a href="/manual/vote-note.php?id=118967&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118967" title="73% like this...">
    46
    </div>
  </div>
  <a href="#118967" class="name">
  <strong class="user"><em>joey</em></strong></a><a class="genanchor" href="#118967"> &para;</a><div class="date" title="2016-03-09 06:54"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118967">
<div class="phpcode"><code><span class="html">It is important that anyone working with cURL and PHP keep in mind that not all of the CURLOPT and CURLINFO constants are documented. I always recommend reading the cURL documentation directly as it sometimes contains better information. The cURL API in tends to be fubar as well so do not expect things to be where you would normally logically look for them.<br /><br />curl is especially difficult to work with when it comes to cookies. So I will talk about what I found with PHP 5.6 and curl 7.26.<br /><br />If you want to manage cookies in memory without using files including reading, writing and clearing custom cookies then continue reading.<br /><br />To start with, the way to enable in memory only cookies associated with a cURL handle you should use:<br /><br />    curl_setopt($curl, CURLOPT_COOKIEFILE, "");<br /><br />cURL likes to use magic strings in options as special commands. Rather than having an option to enable the cookie engine in memory it uses a magic string to do that. Although vaguely the documentation here mentions this however most people like me wouldn't even read that because a COOKIEFILE is the complete opposite of what we want.<br /><br />To get the cookies for a curl handle you can use:<br /><br />    curl_getinfo($curl, CURLINFO_COOKIELIST);<br /><br />This will give an array containing a string for each cookie. It is tab delimited and unfortunately you will have to parse it yourself if you want to do anything beyond copying the cookies.<br /><br />To clear the in memory cookies for a cURL handle you can use:<br /><br />    curl_setopt($curl, CURLOPT_COOKIELIST, "ALL");<br /><br />This is a magic string. There are others in the cURL documentation. If a magic string isn't used, this field should take a cookie in the same string format as in getinfo for the cookielist constant. This can be used to delete individual cookies although it's not the most elegant API for doing so.<br /><br />For copying cookies I recommend using curl_share_init.<br /><br />You can also copy cookies from one handle to another like so:<br /><br />    foreach(curl_getinfo($curl_a, CURLINFO_COOKIELIST) as $cookie_line)<br />        curl_setopt($curl, CURLOPT_COOKIELIST, $cookie_line);<br /><br />An inelegant way to delete a cookie would be to skip the one you don't want. <br /><br />I only recommend using COOKIELIST with magic strings because the cookie format is not secure or stable. You can inject tabs into at least path and name so it becomes impossible to parse reliably. If you must parse this then to keep it secure I recommend prohibiting more than 6 tabs in the content which probably isn't a big loss to most people.<br /><br />A the absolute minimum for validation I would suggest:<br /><br />    /^([^\t]+\t){5}[^\t]+$/D<br /><br />Here is the format:<br /><br />    #define SEP  "\t"  /* Tab separates the fields */<br /> <br />    char *my_cookie =<br />      "example.com"    /* Hostname */<br />      SEP "FALSE"      /* Include subdomains */<br />      SEP "/"          /* Path */<br />      SEP "FALSE"      /* Secure */<br />      SEP "0"          /* Expiry in epoch time format. 0 == Session */<br />      SEP "foo"        /* Name */<br />      SEP "bar";       /* Value */</span></code></div>
  </div>
 </div>
  <div class="note" id="82418">  <div class="votes">
    <div id="Vu82418">
    <a href="/manual/vote-note.php?id=82418&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82418">
    <a href="/manual/vote-note.php?id=82418&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82418" title="77% like this...">
    29
    </div>
  </div>
  <a href="#82418" class="name">
  <strong class="user"><em>sgamon at yahoo dot com</em></strong></a><a class="genanchor" href="#82418"> &para;</a><div class="date" title="2008-04-09 05:55"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82418">
<div class="phpcode"><code><span class="html">If you are doing a POST, and the content length is 1,025 or greater, then curl exploits a feature of http 1.1: 100 (Continue) Status.<br /><br />See <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec8.html#sec8.2.3" rel="nofollow" target="_blank">http://www.w3.org/Protocols/rfc2616/rfc2616-sec8.html#sec8.2.3</a><br /><br />* it adds a header, "Expect: 100-continue".  <br />* it then sends the request head, waits for a 100 response code, then sends the content <br /><br />Not all web servers support this though.  Various errors are returned depending on the server.  If this happens to you, suppress the "Expect" header with this command:<br /><br /><span class="default">&lt;?php<br />curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">, array(</span><span class="string">'Expect:'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />See <a href="http://www.gnegg.ch/2007/02/the-return-of-except-100-continue/" rel="nofollow" target="_blank">http://www.gnegg.ch/2007/02/the-return-of-except-100-continue/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="66832">  <div class="votes">
    <div id="Vu66832">
    <a href="/manual/vote-note.php?id=66832&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66832">
    <a href="/manual/vote-note.php?id=66832&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66832" title="76% like this...">
    30
    </div>
  </div>
  <a href="#66832" class="name">
  <strong class="user"><em>Philippe dot Jausions at 11abacus dot com</em></strong></a><a class="genanchor" href="#66832"> &para;</a><div class="date" title="2006-05-30 11:31"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66832">
<div class="phpcode"><code><span class="html">Clarification on the callback methods:<br /><br />- CURLOPT_HEADERFUNCTION is for handling header lines received *in the response*,<br />- CURLOPT_WRITEFUNCTION is for handling data received *from the response*,<br />- CURLOPT_READFUNCTION is for handling data passed along *in the request*.<br /><br />The callback "string" can be any callable function, that includes the array(&amp;$obj, 'someMethodName') format.<br /><br /> -Philippe</span></code></div>
  </div>
 </div>
  <div class="note" id="98491">  <div class="votes">
    <div id="Vu98491">
    <a href="/manual/vote-note.php?id=98491&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98491">
    <a href="/manual/vote-note.php?id=98491&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98491" title="79% like this...">
    14
    </div>
  </div>
  <a href="#98491" class="name">
  <strong class="user"><em>JScott jscott401 at gmail dot com</em></strong></a><a class="genanchor" href="#98491"> &para;</a><div class="date" title="2010-06-18 07:29"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98491">
<div class="phpcode"><code><span class="html">Some additional notes for curlopt_writefunction. I struggled with this at first because it really isn't documented very well.<br /><br />When you write a callback function and use it with curlopt_writefunction it will be called MULTIPLE times. Your function MUST return the ammount of data written to it each time. It is very picky about this. Here is a snippet from my code that may help you<br /><br /><span class="default">&lt;?php<br />curl_setopt</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">curl_handle</span><span class="keyword">, </span><span class="default">CURLOPT_WRITEFUNCTION</span><span class="keyword">, array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"receiveResponse"</span><span class="keyword">));<br /><br /></span><span class="comment">// later on in the class I wrote my receive Response method<br /><br /></span><span class="keyword">private function </span><span class="default">receiveResponse</span><span class="keyword">(</span><span class="default">$curlHandle</span><span class="keyword">,</span><span class="default">$xmldata</span><span class="keyword">)<br />                {<br />                        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">responseString </span><span class="keyword">= </span><span class="default">$xmldata</span><span class="keyword">;<br />                        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">responseXML </span><span class="keyword">.=  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">responseString</span><span class="keyword">;<br />                        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$xmldata</span><span class="keyword">);<br />                        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">size </span><span class="keyword">+= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">;<br />                        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">;<br /><br />                }<br /></span><span class="default">?&gt;<br /></span><br />Now I did this for a class. If you aren't doing OOP then you will obviously need to modify this for your own use.<br /><br />CURL calls your script MULTIPLE times because the data will not always be sent all at once. Were talking internet here so its broken up into packets. You need to take your data and concatenate it all together until it is all written. I was about to pull my damn hair out because I would get broken chunks of XML back from the server and at random lengths. I finally figured out what was going on. Hope this helps</span></code></div>
  </div>
 </div>
  <div class="note" id="121874">  <div class="votes">
    <div id="Vu121874">
    <a href="/manual/vote-note.php?id=121874&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121874">
    <a href="/manual/vote-note.php?id=121874&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121874" title="80% like this...">
    3
    </div>
  </div>
  <a href="#121874" class="name">
  <strong class="user"><em>cmatiasvillanueva at gmail dot com</em></strong></a><a class="genanchor" href="#121874"> &para;</a><div class="date" title="2017-11-15 07:54"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121874">
<div class="phpcode"><code><span class="html">What is not mentioned in the documentation is that if you want to set  a local-port or local-port-range to establish a connection is possible by adding   CURLOPT_LOCALPORT and CURLOPT_LOCALPORTRANGE options.   <br /><br />Ex:<br />$conn=curl_init ('example.com');<br />curl_setopt($conn, CURLOPT_LOCALPORT, 35000);<br />curl_setopt($conn, CURLOPT_LOCALPORTRANGE, 200);<br /><br />CURLOPT_LOCALPORT: This sets the local port number of the socket used for the connection.<br /><br />CURLOPT_LOCALPORTRANGE:  The range argument is the number of attempts libcurl will make to find a working local port number. It starts with the given CURLOPT_LOCALPORT and adds one to the number for each retry. Setting this option to 1 or below will make libcurl do only one try for the exact port number.<br /><br />Interface can be also configured using CURLOPT_INTERFACE:<br /><br />Ex:<br /><br />curl_setopt($conn,  CURLOPT_INTERFACE, "eth1");</span></code></div>
  </div>
 </div>
  <div class="note" id="108137">  <div class="votes">
    <div id="Vu108137">
    <a href="/manual/vote-note.php?id=108137&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108137">
    <a href="/manual/vote-note.php?id=108137&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108137" title="80% like this...">
    6
    </div>
  </div>
  <a href="#108137" class="name">
  <strong class="user"><em>mw+php dot net at lw-systems dot de</em></strong></a><a class="genanchor" href="#108137"> &para;</a><div class="date" title="2012-03-31 06:45"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108137">
<div class="phpcode"><code><span class="html">The description of the use of the CURLOPT_POSTFIELDS option should be emphasize, that using POST with HTTP/1.1 with cURL implies the use of a "Expect: 100-continue" header. Some web servers will not understand the handling of chunked transfer of post data.<br /><br />To disable this behavior one must disable the use of the "Expect:" header with<br /><br />    curl_setopt($ch, CURLOPT_HTTPHEADER,array("Expect:"));</span></code></div>
  </div>
 </div>
  <div class="note" id="96056">  <div class="votes">
    <div id="Vu96056">
    <a href="/manual/vote-note.php?id=96056&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96056">
    <a href="/manual/vote-note.php?id=96056&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96056" title="74% like this...">
    37
    </div>
  </div>
  <a href="#96056" class="name">
  <strong class="user"><em>Ed Cradock</em></strong></a><a class="genanchor" href="#96056"> &para;</a><div class="date" title="2010-02-05 10:47"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96056">
<div class="phpcode"><code><span class="html">PUT requests are very simple, just make sure to specify a content-length header and set post fields as a string.
<br />
<br />Example:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">doPut</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">$fields</span><span class="keyword">)
<br />{
<br />   </span><span class="default">$fields </span><span class="keyword">= (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$fields</span><span class="keyword">)) ? </span><span class="default">http_build_query</span><span class="keyword">(</span><span class="default">$fields</span><span class="keyword">) : </span><span class="default">$fields</span><span class="keyword">;
<br />
<br />   if(</span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">))
<br />   {
<br />      </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_CUSTOMREQUEST</span><span class="keyword">, </span><span class="string">'PUT'</span><span class="keyword">);
<br />      </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />      </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">, array(</span><span class="string">'Content-Length: ' </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$fields</span><span class="keyword">)));
<br />      </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">$fields</span><span class="keyword">);
<br />      </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />
<br />      </span><span class="default">$status </span><span class="keyword">= </span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLINFO_HTTP_CODE</span><span class="keyword">);
<br />
<br />      </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />
<br />      return (int) </span><span class="default">$status</span><span class="keyword">;
<br />   }
<br />   else
<br />   {
<br />      return </span><span class="default">false</span><span class="keyword">;
<br />   }
<br />}
<br />
<br />if(</span><span class="default">doPut</span><span class="keyword">(</span><span class="string">'<a href="http://example.com/api/a/b/c" rel="nofollow" target="_blank">http://example.com/api/a/b/c</a>'</span><span class="keyword">, array(</span><span class="string">'foo' </span><span class="keyword">=&gt; </span><span class="string">'bar'</span><span class="keyword">)) == </span><span class="default">200</span><span class="keyword">)
<br />   </span><span class="comment">// do something
<br /></span><span class="keyword">else
<br />   </span><span class="comment">// do something else.
<br /></span><span class="default">?&gt;
<br /></span>
<br />You can grab the request data on the other side with:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REQUEST_METHOD'</span><span class="keyword">] == </span><span class="string">'PUT'</span><span class="keyword">)
<br />{
<br />   </span><span class="default">parse_str</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'php://input'</span><span class="keyword">), </span><span class="default">$requestData</span><span class="keyword">);
<br />
<br />   </span><span class="comment">// Array ( [foo] =&gt; bar )
<br />   </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$requestData</span><span class="keyword">);
<br />
<br />   </span><span class="comment">// Do something with data...
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;
<br /></span>
<br />DELETE  can be done in exactly the same way.</span></code></div>
  </div>
 </div>
  <div class="note" id="91978">  <div class="votes">
    <div id="Vu91978">
    <a href="/manual/vote-note.php?id=91978&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91978">
    <a href="/manual/vote-note.php?id=91978&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91978" title="80% like this...">
    6
    </div>
  </div>
  <a href="#91978" class="name">
  <strong class="user"><em>Victor Jerlin</em></strong></a><a class="genanchor" href="#91978"> &para;</a><div class="date" title="2009-07-03 04:12"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91978">
<div class="phpcode"><code><span class="html">Seems like some options not mentioned on this page, but listed on <a href="http://curl.haxx.se/libcurl/c/curl_easy_setopt.html" rel="nofollow" target="_blank">http://curl.haxx.se/libcurl/c/curl_easy_setopt.html</a> is actually supported.<br /><br />I was happy to see that I could actually use CURLOPT_FTP_CREATE_MISSING_DIRS even from PHP.</span></code></div>
  </div>
 </div>
  <div class="note" id="26797">  <div class="votes">
    <div id="Vu26797">
    <a href="/manual/vote-note.php?id=26797&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26797">
    <a href="/manual/vote-note.php?id=26797&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26797" title="76% like this...">
    16
    </div>
  </div>
  <a href="#26797" class="name">
  <strong class="user"><em>yann dot corno at free dot fr</em></strong></a><a class="genanchor" href="#26797"> &para;</a><div class="date" title="2002-11-13 04:19"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26797">
<div class="phpcode"><code><span class="html">About the CURLOPT_HTTPHEADER option, it took me some time to figure out how to format the so-called 'Array'. It fact, it is a list of strings. If Curl was already defining a header item, yours will replace it. Here is an example to change the Content Type in a POST:
<br />
<br /><span class="default">&lt;?php curl_setopt </span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">, Array(</span><span class="string">"Content-Type: text/xml"</span><span class="keyword">)); </span><span class="default">?&gt;
<br /></span>
<br />Yann</span></code></div>
  </div>
 </div>
  <div class="note" id="30906">  <div class="votes">
    <div id="Vu30906">
    <a href="/manual/vote-note.php?id=30906&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30906">
    <a href="/manual/vote-note.php?id=30906&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30906" title="76% like this...">
    14
    </div>
  </div>
  <a href="#30906" class="name">
  <strong class="user"><em>dweingart at pobox dot com</em></strong></a><a class="genanchor" href="#30906"> &para;</a><div class="date" title="2003-04-02 03:08"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30906">
<div class="phpcode"><code><span class="html">If you want to Curl to follow redirects and you would also like Curl to echo back any cookies that are set in the process, use this:
<br />
<br /><span class="default">&lt;?php curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_COOKIEJAR</span><span class="keyword">, </span><span class="string">'-'</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />'-' means stdout
<br />
<br />-dw</span></code></div>
  </div>
 </div>
  <div class="note" id="104597">  <div class="votes">
    <div id="Vu104597">
    <a href="/manual/vote-note.php?id=104597&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104597">
    <a href="/manual/vote-note.php?id=104597&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104597" title="71% like this...">
    29
    </div>
  </div>
  <a href="#104597" class="name">
  <strong class="user"><em>Steve Kamerman</em></strong></a><a class="genanchor" href="#104597"> &para;</a><div class="date" title="2011-06-24 11:47"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104597">
<div class="phpcode"><code><span class="html">If you want cURL to timeout in less than one second, you can use CURLOPT_TIMEOUT_MS, although there is a bug/"feature"  on "Unix-like systems" that causes libcurl to timeout immediately if the value is &lt; 1000 ms with the error "cURL Error (28): Timeout was reached".  The explanation for this behavior is:<br /><br />"If libcurl is built to use the standard system name resolver, that portion of the transfer will still use full-second resolution for timeouts with a minimum timeout allowed of one second."<br /><br />What this means to PHP developers is "You can use this function without testing it first, because you can't tell if libcurl is using the standard system name resolver (but you can be pretty sure it is)"<br /><br />The problem is that on (Li|U)nix, when libcurl uses the standard name resolver, a SIGALRM is raised during name resolution which libcurl thinks is the timeout alarm.<br /><br />The solution is to disable signals using CURLOPT_NOSIGNAL.  Here's an example script that requests itself causing a 10-second delay so you can test timeouts:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'foo'</span><span class="keyword">])) {<br />        </span><span class="comment">// Client<br />        </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="string">'<a href="http://localhost/test/test_timeout.php?foo=bar" rel="nofollow" target="_blank">http://localhost/test/test_timeout.php?foo=bar</a>'</span><span class="keyword">);<br />        </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_NOSIGNAL</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_TIMEOUT_MS</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">);<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br />        </span><span class="default">$curl_errno </span><span class="keyword">= </span><span class="default">curl_errno</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br />        </span><span class="default">$curl_error </span><span class="keyword">= </span><span class="default">curl_error</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br />        </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /><br />        if (</span><span class="default">$curl_errno </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />                echo </span><span class="string">"cURL Error (</span><span class="default">$curl_errno</span><span class="string">): </span><span class="default">$curl_error</span><span class="string">\n"</span><span class="keyword">;<br />        } else {<br />                echo </span><span class="string">"Data received: </span><span class="default">$data</span><span class="string">\n"</span><span class="keyword">;<br />        }<br />} else {<br />        </span><span class="comment">// Server<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">);<br />        echo </span><span class="string">"Done."</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61395">  <div class="votes">
    <div id="Vu61395">
    <a href="/manual/vote-note.php?id=61395&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61395">
    <a href="/manual/vote-note.php?id=61395&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61395" title="75% like this...">
    16
    </div>
  </div>
  <a href="#61395" class="name">
  <strong class="user"><em>luca dot manzo at bbsitalia dot com</em></strong></a><a class="genanchor" href="#61395"> &para;</a><div class="date" title="2006-02-02 03:55"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61395">
<div class="phpcode"><code><span class="html">If you're getting trouble with cookie handling in curl: 
<br />
<br />- curl manages tranparently cookies in a single curl session
<br />- the option 
<br /><span class="default">&lt;?php curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_COOKIEJAR</span><span class="keyword">, </span><span class="string">"/tmp/cookieFileName"</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />makes curl to store the cookies in a file at the and of the curl session
<br />
<br />- the option 
<br /><span class="default">&lt;?php curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_COOKIEFILE</span><span class="keyword">, </span><span class="string">"/tmp/cookieFileName"</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />makes curl to use the given file as source for the cookies to send to the server. 
<br />
<br />so to handle correctly cookies between different curl session, the you have to do something like this:
<br />
<br /><span class="default">&lt;?php
<br />       $ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(); 
<br />       </span><span class="default">curl_setopt </span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">); 
<br />       </span><span class="default">curl_setopt </span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_COOKIEJAR</span><span class="keyword">, </span><span class="default">COOKIE_FILE_PATH</span><span class="keyword">);
<br />       </span><span class="default">curl_setopt </span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_COOKIEFILE</span><span class="keyword">, </span><span class="default">COOKIE_FILE_PATH</span><span class="keyword">);
<br />
<br />       </span><span class="default">curl_setopt </span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); 
<br />       </span><span class="default">$result </span><span class="keyword">= </span><span class="default">curl_exec </span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />       </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />       return </span><span class="default">$result</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />in particular this is NECESSARY if you are using PEAR_SOAP libraries to build a webservice client over https and the remote server need to establish a session cookie. in fact each soap message is sent using a different curl session!!
<br />
<br />I hope this can help someone
<br />Luca</span></code></div>
  </div>
 </div>
  <div class="note" id="118586">  <div class="votes">
    <div id="Vu118586">
    <a href="/manual/vote-note.php?id=118586&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118586">
    <a href="/manual/vote-note.php?id=118586&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118586" title="71% like this...">
    14
    </div>
  </div>
  <a href="#118586" class="name">
  <strong class="user"><em>joelhy</em></strong></a><a class="genanchor" href="#118586"> &para;</a><div class="date" title="2016-01-04 10:19"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118586">
<div class="phpcode"><code><span class="html">Please notice that CURLINFO_HEADER_OUT and CURLOPT_VERBOSE option does not work together:<br />"When CURLINFO_HEADER_OUT is set to TRUE than CURLOPT_VERBOSE does not work."(from <a href="https://bugs.php.net/bug.php?id=65348" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=65348</a>). <br />This took me an hour or two to figure it out.</span></code></div>
  </div>
 </div>
  <div class="note" id="99082">  <div class="votes">
    <div id="Vu99082">
    <a href="/manual/vote-note.php?id=99082&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99082">
    <a href="/manual/vote-note.php?id=99082&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99082" title="70% like this...">
    23
    </div>
  </div>
  <a href="#99082" class="name">
  <strong class="user"><em>joeterranova at gmail dot com</em></strong></a><a class="genanchor" href="#99082"> &para;</a><div class="date" title="2010-07-26 12:57"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99082">
<div class="phpcode"><code><span class="html">It appears that setting CURLOPT_FILE before setting CURLOPT_RETURNTRANSFER doesn't work, presumably because CURLOPT_FILE depends on CURLOPT_RETURNTRANSFER being set.
<br />
<br />So do this:
<br />
<br /><span class="default">&lt;?php
<br />curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_FILE</span><span class="keyword">, </span><span class="default">$fp</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />not this:
<br />
<br /><span class="default">&lt;?php
<br />curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_FILE</span><span class="keyword">, </span><span class="default">$fp</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116866">  <div class="votes">
    <div id="Vu116866">
    <a href="/manual/vote-note.php?id=116866&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116866">
    <a href="/manual/vote-note.php?id=116866&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116866" title="72% like this...">
    8
    </div>
  </div>
  <a href="#116866" class="name">
  <strong class="user"><em>jancister at gmail dot com</em></strong></a><a class="genanchor" href="#116866"> &para;</a><div class="date" title="2015-03-12 04:09"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116866">
<div class="phpcode"><code><span class="html">Please note that if you want to handle progress using CURLOPT_PROGRESSFUNCTION option, you need to take into consideration what version of PHP are you using. Since version 5.5.0, compatibility-breaking change was introduced in number/order of the arguments passed to the callback function, and cURL resource is now passed as first argument.<br /><br />Prior to version 5.5.0:<br /><span class="default">&lt;?php<br /></span><span class="comment">// ...<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">CURLOPT_PROGRESSFUNCTION</span><span class="keyword">, </span><span class="string">'progressCallback'</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">CURLOPT_NOPROGRESS</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="comment">// ...<br /></span><span class="keyword">function </span><span class="default">progressCallback</span><span class="keyword">(</span><span class="default">$download_size </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$downloaded </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$upload_size </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$uploaded </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />{<br />    </span><span class="comment">// Handle progress<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />From version 5.5.0:<br /><span class="default">&lt;?php<br /></span><span class="comment">// ...<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">CURLOPT_PROGRESSFUNCTION</span><span class="keyword">, </span><span class="string">'progressCallback'</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">CURLOPT_NOPROGRESS</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="comment">// ...<br /></span><span class="keyword">function </span><span class="default">progressCallback</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">$download_size </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$downloaded </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$upload_size </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$uploaded </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />{<br />    </span><span class="comment">// Handle progress<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />However, if your code needs to be compatible with PHP version both before and after 5.5.0, consider adding a version check:<br /><span class="default">&lt;?php<br /></span><span class="comment">// ...<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">CURLOPT_PROGRESSFUNCTION</span><span class="keyword">, </span><span class="string">'progressCallback'</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">CURLOPT_NOPROGRESS</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="comment">// ...<br /></span><span class="keyword">function </span><span class="default">progressCallback</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">$download_size </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$downloaded </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$upload_size </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$uploaded </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />{<br />   </span><span class="comment">/**<br />    * $resource parameter was added in version 5.5.0 breaking backwards compatibility;<br />    * if we are using PHP version lower than 5.5.0, we need to shift the arguments<br />    * @see <a href="http://php.net/manual/en/function.curl-setopt.php#refsect1-function.curl-setopt-changelog" rel="nofollow" target="_blank">http://php.net/manual/en/function.curl-setopt.php#refsect1-function.curl-setopt-changelog</a><br />    */<br />    </span><span class="keyword">if (</span><span class="default">version_compare</span><span class="keyword">(</span><span class="default">PHP_VERSION</span><span class="keyword">, </span><span class="string">'5.5.0'</span><span class="keyword">) &lt; </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$uploaded </span><span class="keyword">= </span><span class="default">$upload_size</span><span class="keyword">;<br />        </span><span class="default">$upload_size </span><span class="keyword">= </span><span class="default">$downloaded</span><span class="keyword">;<br />        </span><span class="default">$downloaded </span><span class="keyword">= </span><span class="default">$download_size</span><span class="keyword">;<br />        </span><span class="default">$download_size </span><span class="keyword">= </span><span class="default">$resource</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// Handle progress<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93686">  <div class="votes">
    <div id="Vu93686">
    <a href="/manual/vote-note.php?id=93686&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93686">
    <a href="/manual/vote-note.php?id=93686&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93686" title="71% like this...">
    16
    </div>
  </div>
  <a href="#93686" class="name">
  <strong class="user"><em>Chris at PureFormSolutions dot com</em></strong></a><a class="genanchor" href="#93686"> &para;</a><div class="date" title="2009-09-22 03:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93686">
<div class="phpcode"><code><span class="html">I've found that setting CURLOPT_HTTPHEADER more than once will clear out any headers you've set previously with CURLOPT_HTTPHEADER.<br /><br />Consider the following:<br /><span class="default">&lt;?php<br />    </span><span class="comment"># ...<br /><br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$cURL</span><span class="keyword">,</span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">,array (<br />        </span><span class="string">"Content-Type: text/xml; charset=utf-8"</span><span class="keyword">,<br />        </span><span class="string">"Expect: 100-continue"<br />    </span><span class="keyword">));<br /><br />    </span><span class="comment"># ... do some other stuff ...<br /><br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$cURL</span><span class="keyword">,</span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">,array (<br />        </span><span class="string">"Accept: application/json"<br />    </span><span class="keyword">));<br /><br />    </span><span class="comment"># ...<br /></span><span class="default">?&gt;<br /></span><br />Both the Content-Type and Expect I set will not be in the outgoing headers, but Accept will.</span></code></div>
  </div>
 </div>
  <div class="note" id="123340">  <div class="votes">
    <div id="Vu123340">
    <a href="/manual/vote-note.php?id=123340&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123340">
    <a href="/manual/vote-note.php?id=123340&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123340" title="71% like this...">
    3
    </div>
  </div>
  <a href="#123340" class="name">
  <strong class="user"><em>eric dot van dot eldik at peercode dot nl</em></strong></a><a class="genanchor" href="#123340"> &para;</a><div class="date" title="2018-11-13 01:21"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123340">
<div class="phpcode"><code><span class="html">When you get this error using a PUT request: "SSL read: error:00000000:lib(0):func(0):reason(0), errno 104")<br /><br />It could be caused by:<br /><span class="default">&lt;?php<br />curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_PUT</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Instead try:<br /><span class="default">&lt;?php<br />curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_CUSTOMREQUEST</span><span class="keyword">, </span><span class="string">"PUT"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87341">  <div class="votes">
    <div id="Vu87341">
    <a href="/manual/vote-note.php?id=87341&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87341">
    <a href="/manual/vote-note.php?id=87341&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87341" title="71% like this...">
    9
    </div>
  </div>
  <a href="#87341" class="name">
  <strong class="user"><em>fnjordy at gmail dot com</em></strong></a><a class="genanchor" href="#87341"> &para;</a><div class="date" title="2008-11-30 11:28"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87341">
<div class="phpcode"><code><span class="html">Note that CURLOPT_RETURNTRANSFER when used with CURLOPT_WRITEFUNCTION has effectively three settings: default, true, and false.<br /><br />default - callbacks will be called as expected.<br />true - content will be returned but callback function will not be called.<br />false - content will be output and callback function will not be called.<br /><br />Note that CURLOPT_HEADERFUNCTION callbacks are always called.</span></code></div>
  </div>
 </div>
  <div class="note" id="110162">  <div class="votes">
    <div id="Vu110162">
    <a href="/manual/vote-note.php?id=110162&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110162">
    <a href="/manual/vote-note.php?id=110162&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110162" title="71% like this...">
    3
    </div>
  </div>
  <a href="#110162" class="name">
  <strong class="user"><em>juozaspo at gmail dot com</em></strong></a><a class="genanchor" href="#110162"> &para;</a><div class="date" title="2012-09-25 08:47"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110162">
<div class="phpcode"><code><span class="html">I've created an example that gets the file on url passed to script and outputs it to the browser. <br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//get the file (e.g. image) and output it to the browser<br /></span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(); </span><span class="comment">//open curl handle<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'url'</span><span class="keyword">]); </span><span class="comment">//set an url<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); </span><span class="comment">//do not output directly, use variable<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_BINARYTRANSFER</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); </span><span class="comment">//do a binary transfer<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_FAILONERROR</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); </span><span class="comment">//stop if an error occurred<br /></span><span class="default">$file</span><span class="keyword">=</span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">); </span><span class="comment">//store the content in variable<br /></span><span class="keyword">if(!</span><span class="default">curl_errno</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">))<br />{<br />    </span><span class="comment">//send out headers and output<br />    </span><span class="default">header </span><span class="keyword">(</span><span class="string">"Content-type: "</span><span class="keyword">.</span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLINFO_CONTENT_TYPE</span><span class="keyword">).</span><span class="string">""</span><span class="keyword">);<br />    </span><span class="default">header </span><span class="keyword">(</span><span class="string">"Content-Length: "</span><span class="keyword">.</span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLINFO_CONTENT_LENGTH_DOWNLOAD</span><span class="keyword">).</span><span class="string">""</span><span class="keyword">);<br />    echo </span><span class="default">$file</span><span class="keyword">;<br />} else echo </span><span class="string">'Curl error: ' </span><span class="keyword">. </span><span class="default">curl_error</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">); </span><span class="comment">//close curl handle<br /></span><span class="default">?&gt;<br /></span><br />p.s. Make sure that there're no new lines before and after code or script may not work.</span></code></div>
  </div>
 </div>
  <div class="note" id="96903">  <div class="votes">
    <div id="Vu96903">
    <a href="/manual/vote-note.php?id=96903&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96903">
    <a href="/manual/vote-note.php?id=96903&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96903" title="70% like this...">
    8
    </div>
  </div>
  <a href="#96903" class="name">
  <strong class="user"><em>anderseta at gmail dot com</em></strong></a><a class="genanchor" href="#96903"> &para;</a><div class="date" title="2010-03-22 02:48"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96903">
<div class="phpcode"><code><span class="html">If you wish to find the size of the file you are streaming and use it as your header this is how:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">write_function</span><span class="keyword">(</span><span class="default">$curl_resource</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">)
<br />{
<br />    if(</span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$curl_resource</span><span class="keyword">, </span><span class="default">CURLINFO_SIZE_DOWNLOAD</span><span class="keyword">) &lt;= </span><span class="default">2000</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Expires: 0'</span><span class="keyword">);
<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Cache-Control: must-revalidate, post-check=0, pre-check=0'</span><span class="keyword">);
<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Pragma: public'</span><span class="keyword">);
<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Description: File Transfer'</span><span class="keyword">);
<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Transfer-Encoding: binary"</span><span class="keyword">);
<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: "</span><span class="keyword">.</span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$curl_resource</span><span class="keyword">, </span><span class="default">CURLINFO_CONTENT_TYPE</span><span class="keyword">).</span><span class="string">""</span><span class="keyword">);
<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: "</span><span class="keyword">.</span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$curl_resource</span><span class="keyword">, </span><span class="default">CURLINFO_CONTENT_LENGTH_DOWNLOAD</span><span class="keyword">).</span><span class="string">""</span><span class="keyword">);
<br />    }
<br />    
<br />    print </span><span class="default">$string</span><span class="keyword">;
<br />
<br />    return </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'8bit'</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />1440 is the the default number of bytes curl will call the write function (BUFFERSIZE does not affect this, i actually think you can not change this value), so it means the headers are going to be set only one time.
<br />
<br />write_function must return the exact number of bytes of the string, so you can return a value with mb_strlen.</span></code></div>
  </div>
 </div>
  <div class="note" id="60142">  <div class="votes">
    <div id="Vu60142">
    <a href="/manual/vote-note.php?id=60142&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60142">
    <a href="/manual/vote-note.php?id=60142&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60142" title="70% like this...">
    7
    </div>
  </div>
  <a href="#60142" class="name">
  <strong class="user"><em>Dustin Hawkins</em></strong></a><a class="genanchor" href="#60142"> &para;</a><div class="date" title="2005-12-27 02:24"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60142">
<div class="phpcode"><code><span class="html">To further expand upon use of CURLOPT_CAPATH and CURLOPT_CAINFO...<br /><br />In my case I wanted to prevent curl from talking to any HTTPS server except my own using a self signed certificate. To do this, you'll need openssl installed and access to the HTTPS Server Certificate (server.crt by default on apache)<br /><br />You can then use a command simiar to this to translate your apache certificate into one that curl likes.<br /><br />$ openssl x509 -in server.crt -out outcert.pem -text<br /><br />Then set CURLOPT_CAINFO equal to the the full path to outcert.pem and turn on CURLOPT_SSL_VERIFYPEER.<br /><br />If you want to use the CURLOPT_CAPATH option, you should create a directory for all the valid certificates you have created, then use the c_rehash script that is included with openssl to "prepare" the directory.<br /><br />If you dont use the c_rehash utility, curl will ignore any file in the directory you set.</span></code></div>
  </div>
 </div>
  <div class="note" id="87112">  <div class="votes">
    <div id="Vu87112">
    <a href="/manual/vote-note.php?id=87112&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87112">
    <a href="/manual/vote-note.php?id=87112&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87112" title="68% like this...">
    14
    </div>
  </div>
  <a href="#87112" class="name">
  <strong class="user"><em>saidk at phirebranding dot com</em></strong></a><a class="genanchor" href="#87112"> &para;</a><div class="date" title="2008-11-19 01:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87112">
<div class="phpcode"><code><span class="html">Passing in PHP's $_SESSION into your cURL call:
<br />
<br /><span class="default">&lt;?php
<br />session_start</span><span class="keyword">();
<br /></span><span class="default">$strCookie </span><span class="keyword">= </span><span class="string">'PHPSESSID=' </span><span class="keyword">. </span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="string">'PHPSESSID'</span><span class="keyword">] . </span><span class="string">'; path=/'</span><span class="keyword">;
<br /></span><span class="default">session_write_close</span><span class="keyword">();
<br />
<br /></span><span class="default">$curl_handle </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="string">'enter_external_url_here'</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">( </span><span class="default">$curl_handle</span><span class="keyword">, </span><span class="default">CURLOPT_COOKIE</span><span class="keyword">, </span><span class="default">$strCookie </span><span class="keyword">);
<br /></span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$curl_handle</span><span class="keyword">);
<br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$curl_handle</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This worked great for me.  I was calling pages from the same server and needed to keep the $_SESSION variables.  This passes them over.  If you want to test, just print_r($_SESSION);
<br />
<br />Enjoy!</span></code></div>
  </div>
 </div>
  <div class="note" id="114475">  <div class="votes">
    <div id="Vu114475">
    <a href="/manual/vote-note.php?id=114475&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114475">
    <a href="/manual/vote-note.php?id=114475&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114475" title="69% like this...">
    5
    </div>
  </div>
  <a href="#114475" class="name">
  <strong class="user"><em>Martin K.</em></strong></a><a class="genanchor" href="#114475"> &para;</a><div class="date" title="2014-02-24 05:36"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114475">
<div class="phpcode"><code><span class="html">If you only want to enable cookie handling and you don't need to save the cookies for a separate session, just set CURLOPT_COOKIEFILE to an empty string.  I was given the advice to use php://memory but that did not seem to have the same effect.<br /><br />Although this is stated in the documentation I thought it was worth reiterating since it cause me so much trouble.</span></code></div>
  </div>
 </div>
  <div class="note" id="78046">  <div class="votes">
    <div id="Vu78046">
    <a href="/manual/vote-note.php?id=78046&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78046">
    <a href="/manual/vote-note.php?id=78046&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78046" title="68% like this...">
    12
    </div>
  </div>
  <a href="#78046" class="name">
  <strong class="user"><em>Ojas Ojasvi</em></strong></a><a class="genanchor" href="#78046"> &para;</a><div class="date" title="2007-09-25 10:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom78046">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">/*
<br />* Author: Ojas Ojasvi
<br />* Released: September 25, 2007
<br />* Description: An example of the disguise_curl() function in order to grab contents from a website while remaining fully camouflaged by using a fake user agent and fake headers.
<br />*/
<br />
<br /></span><span class="default">$url </span><span class="keyword">= </span><span class="string">'<a href="http://www.php.net" rel="nofollow" target="_blank">http://www.php.net</a>'</span><span class="keyword">;
<br />
<br /></span><span class="comment">// disguises the curl using fake headers and a fake user agent.
<br /></span><span class="keyword">function </span><span class="default">disguise_curl</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">)
<br />{
<br />  </span><span class="default">$curl </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();
<br />
<br />  </span><span class="comment">// Setup headers - I used the same headers from Firefox version 2.0.0.6
<br />  // below was split up because php.net said the line was too long. :/
<br />  </span><span class="default">$header</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"Accept: text/xml,application/xml,application/xhtml+xml,"</span><span class="keyword">;
<br />  </span><span class="default">$header</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] .= </span><span class="string">"text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5"</span><span class="keyword">;
<br />  </span><span class="default">$header</span><span class="keyword">[] = </span><span class="string">"Cache-Control: max-age=0"</span><span class="keyword">;
<br />  </span><span class="default">$header</span><span class="keyword">[] = </span><span class="string">"Connection: keep-alive"</span><span class="keyword">;
<br />  </span><span class="default">$header</span><span class="keyword">[] = </span><span class="string">"Keep-Alive: 300"</span><span class="keyword">;
<br />  </span><span class="default">$header</span><span class="keyword">[] = </span><span class="string">"Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7"</span><span class="keyword">;
<br />  </span><span class="default">$header</span><span class="keyword">[] = </span><span class="string">"Accept-Language: en-us,en;q=0.5"</span><span class="keyword">;
<br />  </span><span class="default">$header</span><span class="keyword">[] = </span><span class="string">"Pragma: "</span><span class="keyword">; </span><span class="comment">// browsers keep this blank.
<br />
<br />  </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">);
<br />  </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_USERAGENT</span><span class="keyword">, </span><span class="string">'Googlebot/2.1 (+<a href="http://www.google.com/bot.html" rel="nofollow" target="_blank">http://www.google.com/bot.html</a>)'</span><span class="keyword">);
<br />  </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">);
<br />  </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_REFERER</span><span class="keyword">, </span><span class="string">'<a href="http://www.google.com" rel="nofollow" target="_blank">http://www.google.com</a>'</span><span class="keyword">);
<br />  </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_ENCODING</span><span class="keyword">, </span><span class="string">'gzip,deflate'</span><span class="keyword">);
<br />  </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_AUTOREFERER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />  </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />  </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_TIMEOUT</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);
<br />
<br />  </span><span class="default">$html </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">); </span><span class="comment">// execute the curl command
<br />  </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">); </span><span class="comment">// close the connection
<br />
<br />  </span><span class="keyword">return </span><span class="default">$html</span><span class="keyword">; </span><span class="comment">// and finally, return $html
<br /></span><span class="keyword">}
<br />
<br /></span><span class="comment">// uses the function and displays the text off the website
<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">disguise_curl</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);
<br />echo </span><span class="default">$text</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Ojas Ojasvi</span></code></div>
  </div>
 </div>
  <div class="note" id="116223">  <div class="votes">
    <div id="Vu116223">
    <a href="/manual/vote-note.php?id=116223&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116223">
    <a href="/manual/vote-note.php?id=116223&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116223" title="68% like this...">
    7
    </div>
  </div>
  <a href="#116223" class="name">
  <strong class="user"><em>Aaron Wells</em></strong></a><a class="genanchor" href="#116223"> &para;</a><div class="date" title="2014-11-24 11:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116223">
<div class="phpcode"><code><span class="html">If you use cURL to fetch user-supplied URLs (for instance, in a web-based RSS aggregator), be aware of the risk of server-side request forgery (SSRF). This is an attack where the user takes advantage of the fact that cURL requests are sent from the web server itself, to reach network locations they wouldn't be able to reach from outside the network.<br /><br />For instance, they could enter a "<a href="http://localhost" rel="nofollow" target="_blank">http://localhost</a>" URL, and access things on the web server via "localhost". Or, "<a href="ftp://localhost" rel="nofollow" target="_blank">ftp://localhost</a>". cURL supports a lot of protocols!<br /><br />If you are using CURLOPT_FOLLOWLOCATION, the malicious URL could be in a redirect from the original request. cURL also will follow redirect headers to other protocols! (303 See Other; Location: <a href="ftp://localhost" rel="nofollow" target="_blank">ftp://localhost</a>).<br /><br />So if you're using cURL with user-supplied URLs, at the very least use CURLOPT_PROTOCOLS (which also sets CURLOPT_REDIR_PROTOCOLS), and either disable CURLOPT_FOLLOWLOCATION or use the "SafeCurl" library to safely follow redirects.</span></code></div>
  </div>
 </div>
  <div class="note" id="64447">  <div class="votes">
    <div id="Vu64447">
    <a href="/manual/vote-note.php?id=64447&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64447">
    <a href="/manual/vote-note.php?id=64447&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64447" title="68% like this...">
    11
    </div>
  </div>
  <a href="#64447" class="name">
  <strong class="user"><em>mr at coder dot tv</em></strong></a><a class="genanchor" href="#64447"> &para;</a><div class="date" title="2006-04-14 07:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64447">
<div class="phpcode"><code><span class="html">Sometimes you can't use CURLOPT_COOKIEJAR and CURLOPT_COOKIEFILE becoz of the server php-settings(They say u may grab any files from server using these options). Here is the solution<br />1)Don't use CURLOPT_FOLLOWLOCATION<br />2)Use curl_setopt($ch, CURLOPT_HEADER, 1)<br />3)Grab from the header cookies like this:<br />preg_match_all('|Set-Cookie: (.*);|U', $content, $results);    <br />$cookies = implode(';', $results[1]);<br />4)Set them using curl_setopt($ch, CURLOPT_COOKIE,  $cookies);<br /><br />Good Luck, Yevgen</span></code></div>
  </div>
 </div>
  <div class="note" id="102519">  <div class="votes">
    <div id="Vu102519">
    <a href="/manual/vote-note.php?id=102519&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102519">
    <a href="/manual/vote-note.php?id=102519&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102519" title="68% like this...">
    9
    </div>
  </div>
  <a href="#102519" class="name">
  <strong class="user"><em>S\</em></strong></a><a class="genanchor" href="#102519"> &para;</a><div class="date" title="2011-02-18 11:04"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102519">
<div class="phpcode"><code><span class="html">When using CURLOPT_POSTFIELDS with an array as parameter, you have to pay high attention to user input. Unvalidated user input will lead to serious security issues.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * test.php:<br /> */<br /></span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="string">'<a href="http://example.com" rel="nofollow" target="_blank">http://example.com</a>'</span><span class="keyword">);<br /><br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_POST</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, array(<br />    </span><span class="string">'foo' </span><span class="keyword">=&gt; </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'bar'</span><span class="keyword">]<br />));<br /><br /></span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Requesting "test.php?bar=@/home/user/test.png" will send "test.png" to example.com. <br />Make sure you remove the leading "@" from user input.</span></code></div>
  </div>
 </div>
  <div class="note" id="103232">  <div class="votes">
    <div id="Vu103232">
    <a href="/manual/vote-note.php?id=103232&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103232">
    <a href="/manual/vote-note.php?id=103232&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103232" title="66% like this...">
    10
    </div>
  </div>
  <a href="#103232" class="name">
  <strong class="user"><em>PHP at RHaworth dot net</em></strong></a><a class="genanchor" href="#103232"> &para;</a><div class="date" title="2011-04-02 02:31"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103232">
<div class="phpcode"><code><span class="html">When CURLOPT_FOLLOWLOCATION and CURLOPT_HEADER are both true and redirect/s have happened then the header returned by curl_exec() will contain all the headers in the redirect chain in the order they were encountered.</span></code></div>
  </div>
 </div>
  <div class="note" id="125490">  <div class="votes">
    <div id="Vu125490">
    <a href="/manual/vote-note.php?id=125490&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125490">
    <a href="/manual/vote-note.php?id=125490&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125490" title="66% like this...">
    2
    </div>
  </div>
  <a href="#125490" class="name">
  <strong class="user"><em>qwertz182</em></strong></a><a class="genanchor" href="#125490"> &para;</a><div class="date" title="2020-11-06 11:18"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125490">
<div class="phpcode"><code><span class="html">As the "example #2 Uploading file" says it is deprecated as of PHP 5.5.0 but doesn't tell you how it's done right,<br />here is a really easy example using the CURLFile class:<br /><br /><span class="default">&lt;?php<br />$request </span><span class="keyword">= [<br />    </span><span class="string">'firstName' </span><span class="keyword">=&gt; </span><span class="string">'John'</span><span class="keyword">,<br />    </span><span class="string">'lastName' </span><span class="keyword">=&gt; </span><span class="string">'Doe'</span><span class="keyword">,<br />    </span><span class="string">'file' </span><span class="keyword">=&gt; new </span><span class="default">CURLFile</span><span class="keyword">(</span><span class="string">'example.txt'</span><span class="keyword">, </span><span class="string">'text/plain'</span><span class="keyword">) </span><span class="comment">// or use curl_file_create()<br /></span><span class="keyword">];<br /><br /></span><span class="default">$curlOptions </span><span class="keyword">= [<br />    </span><span class="default">CURLOPT_URL </span><span class="keyword">=&gt; </span><span class="string">'<a href="http://example.com/upload.php" rel="nofollow" target="_blank">http://example.com/upload.php</a>'</span><span class="keyword">,<br />    </span><span class="default">CURLOPT_POST </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />    </span><span class="default">CURLOPT_HEADER </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">,<br />    </span><span class="default">CURLOPT_RETURNTRANSFER </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />    </span><span class="default">CURLOPT_POSTFIELDS </span><span class="keyword">=&gt; </span><span class="default">$request</span><span class="keyword">,<br />];<br /><br /></span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br /></span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">$curlOptions</span><span class="keyword">);<br /><br /></span><span class="default">$response </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This is just like posting a html form with an input[type=file] field.<br />The result on windows could look like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// $_POST<br /></span><span class="keyword">Array<br />(<br />    [</span><span class="default">firstName</span><span class="keyword">] =&gt; </span><span class="default">John<br />    </span><span class="keyword">[</span><span class="default">lastName</span><span class="keyword">] =&gt; </span><span class="default">Doe<br /></span><span class="keyword">)<br /><br /></span><span class="comment">// $_FILES<br /></span><span class="keyword">Array<br />(<br />    [</span><span class="default">file</span><span class="keyword">] =&gt; Array<br />        (<br />            [</span><span class="default">name</span><span class="keyword">] =&gt; </span><span class="default">example</span><span class="keyword">.</span><span class="default">txt<br />            </span><span class="keyword">[</span><span class="default">type</span><span class="keyword">] =&gt; </span><span class="default">text</span><span class="keyword">/</span><span class="default">plain<br />            </span><span class="keyword">[</span><span class="default">tmp_name</span><span class="keyword">] =&gt; </span><span class="default">C</span><span class="keyword">:</span><span class="default">\wamp64\tmp\php3016</span><span class="keyword">.</span><span class="default">tmp<br />            </span><span class="keyword">[</span><span class="default">error</span><span class="keyword">] =&gt; </span><span class="default">0<br />            </span><span class="keyword">[</span><span class="default">size</span><span class="keyword">] =&gt; </span><span class="default">14<br />        </span><span class="keyword">)<br /><br />)<br /></span><span class="default">?&gt;<br /></span><br />Since the request is an array (and not a string), curl will automatically encode the data as "multipart/form-data".<br />Please be aware that if you pass an invalid file path to CURLFile, setting the CURLOPT_POSTFIELDS option will fail.<br />So if you are using curl_setopt_array for setting the options at once, according to the manual, "If an option could not be successfully set, FALSE is immediately returned, ignoring any future options in the options array.".<br />So you should make sure that the file exists or set CURLOPT_POSTFIELDS with curl_setopt() and check if it returns false and act accordingly.</span></code></div>
  </div>
 </div>
  <div class="note" id="108333">  <div class="votes">
    <div id="Vu108333">
    <a href="/manual/vote-note.php?id=108333&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108333">
    <a href="/manual/vote-note.php?id=108333&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108333" title="66% like this...">
    3
    </div>
  </div>
  <a href="#108333" class="name">
  <strong class="user"><em>Joey Hewitt</em></strong></a><a class="genanchor" href="#108333"> &para;</a><div class="date" title="2012-04-17 10:52"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108333">
<div class="phpcode"><code><span class="html">Note that if you put a certificate chain in a PEM file, the certificates need to be ordered so that each certificate is followed by its issuer (i.e., root last.)<br /><br />Source: <a href="http://publib.boulder.ibm.com/tividd/td/ITIM/SC32-1493-00/en_US/HTML/im451_config09.htm" rel="nofollow" target="_blank">http://publib.boulder.ibm.com/tividd/td/ITIM/SC32-1493-00/en_US/HTML/im451_config09.htm</a></span></code></div>
  </div>
 </div>
  <div class="note" id="97383">  <div class="votes">
    <div id="Vu97383">
    <a href="/manual/vote-note.php?id=97383&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97383">
    <a href="/manual/vote-note.php?id=97383&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97383" title="66% like this...">
    3
    </div>
  </div>
  <a href="#97383" class="name">
  <strong class="user"><em>clint at fewbar dot com</em></strong></a><a class="genanchor" href="#97383"> &para;</a><div class="date" title="2010-04-16 02:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97383">
<div class="phpcode"><code><span class="html">If you have turned on conditional gets on a curl handle, and then for a subsequent request, you don't have a good setting for CURLOPT_TIMEVALUE , you can disable If-Modified-Since checking with:<br /><br /><span class="default">&lt;?php<br /><br />$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$foo</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_TIMEVALUE</span><span class="keyword">, </span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$foo_path</span><span class="keyword">));<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_TIMECONDITION</span><span class="keyword">, </span><span class="default">CURLOPT_TIMECOND_IFMODIFIEDSINCE</span><span class="keyword">);<br /></span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /></span><span class="comment">// Reuse same curl handle<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$bar</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_TIMEVALUE</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">); </span><span class="comment">// don't know mtime<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_TIMECONDITION</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); </span><span class="comment">// set it to 0, turns it off<br /></span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107146">  <div class="votes">
    <div id="Vu107146">
    <a href="/manual/vote-note.php?id=107146&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107146">
    <a href="/manual/vote-note.php?id=107146&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107146" title="64% like this...">
    10
    </div>
  </div>
  <a href="#107146" class="name">
  <strong class="user"><em>Adam Monsen</em></strong></a><a class="genanchor" href="#107146"> &para;</a><div class="date" title="2012-01-10 04:36"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107146">
<div class="phpcode"><code><span class="html">CURLOPT_POST must be left unset if you want the Content-Type header set to "multipart/form-data" (e.g., when CURLOPT_POSTFIELDS is an array). If you set CURLOPT_POSTFIELDS to an array and have CURLOPT_POST set to TRUE, Content-Length will be -1 and most sane servers will reject the request. If you set CURLOPT_POSTFIELDS to an array and have CURLOPT_POST set to FALSE, cURL will send a GET request.</span></code></div>
  </div>
 </div>
  <div class="note" id="110442">  <div class="votes">
    <div id="Vu110442">
    <a href="/manual/vote-note.php?id=110442&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110442">
    <a href="/manual/vote-note.php?id=110442&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110442" title="63% like this...">
    10
    </div>
  </div>
  <a href="#110442" class="name">
  <strong class="user"><em>regan dot corey at gmail dot com</em></strong></a><a class="genanchor" href="#110442"> &para;</a><div class="date" title="2012-10-22 10:22"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110442">
<div class="phpcode"><code><span class="html">I spent a couple of days trying to POST a multi-dimensional array of form fields, including a file upload, to a remote server to update a product. Here are the breakthroughs that FINALLY allowed the script to run as desired.<br /><br />Firstly, the HTML form used input names like these:<br />&lt;input type="text" name="product[name]" /&gt;<br />&lt;input type="text" name="product[cost]" /&gt;<br />&lt;input type="file" name="product[thumbnail]" /&gt;<br />in conjunction with two other form inputs not part of the product array<br />&lt;input type="text" name="method" value="put" /&gt;<br />&lt;input type="text" name="mode" /&gt;<br /><br />I used several cURL options, but the only two (other than URL) that mattered were:<br />curl_setopt($handle, CURLOPT_POST, true);<br />curl_setopt($handle, CURLOPT_POSTFIELDS, $postfields);<br />Pretty standard so far.<br />Note: headers didn't need to be set, cURL automatically sets headers (like content-type: multipart/form-data; content-length...) when you pass an array into CURLOPT_POSTFIELDS.<br />Note: even though this is supposed to be a PUT command through an HTTP POST form, no special PUT options needed to be passed natively through cURL. Options such as<br />curl_setopt($handle, CURLOPT_HTTPHEADER, array('X-HTTP-Method-Override: PUT', 'Content-Length: ' . strlen($fields)));<br />or<br />curl_setopt($handle, CURLOPT_PUT, true);<br />or<br />curl_setopt($handle, CURLOPT_CUSTOMREQUEST, "PUT);<br />were not needed to make the code work.<br /><br />The fields I wanted to pass through cURL were arranged into an array something like this:<br />$postfields = array("method" =&gt; $_POST["method"],<br />                    "mode" =&gt; $_POST["mode"],<br />                    "product" =&gt; array("name" =&gt; $_POST["product"], <br />                                        "cost" =&gt; $_POST["product"]["cost"], <br />                                        "thumbnail" =&gt; "@{$_FILES["thumbnail"]["tmp_name"]};type={$_FILES["thumbnail"]["type"]}")<br />                    );<br /><br />-Notice how the @ precedes the temporary filename, this creates a link so PHP will upload/transfer an actual file instead of just the file name, which would happen if the @ isn't included.<br />-Notice how I forcefully set the mime-type of the file to upload. I was having issues where images filetypes were defaulting to octet-stream instead of image/png or image/jpeg or whatever the type of the selected image.<br /><br />I then tried passing $postfields straight into curl_setopt($this-&gt;handle, CURLOPT_POSTFIELDS, $postfields); but it didn't work.<br />I tried using http_build_query($postfields); but that didn't work properly either.<br />In both cases either the file wouldn't be treated as an actual file and the form data wasn't being sent properly. The problem was HTTP's methods of transmitting arrays. While PHP and other languages can figure out how to handle arrays passed via forms, HTTP isn't quite as sofisticated. I had to rewrite the $postfields array like so:<br />$postfields = array("method" =&gt; $_POST["method"],<br />                    "mode" =&gt; $_POST["mode"],<br />                    "product[name]" =&gt; $_POST["product"], <br />                    "product[cost]" =&gt; $_POST["product"]["cost"], <br />                    "product[thumbnail]" =&gt; "@{$_FILES["thumbnail"]["tmp_name"]}");<br />curl_setopt($handle, CURLOPT_POSTFIELDS, $postfields);<br /><br />This, without the use of http_build_query, solved all of my problems. Now the receiving host outputs both $_POST and $_FILES vars correctly.</span></code></div>
  </div>
 </div>
  <div class="note" id="81581">  <div class="votes">
    <div id="Vu81581">
    <a href="/manual/vote-note.php?id=81581&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81581">
    <a href="/manual/vote-note.php?id=81581&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81581" title="64% like this...">
    8
    </div>
  </div>
  <a href="#81581" class="name">
  <strong class="user"><em>c00lways at gmail dot com</em></strong></a><a class="genanchor" href="#81581"> &para;</a><div class="date" title="2008-03-04 01:16"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81581">
<div class="phpcode"><code><span class="html">if you would like to send xml request to a server (lets say, making a soap proxy),
<br />you have to set
<br />
<br /><span class="default">&lt;?php
<br />curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">, Array(</span><span class="string">"Content-Type: text/xml"</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />makesure you watch for cache issue:
<br />the below code will prevent cache...
<br />
<br /><span class="default">&lt;?php
<br />curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_FORBID_REUSE</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_FRESH_CONNECT</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />hope it helps ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="84916">  <div class="votes">
    <div id="Vu84916">
    <a href="/manual/vote-note.php?id=84916&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84916">
    <a href="/manual/vote-note.php?id=84916&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84916" title="64% like this...">
    5
    </div>
  </div>
  <a href="#84916" class="name">
  <strong class="user"><em>fred at themancan dot com</em></strong></a><a class="genanchor" href="#84916"> &para;</a><div class="date" title="2008-08-05 04:28"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84916">
<div class="phpcode"><code><span class="html">To find what encoding a given HTTP POST request uses is easy -- passing an array to CURLOPT_POSTFIELDS results in  multipart/form-data:
<br />
<br /><span class="default">&lt;?php
<br />curl_setopt</span><span class="keyword">(</span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, array(</span><span class="string">'field1' </span><span class="keyword">=&gt; </span><span class="string">'value'</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />Passing a URL-encoded string will result in application/x-www-form-urlencoded:
<br />
<br /><span class="default">&lt;?php
<br />curl_setopt</span><span class="keyword">(</span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, array(</span><span class="string">'field1=value&amp;field2=value2'</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />I ran across this when integrating with both a warehouse system and an email system; neither would accept multipart/form-data, but both happily accepted application/x-www-form-urlencoded.</span></code></div>
  </div>
 </div>
  <div class="note" id="101139">  <div class="votes">
    <div id="Vu101139">
    <a href="/manual/vote-note.php?id=101139&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101139">
    <a href="/manual/vote-note.php?id=101139&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101139" title="64% like this...">
    4
    </div>
  </div>
  <a href="#101139" class="name">
  <strong class="user"><em>scy-phpmanual at scytale dot name</em></strong></a><a class="genanchor" href="#101139"> &para;</a><div class="date" title="2010-11-29 04:01"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101139">
<div class="phpcode"><code><span class="html">In order to reset CURLOPT_HTTPHEADER, set it to array(). The cURL C API says you should set it to NULL, but that doesn’t work in the PHP wrapper.</span></code></div>
  </div>
 </div>
  <div class="note" id="93108">  <div class="votes">
    <div id="Vu93108">
    <a href="/manual/vote-note.php?id=93108&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93108">
    <a href="/manual/vote-note.php?id=93108&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93108" title="63% like this...">
    6
    </div>
  </div>
  <a href="#93108" class="name">
  <strong class="user"><em>rob</em></strong></a><a class="genanchor" href="#93108"> &para;</a><div class="date" title="2009-08-23 09:07"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93108">
<div class="phpcode"><code><span class="html">Whats not mentioned in the documentation is that you have to set CURLOPT_COOKIEJAR to a file for the CURL handle to actually use cookies, if it is not set then cookies will not be parsed.</span></code></div>
  </div>
 </div>
  <div class="note" id="42201">  <div class="votes">
    <div id="Vu42201">
    <a href="/manual/vote-note.php?id=42201&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42201">
    <a href="/manual/vote-note.php?id=42201&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42201" title="62% like this...">
    4
    </div>
  </div>
  <a href="#42201" class="name">
  <strong class="user"><em>ron at ttvavanti dot nl</em></strong></a><a class="genanchor" href="#42201"> &para;</a><div class="date" title="2004-05-07 08:00"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42201">
<div class="phpcode"><code><span class="html">If you specify a CAINFO, note that the file must be in PEM format! (If not, it won't work).<br />Using Openssl you can use: <br />openssl x509 -in &lt;cert&gt; -inform d -outform PEM -out cert.pem <br />To create a pem formatted certificate from a binary certificate (the one you get if you download the ca somewhere).</span></code></div>
  </div>
 </div>
  <div class="note" id="83937">  <div class="votes">
    <div id="Vu83937">
    <a href="/manual/vote-note.php?id=83937&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83937">
    <a href="/manual/vote-note.php?id=83937&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83937" title="61% like this...">
    3
    </div>
  </div>
  <a href="#83937" class="name">
  <strong class="user"><em>Salil Kothadia</em></strong></a><a class="genanchor" href="#83937"> &para;</a><div class="date" title="2008-06-19 09:02"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83937">
<div class="phpcode"><code><span class="html">In PHP5, for the "CURLOPT_POSTFIELDS" option, we can use:<br /><br /><span class="default">&lt;?php<br />$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="default">$URI</span><span class="keyword">);<br /></span><span class="default">$Post </span><span class="keyword">= </span><span class="default">http_build_query</span><span class="keyword">(</span><span class="default">$PostData</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">$Post</span><span class="keyword">);<br /></span><span class="default">$Output </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120765">  <div class="votes">
    <div id="Vu120765">
    <a href="/manual/vote-note.php?id=120765&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120765">
    <a href="/manual/vote-note.php?id=120765&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120765" title="58% like this...">
    3
    </div>
  </div>
  <a href="#120765" class="name">
  <strong class="user"><em>markandrewslade at gmail dot com</em></strong></a><a class="genanchor" href="#120765"> &para;</a><div class="date" title="2017-03-07 03:22"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120765">
<div class="phpcode"><code><span class="html">Contrary to the documentation, CURLOPT_STDERR should be set to a handle to the file you want to write to, not the file's location.</span></code></div>
  </div>
 </div>
  <div class="note" id="108162">  <div class="votes">
    <div id="Vu108162">
    <a href="/manual/vote-note.php?id=108162&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108162">
    <a href="/manual/vote-note.php?id=108162&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108162" title="58% like this...">
    3
    </div>
  </div>
  <a href="#108162" class="name">
  <strong class="user"><em>anonymous</em></strong></a><a class="genanchor" href="#108162"> &para;</a><div class="date" title="2012-04-03 03:55"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108162">
<div class="phpcode"><code><span class="html">This may be not obvious, but if you specify the CURLOPT_POSTFIELDS and don't specify the CURLOPT_POST - it will still send POST, not GET (as you might think - since GET is default).<br />So the line:<br /><br />curl_setopt($ch, CURLOPT_POSTFIELDS, $data);<br /><br />is synonym to:<br /><br />curl_setopt($ch, CURLOPT_POST, 1);<br />curl_setopt($ch, CURLOPT_POSTFIELDS, $data);<br /><br />Even if you set the options like this (in this order):<br /><br />curl_setopt($ch, CURLOPT_POST, 0);<br />curl_setopt($ch, CURLOPT_POSTFIELDS, $data);<br /><br />it will send POST, since CURLOPT_POSTFIELDS is latter.<br />So if you want GET - make sure you don't have CURLOPT_POSTFIELDS specified somewhere.</span></code></div>
  </div>
 </div>
  <div class="note" id="53445">  <div class="votes">
    <div id="Vu53445">
    <a href="/manual/vote-note.php?id=53445&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53445">
    <a href="/manual/vote-note.php?id=53445&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53445" title="60% like this...">
    2
    </div>
  </div>
  <a href="#53445" class="name">
  <strong class="user"><em>michaeledwards.com</em></strong></a><a class="genanchor" href="#53445"> &para;</a><div class="date" title="2005-06-01 02:57"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53445">
<div class="phpcode"><code><span class="html">Problems can occur if you mix CURLOPT_URL with a 'Host:' header in CURLOPT_HEADERS on redirects because cURL will combine the host you explicitly stated in the 'Host:' header with the host from the Location: header of the redirect response. 
<br />
<br />In short, don't do this:
<br />
<br /><span class="default">&lt;?php
<br />$host </span><span class="keyword">= </span><span class="string">"www.example.com"</span><span class="keyword">;
<br /></span><span class="default">$url </span><span class="keyword">= </span><span class="string">"<a href="http://" rel="nofollow" target="_blank">http://</a></span><span class="default">$host</span><span class="string">/"</span><span class="keyword">;
<br />
<br /></span><span class="default">$headers </span><span class="keyword">= array(</span><span class="string">"Host: </span><span class="default">$host</span><span class="string">"</span><span class="keyword">);
<br />
<br /></span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();
<br />
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">, </span><span class="default">$headers</span><span class="keyword">);
<br />
<br />Do </span><span class="default">this instead</span><span class="keyword">:
<br />
<br /></span><span class="default">$host </span><span class="keyword">= </span><span class="string">"www.example.com"</span><span class="keyword">;
<br /></span><span class="default">$url </span><span class="keyword">= </span><span class="string">"<a href="http://" rel="nofollow" target="_blank">http://</a></span><span class="default">$host</span><span class="string">/"</span><span class="keyword">;
<br />
<br /></span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();
<br />
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109634">  <div class="votes">
    <div id="Vu109634">
    <a href="/manual/vote-note.php?id=109634&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109634">
    <a href="/manual/vote-note.php?id=109634&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109634" title="56% like this...">
    3
    </div>
  </div>
  <a href="#109634" class="name">
  <strong class="user"><em>qeremy [atta] gmail [dotta] com</em></strong></a><a class="genanchor" href="#109634"> &para;</a><div class="date" title="2012-08-03 08:57"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109634">
<div class="phpcode"><code><span class="html">If you are trying to update something on your server and you need to handle this update operation by PUT;<br /><br /><span class="default">&lt;?php<br />curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_CUSTOMREQUEST</span><span class="keyword">, </span><span class="string">"PUT"</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_PUT</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />are "useless" without;<br /><br /><span class="default">&lt;?php<br />curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">, array(</span><span class="string">'X-HTTP-Method-Override: PUT'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Example;<br /><br />Updating a book data in database identified by "id 1";<br /><br />--cURL Part--<br /><span class="default">&lt;?php<br />$data </span><span class="keyword">= </span><span class="default">http_build_query</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">);<br /></span><span class="comment">// or<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">http_build_query</span><span class="keyword">(array(<br />   </span><span class="string">'name'  </span><span class="keyword">=&gt; </span><span class="string">'PHP in Action'</span><span class="keyword">,<br />   </span><span class="string">'price' </span><span class="keyword">=&gt; </span><span class="default">10.9<br /></span><span class="keyword">));<br /><br /></span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="string">"<a href="http://api.localhost/rest/books/1" rel="nofollow" target="_blank">http://api.localhost/rest/books/1</a>"</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="comment">// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT"); // no need anymore<br />// or<br />// curl_setopt($ch, CURLOPT_PUT, 1); // no need anymore<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">, array(</span><span class="string">'X-HTTP-Method-Override: PUT'</span><span class="keyword">));<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">$ce </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$ce</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />--API class--<br /><span class="default">&lt;?php<br /></span><span class="keyword">public function </span><span class="default">putAction</span><span class="keyword">() {<br />    echo </span><span class="string">"putAction() -&gt; id: "</span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_getParam</span><span class="keyword">(</span><span class="string">'id'</span><span class="keyword">) .</span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">);<br />    </span><span class="comment">// do stuff with post data<br />    </span><span class="keyword">...<br /></span><span class="default">?&gt;<br /></span><br />--Output--<br />putAction() -&gt; id: 15<br />Array<br />(<br />    [name] =&gt; PHP in Action<br />    [price] =&gt; 10.9<br />)<br /><br />---Keywords--<br />rest, restfull api, restfull put, curl put, curl customrequest put</span></code></div>
  </div>
 </div>
  <div class="note" id="102090">  <div class="votes">
    <div id="Vu102090">
    <a href="/manual/vote-note.php?id=102090&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102090">
    <a href="/manual/vote-note.php?id=102090&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102090" title="57% like this...">
    1
    </div>
  </div>
  <a href="#102090" class="name">
  <strong class="user"><em>gskluzacek at gmail dot com</em></strong></a><a class="genanchor" href="#102090"> &para;</a><div class="date" title="2011-01-26 01:42"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102090">
<div class="phpcode"><code><span class="html">FYI... unless you specifically set the user agent, no user agent will be sent in your request as there is no default value like some of the other options.<br /><br />As others have said, not sending a user agent may cause you to not  get the results that you expected, e.g., 0 byte length content, different content, etc.</span></code></div>
  </div>
 </div>
  <div class="note" id="91510">  <div class="votes">
    <div id="Vu91510">
    <a href="/manual/vote-note.php?id=91510&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91510">
    <a href="/manual/vote-note.php?id=91510&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91510" title="57% like this...">
    1
    </div>
  </div>
  <a href="#91510" class="name">
  <strong class="user"><em>Andrew</em></strong></a><a class="genanchor" href="#91510"> &para;</a><div class="date" title="2009-06-14 04:56"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91510">
<div class="phpcode"><code><span class="html">I noticed that if you want to get current cookie file after curl_exec() - you need to close current curl handle (like it said in manual), but if you want cookies to be dumped to file after any curl_exec (without curl_close) you can:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">#call it normally
<br /></span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(); 
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HEADER</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); 
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_COOKIEFILE</span><span class="keyword">, </span><span class="string">"cookiefile"</span><span class="keyword">); 
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_COOKIEJAR</span><span class="keyword">, </span><span class="string">"cookiefile"</span><span class="keyword">); 
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_FOLLOWLOCATION</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); 
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="string">'<a href="http://www.example.com/" rel="nofollow" target="_blank">http://www.example.com/</a>'</span><span class="keyword">); 
<br /></span><span class="default">$result1 </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">); 
<br />
<br /></span><span class="comment">#and then  make a temp copy
<br /></span><span class="default">$ch_temp</span><span class="keyword">=</span><span class="default">curl_copy_handle</span><span class="keyword">(</span><span class="default">ch</span><span class="keyword">);
<br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br /></span><span class="default">$ch</span><span class="keyword">=</span><span class="default">$ch_temp</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Only this way, if you close $ch_temp - cookies wont be dumped.</span></code></div>
  </div>
 </div>
  <div class="note" id="112326">  <div class="votes">
    <div id="Vu112326">
    <a href="/manual/vote-note.php?id=112326&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112326">
    <a href="/manual/vote-note.php?id=112326&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112326" title="56% like this...">
    2
    </div>
  </div>
  <a href="#112326" class="name">
  <strong class="user"><em>shiplu at programmer dot net</em></strong></a><a class="genanchor" href="#112326"> &para;</a><div class="date" title="2013-06-01 06:23"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112326">
<div class="phpcode"><code><span class="html">CURLOPT_POST should be set before CURLOPT_POSTFIELDS. Otherwise you might encounter 411 Length required error.<br /><br />Following code generates "411 Length Required" on nginx/1.1.15<br /><span class="default">&lt;?php<br />curl_setopt </span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">$postfields</span><span class="keyword">); <br /></span><span class="default">curl_setopt </span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_POST</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />But this one works.<br /><br /><span class="default">&lt;?php<br />curl_setopt </span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_POST</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">curl_setopt </span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">$postfields</span><span class="keyword">); <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112113">  <div class="votes">
    <div id="Vu112113">
    <a href="/manual/vote-note.php?id=112113&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112113">
    <a href="/manual/vote-note.php?id=112113&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112113" title="53% like this...">
    2
    </div>
  </div>
  <a href="#112113" class="name">
  <strong class="user"><em>Madcat</em></strong></a><a class="genanchor" href="#112113"> &para;</a><div class="date" title="2013-05-06 03:14"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112113">
<div class="phpcode"><code><span class="html">If you have a mixture of strings starting with @ (at character) and files in CURLOPT_POSTFIELDS you have a problem (such as posting a tweet with attached media) because curl tries to interpret anything starting with @ as a file.<br /><br /><span class="default">&lt;?php<br /><br />$postfields </span><span class="keyword">= array(<br />    </span><span class="string">'upload_file' </span><span class="keyword">=&gt; </span><span class="string">'@file_to_upload.png'</span><span class="keyword">,<br />    </span><span class="string">'upload_text' </span><span class="keyword">=&gt; </span><span class="string">'@text_to_upload'<br /></span><span class="keyword">);<br /><br /></span><span class="default">$curl </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="string">'<a href="http://example.com/upload-test" rel="nofollow" target="_blank">http://example.com/upload-test</a>'</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">$postfields</span><span class="keyword">);<br /></span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">);<br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />To get around this, prepend the text string with the NULL character like so:<br /><br /><span class="default">&lt;?php<br />    $postfields </span><span class="keyword">= array(<br />        </span><span class="string">'upload_file' </span><span class="keyword">=&gt; </span><span class="string">'@file_to_upload.png'</span><span class="keyword">,<br />        </span><span class="string">'upload_text' </span><span class="keyword">=&gt; </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"\0%s"</span><span class="keyword">, </span><span class="string">'@text_to_upload'</span><span class="keyword">)<br />    );<br /></span><span class="default">?&gt;<br /></span><br />Original source: <a href="http://bit.ly/AntMle" rel="nofollow" target="_blank">http://bit.ly/AntMle</a></span></code></div>
  </div>
 </div>
  <div class="note" id="92522">  <div class="votes">
    <div id="Vu92522">
    <a href="/manual/vote-note.php?id=92522&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92522">
    <a href="/manual/vote-note.php?id=92522&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92522" title="53% like this...">
    1
    </div>
  </div>
  <a href="#92522" class="name">
  <strong class="user"><em>Sylvain R</em></strong></a><a class="genanchor" href="#92522"> &para;</a><div class="date" title="2009-07-28 03:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92522">
<div class="phpcode"><code><span class="html">When you are using CURLOPT_FILE to download directly into a file you must close the file handler after the curl_close() otherwise the file will be incomplete and you will not be able to use it until the end of the execution of the php process.
<br />
<br /><span class="default">&lt;?php
<br />
<br />$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'/tmp/foo'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);
<br /></span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="string">'<a href="http://example.com/foo" rel="nofollow" target="_blank">http://example.com/foo</a>'</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_FILE</span><span class="keyword">, </span><span class="default">$fh</span><span class="keyword">);
<br /></span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />
<br /></span><span class="comment"># at this point your file is not complete and corrupted
<br />
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);
<br />
<br /></span><span class="comment"># now you can use your file;
<br />
<br /></span><span class="default">read_file</span><span class="keyword">(</span><span class="string">'/tmp/foo'</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97206">  <div class="votes">
    <div id="Vu97206">
    <a href="/manual/vote-note.php?id=97206&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97206">
    <a href="/manual/vote-note.php?id=97206&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97206" title="52% like this...">
    2
    </div>
  </div>
  <a href="#97206" class="name">
  <strong class="user"><em>julien veneziano</em></strong></a><a class="genanchor" href="#97206"> &para;</a><div class="date" title="2010-04-08 03:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97206">
<div class="phpcode"><code><span class="html">If you need to send deta in a DELETE request, use:<br /><br /><span class="default">&lt;?php<br />$request_body </span><span class="keyword">= </span><span class="string">'some data'</span><span class="keyword">;<br /></span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="string">'<a href="http://www.example.com" rel="nofollow" target="_blank">http://www.example.com</a>'</span><span class="keyword">);<br />        </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">$request_body</span><span class="keyword">);<br />        </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_FOLLOWLOCATION</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HEADER</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); <br />        </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_CUSTOMREQUEST</span><span class="keyword">, </span><span class="string">"DELETE"</span><span class="keyword">);<br />        </span><span class="default">$response </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109319">  <div class="votes">
    <div id="Vu109319">
    <a href="/manual/vote-note.php?id=109319&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109319">
    <a href="/manual/vote-note.php?id=109319&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109319" title="52% like this...">
    1
    </div>
  </div>
  <a href="#109319" class="name">
  <strong class="user"><em>adrian at foeder dot de</em></strong></a><a class="genanchor" href="#109319"> &para;</a><div class="date" title="2012-07-06 07:37"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109319">
<div class="phpcode"><code><span class="html">if you want to do a GET request with additional body data it will become tricky not to implicitly change the request to a POST, like many notes below correctly state.<br />So to do the analogy of command line's<br /><br />curl -XGET '<a href="http://example.org?foo=bar" rel="nofollow" target="_blank">http://example.org?foo=bar</a>' -d '&lt;baz&gt;some additional data&lt;/baz&gt;'<br /><br />in PHP you'll do, besides your other necessary stuff,<br /><br /><span class="default">&lt;?php<br />    curl_setopt</span><span class="keyword">(</span><span class="default">$curlHandle</span><span class="keyword">, </span><span class="default">CURLOPT_CUSTOMREQUEST</span><span class="keyword">, </span><span class="string">'GET'</span><span class="keyword">);<br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curlHandle</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="string">'&lt;baz&gt;some additional data&lt;/baz&gt;'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />during my experiments, every other "similar" way, like e.g. CURLOPT_HTTPGET, didn't send the additional data or fell into POST.</span></code></div>
  </div>
 </div>
  <div class="note" id="128365">  <div class="votes">
    <div id="Vu128365">
    <a href="/manual/vote-note.php?id=128365&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128365">
    <a href="/manual/vote-note.php?id=128365&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128365" title="100% like this...">
    2
    </div>
  </div>
  <a href="#128365" class="name">
  <strong class="user"><em>Niki Romagnoli</em></strong></a><a class="genanchor" href="#128365"> &para;</a><div class="date" title="2023-04-04 11:44"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128365">
<div class="phpcode"><code><span class="html">Set order when using CURLOPT_POST and CURLOPT_POSTFIELDS *matters*.<br />Setting CURL_POST to true will ERASE any previous CURLOPT_POSTFIELDS using an array. Result is request be a POST with empty body.<br /><br />CURLOPT_POSTFIELDS will set CURLOPT_POST to true for you, no need for repeat.<br />If you really need to set both, then either:<br />  - set CURLOPT_POST *before* CURLOPT_POSTFIELDS<br />  - or don't use array and convert CURLOPT_POSTFIELDS to URL-encoded string, it will not be affected this way (ie. <span class="default">&lt;?php curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">http_build_query</span><span class="keyword">(</span><span class="default">$yourArray</span><span class="keyword">)); </span><span class="default">?&gt;</span> )</span></code></div>
  </div>
 </div>
  <div class="note" id="128774">  <div class="votes">
    <div id="Vu128774">
    <a href="/manual/vote-note.php?id=128774&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128774">
    <a href="/manual/vote-note.php?id=128774&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128774" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128774" class="name">
  <strong class="user"><em>alexchexes at gmail dot com</em></strong></a><a class="genanchor" href="#128774"> &para;</a><div class="date" title="2023-08-02 02:06"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128774">
<div class="phpcode"><code><span class="html">If you want cURL to successfully write cookies to a file specified with CURLOPT_COOKIEJAR, ensure that cURL has the necessary permissions to modify the file if it already exists.<br /><br />I spent nearly a day trying to understand why cURL wasn't saving cookies to an existing file, even though I could easily modify the exact same file using file_put_contents(). Moreover, cURL itself could create the same file and save cookies, but only if it didn't previously exist.<br /><br />Ultimately, the issue was related to file ownership. I was working within WSL2, inside a symlinked Windows directory. The [automount]"metadata" in wsl.conf was not set, causing every file created from PHP to have the default owner, which differed from the user running PHP.<br /><br />Once I configured wsl.conf and then changed the ownership of the entire directory to match the user running PHP, cookies were successfully written to any file without any issues.</span></code></div>
  </div>
 </div>
  <div class="note" id="122274">  <div class="votes">
    <div id="Vu122274">
    <a href="/manual/vote-note.php?id=122274&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122274">
    <a href="/manual/vote-note.php?id=122274&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122274" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122274" class="name">
  <strong class="user"><em>joel at mojamail dot com</em></strong></a><a class="genanchor" href="#122274"> &para;</a><div class="date" title="2018-01-16 11:57"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122274">
<div class="phpcode"><code><span class="html">In the long documentation, it's easy to miss the fact that CURLOPT_POSTFIELDS will set the Content-Type to "multipart/form-data" (instead of the usual "application/x-www-form-urlencoded") IFF you supply an array (instead of a query string)!<br /><br />Some servers will return weird errors (like "SSL read: error:00000000:lib(0):func(0):reason(0), errno 104") for the wrong Content-Type, and you may waste many hours of time trying to figure out why!</span></code></div>
  </div>
 </div>
  <div class="note" id="69115">  <div class="votes">
    <div id="Vu69115">
    <a href="/manual/vote-note.php?id=69115&amp;page=function.curl-setopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69115">
    <a href="/manual/vote-note.php?id=69115&amp;page=function.curl-setopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69115" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69115" class="name">
  <strong class="user"><em>php at miggy dot org</em></strong></a><a class="genanchor" href="#69115"> &para;</a><div class="date" title="2006-08-23 10:35"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69115">
<div class="phpcode"><code><span class="html">Note that if you want to use a proxy and use it as a _cache_, you'll have to do:
<br />
<br /><span class="default">&lt;?php curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">, array(</span><span class="string">"Pragma: "</span><span class="keyword">)); </span><span class="default">?&gt;
<br /></span>
<br />else by default Curl puts a "Pragma: no-cache" header in and thus force cache misses for all requests.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.curl-setopt&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-setopt.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.curl.php">cURL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.curl-close.php" title="curl_&#8203;close">curl_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-copy-handle.php" title="curl_&#8203;copy_&#8203;handle">curl_&#8203;copy_&#8203;handle</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-errno.php" title="curl_&#8203;errno">curl_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-error.php" title="curl_&#8203;error">curl_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-escape.php" title="curl_&#8203;escape">curl_&#8203;escape</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-exec.php" title="curl_&#8203;exec">curl_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-getinfo.php" title="curl_&#8203;getinfo">curl_&#8203;getinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-init.php" title="curl_&#8203;init">curl_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-add-handle.php" title="curl_&#8203;multi_&#8203;add_&#8203;handle">curl_&#8203;multi_&#8203;add_&#8203;handle</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-close.php" title="curl_&#8203;multi_&#8203;close">curl_&#8203;multi_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-errno.php" title="curl_&#8203;multi_&#8203;errno">curl_&#8203;multi_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-exec.php" title="curl_&#8203;multi_&#8203;exec">curl_&#8203;multi_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-getcontent.php" title="curl_&#8203;multi_&#8203;getcontent">curl_&#8203;multi_&#8203;getcontent</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-info-read.php" title="curl_&#8203;multi_&#8203;info_&#8203;read">curl_&#8203;multi_&#8203;info_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-init.php" title="curl_&#8203;multi_&#8203;init">curl_&#8203;multi_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-remove-handle.php" title="curl_&#8203;multi_&#8203;remove_&#8203;handle">curl_&#8203;multi_&#8203;remove_&#8203;handle</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-select.php" title="curl_&#8203;multi_&#8203;select">curl_&#8203;multi_&#8203;select</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-setopt.php" title="curl_&#8203;multi_&#8203;setopt">curl_&#8203;multi_&#8203;setopt</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-strerror.php" title="curl_&#8203;multi_&#8203;strerror">curl_&#8203;multi_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-pause.php" title="curl_&#8203;pause">curl_&#8203;pause</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-reset.php" title="curl_&#8203;reset">curl_&#8203;reset</a>
                        </li>
                                                <li class="current">
                            <a href="function.curl-setopt.php" title="curl_&#8203;setopt">curl_&#8203;setopt</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-setopt-array.php" title="curl_&#8203;setopt_&#8203;array">curl_&#8203;setopt_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-share-close.php" title="curl_&#8203;share_&#8203;close">curl_&#8203;share_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-share-errno.php" title="curl_&#8203;share_&#8203;errno">curl_&#8203;share_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-share-init.php" title="curl_&#8203;share_&#8203;init">curl_&#8203;share_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-share-init-persistent.php" title="curl_&#8203;share_&#8203;init_&#8203;persistent">curl_&#8203;share_&#8203;init_&#8203;persistent</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-share-setopt.php" title="curl_&#8203;share_&#8203;setopt">curl_&#8203;share_&#8203;setopt</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-share-strerror.php" title="curl_&#8203;share_&#8203;strerror">curl_&#8203;share_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-strerror.php" title="curl_&#8203;strerror">curl_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-unescape.php" title="curl_&#8203;unescape">curl_&#8203;unescape</a>
                        </li>
                                                <li class="">
                            <a href="function.curl_upkeep.php" title="curl_&#8203;upkeep">curl_&#8203;upkeep</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-version.php" title="curl_&#8203;version">curl_&#8203;version</a>
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
