<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: curl_multi_select - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.curl-multi-select.php">
 <link rel="shorturl" href="https://www.php.net/curl-multi-select">
 <link rel="alternate" href="https://www.php.net/curl-multi-select" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.curl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.curl-multi-remove-handle.php">
 <link rel="next" href="https://www.php.net/manual/en/function.curl-multi-setopt.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.curl-multi-select.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.curl-multi-select.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.curl-multi-select.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.curl-multi-select.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.curl-multi-select.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.curl-multi-select.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.curl-multi-select.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.curl-multi-select.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.curl-multi-select.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.curl-multi-select.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.curl-multi-select.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Wait until reading or writing is possible for any cURL multi handle connection" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: curl_multi_select - Manual" />
<meta name="twitter:description" content="Wait until reading or writing is possible for any cURL multi handle connection" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: curl_multi_select - Manual" />
<meta itemprop="description" content="Wait until reading or writing is possible for any cURL multi handle connection" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Wait until reading or writing is possible for any cURL multi handle connection" />

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
        <a href="function.curl-multi-setopt.php">
          curl_multi_setopt &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.curl-multi-remove-handle.php">
          &laquo; curl_multi_remove_handle        </a>
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
            <option value='en/function.curl-multi-select.php' selected="selected">English</option>
            <option value='de/function.curl-multi-select.php'>German</option>
            <option value='es/function.curl-multi-select.php'>Spanish</option>
            <option value='fr/function.curl-multi-select.php'>French</option>
            <option value='it/function.curl-multi-select.php'>Italian</option>
            <option value='ja/function.curl-multi-select.php'>Japanese</option>
            <option value='pt_BR/function.curl-multi-select.php'>Brazilian Portuguese</option>
            <option value='ru/function.curl-multi-select.php'>Russian</option>
            <option value='tr/function.curl-multi-select.php'>Turkish</option>
            <option value='uk/function.curl-multi-select.php'>Ukrainian</option>
            <option value='zh/function.curl-multi-select.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.curl-multi-select" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">curl_multi_select</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_select</span> &mdash; <span class="dc-title">Wait until reading or writing is possible for any cURL multi handle connection</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.curl-multi-select-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>curl_multi_select</strong></span>(<span class="methodparam"><span class="type"><a href="class.curlmultihandle.php" class="type CurlMultiHandle">CurlMultiHandle</a></span> <code class="parameter">$multi_handle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$timeout</code><span class="initializer"> = 1.0</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Blocks the execution of the script until a cURL handle attached to
   the cURL multi handle would be able to make progress on the next call to
   <span class="function"><a href="function.curl-multi-exec.php" class="function">curl_multi_exec()</a></span> or until the timeout strikes
   (whichever comes first).
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-function.curl-multi-select-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt><code class="parameter">multi_handle</code>
</dt><dd><p class="para">A cURL multi handle returned by
<span class="function"><a href="function.curl-multi-init.php" class="function">curl_multi_init()</a></span>.</p></dd>
    
     <dt><code class="parameter">timeout</code></dt>
     <dd>
      <p class="para">
       Time, in seconds, to wait for a response from the active cURL multi handle connections.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-select-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   On success, returns the number of active descriptors contained in
   the descriptor sets. This may be <code class="literal">0</code> if there was no activity on any
   of the descriptors. On failure, this function will
   return <code class="literal">-1</code> on a select failure (from the
   underlying <code class="literal">select()</code> system call).
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.curl-multi-select-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   Throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if <code class="parameter">timeout</code>
   is less than <code class="literal">0</code> or greater than <strong><code><a href="reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.curl-multi-select-changelog">
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
       Now throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if <code class="parameter">timeout</code>
       is less than <code class="literal">0</code> or greater than <strong><code><a href="reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></code></strong>.
      </td>
     </tr>

     <tr>
 <td>8.0.0</td>
 <td>
  <code class="parameter">multi_handle</code> expects a <span class="classname"><a href="class.curlmultihandle.php" class="classname">CurlMultiHandle</a></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.curl-multi-select-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.curl-multi-init.php" class="function" rel="rdfs-seeAlso">curl_multi_init()</a> - Returns a new cURL multi handle</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/functions/curl-multi-select.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.curl-multi-select%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.curl-multi-select&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-multi-select.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115381">  <div class="votes">
    <div id="Vu115381">
    <a href="/manual/vote-note.php?id=115381&amp;page=function.curl-multi-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115381">
    <a href="/manual/vote-note.php?id=115381&amp;page=function.curl-multi-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115381" title="81% like this...">
    40
    </div>
  </div>
  <a href="#115381" class="name">
  <strong class="user"><em>nevil85 at gmail dot com</em></strong></a><a class="genanchor" href="#115381"> &para;</a><div class="date" title="2014-07-15 04:06"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115381">
<div class="phpcode"><code><span class="html">Even after so many distro releases, in PHP v5.5.9 and libcurl v7.35.0, curl_multi_select still returns -1. The only work around here is to wait and proceed like nothing ever happened. You have to determine the "wait" required here. <br /><br />In my application a very small interval like usleep(1) worked. For example:<br /><br /><span class="default">&lt;?php<br />        </span><span class="comment">// While we're still active, execute curl<br />        </span><span class="default">$active </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        do {<br />            </span><span class="default">$mrc </span><span class="keyword">= </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$multi</span><span class="keyword">, </span><span class="default">$active</span><span class="keyword">);<br />        } while (</span><span class="default">$mrc </span><span class="keyword">== </span><span class="default">CURLM_CALL_MULTI_PERFORM</span><span class="keyword">);<br />    <br />        while (</span><span class="default">$active </span><span class="keyword">&amp;&amp; </span><span class="default">$mrc </span><span class="keyword">== </span><span class="default">CURLM_OK</span><span class="keyword">) {<br />            </span><span class="comment">// Wait for activity on any curl-connection<br />            </span><span class="keyword">if (</span><span class="default">curl_multi_select</span><span class="keyword">(</span><span class="default">$multi</span><span class="keyword">) == -</span><span class="default">1</span><span class="keyword">) {<br />                </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />            }<br />    <br />            </span><span class="comment">// Continue to exec until curl is ready to<br />            // give us more data<br />            </span><span class="keyword">do {<br />                </span><span class="default">$mrc </span><span class="keyword">= </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$multi</span><span class="keyword">, </span><span class="default">$active</span><span class="keyword">);<br />            } while (</span><span class="default">$mrc </span><span class="keyword">== </span><span class="default">CURLM_CALL_MULTI_PERFORM</span><span class="keyword">);<br />        }<br /></span><span class="default">?&gt;<br /></span><br />Internally php curl_multi_select uses libcurl curl_multi_fdset function and its libcurl documentation says :<br /><a href="http://curl.haxx.se/libcurl/c/curl_multi_fdset.html" rel="nofollow" target="_blank">http://curl.haxx.se/libcurl/c/curl_multi_fdset.html</a><br /><br />"When libcurl returns -1 in max_fd, it is because libcurl currently does something that isn't possible for your application to monitor with a socket and unfortunately you can then not know exactly when the current action is completed using select(). When max_fd returns with -1, you need to wait a while and then proceed and call curl_multi_perform anyway. How long to wait? I would suggest 100 milliseconds at least, but you may want to test it out in your own particular conditions to find a suitable value. <br /><br />When doing select(), you should use curl_multi_timeout to figure out how long to wait for action."<br /><br />Untill PHP implements curl_multi_timeout() we have to play with our application and determine the "wait".</span></code></div>
  </div>
 </div>
  <div class="note" id="123869">  <div class="votes">
    <div id="Vu123869">
    <a href="/manual/vote-note.php?id=123869&amp;page=function.curl-multi-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123869">
    <a href="/manual/vote-note.php?id=123869&amp;page=function.curl-multi-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123869" title="100% like this...">
    3
    </div>
  </div>
  <a href="#123869" class="name">
  <strong class="user"><em>bishop at php dot net</em></strong></a><a class="genanchor" href="#123869"> &para;</a><div class="date" title="2019-05-22 01:50"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123869">
<div class="phpcode"><code><span class="html">Before PHP 7.1.23 and 7.2.11, curl_multi_select() would return -1 if cURL had no open file descriptors. Since then, assuming libcurl 7.28 or higher, curl_multi_select() will return 0 if cURL has no open file descriptors and -1 on error.
<br />
<br />See <a href="https://bugs.php.net/bug.php?id=76480" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=76480</a>
<br />
<br />This is a BC break. See <a href="https://bugs.php.net/bug.php?id=77030" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=77030</a></span></code></div>
  </div>
 </div>
  <div class="note" id="108928">  <div class="votes">
    <div id="Vu108928">
    <a href="/manual/vote-note.php?id=108928&amp;page=function.curl-multi-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108928">
    <a href="/manual/vote-note.php?id=108928&amp;page=function.curl-multi-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108928" title="78% like this...">
    16
    </div>
  </div>
  <a href="#108928" class="name">
  <strong class="user"><em>vigo dot von dot harrach at gmx dot de</em></strong></a><a class="genanchor" href="#108928"> &para;</a><div class="date" title="2012-06-06 10:53"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108928">
<div class="phpcode"><code><span class="html">curl_multi_select($mh, $timeout) simply blocks for $timeout seconds while curl_multi_exec() returns CURLM_CALL_MULTI_PERFORM. Otherwise, it works as intended, and blocks until at least one connection has completed or $timeout seconds, whatever happens first.
<br />
<br />For that reason, curl_multi_exec() should always be wrapped:
<br />
<br /><span class="default">&lt;?php
<br />  </span><span class="keyword">function </span><span class="default">full_curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, &amp;</span><span class="default">$still_running</span><span class="keyword">) {
<br />    do {
<br />      </span><span class="default">$rv </span><span class="keyword">= </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$still_running</span><span class="keyword">);
<br />    } while (</span><span class="default">$rv </span><span class="keyword">== </span><span class="default">CURLM_CALL_MULTI_PERFORM</span><span class="keyword">);
<br />    return </span><span class="default">$rv</span><span class="keyword">;
<br />  }
<br /></span><span class="default">?&gt;
<br /></span>
<br />With that, the core of "multi" processing becomes (ignoring error handling for brevity):
<br />
<br /><span class="default">&lt;?php
<br />  full_curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$still_running</span><span class="keyword">); </span><span class="comment">// start requests
<br />  </span><span class="keyword">do { </span><span class="comment">// "wait for completion"-loop
<br />    </span><span class="default">curl_multi_select</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">); </span><span class="comment">// non-busy (!) wait for state change
<br />    </span><span class="default">full_curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$still_running</span><span class="keyword">); </span><span class="comment">// get new state
<br />    </span><span class="keyword">while (</span><span class="default">$info </span><span class="keyword">= </span><span class="default">curl_multi_info_read</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">)) {
<br />      </span><span class="comment">// process completed request (e.g. curl_multi_getcontent($info['handle']))
<br />    </span><span class="keyword">}
<br />  } while (</span><span class="default">$still_running</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Note that after starting requests, retrieval is done in the background - one of the better shots at parallel processing in PHP.</span></code></div>
  </div>
 </div>
  <div class="note" id="85010">  <div class="votes">
    <div id="Vu85010">
    <a href="/manual/vote-note.php?id=85010&amp;page=function.curl-multi-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85010">
    <a href="/manual/vote-note.php?id=85010&amp;page=function.curl-multi-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85010" title="69% like this...">
    10
    </div>
  </div>
  <a href="#85010" class="name">
  <strong class="user"><em>public at grik dot net</em></strong></a><a class="genanchor" href="#85010"> &para;</a><div class="date" title="2008-08-10 06:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85010">
<div class="phpcode"><code><span class="html">This function blocks the calling process until there is activity on any of the connections opened by the curl_multi interface, or until the timeout period has expired. <br />In other words, it waits for data to be received in the opened connections.<br /><br />Internally it fetches socket pointers with "curl_multi_fdset()" and runs the "select()" C function.<br />It returns in 3 cases:<br />1. Activity is detected on any socket;<br />2. Timeout has ended (second parameter);<br />3. Process received any signal (#man kill).<br /><br />The function returns an integer:<br />* In case of activity it returns a number, usually 1.<br />I suppose, it returns the number of connections with activity detected.<br />* If timeout expires it returns 0<br />* In case of error it returns -1<br /><br />Thanks for attention, hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="115054">  <div class="votes">
    <div id="Vu115054">
    <a href="/manual/vote-note.php?id=115054&amp;page=function.curl-multi-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115054">
    <a href="/manual/vote-note.php?id=115054&amp;page=function.curl-multi-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115054" title="70% like this...">
    4
    </div>
  </div>
  <a href="#115054" class="name">
  <strong class="user"><em>xxavalanchexx at gmail dot com</em></strong></a><a class="genanchor" href="#115054"> &para;</a><div class="date" title="2014-05-20 12:13"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115054">
<div class="phpcode"><code><span class="html">According to <a href="https://bugs.php.net/bug.php?id=61141:" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=61141:</a><br /><br />On Windows setups using libcurl version 7.24 or later (which seems to correspond to PHP 5.3.10 or later), you may find that this always returns -1. This is, apparently, not strictly a bug: according to the libcurl documentation, you should add your own sleep if curl_multi_select returns -1.<br /><br />For example:<br /><span class="default">&lt;?php<br /></span><span class="comment">/* setup $mh */<br /><br /></span><span class="default">$active </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />do {<br />    </span><span class="default">$mrc </span><span class="keyword">= </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$active</span><span class="keyword">);<br />} while (</span><span class="default">$mrc </span><span class="keyword">== </span><span class="default">CURLM_CALL_MULTI_PERFORM</span><span class="keyword">);<br /><br />while (</span><span class="default">$active </span><span class="keyword">&amp;&amp; </span><span class="default">$mrc </span><span class="keyword">== </span><span class="default">CURLM_OK</span><span class="keyword">) {<br />    if (</span><span class="default">curl_multi_select</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">) == -</span><span class="default">1</span><span class="keyword">) {<br />        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">);<br />    }<br />    do {<br />        </span><span class="default">$mrc </span><span class="keyword">= </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$active</span><span class="keyword">);<br />    } while (</span><span class="default">$mrc </span><span class="keyword">== </span><span class="default">CURLM_CALL_MULTI_PERFORM</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/* close $mh */<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.curl-multi-select&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-multi-select.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
