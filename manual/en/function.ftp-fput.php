<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ftp_fput - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ftp-fput.php">
 <link rel="shorturl" href="https://www.php.net/ftp-fput">
 <link rel="alternate" href="https://www.php.net/ftp-fput" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ftp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ftp-fget.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ftp-get.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ftp-fput.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ftp-fput.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ftp-fput.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ftp-fput.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ftp-fput.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ftp-fput.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ftp-fput.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ftp-fput.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ftp-fput.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ftp-fput.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ftp-fput.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Uploads from an open file to the FTP server" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ftp_fput - Manual" />
<meta name="twitter:description" content="Uploads from an open file to the FTP server" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ftp_fput - Manual" />
<meta itemprop="description" content="Uploads from an open file to the FTP server" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Uploads from an open file to the FTP server" />

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
        <a href="function.ftp-get.php">
          ftp_get &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ftp-fget.php">
          &laquo; ftp_fget        </a>
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
            <option value='en/function.ftp-fput.php' selected="selected">English</option>
            <option value='de/function.ftp-fput.php'>German</option>
            <option value='es/function.ftp-fput.php'>Spanish</option>
            <option value='fr/function.ftp-fput.php'>French</option>
            <option value='it/function.ftp-fput.php'>Italian</option>
            <option value='ja/function.ftp-fput.php'>Japanese</option>
            <option value='pt_BR/function.ftp-fput.php'>Brazilian Portuguese</option>
            <option value='ru/function.ftp-fput.php'>Russian</option>
            <option value='tr/function.ftp-fput.php'>Turkish</option>
            <option value='uk/function.ftp-fput.php'>Ukrainian</option>
            <option value='zh/function.ftp-fput.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ftp-fput" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ftp_fput</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ftp_fput</span> &mdash; <span class="dc-title">Uploads from an open file to the FTP server</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.ftp-fput-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ftp_fput</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.ftp-connection.php" class="type FTP\Connection">FTP\Connection</a></span> <code class="parameter">$ftp</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$remote_filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stream</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = <strong><code><a href="ftp.constants.php#constant.ftp-binary">FTP_BINARY</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>ftp_fput()</strong></span> uploads the data from a file pointer
   to a remote file on the FTP server.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.ftp-fput-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ftp</code></dt>
     <dd>
       <p class="para">An <span class="classname"><a href="class.ftp-connection.php" class="classname">FTP\Connection</a></span> instance.</p>
     </dd>
    
    
     <dt><code class="parameter">remote_filename</code></dt>
     <dd>
      <p class="para">
       The remote file path.
      </p>
     </dd>
    
    
     <dt><code class="parameter">stream</code></dt>
     <dd>
      <p class="para">
       An open file pointer on the local file. Reading stops at end of file.
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
      <p class="para">The position in the remote file to start uploading to.</p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.ftp-fput-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ftp-fput-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.ftp-fput-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4561">
    <p><strong>Example #1 <span class="function"><strong>ftp_fput()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// open some file for reading<br /></span><span style="color: #0000BB">$file </span><span style="color: #007700">= </span><span style="color: #DD0000">'somefile.txt'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// set up basic connection<br /></span><span style="color: #0000BB">$ftp </span><span style="color: #007700">= </span><span style="color: #0000BB">ftp_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp_server</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// login with username and password<br /></span><span style="color: #0000BB">$login_result </span><span style="color: #007700">= </span><span style="color: #0000BB">ftp_login</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">, </span><span style="color: #0000BB">$ftp_user_name</span><span style="color: #007700">, </span><span style="color: #0000BB">$ftp_user_pass</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// try to upload $file<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">ftp_fput</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">, </span><span style="color: #0000BB">$file</span><span style="color: #007700">, </span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">FTP_ASCII</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"Successfully uploaded </span><span style="color: #0000BB">$file</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"There was a problem while uploading </span><span style="color: #0000BB">$file</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// close the connection and the file handler<br /></span><span style="color: #0000BB">ftp_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.ftp-fput-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ftp-put.php" class="function" rel="rdfs-seeAlso">ftp_put()</a> - Uploads a file to the FTP server</span></li>
    <li><span class="function"><a href="function.ftp-nb-fput.php" class="function" rel="rdfs-seeAlso">ftp_nb_fput()</a> - Stores a file from an open file to the FTP server (non-blocking)</span></li>
    <li><span class="function"><a href="function.ftp-nb-put.php" class="function" rel="rdfs-seeAlso">ftp_nb_put()</a> - Stores a file on the FTP server (non-blocking)</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ftp/functions/ftp-fput.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ftp-fput%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ftp-fput&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftp-fput.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112067">  <div class="votes">
    <div id="Vu112067">
    <a href="/manual/vote-note.php?id=112067&amp;page=function.ftp-fput&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112067">
    <a href="/manual/vote-note.php?id=112067&amp;page=function.ftp-fput&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112067" title="86% like this...">
    28
    </div>
  </div>
  <a href="#112067" class="name">
  <strong class="user"><em>roy at user dot nl</em></strong></a><a class="genanchor" href="#112067"> &para;</a><div class="date" title="2013-04-29 08:22"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112067">
<div class="phpcode"><code><span class="html">For directly inserting content into a file on an FTP host, you could also create a string stream wich streams directly to the ftp_fput function. <br /><br />This should create less overhead than first writing to any temp directories locally before streaming, as suggested here.<br /><br /><span class="default">&lt;?php<br /><br />$string </span><span class="keyword">= </span><span class="string">"Your content goes here"</span><span class="keyword">;<br /></span><span class="default">$stream </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'data://text/plain,' </span><span class="keyword">. </span><span class="default">$string</span><span class="keyword">,</span><span class="string">'r'</span><span class="keyword">);<br /><br /></span><span class="default">ftp_fput</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">,</span><span class="default">$pathTo</span><span class="keyword">,</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">FTP_BINARY</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90517">  <div class="votes">
    <div id="Vu90517">
    <a href="/manual/vote-note.php?id=90517&amp;page=function.ftp-fput&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90517">
    <a href="/manual/vote-note.php?id=90517&amp;page=function.ftp-fput&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90517" title="76% like this...">
    7
    </div>
  </div>
  <a href="#90517" class="name">
  <strong class="user"><em>timgolding_10 at hotmail dot com</em></strong></a><a class="genanchor" href="#90517"> &para;</a><div class="date" title="2009-04-26 07:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90517">
<div class="phpcode"><code><span class="html">If when using fput you get the one of the following errors:<br /><br />Warning: ftp_fput() [function.ftp-fput]: Opening ASCII mode data connection<br /><br />Warning: ftp_fput() [function.ftp-fput]: Opening BINARY mode data connection<br /><br />and it creates the file in the correct location but is a 0kb file and all FTP commands thereafter fail. It is likely that the client is behind a firewall. To rectify this use:<br /><br /><span class="default">&lt;?php<br />ftp_pasv</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Before executing any put commands. Took me so long to figure this out I actually cheered when I did :D</span></code></div>
  </div>
 </div>
  <div class="note" id="83302">  <div class="votes">
    <div id="Vu83302">
    <a href="/manual/vote-note.php?id=83302&amp;page=function.ftp-fput&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83302">
    <a href="/manual/vote-note.php?id=83302&amp;page=function.ftp-fput&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83302" title="63% like this...">
    3
    </div>
  </div>
  <a href="#83302" class="name">
  <strong class="user"><em>jopi paranoid fi</em></strong></a><a class="genanchor" href="#83302"> &para;</a><div class="date" title="2008-05-20 12:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83302">
<div class="phpcode"><code><span class="html">When you have your file contents as a string, create temporary stream and use that as a file handle.<br /><br /><span class="default">&lt;?php<br /><br />$contents </span><span class="keyword">= </span><span class="string">"This is a test file\nTesting 1,2,3.."</span><span class="keyword">;<br /><br /></span><span class="default">$tempHandle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'php://temp'</span><span class="keyword">, </span><span class="string">'r+'</span><span class="keyword">);<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$tempHandle</span><span class="keyword">, </span><span class="default">$contents</span><span class="keyword">);<br /></span><span class="default">rewind</span><span class="keyword">(</span><span class="default">$tempHandle</span><span class="keyword">);        <br /><br /></span><span class="default">ftp_fput</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ftp</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$tempHandle</span><span class="keyword">, </span><span class="default">FTP_ASCII</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86872">  <div class="votes">
    <div id="Vu86872">
    <a href="/manual/vote-note.php?id=86872&amp;page=function.ftp-fput&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86872">
    <a href="/manual/vote-note.php?id=86872&amp;page=function.ftp-fput&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86872" title="60% like this...">
    1
    </div>
  </div>
  <a href="#86872" class="name">
  <strong class="user"><em>rok dot meglic at gmail dot com</em></strong></a><a class="genanchor" href="#86872"> &para;</a><div class="date" title="2008-11-07 04:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86872">
<div class="phpcode"><code><span class="html">Make sure you chdir to remote directory before using ftp_put or else ftp_put will just return error that it cannot create file. After you do the chdir you should NOT pass the whole path of file to ftp_put but just basename (filename). See example for more info.<br /><br />Example:<br /><span class="default">&lt;?php<br />$locpath </span><span class="keyword">= </span><span class="string">'local_path/resources/js/test.js'</span><span class="keyword">;<br /></span><span class="default">$rempath </span><span class="keyword">= </span><span class="string">'resources/js/'</span><span class="keyword">;<br /></span><span class="default">$remFile </span><span class="keyword">= </span><span class="string">'test.js'</span><span class="keyword">;<br /><br /></span><span class="default">ftp_chdir</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">conn_id</span><span class="keyword">, </span><span class="default">$rempath</span><span class="keyword">);<br /></span><span class="default">ftp_put</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">conn_id</span><span class="keyword">, </span><span class="default">$remFile</span><span class="keyword">, </span><span class="default">$locpath</span><span class="keyword">, </span><span class="default">FTP_BINARY</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108626">  <div class="votes">
    <div id="Vu108626">
    <a href="/manual/vote-note.php?id=108626&amp;page=function.ftp-fput&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108626">
    <a href="/manual/vote-note.php?id=108626&amp;page=function.ftp-fput&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108626" title="50% like this...">
    0
    </div>
  </div>
  <a href="#108626" class="name">
  <strong class="user"><em>php at cpis dot me</em></strong></a><a class="genanchor" href="#108626"> &para;</a><div class="date" title="2012-05-11 02:32"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108626">
<div class="phpcode"><code><span class="html">This might be obvious to most of you, but make sure your stream isn't write-only. It has to be able to read from your stream in order to upload its contents.<br /><br />Took me a while trying to figure out why my  uploaded file was 0B, and that was why.</span></code></div>
  </div>
 </div>
  <div class="note" id="106627">  <div class="votes">
    <div id="Vu106627">
    <a href="/manual/vote-note.php?id=106627&amp;page=function.ftp-fput&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106627">
    <a href="/manual/vote-note.php?id=106627&amp;page=function.ftp-fput&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106627" title="50% like this...">
    0
    </div>
  </div>
  <a href="#106627" class="name">
  <strong class="user"><em>jevin</em></strong></a><a class="genanchor" href="#106627"> &para;</a><div class="date" title="2011-11-22 11:24"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106627">
<div class="phpcode"><code><span class="html">You might also want to note that ftp_fput will overwrite any existing file.</span></code></div>
  </div>
 </div>
  <div class="note" id="85706">  <div class="votes">
    <div id="Vu85706">
    <a href="/manual/vote-note.php?id=85706&amp;page=function.ftp-fput&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85706">
    <a href="/manual/vote-note.php?id=85706&amp;page=function.ftp-fput&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85706" title="no votes...">
    0
    </div>
  </div>
  <a href="#85706" class="name">
  <strong class="user"><em>robert b</em></strong></a><a class="genanchor" href="#85706"> &para;</a><div class="date" title="2008-09-12 02:43"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85706">
<div class="phpcode"><code><span class="html">Using jopi paranoid fi's example, tmpfile() works on PHP 4 and 5 instead of using the php://temp file.</span></code></div>
  </div>
 </div>
  <div class="note" id="82569">  <div class="votes">
    <div id="Vu82569">
    <a href="/manual/vote-note.php?id=82569&amp;page=function.ftp-fput&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82569">
    <a href="/manual/vote-note.php?id=82569&amp;page=function.ftp-fput&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82569" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82569" class="name">
  <strong class="user"><em>Charlie Brown</em></strong></a><a class="genanchor" href="#82569"> &para;</a><div class="date" title="2008-04-16 02:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82569">
<div class="phpcode"><code><span class="html">Fails if destination file exists. Delete first and it works.</span></code></div>
  </div>
 </div>
  <div class="note" id="64691">  <div class="votes">
    <div id="Vu64691">
    <a href="/manual/vote-note.php?id=64691&amp;page=function.ftp-fput&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64691">
    <a href="/manual/vote-note.php?id=64691&amp;page=function.ftp-fput&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64691" title="50% like this...">
    0
    </div>
  </div>
  <a href="#64691" class="name">
  <strong class="user"><em>info at daniel-marschall dot de</em></strong></a><a class="genanchor" href="#64691"> &para;</a><div class="date" title="2006-04-19 12:04"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64691">
<div class="phpcode"><code><span class="html">This is a function i wrote to copy a complete directory to a FTP-Server-folder.<br /><br />function ftp_uploaddirectory($conn_id, $local_dir, $remote_dir)<br />{<br />  @ftp_mkdir($conn_id, $remote_dir);<br />  $handle = opendir($local_dir);<br />  while (($file = readdir($handle)) !== false)<br />  {<br />    if (($file != '.') &amp;&amp; ($file != '..'))<br />    {<br />      if (is_dir($local_dir.$file))<br />      {<br />        ftp_uploaddirectory($conn_id, $local_dir.$file.'/', $remote_dir.$file.'/');<br />      }<br />      else<br />        $f[] = $file;<br />    }<br />  }<br />  closedir($handle);<br />  if (count($f))<br />  {<br />    sort($f);<br />    @ftp_chdir($conn_id, $remote_dir);<br />    foreach ($f as $files)<br />    {<br />      $from = @fopen("$local_dir$files", 'r');<br />      @ftp_fput($conn_id, $files, $from, FTP_BINARY);<br />    }<br />  }<br />}<br /><br />Example:<br /><br />$conn_id = @ftp_connect($server);<br />@ftp_login ($conn_id, $username, $passwort);<br />ftp_uploaddirectory($conn_id, 'mydirectory/', 'theftpdirectory/');<br />@ftp_quit($conn_id);<br /><br />I hope you'll find it useful.</span></code></div>
  </div>
 </div>
  <div class="note" id="29153">  <div class="votes">
    <div id="Vu29153">
    <a href="/manual/vote-note.php?id=29153&amp;page=function.ftp-fput&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29153">
    <a href="/manual/vote-note.php?id=29153&amp;page=function.ftp-fput&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29153" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#29153" class="name">
  <strong class="user"><em>darian lassan at yahoo de</em></strong></a><a class="genanchor" href="#29153"> &para;</a><div class="date" title="2003-02-04 10:00"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29153">
<div class="phpcode"><code><span class="html">If you want to pass a string containing the filename as source and not a resource handle use ftp_put() instead. Trivial but not mentioned here.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ftp-fput&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftp-fput.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
