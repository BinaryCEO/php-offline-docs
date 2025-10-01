<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: json_last_error - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.json-last-error.php">
 <link rel="shorturl" href="https://www.php.net/json-last-error">
 <link rel="alternate" href="https://www.php.net/json-last-error" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.json.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.json-encode.php">
 <link rel="next" href="https://www.php.net/manual/en/function.json-last-error-msg.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.json-last-error.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.json-last-error.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.json-last-error.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.json-last-error.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.json-last-error.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.json-last-error.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.json-last-error.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.json-last-error.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.json-last-error.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.json-last-error.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.json-last-error.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the last error occurred" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: json_last_error - Manual" />
<meta name="twitter:description" content="Returns the last error occurred" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: json_last_error - Manual" />
<meta itemprop="description" content="Returns the last error occurred" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the last error occurred" />

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
        <a href="function.json-last-error-msg.php">
          json_last_error_msg &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.json-encode.php">
          &laquo; json_encode        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.json.php'>JSON</a></li>      <li><a href='ref.json.php'>JSON Functions</a></li>      </ul>
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
            <option value='en/function.json-last-error.php' selected="selected">English</option>
            <option value='de/function.json-last-error.php'>German</option>
            <option value='es/function.json-last-error.php'>Spanish</option>
            <option value='fr/function.json-last-error.php'>French</option>
            <option value='it/function.json-last-error.php'>Italian</option>
            <option value='ja/function.json-last-error.php'>Japanese</option>
            <option value='pt_BR/function.json-last-error.php'>Brazilian Portuguese</option>
            <option value='ru/function.json-last-error.php'>Russian</option>
            <option value='tr/function.json-last-error.php'>Turkish</option>
            <option value='uk/function.json-last-error.php'>Ukrainian</option>
            <option value='zh/function.json-last-error.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.json-last-error" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">json_last_error</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">json_last_error</span> &mdash; <span class="dc-title">Returns the last error occurred</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.json-last-error-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>json_last_error</strong></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Returns the last error (if any) occurred during the last JSON validation/encoding/decoding,
   which did not specify <strong><code><a href="json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.json-last-error-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.json-last-error-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an integer, the value can be one of the following 
   constants: 
  </p>
  <table class="doctable table">
   <caption><strong>JSON error codes</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Meaning</th>
      <th>Availability</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><strong><code><a href="json.constants.php#constant.json-error-none">JSON_ERROR_NONE</a></code></strong></td>
      <td>No error has occurred</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><strong><code><a href="json.constants.php#constant.json-error-depth">JSON_ERROR_DEPTH</a></code></strong></td>
      <td>The maximum stack depth has been exceeded</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><strong><code><a href="json.constants.php#constant.json-error-state-mismatch">JSON_ERROR_STATE_MISMATCH</a></code></strong></td>
      <td>Invalid or malformed JSON</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><strong><code><a href="json.constants.php#constant.json-error-ctrl-char">JSON_ERROR_CTRL_CHAR</a></code></strong></td>
      <td>Control character error, possibly incorrectly encoded</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><strong><code><a href="json.constants.php#constant.json-error-syntax">JSON_ERROR_SYNTAX</a></code></strong></td>
      <td>Syntax error</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><strong><code><a href="json.constants.php#constant.json-error-utf8">JSON_ERROR_UTF8</a></code></strong></td>
      <td>Malformed UTF-8 characters, possibly incorrectly encoded</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><strong><code><a href="json.constants.php#constant.json-error-recursion">JSON_ERROR_RECURSION</a></code></strong></td>
      <td>One or more recursive references in the value to be encoded</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><strong><code><a href="json.constants.php#constant.json-error-inf-or-nan">JSON_ERROR_INF_OR_NAN</a></code></strong></td>
      <td>
       One or more
       <a href="language.types.float.php#language.types.float.nan" class="link"><strong><code><a href="math.constants.php#constant.nan">NAN</a></code></strong></a>
       or <a href="function.is-infinite.php" class="link"><strong><code><a href="math.constants.php#constant.inf">INF</a></code></strong></a>
       values in the value to be encoded
      </td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><strong><code><a href="json.constants.php#constant.json-error-unsupported-type">JSON_ERROR_UNSUPPORTED_TYPE</a></code></strong></td>
      <td>A value of a type that cannot be encoded was given</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><strong><code><a href="json.constants.php#constant.json-error-invalid-property-name">JSON_ERROR_INVALID_PROPERTY_NAME</a></code></strong></td>
      <td>A property name that cannot be encoded was given</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><strong><code><a href="json.constants.php#constant.json-error-utf16">JSON_ERROR_UTF16</a></code></strong></td>
      <td>Malformed UTF-16 characters, possibly incorrectly encoded</td>
      <td class="empty">&nbsp;</td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.json-last-error-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3713">
    <p><strong>Example #1 <span class="function"><strong>json_last_error()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// A valid json string<br /></span><span style="color: #0000BB">$json</span><span style="color: #007700">[] = </span><span style="color: #DD0000">'{"Organization": "PHP Documentation Team"}'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// An invalid json string which will cause an syntax <br />// error, in this case we used ' instead of " for quotation<br /></span><span style="color: #0000BB">$json</span><span style="color: #007700">[] = </span><span style="color: #DD0000">"{'Organization': 'PHP Documentation Team'}"</span><span style="color: #007700">;<br /><br /><br />foreach (</span><span style="color: #0000BB">$json </span><span style="color: #007700">as </span><span style="color: #0000BB">$string</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Decoding: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$string</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">);<br /><br />    switch (</span><span style="color: #0000BB">json_last_error</span><span style="color: #007700">()) {<br />        case </span><span style="color: #0000BB">JSON_ERROR_NONE</span><span style="color: #007700">:<br />            echo </span><span style="color: #DD0000">' - No errors'</span><span style="color: #007700">;<br />        break;<br />        case </span><span style="color: #0000BB">JSON_ERROR_DEPTH</span><span style="color: #007700">:<br />            echo </span><span style="color: #DD0000">' - Maximum stack depth exceeded'</span><span style="color: #007700">;<br />        break;<br />        case </span><span style="color: #0000BB">JSON_ERROR_STATE_MISMATCH</span><span style="color: #007700">:<br />            echo </span><span style="color: #DD0000">' - Underflow or the modes mismatch'</span><span style="color: #007700">;<br />        break;<br />        case </span><span style="color: #0000BB">JSON_ERROR_CTRL_CHAR</span><span style="color: #007700">:<br />            echo </span><span style="color: #DD0000">' - Unexpected control character found'</span><span style="color: #007700">;<br />        break;<br />        case </span><span style="color: #0000BB">JSON_ERROR_SYNTAX</span><span style="color: #007700">:<br />            echo </span><span style="color: #DD0000">' - Syntax error, malformed JSON'</span><span style="color: #007700">;<br />        break;<br />        case </span><span style="color: #0000BB">JSON_ERROR_UTF8</span><span style="color: #007700">:<br />            echo </span><span style="color: #DD0000">' - Malformed UTF-8 characters, possibly incorrectly encoded'</span><span style="color: #007700">;<br />        break;<br />        default:<br />            echo </span><span style="color: #DD0000">' - Unknown error'</span><span style="color: #007700">;<br />        break;<br />    }<br /><br />    echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Decoding: {&quot;Organization&quot;: &quot;PHP Documentation Team&quot;} - No errors
Decoding: {&#039;Organization&#039;: &#039;PHP Documentation Team&#039;} - Syntax error, malformed JSON</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-3714">
    <p><strong>Example #2 <span class="function"><strong>json_last_error()</strong></span> with <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// An invalid UTF8 sequence<br /></span><span style="color: #0000BB">$text </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xB1\x31"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$json  </span><span style="color: #007700">= </span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$error </span><span style="color: #007700">= </span><span style="color: #0000BB">json_last_error</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$json</span><span style="color: #007700">, </span><span style="color: #0000BB">$error </span><span style="color: #007700">=== </span><span style="color: #0000BB">JSON_ERROR_UTF8</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">string(4) &quot;null&quot;
bool(true)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-3715">
    <p><strong>Example #3 <span class="function"><strong>json_last_error()</strong></span> and <strong><code><a href="json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></code></strong></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// An invalid UTF8 sequence which causes JSON_ERROR_UTF8<br /></span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\xB1\x31"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The following does not cause a JSON error<br /></span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #DD0000">'okay'</span><span style="color: #007700">, </span><span style="color: #0000BB">JSON_THROW_ON_ERROR</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The global error state has not been changed by the former json_encode()<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">json_last_error</span><span style="color: #007700">() === </span><span style="color: #0000BB">JSON_ERROR_UTF8</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">bool(true)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.json-last-error-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.json-last-error-msg.php" class="function" rel="rdfs-seeAlso">json_last_error_msg()</a> - Returns the error string of the last json_validate(), json_encode() or json_decode() call</span></li>
    <li><span class="function"><a href="function.json-decode.php" class="function" rel="rdfs-seeAlso">json_decode()</a> - Decodes a JSON string</span></li>
    <li><span class="function"><a href="function.json-encode.php" class="function" rel="rdfs-seeAlso">json_encode()</a> - Returns the JSON representation of a value</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/json/functions/json-last-error.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.json-last-error%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.json-last-error&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.json-last-error.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106644">  <div class="votes">
    <div id="Vu106644">
    <a href="/manual/vote-note.php?id=106644&amp;page=function.json-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106644">
    <a href="/manual/vote-note.php?id=106644&amp;page=function.json-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106644" title="90% like this...">
    321
    </div>
  </div>
  <a href="#106644" class="name">
  <strong class="user"><em>jimmetry at gmail dot com</em></strong></a><a class="genanchor" href="#106644"> &para;</a><div class="date" title="2011-11-23 09:16"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106644">
<div class="phpcode"><code><span class="html">While this can obviously change between versions, the current error codes are as follows:<br /><br />0 = JSON_ERROR_NONE<br />1 = JSON_ERROR_DEPTH<br />2 = JSON_ERROR_STATE_MISMATCH<br />3 = JSON_ERROR_CTRL_CHAR<br />4 = JSON_ERROR_SYNTAX<br />5 = JSON_ERROR_UTF8<br /><br />I'm only posting these for people who may be trying to understand why specific JSON files are not being decoded. Please do not hard-code these numbers into an error handler routine.</span></code></div>
  </div>
 </div>
  <div class="note" id="115980">  <div class="votes">
    <div id="Vu115980">
    <a href="/manual/vote-note.php?id=115980&amp;page=function.json-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115980">
    <a href="/manual/vote-note.php?id=115980&amp;page=function.json-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115980" title="80% like this...">
    45
    </div>
  </div>
  <a href="#115980" class="name">
  <strong class="user"><em>praveenscience at gmail dot com</em></strong></a><a class="genanchor" href="#115980"> &para;</a><div class="date" title="2014-10-21 03:17"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115980">
<div class="phpcode"><code><span class="html">I used this simple script, flicked from StackOverflow to escape from the function failing:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">utf8ize</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">) {<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">)) {<br />            foreach (</span><span class="default">$d </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />                </span><span class="default">$d</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">utf8ize</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);<br />            }<br />        } else if (</span><span class="default">is_string </span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">)) {<br />            return </span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">);<br />        }<br />        return </span><span class="default">$d</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Cheers,<br />Praveen Kumar!</span></code></div>
  </div>
 </div>
  <div class="note" id="118165">  <div class="votes">
    <div id="Vu118165">
    <a href="/manual/vote-note.php?id=118165&amp;page=function.json-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118165">
    <a href="/manual/vote-note.php?id=118165&amp;page=function.json-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118165" title="71% like this...">
    30
    </div>
  </div>
  <a href="#118165" class="name">
  <strong class="user"><em>hemono at gmail dot com</em></strong></a><a class="genanchor" href="#118165"> &para;</a><div class="date" title="2015-10-18 03:02"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118165">
<div class="phpcode"><code><span class="html">when json_decode a empty string, PHP7 will trigger an Syntax error:<br /><span class="default">&lt;?php<br />json_decode</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">json_last_error</span><span class="keyword">(), </span><span class="default">json_last_error_msg</span><span class="keyword">());<br /><br /></span><span class="comment">// PHP 7<br /></span><span class="default">int</span><span class="keyword">(</span><span class="default">4</span><span class="keyword">)<br /></span><span class="default">string</span><span class="keyword">(</span><span class="default">12</span><span class="keyword">) </span><span class="string">"Syntax error"<br /><br /></span><span class="comment">//  PHP 5<br /></span><span class="default">int</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)<br /></span><span class="default">string</span><span class="keyword">(</span><span class="default">8</span><span class="keyword">) </span><span class="string">"No error"</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121233">  <div class="votes">
    <div id="Vu121233">
    <a href="/manual/vote-note.php?id=121233&amp;page=function.json-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121233">
    <a href="/manual/vote-note.php?id=121233&amp;page=function.json-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121233" title="72% like this...">
    13
    </div>
  </div>
  <a href="#121233" class="name">
  <strong class="user"><em>msxcms at bmforum dot com</em></strong></a><a class="genanchor" href="#121233"> &para;</a><div class="date" title="2017-06-16 09:12"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121233">
<div class="phpcode"><code><span class="html">use this code with mb_convert_encoding, you can json_encode some corrupt UTF-8 chars<br /><br />    function safe_json_encode($value, $options = 0, $depth = 512) {<br />        $encoded = json_encode($value, $options, $depth);<br />        if ($encoded === false &amp;&amp; $value &amp;&amp; json_last_error() == JSON_ERROR_UTF8) {<br />            $encoded = json_encode(utf8ize($value), $options, $depth);<br />        }<br />        return $encoded;<br />    }<br /><br />    function utf8ize($mixed) {<br />        if (is_array($mixed)) {<br />            foreach ($mixed as $key =&gt; $value) {<br />                $mixed[$key] = utf8ize($value);<br />            }<br />        } elseif (is_string($mixed)) {<br />            return mb_convert_encoding($mixed, "UTF-8", "UTF-8");<br />        }<br />        return $mixed;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="119958">  <div class="votes">
    <div id="Vu119958">
    <a href="/manual/vote-note.php?id=119958&amp;page=function.json-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119958">
    <a href="/manual/vote-note.php?id=119958&amp;page=function.json-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119958" title="63% like this...">
    8
    </div>
  </div>
  <a href="#119958" class="name">
  <strong class="user"><em>George Dimitriadis</em></strong></a><a class="genanchor" href="#119958"> &para;</a><div class="date" title="2016-09-28 08:27"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119958">
<div class="phpcode"><code><span class="html">Just adding this note since I had to code this for the actual values reference.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="default">JSON_ERROR_NONE </span><span class="keyword">. </span><span class="string">' JSON_ERROR_NONE' </span><span class="keyword">. </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="default">JSON_ERROR_DEPTH </span><span class="keyword">. </span><span class="string">' JSON_ERROR_DEPTH' </span><span class="keyword">. </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="default">JSON_ERROR_STATE_MISMATCH </span><span class="keyword">. </span><span class="string">' JSON_ERROR_STATE_MISMATCH' </span><span class="keyword">. </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="default">JSON_ERROR_CTRL_CHAR </span><span class="keyword">. </span><span class="string">' JSON_ERROR_CTRL_CHAR' </span><span class="keyword">. </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="default">JSON_ERROR_SYNTAX </span><span class="keyword">. </span><span class="string">' JSON_ERROR_SYNTAX' </span><span class="keyword">. </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="default">JSON_ERROR_UTF8 </span><span class="keyword">. </span><span class="string">' JSON_ERROR_UTF8' </span><span class="keyword">. </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="default">JSON_ERROR_RECURSION </span><span class="keyword">. </span><span class="string">' JSON_ERROR_RECURSION' </span><span class="keyword">. </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="default">JSON_ERROR_INF_OR_NAN </span><span class="keyword">. </span><span class="string">' JSON_ERROR_INF_OR_NAN' </span><span class="keyword">. </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="default">JSON_ERROR_UNSUPPORTED_TYPE </span><span class="keyword">. </span><span class="string">' JSON_ERROR_UNSUPPORTED_TYPE' </span><span class="keyword">. </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">/*<br />The above outputs :<br />0 JSON_ERROR_NONE<br />1 JSON_ERROR_DEPTH<br />2 JSON_ERROR_STATE_MISMATCH<br />3 JSON_ERROR_CTRL_CHAR<br />4 JSON_ERROR_SYNTAX<br />5 JSON_ERROR_UTF8<br />6 JSON_ERROR_RECURSION<br />7 JSON_ERROR_INF_OR_NAN<br />8 JSON_ERROR_UNSUPPORTED_TYPE<br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114264">  <div class="votes">
    <div id="Vu114264">
    <a href="/manual/vote-note.php?id=114264&amp;page=function.json-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114264">
    <a href="/manual/vote-note.php?id=114264&amp;page=function.json-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114264" title="61% like this...">
    11
    </div>
  </div>
  <a href="#114264" class="name">
  <strong class="user"><em>williamprogphp at yahoo dot com dot br</em></strong></a><a class="genanchor" href="#114264"> &para;</a><div class="date" title="2014-01-30 06:32"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114264">
<div class="phpcode"><code><span class="html">This is a quite simple and functional trick to validate JSON's strings.<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">json_validate</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />        if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)) {<br />            @</span><span class="default">json_decode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />            return (</span><span class="default">json_last_error</span><span class="keyword">() === </span><span class="default">JSON_ERROR_NONE</span><span class="keyword">);<br />        }<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    echo (</span><span class="default">json_validate</span><span class="keyword">(</span><span class="string">'{"test": "valid JSON"}'</span><span class="keyword">)  ? </span><span class="string">"It's a JSON" </span><span class="keyword">: </span><span class="string">"NOT is a JSON"</span><span class="keyword">); </span><span class="comment">// prints 'It's a JSON'<br />    </span><span class="keyword">echo (</span><span class="default">json_validate</span><span class="keyword">(</span><span class="string">'{test: valid JSON}'</span><span class="keyword">)  ? </span><span class="string">"It's a JSON" </span><span class="keyword">: </span><span class="string">"NOT is a JSON"</span><span class="keyword">); </span><span class="comment">// prints 'NOT is a JSON' due to missing quotes<br />    </span><span class="keyword">echo (</span><span class="default">json_validate</span><span class="keyword">(array())  ? </span><span class="string">"It's a JSON" </span><span class="keyword">: </span><span class="string">"NOT is a JSON"</span><span class="keyword">); </span><span class="comment">// prints 'NOT is a JSON' due to a non-string argument<br /></span><span class="default">?&gt;<br /></span><br />Cheers</span></code></div>
  </div>
 </div>
  <div class="note" id="129811">  <div class="votes">
    <div id="Vu129811">
    <a href="/manual/vote-note.php?id=129811&amp;page=function.json-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129811">
    <a href="/manual/vote-note.php?id=129811&amp;page=function.json-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129811" title="no votes...">
    0
    </div>
  </div>
  <a href="#129811" class="name">
  <strong class="user"><em>greaties at ghvernuft dot nl</em></strong></a><a class="genanchor" href="#129811"> &para;</a><div class="date" title="2024-10-19 11:01"><strong>11 months ago</strong></div>
  <div class="text" id="Hcom129811">
<div class="phpcode"><code><span class="html">Protected and private properties are ignored,<br />when json_encoding a class instance.<br />The snippet<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Example<br /></span><span class="keyword">{<br />    private   </span><span class="default">$privateprop   </span><span class="keyword">= </span><span class="string">"private property"</span><span class="keyword">;<br />    protected </span><span class="default">$protectedprop </span><span class="keyword">= </span><span class="string">"protected property"</span><span class="keyword">;<br />    public    </span><span class="default">$publicprop    </span><span class="keyword">= </span><span class="string">"public property"</span><span class="keyword">;<br />}<br />echo </span><span class="default">json_encode</span><span class="keyword">(new </span><span class="default">Example</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />only returns <br />{"publicprop":"public property"}</span></code></div>
  </div>
 </div>
  <div class="note" id="122551">  <div class="votes">
    <div id="Vu122551">
    <a href="/manual/vote-note.php?id=122551&amp;page=function.json-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122551">
    <a href="/manual/vote-note.php?id=122551&amp;page=function.json-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122551" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#122551" class="name">
  <strong class="user"><em>wedge at atlanteans dot net</em></strong></a><a class="genanchor" href="#122551"> &para;</a><div class="date" title="2018-03-27 02:15"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122551">
<div class="phpcode"><code><span class="html">here is a small updated version of utf8ize that has the following addition : <br />* It uses iconv instead of utf8_encode for potentially better result.<br />* It adds the support of objects variable <br />* It also update array key value (in a case I met I had to utf8ize the key as well as those were generated from a user input value)<br /><br />Here is the code.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">utf8ize</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">) {<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">)) {<br />            foreach (</span><span class="default">$d </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />                unset(</span><span class="default">$d</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);<br />        </span><span class="default">$d</span><span class="keyword">[</span><span class="default">utf8ize</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)] = </span><span class="default">utf8ize</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);<br />            }<br />        } else if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">)) {<br />        </span><span class="default">$objVars </span><span class="keyword">= </span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">);<br />        foreach(</span><span class="default">$objVars </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">$key </span><span class="keyword">= </span><span class="default">utf8ize</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />        }        <br />    } else if (</span><span class="default">is_string </span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">)) {<br />            return </span><span class="default">iconv</span><span class="keyword">(</span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="string">'UTF-8//IGNORE'</span><span class="keyword">, </span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">));<br />        } <br />        return </span><span class="default">$d</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.json-last-error&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.json-last-error.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.json.php">JSON Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.json-decode.php" title="json_&#8203;decode">json_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.json-encode.php" title="json_&#8203;encode">json_&#8203;encode</a>
                        </li>
                                                <li class="current">
                            <a href="function.json-last-error.php" title="json_&#8203;last_&#8203;error">json_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.json-last-error-msg.php" title="json_&#8203;last_&#8203;error_&#8203;msg">json_&#8203;last_&#8203;error_&#8203;msg</a>
                        </li>
                                                <li class="">
                            <a href="function.json-validate.php" title="json_&#8203;validate">json_&#8203;validate</a>
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
