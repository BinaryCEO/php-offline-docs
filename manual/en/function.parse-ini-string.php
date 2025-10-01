<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: parse_ini_string - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.parse-ini-string.php">
 <link rel="shorturl" href="https://www.php.net/parse-ini-string">
 <link rel="alternate" href="https://www.php.net/parse-ini-string" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.parse-ini-file.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pathinfo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.parse-ini-string.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.parse-ini-string.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.parse-ini-string.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.parse-ini-string.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.parse-ini-string.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.parse-ini-string.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.parse-ini-string.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.parse-ini-string.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.parse-ini-string.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.parse-ini-string.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.parse-ini-string.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parse a configuration string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: parse_ini_string - Manual" />
<meta name="twitter:description" content="Parse a configuration string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: parse_ini_string - Manual" />
<meta itemprop="description" content="Parse a configuration string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parse a configuration string" />

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
        <a href="function.pathinfo.php">
          pathinfo &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.parse-ini-file.php">
          &laquo; parse_ini_file        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.filesystem.php'>Filesystem</a></li>      <li><a href='ref.filesystem.php'>Filesystem Functions</a></li>      </ul>
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
            <option value='en/function.parse-ini-string.php' selected="selected">English</option>
            <option value='de/function.parse-ini-string.php'>German</option>
            <option value='es/function.parse-ini-string.php'>Spanish</option>
            <option value='fr/function.parse-ini-string.php'>French</option>
            <option value='it/function.parse-ini-string.php'>Italian</option>
            <option value='ja/function.parse-ini-string.php'>Japanese</option>
            <option value='pt_BR/function.parse-ini-string.php'>Brazilian Portuguese</option>
            <option value='ru/function.parse-ini-string.php'>Russian</option>
            <option value='tr/function.parse-ini-string.php'>Turkish</option>
            <option value='uk/function.parse-ini-string.php'>Ukrainian</option>
            <option value='zh/function.parse-ini-string.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.parse-ini-string" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">parse_ini_string</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">parse_ini_string</span> &mdash; <span class="dc-title">Parse a configuration string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.parse-ini-string-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>parse_ini_string</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$ini_string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$process_sections</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$scanner_mode</code><span class="initializer"> = <strong><code><a href="filesystem.constants.php#constant.ini-scanner-normal">INI_SCANNER_NORMAL</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>parse_ini_string()</strong></span> returns the settings in string
   <code class="parameter">ini_string</code> in an associative array.
  </p>
  <p class="para">
   The structure of the ini string is the same as the <var class="filename">php.ini</var>&#039;s.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.parse-ini-string-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ini_string</code></dt>
     <dd>
      <p class="para">
       The contents of the ini file being parsed.
      </p>
     </dd>
    
    
     <dt><code class="parameter">process_sections</code></dt>
     <dd>
      <p class="para">
       By setting the <code class="parameter">process_sections</code>
       parameter to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, you get a multidimensional array, with
       the section names and settings included. The default
       for <code class="parameter">process_sections</code> is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>      
      </p>
     </dd>
    
    
     <dt><code class="parameter">scanner_mode</code></dt>
     <dd>
      <p class="para">
       Can either be <strong><code><a href="filesystem.constants.php#constant.ini-scanner-normal">INI_SCANNER_NORMAL</a></code></strong> (default) or 
       <strong><code><a href="filesystem.constants.php#constant.ini-scanner-raw">INI_SCANNER_RAW</a></code></strong>. If <strong><code><a href="filesystem.constants.php#constant.ini-scanner-raw">INI_SCANNER_RAW</a></code></strong> 
       is supplied, then option values will not be parsed.
      </p>
      <p class="para">
    As of PHP 5.6.1 can also be specified as <strong><code><a href="filesystem.constants.php#constant.ini-scanner-typed">INI_SCANNER_TYPED</a></code></strong>.
    In this mode boolean, null and integer types are preserved when possible.
    String values <code class="literal">&quot;true&quot;</code>, <code class="literal">&quot;on&quot;</code> and <code class="literal">&quot;yes&quot;</code>
    are converted to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>. <code class="literal">&quot;false&quot;</code>, <code class="literal">&quot;off&quot;</code>, <code class="literal">&quot;no&quot;</code>
    and <code class="literal">&quot;none&quot;</code> are considered <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. <code class="literal">&quot;null&quot;</code> is converted to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>
    in typed mode. Also, all numeric strings are converted to integer type if it is possible.
   </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.parse-ini-string-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The settings are returned as an associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> on success,
   and <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.parse-ini-string-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    There are reserved words which must not be used as keys for
    ini files.  These include: <code class="literal">null</code>, <code class="literal">yes</code>, 
    <code class="literal">no</code>, <code class="literal">true</code>, <code class="literal">false</code>,
    <code class="literal">on</code>, <code class="literal">off</code>, <code class="literal">none</code>.
    Values <code class="literal">null</code>, <code class="literal">off</code>, <code class="literal">no</code> and 
    <code class="literal">false</code> result in <code class="literal">&quot;&quot;</code>, and values
    <code class="literal">on</code>, <code class="literal">yes</code> and <code class="literal">true</code> result
    in <code class="literal">&quot;1&quot;</code>, unless <strong><code><a href="filesystem.constants.php#constant.ini-scanner-typed">INI_SCANNER_TYPED</a></code></strong> mode is used.
    Characters <code class="literal">?{}|&amp;~![()^&quot;</code> must not be used anywhere in
    the key and have a special meaning in the value.
   </span>
  </p></blockquote>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.parse-ini-string-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.parse-ini-file.php" class="function" rel="rdfs-seeAlso">parse_ini_file()</a> - Parse a configuration file</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/parse-ini-string.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.parse-ini-string%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.parse-ini-string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.parse-ini-string.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111845">  <div class="votes">
    <div id="Vu111845">
    <a href="/manual/vote-note.php?id=111845&amp;page=function.parse-ini-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111845">
    <a href="/manual/vote-note.php?id=111845&amp;page=function.parse-ini-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111845" title="72% like this...">
    24
    </div>
  </div>
  <a href="#111845" class="name">
  <strong class="user"><em>epicmaxim at gmail dot com</em></strong></a><a class="genanchor" href="#111845"> &para;</a><div class="date" title="2013-04-04 07:51"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111845">
<div class="phpcode"><code><span class="html">parse_ini_string_m is analog for a parse_ini_string function.<br /><br />had to code this function due to the lack of a php 5.3 on some hosting.<br /><br />parse_ini_string_m:<br />- ignores commented lines that start with ";" or "#"<br />- ignores broken lines that do not have "="<br />- supports array values and array value keys<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">parse_ini_string_m</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    <br />    if(empty(</span><span class="default">$str</span><span class="keyword">)) return </span><span class="default">false</span><span class="keyword">;<br /><br />    </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$ret </span><span class="keyword">= Array();<br />    </span><span class="default">$inside_section </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /><br />    foreach(</span><span class="default">$lines </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">) {<br />        <br />        </span><span class="default">$line </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">);<br /><br />        if(!</span><span class="default">$line </span><span class="keyword">|| </span><span class="default">$line</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">"#" </span><span class="keyword">|| </span><span class="default">$line</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">";"</span><span class="keyword">) continue;<br />        <br />        if(</span><span class="default">$line</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">"[" </span><span class="keyword">&amp;</span><span class="default">amp</span><span class="keyword">;&amp;</span><span class="default">amp</span><span class="keyword">; </span><span class="default">$endIdx </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">, </span><span class="string">"]"</span><span class="keyword">)){<br />            </span><span class="default">$inside_section </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$endIdx</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">);<br />            continue;<br />        }<br /><br />        if(!</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">, </span><span class="string">'='</span><span class="keyword">)) continue;<br /><br />        </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"="</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /><br />        if(</span><span class="default">$inside_section</span><span class="keyword">) {<br />            <br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">ltrim</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br />            if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^\".*\"$/"</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) || </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^'.*'$/"</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)) {<br />                </span><span class="default">$value </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) - </span><span class="default">2</span><span class="keyword">);<br />            }<br /><br />            </span><span class="default">$t </span><span class="keyword">= </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"^\[(.*?)\]^"</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />            if(!empty(</span><span class="default">$matches</span><span class="keyword">) &amp;</span><span class="default">amp</span><span class="keyword">;&amp;</span><span class="default">amp</span><span class="keyword">; isset(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])) {<br /><br />                </span><span class="default">$arr_name </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'#\[(.*?)\]#is'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">);<br /><br />                if(!isset(</span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$inside_section</span><span class="keyword">][</span><span class="default">$arr_name</span><span class="keyword">]) || !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$inside_section</span><span class="keyword">][</span><span class="default">$arr_name</span><span class="keyword">])) {<br />                    </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$inside_section</span><span class="keyword">][</span><span class="default">$arr_name</span><span class="keyword">] = array();<br />                }<br /><br />                if(isset(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) &amp;</span><span class="default">amp</span><span class="keyword">;&amp;</span><span class="default">amp</span><span class="keyword">; !empty(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) {<br />                    </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$inside_section</span><span class="keyword">][</span><span class="default">$arr_name</span><span class="keyword">][</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]] = </span><span class="default">$value</span><span class="keyword">;<br />                } else {<br />                    </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$inside_section</span><span class="keyword">][</span><span class="default">$arr_name</span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;<br />                }<br /><br />            } else {<br />                </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$inside_section</span><span class="keyword">][</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])] = </span><span class="default">$value</span><span class="keyword">;<br />            }            <br /><br />        } else {<br />            <br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])] = </span><span class="default">ltrim</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br />        }<br />    }<br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />example usage:<br /><br /><span class="default">&lt;?php<br />$ini </span><span class="keyword">= </span><span class="string">'<br /><br />    [simple]<br />    val_one = "some value"<br />    val_two = 567<br /><br />    [array]<br />    val_arr[] = "arr_elem_one"<br />    val_arr[] = "arr_elem_two"<br />    val_arr[] = "arr_elem_three"<br /><br />    [array_keys]<br />    val_arr_two[6] = "key_6"<br />    val_arr_two[some_key] = "some_key_value"<br /><br />'</span><span class="keyword">;<br /><br /></span><span class="default">$arr </span><span class="keyword">= </span><span class="default">parse_ini_string_m</span><span class="keyword">(</span><span class="default">$ini</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />variable $arr output:<br /><br />Array<br />(<br />    [simple] =&gt; Array<br />    (<br />        [val_one] =&gt; some value<br />        [val_two] =&gt; 567<br />    )<br /><br />    [array] =&gt; Array<br />    (<br />        [val_arr] =&gt; Array<br />        (<br />            [0] =&gt; arr_elem_one<br />            [1] =&gt; arr_elem_two<br />            [2] =&gt; arr_elem_three<br />        )<br />    )<br /><br />    [array_keys] =&gt; Array<br />    (<br />        [val_arr_two] =&gt; Array<br />        (<br />            [6] =&gt; key_6<br />            [some_key] =&gt; some_key_value<br />        )<br /><br />    )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="113582">  <div class="votes">
    <div id="Vu113582">
    <a href="/manual/vote-note.php?id=113582&amp;page=function.parse-ini-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113582">
    <a href="/manual/vote-note.php?id=113582&amp;page=function.parse-ini-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113582" title="58% like this...">
    3
    </div>
  </div>
  <a href="#113582" class="name">
  <strong class="user"><em>Peter Baylies</em></strong></a><a class="genanchor" href="#113582"> &para;</a><div class="date" title="2013-10-31 07:34"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113582">
<div class="phpcode"><code><span class="html">Replacement for php_ini_string() for PHP pre 5.3 - uses php_ini_file() and streams<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if ( !</span><span class="default">function_exists</span><span class="keyword">( </span><span class="string">'parse_ini_string' </span><span class="keyword">) ) {<br />    function </span><span class="default">parse_ini_string</span><span class="keyword">( </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$process_sections </span><span class="keyword">) {<br />        if ( !</span><span class="default">class_exists</span><span class="keyword">( </span><span class="string">'parse_ini_filter' </span><span class="keyword">) ) {<br />            </span><span class="comment">/* Define our filter class */<br />            </span><span class="keyword">class </span><span class="default">parse_ini_filter </span><span class="keyword">extends </span><span class="default">php_user_filter </span><span class="keyword">{<br />                static </span><span class="default">$buf </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />                function </span><span class="default">filter</span><span class="keyword">( </span><span class="default">$in</span><span class="keyword">, </span><span class="default">$out</span><span class="keyword">, &amp;</span><span class="default">$consumed</span><span class="keyword">, </span><span class="default">$closing </span><span class="keyword">) {<br />                    </span><span class="default">$bucket </span><span class="keyword">= </span><span class="default">stream_bucket_new</span><span class="keyword">( </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'php://memory'</span><span class="keyword">, </span><span class="string">'wb'</span><span class="keyword">), </span><span class="default">self</span><span class="keyword">::</span><span class="default">$buf </span><span class="keyword">);<br />                    </span><span class="default">stream_bucket_append</span><span class="keyword">( </span><span class="default">$out</span><span class="keyword">, </span><span class="default">$bucket </span><span class="keyword">);<br />                    return </span><span class="default">PSFS_PASS_ON</span><span class="keyword">;<br />                }<br />            }<br />            </span><span class="comment">/* Register our filter with PHP */<br />            </span><span class="default">stream_filter_register</span><span class="keyword">(</span><span class="string">"parse_ini"</span><span class="keyword">, </span><span class="string">"parse_ini_filter"</span><span class="keyword">)<br />            or return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        </span><span class="default">parse_ini_filter</span><span class="keyword">::</span><span class="default">$buf </span><span class="keyword">= </span><span class="default">$string</span><span class="keyword">;<br />        return </span><span class="default">parse_ini_file</span><span class="keyword">( </span><span class="string">"php://filter/read=parse_ini/resource=php://memory"</span><span class="keyword">, </span><span class="default">$process_sections </span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122888">  <div class="votes">
    <div id="Vu122888">
    <a href="/manual/vote-note.php?id=122888&amp;page=function.parse-ini-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122888">
    <a href="/manual/vote-note.php?id=122888&amp;page=function.parse-ini-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122888" title="100% like this...">
    1
    </div>
  </div>
  <a href="#122888" class="name">
  <strong class="user"><em>msegit post pl</em></strong></a><a class="genanchor" href="#122888"> &para;</a><div class="date" title="2018-06-27 07:43"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122888">
<div class="phpcode"><code><span class="html">With function parse_ini_stringM() below you can:<br />- fix unvalued fields ('key' (invalid) ==&gt; 'key=' (OK) )<br />- fix unquotted values with equal sign '=' ('key=value_part1=value_part2' ==&gt; 'key="value_part1=value_part2"')<br />- fix (solve) multidimensional arrays (makes 'key[key1][key2]=value' valid)<br /><br />function parse_ini_stringM() on github <a href="https://gist.github.com/msegu/c43a871c5a874a1d9bff978b448a0aa4" rel="nofollow" target="_blank">https://gist.github.com/msegu/c43a871c5a874a1d9bff978b448a0aa4</a> (here is too long)<br /><br />// Example:<br /><br />$ini = '[a]<br />b<br />c=d<br />e=';<br /><br />var_export(parse_ini_string($ini, TRUE)); /* array (<br />  'a' =&gt; <br />  array (<br />    'c' =&gt; 'd',<br />    'e' =&gt; '',<br />  ),<br />)<br />*/<br /><br />$ini .= '<br />f[g][2]=h<br />f[g][i]=j<br />f[g][][]=k<br />m=n=o';<br /><br />var_export(parse_ini_string($ini, TRUE)); // false<br /><br />var_export(parse_ini_stringM($ini, TRUE)); /* array (<br />  'a' =&gt; <br />  array (<br />    'b' =&gt; '',<br />    'c' =&gt; 'd',<br />    'e' =&gt; '',<br />    'f' =&gt; <br />    array (<br />      'g' =&gt; <br />      array (<br />        2 =&gt; 'h',<br />        'i' =&gt; 'j',<br />        3 =&gt; <br />        array (<br />          0 =&gt; 'k',<br />        ),<br />      ),<br />    ),<br />    'm' =&gt; 'n=o',<br />  ),<br />)<br />*/</span></code></div>
  </div>
 </div>
  <div class="note" id="129130">  <div class="votes">
    <div id="Vu129130">
    <a href="/manual/vote-note.php?id=129130&amp;page=function.parse-ini-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129130">
    <a href="/manual/vote-note.php?id=129130&amp;page=function.parse-ini-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129130" title="no votes...">
    0
    </div>
  </div>
  <a href="#129130" class="name">
  <strong class="user"><em>Philo</em></strong></a><a class="genanchor" href="#129130"> &para;</a><div class="date" title="2023-12-29 11:39"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129130">
<div class="phpcode"><code><span class="html">Hi,<br />Up to PHP 8.3 (at least), it seems that INI_SCANNER_TYPED is ignored when trying to get values from constants.<br />For example :<br /><span class="default">&lt;?php<br /></span><span class="comment">// <a href="https://3v4l.org/qK5o8" rel="nofollow" target="_blank">https://3v4l.org/qK5o8</a><br /><br /></span><span class="keyword">const </span><span class="default">OK </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />const </span><span class="default">KO </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />const </span><span class="default">NIL </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br /></span><span class="default">$ini </span><span class="keyword">= &lt;&lt;&lt;'INI'<br /></span><span class="string">a = TRUE<br />b = FALSE<br />c = null<br />d = 9223372036854775807<br /></span><span class="keyword">INI;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">parse_ini_string</span><span class="keyword">(</span><span class="default">$ini</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">INI_SCANNER_NORMAL</span><span class="keyword">), </span><span class="default">parse_ini_string</span><span class="keyword">(</span><span class="default">$ini</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">INI_SCANNER_TYPED</span><span class="keyword">));<br /></span><span class="default">$ini </span><span class="keyword">= &lt;&lt;&lt;'INI'<br /></span><span class="string">a = OK<br />b = KO<br />c = NIL<br />d = PHP_INT_MAX<br /></span><span class="keyword">INI;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">parse_ini_string</span><span class="keyword">(</span><span class="default">$ini</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">INI_SCANNER_NORMAL</span><span class="keyword">), </span><span class="default">parse_ini_string</span><span class="keyword">(</span><span class="default">$ini</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">INI_SCANNER_TYPED</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />I thought it was worth mentioning.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.parse-ini-string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.parse-ini-string.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.filesystem.php">Filesystem Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.basename.php" title="basename">basename</a>
                        </li>
                                                <li class="">
                            <a href="function.chgrp.php" title="chgrp">chgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.chmod.php" title="chmod">chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.chown.php" title="chown">chown</a>
                        </li>
                                                <li class="">
                            <a href="function.clearstatcache.php" title="clearstatcache">clearstatcache</a>
                        </li>
                                                <li class="">
                            <a href="function.copy.php" title="copy">copy</a>
                        </li>
                                                <li class="">
                            <a href="function.delete.php" title="delete">delete</a>
                        </li>
                                                <li class="">
                            <a href="function.dirname.php" title="dirname">dirname</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-free-space.php" title="disk_&#8203;free_&#8203;space">disk_&#8203;free_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-total-space.php" title="disk_&#8203;total_&#8203;space">disk_&#8203;total_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.diskfreespace.php" title="diskfreespace">diskfreespace</a>
                        </li>
                                                <li class="">
                            <a href="function.fclose.php" title="fclose">fclose</a>
                        </li>
                                                <li class="">
                            <a href="function.fdatasync.php" title="fdatasync">fdatasync</a>
                        </li>
                                                <li class="">
                            <a href="function.feof.php" title="feof">feof</a>
                        </li>
                                                <li class="">
                            <a href="function.fflush.php" title="fflush">fflush</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetc.php" title="fgetc">fgetc</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetcsv.php" title="fgetcsv">fgetcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fgets.php" title="fgets">fgets</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetss.php" title="fgetss">fgetss</a>
                        </li>
                                                <li class="">
                            <a href="function.file.php" title="file">file</a>
                        </li>
                                                <li class="">
                            <a href="function.file-exists.php" title="file_&#8203;exists">file_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.file-get-contents.php" title="file_&#8203;get_&#8203;contents">file_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.file-put-contents.php" title="file_&#8203;put_&#8203;contents">file_&#8203;put_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.fileatime.php" title="fileatime">fileatime</a>
                        </li>
                                                <li class="">
                            <a href="function.filectime.php" title="filectime">filectime</a>
                        </li>
                                                <li class="">
                            <a href="function.filegroup.php" title="filegroup">filegroup</a>
                        </li>
                                                <li class="">
                            <a href="function.fileinode.php" title="fileinode">fileinode</a>
                        </li>
                                                <li class="">
                            <a href="function.filemtime.php" title="filemtime">filemtime</a>
                        </li>
                                                <li class="">
                            <a href="function.fileowner.php" title="fileowner">fileowner</a>
                        </li>
                                                <li class="">
                            <a href="function.fileperms.php" title="fileperms">fileperms</a>
                        </li>
                                                <li class="">
                            <a href="function.filesize.php" title="filesize">filesize</a>
                        </li>
                                                <li class="">
                            <a href="function.filetype.php" title="filetype">filetype</a>
                        </li>
                                                <li class="">
                            <a href="function.flock.php" title="flock">flock</a>
                        </li>
                                                <li class="">
                            <a href="function.fnmatch.php" title="fnmatch">fnmatch</a>
                        </li>
                                                <li class="">
                            <a href="function.fopen.php" title="fopen">fopen</a>
                        </li>
                                                <li class="">
                            <a href="function.fpassthru.php" title="fpassthru">fpassthru</a>
                        </li>
                                                <li class="">
                            <a href="function.fputcsv.php" title="fputcsv">fputcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fputs.php" title="fputs">fputs</a>
                        </li>
                                                <li class="">
                            <a href="function.fread.php" title="fread">fread</a>
                        </li>
                                                <li class="">
                            <a href="function.fscanf.php" title="fscanf">fscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.fseek.php" title="fseek">fseek</a>
                        </li>
                                                <li class="">
                            <a href="function.fstat.php" title="fstat">fstat</a>
                        </li>
                                                <li class="">
                            <a href="function.fsync.php" title="fsync">fsync</a>
                        </li>
                                                <li class="">
                            <a href="function.ftell.php" title="ftell">ftell</a>
                        </li>
                                                <li class="">
                            <a href="function.ftruncate.php" title="ftruncate">ftruncate</a>
                        </li>
                                                <li class="">
                            <a href="function.fwrite.php" title="fwrite">fwrite</a>
                        </li>
                                                <li class="">
                            <a href="function.glob.php" title="glob">glob</a>
                        </li>
                                                <li class="">
                            <a href="function.is-dir.php" title="is_&#8203;dir">is_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.is-executable.php" title="is_&#8203;executable">is_&#8203;executable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-file.php" title="is_&#8203;file">is_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-link.php" title="is_&#8203;link">is_&#8203;link</a>
                        </li>
                                                <li class="">
                            <a href="function.is-readable.php" title="is_&#8203;readable">is_&#8203;readable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-uploaded-file.php" title="is_&#8203;uploaded_&#8203;file">is_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writable.php" title="is_&#8203;writable">is_&#8203;writable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writeable.php" title="is_&#8203;writeable">is_&#8203;writeable</a>
                        </li>
                                                <li class="">
                            <a href="function.lchgrp.php" title="lchgrp">lchgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.lchown.php" title="lchown">lchown</a>
                        </li>
                                                <li class="">
                            <a href="function.link.php" title="link">link</a>
                        </li>
                                                <li class="">
                            <a href="function.linkinfo.php" title="linkinfo">linkinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.lstat.php" title="lstat">lstat</a>
                        </li>
                                                <li class="">
                            <a href="function.mkdir.php" title="mkdir">mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.move-uploaded-file.php" title="move_&#8203;uploaded_&#8203;file">move_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-file.php" title="parse_&#8203;ini_&#8203;file">parse_&#8203;ini_&#8203;file</a>
                        </li>
                                                <li class="current">
                            <a href="function.parse-ini-string.php" title="parse_&#8203;ini_&#8203;string">parse_&#8203;ini_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.pathinfo.php" title="pathinfo">pathinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.pclose.php" title="pclose">pclose</a>
                        </li>
                                                <li class="">
                            <a href="function.popen.php" title="popen">popen</a>
                        </li>
                                                <li class="">
                            <a href="function.readfile.php" title="readfile">readfile</a>
                        </li>
                                                <li class="">
                            <a href="function.readlink.php" title="readlink">readlink</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath.php" title="realpath">realpath</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-get.php" title="realpath_&#8203;cache_&#8203;get">realpath_&#8203;cache_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-size.php" title="realpath_&#8203;cache_&#8203;size">realpath_&#8203;cache_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.rename.php" title="rename">rename</a>
                        </li>
                                                <li class="">
                            <a href="function.rewind.php" title="rewind">rewind</a>
                        </li>
                                                <li class="">
                            <a href="function.rmdir.php" title="rmdir">rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.set-file-buffer.php" title="set_&#8203;file_&#8203;buffer">set_&#8203;file_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="">
                            <a href="function.symlink.php" title="symlink">symlink</a>
                        </li>
                                                <li class="">
                            <a href="function.tempnam.php" title="tempnam">tempnam</a>
                        </li>
                                                <li class="">
                            <a href="function.tmpfile.php" title="tmpfile">tmpfile</a>
                        </li>
                                                <li class="">
                            <a href="function.touch.php" title="touch">touch</a>
                        </li>
                                                <li class="">
                            <a href="function.umask.php" title="umask">umask</a>
                        </li>
                                                <li class="">
                            <a href="function.unlink.php" title="unlink">unlink</a>
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
