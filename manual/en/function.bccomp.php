<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: bccomp - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.bccomp.php">
 <link rel="shorturl" href="https://www.php.net/bccomp">
 <link rel="alternate" href="https://www.php.net/bccomp" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.bc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.bcceil.php">
 <link rel="next" href="https://www.php.net/manual/en/function.bcdiv.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.bccomp.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.bccomp.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.bccomp.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.bccomp.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.bccomp.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.bccomp.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.bccomp.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.bccomp.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.bccomp.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.bccomp.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.bccomp.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Compare two arbitrary precision numbers" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: bccomp - Manual" />
<meta name="twitter:description" content="Compare two arbitrary precision numbers" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: bccomp - Manual" />
<meta itemprop="description" content="Compare two arbitrary precision numbers" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Compare two arbitrary precision numbers" />

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
        <a href="function.bcdiv.php">
          bcdiv &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.bcceil.php">
          &laquo; bcceil        </a>
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
            <option value='en/function.bccomp.php' selected="selected">English</option>
            <option value='de/function.bccomp.php'>German</option>
            <option value='es/function.bccomp.php'>Spanish</option>
            <option value='fr/function.bccomp.php'>French</option>
            <option value='it/function.bccomp.php'>Italian</option>
            <option value='ja/function.bccomp.php'>Japanese</option>
            <option value='pt_BR/function.bccomp.php'>Brazilian Portuguese</option>
            <option value='ru/function.bccomp.php'>Russian</option>
            <option value='tr/function.bccomp.php'>Turkish</option>
            <option value='uk/function.bccomp.php'>Ukrainian</option>
            <option value='zh/function.bccomp.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.bccomp" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">bccomp</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">bccomp</span> &mdash; <span class="dc-title">Compare two arbitrary precision numbers</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.bccomp-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>bccomp</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$num1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$num2</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$scale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Compares <code class="parameter">num1</code> to <code class="parameter">num2</code>
   and returns the result of the comparison as an integer.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.bccomp-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-function.bccomp-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="simpara">
   Returns <code class="literal">0</code> if both operands are equal,
   <code class="literal">1</code> if <code class="parameter">num1</code> is greater than
   <code class="parameter">num2</code>, <code class="literal">-1</code> otherwise.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.bccomp-errors">
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


 <div class="refsect1 changelog" id="refsect1-function.bccomp-changelog">
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

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.bccomp-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-3266">
   <p><strong>Example #1 <span class="function"><strong>bccomp()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bccomp</span><span style="color: #007700">(</span><span style="color: #DD0000">'1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'2'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;   </span><span style="color: #FF8000">// -1<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bccomp</span><span style="color: #007700">(</span><span style="color: #DD0000">'1.00001'</span><span style="color: #007700">, </span><span style="color: #DD0000">'1'</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">); </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bccomp</span><span style="color: #007700">(</span><span style="color: #DD0000">'1.00001'</span><span style="color: #007700">, </span><span style="color: #DD0000">'1'</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">); </span><span style="color: #FF8000">// 1<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.bccomp-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="methodname"><a href="bcmath-number.compare.php" class="methodname" rel="rdfs-seeAlso">BcMath\Number::compare()</a> - Compares two arbitrary precision numbers</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/bc/functions/bccomp.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.bccomp%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.bccomp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.bccomp.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="96243">  <div class="votes">
    <div id="Vu96243">
    <a href="/manual/vote-note.php?id=96243&amp;page=function.bccomp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96243">
    <a href="/manual/vote-note.php?id=96243&amp;page=function.bccomp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96243" title="64% like this...">
    25
    </div>
  </div>
  <a href="#96243" class="name">
  <strong class="user"><em>Robert Lozyniak</em></strong></a><a class="genanchor" href="#96243"> &para;</a><div class="date" title="2010-02-16 10:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96243">
<div class="phpcode"><code><span class="html">Beware that negative zero does not compare equal to positive zero.</span></code></div>
  </div>
 </div>
  <div class="note" id="122409">  <div class="votes">
    <div id="Vu122409">
    <a href="/manual/vote-note.php?id=122409&amp;page=function.bccomp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122409">
    <a href="/manual/vote-note.php?id=122409&amp;page=function.bccomp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122409" title="68% like this...">
    15
    </div>
  </div>
  <a href="#122409" class="name">
  <strong class="user"><em>aaugrin at gmail dot com</em></strong></a><a class="genanchor" href="#122409"> &para;</a><div class="date" title="2018-02-19 10:01"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122409">
<div class="phpcode"><code><span class="html">BEWARE! left and right operand is string!! so number in E-notation like 9.012E-6  need to be converted with sprintf('%F') to string</span></code></div>
  </div>
 </div>
  <div class="note" id="129905">  <div class="votes">
    <div id="Vu129905">
    <a href="/manual/vote-note.php?id=129905&amp;page=function.bccomp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129905">
    <a href="/manual/vote-note.php?id=129905&amp;page=function.bccomp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129905" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#129905" class="name">
  <strong class="user"><em>mm at mobelt dot com</em></strong></a><a class="genanchor" href="#129905"> &para;</a><div class="date" title="2024-12-08 09:15"><strong>9 months ago</strong></div>
  <div class="text" id="Hcom129905">
<div class="phpcode"><code><span class="html">If you want to compare 2 decimals for equality, bccomp does not works as expected:<br /><br />bccomp("1.000000000000000","0.999999999999999",2)<br /><br />returns 1<br /><br />Instead, use<br /><br />bcsub("1.000000000000000","0.999999999999999",2) == 0</span></code></div>
  </div>
 </div>
  <div class="note" id="89504">  <div class="votes">
    <div id="Vu89504">
    <a href="/manual/vote-note.php?id=89504&amp;page=function.bccomp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89504">
    <a href="/manual/vote-note.php?id=89504&amp;page=function.bccomp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89504" title="46% like this...">
    -3
    </div>
  </div>
  <a href="#89504" class="name">
  <strong class="user"><em>m dot kaczanowski at alianet dot pl</em></strong></a><a class="genanchor" href="#89504"> &para;</a><div class="date" title="2009-03-11 06:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89504">
<div class="phpcode"><code><span class="html">Improvement of functions bcmax() and bcmin() originaly written by frank at booksku dot com<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">bcmax</span><span class="keyword">() {<br />  </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />  if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">)==</span><span class="default">0</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />  </span><span class="default">$max </span><span class="keyword">= </span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />  foreach(</span><span class="default">$args </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">) {<br />    if (</span><span class="default">bccomp</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">)==</span><span class="default">1</span><span class="keyword">) {<br />      </span><span class="default">$max </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />    }<br />  }<br />  return </span><span class="default">$max</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">bcmin</span><span class="keyword">() {<br />  </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />  if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">)==</span><span class="default">0</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />  </span><span class="default">$min </span><span class="keyword">= </span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />  foreach(</span><span class="default">$args </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">) {<br />    if (</span><span class="default">bccomp</span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)==</span><span class="default">1</span><span class="keyword">) {<br />      </span><span class="default">$min </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />    }<br />  }<br />  return </span><span class="default">$min</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.bccomp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.bccomp.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
