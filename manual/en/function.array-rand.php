<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_rand - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-rand.php">
 <link rel="shorturl" href="https://www.php.net/array-rand">
 <link rel="alternate" href="https://www.php.net/array-rand" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-push.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-reduce.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-rand.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-rand.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-rand.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-rand.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-rand.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-rand.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-rand.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-rand.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-rand.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-rand.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-rand.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Pick one or more random keys out of an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_rand - Manual" />
<meta name="twitter:description" content="Pick one or more random keys out of an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_rand - Manual" />
<meta itemprop="description" content="Pick one or more random keys out of an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Pick one or more random keys out of an array" />

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
        <a href="function.array-reduce.php">
          array_reduce &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-push.php">
          &laquo; array_push        </a>
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
            <option value='en/function.array-rand.php' selected="selected">English</option>
            <option value='de/function.array-rand.php'>German</option>
            <option value='es/function.array-rand.php'>Spanish</option>
            <option value='fr/function.array-rand.php'>French</option>
            <option value='it/function.array-rand.php'>Italian</option>
            <option value='ja/function.array-rand.php'>Japanese</option>
            <option value='pt_BR/function.array-rand.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-rand.php'>Russian</option>
            <option value='tr/function.array-rand.php'>Turkish</option>
            <option value='uk/function.array-rand.php'>Ukrainian</option>
            <option value='zh/function.array-rand.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-rand" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_rand</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_rand</span> &mdash; <span class="dc-title">Pick one or more random keys out of an array</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.array-rand-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_rand</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$num</code><span class="initializer"> = 1</span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span></span></div>

  <p class="para rdfs-comment">
   Picks one or more random entries out of an array, and returns the
   key (or keys) of the random entries.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
 <p class="para">
  This function does not generate cryptographically secure values, and <em>must not</em>
  be used for cryptographic purposes, or purposes that require returned values to be unguessable.
 </p>
 <p class="para">
  If cryptographically secure randomness is required, the <span class="classname"><a href="class.random-randomizer.php" class="classname">Random\Randomizer</a></span> may be
  used with the <span class="classname"><a href="class.random-engine-secure.php" class="classname">Random\Engine\Secure</a></span> engine. For simple use cases, the <span class="function"><a href="function.random-int.php" class="function">random_int()</a></span>
  and <span class="function"><a href="function.random-bytes.php" class="function">random_bytes()</a></span> functions provide a convenient and secure <abbr title="Application Programming Interface">API</abbr> that is backed by
  the operating system’s <abbr title="Cryptographically Secure PseudoRandom Number Generator">CSPRNG</abbr>.
 </p>
</div>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.array-rand-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The input array.
       Cannot be empty.
      </p>
     </dd>
    
    
     <dt><code class="parameter">num</code></dt>
     <dd>
      <p class="para">
       Specifies how many entries should be picked.
       Must be greater than zero, and less than or equal to the length of <code class="parameter">array</code>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.array-rand-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   When picking only one entry, <span class="function"><strong>array_rand()</strong></span> returns
   the key for a random entry. Otherwise, an array of keys for the random
   entries is returned. This is done so that random keys can be picked
   from the array as well as random values. If multiple keys are returned,
   they will be returned in the order they were present in the original array.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.array-rand-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if <code class="parameter">array</code> is empty,
   or if <code class="parameter">num</code> is out of range.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-rand-changelog">
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
       <td>8.0.0</td>
       <td>
        <span class="function"><strong>array_rand()</strong></span> now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>
        if <code class="parameter">num</code> is out of range; previously an
        <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was raised, and the function returned <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <span class="function"><strong>array_rand()</strong></span> now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>
        if <code class="parameter">array</code> is empty; previously an
        <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was raised, and the function returned <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
       </td>
      </tr>

      <tr>
       <td>7.1.0</td>
       <td>
        The internal randomization algorithm <a href="migration71.incompatible.php#migration71.incompatible.rand-srand-aliases" class="link">has been changed</a> to use the <a href="http://www.math.sci.hiroshima-u.ac.jp/~m-mat/MT/emt.html" class="link external">&raquo;&nbsp;Mersenne Twister</a> Random Number Generator instead of the libc rand function.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.array-rand-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5264">
    <p><strong>Example #1 <span class="function"><strong>array_rand()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$input </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"Neo"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Morpheus"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Trinity"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Cypher"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Tank"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$rand_keys </span><span style="color: #007700">= </span><span style="color: #0000BB">array_rand</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$input</span><span style="color: #007700">[</span><span style="color: #0000BB">$rand_keys</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$input</span><span style="color: #007700">[</span><span style="color: #0000BB">$rand_keys</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.array-rand-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="random-randomizer.pickarraykeys.php" class="function" rel="rdfs-seeAlso">Random\Randomizer::pickArrayKeys()</a> - Select random array keys</span></li>
    <li><span class="function"><a href="random-randomizer.shufflearray.php" class="function" rel="rdfs-seeAlso">Random\Randomizer::shuffleArray()</a> - Get a permutation of an array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-rand.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-rand%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-rand&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-rand.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93834">  <div class="votes">
    <div id="Vu93834">
    <a href="/manual/vote-note.php?id=93834&amp;page=function.array-rand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93834">
    <a href="/manual/vote-note.php?id=93834&amp;page=function.array-rand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93834" title="69% like this...">
    94
    </div>
  </div>
  <a href="#93834" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#93834"> &para;</a><div class="date" title="2009-10-02 01:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93834">
<div class="phpcode"><code><span class="html">If the array elements are unique, and are all integers or strings, here is a simple way to pick $n random *values* (not keys) from an array $array:
<br />
<br /><span class="default">&lt;?php array_rand</span><span class="keyword">(</span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">), </span><span class="default">$n</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109393">  <div class="votes">
    <div id="Vu109393">
    <a href="/manual/vote-note.php?id=109393&amp;page=function.array-rand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109393">
    <a href="/manual/vote-note.php?id=109393&amp;page=function.array-rand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109393" title="75% like this...">
    79
    </div>
  </div>
  <a href="#109393" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#109393"> &para;</a><div class="date" title="2012-07-13 02:42"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109393">
<div class="phpcode"><code><span class="html">It doesn't explicitly say it in the documentation, but PHP won't pick the same key twice in one call.</span></code></div>
  </div>
 </div>
  <div class="note" id="122468">  <div class="votes">
    <div id="Vu122468">
    <a href="/manual/vote-note.php?id=122468&amp;page=function.array-rand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122468">
    <a href="/manual/vote-note.php?id=122468&amp;page=function.array-rand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122468" title="67% like this...">
    21
    </div>
  </div>
  <a href="#122468" class="name">
  <strong class="user"><em>grzeniufication</em></strong></a><a class="genanchor" href="#122468"> &para;</a><div class="date" title="2018-03-03 10:19"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122468">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Wraps array_rand call with additional checks<br /> *<br /> * TLDR; not so radom as you'd wish.<br /> *<br /> * NOTICE: the closer you get to the input arrays length, for the n parameter, the  output gets less random.<br /> * e.g.: array_random($a, count($a)) == $a will yield true<br /> * This, most certainly, has to do with the method used for making the array random (see other comments).<br /> *<br /> * @throws OutOfBoundsException – if n less than one or exceeds size of input array<br /> *<br /> * @param array $array – array to randomize<br /> * @param int $n – how many elements to return<br /> * @return array<br /> */<br /></span><span class="keyword">function </span><span class="default">array_random</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">, </span><span class="default">int $n </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">): array<br />{<br />    if (</span><span class="default">$n </span><span class="keyword">&lt; </span><span class="default">1 </span><span class="keyword">|| </span><span class="default">$n </span><span class="keyword">&gt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) {<br />        throw new </span><span class="default">OutOfBoundsException</span><span class="keyword">();<br />    }<br /><br />    return (</span><span class="default">$n </span><span class="keyword">!== </span><span class="default">1</span><span class="keyword">)<br />        ? </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">array_intersect_key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">array_rand</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">))))<br />        : array(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">array_rand</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)]);<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122467">  <div class="votes">
    <div id="Vu122467">
    <a href="/manual/vote-note.php?id=122467&amp;page=function.array-rand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122467">
    <a href="/manual/vote-note.php?id=122467&amp;page=function.array-rand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122467" title="56% like this...">
    12
    </div>
  </div>
  <a href="#122467" class="name">
  <strong class="user"><em>grzeniufication</em></strong></a><a class="genanchor" href="#122467"> &para;</a><div class="date" title="2018-03-03 09:22"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122467">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// An example how to fetch multiple values from array_rand<br /></span><span class="default">$a </span><span class="keyword">= [ </span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="string">'c'</span><span class="keyword">, </span><span class="string">'d'</span><span class="keyword">, </span><span class="string">'e'</span><span class="keyword">, </span><span class="string">'f'</span><span class="keyword">, </span><span class="string">'g' </span><span class="keyword">];<br /></span><span class="default">$n </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /><br /></span><span class="comment">// If you want to fetch multiple values you can try this:<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">array_intersect_key</span><span class="keyword">( </span><span class="default">$a</span><span class="keyword">, </span><span class="default">array_flip</span><span class="keyword">( </span><span class="default">array_rand</span><span class="keyword">( </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">) ) ) );<br /><br /></span><span class="comment">// If you want to re-index keys wrap the call in 'array_values':<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">array_values</span><span class="keyword">( </span><span class="default">array_intersect_key</span><span class="keyword">( </span><span class="default">$a</span><span class="keyword">, </span><span class="default">array_flip</span><span class="keyword">( </span><span class="default">array_rand</span><span class="keyword">( </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">) ) ) ) );</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126468">  <div class="votes">
    <div id="Vu126468">
    <a href="/manual/vote-note.php?id=126468&amp;page=function.array-rand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126468">
    <a href="/manual/vote-note.php?id=126468&amp;page=function.array-rand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126468" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126468" class="name">
  <strong class="user"><em>fulachan2 at gmail dot com</em></strong></a><a class="genanchor" href="#126468"> &para;</a><div class="date" title="2021-09-30 07:45"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126468">
<div class="phpcode"><code><span class="html">array_rand () takes a random value without ever being able to go back in its choice of random value.<br />A simple example:<br />I decide to mix an array of 10 entries to retrieve 3 values. This choice will give increasing and random values.<br /><br />    $myarray = range(1,10);<br />    <br />    $pm = array_rand($myarray,3);      <br />    // $pm return array(0-&gt;0,1-&gt;6,2-&gt;8)<br /><br />But if I decide to shuffle an array of 10 entries to get 10 entries, array_rand () will choose to assign a value to each return value and therefore the return array will not be random.<br /><br />    $gm = array_rand($myarray,count($myarray)); <br />    // $gm not random array(0-&gt;0,1-&gt;1,2-&gt;2,3-&gt;3,4-&gt;4,5-&gt;5,6-&gt;6,7-&gt;7,8-&gt;8,9-&gt;9)<br /><br />The easiest way to have a truly random value:<br />either use array_rand () in a loop of 1 value at a time<br /><br />$deg = range(-60,60);<br />$size = range(16,64);<br />$color = ["blue","red","green","pink","orange","purple","grey","darkgreen","darkkhaki"];<br />$i = 0;<br />$longueur = 10;<br />do{<br />    ++$i;<br />    printf("&lt;span style='transform: rotateZ(%ddeg); display: inline-block;font-size: %spx; color:%s'&gt;%s&lt;/span&gt;",<br />        $deg[array_rand($deg)],<br />        $size[array_rand($size)],<br />        $color[array_rand($color)],<br />        $alnum[array_rand($alnum)]);<br /><br />}while($i &lt; $longueur);<br /><br />------------------<br />or simply use shuffle () to shuffle the array really randomly.</span></code></div>
  </div>
 </div>
  <div class="note" id="126997">  <div class="votes">
    <div id="Vu126997">
    <a href="/manual/vote-note.php?id=126997&amp;page=function.array-rand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126997">
    <a href="/manual/vote-note.php?id=126997&amp;page=function.array-rand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126997" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#126997" class="name">
  <strong class="user"><em>divinity76+spam at gmail dot com</em></strong></a><a class="genanchor" href="#126997"> &para;</a><div class="date" title="2022-04-19 01:36"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126997">
<div class="phpcode"><code><span class="html">for a cryptographically secure version, try <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * fetch a random key from array, using a cryptograpically secure rng<br /> * discussed+reviewed at <a href="https://codereview.stackexchange.com/questions/275832/cryptographically-secure-version-of-the-core-array-rand-function/" rel="nofollow" target="_blank">https://codereview.stackexchange.com/questions/275832/cryptographically-secure-version-of-the-core-array-rand-function/</a><br /> *<br /> * @param array $array<br /> * @throws ValueError if array is empty<br /> * @return int|string key<br /> */<br /></span><span class="keyword">function </span><span class="default">array_rand_cryptographically_secure</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">)</span><span class="comment">/*: int|string*/ </span><span class="keyword">{<br />    </span><span class="default">$max </span><span class="keyword">= </span><span class="default">count </span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">;<br />    if (</span><span class="default">$max </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {<br />        throw new </span><span class="default">ValueError </span><span class="keyword">( </span><span class="string">'Argument #1 ($array) cannot be empty' </span><span class="keyword">);<br />    }<br />    return </span><span class="default">key </span><span class="keyword">( </span><span class="default">array_slice </span><span class="keyword">( </span><span class="default">$array</span><span class="keyword">, </span><span class="default">random_int </span><span class="keyword">( </span><span class="default">0</span><span class="keyword">, </span><span class="default">$max </span><span class="keyword">), </span><span class="default">1</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">) );<br />}<br /><br /></span><span class="default">$tests </span><span class="keyword">= [<br />        [</span><span class="default">5</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">],<br />        [</span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">'c' </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">],<br />        [</span><span class="string">'zero'</span><span class="keyword">, </span><span class="default">4 </span><span class="keyword">=&gt; </span><span class="string">'four'</span><span class="keyword">, </span><span class="default">9 </span><span class="keyword">=&gt; </span><span class="string">'nine'</span><span class="keyword">],<br />        [</span><span class="string">"PEAN"</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">],<br />        []<br />];<br />foreach (</span><span class="default">$tests </span><span class="keyword">as </span><span class="default">$test</span><span class="keyword">) {<br />    echo </span><span class="default">array_rand_cryptographically_secure</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span> <br />(this is an improved version, which unlike the first version, avoids copying *all* the keys)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-rand&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-rand.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
