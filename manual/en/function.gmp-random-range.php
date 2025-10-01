<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: gmp_random_range - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.gmp-random-range.php">
 <link rel="shorturl" href="https://www.php.net/gmp-random-range">
 <link rel="alternate" href="https://www.php.net/gmp-random-range" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.gmp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gmp-random-bits.php">
 <link rel="next" href="https://www.php.net/manual/en/function.gmp-random-seed.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.gmp-random-range.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.gmp-random-range.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.gmp-random-range.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.gmp-random-range.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.gmp-random-range.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.gmp-random-range.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.gmp-random-range.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.gmp-random-range.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.gmp-random-range.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.gmp-random-range.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.gmp-random-range.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get a uniformly selected integer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: gmp_random_range - Manual" />
<meta name="twitter:description" content="Get a uniformly selected integer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: gmp_random_range - Manual" />
<meta itemprop="description" content="Get a uniformly selected integer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get a uniformly selected integer" />

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
        <a href="function.gmp-random-seed.php">
          gmp_random_seed &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gmp-random-bits.php">
          &laquo; gmp_random_bits        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.gmp.php'>GMP</a></li>      <li><a href='ref.gmp.php'>GMP Functions</a></li>      </ul>
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
            <option value='en/function.gmp-random-range.php' selected="selected">English</option>
            <option value='de/function.gmp-random-range.php'>German</option>
            <option value='es/function.gmp-random-range.php'>Spanish</option>
            <option value='fr/function.gmp-random-range.php'>French</option>
            <option value='it/function.gmp-random-range.php'>Italian</option>
            <option value='ja/function.gmp-random-range.php'>Japanese</option>
            <option value='pt_BR/function.gmp-random-range.php'>Brazilian Portuguese</option>
            <option value='ru/function.gmp-random-range.php'>Russian</option>
            <option value='tr/function.gmp-random-range.php'>Turkish</option>
            <option value='uk/function.gmp-random-range.php'>Ukrainian</option>
            <option value='zh/function.gmp-random-range.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.gmp-random-range" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">gmp_random_range</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.6.3, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gmp_random_range</span> &mdash; <span class="dc-title">Get a uniformly selected integer</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.gmp-random-range-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>gmp_random_range</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.gmp.php" class="type GMP">GMP</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$min</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="class.gmp.php" class="type GMP">GMP</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$max</code></span>): <span class="type"><a href="class.gmp.php" class="type GMP">GMP</a></span></div>

  <p class="para rdfs-comment">
   Generate a random number. The number will be between
   <code class="parameter">min</code> and <code class="parameter">max</code>.
  </p>
  <p class="para">
   <code class="parameter">min</code> and <code class="parameter">max</code> can both be negative,
   but <code class="parameter">min</code> must always be less than <code class="parameter">max</code>.
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


 <div class="refsect1 parameters" id="refsect1-function.gmp-random-range-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">min</code></dt>
     <dd>
      <p class="para">
       A GMP number representing the lower bound for the random number
      </p>
     </dd>
    
    
     <dt><code class="parameter">max</code></dt>
     <dd>
      <p class="para">
       A GMP number representing the upper bound for the random number
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.gmp-random-range-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a <span class="classname"><a href="class.gmp.php" class="classname">GMP</a></span> object which contains
   a uniformly selected integer from the closed interval
   [<code class="parameter">min</code>, <code class="parameter">max</code>]. Both
   <code class="parameter">min</code> and <code class="parameter">max</code> are
   possible return values.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.gmp-random-range-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If <code class="parameter">max</code> is less than <code class="parameter">min</code>,
   a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> will be thrown.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.gmp-random-range-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3345">
    <p><strong>Example #1 <span class="function"><strong>gmp_random_range()</strong></span> example</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$rand1 </span><span style="color: #007700">= </span><span style="color: #0000BB">gmp_random_range</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);    </span><span style="color: #FF8000">// random number between 0 and 100<br /></span><span style="color: #0000BB">$rand2 </span><span style="color: #007700">= </span><span style="color: #0000BB">gmp_random_range</span><span style="color: #007700">(-</span><span style="color: #0000BB">100</span><span style="color: #007700">, -</span><span style="color: #0000BB">10</span><span style="color: #007700">); </span><span style="color: #FF8000">// random number between -100 and -10<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">gmp_strval</span><span style="color: #007700">(</span><span style="color: #0000BB">$rand1</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">gmp_strval</span><span style="color: #007700">(</span><span style="color: #0000BB">$rand2</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">42
-67</pre>
</div>
    </div>
   </div>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gmp/functions/gmp-random-range.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.gmp-random-range%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.gmp-random-range&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gmp-random-range.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.gmp.php">GMP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.gmp-abs.php" title="gmp_&#8203;abs">gmp_&#8203;abs</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-add.php" title="gmp_&#8203;add">gmp_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-and.php" title="gmp_&#8203;and">gmp_&#8203;and</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-binomial.php" title="gmp_&#8203;binomial">gmp_&#8203;binomial</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-clrbit.php" title="gmp_&#8203;clrbit">gmp_&#8203;clrbit</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-cmp.php" title="gmp_&#8203;cmp">gmp_&#8203;cmp</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-com.php" title="gmp_&#8203;com">gmp_&#8203;com</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-div.php" title="gmp_&#8203;div">gmp_&#8203;div</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-div-q.php" title="gmp_&#8203;div_&#8203;q">gmp_&#8203;div_&#8203;q</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-div-qr.php" title="gmp_&#8203;div_&#8203;qr">gmp_&#8203;div_&#8203;qr</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-div-r.php" title="gmp_&#8203;div_&#8203;r">gmp_&#8203;div_&#8203;r</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-divexact.php" title="gmp_&#8203;divexact">gmp_&#8203;divexact</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-export.php" title="gmp_&#8203;export">gmp_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-fact.php" title="gmp_&#8203;fact">gmp_&#8203;fact</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-gcd.php" title="gmp_&#8203;gcd">gmp_&#8203;gcd</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-gcdext.php" title="gmp_&#8203;gcdext">gmp_&#8203;gcdext</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-hamdist.php" title="gmp_&#8203;hamdist">gmp_&#8203;hamdist</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-import.php" title="gmp_&#8203;import">gmp_&#8203;import</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-init.php" title="gmp_&#8203;init">gmp_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-intval.php" title="gmp_&#8203;intval">gmp_&#8203;intval</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-invert.php" title="gmp_&#8203;invert">gmp_&#8203;invert</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-jacobi.php" title="gmp_&#8203;jacobi">gmp_&#8203;jacobi</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-kronecker.php" title="gmp_&#8203;kronecker">gmp_&#8203;kronecker</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-lcm.php" title="gmp_&#8203;lcm">gmp_&#8203;lcm</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-legendre.php" title="gmp_&#8203;legendre">gmp_&#8203;legendre</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-mod.php" title="gmp_&#8203;mod">gmp_&#8203;mod</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-mul.php" title="gmp_&#8203;mul">gmp_&#8203;mul</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-neg.php" title="gmp_&#8203;neg">gmp_&#8203;neg</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-nextprime.php" title="gmp_&#8203;nextprime">gmp_&#8203;nextprime</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-or.php" title="gmp_&#8203;or">gmp_&#8203;or</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-perfect-power.php" title="gmp_&#8203;perfect_&#8203;power">gmp_&#8203;perfect_&#8203;power</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-perfect-square.php" title="gmp_&#8203;perfect_&#8203;square">gmp_&#8203;perfect_&#8203;square</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-popcount.php" title="gmp_&#8203;popcount">gmp_&#8203;popcount</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-pow.php" title="gmp_&#8203;pow">gmp_&#8203;pow</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-powm.php" title="gmp_&#8203;powm">gmp_&#8203;powm</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-prob-prime.php" title="gmp_&#8203;prob_&#8203;prime">gmp_&#8203;prob_&#8203;prime</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-random-bits.php" title="gmp_&#8203;random_&#8203;bits">gmp_&#8203;random_&#8203;bits</a>
                        </li>
                                                <li class="current">
                            <a href="function.gmp-random-range.php" title="gmp_&#8203;random_&#8203;range">gmp_&#8203;random_&#8203;range</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-random-seed.php" title="gmp_&#8203;random_&#8203;seed">gmp_&#8203;random_&#8203;seed</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-root.php" title="gmp_&#8203;root">gmp_&#8203;root</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-rootrem.php" title="gmp_&#8203;rootrem">gmp_&#8203;rootrem</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-scan0.php" title="gmp_&#8203;scan0">gmp_&#8203;scan0</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-scan1.php" title="gmp_&#8203;scan1">gmp_&#8203;scan1</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-setbit.php" title="gmp_&#8203;setbit">gmp_&#8203;setbit</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-sign.php" title="gmp_&#8203;sign">gmp_&#8203;sign</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-sqrt.php" title="gmp_&#8203;sqrt">gmp_&#8203;sqrt</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-sqrtrem.php" title="gmp_&#8203;sqrtrem">gmp_&#8203;sqrtrem</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-strval.php" title="gmp_&#8203;strval">gmp_&#8203;strval</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-sub.php" title="gmp_&#8203;sub">gmp_&#8203;sub</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-testbit.php" title="gmp_&#8203;testbit">gmp_&#8203;testbit</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-xor.php" title="gmp_&#8203;xor">gmp_&#8203;xor</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.gmp-random.php" title="gmp_&#8203;random">gmp_&#8203;random</a>
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
