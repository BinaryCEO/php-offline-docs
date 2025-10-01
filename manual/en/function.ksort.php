<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ksort - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ksort.php">
 <link rel="shorturl" href="https://www.php.net/ksort">
 <link rel="alternate" href="https://www.php.net/ksort" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.krsort.php">
 <link rel="next" href="https://www.php.net/manual/en/function.list.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ksort.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ksort.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ksort.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ksort.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ksort.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ksort.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ksort.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ksort.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ksort.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ksort.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ksort.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sort an array by key in ascending order" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ksort - Manual" />
<meta name="twitter:description" content="Sort an array by key in ascending order" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ksort - Manual" />
<meta itemprop="description" content="Sort an array by key in ascending order" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sort an array by key in ascending order" />

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
        <a href="function.list.php">
          list &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.krsort.php">
          &laquo; krsort        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.array.php'>Arrays</a></li>      <li><a href='ref.array.php'>Array Functions</a></li>      </ul>
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
            <option value='en/function.ksort.php' selected="selected">English</option>
            <option value='de/function.ksort.php'>German</option>
            <option value='es/function.ksort.php'>Spanish</option>
            <option value='fr/function.ksort.php'>French</option>
            <option value='it/function.ksort.php'>Italian</option>
            <option value='ja/function.ksort.php'>Japanese</option>
            <option value='pt_BR/function.ksort.php'>Brazilian Portuguese</option>
            <option value='ru/function.ksort.php'>Russian</option>
            <option value='tr/function.ksort.php'>Turkish</option>
            <option value='uk/function.ksort.php'>Ukrainian</option>
            <option value='zh/function.ksort.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ksort" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ksort</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ksort</span> &mdash; <span class="dc-title">Sort an array by key in ascending order</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.ksort-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ksort</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   Sorts <code class="parameter">array</code> in place by keys
   in ascending order.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
 <p class="para">
  If two members compare as equal, they retain their original order.
  Prior to PHP 8.0.0, their relative order in the sorted array was undefined.
 </p>
</p></blockquote>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
 <p class="para">
    Resets array&#039;s internal pointer to the first element.
 </p>
</p></blockquote>

 </div>


 <div class="refsect1 parameters" id="refsect1-function.ksort-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The input array.
      </p>
     </dd>
    
    
  <dt><code class="parameter">flags</code></dt>
  <dd>
   <p class="para">
    The optional second parameter <code class="parameter">flags</code>
    may be used to modify the sorting behavior using these values:
   </p>
   <p class="para">
    Sorting type flags:
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara"><strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong> - compare items normally;
      the details are described in the <a href="language.operators.comparison.php" class="link">comparison operators</a> section</span>
     </li>
     <li class="listitem">
      <span class="simpara"><strong><code><a href="array.constants.php#constant.sort-numeric">SORT_NUMERIC</a></code></strong> - compare items numerically</span>
     </li>
     <li class="listitem">
      <span class="simpara"><strong><code><a href="array.constants.php#constant.sort-string">SORT_STRING</a></code></strong> - compare items as strings</span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong><code><a href="array.constants.php#constant.sort-locale-string">SORT_LOCALE_STRING</a></code></strong> - compare items as
       strings, based on the current locale. It uses the locale,
       which can be changed using <span class="function"><a href="function.setlocale.php" class="function">setlocale()</a></span>
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong><code><a href="array.constants.php#constant.sort-natural">SORT_NATURAL</a></code></strong> - compare items as strings
       using &quot;natural ordering&quot; like <span class="function"><a href="function.natsort.php" class="function">natsort()</a></span>
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong><code><a href="array.constants.php#constant.sort-flag-case">SORT_FLAG_CASE</a></code></strong> - can be combined
       (bitwise OR) with
       <strong><code><a href="array.constants.php#constant.sort-string">SORT_STRING</a></code></strong> or
       <strong><code><a href="array.constants.php#constant.sort-natural">SORT_NATURAL</a></code></strong> to sort strings case-insensitively
      </span>
     </li>
    </ul>
   </p>
  </dd>
 

   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ksort-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ksort-changelog">
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
 <td>8.2.0</td>
 <td>
  The return type is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> now; previously, it was <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
 </td>
</tr>

      <tr>
       <td>8.2.0</td>
       <td>
        This function now does numeric string comparison under
        <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong> using the standard PHP 8 rules.
        </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ksort-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5311">
    <p><strong>Example #1 <span class="function"><strong>ksort()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$fruits </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"lemon"</span><span style="color: #007700">, </span><span style="color: #DD0000">"a"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"orange"</span><span style="color: #007700">, </span><span style="color: #DD0000">"b"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"banana"</span><span style="color: #007700">, </span><span style="color: #DD0000">"c"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"apple"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ksort</span><span style="color: #007700">(</span><span style="color: #0000BB">$fruits</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$fruits </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$key</span><span style="color: #DD0000"> = </span><span style="color: #0000BB">$val</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">a = orange
b = banana
c = apple
d = lemon</pre>
</div>
    </div>
   </div>
  </p>

  <p class="para">
   <div class="example" id="example-5312">
    <p><strong>Example #2 <span class="function"><strong>ksort()</strong></span> with <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> keys</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= [</span><span style="color: #0000BB">0 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'First'</span><span style="color: #007700">, </span><span style="color: #0000BB">2 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Last'</span><span style="color: #007700">, </span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Middle'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ksort</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(3) {
  [0]=&gt;
  string(5) &quot;First&quot;
  [2]=&gt;
  string(4) &quot;Last&quot;
  [1]=&gt;
  string(6) &quot;Middle&quot;
}
array(3) {
  [0]=&gt;
  string(5) &quot;First&quot;
  [1]=&gt;
  string(6) &quot;Middle&quot;
  [2]=&gt;
  string(4) &quot;Last&quot;
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ksort-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.sort.php" class="function" rel="rdfs-seeAlso">sort()</a> - Sort an array in ascending order</span></li>
   <li><span class="function"><a href="function.krsort.php" class="function" rel="rdfs-seeAlso">krsort()</a> - Sort an array by key in descending order</span></li>
   <li>The <a href="array.sorting.php" class="link">comparison of array sorting functions</a></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/ksort.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ksort%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ksort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ksort.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="98465">  <div class="votes">
    <div id="Vu98465">
    <a href="/manual/vote-note.php?id=98465&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98465">
    <a href="/manual/vote-note.php?id=98465&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98465" title="65% like this...">
    50
    </div>
  </div>
  <a href="#98465" class="name">
  <strong class="user"><em>DavidG</em></strong></a><a class="genanchor" href="#98465"> &para;</a><div class="date" title="2010-06-17 06:47"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98465">
<div class="phpcode"><code><span class="html">A nice way to do sorting of a key on a multi-dimensional array without having to know what keys you have in the array first:
<br />
<br /><span class="default">&lt;?php
<br />$people </span><span class="keyword">= array(
<br />array(</span><span class="string">"name"</span><span class="keyword">=&gt;</span><span class="string">"Bob"</span><span class="keyword">,</span><span class="string">"age"</span><span class="keyword">=&gt;</span><span class="default">8</span><span class="keyword">,</span><span class="string">"colour"</span><span class="keyword">=&gt;</span><span class="string">"red"</span><span class="keyword">),
<br />array(</span><span class="string">"name"</span><span class="keyword">=&gt;</span><span class="string">"Greg"</span><span class="keyword">,</span><span class="string">"age"</span><span class="keyword">=&gt;</span><span class="default">12</span><span class="keyword">,</span><span class="string">"colour"</span><span class="keyword">=&gt;</span><span class="string">"blue"</span><span class="keyword">),
<br />array(</span><span class="string">"name"</span><span class="keyword">=&gt;</span><span class="string">"Andy"</span><span class="keyword">,</span><span class="string">"age"</span><span class="keyword">=&gt;</span><span class="default">5</span><span class="keyword">,</span><span class="string">"colour"</span><span class="keyword">=&gt;</span><span class="string">"purple"</span><span class="keyword">));
<br />
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$people</span><span class="keyword">);
<br />
<br /></span><span class="default">$sortArray </span><span class="keyword">= array();
<br />
<br />foreach(</span><span class="default">$people </span><span class="keyword">as </span><span class="default">$person</span><span class="keyword">){
<br />    foreach(</span><span class="default">$person </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">){
<br />        if(!isset(</span><span class="default">$sortArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])){
<br />            </span><span class="default">$sortArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = array();
<br />        }
<br />        </span><span class="default">$sortArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="default">$orderby </span><span class="keyword">= </span><span class="string">"name"</span><span class="keyword">; </span><span class="comment">//change this to whatever key you want from the array
<br />
<br /></span><span class="default">array_multisort</span><span class="keyword">(</span><span class="default">$sortArray</span><span class="keyword">[</span><span class="default">$orderby</span><span class="keyword">],</span><span class="default">SORT_DESC</span><span class="keyword">,</span><span class="default">$people</span><span class="keyword">);
<br />
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$people</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Output from first var_dump:
<br />
<br />[0]=&amp;gt;
<br />  array(3) {
<br />    ["name"]=&amp;gt;
<br />    string(3) "Bob"
<br />    ["age"]=&amp;gt;
<br />    int(8)
<br />    ["colour"]=&amp;gt;
<br />    string(3) "red"
<br />  }
<br />  [1]=&amp;gt;
<br />  array(3) {
<br />    ["name"]=&amp;gt;
<br />
<br />    string(4) "Greg"
<br />    ["age"]=&amp;gt;
<br />    int(12)
<br />    ["colour"]=&amp;gt;
<br />    string(4) "blue"
<br />  }
<br />  [2]=&amp;gt;
<br />  array(3) {
<br />    ["name"]=&amp;gt;
<br />    string(4) "Andy"
<br />    ["age"]=&amp;gt;
<br />    int(5)
<br />    ["colour"]=&amp;gt;
<br />
<br />    string(6) "purple"
<br />  }
<br />}
<br />
<br />Output from 2nd var_dump:
<br />
<br />array(3) {
<br />  [0]=&amp;gt;
<br />  array(3) {
<br />    ["name"]=&amp;gt;
<br />    string(4) "Greg"
<br />    ["age"]=&amp;gt;
<br />    int(12)
<br />    ["colour"]=&amp;gt;
<br />    string(4) "blue"
<br />  }
<br />  [1]=&amp;gt;
<br />  array(3) {
<br />    ["name"]=&amp;gt;
<br />
<br />    string(3) "Bob"
<br />    ["age"]=&amp;gt;
<br />    int(8)
<br />    ["colour"]=&amp;gt;
<br />    string(3) "red"
<br />  }
<br />  [2]=&amp;gt;
<br />  array(3) {
<br />    ["name"]=&amp;gt;
<br />    string(4) "Andy"
<br />    ["age"]=&amp;gt;
<br />    int(5)
<br />    ["colour"]=&amp;gt;
<br />
<br />    string(6) "purple"
<br />  }
<br />
<br />There's no checking on whether your array keys exist, or the array data you are searching on is actually there, but easy enough to add.</span></code></div>
  </div>
 </div>
  <div class="note" id="121334">  <div class="votes">
    <div id="Vu121334">
    <a href="/manual/vote-note.php?id=121334&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121334">
    <a href="/manual/vote-note.php?id=121334&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121334" title="90% like this...">
    8
    </div>
  </div>
  <a href="#121334" class="name">
  <strong class="user"><em>orlov0562 at gmail dot com</em></strong></a><a class="genanchor" href="#121334"> &para;</a><div class="date" title="2017-07-07 01:13"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121334">
<div class="phpcode"><code><span class="html">The first thing that I didn't find in description it's that this function return results from MIN value to MAX value, ex: [-5=&gt;'', 0=&gt;'', 5=&gt;'' ]<br /><br />Also you should know that by default, it has correct sorting for keys that represented as string but has a number as value, ex: ['-5'=&gt;'', '0'=&gt;'', '5'=&gt;'' ]<br /><br />Few examples with results:<br /><br />-----------------------------------------<br /><br />DESCRIPTION: Keys are numbers + default flag (SORT_REGULAR)<br /><br />$arr = [<br />    -5 =&gt; 'minus five',<br />    0 =&gt; 'zero',<br />    1 =&gt; 'one',<br />    2 =&gt; 'two',<br />    100 =&gt; 'hundred',<br />];<br /><br />ksort($arr);<br />print_r($arr);<br /><br />RESULT:<br /><br />Array<br />(<br />    [-5] =&gt; minus five<br />    [0] =&gt; zero<br />    [1] =&gt; one<br />    [2] =&gt; two<br />    [100] =&gt; hundred<br />)<br /><br />-----------------------------------------<br />DESCRIPTION: Keys are string numbers + default flag (SORT_REGULAR)<br /><br />$arr = [<br />    '-5' =&gt; 'minus five',<br />    '0' =&gt; 'zero',<br />    '1' =&gt; 'one',<br />    '2' =&gt; 'two',<br />    '100' =&gt; 'hundred',<br />];<br /><br />ksort($arr);<br />print_r($arr);<br /><br />RESULT:<br /><br />Array<br />(<br />    [-5] =&gt; minus five<br />    [0] =&gt; zero<br />    [1] =&gt; one<br />    [2] =&gt; two<br />    [100] =&gt; hundred<br />)<br /><br />-----------------------------------------<br />DESCRIPTION: Keys are string numbers + SORT_STRING flag<br /><br />$arr = [<br />    '-5' =&gt; 'minus five',<br />    '0' =&gt; 'zero',<br />    '1' =&gt; 'one',<br />    '2' =&gt; 'two',<br />    '100' =&gt; 'hundred',<br />];<br /><br />ksort($arr, SORT_STRING);<br />print_r($arr);<br /><br />RESULT:<br /><br />Array<br />(<br />    [-5] =&gt; minus five<br />    [0] =&gt; zero<br />    [1] =&gt; one<br />    [100] =&gt; hundred<br />    [2] =&gt; two<br />)<br /><br />-----------------------------------------<br /><br />DESCRIPTION: Keys are string numbers + SORT_NUMERIC flag<br /><br />$arr = [<br />    '-5' =&gt; 'minus five',<br />    '0' =&gt; 'zero',<br />    '1' =&gt; 'one',<br />    '2' =&gt; 'two',<br />    '100' =&gt; 'hundred',<br />];<br /><br />ksort($arr, SORT_NUMERIC);<br />print_r($arr);<br /><br />RESULT:<br /><br />Array<br />(<br />    [-5] =&gt; minus five<br />    [0] =&gt; zero<br />    [1] =&gt; one<br />    [2] =&gt; two<br />    [100] =&gt; hundred<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="109398">  <div class="votes">
    <div id="Vu109398">
    <a href="/manual/vote-note.php?id=109398&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109398">
    <a href="/manual/vote-note.php?id=109398&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109398" title="70% like this...">
    14
    </div>
  </div>
  <a href="#109398" class="name">
  <strong class="user"><em>thegrandoverseer</em></strong></a><a class="genanchor" href="#109398"> &para;</a><div class="date" title="2012-07-13 06:11"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109398">
<div class="phpcode"><code><span class="html">I wrote this function to sort the keys of an array using an array of keynames, in order.<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * function array_reorder_keys<br /> * reorder the keys of an array in order of specified keynames; all other nodes not in $keynames will come after last $keyname, in normal array order<br /> * @param array &amp;$array - the array to reorder<br /> * @param mixed $keynames - a csv or array of keynames, in the order that keys should be reordered<br /> */<br /></span><span class="keyword">function </span><span class="default">array_reorder_keys</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$keynames</span><span class="keyword">){<br />    if(empty(</span><span class="default">$array</span><span class="keyword">) || !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) || empty(</span><span class="default">$keynames</span><span class="keyword">)) return;<br />    if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$keynames</span><span class="keyword">)) </span><span class="default">$keynames </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">,</span><span class="default">$keynames</span><span class="keyword">);<br />    if(!empty(</span><span class="default">$keynames</span><span class="keyword">)) </span><span class="default">$keynames </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$keynames</span><span class="keyword">);<br />    foreach(</span><span class="default">$keynames </span><span class="keyword">as </span><span class="default">$n</span><span class="keyword">){<br />        if(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">)){<br />            </span><span class="default">$newarray </span><span class="keyword">= array(</span><span class="default">$n</span><span class="keyword">=&gt;</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">]); </span><span class="comment">//copy the node before unsetting<br />            </span><span class="keyword">unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">]); </span><span class="comment">//remove the node<br />            </span><span class="default">$array </span><span class="keyword">= </span><span class="default">$newarray </span><span class="keyword">+ </span><span class="default">array_filter</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="comment">//combine copy with filtered array<br />        </span><span class="keyword">}<br />    }<br />}<br /></span><span class="default">$seed_array </span><span class="keyword">= array(</span><span class="string">'foo'</span><span class="keyword">=&gt;</span><span class="string">'bar'</span><span class="keyword">, </span><span class="string">'someotherkey'</span><span class="keyword">=&gt;</span><span class="string">'whatev'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">=&gt;</span><span class="string">'baz'</span><span class="keyword">, </span><span class="string">'baz'</span><span class="keyword">=&gt;</span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'anotherkey'</span><span class="keyword">=&gt;</span><span class="string">'anotherval'</span><span class="keyword">);<br /></span><span class="default">array_reorder_keys</span><span class="keyword">(</span><span class="default">$seed_array</span><span class="keyword">, </span><span class="string">'baz,foo,bar'</span><span class="keyword">); </span><span class="comment">//returns array('baz'=&gt;'foo', 'foo'=&gt;'bar', 'bar'=&gt;'baz', 'someotherkey'=&gt;'whatev', 'anotherkey'=&gt;'anotherval' );<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="19742">  <div class="votes">
    <div id="Vu19742">
    <a href="/manual/vote-note.php?id=19742&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19742">
    <a href="/manual/vote-note.php?id=19742&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19742" title="68% like this...">
    12
    </div>
  </div>
  <a href="#19742" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#19742"> &para;</a><div class="date" title="2002-03-09 07:09"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19742">
<div class="phpcode"><code><span class="html">here 2 functions to ksort/uksort an array and all its member arrays<br /><br />function tksort(&amp;$array)<br />  {<br />  ksort($array);<br />  foreach(array_keys($array) as $k)<br />    {<br />    if(gettype($array[$k])=="array")<br />      {<br />      tksort($array[$k]);<br />      }<br />    }<br />  }<br /><br />function utksort(&amp;$array, $function)<br />  {<br />  uksort($array, $function);<br />  foreach(array_keys($array) as $k)<br />    {<br />    if(gettype($array[$k])=="array")<br />      {<br />      utksort($array[$k], $function);<br />      }<br />    }<br />  }</span></code></div>
  </div>
 </div>
  <div class="note" id="54319">  <div class="votes">
    <div id="Vu54319">
    <a href="/manual/vote-note.php?id=54319&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54319">
    <a href="/manual/vote-note.php?id=54319&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54319" title="70% like this...">
    7
    </div>
  </div>
  <a href="#54319" class="name">
  <strong class="user"><em>ssb45 at cornell dot edu</em></strong></a><a class="genanchor" href="#54319"> &para;</a><div class="date" title="2005-06-30 04:58"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54319">
<div class="phpcode"><code><span class="html">The function that justin at booleangate dot org provides works well, but be aware that it is not a drop-in replacement for ksort as is.  While ksort sorts the array by reference and returns a status boolean, natksort returns the sorted array, leaving the original untouched.  Thus, you must use this syntax:<br /><br />$array = natksort($array);<br /><br />If you want to use the more natural syntax:<br /><br />$status = natksort($array);<br /><br />Then use this modified version:<br /><br />function natksort(&amp;$array) {<br />    $keys = array_keys($array);<br />    natcasesort($keys);<br /><br />    foreach ($keys as $k) {<br />        $new_array[$k] = $array[$k];<br />    }<br /><br />    $array = $new_array;<br />    return true;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="115102">  <div class="votes">
    <div id="Vu115102">
    <a href="/manual/vote-note.php?id=115102&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115102">
    <a href="/manual/vote-note.php?id=115102&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115102" title="66% like this...">
    2
    </div>
  </div>
  <a href="#115102" class="name">
  <strong class="user"><em>bimal at sanjaal dot com</em></strong></a><a class="genanchor" href="#115102"> &para;</a><div class="date" title="2014-05-26 07:33"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115102">
<div class="phpcode"><code><span class="html">An example of reverse sorting a domain name by its name.<br /><br /><span class="default">&lt;?php<br />$domains </span><span class="keyword">= array(<br />    </span><span class="string">'sub.domain.com'</span><span class="keyword">,<br />    </span><span class="string">'sub2.domain.com'</span><span class="keyword">,<br />);<br /><br />foreach(</span><span class="default">$domains </span><span class="keyword">as </span><span class="default">$d </span><span class="keyword">=&gt; </span><span class="default">$domain</span><span class="keyword">)<br />{<br />    </span><span class="default">$chunks </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">, </span><span class="default">$domain</span><span class="keyword">);<br />    </span><span class="default">krsort</span><span class="keyword">(</span><span class="default">$chunks</span><span class="keyword">);<br /><br />    echo </span><span class="string">"\r\n&lt;br&gt;"</span><span class="keyword">, </span><span class="default">implode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$chunks</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/**<br /> * Outputs as:<br /> * <br /> * com/domain/sub <br /> * com/domain/sub2<br /> */<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="16197">  <div class="votes">
    <div id="Vu16197">
    <a href="/manual/vote-note.php?id=16197&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16197">
    <a href="/manual/vote-note.php?id=16197&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16197" title="66% like this...">
    5
    </div>
  </div>
  <a href="#16197" class="name">
  <strong class="user"><em>sbarnum at mac dot com</em></strong></a><a class="genanchor" href="#16197"> &para;</a><div class="date" title="2001-10-19 03:54"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16197">
<div class="phpcode"><code><span class="html">ksort on an array with negative integers as keys yields some odd results.  Not sure if this is a bad idea (negative key values) or what.</span></code></div>
  </div>
 </div>
  <div class="note" id="16615">  <div class="votes">
    <div id="Vu16615">
    <a href="/manual/vote-note.php?id=16615&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16615">
    <a href="/manual/vote-note.php?id=16615&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16615" title="62% like this...">
    9
    </div>
  </div>
  <a href="#16615" class="name">
  <strong class="user"><em>delvach at mail dot com</em></strong></a><a class="genanchor" href="#16615"> &para;</a><div class="date" title="2001-11-06 01:29"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16615">
<div class="phpcode"><code><span class="html">A real quick way to do a case-insensitive sort of an array keyed by strings:
<br />
<br />uksort($myArray, "strnatcasecmp");</span></code></div>
  </div>
 </div>
  <div class="note" id="89552">  <div class="votes">
    <div id="Vu89552">
    <a href="/manual/vote-note.php?id=89552&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89552">
    <a href="/manual/vote-note.php?id=89552&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89552" title="59% like this...">
    10
    </div>
  </div>
  <a href="#89552" class="name">
  <strong class="user"><em>serpro at gmail dot com</em></strong></a><a class="genanchor" href="#89552"> &para;</a><div class="date" title="2009-03-13 02:02"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89552">
<div class="phpcode"><code><span class="html">Here is a function to sort an array by the key of his sub-array.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">sksort</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$subkey</span><span class="keyword">=</span><span class="string">"id"</span><span class="keyword">, </span><span class="default">$sort_ascending</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {<br /><br />    if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">))<br />        </span><span class="default">$temp_array</span><span class="keyword">[</span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)] = </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /><br />    foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">){<br />        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$found </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        foreach(</span><span class="default">$temp_array </span><span class="keyword">as </span><span class="default">$tmp_key </span><span class="keyword">=&gt; </span><span class="default">$tmp_val</span><span class="keyword">)<br />        {<br />            if(!</span><span class="default">$found </span><span class="keyword">and </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">[</span><span class="default">$subkey</span><span class="keyword">]) &gt; </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$tmp_val</span><span class="keyword">[</span><span class="default">$subkey</span><span class="keyword">]))<br />            {<br />                </span><span class="default">$temp_array </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(    (array)</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$temp_array</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$offset</span><span class="keyword">),<br />                                            array(</span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">),<br />                                            </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$temp_array</span><span class="keyword">,</span><span class="default">$offset</span><span class="keyword">)<br />                                          );<br />                </span><span class="default">$found </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />            }<br />            </span><span class="default">$offset</span><span class="keyword">++;<br />        }<br />        if(!</span><span class="default">$found</span><span class="keyword">) </span><span class="default">$temp_array </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$temp_array</span><span class="keyword">, array(</span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">));<br />    }<br /><br />    if (</span><span class="default">$sort_ascending</span><span class="keyword">) </span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$temp_array</span><span class="keyword">);<br /><br />    else </span><span class="default">$array </span><span class="keyword">= </span><span class="default">$temp_array</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Example<br /><span class="default">&lt;?php<br />$info </span><span class="keyword">= array(</span><span class="string">"peter" </span><span class="keyword">=&gt; array(</span><span class="string">"age" </span><span class="keyword">=&gt; </span><span class="default">21</span><span class="keyword">,<br />                                           </span><span class="string">"gender" </span><span class="keyword">=&gt; </span><span class="string">"male"<br />                                           </span><span class="keyword">),<br />                   </span><span class="string">"john"  </span><span class="keyword">=&gt; array(</span><span class="string">"age" </span><span class="keyword">=&gt; </span><span class="default">19</span><span class="keyword">,<br />                                           </span><span class="string">"gender" </span><span class="keyword">=&gt; </span><span class="string">"male"<br />                                           </span><span class="keyword">),<br />                   </span><span class="string">"mary" </span><span class="keyword">=&gt; array(</span><span class="string">"age" </span><span class="keyword">=&gt; </span><span class="default">20</span><span class="keyword">,<br />                                           </span><span class="string">"gender" </span><span class="keyword">=&gt; </span><span class="string">"female"<br />                                          </span><span class="keyword">)<br />                  );<br /><br /></span><span class="default">sksort</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">, </span><span class="string">"age"</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">);<br /><br /></span><span class="default">sksort</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">, </span><span class="string">"age"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$ifno</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will be the output of the example:<br /><br />/*DESCENDING SORT*/<br />array(3) {<br />  ["peter"]=&gt;<br />  array(2) {<br />    ["age"]=&gt;<br />    int(21)<br />    ["gender"]=&gt;<br />    string(4) "male"<br />  }<br />  ["mary"]=&gt;<br />  array(2) {<br />    ["age"]=&gt;<br />    int(20)<br />    ["gender"]=&gt;<br />    string(6) "female"<br />  }<br />  ["john"]=&gt;<br />  array(2) {<br />    ["age"]=&gt;<br />    int(19)<br />    ["gender"]=&gt;<br />    string(4) "male"<br />  }<br />}<br /><br />/*ASCENDING SORT*/<br />array(3) {<br />  ["john"]=&gt;<br />  array(2) {<br />    ["age"]=&gt;<br />    int(19)<br />    ["gender"]=&gt;<br />    string(4) "male"<br />  }<br />  ["mary"]=&gt;<br />  array(2) {<br />    ["age"]=&gt;<br />    int(20)<br />    ["gender"]=&gt;<br />    string(6) "female"<br />  }<br />  ["peter"]=&gt;<br />  array(2) {<br />    ["age"]=&gt;<br />    int(21)<br />    ["gender"]=&gt;<br />    string(4) "male"<br />  }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="112968">  <div class="votes">
    <div id="Vu112968">
    <a href="/manual/vote-note.php?id=112968&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112968">
    <a href="/manual/vote-note.php?id=112968&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112968" title="60% like this...">
    5
    </div>
  </div>
  <a href="#112968" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#112968"> &para;</a><div class="date" title="2013-08-13 01:11"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112968">
<div class="phpcode"><code><span class="html">Note that this function will output the given $fields in the order they were added to the data array and not automatically in numerical key order.<br /><br />To output in ascending key order, you'll need to ksort the array first (or use appropriate natural order sorting, depending on your keys).<br /><br />For example:<br /><span class="default">&lt;?php<br />$data</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="string">'C'</span><span class="keyword">;<br /></span><span class="default">$data</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">'A'</span><span class="keyword">;<br /></span><span class="default">$data</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="string">'B'</span><span class="keyword">;<br /><br /></span><span class="default">fputcsv</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">); </span><span class="comment">// outputs: "C,A,B"<br /><br /></span><span class="default">ksort</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">fputcsv</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">); </span><span class="comment">// outputs: "A,B,C"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114339">  <div class="votes">
    <div id="Vu114339">
    <a href="/manual/vote-note.php?id=114339&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114339">
    <a href="/manual/vote-note.php?id=114339&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114339" title="54% like this...">
    2
    </div>
  </div>
  <a href="#114339" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#114339"> &para;</a><div class="date" title="2014-02-10 05:43"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114339">
<div class="phpcode"><code><span class="html">@thegrandoverseer  <br /><br />you could also use the build-in php array functions to get exactly what you want to have:<br /><br /><span class="default">&lt;?php<br />        $seed_array </span><span class="keyword">= array(</span><span class="string">'foo'</span><span class="keyword">=&gt;</span><span class="string">'bar'</span><span class="keyword">, </span><span class="string">'someotherkey'</span><span class="keyword">=&gt;</span><span class="string">'whatev'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">=&gt;</span><span class="string">'baz'</span><span class="keyword">, </span><span class="string">'baz'</span><span class="keyword">=&gt;</span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'anotherkey'</span><span class="keyword">=&gt;</span><span class="string">'anotherval'</span><span class="keyword">);<br />        </span><span class="default">$keys_array </span><span class="keyword">= array(</span><span class="string">'baz'</span><span class="keyword">, </span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">);<br /><br />        </span><span class="default">$return_array </span><span class="keyword">= </span><span class="default">array_intersect_key</span><span class="keyword">(</span><span class="default">$seed_array</span><span class="keyword">, </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$keys_array</span><span class="keyword">)) + </span><span class="default">array_diff_key</span><span class="keyword">(</span><span class="default">$seed_array</span><span class="keyword">, </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$keys_array</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49150">  <div class="votes">
    <div id="Vu49150">
    <a href="/manual/vote-note.php?id=49150&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49150">
    <a href="/manual/vote-note.php?id=49150&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49150" title="55% like this...">
    2
    </div>
  </div>
  <a href="#49150" class="name">
  <strong class="user"><em>justin at booleangate dot org</em></strong></a><a class="genanchor" href="#49150"> &para;</a><div class="date" title="2005-01-18 01:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49150">
<div class="phpcode"><code><span class="html">Here's a handy function for natural order sorting on keys.<br /><br />function natksort($array) {<br />  // Like ksort but uses natural sort instead<br />  $keys = array_keys($array);<br />  natsort($keys);<br /><br />  foreach ($keys as $k)<br />    $new_array[$k] = $array[$k];<br /><br />  return $new_array;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="103465">  <div class="votes">
    <div id="Vu103465">
    <a href="/manual/vote-note.php?id=103465&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103465">
    <a href="/manual/vote-note.php?id=103465&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103465" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#103465" class="name">
  <strong class="user"><em>jakub dot lopuszanski at nasza-klasa dot pl</em></strong></a><a class="genanchor" href="#103465"> &para;</a><div class="date" title="2011-04-14 08:48"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103465">
<div class="phpcode"><code><span class="html">Note that ksort will NOT help you much if numeric and string keys are mixed together.<br /><span class="default">&lt;?php<br />$t </span><span class="keyword">= array(<br />  </span><span class="string">"a"</span><span class="keyword">=&gt;</span><span class="string">"A"</span><span class="keyword">,<br />  </span><span class="default">0</span><span class="keyword">=&gt;</span><span class="string">"A"</span><span class="keyword">,<br />  </span><span class="string">"b"</span><span class="keyword">=&gt;</span><span class="string">"A"</span><span class="keyword">,<br />  </span><span class="default">1</span><span class="keyword">=&gt;</span><span class="string">"A"<br /></span><span class="keyword">); <br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">); <br /></span><span class="default">ksort</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">); <br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />produces (on PHP 5.3.6-4 with Suhosin-Patch) :<br /><br />array(4) {<br />  ["a"]=&gt;<br />  string(1) "A"<br />  [0]=&gt;<br />  string(1) "A"<br />  ["b"]=&gt;<br />  string(1) "A"<br />  [1]=&gt;<br />  string(1) "A"<br />}<br /><br />array(4) {<br />  ["b"]=&gt;<br />  string(1) "A"<br />  [0]=&gt;<br />  string(1) "A"<br />  ["a"]=&gt;<br />  string(1) "A"<br />  [1]=&gt;<br />  string(1) "A"<br />}<br /><br />note that the second array should be sorted by keys, but is even more messed up than the first one!</span></code></div>
  </div>
 </div>
  <div class="note" id="111965">  <div class="votes">
    <div id="Vu111965">
    <a href="/manual/vote-note.php?id=111965&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111965">
    <a href="/manual/vote-note.php?id=111965&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111965" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#111965" class="name">
  <strong class="user"><em>stephen [ at ] brooksie-net [ dot ] co [ dot ] uk</em></strong></a><a class="genanchor" href="#111965"> &para;</a><div class="date" title="2013-04-17 05:10"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111965">
<div class="phpcode"><code><span class="html">ksort and krsort fail to undestand scientific notation, <a href="https://bugs.php.net/bug.php?id=43053," rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=43053,</a> therefore when sorting numeric keys, if the key is of the form 0.00001 php will represent it as 1.0E-5.<br /><br />These methods will assume this to be a string and therefore not organise your array as you may expect. <br /><br />When using value of this form for array keys use sprintf('%f', 0.00001) to generate the key, for smaller values the precision needs to be included <br />e.g. sprintf('%0.10f', 0.00000001)</span></code></div>
  </div>
 </div>
  <div class="note" id="85046">  <div class="votes">
    <div id="Vu85046">
    <a href="/manual/vote-note.php?id=85046&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85046">
    <a href="/manual/vote-note.php?id=85046&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85046" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#85046" class="name">
  <strong class="user"><em>maik dot riechert at animey dot net</em></strong></a><a class="genanchor" href="#85046"> &para;</a><div class="date" title="2008-08-12 11:32"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85046">
<div class="phpcode"><code><span class="html">Be careful when using ksort for mixed type keys!!<br /><br />$a = array(<br />    'first' =&gt; true,<br />    0       =&gt; 'sally',<br />);<br /><br />$b = array(<br />    0       =&gt; 'sally',<br />    'first' =&gt; true,<br />);<br /><br />ksort($a);<br />ksort($b);<br />var_dump($a);<br />var_dump($b);<br /><br />Output is:<br />array(<br />    0 =&gt; 'sally',<br />    'first' =&gt; true,<br />)<br /><br />array(<br />    'first' =&gt; true,<br />    0 =&gt; 'sally',<br />)<br /><br />If you want same results for both arrays, use:<br /><br />ksort($a, SORT_STRING);<br /><br />The reason for that lays in the compare mechanism which would normally just typecast 'first' to an integer or 0 to a string when comparing it to each other. So you have to use SORT_STRING, otherwise you would lose information when 'first' is converted to int.</span></code></div>
  </div>
 </div>
  <div class="note" id="112354">  <div class="votes">
    <div id="Vu112354">
    <a href="/manual/vote-note.php?id=112354&amp;page=function.ksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112354">
    <a href="/manual/vote-note.php?id=112354&amp;page=function.ksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112354" title="35% like this...">
    -5
    </div>
  </div>
  <a href="#112354" class="name">
  <strong class="user"><em>centraleffects at yahoo dot com</em></strong></a><a class="genanchor" href="#112354"> &para;</a><div class="date" title="2013-06-06 05:46"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112354">
<div class="phpcode"><code><span class="html">I wrote this function to sort meta_value in wordpress. I tried a lot of array sorting but neither of them work. But this is not suitable for multidimensional array. This is intended only for wordpress meta_value<br /><br />The problem is to sort below( the order should be ascending; alphabetically then numerically like A-Z then 0-9):<br />500-999 users<br />25-49 users<br /> All Sizes<br />1-4 users<br />5-9 users<br />10-24 users<br />250-499 users<br />1000-4999<br />5000-9999<br /><br />The solution:<br /><br />function array_sort($arr){<br />    if(is_array($arr)){<br />        $numeric = array();<br />        $string = array();<br />        foreach($arr as $k =&gt; $v)<br />        {<br />            if(isset($v["meta_value"])){<br />                 $str = explode(" ",trim($v["meta_value"]));<br />                 $firstWord  = explode("-",trim($str[0]));<br />             }else{<br />                 $str = $v;<br />                 $firstWord  = explode("-",trim($str));<br />             }<br /><br />            $firstWord = $firstWord[0];<br /><br />            if(is_numeric($firstWord))<br />            {<br />                $numeric[(int)$firstWord] = $v;<br />            }else{<br />                $string[$firstWord] = $v;<br />            }<br />            unset($firstWord);<br />        }<br />        ksort($string,SORT_STRING);<br />        ksort($numeric,SORT_NUMERIC);<br /><br />        return array_merge((array)$string, (array)$numeric);<br />    }<br />    <br /><br />    return false;<br />}<br /><br />The usage:<br />$meta =get_post_meta($post_id,$meta_key);<br />$sorted = array_sort($meta);<br /><br />The result:<br /> All Sizes<br />1-4 users<br />5-9 users<br />10-24 users<br />25-49 users<br />250-499 users<br />500-999 users<br />1000-4999<br />5000-9999</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ksort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ksort.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.array.php">Array Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.array.php" title="array">array</a>
                        </li>
                                                <li class="">
                            <a href="function.array-all.php" title="array_&#8203;all">array_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.array-any.php" title="array_&#8203;any">array_&#8203;any</a>
                        </li>
                                                <li class="">
                            <a href="function.array-change-key-case.php" title="array_&#8203;change_&#8203;key_&#8203;case">array_&#8203;change_&#8203;key_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.array-chunk.php" title="array_&#8203;chunk">array_&#8203;chunk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-column.php" title="array_&#8203;column">array_&#8203;column</a>
                        </li>
                                                <li class="">
                            <a href="function.array-combine.php" title="array_&#8203;combine">array_&#8203;combine</a>
                        </li>
                                                <li class="">
                            <a href="function.array-count-values.php" title="array_&#8203;count_&#8203;values">array_&#8203;count_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff.php" title="array_&#8203;diff">array_&#8203;diff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-assoc.php" title="array_&#8203;diff_&#8203;assoc">array_&#8203;diff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-key.php" title="array_&#8203;diff_&#8203;key">array_&#8203;diff_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-uassoc.php" title="array_&#8203;diff_&#8203;uassoc">array_&#8203;diff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-ukey.php" title="array_&#8203;diff_&#8203;ukey">array_&#8203;diff_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill.php" title="array_&#8203;fill">array_&#8203;fill</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill-keys.php" title="array_&#8203;fill_&#8203;keys">array_&#8203;fill_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-filter.php" title="array_&#8203;filter">array_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find.php" title="array_&#8203;find">array_&#8203;find</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find-key.php" title="array_&#8203;find_&#8203;key">array_&#8203;find_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-flip.php" title="array_&#8203;flip">array_&#8203;flip</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect.php" title="array_&#8203;intersect">array_&#8203;intersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-assoc.php" title="array_&#8203;intersect_&#8203;assoc">array_&#8203;intersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-key.php" title="array_&#8203;intersect_&#8203;key">array_&#8203;intersect_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-uassoc.php" title="array_&#8203;intersect_&#8203;uassoc">array_&#8203;intersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-ukey.php" title="array_&#8203;intersect_&#8203;ukey">array_&#8203;intersect_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-is-list.php" title="array_&#8203;is_&#8203;list">array_&#8203;is_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-exists.php" title="array_&#8203;key_&#8203;exists">array_&#8203;key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-first.php" title="array_&#8203;key_&#8203;first">array_&#8203;key_&#8203;first</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-last.php" title="array_&#8203;key_&#8203;last">array_&#8203;key_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.array-keys.php" title="array_&#8203;keys">array_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-map.php" title="array_&#8203;map">array_&#8203;map</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge.php" title="array_&#8203;merge">array_&#8203;merge</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge-recursive.php" title="array_&#8203;merge_&#8203;recursive">array_&#8203;merge_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-multisort.php" title="array_&#8203;multisort">array_&#8203;multisort</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pad.php" title="array_&#8203;pad">array_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pop.php" title="array_&#8203;pop">array_&#8203;pop</a>
                        </li>
                                                <li class="">
                            <a href="function.array-product.php" title="array_&#8203;product">array_&#8203;product</a>
                        </li>
                                                <li class="">
                            <a href="function.array-push.php" title="array_&#8203;push">array_&#8203;push</a>
                        </li>
                                                <li class="">
                            <a href="function.array-rand.php" title="array_&#8203;rand">array_&#8203;rand</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reduce.php" title="array_&#8203;reduce">array_&#8203;reduce</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace.php" title="array_&#8203;replace">array_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace-recursive.php" title="array_&#8203;replace_&#8203;recursive">array_&#8203;replace_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reverse.php" title="array_&#8203;reverse">array_&#8203;reverse</a>
                        </li>
                                                <li class="">
                            <a href="function.array-search.php" title="array_&#8203;search">array_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.array-shift.php" title="array_&#8203;shift">array_&#8203;shift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-slice.php" title="array_&#8203;slice">array_&#8203;slice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-splice.php" title="array_&#8203;splice">array_&#8203;splice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-sum.php" title="array_&#8203;sum">array_&#8203;sum</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff.php" title="array_&#8203;udiff">array_&#8203;udiff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-assoc.php" title="array_&#8203;udiff_&#8203;assoc">array_&#8203;udiff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-uassoc.php" title="array_&#8203;udiff_&#8203;uassoc">array_&#8203;udiff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect.php" title="array_&#8203;uintersect">array_&#8203;uintersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-assoc.php" title="array_&#8203;uintersect_&#8203;assoc">array_&#8203;uintersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-uassoc.php" title="array_&#8203;uintersect_&#8203;uassoc">array_&#8203;uintersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unique.php" title="array_&#8203;unique">array_&#8203;unique</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unshift.php" title="array_&#8203;unshift">array_&#8203;unshift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-values.php" title="array_&#8203;values">array_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk.php" title="array_&#8203;walk">array_&#8203;walk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk-recursive.php" title="array_&#8203;walk_&#8203;recursive">array_&#8203;walk_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.arsort.php" title="arsort">arsort</a>
                        </li>
                                                <li class="">
                            <a href="function.asort.php" title="asort">asort</a>
                        </li>
                                                <li class="">
                            <a href="function.compact.php" title="compact">compact</a>
                        </li>
                                                <li class="">
                            <a href="function.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="function.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="function.end.php" title="end">end</a>
                        </li>
                                                <li class="">
                            <a href="function.extract.php" title="extract">extract</a>
                        </li>
                                                <li class="">
                            <a href="function.in-array.php" title="in_&#8203;array">in_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="function.key-exists.php" title="key_&#8203;exists">key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.krsort.php" title="krsort">krsort</a>
                        </li>
                                                <li class="current">
                            <a href="function.ksort.php" title="ksort">ksort</a>
                        </li>
                                                <li class="">
                            <a href="function.list.php" title="list">list</a>
                        </li>
                                                <li class="">
                            <a href="function.natcasesort.php" title="natcasesort">natcasesort</a>
                        </li>
                                                <li class="">
                            <a href="function.natsort.php" title="natsort">natsort</a>
                        </li>
                                                <li class="">
                            <a href="function.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="function.pos.php" title="pos">pos</a>
                        </li>
                                                <li class="">
                            <a href="function.prev.php" title="prev">prev</a>
                        </li>
                                                <li class="">
                            <a href="function.range.php" title="range">range</a>
                        </li>
                                                <li class="">
                            <a href="function.reset.php" title="reset">reset</a>
                        </li>
                                                <li class="">
                            <a href="function.rsort.php" title="rsort">rsort</a>
                        </li>
                                                <li class="">
                            <a href="function.shuffle.php" title="shuffle">shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.sizeof.php" title="sizeof">sizeof</a>
                        </li>
                                                <li class="">
                            <a href="function.sort.php" title="sort">sort</a>
                        </li>
                                                <li class="">
                            <a href="function.uasort.php" title="uasort">uasort</a>
                        </li>
                                                <li class="">
                            <a href="function.uksort.php" title="uksort">uksort</a>
                        </li>
                                                <li class="">
                            <a href="function.usort.php" title="usort">usort</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.each.php" title="each">each</a>
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
