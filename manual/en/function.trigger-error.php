<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: trigger_error - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.trigger-error.php">
 <link rel="shorturl" href="https://www.php.net/trigger-error">
 <link rel="alternate" href="https://www.php.net/trigger-error" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.errorfunc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.set-exception-handler.php">
 <link rel="next" href="https://www.php.net/manual/en/function.user-error.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.trigger-error.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.trigger-error.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.trigger-error.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.trigger-error.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.trigger-error.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.trigger-error.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.trigger-error.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.trigger-error.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.trigger-error.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.trigger-error.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.trigger-error.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generates a user-level error/warning/notice message" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: trigger_error - Manual" />
<meta name="twitter:description" content="Generates a user-level error/warning/notice message" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: trigger_error - Manual" />
<meta itemprop="description" content="Generates a user-level error/warning/notice message" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generates a user-level error/warning/notice message" />

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
        <a href="function.user-error.php">
          user_error &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.set-exception-handler.php">
          &laquo; set_exception_handler        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.errorfunc.php'>Error Handling</a></li>      <li><a href='ref.errorfunc.php'>Error Handling Functions</a></li>      </ul>
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
            <option value='en/function.trigger-error.php' selected="selected">English</option>
            <option value='de/function.trigger-error.php'>German</option>
            <option value='es/function.trigger-error.php'>Spanish</option>
            <option value='fr/function.trigger-error.php'>French</option>
            <option value='it/function.trigger-error.php'>Italian</option>
            <option value='ja/function.trigger-error.php'>Japanese</option>
            <option value='pt_BR/function.trigger-error.php'>Brazilian Portuguese</option>
            <option value='ru/function.trigger-error.php'>Russian</option>
            <option value='tr/function.trigger-error.php'>Turkish</option>
            <option value='uk/function.trigger-error.php'>Ukrainian</option>
            <option value='zh/function.trigger-error.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.trigger-error" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">trigger_error</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.1, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">trigger_error</span> &mdash; <span class="dc-title">Generates a user-level error/warning/notice message</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.trigger-error-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>trigger_error</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$message</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$error_level</code><span class="initializer"> = <strong><code><a href="errorfunc.constants.php#constant.e-user-notice">E_USER_NOTICE</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   Used to trigger a user error condition, it can be used in conjunction
   with the built-in error handler, or with a user defined function that has
   been set as the new error handler
   (<span class="function"><a href="function.set-error-handler.php" class="function">set_error_handler()</a></span>). 
  </p>
  <p class="para">
   This function is useful when you need to generate a particular response to
   an exception at runtime.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.trigger-error-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">message</code></dt>
     <dd>
      <p class="para">
       The designated error message for this error. It&#039;s limited to 1024 
       bytes in length. Any additional characters beyond 1024 bytes will be 
       truncated.
      </p>
     </dd>
    
    
     <dt><code class="parameter">error_level</code></dt>
     <dd>
      <p class="para">
       The designated error type for this error. It only works with the <strong><code><a href="errorfunc.constants.php#constant.e-user-error">E_USER_<span class="replaceable">*</span></a></code></strong>
       family of constants, and will default to <strong><code><a href="errorfunc.constants.php#constant.e-user-notice">E_USER_NOTICE</a></code></strong>.
      </p>
      <div class="warning"><strong class="warning">Warning</strong>
       <p class="simpara">
        Passing <strong><code><a href="errorfunc.constants.php#constant.e-user-error">E_USER_ERROR</a></code></strong> as the
        <code class="parameter">error_level</code> is now deprecated.
        Throw an <span class="exceptionname"><a href="class.exception.php" class="exceptionname">Exception</a></span> or
        call <span class="function"><a href="function.exit.php" class="function">exit()</a></span> instead.
       </p>
      </div>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.trigger-error-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.trigger-error-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   This function throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if
   <code class="parameter">error_level</code> is not one of
   <strong><code><a href="errorfunc.constants.php#constant.e-user-error">E_USER_ERROR</a></code></strong>, <strong><code><a href="errorfunc.constants.php#constant.e-user-warning">E_USER_WARNING</a></code></strong>,
   <strong><code><a href="errorfunc.constants.php#constant.e-user-notice">E_USER_NOTICE</a></code></strong>, <strong><code><a href="errorfunc.constants.php#constant.e-user-deprecated">E_USER_DEPRECATED</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.trigger-error-changelog">
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
      <td>8.4.0</td>
      <td>
       Passing <strong><code><a href="errorfunc.constants.php#constant.e-user-error">E_USER_ERROR</a></code></strong> as the
       <code class="parameter">error_level</code> is now deprecated.
       Throw an <span class="exceptionname"><a href="class.exception.php" class="exceptionname">Exception</a></span> or
       call <span class="function"><a href="function.exit.php" class="function">exit()</a></span> instead.
      </td>
     </tr>

     <tr>
      <td>8.4.0</td>
      <td>
       The function now has a return type of <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span>
       instead of <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       The function now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if an invalid
       <code class="parameter">error_level</code> is specified. Previously, it returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.trigger-error-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-607">
    <p><strong>Example #1 <span class="function"><strong>trigger_error()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     See <span class="function"><a href="function.set-error-handler.php" class="function">set_error_handler()</a></span> for a more extensive example.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$password </span><span style="color: #007700">= </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'password'</span><span style="color: #007700">] ?? </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">$password </span><span style="color: #007700">=== </span><span style="color: #DD0000">''</span><span style="color: #007700">) {<br />  </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #DD0000">"Using an empty password is unsafe"</span><span style="color: #007700">, </span><span style="color: #0000BB">E_USER_WARNING</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">$hash </span><span style="color: #007700">= </span><span style="color: #0000BB">password_hash</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">PASSWORD_DEFAULT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.trigger-error-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
     HTML entities in <code class="parameter">message</code> are not
     escaped. Use <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span> on the message if
     the error is to be displayed in a browser.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.trigger-error-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.error-reporting.php" class="function" rel="rdfs-seeAlso">error_reporting()</a> - Sets which PHP errors are reported</span></li>
    <li><span class="function"><a href="function.set-error-handler.php" class="function" rel="rdfs-seeAlso">set_error_handler()</a> - Sets a user-defined error handler function</span></li>
    <li><span class="function"><a href="function.restore-error-handler.php" class="function" rel="rdfs-seeAlso">restore_error_handler()</a> - Restores the previous error handler function</span></li>
    <li>The <a href="errorfunc.constants.php" class="link">error level constants</a></li>
    <li>The <span class="classname"><a href="class.deprecated.php" class="classname">Deprecated</a></span> attribute</li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/errorfunc/functions/trigger-error.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.trigger-error%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.trigger-error&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.trigger-error.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="32316">  <div class="votes">
    <div id="Vu32316">
    <a href="/manual/vote-note.php?id=32316&amp;page=function.trigger-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32316">
    <a href="/manual/vote-note.php?id=32316&amp;page=function.trigger-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32316" title="71% like this...">
    54
    </div>
  </div>
  <a href="#32316" class="name">
  <strong class="user"><em>someone at attbi dot com</em></strong></a><a class="genanchor" href="#32316"> &para;</a><div class="date" title="2003-05-23 09:24"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32316">
<div class="phpcode"><code><span class="html">the idea is never to give out file names, line numbers, and cryptic codes to the user. Use trigger_error() after you used set_error_handler() to register your own callback function which either logs or emails the error codes to you, and echo a simple friendly message to the user.
<br />
<br />And turn on a more verbose error handler function when you need to debug your scripts. In my init.php scripts I always have:
<br />
<br />if (_DEBUG_) {
<br />    set_error_handler ('debug_error_handler');
<br />}
<br />else {
<br />    set_error_handler ('nice_error_handler');
<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="92016">  <div class="votes">
    <div id="Vu92016">
    <a href="/manual/vote-note.php?id=92016&amp;page=function.trigger-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92016">
    <a href="/manual/vote-note.php?id=92016&amp;page=function.trigger-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92016" title="57% like this...">
    17
    </div>
  </div>
  <a href="#92016" class="name">
  <strong class="user"><em>Howard Yeend</em></strong></a><a class="genanchor" href="#92016"> &para;</a><div class="date" title="2009-07-05 04:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92016">
<div class="phpcode"><code><span class="html">trigger_error always reports the line and file that trigger_error was called on. Which isn't very useful.
<br />
<br />eg:
<br />
<br />main.php:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">include(</span><span class="string">'functions.php'</span><span class="keyword">);
<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="string">'test'</span><span class="keyword">;
<br /></span><span class="default">doFunction</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />functions.php:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">doFunction</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">) {
<br />if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">)) {
<br /> </span><span class="comment">/* do some stuff*/
<br /></span><span class="keyword">} else {
<br /> </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'var must be numeric'</span><span class="keyword">);
<br />}
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />will output "Notice: var must be numeric in functions.php on line 6"
<br />whereas "Notice: var must be numeric in main.php on line 4" would be more useful
<br />
<br />here's a function to do that:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">error</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">=</span><span class="default">E_USER_NOTICE</span><span class="keyword">) {
<br /></span><span class="default">$caller </span><span class="keyword">= </span><span class="default">next</span><span class="keyword">(</span><span class="default">debug_backtrace</span><span class="keyword">());
<br /></span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">.</span><span class="string">' in &lt;strong&gt;'</span><span class="keyword">.</span><span class="default">$caller</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">].</span><span class="string">'&lt;/strong&gt; called from &lt;strong&gt;'</span><span class="keyword">.</span><span class="default">$caller</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">].</span><span class="string">'&lt;/strong&gt; on line &lt;strong&gt;'</span><span class="keyword">.</span><span class="default">$caller</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">].</span><span class="string">'&lt;/strong&gt;'</span><span class="keyword">.</span><span class="string">"\n&lt;br /&gt;error handler"</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />So now in our example:
<br />
<br />main.php:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">include(</span><span class="string">'functions.php'</span><span class="keyword">);
<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="string">'test'</span><span class="keyword">;
<br /></span><span class="default">doFunction</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />functions.php:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">doFunction</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">) {
<br />    if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">)) {
<br />         </span><span class="comment">/* do some stuff*/
<br />    </span><span class="keyword">} else {
<br />         </span><span class="default">error</span><span class="keyword">(</span><span class="string">'var must be numeric'</span><span class="keyword">);
<br />    }
<br />}
<br />
<br />function </span><span class="default">error</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">=</span><span class="default">E_USER_NOTICE</span><span class="keyword">) {
<br />    </span><span class="default">$caller </span><span class="keyword">= </span><span class="default">next</span><span class="keyword">(</span><span class="default">debug_backtrace</span><span class="keyword">());
<br />    </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">.</span><span class="string">' in &lt;strong&gt;'</span><span class="keyword">.</span><span class="default">$caller</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">].</span><span class="string">'&lt;/strong&gt; called from &lt;strong&gt;'</span><span class="keyword">.</span><span class="default">$caller</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">].</span><span class="string">'&lt;/strong&gt; on line &lt;strong&gt;'</span><span class="keyword">.</span><span class="default">$caller</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">].</span><span class="string">'&lt;/strong&gt;'</span><span class="keyword">.</span><span class="string">"\n&lt;br /&gt;error handler"</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />now outputs:
<br />
<br />"Notice: var must be numeric in doFunction called from main.php on line 4"</span></code></div>
  </div>
 </div>
  <div class="note" id="63910">  <div class="votes">
    <div id="Vu63910">
    <a href="/manual/vote-note.php?id=63910&amp;page=function.trigger-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63910">
    <a href="/manual/vote-note.php?id=63910&amp;page=function.trigger-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63910" title="57% like this...">
    7
    </div>
  </div>
  <a href="#63910" class="name">
  <strong class="user"><em>richard at 2006 dot atterer dot net</em></strong></a><a class="genanchor" href="#63910"> &para;</a><div class="date" title="2006-04-03 09:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63910">
<div class="phpcode"><code><span class="html">Beware, trigger_error() is absolutely useless for transporting your own function's error messages in $php_errormsg:<br /><br />ini_set('track_errors', TRUE);<br />function x() { trigger_error('MY ERROR'); }<br />@x();<br />echo "Error 1: \\"$php_errormsg\\"\\n";<br />@file_get_contents('/nonexisting');<br />echo "Error 2: \\"$php_errormsg\\"\\n";<br /><br />This outputs:<br /><br />Error 1: ""<br />Error 2: "failed to open stream: No such file or directory"<br /><br />This behaviour is consistent with the description of $php_errormsg, which says that the variable will only be available within the scope in which the error occurred. The problem can be worked around with a custom error handler like the one below. However, I'm undecided whether changing the language in this way is good:<br /><br />function errHandler($errno, $errstr, $errfile, $errline) {<br />  global $php_errormsg; $php_errormsg = $errstr;<br />}<br />set_error_handler('errHandler');</span></code></div>
  </div>
 </div>
  <div class="note" id="115254">  <div class="votes">
    <div id="Vu115254">
    <a href="/manual/vote-note.php?id=115254&amp;page=function.trigger-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115254">
    <a href="/manual/vote-note.php?id=115254&amp;page=function.trigger-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115254" title="54% like this...">
    4
    </div>
  </div>
  <a href="#115254" class="name">
  <strong class="user"><em>aydin dot kn12 at gmail dot com</em></strong></a><a class="genanchor" href="#115254"> &para;</a><div class="date" title="2014-06-20 07:48"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115254">
<div class="phpcode"><code><span class="html">If error_type is E_USER_ERROR then trigger_error throw FATAL ERROR and script stopped after this line.<br /><br /><span class="default">&lt;?php<br /><br />$msg </span><span class="keyword">= </span><span class="string">'This is the test message for echo'</span><span class="keyword">;<br /><br /></span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Error message'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">); </span><span class="comment">// Script stopped after this line...<br /><br /></span><span class="keyword">echo </span><span class="default">$msg</span><span class="keyword">; </span><span class="comment">// This line does not appear...<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98910">  <div class="votes">
    <div id="Vu98910">
    <a href="/manual/vote-note.php?id=98910&amp;page=function.trigger-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98910">
    <a href="/manual/vote-note.php?id=98910&amp;page=function.trigger-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98910" title="53% like this...">
    3
    </div>
  </div>
  <a href="#98910" class="name">
  <strong class="user"><em>PhpMyCoder</em></strong></a><a class="genanchor" href="#98910"> &para;</a><div class="date" title="2010-07-15 03:18"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98910">
<div class="phpcode"><code><span class="html">For those of you looking to use your own file or line number in the error (possibly using debug_backtrace()) instead of the ones created by trigger_error(), here is a solution:<br />Create a custom function to handle E_USER_ERRORs that simply outputs the error type and message, while excluding the line number and file trigger_error() reports. You may also configure it to handle user warnings and notices if necessary (I did in the example below).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">error_handler</span><span class="keyword">(</span><span class="default">$level</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">) {<br />    </span><span class="comment">//Handle user errors, warnings, and notices ourself<br />    </span><span class="keyword">if(</span><span class="default">$level </span><span class="keyword">=== </span><span class="default">E_USER_ERROR </span><span class="keyword">|| </span><span class="default">$level </span><span class="keyword">=== </span><span class="default">E_USER_WARNING </span><span class="keyword">|| </span><span class="default">$level </span><span class="keyword">=== </span><span class="default">E_USER_NOTICE</span><span class="keyword">) {<br />        echo </span><span class="string">'&lt;strong&gt;Error:&lt;/strong&gt; '</span><span class="keyword">.</span><span class="default">$message</span><span class="keyword">;<br />        return(</span><span class="default">true</span><span class="keyword">); </span><span class="comment">//And prevent the PHP error handler from continuing<br />    </span><span class="keyword">}<br />    return(</span><span class="default">false</span><span class="keyword">); </span><span class="comment">//Otherwise, use PHP's error handler<br /></span><span class="keyword">}<br /><br />function </span><span class="default">trigger_my_error</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">) {<br />    </span><span class="comment">//Get the caller of the calling function and details about it<br />    </span><span class="default">$callee </span><span class="keyword">= </span><span class="default">next</span><span class="keyword">(</span><span class="default">debug_backtrace</span><span class="keyword">());<br />    </span><span class="comment">//Trigger appropriate error<br />    </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">.</span><span class="string">' in &lt;strong&gt;'</span><span class="keyword">.</span><span class="default">$callee</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">].</span><span class="string">'&lt;/strong&gt; on line &lt;strong&gt;'</span><span class="keyword">.</span><span class="default">$callee</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">].</span><span class="string">'&lt;/strong&gt;'</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">//Use our custom handler<br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">'error_handler'</span><span class="keyword">);<br /><br /></span><span class="comment">//-------------------------------<br />//Demo usage:<br />//-------------------------------<br /></span><span class="keyword">function </span><span class="default">abc</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    if(!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)) {<br />        </span><span class="default">trigger_my_error</span><span class="keyword">(</span><span class="string">'abc() expects parameter 1 to be a string'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">abc</span><span class="keyword">(</span><span class="string">'Hello world!'</span><span class="keyword">); </span><span class="comment">//Works<br /></span><span class="default">abc</span><span class="keyword">(</span><span class="default">18</span><span class="keyword">); </span><span class="comment">//Error: abc() expects parameter 1 to be a string in [FILE].php on line 31<br /></span><span class="default">?&gt;<br /></span><br />This is a pretty simple concept and I'm sure most of you know this, but for those that don't, let it serve as a good example!</span></code></div>
  </div>
 </div>
  <div class="note" id="129784">  <div class="votes">
    <div id="Vu129784">
    <a href="/manual/vote-note.php?id=129784&amp;page=function.trigger-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129784">
    <a href="/manual/vote-note.php?id=129784&amp;page=function.trigger-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129784" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#129784" class="name">
  <strong class="user"><em>theking2 at king dot ma</em></strong></a><a class="genanchor" href="#129784"> &para;</a><div class="date" title="2024-09-29 11:04"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129784">
<div class="phpcode"><code><span class="html">The function trigger_error will terminate the script if $error_level is equal or higher than E_USER_ERROR. <br /><br />If you write your own error handler you will have to do these yourself.<br /><br />Example in which we assume the global LOG constant points to a PSR2 logging interface.<br /><span class="default">&lt;?php<br /><br />set_error_handler</span><span class="keyword">( function (</span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">) {<br />    </span><span class="comment">// error was suppressed with the @-operator<br />    </span><span class="keyword">if( </span><span class="default">0 </span><span class="keyword">=== </span><span class="default">error_reporting</span><span class="keyword">() ) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    switch(</span><span class="default">$errno</span><span class="keyword">) {<br />        default:<br />            </span><span class="default">LOG</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">( </span><span class="string">"Unknown error type: [</span><span class="default">$errno</span><span class="string">] </span><span class="default">$errstr</span><span class="string">"</span><span class="keyword">, [ </span><span class="string">'file' </span><span class="keyword">=&gt; </span><span class="default">$errfile</span><span class="keyword">, </span><span class="string">'@' </span><span class="keyword">=&gt; </span><span class="default">$errline </span><span class="keyword">] );<br />            exit(</span><span class="default">1</span><span class="keyword">);<br /><br />        case </span><span class="default">E_USER_ERROR</span><span class="keyword">: </span><span class="comment">// fall through<br />        </span><span class="keyword">case </span><span class="default">E_WARNING</span><span class="keyword">: </span><span class="comment">// treat PHP warnings are errors<br />            </span><span class="default">LOG</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">( </span><span class="default">$errstr</span><span class="keyword">, [ </span><span class="string">'file' </span><span class="keyword">=&gt; </span><span class="default">$errfile</span><span class="keyword">, </span><span class="string">'@' </span><span class="keyword">=&gt; </span><span class="default">$errline </span><span class="keyword">] );<br />            exit(</span><span class="default">1</span><span class="keyword">);<br /><br />        case </span><span class="default">E_USER_DEPRECATED</span><span class="keyword">:<br />        case </span><span class="default">E_DEPRECATED</span><span class="keyword">:<br />            </span><span class="default">LOG</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">( </span><span class="string">"DEPRECATED </span><span class="default">$errstr</span><span class="string">"</span><span class="keyword">, [ </span><span class="string">'file' </span><span class="keyword">=&gt; </span><span class="default">$errfile</span><span class="keyword">, </span><span class="string">'@' </span><span class="keyword">=&gt; </span><span class="default">$errline </span><span class="keyword">] );<br />            break;<br /><br />        case </span><span class="default">E_USER_WARNING</span><span class="keyword">: </span><span class="comment">// fall through<br />        </span><span class="keyword">case </span><span class="default">E_NOTICE</span><span class="keyword">: </span><span class="comment">// treat PHP notices are warnings<br />            </span><span class="default">LOG</span><span class="keyword">-&gt;</span><span class="default">warning</span><span class="keyword">( </span><span class="default">$errstr</span><span class="keyword">, [ </span><span class="string">'file' </span><span class="keyword">=&gt; </span><span class="default">$errfile</span><span class="keyword">, </span><span class="string">'@' </span><span class="keyword">=&gt; </span><span class="default">$errline </span><span class="keyword">] );<br />            break;<br /><br />        case </span><span class="default">E_USER_NOTICE</span><span class="keyword">:<br />            </span><span class="default">LOG</span><span class="keyword">-&gt;</span><span class="default">notice</span><span class="keyword">( </span><span class="default">$errstr</span><span class="keyword">, [ </span><span class="string">'file' </span><span class="keyword">=&gt; </span><span class="default">$errfile</span><span class="keyword">, </span><span class="string">'@' </span><span class="keyword">=&gt; </span><span class="default">$errline </span><span class="keyword">] );<br />            break;<br /><br />        case </span><span class="default">E_ERROR</span><span class="keyword">: </span><span class="comment">// fall through<br />        </span><span class="keyword">case </span><span class="default">E_RECOVERABLE_ERROR</span><span class="keyword">:<br />            </span><span class="default">LOG</span><span class="keyword">-&gt;</span><span class="default">critical</span><span class="keyword">( </span><span class="default">$errstr</span><span class="keyword">, [ </span><span class="string">'file' </span><span class="keyword">=&gt; </span><span class="default">$errfile</span><span class="keyword">, </span><span class="string">'@' </span><span class="keyword">=&gt; </span><span class="default">$errline </span><span class="keyword">] );<br />            exit(</span><span class="default">1</span><span class="keyword">);<br /><br />    }<br />    </span><span class="comment">/* Don't execute PHP internal error handler */<br />    </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">;<br />} );<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.trigger-error&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.trigger-error.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.errorfunc.php">Error Handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.debug-backtrace.php" title="debug_&#8203;backtrace">debug_&#8203;backtrace</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-print-backtrace.php" title="debug_&#8203;print_&#8203;backtrace">debug_&#8203;print_&#8203;backtrace</a>
                        </li>
                                                <li class="">
                            <a href="function.error-clear-last.php" title="error_&#8203;clear_&#8203;last">error_&#8203;clear_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.error-get-last.php" title="error_&#8203;get_&#8203;last">error_&#8203;get_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.error-log.php" title="error_&#8203;log">error_&#8203;log</a>
                        </li>
                                                <li class="">
                            <a href="function.error-reporting.php" title="error_&#8203;reporting">error_&#8203;reporting</a>
                        </li>
                                                <li class="">
                            <a href="function.get-error-handler.php" title="get_&#8203;error_&#8203;handler">get_&#8203;error_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.get-exception-handler.php" title="get_&#8203;exception_&#8203;handler">get_&#8203;exception_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.restore-error-handler.php" title="restore_&#8203;error_&#8203;handler">restore_&#8203;error_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.restore-exception-handler.php" title="restore_&#8203;exception_&#8203;handler">restore_&#8203;exception_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.set-error-handler.php" title="set_&#8203;error_&#8203;handler">set_&#8203;error_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.set-exception-handler.php" title="set_&#8203;exception_&#8203;handler">set_&#8203;exception_&#8203;handler</a>
                        </li>
                                                <li class="current">
                            <a href="function.trigger-error.php" title="trigger_&#8203;error">trigger_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.user-error.php" title="user_&#8203;error">user_&#8203;error</a>
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
