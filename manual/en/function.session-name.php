<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: session_name - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.session-name.php">
 <link rel="shorturl" href="https://www.php.net/session-name">
 <link rel="alternate" href="https://www.php.net/session-name" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.session-module-name.php">
 <link rel="next" href="https://www.php.net/manual/en/function.session-regenerate-id.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.session-name.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.session-name.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.session-name.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.session-name.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.session-name.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.session-name.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.session-name.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.session-name.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.session-name.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.session-name.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.session-name.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get and/or set the current session name" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: session_name - Manual" />
<meta name="twitter:description" content="Get and/or set the current session name" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: session_name - Manual" />
<meta itemprop="description" content="Get and/or set the current session name" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get and/or set the current session name" />

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
        <a href="function.session-regenerate-id.php">
          session_regenerate_id &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.session-module-name.php">
          &laquo; session_module_name        </a>
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
            <option value='en/function.session-name.php' selected="selected">English</option>
            <option value='de/function.session-name.php'>German</option>
            <option value='es/function.session-name.php'>Spanish</option>
            <option value='fr/function.session-name.php'>French</option>
            <option value='it/function.session-name.php'>Italian</option>
            <option value='ja/function.session-name.php'>Japanese</option>
            <option value='pt_BR/function.session-name.php'>Brazilian Portuguese</option>
            <option value='ru/function.session-name.php'>Russian</option>
            <option value='tr/function.session-name.php'>Turkish</option>
            <option value='uk/function.session-name.php'>Ukrainian</option>
            <option value='zh/function.session-name.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.session-name" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">session_name</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">session_name</span> &mdash; <span class="dc-title">Get and/or set the current session name</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.session-name-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>session_name</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$name</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>session_name()</strong></span> returns the name of the current
   session. If <code class="parameter">name</code> is given,
   <span class="function"><strong>session_name()</strong></span> will update the session name and return
   the <em>old</em> session name.
  </p>
  <p class="para">
   If a new session <code class="parameter">name</code> is
   supplied, <span class="function"><strong>session_name()</strong></span> modifies the HTTP cookie
   (and outputs the content when <a href="session.configuration.php#ini.session.use-trans-sid" class="link">session.use_trans_sid</a> is
   enabled). Once the HTTP cookie has been
   sent, calling <span class="function"><strong>session_name()</strong></span> raises an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
   <span class="function"><strong>session_name()</strong></span> must be called
   before <span class="function"><a href="function.session-start.php" class="function">session_start()</a></span> for the session to work
   properly.
  </p>
  <p class="para">
   The session name is reset to the default value stored in
   <code class="literal">session.name</code> at request startup time. Thus, you need to
   call <span class="function"><strong>session_name()</strong></span> for every request (and before
   <span class="function"><a href="function.session-start.php" class="function">session_start()</a></span> is called).
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.session-name-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">name</code></dt>
     <dd>
      <p class="para">
       The session name references the name of the session, which is 
       used in cookies and URLs (e.g. <code class="literal">PHPSESSID</code>). It
       should contain only alphanumeric characters; it should be short and
       descriptive (i.e. for users with enabled cookie warnings).
       If <code class="parameter">name</code> is specified and not <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the name of the current
       session is changed to its value.
      </p>
      <p class="para">
       <div class="warning"><strong class="warning">Warning</strong>
        <p class="para">
         The session name can&#039;t consist of digits only, at least one letter
         must be present. Otherwise a new session id is generated every time.
        </p>
       </div>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.session-name-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the name of the current session. If <code class="parameter">name</code> is given
   and function updates the session name, name of the <em>old</em> session
   is returned,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.session-name-changelog">
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
        <code class="parameter">name</code> is nullable now.
       </td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>
        <span class="function"><strong>session_name()</strong></span> checks session status,
        previously it only checked cookie status. Therefore,
        older <span class="function"><strong>session_name()</strong></span> allows to
        call <span class="function"><strong>session_name()</strong></span>
        after <span class="function"><a href="function.session-start.php" class="function">session_start()</a></span> which may crash PHP
        and may result in misbehaviors.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.session-name-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5007">
    <p><strong>Example #1 <span class="function"><strong>session_name()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* set the session name to WebsiteID */<br /><br /></span><span style="color: #0000BB">$previous_name </span><span style="color: #007700">= </span><span style="color: #0000BB">session_name</span><span style="color: #007700">(</span><span style="color: #DD0000">"WebsiteID"</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"The previous session name was </span><span style="color: #0000BB">$previous_name</span><span style="color: #DD0000">&lt;br /&gt;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.session-name-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li>
     The <a href="session.configuration.php#ini.session.name" class="link">session.name</a> configuration
     directive
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
        <a href="https://github.com/php/doc-en/blob/master/reference/session/functions/session-name.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.session-name%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.session-name&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-name.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="42747">  <div class="votes">
    <div id="Vu42747">
    <a href="/manual/vote-note.php?id=42747&amp;page=function.session-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42747">
    <a href="/manual/vote-note.php?id=42747&amp;page=function.session-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42747" title="80% like this...">
    146
    </div>
  </div>
  <a href="#42747" class="name">
  <strong class="user"><em>Hongliang Qiang</em></strong></a><a class="genanchor" href="#42747"> &para;</a><div class="date" title="2004-05-27 01:48"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42747">
<div class="phpcode"><code><span class="html">This may sound no-brainer: the session_name() function will have no essential effect if you set session.auto_start to "true" in php.ini . And the obvious explanation is the session already started thus cannot be altered before the session_name() function--wherever it is in the script--is executed, same reason session_name needs to be called before session_start() as documented.<br /><br />I know it is really not a big deal. But I had a quite hard time before figuring this out, and hope it might be helpful to someone like me.</span></code></div>
  </div>
 </div>
  <div class="note" id="86000">  <div class="votes">
    <div id="Vu86000">
    <a href="/manual/vote-note.php?id=86000&amp;page=function.session-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86000">
    <a href="/manual/vote-note.php?id=86000&amp;page=function.session-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86000" title="81% like this...">
    64
    </div>
  </div>
  <a href="#86000" class="name">
  <strong class="user"><em>php at wiz dot cx</em></strong></a><a class="genanchor" href="#86000"> &para;</a><div class="date" title="2008-09-27 08:36"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom86000">
<div class="phpcode"><code><span class="html">if you try to name a php session "example.com" it gets converted to "example_com" and everything breaks.<br /><br />don't use a period in your session name.</span></code></div>
  </div>
 </div>
  <div class="note" id="89090">  <div class="votes">
    <div id="Vu89090">
    <a href="/manual/vote-note.php?id=89090&amp;page=function.session-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89090">
    <a href="/manual/vote-note.php?id=89090&amp;page=function.session-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89090" title="69% like this...">
    40
    </div>
  </div>
  <a href="#89090" class="name">
  <strong class="user"><em>relsqui at chiliahedron dot com</em></strong></a><a class="genanchor" href="#89090"> &para;</a><div class="date" title="2009-02-20 11:07"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89090">
<div class="phpcode"><code><span class="html">Remember, kids--you MUST use session_name() first if you want to use session_set_cookie_params() to, say, change the session timeout. Otherwise it won't work, won't give any error, and nothing in the documentation (that I've seen, anyway) will explain why.<br /><br />Thanks to brandan of bildungsroman.com who left a note under session_set_cookie_params() explaining this or I'd probably still be throwing my hands up about it.</span></code></div>
  </div>
 </div>
  <div class="note" id="103472">  <div class="votes">
    <div id="Vu103472">
    <a href="/manual/vote-note.php?id=103472&amp;page=function.session-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103472">
    <a href="/manual/vote-note.php?id=103472&amp;page=function.session-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103472" title="65% like this...">
    22
    </div>
  </div>
  <a href="#103472" class="name">
  <strong class="user"><em>Joseph Dalrymple</em></strong></a><a class="genanchor" href="#103472"> &para;</a><div class="date" title="2011-04-14 11:52"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103472">
<div class="phpcode"><code><span class="html">For those wondering, this function is expensive!<br /><br />On a script that was executing in a consistent 0.0025 seconds, just the use of session_name("foo") shot my execution time up to ~0.09s. By simply sacrificing session_name("foo"), I sped my script up by roughly 0.09 seconds.</span></code></div>
  </div>
 </div>
  <div class="note" id="118059">  <div class="votes">
    <div id="Vu118059">
    <a href="/manual/vote-note.php?id=118059&amp;page=function.session-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118059">
    <a href="/manual/vote-note.php?id=118059&amp;page=function.session-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118059" title="65% like this...">
    10
    </div>
  </div>
  <a href="#118059" class="name">
  <strong class="user"><em>Victor H</em></strong></a><a class="genanchor" href="#118059"> &para;</a><div class="date" title="2015-09-27 06:14"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118059">
<div class="phpcode"><code><span class="html">As  Joseph Dalrymple said, adding session_name do slow down a little bit the execution time.<br />But, what i've observed is that it decreased the fluctuation between requests.<br />Requests on my script fluctuated between 0,045 and 0,022 seconds. With session_name("myapp"), it goes to 0,050 and 0,045. Not a big deal, but that's a point to note.<br /><br />For those with problems setting the name, when session.auto_start is set to 1, you need to set the session.name on php.ini!</span></code></div>
  </div>
 </div>
  <div class="note" id="125829">  <div class="votes">
    <div id="Vu125829">
    <a href="/manual/vote-note.php?id=125829&amp;page=function.session-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125829">
    <a href="/manual/vote-note.php?id=125829&amp;page=function.session-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125829" title="62% like this...">
    2
    </div>
  </div>
  <a href="#125829" class="name">
  <strong class="user"><em>mmulej at gmail dot com</em></strong></a><a class="genanchor" href="#125829"> &para;</a><div class="date" title="2021-02-16 09:29"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125829">
<div class="phpcode"><code><span class="html">Hope this is not out of php.net noting scope.<br /><br />session_name('name') must be set before session_start() because the former changes ini settings and the latter reads them. For the same reason session_set_cookie_params($options) must be set before session_start() as well.<br /><br />I find it best to do the following.<br /><br />function is_session_started()<br />{<br />    if (php_sapi_name() === 'cli')<br />        return false;<br /><br />    if (version_compare(phpversion(), '5.4.0', '&gt;='))<br />        return session_status() === PHP_SESSION_ACTIVE;<br /><br />    return session_id() !== '';<br />}<br />if (!is_session_started()) {<br />    session_name($session_name);<br />    session_set_cookie_params($cookie_options);<br />    session_start();<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="122796">  <div class="votes">
    <div id="Vu122796">
    <a href="/manual/vote-note.php?id=122796&amp;page=function.session-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122796">
    <a href="/manual/vote-note.php?id=122796&amp;page=function.session-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122796" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122796" class="name">
  <strong class="user"><em>tony at marston-home dot demon dot co dot uk</em></strong></a><a class="genanchor" href="#122796"> &para;</a><div class="date" title="2018-06-04 01:12"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122796">
<div class="phpcode"><code><span class="html">The description that session_name() gets and/or sets the name of the current session is technically wrong. It does nothing but deal with the value originally supplied by the session.name value within the php.ini file.<br /><br />Thus:-<br />$name = session_name();<br />is functionally equivalent to<br />$name = ini_get('session.name');<br />and <br />session_name('newname);<br />is functionally equivalent to<br />ini_set('session.name','newname');<br /><br />This also means that:<br />$old_name = session_name('newname');<br />is functionally equivalent to<br />$old_name = ini_set('session.name','newname');<br /><br />The current value of session.name is not attached to a session until session_start() is called. Once session_start() has used session.name to lookup the session_id() in the cookie data the name becomes irrelevant as all further operations on the session data are keyed by the session_id().<br /><br />Note that changing session.name while a session is currently active will not update the name in any session cookie. The new name does not take effect until the next call to session_start(), and this requires that the current session, which was created with the previous value for session.name, be closed.</span></code></div>
  </div>
 </div>
  <div class="note" id="122818">  <div class="votes">
    <div id="Vu122818">
    <a href="/manual/vote-note.php?id=122818&amp;page=function.session-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122818">
    <a href="/manual/vote-note.php?id=122818&amp;page=function.session-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122818" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#122818" class="name">
  <strong class="user"><em>tony at marston-home dot demon dot co dot uk</em></strong></a><a class="genanchor" href="#122818"> &para;</a><div class="date" title="2018-06-10 03:54"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122818">
<div class="phpcode"><code><span class="html">The description has recently been modified to contain the statement "When new session name is supplied, session_name() modifies HTTP cookie". This is not correct as session_name() has never modified any cookie data. A change in session.name does not become effective until session_start() is called, and it is session_start() that creates the cookie if it does not already exist.<br /><br />See the following bug report for details: <a href="https://bugs.php.net/bug.php?id=76413" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=76413</a></span></code></div>
  </div>
 </div>
  <div class="note" id="128545">  <div class="votes">
    <div id="Vu128545">
    <a href="/manual/vote-note.php?id=128545&amp;page=function.session-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128545">
    <a href="/manual/vote-note.php?id=128545&amp;page=function.session-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128545" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#128545" class="name">
  <strong class="user"><em>descartavel1+php at gmail dot com</em></strong></a><a class="genanchor" href="#128545"> &para;</a><div class="date" title="2023-05-16 09:13"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128545">
<div class="phpcode"><code><span class="html">Always try to set the prefix for your session name attribute to either `__Host-` or `__Secure-` to benefit from Browsers improved security. See <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#attributes" rel="nofollow" target="_blank">https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#attributes</a><br /><br />Also, if you have auto_session enabled, you must set this name in session.name in your config (php.ini, htaccess, etc)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.session-name&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-name.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
