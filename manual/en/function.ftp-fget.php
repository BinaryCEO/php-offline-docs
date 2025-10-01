<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ftp_fget - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ftp-fget.php">
 <link rel="shorturl" href="https://www.php.net/ftp-fget">
 <link rel="alternate" href="https://www.php.net/ftp-fget" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ftp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ftp-exec.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ftp-fput.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ftp-fget.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ftp-fget.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ftp-fget.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ftp-fget.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ftp-fget.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ftp-fget.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ftp-fget.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ftp-fget.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ftp-fget.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ftp-fget.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ftp-fget.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Downloads a file from the FTP server and saves to an open file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ftp_fget - Manual" />
<meta name="twitter:description" content="Downloads a file from the FTP server and saves to an open file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ftp_fget - Manual" />
<meta itemprop="description" content="Downloads a file from the FTP server and saves to an open file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Downloads a file from the FTP server and saves to an open file" />

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
        <a href="function.ftp-fput.php">
          ftp_fput &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ftp-exec.php">
          &laquo; ftp_exec        </a>
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
            <option value='en/function.ftp-fget.php' selected="selected">English</option>
            <option value='de/function.ftp-fget.php'>German</option>
            <option value='es/function.ftp-fget.php'>Spanish</option>
            <option value='fr/function.ftp-fget.php'>French</option>
            <option value='it/function.ftp-fget.php'>Italian</option>
            <option value='ja/function.ftp-fget.php'>Japanese</option>
            <option value='pt_BR/function.ftp-fget.php'>Brazilian Portuguese</option>
            <option value='ru/function.ftp-fget.php'>Russian</option>
            <option value='tr/function.ftp-fget.php'>Turkish</option>
            <option value='uk/function.ftp-fget.php'>Ukrainian</option>
            <option value='zh/function.ftp-fget.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ftp-fget" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ftp_fget</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ftp_fget</span> &mdash; <span class="dc-title">Downloads a file from the FTP server and saves to an open file</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.ftp-fget-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ftp_fget</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.ftp-connection.php" class="type FTP\Connection">FTP\Connection</a></span> <code class="parameter">$ftp</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stream</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$remote_filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = <strong><code><a href="ftp.constants.php#constant.ftp-binary">FTP_BINARY</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>ftp_fget()</strong></span> retrieves <code class="parameter">remote_filename</code>
   from the FTP server, and writes it to the given file pointer.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.ftp-fget-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ftp</code></dt>
     <dd>
       <p class="para">An <span class="classname"><a href="class.ftp-connection.php" class="classname">FTP\Connection</a></span> instance.</p>
     </dd>
    
    
     <dt><code class="parameter">stream</code></dt>
     <dd>
      <p class="para">
       An open file pointer in which we store the data.
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

 <div class="refsect1 returnvalues" id="refsect1-function.ftp-fget-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ftp-fget-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.ftp-fget-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4560">
    <p><strong>Example #1 <span class="function"><strong>ftp_fget()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// path to remote file<br /></span><span style="color: #0000BB">$remote_file </span><span style="color: #007700">= </span><span style="color: #DD0000">'somefile.txt'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$local_file </span><span style="color: #007700">= </span><span style="color: #DD0000">'localfile.txt'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// open some file to write to<br /></span><span style="color: #0000BB">$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$local_file</span><span style="color: #007700">, </span><span style="color: #DD0000">'w'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// set up basic connection<br /></span><span style="color: #0000BB">$ftp </span><span style="color: #007700">= </span><span style="color: #0000BB">ftp_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp_server</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// login with username and password<br /></span><span style="color: #0000BB">$login_result </span><span style="color: #007700">= </span><span style="color: #0000BB">ftp_login</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">, </span><span style="color: #0000BB">$ftp_user_name</span><span style="color: #007700">, </span><span style="color: #0000BB">$ftp_user_pass</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// try to download $remote_file and save it to $handle<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">ftp_fget</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">, </span><span style="color: #0000BB">$handle</span><span style="color: #007700">, </span><span style="color: #0000BB">$remote_file</span><span style="color: #007700">, </span><span style="color: #0000BB">FTP_ASCII</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">)) {<br /> echo </span><span style="color: #DD0000">"successfully written to </span><span style="color: #0000BB">$local_file</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />} else {<br /> echo </span><span style="color: #DD0000">"There was a problem while downloading </span><span style="color: #0000BB">$remote_file</span><span style="color: #DD0000"> to </span><span style="color: #0000BB">$local_file</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// close the connection and the file handler<br /></span><span style="color: #0000BB">ftp_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.ftp-fget-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ftp-get.php" class="function" rel="rdfs-seeAlso">ftp_get()</a> - Downloads a file from the FTP server</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ftp/functions/ftp-fget.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ftp-fget%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ftp-fget&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftp-fget.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86106">  <div class="votes">
    <div id="Vu86106">
    <a href="/manual/vote-note.php?id=86106&amp;page=function.ftp-fget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86106">
    <a href="/manual/vote-note.php?id=86106&amp;page=function.ftp-fget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86106" title="70% like this...">
    8
    </div>
  </div>
  <a href="#86106" class="name">
  <strong class="user"><em>broom at alturnanetworks dot com</em></strong></a><a class="genanchor" href="#86106"> &para;</a><div class="date" title="2008-10-03 04:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86106">
<div class="phpcode"><code><span class="html">Another ftp_get_contents approach, using a temperary stream handler. Returns file contents as string. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ftp_get_contents </span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">,
<br /></span><span class="comment">//Create temp handler:
<br />    </span><span class="default">$tempHandle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'php://temp'</span><span class="keyword">, </span><span class="string">'r+'</span><span class="keyword">);
<br />
<br /></span><span class="comment">//Get file from FTP assuming that it exists:
<br />    </span><span class="default">ftp_fget</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$tempHandle</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">, </span><span class="default">FTP_ASCII</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));
<br />
<br />    </span><span class="comment">//Getting detailed stats to check filesize:
<br />    </span><span class="default">$fstats </span><span class="keyword">= </span><span class="default">fstat</span><span class="keyword">(</span><span class="default">$tempHandle</span><span class="keyword">);
<br />
<br />    return </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$tempHandle</span><span class="keyword">, </span><span class="default">$fstats</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">]);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86107">  <div class="votes">
    <div id="Vu86107">
    <a href="/manual/vote-note.php?id=86107&amp;page=function.ftp-fget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86107">
    <a href="/manual/vote-note.php?id=86107&amp;page=function.ftp-fget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86107" title="69% like this...">
    5
    </div>
  </div>
  <a href="#86107" class="name">
  <strong class="user"><em>broom at alturnanetworks dot com</em></strong></a><a class="genanchor" href="#86107"> &para;</a><div class="date" title="2008-10-03 04:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86107">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">/** 
<br /> * Function returns contents via FTP connection and returns it as string (right version...)
<br /> */
<br /></span><span class="keyword">function </span><span class="default">ftp_get_contents </span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">) {
<br />    </span><span class="comment">//Create temp handler:
<br />    </span><span class="default">$tempHandle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'php://temp'</span><span class="keyword">, </span><span class="string">'r+'</span><span class="keyword">);
<br />    
<br />    </span><span class="comment">//Get file from FTP:
<br />    </span><span class="keyword">if (@</span><span class="default">ftp_fget</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$tempHandle</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">, </span><span class="default">FTP_ASCII</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)) {
<br />        </span><span class="default">rewind</span><span class="keyword">(</span><span class="default">$tempHandle</span><span class="keyword">);
<br />        return </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$tempHandle</span><span class="keyword">);
<br />    } else {
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120599">  <div class="votes">
    <div id="Vu120599">
    <a href="/manual/vote-note.php?id=120599&amp;page=function.ftp-fget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120599">
    <a href="/manual/vote-note.php?id=120599&amp;page=function.ftp-fget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120599" title="57% like this...">
    1
    </div>
  </div>
  <a href="#120599" class="name">
  <strong class="user"><em>lionskape at gmail dot com</em></strong></a><a class="genanchor" href="#120599"> &para;</a><div class="date" title="2017-02-06 04:38"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120599">
<div class="phpcode"><code><span class="html">if you are using windows ftp-server with cp1251 encoding there are some troubles with russian "я" in filename\path.<br /><br />php use telnet to connect ftp-server and there are special symbol with code 255 in telnet protocol. You can try use ftp_raw($connection, 'OPTS UTF8 ON'); and work in utf-8 (if server provides it).<br /><br />P.S. sorry for my bad english</span></code></div>
  </div>
 </div>
  <div class="note" id="111548">  <div class="votes">
    <div id="Vu111548">
    <a href="/manual/vote-note.php?id=111548&amp;page=function.ftp-fget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111548">
    <a href="/manual/vote-note.php?id=111548&amp;page=function.ftp-fget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111548" title="54% like this...">
    1
    </div>
  </div>
  <a href="#111548" class="name">
  <strong class="user"><em>mike at eastghost dot com</em></strong></a><a class="genanchor" href="#111548"> &para;</a><div class="date" title="2013-03-03 02:22"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111548">
<div class="phpcode"><code><span class="html">You might need to use ftp_pasv() if you're behind a firewall and receiving odd timeouts, file creation but now local data saving, etc.</span></code></div>
  </div>
 </div>
  <div class="note" id="80912">  <div class="votes">
    <div id="Vu80912">
    <a href="/manual/vote-note.php?id=80912&amp;page=function.ftp-fget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80912">
    <a href="/manual/vote-note.php?id=80912&amp;page=function.ftp-fget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80912" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#80912" class="name">
  <strong class="user"><em>justrafi at gmail dot com</em></strong></a><a class="genanchor" href="#80912"> &para;</a><div class="date" title="2008-02-06 08:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80912">
<div class="phpcode"><code><span class="html">I was in need to synchronize two folders on two separate servers, one is a Windows server, and the other is a Linux server. I created this short and sweet function to help me do this. PLEASE NOTICE: This will not copy folders, and probably will fail if remote folder contains anything else than files.<br /><br />function sync_folders($host, $port, $username, $password, $remote_dir, $local_dir, $passive_mode = true) {<br />    $conn_id = ftp_connect($host, $port);<br />    if (!$conn_id) return false; # fail to connect<br />    if (!ftp_login($conn_id, $username, $password)) { ftp_close($conn_id); return false; }  # fail to login<br />    ftp_pasv($conn_id, $passive_mode);<br />    if (!ftp_chdir($conn_id, $remote_dir)) { ftp_close($conn_id); return false; } # fail to change dir<br />    if (substr($local_dir, -1) != '/') $local_dir .= '/';<br /><br />    $list = ftp_nlist($conn_id, '.');<br />    sort($list);<br />    foreach ($list as $file) {<br />        if (!file_exists($local_dir . $file)) {<br />            $is_copied = ftp_get($conn_id, $local_dir . $file, $file, FTP_BINARY);<br />        }<br />    }<br />    ftp_close($conn_id);<br />    return true;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="24974">  <div class="votes">
    <div id="Vu24974">
    <a href="/manual/vote-note.php?id=24974&amp;page=function.ftp-fget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24974">
    <a href="/manual/vote-note.php?id=24974&amp;page=function.ftp-fget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24974" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#24974" class="name">
  <strong class="user"><em>rodrigo-rocha at oi dot net dot br</em></strong></a><a class="genanchor" href="#24974"> &para;</a><div class="date" title="2002-09-06 07:56"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24974">
<div class="phpcode"><code><span class="html">If you suply only a filename to the second parameter of function the ftp_get will open a pointer to the local file creating it and write to it.It's ok if your server dont execute for to mutch time and you dont get too many files but if you do it too many times the pointers created by ftp_get will not be closed and will end your opened files capacity at your server making it to do not open any more files until you restart it.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ftp-fget&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftp-fget.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.ftp-fget.php" title="ftp_&#8203;fget">ftp_&#8203;fget</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-fput.php" title="ftp_&#8203;fput">ftp_&#8203;fput</a>
                        </li>
                                                <li class="">
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
