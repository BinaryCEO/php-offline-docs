<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: bcpow - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.bcpow.php">
 <link rel="shorturl" href="https://www.php.net/bcpow">
 <link rel="alternate" href="https://www.php.net/bcpow" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.bc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.bcmul.php">
 <link rel="next" href="https://www.php.net/manual/en/function.bcpowmod.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.bcpow.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.bcpow.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.bcpow.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.bcpow.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.bcpow.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.bcpow.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.bcpow.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.bcpow.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.bcpow.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.bcpow.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.bcpow.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Raise an arbitrary precision number to another" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: bcpow - Manual" />
<meta name="twitter:description" content="Raise an arbitrary precision number to another" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: bcpow - Manual" />
<meta itemprop="description" content="Raise an arbitrary precision number to another" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Raise an arbitrary precision number to another" />

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
        <a href="function.bcpowmod.php">
          bcpowmod &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.bcmul.php">
          &laquo; bcmul        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.bc.php'>BC Math</a></li>      <li><a href='ref.bc.php'>BC Math Functions</a></li>      </ul>
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
            <option value='en/function.bcpow.php' selected="selected">English</option>
            <option value='de/function.bcpow.php'>German</option>
            <option value='es/function.bcpow.php'>Spanish</option>
            <option value='fr/function.bcpow.php'>French</option>
            <option value='it/function.bcpow.php'>Italian</option>
            <option value='ja/function.bcpow.php'>Japanese</option>
            <option value='pt_BR/function.bcpow.php'>Brazilian Portuguese</option>
            <option value='ru/function.bcpow.php'>Russian</option>
            <option value='tr/function.bcpow.php'>Turkish</option>
            <option value='uk/function.bcpow.php'>Ukrainian</option>
            <option value='zh/function.bcpow.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.bcpow" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">bcpow</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">bcpow</span> &mdash; <span class="dc-title">Raise an arbitrary precision number to another</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.bcpow-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>bcpow</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$num</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$exponent</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$scale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Raise <code class="parameter">num</code> to the power 
   <code class="parameter">exponent</code>. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.bcpow-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">num</code></dt>
     <dd>
      <p class="para">
       The base, as a string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">exponent</code></dt>
     <dd>
      <p class="para">
       The exponent, as a string. Must be a value with no fractional part.
       The valid range of the exponent is platform specific, but is at least
       <code class="literal">-2147483648</code> to <code class="literal">2147483647</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">scale</code></dt>
     <dd>
      <span class="simpara">
       This parameter is used to set the number of digits after the decimal place in the result.
       If <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, it will default to the default scale set with <span class="function"><a href="function.bcscale.php" class="function">bcscale()</a></span>,
       or fallback to the value of the
       <a href="bc.configuration.php#ini.bcmath.scale" class="link"><code class="literal">bcmath.scale</code></a> INI directive.
      </span>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.bcpow-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the result as a string.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.bcpow-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   This function throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> in the following cases:
   <ul class="simplelist">
    <li><code class="parameter">num</code> or <code class="parameter">exponent</code> is not a well-formed BCMath numeric string</li>
    <li><code class="parameter">exponent</code> has a fractional part</li>
    <li><code class="parameter">exponent</code> or <code class="parameter">scale</code> is outside the valid range</li>
   </ul>
  </p>
  <p class="simpara">
   This function throws a <span class="exceptionname"><a href="class.divisionbyzeroerror.php" class="exceptionname">DivisionByZeroError</a></span> exception if <code class="parameter">num</code>
   is <code class="literal">0</code> and <code class="parameter">exponent</code> is a negative value.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.bcpow-changelog">
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
       Negative powers of <code class="literal">0</code> previously returned <code class="literal">0</code>, but now throw a <span class="exceptionname"><a href="class.divisionbyzeroerror.php" class="exceptionname">DivisionByZeroError</a></span>
       exception.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       When <code class="parameter">exponent</code> has a fractional part, it now throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>
       instead of truncating.
      </td>
     </tr>

     <tr>
      <td>7.3.0</td>
      <td>
       <span class="function"><strong>bcpow()</strong></span> now returns numbers with the requested scale.
       Formerly, the returned numbers may have omitted trailing decimal zeroes.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.bcpow-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-3275">
   <p><strong>Example #1 <span class="function"><strong>bcpow()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bcpow</span><span style="color: #007700">(</span><span style="color: #DD0000">'4.2'</span><span style="color: #007700">, </span><span style="color: #DD0000">'3'</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">); </span><span style="color: #FF8000">// 74.08<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 notes" id="refsect1-function.bcpow-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Before PHP 7.3.0 <span class="function"><strong>bcpow()</strong></span> may return a result with fewer digits after the
    decimal point than the <code class="parameter">scale</code> parameter would
    indicate. This only occurs when the result doesn&#039;t require all of the
    precision allowed by the <code class="parameter">scale</code>. For example:
    <div class="example" id="example-3276">
     <p><strong>Example #2 <span class="function"><strong>bcpow()</strong></span> scale example</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bcpow</span><span style="color: #007700">(</span><span style="color: #DD0000">'5'</span><span style="color: #007700">, </span><span style="color: #DD0000">'2'</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);     </span><span style="color: #FF8000">// prints "25", not "25.00"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </p></blockquote>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.bcpow-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.bcpowmod.php" class="function" rel="rdfs-seeAlso">bcpowmod()</a> - Raise an arbitrary precision number to another, reduced by a specified modulus</span></li>
    <li><span class="function"><a href="function.bcsqrt.php" class="function" rel="rdfs-seeAlso">bcsqrt()</a> - Get the square root of an arbitrary precision number</span></li>
    <li><span class="methodname"><a href="bcmath-number.pow.php" class="methodname" rel="rdfs-seeAlso">BcMath\Number::pow()</a> - Raises an arbitrary precision number</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/bc/functions/bcpow.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.bcpow%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.bcpow&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.bcpow.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="44565">  <div class="votes">
    <div id="Vu44565">
    <a href="/manual/vote-note.php?id=44565&amp;page=function.bcpow&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44565">
    <a href="/manual/vote-note.php?id=44565&amp;page=function.bcpow&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44565" title="54% like this...">
    1
    </div>
  </div>
  <a href="#44565" class="name">
  <strong class="user"><em>Michael Bailey (jinxidoru at byu dot net)</em></strong></a><a class="genanchor" href="#44565"> &para;</a><div class="date" title="2004-08-09 05:42"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44565">
<div class="phpcode"><code><span class="html">bcpow() only supports exponents less than or equal to 2^31-1.  Also, bcpow() does not support decimal numbers.  If you have scale set to 0, then the exponent is converted to an interger; otherwise an error is generated.<br /><br />--<br />Michael Bailey<br /><a href="http://www.jinxidoru.com" rel="nofollow" target="_blank">http://www.jinxidoru.com</a></span></code></div>
  </div>
 </div>
  <div class="note" id="92175">  <div class="votes">
    <div id="Vu92175">
    <a href="/manual/vote-note.php?id=92175&amp;page=function.bcpow&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92175">
    <a href="/manual/vote-note.php?id=92175&amp;page=function.bcpow&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92175" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#92175" class="name">
  <strong class="user"><em>thomas at tgohome dot com</em></strong></a><a class="genanchor" href="#92175"> &para;</a><div class="date" title="2009-07-13 12:19"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92175">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br />
<br />bcscale</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">);
<br />
<br /></span><span class="comment">/*
<br /> * Computes the natural logarithm using a series.
<br /> * @author Thomas Oldbury.
<br /> * @license Public domain.
<br /> */
<br /></span><span class="keyword">function </span><span class="default">bcln</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$iter </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="string">"0.0"</span><span class="keyword">;
<br />    
<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$iter</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)
<br />    {
<br />        </span><span class="default">$pow </span><span class="keyword">= (</span><span class="default">1 </span><span class="keyword">+ (</span><span class="default">2 </span><span class="keyword">* </span><span class="default">$i</span><span class="keyword">));
<br />        </span><span class="default">$mul </span><span class="keyword">= </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="string">"1.0"</span><span class="keyword">, </span><span class="default">$pow</span><span class="keyword">);
<br />        </span><span class="default">$fraction </span><span class="keyword">= </span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">$mul</span><span class="keyword">, </span><span class="default">bcpow</span><span class="keyword">(</span><span class="default">bcsub</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="string">"1.0"</span><span class="keyword">) / </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="string">"1.0"</span><span class="keyword">), </span><span class="default">$pow</span><span class="keyword">));
<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$fraction</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);
<br />    }
<br />    
<br />    return </span><span class="default">bcmul</span><span class="keyword">(</span><span class="string">"2.0"</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">/*
<br /> * Computes the base2 log using baseN log.
<br /> * @note Requires above functions.
<br /> * @author Thomas Oldbury.
<br /> * @license Public domain.
<br /> */
<br /></span><span class="keyword">function </span><span class="default">bclog2</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$iter </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">)
<br />{
<br />    return </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">bcln</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$iter</span><span class="keyword">), </span><span class="default">bcln</span><span class="keyword">(</span><span class="string">"2"</span><span class="keyword">, </span><span class="default">$iter</span><span class="keyword">));
<br />}
<br />
<br /></span><span class="comment">/*
<br /> * Computes the base10 log using baseN log.
<br /> * @note Requires above functions.
<br /> * @author Thomas Oldbury.
<br /> * @license Public domain.
<br /> */
<br /></span><span class="keyword">function </span><span class="default">bclog10</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$iter </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">)
<br />{
<br />    return </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">bcln</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$iter</span><span class="keyword">), </span><span class="default">bcln</span><span class="keyword">(</span><span class="string">"10"</span><span class="keyword">, </span><span class="default">$iter</span><span class="keyword">));
<br />}
<br />
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49913">  <div class="votes">
    <div id="Vu49913">
    <a href="/manual/vote-note.php?id=49913&amp;page=function.bcpow&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49913">
    <a href="/manual/vote-note.php?id=49913&amp;page=function.bcpow&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49913" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#49913" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#49913"> &para;</a><div class="date" title="2005-02-11 01:58"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49913">
<div class="phpcode"><code><span class="html">Well, if bcpow has limits, then this should work:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">bcpow_</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">, </span><span class="default">$power</span><span class="keyword">) {<br />    </span><span class="default">$awnser </span><span class="keyword">= </span><span class="string">"1"</span><span class="keyword">;<br />    while (</span><span class="default">$power</span><span class="keyword">) {<br />        </span><span class="default">$awnser </span><span class="keyword">= </span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">$awnser</span><span class="keyword">, </span><span class="default">$num</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br />        </span><span class="default">$power </span><span class="keyword">= </span><span class="default">bcsub</span><span class="keyword">(</span><span class="default">$power</span><span class="keyword">, </span><span class="string">"1"</span><span class="keyword">);<br />    }<br />    return </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$awnser</span><span class="keyword">, </span><span class="string">'0.'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span>Just that $power cannot have decimal digits in it.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.bcpow&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.bcpow.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.bc.php">BC Math Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.bcadd.php" title="bcadd">bcadd</a>
                        </li>
                                                <li class="">
                            <a href="function.bcceil.php" title="bcceil">bcceil</a>
                        </li>
                                                <li class="">
                            <a href="function.bccomp.php" title="bccomp">bccomp</a>
                        </li>
                                                <li class="">
                            <a href="function.bcdiv.php" title="bcdiv">bcdiv</a>
                        </li>
                                                <li class="">
                            <a href="function.bcdivmod.php" title="bcdivmod">bcdivmod</a>
                        </li>
                                                <li class="">
                            <a href="function.bcfloor.php" title="bcfloor">bcfloor</a>
                        </li>
                                                <li class="">
                            <a href="function.bcmod.php" title="bcmod">bcmod</a>
                        </li>
                                                <li class="">
                            <a href="function.bcmul.php" title="bcmul">bcmul</a>
                        </li>
                                                <li class="current">
                            <a href="function.bcpow.php" title="bcpow">bcpow</a>
                        </li>
                                                <li class="">
                            <a href="function.bcpowmod.php" title="bcpowmod">bcpowmod</a>
                        </li>
                                                <li class="">
                            <a href="function.bcround.php" title="bcround">bcround</a>
                        </li>
                                                <li class="">
                            <a href="function.bcscale.php" title="bcscale">bcscale</a>
                        </li>
                                                <li class="">
                            <a href="function.bcsqrt.php" title="bcsqrt">bcsqrt</a>
                        </li>
                                                <li class="">
                            <a href="function.bcsub.php" title="bcsub">bcsub</a>
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
