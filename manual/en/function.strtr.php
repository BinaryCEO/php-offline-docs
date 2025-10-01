<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strtr - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strtr.php">
 <link rel="shorturl" href="https://www.php.net/strtr">
 <link rel="alternate" href="https://www.php.net/strtr" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.strtoupper.php">
 <link rel="next" href="https://www.php.net/manual/en/function.substr.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strtr.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strtr.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strtr.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strtr.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strtr.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strtr.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strtr.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strtr.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strtr.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strtr.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strtr.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Translate characters or replace substrings" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strtr - Manual" />
<meta name="twitter:description" content="Translate characters or replace substrings" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strtr - Manual" />
<meta itemprop="description" content="Translate characters or replace substrings" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Translate characters or replace substrings" />

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
        <a href="function.substr.php">
          substr &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.strtoupper.php">
          &laquo; strtoupper        </a>
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
            <option value='en/function.strtr.php' selected="selected">English</option>
            <option value='de/function.strtr.php'>German</option>
            <option value='es/function.strtr.php'>Spanish</option>
            <option value='fr/function.strtr.php'>French</option>
            <option value='it/function.strtr.php'>Italian</option>
            <option value='ja/function.strtr.php'>Japanese</option>
            <option value='pt_BR/function.strtr.php'>Brazilian Portuguese</option>
            <option value='ru/function.strtr.php'>Russian</option>
            <option value='tr/function.strtr.php'>Turkish</option>
            <option value='uk/function.strtr.php'>Ukrainian</option>
            <option value='zh/function.strtr.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strtr" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strtr</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strtr</span> &mdash; <span class="dc-title">Translate characters or replace substrings</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.strtr-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>strtr</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$from</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$to</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="simpara">Alternative signature (not supported with named arguments):</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>strtr</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$replace_pairs</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   If given three arguments, this function returns a copy of
   <code class="parameter">string</code> where all occurrences of each (single-byte)
   character in <code class="parameter">from</code> have been translated to the
   corresponding character in <code class="parameter">to</code>, i.e., every
   occurrence of <code class="literal">$from[$n]</code> has been replaced with
   <code class="literal">$to[$n]</code>, where <code class="literal">$n</code> is a valid
   offset in both arguments.
  </p>
  <p class="para">
   If <code class="parameter">from</code> and <code class="parameter">to</code> have
   different lengths, the extra characters in the longer of the two
   are ignored. The length of <code class="parameter">string</code> will be the same as
   the return value&#039;s.
  </p>
  <p class="para">
   If given two arguments, the second should be an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> in the
   form <code class="literal">array(&#039;from&#039; =&gt; &#039;to&#039;, ...)</code>. The return value is
   a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> where all the occurrences of the array keys have been
   replaced by the corresponding values. The longest keys will be tried first.
   Once a substring has been replaced, its new value will not be searched
   again.
  </p>
  <p class="para">
   In this case, the keys and the values may have any length, provided that
   there is no empty key; additionally, the length of the return value may
   differ from that of <code class="parameter">string</code>.
   However, this function will be the most efficient when all the keys have the
   same size.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strtr-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> being translated.
      </p>
     </dd>
    
    
     <dt><code class="parameter">from</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> being translated to <code class="parameter">to</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">to</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> replacing <code class="parameter">from</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">replace_pairs</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">replace_pairs</code> parameter may be used instead of 
       <code class="parameter">to</code> and <code class="parameter">from</code>, in which case it&#039;s an
       <span class="type"><a href="language.types.array.php" class="type array">array</a></span> in the form <code class="literal">array(&#039;from&#039; =&gt; &#039;to&#039;, ...)</code>. 
      </p>
      <p class="para">
       If <code class="parameter">replace_pairs</code> contains a key which is an empty
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span> (<code class="literal">&quot;&quot;</code>), the element is ignored;
       as of PHP 8.0.0 <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is raised in this case.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.strtr-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the translated <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.strtr-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5178">
    <p><strong>Example #1 <span class="function"><strong>strtr()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$addr </span><span style="color: #007700">= </span><span style="color: #DD0000">"The river å"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// In this form, strtr() does byte-by-byte translation<br />// Therefore, we are assuming a single-byte encoding here:<br /></span><span style="color: #0000BB">$addr </span><span style="color: #007700">= </span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$addr</span><span style="color: #007700">, </span><span style="color: #DD0000">"äåö"</span><span style="color: #007700">, </span><span style="color: #DD0000">"aao"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$addr</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   The next example shows the behavior of <span class="function"><strong>strtr()</strong></span> when
   called with only two arguments. Note the preference of the replacements
   (<code class="literal">&quot;h&quot;</code> is not picked because there are longer matches)
   and how replaced text was not searched again.
  </p>
  <div class="example" id="example-5179">
   <p><strong>Example #2 <span class="function"><strong>strtr()</strong></span> example with two arguments</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$trans </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"h" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"-"</span><span style="color: #007700">, </span><span style="color: #DD0000">"hello" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"hi"</span><span style="color: #007700">, </span><span style="color: #DD0000">"hi" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"hello"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #DD0000">"hi all, I said hello"</span><span style="color: #007700">, </span><span style="color: #0000BB">$trans</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">hello all, I said hi</pre>
</div>
    </div>
  </div>
  <p class="para">
   The two modes of behavior are substantially different. With three arguments,
   <span class="function"><strong>strtr()</strong></span> will replace bytes; with two, it may replace
   longer substrings.
  </p>
  <div class="example" id="example-5180">
   <p><strong>Example #3 <span class="function"><strong>strtr()</strong></span> behavior comparison</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #DD0000">"baab"</span><span style="color: #007700">, </span><span style="color: #DD0000">"ab"</span><span style="color: #007700">, </span><span style="color: #DD0000">"01"</span><span style="color: #007700">),</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$trans </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"ab" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"01"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #DD0000">"baab"</span><span style="color: #007700">, </span><span style="color: #0000BB">$trans</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">1001
ba01</pre>
</div>
    </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.strtr-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.str-replace.php" class="function" rel="rdfs-seeAlso">str_replace()</a> - Replace all occurrences of the search string with the replacement string</span></li>
    <li><span class="function"><a href="function.preg-replace.php" class="function" rel="rdfs-seeAlso">preg_replace()</a> - Perform a regular expression search and replace</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/strtr.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strtr%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strtr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strtr.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">32 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117169">  <div class="votes">
    <div id="Vu117169">
    <a href="/manual/vote-note.php?id=117169&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117169">
    <a href="/manual/vote-note.php?id=117169&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117169" title="90% like this...">
    127
    </div>
  </div>
  <a href="#117169" class="name">
  <strong class="user"><em>evan dot king at NOSPAM dot example dot com</em></strong></a><a class="genanchor" href="#117169"> &para;</a><div class="date" title="2015-04-24 03:05"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117169">
<div class="phpcode"><code><span class="html">Here's an important real-world example use-case for strtr where str_replace will not work or will introduce obscure bugs:<br /><br /><span class="default">&lt;?php<br /><br />$strTemplate </span><span class="keyword">= </span><span class="string">"My name is :name, not :name2."</span><span class="keyword">;<br /></span><span class="default">$strParams </span><span class="keyword">= [<br />  </span><span class="string">':name' </span><span class="keyword">=&gt; </span><span class="string">'Dave'</span><span class="keyword">,<br />  </span><span class="string">'Dave' </span><span class="keyword">=&gt; </span><span class="string">':name2 or :password'</span><span class="keyword">, </span><span class="comment">// a wrench in the otherwise sensible input<br />  </span><span class="string">':name2' </span><span class="keyword">=&gt; </span><span class="string">'Steve'</span><span class="keyword">,<br />  </span><span class="string">':pass' </span><span class="keyword">=&gt; </span><span class="string">'7hf2348'</span><span class="keyword">, </span><span class="comment">// sensitive data that maybe shouldn't be here<br /></span><span class="keyword">];<br /><br />echo </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$strTemplate</span><span class="keyword">, </span><span class="default">$strParams</span><span class="keyword">);<br /></span><span class="comment">// "My name is Dave, not Steve."<br /><br /></span><span class="keyword">echo </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$strParams</span><span class="keyword">), </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$strParams</span><span class="keyword">), </span><span class="default">$strTemplate</span><span class="keyword">);<br /></span><span class="comment">// "My name is Steve or 7hf2348word, not Steve or 7hf2348word2."<br /><br /></span><span class="default">?&gt;<br /></span><br />Any time you're trying to template out a string and don't necessarily know what the replacement keys/values will be (or fully understand the implications of and control their content and order), str_replace will introduce the potential to incorrectly match your keys because it does not expand the longest keys first.<br /><br />Further, str_replace will replace in previous replacements, introducing potential for unintended nested expansions.  Doing so can put the wrong data into the "sub-template" or even give users a chance to provide input that exposes data (if they get to define some of the replacement strings).<br /><br />Don't support recursive expansion unless you need it and know it will be safe.  When you do support it, do so explicitly by repeating strtr calls until no more expansions are occurring or a sane iteration limit is reached, so that the results never implicitly depend on order of your replacement keys.  Also make certain that any user input will expanded in an isolated step after any sensitive data is already expanded into the output and no longer available as input.<br /><br />Note: using some character(s) around your keys to designate them also reduces the possibility of unintended mangling of output, whether maliciously triggered or otherwise.  Thus the use of a colon prefix in these examples, which you can easily enforce when accepting replacement input to your templating/translation system.</span></code></div>
  </div>
 </div>
  <div class="note" id="111270">  <div class="votes">
    <div id="Vu111270">
    <a href="/manual/vote-note.php?id=111270&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111270">
    <a href="/manual/vote-note.php?id=111270&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111270" title="88% like this...">
    65
    </div>
  </div>
  <a href="#111270" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#111270"> &para;</a><div class="date" title="2013-02-01 02:04"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111270">
<div class="phpcode"><code><span class="html">Since strtr (like PHP's other string functions) treats strings as a sequence of bytes, and since UTF-8 and other multibyte encodings use - by definition - more than one byte for at least some characters, the three-string form is likely to have problems. Use the associative array form to specify the mapping.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Assuming UTF-8<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">'Äbc Äbc'</span><span class="keyword">; </span><span class="comment">// strtr() sees this as nine bytes (including two for each Ä)<br /></span><span class="keyword">echo </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">'Ä'</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">); </span><span class="comment">// The second argument is equivalent to the string "\xc3\x84" so "\xc3" gets replaced by "a" and the "\x84" is ignored<br /><br /></span><span class="keyword">echo </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, array(</span><span class="string">'Ä' </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">)); </span><span class="comment">// Works much better<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90925">  <div class="votes">
    <div id="Vu90925">
    <a href="/manual/vote-note.php?id=90925&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90925">
    <a href="/manual/vote-note.php?id=90925&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90925" title="75% like this...">
    20
    </div>
  </div>
  <a href="#90925" class="name">
  <strong class="user"><em>allixsenos at gmail dot com</em></strong></a><a class="genanchor" href="#90925"> &para;</a><div class="date" title="2009-05-16 08:55"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90925">
<div class="phpcode"><code><span class="html">fixed "normaliza" functions written below to include Slavic Latin characters... also, it doesn't return lowercase any more (you can easily get that by applying strtolower yourself)...<br /><br />also, renamed to normalize()<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">normalize </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />    </span><span class="default">$table </span><span class="keyword">= array(<br />        </span><span class="string">'Š'</span><span class="keyword">=&gt;</span><span class="string">'S'</span><span class="keyword">, </span><span class="string">'š'</span><span class="keyword">=&gt;</span><span class="string">'s'</span><span class="keyword">, </span><span class="string">'Đ'</span><span class="keyword">=&gt;</span><span class="string">'Dj'</span><span class="keyword">, </span><span class="string">'đ'</span><span class="keyword">=&gt;</span><span class="string">'dj'</span><span class="keyword">, </span><span class="string">'Ž'</span><span class="keyword">=&gt;</span><span class="string">'Z'</span><span class="keyword">, </span><span class="string">'ž'</span><span class="keyword">=&gt;</span><span class="string">'z'</span><span class="keyword">, </span><span class="string">'Č'</span><span class="keyword">=&gt;</span><span class="string">'C'</span><span class="keyword">, </span><span class="string">'č'</span><span class="keyword">=&gt;</span><span class="string">'c'</span><span class="keyword">, </span><span class="string">'Ć'</span><span class="keyword">=&gt;</span><span class="string">'C'</span><span class="keyword">, </span><span class="string">'ć'</span><span class="keyword">=&gt;</span><span class="string">'c'</span><span class="keyword">,<br />        </span><span class="string">'À'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Á'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Â'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Ã'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Ä'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Å'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Æ'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Ç'</span><span class="keyword">=&gt;</span><span class="string">'C'</span><span class="keyword">, </span><span class="string">'È'</span><span class="keyword">=&gt;</span><span class="string">'E'</span><span class="keyword">, </span><span class="string">'É'</span><span class="keyword">=&gt;</span><span class="string">'E'</span><span class="keyword">,<br />        </span><span class="string">'Ê'</span><span class="keyword">=&gt;</span><span class="string">'E'</span><span class="keyword">, </span><span class="string">'Ë'</span><span class="keyword">=&gt;</span><span class="string">'E'</span><span class="keyword">, </span><span class="string">'Ì'</span><span class="keyword">=&gt;</span><span class="string">'I'</span><span class="keyword">, </span><span class="string">'Í'</span><span class="keyword">=&gt;</span><span class="string">'I'</span><span class="keyword">, </span><span class="string">'Î'</span><span class="keyword">=&gt;</span><span class="string">'I'</span><span class="keyword">, </span><span class="string">'Ï'</span><span class="keyword">=&gt;</span><span class="string">'I'</span><span class="keyword">, </span><span class="string">'Ñ'</span><span class="keyword">=&gt;</span><span class="string">'N'</span><span class="keyword">, </span><span class="string">'Ò'</span><span class="keyword">=&gt;</span><span class="string">'O'</span><span class="keyword">, </span><span class="string">'Ó'</span><span class="keyword">=&gt;</span><span class="string">'O'</span><span class="keyword">, </span><span class="string">'Ô'</span><span class="keyword">=&gt;</span><span class="string">'O'</span><span class="keyword">,<br />        </span><span class="string">'Õ'</span><span class="keyword">=&gt;</span><span class="string">'O'</span><span class="keyword">, </span><span class="string">'Ö'</span><span class="keyword">=&gt;</span><span class="string">'O'</span><span class="keyword">, </span><span class="string">'Ø'</span><span class="keyword">=&gt;</span><span class="string">'O'</span><span class="keyword">, </span><span class="string">'Ù'</span><span class="keyword">=&gt;</span><span class="string">'U'</span><span class="keyword">, </span><span class="string">'Ú'</span><span class="keyword">=&gt;</span><span class="string">'U'</span><span class="keyword">, </span><span class="string">'Û'</span><span class="keyword">=&gt;</span><span class="string">'U'</span><span class="keyword">, </span><span class="string">'Ü'</span><span class="keyword">=&gt;</span><span class="string">'U'</span><span class="keyword">, </span><span class="string">'Ý'</span><span class="keyword">=&gt;</span><span class="string">'Y'</span><span class="keyword">, </span><span class="string">'Þ'</span><span class="keyword">=&gt;</span><span class="string">'B'</span><span class="keyword">, </span><span class="string">'ß'</span><span class="keyword">=&gt;</span><span class="string">'Ss'</span><span class="keyword">,<br />        </span><span class="string">'à'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'á'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'â'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'ã'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'ä'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'å'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'æ'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'ç'</span><span class="keyword">=&gt;</span><span class="string">'c'</span><span class="keyword">, </span><span class="string">'è'</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">, </span><span class="string">'é'</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">,<br />        </span><span class="string">'ê'</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">, </span><span class="string">'ë'</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">, </span><span class="string">'ì'</span><span class="keyword">=&gt;</span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'í'</span><span class="keyword">=&gt;</span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'î'</span><span class="keyword">=&gt;</span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'ï'</span><span class="keyword">=&gt;</span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'ð'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'ñ'</span><span class="keyword">=&gt;</span><span class="string">'n'</span><span class="keyword">, </span><span class="string">'ò'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'ó'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">,<br />        </span><span class="string">'ô'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'õ'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'ö'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'ø'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'ù'</span><span class="keyword">=&gt;</span><span class="string">'u'</span><span class="keyword">, </span><span class="string">'ú'</span><span class="keyword">=&gt;</span><span class="string">'u'</span><span class="keyword">, </span><span class="string">'û'</span><span class="keyword">=&gt;</span><span class="string">'u'</span><span class="keyword">, </span><span class="string">'ý'</span><span class="keyword">=&gt;</span><span class="string">'y'</span><span class="keyword">, </span><span class="string">'ý'</span><span class="keyword">=&gt;</span><span class="string">'y'</span><span class="keyword">, </span><span class="string">'þ'</span><span class="keyword">=&gt;</span><span class="string">'b'</span><span class="keyword">,<br />        </span><span class="string">'ÿ'</span><span class="keyword">=&gt;</span><span class="string">'y'</span><span class="keyword">, </span><span class="string">'Ŕ'</span><span class="keyword">=&gt;</span><span class="string">'R'</span><span class="keyword">, </span><span class="string">'ŕ'</span><span class="keyword">=&gt;</span><span class="string">'r'</span><span class="keyword">,<br />    );<br />    <br />    return </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$table</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123120">  <div class="votes">
    <div id="Vu123120">
    <a href="/manual/vote-note.php?id=123120&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123120">
    <a href="/manual/vote-note.php?id=123120&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123120" title="70% like this...">
    8
    </div>
  </div>
  <a href="#123120" class="name">
  <strong class="user"><em>Annubis</em></strong></a><a class="genanchor" href="#123120"> &para;</a><div class="date" title="2018-09-09 06:49"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123120">
<div class="phpcode"><code><span class="html">Since I was having a lot of trouble finding a multibyte safe strtr and the solutions I found didn't help, I came out with this function, I don't know how it works with non latin chars but it works for me using spanish/french utf8, I hope it helps someone... <br /><span class="default">&lt;?php<br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_strtr'</span><span class="keyword">)) {<br />    function </span><span class="default">mb_strtr </span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$from</span><span class="keyword">, </span><span class="default">$to </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$from</span><span class="keyword">)) {<br />            </span><span class="default">$from </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'utf8_decode'</span><span class="keyword">, </span><span class="default">$from</span><span class="keyword">);<br />            </span><span class="default">$from </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'utf8_decode'</span><span class="keyword">, </span><span class="default">array_flip </span><span class="keyword">(</span><span class="default">$from</span><span class="keyword">));<br />            return </span><span class="default">utf8_encode </span><span class="keyword">(</span><span class="default">strtr </span><span class="keyword">(</span><span class="default">utf8_decode </span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">), </span><span class="default">array_flip </span><span class="keyword">(</span><span class="default">$from</span><span class="keyword">)));<br />        }<br />        return </span><span class="default">utf8_encode </span><span class="keyword">(</span><span class="default">strtr </span><span class="keyword">(</span><span class="default">utf8_decode </span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">), </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$from</span><span class="keyword">), </span><span class="default">utf8_decode </span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">)));<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75286">  <div class="votes">
    <div id="Vu75286">
    <a href="/manual/vote-note.php?id=75286&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75286">
    <a href="/manual/vote-note.php?id=75286&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75286" title="69% like this...">
    5
    </div>
  </div>
  <a href="#75286" class="name">
  <strong class="user"><em>horak.jan AT centrum.cz</em></strong></a><a class="genanchor" href="#75286"> &para;</a><div class="date" title="2007-05-22 07:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75286">
<div class="phpcode"><code><span class="html">Here is a function to convert middle-european windows charset (cp1250) to the charset, that php script is written in:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">cp1250_to_utf2</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">){<br />        </span><span class="default">$dict  </span><span class="keyword">= array(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">225</span><span class="keyword">) =&gt; </span><span class="string">'á'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">228</span><span class="keyword">) =&gt;  </span><span class="string">'ä'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">232</span><span class="keyword">) =&gt; </span><span class="string">'č'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">239</span><span class="keyword">) =&gt; </span><span class="string">'ď'</span><span class="keyword">, <br />            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">233</span><span class="keyword">) =&gt; </span><span class="string">'é'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">236</span><span class="keyword">) =&gt; </span><span class="string">'ě'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">237</span><span class="keyword">) =&gt; </span><span class="string">'í'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">229</span><span class="keyword">) =&gt; </span><span class="string">'ĺ'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">229</span><span class="keyword">) =&gt; </span><span class="string">'ľ'</span><span class="keyword">, <br />            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">242</span><span class="keyword">) =&gt; </span><span class="string">'ň'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">244</span><span class="keyword">) =&gt; </span><span class="string">'ô'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">243</span><span class="keyword">) =&gt; </span><span class="string">'ó'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">154</span><span class="keyword">) =&gt; </span><span class="string">'š'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">248</span><span class="keyword">) =&gt; </span><span class="string">'ř'</span><span class="keyword">, <br />            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">250</span><span class="keyword">) =&gt; </span><span class="string">'ú'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">249</span><span class="keyword">) =&gt; </span><span class="string">'ů'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">157</span><span class="keyword">) =&gt; </span><span class="string">'ť'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">253</span><span class="keyword">) =&gt; </span><span class="string">'ý'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">158</span><span class="keyword">) =&gt; </span><span class="string">'ž'</span><span class="keyword">,<br />            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">193</span><span class="keyword">) =&gt; </span><span class="string">'Á'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">196</span><span class="keyword">) =&gt; </span><span class="string">'Ä'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">200</span><span class="keyword">) =&gt; </span><span class="string">'Č'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">207</span><span class="keyword">) =&gt; </span><span class="string">'Ď'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">201</span><span class="keyword">) =&gt; </span><span class="string">'É'</span><span class="keyword">, <br />            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">204</span><span class="keyword">) =&gt; </span><span class="string">'Ě'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">205</span><span class="keyword">) =&gt; </span><span class="string">'Í'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">197</span><span class="keyword">) =&gt; </span><span class="string">'Ĺ'</span><span class="keyword">,    </span><span class="default">chr</span><span class="keyword">(</span><span class="default">188</span><span class="keyword">) =&gt; </span><span class="string">'Ľ'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">210</span><span class="keyword">) =&gt; </span><span class="string">'Ň'</span><span class="keyword">, <br />            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">212</span><span class="keyword">) =&gt; </span><span class="string">'Ô'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">211</span><span class="keyword">) =&gt; </span><span class="string">'Ó'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">138</span><span class="keyword">) =&gt; </span><span class="string">'Š'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">216</span><span class="keyword">) =&gt; </span><span class="string">'Ř'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">218</span><span class="keyword">) =&gt; </span><span class="string">'Ú'</span><span class="keyword">, <br />            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">217</span><span class="keyword">) =&gt; </span><span class="string">'Ů'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">141</span><span class="keyword">) =&gt; </span><span class="string">'Ť'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">221</span><span class="keyword">) =&gt; </span><span class="string">'Ý'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">142</span><span class="keyword">) =&gt; </span><span class="string">'Ž'</span><span class="keyword">, <br />            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">150</span><span class="keyword">) =&gt; </span><span class="string">'-'</span><span class="keyword">);<br />        return </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$dict</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82051">  <div class="votes">
    <div id="Vu82051">
    <a href="/manual/vote-note.php?id=82051&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82051">
    <a href="/manual/vote-note.php?id=82051&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82051" title="65% like this...">
    13
    </div>
  </div>
  <a href="#82051" class="name">
  <strong class="user"><em> dot  dot  dot  dot  dot alexander at gmail dot com</em></strong></a><a class="genanchor" href="#82051"> &para;</a><div class="date" title="2008-03-25 04:09"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82051">
<div class="phpcode"><code><span class="html">OK, I debugged the function (had some errors)<br />Here it is:<br /><br />if(!function_exists("stritr")){<br />    function stritr($string, $one = NULL, $two = NULL){<br />/*<br />stritr - case insensitive version of strtr<br />Author: Alexander Peev<br />Posted in PHP.NET<br />*/<br />        if(  is_string( $one )  ){<br />            $two = strval( $two );<br />            $one = substr(  $one, 0, min( strlen($one), strlen($two) )  );<br />            $two = substr(  $two, 0, min( strlen($one), strlen($two) )  );<br />            $product = strtr(  $string, ( strtoupper($one) . strtolower($one) ), ( $two . $two )  );<br />            return $product;<br />        }<br />        else if(  is_array( $one )  ){<br />            $pos1 = 0;<br />            $product = $string;<br />            while(  count( $one ) &gt; 0  ){<br />                $positions = array();<br />                foreach(  $one as $from =&gt; $to  ){<br />                    if(   (  $pos2 = stripos( $product, $from, $pos1 )  ) === FALSE   ){<br />                        unset(  $one[ $from ]  );<br />                    }<br />                    else{<br />                        $positions[ $from ] = $pos2;<br />                    }<br />                }<br />                if(  count( $one ) &lt;= 0  )break;<br />                $winner = min( $positions );<br />                $key = array_search(  $winner, $positions  );<br />                $product = (   substr(  $product, 0, $winner  ) . $one[$key] . substr(  $product, ( $winner + strlen($key) )  )   );<br />                $pos1 = (  $winner + strlen( $one[$key] )  );<br />            }<br />            return $product;<br />        }<br />        else{<br />            return $string;<br />        }<br />    }/* endfunction stritr */<br />}/* endfunction exists stritr */</span></code></div>
  </div>
 </div>
  <div class="note" id="106282">  <div class="votes">
    <div id="Vu106282">
    <a href="/manual/vote-note.php?id=106282&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106282">
    <a href="/manual/vote-note.php?id=106282&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106282" title="66% like this...">
    8
    </div>
  </div>
  <a href="#106282" class="name">
  <strong class="user"><em>Michael Schuijff</em></strong></a><a class="genanchor" href="#106282"> &para;</a><div class="date" title="2011-10-24 10:02"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106282">
<div class="phpcode"><code><span class="html">I found that this approach is often faster than strtr() and won't change the same thing in your string twice (as opposed to str_replace(), which will overwrite things in the order of the array you feed it with):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">replace </span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">) {<br />    </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$replace</span><span class="keyword">);<br />    </span><span class="default">$length </span><span class="keyword">= </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'strlen'</span><span class="keyword">, </span><span class="default">$keys</span><span class="keyword">));<br />    </span><span class="default">arsort</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">);<br />    <br />    </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">$text</span><span class="keyword">;<br />    </span><span class="default">$count </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">);<br />    while (</span><span class="default">$key </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">)) {<br />        if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) {<br />            for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">2</span><span class="keyword">) {<br />                if ((</span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$key</span><span class="keyword">)) === </span><span class="default">false</span><span class="keyword">) continue;<br />                </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, array(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">), </span><span class="default">$replace</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$pos </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">))));<br />                </span><span class="default">$count </span><span class="keyword">+= </span><span class="default">2</span><span class="keyword">;<br />            }<br />        }<br />        </span><span class="default">next</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">);<br />    }<br />    return </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112930">  <div class="votes">
    <div id="Vu112930">
    <a href="/manual/vote-note.php?id=112930&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112930">
    <a href="/manual/vote-note.php?id=112930&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112930" title="63% like this...">
    6
    </div>
  </div>
  <a href="#112930" class="name">
  <strong class="user"><em>dcz at phpbb-seo dot com</em></strong></a><a class="genanchor" href="#112930"> &para;</a><div class="date" title="2013-08-08 08:26"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112930">
<div class="phpcode"><code><span class="html">strstr will issue a notice when $replace_pairs contains an array, even unused, with php 5.5.0.<br /><br />It was not the case with version at least up to 5.3.2, but I'm not sure the notice was added with exactly 5.5.0.<br /><br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= </span><span class="string">'hi all, I said hello'</span><span class="keyword">;<br /></span><span class="default">$replace_pairs </span><span class="keyword">= array(<br />      </span><span class="string">'all' </span><span class="keyword">=&gt; </span><span class="string">'everybody'</span><span class="keyword">,<br />    </span><span class="string">'unused' </span><span class="keyword">=&gt; array(</span><span class="string">'somtehing'</span><span class="keyword">, </span><span class="string">'something else'</span><span class="keyword">),<br />     </span><span class="string">'hello' </span><span class="keyword">=&gt; </span><span class="string">'hey'</span><span class="keyword">,<br />);<br /></span><span class="comment">// php 5.5.0 Notice: Array to string conversion in test.php on line 8<br /></span><span class="keyword">echo </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$replace_pairs</span><span class="keyword">); </span><span class="comment">// hi everybody, I said hey<br /></span><span class="default">?&gt;<br /></span><br />since the result is still correct, @strstr seems a working solution.</span></code></div>
  </div>
 </div>
  <div class="note" id="97439">  <div class="votes">
    <div id="Vu97439">
    <a href="/manual/vote-note.php?id=97439&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97439">
    <a href="/manual/vote-note.php?id=97439&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97439" title="62% like this...">
    4
    </div>
  </div>
  <a href="#97439" class="name">
  <strong class="user"><em>elloromtz at gmail dot com</em></strong></a><a class="genanchor" href="#97439"> &para;</a><div class="date" title="2010-04-19 05:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97439">
<div class="phpcode"><code><span class="html">If you supply 3 arguments and the 2nd is an array, strtr will search the "A" from "Array" (because you're treating it as a scalar string) and replace it with the 3rd argument:<br /><br />strtr('Analogy', array('x'=&gt;'y'),  '_'); //'_nalogy'<br /><br />so in reality the above code has the same affect as:<br /><br />strtr('Analogy', 'A' , '_');</span></code></div>
  </div>
 </div>
  <div class="note" id="82039">  <div class="votes">
    <div id="Vu82039">
    <a href="/manual/vote-note.php?id=82039&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82039">
    <a href="/manual/vote-note.php?id=82039&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82039" title="61% like this...">
    5
    </div>
  </div>
  <a href="#82039" class="name">
  <strong class="user"><em> dot  dot  dot  dot  dot alexander at gmail dot com</em></strong></a><a class="genanchor" href="#82039"> &para;</a><div class="date" title="2008-03-25 10:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82039">
<div class="phpcode"><code><span class="html">Here is the stritr I always needed... I wrote it in 15 minutes... But only after the idea struck me. Hope you find it helpful, and enjoy...<br /><span class="default">&lt;?php<br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"stritr"</span><span class="keyword">)){<br />    function </span><span class="default">stritr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$one </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$two </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">){<br /></span><span class="comment">/*<br />stritr - case insensitive version of strtr<br />Author: Alexander Peev<br />Posted in PHP.NET<br />*/<br />        </span><span class="keyword">if(  </span><span class="default">is_string</span><span class="keyword">( </span><span class="default">$one </span><span class="keyword">)  ){<br />            </span><span class="default">$two </span><span class="keyword">= </span><span class="default">strval</span><span class="keyword">( </span><span class="default">$two </span><span class="keyword">);<br />            </span><span class="default">$one </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(  </span><span class="default">$one</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">min</span><span class="keyword">( </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$one</span><span class="keyword">), </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$two</span><span class="keyword">) )  );<br />            </span><span class="default">$two </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(  </span><span class="default">$two</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">min</span><span class="keyword">( </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$one</span><span class="keyword">), </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$two</span><span class="keyword">) )  );<br />            </span><span class="default">$product </span><span class="keyword">= </span><span class="default">strtr</span><span class="keyword">(  </span><span class="default">$string</span><span class="keyword">, ( </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$one</span><span class="keyword">) . </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$one</span><span class="keyword">) ), ( </span><span class="default">$two </span><span class="keyword">. </span><span class="default">$two </span><span class="keyword">)  );<br />            return </span><span class="default">$product</span><span class="keyword">;<br />        }<br />        else if(  </span><span class="default">is_array</span><span class="keyword">( </span><span class="default">$one </span><span class="keyword">)  ){<br />            </span><span class="default">$pos1 </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            </span><span class="default">$product </span><span class="keyword">= </span><span class="default">$string</span><span class="keyword">;<br />            while(  </span><span class="default">count</span><span class="keyword">( </span><span class="default">$one </span><span class="keyword">) &gt; </span><span class="default">0  </span><span class="keyword">){<br />                </span><span class="default">$positions </span><span class="keyword">= array();<br />                foreach(  </span><span class="default">$one </span><span class="keyword">as </span><span class="default">$from </span><span class="keyword">=&gt; </span><span class="default">$to  </span><span class="keyword">){<br />                    if(   (  </span><span class="default">$pos2 </span><span class="keyword">= </span><span class="default">stripos</span><span class="keyword">( </span><span class="default">$product</span><span class="keyword">, </span><span class="default">$from</span><span class="keyword">, </span><span class="default">$pos1 </span><span class="keyword">)  ) === </span><span class="default">FALSE   </span><span class="keyword">){<br />                        unset(  </span><span class="default">$one</span><span class="keyword">[ </span><span class="default">$from </span><span class="keyword">]  );<br />                    }<br />                    else{<br />                        </span><span class="default">$positions</span><span class="keyword">[ </span><span class="default">$from </span><span class="keyword">] = </span><span class="default">$pos2</span><span class="keyword">;<br />                    }<br />                }<br />                </span><span class="default">$winner </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">( </span><span class="default">$positions </span><span class="keyword">);<br />                </span><span class="default">$key </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(  </span><span class="default">$winner</span><span class="keyword">, </span><span class="default">$positions  </span><span class="keyword">);<br />                </span><span class="default">$product </span><span class="keyword">= (   </span><span class="default">substr</span><span class="keyword">(  </span><span class="default">$product</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$winner  </span><span class="keyword">) . </span><span class="default">$positions</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] . </span><span class="default">substr</span><span class="keyword">(  </span><span class="default">$product</span><span class="keyword">, ( </span><span class="default">$winner </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) )  )   );<br />                </span><span class="default">$pos1 </span><span class="keyword">= (  </span><span class="default">$winner </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$positions</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] )  );<br />            }<br />            return </span><span class="default">$product</span><span class="keyword">;<br />        }<br />        else{<br />            return </span><span class="default">$string</span><span class="keyword">;<br />        }<br />    }</span><span class="comment">/* endfunction stritr */<br /></span><span class="keyword">}</span><span class="comment">/* endfunction exists stritr */<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110524">  <div class="votes">
    <div id="Vu110524">
    <a href="/manual/vote-note.php?id=110524&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110524">
    <a href="/manual/vote-note.php?id=110524&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110524" title="60% like this...">
    6
    </div>
  </div>
  <a href="#110524" class="name">
  <strong class="user"><em>Tedy</em></strong></a><a class="genanchor" href="#110524"> &para;</a><div class="date" title="2012-11-01 08:43"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110524">
<div class="phpcode"><code><span class="html">Since strtr() is twice faster than strlwr I decided to write my own lowering function which also handles UTF-8 characters.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">strlwr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$utf </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">)<br />{<br />    </span><span class="default">$latin_letters </span><span class="keyword">= array(</span><span class="string">'Ă' </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">,<br />                            </span><span class="string">'Â' </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">,<br />                            </span><span class="string">'Î' </span><span class="keyword">=&gt; </span><span class="string">'i'</span><span class="keyword">,<br />                            </span><span class="string">'Ș' </span><span class="keyword">=&gt; </span><span class="string">'s'</span><span class="keyword">,<br />                            </span><span class="string">'Ş' </span><span class="keyword">=&gt; </span><span class="string">'s'</span><span class="keyword">,<br />                            </span><span class="string">'Ț' </span><span class="keyword">=&gt; </span><span class="string">'t'</span><span class="keyword">,<br />                            </span><span class="string">'Ţ' </span><span class="keyword">=&gt; </span><span class="string">'t'</span><span class="keyword">);<br />                            <br />    </span><span class="default">$utf_letters </span><span class="keyword">= array(</span><span class="string">'Ă' </span><span class="keyword">=&gt; </span><span class="string">'ă'</span><span class="keyword">,<br />                        </span><span class="string">'Â' </span><span class="keyword">=&gt; </span><span class="string">'â'</span><span class="keyword">,<br />                        </span><span class="string">'Î' </span><span class="keyword">=&gt; </span><span class="string">'î'</span><span class="keyword">,<br />                        </span><span class="string">'Ș' </span><span class="keyword">=&gt; </span><span class="string">'ș'</span><span class="keyword">,<br />                        </span><span class="string">'Ş' </span><span class="keyword">=&gt; </span><span class="string">'ş'</span><span class="keyword">,<br />                        </span><span class="string">'Ț' </span><span class="keyword">=&gt; </span><span class="string">'ț'</span><span class="keyword">,<br />                        </span><span class="string">'Ţ' </span><span class="keyword">=&gt; </span><span class="string">'ţ'</span><span class="keyword">);<br />                      <br />    </span><span class="default">$letters </span><span class="keyword">= array(</span><span class="string">'A' </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">,<br />                    </span><span class="string">'B' </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">,<br />                    </span><span class="string">'C' </span><span class="keyword">=&gt; </span><span class="string">'c'</span><span class="keyword">,<br />                    </span><span class="string">'D' </span><span class="keyword">=&gt; </span><span class="string">'d'</span><span class="keyword">,<br />                    </span><span class="string">'E' </span><span class="keyword">=&gt; </span><span class="string">'e'</span><span class="keyword">,<br />                    </span><span class="string">'F' </span><span class="keyword">=&gt; </span><span class="string">'f'</span><span class="keyword">,<br />                    </span><span class="string">'G' </span><span class="keyword">=&gt; </span><span class="string">'g'</span><span class="keyword">,<br />                    </span><span class="string">'H' </span><span class="keyword">=&gt; </span><span class="string">'h'</span><span class="keyword">,<br />                    </span><span class="string">'I' </span><span class="keyword">=&gt; </span><span class="string">'i'</span><span class="keyword">,<br />                    </span><span class="string">'J' </span><span class="keyword">=&gt; </span><span class="string">'j'</span><span class="keyword">,<br />                    </span><span class="string">'K' </span><span class="keyword">=&gt; </span><span class="string">'k'</span><span class="keyword">,<br />                    </span><span class="string">'L' </span><span class="keyword">=&gt; </span><span class="string">'l'</span><span class="keyword">,<br />                    </span><span class="string">'M' </span><span class="keyword">=&gt; </span><span class="string">'m'</span><span class="keyword">,<br />                    </span><span class="string">'N' </span><span class="keyword">=&gt; </span><span class="string">'n'</span><span class="keyword">,<br />                    </span><span class="string">'O' </span><span class="keyword">=&gt; </span><span class="string">'o'</span><span class="keyword">,<br />                    </span><span class="string">'P' </span><span class="keyword">=&gt; </span><span class="string">'p'</span><span class="keyword">,<br />                    </span><span class="string">'Q' </span><span class="keyword">=&gt; </span><span class="string">'q'</span><span class="keyword">,<br />                    </span><span class="string">'R' </span><span class="keyword">=&gt; </span><span class="string">'r'</span><span class="keyword">,<br />                    </span><span class="string">'S' </span><span class="keyword">=&gt; </span><span class="string">'s'</span><span class="keyword">,<br />                    </span><span class="string">'T' </span><span class="keyword">=&gt; </span><span class="string">'t'</span><span class="keyword">,<br />                    </span><span class="string">'U' </span><span class="keyword">=&gt; </span><span class="string">'u'</span><span class="keyword">,<br />                    </span><span class="string">'V' </span><span class="keyword">=&gt; </span><span class="string">'v'</span><span class="keyword">,<br />                    </span><span class="string">'W' </span><span class="keyword">=&gt; </span><span class="string">'w'</span><span class="keyword">,<br />                    </span><span class="string">'X' </span><span class="keyword">=&gt; </span><span class="string">'x'</span><span class="keyword">,<br />                    </span><span class="string">'Y' </span><span class="keyword">=&gt; </span><span class="string">'y'</span><span class="keyword">,<br />                    </span><span class="string">'Z' </span><span class="keyword">=&gt; </span><span class="string">'z'</span><span class="keyword">);<br />    <br />    return (</span><span class="default">$utf </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) ? </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$utf_letters</span><span class="keyword">, </span><span class="default">$letters</span><span class="keyword">)) : </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$latin_letters</span><span class="keyword">, </span><span class="default">$letters</span><span class="keyword">));<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This allows you to lower every character (even UTF-8 ones) if you don't set the second parameter, or just lower the UTF-8 ones into their specific latin characters (used when making friendly-urls for example). <br /><br />I used romanian characters but, of course, you can add your own local characters. <br /><br />Feel free to use/modify this function as you wish. Hope it helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="80591">  <div class="votes">
    <div id="Vu80591">
    <a href="/manual/vote-note.php?id=80591&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80591">
    <a href="/manual/vote-note.php?id=80591&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80591" title="61% like this...">
    4
    </div>
  </div>
  <a href="#80591" class="name">
  <strong class="user"><em>troelskn at gmail dot com</em></strong></a><a class="genanchor" href="#80591"> &para;</a><div class="date" title="2008-01-23 03:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80591">
<div class="phpcode"><code><span class="html">Here's another transcribe function. This one converts cp1252 (aka. Windows-1252) into iso-8859-1 (aka. latin1, the default PHP charset). It only transcribes the few exotic characters, which are unique to cp1252.<br /><br />function transcribe_cp1252_to_latin1($cp1252) {<br />  return strtr(<br />    $cp1252,<br />    array(<br />      "\x80" =&gt; "e",  "\x81" =&gt; " ",    "\x82" =&gt; "'", "\x83" =&gt; 'f',<br />      "\x84" =&gt; '"',  "\x85" =&gt; "...",  "\x86" =&gt; "+", "\x87" =&gt; "#",<br />      "\x88" =&gt; "^",  "\x89" =&gt; "0/00", "\x8A" =&gt; "S", "\x8B" =&gt; "&lt;",<br />      "\x8C" =&gt; "OE", "\x8D" =&gt; " ",    "\x8E" =&gt; "Z", "\x8F" =&gt; " ",<br />      "\x90" =&gt; " ",  "\x91" =&gt; "`",    "\x92" =&gt; "'", "\x93" =&gt; '"',<br />      "\x94" =&gt; '"',  "\x95" =&gt; "*",    "\x96" =&gt; "-", "\x97" =&gt; "--",<br />      "\x98" =&gt; "~",  "\x99" =&gt; "(TM)", "\x9A" =&gt; "s", "\x9B" =&gt; "&gt;",<br />      "\x9C" =&gt; "oe", "\x9D" =&gt; " ",    "\x9E" =&gt; "z", "\x9F" =&gt; "Y"));</span></code></div>
  </div>
 </div>
  <div class="note" id="60195">  <div class="votes">
    <div id="Vu60195">
    <a href="/manual/vote-note.php?id=60195&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60195">
    <a href="/manual/vote-note.php?id=60195&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60195" title="61% like this...">
    4
    </div>
  </div>
  <a href="#60195" class="name">
  <strong class="user"><em>martin[dot]pelikan[at]gmail[dot]com</em></strong></a><a class="genanchor" href="#60195"> &para;</a><div class="date" title="2005-12-29 07:20"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60195">
<div class="phpcode"><code><span class="html">// if you are upset with windows' ^M characters at the end of the line,<br />// these two lines are for you:<br />$trans = array("\x0D" =&gt; "");<br />$text = strtr($orig_text,$trans);<br /><br />// note that ctrl+M (in vim known as ^M) is hexadecimally 0x0D</span></code></div>
  </div>
 </div>
  <div class="note" id="85556">  <div class="votes">
    <div id="Vu85556">
    <a href="/manual/vote-note.php?id=85556&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85556">
    <a href="/manual/vote-note.php?id=85556&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85556" title="60% like this...">
    5
    </div>
  </div>
  <a href="#85556" class="name">
  <strong class="user"><em>Sidney Ricardo</em></strong></a><a class="genanchor" href="#85556"> &para;</a><div class="date" title="2008-09-05 11:54"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85556">
<div class="phpcode"><code><span class="html">This work fine to me:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">normaliza </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">){
<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="string">'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
<br />ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ'</span><span class="keyword">;
<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="string">'aaaaaaaceeeeiiiidnoooooouuuuy
<br />bsaaaaaaaceeeeiiiidnoooooouuuyybyRr'</span><span class="keyword">; 
<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);     
<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">), </span><span class="default">$b</span><span class="keyword">);
<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br />    return </span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112959">  <div class="votes">
    <div id="Vu112959">
    <a href="/manual/vote-note.php?id=112959&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112959">
    <a href="/manual/vote-note.php?id=112959&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112959" title="57% like this...">
    3
    </div>
  </div>
  <a href="#112959" class="name">
  <strong class="user"><em>doydoy44</em></strong></a><a class="genanchor" href="#112959"> &para;</a><div class="date" title="2013-08-12 04:01"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112959">
<div class="phpcode"><code><span class="html">The example of VOVA (<a href="http://www.php.net/manual/fr/function.strtr.php#111968" rel="nofollow" target="_blank">http://www.php.net/manual/fr/function.strtr.php#111968</a>) is good but the result is false:<br />His example dont replace the string.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">f1_strtr</span><span class="keyword">() {<br />  for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">1000000</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {<br />    </span><span class="default">$new_string </span><span class="keyword">= </span><span class="default">strtr</span><span class="keyword">(</span><span class="string">"aboutdealers.com"</span><span class="keyword">, array(</span><span class="string">".com" </span><span class="keyword">=&gt; </span><span class="string">""</span><span class="keyword">));<br />  }<br />  return </span><span class="default">$new_string</span><span class="keyword">;<br />}<br />function </span><span class="default">f2_str_replace</span><span class="keyword">() {<br />  for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">1000000</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {<br />    </span><span class="default">$new_string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">( </span><span class="string">".com"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="string">"aboutdealers.com"</span><span class="keyword">);<br />  }<br />  return </span><span class="default">$new_string</span><span class="keyword">;<br />}<br /></span><span class="default">$start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$strtr </span><span class="keyword">= </span><span class="default">f1_strtr</span><span class="keyword">();<br /></span><span class="default">$stop </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$time_strtr </span><span class="keyword">= </span><span class="default">$stop </span><span class="keyword">- </span><span class="default">$start</span><span class="keyword">;<br /> <br /></span><span class="default">$start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$str_replace </span><span class="keyword">= </span><span class="default">f2_str_replace</span><span class="keyword">();<br /></span><span class="default">$stop </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$time_str_replace </span><span class="keyword">= </span><span class="default">$stop </span><span class="keyword">- </span><span class="default">$start</span><span class="keyword">;<br /> <br /> <br />echo </span><span class="string">'time strtr       : ' </span><span class="keyword">. </span><span class="default">$time_strtr       </span><span class="keyword">. </span><span class="string">"\tresult :" </span><span class="keyword">. </span><span class="default">$strtr       </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">'time str_replace : ' </span><span class="keyword">. </span><span class="default">$time_str_replace </span><span class="keyword">. </span><span class="string">"\tresult :" </span><span class="keyword">. </span><span class="default">$str_replace </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">'time strtr &gt; time str_replace =&gt; ' </span><span class="keyword">. (</span><span class="default">$time_strtr </span><span class="keyword">&gt; </span><span class="default">$time_str_replace</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>--------------------------------------<br />time strtr       : 3.9719619750977      result :aboutdealers<br />time str_replace : 2.9930369853973      result :aboutdealers<br />time strtr &gt; time str_replace =&gt; 1<br /><br />str_replace is faster than strtr</span></code></div>
  </div>
 </div>
  <div class="note" id="111176">  <div class="votes">
    <div id="Vu111176">
    <a href="/manual/vote-note.php?id=111176&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111176">
    <a href="/manual/vote-note.php?id=111176&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111176" title="57% like this...">
    3
    </div>
  </div>
  <a href="#111176" class="name">
  <strong class="user"><em>qeremy [atta] gmail [dotta] com</em></strong></a><a class="genanchor" href="#111176"> &para;</a><div class="date" title="2013-01-22 07:19"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111176">
<div class="phpcode"><code><span class="html">Weird, but strtr corrupting chars, if used like below and if file is encoded in UTF-8;<br /><br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= </span><span class="string">'Äbc Äbc'</span><span class="keyword">;<br />echo </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">'Ä'</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">);<br /></span><span class="comment">// output: a�bc a�bc<br /></span><span class="default">?&gt;<br /></span><br />And a simple solution;<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">strtr_unicode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$a </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$b </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    </span><span class="default">$translate </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">;<br />    if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) &amp;&amp; !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">)) {<br />        </span><span class="default">$a </span><span class="keyword">= (array) </span><span class="default">$a</span><span class="keyword">;<br />        </span><span class="default">$b </span><span class="keyword">= (array) </span><span class="default">$b</span><span class="keyword">;<br />        </span><span class="default">$translate </span><span class="keyword">= </span><span class="default">array_combine</span><span class="keyword">(<br />            </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">),<br />            </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">)<br />        );<br />    }<br />    </span><span class="comment">// again weird, but accepts an array in this case<br />    </span><span class="keyword">return </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$translate</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">'Äbc Äbc'</span><span class="keyword">;<br />echo </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">'Ä'</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">) .</span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="default">strtr_unicode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">'Ä'</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">) .</span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="default">strtr_unicode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, array(</span><span class="string">'Ä' </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">)) .</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">// outputs<br />// a�bc a�bc<br />// abc abc<br />// abc abc<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="64108">  <div class="votes">
    <div id="Vu64108">
    <a href="/manual/vote-note.php?id=64108&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64108">
    <a href="/manual/vote-note.php?id=64108&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64108" title="58% like this...">
    2
    </div>
  </div>
  <a href="#64108" class="name">
  <strong class="user"><em>joeldegan AT yahoo</em></strong></a><a class="genanchor" href="#64108"> &para;</a><div class="date" title="2006-04-07 08:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64108">
<div class="phpcode"><code><span class="html">After battling with strtr trying to strip out MS word formatting from things pasted into forms I ended up coming up with this..<br /><br />it strips ALL non-standard ascii characters, preserving html codes and such, but gets rid of all the characters that refuse to show in firefox.<br /><br />If you look at this page in firefox you will see a ton of "question mark" characters and so it is not possible to copy and paste those to remove them from strings..  (this fixes that issue nicely, though I admit it could be done a bit better)<br /><br />&lt;?<br />function fixoutput($str){<br />    $good[] = 9;  #tab<br />    $good[] = 10; #nl<br />    $good[] = 13; #cr<br />    for($a=32;$a&lt;127;$a++){<br />        $good[] = $a;<br />    }    <br />    $len = strlen($str);<br />    for($b=0;$b &lt; $len+1; $b++){<br />        if(in_array(ord($str[$b]), $good)){<br />            $newstr .= $str[$b];<br />        }//fi<br />    }//rof<br />    return $newstr;<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="115988">  <div class="votes">
    <div id="Vu115988">
    <a href="/manual/vote-note.php?id=115988&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115988">
    <a href="/manual/vote-note.php?id=115988&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115988" title="53% like this...">
    1
    </div>
  </div>
  <a href="#115988" class="name">
  <strong class="user"><em>Romain</em></strong></a><a class="genanchor" href="#115988"> &para;</a><div class="date" title="2014-10-23 09:44"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115988">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    </span><span class="comment">/**<br />     * Clean string,<br />     * minimize and remove space, accent and other<br />     *<br />     * @param string $string<br />     * @return string<br />     */<br />    </span><span class="keyword">public function </span><span class="default">mb_strtoclean</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">){<br />        </span><span class="comment">// Valeur a nettoyer (conversion)<br />        </span><span class="default">$unwanted_array </span><span class="keyword">= array(    </span><span class="string">'Š'</span><span class="keyword">=&gt;</span><span class="string">'S'</span><span class="keyword">, </span><span class="string">'š'</span><span class="keyword">=&gt;</span><span class="string">'s'</span><span class="keyword">, </span><span class="string">'Ž'</span><span class="keyword">=&gt;</span><span class="string">'Z'</span><span class="keyword">, </span><span class="string">'ž'</span><span class="keyword">=&gt;</span><span class="string">'z'</span><span class="keyword">, </span><span class="string">'À'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Á'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Â'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Ã'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Ä'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Å'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Æ'</span><span class="keyword">=&gt;</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Ç'</span><span class="keyword">=&gt;</span><span class="string">'C'</span><span class="keyword">, </span><span class="string">'È'</span><span class="keyword">=&gt;</span><span class="string">'E'</span><span class="keyword">, </span><span class="string">'É'</span><span class="keyword">=&gt;</span><span class="string">'E'</span><span class="keyword">,<br />                                    </span><span class="string">'Ê'</span><span class="keyword">=&gt;</span><span class="string">'E'</span><span class="keyword">, </span><span class="string">'Ë'</span><span class="keyword">=&gt;</span><span class="string">'E'</span><span class="keyword">, </span><span class="string">'Ì'</span><span class="keyword">=&gt;</span><span class="string">'I'</span><span class="keyword">, </span><span class="string">'Í'</span><span class="keyword">=&gt;</span><span class="string">'I'</span><span class="keyword">, </span><span class="string">'Î'</span><span class="keyword">=&gt;</span><span class="string">'I'</span><span class="keyword">, </span><span class="string">'Ï'</span><span class="keyword">=&gt;</span><span class="string">'I'</span><span class="keyword">, </span><span class="string">'Ñ'</span><span class="keyword">=&gt;</span><span class="string">'N'</span><span class="keyword">, </span><span class="string">'Ò'</span><span class="keyword">=&gt;</span><span class="string">'O'</span><span class="keyword">, </span><span class="string">'Ó'</span><span class="keyword">=&gt;</span><span class="string">'O'</span><span class="keyword">, </span><span class="string">'Ô'</span><span class="keyword">=&gt;</span><span class="string">'O'</span><span class="keyword">, </span><span class="string">'Õ'</span><span class="keyword">=&gt;</span><span class="string">'O'</span><span class="keyword">, </span><span class="string">'Ö'</span><span class="keyword">=&gt;</span><span class="string">'O'</span><span class="keyword">, </span><span class="string">'Ø'</span><span class="keyword">=&gt;</span><span class="string">'O'</span><span class="keyword">, </span><span class="string">'Ù'</span><span class="keyword">=&gt;</span><span class="string">'U'</span><span class="keyword">,<br />                                    </span><span class="string">'Ú'</span><span class="keyword">=&gt;</span><span class="string">'U'</span><span class="keyword">, </span><span class="string">'Û'</span><span class="keyword">=&gt;</span><span class="string">'U'</span><span class="keyword">, </span><span class="string">'Ü'</span><span class="keyword">=&gt;</span><span class="string">'U'</span><span class="keyword">, </span><span class="string">'Ý'</span><span class="keyword">=&gt;</span><span class="string">'Y'</span><span class="keyword">, </span><span class="string">'Þ'</span><span class="keyword">=&gt;</span><span class="string">'B'</span><span class="keyword">, </span><span class="string">'ß'</span><span class="keyword">=&gt;</span><span class="string">'Ss'</span><span class="keyword">, </span><span class="string">'à'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'á'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'â'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'ã'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'ä'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'å'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'æ'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'ç'</span><span class="keyword">=&gt;</span><span class="string">'c'</span><span class="keyword">,<br />                                    </span><span class="string">'è'</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">, </span><span class="string">'é'</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">, </span><span class="string">'ê'</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">, </span><span class="string">'ë'</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">, </span><span class="string">'ì'</span><span class="keyword">=&gt;</span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'í'</span><span class="keyword">=&gt;</span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'î'</span><span class="keyword">=&gt;</span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'ï'</span><span class="keyword">=&gt;</span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'ð'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'ñ'</span><span class="keyword">=&gt;</span><span class="string">'n'</span><span class="keyword">, </span><span class="string">'ò'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'ó'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'ô'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'õ'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">,<br />                                    </span><span class="string">'ö'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'ø'</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'ù'</span><span class="keyword">=&gt;</span><span class="string">'u'</span><span class="keyword">, </span><span class="string">'ú'</span><span class="keyword">=&gt;</span><span class="string">'u'</span><span class="keyword">, </span><span class="string">'û'</span><span class="keyword">=&gt;</span><span class="string">'u'</span><span class="keyword">, </span><span class="string">'ý'</span><span class="keyword">=&gt;</span><span class="string">'y'</span><span class="keyword">, </span><span class="string">'ý'</span><span class="keyword">=&gt;</span><span class="string">'y'</span><span class="keyword">, </span><span class="string">'þ'</span><span class="keyword">=&gt;</span><span class="string">'b'</span><span class="keyword">, </span><span class="string">'ÿ'</span><span class="keyword">=&gt;</span><span class="string">'y'</span><span class="keyword">,<br />                                    </span><span class="string">' ' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">, </span><span class="string">'_' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">, </span><span class="string">'-' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">, </span><span class="string">',' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">, </span><span class="string">';' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">);<br /><br />        return </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$unwanted_array </span><span class="keyword">));<br />    }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="23384">  <div class="votes">
    <div id="Vu23384">
    <a href="/manual/vote-note.php?id=23384&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23384">
    <a href="/manual/vote-note.php?id=23384&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23384" title="54% like this...">
    1
    </div>
  </div>
  <a href="#23384" class="name">
  <strong class="user"><em>gabi at unica dot edu</em></strong></a><a class="genanchor" href="#23384"> &para;</a><div class="date" title="2002-07-17 05:32"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23384">
<div class="phpcode"><code><span class="html">To convert special chars to their html entities strtr you can use strtr in conjunction with get_html_translation_table(HTML_ENTITIES) :<br /><br />$trans = get_html_translation_table(HTML_ENTITIES);<br />$html_code = strtr($html_code, $trans); <br /><br />This will replace in $html_code the ? by &amp;Aacute; , etc.</span></code></div>
  </div>
 </div>
  <div class="note" id="59920">  <div class="votes">
    <div id="Vu59920">
    <a href="/manual/vote-note.php?id=59920&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59920">
    <a href="/manual/vote-note.php?id=59920&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59920" title="52% like this...">
    1
    </div>
  </div>
  <a href="#59920" class="name">
  <strong class="user"><em>tomhmambo at seznam dot cz</em></strong></a><a class="genanchor" href="#59920"> &para;</a><div class="date" title="2005-12-20 02:54"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59920">
<div class="phpcode"><code><span class="html">&lt;?<br />// Windows-1250 to ASCII<br />// This function replace all Windows-1250 accent characters with <br />// thier non-accent ekvivalents. Useful for Czech and Slovak languages.<br /><br />function win2ascii($str)    {    <br /><br />    $str = StrTr($str,<br />        "\xE1\xE8\xEF\xEC\xE9\xED\xF2",<br />        "\x61\x63\x64\x65\x65\x69\x6E");<br />        <br />    $str = StrTr($str,<br />        "\xF3\xF8\x9A\x9D\xF9\xFA\xFD\x9E\xF4\xBC\xBE",<br />        "\x6F\x72\x73\x74\x75\x75\x79\x7A\x6F\x4C\x6C");<br />        <br />    $str = StrTr($str,<br />        "\xC1\xC8\xCF\xCC\xC9\xCD\xC2\xD3\xD8",<br />        "\x41\x43\x44\x45\x45\x49\x4E\x4F\x52");<br />        <br />    $str = StrTr($str,<br />        "\x8A\x8D\xDA\xDD\x8E\xD2\xD9\xEF\xCF",<br />        "\x53\x54\x55\x59\x5A\x4E\x55\x64\x44");<br /><br />    return $str;<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="48095">  <div class="votes">
    <div id="Vu48095">
    <a href="/manual/vote-note.php?id=48095&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48095">
    <a href="/manual/vote-note.php?id=48095&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48095" title="50% like this...">
    0
    </div>
  </div>
  <a href="#48095" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#48095"> &para;</a><div class="date" title="2004-12-11 05:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48095">
<div class="phpcode"><code><span class="html">If you are going to call strtr a lot, consider using str_replace instead, as it is much faster. I cut execution time in half just by doing this.<br /><br />&lt;?<br />// i.e. instead of:<br />$s=strtr($s,$replace_array);<br /><br />// use: <br />foreach($replace_array as $key=&gt;$value) $s=str_replace($key,$value,$s);<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="45910">  <div class="votes">
    <div id="Vu45910">
    <a href="/manual/vote-note.php?id=45910&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45910">
    <a href="/manual/vote-note.php?id=45910&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45910" title="50% like this...">
    0
    </div>
  </div>
  <a href="#45910" class="name">
  <strong class="user"><em>ktogias at math dot upatras dot gr</em></strong></a><a class="genanchor" href="#45910"> &para;</a><div class="date" title="2004-09-23 03:32"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45910">
<div class="phpcode"><code><span class="html">This function is usefull for <br />accent insensitive regexp <br />searches into greek (iso8859-7) text:<br />(Select View -&gt; Character Encoding -&gt; Greek (iso8859-7)<br />at your browser to see the correct greek characters)<br /><br />function gr_regexp($mystring){<br />        $replacement=array(<br />                array("?","?","?","?"),<br />                array("?","?","?","?"),<br />                array("?","?","?","?"),<br />                array("?","?","?","?","?","?"),<br />                array("?","?","?","?"),<br />                array("?","?","?","?","?","?"),<br />                array("?","?","?","?")<br />        );<br />        foreach($replacement as $group){<br />                foreach($group as $character){<br />                        $exp="[";<br />                        foreach($group as $expcharacter){<br />                                $exp.=$expcharacter;<br />                        }<br />                        $exp.="]";<br />                        $trans[$character]=$exp;<br />                }<br />        }<br />        $temp=explode(" ", $mystring);<br />        for ($i=0;$i&lt;sizeof($temp);$i++){<br />                $temp[$i]=strtr($temp[$i],$trans);<br />                $temp[$i]=addslashes($temp[$i]);<br />        }<br />        return implode(".*",$temp);<br />}<br /><br />$match=gr_regexp("????????????????????? ??? ????????");<br /><br />//The next query string can be sent to MySQL<br />through mysql_query()<br />$query=<br />      "Select `column` from `table` where `column2` REGEXP   <br />                         '".$match."'";</span></code></div>
  </div>
 </div>
  <div class="note" id="37860">  <div class="votes">
    <div id="Vu37860">
    <a href="/manual/vote-note.php?id=37860&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37860">
    <a href="/manual/vote-note.php?id=37860&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37860" title="50% like this...">
    0
    </div>
  </div>
  <a href="#37860" class="name">
  <strong class="user"><em>j at pureftpd dot org</em></strong></a><a class="genanchor" href="#37860"> &para;</a><div class="date" title="2003-11-30 08:24"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37860">
<div class="phpcode"><code><span class="html">Here's a very useful function to translate Microsoft characters into Latin 15, so that people won't see any more square instead of characters in web pages .<br /><br />function demicrosoftize($str) {<br />    return strtr($str,<br />"\x82\x83\x84\x85\x86\x87\x89\x8a" .<br />"\x8b\x8c\x8e\x91\x92\x93\x94\x95" .<br />"\x96\x97\x98\x99\x9a\x9b\x9c\x9e\x9f",<br />"'f\".**^\xa6&lt;\xbc\xb4''" .<br />"\"\"---~ \xa8&gt;\xbd\xb8\xbe");<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="24246">  <div class="votes">
    <div id="Vu24246">
    <a href="/manual/vote-note.php?id=24246&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24246">
    <a href="/manual/vote-note.php?id=24246&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24246" title="50% like this...">
    0
    </div>
  </div>
  <a href="#24246" class="name">
  <strong class="user"><em>bisqwit at iki dot fi</em></strong></a><a class="genanchor" href="#24246"> &para;</a><div class="date" title="2002-08-10 10:18"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24246">
<div class="phpcode"><code><span class="html">#!/bin/sh<br /># This shell script generates a strtr() call<br /># to translate from a character set to another.<br /># Requires: gnu recode, perl, php commandline binary<br />#<br /># Usage:<br />#  Set set1 and set2 to whatever you prefer<br />#  (multibyte character sets are not supported)<br />#  and run the script. The script outputs<br />#  a strtr() php code for you to use.<br />#<br /># Example is set to generate a<br /># cp437..latin9 conversion code.<br />#<br />set1=cp437<br />set2=iso-8859-15<br />result="`echo '&lt;? for($c=32;$c&lt;256;$c++)'\<br />              'echo chr($c);'\            <br />         |php -q|recode -f $set1..$set2`"<br />echo "// This php function call converts \$string in $set1 to $set2";<br />cat &lt;&lt;EOF  | php -q<br /><span class="default">&lt;?php<br /></span><span class="keyword">\</span><span class="default">$set1</span><span class="keyword">=</span><span class="string">'`echo -n "$result"\<br />   |perl -pe "s/([\\\\\'])/\\\\\\\\\\$1/g"`'</span><span class="keyword">;<br />\</span><span class="default">$set2</span><span class="keyword">=</span><span class="string">'`echo -n "$result"|recode -f $set2..$set1\<br />   |perl -pe "s/([\\\\\'])/\\\\\\\\\\$1/g"`'</span><span class="keyword">;<br />\</span><span class="default">$erase</span><span class="keyword">=array();<br />\</span><span class="default">$l</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(\</span><span class="default">$set1</span><span class="keyword">);<br />for(\</span><span class="default">$c</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;\</span><span class="default">$c</span><span class="keyword">&lt;\</span><span class="default">$l</span><span class="keyword">;++\</span><span class="default">$c</span><span class="keyword">)<br />  if(\</span><span class="default">$set1</span><span class="keyword">[\</span><span class="default">$c</span><span class="keyword">]==\</span><span class="default">$set2</span><span class="keyword">[\</span><span class="default">$c</span><span class="keyword">])\</span><span class="default">$erase</span><span class="keyword">[\</span><span class="default">$set1</span><span class="keyword">[\</span><span class="default">$c</span><span class="keyword">]]=</span><span class="string">''</span><span class="keyword">;<br />if(</span><span class="default">count</span><span class="keyword">(\</span><span class="default">$erase</span><span class="keyword">))<br />{<br />  \</span><span class="default">$set1</span><span class="keyword">=</span><span class="default">strtr</span><span class="keyword">(\</span><span class="default">$set1</span><span class="keyword">,\</span><span class="default">$erase</span><span class="keyword">);<br />  \</span><span class="default">$set2</span><span class="keyword">=</span><span class="default">strtr</span><span class="keyword">(\</span><span class="default">$set2</span><span class="keyword">,\</span><span class="default">$erase</span><span class="keyword">);<br />}<br />if(!</span><span class="default">strlen</span><span class="keyword">(\</span><span class="default">$set1</span><span class="keyword">))echo </span><span class="string">'IRREVERSIBLE'</span><span class="keyword">;else<br />echo </span><span class="string">"strtr(\\\$string,\n  '"</span><span class="keyword">,<br />     </span><span class="default">ereg_replace</span><span class="keyword">(</span><span class="string">'([\\\\\\'</span><span class="keyword">])</span><span class="string">', '</span><span class="keyword">\\\\\\</span><span class="default">1</span><span class="string">', \$set2),<br />     "'</span><span class="keyword">,</span><span class="default">\n  </span><span class="string">'",<br />     ereg_replace('</span><span class="keyword">([\\\\\\</span><span class="string">'])'</span><span class="keyword">, </span><span class="string">'\\\\\\1'</span><span class="keyword">, \</span><span class="default">$set1</span><span class="keyword">),<br />     </span><span class="string">"');"</span><span class="keyword">;<br /></span><span class="default">EOF</span></span></code></div>
  </div>
 </div>
  <div class="note" id="17049">  <div class="votes">
    <div id="Vu17049">
    <a href="/manual/vote-note.php?id=17049&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17049">
    <a href="/manual/vote-note.php?id=17049&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17049" title="50% like this...">
    0
    </div>
  </div>
  <a href="#17049" class="name">
  <strong class="user"><em>erik at eldata dot se</em></strong></a><a class="genanchor" href="#17049"> &para;</a><div class="date" title="2001-11-23 09:08"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17049">
<div class="phpcode"><code><span class="html">As an alternative to the not-yet-existing function stritr mentioned in the first note above You can easily do this:
<br />
<br />strtr("abc","ABCabc","xyzxyz")
<br />
<br />or more general:
<br />
<br />strtr("abc",
<br />strtoupper($fromchars).strtolower($fromchars),
<br />$tochars.$tochars);
<br />
<br />Just a thought.</span></code></div>
  </div>
 </div>
  <div class="note" id="76930">  <div class="votes">
    <div id="Vu76930">
    <a href="/manual/vote-note.php?id=76930&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76930">
    <a href="/manual/vote-note.php?id=76930&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76930" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#76930" class="name">
  <strong class="user"><em>ajitsingh4u at gmail dot com</em></strong></a><a class="genanchor" href="#76930"> &para;</a><div class="date" title="2007-08-06 07:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76930">
<div class="phpcode"><code><span class="html">/**<br />* Replaces special characters with single quote,double quote and comma for charset iso-8859-1<br />*<br />* replaceSpecialChars()<br />* @param string $str<br />* @return string<br />*/<br />function replaceSpecialChars($str)<br />{<br />    //`(96) ’(130) „(132) ‘(145) ’(146) “(147) ”(148) ´(180)   // equivalent ascii values of these characters.<br />    $str = strtr($str, "`’„‘’´", "'','''");<br />    $str = strtr($str, '“”', '""'); <br />    return $str;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="49722">  <div class="votes">
    <div id="Vu49722">
    <a href="/manual/vote-note.php?id=49722&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49722">
    <a href="/manual/vote-note.php?id=49722&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49722" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#49722" class="name">
  <strong class="user"><em>patrick at p-roocks dot de</em></strong></a><a class="genanchor" href="#49722"> &para;</a><div class="date" title="2005-02-06 02:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49722">
<div class="phpcode"><code><span class="html">As Daijoubu suggested use str_replace instead of this function for large arrays/subjects. I just tried it with a array of 60 elements, a string with 8KB length, and the execution time of str_replace was faster at factor 20! <br /><br />Patrick</span></code></div>
  </div>
 </div>
  <div class="note" id="54636">  <div class="votes">
    <div id="Vu54636">
    <a href="/manual/vote-note.php?id=54636&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54636">
    <a href="/manual/vote-note.php?id=54636&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54636" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#54636" class="name">
  <strong class="user"><em>ru dot dy at gmx dot net</em></strong></a><a class="genanchor" href="#54636"> &para;</a><div class="date" title="2005-07-10 04:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54636">
<div class="phpcode"><code><span class="html">Posting umlaute here resulted in a mess. Heres a version of the same function that works with preg_replace only:<br /><span class="default">&lt;?php<br />  </span><span class="keyword">function </span><span class="default">getRewriteString</span><span class="keyword">(</span><span class="default">$sString</span><span class="keyword">) {<br />     </span><span class="default">$string </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$sString</span><span class="keyword">));<br />     </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/&amp;(.)(uml);/"</span><span class="keyword">, </span><span class="string">"$1e"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />     </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/&amp;(.)(acute|cedil|circ|ring|tilde|uml);/"</span><span class="keyword">, </span><span class="string">"$1"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />     </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/([^a-z0-9]+)/"</span><span class="keyword">, </span><span class="string">"-"</span><span class="keyword">, </span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">));<br />     </span><span class="default">$string </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">"-"</span><span class="keyword">);<br />     return </span><span class="default">$string</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="20860">  <div class="votes">
    <div id="Vu20860">
    <a href="/manual/vote-note.php?id=20860&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20860">
    <a href="/manual/vote-note.php?id=20860&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20860" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#20860" class="name">
  <strong class="user"><em>symlink23-remove-my-spleen at yahoo dot com</em></strong></a><a class="genanchor" href="#20860"> &para;</a><div class="date" title="2002-04-18 09:33"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20860">
<div class="phpcode"><code><span class="html">As noted in the str_rot13 docs, some servers don't provide the str_rot13() function. However, the presence of strtr makes it easy to build your own facsimile thereof:<br /><br />if (!function_exists('str_rot13')) {<br />    function str_rot13($str) {<br />        $from = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';<br />        $to   = 'nopqrstuvwxyzabcdefghijklmNOPQRSTUVWXYZABCDEFGHIJKLM';<br /><br />        return strtr($str, $from, $to);<br />    }<br />}<br /><br />This is suitable for very light "encryption" such as hiding email addressess from spambots (then unscrambling them in a mail class, for example).<br /><br />$mail_to=str_rot13("$mail_to");</span></code></div>
  </div>
 </div>
  <div class="note" id="124599">  <div class="votes">
    <div id="Vu124599">
    <a href="/manual/vote-note.php?id=124599&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124599">
    <a href="/manual/vote-note.php?id=124599&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124599" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#124599" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124599"> &para;</a><div class="date" title="2020-01-10 10:58"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124599">
<div class="phpcode"><code><span class="html">The string, string form cannot remove characters, but the array form can.</span></code></div>
  </div>
 </div>
  <div class="note" id="125093">  <div class="votes">
    <div id="Vu125093">
    <a href="/manual/vote-note.php?id=125093&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125093">
    <a href="/manual/vote-note.php?id=125093&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125093" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#125093" class="name">
  <strong class="user"><em>tekintian#gmail.com</em></strong></a><a class="genanchor" href="#125093"> &para;</a><div class="date" title="2020-06-07 12:08"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125093">
<div class="phpcode"><code><span class="html">/**<br /> *  <br /> *  将一个字串中含有全角的数字字符、字母、空格或'%+-()'字符转换为相应半角字符<br /> * @author tekintian#gmail.com<br /> * @param   string       $str         待转换字串<br /> *<br /> * @return  string       $str         处理后字串<br /> */<br />function str2byte_convert(String $str):String  {<br />    $arr = array('０' =&gt; '0', '１' =&gt; '1', '２' =&gt; '2', '３' =&gt; '3', '４' =&gt; '4',<br />        '５' =&gt; '5', '６' =&gt; '6', '７' =&gt; '7', '８' =&gt; '8', '９' =&gt; '9',<br />        'Ａ' =&gt; 'A', 'Ｂ' =&gt; 'B', 'Ｃ' =&gt; 'C', 'Ｄ' =&gt; 'D', 'Ｅ' =&gt; 'E',<br />        'Ｆ' =&gt; 'F', 'Ｇ' =&gt; 'G', 'Ｈ' =&gt; 'H', 'Ｉ' =&gt; 'I', 'Ｊ' =&gt; 'J',<br />        'Ｋ' =&gt; 'K', 'Ｌ' =&gt; 'L', 'Ｍ' =&gt; 'M', 'Ｎ' =&gt; 'N', 'Ｏ' =&gt; 'O',<br />        'Ｐ' =&gt; 'P', 'Ｑ' =&gt; 'Q', 'Ｒ' =&gt; 'R', 'Ｓ' =&gt; 'S', 'Ｔ' =&gt; 'T',<br />        'Ｕ' =&gt; 'U', 'Ｖ' =&gt; 'V', 'Ｗ' =&gt; 'W', 'Ｘ' =&gt; 'X', 'Ｙ' =&gt; 'Y',<br />        'Ｚ' =&gt; 'Z', 'ａ' =&gt; 'a', 'ｂ' =&gt; 'b', 'ｃ' =&gt; 'c', 'ｄ' =&gt; 'd',<br />        'ｅ' =&gt; 'e', 'ｆ' =&gt; 'f', 'ｇ' =&gt; 'g', 'ｈ' =&gt; 'h', 'ｉ' =&gt; 'i',<br />        'ｊ' =&gt; 'j', 'ｋ' =&gt; 'k', 'ｌ' =&gt; 'l', 'ｍ' =&gt; 'm', 'ｎ' =&gt; 'n',<br />        'ｏ' =&gt; 'o', 'ｐ' =&gt; 'p', 'ｑ' =&gt; 'q', 'ｒ' =&gt; 'r', 'ｓ' =&gt; 's',<br />        'ｔ' =&gt; 't', 'ｕ' =&gt; 'u', 'ｖ' =&gt; 'v', 'ｗ' =&gt; 'w', 'ｘ' =&gt; 'x',<br />        'ｙ' =&gt; 'y', 'ｚ' =&gt; 'z',<br />        '（' =&gt; '(', '）' =&gt; ')', '〔' =&gt; '[', '〕' =&gt; ']', '【' =&gt; '[',<br />        '】' =&gt; ']', '〖' =&gt; '[', '〗' =&gt; ']', '“' =&gt; '[', '”' =&gt; ']',<br />        '‘' =&gt; '[', '’' =&gt; ']', '｛' =&gt; '{', '｝' =&gt; '}', '《' =&gt; '&lt;',<br />        '》' =&gt; '&gt;',<br />        '％' =&gt; '%', '＋' =&gt; '+', '—' =&gt; '-', '－' =&gt; '-', '～' =&gt; '-',<br />        '：' =&gt; ':', '。' =&gt; '.', '、' =&gt; ',', '，' =&gt; '.', '、' =&gt; '.',<br />        '；' =&gt; ',', '？' =&gt; '?', '！' =&gt; '!', '…' =&gt; '-', '‖' =&gt; '|',<br />        '”' =&gt; '"', '’' =&gt; '`', '‘' =&gt; '`', '｜' =&gt; '|', '〃' =&gt; '"',<br />        '　' =&gt; ' ');<br /><br />    return strtr($str, $arr);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="36983">  <div class="votes">
    <div id="Vu36983">
    <a href="/manual/vote-note.php?id=36983&amp;page=function.strtr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36983">
    <a href="/manual/vote-note.php?id=36983&amp;page=function.strtr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36983" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#36983" class="name">
  <strong class="user"><em>Fernando &quot;Malk&quot; Piancastelli</em></strong></a><a class="genanchor" href="#36983"> &para;</a><div class="date" title="2003-10-29 01:31"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36983">
<div class="phpcode"><code><span class="html">Here's a function to replace linebreaks to html &lt;p&gt; tags. This was initially designed to receive a typed text by a form in a "insert new notice" page and put in a database, then a "notice" page could get the text preformatted with paragraph tags instead of linebreaks that won't appear on browser. The function also removes repeated linebreaks the user may have typed in the form.<br /><br />function break_to_tags(&amp;$text) {<br /><br />       // find and remove repeated linebreaks<br /><br />       $double_break = array("\r\n\r\n" =&gt; "\r\n");<br />       do {<br />              $text = strtr($text, $double_break);<br />              $position = strpos($text, "\r\n\r\n");<br />       } while ($position !== false);<br /><br />       // find and replace remanescent linebreaks by &lt;p&gt; tags<br /><br />       $change = array("\r\n" =&gt; "&lt;p&gt;");<br />       $text = strtr($text, $change);<br />}<br /><br />[]'s<br />Fernando</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strtr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strtr.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
