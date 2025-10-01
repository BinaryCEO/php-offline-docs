<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: session_set_save_handler - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.session-set-save-handler.php">
 <link rel="shorturl" href="https://www.php.net/session-set-save-handler">
 <link rel="alternate" href="https://www.php.net/session-set-save-handler" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.session-set-cookie-params.php">
 <link rel="next" href="https://www.php.net/manual/en/function.session-start.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.session-set-save-handler.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.session-set-save-handler.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.session-set-save-handler.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.session-set-save-handler.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.session-set-save-handler.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.session-set-save-handler.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.session-set-save-handler.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.session-set-save-handler.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.session-set-save-handler.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.session-set-save-handler.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.session-set-save-handler.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sets user-level session storage functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: session_set_save_handler - Manual" />
<meta name="twitter:description" content="Sets user-level session storage functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: session_set_save_handler - Manual" />
<meta itemprop="description" content="Sets user-level session storage functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sets user-level session storage functions" />

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
        <a href="function.session-start.php">
          session_start &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.session-set-cookie-params.php">
          &laquo; session_set_cookie_params        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.session.php'>Session Extensions</a></li>      <li><a href='book.session.php'>Sessions</a></li>      <li><a href='ref.session.php'>Session Functions</a></li>      </ul>
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
            <option value='en/function.session-set-save-handler.php' selected="selected">English</option>
            <option value='de/function.session-set-save-handler.php'>German</option>
            <option value='es/function.session-set-save-handler.php'>Spanish</option>
            <option value='fr/function.session-set-save-handler.php'>French</option>
            <option value='it/function.session-set-save-handler.php'>Italian</option>
            <option value='ja/function.session-set-save-handler.php'>Japanese</option>
            <option value='pt_BR/function.session-set-save-handler.php'>Brazilian Portuguese</option>
            <option value='ru/function.session-set-save-handler.php'>Russian</option>
            <option value='tr/function.session-set-save-handler.php'>Turkish</option>
            <option value='uk/function.session-set-save-handler.php'>Ukrainian</option>
            <option value='zh/function.session-set-save-handler.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.session-set-save-handler" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">session_set_save_handler</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">session_set_save_handler</span> &mdash; <span class="dc-title">Sets user-level session storage functions</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.session-set-save-handler-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>session_set_save_handler</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$open</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$close</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$read</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$write</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$destroy</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$gc</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$create_sid</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$validate_sid</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$update_timestamp</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   It is possible to register the following prototype:
  </p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>session_set_save_handler</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$sessionhandler</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$register_shutdown</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>session_set_save_handler()</strong></span> sets the user-level
   session storage functions which are used for storing and
   retrieving data associated with a session.  This is most useful
   when a storage method other than those supplied by PHP sessions
   is preferred, e.g. storing the session data in a local database.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.session-set-save-handler-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   This function has two prototypes.
   <dl>
    
     <dt><code class="parameter">sessionhandler</code></dt>
     <dd>
      <p class="para">
       An instance of a class implementing
       <span class="interfacename"><a href="class.sessionhandlerinterface.php" class="interfacename">SessionHandlerInterface</a></span>, and optionally
       <span class="interfacename"><a href="class.sessionidinterface.php" class="interfacename">SessionIdInterface</a></span> and/or
       <span class="interfacename"><a href="class.sessionupdatetimestamphandlerinterface.php" class="interfacename">SessionUpdateTimestampHandlerInterface</a></span>, such as
       <span class="classname"><a href="class.sessionhandler.php" class="classname">SessionHandler</a></span>, to register as the session
       handler.
      </p>
     </dd>
    
    
     <dt><code class="parameter">register_shutdown</code></dt>
     <dd>
      <p class="para">
       Register <span class="function"><a href="function.session-write-close.php" class="function">session_write_close()</a></span> as a
       <span class="function"><a href="function.register-shutdown-function.php" class="function">register_shutdown_function()</a></span> function.
      </p>
     </dd>
    
   </dl>

   or

   <dl>
    
     <dt><code class="parameter">open</code></dt>
     <dd>
      <p class="para">
       A callable with the following signature:
       <div class="methodsynopsis dc-description"><span class="methodname"><span class="replaceable">open</span></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$savePath</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$sessionName</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

      </p>
      <p class="para">
       The open callback works like a constructor in classes and is
       executed when the session is being opened.  It is the first callback
       function executed when the session is started automatically or
       manually with <span class="function"><a href="function.session-start.php" class="function">session_start()</a></span>.
       Return value is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> for success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> for failure.
      </p>
     </dd>
    
    
     <dt><code class="parameter">close</code></dt>
     <dd>
      <p class="para">
       A callable with the following signature:
       <div class="methodsynopsis dc-description"><span class="methodname"><span class="replaceable">close</span></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

      </p>
      <p class="para">
       The close callback works like a destructor in classes and is
       executed after the session write callback has been called. It is also invoked when
       <span class="function"><a href="function.session-write-close.php" class="function">session_write_close()</a></span> is called.
       Return value should be <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> for success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> for failure.
      </p>
     </dd>
    
    
     <dt><code class="parameter">read</code></dt>
     <dd>
      <p class="para">
       A callable with the following signature:
       <div class="methodsynopsis dc-description"><span class="methodname"><span class="replaceable">read</span></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$sessionId</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

      </p>
      <p class="para">
       The <code class="parameter">read</code> callback must always return a session encoded (serialized)
       string, or an empty string if there is no data to read.
      </p>
      <p class="para">
       This callback is called internally by PHP when the session starts or
       when <span class="function"><a href="function.session-start.php" class="function">session_start()</a></span> is called.  Before this callback is invoked
       PHP will invoke the <code class="parameter">open</code> callback.
      </p>
      <p class="para">
       The value this callback returns must be in exactly the same serialized format that was originally
       passed for storage to the <code class="parameter">write</code> callback.  The value returned will be
       unserialized automatically by PHP and used to populate the <var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION</a></var> superglobal.
       While the data looks similar to <span class="function"><a href="function.serialize.php" class="function">serialize()</a></span> please note it is a different format
       which is specified in the <a href="session.configuration.php#ini.session.serialize-handler" class="link">session.serialize_handler</a> ini setting.
      </p>
     </dd>
    
    
     <dt><code class="parameter">write</code></dt>
     <dd>
      <p class="para">
       A callable with the following signature:
       <div class="methodsynopsis dc-description"><span class="methodname"><span class="replaceable">write</span></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$sessionId</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

      </p>
      <p class="para">
       The <code class="parameter">write</code> callback is called when the session needs to be saved and closed. This
       callback receives the current session ID a serialized version the <var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION</a></var> superglobal.  The serialization
       method used internally by PHP is specified in the <a href="session.configuration.php#ini.session.serialize-handler" class="link">session.serialize_handler</a> ini setting.
      </p>
      <p class="para">
       The serialized session data passed to this callback should be stored against the passed session ID. When retrieving
       this data, the <code class="parameter">read</code> callback must return the exact value that was originally passed to
       the <code class="parameter">write</code> callback.
      </p>
      <p class="para">
       This callback is invoked when PHP shuts down or explicitly when <span class="function"><a href="function.session-write-close.php" class="function">session_write_close()</a></span>
       is called.  Note that after executing this function PHP will internally execute the <code class="parameter">close</code> callback.
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         The &quot;write&quot; handler is not executed until after the output stream is
         closed.  Thus, output from debugging statements in the &quot;write&quot;
         handler will never be seen in the browser.  If debugging output is
         necessary, it is suggested that the debug output be written to a
         file instead.
        </p>
       </p></blockquote>
      </p>
     </dd>
    
    
     <dt><code class="parameter">destroy</code></dt>
     <dd>
      <p class="para">
       A callable with the following signature:
       <div class="methodsynopsis dc-description">
        <span class="methodname"><span class="replaceable">destroy</span></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$sessionId</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

      </p>
      <p class="para">
       This callback is executed when a session is destroyed with <span class="function"><a href="function.session-destroy.php" class="function">session_destroy()</a></span> or with
       <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span> with the destroy parameter set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
       Return value should be <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> for success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> for failure.
      </p>
     </dd>
    
    
     <dt><code class="parameter">gc</code></dt>
     <dd>
      <p class="para">
       A callable with the following signature:
       <div class="methodsynopsis dc-description"><span class="methodname"><span class="replaceable">gc</span></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$lifetime</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

      </p>
      <p class="para">
       The garbage collector callback is invoked internally by PHP periodically in order to
       purge old session data.  The frequency is controlled by
       <a href="session.configuration.php#ini.session.gc-probability" class="link">session.gc_probability</a> and <a href="session.configuration.php#ini.session.gc-divisor" class="link">session.gc_divisor</a>.
       The value of lifetime which is passed to this callback can be set in <a href="session.configuration.php#ini.session.gc-maxlifetime" class="link">session.gc_maxlifetime</a>.
       Return value should be <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> for success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> for failure.
      </p>
     </dd>
    
    
     <dt><code class="parameter">create_sid</code></dt>
     <dd>
      <p class="para">
       A callable with the following signature:
       <div class="methodsynopsis dc-description"><span class="methodname"><span class="replaceable">create_sid</span></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

      </p>
      <p class="para">
       This callback is executed when a new session ID is required. No
       parameters are provided, and the return value should be a string that
       is a valid session ID for your handler.
      </p>
     </dd>
    
    
     <dt><code class="parameter">validate_sid</code></dt>
     <dd>
      <p class="para">
       A callable with the following signature:
       <div class="methodsynopsis dc-description"><span class="methodname"><span class="replaceable">validate_sid</span></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

      </p>
      <p class="para">
       This callback is executed when a session is to be started, a session ID is supplied
       and <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a> is enabled.
       The <code class="parameter">key</code> is the session ID to validate.
       A session ID is valid, if a session with that ID already exists.
       The return value should be <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> for success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> for failure.
      </p>
     </dd>
    
    
     <dt><code class="parameter">update_timestamp</code></dt>
     <dd>
      <p class="para">
       A callable with the following signature:
       <div class="methodsynopsis dc-description"><span class="methodname"><span class="replaceable">update_timestamp</span></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$val</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

      </p>
      <p class="para">
       This callback is executed when a session is updated.
       <code class="parameter">key</code> is the session ID, <code class="parameter">val</code> is the session data.
       The return value should be <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> for success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> for failure.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.session-set-save-handler-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.session-set-save-handler-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5010">
    <p><strong>Example #1 
     Custom session handler: see full code in <span class="classname"><a href="class.sessionhandlerinterface.php" class="classname">SessionHandlerInterface</a></span> synopsis.
    </strong></p>
    <div class="example-contents"><p>
     We just show the invocation here, the full example can be
     seen in the <span class="classname"><a href="class.sessionhandlerinterface.php" class="classname">SessionHandlerInterface</a></span> synopsis linked above.
    </p></div>
    <div class="example-contents"><p>
     Note we use the OOP prototype with <span class="function"><strong>session_set_save_handler()</strong></span> and
     register the shutdown function using the function&#039;s parameter flag.  This is generally
     advised when registering objects as session save handlers.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MySessionHandler </span><span style="color: #007700">implements </span><span style="color: #0000BB">SessionHandlerInterface<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// implement interfaces here<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB">$handler </span><span style="color: #007700">= new </span><span style="color: #0000BB">MySessionHandler</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">session_set_save_handler</span><span style="color: #007700">(</span><span style="color: #0000BB">$handler</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// proceed to set and retrieve values by key from $_SESSION</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.session-set-save-handler-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    The <code class="parameter">write</code> and
    <code class="parameter">close</code> handlers are called after object
    destruction and therefore cannot use objects or throw exceptions.
    Exceptions are not able to be caught since will not be caught nor will
    any exception trace be displayed and the execution will just cease unexpectedly.
    The object destructors can however use sessions.
   </p>
   <p class="para">
    It is possible to call <span class="function"><a href="function.session-write-close.php" class="function">session_write_close()</a></span> from the
    destructor to solve this chicken and egg problem but the most reliable way is
    to register the shutdown function as described above.
   </p>
  </div>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Current working directory is changed with some SAPIs if session is
    closed in the script termination. It is possible to close the session
    earlier with <span class="function"><a href="function.session-write-close.php" class="function">session_write_close()</a></span>.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.session-set-save-handler-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li>
     The <a href="session.configuration.php#ini.session.save-handler" class="link">session.save_handler</a>
     configuration directive
    </li>
    <li>
     The <a href="session.configuration.php#ini.session.serialize-handler" class="link">session.serialize_handler</a>
     configuration directive.
    </li>
    <li>The <span class="function"><a href="function.register-shutdown-function.php" class="function" rel="rdfs-seeAlso">register_shutdown_function()</a> - Register a function for execution on shutdown</span></li>
    <li>The <span class="function"><a href="function.session-register-shutdown.php" class="function" rel="rdfs-seeAlso">session_register_shutdown()</a> - Session shutdown function</span></li>
    <li>
     Refer to <a href="https://github.com/php/php-src/blob/master/ext/session/tests/save_handler.inc" class="link external">&raquo;&nbsp;save_handler.inc</a>
     for a full procedural reference implementation
    </li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/session/functions/session-set-save-handler.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.session-set-save-handler%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.session-set-save-handler&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-set-save-handler.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">39 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118225">  <div class="votes">
    <div id="Vu118225">
    <a href="/manual/vote-note.php?id=118225&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118225">
    <a href="/manual/vote-note.php?id=118225&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118225" title="65% like this...">
    47
    </div>
  </div>
  <a href="#118225" class="name">
  <strong class="user"><em>andreipa at gmail dot com</em></strong></a><a class="genanchor" href="#118225"> &para;</a><div class="date" title="2015-10-29 03:05"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118225">
<div class="phpcode"><code><span class="html">After spend so many time to understand how PHP session works with database and unsuccessful attempts to get it right, I decided to rewrite the version from our friend stalker.<br /><br />//Database<br />CREATE TABLE `Session` (<br />  `Session_Id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,<br />  `Session_Expires` datetime NOT NULL,<br />  `Session_Data` text COLLATE utf8_unicode_ci,<br />  PRIMARY KEY (`Session_Id`)<br />) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;<br />SELECT * FROM mydatabase.Session;<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//inc.session.php<br /><br /></span><span class="keyword">class </span><span class="default">SysSession </span><span class="keyword">implements </span><span class="default">SessionHandlerInterface<br /></span><span class="keyword">{<br />    private </span><span class="default">$link</span><span class="keyword">;<br />    <br />    public function </span><span class="default">open</span><span class="keyword">(</span><span class="default">$savePath</span><span class="keyword">, </span><span class="default">$sessionName</span><span class="keyword">)<br />    {<br />        </span><span class="default">$link </span><span class="keyword">= </span><span class="default">mysqli_connect</span><span class="keyword">(</span><span class="string">"server"</span><span class="keyword">,</span><span class="string">"user"</span><span class="keyword">,</span><span class="string">"pwd"</span><span class="keyword">,</span><span class="string">"mydatabase"</span><span class="keyword">);<br />        if(</span><span class="default">$link</span><span class="keyword">){<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">link </span><span class="keyword">= </span><span class="default">$link</span><span class="keyword">;<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }else{<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br />    public function </span><span class="default">close</span><span class="keyword">()<br />    {<br />        </span><span class="default">mysqli_close</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">link</span><span class="keyword">);<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">read</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">)<br />    {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysqli_query</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">link</span><span class="keyword">,</span><span class="string">"SELECT Session_Data FROM Session WHERE Session_Id = '"</span><span class="keyword">.</span><span class="default">$id</span><span class="keyword">.</span><span class="string">"' AND Session_Expires &gt; '"</span><span class="keyword">.</span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y-m-d H:i:s'</span><span class="keyword">).</span><span class="string">"'"</span><span class="keyword">);<br />        if(</span><span class="default">$row </span><span class="keyword">= </span><span class="default">mysqli_fetch_assoc</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)){<br />            return </span><span class="default">$row</span><span class="keyword">[</span><span class="string">'Session_Data'</span><span class="keyword">];<br />        }else{<br />            return </span><span class="string">""</span><span class="keyword">;<br />        }<br />    }<br />    public function </span><span class="default">write</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">)<br />    {<br />        </span><span class="default">$DateTime </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y-m-d H:i:s'</span><span class="keyword">);<br />        </span><span class="default">$NewDateTime </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y-m-d H:i:s'</span><span class="keyword">,</span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$DateTime</span><span class="keyword">.</span><span class="string">' + 1 hour'</span><span class="keyword">));<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysqli_query</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">link</span><span class="keyword">,</span><span class="string">"REPLACE INTO Session SET Session_Id = '"</span><span class="keyword">.</span><span class="default">$id</span><span class="keyword">.</span><span class="string">"', Session_Expires = '"</span><span class="keyword">.</span><span class="default">$NewDateTime</span><span class="keyword">.</span><span class="string">"', Session_Data = '"</span><span class="keyword">.</span><span class="default">$data</span><span class="keyword">.</span><span class="string">"'"</span><span class="keyword">);<br />        if(</span><span class="default">$result</span><span class="keyword">){<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }else{<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br />    public function </span><span class="default">destroy</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">)<br />    {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysqli_query</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">link</span><span class="keyword">,</span><span class="string">"DELETE FROM Session WHERE Session_Id ='"</span><span class="keyword">.</span><span class="default">$id</span><span class="keyword">.</span><span class="string">"'"</span><span class="keyword">);<br />        if(</span><span class="default">$result</span><span class="keyword">){<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }else{<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br />    public function </span><span class="default">gc</span><span class="keyword">(</span><span class="default">$maxlifetime</span><span class="keyword">)<br />    {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysqli_query</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">link</span><span class="keyword">,</span><span class="string">"DELETE FROM Session WHERE ((UNIX_TIMESTAMP(Session_Expires) + "</span><span class="keyword">.</span><span class="default">$maxlifetime</span><span class="keyword">.</span><span class="string">") &lt; "</span><span class="keyword">.</span><span class="default">$maxlifetime</span><span class="keyword">.</span><span class="string">")"</span><span class="keyword">);<br />        if(</span><span class="default">$result</span><span class="keyword">){<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }else{<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br />}<br /></span><span class="default">$handler </span><span class="keyword">= new </span><span class="default">SysSession</span><span class="keyword">();<br /></span><span class="default">session_set_save_handler</span><span class="keyword">(</span><span class="default">$handler</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment">//page 1<br /></span><span class="keyword">require_once(</span><span class="string">'inc.session.php'</span><span class="keyword">);<br /><br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'var1'</span><span class="keyword">] = </span><span class="string">"My Portuguese text: SOU Gaucho!"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment">//page 2<br /></span><span class="keyword">require_once(</span><span class="string">'inc.session.php'</span><span class="keyword">);<br /><br /></span><span class="default">session_start</span><span class="keyword">();<br /><br />if(isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'var1'</span><span class="keyword">]){<br />echo </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'var1'</span><span class="keyword">]; <br />}<br /></span><span class="comment">//OUTPUT: My Portuguese text: SOU Gaucho!<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122031">  <div class="votes">
    <div id="Vu122031">
    <a href="/manual/vote-note.php?id=122031&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122031">
    <a href="/manual/vote-note.php?id=122031&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122031" title="78% like this...">
    13
    </div>
  </div>
  <a href="#122031" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#122031"> &para;</a><div class="date" title="2017-12-16 04:36"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122031">
<div class="phpcode"><code><span class="html">As of PHP 7.0, you can implement SessionUpdateTimestampHandlerInterface to <br />define your own session id validating method like validate_sid and the timestamp updating method like update_timestamp in the non-OOP prototype of session_set_save_handler().<br /><br />SessionUpdateTimestampHandlerInterface is a new interface introduced in PHP 7.0, which has not been documented yet. It has two abstract methods: SessionUpdateTimestampHandlerInterface :: validateId($sessionId) and SessionUpdateTimestampHandlerInterface :: updateTimestamp($sessionId, $sessionData).<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">/*<br />       @author Wu Xiancheng<br />       Code structure for PHP 7.0+ only because SessionUpdateTimestampHandlerInterface is introduced in PHP 7.0<br />       With this class you can validate php session id and update the timestamp of php session data<br />       with the OOP prototype of session_set_save_handler() in PHP 7.0+<br />    */<br />    </span><span class="keyword">class </span><span class="default">PHPSessionXHandler </span><span class="keyword">implements </span><span class="default">SessionHandlerInterface</span><span class="keyword">, </span><span class="default">SessionUpdateTimestampHandlerInterface </span><span class="keyword">{<br />        public function </span><span class="default">close</span><span class="keyword">(){<br />            </span><span class="comment">// return value should be true for success or false for failure<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">destroy</span><span class="keyword">(</span><span class="default">$sessionId</span><span class="keyword">){<br />            </span><span class="comment">// return value should be true for success or false for failure<br />            // ... <br />        </span><span class="keyword">}<br />        public function </span><span class="default">gc</span><span class="keyword">(</span><span class="default">$maximumLifetime</span><span class="keyword">){<br />            </span><span class="comment">// return value should be true for success or false for failure<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">open</span><span class="keyword">(</span><span class="default">$sessionSavePath</span><span class="keyword">, </span><span class="default">$sessionName</span><span class="keyword">){<br />            </span><span class="comment">// return value should be true for success or false for failure<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">read</span><span class="keyword">(</span><span class="default">$sessionId</span><span class="keyword">){<br />            </span><span class="comment">// return value should be the session data or an empty string<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">write</span><span class="keyword">(</span><span class="default">$sessionId</span><span class="keyword">, </span><span class="default">$sessionData</span><span class="keyword">){<br />            </span><span class="comment">// return value should be true for success or false for failure<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">create_sid</span><span class="keyword">(){<br />            </span><span class="comment">// available since PHP 5.5.1<br />            // invoked internally when a new session id is needed<br />            // no parameter is needed and return value should be the new session id created<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">validateId</span><span class="keyword">(</span><span class="default">$sessionId</span><span class="keyword">){<br />            </span><span class="comment">// implements SessionUpdateTimestampHandlerInterface::validateId()<br />            // available since PHP 7.0<br />            // return value should be true if the session id is valid otherwise false<br />            // if false is returned a new session id will be generated by php internally<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">updateTimestamp</span><span class="keyword">(</span><span class="default">$sessionId</span><span class="keyword">, </span><span class="default">$sessionData</span><span class="keyword">){<br />            </span><span class="comment">// implements SessionUpdateTimestampHandlerInterface::validateId()<br />            // available since PHP 7.0<br />            // return value should be true for success or false for failure<br />            // ...<br />        </span><span class="keyword">}<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126563">  <div class="votes">
    <div id="Vu126563">
    <a href="/manual/vote-note.php?id=126563&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126563">
    <a href="/manual/vote-note.php?id=126563&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126563" title="83% like this...">
    4
    </div>
  </div>
  <a href="#126563" class="name">
  <strong class="user"><em>polygon dot co dot in at gmail dot com</em></strong></a><a class="genanchor" href="#126563"> &para;</a><div class="date" title="2021-11-06 07:39"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126563">
<div class="phpcode"><code><span class="html">Below is a demo to check the order in which session function executes.<br /><br /><span class="default">&lt;?php<br /><br />ini_set</span><span class="keyword">(</span><span class="string">'session.use_strict_mode'</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br /><br />function </span><span class="default">sess_open</span><span class="keyword">(</span><span class="default">$sess_path</span><span class="keyword">, </span><span class="default">$sess_name</span><span class="keyword">) {<br />    echo </span><span class="string">'&lt;br/&gt;sess_open'</span><span class="keyword">;<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">sess_close</span><span class="keyword">() {<br />    echo </span><span class="string">'&lt;br/&gt;sess_close'</span><span class="keyword">;<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">sess_read</span><span class="keyword">(</span><span class="default">$sess_id</span><span class="keyword">) {<br />    echo </span><span class="string">'&lt;br/&gt;sess_read'</span><span class="keyword">;<br />    return </span><span class="string">''</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">sess_write</span><span class="keyword">(</span><span class="default">$sess_id</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">) {<br />    echo </span><span class="string">'&lt;br/&gt;sess_write'</span><span class="keyword">;<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">sess_destroy</span><span class="keyword">(</span><span class="default">$sess_id</span><span class="keyword">) {<br />    echo </span><span class="string">'&lt;br/&gt;sess_destroy'</span><span class="keyword">;<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">sess_gc</span><span class="keyword">(</span><span class="default">$sess_maxlifetime</span><span class="keyword">) {<br />    echo </span><span class="string">'&lt;br/&gt;sess_gc'</span><span class="keyword">;<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">sess_create_sid</span><span class="keyword">() {<br />    echo </span><span class="string">'&lt;br/&gt;sess_create_sid'</span><span class="keyword">;<br />    return </span><span class="string">'RNS'</span><span class="keyword">.</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">sess_validate_sid</span><span class="keyword">(</span><span class="default">$sess_id</span><span class="keyword">) {<br />    echo </span><span class="string">'&lt;br/&gt;sess_validate_sid'</span><span class="keyword">;<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">sess_update_timestamp</span><span class="keyword">(</span><span class="default">$sess_id</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">) {<br />    echo </span><span class="string">'&lt;br/&gt;sess_update_timestamp'</span><span class="keyword">;<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="default">session_set_save_handler</span><span class="keyword">(<br />    </span><span class="string">'sess_open'</span><span class="keyword">,<br />    </span><span class="string">'sess_close'</span><span class="keyword">,<br />    </span><span class="string">'sess_read'</span><span class="keyword">,<br />    </span><span class="string">'sess_write'</span><span class="keyword">,<br />    </span><span class="string">'sess_destroy'</span><span class="keyword">,<br />    </span><span class="string">'sess_gc'</span><span class="keyword">,<br />    </span><span class="string">'sess_create_sid'</span><span class="keyword">,<br />    </span><span class="string">'sess_validate_sid'</span><span class="keyword">,<br />    </span><span class="string">'sess_update_timestamp'<br /></span><span class="keyword">);<br /><br /></span><span class="default">session_start</span><span class="keyword">();<br /><br />echo </span><span class="string">'&lt;br/&gt;code here...'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />O/P Below when above code executed first time.<br />sess_open<br />sess_create_sid<br />sess_read<br />code here...<br />sess_write<br />sess_close<br /><br />O/P Below for next execution.<br />sess_open<br />sess_validate_sid<br />sess_read<br />code here...<br />sess_write<br />sess_close</span></code></div>
  </div>
 </div>
  <div class="note" id="122029">  <div class="votes">
    <div id="Vu122029">
    <a href="/manual/vote-note.php?id=122029&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122029">
    <a href="/manual/vote-note.php?id=122029&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122029" title="83% like this...">
    4
    </div>
  </div>
  <a href="#122029" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#122029"> &para;</a><div class="date" title="2017-12-16 07:57"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122029">
<div class="phpcode"><code><span class="html">What is not documented is that callables $validate_sid and $update_timestamp are supported since PHP 7.0. for the <br /> prototype of "bool session_set_save_handler ( callable $open , callable $close , callable $read , callable $write , callable $destroy , callable $gc [, callable $create_sid [, callable $validate_sid [, callable $update_timestamp ]]] )".<br /><br />validate_sid($sessionId)<br />  This callback is to validate $sessionId. Its return value should be true for valid session id $sessionId or false for invalid session id $sessionId. If false is returned, a new session id is generated to replace the invalid session id $sessionId.<br /><br />update_timestamp($sessionId)<br />  This call back is to update timestamp, and its return value should be true for success or false for failure.<br /><br />If you use this prototype, if you provide less than 6 parameters or if you provide more parameters than session_set_save_handler() accepts, you will get a "Wrong parameter count for session_set_save_handler()" warning.<br /><br />If you use the OOP prototype of session_set_save_handler(SessionHandlerInterface $sessionhandler [, bool $register_shutdown = true ] ), a member method named neither validate_sid nor update_timestamp of the class of $sessionhandler are not invoked even in PHP 7.2, but a member method named create_sid is supported as of PHP 5.5.1.<br /><br />It's 16th December, 2017 today, the documetation even PHP may get updated sometime afterwards.</span></code></div>
  </div>
 </div>
  <div class="note" id="114408">  <div class="votes">
    <div id="Vu114408">
    <a href="/manual/vote-note.php?id=114408&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114408">
    <a href="/manual/vote-note.php?id=114408&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114408" title="77% like this...">
    5
    </div>
  </div>
  <a href="#114408" class="name">
  <strong class="user"><em>Steven George</em></strong></a><a class="genanchor" href="#114408"> &para;</a><div class="date" title="2014-02-17 02:05"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114408">
<div class="phpcode"><code><span class="html">Note that as well as destructing objects before calling write() and close(), it seems PHP also destroys classes.  That is, you can't even call a static method of an external class in the write() and close() handlers - PHP will issue a Fatal error stating "Class xxxx not found"</span></code></div>
  </div>
 </div>
  <div class="note" id="84300">  <div class="votes">
    <div id="Vu84300">
    <a href="/manual/vote-note.php?id=84300&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84300">
    <a href="/manual/vote-note.php?id=84300&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84300" title="80% like this...">
    3
    </div>
  </div>
  <a href="#84300" class="name">
  <strong class="user"><em>tomas at slax dot org</em></strong></a><a class="genanchor" href="#84300"> &para;</a><div class="date" title="2008-07-08 07:00"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84300">
<div class="phpcode"><code><span class="html">Regarding the SAPIs: The warning mentioned in function's description (that the Current working directory is changed with some SAPIs) is very important.<br /><br />It means that if your callback 'write' function needs to write to a file in current directory, it will not find it. You have to use absolute path and not rely upon the current working directory.<br /><br />I thought this warning applies only to some strange environments like Windows, but it happens exactly on Linux + Apache 2.2 + PHP 5.</span></code></div>
  </div>
 </div>
  <div class="note" id="122610">  <div class="votes">
    <div id="Vu122610">
    <a href="/manual/vote-note.php?id=122610&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122610">
    <a href="/manual/vote-note.php?id=122610&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122610" title="75% like this...">
    2
    </div>
  </div>
  <a href="#122610" class="name">
  <strong class="user"><em>peter at brandrock dot co dot za</em></strong></a><a class="genanchor" href="#122610"> &para;</a><div class="date" title="2018-04-12 06:33"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122610">
<div class="phpcode"><code><span class="html">If saving to a database, as in the examples on this page, for performance, consider the following.<br /><br />Build the Sessions table with an index on the SessionExpires column to quickly identify rows to be deleted in the garbage collection phase.<br /><br />Rather do a garbage collection "delete from sessions where expiresOn &lt; $now" on every session start/open. If you have an index on expiry time, this will not be a big hit, and evens out the load across all users. If it is possible that a large number of sessions will expire at the same time, include a "limit 100" clause, set for whatever number is reasonable, so that each user shares the load.<br /><br />Use a varchar rather than Text to store the data, as Text will store the column off-page and is retrieved slightly slower. Use Text only if your application really does store large amounts of text in the session.</span></code></div>
  </div>
 </div>
  <div class="note" id="121607">  <div class="votes">
    <div id="Vu121607">
    <a href="/manual/vote-note.php?id=121607&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121607">
    <a href="/manual/vote-note.php?id=121607&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121607" title="75% like this...">
    2
    </div>
  </div>
  <a href="#121607" class="name">
  <strong class="user"><em>centurianii at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#121607"> &para;</a><div class="date" title="2017-09-05 12:57"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121607">
<div class="phpcode"><code><span class="html">Adding to the very useful class from: andreipa at gmail dot com<br /><br />1. You should handle session expiration &amp; data I/O from the SessionHandlerInterface methods,<br />2. You should NOT handle session regeneration and data modification from these methods but from a static method, e.g. sth like Session::start().<br />3. PHP gives a lot of examples but does NOT say what's the perspective under which one should work.<br /><br />A skeleton of such a class:<br />namespace xyz;<br />class Session implements \SessionHandlerInterface, Singleton {<br />   /** @var SessionToken $token The SessionToken of this command; <br />          this is part of my programming approach */<br />   protected $token;<br />   /** @var PDO $dbh The PDO handler to the database */<br />   protected $dbh;<br />   /** @var $savePath Where sessions are stored */<br />   protected $savePath;<br />   /** @var $type Type of sessions (['files'|'sqlite']) */<br />   protected $type;<br />   /** @var self $instance An instance of this class */<br />   static private $instance = null;<br /><br />   private function __construct() { ... }<br />   static public function getInstance() {<br />      if (self::$instance === null) {<br />         self::$instance = new self();<br />      }<br />      return self::$instance;<br />   }<br />   public function open($savePath, $sessionName) { ... }<br />   public function close() {<br />      if ($this-&gt;type == static::FILES) {<br />         return true;<br />      } elseif ($this-&gt;type == static::SQLITE) {<br />         return true;<br />      }<br />   }<br />   public function read($id) { ... }<br />   public function write($id, $data) { ... }<br />   public function destroy($id) { ... }<br />   public function gc($maxlifetime) { ... }<br />   static public function get($key) {<br />      return (isset($_SESSION[$key]))? $_SESSION[$key] : null;<br />   }<br />   static public function set($key, $value) {<br />      return $_SESSION[$key] = $value;<br />   }<br />   static public function newId() {...}<br />   static public function start($call = null, $log = false) {<br />      //1. start session (send 1st header)<br />      if (session_status() != PHP_SESSION_ACTIVE) {<br />         session_start();   //calls: open()-&gt;read()<br />      }<br /><br />      //2. $_SESSION['session']: array of session control data<br />      // existed session<br />      if (is_array(static::get('session'))) {<br />         $session = static::get('session');<br />      // new session<br />      } else {<br />         $session = array();<br />      }<br /><br />      $tmp = $_SESSION;<br />      //do sth with $session array...<br />      static::set('session', $session);<br />      session_write_close();   //calls: write()-&gt;read()-&gt;close()<br />      //create a new session inside if...else...<br />      session_id(static::newId());<br />      session_start();   //calls: open()-&gt;read()<br />      //if you want previous session data to be copied:<br />      //$_SESSION = $tmp;<br />      //do sth else with $session array and save it to new session...<br />      static::set('session', $session);<br /><br />      //6. call callback function (only on valid/new sessions)<br />      if ($call)<br />         $call();<br />      session_write_close();   //calls: write()-&gt;read()-&gt;close()<br />   }<br />   /**<br />    * Defines custom session handler.<br />    */<br />   static public function setHandler() {<br />      // commit automatic session<br />      if (ini_get('session.auto_start') == 1) {<br />         session_write_close();<br />      }<br />      $handler = static::getInstance();<br />      session_set_save_handler($handler, true);<br />   }<br />}<br /><br />Let's start a session:<br />Session::setHandler();<br />Session::start();<br /><br />Trying for hours to trace my error where the 3rd Session::read() ended to use a null Session::dbh until I realized that Session::close() should NOT destroy properties of this class!<br />Also I avoid the use of session_create_id() as it's only for PHP 7 &gt;= 7.1.0 and I use in place a static Session::newId().</span></code></div>
  </div>
 </div>
  <div class="note" id="119514">  <div class="votes">
    <div id="Vu119514">
    <a href="/manual/vote-note.php?id=119514&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119514">
    <a href="/manual/vote-note.php?id=119514&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119514" title="75% like this...">
    2
    </div>
  </div>
  <a href="#119514" class="name">
  <strong class="user"><em>shanikawm at gmail dot com</em></strong></a><a class="genanchor" href="#119514"> &para;</a><div class="date" title="2016-06-27 11:45"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119514">
<div class="phpcode"><code><span class="html">Here is a class to handle session using an Oracle table.<br /><a href="https://github.com/shanikawm/PHP_Oracle_Based_Session_Handler_Class" rel="nofollow" target="_blank">https://github.com/shanikawm/PHP_Oracle_Based_Session_Handler_Class</a><br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * By Shanika Amarasoma<br /> * Date: 6/24/2016<br /> * PHP session handler using Oracle database<br /> * Oracle Create table statement<br />        CREATE TABLE PHP_SESSIONS<br />        (<br />            SESSION_ID  VARCHAR2(256 BYTE) UNIQUE,<br />            DATA        CLOB,<br />            TOUCHED     NUMBER(38)<br />        );<br /> */<br /></span><span class="keyword">class </span><span class="default">session_handler </span><span class="keyword">implements </span><span class="default">SessionHandlerInterface<br /></span><span class="keyword">{<br />    private </span><span class="default">$con</span><span class="keyword">;<br />    public function </span><span class="default">__construct</span><span class="keyword">() {<br />        if(!</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">=</span><span class="default">oci_pconnect</span><span class="keyword">(</span><span class="default">DBUSER</span><span class="keyword">,</span><span class="default">DBPASS</span><span class="keyword">,</span><span class="default">CONNECTION_STR</span><span class="keyword">)){<br />            die(</span><span class="string">'Database connection failed !'</span><span class="keyword">);<br />        }<br />    }<br />    public function </span><span class="default">open</span><span class="keyword">(</span><span class="default">$save_path </span><span class="keyword">,</span><span class="default">$name</span><span class="keyword">){<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">close</span><span class="keyword">(){<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">read</span><span class="keyword">(</span><span class="default">$session_id</span><span class="keyword">){<br />        </span><span class="default">$query </span><span class="keyword">= </span><span class="string">"SELECT \"DATA\" FROM PHP_SESSIONS WHERE SESSION_ID=Q'{" </span><span class="keyword">. </span><span class="default">$session_id </span><span class="keyword">. </span><span class="string">"}'"</span><span class="keyword">;<br />        </span><span class="default">$stid </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">);<br />        </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="default">OCI_DEFAULT</span><span class="keyword">);<br />        </span><span class="default">$row </span><span class="keyword">= </span><span class="default">oci_fetch_array</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="default">OCI_ASSOC </span><span class="keyword">+ </span><span class="default">OCI_RETURN_LOBS</span><span class="keyword">);<br />        </span><span class="default">oci_free_statement</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">);<br />        return </span><span class="default">$row</span><span class="keyword">[</span><span class="string">'DATA'</span><span class="keyword">];<br />    }<br />    public function </span><span class="default">write</span><span class="keyword">(</span><span class="default">$session_id</span><span class="keyword">,</span><span class="default">$session_data</span><span class="keyword">){<br />        </span><span class="default">$dquery</span><span class="keyword">=</span><span class="string">"DELETE FROM PHP_SESSIONS WHERE SESSION_ID=Q'{"</span><span class="keyword">.</span><span class="default">$session_id</span><span class="keyword">.</span><span class="string">"}'"</span><span class="keyword">;<br />        </span><span class="default">$dstid </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">,</span><span class="default">$dquery</span><span class="keyword">);<br />        </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$dstid</span><span class="keyword">, </span><span class="default">OCI_NO_AUTO_COMMIT</span><span class="keyword">);<br />        </span><span class="default">oci_free_statement</span><span class="keyword">(</span><span class="default">$dstid</span><span class="keyword">);<br />        </span><span class="default">$query</span><span class="keyword">=</span><span class="string">"INSERT INTO PHP_SESSIONS(SESSION_ID,TOUCHED,\"DATA\") VALUES(Q'{"</span><span class="keyword">.</span><span class="default">$session_id</span><span class="keyword">.</span><span class="string">"}',"</span><span class="keyword">.</span><span class="default">time</span><span class="keyword">().</span><span class="string">",EMPTY_CLOB()) RETURNING \"DATA\" INTO :clob"</span><span class="keyword">;<br />        </span><span class="default">$stid </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">,</span><span class="default">$query</span><span class="keyword">);<br />        </span><span class="default">$clob</span><span class="keyword">=</span><span class="default">oci_new_descriptor</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">,</span><span class="default">OCI_D_LOB</span><span class="keyword">);<br />        </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="string">':clob'</span><span class="keyword">, </span><span class="default">$clob</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">OCI_B_CLOB</span><span class="keyword">);<br />        if(!</span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="default">OCI_NO_AUTO_COMMIT</span><span class="keyword">)){<br />            @</span><span class="default">oci_free_statement</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">);<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        if(</span><span class="default">$clob</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">)){<br />            </span><span class="default">oci_commit</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">);<br />            </span><span class="default">$return</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">oci_rollback</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">);<br />            </span><span class="default">$return</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;<br />        }<br />        </span><span class="default">$clob</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();<br />        </span><span class="default">oci_free_statement</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">);<br />        return </span><span class="default">$return</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">destroy</span><span class="keyword">(</span><span class="default">$session_id</span><span class="keyword">){<br />        </span><span class="default">$query</span><span class="keyword">=</span><span class="string">"DELETE FROM PHP_SESSIONS WHERE SESSION_ID=Q'{"</span><span class="keyword">.</span><span class="default">$session_id</span><span class="keyword">.</span><span class="string">"}'"</span><span class="keyword">;<br />        </span><span class="default">$stid </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">,</span><span class="default">$query</span><span class="keyword">);<br />        </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="default">OCI_DEFAULT</span><span class="keyword">);<br />        </span><span class="default">$rows</span><span class="keyword">=</span><span class="default">oci_num_rows</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">);<br />        </span><span class="default">oci_commit</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">);<br />        </span><span class="default">oci_free_statement</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">);<br />        if(</span><span class="default">$rows</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">){<br />            return </span><span class="default">true</span><span class="keyword">;<br />        } else {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br />    public function </span><span class="default">gc</span><span class="keyword">(</span><span class="default">$maxlifetime</span><span class="keyword">){<br />        </span><span class="default">$query</span><span class="keyword">=</span><span class="string">"DELETE FROM PHP_SESSIONS WHERE TOUCHED&lt;"</span><span class="keyword">.(</span><span class="default">time</span><span class="keyword">()-</span><span class="default">$maxlifetime</span><span class="keyword">);<br />        </span><span class="default">$stid </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">,</span><span class="default">$query</span><span class="keyword">);<br />        </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="default">OCI_DEFAULT</span><span class="keyword">);<br />        </span><span class="default">$rows</span><span class="keyword">=</span><span class="default">oci_num_rows</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">);<br />        </span><span class="default">oci_commit</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">);<br />        </span><span class="default">oci_free_statement</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">);<br />        if(</span><span class="default">$rows</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">){<br />            return </span><span class="default">true</span><span class="keyword">;<br />        } else {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br />}<br /></span><span class="default">session_set_save_handler</span><span class="keyword">(new </span><span class="default">session_handler</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53747">  <div class="votes">
    <div id="Vu53747">
    <a href="/manual/vote-note.php?id=53747&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53747">
    <a href="/manual/vote-note.php?id=53747&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53747" title="75% like this...">
    2
    </div>
  </div>
  <a href="#53747" class="name">
  <strong class="user"><em>korvus at kgstudios dot net</em></strong></a><a class="genanchor" href="#53747"> &para;</a><div class="date" title="2005-06-11 05:34"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53747">
<div class="phpcode"><code><span class="html">It seems when you call 'session_name()', php loads the session id automatically from GET ( if the index exists ) and passes it to the 'read' callback method correctly, but the 'write' callback is invoked twice: first the auto-generated session id, then the custom session id<br /><br />So be aware of what queries you execute inside the callback .. I got crazy because I used a MySQL 'REPLACE' statement to agilize, and I spent a lot of hours trying to understand why 2 rows instead of 1 were being affected ( the first id was inserting, the second updating )<br /><br />I hope this helps!</span></code></div>
  </div>
 </div>
  <div class="note" id="27153">  <div class="votes">
    <div id="Vu27153">
    <a href="/manual/vote-note.php?id=27153&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27153">
    <a href="/manual/vote-note.php?id=27153&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27153" title="71% like this...">
    3
    </div>
  </div>
  <a href="#27153" class="name">
  <strong class="user"><em>ivo at magstudio dot net</em></strong></a><a class="genanchor" href="#27153"> &para;</a><div class="date" title="2002-11-25 07:08"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27153">
<div class="phpcode"><code><span class="html">Just a few words to explain some troubles while using session_set_save_handler(). It appears that internally PHP calls session management functions in this order: open(), read(), write(), close(). Close() function is called even if you does not make a call to sesison_start(), perhaps for some reasons like cleaning. <br />   If you try to redefine these functions and call sessions_set_save_handler() but something doesn't work, (in my case the ssion data hasn't been written) it's a good idea to debug them in the order they are called. They doesn't produce error output to browser but you can use print or echo. <br />   Shortly, if your write() function doesn't work as expected take a look for errors in previous functions - open() and read(). <br />   I hope that this will help to save someone few hours debugging.</span></code></div>
  </div>
 </div>
  <div class="note" id="49630">  <div class="votes">
    <div id="Vu49630">
    <a href="/manual/vote-note.php?id=49630&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49630">
    <a href="/manual/vote-note.php?id=49630&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49630" title="66% like this...">
    5
    </div>
  </div>
  <a href="#49630" class="name">
  <strong class="user"><em>oliver at teqneers dot de</em></strong></a><a class="genanchor" href="#49630"> &para;</a><div class="date" title="2005-02-03 03:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49630">
<div class="phpcode"><code><span class="html">For some people it might be important to know, that if the standard session handler has been overwritten with session_set_save_handler, no locking is working anymore (between session_read and session_write). The following might happen:<br /><br />script "A" start         .<br />read session data        .<br />.                        script "B" start<br />.                        read session data<br />running (30secs)         add session data<br />.                        write sesion data<br />.                        script "B" stop<br />write session data       .<br />script "A" stop          .<br /><br />If a script "A" runs for a long time (say 30secs) the same user might start another script "B", which also uses a session. Script "B" will start and read session data, even though script "A" is still running. Because script "B" is much faster it will finish its work and write back its session data before script "A" has ended. Now script "A" ends and overwrites all of script "B"'s session data. If you DON'T use session_set_save_handler, this cannot happend, because in this case, PHP will not start script "B" until script "A" ends.</span></code></div>
  </div>
 </div>
  <div class="note" id="89381">  <div class="votes">
    <div id="Vu89381">
    <a href="/manual/vote-note.php?id=89381&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89381">
    <a href="/manual/vote-note.php?id=89381&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89381" title="66% like this...">
    4
    </div>
  </div>
  <a href="#89381" class="name">
  <strong class="user"><em>e dot sand at elisand dot com</em></strong></a><a class="genanchor" href="#89381"> &para;</a><div class="date" title="2009-03-04 11:42"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89381">
<div class="phpcode"><code><span class="html">The "binary" data that is in the session data appears to surround class/object names, and if you pass your session data through a function to sanitize it for SQL injection, you may indeed run in to problems.
<br />
<br />For example, using the PDO::quote() function to prepare the data for injection (in my case for SQLite3), it was stopping short as soon as it encountered the first bit of binary data, causing my session information to be corrupted.
<br />
<br />This change *must* have happened somewhere in the 5.2 series, because I just started encountering this problem recently on a code base that had been tested &amp; working on earlier versions of PHP 5.2.
<br />
<br />This may in fact be a bug - I have not yet checked... but beware, and perhaps using base64 to encode/decode your session data is a good thing to do just to be sure (though you are now left unable to visually inspect serialized session information at the storage level which is a rather big problem for on-the-fly debugging of sessions).</span></code></div>
  </div>
 </div>
  <div class="note" id="78428">  <div class="votes">
    <div id="Vu78428">
    <a href="/manual/vote-note.php?id=78428&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78428">
    <a href="/manual/vote-note.php?id=78428&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78428" title="66% like this...">
    4
    </div>
  </div>
  <a href="#78428" class="name">
  <strong class="user"><em>james at dunmore dot me dot uk</em></strong></a><a class="genanchor" href="#78428"> &para;</a><div class="date" title="2007-10-11 08:52"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78428">
<div class="phpcode"><code><span class="html">I think it is very important here to stress that the WRITE method should use UPDATE+INSERT (or mysql specific REPLACE).<br /><br />There is example code "out there" that uses just UPDATE for the write method, in which case, when session_regenerate_id is called, session data is lost (as an update would fail, as the key has changed).<br /><br />I've just wasted a whole day due to this (I know I should have thought it through / RTFM, but it is an easy trap to fall into).</span></code></div>
  </div>
 </div>
  <div class="note" id="122816">  <div class="votes">
    <div id="Vu122816">
    <a href="/manual/vote-note.php?id=122816&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122816">
    <a href="/manual/vote-note.php?id=122816&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122816" title="66% like this...">
    2
    </div>
  </div>
  <a href="#122816" class="name">
  <strong class="user"><em>tony at marston-home dot demon dot co dot uk</em></strong></a><a class="genanchor" href="#122816"> &para;</a><div class="date" title="2018-06-10 03:43"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122816">
<div class="phpcode"><code><span class="html">Your custom session handler should not contain calls to any of the session functions, such as session_name() or session_id(), as the relevant values are passed as arguments on various handler methods. Attempting to obtain values from alternative sources may not work as expected.</span></code></div>
  </div>
 </div>
  <div class="note" id="103055">  <div class="votes">
    <div id="Vu103055">
    <a href="/manual/vote-note.php?id=103055&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103055">
    <a href="/manual/vote-note.php?id=103055&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103055" title="66% like this...">
    3
    </div>
  </div>
  <a href="#103055" class="name">
  <strong class="user"><em>frank at interactinet dot com</em></strong></a><a class="genanchor" href="#103055"> &para;</a><div class="date" title="2011-03-22 01:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103055">
<div class="phpcode"><code><span class="html">I had trouble with committing session data.<br />To "commit and continue" without closing your session, put this at the top of your "write" method:<br /><br /><span class="default">&lt;?php<br /><br />$id </span><span class="keyword">= </span><span class="default">session_id</span><span class="keyword">();<br /></span><span class="default">session_write_close</span><span class="keyword">();<br /></span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />Note that ANY time php generates a new session id, it is not automatically updated in a database. This can be helpful:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">public function </span><span class="default">resetSessionId</span><span class="keyword">()<br />{<br />    </span><span class="default">$old </span><span class="keyword">= </span><span class="default">session_id</span><span class="keyword">();<br />    </span><span class="default">session_regenerate_id</span><span class="keyword">();<br />    </span><span class="default">$new </span><span class="keyword">= </span><span class="default">session_id</span><span class="keyword">();<br />    </span><span class="default">SessionHandler</span><span class="keyword">::</span><span class="default">regenerate_id</span><span class="keyword">(</span><span class="default">$old</span><span class="keyword">,</span><span class="default">$new</span><span class="keyword">);<br />}<br /><br />public function </span><span class="default">regenerate_id</span><span class="keyword">(</span><span class="default">$old</span><span class="keyword">,</span><span class="default">$new</span><span class="keyword">)<br />{<br />    </span><span class="default">$db </span><span class="keyword">= </span><span class="default">mysqli</span><span class="keyword">-&gt;</span><span class="default">connect</span><span class="keyword">(...);<br /><br />    </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'UPDATE sessions SET session_id = \''</span><span class="keyword">.</span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">escape_string</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">).</span><span class="string">'\' <br />    WHERE session_id = \''</span><span class="keyword">.</span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">escape_string</span><span class="keyword">(</span><span class="default">$old</span><span class="keyword">).</span><span class="string">'\''</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118592">  <div class="votes">
    <div id="Vu118592">
    <a href="/manual/vote-note.php?id=118592&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118592">
    <a href="/manual/vote-note.php?id=118592&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118592" title="64% like this...">
    4
    </div>
  </div>
  <a href="#118592" class="name">
  <strong class="user"><em>carlos dot vini at gmail dot com</em></strong></a><a class="genanchor" href="#118592"> &para;</a><div class="date" title="2016-01-05 01:25"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118592">
<div class="phpcode"><code><span class="html">If you have a custom handler registered ini_get('session.save_handler') will return 'user' instead of 'file'</span></code></div>
  </div>
 </div>
  <div class="note" id="69763">  <div class="votes">
    <div id="Vu69763">
    <a href="/manual/vote-note.php?id=69763&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69763">
    <a href="/manual/vote-note.php?id=69763&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69763" title="64% like this...">
    5
    </div>
  </div>
  <a href="#69763" class="name">
  <strong class="user"><em>matt at openflows dot org</em></strong></a><a class="genanchor" href="#69763"> &para;</a><div class="date" title="2006-09-19 05:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69763">
<div class="phpcode"><code><span class="html">Note that for security reasons the Debian and Ubuntu distributions of php do not call _gc to remove old sessions, but instead run /etc/cron.d/php*, which check the value of session.gc_maxlifetime in php.ini and delete the session files in /var/lib/php*.  This is all fine, but it means if you write your own session handlers you'll need to explicitly call your _gc function yourself.  A good place to do this is in your _close function, like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">_close</span><span class="keyword">() {<br />    </span><span class="default">_gc</span><span class="keyword">(</span><span class="default">get_cfg_var</span><span class="keyword">(</span><span class="string">"session.gc_maxlifetime"</span><span class="keyword">));<br />   </span><span class="comment">// rest of function goes here<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98071">  <div class="votes">
    <div id="Vu98071">
    <a href="/manual/vote-note.php?id=98071&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98071">
    <a href="/manual/vote-note.php?id=98071&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98071" title="66% like this...">
    2
    </div>
  </div>
  <a href="#98071" class="name">
  <strong class="user"><em>dummynick at gmail dot com</em></strong></a><a class="genanchor" href="#98071"> &para;</a><div class="date" title="2010-05-24 08:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98071">
<div class="phpcode"><code><span class="html">I was getting Fatal error: Exception thrown without a stack frame and it took days to figure out the reason. I am using memcache to store sessions and in my custom class I use Memcache class in write method.<br /><br />I put the code in the write method inside try-catch block and it solved my problem.</span></code></div>
  </div>
 </div>
  <div class="note" id="94962">  <div class="votes">
    <div id="Vu94962">
    <a href="/manual/vote-note.php?id=94962&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94962">
    <a href="/manual/vote-note.php?id=94962&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94962" title="66% like this...">
    2
    </div>
  </div>
  <a href="#94962" class="name">
  <strong class="user"><em>joel the usual at sign then purerave.com</em></strong></a><a class="genanchor" href="#94962"> &para;</a><div class="date" title="2009-12-04 10:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94962">
<div class="phpcode"><code><span class="html">When storing sessions in a DB, it's usually beneficial to use an existing custom DB object, but this creates problems with the latest version of PHP 5.3.1. This used to work fine on PHP 5.2.x (Linux and Windows).<br /><br />The problem now is that session_write_close() is not automatically called when execution ends, but rather after all the objects have been destructed, including the DB object!<br /><br />There are two ways around this, either manually calling session_write_close() at the end of your script(s), or not using the DB object.<br /><br />I'm sure this is the intended behavior from the beginning.</span></code></div>
  </div>
 </div>
  <div class="note" id="90431">  <div class="votes">
    <div id="Vu90431">
    <a href="/manual/vote-note.php?id=90431&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90431">
    <a href="/manual/vote-note.php?id=90431&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90431" title="64% like this...">
    4
    </div>
  </div>
  <a href="#90431" class="name">
  <strong class="user"><em>yangqingrong at gmail dot com</em></strong></a><a class="genanchor" href="#90431"> &para;</a><div class="date" title="2009-04-21 09:44"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90431">
<div class="phpcode"><code><span class="html">session_set_save_handler is used before session_start.if your session is setted as auto start. it will return FALSE value.so you need add session_write_close() before session_set_save_handler to cancel the session's auto start.it  likes this:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />qq:290359552<br />*/<br /></span><span class="default">session_write_close</span><span class="keyword">(); </span><span class="comment">//cancel the session's auto start,important<br /><br /></span><span class="keyword">function </span><span class="default">open</span><span class="keyword">()<br />{<br />   ...<br />}<br />....<br /></span><span class="default">session_set_save_handler</span><span class="keyword">( ... );<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95811">  <div class="votes">
    <div id="Vu95811">
    <a href="/manual/vote-note.php?id=95811&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95811">
    <a href="/manual/vote-note.php?id=95811&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95811" title="66% like this...">
    1
    </div>
  </div>
  <a href="#95811" class="name">
  <strong class="user"><em>bart2yk at yahoo dot com</em></strong></a><a class="genanchor" href="#95811"> &para;</a><div class="date" title="2010-01-22 01:57"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95811">
<div class="phpcode"><code><span class="html">You can call the session_write in db object destructor to be shore that you still have a connection to mysql and the session is write.</span></code></div>
  </div>
 </div>
  <div class="note" id="68652">  <div class="votes">
    <div id="Vu68652">
    <a href="/manual/vote-note.php?id=68652&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68652">
    <a href="/manual/vote-note.php?id=68652&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68652" title="66% like this...">
    1
    </div>
  </div>
  <a href="#68652" class="name">
  <strong class="user"><em>sneakyimp AT hotmail DOT com</em></strong></a><a class="genanchor" href="#68652"> &para;</a><div class="date" title="2006-08-04 09:20"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68652">
<div class="phpcode"><code><span class="html">the behavior, return values, and exact time of calling for these functions is pretty poorly documented here.  i thought folks might like to know that:
<br />
<br />1) calling session_start() triggers PHP to first call your open function and then call your read function before resuming with the code immediately following your session_start() call.
<br />
<br />2) calling session_id('some_value') within your open function WILL NOT SET THE SESSION COOKIE (at least not on my setup - PHP 4.4.1).  Assuming you defined some function to validate a session id called my_func(), you might want to do something like this in your open function:
<br />
<br /><span class="default">&lt;?php
<br />  </span><span class="keyword">function </span><span class="default">_open</span><span class="keyword">(</span><span class="default">$save_path</span><span class="keyword">, </span><span class="default">$session_name</span><span class="keyword">) {
<br />    </span><span class="comment">// check for session id
<br />    </span><span class="default">$sess_id </span><span class="keyword">= </span><span class="default">session_id</span><span class="keyword">();
<br />    if (empty(</span><span class="default">$sess_id</span><span class="keyword">) || !</span><span class="default">myfunc</span><span class="keyword">(</span><span class="default">$sess_id</span><span class="keyword">)) {
<br />      </span><span class="comment">//session_id is INVALID - generating new
<br />      </span><span class="default">$new_id </span><span class="keyword">= </span><span class="default">md5</span><span class="keyword">(</span><span class="default">uniqid</span><span class="keyword">(</span><span class="string">"some random seed here"</span><span class="keyword">));
<br />      </span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$new_id</span><span class="keyword">);
<br />      </span><span class="default">setcookie</span><span class="keyword">(</span><span class="default">session_name</span><span class="keyword">(),
<br />                    </span><span class="default">$new_id</span><span class="keyword">,
<br />                    </span><span class="default">0</span><span class="keyword">,
<br />                    </span><span class="string">"/"</span><span class="keyword">,
<br />                    </span><span class="string">".mydomain.com"</span><span class="keyword">);
<br />      }
<br />
<br />    return </span><span class="default">true</span><span class="keyword">;
<br />  } </span><span class="comment">// _open()
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89564">  <div class="votes">
    <div id="Vu89564">
    <a href="/manual/vote-note.php?id=89564&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89564">
    <a href="/manual/vote-note.php?id=89564&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89564" title="61% like this...">
    5
    </div>
  </div>
  <a href="#89564" class="name">
  <strong class="user"><em>harald at hholzer at</em></strong></a><a class="genanchor" href="#89564"> &para;</a><div class="date" title="2009-03-13 10:40"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89564">
<div class="phpcode"><code><span class="html">after spending 8 hours to find out whats going on..<br /><br />just for the records, because php.net ignore the real world out there:<br /><br />debian 5 installs by default the php-suhosin module, which changes the behavior of session_set_save_handler read/write function.<br /><br />on calling the session write function the session data will be encrypted, and the returning string from the read function are decrypted and verified.<br /><br />the encrypted data is no more compatible with session_encode/session_decode.<br /><br />and breaks by default, subdomain handling and multiple host setups where different document roots are used.<br /><br />for futher information look at:<br /><a href="http://www.hardened-php.net/suhosin/configuration.html" rel="nofollow" target="_blank">http://www.hardened-php.net/suhosin/configuration.html</a><br /><br />session sample data (debian 4):<br />test|s:3:"sdf";<br /><br />session sample data (debian 5, with php-suhosin):<br />3GdlPEGr2kYgRFDs-pUSoKomZ4fN7r5BM5oKOCMsWNc...<br /><br />i thing the suhosin patch should report a warning in case of invalid session data, to get a clue whats going wrong.</span></code></div>
  </div>
 </div>
  <div class="note" id="82293">  <div class="votes">
    <div id="Vu82293">
    <a href="/manual/vote-note.php?id=82293&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82293">
    <a href="/manual/vote-note.php?id=82293&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82293" title="62% like this...">
    2
    </div>
  </div>
  <a href="#82293" class="name">
  <strong class="user"><em>james dot ellis at gmail dot com</em></strong></a><a class="genanchor" href="#82293"> &para;</a><div class="date" title="2008-04-04 03:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82293">
<div class="phpcode"><code><span class="html">When writing your own session handler, particularly database session handlers, play close attention to garbage cleanup and how it could affect server load.<br /><br />To pick a round number example:<br /><br />If you have 1000 requests per minute on session enabled pages, everyone needs a session started but the session garbage cleanup does not need to run every request. Doing so would cause unrequired queries on the database server.<br /><br />In this example, setting your probability/divisor to 1/1000 would be sufficient to clean up old sessions at a minimum once a minute. If you don't need that kind of granularity, increase the gc divisor.<br /><br />Finding the tradeoff between clearing up old sessions and server load is the important aspect here.</span></code></div>
  </div>
 </div>
  <div class="note" id="68943">  <div class="votes">
    <div id="Vu68943">
    <a href="/manual/vote-note.php?id=68943&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68943">
    <a href="/manual/vote-note.php?id=68943&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68943" title="62% like this...">
    2
    </div>
  </div>
  <a href="#68943" class="name">
  <strong class="user"><em>information at saunderswebsolutions dot com</em></strong></a><a class="genanchor" href="#68943"> &para;</a><div class="date" title="2006-08-16 11:56"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68943">
<div class="phpcode"><code><span class="html">Note that if session.auto_start is set to On in the php.ini, your session_set_save_handler will return false as the session has already been initialized.<br /><br />If you are finding that your code works OK on one machine but doesn't work on another, check to see if session.auto_start is set to On</span></code></div>
  </div>
 </div>
  <div class="note" id="107805">  <div class="votes">
    <div id="Vu107805">
    <a href="/manual/vote-note.php?id=107805&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107805">
    <a href="/manual/vote-note.php?id=107805&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107805" title="60% like this...">
    2
    </div>
  </div>
  <a href="#107805" class="name">
  <strong class="user"><em>Rusty X</em></strong></a><a class="genanchor" href="#107805"> &para;</a><div class="date" title="2012-03-06 09:39"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107805">
<div class="phpcode"><code><span class="html">It is important to understand that PHP's default file-based session handling LOCKS the session file, inherently allowing ONLY ONE thread handling any given session at a time.<br />When you implement a DB-backed session storage and you do not do any locking, you may run into situations where more than one thread is serving the same session, and you may LOSE DATA because the second thread will overwrite any session changes done by the first thread.<br />You should therefore think about locking the session somehow if you want to have the exact same behavior as with the default file-based implementation. For example, with InnoDB you could do a SELECT ... FOR UPDATE, or you can use the GET_LOCK() function.</span></code></div>
  </div>
 </div>
  <div class="note" id="45803">  <div class="votes">
    <div id="Vu45803">
    <a href="/manual/vote-note.php?id=45803&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45803">
    <a href="/manual/vote-note.php?id=45803&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45803" title="57% like this...">
    1
    </div>
  </div>
  <a href="#45803" class="name">
  <strong class="user"><em>Balu</em></strong></a><a class="genanchor" href="#45803"> &para;</a><div class="date" title="2004-09-19 03:26"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45803">
<div class="phpcode"><code><span class="html">If a session is closed the save-handlers seem to be resetted (in PHP 4.1.2 they are), so you need to run session_set_save_handler() again after e.g. running session_write_close() and restarting the session with session_start();</span></code></div>
  </div>
 </div>
  <div class="note" id="92658">  <div class="votes">
    <div id="Vu92658">
    <a href="/manual/vote-note.php?id=92658&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92658">
    <a href="/manual/vote-note.php?id=92658&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92658" title="55% like this...">
    1
    </div>
  </div>
  <a href="#92658" class="name">
  <strong class="user"><em>skds1433 at hotmail dot com</em></strong></a><a class="genanchor" href="#92658"> &para;</a><div class="date" title="2009-08-02 03:21"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92658">
<div class="phpcode"><code><span class="html">I pulled a really stupid move. If you are trying to debug your garbage collector, make sure you call the following &gt;&gt;&gt; BEFORE &lt;&lt;&lt; "session_start":<br /><br /><span class="default">&lt;?php<br />ini_set</span><span class="keyword">(</span><span class="string">'session.gc_probability'</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'session.gc_divisor'</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I was sure it was a bug in PHP, but turned out (like 99% of the time) to be me own fault.</span></code></div>
  </div>
 </div>
  <div class="note" id="129229">  <div class="votes">
    <div id="Vu129229">
    <a href="/manual/vote-note.php?id=129229&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129229">
    <a href="/manual/vote-note.php?id=129229&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129229" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129229" class="name">
  <strong class="user"><em>biba dot vasyl at gmail dot com</em></strong></a><a class="genanchor" href="#129229"> &para;</a><div class="date" title="2024-02-09 07:23"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129229">
<div class="phpcode"><code><span class="html">if you use the interface (SessionHandlerInterface) to implement the storage of the session in the mysql database, it is not clear what the read method should return, because the return is specified in the interface: string|false, that is, if I refer to the type:<br />public function read(string $id): string|false {<br />      if ($id) {<br />            $sql = "SELECT `session_id`, `data` FROM `session` WHERE `session_id` = '" . $this-&gt;db-&gt;escape($id) . "'";<br />            pp($sql);<br />            $query = $this-&gt;db-&gt;query($sql);<br />            if ($query-&gt;num_rows) {<br />                //return (isset($query-&gt;one['data']) ? (array)json_decode($query-&gt;one['data'], true) : []);<br />                return $query-&gt;one['session_id'];<br />            } else {<br />                return '';<br />            }<br />      }<br />      return false;<br />}<br />ref.: <a href="https://www.php.net/manual/ru/sessionhandlerinterface.read.php" rel="nofollow" target="_blank">https://www.php.net/manual/ru/sessionhandlerinterface.read.php</a><br />then I will receive an error response of the following plan: Error #: 2, message: session_start(): Failed to decode session object. Session has been destroyed</span></code></div>
  </div>
 </div>
  <div class="note" id="128073">  <div class="votes">
    <div id="Vu128073">
    <a href="/manual/vote-note.php?id=128073&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128073">
    <a href="/manual/vote-note.php?id=128073&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128073" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128073" class="name">
  <strong class="user"><em>polygon dot co dot in at gmail dot com</em></strong></a><a class="genanchor" href="#128073"> &para;</a><div class="date" title="2023-01-01 12:41"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128073">
<div class="phpcode"><code><span class="html">Although, session_set_save_handler() has support for saving session data via other modes, This does not support a way for saving session data in COOKIES. This is required for a site with a huge concurrent request the recommended solution by session_set_save_handler() does not fit the load site is handling.<br />So, the other way around to do this is as below.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// start.php<br /></span><span class="default">ob_start</span><span class="keyword">(); </span><span class="comment">// Turn on output buffering<br /> <br /></span><span class="default">$sessCookieName </span><span class="keyword">= </span><span class="default">session_name</span><span class="keyword">();<br /></span><span class="default">$_SESSION </span><span class="keyword">= </span><span class="default">json_decode</span><span class="keyword">(</span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="default">$sessCookieName</span><span class="keyword">]), </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">// Code<br /></span><span class="keyword">function </span><span class="default">echosess</span><span class="keyword">() {<br />    echo </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">];<br />}<br /></span><span class="default">echosess</span><span class="keyword">();<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="comment">// end.php<br /></span><span class="default">$op </span><span class="keyword">= </span><span class="default">ob_get_clean</span><span class="keyword">(); </span><span class="comment">// Get current buffer contents and delete current output buffer<br /></span><span class="default">$encryptedData </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$_SESSION</span><span class="keyword">));<br /></span><span class="default">setcookie</span><span class="keyword">(</span><span class="default">$sessCookieName</span><span class="keyword">, </span><span class="default">$encryptedData</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">() + (</span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">"session.gc_maxlifetime"</span><span class="keyword">)), </span><span class="string">'/'</span><span class="keyword">);<br />echo </span><span class="default">$op</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />If more security is required about the data of the session in cookie, then key based encryption/decryption can solve the issue.</span></code></div>
  </div>
 </div>
  <div class="note" id="117952">  <div class="votes">
    <div id="Vu117952">
    <a href="/manual/vote-note.php?id=117952&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117952">
    <a href="/manual/vote-note.php?id=117952&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117952" title="100% like this...">
    2
    </div>
  </div>
  <a href="#117952" class="name">
  <strong class="user"><em>dimzon541 at gmail dot com</em></strong></a><a class="genanchor" href="#117952"> &para;</a><div class="date" title="2015-09-06 11:23"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117952">
<div class="phpcode"><code><span class="html">Persisting PHP sessions into mongodb (allows NLB without affinity)<br /><a href="https://gist.github.com/dimzon/62eeb9b8561bcb9f0c6d" rel="nofollow" target="_blank">https://gist.github.com/dimzon/62eeb9b8561bcb9f0c6d</a></span></code></div>
  </div>
 </div>
  <div class="note" id="129683">  <div class="votes">
    <div id="Vu129683">
    <a href="/manual/vote-note.php?id=129683&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129683">
    <a href="/manual/vote-note.php?id=129683&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129683" title="no votes...">
    0
    </div>
  </div>
  <a href="#129683" class="name">
  <strong class="user"><em>polygon dot co dot in at gmail dot com</em></strong></a><a class="genanchor" href="#129683"> &para;</a><div class="date" title="2024-08-01 08:08"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129683">
<div class="phpcode"><code><span class="html">Sessions data can be saved in different modes eg; Files, SQL and No SQL  databases.<br /><br />But while benchmarking session it is observed File based session leads to depletion of inodes, SQL databases leads to slower performance due to large number of indexed session ids and no SQL databases leads to performance issues.<br /><br />Benchmarking session is simulating session behaviour on attacks that may bring down a website or effect website performance.<br /><br />As a solution to this on can start the session as below in the common file.<br /><br />if ( isset( $_COOKIE['PHPSESSID'] ) ) {<br />    // Wrong cookie values won't create a new session file/entry.<br />    // Because its a read only.<br />    session_start(<br />        [<br />            'read_and_close'  =&gt; true,<br />        ]<br />    );<br />}<br /><br />This will start a read only session.<br /><br />Once you are done with this and later in script you need to make changes (add/remove) session data. One can start the session in the normal way which we used to do earlier.<br /><br />session_start();<br /><br />and do required modifications.<br /><br />$_SESSION[‘’key] = $value;<br /><br />OR<br /><br />unset($_SESSION[‘’some_key]);</span></code></div>
  </div>
 </div>
  <div class="note" id="128788">  <div class="votes">
    <div id="Vu128788">
    <a href="/manual/vote-note.php?id=128788&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128788">
    <a href="/manual/vote-note.php?id=128788&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128788" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128788" class="name">
  <strong class="user"><em>polygon dot co dot in at gmail dot com</em></strong></a><a class="genanchor" href="#128788"> &para;</a><div class="date" title="2023-08-11 09:44"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128788">
<div class="phpcode"><code><span class="html">How to use Cookie for managing session data with encryption.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MySessionHandler </span><span class="keyword">implements </span><span class="default">SessionHandlerInterface<br /></span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        </span><span class="comment">// Store the key and IV somewhere safe<br />        //$key = openssl_random_pseudo_bytes(32); // 256-bit key<br />        //$iv = openssl_random_pseudo_bytes(16); // 128-bit IV<br />        <br />        // Store the base64 key and IV somewhere safe<br />        //$key_base64 = base64_encode($key);<br />        //$iv_base64 = base64_encode($vi);<br /><br />        // Use the store base64 key and IV below<br />        </span><span class="default">$key_base64 </span><span class="keyword">= </span><span class="string">'s8Livn/jULM6HDdPY76E3aXtfELdleTaqOC8HgTfW7M='</span><span class="keyword">;<br />        </span><span class="default">$iv_base64 </span><span class="keyword">= </span><span class="string">'nswqKP23TT+deVNuaV5nXQ=='</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key </span><span class="keyword">= </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$key_base64</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iv </span><span class="keyword">= </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$iv_base64</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">// Encryption<br />    </span><span class="keyword">function </span><span class="default">encryptSess</span><span class="keyword">(</span><span class="default">$plaintext</span><span class="keyword">)<br />    {<br />        return </span><span class="default">openssl_encrypt</span><span class="keyword">(</span><span class="default">$plaintext</span><span class="keyword">, </span><span class="string">'AES-256-CBC'</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">, </span><span class="default">OPENSSL_RAW_DATA</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iv</span><span class="keyword">);    <br />    }<br /><br />    </span><span class="comment">// Decryption<br />    </span><span class="keyword">function </span><span class="default">decryptSess</span><span class="keyword">(</span><span class="default">$ciphertext</span><span class="keyword">)<br />    {<br />        return </span><span class="default">openssl_decrypt</span><span class="keyword">(</span><span class="default">$ciphertext</span><span class="keyword">, </span><span class="string">'AES-256-CBC'</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">, </span><span class="default">OPENSSL_RAW_DATA</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iv</span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">open</span><span class="keyword">(</span><span class="default">$savePath</span><span class="keyword">, </span><span class="default">$sessionName</span><span class="keyword">): </span><span class="default">bool<br />    </span><span class="keyword">{<br />        </span><span class="default">ob_start</span><span class="keyword">(); </span><span class="comment">// Turn on output buffering<br />        </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">close</span><span class="keyword">(): </span><span class="default">bool<br />    </span><span class="keyword">{<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />    #[</span><span class="default">\ReturnTypeWillChange</span><span class="keyword">]<br />    public function </span><span class="default">read</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">)<br />    {<br />        if (isset(</span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="default">session_name</span><span class="keyword">()])) {<br />            return (string)</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">decryptSess</span><span class="keyword">(</span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="default">session_name</span><span class="keyword">()]));<br />        } else {<br />            return </span><span class="string">''</span><span class="keyword">;<br />        }<br />    }<br /><br />    public function </span><span class="default">write</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">): </span><span class="default">bool<br />    </span><span class="keyword">{<br />        </span><span class="default">$op </span><span class="keyword">= </span><span class="default">ob_get_clean</span><span class="keyword">();<br />        </span><span class="default">$encryptedData </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">encryptSess</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">));<br />        </span><span class="default">setcookie</span><span class="keyword">(</span><span class="default">session_name</span><span class="keyword">(), </span><span class="default">$encryptedData</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">() + (</span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">"session.gc_maxlifetime"</span><span class="keyword">)), </span><span class="string">'/'</span><span class="keyword">);<br />        echo </span><span class="default">$op</span><span class="keyword">;<br /><br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">destroy</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">): </span><span class="default">bool<br />    </span><span class="keyword">{<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />    #[</span><span class="default">\ReturnTypeWillChange</span><span class="keyword">]<br />    public function </span><span class="default">gc</span><span class="keyword">(</span><span class="default">$maxlifetime</span><span class="keyword">)<br />    {<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$handler </span><span class="keyword">= new </span><span class="default">MySessionHandler</span><span class="keyword">();<br /></span><span class="default">session_set_save_handler</span><span class="keyword">(</span><span class="default">$handler</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$_SESSION</span><span class="keyword">);<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">] = </span><span class="default">10000</span><span class="keyword">;<br /><br />echo </span><span class="string">'&lt;br/&gt;Hello World'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120493">  <div class="votes">
    <div id="Vu120493">
    <a href="/manual/vote-note.php?id=120493&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120493">
    <a href="/manual/vote-note.php?id=120493&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120493" title="100% like this...">
    1
    </div>
  </div>
  <a href="#120493" class="name">
  <strong class="user"><em>nickleus</em></strong></a><a class="genanchor" href="#120493"> &para;</a><div class="date" title="2017-01-20 03:52"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120493">
<div class="phpcode"><code><span class="html">i dont see any mention of what happens when eg "open" calls "die", like mentioned in docs for "register_shutdown_function":<br /><br />"If you call exit() within one registered shutdown function, processing will stop completely and no other registered shutdown functions will be called."<br /><br /><a href="http://php.net/manual/en/function.register-shutdown-function.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.register-shutdown-function.php</a><br /><br />my result: same behavior--"read" will not get called if "open" calls "die"/"exit".</span></code></div>
  </div>
 </div>
  <div class="note" id="112609">  <div class="votes">
    <div id="Vu112609">
    <a href="/manual/vote-note.php?id=112609&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112609">
    <a href="/manual/vote-note.php?id=112609&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112609" title="50% like this...">
    0
    </div>
  </div>
  <a href="#112609" class="name">
  <strong class="user"><em>jamesbenson944 at hotmail dot com</em></strong></a><a class="genanchor" href="#112609"> &para;</a><div class="date" title="2013-07-04 09:29"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112609">
<div class="phpcode"><code><span class="html">I'm not using objects for the save handlers I'm using functions but still get weird behaviour with session writing not being called.<br /><br />This fixes the problem though:<br />register_shutdown_function('session_write_close');</span></code></div>
  </div>
 </div>
  <div class="note" id="86173">  <div class="votes">
    <div id="Vu86173">
    <a href="/manual/vote-note.php?id=86173&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86173">
    <a href="/manual/vote-note.php?id=86173&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86173" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86173" class="name">
  <strong class="user"><em>anonymous at anonymous dot org</em></strong></a><a class="genanchor" href="#86173"> &para;</a><div class="date" title="2008-10-06 12:11"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86173">
<div class="phpcode"><code><span class="html">if you simply append the information from session variables every time you'll have many multiples for variables each time they are changed. a simple way to do this is explode the data twice to seperate the variable name from the other relevant information and foreach() check against the stored set. here is a little bit of a mess i wrote to do it.
<br />assuming stored session variables in both database and passed through function:
<br />
<br /><span class="default">&lt;?php
<br />$buffer </span><span class="keyword">= array();
<br /></span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'|'</span><span class="keyword">,</span><span class="default">$sessiondata</span><span class="keyword">);
<br /></span><span class="default">$buf1 </span><span class="keyword">= array();
<br /></span><span class="default">$buf2 </span><span class="keyword">= array();
<br /></span><span class="default">$finalbuff </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />foreach(</span><span class="default">$buffer </span><span class="keyword">as </span><span class="default">$i</span><span class="keyword">){ 
<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">';'</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">); 
<br />    foreach(</span><span class="default">$i </span><span class="keyword">as </span><span class="default">$b</span><span class="keyword">){ 
<br />        </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$buf1</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);
<br />    }
<br />}
<br /></span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'|'</span><span class="keyword">,</span><span class="default">$result</span><span class="keyword">[</span><span class="string">'data'</span><span class="keyword">]);
<br />foreach(</span><span class="default">$buffer </span><span class="keyword">as </span><span class="default">$i</span><span class="keyword">){ </span><span class="default">$i </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">';'</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">); foreach(</span><span class="default">$i </span><span class="keyword">as </span><span class="default">$b</span><span class="keyword">){ </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$buf2</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);}}
<br /></span><span class="default">$z </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />while(</span><span class="default">$buf2</span><span class="keyword">[</span><span class="default">$z</span><span class="keyword">]){
<br />    while(</span><span class="default">$buf1</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">]){
<br />        if(</span><span class="default">$buf2</span><span class="keyword">[</span><span class="default">$z</span><span class="keyword">] == </span><span class="default">$buf1</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">]){
<br />            </span><span class="default">$buf2</span><span class="keyword">[(</span><span class="default">$z</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">)] = </span><span class="default">$buf1</span><span class="keyword">[(</span><span class="default">$x</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">)];
<br />        }
<br />        </span><span class="default">$x</span><span class="keyword">+=</span><span class="default">2</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">$z</span><span class="keyword">+=</span><span class="default">2</span><span class="keyword">;
<br />}
<br />foreach(</span><span class="default">$buf2 </span><span class="keyword">as </span><span class="default">$i</span><span class="keyword">){ </span><span class="default">$finalbuff </span><span class="keyword">.= </span><span class="default">$i</span><span class="keyword">; }
<br /></span><span class="default">?&gt;
<br /></span>
<br />$sessiondata is the variable passed through the function and $result['data'] is the data stored in an sql database.</span></code></div>
  </div>
 </div>
  <div class="note" id="73748">  <div class="votes">
    <div id="Vu73748">
    <a href="/manual/vote-note.php?id=73748&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73748">
    <a href="/manual/vote-note.php?id=73748&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73748" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73748" class="name">
  <strong class="user"><em>Colin</em></strong></a><a class="genanchor" href="#73748"> &para;</a><div class="date" title="2007-03-08 12:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73748">
<div class="phpcode"><code><span class="html">When using a custom session handler, if the first callback function (sessOpen in my case) finds no session id, one is set by the time the second argument (sessRead in my case) is called.</span></code></div>
  </div>
 </div>
  <div class="note" id="63701">  <div class="votes">
    <div id="Vu63701">
    <a href="/manual/vote-note.php?id=63701&amp;page=function.session-set-save-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63701">
    <a href="/manual/vote-note.php?id=63701&amp;page=function.session-set-save-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63701" title="50% like this...">
    0
    </div>
  </div>
  <a href="#63701" class="name">
  <strong class="user"><em>mjohnson at pitsco dot com</em></strong></a><a class="genanchor" href="#63701"> &para;</a><div class="date" title="2006-03-28 11:04"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63701">
<div class="phpcode"><code><span class="html">With regards to the read handler, the docs say:<br /><br />  "Read function must return string value always to make save <br />  handler work as expected. Return empty string if there is no <br />  data to read."<br /><br />I can't emphasize this enough. I just spent half a day trying to figure out why my sessions weren't storing any information. I was blithely returning the results of a query on the database from the read handler. Since there was no match for the new ID, the result was NULL. Since it wasn't a string, sessions were essentially disabled. So, the safe thing might be something like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">sessRead</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">)<br />{<br />    </span><span class="comment">// Look up data<br />    </span><span class="default">$results </span><span class="keyword">= </span><span class="default">getStuff</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">);<br />    <br />    </span><span class="comment">// Make sure it's a string<br />    </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$results</span><span class="keyword">, </span><span class="string">'string'</span><span class="keyword">);<br />    return </span><span class="default">$results</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Of course, you can do whatever you want with it. But, no matter what, make sure you return a string.<br /><br />HTH,<br />Michael</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.session-set-save-handler&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-set-save-handler.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.session.php">Session Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.session-abort.php" title="session_&#8203;abort">session_&#8203;abort</a>
                        </li>
                                                <li class="">
                            <a href="function.session-cache-expire.php" title="session_&#8203;cache_&#8203;expire">session_&#8203;cache_&#8203;expire</a>
                        </li>
                                                <li class="">
                            <a href="function.session-cache-limiter.php" title="session_&#8203;cache_&#8203;limiter">session_&#8203;cache_&#8203;limiter</a>
                        </li>
                                                <li class="">
                            <a href="function.session-commit.php" title="session_&#8203;commit">session_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.session-create-id.php" title="session_&#8203;create_&#8203;id">session_&#8203;create_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-decode.php" title="session_&#8203;decode">session_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.session-destroy.php" title="session_&#8203;destroy">session_&#8203;destroy</a>
                        </li>
                                                <li class="">
                            <a href="function.session-encode.php" title="session_&#8203;encode">session_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.session-gc.php" title="session_&#8203;gc">session_&#8203;gc</a>
                        </li>
                                                <li class="">
                            <a href="function.session-get-cookie-params.php" title="session_&#8203;get_&#8203;cookie_&#8203;params">session_&#8203;get_&#8203;cookie_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.session-id.php" title="session_&#8203;id">session_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-module-name.php" title="session_&#8203;module_&#8203;name">session_&#8203;module_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.session-name.php" title="session_&#8203;name">session_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.session-regenerate-id.php" title="session_&#8203;regenerate_&#8203;id">session_&#8203;regenerate_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-register-shutdown.php" title="session_&#8203;register_&#8203;shutdown">session_&#8203;register_&#8203;shutdown</a>
                        </li>
                                                <li class="">
                            <a href="function.session-reset.php" title="session_&#8203;reset">session_&#8203;reset</a>
                        </li>
                                                <li class="">
                            <a href="function.session-save-path.php" title="session_&#8203;save_&#8203;path">session_&#8203;save_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.session-set-cookie-params.php" title="session_&#8203;set_&#8203;cookie_&#8203;params">session_&#8203;set_&#8203;cookie_&#8203;params</a>
                        </li>
                                                <li class="current">
                            <a href="function.session-set-save-handler.php" title="session_&#8203;set_&#8203;save_&#8203;handler">session_&#8203;set_&#8203;save_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.session-start.php" title="session_&#8203;start">session_&#8203;start</a>
                        </li>
                                                <li class="">
                            <a href="function.session-status.php" title="session_&#8203;status">session_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.session-unset.php" title="session_&#8203;unset">session_&#8203;unset</a>
                        </li>
                                                <li class="">
                            <a href="function.session-write-close.php" title="session_&#8203;write_&#8203;close">session_&#8203;write_&#8203;close</a>
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
