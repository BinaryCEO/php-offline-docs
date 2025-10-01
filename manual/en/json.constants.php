<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/json.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/json.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/json.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.json.php">
 <link rel="prev" href="https://www.php.net/manual/en/json.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/class.jsonexception.php">

 <link rel="alternate" href="https://www.php.net/manual/en/json.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/json.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/json.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/json.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/json.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/json.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/json.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/json.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/json.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/json.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/json.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="class.jsonexception.php">
          JsonException &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="json.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.json.php'>JSON</a></li>      </ul>
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
            <option value='en/json.constants.php' selected="selected">English</option>
            <option value='de/json.constants.php'>German</option>
            <option value='es/json.constants.php'>Spanish</option>
            <option value='fr/json.constants.php'>French</option>
            <option value='it/json.constants.php'>Italian</option>
            <option value='ja/json.constants.php'>Japanese</option>
            <option value='pt_BR/json.constants.php'>Brazilian Portuguese</option>
            <option value='ru/json.constants.php'>Russian</option>
            <option value='tr/json.constants.php'>Turkish</option>
            <option value='uk/json.constants.php'>Ukrainian</option>
            <option value='zh/json.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="json.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <p class="para">
  The following constants indicate the type of error returned by
  <span class="function"><a href="function.json-last-error.php" class="function">json_last_error()</a></span> or stored as the <var class="varname">code</var>
  of a <span class="classname"><a href="class.jsonexception.php" class="classname">JsonException</a></span>.
 </p>
 <dl>
  
   <dt id="constant.json-error-none">
    <strong><code><a href="json.constants.php#constant.json-error-none">JSON_ERROR_NONE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No error has occurred.
    </span>
   </dd>
  
  
   <dt id="constant.json-error-depth">
    <strong><code><a href="json.constants.php#constant.json-error-depth">JSON_ERROR_DEPTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The maximum stack depth has been exceeded.
    </span>
   </dd>
  
  
   <dt id="constant.json-error-state-mismatch">
    <strong><code><a href="json.constants.php#constant.json-error-state-mismatch">JSON_ERROR_STATE_MISMATCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Occurs with underflow or with the modes mismatch.
    </span>
   </dd>
  
  
   <dt id="constant.json-error-ctrl-char">
    <strong><code><a href="json.constants.php#constant.json-error-ctrl-char">JSON_ERROR_CTRL_CHAR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control character error, possibly incorrectly encoded.
    </span>
   </dd>
  
  
   <dt id="constant.json-error-syntax">
    <strong><code><a href="json.constants.php#constant.json-error-syntax">JSON_ERROR_SYNTAX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Syntax error.
    </span>
   </dd>
  
  
   <dt id="constant.json-error-utf8">
    <strong><code><a href="json.constants.php#constant.json-error-utf8">JSON_ERROR_UTF8</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Malformed UTF-8 characters, possibly incorrectly encoded.
    </span>
   </dd>
  
  
   <dt id="constant.json-error-recursion">
    <strong><code><a href="json.constants.php#constant.json-error-recursion">JSON_ERROR_RECURSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The object or array passed to <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span> include
     recursive references and cannot be encoded.
     If the <strong><code><a href="json.constants.php#constant.json-partial-output-on-error">JSON_PARTIAL_OUTPUT_ON_ERROR</a></code></strong> option was
     given, <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> will be encoded in the place of the recursive reference.
    </span>
   </dd>
  
  
   <dt id="constant.json-error-inf-or-nan">
    <strong><code><a href="json.constants.php#constant.json-error-inf-or-nan">JSON_ERROR_INF_OR_NAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The value passed to <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span> includes either
     <a href="language.types.float.php#language.types.float.nan" class="link"><strong><code><a href="math.constants.php#constant.nan">NAN</a></code></strong></a>
     or <a href="function.is-infinite.php" class="link"><strong><code><a href="math.constants.php#constant.inf">INF</a></code></strong></a>.
     If the <strong><code><a href="json.constants.php#constant.json-partial-output-on-error">JSON_PARTIAL_OUTPUT_ON_ERROR</a></code></strong> option was
     given, <code class="literal">0</code> will be encoded in the place of these
     special numbers.
    </span>
   </dd>
  
  
   <dt id="constant.json-error-unsupported-type">
    <strong><code><a href="json.constants.php#constant.json-error-unsupported-type">JSON_ERROR_UNSUPPORTED_TYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A value of an unsupported type was given to
     <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span>, such as a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
     If the <strong><code><a href="json.constants.php#constant.json-partial-output-on-error">JSON_PARTIAL_OUTPUT_ON_ERROR</a></code></strong> option was
     given, <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> will be encoded in the place of the unsupported value.
    </span>
   </dd>
  
  
   <dt id="constant.json-error-invalid-property-name">
    <strong><code><a href="json.constants.php#constant.json-error-invalid-property-name">JSON_ERROR_INVALID_PROPERTY_NAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A key starting with \u0000 character was in the string passed to
     <span class="function"><a href="function.json-decode.php" class="function">json_decode()</a></span> when decoding a JSON object into a PHP
     object.
    </span>
   </dd>
  
  
   <dt id="constant.json-error-utf16">
    <strong><code><a href="json.constants.php#constant.json-error-utf16">JSON_ERROR_UTF16</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Single unpaired UTF-16 surrogate in unicode escape contained in the
     JSON string passed to <span class="function"><a href="function.json-decode.php" class="function">json_decode()</a></span>.
    </span>
   </dd>
  
  
   <dt id="constant.json-error-non-backed-enum">
    <strong><code><a href="json.constants.php#constant.json-error-non-backed-enum">JSON_ERROR_NON_BACKED_ENUM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The value passed to <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span>
     includes a non-backed enum which cannot be serialized.
     Available as of PHP 8.1.0.
    </span>
   </dd>
  
 </dl>

 <p class="para">
  The following constants can be combined to form options for
  <span class="function"><a href="function.json-decode.php" class="function">json_decode()</a></span>.
 </p>
 <dl>
  
   <dt id="constant.json-bigint-as-string">
    <strong><code><a href="json.constants.php#constant.json-bigint-as-string">JSON_BIGINT_AS_STRING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Decodes large integers as their original string value.
    </span>
   </dd>
  
  
   <dt id="constant.json-object-as-array">
    <strong><code><a href="json.constants.php#constant.json-object-as-array">JSON_OBJECT_AS_ARRAY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Decodes JSON objects as PHP array. This option can be added automatically
     by calling <span class="function"><a href="function.json-decode.php" class="function">json_decode()</a></span> with the second parameter
     equal to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
    </span>
   </dd>
  
 </dl>

 <p class="para">
  The following constants can be combined to form options for
  <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span>.
 </p>
 <dl>
  
   <dt id="constant.json-hex-tag">
    <strong><code><a href="json.constants.php#constant.json-hex-tag">JSON_HEX_TAG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     All &lt; and &gt; are converted to \u003C and \u003E.
    </span>
   </dd>
  
  
   <dt id="constant.json-hex-amp">
    <strong><code><a href="json.constants.php#constant.json-hex-amp">JSON_HEX_AMP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     All &amp; are converted to \u0026.
    </span>
   </dd>
  
  
   <dt id="constant.json-hex-apos">
    <strong><code><a href="json.constants.php#constant.json-hex-apos">JSON_HEX_APOS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     All &#039; are converted to \u0027.
    </span>
   </dd>
  
  
   <dt id="constant.json-hex-quot">
    <strong><code><a href="json.constants.php#constant.json-hex-quot">JSON_HEX_QUOT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     All &quot; are converted to \u0022.
    </span>
   </dd>
  
  
   <dt id="constant.json-force-object">
    <strong><code><a href="json.constants.php#constant.json-force-object">JSON_FORCE_OBJECT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Outputs an object rather than an array when a non-associative array is
     used. Especially useful when the recipient of the output is expecting
     an object and the array is empty.
    </span>
   </dd>
  
  
   <dt id="constant.json-numeric-check">
    <strong><code><a href="json.constants.php#constant.json-numeric-check">JSON_NUMERIC_CHECK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Encodes numeric strings as numbers.
    </span>
   </dd>
  
  
   <dt id="constant.json-pretty-print">
    <strong><code><a href="json.constants.php#constant.json-pretty-print">JSON_PRETTY_PRINT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Use whitespace in returned data to format it.
    </span>
   </dd>
  
  
   <dt id="constant.json-unescaped-slashes">
    <strong><code><a href="json.constants.php#constant.json-unescaped-slashes">JSON_UNESCAPED_SLASHES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Don&#039;t escape <code class="literal">/</code>.
    </span>
   </dd>
  
  
   <dt id="constant.json-unescaped-unicode">
    <strong><code><a href="json.constants.php#constant.json-unescaped-unicode">JSON_UNESCAPED_UNICODE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Encode multibyte Unicode characters literally (default is to escape as
     \uXXXX).
    </span>
   </dd>
  
  
   <dt id="constant.json-partial-output-on-error">
    <strong><code><a href="json.constants.php#constant.json-partial-output-on-error">JSON_PARTIAL_OUTPUT_ON_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Substitute some unencodable values instead of failing.
    </span>
   </dd>
  
  
   <dt id="constant.json-preserve-zero-fraction">
    <strong><code><a href="json.constants.php#constant.json-preserve-zero-fraction">JSON_PRESERVE_ZERO_FRACTION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Ensures that <span class="type"><a href="language.types.float.php" class="type float">float</a></span> values are always encoded as a float value.
    </span>
   </dd>
  
  
   <dt id="constant.json-unescaped-line-terminators">
    <strong><code><a href="json.constants.php#constant.json-unescaped-line-terminators">JSON_UNESCAPED_LINE_TERMINATORS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The line terminators are kept unescaped when
     <strong><code><a href="json.constants.php#constant.json-unescaped-unicode">JSON_UNESCAPED_UNICODE</a></code></strong> is supplied. It uses the same
     behaviour as it was before PHP 7.1 without this constant.
     Available as of PHP 7.1.0.
    </span>
   </dd>
  
 </dl>

 <p class="para">
  The following constants can be combined to form options for
  <span class="function"><a href="function.json-decode.php" class="function">json_decode()</a></span> and <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span>.
 </p>
 <dl>
  
   <dt id="constant.json-invalid-utf8-ignore">
    <strong><code><a href="json.constants.php#constant.json-invalid-utf8-ignore">JSON_INVALID_UTF8_IGNORE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Ignore invalid UTF-8 characters.
     Available as of PHP 7.2.0.
    </span>
   </dd>
  
  
   <dt id="constant.json-invalid-utf8-substitute">
    <strong><code><a href="json.constants.php#constant.json-invalid-utf8-substitute">JSON_INVALID_UTF8_SUBSTITUTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Convert invalid UTF-8 characters to \0xfffd
     (Unicode Character &#039;REPLACEMENT CHARACTER&#039;)
     Available as of PHP 7.2.0.
    </span>
   </dd>
  
  
   <dt id="constant.json-throw-on-error">
    <strong><code><a href="json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Throws <span class="classname"><a href="class.jsonexception.php" class="classname">JsonException</a></span> if an error occurs instead
     of setting the global error state that is retrieved with
     <span class="function"><a href="function.json-last-error.php" class="function">json_last_error()</a></span> and <span class="function"><a href="function.json-last-error-msg.php" class="function">json_last_error_msg()</a></span>.
     <strong><code><a href="json.constants.php#constant.json-partial-output-on-error">JSON_PARTIAL_OUTPUT_ON_ERROR</a></code></strong> takes precedence over
     <strong><code><a href="json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></code></strong>.
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
 </dl>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/json/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fjson.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=json.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/json.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119565">  <div class="votes">
    <div id="Vu119565">
    <a href="/manual/vote-note.php?id=119565&amp;page=json.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119565">
    <a href="/manual/vote-note.php?id=119565&amp;page=json.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119565" title="68% like this...">
    82
    </div>
  </div>
  <a href="#119565" class="name">
  <strong class="user"><em>majid4466 at gmail dot com</em></strong></a><a class="genanchor" href="#119565"> &para;</a><div class="date" title="2016-07-07 05:57"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119565">
<div class="phpcode"><code><span class="html">To get a really clean json string use these three constants like so:<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= [</span><span class="string">'€'</span><span class="keyword">, </span><span class="string">'<a href="http://example.com/some/cool/page" rel="nofollow" target="_blank">http://example.com/some/cool/page</a>'</span><span class="keyword">, </span><span class="string">'337'</span><span class="keyword">];<br /></span><span class="default">$bad   </span><span class="keyword">= </span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); <br /></span><span class="default">$good  </span><span class="keyword">= </span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,  </span><span class="default">JSON_UNESCAPED_UNICODE </span><span class="keyword">| </span><span class="default">JSON_UNESCAPED_SLASHES </span><span class="keyword">| </span><span class="default">JSON_NUMERIC_CHECK</span><span class="keyword">);<br /><br /></span><span class="comment">// $bad would be  ["\u20ac","http:\/\/example.com\/some\/cool\/page","337"]<br />// $good would be ["€","<a href="http://example.com/some/cool/page" rel="nofollow" target="_blank">http://example.com/some/cool/page</a>",337]<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115783">  <div class="votes">
    <div id="Vu115783">
    <a href="/manual/vote-note.php?id=115783&amp;page=json.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115783">
    <a href="/manual/vote-note.php?id=115783&amp;page=json.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115783" title="63% like this...">
    68
    </div>
  </div>
  <a href="#115783" class="name">
  <strong class="user"><em>Yzmir Ramirez</em></strong></a><a class="genanchor" href="#115783"> &para;</a><div class="date" title="2014-09-23 12:31"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115783">
<div class="phpcode"><code><span class="html">If you curious of the numeric values of the constants, as of JSON 1.2.1, the constants have the following values (not that you should use the numbers directly):<br /><br />JSON_HEX_TAG =&gt; 1<br />JSON_HEX_AMP =&gt; 2<br />JSON_HEX_APOS =&gt; 4<br />JSON_HEX_QUOT =&gt; 8<br />JSON_FORCE_OBJECT =&gt; 16<br />JSON_NUMERIC_CHECK =&gt; 32<br />JSON_UNESCAPED_SLASHES =&gt; 64<br />JSON_PRETTY_PRINT =&gt; 128<br />JSON_UNESCAPED_UNICODE =&gt; 256<br /><br />JSON_ERROR_DEPTH =&gt; 1<br />JSON_ERROR_STATE_MISMATCH =&gt; 2<br />JSON_ERROR_CTRL_CHAR =&gt; 3<br /><br />JSON_ERROR_SYNTAX =&gt; 4<br /><br />JSON_ERROR_UTF8 =&gt; 5<br />JSON_OBJECT_AS_ARRAY =&gt; 1<br /><br />JSON_BIGINT_AS_STRING =&gt; 2</span></code></div>
  </div>
 </div>
  <div class="note" id="127427">  <div class="votes">
    <div id="Vu127427">
    <a href="/manual/vote-note.php?id=127427&amp;page=json.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127427">
    <a href="/manual/vote-note.php?id=127427&amp;page=json.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127427" title="75% like this...">
    34
    </div>
  </div>
  <a href="#127427" class="name">
  <strong class="user"><em>nikospapoutsis</em></strong></a><a class="genanchor" href="#127427"> &para;</a><div class="date" title="2022-08-06 10:47"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127427">
<div class="phpcode"><code><span class="html">Be EXTREMELY cautious when using the code majid4466 at gmail dot com provided, or JSON_NUMERIC_CHECK in general.<br /><br />For example, in php 7.4 and 8.1 with precision: 14 and serialize_precision: -1 we get:<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= [</span><span class="string">'€'</span><span class="keyword">, </span><span class="default">55.6666666666666666</span><span class="keyword">, </span><span class="string">'<a href="http://example.com/some/cool/page" rel="nofollow" target="_blank">http://example.com/some/cool/page</a>'</span><span class="keyword">, </span><span class="string">'000337'</span><span class="keyword">, </span><span class="string">'55.6666666666666666'</span><span class="keyword">];<br />echo </span><span class="default">$case1 </span><span class="keyword">= </span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />echo </span><span class="default">$case2 </span><span class="keyword">= </span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,  </span><span class="default">JSON_UNESCAPED_UNICODE </span><span class="keyword">| </span><span class="default">JSON_UNESCAPED_SLASHES </span><span class="keyword">);<br />echo </span><span class="default">$case3 </span><span class="keyword">= </span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,  </span><span class="default">JSON_UNESCAPED_UNICODE </span><span class="keyword">| </span><span class="default">JSON_UNESCAPED_SLASHES </span><span class="keyword">| </span><span class="default">JSON_NUMERIC_CHECK</span><span class="keyword">);<br /><br />[</span><span class="string">"\u20ac"</span><span class="keyword">,</span><span class="default">55.666666666666664</span><span class="keyword">,</span><span class="string">"http:\/\/example.com\/some\/cool\/page"</span><span class="keyword">,</span><span class="string">"000337"</span><span class="keyword">,</span><span class="string">"55.6666666666666666"</span><span class="keyword">]<br /></span><span class="comment">// in $case1, both euro sign and the url change but we also lost a digit in our unquoted float (due to precision)<br /><br /></span><span class="keyword">[</span><span class="string">"€"</span><span class="keyword">,</span><span class="default">55.666666666666664</span><span class="keyword">,</span><span class="string">"<a href="http://example.com/some/cool/page" rel="nofollow" target="_blank">http://example.com/some/cool/page</a>"</span><span class="keyword">,</span><span class="string">"000337"</span><span class="keyword">,</span><span class="string">"55.6666666666666666"</span><span class="keyword">]<br /></span><span class="comment">// in $case2, both euro sign and the url stay exactly the same but we still lost a digit in our unquoted float (due to precision)<br /><br /></span><span class="keyword">[</span><span class="string">"€"</span><span class="keyword">,</span><span class="default">55.666666666666664</span><span class="keyword">,</span><span class="string">"<a href="http://example.com/some/cool/page" rel="nofollow" target="_blank">http://example.com/some/cool/page</a>"</span><span class="keyword">,</span><span class="default">337</span><span class="keyword">,</span><span class="default">55.666666666666664</span><span class="keyword">]<br /></span><span class="comment">// in $case3, we once again keep euro sign and the url intact but this time not only our unquoted float lost a digit<br />// but the same happened to our quoted float and the number/string lost its leading zeros too<br /><br /></span><span class="default">Also</span><span class="keyword">, </span><span class="default">note that in php 5.x you will probably get some different but equally wrong results </span><span class="keyword">as default </span><span class="default">values may be different </span><span class="keyword">and </span><span class="default">some functions have changed internally </span><span class="keyword">as </span><span class="default">well</span><span class="keyword">.</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122750">  <div class="votes">
    <div id="Vu122750">
    <a href="/manual/vote-note.php?id=122750&amp;page=json.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122750">
    <a href="/manual/vote-note.php?id=122750&amp;page=json.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122750" title="64% like this...">
    14
    </div>
  </div>
  <a href="#122750" class="name">
  <strong class="user"><em>ASchmidt at Anamera dot net</em></strong></a><a class="genanchor" href="#122750"> &para;</a><div class="date" title="2018-05-20 03:53"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122750">
<div class="phpcode"><code><span class="html">In a multi-level array, JSON_FORCE_OBJECT will encode ALL nested numeric arrays as objects. <br /><br />If your concern was ONLY the first-level array (e.g., to make it suitable as a MySQL JSON column), you could just cast your first-level array to object, e.g.:<br /><br /><span class="default">&lt;?php<br />$json </span><span class="keyword">= </span><span class="default">json_encode</span><span class="keyword">( (object) </span><span class="default">$array</span><span class="keyword">, </span><span class="default">JSON_PRESERVE_ZERO_FRACTION</span><span class="keyword">+</span><span class="default">JSON_UNESCAPED_UNICODE </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Or, if you have large arrays and are concerned about the overhead of object casting, you could append a "null" value beyond the size of the array, which will force the array to become associative:<br /><br /><span class="default">&lt;?php<br />$beyond </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">;<br />if ( !</span><span class="default">array_key_exists</span><span class="keyword">( </span><span class="default">$beyond</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">) )<br />     </span><span class="default">$array</span><span class="keyword">[ </span><span class="default">$beyond </span><span class="keyword">] = </span><span class="default">NULL</span><span class="keyword">;<br /></span><span class="default">$json </span><span class="keyword">= </span><span class="default">json_encode</span><span class="keyword">( </span><span class="default">$array</span><span class="keyword">, </span><span class="default">JSON_PRESERVE_ZERO_FRACTION</span><span class="keyword">+</span><span class="default">JSON_UNESCAPED_UNICODE </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Of course, your later code has to treat an element with a "NULL" value the same as "!isset()", if it iterates the array.</span></code></div>
  </div>
 </div>
  <div class="note" id="129783">  <div class="votes">
    <div id="Vu129783">
    <a href="/manual/vote-note.php?id=129783&amp;page=json.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129783">
    <a href="/manual/vote-note.php?id=129783&amp;page=json.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129783" title="66% like this...">
    1
    </div>
  </div>
  <a href="#129783" class="name">
  <strong class="user"><em>eduard dot amoros dot wahl at gmail dot com</em></strong></a><a class="genanchor" href="#129783"> &para;</a><div class="date" title="2024-09-28 06:01"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129783">
<div class="phpcode"><code><span class="html">Warning about JSON_NUMERIC_CHECK and scientific notation.<br /><br />JSON_NUMERIC_CHECK will remove scientific notation. Thus,<br />json_encode(['scientificNumber' =&gt; '1e-4'], JSON_NUMERIC_CHECK);<br />will return {"scientificNumber":0.0001}<br /><br />You have to account for this, as it may defeat the whole purpose of scientific notation.</span></code></div>
  </div>
 </div>
  <div class="note" id="123167">  <div class="votes">
    <div id="Vu123167">
    <a href="/manual/vote-note.php?id=123167&amp;page=json.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123167">
    <a href="/manual/vote-note.php?id=123167&amp;page=json.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123167" title="48% like this...">
    -2
    </div>
  </div>
  <a href="#123167" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#123167"> &para;</a><div class="date" title="2018-09-28 08:52"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123167">
<div class="phpcode"><code><span class="html">flags JSON_NUMERIC_CHECK and JSON_PRESERVE_ZERO_FRACTION are broken in php 7+ — json_encode((float)8.8) returns "8.8000000000000007", and json_encode((float)8.8, JSON_NUMERIC_CHECK) and json_encode((float)8.8, JSON_PRESERVE_ZERO_FRACTION) return "8.8000000000000007" too.<br /><br />the only way to fix this is setting "serialize_precision = -1" in php.ini</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=json.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/json.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.json.php">JSON</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.json.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="json.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="json.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="class.jsonexception.php" title="JsonException">JsonException</a>
                        </li>
                                                <li class="">
                            <a href="class.jsonserializable.php" title="JsonSerializable">JsonSerializable</a>
                        </li>
                                                <li class="">
                            <a href="ref.json.php" title="JSON Functions">JSON Functions</a>
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
