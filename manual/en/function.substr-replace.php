<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: substr_replace - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.substr-replace.php">
 <link rel="shorturl" href="https://www.php.net/substr-replace">
 <link rel="alternate" href="https://www.php.net/substr-replace" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.substr-count.php">
 <link rel="next" href="https://www.php.net/manual/en/function.trim.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.substr-replace.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.substr-replace.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.substr-replace.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.substr-replace.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.substr-replace.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.substr-replace.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.substr-replace.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.substr-replace.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.substr-replace.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.substr-replace.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.substr-replace.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Replace text within a portion of a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: substr_replace - Manual" />
<meta name="twitter:description" content="Replace text within a portion of a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: substr_replace - Manual" />
<meta itemprop="description" content="Replace text within a portion of a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Replace text within a portion of a string" />

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
        <a href="function.trim.php">
          trim &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.substr-count.php">
          &laquo; substr_count        </a>
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
            <option value='en/function.substr-replace.php' selected="selected">English</option>
            <option value='de/function.substr-replace.php'>German</option>
            <option value='es/function.substr-replace.php'>Spanish</option>
            <option value='fr/function.substr-replace.php'>French</option>
            <option value='it/function.substr-replace.php'>Italian</option>
            <option value='ja/function.substr-replace.php'>Japanese</option>
            <option value='pt_BR/function.substr-replace.php'>Brazilian Portuguese</option>
            <option value='ru/function.substr-replace.php'>Russian</option>
            <option value='tr/function.substr-replace.php'>Turkish</option>
            <option value='uk/function.substr-replace.php'>Ukrainian</option>
            <option value='zh/function.substr-replace.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.substr-replace" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">substr_replace</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">substr_replace</span> &mdash; <span class="dc-title">Replace text within a portion of a string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.substr-replace-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>substr_replace</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$replace</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$offset</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$length</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>substr_replace()</strong></span> replaces a copy of
   <code class="parameter">string</code> delimited by the
   <code class="parameter">offset</code> and (optionally)
   <code class="parameter">length</code> parameters with the string given in
   <code class="parameter">replace</code>. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.substr-replace-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The input string.
      </p>
      <p class="para">
       An <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s can be provided, in which
       case the replacements will occur on each string in turn. In this case,
       the <code class="parameter">replace</code>, <code class="parameter">offset</code>
       and <code class="parameter">length</code> parameters may be provided either as
       scalar values to be applied to each input string in turn, or as
       <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s, in which case the corresponding array element will
       be used for each input string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">replace</code></dt>
     <dd>
      <p class="para">
       The replacement string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">offset</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">offset</code> is non-negative, the replacing will
       begin at the <code class="parameter">offset</code>&#039;th offset into
       <code class="parameter">string</code>.
      </p>
      <p class="para">
       If <code class="parameter">offset</code> is negative, the replacing will
       begin at the <code class="parameter">offset</code>&#039;th character from the
       end of <code class="parameter">string</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       If given and is positive, it represents the length of the portion of
       <code class="parameter">string</code> which is to be replaced. If it is
       negative, it represents the number of characters from the end of
       <code class="parameter">string</code> at which to stop replacing. If it
       is not given, then it will default to strlen(
       <code class="parameter">string</code> ); i.e. end the replacing at the
       end of <code class="parameter">string</code>. Of course, if
       <code class="parameter">length</code> is zero then this function will have the
       effect of inserting <code class="parameter">replace</code> into
       <code class="parameter">string</code> at the given
       <code class="parameter">offset</code> offset.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.substr-replace-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The result string is returned. If <code class="parameter">string</code> is an
   array then array is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.substr-replace-changelog">
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
        <code class="parameter">length</code> is nullable now.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.substr-replace-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5188">
    <p><strong>Example #1 Simple <span class="function"><strong>substr_replace()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$var </span><span style="color: #007700">= </span><span style="color: #DD0000">'ABCDEFGH:/MNRPQR/'</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"Original: </span><span style="color: #0000BB">$var</span><span style="color: #DD0000">&lt;hr /&gt;\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* These two examples replace all of $var with 'bob'. */<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">, </span><span style="color: #DD0000">'bob'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">) . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">substr_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">, </span><span style="color: #DD0000">'bob'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Insert 'bob' right at the beginning of $var. */<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">, </span><span style="color: #DD0000">'bob'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">) . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* These next two replace 'MNRPQR' in $var with 'bob'. */<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">, </span><span style="color: #DD0000">'bob'</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">) . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">substr_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">, </span><span style="color: #DD0000">'bob'</span><span style="color: #007700">, -</span><span style="color: #0000BB">7</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">) . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Delete 'MNRPQR' from $var. */<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">) . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5189">
    <p><strong>Example #2 
     Using <span class="function"><strong>substr_replace()</strong></span> to replace multiple strings at
     once
    </strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$input </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'A: XXX'</span><span style="color: #007700">, </span><span style="color: #DD0000">'B: XXX'</span><span style="color: #007700">, </span><span style="color: #DD0000">'C: XXX'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// A simple case: replace XXX in each string with YYY.<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'; '</span><span style="color: #007700">, </span><span style="color: #0000BB">substr_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #DD0000">'YYY'</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">)).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// A more complicated case where each replacement is different.<br /></span><span style="color: #0000BB">$replace </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'AAA'</span><span style="color: #007700">, </span><span style="color: #DD0000">'BBB'</span><span style="color: #007700">, </span><span style="color: #DD0000">'CCC'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'; '</span><span style="color: #007700">, </span><span style="color: #0000BB">substr_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">$replace</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">)).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Replace a different number of characters each time.<br /></span><span style="color: #0000BB">$length </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'; '</span><span style="color: #007700">, </span><span style="color: #0000BB">substr_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">$replace</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">$length</span><span style="color: #007700">)).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">A: YYY; B: YYY; C: YYY
A: AAA; B: BBB; C: CCC
A: AAAXX; B: BBBX; C: CCC</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.substr-replace-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is
binary-safe.</span></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.substr-replace-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.str-replace.php" class="function" rel="rdfs-seeAlso">str_replace()</a> - Replace all occurrences of the search string with the replacement string</span></li>
    <li><span class="function"><a href="function.substr.php" class="function" rel="rdfs-seeAlso">substr()</a> - Return part of a string</span></li>
    <li><a href="language.types.string.php#language.types.string.substr" class="link">String access and modification by character</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/substr-replace.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.substr-replace%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.substr-replace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.substr-replace.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">30 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="97401">  <div class="votes">
    <div id="Vu97401">
    <a href="/manual/vote-note.php?id=97401&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97401">
    <a href="/manual/vote-note.php?id=97401&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97401" title="68% like this...">
    20
    </div>
  </div>
  <a href="#97401" class="name">
  <strong class="user"><em>elloromtz at gmail dot com</em></strong></a><a class="genanchor" href="#97401"> &para;</a><div class="date" title="2010-04-17 11:23"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97401">
<div class="phpcode"><code><span class="html">It's worth noting that when start and length are both negative -and- the length is less than or equal to start, the length will have the effect of being set as 0.
<br />
<br /><span class="default">&lt;?php
<br />substr_replace</span><span class="keyword">(</span><span class="string">'eggs'</span><span class="keyword">,</span><span class="string">'x'</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">); </span><span class="comment">//eggxs
<br /></span><span class="default">substr_replace</span><span class="keyword">(</span><span class="string">'eggs'</span><span class="keyword">,</span><span class="string">'x'</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">,-</span><span class="default">2</span><span class="keyword">); </span><span class="comment">//eggxs
<br /></span><span class="default">substr_replace</span><span class="keyword">(</span><span class="string">'eggs'</span><span class="keyword">,</span><span class="string">'x'</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">,-</span><span class="default">2</span><span class="keyword">); </span><span class="comment">//eggxs
<br /></span><span class="default">?&gt;
<br /></span>
<br />Same as: 
<br /><span class="default">&lt;?php
<br />substr_replace</span><span class="keyword">(</span><span class="string">'eggs'</span><span class="keyword">,</span><span class="string">'x'</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">); </span><span class="comment">//eggxs
<br /></span><span class="default">?&gt;
<br /></span>
<br /><span class="default">&lt;?php
<br />substr_replace</span><span class="keyword">(</span><span class="string">'huevos'</span><span class="keyword">,</span><span class="string">'x'</span><span class="keyword">,-</span><span class="default">2</span><span class="keyword">,-</span><span class="default">2</span><span class="keyword">); </span><span class="comment">//huevxos
<br /></span><span class="default">substr_replace</span><span class="keyword">(</span><span class="string">'huevos'</span><span class="keyword">,</span><span class="string">'x'</span><span class="keyword">,-</span><span class="default">2</span><span class="keyword">,-</span><span class="default">3</span><span class="keyword">); </span><span class="comment">//huevxos
<br /></span><span class="default">substr_replace</span><span class="keyword">(</span><span class="string">'huevos'</span><span class="keyword">,</span><span class="string">'x'</span><span class="keyword">,-</span><span class="default">2</span><span class="keyword">,-</span><span class="default">3</span><span class="keyword">); </span><span class="comment">//huevxos
<br /></span><span class="default">?&gt;
<br /></span>
<br />Same as: 
<br /><span class="default">&lt;?php
<br />substr_replace</span><span class="keyword">(</span><span class="string">'huevos'</span><span class="keyword">,</span><span class="string">'x'</span><span class="keyword">,-</span><span class="default">2</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">); </span><span class="comment">//huevxos
<br /></span><span class="default">?&gt;
<br /></span>
<br />Another note, if length is negative and start offsets the same position as length, length (yet again) will have the effect as being set as 0. (Of course, as mentioned in the manual, when length is negative it actually represents the position before it)
<br />
<br /><span class="default">&lt;?php
<br />substr_replace</span><span class="keyword">(</span><span class="string">'abcd'</span><span class="keyword">, </span><span class="string">'x'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">4</span><span class="keyword">); </span><span class="comment">//xabcd
<br /></span><span class="default">?&gt;
<br /></span>
<br />Same as: 
<br /><span class="default">&lt;?php
<br />substr_replace</span><span class="keyword">(</span><span class="string">'abcd'</span><span class="keyword">,</span><span class="string">'x'</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">); </span><span class="comment">//xabcd
<br /></span><span class="default">?&gt;
<br /></span>
<br /><span class="default">&lt;?php
<br />substr_replace</span><span class="keyword">(</span><span class="string">'abcd'</span><span class="keyword">, </span><span class="string">'x'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, -</span><span class="default">3</span><span class="keyword">); </span><span class="comment">//axbcd
<br /></span><span class="default">?&gt;
<br /></span>
<br />Same as:
<br /><span class="default">&lt;?php
<br />substr_replace</span><span class="keyword">(</span><span class="string">'abcd'</span><span class="keyword">, </span><span class="string">'x'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); </span><span class="comment">//axbcd
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124557">  <div class="votes">
    <div id="Vu124557">
    <a href="/manual/vote-note.php?id=124557&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124557">
    <a href="/manual/vote-note.php?id=124557&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124557" title="77% like this...">
    5
    </div>
  </div>
  <a href="#124557" class="name">
  <strong class="user"><em>shaman_master at list dot ru</em></strong></a><a class="genanchor" href="#124557"> &para;</a><div class="date" title="2019-12-31 10:48"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124557">
<div class="phpcode"><code><span class="html">Add prefix to strings:<br /><span class="default">&lt;?php<br />substr_replace</span><span class="keyword">(</span><span class="default">$strings</span><span class="keyword">, </span><span class="string">'_prefix'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Add suffix/postfix to strings:<br /><span class="default">&lt;?php<br />substr_replace</span><span class="keyword">(</span><span class="default">$strings</span><span class="keyword">, </span><span class="string">'_suffix'</span><span class="keyword">, </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'strlen'</span><span class="keyword">, </span><span class="default">$strings</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90146">  <div class="votes">
    <div id="Vu90146">
    <a href="/manual/vote-note.php?id=90146&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90146">
    <a href="/manual/vote-note.php?id=90146&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90146" title="63% like this...">
    12
    </div>
  </div>
  <a href="#90146" class="name">
  <strong class="user"><em>billg AT microsoft.com</em></strong></a><a class="genanchor" href="#90146"> &para;</a><div class="date" title="2009-04-07 07:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90146">
<div class="phpcode"><code><span class="html">Forget all of the mb_substr_replace() implementations mentioned in this page, they're all buggy.<br /><br />Here is a version that mimics the behavior of substr_replace() exactly:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_substr_replace'</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">)<br />{<br />    function </span><span class="default">mb_substr_replace</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$replacement</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$length </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">extension_loaded</span><span class="keyword">(</span><span class="string">'mbstring'</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">)<br />        {<br />            </span><span class="default">$string_length </span><span class="keyword">= (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$encoding</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) ? </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) : </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />            <br />            if (</span><span class="default">$start </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">)<br />            {<br />                </span><span class="default">$start </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$string_length </span><span class="keyword">+ </span><span class="default">$start</span><span class="keyword">);<br />            }<br />            <br />            else if (</span><span class="default">$start </span><span class="keyword">&gt; </span><span class="default">$string_length</span><span class="keyword">)<br />            {<br />                </span><span class="default">$start </span><span class="keyword">= </span><span class="default">$string_length</span><span class="keyword">;<br />            }<br />            <br />            if (</span><span class="default">$length </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">)<br />            {<br />                </span><span class="default">$length </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$string_length </span><span class="keyword">- </span><span class="default">$start </span><span class="keyword">+ </span><span class="default">$length</span><span class="keyword">);<br />            }<br />            <br />            else if ((</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) || (</span><span class="default">$length </span><span class="keyword">&gt; </span><span class="default">$string_length</span><span class="keyword">))<br />            {<br />                </span><span class="default">$length </span><span class="keyword">= </span><span class="default">$string_length</span><span class="keyword">;<br />            }<br />            <br />            if ((</span><span class="default">$start </span><span class="keyword">+ </span><span class="default">$length</span><span class="keyword">) &gt; </span><span class="default">$string_length</span><span class="keyword">)<br />            {<br />                </span><span class="default">$length </span><span class="keyword">= </span><span class="default">$string_length </span><span class="keyword">- </span><span class="default">$start</span><span class="keyword">;<br />            }<br />            <br />            if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$encoding</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">)<br />            {<br />                return </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">) . </span><span class="default">$replacement </span><span class="keyword">. </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$start </span><span class="keyword">+ </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$string_length </span><span class="keyword">- </span><span class="default">$start </span><span class="keyword">- </span><span class="default">$length</span><span class="keyword">);<br />            }<br />            <br />            return </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">) . </span><span class="default">$replacement </span><span class="keyword">. </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$start </span><span class="keyword">+ </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$string_length </span><span class="keyword">- </span><span class="default">$start </span><span class="keyword">- </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />        }<br />        <br />        return (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) ? </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$replacement</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">) : </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$replacement</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="48066">  <div class="votes">
    <div id="Vu48066">
    <a href="/manual/vote-note.php?id=48066&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48066">
    <a href="/manual/vote-note.php?id=48066&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48066" title="64% like this...">
    7
    </div>
  </div>
  <a href="#48066" class="name">
  <strong class="user"><em>danieldoorduin at hotmail dot com</em></strong></a><a class="genanchor" href="#48066"> &para;</a><div class="date" title="2004-12-10 02:48"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48066">
<div class="phpcode"><code><span class="html">Using substr_replace() can be avoided by using substr() instead:<br /><br />&lt;?<br />$string = substr($string, 0, $position_needle).$replace.substr($string, $position_needle+$length_needle);<br />?&gt;<br /><br />This can be useful when you need to replace parts of multibyte strings like strings encoded with utf-8. There isn't a multibute variant for substr_replace(), but for php substr() there is mb_substr(). For more information on multibyte strings see <a href="http://nl3.php.net/manual/en/ref.mbstring.php" rel="nofollow" target="_blank">http://nl3.php.net/manual/en/ref.mbstring.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="83614">  <div class="votes">
    <div id="Vu83614">
    <a href="/manual/vote-note.php?id=83614&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83614">
    <a href="/manual/vote-note.php?id=83614&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83614" title="64% like this...">
    4
    </div>
  </div>
  <a href="#83614" class="name">
  <strong class="user"><em>eblejr AT phrebh DOT com</em></strong></a><a class="genanchor" href="#83614"> &para;</a><div class="date" title="2008-06-04 08:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83614">
<div class="phpcode"><code><span class="html">PHP version of Java's removeCharAt() function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">removeCharAt</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$int</span><span class="keyword">){<br />  return </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$int</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114553">  <div class="votes">
    <div id="Vu114553">
    <a href="/manual/vote-note.php?id=114553&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114553">
    <a href="/manual/vote-note.php?id=114553&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114553" title="58% like this...">
    5
    </div>
  </div>
  <a href="#114553" class="name">
  <strong class="user"><em>ivijan dot stefan at gmail dot com</em></strong></a><a class="genanchor" href="#114553"> &para;</a><div class="date" title="2014-03-05 08:15"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114553">
<div class="phpcode"><code><span class="html">I have a little function that works like substr_replace ()  what I use for some purpose. Maybe someone needs it.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">putinplace</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$put</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$position</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">)<br />{<br />    </span><span class="default">$d1</span><span class="keyword">=</span><span class="default">$d2</span><span class="keyword">=</span><span class="default">$i</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$d</span><span class="keyword">=array(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">), </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$put</span><span class="keyword">));<br />    if(</span><span class="default">$position </span><span class="keyword">&gt; </span><span class="default">$d</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) </span><span class="default">$position</span><span class="keyword">=</span><span class="default">$d</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">$d</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]; </span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">$position</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">--) </span><span class="default">$string</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">$d</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]]=</span><span class="default">$string</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$d</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]; </span><span class="default">$i</span><span class="keyword">++) </span><span class="default">$string</span><span class="keyword">[</span><span class="default">$position</span><span class="keyword">+</span><span class="default">$i</span><span class="keyword">]=</span><span class="default">$put</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />    return </span><span class="default">$string</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Explanation<br /></span><span class="default">$string</span><span class="keyword">=</span><span class="string">'My dog dont love postman'</span><span class="keyword">; </span><span class="comment">// string<br /></span><span class="default">$put</span><span class="keyword">=</span><span class="string">"'"</span><span class="keyword">; </span><span class="comment">// put ' on position<br /></span><span class="default">$position</span><span class="keyword">=</span><span class="default">10</span><span class="keyword">; </span><span class="comment">// number of characters (position)<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">putinplace</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$put</span><span class="keyword">, </span><span class="default">$position</span><span class="keyword">) ); <br /></span><span class="default">?&gt;<br /></span><br />RESULT: My dog don't love postman<br /><br />This is a small powerful function that performs its job flawlessly.</span></code></div>
  </div>
 </div>
  <div class="note" id="121687">  <div class="votes">
    <div id="Vu121687">
    <a href="/manual/vote-note.php?id=121687&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121687">
    <a href="/manual/vote-note.php?id=121687&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121687" title="58% like this...">
    3
    </div>
  </div>
  <a href="#121687" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#121687"> &para;</a><div class="date" title="2017-09-26 12:32"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121687">
<div class="phpcode"><code><span class="html">See array_splice if you want to do this sort of thing to an array.</span></code></div>
  </div>
 </div>
  <div class="note" id="93993">  <div class="votes">
    <div id="Vu93993">
    <a href="/manual/vote-note.php?id=93993&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93993">
    <a href="/manual/vote-note.php?id=93993&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93993" title="60% like this...">
    3
    </div>
  </div>
  <a href="#93993" class="name">
  <strong class="user"><em>kalim dot fleet at gmail dot com</em></strong></a><a class="genanchor" href="#93993"> &para;</a><div class="date" title="2009-10-10 09:49"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93993">
<div class="phpcode"><code><span class="html">This will truncate a longer string to a smaller string of specified length while replacing the middle portion with a separator exactly in the middle.<br /><br /><span class="default">&lt;?php<br /><br />$longString </span><span class="keyword">= </span><span class="string">'abcdefghijklmnopqrstuvwxyz0123456789z.jpg'</span><span class="keyword">;<br /></span><span class="default">$separator </span><span class="keyword">= </span><span class="string">'/.../'</span><span class="keyword">;<br /></span><span class="default">$separatorlength </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$separator</span><span class="keyword">) ;<br /></span><span class="default">$maxlength </span><span class="keyword">= </span><span class="default">25 </span><span class="keyword">- </span><span class="default">$separatorlength</span><span class="keyword">;<br /></span><span class="default">$start </span><span class="keyword">= </span><span class="default">$maxlength </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">;<br /></span><span class="default">$trunc </span><span class="keyword">=  </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$longString</span><span class="keyword">) - </span><span class="default">$maxlength</span><span class="keyword">;<br /><br />echo </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$longString</span><span class="keyword">, </span><span class="default">$separator</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$trunc</span><span class="keyword">);<br /><br /></span><span class="comment">//prints "abcdefghij/.../56789z.jpg"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89848">  <div class="votes">
    <div id="Vu89848">
    <a href="/manual/vote-note.php?id=89848&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89848">
    <a href="/manual/vote-note.php?id=89848&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89848" title="57% like this...">
    4
    </div>
  </div>
  <a href="#89848" class="name">
  <strong class="user"><em>juichenieder-phnet at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#89848"> &para;</a><div class="date" title="2009-03-25 10:58"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89848">
<div class="phpcode"><code><span class="html">I've just taken a look at the post by ntoniazzi and I have a very small correction to make.<br /><br />In the second if statement, it should be a triple equals, so:<br /><br /><span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">$length </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) </span><span class="default">?&gt;<br /></span><br />It requires the triple equals, for the case of pure insertion, where $length = 0, the double equals, will catch this, causing the string to be cut short.  I hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="82733">  <div class="votes">
    <div id="Vu82733">
    <a href="/manual/vote-note.php?id=82733&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82733">
    <a href="/manual/vote-note.php?id=82733&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82733" title="55% like this...">
    2
    </div>
  </div>
  <a href="#82733" class="name">
  <strong class="user"><em>William Barry</em></strong></a><a class="genanchor" href="#82733"> &para;</a><div class="date" title="2008-04-23 12:18"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82733">
<div class="phpcode"><code><span class="html">I recently ran across a situation where I need to strip a heavily nested html list such that only the top level was preserved.  I started with a regular expression solution, but found that I kept matching the wrong closing ul with an outer opening ul.<br /><br />This was my alternative solution, and it seems to work well:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">stripNestedLists</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)<br />{<br />    </span><span class="default">$str2 </span><span class="keyword">= </span><span class="default">$str</span><span class="keyword">;<br />    </span><span class="default">$lastStr </span><span class="keyword">= </span><span class="default">$str2</span><span class="keyword">;<br />    <br />    do<br />    {<br />        </span><span class="comment">// Find the first closing ul<br />        </span><span class="default">$cul </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">, </span><span class="string">'&lt;/ul&gt;'</span><span class="keyword">);<br />        </span><span class="default">$ul </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$lastUL </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        do<br />        {<br />            </span><span class="comment">// Find the next opening ul<br />            </span><span class="default">$lastUL </span><span class="keyword">= </span><span class="default">$ul</span><span class="keyword">;<br />            </span><span class="default">$ul </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">, </span><span class="string">'&lt;ul'</span><span class="keyword">, </span><span class="default">$ul</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);<br />        }<br />        while (</span><span class="default">$ul </span><span class="keyword">!== </span><span class="default">false </span><span class="keyword">&amp;&amp; </span><span class="default">$ul </span><span class="keyword">&lt; </span><span class="default">$cul</span><span class="keyword">);<br />    <br />        </span><span class="default">$lastStr </span><span class="keyword">= </span><span class="default">$str2</span><span class="keyword">;<br />        </span><span class="default">$str2 </span><span class="keyword">= </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$lastUL</span><span class="keyword">, </span><span class="default">$cul</span><span class="keyword">-</span><span class="default">$lastUL</span><span class="keyword">+</span><span class="default">5</span><span class="keyword">);<br />        </span><span class="default">$str2 </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">);<br />    }<br />    while (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">);<br />    <br />    return </span><span class="default">$lastStr</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="19015">  <div class="votes">
    <div id="Vu19015">
    <a href="/manual/vote-note.php?id=19015&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19015">
    <a href="/manual/vote-note.php?id=19015&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19015" title="55% like this...">
    2
    </div>
  </div>
  <a href="#19015" class="name">
  <strong class="user"><em>klaas at group94 dot com</em></strong></a><a class="genanchor" href="#19015"> &para;</a><div class="date" title="2002-02-13 10:38"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19015">
<div class="phpcode"><code><span class="html">THE DOT DOT DOT ISSUE<br /><br />PROBLEM:<br />You want to abbreviate a string.<br />E.g. You want "BritneySpears" to show as "BritneySpe...", being only the ten first characters followed by "..."<br /><br />SOLUTION:<br />&lt;?<br />$oRIGINAL = "BritneySpears";<br />$sHORTER = substr_replace($oRIGINAL, '...', 10);<br />echo ($sHORTER);<br />?&gt;<br /><br />This will result in BritneySpe...</span></code></div>
  </div>
 </div>
  <div class="note" id="76951">  <div class="votes">
    <div id="Vu76951">
    <a href="/manual/vote-note.php?id=76951&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76951">
    <a href="/manual/vote-note.php?id=76951&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76951" title="53% like this...">
    1
    </div>
  </div>
  <a href="#76951" class="name">
  <strong class="user"><em>alishahnovin at hotmail dot com</em></strong></a><a class="genanchor" href="#76951"> &para;</a><div class="date" title="2007-08-07 12:56"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76951">
<div class="phpcode"><code><span class="html">I like the truncate function below...however, I found a few issues. Particularly if you have content that may have any kind of punctuation in it (?, !, ?!?, --, ..., .., ;, etc.)<br /><br />The older function would end up looking like "blah blah?..." or "blah blah,..." which doesn't look so nice to me...<br /><br />Here's my fix. It removes all trailing punctuation (that you include in the $punctuation string below) and then adds an ellipse. So even if it has an ellipse with 3 dots, 2 dots, 4 dots, it'll be removed, then re-added.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">truncate</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$numb</span><span class="keyword">,</span><span class="default">$etc </span><span class="keyword">= </span><span class="string">"..."</span><span class="keyword">) {<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">);<br />if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) &gt; </span><span class="default">$numb</span><span class="keyword">) {<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$numb</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">));<br /><br /></span><span class="default">$punctuation </span><span class="keyword">= </span><span class="string">".!?:;,-"</span><span class="keyword">; </span><span class="comment">//punctuation you want removed<br /><br /></span><span class="default">$text </span><span class="keyword">= (</span><span class="default">strspn</span><span class="keyword">(</span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">),  </span><span class="default">$punctuation</span><span class="keyword">)!=</span><span class="default">0</span><span class="keyword">)<br />        ?<br />        </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">strspn</span><span class="keyword">(</span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">),  </span><span class="default">$punctuation</span><span class="keyword">))<br />        :<br /></span><span class="default">$text</span><span class="keyword">;<br /><br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">$text</span><span class="keyword">.</span><span class="default">$etc</span><span class="keyword">;<br />}<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">);<br />return </span><span class="default">$text</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />I also needed a sort of "middle" truncate. The above function truncates around the end, but if you want to truncate around the middle (ie "Hello this is a long string." --&gt; "Hello this ... long string.") you can use this (requires the truncate function):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mtruncate</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$numb</span><span class="keyword">, </span><span class="default">$etc </span><span class="keyword">= </span><span class="string">" ... "</span><span class="keyword">) {<br />    </span><span class="default">$first_part </span><span class="keyword">= </span><span class="default">truncate</span><span class="keyword">(</span><span class="default">truncate</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">), </span><span class="default">$numb</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">);<br />    </span><span class="default">$second_part </span><span class="keyword">= </span><span class="default">truncate</span><span class="keyword">(</span><span class="default">strrev</span><span class="keyword">(</span><span class="default">truncate</span><span class="keyword">(</span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">), </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">)), </span><span class="default">$numb</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">);<br />    return </span><span class="default">$first_part</span><span class="keyword">.</span><span class="default">$etc</span><span class="keyword">.</span><span class="default">$second_part</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123686">  <div class="votes">
    <div id="Vu123686">
    <a href="/manual/vote-note.php?id=123686&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123686">
    <a href="/manual/vote-note.php?id=123686&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123686" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123686" class="name">
  <strong class="user"><em>bkline at rksystems dot com</em></strong></a><a class="genanchor" href="#123686"> &para;</a><div class="date" title="2019-03-12 01:21"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123686">
<div class="phpcode"><code><span class="html">I imagine the description of the parameters really means "number of bytes" where it says "number of characters" (confirmed by testing).</span></code></div>
  </div>
 </div>
  <div class="note" id="123316">  <div class="votes">
    <div id="Vu123316">
    <a href="/manual/vote-note.php?id=123316&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123316">
    <a href="/manual/vote-note.php?id=123316&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123316" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123316" class="name">
  <strong class="user"><em>yeyijelud at amadamus dot com</em></strong></a><a class="genanchor" href="#123316"> &para;</a><div class="date" title="2018-11-08 06:18"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123316">
<div class="phpcode"><code><span class="html">First Example can be simplified =&gt;<br /><br /> $input = array('A: XXX', 'B: XXX', 'C: XXX');<br /><br /> substr_replace($input, 'YYY', -3);<br /><br />output: Array ( [0] =&gt; A: YYY [1] =&gt; B: YYY [2] =&gt; C: YYY )</span></code></div>
  </div>
 </div>
  <div class="note" id="56223">  <div class="votes">
    <div id="Vu56223">
    <a href="/manual/vote-note.php?id=56223&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56223">
    <a href="/manual/vote-note.php?id=56223&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56223" title="50% like this...">
    0
    </div>
  </div>
  <a href="#56223" class="name">
  <strong class="user"><em>hermes at andycostell dot com</em></strong></a><a class="genanchor" href="#56223"> &para;</a><div class="date" title="2005-08-27 11:48"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56223">
<div class="phpcode"><code><span class="html">I suggest changing the function suggested by Guru Evi slightly. I found that it doesn't work as written here.<br /><br />Original:<br />function add_3dots($string,$repl,$start,$limit) {<br />   if(strlen($string) &gt; $limit) {<br />       return substr_replace(strip_tags($string),$repl,$start,$limit);<br />   } else {<br />       return $string;<br />   };<br />};<br /><br />I suggest:<br />function add_3dots($string,$repl,$limit) {<br />       if(strlen($string) &gt; $limit) {<br />           return substr_replace(strip_tags($string),$repl,$limit-strlen($repl));<br />       } else {<br />           return $string;<br />       }<br />    }<br /><br />Usage:<br /><br />$max_length=10;//the max number of characters you want to display<br />$too_long_string="BLAH BLAH BLAH BLAH BLAH etc.";//the string you want to shorten (if it's longer than the $limit)<br />$shorter_string=add_3_dots($too_long_string,"...",$max_length);</span></code></div>
  </div>
 </div>
  <div class="note" id="54703">  <div class="votes">
    <div id="Vu54703">
    <a href="/manual/vote-note.php?id=54703&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54703">
    <a href="/manual/vote-note.php?id=54703&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54703" title="50% like this...">
    0
    </div>
  </div>
  <a href="#54703" class="name">
  <strong class="user"><em>Guru Evi</em></strong></a><a class="genanchor" href="#54703"> &para;</a><div class="date" title="2005-07-13 12:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54703">
<div class="phpcode"><code><span class="html">If your string is not long enough to meet what you specify in start and length then the replacement string is added towards the end of the string.<br /><br />I wanted to replace the end of the string with ... if the string was too long to display (for instance article preview on a website). The problem was that my string was sometimes not that long and it still added the replacement string. So I wrote a function to replace substr_replace in my website:<br /><br />function add_3dots($string,$repl,$start,$limit) {<br />    if(strlen($string) &gt; $limit) {<br />        return substr_replace(strip_tags($string),$repl,$start,$limit);<br />    } else {<br />        return $string;<br />    };<br />};<br /><br />I use strip_tags to strip out the HTML otherwise you might get a screwed up HTML (when a tags open in the string, but because you cut-off it doesn't)</span></code></div>
  </div>
 </div>
  <div class="note" id="59544">  <div class="votes">
    <div id="Vu59544">
    <a href="/manual/vote-note.php?id=59544&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59544">
    <a href="/manual/vote-note.php?id=59544&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59544" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#59544" class="name">
  <strong class="user"><em>chuayw2000 at hotmail dot com</em></strong></a><a class="genanchor" href="#59544"> &para;</a><div class="date" title="2005-12-09 03:33"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59544">
<div class="phpcode"><code><span class="html">I don't know if this function is multibyte safe but I've written a function that will do the same in multibyte mode.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//Check to see if it exists in case PHP has this function later<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"mb_substr_replace"</span><span class="keyword">)){<br />   </span><span class="comment">//Same parameters as substr_replace with the extra encoding parameter.<br />    </span><span class="keyword">function </span><span class="default">mb_substr_replace</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$replacement</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">,</span><span class="default">$encoding </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">){<br />        if (</span><span class="default">$encoding </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">){<br />            if (</span><span class="default">$length </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">){<br />                return </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">).</span><span class="default">$replacement</span><span class="keyword">;<br />            }<br />            else{<br />                return </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">).</span><span class="default">$replacement</span><span class="keyword">.</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$start </span><span class="keyword">+ </span><span class="default">$length</span><span class="keyword">);<br />            }<br />        }<br />        else{<br />            if (</span><span class="default">$length </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">){<br />                return </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$encoding</span><span class="keyword">).</span><span class="default">$replacement</span><span class="keyword">;<br />            }<br />            else{<br />                return </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$encoding</span><span class="keyword">). </span><span class="default">$replacement</span><span class="keyword">. </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$start </span><span class="keyword">+ </span><span class="default">$length</span><span class="keyword">,</span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$encoding</span><span class="keyword">),</span><span class="default">$encoding</span><span class="keyword">);<br />            }<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86254">  <div class="votes">
    <div id="Vu86254">
    <a href="/manual/vote-note.php?id=86254&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86254">
    <a href="/manual/vote-note.php?id=86254&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86254" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#86254" class="name">
  <strong class="user"><em>NiX0n at fragfest dot cx</em></strong></a><a class="genanchor" href="#86254"> &para;</a><div class="date" title="2008-10-09 09:41"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86254">
<div class="phpcode"><code><span class="html">The preemptive test to see if $string is "too long" shouldn't add strlen($replacement) to $max.  $max should represent the absolute maximum length of string returned.  The size of the $replacement is irrelevant in that determination.<br /><br />The rest of the function (unchanged below) operates as defined above.  Meaning, the size of the $replacement is subtracted from the $max, so that the returned string is exactly the length of $max.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">truncate</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$max </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">, </span><span class="default">$replacement </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">)<br />{<br />    if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) &lt;= </span><span class="default">$max</span><span class="keyword">)<br />    {<br />        return </span><span class="default">$string</span><span class="keyword">;<br />    }<br />    </span><span class="default">$leave </span><span class="keyword">= </span><span class="default">$max </span><span class="keyword">- </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$replacement</span><span class="keyword">);<br />    return </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$replacement</span><span class="keyword">, </span><span class="default">$leave</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118705">  <div class="votes">
    <div id="Vu118705">
    <a href="/manual/vote-note.php?id=118705&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118705">
    <a href="/manual/vote-note.php?id=118705&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118705" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#118705" class="name">
  <strong class="user"><em>nospam at nospam dot com</em></strong></a><a class="genanchor" href="#118705"> &para;</a><div class="date" title="2016-01-21 09:45"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118705">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// shortens a long string to a max length while inserting a string into the exact middle<br /></span><span class="keyword">function </span><span class="default">strShorten</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$maxlen </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">, </span><span class="default">$insert </span><span class="keyword">= </span><span class="string">'/.../'</span><span class="keyword">) {<br />  if (</span><span class="default">$str </span><span class="keyword">&amp;&amp; !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)) { </span><span class="comment">// valid string<br />    </span><span class="keyword">if (</span><span class="default">$maxlen </span><span class="keyword">&amp;&amp; </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$maxlen</span><span class="keyword">) &amp;&amp; </span><span class="default">$maxlen </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)) { </span><span class="comment">// string needs shortening<br />      </span><span class="keyword">if (</span><span class="default">$insert </span><span class="keyword">&amp;&amp; (</span><span class="default">$ilen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$insert</span><span class="keyword">))) { </span><span class="comment">// insert string and length<br />        </span><span class="keyword">if (</span><span class="default">$ilen </span><span class="keyword">&gt;= </span><span class="default">$maxlen</span><span class="keyword">) { </span><span class="comment">// insert string too long so use default insert<br />          </span><span class="default">$insert </span><span class="keyword">= </span><span class="string">'**'</span><span class="keyword">; </span><span class="comment">// short default so works even when a very small $maxlen<br />          </span><span class="default">$ilen </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />        }<br />      }<br />      </span><span class="default">$chars </span><span class="keyword">= </span><span class="default">$maxlen </span><span class="keyword">- </span><span class="default">$ilen</span><span class="keyword">; </span><span class="comment">// number of $str chars to keep<br />      </span><span class="default">$start </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$chars</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">); </span><span class="comment">// position to start cutting<br />      </span><span class="default">$end </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$chars</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">); </span><span class="comment">// position from end to stop cutting<br />      </span><span class="keyword">return </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$insert</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, -</span><span class="default">$end</span><span class="keyword">); </span><span class="comment">// first.insert.last<br />    </span><span class="keyword">} else { </span><span class="comment">// string already short enough<br />      </span><span class="keyword">return </span><span class="default">$str</span><span class="keyword">; </span><span class="comment">// return original string<br />    </span><span class="keyword">}<br />  }<br />}<br /><br />echo </span><span class="default">strShorten</span><span class="keyword">(</span><span class="string">'123456789'</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">); </span><span class="comment">// outputs 123789<br /></span><span class="keyword">echo </span><span class="default">strShorten</span><span class="keyword">(</span><span class="string">'123456789'</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="string">'-'</span><span class="keyword">); </span><span class="comment">// outputs 123-89<br /></span><span class="keyword">echo </span><span class="default">strShorten</span><span class="keyword">(</span><span class="string">'123456789'</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="string">'longstring'</span><span class="keyword">); </span><span class="comment">// outputs 12**89<br /></span><span class="keyword">echo </span><span class="default">strShorten</span><span class="keyword">(</span><span class="string">'abcdefghijklmnopqrstuvwxyz'</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="string">'..'</span><span class="keyword">); </span><span class="comment">// outputs abcd..wxyz<br /></span><span class="keyword">echo </span><span class="default">strShorten</span><span class="keyword">(</span><span class="string">'abcdefghijklmnopqrstuvwxyz'</span><span class="keyword">); </span><span class="comment">// outputs abc/.../yz<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82056">  <div class="votes">
    <div id="Vu82056">
    <a href="/manual/vote-note.php?id=82056&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82056">
    <a href="/manual/vote-note.php?id=82056&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82056" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#82056" class="name">
  <strong class="user"><em>jaimthorn at yahoo dot com</em></strong></a><a class="genanchor" href="#82056"> &para;</a><div class="date" title="2008-03-25 10:53"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82056">
<div class="phpcode"><code><span class="html">I recently needed a routine that would remove the characters in one string from another, like the regex<br /><br /><span class="default">&lt;?php<br />   $result </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/[</span><span class="default">$chars</span><span class="string">]/"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />and I needed it to be fast, and accept pretty much all input.  The regex above won't work when strlen($chars) == 0.  I came up with this, admittedly pretty horrible-looking code, that is quite fast:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">RemoveChars</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$chars</span><span class="keyword">)<br />{<br />    return isset(</span><span class="default">$chars</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}) ? </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$chars</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}, </span><span class="string">""</span><span class="keyword">, </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$chars</span><span class="keyword">, </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$chars</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$chars</span><span class="keyword">), </span><span class="default">$chars</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}))) : </span><span class="default">$string</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />According to my own measurements, the regex in ONLY faster for when strlen($chars) == 1; for longer strings, my routine is faster.  What does it do?  Let's say you want to remove the period, the comma and the exclamation mark from a string, like so:<br />$result = RemoveChars("Isn't this, like, totally neat..!?", ".?!");<br />The str_pad function creates a string equal in length to the string that contains the character to be removed, but consisting only of the first character of that string:<br />The input is ".,!"<br />The output is "..."<br />The strtr function translates all characters in the string-to-be-processed ("Isn't this...") that also occur in the input (".,!") to the characters in the same position in the output ("...").  In other words:<br />Isn't this, like, totally neat..!?<br />becomes<br />Isn't this. like. totally neat....<br />Finally, the first character from the input (".,!") which happens to be, again, the period, is removed from that string by the str_replace call:<br />Isn't this like totally neat?<br />The function needs to check is $chars has at least one character, or else the str_pad function will fail.  If it's empty, then the unprocessed string is returned.</span></code></div>
  </div>
 </div>
  <div class="note" id="33736">  <div class="votes">
    <div id="Vu33736">
    <a href="/manual/vote-note.php?id=33736&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33736">
    <a href="/manual/vote-note.php?id=33736&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33736" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#33736" class="name">
  <strong class="user"><em>david at ethinkn dot com</em></strong></a><a class="genanchor" href="#33736"> &para;</a><div class="date" title="2003-07-05 05:36"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33736">
<div class="phpcode"><code><span class="html">Here is a simple function to shorten a string and add an ellipsis<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * truncate() Simple function to shorten a string and add an ellipsis<br /> * <br /> * @param string $string Origonal string<br /> * @param integer $max Maximum length<br /> * @param string $rep Replace with... (Default = '' - No elipsis -)<br /> * @return string<br /> * @author David Duong<br /> **/<br /></span><span class="keyword">function </span><span class="default">truncate </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$max </span><span class="keyword">= </span><span class="default">50</span><span class="keyword">, </span><span class="default">$rep </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">) {<br />    </span><span class="default">$leave </span><span class="keyword">= </span><span class="default">$max </span><span class="keyword">- </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$rep</span><span class="keyword">);<br />    return </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$rep</span><span class="keyword">, </span><span class="default">$leave</span><span class="keyword">);<br />} <br /><br />echo </span><span class="default">truncate </span><span class="keyword">(</span><span class="string">'akfhslakdhglksjdgh'</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="string">'...'</span><span class="keyword">);<br /></span><span class="comment">// Returns akfhsla... (10 chrs)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="12483">  <div class="votes">
    <div id="Vu12483">
    <a href="/manual/vote-note.php?id=12483&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12483">
    <a href="/manual/vote-note.php?id=12483&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12483" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#12483" class="name">
  <strong class="user"><em>mrbrown8 at juno dot com</em></strong></a><a class="genanchor" href="#12483"> &para;</a><div class="date" title="2001-04-16 12:16"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12483">
<div class="phpcode"><code><span class="html">Just to add to the examples, if replacement is longer than length, only the length number of chars are removed from string and all of replacement is put in its place, and therefor strlen($string) is inreased.
<br />
<br />$var = 'ABCDEFGH:/MNRPQR/';
<br />/*  Should return ABCDEFGH:/testingRPQR/   */
<br />echo substr_replace ($var, 'testing', 10, 2);</span></code></div>
  </div>
 </div>
  <div class="note" id="40141">  <div class="votes">
    <div id="Vu40141">
    <a href="/manual/vote-note.php?id=40141&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40141">
    <a href="/manual/vote-note.php?id=40141&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40141" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#40141" class="name">
  <strong class="user"><em>geniusdex ( at ) brz ( dot ) nu</em></strong></a><a class="genanchor" href="#40141"> &para;</a><div class="date" title="2004-02-23 07:33"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40141">
<div class="phpcode"><code><span class="html">This is my version of making dotted strings:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">dot</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">, </span><span class="default">$dots </span><span class="keyword">= </span><span class="string">"..."</span><span class="keyword">) {<br />    if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) &gt; </span><span class="default">$len</span><span class="keyword">) {<br />        </span><span class="default">$dotlen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$dots</span><span class="keyword">);<br />        </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$dots</span><span class="keyword">, </span><span class="default">$len </span><span class="keyword">- </span><span class="default">$dotlen</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="43338">  <div class="votes">
    <div id="Vu43338">
    <a href="/manual/vote-note.php?id=43338&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43338">
    <a href="/manual/vote-note.php?id=43338&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43338" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#43338" class="name">
  <strong class="user"><em>dmron</em></strong></a><a class="genanchor" href="#43338"> &para;</a><div class="date" title="2004-06-17 04:34"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43338">
<div class="phpcode"><code><span class="html">Regarding "...", even the short functions are too long and complicated, and there's no need to use substr_replace. substr() works better and is  way faster prior to 4.3.5 as the below poster stated.<br /><br />function shorten( $str, $num = 100 ) {<br />  if( strlen( $str ) &gt; $num ) $str = substr( $str, 0, $num ) . "...";<br />  return $str;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="96308">  <div class="votes">
    <div id="Vu96308">
    <a href="/manual/vote-note.php?id=96308&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96308">
    <a href="/manual/vote-note.php?id=96308&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96308" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#96308" class="name">
  <strong class="user"><em>den dot gierling at web dot de</em></strong></a><a class="genanchor" href="#96308"> &para;</a><div class="date" title="2010-02-19 10:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96308">
<div class="phpcode"><code><span class="html">My problem was that substr_replace() always added $replacement, so i wrote my own function.<br />This function only adds $replacement, if substr() took action.<br />The parameter $length is optional - like substr()'s.<br />Or I was too stupid using $start and $length...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">substr_replace_provided</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$replacement</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">)<br />{<br />    </span><span class="default">$tmp</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">);<br />    if(</span><span class="default">$string</span><span class="keyword">!==</span><span class="default">$tmp</span><span class="keyword">) {<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">$tmp</span><span class="keyword">.</span><span class="default">$replacement</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$string</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="39200">  <div class="votes">
    <div id="Vu39200">
    <a href="/manual/vote-note.php?id=39200&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39200">
    <a href="/manual/vote-note.php?id=39200&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39200" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#39200" class="name">
  <strong class="user"><em>Thijs Wijnmaalen (thijs[at]nllinux.nl)</em></strong></a><a class="genanchor" href="#39200"> &para;</a><div class="date" title="2004-01-20 11:05"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39200">
<div class="phpcode"><code><span class="html">I wrote a function that you can use for example in combination with a search script to cut off the articles that are too long.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">substr_index</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$maxChars </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">, </span><span class="default">$splitter<br /></span><span class="keyword">= </span><span class="string">'...'</span><span class="keyword">) {<br /><br /></span><span class="default">$theReturn </span><span class="keyword">= </span><span class="default">$text</span><span class="keyword">;<br /></span><span class="default">$lastSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /><br />if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) &gt; </span><span class="default">$maxChars</span><span class="keyword">) {<br /></span><span class="default">$theReturn </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$maxChars </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">);<br /><br />if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$maxChars </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">),<br />array(</span><span class="string">' '</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="string">'!'</span><span class="keyword">, </span><span class="string">'?'</span><span class="keyword">))) {<br /></span><span class="default">$theReturn </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$maxChars</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />} else {<br /></span><span class="default">$theReturn </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$theReturn</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$maxChars </span><span class="keyword">-<br /></span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$splitter</span><span class="keyword">));<br /></span><span class="default">$lastSpace </span><span class="keyword">= </span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$theReturn</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">);<br /><br />if (</span><span class="default">$lastSpace </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) {<br /></span><span class="default">$theReturn </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$theReturn</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$lastSpace</span><span class="keyword">);<br />}<br /><br />if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$theReturn</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">), array(</span><span class="string">','</span><span class="keyword">))) {<br /></span><span class="default">$theReturn </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$theReturn</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br />}<br /></span><span class="default">$theReturn </span><span class="keyword">.= </span><span class="default">$splitter</span><span class="keyword">;<br />}<br />}<br />return </span><span class="default">$theReturn</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125126">  <div class="votes">
    <div id="Vu125126">
    <a href="/manual/vote-note.php?id=125126&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125126">
    <a href="/manual/vote-note.php?id=125126&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125126" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#125126" class="name">
  <strong class="user"><em>meg dot phillips91 at gmail dot com</em></strong></a><a class="genanchor" href="#125126"> &para;</a><div class="date" title="2020-06-18 04:47"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125126">
<div class="phpcode"><code><span class="html">This may be obvious to others, but I just spent hours and my feeble brain only caught up to it after a long break. <br /><br />If you are looping through a string which has multiple substrings that need to be replaced, you have to add an offset factor to each original offset before you replaced any strings. Here is a real world example: <br /><br />From draft.js we get paragraphs with multiple links designated only with offset, anchor text length, url, target. So each anchor text must be wrapped in the &lt;a href="url" target="target"&gt;anchortext&lt;/a&gt; to save proper content in the database. <br /><br />Here is the implementation of offset factor:<br /><br /> $offset_factor = 0;<br /><br /> foreach($content-&gt;links-&gt;links as $index=&gt;$link){<br />            $replacement = '&lt;a href="'.$link-&gt;href.'"  target="$link-&gt;target"&gt;'.$link-&gt;anchorText.'&lt;/a&gt;';<br />            $new_offset = $link-&gt;offset + $offset_factor;<br />            $newtext = \substr_replace($content-&gt;text, $replacement, $new_offset, $link-&gt;length);<br /><br />            //now we reset the original paragraph text with newtext<br />            $content-&gt;text = $newtext;<br />           <br />            //calculate the new offset by calculating the difference in replacement length and original length and add that to the offset_factor<br />            $additional_characters = strlen($replacement) - $link-&gt;length;<br />            $offset_factor =  $offset_factor + $additional_characters;<br />        }<br /><br />I hope this helps a noobie :) If there is another easier way, I would love to hear about it.</span></code></div>
  </div>
 </div>
  <div class="note" id="84728">  <div class="votes">
    <div id="Vu84728">
    <a href="/manual/vote-note.php?id=84728&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84728">
    <a href="/manual/vote-note.php?id=84728&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84728" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#84728" class="name">
  <strong class="user"><em>spcl dot delivery at gmail dot com</em></strong></a><a class="genanchor" href="#84728"> &para;</a><div class="date" title="2008-07-27 04:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84728">
<div class="phpcode"><code><span class="html">the version of my predecessor will add $rep even if the string is shorter than max. fixed version:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">truncate</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$max </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">, </span><span class="default">$rep </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">)
<br />{
<br />    if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) &lt;= (</span><span class="default">$max </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$rep</span><span class="keyword">)))
<br />    {
<br />        return </span><span class="default">$string</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">$leave </span><span class="keyword">= </span><span class="default">$max </span><span class="keyword">- </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$rep</span><span class="keyword">);
<br />    return </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$rep</span><span class="keyword">, </span><span class="default">$leave</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />To preserve the filename extension you can call it like this:
<br />
<br />truncate([filename], 30, '...' . end(explode('.', [filename])))</span></code></div>
  </div>
 </div>
  <div class="note" id="15744">  <div class="votes">
    <div id="Vu15744">
    <a href="/manual/vote-note.php?id=15744&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd15744">
    <a href="/manual/vote-note.php?id=15744&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V15744" title="33% like this...">
    -5
    </div>
  </div>
  <a href="#15744" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#15744"> &para;</a><div class="date" title="2001-09-28 08:30"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom15744">
<div class="phpcode"><code><span class="html">If you would like to remove characters from the start or end of a string, try the substr() function.
<br />
<br />For example, to remove the last three characters from a string:
<br />$string = "To be or not to be.";
<br />$string = substr ($string, 0, -3);</span></code></div>
  </div>
 </div>
  <div class="note" id="118243">  <div class="votes">
    <div id="Vu118243">
    <a href="/manual/vote-note.php?id=118243&amp;page=function.substr-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118243">
    <a href="/manual/vote-note.php?id=118243&amp;page=function.substr-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118243" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#118243" class="name">
  <strong class="user"><em>olav at schettler dot net</em></strong></a><a class="genanchor" href="#118243"> &para;</a><div class="date" title="2015-11-01 08:12"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118243">
<div class="phpcode"><code><span class="html">Please note that the function array_slice(), which has a similar functionality but for arrays rather than for strings, has its parameters in a different order.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.substr-replace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.substr-replace.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
