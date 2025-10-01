<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: convert_cyr_string - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.convert-cyr-string.php">
 <link rel="shorturl" href="https://www.php.net/convert-cyr-string">
 <link rel="alternate" href="https://www.php.net/convert-cyr-string" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.chunk-split.php">
 <link rel="next" href="https://www.php.net/manual/en/function.convert-uudecode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.convert-cyr-string.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.convert-cyr-string.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.convert-cyr-string.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.convert-cyr-string.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.convert-cyr-string.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.convert-cyr-string.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.convert-cyr-string.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.convert-cyr-string.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.convert-cyr-string.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.convert-cyr-string.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.convert-cyr-string.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Convert from one Cyrillic character set to another" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: convert_cyr_string - Manual" />
<meta name="twitter:description" content="Convert from one Cyrillic character set to another" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: convert_cyr_string - Manual" />
<meta itemprop="description" content="Convert from one Cyrillic character set to another" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Convert from one Cyrillic character set to another" />

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
        <a href="function.convert-uudecode.php">
          convert_uudecode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.chunk-split.php">
          &laquo; chunk_split        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.convert-cyr-string.php' selected="selected">English</option>
            <option value='de/function.convert-cyr-string.php'>German</option>
            <option value='es/function.convert-cyr-string.php'>Spanish</option>
            <option value='fr/function.convert-cyr-string.php'>French</option>
            <option value='it/function.convert-cyr-string.php'>Italian</option>
            <option value='ja/function.convert-cyr-string.php'>Japanese</option>
            <option value='pt_BR/function.convert-cyr-string.php'>Brazilian Portuguese</option>
            <option value='ru/function.convert-cyr-string.php'>Russian</option>
            <option value='tr/function.convert-cyr-string.php'>Turkish</option>
            <option value='uk/function.convert-cyr-string.php'>Ukrainian</option>
            <option value='zh/function.convert-cyr-string.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.convert-cyr-string" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">convert_cyr_string</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">convert_cyr_string</span> &mdash; <span class="dc-title">Convert from one Cyrillic character set to another</span></p>

 </div>

 <div id="function.convert-cyr-string-refsynopsisdiv">
   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function has been
<em>DEPRECATED</em> as of PHP 7.4.0, and <em>REMOVED</em> as of PHP 8.0.0. Relying on this function
is highly discouraged.</p></div>
 </div>

 <div class="refsect1 description" id="refsect1-function.convert-cyr-string-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>convert_cyr_string</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$str</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$from</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$to</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Converts from one Cyrillic character set to another.  
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.convert-cyr-string-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">str</code></dt>
     <dd>
      <p class="para">
       The string to be converted.
      </p>
     </dd>
    
    
     <dt><code class="parameter">from</code></dt>
     <dd>
      <p class="para">
       The source Cyrillic character set, as a single character.
      </p>
     </dd>
    
    
     <dt><code class="parameter">to</code></dt>
     <dd>
      <p class="para">
       The target Cyrillic character set, as a single character.
      </p>
     </dd>
    
   </dl>
  </p>
  <p class="para">
   Supported characters are:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      k - koi8-r
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      w - windows-1251
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      i - iso8859-5
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      a - x-cp866
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      d - x-cp866
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      m - x-mac-cyrillic
     </span>
    </li>
   </ul>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.convert-cyr-string-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the converted string.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.convert-cyr-string-changelog">
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
      <td>8.0.0</td>
      <td>
       Removed this function.
      </td>
     </tr>

     <tr>
      <td>7.4.0</td>
      <td>
       Deprecated this function.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 notes" id="refsect1-function.convert-cyr-string-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is
binary-safe.</span></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.convert-cyr-string-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mb-convert-encoding.php" class="function" rel="rdfs-seeAlso">mb_convert_encoding()</a> - Convert a string from one character encoding to another</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/convert-cyr-string.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.convert-cyr-string%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.convert-cyr-string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.convert-cyr-string.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="47987">  <div class="votes">
    <div id="Vu47987">
    <a href="/manual/vote-note.php?id=47987&amp;page=function.convert-cyr-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47987">
    <a href="/manual/vote-note.php?id=47987&amp;page=function.convert-cyr-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47987" title="51% like this...">
    1
    </div>
  </div>
  <a href="#47987" class="name">
  <strong class="user"><em>standov at cgu dot kiev dot ua</em></strong></a><a class="genanchor" href="#47987"> &para;</a><div class="date" title="2004-12-08 01:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47987">
<div class="phpcode"><code><span class="html">He is improved function to decode win1251-&gt;UTF8<br /><span class="default">&lt;?php<br />        </span><span class="keyword">function </span><span class="default">win2utf</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">){ <br />            </span><span class="default">$c209 </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">); </span><span class="default">$c208 </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">208</span><span class="keyword">); </span><span class="default">$c129 </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">129</span><span class="keyword">);<br />            for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)    { <br />                </span><span class="default">$c</span><span class="keyword">=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />                if (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">192 </span><span class="keyword">and </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">239</span><span class="keyword">) </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">$c208</span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">48</span><span class="keyword">);<br />                elseif (</span><span class="default">$c</span><span class="keyword">&gt;</span><span class="default">239</span><span class="keyword">) </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">$c209</span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">112</span><span class="keyword">);<br />                elseif (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">184</span><span class="keyword">) </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">$c209</span><span class="keyword">.</span><span class="default">$c209</span><span class="keyword">;<br />                elseif (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">168</span><span class="keyword">)    </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">$c208</span><span class="keyword">.</span><span class="default">$c129</span><span class="keyword">;<br />                else </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />            } <br />            return </span><span class="default">$t</span><span class="keyword">;<br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="31319">  <div class="votes">
    <div id="Vu31319">
    <a href="/manual/vote-note.php?id=31319&amp;page=function.convert-cyr-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31319">
    <a href="/manual/vote-note.php?id=31319&amp;page=function.convert-cyr-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31319" title="52% like this...">
    1
    </div>
  </div>
  <a href="#31319" class="name">
  <strong class="user"><em>pavel_bashkatov at elkogroup dot com</em></strong></a><a class="genanchor" href="#31319"> &para;</a><div class="date" title="2003-04-17 05:20"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31319">
<div class="phpcode"><code><span class="html">To: mihailsbo at lycos dot ru<br />Transliteration could be done easier:<br /><br />&lt;?<br />function transliterate($cyrstr)<br />    {<br />        $ru = array('A', 'a',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?',<br />                    '?', '?');<br /><br />        $en = array('A', 'a',<br />                    'B', 'b',<br />                    'V', 'v',<br />                    'G', 'g',<br />                    'D', 'd',<br />                    'E', 'e',<br />                    'E', 'e',<br />                    'Zh', 'zh',<br />                    'Z', 'z',<br />                    'I', 'i',<br />                    'J', 'j',<br />                    'K', 'k',<br />                    'L', 'l',<br />                    'M', 'm',<br />                    'N', 'n',<br />                    'O', 'o',<br />                    'P', 'p',<br />                    'R', 'r',<br />                    'S', 's',<br />                    'T', 't',<br />                    'U', 'u',<br />                    'F', 'f',<br />                    'H', 'h',<br />                    'C', 'c',<br />                    'Ch', 'ch',<br />                    'Sh', 'sh',<br />                    'Sch', 'sch',<br />                    '\'', '\'',<br />                    'Y', 'y', <br />                    '\'', '\'',<br />                    'E', 'e',<br />                    'Ju', 'ju',<br />                    'Ja', 'ja');<br /><br />        return str_replace($ru, $en, $cyrstr);<br />    }<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="77837">  <div class="votes">
    <div id="Vu77837">
    <a href="/manual/vote-note.php?id=77837&amp;page=function.convert-cyr-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77837">
    <a href="/manual/vote-note.php?id=77837&amp;page=function.convert-cyr-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77837" title="50% like this...">
    0
    </div>
  </div>
  <a href="#77837" class="name">
  <strong class="user"><em>Vasyl Skotona</em></strong></a><a class="genanchor" href="#77837"> &para;</a><div class="date" title="2007-09-14 09:28"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77837">
<div class="phpcode"><code><span class="html">A better function to convert cp1251 string to utf8.<br />Works with russian and ukrainian text.<br /><br />function unicod($str) {<br />    $conv=array();<br />    for($x=128;$x&lt;=143;$x++) $conv[$x+112]=chr(209).chr($x);<br />    for($x=144;$x&lt;=191;$x++) $conv[$x+48]=chr(208).chr($x);<br />    $conv[184]=chr(209).chr(145); #ё<br />    $conv[168]=chr(208).chr(129); #Ё<br />    $conv[179]=chr(209).chr(150); #і<br />    $conv[178]=chr(208).chr(134); #І<br />    $conv[191]=chr(209).chr(151); #ї<br />    $conv[175]=chr(208).chr(135); #ї<br />    $conv[186]=chr(209).chr(148); #є<br />    $conv[170]=chr(208).chr(132); #Є<br />    $conv[180]=chr(210).chr(145); #ґ<br />    $conv[165]=chr(210).chr(144); #Ґ<br />    $conv[184]=chr(209).chr(145); #Ґ<br />    $ar=str_split($str);<br />    foreach($ar as $b) if(isset($conv[ord($b)])) $nstr.=$conv[ord($b)]; else $nstr.=$b;<br />    return $nstr;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="63558">  <div class="votes">
    <div id="Vu63558">
    <a href="/manual/vote-note.php?id=63558&amp;page=function.convert-cyr-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63558">
    <a href="/manual/vote-note.php?id=63558&amp;page=function.convert-cyr-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63558" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#63558" class="name">
  <strong class="user"><em>zehyaat] yandex dotru</em></strong></a><a class="genanchor" href="#63558"> &para;</a><div class="date" title="2006-03-23 12:15"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63558">
<div class="phpcode"><code><span class="html">Sorry for my previous post. NOT array_reverce, array_flip is actual function. Correct function:<br /><br />function Encode($str,$type=u)<br />{<br />    $conv=array();<br />    for($x=192;$x&lt;=239;$x++)<br />        $conv[u][chr($x)]=chr(208).chr($x-48);<br />    for($x=240;$x&lt;=255;$x++)<br />        $conv[u][chr($x)]=chr(209).chr($x-112);<br />    $conv[u][chr(168)]=chr(208).chr(129);<br />    $conv[u][chr(184)]=chr(209).chr(209);<br />    $conv[w]=array_flip($conv[u]);<br />    if($type=='w' || $type=='u')<br />        return strtr($str,$conv[$type]);<br />    else<br />        return $str;<br />}<br /><br />Sorry for my English ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="38574">  <div class="votes">
    <div id="Vu38574">
    <a href="/manual/vote-note.php?id=38574&amp;page=function.convert-cyr-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38574">
    <a href="/manual/vote-note.php?id=38574&amp;page=function.convert-cyr-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38574" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#38574" class="name">
  <strong class="user"><em>aeon</em></strong></a><a class="genanchor" href="#38574"> &para;</a><div class="date" title="2003-12-27 08:20"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38574">
<div class="phpcode"><code><span class="html">threed's function works great, but the replacement for the letter small io (&amp;#1105;) needs to be changed from <br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">184</span><span class="keyword">) { </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">); continue; };<br /></span><span class="default">?&gt;<br /></span><br />to<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">184</span><span class="keyword">) { </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">145</span><span class="keyword">); continue; };<br /></span><span class="default">?&gt;<br /></span><br />so, the final working result should look like this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">win3utf</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">) {<br />   for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$m</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)    {<br />       </span><span class="default">$c</span><span class="keyword">=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />       if (</span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">127</span><span class="keyword">) {</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">); continue; }<br />       if (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">192 </span><span class="keyword">&amp;&amp; </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">207</span><span class="keyword">) {</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">208</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">48</span><span class="keyword">); continue; }<br />       if (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">208 </span><span class="keyword">&amp;&amp; </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">239</span><span class="keyword">) {</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">208</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">48</span><span class="keyword">); continue; }<br />       if (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">240 </span><span class="keyword">&amp;&amp; </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">255</span><span class="keyword">) {</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">112</span><span class="keyword">); continue; }<br />       if (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">184</span><span class="keyword">) { </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">); continue; };<br />       if (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">168</span><span class="keyword">) { </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">208</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">129</span><span class="keyword">); continue; };<br />   }<br />   return </span><span class="default">$t</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49960">  <div class="votes">
    <div id="Vu49960">
    <a href="/manual/vote-note.php?id=49960&amp;page=function.convert-cyr-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49960">
    <a href="/manual/vote-note.php?id=49960&amp;page=function.convert-cyr-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49960" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#49960" class="name">
  <strong class="user"><em>felix[at]tvpro.net.ru</em></strong></a><a class="genanchor" href="#49960"> &para;</a><div class="date" title="2005-02-13 12:57"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49960">
<div class="phpcode"><code><span class="html">Check this code -- exelent to convert win-1251 to UTF-8 <br />just one fix!!!<br />       if ($c==184) { $t.=chr(209).chr(145); continue; }; <br /><br />Anything more it is not necessary.<br />It is grateful to threed [at] koralsoft.com<br />28-Jul-2003 03:37 <br />i tried all functions here to convert from cp1251 to unicode, but they don't work. i think that this work : <br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">win3utf</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">)    { <br />   for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$m</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)    { <br />       </span><span class="default">$c</span><span class="keyword">=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]); <br />       if (</span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">127</span><span class="keyword">) {</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">); continue; } <br />       if (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">192 </span><span class="keyword">&amp;&amp; </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">207</span><span class="keyword">)    {</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">208</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">48</span><span class="keyword">); continue; } <br />       if (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">208 </span><span class="keyword">&amp;&amp; </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">239</span><span class="keyword">) {</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">208</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">48</span><span class="keyword">); continue; } <br />       if (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">240 </span><span class="keyword">&amp;&amp; </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">255</span><span class="keyword">) {</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">112</span><span class="keyword">); continue; } <br />       if (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">184</span><span class="keyword">) { </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">); continue; }; <br />   if (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">168</span><span class="keyword">) { </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">208</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">129</span><span class="keyword">);  continue; }; <br />   } <br />   return </span><span class="default">$t</span><span class="keyword">; <br />} <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89084">  <div class="votes">
    <div id="Vu89084">
    <a href="/manual/vote-note.php?id=89084&amp;page=function.convert-cyr-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89084">
    <a href="/manual/vote-note.php?id=89084&amp;page=function.convert-cyr-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89084" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#89084" class="name">
  <strong class="user"><em>strrev(&amp;#34;moc dot liamg at voglod dot yilisav&amp;#34;);</em></strong></a><a class="genanchor" href="#89084"> &para;</a><div class="date" title="2009-02-20 12:02"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89084">
<div class="phpcode"><code><span class="html">Unfortunately input data must be a string only. But it is may be changed! ;) <br /><br />To convert multi-dimensional array I use this recursive function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">convert_cyr_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,</span><span class="default">$from</span><span class="keyword">,</span><span class="default">$to</span><span class="keyword">){<br />    foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">){<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">convert_cyr_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">,</span><span class="default">$from</span><span class="keyword">,</span><span class="default">$to</span><span class="keyword">);<br />            continue;<br />        }<br />        </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">convert_cyr_string</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">,</span><span class="default">$from</span><span class="keyword">,</span><span class="default">$to</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />An example:<br /><br /><span class="default">&lt;?php<br />$array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"сВМПЛП"</span><span class="keyword">;<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="string">"зТХЫБ"</span><span class="keyword">;<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = array(</span><span class="string">"пЗХТЕГ"</span><span class="keyword">,</span><span class="string">"рПНЙДПТ"</span><span class="keyword">);<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = array(<br />                     array(</span><span class="string">"бРЕМШУЙО"</span><span class="keyword">,</span><span class="string">"нБОДБТЙО"</span><span class="keyword">),<br />                     array(</span><span class="string">"бВТЙЛПУ"</span><span class="keyword">,</span><span class="string">"рЕТУЙЛ"</span><span class="keyword">)<br />                );<br /><br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">convert_cyr_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,</span><span class="string">"k"</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">);<br /></span><span class="comment">/* Returns:<br /><br />Array<br />(<br />  [0] =&gt; Яблоко<br />  [1] =&gt; Груша<br />  [2] =&gt; Array<br />    (<br />      [0] =&gt; Огурец<br />      [1] =&gt; Помидор<br />    )<br />  [3] =&gt; Array<br />    (<br />      [0] =&gt; Array<br />        (<br />          [0] =&gt; Апельсин<br />          [1] =&gt; Мандарин<br />        )<br />      [1] =&gt; Array<br />        (<br />          [0] =&gt; Абрикос<br />          [1] =&gt; Персик<br />        )<br />    )<br />)*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56298">  <div class="votes">
    <div id="Vu56298">
    <a href="/manual/vote-note.php?id=56298&amp;page=function.convert-cyr-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56298">
    <a href="/manual/vote-note.php?id=56298&amp;page=function.convert-cyr-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56298" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#56298" class="name">
  <strong class="user"><em>webmaster at chassidus dot ru</em></strong></a><a class="genanchor" href="#56298"> &para;</a><div class="date" title="2005-08-29 10:51"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56298">
<div class="phpcode"><code><span class="html">//I've also built the same way for hebrew to utf converting<br /><br />function heb2utf($s) {<br /><br />    for($i=0, $m=strlen($s); $i&lt;$m; $i++)    { <br />       $c=ord($s[$i]); <br />       if ($c&lt;=127) {$t.=chr($c); continue; } <br />       if ($c&gt;=224 )    {$t.=chr(215).chr($c-80); continue; } <br />     <br /><br />   } <br />    return $t; <br />}<br /><br />//Simple unicoder and decoder for hebrew and russian:<br /><br />function unicode_hebrew($str) {<br />    for ($ii=0;$ii&lt;strlen($str);$ii++) {<br />        $xchr=substr($str,$ii,1);<br />        if (ord($xchr)&gt;223) {<br />            $xchr=ord($xchr)+1264;<br />            $xchr="&amp;#" . $xchr . ";";<br />        }<br />        $encode=$encode . $xchr;<br /><br />    }<br />    return $encode;<br /><br />}<br /><br />function unicode_russian($str) {<br />    for ($ii=0;$ii&lt;strlen($str);$ii++) {<br />        $xchr=substr($str,$ii,1);<br />        if (ord($xchr)&gt;191) {<br />            $xchr=ord($xchr)+848;<br />            $xchr="&amp;#" . $xchr . ";";<br />        }<br />        $encode=$encode . $xchr;<br /><br />    }<br />    return $encode;<br /><br />}<br /><br />function decode_unicoded_hebrew($str) {<br />    $decode="";<br /><br />    $ar=split("&amp;#",$str);<br /><br />    foreach ($ar as $value ) {<br /><br />        $in1=strpos($value,";"); //end of code<br /><br />        if ($in1&gt;0) {// unicode<br /><br />            $code=substr($value,0,$in1);<br />               <br />            if ($code&gt;=1456 and $code&lt;=1514) { //hebrew<br />                   $code=$code-1264;<br />                $xchr=chr($code);<br />               } else { //other unicode<br />                $xchr="&amp;#" . $code . ";";<br />             } <br />            $xchr=$xchr . substr($value,$in1+1);   <br />        } else //not unicode<br />              $xchr = $value;<br />        <br /><br />        $decode=$decode . $xchr;<br />    }<br />    return $decode;<br />}<br /><br />function decode_unicoded_russian($str) {<br />    $decode="";<br /><br />    $ar=split("&amp;#",$str);<br /><br />    foreach ($ar as $value ) {<br /><br />        $in1=strpos($value,";"); //end of code<br /><br />        if ($in1&gt;0) {// unicode<br /><br />            $code=substr($value,0,$in1);<br />               <br />            if ($code&gt;=1040 and $code&lt;=1103) {<br />                   $code=$code-848;<br />                $xchr=chr($code);<br />               } else {<br />                $xchr="&amp;#" . $code . ";";<br />             } <br />            $xchr=$xchr . substr($value,$in1+1);   <br />        } else<br />              $xchr = $value;<br />        <br /><br />        $decode=$decode . $xchr;<br />    }<br />    return $decode;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="77872">  <div class="votes">
    <div id="Vu77872">
    <a href="/manual/vote-note.php?id=77872&amp;page=function.convert-cyr-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77872">
    <a href="/manual/vote-note.php?id=77872&amp;page=function.convert-cyr-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77872" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#77872" class="name">
  <strong class="user"><em>apoc at ukr dot net</em></strong></a><a class="genanchor" href="#77872"> &para;</a><div class="date" title="2007-09-17 10:43"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77872">
<div class="phpcode"><code><span class="html">:) what about NUMBER!!!???<br /><br />    function Utf8Win($str,$type="w")<br />    {<br />        static $conv='';<br />        if (!is_array($conv))<br />        {<br />            $conv = array();<br />            for($x=128;$x&lt;=143;$x++)<br />            {<br />                $conv['u'][]=chr(209).chr($x);<br />                $conv['w'][]=chr($x+112);<br />            }<br />            for($x=144;$x&lt;=191;$x++)<br />            {<br />                $conv['u'][]=chr(208).chr($x);<br />                $conv['w'][]=chr($x+48);<br />            }<br />            $conv['u'][]=chr(208).chr(129); // Ё<br />            $conv['w'][]=chr(168);<br />            $conv['u'][]=chr(209).chr(145); // ё<br />            $conv['w'][]=chr(184);<br />            $conv['u'][]=chr(208).chr(135); // Ї<br />            $conv['w'][]=chr(175);<br />            $conv['u'][]=chr(209).chr(151); // ї<br />            $conv['w'][]=chr(191);<br />            $conv['u'][]=chr(208).chr(134); // І<br />            $conv['w'][]=chr(178);<br />            $conv['u'][]=chr(209).chr(150); // і<br />            $conv['w'][]=chr(179);<br />            $conv['u'][]=chr(210).chr(144); // Ґ<br />            $conv['w'][]=chr(165);<br />            $conv['u'][]=chr(210).chr(145); // ґ<br />            $conv['w'][]=chr(180);<br />            $conv['u'][]=chr(208).chr(132); // Є<br />            $conv['w'][]=chr(170);<br />            $conv['u'][]=chr(209).chr(148); // є<br />            $conv['w'][]=chr(186);<br />            $conv['u'][]=chr(226).chr(132).chr(150); // №<br />            $conv['w'][]=chr(185);<br />        }<br />        if ($type == 'w') { return str_replace($conv['u'],$conv['w'],$str); }<br />        elseif ($type == 'u') { return str_replace($conv['w'], $conv['u'],$str); }<br />        else { return $str; }<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="34455">  <div class="votes">
    <div id="Vu34455">
    <a href="/manual/vote-note.php?id=34455&amp;page=function.convert-cyr-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34455">
    <a href="/manual/vote-note.php?id=34455&amp;page=function.convert-cyr-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34455" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#34455" class="name">
  <strong class="user"><em>threed [at] koralsoft.com</em></strong></a><a class="genanchor" href="#34455"> &para;</a><div class="date" title="2003-07-28 04:37"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34455">
<div class="phpcode"><code><span class="html">i tried all functions here to convert from cp1251 to unicode, but they don't work. i think that this work :
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">win3utf</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">)    {
<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$m</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)    {
<br />        </span><span class="default">$c</span><span class="keyword">=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />        if (</span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">127</span><span class="keyword">) {</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">); continue; }
<br />        if (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">192 </span><span class="keyword">&amp;&amp; </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">207</span><span class="keyword">)    {</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">208</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">48</span><span class="keyword">); continue; }
<br />        if (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">208 </span><span class="keyword">&amp;&amp; </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">239</span><span class="keyword">) {</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">208</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">48</span><span class="keyword">); continue; }
<br />        if (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">240 </span><span class="keyword">&amp;&amp; </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">255</span><span class="keyword">) {</span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">112</span><span class="keyword">); continue; }
<br />        if (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">184</span><span class="keyword">) { </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">); continue; };
<br />    if (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">168</span><span class="keyword">) { </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">208</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">129</span><span class="keyword">);  continue; };
<br />    }
<br />    return </span><span class="default">$t</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="63557">  <div class="votes">
    <div id="Vu63557">
    <a href="/manual/vote-note.php?id=63557&amp;page=function.convert-cyr-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63557">
    <a href="/manual/vote-note.php?id=63557&amp;page=function.convert-cyr-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63557" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#63557" class="name">
  <strong class="user"><em>zehya [at] yandex dotru</em></strong></a><a class="genanchor" href="#63557"> &para;</a><div class="date" title="2006-03-23 11:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63557">
<div class="phpcode"><code><span class="html">cathody at mail dot ru(27-Jul-2005 06:41)<br />You function doesn't work on my PC..<br />It's work:<br />function Encode2($str,$type)<br />{<br />    $conv=array();<br />    for($x=192;$x&lt;=239;$x++)<br />        $conv[u][chr($x)]=chr(208).chr($x-48);<br />    for($x=240;$x&lt;=255;$x++)<br />        $conv[u][chr($x)]=chr(209).chr($x-112);<br />    $conv[u][chr(168)]=chr(208).chr(129);<br />    $conv[u][chr(184)]=chr(209).chr(209);<br />    $conv[w]=array_reverse($conv[u]);<br />    if($type=='w' || $type=='u')<br />        return strtr($str,$conv[$type]);<br />    else<br />        return $str;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.convert-cyr-string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.convert-cyr-string.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="current">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
