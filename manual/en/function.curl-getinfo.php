<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: curl_getinfo - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.curl-getinfo.php">
 <link rel="shorturl" href="https://www.php.net/curl-getinfo">
 <link rel="alternate" href="https://www.php.net/curl-getinfo" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.curl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.curl-exec.php">
 <link rel="next" href="https://www.php.net/manual/en/function.curl-init.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.curl-getinfo.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.curl-getinfo.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.curl-getinfo.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.curl-getinfo.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.curl-getinfo.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.curl-getinfo.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.curl-getinfo.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.curl-getinfo.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.curl-getinfo.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.curl-getinfo.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.curl-getinfo.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get information regarding a specific transfer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: curl_getinfo - Manual" />
<meta name="twitter:description" content="Get information regarding a specific transfer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: curl_getinfo - Manual" />
<meta itemprop="description" content="Get information regarding a specific transfer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get information regarding a specific transfer" />

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
        <a href="function.curl-init.php">
          curl_init &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.curl-exec.php">
          &laquo; curl_exec        </a>
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
            <option value='en/function.curl-getinfo.php' selected="selected">English</option>
            <option value='de/function.curl-getinfo.php'>German</option>
            <option value='es/function.curl-getinfo.php'>Spanish</option>
            <option value='fr/function.curl-getinfo.php'>French</option>
            <option value='it/function.curl-getinfo.php'>Italian</option>
            <option value='ja/function.curl-getinfo.php'>Japanese</option>
            <option value='pt_BR/function.curl-getinfo.php'>Brazilian Portuguese</option>
            <option value='ru/function.curl-getinfo.php'>Russian</option>
            <option value='tr/function.curl-getinfo.php'>Turkish</option>
            <option value='uk/function.curl-getinfo.php'>Ukrainian</option>
            <option value='zh/function.curl-getinfo.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.curl-getinfo" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">curl_getinfo</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_getinfo</span> &mdash; <span class="dc-title">Get information regarding a specific transfer</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.curl-getinfo-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>curl_getinfo</strong></span>(<span class="methodparam"><span class="type"><a href="class.curlhandle.php" class="type CurlHandle">CurlHandle</a></span> <code class="parameter">$handle</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$option</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   Gets information about the last transfer.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.curl-getinfo-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt><code class="parameter">handle</code>
</dt><dd><p class="para">A cURL handle returned by
<span class="function"><a href="function.curl-init.php" class="function">curl_init()</a></span>.</p></dd>
    
     <dt><code class="parameter">option</code></dt>
     <dd>
      <p class="para">
       One of the <strong><code><a href="curl.constants.php#constant.curlinfo-text">CURLINFO_<span class="replaceable">*</span></a></code></strong> constants.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.curl-getinfo-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   If <code class="parameter">option</code> is given, returns its value.
   Otherwise, returns an associative array with the following elements
   (which correspond to <code class="parameter">option</code>), or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      &quot;url&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;content_type&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;http_code&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;header_size&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;request_size&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;filetime&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;ssl_verify_result&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;redirect_count&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;total_time&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;namelookup_time&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;connect_time&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;pretransfer_time&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;size_upload&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;size_download&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;speed_download&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;speed_upload&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;download_content_length&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;upload_content_length&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;starttransfer_time&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;redirect_time&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;certinfo&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;primary_ip&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;primary_port&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;local_ip&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;local_port&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;redirect_url&quot;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;request_header&quot; (This is only set if the <strong><code><a href="curl.constants.php#constant.curlinfo-header-out">CURLINFO_HEADER_OUT</a></code></strong>
      is set by a previous call to <span class="function"><a href="function.curl-setopt.php" class="function">curl_setopt()</a></span>)
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      &quot;posttransfer_time_us&quot; (Available as of PHP 8.4.0 and cURL 8.10.0)
     </span>
    </li>
   </ul>
   Note that private data is not included in the associative array and must be retrieved individually with the <strong><code><a href="curl.constants.php#constant.curlinfo-private">CURLINFO_PRIVATE</a></code></strong> option.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.curl-getinfo-changelog">
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
        Introduced <strong><code><a href="curl.constants.php#constant.curlinfo-posttransfer-time-t">CURLINFO_POSTTRANSFER_TIME_T</a></code></strong> constant and <code class="literal">posttransfer_time_us</code> (Curl 8.10.0 or later).
       </td>
      </tr>

      <tr>
       <td>8.3.0</td>
       <td>
        Introduced <strong><code><a href="curl.constants.php#constant.curlinfo-cainfo">CURLINFO_CAINFO</a></code></strong>
        and <strong><code><a href="curl.constants.php#constant.curlinfo-capath">CURLINFO_CAPATH</a></code></strong>.
       </td>
      </tr>

      <tr>
       <td>8.2.0</td>
       <td>
        Introduced <strong><code><a href="curl.constants.php#constant.curlinfo-proxy-error">CURLINFO_PROXY_ERROR</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-referer">CURLINFO_REFERER</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-retry-after">CURLINFO_RETRY_AFTER</a></code></strong>.
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
       <td>8.0.0</td>
       <td>
        <code class="parameter">option</code> is nullable now;
        previously, the default was <code class="literal">0</code>.
       </td>
      </tr>

      <tr>
       <td>7.3.0</td>
       <td>
        Introduced <strong><code><a href="curl.constants.php#constant.curlinfo-content-length-download-t">CURLINFO_CONTENT_LENGTH_DOWNLOAD_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-content-length-upload-t">CURLINFO_CONTENT_LENGTH_UPLOAD_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-http-version">CURLINFO_HTTP_VERSION</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-protocol">CURLINFO_PROTOCOL</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-proxy-ssl-verifyresult">CURLINFO_PROXY_SSL_VERIFYRESULT</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-scheme">CURLINFO_SCHEME</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-size-download-t">CURLINFO_SIZE_DOWNLOAD_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-size-upload-t">CURLINFO_SIZE_UPLOAD_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-speed-download-t">CURLINFO_SPEED_DOWNLOAD_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-speed-upload-t">CURLINFO_SPEED_UPLOAD_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-appconnect-time-t">CURLINFO_APPCONNECT_TIME_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-connect-time-t">CURLINFO_CONNECT_TIME_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-filetime-t">CURLINFO_FILETIME_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-namelookup-time-t">CURLINFO_NAMELOOKUP_TIME_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-pretransfer-time-t">CURLINFO_PRETRANSFER_TIME_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-redirect-time-t">CURLINFO_REDIRECT_TIME_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-starttransfer-time-t">CURLINFO_STARTTRANSFER_TIME_T</a></code></strong>,
        <strong><code><a href="curl.constants.php#constant.curlinfo-total-time-t">CURLINFO_TOTAL_TIME_T</a></code></strong>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.curl-getinfo-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4492">
    <p><strong>Example #1 <span class="function"><strong>curl_getinfo()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a cURL handle<br /></span><span style="color: #0000BB">$ch </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Execute<br /></span><span style="color: #0000BB">curl_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Check if any error occurred<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">curl_errno</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">)) {<br />  </span><span style="color: #0000BB">$info </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_getinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br />  echo </span><span style="color: #DD0000">'Took '</span><span style="color: #007700">, </span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'total_time'</span><span style="color: #007700">], </span><span style="color: #DD0000">' seconds to send a request to '</span><span style="color: #007700">, </span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">], </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Close handle<br /></span><span style="color: #0000BB">curl_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-4493">
    <p><strong>Example #2 <span class="function"><strong>curl_getinfo()</strong></span> example with <code class="parameter">option</code> parameter</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a cURL handle<br /></span><span style="color: #0000BB">$ch </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Execute<br /></span><span style="color: #0000BB">curl_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Check HTTP status code<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">curl_errno</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">)) {<br />  switch (</span><span style="color: #0000BB">$http_code </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_getinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLINFO_HTTP_CODE</span><span style="color: #007700">)) {<br />    case </span><span style="color: #0000BB">200</span><span style="color: #007700">:  </span><span style="color: #FF8000"># OK<br />      </span><span style="color: #007700">break;<br />    default:<br />      echo </span><span style="color: #DD0000">'Unexpected HTTP code: '</span><span style="color: #007700">, </span><span style="color: #0000BB">$http_code</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />  }<br />}<br /><br /></span><span style="color: #FF8000">// Close handle<br /></span><span style="color: #0000BB">curl_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.curl-getinfo-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Information gathered by this function is kept if the handle is re-used. This means
    that unless a statistic is overridden internally by this function, the previous info
    is returned.
   </p>
  </p></blockquote>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/functions/curl-getinfo.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.curl-getinfo%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.curl-getinfo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-getinfo.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="41332">  <div class="votes">
    <div id="Vu41332">
    <a href="/manual/vote-note.php?id=41332&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41332">
    <a href="/manual/vote-note.php?id=41332&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41332" title="73% like this...">
    59
    </div>
  </div>
  <a href="#41332" class="name">
  <strong class="user"><em>ssttoo at hotmail dot com</em></strong></a><a class="genanchor" href="#41332"> &para;</a><div class="date" title="2004-04-06 12:13"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41332">
<div class="phpcode"><code><span class="html">Here are the response codes ready for pasting in an ini-style file. Can be used to provide more descriptive message, corresponding to 'http_code' index of the arrray returned by curl_getinfo(). <br />These are taken from the W3 consortium HTTP/1.1: Status Code Definitions, found at<br /><a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html" rel="nofollow" target="_blank">http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html</a><br /><br />[Informational 1xx]<br />100="Continue"<br />101="Switching Protocols"<br /><br />[Successful 2xx]<br />200="OK"<br />201="Created"<br />202="Accepted"<br />203="Non-Authoritative Information"<br />204="No Content"<br />205="Reset Content"<br />206="Partial Content"<br /><br />[Redirection 3xx]<br />300="Multiple Choices"<br />301="Moved Permanently"<br />302="Found"<br />303="See Other"<br />304="Not Modified"<br />305="Use Proxy"<br />306="(Unused)"<br />307="Temporary Redirect"<br /><br />[Client Error 4xx]<br />400="Bad Request"<br />401="Unauthorized"<br />402="Payment Required"<br />403="Forbidden"<br />404="Not Found"<br />405="Method Not Allowed"<br />406="Not Acceptable"<br />407="Proxy Authentication Required"<br />408="Request Timeout"<br />409="Conflict"<br />410="Gone"<br />411="Length Required"<br />412="Precondition Failed"<br />413="Request Entity Too Large"<br />414="Request-URI Too Long"<br />415="Unsupported Media Type"<br />416="Requested Range Not Satisfiable"<br />417="Expectation Failed"<br /><br />[Server Error 5xx]<br />500="Internal Server Error"<br />501="Not Implemented"<br />502="Bad Gateway"<br />503="Service Unavailable"<br />504="Gateway Timeout"<br />505="HTTP Version Not Supported"<br /><br />And an example usage:<br /><span class="default">&lt;?php<br />$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(); </span><span class="comment">// create cURL handle (ch)<br /></span><span class="keyword">if (!</span><span class="default">$ch</span><span class="keyword">) {<br />    die(</span><span class="string">"Couldn't initialize a cURL handle"</span><span class="keyword">);<br />}<br /></span><span class="comment">// set some cURL options<br /></span><span class="default">$ret </span><span class="keyword">= </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">,            </span><span class="string">"<a href="http://mail.yahoo.com" rel="nofollow" target="_blank">http://mail.yahoo.com</a>"</span><span class="keyword">);<br /></span><span class="default">$ret </span><span class="keyword">= </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HEADER</span><span class="keyword">,         </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$ret </span><span class="keyword">= </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_FOLLOWLOCATION</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$ret </span><span class="keyword">= </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$ret </span><span class="keyword">= </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_TIMEOUT</span><span class="keyword">,        </span><span class="default">30</span><span class="keyword">);<br /><br /></span><span class="comment">// execute<br /></span><span class="default">$ret </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /><br />if (empty(</span><span class="default">$ret</span><span class="keyword">)) {<br />    </span><span class="comment">// some kind of an error happened<br />    </span><span class="keyword">die(</span><span class="default">curl_error</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">));<br />    </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">); </span><span class="comment">// close cURL handler<br /></span><span class="keyword">} else {<br />    </span><span class="default">$info </span><span class="keyword">= </span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br />    </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">); </span><span class="comment">// close cURL handler<br /><br />    </span><span class="keyword">if (empty(</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'http_code'</span><span class="keyword">])) {<br />            die(</span><span class="string">"No HTTP code was returned"</span><span class="keyword">); <br />    } else {<br />        </span><span class="comment">// load the HTTP codes<br />        </span><span class="default">$http_codes </span><span class="keyword">= </span><span class="default">parse_ini_file</span><span class="keyword">(</span><span class="string">"path/to/the/ini/file/I/pasted/above"</span><span class="keyword">);<br />        <br />        </span><span class="comment">// echo results<br />        </span><span class="keyword">echo </span><span class="string">"The server responded: &lt;br /&gt;"</span><span class="keyword">;<br />        echo </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'http_code'</span><span class="keyword">] . </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$http_codes</span><span class="keyword">[</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'http_code'</span><span class="keyword">]];<br />    }<br /><br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100556">  <div class="votes">
    <div id="Vu100556">
    <a href="/manual/vote-note.php?id=100556&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100556">
    <a href="/manual/vote-note.php?id=100556&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100556" title="66% like this...">
    23
    </div>
  </div>
  <a href="#100556" class="name">
  <strong class="user"><em>vince</em></strong></a><a class="genanchor" href="#100556"> &para;</a><div class="date" title="2010-10-22 04:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100556">
<div class="phpcode"><code><span class="html">CURLINFO_HTTP_CODE does not return a string, as the docs say, but rather an integer.<br /><br /><span class="default">&lt;?php<br />    $c </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="string">'<a href="http://www.example.com/" rel="nofollow" target="_blank">http://www.example.com/</a>'</span><span class="keyword">);<br />    if(</span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">, </span><span class="default">CURLINFO_HTTP_CODE</span><span class="keyword">) === </span><span class="string">'200'</span><span class="keyword">) echo </span><span class="string">"CURLINFO_HTTP_CODE returns a string."</span><span class="keyword">;<br />    if(</span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">, </span><span class="default">CURLINFO_HTTP_CODE</span><span class="keyword">) === </span><span class="default">200</span><span class="keyword">) echo </span><span class="string">"CURLINFO_HTTP_CODE returns an integer."</span><span class="keyword">;<br />    </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />returns<br /><br />"CURLINFO_HTTP_CODE returns an integer."</span></code></div>
  </div>
 </div>
  <div class="note" id="111678">  <div class="votes">
    <div id="Vu111678">
    <a href="/manual/vote-note.php?id=111678&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111678">
    <a href="/manual/vote-note.php?id=111678&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111678" title="60% like this...">
    15
    </div>
  </div>
  <a href="#111678" class="name">
  <strong class="user"><em>nikita dot bulatenko at gmail dot com</em></strong></a><a class="genanchor" href="#111678"> &para;</a><div class="date" title="2013-03-15 02:11"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111678">
<div class="phpcode"><code><span class="html">CURLINFO_SSL_VERIFYRESULT error codes:<br />0: ok the operation was successful. <br />2 : unable to get issuer certificate<br />3: unable to get certificate CRL<br />4: unable to decrypt certificate's signature<br />5: unable to decrypt CRL's signature<br />6: unable to decode issuer public key<br />7: certificate signature failure<br />8: CRL signature failure<br />9: certificate is not yet valid<br />10: certificate has expired<br />11: CRL is not yet valid<br />12:CRL has expired<br />13: format error in certificate's notBefore field<br />14: format error in certificate's notAfter field<br />15: format error in CRL's lastUpdate field<br />16: format error in CRL's nextUpdate field<br />17: out of memory<br />18: self signed certificate<br />19: self signed certificate in certificate chain<br />20: unable to get local issuer certificate<br />21:unable to verify the first certificate<br />22: certificate chain too long<br />23: certificate revoked<br />24: invalid CA certificate<br />25: path length constraint exceeded<br />26: unsupported certificate purpose<br />27: certificate not trusted<br />28: certificate rejected<br />29: subject issuer mismatch<br />30: authority and subject key identifier mismatch<br />31: authority and issuer serial number mismatch<br />32: key usage does not include certificate signing<br />50: application verification failure<br />details at <a href="http://www.openssl.org/docs/apps/verify.html#VERIFY_OPERATION" rel="nofollow" target="_blank">http://www.openssl.org/docs/apps/verify.html#VERIFY_OPERATION</a></span></code></div>
  </div>
 </div>
  <div class="note" id="118328">  <div class="votes">
    <div id="Vu118328">
    <a href="/manual/vote-note.php?id=118328&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118328">
    <a href="/manual/vote-note.php?id=118328&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118328" title="65% like this...">
    6
    </div>
  </div>
  <a href="#118328" class="name">
  <strong class="user"><em>public-mail at alekciy dot ru</em></strong></a><a class="genanchor" href="#118328"> &para;</a><div class="date" title="2015-11-18 09:35"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118328">
<div class="phpcode"><code><span class="html">Note, header_size include "\r\n\r\n". So if you use CURLOPT_FOLLOWLOCATION&gt;0, CURLOPT_HEADER=true, CURLOPT_RETURNTRANSFER=true right way splite header/body:<br /><br />$response = curl_exec($ch);<br />$curl_info = curl_getinfo($ch);<br />curl_close($ch);<br />$header_size = $curl_info['header_size'];<br />$header = substr($response, 0, $header_size);<br />$body = substr($response, $header_size);</span></code></div>
  </div>
 </div>
  <div class="note" id="116123">  <div class="votes">
    <div id="Vu116123">
    <a href="/manual/vote-note.php?id=116123&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116123">
    <a href="/manual/vote-note.php?id=116123&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116123" title="63% like this...">
    5
    </div>
  </div>
  <a href="#116123" class="name">
  <strong class="user"><em>qrworld.net</em></strong></a><a class="genanchor" href="#116123"> &para;</a><div class="date" title="2014-11-11 04:43"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116123">
<div class="phpcode"><code><span class="html">Here you have a function that I use to get the content of a URL using cURL. This uses curl_getinfo to know if it is a regular URL or maybe a redirection.<br /><br />I hope it would be useful for you:<br /><br />function getUrlContent($url){<br /> $ch = curl_init();<br /> curl_setopt($ch, CURLOPT_URL, $url);<br /> curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');<br /> curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);<br /> curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);<br /> curl_setopt($ch, CURLOPT_TIMEOUT, 5);<br /> $data = curl_exec($ch);<br /> $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);<br /> curl_close($ch);<br /> return ($httpcode&gt;=200 &amp;&amp; $httpcode&lt;300) ? $data : false;<br />}<br /><br />The source comes from this website:<br /><br /><a href="http://softontherocks.blogspot.com/2014/11/descargar-el-contenido-de-una-url.html" rel="nofollow" target="_blank">http://softontherocks.blogspot.com/2014/11/descargar-el-contenido-de-una-url.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="83898">  <div class="votes">
    <div id="Vu83898">
    <a href="/manual/vote-note.php?id=83898&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83898">
    <a href="/manual/vote-note.php?id=83898&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83898" title="57% like this...">
    6
    </div>
  </div>
  <a href="#83898" class="name">
  <strong class="user"><em>nemetral</em></strong></a><a class="genanchor" href="#83898"> &para;</a><div class="date" title="2008-06-17 07:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83898">
<div class="phpcode"><code><span class="html">Just a quick note: if you want to use curl_getinfo() with option CURLINFO_HEADER_OUT in order to debug your cURL request, you must add curl_setopt($handle, CURLINFO_HEADER_OUT, true); first while specifying the options.</span></code></div>
  </div>
 </div>
  <div class="note" id="114653">  <div class="votes">
    <div id="Vu114653">
    <a href="/manual/vote-note.php?id=114653&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114653">
    <a href="/manual/vote-note.php?id=114653&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114653" title="52% like this...">
    2
    </div>
  </div>
  <a href="#114653" class="name">
  <strong class="user"><em>bg at enativ dot com</em></strong></a><a class="genanchor" href="#114653"> &para;</a><div class="date" title="2014-03-18 09:53"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114653">
<div class="phpcode"><code><span class="html">curl_getinfo($ch) will also return 'redirect_url' if there is one (even if CURLOPT_FOLLOWLOCATION set to false).<br />I don't know why it's not in the doc..</span></code></div>
  </div>
 </div>
  <div class="note" id="80457">  <div class="votes">
    <div id="Vu80457">
    <a href="/manual/vote-note.php?id=80457&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80457">
    <a href="/manual/vote-note.php?id=80457&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80457" title="53% like this...">
    2
    </div>
  </div>
  <a href="#80457" class="name">
  <strong class="user"><em>Mark Evers</em></strong></a><a class="genanchor" href="#80457"> &para;</a><div class="date" title="2008-01-16 10:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80457">
<div class="phpcode"><code><span class="html">There is a constant missing from that list.  CURLINFO_REDIRECT_COUNT will give you the number of redirects it went through if CURLOPT_FOLLOWLOCATION was set.</span></code></div>
  </div>
 </div>
  <div class="note" id="129309">  <div class="votes">
    <div id="Vu129309">
    <a href="/manual/vote-note.php?id=129309&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129309">
    <a href="/manual/vote-note.php?id=129309&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129309" title="no votes...">
    0
    </div>
  </div>
  <a href="#129309" class="name">
  <strong class="user"><em>pluk77 at gmail dot com</em></strong></a><a class="genanchor" href="#129309"> &para;</a><div class="date" title="2024-03-04 12:32"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129309">
<div class="phpcode"><code><span class="html">You can still get the SSL verification result using CURLINFO_SSL_VERIFYRESULT when setting CURLOPT_SSL_VERIFYPEER to FALSE.<br /><br />Full list of result codes:<br /><br />0: ok<br />1: unspecified certificate verification error<br />2: unable to get issuer certificate<br />3: unable to get certificate CRL<br />4: unable to decrypt certificate's signature<br />5: unable to decrypt CRL's signature<br />6: unable to decode issuer public key<br />7: certificate signature failure<br />8: CRL signature failure<br />9: certificate is not yet valid<br />10: certificate has expired<br />11: CRL is not yet valid<br />12: CRL has expired<br />13: format error in certificate's notBefore field<br />14: format error in certificate's notAfter field<br />15: format error in CRL's lastUpdate field<br />16: format error in CRL's nextUpdate field<br />17: out of memory<br />18: self-signed certificate<br />19: self-signed certificate in certificate chain<br />20: unable to get local issuer certificate<br />21: unable to verify the first certificate<br />22: certificate chain too long<br />23: certificate revoked<br />24: issuer certificate doesn't have a public key<br />25: path length constraint exceeded<br />26: unsuitable certificate purpose<br />27: certificate not trusted<br />28: certificate rejected<br />29: subject issuer mismatch<br />30: authority and subject key identifier mismatch<br />31: authority and issuer serial number mismatch<br />32: key usage does not include certificate signing<br />33: unable to get CRL issuer certificate<br />34: unhandled critical extension<br />35: key usage does not include CRL signing<br />36: unhandled critical CRL extension<br />37: invalid non-CA certificate (has CA markings)<br />38: proxy path length constraint exceeded<br />39: key usage does not include digital signature<br />40: proxy certificates not allowed, please set the appropriate flag<br />41: invalid or inconsistent certificate extension<br />42: invalid or inconsistent certificate policy extension<br />43: no explicit policy<br />44: different CRL scope<br />45: unsupported extension feature<br />46: RFC 3779 resource not subset of parent's resources<br />47: permitted subtree violation<br />48: excluded subtree violation<br />49: name constraints minimum and maximum not supported<br />50: application verification failure<br />51: unsupported name constraint type<br />52: unsupported or invalid name constraint syntax<br />53: unsupported or invalid name syntax<br />54: CRL path validation error<br />55: path loop<br />56: Suite B: certificate version invalid<br />57: Suite B: invalid public key algorithm<br />58: Suite B: invalid ECC curve<br />59: Suite B: invalid signature algorithm<br />60: Suite B: curve not allowed for this LOS<br />61: Suite B: cannot sign P-384 with P-256<br />62: hostname mismatch<br />63: email address mismatch<br />64: IP address mismatch<br />65: no matching DANE TLSA records<br />66: EE certificate key too weak<br />67: CA certificate key too weak<br />68: CA signature digest algorithm too weak<br />69: invalid certificate verification context<br />70: issuer certificate lookup error<br />71: Certificate Transparency required, but no valid SCTs found<br />72: proxy subject name violation<br />73: OCSP verification needed<br />74: OCSP verification failed<br />75: OCSP unknown cert<br />76: Cannot find certificate signature algorithm<br />77: subject signature algorithm and issuer public key algorithm mismatch<br />78: cert info signature and signature algorithm mismatch<br />79: invalid CA certificate<br />80: Path length invalid for non-CA cert<br />81: Path length given without key usage keyCertSign<br />82: Key usage keyCertSign invalid for non-CA cert<br />83: Issuer name empty<br />84: Subject name empty<br />85: Missing Authority Key Identifier<br />86: Missing Subject Key Identifier<br />87: Empty Subject Alternative Name extension<br />89: Basic Constraints of CA cert not marked critical<br />88: Subject empty and Subject Alt Name extension not critical<br />90: Authority Key Identifier marked critical<br />91: Subject Key Identifier marked critical<br />92: CA cert does not include key usage extension<br />93: Using cert extension requires at least X509v3<br />94: Certificate public key has explicit ECC parameters<br />95: Raw public key untrusted, no trusted keys configured<br /><br />source: <a href="https://github.com/openssl/openssl/blob/master/include/openssl/x509_vfy.h.in" rel="nofollow" target="_blank">https://github.com/openssl/openssl/blob/master/include/openssl/x509_vfy.h.in</a><br /><a href="https://github.com/openssl/openssl/blob/master/crypto/x509/x509_txt.c" rel="nofollow" target="_blank">https://github.com/openssl/openssl/blob/master/crypto/x509/x509_txt.c</a></span></code></div>
  </div>
 </div>
  <div class="note" id="128622">  <div class="votes">
    <div id="Vu128622">
    <a href="/manual/vote-note.php?id=128622&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128622">
    <a href="/manual/vote-note.php?id=128622&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128622" title="no votes...">
    0
    </div>
  </div>
  <a href="#128622" class="name">
  <strong class="user"><em>c dot ball1729 at gmail dot com</em></strong></a><a class="genanchor" href="#128622"> &para;</a><div class="date" title="2023-06-19 12:46"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128622">
<div class="phpcode"><code><span class="html">A note about $curl_info['header_size'] (in response to the example above). <br /><br />Note that the total includes the size of any received headers suppressed by CURLOPT_SUPPRESS_CONNECT_HEADERS (see: <a href="https://curl.se/libcurl/c/CURLINFO_HEADER_SIZE.html" rel="nofollow" target="_blank">https://curl.se/libcurl/c/CURLINFO_HEADER_SIZE.html</a>) so if you are using a proxy which adds additional headers along with this option, $curl_info['header_size'] will give you the wrong string index based on the headers available in PHP. i.e., it will eat in to the start of the response instead of being the index of the beginning of the response.</span></code></div>
  </div>
 </div>
  <div class="note" id="117740">  <div class="votes">
    <div id="Vu117740">
    <a href="/manual/vote-note.php?id=117740&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117740">
    <a href="/manual/vote-note.php?id=117740&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117740" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117740" class="name">
  <strong class="user"><em>torres dot krys at gmail dot com</em></strong></a><a class="genanchor" href="#117740"> &para;</a><div class="date" title="2015-07-31 07:07"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117740">
<div class="phpcode"><code><span class="html">If you use curl option CURLOPT_NOBODY = true to test if distant url is available, any sites can send you an http code 400 like Cdiscount Wsdl : <br /><br />$ch = @curl_init($wsdl);<br /><br />if($ch === false)<br />    return false;<br />        <br />@curl_setopt($ch, CURLOPT_HEADER         ,true);    // we want headers<br />@curl_setopt($ch, CURLOPT_NOBODY         ,true);    // dont need body<br />@curl_setopt($ch, CURLOPT_RETURNTRANSFER ,true);    // catch output (do NOT print!)<br /><br />@curl_exec($ch);<br /><br />if(@curl_errno($ch)){   // should be 0<br />    @curl_close($ch);<br />    return false;<br />}<br /><br />$code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); <br /><br />Modifying CURLOPT_NOBODY to false, http code sent is 200 otherwise http code is 400 !!!</span></code></div>
  </div>
 </div>
  <div class="note" id="98990">  <div class="votes">
    <div id="Vu98990">
    <a href="/manual/vote-note.php?id=98990&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98990">
    <a href="/manual/vote-note.php?id=98990&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98990" title="50% like this...">
    0
    </div>
  </div>
  <a href="#98990" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#98990"> &para;</a><div class="date" title="2010-07-20 02:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98990">
<div class="phpcode"><code><span class="html">The main doc neglects to mention that when the CURLINFO_HEADER_OUT option is set the array returned by this function will included a new property, request_header, that is a string of the headers sent in the request.</span></code></div>
  </div>
 </div>
  <div class="note" id="116987">  <div class="votes">
    <div id="Vu116987">
    <a href="/manual/vote-note.php?id=116987&amp;page=function.curl-getinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116987">
    <a href="/manual/vote-note.php?id=116987&amp;page=function.curl-getinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116987" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#116987" class="name">
  <strong class="user"><em>Curly</em></strong></a><a class="genanchor" href="#116987"> &para;</a><div class="date" title="2015-03-30 09:55"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116987">
<div class="phpcode"><code><span class="html">If you call curl_reset() on a handle that has already been passed to curl_exec(), and then perform a curl_getinfo() on the same handle, you may expect that you get the same result as if you called curl_getinfo() immediately after curl_init(). This is not the case, however. cURL will return the data from the previous execution. If you want to completely reset you actually need to unset the cURL handle and recreate a new one.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.curl-getinfo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-getinfo.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
