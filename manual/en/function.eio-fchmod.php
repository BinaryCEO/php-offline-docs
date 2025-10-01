<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: eio_fchmod - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.eio-fchmod.php">
 <link rel="shorturl" href="https://www.php.net/eio-fchmod">
 <link rel="alternate" href="https://www.php.net/eio-fchmod" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.eio.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.eio-fallocate.php">
 <link rel="next" href="https://www.php.net/manual/en/function.eio-fchown.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.eio-fchmod.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.eio-fchmod.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.eio-fchmod.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.eio-fchmod.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.eio-fchmod.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.eio-fchmod.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.eio-fchmod.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.eio-fchmod.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.eio-fchmod.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.eio-fchmod.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.eio-fchmod.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Change file permissions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: eio_fchmod - Manual" />
<meta name="twitter:description" content="Change file permissions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: eio_fchmod - Manual" />
<meta itemprop="description" content="Change file permissions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Change file permissions" />

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
        <a href="function.eio-fchown.php">
          eio_fchown &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.eio-fallocate.php">
          &laquo; eio_fallocate        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.eio.php'>Eio</a></li>      <li><a href='ref.eio.php'>Eio Functions</a></li>      </ul>
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
            <option value='en/function.eio-fchmod.php' selected="selected">English</option>
            <option value='de/function.eio-fchmod.php'>German</option>
            <option value='es/function.eio-fchmod.php'>Spanish</option>
            <option value='fr/function.eio-fchmod.php'>French</option>
            <option value='it/function.eio-fchmod.php'>Italian</option>
            <option value='ja/function.eio-fchmod.php'>Japanese</option>
            <option value='pt_BR/function.eio-fchmod.php'>Brazilian Portuguese</option>
            <option value='ru/function.eio-fchmod.php'>Russian</option>
            <option value='tr/function.eio-fchmod.php'>Turkish</option>
            <option value='uk/function.eio-fchmod.php'>Ukrainian</option>
            <option value='zh/function.eio-fchmod.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.eio-fchmod" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">eio_fchmod</h1>
  <p class="verinfo">(PECL eio &gt;= 0.0.1dev)</p><p class="refpurpose"><span class="refname">eio_fchmod</span> &mdash; <span class="dc-title">Change file permissions</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.eio-fchmod-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>eio_fchmod</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$fd</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$pri</code><span class="initializer"> = EIO_PRI_DEFAULT</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code><span class="initializer"> = NULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code><span class="initializer"> = NULL</span></span><br>): <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></div>

  <p class="para rdfs-comment">
  <span class="function"><strong>eio_fchmod()</strong></span> changes permissions for the file specified
  by <code class="parameter">fd</code> file descriptor.
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-function.eio-fchmod-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">fd</code></dt>
    <dd>
     <p class="para">
     Stream, Socket resource, or numeric file descriptor, e.g. returned by <span class="function"><a href="function.eio-open.php" class="function">eio_open()</a></span>.
     </p>
    </dd>
   
   
    <dt><code class="parameter">mode</code></dt>
    <dd>
     <p class="para">
     The new permissions. E.g. 0644.
     </p>
    </dd>
   
   
    <dt><code class="parameter">pri</code></dt>
    <dd>
    <p class="para">The request priority: <strong><code><a href="eio.constants.php#constant.eio-pri-default">EIO_PRI_DEFAULT</a></code></strong>, <strong><code><a href="eio.constants.php#constant.eio-pri-min">EIO_PRI_MIN</a></code></strong>, <strong><code><a href="eio.constants.php#constant.eio-pri-max">EIO_PRI_MAX</a></code></strong>, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
If <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> passed, <code class="parameter">pri</code> internally is set to
<strong><code><a href="eio.constants.php#constant.eio-pri-default">EIO_PRI_DEFAULT</a></code></strong>.
</p>

    </dd>
   
   
    <dt><code class="parameter">callback</code></dt>
    <dd>
     <p class="para">
<code class="parameter">callback</code> function is called when the request is done.
It should match the following prototype: <div class="example-contents"><div class="phpcode"><code><span style="color: #000000">void callback(mixed $data, int $result[, resource $req]);</span></code></div></div>

<dl>

<dt><code class="parameter">data</code></dt>
<dd><p class="para">is custom data passed to the request.</p></dd>


<dt><code class="parameter">result</code></dt>
<dd><p class="para">request-specific result value; basically, the value returned by corresponding
system call.</p></dd>


<dt><code class="parameter">req</code></dt>
<dd><p class="para">is optional request resource which can be used with functions like <span class="function"><a href="function.eio-get-last-error.php" class="function">eio_get_last_error()</a></span>.</p></dd>

</dl>
</p>

    </dd>
   
   
    <dt><code class="parameter">data</code></dt>
    <dd>
     <p class="para">
     Arbitrary variable passed to <code class="parameter">callback</code>.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.eio-fchmod-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>eio_fchmod()</strong></span> returns request resource on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.eio-fchmod-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.eio-fchown.php" class="function" rel="rdfs-seeAlso">eio_fchown()</a> - Change file ownership</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/eio/functions/eio-fchmod.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.eio-fchmod%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.eio-fchmod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.eio-fchmod.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.eio.php">Eio Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.eio-busy.php" title="eio_&#8203;busy">eio_&#8203;busy</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-cancel.php" title="eio_&#8203;cancel">eio_&#8203;cancel</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-chmod.php" title="eio_&#8203;chmod">eio_&#8203;chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-chown.php" title="eio_&#8203;chown">eio_&#8203;chown</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-close.php" title="eio_&#8203;close">eio_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-custom.php" title="eio_&#8203;custom">eio_&#8203;custom</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-dup2.php" title="eio_&#8203;dup2">eio_&#8203;dup2</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-event-loop.php" title="eio_&#8203;event_&#8203;loop">eio_&#8203;event_&#8203;loop</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-fallocate.php" title="eio_&#8203;fallocate">eio_&#8203;fallocate</a>
                        </li>
                                                <li class="current">
                            <a href="function.eio-fchmod.php" title="eio_&#8203;fchmod">eio_&#8203;fchmod</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-fchown.php" title="eio_&#8203;fchown">eio_&#8203;fchown</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-fdatasync.php" title="eio_&#8203;fdatasync">eio_&#8203;fdatasync</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-fstat.php" title="eio_&#8203;fstat">eio_&#8203;fstat</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-fstatvfs.php" title="eio_&#8203;fstatvfs">eio_&#8203;fstatvfs</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-fsync.php" title="eio_&#8203;fsync">eio_&#8203;fsync</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-ftruncate.php" title="eio_&#8203;ftruncate">eio_&#8203;ftruncate</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-futime.php" title="eio_&#8203;futime">eio_&#8203;futime</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-get-event-stream.php" title="eio_&#8203;get_&#8203;event_&#8203;stream">eio_&#8203;get_&#8203;event_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-get-last-error.php" title="eio_&#8203;get_&#8203;last_&#8203;error">eio_&#8203;get_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-grp.php" title="eio_&#8203;grp">eio_&#8203;grp</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-grp-add.php" title="eio_&#8203;grp_&#8203;add">eio_&#8203;grp_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-grp-cancel.php" title="eio_&#8203;grp_&#8203;cancel">eio_&#8203;grp_&#8203;cancel</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-grp-limit.php" title="eio_&#8203;grp_&#8203;limit">eio_&#8203;grp_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-init.php" title="eio_&#8203;init">eio_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-link.php" title="eio_&#8203;link">eio_&#8203;link</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-lstat.php" title="eio_&#8203;lstat">eio_&#8203;lstat</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-mkdir.php" title="eio_&#8203;mkdir">eio_&#8203;mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-mknod.php" title="eio_&#8203;mknod">eio_&#8203;mknod</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-nop.php" title="eio_&#8203;nop">eio_&#8203;nop</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-npending.php" title="eio_&#8203;npending">eio_&#8203;npending</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-nready.php" title="eio_&#8203;nready">eio_&#8203;nready</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-nreqs.php" title="eio_&#8203;nreqs">eio_&#8203;nreqs</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-nthreads.php" title="eio_&#8203;nthreads">eio_&#8203;nthreads</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-open.php" title="eio_&#8203;open">eio_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-poll.php" title="eio_&#8203;poll">eio_&#8203;poll</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-read.php" title="eio_&#8203;read">eio_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-readahead.php" title="eio_&#8203;readahead">eio_&#8203;readahead</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-readdir.php" title="eio_&#8203;readdir">eio_&#8203;readdir</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-readlink.php" title="eio_&#8203;readlink">eio_&#8203;readlink</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-realpath.php" title="eio_&#8203;realpath">eio_&#8203;realpath</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-rename.php" title="eio_&#8203;rename">eio_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-rmdir.php" title="eio_&#8203;rmdir">eio_&#8203;rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-seek.php" title="eio_&#8203;seek">eio_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-sendfile.php" title="eio_&#8203;sendfile">eio_&#8203;sendfile</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-set-max-idle.php" title="eio_&#8203;set_&#8203;max_&#8203;idle">eio_&#8203;set_&#8203;max_&#8203;idle</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-set-max-parallel.php" title="eio_&#8203;set_&#8203;max_&#8203;parallel">eio_&#8203;set_&#8203;max_&#8203;parallel</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-set-max-poll-reqs.php" title="eio_&#8203;set_&#8203;max_&#8203;poll_&#8203;reqs">eio_&#8203;set_&#8203;max_&#8203;poll_&#8203;reqs</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-set-max-poll-time.php" title="eio_&#8203;set_&#8203;max_&#8203;poll_&#8203;time">eio_&#8203;set_&#8203;max_&#8203;poll_&#8203;time</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-set-min-parallel.php" title="eio_&#8203;set_&#8203;min_&#8203;parallel">eio_&#8203;set_&#8203;min_&#8203;parallel</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-stat.php" title="eio_&#8203;stat">eio_&#8203;stat</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-statvfs.php" title="eio_&#8203;statvfs">eio_&#8203;statvfs</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-symlink.php" title="eio_&#8203;symlink">eio_&#8203;symlink</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-sync.php" title="eio_&#8203;sync">eio_&#8203;sync</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-sync-file-range.php" title="eio_&#8203;sync_&#8203;file_&#8203;range">eio_&#8203;sync_&#8203;file_&#8203;range</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-syncfs.php" title="eio_&#8203;syncfs">eio_&#8203;syncfs</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-truncate.php" title="eio_&#8203;truncate">eio_&#8203;truncate</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-unlink.php" title="eio_&#8203;unlink">eio_&#8203;unlink</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-utime.php" title="eio_&#8203;utime">eio_&#8203;utime</a>
                        </li>
                                                <li class="">
                            <a href="function.eio-write.php" title="eio_&#8203;write">eio_&#8203;write</a>
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
