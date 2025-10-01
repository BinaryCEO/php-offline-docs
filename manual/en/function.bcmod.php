<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: bcmod - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.bcmod.php">
 <link rel="shorturl" href="https://www.php.net/bcmod">
 <link rel="alternate" href="https://www.php.net/bcmod" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.bc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.bcfloor.php">
 <link rel="next" href="https://www.php.net/manual/en/function.bcmul.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.bcmod.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.bcmod.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.bcmod.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.bcmod.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.bcmod.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.bcmod.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.bcmod.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.bcmod.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.bcmod.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.bcmod.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.bcmod.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get modulus of an arbitrary precision number" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: bcmod - Manual" />
<meta name="twitter:description" content="Get modulus of an arbitrary precision number" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: bcmod - Manual" />
<meta itemprop="description" content="Get modulus of an arbitrary precision number" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get modulus of an arbitrary precision number" />

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
        <a href="function.bcmul.php">
          bcmul &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.bcfloor.php">
          &laquo; bcfloor        </a>
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
            <option value='en/function.bcmod.php' selected="selected">English</option>
            <option value='de/function.bcmod.php'>German</option>
            <option value='es/function.bcmod.php'>Spanish</option>
            <option value='fr/function.bcmod.php'>French</option>
            <option value='it/function.bcmod.php'>Italian</option>
            <option value='ja/function.bcmod.php'>Japanese</option>
            <option value='pt_BR/function.bcmod.php'>Brazilian Portuguese</option>
            <option value='ru/function.bcmod.php'>Russian</option>
            <option value='tr/function.bcmod.php'>Turkish</option>
            <option value='uk/function.bcmod.php'>Ukrainian</option>
            <option value='zh/function.bcmod.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.bcmod" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">bcmod</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">bcmod</span> &mdash; <span class="dc-title">Get modulus of an arbitrary precision number</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.bcmod-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>bcmod</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$num1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$num2</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$scale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Get the remainder of dividing <code class="parameter">num1</code> by
   <code class="parameter">num2</code>.
   The result has the same sign as <code class="parameter">num1</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.bcmod-parameters">
  <h3 class="title">Parameters</h3><p class="para">
   <dl>
    
     <dt><code class="parameter">num1</code></dt>
     <dd>
      <p class="para">
       The left operand, as a string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">num2</code></dt>
     <dd>
      <p class="para">
       The right operand, as a string.
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


 <div class="refsect1 returnvalues" id="refsect1-function.bcmod-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the modulus as a string.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.bcmod-errors">
  
  <h3 class="title">Errors/Exceptions</h3><p class="para">
   This function throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> in the following cases:
   <ul class="simplelist">
    <li>
     <code class="parameter">num1</code> or <code class="parameter">num2</code>
     is not a well-formed BCMath numeric string.
    </li>
    <li>
     <code class="parameter">scale</code> is outside the valid range.
    </li>
   </ul>
  </p>
  <p class="simpara">
   This function throws a <span class="exceptionname"><a href="class.divisionbyzeroerror.php" class="exceptionname">DivisionByZeroError</a></span>
   exception if <code class="parameter">num2</code> is <code class="literal">0</code>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.bcmod-changelog">
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
       <code class="parameter">scale</code> is now nullable.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Dividing by <code class="literal">0</code> now throws a <span class="exceptionname"><a href="class.divisionbyzeroerror.php" class="exceptionname">DivisionByZeroError</a></span> exception instead of returning null.
      </td>
     </tr>

     <tr>
      <td>7.2.0</td>
      <td>
       <code class="parameter">num1</code> and <code class="parameter">num2</code> are no
       longer truncated to integer, so now the behavior of
       <span class="function"><strong>bcmod()</strong></span> follows <span class="function"><a href="function.fmod.php" class="function">fmod()</a></span> rather than
       the <code class="literal">%</code> operator.
      </td>
     </tr>

     <tr>
      <td>7.2.0</td>
      <td>
       The <code class="parameter">scale</code> parameter was added.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.bcmod-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-3271">
   <p><strong>Example #1 <span class="function"><strong>bcmod()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />bcscale</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bcmod</span><span style="color: #007700">( </span><span style="color: #DD0000">'5'</span><span style="color: #007700">,  </span><span style="color: #DD0000">'3'</span><span style="color: #007700">); </span><span style="color: #FF8000">//  2<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bcmod</span><span style="color: #007700">( </span><span style="color: #DD0000">'5'</span><span style="color: #007700">, </span><span style="color: #DD0000">'-3'</span><span style="color: #007700">); </span><span style="color: #FF8000">//  2<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bcmod</span><span style="color: #007700">(</span><span style="color: #DD0000">'-5'</span><span style="color: #007700">,  </span><span style="color: #DD0000">'3'</span><span style="color: #007700">); </span><span style="color: #FF8000">// -2<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bcmod</span><span style="color: #007700">(</span><span style="color: #DD0000">'-5'</span><span style="color: #007700">, </span><span style="color: #DD0000">'-3'</span><span style="color: #007700">); </span><span style="color: #FF8000">// -2<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-3272">
   <p><strong>Example #2 <span class="function"><strong>bcmod()</strong></span> with decimals</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />bcscale</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bcmod</span><span style="color: #007700">(</span><span style="color: #DD0000">'5.7'</span><span style="color: #007700">, </span><span style="color: #DD0000">'1.3'</span><span style="color: #007700">); </span><span style="color: #FF8000">// 0.5 as of PHP 7.2.0; 0 previously<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.bcmod-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.bcdiv.php" class="function" rel="rdfs-seeAlso">bcdiv()</a> - Divide two arbitrary precision numbers</span></li>
    <li><span class="function"><a href="function.bcdivmod.php" class="function" rel="rdfs-seeAlso">bcdivmod()</a> - Get the quotient and modulus of an arbitrary precision number</span></li>
   <li><span class="methodname"><a href="bcmath-number.mod.php" class="methodname" rel="rdfs-seeAlso">BcMath\Number::mod()</a> - Gets the modulus of an arbitrary precision number</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/bc/functions/bcmod.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.bcmod%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.bcmod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.bcmod.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="38474">  <div class="votes">
    <div id="Vu38474">
    <a href="/manual/vote-note.php?id=38474&amp;page=function.bcmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38474">
    <a href="/manual/vote-note.php?id=38474&amp;page=function.bcmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38474" title="56% like this...">
    4
    </div>
  </div>
  <a href="#38474" class="name">
  <strong class="user"><em>lauris at night dot lt</em></strong></a><a class="genanchor" href="#38474"> &para;</a><div class="date" title="2003-12-23 08:04"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38474">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * my_bcmod - get modulus (substitute for bcmod)
<br /> * string my_bcmod ( string left_operand, int modulus )
<br /> * left_operand can be really big, but be carefull with modulus :(
<br /> * by Andrius Baranauskas and Laurynas Butkus :) Vilnius, Lithuania
<br /> **/
<br /></span><span class="keyword">function </span><span class="default">my_bcmod</span><span class="keyword">( </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">)
<br />{
<br />    </span><span class="comment">// how many numbers to take at once? carefull not to exceed (int)
<br />    </span><span class="default">$take </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;     
<br />    </span><span class="default">$mod </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />
<br />    do
<br />    {
<br />        </span><span class="default">$a </span><span class="keyword">= (int)</span><span class="default">$mod</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">( </span><span class="default">$x</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$take </span><span class="keyword">);
<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$take </span><span class="keyword">);
<br />        </span><span class="default">$mod </span><span class="keyword">= </span><span class="default">$a </span><span class="keyword">% </span><span class="default">$y</span><span class="keyword">;    
<br />    } 
<br />    while ( </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) );
<br />
<br />    return (int)</span><span class="default">$mod</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">// example
<br /></span><span class="keyword">echo </span><span class="default">my_bcmod</span><span class="keyword">( </span><span class="string">"7044060001970316212900"</span><span class="keyword">, </span><span class="default">150 </span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111276">  <div class="votes">
    <div id="Vu111276">
    <a href="/manual/vote-note.php?id=111276&amp;page=function.bcmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111276">
    <a href="/manual/vote-note.php?id=111276&amp;page=function.bcmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111276" title="52% like this...">
    1
    </div>
  </div>
  <a href="#111276" class="name">
  <strong class="user"><em>drahoszdenek at gmail dot com</em></strong></a><a class="genanchor" href="#111276"> &para;</a><div class="date" title="2013-02-01 04:44"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111276">
<div class="phpcode"><code><span class="html">The modulus can be only integer. For "floats" bcmod returns 0:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">bcmod</span><span class="keyword">(</span><span class="string">'10'</span><span class="keyword">, </span><span class="string">'2.1'</span><span class="keyword">); </span><span class="comment">// 0<br /></span><span class="default">?&gt;<br /></span><br />For real modulus you can use BN-PHP project (hosted at Bitbucket):<br /><br /><span class="default">&lt;?php<br />$eval </span><span class="keyword">= new </span><span class="default">\BN\Expression\ExpressionEvaluator</span><span class="keyword">();<br /></span><span class="default">$operators </span><span class="keyword">= new </span><span class="default">\BN\Expression\OperatorsFactory</span><span class="keyword">();<br /></span><span class="default">$eval</span><span class="keyword">-&gt;</span><span class="default">setOperators</span><span class="keyword">(</span><span class="default">$operators</span><span class="keyword">-&gt;</span><span class="default">getOperators</span><span class="keyword">(array(</span><span class="string">'%'</span><span class="keyword">)));<br />        <br />echo </span><span class="default">$eval</span><span class="keyword">-&gt;</span><span class="default">evaluate</span><span class="keyword">(</span><span class="string">'10 % 2.1'</span><span class="keyword">); </span><span class="comment">// 1.6<br /></span><span class="keyword">echo </span><span class="default">$eval</span><span class="keyword">-&gt;</span><span class="default">evaluate</span><span class="keyword">(</span><span class="string">'10 % -2.1'</span><span class="keyword">); </span><span class="comment">// 1.6<br /></span><span class="keyword">echo </span><span class="default">$eval</span><span class="keyword">-&gt;</span><span class="default">evaluate</span><span class="keyword">(</span><span class="string">'-10 % 2.1'</span><span class="keyword">); </span><span class="comment">// -1.6<br /></span><span class="keyword">echo </span><span class="default">$eval</span><span class="keyword">-&gt;</span><span class="default">evaluate</span><span class="keyword">(</span><span class="string">'-10 % -2.1'</span><span class="keyword">); </span><span class="comment">// -1.6<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.bcmod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.bcmod.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.bcmod.php" title="bcmod">bcmod</a>
                        </li>
                                                <li class="">
                            <a href="function.bcmul.php" title="bcmul">bcmul</a>
                        </li>
                                                <li class="">
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
