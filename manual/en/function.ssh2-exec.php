<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ssh2_exec - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ssh2-exec.php">
 <link rel="shorturl" href="https://www.php.net/ssh2-exec">
 <link rel="alternate" href="https://www.php.net/ssh2-exec" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ssh2.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ssh2-disconnect.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ssh2-fetch-stream.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ssh2-exec.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ssh2-exec.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ssh2-exec.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ssh2-exec.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ssh2-exec.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ssh2-exec.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ssh2-exec.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ssh2-exec.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ssh2-exec.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ssh2-exec.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ssh2-exec.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Execute a command on a remote server" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ssh2_exec - Manual" />
<meta name="twitter:description" content="Execute a command on a remote server" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ssh2_exec - Manual" />
<meta itemprop="description" content="Execute a command on a remote server" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Execute a command on a remote server" />

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
        <a href="function.ssh2-fetch-stream.php">
          ssh2_fetch_stream &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ssh2-disconnect.php">
          &laquo; ssh2_disconnect        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ssh2.php'>SSH2</a></li>      <li><a href='ref.ssh2.php'>SSH2 Functions</a></li>      </ul>
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
            <option value='en/function.ssh2-exec.php' selected="selected">English</option>
            <option value='de/function.ssh2-exec.php'>German</option>
            <option value='es/function.ssh2-exec.php'>Spanish</option>
            <option value='fr/function.ssh2-exec.php'>French</option>
            <option value='it/function.ssh2-exec.php'>Italian</option>
            <option value='ja/function.ssh2-exec.php'>Japanese</option>
            <option value='pt_BR/function.ssh2-exec.php'>Brazilian Portuguese</option>
            <option value='ru/function.ssh2-exec.php'>Russian</option>
            <option value='tr/function.ssh2-exec.php'>Turkish</option>
            <option value='uk/function.ssh2-exec.php'>Ukrainian</option>
            <option value='zh/function.ssh2-exec.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ssh2-exec" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ssh2_exec</h1>
  <p class="verinfo">(PECL ssh2 &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">ssh2_exec</span> &mdash; <span class="dc-title">Execute a command on a remote server</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ssh2-exec-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ssh2_exec</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$session</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$command</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pty</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$env</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code><span class="initializer"> = 80</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code><span class="initializer"> = 25</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width_height_type</code><span class="initializer"> = SSH2_TERM_UNIT_CHARS</span></span><br>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Execute a command at the remote end and allocate a channel for it.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ssh2-exec-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">session</code></dt>
     <dd>
      <p class="para">
       An SSH connection link identifier, obtained from a call to
       <span class="function"><a href="function.ssh2-connect.php" class="function">ssh2_connect()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">command</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt><code class="parameter">pty</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt><code class="parameter">env</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">env</code> may be passed as an associative array of
       name/value pairs to set in the target environment.
      </p>
     </dd>
    
    
     <dt><code class="parameter">width</code></dt>
     <dd>
      <p class="para">
       Width of the virtual terminal.
      </p>
     </dd>
    
    
     <dt><code class="parameter">height</code></dt>
     <dd>
      <p class="para">
       Height of the virtual terminal.
      </p>
     </dd>
    
    
     <dt><code class="parameter">width_height_type</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">width_height_type</code> should be one of
       <strong><code><a href="ssh2.constants.php#constant.ssh2-term-unit-chars">SSH2_TERM_UNIT_CHARS</a></code></strong> or
       <strong><code><a href="ssh2.constants.php#constant.ssh2-term-unit-pixels">SSH2_TERM_UNIT_PIXELS</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ssh2-exec-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a stream on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ssh2-exec-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4818">
    <p><strong>Example #1 Executing a command</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$connection </span><span style="color: #007700">= </span><span style="color: #0000BB">ssh2_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'shell.example.com'</span><span style="color: #007700">, </span><span style="color: #0000BB">22</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ssh2_auth_password</span><span style="color: #007700">(</span><span style="color: #0000BB">$connection</span><span style="color: #007700">, </span><span style="color: #DD0000">'username'</span><span style="color: #007700">, </span><span style="color: #DD0000">'password'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stream </span><span style="color: #007700">= </span><span style="color: #0000BB">ssh2_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$connection</span><span style="color: #007700">, </span><span style="color: #DD0000">'/usr/local/bin/php -i'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ssh2-exec-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ssh2-connect.php" class="function" rel="rdfs-seeAlso">ssh2_connect()</a> - Connect to an SSH server</span></li>
    <li><span class="function"><a href="function.ssh2-shell.php" class="function" rel="rdfs-seeAlso">ssh2_shell()</a> - Request an interactive shell</span></li>
    <li><span class="function"><a href="function.ssh2-tunnel.php" class="function" rel="rdfs-seeAlso">ssh2_tunnel()</a> - Open a tunnel through a remote server</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ssh2/functions/ssh2-exec.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ssh2-exec%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ssh2-exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ssh2-exec.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="87783">  <div class="votes">
    <div id="Vu87783">
    <a href="/manual/vote-note.php?id=87783&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87783">
    <a href="/manual/vote-note.php?id=87783&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87783" title="76% like this...">
    11
    </div>
  </div>
  <a href="#87783" class="name">
  <strong class="user"><em>magicaltux at php dot net</em></strong></a><a class="genanchor" href="#87783"> &para;</a><div class="date" title="2008-12-21 04:41"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87783">
<div class="phpcode"><code><span class="html">The "pty" parameter is not documented.<br /><br />You should pass a pty emulation name ("vt102", "ansi", etc...) if you want to emulate a pty, or NULL if you don't.<br /><br />Passing false will convert false to a string, and will allocate a "" terminal.</span></code></div>
  </div>
 </div>
  <div class="note" id="99089">  <div class="votes">
    <div id="Vu99089">
    <a href="/manual/vote-note.php?id=99089&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99089">
    <a href="/manual/vote-note.php?id=99089&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99089" title="60% like this...">
    17
    </div>
  </div>
  <a href="#99089" class="name">
  <strong class="user"><em>christopher dot millward at gmail dot com</em></strong></a><a class="genanchor" href="#99089"> &para;</a><div class="date" title="2010-07-26 11:15"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99089">
<div class="phpcode"><code><span class="html">There doesn't appear to be a way to get data from BOTH stderr and stdout streams simultaneously, or at least I've yet to find one.<br /><br />The following code *should* get the error message written to stderr, but if the call to stream_get_contents() for stdout is run first, the subsequent call for stderr won't return anything.  <br /><br />If the order of the statements is reversed, the call for stderr will return any errors and call for stdout will return nothing<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Run a command that will probably write to stderr (unless you have a folder named /hom)<br /></span><span class="default">$stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">"cd /hom"</span><span class="keyword">);<br /></span><span class="default">$errorStream </span><span class="keyword">= </span><span class="default">ssh2_fetch_stream</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">SSH2_STREAM_STDERR</span><span class="keyword">);<br /><br /></span><span class="comment">// Enable blocking for both streams<br /></span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$errorStream</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">// Whichever of the two below commands is listed first will receive its appropriate output.  The second command receives nothing<br /></span><span class="keyword">echo </span><span class="string">"Output: " </span><span class="keyword">. </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);<br />echo </span><span class="string">"Error: " </span><span class="keyword">. </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$errorStream</span><span class="keyword">);<br /><br /></span><span class="comment">// Close the streams        <br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$errorStream</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />My initial suspicion is that either a) I've done something wrong  or b) the blocking nature of both streams means that by the time first stream has received data and returned, the buffer for the second stream has already emptied.<br /><br />I've done preliminary tests with blocking disabled, but haven't had any luck there either.</span></code></div>
  </div>
 </div>
  <div class="note" id="125100">  <div class="votes">
    <div id="Vu125100">
    <a href="/manual/vote-note.php?id=125100&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125100">
    <a href="/manual/vote-note.php?id=125100&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125100" title="66% like this...">
    7
    </div>
  </div>
  <a href="#125100" class="name">
  <strong class="user"><em>Rainer Perske</em></strong></a><a class="genanchor" href="#125100"> &para;</a><div class="date" title="2020-06-09 02:50"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125100">
<div class="phpcode"><code><span class="html">The following function can be used to read both stdout and stderr even if both streams contain gigabytes of data. It solves most problems mentioned in other comments, like blocking, like further using the existing connection etc.<br /><br />  function ssh2_run($ssh2,$cmd,&amp;$out=null,&amp;$err=null){<br />    $result=false;<br />    $out='';<br />    $err='';<br />    $sshout=ssh2_exec($ssh2,$cmd);<br />    if($sshout){<br />      $ssherr=ssh2_fetch_stream($sshout,SSH2_STREAM_STDERR);<br />      if($ssherr){<br />        # we cannot use stream_select() with SSH2 streams<br />        # so use non-blocking stream_get_contents() and usleep()<br />        if(stream_set_blocking($sshout,false) and<br />           stream_set_blocking($ssherr,false)<br />        ){<br />          $result=true;<br />          # loop until end of output on both stdout and stderr<br />          $wait=0;<br />          while(!feof($sshout) or !feof($ssherr)){<br />            # sleep only after not reading any data<br />            if($wait)usleep($wait);<br />            $wait=50000; # 1/20 second<br />            if(!feof($sshout)){<br />              $one=stream_get_contents($sshout);<br />              if($one===false){ $result=false; break; }<br />              if($one!=''){ $out.=$one; $wait=0; }<br />            }<br />            if(!feof($ssherr)){<br />              $one=stream_get_contents($ssherr);<br />              if($one===false){ $result=false; break; }<br />              if($one!=''){ $err.=$one; $wait=0; }<br />            }<br />          }<br />        }<br />        # we need to wait for end of command<br />        stream_set_blocking($sshout,true);<br />        stream_set_blocking($ssherr,true);<br />        # these will not get any output<br />        stream_get_contents($sshout);<br />        stream_get_contents($ssherr);<br />        fclose($ssherr);<br />      }<br />      fclose($sshout);<br />    }<br />    return $result;<br />  }</span></code></div>
  </div>
 </div>
  <div class="note" id="120268">  <div class="votes">
    <div id="Vu120268">
    <a href="/manual/vote-note.php?id=120268&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120268">
    <a href="/manual/vote-note.php?id=120268&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120268" title="69% like this...">
    5
    </div>
  </div>
  <a href="#120268" class="name">
  <strong class="user"><em>edoceo at gmail dot com</em></strong></a><a class="genanchor" href="#120268"> &para;</a><div class="date" title="2016-12-03 08:46"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120268">
<div class="phpcode"><code><span class="html">Here's what I use for doing ssh2_exec for long running scripts, expanding on other examples.  It waits for a timeout and checks if both streams are finished.  Does not use blocking and it gets data from both STDOUT and STDERR.<br /><br /><span class="default">&lt;?php<br />$stdout </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$ssh</span><span class="keyword">, </span><span class="default">$cmd</span><span class="keyword">);<br /></span><span class="default">$stderr </span><span class="keyword">= </span><span class="default">ssh2_fetch_stream</span><span class="keyword">(</span><span class="default">$stdout</span><span class="keyword">, </span><span class="default">SSH2_STREAM_STDERR</span><span class="keyword">);<br />if (!empty(</span><span class="default">$stdout</span><span class="keyword">)) {<br /><br />    </span><span class="default">$t0 </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />    </span><span class="default">$err_buf </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="default">$out_buf </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />    </span><span class="comment">// Try for 30s<br />    </span><span class="keyword">do {<br /><br />        </span><span class="default">$err_buf</span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$stderr</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);<br />        </span><span class="default">$out_buf</span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$stdout</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);<br /><br />        </span><span class="default">$done </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        if (</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$stderr</span><span class="keyword">)) {<br />            </span><span class="default">$done</span><span class="keyword">++;<br />        }<br />        if (</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$stdout</span><span class="keyword">)) {<br />            </span><span class="default">$done</span><span class="keyword">++;<br />        }<br /><br />        </span><span class="default">$t1 </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />        </span><span class="default">$span </span><span class="keyword">= </span><span class="default">$t1 </span><span class="keyword">- </span><span class="default">$t0</span><span class="keyword">;<br /><br />        </span><span class="comment">// Info note<br />        </span><span class="keyword">echo </span><span class="string">"while ((</span><span class="default">$tD</span><span class="string"> &lt; 20) &amp;&amp; (</span><span class="default">$done</span><span class="string"> &lt; 2));\n"</span><span class="keyword">;<br /><br />        </span><span class="comment">// Wait here so we don't hammer in this loop<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /><br />    } while ((</span><span class="default">$span </span><span class="keyword">&lt; </span><span class="default">30</span><span class="keyword">) &amp;&amp; (</span><span class="default">$done </span><span class="keyword">&lt; </span><span class="default">2</span><span class="keyword">));<br /><br />    echo </span><span class="string">"STDERR:\n</span><span class="default">$err_buf</span><span class="string">\n"</span><span class="keyword">;<br />    echo </span><span class="string">"STDOUT:\n</span><span class="default">$out_buf</span><span class="string">\n"</span><span class="keyword">;<br /><br />    echo </span><span class="string">"Done\n"</span><span class="keyword">;<br /><br />} else {<br />    echo </span><span class="string">"Failed to Shell\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Adjust your timeout as necessary.</span></code></div>
  </div>
 </div>
  <div class="note" id="87745">  <div class="votes">
    <div id="Vu87745">
    <a href="/manual/vote-note.php?id=87745&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87745">
    <a href="/manual/vote-note.php?id=87745&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87745" title="66% like this...">
    6
    </div>
  </div>
  <a href="#87745" class="name">
  <strong class="user"><em>jaimie at seoegghead dot com</em></strong></a><a class="genanchor" href="#87745"> &para;</a><div class="date" title="2008-12-18 08:07"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87745">
<div class="phpcode"><code><span class="html">I believe most of the problem that people are having here is that there is a misconception about what blocking *really* means.
<br />
<br />Blocking means a read from the *stream* will wait until there is data.  Not necessarily all the data from the application -- but *some*.  So it won't help you at all if you're executing a command that doesn't write to stdout, or writes a whole lot of data.
<br />
<br />So there are 2 problems:
<br />
<br />1. If you need to know that a silent program is done via ssh2_exec, you'll need to signal it to yourself.  ssh2_exec will *not* block execution until the command is done executing.  And 2 consecutive ssh2_execs may execute asynchronously.  You could also log into a shell via ssh2_shell and parse up to the next prompt -- but that's overkill.  You can also do this by adding on some sort of sentinel at the end of your command, such as echo "@," and then block on reads until you see a "@."  Ensure "@" won't appear in the output, or escape the output via some encoding mechanism if you can't do that.
<br />
<br />2. If the program takes awhile, you have the same problem.  You need to read until you're done.  So you need a sentinel value like the above.
<br />
<br />3. Sleep() is just a bad idea here.  Commands rarely take the same amount of time to execute a command twice.  It may be OK if you're doing *one* thing and can just wait 5 seconds.  But that's not cool if it's something you're doing in a loop.
<br />
<br />Hope this helps!</span></code></div>
  </div>
 </div>
  <div class="note" id="56564">  <div class="votes">
    <div id="Vu56564">
    <a href="/manual/vote-note.php?id=56564&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56564">
    <a href="/manual/vote-note.php?id=56564&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56564" title="70% like this...">
    4
    </div>
  </div>
  <a href="#56564" class="name">
  <strong class="user"><em>gakksimian at yahoo dot com</em></strong></a><a class="genanchor" href="#56564"> &para;</a><div class="date" title="2005-09-07 10:15"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56564">
<div class="phpcode"><code><span class="html">Executing remote Windows commands...<br />After some hair pulling, I thought I'd suggest a couple things that might help others:<br /><br />1. Use 'ssh2_fetch_stream' to open a stderr stream according to the manual.<br />2. Windows shell commands require 'cmd /C [command]' to execute.  (I had forgotten this)<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// code fragment<br />    </span><span class="default">$stdout_stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'cmd /C dir'</span><span class="keyword">);<br />    </span><span class="default">$stderr_stream </span><span class="keyword">= </span><span class="default">ssh2_fetch_stream</span><span class="keyword">(</span><span class="default">$stdout_stream</span><span class="keyword">, </span><span class="default">SSH2_STREAM_STDERR</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I didn't realize the need for the 'cmd /C' until I saw the stderr response 'dir: not found'.</span></code></div>
  </div>
 </div>
  <div class="note" id="74527">  <div class="votes">
    <div id="Vu74527">
    <a href="/manual/vote-note.php?id=74527&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74527">
    <a href="/manual/vote-note.php?id=74527&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74527" title="60% like this...">
    1
    </div>
  </div>
  <a href="#74527" class="name">
  <strong class="user"><em>Betsy Gamrat</em></strong></a><a class="genanchor" href="#74527"> &para;</a><div class="date" title="2007-04-15 07:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74527">
<div class="phpcode"><code><span class="html">It is also good to use register_shutdown_function to shred the keys after this runs.</span></code></div>
  </div>
 </div>
  <div class="note" id="79643">  <div class="votes">
    <div id="Vu79643">
    <a href="/manual/vote-note.php?id=79643&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79643">
    <a href="/manual/vote-note.php?id=79643&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79643" title="57% like this...">
    1
    </div>
  </div>
  <a href="#79643" class="name">
  <strong class="user"><em>lko at netuse dot de</em></strong></a><a class="genanchor" href="#79643"> &para;</a><div class="date" title="2007-12-06 05:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79643">
<div class="phpcode"><code><span class="html">if you are using exec function, and have problems with a output &gt; 1000 lines
<br />you should use  
<br />
<br /><span class="default">&lt;?php
<br />                stream_set_blocking</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />                while(</span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">)) {
<br />                        </span><span class="default">flush</span><span class="keyword">();
<br />                        echo </span><span class="default">$line</span><span class="keyword">.</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;
<br />                }
<br /></span><span class="default">?&gt;
<br /></span>
<br />except
<br />
<br /><span class="default">&lt;?php
<br />                stream_set_blocking</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />               echo </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128909">  <div class="votes">
    <div id="Vu128909">
    <a href="/manual/vote-note.php?id=128909&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128909">
    <a href="/manual/vote-note.php?id=128909&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128909" title="100% like this...">
    2
    </div>
  </div>
  <a href="#128909" class="name">
  <strong class="user"><em>mlocati at gmail dot com</em></strong></a><a class="genanchor" href="#128909"> &para;</a><div class="date" title="2023-09-21 03:21"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128909">
<div class="phpcode"><code><span class="html">Since version 0.13 of the SSH2 extension, it's possible to retrieve the command exit status with stream_get_meta_data().<br /><br />For example:<br /><br /><span class="default">&lt;?php<br />$channel </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="default">$command</span><span class="keyword">);<br /><br /></span><span class="default">$metadata </span><span class="keyword">= </span><span class="default">stream_get_meta_data</span><span class="keyword">(</span><span class="default">$channel</span><span class="keyword">);<br /><br /></span><span class="default">$exitCode </span><span class="keyword">= </span><span class="default">$metadata</span><span class="keyword">[</span><span class="string">'exit_status'</span><span class="keyword">];<br /><br /></span><span class="default">?&gt;<br /></span><br />Retrieving the exit code is very helpful, since usually, commands return 0 in case of success, and other values in case of errors.</span></code></div>
  </div>
 </div>
  <div class="note" id="53691">  <div class="votes">
    <div id="Vu53691">
    <a href="/manual/vote-note.php?id=53691&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53691">
    <a href="/manual/vote-note.php?id=53691&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53691" title="52% like this...">
    1
    </div>
  </div>
  <a href="#53691" class="name">
  <strong class="user"><em>yairl at savion dot huji dot ac dot il</em></strong></a><a class="genanchor" href="#53691"> &para;</a><div class="date" title="2005-06-09 05:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53691">
<div class="phpcode"><code><span class="html">If you want to run many exec orders throught ssh2 in the same process using the same variable $stream for exemple and to read the output for each order, you must close the stream after each order else you will not be able to read the next order output.
<br />
<br /><span class="default">&lt;?php
<br /> $stream</span><span class="keyword">=</span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">,</span><span class="string">"/usr/bin/ls ."</span><span class="keyword">);
<br />    </span><span class="default">stream_set_blocking</span><span class="keyword">( </span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">);
<br />    </span><span class="default">$cmd</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">,</span><span class="default">4096</span><span class="keyword">);
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);
<br />
<br />if(</span><span class="default">ereg</span><span class="keyword">(</span><span class="string">"public_html"</span><span class="keyword">,</span><span class="default">$cmd</span><span class="keyword">)){
<br /> </span><span class="comment">// ...........................................
<br /></span><span class="keyword">}
<br />
<br /> </span><span class="default">$stream</span><span class="keyword">=</span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">,</span><span class="string">"/usr/bin/ls public_html"</span><span class="keyword">);
<br />    </span><span class="default">stream_set_blocking</span><span class="keyword">( </span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">);
<br />    </span><span class="default">$cmd</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">,</span><span class="default">4096</span><span class="keyword">);
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);
<br />
<br />if(</span><span class="default">ereg</span><span class="keyword">(</span><span class="string">"images"</span><span class="keyword">,</span><span class="default">$cmd</span><span class="keyword">)){
<br /> </span><span class="comment">// ..........................................
<br /></span><span class="keyword">}
<br />
<br /> 
<br /></span><span class="default">$stream</span><span class="keyword">=</span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">,</span><span class="string">"/usr/bin/ls public_html/images"</span><span class="keyword">);
<br />    </span><span class="default">stream_set_blocking</span><span class="keyword">( </span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">);
<br />    </span><span class="default">$cmd</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">,</span><span class="default">4096</span><span class="keyword">);
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);
<br />
<br />if(</span><span class="default">ereg</span><span class="keyword">(</span><span class="string">"blabla"</span><span class="keyword">,</span><span class="default">$cmd</span><span class="keyword">)){
<br /> </span><span class="comment">// ..........................................
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59324">  <div class="votes">
    <div id="Vu59324">
    <a href="/manual/vote-note.php?id=59324&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59324">
    <a href="/manual/vote-note.php?id=59324&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59324" title="52% like this...">
    1
    </div>
  </div>
  <a href="#59324" class="name">
  <strong class="user"><em>tabber dot watts at gmail dot com</em></strong></a><a class="genanchor" href="#59324"> &para;</a><div class="date" title="2005-12-02 03:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59324">
<div class="phpcode"><code><span class="html">This is the best way I found to automatically run multiple commands or commands that might take longer then expected.  NOTE: this assumes that no where in the output is there the text '[end]' otherwise the function will end prematurely.  Hope this helps people.
<br />
<br /><span class="default">&lt;?php
<br />$ip </span><span class="keyword">= </span><span class="string">'ip_address'</span><span class="keyword">;
<br /></span><span class="default">$user </span><span class="keyword">= </span><span class="string">'username'</span><span class="keyword">;
<br /></span><span class="default">$pass </span><span class="keyword">= </span><span class="string">'password'</span><span class="keyword">;
<br />
<br /></span><span class="default">$connection </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">);
<br /></span><span class="default">ssh2_auth_password</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">$user</span><span class="keyword">,</span><span class="default">$pass</span><span class="keyword">);
<br /></span><span class="default">$shell </span><span class="keyword">= </span><span class="default">ssh2_shell</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="string">"bash"</span><span class="keyword">);
<br />
<br /></span><span class="comment">//Trick is in the start and end echos which can be executed in both *nix and windows systems. 
<br />//Do add 'cmd /C' to the start of $cmd if on a windows system.
<br /></span><span class="default">$cmd </span><span class="keyword">= </span><span class="string">"echo '[start]';your commands here;echo '[end]'"</span><span class="keyword">;
<br /></span><span class="default">$output </span><span class="keyword">= </span><span class="default">user_exec</span><span class="keyword">(</span><span class="default">$shell</span><span class="keyword">,</span><span class="default">$cmd</span><span class="keyword">);
<br />
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$shell</span><span class="keyword">);
<br />
<br />function </span><span class="default">user_exec</span><span class="keyword">(</span><span class="default">$shell</span><span class="keyword">,</span><span class="default">$cmd</span><span class="keyword">) {
<br />  </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$shell</span><span class="keyword">,</span><span class="default">$cmd </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">);
<br />  </span><span class="default">$output </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />  </span><span class="default">$start </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />  </span><span class="default">$start_time </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();
<br />  </span><span class="default">$max_time </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">; </span><span class="comment">//time in seconds
<br />  </span><span class="keyword">while(((</span><span class="default">time</span><span class="keyword">()-</span><span class="default">$start_time</span><span class="keyword">) &lt; </span><span class="default">$max_time</span><span class="keyword">)) {
<br />    </span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$shell</span><span class="keyword">);
<br />    if(!</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">,</span><span class="default">$cmd</span><span class="keyword">)) {
<br />      if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\[start\]/'</span><span class="keyword">,</span><span class="default">$line</span><span class="keyword">)) {
<br />        </span><span class="default">$start </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />      }elseif(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\[end\]/'</span><span class="keyword">,</span><span class="default">$line</span><span class="keyword">)) {
<br />        return </span><span class="default">$output</span><span class="keyword">;
<br />      }elseif(</span><span class="default">$start</span><span class="keyword">){
<br />        </span><span class="default">$output</span><span class="keyword">[] = </span><span class="default">$line</span><span class="keyword">;
<br />      }
<br />    }
<br />  }
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />[EDIT BY danbrown AT php DOT net: Contains a bugfix supplied by (jschwepp AT gmail DOT com) on 17-FEB-2010 to fix a typo in a function name.]</span></code></div>
  </div>
 </div>
  <div class="note" id="124818">  <div class="votes">
    <div id="Vu124818">
    <a href="/manual/vote-note.php?id=124818&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124818">
    <a href="/manual/vote-note.php?id=124818&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124818" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124818" class="name">
  <strong class="user"><em>dosentnd at gmail dot com</em></strong></a><a class="genanchor" href="#124818"> &para;</a><div class="date" title="2020-03-12 08:39"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124818">
<div class="phpcode"><code><span class="html">Running multiple commands shows this warning and second(and any next) command wont be executed:<br />- PHP Warning:  ssh2_exec(): Unable to request a channel from remote host in ...<br /><br />Solution with fclose($stream) does not work, but this is simple solution which works for me:<br /><br /><span class="default">&lt;?php<br /><br />$connection </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="string">'SOME SSH IP ADDRESS'</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">);<br /></span><span class="default">ssh2_auth_password</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'username'</span><span class="keyword">, </span><span class="string">'passwortd'</span><span class="keyword">);<br /><br /></span><span class="comment">//those commands are for some HUAWEI enterprise routers<br /><br />    </span><span class="default">$stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">( </span><span class="default">$connection</span><span class="keyword">, </span><span class="string">"screen-length 0 temporary\ndisplay isis name-table" </span><span class="keyword">);<br />    </span><span class="default">stream_set_blocking</span><span class="keyword">( </span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">);<br />    </span><span class="default">$stream_out </span><span class="keyword">= </span><span class="default">ssh2_fetch_stream</span><span class="keyword">( </span><span class="default">$stream</span><span class="keyword">, </span><span class="default">SSH2_STREAM_STDIO </span><span class="keyword">);<br />    echo </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$stream_out</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />first command is: screen-length 0 temporary<br />second command is: display isis name-table<br />which is executed with \n in the same line.<br />You have to separete outputs of those commands later.<br /><br />Looks like ssh2_exec allocates exec stream in session you are connected in, and for freeing it , you have to ssh2_disconnect. <br />Usualy you are ok to ssh2_exec one command then disconnect, then connect and ssh2_exec next command. This is how some other php libraries works as I have seen. But sometimes some variables are sesion dependent, and when you disconnect variables resets.</span></code></div>
  </div>
 </div>
  <div class="note" id="73340">  <div class="votes">
    <div id="Vu73340">
    <a href="/manual/vote-note.php?id=73340&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73340">
    <a href="/manual/vote-note.php?id=73340&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73340" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73340" class="name">
  <strong class="user"><em>Betsy Gamrat</em></strong></a><a class="genanchor" href="#73340"> &para;</a><div class="date" title="2007-02-18 12:00"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73340">
<div class="phpcode"><code><span class="html">If the ssh2_exec takes awhile to run, and you need a handshake, you can use a file.  In this case, $flag names a handshake file that is written when the ssh script finishes.
<br />
<br /><span class="default">&lt;?php
<br />                $stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="default">$command </span><span class="keyword">. </span><span class="string">" </span><span class="default">$public_key</span><span class="string"> </span><span class="default">$private_key</span><span class="string">;"</span><span class="keyword">);
<br />                </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />                while (!</span><span class="default">file_exists </span><span class="keyword">(</span><span class="default">$flag</span><span class="keyword">) &amp;&amp; (</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">MAX_TIME</span><span class="keyword">))
<br />                {
<br />                        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);
<br />                        </span><span class="default">$i</span><span class="keyword">++;
<br />                }
<br />                </span><span class="default">$ret_val</span><span class="keyword">=(</span><span class="default">$stream</span><span class="keyword">!=</span><span class="default">FALSE</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This is an extract out of the bash script that is running.  Be sure to allow the webserver permission to read the file that the script writes.
<br />
<br />echo 0 &gt; $OUTFILE
<br />chmod 666 $OUTFILE
<br />
<br />One other note:  you can put more than one command in by separating them with ';' (semicolons).</span></code></div>
  </div>
 </div>
  <div class="note" id="101304">  <div class="votes">
    <div id="Vu101304">
    <a href="/manual/vote-note.php?id=101304&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101304">
    <a href="/manual/vote-note.php?id=101304&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101304" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#101304" class="name">
  <strong class="user"><em>Jim</em></strong></a><a class="genanchor" href="#101304"> &para;</a><div class="date" title="2010-12-08 09:22"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101304">
<div class="phpcode"><code><span class="html">It is important to note that this will not work ~all~ hosts that allow SFTP. We deny shell access, but allow SFTP using the sftp-internal subsystem.
<br />
<br />When attempting to use ssh2_exec() with this configuration, and stream_set_blocking set to true, the script will hang indefinitely. When stream_set_blocking is set to false, nothing will be returned.
<br />
<br />Even if you can SFTP files, be sure to check with your host to see if you have shell access.</span></code></div>
  </div>
 </div>
  <div class="note" id="111366">  <div class="votes">
    <div id="Vu111366">
    <a href="/manual/vote-note.php?id=111366&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111366">
    <a href="/manual/vote-note.php?id=111366&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111366" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#111366" class="name">
  <strong class="user"><em>noreply at voicemeup dot com</em></strong></a><a class="genanchor" href="#111366"> &para;</a><div class="date" title="2013-02-12 04:12"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111366">
<div class="phpcode"><code><span class="html">*** IMPORTANT ***<br />If you are having issues getting STDERR on PHP 5.2.X, make sure to update to 5.2.17 and latest ssh2 extension from PECL.</span></code></div>
  </div>
 </div>
  <div class="note" id="97610">  <div class="votes">
    <div id="Vu97610">
    <a href="/manual/vote-note.php?id=97610&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97610">
    <a href="/manual/vote-note.php?id=97610&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97610" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#97610" class="name">
  <strong class="user"><em>gwinans at gmail dot com</em></strong></a><a class="genanchor" href="#97610"> &para;</a><div class="date" title="2010-04-27 10:40"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97610">
<div class="phpcode"><code><span class="html">Oddly enough, I've noticed if I attempt to execute anything nothing happens. Now, I don't mean "No content is returned!".. I mean, "The command I told it to execute didn't execute!".
<br />
<br />Unless the following pattern is followed:
<br />
<br /><span class="default">&lt;?php
<br />$stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">"touch ~/some_fake_file"</span><span class="keyword">, </span><span class="string">'xterm'</span><span class="keyword">);
<br /></span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Nowhere in the manual does it imply that stream_get_contents is required for the actual execution to take place, but in this case.. it seems that way. So, if you're having trouble getting commands to execute, try using stream_get_contents().</span></code></div>
  </div>
 </div>
  <div class="note" id="73808">  <div class="votes">
    <div id="Vu73808">
    <a href="/manual/vote-note.php?id=73808&amp;page=function.ssh2-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73808">
    <a href="/manual/vote-note.php?id=73808&amp;page=function.ssh2-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73808" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#73808" class="name">
  <strong class="user"><em>Jon-Eirik Pettersen</em></strong></a><a class="genanchor" href="#73808"> &para;</a><div class="date" title="2007-03-11 04:33"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73808">
<div class="phpcode"><code><span class="html">The command  may not finish before the function return if the stream is not set to blocking mode. You may have to set the stream to blocking mode in order to get any output from the command.<br /><br /><span class="default">&lt;?php<br />  </span><span class="comment">// [Open connection]<br />  // ...<br /><br />  </span><span class="default">$stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'ps ax'</span><span class="keyword">);<br />  </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />  <br />  </span><span class="comment">// The command may not finish properly if the stream is not read to end<br />  </span><span class="default">$output </span><span class="keyword">= </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);<br />  <br />  </span><span class="comment">// ...<br />  // [Close stream and connection]<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ssh2-exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ssh2-exec.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ssh2.php">SSH2 Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ssh2-auth-agent.php" title="ssh2_&#8203;auth_&#8203;agent">ssh2_&#8203;auth_&#8203;agent</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-auth-hostbased-file.php" title="ssh2_&#8203;auth_&#8203;hostbased_&#8203;file">ssh2_&#8203;auth_&#8203;hostbased_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-auth-none.php" title="ssh2_&#8203;auth_&#8203;none">ssh2_&#8203;auth_&#8203;none</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-auth-password.php" title="ssh2_&#8203;auth_&#8203;password">ssh2_&#8203;auth_&#8203;password</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-auth-pubkey-file.php" title="ssh2_&#8203;auth_&#8203;pubkey_&#8203;file">ssh2_&#8203;auth_&#8203;pubkey_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-connect.php" title="ssh2_&#8203;connect">ssh2_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-disconnect.php" title="ssh2_&#8203;disconnect">ssh2_&#8203;disconnect</a>
                        </li>
                                                <li class="current">
                            <a href="function.ssh2-exec.php" title="ssh2_&#8203;exec">ssh2_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-fetch-stream.php" title="ssh2_&#8203;fetch_&#8203;stream">ssh2_&#8203;fetch_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-fingerprint.php" title="ssh2_&#8203;fingerprint">ssh2_&#8203;fingerprint</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-forward-accept.php" title="ssh2_&#8203;forward_&#8203;accept">ssh2_&#8203;forward_&#8203;accept</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-forward-listen.php" title="ssh2_&#8203;forward_&#8203;listen">ssh2_&#8203;forward_&#8203;listen</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-methods-negotiated.php" title="ssh2_&#8203;methods_&#8203;negotiated">ssh2_&#8203;methods_&#8203;negotiated</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-poll.php" title="ssh2_&#8203;poll">ssh2_&#8203;poll</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-publickey-add.php" title="ssh2_&#8203;publickey_&#8203;add">ssh2_&#8203;publickey_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-publickey-init.php" title="ssh2_&#8203;publickey_&#8203;init">ssh2_&#8203;publickey_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-publickey-list.php" title="ssh2_&#8203;publickey_&#8203;list">ssh2_&#8203;publickey_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-publickey-remove.php" title="ssh2_&#8203;publickey_&#8203;remove">ssh2_&#8203;publickey_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-scp-recv.php" title="ssh2_&#8203;scp_&#8203;recv">ssh2_&#8203;scp_&#8203;recv</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-scp-send.php" title="ssh2_&#8203;scp_&#8203;send">ssh2_&#8203;scp_&#8203;send</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-send-eof.php" title="ssh2_&#8203;send_&#8203;eof">ssh2_&#8203;send_&#8203;eof</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp.php" title="ssh2_&#8203;sftp">ssh2_&#8203;sftp</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-chmod.php" title="ssh2_&#8203;sftp_&#8203;chmod">ssh2_&#8203;sftp_&#8203;chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-lstat.php" title="ssh2_&#8203;sftp_&#8203;lstat">ssh2_&#8203;sftp_&#8203;lstat</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-mkdir.php" title="ssh2_&#8203;sftp_&#8203;mkdir">ssh2_&#8203;sftp_&#8203;mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-readlink.php" title="ssh2_&#8203;sftp_&#8203;readlink">ssh2_&#8203;sftp_&#8203;readlink</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-realpath.php" title="ssh2_&#8203;sftp_&#8203;realpath">ssh2_&#8203;sftp_&#8203;realpath</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-rename.php" title="ssh2_&#8203;sftp_&#8203;rename">ssh2_&#8203;sftp_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-rmdir.php" title="ssh2_&#8203;sftp_&#8203;rmdir">ssh2_&#8203;sftp_&#8203;rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-stat.php" title="ssh2_&#8203;sftp_&#8203;stat">ssh2_&#8203;sftp_&#8203;stat</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-symlink.php" title="ssh2_&#8203;sftp_&#8203;symlink">ssh2_&#8203;sftp_&#8203;symlink</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-unlink.php" title="ssh2_&#8203;sftp_&#8203;unlink">ssh2_&#8203;sftp_&#8203;unlink</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-shell.php" title="ssh2_&#8203;shell">ssh2_&#8203;shell</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-tunnel.php" title="ssh2_&#8203;tunnel">ssh2_&#8203;tunnel</a>
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
