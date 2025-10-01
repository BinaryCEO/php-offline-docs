<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_multisort - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-multisort.php">
 <link rel="shorturl" href="https://www.php.net/array-multisort">
 <link rel="alternate" href="https://www.php.net/array-multisort" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-merge-recursive.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-pad.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-multisort.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-multisort.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-multisort.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-multisort.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-multisort.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-multisort.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-multisort.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-multisort.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-multisort.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-multisort.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-multisort.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sort multiple or multi-dimensional arrays" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_multisort - Manual" />
<meta name="twitter:description" content="Sort multiple or multi-dimensional arrays" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_multisort - Manual" />
<meta itemprop="description" content="Sort multiple or multi-dimensional arrays" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sort multiple or multi-dimensional arrays" />

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
        <a href="function.array-pad.php">
          array_pad &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-merge-recursive.php">
          &laquo; array_merge_recursive        </a>
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
            <option value='en/function.array-multisort.php' selected="selected">English</option>
            <option value='de/function.array-multisort.php'>German</option>
            <option value='es/function.array-multisort.php'>Spanish</option>
            <option value='fr/function.array-multisort.php'>French</option>
            <option value='it/function.array-multisort.php'>Italian</option>
            <option value='ja/function.array-multisort.php'>Japanese</option>
            <option value='pt_BR/function.array-multisort.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-multisort.php'>Russian</option>
            <option value='tr/function.array-multisort.php'>Turkish</option>
            <option value='uk/function.array-multisort.php'>Ukrainian</option>
            <option value='zh/function.array-multisort.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-multisort" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_multisort</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_multisort</span> &mdash; <span class="dc-title">Sort multiple or multi-dimensional arrays</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.array-multisort-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_multisort</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array1</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$array1_sort_order</code><span class="initializer"> = SORT_ASC</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$array1_sort_flags</code><span class="initializer"> = SORT_REGULAR</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$rest</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>array_multisort()</strong></span> can be used to sort several
   arrays at once, or a multi-dimensional array by one or more
   dimensions.
  </p>
  <p class="para">
   Associative (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>) keys will be maintained, but numeric
   keys will be re-indexed.
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


 <div class="refsect1 parameters" id="refsect1-function.array-multisort-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array1</code></dt>
     <dd>
      <p class="para">
       An <span class="type"><a href="language.types.array.php" class="type array">array</a></span> being sorted.
      </p>
     </dd>
    
    
     <dt><code class="parameter">array1_sort_order</code></dt>
     <dd>
      <p class="para">
       The order used to sort the previous <span class="type"><a href="language.types.array.php" class="type array">array</a></span> argument. Either
       <strong><code><a href="array.constants.php#constant.sort-asc">SORT_ASC</a></code></strong> to sort ascendingly or <strong><code><a href="array.constants.php#constant.sort-desc">SORT_DESC</a></code></strong>
       to sort descendingly.
      </p>
      <p class="para">
       This argument can be swapped with <code class="parameter">array1_sort_flags</code>
       or omitted entirely, in which case <strong><code><a href="array.constants.php#constant.sort-asc">SORT_ASC</a></code></strong> is assumed.
      </p>
     </dd>
    
    
     <dt><code class="parameter">array1_sort_flags</code></dt>
     <dd>
      <p class="para">
       Sort options for the previous <span class="type"><a href="language.types.array.php" class="type array">array</a></span> argument:
      </p>
      <p class="para">
       Sorting type flags:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara"><strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong> - compare items normally
         (don&#039;t change types)</span>
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
      <p class="para">
       This argument can be swapped with <code class="parameter">array1_sort_order</code>
       or omitted entirely, in which case <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong> is assumed.
      </p>
     </dd>
    
    
     <dt><code class="parameter">rest</code></dt>
     <dd>
      <p class="para">
       More arrays, optionally followed by sort order and flags. Only elements
       corresponding to equivalent elements in previous arrays are compared.
       In other words, the sort is lexicographical.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-multisort-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.array-multisort-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5256">
    <p><strong>Example #1 Sorting multiple arrays</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$ar1 </span><span style="color: #007700">= array(</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$ar2 </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_multisort</span><span style="color: #007700">(</span><span style="color: #0000BB">$ar1</span><span style="color: #007700">, </span><span style="color: #0000BB">$ar2</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$ar1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$ar2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     In this example, after sorting, the first array will contain 0,
     10, 100, 100. The second array will contain 4, 1, 2, 3. The
     entries in the second array corresponding to the identical
     entries in the first array (100 and 100) were sorted as well.
    </p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(4) {
  [0]=&gt; int(0)
  [1]=&gt; int(10)
  [2]=&gt; int(100)
  [3]=&gt; int(100)
}
array(4) {
  [0]=&gt; int(4)
  [1]=&gt; int(1)
  [2]=&gt; int(2)
  [3]=&gt; int(3)
}</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5257">
    <p><strong>Example #2 Sorting multi-dimensional array</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$ar </span><span style="color: #007700">= array(<br />       array(</span><span style="color: #DD0000">"10"</span><span style="color: #007700">, </span><span style="color: #0000BB">11</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #DD0000">"a"</span><span style="color: #007700">),<br />       array(   </span><span style="color: #0000BB">1</span><span style="color: #007700">,  </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">"2"</span><span style="color: #007700">,   </span><span style="color: #0000BB">3</span><span style="color: #007700">,   </span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />      );<br /></span><span style="color: #0000BB">array_multisort</span><span style="color: #007700">(</span><span style="color: #0000BB">$ar</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">], </span><span style="color: #0000BB">SORT_ASC</span><span style="color: #007700">, </span><span style="color: #0000BB">SORT_STRING</span><span style="color: #007700">,<br />                </span><span style="color: #0000BB">$ar</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">], </span><span style="color: #0000BB">SORT_NUMERIC</span><span style="color: #007700">, </span><span style="color: #0000BB">SORT_DESC</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$ar</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     In this example, after sorting, the first array will transform to
     &quot;10&quot;, 100, 100, 11, &quot;a&quot; (it was sorted as strings in ascending
     order). The second will contain 1, 3, &quot;2&quot;, 2, 1 (sorted as numbers,
     in descending order).
    </p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(2) {
  [0]=&gt; array(5) {
    [0]=&gt; string(2) &quot;10&quot;
    [1]=&gt; int(100)
    [2]=&gt; int(100)
    [3]=&gt; int(11)
    [4]=&gt; string(1) &quot;a&quot;
  }
  [1]=&gt; array(5) {
    [0]=&gt; int(1)
    [1]=&gt; int(3)
    [2]=&gt; string(1) &quot;2&quot;
    [3]=&gt; int(2)
    [4]=&gt; int(1)
  }
}</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5258">
    <p><strong>Example #3 Sorting database results</strong></p>
    <div class="example-contents"><p>
     For this example, each element in the <var class="varname">data</var>
     array represents one row in a table. This type of dataset is typical
     of database records.
    </p></div>
    <div class="example-contents"><p>
     Example data:
    </p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">volume | edition
-------+--------
    67 |       2
    86 |       1
    85 |       6
    98 |       2
    86 |       6
    67 |       7</pre>
</div>
    </div>
    <div class="example-contents"><p>
     The data as an array, called <var class="varname">data</var>. This would usually,
     for example, be obtained by looping with <span class="function"><a href="mysqli-result.fetch-assoc.php" class="function">mysqli_fetch_assoc()</a></span>.
    </p></div>
    <div class="example-contents"><p>
     In this example, we will order by <var class="varname">volume</var> descending,
     <var class="varname">edition</var> ascending.
    </p></div>
    <div class="example-contents"><p>
     We have an array of rows, but <span class="function"><strong>array_multisort()</strong></span>
     requires an array of columns, so we use the below code to obtain the
     columns, then perform the sorting.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// The data as created by looping over mysqli_fetch_assoc:<br /></span><span style="color: #0000BB">$data</span><span style="color: #007700">[] = array(</span><span style="color: #DD0000">'volume' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">67</span><span style="color: #007700">, </span><span style="color: #DD0000">'edition' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$data</span><span style="color: #007700">[] = array(</span><span style="color: #DD0000">'volume' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">86</span><span style="color: #007700">, </span><span style="color: #DD0000">'edition' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$data</span><span style="color: #007700">[] = array(</span><span style="color: #DD0000">'volume' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">85</span><span style="color: #007700">, </span><span style="color: #DD0000">'edition' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">6</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$data</span><span style="color: #007700">[] = array(</span><span style="color: #DD0000">'volume' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">98</span><span style="color: #007700">, </span><span style="color: #DD0000">'edition' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$data</span><span style="color: #007700">[] = array(</span><span style="color: #DD0000">'volume' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">86</span><span style="color: #007700">, </span><span style="color: #DD0000">'edition' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">6</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$data</span><span style="color: #007700">[] = array(</span><span style="color: #DD0000">'volume' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">67</span><span style="color: #007700">, </span><span style="color: #DD0000">'edition' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">7</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Obtain a list of columns<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$data </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$row</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$volume</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]  = </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'volume'</span><span style="color: #007700">];<br />    </span><span style="color: #0000BB">$edition</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">] = </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'edition'</span><span style="color: #007700">];<br />}<br /><br /></span><span style="color: #FF8000">// You can use array_column() instead of the above code<br /></span><span style="color: #0000BB">$volume  </span><span style="color: #007700">= </span><span style="color: #0000BB">array_column</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">, </span><span style="color: #DD0000">'volume'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$edition </span><span style="color: #007700">= </span><span style="color: #0000BB">array_column</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">, </span><span style="color: #DD0000">'edition'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Sort the data with volume descending, edition ascending<br />// Add $data as the last parameter, to sort by the common key<br /></span><span style="color: #0000BB">array_multisort</span><span style="color: #007700">(</span><span style="color: #0000BB">$volume</span><span style="color: #007700">, </span><span style="color: #0000BB">SORT_DESC</span><span style="color: #007700">, </span><span style="color: #0000BB">$edition</span><span style="color: #007700">, </span><span style="color: #0000BB">SORT_ASC</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Loop over the data and output the sorted values for each column<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'volume | edition'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'-------+--------'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">); </span><span style="color: #0000BB">$i</span><span style="color: #007700">++) {<br />     </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%6d | %7d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$volume</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">], </span><span style="color: #0000BB">$edition</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     The dataset is now sorted, and will look like this:
    </p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">volume | edition
-------+--------
    98 |       2
    86 |       1
    86 |       6
    85 |       6
    67 |       2
    67 |       7</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5259">
    <p><strong>Example #4 Case insensitive sorting</strong></p>
    <div class="example-contents"><p>
     Both <strong><code><a href="array.constants.php#constant.sort-string">SORT_STRING</a></code></strong> and
     <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong> are case sensitive, strings
     starting with a capital letter will come before strings starting
     with a lowercase letter.
    </p></div>
    <div class="example-contents"><p>
     To perform a case insensitive sort, force the sorting order to be
     determined by a lowercase copy of the original array.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'Alpha'</span><span style="color: #007700">, </span><span style="color: #DD0000">'atomic'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Beta'</span><span style="color: #007700">, </span><span style="color: #DD0000">'bank'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$array_lowercase </span><span style="color: #007700">= </span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'strtolower'</span><span style="color: #007700">, </span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">array_multisort</span><span style="color: #007700">(</span><span style="color: #0000BB">$array_lowercase</span><span style="color: #007700">, </span><span style="color: #0000BB">SORT_ASC</span><span style="color: #007700">, </span><span style="color: #0000BB">SORT_STRING</span><span style="color: #007700">, </span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; Alpha
    [1] =&gt; atomic
    [2] =&gt; bank
    [3] =&gt; Beta
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.array-multisort-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.usort.php" class="function" rel="rdfs-seeAlso">usort()</a> - Sort an array by values using a user-defined comparison function</span></li>
    <li>The <a href="array.sorting.php" class="link">comparison of array sorting functions</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-multisort.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-multisort%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-multisort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-multisort.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100534">  <div class="votes">
    <div id="Vu100534">
    <a href="/manual/vote-note.php?id=100534&amp;page=function.array-multisort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100534">
    <a href="/manual/vote-note.php?id=100534&amp;page=function.array-multisort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100534" title="76% like this...">
    225
    </div>
  </div>
  <a href="#100534" class="name">
  <strong class="user"><em>jimpoz at jimpoz dot com</em></strong></a><a class="genanchor" href="#100534"> &para;</a><div class="date" title="2010-10-21 02:26"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100534">
<div class="phpcode"><code><span class="html">I came up with an easy way to sort database-style results. This does what example 3 does, except it takes care of creating those intermediate arrays for you before passing control on to array_multisort(). <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_orderby</span><span class="keyword">()<br />{<br />    </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">);<br />    foreach (</span><span class="default">$args </span><span class="keyword">as </span><span class="default">$n </span><span class="keyword">=&gt; </span><span class="default">$field</span><span class="keyword">) {<br />        if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">)) {<br />            </span><span class="default">$tmp </span><span class="keyword">= array();<br />            foreach (</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$row</span><span class="keyword">)<br />                </span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$row</span><span class="keyword">[</span><span class="default">$field</span><span class="keyword">];<br />            </span><span class="default">$args</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">] = </span><span class="default">$tmp</span><span class="keyword">;<br />            }<br />    }<br />    </span><span class="default">$args</span><span class="keyword">[] = &amp;</span><span class="default">$data</span><span class="keyword">;<br />    </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="string">'array_multisort'</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br />    return </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />The sorted array is now in the return value of the function instead of being passed by reference.<br /><br /><span class="default">&lt;?php<br />$data</span><span class="keyword">[] = array(</span><span class="string">'volume' </span><span class="keyword">=&gt; </span><span class="default">67</span><span class="keyword">, </span><span class="string">'edition' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$data</span><span class="keyword">[] = array(</span><span class="string">'volume' </span><span class="keyword">=&gt; </span><span class="default">86</span><span class="keyword">, </span><span class="string">'edition' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$data</span><span class="keyword">[] = array(</span><span class="string">'volume' </span><span class="keyword">=&gt; </span><span class="default">85</span><span class="keyword">, </span><span class="string">'edition' </span><span class="keyword">=&gt; </span><span class="default">6</span><span class="keyword">);<br /></span><span class="default">$data</span><span class="keyword">[] = array(</span><span class="string">'volume' </span><span class="keyword">=&gt; </span><span class="default">98</span><span class="keyword">, </span><span class="string">'edition' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$data</span><span class="keyword">[] = array(</span><span class="string">'volume' </span><span class="keyword">=&gt; </span><span class="default">86</span><span class="keyword">, </span><span class="string">'edition' </span><span class="keyword">=&gt; </span><span class="default">6</span><span class="keyword">);<br /></span><span class="default">$data</span><span class="keyword">[] = array(</span><span class="string">'volume' </span><span class="keyword">=&gt; </span><span class="default">67</span><span class="keyword">, </span><span class="string">'edition' </span><span class="keyword">=&gt; </span><span class="default">7</span><span class="keyword">);<br /><br /></span><span class="comment">// Pass the array, followed by the column names and sort flags<br /></span><span class="default">$sorted </span><span class="keyword">= </span><span class="default">array_orderby</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="string">'volume'</span><span class="keyword">, </span><span class="default">SORT_DESC</span><span class="keyword">, </span><span class="string">'edition'</span><span class="keyword">, </span><span class="default">SORT_ASC</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119291">  <div class="votes">
    <div id="Vu119291">
    <a href="/manual/vote-note.php?id=119291&amp;page=function.array-multisort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119291">
    <a href="/manual/vote-note.php?id=119291&amp;page=function.array-multisort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119291" title="75% like this...">
    74
    </div>
  </div>
  <a href="#119291" class="name">
  <strong class="user"><em>matt at bosc dot io</em></strong></a><a class="genanchor" href="#119291"> &para;</a><div class="date" title="2016-05-05 09:02"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119291">
<div class="phpcode"><code><span class="html">One-liner function to sort multidimensionnal array by key, thank's to array_column<br /><br /><span class="default">&lt;?php<br /><br />array_multisort </span><span class="keyword">(</span><span class="default">array_column</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="string">'key'</span><span class="keyword">), </span><span class="default">SORT_DESC</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91638">  <div class="votes">
    <div id="Vu91638">
    <a href="/manual/vote-note.php?id=91638&amp;page=function.array-multisort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91638">
    <a href="/manual/vote-note.php?id=91638&amp;page=function.array-multisort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91638" title="71% like this...">
    91
    </div>
  </div>
  <a href="#91638" class="name">
  <strong class="user"><em>cagret at gmail dot com</em></strong></a><a class="genanchor" href="#91638"> &para;</a><div class="date" title="2009-06-20 12:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91638">
<div class="phpcode"><code><span class="html">A more inuitive way of sorting multidimensional arrays using array_msort() in just one line, you don't have to divide the original array into per-column-arrays:<br /><br /><span class="default">&lt;?php<br /><br />$arr1 </span><span class="keyword">= array(<br />    array(</span><span class="string">'id'</span><span class="keyword">=&gt;</span><span class="default">1</span><span class="keyword">,</span><span class="string">'name'</span><span class="keyword">=&gt;</span><span class="string">'aA'</span><span class="keyword">,</span><span class="string">'cat'</span><span class="keyword">=&gt;</span><span class="string">'cc'</span><span class="keyword">),<br />    array(</span><span class="string">'id'</span><span class="keyword">=&gt;</span><span class="default">2</span><span class="keyword">,</span><span class="string">'name'</span><span class="keyword">=&gt;</span><span class="string">'aa'</span><span class="keyword">,</span><span class="string">'cat'</span><span class="keyword">=&gt;</span><span class="string">'dd'</span><span class="keyword">),<br />    array(</span><span class="string">'id'</span><span class="keyword">=&gt;</span><span class="default">3</span><span class="keyword">,</span><span class="string">'name'</span><span class="keyword">=&gt;</span><span class="string">'bb'</span><span class="keyword">,</span><span class="string">'cat'</span><span class="keyword">=&gt;</span><span class="string">'cc'</span><span class="keyword">),<br />    array(</span><span class="string">'id'</span><span class="keyword">=&gt;</span><span class="default">4</span><span class="keyword">,</span><span class="string">'name'</span><span class="keyword">=&gt;</span><span class="string">'bb'</span><span class="keyword">,</span><span class="string">'cat'</span><span class="keyword">=&gt;</span><span class="string">'dd'</span><span class="keyword">)<br />);<br /><br /></span><span class="default">$arr2 </span><span class="keyword">= </span><span class="default">array_msort</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">, array(</span><span class="string">'name'</span><span class="keyword">=&gt;</span><span class="default">SORT_DESC</span><span class="keyword">, </span><span class="string">'cat'</span><span class="keyword">=&gt;</span><span class="default">SORT_ASC</span><span class="keyword">));<br /><br /></span><span class="default">debug</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">, </span><span class="default">$arr2</span><span class="keyword">);<br /><br /></span><span class="default">arr1</span><span class="keyword">:<br />    </span><span class="default">0</span><span class="keyword">:<br />        </span><span class="default">id</span><span class="keyword">: </span><span class="default">1 </span><span class="keyword">(int)<br />        </span><span class="default">name</span><span class="keyword">: </span><span class="default">aA </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />        </span><span class="default">cat</span><span class="keyword">: </span><span class="default">cc </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />    </span><span class="default">1</span><span class="keyword">:<br />        </span><span class="default">id</span><span class="keyword">: </span><span class="default">2 </span><span class="keyword">(int)<br />        </span><span class="default">name</span><span class="keyword">: </span><span class="default">aa </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />        </span><span class="default">cat</span><span class="keyword">: </span><span class="default">dd </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />    </span><span class="default">2</span><span class="keyword">:<br />        </span><span class="default">id</span><span class="keyword">: </span><span class="default">3 </span><span class="keyword">(int)<br />        </span><span class="default">name</span><span class="keyword">: </span><span class="default">bb </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />        </span><span class="default">cat</span><span class="keyword">: </span><span class="default">cc </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />    </span><span class="default">3</span><span class="keyword">:<br />        </span><span class="default">id</span><span class="keyword">: </span><span class="default">4 </span><span class="keyword">(int)<br />        </span><span class="default">name</span><span class="keyword">: </span><span class="default">bb </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />        </span><span class="default">cat</span><span class="keyword">: </span><span class="default">dd </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br /></span><span class="default">arr2</span><span class="keyword">:<br />    </span><span class="default">2</span><span class="keyword">:<br />        </span><span class="default">id</span><span class="keyword">: </span><span class="default">3 </span><span class="keyword">(int)<br />        </span><span class="default">name</span><span class="keyword">: </span><span class="default">bb </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />        </span><span class="default">cat</span><span class="keyword">: </span><span class="default">cc </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />    </span><span class="default">3</span><span class="keyword">:<br />        </span><span class="default">id</span><span class="keyword">: </span><span class="default">4 </span><span class="keyword">(int)<br />        </span><span class="default">name</span><span class="keyword">: </span><span class="default">bb </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />        </span><span class="default">cat</span><span class="keyword">: </span><span class="default">dd </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />    </span><span class="default">0</span><span class="keyword">:<br />        </span><span class="default">id</span><span class="keyword">: </span><span class="default">1 </span><span class="keyword">(int)<br />        </span><span class="default">name</span><span class="keyword">: </span><span class="default">aA </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />        </span><span class="default">cat</span><span class="keyword">: </span><span class="default">cc </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />    </span><span class="default">1</span><span class="keyword">:<br />        </span><span class="default">id</span><span class="keyword">: </span><span class="default">2 </span><span class="keyword">(int)<br />        </span><span class="default">name</span><span class="keyword">: </span><span class="default">aa </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br />        </span><span class="default">cat</span><span class="keyword">: </span><span class="default">dd </span><span class="keyword">(</span><span class="default">string</span><span class="keyword">:</span><span class="default">2</span><span class="keyword">)<br /><br />function </span><span class="default">array_msort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$cols</span><span class="keyword">)<br />{<br />    </span><span class="default">$colarr </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$cols </span><span class="keyword">as </span><span class="default">$col </span><span class="keyword">=&gt; </span><span class="default">$order</span><span class="keyword">) {<br />        </span><span class="default">$colarr</span><span class="keyword">[</span><span class="default">$col</span><span class="keyword">] = array();<br />        foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$row</span><span class="keyword">) { </span><span class="default">$colarr</span><span class="keyword">[</span><span class="default">$col</span><span class="keyword">][</span><span class="string">'_'</span><span class="keyword">.</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">[</span><span class="default">$col</span><span class="keyword">]); }<br />    }<br />    </span><span class="default">$eval </span><span class="keyword">= </span><span class="string">'array_multisort('</span><span class="keyword">;<br />    foreach (</span><span class="default">$cols </span><span class="keyword">as </span><span class="default">$col </span><span class="keyword">=&gt; </span><span class="default">$order</span><span class="keyword">) {<br />        </span><span class="default">$eval </span><span class="keyword">.= </span><span class="string">'$colarr[\''</span><span class="keyword">.</span><span class="default">$col</span><span class="keyword">.</span><span class="string">'\'],'</span><span class="keyword">.</span><span class="default">$order</span><span class="keyword">.</span><span class="string">','</span><span class="keyword">;<br />    }<br />    </span><span class="default">$eval </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$eval</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">).</span><span class="string">');'</span><span class="keyword">;<br />    eval(</span><span class="default">$eval</span><span class="keyword">);<br />    </span><span class="default">$ret </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$colarr </span><span class="keyword">as </span><span class="default">$col </span><span class="keyword">=&gt; </span><span class="default">$arr</span><span class="keyword">) {<br />        foreach (</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />            </span><span class="default">$k </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />            if (!isset(</span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">])) </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">];<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">][</span><span class="default">$col</span><span class="keyword">] = </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">][</span><span class="default">$col</span><span class="keyword">];<br />        }<br />    }<br />    return </span><span class="default">$ret</span><span class="keyword">;<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114076">  <div class="votes">
    <div id="Vu114076">
    <a href="/manual/vote-note.php?id=114076&amp;page=function.array-multisort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114076">
    <a href="/manual/vote-note.php?id=114076&amp;page=function.array-multisort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114076" title="76% like this...">
    48
    </div>
  </div>
  <a href="#114076" class="name">
  <strong class="user"><em>Robert C</em></strong></a><a class="genanchor" href="#114076"> &para;</a><div class="date" title="2014-01-09 12:11"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114076">
<div class="phpcode"><code><span class="html">Hi,<br /><br />I would like to see the next code snippet to be added to <a href="http://nl3.php.net/array_multisort" rel="nofollow" target="_blank">http://nl3.php.net/array_multisort</a><br /><br />Purpose: Sort a 2-dimensional array on some key(s)<br /><br />Advantage of function: <br />- uses PHP's array_multisort function for sorting;<br />- it prepares the arrays (needed by array_multisort) for you;<br />- allows the sort criteria be passed as a separate array (It is possible to use sort order and flags.); <br />- easy to set/overwrite the way strings are sorted (case insensitive instead of case sensitive, which is PHP's default way of sorting);<br />- performs excellent <br /><br />function MultiSort($data, $sortCriteria, $caseInSensitive = true)<br />{<br />  if( !is_array($data) || !is_array($sortCriteria))<br />    return false;       <br />  $args = array(); <br />  $i = 0;<br />  foreach($sortCriteria as $sortColumn =&gt; $sortAttributes)  <br />  {<br />    $colList = array(); <br />    foreach ($data as $key =&gt; $row)<br />    { <br />      $convertToLower = $caseInSensitive &amp;&amp; (in_array(SORT_STRING, $sortAttributes) || in_array(SORT_REGULAR, $sortAttributes)); <br />      $rowData = $convertToLower ? strtolower($row[$sortColumn]) : $row[$sortColumn]; <br />      $colLists[$sortColumn][$key] = $rowData;<br />    }<br />    $args[] = &amp;$colLists[$sortColumn];<br />      <br />    foreach($sortAttributes as $sortAttribute)<br />    {      <br />      $tmp[$i] = $sortAttribute;<br />      $args[] = &amp;$tmp[$i];<br />      $i++;      <br />     }<br />  }<br />  $args[] = &amp;$data;<br />  call_user_func_array('array_multisort', $args);<br />  return end($args);<br />} <br /><br />Usage:<br /><br />//Fill an array with random test data<br />define('MAX_ITEMS', 15);<br />define('MAX_VAL', 20);<br />for($i=0; $i &lt; MAX_ITEMS; $i++)<br />  $data[] = array('field1' =&gt; rand(1, MAX_VAL), 'field2' =&gt; rand(1, MAX_VAL), 'field3' =&gt; rand(1, MAX_VAL) );<br />  <br />//Set the sort criteria (add as many fields as you want)<br />$sortCriteria = <br />  array('field1' =&gt; array(SORT_DESC, SORT_NUMERIC), <br />       'field3' =&gt; array(SORT_DESC, SORT_NUMERIC)<br />  );<br /><br />//Call it like this:  <br />$sortedData = MultiSort($data, $sortCriteria, true);</span></code></div>
  </div>
 </div>
  <div class="note" id="105798">  <div class="votes">
    <div id="Vu105798">
    <a href="/manual/vote-note.php?id=105798&amp;page=function.array-multisort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105798">
    <a href="/manual/vote-note.php?id=105798&amp;page=function.array-multisort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105798" title="66% like this...">
    21
    </div>
  </div>
  <a href="#105798" class="name">
  <strong class="user"><em>nick ([AT]) nickyost ([DOT]) com</em></strong></a><a class="genanchor" href="#105798"> &para;</a><div class="date" title="2011-09-15 03:36"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105798">
<div class="phpcode"><code><span class="html">USort function can be used to sort multidimensional arrays with almost no work whatsoever by using the individual values within the custom sort function.<br /><br />This function passes the entire child element even if it is not a string. If it is an array, as would be the case in multidimensional arrays, it will pass the whole child array as one parameter.<br /><br />Therefore, do something elegant like this:<br /><br /><span class="default">&lt;?php<br />     </span><span class="comment">// Sort the multidimensional array<br />     </span><span class="default">usort</span><span class="keyword">(</span><span class="default">$results</span><span class="keyword">, </span><span class="string">"custom_sort"</span><span class="keyword">);<br />     </span><span class="comment">// Define the custom sort function<br />     </span><span class="keyword">function </span><span class="default">custom_sort</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">) {<br />          return </span><span class="default">$a</span><span class="keyword">[</span><span class="string">'some_sub_var'</span><span class="keyword">]&gt;</span><span class="default">$b</span><span class="keyword">[</span><span class="string">'some_sub_var'</span><span class="keyword">];<br />     }<br /></span><span class="default">?&gt;<br /></span><br />This does in 4 lines what other functions took 40 to 50 lines to do. This does not require you to create temporary arrays or anything. This is, for me, a highly preferred solution over this function.<br /><br />Hope it helps!</span></code></div>
  </div>
 </div>
  <div class="note" id="69656">  <div class="votes">
    <div id="Vu69656">
    <a href="/manual/vote-note.php?id=69656&amp;page=function.array-multisort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69656">
    <a href="/manual/vote-note.php?id=69656&amp;page=function.array-multisort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69656" title="57% like this...">
    3
    </div>
  </div>
  <a href="#69656" class="name">
  <strong class="user"><em>brettz9 throu gh yah</em></strong></a><a class="genanchor" href="#69656"> &para;</a><div class="date" title="2006-09-14 12:04"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69656">
<div class="phpcode"><code><span class="html">Often, one may have a group of arrays which have parallel data that need to be kept associated with each other (e.g., the various attribute values of a group of elements might be stored in their own arrays). Using array_multisort as is, by specifying additional fields, it is possible, as in the documentation example cited below, that this association will be lost. <br /><br />To take this example set of data from the documentation:<br /><span class="default">&lt;?php<br />$ar1 </span><span class="keyword">= array(</span><span class="string">"10"</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="string">"a"</span><span class="keyword">);<br /></span><span class="default">$ar2 </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="string">"2"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The example goes on to sort it this way:<br /><span class="default">&lt;?php<br />array_multisort</span><span class="keyword">(</span><span class="default">$ar1</span><span class="keyword">, </span><span class="default">$ar2</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />In this case, although the "10" remains associated with the first '1' after being sorted, the "2" and '3' are reversed from their original order.<br /><br />In order to sort by one field only (yet still have the other array(s) being correspondingly sorted), one can use array_keys (which makes an array out of the keys) to ensure that no further sub-sorting is performed. This works because array_keys is making an array for which no duplicates can exist (since keys will be unique), and thus, the subsequent fields will have no relevance as far as subsorting.<br /><br />So, using the above data, we can perform this sort instead:<br /><span class="default">&lt;?php<br />$ar3 </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$ar1</span><span class="keyword">);<br /></span><span class="default">array_multisort</span><span class="keyword">(</span><span class="default">$ar1</span><span class="keyword">, </span><span class="default">$ar3</span><span class="keyword">, </span><span class="default">$ar2</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />which, when $ar1 and $ar2 are dumped gives:<br /><br />array(4) {<br />  [0]=&gt; string(2) "10"<br />  [1]=&gt; string(1) "a"<br />  [2]=&gt; int(100)<br />  [3]=&gt; int(100)<br />}<br />array(4) {<br />  [0]=&gt;  int(1)<br />  [1]=&gt;  int(1)<br />  [2]=&gt;  int(3)<br />  [3]=&gt;  string(1) "2"<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="113445">  <div class="votes">
    <div id="Vu113445">
    <a href="/manual/vote-note.php?id=113445&amp;page=function.array-multisort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113445">
    <a href="/manual/vote-note.php?id=113445&amp;page=function.array-multisort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113445" title="55% like this...">
    3
    </div>
  </div>
  <a href="#113445" class="name">
  <strong class="user"><em>Magento-User</em></strong></a><a class="genanchor" href="#113445"> &para;</a><div class="date" title="2013-10-11 03:25"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113445">
<div class="phpcode"><code><span class="html">When sorting an array of (complex) objects, this function can give you a "Fatal error:  Nesting level too deep" since it directly compares elements in later arrays if the elements in earlier ones compare equal. This can be worked around with the Flag-Parameter:<br /><span class="default">&lt;?php <br />$sortKeys </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="default">$extractKey</span><span class="keyword">, </span><span class="default">$lotsOfComplexObjects</span><span class="keyword">);<br /></span><span class="default">array_multisort</span><span class="keyword">(</span><span class="default">$sortKeys</span><span class="keyword">, </span><span class="default">$lotsOfComplexObjects</span><span class="keyword">, </span><span class="default">SORT_ASC</span><span class="keyword">, </span><span class="default">SORT_NUMERIC</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>I'm replacing an 'uasort()'-call which is significantly slower since it leads to a lot of calls to the comparison-function but most of the objects involved are recursive.<br /><br />If this 'trick' gives a wrong order,  you need a better key.</span></code></div>
  </div>
 </div>
  <div class="note" id="130470">  <div class="votes">
    <div id="Vu130470">
    <a href="/manual/vote-note.php?id=130470&amp;page=function.array-multisort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130470">
    <a href="/manual/vote-note.php?id=130470&amp;page=function.array-multisort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130470" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130470" class="name">
  <strong class="user"><em>seb at example dot net</em></strong></a><a class="genanchor" href="#130470"> &para;</a><div class="date" title="2025-09-02 05:32"><strong>27 days ago</strong></div>
  <div class="text" id="Hcom130470">
<div class="phpcode"><code><span class="html">Be aware with array_multisort() and array_column() when you don't want to sort all columns. The last arg ...$rest is used to sort too!<br /><br /><span class="default">&lt;?php<br /><br />$data </span><span class="keyword">= [<br />    [</span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">5</span><span class="keyword">, </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'Marie'</span><span class="keyword">],<br />    [</span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">7</span><span class="keyword">, </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'Lisa'</span><span class="keyword">],<br />    [</span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">, </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'Marie'</span><span class="keyword">],<br />    [</span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">, </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'Jean'</span><span class="keyword">],<br />    [</span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'Marie'</span><span class="keyword">],<br />    [</span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'Jean'</span><span class="keyword">],<br />];<br /><br /></span><span class="default">array_multisort</span><span class="keyword">(<br />    </span><span class="default">array_column</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="string">'name'</span><span class="keyword">), </span><span class="default">SORT_ASC</span><span class="keyword">, </span><span class="default">SORT_REGULAR</span><span class="keyword">, <br />    </span><span class="default">$data</span><span class="keyword">,<br />);<br /><br /></span><span class="comment">/*<br />We could guess :<br /><br />  3       Jean<br />  2       Jean<br />  7       Lisa<br />  5      Marie<br />  4      Marie<br />  1      Marie<br /><br />But the result is :<br /><br />  2       Jean<br />  3       Jean<br />  7       Lisa<br />  1      Marie<br />  4      Marie<br />  5      Marie<br /><br />... id column has been sorted too!<br />*/</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-multisort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-multisort.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
