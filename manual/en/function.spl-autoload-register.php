<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: spl_autoload_register - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.spl-autoload-register.php">
 <link rel="shorturl" href="https://www.php.net/spl-autoload-register">
 <link rel="alternate" href="https://www.php.net/spl-autoload-register" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.spl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.spl-autoload-functions.php">
 <link rel="next" href="https://www.php.net/manual/en/function.spl-autoload-unregister.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.spl-autoload-register.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.spl-autoload-register.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.spl-autoload-register.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.spl-autoload-register.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.spl-autoload-register.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.spl-autoload-register.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.spl-autoload-register.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.spl-autoload-register.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.spl-autoload-register.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.spl-autoload-register.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.spl-autoload-register.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Register given function as __autoload() implementation" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: spl_autoload_register - Manual" />
<meta name="twitter:description" content="Register given function as __autoload() implementation" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: spl_autoload_register - Manual" />
<meta itemprop="description" content="Register given function as __autoload() implementation" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Register given function as __autoload() implementation" />

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
        <a href="function.spl-autoload-unregister.php">
          spl_autoload_unregister &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.spl-autoload-functions.php">
          &laquo; spl_autoload_functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='ref.spl.php'>SPL Functions</a></li>      </ul>
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
            <option value='en/function.spl-autoload-register.php' selected="selected">English</option>
            <option value='de/function.spl-autoload-register.php'>German</option>
            <option value='es/function.spl-autoload-register.php'>Spanish</option>
            <option value='fr/function.spl-autoload-register.php'>French</option>
            <option value='it/function.spl-autoload-register.php'>Italian</option>
            <option value='ja/function.spl-autoload-register.php'>Japanese</option>
            <option value='pt_BR/function.spl-autoload-register.php'>Brazilian Portuguese</option>
            <option value='ru/function.spl-autoload-register.php'>Russian</option>
            <option value='tr/function.spl-autoload-register.php'>Turkish</option>
            <option value='uk/function.spl-autoload-register.php'>Ukrainian</option>
            <option value='zh/function.spl-autoload-register.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.spl-autoload-register" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">spl_autoload_register</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">spl_autoload_register</span> &mdash; <span class="dc-title">Register given function as __autoload() implementation</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.spl-autoload-register-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>spl_autoload_register</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span></span> <code class="parameter">$callback</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$throw</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$prepend</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Register a function with the spl provided __autoload queue. If the queue
   is not yet activated it will be activated.  
  </p>
  <p class="para">
   If your code has an existing <span class="function"><a href="function.autoload.php" class="function">__autoload()</a></span> function then
   this function must be explicitly registered on the __autoload queue. This
   is because <span class="function"><strong>spl_autoload_register()</strong></span> will effectively
   replace the engine cache for the <span class="function"><a href="function.autoload.php" class="function">__autoload()</a></span> function
   by either <span class="function"><a href="function.spl-autoload.php" class="function">spl_autoload()</a></span> or
   <span class="function"><a href="function.spl-autoload-call.php" class="function">spl_autoload_call()</a></span>.
  </p>
  <p class="para">
   If there must be multiple autoload functions, <span class="function"><strong>spl_autoload_register()</strong></span> 
   allows for this. It effectively creates a queue of autoload functions, and
   runs through each of them in the order they are defined. By contrast, 
   <span class="function"><a href="function.autoload.php" class="function">__autoload()</a></span> may only be defined once.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.spl-autoload-register-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">callback</code></dt>
     <dd>
      <p class="para">
       The autoload function being registered.
       If <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, then the default implementation of
       <span class="function"><a href="function.spl-autoload.php" class="function">spl_autoload()</a></span> will be registered.      
      </p>
      <div class="methodsynopsis dc-description">
       <span class="methodname"><span class="replaceable">callback</span></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

      <p class="para">
       The <code class="parameter">class</code> will not contain the leading
       backslash of a fully-qualified identifier.
      </p>
     </dd>
    
    
     <dt><code class="parameter">throw</code></dt>
     <dd>
      <p class="para">
       This parameter specifies whether
       <span class="function"><strong>spl_autoload_register()</strong></span> should throw 
       exceptions when the <code class="parameter">callback</code>
       cannot be registered.
      </p>
      <div class="warning"><strong class="warning">Warning</strong>
        <p class="para">
          This parameter is ignored as of PHP 8.0.0, and a notice will be
          emitted if set to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. <span class="function"><strong>spl_autoload_register()</strong></span>
          will now always throw a <span class="classname"><a href="class.typeerror.php" class="classname">TypeError</a></span> on invalid
          arguments.
        </p>
      </div>
     </dd>
    
    
     <dt><code class="parameter">prepend</code></dt>
     <dd>
      <p class="para">
       If <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, <span class="function"><strong>spl_autoload_register()</strong></span> will prepend
       the autoloader on the autoload queue instead of appending it.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.spl-autoload-register-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.spl-autoload-register-changelog">
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
        <code class="parameter">callback</code> is now nullable.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.spl-autoload-register-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4032">
    <p><strong>Example #1 <span class="function"><strong>spl_autoload_register()</strong></span> as a replacement for an <span class="function"><a href="function.autoload.php" class="function">__autoload()</a></span> function</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// function __autoload($class) {<br />//     include 'classes/' . $class . '.class.php';<br />// }<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">my_autoloader</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">) {<br />    include </span><span style="color: #DD0000">'classes/' </span><span style="color: #007700">. </span><span style="color: #0000BB">$class </span><span style="color: #007700">. </span><span style="color: #DD0000">'.class.php'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">spl_autoload_register</span><span style="color: #007700">(</span><span style="color: #DD0000">'my_autoloader'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Or, using an anonymous function<br /></span><span style="color: #0000BB">spl_autoload_register</span><span style="color: #007700">(function (</span><span style="color: #0000BB">$class</span><span style="color: #007700">) {<br />    include </span><span style="color: #DD0000">'classes/' </span><span style="color: #007700">. </span><span style="color: #0000BB">$class </span><span style="color: #007700">. </span><span style="color: #DD0000">'.class.php'</span><span style="color: #007700">;<br />});<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-4033">
    <p><strong>Example #2 <span class="function"><strong>spl_autoload_register()</strong></span> example where the class is not loaded</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">Foobar</span><span style="color: #007700">;<br /><br />class </span><span style="color: #0000BB">Foo </span><span style="color: #007700">{<br />    static public function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">) {<br />        print </span><span style="color: #DD0000">'[['</span><span style="color: #007700">. </span><span style="color: #0000BB">$class </span><span style="color: #007700">.</span><span style="color: #DD0000">']]'</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">spl_autoload_register</span><span style="color: #007700">(</span><span style="color: #0000BB">__NAMESPACE__ </span><span style="color: #007700">.</span><span style="color: #DD0000">'\Foo::test'</span><span style="color: #007700">);<br /><br />new </span><span style="color: #0000BB">InexistentClass</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">[[Foobar\InexistentClass]]
Fatal error: Class &#039;Foobar\InexistentClass&#039; not found in ...</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-4034">
    <p><strong>Example #3 The identifier will be provided without the leading backslash</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />spl_autoload_register</span><span style="color: #007700">(static function (</span><span style="color: #0000BB">$class</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">);<br />});<br /><br /></span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'RelativeName'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'RelativeName\\WithNamespace'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'\\AbsoluteName'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'\\AbsoluteName\\WithNamespace'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">string(12) &quot;RelativeName&quot;
string(26) &quot;RelativeName\WithNamespace&quot;
string(12) &quot;AbsoluteName&quot;
string(26) &quot;AbsoluteName\WithNamespace&quot;</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.spl-autoload-register-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.autoload.php" class="function" rel="rdfs-seeAlso">__autoload()</a> - Attempt to load undefined class</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/functions/spl-autoload-register.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.spl-autoload-register%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.spl-autoload-register&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.spl-autoload-register.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">25 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92514">  <div class="votes">
    <div id="Vu92514">
    <a href="/manual/vote-note.php?id=92514&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92514">
    <a href="/manual/vote-note.php?id=92514&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92514" title="71% like this...">
    206
    </div>
  </div>
  <a href="#92514" class="name">
  <strong class="user"><em>a dot schaffhirt at sedna-soft dot de</em></strong></a><a class="genanchor" href="#92514"> &para;</a><div class="date" title="2009-07-27 07:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92514">
<div class="phpcode"><code><span class="html">Good news for PHP 5.3 users with namespaced classes:<br /><br />When you create a subfolder structure matching the namespaces of the containing classes, you will never even have to define an autoloader.<br /><br /><span class="default">&lt;?php<br />    spl_autoload_extensions</span><span class="keyword">(</span><span class="string">".php"</span><span class="keyword">); </span><span class="comment">// comma-separated list<br />    </span><span class="default">spl_autoload_register</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />It is recommended to use only one extension for all classes. PHP (more exactly spl_autoload) does the rest for you and is even quicker than a semantically equal self-defined autoload function like this one:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">my_autoload </span><span class="keyword">(</span><span class="default">$pClassName</span><span class="keyword">) {<br />        include(</span><span class="default">__DIR__ </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$pClassName </span><span class="keyword">. </span><span class="string">".php"</span><span class="keyword">);<br />    }<br />    </span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="string">"my_autoload"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I compared them with the following setting: There are 10 folders, each having 10 subfolders, each having 10 subfolders, each containing 10 classes.<br /><br />To load and instantiate these 1000 classes (parameterless no-action constructor), the user-definded autoload function approach took 50ms longer in average than the spl_autoload function in a series of 10 command-line calls for each approach.<br /><br />I made this benchmark to ensure that I don't recommend something that could be called "nice, but slow" later.<br /><br />Best regards,</span></code></div>
  </div>
 </div>
  <div class="note" id="121435">  <div class="votes">
    <div id="Vu121435">
    <a href="/manual/vote-note.php?id=121435&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121435">
    <a href="/manual/vote-note.php?id=121435&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121435" title="83% like this...">
    24
    </div>
  </div>
  <a href="#121435" class="name">
  <strong class="user"><em>nemanja</em></strong></a><a class="genanchor" href="#121435"> &para;</a><div class="date" title="2017-07-26 08:25"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121435">
<div class="phpcode"><code><span class="html">Even when autoloading (SPL) is used, class inheritance does not seem to work. Simply the PHP engine is unable to find parent (inherited) class. PHP 5.6 and 7.0 behave exactly same on this, which beats the purpose of autoloading.<br /><br />And IMHO it's easy to fix as the autoloader is able to find all first level classes w/o problems, it just needs to follow same path recursively on parents too.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//Using default SPL autoloader, with namespaces mapping 1:1 to directory structure, with file names being all lowercase. <br />//This works with first level classes only, for inheritance it does NOT work, it cannot find parent classes.<br /></span><span class="default">spl_autoload_register</span><span class="keyword">();<br /><br /></span><span class="comment">//This is ugly but working code if you want to be able to autoload parent classes too.<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(function (</span><span class="default">$class</span><span class="keyword">){<br />    require_once </span><span class="default">__DIR__ </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'\\'</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$class</span><span class="keyword">) . </span><span class="string">'.php'</span><span class="keyword">);<br />});</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117805">  <div class="votes">
    <div id="Vu117805">
    <a href="/manual/vote-note.php?id=117805&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117805">
    <a href="/manual/vote-note.php?id=117805&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117805" title="68% like this...">
    30
    </div>
  </div>
  <a href="#117805" class="name">
  <strong class="user"><em>eyeofmidas at gmail dot com</em></strong></a><a class="genanchor" href="#117805"> &para;</a><div class="date" title="2015-08-12 03:57"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117805">
<div class="phpcode"><code><span class="html">When switching from using __autoload() to using spl_autoload_register keep in mind that deserialization of the session can trigger class lookups.<br /><br />This works as expected: <br /><span class="default">&lt;?php<br />session_start</span><span class="keyword">();<br />function </span><span class="default">__autoload</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) {<br />...<br />}<br /></span><span class="default">?&gt;<br /></span><br />This will result in "__PHP_Incomplete_Class_Name" errors when using classes deserialized from the session.<br /><span class="default">&lt;?php<br />session_start</span><span class="keyword">();<br />function </span><span class="default">customAutoloader</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) {<br />...<br />}<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="string">"customAutoloader"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />So you need to make sure the spl_autoload_register is done BEFORE session_start() is called.<br /><br />CORRECT:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">customAutoloader</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) {<br />...<br />}<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="string">"customAutoloader"</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102180">  <div class="votes">
    <div id="Vu102180">
    <a href="/manual/vote-note.php?id=102180&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102180">
    <a href="/manual/vote-note.php?id=102180&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102180" title="66% like this...">
    43
    </div>
  </div>
  <a href="#102180" class="name">
  <strong class="user"><em>(delphists) at (apollo) dot (lv)</em></strong></a><a class="genanchor" href="#102180"> &para;</a><div class="date" title="2011-02-01 01:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102180">
<div class="phpcode"><code><span class="html">When using spl_autoload_register() with class methods, it might seem that it can use only public methods, though it can use private/protected methods as well, if registered from inside the class:<br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">class </span><span class="default">ClassAutoloader </span><span class="keyword">{<br />        public function </span><span class="default">__construct</span><span class="keyword">() {<br />            </span><span class="default">spl_autoload_register</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'loader'</span><span class="keyword">));<br />        }<br />        private function </span><span class="default">loader</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">) {<br />            echo </span><span class="string">'Trying to load '</span><span class="keyword">, </span><span class="default">$className</span><span class="keyword">, </span><span class="string">' via '</span><span class="keyword">, </span><span class="default">__METHOD__</span><span class="keyword">, </span><span class="string">"()\n"</span><span class="keyword">;<br />            include </span><span class="default">$className </span><span class="keyword">. </span><span class="string">'.php'</span><span class="keyword">;<br />        }<br />    }<br /><br />    </span><span class="default">$autoloader </span><span class="keyword">= new </span><span class="default">ClassAutoloader</span><span class="keyword">();<br /><br />    </span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">Class1</span><span class="keyword">();<br />    </span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">Class2</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />Output:<br />--------<br />Trying to load Class1 via ClassAutoloader::loader()<br />Class1::__construct()<br />Trying to load Class2 via ClassAutoloader::loader()<br />Class2::__construct()</span></code></div>
  </div>
 </div>
  <div class="note" id="126119">  <div class="votes">
    <div id="Vu126119">
    <a href="/manual/vote-note.php?id=126119&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126119">
    <a href="/manual/vote-note.php?id=126119&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126119" title="66% like this...">
    8
    </div>
  </div>
  <a href="#126119" class="name">
  <strong class="user"><em>kuzawinski dot marcin at nospam dot gmail dot com</em></strong></a><a class="genanchor" href="#126119"> &para;</a><div class="date" title="2021-05-29 05:36"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126119">
<div class="phpcode"><code><span class="html">Since PHP 8.0 spl_autoload_register() will always throw a TypeError on invalid arguments, therefore the second argument `throw` is ignored and a notice will be emitted if it is set to False.</span></code></div>
  </div>
 </div>
  <div class="note" id="71155">  <div class="votes">
    <div id="Vu71155">
    <a href="/manual/vote-note.php?id=71155&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71155">
    <a href="/manual/vote-note.php?id=71155&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71155" title="66% like this...">
    20
    </div>
  </div>
  <a href="#71155" class="name">
  <strong class="user"><em>florent at mediagonale dot com</em></strong></a><a class="genanchor" href="#71155"> &para;</a><div class="date" title="2006-11-14 01:19"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71155">
<div class="phpcode"><code><span class="html">If your autoload function is a class method, you can call spl_autoload_register with an array specifying the class and the method to run.<br /><br />* You can use a static method :<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">MyClass </span><span class="keyword">{<br />  public static function </span><span class="default">autoload</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">) {<br />    </span><span class="comment">// ...<br />  </span><span class="keyword">}<br />}<br /><br /></span><span class="default">spl_autoload_register</span><span class="keyword">(array(</span><span class="string">'MyClass'</span><span class="keyword">, </span><span class="string">'autoload'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />* Or you can use an instance :<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyClass </span><span class="keyword">{<br />  public function </span><span class="default">autoload</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">) {<br />    </span><span class="comment">// ...<br />  </span><span class="keyword">}<br />}<br /><br /></span><span class="default">$instance </span><span class="keyword">= new </span><span class="default">MyClass</span><span class="keyword">();<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(array(</span><span class="default">$instance</span><span class="keyword">, </span><span class="string">'autoload'</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117241">  <div class="votes">
    <div id="Vu117241">
    <a href="/manual/vote-note.php?id=117241&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117241">
    <a href="/manual/vote-note.php?id=117241&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117241" title="65% like this...">
    14
    </div>
  </div>
  <a href="#117241" class="name">
  <strong class="user"><em>iam at thatguy dot co dot za</em></strong></a><a class="genanchor" href="#117241"> &para;</a><div class="date" title="2015-05-08 07:19"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117241">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br />    </span><span class="comment">// Example to auto-load class files from multiple directories using the SPL_AUTOLOAD_REGISTER method.<br />    // It auto-loads any file it finds starting with class.&lt;classname&gt;.php (LOWERCASE), eg: class.from.php, class.db.php<br />    </span><span class="default">spl_autoload_register</span><span class="keyword">(function(</span><span class="default">$class_name</span><span class="keyword">) {<br /><br />        </span><span class="comment">// Define an array of directories in the order of their priority to iterate through.<br />        </span><span class="default">$dirs </span><span class="keyword">= array(<br />            </span><span class="string">'project/'</span><span class="keyword">, </span><span class="comment">// Project specific classes (+Core Overrides)<br />            </span><span class="string">'classes/'</span><span class="keyword">, </span><span class="comment">// Core classes example<br />            </span><span class="string">'tests/'</span><span class="keyword">,   </span><span class="comment">// Unit test classes, if using PHP-Unit<br />        </span><span class="keyword">);<br /><br />        </span><span class="comment">// Looping through each directory to load all the class files. It will only require a file once.<br />        // If it finds the same class in a directory later on, IT WILL IGNORE IT! Because of that require once!<br />        </span><span class="keyword">foreach( </span><span class="default">$dirs </span><span class="keyword">as </span><span class="default">$dir </span><span class="keyword">) {<br />            if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'class.'</span><span class="keyword">.</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$class_name</span><span class="keyword">).</span><span class="string">'.php'</span><span class="keyword">)) {<br />                require_once(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'class.'</span><span class="keyword">.</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$class_name</span><span class="keyword">).</span><span class="string">'.php'</span><span class="keyword">);<br />                return;<br />            }<br />        }<br />    });</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98746">  <div class="votes">
    <div id="Vu98746">
    <a href="/manual/vote-note.php?id=98746&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98746">
    <a href="/manual/vote-note.php?id=98746&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98746" title="64% like this...">
    19
    </div>
  </div>
  <a href="#98746" class="name">
  <strong class="user"><em>anthon at piwik dot org</em></strong></a><a class="genanchor" href="#98746"> &para;</a><div class="date" title="2010-07-04 09:02"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98746">
<div class="phpcode"><code><span class="html">Think twice about throwing an exception from a registered autoloader.<br /><br />If you have multiple autoloaders registered, and one (or more) throws an exception before a later autoloader loads the class, stacked exceptions are thrown (and must be caught) even though the class was loaded successfully.</span></code></div>
  </div>
 </div>
  <div class="note" id="111875">  <div class="votes">
    <div id="Vu111875">
    <a href="/manual/vote-note.php?id=111875&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111875">
    <a href="/manual/vote-note.php?id=111875&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111875" title="63% like this...">
    17
    </div>
  </div>
  <a href="#111875" class="name">
  <strong class="user"><em>a dot schaffhirt at sedna-soft dot de</em></strong></a><a class="genanchor" href="#111875"> &para;</a><div class="date" title="2013-04-07 01:42"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111875">
<div class="phpcode"><code><span class="html">What I said here previously is only true on Windows. The built-in default autoloader that is registered when you call spl_autoload_register() without any arguments simply adds the qualified class name plus the registered file extension (.php) to each of the include paths and tries to include that file.<br /><br />Example (on Windows):<br /><br />include paths:<br />- "."<br />- "d:/projects/phplib"<br /><br />qualified class name to load:<br />network\http\rest\Resource<br /><br />Here's what happens:<br /><br />PHP tries to load<br />'.\\network\\http\\rest\\Resource.php'<br />-&gt; file not found<br /><br />PHP tries to load<br />'d:/projects/phplib\\network\\http\\rest\\Resource.php'<br />-&gt; file found and included<br /><br />Note the slashes and backslashes in the file path. On Windows this works perfectly, but on a Linux machine, the backslashes won't work and additionally the file names are case-sensitive.<br /><br />That's why on Linux the quick-and-easy way would be to convert these qualified class names to slashes and to lowercase and pass them to the built-in autoloader like so:<br /><br /><span class="default">&lt;?php<br />spl_autoload_register</span><span class="keyword">(<br />  function (</span><span class="default">$pClassName</span><span class="keyword">) {<br />    </span><span class="default">spl_autoload</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\\"</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$pClassName</span><span class="keyword">)));<br />  }<br />);<br /></span><span class="default">?&gt;<br /></span><br />But this means, you have to save all your classes with lowercase file names. Otherwise, if you omit the strtolower call, you have to use the class names exactly as specified by the file name, which can be annoying for class names that are defined with non-straightforward case like e. g. XMLHttpRequest.<br /><br />I prefer the lowercase approach, because it is easier to use and the file name conversion can be done automatically on deploying.</span></code></div>
  </div>
 </div>
  <div class="note" id="127239">  <div class="votes">
    <div id="Vu127239">
    <a href="/manual/vote-note.php?id=127239&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127239">
    <a href="/manual/vote-note.php?id=127239&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127239" title="63% like this...">
    3
    </div>
  </div>
  <a href="#127239" class="name">
  <strong class="user"><em>abhijeet dot sweden at gmail dot com</em></strong></a><a class="genanchor" href="#127239"> &para;</a><div class="date" title="2022-07-09 04:04"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127239">
<div class="phpcode"><code><span class="html">Type#1:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">require_once(</span><span class="string">'Second.php'</span><span class="keyword">);<br />require_once(</span><span class="string">'First.php'</span><span class="keyword">);<br /><br /></span><span class="default">$Second </span><span class="keyword">= new </span><span class="default">Second</span><span class="keyword">;<br /></span><span class="default">$Second</span><span class="keyword">-&gt;</span><span class="default">run_second</span><span class="keyword">();<br /><br /></span><span class="default">$First </span><span class="keyword">= new </span><span class="default">First</span><span class="keyword">;<br /></span><span class="default">$First</span><span class="keyword">-&gt;</span><span class="default">run_first</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />---------------------------------------------------------<br />Type#2:<br /><br /><span class="default">&lt;?php<br /><br />spl_autoload_register</span><span class="keyword">(function(</span><span class="default">$class</span><span class="keyword">){<br />  </span><span class="comment">//<br />  </span><span class="keyword">require_once(</span><span class="default">$class</span><span class="keyword">.</span><span class="string">'.php'</span><span class="keyword">);<br />});<br /><br /></span><span class="default">$Second </span><span class="keyword">= new </span><span class="default">Second</span><span class="keyword">;<br /></span><span class="default">$Second</span><span class="keyword">-&gt;</span><span class="default">run_second</span><span class="keyword">();<br /><br /></span><span class="default">$First </span><span class="keyword">= new </span><span class="default">First</span><span class="keyword">;<br /></span><span class="default">$First</span><span class="keyword">-&gt;</span><span class="default">run_first</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96804">  <div class="votes">
    <div id="Vu96804">
    <a href="/manual/vote-note.php?id=96804&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96804">
    <a href="/manual/vote-note.php?id=96804&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96804" title="60% like this...">
    23
    </div>
  </div>
  <a href="#96804" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#96804"> &para;</a><div class="date" title="2010-03-16 08:30"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96804">
<div class="phpcode"><code><span class="html">Be careful using this function on case sensitive file systems.<br /><br /><span class="default">&lt;?php<br />spl_autoload_extensions</span><span class="keyword">(</span><span class="string">'.php'</span><span class="keyword">);<br /></span><span class="default">spl_autoload_register</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />I develop on OS X and everything was working fine. But when releasing to my linux server, none of my class files were loading. I had to lowercase all my filenames, because calling a class "DatabaseObject" would try including "databaseobject.php", instead of "DatabaseObject.php"<br /><br />I think i'll go back to using the slower __autoload() function, just so i can keep my class files readable</span></code></div>
  </div>
 </div>
  <div class="note" id="95456">  <div class="votes">
    <div id="Vu95456">
    <a href="/manual/vote-note.php?id=95456&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95456">
    <a href="/manual/vote-note.php?id=95456&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95456" title="60% like this...">
    6
    </div>
  </div>
  <a href="#95456" class="name">
  <strong class="user"><em>rayro at gmx dot de</em></strong></a><a class="genanchor" href="#95456"> &para;</a><div class="date" title="2010-01-04 03:14"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95456">
<div class="phpcode"><code><span class="html">It is never a good idea and a unconscienable concept to create the classes in the autoload function via eval. <br />It should be a nice feature with these Exception, but i think anyone is able to handle it without this method although. Atm i dont realize for what this is good for...<br /><br />As i might note, class_exists() will ever define the classes u only want to check for existance, and will therefor ever return true:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">EvalIsEvil</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) {<br />  eval(</span><span class="string">'class '</span><span class="keyword">.</span><span class="default">$className</span><span class="keyword">.</span><span class="string">'{}'</span><span class="keyword">);<br />}<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="string">'EvalIsEvil'</span><span class="keyword">);<br />if (</span><span class="default">class_exists</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">=</span><span class="string">"IsMyModuleHere"</span><span class="keyword">)) {<br />  </span><span class="comment">// this is no module, but get there with eval()...<br />  </span><span class="keyword">return new </span><span class="default">$s</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110382">  <div class="votes">
    <div id="Vu110382">
    <a href="/manual/vote-note.php?id=110382&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110382">
    <a href="/manual/vote-note.php?id=110382&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110382" title="58% like this...">
    3
    </div>
  </div>
  <a href="#110382" class="name">
  <strong class="user"><em>daniel at amnistechnology dot com</em></strong></a><a class="genanchor" href="#110382"> &para;</a><div class="date" title="2012-10-17 09:57"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110382">
<div class="phpcode"><code><span class="html">Cleverly - and usefully - I have noticed that (on PHP 5.3 at least) these autoloaders "kick in" even when you call a public static method of an as-yet-unloaded all static class.</span></code></div>
  </div>
 </div>
  <div class="note" id="113251">  <div class="votes">
    <div id="Vu113251">
    <a href="/manual/vote-note.php?id=113251&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113251">
    <a href="/manual/vote-note.php?id=113251&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113251" title="57% like this...">
    4
    </div>
  </div>
  <a href="#113251" class="name">
  <strong class="user"><em>phil at propcom dot co dot uk</em></strong></a><a class="genanchor" href="#113251"> &para;</a><div class="date" title="2013-09-18 08:36"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113251">
<div class="phpcode"><code><span class="html">It is important to note that the autoloader will NOT be called if an E_STRICT error triggers the error handler which, in turn, tries to use classes which are not yet loaded. <br /><br />In this instance, you should manually load classes required by the error handler.</span></code></div>
  </div>
 </div>
  <div class="note" id="121141">  <div class="votes">
    <div id="Vu121141">
    <a href="/manual/vote-note.php?id=121141&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121141">
    <a href="/manual/vote-note.php?id=121141&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121141" title="56% like this...">
    3
    </div>
  </div>
  <a href="#121141" class="name">
  <strong class="user"><em>rnealxp at yahoo dot com</em></strong></a><a class="genanchor" href="#121141"> &para;</a><div class="date" title="2017-05-27 06:58"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121141">
<div class="phpcode"><code><span class="html">I now utilize spl_autoload_register and there's no turning back. So let me gather here for you what I've learned...<br />1.) the issue mentioned in these docs about case-sensitivity of filenames (Windows vs Linux/Mac): it only comes into play if you don't provide your own custom function as an argument when calling spl_autoload_register. Your function is to accept a single argument which will be the class name that your code is currently trying to access. I observe that the class name comes in with the same letter-casing as that you are actually using in your code base (mixed-case or not). I am not doing/using namespaces, but as a best practice, and to make your implementation straight-forward and predictable, go with fileName===className (1:1).<br />2.) I often refactor my code-base's directory structure as my code base morphs. I'm not using namespaces, but even if I were, I would want a decoupling between my namespace hierarchy and my directory structure hierarchy. I like my directory hierarchies to be intuitive for getting to code I want to work with. To save myself from having to manually tell my autoloader the path to each file/class, I cache a couple of arrays in static variables that store just the file/class name in the one array and the folder path to the file in the other. After the cache (static vars) have been set on the first call to my function, it's just a matter of looking up in the filename array. For safety, and to be problem-free, no two php filenames should be identical across all of your directory hierarchy (your namespace)--I favor this practice anyways, and accordingly, I favor unique class names across my single namespace (despite it not yet explicitly defined). I did build in a check in my function to ensure all php file names/classes are unique.<br />3.) I converted many, many files that once had sets of functions in the global space to *abstract classes* that have private static variables and methods and of course also public static methods. So those sets of functions are now encapsulated in objects, and those objects are now auto-loaded. Simply for this benefit I will never again have a function in the global space other than my auto-loader function and other exceptions such as that.<br />4.) My auto-loader function uses only built-in php language constructs and operations and has no outside dependencies.<br />5.) If you utilize the function class_exists() in your codebase somewhere, realize that unless you are passing the second arg as false, you will trigger the autoloader to load that class. I stumbled on this of course. My use-case is that I don't want the class loaded: I only wanted to take some action if the class was being used (in an error-handler method).<br />6.) If you use the function method_exists(), you will definitely trigger the class to be loaded (which makes sense since you have already decided to drill down to looking for a specific method).<br />7.) I credit someone else's idea here: I also elected to call an init() method for the class being loaded should it exist. This saves me from having to manually call from the outside, let alone managing how and from where the call should be made. It is so useful to get your object set up and ready to do work in an automated fashion such as this.<br />8.) as another said, I also use require() and not require_once() as the first is enough to generate an error and if already loaded the function will not have been called.<br />9.) If for some reason I fail to find a class name in my cached arrays, I knowingly still call require(), passing the class name I had not accounted for in order to generate and reveal the problem (which of course is not anticipated!).<br />10.) Again, I ensure uniqueness across all class names. If I observe non-uniqueness, I again do a faulty call to require() like this: require('FoundMultiplesOfClassFile.php'); to reveal the problem. (I don't yet, and you likely should not, have any sophisticated error-handler registered so this is as good as anything else to me).</span></code></div>
  </div>
 </div>
  <div class="note" id="96952">  <div class="votes">
    <div id="Vu96952">
    <a href="/manual/vote-note.php?id=96952&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96952">
    <a href="/manual/vote-note.php?id=96952&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96952" title="55% like this...">
    5
    </div>
  </div>
  <a href="#96952" class="name">
  <strong class="user"><em>sebastian dot krebs at kingcrunch dot de</em></strong></a><a class="genanchor" href="#96952"> &para;</a><div class="date" title="2010-03-24 10:54"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96952">
<div class="phpcode"><code><span class="html">It seems, that  spl_autoload tests, if the class exists, after calling every registered loader. So it breaks the chain, if the class exists and will not call the other loaders
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">a </span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">) {
<br />  echo </span><span class="string">"a\n"</span><span class="keyword">;
<br />  class </span><span class="default">Bla </span><span class="keyword">{} </span><span class="comment">// Usually "include 'path/to/file.php';"
<br /></span><span class="keyword">}
<br />function </span><span class="default">b </span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">) {
<br />  echo </span><span class="string">"b\n"</span><span class="keyword">;
<br />}
<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">);
<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="string">'b'</span><span class="keyword">);
<br />
<br /></span><span class="default">$c </span><span class="keyword">= new </span><span class="default">Bla</span><span class="keyword">();
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118061">  <div class="votes">
    <div id="Vu118061">
    <a href="/manual/vote-note.php?id=118061&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118061">
    <a href="/manual/vote-note.php?id=118061&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118061" title="52% like this...">
    1
    </div>
  </div>
  <a href="#118061" class="name">
  <strong class="user"><em>kakkau at grr dot la</em></strong></a><a class="genanchor" href="#118061"> &para;</a><div class="date" title="2015-09-28 05:11"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118061">
<div class="phpcode"><code><span class="html">A note on registering autoloading functions with additional parameters.<br /><br />./alf.home.php<br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br /> * class containing an autoloading function alias ALF :)<br /> */<br /></span><span class="keyword">class </span><span class="default">ALF </span><span class="keyword">{<br />  public function </span><span class="default">haaahaaahaaa</span><span class="keyword">(</span><span class="default">$class </span><span class="keyword">= </span><span class="string">"ALF"</span><span class="keyword">, </span><span class="default">$param </span><span class="keyword">= </span><span class="string">"Melmac"</span><span class="keyword">) {<br />    echo </span><span class="string">"I am "</span><span class="keyword">.</span><span class="default">$class</span><span class="keyword">.</span><span class="string">" from "</span><span class="keyword">.</span><span class="default">$param</span><span class="keyword">.</span><span class="string">".\n"</span><span class="keyword">;<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />./kate.melmac.php<br /><span class="default">&lt;?php<br /></span><span class="keyword">require_once(</span><span class="string">"alf.home.php"</span><span class="keyword">);<br /></span><span class="comment">/*<br /> * the normal way is to get ALF <br /> * and register an autoloading function<br /> */<br /></span><span class="default">$alf </span><span class="keyword">= new </span><span class="default">ALF</span><span class="keyword">();<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(array(</span><span class="default">$alf</span><span class="keyword">,</span><span class="string">'haaahaaahaaa'</span><span class="keyword">));<br /></span><span class="default">$alf</span><span class="keyword">-&gt;</span><span class="default">haaahaaahaaa</span><span class="keyword">(); </span><span class="comment">// ALF is from Melmac :)<br />/*<br /> * now lets try to autoload a class<br /> */<br /></span><span class="keyword">@</span><span class="default">$kate </span><span class="keyword">= new </span><span class="default">Kate</span><span class="keyword">(); </span><span class="comment">// this throws a fatal error because<br />                     // Kate is NOT from Melmac :)<br /></span><span class="default">?&gt;<br /></span>I am ALF from Melmac.<br />I am Kate from Melmac.<br /><br />./kate.earth.php<br /><span class="default">&lt;?php<br /></span><span class="keyword">require_once(</span><span class="string">"alf.home.php"</span><span class="keyword">);<br /></span><span class="comment">/*<br /> * BUT what if we want to correct Kates origin ?<br /> *     How can one pass parameters to an autoloading function <br /> *     upon registering?<br /> *<br /> * spl_autoload_register is not suitable for that <br /> *   but we can try is to define a callable during registration<br /> */<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(function(</span><span class="default">$class</span><span class="keyword">){ <br />  </span><span class="default">call_user_func</span><span class="keyword">(array(new </span><span class="default">ALF</span><span class="keyword">(),</span><span class="string">'haaahaaahaaa'</span><span class="keyword">), </span><span class="default">$class</span><span class="keyword">, </span><span class="string">"Earth"</span><span class="keyword">); });<br /></span><span class="comment">/*<br /> * now lets try again to autoload a class<br /> * Kate will still not be found but we corrected her origin :)<br /> */<br /></span><span class="keyword">@</span><span class="default">$kate </span><span class="keyword">= new </span><span class="default">Kate</span><span class="keyword">(); </span><span class="comment">// Kate is from Earth :)<br />/*<br /> * NOTE: that you cannot pass $this or another object created <br /> *       outside of the callable context using the <br /> *       registering way above. therefor you should swap your autoloading<br /> *       function to a seperate class as done at the beginning with ALF.<br /> *<br /> * NOTE: you may not able to unregister your autoloading function<br /> *       directly as an instance was created in another context<br /> */<br /></span><span class="default">?&gt;<br /></span>I am Kate from Earth.</span></code></div>
  </div>
 </div>
  <div class="note" id="127183">  <div class="votes">
    <div id="Vu127183">
    <a href="/manual/vote-note.php?id=127183&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127183">
    <a href="/manual/vote-note.php?id=127183&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127183" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127183" class="name">
  <strong class="user"><em>Daniel Klein</em></strong></a><a class="genanchor" href="#127183"> &para;</a><div class="date" title="2022-06-18 05:25"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127183">
<div class="phpcode"><code><span class="html">If you want to be able to run your PHP script from anywhere without changing to the directory first, use chdir(__DIR__) in the first file you run (not any includes):<br /><br /><span class="default">&lt;?php<br />spl_autoload_register</span><span class="keyword">();<br /></span><span class="default">chdir</span><span class="keyword">(</span><span class="default">__DIR__</span><span class="keyword">);<br /><br />For </span><span class="default">some reason</span><span class="keyword">, </span><span class="default">trying to </span><span class="keyword">use </span><span class="default">namespaced classes from within other namespaced classes fails otherwise</span><span class="keyword">.<br /><br /></span><span class="default">e</span><span class="keyword">.</span><span class="default">g</span><span class="keyword">. </span><span class="default">Running </span><span class="string">"php src/main.php" </span><span class="default">will fail</span><span class="keyword">, </span><span class="default">but </span><span class="string">"cd src &amp;&amp; php main.php" </span><span class="default">will work</span><span class="keyword">.<br /><br /></span><span class="default">src</span><span class="keyword">/</span><span class="default">main</span><span class="keyword">.</span><span class="default">php<br /></span><span class="keyword">&lt;?</span><span class="default">php<br />spl_autoload_register</span><span class="keyword">();<br /></span><span class="comment">//chdir(__DIR__); // Uncomment this to make it work from any directory<br /></span><span class="default">MyNamespace\MyClass</span><span class="keyword">::</span><span class="default">foo</span><span class="keyword">();<br /><br /></span><span class="default">src</span><span class="keyword">/</span><span class="default">MyNamespace</span><span class="keyword">/</span><span class="default">MyClass</span><span class="keyword">.</span><span class="default">php<br /></span><span class="keyword">&lt;?</span><span class="default">php<br /></span><span class="keyword">namespace </span><span class="default">MyNamespace</span><span class="keyword">;<br /><br />class </span><span class="default">MyClass </span><span class="keyword">{<br />  public static function </span><span class="default">foo</span><span class="keyword">(): </span><span class="default">void </span><span class="keyword">{<br />    echo </span><span class="default">MyOtherClass</span><span class="keyword">::</span><span class="default">BAR</span><span class="keyword">; </span><span class="comment">// This will fail even if MyOtherClass.php is in the right place<br />  </span><span class="keyword">}<br />}<br /><br /></span><span class="default">src</span><span class="keyword">/</span><span class="default">MyNamespace</span><span class="keyword">/</span><span class="default">MyOtherClass</span><span class="keyword">.</span><span class="default">php<br /></span><span class="keyword">&lt;?</span><span class="default">php<br /></span><span class="keyword">namespace </span><span class="default">MyNamespace</span><span class="keyword">;<br /><br />class </span><span class="default">MyOtherClass </span><span class="keyword">{<br />  public const </span><span class="default">BAR </span><span class="keyword">= </span><span class="string">'baz'</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78122">  <div class="votes">
    <div id="Vu78122">
    <a href="/manual/vote-note.php?id=78122&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78122">
    <a href="/manual/vote-note.php?id=78122&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78122" title="50% like this...">
    0
    </div>
  </div>
  <a href="#78122" class="name">
  <strong class="user"><em>stanlemon at mac dot com</em></strong></a><a class="genanchor" href="#78122"> &para;</a><div class="date" title="2007-09-28 10:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom78122">
<div class="phpcode"><code><span class="html">Editorial note: The appropriate PHP bug that requests behavior this function emulates is <a href="http://bugs.php.net/bug.php?id=42823" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=42823</a> . This function does NOT work if there has been an array($obj, 'nonStaticMethod') registered in the autoload stack--while the autoload will be removed, it will be re-registered incorrectly.
<br />
<br />The spl_autoload_register() method registers functions in its stack in the order that spl_autoload_register() was called, and subsequently if you want an autoload function to override previous autoload functions you will either need to unregister the previous ones or change the order of the autoload stack.
<br />
<br />For example, say in your default implementation of an autoload function you throw an exception if the class cannot be found, or perhaps a fatal error.  Later on in your code you add a second implementation of an autoload function which will load a library that the previous method would fail on.  This will not call the second autoloader method first, but rather will continue to error out on the first method.
<br />
<br />As previously mentioned, you can unregister the existing autoloader that errors out, or you can create a mechanism for unregistering and re-registering the autoloaders in the order you want.
<br />
<br />Here is a sample/example of how you might consider re-registering autoloaders so that the newest autoloader is called first, and the oldest last:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">// Editorial notes: Small bug and compatibility fixes
<br />// added to the function
<br />
<br /></span><span class="keyword">function </span><span class="default">spl_autoload_preregister</span><span class="keyword">( </span><span class="default">$autoload </span><span class="keyword">) {
<br />    </span><span class="comment">// No functions currently in the stack.
<br />    </span><span class="keyword">if ( (</span><span class="default">$funcs </span><span class="keyword">= </span><span class="default">spl_autoload_functions</span><span class="keyword">()) === </span><span class="default">false </span><span class="keyword">) {
<br />        </span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="default">$autoload</span><span class="keyword">);
<br />    } else {
<br />        </span><span class="comment">// Unregister existing autoloaders...
<br />        </span><span class="default">$compat </span><span class="keyword">=
<br />            </span><span class="default">version_compare</span><span class="keyword">(</span><span class="default">PHP_VERSION</span><span class="keyword">, </span><span class="string">'5.1.2'</span><span class="keyword">, </span><span class="string">'&lt;='</span><span class="keyword">) &amp;&amp;
<br />            </span><span class="default">version_compare</span><span class="keyword">(</span><span class="default">PHP_VERSION</span><span class="keyword">, </span><span class="string">'5.1.0'</span><span class="keyword">, </span><span class="string">'&gt;='</span><span class="keyword">);
<br />        foreach (</span><span class="default">$funcs </span><span class="keyword">as </span><span class="default">$func</span><span class="keyword">) {
<br />            if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">)) {
<br />                </span><span class="comment">// :TRICKY: There are some compatibility issues and some
<br />                // places where we need to error out
<br />                </span><span class="default">$reflector </span><span class="keyword">= new </span><span class="default">ReflectionMethod</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$func</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />                if (!</span><span class="default">$reflector</span><span class="keyword">-&gt;</span><span class="default">isStatic</span><span class="keyword">()) {
<br />                    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'
<br />                        This function is not compatible
<br />                        with non-static object methods due to PHP Bug #44144.
<br />                    '</span><span class="keyword">);
<br />                }
<br />                </span><span class="comment">// Suprisingly, spl_autoload_register supports the
<br />                // Class::staticMethod callback format, although call_user_func doesn't
<br />                </span><span class="keyword">if (</span><span class="default">$compat</span><span class="keyword">) </span><span class="default">$func </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">'::'</span><span class="keyword">, </span><span class="default">$func</span><span class="keyword">);
<br />            }
<br />            </span><span class="default">spl_autoload_unregister</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">);
<br />        }
<br />        
<br />        </span><span class="comment">// Register the new one, thus putting it at the front of the stack...
<br />        </span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="default">$autoload</span><span class="keyword">);
<br />        
<br />        </span><span class="comment">// Now, go back and re-register all of our old ones.
<br />        </span><span class="keyword">foreach (</span><span class="default">$funcs </span><span class="keyword">as </span><span class="default">$func</span><span class="keyword">) {
<br />            </span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">);
<br />        }
<br />    }
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Note: I have not tested this for overhead, so I am not 100% sure what the performance implication of the above example are.</span></code></div>
  </div>
 </div>
  <div class="note" id="73146">  <div class="votes">
    <div id="Vu73146">
    <a href="/manual/vote-note.php?id=73146&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73146">
    <a href="/manual/vote-note.php?id=73146&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73146" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#73146" class="name">
  <strong class="user"><em>harvey dot NO_SPAM dot robin at gmail dot com</em></strong></a><a class="genanchor" href="#73146"> &para;</a><div class="date" title="2007-02-10 05:54"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73146">
<div class="phpcode"><code><span class="html">This function is smart enough not to add the same loader twice.  This seems to work for all of the different loader formats.  Example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">ALoader<br /></span><span class="keyword">{<br />  static function </span><span class="default">load</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) { return </span><span class="default">true</span><span class="keyword">; }<br />}<br /><br />function </span><span class="default">anotherLoader</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) {<br />  return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$F </span><span class="keyword">= new </span><span class="default">ALoader</span><span class="keyword">;<br /><br /></span><span class="default">spl_autoload_register</span><span class="keyword">(array(</span><span class="string">'ALoader'</span><span class="keyword">, </span><span class="string">'load'</span><span class="keyword">));<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(array(</span><span class="string">'ALoader'</span><span class="keyword">, </span><span class="string">'load'</span><span class="keyword">));<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(array(</span><span class="default">$F</span><span class="keyword">, </span><span class="string">'load'</span><span class="keyword">));<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="string">'anotherLoader'</span><span class="keyword">);<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="string">'anotherLoader'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">spl_autoload_functions</span><span class="keyword">());<br /><br /></span><span class="comment">/*<br /> * Results on PHP5.2 CLI, linux.<br /> * array(2) {<br /> *  [0]=&gt;<br /> *  array(2) {<br /> *    [0]=&gt;<br /> *    string(7) "ALoader"<br /> *    [1]=&gt;<br /> *    string(4) "load"<br /> *  }<br /> *  [1]=&gt;<br /> *  string(13) "anotherLoader"<br /> * }<br /> */<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122175">  <div class="votes">
    <div id="Vu122175">
    <a href="/manual/vote-note.php?id=122175&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122175">
    <a href="/manual/vote-note.php?id=122175&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122175" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#122175" class="name">
  <strong class="user"><em>n0mAd at example dot com</em></strong></a><a class="genanchor" href="#122175"> &para;</a><div class="date" title="2017-12-24 07:49"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122175">
<div class="phpcode"><code><span class="html">If you need to register the function when using namespaces, use the __NAMESPACE__ constant to define the name.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">namespace </span><span class="default">Foobar</span><span class="keyword">;<br /><br /></span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="string">'MyFunction'</span><span class="keyword">); </span><span class="comment">// incorrect<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="string">'\MyFunction'</span><span class="keyword">);</span><span class="comment">// incorrect<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="default">__NAMESPACE__ </span><span class="keyword">. </span><span class="string">'\MyFunction'</span><span class="keyword">); </span><span class="comment">// correct<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116706">  <div class="votes">
    <div id="Vu116706">
    <a href="/manual/vote-note.php?id=116706&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116706">
    <a href="/manual/vote-note.php?id=116706&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116706" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#116706" class="name">
  <strong class="user"><em>neolium at gmail dot com</em></strong></a><a class="genanchor" href="#116706"> &para;</a><div class="date" title="2015-02-13 01:00"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116706">
<div class="phpcode"><code><span class="html">This autoload will find every class you call if you put each one in a different file.<br /><br />It walks into every directory recursivly from the root you specify in the $root var.<br /><br />You can specify the folders ou don't want to walk in (e.g you won't find any class in a 'view' folder on an MVC project) in the $dir_to_not_look_in array;<br /><br />spl_autoload_register(function($class) {<br /><br />    $root = 'my/root/path';<br />    $file = $class . '.php';<br />    $dir_to_not_look_in = array($directories, $to, $not, $look, $in);<br /><br />    if(!function_exists('load')) {<br />      function load($dir, $file) {<br />            if(file_exists($dir . '/' . $file)) {<br />                require_once $dir . '/' . $file;<br />            } else {<br />                foreach(scandir($dir) as $value) {<br />                    if(is_dir($dir. '/' . $value) &amp;&amp; !in_array($value, $dir_to_no_look_in))<br />                        load($dir. '/' . $value, $file);<br />                }<br />            }<br />        };  <br />    }<br />    <br />    load($root, $file);<br />    <br />});</span></code></div>
  </div>
 </div>
  <div class="note" id="114042">  <div class="votes">
    <div id="Vu114042">
    <a href="/manual/vote-note.php?id=114042&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114042">
    <a href="/manual/vote-note.php?id=114042&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114042" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#114042" class="name">
  <strong class="user"><em>hajo-p</em></strong></a><a class="genanchor" href="#114042"> &para;</a><div class="date" title="2014-01-05 05:25"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114042">
<div class="phpcode"><code><span class="html">if you have a dir-structure like "/abc/def/ghi", your index.php lies in the top directory, but you want to use namespaces starting with "def" or "ghi":
<br />
<br />you can switch the namespace root directory of php with e.g. set_include_path(__DIR__ . '/abc') and afterwards define + use your namespaces with the simple spl_autoload_register() function without any arguments supplied.
<br />
<br />remember that php handlers "cli" and "cli-server" are special cases.</span></code></div>
  </div>
 </div>
  <div class="note" id="113362">  <div class="votes">
    <div id="Vu113362">
    <a href="/manual/vote-note.php?id=113362&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113362">
    <a href="/manual/vote-note.php?id=113362&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113362" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#113362" class="name">
  <strong class="user"><em>Kurd the Great</em></strong></a><a class="genanchor" href="#113362"> &para;</a><div class="date" title="2013-10-01 04:13"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113362">
<div class="phpcode"><code><span class="html">if(!defined('BASE_PATH')) {<br />    define('BASE_PATH', dirname(__FILE__) . '/');<br />    require BASE_PATH . 'Autoloader.php';<br />    Autoloader::Register();<br />}<br /><br />class Autoloader<br />{<br />    public static function Register() {<br />        return spl_autoload_register(array('Autoloader', 'Load'));<br />    }<br /><br />    public static function Load($strObjectName) {<br />        if(class_exists($strObjectName) === false) {<br />            return false;<br />        }<br /><br />        $strObjectFilePath = BASE_PATH . $strObjectName . '.php';<br />        <br />        if((file_exists($strObjectFilePath) === false) || (is_readable($strObjectFilePath) === false)) {<br />            return false;<br />        }<br />        <br />        require($strObjectFilePath);<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="118787">  <div class="votes">
    <div id="Vu118787">
    <a href="/manual/vote-note.php?id=118787&amp;page=function.spl-autoload-register&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118787">
    <a href="/manual/vote-note.php?id=118787&amp;page=function.spl-autoload-register&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118787" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#118787" class="name">
  <strong class="user"><em>joneschrisan at aol dot com</em></strong></a><a class="genanchor" href="#118787"> &para;</a><div class="date" title="2016-02-05 04:11"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118787">
<div class="phpcode"><code><span class="html">Looks like on the latest update of debian php passing no params to spl_autoload doesn't work on linux any more.<br /><br />It is failing to replace the \'s in the namespace with /'s for file paths.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.spl-autoload-register&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.spl-autoload-register.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.spl.php">SPL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.class-implements.php" title="class_&#8203;implements">class_&#8203;implements</a>
                        </li>
                                                <li class="">
                            <a href="function.class-parents.php" title="class_&#8203;parents">class_&#8203;parents</a>
                        </li>
                                                <li class="">
                            <a href="function.class-uses.php" title="class_&#8203;uses">class_&#8203;uses</a>
                        </li>
                                                <li class="">
                            <a href="function.iterator-apply.php" title="iterator_&#8203;apply">iterator_&#8203;apply</a>
                        </li>
                                                <li class="">
                            <a href="function.iterator-count.php" title="iterator_&#8203;count">iterator_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.iterator-to-array.php" title="iterator_&#8203;to_&#8203;array">iterator_&#8203;to_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload.php" title="spl_&#8203;autoload">spl_&#8203;autoload</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-call.php" title="spl_&#8203;autoload_&#8203;call">spl_&#8203;autoload_&#8203;call</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-extensions.php" title="spl_&#8203;autoload_&#8203;extensions">spl_&#8203;autoload_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-functions.php" title="spl_&#8203;autoload_&#8203;functions">spl_&#8203;autoload_&#8203;functions</a>
                        </li>
                                                <li class="current">
                            <a href="function.spl-autoload-register.php" title="spl_&#8203;autoload_&#8203;register">spl_&#8203;autoload_&#8203;register</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-unregister.php" title="spl_&#8203;autoload_&#8203;unregister">spl_&#8203;autoload_&#8203;unregister</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-classes.php" title="spl_&#8203;classes">spl_&#8203;classes</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-object-hash.php" title="spl_&#8203;object_&#8203;hash">spl_&#8203;object_&#8203;hash</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-object-id.php" title="spl_&#8203;object_&#8203;id">spl_&#8203;object_&#8203;id</a>
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
