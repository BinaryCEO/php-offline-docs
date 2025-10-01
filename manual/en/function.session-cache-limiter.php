<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: session_cache_limiter - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.session-cache-limiter.php">
 <link rel="shorturl" href="https://www.php.net/session-cache-limiter">
 <link rel="alternate" href="https://www.php.net/session-cache-limiter" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.session-cache-expire.php">
 <link rel="next" href="https://www.php.net/manual/en/function.session-commit.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.session-cache-limiter.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.session-cache-limiter.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.session-cache-limiter.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.session-cache-limiter.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.session-cache-limiter.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.session-cache-limiter.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.session-cache-limiter.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.session-cache-limiter.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.session-cache-limiter.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.session-cache-limiter.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.session-cache-limiter.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get and/or set the current cache limiter" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: session_cache_limiter - Manual" />
<meta name="twitter:description" content="Get and/or set the current cache limiter" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: session_cache_limiter - Manual" />
<meta itemprop="description" content="Get and/or set the current cache limiter" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get and/or set the current cache limiter" />

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
        <a href="function.session-commit.php">
          session_commit &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.session-cache-expire.php">
          &laquo; session_cache_expire        </a>
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
            <option value='en/function.session-cache-limiter.php' selected="selected">English</option>
            <option value='de/function.session-cache-limiter.php'>German</option>
            <option value='es/function.session-cache-limiter.php'>Spanish</option>
            <option value='fr/function.session-cache-limiter.php'>French</option>
            <option value='it/function.session-cache-limiter.php'>Italian</option>
            <option value='ja/function.session-cache-limiter.php'>Japanese</option>
            <option value='pt_BR/function.session-cache-limiter.php'>Brazilian Portuguese</option>
            <option value='ru/function.session-cache-limiter.php'>Russian</option>
            <option value='tr/function.session-cache-limiter.php'>Turkish</option>
            <option value='uk/function.session-cache-limiter.php'>Ukrainian</option>
            <option value='zh/function.session-cache-limiter.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.session-cache-limiter" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">session_cache_limiter</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.3, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">session_cache_limiter</span> &mdash; <span class="dc-title">Get and/or set the current cache limiter</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.session-cache-limiter-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>session_cache_limiter</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$value</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>session_cache_limiter()</strong></span> returns the name of the
   current cache limiter.
  </p>
  <p class="para">
   The cache limiter defines which cache control HTTP headers are sent to
   the client.  These headers determine the rules by which the page content
   may be cached by the client and intermediate proxies.  Setting the cache
   limiter to <code class="literal">nocache</code> disallows any client/proxy caching.
   A value of <code class="literal">public</code> permits caching by proxies and the
   client, whereas <code class="literal">private</code> disallows caching by proxies
   and permits the client to cache the contents.
  </p>
  <p class="para">
   In <code class="literal">private</code> mode, the Expire header sent to the client
   may cause confusion for some browsers, including <span class="productname">Mozilla</span>.
   You can avoid this problem by using <code class="literal">private_no_expire</code> mode. The
   <code class="literal">Expire</code> header is never sent to the client in this mode.
  </p>
  <p class="para">
   Setting the cache limiter to <code class="literal">&#039;&#039;</code> will turn off automatic sending
   of cache headers entirely.
  </p>
  <p class="para">
   The cache limiter is reset to the default value stored in
   <a href="session.configuration.php#ini.session.cache-limiter" class="link">session.cache_limiter</a>
   at request startup time. Thus, you need to call
   <span class="function"><strong>session_cache_limiter()</strong></span> for every
   request (and before <span class="function"><a href="function.session-start.php" class="function">session_start()</a></span> is called).
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.session-cache-limiter-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">value</code> is specified and not <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the name of the
       current cache limiter is changed to the new value.
      </p>
      <table class="doctable table">
       <caption><strong>Possible values</strong></caption>
       
        <thead>
         <tr>
          <th>Value</th>
          <th>Headers sent</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td><code class="literal">public</code></td>
          <td>
           <div class="example-contents">
<div class="headercode"><pre class="headercode">Expires: (sometime in the future, according session.cache_expire)
Cache-Control: public, max-age=(sometime in the future, according to session.cache_expire)
Last-Modified: (the timestamp of when the session was last saved)</pre>
</div>
           </div>

          </td>
         </tr>

         <tr>
          <td><code class="literal">private_no_expire</code></td>
          <td>
           <div class="example-contents">
<div class="headercode"><pre class="headercode">Cache-Control: private, max-age=(session.cache_expire in the future)
Last-Modified: (the timestamp of when the session was last saved)</pre>
</div>
           </div>

          </td>
         </tr>

         <tr>
          <td><code class="literal">private</code></td>
          <td>
           <div class="example-contents">
<div class="headercode"><pre class="headercode">Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: private, max-age=(session.cache_expire in the future)
Last-Modified: (the timestamp of when the session was last saved)</pre>
</div>
           </div>

          </td>
         </tr>

         <tr>
          <td><code class="literal">nocache</code></td>
          <td>
           <div class="example-contents">
<div class="headercode"><pre class="headercode">Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache</pre>
</div>
           </div>

          </td>
         </tr>

        </tbody>
       
      </table>

     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.session-cache-limiter-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the name of the current cache limiter.
   On failure to change the value, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.session-cache-limiter-changelog">
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
       <code class="parameter">value</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.session-cache-limiter-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5002">
    <p><strong>Example #1 <span class="function"><strong>session_cache_limiter()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* set the cache limiter to 'private' */<br /><br /></span><span style="color: #0000BB">session_cache_limiter</span><span style="color: #007700">(</span><span style="color: #DD0000">'private'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$cache_limiter </span><span style="color: #007700">= </span><span style="color: #0000BB">session_cache_limiter</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #DD0000">"The cache limiter is now set to </span><span style="color: #0000BB">$cache_limiter</span><span style="color: #DD0000">&lt;br /&gt;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.session-cache-limiter-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="session.configuration.php#ini.session.cache-limiter" class="link">session.cache_limiter</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/session/functions/session-cache-limiter.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.session-cache-limiter%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.session-cache-limiter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-cache-limiter.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">24 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="82174">  <div class="votes">
    <div id="Vu82174">
    <a href="/manual/vote-note.php?id=82174&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82174">
    <a href="/manual/vote-note.php?id=82174&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82174" title="58% like this...">
    11
    </div>
  </div>
  <a href="#82174" class="name">
  <strong class="user"><em>clay at killersoft dot com</em></strong></a><a class="genanchor" href="#82174"> &para;</a><div class="date" title="2008-03-30 05:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82174">
<div class="phpcode"><code><span class="html">The actual headers that are set using the values described above are:<br /><br />public:<br />    Expires: pageload + 3 hours<br />    Cache-Control: public, max-age=10800<br />    <br />private:<br />    Expires: Thu, 19 Nov 1981 08:52:00 GMT<br />    Cache-Control: private, max-age=10800, pre-check=10800<br />    <br />nocache:<br />    Expires: Thu, 19 Nov 1981 08:52:00 GMT<br />    Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0<br />    Pragma: no-cache<br />    <br />private_no_expire:<br />    Cache-Control: private, max-age=10800, pre-check=10800<br />    <br /><br />Regarding other settings mentioned by some, those just don't do anything. Check the source of PHP, in ext/session/session.c -- the above values are all that actually do anything. Other values, or an emtpy string, result in no cache-limiting headers being set at all.</span></code></div>
  </div>
 </div>
  <div class="note" id="70830">  <div class="votes">
    <div id="Vu70830">
    <a href="/manual/vote-note.php?id=70830&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70830">
    <a href="/manual/vote-note.php?id=70830&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70830" title="66% like this...">
    5
    </div>
  </div>
  <a href="#70830" class="name">
  <strong class="user"><em>Jeremiah at jkjonesco dot com</em></strong></a><a class="genanchor" href="#70830"> &para;</a><div class="date" title="2006-10-30 03:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70830">
<div class="phpcode"><code><span class="html">If you are trying to work with dynamic binaries such as videos or images, the new IE 7 appears to require the ETag header.  You will need to make sure that you follow the specifications for how ETag works in order for your cache control to work properly.  Mozilla supports the ETag header as well, but does NOT require it for caching.  If you need to cache a dynamic image, video, or other binary file, then be sure to set your ETag and then check for the If-Not-Modified header on subsequent requests so that you can properly return the 304 Not Modified page.</span></code></div>
  </div>
 </div>
  <div class="note" id="86057">  <div class="votes">
    <div id="Vu86057">
    <a href="/manual/vote-note.php?id=86057&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86057">
    <a href="/manual/vote-note.php?id=86057&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86057" title="60% like this...">
    6
    </div>
  </div>
  <a href="#86057" class="name">
  <strong class="user"><em>ire dot ogunsina at gmail dot com</em></strong></a><a class="genanchor" href="#86057"> &para;</a><div class="date" title="2008-10-01 07:55"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86057">
<div class="phpcode"><code><span class="html">I have had some trouble preventing IE, particular IE 7 to stop caching pages. I read quite a number of articles relating to people's experiences and how they fixed it but it was hard to find one that worked for me. Eventually I had to use the following fix:<br />&lt;META HTTP-EQUIV="Pragma" CONTENT="no-cache"&gt;<br />&lt;META HTTP-EQUIV="Expires" CONTENT="-1"&gt;<br /><br />based on the information available on following url: <a href="http://support.microsoft.com/kb/234067" rel="nofollow" target="_blank">http://support.microsoft.com/kb/234067</a><br /><br />Would to God that we'd all quit IE for good. Hope this saves someone some agony over IE.</span></code></div>
  </div>
 </div>
  <div class="note" id="63698">  <div class="votes">
    <div id="Vu63698">
    <a href="/manual/vote-note.php?id=63698&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63698">
    <a href="/manual/vote-note.php?id=63698&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63698" title="60% like this...">
    2
    </div>
  </div>
  <a href="#63698" class="name">
  <strong class="user"><em>john</em></strong></a><a class="genanchor" href="#63698"> &para;</a><div class="date" title="2006-03-28 08:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63698">
<div class="phpcode"><code><span class="html">In addition to the  above, don't forget to check the php.ini file for the setting:   session.cache_limiter = nocache<br /><br />Since I use xoops and didn't start the session, I had the SSL/download problem until I noticed this.</span></code></div>
  </div>
 </div>
  <div class="note" id="52803">  <div class="votes">
    <div id="Vu52803">
    <a href="/manual/vote-note.php?id=52803&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52803">
    <a href="/manual/vote-note.php?id=52803&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52803" title="60% like this...">
    2
    </div>
  </div>
  <a href="#52803" class="name">
  <strong class="user"><em>snakes at ntica dot com</em></strong></a><a class="genanchor" href="#52803"> &para;</a><div class="date" title="2005-05-12 02:28"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52803">
<div class="phpcode"><code><span class="html">Avoiding caching PHP pages:<br />After lot of tries and research this is the best combination of headers I've found that seems to work well even with the proxy of visitors that are using satellit connection.<br /><br />&lt;?<br />header("ETag: PUB" . time());<br />header("Last-Modified: " . gmdate("D, d M Y H:i:s", time()-10) . " GMT");<br />header("Expires: " . gmdate("D, d M Y H:i:s", time() + 5) . " GMT");<br />header("Pragma: no-cache");<br />header("Cache-Control: max-age=1, s-maxage=1, no-cache, must-revalidate");<br />session_cache_limiter("nocache");<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="46827">  <div class="votes">
    <div id="Vu46827">
    <a href="/manual/vote-note.php?id=46827&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46827">
    <a href="/manual/vote-note.php?id=46827&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46827" title="56% like this...">
    2
    </div>
  </div>
  <a href="#46827" class="name">
  <strong class="user"><em>pulstar at ig dot com dot br</em></strong></a><a class="genanchor" href="#46827"> &para;</a><div class="date" title="2004-10-24 02:39"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46827">
<div class="phpcode"><code><span class="html">You can find more information about to control the cache in PHP at <a href="http://www.php.net/manual/en/function.header.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.header.php</a><br /><br />If you have a dinamic website and want to allow your visitors to use the back button after they sent a form with the post method, the best combination I found was:<br /><br /><span class="default">&lt;?php<br /><br />header</span><span class="keyword">(</span><span class="string">"Expires: Sat, 01 Jan 2000 00:00:00 GMT"</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Last-Modified: "</span><span class="keyword">.</span><span class="default">gmdate</span><span class="keyword">(</span><span class="string">"D, d M Y H:i:s"</span><span class="keyword">).</span><span class="string">" GMT"</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Cache-Control: post-check=0, pre-check=0"</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">session_cache_limiter</span><span class="keyword">(</span><span class="string">"must-revalidate"</span><span class="keyword">);<br /><br /></span><span class="comment">// and after you start the session<br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />I try some combinations using header("Cache-Control: no-cache, must-revalidate"), but when clicking the back button, the last changes in the form back to their previous states. The combination above works fine with IE 6.x. I didn't test this with other browsers.<br /><br />When I try something like session_cache_limiter("nocache, must-revalidate") it doesn't work. The page only updates when I used the browser's refresh button. In dynamic web sites this is not good. The content must be fresh after each click.<br /><br />I didn't find these combinations like "private, must-revalidate" documented in the manual and I guess that something different from "none, nocache, private, public and private_no_expire" are resolved to "none" or something like that. One thing I notice is that in session_cache_limiter() it is "nocache", but in header() it is "no-cache". This may give us some clues about how session_cache_limiter() function works.<br /><br />About caching, the perfect solution I think is to give the correct expiration date and time and also the right last-modified header for each element in the web site, when they are really updated. This means a lot of extra controls of course, but may worth in web sites with high overload.<br /><br />The "public" option means that all available cache in proxies and clientes will be used, so this improves the speed of the web site and also reduces the used bandwidth. But without the right expiration and last-modified headers, you can use it only in static web sites.<br /><br />The "private" option means that only the cache in clients will be used. This is good for a more sensitive data that can be stored locally in the browser cache. It have some benefits of the public option, but the same restrictions too.<br /><br />The "nocache" (or no-cache?) option means that the HTML portion will not be cached, but the images, CSS and JS files will. This is good for dynamic websites because you still can use the power of cache without loose the refreshness after each click. These files can be updated when you open the web site or use the browser's refresh button. <br />I don't know why, but flash files are never updated when you click the refresh button. A common solution for this is to change the file name when you update the flash file.<br /><br />The "no-store" option means that all the content will not be cached anyway, including images, CSS or JS files. I don't know if this applyes to flash files too, but is possible. This option must be used with very sensitive data. I think the SSL uses this by default.</span></code></div>
  </div>
 </div>
  <div class="note" id="85598">  <div class="votes">
    <div id="Vu85598">
    <a href="/manual/vote-note.php?id=85598&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85598">
    <a href="/manual/vote-note.php?id=85598&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85598" title="55% like this...">
    1
    </div>
  </div>
  <a href="#85598" class="name">
  <strong class="user"><em>yves at kochira point com</em></strong></a><a class="genanchor" href="#85598"> &para;</a><div class="date" title="2008-09-08 01:58"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85598">
<div class="phpcode"><code><span class="html">To avoid a headache while trying the various parameters in Firefox 3.0.1 (+Firebug), just restart the browser after a change... or they're not taken into account (from 'no-cache' to 'public'/'private').</span></code></div>
  </div>
 </div>
  <div class="note" id="40376">  <div class="votes">
    <div id="Vu40376">
    <a href="/manual/vote-note.php?id=40376&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40376">
    <a href="/manual/vote-note.php?id=40376&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40376" title="53% like this...">
    1
    </div>
  </div>
  <a href="#40376" class="name">
  <strong class="user"><em>richard at izyn dot co dot nz</em></strong></a><a class="genanchor" href="#40376"> &para;</a><div class="date" title="2004-03-01 06:17"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40376">
<div class="phpcode"><code><span class="html">I found that session_cache_limiter("none") works for me when I create PDFs  on the fly because session_cache_limiter("private") causes the browser(IE6) to cache the PDF indefinitely.</span></code></div>
  </div>
 </div>
  <div class="note" id="37986">  <div class="votes">
    <div id="Vu37986">
    <a href="/manual/vote-note.php?id=37986&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37986">
    <a href="/manual/vote-note.php?id=37986&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37986" title="53% like this...">
    1
    </div>
  </div>
  <a href="#37986" class="name">
  <strong class="user"><em>jthome at fcgov dot com</em></strong></a><a class="genanchor" href="#37986"> &para;</a><div class="date" title="2003-12-03 04:36"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37986">
<div class="phpcode"><code><span class="html">In addition to the note above regarding SSL/IE bug/Sessions, also make sure you DO NOT SET THE HEADER 'Pragma: no-cache' if you are sending an inline document (e.g., PDF document).<br /><br />For example:<br /><br /><span class="default">&lt;?php<br /><br />        header</span><span class="keyword">(</span><span class="string">"Content-Type: application/pdf"</span><span class="keyword">);<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: inline; filename=foo.pdf"</span><span class="keyword">);<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Accept-Ranges: bytes"</span><span class="keyword">);<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: </span><span class="default">$len</span><span class="string">"</span><span class="keyword">);<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Expires: 0"</span><span class="keyword">);<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Cache-Control: private"</span><span class="keyword">);<br /></span><span class="comment">//        header("Pragma: no-cache");//don't send this header!!<br /><br /></span><span class="default">?&gt;<br /></span><br />Best,<br /><br />--<br />Jim</span></code></div>
  </div>
 </div>
  <div class="note" id="118826">  <div class="votes">
    <div id="Vu118826">
    <a href="/manual/vote-note.php?id=118826&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118826">
    <a href="/manual/vote-note.php?id=118826&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118826" title="50% like this...">
    0
    </div>
  </div>
  <a href="#118826" class="name">
  <strong class="user"><em>glenk7901</em></strong></a><a class="genanchor" href="#118826"> &para;</a><div class="date" title="2016-02-12 05:39"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118826">
<div class="phpcode"><code><span class="html">I was having a fit trying fix an issue caused by session.cache_limiter.  Somehow I had set this to nocache (a long time ago) in the .ini file and this setting caused the back-button to not work.  When session.cache_limiter was set on private or public, the back-button worked, but then logging out of the site did not work.  I had thought that session.cache_limiter was something that should be enabled, but finally found today that turning it off (by setting it to '') fixed both these problems.  So now the question for me is, when would anybody ever want to use session.cache_limiter?  I was hating Php because of this problem.</span></code></div>
  </div>
 </div>
  <div class="note" id="82925">  <div class="votes">
    <div id="Vu82925">
    <a href="/manual/vote-note.php?id=82925&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82925">
    <a href="/manual/vote-note.php?id=82925&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82925" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82925" class="name">
  <strong class="user"><em>scott at realorganized dot com</em></strong></a><a class="genanchor" href="#82925"> &para;</a><div class="date" title="2008-05-01 11:03"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82925">
<div class="phpcode"><code><span class="html"><a href="http://us.php.net/session_cache_limiter" rel="nofollow" target="_blank">http://us.php.net/session_cache_limiter</a><br /><br />sends:<br /><br />Pragma: no-cache<br /><br />under some conditions from server to client.<br /><br />Internet Explorer has a strange interpretation of: Pragma: No-cache<br />being sent from the server to the client.  <br /><br />Here's the link:<br /><br /><a href="http://support.microsoft.com/kb/234067" rel="nofollow" target="_blank">http://support.microsoft.com/kb/234067</a><br /><br />If the client communicates with the server over a secure connection (<a href="https://" rel="nofollow" target="_blank">https://</a>) and the server returns a Pragma: no-cache header with the response, Internet Explorer does not cache the response.<br /><br />Note, however, that the Pragma: no-cache header was not intended for this. According to the HTTP 1.0 and 1.1 specifications, this header is defined in the context of a request only, not a response, and is actually intended for proxy servers that may prevent certain important requests from reaching the destination Web server. For future applications, the Cache-Control header is the proper means for controlling caching.<br /><br />For this reason, watch out when using the Pragma: no-cache with https and IE</span></code></div>
  </div>
 </div>
  <div class="note" id="55578">  <div class="votes">
    <div id="Vu55578">
    <a href="/manual/vote-note.php?id=55578&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55578">
    <a href="/manual/vote-note.php?id=55578&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55578" title="50% like this...">
    0
    </div>
  </div>
  <a href="#55578" class="name">
  <strong class="user"><em>donovan at go4 dot com dot au</em></strong></a><a class="genanchor" href="#55578"> &para;</a><div class="date" title="2005-08-07 06:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55578">
<div class="phpcode"><code><span class="html">IE6 'the file could not be written to the cache':<br /><br />I tried all the other suggestions mentioned here but none of them worked.<br /><br />I friend suggested header("Pragma: ");<br /><br />This worked straight away!</span></code></div>
  </div>
 </div>
  <div class="note" id="48822">  <div class="votes">
    <div id="Vu48822">
    <a href="/manual/vote-note.php?id=48822&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48822">
    <a href="/manual/vote-note.php?id=48822&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48822" title="50% like this...">
    0
    </div>
  </div>
  <a href="#48822" class="name">
  <strong class="user"><em>justin at justintubbs dot com</em></strong></a><a class="genanchor" href="#48822"> &para;</a><div class="date" title="2005-01-07 12:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48822">
<div class="phpcode"><code><span class="html">I have PHP 4.3 running on a Windows 2003 Server running IIS 6.0 also using SSL encryption for my pages.  I could not (for the life of me) figure out how to get IE 6.0/WinXPPro to recognize a set of HTML tables as an Excel spreadsheet export, and it was due to the header() variables I was using.  Hopefully these are helpful to others who are attempting the same type of export within PHP.<br /><br />*This example builds on the previously submitted one, adding a few necessary headers.<br /><br /><span class="default">&lt;?php<br />    header</span><span class="keyword">(</span><span class="string">"Expires: Sat, 01 Jan 2000 00:00:00 GMT"</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Last-Modified: "</span><span class="keyword">.</span><span class="default">gmdate</span><span class="keyword">(</span><span class="string">"D, d M Y H:i:s"</span><span class="keyword">).</span><span class="string">" GMT"</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Pragma: public"</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Expires: 0"</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Cache-Control: must-revalidate, post-check=0, pre-check=0"</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Cache-Control: public"</span><span class="keyword">); <br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Description: File Transfer"</span><span class="keyword">);<br />    <br />    </span><span class="default">session_cache_limiter</span><span class="keyword">(</span><span class="string">"must-revalidate"</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: application/vnd.ms-excel"</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Disposition: attachment; filename="fileToExport.xls"'</span><span class="keyword">);<br /><br />    </span><span class="comment">// and after you start the session<br />    </span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="32318">  <div class="votes">
    <div id="Vu32318">
    <a href="/manual/vote-note.php?id=32318&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32318">
    <a href="/manual/vote-note.php?id=32318&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32318" title="50% like this...">
    0
    </div>
  </div>
  <a href="#32318" class="name">
  <strong class="user"><em>MerlinsInvite</em></strong></a><a class="genanchor" href="#32318"> &para;</a><div class="date" title="2003-05-23 09:51"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32318">
<div class="phpcode"><code><span class="html">I solved the problem with pushing downloads to browser's, without needing to play with server/session parameters by using :<br />header("Content-Disposition: inline; filename=\"$filename\"");<br />for IE browsers and <br />header("Content-Disposition: attachment; filename=\"$filename\"");<br />for all other browsers.</span></code></div>
  </div>
 </div>
  <div class="note" id="42487">  <div class="votes">
    <div id="Vu42487">
    <a href="/manual/vote-note.php?id=42487&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42487">
    <a href="/manual/vote-note.php?id=42487&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42487" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#42487" class="name">
  <strong class="user"><em>misterp3d at hotmail dot com</em></strong></a><a class="genanchor" href="#42487"> &para;</a><div class="date" title="2004-05-18 02:16"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42487">
<div class="phpcode"><code><span class="html">I had a problem using a FORM with POST method when user of my website was using the back button. The page requested a refresh to be able to see again the FORM.<br /><br />To solve the problem I used : <br /><span class="default">&lt;?php<br />session_cache_limiter</span><span class="keyword">(</span><span class="string">'private, must-revalidate'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />*You need to write this line before any output<br /><br />Hope that will help some of you ;)<br /><br />[P]</span></code></div>
  </div>
 </div>
  <div class="note" id="56450">  <div class="votes">
    <div id="Vu56450">
    <a href="/manual/vote-note.php?id=56450&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56450">
    <a href="/manual/vote-note.php?id=56450&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56450" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#56450" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#56450"> &para;</a><div class="date" title="2005-09-02 03:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56450">
<div class="phpcode"><code><span class="html">Andrei Chirila, andrei_chirila at yahoo dot com<br />12-Jan-2005 09:30 <br />I played about an hour with the download and sessions. yes, to work you'll need session_cache_limiter("must-revalidate"); but this BEFORE session_start() if you want that your download start [IE problem]. Hope someone will need this someday <br /><br />====<br /><br />yes, somebody has needed this today :)<br /><br />situation: trying to make a session based download management system complete with user login system that requries an authorized user to download some files, and hide all such files from non-authorized users. the user login, download center, and content management system of the site are all tied in to each other, making troubleshooting this headering stuff a headache.<br /><br />problem: files being served are not accessible thru the regular site, since they are above the htdocs folder in apache, and so headering the file is required, and sessions do not work well with files being headered to the browser.<br /><br />solution: the download center uses ob_start("");, then  session_cache_limiter("must-revalidate");, before the session_start();, then everything works well.<br /><br />thank you very much! i was resorting to using a cookie to control this before because i could not figure out how to tie in sessions to the system before!</span></code></div>
  </div>
 </div>
  <div class="note" id="57936">  <div class="votes">
    <div id="Vu57936">
    <a href="/manual/vote-note.php?id=57936&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57936">
    <a href="/manual/vote-note.php?id=57936&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57936" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#57936" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#57936"> &para;</a><div class="date" title="2005-10-19 08:11"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57936">
<div class="phpcode"><code><span class="html">The onLoad method of Actionscript's loadVars class was returning false in IE6 using SSL until I set --&gt; session_cache_limiter("must-revalidate"); &lt;-- on the receiving PHP script.</span></code></div>
  </div>
 </div>
  <div class="note" id="48940">  <div class="votes">
    <div id="Vu48940">
    <a href="/manual/vote-note.php?id=48940&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48940">
    <a href="/manual/vote-note.php?id=48940&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48940" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#48940" class="name">
  <strong class="user"><em>Andrei Chirila, andrei_chirila at yahoo dot com</em></strong></a><a class="genanchor" href="#48940"> &para;</a><div class="date" title="2005-01-12 06:30"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48940">
<div class="phpcode"><code><span class="html">I played about an hour with the download and sessions. yes, to work you'll need session_cache_limiter("must-revalidate"); but this BEFORE session_start() if you want that your download start [IE problem]. Hope someone will need this someday ...</span></code></div>
  </div>
 </div>
  <div class="note" id="39266">  <div class="votes">
    <div id="Vu39266">
    <a href="/manual/vote-note.php?id=39266&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39266">
    <a href="/manual/vote-note.php?id=39266&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39266" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#39266" class="name">
  <strong class="user"><em>Mikko H?m?l?inen</em></strong></a><a class="genanchor" href="#39266"> &para;</a><div class="date" title="2004-01-22 09:10"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39266">
<div class="phpcode"><code><span class="html">I had a similair problem (browsers couldn't save files coming from my download-script). Only in my case the problem occured with IE 6.0 and Netscape 7.1. Adding the "session_cache_limiter('public');" before "session_start();" helped.</span></code></div>
  </div>
 </div>
  <div class="note" id="57892">  <div class="votes">
    <div id="Vu57892">
    <a href="/manual/vote-note.php?id=57892&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57892">
    <a href="/manual/vote-note.php?id=57892&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57892" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#57892" class="name">
  <strong class="user"><em>radu dot rendec at ines dot ro</em></strong></a><a class="genanchor" href="#57892"> &para;</a><div class="date" title="2005-10-18 04:41"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57892">
<div class="phpcode"><code><span class="html">I've read the other comments and done some "reasearch" on my own. Using php's session mechanism and explicitly setting the "cache-control" header should not be mixed.<br /><br />When session_start() is called, the "cache-control" and "pragma" headers are automatically set by php (to whatever value had been specified using session_cache_limiter()).<br /><br />Explicitly setting those headers _before_ session_start() will have no effect, and explicitly setting them _after_ session_start() will overwrite the settings from session_cache_limiter().<br /><br />If I had to deal with php sessions, I'd go for using session_cache_limiter() and leaving the headers alone.</span></code></div>
  </div>
 </div>
  <div class="note" id="74359">  <div class="votes">
    <div id="Vu74359">
    <a href="/manual/vote-note.php?id=74359&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74359">
    <a href="/manual/vote-note.php?id=74359&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74359" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#74359" class="name">
  <strong class="user"><em>Fernando Gabrieli fgabrieli at gmail</em></strong></a><a class="genanchor" href="#74359"> &para;</a><div class="date" title="2007-04-07 05:21"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74359">
<div class="phpcode"><code><span class="html">&lt;?<br />    session_cache_limiter ('private, must-revalidate');    <br /><br />    $cache_limiter = session_cache_limiter();<br /><br />    //<br /><br />    session_cache_expire(60); // in minutes <br /><br />    session_start() ;<br />?&gt;<br /><br />If i do not set must-revalidate, IE seems to cache session variables without refreshing them <br /><br />If i post a form then it refreshes the variables<br /><br />Firefox does not have this problem<br /><br />So, be sure to use must-revalidate</span></code></div>
  </div>
 </div>
  <div class="note" id="41001">  <div class="votes">
    <div id="Vu41001">
    <a href="/manual/vote-note.php?id=41001&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41001">
    <a href="/manual/vote-note.php?id=41001&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41001" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#41001" class="name">
  <strong class="user"><em>usenet at phord splat com</em></strong></a><a class="genanchor" href="#41001"> &para;</a><div class="date" title="2004-03-25 08:44"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41001">
<div class="phpcode"><code><span class="html">Hey!  NickyBoy was right!<br /><br />I looked all over google and his note was the only place that had it right.  But, there's a caveat.<br /><br />I wrote up my results here:<br /><a href="http://www.phord.com/experiment/cache/" rel="nofollow" target="_blank">http://www.phord.com/experiment/cache/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="30208">  <div class="votes">
    <div id="Vu30208">
    <a href="/manual/vote-note.php?id=30208&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30208">
    <a href="/manual/vote-note.php?id=30208&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30208" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#30208" class="name">
  <strong class="user"><em>nickyboy at 4ce.co.uk</em></strong></a><a class="genanchor" href="#30208"> &para;</a><div class="date" title="2003-03-10 05:42"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30208">
<div class="phpcode"><code><span class="html">The problems people mention about IE are actually a feature!  <br />Microsoft Knowledge Base Article 316431 says:<br /><br />In order for Internet Explorer to open documents in Office (or any out-of-process, ActiveX document server), Internet Explorer must save the file to the local cache directory and ask the associated application to load the file by using IPersistFile::Load. If the file is not stored to disk, this operation fails. <br /><br />When Internet Explorer communicates with a secure Web site through SSL, Internet Explorer enforces any no-cache request. If the header or headers are present, Internet Explorer does not cache the file. Consequently, Office cannot open the file.<br /><br />They say this applies to: <br />Microsoft Internet Explorer 5.5 for Windows 2000<br />Microsoft Internet Explorer 5.01 for Windows 2000<br />Microsoft Internet Explorer version 6 for Windows 2000<br />not sure about other versions!<br /><br />hth<br />nickyboy</span></code></div>
  </div>
 </div>
  <div class="note" id="34600">  <div class="votes">
    <div id="Vu34600">
    <a href="/manual/vote-note.php?id=34600&amp;page=function.session-cache-limiter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34600">
    <a href="/manual/vote-note.php?id=34600&amp;page=function.session-cache-limiter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34600" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#34600" class="name">
  <strong class="user"><em>plyrvt at mail dot ru (Yura Pylypenko)</em></strong></a><a class="genanchor" href="#34600"> &para;</a><div class="date" title="2003-07-31 02:33"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34600">
<div class="phpcode"><code><span class="html">Be careful using session_cache_limiter() with ob_start('ob_gzhandler')<br />If ob_start('ob_gzhandler') is called after session_cache_limiter() it seems to overwrite cache control headers with 'nocache' equivalent.<br />So always put ob_start first.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.session-cache-limiter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-cache-limiter.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
