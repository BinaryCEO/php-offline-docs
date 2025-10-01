<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Swoole\Http\Response - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.swoole-http-response.php">
 <link rel="shorturl" href="https://www.php.net/swoole-http-response">
 <link rel="alternate" href="https://www.php.net/swoole-http-response" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.swoole.php">
 <link rel="prev" href="https://www.php.net/manual/en/swoole-http-request.rawcontent.php">
 <link rel="next" href="https://www.php.net/manual/en/swoole-http-response.cookie.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.swoole-http-response.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.swoole-http-response.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.swoole-http-response.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.swoole-http-response.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.swoole-http-response.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.swoole-http-response.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.swoole-http-response.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.swoole-http-response.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.swoole-http-response.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.swoole-http-response.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.swoole-http-response.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Swoole\Http\Response class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Swoole\Http\Response - Manual" />
<meta name="twitter:description" content="The Swoole\Http\Response class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Swoole\Http\Response - Manual" />
<meta itemprop="description" content="The Swoole\Http\Response class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Swoole\Http\Response class" />

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
        <a href="swoole-http-response.cookie.php">
          Swoole\Http\Response::cookie &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="swoole-http-request.rawcontent.php">
          &laquo; Swoole\Http\Request::rawcontent        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.swoole.php'>Swoole</a></li>      </ul>
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
            <option value='en/class.swoole-http-response.php' selected="selected">English</option>
            <option value='de/class.swoole-http-response.php'>German</option>
            <option value='es/class.swoole-http-response.php'>Spanish</option>
            <option value='fr/class.swoole-http-response.php'>French</option>
            <option value='it/class.swoole-http-response.php'>Italian</option>
            <option value='ja/class.swoole-http-response.php'>Japanese</option>
            <option value='pt_BR/class.swoole-http-response.php'>Brazilian Portuguese</option>
            <option value='ru/class.swoole-http-response.php'>Russian</option>
            <option value='tr/class.swoole-http-response.php'>Turkish</option>
            <option value='uk/class.swoole-http-response.php'>Ukrainian</option>
            <option value='zh/class.swoole-http-response.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.swoole-http-response" class="reference">

 <h1 class="title">The Swoole\Http\Response class</h1>
 

 <div class="partintro"><p class="verinfo">(PECL swoole &gt;= 1.9.0)</p>


  <div class="section" id="swoole-http-response.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="swoole-http-response.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">Swoole\Http\Response</strong>
     </span>
     {</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="swoole-http-response.cookie.php" class="methodname">cookie</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$expires</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$domain</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$secure</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$httponly</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="swoole-http-response.destruct.php" class="methodname">__destruct</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="swoole-http-response.end.php" class="methodname">end</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$content</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="swoole-http-response.gzip.php" class="methodname">gzip</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$compress_level</code><span class="initializer"> = ?</span></span>): <span class="type">ReturnType</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="swoole-http-response.header.php" class="methodname">header</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$ucwords</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="swoole-http-response.initheader.php" class="methodname">initHeader</a></span>(): <span class="type">ReturnType</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="swoole-http-response.rawcookie.php" class="methodname">rawcookie</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$expires</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$domain</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$secure</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$httponly</code><span class="initializer"> = ?</span></span><br>): <span class="type">ReturnType</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="swoole-http-response.sendfile.php" class="methodname">sendfile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code><span class="initializer"> = ?</span></span>): <span class="type">ReturnType</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="swoole-http-response.status.php" class="methodname">status</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$http_code</code></span>): <span class="type">ReturnType</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="swoole-http-response.write.php" class="methodname">write</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$content</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>


  </div>

 </div>

 






































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="swoole-http-response.cookie.php">Swoole\Http\Response::cookie</a> — Set the cookies of the HTTP response.</li><li><a href="swoole-http-response.destruct.php">Swoole\Http\Response::__destruct</a> — Destruct the HTTP response.</li><li><a href="swoole-http-response.end.php">Swoole\Http\Response::end</a> — Send data for the HTTP request and finish the response.</li><li><a href="swoole-http-response.gzip.php">Swoole\Http\Response::gzip</a> — Enable the gzip of response content.</li><li><a href="swoole-http-response.header.php">Swoole\Http\Response::header</a> — Set the HTTP response headers.</li><li><a href="swoole-http-response.initheader.php">Swoole\Http\Response::initHeader</a> — Init the HTTP response header.</li><li><a href="swoole-http-response.rawcookie.php">Swoole\Http\Response::rawcookie</a> — Set the raw cookies to the HTTP response.</li><li><a href="swoole-http-response.sendfile.php">Swoole\Http\Response::sendfile</a> — Send file through the HTTP response.</li><li><a href="swoole-http-response.status.php">Swoole\Http\Response::status</a> — Set the status code of the HTTP response.</li><li><a href="swoole-http-response.write.php">Swoole\Http\Response::write</a> — Append HTTP body content to the HTTP response.</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/swoole/swoole.http.response.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.swoole-http-response%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.swoole-http-response&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.swoole-http-response.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.swoole.php">Swoole</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.swoole.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="swoole.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="swoole.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.swoole-funcs.php" title="Swoole Functions">Swoole Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-async.php" title="Swoole\Async">Swoole\Async</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-atomic.php" title="Swoole\Atomic">Swoole\Atomic</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-buffer.php" title="Swoole\Buffer">Swoole\Buffer</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-channel.php" title="Swoole\Channel">Swoole\Channel</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-client.php" title="Swoole\Client">Swoole\Client</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-connection-iterator.php" title="Swoole\Connection\Iterator">Swoole\Connection\Iterator</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-coroutine.php" title="Swoole\Coroutine">Swoole\Coroutine</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-coroutine-lock.php" title="Swoole\Coroutine\Lock">Swoole\Coroutine\Lock</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-event.php" title="Swoole\Event">Swoole\Event</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-exception.php" title="Swoole\Exception">Swoole\Exception</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-http-client.php" title="Swoole\Http\Client">Swoole\Http\Client</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-http-request.php" title="Swoole\Http\Request">Swoole\Http\Request</a>
                        </li>
                                                <li class="current">
                            <a href="class.swoole-http-response.php" title="Swoole\Http\Response">Swoole\Http\Response</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-http-server.php" title="Swoole\Http\Server">Swoole\Http\Server</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-lock.php" title="Swoole\Lock">Swoole\Lock</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-mmap.php" title="Swoole\Mmap">Swoole\Mmap</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-mysql.php" title="Swoole\MySQL">Swoole\MySQL</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-mysql-exception.php" title="Swoole\MySQL\Exception">Swoole\MySQL\Exception</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-process.php" title="Swoole\Process">Swoole\Process</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-redis-server.php" title="Swoole\Redis\Server">Swoole\Redis\Server</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-runtime.php" title="Swoole\Runtime">Swoole\Runtime</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-serialize.php" title="Swoole\Serialize">Swoole\Serialize</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-server.php" title="Swoole\Server">Swoole\Server</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-table.php" title="Swoole\Table">Swoole\Table</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-timer.php" title="Swoole\Timer">Swoole\Timer</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-websocket-frame.php" title="Swoole\WebSocket\Frame">Swoole\WebSocket\Frame</a>
                        </li>
                                                <li class="">
                            <a href="class.swoole-websocket-server.php" title="Swoole\WebSocket\Server">Swoole\WebSocket\Server</a>
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
