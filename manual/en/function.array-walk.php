<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_walk - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-walk.php">
 <link rel="shorturl" href="https://www.php.net/array-walk">
 <link rel="alternate" href="https://www.php.net/array-walk" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-values.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-walk-recursive.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-walk.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-walk.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-walk.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-walk.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-walk.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-walk.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-walk.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-walk.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-walk.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-walk.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-walk.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Apply a user supplied function to every member of an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_walk - Manual" />
<meta name="twitter:description" content="Apply a user supplied function to every member of an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_walk - Manual" />
<meta itemprop="description" content="Apply a user supplied function to every member of an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Apply a user supplied function to every member of an array" />

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
        <a href="function.array-walk-recursive.php">
          array_walk_recursive &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-values.php">
          &laquo; array_values        </a>
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
            <option value='en/function.array-walk.php' selected="selected">English</option>
            <option value='de/function.array-walk.php'>German</option>
            <option value='es/function.array-walk.php'>Spanish</option>
            <option value='fr/function.array-walk.php'>French</option>
            <option value='it/function.array-walk.php'>Italian</option>
            <option value='ja/function.array-walk.php'>Japanese</option>
            <option value='pt_BR/function.array-walk.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-walk.php'>Russian</option>
            <option value='tr/function.array-walk.php'>Turkish</option>
            <option value='uk/function.array-walk.php'>Ukrainian</option>
            <option value='zh/function.array-walk.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-walk" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_walk</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_walk</span> &mdash; <span class="dc-title">Apply a user supplied function to every member of an array</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.array-walk-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_walk</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter reference">&$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$arg</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="simpara">
   Applies the user-defined <code class="parameter">callback</code> function to each
   element of the <code class="parameter">array</code> array.
  </p>
  <p class="para">
   <span class="function"><strong>array_walk()</strong></span> is not affected by the internal array
   pointer of <code class="parameter">array</code>.  <span class="function"><strong>array_walk()</strong></span>
   will walk through the entire array regardless of pointer position.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.array-walk-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The input array.
      </p>
     </dd>
    
    
     <dt><code class="parameter">callback</code></dt>
     <dd>
      <p class="para">
       Typically, <code class="parameter">callback</code> takes on two parameters.
       The <code class="parameter">array</code> parameter&#039;s value being the first, and
       the key/index second.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        If <code class="parameter">callback</code> needs to be working with the
        actual values of the array, specify the first parameter of
        <code class="parameter">callback</code> as a
        <a href="language.references.php" class="link">reference</a>. Then,
        any changes made to those elements will be made in the
        original array itself.
       </p>
      </p></blockquote>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
          Many internal functions (for example <span class="function"><a href="function.strtolower.php" class="function">strtolower()</a></span>)
          will throw a warning if more than the expected number of argument
          are passed in and are not usable directly as a
          <code class="parameter">callback</code>.
        </p>
      </p></blockquote>
      <p class="para">
       Only the values of the <code class="parameter">array</code> may potentially be
       changed; its structure cannot be altered, i.e., the programmer cannot
       add, unset or reorder elements. If the callback does not respect this
       requirement, the behavior of this function is undefined, and      
       unpredictable.
      </p>
     </dd>
    
    
     <dt><code class="parameter">arg</code></dt>
     <dd>
      <p class="para">
       If the optional <code class="parameter">arg</code> parameter is supplied,
       it will be passed as the third parameter to the
       <code class="parameter">callback</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.array-walk-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.array-walk-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   As of PHP 7.1.0, an <span class="classname"><a href="class.argumentcounterror.php" class="classname">ArgumentCountError</a></span> will be thrown if the <code class="parameter">callback</code> function 
   requires more than 2 parameters (the value and key of the array member),
   or more than 3 parameters if the <code class="parameter">arg</code> is also passed.
   Previously, in this case
   an error of level <a href="errorfunc.constants.php" class="link">E_WARNING</a> would be generated each time 
   <span class="function"><strong>array_walk()</strong></span> calls <code class="parameter">callback</code>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-walk-changelog">
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
 <td>8.2.0</td>
 <td>
  The return type is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> now; previously, it was <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
 </td>
</tr>

     <tr>
      <td>8.0.0</td>
      <td>
       If <code class="parameter">callback</code> expects the second or third parameter to be passed
       by reference, this function will now emit an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.array-walk-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5291">
    <p><strong>Example #1 <span class="function"><strong>array_walk()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$fruits </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"d" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"lemon"</span><span style="color: #007700">, </span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"orange"</span><span style="color: #007700">, </span><span style="color: #DD0000">"b" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"banana"</span><span style="color: #007700">, </span><span style="color: #DD0000">"c" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"apple"</span><span style="color: #007700">);<br /><br />function </span><span style="color: #0000BB">test_alter</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$item1</span><span style="color: #007700">, </span><span style="color: #0000BB">$key</span><span style="color: #007700">, </span><span style="color: #0000BB">$prefix</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$item1 </span><span style="color: #007700">= </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$prefix</span><span style="color: #DD0000">: </span><span style="color: #0000BB">$item1</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />}<br /><br />function </span><span style="color: #0000BB">test_print</span><span style="color: #007700">(</span><span style="color: #0000BB">$item2</span><span style="color: #007700">, </span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$key</span><span style="color: #DD0000">. </span><span style="color: #0000BB">$item2</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #DD0000">"Before ...:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">array_walk</span><span style="color: #007700">(</span><span style="color: #0000BB">$fruits</span><span style="color: #007700">, </span><span style="color: #DD0000">'test_print'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">array_walk</span><span style="color: #007700">(</span><span style="color: #0000BB">$fruits</span><span style="color: #007700">, </span><span style="color: #DD0000">'test_alter'</span><span style="color: #007700">, </span><span style="color: #DD0000">'fruit'</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"... and after:\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">array_walk</span><span style="color: #007700">(</span><span style="color: #0000BB">$fruits</span><span style="color: #007700">, </span><span style="color: #DD0000">'test_print'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Before ...:
d. lemon
a. orange
b. banana
c. apple
... and after:
d. fruit: lemon
a. fruit: orange
b. fruit: banana
c. fruit: apple</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5292">
    <p><strong>Example #2 <span class="function"><strong>array_walk()</strong></span> example using anonymous function</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$elements </span><span style="color: #007700">= [</span><span style="color: #DD0000">'a'</span><span style="color: #007700">, </span><span style="color: #DD0000">'b'</span><span style="color: #007700">, </span><span style="color: #DD0000">'c'</span><span style="color: #007700">];<br /><br /></span><span style="color: #0000BB">array_walk</span><span style="color: #007700">(</span><span style="color: #0000BB">$elements</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$value</span><span style="color: #007700">, </span><span style="color: #0000BB">$key</span><span style="color: #007700">) {<br />  echo </span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$key</span><span style="color: #007700">}</span><span style="color: #DD0000"> =&gt; </span><span style="color: #007700">{</span><span style="color: #0000BB">$value</span><span style="color: #007700">}</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />});<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">0 =&gt; a
1 =&gt; b
2 =&gt; c</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.array-walk-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-walk-recursive.php" class="function" rel="rdfs-seeAlso">array_walk_recursive()</a> - Apply a user function recursively to every member of an array</span></li>
    <li><span class="function"><a href="function.iterator-apply.php" class="function" rel="rdfs-seeAlso">iterator_apply()</a> - Call a function for every element in an iterator</span></li>
    <li><span class="function"><a href="function.list.php" class="function" rel="rdfs-seeAlso">list()</a> - Assign variables as if they were an array</span></li>
    <li><span class="function"><a href="function.each.php" class="function" rel="rdfs-seeAlso">each()</a> - Return the current key and value pair from an array and advance the array cursor</span></li>
    <li><span class="function"><a href="function.call-user-func-array.php" class="function" rel="rdfs-seeAlso">call_user_func_array()</a> - Call a callback with an array of parameters</span></li>
    <li><span class="function"><a href="function.array-map.php" class="function" rel="rdfs-seeAlso">array_map()</a> - Applies the callback to the elements of the given arrays</span></li>
    <li><a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-walk.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-walk%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-walk&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-walk.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">35 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="45380">  <div class="votes">
    <div id="Vu45380">
    <a href="/manual/vote-note.php?id=45380&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45380">
    <a href="/manual/vote-note.php?id=45380&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45380" title="88% like this...">
    252
    </div>
  </div>
  <a href="#45380" class="name">
  <strong class="user"><em>bisqwit at iki dot fi</em></strong></a><a class="genanchor" href="#45380"> &para;</a><div class="date" title="2004-09-03 04:54"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45380">
<div class="phpcode"><code><span class="html">It's worth nothing that array_walk can not be used to change keys in the array.<br />The function may be defined as (&amp;$value, $key) but not (&amp;$value, &amp;$key).<br />Even though PHP does not complain/warn, it does not modify the key.</span></code></div>
  </div>
 </div>
  <div class="note" id="115622">  <div class="votes">
    <div id="Vu115622">
    <a href="/manual/vote-note.php?id=115622&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115622">
    <a href="/manual/vote-note.php?id=115622&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115622" title="86% like this...">
    72
    </div>
  </div>
  <a href="#115622" class="name">
  <strong class="user"><em>ezhacher at gmail dot com</em></strong></a><a class="genanchor" href="#115622"> &para;</a><div class="date" title="2014-08-27 12:45"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115622">
<div class="phpcode"><code><span class="html">Calling an array Walk inside a class <br /><br />If the class is static:<br />array_walk($array, array('self', 'walkFunction'));<br />or<br />array_walk($array, array('className', 'walkFunction'));<br /><br />Otherwise:<br />array_walk($array, array($this, 'walkFunction'));</span></code></div>
  </div>
 </div>
  <div class="note" id="121980">  <div class="votes">
    <div id="Vu121980">
    <a href="/manual/vote-note.php?id=121980&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121980">
    <a href="/manual/vote-note.php?id=121980&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121980" title="81% like this...">
    48
    </div>
  </div>
  <a href="#121980" class="name">
  <strong class="user"><em>01001coder at gmail dot com</em></strong></a><a class="genanchor" href="#121980"> &para;</a><div class="date" title="2017-12-05 10:19"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121980">
<div class="phpcode"><code><span class="html">I noticed that :<br /><br />PHP ignored arguments type when using array_walk() even if there was<br /> <br />declare(strict_types=1) . <br /><br />See this code as an example ...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="default">$fruits </span><span class="keyword">= array(</span><span class="string">"butter" </span><span class="keyword">=&gt; </span><span class="default">5.3</span><span class="keyword">, </span><span class="string">"meat" </span><span class="keyword">=&gt; </span><span class="default">7</span><span class="keyword">, </span><span class="string">"banana" </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">);<br /><br />function </span><span class="default">test_print</span><span class="keyword">(</span><span class="default">int $item2</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) {<br />    echo </span><span class="string">"</span><span class="default">$key</span><span class="string">: </span><span class="default">$item2</span><span class="string">&lt;br /&gt;\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$fruits</span><span class="keyword">, </span><span class="string">'test_print'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />The output is :<br /><br />butter: 5<br />meat: 7<br />banana: 3<br /><br />whilst the expecting output is :<br /><br />Fatal error: Uncaught TypeError: Argument 1 passed to test_print() must be of the type integer<br /><br />because "butter" =&gt; 5.3 is float<br /><br />I asked someone about it and they said "this was caused by the fact that callbacks called from internal code will always use weak type". But I tried to do some tests and this behavior is not an issue when using call_user_func().</span></code></div>
  </div>
 </div>
  <div class="note" id="58935">  <div class="votes">
    <div id="Vu58935">
    <a href="/manual/vote-note.php?id=58935&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58935">
    <a href="/manual/vote-note.php?id=58935&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58935" title="80% like this...">
    3
    </div>
  </div>
  <a href="#58935" class="name">
  <strong class="user"><em>ludvig dot ericson at gmail dot com</em></strong></a><a class="genanchor" href="#58935"> &para;</a><div class="date" title="2005-11-21 06:09"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58935">
<div class="phpcode"><code><span class="html">In response to 'ibolmo', this is an extended version of string_walk, allowing to pass userdata (like array_walk) and to have the function edit the string in the same manner as array_walk allows, note now though that you have to pass a variable, since PHP cannot pass string literals by reference (logically).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">string_walk</span><span class="keyword">(&amp;</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$funcname</span><span class="keyword">, </span><span class="default">$userdata </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="comment"># NOTE: PHP's dereference sucks, we have to do this.<br />        </span><span class="default">$hack </span><span class="keyword">= </span><span class="default">$string</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">};<br />        </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$funcname</span><span class="keyword">, &amp;</span><span class="default">$hack</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$userdata</span><span class="keyword">);<br />        </span><span class="default">$string</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">} = </span><span class="default">$hack</span><span class="keyword">;<br />    }<br />}<br /><br />function </span><span class="default">yourFunc</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$position</span><span class="keyword">) {<br />    echo </span><span class="default">$value </span><span class="keyword">. </span><span class="string">' '</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">yourOtherFunc</span><span class="keyword">(&amp;</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$position</span><span class="keyword">) {<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">str_rot13</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />}<br /><br /></span><span class="comment"># NOTE: We now need this ugly $x = hack.<br /></span><span class="default">string_walk</span><span class="keyword">(</span><span class="default">$x </span><span class="keyword">= </span><span class="string">'interesting'</span><span class="keyword">, </span><span class="string">'yourFunc'</span><span class="keyword">);<br /></span><span class="comment">// Ouput: i n t e r e s t i n g<br /><br /></span><span class="default">string_walk</span><span class="keyword">(</span><span class="default">$x </span><span class="keyword">= </span><span class="string">'interesting'</span><span class="keyword">, </span><span class="string">'yourOtherFunc'</span><span class="keyword">);<br />echo </span><span class="default">$x</span><span class="keyword">;<br /></span><span class="comment">// Output: vagrerfgvat<br /></span><span class="default">?&gt;<br /></span><br />Also note that calling str_rot13() directly on $x would be much faster ;-) just a sample.</span></code></div>
  </div>
 </div>
  <div class="note" id="104851">  <div class="votes">
    <div id="Vu104851">
    <a href="/manual/vote-note.php?id=104851&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104851">
    <a href="/manual/vote-note.php?id=104851&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104851" title="72% like this...">
    18
    </div>
  </div>
  <a href="#104851" class="name">
  <strong class="user"><em>Maxim</em></strong></a><a class="genanchor" href="#104851"> &para;</a><div class="date" title="2011-07-11 12:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104851">
<div class="phpcode"><code><span class="html">Note that using array_walk with intval is inappropriate.<br />There are many examples on internet that suggest to use following code to safely escape $_POST arrays of integers:<br /><span class="default">&lt;?php<br />array_walk</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'something'</span><span class="keyword">],</span><span class="string">'intval'</span><span class="keyword">); </span><span class="comment">// does nothing in PHP 5.3.3<br /></span><span class="default">?&gt;<br /></span>It works in _some_ older PHP versions (5.2), but is against specifications. Since intval() does not modify it's arguments, but returns modified result, the code above has no effect on the array and will leave security hole in your website.<br /><br />You can use following instead:<br /><span class="default">&lt;?php<br />$_POST</span><span class="keyword">[</span><span class="string">'something'</span><span class="keyword">] = </span><span class="default">array_map</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">,</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'something'</span><span class="keyword">]);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115220">  <div class="votes">
    <div id="Vu115220">
    <a href="/manual/vote-note.php?id=115220&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115220">
    <a href="/manual/vote-note.php?id=115220&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115220" title="72% like this...">
    8
    </div>
  </div>
  <a href="#115220" class="name">
  <strong class="user"><em>chaley at brtransport dot com</em></strong></a><a class="genanchor" href="#115220"> &para;</a><div class="date" title="2014-06-16 12:46"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115220">
<div class="phpcode"><code><span class="html">There is a note about 3 years ago regarding using this for trimming. array_map() may be cleaner for this. I haven't checked the time/resource impact:<br /><br />$result = array_map("trim", $array);</span></code></div>
  </div>
 </div>
  <div class="note" id="89347">  <div class="votes">
    <div id="Vu89347">
    <a href="/manual/vote-note.php?id=89347&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89347">
    <a href="/manual/vote-note.php?id=89347&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89347" title="70% like this...">
    12
    </div>
  </div>
  <a href="#89347" class="name">
  <strong class="user"><em>erelsgl at gmail dot com</em></strong></a><a class="genanchor" href="#89347"> &para;</a><div class="date" title="2009-03-04 03:40"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89347">
<div class="phpcode"><code><span class="html">If you want to unset elements from the callback function, maybe what you really need is array_filter.</span></code></div>
  </div>
 </div>
  <div class="note" id="95096">  <div class="votes">
    <div id="Vu95096">
    <a href="/manual/vote-note.php?id=95096&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95096">
    <a href="/manual/vote-note.php?id=95096&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95096" title="68% like this...">
    18
    </div>
  </div>
  <a href="#95096" class="name">
  <strong class="user"><em>rustamabd at gmail dot com</em></strong></a><a class="genanchor" href="#95096"> &para;</a><div class="date" title="2009-12-13 06:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95096">
<div class="phpcode"><code><span class="html">Don't forget about the array_map() function, it may be easier to use!<br /><br />Here's how to lower-case all elements in an array:<br /><br /><span class="default">&lt;?php<br />    $arr </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'strtolower'</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119777">  <div class="votes">
    <div id="Vu119777">
    <a href="/manual/vote-note.php?id=119777&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119777">
    <a href="/manual/vote-note.php?id=119777&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119777" title="65% like this...">
    10
    </div>
  </div>
  <a href="#119777" class="name">
  <strong class="user"><em>fantomx1 at gmail dot com</em></strong></a><a class="genanchor" href="#119777"> &para;</a><div class="date" title="2016-08-22 08:08"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119777">
<div class="phpcode"><code><span class="html">Since array_walk cannot modify / change / reindex keys as already mentioned, i provide this small wrapping function which accomplishes passing array reference and index using closures , "use" keyword.<br /><br />function indexArrayByElement($array, $element)<br />{<br />    $arrayReindexed = [];<br />    array_walk(<br />        $array,<br />        function ($item, $key) use (&amp;$arrayReindexed, $element) {<br />            $arrayReindexed[$item[$element]] = $item;<br />        }<br />    );<br />    return $arrayReindexed;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="106298">  <div class="votes">
    <div id="Vu106298">
    <a href="/manual/vote-note.php?id=106298&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106298">
    <a href="/manual/vote-note.php?id=106298&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106298" title="66% like this...">
    3
    </div>
  </div>
  <a href="#106298" class="name">
  <strong class="user"><em>alex_stanhope at hotmail dot com</em></strong></a><a class="genanchor" href="#106298"> &para;</a><div class="date" title="2011-10-26 01:16"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106298">
<div class="phpcode"><code><span class="html">I wanted to walk an array and reverse map it into a second array.  I decided to use array_walk because it should be faster than a reset,next loop or foreach(x as &amp;$y) loop.
<br />
<br /><span class="default">&lt;?php
<br />$output </span><span class="keyword">= array();
<br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="string">'gmapmark_reverse'</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);
<br />
<br />function </span><span class="default">gmapmark_reverse</span><span class="keyword">(&amp;</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">, &amp;</span><span class="default">$target</span><span class="keyword">) {
<br />    </span><span class="default">$target</span><span class="keyword">[</span><span class="default">$item</span><span class="keyword">[</span><span class="string">'form_key'</span><span class="keyword">]] = </span><span class="default">$index</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />In my debugger I can see that $target is progressively updated, but when array_walk returns, $output is empty.  If however I use a (deprecated) call-by-reference:
<br />
<br /><span class="default">&lt;?php
<br />array_walk</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="string">'gmapmark_reverse'</span><span class="keyword">, &amp;</span><span class="default">$output</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />$output is returned correctly.  Unfortunately there's not an easy way to suppress the warnings:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">@</span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="string">'gmapmark_reverse'</span><span class="keyword">, &amp;</span><span class="default">$output</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />doesn't silence them.  I've designed a workaround using a static array:
<br />
<br /><span class="default">&lt;?php
<br />$reverse </span><span class="keyword">= array();
<br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="string">'gmapmark_reverse'</span><span class="keyword">);
<br /></span><span class="comment">// call function one last time to get target array out, because parameters don't work
<br /></span><span class="default">$reverse </span><span class="keyword">= </span><span class="default">gmapmark_reverse</span><span class="keyword">(</span><span class="default">$reverse</span><span class="keyword">);
<br />
<br />function </span><span class="default">gmapmark_reverse</span><span class="keyword">(&amp;</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$index </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {
<br />  static </span><span class="default">$target</span><span class="keyword">;
<br />  if (!</span><span class="default">$target</span><span class="keyword">) {
<br />    </span><span class="default">$target </span><span class="keyword">= array();
<br />  }
<br />  if (isset(</span><span class="default">$item</span><span class="keyword">[</span><span class="string">'form_key'</span><span class="keyword">])) {
<br />    </span><span class="default">$target</span><span class="keyword">[</span><span class="default">$item</span><span class="keyword">[</span><span class="string">'form_key'</span><span class="keyword">]] = </span><span class="default">$index</span><span class="keyword">;
<br />  }
<br />  return(</span><span class="default">$target</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56897">  <div class="votes">
    <div id="Vu56897">
    <a href="/manual/vote-note.php?id=56897&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56897">
    <a href="/manual/vote-note.php?id=56897&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56897" title="65% like this...">
    13
    </div>
  </div>
  <a href="#56897" class="name">
  <strong class="user"><em>Andrzej Martynowicz  at gmail dot com</em></strong></a><a class="genanchor" href="#56897"> &para;</a><div class="date" title="2005-09-18 06:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56897">
<div class="phpcode"><code><span class="html">It can be very useful to pass the third (optional) parameter by reference while modifying it permanently in callback function. This will cause passing modified parameter to next iteration of array_walk(). The exaple below enumerates items in the array:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">enumerate</span><span class="keyword">( &amp;</span><span class="default">$item1</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, &amp;</span><span class="default">$startNum </span><span class="keyword">) {
<br />   </span><span class="default">$item1 </span><span class="keyword">= </span><span class="default">$startNum</span><span class="keyword">++ .</span><span class="string">" </span><span class="default">$item1</span><span class="string">"</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">$num </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />
<br /></span><span class="default">$fruits </span><span class="keyword">= array( </span><span class="string">"lemon"</span><span class="keyword">, </span><span class="string">"orange"</span><span class="keyword">, </span><span class="string">"banana"</span><span class="keyword">, </span><span class="string">"apple"</span><span class="keyword">);
<br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$fruits</span><span class="keyword">, </span><span class="string">'enumerate'</span><span class="keyword">, </span><span class="default">$num </span><span class="keyword">);
<br />
<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$fruits </span><span class="keyword">);
<br />
<br />echo </span><span class="string">'$num is: '</span><span class="keyword">. </span><span class="default">$num </span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />This outputs:
<br />
<br />Array
<br />(
<br />    [0] =&gt; 1 lemon
<br />    [1] =&gt; 2 orange
<br />    [2] =&gt; 3 banana
<br />    [3] =&gt; 4 apple
<br />)
<br />$num is: 1
<br />
<br />Notice at the last line of output that outside of array_walk() the $num parameter has initial value of 1. This is because array_walk() does not take the third parameter by reference.. so what if we pass the reference as the optional parameter..
<br />
<br /><span class="default">&lt;?php
<br />$num </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />
<br /></span><span class="default">$fruits </span><span class="keyword">= array( </span><span class="string">"lemon"</span><span class="keyword">, </span><span class="string">"orange"</span><span class="keyword">, </span><span class="string">"banana"</span><span class="keyword">, </span><span class="string">"apple"</span><span class="keyword">);
<br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$fruits</span><span class="keyword">, </span><span class="string">'enumerate'</span><span class="keyword">, &amp;</span><span class="default">$num </span><span class="keyword">); </span><span class="comment">// reference here
<br />
<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$fruits </span><span class="keyword">);
<br />
<br />echo </span><span class="string">'$num is: '</span><span class="keyword">. </span><span class="default">$num </span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;
<br />echo </span><span class="string">"we've got "</span><span class="keyword">. (</span><span class="default">$num </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) .</span><span class="string">" fruits in the basket!"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span> 
<br />This outputs:
<br />Array
<br />(
<br />    [0] =&gt; 1 lemon
<br />    [1] =&gt; 2 orange
<br />    [2] =&gt; 3 banana
<br />    [3] =&gt; 4 apple
<br />)
<br />$num is: 5
<br />we've got 4 fruits in the basket!
<br />
<br />Now $num has changed so we are able to count the items (without calling count() unnecessarily).
<br />
<br />As a conclusion, using references with array_walk() can be powerful toy but this should be done carefully since modifying third parameter outside the array_walk() is not always what we want.</span></code></div>
  </div>
 </div>
  <div class="note" id="123643">  <div class="votes">
    <div id="Vu123643">
    <a href="/manual/vote-note.php?id=123643&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123643">
    <a href="/manual/vote-note.php?id=123643&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123643" title="63% like this...">
    10
    </div>
  </div>
  <a href="#123643" class="name">
  <strong class="user"><em>taj at yahoo dot fr</em></strong></a><a class="genanchor" href="#123643"> &para;</a><div class="date" title="2019-02-27 11:42"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123643">
<div class="phpcode"><code><span class="html">// We can make that with this simple FOREACH loop : <br /><br />$fruits = array("d" =&gt; "lemon", "a" =&gt; "orange", "b" =&gt; "banana", "c" =&gt; "apple");<br /><br />foreach($fruits as $cls =&gt; $vls)<br />{<br />  $fruits[$cls] = "fruit: ".$vls;<br />}<br /><br />Results: <br /><br />Array<br />(<br />    [d] =&gt; fruit: lemon<br />    [a] =&gt; fruit: orange<br />    [b] =&gt; fruit: banana<br />    [c] =&gt; fruit: apple<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="122991">  <div class="votes">
    <div id="Vu122991">
    <a href="/manual/vote-note.php?id=122991&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122991">
    <a href="/manual/vote-note.php?id=122991&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122991" title="64% like this...">
    4
    </div>
  </div>
  <a href="#122991" class="name">
  <strong class="user"><em>EllisGL</em></strong></a><a class="genanchor" href="#122991"> &para;</a><div class="date" title="2018-08-01 06:15"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122991">
<div class="phpcode"><code><span class="html">For those that think they can't use array_walk to change / replace a key name, here you go:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_explore</span><span class="keyword">(array &amp;</span><span class="default">$array</span><span class="keyword">, callable </span><span class="default">$callback</span><span class="keyword">)<br />{<br />    </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, function(&amp;</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) use (&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">)<br />    {<br />        </span><span class="default">$callback</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br /><br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))<br />        {<br />            </span><span class="default">array_explore</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">);<br />        }<br />    });<br />}<br /><br /></span><span class="comment">/**<br /> * Stolen from: <a href="https://stackoverflow.com/questions/13233405/change-key-in-associative-array-in-php" rel="nofollow" target="_blank">https://stackoverflow.com/questions/13233405/change-key-in-associative-array-in-php</a><br /> */<br /></span><span class="keyword">function </span><span class="default">renameKey</span><span class="keyword">(array &amp;</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$oldKey</span><span class="keyword">, </span><span class="default">$newKey</span><span class="keyword">, </span><span class="default">$ignoreMissing </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$replaceExisting </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />{<br />    if (!empty(</span><span class="default">$data</span><span class="keyword">))<br />    {<br />        if (!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$oldKey</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">))<br />        {<br />            if (</span><span class="default">$ignoreMissing</span><span class="keyword">)<br />            {<br />                return </span><span class="default">FALSE</span><span class="keyword">;<br />            }<br /><br />            throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'Old key does not exist.'</span><span class="keyword">);<br />        }<br />        else<br />        {<br />            if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$newKey</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">))<br />            {<br />                if (</span><span class="default">$replaceExisting</span><span class="keyword">)<br />                {<br />                    unset(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$newKey</span><span class="keyword">]);<br />                }<br />                else<br />                {<br />                    throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'New key already exist.'</span><span class="keyword">);<br />                }<br />            }<br /><br />            </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />            <br />            </span><span class="comment">// Fix from EllisGL: <a href="http://php.net/manual/en/function.array-search.php#122377" rel="nofollow" target="_blank">http://php.net/manual/en/function.array-search.php#122377</a><br />            </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$oldKey</span><span class="keyword">, </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'strval'</span><span class="keyword">, </span><span class="default">$keys</span><span class="keyword">))] = </span><span class="default">$newKey</span><span class="keyword">;<br /><br />            </span><span class="default">$data </span><span class="keyword">= </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br /><br />            return </span><span class="default">TRUE</span><span class="keyword">;<br />        }<br />    }<br /><br />    return </span><span class="default">FALSE</span><span class="keyword">;<br />}<br />    <br /></span><span class="default">$array </span><span class="keyword">= [<br />    </span><span class="string">"_10fish" </span><span class="keyword">=&gt; </span><span class="string">'xyz'</span><span class="keyword">,<br />    </span><span class="string">"_11fish" </span><span class="keyword">=&gt; [<br />        </span><span class="string">"_22" </span><span class="keyword">=&gt; </span><span class="string">"a"</span><span class="keyword">, </span><span class="string">"b"</span><span class="keyword">, </span><span class="string">"c"<br />        </span><span class="keyword">],<br />    </span><span class="string">"someFish" </span><span class="keyword">=&gt; [<br />        </span><span class="string">'xyz'</span><span class="keyword">,<br />        </span><span class="string">'@attributes' </span><span class="keyword">=&gt; [</span><span class="string">'type' </span><span class="keyword">=&gt; </span><span class="string">'cod'</span><span class="keyword">]<br />        ]<br />    ];<br /><br /></span><span class="default">array_explore</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, function(&amp;</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">)<br />{<br />    </span><span class="comment">// Replace key '@attrutes' with '_attributes'<br />    </span><span class="keyword">if(</span><span class="string">'@attributes' </span><span class="keyword">=== </span><span class="default">$key</span><span class="keyword">)<br />    {<br />        </span><span class="default">renameKey</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="string">'_attributes'</span><span class="keyword">);<br />    }<br /><br />});<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112722">  <div class="votes">
    <div id="Vu112722">
    <a href="/manual/vote-note.php?id=112722&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112722">
    <a href="/manual/vote-note.php?id=112722&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112722" title="61% like this...">
    7
    </div>
  </div>
  <a href="#112722" class="name">
  <strong class="user"><em>zlobnygrif at gmail dot com</em></strong></a><a class="genanchor" href="#112722"> &para;</a><div class="date" title="2013-07-17 05:41"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112722">
<div class="phpcode"><code><span class="html">Some speed tests<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Test results<br /></span><span class="default">$array1 </span><span class="keyword">= </span><span class="default">test</span><span class="keyword">(</span><span class="string">'array_walk'</span><span class="keyword">);<br /></span><span class="default">$array2 </span><span class="keyword">= </span><span class="default">test</span><span class="keyword">(</span><span class="string">'array_walk_list_each'</span><span class="keyword">);<br /></span><span class="default">$array3 </span><span class="keyword">= </span><span class="default">test</span><span class="keyword">(</span><span class="string">'array_walk_foreach1'</span><span class="keyword">);<br /></span><span class="default">$array4 </span><span class="keyword">= </span><span class="default">test</span><span class="keyword">(</span><span class="string">'array_walk_foreach2'</span><span class="keyword">);<br /><br /></span><span class="comment">// Check arrays for equal<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$array1 </span><span class="keyword">== </span><span class="default">$array2</span><span class="keyword">, </span><span class="default">$array1 </span><span class="keyword">== </span><span class="default">$array3</span><span class="keyword">, </span><span class="default">$array1 </span><span class="keyword">== </span><span class="default">$array4</span><span class="keyword">);<br /><br /></span><span class="comment">// Test function 1<br /></span><span class="keyword">function </span><span class="default">array_walk_list_each</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$function</span><span class="keyword">, </span><span class="default">$userData </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    while ( list(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) )<br />        </span><span class="default">$function</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$userData</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// Test function 2<br /></span><span class="keyword">function </span><span class="default">array_walk_foreach1</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$function</span><span class="keyword">, </span><span class="default">$userData </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; &amp;</span><span class="default">$value </span><span class="keyword">)<br />        </span><span class="default">$function</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$userData</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// Test function 3<br /></span><span class="keyword">function </span><span class="default">array_walk_foreach2</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$function</span><span class="keyword">, </span><span class="default">$userData </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">)<br />        </span><span class="default">$function</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$userData</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">some_function</span><span class="keyword">(&amp;</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$userData</span><span class="keyword">) {<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="string">"</span><span class="default">$key</span><span class="string"> =&gt; </span><span class="default">$userData</span><span class="string">"</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">test</span><span class="keyword">(</span><span class="default">$function</span><span class="keyword">, </span><span class="default">$count </span><span class="keyword">= </span><span class="default">10000</span><span class="keyword">, </span><span class="default">$arrayElements </span><span class="keyword">= </span><span class="default">1000</span><span class="keyword">) {<br />    echo </span><span class="default">$function</span><span class="keyword">, </span><span class="string">' ... '</span><span class="keyword">;<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$arrayElements</span><span class="keyword">, </span><span class="string">"some text value"</span><span class="keyword">);<br />    <br />    </span><span class="default">$timer </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />    for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; ++</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; )<br />        </span><span class="default">$function</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="string">'some_function'</span><span class="keyword">, </span><span class="string">'some user data'</span><span class="keyword">);<br />    </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%.3f sec\n"</span><span class="keyword">, </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$timer</span><span class="keyword">);<br />    <br />    return </span><span class="default">$array</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Output (PHP 5.4.9-4ubuntu2.2 (cli) (built: Jul 15 2013 18:24:39))<br />=========================<br />array_walk ... 13.572 sec<br />array_walk_list_each ... 0.027 sec<br />array_walk_foreach1 ... 15.356 sec<br />array_walk_foreach2 ... 17.416 sec<br />bool(true)<br />bool(true)<br />bool(true)<br /><br />Output (PHP 5.5.0 (cli) (built: Jul 16 2013 17:59:42) - same server)<br />=========================<br />array_walk ... 4.776 sec<br />array_walk_list_each ... 0.006 sec<br />array_walk_foreach1 ... 4.482 sec<br />array_walk_foreach2 ... 5.166 sec<br />bool(true)<br />bool(true)<br />bool(true)<br /><br />PHP 5.5 array_walk looks pretty good but list each is more and more quickly...</span></code></div>
  </div>
 </div>
  <div class="note" id="99748">  <div class="votes">
    <div id="Vu99748">
    <a href="/manual/vote-note.php?id=99748&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99748">
    <a href="/manual/vote-note.php?id=99748&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99748" title="61% like this...">
    6
    </div>
  </div>
  <a href="#99748" class="name">
  <strong class="user"><em>matthew at codenaked dot org</em></strong></a><a class="genanchor" href="#99748"> &para;</a><div class="date" title="2010-09-02 11:24"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99748">
<div class="phpcode"><code><span class="html">Using lambdas you can create a handy zip function to zip together the keys and values of an array. I extended it to allow you to pass in the "glue" string as the optional userdata parameter. The following example is used to zip an array of email headers:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">/**
<br /> * Zip together the keys and values of an array using the provided glue
<br /> * 
<br /> * The values of the array are replaced with the new computed value
<br /> * 
<br /> * @param array $data
<br /> * @param string $glue
<br /> */
<br /></span><span class="keyword">function </span><span class="default">zip</span><span class="keyword">(&amp;</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$glue</span><span class="keyword">=</span><span class="string">': '</span><span class="keyword">)
<br />{
<br />    if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)) {
<br />        throw new </span><span class="default">InvalidArgumentException</span><span class="keyword">(</span><span class="string">'First parameter must be an array'</span><span class="keyword">);
<br />    }
<br />
<br />    </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, function(&amp;</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$joinUsing</span><span class="keyword">) {
<br />        </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$key </span><span class="keyword">. </span><span class="default">$joinUsing </span><span class="keyword">. </span><span class="default">$value</span><span class="keyword">;
<br />    }, </span><span class="default">$glue</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">$myName </span><span class="keyword">= </span><span class="string">'Matthew Purdon'</span><span class="keyword">;
<br /></span><span class="default">$myEmail </span><span class="keyword">= </span><span class="string">'matthew@example.com'</span><span class="keyword">;
<br /></span><span class="default">$from </span><span class="keyword">= </span><span class="string">"</span><span class="default">$myName</span><span class="string"> &lt;</span><span class="default">$myEmail</span><span class="string">&gt;"</span><span class="keyword">;
<br />
<br /></span><span class="default">$headers</span><span class="keyword">[</span><span class="string">'From'</span><span class="keyword">] = </span><span class="default">$from</span><span class="keyword">;
<br /></span><span class="default">$headers</span><span class="keyword">[</span><span class="string">'Reply-To'</span><span class="keyword">] = </span><span class="default">$from</span><span class="keyword">;
<br /></span><span class="default">$headers</span><span class="keyword">[</span><span class="string">'Return-path'</span><span class="keyword">] = </span><span class="string">"&lt;</span><span class="default">$myEmail</span><span class="string">&gt;"</span><span class="keyword">;
<br /></span><span class="default">$headers</span><span class="keyword">[</span><span class="string">'X-Mailer'</span><span class="keyword">] = </span><span class="string">"PHP" </span><span class="keyword">. </span><span class="default">phpversion</span><span class="keyword">() . </span><span class="string">""</span><span class="keyword">;
<br /></span><span class="default">$headers</span><span class="keyword">[</span><span class="string">'Content-Type'</span><span class="keyword">] = </span><span class="string">'text/plain; charset="UTF-8"'</span><span class="keyword">;
<br />
<br /></span><span class="default">zip</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">);
<br />
<br /></span><span class="default">$headers </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$headers</span><span class="keyword">);
<br /></span><span class="default">$headers </span><span class="keyword">.= </span><span class="string">"\n"</span><span class="keyword">;
<br />
<br />echo </span><span class="default">$headers</span><span class="keyword">;
<br />
<br /></span><span class="comment">/*
<br />From: Matthew Purdon &lt;matthew@example.com&gt;
<br />Reply-To: Matthew Purdon &lt;matthew@example.com&gt;
<br />Return-path: &lt;matthew@example.com&gt;
<br />X-Mailer: PHP5.3.2
<br />Content-Type: text/plain; charset="UTF-8"
<br />*/
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112266">  <div class="votes">
    <div id="Vu112266">
    <a href="/manual/vote-note.php?id=112266&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112266">
    <a href="/manual/vote-note.php?id=112266&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112266" title="61% like this...">
    3
    </div>
  </div>
  <a href="#112266" class="name">
  <strong class="user"><em>brian at access9 dot net</em></strong></a><a class="genanchor" href="#112266"> &para;</a><div class="date" title="2013-05-24 10:03"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112266">
<div class="phpcode"><code><span class="html">array_walk does not work on SplFixedArray objects:<br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= new </span><span class="default">SplFixedArray</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">'test_1'</span><span class="keyword">;<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="string">'test_2'</span><span class="keyword">;<br /><br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, function(&amp;</span><span class="default">$val</span><span class="keyword">){<br />    </span><span class="default">$val </span><span class="keyword">.= </span><span class="string">'__'</span><span class="keyword">;<br />    return </span><span class="default">$val</span><span class="keyword">;<br />});<br />foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$a</span><span class="keyword">) {<br />    echo </span><span class="string">"</span><span class="default">$a</span><span class="string">\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />result is:<br />test_1<br />test_2</span></code></div>
  </div>
 </div>
  <div class="note" id="87262">  <div class="votes">
    <div id="Vu87262">
    <a href="/manual/vote-note.php?id=87262&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87262">
    <a href="/manual/vote-note.php?id=87262&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87262" title="60% like this...">
    3
    </div>
  </div>
  <a href="#87262" class="name">
  <strong class="user"><em>jab_creations_-at_-yahoo_-dot-_com</em></strong></a><a class="genanchor" href="#87262"> &para;</a><div class="date" title="2008-11-26 04:08"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87262">
<div class="phpcode"><code><span class="html">Unfortunately I spent a lot of time trying to permanently apply the effects of a function to an array using the array_walk function when instead array_map was what I wanted. Here is a very simple though effective example for those who may be getting overly frustrated with this function...<br /><br /><span class="default">&lt;?php<br />$fruits </span><span class="keyword">= array(</span><span class="string">"Lemony &amp; Fresh"</span><span class="keyword">,</span><span class="string">"Orange Twist"</span><span class="keyword">,</span><span class="string">"Apple Juice"</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$fruits</span><span class="keyword">);<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /><br />function </span><span class="default">name_base</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)<br />{<br /> </span><span class="default">$name2 </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="string">"_"</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">);<br /> </span><span class="default">$name3 </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"&amp;"</span><span class="keyword">, </span><span class="string">"and"</span><span class="keyword">, </span><span class="default">$name2</span><span class="keyword">);<br /> </span><span class="default">$name4 </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$name3</span><span class="keyword">);<br /> echo </span><span class="default">$name4</span><span class="keyword">.</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /> return </span><span class="default">$name4</span><span class="keyword">;<br />}<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">$test </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'name_base'</span><span class="keyword">, </span><span class="default">$fruits</span><span class="keyword">);<br /></span><span class="default">$fruits_fixed </span><span class="keyword">= </span><span class="default">$test</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$fruits_fixed</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95437">  <div class="votes">
    <div id="Vu95437">
    <a href="/manual/vote-note.php?id=95437&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95437">
    <a href="/manual/vote-note.php?id=95437&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95437" title="59% like this...">
    4
    </div>
  </div>
  <a href="#95437" class="name">
  <strong class="user"><em>arekandrei at yandex dot ru</em></strong></a><a class="genanchor" href="#95437"> &para;</a><div class="date" title="2010-01-03 07:30"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95437">
<div class="phpcode"><code><span class="html">You can use lambda function as a second parameter:<br /><br /><span class="default">&lt;?php<br />array_walk</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">, function(&amp;</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">){<br />    </span><span class="comment">// if you want to change array values then "&amp;" before the $value is mandatory.<br /></span><span class="keyword">});<br /></span><span class="default">?&gt;<br /></span><br />Example (multiply positive values by two):<br /><br /><span class="default">&lt;?php<br />$myArray </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);<br /><br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">, function(&amp;</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">){<br />    if (</span><span class="default">$value </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) </span><span class="default">$value </span><span class="keyword">*= </span><span class="default">2</span><span class="keyword">;<br />});<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102456">  <div class="votes">
    <div id="Vu102456">
    <a href="/manual/vote-note.php?id=102456&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102456">
    <a href="/manual/vote-note.php?id=102456&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102456" title="56% like this...">
    3
    </div>
  </div>
  <a href="#102456" class="name">
  <strong class="user"><em>http://alex.moutonking.com/wordpress</em></strong></a><a class="genanchor" href="#102456"> &para;</a><div class="date" title="2011-02-15 10:49"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102456">
<div class="phpcode"><code><span class="html">For completeness one has to mention the possibility of using this function with PHP 5.3 closures:
<br />
<br /><span class="default">&lt;?php
<br />$names </span><span class="keyword">= array(</span><span class="string">"D\'Artagnan"</span><span class="keyword">, </span><span class="string">"Aramis"</span><span class="keyword">, </span><span class="string">"Portos"</span><span class="keyword">);
<br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$names</span><span class="keyword">, function(&amp;</span><span class="default">$n</span><span class="keyword">) {
<br />  </span><span class="default">$n </span><span class="keyword">= </span><span class="default">stripslashes</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">);
<br />});
<br /></span><span class="default">?&gt;
<br /></span>
<br />The trap with array_walk being it doesn't return the array, instead it's modified by reference.</span></code></div>
  </div>
 </div>
  <div class="note" id="106785">  <div class="votes">
    <div id="Vu106785">
    <a href="/manual/vote-note.php?id=106785&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106785">
    <a href="/manual/vote-note.php?id=106785&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106785" title="55% like this...">
    3
    </div>
  </div>
  <a href="#106785" class="name">
  <strong class="user"><em>manuscle at gmail dot com</em></strong></a><a class="genanchor" href="#106785"> &para;</a><div class="date" title="2011-12-06 07:16"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106785">
<div class="phpcode"><code><span class="html">example with closures, checking and deleting value in array:<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= array(</span><span class="string">'foo' </span><span class="keyword">=&gt; </span><span class="string">'bar'</span><span class="keyword">, </span><span class="string">'baz' </span><span class="keyword">=&gt; </span><span class="string">'bat'</span><span class="keyword">);<br /><br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, function(</span><span class="default">$val</span><span class="keyword">,</span><span class="default">$key</span><span class="keyword">) use(&amp;</span><span class="default">$array</span><span class="keyword">){ <br />    if (</span><span class="default">$val </span><span class="keyword">== </span><span class="string">'bar'</span><span class="keyword">) { <br />        unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    }<br />});<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118570">  <div class="votes">
    <div id="Vu118570">
    <a href="/manual/vote-note.php?id=118570&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118570">
    <a href="/manual/vote-note.php?id=118570&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118570" title="54% like this...">
    1
    </div>
  </div>
  <a href="#118570" class="name">
  <strong class="user"><em>fred</em></strong></a><a class="genanchor" href="#118570"> &para;</a><div class="date" title="2015-12-30 09:01"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118570">
<div class="phpcode"><code><span class="html">Correction for the speed test from zlobnygrif.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Test results<br /></span><span class="default">$array1 </span><span class="keyword">= </span><span class="default">test</span><span class="keyword">(</span><span class="string">'array_walk'</span><span class="keyword">);<br /></span><span class="default">$array2 </span><span class="keyword">= </span><span class="default">test</span><span class="keyword">(</span><span class="string">'array_walk_list_each'</span><span class="keyword">);<br /></span><span class="default">$array3 </span><span class="keyword">= </span><span class="default">test</span><span class="keyword">(</span><span class="string">'array_walk_foreach1'</span><span class="keyword">);<br /></span><span class="default">$array4 </span><span class="keyword">= </span><span class="default">test</span><span class="keyword">(</span><span class="string">'array_walk_foreach2'</span><span class="keyword">);<br /><br /></span><span class="comment">// Check arrays for equal<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$array1 </span><span class="keyword">== </span><span class="default">$array2</span><span class="keyword">, </span><span class="default">$array1 </span><span class="keyword">== </span><span class="default">$array3</span><span class="keyword">, </span><span class="default">$array1 </span><span class="keyword">== </span><span class="default">$array4</span><span class="keyword">);<br /><br /></span><span class="comment">// Test function 1<br /></span><span class="keyword">function </span><span class="default">array_walk_list_each</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$function</span><span class="keyword">, </span><span class="default">$userData </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />   </span><span class="comment">/* make sure we walk the array each time */<br />    </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    while ( list(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) )<br />        </span><span class="default">$function</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$userData</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// Test function 2<br /></span><span class="keyword">function </span><span class="default">array_walk_foreach1</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$function</span><span class="keyword">, </span><span class="default">$userData </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; &amp;</span><span class="default">$value </span><span class="keyword">)<br />        </span><span class="default">$function</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$userData</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// Test function 3<br /></span><span class="keyword">function </span><span class="default">array_walk_foreach2</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$function</span><span class="keyword">, </span><span class="default">$userData </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">)<br />        </span><span class="default">$function</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$userData</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">some_function</span><span class="keyword">(&amp;</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$userData</span><span class="keyword">) {<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="string">"</span><span class="default">$key</span><span class="string"> =&gt; </span><span class="default">$userData</span><span class="string">"</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">test</span><span class="keyword">(</span><span class="default">$function</span><span class="keyword">, </span><span class="default">$count </span><span class="keyword">= </span><span class="default">10000</span><span class="keyword">, </span><span class="default">$arrayElements </span><span class="keyword">= </span><span class="default">1000</span><span class="keyword">) {<br />    echo </span><span class="default">$function</span><span class="keyword">, </span><span class="string">' ... '</span><span class="keyword">;<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$arrayElements</span><span class="keyword">, </span><span class="string">"some text value"</span><span class="keyword">);<br />   <br />    </span><span class="default">$timer </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />    for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; ++</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; )<br />        </span><span class="comment">/* change data for each $i */<br />        </span><span class="default">$function</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="string">'some_function'</span><span class="keyword">, </span><span class="string">'some user data ' </span><span class="keyword">. </span><span class="default">$i</span><span class="keyword">);<br />    </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%.3f sec\n"</span><span class="keyword">, </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$timer</span><span class="keyword">);<br />   <br />    return </span><span class="default">$array</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101211">  <div class="votes">
    <div id="Vu101211">
    <a href="/manual/vote-note.php?id=101211&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101211">
    <a href="/manual/vote-note.php?id=101211&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101211" title="54% like this...">
    1
    </div>
  </div>
  <a href="#101211" class="name">
  <strong class="user"><em>op_adept at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#101211"> &para;</a><div class="date" title="2010-12-02 03:20"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101211">
<div class="phpcode"><code><span class="html">Prefix array values with keys and retrieve as a glued string, the original array remains unchanged. I used this to create some SQL queries from arrays.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_implode_prefix</span><span class="keyword">(</span><span class="default">$outer_glue</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$inner_glue</span><span class="keyword">, </span><span class="default">$prefix</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">){<br />    </span><span class="default">array_walk</span><span class="keyword">( </span><span class="default">$arr </span><span class="keyword">, </span><span class="string">"prefix"</span><span class="keyword">, array(</span><span class="default">$inner_glue</span><span class="keyword">, </span><span class="default">$prefix</span><span class="keyword">) );<br />    return </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$outer_glue</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">prefix</span><span class="keyword">(&amp;</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, array </span><span class="default">$additional</span><span class="keyword">){<br />    </span><span class="default">$inner_glue </span><span class="keyword">= </span><span class="default">$additional</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    </span><span class="default">$prefix </span><span class="keyword">= isset(</span><span class="default">$additional</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])? </span><span class="default">$additional</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] : </span><span class="default">false</span><span class="keyword">;<br />    if(</span><span class="default">$prefix </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) </span><span class="default">$prefix </span><span class="keyword">= </span><span class="default">$key</span><span class="keyword">;<br /><br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$prefix</span><span class="keyword">.</span><span class="default">$inner_glue</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//Example 1:<br /></span><span class="default">$order_by </span><span class="keyword">= array(</span><span class="string">"3"</span><span class="keyword">=&gt;</span><span class="string">"ASC"</span><span class="keyword">, </span><span class="string">"2"</span><span class="keyword">=&gt;</span><span class="string">"DESC"</span><span class="keyword">, </span><span class="string">"7"</span><span class="keyword">=&gt;</span><span class="string">"ASC"</span><span class="keyword">);<br />echo </span><span class="default">array_implode_prefix</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="default">$order_by</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">);<br /></span><span class="comment">//Output: 3 ASC,2 DESC,7 ASC<br /><br />//Example 2:<br /></span><span class="default">$columns </span><span class="keyword">= array(</span><span class="string">"product_id"</span><span class="keyword">, </span><span class="string">"category_id"</span><span class="keyword">, </span><span class="string">"name"</span><span class="keyword">, </span><span class="string">"description"</span><span class="keyword">);<br /></span><span class="default">$table </span><span class="keyword">= </span><span class="string">"product"</span><span class="keyword">;<br /><br />echo </span><span class="default">array_implode_prefix</span><span class="keyword">(</span><span class="string">", "</span><span class="keyword">, </span><span class="default">$columns</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">, </span><span class="default">$table</span><span class="keyword">);<br /></span><span class="comment">//Output:product.product_id, product.category_id, product.name, product.description <br /><br />//Example 3 (function prefix) won't really be used on its own<br /></span><span class="default">$pre</span><span class="keyword">= </span><span class="string">"vacation"</span><span class="keyword">;<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="string">"lalaland"</span><span class="keyword">;<br /></span><span class="default">prefix</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$pre</span><span class="keyword">, array(</span><span class="string">"."</span><span class="keyword">));<br />echo </span><span class="default">$value</span><span class="keyword">;<br /><br /></span><span class="comment">//Output: vacation.lalaland<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129138">  <div class="votes">
    <div id="Vu129138">
    <a href="/manual/vote-note.php?id=129138&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129138">
    <a href="/manual/vote-note.php?id=129138&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129138" title="100% like this...">
    2
    </div>
  </div>
  <a href="#129138" class="name">
  <strong class="user"><em>theking2(at)king.ma</em></strong></a><a class="genanchor" href="#129138"> &para;</a><div class="date" title="2024-01-03 09:47"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129138">
<div class="phpcode"><code><span class="html">This function can be used to add the values in one array to another:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="comment">// example code<br /></span><span class="default">$a </span><span class="keyword">= [ </span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">];<br /></span><span class="default">$c </span><span class="keyword">= [</span><span class="default">10</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">,</span><span class="default">40</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">,</span><span class="default">60</span><span class="keyword">];<br /><br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,<br />  function(&amp;</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">) { </span><span class="default">$item </span><span class="keyword">+= </span><span class="default">$y</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];},<br />  </span><span class="default">$c<br /></span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /><br /></span><span class="comment">// result<br /><br /></span><span class="keyword">Array<br />(<br />    [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">11<br />    </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">22<br />    </span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] =&gt; </span><span class="default">33<br />    </span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] =&gt; </span><span class="default">44<br />    </span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] =&gt; </span><span class="default">55<br />    </span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] =&gt; </span><span class="default">66<br /></span><span class="keyword">)</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103056">  <div class="votes">
    <div id="Vu103056">
    <a href="/manual/vote-note.php?id=103056&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103056">
    <a href="/manual/vote-note.php?id=103056&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103056" title="51% like this...">
    2
    </div>
  </div>
  <a href="#103056" class="name">
  <strong class="user"><em>@jfredys</em></strong></a><a class="genanchor" href="#103056"> &para;</a><div class="date" title="2011-03-22 05:07"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103056">
<div class="phpcode"><code><span class="html">I was looking for trimming all the elements in an array, I found this as the simplest solution:
<br />
<br /><span class="default">&lt;?php
<br />array_walk</span><span class="keyword">(</span><span class="default">$ids</span><span class="keyword">, </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'&amp;$val'</span><span class="keyword">, </span><span class="string">'$val = trim($val);'</span><span class="keyword">));
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127143">  <div class="votes">
    <div id="Vu127143">
    <a href="/manual/vote-note.php?id=127143&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127143">
    <a href="/manual/vote-note.php?id=127143&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127143" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127143" class="name">
  <strong class="user"><em>christopher at crmldnrs dot com</em></strong></a><a class="genanchor" href="#127143"> &para;</a><div class="date" title="2022-05-28 11:34"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127143">
<div class="phpcode"><code><span class="html">public function big_endian_array_walk(array $array, $callback) {<br />      end($array);<br />      for($i=sizeof($array);$i&gt;0;$i--) {<br />        $key = key($array);<br />        $value = array_pop($array);<br />        if(preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $value)) {<br />          call_user_func_array($callback, [$value, $key]);<br />        }<br />      }<br />    }<br /><br />I just wanted to walk from the end to the beginning.</span></code></div>
  </div>
 </div>
  <div class="note" id="127144">  <div class="votes">
    <div id="Vu127144">
    <a href="/manual/vote-note.php?id=127144&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127144">
    <a href="/manual/vote-note.php?id=127144&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127144" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#127144" class="name">
  <strong class="user"><em>christopher at crmldnrs dot com</em></strong></a><a class="genanchor" href="#127144"> &para;</a><div class="date" title="2022-05-28 11:36"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127144">
<div class="phpcode"><code><span class="html">public function big_endian_array_walk(array $array, $callback) {<br />      end($array);<br />      for($i=sizeof($array);$i&gt;0;$i--) {<br />        $key = key($array);<br />        $value = array_pop($array);<br />        if(preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $value)) {<br />          call_user_func_array($callback, [$value, $key]);<br />        }<br />      }<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="120835">  <div class="votes">
    <div id="Vu120835">
    <a href="/manual/vote-note.php?id=120835&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120835">
    <a href="/manual/vote-note.php?id=120835&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120835" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120835" class="name">
  <strong class="user"><em>vrrivaro at YESIUSEGMAIL dot gmail dot SO dot com</em></strong></a><a class="genanchor" href="#120835"> &para;</a><div class="date" title="2017-03-18 02:40"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120835">
<div class="phpcode"><code><span class="html">The output of the example is only correct if viewed through a web browser. If you pass it through to PHP-CLI, you will get to see the additional HTML line breaks, however.</span></code></div>
  </div>
 </div>
  <div class="note" id="86712">  <div class="votes">
    <div id="Vu86712">
    <a href="/manual/vote-note.php?id=86712&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86712">
    <a href="/manual/vote-note.php?id=86712&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86712" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86712" class="name">
  <strong class="user"><em>diyism</em></strong></a><a class="genanchor" href="#86712"> &para;</a><div class="date" title="2008-10-30 11:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86712">
<div class="phpcode"><code><span class="html">When i pass the third parameter by reference in php5.2.5,<br />happened this: Warning: Call-time pass-by-reference has been deprecated - argument passed by value...<br /><br />And to set allow_call_time_pass_reference to true in php.ini won't work, according to <a href="http://bugs.php.net/bug.php?id=19699" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=19699</a>   thus to work around:<br /><br /><span class="default">&lt;?php<br />array_walk</span><span class="keyword">(</span><span class="default">$arrChnOut</span><span class="keyword">, </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'&amp;$v, $k, $arr_rtn'</span><span class="keyword">, </span><span class="string">'if ($k{0}!="_") {$arr_rtn[0]["_".$v[\'ID\']]=$v; unset($arr_rtn[0][$k]);}'</span><span class="keyword">), array(&amp;</span><span class="default">$arrChnOut</span><span class="keyword">)); <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111779">  <div class="votes">
    <div id="Vu111779">
    <a href="/manual/vote-note.php?id=111779&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111779">
    <a href="/manual/vote-note.php?id=111779&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111779" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#111779" class="name">
  <strong class="user"><em>gold[at]evolved.net.nz</em></strong></a><a class="genanchor" href="#111779"> &para;</a><div class="date" title="2013-03-27 10:08"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111779">
<div class="phpcode"><code><span class="html">For all those people trying to shoe-horn trim() into array_walk() and have found all these tricks to work around the issue with array_walk() passing 2 parameters to the callback...<br /><br />Check out array_map().<br /><br /><a href="http://php.net/array_map" rel="nofollow" target="_blank">http://php.net/array_map</a><br /><br />It's all sorts of win.<br /><br />For the record. I'm one of these people and after 15 years of php development I'm pleased to say that there's still things I'm learning. :)  I just found out about array_map() myself...</span></code></div>
  </div>
 </div>
  <div class="note" id="110933">  <div class="votes">
    <div id="Vu110933">
    <a href="/manual/vote-note.php?id=110933&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110933">
    <a href="/manual/vote-note.php?id=110933&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110933" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#110933" class="name">
  <strong class="user"><em>espertalhao04 at hotmail dot com</em></strong></a><a class="genanchor" href="#110933"> &para;</a><div class="date" title="2012-12-26 11:35"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110933">
<div class="phpcode"><code><span class="html">here is a simple and yet easy to use implementation of this function.<br />the 'original' function has the problem that you can't unset a value.<br />with my function, YOU CAN!<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_walk_protected</span><span class="keyword">(&amp;</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$s</span><span class="keyword">,</span><span class="default">$p</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">)<br />{<br />    if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">)||!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">))<br />    {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    <br />    foreach(</span><span class="default">$a </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,array(&amp;</span><span class="default">$a</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">],</span><span class="default">$k</span><span class="keyword">,</span><span class="default">$p</span><span class="keyword">))===</span><span class="default">false</span><span class="keyword">)<br />        {<br />            unset(</span><span class="default">$a</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);<br />        }<br />    }<br />}<br /><br />function </span><span class="default">get_name</span><span class="keyword">(&amp;</span><span class="default">$e</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$p</span><span class="keyword">)<br />{<br />    echo </span><span class="string">"</span><span class="default">$i</span><span class="string">: </span><span class="default">$e</span><span class="string">&lt;br&gt;"</span><span class="keyword">;<br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$m</span><span class="keyword">=array(</span><span class="string">'d'</span><span class="keyword">=&gt;</span><span class="string">'33'</span><span class="keyword">,</span><span class="string">'Y'</span><span class="keyword">=&gt;</span><span class="default">55</span><span class="keyword">);<br /><br /></span><span class="default">array_walk_protected</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">,</span><span class="string">'get_name'</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">); </span><span class="comment">//returns array(0) { }<br /></span><span class="default">?&gt;<br /></span><br />i called it array_walk_protected because it is protected against the unexpected behavior of unsetting the value with the original function.<br /><br />to delete an element, simply return false!!!<br />nothing else is needed!<br />unsetting $e, under your created function, will keep the same array as-is, with no changes!<br /><br />by the way, the function returns false if $a is not array or $s is not a string!<br /><br />limitations: it only can run user defined functions.<br />i hope you like it!</span></code></div>
  </div>
 </div>
  <div class="note" id="126234">  <div class="votes">
    <div id="Vu126234">
    <a href="/manual/vote-note.php?id=126234&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126234">
    <a href="/manual/vote-note.php?id=126234&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126234" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#126234" class="name">
  <strong class="user"><em>emre</em></strong></a><a class="genanchor" href="#126234"> &para;</a><div class="date" title="2021-07-12 10:07"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126234">
<div class="phpcode"><code><span class="html">You can change the key or value with array_walk if you use the temporal returned array in global inside the function. For example:<br /><br />$array = ['a'=&gt;10, 'b'=&gt;20];<br />$sequence = array ();<br /><br />$newArray = array_values(array_walk($array, 'fn'));<br /><br />function fn(&amp;$val,$key){<br /><br />global $sequence;<br /><br />$sequence [] = $val;<br /><br />}<br /><br />No need to concern about the place of the internal pointer for the baby array. You have now rewinded, 0 based new array, string key one instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="125141">  <div class="votes">
    <div id="Vu125141">
    <a href="/manual/vote-note.php?id=125141&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125141">
    <a href="/manual/vote-note.php?id=125141&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125141" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#125141" class="name">
  <strong class="user"><em>mystral77 at gmail dot com</em></strong></a><a class="genanchor" href="#125141"> &para;</a><div class="date" title="2020-06-24 02:54"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125141">
<div class="phpcode"><code><span class="html">Hello,<br /><br />If you want to add values with same key from two arrays :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">add</span><span class="keyword">(&amp;</span><span class="default">$item</span><span class="keyword">,</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$search</span><span class="keyword">) {<br />    </span><span class="default">$item </span><span class="keyword">+= (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$search</span><span class="keyword">))?((isset(</span><span class="default">$search</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]))?</span><span class="default">$search</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]:</span><span class="default">0</span><span class="keyword">):</span><span class="default">0</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= [</span><span class="string">"orange" </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">"banana" </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">, </span><span class="string">"apple" </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">];<br /></span><span class="default">$b </span><span class="keyword">= [</span><span class="string">"orange" </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">"apple" </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">];<br /><br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">,</span><span class="string">"add"</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);<br /><br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">).</span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />This will output:<br /><br />"orange" =&gt; 3,<br />"banana" =&gt; 3,<br />"apple" =&gt; 5</span></code></div>
  </div>
 </div>
  <div class="note" id="71901">  <div class="votes">
    <div id="Vu71901">
    <a href="/manual/vote-note.php?id=71901&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71901">
    <a href="/manual/vote-note.php?id=71901&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71901" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#71901" class="name">
  <strong class="user"><em>jerk at yoosic dot de</em></strong></a><a class="genanchor" href="#71901"> &para;</a><div class="date" title="2006-12-21 08:05"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71901">
<div class="phpcode"><code><span class="html">if you want to modify every value of an multidimensional array use this function used here:<br /><br /><span class="default">&lt;?php<br /><br />$array </span><span class="keyword">= array (</span><span class="default">1</span><span class="keyword">=&gt;</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">=&gt; array(</span><span class="default">1</span><span class="keyword">=&gt;</span><span class="default">11</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">=&gt;</span><span class="default">12</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">=&gt;</span><span class="default">13</span><span class="keyword">));<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="string">"test"</span><span class="keyword">;<br /><br />function </span><span class="default">modarr</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">) {<br />        foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$arr</span><span class="keyword">) {<br />                if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">)) </span><span class="default">$res</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">modarr</span><span class="keyword">(&amp;</span><span class="default">$arr</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />                </span><span class="comment">// modification function here<br />                </span><span class="keyword">else </span><span class="default">$res</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$arr</span><span class="keyword">.</span><span class="default">$text</span><span class="keyword">;<br />                }<br />        return </span><span class="default">$res</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$erg </span><span class="keyword">= </span><span class="default">modarr</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$erg</span><span class="keyword">);  <br /><br /></span><span class="default">?&gt;<br /></span><br />result will be_<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">Array ( [</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">1test </span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] =&gt; </span><span class="default">2test </span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] =&gt; Array ( [</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">11test </span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] =&gt; </span><span class="default">12test </span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] =&gt; </span><span class="default">13test </span><span class="keyword">) )<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87042">  <div class="votes">
    <div id="Vu87042">
    <a href="/manual/vote-note.php?id=87042&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87042">
    <a href="/manual/vote-note.php?id=87042&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87042" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#87042" class="name">
  <strong class="user"><em>peterzuzek AT gmail DOT com</em></strong></a><a class="genanchor" href="#87042"> &para;</a><div class="date" title="2008-11-16 09:04"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87042">
<div class="phpcode"><code><span class="html">I had some problems using this function - it didn't want to apply PHP-defined functions. So I decided to write my own - here it is. I had to use some generic-programming skills, didn't really checked the speed (I think it could be slow)... I believe it could be much better, but I don't know, how - well, I guess multiple array support and recursion would be nice. So?<br /><br />Prototype:<br />bool arrayWalk(array &amp;$arry, callback $callback, mixed $params=false)<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">arrayWalk</span><span class="keyword">(&amp;</span><span class="default">$arry</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {<br />        </span><span class="default">$P</span><span class="keyword">=array(</span><span class="string">""</span><span class="keyword">); </span><span class="comment">// parameters<br />        </span><span class="default">$a</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">; </span><span class="comment">// arguement string :)<br /><br />        </span><span class="keyword">if(</span><span class="default">$params </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) { </span><span class="comment">// add parameters<br />            </span><span class="keyword">if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">)) { </span><span class="comment">// multiple additional parameters<br />                </span><span class="keyword">foreach(</span><span class="default">$params </span><span class="keyword">as </span><span class="default">$par</span><span class="keyword">)<br />                    { </span><span class="default">$P</span><span class="keyword">[]=</span><span class="default">$par</span><span class="keyword">; }<br />            }<br />            else </span><span class="comment">// just one additional<br />                </span><span class="keyword">{ </span><span class="default">$P</span><span class="keyword">[]=</span><span class="default">$params</span><span class="keyword">; }<br />        }<br /><br />        for( </span><span class="comment">// create the arguement string<br />            </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; isset(</span><span class="default">$P</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]); ++</span><span class="default">$i<br />        </span><span class="keyword">)<br />            { </span><span class="default">$a</span><span class="keyword">.=</span><span class="string">'$'</span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">97</span><span class="keyword">).</span><span class="string">', '</span><span class="keyword">; } </span><span class="comment">// random argument names<br /><br />        </span><span class="default">$a</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">2</span><span class="keyword">); </span><span class="comment">// to get rid of the last comma and two spaces<br /><br />        </span><span class="default">$func</span><span class="keyword">=</span><span class="default">create_function</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="string">'return '</span><span class="keyword">.</span><span class="default">$callback</span><span class="keyword">.</span><span class="string">'('</span><span class="keyword">.</span><span class="default">$a</span><span class="keyword">.</span><span class="string">');'</span><span class="keyword">); </span><span class="comment">// the generic function<br /><br />        </span><span class="keyword">if(</span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">)) {<br />            for( </span><span class="comment">// cycle through array<br />                </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; isset(</span><span class="default">$arry</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]); ++</span><span class="default">$i<br />            </span><span class="keyword">) {<br />                </span><span class="default">$P</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]=</span><span class="default">$arry</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]; </span><span class="comment">// first element must be the first argument - array value<br />                </span><span class="default">$arry</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">$P</span><span class="keyword">); </span><span class="comment">// assign the new value obtained by the generic function<br />            </span><span class="keyword">}<br />        }<br />        else<br />            { return </span><span class="default">false</span><span class="keyword">; } </span><span class="comment">// failure - function not callable<br /><br />        </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// success!<br />    </span><span class="keyword">} </span><span class="comment">// arrayWalk()<br /><br /></span><span class="default">?&gt;<br /></span><br />One big problem I've noticed so far - for example, if you wanted to use str_replace on the array, you'd fail - simply because of the arguement order of str_replace, where the string modified is the third arguement, not the first as arrayWalk requires.<br /><br />So, still some work left...</span></code></div>
  </div>
 </div>
  <div class="note" id="53270">  <div class="votes">
    <div id="Vu53270">
    <a href="/manual/vote-note.php?id=53270&amp;page=function.array-walk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53270">
    <a href="/manual/vote-note.php?id=53270&amp;page=function.array-walk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53270" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#53270" class="name">
  <strong class="user"><em>el_porno at web dot de</em></strong></a><a class="genanchor" href="#53270"> &para;</a><div class="date" title="2005-05-27 03:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53270">
<div class="phpcode"><code><span class="html">You want to get rid of the whitespaces users add in your form fields...?<br />Simply use...:<br /><br />class SomeVeryImportantClass<br />{<br />...<br />    public function mungeFormData(&amp;$data)<br />    {<br />        array_walk($data, array($this, 'munge'));<br />    }<br /><br />    private function munge(&amp;$value, &amp;$key)<br />    {<br />        if(is_array($value))<br />        {<br />            $this-&gt;mungeFormData($value);<br />        }<br />        else<br />        {<br />            $value = trim($value);<br />        }<br />    }<br />...<br />}<br /><br />so...<br />$obj = new SomeVeryImportantClass;<br />$obj-&gt;mungeFormData($_POST);<br />___<br />eNc</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-walk&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-walk.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
