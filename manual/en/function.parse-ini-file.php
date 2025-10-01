<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: parse_ini_file - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.parse-ini-file.php">
 <link rel="shorturl" href="https://www.php.net/parse-ini-file">
 <link rel="alternate" href="https://www.php.net/parse-ini-file" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.move-uploaded-file.php">
 <link rel="next" href="https://www.php.net/manual/en/function.parse-ini-string.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.parse-ini-file.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.parse-ini-file.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.parse-ini-file.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.parse-ini-file.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.parse-ini-file.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.parse-ini-file.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.parse-ini-file.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.parse-ini-file.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.parse-ini-file.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.parse-ini-file.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.parse-ini-file.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parse a configuration file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: parse_ini_file - Manual" />
<meta name="twitter:description" content="Parse a configuration file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: parse_ini_file - Manual" />
<meta itemprop="description" content="Parse a configuration file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parse a configuration file" />

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
        <a href="function.parse-ini-string.php">
          parse_ini_string &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.move-uploaded-file.php">
          &laquo; move_uploaded_file        </a>
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
            <option value='en/function.parse-ini-file.php' selected="selected">English</option>
            <option value='de/function.parse-ini-file.php'>German</option>
            <option value='es/function.parse-ini-file.php'>Spanish</option>
            <option value='fr/function.parse-ini-file.php'>French</option>
            <option value='it/function.parse-ini-file.php'>Italian</option>
            <option value='ja/function.parse-ini-file.php'>Japanese</option>
            <option value='pt_BR/function.parse-ini-file.php'>Brazilian Portuguese</option>
            <option value='ru/function.parse-ini-file.php'>Russian</option>
            <option value='tr/function.parse-ini-file.php'>Turkish</option>
            <option value='uk/function.parse-ini-file.php'>Ukrainian</option>
            <option value='zh/function.parse-ini-file.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.parse-ini-file" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">parse_ini_file</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">parse_ini_file</span> &mdash; <span class="dc-title">Parse a configuration file</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.parse-ini-file-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>parse_ini_file</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$process_sections</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$scanner_mode</code><span class="initializer"> = <strong><code><a href="filesystem.constants.php#constant.ini-scanner-normal">INI_SCANNER_NORMAL</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>parse_ini_file()</strong></span> loads in the
   ini file specified in <code class="parameter">filename</code>,
   and returns the settings in it in an associative array.
  </p>
  <p class="para">
   The structure of the ini file is the same as the <var class="filename">php.ini</var>&#039;s.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.parse-ini-file-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The filename of the ini file being parsed. If a relative path is used,
       it is evaluated relative to the current working directory, then the
       <a href="ini.core.php#ini.include-path" class="link">include_path</a>.
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

 
 <div class="refsect1 returnvalues" id="refsect1-function.parse-ini-file-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The settings are returned as an associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> on success,
   and <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.parse-ini-file-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2402">
    <p><strong>Example #1 Contents of <var class="filename">sample.ini</var></strong></p>
    <div class="example-contents">
<div class="cdata"><pre>
; This is a sample configuration file
; Comments start with &#039;;&#039;, as in php.ini

[first_section]
one = 1
five = 5
animal = BIRD

[second_section]
path = &quot;/usr/local/bin&quot;
URL = &quot;http://www.example.com/~username&quot;

[third_section]
phpversion[] = &quot;5.0&quot;
phpversion[] = &quot;5.1&quot;
phpversion[] = &quot;5.2&quot;
phpversion[] = &quot;5.3&quot;

urls[svn] = &quot;http://svn.php.net&quot;
urls[git] = &quot;http://git.php.net&quot;
</pre></div>
    </div>

   </div>
   <div class="example" id="example-2403">
    <p><strong>Example #2 <span class="function"><strong>parse_ini_file()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     <a href="language.constants.php" class="link">Constants</a> (but not &quot;magic constants&quot; like <strong><code><a href="language.constants.magic.php#constant.file">__FILE__</a></code></strong>)
     may also be parsed
     in the ini file so if you define a constant as an ini value before
     running <span class="function"><strong>parse_ini_file()</strong></span>, it will be integrated into
     the results.  Only ini values are evaluated, and the value must be just the constant.  For example:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />define</span><span style="color: #007700">(</span><span style="color: #DD0000">'BIRD'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Dodo bird'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Parse without sections<br /></span><span style="color: #0000BB">$ini_array </span><span style="color: #007700">= </span><span style="color: #0000BB">parse_ini_file</span><span style="color: #007700">(</span><span style="color: #DD0000">"sample.ini"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$ini_array</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Parse with sections<br /></span><span style="color: #0000BB">$ini_array </span><span style="color: #007700">= </span><span style="color: #0000BB">parse_ini_file</span><span style="color: #007700">(</span><span style="color: #DD0000">"sample.ini"</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$ini_array</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [one] =&gt; 1
    [five] =&gt; 5
    [animal] =&gt; Dodo bird
    [path] =&gt; /usr/local/bin
    [URL] =&gt; http://www.example.com/~username
    [phpversion] =&gt; Array
        (
            [0] =&gt; 5.0
            [1] =&gt; 5.1
            [2] =&gt; 5.2
            [3] =&gt; 5.3
        )

    [urls] =&gt; Array
        (
            [svn] =&gt; http://svn.php.net
            [git] =&gt; http://git.php.net
        )

)
Array
(
    [first_section] =&gt; Array
        (
            [one] =&gt; 1
            [five] =&gt; 5
            [animal] =&gt; Dodo bird
        )

    [second_section] =&gt; Array
        (
            [path] =&gt; /usr/local/bin
            [URL] =&gt; http://www.example.com/~username
        )

    [third_section] =&gt; Array
        (
            [phpversion] =&gt; Array
                (
                    [0] =&gt; 5.0
                    [1] =&gt; 5.1
                    [2] =&gt; 5.2
                    [3] =&gt; 5.3
                )

            [urls] =&gt; Array
                (
                    [svn] =&gt; http://svn.php.net
                    [git] =&gt; http://git.php.net
                )

        )

)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2404">
    <p><strong>Example #3 <span class="function"><strong>parse_ini_file()</strong></span> parsing a php.ini file</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// A simple function used for comparing the results below<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">yesno</span><span style="color: #007700">(</span><span style="color: #0000BB">$expression</span><span style="color: #007700">)<br />{<br />    return(</span><span style="color: #0000BB">$expression </span><span style="color: #007700">? </span><span style="color: #DD0000">'Yes' </span><span style="color: #007700">: </span><span style="color: #DD0000">'No'</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Get the path to php.ini using the php_ini_loaded_file() function<br /></span><span style="color: #0000BB">$ini_path </span><span style="color: #007700">= </span><span style="color: #0000BB">php_ini_loaded_file</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Parse php.ini<br /></span><span style="color: #0000BB">$ini </span><span style="color: #007700">= </span><span style="color: #0000BB">parse_ini_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$ini_path</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Print and compare the values, note that using get_cfg_var()<br />// will give the same results for parsed and loaded here<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'(parsed) magic_quotes_gpc = ' </span><span style="color: #007700">. </span><span style="color: #0000BB">yesno</span><span style="color: #007700">(</span><span style="color: #0000BB">$ini</span><span style="color: #007700">[</span><span style="color: #DD0000">'magic_quotes_gpc'</span><span style="color: #007700">]) . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'(loaded) magic_quotes_gpc = ' </span><span style="color: #007700">. </span><span style="color: #0000BB">yesno</span><span style="color: #007700">(</span><span style="color: #0000BB">get_cfg_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'magic_quotes_gpc'</span><span style="color: #007700">)) . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">(parsed) magic_quotes_gpc = Yes
(loaded) magic_quotes_gpc = Yes</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2405">
    <p><strong>Example #4 Value Interpolation</strong></p>
    <div class="example-contents"><p>
     In addition to evaluating constants, certain characters have special meaning in an ini value.
     Additionally, environment variables and previously defined configuration options (see <span class="function"><a href="function.get-cfg-var.php" class="function">get_cfg_var()</a></span>) may be read using
     <code class="code">${}</code> syntax.
    </p></div>
    <div class="example-contents">
<div class="cdata"><pre>
; | is used for bitwise OR
three = 2|3

; &amp; is used for bitwise AND
four = 6&amp;5

; ^ is used for bitwise XOR
five = 3^6

; ~ is used for bitwise negate
negative_two = ~1

; () is used for grouping
seven = (8|7)&amp;(6|5)

; Interpolate the PATH environment variable
path = ${PATH}

; Interpolate the configuration option &#039;memory_limit&#039;
configured_memory_limit = ${memory_limit}

</pre></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2406">
    <p><strong>Example #5 Escaping Characters</strong></p>
    <div class="example-contents"><p>
     Some characters have special meaning in double-quoted strings and must be escaped by the backslash prefix.
     First of all, these are the double quote <code class="code">&quot;</code> as the boundary marker, and the backslash <code class="code">\</code> itself
     (if followed by one of the special characters):
    </p></div>
    <div class="example-contents">
<div class="cdata"><pre>
quoted = &quot;She said \&quot;Exactly my point\&quot;.&quot; ; Results in a string with quote marks in it.
hint = &quot;Use \\\&quot; to escape double quote&quot; ; Results in: Use \&quot; to escape double quote
</pre></div>
    </div>

    <div class="example-contents"><p>
     There is an exception made for Windows-like paths: it&#039;s possible to not escape trailing backslash
     if the quoted string is directly followed by a linebreak:
    </p></div>
    <div class="example-contents">
<div class="cdata"><pre>
save_path = &quot;C:\Temp\&quot;
</pre></div>
    </div>

    <div class="example-contents"><p>
     If one does need to escape double quote followed by linebreak in a multiline value,
     it&#039;s possible to use value concatenation in the following way
     (there is one double-quoted string directly followed by another one):
    </p></div>
    <div class="example-contents">
<div class="cdata"><pre>
long_text = &quot;Lorem \&quot;ipsum\&quot;&quot;&quot;
 dolor&quot; ; Results in: Lorem &quot;ipsum&quot;\n dolor
</pre></div>
    </div>

    <div class="example-contents"><p>
     Another character with special meaning is <code class="code">$</code> (the dollar sign).
     It must be escaped if followed by the open curly brace:
    </p></div>
    <div class="example-contents">
<div class="cdata"><pre>
code = &quot;\${test}&quot;
</pre></div>
    </div>

    <div class="example-contents"><p>
     Escaping characters is not supported in the <strong><code><a href="filesystem.constants.php#constant.ini-scanner-raw">INI_SCANNER_RAW</a></code></strong> mode
     (in this mode all characters are processed &quot;as is&quot;).
    </p></div>
    <div class="example-contents"><p>
     Note that the ini parser doesn&#039;t support standard escape sequences (<code class="code">\n</code>, <code class="code">\t</code>, etc.).
     If necessary, post-process the result of <span class="function"><strong>parse_ini_file()</strong></span> with <span class="function"><a href="function.stripcslashes.php" class="function">stripcslashes()</a></span> function.
    </p></div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.parse-ini-file-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function has nothing to do with the
    <var class="filename">php.ini</var> file. It is already processed by
    the time you run your script. This function can be used to
    read in your own application&#039;s configuration files.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If a value in the ini file contains any non-alphanumeric
    characters it needs to be enclosed in double-quotes (&quot;).
   </p>
  </p></blockquote>
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
    Characters <code class="literal">?{}|&amp;~!()^&quot;</code> must not be used anywhere in
    the key and have a special meaning in the value.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Entries without an equal sign are ignored. For example, &quot;foo&quot;
    is ignored whereas &quot;bar =&quot; is parsed and added with an empty
    value. For example, MySQL has a &quot;no-auto-rehash&quot; setting 
    in <var class="filename">my.cnf</var> that does not take a value, so
    it is ignored.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    ini files are generally treated as plain text by web servers and thus served to browsers if requested.
    That means for security you must either keep your ini files outside of your docroot or reconfigure your
    web server to not serve them.  Failure to do either of those may introduce a security risk.
   </p>
  </p></blockquote>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.parse-ini-file-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.parse-ini-string.php" class="function" rel="rdfs-seeAlso">parse_ini_string()</a> - Parse a configuration string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/parse-ini-file.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.parse-ini-file%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.parse-ini-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.parse-ini-file.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="90624">  <div class="votes">
    <div id="Vu90624">
    <a href="/manual/vote-note.php?id=90624&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90624">
    <a href="/manual/vote-note.php?id=90624&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90624" title="81% like this...">
    34
    </div>
  </div>
  <a href="#90624" class="name">
  <strong class="user"><em>jeremygiberson at gmail dot com</em></strong></a><a class="genanchor" href="#90624"> &para;</a><div class="date" title="2009-04-30 04:01"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90624">
<div class="phpcode"><code><span class="html">Here is a quick parse_ini_file wrapper to add extend support to save typing and redundancy.<br /><span class="default">&lt;?php<br />    </span><span class="comment">/**<br />     * Parses INI file adding extends functionality via ":base" postfix on namespace.<br />     *<br />     * @param string $filename<br />     * @return array<br />     */<br />    </span><span class="keyword">function </span><span class="default">parse_ini_file_extended</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) {<br />        </span><span class="default">$p_ini </span><span class="keyword">= </span><span class="default">parse_ini_file</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">$config </span><span class="keyword">= array();<br />        foreach(</span><span class="default">$p_ini </span><span class="keyword">as </span><span class="default">$namespace </span><span class="keyword">=&gt; </span><span class="default">$properties</span><span class="keyword">){<br />            list(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$extends</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">':'</span><span class="keyword">, </span><span class="default">$namespace</span><span class="keyword">);<br />            </span><span class="default">$name </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />            </span><span class="default">$extends </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$extends</span><span class="keyword">);<br />            </span><span class="comment">// create namespace if necessary<br />            </span><span class="keyword">if(!isset(</span><span class="default">$config</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">])) </span><span class="default">$config</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = array();<br />            </span><span class="comment">// inherit base namespace<br />            </span><span class="keyword">if(isset(</span><span class="default">$p_ini</span><span class="keyword">[</span><span class="default">$extends</span><span class="keyword">])){<br />                foreach(</span><span class="default">$p_ini</span><span class="keyword">[</span><span class="default">$extends</span><span class="keyword">] as </span><span class="default">$prop </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">)<br />                    </span><span class="default">$config</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">][</span><span class="default">$prop</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;<br />            }<br />            </span><span class="comment">// overwrite / set current namespace values<br />            </span><span class="keyword">foreach(</span><span class="default">$properties </span><span class="keyword">as </span><span class="default">$prop </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">)<br />            </span><span class="default">$config</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">][</span><span class="default">$prop</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$config</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Treats this ini:<br /><span class="default">&lt;?php <br /></span><span class="comment">/*<br />[base]<br />host=localhost<br />user=testuser<br />pass=testpass<br />database=default<br /><br />[users:base]<br />database=users<br /><br />[archive : base]<br />database=archive<br />*/<br /></span><span class="default">?&gt;<br /></span>As if it were like this:<br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />[base]<br />host=localhost<br />user=testuser<br />pass=testpass<br />database=default<br /><br />[users:base]<br />host=localhost<br />user=testuser<br />pass=testpass<br />database=users<br /><br />[archive : base]<br />host=localhost<br />user=testuser<br />pass=testpass<br />database=archive<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129279">  <div class="votes">
    <div id="Vu129279">
    <a href="/manual/vote-note.php?id=129279&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129279">
    <a href="/manual/vote-note.php?id=129279&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129279" title="100% like this...">
    3
    </div>
  </div>
  <a href="#129279" class="name">
  <strong class="user"><em>theking2(at)king.ma</em></strong></a><a class="genanchor" href="#129279"> &para;</a><div class="date" title="2024-02-26 08:18"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129279">
<div class="phpcode"><code><span class="html">To make the content available in every corner of you application I use a user defined constant. $SETTINGS. It is initialized like this<br /><span class="default">&lt;?php<br /><br />define</span><span class="keyword">( </span><span class="string">'SETTINGS", parse_ini_file('</span><span class="default">settings</span><span class="keyword">.</span><span class="default">ini</span><span class="string">', true) );<br /><br />?&gt;<br />With the proper settings.ini file you can now do stuff like <br />&lt;?php<br />$db = new \PDO(<br />  "mysql:host={SETTINGS['</span><span class="default">db</span><span class="string">']['</span><span class="default">host</span><span class="string">']};dbname={SETTINGS['</span><span class="default">db</span><span class="string">']['</span><span class="default">name</span><span class="string">']};charset=utf8",<br />  SETTINGS['</span><span class="default">db</span><span class="string">']['</span><span class="default">user</span><span class="string">'],<br />  SETTINGS['</span><span class="default">db</span><span class="string">']['</span><span class="default">pass</span><span class="string">'], [\PDO::ATTR_ERRMODE =&gt; \PDO::ERRMODE_EXCEPTION<br />  ]<br />);<br />?&gt;<br /><br />Make sure to hide your settings.ini file on a website with for instance<br />&lt;?php<br />&lt;FilesMatch "\.(?:ini|htaccess)$"&gt;<br />  Order allow,deny<br />  Deny from all<br />&lt;/FilesMatch&gt;<br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114842">  <div class="votes">
    <div id="Vu114842">
    <a href="/manual/vote-note.php?id=114842&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114842">
    <a href="/manual/vote-note.php?id=114842&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114842" title="76% like this...">
    14
    </div>
  </div>
  <a href="#114842" class="name">
  <strong class="user"><em>Rekam</em></strong></a><a class="genanchor" href="#114842"> &para;</a><div class="date" title="2014-04-13 09:59"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114842">
<div class="phpcode"><code><span class="html">You may want, in some very special cases, to parse multi-dimensional array with N levels in your ini file. Something like setting[data][config][debug] = true will result in an error (expected "=").<br /><br />Here's a little function to match this, using dots (customizable).<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">parse_ini_file_multi</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$process_sections </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$scanner_mode </span><span class="keyword">= </span><span class="default">INI_SCANNER_NORMAL</span><span class="keyword">) {<br />    </span><span class="default">$explode_str </span><span class="keyword">= </span><span class="string">'.'</span><span class="keyword">;<br />    </span><span class="default">$escape_char </span><span class="keyword">= </span><span class="string">"'"</span><span class="keyword">;<br />    </span><span class="comment">// load ini file the normal way<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">parse_ini_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$process_sections</span><span class="keyword">, </span><span class="default">$scanner_mode</span><span class="keyword">);<br />    if (!</span><span class="default">$process_sections</span><span class="keyword">) {<br />        </span><span class="default">$data </span><span class="keyword">= array(</span><span class="default">$data</span><span class="keyword">);<br />    }<br />    foreach (</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$section_key </span><span class="keyword">=&gt; </span><span class="default">$section</span><span class="keyword">) {<br />        </span><span class="comment">// loop inside the section<br />        </span><span class="keyword">foreach (</span><span class="default">$section </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$explode_str</span><span class="keyword">)) {<br />                if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) !== </span><span class="default">$escape_char</span><span class="keyword">) {<br />                    </span><span class="comment">// key has a dot. Explode on it, then parse each subkeys<br />                    // and set value at the right place thanks to references<br />                    </span><span class="default">$sub_keys </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$explode_str</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">);<br />                    </span><span class="default">$subs </span><span class="keyword">=&amp; </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$section_key</span><span class="keyword">];<br />                    foreach (</span><span class="default">$sub_keys </span><span class="keyword">as </span><span class="default">$sub_key</span><span class="keyword">) {<br />                        if (!isset(</span><span class="default">$subs</span><span class="keyword">[</span><span class="default">$sub_key</span><span class="keyword">])) {<br />                            </span><span class="default">$subs</span><span class="keyword">[</span><span class="default">$sub_key</span><span class="keyword">] = [];<br />                        }<br />                        </span><span class="default">$subs </span><span class="keyword">=&amp; </span><span class="default">$subs</span><span class="keyword">[</span><span class="default">$sub_key</span><span class="keyword">];<br />                    }<br />                    </span><span class="comment">// set the value at the right place<br />                    </span><span class="default">$subs </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />                    </span><span class="comment">// unset the dotted key, we don't need it anymore<br />                    </span><span class="keyword">unset(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$section_key</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">]);<br />                }<br />                </span><span class="comment">// we have escaped the key, so we keep dots as they are<br />                </span><span class="keyword">else {<br />                    </span><span class="default">$new_key </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$escape_char</span><span class="keyword">);<br />                    </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$section_key</span><span class="keyword">][</span><span class="default">$new_key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                    unset(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$section_key</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">]);<br />                }<br />            }<br />        }<br />    }<br />    if (!</span><span class="default">$process_sections</span><span class="keyword">) {<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    }<br />    return </span><span class="default">$data</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />The following file:<br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />[normal]<br />foo = bar<br />; use quotes to keep your key as it is<br />'foo.with.dots' = true<br /><br />[array]<br />foo[] = 1<br />foo[] = 2<br /><br />[dictionary]<br />foo[debug] = false<br />foo[path] = /some/path<br /><br />[multi]<br />foo.data.config.debug = true<br />foo.data.password = 123456<br />*/<br /></span><span class="default">?&gt;<br /></span><br />will result in:<br /><span class="default">&lt;?php<br />parse_ini_file_multi</span><span class="keyword">(</span><span class="string">'file.ini'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br />Array<br />(<br />    [</span><span class="default">normal</span><span class="keyword">] =&gt; Array<br />        (<br />            [</span><span class="default">foo</span><span class="keyword">] =&gt; </span><span class="default">bar<br />            </span><span class="keyword">[</span><span class="default">foo</span><span class="keyword">.</span><span class="default">with</span><span class="keyword">.</span><span class="default">dots</span><span class="keyword">] =&gt; </span><span class="default">1<br />        </span><span class="keyword">)<br />    [array] =&gt; Array<br />        (<br />            [</span><span class="default">foo</span><span class="keyword">] =&gt; Array<br />                (<br />                    [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">1<br />                    </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">2<br />                </span><span class="keyword">)<br />        )<br />    [</span><span class="default">dictionary</span><span class="keyword">] =&gt; Array<br />        (<br />            [</span><span class="default">foo</span><span class="keyword">] =&gt; Array<br />                (<br />                    [</span><span class="default">debug</span><span class="keyword">] =&gt; <br />                    [</span><span class="default">path</span><span class="keyword">] =&gt; /</span><span class="default">some</span><span class="keyword">/</span><span class="default">path<br />                </span><span class="keyword">)<br />        )<br />    [</span><span class="default">multi</span><span class="keyword">] =&gt; Array<br />        (<br />            [</span><span class="default">foo</span><span class="keyword">] =&gt; Array<br />                (<br />                    [</span><span class="default">data</span><span class="keyword">] =&gt; Array<br />                        (<br />                            [</span><span class="default">config</span><span class="keyword">] =&gt; Array<br />                                (<br />                                    [</span><span class="default">debug</span><span class="keyword">] =&gt; </span><span class="default">1<br />                                </span><span class="keyword">)<br />                            [</span><span class="default">password</span><span class="keyword">] =&gt; </span><span class="default">123456<br />                        </span><span class="keyword">)<br />                )<br />        )<br />)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118969">  <div class="votes">
    <div id="Vu118969">
    <a href="/manual/vote-note.php?id=118969&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118969">
    <a href="/manual/vote-note.php?id=118969&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118969" title="83% like this...">
    4
    </div>
  </div>
  <a href="#118969" class="name">
  <strong class="user"><em>dschnepper at box dot com</em></strong></a><a class="genanchor" href="#118969"> &para;</a><div class="date" title="2016-03-09 09:21"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118969">
<div class="phpcode"><code><span class="html">The documentation states:<br />Characters ?{}|&amp;~!()^" must not be used anywhere in the key and have a special meaning in the value.<br /><br />Here's the results of my experiments on what they mean:<br /><br />; | is used for bitwise OR<br />three = 2|3<br /><br />; &amp; is used for bitwise AND<br />four = 6&amp;5<br /><br />; ^ is used for bitwise XOR<br />five = 3^6<br /><br />; ~ is used for bitwise negate<br />negative_two = ~1<br /><br />; () is used for grouping<br />seven = (8|7)&amp;(6|5)<br /><br />; ${...} is used for grabbing values from the environment, or previously defined values.<br />path = ${PATH}<br />also = ${five}<br /><br />; ? I have no guess for<br />; ! I have no guess for</span></code></div>
  </div>
 </div>
  <div class="note" id="120341">  <div class="votes">
    <div id="Vu120341">
    <a href="/manual/vote-note.php?id=120341&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120341">
    <a href="/manual/vote-note.php?id=120341&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120341" title="80% like this...">
    3
    </div>
  </div>
  <a href="#120341" class="name">
  <strong class="user"><em>info () gaj ! design</em></strong></a><a class="genanchor" href="#120341"> &para;</a><div class="date" title="2016-12-16 02:26"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120341">
<div class="phpcode"><code><span class="html">Not mentioned in the documentation, this function acts like include:<br /><br />"Files are included based on the file path given or, if none is given, the include_path specified. If the file isn't found in the include_path, include will finally check in the calling script's own directory and the current working directory before failing."<br /><br />(At least for PHP 7; have not checked PHP 5.)</span></code></div>
  </div>
 </div>
  <div class="note" id="119543">  <div class="votes">
    <div id="Vu119543">
    <a href="/manual/vote-note.php?id=119543&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119543">
    <a href="/manual/vote-note.php?id=119543&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119543" title="70% like this...">
    4
    </div>
  </div>
  <a href="#119543" class="name">
  <strong class="user"><em>YAPs</em></strong></a><a class="genanchor" href="#119543"> &para;</a><div class="date" title="2016-07-03 08:49"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119543">
<div class="phpcode"><code><span class="html">This function for save ini files
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">array_to_ini</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,</span><span class="default">$out</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$t</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;
<br />    </span><span class="default">$q</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;
<br />    foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$c</span><span class="keyword">=&gt;</span><span class="default">$d</span><span class="keyword">)
<br />    {
<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">))</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">array_to_ini</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">);
<br />        else
<br />        {
<br />            if(</span><span class="default">$c</span><span class="keyword">===</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">))
<br />            {
<br />                if(!empty(</span><span class="default">$out</span><span class="keyword">))
<br />                {
<br />                    </span><span class="default">$t</span><span class="keyword">.=</span><span class="string">"\r\n"</span><span class="keyword">.</span><span class="default">$out</span><span class="keyword">.</span><span class="string">" = \""</span><span class="keyword">.</span><span class="default">$d</span><span class="keyword">.</span><span class="string">"\""</span><span class="keyword">;
<br />                    if(</span><span class="default">$q</span><span class="keyword">!=</span><span class="default">2</span><span class="keyword">)</span><span class="default">$q</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;
<br />                }
<br />                else </span><span class="default">$t</span><span class="keyword">.=</span><span class="string">"\r\n"</span><span class="keyword">.</span><span class="default">$d</span><span class="keyword">;
<br />            }
<br />            else
<br />            {    
<br />                </span><span class="default">$t</span><span class="keyword">.=</span><span class="string">"\r\n"</span><span class="keyword">.</span><span class="default">$c</span><span class="keyword">.</span><span class="string">" = \""</span><span class="keyword">.</span><span class="default">$d</span><span class="keyword">.</span><span class="string">"\""</span><span class="keyword">;
<br />                </span><span class="default">$q</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">;
<br />            }
<br />        }
<br />    }
<br />    if(</span><span class="default">$q</span><span class="keyword">!=</span><span class="default">true </span><span class="keyword">&amp;&amp; !empty(</span><span class="default">$out</span><span class="keyword">)) return </span><span class="string">"["</span><span class="keyword">.</span><span class="default">$out</span><span class="keyword">.</span><span class="string">"]\r\n"</span><span class="keyword">.</span><span class="default">$t</span><span class="keyword">;
<br />    if(!empty(</span><span class="default">$out</span><span class="keyword">)) return  </span><span class="default">$t</span><span class="keyword">;
<br />    return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">);
<br />}
<br />
<br />function </span><span class="default">save_ini_file</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,</span><span class="default">$file</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$a</span><span class="keyword">=</span><span class="default">array_to_ini</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br />    </span><span class="default">$ffl</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">);
<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$ffl</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">);
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$ffl</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78815">  <div class="votes">
    <div id="Vu78815">
    <a href="/manual/vote-note.php?id=78815&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78815">
    <a href="/manual/vote-note.php?id=78815&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78815" title="70% like this...">
    4
    </div>
  </div>
  <a href="#78815" class="name">
  <strong class="user"><em>goulven.ch AT gmail DOT com</em></strong></a><a class="genanchor" href="#78815"> &para;</a><div class="date" title="2007-10-29 06:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78815">
<div class="phpcode"><code><span class="html">Warning: parse_ini_files cannot cope with values containing the equal sign (=).<br /><br />The following function supports sections, comments, arrays, and key-value pairs outside of any section.<br />Beware that similar keys will overwrite one another (unless in different sections).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">parse_ini </span><span class="keyword">( </span><span class="default">$filepath </span><span class="keyword">) {<br />    </span><span class="default">$ini </span><span class="keyword">= </span><span class="default">file</span><span class="keyword">( </span><span class="default">$filepath </span><span class="keyword">);<br />    if ( </span><span class="default">count</span><span class="keyword">( </span><span class="default">$ini </span><span class="keyword">) == </span><span class="default">0 </span><span class="keyword">) { return array(); }<br />    </span><span class="default">$sections </span><span class="keyword">= array();<br />    </span><span class="default">$values </span><span class="keyword">= array();<br />    </span><span class="default">$globals </span><span class="keyword">= array();<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    foreach( </span><span class="default">$ini </span><span class="keyword">as </span><span class="default">$line </span><span class="keyword">){<br />        </span><span class="default">$line </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">( </span><span class="default">$line </span><span class="keyword">);<br />        </span><span class="comment">// Comments<br />        </span><span class="keyword">if ( </span><span class="default">$line </span><span class="keyword">== </span><span class="string">'' </span><span class="keyword">|| </span><span class="default">$line</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} == </span><span class="string">';' </span><span class="keyword">) { continue; }<br />        </span><span class="comment">// Sections<br />        </span><span class="keyword">if ( </span><span class="default">$line</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} == </span><span class="string">'[' </span><span class="keyword">) {<br />            </span><span class="default">$sections</span><span class="keyword">[] = </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$line</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, -</span><span class="default">1 </span><span class="keyword">);<br />            </span><span class="default">$i</span><span class="keyword">++;<br />            continue;<br />        }<br />        </span><span class="comment">// Key-value pair<br />        </span><span class="keyword">list( </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value </span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">( </span><span class="string">'='</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">);<br />        </span><span class="default">$key </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">( </span><span class="default">$key </span><span class="keyword">);<br />        </span><span class="default">$value </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">( </span><span class="default">$value </span><span class="keyword">);<br />        if ( </span><span class="default">$i </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">) {<br />            </span><span class="comment">// Array values<br />            </span><span class="keyword">if ( </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$line</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">) == </span><span class="string">'[]' </span><span class="keyword">) {<br />                </span><span class="default">$globals</span><span class="keyword">[ </span><span class="default">$key </span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$globals</span><span class="keyword">[ </span><span class="default">$key </span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />            }<br />        } else {<br />            </span><span class="comment">// Array values<br />            </span><span class="keyword">if ( </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$line</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">) == </span><span class="string">'[]' </span><span class="keyword">) {<br />                </span><span class="default">$values</span><span class="keyword">[ </span><span class="default">$i </span><span class="keyword">- </span><span class="default">1 </span><span class="keyword">][ </span><span class="default">$key </span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$values</span><span class="keyword">[ </span><span class="default">$i </span><span class="keyword">- </span><span class="default">1 </span><span class="keyword">][ </span><span class="default">$key </span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />            }<br />        }<br />    }<br />    for( </span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">$i</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++ ) {<br />        </span><span class="default">$result</span><span class="keyword">[ </span><span class="default">$sections</span><span class="keyword">[ </span><span class="default">$j </span><span class="keyword">] ] = </span><span class="default">$values</span><span class="keyword">[ </span><span class="default">$j </span><span class="keyword">];<br />    }<br />    return </span><span class="default">$result </span><span class="keyword">+ </span><span class="default">$globals</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example usage:<br /><span class="default">&lt;?php<br />$stores </span><span class="keyword">= </span><span class="default">parse_ini</span><span class="keyword">(</span><span class="string">'stores.ini'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$stores </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />An example ini file:<br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />;Commented line start with ';'<br />global_value1 = a string value<br />global_value1 = another string value<br /><br />; empty lines are discarded<br />[Section1]<br />key = value<br />; whitespace around keys and values is discarded too<br />otherkey=other value<br />otherkey=yet another value<br />; this key-value pair will overwrite the former.<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70847">  <div class="votes">
    <div id="Vu70847">
    <a href="/manual/vote-note.php?id=70847&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70847">
    <a href="/manual/vote-note.php?id=70847&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70847" title="70% like this...">
    4
    </div>
  </div>
  <a href="#70847" class="name">
  <strong class="user"><em>Justin Hall</em></strong></a><a class="genanchor" href="#70847"> &para;</a><div class="date" title="2006-10-31 11:46"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70847">
<div class="phpcode"><code><span class="html">This is a simple (but slightly hackish) way of avoiding the character limitations (in values):<br /><br /><span class="default">&lt;?php<br />define</span><span class="keyword">(</span><span class="string">'QUOTE'</span><span class="keyword">, </span><span class="string">'"'</span><span class="keyword">);<br /></span><span class="default">$test </span><span class="keyword">= </span><span class="default">parse_ini_file</span><span class="keyword">(</span><span class="string">'test.ini'</span><span class="keyword">);<br /><br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />contents of test.ini:<br /><br />park yesterday = "I (walked) | {to} " QUOTE"the"QUOTE " park yesterday &amp; saw ~three~ dogs!"<br /><br />output:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">Array<br />(<br />    [</span><span class="default">park yesterday</span><span class="keyword">] =&gt; </span><span class="default">I </span><span class="keyword">(</span><span class="default">walked</span><span class="keyword">) | {</span><span class="default">to</span><span class="keyword">} </span><span class="string">"the" </span><span class="default">park yesterday </span><span class="keyword">&amp; </span><span class="default">saw </span><span class="keyword">~</span><span class="default">three</span><span class="keyword">~ </span><span class="default">dogs</span><span class="keyword">!<br />)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111459">  <div class="votes">
    <div id="Vu111459">
    <a href="/manual/vote-note.php?id=111459&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111459">
    <a href="/manual/vote-note.php?id=111459&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111459" title="59% like this...">
    4
    </div>
  </div>
  <a href="#111459" class="name">
  <strong class="user"><em>simon dot riget at gmail dot com</em></strong></a><a class="genanchor" href="#111459"> &para;</a><div class="date" title="2013-02-21 07:23"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111459">
<div class="phpcode"><code><span class="html">.ini files or JSON file format as it is also known as, are very useful format to store stuff in. Especially large arrays. <br /><br />Strangely enough there is this nice function to read the file, but no function to write it.<br /><br />So here is one.<br /><br />Use it as:  put_ini_file(string $file, array $array)<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">put_ini_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">, </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">){<br />  </span><span class="default">$str</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />  foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">){<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)){<br />      </span><span class="default">$str</span><span class="keyword">.=</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">).</span><span class="string">"[</span><span class="default">$k</span><span class="string">]"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">; <br />      </span><span class="default">$str</span><span class="keyword">.=</span><span class="default">put_ini_file</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);<br />    }else<br />      </span><span class="default">$str</span><span class="keyword">.=</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">).</span><span class="string">"</span><span class="default">$k</span><span class="string"> = </span><span class="default">$v</span><span class="string">"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">; <br />  }<br /> if(</span><span class="default">$file</span><span class="keyword">)<br />    return </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="default">$str</span><span class="keyword">);<br />  else<br />    return </span><span class="default">$str</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="28261">  <div class="votes">
    <div id="Vu28261">
    <a href="/manual/vote-note.php?id=28261&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28261">
    <a href="/manual/vote-note.php?id=28261&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28261" title="60% like this...">
    1
    </div>
  </div>
  <a href="#28261" class="name">
  <strong class="user"><em>kieran dot huggins at rogers dot com</em></strong></a><a class="genanchor" href="#28261"> &para;</a><div class="date" title="2003-01-07 10:24"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28261">
<div class="phpcode"><code><span class="html">Just a quick note for all those running into trouble escaping double quotes:<br /><br />I got around this by "base64_encode()"-ing my content on the way in to the ini file, and "base64_decode()"-ing on the way out.<br /><br />Because base64 uses the "=" sign, you will have to encapsulate the entire value in double quotes so the line looks like this:<br /><br />    varname = "TmlhZ2FyYSBGYWxscywgT04="<br /><br />When base64'd, your strings will retain all \n, \t...etc...  URL's retain everything perfectly :-)<br /><br />I hope some of you find this useful!<br /><br />Cheers, Kieran</span></code></div>
  </div>
 </div>
  <div class="note" id="128917">  <div class="votes">
    <div id="Vu128917">
    <a href="/manual/vote-note.php?id=128917&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128917">
    <a href="/manual/vote-note.php?id=128917&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128917" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128917" class="name">
  <strong class="user"><em>eciruam35 at gmail dot com</em></strong></a><a class="genanchor" href="#128917"> &para;</a><div class="date" title="2023-09-26 02:34"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128917">
<div class="phpcode"><code><span class="html">fix a little bug (here) in function put_ini_file:<br /><br />function put_ini_file($config, $file, $has_section = false, $write_to_file = true){<br />    $fileContent = '';<br />    if(!empty($config)){<br />        foreach($config as $i=&gt;$v){<br />            if($has_section){<br />                $fileContent .= "\n[$i]".PHP_EOL.put_ini_file($v, $file, false, false);<br />            }<br />            else{<br />                if(is_array($v)){<br />                    foreach($v as $t=&gt;$m){<br />//---&gt;&gt;&gt; Here                        $fileContent .= "--&gt;$i[$t] = ".(is_numeric($m) ? $m : '"'.$m.'"').PHP_EOL;<br />                        $fileContent .= "$i"."[] = ".(is_numeric($m) ? $m : '"'.$m.'"').PHP_EOL;<br />                    }<br />                }<br />                else $fileContent .= "$i = ".(is_numeric($v) ? $v : '"'.$v.'"').PHP_EOL;<br />            }<br />        }<br />    }<br /><br />    if($write_to_file &amp;&amp; strlen($fileContent)) return file_put_contents($file, $fileContent, LOCK_EX);<br />    else return $fileContent;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="128985">  <div class="votes">
    <div id="Vu128985">
    <a href="/manual/vote-note.php?id=128985&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128985">
    <a href="/manual/vote-note.php?id=128985&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128985" title="no votes...">
    0
    </div>
  </div>
  <a href="#128985" class="name">
  <strong class="user"><em>manngo</em></strong></a><a class="genanchor" href="#128985"> &para;</a><div class="date" title="2023-10-30 09:49"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128985">
<div class="phpcode"><code><span class="html">Securing your .ini file:<br /><br />“ini files are generally treated as plain text by web servers and thus served to browsers if requested. That means for security you must either keep your ini files outside of your docroot or reconfigure your web server to not serve them. Failure to do either of those may introduce a security risk.”<br /><br />Alternatively, you can save you file as:<br /><br />stuff.ini.php<br /><br />add this to the beginning:<br /><br />;<span class="default">&lt;?php </span><span class="keyword">die(</span><span class="string">'go away'</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />The semicolon at the beginning is treated as comment, so this line has no effect on the ini file.<br /><br />Since the file has a .php extension, it will run through the PHP interpreter if you attempt to access this file directly, and the php block will be processed and exit.<br /><br />The file extension has no ill effect on the parse_ini_file() function, and the .ini part is, of course, a matter of taste.</span></code></div>
  </div>
 </div>
  <div class="note" id="118151">  <div class="votes">
    <div id="Vu118151">
    <a href="/manual/vote-note.php?id=118151&amp;page=function.parse-ini-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118151">
    <a href="/manual/vote-note.php?id=118151&amp;page=function.parse-ini-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118151" title="50% like this...">
    0
    </div>
  </div>
  <a href="#118151" class="name">
  <strong class="user"><em>jbricci at ya-right dot com</em></strong></a><a class="genanchor" href="#118151"> &para;</a><div class="date" title="2015-10-15 06:39"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118151">
<div class="phpcode"><code><span class="html">This core function won't handle ini key[][] = value(s), (multidimensional arrays), so if you need to support that kind of setup you will need to write your own function. one way to do it is to convert all the key = value(s) to array string [key][][]=value(s), then use parse_str() to convert all those [key][][]=value(s) that way you just read the ini file line by line, instead of doing crazy foreach() loops to handle those (multidimensional arrays) in each section, example...<br /><br />ini file...... config.php<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">; </span><span class="default">This is a sample configuration file<br /></span><span class="keyword">; </span><span class="default">Comments start with </span><span class="string">';'</span><span class="keyword">, as </span><span class="default">in php</span><span class="keyword">.</span><span class="default">ini<br /><br /></span><span class="keyword">[</span><span class="default">first_section</span><span class="keyword">]<br /></span><span class="default">one </span><span class="keyword">= </span><span class="default">1<br />five </span><span class="keyword">= </span><span class="default">5<br />animal </span><span class="keyword">= </span><span class="default">BIRD<br /><br /></span><span class="keyword">[</span><span class="default">second_section</span><span class="keyword">]<br /></span><span class="default">path </span><span class="keyword">= </span><span class="string">"/usr/local/bin"<br /></span><span class="default">URL </span><span class="keyword">= </span><span class="string">"<a href="http://www.example.com/~username" rel="nofollow" target="_blank">http://www.example.com/~username</a>"<br /><br /></span><span class="keyword">[</span><span class="default">third_section</span><span class="keyword">]<br /></span><span class="default">phpversion</span><span class="keyword">[] = </span><span class="string">"5.0"<br /></span><span class="default">phpversion</span><span class="keyword">[] = </span><span class="string">"5.1"<br /></span><span class="default">phpversion</span><span class="keyword">[] = </span><span class="string">"5.2"<br /></span><span class="default">phpversion</span><span class="keyword">[] = </span><span class="string">"5.3"<br /><br /></span><span class="default">urls</span><span class="keyword">[</span><span class="default">svn</span><span class="keyword">] = </span><span class="string">"<a href="http://svn.php.net" rel="nofollow" target="_blank">http://svn.php.net</a>"<br /></span><span class="default">urls</span><span class="keyword">[</span><span class="default">git</span><span class="keyword">] = </span><span class="string">"<a href="http://git.php.net" rel="nofollow" target="_blank">http://git.php.net</a>"<br /><br /></span><span class="keyword">[</span><span class="default">fourth_section</span><span class="keyword">]<br /><br /></span><span class="default">a</span><span class="keyword">[][][] = </span><span class="default">b<br />a</span><span class="keyword">[][][][] = </span><span class="default">c<br />a</span><span class="keyword">[</span><span class="default">test_test</span><span class="keyword">][][] = </span><span class="default">d<br />test</span><span class="keyword">[</span><span class="default">one</span><span class="keyword">][</span><span class="default">two</span><span class="keyword">][</span><span class="default">three</span><span class="keyword">] = </span><span class="default">true<br /><br />?&gt;<br /></span><br />echo parse_ini_file ( "C:\\services\\www\\docs\\config.php" );<br /><br />results in...<br /><br />// PHP Warning:  syntax error, unexpected TC_SECTION, expecting '=' line 27 -&gt; a[][][] = b<br /><br />Here it simple function that handles (multidimensional arrays) without looping each key[][]= value(s)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">getIni </span><span class="keyword">( </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$sections </span><span class="keyword">= </span><span class="default">FALSE </span><span class="keyword">)<br />{<br />    </span><span class="default">$return </span><span class="keyword">= array ();<br /><br />    </span><span class="default">$keeper </span><span class="keyword">= array ();<br /><br />    </span><span class="default">$config </span><span class="keyword">= </span><span class="default">fopen </span><span class="keyword">( </span><span class="default">$file</span><span class="keyword">, </span><span class="string">'r' </span><span class="keyword">);<br /><br />    while ( ! </span><span class="default">feof </span><span class="keyword">( </span><span class="default">$config </span><span class="keyword">) )<br />    { <br />        </span><span class="default">$line </span><span class="keyword">= </span><span class="default">trim </span><span class="keyword">( </span><span class="default">fgets </span><span class="keyword">( </span><span class="default">$config</span><span class="keyword">, </span><span class="default">1024 </span><span class="keyword">) );<br /><br />        </span><span class="default">$line </span><span class="keyword">= ( </span><span class="default">$line </span><span class="keyword">== </span><span class="string">'' </span><span class="keyword">) ? </span><span class="string">' ' </span><span class="keyword">: </span><span class="default">$line</span><span class="keyword">;<br /><br />        switch ( </span><span class="default">$line</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} )<br />        {<br />            case </span><span class="string">' '</span><span class="keyword">:<br />            case </span><span class="string">'#'</span><span class="keyword">:<br />            case </span><span class="string">'/'</span><span class="keyword">:<br />            case </span><span class="string">';'</span><span class="keyword">:<br />            case </span><span class="string">'&lt;'</span><span class="keyword">:<br />            case </span><span class="string">'?'</span><span class="keyword">:<br /><br />            break;<br /><br />            case </span><span class="string">'['</span><span class="keyword">:<br /><br />            if ( </span><span class="default">$sections </span><span class="keyword">)<br />            {<br />                </span><span class="default">$header </span><span class="keyword">= </span><span class="string">'config[' </span><span class="keyword">. </span><span class="default">trim </span><span class="keyword">( </span><span class="default">substr </span><span class="keyword">( </span><span class="default">$line</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, -</span><span class="default">1 </span><span class="keyword">) ) . </span><span class="string">']'</span><span class="keyword">;<br />            }<br />            else<br />            {<br />                </span><span class="default">$header </span><span class="keyword">= </span><span class="string">'config'</span><span class="keyword">;<br />            }<br /><br />            break;<br /><br />            default:<br /><br />            </span><span class="default">$kv </span><span class="keyword">= </span><span class="default">array_map </span><span class="keyword">( </span><span class="string">'trim'</span><span class="keyword">, </span><span class="default">explode </span><span class="keyword">( </span><span class="string">'='</span><span class="keyword">, </span><span class="default">$line </span><span class="keyword">) );<br /><br />            </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">str_replace </span><span class="keyword">( </span><span class="string">' '</span><span class="keyword">, </span><span class="string">'+'</span><span class="keyword">, </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] );<br /><br />            </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">str_replace </span><span class="keyword">( </span><span class="string">' '</span><span class="keyword">, </span><span class="string">'+'</span><span class="keyword">, </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] );<br /><br />            if ( ( </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos </span><span class="keyword">( </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="string">'[' </span><span class="keyword">) ) !== </span><span class="default">FALSE </span><span class="keyword">)<br />            {<br />                </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">'[' </span><span class="keyword">. </span><span class="default">substr </span><span class="keyword">( </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos </span><span class="keyword">) . </span><span class="string">']' </span><span class="keyword">. </span><span class="default">substr </span><span class="keyword">( </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$pos </span><span class="keyword">);<br />            }<br />            else<br />            {<br />                </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">'[' </span><span class="keyword">. </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] . </span><span class="string">']'</span><span class="keyword">;<br />            }<br /><br />            </span><span class="default">$bt </span><span class="keyword">= </span><span class="default">strtolower </span><span class="keyword">( </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] );<br /><br />            if ( </span><span class="default">in_array </span><span class="keyword">( </span><span class="default">$bt</span><span class="keyword">, array ( </span><span class="string">'true'</span><span class="keyword">, </span><span class="string">'false'</span><span class="keyword">, </span><span class="string">'on'</span><span class="keyword">, </span><span class="string">'off' </span><span class="keyword">) ) )<br />            {<br />                </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = ( </span><span class="default">$bt </span><span class="keyword">== </span><span class="string">'true' </span><span class="keyword">|| </span><span class="default">$bt </span><span class="keyword">== </span><span class="string">'on' </span><span class="keyword">) ? </span><span class="default">TRUE </span><span class="keyword">: </span><span class="default">FALSE</span><span class="keyword">;<br />            }<br /><br />            </span><span class="default">$keeper</span><span class="keyword">[] = </span><span class="default">$header </span><span class="keyword">. </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] . </span><span class="string">'=' </span><span class="keyword">. </span><span class="default">$kv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />        }<br />    }<br /><br />    </span><span class="default">fclose </span><span class="keyword">( </span><span class="default">$config </span><span class="keyword">);<br /><br />    </span><span class="default">parse_str </span><span class="keyword">( </span><span class="default">implode </span><span class="keyword">( </span><span class="string">'&amp;'</span><span class="keyword">, </span><span class="default">$keeper </span><span class="keyword">), </span><span class="default">$return </span><span class="keyword">);<br /><br />    return </span><span class="default">$return</span><span class="keyword">[</span><span class="string">'config'</span><span class="keyword">];<br />}<br /><br /></span><span class="comment">// usage...<br /><br /></span><span class="default">$sections </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">;<br /><br /></span><span class="default">print_r </span><span class="keyword">( </span><span class="default">$config</span><span class="keyword">-&gt;</span><span class="default">getIni </span><span class="keyword">( </span><span class="string">"C:\\services\\www\\docs\\config.php" </span><span class="keyword">),  </span><span class="default">$sections </span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.parse-ini-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.parse-ini-file.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.parse-ini-file.php" title="parse_&#8203;ini_&#8203;file">parse_&#8203;ini_&#8203;file</a>
                        </li>
                                                <li class="">
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
