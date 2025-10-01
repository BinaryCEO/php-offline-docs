<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: round - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.round.php">
 <link rel="shorturl" href="https://www.php.net/round">
 <link rel="alternate" href="https://www.php.net/round" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.math.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.rad2deg.php">
 <link rel="next" href="https://www.php.net/manual/en/function.sin.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.round.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.round.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.round.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.round.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.round.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.round.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.round.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.round.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.round.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.round.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.round.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Rounds a float" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: round - Manual" />
<meta name="twitter:description" content="Rounds a float" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: round - Manual" />
<meta itemprop="description" content="Rounds a float" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Rounds a float" />

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
        <a href="function.sin.php">
          sin &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.rad2deg.php">
          &laquo; rad2deg        </a>
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
            <option value='en/function.round.php' selected="selected">English</option>
            <option value='de/function.round.php'>German</option>
            <option value='es/function.round.php'>Spanish</option>
            <option value='fr/function.round.php'>French</option>
            <option value='it/function.round.php'>Italian</option>
            <option value='ja/function.round.php'>Japanese</option>
            <option value='pt_BR/function.round.php'>Brazilian Portuguese</option>
            <option value='ru/function.round.php'>Russian</option>
            <option value='tr/function.round.php'>Turkish</option>
            <option value='uk/function.round.php'>Ukrainian</option>
            <option value='zh/function.round.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.round" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">round</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">round</span> &mdash; <span class="dc-title">Rounds a float</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.round-description">
  <h3 class="title">Description</h3>
   <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>round</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$num</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$precision</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="enum.roundingmode.php" class="type RoundingMode">RoundingMode</a></span></span> <code class="parameter">$mode</code><span class="initializer"> = RoundingMode::HalfAwayFromZero</span></span>): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>

  <p class="para rdfs-comment">
   Returns the rounded value of <code class="parameter">num</code> to
   specified <code class="parameter">precision</code>
   (number of digits after the decimal point).
   <code class="parameter">precision</code> can also be negative or zero (default).
  </p>
  
 </div>

 <div class="refsect1 parameters" id="refsect1-function.round-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">num</code></dt>
     <dd>
      <p class="para">
       The value to round.
      </p>
     </dd>
    
    
     <dt><code class="parameter">precision</code></dt>
     <dd>
      <p class="para">
       The optional number of decimal digits to round to.
      </p>
      <p class="para">
       If the <code class="parameter">precision</code> is positive, <code class="parameter">num</code> is
       rounded to <code class="parameter">precision</code> significant digits after the decimal point.
      </p>
      <p class="para">
       If the <code class="parameter">precision</code> is negative, <code class="parameter">num</code> is
       rounded to <code class="parameter">precision</code> significant digits before the decimal point,
       i.e. to the nearest multiple of <code class="code">pow(10, -$precision)</code>, e.g. for a
       <code class="parameter">precision</code> of -1 <code class="parameter">num</code> is rounded to tens,
       for a <code class="parameter">precision</code> of -2 to hundreds, etc.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       Use <span class="enumname"><a href="enum.roundingmode.php" class="enumname">RoundingMode</a></span> or one of the following constants to specify the mode in which rounding occurs.
       <table class="doctable informaltable">
        
         <thead>
          <tr>
           <th>Constants</th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><strong><code><a href="math.constants.php#constant.php-round-half-up">PHP_ROUND_HALF_UP</a></code></strong></td>
           <td>
            Rounds <code class="parameter">num</code> away from zero when it is half way there,
            making 1.5 into 2 and -1.5 into -2.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="math.constants.php#constant.php-round-half-down">PHP_ROUND_HALF_DOWN</a></code></strong></td>
           <td>
            Rounds <code class="parameter">num</code> towards zero when it is half way there,
            making 1.5 into 1 and -1.5 into -1.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="math.constants.php#constant.php-round-half-even">PHP_ROUND_HALF_EVEN</a></code></strong></td>
           <td>
            Rounds <code class="parameter">num</code> towards the nearest even value when it is half way
            there, making both 1.5 and 2.5 into 2.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="math.constants.php#constant.php-round-half-odd">PHP_ROUND_HALF_ODD</a></code></strong></td>
           <td>
            Rounds <code class="parameter">num</code> towards the nearest odd value when it is half way
            there, making 1.5 into 1 and 2.5 into 3.
           </td>
          </tr>

         </tbody>
        
       </table>

       However, please note that some newly added modes only exist in <a href="enum.roundingmode.php" class="link">RoundingMode</a>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.round-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The value rounded to the given <code class="parameter">precision</code> as a <span class="type"><a href="language.types.float.php" class="type float">float</a></span>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.round-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   The function throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if <code class="parameter">mode</code> is
   invalid.
   Prior to PHP 8.4.0, an invalid mode would silently default to <strong><code><a href="math.constants.php#constant.php-round-half-up">PHP_ROUND_HALF_UP</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.round-changelog">
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
      <td>8.4.0</td>
      <td>
       Four new rounding modes have been added.
      </td>
     </tr>

     <tr>
      <td>8.4.0</td>
      <td>
       Now throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
       <code class="parameter">mode</code> is invalid.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">num</code> no longer accepts internal objects which support
       numeric conversion.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.round-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3389">
    <p><strong>Example #1 <span class="function"><strong>round()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">3.4</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">3.5</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">3.6</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">3.6</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">5.045</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">5.055</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">345</span><span style="color: #007700">, -</span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">345</span><span style="color: #007700">, -</span><span style="color: #0000BB">3</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">678</span><span style="color: #007700">, -</span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">678</span><span style="color: #007700">, -</span><span style="color: #0000BB">3</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">float(3)
float(4)
float(4)
float(4)
float(5.05)
float(5.06)
float(300)
float(0)
float(700)
float(1000)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-3390">
    <p><strong>Example #2 How <code class="parameter">precision</code> affects a float</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$number </span><span style="color: #007700">= </span><span style="color: #0000BB">135.79</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$number</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$number</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$number</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$number</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$number</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$number</span><span style="color: #007700">, -</span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$number</span><span style="color: #007700">, -</span><span style="color: #0000BB">3</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">float(135.79)
float(135.79)
float(135.8)
float(136)
float(140)
float(100)
float(0)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-3391">
    <p><strong>Example #3 <code class="parameter">mode</code> examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Rounding modes with 9.5' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">9.5</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_UP</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">9.5</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_DOWN</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">9.5</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_EVEN</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">9.5</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_ODD</span><span style="color: #007700">));<br /><br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Rounding modes with 8.5' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">8.5</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_UP</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">8.5</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_DOWN</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">8.5</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_EVEN</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">8.5</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_ODD</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Rounding modes with 9.5
float(10)
float(9)
float(10)
float(9)

Rounding modes with 8.5
float(9)
float(8)
float(8)
float(9)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-3392">
    <p><strong>Example #4 <code class="parameter">mode</code> with <code class="parameter">precision</code> examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Using PHP_ROUND_HALF_UP with 1 decimal digit precision' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">( </span><span style="color: #0000BB">1.55</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_UP</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(-</span><span style="color: #0000BB">1.55</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_UP</span><span style="color: #007700">));<br /><br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Using PHP_ROUND_HALF_DOWN with 1 decimal digit precision' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">( </span><span style="color: #0000BB">1.55</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_DOWN</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(-</span><span style="color: #0000BB">1.55</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_DOWN</span><span style="color: #007700">));<br /><br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Using PHP_ROUND_HALF_EVEN with 1 decimal digit precision' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">( </span><span style="color: #0000BB">1.55</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_EVEN</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(-</span><span style="color: #0000BB">1.55</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_EVEN</span><span style="color: #007700">));<br /><br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Using PHP_ROUND_HALF_ODD with 1 decimal digit precision' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">( </span><span style="color: #0000BB">1.55</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_ODD</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(-</span><span style="color: #0000BB">1.55</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_ROUND_HALF_ODD</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Using PHP_ROUND_HALF_UP with 1 decimal digit precision
float(1.6)
float(-1.6)

Using PHP_ROUND_HALF_DOWN with 1 decimal digit precision
float(1.5)
float(-1.5)

Using PHP_ROUND_HALF_EVEN with 1 decimal digit precision
float(1.6)
float(-1.6)

Using PHP_ROUND_HALF_ODD with 1 decimal digit precision
float(1.5)
float(-1.5)</pre>
</div>
    </div>
   </div>
  <div class="example" id="example-3393">
   <p><strong>Example #5 Example of using <span class="enumname"><a href="enum.roundingmode.php" class="enumname">RoundingMode</a></span></strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">cases</span><span style="color: #007700">() as </span><span style="color: #0000BB">$mode</span><span style="color: #007700">) {<br />    foreach ([<br />        </span><span style="color: #0000BB">8.5</span><span style="color: #007700">,<br />        </span><span style="color: #0000BB">9.5</span><span style="color: #007700">,<br />        -</span><span style="color: #0000BB">3.5</span><span style="color: #007700">,<br />    ] as </span><span style="color: #0000BB">$number</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%-17s: %+.17g -&gt; %+.17g\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$mode</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">, </span><span style="color: #0000BB">$number</span><span style="color: #007700">, </span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$number</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$mode</span><span style="color: #007700">));<br />    }<br />    echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">HalfAwayFromZero : +8.5 -&gt; +9
HalfAwayFromZero : +9.5 -&gt; +10
HalfAwayFromZero : -3.5 -&gt; -4

HalfTowardsZero  : +8.5 -&gt; +8
HalfTowardsZero  : +9.5 -&gt; +9
HalfTowardsZero  : -3.5 -&gt; -3

HalfEven         : +8.5 -&gt; +8
HalfEven         : +9.5 -&gt; +10
HalfEven         : -3.5 -&gt; -4

HalfOdd          : +8.5 -&gt; +9
HalfOdd          : +9.5 -&gt; +9
HalfOdd          : -3.5 -&gt; -3

TowardsZero      : +8.5 -&gt; +8
TowardsZero      : +9.5 -&gt; +9
TowardsZero      : -3.5 -&gt; -3

AwayFromZero     : +8.5 -&gt; +9
AwayFromZero     : +9.5 -&gt; +10
AwayFromZero     : -3.5 -&gt; -4

NegativeInfinity : +8.5 -&gt; +8
NegativeInfinity : +9.5 -&gt; +9
NegativeInfinity : -3.5 -&gt; -4

PositiveInfinity : +8.5 -&gt; +9
PositiveInfinity : +9.5 -&gt; +10
PositiveInfinity : -3.5 -&gt; -3</pre>
</div>
   </div>
  </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.round-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ceil.php" class="function" rel="rdfs-seeAlso">ceil()</a> - Round fractions up</span></li>
    <li><span class="function"><a href="function.floor.php" class="function" rel="rdfs-seeAlso">floor()</a> - Round fractions down</span></li>
    <li><span class="function"><a href="function.number-format.php" class="function" rel="rdfs-seeAlso">number_format()</a> - Format a number with grouped thousands</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/math/functions/round.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.round%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.round&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.round.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114573">  <div class="votes">
    <div id="Vu114573">
    <a href="/manual/vote-note.php?id=114573&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114573">
    <a href="/manual/vote-note.php?id=114573&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114573" title="80% like this...">
    327
    </div>
  </div>
  <a href="#114573" class="name">
  <strong class="user"><em>takingsides at gmail dot com</em></strong></a><a class="genanchor" href="#114573"> &para;</a><div class="date" title="2014-03-07 03:00"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114573">
<div class="phpcode"><code><span class="html">In my opinion this function lacks two flags:<br /><br />- PHP_ROUND_UP - Always round up.<br />- PHP_ROUND_DOWN - Always round down.<br /><br />In accounting, it's often necessary to always round up, or down to a precision of thousandths.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">round_up</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$precision </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">)<br />{<br />    </span><span class="default">$fig </span><span class="keyword">= (int) </span><span class="default">str_pad</span><span class="keyword">(</span><span class="string">'1'</span><span class="keyword">, </span><span class="default">$precision</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">);<br />    return (</span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$number </span><span class="keyword">* </span><span class="default">$fig</span><span class="keyword">) / </span><span class="default">$fig</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">round_down</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$precision </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">)<br />{<br />    </span><span class="default">$fig </span><span class="keyword">= (int) </span><span class="default">str_pad</span><span class="keyword">(</span><span class="string">'1'</span><span class="keyword">, </span><span class="default">$precision</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">);<br />    return (</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$number </span><span class="keyword">* </span><span class="default">$fig</span><span class="keyword">) / </span><span class="default">$fig</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120467">  <div class="votes">
    <div id="Vu120467">
    <a href="/manual/vote-note.php?id=120467&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120467">
    <a href="/manual/vote-note.php?id=120467&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120467" title="71% like this...">
    33
    </div>
  </div>
  <a href="#120467" class="name">
  <strong class="user"><em>depaula at unilogica dot com</em></strong></a><a class="genanchor" href="#120467"> &para;</a><div class="date" title="2017-01-13 05:51"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120467">
<div class="phpcode"><code><span class="html">As PHP doesn't have a a native number truncate function, this is my solution - a function that can be usefull if you need truncate instead round a number.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Truncate a float number, example: &lt;code&gt;truncate(-1.49999, 2); // returns -1.49<br /> * truncate(.49999, 3); // returns 0.499<br /> * &lt;/code&gt;<br /> * @param float $val Float number to be truncate<br /> * @param int f Number of precision<br /> * @return float<br /> */<br /></span><span class="keyword">function </span><span class="default">truncate</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">, </span><span class="default">$f</span><span class="keyword">=</span><span class="string">"0"</span><span class="keyword">)<br />{<br />    if((</span><span class="default">$p </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />        </span><span class="default">$val </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$p </span><span class="keyword">+ </span><span class="default">1 </span><span class="keyword">+ </span><span class="default">$f</span><span class="keyword">));<br />    }<br />    return </span><span class="default">$val</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Originally posted in <a href="http://stackoverflow.com/a/12710283/1596489" rel="nofollow" target="_blank">http://stackoverflow.com/a/12710283/1596489</a></span></code></div>
  </div>
 </div>
  <div class="note" id="115653">  <div class="votes">
    <div id="Vu115653">
    <a href="/manual/vote-note.php?id=115653&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115653">
    <a href="/manual/vote-note.php?id=115653&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115653" title="68% like this...">
    31
    </div>
  </div>
  <a href="#115653" class="name">
  <strong class="user"><em>slimusgm at gmail dot com</em></strong></a><a class="genanchor" href="#115653"> &para;</a><div class="date" title="2014-09-02 03:34"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115653">
<div class="phpcode"><code><span class="html">If you have negative zero and you need return positive number simple add +0:<br /><br />$number = -2.38419e-07;<br />var_dump(round($number,1));//float(-0)<br />var_dump(round($number,1) + 0);//float(0)</span></code></div>
  </div>
 </div>
  <div class="note" id="115298">  <div class="votes">
    <div id="Vu115298">
    <a href="/manual/vote-note.php?id=115298&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115298">
    <a href="/manual/vote-note.php?id=115298&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115298" title="64% like this...">
    20
    </div>
  </div>
  <a href="#115298" class="name">
  <strong class="user"><em>esion99 at gmail dot com</em></strong></a><a class="genanchor" href="#115298"> &para;</a><div class="date" title="2014-07-01 10:49"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115298">
<div class="phpcode"><code><span class="html">Unexpected result or misunderstanding (php v5.5.9)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="default">round</span><span class="keyword">(</span><span class="default">1.55</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">PHP_ROUND_HALF_DOWN</span><span class="keyword">); </span><span class="comment">// 1.5<br /></span><span class="keyword">echo </span><span class="default">round</span><span class="keyword">(</span><span class="default">1.551</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">PHP_ROUND_HALF_DOWN</span><span class="keyword">); </span><span class="comment">//1.6<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114122">  <div class="votes">
    <div id="Vu114122">
    <a href="/manual/vote-note.php?id=114122&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114122">
    <a href="/manual/vote-note.php?id=114122&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114122" title="64% like this...">
    21
    </div>
  </div>
  <a href="#114122" class="name">
  <strong class="user"><em>djcox99 at googlemail dot com</em></strong></a><a class="genanchor" href="#114122"> &para;</a><div class="date" title="2014-01-13 11:28"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114122">
<div class="phpcode"><code><span class="html">I discovered that under some conditions you can get rounding errors with round when converting the number to a string afterwards.<br /><br />To fix this I swapped round() for number_format().<br /><br />Unfortunately i cant give an example (because the number cant be represented as a string !)<br /><br />essentially I had round(0.688888889,2);<br /><br />which would stay as 0.68888889 when printed as a string.<br /><br />But using number_format it correctly became 0.69.</span></code></div>
  </div>
 </div>
  <div class="note" id="113917">  <div class="votes">
    <div id="Vu113917">
    <a href="/manual/vote-note.php?id=113917&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113917">
    <a href="/manual/vote-note.php?id=113917&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113917" title="64% like this...">
    10
    </div>
  </div>
  <a href="#113917" class="name">
  <strong class="user"><em>craft at ckdevelop dot org</em></strong></a><a class="genanchor" href="#113917"> &para;</a><div class="date" title="2013-12-17 01:34"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113917">
<div class="phpcode"><code><span class="html">function mround($val, $f=2, $d=6){<br />    return sprintf("%".$d.".".$f."f", $val);<br />}<br /><br />echo mround(34.89999);  //34.90</span></code></div>
  </div>
 </div>
  <div class="note" id="100322">  <div class="votes">
    <div id="Vu100322">
    <a href="/manual/vote-note.php?id=100322&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100322">
    <a href="/manual/vote-note.php?id=100322&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100322" title="61% like this...">
    17
    </div>
  </div>
  <a href="#100322" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#100322"> &para;</a><div class="date" title="2010-10-07 04:07"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100322">
<div class="phpcode"><code><span class="html">Here is function that rounds to a specified increment, but always up. I had to use it for price adjustment that always went up to $5 increments.
<br />
<br /><span class="default">&lt;?php  
<br /></span><span class="keyword">function </span><span class="default">roundUpTo</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$increments</span><span class="keyword">) {
<br />    </span><span class="default">$increments </span><span class="keyword">= </span><span class="default">1 </span><span class="keyword">/ </span><span class="default">$increments</span><span class="keyword">;
<br />    return (</span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$number </span><span class="keyword">* </span><span class="default">$increments</span><span class="keyword">) / </span><span class="default">$increments</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="5832">  <div class="votes">
    <div id="Vu5832">
    <a href="/manual/vote-note.php?id=5832&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd5832">
    <a href="/manual/vote-note.php?id=5832&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V5832" title="63% like this...">
    18
    </div>
  </div>
  <a href="#5832" class="name">
  <strong class="user"><em>twan at ecreation dot nl</em></strong></a><a class="genanchor" href="#5832"> &para;</a><div class="date" title="2000-05-15 06:51"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom5832">
<div class="phpcode"><code><span class="html">If you'd only want to round for displaying variables (not for calculating on the rounded result) then you should use printf with the float:
<br />
<br /><span class="default">&lt;?php printf </span><span class="keyword">(</span><span class="string">"%6.2f"</span><span class="keyword">,</span><span class="default">3.39532</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />This returns: 3.40 .</span></code></div>
  </div>
 </div>
  <div class="note" id="105790">  <div class="votes">
    <div id="Vu105790">
    <a href="/manual/vote-note.php?id=105790&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105790">
    <a href="/manual/vote-note.php?id=105790&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105790" title="61% like this...">
    8
    </div>
  </div>
  <a href="#105790" class="name">
  <strong class="user"><em>christian at deligant dot net</em></strong></a><a class="genanchor" href="#105790"> &para;</a><div class="date" title="2011-09-15 01:24"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105790">
<div class="phpcode"><code><span class="html">this function (as all mathematical operators) takes care of the setlocale setting, resulting in some weirdness when using the result where the english math notation is expected, as the printout of the result in a width: style attribute!
<br />
<br /><span class="default">&lt;?php
<br />$a</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">;
<br />echo </span><span class="default">round</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// 0.75
<br />
<br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">'it_IT@euro'</span><span class="keyword">, </span><span class="string">'it_IT'</span><span class="keyword">, </span><span class="string">'it'</span><span class="keyword">);
<br /></span><span class="default">$b</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">;
<br />echo </span><span class="default">round</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">); </span><span class="comment">// 0,75
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93747">  <div class="votes">
    <div id="Vu93747">
    <a href="/manual/vote-note.php?id=93747&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93747">
    <a href="/manual/vote-note.php?id=93747&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93747" title="61% like this...">
    7
    </div>
  </div>
  <a href="#93747" class="name">
  <strong class="user"><em>michaeldnelson dot mdn at gmail dot com</em></strong></a><a class="genanchor" href="#93747"> &para;</a><div class="date" title="2009-09-25 06:42"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93747">
<div class="phpcode"><code><span class="html">This function will let you round to an arbitrary non-zero number.  Zero of course causes a division by zero.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">roundTo</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$to</span><span class="keyword">){
<br />    return </span><span class="default">round</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">/</span><span class="default">$to</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)* </span><span class="default">$to</span><span class="keyword">;
<br />}
<br />
<br />echo </span><span class="default">roundTo</span><span class="keyword">(</span><span class="default">87.23</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">); </span><span class="comment">//80
<br /></span><span class="keyword">echo </span><span class="default">roundTo</span><span class="keyword">(-</span><span class="default">87.23</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">); </span><span class="comment">//-80
<br /></span><span class="keyword">echo </span><span class="default">roundTo</span><span class="keyword">(</span><span class="default">87.23</span><span class="keyword">, </span><span class="default">.25</span><span class="keyword">); </span><span class="comment">//87.25
<br /></span><span class="keyword">echo </span><span class="default">roundTo</span><span class="keyword">(</span><span class="default">.23</span><span class="keyword">, </span><span class="default">.25</span><span class="keyword">); </span><span class="comment">//.25
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120232">  <div class="votes">
    <div id="Vu120232">
    <a href="/manual/vote-note.php?id=120232&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120232">
    <a href="/manual/vote-note.php?id=120232&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120232" title="57% like this...">
    3
    </div>
  </div>
  <a href="#120232" class="name">
  <strong class="user"><em>greghenle at gmail dot com</em></strong></a><a class="genanchor" href="#120232"> &para;</a><div class="date" title="2016-11-28 09:25"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120232">
<div class="phpcode"><code><span class="html">/**<br /> * Round to first significant digit<br /> * +N to +infinity<br /> * -N to -infinity<br /> *<br /> */<br />function round1stSignificant ( $N ) {<br />  if ( $N === 0 ) {<br />    return 0;<br />  }<br /><br />  $x = floor ( log10 ( abs( $N ) ) );<br /><br />  return ( $N &gt; 0 )<br />    ? ceil( $N * pow ( 10, $x * -1 ) ) * pow( 10, $x )<br />    : floor( $N * pow ( 10, $x * -1 ) ) * pow( 10, $x );<br />}<br /><br />echo round1stSignificant( 39144818 ) . PHP_EOL;<br />echo round1stSignificant( 124818 ) . PHP_EOL;<br />echo round1stSignificant( 0.07468 ) . PHP_EOL;<br />echo round1stSignificant( 0 ) . PHP_EOL;<br />echo round1stSignificant( -0.07468 ) . PHP_EOL;<br /><br />/**<br /> * Output<br /> * <br /> * 40000000<br /> * 200000<br /> * 0.08<br /> * 0<br /> * -0.08<br /> * <br /> */</span></code></div>
  </div>
 </div>
  <div class="note" id="109380">  <div class="votes">
    <div id="Vu109380">
    <a href="/manual/vote-note.php?id=109380&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109380">
    <a href="/manual/vote-note.php?id=109380&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109380" title="57% like this...">
    4
    </div>
  </div>
  <a href="#109380" class="name">
  <strong class="user"><em>dastra</em></strong></a><a class="genanchor" href="#109380"> &para;</a><div class="date" title="2012-07-12 11:16"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109380">
<div class="phpcode"><code><span class="html">round() will sometimes return E notation when rounding a float when the amount is small enough - see  <a href="https://bugs.php.net/bug.php?id=44223" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=44223</a> .  Apparently it's a feature.<br /><br />To work around this "feature" when converting to a string, surround your round statement with an sprintf:<br /><br />sprintf("%.10f", round( $amountToBeRounded, 10));</span></code></div>
  </div>
 </div>
  <div class="note" id="24379">  <div class="votes">
    <div id="Vu24379">
    <a href="/manual/vote-note.php?id=24379&amp;page=function.round&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24379">
    <a href="/manual/vote-note.php?id=24379&amp;page=function.round&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24379" title="58% like this...">
    9
    </div>
  </div>
  <a href="#24379" class="name">
  <strong class="user"><em>php at silisoftware dot com</em></strong></a><a class="genanchor" href="#24379"> &para;</a><div class="date" title="2002-08-14 02:15"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24379">
<div class="phpcode"><code><span class="html">Here's a function to round to an arbitary number of significant digits. Don't confuse it with rounding to a negative precision - that counts back from the decimal point, this function counts forward from the Most Significant Digit.
<br />
<br />ex:
<br />
<br /><span class="default">&lt;?php
<br />round</span><span class="keyword">(</span><span class="default">1241757</span><span class="keyword">, -</span><span class="default">3</span><span class="keyword">); </span><span class="comment">// 1242000
<br /></span><span class="default">RoundSigDigs</span><span class="keyword">(</span><span class="default">1241757</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">); </span><span class="comment">// 1240000
<br /></span><span class="default">?&gt;
<br /></span>
<br />Works on negative numbers too. $sigdigs should be &gt;= 0
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">RoundSigDigs</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$sigdigs</span><span class="keyword">) {
<br />    </span><span class="default">$multiplier </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />    while (</span><span class="default">$number </span><span class="keyword">&lt; </span><span class="default">0.1</span><span class="keyword">) {
<br />        </span><span class="default">$number </span><span class="keyword">*= </span><span class="default">10</span><span class="keyword">;
<br />        </span><span class="default">$multiplier </span><span class="keyword">/= </span><span class="default">10</span><span class="keyword">;
<br />    }
<br />    while (</span><span class="default">$number </span><span class="keyword">&gt;= </span><span class="default">1</span><span class="keyword">) {
<br />        </span><span class="default">$number </span><span class="keyword">/= </span><span class="default">10</span><span class="keyword">;
<br />        </span><span class="default">$multiplier </span><span class="keyword">*= </span><span class="default">10</span><span class="keyword">;
<br />    }
<br />    return </span><span class="default">round</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$sigdigs</span><span class="keyword">) * </span><span class="default">$multiplier</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.round&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.round.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
