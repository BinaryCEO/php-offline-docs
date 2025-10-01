<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Random\Randomizer::getFloat - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/random-randomizer.getfloat.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/random-randomizer.getfloat.php">
 <link rel="alternate" href="https://www.php.net/manual/en/random-randomizer.getfloat.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.random-randomizer.php">
 <link rel="prev" href="https://www.php.net/manual/en/random-randomizer.getbytesfromstring.php">
 <link rel="next" href="https://www.php.net/manual/en/random-randomizer.getint.php">

 <link rel="alternate" href="https://www.php.net/manual/en/random-randomizer.getfloat.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/random-randomizer.getfloat.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/random-randomizer.getfloat.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/random-randomizer.getfloat.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/random-randomizer.getfloat.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/random-randomizer.getfloat.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/random-randomizer.getfloat.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/random-randomizer.getfloat.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/random-randomizer.getfloat.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/random-randomizer.getfloat.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/random-randomizer.getfloat.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get a uniformly selected float" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Random\Randomizer::getFloat - Manual" />
<meta name="twitter:description" content="Get a uniformly selected float" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Random\Randomizer::getFloat - Manual" />
<meta itemprop="description" content="Get a uniformly selected float" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get a uniformly selected float" />

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
        <a href="random-randomizer.getint.php">
          Random\Randomizer::getInt &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="random-randomizer.getbytesfromstring.php">
          &laquo; Random\Randomizer::getBytesFromString        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.random.php'>Random</a></li>      <li><a href='class.random-randomizer.php'>Random\Randomizer</a></li>      </ul>
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
            <option value='en/random-randomizer.getfloat.php' selected="selected">English</option>
            <option value='de/random-randomizer.getfloat.php'>German</option>
            <option value='es/random-randomizer.getfloat.php'>Spanish</option>
            <option value='fr/random-randomizer.getfloat.php'>French</option>
            <option value='it/random-randomizer.getfloat.php'>Italian</option>
            <option value='ja/random-randomizer.getfloat.php'>Japanese</option>
            <option value='pt_BR/random-randomizer.getfloat.php'>Brazilian Portuguese</option>
            <option value='ru/random-randomizer.getfloat.php'>Russian</option>
            <option value='tr/random-randomizer.getfloat.php'>Turkish</option>
            <option value='uk/random-randomizer.getfloat.php'>Ukrainian</option>
            <option value='zh/random-randomizer.getfloat.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="random-randomizer.getfloat" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Random\Randomizer::getFloat</h1>
  <p class="verinfo">(PHP 8 &gt;= 8.3.0)</p><p class="refpurpose"><span class="refname">Random\Randomizer::getFloat</span> &mdash; <span class="dc-title">Get a uniformly selected float</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-random-randomizer.getfloat-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Random\Randomizer::getFloat</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$min</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$max</code></span>, <span class="methodparam"><span class="type"><a href="enum.random-intervalboundary.php" class="type Random\IntervalBoundary">Random\IntervalBoundary</a></span> <code class="parameter">$boundary</code><span class="initializer"> = Random\IntervalBoundary::ClosedOpen</span></span>): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>

  <p class="para rdfs-comment">
   Returns a uniformly selected, equidistributed float from a requested interval.
  </p>
  <p class="para">
   Due to the limited precision, not all real numbers can be exactly represented as
   a floating point number.

   If a number cannot be represented exactly, it is rounded to the nearest
   representable exact value.

   Furthermore, floats are not equally dense across the whole number line.

   Because floats use a binary exponent, the distance between two neighboring
   floats doubles at each power of two.

   In other words: There are the same number of representable floats between
   <code class="literal">1.0</code> and <code class="literal">2.0</code>
   as they are between
   <code class="literal">2.0</code> and <code class="literal">4.0</code>,
   <code class="literal">4.0</code> and <code class="literal">8.0</code>,
   <code class="literal">8.0</code> and <code class="literal">16.0</code>,
   and so on.
  </p>
  <p class="para">
   Randomly sampling an arbitrary number within the requested interval, for example
   by dividing two integers, might result in a biased distribution for this reason.

   The necessary rounding will cause some floats to be returned more often than
   others, especially around powers of two when the density of floats changes.
  </p>
  <p class="para">
   <span class="methodname"><strong>Random\Randomizer::getFloat()</strong></span> implements an algorithm that
   will return a uniformly selected float from the largest possible set of exactly
   representable and equidistributed floats within the requested interval.

   The distance between the selectable floats (“step size”) matches the distance
   between the floats with the lowest density, i.e. the distance between floats
   at interval boundary with the larger absolute value.

   This means that not all representable floats within a given interval may be
   returned if the interval crosses one or more powers of two.

   Stepping will start from the interval boundary with the larger absolute value
   to ensure the steps align with the exactly representable floats.
  </p>
  <p class="para">
   Closed interval boundaries will always be included in the set of selectable
   floats.

   Thus, if the size of the interval is not an exact multiple of the step size and
   the boundary with the smaller absolute value is a closed boundary, the distance
   between that boundary and its nearest selectable float will be smaller than the
   step size.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    Post-processing the returned floats is likely going to break the uniform
    equidistribution, because the intermediate floats within a mathematical
    operation are experiencing implicit rounding.

    The requested interval should match the desired interval as closely as possible
    and rounding should only be performed as an explicit operation right before
    displaying the selected number to a user.
   </p>
  </div>
  <div class="refsect2 unknown-28" id="refsect2-random-randomizer.getfloat-unknown-28">
   <h4 class="title">Explanation of the Algorithm Using Example Values</h4>
   <p class="para">
    To give an example of how the algorithm works, consider a floating point
    representation that uses a 3-bit mantissa.

    This representation is capable of representing 8 different floating point
    values between consecutive powers of two.

    This means that between
    <code class="literal">1.0</code> and <code class="literal">2.0</code> all steps of size <code class="literal">0.125</code>
    are exactly representable and between <code class="literal">2.0</code> and <code class="literal">4.0</code>
    all steps of size <code class="literal">0.25</code> are exactly representable.

    In reality PHP’s floats use a 52-bit mantissa and can represent 2<sup class="superscript">52</sup>
    different values between each power of two.

    This means that
    <ul class="simplelist">
     <li><code class="literal">1.0</code></li>
     <li><code class="literal">1.125</code></li>
     <li><code class="literal">1.25</code></li>
     <li><code class="literal">1.375</code></li>
     <li><code class="literal">1.5</code></li>
     <li><code class="literal">1.625</code></li>
     <li><code class="literal">1.75</code></li>
     <li><code class="literal">1.875</code></li>
     <li><code class="literal">2.0</code></li>
     <li><code class="literal">2.25</code></li>
     <li><code class="literal">2.5</code></li>
     <li><code class="literal">2.75</code></li>
     <li><code class="literal">3.0</code></li>
     <li><code class="literal">3.25</code></li>
     <li><code class="literal">3.5</code></li>
     <li><code class="literal">3.75</code></li>
     <li><code class="literal">4.0</code></li>
    </ul>
    are the exactly representable floats between <code class="literal">1.0</code>
    and <code class="literal">4.0</code>.
   </p>
   <p class="para">
    Now consider that <code class="code">$randomizer-&gt;getFloat(1.625, 2.5, IntervalBoundary::ClosedOpen)</code>
    is called, i.e. a random float starting at <code class="literal">1.625</code> until, but not including,
    <code class="literal">2.5</code> is requested.

    The algorithm first determines the step size at the boundary with the larger absolute
    value (<code class="literal">2.5</code>). The step size at that boundary is <code class="literal">0.25</code>.
   </p>
   <p class="para">
    Note that the size of the requested interval is <code class="literal">0.875</code>, which is
    not an exact multiple of <code class="literal">0.25</code>.

    If the algorithm would start stepping at the lower bound <code class="literal">1.625</code>, it
    would encounter <code class="literal">2.125</code>, which is not exactly representable and would
    experience implicit rounding.

    Thus the algorithm starts stepping at the upper boundary <code class="literal">2.5</code>.

    The selectable values are:
    <ul class="simplelist">
     <li><code class="literal">2.25</code></li>
     <li><code class="literal">2.0</code></li>
     <li><code class="literal">1.75</code></li>
     <li><code class="literal">1.625</code></li>
    </ul>

    <code class="literal">2.5</code> is not included, because the upper boundary of the requested
    interval is an open boundary.

    <code class="literal">1.625</code> is included, even though its distance to the nearest value
    <code class="literal">1.75</code> is <code class="literal">0.125</code>, which is smaller than the
    previously determined step size of <code class="literal">0.25</code>.

    The reason for that is that the requested interval is closed at the lower boundary
    (<code class="literal">1.625</code>) and closed boundaries are always included.
   </p>
   <p class="para">
    Finally the algorithm uniformly selects one of the four selectable values at random
    and returns it.
   </p>
   <div class="refsect3 unknown-31" id="random-randomizer.getfloat.affine-transformation">
    <h5 class="title">Why Dividing Two Integers Does Not Work</h5>
    <p class="para">
     In the previous example, there are eight representable floating point numbers
     between each sub-interval delimited by a power of two.

     To give an example why dividing two integers would not work well to generate
     a random float, consider that there are 16 equidistributed floating point numbers
     in the right-open interval from <code class="literal">0.0</code> until, but not including,
     <code class="literal">1.0</code>. Half of them are the eight exactly representable values
     between <code class="literal">0.5</code> and <code class="literal">1.0</code>, the other half are the
     values between <code class="literal">0.0</code> and <code class="literal">1.0</code> that the step
     size of <code class="literal">0.0625</code>.

     These can easily be generated by dividing a random integer between <code class="literal">0</code>
     and <code class="literal">15</code> by <code class="literal">16</code> to obtain one of:

     <ul class="simplelist">
      <li><code class="literal">0.0</code></li>
      <li><code class="literal">0.0625</code></li>
      <li><code class="literal">0.125</code></li>
      <li><code class="literal">0.1875</code></li>
      <li><code class="literal">0.25</code></li>
      <li><code class="literal">0.3125</code></li>
      <li><code class="literal">0.375</code></li>
      <li><code class="literal">0.4375</code></li>
      <li><code class="literal">0.5</code></li>
      <li><code class="literal">0.5625</code></li>
      <li><code class="literal">0.625</code></li>
      <li><code class="literal">0.6875</code></li>
      <li><code class="literal">0.75</code></li>
      <li><code class="literal">0.8125</code></li>
      <li><code class="literal">0.875</code></li>
      <li><code class="literal">0.9375</code></li>
     </ul>
    </p>
    <p class="para">
     This random float could be scaled to right-open interval from <code class="literal">1.625</code>
     until, but not including, <code class="literal">2.75</code> by multiplying it with the size
     of the interval (<code class="literal">0.875</code>) and adding the minimum <code class="literal">1.625</code>.
     This so-called affine transformation would result in the values:

     <ul class="simplelist">
      <li><code class="literal">1.625</code> rounded to <code class="literal">1.625</code></li>
      <li><code class="literal">1.679</code> rounded to <code class="literal">1.625</code></li>
      <li><code class="literal">1.734</code> rounded to <code class="literal">1.75</code></li>
      <li><code class="literal">1.789</code> rounded to <code class="literal">1.75</code></li>
      <li><code class="literal">1.843</code> rounded to <code class="literal">1.875</code></li>
      <li><code class="literal">1.898</code> rounded to <code class="literal">1.875</code></li>
      <li><code class="literal">1.953</code> rounded to <code class="literal">2.0</code></li>
      <li><code class="literal">2.007</code> rounded to <code class="literal">2.0</code></li>
      <li><code class="literal">2.062</code> rounded to <code class="literal">2.0</code></li>
      <li><code class="literal">2.117</code> rounded to <code class="literal">2.0</code></li>
      <li><code class="literal">2.171</code> rounded to <code class="literal">2.25</code></li>
      <li><code class="literal">2.226</code> rounded to <code class="literal">2.25</code></li>
      <li><code class="literal">2.281</code> rounded to <code class="literal">2.25</code></li>
      <li><code class="literal">2.335</code> rounded to <code class="literal">2.25</code></li>
      <li><code class="literal">2.390</code> rounded to <code class="literal">2.5</code></li>
      <li><code class="literal">2.445</code> rounded to <code class="literal">2.5</code></li>
     </ul>

     Note how the upper boundary of <code class="literal">2.5</code> would be returned, despite
     being an open boundary and thus being excluded.

     Also note how <code class="literal">2.0</code> and <code class="literal">2.25</code> are twice as
     likely to be returned compared to the other values.
    </p>
   </div>

  </div>

 </div>


 <div class="refsect1 parameters" id="refsect1-random-randomizer.getfloat-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">min</code></dt>
     <dd>
      <p class="para">
       The lower bound of the interval.
      </p>
     </dd>
    
    
     <dt><code class="parameter">max</code></dt>
     <dd>
      <p class="para">
       The upper bound of the interval.
      </p>
     </dd>
    
    
     <dt><code class="parameter">boundary</code></dt>
     <dd>
      <p class="para">
       Specifies whether the interval boundaries are possible return values.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-random-randomizer.getfloat-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A uniformly selected, equidistributed float from the interval specified by <code class="parameter">min</code>,
   <code class="parameter">max</code>, and <code class="parameter">boundary</code>.

   Whether <code class="parameter">min</code> and <code class="parameter">max</code> are possible return values depends
   on the value of <code class="parameter">boundary</code>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-random-randomizer.getfloat-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     If the value of <code class="parameter">min</code> is not finite (<span class="function"><a href="function.is-finite.php" class="function">is_finite()</a></span>),
     a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> will be thrown.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     If the value of <code class="parameter">max</code> is not finite (<span class="function"><a href="function.is-finite.php" class="function">is_finite()</a></span>),
     a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> will be thrown.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     If the requested interval does not contain any values,
     a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> will be thrown.
    </span>
   </li>
   
 <li class="listitem">
  <span class="simpara">
   Any <span class="classname"><a href="class.throwable.php" class="classname">Throwable</a></span>s thrown by the <span class="methodname"><a href="random-engine.generate.php" class="methodname">Random\Engine::generate()</a></span> method
   of the underlying <a href="class.random-randomizer.php#random-randomizer.props.engine" class="link"><code class="literal">Random\Randomizer::$engine</code></a>.
  </span>
 </li>

  </ul>
 </div>


 <div class="refsect1 examples" id="refsect1-random-randomizer.getfloat-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-3779">
   <p><strong>Example #1 <span class="methodname"><strong>Random\Randomizer::getFloat()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$randomizer </span><span style="color: #007700">= new </span><span style="color: #0000BB">\Random\Randomizer</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Note that the latitude granularity is double the<br />// longitude’s granularity.<br />//<br />// For the latitude the value may be both -90 and 90.<br />// For the longitude the value may be 180, but not -180, because<br />// -180 and 180 refer to the same longitude.<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(<br />    </span><span style="color: #DD0000">"Lat: %+.6f Lng: %+.6f"</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">$randomizer</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFloat</span><span style="color: #007700">(-</span><span style="color: #0000BB">90</span><span style="color: #007700">, </span><span style="color: #0000BB">90</span><span style="color: #007700">, </span><span style="color: #0000BB">\Random\IntervalBoundary</span><span style="color: #007700">::</span><span style="color: #0000BB">ClosedClosed</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$randomizer</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFloat</span><span style="color: #007700">(-</span><span style="color: #0000BB">180</span><span style="color: #007700">, </span><span style="color: #0000BB">180</span><span style="color: #007700">, </span><span style="color: #0000BB">\Random\IntervalBoundary</span><span style="color: #007700">::</span><span style="color: #0000BB">OpenClosed</span><span style="color: #007700">),<br />);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Lat: +69.244304 Lng: -53.548951</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 notes" id="refsect1-random-randomizer.getfloat-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This method implements the γ-section algorithm as published in
    <a href="https://dl.acm.org/doi/10.1145/3503512" class="link external">&raquo;&nbsp;
     Drawing Random Floating-Point Numbers from an Interval.
     Frédéric Goualard, ACM Trans. Model. Comput. Simul., 32:3, 2022
    </a>
    to obtain the desired behavioral properties.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-random-randomizer.getfloat-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="methodname"><a href="random-randomizer.nextfloat.php" class="methodname" rel="rdfs-seeAlso">Random\Randomizer::nextFloat()</a> - Get a float from the right-open interval [0.0, 1.0)</span></li>
   <li><span class="methodname"><a href="random-randomizer.getint.php" class="methodname" rel="rdfs-seeAlso">Random\Randomizer::getInt()</a> - Get a uniformly selected integer</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/random/random/randomizer/getfloat.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Frandom-randomizer.getfloat%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=random-randomizer.getfloat&amp;repo=en&amp;redirect=https://www.php.net/manual/en/random-randomizer.getfloat.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.random-randomizer.php">Random\Randomizer</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="random-randomizer.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="random-randomizer.getbytes.php" title="getBytes">getBytes</a>
                        </li>
                                                <li class="">
                            <a href="random-randomizer.getbytesfromstring.php" title="getBytesFromString">getBytesFromString</a>
                        </li>
                                                <li class="current">
                            <a href="random-randomizer.getfloat.php" title="getFloat">getFloat</a>
                        </li>
                                                <li class="">
                            <a href="random-randomizer.getint.php" title="getInt">getInt</a>
                        </li>
                                                <li class="">
                            <a href="random-randomizer.nextfloat.php" title="nextFloat">nextFloat</a>
                        </li>
                                                <li class="">
                            <a href="random-randomizer.nextint.php" title="nextInt">nextInt</a>
                        </li>
                                                <li class="">
                            <a href="random-randomizer.pickarraykeys.php" title="pickArrayKeys">pickArrayKeys</a>
                        </li>
                                                <li class="">
                            <a href="random-randomizer.serialize.php" title="_&#8203;_&#8203;serialize">_&#8203;_&#8203;serialize</a>
                        </li>
                                                <li class="">
                            <a href="random-randomizer.shufflearray.php" title="shuffleArray">shuffleArray</a>
                        </li>
                                                <li class="">
                            <a href="random-randomizer.shufflebytes.php" title="shuffleBytes">shuffleBytes</a>
                        </li>
                                                <li class="">
                            <a href="random-randomizer.unserialize.php" title="_&#8203;_&#8203;unserialize">_&#8203;_&#8203;unserialize</a>
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
