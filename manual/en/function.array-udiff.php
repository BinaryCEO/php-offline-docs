<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_udiff - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-udiff.php">
 <link rel="shorturl" href="https://www.php.net/array-udiff">
 <link rel="alternate" href="https://www.php.net/array-udiff" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-sum.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-udiff-assoc.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-udiff.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-udiff.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-udiff.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-udiff.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-udiff.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-udiff.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-udiff.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-udiff.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-udiff.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-udiff.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-udiff.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Computes the difference of arrays by using a callback function for data comparison" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_udiff - Manual" />
<meta name="twitter:description" content="Computes the difference of arrays by using a callback function for data comparison" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_udiff - Manual" />
<meta itemprop="description" content="Computes the difference of arrays by using a callback function for data comparison" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Computes the difference of arrays by using a callback function for data comparison" />

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
        <a href="function.array-udiff-assoc.php">
          array_udiff_assoc &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-sum.php">
          &laquo; array_sum        </a>
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
            <option value='en/function.array-udiff.php' selected="selected">English</option>
            <option value='de/function.array-udiff.php'>German</option>
            <option value='es/function.array-udiff.php'>Spanish</option>
            <option value='fr/function.array-udiff.php'>French</option>
            <option value='it/function.array-udiff.php'>Italian</option>
            <option value='ja/function.array-udiff.php'>Japanese</option>
            <option value='pt_BR/function.array-udiff.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-udiff.php'>Russian</option>
            <option value='tr/function.array-udiff.php'>Turkish</option>
            <option value='uk/function.array-udiff.php'>Ukrainian</option>
            <option value='zh/function.array-udiff.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-udiff" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_udiff</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_udiff</span> &mdash; <span class="dc-title">Computes the difference of arrays by using a callback function for data comparison</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.array-udiff-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_udiff</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">...$arrays</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$value_compare_func</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Computes the difference of arrays by using a callback function for data
   comparison. This is unlike <span class="function"><a href="function.array-diff.php" class="function">array_diff()</a></span> which uses an
   internal function for comparing the data.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.array-udiff-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The first array.
      </p>
     </dd>
    
    
     <dt><code class="parameter">arrays</code></dt>
     <dd>
      <p class="para">
       Arrays to compare against.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value_compare_func</code></dt>
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
      <div class="caution"><strong class="caution">Caution</strong>
 <p class="para">
  The sorting callback must handle any value from any array in any order,
  regardless of the order they were originally provided.
  This is because each individual array is first sorted before being compared against other arrays.

  For example:
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$arrayA </span><span style="color: #007700">= [</span><span style="color: #DD0000">"string"</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$arrayB </span><span style="color: #007700">= [[</span><span style="color: #DD0000">"value" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">]];<br /></span><span style="color: #FF8000">// $item1 and $item2 can be any of "string", 1 or ["value" =&gt; 1]<br /></span><span style="color: #0000BB">$compareFunc </span><span style="color: #007700">= static function (</span><span style="color: #0000BB">$item1</span><span style="color: #007700">, </span><span style="color: #0000BB">$item2</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$value1 </span><span style="color: #007700">= </span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$item1</span><span style="color: #007700">) ? </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$item1</span><span style="color: #007700">) : (</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$item1</span><span style="color: #007700">) ? </span><span style="color: #0000BB">$item1</span><span style="color: #007700">[</span><span style="color: #DD0000">"value"</span><span style="color: #007700">] : </span><span style="color: #0000BB">$item1</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$value2 </span><span style="color: #007700">= </span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$item2</span><span style="color: #007700">) ? </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$item2</span><span style="color: #007700">) : (</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$item2</span><span style="color: #007700">) ? </span><span style="color: #0000BB">$item2</span><span style="color: #007700">[</span><span style="color: #DD0000">"value"</span><span style="color: #007700">] : </span><span style="color: #0000BB">$item2</span><span style="color: #007700">);<br />    return </span><span style="color: #0000BB">$value1 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">$value2</span><span style="color: #007700">;<br />};<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </p>
</div>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.array-udiff-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array containing all the values of <code class="parameter">array</code>
   that are not present in any of the other arguments.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.array-udiff-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5279">
    <p><strong>Example #1 <span class="function"><strong>array_udiff()</strong></span> example using stdClass Objects</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Arrays to compare<br /></span><span style="color: #0000BB">$array1 </span><span style="color: #007700">= array(new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">, new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">,<br />                new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">, new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">,<br />               );<br /><br /></span><span style="color: #0000BB">$array2 </span><span style="color: #007700">= array(<br />                new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">, new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">,<br />               );<br /><br /></span><span style="color: #FF8000">// Set some properties for each object<br /></span><span style="color: #0000BB">$array1</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">width </span><span style="color: #007700">= </span><span style="color: #0000BB">11</span><span style="color: #007700">; </span><span style="color: #0000BB">$array1</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">height </span><span style="color: #007700">= </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$array1</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">width </span><span style="color: #007700">= </span><span style="color: #0000BB">7</span><span style="color: #007700">;  </span><span style="color: #0000BB">$array1</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">height </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$array1</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">width </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;  </span><span style="color: #0000BB">$array1</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">height </span><span style="color: #007700">= </span><span style="color: #0000BB">9</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$array1</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">width </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">;  </span><span style="color: #0000BB">$array1</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">height </span><span style="color: #007700">= </span><span style="color: #0000BB">7</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$array2</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">width </span><span style="color: #007700">= </span><span style="color: #0000BB">7</span><span style="color: #007700">;  </span><span style="color: #0000BB">$array2</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">height </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$array2</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">width </span><span style="color: #007700">= </span><span style="color: #0000BB">9</span><span style="color: #007700">;  </span><span style="color: #0000BB">$array2</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">height </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><br />function </span><span style="color: #0000BB">compare_by_area</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$areaA </span><span style="color: #007700">= </span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">width </span><span style="color: #007700">* </span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">height</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$areaB </span><span style="color: #007700">= </span><span style="color: #0000BB">$b</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">width </span><span style="color: #007700">* </span><span style="color: #0000BB">$b</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">height</span><span style="color: #007700">;<br />    <br />    if (</span><span style="color: #0000BB">$areaA </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">$areaB</span><span style="color: #007700">) {<br />        return -</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    } elseif (</span><span style="color: #0000BB">$areaA </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">$areaB</span><span style="color: #007700">) {<br />        return </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    } else {<br />        return </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_udiff</span><span style="color: #007700">(</span><span style="color: #0000BB">$array1</span><span style="color: #007700">, </span><span style="color: #0000BB">$array2</span><span style="color: #007700">, </span><span style="color: #DD0000">'compare_by_area'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; stdClass Object
        (
            [width] =&gt; 11
            [height] =&gt; 3
        )

    [1] =&gt; stdClass Object
        (
            [width] =&gt; 7
            [height] =&gt; 1
        )

)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5280">
    <p><strong>Example #2 <span class="function"><strong>array_udiff()</strong></span> example using DateTime Objects</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyCalendar </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$free </span><span style="color: #007700">= array();<br />    public </span><span style="color: #0000BB">$booked </span><span style="color: #007700">= array();<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$week </span><span style="color: #007700">= </span><span style="color: #DD0000">'now'</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$start </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #0000BB">$week</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$start</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modify</span><span style="color: #007700">(</span><span style="color: #DD0000">'Monday this week midnight'</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$end </span><span style="color: #007700">= clone </span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$end</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modify</span><span style="color: #007700">(</span><span style="color: #DD0000">'Friday this week midnight'</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$interval </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateInterval</span><span style="color: #007700">(</span><span style="color: #DD0000">'P1D'</span><span style="color: #007700">);<br />        foreach (new </span><span style="color: #0000BB">DatePeriod</span><span style="color: #007700">(</span><span style="color: #0000BB">$start</span><span style="color: #007700">, </span><span style="color: #0000BB">$interval</span><span style="color: #007700">, </span><span style="color: #0000BB">$end</span><span style="color: #007700">) as </span><span style="color: #0000BB">$freeTime</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">free</span><span style="color: #007700">[] = </span><span style="color: #0000BB">$freeTime</span><span style="color: #007700">;<br />        }<br />    }<br /><br />    public function </span><span style="color: #0000BB">bookAppointment</span><span style="color: #007700">(</span><span style="color: #0000BB">DateTime $date</span><span style="color: #007700">, </span><span style="color: #0000BB">$note</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">booked</span><span style="color: #007700">[] = array(</span><span style="color: #DD0000">'date' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$date</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modify</span><span style="color: #007700">(</span><span style="color: #DD0000">'midnight'</span><span style="color: #007700">), </span><span style="color: #DD0000">'note' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$note</span><span style="color: #007700">);<br />    }<br /><br />    public function </span><span style="color: #0000BB">checkAvailability</span><span style="color: #007700">() {<br />        return </span><span style="color: #0000BB">array_udiff</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">free</span><span style="color: #007700">, </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">booked</span><span style="color: #007700">, array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">, </span><span style="color: #DD0000">'customCompare'</span><span style="color: #007700">));<br />    }<br />    <br />    public function </span><span style="color: #0000BB">customCompare</span><span style="color: #007700">(</span><span style="color: #0000BB">$free</span><span style="color: #007700">, </span><span style="color: #0000BB">$booked</span><span style="color: #007700">) {<br />        if (</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$free</span><span style="color: #007700">)) </span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">$free</span><span style="color: #007700">[</span><span style="color: #DD0000">'date'</span><span style="color: #007700">];<br />        else </span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">$free</span><span style="color: #007700">;<br />        if (</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$booked</span><span style="color: #007700">)) </span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">$booked</span><span style="color: #007700">[</span><span style="color: #DD0000">'date'</span><span style="color: #007700">];<br />        else </span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">$booked</span><span style="color: #007700">;<br />        if (</span><span style="color: #0000BB">$a </span><span style="color: #007700">== </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {<br />            return </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />        } elseif (</span><span style="color: #0000BB">$a </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {<br />            return </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />        } else {<br />            return -</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />        }<br />    }<br />}<br /><br /></span><span style="color: #FF8000">// Create a calendar for weekly appointments<br /></span><span style="color: #0000BB">$myCalendar </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyCalendar</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Book some appointments for this week<br /></span><span style="color: #0000BB">$myCalendar</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bookAppointment</span><span style="color: #007700">(new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">'Monday this week'</span><span style="color: #007700">), </span><span style="color: #DD0000">"Cleaning GoogleGuy's apartment."</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$myCalendar</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bookAppointment</span><span style="color: #007700">(new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">'Wednesday this week'</span><span style="color: #007700">), </span><span style="color: #DD0000">"Going on a snowboarding trip."</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$myCalendar</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bookAppointment</span><span style="color: #007700">(new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">'Friday this week'</span><span style="color: #007700">), </span><span style="color: #DD0000">"Fixing buggy code."</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Check availability of days by comparing $booked dates against $free dates<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"I'm available on the following days this week...\n\n"</span><span style="color: #007700">;<br />foreach (</span><span style="color: #0000BB">$myCalendar</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkAvailability</span><span style="color: #007700">() as </span><span style="color: #0000BB">$free</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$free</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'l'</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; <br />}<br />echo </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"I'm busy on the following days this week...\n\n"</span><span style="color: #007700">;<br />foreach (</span><span style="color: #0000BB">$myCalendar</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">booked </span><span style="color: #007700">as </span><span style="color: #0000BB">$booked</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$booked</span><span style="color: #007700">[</span><span style="color: #DD0000">'date'</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'l'</span><span style="color: #007700">), </span><span style="color: #DD0000">": "</span><span style="color: #007700">, </span><span style="color: #0000BB">$booked</span><span style="color: #007700">[</span><span style="color: #DD0000">'note'</span><span style="color: #007700">], </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; <br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">I&#039;m available on the following days this week...

Tuesday
Thursday


I&#039;m busy on the following days this week...

Monday: Cleaning GoogleGuy&#039;s apartment.
Wednesday: Going on a snowboarding trip.
Friday: Fixing buggy code.</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.array-udiff-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Please note that this function only checks one dimension of a n-dimensional
    array. Of course you can check deeper dimensions by using
    <code class="literal">array_udiff($array1[0], $array2[0], &quot;data_compare_func&quot;);</code>.
   </span>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.array-udiff-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-diff.php" class="function" rel="rdfs-seeAlso">array_diff()</a> - Computes the difference of arrays</span></li>
    <li><span class="function"><a href="function.array-diff-assoc.php" class="function" rel="rdfs-seeAlso">array_diff_assoc()</a> - Computes the difference of arrays with additional index check</span></li>
    <li><span class="function"><a href="function.array-diff-uassoc.php" class="function" rel="rdfs-seeAlso">array_diff_uassoc()</a> - Computes the difference of arrays with additional index check which is performed by a user supplied callback function</span></li>
    <li><span class="function"><a href="function.array-udiff-assoc.php" class="function" rel="rdfs-seeAlso">array_udiff_assoc()</a> - Computes the difference of arrays with additional index check, compares data by a callback function</span></li>
    <li><span class="function"><a href="function.array-udiff-uassoc.php" class="function" rel="rdfs-seeAlso">array_udiff_uassoc()</a> - Computes the difference of arrays with additional index check, compares data and indexes by a callback function</span></li>
    <li><span class="function"><a href="function.array-intersect.php" class="function" rel="rdfs-seeAlso">array_intersect()</a> - Computes the intersection of arrays</span></li>
    <li><span class="function"><a href="function.array-intersect-assoc.php" class="function" rel="rdfs-seeAlso">array_intersect_assoc()</a> - Computes the intersection of arrays with additional index check</span></li>
    <li><span class="function"><a href="function.array-uintersect.php" class="function" rel="rdfs-seeAlso">array_uintersect()</a> - Computes the intersection of arrays, compares data by a callback function</span></li>
    <li><span class="function"><a href="function.array-uintersect-assoc.php" class="function" rel="rdfs-seeAlso">array_uintersect_assoc()</a> - Computes the intersection of arrays with additional index check, compares data by a callback function</span></li>
    <li><span class="function"><a href="function.array-uintersect-uassoc.php" class="function" rel="rdfs-seeAlso">array_uintersect_uassoc()</a> - Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-udiff.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-udiff%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-udiff&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-udiff.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="68592">  <div class="votes">
    <div id="Vu68592">
    <a href="/manual/vote-note.php?id=68592&amp;page=function.array-udiff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68592">
    <a href="/manual/vote-note.php?id=68592&amp;page=function.array-udiff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68592" title="90% like this...">
    54
    </div>
  </div>
  <a href="#68592" class="name">
  <strong class="user"><em>Colin</em></strong></a><a class="genanchor" href="#68592"> &para;</a><div class="date" title="2006-08-02 01:15"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68592">
<div class="phpcode"><code><span class="html">I think the example given here using classes is convoluting things too much to demonstrate what this function does.<br /><br />array_udiff() will walk through array_values($a) and array_values($b) and compare each value by using the passed in callback function.<br /><br />To put it another way, array_udiff() compares $a[0] to $b[0], $b[1], $b[2], and $b[3] using the provided callback function.  If the callback returns zero for any of the comparisons then $a[0] will not be in the returned array from array_udiff().  It then compares $a[1] to $b[0], $b[1], $b[2], and $b[3].  Then, finally, $a[2] to $b[0], $b[1], $b[2], and $b[3].<br /><br />For example, compare_ids($a[0], $b[0]) === -5 while compare_ids($a[1], $b[1]) === 0.  Therefore, $a[1] is not returned from array_udiff() since it is present in $b.<br /><br />&lt;?<br />$a = array(<br />        array(<br />                'id' =&gt; 10,<br />                'name' =&gt; 'John',<br />                'color' =&gt; 'red',<br />        ),<br />        array(<br />                'id' =&gt; 20,<br />                'name' =&gt; 'Elise',<br />                'color' =&gt; 'blue',<br />        ),<br />        array(<br />                'id' =&gt; 30,<br />                'name' =&gt; 'Mark',<br />                'color' =&gt; 'red',<br />        ),<br />);<br /><br />$b = array(<br />        array(<br />                'id' =&gt; 15,<br />                'name' =&gt; 'Nancy',<br />                'color' =&gt; 'black',<br />        ),<br />        array(<br />                'id' =&gt; 20,<br />                'name' =&gt; 'Elise',<br />                'color' =&gt; 'blue',<br />        ),<br />        array(<br />                'id' =&gt; 30,<br />                'name' =&gt; 'Mark',<br />                'color' =&gt; 'red',<br />        ),<br />        array(<br />                'id' =&gt; 40,<br />                'name' =&gt; 'John',<br />                'color' =&gt; 'orange',<br />        ),<br />);<br /><br />function compare_ids($a, $b)<br />{<br />    return ($a['id'] - $b['id']);<br />}<br />function compare_names($a, $b)<br />{<br />    return strcmp($a['name'], $b['name']);<br />}<br /><br />$ret = array_udiff($a, $b, 'compare_ids');<br />var_dump($ret);<br /><br />$ret = array_udiff($b, $a, 'compare_ids');<br />var_dump($ret);<br /><br />$ret = array_udiff($a, $b, 'compare_names');<br />var_dump($ret);<br />?&gt;<br /><br />Which returns the following.<br /><br />In the first return we see that $b has no entry in it with an id of 10.<br />&lt;?<br />array(1) {<br />  [0]=&gt;<br />  array(3) {<br />    ["id"]=&gt;<br />    int(10)<br />    ["name"]=&gt;<br />    string(4) "John"<br />    ["color"]=&gt;<br />    string(3) "red"<br />  }<br />}<br />?&gt;<br /><br />In the second return we see that $a has no entry in it with an id of 15 or 40.<br />&lt;?<br />array(2) {<br />  [0]=&gt;<br />  array(3) {<br />    ["id"]=&gt;<br />    int(15)<br />    ["name"]=&gt;<br />    string(5) "Nancy"<br />    ["color"]=&gt;<br />    string(5) "black"<br />  }<br />  [3]=&gt;<br />  array(3) {<br />    ["id"]=&gt;<br />    int(40)<br />    ["name"]=&gt;<br />    string(4) "John"<br />    ["color"]=&gt;<br />    string(6) "orange"<br />  }<br />}<br />?&gt;<br /><br />In third return we see that all names in $a are in $b (even though the entry in $b whose name is 'John' is different, the anonymous function is only comparing names).<br />&lt;?<br />array(0) {<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="119657">  <div class="votes">
    <div id="Vu119657">
    <a href="/manual/vote-note.php?id=119657&amp;page=function.array-udiff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119657">
    <a href="/manual/vote-note.php?id=119657&amp;page=function.array-udiff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119657" title="100% like this...">
    33
    </div>
  </div>
  <a href="#119657" class="name">
  <strong class="user"><em>napcoder</em></strong></a><a class="genanchor" href="#119657"> &para;</a><div class="date" title="2016-07-27 08:38"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119657">
<div class="phpcode"><code><span class="html">Note that the compare function is used also internally, to order the arrays and choose which element compare against in the next round.<br /><br />If your compare function is not really comparing (ie. returns 0 if elements are equals, 1 otherwise), you will receive an unexpected result.</span></code></div>
  </div>
 </div>
  <div class="note" id="80149">  <div class="votes">
    <div id="Vu80149">
    <a href="/manual/vote-note.php?id=80149&amp;page=function.array-udiff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80149">
    <a href="/manual/vote-note.php?id=80149&amp;page=function.array-udiff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80149" title="100% like this...">
    7
    </div>
  </div>
  <a href="#80149" class="name">
  <strong class="user"><em>grantwparks at gmail dot com</em></strong></a><a class="genanchor" href="#80149"> &para;</a><div class="date" title="2007-12-31 07:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80149">
<div class="phpcode"><code><span class="html">Re: "convoluted"<br /><br />I think the point being made is that array_udiff() can be used not only for comparisons between homogenous arrays, as in your example (and definitely the most common need), but it can be used to compare heterogeneous arrays, too.<br /><br />Consider:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">compr_1</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />    </span><span class="default">$aVal </span><span class="keyword">= </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) ? </span><span class="default">$a</span><span class="keyword">[</span><span class="string">'last_name'</span><span class="keyword">] : </span><span class="default">$a</span><span class="keyword">;<br />    </span><span class="default">$bVal </span><span class="keyword">= </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">) ? </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'last_name'</span><span class="keyword">] : </span><span class="default">$b</span><span class="keyword">;<br />    return </span><span class="default">strcasecmp</span><span class="keyword">(</span><span class="default">$aVal</span><span class="keyword">, </span><span class="default">$bVal</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$aEmployees </span><span class="keyword">= array(<br />    array(</span><span class="string">'last_name'  </span><span class="keyword">=&gt; </span><span class="string">'Smith'</span><span class="keyword">,<br />            </span><span class="string">'first_name' </span><span class="keyword">=&gt; </span><span class="string">'Joe'</span><span class="keyword">,<br />            </span><span class="string">'phone'      </span><span class="keyword">=&gt; </span><span class="string">'555-1000'</span><span class="keyword">),<br />    array(</span><span class="string">'last_name'  </span><span class="keyword">=&gt; </span><span class="string">'Doe'</span><span class="keyword">,<br />            </span><span class="string">'first_name' </span><span class="keyword">=&gt; </span><span class="string">'John'</span><span class="keyword">,<br />            </span><span class="string">'phone'      </span><span class="keyword">=&gt; </span><span class="string">'555-2000'</span><span class="keyword">),<br />    array(</span><span class="string">'last_name'  </span><span class="keyword">=&gt; </span><span class="string">'Flagg'</span><span class="keyword">,<br />            </span><span class="string">'first_name' </span><span class="keyword">=&gt; </span><span class="string">'Randall'</span><span class="keyword">,<br />            </span><span class="string">'phone'      </span><span class="keyword">=&gt; </span><span class="string">'666-1000'</span><span class="keyword">)<br />    );<br /><br /></span><span class="default">$aNames </span><span class="keyword">= array(</span><span class="string">'Doe'</span><span class="keyword">, </span><span class="string">'Smith'</span><span class="keyword">, </span><span class="string">'Johnson'</span><span class="keyword">);<br />    <br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_udiff</span><span class="keyword">(</span><span class="default">$aEmployees</span><span class="keyword">, </span><span class="default">$aNames</span><span class="keyword">, </span><span class="string">"compr_1"</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Allowing me to get the "employee" that's not in the name list:<br /><br />Array ( [2] =&gt; Array ( [last_name] =&gt; Flagg [first_name] =&gt; Randall [phone] =&gt; 666-1000 ) )<br /><br />Something interesting to note, is that the two arguments to the compare function don't correspond to array1 and array2.  That's why there has to be logic in it to handle that either of the arguments might be pointing to the more complex employee array.  (Found this out the hard way.)</span></code></div>
  </div>
 </div>
  <div class="note" id="86220">  <div class="votes">
    <div id="Vu86220">
    <a href="/manual/vote-note.php?id=86220&amp;page=function.array-udiff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86220">
    <a href="/manual/vote-note.php?id=86220&amp;page=function.array-udiff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86220" title="90% like this...">
    17
    </div>
  </div>
  <a href="#86220" class="name">
  <strong class="user"><em>adam dot jorgensen dot za at gmail dot com</em></strong></a><a class="genanchor" href="#86220"> &para;</a><div class="date" title="2008-10-08 06:51"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86220">
<div class="phpcode"><code><span class="html">It is not stated, by this function also diffs array1 to itself, removing any duplicate values...</span></code></div>
  </div>
 </div>
  <div class="note" id="104445">  <div class="votes">
    <div id="Vu104445">
    <a href="/manual/vote-note.php?id=104445&amp;page=function.array-udiff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104445">
    <a href="/manual/vote-note.php?id=104445&amp;page=function.array-udiff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104445" title="89% like this...">
    15
    </div>
  </div>
  <a href="#104445" class="name">
  <strong class="user"><em>b4301775 at klzlk dot com</em></strong></a><a class="genanchor" href="#104445"> &para;</a><div class="date" title="2011-06-15 11:09"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104445">
<div class="phpcode"><code><span class="html">Quick example for using array_udiff to do a multi-dimensional diff
<br />
<br />Returns values of $arr1 that are not in $arr2
<br />
<br /><span class="default">&lt;?php
<br />$arr1 </span><span class="keyword">= array( array(</span><span class="string">'Bob'</span><span class="keyword">, </span><span class="default">42</span><span class="keyword">), array(</span><span class="string">'Phil'</span><span class="keyword">, </span><span class="default">37</span><span class="keyword">), array(</span><span class="string">'Frank'</span><span class="keyword">, </span><span class="default">39</span><span class="keyword">) );
<br />        
<br /></span><span class="default">$arr2 </span><span class="keyword">= array( array(</span><span class="string">'Phil'</span><span class="keyword">, </span><span class="default">37</span><span class="keyword">), array(</span><span class="string">'Mark'</span><span class="keyword">, </span><span class="default">45</span><span class="keyword">) );
<br />        
<br /></span><span class="default">$arr3 </span><span class="keyword">= </span><span class="default">array_udiff</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">, </span><span class="default">$arr2</span><span class="keyword">, </span><span class="default">create_function</span><span class="keyword">(
<br />    </span><span class="string">'$a,$b'</span><span class="keyword">,
<br />    </span><span class="string">'return strcmp( implode("", $a), implode("", $b) ); '</span><span class="keyword">)
<br />    );
<br />        
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$arr3</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Output:
<br />
<br />Array
<br />(
<br />    [0] =&gt; Array
<br />        (
<br />            [0] =&gt; Bob
<br />            [1] =&gt; 42
<br />        )
<br /> 
<br />    [2] =&gt; Array
<br />        (
<br />            [0] =&gt; Frank
<br />            [1] =&gt; 39
<br />        )
<br /> 
<br />)
<br />1
<br />
<br />Hope this helps someone</span></code></div>
  </div>
 </div>
  <div class="note" id="123460">  <div class="votes">
    <div id="Vu123460">
    <a href="/manual/vote-note.php?id=123460&amp;page=function.array-udiff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123460">
    <a href="/manual/vote-note.php?id=123460&amp;page=function.array-udiff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123460" title="83% like this...">
    4
    </div>
  </div>
  <a href="#123460" class="name">
  <strong class="user"><em>Jorge Morales (morales2k)</em></strong></a><a class="genanchor" href="#123460"> &para;</a><div class="date" title="2018-12-20 02:17"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123460">
<div class="phpcode"><code><span class="html">I find it that this is an ideal place to apply the spaceship operator, but it was not used in the examples. <br /><br />Here is Example#1 using the spaceship operator in the comparison function. <br /><br />    <span class="default">&lt;?php<br />    </span><span class="comment">// Arrays to compare<br />    </span><span class="default">$array1 </span><span class="keyword">= array(new </span><span class="default">stdclass</span><span class="keyword">, new </span><span class="default">stdclass</span><span class="keyword">,<br />                    new </span><span class="default">stdclass</span><span class="keyword">, new </span><span class="default">stdclass</span><span class="keyword">,<br />                   );<br /><br />    </span><span class="default">$array2 </span><span class="keyword">= array(<br />                    new </span><span class="default">stdclass</span><span class="keyword">, new </span><span class="default">stdclass</span><span class="keyword">,<br />                   );<br /><br />    </span><span class="comment">// Set some properties for each object<br />    </span><span class="default">$array1</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">width </span><span class="keyword">= </span><span class="default">11</span><span class="keyword">; </span><span class="default">$array1</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">height </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />    </span><span class="default">$array1</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">width </span><span class="keyword">= </span><span class="default">7</span><span class="keyword">;  </span><span class="default">$array1</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">height </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$array1</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]-&gt;</span><span class="default">width </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;  </span><span class="default">$array1</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]-&gt;</span><span class="default">height </span><span class="keyword">= </span><span class="default">9</span><span class="keyword">;<br />    </span><span class="default">$array1</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]-&gt;</span><span class="default">width </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;  </span><span class="default">$array1</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]-&gt;</span><span class="default">height </span><span class="keyword">= </span><span class="default">7</span><span class="keyword">;<br /><br />    </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">width </span><span class="keyword">= </span><span class="default">7</span><span class="keyword">;  </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">height </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br />    </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">width </span><span class="keyword">= </span><span class="default">9</span><span class="keyword">;  </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">height </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /><br />    function </span><span class="default">compare_by_area</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />        </span><span class="default">$areaA </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">width </span><span class="keyword">* </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">height</span><span class="keyword">;<br />        </span><span class="default">$areaB </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">width </span><span class="keyword">* </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">height</span><span class="keyword">;<br />    <br />        return </span><span class="default">$areaA </span><span class="keyword">&lt;=&gt; </span><span class="default">$areaB</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_udiff</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">, </span><span class="string">'compare_by_area'</span><span class="keyword">));<br />    </span><span class="default">?&gt;<br /></span><br />The output is:<br />    Array<br />    (<br />        [0] =&gt; stdClass Object<br />            (<br />                [width] =&gt; 11<br />                [height] =&gt; 3<br />            )<br />    <br />        [1] =&gt; stdClass Object<br />            (<br />                [width] =&gt; 7<br />                [height] =&gt; 1<br />            )<br />    <br />    )<br /><br />I find it is pretty awesome you can substitute all of these lines:<br />    if ($areaA &lt; $areaB) {<br />        return -1;<br />    } elseif ($areaA &gt; $areaB) {<br />        return 1;<br />    } else {<br />        return 0;<br />    }<br /><br />with just:<br /><br />    return $areaA &lt;=&gt; $areaB;<br /><br />Neat!</span></code></div>
  </div>
 </div>
  <div class="note" id="49229">  <div class="votes">
    <div id="Vu49229">
    <a href="/manual/vote-note.php?id=49229&amp;page=function.array-udiff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49229">
    <a href="/manual/vote-note.php?id=49229&amp;page=function.array-udiff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49229" title="58% like this...">
    3
    </div>
  </div>
  <a href="#49229" class="name">
  <strong class="user"><em>dmhouse at gmail dot com</em></strong></a><a class="genanchor" href="#49229"> &para;</a><div class="date" title="2005-01-20 01:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49229">
<div class="phpcode"><code><span class="html">Very easy way of achieving a case-insensitive version of array_diff (or indeed array_diff_assoc, array_intersect or any of these types of functions which have a similar function that takes a callback function as one of their parameters):<br /><br />array_udiff($array1, $array2, 'strcasecmp');<br /><br />This works because strcasecmp() compares two strings case-insensitively, as compared to the array_diff() which compares two strings by using the == operator, which is case-sensitive.</span></code></div>
  </div>
 </div>
  <div class="note" id="92072">  <div class="votes">
    <div id="Vu92072">
    <a href="/manual/vote-note.php?id=92072&amp;page=function.array-udiff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92072">
    <a href="/manual/vote-note.php?id=92072&amp;page=function.array-udiff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92072" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#92072" class="name">
  <strong class="user"><em>jared</em></strong></a><a class="genanchor" href="#92072"> &para;</a><div class="date" title="2009-07-07 12:27"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92072">
<div class="phpcode"><code><span class="html">Note that php does the string conversion *before* sending the values to the callback function.</span></code></div>
  </div>
 </div>
  <div class="note" id="42761">  <div class="votes">
    <div id="Vu42761">
    <a href="/manual/vote-note.php?id=42761&amp;page=function.array-udiff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42761">
    <a href="/manual/vote-note.php?id=42761&amp;page=function.array-udiff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42761" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#42761" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#42761"> &para;</a><div class="date" title="2004-05-28 07:11"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42761">
<div class="phpcode"><code><span class="html">This functionality is now implemented in the PEAR package PHP_Compat.<br /><br />More information about using this function without upgrading your version of PHP can be found on the below link:<br /><br /><a href="http://pear.php.net/package/PHP_Compat" rel="nofollow" target="_blank">http://pear.php.net/package/PHP_Compat</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-udiff&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-udiff.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
