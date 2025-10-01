<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_map - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-map.php">
 <link rel="shorturl" href="https://www.php.net/array-map">
 <link rel="alternate" href="https://www.php.net/array-map" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-keys.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-merge.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-map.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-map.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-map.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-map.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-map.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-map.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-map.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-map.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-map.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-map.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-map.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Applies the callback to the elements of the given arrays" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_map - Manual" />
<meta name="twitter:description" content="Applies the callback to the elements of the given arrays" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_map - Manual" />
<meta itemprop="description" content="Applies the callback to the elements of the given arrays" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Applies the callback to the elements of the given arrays" />

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
        <a href="function.array-merge.php">
          array_merge &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-keys.php">
          &laquo; array_keys        </a>
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
            <option value='en/function.array-map.php' selected="selected">English</option>
            <option value='de/function.array-map.php'>German</option>
            <option value='es/function.array-map.php'>Spanish</option>
            <option value='fr/function.array-map.php'>French</option>
            <option value='it/function.array-map.php'>Italian</option>
            <option value='ja/function.array-map.php'>Japanese</option>
            <option value='pt_BR/function.array-map.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-map.php'>Russian</option>
            <option value='tr/function.array-map.php'>Turkish</option>
            <option value='uk/function.array-map.php'>Ukrainian</option>
            <option value='zh/function.array-map.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-map" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_map</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.6, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_map</span> &mdash; <span class="dc-title">Applies the callback to the elements of the given arrays</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.array-map-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_map</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span></span> <code class="parameter">$callback</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">...$arrays</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>array_map()</strong></span> returns an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> containing
   the results of applying the <code class="parameter">callback</code>
   to the corresponding value of <code class="parameter">array</code>
   (and <code class="parameter">arrays</code> if more arrays are provided)
   used as arguments for the callback.
   The number of parameters that the <code class="parameter">callback</code>
   function accepts should match the number of arrays
   passed to <span class="function"><strong>array_map()</strong></span>. Excess
   input arrays are ignored. An <span class="classname"><a href="class.argumentcounterror.php" class="classname">ArgumentCountError</a></span>
   is thrown if an insufficient number of arguments is provided.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.array-map-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">callback</code></dt>
     <dd>
      <p class="para">
       A <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> to run for each element in each array.
      </p>
      <p class="para">
       <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> can be passed as a value to <code class="parameter">callback</code>
       to perform a zip operation on multiple arrays and return an array
       whose elements are each an array holding the elements of the input arrays of the same index (see example below).
       If only <code class="parameter">array</code> is provided,
       <span class="methodname"><strong>array_map()</strong></span> will return the input array.
      </p>
     </dd>
    
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       An array to run through the <code class="parameter">callback</code> function.
      </p>
     </dd>
    
    
     <dt><code class="parameter">arrays</code></dt>
     <dd>
      <p class="para">
       Supplementary variable list of array arguments to run through the
       <code class="parameter">callback</code> function.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-map-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array containing the results of applying the <code class="parameter">callback</code>
   function to the corresponding value of <code class="parameter">array</code>
   (and <code class="parameter">arrays</code> if more arrays are provided)
   used as arguments for the callback.
  </p>
  <p class="para">
   The returned array will preserve the keys of the array argument if and only
   if exactly one array is passed. If more than one array is passed, the
   returned array will have sequential integer keys.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-map-changelog">
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
  If <code class="parameter">callback</code> expects a parameter to be passed
  by reference, this function will now emit an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.array-map-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5245">
    <p><strong>Example #1 <span class="function"><strong>array_map()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">cube</span><span style="color: #007700">(</span><span style="color: #0000BB">$n</span><span style="color: #007700">)<br />{<br />    return (</span><span style="color: #0000BB">$n </span><span style="color: #007700">* </span><span style="color: #0000BB">$n </span><span style="color: #007700">* </span><span style="color: #0000BB">$n</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'cube'</span><span style="color: #007700">, </span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     This makes <var class="varname">$b</var> have:
    </p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; 1
    [1] =&gt; 8
    [2] =&gt; 27
    [3] =&gt; 64
    [4] =&gt; 125
)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5246">
    <p><strong>Example #2 <span class="function"><strong>array_map()</strong></span> using a lambda function</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$func </span><span style="color: #007700">= function(</span><span style="color: #0000BB">int $value</span><span style="color: #007700">): </span><span style="color: #0000BB">int </span><span style="color: #007700">{<br />    return </span><span style="color: #0000BB">$value </span><span style="color: #007700">* </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />};<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #0000BB">$func</span><span style="color: #007700">, </span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">)));<br /><br /></span><span style="color: #FF8000">// Or as of PHP 7.4.0:<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(fn(</span><span style="color: #0000BB">$value</span><span style="color: #007700">): </span><span style="color: #0000BB">int </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value </span><span style="color: #007700">* </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">)));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; 2
    [1] =&gt; 4
    [2] =&gt; 6
    [3] =&gt; 8
    [4] =&gt; 10
)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5247">
    <p><strong>Example #3 <span class="function"><strong>array_map()</strong></span> - using more arrays</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">show_Spanish</span><span style="color: #007700">(</span><span style="color: #0000BB">int $n</span><span style="color: #007700">, </span><span style="color: #0000BB">string $m</span><span style="color: #007700">): </span><span style="color: #0000BB">string<br /></span><span style="color: #007700">{<br />    return </span><span style="color: #DD0000">"The number </span><span style="color: #007700">{</span><span style="color: #0000BB">$n</span><span style="color: #007700">}</span><span style="color: #DD0000"> is called </span><span style="color: #007700">{</span><span style="color: #0000BB">$m</span><span style="color: #007700">}</span><span style="color: #DD0000"> in Spanish"</span><span style="color: #007700">;<br />}<br /><br />function </span><span style="color: #0000BB">map_Spanish</span><span style="color: #007700">(</span><span style="color: #0000BB">int $n</span><span style="color: #007700">, </span><span style="color: #0000BB">string $m</span><span style="color: #007700">): array<br />{<br />    return [</span><span style="color: #0000BB">$n </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$m</span><span style="color: #007700">];<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= [</span><span style="color: #DD0000">'uno'</span><span style="color: #007700">, </span><span style="color: #DD0000">'dos'</span><span style="color: #007700">, </span><span style="color: #DD0000">'tres'</span><span style="color: #007700">, </span><span style="color: #DD0000">'cuatro'</span><span style="color: #007700">, </span><span style="color: #DD0000">'cinco'</span><span style="color: #007700">];<br /><br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'show_Spanish'</span><span style="color: #007700">, </span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$d </span><span style="color: #007700">= </span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'map_Spanish'</span><span style="color: #007700">, </span><span style="color: #0000BB">$a </span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$d</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">// printout of $c
Array
(
    [0] =&gt; The number 1 is called uno in Spanish
    [1] =&gt; The number 2 is called dos in Spanish
    [2] =&gt; The number 3 is called tres in Spanish
    [3] =&gt; The number 4 is called cuatro in Spanish
    [4] =&gt; The number 5 is called cinco in Spanish
)

// printout of $d
Array
(
    [0] =&gt; Array
        (
            [1] =&gt; uno
        )

    [1] =&gt; Array
        (
            [2] =&gt; dos
        )

    [2] =&gt; Array
        (
            [3] =&gt; tres
        )

    [3] =&gt; Array
        (
            [4] =&gt; cuatro
        )

    [4] =&gt; Array
        (
            [5] =&gt; cinco
        )

)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   Usually when using two or more arrays, they should be of equal length
   because the callback function is applied in parallel to the corresponding
   elements.
   If the arrays are of unequal length, shorter ones will be extended with empty
   elements to match the length of the longest.
  </p>
  <p class="para">
   An interesting use of this function is to construct an array of arrays,
   which can be easily performed by using <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>
   as the name of the callback function
  </p>
  <p class="para">
   <div class="example" id="example-5248">
    <p><strong>Example #4 Performing a zip operation of arrays</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= [</span><span style="color: #DD0000">'one'</span><span style="color: #007700">, </span><span style="color: #DD0000">'two'</span><span style="color: #007700">, </span><span style="color: #DD0000">'three'</span><span style="color: #007700">, </span><span style="color: #DD0000">'four'</span><span style="color: #007700">, </span><span style="color: #DD0000">'five'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= [</span><span style="color: #DD0000">'uno'</span><span style="color: #007700">, </span><span style="color: #DD0000">'dos'</span><span style="color: #007700">, </span><span style="color: #DD0000">'tres'</span><span style="color: #007700">, </span><span style="color: #DD0000">'cuatro'</span><span style="color: #007700">, </span><span style="color: #DD0000">'cinco'</span><span style="color: #007700">];<br /><br /></span><span style="color: #0000BB">$d </span><span style="color: #007700">= </span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$d</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; Array
        (
            [0] =&gt; 1
            [1] =&gt; one
            [2] =&gt; uno
        )

    [1] =&gt; Array
        (
            [0] =&gt; 2
            [1] =&gt; two
            [2] =&gt; dos
        )

    [2] =&gt; Array
        (
            [0] =&gt; 3
            [1] =&gt; three
            [2] =&gt; tres
        )

    [3] =&gt; Array
        (
            [0] =&gt; 4
            [1] =&gt; four
            [2] =&gt; cuatro
        )

    [4] =&gt; Array
        (
            [0] =&gt; 5
            [1] =&gt; five
            [2] =&gt; cinco
        )

)</pre>
</div>
    </div>
   </div>
  </p>
  
  <p class="para">
   <div class="example" id="example-5249">
    <p><strong>Example #5 
     <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> <code class="parameter">callback</code> with only
     <code class="parameter">array</code>
    </strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array </span><span style="color: #007700">= [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #0000BB">$array</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(3) {
  [0]=&gt;
  int(1)
  [1]=&gt;
  int(2)
  [2]=&gt;
  int(3)
}</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5250">
    <p><strong>Example #6 <span class="function"><strong>array_map()</strong></span> - with string keys</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$arr </span><span style="color: #007700">= [</span><span style="color: #DD0000">'stringkey' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'value'</span><span style="color: #007700">];<br />function </span><span style="color: #0000BB">cb1</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">) {<br />    return [</span><span style="color: #0000BB">$a</span><span style="color: #007700">];<br />}<br />function </span><span style="color: #0000BB">cb2</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {<br />    return [</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">];<br />}<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'cb1'</span><span style="color: #007700">, </span><span style="color: #0000BB">$arr</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'cb2'</span><span style="color: #007700">, </span><span style="color: #0000BB">$arr</span><span style="color: #007700">, </span><span style="color: #0000BB">$arr</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">,  </span><span style="color: #0000BB">$arr</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #0000BB">$arr</span><span style="color: #007700">, </span><span style="color: #0000BB">$arr</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(1) {
  [&quot;stringkey&quot;]=&gt;
  array(1) {
    [0]=&gt;
    string(5) &quot;value&quot;
  }
}
array(1) {
  [0]=&gt;
  array(2) {
    [0]=&gt;
    string(5) &quot;value&quot;
    [1]=&gt;
    string(5) &quot;value&quot;
  }
}
array(1) {
  [&quot;stringkey&quot;]=&gt;
  string(5) &quot;value&quot;
}
array(1) {
  [0]=&gt;
  array(2) {
    [0]=&gt;
    string(5) &quot;value&quot;
    [1]=&gt;
    string(5) &quot;value&quot;
  }
}</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-5251">
    <p><strong>Example #7 <span class="function"><strong>array_map()</strong></span> - associative arrays</strong></p>
    <div class="example-contents"><p>
     While <span class="function"><strong>array_map()</strong></span> does not directly support
     using the array key as an input, that may be simulated using <span class="function"><a href="function.array-keys.php" class="function">array_keys()</a></span>.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$arr </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">'v1' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'First release'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'v2' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Second release'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'v3' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Third release'</span><span style="color: #007700">,<br />];<br /><br /></span><span style="color: #FF8000">// Note: Before 7.4.0, use the longer syntax for anonymous functions instead.<br /></span><span style="color: #0000BB">$callback </span><span style="color: #007700">= fn(</span><span style="color: #0000BB">string $k</span><span style="color: #007700">, </span><span style="color: #0000BB">string $v</span><span style="color: #007700">): </span><span style="color: #0000BB">string </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$k</span><span style="color: #DD0000"> was the </span><span style="color: #0000BB">$v</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #0000BB">$callback</span><span style="color: #007700">, </span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$arr</span><span style="color: #007700">), </span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">$arr</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(3) {
  [0]=&gt;
  string(24) &quot;v1 was the First release&quot;
  [1]=&gt;
  string(25) &quot;v2 was the Second release&quot;
  [2]=&gt;
  string(24) &quot;v3 was the Third release&quot;
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.array-map-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-filter.php" class="function" rel="rdfs-seeAlso">array_filter()</a> - Filters elements of an array using a callback function</span></li>
    <li><span class="function"><a href="function.array-reduce.php" class="function" rel="rdfs-seeAlso">array_reduce()</a> - Iteratively reduce the array to a single value using a callback function</span></li>
    <li><span class="function"><a href="function.array-walk.php" class="function" rel="rdfs-seeAlso">array_walk()</a> - Apply a user supplied function to every member of an array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-map.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-map%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-map&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-map.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113795">  <div class="votes">
    <div id="Vu113795">
    <a href="/manual/vote-note.php?id=113795&amp;page=function.array-map&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113795">
    <a href="/manual/vote-note.php?id=113795&amp;page=function.array-map&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113795" title="70% like this...">
    33
    </div>
  </div>
  <a href="#113795" class="name">
  <strong class="user"><em>lukasz dot mordawski at gmail dot com</em></strong></a><a class="genanchor" href="#113795"> &para;</a><div class="date" title="2013-12-03 10:55"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113795">
<div class="phpcode"><code><span class="html">Let's assume we have following situation:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyFilterClass </span><span class="keyword">{<br />    public function </span><span class="default">filter</span><span class="keyword">(array </span><span class="default">$arr</span><span class="keyword">) {<br />        return </span><span class="default">array_map</span><span class="keyword">(function(</span><span class="default">$value</span><span class="keyword">) {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">privateFilterMethod</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />        });<br />    }<br /><br />    private function </span><span class="default">privateFilterMethod</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) {<br />        if (</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) </span><span class="default">$value</span><span class="keyword">++;<br />        else </span><span class="default">$value </span><span class="keyword">.= </span><span class="string">'.'</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />This will work, because $this inside anonymous function (unlike for example javascript) is the instance of MyFilterClass inside which we called it.<br />I hope this would be useful for anyone.</span></code></div>
  </div>
 </div>
  <div class="note" id="86743">  <div class="votes">
    <div id="Vu86743">
    <a href="/manual/vote-note.php?id=86743&amp;page=function.array-map&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86743">
    <a href="/manual/vote-note.php?id=86743&amp;page=function.array-map&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86743" title="79% like this...">
    25
    </div>
  </div>
  <a href="#86743" class="name">
  <strong class="user"><em>radist-hack at yandex dot ru</em></strong></a><a class="genanchor" href="#86743"> &para;</a><div class="date" title="2008-11-01 01:37"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86743">
<div class="phpcode"><code><span class="html">To transpose rectangular two-dimension array, use the following code:<br /><br />array_unshift($array, null);<br />$array = call_user_func_array("array_map", $array);<br /><br />If you need to rotate rectangular two-dimension array on 90 degree, add the following line before or after (depending on the rotation direction you need) the code above:<br />$array = array_reverse($array);<br /><br />Here is example:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= array(<br />  array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">),<br />  array(</span><span class="default">4</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">));<br /></span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">);<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="string">"array_map"</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [0] =&gt; 1<br />            [1] =&gt; 4<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [0] =&gt; 2<br />            [1] =&gt; 5<br />        )<br /><br />    [2] =&gt; Array<br />        (<br />            [0] =&gt; 3<br />            [1] =&gt; 6<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="128742">  <div class="votes">
    <div id="Vu128742">
    <a href="/manual/vote-note.php?id=128742&amp;page=function.array-map&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128742">
    <a href="/manual/vote-note.php?id=128742&amp;page=function.array-map&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128742" title="83% like this...">
    8
    </div>
  </div>
  <a href="#128742" class="name">
  <strong class="user"><em>s dot kientzler at online dot de</em></strong></a><a class="genanchor" href="#128742"> &para;</a><div class="date" title="2023-07-18 11:57"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128742">
<div class="phpcode"><code><span class="html">If the callback function to be called is a static method from a different namespace, the fully qualified method including namespace must be specified (a use statement is not sufficient to resolve the namespace of the callback function)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">MyTools</span><span class="keyword">;<br /><br /></span><span class="default">$arr </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">];<br /><br /></span><span class="default">$arr </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'Tools::myHelper'</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />will cause TypeError: <br />array_map() expects parameter 1 to be a valid callback, class 'Tools' not found.<br /><br />Use the fully qualified name for the callback instead:<br /><br /><span class="default">&lt;?php<br />$arr </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">];<br /><br /></span><span class="default">$arr </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'\MyTools\Tools::myHelper'</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113051">  <div class="votes">
    <div id="Vu113051">
    <a href="/manual/vote-note.php?id=113051&amp;page=function.array-map&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113051">
    <a href="/manual/vote-note.php?id=113051&amp;page=function.array-map&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113051" title="70% like this...">
    11
    </div>
  </div>
  <a href="#113051" class="name">
  <strong class="user"><em>CertaiN</em></strong></a><a class="genanchor" href="#113051"> &para;</a><div class="date" title="2013-08-22 08:52"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113051">
<div class="phpcode"><code><span class="html">The most memory-efficient array_map_recursive().<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_map_recursive</span><span class="keyword">(callable </span><span class="default">$func</span><span class="keyword">, array </span><span class="default">$arr</span><span class="keyword">) {<br />    </span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, function(&amp;</span><span class="default">$v</span><span class="keyword">) use (</span><span class="default">$func</span><span class="keyword">) {<br />        </span><span class="default">$v </span><span class="keyword">= </span><span class="default">$func</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);<br />    });<br />    return </span><span class="default">$arr</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118172">  <div class="votes">
    <div id="Vu118172">
    <a href="/manual/vote-note.php?id=118172&amp;page=function.array-map&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118172">
    <a href="/manual/vote-note.php?id=118172&amp;page=function.array-map&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118172" title="63% like this...">
    16
    </div>
  </div>
  <a href="#118172" class="name">
  <strong class="user"><em>Mahn</em></strong></a><a class="genanchor" href="#118172"> &para;</a><div class="date" title="2015-10-20 05:10"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118172">
<div class="phpcode"><code><span class="html">You may be looking for a method to extract values of a multidimensional array on a conditional basis (i.e. a mixture between array_map and array_filter) other than a for/foreach loop. If so, you can take advantage of the fact that 1) the callback method on array_map returns null if no explicit return value is specified (as with everything else) and 2) array_filter with no arguments removes falsy values. <br /><br />So for example, provided you have:<br /><br /><span class="default">&lt;?php<br />$data </span><span class="keyword">= [<br />    [<br />        </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">"John"</span><span class="keyword">,<br />        </span><span class="string">"smoker" </span><span class="keyword">=&gt; </span><span class="default">false<br />    </span><span class="keyword">],<br />    [<br />        </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">"Mary"</span><span class="keyword">,<br />        </span><span class="string">"smoker" </span><span class="keyword">=&gt; </span><span class="default">true<br />    </span><span class="keyword">],<br />    [<br />        </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">"Peter"</span><span class="keyword">,<br />        </span><span class="string">"smoker" </span><span class="keyword">=&gt; </span><span class="default">false<br />    </span><span class="keyword">],<br />    [<br />        </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">"Tony"</span><span class="keyword">,<br />        </span><span class="string">"smoker" </span><span class="keyword">=&gt; </span><span class="default">true<br />    </span><span class="keyword">]<br />];<br /></span><span class="default">?&gt;<br /></span><br />You can extract the names of all the non-smokers with the following one-liner:<br /><br /><span class="default">&lt;?php<br />$names </span><span class="keyword">= </span><span class="default">array_filter</span><span class="keyword">(</span><span class="default">array_map</span><span class="keyword">(function(</span><span class="default">$n</span><span class="keyword">) { if(!</span><span class="default">$n</span><span class="keyword">[</span><span class="string">'smoker'</span><span class="keyword">]) return </span><span class="default">$n</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">]; }, </span><span class="default">$data</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />It's not necessarily better than a for/foreach loop, but the occasional one-liner for trivial tasks can help keep your code cleaner.</span></code></div>
  </div>
 </div>
  <div class="note" id="84632">  <div class="votes">
    <div id="Vu84632">
    <a href="/manual/vote-note.php?id=84632&amp;page=function.array-map&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84632">
    <a href="/manual/vote-note.php?id=84632&amp;page=function.array-map&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84632" title="66% like this...">
    10
    </div>
  </div>
  <a href="#84632" class="name">
  <strong class="user"><em>stijnleenknegt at gmail dot com</em></strong></a><a class="genanchor" href="#84632"> &para;</a><div class="date" title="2008-07-22 04:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84632">
<div class="phpcode"><code><span class="html">If you want to pass an argument like ENT_QUOTES to htmlentities, you can do the follow.<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">( </span><span class="string">'htmlentities' </span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">, </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0 </span><span class="keyword">, </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) , </span><span class="default">ENT_QUOTES</span><span class="keyword">) );<br /></span><span class="default">?&gt;<br /></span><br />The third argument creates an equal sized array of $array filled with the parameter you want to give with your callback function.</span></code></div>
  </div>
 </div>
  <div class="note" id="126954">  <div class="votes">
    <div id="Vu126954">
    <a href="/manual/vote-note.php?id=126954&amp;page=function.array-map&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126954">
    <a href="/manual/vote-note.php?id=126954&amp;page=function.array-map&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126954" title="70% like this...">
    4
    </div>
  </div>
  <a href="#126954" class="name">
  <strong class="user"><em>Walf</em></strong></a><a class="genanchor" href="#126954"> &para;</a><div class="date" title="2022-03-24 11:48"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126954">
<div class="phpcode"><code><span class="html">A general solution for the problem of wanting to know the keys in the callback, and/or retain the key association in the returned array:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Like array_map() but callback also gets passed the current key as the<br /> * first argument like so:<br /> * function($key, $val, ...$vals) { ... }<br /> * ...and returned array always maintains key association, even if multiple<br /> * array arguments are passed.<br /> */<br /><br /></span><span class="keyword">function </span><span class="default">array_map_assoc</span><span class="keyword">(callable </span><span class="default">$callback</span><span class="keyword">, array </span><span class="default">$array</span><span class="keyword">, array ...</span><span class="default">$arrays</span><span class="keyword">) {<br />    </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    </span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$arrays</span><span class="keyword">, </span><span class="default">$keys</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">);<br />    return </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">array_map</span><span class="keyword">(</span><span class="default">$callback</span><span class="keyword">, ...</span><span class="default">$arrays</span><span class="keyword">));<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Because it uses array_map() directly, it behaves the same way in regard to ignoring the keys of subsequent array arguments. It also has the same variadic signature.</span></code></div>
  </div>
 </div>
  <div class="note" id="126689">  <div class="votes">
    <div id="Vu126689">
    <a href="/manual/vote-note.php?id=126689&amp;page=function.array-map&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126689">
    <a href="/manual/vote-note.php?id=126689&amp;page=function.array-map&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126689" title="60% like this...">
    2
    </div>
  </div>
  <a href="#126689" class="name">
  <strong class="user"><em>anonymous_user</em></strong></a><a class="genanchor" href="#126689"> &para;</a><div class="date" title="2021-12-16 08:15"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126689">
<div class="phpcode"><code><span class="html">/** <br />  * Function which recursively applies a callback to all values and also its<br />  * keys, and returns the resulting array copy with the updated keys and <br />  * values.<br />  * PHP's built-in function array_walk_recursive() only applies the passed <br />  * callback to the array values, not the keys, so this function simply applies<br />  * the callback to the keys too (hence the need of working with a copy, <br />  * as also updating the keys would lead to reference loss of the original<br />  * array). I needed something like this, hence my idea of sharing it here.<br />  *<br />  * @param    callable    $func     callback which takes one parameter (value <br />  *                                                   or key to be updated) and returns its <br />  *                                                   updated value<br />  *<br />  * @param    array          $arr      array of which keys and values shall be <br />  *                                                   get updated <br />  */<br /><br />function array_map_recursive(<br />    callable $func,<br />    array $arr<br />) {<br /><br />      // Initiate copied array which will hold all updated keys + values<br />      $result = [];<br /><br />      // Iterate through the key-value pairs of the array<br />      foreach ( $arr as $key =&gt; $value ) {<br /><br />        // Apply the callback to the key to create the updated key value<br />        $updated_key = $func( $key );<br /><br />        // If the iterated value is not an array, that means we have reached the<br />        // deepest array level for the iterated key, so in that case, assign<br />        // the updated value to the updated key value in the final output array<br />        if ( ! is_array( $value ) ) {<br /><br />          $result[$updated_key] = $func( $value );<br /><br />        } else {<br /><br />          // If the iterated value is an array, call the function recursively,<br />          // By taking the currently iterated value as the $arr argument<br />          $result[$updated_key] = array_map_recursive(<br />            $func,<br />            $arr[$key]<br />          );<br /><br />        }<br /><br />      } // end of iteration through k-v pairs<br /><br />      // And at the very end, return the generated result set<br />      return $result;<br /><br />    } // end of array_map_recursive() function definition</span></code></div>
  </div>
 </div>
  <div class="note" id="130423">  <div class="votes">
    <div id="Vu130423">
    <a href="/manual/vote-note.php?id=130423&amp;page=function.array-map&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130423">
    <a href="/manual/vote-note.php?id=130423&amp;page=function.array-map&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130423" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#130423" class="name">
  <strong class="user"><em>filipefigueiraf at gmail dot com</em></strong></a><a class="genanchor" href="#130423"> &para;</a><div class="date" title="2025-07-21 09:28"><strong>2 months ago</strong></div>
  <div class="text" id="Hcom130423">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /><br /></span><span class="keyword">function </span><span class="default">highAndLow</span><span class="keyword">(</span><span class="default">string $numbers</span><span class="keyword">): </span><span class="default">string </span><span class="keyword">{<br /><br />    </span><span class="comment">// Split the input string into an array using spaces as delimiter<br />    // Then filter out any non-numeric values<br />    </span><span class="default">$numbers </span><span class="keyword">= </span><span class="default">array_filter</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$numbers</span><span class="keyword">), </span><span class="string">'is_numeric'</span><span class="keyword">);<br /><br />    </span><span class="comment">// Convert the remaining numeric strings to integers<br />    </span><span class="default">$ints </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'intval'</span><span class="keyword">, </span><span class="default">$numbers</span><span class="keyword">);<br /><br />    </span><span class="comment">// Return the highest and lowest numbers, separated by a space<br />    </span><span class="keyword">return </span><span class="default">max</span><span class="keyword">(</span><span class="default">$ints</span><span class="keyword">) . </span><span class="string">" " </span><span class="keyword">. </span><span class="default">min</span><span class="keyword">(</span><span class="default">$ints</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// Example usage: will output "388 2"<br /></span><span class="keyword">echo(</span><span class="default">highAndLow</span><span class="keyword">(</span><span class="string">' 2 388  asdfgh 4'</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-map&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-map.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
