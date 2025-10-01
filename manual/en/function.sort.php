<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: sort - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.sort.php">
 <link rel="shorturl" href="https://www.php.net/sort">
 <link rel="alternate" href="https://www.php.net/sort" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.sizeof.php">
 <link rel="next" href="https://www.php.net/manual/en/function.uasort.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.sort.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.sort.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.sort.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.sort.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.sort.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.sort.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.sort.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.sort.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.sort.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.sort.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.sort.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sort an array in ascending order" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: sort - Manual" />
<meta name="twitter:description" content="Sort an array in ascending order" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: sort - Manual" />
<meta itemprop="description" content="Sort an array in ascending order" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sort an array in ascending order" />

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
        <a href="function.uasort.php">
          uasort &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.sizeof.php">
          &laquo; sizeof        </a>
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
            <option value='en/function.sort.php' selected="selected">English</option>
            <option value='de/function.sort.php'>German</option>
            <option value='es/function.sort.php'>Spanish</option>
            <option value='fr/function.sort.php'>French</option>
            <option value='it/function.sort.php'>Italian</option>
            <option value='ja/function.sort.php'>Japanese</option>
            <option value='pt_BR/function.sort.php'>Brazilian Portuguese</option>
            <option value='ru/function.sort.php'>Russian</option>
            <option value='tr/function.sort.php'>Turkish</option>
            <option value='uk/function.sort.php'>Ukrainian</option>
            <option value='zh/function.sort.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.sort" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">sort</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">sort</span> &mdash; <span class="dc-title">Sort an array in ascending order</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.sort-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>sort</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   Sorts <code class="parameter">array</code> in place by values
   in ascending order.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
 <p class="para">
  If two members compare as equal, they retain their original order.
  Prior to PHP 8.0.0, their relative order in the sorted array was undefined.
 </p>
</p></blockquote>

  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function
assigns new keys to the elements in <code class="parameter">array</code>.
It will remove any existing keys that may have been assigned, rather
than just reordering the keys.</span></p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
 <p class="para">
    Resets array&#039;s internal pointer to the first element.
 </p>
</p></blockquote>

 </div>


 <div class="refsect1 parameters" id="refsect1-function.sort-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-function.sort-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.sort-changelog">
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

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.sort-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5327">
    <p><strong>Example #1 <span class="function"><strong>sort()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$fruits </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"lemon"</span><span style="color: #007700">, </span><span style="color: #DD0000">"orange"</span><span style="color: #007700">, </span><span style="color: #DD0000">"banana"</span><span style="color: #007700">, </span><span style="color: #DD0000">"apple"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">sort</span><span style="color: #007700">(</span><span style="color: #0000BB">$fruits</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$fruits </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"fruits[" </span><span style="color: #007700">. </span><span style="color: #0000BB">$key </span><span style="color: #007700">. </span><span style="color: #DD0000">"] = " </span><span style="color: #007700">. </span><span style="color: #0000BB">$val </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">fruits[0] = apple
fruits[1] = banana
fruits[2] = lemon
fruits[3] = orange</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   The fruits have been sorted in alphabetical order.
  </p>
  <p class="para">
   <div class="example" id="example-5328">
    <p><strong>Example #2 <span class="function"><strong>sort()</strong></span> example using case-insensitive natural
    ordering</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$fruits </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">"Orange1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"orange2"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Orange3"</span><span style="color: #007700">, </span><span style="color: #DD0000">"orange20"<br /></span><span style="color: #007700">);<br /></span><span style="color: #0000BB">sort</span><span style="color: #007700">(</span><span style="color: #0000BB">$fruits</span><span style="color: #007700">, </span><span style="color: #0000BB">SORT_NATURAL </span><span style="color: #007700">| </span><span style="color: #0000BB">SORT_FLAG_CASE</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$fruits </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"fruits[" </span><span style="color: #007700">. </span><span style="color: #0000BB">$key </span><span style="color: #007700">. </span><span style="color: #DD0000">"] = " </span><span style="color: #007700">. </span><span style="color: #0000BB">$val </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">fruits[0] = Orange1
fruits[1] = orange2
fruits[2] = Orange3
fruits[3] = orange20</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   The fruits have been sorted like <span class="function"><a href="function.natcasesort.php" class="function">natcasesort()</a></span>.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.sort-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Like most PHP sorting functions, <span class="function"><strong>sort()</strong></span> uses an
    implementation of <a href="http://en.wikipedia.org/wiki/Quicksort" class="link external">&raquo;&nbsp;Quicksort</a>.
    The pivot is chosen in the middle of the partition resulting in an optimal
    time for already sorted arrays. This is however an implementation detail you
    shouldn&#039;t rely on.
   </span>
  </p></blockquote>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    Be careful when sorting arrays with mixed types values because
    <span class="function"><strong>sort()</strong></span> can produce unexpected results,
    if <code class="parameter">flags</code> is <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong>.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.sort-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.rsort.php" class="function" rel="rdfs-seeAlso">rsort()</a> - Sort an array in descending order</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/sort.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.sort%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.sort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sort.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">35 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99419">  <div class="votes">
    <div id="Vu99419">
    <a href="/manual/vote-note.php?id=99419&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99419">
    <a href="/manual/vote-note.php?id=99419&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99419" title="70% like this...">
    225
    </div>
  </div>
  <a href="#99419" class="name">
  <strong class="user"><em>phpdotnet at m4tt dot co dot uk</em></strong></a><a class="genanchor" href="#99419"> &para;</a><div class="date" title="2010-08-16 07:03"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99419">
<div class="phpcode"><code><span class="html">Simple function to sort an array by a specific key. Maintains index association.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_sort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$on</span><span class="keyword">, </span><span class="default">$order</span><span class="keyword">=</span><span class="default">SORT_ASC</span><span class="keyword">)<br />{<br />    </span><span class="default">$new_array </span><span class="keyword">= array();<br />    </span><span class="default">$sortable_array </span><span class="keyword">= array();<br /><br />    if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">) {<br />        foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />            if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) {<br />                foreach (</span><span class="default">$v </span><span class="keyword">as </span><span class="default">$k2 </span><span class="keyword">=&gt; </span><span class="default">$v2</span><span class="keyword">) {<br />                    if (</span><span class="default">$k2 </span><span class="keyword">== </span><span class="default">$on</span><span class="keyword">) {<br />                        </span><span class="default">$sortable_array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v2</span><span class="keyword">;<br />                    }<br />                }<br />            } else {<br />                </span><span class="default">$sortable_array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;<br />            }<br />        }<br /><br />        switch (</span><span class="default">$order</span><span class="keyword">) {<br />            case </span><span class="default">SORT_ASC</span><span class="keyword">:<br />                </span><span class="default">asort</span><span class="keyword">(</span><span class="default">$sortable_array</span><span class="keyword">);<br />            break;<br />            case </span><span class="default">SORT_DESC</span><span class="keyword">:<br />                </span><span class="default">arsort</span><span class="keyword">(</span><span class="default">$sortable_array</span><span class="keyword">);<br />            break;<br />        }<br /><br />        foreach (</span><span class="default">$sortable_array </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />            </span><span class="default">$new_array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">];<br />        }<br />    }<br /><br />    return </span><span class="default">$new_array</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$people </span><span class="keyword">= array(<br />    </span><span class="default">12345 </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">12345</span><span class="keyword">,<br />        </span><span class="string">'first_name' </span><span class="keyword">=&gt; </span><span class="string">'Joe'</span><span class="keyword">,<br />        </span><span class="string">'surname' </span><span class="keyword">=&gt; </span><span class="string">'Bloggs'</span><span class="keyword">,<br />        </span><span class="string">'age' </span><span class="keyword">=&gt; </span><span class="default">23</span><span class="keyword">,<br />        </span><span class="string">'sex' </span><span class="keyword">=&gt; </span><span class="string">'m'<br />    </span><span class="keyword">),<br />    </span><span class="default">12346 </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">12346</span><span class="keyword">,<br />        </span><span class="string">'first_name' </span><span class="keyword">=&gt; </span><span class="string">'Adam'</span><span class="keyword">,<br />        </span><span class="string">'surname' </span><span class="keyword">=&gt; </span><span class="string">'Smith'</span><span class="keyword">,<br />        </span><span class="string">'age' </span><span class="keyword">=&gt; </span><span class="default">18</span><span class="keyword">,<br />        </span><span class="string">'sex' </span><span class="keyword">=&gt; </span><span class="string">'m'<br />    </span><span class="keyword">),<br />    </span><span class="default">12347 </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">12347</span><span class="keyword">,<br />        </span><span class="string">'first_name' </span><span class="keyword">=&gt; </span><span class="string">'Amy'</span><span class="keyword">,<br />        </span><span class="string">'surname' </span><span class="keyword">=&gt; </span><span class="string">'Jones'</span><span class="keyword">,<br />        </span><span class="string">'age' </span><span class="keyword">=&gt; </span><span class="default">21</span><span class="keyword">,<br />        </span><span class="string">'sex' </span><span class="keyword">=&gt; </span><span class="string">'f'<br />    </span><span class="keyword">)<br />);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_sort</span><span class="keyword">(</span><span class="default">$people</span><span class="keyword">, </span><span class="string">'age'</span><span class="keyword">, </span><span class="default">SORT_DESC</span><span class="keyword">)); </span><span class="comment">// Sort by oldest first<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_sort</span><span class="keyword">(</span><span class="default">$people</span><span class="keyword">, </span><span class="string">'surname'</span><span class="keyword">, </span><span class="default">SORT_ASC</span><span class="keyword">)); </span><span class="comment">// Sort by surname<br /><br />/*<br />Array<br />(<br />    [12345] =&gt; Array<br />        (<br />            [id] =&gt; 12345<br />            [first_name] =&gt; Joe<br />            [surname] =&gt; Bloggs<br />            [age] =&gt; 23<br />            [sex] =&gt; m<br />        )<br /> <br />    [12347] =&gt; Array<br />        (<br />            [id] =&gt; 12347<br />            [first_name] =&gt; Amy<br />            [surname] =&gt; Jones<br />            [age] =&gt; 21<br />            [sex] =&gt; f<br />        )<br /> <br />    [12346] =&gt; Array<br />        (<br />            [id] =&gt; 12346<br />            [first_name] =&gt; Adam<br />            [surname] =&gt; Smith<br />            [age] =&gt; 18<br />            [sex] =&gt; m<br />        )<br /> <br />)<br />Array<br />(<br />    [12345] =&gt; Array<br />        (<br />            [id] =&gt; 12345<br />            [first_name] =&gt; Joe<br />            [surname] =&gt; Bloggs<br />            [age] =&gt; 23<br />            [sex] =&gt; m<br />        )<br /> <br />    [12347] =&gt; Array<br />        (<br />            [id] =&gt; 12347<br />            [first_name] =&gt; Amy<br />            [surname] =&gt; Jones<br />            [age] =&gt; 21<br />            [sex] =&gt; f<br />        )<br /> <br />    [12346] =&gt; Array<br />        (<br />            [id] =&gt; 12346<br />            [first_name] =&gt; Adam<br />            [surname] =&gt; Smith<br />            [age] =&gt; 18<br />            [sex] =&gt; m<br />        )<br /> <br />)<br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106900">  <div class="votes">
    <div id="Vu106900">
    <a href="/manual/vote-note.php?id=106900&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106900">
    <a href="/manual/vote-note.php?id=106900&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106900" title="57% like this...">
    12
    </div>
  </div>
  <a href="#106900" class="name">
  <strong class="user"><em>Walter Tross</em></strong></a><a class="genanchor" href="#106900"> &para;</a><div class="date" title="2011-12-16 02:38"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106900">
<div class="phpcode"><code><span class="html">unless you specify the second argument, "regular" comparisons will be used. I quote from the page on comparison operators:<br />"If you compare a number with a string or the comparison involves numerical strings, then each string is converted to a number and the comparison performed numerically."<br />What this means is that "10" &lt; "1a", and "1a" &lt; "2", but "10" &gt; "2". In other words, regular PHP string comparisons are not transitive.<br />This implies that the output of sort() can in rare cases depend on the order of the input array:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">echo_sorted</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">)<br />{<br />   echo </span><span class="string">"</span><span class="keyword">{</span><span class="default">$a</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string"> </span><span class="keyword">{</span><span class="default">$a</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]}</span><span class="string"> </span><span class="keyword">{</span><span class="default">$a</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]}</span><span class="string">"</span><span class="keyword">;<br />   </span><span class="default">sort</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />   echo </span><span class="string">" =&gt; </span><span class="keyword">{</span><span class="default">$a</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string"> </span><span class="keyword">{</span><span class="default">$a</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]}</span><span class="string"> </span><span class="keyword">{</span><span class="default">$a</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]}</span><span class="string">\n"</span><span class="keyword">;<br />}<br /></span><span class="comment">// on PHP 5.2.6:<br /></span><span class="default">echo_sorted</span><span class="keyword">(array( </span><span class="string">"10"</span><span class="keyword">, </span><span class="string">"1a"</span><span class="keyword">, </span><span class="string">"2"</span><span class="keyword">)); </span><span class="comment">// =&gt; 10 1a 2<br /></span><span class="default">echo_sorted</span><span class="keyword">(array( </span><span class="string">"10"</span><span class="keyword">, </span><span class="string">"2"</span><span class="keyword">, </span><span class="string">"1a"</span><span class="keyword">)); </span><span class="comment">// =&gt; 1a 2 10<br /></span><span class="default">echo_sorted</span><span class="keyword">(array( </span><span class="string">"1a"</span><span class="keyword">, </span><span class="string">"10"</span><span class="keyword">, </span><span class="string">"2"</span><span class="keyword">)); </span><span class="comment">// =&gt; 2 10 1a<br /></span><span class="default">echo_sorted</span><span class="keyword">(array( </span><span class="string">"1a"</span><span class="keyword">, </span><span class="string">"2"</span><span class="keyword">, </span><span class="string">"10"</span><span class="keyword">)); </span><span class="comment">// =&gt; 1a 2 10<br /></span><span class="default">echo_sorted</span><span class="keyword">(array( </span><span class="string">"2"</span><span class="keyword">, </span><span class="string">"10"</span><span class="keyword">, </span><span class="string">"1a"</span><span class="keyword">)); </span><span class="comment">// =&gt; 2 10 1a<br /></span><span class="default">echo_sorted</span><span class="keyword">(array( </span><span class="string">"2"</span><span class="keyword">, </span><span class="string">"1a"</span><span class="keyword">, </span><span class="string">"10"</span><span class="keyword">)); </span><span class="comment">// =&gt; 10 1a 2<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125067">  <div class="votes">
    <div id="Vu125067">
    <a href="/manual/vote-note.php?id=125067&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125067">
    <a href="/manual/vote-note.php?id=125067&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125067" title="57% like this...">
    3
    </div>
  </div>
  <a href="#125067" class="name">
  <strong class="user"><em>aminkhoshzahmat at gmail dot com</em></strong></a><a class="genanchor" href="#125067"> &para;</a><div class="date" title="2020-06-01 07:02"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125067">
<div class="phpcode"><code><span class="html">Let's say we have a list of names, and it is not sorted.<br /><br /><span class="default">&lt;?php<br /><br />$names </span><span class="keyword">= array(</span><span class="string">'Amin'</span><span class="keyword">, </span><span class="string">'amir'</span><span class="keyword">, </span><span class="string">'sarah'</span><span class="keyword">, </span><span class="string">'Somayeh'</span><span class="keyword">, </span><span class="string">'armita'</span><span class="keyword">, </span><span class="string">'Armin'</span><span class="keyword">);<br /><br /></span><span class="default">sort</span><span class="keyword">(</span><span class="default">$names</span><span class="keyword">); </span><span class="comment">// simple alphabetical sort<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$names</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Result is :<br />Array<br />(<br />    [0] =&gt; Amin<br />    [1] =&gt; Armin<br />    [2] =&gt; Somayeh // actually it's not sort alphabetically from here!<br />    [3] =&gt; amir         // comparison is based on ASCII values.<br />    [4] =&gt; armita<br />    [5] =&gt; sarah<br />)<br /><br />If you want to sort alphabeticaly no matter it is upper or lower case:<br /><br /><span class="default">&lt;?php<br /><br />sort</span><span class="keyword">(</span><span class="default">$names</span><span class="keyword">, </span><span class="default">SORT_STRING </span><span class="keyword">| </span><span class="default">SORT_FLAG_CASE</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$names</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Result is:<br />Array<br />(<br />    [0] =&gt; Amin<br />    [1] =&gt; amir<br />    [2] =&gt; Armin<br />    [3] =&gt; armita<br />    [4] =&gt; sarah<br />    [5] =&gt; Somayeh<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="119448">  <div class="votes">
    <div id="Vu119448">
    <a href="/manual/vote-note.php?id=119448&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119448">
    <a href="/manual/vote-note.php?id=119448&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119448" title="57% like this...">
    2
    </div>
  </div>
  <a href="#119448" class="name">
  <strong class="user"><em>Abhishek Banerjee</em></strong></a><a class="genanchor" href="#119448"> &para;</a><div class="date" title="2016-06-08 07:39"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119448">
<div class="phpcode"><code><span class="html">EDIT: To the original note by "phpdotnet at m4tt dot co dot uk" <br />Use array_push instead of $new_array[$k] for some reason it was <br />giving me string indexes.<br /><br />Simple function to sort an array by a specific key. Maintains index association.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_sort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$on</span><span class="keyword">, </span><span class="default">$order</span><span class="keyword">=</span><span class="default">SORT_ASC</span><span class="keyword">)<br />{<br />    </span><span class="default">$new_array </span><span class="keyword">= array();<br />    </span><span class="default">$sortable_array </span><span class="keyword">= array();<br /><br />    if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">) {<br />        foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />            if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) {<br />                foreach (</span><span class="default">$v </span><span class="keyword">as </span><span class="default">$k2 </span><span class="keyword">=&gt; </span><span class="default">$v2</span><span class="keyword">) {<br />                    if (</span><span class="default">$k2 </span><span class="keyword">== </span><span class="default">$on</span><span class="keyword">) {<br />                        </span><span class="default">$sortable_array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v2</span><span class="keyword">;<br />                    }<br />                }<br />            } else {<br />                </span><span class="default">$sortable_array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;<br />            }<br />        }<br /><br />        switch (</span><span class="default">$order</span><span class="keyword">) {<br />            case </span><span class="default">SORT_ASC</span><span class="keyword">:<br />                </span><span class="default">asort</span><span class="keyword">(</span><span class="default">$sortable_array</span><span class="keyword">);<br />            break;<br />            case </span><span class="default">SORT_DESC</span><span class="keyword">:<br />                </span><span class="default">arsort</span><span class="keyword">(</span><span class="default">$sortable_array</span><span class="keyword">);<br />            break;<br />        }<br /><br />        foreach (</span><span class="default">$sortable_array </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />            </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$new_array</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);<br />        }<br />    }<br /><br />    return </span><span class="default">$new_array</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$people </span><span class="keyword">= array(<br />    </span><span class="default">12345 </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">12345</span><span class="keyword">,<br />        </span><span class="string">'first_name' </span><span class="keyword">=&gt; </span><span class="string">'Joe'</span><span class="keyword">,<br />        </span><span class="string">'surname' </span><span class="keyword">=&gt; </span><span class="string">'Bloggs'</span><span class="keyword">,<br />        </span><span class="string">'age' </span><span class="keyword">=&gt; </span><span class="default">23</span><span class="keyword">,<br />        </span><span class="string">'sex' </span><span class="keyword">=&gt; </span><span class="string">'m'<br />    </span><span class="keyword">),<br />    </span><span class="default">12346 </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">12346</span><span class="keyword">,<br />        </span><span class="string">'first_name' </span><span class="keyword">=&gt; </span><span class="string">'Adam'</span><span class="keyword">,<br />        </span><span class="string">'surname' </span><span class="keyword">=&gt; </span><span class="string">'Smith'</span><span class="keyword">,<br />        </span><span class="string">'age' </span><span class="keyword">=&gt; </span><span class="default">18</span><span class="keyword">,<br />        </span><span class="string">'sex' </span><span class="keyword">=&gt; </span><span class="string">'m'<br />    </span><span class="keyword">),<br />    </span><span class="default">12347 </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">12347</span><span class="keyword">,<br />        </span><span class="string">'first_name' </span><span class="keyword">=&gt; </span><span class="string">'Amy'</span><span class="keyword">,<br />        </span><span class="string">'surname' </span><span class="keyword">=&gt; </span><span class="string">'Jones'</span><span class="keyword">,<br />        </span><span class="string">'age' </span><span class="keyword">=&gt; </span><span class="default">21</span><span class="keyword">,<br />        </span><span class="string">'sex' </span><span class="keyword">=&gt; </span><span class="string">'f'<br />    </span><span class="keyword">)<br />);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_sort</span><span class="keyword">(</span><span class="default">$people</span><span class="keyword">, </span><span class="string">'age'</span><span class="keyword">, </span><span class="default">SORT_DESC</span><span class="keyword">)); </span><span class="comment">// Sort by oldest first<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_sort</span><span class="keyword">(</span><span class="default">$people</span><span class="keyword">, </span><span class="string">'surname'</span><span class="keyword">, </span><span class="default">SORT_ASC</span><span class="keyword">)); </span><span class="comment">// Sort by surname<br /><br />/*<br />Array<br />(<br />    [12345] =&gt; Array<br />        (<br />            [id] =&gt; 12345<br />            [first_name] =&gt; Joe<br />            [surname] =&gt; Bloggs<br />            [age] =&gt; 23<br />            [sex] =&gt; m<br />        )<br /><br />    [12347] =&gt; Array<br />        (<br />            [id] =&gt; 12347<br />            [first_name] =&gt; Amy<br />            [surname] =&gt; Jones<br />            [age] =&gt; 21<br />            [sex] =&gt; f<br />        )<br /><br />    [12346] =&gt; Array<br />        (<br />            [id] =&gt; 12346<br />            [first_name] =&gt; Adam<br />            [surname] =&gt; Smith<br />            [age] =&gt; 18<br />            [sex] =&gt; m<br />        )<br /><br />)<br />Array<br />(<br />    [12345] =&gt; Array<br />        (<br />            [id] =&gt; 12345<br />            [first_name] =&gt; Joe<br />            [surname] =&gt; Bloggs<br />            [age] =&gt; 23<br />            [sex] =&gt; m<br />        )<br /><br />    [12347] =&gt; Array<br />        (<br />            [id] =&gt; 12347<br />            [first_name] =&gt; Amy<br />            [surname] =&gt; Jones<br />            [age] =&gt; 21<br />            [sex] =&gt; f<br />        )<br /><br />    [12346] =&gt; Array<br />        (<br />            [id] =&gt; 12346<br />            [first_name] =&gt; Adam<br />            [surname] =&gt; Smith<br />            [age] =&gt; 18<br />            [sex] =&gt; m<br />        )<br /><br />)<br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124755">  <div class="votes">
    <div id="Vu124755">
    <a href="/manual/vote-note.php?id=124755&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124755">
    <a href="/manual/vote-note.php?id=124755&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124755" title="54% like this...">
    1
    </div>
  </div>
  <a href="#124755" class="name">
  <strong class="user"><em>Md. Abutaleb</em></strong></a><a class="genanchor" href="#124755"> &para;</a><div class="date" title="2020-02-25 12:28"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124755">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /></span><span class="comment">/*<br />As I found the sort() function normally works as ascending order based on the following priority :<br />1. NULL<br />2. Empty <br />3. Boolean FALSE <br />4. String <br />5. Float <br />6. Int <br />7. Array<br />8. Object <br /><br />Consider the following array: <br />*/<br /><br /></span><span class="default">$a </span><span class="keyword">= [</span><span class="string">'fruit'</span><span class="keyword">=&gt; </span><span class="string">'apple'</span><span class="keyword">, </span><span class="string">'A' </span><span class="keyword">=&gt; </span><span class="default">10</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">2.5</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">=&gt;</span><span class="string">'A new value'</span><span class="keyword">, </span><span class="string">'last' </span><span class="keyword">=&gt; </span><span class="string">'value'</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">, array(), new </span><span class="default">StdClass</span><span class="keyword">];<br /></span><span class="default">sort</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /><br /></span><span class="comment">#The output is: <br /><br /></span><span class="keyword">array(</span><span class="default">13</span><span class="keyword">) {<br />  [</span><span class="default">0</span><span class="keyword">]=&gt;</span><span class="default">NULL<br />  </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=&gt; </span><span class="default">string</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">) </span><span class="string">""<br />  </span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]=&gt;</span><span class="default">bool</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">)<br />  [</span><span class="default">3</span><span class="keyword">]=&gt;</span><span class="default">string</span><span class="keyword">(</span><span class="default">11</span><span class="keyword">) </span><span class="string">"A new value"<br />  </span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]=&gt;</span><span class="default">string</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">) </span><span class="string">"apple"<br />  </span><span class="keyword">[</span><span class="default">5</span><span class="keyword">]=&gt;</span><span class="default">string</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">) </span><span class="string">"value"<br />  </span><span class="keyword">[</span><span class="default">6</span><span class="keyword">]=&gt; </span><span class="default">float</span><span class="keyword">(</span><span class="default">2.5</span><span class="keyword">)<br />  [</span><span class="default">7</span><span class="keyword">]=&gt; </span><span class="default">int</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">)<br />  [</span><span class="default">8</span><span class="keyword">]=&gt;</span><span class="default">int</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">)<br />  [</span><span class="default">9</span><span class="keyword">]=&gt;</span><span class="default">int</span><span class="keyword">(</span><span class="default">20</span><span class="keyword">)<br />  [</span><span class="default">10</span><span class="keyword">]=&gt;array(</span><span class="default">0</span><span class="keyword">) { }<br />  [</span><span class="default">11</span><span class="keyword">]=&gt; </span><span class="default">bool</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">)<br />  [</span><span class="default">12</span><span class="keyword">]=&gt;</span><span class="default">object</span><span class="keyword">(</span><span class="default">stdClass</span><span class="keyword">)</span><span class="comment">#1 (0) {}<br /></span><span class="keyword">}<br /><br /></span><span class="comment">//Hope it will remove your confusion when you're sorting an array with mix type data. <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97046">  <div class="votes">
    <div id="Vu97046">
    <a href="/manual/vote-note.php?id=97046&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97046">
    <a href="/manual/vote-note.php?id=97046&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97046" title="54% like this...">
    2
    </div>
  </div>
  <a href="#97046" class="name">
  <strong class="user"><em>eriewave at hotmail dot com</em></strong></a><a class="genanchor" href="#97046"> &para;</a><div class="date" title="2010-03-29 01:16"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97046">
<div class="phpcode"><code><span class="html">If you need to sort an array containing some equivalent values and you want the equivalents to end up next to each other in the overall order (similar to a MySQL's ORDER BY output), rather than breaking the function, do this:<br /><br /><span class="default">&lt;?php<br /><br />sort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">ksort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">))<br /><br /></span><span class="default">?&gt;<br /></span><br />-When the sort() function finds two equivalents, it will sort them arbitrarily by their key #'s as a second parameter.<br /><br />-Dirk</span></code></div>
  </div>
 </div>
  <div class="note" id="93157">  <div class="votes">
    <div id="Vu93157">
    <a href="/manual/vote-note.php?id=93157&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93157">
    <a href="/manual/vote-note.php?id=93157&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93157" title="53% like this...">
    3
    </div>
  </div>
  <a href="#93157" class="name">
  <strong class="user"><em>danm68 at gmail dot com</em></strong></a><a class="genanchor" href="#93157"> &para;</a><div class="date" title="2009-08-25 09:59"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93157">
<div class="phpcode"><code><span class="html">sort() used with strings doesn't sort just alphabetically. It sorts all upper-case strings alphabetically first and then sorts lower-case strings alphabetically second. <br />Just in case anyone was as confused as I was and I've never seen this mentioned anywhere.</span></code></div>
  </div>
 </div>
  <div class="note" id="106243">  <div class="votes">
    <div id="Vu106243">
    <a href="/manual/vote-note.php?id=106243&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106243">
    <a href="/manual/vote-note.php?id=106243&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106243" title="52% like this...">
    2
    </div>
  </div>
  <a href="#106243" class="name">
  <strong class="user"><em>ajanata at gmail dot com</em></strong></a><a class="genanchor" href="#106243"> &para;</a><div class="date" title="2011-10-20 09:13"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106243">
<div class="phpcode"><code><span class="html">This took me longer than it should have to figure out, but if you want the behavior of sort($array, SORT_STRING) (that is, re-indexing the array unlike natcasesort) in a case-insensitive manner, it is a simple matter of doing usort($array, strcasecmp).</span></code></div>
  </div>
 </div>
  <div class="note" id="72780">  <div class="votes">
    <div id="Vu72780">
    <a href="/manual/vote-note.php?id=72780&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72780">
    <a href="/manual/vote-note.php?id=72780&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72780" title="53% like this...">
    2
    </div>
  </div>
  <a href="#72780" class="name">
  <strong class="user"><em>joris at mangrove dot nl</em></strong></a><a class="genanchor" href="#72780"> &para;</a><div class="date" title="2007-02-01 05:40"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72780">
<div class="phpcode"><code><span class="html">Commenting on note <a href="http://www.php.net/manual/en/function.sort.php#62311" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.sort.php#62311</a> :<br /><br />Sorting an array of objects will not always yield the results you desire.<br /><br />As pointed out correctly in the note above, sort() sorts the array by value of the first member variable. However, you can not always assume the order of your member variables! You must take into account your class hierarchy!<br /><br />By default, PHP places the inherited member variables on top, meaning your first member variable is NOT the first variable in your class definition! <br />However, if you use code analyzers or a compile cache, things can be very different. E.g., in eAccelerator, the inherited member variables are at the end, meaning you get different sort results with caching on or off.<br /><br />Conclusion:<br />Never use sort on arrays with values of a type other than scalar or array.</span></code></div>
  </div>
 </div>
  <div class="note" id="113948">  <div class="votes">
    <div id="Vu113948">
    <a href="/manual/vote-note.php?id=113948&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113948">
    <a href="/manual/vote-note.php?id=113948&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113948" title="51% like this...">
    1
    </div>
  </div>
  <a href="#113948" class="name">
  <strong class="user"><em>williamprogphp at[pleaseNOTSPAM] yahoo d</em></strong></a><a class="genanchor" href="#113948"> &para;</a><div class="date" title="2013-12-20 12:15"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113948">
<div class="phpcode"><code><span class="html">In order to make some multidimensional quick sort implementation, take advantage of this stuff<br /><br /><span class="default">&lt;?php<br />        </span><span class="keyword">function </span><span class="default">quickSortMultiDimensional</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$chave</span><span class="keyword">) {<br />            if( </span><span class="default">count</span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">) &lt; </span><span class="default">2 </span><span class="keyword">) {<br />                return </span><span class="default">$array</span><span class="keyword">;<br />            }<br />            </span><span class="default">$left </span><span class="keyword">= </span><span class="default">$right </span><span class="keyword">= array( );<br />            </span><span class="default">reset</span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">);<br />            </span><span class="default">$pivot_key    </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">);<br />            </span><span class="default">$pivot    </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">);<br />            foreach( </span><span class="default">$array </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v </span><span class="keyword">) {<br />                if( </span><span class="default">$v</span><span class="keyword">[</span><span class="default">$chave</span><span class="keyword">] &lt; </span><span class="default">$pivot</span><span class="keyword">[</span><span class="default">$chave</span><span class="keyword">] )<br />                        </span><span class="default">$left</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">][</span><span class="default">$chave</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">[</span><span class="default">$chave</span><span class="keyword">];<br />                else<br />                        </span><span class="default">$right</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">][</span><span class="default">$chave</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">[</span><span class="default">$chave</span><span class="keyword">];<br />            }<br />            return </span><span class="default">array_merge</span><span class="keyword">(<br />                                    </span><span class="default">quickSortMultiDimensional</span><span class="keyword">(</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$chave</span><span class="keyword">), <br />                                    array(</span><span class="default">$pivot_key </span><span class="keyword">=&gt; </span><span class="default">$pivot</span><span class="keyword">), <br />                                    </span><span class="default">quickSortMultiDimensional</span><span class="keyword">(</span><span class="default">$right</span><span class="keyword">, </span><span class="default">$chave</span><span class="keyword">)<br />            );            <br />        }<br /></span><span class="default">?&gt;<br /></span><br />I make it using the idea from pageconfig dot com<br /><br />tks for viewing</span></code></div>
  </div>
 </div>
  <div class="note" id="80592">  <div class="votes">
    <div id="Vu80592">
    <a href="/manual/vote-note.php?id=80592&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80592">
    <a href="/manual/vote-note.php?id=80592&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80592" title="51% like this...">
    1
    </div>
  </div>
  <a href="#80592" class="name">
  <strong class="user"><em>matpatnik at hotmail dot com</em></strong></a><a class="genanchor" href="#80592"> &para;</a><div class="date" title="2008-01-23 03:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80592">
<div class="phpcode"><code><span class="html">This function will sort entity letters eg:&amp;eacute;<br /><br />I hope that help someone<br /><br />function sort_entity($array) {<br />    $total = count($array);<br />    for ($i=0;$i&lt;$total;$i++) {<br />        if ($array[$i]{0} == '&amp;') {<br />            $array[$i] = $array[$i]{1}.$array[$i];<br />        } else {<br />            $array[$i] = $array[$i]{0}.$array[$i];<br />        }<br />    }<br />    sort($array);<br />    <br />    for ($i=0;$i&lt;$total;$i++) {<br />        $array[$i] = substr($array[$i],1);<br />    }<br />    <br />    return $array;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="12360">  <div class="votes">
    <div id="Vu12360">
    <a href="/manual/vote-note.php?id=12360&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12360">
    <a href="/manual/vote-note.php?id=12360&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12360" title="52% like this...">
    1
    </div>
  </div>
  <a href="#12360" class="name">
  <strong class="user"><em>peek at mailandnews dot com</em></strong></a><a class="genanchor" href="#12360"> &para;</a><div class="date" title="2001-04-07 04:06"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12360">
<div class="phpcode"><code><span class="html">I ran into the same problem with case insensitive sorting. Actually I think there should be a SORT_STRING_CASE flag but I tried the following:
<br />
<br />usort($listing, 'strcasecmp');
<br />
<br />This didn't work (why not?), but you can do a proper case insensitive sort like this:
<br />
<br />usort($listing, create_function('$a,$b','return strcasecmp($a,$b);'));</span></code></div>
  </div>
 </div>
  <div class="note" id="123465">  <div class="votes">
    <div id="Vu123465">
    <a href="/manual/vote-note.php?id=123465&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123465">
    <a href="/manual/vote-note.php?id=123465&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123465" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123465" class="name">
  <strong class="user"><em>r at rcse dot de</em></strong></a><a class="genanchor" href="#123465"> &para;</a><div class="date" title="2018-12-23 10:15"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123465">
<div class="phpcode"><code><span class="html">Here is no word about sorting UTF-8 strings by any collation. This should not be so uncommon?</span></code></div>
  </div>
 </div>
  <div class="note" id="110942">  <div class="votes">
    <div id="Vu110942">
    <a href="/manual/vote-note.php?id=110942&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110942">
    <a href="/manual/vote-note.php?id=110942&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110942" title="50% like this...">
    0
    </div>
  </div>
  <a href="#110942" class="name">
  <strong class="user"><em>me[ at ]szczepan[ dot ]info</em></strong></a><a class="genanchor" href="#110942"> &para;</a><div class="date" title="2012-12-27 12:36"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110942">
<div class="phpcode"><code><span class="html">Sorting the keys, but keep the values in order is not possible by just ordering, because it would result in a new array. This is also the solution: Create a new array<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= array(</span><span class="default">9</span><span class="keyword">=&gt;</span><span class="string">"a"</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">=&gt;</span><span class="string">"c"</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">=&gt;</span><span class="string">"d"</span><span class="keyword">);<br /><br /></span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">sort</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">));<br /><br /></span><span class="comment">//Result : array(5=&gt;"a",8=&gt;"c",9=&gt;"d");<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104464">  <div class="votes">
    <div id="Vu104464">
    <a href="/manual/vote-note.php?id=104464&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104464">
    <a href="/manual/vote-note.php?id=104464&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104464" title="50% like this...">
    0
    </div>
  </div>
  <a href="#104464" class="name">
  <strong class="user"><em>alex dot hristov dot 88 at gmail dot com</em></strong></a><a class="genanchor" href="#104464"> &para;</a><div class="date" title="2011-06-16 07:26"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104464">
<div class="phpcode"><code><span class="html">As some people have mentioned before sorting a multidimentional array can be a bit tricky. it took me quite a while to get it going but it works as a charm:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//$order has to be either asc or desc<br /> </span><span class="keyword">function </span><span class="default">sortmulti </span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">, </span><span class="default">$order</span><span class="keyword">, </span><span class="default">$natsort</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">, </span><span class="default">$case_sensitive</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">) {<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) &amp;&amp; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">) {<br />            foreach(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) as </span><span class="default">$key</span><span class="keyword">) <br />            </span><span class="default">$temp</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]=</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="default">$index</span><span class="keyword">];<br />            if(!</span><span class="default">$natsort</span><span class="keyword">) {<br />                if (</span><span class="default">$order</span><span class="keyword">==</span><span class="string">'asc'</span><span class="keyword">)<br />                    </span><span class="default">asort</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">);<br />                else    <br />                    </span><span class="default">arsort</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">);<br />            }<br />            else <br />            {<br />                if (</span><span class="default">$case_sensitive</span><span class="keyword">===</span><span class="default">true</span><span class="keyword">)<br />                    </span><span class="default">natsort</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">);<br />                else<br />                    </span><span class="default">natcasesort</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">);<br />            if(</span><span class="default">$order</span><span class="keyword">!=</span><span class="string">'asc'</span><span class="keyword">) <br />                </span><span class="default">$temp</span><span class="keyword">=</span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">);<br />            }<br />            foreach(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">) as </span><span class="default">$key</span><span class="keyword">) <br />                if (</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">))<br />                    </span><span class="default">$sorted</span><span class="keyword">[]=</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />                else    <br />                    </span><span class="default">$sorted</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]=</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />            return </span><span class="default">$sorted</span><span class="keyword">;<br />        }<br />    return </span><span class="default">$sorted</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104009">  <div class="votes">
    <div id="Vu104009">
    <a href="/manual/vote-note.php?id=104009&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104009">
    <a href="/manual/vote-note.php?id=104009&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104009" title="50% like this...">
    0
    </div>
  </div>
  <a href="#104009" class="name">
  <strong class="user"><em>cmarshall at gmx dot de</em></strong></a><a class="genanchor" href="#104009"> &para;</a><div class="date" title="2011-05-17 03:10"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104009">
<div class="phpcode"><code><span class="html">I read up on various problems re: sort() and German Umlaut chars and my head was soon spinning - bug in sort() or not, solution via locale or not, etc. ... (a total newbie here).<br /><br />The obvious solution for me was quick and dirty: transform the Umlaut chars (present as HTML codes in my case) to their normal equivalent ('ä' = 'ae', 'ö' = 'oe', 'ü' = 'ue', 'ß' = 'ss' etc.), sort the array, then transform back. However there are cases in which a 'Mueller' is really that and does NOT need to be transformed into 'Müller' afterwards. Hence I for example replace the Umlaut itself with it's normal equivalent plus a char not used in the string otherwise (e.g. '_') so that the transfer back to Umlaut would only take place on certain combinations.<br /><br />Of course any other char instead of '_' can be used as additional char (influencing the sort result). I know that my solution is rough at the edges and may cause other sort problems but it was sufficient for my purpose.<br /><br />The array '$dat' in this example was filled with German town names (I actually worked with a multiple array ('$dat[][]') but stripped the code down to this as it's easier to understand):<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// START Pre-sorting (Umlaut -&gt; normal letters)<br /></span><span class="default">$max </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$dat</span><span class="keyword">);<br />for(</span><span class="default">$totcnt </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$totcnt </span><span class="keyword">&lt; </span><span class="default">$max</span><span class="keyword">; </span><span class="default">$totcnt</span><span class="keyword">++){<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'&amp;szlig;'</span><span class="keyword">,</span><span class="string">'ss_'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'&amp;Auml;'</span><span class="keyword">,</span><span class="string">'Ae_'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'&amp;auml;'</span><span class="keyword">,</span><span class="string">'ae_'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'&amp;Ouml;'</span><span class="keyword">,</span><span class="string">'Oe_'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'&amp;ouml;'</span><span class="keyword">,</span><span class="string">'oe_'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'&amp;Uuml;'</span><span class="keyword">,</span><span class="string">'Ue_'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'&amp;uuml;'</span><span class="keyword">,</span><span class="string">'ue_'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />}<br /></span><span class="comment">// END Pre-sorting (Umlaut -&gt; normal letters)<br /><br />// START Sorting //<br /></span><span class="keyword">function </span><span class="default">compare_towns</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)<br />{<br />return </span><span class="default">strnatcmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />}<br /></span><span class="default">usort</span><span class="keyword">(</span><span class="default">$dat</span><span class="keyword">, </span><span class="string">'compare_towns'</span><span class="keyword">);<br /></span><span class="comment">// END Sorting //<br /><br />// START Post-sorting (normal letters -&gt; Umlaut)<br /></span><span class="keyword">for(</span><span class="default">$totcnt </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$totcnt </span><span class="keyword">&lt; </span><span class="default">$max</span><span class="keyword">; </span><span class="default">$totcnt</span><span class="keyword">++){<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'ss_'</span><span class="keyword">,</span><span class="string">'&amp;szlig;'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'Ae_'</span><span class="keyword">,</span><span class="string">'&amp;Auml;'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'ae_'</span><span class="keyword">,</span><span class="string">'&amp;auml;'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'Oe_'</span><span class="keyword">,</span><span class="string">'&amp;Ouml;'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'oe_'</span><span class="keyword">,</span><span class="string">'&amp;ouml;'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'Ue_'</span><span class="keyword">,</span><span class="string">'&amp;Uuml;'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />   </span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'ue_'</span><span class="keyword">,</span><span class="string">'&amp;uuml;'</span><span class="keyword">,</span><span class="default">$dat</span><span class="keyword">[</span><span class="default">$totcnt</span><span class="keyword">]);<br />}<br /></span><span class="comment">// END Post-sorting (normal letters -&gt; Umlaut)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87548">  <div class="votes">
    <div id="Vu87548">
    <a href="/manual/vote-note.php?id=87548&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87548">
    <a href="/manual/vote-note.php?id=87548&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87548" title="50% like this...">
    0
    </div>
  </div>
  <a href="#87548" class="name">
  <strong class="user"><em>stepmuel at ee dot ethz dot ch</em></strong></a><a class="genanchor" href="#87548"> &para;</a><div class="date" title="2008-12-09 08:14"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87548">
<div class="phpcode"><code><span class="html">A little shorter way to sort an array of objects; with a callback function.<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">objSort</span><span class="keyword">(&amp;</span><span class="default">$objArray</span><span class="keyword">,</span><span class="default">$indexFunction</span><span class="keyword">,</span><span class="default">$sort_flags</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">$indices </span><span class="keyword">= array();<br />    foreach(</span><span class="default">$objArray </span><span class="keyword">as </span><span class="default">$obj</span><span class="keyword">) {<br />        </span><span class="default">$indeces</span><span class="keyword">[] = </span><span class="default">$indexFunction</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">);<br />    }<br />    return </span><span class="default">array_multisort</span><span class="keyword">(</span><span class="default">$indeces</span><span class="keyword">,</span><span class="default">$objArray</span><span class="keyword">,</span><span class="default">$sort_flags</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">getIndex</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">) {<br />    return </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">getPosition</span><span class="keyword">();<br />}<br /><br /></span><span class="default">objSort</span><span class="keyword">(</span><span class="default">$objArray</span><span class="keyword">,</span><span class="string">'getIndex'</span><span class="keyword">); <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75381">  <div class="votes">
    <div id="Vu75381">
    <a href="/manual/vote-note.php?id=75381&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75381">
    <a href="/manual/vote-note.php?id=75381&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75381" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75381" class="name">
  <strong class="user"><em>alishahnovin at hotmail dot com</em></strong></a><a class="genanchor" href="#75381"> &para;</a><div class="date" title="2007-05-25 04:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75381">
<div class="phpcode"><code><span class="html">I had a multidimensional array, which needed to be sorted by one of the keys. This is what I came up with...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">msort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$id</span><span class="keyword">=</span><span class="string">"id"</span><span class="keyword">) {<br />        </span><span class="default">$temp_array </span><span class="keyword">= array();<br />        while(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$lowest_id </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            </span><span class="default">$index</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />            foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">) {<br />                if (</span><span class="default">$item</span><span class="keyword">[</span><span class="default">$id</span><span class="keyword">]&lt;</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$lowest_id</span><span class="keyword">][</span><span class="default">$id</span><span class="keyword">]) {<br />                    </span><span class="default">$lowest_id </span><span class="keyword">= </span><span class="default">$index</span><span class="keyword">;<br />                }<br />                </span><span class="default">$index</span><span class="keyword">++;<br />            }<br />            </span><span class="default">$temp_array</span><span class="keyword">[] = </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$lowest_id</span><span class="keyword">];<br />            </span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">$lowest_id</span><span class="keyword">), </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$lowest_id</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">));<br />        }<br />        return </span><span class="default">$temp_array</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Ex:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//oh no, this is not in the ordered by id!!<br /></span><span class="default">$data</span><span class="keyword">[] = array(</span><span class="string">"item"</span><span class="keyword">=&gt;</span><span class="string">"item 4"</span><span class="keyword">, </span><span class="string">"id"</span><span class="keyword">=&gt;</span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$data</span><span class="keyword">[] = array(</span><span class="string">"item"</span><span class="keyword">=&gt;</span><span class="string">"item 1"</span><span class="keyword">, </span><span class="string">"id"</span><span class="keyword">=&gt;</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$data</span><span class="keyword">[] = array(</span><span class="string">"item"</span><span class="keyword">=&gt;</span><span class="string">"item 3"</span><span class="keyword">, </span><span class="string">"id"</span><span class="keyword">=&gt;</span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">$data</span><span class="keyword">[] = array(</span><span class="string">"item"</span><span class="keyword">=&gt;</span><span class="string">"item 2"</span><span class="keyword">, </span><span class="string">"id"</span><span class="keyword">=&gt;</span><span class="default">2</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(  </span><span class="default">msort</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)  ); </span><span class="comment">//just msort it!<br /><br />/* outputs <br /><br />array<br />  0 =&gt; <br />    array<br />      'item' =&gt; 'item 1' (length=6)<br />      'id' =&gt; 1<br />  1 =&gt; <br />    array<br />      'item' =&gt; 'item 2' (length=6)<br />      'id' =&gt; 2<br />  2 =&gt; <br />    array<br />      'item' =&gt; 'item 3' (length=6)<br />      'id' =&gt; 3<br />  3 =&gt; <br />    array<br />      'item' =&gt; 'item 4' (length=6)<br />      'id' =&gt; 4<br /><br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72618">  <div class="votes">
    <div id="Vu72618">
    <a href="/manual/vote-note.php?id=72618&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72618">
    <a href="/manual/vote-note.php?id=72618&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72618" title="50% like this...">
    0
    </div>
  </div>
  <a href="#72618" class="name">
  <strong class="user"><em>alex [at] vkpb [dot] com</em></strong></a><a class="genanchor" href="#72618"> &para;</a><div class="date" title="2007-01-26 03:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72618">
<div class="phpcode"><code><span class="html">Sorting of an array by a method of inserts.<br /><br />&lt;?<br /><br />  <br />       function sortByField($multArray,$sortField,$desc=true){<br />            $tmpKey='';<br />            $ResArray=array();<br /><br />            $maIndex=array_keys($multArray);<br />            $maSize=count($multArray)-1;<br /><br />            for($i=0; $i &lt; $maSize ; $i++) {<br /><br />               $minElement=$i;<br />               $tempMin=$multArray[$maIndex[$i]][$sortField];<br />               $tmpKey=$maIndex[$i];<br /><br />                for($j=$i+1; $j &lt;= $maSize; $j++)<br />                  if($multArray[$maIndex[$j]][$sortField] &lt; $tempMin ) {<br />                     $minElement=$j;<br />                     $tmpKey=$maIndex[$j];<br />                     $tempMin=$multArray[$maIndex[$j]][$sortField];<br /><br />                  }<br />                  $maIndex[$minElement]=$maIndex[$i];<br />                  $maIndex[$i]=$tmpKey;<br />            }<br /><br />           if($desc)<br />               for($j=0;$j&lt;=$maSize;$j++)<br />                  $ResArray[$maIndex[$j]]=$multArray[$maIndex[$j]];<br />           else<br />              for($j=$maSize;$j&gt;=0;$j--)<br />                  $ResArray[$maIndex[$j]]=$multArray[$maIndex[$j]];<br /><br />           return $ResArray;<br />       }<br /><br />// make array<br />$array['aaa']=array("name"=&gt;"vasia","order"=&gt;1);<br />$array['bbb']=array("name"=&gt;"petia","order"=&gt;2);<br />$array['ccc']=array("name"=&gt;"kolia","order"=&gt;3);<br />$array['ddd']=array("name"=&gt;"zenia","order"=&gt;4);<br /><br />// set sort <br />$SortOrder=0; // desc by default , 1- asc<br /><br />var_dump(sortByField($array,'order',$SortOrder));<br /><br />array<br />  'ddd' =&gt; <br />    array<br />      'name' =&gt; 'zenia' (length=5)<br />      'order' =&gt; 4<br />  'aaa' =&gt; <br />    array<br />      'name' =&gt; 'vasia' (length=5)<br />      'order' =&gt; 1<br />  'bbb' =&gt; <br />    array<br />      'name' =&gt; 'petia' (length=5)<br />      'order' =&gt; 2<br />  'ccc' =&gt; <br />    array<br />      'name' =&gt; 'kolia' (length=5)<br />      'order' =&gt; 3<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="63715">  <div class="votes">
    <div id="Vu63715">
    <a href="/manual/vote-note.php?id=63715&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63715">
    <a href="/manual/vote-note.php?id=63715&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63715" title="50% like this...">
    0
    </div>
  </div>
  <a href="#63715" class="name">
  <strong class="user"><em>Emiliyan at ServicesBG dot Com</em></strong></a><a class="genanchor" href="#63715"> &para;</a><div class="date" title="2006-03-28 07:41"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63715">
<div class="phpcode"><code><span class="html">#This is a function that will sort an array...<br />function sort_by($array,  $keyname = null, $sortby) {<br />   $myarray = $inarray = array();    <br />   # First store the keyvalues in a seperate array<br />    foreach ($array as $i =&gt; $befree) { <br />        $myarray[$i] = $array[$i][$keyname];<br />    }<br />   # Sort the new array by<br />    switch ($sortby) {<br />    case 'asc':<br />    # Sort an array and maintain index association...<br />    asort($myarray); <br />    break;<br />    case 'arsort':<br />    # Sort an array in reverse order and maintain index association <br />    arsort($myarray); <br />    break;<br />    case 'natcasesor':<br />    # Sort an array using a case insensitive "natural order" algorithm<br />    natcasesort($myarray); <br />    break;<br />    }<br />    # Rebuild the old array<br />    foreach ( $myarray as $key=&gt; $befree) {<br />       $inarray[$key] = $array[$key];<br />    }<br />    return $inarray;<br />} <br />sort_by(); example...<br />$info = sort_by($myarray, 'name', $use = 'asc');    <br />print_r($info);</span></code></div>
  </div>
 </div>
  <div class="note" id="61305">  <div class="votes">
    <div id="Vu61305">
    <a href="/manual/vote-note.php?id=61305&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61305">
    <a href="/manual/vote-note.php?id=61305&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61305" title="50% like this...">
    0
    </div>
  </div>
  <a href="#61305" class="name">
  <strong class="user"><em>nm at thenoodleman dot com</em></strong></a><a class="genanchor" href="#61305"> &para;</a><div class="date" title="2006-01-30 05:18"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61305">
<div class="phpcode"><code><span class="html">Faster, more effective function:<br /><br />array_sort (array, ['asc'/'desc'])<br /><br />Second parameter specifies whether to order ascending or descending. Default is ascending.<br /><br />function array_sort($array, $type='asc'){<br />    $result=array();<br />    foreach($array as $var =&gt; $val){<br />        $set=false;<br />        foreach($result as $var2 =&gt; $val2){<br />            if($set==false){<br />                if($val&gt;$val2 &amp;&amp; $type=='desc' || $val&lt;$val2 &amp;&amp; $type=='asc'){<br />                    $temp=array();<br />                    foreach($result as $var3 =&gt; $val3){<br />                        if($var3==$var2) $set=true;<br />                        if($set){<br />                            $temp[$var3]=$val3;<br />                            unset($result[$var3]);<br />                        }<br />                    }<br />                    $result[$var]=$val;    <br />                    foreach($temp as $var3 =&gt; $val3){<br />                        $result[$var3]=$val3;<br />                    }<br />                }<br />            }<br />        }<br />        if(!$set){<br />            $result[$var]=$val;<br />        }<br />    }<br />    return $result;<br />}<br /><br />Works for ordering by integers or strings, no need to specify which.<br /><br />Example:<br /><br />$array=array('a' =&gt; 50, 'b' =&gt; 25, 'c' =&gt; 75);<br />print_r(array_sort($array));<br /><br />Returns:<br />Array<br />(<br />[b] =&gt; 25<br />[a] =&gt; 50<br />[c] =&gt; 75<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="54903">  <div class="votes">
    <div id="Vu54903">
    <a href="/manual/vote-note.php?id=54903&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54903">
    <a href="/manual/vote-note.php?id=54903&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54903" title="50% like this...">
    0
    </div>
  </div>
  <a href="#54903" class="name">
  <strong class="user"><em>james at miicro dot net</em></strong></a><a class="genanchor" href="#54903"> &para;</a><div class="date" title="2005-07-19 02:49"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54903">
<div class="phpcode"><code><span class="html">It's useful to know that if you're using this function on a multidimensional array, php will sort the first key, then the second and so on. This is similar to being able to use SQL to order by field1, field2 etc.<br /><br />So:<br /><br />Array ( <br />[0] =&gt; Array ( [category] =&gt; work [name] =&gt; Smith ) <br />[1] =&gt; Array ( [category] =&gt; play [name] =&gt; Johnson ) <br />[2] =&gt; Array ( [category] =&gt; work [name] =&gt; Berger )<br />)<br /><br />will become:<br /><br />Array ( <br />[0] =&gt; Array ( [category] =&gt; play [name] =&gt; Johnson )<br />[1] =&gt; Array ( [category] =&gt; work [name] =&gt; Berger ) <br />[2] =&gt; Array ( [category] =&gt; work [name] =&gt; Smith ) <br />)<br /><br />Hope it helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="50099">  <div class="votes">
    <div id="Vu50099">
    <a href="/manual/vote-note.php?id=50099&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50099">
    <a href="/manual/vote-note.php?id=50099&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50099" title="50% like this...">
    0
    </div>
  </div>
  <a href="#50099" class="name">
  <strong class="user"><em>timc at hlyw dot com</em></strong></a><a class="genanchor" href="#50099"> &para;</a><div class="date" title="2005-02-17 04:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50099">
<div class="phpcode"><code><span class="html">I dig the multi_sort function(s) from above.  But, they don't work for hash arrays.  I added a keys variable to keep track of the key value as the array gets sorted.  Feed back welcome.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_qsort </span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$column</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$order</span><span class="keyword">=</span><span class="default">SORT_ASC</span><span class="keyword">, </span><span class="default">$first</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">= -</span><span class="default">2</span><span class="keyword">) <br />{ <br />  </span><span class="comment">// $array  - the array to be sorted <br />  // $column - index (column) on which to sort <br />  //          can be a string if using an associative array <br />  // $order  - SORT_ASC (default) for ascending or SORT_DESC for descending <br />  // $first  - start index (row) for partial array sort <br />  // $last  - stop  index (row) for partial array sort <br />  // $keys  - array of key values for hash array sort<br />  <br />  </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />  if(</span><span class="default">$last </span><span class="keyword">== -</span><span class="default">2</span><span class="keyword">) </span><span class="default">$last </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">; <br />  if(</span><span class="default">$last </span><span class="keyword">&gt; </span><span class="default">$first</span><span class="keyword">) { <br />   </span><span class="default">$alpha </span><span class="keyword">= </span><span class="default">$first</span><span class="keyword">; <br />   </span><span class="default">$omega </span><span class="keyword">= </span><span class="default">$last</span><span class="keyword">;<br />   </span><span class="default">$key_alpha </span><span class="keyword">= </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$alpha</span><span class="keyword">]; <br />   </span><span class="default">$key_omega </span><span class="keyword">= </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$omega</span><span class="keyword">];<br />   </span><span class="default">$guess </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key_alpha</span><span class="keyword">][</span><span class="default">$column</span><span class="keyword">]; <br />   while(</span><span class="default">$omega </span><span class="keyword">&gt;= </span><span class="default">$alpha</span><span class="keyword">) { <br />     if(</span><span class="default">$order </span><span class="keyword">== </span><span class="default">SORT_ASC</span><span class="keyword">) { <br />       while(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key_alpha</span><span class="keyword">][</span><span class="default">$column</span><span class="keyword">] &lt; </span><span class="default">$guess</span><span class="keyword">) {</span><span class="default">$alpha</span><span class="keyword">++; </span><span class="default">$key_alpha </span><span class="keyword">= </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$alpha</span><span class="keyword">]; }<br />       while(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key_omega</span><span class="keyword">][</span><span class="default">$column</span><span class="keyword">] &gt; </span><span class="default">$guess</span><span class="keyword">) {</span><span class="default">$omega</span><span class="keyword">--; </span><span class="default">$key_omega </span><span class="keyword">= </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$omega</span><span class="keyword">]; }<br />     } else { <br />       while(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key_alpha</span><span class="keyword">][</span><span class="default">$column</span><span class="keyword">] &gt; </span><span class="default">$guess</span><span class="keyword">) {</span><span class="default">$alpha</span><span class="keyword">++; </span><span class="default">$key_alpha </span><span class="keyword">= </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$alpha</span><span class="keyword">]; }<br />       while(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key_omega</span><span class="keyword">][</span><span class="default">$column</span><span class="keyword">] &lt; </span><span class="default">$guess</span><span class="keyword">) {</span><span class="default">$omega</span><span class="keyword">--; </span><span class="default">$key_omega </span><span class="keyword">= </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$omega</span><span class="keyword">]; }<br />     } <br />     if(</span><span class="default">$alpha </span><span class="keyword">&gt; </span><span class="default">$omega</span><span class="keyword">) break; <br />     </span><span class="default">$temporary </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key_alpha</span><span class="keyword">]; <br />     </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key_alpha</span><span class="keyword">] = </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key_omega</span><span class="keyword">]; </span><span class="default">$alpha</span><span class="keyword">++;<br />     </span><span class="default">$key_alpha </span><span class="keyword">= </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$alpha</span><span class="keyword">];<br />     </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key_omega</span><span class="keyword">] = </span><span class="default">$temporary</span><span class="keyword">; </span><span class="default">$omega</span><span class="keyword">--;<br />     </span><span class="default">$key_omega </span><span class="keyword">= </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$omega</span><span class="keyword">];<br />   } <br />   </span><span class="default">array_qsort </span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$column</span><span class="keyword">, </span><span class="default">$order</span><span class="keyword">, </span><span class="default">$first</span><span class="keyword">, </span><span class="default">$omega</span><span class="keyword">); <br />   </span><span class="default">array_qsort </span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$column</span><span class="keyword">, </span><span class="default">$order</span><span class="keyword">, </span><span class="default">$alpha</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">); <br />  } <br />} <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="29058">  <div class="votes">
    <div id="Vu29058">
    <a href="/manual/vote-note.php?id=29058&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29058">
    <a href="/manual/vote-note.php?id=29058&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29058" title="50% like this...">
    0
    </div>
  </div>
  <a href="#29058" class="name">
  <strong class="user"><em>arjan321 at hotmail dot com</em></strong></a><a class="genanchor" href="#29058"> &para;</a><div class="date" title="2003-01-31 12:23"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29058">
<div class="phpcode"><code><span class="html">Ik you want to sort case insensitive, use the natcasesort()</span></code></div>
  </div>
 </div>
  <div class="note" id="117777">  <div class="votes">
    <div id="Vu117777">
    <a href="/manual/vote-note.php?id=117777&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117777">
    <a href="/manual/vote-note.php?id=117777&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117777" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#117777" class="name">
  <strong class="user"><em>aditycse at gmail dot com</em></strong></a><a class="genanchor" href="#117777"> &para;</a><div class="date" title="2015-08-07 10:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117777">
<div class="phpcode"><code><span class="html">/*<br /> * Name : Aditya Mehrotra <br /> * Email: aditycse@gmail.com<br /> */<br />//Example for sorting by values for an alphanumeric array also having case-sensitive data<br />$exampleArray1 = $exampleArray2 = array(<br />    0 =&gt; 'example1',<br />    1 =&gt; 'Example10',<br />    2 =&gt; 'example12',<br />    3 =&gt; 'Example2',<br />    4 =&gt; 'example3',<br />    5 =&gt; 'EXAMPLE10',<br />    6 =&gt; 'example10'<br />);<br /><br />//default sorting<br />asort($exampleArray1);<br /><br />// alphanumeric with case-sensitive data sorting by values<br />asort($exampleArray2, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);<br /><br />//output of defaut sorting<br />print_r($exampleArray1);<br />/*<br /> * output of default sorting<br />  Array<br />  (<br />  [5] =&gt; EXAMPLE10<br />  [1] =&gt; Example10<br />  [3] =&gt; Example2<br />  [0] =&gt; example1<br />  [6] =&gt; example10<br />  [2] =&gt; example12<br />  [4] =&gt; example3<br />  )<br /> */<br /><br />print_r($exampleArray2);<br />/*<br /> * output of alphanumeric with case-sensitive data sorting by values<br /> Array<br />(<br />    [0] =&gt; example1<br />    [3] =&gt; Example2<br />    [4] =&gt; example3<br />    [5] =&gt; EXAMPLE10<br />    [1] =&gt; Example10<br />    [6] =&gt; example10<br />    [2] =&gt; example12<br />)<br /> */</span></code></div>
  </div>
 </div>
  <div class="note" id="93473">  <div class="votes">
    <div id="Vu93473">
    <a href="/manual/vote-note.php?id=93473&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93473">
    <a href="/manual/vote-note.php?id=93473&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93473" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#93473" class="name">
  <strong class="user"><em>petr dot biza at gmail dot com</em></strong></a><a class="genanchor" href="#93473"> &para;</a><div class="date" title="2009-09-11 06:29"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93473">
<div class="phpcode"><code><span class="html">Here is a function to sort an array by the key of his sub-array with keep key in top level.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">sksort</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$subkey</span><span class="keyword">=</span><span class="string">"id"</span><span class="keyword">, </span><span class="default">$sort_descending</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">, </span><span class="default">$keep_keys_in_sub </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {
<br />    </span><span class="default">$temp_array </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">;
<br />
<br />    foreach (</span><span class="default">$temp_array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; &amp;</span><span class="default">$value</span><span class="keyword">) {
<br />      
<br />      </span><span class="default">$sort </span><span class="keyword">= array();
<br />      foreach (</span><span class="default">$value </span><span class="keyword">as </span><span class="default">$index </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) {
<br />          </span><span class="default">$sort</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">[</span><span class="default">$subkey</span><span class="keyword">];
<br />      }
<br />      
<br />      </span><span class="default">asort</span><span class="keyword">(</span><span class="default">$sort</span><span class="keyword">);
<br />      
<br />      </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$sort</span><span class="keyword">);
<br />      </span><span class="default">$newValue </span><span class="keyword">= array();
<br />      foreach (</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$index</span><span class="keyword">) {
<br />        if(</span><span class="default">$keep_keys_in_sub</span><span class="keyword">)
<br />            </span><span class="default">$newValue</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">];
<br />          else
<br />            </span><span class="default">$newValue</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">];
<br />      }
<br />      
<br />      if(</span><span class="default">$sort_descending</span><span class="keyword">)
<br />        </span><span class="default">$value </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$newValue</span><span class="keyword">, </span><span class="default">$keep_keys_in_sub</span><span class="keyword">);
<br />      else
<br />        </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$newValue</span><span class="keyword">;
<br />    }
<br />    
<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">$temp_array</span><span class="keyword">;
<br />  }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68024">  <div class="votes">
    <div id="Vu68024">
    <a href="/manual/vote-note.php?id=68024&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68024">
    <a href="/manual/vote-note.php?id=68024&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68024" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#68024" class="name">
  <strong class="user"><em>g8z at yahoo dot com</em></strong></a><a class="genanchor" href="#68024"> &para;</a><div class="date" title="2006-07-10 08:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68024">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br />This sort function allows you to sort an associative array while "sticking" some fields.<br /><br />$sticky_fields = an array of fields that should not be re-sorted. This is a method of achieving sub-sorts within contiguous groups of records that have common data in some fields.<br /><br />Courtesy of the $5 Script Archive: <a href="http://www.tufat.com" rel="nofollow" target="_blank">http://www.tufat.com</a><br />**/<br /><br /></span><span class="default">define</span><span class="keyword">( </span><span class="string">'ASC_AZ'</span><span class="keyword">, </span><span class="default">1000 </span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">( </span><span class="string">'DESC_AZ'</span><span class="keyword">, </span><span class="default">1001 </span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">( </span><span class="string">'ASC_NUM'</span><span class="keyword">, </span><span class="default">1002 </span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">( </span><span class="string">'DESC_NUM'</span><span class="keyword">, </span><span class="default">1003 </span><span class="keyword">);<br /><br />function </span><span class="default">stickysort</span><span class="keyword">( </span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$field</span><span class="keyword">, </span><span class="default">$sort_type</span><span class="keyword">, </span><span class="default">$sticky_fields </span><span class="keyword">= array() ) {<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    foreach (</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$is_contiguous </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        if(!empty(</span><span class="default">$grouped_arr</span><span class="keyword">)) {<br />            </span><span class="default">$last_value </span><span class="keyword">= </span><span class="default">end</span><span class="keyword">(</span><span class="default">$grouped_arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br /><br />            if(!(</span><span class="default">$sticky_fields </span><span class="keyword">== array())) {<br />                foreach (</span><span class="default">$sticky_fields </span><span class="keyword">as </span><span class="default">$sticky_field</span><span class="keyword">) {<br />                    if (</span><span class="default">$value</span><span class="keyword">[</span><span class="default">$sticky_field</span><span class="keyword">] &lt;&gt; </span><span class="default">$last_value</span><span class="keyword">[</span><span class="default">$sticky_field</span><span class="keyword">]) {<br />                        </span><span class="default">$is_contiguous </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />                        break;<br />                    }<br />                }<br />            }<br />        }<br />        if (</span><span class="default">$is_contiguous</span><span class="keyword">)<br />            </span><span class="default">$grouped_arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;<br />        else<br />            </span><span class="default">$grouped_arr</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;<br />    }<br />    </span><span class="default">$code </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    switch(</span><span class="default">$sort_type</span><span class="keyword">) {<br />        case </span><span class="default">ASC_AZ</span><span class="keyword">:<br />            </span><span class="default">$code </span><span class="keyword">.= </span><span class="string">'return strcasecmp($a["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"], $b["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"]);'</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">DESC_AZ</span><span class="keyword">:<br />            </span><span class="default">$code </span><span class="keyword">.= </span><span class="string">'return (-1*strcasecmp($a["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"], $b["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"]));'</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">ASC_NUM</span><span class="keyword">:<br />            </span><span class="default">$code </span><span class="keyword">.= </span><span class="string">'return ($a["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"] - $b["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"]);'</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">DESC_NUM</span><span class="keyword">:<br />            </span><span class="default">$code </span><span class="keyword">.= </span><span class="string">'return ($b["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"] - $a["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"]);'</span><span class="keyword">;<br />            break;<br />    }<br /><br />    </span><span class="default">$compare </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$a, $b'</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">);<br /><br />    foreach(</span><span class="default">$grouped_arr </span><span class="keyword">as </span><span class="default">$grouped_arr_key</span><span class="keyword">=&gt;</span><span class="default">$grouped_arr_value</span><span class="keyword">)<br />        </span><span class="default">usort </span><span class="keyword">( </span><span class="default">$grouped_arr</span><span class="keyword">[</span><span class="default">$grouped_arr_key</span><span class="keyword">], </span><span class="default">$compare </span><span class="keyword">);<br /><br />    </span><span class="default">$arr </span><span class="keyword">= array();<br />    foreach(</span><span class="default">$grouped_arr </span><span class="keyword">as </span><span class="default">$grouped_arr_key</span><span class="keyword">=&gt;</span><span class="default">$grouped_arr_value</span><span class="keyword">)<br />        foreach(</span><span class="default">$grouped_arr</span><span class="keyword">[</span><span class="default">$grouped_arr_key</span><span class="keyword">] as </span><span class="default">$grouped_arr_arr_key</span><span class="keyword">=&gt;</span><span class="default">$grouped_arr_arr_value</span><span class="keyword">)<br />            </span><span class="default">$arr</span><span class="keyword">[] = </span><span class="default">$grouped_arr</span><span class="keyword">[</span><span class="default">$grouped_arr_key</span><span class="keyword">][</span><span class="default">$grouped_arr_arr_key</span><span class="keyword">];<br /><br />    return </span><span class="default">$arr</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59292">  <div class="votes">
    <div id="Vu59292">
    <a href="/manual/vote-note.php?id=59292&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59292">
    <a href="/manual/vote-note.php?id=59292&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59292" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#59292" class="name">
  <strong class="user"><em>raul at jimi dot com dot mx</em></strong></a><a class="genanchor" href="#59292"> &para;</a><div class="date" title="2005-12-01 09:50"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59292">
<div class="phpcode"><code><span class="html">I had an array like this:<br />$arr=array (1,4,3,6,5);<br /><br />which returns this:<br />$arr[0]=1<br />$arr[1]=4<br />$arr[2]=3<br />$arr[3]=6<br />$arr[4]=5<br /><br />But lets say i remove [2] which is number 3, i get:<br /><br />$arr[0]=1<br />$arr[1]=4<br />$arr[3]=6<br />$arr[4]=5<br /><br />And i want to reindex without doing a sort because i dont want to lose the order of the numbers (like a pop in a stack but in the middle of the list), i do this:<br /><br />$arr=array_chunk($arr,count($arr));<br />$arr=$arr[0];<br /><br />the result is:<br /><br />$arr[0]=1<br />$arr[1]=4<br />$arr[2]=6<br />$arr[3]=5<br /><br />This can be applied mostly for tree sorting, when you only have the id and the parent values of the node, and you want to have N levels.</span></code></div>
  </div>
 </div>
  <div class="note" id="101495">  <div class="votes">
    <div id="Vu101495">
    <a href="/manual/vote-note.php?id=101495&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101495">
    <a href="/manual/vote-note.php?id=101495&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101495" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#101495" class="name">
  <strong class="user"><em>poulou_0 at hotmail dot com</em></strong></a><a class="genanchor" href="#101495"> &para;</a><div class="date" title="2010-12-21 12:59"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101495">
<div class="phpcode"><code><span class="html">if you are not interested in high or low case sort<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//where<br /></span><span class="default">$sortable_array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v2</span><span class="keyword">; <br /></span><span class="comment">//put<br /></span><span class="default">$sortable_array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$v2</span><span class="keyword">);<br /><br /></span><span class="comment">//and where<br /></span><span class="default">$sortable_array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;<br /></span><span class="comment">//put<br /></span><span class="default">$sortable_array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68148">  <div class="votes">
    <div id="Vu68148">
    <a href="/manual/vote-note.php?id=68148&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68148">
    <a href="/manual/vote-note.php?id=68148&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68148" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#68148" class="name">
  <strong class="user"><em>g8z at yahoo dot com</em></strong></a><a class="genanchor" href="#68148"> &para;</a><div class="date" title="2006-07-14 04:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68148">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br />This sort function allows you to sort an associative array while "sticking" some fields.<br /><br />$sticky_fields = an array of fields that should not be re-sorted. This is a method of achieving sub-sorts within contiguous groups of records that have common data in some fields.<br /><br />For example:<br /><br />$a = array();<br /><br />$a []= array(<br />    'name'         =&gt; 'Sam',<br />    'age'         =&gt; 23,<br />    'hire_date'    =&gt; '2004-01-01'<br />);<br />$a []= array(<br />    'name'        =&gt; 'Sam',<br />    'age'        =&gt; 44,<br />    'hire_date'    =&gt; '2003-03-23'<br />);<br />$a []= array(<br />    'name'        =&gt; 'Jenny',<br />    'age'        =&gt; 20,<br />    'hire_date' =&gt; '2000-12-31'<br />);<br />$a []= array(<br />    'name'        =&gt; 'Samantha',<br />    'age'        =&gt; 50,<br />    'hire_date' =&gt; '2000-12-14'<br />);<br /><br />$sticky_fields = array( 'name' );<br />print_r( stickysort( $a, 'age', DESC_NUM, $sticky_fields ) );<br /><br />OUTPUT:<br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [name] =&gt; Sam<br />            [age] =&gt; 44<br />            [hire_date] =&gt; 2003-03-23<br />        )<br />    [1] =&gt; Array<br />        (<br />            [name] =&gt; Sam<br />            [age] =&gt; 23<br />            [hire_date] =&gt; 2004-01-01<br />        )<br />    [2] =&gt; Array<br />        (<br />            [name] =&gt; Jenny<br />            [age] =&gt; 20<br />            [hire_date] =&gt; 2000-12-31<br />        )<br />    [3] =&gt; Array<br />        (<br />            [name] =&gt; Samantha<br />            [age] =&gt; 50<br />            [hire_date] =&gt; 2000-12-14<br />        )<br />)<br /><br />Here's why this is the correct output - the "name" field is sticky, so it cannot change its sort order. Thus, the "age" field is only sorted as a sub-sort within records where "name" is identical. Thus, the "Sam" records are reversed, because 44 &gt; 23, but Samantha remains at the bottom, even though her age is 50. This is a way of achieving "sub-sorts" and "sub-sub-sorts" (and so on) within records of identical data for specific fields.<br /><br />Courtesy of the $5 Script Archive: <a href="http://www.tufat.com" rel="nofollow" target="_blank">http://www.tufat.com</a><br />**/<br /><br /></span><span class="default">define</span><span class="keyword">( </span><span class="string">'ASC_AZ'</span><span class="keyword">, </span><span class="default">1000 </span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">( </span><span class="string">'DESC_AZ'</span><span class="keyword">, </span><span class="default">1001 </span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">( </span><span class="string">'ASC_NUM'</span><span class="keyword">, </span><span class="default">1002 </span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">( </span><span class="string">'DESC_NUM'</span><span class="keyword">, </span><span class="default">1003 </span><span class="keyword">);<br /><br />function </span><span class="default">stickysort</span><span class="keyword">( </span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$field</span><span class="keyword">, </span><span class="default">$sort_type</span><span class="keyword">, </span><span class="default">$sticky_fields </span><span class="keyword">= array() ) {<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    foreach (</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$is_contiguous </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        if(!empty(</span><span class="default">$grouped_arr</span><span class="keyword">)) {<br />            </span><span class="default">$last_value </span><span class="keyword">= </span><span class="default">end</span><span class="keyword">(</span><span class="default">$grouped_arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br /><br />            if(!(</span><span class="default">$sticky_fields </span><span class="keyword">== array())) {<br />                foreach (</span><span class="default">$sticky_fields </span><span class="keyword">as </span><span class="default">$sticky_field</span><span class="keyword">) {<br />                    if (</span><span class="default">$value</span><span class="keyword">[</span><span class="default">$sticky_field</span><span class="keyword">] &lt;&gt; </span><span class="default">$last_value</span><span class="keyword">[</span><span class="default">$sticky_field</span><span class="keyword">]) {<br />                        </span><span class="default">$is_contiguous </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />                        break;<br />                    }<br />                }<br />            }<br />        }<br />        if (</span><span class="default">$is_contiguous</span><span class="keyword">)<br />            </span><span class="default">$grouped_arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;<br />        else<br />            </span><span class="default">$grouped_arr</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;<br />    }<br />    </span><span class="default">$code </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    switch(</span><span class="default">$sort_type</span><span class="keyword">) {<br />        case </span><span class="default">ASC_AZ</span><span class="keyword">:<br />            </span><span class="default">$code </span><span class="keyword">.= </span><span class="string">'return strcasecmp($a["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"], $b["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"]);'</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">DESC_AZ</span><span class="keyword">:<br />            </span><span class="default">$code </span><span class="keyword">.= </span><span class="string">'return (-1*strcasecmp($a["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"], $b["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"]));'</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">ASC_NUM</span><span class="keyword">:<br />            </span><span class="default">$code </span><span class="keyword">.= </span><span class="string">'return ($a["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"] - $b["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"]);'</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">DESC_NUM</span><span class="keyword">:<br />            </span><span class="default">$code </span><span class="keyword">.= </span><span class="string">'return ($b["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"] - $a["'</span><span class="keyword">.</span><span class="default">$field</span><span class="keyword">.</span><span class="string">'"]);'</span><span class="keyword">;<br />            break;<br />    }<br /><br />    </span><span class="default">$compare </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$a, $b'</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">);<br /><br />    foreach(</span><span class="default">$grouped_arr </span><span class="keyword">as </span><span class="default">$grouped_arr_key</span><span class="keyword">=&gt;</span><span class="default">$grouped_arr_value</span><span class="keyword">)<br />        </span><span class="default">usort </span><span class="keyword">( </span><span class="default">$grouped_arr</span><span class="keyword">[</span><span class="default">$grouped_arr_key</span><span class="keyword">], </span><span class="default">$compare </span><span class="keyword">);<br /><br />    </span><span class="default">$arr </span><span class="keyword">= array();<br />    foreach(</span><span class="default">$grouped_arr </span><span class="keyword">as </span><span class="default">$grouped_arr_key</span><span class="keyword">=&gt;</span><span class="default">$grouped_arr_value</span><span class="keyword">)<br />        foreach(</span><span class="default">$grouped_arr</span><span class="keyword">[</span><span class="default">$grouped_arr_key</span><span class="keyword">] as </span><span class="default">$grouped_arr_arr_key</span><span class="keyword">=&gt;</span><span class="default">$grouped_arr_arr_value</span><span class="keyword">)<br />            </span><span class="default">$arr</span><span class="keyword">[] = </span><span class="default">$grouped_arr</span><span class="keyword">[</span><span class="default">$grouped_arr_key</span><span class="keyword">][</span><span class="default">$grouped_arr_arr_key</span><span class="keyword">];<br /><br />    return </span><span class="default">$arr</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94765">  <div class="votes">
    <div id="Vu94765">
    <a href="/manual/vote-note.php?id=94765&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94765">
    <a href="/manual/vote-note.php?id=94765&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94765" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#94765" class="name">
  <strong class="user"><em>Brecht Cloetens</em></strong></a><a class="genanchor" href="#94765"> &para;</a><div class="date" title="2009-11-23 03:57"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94765">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    <br /></span><span class="comment">/**<br /> * function: array_columns<br /> * author: Brecht Cloetens<br /> * params: $a = array() // original array<br /> *         $c = int() // number of columns<br /> */<br /></span><span class="keyword">function </span><span class="default">array_columns</span><span class="keyword">(&amp;</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">)<br />{<br />    </span><span class="default">$m </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">)/</span><span class="default">$c</span><span class="keyword">);<br />    </span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$m</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        for(</span><span class="default">$k</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$k</span><span class="keyword">&lt;</span><span class="default">$c</span><span class="keyword">; </span><span class="default">$k</span><span class="keyword">++) {<br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">+(</span><span class="default">$m</span><span class="keyword">*</span><span class="default">$k</span><span class="keyword">);<br />            </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">,</span><span class="string">'integer'</span><span class="keyword">);<br />            if(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">)) {<br />                </span><span class="default">$b</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">] = </span><span class="default">$a</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />                </span><span class="default">$j</span><span class="keyword">++;<br />            }<br />        }<br />    }<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$arr </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">,</span><span class="string">'z'</span><span class="keyword">);<br /></span><span class="default">array_columns</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Example:<br />array(1,2,3,4,5) will be converted to array(1,4,2,5,3);<br /><br />This can be easy if you want to display an array into a specified number of columns.<br /><br />&lt;table&gt;<br />    &lt;tr&gt;<br />        &lt;td&gt;$arr[0] =&gt; 1&lt;/td&gt;<br />        &lt;td&gt;$arr[1] =&gt; 4&lt;/td&gt;<br />    &lt;/tr&gt;<br />    &lt;tr&gt;<br />        &lt;td&gt;$arr[2] =&gt; 2&lt;/td&gt;<br />        &lt;td&gt;$arr[3] =&gt; 5&lt;/td&gt;<br />    &lt;/tr&gt;<br />    &lt;tr&gt;<br />        &lt;td&gt;$arr[4] =&gt; 3&lt;/td&gt;<br />        &lt;td&gt;&lt;/td&gt;<br />    &lt;/tr&gt;<br />&lt;/table&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="85620">  <div class="votes">
    <div id="Vu85620">
    <a href="/manual/vote-note.php?id=85620&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85620">
    <a href="/manual/vote-note.php?id=85620&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85620" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#85620" class="name">
  <strong class="user"><em>www at designdetector dot com</em></strong></a><a class="genanchor" href="#85620"> &para;</a><div class="date" title="2008-09-09 07:43"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85620">
<div class="phpcode"><code><span class="html">To sort an array of multiple text fields alphabetically you have to make the text lowercase before sorting the array. Otherwise PHP puts acronyms before words. You can see this in my example code. Simply store the original text field at the end of the array line and call it later from there. You can safely ignore the lowercase version which is added to the start of the array line.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'&lt;pre&gt;ORIGINAL DATA:<br />&lt;br /&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">$data </span><span class="keyword">= array(<br /></span><span class="string">'Saturn|7|8|9|0||'</span><span class="keyword">,<br /></span><span class="string">'Hello|0|1|2|3||'</span><span class="keyword">,<br /></span><span class="string">'SFX|5|3|2|4||'</span><span class="keyword">,<br /></span><span class="string">'HP|9|0|5|6||'<br /></span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br /></span><span class="default">sort</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br />echo </span><span class="string">'&lt;br /&gt;RAW SORT:<br />&lt;br /&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br />for (</span><span class="default">$c </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$c </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">); </span><span class="default">$c</span><span class="keyword">++) {<br />    list (</span><span class="default">$letter</span><span class="keyword">,</span><span class="default">$g1</span><span class="keyword">,</span><span class="default">$g2</span><span class="keyword">,</span><span class="default">$g3</span><span class="keyword">,</span><span class="default">$g4</span><span class="keyword">,</span><span class="default">$end</span><span class="keyword">) = </span><span class="default">explode </span><span class="keyword">(</span><span class="string">'|'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$c</span><span class="keyword">]);<br />    </span><span class="default">$lowercase </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$letter</span><span class="keyword">);<br />    </span><span class="default">$data2</span><span class="keyword">[</span><span class="default">$c</span><span class="keyword">] = array(</span><span class="default">$lowercase</span><span class="keyword">,</span><span class="default">$g1</span><span class="keyword">,</span><span class="default">$g2</span><span class="keyword">,</span><span class="default">$g3</span><span class="keyword">,</span><span class="default">$g4</span><span class="keyword">,</span><span class="default">$letter</span><span class="keyword">);<br />}<br /><br /></span><span class="default">sort</span><span class="keyword">(</span><span class="default">$data2</span><span class="keyword">);<br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$data2</span><span class="keyword">);<br /><br />echo </span><span class="string">'&lt;br /&gt;LOWERCASE SORT:<br />&lt;br /&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$data2</span><span class="keyword">);<br /><br />echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75957">  <div class="votes">
    <div id="Vu75957">
    <a href="/manual/vote-note.php?id=75957&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75957">
    <a href="/manual/vote-note.php?id=75957&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75957" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#75957" class="name">
  <strong class="user"><em>sinan at sinaneldem dot com</em></strong></a><a class="genanchor" href="#75957"> &para;</a><div class="date" title="2007-06-23 08:29"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75957">
<div class="phpcode"><code><span class="html">here is little script which will merge arrays, remove duplicates and sort it by alphabetical order:<br /><br /><span class="default">&lt;?php<br /><br />$array1 </span><span class="keyword">= array(</span><span class="string">'apple'</span><span class="keyword">, </span><span class="string">'banana'</span><span class="keyword">,</span><span class="string">'pear'</span><span class="keyword">);<br /></span><span class="default">$array2 </span><span class="keyword">= array(</span><span class="string">'grape'</span><span class="keyword">, </span><span class="string">'pear'</span><span class="keyword">,</span><span class="string">'orange'</span><span class="keyword">);<br /><br />function </span><span class="default">array_unique_merge_sort</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">){<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">));<br /></span><span class="default">sort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">$new</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />}<br />return </span><span class="default">$new</span><span class="keyword">;<br />}<br /><br /></span><span class="default">print_r </span><span class="keyword">(</span><span class="default">array_unique_merge_sort</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />this will print out:<br /><br />Array ( [0] =&gt; apple [1] =&gt; banana [2] =&gt; grape [3] =&gt; orange [4] =&gt; pear )</span></code></div>
  </div>
 </div>
  <div class="note" id="101558">  <div class="votes">
    <div id="Vu101558">
    <a href="/manual/vote-note.php?id=101558&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101558">
    <a href="/manual/vote-note.php?id=101558&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101558" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#101558" class="name">
  <strong class="user"><em>anaz114119 at gmail dot com</em></strong></a><a class="genanchor" href="#101558"> &para;</a><div class="date" title="2010-12-24 02:34"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101558">
<div class="phpcode"><code><span class="html">sort from textfile by coloumn
<br />example name||date||time||comments
<br />if you want to sort by date
<br />$column = 2
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">array_sort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,</span><span class="default">$column</span><span class="keyword">){
<br /> </span><span class="default">$column </span><span class="keyword">= </span><span class="default">$column</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;
<br /> foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">){
<br /> </span><span class="default">$bits </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"||"</span><span class="keyword">,</span><span class="default">$line</span><span class="keyword">);
<br /> </span><span class="default">$bits </span><span class="keyword">=</span><span class="string">"</span><span class="default">$bits</span><span class="keyword">[</span><span class="default">$column</span><span class="keyword">]</span><span class="string">**</span><span class="default">$line</span><span class="string">"</span><span class="keyword">;
<br /> </span><span class="default">$array1</span><span class="keyword">[]=</span><span class="default">$bits</span><span class="keyword">;
<br />}
<br /> </span><span class="default">asort</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">);
<br /> foreach(</span><span class="default">$array1 </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">){
<br /> </span><span class="default">$bit </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"**"</span><span class="keyword">,</span><span class="default">$line</span><span class="keyword">);
<br /> </span><span class="default">$bit </span><span class="keyword">=</span><span class="string">"</span><span class="default">$bit</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]</span><span class="string">"</span><span class="keyword">;
<br /> </span><span class="default">$array2</span><span class="keyword">[]=</span><span class="default">$bit</span><span class="keyword">;
<br />}
<br /> return</span><span class="default">$array2</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="45484">  <div class="votes">
    <div id="Vu45484">
    <a href="/manual/vote-note.php?id=45484&amp;page=function.sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45484">
    <a href="/manual/vote-note.php?id=45484&amp;page=function.sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45484" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#45484" class="name">
  <strong class="user"><em>anthony at ectrolinux dot com</em></strong></a><a class="genanchor" href="#45484"> &para;</a><div class="date" title="2004-09-08 04:39"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45484">
<div class="phpcode"><code><span class="html">In a brief addition to the previous poster's message, the ascending sorting order used by PHP directly corresponds to ISO-8859-1 (ASCII). Therefore the character \48 (numeral 0) would be placed before the character \82 (R), which would be placed before the character \110 (n), and so forth.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.sort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sort.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
