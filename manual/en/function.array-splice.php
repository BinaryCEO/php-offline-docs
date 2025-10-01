<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_splice - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-splice.php">
 <link rel="shorturl" href="https://www.php.net/array-splice">
 <link rel="alternate" href="https://www.php.net/array-splice" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-slice.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-sum.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-splice.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-splice.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-splice.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-splice.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-splice.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-splice.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-splice.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-splice.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-splice.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-splice.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-splice.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Remove a portion of the array and replace it with something else" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_splice - Manual" />
<meta name="twitter:description" content="Remove a portion of the array and replace it with something else" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_splice - Manual" />
<meta itemprop="description" content="Remove a portion of the array and replace it with something else" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Remove a portion of the array and replace it with something else" />

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
        <a href="function.array-sum.php">
          array_sum &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-slice.php">
          &laquo; array_slice        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.array.php'>Arrays</a></li>      <li><a href='ref.array.php'>Array Functions</a></li>      </ul>
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
            <option value='en/function.array-splice.php' selected="selected">English</option>
            <option value='de/function.array-splice.php'>German</option>
            <option value='es/function.array-splice.php'>Spanish</option>
            <option value='fr/function.array-splice.php'>French</option>
            <option value='it/function.array-splice.php'>Italian</option>
            <option value='ja/function.array-splice.php'>Japanese</option>
            <option value='pt_BR/function.array-splice.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-splice.php'>Russian</option>
            <option value='tr/function.array-splice.php'>Turkish</option>
            <option value='uk/function.array-splice.php'>Ukrainian</option>
            <option value='zh/function.array-splice.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-splice" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_splice</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_splice</span> &mdash; <span class="dc-title">Remove a portion of the array and replace it with something else</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.array-splice-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_splice</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$length</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$replacement</code><span class="initializer"> = []</span></span><br>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Removes the elements designated by <code class="parameter">offset</code> and
   <code class="parameter">length</code> from the <code class="parameter">array</code> array,
   and replaces them with the elements of the
   <code class="parameter">replacement</code> array, if supplied.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Numerical keys in <code class="parameter">array</code> are not preserved.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    If <code class="parameter">replacement</code> is not an array, it will be
    <a href="language.types.array.php#language.types.array.casting" class="link">typecast</a>
    to one (i.e. <code class="code">(array) $replacement</code>). This may result in unexpected
    behavior when using an object or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> <code class="parameter">replacement</code>.
   </span>
  </p></blockquote>
 </div>

  <div class="refsect1 parameters" id="refsect1-function.array-splice-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The input array.
      </p>
     </dd>
    
    
     <dt><code class="parameter">offset</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">offset</code> is positive then the start of the
       removed portion is at that offset from the beginning of the
       <code class="parameter">array</code> array.
      </p>
      <p class="para">
       If <code class="parameter">offset</code> is negative then the start of the
       removed portion is at that offset from the end of the
       <code class="parameter">array</code> array.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">length</code> is omitted, removes everything
       from <code class="parameter">offset</code> to the end of the array.
      </p>
      <p class="para">
       If <code class="parameter">length</code> is specified and is positive,
       then that many elements will be removed.
      </p>
      <p class="para">
       If <code class="parameter">length</code> is specified and is negative,
       then the end of the removed portion will be that many elements
       from the end of the array.
      </p>
      <p class="para">
       If <code class="parameter">length</code> is specified and is zero,
       no elements will be removed.
      </p>
      <div class="tip"><strong class="tip">Tip</strong>
       <p class="para">
        To remove everything from <code class="parameter">offset</code> to the end of
        the array when <code class="parameter">replacement</code> is also specified,
        use <code class="code">count($input)</code> for <code class="parameter">length</code>.
       </p>
      </div>
     </dd>
    
    
     <dt><code class="parameter">replacement</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">replacement</code> array is specified, then the
       removed elements are replaced with elements from this array.
      </p>
      <p class="para">
       If <code class="parameter">offset</code> and <code class="parameter">length</code>
       are such that nothing is removed, then the elements from the
       <code class="parameter">replacement</code> array are inserted in the place
       specified by the <code class="parameter">offset</code>.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        Keys in the <code class="parameter">replacement</code> array are not preserved.
        </p>
      </p></blockquote>
      <p class="para">
       If <code class="parameter">replacement</code> is just one element it is
       not necessary to put <code class="literal">array()</code> or square brackets
       around it, unless the element is an array itself, an object or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.array-splice-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array consisting of the extracted elements.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-splice-changelog">
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
       <code class="parameter">length</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.array-splice-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5276">
    <p><strong>Example #1 <span class="function"><strong>array_splice()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$input </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"red"</span><span style="color: #007700">, </span><span style="color: #DD0000">"green"</span><span style="color: #007700">, </span><span style="color: #DD0000">"blue"</span><span style="color: #007700">, </span><span style="color: #DD0000">"yellow"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$input </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"red"</span><span style="color: #007700">, </span><span style="color: #DD0000">"green"</span><span style="color: #007700">, </span><span style="color: #DD0000">"blue"</span><span style="color: #007700">, </span><span style="color: #DD0000">"yellow"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$input </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"red"</span><span style="color: #007700">, </span><span style="color: #DD0000">"green"</span><span style="color: #007700">, </span><span style="color: #DD0000">"blue"</span><span style="color: #007700">, </span><span style="color: #DD0000">"yellow"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">), </span><span style="color: #DD0000">"orange"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$input </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"red"</span><span style="color: #007700">, </span><span style="color: #DD0000">"green"</span><span style="color: #007700">, </span><span style="color: #DD0000">"blue"</span><span style="color: #007700">, </span><span style="color: #DD0000">"yellow"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, array(</span><span style="color: #DD0000">"black"</span><span style="color: #007700">, </span><span style="color: #DD0000">"maroon"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(2) {
  [0]=&gt;
  string(3) &quot;red&quot;
  [1]=&gt;
  string(5) &quot;green&quot;
}
array(2) {
  [0]=&gt;
  string(3) &quot;red&quot;
  [1]=&gt;
  string(6) &quot;yellow&quot;
}
array(2) {
  [0]=&gt;
  string(3) &quot;red&quot;
  [1]=&gt;
  string(6) &quot;orange&quot;
}
array(5) {
  [0]=&gt;
  string(3) &quot;red&quot;
  [1]=&gt;
  string(5) &quot;green&quot;
  [2]=&gt;
  string(4) &quot;blue&quot;
  [3]=&gt;
  string(5) &quot;black&quot;
  [4]=&gt;
  string(6) &quot;maroon&quot;
}</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5277">
    <p><strong>Example #2 Equivalent statements to various <span class="function"><strong>array_splice()</strong></span> examples</strong></p>
    <div class="example-contents"><p>
     The following statements are equivalent:
    </p></div>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// append two elements to $input<br /></span><span style="color: #0000BB">array_push</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">), </span><span style="color: #0000BB">0</span><span style="color: #007700">, array(</span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// remove the last element of $input<br /></span><span style="color: #0000BB">array_pop</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// remove the first element of $input<br /></span><span style="color: #0000BB">array_shift</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// insert an element at the start of $input<br /></span><span style="color: #0000BB">array_unshift</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, array(</span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// replace the value in $input at index $x<br /></span><span style="color: #0000BB">$input</span><span style="color: #007700">[</span><span style="color: #0000BB">$x</span><span style="color: #007700">] = </span><span style="color: #0000BB">$y</span><span style="color: #007700">; </span><span style="color: #FF8000">// for arrays where key equals offset<br /></span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.array-splice-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-merge.php" class="function" rel="rdfs-seeAlso">array_merge()</a> - Merge one or more arrays</span></li>
    <li><span class="function"><a href="function.array-slice.php" class="function" rel="rdfs-seeAlso">array_slice()</a> - Extract a slice of the array</span></li>
    <li><span class="function"><a href="function.unset.php" class="function" rel="rdfs-seeAlso">unset()</a> - unset a given variable</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-splice.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-splice%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-splice&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-splice.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">39 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106244">  <div class="votes">
    <div id="Vu106244">
    <a href="/manual/vote-note.php?id=106244&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106244">
    <a href="/manual/vote-note.php?id=106244&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106244" title="68% like this...">
    36
    </div>
  </div>
  <a href="#106244" class="name">
  <strong class="user"><em>mrsohailkhan at gmail dot com</em></strong></a><a class="genanchor" href="#106244"> &para;</a><div class="date" title="2011-10-21 12:34"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106244">
<div class="phpcode"><code><span class="html">array_splice, split an array into 2 arrays. The returned arrays is the 2nd argument actually and the used array e.g $input here contains the 1st argument of array, e.g
<br />
<br /><span class="default">&lt;?php
<br />$input </span><span class="keyword">= array(</span><span class="string">"red"</span><span class="keyword">, </span><span class="string">"green"</span><span class="keyword">, </span><span class="string">"blue"</span><span class="keyword">, </span><span class="string">"yellow"</span><span class="keyword">);
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)); </span><span class="comment">// Array ( [0] =&gt; yellow )  
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">); </span><span class="comment">//Array ( [0] =&gt; red [1] =&gt; green [2] =&gt; blue )
<br /></span><span class="default">?&gt;
<br /></span>
<br />if you want to replace any array value do simple like that,
<br />
<br />first search the array index you want to replace
<br />
<br /><span class="default">&lt;?php $index </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'green'</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">);</span><span class="comment">// index = 1 </span><span class="default">?&gt;
<br /></span>
<br />and then use it as according to the definition
<br />
<br /><span class="default">&lt;?php
<br />array_splice</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, array(</span><span class="string">'mygreeen'</span><span class="keyword">)); </span><span class="comment">//Array ( [0] =&gt; red [1] =&gt; mygreeen [2] =&gt; blue [3] =&gt; yellow ) 
<br /></span><span class="default">?&gt;
<br /></span>
<br />so here green is replaced by mygreen.
<br />
<br />here 1 in array_splice above represent the number of items to be replaced. so here start at index '1' and replaced only one item which is 'green'</span></code></div>
  </div>
 </div>
  <div class="note" id="119136">  <div class="votes">
    <div id="Vu119136">
    <a href="/manual/vote-note.php?id=119136&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119136">
    <a href="/manual/vote-note.php?id=119136&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119136" title="100% like this...">
    3
    </div>
  </div>
  <a href="#119136" class="name">
  <strong class="user"><em>vitospericolato at gmail dot com</em></strong></a><a class="genanchor" href="#119136"> &para;</a><div class="date" title="2016-04-08 08:54"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119136">
<div class="phpcode"><code><span class="html">To remove elements from an array, based on array values:<br /><br /><span class="default">&lt;?php<br />$i_to_remove</span><span class="keyword">=array();<br /><br />foreach(</span><span class="default">$array_to_prune </span><span class="keyword">as </span><span class="default">$i</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">){<br />  if(</span><span class="default">cond_to_delete</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) </span><span class="default">$i_to_remove</span><span class="keyword">[]=</span><span class="default">$i</span><span class="keyword">;<br />}<br />foreach(</span><span class="default">$i_to_remove </span><span class="keyword">as </span><span class="default">$j</span><span class="keyword">=&gt;</span><span class="default">$i</span><span class="keyword">)<br />  </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$array_to_prune</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">-</span><span class="default">$j</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118184">  <div class="votes">
    <div id="Vu118184">
    <a href="/manual/vote-note.php?id=118184&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118184">
    <a href="/manual/vote-note.php?id=118184&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118184" title="85% like this...">
    15
    </div>
  </div>
  <a href="#118184" class="name">
  <strong class="user"><em>StanE</em></strong></a><a class="genanchor" href="#118184"> &para;</a><div class="date" title="2015-10-22 08:50"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118184">
<div class="phpcode"><code><span class="html">array_splice() does not preserve numeric keys. The function posted by "weikard at gmx dot de" won't do that either because array_merge() does not preserve numeric keys either.<br /><br />Use following function instead:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">arrayInsert</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$position</span><span class="keyword">, </span><span class="default">$insertArray</span><span class="keyword">)<br />{<br />    </span><span class="default">$ret </span><span class="keyword">= [];<br /><br />    if (</span><span class="default">$position </span><span class="keyword">== </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) {<br />        </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">$array </span><span class="keyword">+ </span><span class="default">$insertArray</span><span class="keyword">;<br />    }<br />    else {<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            if (</span><span class="default">$position </span><span class="keyword">== </span><span class="default">$i</span><span class="keyword">++) {<br />                </span><span class="default">$ret </span><span class="keyword">+= </span><span class="default">$insertArray</span><span class="keyword">;<br />            }<br /><br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        }<br />    }<br /><br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example:<br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= [<br />    </span><span class="default">295 </span><span class="keyword">=&gt; </span><span class="string">"Hello"</span><span class="keyword">,<br />    </span><span class="default">58 </span><span class="keyword">=&gt; </span><span class="string">"world"</span><span class="keyword">,<br />];<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">arrayInsert</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, [</span><span class="default">123 </span><span class="keyword">=&gt; </span><span class="string">"little"</span><span class="keyword">]);<br /><br /></span><span class="comment">/*<br />Output:<br />Array<br />(<br />    [295] =&gt; Hello<br />    [123] =&gt; little<br />    [58] =&gt; world<br />)<br />*/<br /></span><span class="default">?&gt;<br /></span><br />It preserves numeric keys. Note that the function does not use a reference to the original array but returns a new array (I see absolutely no reason how the performance would be increased by using a reference when modifying an array through PHP script code).</span></code></div>
  </div>
 </div>
  <div class="note" id="92651">  <div class="votes">
    <div id="Vu92651">
    <a href="/manual/vote-note.php?id=92651&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92651">
    <a href="/manual/vote-note.php?id=92651&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92651" title="80% like this...">
    19
    </div>
  </div>
  <a href="#92651" class="name">
  <strong class="user"><em>daniele centamore</em></strong></a><a class="genanchor" href="#92651"> &para;</a><div class="date" title="2009-08-02 07:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92651">
<div class="phpcode"><code><span class="html">just useful functions to move an element using array_splice.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// info at danielecentamore dot com<br /><br />// $input  (Array) - the array containing the element<br />// $index (int) - the index of the element you need to move<br /><br /></span><span class="keyword">function </span><span class="default">moveUp</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">$index</span><span class="keyword">) {<br />      </span><span class="default">$new_array </span><span class="keyword">= </span><span class="default">$input</span><span class="keyword">;<br />      <br />       if((</span><span class="default">count</span><span class="keyword">(</span><span class="default">$new_array</span><span class="keyword">)&gt;</span><span class="default">$index</span><span class="keyword">) &amp;&amp; (</span><span class="default">$index</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">)){<br />                 </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$new_array</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]);<br />                 </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$new_array</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />             } <br /><br />       return </span><span class="default">$new_array</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">moveDown</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">$index</span><span class="keyword">) {<br />       </span><span class="default">$new_array </span><span class="keyword">= </span><span class="default">$input</span><span class="keyword">;<br />         <br />       if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$new_array</span><span class="keyword">)&gt;</span><span class="default">$index</span><span class="keyword">) {<br />                 </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$new_array</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]);<br />                 </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$new_array</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />             } <br />   <br />       return </span><span class="default">$new_array</span><span class="keyword">;<br /> }  <br /><br /></span><span class="default">$input </span><span class="keyword">= array(</span><span class="string">"red"</span><span class="keyword">, </span><span class="string">"green"</span><span class="keyword">, </span><span class="string">"blue"</span><span class="keyword">, </span><span class="string">"yellow"</span><span class="keyword">);<br /><br /></span><span class="default">$newinput </span><span class="keyword">= </span><span class="default">moveUp</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /></span><span class="comment">// $newinput is array("red", "blue", "green", "yellow")<br /><br /></span><span class="default">$input </span><span class="keyword">= </span><span class="default">moveDown</span><span class="keyword">(</span><span class="default">$newinput</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="comment">// $input is array("red", "green", "blue", "yellow")<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111204">  <div class="votes">
    <div id="Vu111204">
    <a href="/manual/vote-note.php?id=111204&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111204">
    <a href="/manual/vote-note.php?id=111204&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111204" title="74% like this...">
    24
    </div>
  </div>
  <a href="#111204" class="name">
  <strong class="user"><em>royanee at yahoo dot com</em></strong></a><a class="genanchor" href="#111204"> &para;</a><div class="date" title="2013-01-25 05:03"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111204">
<div class="phpcode"><code><span class="html">When trying to splice an associative array into another, array_splice is missing two key ingredients:<br />  - a string key for identifying the offset<br />  - the ability to preserve keys in the replacement array<br /><br />This is primarily useful when you want to replace an item in an array with another item, but want to maintain the ordering of the array without rebuilding the array one entry at a time.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_splice_assoc</span><span class="keyword">(&amp;</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$replacement</span><span class="keyword">) {<br />        </span><span class="default">$replacement </span><span class="keyword">= (array) </span><span class="default">$replacement</span><span class="keyword">;<br />        </span><span class="default">$key_indices </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">));<br />        if (isset(</span><span class="default">$input</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">]) &amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)) {<br />                </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$key_indices</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">];<br />        }<br />        if (isset(</span><span class="default">$input</span><span class="keyword">[</span><span class="default">$length</span><span class="keyword">]) &amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">)) {<br />                </span><span class="default">$length </span><span class="keyword">= </span><span class="default">$key_indices</span><span class="keyword">[</span><span class="default">$length</span><span class="keyword">] - </span><span class="default">$offset</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">$input </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">)<br />                + </span><span class="default">$replacement<br />                </span><span class="keyword">+ </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">$length</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$fruit </span><span class="keyword">= array(<br />        </span><span class="string">'orange' </span><span class="keyword">=&gt; </span><span class="string">'orange'</span><span class="keyword">,<br />        </span><span class="string">'lemon' </span><span class="keyword">=&gt; </span><span class="string">'yellow'</span><span class="keyword">,<br />        </span><span class="string">'lime' </span><span class="keyword">=&gt; </span><span class="string">'green'</span><span class="keyword">,<br />        </span><span class="string">'grape' </span><span class="keyword">=&gt; </span><span class="string">'purple'</span><span class="keyword">,<br />        </span><span class="string">'cherry' </span><span class="keyword">=&gt; </span><span class="string">'red'</span><span class="keyword">,<br />);<br /><br /></span><span class="comment">// Replace lemon and lime with apple<br /></span><span class="default">array_splice_assoc</span><span class="keyword">(</span><span class="default">$fruit</span><span class="keyword">, </span><span class="string">'lemon'</span><span class="keyword">, </span><span class="string">'grape'</span><span class="keyword">, array(</span><span class="string">'apple' </span><span class="keyword">=&gt; </span><span class="string">'red'</span><span class="keyword">));<br /><br /></span><span class="comment">// Replace cherry with strawberry<br /></span><span class="default">array_splice_assoc</span><span class="keyword">(</span><span class="default">$fruit</span><span class="keyword">, </span><span class="string">'cherry'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, array(</span><span class="string">'strawberry' </span><span class="keyword">=&gt; </span><span class="string">'red'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Note: I have not tested this with negative offsets and lengths.</span></code></div>
  </div>
 </div>
  <div class="note" id="99000">  <div class="votes">
    <div id="Vu99000">
    <a href="/manual/vote-note.php?id=99000&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99000">
    <a href="/manual/vote-note.php?id=99000&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99000" title="84% like this...">
    9
    </div>
  </div>
  <a href="#99000" class="name">
  <strong class="user"><em>charette dot s at gmail</em></strong></a><a class="genanchor" href="#99000"> &para;</a><div class="date" title="2010-07-21 08:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99000">
<div class="phpcode"><code><span class="html">If you want to append null values wrap them in an array:<br /><br /><span class="default">&lt;?php<br /><br />    $a </span><span class="keyword">= array(</span><span class="string">'Hey'</span><span class="keyword">, </span><span class="string">'hey'</span><span class="keyword">, </span><span class="string">'my'</span><span class="keyword">, </span><span class="string">'my'</span><span class="keyword">);<br />    </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">);<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span>Array<br />(<br />    [0] =&gt; Hey<br />    [1] =&gt; hey<br />    [2] =&gt; my<br />    [3] =&gt; my<br />)<br /><br /><span class="default">&lt;?php<br /><br />    $b </span><span class="keyword">= array(</span><span class="string">'Hey'</span><span class="keyword">, </span><span class="string">'hey'</span><span class="keyword">, </span><span class="string">'my'</span><span class="keyword">, </span><span class="string">'my'</span><span class="keyword">);<br />    </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, array(</span><span class="default">null</span><span class="keyword">));<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span>Array<br />(<br />    [0] =&gt; Hey<br />    [1] =&gt; <br />    [2] =&gt; hey<br />    [3] =&gt; my<br />    [4] =&gt; my<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="44204">  <div class="votes">
    <div id="Vu44204">
    <a href="/manual/vote-note.php?id=44204&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44204">
    <a href="/manual/vote-note.php?id=44204&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44204" title="84% like this...">
    9
    </div>
  </div>
  <a href="#44204" class="name">
  <strong class="user"><em>gideon at i6developments dot com</em></strong></a><a class="genanchor" href="#44204"> &para;</a><div class="date" title="2004-07-17 09:45"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44204">
<div class="phpcode"><code><span class="html">array_splice dynamically updates the total number of entries into the array. So for instance I had a case where I needed to insert a value into every 4th entry of the array from the back. The problem was when it added the first, because the total number was dynamically updated, it would only add after the 3rd then the 2nd and so one. The solution I found is to track the number of inserts which were done and account for them dynamically. <br /><br />Code: <br /><span class="default">&lt;?php<br />    $modarray </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$mili</span><span class="keyword">);<br />    </span><span class="default">$trig</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />        foreach(</span><span class="default">$modarray </span><span class="keyword">as </span><span class="default">$rubber </span><span class="keyword">=&gt; </span><span class="default">$glue</span><span class="keyword">) {<br />            if(</span><span class="default">$rubber</span><span class="keyword">!=</span><span class="string">"&lt;BR&gt;"</span><span class="keyword">) {<br />            </span><span class="default">$i</span><span class="keyword">++;<br />            </span><span class="default">$b</span><span class="keyword">++;<br />            if (</span><span class="default">$i</span><span class="keyword">==</span><span class="default">4</span><span class="keyword">) {<br />                </span><span class="default">$trig</span><span class="keyword">++;<br />                if(</span><span class="default">$trig</span><span class="keyword">&lt;=</span><span class="default">2</span><span class="keyword">) {<br />                </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$modarray</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="string">"&lt;BR&gt;"</span><span class="keyword">);<br />                }elseif(</span><span class="default">$trig</span><span class="keyword">&gt;=</span><span class="default">3</span><span class="keyword">){<br />                </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$modarray</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">+(</span><span class="default">$trig</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">),</span><span class="default">0</span><span class="keyword">,</span><span class="string">"&lt;BR&gt;"</span><span class="keyword">);<br />                } <br />                </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />                };<br />                };<br />        };    <br />    </span><span class="default">$fixarray </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$modarray</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56794">  <div class="votes">
    <div id="Vu56794">
    <a href="/manual/vote-note.php?id=56794&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56794">
    <a href="/manual/vote-note.php?id=56794&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56794" title="67% like this...">
    19
    </div>
  </div>
  <a href="#56794" class="name">
  <strong class="user"><em>weikard at gmx dot de</em></strong></a><a class="genanchor" href="#56794"> &para;</a><div class="date" title="2005-09-15 05:53"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56794">
<div class="phpcode"><code><span class="html">You cannot insert with array_splice an array with your own key. array_splice will always insert it with the key "0".
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// [DATA]
<br /></span><span class="default">$test_array </span><span class="keyword">= array (
<br />  </span><span class="default">row1 </span><span class="keyword">=&gt; array (</span><span class="default">col1 </span><span class="keyword">=&gt; </span><span class="string">'foobar!'</span><span class="keyword">, </span><span class="default">col2 </span><span class="keyword">=&gt; </span><span class="string">'foobar!'</span><span class="keyword">),
<br />  </span><span class="default">row2 </span><span class="keyword">=&gt; array (</span><span class="default">col1 </span><span class="keyword">=&gt; </span><span class="string">'foobar!'</span><span class="keyword">, </span><span class="default">col2 </span><span class="keyword">=&gt; </span><span class="string">'foobar!'</span><span class="keyword">),
<br />  </span><span class="default">row3 </span><span class="keyword">=&gt; array (</span><span class="default">col1 </span><span class="keyword">=&gt; </span><span class="string">'foobar!'</span><span class="keyword">, </span><span class="default">col2 </span><span class="keyword">=&gt; </span><span class="string">'foobar!'</span><span class="keyword">)
<br />);
<br />
<br /></span><span class="comment">// [ACTION]
<br /></span><span class="default">array_splice </span><span class="keyword">(</span><span class="default">$test_array</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, array (</span><span class="string">'rowX' </span><span class="keyword">=&gt; array (</span><span class="string">'colX' </span><span class="keyword">=&gt; </span><span class="string">'foobar2'</span><span class="keyword">)));
<br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">; </span><span class="default">print_r </span><span class="keyword">(</span><span class="default">$test_array</span><span class="keyword">); echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />[RESULT]
<br />
<br />Array (
<br />    [row1] =&gt; Array (
<br />            [col1] =&gt; foobar!
<br />            [col2] =&gt; foobar!
<br />        )
<br />
<br />    [row2] =&gt; Array (
<br />            [col1] =&gt; foobar!
<br />            [col2] =&gt; foobar!
<br />        )
<br />
<br />    [0] =&gt; Array (
<br />            [colX] =&gt; foobar2
<br />        )
<br />
<br />    [row3] =&gt; Array (
<br />            [col1] =&gt; foobar!
<br />            [col2] =&gt; foobar!
<br />        )
<br />)
<br />
<br />But you can use the following function:
<br />
<br />function array_insert (&amp;$array, $position, $insert_array) {
<br />  $first_array = array_splice ($array, 0, $position);
<br />  $array = array_merge ($first_array, $insert_array, $array);
<br />}
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// [ACTION]
<br />
<br /></span><span class="default">array_insert </span><span class="keyword">(</span><span class="default">$test_array</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, array (</span><span class="string">'rowX' </span><span class="keyword">=&gt; array (</span><span class="string">'colX' </span><span class="keyword">=&gt; </span><span class="string">'foobar2'</span><span class="keyword">)));
<br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">; </span><span class="default">print_r </span><span class="keyword">(</span><span class="default">$test_array</span><span class="keyword">); echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />[RESULT]
<br />
<br />Array (
<br />    [row1] =&gt; Array (
<br />            [col1] =&gt; foobar!
<br />            [col2] =&gt; foobar!
<br />        )
<br />
<br />    [row2] =&gt; Array (
<br />            [col1] =&gt; foobar!
<br />            [col2] =&gt; foobar!
<br />        )
<br />
<br />    [rowX] =&gt; Array (
<br />            [colX] =&gt; foobar2
<br />        )
<br />
<br />    [row3] =&gt; Array (
<br />            [col1] =&gt; foobar!
<br />            [col2] =&gt; foobar!
<br />        )
<br />)
<br />
<br />[NOTE]
<br />
<br />The position "0" will insert the array in the first position (like array_shift). If you try a position higher than the langth of the array, you add it to the array like the function array_push.</span></code></div>
  </div>
 </div>
  <div class="note" id="31234">  <div class="votes">
    <div id="Vu31234">
    <a href="/manual/vote-note.php?id=31234&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31234">
    <a href="/manual/vote-note.php?id=31234&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31234" title="80% like this...">
    6
    </div>
  </div>
  <a href="#31234" class="name">
  <strong class="user"><em>plintus at smtp dot ru</em></strong></a><a class="genanchor" href="#31234"> &para;</a><div class="date" title="2003-04-14 01:59"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31234">
<div class="phpcode"><code><span class="html">key-safe:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">array_kslice </span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$length </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {
<br /></span><span class="default">$k </span><span class="keyword">= </span><span class="default">array_slice </span><span class="keyword">(</span><span class="default">array_keys </span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">), </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);
<br /></span><span class="default">$v </span><span class="keyword">= </span><span class="default">array_slice </span><span class="keyword">(</span><span class="default">array_values </span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">), </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);
<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count </span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">++) </span><span class="default">$r</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]] = </span><span class="default">$v</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />return </span><span class="default">$r</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />smth like this. hope you like it more than versions above :)</span></code></div>
  </div>
 </div>
  <div class="note" id="119239">  <div class="votes">
    <div id="Vu119239">
    <a href="/manual/vote-note.php?id=119239&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119239">
    <a href="/manual/vote-note.php?id=119239&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119239" title="77% like this...">
    5
    </div>
  </div>
  <a href="#119239" class="name">
  <strong class="user"><em>gilberg_vrn</em></strong></a><a class="genanchor" href="#119239"> &para;</a><div class="date" title="2016-04-25 02:45"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119239">
<div class="phpcode"><code><span class="html">array_splice with preserve keys<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_splice_preserve_keys</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$from</span><span class="keyword">, </span><span class="default">$length </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$from</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$from </span><span class="keyword">+ </span><span class="default">$length</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    <br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example:<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= [<br />    </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">,<br />    </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">,<br />    </span><span class="default">26 </span><span class="keyword">=&gt; </span><span class="string">'z'<br /></span><span class="keyword">];<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_splice_preserve_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">), </span><span class="default">$array</span><span class="keyword">);<br /></span><span class="comment">/**<br /> * array(1) {<br /> *  [1]=&gt;<br /> *   string(1) "a"<br /> *  }<br /> * array(2) {<br /> *  [2]=&gt;<br /> *  string(1) "b"<br /> *  [26]=&gt;<br /> *  string(1) "z"<br /> * }<br /> */<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117507">  <div class="votes">
    <div id="Vu117507">
    <a href="/manual/vote-note.php?id=117507&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117507">
    <a href="/manual/vote-note.php?id=117507&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117507" title="77% like this...">
    5
    </div>
  </div>
  <a href="#117507" class="name">
  <strong class="user"><em>guillaume dot lacourt at gmail dot com</em></strong></a><a class="genanchor" href="#117507"> &para;</a><div class="date" title="2015-06-20 01:30"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117507">
<div class="phpcode"><code><span class="html">Using array_splice when you traverse array with internal pointer's function reset the array, eg:<br /><br /><span class="default">&lt;?php<br />end</span><span class="keyword">(</span><span class="default">$arrOfData</span><span class="keyword">);<br /></span><span class="default">$last </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$arrOfData</span><span class="keyword">);<br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$arrOfData</span><span class="keyword">);<br />while ((</span><span class="default">$data </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$arrOfData</span><span class="keyword">))) {<br />  if (</span><span class="default">$last </span><span class="keyword">=== </span><span class="default">key</span><span class="keyword">(</span><span class="default">$arrOfData</span><span class="keyword">)) {<br />    </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$arrOfData</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />   </span><span class="comment">// current($arrOfData) =&gt; first value of $arrOfData<br />  </span><span class="keyword">}<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55790">  <div class="votes">
    <div id="Vu55790">
    <a href="/manual/vote-note.php?id=55790&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55790">
    <a href="/manual/vote-note.php?id=55790&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55790" title="77% like this...">
    5
    </div>
  </div>
  <a href="#55790" class="name">
  <strong class="user"><em>csaba at alum dot mit dot edu</em></strong></a><a class="genanchor" href="#55790"> &para;</a><div class="date" title="2005-08-13 02:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55790">
<div class="phpcode"><code><span class="html">Appending arrays
<br />If you have an array $a2 whose values you would like to append to an array $a1 then four methods you could use are listed below in order of increasing time.  The last two methods took significantly more time than the first two.  The most surprising lesson is that using the &amp; incurs a time hit.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">foreach (</span><span class="default">$a2 </span><span class="keyword">as </span><span class="default">$elem</span><span class="keyword">) </span><span class="default">$a1</span><span class="keyword">[]=</span><span class="default">$elem</span><span class="keyword">;
<br />foreach (</span><span class="default">$a2 </span><span class="keyword">as &amp;</span><span class="default">$elem</span><span class="keyword">) </span><span class="default">$a1</span><span class="keyword">[]=</span><span class="default">$elem</span><span class="keyword">;
<br /></span><span class="default">array_splice </span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">, </span><span class="default">count</span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">$a2</span><span class="keyword">);
<br /></span><span class="default">$a1 </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">, </span><span class="default">$a2</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Csaba Gabor from Vienna</span></code></div>
  </div>
 </div>
  <div class="note" id="114027">  <div class="votes">
    <div id="Vu114027">
    <a href="/manual/vote-note.php?id=114027&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114027">
    <a href="/manual/vote-note.php?id=114027&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114027" title="75% like this...">
    4
    </div>
  </div>
  <a href="#114027" class="name">
  <strong class="user"><em>thom</em></strong></a><a class="genanchor" href="#114027"> &para;</a><div class="date" title="2014-01-02 02:31"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114027">
<div class="phpcode"><code><span class="html">Maybe it will help someone else: I was trying to strip off the last part of an array using this section, more or less as follows:<br /><br /><span class="default">&lt;?php array_splice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />Now it could occur in my code that <span class="default">&lt;?php $offset </span><span class="keyword">=== </span><span class="default">0 ?&gt;</span>, in which case the array is returned as-is and not, as you might expect, an empty array because everything is stripped off. Obviously it is not really useful anyway to "strip off everything", but I was reminded of that the hard way and this may spare someone some time, hopefully.</span></code></div>
  </div>
 </div>
  <div class="note" id="34911">  <div class="votes">
    <div id="Vu34911">
    <a href="/manual/vote-note.php?id=34911&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34911">
    <a href="/manual/vote-note.php?id=34911&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34911" title="75% like this...">
    4
    </div>
  </div>
  <a href="#34911" class="name">
  <strong class="user"><em>kbrown at horizon dot sk dot ca</em></strong></a><a class="genanchor" href="#34911"> &para;</a><div class="date" title="2003-08-11 12:40"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34911">
<div class="phpcode"><code><span class="html">[ Editor's Note: If you're not concerned with the indexes being contiguously numbered (such as for an associative array) then unset($ar[$ind]); will accomplish the same as the code below without requiring splice/splice/merge.  If contiguous numbering IS a concern (such as for indexed arrays), you can still save time by using: unset($ar[$ind]); $ar = array_values($ar); ]
<br />
<br />Removing elements from arrays
<br />
<br />This works better - much quicker
<br />
<br /><span class="default">&lt;?php
<br />$ar </span><span class="keyword">= array(</span><span class="string">"einstein"</span><span class="keyword">, </span><span class="string">"bert"</span><span class="keyword">, </span><span class="string">"colin"</span><span class="keyword">, </span><span class="string">"descartes"</span><span class="keyword">, </span><span class="string">"renoir"</span><span class="keyword">);
<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$ar</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$ind</span><span class="keyword">);
<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$ar</span><span class="keyword">, </span><span class="default">$ind </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">$ar </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97097">  <div class="votes">
    <div id="Vu97097">
    <a href="/manual/vote-note.php?id=97097&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97097">
    <a href="/manual/vote-note.php?id=97097&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97097" title="66% like this...">
    6
    </div>
  </div>
  <a href="#97097" class="name">
  <strong class="user"><em>news_yodpeirs at thoftware dot de</em></strong></a><a class="genanchor" href="#97097"> &para;</a><div class="date" title="2010-04-01 01:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97097">
<div class="phpcode"><code><span class="html">Splicing with NULL as replacement may result in unexpected behavior too. Typecasting NULL into an array results in an empty array (as "(array)NULL" equals "array()"). That means, instead of creating an element with value NULL just no new element ist created (just as if there was no replacement specified).<br /><br />If you want the splicing to create a new element with value NULL you have to use "array(NULL)" instead of NULL.<br /><br />You should expect this if you read the explanation carefully, but just as objects are considered as a special case for replacement, NULL should be too.<br /><br />The explanation of replacement better should read: "If replacement is just one element it is not necessary to put array() around it, unless the element is an array itself, an object or NULL."<br /><br />And the note better should be: "If replacement is not an array, it will be typecast to one (i.e. (array) $parameter). This may result in unexpected behavior when using an object or NULL replacement."<br /><br />jmtc</span></code></div>
  </div>
 </div>
  <div class="note" id="19084">  <div class="votes">
    <div id="Vu19084">
    <a href="/manual/vote-note.php?id=19084&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19084">
    <a href="/manual/vote-note.php?id=19084&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19084" title="66% like this...">
    3
    </div>
  </div>
  <a href="#19084" class="name">
  <strong class="user"><em>jrhardytwothousandtwo at yahoo dot com</em></strong></a><a class="genanchor" href="#19084"> &para;</a><div class="date" title="2002-02-14 11:54"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19084">
<div class="phpcode"><code><span class="html">A reference is made to INSERT'ing into an array here with array_splice, however its not explained very well.  I hope this example will help others find what took me days to research.
<br />
<br /><span class="default">&lt;?php
<br />$original_array </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">);
<br /></span><span class="default">$insert_into_key_position </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;
<br /></span><span class="default">$item_to_insert </span><span class="keyword">= </span><span class="string">"blue"</span><span class="keyword">;
<br />
<br /></span><span class="default">$returned </span><span class="keyword">= </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$original_array</span><span class="keyword">, </span><span class="default">$insert_into_key_position</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$item_to_insert</span><span class="keyword">);
<br />
<br /></span><span class="comment">// $original_array will now show:
<br />
<br />// 1,2,3,blue,4,5
<br /></span><span class="default">?&gt;
<br /></span>
<br />Remember that you are telling the array to insert the element into the KEY position.  Thus the elements start with key 0 and so on 0=&gt;1, 1=&gt;2, 2=&gt;3, 3=&gt;blue, 4=&gt;4, 5=&gt;5.  And walla, you've inserted.  I can't say if this is of any value for named keys, or multidimensional arrays.  However it does work for single dimensional arrays.
<br />
<br />$returned should be an empty array as nothing was returned.  This would have substance if you were doing a replace instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="80909">  <div class="votes">
    <div id="Vu80909">
    <a href="/manual/vote-note.php?id=80909&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80909">
    <a href="/manual/vote-note.php?id=80909&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80909" title="66% like this...">
    1
    </div>
  </div>
  <a href="#80909" class="name">
  <strong class="user"><em>pauljamescampbell at gmail dot com</em></strong></a><a class="genanchor" href="#80909"> &para;</a><div class="date" title="2008-02-06 06:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80909">
<div class="phpcode"><code><span class="html">Here's my own take on an array slice method that preserves keys from an associative array.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * Array slice function that preserves associative keys
<br /> * 
<br /> * @function associativeArraySlice
<br /> *
<br /> * @param  Array  $array  Array to slice
<br /> * @param  Integer  $start    
<br /> * @param  Integer  $end
<br /> * 
<br /> * @return  Array
<br /> */
<br /></span><span class="keyword">function </span><span class="default">associativeArraySlice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">) {
<br />    </span><span class="comment">// Method param restrictions
<br />    </span><span class="keyword">if(</span><span class="default">$start </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) </span><span class="default">$start </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    if(</span><span class="default">$end </span><span class="keyword">&gt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) </span><span class="default">$end </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br />
<br />    </span><span class="comment">// Process vars
<br />    </span><span class="default">$new </span><span class="keyword">= Array();
<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />
<br />    </span><span class="comment">// Loop
<br />    </span><span class="keyword">foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {
<br />        if(</span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">$start </span><span class="keyword">&amp;&amp; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$end</span><span class="keyword">) {
<br />            </span><span class="default">$new</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">$i</span><span class="keyword">++;
<br />    }
<br />    return(</span><span class="default">$new</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55004">  <div class="votes">
    <div id="Vu55004">
    <a href="/manual/vote-note.php?id=55004&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55004">
    <a href="/manual/vote-note.php?id=55004&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55004" title="66% like this...">
    1
    </div>
  </div>
  <a href="#55004" class="name">
  <strong class="user"><em>randomdestination at gmail dot com</em></strong></a><a class="genanchor" href="#55004"> &para;</a><div class="date" title="2005-07-22 01:52"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55004">
<div class="phpcode"><code><span class="html">To split an associative array based on it's keys, use this function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function &amp;</span><span class="default">array_split</span><span class="keyword">(&amp;</span><span class="default">$in</span><span class="keyword">) {<br />    </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />    </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">);<br />    <br />    </span><span class="default">$out </span><span class="keyword">= array();<br />    foreach(</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">) {<br />        if(isset(</span><span class="default">$in</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]))<br />            </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$in</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />        else<br />            </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">null</span><span class="keyword">;<br />        unset(</span><span class="default">$in</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    }<br />    <br />    return </span><span class="default">$out</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example: <br /><span class="default">&lt;?php<br />$testin </span><span class="keyword">= array(</span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">'c' </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">, </span><span class="string">'d' </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$testout </span><span class="keyword">=&amp; </span><span class="default">array_split</span><span class="keyword">(</span><span class="default">$testin</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="string">'c'</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$testin</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$testout</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Will print:<br /><br />Array<br />(<br />    [d] =&gt; 4<br />)<br />Array<br />(<br />    [a] =&gt; 1<br />    [b] =&gt; 2<br />    [c] =&gt; 3<br />)<br /><br />Hope this helps anyone!</span></code></div>
  </div>
 </div>
  <div class="note" id="72558">  <div class="votes">
    <div id="Vu72558">
    <a href="/manual/vote-note.php?id=72558&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72558">
    <a href="/manual/vote-note.php?id=72558&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72558" title="61% like this...">
    3
    </div>
  </div>
  <a href="#72558" class="name">
  <strong class="user"><em>ahigerd at stratitec dot com</em></strong></a><a class="genanchor" href="#72558"> &para;</a><div class="date" title="2007-01-24 06:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72558">
<div class="phpcode"><code><span class="html">A comment on array_merge mentioned that array_splice is faster than array_merge for inserting values. This may be the case, but if your goal is instead to reindex a numeric array, array_values() is the function of choice. Performing the following functions in a 100,000-iteration loop gave me the following times: ($b is a 3-element array)<br /><br />array_splice($b, count($b)) =&gt; 0.410652<br />$b = array_splice($b, 0) =&gt; 0.272513<br />array_splice($b, 3) =&gt; 0.26529<br />$b = array_merge($b) =&gt; 0.233582<br />$b = array_values($b) =&gt; 0.151298</span></code></div>
  </div>
 </div>
  <div class="note" id="73740">  <div class="votes">
    <div id="Vu73740">
    <a href="/manual/vote-note.php?id=73740&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73740">
    <a href="/manual/vote-note.php?id=73740&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73740" title="62% like this...">
    2
    </div>
  </div>
  <a href="#73740" class="name">
  <strong class="user"><em>mip at ycn dot com</em></strong></a><a class="genanchor" href="#73740"> &para;</a><div class="date" title="2007-03-08 05:37"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73740">
<div class="phpcode"><code><span class="html">Ever wounder what array_splice is doing to your references, then try this little script and see the output.<br /><br /><span class="default">&lt;?php<br /><br />$a </span><span class="keyword">= </span><span class="string">"a"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="string">"b"</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="string">"c"</span><span class="keyword">;<br /></span><span class="default">$d </span><span class="keyword">= </span><span class="string">"d"</span><span class="keyword">;<br /></span><span class="default">$arr </span><span class="keyword">= array();<br /></span><span class="default">$arr</span><span class="keyword">[] =&amp; </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$arr</span><span class="keyword">[] =&amp; </span><span class="default">$b</span><span class="keyword">;<br /></span><span class="default">$arr</span><span class="keyword">[] =&amp; </span><span class="default">$c</span><span class="keyword">;<br /></span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,array(</span><span class="default">$d</span><span class="keyword">));<br /></span><span class="default">$sec_arr </span><span class="keyword">= array();<br /></span><span class="default">$sec_arr</span><span class="keyword">[] =&amp; </span><span class="default">$d</span><span class="keyword">;<br /></span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$sec_arr</span><span class="keyword">);<br /><br /></span><span class="default">$arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"test"</span><span class="keyword">; </span><span class="comment">// should be $a<br /></span><span class="default">$arr</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="string">"test2"</span><span class="keyword">; </span><span class="comment">// should be $b<br /></span><span class="default">$arr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="string">"this be d?"</span><span class="keyword">; </span><span class="comment">// should be $d<br /></span><span class="default">$arr</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="string">"or this be d?"</span><span class="keyword">; </span><span class="comment">// should be $d<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The output will be (PHP 4.3.3):<br /><br />array(5) {<br />  [0]=&gt;<br />  &amp;string(4) "test"<br />  [1]=&gt;<br />  &amp;string(10) "this be d?"<br />  [2]=&gt;<br />  string(13) "or this be d?"<br />  [3]=&gt;<br />  &amp;string(5) "test2"<br />  [4]=&gt;<br />  &amp;string(1) "c"<br />}<br />string(4) "test"<br />string(5) "test2"<br />string(10) "this be d?"<br /><br />So array_splice is reference safe, but you have to be careful about the generation of the replacement array.<br /><br />have fun, cheers!</span></code></div>
  </div>
 </div>
  <div class="note" id="61793">  <div class="votes">
    <div id="Vu61793">
    <a href="/manual/vote-note.php?id=61793&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61793">
    <a href="/manual/vote-note.php?id=61793&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61793" title="62% like this...">
    2
    </div>
  </div>
  <a href="#61793" class="name">
  <strong class="user"><em>Paul</em></strong></a><a class="genanchor" href="#61793"> &para;</a><div class="date" title="2006-02-11 10:06"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61793">
<div class="phpcode"><code><span class="html">In PHP 4.3.10, at least, it seems that elements that are inserted as part of the replacement array are inserted BY REFERENCE (that is, as though with the =&amp; rather than = assignment operation). So if your replacement array contains elements that references to variables that you can also access via other variable name, then this will be true of the elements in the final array too.<br /><br />In particular, this means that it is safe to use array_splice() on arrays of objects, as you won't be creating copies of the objects (as it is so easy to do in PHP 4).</span></code></div>
  </div>
 </div>
  <div class="note" id="126020">  <div class="votes">
    <div id="Vu126020">
    <a href="/manual/vote-note.php?id=126020&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126020">
    <a href="/manual/vote-note.php?id=126020&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126020" title="60% like this...">
    1
    </div>
  </div>
  <a href="#126020" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126020"> &para;</a><div class="date" title="2021-04-17 10:03"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126020">
<div class="phpcode"><code><span class="html">the following:<br />        <br />        $input = [[5=&gt;"richard=red"], [15=&gt;"york=yellow"], [25=&gt;"gave=green"], [30=&gt;"battle=blue"], [35=&gt;"in=indigo"], [40=&gt;"vain=violet"]];<br />        array_splice($input, 2, 0, [[10=&gt;"of=orange"]]);<br />        var_dump($input);<br /><br />gives this:<br /><br />array (size=7)<br />  0 =&gt; <br />    array (size=1)<br />      5 =&gt; string 'richard=red' (length=11)<br />  1 =&gt; <br />    array (size=1)<br />      15 =&gt; string 'york=yellow' (length=11)<br />  2 =&gt; <br />    array (size=1)<br />      10 =&gt; string 'of=orange' (length=9)<br />  3 =&gt; <br />    array (size=1)<br />      25 =&gt; string 'gave=green' (length=10)<br />  4 =&gt; <br />    array (size=1)<br />      30 =&gt; string 'battle=blue' (length=11)<br />  5 =&gt; <br />    array (size=1)<br />      35 =&gt; string 'in=indigo' (length=9)<br />  6 =&gt; <br />    array (size=1)<br />      40 =&gt; string 'vain=violet' (length=11)</span></code></div>
  </div>
 </div>
  <div class="note" id="88896">  <div class="votes">
    <div id="Vu88896">
    <a href="/manual/vote-note.php?id=88896&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88896">
    <a href="/manual/vote-note.php?id=88896&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88896" title="60% like this...">
    1
    </div>
  </div>
  <a href="#88896" class="name">
  <strong class="user"><em>dead dot screamer at seznam dot cz</em></strong></a><a class="genanchor" href="#88896"> &para;</a><div class="date" title="2009-02-12 05:28"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88896">
<div class="phpcode"><code><span class="html">I need <span class="default">&lt;?php array_Splice</span><span class="keyword">()</span><span class="default">?&gt;</span> function, that use array keys instead of order (offset and length) because of associated arrays, and this is result:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> *    first variation<br /> *<br /> *    $input is input array<br /> *    $start is index of slice begin<br /> *    $end is index of slice end, if this is null, $replacement will be inserted (in the same way as original array_Slice())<br /> *indexes of $replacement are preserved in both examples<br /> */<br /></span><span class="keyword">function </span><span class="default">array_KSplice1</span><span class="keyword">(&amp;</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">, </span><span class="default">$replacement</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">)<br />{<br />    </span><span class="default">$keys</span><span class="keyword">=</span><span class="default">array_Keys</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />    </span><span class="default">$values</span><span class="keyword">=</span><span class="default">array_Values</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />    if(</span><span class="default">$replacement</span><span class="keyword">!==</span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">$replacement</span><span class="keyword">=(array)</span><span class="default">$replacement</span><span class="keyword">;<br />        </span><span class="default">$rKeys</span><span class="keyword">=</span><span class="default">array_Keys</span><span class="keyword">(</span><span class="default">$replacement</span><span class="keyword">);<br />        </span><span class="default">$rValues</span><span class="keyword">=</span><span class="default">array_Values</span><span class="keyword">(</span><span class="default">$replacement</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$start</span><span class="keyword">=</span><span class="default">array_Search</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$keys</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br />    if(</span><span class="default">$start</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">)<br />        return </span><span class="default">false</span><span class="keyword">;<br />    if(</span><span class="default">$end</span><span class="keyword">!==</span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">$end</span><span class="keyword">=</span><span class="default">array_Search</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">,</span><span class="default">$keys</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br />        </span><span class="comment">// if $end not found, exit<br />        </span><span class="keyword">if(</span><span class="default">$end</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">)<br />            return </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="comment">// if $end is before $start, exit<br />        </span><span class="keyword">if(</span><span class="default">$end</span><span class="keyword">&lt;</span><span class="default">$start</span><span class="keyword">)<br />            return </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="comment">// index to length<br />        </span><span class="default">$end</span><span class="keyword">-=</span><span class="default">$start</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// optional arguments<br />    </span><span class="keyword">if(</span><span class="default">$replacement</span><span class="keyword">!==</span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">array_Splice</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$end</span><span class="keyword">,</span><span class="default">$rKeys</span><span class="keyword">);<br />        </span><span class="default">array_Splice</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$end</span><span class="keyword">,</span><span class="default">$rValues</span><span class="keyword">);<br />    }<br />    else<br />    {<br />        </span><span class="default">array_Splice</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$end</span><span class="keyword">);<br />        </span><span class="default">array_Splice</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$end</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$input</span><span class="keyword">=</span><span class="default">array_Combine</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">,</span><span class="default">$values</span><span class="keyword">);<br /><br />    return </span><span class="default">$input</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br /> *    second variation<br /> *<br /> *    $input is input array<br /> *    $start is index of slice begin<br /> *    $length is length of slice, what will be replaced, if is zero, $replacement will be inserted (in the same way as original array_Slice())<br /> */<br /></span><span class="keyword">function </span><span class="default">array_KSplice2</span><span class="keyword">(&amp;</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$replacement</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">)<br />{<br />    </span><span class="default">$keys</span><span class="keyword">=</span><span class="default">array_Keys</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />    </span><span class="default">$values</span><span class="keyword">=</span><span class="default">array_Values</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />    if(</span><span class="default">$replacement</span><span class="keyword">!==</span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">$replacement</span><span class="keyword">=(array)</span><span class="default">$replacement</span><span class="keyword">;<br />        </span><span class="default">$rKeys</span><span class="keyword">=</span><span class="default">array_Keys</span><span class="keyword">(</span><span class="default">$replacement</span><span class="keyword">);<br />        </span><span class="default">$rValues</span><span class="keyword">=</span><span class="default">array_Values</span><span class="keyword">(</span><span class="default">$replacement</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$start</span><span class="keyword">=</span><span class="default">array_Search</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$keys</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br />    if(</span><span class="default">$start</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">)<br />        return </span><span class="default">false</span><span class="keyword">;<br /><br />    </span><span class="comment">// optional arguments<br />    </span><span class="keyword">if(</span><span class="default">$replacement</span><span class="keyword">!==</span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">array_Splice</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">,</span><span class="default">$rKeys</span><span class="keyword">);<br />        </span><span class="default">array_Splice</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">,</span><span class="default">$rValues</span><span class="keyword">);<br />    }<br />    else<br />    {<br />        </span><span class="default">array_Splice</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">);<br />        </span><span class="default">array_Splice</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$input</span><span class="keyword">=</span><span class="default">array_Combine</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">,</span><span class="default">$values</span><span class="keyword">);<br /><br />    return </span><span class="default">$input</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$array</span><span class="keyword">=</span><span class="default">range</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br /></span><span class="default">var_Dump</span><span class="keyword">(</span><span class="default">array_KSplice1</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,array(</span><span class="default">100</span><span class="keyword">=&gt;</span><span class="default">101</span><span class="keyword">,</span><span class="default">102</span><span class="keyword">,</span><span class="default">103</span><span class="keyword">,</span><span class="default">104</span><span class="keyword">)));<br /><br /></span><span class="default">$array</span><span class="keyword">=</span><span class="default">range</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br /></span><span class="default">var_Dump</span><span class="keyword">(</span><span class="default">array_KSplice2</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,array(</span><span class="default">100</span><span class="keyword">=&gt;</span><span class="default">101</span><span class="keyword">,</span><span class="default">102</span><span class="keyword">,</span><span class="default">103</span><span class="keyword">,</span><span class="default">104</span><span class="keyword">)));<br /><br /></span><span class="default">?&gt;<br /></span><br />Both examples output:<br />array(11) {<br />  [0]=&gt;<br />  int(1)<br />  [1]=&gt;<br />  int(2)<br />  [2]=&gt;<br />  int(3)<br />  [100]=&gt;<br />  int(101)<br />  [101]=&gt;<br />  int(102)<br />  [102]=&gt;<br />  int(103)<br />  [103]=&gt;<br />  int(104)<br />  [6]=&gt;<br />  int(7)<br />  [7]=&gt;<br />  int(8)<br />  [8]=&gt;<br />  int(9)<br />  [9]=&gt;<br />  int(10)<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="22263">  <div class="votes">
    <div id="Vu22263">
    <a href="/manual/vote-note.php?id=22263&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22263">
    <a href="/manual/vote-note.php?id=22263&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22263" title="57% like this...">
    1
    </div>
  </div>
  <a href="#22263" class="name">
  <strong class="user"><em>paule at cs dot tamu dot edu</em></strong></a><a class="genanchor" href="#22263"> &para;</a><div class="date" title="2002-06-12 09:59"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22263">
<div class="phpcode"><code><span class="html">to kokos@lac.lviv.ua:<br /><br />Good point about the code not doing what you expected.<br /><br />The failure to check for the insert case like you pointed out is not a bug, however. I didn't add code to handle that because the key of such an added index is more or less undefined in an unordered associative array. Put another way, if your array is associative and not auto-indexed, you most likely care enough about your keys to want to set them explicitly.</span></code></div>
  </div>
 </div>
  <div class="note" id="104983">  <div class="votes">
    <div id="Vu104983">
    <a href="/manual/vote-note.php?id=104983&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104983">
    <a href="/manual/vote-note.php?id=104983&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104983" title="54% like this...">
    1
    </div>
  </div>
  <a href="#104983" class="name">
  <strong class="user"><em>news_yodpeirs at thoftware dot de</em></strong></a><a class="genanchor" href="#104983"> &para;</a><div class="date" title="2011-07-20 08:20"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104983">
<div class="phpcode"><code><span class="html">Sometimes you may want to insert one array into another and just work on with the resulting array. array_splice() doesn't support this, as the resulting array isn't the returned value but the first argument, which is changed by reference.
<br />
<br />Therefore you may use the following function, which inserts array $ins in array $src at position $pos. $rep can be used if $ins shouldn't be just inserted, but should replace some existing elements (the number of elements to be replaced is given in $rep).
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">array_insert</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">,</span><span class="default">$ins</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">,</span><span class="default">$rep</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">) {
<br />  </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">,</span><span class="default">$rep</span><span class="keyword">,</span><span class="default">$ins</span><span class="keyword">);
<br />  return(</span><span class="default">$src</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="22455">  <div class="votes">
    <div id="Vu22455">
    <a href="/manual/vote-note.php?id=22455&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22455">
    <a href="/manual/vote-note.php?id=22455&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22455" title="55% like this...">
    1
    </div>
  </div>
  <a href="#22455" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#22455"> &para;</a><div class="date" title="2002-06-18 07:14"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22455">
<div class="phpcode"><code><span class="html">Please note that array_splice() 's second argument is an OFFSET and not an INDEX.
<br />
<br />Lets say you want to 
<br />$array_of_items = array ('nothing','myitem','hisitem','heritem');
<br />$sid = array_search('myitem',$array_of_items);
<br />echo $sid; /* prints out 1, since index element 1 is "myitem" */
<br />
<br />Now, lets say we want to remove that "myitem" from the array:
<br />
<br /><span class="default">&lt;?php
<br />$array_of_items </span><span class="keyword">= </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$array_of_items</span><span class="keyword">,(</span><span class="default">1</span><span class="keyword">+</span><span class="default">$sid</span><span class="keyword">),</span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Notice how you have to add a one to the $sid variable?  That is because offset item 1 is "nothing" and since $sid is currently 1 (the index of "myitem"), we add 1 more to it to find out
<br /> its OFFSET.
<br />
<br />DO NOT DO THIS:
<br /> $array_of_items = array_splice($array_of_items,$sid,1);</span></code></div>
  </div>
 </div>
  <div class="note" id="130176">  <div class="votes">
    <div id="Vu130176">
    <a href="/manual/vote-note.php?id=130176&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130176">
    <a href="/manual/vote-note.php?id=130176&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130176" title="no votes...">
    0
    </div>
  </div>
  <a href="#130176" class="name">
  <strong class="user"><em>joe at theuerkauf dot dev</em></strong></a><a class="genanchor" href="#130176"> &para;</a><div class="date" title="2025-03-19 09:10"><strong>6 months ago</strong></div>
  <div class="text" id="Hcom130176">
<div class="phpcode"><code><span class="html">Example 2 states the statement pairs are equivalent.<br /><br />This is true only of the modified array. The *returns* from these pairs will never be equivalent.<br /><br />The return of array_splice() is *always* an array of extracted values, even when nothing (empty array) or only 1 value is extracted.<br /><br /><span class="default">&lt;?php<br />$arr </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, [</span><span class="default">4</span><span class="keyword">]];<br /><br /></span><span class="default">$pop </span><span class="keyword">= </span><span class="default">$arr</span><span class="keyword">;<br /></span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$pop</span><span class="keyword">): </span><span class="comment">// [4]<br /></span><span class="default">$splice </span><span class="keyword">= </span><span class="default">$arr</span><span class="keyword">;<br /></span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$splice</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">); </span><span class="comment">// [ [4] ]<br /><br /></span><span class="default">$unshift </span><span class="keyword">= </span><span class="default">$arr</span><span class="keyword">;<br /></span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$unshift</span><span class="keyword">, </span><span class="string">'foo'</span><span class="keyword">): </span><span class="comment">// 5<br /></span><span class="default">$splice </span><span class="keyword">= </span><span class="default">$arr</span><span class="keyword">;<br /></span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$splice</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">'foo'</span><span class="keyword">); </span><span class="comment">// [ ]<br /></span><span class="default">?&gt;<br /></span>etc.</span></code></div>
  </div>
 </div>
  <div class="note" id="121686">  <div class="votes">
    <div id="Vu121686">
    <a href="/manual/vote-note.php?id=121686&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121686">
    <a href="/manual/vote-note.php?id=121686&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121686" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121686" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#121686"> &para;</a><div class="date" title="2017-09-26 12:31"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121686">
<div class="phpcode"><code><span class="html">For an analogous function that works on strings rather than arrays, see substr_replace.</span></code></div>
  </div>
 </div>
  <div class="note" id="115351">  <div class="votes">
    <div id="Vu115351">
    <a href="/manual/vote-note.php?id=115351&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115351">
    <a href="/manual/vote-note.php?id=115351&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115351" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115351" class="name">
  <strong class="user"><em>antrik</em></strong></a><a class="genanchor" href="#115351"> &para;</a><div class="date" title="2014-07-09 07:20"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115351">
<div class="phpcode"><code><span class="html">Prompted by dire need, and inspired by some of the existing notes, I came up with this:<br /><br />/* Like array_splice(), but preserves the key(s) of the replacement array. */<br />function array_splice_assoc(&amp;$input, $offset, $length = 0, $replacement = array()) {<br />  $tail = array_splice($input, $offset);<br />  $extracted = array_splice($tail, 0, $length);<br />  $input += $replacement + $tail;<br />  return $extracted;<br />};<br /><br />Apart from preserving the keys, it behaves just like the regular array_splice() for all cases I could think of.<br /><br />So for example the regular array_splice()<br /><br />$input = array('a' =&gt; 1, 'b' =&gt; 2, 'c' =&gt; 3, 'd' =&gt; 4, 'e' =&gt; 5, 'f' =&gt;6);<br />print_r(array_splice($input, -4, 3, array('foo1' =&gt; 'bar', 'foo2' =&gt; 'baz'))); <br />print_r($input); <br /><br />will give:<br /><br />Array<br />(<br />    [c] =&gt; 3<br />    [d] =&gt; 4<br />    [e] =&gt; 5<br />)<br />Array<br />(<br />    [a] =&gt; 1<br />    [b] =&gt; 2<br />    [0] =&gt; bar<br />    [1] =&gt; baz<br />    [f] =&gt; 6<br />)<br /><br />But with array_splice_assoc()<br /><br />$input = array('a' =&gt; 1, 'b' =&gt; 2, 'c' =&gt; 3, 'd' =&gt; 4, 'e' =&gt; 5, 'f' =&gt;6);<br />print_r(array_splice_assoc($input, -4, 3, array('foo1' =&gt; 'bar', 'foo2' =&gt; 'baz')));<br />print_r($input);<br /><br />we get:<br /><br />Array<br />(<br />    [c] =&gt; 3<br />    [d] =&gt; 4<br />    [e] =&gt; 5<br />)<br />Array<br />(<br />    [a] =&gt; 1<br />    [b] =&gt; 2<br />    [foo1] =&gt; bar<br />    [foo2] =&gt; baz<br />    [f] =&gt; 6<br />)<br /><br />A typical use case would be replacing an element identified by a particular key, which we could achieve with:<br /><br />$input = array('a' =&gt; 1, 'b' =&gt; 2, 'c' =&gt; 3, 'd' =&gt; 4, 'e' =&gt; 5, 'f' =&gt;6);<br />array_splice_assoc($input, array_search('d', array_keys($input)), 1, array('foo' =&gt; 'bar'));<br />print_r($input);<br /><br />giving us:<br /><br />Array<br />(<br />    [a] =&gt; 1<br />    [b] =&gt; 2<br />    [c] =&gt; 3<br />    [foo] =&gt; bar<br />    [e] =&gt; 5<br />    [f] =&gt; 6<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="69329">  <div class="votes">
    <div id="Vu69329">
    <a href="/manual/vote-note.php?id=69329&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69329">
    <a href="/manual/vote-note.php?id=69329&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69329" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69329" class="name">
  <strong class="user"><em>bdjumakov at gmail dot com</em></strong></a><a class="genanchor" href="#69329"> &para;</a><div class="date" title="2006-08-31 12:11"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69329">
<div class="phpcode"><code><span class="html">Someone might find this function usefull. It just takes a given element from the array and moves it before given element into the same array.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_move</span><span class="keyword">(</span><span class="default">$which</span><span class="keyword">, </span><span class="default">$where</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">)<br />{<br />    </span><span class="default">$tmp  </span><span class="keyword">= </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$which</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$where</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tmp</span><span class="keyword">);<br />    return </span><span class="default">$array</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="22112">  <div class="votes">
    <div id="Vu22112">
    <a href="/manual/vote-note.php?id=22112&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22112">
    <a href="/manual/vote-note.php?id=22112&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22112" title="50% like this...">
    0
    </div>
  </div>
  <a href="#22112" class="name">
  <strong class="user"><em>paule at cs dot tamu dot edu</em></strong></a><a class="genanchor" href="#22112"> &para;</a><div class="date" title="2002-06-06 11:09"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22112">
<div class="phpcode"><code><span class="html">After reading KoKos' post above, I thought that the code I posted right before his should do what he wanted. However, my original post neglected to note the little "Tip" in the documentation above, about a single element replacement.
<br />
<br />If one changes the lines in my code above that says:
<br />
<br /><span class="default">&lt;?php
<br />                </span><span class="keyword">if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$replacement</span><span class="keyword">))
<br />                    foreach(</span><span class="default">$replacement </span><span class="keyword">as </span><span class="default">$r_key</span><span class="keyword">=&gt;</span><span class="default">$r_value</span><span class="keyword">)
<br />                        </span><span class="default">$new_array</span><span class="keyword">[</span><span class="default">$r_key</span><span class="keyword">]=</span><span class="default">$r_value</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />to instead say:
<br />
<br /><span class="default">&lt;?php
<br />                </span><span class="keyword">if(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$replacement</span><span class="keyword">))
<br />                    </span><span class="default">$new_array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]=</span><span class="default">$replacement</span><span class="keyword">;
<br />                elseif(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$replacement</span><span class="keyword">))
<br />                    foreach(</span><span class="default">$replacement </span><span class="keyword">as </span><span class="default">$r_key</span><span class="keyword">=&gt;</span><span class="default">$r_value</span><span class="keyword">)
<br />                        </span><span class="default">$new_array</span><span class="keyword">[</span><span class="default">$r_key</span><span class="keyword">]=</span><span class="default">$r_value</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />that will solve the problem.
<br />
<br />Sorry for the omission.</span></code></div>
  </div>
 </div>
  <div class="note" id="22111">  <div class="votes">
    <div id="Vu22111">
    <a href="/manual/vote-note.php?id=22111&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22111">
    <a href="/manual/vote-note.php?id=22111&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22111" title="50% like this...">
    0
    </div>
  </div>
  <a href="#22111" class="name">
  <strong class="user"><em>kokos at lac dot lviv dot ua</em></strong></a><a class="genanchor" href="#22111"> &para;</a><div class="date" title="2002-06-06 08:26"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22111">
<div class="phpcode"><code><span class="html">It may seem obvious from the above posts, but cost me a bit of
<br />braindamage to figure this out...
<br />
<br />Contrary to the equivalence noted on this page
<br />$input[$x] = $y   &lt;==&gt;   array_splice ($input, $x, 1, $y)
<br />array_splice() will not always work as expected, 
<br />even provided that you have only INTEGER keys!
<br />
<br />The following code:
<br />   $t=array('a','b','c','d','e');
<br />   var_dump($t);
<br />
<br /><span class="default">&lt;?php
<br />   </span><span class="keyword">unset(</span><span class="default">$t</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$t</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$t</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]);
<br />   </span><span class="default">$t</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]=</span><span class="string">'f'</span><span class="keyword">;
<br />   </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">);
<br />
<br />   </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="string">'g'</span><span class="keyword">);
<br />   </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Will produce:
<br />array(5) {
<br />  [0]=&gt;
<br />  string(1) "a"
<br />  [1]=&gt;
<br />  string(1) "b"
<br />  [2]=&gt;
<br />  string(1) "c"
<br />  [3]=&gt;
<br />  string(1) "d"
<br />  [4]=&gt;
<br />  string(1) "e"
<br />}
<br />array(3) {
<br />  [2]=&gt;
<br />  string(1) "c"
<br />  [4]=&gt;
<br />  string(1) "e"
<br />  [0]=&gt;
<br />  string(1) "f"
<br />}
<br />array(3) {
<br />  [0]=&gt;
<br />  string(1) "g"
<br />  [1]=&gt;
<br />  string(1) "e"
<br />  [2]=&gt;
<br />  string(1) "f"
<br />}
<br />
<br />Note the position of $t[0] in the second call to var_dump().
<br />And of course, array_splice() left it intact, changing $t[2] instead.
<br />This is because it operates the _offset_, not the _index_.  :)
<br />I think that "equivalence note" should be considered buggy.  ;)))
<br />
<br />Best wishes.
<br />KoKos.</span></code></div>
  </div>
 </div>
  <div class="note" id="41118">  <div class="votes">
    <div id="Vu41118">
    <a href="/manual/vote-note.php?id=41118&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41118">
    <a href="/manual/vote-note.php?id=41118&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41118" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#41118" class="name">
  <strong class="user"><em>rolandfoxx at yahoo dot com</em></strong></a><a class="genanchor" href="#41118"> &para;</a><div class="date" title="2004-03-30 12:16"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41118">
<div class="phpcode"><code><span class="html">Be careful, array_splice does not behave like you might expect should you try to pass it an object as the replacement argument.  Consider the following:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//Very truncated<br /></span><span class="keyword">class </span><span class="default">Tree </span><span class="keyword">{<br />  var </span><span class="default">$childNodes<br /><br />  </span><span class="keyword">function </span><span class="default">addChild</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$node</span><span class="keyword">) {<br />    </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$node</span><span class="keyword">);<br />    </span><span class="comment">//...rest of function<br />  </span><span class="keyword">}<br /><br />}<br /><br />class </span><span class="default">Node </span><span class="keyword">{<br />  var </span><span class="default">$stuff<br />  </span><span class="keyword">...<br />}<br /><br /></span><span class="default">$tree </span><span class="keyword">= new </span><span class="default">Tree</span><span class="keyword">();<br /></span><span class="comment">// ...set 2 nodes using other functions...<br /></span><span class="keyword">echo (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$tree</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">)); </span><span class="comment">//Gives 2<br /></span><span class="default">$newNode </span><span class="keyword">= new </span><span class="default">Node</span><span class="keyword">();<br /></span><span class="comment">// ...set node attributes here...<br /></span><span class="default">$tree</span><span class="keyword">-&gt;</span><span class="default">addChild</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$newNode</span><span class="keyword">);<br />echo(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$tree</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">)); </span><span class="comment">//Expect 3?  wrong!<br /></span><span class="default">?&gt;<br /></span><br />In this case, the array has a number of items added to it equal to the number of attributes in the new Node object and the values thereof  I.e, if your Node object has 2 attributes with values "foo" and "bar", count($tree-&gt;childNodes) will now return 4, with the items "foo" and "bar" added to it.  I'm not sure if this qualifies as a bug, or is just a byproduct of how PHP handles objects.<br /><br />Here's a workaround for this problem:<br />function array_insertobj(&amp;$array, $offset, $insert) {<br />  $firstPart = array_slice($array, 0, $offset);<br />  $secondPart = array_slice($array, $offset);<br />  $insertPart = array($insert);<br />  $array = array_merge($firstPart, $insertPart, $secondPart);<br />}<br /><br />Note that this function makes no allowances for when $offset equals the first or last index in the array.  That's because array_unshift and array_push work just fine in those cases.  It's only array_splice that can trip you up.  Obviously, this is kinda tailor-made for arrays with numeric keys when you don't really care what said keys are, but i'm sure you could adapt it for associative arrays if you needed it.</span></code></div>
  </div>
 </div>
  <div class="note" id="26744">  <div class="votes">
    <div id="Vu26744">
    <a href="/manual/vote-note.php?id=26744&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26744">
    <a href="/manual/vote-note.php?id=26744&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26744" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#26744" class="name">
  <strong class="user"><em>tsunaquake DOESNTLIKESPAM @ wp DOT pl</em></strong></a><a class="genanchor" href="#26744"> &para;</a><div class="date" title="2002-11-11 10:56"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26744">
<div class="phpcode"><code><span class="html">It is possible to use a string instead of offset, eg if you want to deletre the entry $myArray['entry'] then you can simply do it like this:
<br />
<br /><span class="default">&lt;?php
<br />array_splice</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">, </span><span class="string">'entry'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Note that you can use unset($myArray['entry']) as well but then, it doesn't enable you to remove more than one entry and it doesn't replace anything in the array, if that's what you intend to do.</span></code></div>
  </div>
 </div>
  <div class="note" id="85904">  <div class="votes">
    <div id="Vu85904">
    <a href="/manual/vote-note.php?id=85904&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85904">
    <a href="/manual/vote-note.php?id=85904&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85904" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#85904" class="name">
  <strong class="user"><em>madmax at max-worlds dot net</em></strong></a><a class="genanchor" href="#85904"> &para;</a><div class="date" title="2008-09-23 06:23"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85904">
<div class="phpcode"><code><span class="html">Note:  If replacement is not an array, it will be typecast to one (i.e. (array) $parameter). This may result in unexpected behavior when using an object replacement .  
<br />
<br />Example :
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">A</span><span class="keyword">()
<br />{
<br />    private </span><span class="default">$a</span><span class="keyword">;
<br />    private </span><span class="default">$b</span><span class="keyword">;
<br />    public function </span><span class="default">__construct</span><span class="keyword">()
<br />    {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">= </span><span class="string">"foo"</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="string">"bar"</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="default">$array </span><span class="keyword">= array();
<br /></span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, new </span><span class="default">A</span><span class="keyword">());
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Outputs :
<br />
<br />Array : Array
<br />{
<br />    [0] =&gt; foo
<br />    [1] =&gt; bar
<br />}
<br />
<br />Solution : Enforce the array() on the object.
<br />
<br /><span class="default">&lt;?php
<br />array_splice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, array(new </span><span class="default">Object</span><span class="keyword">());
<br /></span><span class="default">?&gt;
<br /></span>
<br />Source : <a href="http://bugs.php.net/bug.php?id=44485" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=44485</a></span></code></div>
  </div>
 </div>
  <div class="note" id="115701">  <div class="votes">
    <div id="Vu115701">
    <a href="/manual/vote-note.php?id=115701&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115701">
    <a href="/manual/vote-note.php?id=115701&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115701" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#115701" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#115701"> &para;</a><div class="date" title="2014-09-11 01:07"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115701">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_slice2</span><span class="keyword">( </span><span class="default">$array</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$length </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">)<br />{<br />  if( </span><span class="default">$offset </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">)<br />    </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">sizeof</span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">) + </span><span class="default">$offset</span><span class="keyword">;<br /><br />  </span><span class="default">$length </span><span class="keyword">= ( !</span><span class="default">$length </span><span class="keyword">? </span><span class="default">sizeof</span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">) : ( </span><span class="default">$length </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">? </span><span class="default">sizeof</span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">) - </span><span class="default">$length </span><span class="keyword">: </span><span class="default">$length </span><span class="keyword">+ </span><span class="default">$offset </span><span class="keyword">) );<br /><br />  for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$offset</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ )<br />    </span><span class="default">$tmp</span><span class="keyword">[] = </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br /><br />  return </span><span class="default">$tmp</span><span class="keyword">;     <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91923">  <div class="votes">
    <div id="Vu91923">
    <a href="/manual/vote-note.php?id=91923&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91923">
    <a href="/manual/vote-note.php?id=91923&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91923" title="27% like this...">
    -5
    </div>
  </div>
  <a href="#91923" class="name">
  <strong class="user"><em>strata_ranger at hotmail dot com</em></strong></a><a class="genanchor" href="#91923"> &para;</a><div class="date" title="2009-07-01 11:53"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91923">
<div class="phpcode"><code><span class="html">Should you want a similar function for splicing strings together, here is a rough equivalent:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">str_splice</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">, </span><span class="default">$splice</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">)<br />{<br />  </span><span class="default">$input </span><span class="keyword">= (string)</span><span class="default">$input</span><span class="keyword">;<br />  </span><span class="default">$splice </span><span class="keyword">= (string)</span><span class="default">$splice</span><span class="keyword">;<br />  </span><span class="default">$count </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />  <br />  </span><span class="comment">// Offset handling (negative values measure from end of string)<br />  </span><span class="keyword">if (</span><span class="default">$offset</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">) </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$count </span><span class="keyword">+ </span><span class="default">$offset</span><span class="keyword">;<br /><br />  </span><span class="comment">// Length handling (positive values measure from $offset; negative, from end of string; omitted = end of string)<br />  </span><span class="keyword">if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">)) </span><span class="default">$length </span><span class="keyword">= </span><span class="default">$count</span><span class="keyword">;<br />  elseif (</span><span class="default">$length </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">)  </span><span class="default">$length </span><span class="keyword">= </span><span class="default">$count</span><span class="keyword">-</span><span class="default">$offset</span><span class="keyword">+</span><span class="default">$length</span><span class="keyword">;<br /><br />  </span><span class="comment">// Do the splice<br />  </span><span class="keyword">return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">) . </span><span class="default">$splice </span><span class="keyword">. </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">+</span><span class="default">$length</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">"The fox jumped over the lazy dog."</span><span class="keyword">;<br /><br /></span><span class="comment">// Outputs "The quick brown fox jumped over the lazy dog."<br /></span><span class="keyword">echo </span><span class="default">str_splice</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">"quick brown "</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Obviously this is not for cases where all you need to do is a simple search-and-replace.</span></code></div>
  </div>
 </div>
  <div class="note" id="18247">  <div class="votes">
    <div id="Vu18247">
    <a href="/manual/vote-note.php?id=18247&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18247">
    <a href="/manual/vote-note.php?id=18247&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18247" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#18247" class="name">
  <strong class="user"><em>leingang AT math DOT rutgers DOT edu</em></strong></a><a class="genanchor" href="#18247"> &para;</a><div class="date" title="2002-01-15 07:32"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18247">
<div class="phpcode"><code><span class="html">array_splice resets the internal pointer of $input.  In fact, many array functions do this.  Caveat programmor!</span></code></div>
  </div>
 </div>
  <div class="note" id="84733">  <div class="votes">
    <div id="Vu84733">
    <a href="/manual/vote-note.php?id=84733&amp;page=function.array-splice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84733">
    <a href="/manual/vote-note.php?id=84733&amp;page=function.array-splice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84733" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#84733" class="name">
  <strong class="user"><em>loushou - life dot 42 at gmail dot com</em></strong></a><a class="genanchor" href="#84733"> &para;</a><div class="date" title="2008-07-27 04:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84733">
<div class="phpcode"><code><span class="html">i miss posted the actual function...<br />here is the real one lol<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">q_sort</span><span class="keyword">(&amp;</span><span class="default">$Info</span><span class="keyword">, </span><span class="default">$Index</span><span class="keyword">, </span><span class="default">$Left</span><span class="keyword">, </span><span class="default">$Right</span><span class="keyword">)<br />{<br />  echo </span><span class="string">"memory usage &lt;b&gt;"</span><span class="keyword">.</span><span class="default">memory_get_usage</span><span class="keyword">().</span><span class="string">"&lt;/b&gt;&lt;br/&gt;\n"</span><span class="keyword">;<br />  </span><span class="default">$L_hold </span><span class="keyword">= </span><span class="default">$Left</span><span class="keyword">;<br />  </span><span class="default">$R_hold </span><span class="keyword">= </span><span class="default">$Right</span><span class="keyword">;<br />  </span><span class="default">$Pivot </span><span class="keyword">= </span><span class="default">$Left</span><span class="keyword">;<br />  </span><span class="default">$PivotValue </span><span class="keyword">= </span><span class="default">$Info</span><span class="keyword">[</span><span class="default">$Left</span><span class="keyword">];<br />  while (</span><span class="default">$Left </span><span class="keyword">&lt; </span><span class="default">$Right</span><span class="keyword">)<br />  {<br />    while ((</span><span class="default">$Info</span><span class="keyword">[</span><span class="default">$Right</span><span class="keyword">][</span><span class="default">$Index</span><span class="keyword">] &gt;= </span><span class="default">$PivotValue</span><span class="keyword">[</span><span class="default">$Index</span><span class="keyword">]) &amp;&amp; (</span><span class="default">$Left </span><span class="keyword">&lt; </span><span class="default">$Right</span><span class="keyword">))<br />      </span><span class="default">$Right</span><span class="keyword">--;<br />    if (</span><span class="default">$Left </span><span class="keyword">!= </span><span class="default">$Right</span><span class="keyword">)<br />    {<br />      </span><span class="default">$Info</span><span class="keyword">[</span><span class="default">$Left</span><span class="keyword">] = </span><span class="default">$Info</span><span class="keyword">[</span><span class="default">$Right</span><span class="keyword">];<br />      </span><span class="default">$Left</span><span class="keyword">++;<br />    }<br />    while ((</span><span class="default">$Info</span><span class="keyword">[</span><span class="default">$Left</span><span class="keyword">][</span><span class="default">$Index</span><span class="keyword">] &lt;= </span><span class="default">$PivotValue</span><span class="keyword">[</span><span class="default">$Index</span><span class="keyword">]) &amp;&amp; (</span><span class="default">$Left </span><span class="keyword">&lt; </span><span class="default">$Right</span><span class="keyword">))<br />      </span><span class="default">$Left</span><span class="keyword">++;<br />    if (</span><span class="default">$Left </span><span class="keyword">!= </span><span class="default">$Right</span><span class="keyword">)<br />    {<br />      </span><span class="default">$Info</span><span class="keyword">[</span><span class="default">$Right</span><span class="keyword">] = </span><span class="default">$Info</span><span class="keyword">[</span><span class="default">$Left</span><span class="keyword">];<br />      </span><span class="default">$Right</span><span class="keyword">--;<br />    }<br />  }<br />  </span><span class="default">$Info</span><span class="keyword">[</span><span class="default">$Left</span><span class="keyword">] = </span><span class="default">$PivotValue</span><span class="keyword">;<br />  </span><span class="default">$Pivot </span><span class="keyword">= </span><span class="default">$Left</span><span class="keyword">;<br />  </span><span class="default">$Left </span><span class="keyword">= </span><span class="default">$L_hold</span><span class="keyword">;<br />  </span><span class="default">$Right </span><span class="keyword">= </span><span class="default">$R_hold</span><span class="keyword">;<br />  if (</span><span class="default">$Left </span><span class="keyword">&lt; </span><span class="default">$Pivot</span><span class="keyword">)<br />    </span><span class="default">q_sort</span><span class="keyword">(</span><span class="default">$Info</span><span class="keyword">, </span><span class="default">$Index</span><span class="keyword">, </span><span class="default">$Left</span><span class="keyword">, </span><span class="default">$Pivot</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">);<br />  if (</span><span class="default">$Right </span><span class="keyword">&gt; </span><span class="default">$Pivot</span><span class="keyword">)<br />    </span><span class="default">q_sort</span><span class="keyword">(</span><span class="default">$Info</span><span class="keyword">, </span><span class="default">$Index</span><span class="keyword">, </span><span class="default">$Pivot</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">$Right</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-splice&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-splice.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.array.php">Array Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.array.php" title="array">array</a>
                        </li>
                                                <li class="">
                            <a href="function.array-all.php" title="array_&#8203;all">array_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.array-any.php" title="array_&#8203;any">array_&#8203;any</a>
                        </li>
                                                <li class="">
                            <a href="function.array-change-key-case.php" title="array_&#8203;change_&#8203;key_&#8203;case">array_&#8203;change_&#8203;key_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.array-chunk.php" title="array_&#8203;chunk">array_&#8203;chunk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-column.php" title="array_&#8203;column">array_&#8203;column</a>
                        </li>
                                                <li class="">
                            <a href="function.array-combine.php" title="array_&#8203;combine">array_&#8203;combine</a>
                        </li>
                                                <li class="">
                            <a href="function.array-count-values.php" title="array_&#8203;count_&#8203;values">array_&#8203;count_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff.php" title="array_&#8203;diff">array_&#8203;diff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-assoc.php" title="array_&#8203;diff_&#8203;assoc">array_&#8203;diff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-key.php" title="array_&#8203;diff_&#8203;key">array_&#8203;diff_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-uassoc.php" title="array_&#8203;diff_&#8203;uassoc">array_&#8203;diff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-ukey.php" title="array_&#8203;diff_&#8203;ukey">array_&#8203;diff_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill.php" title="array_&#8203;fill">array_&#8203;fill</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill-keys.php" title="array_&#8203;fill_&#8203;keys">array_&#8203;fill_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-filter.php" title="array_&#8203;filter">array_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find.php" title="array_&#8203;find">array_&#8203;find</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find-key.php" title="array_&#8203;find_&#8203;key">array_&#8203;find_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-flip.php" title="array_&#8203;flip">array_&#8203;flip</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect.php" title="array_&#8203;intersect">array_&#8203;intersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-assoc.php" title="array_&#8203;intersect_&#8203;assoc">array_&#8203;intersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-key.php" title="array_&#8203;intersect_&#8203;key">array_&#8203;intersect_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-uassoc.php" title="array_&#8203;intersect_&#8203;uassoc">array_&#8203;intersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-ukey.php" title="array_&#8203;intersect_&#8203;ukey">array_&#8203;intersect_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-is-list.php" title="array_&#8203;is_&#8203;list">array_&#8203;is_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-exists.php" title="array_&#8203;key_&#8203;exists">array_&#8203;key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-first.php" title="array_&#8203;key_&#8203;first">array_&#8203;key_&#8203;first</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-last.php" title="array_&#8203;key_&#8203;last">array_&#8203;key_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.array-keys.php" title="array_&#8203;keys">array_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-map.php" title="array_&#8203;map">array_&#8203;map</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge.php" title="array_&#8203;merge">array_&#8203;merge</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge-recursive.php" title="array_&#8203;merge_&#8203;recursive">array_&#8203;merge_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-multisort.php" title="array_&#8203;multisort">array_&#8203;multisort</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pad.php" title="array_&#8203;pad">array_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pop.php" title="array_&#8203;pop">array_&#8203;pop</a>
                        </li>
                                                <li class="">
                            <a href="function.array-product.php" title="array_&#8203;product">array_&#8203;product</a>
                        </li>
                                                <li class="">
                            <a href="function.array-push.php" title="array_&#8203;push">array_&#8203;push</a>
                        </li>
                                                <li class="">
                            <a href="function.array-rand.php" title="array_&#8203;rand">array_&#8203;rand</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reduce.php" title="array_&#8203;reduce">array_&#8203;reduce</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace.php" title="array_&#8203;replace">array_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace-recursive.php" title="array_&#8203;replace_&#8203;recursive">array_&#8203;replace_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reverse.php" title="array_&#8203;reverse">array_&#8203;reverse</a>
                        </li>
                                                <li class="">
                            <a href="function.array-search.php" title="array_&#8203;search">array_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.array-shift.php" title="array_&#8203;shift">array_&#8203;shift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-slice.php" title="array_&#8203;slice">array_&#8203;slice</a>
                        </li>
                                                <li class="current">
                            <a href="function.array-splice.php" title="array_&#8203;splice">array_&#8203;splice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-sum.php" title="array_&#8203;sum">array_&#8203;sum</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff.php" title="array_&#8203;udiff">array_&#8203;udiff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-assoc.php" title="array_&#8203;udiff_&#8203;assoc">array_&#8203;udiff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-uassoc.php" title="array_&#8203;udiff_&#8203;uassoc">array_&#8203;udiff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect.php" title="array_&#8203;uintersect">array_&#8203;uintersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-assoc.php" title="array_&#8203;uintersect_&#8203;assoc">array_&#8203;uintersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-uassoc.php" title="array_&#8203;uintersect_&#8203;uassoc">array_&#8203;uintersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unique.php" title="array_&#8203;unique">array_&#8203;unique</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unshift.php" title="array_&#8203;unshift">array_&#8203;unshift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-values.php" title="array_&#8203;values">array_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk.php" title="array_&#8203;walk">array_&#8203;walk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk-recursive.php" title="array_&#8203;walk_&#8203;recursive">array_&#8203;walk_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.arsort.php" title="arsort">arsort</a>
                        </li>
                                                <li class="">
                            <a href="function.asort.php" title="asort">asort</a>
                        </li>
                                                <li class="">
                            <a href="function.compact.php" title="compact">compact</a>
                        </li>
                                                <li class="">
                            <a href="function.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="function.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="function.end.php" title="end">end</a>
                        </li>
                                                <li class="">
                            <a href="function.extract.php" title="extract">extract</a>
                        </li>
                                                <li class="">
                            <a href="function.in-array.php" title="in_&#8203;array">in_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="function.key-exists.php" title="key_&#8203;exists">key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.krsort.php" title="krsort">krsort</a>
                        </li>
                                                <li class="">
                            <a href="function.ksort.php" title="ksort">ksort</a>
                        </li>
                                                <li class="">
                            <a href="function.list.php" title="list">list</a>
                        </li>
                                                <li class="">
                            <a href="function.natcasesort.php" title="natcasesort">natcasesort</a>
                        </li>
                                                <li class="">
                            <a href="function.natsort.php" title="natsort">natsort</a>
                        </li>
                                                <li class="">
                            <a href="function.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="function.pos.php" title="pos">pos</a>
                        </li>
                                                <li class="">
                            <a href="function.prev.php" title="prev">prev</a>
                        </li>
                                                <li class="">
                            <a href="function.range.php" title="range">range</a>
                        </li>
                                                <li class="">
                            <a href="function.reset.php" title="reset">reset</a>
                        </li>
                                                <li class="">
                            <a href="function.rsort.php" title="rsort">rsort</a>
                        </li>
                                                <li class="">
                            <a href="function.shuffle.php" title="shuffle">shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.sizeof.php" title="sizeof">sizeof</a>
                        </li>
                                                <li class="">
                            <a href="function.sort.php" title="sort">sort</a>
                        </li>
                                                <li class="">
                            <a href="function.uasort.php" title="uasort">uasort</a>
                        </li>
                                                <li class="">
                            <a href="function.uksort.php" title="uksort">uksort</a>
                        </li>
                                                <li class="">
                            <a href="function.usort.php" title="usort">usort</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.each.php" title="each">each</a>
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
