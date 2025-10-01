<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: uksort - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.uksort.php">
 <link rel="shorturl" href="https://www.php.net/uksort">
 <link rel="alternate" href="https://www.php.net/uksort" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.uasort.php">
 <link rel="next" href="https://www.php.net/manual/en/function.usort.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.uksort.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.uksort.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.uksort.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.uksort.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.uksort.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.uksort.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.uksort.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.uksort.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.uksort.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.uksort.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.uksort.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sort an array by keys using a user-defined comparison function" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: uksort - Manual" />
<meta name="twitter:description" content="Sort an array by keys using a user-defined comparison function" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: uksort - Manual" />
<meta itemprop="description" content="Sort an array by keys using a user-defined comparison function" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sort an array by keys using a user-defined comparison function" />

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
        <a href="function.usort.php">
          usort &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.uasort.php">
          &laquo; uasort        </a>
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
            <option value='en/function.uksort.php' selected="selected">English</option>
            <option value='de/function.uksort.php'>German</option>
            <option value='es/function.uksort.php'>Spanish</option>
            <option value='fr/function.uksort.php'>French</option>
            <option value='it/function.uksort.php'>Italian</option>
            <option value='ja/function.uksort.php'>Japanese</option>
            <option value='pt_BR/function.uksort.php'>Brazilian Portuguese</option>
            <option value='ru/function.uksort.php'>Russian</option>
            <option value='tr/function.uksort.php'>Turkish</option>
            <option value='uk/function.uksort.php'>Ukrainian</option>
            <option value='zh/function.uksort.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.uksort" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">uksort</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">uksort</span> &mdash; <span class="dc-title">Sort an array by keys using a user-defined comparison function</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.uksort-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>uksort</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   Sorts <code class="parameter">array</code> in place by keys using a
   user-supplied comparison function to determine the order.
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


 <div class="refsect1 parameters" id="refsect1-function.uksort-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The input array.
      </p>
     </dd>
    
    
     <dt><code class="parameter">callback</code></dt>
     <dd>
      <p class="para">
 The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
</p>
<div class="methodsynopsis dc-description"><span class="methodname"><span class="replaceable">callback</span></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$a</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$b</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

<div class="caution"><strong class="caution">Caution</strong>
 <p class="para">
  Returning <em>non-integer</em> values from the comparison
  function, such as <span class="type"><a href="language.types.float.php" class="type float">float</a></span>, will result in an internal cast to
  <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> of the callback&#039;s return value. So values such as
  <code class="literal">0.99</code> and <code class="literal">0.1</code> will both be cast to an
  integer value of <code class="literal">0</code>, which will compare such values as equal.
 </p>
</div>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.uksort-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.uksort-changelog">
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
  The return type is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> now; previously, it was <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
 </td>
</tr>

     <tr>
 <td>8.0.0</td>
 <td>
  If <code class="parameter">callback</code> expects a parameter to be passed
  by reference, this function will now emit an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.uksort-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5330">
    <p><strong>Example #1 <span class="function"><strong>uksort()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">cmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'@^(a|an|the) @'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'@^(a|an|the) @'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br />    return </span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"John" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"the Earth" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">"an apple" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #DD0000">"a banana" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">4</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">uksort</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #DD0000">"cmp"</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$a </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$key</span><span style="color: #DD0000">: </span><span style="color: #0000BB">$value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">an apple: 3
a banana: 4
the Earth: 2
John: 1</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.uksort-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.usort.php" class="function" rel="rdfs-seeAlso">usort()</a> - Sort an array by values using a user-defined comparison function</span></li>
   <li><span class="function"><a href="function.uasort.php" class="function" rel="rdfs-seeAlso">uasort()</a> - Sort an array with a user-defined comparison function and maintain index association</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/uksort.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.uksort%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.uksort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.uksort.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116662">  <div class="votes">
    <div id="Vu116662">
    <a href="/manual/vote-note.php?id=116662&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116662">
    <a href="/manual/vote-note.php?id=116662&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116662" title="75% like this...">
    590
    </div>
  </div>
  <a href="#116662" class="name">
  <strong class="user"><em>PHPUser</em></strong></a><a class="genanchor" href="#116662"> &para;</a><div class="date" title="2015-02-06 05:32"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116662">
<div class="phpcode"><code><span class="html">[Editor's note: the following comment may be factually incorrect]
<br />
<br />uksort is only usable in the UK
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if(</span><span class="default">$country</span><span class="keyword">==</span><span class="string">"UK"</span><span class="keyword">){
<br />  </span><span class="default">uksort</span><span class="keyword">();
<br />}else{
<br />  echo </span><span class="string">"You have to live in UK to use uksort()."</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114955">  <div class="votes">
    <div id="Vu114955">
    <a href="/manual/vote-note.php?id=114955&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114955">
    <a href="/manual/vote-note.php?id=114955&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114955" title="75% like this...">
    10
    </div>
  </div>
  <a href="#114955" class="name">
  <strong class="user"><em>ingo at example dot test</em></strong></a><a class="genanchor" href="#114955"> &para;</a><div class="date" title="2014-05-05 01:30"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114955">
<div class="phpcode"><code><span class="html">sort with collation, to have umlauts correctly:<br /><br />uksort($retval, array(Collator::create( 'de_DE' ), 'compare'));</span></code></div>
  </div>
 </div>
  <div class="note" id="43914">  <div class="votes">
    <div id="Vu43914">
    <a href="/manual/vote-note.php?id=43914&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43914">
    <a href="/manual/vote-note.php?id=43914&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43914" title="64% like this...">
    12
    </div>
  </div>
  <a href="#43914" class="name">
  <strong class="user"><em>fabriceb at gmx dot net</em></strong></a><a class="genanchor" href="#43914"> &para;</a><div class="date" title="2004-07-08 06:26"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43914">
<div class="phpcode"><code><span class="html">(about sorting an array of objects by their properties in a class - inspired by webmaster at zeroweb dot org at usort function)<br />I'm using classes as an abstraction for querying records in a database and use arrays of objects to store records that have an 1 to n relationship. E.g. a class "family" has family members stored as an array of objects. Each of those objects prepresents a record in a database related to the family (by it's familyId).<br /><br />To identify members, I'm using their memberId as the key of the array e.g. $family-&gt;members[$memberId].<br />To sort the family members AFTER fetching them with the database query, you can use the functions _objSort and sortMembers which will sort the "members" array by key using it's properties (for space reasons I didn't include the methods used to open the records):<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">familyMember<br /></span><span class="keyword">{<br />    var </span><span class="default">$memberId</span><span class="keyword">;<br />    var </span><span class="default">$familyId</span><span class="keyword">;<br />    var </span><span class="default">$firstName</span><span class="keyword">;<br />    var </span><span class="default">$age</span><span class="keyword">;<br />    var </span><span class="default">$hairColor</span><span class="keyword">;<br /></span><span class="comment">// ...<br /></span><span class="keyword">}<br /><br />class </span><span class="default">family<br /></span><span class="keyword">{<br />    var </span><span class="default">$familyId</span><span class="keyword">;<br />    var </span><span class="default">$name</span><span class="keyword">;<br />    var </span><span class="default">$members </span><span class="keyword">= array(); </span><span class="comment">// array of familyMember objects<br />    </span><span class="keyword">var </span><span class="default">$sortFields </span><span class="keyword">= array();<br />    var </span><span class="default">$sortDirections </span><span class="keyword">= array();<br />    </span><span class="comment">// ...<br />    </span><span class="keyword">function </span><span class="default">_objSort</span><span class="keyword">(&amp;</span><span class="default">$a</span><span class="keyword">, &amp;</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />    {<br />        </span><span class="default">$field        </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sortFields</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        </span><span class="default">$direction    </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sortDirections</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        <br />        </span><span class="default">$diff </span><span class="keyword">= </span><span class="default">strnatcmp</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">details</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">]-&gt;</span><span class="default">$field</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">details</span><span class="keyword">[</span><span class="default">$b</span><span class="keyword">]-&gt;</span><span class="default">$field</span><span class="keyword">) * </span><span class="default">$direction</span><span class="keyword">;<br />        if (</span><span class="default">$diff </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">&amp;&amp; isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sortFields</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">]))<br />        {<br />            </span><span class="default">$diff </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_objSort</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />        }<br />        <br />        return </span><span class="default">$diff</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">sortMembers</span><span class="keyword">(</span><span class="default">$sortFields</span><span class="keyword">)<br />    {<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        foreach (</span><span class="default">$sortFields </span><span class="keyword">as </span><span class="default">$field </span><span class="keyword">=&gt; </span><span class="default">$direction</span><span class="keyword">)<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sortFields</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$field</span><span class="keyword">;<br />            </span><span class="default">$direction </span><span class="keyword">== </span><span class="string">"DESC" </span><span class="keyword">? </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sortDirections</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = -</span><span class="default">1 </span><span class="keyword">: </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sortDirections</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />            </span><span class="default">$i</span><span class="keyword">++;<br />        }<br />        <br />        </span><span class="default">uksort</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">details</span><span class="keyword">, array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"_objSort"</span><span class="keyword">));<br />        <br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sortFields </span><span class="keyword">= array();<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sortDirections </span><span class="keyword">= array();<br />    }<br />}<br /></span><span class="comment">// open a family<br /></span><span class="default">$familyId </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">$family </span><span class="keyword">= new </span><span class="default">family</span><span class="keyword">(</span><span class="default">$familyId</span><span class="keyword">);<br /></span><span class="default">$family</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(); </span><span class="comment">// this will also fetch all members<br /><br />// sort members by 3 fields<br /></span><span class="default">$family</span><span class="keyword">-&gt;</span><span class="default">sortMembers</span><span class="keyword">(array(</span><span class="string">"firstName" </span><span class="keyword">=&gt; </span><span class="string">"ASC"</span><span class="keyword">, </span><span class="string">"age" </span><span class="keyword">=&gt; </span><span class="string">"DESC"</span><span class="keyword">, </span><span class="string">"hairColor" </span><span class="keyword">=&gt; </span><span class="string">"ASC"</span><span class="keyword">));<br /></span><span class="comment">// output all family members<br /></span><span class="keyword">foreach (</span><span class="default">$family</span><span class="keyword">-&gt;</span><span class="default">members </span><span class="keyword">as </span><span class="default">$member</span><span class="keyword">)<br />{<br />    echo </span><span class="default">$member</span><span class="keyword">-&gt;</span><span class="default">firstName</span><span class="keyword">.</span><span class="string">" - "</span><span class="keyword">.</span><span class="default">$member</span><span class="keyword">-&gt;</span><span class="default">age</span><span class="keyword">.</span><span class="string">" - "</span><span class="keyword">.</span><span class="default">$member</span><span class="keyword">-&gt;</span><span class="default">hairColor</span><span class="keyword">.</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Note that this might not be the fastest thing on earth and it hasn't been tested very much yet but I hope it's useful for someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="98053">  <div class="votes">
    <div id="Vu98053">
    <a href="/manual/vote-note.php?id=98053&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98053">
    <a href="/manual/vote-note.php?id=98053&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98053" title="63% like this...">
    5
    </div>
  </div>
  <a href="#98053" class="name">
  <strong class="user"><em>mdsky at web dot de</em></strong></a><a class="genanchor" href="#98053"> &para;</a><div class="date" title="2010-05-23 11:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98053">
<div class="phpcode"><code><span class="html">Case insensitive without own function:<br /><br />uksort($array, "strnatcasecmp");</span></code></div>
  </div>
 </div>
  <div class="note" id="48402">  <div class="votes">
    <div id="Vu48402">
    <a href="/manual/vote-note.php?id=48402&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48402">
    <a href="/manual/vote-note.php?id=48402&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48402" title="60% like this...">
    1
    </div>
  </div>
  <a href="#48402" class="name">
  <strong class="user"><em>aleczapka at gmx dot net</em></strong></a><a class="genanchor" href="#48402"> &para;</a><div class="date" title="2004-12-22 04:35"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48402">
<div class="phpcode"><code><span class="html">One remark regarding array_sorter class.<br />It won't work correctly with eg. dates from mysql like 20041206105350, cause you can't convert such number into integer. To fix it remove intval() from the code. If the variable is a number it will work without converting this to int anyways. Here is the fix.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">....<br />if (</span><span class="default">$a </span><span class="keyword">== </span><span class="default">$b</span><span class="keyword">) <br />    return </span><span class="default">0</span><span class="keyword">;<br />if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sasc</span><span class="keyword">)<br />    return (</span><span class="default">$a </span><span class="keyword">&gt; </span><span class="default">$b</span><span class="keyword">) ? </span><span class="default">1 </span><span class="keyword">: -</span><span class="default">1</span><span class="keyword">;<br />else<br />    return (</span><span class="default">$a </span><span class="keyword">&gt; </span><span class="default">$b</span><span class="keyword">) ? -</span><span class="default">1 </span><span class="keyword">: </span><span class="default">1</span><span class="keyword">;<br />...<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="38076">  <div class="votes">
    <div id="Vu38076">
    <a href="/manual/vote-note.php?id=38076&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38076">
    <a href="/manual/vote-note.php?id=38076&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38076" title="58% like this...">
    3
    </div>
  </div>
  <a href="#38076" class="name">
  <strong class="user"><em>guss at typo dot co dot il</em></strong></a><a class="genanchor" href="#38076"> &para;</a><div class="date" title="2003-12-07 12:18"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38076">
<div class="phpcode"><code><span class="html">Regarding the recursive sorting function above:<br />Genrally speaking, any recursion can be reimplemented using simple iteration. in the specific case, using recursion to compare strings has a huge performance impact while a simple loop would suffice and be faster and more simple. <br />Recursion is only good if it simplifies your code or your understanding of the concept. the previous example does neither, especially as it does a lot of repetitive things in each iteration, such as asigning the character order constant, rebuilding it into an array and such<br /><br />For example, the string comparison could be written as such : <br />function str_compare($a,$b) {<br />    $order="aA??bBcC&amp;#269;&amp;#268;..."; // longer normally &amp; without that html entities<br />    $default = strlen($a) - strlen($b);<br />    $minlen = strlen($a) &lt; strlen($b) ? strlen($a) : strlen($b);<br />    for ($i = 0; $i &lt; $minlen; $i++) {<br />        $pos_a=strpos($order,$a[$i]);<br />        $pos_b=strpos($order,$b[$i]);<br />        if ($pos_a != $pos_b)<br />            return $pos_a - $pos_b;<br />    }<br />    return $default;<br />}<br /><br />Which is much simpler and faster.<br />Note that the above function will break for characters that are not listed in $order. it should be failry trivial to fix it.</span></code></div>
  </div>
 </div>
  <div class="note" id="47936">  <div class="votes">
    <div id="Vu47936">
    <a href="/manual/vote-note.php?id=47936&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47936">
    <a href="/manual/vote-note.php?id=47936&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47936" title="55% like this...">
    2
    </div>
  </div>
  <a href="#47936" class="name">
  <strong class="user"><em>aleczapka at gmx dot net</em></strong></a><a class="genanchor" href="#47936"> &para;</a><div class="date" title="2004-12-06 04:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47936">
<div class="phpcode"><code><span class="html">Here is a small and very fast object to handle sorting of multidimentional arrays by a key.<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />* Handles multidimentional array sorting by a key (not recursive)<br />*<br />* @author Oliwier Ptak &lt;aleczapka at gmx dot net&gt;<br />*/<br /></span><span class="keyword">class </span><span class="default">array_sorter<br /></span><span class="keyword">{<br />    var </span><span class="default">$skey </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    var </span><span class="default">$sarray </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    var </span><span class="default">$sasc </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /><br />    </span><span class="comment">/**<br />    * Constructor<br />    *<br />    * @access public<br />    * @param mixed $array array to sort<br />    * @param string $key array key to sort by<br />    * @param boolean $asc sort order (ascending or descending)<br />    */<br />    </span><span class="keyword">function </span><span class="default">array_sorter</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$asc</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sarray </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">skey </span><span class="keyword">= </span><span class="default">$key</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sasc </span><span class="keyword">= </span><span class="default">$asc</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />    * Sort method<br />    *<br />    * @access public<br />    * @param boolean $remap if true reindex the array to rewrite indexes<br />    */<br />    </span><span class="keyword">function </span><span class="default">sortit</span><span class="keyword">(</span><span class="default">$remap</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">)<br />    {<br />        </span><span class="default">$array </span><span class="keyword">= &amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sarray</span><span class="keyword">;<br />        </span><span class="default">uksort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"_as_cmp"</span><span class="keyword">));<br />        if (</span><span class="default">$remap</span><span class="keyword">)<br />        {<br />            </span><span class="default">$tmp </span><span class="keyword">= array();<br />            while (list(</span><span class="default">$id</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">))<br />                </span><span class="default">$tmp</span><span class="keyword">[] = </span><span class="default">$data</span><span class="keyword">;<br />            return </span><span class="default">$tmp</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$array</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />    * Custom sort function<br />    *<br />    * @access private<br />    * @param mixed $a an array entry<br />    * @param mixed $b an array entry<br />    */<br />    </span><span class="keyword">function </span><span class="default">_as_cmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)<br />    {<br />        </span><span class="comment">//since uksort will pass here only indexes get real values from our array<br />        </span><span class="keyword">if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) &amp;&amp; !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">))<br />        {<br />            </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sarray</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">][</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">skey</span><span class="keyword">];<br />            </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sarray</span><span class="keyword">[</span><span class="default">$b</span><span class="keyword">][</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">skey</span><span class="keyword">];<br />        }<br /><br />        </span><span class="comment">//if string - use string comparision<br />        </span><span class="keyword">if (!</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) &amp;&amp; !</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">))<br />        {<br />            if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sasc</span><span class="keyword">)<br />                return </span><span class="default">strcasecmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />            else <br />                return </span><span class="default">strcasecmp</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">);<br />        }<br />        else<br />        {<br />            if (</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) == </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">)) <br />                return </span><span class="default">0</span><span class="keyword">;<br /><br />            if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sasc</span><span class="keyword">)<br />                return (</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) &gt; </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">)) ? -</span><span class="default">1 </span><span class="keyword">: </span><span class="default">1</span><span class="keyword">;<br />            else<br />                return (</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) &gt; </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">)) ? </span><span class="default">1 </span><span class="keyword">: -</span><span class="default">1</span><span class="keyword">;<br />        }<br />    }<br /><br />}</span><span class="comment">//end of class<br /></span><span class="default">?&gt;<br /></span><br />Sample $input_array:<br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [id] =&gt; 961<br />            [uid] =&gt; 29<br />            [gid] =&gt; 12<br />            [parent_id] =&gt; 147<br />            [created] =&gt; 20041206105350<br />            [modified] =&gt; 20041206110702<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [id] =&gt; 41<br />            [uid] =&gt; 29<br />            [gid] =&gt; 12<br />            [parent_id] =&gt; 153<br />            [created] =&gt; 20041025154009<br />            [modified] =&gt; 20041206105532<br />        )<br /><br />    [2] =&gt; Array<br />        (<br />            [id] =&gt; 703<br />            [uid] =&gt; 29<br />            [gid] =&gt; 12<br />            [parent_id] =&gt; 419<br />            [created] =&gt; 20041025154132<br />            [modified] =&gt; 20041027150259<br />        )<br /><br />Example of usage:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">multi_sort</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$asc</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">)<br />    {<br />        </span><span class="default">$sorter </span><span class="keyword">= new </span><span class="default">array_sorter</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$asc</span><span class="keyword">);<br />        return </span><span class="default">$sorter</span><span class="keyword">-&gt;</span><span class="default">sortit</span><span class="keyword">();<br />    }<br />    </span><span class="comment">//sort by parent_id in descending order<br />    </span><span class="default">$my_array </span><span class="keyword">= </span><span class="default">multi_sort</span><span class="keyword">(</span><span class="default">$input_array</span><span class="keyword">, </span><span class="string">"parent_id"</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The result array will be:<br />Array<br />(<br /><br />    [0] =&gt; Array<br />        (<br />            [id] =&gt; 703<br />            [uid] =&gt; 29<br />            [gid] =&gt; 12<br />            [parent_id] =&gt; 419<br />            [created] =&gt; 20041025154132<br />            [modified] =&gt; 20041027150259<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [id] =&gt; 41<br />            [uid] =&gt; 29<br />            [gid] =&gt; 12<br />            [parent_id] =&gt; 153<br />            [created] =&gt; 20041025154009<br />            [modified] =&gt; 20041206105532<br />        )<br /><br />    [2] =&gt; Array<br />        (<br />            [id] =&gt; 961<br />            [uid] =&gt; 29<br />            [gid] =&gt; 12<br />            [parent_id] =&gt; 147<br />            [created] =&gt; 20041206105350<br />            [modified] =&gt; 20041206110702<br />        )</span></code></div>
  </div>
 </div>
  <div class="note" id="92560">  <div class="votes">
    <div id="Vu92560">
    <a href="/manual/vote-note.php?id=92560&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92560">
    <a href="/manual/vote-note.php?id=92560&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92560" title="52% like this...">
    1
    </div>
  </div>
  <a href="#92560" class="name">
  <strong class="user"><em>contacto at hardcode dot com dot ar</em></strong></a><a class="genanchor" href="#92560"> &para;</a><div class="date" title="2009-07-29 06:56"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92560">
<div class="phpcode"><code><span class="html">need a case insensitive sort by key function? i did and couldn find it, so:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">insensitive_uksort</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">) {
<br />    return </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">)&lt;</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);
<br />}
<br /></span><span class="default">uksort</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="string">"insensitive_uksort"</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92061">  <div class="votes">
    <div id="Vu92061">
    <a href="/manual/vote-note.php?id=92061&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92061">
    <a href="/manual/vote-note.php?id=92061&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92061" title="52% like this...">
    1
    </div>
  </div>
  <a href="#92061" class="name">
  <strong class="user"><em>brian dot short at gmail dot com</em></strong></a><a class="genanchor" href="#92061"> &para;</a><div class="date" title="2009-07-07 07:58"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92061">
<div class="phpcode"><code><span class="html">If you need to periodically sort by grades (A, A+, D-, etc.), here is a compare function that compares strings by the case-insensitive method, unless it finds a grade, in which case it correctly sorts by putting "plus" grades first, unmarked grades second, and "minus" grades last.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">cmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)
<br />{
<br />   </span><span class="default">$a </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'@^(a|an|the) @'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">);
<br />   </span><span class="default">$b </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'@^(a|an|the) @'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);
<br />
<br />   </span><span class="comment">//special code for grades
<br />   </span><span class="keyword">if (</span><span class="default">strpos</span><span class="keyword">( </span><span class="default">$a</span><span class="keyword">, </span><span class="string">"+"</span><span class="keyword">) !== </span><span class="default">false </span><span class="keyword">|| </span><span class="default">strpos</span><span class="keyword">( </span><span class="default">$b</span><span class="keyword">, </span><span class="string">"+"</span><span class="keyword">) !== </span><span class="default">false  </span><span class="keyword">|| 
<br />       </span><span class="default">strpos</span><span class="keyword">( </span><span class="default">$a</span><span class="keyword">, </span><span class="string">"-"</span><span class="keyword">) !== </span><span class="default">false </span><span class="keyword">|| </span><span class="default">strpos</span><span class="keyword">( </span><span class="default">$b</span><span class="keyword">, </span><span class="string">"-"</span><span class="keyword">) !== </span><span class="default">false </span><span class="keyword">){
<br />
<br />        </span><span class="default">$substrA </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />        </span><span class="default">$substrB </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);        
<br />
<br />        </span><span class="default">$modifierA </span><span class="keyword">= (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) == </span><span class="default">2</span><span class="keyword">) ? </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) : </span><span class="string">""</span><span class="keyword">;
<br />        </span><span class="default">$modifierB </span><span class="keyword">= (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">) == </span><span class="default">2</span><span class="keyword">) ? </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) : </span><span class="string">""</span><span class="keyword">;
<br />    
<br />        if (</span><span class="default">$substrA </span><span class="keyword">== </span><span class="default">$substrB</span><span class="keyword">){
<br />            </span><span class="comment">//figure out plusses and minuses.
<br />            </span><span class="keyword">if (</span><span class="default">$modifierA </span><span class="keyword">== </span><span class="string">"+"</span><span class="keyword">){
<br />                return -</span><span class="default">1</span><span class="keyword">;
<br />            } else if (</span><span class="default">$modifierB </span><span class="keyword">== </span><span class="string">"+"</span><span class="keyword">){
<br />                return </span><span class="default">1</span><span class="keyword">;
<br />            }
<br />        
<br />            if (</span><span class="default">$modifierA </span><span class="keyword">== </span><span class="string">"-"</span><span class="keyword">){
<br />                return </span><span class="default">1</span><span class="keyword">;
<br />            } else if (</span><span class="default">$modifierB </span><span class="keyword">== </span><span class="string">'-'</span><span class="keyword">){
<br />                return -</span><span class="default">1</span><span class="keyword">;
<br />            }
<br />        } else {
<br />            return </span><span class="default">strcasecmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);
<br />        }
<br /> 
<br />    }
<br />   return </span><span class="default">strcasecmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">$grades </span><span class="keyword">= array( 
<br />                 </span><span class="string">"C+" </span><span class="keyword">=&gt; </span><span class="default">13    </span><span class="keyword">,
<br />                </span><span class="string">"C" </span><span class="keyword">=&gt; </span><span class="default">10     </span><span class="keyword">,
<br />                </span><span class="string">"D+" </span><span class="keyword">=&gt; </span><span class="default">8     </span><span class="keyword">,
<br />                </span><span class="string">"B+" </span><span class="keyword">=&gt; </span><span class="default">7     </span><span class="keyword">,
<br />                </span><span class="string">"C-" </span><span class="keyword">=&gt; </span><span class="default">6     </span><span class="keyword">,
<br />                </span><span class="string">"A-" </span><span class="keyword">=&gt; </span><span class="default">5     </span><span class="keyword">,
<br />                </span><span class="string">"F" </span><span class="keyword">=&gt; </span><span class="default">5      </span><span class="keyword">,
<br />                </span><span class="string">"B" </span><span class="keyword">=&gt; </span><span class="default">4      </span><span class="keyword">,
<br />                </span><span class="string">"B-" </span><span class="keyword">=&gt; </span><span class="default">4     </span><span class="keyword">,
<br />                </span><span class="string">"D" </span><span class="keyword">=&gt; </span><span class="default">3      </span><span class="keyword">,
<br />                </span><span class="string">"D-" </span><span class="keyword">=&gt; </span><span class="default">3     </span><span class="keyword">,
<br />                </span><span class="string">"A+" </span><span class="keyword">=&gt; </span><span class="default">1
<br />    </span><span class="keyword">); 
<br />
<br /></span><span class="default">uksort</span><span class="keyword">(</span><span class="default">$grades</span><span class="keyword">, </span><span class="string">"cmp"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />result:  Array
<br />(
<br />    [A+] =&gt; 1
<br />    [A-] =&gt; 5
<br />    [B+] =&gt; 7
<br />    [B] =&gt; 4
<br />    [B-] =&gt; 4
<br />    [C+] =&gt; 13
<br />    [C] =&gt; 10
<br />    [C-] =&gt; 6
<br />    [D+] =&gt; 8
<br />    [D] =&gt; 3
<br />    [D-] =&gt; 3
<br />    [F] =&gt; 5
<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="125739">  <div class="votes">
    <div id="Vu125739">
    <a href="/manual/vote-note.php?id=125739&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125739">
    <a href="/manual/vote-note.php?id=125739&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125739" title="no votes...">
    0
    </div>
  </div>
  <a href="#125739" class="name">
  <strong class="user"><em>smcbride at msn dot com</em></strong></a><a class="genanchor" href="#125739"> &para;</a><div class="date" title="2021-01-29 07:17"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125739">
<div class="phpcode"><code><span class="html">This might be obvious to many, but just to help others that are trying to use this in a class.  Inside a class, you can prefix the function with self:: within the uksort(), and it will work.  Also, if it is in another class that is included, you can prefix it with the class name.<br /><br />class someclass {<br />     private function ArraySortCMPIP($a, $b) {<br />          $a = ip2long($a);<br />          $b = ip2long($b);<br /><br />          if ($a == $b) return 0;<br />          return ($a &lt; $b) ? -1 : 1;<br />     }<br /><br />     // Output<br />     public function PrintResults() {<br />          uksort($this-&gt;someIPAddressArray, 'self::ArraySortCMPIP');<br />          print_r($this-&gt;someIPAddressArray);<br />     }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="48274">  <div class="votes">
    <div id="Vu48274">
    <a href="/manual/vote-note.php?id=48274&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48274">
    <a href="/manual/vote-note.php?id=48274&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48274" title="52% like this...">
    1
    </div>
  </div>
  <a href="#48274" class="name">
  <strong class="user"><em>jg at delegation dot ca</em></strong></a><a class="genanchor" href="#48274"> &para;</a><div class="date" title="2004-12-17 07:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48274">
<div class="phpcode"><code><span class="html">To sort dates with uksort:<br /><br />function datediff($a, $b) {<br />    <br /><br />$a = date('U',$a);<br />$b = date('U',$b);<br /><br />if ($a == $b) $r = 0;<br />else $r = ($a &gt; $b) ? 1: -1;<br /><br />return $r;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="122871">  <div class="votes">
    <div id="Vu122871">
    <a href="/manual/vote-note.php?id=122871&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122871">
    <a href="/manual/vote-note.php?id=122871&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122871" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122871" class="name">
  <strong class="user"><em>DimeCadmium</em></strong></a><a class="genanchor" href="#122871"> &para;</a><div class="date" title="2018-06-22 06:48"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122871">
<div class="phpcode"><code><span class="html">Don't use uksort($array, "strnatcasecmp"); ... use ksort($array, SORT_NATURAL|SORT_FLAG_CASE);</span></code></div>
  </div>
 </div>
  <div class="note" id="51105">  <div class="votes">
    <div id="Vu51105">
    <a href="/manual/vote-note.php?id=51105&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51105">
    <a href="/manual/vote-note.php?id=51105&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51105" title="50% like this...">
    0
    </div>
  </div>
  <a href="#51105" class="name">
  <strong class="user"><em>Jimomighty</em></strong></a><a class="genanchor" href="#51105"> &para;</a><div class="date" title="2005-03-19 07:30"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51105">
<div class="phpcode"><code><span class="html">...<br /><br />function cmp($a, $b)<br />{<br />   if ($a == $b) {<br />       return 0;<br />   }<br />   return ($a &lt; $b) ? -1 : 1;<br />}<br /><br />function uksort_tree ( &amp;$array )<br />{<br />    // [PHP5] foreach ( $array as &amp;$value )<br />    foreach ( $array as $key =&gt; $value )<br />    {<br />       if ( is_array ( $value ) )<br />       {<br />            // [PHP5] uksort_tree ( $value );<br />           uksort_tree ( $array[$key] );<br />       }<br />    }<br /><br />    uksort( $array, "cmp" );<br />}<br /><br />uksort_tree( $myEntryArray );<br /><br />...</span></code></div>
  </div>
 </div>
  <div class="note" id="39746">  <div class="votes">
    <div id="Vu39746">
    <a href="/manual/vote-note.php?id=39746&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39746">
    <a href="/manual/vote-note.php?id=39746&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39746" title="50% like this...">
    0
    </div>
  </div>
  <a href="#39746" class="name">
  <strong class="user"><em>webmaster at kik-it at N0SP4M dot com</em></strong></a><a class="genanchor" href="#39746"> &para;</a><div class="date" title="2004-02-09 10:03"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39746">
<div class="phpcode"><code><span class="html">The code below allows you to sort an array_A following array_B keys order, original keys and values remain associated.<br /><br />&lt;?<br /><br />//main function<br />Function SortArrayAKeysLikeArrayBKeys(&amp;$TheArrayToSort){<br />   uksort($TheArrayToSort,"SortArrayAKeysLikeArrayBKeys_cmp");<br />}<br /><br />//the custom compare function<br />Function SortArrayAKeysLikeArrayBKeys_cmp($a,$b){<br />  global $TheArrayOrder;<br />  $PosA=KeyPosInArray($a,$TheArrayOrder);<br />  $PosB=KeyPosInArray($b,$TheArrayOrder);<br />  if ($PosA==$PosB){return 0;}else{return ($PosA &gt; $PosB ? 1 : -1);}<br />}<br /><br />//where is my key in my array<br />Function KeyPosInArray($Key,$Array){<br />   $i=0;<br />   $Pos=99999999;<br />   if($Array){<br />      foreach($Array as $K =&gt; $V){<br />         $i++;<br />         if($K==$Key){<br />            $Pos=$i;<br />            break;<br />         }<br />      }<br />   }<br />   return $Pos;<br />}<br /><br />//the array you want to sort<br />$AnyArrayToSort['age']='19';<br />$AnyArrayToSort['ville']='rennes';<br />$AnyArrayToSort['website']='kik-it.com';<br />$AnyArrayToSort['region']='bretagne';<br />$AnyArrayToSort['code_postal']='35200';<br />$AnyArrayToSort['Nom']='Fred';<br /><br />//the array with the correct keys/values order<br />$TheArrayOrder['Nom']='Whatever';<br />$TheArrayOrder['age']='Anything';<br />$TheArrayOrder['region']='What u want';<br />$TheArrayOrder['ville']='Something';<br />$TheArrayOrder['code_postal']='Nothing';<br /><br />//before sort<br />print_r($AnyArrayToSort);    <br />echo "&lt;br&gt;";<br />//we sort<br />SortArrayAKeysLikeArrayBKeys($AnyArrayToSort);<br />echo "&lt;br&gt;";<br />//after sort<br />print_r($AnyArrayToSort);<br />?&gt;<br /><br />Will print :<br /><br />Array ( [age] =&gt; 19 [ville] =&gt; rennes [website] =&gt; kik-it.com [region] =&gt; bretagne [code_postal] =&gt; 35200 [Nom] =&gt; Fred ) <br /><br />Array ( [Nom] =&gt; Fred [age] =&gt; 19 [region] =&gt; bretagne [ville] =&gt; rennes [code_postal] =&gt; 35200 [website] =&gt; kik-it.com ) <br /><br />The keys not listed in the $TheArrayOrder will appear at the end of your sorted array (only if Key Pos &lt; 99999999 ;o)</span></code></div>
  </div>
 </div>
  <div class="note" id="37395">  <div class="votes">
    <div id="Vu37395">
    <a href="/manual/vote-note.php?id=37395&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37395">
    <a href="/manual/vote-note.php?id=37395&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37395" title="50% like this...">
    0
    </div>
  </div>
  <a href="#37395" class="name">
  <strong class="user"><em>ignatius dot reilly at free dot fr</em></strong></a><a class="genanchor" href="#37395"> &para;</a><div class="date" title="2003-11-13 10:59"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37395">
<div class="phpcode"><code><span class="html">To use a more complicated comparison function, one can use a callback to a method of an object instance.<br />For example the following will take an array $arr whose keys are the same as those of $reference, and reorder $arr so that the keys appear in the same order as in $reference.<br /><br />class kcmp {<br />    var $reference ;<br />    function kcmp( $reference ) {<br />       $this-&gt;reference = $reference ; <br />    }<br />    function kcompare( $a, $b ) {<br />       $keys = array_keys( $this-&gt;reference ) ;<br />       $position_a = array_search( $a, $keys ) ;<br />       $position_b = array_search( $b, $keys ) ;<br />       return  $position_a &lt; $position_b ? -1 : 1 ;    <br />    }<br />}<br /><br />$reference = array(<br />    "k2" =&gt; "a2",<br />    "k3" =&gt; "a3",<br />    "k1" =&gt; "a1"<br />) ;<br />$arr = array(<br />    "k1" =&gt; "b1",<br />    "k2" =&gt; "b2",<br />    "k3" =&gt; "b3"<br />) ;<br />print_r( $arr ) ; <br />uksort( $arr, array( new kcmp( $reference ), "kcompare" ) ) ;<br />print_r( $arr ) ;</span></code></div>
  </div>
 </div>
  <div class="note" id="118896">  <div class="votes">
    <div id="Vu118896">
    <a href="/manual/vote-note.php?id=118896&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118896">
    <a href="/manual/vote-note.php?id=118896&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118896" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#118896" class="name">
  <strong class="user"><em>andi at example dot com</em></strong></a><a class="genanchor" href="#118896"> &para;</a><div class="date" title="2016-02-24 10:58"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118896">
<div class="phpcode"><code><span class="html">I needed to be able to sort a string that contained numbers eg.<br /><br />"Slot 1 name"<br />"Slot 2 name"<br />"Slot 10 name"<br /><br />using a normal string compare the "Slot 10 name" would appear before "Slot 2 name" so I wrote little function that will compare a string taking numbers in to consideration. There may be a few edge cases that need to be taken in to consideration.<br /><br />function strCmpWithNumbers( $a, $b) {<br />  // Split the string in to words.<br />  $a = explode(' ',$a);<br />  $b = explode(' ',$b);<br />  $loop = 0;<br />  do {<br />    // Get the first word from each item<br />    $ta = Utils::gvfa($a, $loop);<br />    $tb = Utils::gvfa($b, $loop);<br />    <br />    if (isset($ta)) {<br />      if (isset($tb)) {<br />        if (is_numeric($ta)) {<br />          if ($ta != $tb) {<br />            return $ta - $tb;<br />          }<br />        } else {<br />          $val = strcasecmp($ta, $tb);<br />          if ($val != 0) {<br />            return $val;<br />          }<br />        }<br />      } else {<br />        return 1; // a is set but b isn't<br />      }<br />    } else {<br />      return isset($b);<br />    }<br />    $loop +=1;<br />  } while (true);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="118105">  <div class="votes">
    <div id="Vu118105">
    <a href="/manual/vote-note.php?id=118105&amp;page=function.uksort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118105">
    <a href="/manual/vote-note.php?id=118105&amp;page=function.uksort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118105" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#118105" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#118105"> &para;</a><div class="date" title="2015-10-05 01:02"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118105">
<div class="phpcode"><code><span class="html">An associative array with known keys can be easily custom sorted using a switch statement in the callback:<br /><br />NB ksort can be used beforehand to ensure expected results<br /><br />ksort($array);<br /><br />uksort($array, function ($a) {                    <br />    switch($a) {<br />        case 'pepperoni':<br />            return 0;<br />        case 'beef':<br />            return 1;<br />        case 'chicken':<br />            return 2;<br />        case 'ham':<br />            return 3;<br />        case 'vegetarian':<br />            return 4;<br />    }<br />});</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.uksort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.uksort.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.sort.php" title="sort">sort</a>
                        </li>
                                                <li class="">
                            <a href="function.uasort.php" title="uasort">uasort</a>
                        </li>
                                                <li class="current">
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
