<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: define - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.define.php">
 <link rel="shorturl" href="https://www.php.net/define">
 <link rel="alternate" href="https://www.php.net/define" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.misc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.constant.php">
 <link rel="next" href="https://www.php.net/manual/en/function.defined.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.define.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.define.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.define.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.define.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.define.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.define.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.define.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.define.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.define.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.define.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.define.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Defines a named constant" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: define - Manual" />
<meta name="twitter:description" content="Defines a named constant" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: define - Manual" />
<meta itemprop="description" content="Defines a named constant" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Defines a named constant" />

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
        <a href="function.defined.php">
          defined &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.constant.php">
          &laquo; constant        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.misc.php'>Misc.</a></li>      <li><a href='ref.misc.php'>Misc. Functions</a></li>      </ul>
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
            <option value='en/function.define.php' selected="selected">English</option>
            <option value='de/function.define.php'>German</option>
            <option value='es/function.define.php'>Spanish</option>
            <option value='fr/function.define.php'>French</option>
            <option value='it/function.define.php'>Italian</option>
            <option value='ja/function.define.php'>Japanese</option>
            <option value='pt_BR/function.define.php'>Brazilian Portuguese</option>
            <option value='ru/function.define.php'>Russian</option>
            <option value='tr/function.define.php'>Turkish</option>
            <option value='uk/function.define.php'>Ukrainian</option>
            <option value='zh/function.define.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.define" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">define</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">define</span> &mdash; <span class="dc-title">Defines a named constant</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.define-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>define</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$constant_name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$case_insensitive</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Defines a named constant at runtime.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.define-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">constant_name</code></dt>
     <dd>
      <p class="para">
       The name of the constant.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        It is possible to <span class="function"><strong>define()</strong></span> constants with reserved or
        even invalid names, whose value can (only) be retrieved with
        <span class="function"><a href="function.constant.php" class="function">constant()</a></span>. However, doing so is not recommended.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The value of the constant.
      </p>
      <div class="warning"><strong class="warning">Warning</strong>
       <p class="para">
        While it is possible to define <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> constants, it is
        not recommended and may cause unpredictable behavior.
       </p>
      </div>
     </dd>
    
    
     <dt><code class="parameter">case_insensitive</code></dt>
     <dd>
      <p class="para">
       If set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the constant will be defined case-insensitive. 
       The default behavior is case-sensitive; i.e. 
       <code class="literal">CONSTANT</code> and <code class="literal">Constant</code> represent
       different values.
      </p>
      <div class="warning"><strong class="warning">Warning</strong>
       <p class="simpara">
        Defining case-insensitive constants is deprecated as of PHP 7.3.0.
        As of PHP 8.0.0, only <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is an acceptable value, passing
        <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> will produce a warning.
       </p>
      </div>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        Case-insensitive constants are stored as lower-case.
       </p>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.define-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.define-changelog">
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
       <td>8.1.0</td>
       <td>
        <code class="parameter">value</code> can now be an object.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        Passing <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> to <code class="parameter">case_insensitive</code> now emits an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>. Passing <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is still allowed.
       </td>
      </tr>

      <tr>
       <td>7.3.0</td>
       <td>
        <code class="parameter">case_insensitive</code> has been deprecated and will be removed in version 8.0.0.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-function.define-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3739">
    <p><strong>Example #1 Defining Constants</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />define</span><span style="color: #007700">(</span><span style="color: #DD0000">"CONSTANT"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Hello world."</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">CONSTANT</span><span style="color: #007700">; </span><span style="color: #FF8000">// outputs "Hello world."<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">Constant</span><span style="color: #007700">; </span><span style="color: #FF8000">// outputs "Constant" and issues a notice.<br /><br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">"GREETING"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Hello you."</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">GREETING</span><span style="color: #007700">; </span><span style="color: #FF8000">// outputs "Hello you."<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">Greeting</span><span style="color: #007700">; </span><span style="color: #FF8000">// outputs "Hello you."<br /><br />// Works as of PHP 7<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'ANIMALS'</span><span style="color: #007700">, array(<br />    </span><span style="color: #DD0000">'dog'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'cat'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'bird'<br /></span><span style="color: #007700">));<br />echo </span><span style="color: #0000BB">ANIMALS</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]; </span><span style="color: #FF8000">// outputs "cat"<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-3740">
    <p><strong>Example #2 Constants with Reserved Names</strong></p>
    <div class="example-contents"><p>
     This example illustrates the <em>possibility</em> to define a
     constant with the same name as a
     <a href="language.constants.magic.php" class="link">magic constant</a>.
     Since the resulting behavior is obviously confusing, it is not recommended
     to do this in practise, though.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'__LINE__'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'__LINE__'</span><span style="color: #007700">, </span><span style="color: #DD0000">'test'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">constant</span><span style="color: #007700">(</span><span style="color: #DD0000">'__LINE__'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">__LINE__</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">bool(false)
bool(true)
string(4) &quot;test&quot;
int(5)</pre>
</div>
   </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.define-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.defined.php" class="function" rel="rdfs-seeAlso">defined()</a> - Checks whether a constant with the given name exists</span></li>
    <li><span class="function"><a href="function.constant.php" class="function" rel="rdfs-seeAlso">constant()</a> - Returns the value of a constant</span></li>
    <li>The section on <a href="language.constants.php" class="link">Constants</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/misc/functions/define.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.define%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.define&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.define.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116745">  <div class="votes">
    <div id="Vu116745">
    <a href="/manual/vote-note.php?id=116745&amp;page=function.define&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116745">
    <a href="/manual/vote-note.php?id=116745&amp;page=function.define&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116745" title="70% like this...">
    100
    </div>
  </div>
  <a href="#116745" class="name">
  <strong class="user"><em>ravenswd at gmail dot com</em></strong></a><a class="genanchor" href="#116745"> &para;</a><div class="date" title="2015-02-22 03:11"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116745">
<div class="phpcode"><code><span class="html">Be aware that if "Notice"-level error reporting is turned off, then trying to use a constant as a variable will result in it being interpreted as a string, if it has not been defined.<br /><br />I was working on a program which included a config file which contained:<br /><br /><span class="default">&lt;?php<br />define</span><span class="keyword">(</span><span class="string">'ENABLE_UPLOADS'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Since I wanted to remove the ability for uploads, I changed the file to read:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//define('ENABLE_UPLOADS', true);<br /></span><span class="default">?&gt;<br /></span><br />However, to my surprise, the program was still allowing uploads. Digging deeper into the code, I discovered this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if ( </span><span class="default">ENABLE_UPLOADS </span><span class="keyword">):<br /></span><span class="default">?&gt;<br /></span><br />Since 'ENABLE_UPLOADS' was not defined as a constant, PHP was interpreting its use as a string constant, which of course evaluates as True.</span></code></div>
  </div>
 </div>
  <div class="note" id="121201">  <div class="votes">
    <div id="Vu121201">
    <a href="/manual/vote-note.php?id=121201&amp;page=function.define&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121201">
    <a href="/manual/vote-note.php?id=121201&amp;page=function.define&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121201" title="68% like this...">
    27
    </div>
  </div>
  <a href="#121201" class="name">
  <strong class="user"><em>@SimoEast on Twitter</em></strong></a><a class="genanchor" href="#121201"> &para;</a><div class="date" title="2017-06-08 03:10"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121201">
<div class="phpcode"><code><span class="html">Not sure why the docs omit this, but when attempting to define() a constant that has already been defined, it will fail, trigger an E_NOTICE and the constant's value will remain as it was originally defined (with the new value ignored).<br /><br />(Guess that's why they're called "constants".)</span></code></div>
  </div>
 </div>
  <div class="note" id="90282">  <div class="votes">
    <div id="Vu90282">
    <a href="/manual/vote-note.php?id=90282&amp;page=function.define&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90282">
    <a href="/manual/vote-note.php?id=90282&amp;page=function.define&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90282" title="56% like this...">
    28
    </div>
  </div>
  <a href="#90282" class="name">
  <strong class="user"><em>danbettles at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#90282"> &para;</a><div class="date" title="2009-04-14 11:56"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90282">
<div class="phpcode"><code><span class="html">define() will define constants exactly as specified.  So, if you want to define a constant in a namespace, you will need to specify the namespace in your call to define(), even if you're calling define() from within a namespace.  The following examples will make it clear.<br /><br />The following code will define the constant "MESSAGE" in the global namespace (i.e. "\MESSAGE").<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">test</span><span class="keyword">;<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'MESSAGE'</span><span class="keyword">, </span><span class="string">'Hello world!'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The following code will define two constants in the "test" namespace.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">test</span><span class="keyword">;<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'test\HELLO'</span><span class="keyword">, </span><span class="string">'Hello world!'</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="default">__NAMESPACE__ </span><span class="keyword">. </span><span class="string">'\GOODBYE'</span><span class="keyword">, </span><span class="string">'Goodbye cruel world!'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120988">  <div class="votes">
    <div id="Vu120988">
    <a href="/manual/vote-note.php?id=120988&amp;page=function.define&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120988">
    <a href="/manual/vote-note.php?id=120988&amp;page=function.define&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120988" title="54% like this...">
    5
    </div>
  </div>
  <a href="#120988" class="name">
  <strong class="user"><em>Dale Landry</em></strong></a><a class="genanchor" href="#120988"> &para;</a><div class="date" title="2017-04-16 09:45"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120988">
<div class="phpcode"><code><span class="html">With php 7 you can now define arrays. <br /><br />consider the following code:<br /><span class="default">&lt;?php<br /><br />define</span><span class="keyword">( </span><span class="string">"EXPLENATIVES"</span><span class="keyword">, [</span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">"Foo Bar"</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">"Fehw Bahr"</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="string">"Foo Bahr"</span><span class="keyword">, </span><span class="default">4 </span><span class="keyword">=&gt; </span><span class="string">"Fooh Bar"</span><span class="keyword">, </span><span class="default">5 </span><span class="keyword">=&gt; </span><span class="string">"Fooh Bhar"</span><span class="keyword">, </span><span class="default">6 </span><span class="keyword">=&gt; </span><span class="string">"Foo Barr"</span><span class="keyword">, </span><span class="default">7 </span><span class="keyword">=&gt; </span><span class="string">"Foogh Bar"</span><span class="keyword">, </span><span class="default">8 </span><span class="keyword">=&gt; </span><span class="string">"Fehw Barr"</span><span class="keyword">, </span><span class="default">9 </span><span class="keyword">=&gt; </span><span class="string">"Fu bar"</span><span class="keyword">, </span><span class="default">10 </span><span class="keyword">=&gt; </span><span class="string">"Foo Bahr"</span><span class="keyword">, </span><span class="default">11 </span><span class="keyword">=&gt; </span><span class="string">"Phoo Bar"</span><span class="keyword">, </span><span class="default">12 </span><span class="keyword">=&gt; </span><span class="string">"Foo Bawr"</span><span class="keyword">, </span><span class="default">13 </span><span class="keyword">=&gt; </span><span class="string">"Phooh Baughr"</span><span class="keyword">, </span><span class="default">14 </span><span class="keyword">=&gt; </span><span class="string">"Foogan Bargan"</span><span class="keyword">, </span><span class="default">15 </span><span class="keyword">=&gt; </span><span class="string">"Foo Bahre"</span><span class="keyword">, </span><span class="default">16 </span><span class="keyword">=&gt; </span><span class="string">"Fu Bahar"</span><span class="keyword">, </span><span class="default">17 </span><span class="keyword">=&gt; </span><span class="string">"Fugh Bar"</span><span class="keyword">, </span><span class="default">18 </span><span class="keyword">=&gt; </span><span class="string">"Phou Baughr"</span><span class="keyword">]);<br /><br /></span><span class="comment">//set up define methods using mixed values; both array and non-array values<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"NAVBTNS"</span><span class="keyword">, [</span><span class="default">EXPLENATIVES</span><span class="keyword">, </span><span class="string">"Nouns"</span><span class="keyword">, </span><span class="string">"Verbs"</span><span class="keyword">, </span><span class="string">"Adjectives"</span><span class="keyword">]);<br /><br /></span><span class="comment">//function to create a dropdown menu using the EXPLENATIVES array $btn=EXPLENATIVES=assoc_array<br /><br /></span><span class="keyword">function </span><span class="default">construct_navbar_buttons</span><span class="keyword">(){<br />    <br />    </span><span class="default">$btns </span><span class="keyword">= </span><span class="string">'&lt;ul class="nav navbar-nav"&gt;'</span><span class="keyword">;<br />                        <br />    foreach(</span><span class="default">NAVBTNS </span><span class="keyword">as </span><span class="default">$button </span><span class="keyword">=&gt; </span><span class="default">$btn</span><span class="keyword">){<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$btn</span><span class="keyword">)){<br />            </span><span class="default">$btns </span><span class="keyword">.= </span><span class="string">'&lt;li class="dropdown"&gt;<br />                        &lt;a class="dropdown-toggle" data-toggle="dropdown" href="?id='</span><span class="keyword">.</span><span class="default">$btn</span><span class="keyword">.</span><span class="string">'"&gt;<br />                            &lt;i class="glyphicon glyphicon-user"&gt;&lt;/i&gt; You Dare Say? &lt;i class="glyphicon glyphicon-collapse-down"&gt;&lt;/i&gt;<br />                        &lt;/a&gt;<br />                        &lt;ul class="dropdown-menu dropdown-user"&gt;'</span><span class="keyword">;<br />            foreach(</span><span class="default">EXPLENATIVES </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$button</span><span class="keyword">){<br />                </span><span class="default">$btns </span><span class="keyword">.= </span><span class="string">'&lt;li&gt;&lt;a href="#"&gt;'</span><span class="keyword">.</span><span class="default">$button</span><span class="keyword">.</span><span class="string">'&lt;/a&gt;&lt;/li&gt;'</span><span class="keyword">;<br />            }<br />            </span><span class="default">$btns </span><span class="keyword">.= </span><span class="string">'&lt;/ul&gt;'</span><span class="keyword">;<br />        }else{    <br />            </span><span class="default">$btns </span><span class="keyword">.= </span><span class="string">'&lt;li&gt;&lt;a href="#"&gt;'</span><span class="keyword">.</span><span class="default">$btn</span><span class="keyword">.</span><span class="string">'&lt;/a&gt;&lt;/li&gt;'</span><span class="keyword">;<br />        }<br />    }<br />    <br />    </span><span class="default">$btns </span><span class="keyword">.= </span><span class="string">'&lt;/ul&gt;'</span><span class="keyword">;<br />    return </span><span class="default">$btns</span><span class="keyword">;<br />}            <br /><br /></span><span class="default">Love this </span><span class="keyword">new </span><span class="default">implementation</span><span class="keyword">!<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86514">  <div class="votes">
    <div id="Vu86514">
    <a href="/manual/vote-note.php?id=86514&amp;page=function.define&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86514">
    <a href="/manual/vote-note.php?id=86514&amp;page=function.define&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86514" title="51% like this...">
    3
    </div>
  </div>
  <a href="#86514" class="name">
  <strong class="user"><em>eparkerii at carolina dot rr dot com</em></strong></a><a class="genanchor" href="#86514"> &para;</a><div class="date" title="2008-10-22 12:01"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86514">
<div class="phpcode"><code><span class="html">Found something interesting.  The following define:
<br />
<br /><span class="default">&lt;?php
<br />define</span><span class="keyword">(</span><span class="string">"THIS-IS-A-TEST"</span><span class="keyword">,</span><span class="string">"This is a test"</span><span class="keyword">);
<br />echo </span><span class="default">THIS</span><span class="keyword">-</span><span class="default">IS</span><span class="keyword">-</span><span class="default">A</span><span class="keyword">-</span><span class="default">TEST</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Will return a '0'.
<br />
<br />Whereas this:
<br />
<br /><span class="default">&lt;?php
<br />define</span><span class="keyword">(</span><span class="string">"THIS_IS_A_TEST"</span><span class="keyword">,</span><span class="string">"This is a test"</span><span class="keyword">);
<br />echo </span><span class="default">THIS_IS_A_TEST</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Will return 'This is a test'.
<br />
<br />This may be common knowledge but I only found out a few minutes ago.
<br />
<br />[EDIT BY danbrown AT php DOT net: The original poster is referring to the hyphens versus underscores.  Hyphens do not work in defines or variables, which is expected behavior.]</span></code></div>
  </div>
 </div>
  <div class="note" id="119848">  <div class="votes">
    <div id="Vu119848">
    <a href="/manual/vote-note.php?id=119848&amp;page=function.define&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119848">
    <a href="/manual/vote-note.php?id=119848&amp;page=function.define&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119848" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#119848" class="name">
  <strong class="user"><em>axew3 at axew3 dot com</em></strong></a><a class="genanchor" href="#119848"> &para;</a><div class="date" title="2016-09-05 08:46"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119848">
<div class="phpcode"><code><span class="html">Php 7 - Define: "Defines a named constant at runtime. In PHP 7, array values are also accepted."<br /><br />But prior PHP 7, you can maybe do this, to pass an array elsewhere using define:<br /><br />$to_define_array = serialize($array);<br />define( "DEFINEANARRAY", $to_define_array );<br /><br />... and so ...<br /><br />$serialized = DEFINEANARRAY; // passing directly the defined will not work<br />      $our_array = unserialize($serialized); <br /><br />print_r($our_array);</span></code></div>
  </div>
 </div>
  <div class="note" id="102712">  <div class="votes">
    <div id="Vu102712">
    <a href="/manual/vote-note.php?id=102712&amp;page=function.define&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102712">
    <a href="/manual/vote-note.php?id=102712&amp;page=function.define&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102712" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#102712" class="name">
  <strong class="user"><em>Jamie</em></strong></a><a class="genanchor" href="#102712"> &para;</a><div class="date" title="2011-03-01 01:24"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102712">
<div class="phpcode"><code><span class="html">This is obvious, but easy to forget: if you include a file, the include file can only make use of constants already defined. For example:
<br />
<br /><span class="default">&lt;?php
<br />define</span><span class="keyword">(</span><span class="string">"VEG"</span><span class="keyword">,</span><span class="string">"cabbage"</span><span class="keyword">);
<br />require(</span><span class="string">"another file"</span><span class="keyword">);
<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"FRUIT"</span><span class="keyword">,</span><span class="string">"apple"</span><span class="keyword">);
<br />
<br /></span><span class="comment">// "another file":
<br /></span><span class="keyword">echo </span><span class="default">VEG</span><span class="keyword">; </span><span class="comment">// cabbage
<br /></span><span class="keyword">echo </span><span class="default">FRUIT</span><span class="keyword">; </span><span class="comment">// FRUIT
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96986">  <div class="votes">
    <div id="Vu96986">
    <a href="/manual/vote-note.php?id=96986&amp;page=function.define&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96986">
    <a href="/manual/vote-note.php?id=96986&amp;page=function.define&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96986" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#96986" class="name">
  <strong class="user"><em>chris at peeto dot net</em></strong></a><a class="genanchor" href="#96986"> &para;</a><div class="date" title="2010-03-25 07:15"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96986">
<div class="phpcode"><code><span class="html">The value of a constant can be the value of another constant.<br /><br /><span class="default">&lt;?php<br /><br />define</span><span class="keyword">(</span><span class="string">"NEW_GOOD_NAME_CONSTANT"</span><span class="keyword">, </span><span class="string">"I have a value"</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"OLD_BAD_NAME_CONSTANT"</span><span class="keyword">, </span><span class="default">NEW_GOOD_NAME_CONSTANT</span><span class="keyword">);<br /><br />echo </span><span class="default">NEW_GOOD_NAME_CONSTANT</span><span class="keyword">; </span><span class="comment">// current<br /></span><span class="keyword">echo </span><span class="default">OLD_BAD_NAME_CONSTANT</span><span class="keyword">; </span><span class="comment">// legacy<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123137">  <div class="votes">
    <div id="Vu123137">
    <a href="/manual/vote-note.php?id=123137&amp;page=function.define&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123137">
    <a href="/manual/vote-note.php?id=123137&amp;page=function.define&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123137" title="46% like this...">
    -4
    </div>
  </div>
  <a href="#123137" class="name">
  <strong class="user"><em>me at mariusgerum dot de</em></strong></a><a class="genanchor" href="#123137"> &para;</a><div class="date" title="2018-09-18 09:29"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123137">
<div class="phpcode"><code><span class="html">You can define constants with variable names (works also with constant values or variables or array values or class properties and so on - as long it's a valid constant name).<br /><br /><span class="default">&lt;?php<br />    <br />    </span><span class="comment"># Define a constant and set a valid constant name as string value<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">"SOME_CONSTANT"</span><span class="keyword">, </span><span class="string">"NEW_CONSTANT"</span><span class="keyword">);<br />    <br />    </span><span class="comment"># Define a second constant with dynamic name (the value from SOME_CONSTANT)<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="default">SOME_CONSTANT</span><span class="keyword">, </span><span class="string">"Some value"</span><span class="keyword">);<br />    <br />    </span><span class="comment"># Output<br />    </span><span class="keyword">echo </span><span class="default">SOME_CONSTANT</span><span class="keyword">; </span><span class="comment">// prints "NEW_CONSTANT"<br />    </span><span class="keyword">echo </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />    echo </span><span class="default">NEW_CONSTANT</span><span class="keyword">; </span><span class="comment">// prints "Some value"<br />    <br />    </span><span class="default">?&gt;<br /></span><br />Needless to say that you'll lose your IDE support for refactoring and highlighting completely for such cases.<br />No clue why someone would / could actually use this but i thought it's worth mentioning.</span></code></div>
  </div>
 </div>
  <div class="note" id="120985">  <div class="votes">
    <div id="Vu120985">
    <a href="/manual/vote-note.php?id=120985&amp;page=function.define&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120985">
    <a href="/manual/vote-note.php?id=120985&amp;page=function.define&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120985" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#120985" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#120985"> &para;</a><div class="date" title="2017-04-15 08:33"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120985">
<div class="phpcode"><code><span class="html">There's an undocumented side-effect of setting the third parameter to true (case-insensitive constants): these constants can actually be "redefined" as case-sensitive, unless it's all lowercase (which you shouldn't define anyway).<br /><br />The fact is that case-sensitive constants are stored as is, while case-insensitive constants are stored in lowercase, internally. You're still allowed to define other constants with the same name but capitalized differently (except for all lowercase).<br /><br /><span class="default">&lt;?php<br />  </span><span class="comment">// "echo CONST" prints 1, same as "echo const", "echo CoNst", etc.<br />  </span><span class="default">define</span><span class="keyword">(</span><span class="string">'CONST'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />  echo CONST; </span><span class="comment">// Prints 1<br /><br />  </span><span class="default">define</span><span class="keyword">(</span><span class="string">'CONST'</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />  echo CONST; </span><span class="comment">// Prints 2<br />  </span><span class="keyword">echo CoNsT; </span><span class="comment">// Prints 1<br />  </span><span class="keyword">echo const; </span><span class="comment">// Prints 1<br /><br />  // ** PHP NOTICE: Constant const already defined ** <br />  </span><span class="default">define</span><span class="keyword">(</span><span class="string">'const'</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />  echo const; </span><span class="comment">// Prints 1<br />  </span><span class="keyword">echo CONST; </span><span class="comment">// Prints 2<br /></span><span class="default">?&gt;<br /></span><br />Why would you use this?<br /><br />A third party plugin might attempt to define a constant for which you already set a value. If it's fine for them to set the new value, assuming you cannot edit the plugin, you could define your constant case-insensitive. You can still access the original value, if needed, by using any capitalization other than the one the plugin uses. As a matter of fact, I can't think of another case where you would want a case-insensitive constant...</span></code></div>
  </div>
 </div>
  <div class="note" id="118836">  <div class="votes">
    <div id="Vu118836">
    <a href="/manual/vote-note.php?id=118836&amp;page=function.define&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118836">
    <a href="/manual/vote-note.php?id=118836&amp;page=function.define&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118836" title="44% like this...">
    -5
    </div>
  </div>
  <a href="#118836" class="name">
  <strong class="user"><em>swisschocolate at cmail dot nu</em></strong></a><a class="genanchor" href="#118836"> &para;</a><div class="date" title="2016-02-13 11:35"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118836">
<div class="phpcode"><code><span class="html">I think worth mentioning is that define() appears to ignore invalid constant names.<br />One immediate implication of this seem to be that if you use an invalid constant name you have to use constant() to access it and obviously that you can't use the return value from define() to tell you whether the constant name used is invalid or not.<br /><br />For example:<br />$name = '7(/!§%';<br />var_dump(define($name, "hello")); // outputs bool(true)<br />var_dump(constant($name)); // outputs string(5) "hello"</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.define&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.define.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.misc.php">Misc. Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.connection-aborted.php" title="connection_&#8203;aborted">connection_&#8203;aborted</a>
                        </li>
                                                <li class="">
                            <a href="function.connection-status.php" title="connection_&#8203;status">connection_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.constant.php" title="constant">constant</a>
                        </li>
                                                <li class="current">
                            <a href="function.define.php" title="define">define</a>
                        </li>
                                                <li class="">
                            <a href="function.defined.php" title="defined">defined</a>
                        </li>
                                                <li class="">
                            <a href="function.die.php" title="die">die</a>
                        </li>
                                                <li class="">
                            <a href="function.eval.php" title="eval">eval</a>
                        </li>
                                                <li class="">
                            <a href="function.exit.php" title="exit">exit</a>
                        </li>
                                                <li class="">
                            <a href="function.get-browser.php" title="get_&#8203;browser">get_&#8203;browser</a>
                        </li>
                                                <li class="">
                            <a href="function.halt-compiler.php" title="_&#8203;_&#8203;halt_&#8203;compiler">_&#8203;_&#8203;halt_&#8203;compiler</a>
                        </li>
                                                <li class="">
                            <a href="function.highlight-file.php" title="highlight_&#8203;file">highlight_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.highlight-string.php" title="highlight_&#8203;string">highlight_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.hrtime.php" title="hrtime">hrtime</a>
                        </li>
                                                <li class="">
                            <a href="function.ignore-user-abort.php" title="ignore_&#8203;user_&#8203;abort">ignore_&#8203;user_&#8203;abort</a>
                        </li>
                                                <li class="">
                            <a href="function.pack.php" title="pack">pack</a>
                        </li>
                                                <li class="">
                            <a href="function.php-strip-whitespace.php" title="php_&#8203;strip_&#8203;whitespace">php_&#8203;strip_&#8203;whitespace</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-conv.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;conv">sapi_&#8203;windows_&#8203;cp_&#8203;conv</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-get.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;get">sapi_&#8203;windows_&#8203;cp_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-is-utf8.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;is_&#8203;utf8">sapi_&#8203;windows_&#8203;cp_&#8203;is_&#8203;utf8</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-set.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;set">sapi_&#8203;windows_&#8203;cp_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-generate-ctrl-event.php" title="sapi_&#8203;windows_&#8203;generate_&#8203;ctrl_&#8203;event">sapi_&#8203;windows_&#8203;generate_&#8203;ctrl_&#8203;event</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-set-ctrl-handler.php" title="sapi_&#8203;windows_&#8203;set_&#8203;ctrl_&#8203;handler">sapi_&#8203;windows_&#8203;set_&#8203;ctrl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-vt100-support.php" title="sapi_&#8203;windows_&#8203;vt100_&#8203;support">sapi_&#8203;windows_&#8203;vt100_&#8203;support</a>
                        </li>
                                                <li class="">
                            <a href="function.show-source.php" title="show_&#8203;source">show_&#8203;source</a>
                        </li>
                                                <li class="">
                            <a href="function.sleep.php" title="sleep">sleep</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-getloadavg.php" title="sys_&#8203;getloadavg">sys_&#8203;getloadavg</a>
                        </li>
                                                <li class="">
                            <a href="function.time-nanosleep.php" title="time_&#8203;nanosleep">time_&#8203;nanosleep</a>
                        </li>
                                                <li class="">
                            <a href="function.time-sleep-until.php" title="time_&#8203;sleep_&#8203;until">time_&#8203;sleep_&#8203;until</a>
                        </li>
                                                <li class="">
                            <a href="function.uniqid.php" title="uniqid">uniqid</a>
                        </li>
                                                <li class="">
                            <a href="function.unpack.php" title="unpack">unpack</a>
                        </li>
                                                <li class="">
                            <a href="function.usleep.php" title="usleep">usleep</a>
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
