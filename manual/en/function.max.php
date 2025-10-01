<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: max - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.max.php">
 <link rel="shorturl" href="https://www.php.net/max">
 <link rel="alternate" href="https://www.php.net/max" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.math.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.log1p.php">
 <link rel="next" href="https://www.php.net/manual/en/function.min.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.max.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.max.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.max.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.max.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.max.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.max.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.max.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.max.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.max.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.max.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.max.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Find highest value" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: max - Manual" />
<meta name="twitter:description" content="Find highest value" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: max - Manual" />
<meta itemprop="description" content="Find highest value" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Find highest value" />

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
        <a href="function.min.php">
          min &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.log1p.php">
          &laquo; log1p        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.math.php'>Math</a></li>      <li><a href='ref.math.php'>Math Functions</a></li>      </ul>
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
            <option value='en/function.max.php' selected="selected">English</option>
            <option value='de/function.max.php'>German</option>
            <option value='es/function.max.php'>Spanish</option>
            <option value='fr/function.max.php'>French</option>
            <option value='it/function.max.php'>Italian</option>
            <option value='ja/function.max.php'>Japanese</option>
            <option value='pt_BR/function.max.php'>Brazilian Portuguese</option>
            <option value='ru/function.max.php'>Russian</option>
            <option value='tr/function.max.php'>Turkish</option>
            <option value='uk/function.max.php'>Ukrainian</option>
            <option value='zh/function.max.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.max" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">max</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">max</span> &mdash; <span class="dc-title">Find highest value</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.max-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>max</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$values</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="simpara">Alternative signature (not supported with named arguments):</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>max</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$value_array</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   If the first and only parameter is an array, <span class="function"><strong>max()</strong></span>
   returns the highest value in that array. If at least two parameters are 
   provided, <span class="function"><strong>max()</strong></span> returns the biggest of these values.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Values of different types will be compared using the <a href="language.operators.comparison.php" class="link">
    standard comparison rules</a>. For instance, a non-numeric <span class="type"><a href="language.types.string.php" class="type string">string</a></span> will be
    compared to an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> as though it were <code class="literal">0</code>, but multiple non-numeric
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> values will be compared alphanumerically. The actual value returned will be of the
    original type with no conversion applied.
   </p>
  </p></blockquote>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="simpara">
    Be careful when passing arguments of different types because
    <span class="function"><strong>max()</strong></span> can produce unpredictable results.
   </p>
  </div>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.max-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       Any <a href="language.operators.comparison.php" class="link">comparable</a>
       value.
      </p>
     </dd>
    
    
     <dt><code class="parameter">values</code></dt>
     <dd>
      <p class="para">
       Any <a href="language.operators.comparison.php" class="link">comparable</a>
       values.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value_array</code></dt>
     <dd>
      <p class="para">
       An array containing the values.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.max-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>max()</strong></span> returns the parameter value considered &quot;highest&quot; according to standard
   comparisons. If multiple values of different types evaluate as equal (e.g. <code class="literal">0</code>
   and <code class="literal">&#039;abc&#039;</code>) the first provided to the function will be returned.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.max-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If an empty array is passed, <span class="function"><strong>max()</strong></span> throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.max-changelog">
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
       <span class="function"><strong>max()</strong></span> throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> on failure now;
       previously, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> was returned and an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> error was emitted.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       As <a href="migration80.incompatible.php#migration80.incompatible.core.string-number-comparision" class="link">
       string to number comparisons</a> were changed,
       <span class="function"><strong>max()</strong></span> no longer returns a
       different value based on the argument order in those cases.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.max-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3382">
    <p><strong>Example #1 Example uses of <span class="function"><strong>max()</strong></span></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">max</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">6</span><span style="color: #007700">, </span><span style="color: #0000BB">7</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;  </span><span style="color: #FF8000">// 7<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">max</span><span style="color: #007700">(array(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">)), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 5<br /><br />// Here we are comparing -1 &lt; 0, so 'hello' is the highest value<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">max</span><span style="color: #007700">(</span><span style="color: #DD0000">'hello'</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;    </span><span style="color: #FF8000">// hello<br /><br />// With multiple arrays of different lengths, max returns the longest<br /></span><span style="color: #0000BB">$val </span><span style="color: #007700">= </span><span style="color: #0000BB">max</span><span style="color: #007700">(array(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">), array(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// array(1, 1, 1, 1)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Multiple arrays of the same length are compared from left to right<br />// so in our example: 2 == 2, but 5 &gt; 4<br /></span><span style="color: #0000BB">$val </span><span style="color: #007700">= </span><span style="color: #0000BB">max</span><span style="color: #007700">(array(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">8</span><span style="color: #007700">), array(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// array(2, 5, 1)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// If both an array and non-array are given, the array will be returned<br />// as comparisons treat arrays as greater than any other value<br /></span><span style="color: #0000BB">$val </span><span style="color: #007700">= </span><span style="color: #0000BB">max</span><span style="color: #007700">(</span><span style="color: #DD0000">'string'</span><span style="color: #007700">, array(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">7</span><span style="color: #007700">), </span><span style="color: #0000BB">42</span><span style="color: #007700">);   </span><span style="color: #FF8000">// array(2, 5, 7)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// If one argument is NULL or a boolean, it will be compared against<br />// other values using the rule FALSE &lt; TRUE regardless of the other types involved<br />// In the below example, -10 is treated as TRUE in the comparison<br /></span><span style="color: #0000BB">$val </span><span style="color: #007700">= </span><span style="color: #0000BB">max</span><span style="color: #007700">(-</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">); </span><span style="color: #FF8000">// -10<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// 0, on the other hand, is treated as FALSE, so is "lower than" TRUE<br /></span><span style="color: #0000BB">$val </span><span style="color: #007700">= </span><span style="color: #0000BB">max</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">); </span><span style="color: #FF8000">// TRUE<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    </div> 
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.max-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.min.php" class="function" rel="rdfs-seeAlso">min()</a> - Find lowest value</span></li>
    <li><span class="function"><a href="function.count.php" class="function" rel="rdfs-seeAlso">count()</a> - Counts all elements in an array or in a Countable object</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/math/functions/max.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.max%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.max&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.max.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119581">  <div class="votes">
    <div id="Vu119581">
    <a href="/manual/vote-note.php?id=119581&amp;page=function.max&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119581">
    <a href="/manual/vote-note.php?id=119581&amp;page=function.max&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119581" title="70% like this...">
    67
    </div>
  </div>
  <a href="#119581" class="name">
  <strong class="user"><em>keith at bifugi dot com</em></strong></a><a class="genanchor" href="#119581"> &para;</a><div class="date" title="2016-07-11 04:36"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119581">
<div class="phpcode"><code><span class="html">The simplest way to get around the fact that max() won't give the key is array_search:<br /><br /><span class="default">&lt;?php<br />$student_grades </span><span class="keyword">= array (</span><span class="string">"john" </span><span class="keyword">=&gt; </span><span class="default">100</span><span class="keyword">, </span><span class="string">"sarah" </span><span class="keyword">=&gt; </span><span class="default">90</span><span class="keyword">, </span><span class="string">"anne" </span><span class="keyword">=&gt; </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">$top_student </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">max</span><span class="keyword">(</span><span class="default">$student_grades</span><span class="keyword">),</span><span class="default">$student_grades</span><span class="keyword">); </span><span class="comment">// john<br /></span><span class="default">?&gt;<br /></span><br />This could also be done with array_flip, though overwriting will mean that it gets the last max value rather than the first:<br /><br /><span class="default">&lt;?php<br />$grades_index </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$student_grades</span><span class="keyword">);<br /></span><span class="default">$top_student </span><span class="keyword">= </span><span class="default">$grades_index</span><span class="keyword">[</span><span class="default">max</span><span class="keyword">(</span><span class="default">$student_grades</span><span class="keyword">)]; </span><span class="comment">// anne<br /></span><span class="default">?&gt;<br /></span><br />To get all the max value keys:<br /><br /><span class="default">&lt;?php<br />$top_students </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$student_grades</span><span class="keyword">,</span><span class="default">max</span><span class="keyword">(</span><span class="default">$student_grades</span><span class="keyword">)); </span><span class="comment">// john, anne<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128947">  <div class="votes">
    <div id="Vu128947">
    <a href="/manual/vote-note.php?id=128947&amp;page=function.max&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128947">
    <a href="/manual/vote-note.php?id=128947&amp;page=function.max&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128947" title="83% like this...">
    4
    </div>
  </div>
  <a href="#128947" class="name">
  <strong class="user"><em>Samu</em></strong></a><a class="genanchor" href="#128947"> &para;</a><div class="date" title="2023-10-12 07:28"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128947">
<div class="phpcode"><code><span class="html">With modern PHP versions supporting the array spread operator for function arguments, it's tempting to call max() like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">stuff</span><span class="keyword">(): </span><span class="default">iterable </span><span class="keyword">{<br />    </span><span class="comment">// This function might yield 0, 1 or n values.<br /></span><span class="keyword">}<br /><br /></span><span class="default">$foo </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(...</span><span class="default">stuff</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />However, this is dangerous if you cannot guarantee that your generator yields **minimum** two values.<br /><br />The gotcha here is that when max() receives a single argument, it must be an array of values. (When the generator doesn't yield any values, max() will throw an ArgumentCountError.)<br /><br />If you can guarantee that your generator yields at least one value, then it's safe to call max by relying on the aforementioned array expectation:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">stuff</span><span class="keyword">(): </span><span class="default">iterable </span><span class="keyword">{<br />    </span><span class="comment">// This function will yield 1...n values.<br /></span><span class="keyword">}<br /><br /></span><span class="comment">// Note that here the generator is first read into an array.<br /></span><span class="default">$foo </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">([...</span><span class="default">stuff</span><span class="keyword">()]);<br /></span><span class="default">?&gt;<br /></span><br />If the array is empty, max() will throw a ValueError.<br /><br />The added burden is that faulty code could appear to appear to function just fine but fails at random, probably causing a lot of head-scratching at first.</span></code></div>
  </div>
 </div>
  <div class="note" id="127191">  <div class="votes">
    <div id="Vu127191">
    <a href="/manual/vote-note.php?id=127191&amp;page=function.max&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127191">
    <a href="/manual/vote-note.php?id=127191&amp;page=function.max&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127191" title="73% like this...">
    14
    </div>
  </div>
  <a href="#127191" class="name">
  <strong class="user"><em>deoomen</em></strong></a><a class="genanchor" href="#127191"> &para;</a><div class="date" title="2022-06-22 10:57"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127191">
<div class="phpcode"><code><span class="html">Watch out after PHP 8.0!<br /><br />Sample code:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">max</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="string">'hello'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Before PHP 8.0 will return int(0) but since PHP 8.0 above code returns string("hello")!!</span></code></div>
  </div>
 </div>
  <div class="note" id="114968">  <div class="votes">
    <div id="Vu114968">
    <a href="/manual/vote-note.php?id=114968&amp;page=function.max&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114968">
    <a href="/manual/vote-note.php?id=114968&amp;page=function.max&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114968" title="66% like this...">
    20
    </div>
  </div>
  <a href="#114968" class="name">
  <strong class="user"><em>volch5 at gmail dot com</em></strong></a><a class="genanchor" href="#114968"> &para;</a><div class="date" title="2014-05-07 04:07"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114968">
<div class="phpcode"><code><span class="html">max() (and min()) on DateTime objects compares them like dates (with timezone info) and returns DateTime object.<br /><span class="default">&lt;?php <br />$dt1 </span><span class="keyword">= new </span><span class="default">DateTime</span><span class="keyword">(</span><span class="string">'2014-05-07 18:53'</span><span class="keyword">, new </span><span class="default">DateTimeZone</span><span class="keyword">(</span><span class="string">'Europe/Kiev'</span><span class="keyword">));<br /></span><span class="default">$dt2 </span><span class="keyword">= new </span><span class="default">DateTime</span><span class="keyword">(</span><span class="string">'2014-05-07 16:53'</span><span class="keyword">, new </span><span class="default">DateTimeZone</span><span class="keyword">(</span><span class="string">'UTC'</span><span class="keyword">));<br />echo </span><span class="default">max</span><span class="keyword">(</span><span class="default">$dt1</span><span class="keyword">,</span><span class="default">$dt2</span><span class="keyword">)-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">DateTime</span><span class="keyword">::</span><span class="default">RFC3339</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">; </span><span class="comment">// 2014-05-07T16:53:00+00:00<br /></span><span class="keyword">echo </span><span class="default">min</span><span class="keyword">(</span><span class="default">$dt1</span><span class="keyword">,</span><span class="default">$dt2</span><span class="keyword">)-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">DateTime</span><span class="keyword">::</span><span class="default">RFC3339</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">; </span><span class="comment">// 2014-05-07T18:53:00+03:00<br /></span><span class="default">?&gt;<br /></span><br />It works at least 5.3.3-7+squeeze17</span></code></div>
  </div>
 </div>
  <div class="note" id="97260">  <div class="votes">
    <div id="Vu97260">
    <a href="/manual/vote-note.php?id=97260&amp;page=function.max&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97260">
    <a href="/manual/vote-note.php?id=97260&amp;page=function.max&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97260" title="58% like this...">
    13
    </div>
  </div>
  <a href="#97260" class="name">
  <strong class="user"><em>Alex Rath</em></strong></a><a class="genanchor" href="#97260"> &para;</a><div class="date" title="2010-04-10 11:27"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97260">
<div class="phpcode"><code><span class="html">Notice that whenever there is a Number in front of the String, it will be used for Comparison.<br /><br /><span class="default">&lt;?php<br /><br />  max</span><span class="keyword">(</span><span class="string">'7iuwmssuxue'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); </span><span class="comment">//returns 7iuwmssuxu<br />  </span><span class="default">max</span><span class="keyword">(</span><span class="string">'-7suidha'</span><span class="keyword">, -</span><span class="default">4</span><span class="keyword">); </span><span class="comment">//returns -4<br /><br /></span><span class="default">?&gt;<br /></span><br />But just if it is in front of the String<br /><br /><span class="default">&lt;?php<br /><br />  max</span><span class="keyword">(</span><span class="string">'sdihatewin7wduiw'</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">); </span><span class="comment">//returns 3<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107347">  <div class="votes">
    <div id="Vu107347">
    <a href="/manual/vote-note.php?id=107347&amp;page=function.max&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107347">
    <a href="/manual/vote-note.php?id=107347&amp;page=function.max&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107347" title="55% like this...">
    16
    </div>
  </div>
  <a href="#107347" class="name">
  <strong class="user"><em>costinu</em></strong></a><a class="genanchor" href="#107347"> &para;</a><div class="date" title="2012-02-02 06:21"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107347">
<div class="phpcode"><code><span class="html">max(null, 0) = null
<br />max(0, null) = 0</span></code></div>
  </div>
 </div>
  <div class="note" id="65517">  <div class="votes">
    <div id="Vu65517">
    <a href="/manual/vote-note.php?id=65517&amp;page=function.max&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65517">
    <a href="/manual/vote-note.php?id=65517&amp;page=function.max&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65517" title="62% like this...">
    7
    </div>
  </div>
  <a href="#65517" class="name">
  <strong class="user"><em>johnphayes at gmail dot com</em></strong></a><a class="genanchor" href="#65517"> &para;</a><div class="date" title="2006-05-02 09:27"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65517">
<div class="phpcode"><code><span class="html">Regarding boolean parameters in min() and max():<br /><br />(a) If any of your parameters is boolean, max and min will cast the rest of them to boolean to do the comparison.<br />(b) true &gt; false<br />(c) However, max and min will return the actual parameter value that wins the comparison (not the cast).<br /><br />Here's some test cases to illustrate:<br /><br />1.  max(true,100)=true<br />2.  max(true,0)=true<br />3.  max(100,true)=100<br />4.  max(false,100)=100<br />5.  max(100,false)=100<br />6.  min(true,100)=true<br />7.  min(true,0)=0<br />8.  min(100,true)=100<br />9.  min(false,100)=false<br />10. min(100,false)=false<br />11. min(true,false)=false<br />12. max(true,false)=true</span></code></div>
  </div>
 </div>
  <div class="note" id="86895">  <div class="votes">
    <div id="Vu86895">
    <a href="/manual/vote-note.php?id=86895&amp;page=function.max&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86895">
    <a href="/manual/vote-note.php?id=86895&amp;page=function.max&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86895" title="60% like this...">
    7
    </div>
  </div>
  <a href="#86895" class="name">
  <strong class="user"><em>ries at vantwisk dot nl</em></strong></a><a class="genanchor" href="#86895"> &para;</a><div class="date" title="2008-11-09 06:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86895">
<div class="phpcode"><code><span class="html">I had several occasions that using max is a lot slower then using a if/then/else construct. Be sure to check this in your routines!<br /><br />Ries</span></code></div>
  </div>
 </div>
  <div class="note" id="90811">  <div class="votes">
    <div id="Vu90811">
    <a href="/manual/vote-note.php?id=90811&amp;page=function.max&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90811">
    <a href="/manual/vote-note.php?id=90811&amp;page=function.max&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90811" title="55% like this...">
    8
    </div>
  </div>
  <a href="#90811" class="name">
  <strong class="user"><em>marcini</em></strong></a><a class="genanchor" href="#90811"> &para;</a><div class="date" title="2009-05-11 07:34"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90811">
<div class="phpcode"><code><span class="html">Note that max() can compare dates, so if you write something like this:<br /><br /><span class="default">&lt;?php<br />$dates </span><span class="keyword">= array(</span><span class="string">'2009-02-15'</span><span class="keyword">, </span><span class="string">'2009-03-15'</span><span class="keyword">);<br />echo </span><span class="default">max</span><span class="keyword">(</span><span class="default">$dates</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />you will get: 2009-03-15.</span></code></div>
  </div>
 </div>
  <div class="note" id="124266">  <div class="votes">
    <div id="Vu124266">
    <a href="/manual/vote-note.php?id=124266&amp;page=function.max&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124266">
    <a href="/manual/vote-note.php?id=124266&amp;page=function.max&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124266" title="54% like this...">
    1
    </div>
  </div>
  <a href="#124266" class="name">
  <strong class="user"><em>blackmac01 at gmail dot com</em></strong></a><a class="genanchor" href="#124266"> &para;</a><div class="date" title="2019-10-07 08:01"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124266">
<div class="phpcode"><code><span class="html">In response to: keith at bifugi dot com<br /><br />If you want to find the specific key(s) that match the maximum value in an array where the values may be duplicated, you can loop through and perform a simple check:<br /><span class="default">&lt;?php<br /><br /></span><span class="comment"># Example Array<br /></span><span class="default">$a </span><span class="keyword">= array(<br />     </span><span class="string">'key1' </span><span class="keyword">=&gt; </span><span class="default">100</span><span class="keyword">,<br />     </span><span class="string">'key2' </span><span class="keyword">=&gt; </span><span class="default">90</span><span class="keyword">,<br />     </span><span class="string">'key3' </span><span class="keyword">=&gt; </span><span class="default">100</span><span class="keyword">,<br />     </span><span class="string">'key4' </span><span class="keyword">=&gt; </span><span class="default">90</span><span class="keyword">,<br />);<br /><br /></span><span class="comment"># First get the maximum value<br /></span><span class="default">$max </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /><br /></span><span class="comment"># Create a new array containing all keys which have the max value<br /></span><span class="keyword">foreach(</span><span class="default">$a </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) {     <br />     if(</span><span class="default">$val </span><span class="keyword">=== </span><span class="default">$max</span><span class="keyword">) </span><span class="default">$b</span><span class="keyword">[] = </span><span class="default">$key</span><span class="keyword">;<br />}<br /><br /></span><span class="comment"># If you want a string list, just do this<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This produces consistent results and will scale well in terms of performance, whereas functions like array_search and array_flip can lead to degraded performance when dealing with large amounts of data.</span></code></div>
  </div>
 </div>
  <div class="note" id="76199">  <div class="votes">
    <div id="Vu76199">
    <a href="/manual/vote-note.php?id=76199&amp;page=function.max&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76199">
    <a href="/manual/vote-note.php?id=76199&amp;page=function.max&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76199" title="51% like this...">
    1
    </div>
  </div>
  <a href="#76199" class="name">
  <strong class="user"><em>michaelangel0 at mail.com</em></strong></a><a class="genanchor" href="#76199"> &para;</a><div class="date" title="2007-07-04 03:00"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76199">
<div class="phpcode"><code><span class="html">Matlab users and others may feel lonely without the double argument output from min and max functions.
<br />
<br />To have the INDEX of the highest value in an array, as well as the value itself, use the following, or a derivative:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">doublemax</span><span class="keyword">(</span><span class="default">$mylist</span><span class="keyword">){
<br />  </span><span class="default">$maxvalue</span><span class="keyword">=</span><span class="default">max</span><span class="keyword">(</span><span class="default">$mylist</span><span class="keyword">);
<br />  while(list(</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$value</span><span class="keyword">)=</span><span class="default">each</span><span class="keyword">(</span><span class="default">$mylist</span><span class="keyword">)){
<br />    if(</span><span class="default">$value</span><span class="keyword">==</span><span class="default">$maxvalue</span><span class="keyword">)</span><span class="default">$maxindex</span><span class="keyword">=</span><span class="default">$key</span><span class="keyword">;
<br />  }
<br />  return array(</span><span class="string">"m"</span><span class="keyword">=&gt;</span><span class="default">$maxvalue</span><span class="keyword">,</span><span class="string">"i"</span><span class="keyword">=&gt;</span><span class="default">$maxindex</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123528">  <div class="votes">
    <div id="Vu123528">
    <a href="/manual/vote-note.php?id=123528&amp;page=function.max&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123528">
    <a href="/manual/vote-note.php?id=123528&amp;page=function.max&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123528" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#123528" class="name">
  <strong class="user"><em>info at osworx dot net</em></strong></a><a class="genanchor" href="#123528"> &para;</a><div class="date" title="2019-01-18 10:37"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123528">
<div class="phpcode"><code><span class="html">Be aware if a array like this is used (e.g. values from a shopping cart):<br /><span class="default">&lt;?php<br /></span><span class="keyword">Array<br />(<br />    [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">142</span><span class="keyword">,</span><span class="default">80<br />    </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">39</span><span class="keyword">,</span><span class="default">27<br />    </span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] =&gt; </span><span class="default">22</span><span class="keyword">,</span><span class="default">80<br />    </span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] =&gt; </span><span class="default">175</span><span class="keyword">,</span><span class="default">80<br /></span><span class="keyword">)</span><span class="default">?&gt;<br /></span>The result will be: 39,27 and not - as expected - 175,80<br /><br />So, to find the max value, use integer only like:<br /><span class="default">&lt;?php<br /></span><span class="keyword">Array<br />(<br />    [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">14280<br />    </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">3927<br />    </span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] =&gt; </span><span class="default">2280<br />    </span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] =&gt; </span><span class="default">17580<br /></span><span class="keyword">)</span><span class="default">?&gt;<br /></span>and you will get the correct result: 17580</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.max&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.max.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.math.php">Math Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.abs.php" title="abs">abs</a>
                        </li>
                                                <li class="">
                            <a href="function.acos.php" title="acos">acos</a>
                        </li>
                                                <li class="">
                            <a href="function.acosh.php" title="acosh">acosh</a>
                        </li>
                                                <li class="">
                            <a href="function.asin.php" title="asin">asin</a>
                        </li>
                                                <li class="">
                            <a href="function.asinh.php" title="asinh">asinh</a>
                        </li>
                                                <li class="">
                            <a href="function.atan.php" title="atan">atan</a>
                        </li>
                                                <li class="">
                            <a href="function.atan2.php" title="atan2">atan2</a>
                        </li>
                                                <li class="">
                            <a href="function.atanh.php" title="atanh">atanh</a>
                        </li>
                                                <li class="">
                            <a href="function.base-convert.php" title="base_&#8203;convert">base_&#8203;convert</a>
                        </li>
                                                <li class="">
                            <a href="function.bindec.php" title="bindec">bindec</a>
                        </li>
                                                <li class="">
                            <a href="function.ceil.php" title="ceil">ceil</a>
                        </li>
                                                <li class="">
                            <a href="function.cos.php" title="cos">cos</a>
                        </li>
                                                <li class="">
                            <a href="function.cosh.php" title="cosh">cosh</a>
                        </li>
                                                <li class="">
                            <a href="function.decbin.php" title="decbin">decbin</a>
                        </li>
                                                <li class="">
                            <a href="function.dechex.php" title="dechex">dechex</a>
                        </li>
                                                <li class="">
                            <a href="function.decoct.php" title="decoct">decoct</a>
                        </li>
                                                <li class="">
                            <a href="function.deg2rad.php" title="deg2rad">deg2rad</a>
                        </li>
                                                <li class="">
                            <a href="function.exp.php" title="exp">exp</a>
                        </li>
                                                <li class="">
                            <a href="function.expm1.php" title="expm1">expm1</a>
                        </li>
                                                <li class="">
                            <a href="function.fdiv.php" title="fdiv">fdiv</a>
                        </li>
                                                <li class="">
                            <a href="function.floor.php" title="floor">floor</a>
                        </li>
                                                <li class="">
                            <a href="function.fmod.php" title="fmod">fmod</a>
                        </li>
                                                <li class="">
                            <a href="function.fpow.php" title="fpow">fpow</a>
                        </li>
                                                <li class="">
                            <a href="function.hexdec.php" title="hexdec">hexdec</a>
                        </li>
                                                <li class="">
                            <a href="function.hypot.php" title="hypot">hypot</a>
                        </li>
                                                <li class="">
                            <a href="function.intdiv.php" title="intdiv">intdiv</a>
                        </li>
                                                <li class="">
                            <a href="function.is-finite.php" title="is_&#8203;finite">is_&#8203;finite</a>
                        </li>
                                                <li class="">
                            <a href="function.is-infinite.php" title="is_&#8203;infinite">is_&#8203;infinite</a>
                        </li>
                                                <li class="">
                            <a href="function.is-nan.php" title="is_&#8203;nan">is_&#8203;nan</a>
                        </li>
                                                <li class="">
                            <a href="function.log.php" title="log">log</a>
                        </li>
                                                <li class="">
                            <a href="function.log10.php" title="log10">log10</a>
                        </li>
                                                <li class="">
                            <a href="function.log1p.php" title="log1p">log1p</a>
                        </li>
                                                <li class="current">
                            <a href="function.max.php" title="max">max</a>
                        </li>
                                                <li class="">
                            <a href="function.min.php" title="min">min</a>
                        </li>
                                                <li class="">
                            <a href="function.octdec.php" title="octdec">octdec</a>
                        </li>
                                                <li class="">
                            <a href="function.pi.php" title="pi">pi</a>
                        </li>
                                                <li class="">
                            <a href="function.pow.php" title="pow">pow</a>
                        </li>
                                                <li class="">
                            <a href="function.rad2deg.php" title="rad2deg">rad2deg</a>
                        </li>
                                                <li class="">
                            <a href="function.round.php" title="round">round</a>
                        </li>
                                                <li class="">
                            <a href="function.sin.php" title="sin">sin</a>
                        </li>
                                                <li class="">
                            <a href="function.sinh.php" title="sinh">sinh</a>
                        </li>
                                                <li class="">
                            <a href="function.sqrt.php" title="sqrt">sqrt</a>
                        </li>
                                                <li class="">
                            <a href="function.tan.php" title="tan">tan</a>
                        </li>
                                                <li class="">
                            <a href="function.tanh.php" title="tanh">tanh</a>
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
