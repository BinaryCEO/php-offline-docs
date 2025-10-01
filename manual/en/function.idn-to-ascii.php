<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: idn_to_ascii - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.idn-to-ascii.php">
 <link rel="shorturl" href="https://www.php.net/idn-to-ascii">
 <link rel="alternate" href="https://www.php.net/idn-to-ascii" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.intl.idn.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.intl.idn.php">
 <link rel="next" href="https://www.php.net/manual/en/function.idn-to-utf8.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.idn-to-ascii.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.idn-to-ascii.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.idn-to-ascii.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.idn-to-ascii.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.idn-to-ascii.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.idn-to-ascii.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.idn-to-ascii.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.idn-to-ascii.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.idn-to-ascii.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.idn-to-ascii.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.idn-to-ascii.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Convert domain name to IDNA ASCII form" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: idn_to_ascii - Manual" />
<meta name="twitter:description" content="Convert domain name to IDNA ASCII form" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: idn_to_ascii - Manual" />
<meta itemprop="description" content="Convert domain name to IDNA ASCII form" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Convert domain name to IDNA ASCII form" />

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
        <a href="function.idn-to-utf8.php">
          idn_to_utf8 &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.intl.idn.php">
          &laquo; IDN Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.intl.php'>intl</a></li>      <li><a href='ref.intl.idn.php'>IDN Functions</a></li>      </ul>
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
            <option value='en/function.idn-to-ascii.php' selected="selected">English</option>
            <option value='de/function.idn-to-ascii.php'>German</option>
            <option value='es/function.idn-to-ascii.php'>Spanish</option>
            <option value='fr/function.idn-to-ascii.php'>French</option>
            <option value='it/function.idn-to-ascii.php'>Italian</option>
            <option value='ja/function.idn-to-ascii.php'>Japanese</option>
            <option value='pt_BR/function.idn-to-ascii.php'>Brazilian Portuguese</option>
            <option value='ru/function.idn-to-ascii.php'>Russian</option>
            <option value='tr/function.idn-to-ascii.php'>Turkish</option>
            <option value='uk/function.idn-to-ascii.php'>Ukrainian</option>
            <option value='zh/function.idn-to-ascii.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.idn-to-ascii" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">idn_to_ascii</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8, PECL intl &gt;= 1.0.2, PECL idn &gt;= 0.1)</p><p class="refpurpose"><span class="refname">idn_to_ascii</span> &mdash; <span class="dc-title">Convert domain name to IDNA ASCII form</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.idn-to-ascii-description">
  <h3 class="title">Description</h3>
  <p class="para">Procedural style</p>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>idn_to_ascii</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$domain</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="intl.constants.php#constant.idna-default">IDNA_DEFAULT</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$variant</code><span class="initializer"> = <strong><code><a href="intl.constants.php#constant.intl-idna-variant-uts46">INTL_IDNA_VARIANT_UTS46</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$idna_info</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   This function converts a Unicode domain name to an IDNA ASCII-compatible format in lowercase.
  </p> 
  </div>


 <div class="refsect1 parameters" id="refsect1-function.idn-to-ascii-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">domain</code></dt>
     <dd>
      <p class="para">
       The domain to convert, which must be UTF-8 encoded.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       Conversion options - combination of IDNA_* constants
       (except IDNA_ERROR_* constants).
      </p>
     </dd>
    
    
     <dt><code class="parameter">variant</code></dt>
     <dd>
      <p class="para">
       Either <strong><code><a href="intl.constants.php#constant.intl-idna-variant-2003">INTL_IDNA_VARIANT_2003</a></code></strong> (deprecated as of PHP 7.2.0) for IDNA 2003 or
       <strong><code><a href="intl.constants.php#constant.intl-idna-variant-uts46">INTL_IDNA_VARIANT_UTS46</a></code></strong> (only available as of ICU 4.6) for UTS #46.
      </p>
     </dd>
    
    
     <dt><code class="parameter">idna_info</code></dt>
     <dd>
      <p class="para">
       This parameter can be used only if
       <strong><code><a href="intl.constants.php#constant.intl-idna-variant-uts46">INTL_IDNA_VARIANT_UTS46</a></code></strong> was used for
       <code class="parameter">variant</code>. In that case, it will be filled with an
       array with the keys <code class="literal">&#039;result&#039;</code>, the possibly illegal
       result of the transformation,
       <code class="literal">&#039;isTransitionalDifferent&#039;</code>, a boolean indicating
       whether the usage of the transitional mechanisms of UTS #46 either has
       or would have changed the result and <code class="literal">&#039;errors&#039;</code>,
       which is an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> representing a bitset of the error
       constants IDNA_ERROR_*.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.idn-to-ascii-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The domain name encoded in ASCII-compatible form,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.idn-to-ascii-changelog">
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
       <td>7.4.0</td>
       <td>
        The default value of <code class="parameter">variant</code> is now
        <strong><code><a href="intl.constants.php#constant.intl-idna-variant-uts46">INTL_IDNA_VARIANT_UTS46</a></code></strong> instead of the deprecated
        <strong><code><a href="intl.constants.php#constant.intl-idna-variant-2003">INTL_IDNA_VARIANT_2003</a></code></strong>.
       </td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>
        <strong><code><a href="intl.constants.php#constant.intl-idna-variant-2003">INTL_IDNA_VARIANT_2003</a></code></strong> has been deprecated; use
        <strong><code><a href="intl.constants.php#constant.intl-idna-variant-uts46">INTL_IDNA_VARIANT_UTS46</a></code></strong> instead.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-function.idn-to-ascii-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-2691">
   <p><strong>Example #1 <span class="function"><strong>idn_to_ascii()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">idn_to_ascii</span><span style="color: #007700">(</span><span style="color: #DD0000">'täst.de'</span><span style="color: #007700">); <br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <p class="para">The above example will output:</p>
  <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">xn--tst-qla.de</pre>
</div>
  </div>
  <div class="example" id="example-2692">
   <p><strong>Example #2 All-ASCII domain names are just converted to lowercase</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">idn_to_ascii</span><span style="color: #007700">(</span><span style="color: #DD0000">'Example.com'</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <p class="para">The above example will output:</p>
  <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">string(11) &quot;example.com&quot;</pre>
</div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.idn-to-ascii-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.idn-to-utf8.php" class="function" rel="rdfs-seeAlso">idn_to_utf8()</a> - Convert domain name from IDNA ASCII to Unicode</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/idn/idn-to-ascii.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.idn-to-ascii%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.idn-to-ascii&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.idn-to-ascii.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108900">  <div class="votes">
    <div id="Vu108900">
    <a href="/manual/vote-note.php?id=108900&amp;page=function.idn-to-ascii&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108900">
    <a href="/manual/vote-note.php?id=108900&amp;page=function.idn-to-ascii&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108900" title="64% like this...">
    11
    </div>
  </div>
  <a href="#108900" class="name">
  <strong class="user"><em>edible dot email at gmail dot com</em></strong></a><a class="genanchor" href="#108900"> &para;</a><div class="date" title="2012-06-03 05:08"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108900">
<div class="phpcode"><code><span class="html">The notes on this function are not very clear and a little misleading.
<br />
<br />Firstly, &lt;=5.3, you will need to make use of one of several scripts or classes available on the internet which might, or might not, require the installation of of the intl and idn PECL extensions ...and you will need to have !&lt;4.0 in order to be able to install both.
<br />
<br />Secondly, if you have &gt;=5.4 you will not require the PECL extensions.
<br />
<br />Third, use of utf8_encode() is not necessary.  In fact, it will potentially prevent idn_to_ascii() from working at all.
<br />
<br />On my setup it was necessary to change the charset in the script meta tags to UTF-8:
<br />
<br />&lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /&gt;
<br />
<br />...and to change charset_default in the php.ini file (/usr/local/lib/php.ini, whereis php.ini, find / -name php.ini):
<br />
<br />default_charset = "UTF-8"
<br />
<br />The above changes mean that idn_to_ascii() can now be used with that syntax (no need for utf8_encode()).  Previously, the function worked to convert some IDNs, but failed to convert Japanese and Cyrillic IDNs.  Further, no additional locales were enabled or added, and Apache's charset file was left unmodified.
<br />
<br />It is also important to remember only to apply the function where required, eg:
<br />
<br />idn_to_ascii(cåsino.com) // is wrong
<br />
<br />...whereas...
<br />
<br />iden_to_ascii(cåsino) // is right
<br />
<br />...and also be aware of text editors that don't support UTF-8 encoding, or the $domain = 'cåsino' value will end up as $domain = '??????' ...and the function will fail.
<br />
<br />I have found that Notepad++ easily and reliably handles UTF-8 encoding that works for this function using UTF-8 as the encoding option, not UTF-8 without BOM.</span></code></div>
  </div>
 </div>
  <div class="note" id="120917">  <div class="votes">
    <div id="Vu120917">
    <a href="/manual/vote-note.php?id=120917&amp;page=function.idn-to-ascii&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120917">
    <a href="/manual/vote-note.php?id=120917&amp;page=function.idn-to-ascii&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120917" title="70% like this...">
    7
    </div>
  </div>
  <a href="#120917" class="name">
  <strong class="user"><em>mschrieck at gmail dot com</em></strong></a><a class="genanchor" href="#120917"> &para;</a><div class="date" title="2017-03-31 01:03"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120917">
<div class="phpcode"><code><span class="html">To convert IDN Domains with the IDNA2008 definition use following command.<br /><br />idn_to_ascii('teßt.com',IDNA_NONTRANSITIONAL_TO_ASCII,INTL_IDNA_VARIANT_UTS46)<br /><br />The result is then as expected<br /><br />xn--tet-6ka.com</span></code></div>
  </div>
 </div>
  <div class="note" id="128862">  <div class="votes">
    <div id="Vu128862">
    <a href="/manual/vote-note.php?id=128862&amp;page=function.idn-to-ascii&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128862">
    <a href="/manual/vote-note.php?id=128862&amp;page=function.idn-to-ascii&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128862" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128862" class="name">
  <strong class="user"><em>alexchexes at gmail dot com</em></strong></a><a class="genanchor" href="#128862"> &para;</a><div class="date" title="2023-09-06 09:40"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128862">
<div class="phpcode"><code><span class="html">idn_to_ascii and idn_to_utf8 functions don't properly handle full URLs (i.e. with schema and paths), so here's the helper functions which handles all URLs, including ones with path but without a scheme<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Converts URLS to punycode  <br /> * It doesn't url-encodes other parts<br /> * The initial code from snipp dor ru website, here is modified version that handles urls without scheme<br /> */<br /></span><span class="keyword">function </span><span class="default">punycode_encode</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">)<br />{<br />    </span><span class="default">$no_scheme </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    if (!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^.+?:\/\//'</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">) &amp;&amp; </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) !== </span><span class="string">'//'</span><span class="keyword">) {<br />        </span><span class="default">$url </span><span class="keyword">= </span><span class="string">'//' </span><span class="keyword">. </span><span class="default">$url</span><span class="keyword">;<br />        </span><span class="default">$no_scheme </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$parts </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br /> <br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'scheme'</span><span class="keyword">]))   </span><span class="default">$out </span><span class="keyword">.= </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'scheme'</span><span class="keyword">] . </span><span class="string">':'</span><span class="keyword">;<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">'//'</span><span class="keyword">;<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">];<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'pass'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">':' </span><span class="keyword">. </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'pass'</span><span class="keyword">];<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">'@'</span><span class="keyword">;<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="default">idn_to_ascii</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">]);<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">':' </span><span class="keyword">. </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">];<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">];<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">]))    </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">'?' </span><span class="keyword">. </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">];<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'fragment'</span><span class="keyword">])) </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">'#' </span><span class="keyword">. </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'fragment'</span><span class="keyword">];<br /><br />    if (</span><span class="default">$no_scheme</span><span class="keyword">) {<br />        </span><span class="default">$out </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />    }<br /> <br />    return </span><span class="default">$out</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">punycode_decode</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">)<br />{<br />    </span><span class="default">$no_scheme </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    if (!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^.+?:\/\//'</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">) &amp;&amp; </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) !== </span><span class="string">'//'</span><span class="keyword">) {<br />        </span><span class="default">$url </span><span class="keyword">= </span><span class="string">'//' </span><span class="keyword">. </span><span class="default">$url</span><span class="keyword">;<br />        </span><span class="default">$no_scheme </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$parts </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'scheme'</span><span class="keyword">]))   </span><span class="default">$out </span><span class="keyword">.= </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'scheme'</span><span class="keyword">] . </span><span class="string">':'</span><span class="keyword">;<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">'//'</span><span class="keyword">;<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">];<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'pass'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">':' </span><span class="keyword">. </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'pass'</span><span class="keyword">];<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">'@'</span><span class="keyword">;<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="default">idn_to_utf8</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">]);<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">':' </span><span class="keyword">. </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">];<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">]))     </span><span class="default">$out </span><span class="keyword">.= </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">];<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">]))    </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">'?' </span><span class="keyword">. </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">];<br />    if (!empty(</span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'fragment'</span><span class="keyword">])) </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">'#' </span><span class="keyword">. </span><span class="default">$parts</span><span class="keyword">[</span><span class="string">'fragment'</span><span class="keyword">];<br /> <br />    if (</span><span class="default">$no_scheme</span><span class="keyword">) {<br />        </span><span class="default">$out </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />    }<br />    <br />    return </span><span class="default">$out</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129048">  <div class="votes">
    <div id="Vu129048">
    <a href="/manual/vote-note.php?id=129048&amp;page=function.idn-to-ascii&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129048">
    <a href="/manual/vote-note.php?id=129048&amp;page=function.idn-to-ascii&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129048" title="no votes...">
    0
    </div>
  </div>
  <a href="#129048" class="name">
  <strong class="user"><em>mpf at mk dot de</em></strong></a><a class="genanchor" href="#129048"> &para;</a><div class="date" title="2023-11-16 08:20"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129048">
<div class="phpcode"><code><span class="html">The documentation ist not clear what failure in the return section means. This should be substituted to something like this:<br /><br />"Returns failure if the given string could not be converted".</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.idn-to-ascii&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.idn-to-ascii.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.intl.idn.php">IDN Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.idn-to-ascii.php" title="idn_&#8203;to_&#8203;ascii">idn_&#8203;to_&#8203;ascii</a>
                        </li>
                                                <li class="">
                            <a href="function.idn-to-utf8.php" title="idn_&#8203;to_&#8203;utf8">idn_&#8203;to_&#8203;utf8</a>
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
