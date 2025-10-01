<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: session_set_cookie_params - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.session-set-cookie-params.php">
 <link rel="shorturl" href="https://www.php.net/session-set-cookie-params">
 <link rel="alternate" href="https://www.php.net/session-set-cookie-params" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.session-save-path.php">
 <link rel="next" href="https://www.php.net/manual/en/function.session-set-save-handler.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.session-set-cookie-params.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.session-set-cookie-params.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.session-set-cookie-params.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.session-set-cookie-params.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.session-set-cookie-params.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.session-set-cookie-params.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.session-set-cookie-params.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.session-set-cookie-params.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.session-set-cookie-params.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.session-set-cookie-params.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.session-set-cookie-params.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set the session cookie parameters" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: session_set_cookie_params - Manual" />
<meta name="twitter:description" content="Set the session cookie parameters" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: session_set_cookie_params - Manual" />
<meta itemprop="description" content="Set the session cookie parameters" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set the session cookie parameters" />

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
        <a href="function.session-set-save-handler.php">
          session_set_save_handler &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.session-save-path.php">
          &laquo; session_save_path        </a>
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
            <option value='en/function.session-set-cookie-params.php' selected="selected">English</option>
            <option value='de/function.session-set-cookie-params.php'>German</option>
            <option value='es/function.session-set-cookie-params.php'>Spanish</option>
            <option value='fr/function.session-set-cookie-params.php'>French</option>
            <option value='it/function.session-set-cookie-params.php'>Italian</option>
            <option value='ja/function.session-set-cookie-params.php'>Japanese</option>
            <option value='pt_BR/function.session-set-cookie-params.php'>Brazilian Portuguese</option>
            <option value='ru/function.session-set-cookie-params.php'>Russian</option>
            <option value='tr/function.session-set-cookie-params.php'>Turkish</option>
            <option value='uk/function.session-set-cookie-params.php'>Ukrainian</option>
            <option value='zh/function.session-set-cookie-params.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.session-set-cookie-params" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">session_set_cookie_params</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">session_set_cookie_params</span> &mdash; <span class="dc-title">Set the session cookie parameters</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.session-set-cookie-params-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>session_set_cookie_params</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$lifetime_or_options</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$path</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$domain</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span> <code class="parameter">$secure</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span> <code class="parameter">$httponly</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">Alternative signature available as of PHP 7.3.0:</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>session_set_cookie_params</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$lifetime_or_options</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Set cookie parameters defined in the <var class="filename">php.ini</var> file. The effect of this
   function only lasts for the duration of the script. Thus, you need to
   call <span class="function"><strong>session_set_cookie_params()</strong></span> for every request and
   before <span class="function"><a href="function.session-start.php" class="function">session_start()</a></span> is called.
  </p>
  <p class="para">
   This function updates the runtime ini values of the corresponding PHP ini configuration
   keys which can be retrieved with the <span class="function"><a href="function.ini-get.php" class="function">ini_get()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.session-set-cookie-params-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">lifetime_or_options</code></dt>
     <dd>
      <p class="para">
       When using the first signature, <a href="session.configuration.php#ini.session.cookie-lifetime" class="link">lifetime</a> of the
       session cookie, defined in seconds.
      </p>
      <p class="para">
       When using the second signature,
       an associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> which may have any of the keys
       <code class="literal">lifetime</code>, <code class="literal">path</code>, <code class="literal">domain</code>,
       <code class="literal">secure</code>, <code class="literal">httponly</code> and <code class="literal">samesite</code>.
       The values have the same meaning as described for the parameters with the
       same name. The value of the <code class="literal">samesite</code> element should be
       either <code class="literal">Lax</code> or <code class="literal">Strict</code>.
       If any of the allowed options are not given, their default values are the
       same as the default values of the explicit parameters. If the
       <code class="literal">samesite</code> element is omitted, no SameSite cookie
       attribute is set.
      </p>
     </dd>
    
    
     <dt><code class="parameter">path</code></dt>
     <dd>
      <p class="para">
       <a href="session.configuration.php#ini.session.cookie-path" class="link">Path</a> on the domain where
       the cookie will work. Use a single slash (&#039;/&#039;) for all paths on the
       domain.
      </p>
     </dd>
    
    
     <dt><code class="parameter">domain</code></dt>
     <dd>
      <p class="para">
       Cookie <a href="session.configuration.php#ini.session.cookie-domain" class="link">domain</a>, for
       example &#039;www.php.net&#039;. To make cookies visible on all subdomains then
       the domain must be prefixed with a dot like &#039;.php.net&#039;.
      </p>
     </dd>
    
    
     <dt><code class="parameter">secure</code></dt>
     <dd>
      <p class="para">
       If <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> cookie will only be sent over
       <a href="session.configuration.php#ini.session.cookie-secure" class="link">secure</a> connections.
      </p>
     </dd>
    
    
     <dt><code class="parameter">httponly</code></dt>
     <dd>
      <p class="para">
       If set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> then PHP will attempt to send the
       <a href="session.configuration.php#ini.session.cookie-httponly" class="link">httponly</a>
       flag when setting the session cookie.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.session-set-cookie-params-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.session-set-cookie-params-changelog">
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
        <code class="parameter">path</code>, <code class="parameter">domain</code>,
        <code class="parameter">secure</code> and <code class="parameter">httponly</code> are nullable now.
       </td>
      </tr>

      <tr>
       <td>7.3.0</td>
       <td>
        An alternative signature supporting an <code class="parameter">lifetime_or_options</code>
        <span class="type"><a href="language.types.array.php" class="type array">array</a></span> has been added. This signature supports also setting of the
        SameSite cookie attribute.
       </td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>
        Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure. Formerly the function returned <span class="type"><span class="type"><a href="language.types.void.php" class="type void">void</a></span></span>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.session-set-cookie-params-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li>
     <a href="session.configuration.php#ini.session.cookie-lifetime" class="link">session.cookie_lifetime</a>
    </li>
    <li>
     <a href="session.configuration.php#ini.session.cookie-path" class="link">session.cookie_path</a>
    </li>
    <li>
     <a href="session.configuration.php#ini.session.cookie-domain" class="link">session.cookie_domain</a>
    </li>
    <li>
     <a href="session.configuration.php#ini.session.cookie-secure" class="link">session.cookie_secure</a>
    </li>
    <li>
     <a href="session.configuration.php#ini.session.cookie-httponly" class="link">session.cookie_httponly</a>
    </li>
    <li>
     <a href="session.configuration.php#ini.session.cookie-samesite" class="link">session.cookie_samesite</a>
    </li>
    <li><span class="function"><a href="function.session-get-cookie-params.php" class="function" rel="rdfs-seeAlso">session_get_cookie_params()</a> - Get the session cookie parameters</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/session/functions/session-set-cookie-params.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.session-set-cookie-params%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.session-set-cookie-params&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-set-cookie-params.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100657">  <div class="votes">
    <div id="Vu100657">
    <a href="/manual/vote-note.php?id=100657&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100657">
    <a href="/manual/vote-note.php?id=100657&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100657" title="71% like this...">
    146
    </div>
  </div>
  <a href="#100657" class="name">
  <strong class="user"><em>final dot wharf at gmail dot com</em></strong></a><a class="genanchor" href="#100657"> &para;</a><div class="date" title="2010-10-28 07:42"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100657">
<div class="phpcode"><code><span class="html">As PHP's Session Control does not handle session lifetimes correctly when using session_set_cookie_params(), we need to do something in order to change the session expiry time every time the user visits our site. So, here's the problem.<br /><br /><span class="default">&lt;?php<br />  $lifetime</span><span class="keyword">=</span><span class="default">600</span><span class="keyword">;<br />  </span><span class="default">session_set_cookie_params</span><span class="keyword">(</span><span class="default">$lifetime</span><span class="keyword">);<br />  </span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />This code doesn't change the lifetime of the session when the user gets back at our site or refreshes the page. The session WILL expire after $lifetime seconds, no matter how many times the user requests the page. So we just overwrite the session cookie as follows:<br /><br /><span class="default">&lt;?php<br />  $lifetime</span><span class="keyword">=</span><span class="default">600</span><span class="keyword">;<br />  </span><span class="default">session_start</span><span class="keyword">();<br />  </span><span class="default">setcookie</span><span class="keyword">(</span><span class="default">session_name</span><span class="keyword">(),</span><span class="default">session_id</span><span class="keyword">(),</span><span class="default">time</span><span class="keyword">()+</span><span class="default">$lifetime</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />And now we have the same session cookie with the lifetime set to the proper value.</span></code></div>
  </div>
 </div>
  <div class="note" id="125072">  <div class="votes">
    <div id="Vu125072">
    <a href="/manual/vote-note.php?id=125072&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125072">
    <a href="/manual/vote-note.php?id=125072&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125072" title="78% like this...">
    53
    </div>
  </div>
  <a href="#125072" class="name">
  <strong class="user"><em>frank at frankforte dot ca</em></strong></a><a class="genanchor" href="#125072"> &para;</a><div class="date" title="2020-06-02 02:53"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125072">
<div class="phpcode"><code><span class="html">The following appears to work for setting the SameSite attribute on session cookies for PHP &lt; 7.3.<br /><br /><span class="default">&lt;?php<br /><br />    $secure </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// if you only want to receive the cookie over HTTPS<br />    </span><span class="default">$httponly </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// prevent JavaScript access to session cookie<br />    </span><span class="default">$samesite </span><span class="keyword">= </span><span class="string">'lax'</span><span class="keyword">;<br /><br />    if(</span><span class="default">PHP_VERSION_ID </span><span class="keyword">&lt; </span><span class="default">70300</span><span class="keyword">) {<br />        </span><span class="default">session_set_cookie_params</span><span class="keyword">(</span><span class="default">$maxlifetime</span><span class="keyword">, </span><span class="string">'/; samesite='</span><span class="keyword">.</span><span class="default">$samesite</span><span class="keyword">, </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">], </span><span class="default">$secure</span><span class="keyword">, </span><span class="default">$httponly</span><span class="keyword">);<br />    } else {<br />        </span><span class="default">session_set_cookie_params</span><span class="keyword">([<br />            </span><span class="string">'lifetime' </span><span class="keyword">=&gt; </span><span class="default">$maxlifetime</span><span class="keyword">,<br />            </span><span class="string">'path' </span><span class="keyword">=&gt; </span><span class="string">'/'</span><span class="keyword">,<br />            </span><span class="string">'domain' </span><span class="keyword">=&gt; </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">],<br />            </span><span class="string">'secure' </span><span class="keyword">=&gt; </span><span class="default">$secure</span><span class="keyword">,<br />            </span><span class="string">'httponly' </span><span class="keyword">=&gt; </span><span class="default">$httponly</span><span class="keyword">,<br />            </span><span class="string">'samesite' </span><span class="keyword">=&gt; </span><span class="default">$samesite<br />        </span><span class="keyword">]);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128883">  <div class="votes">
    <div id="Vu128883">
    <a href="/manual/vote-note.php?id=128883&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128883">
    <a href="/manual/vote-note.php?id=128883&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128883" title="76% like this...">
    9
    </div>
  </div>
  <a href="#128883" class="name">
  <strong class="user"><em>theking2(at)king.ma</em></strong></a><a class="genanchor" href="#128883"> &para;</a><div class="date" title="2023-09-14 11:28"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128883">
<div class="phpcode"><code><span class="html">As per version PHP 7 session_start can include an option array this function became obsolete. All cookie settings (and many more) can be included in an option array as a parameter to session_start():<br /><br /><span class="default">&lt;?php<br />    session_start</span><span class="keyword">( [ <br />        </span><span class="string">'cookie_path' </span><span class="keyword">=&gt; </span><span class="string">'/'</span><span class="keyword">,<br />        </span><span class="string">'cookie_lifetime' </span><span class="keyword">=&gt; </span><span class="default">300</span><span class="keyword">,<br />        </span><span class="string">'cookie_secure' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />        </span><span class="string">'cookie_httponly' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />        </span><span class="string">'cookie_samesite' </span><span class="keyword">=&gt; </span><span class="string">'lax'</span><span class="keyword">,<br />    ] );</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109126">  <div class="votes">
    <div id="Vu109126">
    <a href="/manual/vote-note.php?id=109126&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109126">
    <a href="/manual/vote-note.php?id=109126&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109126" title="68% like this...">
    14
    </div>
  </div>
  <a href="#109126" class="name">
  <strong class="user"><em>passerbyxp at gmail dot com</em></strong></a><a class="genanchor" href="#109126"> &para;</a><div class="date" title="2012-06-22 07:50"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109126">
<div class="phpcode"><code><span class="html">One might want to be noted that the browsers are case-sensitive to the $path parameter.
<br />
<br />For example, if you do this:
<br /><span class="default">&lt;?php
<br />session_set_cookie_params</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="string">"/webapp/"</span><span class="keyword">);
<br /></span><span class="default">session_start</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />and you visit your site in this way:
<br />example.com/WebApp/
<br />
<br />You would get a new session on every request.
<br />
<br />I'm not sure if this is the standard, but I see this happens on IE 6, Firefox 12 (Palemoon, actually), Chrome 19 (Portable version), and on both IIS and Apache.</span></code></div>
  </div>
 </div>
  <div class="note" id="104678">  <div class="votes">
    <div id="Vu104678">
    <a href="/manual/vote-note.php?id=104678&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104678">
    <a href="/manual/vote-note.php?id=104678&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104678" title="65% like this...">
    19
    </div>
  </div>
  <a href="#104678" class="name">
  <strong class="user"><em>Danack dot Ackroyd at gmail dot com</em></strong></a><a class="genanchor" href="#104678"> &para;</a><div class="date" title="2011-06-30 01:20"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104678">
<div class="phpcode"><code><span class="html">Setting the domain for cookies in session_set_cookie_params() only affects the domain used for the session cookie which is set by PHP.
<br />
<br />All other cookies set by calling the function setcookie() either:
<br />i) Use the domain set explicitly in the call to setcookie()
<br />or 
<br />ii) Don't set the domain at all on the cookie and so the browser assumes it's for the current domain.
<br />
<br />So to make all your cookies be available across all sub-domains of your site you need to do this:
<br />
<br /><span class="default">&lt;?php
<br />$currentCookieParams </span><span class="keyword">= </span><span class="default">session_get_cookie_params</span><span class="keyword">();
<br />
<br /></span><span class="default">$rootDomain </span><span class="keyword">= </span><span class="string">'.example.com'</span><span class="keyword">;
<br />
<br /></span><span class="default">session_set_cookie_params</span><span class="keyword">(
<br />    </span><span class="default">$currentCookieParams</span><span class="keyword">[</span><span class="string">"lifetime"</span><span class="keyword">],
<br />    </span><span class="default">$currentCookieParams</span><span class="keyword">[</span><span class="string">"path"</span><span class="keyword">],
<br />    </span><span class="default">$rootDomain</span><span class="keyword">,
<br />    </span><span class="default">$currentCookieParams</span><span class="keyword">[</span><span class="string">"secure"</span><span class="keyword">],
<br />    </span><span class="default">$currentCookieParams</span><span class="keyword">[</span><span class="string">"httponly"</span><span class="keyword">]
<br />);
<br />
<br /></span><span class="default">session_name</span><span class="keyword">(</span><span class="string">'mysessionname'</span><span class="keyword">);
<br /></span><span class="default">session_start</span><span class="keyword">();
<br />
<br /></span><span class="default">setcookie</span><span class="keyword">(</span><span class="default">$cookieName</span><span class="keyword">, </span><span class="default">$cookieValue</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">() + </span><span class="default">3600</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$rootDomain</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="22458">  <div class="votes">
    <div id="Vu22458">
    <a href="/manual/vote-note.php?id=22458&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22458">
    <a href="/manual/vote-note.php?id=22458&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22458" title="67% like this...">
    15
    </div>
  </div>
  <a href="#22458" class="name">
  <strong class="user"><em>shrockc at inhsNO dot SPAMorg</em></strong></a><a class="genanchor" href="#22458"> &para;</a><div class="date" title="2002-06-18 09:19"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22458">
<div class="phpcode"><code><span class="html">when setting the path that the cookie is valid for, always remember to have that trailing '/'.<br /><br />CORRECT:<br />session_set_cookie_params (0, '/yourpath/');<br /><br />INCORRECT:<br />session_set_cookie_params (0, '/yourpath');<br /><br />no comment on how long it took me to realize that this was the cause of my authentication/session problems...</span></code></div>
  </div>
 </div>
  <div class="note" id="109077">  <div class="votes">
    <div id="Vu109077">
    <a href="/manual/vote-note.php?id=109077&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109077">
    <a href="/manual/vote-note.php?id=109077&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109077" title="64% like this...">
    11
    </div>
  </div>
  <a href="#109077" class="name">
  <strong class="user"><em>werner dot avenant at gmail dot com</em></strong></a><a class="genanchor" href="#109077"> &para;</a><div class="date" title="2012-06-19 08:58"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109077">
<div class="phpcode"><code><span class="html">Please take note of the garbage collection "feature" on systems like Ubuntu and Debian.<br /><br />apt-get installs a cron script at /etc/cron.d/php5 that checks the session.gc_maxlifetime variable and then deletes all old sessions every 9 and 39 minutes.<br /><br />The problem is: If you set the maxlifetime for a specific virtual host, those settings will be ignored. Lets say you want your server to store sessions for only 30 minutes, but for one special website you want all sessions to be 24 hours. If you set the session.gc_maxlifetime in .htaccess, your apache conf or use ini_set in your code, it won't work and sessions will still be destroyed after 30 minutes. That's because /usr/lib/php5/maxlifetime (found in that cron file) will always return the value in your php.ini, not the values you set in .htaccess.<br /><br />A workaround is to set the maxlifetime to the maximum your sites require, and then configure a shorter maxlifetime in your .htaccess for those sites that don't need it. <br /><br />Another solution is to give the php5 file in /etc/cron.d sane values, ie, only let it run at 3am in the morning, but you'll have to remember to block the replacement of this file it every time you update php.</span></code></div>
  </div>
 </div>
  <div class="note" id="94961">  <div class="votes">
    <div id="Vu94961">
    <a href="/manual/vote-note.php?id=94961&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94961">
    <a href="/manual/vote-note.php?id=94961&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94961" title="63% like this...">
    13
    </div>
  </div>
  <a href="#94961" class="name">
  <strong class="user"><em>Miki</em></strong></a><a class="genanchor" href="#94961"> &para;</a><div class="date" title="2009-12-04 10:13"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94961">
<div class="phpcode"><code><span class="html">REMEMBER, that if you have a multi-subdomain site, you must put the following to enable a session id on the whole website:
<br />
<br /><span class="default">&lt;?php
<br />session_set_cookie_params</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">, </span><span class="string">'.example.com'</span><span class="keyword">);
<br /></span><span class="default">session_start</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />Otherwise, you'll have 2 diffrent sessions on e.g. news.example.com and download.example.com</span></code></div>
  </div>
 </div>
  <div class="note" id="47397">  <div class="votes">
    <div id="Vu47397">
    <a href="/manual/vote-note.php?id=47397&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47397">
    <a href="/manual/vote-note.php?id=47397&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47397" title="60% like this...">
    6
    </div>
  </div>
  <a href="#47397" class="name">
  <strong class="user"><em>jordi at jcanals dot net</em></strong></a><a class="genanchor" href="#47397"> &para;</a><div class="date" title="2004-11-15 05:39"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47397">
<div class="phpcode"><code><span class="html">Something that has taken me some time to debug: session_set_cookie_params() does not work when the domain param is just a one level domain, like it was a TLD.<br /><br />I have a site in an intranet and our internal domain is .local, so trying to set the cookie session to the .local domain does not work:<br /><br />session_set_cookie_params(0, '/', '.local'); // Does not work<br /><br />In all test I've done, setting the domain only works for SLDs and above: <br /><br />session_set_cookie_params(0 , '/', '.sld.local'); Does work<br /><br />This is nothing to do with PHP but the http protocol, witch does not permit setting cookies for TLDs for obvious security reasons.</span></code></div>
  </div>
 </div>
  <div class="note" id="85107">  <div class="votes">
    <div id="Vu85107">
    <a href="/manual/vote-note.php?id=85107&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85107">
    <a href="/manual/vote-note.php?id=85107&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85107" title="60% like this...">
    5
    </div>
  </div>
  <a href="#85107" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#85107"> &para;</a><div class="date" title="2008-08-14 11:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85107">
<div class="phpcode"><code><span class="html">In Response to RC<br />&gt;23-Apr-2008 04:45<br />&gt;For anyone looking for which browsers support the HTTPOnly &gt;flag, per my research:<br />&gt;<br />&gt;IE 6 SP 1 and higher.<br />&gt;Firefox 3 and higher.<br />&gt;Opera 9.50 and higher.<br /><br />Firefox 2.0 also supports them, but only since version 2.0.0.5.<br /><br /><a href="http://bugzilla.mozilla.org/show_bug.cgi?id=178993" rel="nofollow" target="_blank">http://bugzilla.mozilla.org/show_bug.cgi?id=178993</a></span></code></div>
  </div>
 </div>
  <div class="note" id="78930">  <div class="votes">
    <div id="Vu78930">
    <a href="/manual/vote-note.php?id=78930&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78930">
    <a href="/manual/vote-note.php?id=78930&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78930" title="58% like this...">
    7
    </div>
  </div>
  <a href="#78930" class="name">
  <strong class="user"><em>dan at vespernet dot co dot uk</em></strong></a><a class="genanchor" href="#78930"> &para;</a><div class="date" title="2007-11-02 11:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78930">
<div class="phpcode"><code><span class="html">The below note is an excellent example of how to 'reset' the session expiration time upon a page refresh.<br /><br />However, take care to compensate for when the session expires and doesn't renew itself (a bug I believe). If the below example is run every time a script is executed, it will give an 'Undefined index &lt;session name&gt; error' after the session fails to renew. Precede it with and if isset() condition.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">private function </span><span class="default">startSession</span><span class="keyword">(</span><span class="default">$time </span><span class="keyword">= </span><span class="default">3600</span><span class="keyword">, </span><span class="default">$ses </span><span class="keyword">= </span><span class="string">'MYSES'</span><span class="keyword">) {<br />    </span><span class="default">session_set_cookie_params</span><span class="keyword">(</span><span class="default">$time</span><span class="keyword">);<br />    </span><span class="default">session_name</span><span class="keyword">(</span><span class="default">$ses</span><span class="keyword">);<br />    </span><span class="default">session_start</span><span class="keyword">();<br /><br />    </span><span class="comment">// Reset the expiration time upon page load<br />    </span><span class="keyword">if (isset(</span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="default">$ses</span><span class="keyword">]))<br />      </span><span class="default">setcookie</span><span class="keyword">(</span><span class="default">$ses</span><span class="keyword">, </span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="default">$ses</span><span class="keyword">], </span><span class="default">time</span><span class="keyword">() + </span><span class="default">$time</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />The above example states that a session will last an hour without a page refresh until it is scrapped. Upon a page refresh, the expiration time is reset back to one hour again. If you wish to give users the option of 'staying logged in forever', just feed startSession a value of '99999999', which should last about 3 years.</span></code></div>
  </div>
 </div>
  <div class="note" id="129285">  <div class="votes">
    <div id="Vu129285">
    <a href="/manual/vote-note.php?id=129285&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129285">
    <a href="/manual/vote-note.php?id=129285&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129285" title="100% like this...">
    2
    </div>
  </div>
  <a href="#129285" class="name">
  <strong class="user"><em>theking2(at)king.ma</em></strong></a><a class="genanchor" href="#129285"> &para;</a><div class="date" title="2024-02-26 08:39"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129285">
<div class="phpcode"><code><span class="html">For complete session cookie control I use this snippit<br /><br /><span class="default">&lt;?php<br />    session_set_cookie_params</span><span class="keyword">( [ <br />        </span><span class="string">'lifetime' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,<br />        </span><span class="string">'path' </span><span class="keyword">=&gt; </span><span class="string">'/'</span><span class="keyword">,<br />        </span><span class="string">'domain' </span><span class="keyword">=&gt; </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">],<br />        </span><span class="string">'samesite' </span><span class="keyword">=&gt; </span><span class="string">'Strict'</span><span class="keyword">,<br />    ] );<br />    </span><span class="default">session_start</span><span class="keyword">( [ <br />        </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'SESSION'</span><span class="keyword">,<br />        </span><span class="string">'sid_length' </span><span class="keyword">=&gt; </span><span class="default">96</span><span class="keyword">,<br />        </span><span class="string">'sid_bits_per_character' </span><span class="keyword">=&gt; </span><span class="default">6</span><span class="keyword">,<br />        </span><span class="string">'use_strict_mode' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />        </span><span class="string">'referer_check' </span><span class="keyword">=&gt; </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">],<br />    ] );<br /></span><span class="default">?&gt;<br /></span><br />This will set the params to the recommended ones and generates a cookie  id of reasonable quality.</span></code></div>
  </div>
 </div>
  <div class="note" id="96868">  <div class="votes">
    <div id="Vu96868">
    <a href="/manual/vote-note.php?id=96868&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96868">
    <a href="/manual/vote-note.php?id=96868&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96868" title="51% like this...">
    1
    </div>
  </div>
  <a href="#96868" class="name">
  <strong class="user"><em>jan at dewal dot net</em></strong></a><a class="genanchor" href="#96868"> &para;</a><div class="date" title="2010-03-19 02:42"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96868">
<div class="phpcode"><code><span class="html">The information above about this function that it can only be used BEFORE session_start depends on how you use it. Because its also useful AFTER a session has started as follows:<br /><br />Example you wand to change an already set value of the session cookie expire time:<br /><br /><span class="default">&lt;?php<br /><br /> </span><span class="comment">// Here we start as usual<br /></span><span class="default">session_set_cookie_params</span><span class="keyword">(</span><span class="string">'3600'</span><span class="keyword">); </span><span class="comment">// 1 hour<br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="comment">// More code...<br /><br />// Now we found in some database that the user whishes<br />// the cookie to expire after for example 10 minutes<br />// we can change it instantly ! <br /><br /></span><span class="default">session_set_cookie_params</span><span class="keyword">(</span><span class="string">'600'</span><span class="keyword">); </span><span class="comment">// 10 minutes.<br /></span><span class="default">session_regenerate_id</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">); <br /><br /></span><span class="comment">// This will delete old cookie and adopt new expire settings and the<br />// old cookie variables in a new cookie<br /><br /></span><span class="default">?&gt;<br /></span><br />Please note i only explained the browser (client) side changes of session cookie's expire time.</span></code></div>
  </div>
 </div>
  <div class="note" id="19409">  <div class="votes">
    <div id="Vu19409">
    <a href="/manual/vote-note.php?id=19409&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19409">
    <a href="/manual/vote-note.php?id=19409&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19409" title="50% like this...">
    0
    </div>
  </div>
  <a href="#19409" class="name">
  <strong class="user"><em>gavin_spam at skypaint dot com</em></strong></a><a class="genanchor" href="#19409"> &para;</a><div class="date" title="2002-02-26 02:58"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19409">
<div class="phpcode"><code><span class="html">The first argument to session_set_cookie_params is the number of seconds in the future (based on the server's current time) that the session will expire.  So if you want your sessions to last 100 days:<br /><br />$expireTime = 60*60*24*100; // 100 days<br />session_set_cookie_params($expireTime);<br /><br />I was using time()+$expireTime, which is WRONG (a lot of the session_set_cookie_params() examples I found get this wrong, but probably don't care because they are just doing "infinite" sessions).</span></code></div>
  </div>
 </div>
  <div class="note" id="12811">  <div class="votes">
    <div id="Vu12811">
    <a href="/manual/vote-note.php?id=12811&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12811">
    <a href="/manual/vote-note.php?id=12811&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12811" title="50% like this...">
    0
    </div>
  </div>
  <a href="#12811" class="name">
  <strong class="user"><em>php at mike2k dot com</em></strong></a><a class="genanchor" href="#12811"> &para;</a><div class="date" title="2001-05-09 02:16"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12811">
<div class="phpcode"><code><span class="html">[Editor's Note:
<br />
<br />Rasmus' Solution from the PHP-General list:
<br />
<br />Just use a session cookie (by not providing an expiry time) and add the
<br />server's expiry timestamp to the value of the cookie.  Then when you get
<br />that cookie sent to you, check it against your server's time and make the
<br />decision on whether to accept the cookie or not based on that.
<br />
<br />That way you are immune from people not having their system clocks set
<br />right.
<br />
<br />-Rasmus
<br />
<br />--zak@php.net]
<br />
<br />A couple things I noticed when using this. I think it only works if you set the session_set_cookie_params() function BEFORE the session_start() function.
<br />
<br />Also, when you set the "lifetime" on the cookie, it takes the seconds offset from the SERVER. it sends the cookie encoded to timeout at the SERVER time. So if your server is +2 minutes ahead of the client, and you set the cookie to timeout after 30 seconds, the client actually has 2 minutes and 30 seconds before the cookie times out. I don't know if there's any way that this can be patched in future versions, and the only alternative I think is setting cookies in javascript, which is hardly the point when using all these specific session functions.</span></code></div>
  </div>
 </div>
  <div class="note" id="80970">  <div class="votes">
    <div id="Vu80970">
    <a href="/manual/vote-note.php?id=80970&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80970">
    <a href="/manual/vote-note.php?id=80970&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80970" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#80970" class="name">
  <strong class="user"><em>William Leslie</em></strong></a><a class="genanchor" href="#80970"> &para;</a><div class="date" title="2008-02-08 09:32"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80970">
<div class="phpcode"><code><span class="html">"Info at xyzsite dot ru" writes that Internet Explorer does not correctly handle cookies whose domain contains an underscore character.<br /><br />However, There's a good reason for this apparently faulty behavior: the underscore character is forbidden in DNS names.  RFC 3696 says:<br /><br />"The labels ... that make up a domain name must consist of only the ASCII alphabetic and numeric characters, plus the hyphen.  No other symbols or punctuation characters are permitted, nor is blank space."<br /><br />If the underscore works in Mozilla or other browsers, it's only because they are being lenient in the validation of domain names.</span></code></div>
  </div>
 </div>
  <div class="note" id="87070">  <div class="votes">
    <div id="Vu87070">
    <a href="/manual/vote-note.php?id=87070&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87070">
    <a href="/manual/vote-note.php?id=87070&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87070" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#87070" class="name">
  <strong class="user"><em>Ashus</em></strong></a><a class="genanchor" href="#87070"> &para;</a><div class="date" title="2008-11-18 07:38"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87070">
<div class="phpcode"><code><span class="html">Cross-domain Cookies do work in all browsers (path '/' server '.example.com'), except the case you try it in IE6/7 and the server name is retreived from :etc/hosts: file, in that case the cookie won't be even saved.</span></code></div>
  </div>
 </div>
  <div class="note" id="125875">  <div class="votes">
    <div id="Vu125875">
    <a href="/manual/vote-note.php?id=125875&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125875">
    <a href="/manual/vote-note.php?id=125875&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125875" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#125875" class="name">
  <strong class="user"><em>eion at robbmob dot com</em></strong></a><a class="genanchor" href="#125875"> &para;</a><div class="date" title="2021-03-03 07:24"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125875">
<div class="phpcode"><code><span class="html">Unfortunately session_set_cookie_params() cannot be called during an active session, it'll just E_WARNING and return false, which means calling session_regenerate_id() (eg, during login to prevent a session fixation attack) could end up using old cookie settings (eg, not "SameSite=Strict")<br /><br />To ensure any future sessions are being created with the right cookie settings, you're better off to use ini_set() to set the cookie parameters - which is all that session_set_cookie_params() does under the hood anyway</span></code></div>
  </div>
 </div>
  <div class="note" id="83484">  <div class="votes">
    <div id="Vu83484">
    <a href="/manual/vote-note.php?id=83484&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83484">
    <a href="/manual/vote-note.php?id=83484&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83484" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#83484" class="name">
  <strong class="user"><em>brandan, bildungsroman.org</em></strong></a><a class="genanchor" href="#83484"> &para;</a><div class="date" title="2008-05-27 08:55"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83484">
<div class="phpcode"><code><span class="html">i found it somewhat difficult to work with sessions due to the documentation not really denoting the necessity for the session name to be set via session_name() in order for session_set_cookie_params() to be of any use.  i found no reference to session_name() in this article, and my session functions would have been a disastrous mess were it not for a friend familiar with session.<br /><br />so, in essence, for anybody wondering about where to start: declare a session name before using session_set_cookie_params(), otherwise you might agitate php to the point of committing some atrocity against your webserver.</span></code></div>
  </div>
 </div>
  <div class="note" id="81840">  <div class="votes">
    <div id="Vu81840">
    <a href="/manual/vote-note.php?id=81840&amp;page=function.session-set-cookie-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81840">
    <a href="/manual/vote-note.php?id=81840&amp;page=function.session-set-cookie-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81840" title="33% like this...">
    -5
    </div>
  </div>
  <a href="#81840" class="name">
  <strong class="user"><em>eddie at roosenmaallen dot com</em></strong></a><a class="genanchor" href="#81840"> &para;</a><div class="date" title="2008-03-15 06:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81840">
<div class="phpcode"><code><span class="html">Further to "info at xyzsite dot ru" and William Leslie, Safari on OS X also doesn't honour cookies with an underscore in the subdomain.<br /><br />The workaround I've found is to specify the parent domain as the cookie domain -- instead of "bad_name.example.com", set the path to ".example.com"; it's suboptimal, but gets the job done.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.session-set-cookie-params&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-set-cookie-params.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
