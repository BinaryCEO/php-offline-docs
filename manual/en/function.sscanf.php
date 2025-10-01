<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: sscanf - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.sscanf.php">
 <link rel="shorturl" href="https://www.php.net/sscanf">
 <link rel="alternate" href="https://www.php.net/sscanf" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.sprintf.php">
 <link rel="next" href="https://www.php.net/manual/en/function.str-contains.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.sscanf.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.sscanf.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.sscanf.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.sscanf.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.sscanf.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.sscanf.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.sscanf.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.sscanf.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.sscanf.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.sscanf.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.sscanf.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parses input from a string according to a format" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: sscanf - Manual" />
<meta name="twitter:description" content="Parses input from a string according to a format" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: sscanf - Manual" />
<meta itemprop="description" content="Parses input from a string according to a format" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parses input from a string according to a format" />

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
        <a href="function.str-contains.php">
          str_contains &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.sprintf.php">
          &laquo; sprintf        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.sscanf.php' selected="selected">English</option>
            <option value='de/function.sscanf.php'>German</option>
            <option value='es/function.sscanf.php'>Spanish</option>
            <option value='fr/function.sscanf.php'>French</option>
            <option value='it/function.sscanf.php'>Italian</option>
            <option value='ja/function.sscanf.php'>Japanese</option>
            <option value='pt_BR/function.sscanf.php'>Brazilian Portuguese</option>
            <option value='ru/function.sscanf.php'>Russian</option>
            <option value='tr/function.sscanf.php'>Turkish</option>
            <option value='uk/function.sscanf.php'>Ukrainian</option>
            <option value='zh/function.sscanf.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.sscanf" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">sscanf</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.1, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">sscanf</span> &mdash; <span class="dc-title">Parses input from a string according to a format</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.sscanf-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>sscanf</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&...$vars</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>

  <p class="para rdfs-comment">
   The function <span class="function"><strong>sscanf()</strong></span> is the input analog of
   <span class="function"><a href="function.printf.php" class="function">printf()</a></span>. <span class="function"><strong>sscanf()</strong></span> reads
   from the string <code class="parameter">string</code> and interprets it
   according to the specified <code class="parameter">format</code>. 
  </p>
  <p class="para">
   Any whitespace in the format string matches any whitespace in the input
   string. This means that even a tab (<code class="literal">\t</code>) in the format string can match a
   single space character in the input string.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.sscanf-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The input <span class="type"><a href="language.types.string.php" class="type string">string</a></span> being parsed.
      </p>
     </dd>
    
    

     <dt><code class="parameter">format</code></dt>
     <dd>
      <p class="para">
       The interpreted format for <code class="parameter">string</code>, which is
       described in the documentation for <span class="function"><a href="function.sprintf.php" class="function">sprintf()</a></span> with
       following differences:
       <ul class="simplelist">
        <li>
         Function is not locale-aware.
        </li>
        <li>
         <code class="literal">F</code>, <code class="literal">g</code>, <code class="literal">G</code> and
         <code class="literal">b</code> are not supported.
        </li>
        <li>
         <code class="literal">D</code> stands for decimal number.
        </li>
        <li>
         <code class="literal">i</code> stands for integer with base detection.
        </li>
        <li>
         <code class="literal">n</code> stands for number of characters processed so far.
        </li>
        <li>
         <code class="literal">s</code> stops reading at any whitespace character.
        </li>
        <li>
         <code class="literal">*</code> instead of <code class="literal">argnum$</code> suppresses
         the assignment of this conversion specification.
        </li>
       </ul>
      </p>
     </dd>
    

    
     <dt><code class="parameter">vars</code></dt>
     <dd>
      <p class="para">
       Optionally pass in variables by reference that will contain the parsed values.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.sscanf-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   If only two parameters were passed to this function, the values parsed will
   be returned as an array. Otherwise, if optional parameters are passed, the
   function will return the number of assigned values. The optional parameters
   must be passed by reference.
  </p>
  <p class="para">
   If there are more substrings expected in the <code class="parameter">format</code>
   than there are available within <code class="parameter">string</code>,
   <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> will be returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.sscanf-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5124">
    <p><strong>Example #1 <span class="function"><strong>sscanf()</strong></span> Example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// getting the serial number<br /></span><span style="color: #007700">list(</span><span style="color: #0000BB">$serial</span><span style="color: #007700">) = </span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"SN/2350001"</span><span style="color: #007700">, </span><span style="color: #DD0000">"SN/%d"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// and the date of manufacturing<br /></span><span style="color: #0000BB">$mandate </span><span style="color: #007700">= </span><span style="color: #DD0000">"January 01 2000"</span><span style="color: #007700">;<br />list(</span><span style="color: #0000BB">$month</span><span style="color: #007700">, </span><span style="color: #0000BB">$day</span><span style="color: #007700">, </span><span style="color: #0000BB">$year</span><span style="color: #007700">) = </span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">$mandate</span><span style="color: #007700">, </span><span style="color: #DD0000">"%s %d %d"</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Item </span><span style="color: #0000BB">$serial</span><span style="color: #DD0000"> was manufactured on: </span><span style="color: #0000BB">$year</span><span style="color: #DD0000">-" </span><span style="color: #007700">. </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$month</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">) . </span><span style="color: #DD0000">"-</span><span style="color: #0000BB">$day</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   If optional parameters are passed, the function will return the
   number of assigned values.
  </p>
  <p class="para">
   <div class="example" id="example-5125">
    <p><strong>Example #2 <span class="function"><strong>sscanf()</strong></span> - using optional parameters</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// get author info and generate DocBook entry<br /></span><span style="color: #0000BB">$auth </span><span style="color: #007700">= </span><span style="color: #DD0000">"24\tLewis Carroll"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$n </span><span style="color: #007700">= </span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">$auth</span><span style="color: #007700">, </span><span style="color: #DD0000">"%d\t%s %s"</span><span style="color: #007700">, </span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #0000BB">$first</span><span style="color: #007700">, </span><span style="color: #0000BB">$last</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"&lt;author id='</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">'&gt;<br />    &lt;firstname&gt;</span><span style="color: #0000BB">$first</span><span style="color: #DD0000">&lt;/firstname&gt;<br />    &lt;surname&gt;</span><span style="color: #0000BB">$last</span><span style="color: #DD0000">&lt;/surname&gt;<br />&lt;/author&gt;\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.sscanf-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.printf.php" class="function" rel="rdfs-seeAlso">printf()</a> - Output a formatted string</span></li>
    <li><span class="function"><a href="function.sprintf.php" class="function" rel="rdfs-seeAlso">sprintf()</a> - Return a formatted string</span></li>
    <li><span class="function"><a href="function.fprintf.php" class="function" rel="rdfs-seeAlso">fprintf()</a> - Write a formatted string to a stream</span></li>
    <li><span class="function"><a href="function.vprintf.php" class="function" rel="rdfs-seeAlso">vprintf()</a> - Output a formatted string</span></li>
    <li><span class="function"><a href="function.vsprintf.php" class="function" rel="rdfs-seeAlso">vsprintf()</a> - Return a formatted string</span></li>
    <li><span class="function"><a href="function.vfprintf.php" class="function" rel="rdfs-seeAlso">vfprintf()</a> - Write a formatted string to a stream</span></li>
    <li><span class="function"><a href="function.fscanf.php" class="function" rel="rdfs-seeAlso">fscanf()</a> - Parses input from a file according to a format</span></li>
    <li><span class="function"><a href="function.number-format.php" class="function" rel="rdfs-seeAlso">number_format()</a> - Format a number with grouped thousands</span></li>
    <li><span class="function"><a href="function.date.php" class="function" rel="rdfs-seeAlso">date()</a> - Format a Unix timestamp</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/sscanf.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.sscanf%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.sscanf&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sscanf.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="25190">  <div class="votes">
    <div id="Vu25190">
    <a href="/manual/vote-note.php?id=25190&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25190">
    <a href="/manual/vote-note.php?id=25190&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25190" title="80% like this...">
    73
    </div>
  </div>
  <a href="#25190" class="name">
  <strong class="user"><em>jon at fuck dot org</em></strong></a><a class="genanchor" href="#25190"> &para;</a><div class="date" title="2002-09-13 11:27"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25190">
<div class="phpcode"><code><span class="html">this function is a great way to get integer rgb values from the html equivalent hex.<br /><br />list($r, $g, $b) = sscanf('00ccff', '%2x%2x%2x');</span></code></div>
  </div>
 </div>
  <div class="note" id="19430">  <div class="votes">
    <div id="Vu19430">
    <a href="/manual/vote-note.php?id=19430&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19430">
    <a href="/manual/vote-note.php?id=19430&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19430" title="88% like this...">
    19
    </div>
  </div>
  <a href="#19430" class="name">
  <strong class="user"><em>elgabos at umail dot ucsb dot edu</em></strong></a><a class="genanchor" href="#19430"> &para;</a><div class="date" title="2002-02-27 03:38"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19430">
<div class="phpcode"><code><span class="html">After playing around with this for a while, I found that if you use %[^[]] instead of %s (since php has problems with spaces when using %s) it works nicely. <br /><br />For those that aren't familiar with regular expressions, %[^[]] basically matches anything that isn't nothing.<br /><br />Hope this helps. - Gabe</span></code></div>
  </div>
 </div>
  <div class="note" id="81842">  <div class="votes">
    <div id="Vu81842">
    <a href="/manual/vote-note.php?id=81842&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81842">
    <a href="/manual/vote-note.php?id=81842&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81842" title="71% like this...">
    18
    </div>
  </div>
  <a href="#81842" class="name">
  <strong class="user"><em>mikewillitsgmail.com</em></strong></a><a class="genanchor" href="#81842"> &para;</a><div class="date" title="2008-03-15 11:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81842">
<div class="phpcode"><code><span class="html">FYI - if you are trying to scan from a string which contains a filename with extension. For instance:<br /><br /><span class="default">&lt;?php<br /><br />$out </span><span class="keyword">= </span><span class="default">sscanf</span><span class="keyword">(</span><span class="string">'file_name.gif'</span><span class="keyword">, </span><span class="string">'file_%s.%s'</span><span class="keyword">, </span><span class="default">$fpart1</span><span class="keyword">, </span><span class="default">$fpart2</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />The scanned string in the $fpart1 parameter turns out to be 'name.gif' and $fpart2 will be NULL.<br /><br />To get around this you can simply replace the "." with a space or another "white-space like" string sequence.<br /><br />I didn't see any other comments on regarding string literals which contain a '.' so I thought I'd mention it. The subtle characteristics of having "white-space delimited" content I think can be a source of usage contention. Obviously, another way to go is regular expressions in this instance, but for newer users this may be helpful.<br /><br />Just in case someone else spent 10 minutes of frustration like I did. This was seen on PHP Version 5.2.3-1ubuntu6.3.<br /><br />Searching the bug reports shows another users misunderstanding: <a href="http://bugs.php.net/bug.php?id=7793" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=7793</a></span></code></div>
  </div>
 </div>
  <div class="note" id="56076">  <div class="votes">
    <div id="Vu56076">
    <a href="/manual/vote-note.php?id=56076&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56076">
    <a href="/manual/vote-note.php?id=56076&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56076" title="75% like this...">
    6
    </div>
  </div>
  <a href="#56076" class="name">
  <strong class="user"><em>Brainiac361</em></strong></a><a class="genanchor" href="#56076"> &para;</a><div class="date" title="2005-08-22 01:49"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56076">
<div class="phpcode"><code><span class="html">The %[^[]]-trick may seem to work, but it doesn't!<br /><br />What happens is that sscanf will simply match any characters but an opening square bracket (which is rather rare and that's why it might just seem to work).<br />But even worse it will expect a ]-character next and continue to match anything.<br /><br />Now what you can do is make sscanf look for any character but a character that is really never used... a good choice is the linebreak "%[^\\n]", especially in combination with fscanf.<br /><br />What you can also do is copy and paste any unused ascii character like #001 or something.</span></code></div>
  </div>
 </div>
  <div class="note" id="85069">  <div class="votes">
    <div id="Vu85069">
    <a href="/manual/vote-note.php?id=85069&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85069">
    <a href="/manual/vote-note.php?id=85069&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85069" title="66% like this...">
    7
    </div>
  </div>
  <a href="#85069" class="name">
  <strong class="user"><em>leg</em></strong></a><a class="genanchor" href="#85069"> &para;</a><div class="date" title="2008-08-13 09:20"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85069">
<div class="phpcode"><code><span class="html">@mikewillitsgmail.com:<br /><br /><span class="default">&lt;?php<br /><br />$out </span><span class="keyword">= </span><span class="default">sscanf</span><span class="keyword">(</span><span class="string">'file_name.gif'</span><span class="keyword">, </span><span class="string">'file_%[^.].%s'</span><span class="keyword">, </span><span class="default">$fpart1</span><span class="keyword">, </span><span class="default">$fpart2</span><span class="keyword">);<br /><br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$fpart1</span><span class="keyword">);<br />echo </span><span class="string">'&lt;hr /&gt;'</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$fpart2</span><span class="keyword">);<br />echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />output:<br /><br />name<br />-<br />gif<br /><br />The "^." part avoid the first searched string to be too greedy. But doesn't protect you against an "file_test.name.gif" input, with bad results!</span></code></div>
  </div>
 </div>
  <div class="note" id="68565">  <div class="votes">
    <div id="Vu68565">
    <a href="/manual/vote-note.php?id=68565&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68565">
    <a href="/manual/vote-note.php?id=68565&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68565" title="63% like this...">
    3
    </div>
  </div>
  <a href="#68565" class="name">
  <strong class="user"><em>anonymouse</em></strong></a><a class="genanchor" href="#68565"> &para;</a><div class="date" title="2006-08-01 09:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68565">
<div class="phpcode"><code><span class="html">I've seen several examples of people using brackets to define what look like regexp character classes. In my limited testing I don't think they are genuine character classes but they seem to be similar.<br /><br />My task was to use sscanf() to parse an array of strings with the format:<br /><br />number SPACE string_which_may_also_have_spaces<br /><br />The normal %s conversion command treats spaces as some kind of delimiter. So, you can get the strings if you know beforehand how many "words" there will be. But, my input was variable.<br /><br />Here's what I came up with: (note use of the dollar-sign 'end of string' hidden delimiter)<br /><br />sscanf($string_to_parse,'%d %[^$]s',$num,$text);<br /><br />This conversion command says "look for an integer, then a space, then any string up to the end of the string"</span></code></div>
  </div>
 </div>
  <div class="note" id="49713">  <div class="votes">
    <div id="Vu49713">
    <a href="/manual/vote-note.php?id=49713&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49713">
    <a href="/manual/vote-note.php?id=49713&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49713" title="61% like this...">
    3
    </div>
  </div>
  <a href="#49713" class="name">
  <strong class="user"><em>codeslinger at compsalot dot com</em></strong></a><a class="genanchor" href="#49713"> &para;</a><div class="date" title="2005-02-06 06:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49713">
<div class="phpcode"><code><span class="html">Security Note:<br /><br />Although it is a very powerful technique, keep in mind that it is easily deceived.<br /><br />Many successful exploits have been based on scanf attacks.  It should not be used on untrusted input without a lot of additional validation.</span></code></div>
  </div>
 </div>
  <div class="note" id="63526">  <div class="votes">
    <div id="Vu63526">
    <a href="/manual/vote-note.php?id=63526&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63526">
    <a href="/manual/vote-note.php?id=63526&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63526" title="60% like this...">
    3
    </div>
  </div>
  <a href="#63526" class="name">
  <strong class="user"><em>skeltoac</em></strong></a><a class="genanchor" href="#63526"> &para;</a><div class="date" title="2006-03-22 08:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63526">
<div class="phpcode"><code><span class="html">To parse a line from an Apache access log in common format:<br /><br /><span class="default">&lt;?php<br />$log </span><span class="keyword">= array();<br /></span><span class="default">$n </span><span class="keyword">= </span><span class="default">sscanf</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">), </span><span class="string">'%s %s %s [%[^]]] "%s %s %[^"]" %d %s "%[^"]" "%[^"]"'</span><span class="keyword">,<br />    </span><span class="default">$log</span><span class="keyword">[</span><span class="string">'ip'</span><span class="keyword">],<br />    </span><span class="default">$log</span><span class="keyword">[</span><span class="string">'client'</span><span class="keyword">],<br />    </span><span class="default">$log</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">],<br />    </span><span class="default">$log</span><span class="keyword">[</span><span class="string">'time'</span><span class="keyword">],<br />    </span><span class="default">$log</span><span class="keyword">[</span><span class="string">'method'</span><span class="keyword">],<br />    </span><span class="default">$log</span><span class="keyword">[</span><span class="string">'uri'</span><span class="keyword">],<br />    </span><span class="default">$log</span><span class="keyword">[</span><span class="string">'prot'</span><span class="keyword">],<br />    </span><span class="default">$log</span><span class="keyword">[</span><span class="string">'code'</span><span class="keyword">],<br />    </span><span class="default">$log</span><span class="keyword">[</span><span class="string">'bytes'</span><span class="keyword">],<br />    </span><span class="default">$log</span><span class="keyword">[</span><span class="string">'ref'</span><span class="keyword">],<br />    </span><span class="default">$log</span><span class="keyword">[</span><span class="string">'agent'</span><span class="keyword">]<br />);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53890">  <div class="votes">
    <div id="Vu53890">
    <a href="/manual/vote-note.php?id=53890&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53890">
    <a href="/manual/vote-note.php?id=53890&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53890" title="60% like this...">
    3
    </div>
  </div>
  <a href="#53890" class="name">
  <strong class="user"><em>Vincent Jansen</em></strong></a><a class="genanchor" href="#53890"> &para;</a><div class="date" title="2005-06-16 01:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53890">
<div class="phpcode"><code><span class="html">If you just wants filter out information between two parts of a string, i used the following, it works better for me then the sscanf function. <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">scanstr</span><span class="keyword">(</span><span class="default">$zoekstr</span><span class="keyword">,</span><span class="default">$part1</span><span class="keyword">,</span><span class="default">$part2</span><span class="keyword">) {<br /></span><span class="default">$firstpos</span><span class="keyword">=</span><span class="default">strpos </span><span class="keyword">(</span><span class="default">$zoekstr</span><span class="keyword">, </span><span class="default">$part1</span><span class="keyword">)+</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$part1</span><span class="keyword">);<br /></span><span class="default">$lastpos</span><span class="keyword">=</span><span class="default">strpos </span><span class="keyword">(</span><span class="default">$zoekstr</span><span class="keyword">, </span><span class="default">$part2</span><span class="keyword">);<br /></span><span class="default">$scanresult</span><span class="keyword">=</span><span class="default">substr </span><span class="keyword">(</span><span class="default">$zoekstr</span><span class="keyword">, </span><span class="default">$firstpos</span><span class="keyword">, </span><span class="default">$lastpos</span><span class="keyword">-</span><span class="default">$firstpos</span><span class="keyword">);<br />    return(</span><span class="default">$scanresult</span><span class="keyword">);<br />}<br />echo </span><span class="default">scanstr </span><span class="keyword">(</span><span class="string">"var1=hello&amp;var2=test&amp;var3=more"</span><span class="keyword">,</span><span class="string">"var2="</span><span class="keyword">,</span><span class="string">"&amp;var3"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="16041">  <div class="votes">
    <div id="Vu16041">
    <a href="/manual/vote-note.php?id=16041&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16041">
    <a href="/manual/vote-note.php?id=16041&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16041" title="60% like this...">
    3
    </div>
  </div>
  <a href="#16041" class="name">
  <strong class="user"><em>narainsbrain at yahoo dot com</em></strong></a><a class="genanchor" href="#16041"> &para;</a><div class="date" title="2001-10-14 03:25"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16041">
<div class="phpcode"><code><span class="html">apparently, sscanf always splits at spaces, even if spaces are not specified in the format. consider this script:
<br />
<br /><span class="default">&lt;?php
<br />$str </span><span class="keyword">= </span><span class="string">"This is a\tsentence with\ttabs"</span><span class="keyword">;
<br /></span><span class="default">$scanned </span><span class="keyword">= </span><span class="default">sscanf</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">"%s\t%s\t%s"</span><span class="keyword">);
<br />echo </span><span class="default">join</span><span class="keyword">(</span><span class="string">" : "</span><span class="keyword">, </span><span class="default">$scanned</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />this echoes "This : is : a", not the expected "This is a : sentence with : tabs."
<br />this behaviour is fine if your strings don't contain spaces, but if they do you'd be better off using explode().</span></code></div>
  </div>
 </div>
  <div class="note" id="110143">  <div class="votes">
    <div id="Vu110143">
    <a href="/manual/vote-note.php?id=110143&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110143">
    <a href="/manual/vote-note.php?id=110143&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110143" title="57% like this...">
    3
    </div>
  </div>
  <a href="#110143" class="name">
  <strong class="user"><em>Victor</em></strong></a><a class="genanchor" href="#110143"> &para;</a><div class="date" title="2012-09-23 10:24"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110143">
<div class="phpcode"><code><span class="html">One thing to note: unlike C/C++, a variable %n is assigned to will be counted in the return value.</span></code></div>
  </div>
 </div>
  <div class="note" id="125224">  <div class="votes">
    <div id="Vu125224">
    <a href="/manual/vote-note.php?id=125224&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125224">
    <a href="/manual/vote-note.php?id=125224&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125224" title="57% like this...">
    1
    </div>
  </div>
  <a href="#125224" class="name">
  <strong class="user"><em>Philo</em></strong></a><a class="genanchor" href="#125224"> &para;</a><div class="date" title="2020-07-28 10:13"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125224">
<div class="phpcode"><code><span class="html">It should also be noted that when used with sscanf both x and X produce the same output (i.e. they are case-insensitive).<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">sscanf</span><span class="keyword">(</span><span class="string">"0xdead|0XDEAD"</span><span class="keyword">, </span><span class="string">"%X|%x"</span><span class="keyword">)); </span><span class="comment">// works</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54785">  <div class="votes">
    <div id="Vu54785">
    <a href="/manual/vote-note.php?id=54785&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54785">
    <a href="/manual/vote-note.php?id=54785&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54785" title="53% like this...">
    1
    </div>
  </div>
  <a href="#54785" class="name">
  <strong class="user"><em>joshmckenneyATgmailDOT(0{</em></strong></a><a class="genanchor" href="#54785"> &para;</a><div class="date" title="2005-07-14 03:21"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54785">
<div class="phpcode"><code><span class="html">added country code (1) to phone number function:<br /><br />function formatPhone($phone) {<br />       if (empty($phone)) return "";<br />       if (strlen($phone) == 7)<br />               sscanf($phone, "%3s%4s", $prefix, $exchange);<br />       else if (strlen($phone) == 10)<br />               sscanf($phone, "%3s%3s%4s", $area, $prefix, $exchange);<br />       else if (strlen($phone) &gt; 10)<br />               if(substr($phone,0,1)=='1') {<br />                                 sscanf($phone, "%1s%3s%3s%4s", $country, $area, $prefix, $exchange);<br />                             }<br />                             else{<br />                                 sscanf($phone, "%3s%3s%4s%s", $area, $prefix, $exchange, $extension);<br />                                }<br />       else<br />               return "unknown phone format: $phone";<br />       $out = "";<br />       $out .= isset($country) ? $country.' ' : '';<br />       $out .= isset($area) ? '(' . $area . ') ' : '';<br />       $out .= $prefix . '-' . $exchange;<br />       $out .= isset($extension) ? ' x' . $extension : '';<br />       return $out;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="8420">  <div class="votes">
    <div id="Vu8420">
    <a href="/manual/vote-note.php?id=8420&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd8420">
    <a href="/manual/vote-note.php?id=8420&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V8420" title="50% like this...">
    0
    </div>
  </div>
  <a href="#8420" class="name">
  <strong class="user"><em>clcollie at mindspring dot com</em></strong></a><a class="genanchor" href="#8420"> &para;</a><div class="date" title="2000-09-12 04:59"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom8420">
<div class="phpcode"><code><span class="html">Actually sscanf()_always_ returns an array if you specify less return variables than format specifiers. i may change this to return a scalar if only a single format specifier exists.
<br />  Note that sscanf() is (almost) the complete functional equivalent of its "C" counterpart, so you can do the following to get the expected effect :
<br />
<br />   sscanf("SN/2350001","SN/%d",&amp;$serial)
<br />
<br />The array return was a nicety for PHP.</span></code></div>
  </div>
 </div>
  <div class="note" id="26996">  <div class="votes">
    <div id="Vu26996">
    <a href="/manual/vote-note.php?id=26996&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26996">
    <a href="/manual/vote-note.php?id=26996&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26996" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#26996" class="name">
  <strong class="user"><em>sbarnum.pointsystems@com</em></strong></a><a class="genanchor" href="#26996"> &para;</a><div class="date" title="2002-11-19 07:21"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26996">
<div class="phpcode"><code><span class="html">More fun with phones!  This assumes that the phone number is 10 digits, with only numeric data, but it would be easy to check the length of the string first.<br /><br />function formatPhone($phone) {<br />        if (empty($phone)) return "";<br />        sscanf($phone, "%3d%3d%4d", $area, $prefix, $exchange);<br />        $out = @$area ? "($area) " : "";<br />        $out .= $prefix . '-' . $exchange;<br />        return $out;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="30636">  <div class="votes">
    <div id="Vu30636">
    <a href="/manual/vote-note.php?id=30636&amp;page=function.sscanf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30636">
    <a href="/manual/vote-note.php?id=30636&amp;page=function.sscanf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30636" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#30636" class="name">
  <strong class="user"><em>marcus at synchromedia dot co dot uk</em></strong></a><a class="genanchor" href="#30636"> &para;</a><div class="date" title="2003-03-24 09:38"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30636">
<div class="phpcode"><code><span class="html">In PHP &gt;= 4.3.0, if you use additional reference parameters, you will get this warning:<br /><br />PHP Warning:  Call-time pass-by-reference has been deprecated - argument passed by value<br /><br />This clearly has the potential to cause unexpected consequences (vars left empty), and will break existing code. So don't do it! These docs need updating to say this too.<br /><br />The syntax:<br /><br />    list($a, $b) = sscanf("hello world", "%s %s");<br /><br />will work as expected, and doesn't seem to cause any problems with Apache that I've noticed.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.sscanf&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sscanf.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="current">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
