<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: session_start - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.session-start.php">
 <link rel="shorturl" href="https://www.php.net/session-start">
 <link rel="alternate" href="https://www.php.net/session-start" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.session-set-save-handler.php">
 <link rel="next" href="https://www.php.net/manual/en/function.session-status.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.session-start.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.session-start.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.session-start.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.session-start.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.session-start.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.session-start.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.session-start.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.session-start.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.session-start.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.session-start.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.session-start.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Start new or resume existing session" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: session_start - Manual" />
<meta name="twitter:description" content="Start new or resume existing session" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: session_start - Manual" />
<meta itemprop="description" content="Start new or resume existing session" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Start new or resume existing session" />

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
        <a href="function.session-status.php">
          session_status &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.session-set-save-handler.php">
          &laquo; session_set_save_handler        </a>
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
            <option value='en/function.session-start.php' selected="selected">English</option>
            <option value='de/function.session-start.php'>German</option>
            <option value='es/function.session-start.php'>Spanish</option>
            <option value='fr/function.session-start.php'>French</option>
            <option value='it/function.session-start.php'>Italian</option>
            <option value='ja/function.session-start.php'>Japanese</option>
            <option value='pt_BR/function.session-start.php'>Brazilian Portuguese</option>
            <option value='ru/function.session-start.php'>Russian</option>
            <option value='tr/function.session-start.php'>Turkish</option>
            <option value='uk/function.session-start.php'>Ukrainian</option>
            <option value='zh/function.session-start.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.session-start" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">session_start</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">session_start</span> &mdash; <span class="dc-title">Start new or resume existing session</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.session-start-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>session_start</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>session_start()</strong></span> creates a session or resumes the
   current one based on a session identifier passed via a GET or POST
   request, or passed via a cookie.
  </p>
  <p class="para">
   When <span class="function"><strong>session_start()</strong></span> is called or when a session auto starts,
   PHP will call the open and read session save handlers.  These will either be a built-in
   save handler provided by default or by PHP extensions (such as SQLite or Memcached); or can be
   custom handler as defined by <span class="function"><a href="function.session-set-save-handler.php" class="function">session_set_save_handler()</a></span>.
   The read callback will retrieve any existing session data (stored in a special serialized format)
   and will be unserialized and used to automatically populate the $_SESSION superglobal when the
   read callback returns the saved session data back to PHP session handling.
  </p>
  <p class="para">
   To use a named session, call
   <span class="function"><a href="function.session-name.php" class="function">session_name()</a></span> before calling
   <span class="function"><strong>session_start()</strong></span>.
  </p>
  <p class="para">
   When <a href="session.configuration.php#ini.session.use-trans-sid" class="link">session.use_trans_sid</a>
   is enabled, the <span class="function"><strong>session_start()</strong></span> function will
   register an internal output handler for URL rewriting.
  </p>
  <p class="para">
   If a user uses <code class="literal">ob_gzhandler</code> or similar with
   <span class="function"><a href="function.ob-start.php" class="function">ob_start()</a></span>, the function order is important for
   proper output.  For example,
   <code class="literal">ob_gzhandler</code> must be registered before starting the session.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.session-start-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">options</code></dt>
    <dd>
     <p class="para">
      If provided, this is an associative array of options that will override
      the currently set
      <a href="session.configuration.php" class="link">session configuration directives</a>.
      The keys should not include the <code class="literal">session.</code> prefix.
     </p>
     <p class="para">
      In addition to the normal set of configuration directives, a
      <code class="literal">read_and_close</code> option may also be provided. If set to
      <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, this will result in the session being closed immediately after
      being read, thereby avoiding unnecessary locking if the session data
      won&#039;t be changed.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.session-start-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   This function returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if a session was successfully started,
   otherwise <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.session-start-changelog">
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
       <td>7.1.0</td>
       <td>
        <span class="function"><strong>session_start()</strong></span> now returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> and no longer
        initializes <var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION</a></var> when it failed to start the
        session.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.session-start-examples">
  <h3 class="title">Examples</h3>
  <div class="refsect2 unknown-34" id="refsect2-function.session-start-unknown-34">
   <h4 class="title">A basic session example</h4>

   <p class="para">
    <div class="example" id="example-5011">
     <p><strong>Example #1 <var class="filename">page1.php</var></strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// page1.php<br /><br /></span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #DD0000">'Welcome to page #1'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'favcolor'</span><span style="color: #007700">] = </span><span style="color: #DD0000">'green'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'animal'</span><span style="color: #007700">]   = </span><span style="color: #DD0000">'cat'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'time'</span><span style="color: #007700">]     = </span><span style="color: #0000BB">time</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Works if session cookie was accepted<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'&lt;br /&gt;&lt;a href="page2.php"&gt;page 2&lt;/a&gt;'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Or maybe pass along the session id, if needed<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'&lt;br /&gt;&lt;a href="page2.php?' </span><span style="color: #007700">. </span><span style="color: #0000BB">SID </span><span style="color: #007700">. </span><span style="color: #DD0000">'"&gt;page 2&lt;/a&gt;'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    After viewing <var class="filename">page1.php</var>, the second page
    <var class="filename">page2.php</var> will magically contain the session
    data.  Read the <a href="ref.session.php" class="link">session reference</a>
    for information on <a href="session.idpassing.php" class="link">propagating
    session ids</a> as it, for example, explains what the constant
    <strong><code><a href="session.constants.php#constant.sid">SID</a></code></strong> is all about.
   </p>
   <p class="para">
    <div class="example" id="example-5012">
     <p><strong>Example #2 <var class="filename">page2.php</var></strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// page2.php<br /><br /></span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #DD0000">'Welcome to page #2&lt;br /&gt;'</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'favcolor'</span><span style="color: #007700">]; </span><span style="color: #FF8000">// green<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'animal'</span><span style="color: #007700">];   </span><span style="color: #FF8000">// cat<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y m d H:i:s'</span><span style="color: #007700">, </span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'time'</span><span style="color: #007700">]);<br /><br /></span><span style="color: #FF8000">// You may want to use SID here, like we did in page1.php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'&lt;br /&gt;&lt;a href="page1.php"&gt;page 1&lt;/a&gt;'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="refsect2 unknown-37" id="refsect2-function.session-start-unknown-37">
   <h4 class="title">Providing options to <span class="function"><strong>session_start()</strong></span></h4>

   <div class="example" id="example-5013">
    <p><strong>Example #3 Overriding the cookie lifetime</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// This sends a persistent cookie that lasts a day.<br /></span><span style="color: #0000BB">session_start</span><span style="color: #007700">([<br />    </span><span style="color: #DD0000">'cookie_lifetime' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">86400</span><span style="color: #007700">,<br />]);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <div class="example" id="example-5014">
    <p><strong>Example #4 Reading the session and closing it</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// If we know we don't need to change anything in the<br />// session, we can just read and close rightaway to avoid<br />// locking the session file and blocking other pages<br /></span><span style="color: #0000BB">session_start</span><span style="color: #007700">([<br />    </span><span style="color: #DD0000">'cookie_lifetime' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">86400</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'read_and_close'  </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />]);</span></span></code></div>
    </div>

   </div>
  </div>

 </div>


 <div class="refsect1 notes" id="refsect1-function.session-start-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    To use cookie-based sessions, <span class="function"><strong>session_start()</strong></span>
    must be called before outputting anything to the browser.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Use of <a href="zlib.configuration.php#ini.zlib.output-compression" class="link">zlib.output_compression</a>
    is recommended instead of <span class="function"><a href="function.ob-gzhandler.php" class="function">ob_gzhandler()</a></span>
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function sends out several HTTP headers depending on the
    configuration. See <span class="function"><a href="function.session-cache-limiter.php" class="function">session_cache_limiter()</a></span> to
    customize these headers.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.session-start-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION</a></var></li>
    <li>
     The <a href="session.configuration.php#ini.session.auto-start" class="link">session.auto_start</a>
     configuration directive
    </li>
    <li><span class="function"><a href="function.session-id.php" class="function" rel="rdfs-seeAlso">session_id()</a> - Get and/or set the current session id</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/session/functions/session-start.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.session-start%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.session-start&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-start.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">35 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102460">  <div class="votes">
    <div id="Vu102460">
    <a href="/manual/vote-note.php?id=102460&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102460">
    <a href="/manual/vote-note.php?id=102460&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102460" title="53% like this...">
    33
    </div>
  </div>
  <a href="#102460" class="name">
  <strong class="user"><em>linblow at hotmail dot fr</em></strong></a><a class="genanchor" href="#102460"> &para;</a><div class="date" title="2011-02-16 05:06"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102460">
<div class="phpcode"><code><span class="html">If you want to handle sessions with a class, I wrote this little class:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/*<br />    Use the static method getInstance to get the object.<br />*/<br /><br /></span><span class="keyword">class </span><span class="default">Session<br /></span><span class="keyword">{<br />    const </span><span class="default">SESSION_STARTED </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">;<br />    const </span><span class="default">SESSION_NOT_STARTED </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br />    <br />    </span><span class="comment">// The state of the session<br />    </span><span class="keyword">private </span><span class="default">$sessionState </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">SESSION_NOT_STARTED</span><span class="keyword">;<br />    <br />    </span><span class="comment">// THE only instance of the class<br />    </span><span class="keyword">private static </span><span class="default">$instance</span><span class="keyword">;<br />    <br />    <br />    private function </span><span class="default">__construct</span><span class="keyword">() {}<br />    <br />    <br />    </span><span class="comment">/**<br />    *    Returns THE instance of 'Session'.<br />    *    The session is automatically initialized if it wasn't.<br />    *    <br />    *    @return    object<br />    **/<br />    <br />    </span><span class="keyword">public static function </span><span class="default">getInstance</span><span class="keyword">()<br />    {<br />        if ( !isset(</span><span class="default">self</span><span class="keyword">::</span><span class="default">$instance</span><span class="keyword">))<br />        {<br />            </span><span class="default">self</span><span class="keyword">::</span><span class="default">$instance </span><span class="keyword">= new </span><span class="default">self</span><span class="keyword">;<br />        }<br />        <br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$instance</span><span class="keyword">-&gt;</span><span class="default">startSession</span><span class="keyword">();<br />        <br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$instance</span><span class="keyword">;<br />    }<br />    <br />    <br />    </span><span class="comment">/**<br />    *    (Re)starts the session.<br />    *    <br />    *    @return    bool    TRUE if the session has been initialized, else FALSE.<br />    **/<br />    <br />    </span><span class="keyword">public function </span><span class="default">startSession</span><span class="keyword">()<br />    {<br />        if ( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sessionState </span><span class="keyword">== </span><span class="default">self</span><span class="keyword">::</span><span class="default">SESSION_NOT_STARTED </span><span class="keyword">)<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sessionState </span><span class="keyword">= </span><span class="default">session_start</span><span class="keyword">();<br />        }<br />        <br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sessionState</span><span class="keyword">;<br />    }<br />    <br />    <br />    </span><span class="comment">/**<br />    *    Stores datas in the session.<br />    *    Example: $instance-&gt;foo = 'bar';<br />    *    <br />    *    @param    name    Name of the datas.<br />    *    @param    value    Your datas.<br />    *    @return    void<br />    **/<br />    <br />    </span><span class="keyword">public function </span><span class="default">__set</span><span class="keyword">( </span><span class="default">$name </span><span class="keyword">, </span><span class="default">$value </span><span class="keyword">)<br />    {<br />        </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />    }<br />    <br />    <br />    </span><span class="comment">/**<br />    *    Gets datas from the session.<br />    *    Example: echo $instance-&gt;foo;<br />    *    <br />    *    @param    name    Name of the datas to get.<br />    *    @return    mixed    Datas stored in session.<br />    **/<br />    <br />    </span><span class="keyword">public function </span><span class="default">__get</span><span class="keyword">( </span><span class="default">$name </span><span class="keyword">)<br />    {<br />        if ( isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">]))<br />        {<br />            return </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">];<br />        }<br />    }<br />    <br />    <br />    public function </span><span class="default">__isset</span><span class="keyword">( </span><span class="default">$name </span><span class="keyword">)<br />    {<br />        return isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">]);<br />    }<br />    <br />    <br />    public function </span><span class="default">__unset</span><span class="keyword">( </span><span class="default">$name </span><span class="keyword">)<br />    {<br />        unset( </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] );<br />    }<br />    <br />    <br />    </span><span class="comment">/**<br />    *    Destroys the current session.<br />    *    <br />    *    @return    bool    TRUE is session has been deleted, else FALSE.<br />    **/<br />    <br />    </span><span class="keyword">public function </span><span class="default">destroy</span><span class="keyword">()<br />    {<br />        if ( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sessionState </span><span class="keyword">== </span><span class="default">self</span><span class="keyword">::</span><span class="default">SESSION_STARTED </span><span class="keyword">)<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sessionState </span><span class="keyword">= !</span><span class="default">session_destroy</span><span class="keyword">();<br />            unset( </span><span class="default">$_SESSION </span><span class="keyword">);<br />            <br />            return !</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sessionState</span><span class="keyword">;<br />        }<br />        <br />        return </span><span class="default">FALSE</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">/*<br />    Examples:<br />*/<br /><br />// We get the instance<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">Session</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();<br /><br /></span><span class="comment">// Let's store datas in the session<br /></span><span class="default">$data</span><span class="keyword">-&gt;</span><span class="default">nickname </span><span class="keyword">= </span><span class="string">'Someone'</span><span class="keyword">;<br /></span><span class="default">$data</span><span class="keyword">-&gt;</span><span class="default">age </span><span class="keyword">= </span><span class="default">18</span><span class="keyword">;<br /><br /></span><span class="comment">// Let's display datas<br /></span><span class="default">printf</span><span class="keyword">( </span><span class="string">'&lt;p&gt;My name is %s and I\'m %d years old.&lt;/p&gt;' </span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">-&gt;</span><span class="default">nickname </span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">-&gt;</span><span class="default">age </span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />    It will display:<br />    <br />    Array<br />    (<br />        [nickname] =&gt; Someone<br />        [age] =&gt; 18<br />    )<br />*/<br /><br /></span><span class="default">printf</span><span class="keyword">( </span><span class="string">'&lt;pre&gt;%s&lt;/pre&gt;' </span><span class="keyword">, </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$_SESSION </span><span class="keyword">, </span><span class="default">TRUE </span><span class="keyword">));<br /><br /></span><span class="comment">// TRUE<br /></span><span class="default">var_dump</span><span class="keyword">( isset( </span><span class="default">$data</span><span class="keyword">-&gt;</span><span class="default">nickname </span><span class="keyword">));<br /><br /></span><span class="comment">// We destroy the session<br /></span><span class="default">$data</span><span class="keyword">-&gt;</span><span class="default">destroy</span><span class="keyword">();<br /><br /></span><span class="comment">// FALSE<br /></span><span class="default">var_dump</span><span class="keyword">( isset( </span><span class="default">$data</span><span class="keyword">-&gt;</span><span class="default">nickname </span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />I prefer using this class instead of using directly the array $_SESSION.</span></code></div>
  </div>
 </div>
  <div class="note" id="117157">  <div class="votes">
    <div id="Vu117157">
    <a href="/manual/vote-note.php?id=117157&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117157">
    <a href="/manual/vote-note.php?id=117157&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117157" title="59% like this...">
    22
    </div>
  </div>
  <a href="#117157" class="name">
  <strong class="user"><em>aaronw at catalyst dot net dot nz</em></strong></a><a class="genanchor" href="#117157"> &para;</a><div class="date" title="2015-04-23 06:56"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117157">
<div class="phpcode"><code><span class="html">As others have noted, PHP's session handler is blocking. When one of your scripts calls session_start(), any other script that also calls session_start() with the same session ID will sleep until the first script closes the session.<br /><br />A common workaround to this is call session_start() and session_write_close() each time you want to update the session.<br /><br />The problem with this, is that each time you call session_start(), PHP prints a duplicate copy of the session cookie to the HTTP response header. Do this enough times (as you might do in a long-running script), and the response header can get so large that it causes web servers &amp; browsers to crash or reject your response as malformed.<br /><br />This error has been reported to PHP HQ, but they've marked it "Won't fix" because they say you're not supposed to open and close the session during a single script like this. <a href="https://bugs.php.net/bug.php?id=31455" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=31455</a><br /><br />As a workaround, I've written a function that uses headers_list() and header_remove() to clear out the duplicate cookies. It's interesting to note that even on requests when PHP sends duplicate session cookies, headers_list() still only lists one copy of the session cookie. Nonetheless, calling header_remove() removes all the duplicate copies.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Every time you call session_start(), PHP adds another<br /> * identical session cookie to the response header. Do this<br /> * enough times, and your response header becomes big enough<br /> * to choke the web server.<br /> *<br /> * This method clears out the duplicate session cookies. You can<br /> * call it after each time you've called session_start(), or call it<br /> * just before you send your headers.<br /> */<br /></span><span class="keyword">function </span><span class="default">clear_duplicate_cookies</span><span class="keyword">() {<br />    </span><span class="comment">// If headers have already been sent, there's nothing we can do<br />    </span><span class="keyword">if (</span><span class="default">headers_sent</span><span class="keyword">()) {<br />        return;<br />    }<br /><br />    </span><span class="default">$cookies </span><span class="keyword">= array();<br />    foreach (</span><span class="default">headers_list</span><span class="keyword">() as </span><span class="default">$header</span><span class="keyword">) {<br />        </span><span class="comment">// Identify cookie headers<br />        </span><span class="keyword">if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$header</span><span class="keyword">, </span><span class="string">'Set-Cookie:'</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$cookies</span><span class="keyword">[] = </span><span class="default">$header</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="comment">// Removes all cookie headers, including duplicates<br />    </span><span class="default">header_remove</span><span class="keyword">(</span><span class="string">'Set-Cookie'</span><span class="keyword">);<br /><br />    </span><span class="comment">// Restore one copy of each cookie<br />    </span><span class="keyword">foreach(</span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$cookies</span><span class="keyword">) as </span><span class="default">$cookie</span><span class="keyword">) {<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="default">$cookie</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113985">  <div class="votes">
    <div id="Vu113985">
    <a href="/manual/vote-note.php?id=113985&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113985">
    <a href="/manual/vote-note.php?id=113985&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113985" title="61% like this...">
    14
    </div>
  </div>
  <a href="#113985" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#113985"> &para;</a><div class="date" title="2013-12-25 04:00"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113985">
<div class="phpcode"><code><span class="html">The constant SID would always be '' (an empty string) if directive session.use_trans_sid in php ini file is set to 0. <br /><br />So remember to set session.use_trans_sid to 1 and restart your server before you use SID in your php script.</span></code></div>
  </div>
 </div>
  <div class="note" id="120589">  <div class="votes">
    <div id="Vu120589">
    <a href="/manual/vote-note.php?id=120589&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120589">
    <a href="/manual/vote-note.php?id=120589&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120589" title="57% like this...">
    12
    </div>
  </div>
  <a href="#120589" class="name">
  <strong class="user"><em>bachtel at [googles email service]dotcom</em></strong></a><a class="genanchor" href="#120589"> &para;</a><div class="date" title="2017-02-03 07:54"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120589">
<div class="phpcode"><code><span class="html">If you are using a custom session handler via session_set_save_handler() then calling session_start() in PHP 7.1 you might see an error like this:<br />session_start(): Failed to read session data: user (path: /var/lib/php/session) in ...<br /><br />As of this writing, it seems to be happening in PHP 7.1, and things look OK in PHP7.0. <br /><br />It is also hard to track down because if a session already exists for this id (maybe created by an earlier version of PHP), it will not trigger this issue because the $session_data will not be null.<br /><br />The fix is simple... you just need to check for 'null' during your read function:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">read</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">)<br />{<br />  </span><span class="comment">//... pull the data out of the DB, off the disk, memcache, etc<br />  </span><span class="default">$session_data </span><span class="keyword">= </span><span class="default">getSessionDataFromSomewhere</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">);<br />  <br />  </span><span class="comment">//check to see if $session_data is null before returning (CRITICAL)<br />  </span><span class="keyword">if(</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$session_data</span><span class="keyword">))<br />  {<br />    </span><span class="default">$session_data </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;  </span><span class="comment">//use empty string instead of null!<br />  </span><span class="keyword">}<br /><br />  return </span><span class="default">$session_data</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114209">  <div class="votes">
    <div id="Vu114209">
    <a href="/manual/vote-note.php?id=114209&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114209">
    <a href="/manual/vote-note.php?id=114209&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114209" title="58% like this...">
    10
    </div>
  </div>
  <a href="#114209" class="name">
  <strong class="user"><em>elitescripts2000 at yahoo dot com</em></strong></a><a class="genanchor" href="#114209"> &para;</a><div class="date" title="2014-01-25 03:56"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114209">
<div class="phpcode"><code><span class="html">3 easy but vital things about Sessions in AJAX Apps.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// session start<br /><br />//  It is VERY important to include a Period if using<br />// a whole domain.  (.yourdomain.com)<br />// It is VERY important to set the root path your session will always<br />// operate in... (/members) will ensure sessions will NOT be interfered<br />// with a session with a path of say (/admin) ... so you can log in<br />// as /admin and as /members... NEVER do unset($_SESSION)<br />// $_SESSION=array(); is preferred, session_unset();  session_destroy();<br /><br /></span><span class="default">session_set_cookie_params</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="string">'/members'</span><span class="keyword">, </span><span class="string">'.yourdomain.com'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">$_SESSION </span><span class="keyword">= array();<br /></span><span class="default">session_unset</span><span class="keyword">();<br /></span><span class="default">session_destroy</span><span class="keyword">();<br /><br /></span><span class="default">session_set_cookie_params</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="string">'/members'</span><span class="keyword">, </span><span class="string">'.yourdomain.com'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'whatever'</span><span class="keyword">] = </span><span class="string">'youwhat'</span><span class="keyword">;<br /><br /></span><span class="comment">// session destroying <br /><br />// To be safe, clear out your $_SESSION array<br />// Next, what most people do NOT do is delete the session cookie!<br />// It is easy to delete a cookie by expiring it long before the current time.<br />// The ONLY WAY to delete a cookie, is to make sure ALL parameters match the<br />// cookie to be deleted...which is easy to get those params with <br />// session_get_cookie_params()...<br />// FInally, use  session_unset(); and session_destroy(); in this order to ensure<br />// Chrome, IE, Firefox and others, are properly destroying the session.<br /></span><span class="default">$_SESSION </span><span class="keyword">= array();<br />if (</span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'session.use_cookies'</span><span class="keyword">))<br />{<br />    </span><span class="default">$p </span><span class="keyword">= </span><span class="default">session_get_cookie_params</span><span class="keyword">();<br />    </span><span class="default">setcookie</span><span class="keyword">(</span><span class="default">session_name</span><span class="keyword">(), </span><span class="string">''</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">() - </span><span class="default">31536000</span><span class="keyword">, </span><span class="default">$p</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">], </span><span class="default">$p</span><span class="keyword">[</span><span class="string">'domain'</span><span class="keyword">], </span><span class="default">$p</span><span class="keyword">[</span><span class="string">'secure'</span><span class="keyword">], </span><span class="default">$p</span><span class="keyword">[</span><span class="string">'httponly'</span><span class="keyword">]);<br /> }<br /></span><span class="default">session_unset</span><span class="keyword">();<br /></span><span class="default">session_destroy</span><span class="keyword">();<br /><br /></span><span class="comment">// AJAX and SESSIONS.<br />// Example... you start a session based PHP page, which then calls an Ajax (XMLHTTP) authenticated<br />// using the SAME SESSION to Poll and output the data, for example.  But, you notice when you<br />// try to start the Polling AJAX call always HANGS and seems to hang at the session_start().<br />// This is because the session is opened in the first page, calls the AJAX polling example, and<br />// tries to open the same session (for authentication) and do the AJAX call, you MUST call<br />// session_write_close(); meaning you are done writing to the $_SESSION variable, which really<br />// represents a file that must be CLOSED with session_write_close();....<br />// THAN you can call your AJAX Polling code to reopen the same session and do its polling...<br />// Normally, the $_SESSION is closed automatically when the script is closed or finished executing<br />// So, if you need to keep a PHP page running after opening a SESSION, simply close it when finished<br />// writing to $_SESSION so the AJAX polling page can authenticate and use the same session in a<br />// seperate web page...<br /><br /></span><span class="default">session_write_close</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />Hope this helps someone with their sessions...<br />Thanks.</span></code></div>
  </div>
 </div>
  <div class="note" id="121507">  <div class="votes">
    <div id="Vu121507">
    <a href="/manual/vote-note.php?id=121507&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121507">
    <a href="/manual/vote-note.php?id=121507&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121507" title="57% like this...">
    9
    </div>
  </div>
  <a href="#121507" class="name">
  <strong class="user"><em>marco dot agnoli at me dot com</em></strong></a><a class="genanchor" href="#121507"> &para;</a><div class="date" title="2017-08-10 07:50"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121507">
<div class="phpcode"><code><span class="html">I recently made an interesting observation:<br /><br />It seems that `session_start()` can return `true` even if the session was not properly created. In my case, the disk storage was full and so the session data could not be written to disk. I had some logic that resulted in an infinite loop when the session was not written to disk.<br /><br />To check if the session really was saved to disk I used:<br /><br />```<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">safe_session_start</span><span class="keyword">() {<br />    </span><span class="comment"># Attempt to start a session<br />    </span><span class="keyword">if (!@</span><span class="default">\session_start</span><span class="keyword">()) return </span><span class="default">false</span><span class="keyword">;<br /><br />    </span><span class="comment">#<br />    # Check if we need to perform<br />    # the write test.<br />    #<br />    </span><span class="keyword">if (!isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'__validated'</span><span class="keyword">])) {<br />        </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'__validated'</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br /><br />        </span><span class="comment"># Attempt to write session to disk<br />        </span><span class="keyword">@</span><span class="default">\session_write_close</span><span class="keyword">();<br /><br />        </span><span class="comment"># Unset the variable from memory.<br />        # This step may be unnecessary<br />        </span><span class="keyword">unset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'__validated'</span><span class="keyword">]);<br /><br />        </span><span class="comment"># Re-start session<br />        </span><span class="keyword">@</span><span class="default">\session_start</span><span class="keyword">();<br /><br />        </span><span class="comment"># Check if variable value is retained<br />        </span><span class="keyword">if (!isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'__validated'</span><span class="keyword">])) {<br />            </span><span class="comment"># Session was not written to disk<br />            </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br /><br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br />if (!</span><span class="default">safe_session_start</span><span class="keyword">()) {<br />    </span><span class="comment"># Sessions are probably not written to disk...<br />    # Handle error accordingly.<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;<br /></span>```<br /><br />Took me quite a while to figure this out. <br /><br />Maybe it helps someone!</span></code></div>
  </div>
 </div>
  <div class="note" id="125487">  <div class="votes">
    <div id="Vu125487">
    <a href="/manual/vote-note.php?id=125487&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125487">
    <a href="/manual/vote-note.php?id=125487&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125487" title="60% like this...">
    5
    </div>
  </div>
  <a href="#125487" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125487"> &para;</a><div class="date" title="2020-11-04 02:44"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125487">
<div class="phpcode"><code><span class="html">Be careful with the 'read_and_close' option. It doesn't update the session file's last modification time unlike the default PHP behaviour when you don't close the session (or when you use session_write_close explicitly).<br />Old session files (for me, older than 24 minutes) will be occasionally cleared by the garbage collector (for me every 09 and 39 minute of every hour).<br />So a session can disappear even if the page regularly sends requests to the server that only reads and closes the session.</span></code></div>
  </div>
 </div>
  <div class="note" id="92432">  <div class="votes">
    <div id="Vu92432">
    <a href="/manual/vote-note.php?id=92432&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92432">
    <a href="/manual/vote-note.php?id=92432&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92432" title="57% like this...">
    8
    </div>
  </div>
  <a href="#92432" class="name">
  <strong class="user"><em>emre@yazici</em></strong></a><a class="genanchor" href="#92432"> &para;</a><div class="date" title="2009-07-23 02:46"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92432">
<div class="phpcode"><code><span class="html">PHP Manual specifically denotes this common mistake:<br /><br />Depending on the session handler, not all characters are allowed within the session id. For example, the file session handler only allows characters in the range a-z A-Z 0-9 , (comma) and - (minus)!<br /><br />See session_id() manual page for more details.</span></code></div>
  </div>
 </div>
  <div class="note" id="101452">  <div class="votes">
    <div id="Vu101452">
    <a href="/manual/vote-note.php?id=101452&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101452">
    <a href="/manual/vote-note.php?id=101452&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101452" title="55% like this...">
    10
    </div>
  </div>
  <a href="#101452" class="name">
  <strong class="user"><em>dave1010 at gmail dot com</em></strong></a><a class="genanchor" href="#101452"> &para;</a><div class="date" title="2010-12-17 01:35"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101452">
<div class="phpcode"><code><span class="html">PHP locks the session file until it is closed. If you have 2 scripts using the same session (i.e. from the same user) then the 2nd script will not finish its call to session_start() until the first script finishes execution.<br /><br />If you have scripts that run for more than a second and users may be making more than 1 request at a time then it is worth calling session_write_close() as soon as you've finished writing session data.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// a lock is places on the session, so other scripts will have to wait<br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="comment">// do all your writing to $_SESSION<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="comment">// $_SESSION can still be read, but writing will not update the session.<br />// the lock is removed and other scripts can now read the session<br /></span><span class="default">session_write_close</span><span class="keyword">();<br /><br /></span><span class="default">do_something_slow</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Found this out from <a href="http://konrness.com/php5/how-to-prevent-blocking-php-requests/" rel="nofollow" target="_blank">http://konrness.com/php5/how-to-prevent-blocking-php-requests/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="110649">  <div class="votes">
    <div id="Vu110649">
    <a href="/manual/vote-note.php?id=110649&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110649">
    <a href="/manual/vote-note.php?id=110649&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110649" title="52% like this...">
    9
    </div>
  </div>
  <a href="#110649" class="name">
  <strong class="user"><em>someOne_01 at somewhere dot com</em></strong></a><a class="genanchor" href="#110649"> &para;</a><div class="date" title="2012-11-17 02:30"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110649">
<div class="phpcode"><code><span class="html">When you have an import script that takes long to execute, the browser seem to lock up and you cannot access the website anymore. this is because a request is reading and locking the session file to prevent corruption.
<br />
<br />you can either 
<br />- use a different session handler with session_set_save_handler()
<br />- use session_write_close() in the import script as soon you don't need session anymore (best moment is just before the long during part takes place), you can session_start when ever you want and as many times you like if your import script requires session variables changed. 
<br />
<br />example
<br /><span class="default">&lt;?php
<br />session_start</span><span class="keyword">(); </span><span class="comment">//initiate / open session
<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">; </span><span class="comment">// store something in the session
<br /></span><span class="default">session_write_close</span><span class="keyword">(); </span><span class="comment">//now close it, 
<br /># from here every other script can be run (and makes it seem like multitasking)
<br /></span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">100</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){ </span><span class="comment">//do 100 cycles
<br />    </span><span class="default">session_start</span><span class="keyword">(); </span><span class="comment">//open the session again for editing a variable
<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">] += </span><span class="default">1</span><span class="keyword">; </span><span class="comment">//change variable
<br />    </span><span class="default">session_write_close</span><span class="keyword">(); </span><span class="comment">//now close the session again!
<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">); </span><span class="comment">//every cycle sleep two seconds, or do a heavy task
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128197">  <div class="votes">
    <div id="Vu128197">
    <a href="/manual/vote-note.php?id=128197&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128197">
    <a href="/manual/vote-note.php?id=128197&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128197" title="60% like this...">
    1
    </div>
  </div>
  <a href="#128197" class="name">
  <strong class="user"><em>bwz</em></strong></a><a class="genanchor" href="#128197"> &para;</a><div class="date" title="2023-02-08 02:19"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128197">
<div class="phpcode"><code><span class="html">Be warned of another issue with blocking sessions: if you want to call an external program (or use an external service) that needs to access your website using the same session.<br /><br />For example I am printing a page as a PDF. I can just save the web page as a HTML file. But the images in the HTML are also private and require the current user session to be seen.<br /><br />What will happen is that this program might hang indefinitely (or timeout) as session_start waits for the parent PHP process to release the lock. And session_start doesn't obey max_execution_time (as documented in this bug: <a href="https://bugs.php.net/bug.php?id=72345" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=72345</a> ), so this will effectively kill the server after a few requests, as each one will be hanging forever<br /><br />It's the same if you use an external HTTP service:<br /><br /><span class="default">&lt;?php<br />$pdf </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'<a href="http://pdf.website.tld/?url=http://website.tld/print.php" rel="nofollow" target="_blank">http://pdf.website.tld/?url=http://website.tld/print.php</a>'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The service will wait for the website host to release the lock, but it can't as it is waiting for the PDF service to finish...<br /><br />The nice solution is to release the lock immediately by calling session_write_close after session_start, and when you need to write to the session you do the same again, but as noted it has its own issues. Using a custom session handler is probably the best solution.</span></code></div>
  </div>
 </div>
  <div class="note" id="95372">  <div class="votes">
    <div id="Vu95372">
    <a href="/manual/vote-note.php?id=95372&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95372">
    <a href="/manual/vote-note.php?id=95372&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95372" title="55% like this...">
    4
    </div>
  </div>
  <a href="#95372" class="name">
  <strong class="user"><em>jamestrowbridge at gmail dot com</em></strong></a><a class="genanchor" href="#95372"> &para;</a><div class="date" title="2009-12-29 09:57"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95372">
<div class="phpcode"><code><span class="html">Unfortunately, after pulling my hair out trying to figure out why my application was working fine in every browser other than IE ( Internet Explorer) (Opera, Chrome, Firefox, Safari are what I've tested this in) - when using a DNS CNAME record (like a vanity name that is different from the DNS A record, which is the hostname of the server) sessions do not work correctly.
<br />
<br />If you store a session var while on the CNAME:
<br />vanity.example.com and the hostname of the server is hosname.example.com
<br />Then try to call the variable from a different page, it will not find it because of the CNAME (I guess it store the variable under the hostname, then when trying to read it it's still looking under the CNAME) the same application works fine when accessing it under the hostname directly.  Keep in mind that I was testing this on an internal network.</span></code></div>
  </div>
 </div>
  <div class="note" id="68123">  <div class="votes">
    <div id="Vu68123">
    <a href="/manual/vote-note.php?id=68123&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68123">
    <a href="/manual/vote-note.php?id=68123&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68123" title="57% like this...">
    3
    </div>
  </div>
  <a href="#68123" class="name">
  <strong class="user"><em>James</em></strong></a><a class="genanchor" href="#68123"> &para;</a><div class="date" title="2006-07-13 04:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68123">
<div class="phpcode"><code><span class="html">To avoid the notice commited by PHP since 4.3.3 when you start a session twice, check session_id() first:<br /><br />if (session_id() == "")<br />  session_start();</span></code></div>
  </div>
 </div>
  <div class="note" id="70007">  <div class="votes">
    <div id="Vu70007">
    <a href="/manual/vote-note.php?id=70007&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70007">
    <a href="/manual/vote-note.php?id=70007&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70007" title="57% like this...">
    2
    </div>
  </div>
  <a href="#70007" class="name">
  <strong class="user"><em>ben dot morin at spaboom dot com</em></strong></a><a class="genanchor" href="#70007"> &para;</a><div class="date" title="2006-09-29 09:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom70007">
<div class="phpcode"><code><span class="html">James at skinsupport dot com raises a good point (warning) about additional requests from the browser.  The request for favicon.ico, depending on how it is handled, can have unintended results on your sessions.  <br /><br />For example, suppose you have ErrorDocument 404 /signin.php, no favicon.ico file and all pages in your site where the user signs in are also redirected to /signin.php if they're not already signed in.  <br /><br />If signin.php does any clean up or reassigning of session_id (as all good signin.php pages should) then the additional request from the browser for favicon.ico could potentially corrupt the session as set by the actual request.  <br /><br />Kudos to James for pointing it out and shame on me for skimming past it and not seeing how it applied to my problem.  Thanks too to the Firefox Live HTTP Headers extension for showing the additional request.  <br /><br />Don't waste days or even hours on this if your session cookies are not being sent or if the session data isn't what you expect it to be.  At a minimum, eliminate this case and see if any additional requests could be at fault.</span></code></div>
  </div>
 </div>
  <div class="note" id="87069">  <div class="votes">
    <div id="Vu87069">
    <a href="/manual/vote-note.php?id=87069&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87069">
    <a href="/manual/vote-note.php?id=87069&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87069" title="55% like this...">
    3
    </div>
  </div>
  <a href="#87069" class="name">
  <strong class="user"><em>andy_isherwood at hotmail dot com</em></strong></a><a class="genanchor" href="#87069"> &para;</a><div class="date" title="2008-11-18 06:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87069">
<div class="phpcode"><code><span class="html">A session created with session_start will only be available to pages within the directory tree of the page that first created it.<br /><br />i.e. If the page that first creates the session is /dir1/dir2/index.php and the user then goes to any page above dir2 (e.g. /dir1/index.php), session_start will create a new session rather than use the existing one.</span></code></div>
  </div>
 </div>
  <div class="note" id="123917">  <div class="votes">
    <div id="Vu123917">
    <a href="/manual/vote-note.php?id=123917&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123917">
    <a href="/manual/vote-note.php?id=123917&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123917" title="54% like this...">
    2
    </div>
  </div>
  <a href="#123917" class="name">
  <strong class="user"><em>hu60 dot cn at gmail dot com</em></strong></a><a class="genanchor" href="#123917"> &para;</a><div class="date" title="2019-06-09 12:43"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123917">
<div class="phpcode"><code><span class="html">The following code shows how the PHP session works. The function my_session_start() does almost the same thing as session_start().<br /><br /><span class="default">&lt;?php<br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'display_errors'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'session.save_path'</span><span class="keyword">, </span><span class="default">__DIR__</span><span class="keyword">);<br /><br /></span><span class="default">my_session_start</span><span class="keyword">();<br /><br />echo </span><span class="string">'&lt;p&gt;session id: '</span><span class="keyword">.</span><span class="default">my_session_id</span><span class="keyword">().</span><span class="string">'&lt;/p&gt;'</span><span class="keyword">;<br /><br />echo </span><span class="string">'&lt;code&gt;&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$_SESSION</span><span class="keyword">);<br />echo </span><span class="string">'&lt;/pre&gt;&lt;/code&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">$now </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'H:i:s'</span><span class="keyword">);<br />if (isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'last_visit_time'</span><span class="keyword">])) {<br />  echo </span><span class="string">'&lt;p&gt;Last Visit Time: '</span><span class="keyword">.</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'last_visit_time'</span><span class="keyword">].</span><span class="string">'&lt;/p&gt;'</span><span class="keyword">;<br />}<br />echo </span><span class="string">'&lt;p&gt;Current Time: '</span><span class="keyword">.</span><span class="default">$now</span><span class="keyword">.</span><span class="string">'&lt;/p&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'last_visit_time'</span><span class="keyword">] = </span><span class="default">$now</span><span class="keyword">;<br /><br />function </span><span class="default">my_session_start</span><span class="keyword">() {<br />  global </span><span class="default">$phpsessid</span><span class="keyword">, </span><span class="default">$sessfile</span><span class="keyword">;<br /> <br />  if (!isset(</span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="string">'PHPSESSID'</span><span class="keyword">]) || empty(</span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="string">'PHPSESSID'</span><span class="keyword">])) {<br />    </span><span class="default">$phpsessid </span><span class="keyword">= </span><span class="default">my_base32_encode</span><span class="keyword">(</span><span class="default">my_random_bytes</span><span class="keyword">(</span><span class="default">16</span><span class="keyword">));<br />    </span><span class="default">setcookie</span><span class="keyword">(</span><span class="string">'PHPSESSID'</span><span class="keyword">, </span><span class="default">$phpsessid</span><span class="keyword">, </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'session.cookie_lifetime'</span><span class="keyword">), </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'session.cookie_path'</span><span class="keyword">), </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'session.cookie_domain'</span><span class="keyword">), </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'session.cookie_secure'</span><span class="keyword">), </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'session.cookie_httponly'</span><span class="keyword">));<br />  } else {<br />    </span><span class="default">$phpsessid </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[^a-z0-9]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="string">'PHPSESSID'</span><span class="keyword">]), </span><span class="default">0</span><span class="keyword">, </span><span class="default">26</span><span class="keyword">);<br />  }<br /> <br />  </span><span class="default">$sessfile </span><span class="keyword">= </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'session.save_path'</span><span class="keyword">).</span><span class="string">'/sess_'</span><span class="keyword">.</span><span class="default">$phpsessid</span><span class="keyword">;<br />  if (</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$sessfile</span><span class="keyword">)) {<br />    </span><span class="default">$_SESSION </span><span class="keyword">= </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$sessfile</span><span class="keyword">));<br />  } else {<br />    </span><span class="default">$_SESSION </span><span class="keyword">= array();<br />  }<br />  </span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="string">'my_session_save'</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">my_session_save</span><span class="keyword">() {<br />  global </span><span class="default">$sessfile</span><span class="keyword">;<br /> <br />  </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$sessfile</span><span class="keyword">, </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$_SESSION</span><span class="keyword">));<br />}<br /><br />function </span><span class="default">my_session_id</span><span class="keyword">() {<br />  global </span><span class="default">$phpsessid</span><span class="keyword">;<br />  return </span><span class="default">$phpsessid</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">my_random_bytes</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">) {<br />  if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'random_bytes'</span><span class="keyword">)) {<br />      return </span><span class="default">random_bytes</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">);<br />  }<br />  </span><span class="default">$randomString </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) { <br />      </span><span class="default">$randomString </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">));<br />  } <br />  return </span><span class="default">$randomString</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">my_base32_encode</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">) {<br />  </span><span class="default">$BASE32_ALPHABET </span><span class="keyword">= </span><span class="string">'abcdefghijklmnopqrstuvwxyz234567'</span><span class="keyword">;<br />  </span><span class="default">$output </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />  </span><span class="default">$v </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  </span><span class="default">$vbits </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$j </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$j</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$v </span><span class="keyword">&lt;&lt;= </span><span class="default">8</span><span class="keyword">;<br />    </span><span class="default">$v </span><span class="keyword">+= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />    </span><span class="default">$vbits </span><span class="keyword">+= </span><span class="default">8</span><span class="keyword">;<br />    while (</span><span class="default">$vbits </span><span class="keyword">&gt;= </span><span class="default">5</span><span class="keyword">) {<br />      </span><span class="default">$vbits </span><span class="keyword">-= </span><span class="default">5</span><span class="keyword">;<br />      </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$BASE32_ALPHABET</span><span class="keyword">[</span><span class="default">$v </span><span class="keyword">&gt;&gt; </span><span class="default">$vbits</span><span class="keyword">];<br />      </span><span class="default">$v </span><span class="keyword">&amp;= ((</span><span class="default">1 </span><span class="keyword">&lt;&lt; </span><span class="default">$vbits</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">);<br />    }<br />  }<br />  if (</span><span class="default">$vbits </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">$v </span><span class="keyword">&lt;&lt;= (</span><span class="default">5 </span><span class="keyword">- </span><span class="default">$vbits</span><span class="keyword">);<br />    </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$BASE32_ALPHABET</span><span class="keyword">[</span><span class="default">$v</span><span class="keyword">];<br />  }<br />  return </span><span class="default">$output</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112973">  <div class="votes">
    <div id="Vu112973">
    <a href="/manual/vote-note.php?id=112973&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112973">
    <a href="/manual/vote-note.php?id=112973&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112973" title="53% like this...">
    2
    </div>
  </div>
  <a href="#112973" class="name">
  <strong class="user"><em>ilnomedellaccount at gmail dot com</em></strong></a><a class="genanchor" href="#112973"> &para;</a><div class="date" title="2013-08-13 03:53"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112973">
<div class="phpcode"><code><span class="html">A note about session_start(), custom handlers and database foreign key constraints, which I think may be of some use...<br /><br />We know that if we want our sessions into a database table (rather than the default storage), we can refer to session_set_save_handler(...) to get them there. Note that session_set_save_handler must (obviously) be called before session_start(), but let me get to the point...<br /><br />Upon calling session_start() the "first time", when the session does not already exist, php will spawn a new session but will not call the write handler until script execution finishes.<br /><br />Thus, the session at this point exists in the server process memory, but won't be visible as a row in the DB before the script ends.<br /><br />This seems reasonable, because this avoids some unnecessary database access and resource usage before we even populate our session with meaningfull and definitive data, but this also has side-effects.<br /><br />In my case, the script called session_start() to make sure a session was initiated, then used session_id() to populate another table in the DB, which had foreign_key constraint to the "sessions" table. This failed because no session was in the db at that point, yet!<br /><br />I know I could simply force the creation of the row in the DB by manually calling the write handler after session_start(), when necessary, but I am not sure if this is the best possible approach.<br /><br />As soon as I find an "elegant" solution, or a completely different approach, I will post some working sample code.<br /><br />In the meanwhile... have fun!</span></code></div>
  </div>
 </div>
  <div class="note" id="92490">  <div class="votes">
    <div id="Vu92490">
    <a href="/manual/vote-note.php?id=92490&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92490">
    <a href="/manual/vote-note.php?id=92490&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92490" title="53% like this...">
    2
    </div>
  </div>
  <a href="#92490" class="name">
  <strong class="user"><em>schlang</em></strong></a><a class="genanchor" href="#92490"> &para;</a><div class="date" title="2009-07-26 10:44"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92490">
<div class="phpcode"><code><span class="html">if you store your sessions in a database, always ensure that the type of the database column is large enough for your session values</span></code></div>
  </div>
 </div>
  <div class="note" id="51520">  <div class="votes">
    <div id="Vu51520">
    <a href="/manual/vote-note.php?id=51520&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51520">
    <a href="/manual/vote-note.php?id=51520&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51520" title="53% like this...">
    2
    </div>
  </div>
  <a href="#51520" class="name">
  <strong class="user"><em>jorrizza at gmail dot com</em></strong></a><a class="genanchor" href="#51520"> &para;</a><div class="date" title="2005-04-02 05:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51520">
<div class="phpcode"><code><span class="html">If you open a popup window (please no commercial ones!) with javascript window.open it might happen IE blocks the session cookie.<br />A simple fix for that is opening the new window with the session ID in a GET value. Note I don't use SID for this, because it will not allways be available.<br /><br />----page.php----<br />//you must have a session active here<br />window.open('popup.php?sid=<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">session_id</span><span class="keyword">(); </span><span class="default">?&gt;</span>', '700x500', 'toolbar=no, status=no, scrollbars=yes, location=no, menubar=no, directories=no, width=700, height=500');<br /><br />----popup.php----<br /><span class="default">&lt;?php<br />session_id</span><span class="keyword">(</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'sid'</span><span class="keyword">]));<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="comment">//and go on with your session vars<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121313">  <div class="votes">
    <div id="Vu121313">
    <a href="/manual/vote-note.php?id=121313&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121313">
    <a href="/manual/vote-note.php?id=121313&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121313" title="51% like this...">
    1
    </div>
  </div>
  <a href="#121313" class="name">
  <strong class="user"><em>axew3 at axew3 dot com</em></strong></a><a class="genanchor" href="#121313"> &para;</a><div class="date" title="2017-07-04 12:23"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121313">
<div class="phpcode"><code><span class="html">X Maintainers ... Sorry to be such pain the ass, please delete this duplicate, because submitted in a crazy 'session' where i've mess things between browser tabs ... sorry again, alessio<br /><a href="http://php.net/manual/en/function.session-start.php#121310" rel="nofollow" target="_blank">http://php.net/manual/en/function.session-start.php#121310</a></span></code></div>
  </div>
 </div>
  <div class="note" id="130222">  <div class="votes">
    <div id="Vu130222">
    <a href="/manual/vote-note.php?id=130222&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130222">
    <a href="/manual/vote-note.php?id=130222&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130222" title="50% like this...">
    0
    </div>
  </div>
  <a href="#130222" class="name">
  <strong class="user"><em>guy dot sartorelli at silverstripe dot com</em></strong></a><a class="genanchor" href="#130222"> &para;</a><div class="date" title="2025-04-04 01:15"><strong>5 months ago</strong></div>
  <div class="text" id="Hcom130222">
<div class="phpcode"><code><span class="html">Sessions are blocking by default - i.e. after calling `session_start()` the session file will be locked for reading until you either close that connection or explicitly call `session_write_close()`.<br /><br />That means any additional requests from that user (e.g. opening a new tab or XHR requests) which also open the session will have to wait for the previous request to finish - or at least wait for you to close the session.<br /><br />You can get around this by closing the session immediately after opening it (which lets you read session data), and then opening it again temporarily whenever you want to update the session:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Passing an empty string here explicitly disables automatic cookie headers being generated<br /></span><span class="default">session_cache_limiter</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">);<br /><br /></span><span class="comment">// You can then set your own session cookie header - and it's the ONLY session cookie header that will be included in the response<br /></span><span class="default">setcookie</span><span class="keyword">(</span><span class="default">session_name</span><span class="keyword">(), </span><span class="default">session_id</span><span class="keyword">(), </span><span class="comment">/* any other options you want */</span><span class="keyword">);<br /><br /></span><span class="comment">// Note: I avoid using `session_start(['read_and_close' =&gt; true]);` because that doesn't update the last-modified date on the session file, which can result in sessions expiring even when they're being actively used.<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">session_write_close</span><span class="keyword">();<br /><br /></span><span class="comment">// ... some processing here<br /><br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'myData'</span><span class="keyword">] = </span><span class="string">'my value'</span><span class="keyword">;<br /></span><span class="default">session_write_close</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Note that the call to `session_cache_limiter('')` is important to avoid multiple set-cookie headers from being included in the response as others have noted. You then MUST set the cookie yourself, or it won't be set at all.<br /><br />Take a careful look at all the session cookie related options for `session_start()` and in php.ini to make sure you respect those options appropriately when setting your own cookies.</span></code></div>
  </div>
 </div>
  <div class="note" id="129844">  <div class="votes">
    <div id="Vu129844">
    <a href="/manual/vote-note.php?id=129844&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129844">
    <a href="/manual/vote-note.php?id=129844&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129844" title="50% like this...">
    0
    </div>
  </div>
  <a href="#129844" class="name">
  <strong class="user"><em>polygon dot co dot in at gmail dot com</em></strong></a><a class="genanchor" href="#129844"> &para;</a><div class="date" title="2024-11-09 02:53"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129844">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />session_start</span><span class="keyword">([<br />    </span><span class="string">'read_and_close'  </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />]);<br /></span><span class="default">?&gt;<br /></span><br />The read_and_close option I believed was to work as a read only mode session<br /><br />To the surprise it works even if no sessionId cookie is present in the http request and generates a new sessionId.<br /><br />Secondly, the function with this option also generates new session files with respect to the newly generated sessionId<br /><br />Third, if the sessionId is invalid (no file is present with respect to sessionId) it creates a new one.</span></code></div>
  </div>
 </div>
  <div class="note" id="129579">  <div class="votes">
    <div id="Vu129579">
    <a href="/manual/vote-note.php?id=129579&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129579">
    <a href="/manual/vote-note.php?id=129579&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129579" title="no votes...">
    0
    </div>
  </div>
  <a href="#129579" class="name">
  <strong class="user"><em>theking2(at)king.ma</em></strong></a><a class="genanchor" href="#129579"> &para;</a><div class="date" title="2024-06-12 07:07"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129579">
<div class="phpcode"><code><span class="html">I generally use this to start a new session<br /><br /><span class="default">&lt;?php<br />    session_start</span><span class="keyword">( [ <br />        </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="default">DEBUG </span><span class="keyword">? </span><span class="string">'SessionId' </span><span class="keyword">: </span><span class="string">'__Secure-SessionId'</span><span class="keyword">,<br />        </span><span class="string">'cookie_lifetime' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,<br />        </span><span class="string">'cookie_path' </span><span class="keyword">=&gt; </span><span class="string">'/'</span><span class="keyword">,<br />        </span><span class="string">'cookie_secure' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />        </span><span class="string">'cookie_httponly' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />        </span><span class="string">'cookie_samesite' </span><span class="keyword">=&gt; </span><span class="string">'Strict'</span><span class="keyword">,<br />        </span><span class="string">'sid_length' </span><span class="keyword">=&gt; </span><span class="default">96</span><span class="keyword">,<br />        </span><span class="string">'sid_bits_per_character' </span><span class="keyword">=&gt; </span><span class="default">5</span><span class="keyword">,<br />        </span><span class="string">'use_strict_mode' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />        </span><span class="string">'referer_check' </span><span class="keyword">=&gt; </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">],<br />    ] );<br /></span><span class="default">?&gt;<br /></span><br />which will create a session with increased entropy in the session cookie name, requires a secure session, make sure roque refers have no chance at my logon page among other things.<br /><br />According to MDN[1] prefix "__Secure-" must be set for secure sessions.<br /><br />[1](<a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie" rel="nofollow" target="_blank">https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie</a>)</span></code></div>
  </div>
 </div>
  <div class="note" id="120497">  <div class="votes">
    <div id="Vu120497">
    <a href="/manual/vote-note.php?id=120497&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120497">
    <a href="/manual/vote-note.php?id=120497&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120497" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120497" class="name">
  <strong class="user"><em>chris at ocproducts dot com</em></strong></a><a class="genanchor" href="#120497"> &para;</a><div class="date" title="2017-01-21 06:56"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120497">
<div class="phpcode"><code><span class="html">Initiating a session may overwrite your own custom cache control header, which may break clicking back to get back to a prior post request (on Chrome at least).<br />On my system it was setting 'no-store', which is much more severe than 'no-cache' and what was breaking the back-button.<br /><br />If you are controlling your own cache headers carefully you need to call:<br />session_cache_limiter('');<br /><br />...to stop it changing your cache control headers.</span></code></div>
  </div>
 </div>
  <div class="note" id="118561">  <div class="votes">
    <div id="Vu118561">
    <a href="/manual/vote-note.php?id=118561&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118561">
    <a href="/manual/vote-note.php?id=118561&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118561" title="50% like this...">
    0
    </div>
  </div>
  <a href="#118561" class="name">
  <strong class="user"><em>fabmlk at hotmail dot com</em></strong></a><a class="genanchor" href="#118561"> &para;</a><div class="date" title="2015-12-28 02:04"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118561">
<div class="phpcode"><code><span class="html">If you ever need to open multiple distinct sessions in the same script and still let PHP generate session ids for you, here is a simple function I came up with (PHP default session handler is assumed):<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />  * Switch to or transparently create session with name $name.<br />  * It can easily be expanded to manage different sessions lifetime.<br />  */<br /></span><span class="keyword">function </span><span class="default">session_switch</span><span class="keyword">(</span><span class="default">$name </span><span class="keyword">= </span><span class="string">"PHPSESSID"</span><span class="keyword">) {<br />        static </span><span class="default">$created_sessions </span><span class="keyword">= array();<br /><br />        if (</span><span class="default">session_id</span><span class="keyword">() != </span><span class="string">''</span><span class="keyword">) { </span><span class="comment">// if a session is currently opened, close it<br />            </span><span class="default">session_write_close</span><span class="keyword">();<br />        }<br />        </span><span class="default">session_name</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />        if (isset(</span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">])) {    </span><span class="comment">// if a specific session already exists, merge with $created_sessions<br />            </span><span class="default">$created_sessions</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">];<br />        }<br />        if (isset(</span><span class="default">$created_sessions</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">])) { </span><span class="comment">// if existing session, impersonate it<br />            </span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$created_sessions</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">]);<br />            </span><span class="default">session_start</span><span class="keyword">();<br />        } else { </span><span class="comment">// create new session<br />            </span><span class="default">session_start</span><span class="keyword">();<br />            </span><span class="default">$_SESSION </span><span class="keyword">= array(); </span><span class="comment">// empty content before duplicating session file<br />                        // duplicate last session file with new id and current $_SESSION content<br />                        // If this is the first created session, there is nothing to duplicate from and passing true as argument will take care of "creating" only one session file<br />            </span><span class="default">session_regenerate_id</span><span class="keyword">(empty(</span><span class="default">$created_sessions</span><span class="keyword">));<br />            </span><span class="default">$created_sessions</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">session_id</span><span class="keyword">();<br />        }<br />}<br /><br /></span><span class="default">session_switch</span><span class="keyword">(</span><span class="string">"SESSION1"</span><span class="keyword">);<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"key"</span><span class="keyword">] = </span><span class="string">"value1"</span><span class="keyword">; </span><span class="comment">// specific to session 1<br /></span><span class="default">session_switch</span><span class="keyword">(</span><span class="string">"SESSION2"</span><span class="keyword">);<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"key"</span><span class="keyword">] = </span><span class="string">"value2"</span><span class="keyword">; </span><span class="comment">// specific to session 2<br /></span><span class="default">session_switch</span><span class="keyword">(</span><span class="string">"SESSION1"</span><span class="keyword">);<br /></span><span class="comment">// back to session 1<br />// ...<br /></span><span class="default">?&gt;<br /></span><br />When using this function, session_start() should not be called on its own anymore (can be replaced with a call to session_switch() without argument).<br />Also remember that session_start() sets a Set-Cookie HTTP header on each call, so if you echo in-between sessions, wrap with ouput buffering.<br /><br />Note: it's probably rarely a good idea to handle multiple sessions so think again if you think you have a good use for it.<br />Personally it played its role for some quick patching of legacy code I had to maintain.</span></code></div>
  </div>
 </div>
  <div class="note" id="95377">  <div class="votes">
    <div id="Vu95377">
    <a href="/manual/vote-note.php?id=95377&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95377">
    <a href="/manual/vote-note.php?id=95377&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95377" title="50% like this...">
    0
    </div>
  </div>
  <a href="#95377" class="name">
  <strong class="user"><em>info at nospam dot mmfilm dot sk</em></strong></a><a class="genanchor" href="#95377"> &para;</a><div class="date" title="2009-12-29 07:58"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95377">
<div class="phpcode"><code><span class="html">For those of you running in problems with UTF-8 encoded files:<br /><br />I was getting an error because of the BOM, although i set Dreamweaver to "save as" the without the BOM. It appears that DW will not change this setting in already existing files. After creating a new file withou the BOM, everything worked well.<br /><br />I also recommend <a href="http://people.w3.org/rishida/utils/bomtester/index.php" rel="nofollow" target="_blank">http://people.w3.org/rishida/utils/bomtester/index.php</a> - a utility that remote checks for the presence of BOM.</span></code></div>
  </div>
 </div>
  <div class="note" id="121310">  <div class="votes">
    <div id="Vu121310">
    <a href="/manual/vote-note.php?id=121310&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121310">
    <a href="/manual/vote-note.php?id=121310&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121310" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#121310" class="name">
  <strong class="user"><em>axew3 at axew3 dot com</em></strong></a><a class="genanchor" href="#121310"> &para;</a><div class="date" title="2017-07-04 10:19"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121310">
<div class="phpcode"><code><span class="html">I need, with easy, count how many times the page reload over the site, may to add a warning popup, while the counter is 0 ...<br />session_start();<br />if(isset($_SESSION['count'])){<br />$count = $_SESSION['count'];<br />$count++; <br />$count = $_SESSION['count'] = $count;<br />} else {<br />    $count = $_SESSION['count'] = 0;<br />}<br />echo $count;<br /><br />//session_destroy();</span></code></div>
  </div>
 </div>
  <div class="note" id="93673">  <div class="votes">
    <div id="Vu93673">
    <a href="/manual/vote-note.php?id=93673&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93673">
    <a href="/manual/vote-note.php?id=93673&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93673" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#93673" class="name">
  <strong class="user"><em>Charlie at NOSPAM dot example dot com</em></strong></a><a class="genanchor" href="#93673"> &para;</a><div class="date" title="2009-09-22 07:04"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93673">
<div class="phpcode"><code><span class="html">Be warned that depending on end of script to close the session will effectively serialize concurrent session requests.   Concurrent background "data retrieval" (e.g. applications such as AJAX or amfphp/Flex) expecting to retrieve data in parallel can fall into this trap easily.<br /><br />Holding the session_write_close until after an expensive operation is likewise problematic.<br /><br />To minimize effects, call session_write_close (aka session_commit) as early as practical (e.g. without introducing race conditions) or otherwise avoid the serialization bottleneck.</span></code></div>
  </div>
 </div>
  <div class="note" id="121311">  <div class="votes">
    <div id="Vu121311">
    <a href="/manual/vote-note.php?id=121311&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121311">
    <a href="/manual/vote-note.php?id=121311&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121311" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#121311" class="name">
  <strong class="user"><em>axew3 at axew3 dot com</em></strong></a><a class="genanchor" href="#121311"> &para;</a><div class="date" title="2017-07-04 10:30"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121311">
<div class="phpcode"><code><span class="html">I just need with easy, count how many times the page reload over the site, may to add a warning popup, while the counter is 0:<br /><br />session_start();<br />if(isset($_SESSION['count'])){<br />$count = $_SESSION['count'];<br />$count++; <br />$count = $_SESSION['count'] = $count;<br />} else {<br />    $count = $_SESSION['count'] = 0;<br />}<br />echo $count;<br /><br />//session_destroy();</span></code></div>
  </div>
 </div>
  <div class="note" id="102254">  <div class="votes">
    <div id="Vu102254">
    <a href="/manual/vote-note.php?id=102254&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102254">
    <a href="/manual/vote-note.php?id=102254&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102254" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#102254" class="name">
  <strong class="user"><em>anon at ymous dot com</em></strong></a><a class="genanchor" href="#102254"> &para;</a><div class="date" title="2011-02-04 01:51"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102254">
<div class="phpcode"><code><span class="html">I am trying to get a session created by a browser call to be used by a command line cli-&gt;curl php call (in this case, both calls to the same server and php.ini), for a set of flexible media import routines, <br /><br />but the cli-&gt;curl call always starts a new session despite me putting PHPSESSID=validID as the first parameter for the url called by curl.<br /><br />I was able to fix it by calling session_id($_GET['PHPSESSID']) before calling session_start() in the script called via curl.</span></code></div>
  </div>
 </div>
  <div class="note" id="126566">  <div class="votes">
    <div id="Vu126566">
    <a href="/manual/vote-note.php?id=126566&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126566">
    <a href="/manual/vote-note.php?id=126566&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126566" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#126566" class="name">
  <strong class="user"><em>polygon dot co dot in at gmail dot com</em></strong></a><a class="genanchor" href="#126566"> &para;</a><div class="date" title="2021-11-07 10:01"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126566">
<div class="phpcode"><code><span class="html">Websites are prone to Session Attack where its proper usage is not done.<br /><br />There are tools like "Apache Benchmark" (ab) and many others which can hit the website with load for load / performance testing.<br /><br />Code below starts the session for every request.<br /><br /><span class="default">&lt;?php<br />session_start</span><span class="keyword">();<br /><br /></span><span class="default">$username </span><span class="keyword">= </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'username'</span><span class="keyword">];<br /></span><span class="default">$password </span><span class="keyword">= </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'password'</span><span class="keyword">];<br /><br />if(</span><span class="default">isValidUser</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">)) {<br /><br />    </span><span class="default">Suserdetails </span><span class="keyword">= </span><span class="default">getUserDetails</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">);<br /><br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'user_id'</span><span class="keyword">]    = </span><span class="default">Suserdetails</span><span class="keyword">[</span><span class="string">'user_id'</span><span class="keyword">];<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'username'</span><span class="keyword">]    = </span><span class="default">Suserdetails</span><span class="keyword">[</span><span class="string">'username'</span><span class="keyword">];<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'firstname'</span><span class="keyword">]    = </span><span class="default">Suserdetails</span><span class="keyword">[</span><span class="string">'firstname'</span><span class="keyword">];<br /><br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: dashboard.php'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />This generates session file for every request irrespective of PHPSESSID cookie value when I use tools like ab, there by creating inode issue.<br /><br />One should start the session after properly authenticating.<br /><br /><span class="default">&lt;?php<br /><br />$username </span><span class="keyword">= </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'username'</span><span class="keyword">];<br /></span><span class="default">$password </span><span class="keyword">= </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'password'</span><span class="keyword">];<br /><br />if(</span><span class="default">isValidUser</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">)) {<br /><br />    </span><span class="default">Suserdetails </span><span class="keyword">= </span><span class="default">getUserDetails</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">);<br /><br />    </span><span class="default">session_start</span><span class="keyword">();<br /><br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'user_id'</span><span class="keyword">]    = </span><span class="default">Suserdetails</span><span class="keyword">[</span><span class="string">'user_id'</span><span class="keyword">];<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'username'</span><span class="keyword">]    = </span><span class="default">Suserdetails</span><span class="keyword">[</span><span class="string">'username'</span><span class="keyword">];<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'firstname'</span><span class="keyword">]    = </span><span class="default">Suserdetails</span><span class="keyword">[</span><span class="string">'firstname'</span><span class="keyword">];<br /><br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: dashboard.php'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Scripts other then login first validates session which requires session.<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">if(</span><span class="default">session_status</span><span class="keyword">()!=</span><span class="default">PHP_SESSION_NONE</span><span class="keyword">)  </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: login.php'</span><span class="keyword">);<br /><br />    </span><span class="default">session_start</span><span class="keyword">();<br /><br />    if(!isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'user_id'</span><span class="keyword">])) </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: login.php'</span><span class="keyword">);<br /><br />    </span><span class="default">code logic below</span><span class="keyword">....<br />}<br /></span><span class="default">?&gt;<br /></span><br />This example is for file based session.<br />For other modes of session check function session_set_save_handler.</span></code></div>
  </div>
 </div>
  <div class="note" id="105447">  <div class="votes">
    <div id="Vu105447">
    <a href="/manual/vote-note.php?id=105447&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105447">
    <a href="/manual/vote-note.php?id=105447&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105447" title="43% like this...">
    -4
    </div>
  </div>
  <a href="#105447" class="name">
  <strong class="user"><em>sanjuro at 1up-games dot com</em></strong></a><a class="genanchor" href="#105447"> &para;</a><div class="date" title="2011-08-18 11:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105447">
<div class="phpcode"><code><span class="html">The problem with SID is that if on occasions you don't start a session, instead of outputting an empty string for transparent integration it will return the regular undefined constant notice. So you might want to test the constant with defined() beforehand.</span></code></div>
  </div>
 </div>
  <div class="note" id="96491">  <div class="votes">
    <div id="Vu96491">
    <a href="/manual/vote-note.php?id=96491&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96491">
    <a href="/manual/vote-note.php?id=96491&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96491" title="43% like this...">
    -5
    </div>
  </div>
  <a href="#96491" class="name">
  <strong class="user"><em>info.at.merchandisinginteractive.sk</em></strong></a><a class="genanchor" href="#96491"> &para;</a><div class="date" title="2010-03-01 06:46"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96491">
<div class="phpcode"><code><span class="html">A handy script that checks fot the presence of uft-8 byte order mark (BOM) in all files in all directories starting on current dir. Combined from the work of other people here...
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">fopen_utf8 </span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) {
<br />    </span><span class="default">$file </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);
<br />    </span><span class="default">$bom </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);
<br />    if (</span><span class="default">$bom </span><span class="keyword">!= </span><span class="string">b"\xEF\xBB\xBF"</span><span class="keyword">)
<br />    {
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />    else
<br />    {
<br />        return </span><span class="default">true</span><span class="keyword">;
<br />    }
<br />} 
<br />
<br />function </span><span class="default">file_array</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$exclude </span><span class="keyword">= </span><span class="string">".|..|design"</span><span class="keyword">, </span><span class="default">$recursive </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">) {
<br />    </span><span class="default">$path </span><span class="keyword">= </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">) . </span><span class="string">"/"</span><span class="keyword">;
<br />    </span><span class="default">$folder_handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);
<br />    </span><span class="default">$exclude_array </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"|"</span><span class="keyword">, </span><span class="default">$exclude</span><span class="keyword">);
<br />    </span><span class="default">$result </span><span class="keyword">= array();
<br />    while(</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$filename </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$folder_handle</span><span class="keyword">))) {
<br />        if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">), </span><span class="default">$exclude_array</span><span class="keyword">)) {
<br />            if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">. </span><span class="default">$filename </span><span class="keyword">. </span><span class="string">"/"</span><span class="keyword">)) {
<br />                                </span><span class="comment">// Need to include full "path" or it's an infinite loop
<br />                </span><span class="keyword">if(</span><span class="default">$recursive</span><span class="keyword">) </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">file_array</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">. </span><span class="default">$filename </span><span class="keyword">. </span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$exclude</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />            } else {
<br />                if ( </span><span class="default">fopen_utf8</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">. </span><span class="default">$filename</span><span class="keyword">) )
<br />                {
<br />                    </span><span class="comment">//$result[] = $filename;
<br />                    </span><span class="keyword">echo (</span><span class="default">$path </span><span class="keyword">. </span><span class="default">$filename </span><span class="keyword">. </span><span class="string">"&lt;br&gt;"</span><span class="keyword">);
<br />                }
<br />            }
<br />        }
<br />    }
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">$files </span><span class="keyword">= </span><span class="default">file_array</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="33369">  <div class="votes">
    <div id="Vu33369">
    <a href="/manual/vote-note.php?id=33369&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33369">
    <a href="/manual/vote-note.php?id=33369&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33369" title="40% like this...">
    -5
    </div>
  </div>
  <a href="#33369" class="name">
  <strong class="user"><em>m dot kuiphuis at hccnet dot nl</em></strong></a><a class="genanchor" href="#33369"> &para;</a><div class="date" title="2003-06-24 03:37"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33369">
<div class="phpcode"><code><span class="html">[Editors Note: For more information about this
<br /><a href="http://www.zvon.org/tmRFC/RFC882/Output/chapter5.html" rel="nofollow" target="_blank">http://www.zvon.org/tmRFC/RFC882/Output/chapter5.html</a> ]
<br /> 
<br />I use name-based virtual hosting on Linux with Apache and PHP 4.3.2. 
<br />Every time when I refreshed (by pressing F5 in Internet Explorer) I noticed that I got a new session_id. Simultaneously browsing the same site with Netscape didn't give me that problem. First I thought this was some PHP issue (before I tested it with Netscape), but after searching a lot on the internet I found the problem.
<br />Since I was using name based virtual hosting for my testserver and we have different webshops for different customers I used the syntax webshop_customername.servername.nl as the domain-name.
<br />The _ in the domain name seemed to be the problem. Internet Explorer just denies setting the cookie on the client when there is a special character (like an _ ) in the domain name. For more information regarding this issue: <a href="http://support.microsoft.com/default.aspx?scid=kb;EN-US;316112" rel="nofollow" target="_blank">http://support.microsoft.com/default.aspx?scid=kb;EN-US;316112</a> 
<br />Stupidly enough, this information was related to asp (yuk :o)</span></code></div>
  </div>
 </div>
  <div class="note" id="92356">  <div class="votes">
    <div id="Vu92356">
    <a href="/manual/vote-note.php?id=92356&amp;page=function.session-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92356">
    <a href="/manual/vote-note.php?id=92356&amp;page=function.session-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92356" title="37% like this...">
    -4
    </div>
  </div>
  <a href="#92356" class="name">
  <strong class="user"><em>dstuff at brainsware dot org</em></strong></a><a class="genanchor" href="#92356"> &para;</a><div class="date" title="2009-07-21 05:53"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92356">
<div class="phpcode"><code><span class="html">It seems like spaces in the name don't work either - got a new session id generated each time</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.session-start&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-start.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.session-set-save-handler.php" title="session_&#8203;set_&#8203;save_&#8203;handler">session_&#8203;set_&#8203;save_&#8203;handler</a>
                        </li>
                                                <li class="current">
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
