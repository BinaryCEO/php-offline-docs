<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: preg_replace_callback_array - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.preg-replace-callback-array.php">
 <link rel="shorturl" href="https://www.php.net/preg-replace-callback-array">
 <link rel="alternate" href="https://www.php.net/preg-replace-callback-array" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pcre.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.preg-replace-callback.php">
 <link rel="next" href="https://www.php.net/manual/en/function.preg-split.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.preg-replace-callback-array.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.preg-replace-callback-array.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.preg-replace-callback-array.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.preg-replace-callback-array.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.preg-replace-callback-array.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.preg-replace-callback-array.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.preg-replace-callback-array.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.preg-replace-callback-array.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.preg-replace-callback-array.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.preg-replace-callback-array.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.preg-replace-callback-array.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Perform a regular expression search and replace using callbacks" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: preg_replace_callback_array - Manual" />
<meta name="twitter:description" content="Perform a regular expression search and replace using callbacks" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: preg_replace_callback_array - Manual" />
<meta itemprop="description" content="Perform a regular expression search and replace using callbacks" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Perform a regular expression search and replace using callbacks" />

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
        <a href="function.preg-split.php">
          preg_split &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.preg-replace-callback.php">
          &laquo; preg_replace_callback        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.pcre.php'>PCRE</a></li>      <li><a href='ref.pcre.php'>PCRE Functions</a></li>      </ul>
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
            <option value='en/function.preg-replace-callback-array.php' selected="selected">English</option>
            <option value='de/function.preg-replace-callback-array.php'>German</option>
            <option value='es/function.preg-replace-callback-array.php'>Spanish</option>
            <option value='fr/function.preg-replace-callback-array.php'>French</option>
            <option value='it/function.preg-replace-callback-array.php'>Italian</option>
            <option value='ja/function.preg-replace-callback-array.php'>Japanese</option>
            <option value='pt_BR/function.preg-replace-callback-array.php'>Brazilian Portuguese</option>
            <option value='ru/function.preg-replace-callback-array.php'>Russian</option>
            <option value='tr/function.preg-replace-callback-array.php'>Turkish</option>
            <option value='uk/function.preg-replace-callback-array.php'>Ukrainian</option>
            <option value='zh/function.preg-replace-callback-array.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.preg-replace-callback-array" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">preg_replace_callback_array</h1>
  <p class="verinfo">(PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">preg_replace_callback_array</span> &mdash; <span class="dc-title">Perform a regular expression search and replace using callbacks</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.preg-replace-callback-array-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>preg_replace_callback_array</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$pattern</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$subject</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$count</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>

  <p class="para rdfs-comment">
   The behavior of this function is similar to
   <span class="function"><a href="function.preg-replace-callback.php" class="function">preg_replace_callback()</a></span>, except that callbacks are
   executed on a per-pattern basis.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.preg-replace-callback-array-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">pattern</code></dt>
     <dd>
      <p class="para">
       An associative array mapping patterns (keys) to <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>s (values).
      </p>
     </dd>
    
    
     <dt><code class="parameter">subject</code></dt>
     <dd>
      <p class="para">
       The string or an array with strings to search and replace.
      </p>
     </dd>
    
    
     <dt><code class="parameter">limit</code></dt>
     <dd>
      <p class="para">
       The maximum possible replacements for each pattern in each
       <code class="parameter">subject</code> string. Defaults to
       <code class="literal">-1</code> (no limit).
      </p>
     </dd>
    
    
     <dt><code class="parameter">count</code></dt>
     <dd>
      <p class="para">
       If specified, this variable will be filled with the number of
       replacements done.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">flags</code> can be a combination of the
       <strong><code><a href="pcre.constants.php#constant.preg-offset-capture">PREG_OFFSET_CAPTURE</a></code></strong> and
       <strong><code><a href="pcre.constants.php#constant.preg-unmatched-as-null">PREG_UNMATCHED_AS_NULL</a></code></strong> flags, which influence the
       format of the matches array.
       See the description in <span class="function"><a href="function.preg-match.php" class="function">preg_match()</a></span> for more details.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.preg-replace-callback-array-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>preg_replace_callback_array()</strong></span> returns an array if the
   <code class="parameter">subject</code> parameter is an array, or a string
   otherwise. On errors the return value is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>
  </p>
  <p class="para">
   If matches are found, the new subject will be returned, otherwise
   <code class="parameter">subject</code> will be returned unchanged. 
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.preg-replace-callback-array-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If the regex pattern passed does not compile to a valid regex, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
</p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.preg-replace-callback-array-changelog">
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
       <td>7.4.0</td>
       <td>
        The <code class="parameter">flags</code> parameter was added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.preg-replace-callback-array-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5045">
    <p><strong>Example #1 <span class="function"><strong>preg_replace_callback_array()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$subject </span><span style="color: #007700">= </span><span style="color: #DD0000">'Aaaaaa Bbb'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">preg_replace_callback_array</span><span style="color: #007700">(<br />    [<br />        </span><span style="color: #DD0000">'~[a]+~i' </span><span style="color: #007700">=&gt; function (</span><span style="color: #0000BB">$match</span><span style="color: #007700">) {<br />            echo </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]), </span><span style="color: #DD0000">' matches for "a" found'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />        },<br />        </span><span style="color: #DD0000">'~[b]+~i' </span><span style="color: #007700">=&gt; function (</span><span style="color: #0000BB">$match</span><span style="color: #007700">) {<br />            echo </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]), </span><span style="color: #DD0000">' matches for "b" found'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />        }<br />    ],<br />    </span><span style="color: #0000BB">$subject<br /></span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">6 matches for &quot;a&quot; found
3 matches for &quot;b&quot; found</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.preg-replace-callback-array-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="pcre.pattern.php" class="link">PCRE Patterns</a></li>
    <li><span class="function"><a href="function.preg-replace-callback.php" class="function" rel="rdfs-seeAlso">preg_replace_callback()</a> - Perform a regular expression search and replace using a callback</span></li>
    <li><span class="function"><a href="function.preg-quote.php" class="function" rel="rdfs-seeAlso">preg_quote()</a> - Quote regular expression characters</span></li>
    <li><span class="function"><a href="function.preg-replace.php" class="function" rel="rdfs-seeAlso">preg_replace()</a> - Perform a regular expression search and replace</span></li>
    <li><span class="function"><a href="function.preg-last-error.php" class="function" rel="rdfs-seeAlso">preg_last_error()</a> - Returns the error code of the last PCRE regex execution</span></li>
    <li><a href="functions.anonymous.php" class="link">Anonymous functions</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pcre/functions/preg-replace-callback-array.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.preg-replace-callback-array%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.preg-replace-callback-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.preg-replace-callback-array.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122311">  <div class="votes">
    <div id="Vu122311">
    <a href="/manual/vote-note.php?id=122311&amp;page=function.preg-replace-callback-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122311">
    <a href="/manual/vote-note.php?id=122311&amp;page=function.preg-replace-callback-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122311" title="77% like this...">
    10
    </div>
  </div>
  <a href="#122311" class="name">
  <strong class="user"><em>Sz.</em></strong></a><a class="genanchor" href="#122311"> &para;</a><div class="date" title="2018-01-25 05:24"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122311">
<div class="phpcode"><code><span class="html">Based on some tests, I found these important traits of the function. (These would<br />be nice to see documented as part of its spec, e.g. for confirmation. Without that,<br />this is just experimental curiosity. Still better than guesswork, though! ;) )<br /><br />1. Changes cascade over a subject across callbacks, i.e. a change made to a<br />   subject by a callback will be seen by the next callback, if its pattern matches<br />   the changed subject.<br />   (But a change made by a previous call of the *same* callback (on any subject)<br />   will not be seen by that callback again.)<br /><br />2. The pattern + callback pairs will be applied in the order of their appearance<br />   in $patterns_and_callbacks.<br /><br />3. The callback can't be null (or '') for a quick shortcut for empty replacements.<br /><br />4. Overall, the algorithm starts iterating over $patterns_and_callbacks, and then<br />   feeds each $subject to the current callback, repeatedly for every single match<br />   of its pattern on the current subject (unlike "preg_match_all", that is, which<br />   can do the same in one go, returning the accumulated results in an array).<br /><br />   This basically means that the "crown jewel", an even more efficient function:<br />   "preg_replace_all_callback_array" is still missing from the collection.<br /><br />   (Of course, that would better fit a new design of the regex API, where one<br />   API could flexibly handle various different modes via some $flags = [] array.)<br /><br />5. (This last one is not specific to this function, but inherent to regexes, OTOH,<br />   it's probably more relevant here than anywhere else in PHP's regex support.)<br /><br />   Even apparently simple cases can generate a crazy (and difficult-to-predict)<br />   number of matches, and therefore callback invokations, so remember the set<br />   $limit, where affordable. But, of course, try to sharpen your patterns first!<br /><br />   E.g. use ^...$ anchoring to avoid unintended extra calls on matching substrings<br />   of a subject, (I.e. '/.*/', without anchoring, would match twice: once for the<br />   whole subject, and then for a trailing empty substring -- but I'm not quite sure<br />   this should actually be correct behavior, though.)</span></code></div>
  </div>
 </div>
  <div class="note" id="118455">  <div class="votes">
    <div id="Vu118455">
    <a href="/manual/vote-note.php?id=118455&amp;page=function.preg-replace-callback-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118455">
    <a href="/manual/vote-note.php?id=118455&amp;page=function.preg-replace-callback-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118455" title="71% like this...">
    9
    </div>
  </div>
  <a href="#118455" class="name">
  <strong class="user"><em>drevilkuko at gmail dot com</em></strong></a><a class="genanchor" href="#118455"> &para;</a><div class="date" title="2015-12-09 12:24"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118455">
<div class="phpcode"><code><span class="html">finally!!!<br /><br />before (&lt;=php5.6):<br /><br /><span class="default">&lt;?php<br />        $htmlString </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(<br />            </span><span class="string">'/(href="?)(\S+)("?)/i'</span><span class="keyword">,<br />            function (&amp;</span><span class="default">$matches</span><span class="keyword">) {<br />                return </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="default">urldecode</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) . </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];<br />            },<br />            </span><span class="default">$htmlString<br />        </span><span class="keyword">);<br /><br />        </span><span class="default">$htmlString </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(<br />            </span><span class="string">'/(href="?\S+)(%24)(\S+)?"?/i'</span><span class="keyword">, </span><span class="comment">// %24 = $<br />            </span><span class="keyword">function (&amp;</span><span class="default">$matches</span><span class="keyword">) {<br />                return </span><span class="default">urldecode</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="string">'$' </span><span class="keyword">. </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]);<br />            },<br />            </span><span class="default">$htmlString<br />        </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />php7<br /><br /><span class="default">&lt;?php<br /><br />        $htmlString </span><span class="keyword">= </span><span class="default">preg_replace_callback_array</span><span class="keyword">(<br />            [<br />                </span><span class="string">'/(href="?)(\S+)("?)/i' </span><span class="keyword">=&gt; function (&amp;</span><span class="default">$matches</span><span class="keyword">) {<br />                    return </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="default">urldecode</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) . </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];<br />                },<br />                </span><span class="string">'/(href="?\S+)(%24)(\S+)?"?/i' </span><span class="keyword">=&gt; function (&amp;</span><span class="default">$matches</span><span class="keyword">) {<br />                    return </span><span class="default">urldecode</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="string">'$' </span><span class="keyword">. </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]);<br />                }<br />            ],<br />            </span><span class="default">$htmlString<br />        </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129520">  <div class="votes">
    <div id="Vu129520">
    <a href="/manual/vote-note.php?id=129520&amp;page=function.preg-replace-callback-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129520">
    <a href="/manual/vote-note.php?id=129520&amp;page=function.preg-replace-callback-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129520" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129520" class="name">
  <strong class="user"><em>claus at tondering dot dk</em></strong></a><a class="genanchor" href="#129520"> &para;</a><div class="date" title="2024-05-23 09:01"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129520">
<div class="phpcode"><code><span class="html">Note that the first replacement is applied to the whole string before the next replacement is applied.<br /><br />For example:<br /><br /><span class="default">&lt;?php<br />$subject </span><span class="keyword">= </span><span class="string">'a b a b a b'</span><span class="keyword">;<br /><br /></span><span class="default">preg_replace_callback_array</span><span class="keyword">(<br />    [<br />        </span><span class="string">'/a/' </span><span class="keyword">=&gt; function (</span><span class="default">$match</span><span class="keyword">) {<br />            echo </span><span class="string">'"a" found'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />        },<br />        </span><span class="string">'/b/' </span><span class="keyword">=&gt; function (</span><span class="default">$match</span><span class="keyword">) {<br />            echo </span><span class="string">'"b" found'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />        }<br />    ],<br />    </span><span class="default">$subject<br /></span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />will print<br /><br />"a" found<br />"a" found<br />"a" found<br />"b" found<br />"b" found<br />"b" found<br /><br />This means that you cannot use global variables to communicate information between the functions about what point in the string you have reached.</span></code></div>
  </div>
 </div>
  <div class="note" id="118563">  <div class="votes">
    <div id="Vu118563">
    <a href="/manual/vote-note.php?id=118563&amp;page=function.preg-replace-callback-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118563">
    <a href="/manual/vote-note.php?id=118563&amp;page=function.preg-replace-callback-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118563" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#118563" class="name">
  <strong class="user"><em>jfcherng at NOSPAM dot gmail dot com</em></strong></a><a class="genanchor" href="#118563"> &para;</a><div class="date" title="2015-12-29 06:25"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118563">
<div class="phpcode"><code><span class="html">Here's a possible alternative in older PHP.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// if (!function_exists('preg_replace_callback_array')) {<br /><br /></span><span class="keyword">function </span><span class="default">preg_replace_callback_array </span><span class="keyword">(array </span><span class="default">$patterns_and_callbacks</span><span class="keyword">, </span><span class="default">$subject</span><span class="keyword">, </span><span class="default">$limit</span><span class="keyword">=-</span><span class="default">1</span><span class="keyword">, &amp;</span><span class="default">$count</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">) {<br />    </span><span class="default">$count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    foreach (</span><span class="default">$patterns_and_callbacks </span><span class="keyword">as </span><span class="default">$pattern </span><span class="keyword">=&gt; &amp;</span><span class="default">$callback</span><span class="keyword">) {<br />        </span><span class="default">$subject </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">, </span><span class="default">$subject</span><span class="keyword">, </span><span class="default">$limit</span><span class="keyword">, </span><span class="default">$partial_count</span><span class="keyword">);<br />        </span><span class="default">$count </span><span class="keyword">+= </span><span class="default">$partial_count</span><span class="keyword">;<br />    }<br />    return </span><span class="default">preg_last_error</span><span class="keyword">() == </span><span class="default">PREG_NO_ERROR </span><span class="keyword">? </span><span class="default">$subject </span><span class="keyword">: </span><span class="default">NULL</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.preg-replace-callback-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.preg-replace-callback-array.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.pcre.php">PCRE Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.preg-filter.php" title="preg_&#8203;filter">preg_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-grep.php" title="preg_&#8203;grep">preg_&#8203;grep</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-last-error.php" title="preg_&#8203;last_&#8203;error">preg_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-last-error-msg.php" title="preg_&#8203;last_&#8203;error_&#8203;msg">preg_&#8203;last_&#8203;error_&#8203;msg</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-match.php" title="preg_&#8203;match">preg_&#8203;match</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-match-all.php" title="preg_&#8203;match_&#8203;all">preg_&#8203;match_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-quote.php" title="preg_&#8203;quote">preg_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-replace.php" title="preg_&#8203;replace">preg_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-replace-callback.php" title="preg_&#8203;replace_&#8203;callback">preg_&#8203;replace_&#8203;callback</a>
                        </li>
                                                <li class="current">
                            <a href="function.preg-replace-callback-array.php" title="preg_&#8203;replace_&#8203;callback_&#8203;array">preg_&#8203;replace_&#8203;callback_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-split.php" title="preg_&#8203;split">preg_&#8203;split</a>
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
