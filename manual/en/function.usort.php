<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: usort - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.usort.php">
 <link rel="shorturl" href="https://www.php.net/usort">
 <link rel="alternate" href="https://www.php.net/usort" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.uksort.php">
 <link rel="next" href="https://www.php.net/manual/en/book.classobj.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.usort.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.usort.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.usort.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.usort.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.usort.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.usort.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.usort.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.usort.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.usort.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.usort.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.usort.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sort an array by values using a user-defined comparison function" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: usort - Manual" />
<meta name="twitter:description" content="Sort an array by values using a user-defined comparison function" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: usort - Manual" />
<meta itemprop="description" content="Sort an array by values using a user-defined comparison function" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sort an array by values using a user-defined comparison function" />

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
        <a href="book.classobj.php">
          Classes/Objects &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.uksort.php">
          &laquo; uksort        </a>
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
            <option value='en/function.usort.php' selected="selected">English</option>
            <option value='de/function.usort.php'>German</option>
            <option value='es/function.usort.php'>Spanish</option>
            <option value='fr/function.usort.php'>French</option>
            <option value='it/function.usort.php'>Italian</option>
            <option value='ja/function.usort.php'>Japanese</option>
            <option value='pt_BR/function.usort.php'>Brazilian Portuguese</option>
            <option value='ru/function.usort.php'>Russian</option>
            <option value='tr/function.usort.php'>Turkish</option>
            <option value='uk/function.usort.php'>Ukrainian</option>
            <option value='zh/function.usort.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.usort" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">usort</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">usort</span> &mdash; <span class="dc-title">Sort an array by values using a user-defined comparison function</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.usort-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>usort</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   Sorts <code class="parameter">array</code> in place by values using a
   user-supplied comparison function to determine the order.
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
 </div>


 <div class="refsect1 parameters" id="refsect1-function.usort-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-function.usort-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.usort-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.usort-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="function.usort.examples.basic">
    <p><strong>Example #1 <span class="function"><strong>usort()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">cmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">)<br />{<br />    if (</span><span style="color: #0000BB">$a </span><span style="color: #007700">== </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {<br />        return </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />    }<br />    return (</span><span style="color: #0000BB">$a </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">$b</span><span style="color: #007700">) ? -</span><span style="color: #0000BB">1 </span><span style="color: #007700">: </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= array(</span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">6</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #DD0000">"cmp"</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$a </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$key</span><span style="color: #DD0000">: </span><span style="color: #0000BB">$value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">0: 1
1: 2
2: 3
3: 5
4: 6</pre>
</div>
    </div>
    <div class="example-contents"><p>
     The spaceship operator may be used to
     simplify the internal comparison even further.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">cmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #0000BB">$a </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">$b</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= array(</span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">6</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #DD0000">"cmp"</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$a </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$key</span><span style="color: #DD0000">: </span><span style="color: #0000BB">$value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Obviously in this trivial case the <span class="function"><a href="function.sort.php" class="function">sort()</a></span>
    function would be more appropriate.
   </p>
  </p></blockquote>
  <p class="para">
   <div class="example" id="function.usort.examples.multi">
    <p><strong>Example #2 
     <span class="function"><strong>usort()</strong></span> example using multi-dimensional array
    </strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">cmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">"fruit"</span><span style="color: #007700">], </span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #DD0000">"fruit"</span><span style="color: #007700">]);<br />}<br /><br /></span><span style="color: #0000BB">$fruits</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #DD0000">"fruit"</span><span style="color: #007700">] = </span><span style="color: #DD0000">"lemons"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$fruits</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #DD0000">"fruit"</span><span style="color: #007700">] = </span><span style="color: #DD0000">"apples"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$fruits</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #DD0000">"fruit"</span><span style="color: #007700">] = </span><span style="color: #DD0000">"grapes"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$fruits</span><span style="color: #007700">, </span><span style="color: #DD0000">"cmp"</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$fruits </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"\$fruits[</span><span style="color: #0000BB">$key</span><span style="color: #DD0000">]: " </span><span style="color: #007700">. </span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">"fruit"</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">$fruits[0]: apples
$fruits[1]: grapes
$fruits[2]: lemons</pre>
</div>
    </div>
    <div class="example-contents"><p>
     When sorting a multi-dimensional array, <var class="varname">$a</var> and
     <var class="varname">$b</var> contain references to the first index of the array.
    </p></div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="function.usort.examples.object">
    <p><strong>Example #3 
     <span class="function"><strong>usort()</strong></span> example using a member function of an object
    </strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">TestObj </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">string $name</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name </span><span style="color: #007700">= </span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />    }<br /><br />    </span><span style="color: #FF8000">/* This is the static comparing function: */<br />    </span><span style="color: #007700">static function </span><span style="color: #0000BB">cmp_obj</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">)<br />    {<br />        return </span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">) &lt;=&gt; </span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">[] = new </span><span style="color: #0000BB">TestObj</span><span style="color: #007700">(</span><span style="color: #DD0000">"c"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">[] = new </span><span style="color: #0000BB">TestObj</span><span style="color: #007700">(</span><span style="color: #DD0000">"b"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">[] = new </span><span style="color: #0000BB">TestObj</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, [</span><span style="color: #0000BB">TestObj</span><span style="color: #007700">::class, </span><span style="color: #DD0000">"cmp_obj"</span><span style="color: #007700">]);<br /><br />foreach (</span><span style="color: #0000BB">$a </span><span style="color: #007700">as </span><span style="color: #0000BB">$item</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">b
c
d</pre>
</div>
    </div>
   </div>
   <div class="example" id="function.usort.examples.closure">
    <p><strong>Example #4 
     <span class="function"><strong>usort()</strong></span> example using a <a href="functions.anonymous.php" class="link">closure</a>
     to sort a multi-dimensional array
    </strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] = array(</span><span style="color: #DD0000">'key_a' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'z'</span><span style="color: #007700">, </span><span style="color: #DD0000">'key_b' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'c'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] = array(</span><span style="color: #DD0000">'key_a' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'x'</span><span style="color: #007700">, </span><span style="color: #DD0000">'key_b' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'b'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">] = array(</span><span style="color: #DD0000">'key_a' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'y'</span><span style="color: #007700">, </span><span style="color: #DD0000">'key_b' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'a'</span><span style="color: #007700">);<br /><br />function </span><span style="color: #0000BB">build_sorter</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">) {<br />    return function (</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">) use (</span><span style="color: #0000BB">$key</span><span style="color: #007700">) {<br />        return </span><span style="color: #0000BB">strnatcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">], </span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />    };<br />}<br /><br /></span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">, </span><span style="color: #0000BB">build_sorter</span><span style="color: #007700">(</span><span style="color: #DD0000">'key_b'</span><span style="color: #007700">));<br /><br />foreach (</span><span style="color: #0000BB">$array </span><span style="color: #007700">as </span><span style="color: #0000BB">$item</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'key_a'</span><span style="color: #007700">] . </span><span style="color: #DD0000">', ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'key_b'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">y, a
x, b
z, c</pre>
</div>
    </div>
   </div>
   <div class="example" id="function.usort.examples.multiple-axes">
    <p><strong>Example #5 
     <span class="function"><strong>usort()</strong></span> example using the spaceship operator
    </strong></p>
    <div class="example-contents"><p>
     The spaceship operator allows for straightforward comparison of
     compound values across multiple axes. The following example will sort
     <code class="literal">$people</code> by last name, then by first name if the
     last name matches.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$people</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] = [</span><span style="color: #DD0000">'first' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Adam'</span><span style="color: #007700">, </span><span style="color: #DD0000">'last' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'West'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$people</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] = [</span><span style="color: #DD0000">'first' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Alec'</span><span style="color: #007700">, </span><span style="color: #DD0000">'last' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Baldwin'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$people</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">] = [</span><span style="color: #DD0000">'first' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Adam'</span><span style="color: #007700">, </span><span style="color: #DD0000">'last' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Baldwin'</span><span style="color: #007700">];<br /><br />function </span><span style="color: #0000BB">sorter</span><span style="color: #007700">(array </span><span style="color: #0000BB">$a</span><span style="color: #007700">, array </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {<br />    return [</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'last'</span><span style="color: #007700">], </span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'first'</span><span style="color: #007700">]] &lt;=&gt; [</span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #DD0000">'last'</span><span style="color: #007700">], </span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #DD0000">'first'</span><span style="color: #007700">]];<br />}<br /><br /></span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$people</span><span style="color: #007700">, </span><span style="color: #DD0000">'sorter'</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$people </span><span style="color: #007700">as </span><span style="color: #0000BB">$person</span><span style="color: #007700">) {<br />    print </span><span style="color: #0000BB">$person</span><span style="color: #007700">[</span><span style="color: #DD0000">'last'</span><span style="color: #007700">] . </span><span style="color: #DD0000">', ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$person</span><span style="color: #007700">[</span><span style="color: #DD0000">'first'</span><span style="color: #007700">] . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Baldwin, Adam
Baldwin, Alec
West, Adam</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.usort-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.uasort.php" class="function" rel="rdfs-seeAlso">uasort()</a> - Sort an array with a user-defined comparison function and maintain index association</span></li>
   <li><span class="function"><a href="function.uksort.php" class="function" rel="rdfs-seeAlso">uksort()</a> - Sort an array by keys using a user-defined comparison function</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/usort.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.usort%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.usort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.usort.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111883">  <div class="votes">
    <div id="Vu111883">
    <a href="/manual/vote-note.php?id=111883&amp;page=function.usort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111883">
    <a href="/manual/vote-note.php?id=111883&amp;page=function.usort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111883" title="84% like this...">
    23
    </div>
  </div>
  <a href="#111883" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#111883"> &para;</a><div class="date" title="2013-04-08 10:30"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111883">
<div class="phpcode"><code><span class="html">As the documentation says, the comparison function needs to return an integer that is either "less than, equal to, or greater than zero". There is no requirement to restrict the value returned to -1, 0, 1.<br /><br /><span class="default">&lt;?php<br />usort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, function(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />    if(</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">integer_property </span><span class="keyword">&gt; </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">integer_property</span><span class="keyword">) {<br />        return </span><span class="default">1</span><span class="keyword">;<br />    }<br />    elseif(</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">integer_property </span><span class="keyword">&lt; </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">integer_property</span><span class="keyword">) {<br />        return -</span><span class="default">1</span><span class="keyword">;<br />    }<br />    else {<br />        return </span><span class="default">0</span><span class="keyword">;<br />    }<br />});<br /></span><span class="default">?&gt;<br /></span><br />can be simplified to<br /><br /><span class="default">&lt;?php<br />usort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, function(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />    return </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">integer_property </span><span class="keyword">- </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">integer_property</span><span class="keyword">;<br />});<br /></span><span class="default">?&gt;<br /></span><br />This of course applies to any comparison function that calculates an integer "score" for each of its arguments to decide which is "greater".</span></code></div>
  </div>
 </div>
  <div class="note" id="89919">  <div class="votes">
    <div id="Vu89919">
    <a href="/manual/vote-note.php?id=89919&amp;page=function.usort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89919">
    <a href="/manual/vote-note.php?id=89919&amp;page=function.usort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89919" title="83% like this...">
    12
    </div>
  </div>
  <a href="#89919" class="name">
  <strong class="user"><em>luke dot semerau at gmail dot com</em></strong></a><a class="genanchor" href="#89919"> &para;</a><div class="date" title="2009-03-28 12:25"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89919">
<div class="phpcode"><code><span class="html">If you need to use usort with a key in the calling method, I wrote this as a utility:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">usort_comparison</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">, </span><span class="default">$method</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) {<br />    </span><span class="default">$usorter </span><span class="keyword">= &amp;new </span><span class="default">Usort</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">, </span><span class="default">$method</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">);<br />    return array(</span><span class="default">$usorter</span><span class="keyword">, </span><span class="string">"sort"</span><span class="keyword">);<br />}<br /><br />class </span><span class="default">Usort </span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">, </span><span class="default">$method</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">obj </span><span class="keyword">= </span><span class="default">$obj</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">method </span><span class="keyword">= </span><span class="default">$method</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key </span><span class="keyword">= </span><span class="default">$key</span><span class="keyword">;<br />    }<br />    function </span><span class="default">sort</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />        return </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">obj</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">method</span><span class="keyword">), array(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">));<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">require_once(</span><span class="string">"util/usort.php"</span><span class="keyword">);<br /><br />class </span><span class="default">Foo </span><span class="keyword">{<br />    </span><span class="default">$items </span><span class="keyword">= array(</span><span class="default">FooBar</span><span class="keyword">(</span><span class="default">13</span><span class="keyword">), </span><span class="default">FooBar</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">));<br />    public function </span><span class="default">sorter</span><span class="keyword">() {<br />        </span><span class="default">usort</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-</span><span class="default">items</span><span class="keyword">, </span><span class="default">usort_comparison</span><span class="keyword">(</span><span class="string">"Foo"</span><span class="keyword">, </span><span class="string">"_cmp"</span><span class="keyword">, </span><span class="string">"item"</span><span class="keyword">));<br />    }<br /><br />    public static function </span><span class="default">_cmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) {<br />         return </span><span class="default">strcasecmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">);<br />    }<br /><br />}<br /><br />class </span><span class="default">FooBar </span><span class="keyword">{<br />    public </span><span class="default">$item</span><span class="keyword">;<br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">item </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />~ simple example... but in the way I need to use it was the key was used in a switch statement to choose the different member of the object to compare against dynamically (as in, sort by x or y or z)</span></code></div>
  </div>
 </div>
  <div class="note" id="25360">  <div class="votes">
    <div id="Vu25360">
    <a href="/manual/vote-note.php?id=25360&amp;page=function.usort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25360">
    <a href="/manual/vote-note.php?id=25360&amp;page=function.usort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25360" title="71% like this...">
    15
    </div>
  </div>
  <a href="#25360" class="name">
  <strong class="user"><em>mkr at binarywerks dot dk</em></strong></a><a class="genanchor" href="#25360"> &para;</a><div class="date" title="2002-09-20 09:29"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25360">
<div class="phpcode"><code><span class="html">If you want to sort an array according to another array acting as a priority list, you can use this function.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">listcmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)
<br />{
<br />  global </span><span class="default">$order</span><span class="keyword">;
<br />
<br />  foreach(</span><span class="default">$order </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)
<br />    {
<br />      if(</span><span class="default">$a</span><span class="keyword">==</span><span class="default">$value</span><span class="keyword">)
<br />        {
<br />          return </span><span class="default">0</span><span class="keyword">;
<br />          break;
<br />        }
<br />
<br />      if(</span><span class="default">$b</span><span class="keyword">==</span><span class="default">$value</span><span class="keyword">)
<br />        {
<br />          return </span><span class="default">1</span><span class="keyword">;
<br />          break;
<br />        }
<br />    }
<br />}
<br />
<br /></span><span class="default">$order</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"first"</span><span class="keyword">;
<br /></span><span class="default">$order</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="string">"second"</span><span class="keyword">;
<br /></span><span class="default">$order</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="string">"third"</span><span class="keyword">;
<br />
<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"second"</span><span class="keyword">;
<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="string">"first"</span><span class="keyword">;
<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="string">"third"</span><span class="keyword">;
<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="string">"fourth"</span><span class="keyword">;
<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] = </span><span class="string">"second"</span><span class="keyword">;
<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] = </span><span class="string">"first"</span><span class="keyword">;
<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] = </span><span class="string">"second"</span><span class="keyword">;
<br />
<br /></span><span class="default">usort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="string">"listcmp"</span><span class="keyword">);
<br />
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="8587">  <div class="votes">
    <div id="Vu8587">
    <a href="/manual/vote-note.php?id=8587&amp;page=function.usort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd8587">
    <a href="/manual/vote-note.php?id=8587&amp;page=function.usort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V8587" title="76% like this...">
    9
    </div>
  </div>
  <a href="#8587" class="name">
  <strong class="user"><em>derek at luddite dot net</em></strong></a><a class="genanchor" href="#8587"> &para;</a><div class="date" title="2000-09-18 11:35"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom8587">
<div class="phpcode"><code><span class="html">Needed a date sort and I didn't know if one was available so I wrote one. Maybe it'll help someone:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">DateSort</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$d</span><span class="keyword">=</span><span class="string">"-"</span><span class="keyword">) {
<br />    if (</span><span class="default">$a </span><span class="keyword">== </span><span class="default">$b</span><span class="keyword">) {
<br />        return </span><span class="default">0</span><span class="keyword">;
<br />    } else {  </span><span class="comment">//Convert into dates and compare
<br />        </span><span class="keyword">list(</span><span class="default">$am</span><span class="keyword">,</span><span class="default">$ad</span><span class="keyword">,</span><span class="default">$ay</span><span class="keyword">)=</span><span class="default">split</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">);
<br />        list(</span><span class="default">$bm</span><span class="keyword">,</span><span class="default">$bd</span><span class="keyword">,</span><span class="default">$by</span><span class="keyword">)=</span><span class="default">split</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);
<br />        if (</span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$am</span><span class="keyword">,</span><span class="default">$ad</span><span class="keyword">,</span><span class="default">$ay</span><span class="keyword">) &lt; </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$bm</span><span class="keyword">,</span><span class="default">$bd</span><span class="keyword">,</span><span class="default">$by</span><span class="keyword">)) {
<br />            return -</span><span class="default">1</span><span class="keyword">;
<br />        } else {
<br />            return </span><span class="default">1</span><span class="keyword">;
<br />        }
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />$d is the delimeter</span></code></div>
  </div>
 </div>
  <div class="note" id="60777">  <div class="votes">
    <div id="Vu60777">
    <a href="/manual/vote-note.php?id=60777&amp;page=function.usort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60777">
    <a href="/manual/vote-note.php?id=60777&amp;page=function.usort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60777" title="72% like this...">
    5
    </div>
  </div>
  <a href="#60777" class="name">
  <strong class="user"><em>sydney at totoche dot org</em></strong></a><a class="genanchor" href="#60777"> &para;</a><div class="date" title="2006-01-16 01:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60777">
<div class="phpcode"><code><span class="html">Instead of doing  :
<br />
<br /><span class="default">&lt;?php $strc </span><span class="keyword">= </span><span class="default">strcmp</span><span class="keyword">( </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">]), </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">]) ); </span><span class="default">?&gt;
<br /></span>
<br />you could do this : 
<br />
<br /><span class="default">&lt;?php $strc </span><span class="keyword">= </span><span class="default">strcasecmp</span><span class="keyword">( </span><span class="default">$a</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">], </span><span class="default">$b</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">] ); </span><span class="default">?&gt;
<br /></span>
<br />which is more efficient and is does case insensitive comparison according to the current locale.</span></code></div>
  </div>
 </div>
  <div class="note" id="123923">  <div class="votes">
    <div id="Vu123923">
    <a href="/manual/vote-note.php?id=123923&amp;page=function.usort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123923">
    <a href="/manual/vote-note.php?id=123923&amp;page=function.usort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123923" title="75% like this...">
    2
    </div>
  </div>
  <a href="#123923" class="name">
  <strong class="user"><em>gus dot antoniassi at gmail dot com</em></strong></a><a class="genanchor" href="#123923"> &para;</a><div class="date" title="2019-06-10 01:23"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123923">
<div class="phpcode"><code><span class="html">This is a simple way to sort based on a "priority list":<br /><br /><span class="default">&lt;?php<br /><br />$order </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">];<br /></span><span class="default">$arr </span><span class="keyword">=   [<br />    [ </span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">0 </span><span class="keyword">],<br />    [ </span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">1 </span><span class="keyword">],<br />    [ </span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">2 </span><span class="keyword">],<br />    [ </span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">3 </span><span class="keyword">],<br />];<br /><br /></span><span class="default">uasort</span><span class="keyword">(<br />    </span><span class="default">$arr</span><span class="keyword">, <br />    function (</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) use (</span><span class="default">$order</span><span class="keyword">) {<br />        return </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">], </span><span class="default">$order</span><span class="keyword">) &lt;=&gt; </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">], </span><span class="default">$order</span><span class="keyword">); <br />    }<br />);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />This will return:<br /><br />Array<br />(<br />    [1] =&gt; Array<br />        (<br />            [id] =&gt; 1<br />        )<br /><br />    [3] =&gt; Array<br />        (<br />            [id] =&gt; 3<br />        )<br /><br />    [0] =&gt; Array<br />        (<br />            [id] =&gt; 0<br />        )<br /><br />    [2] =&gt; Array<br />        (<br />            [id] =&gt; 2<br />        )<br /><br />)<br /><br />Note that if you have a value in $arr that is not on the $order list, you will need additional checks since the array_search function returns FALSE for undefined indexes.</span></code></div>
  </div>
 </div>
  <div class="note" id="120470">  <div class="votes">
    <div id="Vu120470">
    <a href="/manual/vote-note.php?id=120470&amp;page=function.usort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120470">
    <a href="/manual/vote-note.php?id=120470&amp;page=function.usort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120470" title="69% like this...">
    5
    </div>
  </div>
  <a href="#120470" class="name">
  <strong class="user"><em>inigo dot grimbergen at gmail dot com</em></strong></a><a class="genanchor" href="#120470"> &para;</a><div class="date" title="2017-01-14 06:51"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120470">
<div class="phpcode"><code><span class="html">to sort with numeric and empty values  and have the smallest on top:<br /><span class="default">&lt;?php<br />    usort</span><span class="keyword">(</span><span class="default">$list</span><span class="keyword">, function(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />        if( </span><span class="default">$a </span><span class="keyword">== </span><span class="default">null </span><span class="keyword">&amp;&amp; </span><span class="default">$b </span><span class="keyword">!= </span><span class="default">null </span><span class="keyword">) return </span><span class="default">1</span><span class="keyword">;<br />        if( </span><span class="default">$a </span><span class="keyword">!= </span><span class="default">null </span><span class="keyword">&amp;&amp; </span><span class="default">$b </span><span class="keyword">== </span><span class="default">null </span><span class="keyword">) return -</span><span class="default">1</span><span class="keyword">;<br />        return </span><span class="default">$a </span><span class="keyword">&gt; </span><span class="default">$b </span><span class="keyword">? </span><span class="default">1 </span><span class="keyword">: -</span><span class="default">1</span><span class="keyword">;<br />    });<br /></span><span class="default">?&gt;<br /></span>returns<br />1<br />2<br />3<br />null<br />null<br />null</span></code></div>
  </div>
 </div>
  <div class="note" id="123532">  <div class="votes">
    <div id="Vu123532">
    <a href="/manual/vote-note.php?id=123532&amp;page=function.usort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123532">
    <a href="/manual/vote-note.php?id=123532&amp;page=function.usort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123532" title="60% like this...">
    1
    </div>
  </div>
  <a href="#123532" class="name">
  <strong class="user"><em>chris at candm dot org dot uk</em></strong></a><a class="genanchor" href="#123532"> &para;</a><div class="date" title="2019-01-19 01:15"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123532">
<div class="phpcode"><code><span class="html">In case anyone is interested, comparative timings over 100000000 runs<br />Based on comparing integers (500 and 501)<br />Spaceship:4<br />()?: operator:10<br />Subtraction:2<br /><br />Based on comparing floats (500.1 and 501.3) (caveats noted)<br />Spaceship:5<br />()?: operator:9<br />Subtraction:3<br /><br />Based on comparing strings ("five" and "four")<br />Spaceship:7<br />()?: operator:17<br />(Subtraction obviously not available)<br /><br />Note: a dummy run was done with an empty loop and the elapsed time for this was subtracted from each of the above times so that they reflect ONLY the time to do the comparisons. As for significance. unless you are doing very large numbers of comparisons where spaceships are the order of the day, the difference is insignificant.</span></code></div>
  </div>
 </div>
  <div class="note" id="12047">  <div class="votes">
    <div id="Vu12047">
    <a href="/manual/vote-note.php?id=12047&amp;page=function.usort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12047">
    <a href="/manual/vote-note.php?id=12047&amp;page=function.usort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12047" title="55% like this...">
    2
    </div>
  </div>
  <a href="#12047" class="name">
  <strong class="user"><em>bo at erichsen dot com</em></strong></a><a class="genanchor" href="#12047"> &para;</a><div class="date" title="2001-03-20 05:16"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12047">
<div class="phpcode"><code><span class="html">when using usort to refer to a function inside a class i have succesfully used:
<br />
<br /><span class="default">&lt;?php usort</span><span class="keyword">(</span><span class="default">$myarray</span><span class="keyword">,array(</span><span class="default">$this</span><span class="keyword">,</span><span class="string">"cmp"</span><span class="keyword">)); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107372">  <div class="votes">
    <div id="Vu107372">
    <a href="/manual/vote-note.php?id=107372&amp;page=function.usort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107372">
    <a href="/manual/vote-note.php?id=107372&amp;page=function.usort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107372" title="52% like this...">
    1
    </div>
  </div>
  <a href="#107372" class="name">
  <strong class="user"><em>andi_mclean at ntlworld dot com</em></strong></a><a class="genanchor" href="#107372"> &para;</a><div class="date" title="2012-02-04 03:58"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107372">
<div class="phpcode"><code><span class="html">I needed a sort method that would sort strings but take note of any numbers and would compare them as number. I also want to ignore any non alphanumerical characters.<br /><br />Eg.<br />Slot 1 Example<br />Slot 10 Example<br />Slot 2 Example<br /><br />Should infact be<br />Slot 1 Example<br />Slot 2 Example<br />Slot 10 Example<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">sort_with_numbers</span><span class="keyword">(</span><span class="default">$a </span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">);<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">), </span><span class="default">count</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">));<br />    for(</span><span class="default">$index </span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$index </span><span class="keyword">&lt; </span><span class="default">$size</span><span class="keyword">; ++</span><span class="default">$index</span><span class="keyword">) {<br />        </span><span class="default">$a1 </span><span class="keyword">= </span><span class="default">ereg_replace</span><span class="keyword">(</span><span class="string">"[^A-Za-z0-9]"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]);<br />        </span><span class="default">$b1 </span><span class="keyword">= </span><span class="default">ereg_replace</span><span class="keyword">(</span><span class="string">"[^A-Za-z0-9]"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]);<br />        </span><span class="default">$equal </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        if (</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">) &amp;&amp; </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$b1</span><span class="keyword">)) {<br />            </span><span class="default">$equal </span><span class="keyword">= </span><span class="default">$a1 </span><span class="keyword">- </span><span class="default">$b1</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$equal </span><span class="keyword">= </span><span class="default">strcasecmp</span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">,</span><span class="default">$b1</span><span class="keyword">);<br />        }<br />        if (</span><span class="default">$equal </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {<br />            return -</span><span class="default">1</span><span class="keyword">;<br />        }<br />        if (</span><span class="default">$equal </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />            return </span><span class="default">1</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">count</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) - </span><span class="default">count</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);    <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129697">  <div class="votes">
    <div id="Vu129697">
    <a href="/manual/vote-note.php?id=129697&amp;page=function.usort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129697">
    <a href="/manual/vote-note.php?id=129697&amp;page=function.usort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129697" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129697" class="name">
  <strong class="user"><em>rh at 20i dot com</em></strong></a><a class="genanchor" href="#129697"> &para;</a><div class="date" title="2024-08-09 01:25"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129697">
<div class="phpcode"><code><span class="html">A sort function to sort elements by a reference order.<br /><br />function sort_by_reference(array $array_to_sort, array $reference_array): array {<br />    usort($array_to_sort, function($a, $b) use ($reference_array) {<br />        $pos_a = array_search($a, $reference_array);<br />        $pos_b = array_search($b, $reference_array);<br />        return $pos_a - $pos_b;<br />    });<br /><br />    return $array_to_sort;<br />}<br /><br />// Example usage<br />$reference_array = ["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten"];<br />$array_to_sort = ["three", "one", "seven", "four", "ten"];<br /><br />$sorted_array = sort_by_reference($array_to_sort, $reference_array);<br /><br />// Print the result to verify the sorting<br />print_r($sorted_array);<br /><br />```<br />Array<br />(<br />    [0] =&gt; one<br />    [1] =&gt; three<br />    [2] =&gt; four<br />    [3] =&gt; seven<br />    [4] =&gt; ten<br />)<br />```</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.usort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.usort.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.uksort.php" title="uksort">uksort</a>
                        </li>
                                                <li class="current">
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
