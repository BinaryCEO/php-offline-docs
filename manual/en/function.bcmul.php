<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: bcmul - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.bcmul.php">
 <link rel="shorturl" href="https://www.php.net/bcmul">
 <link rel="alternate" href="https://www.php.net/bcmul" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.bc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.bcmod.php">
 <link rel="next" href="https://www.php.net/manual/en/function.bcpow.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.bcmul.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.bcmul.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.bcmul.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.bcmul.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.bcmul.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.bcmul.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.bcmul.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.bcmul.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.bcmul.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.bcmul.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.bcmul.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Multiply two arbitrary precision numbers" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: bcmul - Manual" />
<meta name="twitter:description" content="Multiply two arbitrary precision numbers" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: bcmul - Manual" />
<meta itemprop="description" content="Multiply two arbitrary precision numbers" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Multiply two arbitrary precision numbers" />

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
        <a href="function.bcpow.php">
          bcpow &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.bcmod.php">
          &laquo; bcmod        </a>
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
            <option value='en/function.bcmul.php' selected="selected">English</option>
            <option value='de/function.bcmul.php'>German</option>
            <option value='es/function.bcmul.php'>Spanish</option>
            <option value='fr/function.bcmul.php'>French</option>
            <option value='it/function.bcmul.php'>Italian</option>
            <option value='ja/function.bcmul.php'>Japanese</option>
            <option value='pt_BR/function.bcmul.php'>Brazilian Portuguese</option>
            <option value='ru/function.bcmul.php'>Russian</option>
            <option value='tr/function.bcmul.php'>Turkish</option>
            <option value='uk/function.bcmul.php'>Ukrainian</option>
            <option value='zh/function.bcmul.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.bcmul" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">bcmul</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">bcmul</span> &mdash; <span class="dc-title">Multiply two arbitrary precision numbers</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.bcmul-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>bcmul</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$num1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$num2</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$scale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="simpara">
   Multiply <code class="parameter">num1</code> by <code class="parameter">num2</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.bcmul-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-function.bcmul-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the result as a string.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.bcmul-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
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
 </div>


 <div class="refsect1 changelog" id="refsect1-function.bcmul-changelog">
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
      <td>7.3.0</td>
      <td>
       <span class="function"><strong>bcmul()</strong></span> now returns numbers with the requested scale.
       Formerly, the returned numbers may have omitted trailing decimal zeroes.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.bcmul-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-3273">
   <p><strong>Example #1 <span class="function"><strong>bcmul()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bcmul</span><span style="color: #007700">(</span><span style="color: #DD0000">'1.34747474747'</span><span style="color: #007700">, </span><span style="color: #DD0000">'35'</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">); </span><span style="color: #FF8000">// 47.161<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bcmul</span><span style="color: #007700">(</span><span style="color: #DD0000">'2'</span><span style="color: #007700">, </span><span style="color: #DD0000">'4'</span><span style="color: #007700">); </span><span style="color: #FF8000">// 8<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 
 <div class="refsect1 notes" id="refsect1-function.bcmul-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Prior to PHP 7.3.0, <span class="function"><strong>bcmul()</strong></span> may return a result with fewer digits after the
    decimal point than the <code class="parameter">scale</code> parameter would
    indicate. This only occurs when the result doesn&#039;t require all of the
    precision allowed by the <code class="parameter">scale</code>. For example:
    <div class="example" id="example-3274">
     <p><strong>Example #2 <span class="function"><strong>bcmul()</strong></span> scale example</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bcmul</span><span style="color: #007700">(</span><span style="color: #DD0000">'5'</span><span style="color: #007700">, </span><span style="color: #DD0000">'2'</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);     </span><span style="color: #FF8000">// prints "10", not "10.00"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </p></blockquote>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.bcmul-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.bcdiv.php" class="function" rel="rdfs-seeAlso">bcdiv()</a> - Divide two arbitrary precision numbers</span></li>
    <li><span class="methodname"><a href="bcmath-number.mul.php" class="methodname" rel="rdfs-seeAlso">BcMath\Number::mul()</a> - Multiplies an arbitrary precision number</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/bc/functions/bcmul.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.bcmul%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.bcmul&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.bcmul.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92103">  <div class="votes">
    <div id="Vu92103">
    <a href="/manual/vote-note.php?id=92103&amp;page=function.bcmul&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92103">
    <a href="/manual/vote-note.php?id=92103&amp;page=function.bcmul&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92103" title="69% like this...">
    10
    </div>
  </div>
  <a href="#92103" class="name">
  <strong class="user"><em>Nitrogen</em></strong></a><a class="genanchor" href="#92103"> &para;</a><div class="date" title="2009-07-08 05:55"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92103">
<div class="phpcode"><code><span class="html">I made this to multiply an unlimited size of integers together (meaning no decimals)..<br />This could be useful for those without the BCMath extension.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">Mul</span><span class="keyword">(</span><span class="default">$Num1</span><span class="keyword">=</span><span class="string">'0'</span><span class="keyword">,</span><span class="default">$Num2</span><span class="keyword">=</span><span class="string">'0'</span><span class="keyword">) {<br />  </span><span class="comment">// check if they're both plain numbers<br />  </span><span class="keyword">if(!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^\d+$/"</span><span class="keyword">,</span><span class="default">$Num1</span><span class="keyword">)||!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^\d+$/"</span><span class="keyword">,</span><span class="default">$Num2</span><span class="keyword">)) return(</span><span class="default">0</span><span class="keyword">);<br /><br />  </span><span class="comment">// remove zeroes from beginning of numbers<br />  </span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$Num1</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++) if(@</span><span class="default">$Num1</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">}!=</span><span class="string">'0'</span><span class="keyword">) {</span><span class="default">$Num1</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$Num1</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">);break;}<br />  for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$Num2</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++) if(@</span><span class="default">$Num2</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">}!=</span><span class="string">'0'</span><span class="keyword">) {</span><span class="default">$Num2</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$Num2</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">);break;}<br /><br />  </span><span class="comment">// get both number lengths<br />  </span><span class="default">$Len1</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$Num1</span><span class="keyword">);<br />  </span><span class="default">$Len2</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$Num2</span><span class="keyword">);<br /><br />  </span><span class="comment">// $Rema is for storing the calculated numbers and $Rema2 is for carrying the remainders<br />  </span><span class="default">$Rema</span><span class="keyword">=</span><span class="default">$Rema2</span><span class="keyword">=array();<br /><br />  </span><span class="comment">// we start by making a $Len1 by $Len2 table (array)<br />  </span><span class="keyword">for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$Len1</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++)<br />    for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$Len2</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++)<br />      </span><span class="comment">// we use the classic lattice method for calculating the multiplication..<br />      // this will multiply each number in $Num1 with each number in $Num2 and store it accordingly<br />      </span><span class="keyword">@</span><span class="default">$Rema</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">++%</span><span class="default">$Len2</span><span class="keyword">].=</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%02d'</span><span class="keyword">,(int)</span><span class="default">$Num1</span><span class="keyword">{</span><span class="default">$y</span><span class="keyword">}*(int)</span><span class="default">$Num2</span><span class="keyword">{</span><span class="default">$x</span><span class="keyword">});<br /><br />  </span><span class="comment">// cycle through each stored number<br />  </span><span class="keyword">for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$Len2</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++)<br />    for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$Len1</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++)<br />      </span><span class="comment">// add up the numbers in the diagonal fashion the lattice method uses<br />      </span><span class="keyword">@</span><span class="default">$Rema2</span><span class="keyword">[</span><span class="default">Floor</span><span class="keyword">((</span><span class="default">$x</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">+</span><span class="default">$y</span><span class="keyword">]+=(int)</span><span class="default">$Rema</span><span class="keyword">[</span><span class="default">$y</span><span class="keyword">]{</span><span class="default">$x</span><span class="keyword">};<br /><br />  </span><span class="comment">// reverse the results around<br />  </span><span class="default">$Rema2</span><span class="keyword">=</span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$Rema2</span><span class="keyword">);<br /><br />  </span><span class="comment">// cycle through all the results again<br />  </span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$Rema2</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="comment">// reverse this item, split, keep the first digit, spread the other digits down the array<br />    </span><span class="default">$Rema3</span><span class="keyword">=</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$Rema2</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]));<br />    for(</span><span class="default">$o</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$o</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$Rema3</span><span class="keyword">);</span><span class="default">$o</span><span class="keyword">++)<br />      if(</span><span class="default">$o</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">) @</span><span class="default">$Rema2</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">$o</span><span class="keyword">]=</span><span class="default">$Rema3</span><span class="keyword">[</span><span class="default">$o</span><span class="keyword">];<br />      else @</span><span class="default">$Rema2</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">$o</span><span class="keyword">]+=</span><span class="default">$Rema3</span><span class="keyword">[</span><span class="default">$o</span><span class="keyword">];<br />  }<br />  </span><span class="comment">// implode $Rema2 so it's a string and reverse it, this is the result!<br />  </span><span class="default">$Rema2</span><span class="keyword">=</span><span class="default">strrev</span><span class="keyword">(</span><span class="default">implode</span><span class="keyword">(</span><span class="default">$Rema2</span><span class="keyword">));<br /><br />  </span><span class="comment">// just to make sure, we delete the zeros from the beginning of the result and return<br />  </span><span class="keyword">while(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$Rema2</span><span class="keyword">)&gt;</span><span class="default">1</span><span class="keyword">&amp;&amp;</span><span class="default">$Rema2</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}==</span><span class="string">'0'</span><span class="keyword">) </span><span class="default">$Rema2</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$Rema2</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br /><br />  return(</span><span class="default">$Rema2</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$A</span><span class="keyword">=</span><span class="string">'5650175242508133742'</span><span class="keyword">;<br /></span><span class="default">$B</span><span class="keyword">=</span><span class="string">'2361030539975818701734615584174625'</span><span class="keyword">;<br /><br /></span><span class="default">printf</span><span class="keyword">(</span><span class="string">"  Mul(%s,%s); // %s\r\n"</span><span class="keyword">,</span><span class="default">$A</span><span class="keyword">,</span><span class="default">$B</span><span class="keyword">,  </span><span class="default">Mul</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">,</span><span class="default">$B</span><span class="keyword">));<br /></span><span class="default">printf</span><span class="keyword">(</span><span class="string">"BCMul(%s,%s); // %s\r\n"</span><span class="keyword">,</span><span class="default">$A</span><span class="keyword">,</span><span class="default">$B</span><span class="keyword">,</span><span class="default">BCMul</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">,</span><span class="default">$B</span><span class="keyword">)); </span><span class="comment">// build-in function<br /><br />/*<br />  This will print something similar to this..<br />    Mul(5650175242508133742,2361030539975818701734615584174625);<br />  BCMul(5650175242508133742,2361030539975818701734615584174625);<br /><br />  both of which should be followed by the answer:<br />  13340236303776981390475700774516825287352418182696750<br />*/<br /><br /></span><span class="default">?&gt;<br /></span><br />It was a fun experience making.. even though this took me longer than the BCAdd alternative I did..<br />Memory allocation might be an issue for rediculously larger numbers though.. if someone wants to benchmark the performance of my function; feel free.<br />Enjoy,<br />Nitrogen.</span></code></div>
  </div>
 </div>
  <div class="note" id="121567">  <div class="votes">
    <div id="Vu121567">
    <a href="/manual/vote-note.php?id=121567&amp;page=function.bcmul&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121567">
    <a href="/manual/vote-note.php?id=121567&amp;page=function.bcmul&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121567" title="76% like this...">
    7
    </div>
  </div>
  <a href="#121567" class="name">
  <strong class="user"><em>mgkirs</em></strong></a><a class="genanchor" href="#121567"> &para;</a><div class="date" title="2017-08-25 04:08"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121567">
<div class="phpcode"><code><span class="html">$float = 0.31234144143341;<br />$float1 = 0.00000000000000000000000000000005;<br />echo $float, "\n";<br />//0.31234144143341<br />echo $float1, "\n";<br />//5.0E-32<br />echo $float*$float1, "\n";<br />//1.5617072071671E-32<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*bcmul read float as string*/<br /></span><span class="keyword">echo </span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">$float</span><span class="keyword">, </span><span class="default">$float1</span><span class="keyword">, </span><span class="default">32</span><span class="keyword">),</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">//0<br /></span><span class="keyword">echo </span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">$float</span><span class="keyword">, </span><span class="default">sprint</span><span class="keyword">(</span><span class="string">'%.32f'</span><span class="keyword">,</span><span class="default">$float1</span><span class="keyword">), </span><span class="default">32</span><span class="keyword">);<br /></span><span class="comment">//0.000000000000000000000000000000015617072071671;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101678">  <div class="votes">
    <div id="Vu101678">
    <a href="/manual/vote-note.php?id=101678&amp;page=function.bcmul&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101678">
    <a href="/manual/vote-note.php?id=101678&amp;page=function.bcmul&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101678" title="63% like this...">
    3
    </div>
  </div>
  <a href="#101678" class="name">
  <strong class="user"><em>admin at spamhere dot sinfocol dot org</em></strong></a><a class="genanchor" href="#101678"> &para;</a><div class="date" title="2011-01-03 10:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101678">
<div class="phpcode"><code><span class="html">Well, I have a little problem implementing Blake Hash in my server because it is not a x64 server machine. I made a little function that use the powerfull of BC library to do the bitwise operation Shift.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'Left Shift test&lt;br /&gt;'</span><span class="keyword">;<br /></span><span class="default">bprint</span><span class="keyword">(</span><span class="string">'1'</span><span class="keyword">, </span><span class="default">decbin</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">));<br /></span><span class="default">bprint</span><span class="keyword">(</span><span class="string">'1 &lt;&lt; 32 (Fail)'</span><span class="keyword">, </span><span class="default">decbin</span><span class="keyword">(</span><span class="default">1 </span><span class="keyword">&lt;&lt; </span><span class="default">32</span><span class="keyword">)); </span><span class="comment">//Fail, operation not succesfull in 32-bit machine<br /></span><span class="default">bprint</span><span class="keyword">(</span><span class="string">'shiftleft(1, 32) (Success)'</span><span class="keyword">, </span><span class="default">dec2bin</span><span class="keyword">(</span><span class="default">shiftleft</span><span class="keyword">(</span><span class="string">'1'</span><span class="keyword">, </span><span class="string">'32'</span><span class="keyword">))); </span><span class="comment">//decbin fails, so we use personalized function, success<br /><br /></span><span class="keyword">echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'Right Shift test&lt;br /&gt;'</span><span class="keyword">;<br /></span><span class="default">bprint</span><span class="keyword">(</span><span class="string">'9223372036854775808'</span><span class="keyword">, </span><span class="default">dec2bin</span><span class="keyword">(</span><span class="string">'9223372036854775808'</span><span class="keyword">));<br /></span><span class="default">bprint</span><span class="keyword">(</span><span class="string">'9223372036854775808 &gt;&gt; 63 (Fail)'</span><span class="keyword">, </span><span class="default">decbin</span><span class="keyword">(</span><span class="default">9223372036854775808 </span><span class="keyword">&gt;&gt; </span><span class="default">63</span><span class="keyword">));<br /></span><span class="default">bprint</span><span class="keyword">(</span><span class="string">'rightshift(9223372036854775808, 63) (Success)'</span><span class="keyword">, </span><span class="default">decbin</span><span class="keyword">(</span><span class="default">rightshift</span><span class="keyword">(</span><span class="string">'9223372036854775808'</span><span class="keyword">, </span><span class="string">'63'</span><span class="keyword">)));<br /><br />function </span><span class="default">shiftleft</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">, </span><span class="default">$bits</span><span class="keyword">) {<br />    return </span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">, </span><span class="default">bcpow</span><span class="keyword">(</span><span class="string">'2'</span><span class="keyword">, </span><span class="default">$bits</span><span class="keyword">));<br />}<br /><br />function </span><span class="default">rightshift</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">, </span><span class="default">$bits</span><span class="keyword">) {<br />    return </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">, </span><span class="default">bcpow</span><span class="keyword">(</span><span class="string">'2'</span><span class="keyword">, </span><span class="default">$bits</span><span class="keyword">));<br />}<br /><br />function </span><span class="default">bprint</span><span class="keyword">(</span><span class="default">$title</span><span class="keyword">, </span><span class="default">$content</span><span class="keyword">) {<br />    echo </span><span class="default">$title </span><span class="keyword">. </span><span class="string">'&lt;br /&gt;' </span><span class="keyword">. </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">, </span><span class="default">64</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">) . </span><span class="string">'&lt;br /&gt;' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//<a href="http://www.php.net/manual/en/function.decbin.php#99533" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.decbin.php#99533</a><br /></span><span class="keyword">function </span><span class="default">dec2bin</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">) {<br />    </span><span class="comment">// Better function for dec to bin. Support much bigger values, but doesn’t support signs<br />    </span><span class="keyword">for (</span><span class="default">$b </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">, </span><span class="default">$r </span><span class="keyword">= </span><span class="default">$dec</span><span class="keyword">; </span><span class="default">$r </span><span class="keyword">&gt;</span><span class="default">1</span><span class="keyword">;) {<br />        </span><span class="default">$n </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$r </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">);<br />        </span><span class="default">$b </span><span class="keyword">= (</span><span class="default">$r </span><span class="keyword">- </span><span class="default">$n </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">) . </span><span class="default">$b</span><span class="keyword">;<br />        </span><span class="default">$r </span><span class="keyword">= </span><span class="default">$n</span><span class="keyword">; </span><span class="comment">// $r%2 is inaccurate when using bigger values (like 11.435.168.214)!<br />    </span><span class="keyword">}<br />    return (</span><span class="default">$r </span><span class="keyword">% </span><span class="default">2</span><span class="keyword">) . </span><span class="default">$b</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110658">  <div class="votes">
    <div id="Vu110658">
    <a href="/manual/vote-note.php?id=110658&amp;page=function.bcmul&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110658">
    <a href="/manual/vote-note.php?id=110658&amp;page=function.bcmul&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110658" title="50% like this...">
    0
    </div>
  </div>
  <a href="#110658" class="name">
  <strong class="user"><em>gar37bic at gmail dot com</em></strong></a><a class="genanchor" href="#110658"> &para;</a><div class="date" title="2012-11-19 05:06"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110658">
<div class="phpcode"><code><span class="html">When using printf to print the results of bcmath operations, use string format, i.e. '%s', not numeric formats such as '%d' or '%f'.  For example, the output of factorial (23) will be incorrect if using %d or %f:<br /><br />Result using %f:<br />factorial (22) = 1124000727777607680000 (correct)<br />factorial (23) = 25852016738884978212864 (incorrect)<br /><br />Result using %s:<br />factorial (22) = 1124000727777607680000<br />factorial (23) = 25852016738884976640000<br /><br />Using echo, this is not a problem - PHP will output the bcmath string type correctly.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.bcmul&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.bcmul.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
