<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mb_convert_encoding - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mb-convert-encoding.php">
 <link rel="shorturl" href="https://www.php.net/mb-convert-encoding">
 <link rel="alternate" href="https://www.php.net/mb-convert-encoding" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mbstring.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mb-convert-case.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mb-convert-kana.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mb-convert-encoding.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mb-convert-encoding.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mb-convert-encoding.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mb-convert-encoding.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mb-convert-encoding.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mb-convert-encoding.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mb-convert-encoding.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mb-convert-encoding.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mb-convert-encoding.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mb-convert-encoding.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mb-convert-encoding.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Convert a string from one character encoding to another" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mb_convert_encoding - Manual" />
<meta name="twitter:description" content="Convert a string from one character encoding to another" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mb_convert_encoding - Manual" />
<meta itemprop="description" content="Convert a string from one character encoding to another" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Convert a string from one character encoding to another" />

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
        <a href="function.mb-convert-kana.php">
          mb_convert_kana &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mb-convert-case.php">
          &laquo; mb_convert_case        </a>
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
            <option value='en/function.mb-convert-encoding.php' selected="selected">English</option>
            <option value='de/function.mb-convert-encoding.php'>German</option>
            <option value='es/function.mb-convert-encoding.php'>Spanish</option>
            <option value='fr/function.mb-convert-encoding.php'>French</option>
            <option value='it/function.mb-convert-encoding.php'>Italian</option>
            <option value='ja/function.mb-convert-encoding.php'>Japanese</option>
            <option value='pt_BR/function.mb-convert-encoding.php'>Brazilian Portuguese</option>
            <option value='ru/function.mb-convert-encoding.php'>Russian</option>
            <option value='tr/function.mb-convert-encoding.php'>Turkish</option>
            <option value='uk/function.mb-convert-encoding.php'>Ukrainian</option>
            <option value='zh/function.mb-convert-encoding.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mb-convert-encoding" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mb_convert_encoding</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.6, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mb_convert_encoding</span> &mdash; <span class="dc-title">Convert a string from one character encoding to another</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.mb-convert-encoding-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mb_convert_encoding</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$to_encoding</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$from_encoding</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Converts <code class="parameter">string</code> from <code class="parameter">from_encoding</code>,
   or the current internal encoding, to <code class="parameter">to_encoding</code>.
   If <code class="parameter">string</code> is an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>, all its <span class="type"><a href="language.types.string.php" class="type string">string</a></span> values will be
   converted recursively.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mb-convert-encoding-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> or <span class="type"><a href="language.types.array.php" class="type array">array</a></span> to be converted.
      </p>
     </dd>
    
    
     <dt><code class="parameter">to_encoding</code></dt>
     <dd>
      <p class="para">
       The desired encoding of the result.
      </p>
     </dd>
    
    
     <dt><code class="parameter">from_encoding</code></dt>
     <dd>
      <p class="para">
       The current encoding used to interpret <code class="parameter">string</code>.
       Multiple encodings may be specified as an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> or comma separated
       list, in which case the correct encoding will be guessed using the
       same algorithm as <span class="function"><a href="function.mb-detect-encoding.php" class="function">mb_detect_encoding()</a></span>.
      </p>
      <p class="para">
       If <code class="parameter">from_encoding</code> is omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the
       <a href="mbstring.configuration.php#ini.mbstring.internal-encoding" class="link">mbstring.internal_encoding setting</a>
       will be used if set, otherwise the <a href="ini.core.php#ini.default-charset" class="link">default_charset setting</a>.
      </p>
      <p class="para">
       See <a href="mbstring.supported-encodings.php" class="link">supported encodings</a>
       for valid values of <code class="parameter">to_encoding</code>
       and <code class="parameter">from_encoding</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mb-convert-encoding-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The encoded <span class="type"><a href="language.types.string.php" class="type string">string</a></span> or <span class="type"><a href="language.types.array.php" class="type array">array</a></span> on success,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.mb-convert-encoding-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   As of PHP 8.0.0, a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the
   value of <code class="parameter">to_encoding</code> or
   <code class="parameter">from_encoding</code> is an invalid encoding.
   Prior to PHP 8.0.0, a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was emitted instead.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.mb-convert-encoding-changelog">
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
      <td>8.2.0</td>
      <td>
       <span class="function"><strong>mb_convert_encoding()</strong></span> will no longer return
       the following non text encodings:
       <code class="literal">&quot;Base64&quot;</code>, <code class="literal">&quot;QPrint&quot;</code>,
       <code class="literal">&quot;UUencode&quot;</code>, <code class="literal">&quot;HTML entities&quot;</code>,
       <code class="literal">&quot;7 bit&quot;</code> and <code class="literal">&quot;8 bit&quot;</code>.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <span class="function"><strong>mb_convert_encoding()</strong></span> will now throw a
       <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> when
       <code class="parameter">to_encoding</code> is passed an invalid encoding.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <span class="function"><strong>mb_convert_encoding()</strong></span> will now throw a
       <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> when
       <code class="parameter">from_encoding</code> is passed an invalid encoding.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">from_encoding</code> is nullable now.
      </td>
     </tr>

     <tr>
      <td>7.2.0</td>
      <td>
       This function now also accepts an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> as <code class="parameter">string</code>.
       Formerly, only <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s have been supported.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.mb-convert-encoding-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2765">
    <p><strong>Example #1 <span class="function"><strong>mb_convert_encoding()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Convert internal character encoding to SJIS */<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_convert_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #DD0000">"SJIS"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Convert EUC-JP to UTF-7 */<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_convert_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #DD0000">"UTF-7"</span><span style="color: #007700">, </span><span style="color: #DD0000">"EUC-JP"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Auto detect encoding from JIS, eucjp-win, sjis-win, then convert str to UCS-2LE */<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_convert_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #DD0000">"UCS-2LE"</span><span style="color: #007700">, </span><span style="color: #DD0000">"JIS, eucjp-win, sjis-win"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* If mbstring.language is "Japanese", "auto" is expanded to "ASCII,JIS,UTF-8,EUC-JP,SJIS" */<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_convert_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #DD0000">"EUC-JP"</span><span style="color: #007700">, </span><span style="color: #DD0000">"auto"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mb-convert-encoding-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mb-detect-order.php" class="function" rel="rdfs-seeAlso">mb_detect_order()</a> - Set/Get character encoding detection order</span></li>
    <li><span class="methodname"><a href="uconverter.transcode.php" class="methodname" rel="rdfs-seeAlso">UConverter::transcode()</a> - Convert a string from one character encoding to another</span></li>
    <li><span class="function"><a href="function.iconv.php" class="function" rel="rdfs-seeAlso">iconv()</a> - Convert a string from one character encoding to another</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mbstring/functions/mb-convert-encoding.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mb-convert-encoding%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mb-convert-encoding&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-convert-encoding.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">30 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112547">  <div class="votes">
    <div id="Vu112547">
    <a href="/manual/vote-note.php?id=112547&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112547">
    <a href="/manual/vote-note.php?id=112547&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112547" title="65% like this...">
    74
    </div>
  </div>
  <a href="#112547" class="name">
  <strong class="user"><em>josip at cubrad dot com</em></strong></a><a class="genanchor" href="#112547"> &para;</a><div class="date" title="2013-06-27 11:24"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112547">
<div class="phpcode"><code><span class="html">For my last project I needed to convert several CSV files from Windows-1250 to UTF-8, and after several days of searching around I found a function that is partially solved my problem, but it still has not transformed all the characters. So I made ​​this:<br /><br />function w1250_to_utf8($text) {<br />    // map based on:<br />    // <a href="http://konfiguracja.c0.pl/iso02vscp1250en.html" rel="nofollow" target="_blank">http://konfiguracja.c0.pl/iso02vscp1250en.html</a><br />    // <a href="http://konfiguracja.c0.pl/webpl/index_en.html#examp" rel="nofollow" target="_blank">http://konfiguracja.c0.pl/webpl/index_en.html#examp</a><br />    // <a href="http://www.htmlentities.com/html/entities/" rel="nofollow" target="_blank">http://www.htmlentities.com/html/entities/</a><br />    $map = array(<br />        chr(0x8A) =&gt; chr(0xA9),<br />        chr(0x8C) =&gt; chr(0xA6),<br />        chr(0x8D) =&gt; chr(0xAB),<br />        chr(0x8E) =&gt; chr(0xAE),<br />        chr(0x8F) =&gt; chr(0xAC),<br />        chr(0x9C) =&gt; chr(0xB6),<br />        chr(0x9D) =&gt; chr(0xBB),<br />        chr(0xA1) =&gt; chr(0xB7),<br />        chr(0xA5) =&gt; chr(0xA1),<br />        chr(0xBC) =&gt; chr(0xA5),<br />        chr(0x9F) =&gt; chr(0xBC),<br />        chr(0xB9) =&gt; chr(0xB1),<br />        chr(0x9A) =&gt; chr(0xB9),<br />        chr(0xBE) =&gt; chr(0xB5),<br />        chr(0x9E) =&gt; chr(0xBE),<br />        chr(0x80) =&gt; '&amp;euro;',<br />        chr(0x82) =&gt; '&amp;sbquo;',<br />        chr(0x84) =&gt; '&amp;bdquo;',<br />        chr(0x85) =&gt; '&amp;hellip;',<br />        chr(0x86) =&gt; '&amp;dagger;',<br />        chr(0x87) =&gt; '&amp;Dagger;',<br />        chr(0x89) =&gt; '&amp;permil;',<br />        chr(0x8B) =&gt; '&amp;lsaquo;',<br />        chr(0x91) =&gt; '&amp;lsquo;',<br />        chr(0x92) =&gt; '&amp;rsquo;',<br />        chr(0x93) =&gt; '&amp;ldquo;',<br />        chr(0x94) =&gt; '&amp;rdquo;',<br />        chr(0x95) =&gt; '&amp;bull;',<br />        chr(0x96) =&gt; '&amp;ndash;',<br />        chr(0x97) =&gt; '&amp;mdash;',<br />        chr(0x99) =&gt; '&amp;trade;',<br />        chr(0x9B) =&gt; '&amp;rsquo;',<br />        chr(0xA6) =&gt; '&amp;brvbar;',<br />        chr(0xA9) =&gt; '&amp;copy;',<br />        chr(0xAB) =&gt; '&amp;laquo;',<br />        chr(0xAE) =&gt; '&amp;reg;',<br />        chr(0xB1) =&gt; '&amp;plusmn;',<br />        chr(0xB5) =&gt; '&amp;micro;',<br />        chr(0xB6) =&gt; '&amp;para;',<br />        chr(0xB7) =&gt; '&amp;middot;',<br />        chr(0xBB) =&gt; '&amp;raquo;',<br />    );<br />    return html_entity_decode(mb_convert_encoding(strtr($text, $map), 'UTF-8', 'ISO-8859-2'), ENT_QUOTES, 'UTF-8');<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="97902">  <div class="votes">
    <div id="Vu97902">
    <a href="/manual/vote-note.php?id=97902&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97902">
    <a href="/manual/vote-note.php?id=97902&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97902" title="64% like this...">
    40
    </div>
  </div>
  <a href="#97902" class="name">
  <strong class="user"><em>regrunge at hotmail dot it</em></strong></a><a class="genanchor" href="#97902"> &para;</a><div class="date" title="2010-05-14 08:00"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97902">
<div class="phpcode"><code><span class="html">I've been trying to find the charset of a norwegian (with a lot of ø, æ, å) txt file written on a Mac, i've found it in this way:
<br />
<br /><span class="default">&lt;?php
<br />$text </span><span class="keyword">= </span><span class="string">"A strange string to pass, maybe with some ø, æ, å characters."</span><span class="keyword">;
<br />
<br />foreach(</span><span class="default">mb_list_encodings</span><span class="keyword">() as </span><span class="default">$chr</span><span class="keyword">){
<br />        echo </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="default">$chr</span><span class="keyword">).</span><span class="string">" : "</span><span class="keyword">.</span><span class="default">$chr</span><span class="keyword">.</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;    
<br /> } 
<br /></span><span class="default">?&gt;
<br /></span>
<br />The line that looks good, gives you the encoding it was written in.
<br />
<br />Hope can help someone</span></code></div>
  </div>
 </div>
  <div class="note" id="78033">  <div class="votes">
    <div id="Vu78033">
    <a href="/manual/vote-note.php?id=78033&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78033">
    <a href="/manual/vote-note.php?id=78033&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78033" title="67% like this...">
    33
    </div>
  </div>
  <a href="#78033" class="name">
  <strong class="user"><em>volker at machon dot biz</em></strong></a><a class="genanchor" href="#78033"> &para;</a><div class="date" title="2007-09-24 09:05"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom78033">
<div class="phpcode"><code><span class="html">Hey guys. For everybody who's looking for a function that is converting an iso-string to utf8 or an utf8-string to iso, here's your solution:<br /><br />public function encodeToUtf8($string) {<br />     return mb_convert_encoding($string, "UTF-8", mb_detect_encoding($string, "UTF-8, ISO-8859-1, ISO-8859-15", true));<br />}<br /><br />public function encodeToIso($string) {<br />     return mb_convert_encoding($string, "ISO-8859-1", mb_detect_encoding($string, "UTF-8, ISO-8859-1, ISO-8859-15", true));<br />}<br /><br />For me these functions are working fine. Give it a try</span></code></div>
  </div>
 </div>
  <div class="note" id="127529">  <div class="votes">
    <div id="Vu127529">
    <a href="/manual/vote-note.php?id=127529&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127529">
    <a href="/manual/vote-note.php?id=127529&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127529" title="78% like this...">
    8
    </div>
  </div>
  <a href="#127529" class="name">
  <strong class="user"><em>Rainer Perske</em></strong></a><a class="genanchor" href="#127529"> &para;</a><div class="date" title="2022-08-24 01:35"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127529">
<div class="phpcode"><code><span class="html">Text-encoding HTML-ENTITIES will be deprecated as of PHP 8.2.<br /><br />To convert all non-ASCII characters into entities (to produce pure 7-bit HTML output), I was using:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">mb_convert_encoding</span><span class="keyword">( </span><span class="default">htmlspecialchars</span><span class="keyword">( </span><span class="default">$text</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">, </span><span class="string">'UTF-8' </span><span class="keyword">), </span><span class="string">'HTML-ENTITIES'</span><span class="keyword">, </span><span class="string">'UTF-8' </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I can get the identical result with:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">mb_encode_numericentity</span><span class="keyword">( </span><span class="default">htmlentities</span><span class="keyword">( </span><span class="default">$text</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">, </span><span class="string">'UTF-8' </span><span class="keyword">), [</span><span class="default">0x80</span><span class="keyword">, </span><span class="default">0x10FFFF</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, ~</span><span class="default">0</span><span class="keyword">], </span><span class="string">'UTF-8' </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The output contains well-known named entities for some often used characters and numeric entities for the rest.</span></code></div>
  </div>
 </div>
  <div class="note" id="127968">  <div class="votes">
    <div id="Vu127968">
    <a href="/manual/vote-note.php?id=127968&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127968">
    <a href="/manual/vote-note.php?id=127968&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127968" title="76% like this...">
    9
    </div>
  </div>
  <a href="#127968" class="name">
  <strong class="user"><em>Julian Egelstaff</em></strong></a><a class="genanchor" href="#127968"> &para;</a><div class="date" title="2022-11-29 07:15"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127968">
<div class="phpcode"><code><span class="html">If you have what looks like ISO-8859-1, but it includes "smart quotes" courtesy of Microsoft software, or people cutting and pasting content from Microsoft software, then what you're actually dealing with is probably Windows-1252. Try this:<br /><br /><span class="default">&lt;?php<br />$cleanText </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="string">'Windows-1252'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The annoying part is that the auto detection (ie: the mb_detect_encoding function) will often think Windows-1252 is ISO-8859-1. Close, but no cigar. This is critical if you're then trying to do unserialize on the resulting text, because the byte count of the string needs to be perfect.</span></code></div>
  </div>
 </div>
  <div class="note" id="86927">  <div class="votes">
    <div id="Vu86927">
    <a href="/manual/vote-note.php?id=86927&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86927">
    <a href="/manual/vote-note.php?id=86927&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86927" title="64% like this...">
    13
    </div>
  </div>
  <a href="#86927" class="name">
  <strong class="user"><em>francois at bonzon point com</em></strong></a><a class="genanchor" href="#86927"> &para;</a><div class="date" title="2008-11-10 05:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86927">
<div class="phpcode"><code><span class="html">aaron, to discard unsupported characters instead of printing a ?, you might as well simply set the configuration directive:<br /><br />mbstring.substitute_character = "none"<br /><br />in your php.ini. Be sure to include the quotes around none. Or at run-time with<br /><br /><span class="default">&lt;?php<br />ini_set</span><span class="keyword">(</span><span class="string">'mbstring.substitute_character'</span><span class="keyword">, </span><span class="string">"none"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62131">  <div class="votes">
    <div id="Vu62131">
    <a href="/manual/vote-note.php?id=62131&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62131">
    <a href="/manual/vote-note.php?id=62131&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62131" title="64% like this...">
    11
    </div>
  </div>
  <a href="#62131" class="name">
  <strong class="user"><em>eion at bigfoot dot com</em></strong></a><a class="genanchor" href="#62131"> &para;</a><div class="date" title="2006-02-20 04:54"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62131">
<div class="phpcode"><code><span class="html">many people below talk about using 
<br /><span class="default">&lt;?php
<br />    mb_convert_encode</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="string">'HTML-ENTITIES'</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>to convert non-ascii code into html-readable stuff.  Due to my webserver being out of my control, I was unable to set the database character set, and whenever PHP made a copy of my $s variable that it had pulled out of the database, it would convert it to nasty latin1 automatically and not leave it in it's beautiful UTF-8 glory.
<br />
<br />So [insert korean characters here] turned into ?????.
<br />
<br />I found myself needing to pass by reference (which of course is deprecated/nonexistent in recent versions of PHP)
<br />so instead of
<br /><span class="default">&lt;?php
<br />    mb_convert_encode</span><span class="keyword">(&amp;</span><span class="default">$s</span><span class="keyword">,</span><span class="string">'HTML-ENTITIES'</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>which worked perfectly until I upgraded, so I had to use
<br /><span class="default">&lt;?php
<br />    call_user_func_array</span><span class="keyword">(</span><span class="string">'mb_convert_encoding'</span><span class="keyword">, array(&amp;</span><span class="default">$s</span><span class="keyword">,</span><span class="string">'HTML-ENTITIES'</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hope it helps someone else out</span></code></div>
  </div>
 </div>
  <div class="note" id="86878">  <div class="votes">
    <div id="Vu86878">
    <a href="/manual/vote-note.php?id=86878&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86878">
    <a href="/manual/vote-note.php?id=86878&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86878" title="60% like this...">
    13
    </div>
  </div>
  <a href="#86878" class="name">
  <strong class="user"><em>aaron at aarongough dot com</em></strong></a><a class="genanchor" href="#86878"> &para;</a><div class="date" title="2008-11-07 08:24"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86878">
<div class="phpcode"><code><span class="html">My solution below was slightly incorrect, so here is the correct version (I posted at the end of a long day, never a good idea!)<br /><br />Again, this is a quick and dirty solution to stop mb_convert_encoding from filling your string with question marks whenever it encounters an illegal character for the target encoding. <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">convert_to </span><span class="keyword">( </span><span class="default">$source</span><span class="keyword">, </span><span class="default">$target_encoding </span><span class="keyword">)<br />    {<br />    </span><span class="comment">// detect the character encoding of the incoming file<br />    </span><span class="default">$encoding </span><span class="keyword">= </span><span class="default">mb_detect_encoding</span><span class="keyword">( </span><span class="default">$source</span><span class="keyword">, </span><span class="string">"auto" </span><span class="keyword">);<br />       <br />    </span><span class="comment">// escape all of the question marks so we can remove artifacts from<br />    // the unicode conversion process<br />    </span><span class="default">$target </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">( </span><span class="string">"?"</span><span class="keyword">, </span><span class="string">"[question_mark]"</span><span class="keyword">, </span><span class="default">$source </span><span class="keyword">);<br />       <br />    </span><span class="comment">// convert the string to the target encoding<br />    </span><span class="default">$target </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">( </span><span class="default">$target</span><span class="keyword">, </span><span class="default">$target_encoding</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />       <br />    </span><span class="comment">// remove any question marks that have been introduced because of illegal characters<br />    </span><span class="default">$target </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">( </span><span class="string">"?"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$target </span><span class="keyword">);<br />       <br />    </span><span class="comment">// replace the token string "[question_mark]" with the symbol "?"<br />    </span><span class="default">$target </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">( </span><span class="string">"[question_mark]"</span><span class="keyword">, </span><span class="string">"?"</span><span class="keyword">, </span><span class="default">$target </span><span class="keyword">);<br />   <br />    return </span><span class="default">$target</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Hope this helps someone! (Admins should feel free to delete my previous, incorrect, post for clarity)<br />-A</span></code></div>
  </div>
 </div>
  <div class="note" id="110010">  <div class="votes">
    <div id="Vu110010">
    <a href="/manual/vote-note.php?id=110010&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110010">
    <a href="/manual/vote-note.php?id=110010&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110010" title="60% like this...">
    4
    </div>
  </div>
  <a href="#110010" class="name">
  <strong class="user"><em>urko at wegetit dot eu</em></strong></a><a class="genanchor" href="#110010"> &para;</a><div class="date" title="2012-09-11 06:17"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110010">
<div class="phpcode"><code><span class="html">If you are trying to generate a CSV (with extended chars) to be opened at Exel for Mac, the only that worked for me was:
<br /><span class="default">&lt;?php mb_convert_encoding</span><span class="keyword">( </span><span class="default">$CSV</span><span class="keyword">, </span><span class="string">'Windows-1252'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />I also tried this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//Separado OK, chars MAL
<br /></span><span class="default">iconv</span><span class="keyword">(</span><span class="string">'MACINTOSH'</span><span class="keyword">, </span><span class="string">'UTF8'</span><span class="keyword">, </span><span class="default">$CSV</span><span class="keyword">);
<br /></span><span class="comment">//Separado MAL, chars OK
<br /></span><span class="default">chr</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">254</span><span class="keyword">).</span><span class="default">mb_convert_encoding</span><span class="keyword">( </span><span class="default">$CSV</span><span class="keyword">, </span><span class="string">'UCS-2LE'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />But the first one didn't show extended chars correctly, and the second one, did't separe fields correctly</span></code></div>
  </div>
 </div>
  <div class="note" id="56618">  <div class="votes">
    <div id="Vu56618">
    <a href="/manual/vote-note.php?id=56618&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56618">
    <a href="/manual/vote-note.php?id=56618&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56618" title="61% like this...">
    3
    </div>
  </div>
  <a href="#56618" class="name">
  <strong class="user"><em>Stephan van der Feest</em></strong></a><a class="genanchor" href="#56618"> &para;</a><div class="date" title="2005-09-09 04:47"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56618">
<div class="phpcode"><code><span class="html">To add to the Flash conversion comment below, here's how I convert back from what I've stored in a database after converting from Flash HTML text field output, in order to load it back into a Flash HTML text field:<br /><br />function htmltoflash($htmlstr)<br />{<br />  return str_replace("&amp;lt;br /&amp;gt;","\n",<br />    str_replace("&lt;","&amp;lt;",<br />      str_replace("&gt;","&amp;gt;",<br />        mb_convert_encoding(html_entity_decode($htmlstr),<br />        "UTF-8","ISO-8859-1"))));<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="92426">  <div class="votes">
    <div id="Vu92426">
    <a href="/manual/vote-note.php?id=92426&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92426">
    <a href="/manual/vote-note.php?id=92426&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92426" title="55% like this...">
    3
    </div>
  </div>
  <a href="#92426" class="name">
  <strong class="user"><em>Daniel Trebbien</em></strong></a><a class="genanchor" href="#92426"> &para;</a><div class="date" title="2009-07-23 11:25"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92426">
<div class="phpcode"><code><span class="html">Note that `mb_convert_encoding($val, 'HTML-ENTITIES')` does not escape '\'', '"', '&lt;', '&gt;', or '&amp;'.</span></code></div>
  </div>
 </div>
  <div class="note" id="91601">  <div class="votes">
    <div id="Vu91601">
    <a href="/manual/vote-note.php?id=91601&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91601">
    <a href="/manual/vote-note.php?id=91601&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91601" title="55% like this...">
    1
    </div>
  </div>
  <a href="#91601" class="name">
  <strong class="user"><em>me at gsnedders dot com</em></strong></a><a class="genanchor" href="#91601"> &para;</a><div class="date" title="2009-06-18 03:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91601">
<div class="phpcode"><code><span class="html">It appears that when dealing with an unknown "from encoding" the function will both throw an E_WARNING and proceed to convert the string from ISO-8859-1 to the "to encoding".</span></code></div>
  </div>
 </div>
  <div class="note" id="122952">  <div class="votes">
    <div id="Vu122952">
    <a href="/manual/vote-note.php?id=122952&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122952">
    <a href="/manual/vote-note.php?id=122952&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122952" title="53% like this...">
    1
    </div>
  </div>
  <a href="#122952" class="name">
  <strong class="user"><em>vasiliauskas dot agnius at gmail dot com</em></strong></a><a class="genanchor" href="#122952"> &para;</a><div class="date" title="2018-07-17 08:16"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122952">
<div class="phpcode"><code><span class="html">When you need to convert from HTML-ENTITIES, but your UTF-8 string is partially broken (not all chars in UTF-8) - in this case passing string to mb_convert_encoding($string, 'UTF-8', 'HTML-ENTITIES'); - corrupts chars in string even more. In this case you need to replace html entities gradually to preserve character good encoding. I wrote such closure for this job :<br /><span class="default">&lt;?php<br />$decode_entities </span><span class="keyword">= function(</span><span class="default">$string</span><span class="keyword">) {<br />        </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/&amp;#?\w+;/"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$entities</span><span class="keyword">, </span><span class="default">PREG_SET_ORDER</span><span class="keyword">);<br />        </span><span class="default">$entities </span><span class="keyword">= </span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">array_column</span><span class="keyword">(</span><span class="default">$entities</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br />        foreach (</span><span class="default">$entities </span><span class="keyword">as </span><span class="default">$entity</span><span class="keyword">) {<br />            </span><span class="default">$decoded </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$entity</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="string">'HTML-ENTITIES'</span><span class="keyword">);<br />            </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$entity</span><span class="keyword">, </span><span class="default">$decoded</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />        }<br />        return </span><span class="default">$string</span><span class="keyword">;<br />    };<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80620">  <div class="votes">
    <div id="Vu80620">
    <a href="/manual/vote-note.php?id=80620&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80620">
    <a href="/manual/vote-note.php?id=80620&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80620" title="52% like this...">
    1
    </div>
  </div>
  <a href="#80620" class="name">
  <strong class="user"><em>katzlbtjunk at hotmail dot com</em></strong></a><a class="genanchor" href="#80620"> &para;</a><div class="date" title="2008-01-25 04:36"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80620">
<div class="phpcode"><code><span class="html">Clean a string for use as filename by simply replacing all unwanted characters with underscore (ASCII converts to 7bit). It removes slightly more chars than necessary. Hope its useful. <br /><br />$fileName = 'Test:!"$%&amp;/()=ÖÄÜöäü&lt;&lt;';<br />echo strtr(mb_convert_encoding($fileName,'ASCII'), <br />    ' ,;:?*#!§$%&amp;/(){}&lt;&gt;=`´|\\\'"', <br />    '____________________________');</span></code></div>
  </div>
 </div>
  <div class="note" id="126854">  <div class="votes">
    <div id="Vu126854">
    <a href="/manual/vote-note.php?id=126854&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126854">
    <a href="/manual/vote-note.php?id=126854&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126854" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126854" class="name">
  <strong class="user"><em>bmxmale at qwerty dot re</em></strong></a><a class="genanchor" href="#126854"> &para;</a><div class="date" title="2022-02-15 10:00"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126854">
<div class="phpcode"><code><span class="html">/**<br /> * Convert Windows-1250 to UTF-8<br /> * Based on <a href="https://www.php.net/manual/en/function.mb-convert-encoding.php#112547" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.mb-convert-encoding.php#112547</a><br /> */<br />class TextConverter<br />{<br />    private const ENCODING_TO = 'UTF-8';<br />    private const ENCODING_FROM = 'ISO-8859-2';<br /><br />    private array $mapChrChr = [<br />        0x8A =&gt; 0xA9,<br />        0x8C =&gt; 0xA6,<br />        0x8D =&gt; 0xAB,<br />        0x8E =&gt; 0xAE,<br />        0x8F =&gt; 0xAC,<br />        0x9C =&gt; 0xB6,<br />        0x9D =&gt; 0xBB,<br />        0xA1 =&gt; 0xB7,<br />        0xA5 =&gt; 0xA1,<br />        0xBC =&gt; 0xA5,<br />        0x9F =&gt; 0xBC,<br />        0xB9 =&gt; 0xB1,<br />        0x9A =&gt; 0xB9,<br />        0xBE =&gt; 0xB5,<br />        0x9E =&gt; 0xBE<br />    ];<br /><br />    private array $mapChrString = [<br />        0x80 =&gt; '&amp;euro;',<br />        0x82 =&gt; '&amp;sbquo;',<br />        0x84 =&gt; '&amp;bdquo;',<br />        0x85 =&gt; '&amp;hellip;',<br />        0x86 =&gt; '&amp;dagger;',<br />        0x87 =&gt; '&amp;Dagger;',<br />        0x89 =&gt; '&amp;permil;',<br />        0x8B =&gt; '&amp;lsaquo;',<br />        0x91 =&gt; '&amp;lsquo;',<br />        0x92 =&gt; '&amp;rsquo;',<br />        0x93 =&gt; '&amp;ldquo;',<br />        0x94 =&gt; '&amp;rdquo;',<br />        0x95 =&gt; '&amp;bull;',<br />        0x96 =&gt; '&amp;ndash;',<br />        0x97 =&gt; '&amp;mdash;',<br />        0x99 =&gt; '&amp;trade;',<br />        0x9B =&gt; '&amp;rsquo;',<br />        0xA6 =&gt; '&amp;brvbar;',<br />        0xA9 =&gt; '&amp;copy;',<br />        0xAB =&gt; '&amp;laquo;',<br />        0xAE =&gt; '&amp;reg;',<br />        0xB1 =&gt; '&amp;plusmn;',<br />        0xB5 =&gt; '&amp;micro;',<br />        0xB6 =&gt; '&amp;para;',<br />        0xB7 =&gt; '&amp;middot;',<br />        0xBB =&gt; '&amp;raquo;'<br />    ];<br /><br />    /**<br />     * @param $text<br />     * @return string<br />     */<br />    public function execute($text): string<br />    {<br />        $map = $this-&gt;prepareMap();<br /><br />        return html_entity_decode(<br />            mb_convert_encoding(strtr($text, $map), self::ENCODING_TO, self::ENCODING_FROM),<br />            ENT_QUOTES,<br />            self::ENCODING_TO<br />        );<br />    }<br /><br />    /**<br />     * @return array<br />     */<br />    private function prepareMap(): array<br />    {<br />        $maps[] = $this-&gt;arrayMapAssoc(function ($k, $v) {<br />            return [chr($k), chr($v)];<br />        }, $this-&gt;mapChrChr);<br /><br />        $maps[] = $this-&gt;arrayMapAssoc(function ($k, $v) {<br />            return [chr($k), $v];<br />        }, $this-&gt;mapChrString);<br /><br />        return array_merge([], ...$maps);<br />    }<br /><br />    /**<br />     * @param callable $function<br />     * @param array $array<br />     * @return array<br />     */<br />    private function arrayMapAssoc(callable $function, array $array): array<br />    {<br />        return array_column(<br />            array_map(<br />                $function,<br />                array_keys($array),<br />                $array<br />            ),<br />            1,<br />            0<br />        );<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="87991">  <div class="votes">
    <div id="Vu87991">
    <a href="/manual/vote-note.php?id=87991&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87991">
    <a href="/manual/vote-note.php?id=87991&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87991" title="50% like this...">
    0
    </div>
  </div>
  <a href="#87991" class="name">
  <strong class="user"><em>chzhang at gmail dot com</em></strong></a><a class="genanchor" href="#87991"> &para;</a><div class="date" title="2009-01-05 12:34"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87991">
<div class="phpcode"><code><span class="html">instead of ini_set(), you can try this<br /><br />mb_substitute_character("none");</span></code></div>
  </div>
 </div>
  <div class="note" id="29256">  <div class="votes">
    <div id="Vu29256">
    <a href="/manual/vote-note.php?id=29256&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29256">
    <a href="/manual/vote-note.php?id=29256&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29256" title="50% like this...">
    0
    </div>
  </div>
  <a href="#29256" class="name">
  <strong class="user"><em>lanka at eurocom dot od dot ua</em></strong></a><a class="genanchor" href="#29256"> &para;</a><div class="date" title="2003-02-07 08:03"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29256">
<div class="phpcode"><code><span class="html">Another sample of recoding without MultiByte enabling.<br />(Russian koi-&gt;win, if input in win-encoding already, function recode() returns unchanged string)<br /><br /><span class="default">&lt;?php<br />  </span><span class="comment">// 0 - win<br />  // 1 - koi<br />  </span><span class="keyword">function </span><span class="default">detect_encoding</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    </span><span class="default">$win </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$koi </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />      if( </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) &gt;</span><span class="default">224 </span><span class="keyword">&amp;&amp; </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) &lt; </span><span class="default">255</span><span class="keyword">) </span><span class="default">$win</span><span class="keyword">++;<br />      if( </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) &gt;</span><span class="default">192 </span><span class="keyword">&amp;&amp; </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) &lt; </span><span class="default">223</span><span class="keyword">) </span><span class="default">$koi</span><span class="keyword">++;<br />    }<br /><br />    if( </span><span class="default">$win </span><span class="keyword">&lt; </span><span class="default">$koi </span><span class="keyword">) {<br />      return </span><span class="default">1</span><span class="keyword">;<br />    } else return </span><span class="default">0</span><span class="keyword">;<br /><br />  }<br /><br />  </span><span class="comment">// recodes koi to win<br />  </span><span class="keyword">function </span><span class="default">koi_to_win</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br /><br />    </span><span class="default">$kw </span><span class="keyword">= array(</span><span class="default">128</span><span class="keyword">, </span><span class="default">129</span><span class="keyword">, </span><span class="default">130</span><span class="keyword">, </span><span class="default">131</span><span class="keyword">, </span><span class="default">132</span><span class="keyword">, </span><span class="default">133</span><span class="keyword">, </span><span class="default">134</span><span class="keyword">, </span><span class="default">135</span><span class="keyword">, </span><span class="default">136</span><span class="keyword">, </span><span class="default">137</span><span class="keyword">, </span><span class="default">138</span><span class="keyword">, </span><span class="default">139</span><span class="keyword">, </span><span class="default">140</span><span class="keyword">, </span><span class="default">141</span><span class="keyword">, </span><span class="default">142</span><span class="keyword">, </span><span class="default">143</span><span class="keyword">, </span><span class="default">144</span><span class="keyword">, </span><span class="default">145</span><span class="keyword">, </span><span class="default">146</span><span class="keyword">, </span><span class="default">147</span><span class="keyword">, </span><span class="default">148</span><span class="keyword">, </span><span class="default">149</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">151</span><span class="keyword">, </span><span class="default">152</span><span class="keyword">, </span><span class="default">153</span><span class="keyword">, </span><span class="default">154</span><span class="keyword">, </span><span class="default">155</span><span class="keyword">, </span><span class="default">156</span><span class="keyword">, </span><span class="default">157</span><span class="keyword">, </span><span class="default">158</span><span class="keyword">, </span><span class="default">159</span><span class="keyword">, </span><span class="default">160</span><span class="keyword">, </span><span class="default">161</span><span class="keyword">, </span><span class="default">162</span><span class="keyword">, </span><span class="default">163</span><span class="keyword">, </span><span class="default">164</span><span class="keyword">, </span><span class="default">165</span><span class="keyword">, </span><span class="default">166</span><span class="keyword">, </span><span class="default">167</span><span class="keyword">, </span><span class="default">168</span><span class="keyword">, </span><span class="default">169</span><span class="keyword">, </span><span class="default">170</span><span class="keyword">, </span><span class="default">171</span><span class="keyword">, </span><span class="default">172</span><span class="keyword">, </span><span class="default">173</span><span class="keyword">, </span><span class="default">174</span><span class="keyword">, </span><span class="default">175</span><span class="keyword">, </span><span class="default">176</span><span class="keyword">, </span><span class="default">177</span><span class="keyword">, </span><span class="default">178</span><span class="keyword">, </span><span class="default">179</span><span class="keyword">, </span><span class="default">180</span><span class="keyword">, </span><span class="default">181</span><span class="keyword">, </span><span class="default">182</span><span class="keyword">, </span><span class="default">183</span><span class="keyword">,  </span><span class="default">184</span><span class="keyword">, </span><span class="default">185</span><span class="keyword">, </span><span class="default">186</span><span class="keyword">, </span><span class="default">187</span><span class="keyword">, </span><span class="default">188</span><span class="keyword">, </span><span class="default">189</span><span class="keyword">, </span><span class="default">190</span><span class="keyword">, </span><span class="default">191</span><span class="keyword">, </span><span class="default">254</span><span class="keyword">, </span><span class="default">224</span><span class="keyword">, </span><span class="default">225</span><span class="keyword">, </span><span class="default">246</span><span class="keyword">, </span><span class="default">228</span><span class="keyword">, </span><span class="default">229</span><span class="keyword">, </span><span class="default">244</span><span class="keyword">, </span><span class="default">227</span><span class="keyword">, </span><span class="default">245</span><span class="keyword">, </span><span class="default">232</span><span class="keyword">, </span><span class="default">233</span><span class="keyword">, </span><span class="default">234</span><span class="keyword">, </span><span class="default">235</span><span class="keyword">, </span><span class="default">236</span><span class="keyword">, </span><span class="default">237</span><span class="keyword">, </span><span class="default">238</span><span class="keyword">, </span><span class="default">239</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">240</span><span class="keyword">, </span><span class="default">241</span><span class="keyword">, </span><span class="default">242</span><span class="keyword">, </span><span class="default">243</span><span class="keyword">, </span><span class="default">230</span><span class="keyword">, </span><span class="default">226</span><span class="keyword">, </span><span class="default">252</span><span class="keyword">, </span><span class="default">251</span><span class="keyword">, </span><span class="default">231</span><span class="keyword">, </span><span class="default">248</span><span class="keyword">, </span><span class="default">253</span><span class="keyword">, </span><span class="default">249</span><span class="keyword">, </span><span class="default">247</span><span class="keyword">, </span><span class="default">250</span><span class="keyword">, </span><span class="default">222</span><span class="keyword">, </span><span class="default">192</span><span class="keyword">, </span><span class="default">193</span><span class="keyword">, </span><span class="default">214</span><span class="keyword">, </span><span class="default">196</span><span class="keyword">, </span><span class="default">197</span><span class="keyword">, </span><span class="default">212</span><span class="keyword">, </span><span class="default">195</span><span class="keyword">, </span><span class="default">213</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">201</span><span class="keyword">, </span><span class="default">202</span><span class="keyword">, </span><span class="default">203</span><span class="keyword">, </span><span class="default">204</span><span class="keyword">, </span><span class="default">205</span><span class="keyword">, </span><span class="default">206</span><span class="keyword">, </span><span class="default">207</span><span class="keyword">, </span><span class="default">223</span><span class="keyword">, </span><span class="default">208</span><span class="keyword">, </span><span class="default">209</span><span class="keyword">, </span><span class="default">210</span><span class="keyword">, </span><span class="default">211</span><span class="keyword">, </span><span class="default">198</span><span class="keyword">, </span><span class="default">194</span><span class="keyword">, </span><span class="default">220</span><span class="keyword">, </span><span class="default">219</span><span class="keyword">, </span><span class="default">199</span><span class="keyword">, </span><span class="default">216</span><span class="keyword">, </span><span class="default">221</span><span class="keyword">, </span><span class="default">217</span><span class="keyword">, </span><span class="default">215</span><span class="keyword">, </span><span class="default">218</span><span class="keyword">);<br />    </span><span class="default">$wk </span><span class="keyword">= array(</span><span class="default">128</span><span class="keyword">, </span><span class="default">129</span><span class="keyword">, </span><span class="default">130</span><span class="keyword">, </span><span class="default">131</span><span class="keyword">, </span><span class="default">132</span><span class="keyword">, </span><span class="default">133</span><span class="keyword">, </span><span class="default">134</span><span class="keyword">, </span><span class="default">135</span><span class="keyword">, </span><span class="default">136</span><span class="keyword">, </span><span class="default">137</span><span class="keyword">, </span><span class="default">138</span><span class="keyword">, </span><span class="default">139</span><span class="keyword">, </span><span class="default">140</span><span class="keyword">, </span><span class="default">141</span><span class="keyword">, </span><span class="default">142</span><span class="keyword">, </span><span class="default">143</span><span class="keyword">, </span><span class="default">144</span><span class="keyword">, </span><span class="default">145</span><span class="keyword">, </span><span class="default">146</span><span class="keyword">, </span><span class="default">147</span><span class="keyword">, </span><span class="default">148</span><span class="keyword">, </span><span class="default">149</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">151</span><span class="keyword">, </span><span class="default">152</span><span class="keyword">, </span><span class="default">153</span><span class="keyword">, </span><span class="default">154</span><span class="keyword">, </span><span class="default">155</span><span class="keyword">, </span><span class="default">156</span><span class="keyword">, </span><span class="default">157</span><span class="keyword">, </span><span class="default">158</span><span class="keyword">, </span><span class="default">159</span><span class="keyword">, </span><span class="default">160</span><span class="keyword">, </span><span class="default">161</span><span class="keyword">, </span><span class="default">162</span><span class="keyword">, </span><span class="default">163</span><span class="keyword">, </span><span class="default">164</span><span class="keyword">, </span><span class="default">165</span><span class="keyword">, </span><span class="default">166</span><span class="keyword">, </span><span class="default">167</span><span class="keyword">, </span><span class="default">168</span><span class="keyword">, </span><span class="default">169</span><span class="keyword">, </span><span class="default">170</span><span class="keyword">, </span><span class="default">171</span><span class="keyword">, </span><span class="default">172</span><span class="keyword">, </span><span class="default">173</span><span class="keyword">, </span><span class="default">174</span><span class="keyword">, </span><span class="default">175</span><span class="keyword">, </span><span class="default">176</span><span class="keyword">, </span><span class="default">177</span><span class="keyword">, </span><span class="default">178</span><span class="keyword">, </span><span class="default">179</span><span class="keyword">, </span><span class="default">180</span><span class="keyword">, </span><span class="default">181</span><span class="keyword">, </span><span class="default">182</span><span class="keyword">, </span><span class="default">183</span><span class="keyword">,  </span><span class="default">184</span><span class="keyword">, </span><span class="default">185</span><span class="keyword">, </span><span class="default">186</span><span class="keyword">, </span><span class="default">187</span><span class="keyword">, </span><span class="default">188</span><span class="keyword">, </span><span class="default">189</span><span class="keyword">, </span><span class="default">190</span><span class="keyword">, </span><span class="default">191</span><span class="keyword">, </span><span class="default">225</span><span class="keyword">, </span><span class="default">226</span><span class="keyword">, </span><span class="default">247</span><span class="keyword">, </span><span class="default">231</span><span class="keyword">, </span><span class="default">228</span><span class="keyword">, </span><span class="default">229</span><span class="keyword">, </span><span class="default">246</span><span class="keyword">, </span><span class="default">250</span><span class="keyword">, </span><span class="default">233</span><span class="keyword">, </span><span class="default">234</span><span class="keyword">, </span><span class="default">235</span><span class="keyword">, </span><span class="default">236</span><span class="keyword">, </span><span class="default">237</span><span class="keyword">, </span><span class="default">238</span><span class="keyword">, </span><span class="default">239</span><span class="keyword">, </span><span class="default">240</span><span class="keyword">, </span><span class="default">242</span><span class="keyword">,  </span><span class="default">243</span><span class="keyword">, </span><span class="default">244</span><span class="keyword">, </span><span class="default">245</span><span class="keyword">, </span><span class="default">230</span><span class="keyword">, </span><span class="default">232</span><span class="keyword">, </span><span class="default">227</span><span class="keyword">, </span><span class="default">254</span><span class="keyword">, </span><span class="default">251</span><span class="keyword">, </span><span class="default">253</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">249</span><span class="keyword">, </span><span class="default">248</span><span class="keyword">, </span><span class="default">252</span><span class="keyword">, </span><span class="default">224</span><span class="keyword">, </span><span class="default">241</span><span class="keyword">, </span><span class="default">193</span><span class="keyword">, </span><span class="default">194</span><span class="keyword">, </span><span class="default">215</span><span class="keyword">, </span><span class="default">199</span><span class="keyword">, </span><span class="default">196</span><span class="keyword">, </span><span class="default">197</span><span class="keyword">, </span><span class="default">214</span><span class="keyword">, </span><span class="default">218</span><span class="keyword">, </span><span class="default">201</span><span class="keyword">, </span><span class="default">202</span><span class="keyword">, </span><span class="default">203</span><span class="keyword">, </span><span class="default">204</span><span class="keyword">, </span><span class="default">205</span><span class="keyword">, </span><span class="default">206</span><span class="keyword">, </span><span class="default">207</span><span class="keyword">, </span><span class="default">208</span><span class="keyword">, </span><span class="default">210</span><span class="keyword">, </span><span class="default">211</span><span class="keyword">, </span><span class="default">212</span><span class="keyword">, </span><span class="default">213</span><span class="keyword">, </span><span class="default">198</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">195</span><span class="keyword">, </span><span class="default">222</span><span class="keyword">, </span><span class="default">219</span><span class="keyword">, </span><span class="default">221</span><span class="keyword">, </span><span class="default">223</span><span class="keyword">, </span><span class="default">217</span><span class="keyword">, </span><span class="default">216</span><span class="keyword">, </span><span class="default">220</span><span class="keyword">, </span><span class="default">192</span><span class="keyword">, </span><span class="default">209</span><span class="keyword">);<br /><br />    </span><span class="default">$end </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />    </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    do {<br />      </span><span class="default">$c </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">[</span><span class="default">$pos</span><span class="keyword">]);<br />      if (</span><span class="default">$c</span><span class="keyword">&gt;</span><span class="default">128</span><span class="keyword">) {<br />        </span><span class="default">$string</span><span class="keyword">[</span><span class="default">$pos</span><span class="keyword">] = </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$kw</span><span class="keyword">[</span><span class="default">$c</span><span class="keyword">-</span><span class="default">128</span><span class="keyword">]);<br />      }<br /><br />    } while (++</span><span class="default">$pos </span><span class="keyword">&lt; </span><span class="default">$end</span><span class="keyword">);<br /><br />    return </span><span class="default">$string</span><span class="keyword">;<br />  }<br /><br />  function </span><span class="default">recode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br /><br />    </span><span class="default">$enc </span><span class="keyword">= </span><span class="default">detect_encoding</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    if (</span><span class="default">$enc</span><span class="keyword">==</span><span class="default">1</span><span class="keyword">) {<br />      </span><span class="default">$str </span><span class="keyword">= </span><span class="default">koi_to_win</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    }<br /><br />    return </span><span class="default">$str</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118560">  <div class="votes">
    <div id="Vu118560">
    <a href="/manual/vote-note.php?id=118560&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118560">
    <a href="/manual/vote-note.php?id=118560&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118560" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#118560" class="name">
  <strong class="user"><em>nicole</em></strong></a><a class="genanchor" href="#118560"> &para;</a><div class="date" title="2015-12-28 12:37"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118560">
<div class="phpcode"><code><span class="html">// convert UTF8 to DOS = CP850 <br />//<br />// $utf8_text=UTF8-Formatted text;<br />// $dos=CP850-Formatted text;<br /><br />// have fun<br /><br />$dos = mb_convert_encoding($utf8_text, "CP850", mb_detect_encoding($utf8_text, "UTF-8, CP850, ISO-8859-15", true));</span></code></div>
  </div>
 </div>
  <div class="note" id="58677">  <div class="votes">
    <div id="Vu58677">
    <a href="/manual/vote-note.php?id=58677&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58677">
    <a href="/manual/vote-note.php?id=58677&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58677" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#58677" class="name">
  <strong class="user"><em>Tom Class</em></strong></a><a class="genanchor" href="#58677"> &para;</a><div class="date" title="2005-11-11 07:35"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58677">
<div class="phpcode"><code><span class="html">Why did you use the php html encode functions? mbstring has it's own Encoding which is (as far as I tested it) much more usefull:<br /><br />HTML-ENTITIES<br /><br />Example:<br /><br />$text = mb_convert_encoding($text, 'HTML-ENTITIES', "UTF-8");</span></code></div>
  </div>
 </div>
  <div class="note" id="118324">  <div class="votes">
    <div id="Vu118324">
    <a href="/manual/vote-note.php?id=118324&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118324">
    <a href="/manual/vote-note.php?id=118324&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118324" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#118324" class="name">
  <strong class="user"><em>Daniel</em></strong></a><a class="genanchor" href="#118324"> &para;</a><div class="date" title="2015-11-17 04:25"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118324">
<div class="phpcode"><code><span class="html">If you are attempting to convert "UTF-8" text to "ISO-8859-1" and the result is always returning in "ASCII", place the following line of code before the mb_convert_encoding:<br /><br />mb_detect_order(array('UTF-8', 'ISO-8859-1'));<br /><br />It is necessary to force a specific search order for the conversion to work</span></code></div>
  </div>
 </div>
  <div class="note" id="67981">  <div class="votes">
    <div id="Vu67981">
    <a href="/manual/vote-note.php?id=67981&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67981">
    <a href="/manual/vote-note.php?id=67981&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67981" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#67981" class="name">
  <strong class="user"><em>mac.com@nemo</em></strong></a><a class="genanchor" href="#67981"> &para;</a><div class="date" title="2006-07-08 07:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67981">
<div class="phpcode"><code><span class="html">For those wanting to convert from $set to MacRoman, use iconv():<br /><br /><span class="default">&lt;?php<br /><br />$string </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">(</span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="string">'macintosh'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />('macintosh' is the IANA name for the MacRoman character set.)</span></code></div>
  </div>
 </div>
  <div class="note" id="71872">  <div class="votes">
    <div id="Vu71872">
    <a href="/manual/vote-note.php?id=71872&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71872">
    <a href="/manual/vote-note.php?id=71872&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71872" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#71872" class="name">
  <strong class="user"><em>David Hull</em></strong></a><a class="genanchor" href="#71872"> &para;</a><div class="date" title="2006-12-20 10:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71872">
<div class="phpcode"><code><span class="html">As an alternative to Johannes's suggestion for converting strings from other character sets to a 7bit representation while not just deleting latin diacritics, you might try this:<br /><br /><span class="default">&lt;?php<br />$text </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">(</span><span class="default">$from_enc</span><span class="keyword">, </span><span class="string">'US-ASCII//TRANSLIT'</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The only disadvantage is that it does not convert "ä" to "ae", but it handles punctuation and other special characters better.<br />-- <br />David</span></code></div>
  </div>
 </div>
  <div class="note" id="77262">  <div class="votes">
    <div id="Vu77262">
    <a href="/manual/vote-note.php?id=77262&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77262">
    <a href="/manual/vote-note.php?id=77262&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77262" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#77262" class="name">
  <strong class="user"><em>aofg</em></strong></a><a class="genanchor" href="#77262"> &para;</a><div class="date" title="2007-08-21 06:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77262">
<div class="phpcode"><code><span class="html">When converting Japanese strings to ISO-2022-JP or JIS on PHP &gt;= 5.2.1, you can use "ISO-2022-JP-MS" instead of them.<br />Kishu-Izon (platform dependent) characters are converted correctly with the encoding, as same as with eucJP-win or with SJIS-win.</span></code></div>
  </div>
 </div>
  <div class="note" id="39549">  <div class="votes">
    <div id="Vu39549">
    <a href="/manual/vote-note.php?id=39549&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39549">
    <a href="/manual/vote-note.php?id=39549&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39549" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#39549" class="name">
  <strong class="user"><em>jamespilcher1 - hotmail</em></strong></a><a class="genanchor" href="#39549"> &para;</a><div class="date" title="2004-02-01 07:55"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39549">
<div class="phpcode"><code><span class="html">be careful when converting from iso-8859-1 to utf-8.<br /><br />even if you explicitly specify the character encoding of a page as iso-8859-1(via headers and strict xml defs), windows 2000 will ignore that and interpret it as whatever character set it has natively installed. <br /><br />for example, i wrote char #128 into a page, with char encoding iso-8859-1, and it displayed in internet explorer (&amp; mozilla) as a euro symbol.<br /><br />it should have displayed a box, denoting that char #128 is undefined in iso-8859-1. The problem was it was displaying in "Windows: western europe" (my native character set).<br /><br />this led to confusion when i tried to convert this euro to UTF-8 via mb_convert_encoding()  <br /><br />IE displays UTF-8 correctly- and because PHP correctly converted #128 into a box in UTF-8, IE would show a box.<br /><br />so all i saw was mb_convert_encoding() converting a euro symbol into a box. It took me a long time to figure out what was going on.</span></code></div>
  </div>
 </div>
  <div class="note" id="83228">  <div class="votes">
    <div id="Vu83228">
    <a href="/manual/vote-note.php?id=83228&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83228">
    <a href="/manual/vote-note.php?id=83228&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83228" title="37% like this...">
    -4
    </div>
  </div>
  <a href="#83228" class="name">
  <strong class="user"><em>nospam at nihonbunka dot com</em></strong></a><a class="genanchor" href="#83228"> &para;</a><div class="date" title="2008-05-15 06:51"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83228">
<div class="phpcode"><code><span class="html">rodrigo at bb2 dot co dot jp wrote that inconv works better than mb_convert_encoding, I find that when converting from uft8 to shift_jis <br />$conv_str = mb_convert_encoding($str,$toCS,$fromCS); <br />works while<br />$conv_str = iconv($fromCS,$toCS.'//IGNORE',$str); <br />removes tildes from $str.</span></code></div>
  </div>
 </div>
  <div class="note" id="99571">  <div class="votes">
    <div id="Vu99571">
    <a href="/manual/vote-note.php?id=99571&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99571">
    <a href="/manual/vote-note.php?id=99571&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99571" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#99571" class="name">
  <strong class="user"><em>gullevek at gullevek dot org</em></strong></a><a class="genanchor" href="#99571"> &para;</a><div class="date" title="2010-08-25 12:27"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99571">
<div class="phpcode"><code><span class="html">If you want to convert japanese to ISO-2022-JP it is highly recommended to use ISO-2022-JP-MS as the target encoding instead. This includes the extended character set and avoids ? in the text. For example the often used "1 in a circle" ① will be correctly converted then.</span></code></div>
  </div>
 </div>
  <div class="note" id="85079">  <div class="votes">
    <div id="Vu85079">
    <a href="/manual/vote-note.php?id=85079&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85079">
    <a href="/manual/vote-note.php?id=85079&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85079" title="35% like this...">
    -5
    </div>
  </div>
  <a href="#85079" class="name">
  <strong class="user"><em>StigC</em></strong></a><a class="genanchor" href="#85079"> &para;</a><div class="date" title="2008-08-13 03:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85079">
<div class="phpcode"><code><span class="html">For the php-noobs (like me) - working with flash and php.<br /><br />Here's a simple snippet of code that worked great for me, getting php to show special Danish characters, from a Flash email form:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Name Escape<br /></span><span class="default">$escName </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">"Name"</span><span class="keyword">], </span><span class="string">"ISO-8859-1"</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br /><br /></span><span class="comment">// message escape<br /></span><span class="default">$escMessage </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">"Message"</span><span class="keyword">], </span><span class="string">"ISO-8859-1"</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br /><br /></span><span class="comment">// Headers.. and so on...<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80424">  <div class="votes">
    <div id="Vu80424">
    <a href="/manual/vote-note.php?id=80424&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80424">
    <a href="/manual/vote-note.php?id=80424&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80424" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#80424" class="name">
  <strong class="user"><em>rodrigo at bb2 dot co dot jp</em></strong></a><a class="genanchor" href="#80424"> &para;</a><div class="date" title="2008-01-15 03:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80424">
<div class="phpcode"><code><span class="html">For those who can´t use mb_convert_encoding() to convert from one charset to another as a metter of lower version of php, try iconv().<br /><br />I had this problem converting to japanese charset:<br /><br />$txt=mb_convert_encoding($txt,'SJIS',$this-&gt;encode);<br /><br />And I could fix it by using this:<br /><br />$txt = iconv('UTF-8', 'SJIS', $txt);<br /><br />Maybe it´s helpfull for someone else! ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="69412">  <div class="votes">
    <div id="Vu69412">
    <a href="/manual/vote-note.php?id=69412&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69412">
    <a href="/manual/vote-note.php?id=69412&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69412" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#69412" class="name">
  <strong class="user"><em>phpdoc at jeudi dot de</em></strong></a><a class="genanchor" href="#69412"> &para;</a><div class="date" title="2006-09-05 06:46"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69412">
<div class="phpcode"><code><span class="html">I\&amp;#039;d like to share some code to convert latin diacritics to their
<br />traditional 7bit representation, like, for example,
<br />
<br />- &amp;agrave;,&amp;ccedil;,&amp;eacute;,&amp;icirc;,... to a,c,e,i,...
<br />- &amp;szlig; to ss
<br />- &amp;auml;,&amp;Auml;,... to ae,Ae,...
<br />- &amp;euml;,... to e,...
<br />
<br />(mb_convert \&amp;quot;7bit\&amp;quot; would simply delete any offending characters). 
<br />
<br />I might have missed on your country\&amp;#039;s typographic 
<br />conventions--correct me then. 
<br />&amp;lt;?php
<br />/**
<br /> * @args string $text line of encoded text
<br /> *       string $from_enc (encoding type of $text, e.g. UTF-8, ISO-8859-1)
<br /> *
<br /> * @returns 7bit representation
<br /> */
<br />function to7bit($text,$from_enc) {
<br />    $text = mb_convert_encoding($text,\&amp;#039;HTML-ENTITIES\&amp;#039;,$from_enc);
<br />    $text = preg_replace(
<br />        array(\&amp;#039;/&amp;szlig;/\&amp;#039;,\&amp;#039;/&amp;amp;(..)lig;/\&amp;#039;,
<br />             \&amp;#039;/&amp;amp;([aouAOU])uml;/\&amp;#039;,\&amp;#039;/&amp;amp;(.)[^;]*;/\&amp;#039;),
<br />        array(\&amp;#039;ss\&amp;#039;,\&amp;quot;$1\&amp;quot;,\&amp;quot;$1\&amp;quot;.\&amp;#039;e\&amp;#039;,\&amp;quot;$1\&amp;quot;),
<br />        $text);
<br />    return $text;
<br />}   
<br />?&amp;gt;
<br />
<br />Enjoy :-)
<br />Johannes
<br />
<br />==
<br />[EDIT BY danbrown AT php DOT net: Author provided the following update on 27-FEB-2012.]
<br />==
<br />
<br />An addendum to my &amp;quot;to7bit&amp;quot; function referenced below in the notes. 
<br />The function is supposed to solve the problem that some languages require a different 7bit rendering of special (umlauted) characters for sorting or other applications. For example, the German &amp;szlig; ligature is usually written &amp;quot;ss&amp;quot; in 7bit context. Dutch &amp;yuml; is typically rendered &amp;quot;ij&amp;quot; (not &amp;quot;y&amp;quot;). 
<br />
<br />The original function works well with word (alphabet) character entities and I&amp;#039;ve seen it used in many places. But non-word entities cause funny results:
<br />E.g., &amp;quot;&amp;copy;&amp;quot; is rendered as &amp;quot;c&amp;quot;, &amp;quot;&amp;shy;&amp;quot; as &amp;quot;s&amp;quot; and &amp;quot;&amp;amp;rquo;&amp;quot; as &amp;quot;r&amp;quot;. 
<br />The following version fixes this by converting non-alphanumeric characters (also chains thereof) to &amp;#039;_&amp;#039;.
<br />
<br />&amp;lt;?php
<br />/**
<br /> * @args string $text line of encoded text
<br /> *       string $from_enc (encoding type of $text, e.g. UTF-8, ISO-8859-1)
<br /> *
<br /> * @returns 7bit representation
<br /> */
<br />function to7bit($text,$from_enc) {
<br />    $text = preg_replace(/W+/,&amp;#039;_&amp;#039;,$text);
<br />    $text = mb_convert_encoding($text,&amp;#039;HTML-ENTITIES&amp;#039;,$from_enc);
<br />    $text = preg_replace(
<br />        array(&amp;#039;/&amp;szlig;/&amp;#039;,&amp;#039;/&amp;amp;(..)lig;/&amp;#039;,
<br />             &amp;#039;/&amp;amp;([aouAOU])uml;/&amp;#039;,&amp;#039;/&amp;yuml;/&amp;#039;,&amp;#039;/&amp;amp;(.)[^;]*;/&amp;#039;),
<br />        array(&amp;#039;ss&amp;#039;,&amp;quot;$1&amp;quot;,&amp;quot;$1&amp;quot;.&amp;#039;e&amp;#039;,&amp;#039;ij&amp;#039;,&amp;quot;$1&amp;quot;),
<br />        $text);
<br />    return $text;
<br />}  
<br />?&amp;gt;
<br />
<br />Enjoy again,
<br />Johannes</span></code></div>
  </div>
 </div>
  <div class="note" id="56616">  <div class="votes">
    <div id="Vu56616">
    <a href="/manual/vote-note.php?id=56616&amp;page=function.mb-convert-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56616">
    <a href="/manual/vote-note.php?id=56616&amp;page=function.mb-convert-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56616" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#56616" class="name">
  <strong class="user"><em>Stephan van der Feest</em></strong></a><a class="genanchor" href="#56616"> &para;</a><div class="date" title="2005-09-09 03:50"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56616">
<div class="phpcode"><code><span class="html">Here's a tip for anyone using Flash and PHP for storing HTML output submitted from a Flash text field in a database or whatever.<br /><br />Flash submits its HTML special characters in UTF-8, so you can use the following function to convert those into HTML entity characters:<br /><br />function utf8html($utf8str)<br />{<br />  return htmlentities(mb_convert_encoding($utf8str,"ISO-8859-1","UTF-8"));<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mb-convert-encoding&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-convert-encoding.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.mb-convert-case.php" title="mb_&#8203;convert_&#8203;case">mb_&#8203;convert_&#8203;case</a>
                        </li>
                                                <li class="current">
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
