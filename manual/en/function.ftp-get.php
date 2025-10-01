<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ftp_get - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ftp-get.php">
 <link rel="shorturl" href="https://www.php.net/ftp-get">
 <link rel="alternate" href="https://www.php.net/ftp-get" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ftp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ftp-fput.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ftp-get-option.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ftp-get.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ftp-get.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ftp-get.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ftp-get.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ftp-get.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ftp-get.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ftp-get.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ftp-get.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ftp-get.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ftp-get.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ftp-get.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Downloads a file from the FTP server" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ftp_get - Manual" />
<meta name="twitter:description" content="Downloads a file from the FTP server" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ftp_get - Manual" />
<meta itemprop="description" content="Downloads a file from the FTP server" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Downloads a file from the FTP server" />

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
        <a href="function.ftp-get-option.php">
          ftp_get_option &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ftp-fput.php">
          &laquo; ftp_fput        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ftp.php'>FTP</a></li>      <li><a href='ref.ftp.php'>FTP Functions</a></li>      </ul>
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
            <option value='en/function.ftp-get.php' selected="selected">English</option>
            <option value='de/function.ftp-get.php'>German</option>
            <option value='es/function.ftp-get.php'>Spanish</option>
            <option value='fr/function.ftp-get.php'>French</option>
            <option value='it/function.ftp-get.php'>Italian</option>
            <option value='ja/function.ftp-get.php'>Japanese</option>
            <option value='pt_BR/function.ftp-get.php'>Brazilian Portuguese</option>
            <option value='ru/function.ftp-get.php'>Russian</option>
            <option value='tr/function.ftp-get.php'>Turkish</option>
            <option value='uk/function.ftp-get.php'>Ukrainian</option>
            <option value='zh/function.ftp-get.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ftp-get" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ftp_get</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ftp_get</span> &mdash; <span class="dc-title">Downloads a file from the FTP server</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.ftp-get-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ftp_get</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.ftp-connection.php" class="type FTP\Connection">FTP\Connection</a></span> <code class="parameter">$ftp</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$local_filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$remote_filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = <strong><code><a href="ftp.constants.php#constant.ftp-binary">FTP_BINARY</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>ftp_get()</strong></span> retrieves a remote file from the FTP server,
   and saves it into a local file. 
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.ftp-get-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ftp</code></dt>
     <dd>
       <p class="para">An <span class="classname"><a href="class.ftp-connection.php" class="classname">FTP\Connection</a></span> instance.</p>
     </dd>
    
    
     <dt><code class="parameter">local_filename</code></dt>
     <dd>
      <p class="para">
       The local file path (will be overwritten if the file already exists).
      </p>
     </dd>
    
    
     <dt><code class="parameter">remote_filename</code></dt>
     <dd>
      <p class="para">
       The remote file path.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       The transfer mode. Must be either <strong><code><a href="ftp.constants.php#constant.ftp-ascii">FTP_ASCII</a></code></strong> or
       <strong><code><a href="ftp.constants.php#constant.ftp-binary">FTP_BINARY</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">offset</code></dt>
     <dd>
      <p class="para">
       The position in the remote file to start downloading from.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.ftp-get-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ftp-get-changelog">
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
 <td>8.1.0</td>
 <td>
  The <code class="parameter">ftp</code> parameter expects an <span class="classname"><a href="class.ftp-connection.php" class="classname">FTP\Connection</a></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

     <tr>
      <td>7.3.0</td>
      <td>
       The <code class="parameter">mode</code> parameter is now optional. Formerly it
       has been mandatory.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.ftp-get-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4562">
    <p><strong>Example #1 <span class="function"><strong>ftp_get()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// define some variables<br /></span><span style="color: #0000BB">$local_file </span><span style="color: #007700">= </span><span style="color: #DD0000">'local.zip'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$server_file </span><span style="color: #007700">= </span><span style="color: #DD0000">'server.zip'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// set up basic connection<br /></span><span style="color: #0000BB">$ftp </span><span style="color: #007700">= </span><span style="color: #0000BB">ftp_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp_server</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// login with username and password<br /></span><span style="color: #0000BB">$login_result </span><span style="color: #007700">= </span><span style="color: #0000BB">ftp_login</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">, </span><span style="color: #0000BB">$ftp_user_name</span><span style="color: #007700">, </span><span style="color: #0000BB">$ftp_user_pass</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// try to download $server_file and save to $local_file<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">ftp_get</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">, </span><span style="color: #0000BB">$local_file</span><span style="color: #007700">, </span><span style="color: #0000BB">$server_file</span><span style="color: #007700">, </span><span style="color: #0000BB">FTP_BINARY</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"Successfully written to </span><span style="color: #0000BB">$local_file</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"There was a problem\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// close the connection<br /></span><span style="color: #0000BB">ftp_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.ftp-get-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ftp-pasv.php" class="function" rel="rdfs-seeAlso">ftp_pasv()</a> - Turns passive mode on or off</span></li>
    <li><span class="function"><a href="function.ftp-fget.php" class="function" rel="rdfs-seeAlso">ftp_fget()</a> - Downloads a file from the FTP server and saves to an open file</span></li>
    <li><span class="function"><a href="function.ftp-nb-get.php" class="function" rel="rdfs-seeAlso">ftp_nb_get()</a> - Retrieves a file from the FTP server and writes it to a local file (non-blocking)</span></li>
    <li><span class="function"><a href="function.ftp-nb-fget.php" class="function" rel="rdfs-seeAlso">ftp_nb_fget()</a> - Retrieves a file from the FTP server and writes it to an open file (non-blocking)</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ftp/functions/ftp-get.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ftp-get%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ftp-get&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftp-get.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="94218">  <div class="votes">
    <div id="Vu94218">
    <a href="/manual/vote-note.php?id=94218&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94218">
    <a href="/manual/vote-note.php?id=94218&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94218" title="79% like this...">
    36
    </div>
  </div>
  <a href="#94218" class="name">
  <strong class="user"><em>CuDi</em></strong></a><a class="genanchor" href="#94218"> &para;</a><div class="date" title="2009-10-22 07:50"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94218">
<div class="phpcode"><code><span class="html">I tried to ftp a 7mb file today off my webserver.<br /><br />I copied this example directly and it told me.<br /><br />Port command successful<br />"there was a problem"<br /><br />I thought it was because of the size.<br />But I guessed it might be cause of my firewall.<br /><br />So I made the ftp connection passive:<br /><br /><span class="default">&lt;?PHP<br />  <br />  </span><span class="keyword">...<br />  </span><span class="default">$login_result </span><span class="keyword">= </span><span class="default">ftp_login</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$ftp_user_name</span><span class="keyword">, </span><span class="default">$ftp_user_pass</span><span class="keyword">);<br />  </span><span class="default">ftp_pasv</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Ran the script again &amp; it worked fine.<br /><br />Hope this helps someone</span></code></div>
  </div>
 </div>
  <div class="note" id="111840">  <div class="votes">
    <div id="Vu111840">
    <a href="/manual/vote-note.php?id=111840&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111840">
    <a href="/manual/vote-note.php?id=111840&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111840" title="70% like this...">
    36
    </div>
  </div>
  <a href="#111840" class="name">
  <strong class="user"><em>bob at notallhere dot com</em></strong></a><a class="genanchor" href="#111840"> &para;</a><div class="date" title="2013-04-03 05:50"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111840">
<div class="phpcode"><code><span class="html">Don't want to use an intermediate file?  Use 'php://output' as the filename and then capture the output using output buffering.<br /><br />ob_start();<br />$result = ftp_get($ftp, "php://output", $file, FTP_BINARY);<br />$data = ob_get_contents();<br />ob_end_clean();<br /><br />Don't forget to check $result to make sure there wasn't an error.  After that, manipulate the $data variable however you want.</span></code></div>
  </div>
 </div>
  <div class="note" id="26603">  <div class="votes">
    <div id="Vu26603">
    <a href="/manual/vote-note.php?id=26603&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26603">
    <a href="/manual/vote-note.php?id=26603&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26603" title="69% like this...">
    14
    </div>
  </div>
  <a href="#26603" class="name">
  <strong class="user"><em>ramiro at qusarcr dot com</em></strong></a><a class="genanchor" href="#26603"> &para;</a><div class="date" title="2002-11-06 07:36"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26603">
<div class="phpcode"><code><span class="html">Keep in mind that ftp_get will overwrite the file on your local machine if it has the same name.</span></code></div>
  </div>
 </div>
  <div class="note" id="72603">  <div class="votes">
    <div id="Vu72603">
    <a href="/manual/vote-note.php?id=72603&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72603">
    <a href="/manual/vote-note.php?id=72603&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72603" title="72% like this...">
    10
    </div>
  </div>
  <a href="#72603" class="name">
  <strong class="user"><em>anomie at users dot sf dot net</em></strong></a><a class="genanchor" href="#72603"> &para;</a><div class="date" title="2007-01-25 09:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72603">
<div class="phpcode"><code><span class="html">Why there isn't an "ftp_get_contents" function, I don't know. It takes a little work to emulate one, but it's doable.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ftp_get_contents</span><span class="keyword">(</span><span class="default">$ftp_stream</span><span class="keyword">, </span><span class="default">$remote_file</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="default">$resume_pos</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">){<br />    </span><span class="default">$pipes</span><span class="keyword">=</span><span class="default">stream_socket_pair</span><span class="keyword">(</span><span class="default">STREAM_PF_UNIX</span><span class="keyword">, </span><span class="default">STREAM_SOCK_STREAM</span><span class="keyword">, </span><span class="default">STREAM_IPPROTO_IP</span><span class="keyword">);<br />    if(</span><span class="default">$pipes</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />    if(!</span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">)){<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    </span><span class="default">$fail</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$data</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />    if(</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$resume_pos</span><span class="keyword">)){<br />        </span><span class="default">$ret</span><span class="keyword">=</span><span class="default">ftp_nb_fget</span><span class="keyword">(</span><span class="default">$ftp_stream</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$remote_file</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">);<br />    } else {<br />        </span><span class="default">$ret</span><span class="keyword">=</span><span class="default">ftp_nb_fget</span><span class="keyword">(</span><span class="default">$ftp_stream</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$remote_file</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="default">$resume_pos</span><span class="keyword">);<br />    }<br />    while(</span><span class="default">$ret</span><span class="keyword">==</span><span class="default">FTP_MOREDATA</span><span class="keyword">){<br />        while(!</span><span class="default">$fail </span><span class="keyword">&amp;&amp; !</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])){<br />            </span><span class="default">$r</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">8192</span><span class="keyword">);<br />            if(</span><span class="default">$r</span><span class="keyword">===</span><span class="string">''</span><span class="keyword">) break;<br />            if(</span><span class="default">$r</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">){ </span><span class="default">$fail</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">; break; }<br />            </span><span class="default">$data</span><span class="keyword">.=</span><span class="default">$r</span><span class="keyword">;<br />        }<br />        </span><span class="default">$ret</span><span class="keyword">=</span><span class="default">ftp_nb_continue</span><span class="keyword">(</span><span class="default">$ftp_stream</span><span class="keyword">);<br />    }<br />    while(!</span><span class="default">$fail </span><span class="keyword">&amp;&amp; !</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])){<br />        </span><span class="default">$r</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">8192</span><span class="keyword">);<br />        if(</span><span class="default">$r</span><span class="keyword">===</span><span class="string">''</span><span class="keyword">) break;<br />        if(</span><span class="default">$r</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">){ </span><span class="default">$fail</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">; break; }<br />        </span><span class="default">$data</span><span class="keyword">.=</span><span class="default">$r</span><span class="keyword">;<br />    }<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />    if(</span><span class="default">$fail </span><span class="keyword">|| </span><span class="default">$ret</span><span class="keyword">!=</span><span class="default">FTP_FINISHED</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />    return </span><span class="default">$data</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Something similar would work to write a ftp_put_contents function, too.</span></code></div>
  </div>
 </div>
  <div class="note" id="86516">  <div class="votes">
    <div id="Vu86516">
    <a href="/manual/vote-note.php?id=86516&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86516">
    <a href="/manual/vote-note.php?id=86516&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86516" title="70% like this...">
    4
    </div>
  </div>
  <a href="#86516" class="name">
  <strong class="user"><em>Nate from ruggfamily.com</em></strong></a><a class="genanchor" href="#86516"> &para;</a><div class="date" title="2008-10-22 02:12"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86516">
<div class="phpcode"><code><span class="html">Here's a quick function that figures out the correct mode to use based on a file's extension.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">get_ftp_mode</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)<br />{    <br />    </span><span class="default">$path_parts </span><span class="keyword">= </span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    <br />    if (!isset(</span><span class="default">$path_parts</span><span class="keyword">[</span><span class="string">'extension'</span><span class="keyword">])) return </span><span class="default">FTP_BINARY</span><span class="keyword">;<br />    switch (</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$path_parts</span><span class="keyword">[</span><span class="string">'extension'</span><span class="keyword">])) {<br />        case </span><span class="string">'am'</span><span class="keyword">:case </span><span class="string">'asp'</span><span class="keyword">:case </span><span class="string">'bat'</span><span class="keyword">:case </span><span class="string">'c'</span><span class="keyword">:case </span><span class="string">'cfm'</span><span class="keyword">:case </span><span class="string">'cgi'</span><span class="keyword">:case </span><span class="string">'conf'</span><span class="keyword">:<br />        case </span><span class="string">'cpp'</span><span class="keyword">:case </span><span class="string">'css'</span><span class="keyword">:case </span><span class="string">'dhtml'</span><span class="keyword">:case </span><span class="string">'diz'</span><span class="keyword">:case </span><span class="string">'h'</span><span class="keyword">:case </span><span class="string">'hpp'</span><span class="keyword">:case </span><span class="string">'htm'</span><span class="keyword">:<br />        case </span><span class="string">'html'</span><span class="keyword">:case </span><span class="string">'in'</span><span class="keyword">:case </span><span class="string">'inc'</span><span class="keyword">:case </span><span class="string">'js'</span><span class="keyword">:case </span><span class="string">'m4'</span><span class="keyword">:case </span><span class="string">'mak'</span><span class="keyword">:case </span><span class="string">'nfs'</span><span class="keyword">:<br />        case </span><span class="string">'nsi'</span><span class="keyword">:case </span><span class="string">'pas'</span><span class="keyword">:case </span><span class="string">'patch'</span><span class="keyword">:case </span><span class="string">'php'</span><span class="keyword">:case </span><span class="string">'php3'</span><span class="keyword">:case </span><span class="string">'php4'</span><span class="keyword">:case </span><span class="string">'php5'</span><span class="keyword">:<br />        case </span><span class="string">'phtml'</span><span class="keyword">:case </span><span class="string">'pl'</span><span class="keyword">:case </span><span class="string">'po'</span><span class="keyword">:case </span><span class="string">'py'</span><span class="keyword">:case </span><span class="string">'qmail'</span><span class="keyword">:case </span><span class="string">'sh'</span><span class="keyword">:case </span><span class="string">'shtml'</span><span class="keyword">:<br />        case </span><span class="string">'sql'</span><span class="keyword">:case </span><span class="string">'tcl'</span><span class="keyword">:case </span><span class="string">'tpl'</span><span class="keyword">:case </span><span class="string">'txt'</span><span class="keyword">:case </span><span class="string">'vbs'</span><span class="keyword">:case </span><span class="string">'xml'</span><span class="keyword">:case </span><span class="string">'xrc'</span><span class="keyword">:<br />            return </span><span class="default">FTP_ASCII</span><span class="keyword">;<br />    }<br />    return </span><span class="default">FTP_BINARY</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// sample usage<br /></span><span class="default">ftp_get</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$local_file</span><span class="keyword">, </span><span class="default">$server_file</span><span class="keyword">, </span><span class="default">get_ftp_mode</span><span class="keyword">(</span><span class="default">$server_file</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90910">  <div class="votes">
    <div id="Vu90910">
    <a href="/manual/vote-note.php?id=90910&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90910">
    <a href="/manual/vote-note.php?id=90910&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90910" title="61% like this...">
    7
    </div>
  </div>
  <a href="#90910" class="name">
  <strong class="user"><em>mroerick at gmx dot net</em></strong></a><a class="genanchor" href="#90910"> &para;</a><div class="date" title="2009-05-15 12:42"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90910">
<div class="phpcode"><code><span class="html">ftp_sync is a way to walk the directory structure on the server and copy every directory and file to the same location locally.
<br />
<br /><span class="default">&lt;?php
<br />$ftp_server </span><span class="keyword">= </span><span class="string">"ftp.example.com"</span><span class="keyword">;
<br /></span><span class="default">$conn_id </span><span class="keyword">= </span><span class="default">ftp_connect </span><span class="keyword">(</span><span class="default">$ftp_server</span><span class="keyword">)
<br />    or die(</span><span class="string">"Couldn't connect to </span><span class="default">$ftp_server</span><span class="string">"</span><span class="keyword">); 
<br />    
<br /></span><span class="default">$login_result </span><span class="keyword">= </span><span class="default">ftp_login</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="string">"user"</span><span class="keyword">, </span><span class="string">"pass"</span><span class="keyword">);
<br />if ((!</span><span class="default">$conn_id</span><span class="keyword">) || (!</span><span class="default">$login_result</span><span class="keyword">))
<br />    die(</span><span class="string">"FTP Connection Failed"</span><span class="keyword">);
<br />
<br /></span><span class="default">ftp_sync </span><span class="keyword">(</span><span class="string">"DirectoryToCopy"</span><span class="keyword">);    </span><span class="comment">// Use "." if you are in the current directory
<br />
<br /></span><span class="default">ftp_close</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">);  
<br />
<br /></span><span class="comment">// ftp_sync - Copy directory and file structure
<br /></span><span class="keyword">function </span><span class="default">ftp_sync </span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">) {
<br />
<br />    global </span><span class="default">$conn_id</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">$dir </span><span class="keyword">!= </span><span class="string">"."</span><span class="keyword">) {
<br />        if (</span><span class="default">ftp_chdir</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$dir</span><span class="keyword">) == </span><span class="default">false</span><span class="keyword">) {
<br />            echo (</span><span class="string">"Change Dir Failed: </span><span class="default">$dir</span><span class="string">&lt;BR&gt;\r\n"</span><span class="keyword">);
<br />            return;
<br />        }
<br />        if (!(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)))
<br />            </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);
<br />        </span><span class="default">chdir </span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);
<br />    }
<br />
<br />    </span><span class="default">$contents </span><span class="keyword">= </span><span class="default">ftp_nlist</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">);
<br />    foreach (</span><span class="default">$contents </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">) {
<br />    
<br />        if (</span><span class="default">$file </span><span class="keyword">== </span><span class="string">'.' </span><span class="keyword">|| </span><span class="default">$file </span><span class="keyword">== </span><span class="string">'..'</span><span class="keyword">)
<br />            continue;
<br />        
<br />        if (@</span><span class="default">ftp_chdir</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">)) {
<br />            </span><span class="default">ftp_chdir </span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="string">".."</span><span class="keyword">);
<br />            </span><span class="default">ftp_sync </span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />        }
<br />        else
<br />            </span><span class="default">ftp_get</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">FTP_BINARY</span><span class="keyword">);
<br />    }
<br />        
<br />    </span><span class="default">ftp_chdir </span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="string">".."</span><span class="keyword">);
<br />    </span><span class="default">chdir </span><span class="keyword">(</span><span class="string">".."</span><span class="keyword">);
<br />
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82023">  <div class="votes">
    <div id="Vu82023">
    <a href="/manual/vote-note.php?id=82023&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82023">
    <a href="/manual/vote-note.php?id=82023&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82023" title="52% like this...">
    1
    </div>
  </div>
  <a href="#82023" class="name">
  <strong class="user"><em>Aditya P dot  Bhatt (adityabhai at gmail dot com)</em></strong></a><a class="genanchor" href="#82023"> &para;</a><div class="date" title="2008-03-25 03:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82023">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />                </span><span class="comment">// define some variables<br />        </span><span class="default">$folder_path </span><span class="keyword">= </span><span class="string">"YOUR FOLDER PATH"</span><span class="keyword">; <br />        </span><span class="default">$local_file </span><span class="keyword">= </span><span class="string">"LOCAL FILE PATH"</span><span class="keyword">;<br />        </span><span class="default">$server_file </span><span class="keyword">= </span><span class="string">"SERVER FILE PATH"</span><span class="keyword">;<br />        <br />        </span><span class="comment">//-- Connection Settings<br />        </span><span class="default">$ftp_server </span><span class="keyword">= </span><span class="string">"IP ADDRESS"</span><span class="keyword">; </span><span class="comment">// Address of FTP server.<br />        </span><span class="default">$ftp_user_name </span><span class="keyword">= </span><span class="string">"USERNAME"</span><span class="keyword">; </span><span class="comment">// Username<br />        </span><span class="default">$ftp_user_pass </span><span class="keyword">= </span><span class="string">"PASSWORD"</span><span class="keyword">; </span><span class="comment">// Password<br />        #$destination_file = "FILEPATH"; <br />        <br />        // set up basic connection<br />        </span><span class="default">$conn_id </span><span class="keyword">= </span><span class="default">ftp_connect</span><span class="keyword">(</span><span class="default">$ftp_server</span><span class="keyword">);<br />        <br />        </span><span class="comment">// login with username and password<br />        </span><span class="default">$login_result </span><span class="keyword">= </span><span class="default">ftp_login</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$ftp_user_name</span><span class="keyword">, </span><span class="default">$ftp_user_pass</span><span class="keyword">);<br />        <br />        </span><span class="comment">// try to download $server_file and save to $local_file<br />        </span><span class="keyword">if (</span><span class="default">ftp_get</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$local_file</span><span class="keyword">, </span><span class="default">$server_file</span><span class="keyword">, </span><span class="default">FTP_BINARY</span><span class="keyword">)) {<br />            echo </span><span class="string">"Successfully written to </span><span class="default">$local_file</span><span class="string">\n"</span><span class="keyword">;<br />        } else {<br />            echo </span><span class="string">"There was a problem\n"</span><span class="keyword">;<br />        }<br />        <br />        </span><span class="comment">// close the connection<br />        </span><span class="default">ftp_close</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122981">  <div class="votes">
    <div id="Vu122981">
    <a href="/manual/vote-note.php?id=122981&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122981">
    <a href="/manual/vote-note.php?id=122981&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122981" title="no votes...">
    0
    </div>
  </div>
  <a href="#122981" class="name">
  <strong class="user"><em>mpatnode at yahoo dot com</em></strong></a><a class="genanchor" href="#122981"> &para;</a><div class="date" title="2018-07-26 08:06"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122981">
<div class="phpcode"><code><span class="html">Note that PHP still defaults to FTP active mode by default, which is almost never used anymore since the creation of firewalls.   Don't forget to add a ftp_pasv($conn, true) after your ftp_login.</span></code></div>
  </div>
 </div>
  <div class="note" id="72707">  <div class="votes">
    <div id="Vu72707">
    <a href="/manual/vote-note.php?id=72707&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72707">
    <a href="/manual/vote-note.php?id=72707&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72707" title="50% like this...">
    0
    </div>
  </div>
  <a href="#72707" class="name">
  <strong class="user"><em>anomie at users dot sf dot net</em></strong></a><a class="genanchor" href="#72707"> &para;</a><div class="date" title="2007-01-30 07:24"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72707">
<div class="phpcode"><code><span class="html">Crud. The _nb_ only refers to reading from the ftp server, and the buffer in the socket pair is only about 364 bytes. So it doesn't work for files larger than that size.</span></code></div>
  </div>
 </div>
  <div class="note" id="37675">  <div class="votes">
    <div id="Vu37675">
    <a href="/manual/vote-note.php?id=37675&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37675">
    <a href="/manual/vote-note.php?id=37675&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37675" title="50% like this...">
    0
    </div>
  </div>
  <a href="#37675" class="name">
  <strong class="user"><em>thivierr at telus dot net</em></strong></a><a class="genanchor" href="#37675"> &para;</a><div class="date" title="2003-11-22 02:25"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37675">
<div class="phpcode"><code><span class="html">If you previously downloaded a file before (like a huge web log), and just want to get the remaining portion, do this:<br /><br />$local_file_size = filesize($local_file_path);<br />$get_result = ftp_get($conn_id, $local_file_path, $remote_file_path, FTP_BINARY, $local_file_size);<br /><br />This same code works regardless of wether the local file exists already or not.  You should first test to make sure the local file is not bigger than the remote file.</span></code></div>
  </div>
 </div>
  <div class="note" id="68844">  <div class="votes">
    <div id="Vu68844">
    <a href="/manual/vote-note.php?id=68844&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68844">
    <a href="/manual/vote-note.php?id=68844&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68844" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#68844" class="name">
  <strong class="user"><em>administrator at gesoft dot org</em></strong></a><a class="genanchor" href="#68844"> &para;</a><div class="date" title="2006-08-12 03:05"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68844">
<div class="phpcode"><code><span class="html">Hello everybody,<br /><br />If someone will try to download files to the same local file (some temporary file), like shown here:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$path</span><span class="keyword">) {<br />... <br />  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">ftp_get</span><span class="keyword">(</span><span class="default">$ftpConnId</span><span class="keyword">, </span><span class="string">'temp.tmp'</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">, </span><span class="default">FTP_BINARY</span><span class="keyword">);<br />...<br />}<br /></span><span class="default">?&gt;<br /></span><br />please take in consideration the fact that you will have big problems with downloading (getting) hole files. In other words ‘temp.tmp’ file always will have the same size equal to first downloaded file despite the real size of downloading file. I have not idea what is the reason!<br /><br />If someone will think that problem is just in getting proper file size (which you will get using filssize() function) he will be mistaken. The download file’s size is not equal to source file’s size materially, that means fflush() function will not solve the problem (I have tried this as well).<br /><br />Finally the solution was founded: before downloading a file you will need to delete local file if such exist (‘temp.tmp’). So working code will look like:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$path</span><span class="keyword">) {<br />... <br />  if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="string">'temp.tmp'</span><span class="keyword">)) {<br />    </span><span class="default">unlink</span><span class="keyword">(</span><span class="string">'temp.tmp'</span><span class="keyword">);<br />  }<br />  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">ftp_get</span><span class="keyword">(</span><span class="default">$ftpConnId</span><span class="keyword">, </span><span class="string">'temp.tmp'</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">, </span><span class="default">FTP_BINARY</span><span class="keyword">);<br />...<br />}<br /></span><span class="default">?&gt;<br /></span><br />Good luck in scripting :-)<br /><br />Vitali Simsive</span></code></div>
  </div>
 </div>
  <div class="note" id="110920">  <div class="votes">
    <div id="Vu110920">
    <a href="/manual/vote-note.php?id=110920&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110920">
    <a href="/manual/vote-note.php?id=110920&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110920" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#110920" class="name">
  <strong class="user"><em>miki at epoch dot co dot il</em></strong></a><a class="genanchor" href="#110920"> &para;</a><div class="date" title="2012-12-23 09:32"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110920">
<div class="phpcode"><code><span class="html">If you ran the example and see that it fail after 90sec (timeout).<br /><br />Then try adding:<br /><span class="default">&lt;?php<br />ftp_pasv</span><span class="keyword">(</span><span class="default">$ftp_conn</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="39293">  <div class="votes">
    <div id="Vu39293">
    <a href="/manual/vote-note.php?id=39293&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39293">
    <a href="/manual/vote-note.php?id=39293&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39293" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#39293" class="name">
  <strong class="user"><em>corey-holzer at nyc dot rr dot com</em></strong></a><a class="genanchor" href="#39293"> &para;</a><div class="date" title="2004-01-23 06:20"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39293">
<div class="phpcode"><code><span class="html">The zero size file is not a side effect.  When the ftp_get starts the first thing it does is to create the inode/file which it will stream the data too and that is a zero size file with the nname you specified for the local file.  When the download fails it leaves the file in place.</span></code></div>
  </div>
 </div>
  <div class="note" id="119804">  <div class="votes">
    <div id="Vu119804">
    <a href="/manual/vote-note.php?id=119804&amp;page=function.ftp-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119804">
    <a href="/manual/vote-note.php?id=119804&amp;page=function.ftp-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119804" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#119804" class="name">
  <strong class="user"><em>scott dot chu at udngroup dot com</em></strong></a><a class="genanchor" href="#119804"> &para;</a><div class="date" title="2016-08-30 07:23"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119804">
<div class="phpcode"><code><span class="html">I'd suggest use ftp_fget() instead of ftp_get() since the latter only return TRUE or FALSE and there's no obvious way to get the cause of failure.<br /><br />   Using ftp_fget,  you have to pass a file handle as local file, so you have to do fopen() first. By way of this, you can find 'Permission Denied' problem when call fopen(). If you use ftp_get(), there's no way to find this error cause.<br /><br />   In my case, I run httpd using 'nobody' and I create ftp local folder using 'haha'. It tooks me long time to find the 'Permission Denied' problem at that time since  I use ftp_get() then.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ftp-get&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftp-get.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ftp.php">FTP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ftp-alloc.php" title="ftp_&#8203;alloc">ftp_&#8203;alloc</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-append.php" title="ftp_&#8203;append">ftp_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-cdup.php" title="ftp_&#8203;cdup">ftp_&#8203;cdup</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-chdir.php" title="ftp_&#8203;chdir">ftp_&#8203;chdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-chmod.php" title="ftp_&#8203;chmod">ftp_&#8203;chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-close.php" title="ftp_&#8203;close">ftp_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-connect.php" title="ftp_&#8203;connect">ftp_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-delete.php" title="ftp_&#8203;delete">ftp_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-exec.php" title="ftp_&#8203;exec">ftp_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-fget.php" title="ftp_&#8203;fget">ftp_&#8203;fget</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-fput.php" title="ftp_&#8203;fput">ftp_&#8203;fput</a>
                        </li>
                                                <li class="current">
                            <a href="function.ftp-get.php" title="ftp_&#8203;get">ftp_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-get-option.php" title="ftp_&#8203;get_&#8203;option">ftp_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-login.php" title="ftp_&#8203;login">ftp_&#8203;login</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-mdtm.php" title="ftp_&#8203;mdtm">ftp_&#8203;mdtm</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-mkdir.php" title="ftp_&#8203;mkdir">ftp_&#8203;mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-mlsd.php" title="ftp_&#8203;mlsd">ftp_&#8203;mlsd</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-continue.php" title="ftp_&#8203;nb_&#8203;continue">ftp_&#8203;nb_&#8203;continue</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-fget.php" title="ftp_&#8203;nb_&#8203;fget">ftp_&#8203;nb_&#8203;fget</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-fput.php" title="ftp_&#8203;nb_&#8203;fput">ftp_&#8203;nb_&#8203;fput</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-get.php" title="ftp_&#8203;nb_&#8203;get">ftp_&#8203;nb_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-put.php" title="ftp_&#8203;nb_&#8203;put">ftp_&#8203;nb_&#8203;put</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nlist.php" title="ftp_&#8203;nlist">ftp_&#8203;nlist</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-pasv.php" title="ftp_&#8203;pasv">ftp_&#8203;pasv</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-put.php" title="ftp_&#8203;put">ftp_&#8203;put</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-pwd.php" title="ftp_&#8203;pwd">ftp_&#8203;pwd</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-quit.php" title="ftp_&#8203;quit">ftp_&#8203;quit</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-raw.php" title="ftp_&#8203;raw">ftp_&#8203;raw</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-rawlist.php" title="ftp_&#8203;rawlist">ftp_&#8203;rawlist</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-rename.php" title="ftp_&#8203;rename">ftp_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-rmdir.php" title="ftp_&#8203;rmdir">ftp_&#8203;rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-set-option.php" title="ftp_&#8203;set_&#8203;option">ftp_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-site.php" title="ftp_&#8203;site">ftp_&#8203;site</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-size.php" title="ftp_&#8203;size">ftp_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-ssl-connect.php" title="ftp_&#8203;ssl_&#8203;connect">ftp_&#8203;ssl_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-systype.php" title="ftp_&#8203;systype">ftp_&#8203;systype</a>
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
