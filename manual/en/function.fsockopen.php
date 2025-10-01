<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: fsockopen - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.fsockopen.php">
 <link rel="shorturl" href="https://www.php.net/fsockopen">
 <link rel="alternate" href="https://www.php.net/fsockopen" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.dns-get-record.php">
 <link rel="next" href="https://www.php.net/manual/en/function.gethostbyaddr.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.fsockopen.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.fsockopen.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.fsockopen.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.fsockopen.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.fsockopen.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.fsockopen.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.fsockopen.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.fsockopen.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.fsockopen.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.fsockopen.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.fsockopen.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Open Internet or Unix domain socket connection" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: fsockopen - Manual" />
<meta name="twitter:description" content="Open Internet or Unix domain socket connection" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: fsockopen - Manual" />
<meta itemprop="description" content="Open Internet or Unix domain socket connection" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Open Internet or Unix domain socket connection" />

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
        <a href="function.gethostbyaddr.php">
          gethostbyaddr &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.dns-get-record.php">
          &laquo; dns_get_record        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.network.php'>Network</a></li>      <li><a href='ref.network.php'>Network Functions</a></li>      </ul>
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
            <option value='en/function.fsockopen.php' selected="selected">English</option>
            <option value='de/function.fsockopen.php'>German</option>
            <option value='es/function.fsockopen.php'>Spanish</option>
            <option value='fr/function.fsockopen.php'>French</option>
            <option value='it/function.fsockopen.php'>Italian</option>
            <option value='ja/function.fsockopen.php'>Japanese</option>
            <option value='pt_BR/function.fsockopen.php'>Brazilian Portuguese</option>
            <option value='ru/function.fsockopen.php'>Russian</option>
            <option value='tr/function.fsockopen.php'>Turkish</option>
            <option value='uk/function.fsockopen.php'>Ukrainian</option>
            <option value='zh/function.fsockopen.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.fsockopen" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">fsockopen</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">fsockopen</span> &mdash; <span class="dc-title">Open Internet or Unix domain socket connection</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.fsockopen-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>fsockopen</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$hostname</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$port</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$error_code</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter reference">&$error_message</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$timeout</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Initiates a socket connection to the resource specified by
   <code class="parameter">hostname</code>.
  </p>
  <p class="para">
   PHP supports targets in the Internet and Unix domains as described in
   <a href="transports.php" class="xref">List of Supported Socket Transports</a>.  A list of supported transports can also be
   retrieved using <span class="function"><a href="function.stream-get-transports.php" class="function">stream_get_transports()</a></span>.
  </p>
  <p class="para">
   The socket will by default be opened in blocking mode.  You can
   switch it to non-blocking mode by using
   <span class="function"><a href="function.stream-set-blocking.php" class="function">stream_set_blocking()</a></span>.
  </p>
  <p class="para">
   The function <span class="function"><a href="function.stream-socket-client.php" class="function">stream_socket_client()</a></span> is similar but
   provides a richer set of options, including non-blocking connection and the
   ability to provide a stream context.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.fsockopen-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">hostname</code></dt>
     <dd>
      <p class="para">
       If OpenSSL support <a href="openssl.installation.php" class="link">is
       installed</a>, you may prefix the <code class="parameter">hostname</code>
       with either <code class="literal">ssl://</code> or <code class="literal">tls://</code> to
       use an SSL or TLS client connection over TCP/IP to connect to the
       remote host.
      </p>
     </dd>
    
    
     <dt><code class="parameter">port</code></dt>
     <dd>
      <p class="para">
       The port number. This can be omitted and skipped with
       <code class="literal">-1</code> for transports that do not use ports, such as
       <code class="literal">unix://</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">error_code</code></dt>
     <dd>
      <p class="para">
       If provided, holds the system level error number that occurred in the
       system-level <code class="literal">connect()</code> call.
      </p>
      <p class="para">
       If the value returned in <code class="parameter">error_code</code> is
       <code class="literal">0</code> and the function returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, it is an
       indication that the error occurred before the 
       <code class="literal">connect()</code> call. This is most likely due to a
       problem initializing the socket.
      </p>
     </dd>
    
    
     <dt><code class="parameter">error_message</code></dt>
     <dd>
      <p class="para">
       The error message as a string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">timeout</code></dt>
     <dd>
      <p class="para">
       The connection timeout, in seconds. When <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the
       <a href="filesystem.configuration.php#ini.default-socket-timeout" class="link">default_socket_timeout</a> <var class="filename">php.ini</var> setting is used.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        If you need to set a timeout for reading/writing data over the
        socket, use <span class="function"><a href="function.stream-set-timeout.php" class="function">stream_set_timeout()</a></span>, as the
        <code class="parameter">timeout</code> parameter to
        <span class="function"><strong>fsockopen()</strong></span> only applies while connecting the
        socket.
       </p>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.fsockopen-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>fsockopen()</strong></span> returns a file pointer which may be used
   together with the other file functions (such as
   <span class="function"><a href="function.fgets.php" class="function">fgets()</a></span>, <span class="function"><a href="function.fgetss.php" class="function">fgetss()</a></span>,
   <span class="function"><a href="function.fwrite.php" class="function">fwrite()</a></span>, <span class="function"><a href="function.fclose.php" class="function">fclose()</a></span>, and
   <span class="function"><a href="function.feof.php" class="function">feof()</a></span>). If the call fails, it will return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
  </p>
 </div>

 <div class="refsect1 errors" id="refsect1-function.fsockopen-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> if <code class="parameter">hostname</code> is
   not a valid domain.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.fsockopen-changelog">
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
       <code class="parameter">timeout</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.fsockopen-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4717">
    <p><strong>Example #1 <span class="function"><strong>fsockopen()</strong></span> Example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fsockopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"www.example.com"</span><span style="color: #007700">, </span><span style="color: #0000BB">80</span><span style="color: #007700">, </span><span style="color: #0000BB">$errno</span><span style="color: #007700">, </span><span style="color: #0000BB">$errstr</span><span style="color: #007700">, </span><span style="color: #0000BB">30</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$fp</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$errstr</span><span style="color: #DD0000"> (</span><span style="color: #0000BB">$errno</span><span style="color: #DD0000">)&lt;br /&gt;\n"</span><span style="color: #007700">;<br />} else {<br />    </span><span style="color: #0000BB">$out </span><span style="color: #007700">= </span><span style="color: #DD0000">"GET / HTTP/1.1\r\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$out </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Host: www.example.com\r\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$out </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Connection: Close\r\n\r\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">$out</span><span style="color: #007700">);<br />    while (!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">)) {<br />        echo </span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">128</span><span style="color: #007700">);<br />    }<br />    </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-4718">
    <p><strong>Example #2 Using UDP connection</strong></p>
    <div class="example-contents"><p>
     The example below shows how to retrieve the day and time from the UDP
     service &quot;daytime&quot; (port 13) in your own machine.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fsockopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"udp://127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #0000BB">13</span><span style="color: #007700">, </span><span style="color: #0000BB">$errno</span><span style="color: #007700">, </span><span style="color: #0000BB">$errstr</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$fp</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"ERROR: </span><span style="color: #0000BB">$errno</span><span style="color: #DD0000"> - </span><span style="color: #0000BB">$errstr</span><span style="color: #DD0000">&lt;br /&gt;\n"</span><span style="color: #007700">;<br />} else {<br />    </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">);<br />    echo </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">26</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.fsockopen-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Depending on the environment, the Unix domain or the optional
    connect timeout may not be available.
   </p>
  </p></blockquote>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    UDP sockets will sometimes appear to have opened without an error,
    even if the remote host is unreachable.  The error will only
    become apparent when you read or write data to/from the socket.
    The reason for this is because UDP is a &quot;connectionless&quot; protocol,
    which means that the operating system does not try to establish
    a link for the socket until it actually needs to send or receive data.
   </p>
  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">When specifying a numerical IPv6 address
(e.g. <code class="literal">fe80::1</code>), you must enclose the IP in square
brackets—for example, <code class="literal">tcp://[fe80::1]:80</code>.</span></p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.fsockopen-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pfsockopen.php" class="function" rel="rdfs-seeAlso">pfsockopen()</a> - Open persistent Internet or Unix domain socket connection</span></li>
    <li><span class="function"><a href="function.stream-socket-client.php" class="function" rel="rdfs-seeAlso">stream_socket_client()</a> - Open Internet or Unix domain socket connection</span></li>
    <li><span class="function"><a href="function.stream-set-blocking.php" class="function" rel="rdfs-seeAlso">stream_set_blocking()</a> - Set blocking/non-blocking mode on a stream</span></li>
    <li><span class="function"><a href="function.stream-set-timeout.php" class="function" rel="rdfs-seeAlso">stream_set_timeout()</a> - Set timeout period on a stream</span></li>
    <li><span class="function"><a href="function.fgets.php" class="function" rel="rdfs-seeAlso">fgets()</a> - Gets line from file pointer</span></li>
    <li><span class="function"><a href="function.fgetss.php" class="function" rel="rdfs-seeAlso">fgetss()</a> - Gets line from file pointer and strip HTML tags</span></li>
    <li><span class="function"><a href="function.fwrite.php" class="function" rel="rdfs-seeAlso">fwrite()</a> - Binary-safe file write</span></li>
    <li><span class="function"><a href="function.fclose.php" class="function" rel="rdfs-seeAlso">fclose()</a> - Closes an open file pointer</span></li>
    <li><span class="function"><a href="function.feof.php" class="function" rel="rdfs-seeAlso">feof()</a> - Tests for end-of-file on a file pointer</span></li>
    <li><span class="function"><a href="function.socket-connect.php" class="function" rel="rdfs-seeAlso">socket_connect()</a> - Initiates a connection on a socket</span></li>
    <li>The <a href="ref.curl.php" class="link">Curl extension</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/network/functions/fsockopen.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.fsockopen%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.fsockopen&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fsockopen.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">42 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="34887">  <div class="votes">
    <div id="Vu34887">
    <a href="/manual/vote-note.php?id=34887&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34887">
    <a href="/manual/vote-note.php?id=34887&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34887" title="70% like this...">
    27
    </div>
  </div>
  <a href="#34887" class="name">
  <strong class="user"><em>joe at edwardsconsultants dot com</em></strong></a><a class="genanchor" href="#34887"> &para;</a><div class="date" title="2003-08-10 02:56"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34887">
<div class="phpcode"><code><span class="html">just a quick note for users attempting https and thinking they must resort to curl or alternate methods -
<br />you can use fsockopen, just read the docs closely.  basically they are saying to use 'ssl://' for a HTTPS (SSL) web request.
<br />
<br />so this would work for authorize.net, and others; even for that paypal IPN - however I think it would be best to leave the site and deal with paypal's form:
<br />
<br /><span class="default">&lt;?php
<br />$host </span><span class="keyword">= </span><span class="string">"something.example.com"</span><span class="keyword">;
<br /></span><span class="default">$port </span><span class="keyword">= </span><span class="default">443</span><span class="keyword">;
<br /></span><span class="default">$path </span><span class="keyword">= </span><span class="string">"/the/url/path/file.php"</span><span class="keyword">; </span><span class="comment">//or .dll, etc. for authnet, etc.
<br />
<br />//you will need to setup an array of fields to post with
<br />//then create the post string
<br /></span><span class="default">$formdata </span><span class="keyword">= array ( </span><span class="string">"x_field" </span><span class="keyword">=&gt; </span><span class="string">"somevalue"</span><span class="keyword">);
<br /></span><span class="comment">//build the post string
<br />  </span><span class="keyword">foreach(</span><span class="default">$formdata </span><span class="keyword">AS </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">){
<br />    </span><span class="default">$poststring </span><span class="keyword">.= </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) . </span><span class="string">"=" </span><span class="keyword">. </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) . </span><span class="string">"&amp;"</span><span class="keyword">;
<br />  }
<br /></span><span class="comment">// strip off trailing ampersand
<br /></span><span class="default">$poststring </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$poststring</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);
<br />
<br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="string">"ssl://"</span><span class="keyword">.</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">30</span><span class="keyword">);
<br />
<br />if(!</span><span class="default">$fp</span><span class="keyword">){
<br /> </span><span class="comment">//error tell us
<br /> </span><span class="keyword">echo </span><span class="string">"</span><span class="default">$errstr</span><span class="string"> (</span><span class="default">$errno</span><span class="string">)\n"</span><span class="keyword">;
<br />   
<br />}else{
<br />
<br />  </span><span class="comment">//send the server request
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"POST </span><span class="default">$path</span><span class="string"> HTTP/1.1\r\n"</span><span class="keyword">);
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"Host: </span><span class="default">$host</span><span class="string">\r\n"</span><span class="keyword">);
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"Content-type: application/x-www-form-urlencoded\r\n"</span><span class="keyword">);
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"Content-length: "</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$poststring</span><span class="keyword">).</span><span class="string">"\r\n"</span><span class="keyword">);
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"Connection: close\r\n\r\n"</span><span class="keyword">);
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$poststring </span><span class="keyword">. </span><span class="string">"\r\n\r\n"</span><span class="keyword">);
<br />
<br />  </span><span class="comment">//loop through the response from the server
<br />  </span><span class="keyword">while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {
<br />    echo </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);
<br />  }
<br />  </span><span class="comment">//close fp - we are done with it
<br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="39868">  <div class="votes">
    <div id="Vu39868">
    <a href="/manual/vote-note.php?id=39868&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39868">
    <a href="/manual/vote-note.php?id=39868&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39868" title="70% like this...">
    15
    </div>
  </div>
  <a href="#39868" class="name">
  <strong class="user"><em>sir_reality2001 at yahoo dot com</em></strong></a><a class="genanchor" href="#39868"> &para;</a><div class="date" title="2004-02-13 09:45"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39868">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">// This script is an example of posting multiple files using 
<br />// fsockopen.
<br />// The tricky part is making sure the HTTP headers and file boundaries are acceptable to the target webserver.
<br />// This script is for example purposes only and could/should be improved upon.
<br />
<br /></span><span class="default">$host</span><span class="keyword">=</span><span class="string">'targethost'</span><span class="keyword">;
<br /></span><span class="default">$port</span><span class="keyword">=</span><span class="default">80</span><span class="keyword">;
<br /></span><span class="default">$path</span><span class="keyword">=</span><span class="string">'/test/socket/file_upload/receive_files.php'</span><span class="keyword">;
<br />
<br /></span><span class="comment">// the file you want to upload 
<br /></span><span class="default">$file_array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"dingoboy.gif"</span><span class="keyword">; </span><span class="comment">// the file 
<br /></span><span class="default">$file_array</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="string">"dingoboy2.gif"</span><span class="keyword">; </span><span class="comment">// the file 
<br /></span><span class="default">$file_array</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="string">"dingoboy3.gif"</span><span class="keyword">; </span><span class="comment">// the file 
<br /></span><span class="default">$content_type </span><span class="keyword">= </span><span class="string">"image/gif"</span><span class="keyword">; </span><span class="comment">// the file mime type
<br />//$content_type = "text/plain";
<br />//echo "file_array[0]:$file_array[0]&lt;br&gt;&lt;br&gt;";
<br />
<br /></span><span class="default">srand</span><span class="keyword">((double)</span><span class="default">microtime</span><span class="keyword">()*</span><span class="default">1000000</span><span class="keyword">);
<br /></span><span class="default">$boundary </span><span class="keyword">= </span><span class="string">"---------------------------"</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">md5</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">32000</span><span class="keyword">)),</span><span class="default">0</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);
<br />
<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="string">"--</span><span class="default">$boundary</span><span class="string">"</span><span class="keyword">;
<br />
<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$file_array</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++){
<br />   </span><span class="default">$content_file </span><span class="keyword">= </span><span class="default">join</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">, </span><span class="default">file</span><span class="keyword">(</span><span class="default">$file_array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]));
<br />
<br />   </span><span class="default">$data</span><span class="keyword">.=</span><span class="string">"
<br />Content-Disposition: form-data; name=\"file"</span><span class="keyword">.(</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">).</span><span class="string">"\"; filename=\"</span><span class="default">$file_array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]</span><span class="string">\"
<br />Content-Type: </span><span class="default">$content_type</span><span class="string"> 
<br />
<br /></span><span class="default">$content_file</span><span class="string">
<br />--</span><span class="default">$boundary</span><span class="string">"</span><span class="keyword">;
<br />
<br />}
<br />
<br /></span><span class="default">$data</span><span class="keyword">.=</span><span class="string">"--\r\n\r\n"</span><span class="keyword">;
<br />
<br /></span><span class="default">$msg </span><span class="keyword">=
<br /></span><span class="string">"POST </span><span class="default">$path</span><span class="string"> HTTP/1.0
<br />Content-Type: multipart/form-data; boundary=</span><span class="default">$boundary</span><span class="string">
<br />Content-Length: "</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">).</span><span class="string">"\r\n\r\n"</span><span class="keyword">;
<br />
<br /></span><span class="default">$result</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;
<br />
<br /></span><span class="comment">// open the connection
<br /></span><span class="default">$f </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);
<br />
<br /></span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">$msg</span><span class="keyword">.</span><span class="default">$data</span><span class="keyword">);
<br />
<br /></span><span class="comment">// get the response
<br /></span><span class="keyword">while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">)) </span><span class="default">$result </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">32000</span><span class="keyword">);
<br />
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72674">  <div class="votes">
    <div id="Vu72674">
    <a href="/manual/vote-note.php?id=72674&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72674">
    <a href="/manual/vote-note.php?id=72674&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72674" title="64% like this...">
    11
    </div>
  </div>
  <a href="#72674" class="name">
  <strong class="user"><em>ryan1_00 at hotmail dot com</em></strong></a><a class="genanchor" href="#72674"> &para;</a><div class="date" title="2007-01-29 07:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72674">
<div class="phpcode"><code><span class="html">This script checks specific ports so you need to have the correct port open on the server for this to work.
<br />
<br />E.g if i have a windows domain controller and it is servering LDAP then the following would be used to check it is online:
<br /><span class="default">&lt;?php
<br />chkServer</span><span class="keyword">(</span><span class="string">"MyDC"</span><span class="keyword">, </span><span class="string">"389"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />for a webserver:
<br /><span class="default">&lt;?php
<br />chkServer</span><span class="keyword">(</span><span class="string">"MyWebSvr"</span><span class="keyword">, </span><span class="string">"80"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />etc etc
<br />--------------------------------------------------------
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// check if a server is up by connecting to a port
<br /></span><span class="keyword">function </span><span class="default">chkServer</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">)
<br />{   
<br />    </span><span class="default">$hostip </span><span class="keyword">= @</span><span class="default">gethostbyname</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">); </span><span class="comment">// resloves IP from Hostname returns hostname on failure
<br />    
<br />    </span><span class="keyword">if (</span><span class="default">$hostip </span><span class="keyword">== </span><span class="default">$host</span><span class="keyword">) </span><span class="comment">// if the IP is not resloved
<br />    </span><span class="keyword">{
<br />        echo </span><span class="string">"Server is down or does not exist"</span><span class="keyword">;
<br />    }
<br />    else
<br />    {
<br />        if (!</span><span class="default">$x </span><span class="keyword">= @</span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$hostip</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">)) </span><span class="comment">// attempt to connect
<br />        </span><span class="keyword">{
<br />            echo </span><span class="string">"Server is down"</span><span class="keyword">;
<br />        }
<br />        else 
<br />        {
<br />            echo </span><span class="string">"Server is up"</span><span class="keyword">;
<br />            if (</span><span class="default">$x</span><span class="keyword">)
<br />            {
<br />                @</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">); </span><span class="comment">//close connection
<br />            </span><span class="keyword">}
<br />        }  
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80066">  <div class="votes">
    <div id="Vu80066">
    <a href="/manual/vote-note.php?id=80066&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80066">
    <a href="/manual/vote-note.php?id=80066&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80066" title="75% like this...">
    2
    </div>
  </div>
  <a href="#80066" class="name">
  <strong class="user"><em>huli0401 at gmail dot com</em></strong></a><a class="genanchor" href="#80066"> &para;</a><div class="date" title="2007-12-27 09:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80066">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">// Check for new version
<br />    </span><span class="default">$current_version </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">, </span><span class="string">'1.0.00'</span><span class="keyword">);
<br />    </span><span class="default">$minor_revision </span><span class="keyword">= (int) </span><span class="default">$current_version</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];
<br />
<br />    </span><span class="default">$errno </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$errstr </span><span class="keyword">= </span><span class="default">$version_info </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">$fsock </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="string">"www.exanmple.eu"</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">))
<br />    {
<br />        @</span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fsock</span><span class="keyword">, </span><span class="string">"GET /ver.txt HTTP/1.1\r\n"</span><span class="keyword">);
<br />        @</span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fsock</span><span class="keyword">, </span><span class="string">"HOST: www.example.eu\r\n"</span><span class="keyword">);
<br />        @</span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fsock</span><span class="keyword">, </span><span class="string">"Connection: close\r\n\r\n"</span><span class="keyword">);
<br />
<br />        </span><span class="default">$get_info </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />        while (!@</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fsock</span><span class="keyword">))
<br />        {
<br />            if (</span><span class="default">$get_info</span><span class="keyword">)
<br />            {
<br />                </span><span class="default">$version_info </span><span class="keyword">.= @</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fsock</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);
<br />            }
<br />            else
<br />            {
<br />                if (@</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fsock</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">) == </span><span class="string">"\r\n"</span><span class="keyword">)
<br />                {
<br />                    </span><span class="default">$get_info </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />                }
<br />            }
<br />        }
<br />        @</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fsock</span><span class="keyword">);
<br />
<br />        </span><span class="default">$version_info </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$version_info</span><span class="keyword">);
<br />        </span><span class="default">$latest_head_revision </span><span class="keyword">= (int) </span><span class="default">$version_info</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />        </span><span class="default">$latest_minor_revision </span><span class="keyword">= (int) </span><span class="default">$version_info</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];
<br />        </span><span class="default">$latest_version </span><span class="keyword">= (int) </span><span class="default">$version_info</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] . </span><span class="string">'.' </span><span class="keyword">. (int) </span><span class="default">$version_info</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="string">'.' </span><span class="keyword">. (int) </span><span class="default">$version_info</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];
<br />
<br />        if (</span><span class="default">$latest_head_revision </span><span class="keyword">== </span><span class="default">2 </span><span class="keyword">&amp;&amp; </span><span class="default">$minor_revision </span><span class="keyword">== </span><span class="default">$latest_minor_revision</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$version_info </span><span class="keyword">= </span><span class="string">'&lt;p style="color:green"&gt;OK&lt;/p&gt;'</span><span class="keyword">;
<br />        }
<br />        else
<br />        {
<br />            </span><span class="default">$version_info </span><span class="keyword">= </span><span class="string">'&lt;p style="color:red"&gt;neaktualne'</span><span class="keyword">;
<br />            </span><span class="default">$version_info </span><span class="keyword">.= </span><span class="string">'&lt;br /&gt;'</span><span class="default">Latest_version_info</span><span class="string">' . $latest_version) . ' ' . sprintf(Current_version_info'</span><span class="keyword">. </span><span class="string">'1.0.00'</span><span class="keyword">) . </span><span class="string">'&lt;/p&gt;'</span><span class="keyword">;
<br />        }
<br />    }
<br />    else
<br />    {
<br />        if (</span><span class="default">$errstr</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$version_info </span><span class="keyword">= </span><span class="string">'&lt;p style="color:red"&gt;' </span><span class="keyword">. </span><span class="default">sprintf</span><span class="keyword">(</span><span class="default">Connect_socket_error</span><span class="keyword">) . </span><span class="string">'&lt;/p&gt;'</span><span class="keyword">;
<br />        }
<br />        else
<br />        {
<br />            </span><span class="default">$version_info </span><span class="keyword">= </span><span class="string">'&lt;p&gt;'</span><span class="default">Socket_functions_disabled</span><span class="string">'&lt;/p&gt;'</span><span class="keyword">;
<br />        }
<br />    }
<br />    
<br />    </span><span class="default">$version_info </span><span class="keyword">.= </span><span class="string">'&lt;p&gt;'</span><span class="default">Mailing_list_subscribe_reminder</span><span class="string">'&lt;/p&gt;'</span><span class="keyword">;
<br />
<br />echo </span><span class="default">$version_info</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52966">  <div class="votes">
    <div id="Vu52966">
    <a href="/manual/vote-note.php?id=52966&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52966">
    <a href="/manual/vote-note.php?id=52966&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52966" title="69% like this...">
    5
    </div>
  </div>
  <a href="#52966" class="name">
  <strong class="user"><em>richard dot lajaunie at cote-azur dot cci dot fr</em></strong></a><a class="genanchor" href="#52966"> &para;</a><div class="date" title="2005-05-19 12:10"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52966">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">/************************************************************
<br />* Author: Richard Lajaunie
<br />* Mail : richard.lajaunie@cote-azur.cci.fr
<br />*
<br />* subject : this script retreive all mac-addresses on all ports
<br />* of a Cisco 3548 Switch by a telnet connection
<br />*
<br />* base on the script by: xbensemhoun at t-systems dot fr
<br />**************************************************************/
<br />
<br /></span><span class="keyword">if ( </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$argv</span><span class="keyword">) ){
<br />   </span><span class="default">$cfgServer </span><span class="keyword">= </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />}else{
<br />   echo </span><span class="string">"ex: 'php test.php 10.0.0.0' \n"</span><span class="keyword">;
<br />   exit;
<br />}
<br />
<br /></span><span class="default">$cfgPort    </span><span class="keyword">= </span><span class="default">23</span><span class="keyword">;                </span><span class="comment">//port, 22 if SSH
<br /></span><span class="default">$cfgTimeOut </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;
<br />
<br /></span><span class="default">$usenet </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$cfgServer</span><span class="keyword">, </span><span class="default">$cfgPort</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">), </span><span class="default">$cfgTimeOut</span><span class="keyword">);
<br />
<br />if(!</span><span class="default">$usenet</span><span class="keyword">){
<br />       echo </span><span class="string">"Connexion failed\n"</span><span class="keyword">;
<br />       exit();
<br />}else{
<br />       echo </span><span class="string">"Connected\n"</span><span class="keyword">;
<br />       </span><span class="default">fputs </span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="string">"password\r\n"</span><span class="keyword">);
<br />       </span><span class="default">fputs </span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="string">"en\r\n"</span><span class="keyword">);
<br />       </span><span class="default">fputs </span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="string">"password\r\n"</span><span class="keyword">);
<br />       </span><span class="default">fputs </span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="string">"sh mac-address-table\r\n"</span><span class="keyword">);
<br />       </span><span class="default">fputs </span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">); </span><span class="comment">// this space bar is this for long output
<br />      
<br />       // this skip non essential text
<br />       </span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />       while (</span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">16</span><span class="keyword">){
<br />       </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">);
<br />       </span><span class="default">$j</span><span class="keyword">++;
<br />       }
<br />   </span><span class="default">stream_set_timeout</span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// set the timeout for the fgets
<br />   </span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />       while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">)){
<br />       </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">);
<br />       </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\r"</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$ret</span><span class="keyword">);
<br />       </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$ret</span><span class="keyword">);
<br />       if  (</span><span class="default">ereg</span><span class="keyword">(</span><span class="string">"FastEthernet"</span><span class="keyword">, </span><span class="default">$ret</span><span class="keyword">)){
<br />           echo </span><span class="string">"</span><span class="default">$ret</span><span class="string"> \n"</span><span class="keyword">;
<br />       }
<br />       if (</span><span class="default">ereg</span><span class="keyword">(</span><span class="string">'--More--'</span><span class="keyword">, </span><span class="default">$ret</span><span class="keyword">) ){
<br />           </span><span class="default">fputs </span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">); </span><span class="comment">// for following page
<br />       </span><span class="keyword">}
<br />       </span><span class="default">$info </span><span class="keyword">= </span><span class="default">stream_get_meta_data</span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">);
<br />       if (</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'timed_out'</span><span class="keyword">]) {
<br />           </span><span class="default">$j</span><span class="keyword">++;
<br />       }
<br />       if (</span><span class="default">$j </span><span class="keyword">&gt;</span><span class="default">2</span><span class="keyword">){
<br />           </span><span class="default">fputs </span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="string">"lo"</span><span class="keyword">);
<br />           break;
<br />       }
<br />   }
<br />}
<br />echo </span><span class="string">"End.\r\n"</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91668">  <div class="votes">
    <div id="Vu91668">
    <a href="/manual/vote-note.php?id=91668&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91668">
    <a href="/manual/vote-note.php?id=91668&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91668" title="64% like this...">
    5
    </div>
  </div>
  <a href="#91668" class="name">
  <strong class="user"><em>ghzero at ghzero dot de</em></strong></a><a class="genanchor" href="#91668"> &para;</a><div class="date" title="2009-06-22 05:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91668">
<div class="phpcode"><code><span class="html">note:<br />the default protocol - if not given - seems to be tcp://</span></code></div>
  </div>
 </div>
  <div class="note" id="58196">  <div class="votes">
    <div id="Vu58196">
    <a href="/manual/vote-note.php?id=58196&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58196">
    <a href="/manual/vote-note.php?id=58196&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58196" title="64% like this...">
    5
    </div>
  </div>
  <a href="#58196" class="name">
  <strong class="user"><em>Kiki_EF</em></strong></a><a class="genanchor" href="#58196"> &para;</a><div class="date" title="2005-10-27 12:20"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58196">
<div class="phpcode"><code><span class="html">Additional ICQ status request over proxy
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">icq_uin</span><span class="keyword">(</span><span class="default">$uin</span><span class="keyword">)
<br />{
<br />    if (! </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$uin</span><span class="keyword">))
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    </span><span class="default">$proxy_name </span><span class="keyword">= </span><span class="string">'proxy.mydomain.de'</span><span class="keyword">;
<br />    </span><span class="default">$proxy_port </span><span class="keyword">= </span><span class="default">8080</span><span class="keyword">;
<br />    </span><span class="default">$proxy_user </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />    </span><span class="default">$proxy_pass </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />    </span><span class="default">$proxy_cont </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    </span><span class="default">$request_url </span><span class="keyword">= </span><span class="string">"<a href="http://status.icq.com/online.gif?icq=" rel="nofollow" target="_blank">http://status.icq.com/online.gif?icq=</a></span><span class="default">$uin</span><span class="string">"</span><span class="keyword">;
<br />
<br />    </span><span class="default">$proxy_fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$proxy_name</span><span class="keyword">, </span><span class="default">$proxy_port</span><span class="keyword">);
<br />    if (!</span><span class="default">$proxy_fp</span><span class="keyword">)
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$proxy_fp</span><span class="keyword">, </span><span class="string">"GET </span><span class="default">$request_url</span><span class="string"> HTTP/1.0\r\nHost: </span><span class="default">$proxy_name</span><span class="string">\r\n"</span><span class="keyword">);
<br />    </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$proxy_fp</span><span class="keyword">, </span><span class="string">"Proxy-Authorization: Basic "</span><span class="keyword">. </span><span class="default">base64_encode </span><span class="keyword">(</span><span class="string">"</span><span class="default">$proxy_user</span><span class="string">:</span><span class="default">$proxy_pass</span><span class="string">"</span><span class="keyword">).</span><span class="string">"\r\n\r\n"</span><span class="keyword">);
<br />    while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$proxy_fp</span><span class="keyword">)){
<br />        </span><span class="default">$proxy_cont </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$proxy_fp</span><span class="keyword">,</span><span class="default">4096</span><span class="keyword">);
<br />    }
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$proxy_fp</span><span class="keyword">);
<br />    </span><span class="default">$proxy_cont </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$proxy_cont</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$proxy_cont</span><span class="keyword">,</span><span class="string">"\r\n\r\n"</span><span class="keyword">)+</span><span class="default">4</span><span class="keyword">);
<br />    if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$proxy_cont</span><span class="keyword">, </span><span class="string">'online1'</span><span class="keyword">))
<br />        return </span><span class="string">'online'</span><span class="keyword">;
<br />    if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$proxy_cont</span><span class="keyword">, </span><span class="string">'online0'</span><span class="keyword">))
<br />        return </span><span class="string">'offline'</span><span class="keyword">;
<br />    if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$proxy_cont</span><span class="keyword">, </span><span class="string">'online2'</span><span class="keyword">))
<br />        return </span><span class="string">'disabled'</span><span class="keyword">;
<br />}
<br />echo </span><span class="string">"User is "</span><span class="keyword">.</span><span class="default">icq_uin</span><span class="keyword">(</span><span class="default">123456789012345</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Thanx
<br />
<br />[EDIT BY danbrown AT php DOT net: Based on code provided in a note by (rafaelbc AT matrix DOT com DOT br) on 23-MAY-09, which has since been removed.]</span></code></div>
  </div>
 </div>
  <div class="note" id="47845">  <div class="votes">
    <div id="Vu47845">
    <a href="/manual/vote-note.php?id=47845&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47845">
    <a href="/manual/vote-note.php?id=47845&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47845" title="66% like this...">
    3
    </div>
  </div>
  <a href="#47845" class="name">
  <strong class="user"><em>edwin at bitstorm dot org</em></strong></a><a class="genanchor" href="#47845"> &para;</a><div class="date" title="2004-12-02 05:50"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47845">
<div class="phpcode"><code><span class="html">Here's a function to just fetch the contents behind an URL.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fetchURL</span><span class="keyword">( </span><span class="default">$url </span><span class="keyword">) {<br />    </span><span class="default">$url_parsed </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />    </span><span class="default">$host </span><span class="keyword">= </span><span class="default">$url_parsed</span><span class="keyword">[</span><span class="string">"host"</span><span class="keyword">];<br />    </span><span class="default">$port </span><span class="keyword">= </span><span class="default">$url_parsed</span><span class="keyword">[</span><span class="string">"port"</span><span class="keyword">];<br />    if (</span><span class="default">$port</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">)<br />        </span><span class="default">$port </span><span class="keyword">= </span><span class="default">80</span><span class="keyword">;<br />    </span><span class="default">$path </span><span class="keyword">= </span><span class="default">$url_parsed</span><span class="keyword">[</span><span class="string">"path"</span><span class="keyword">];<br />    if (</span><span class="default">$url_parsed</span><span class="keyword">[</span><span class="string">"query"</span><span class="keyword">] != </span><span class="string">""</span><span class="keyword">)<br />        </span><span class="default">$path </span><span class="keyword">.= </span><span class="string">"?"</span><span class="keyword">.</span><span class="default">$url_parsed</span><span class="keyword">[</span><span class="string">"query"</span><span class="keyword">];<br /><br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="string">"GET </span><span class="default">$path</span><span class="string"> HTTP/1.0\r\nHost: </span><span class="default">$host</span><span class="string">\r\n\r\n"</span><span class="keyword">;<br /><br />    </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">);<br /><br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$out</span><span class="keyword">);<br />    </span><span class="default">$body </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {<br />        </span><span class="default">$s </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br />        if ( </span><span class="default">$body </span><span class="keyword">)<br />            </span><span class="default">$in </span><span class="keyword">.= </span><span class="default">$s</span><span class="keyword">;<br />        if ( </span><span class="default">$s </span><span class="keyword">== </span><span class="string">"\r\n" </span><span class="keyword">)<br />            </span><span class="default">$body </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />    <br />    return </span><span class="default">$in</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="46836">  <div class="votes">
    <div id="Vu46836">
    <a href="/manual/vote-note.php?id=46836&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46836">
    <a href="/manual/vote-note.php?id=46836&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46836" title="66% like this...">
    3
    </div>
  </div>
  <a href="#46836" class="name">
  <strong class="user"><em>michiel at parse dot nl</em></strong></a><a class="genanchor" href="#46836"> &para;</a><div class="date" title="2004-10-25 04:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46836">
<div class="phpcode"><code><span class="html">The following snippet allows you to retrieve the title of a page.
<br />
<br />Great for rewriting auto-url detectors to display the actual title rather then <a href="http://..." rel="nofollow" target="_blank">http://...</a>
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">echo </span><span class="default">get_url_title</span><span class="keyword">(</span><span class="string">"<a href="http://www.php.net/cal.php?id=409" rel="nofollow" target="_blank">http://www.php.net/cal.php?id=409</a>"</span><span class="keyword">);
<br />
<br />function </span><span class="default">get_url_title</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$url </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);
<br />
<br />    if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">[</span><span class="string">'scheme'</span><span class="keyword">],array(</span><span class="string">''</span><span class="keyword">,</span><span class="string">'http'</span><span class="keyword">)))
<br />        return;
<br />
<br />    </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fsockopen </span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">], (</span><span class="default">$url</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">] &gt; </span><span class="default">0 </span><span class="keyword">? </span><span class="default">$url</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">] : </span><span class="default">80</span><span class="keyword">), </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">);
<br />    if (!</span><span class="default">$fp</span><span class="keyword">)
<br />    {
<br />        return;
<br />        </span><span class="comment">// echo "$errstr ($errno)&lt;br&gt;\n";
<br />    </span><span class="keyword">}
<br />    else
<br />    {
<br />        </span><span class="default">fputs </span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"GET /"</span><span class="keyword">.</span><span class="default">$url</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">].(</span><span class="default">$url</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">] ? </span><span class="string">'?'</span><span class="keyword">.</span><span class="default">$url</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">] : </span><span class="string">''</span><span class="keyword">).</span><span class="string">" HTTP/1.0\r\nHost: "</span><span class="keyword">.</span><span class="default">$url</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">].</span><span class="string">"\r\n\r\n"</span><span class="keyword">);
<br />        </span><span class="default">$d </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />        while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))
<br />        {
<br />            </span><span class="default">$d </span><span class="keyword">.= </span><span class="default">fgets </span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">2048</span><span class="keyword">);
<br />
<br />            if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'~(&lt;/head&gt;|&lt;body&gt;|(&lt;title&gt;\s*(.*?)\s*&lt;/title&gt;))~i'</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">))
<br />                break;
<br />        }
<br />        </span><span class="default">fclose </span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />
<br />        return </span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124091">  <div class="votes">
    <div id="Vu124091">
    <a href="/manual/vote-note.php?id=124091&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124091">
    <a href="/manual/vote-note.php?id=124091&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124091" title="66% like this...">
    1
    </div>
  </div>
  <a href="#124091" class="name">
  <strong class="user"><em>GreenReaper</em></strong></a><a class="genanchor" href="#124091"> &para;</a><div class="date" title="2019-08-02 11:49"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124091">
<div class="phpcode"><code><span class="html">PHP (or OpenSSL) may not always choose to use e.g. TLS 1.2, but you can force it to with tlsv1.2://<br /><a href="https://docs.php.net/manual/en/migration56.openssl.php#migration56.openssl.crypto-method" rel="nofollow" target="_blank">https://docs.php.net/manual/en/migration56.openssl.php#migration56.openssl.crypto-method</a><br /><br />This was a great help to me, given Twitter's recent API changes to require TLS 1.2+.</span></code></div>
  </div>
 </div>
  <div class="note" id="56049">  <div class="votes">
    <div id="Vu56049">
    <a href="/manual/vote-note.php?id=56049&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56049">
    <a href="/manual/vote-note.php?id=56049&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56049" title="61% like this...">
    6
    </div>
  </div>
  <a href="#56049" class="name">
  <strong class="user"><em>robin at pozytron dot com</em></strong></a><a class="genanchor" href="#56049"> &para;</a><div class="date" title="2005-08-21 03:38"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56049">
<div class="phpcode"><code><span class="html">I have found, when using fsockopen() and the POST method, that using HTTP/1.1 is VERY significantly slower than HTTP/1.0 (at least for the server I'm querying, an Orion-based server). Also, using cURL tended to be faster than fsockopen(), though only slightly. For example, here was a recent set of data (for the same exact request in each case):
<br />
<br />cURL: 4.2sec
<br />fsockopen() HTTP/1.0: 4.9sec
<br />fsockopen() HTTP/1.1: 19.9sec (!)
<br />
<br />I'm not sure why this was occurring. Perhaps it has something to do with the Orion server, which I have little experience with. However, it was not a fluke, and I double-checked the code to make sure there were no errors.
<br />
<br />EDITORS NOTE: HTTP/1.1 uses persistent connection causing this delay. Use "Connection: close" header to disable it.</span></code></div>
  </div>
 </div>
  <div class="note" id="33888">  <div class="votes">
    <div id="Vu33888">
    <a href="/manual/vote-note.php?id=33888&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33888">
    <a href="/manual/vote-note.php?id=33888&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33888" title="63% like this...">
    5
    </div>
  </div>
  <a href="#33888" class="name">
  <strong class="user"><em>brage (a t) jeffnappi (d.o.t) commie</em></strong></a><a class="genanchor" href="#33888"> &para;</a><div class="date" title="2003-07-10 02:16"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33888">
<div class="phpcode"><code><span class="html">thought you guys may appreciate this function, allows you to pass an array of urls to download and does so simultaneously using non-blocking sockets, then returns the data in an array.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// function connects to an array of URLS at the same time
<br />// and returns an array of results.
<br />
<br /></span><span class="keyword">function </span><span class="default">multiHTTP </span><span class="keyword">(</span><span class="default">$urlArr</span><span class="keyword">) {
<br /> </span><span class="default">$sockets </span><span class="keyword">= Array(); </span><span class="comment">// socket array!
<br /> </span><span class="default">$urlInfo </span><span class="keyword">= Array(); </span><span class="comment">// info arr
<br /> </span><span class="default">$retDone </span><span class="keyword">= Array();
<br /> </span><span class="default">$retData </span><span class="keyword">= Array();
<br /> </span><span class="default">$errno   </span><span class="keyword">= Array();
<br /> </span><span class="default">$errstr  </span><span class="keyword">= Array();
<br /> for (</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$urlArr</span><span class="keyword">);</span><span class="default">$x</span><span class="keyword">++) {
<br />  </span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">] = </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$urlArr</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">]);
<br />  </span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">port</span><span class="keyword">] = (</span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">port</span><span class="keyword">]) ? </span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">port</span><span class="keyword">] : </span><span class="default">80</span><span class="keyword">;
<br />  </span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">path</span><span class="keyword">] = (</span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">path</span><span class="keyword">]) ? </span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">path</span><span class="keyword">] : </span><span class="string">"/"</span><span class="keyword">;
<br />  </span><span class="default">$sockets</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">] = </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">host</span><span class="keyword">], </span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">port</span><span class="keyword">],
<br />                           </span><span class="default">$errno</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">], </span><span class="default">$errstr</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">], </span><span class="default">30</span><span class="keyword">);
<br />  </span><span class="default">socket_set_blocking</span><span class="keyword">(</span><span class="default">$sockets</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">],</span><span class="default">FALSE</span><span class="keyword">);
<br />  </span><span class="default">$query </span><span class="keyword">= (</span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">query</span><span class="keyword">]) ? </span><span class="string">"?" </span><span class="keyword">. </span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">query</span><span class="keyword">] : </span><span class="string">""</span><span class="keyword">;
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$sockets</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">],</span><span class="string">"GET " </span><span class="keyword">. </span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">path</span><span class="keyword">] . </span><span class="string">"</span><span class="default">$query</span><span class="string"> HTTP/1.0\r\nHost: " </span><span class="keyword">.
<br />        </span><span class="default">$urlInfo</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">host</span><span class="keyword">] . </span><span class="string">"\r\n\r\n"</span><span class="keyword">);
<br /> }
<br /> </span><span class="comment">// ok read the data from each one
<br /> </span><span class="default">$done </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br /> while (!</span><span class="default">$done</span><span class="keyword">) {
<br />  for (</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$urlArr</span><span class="keyword">);</span><span class="default">$x</span><span class="keyword">++) {
<br />   if (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$sockets</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">])) {
<br />    if (</span><span class="default">$retData</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">]) {
<br />     </span><span class="default">$retData</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">] .= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$sockets</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">],</span><span class="default">128</span><span class="keyword">);
<br />    } else {
<br />     </span><span class="default">$retData</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">] = </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$sockets</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">],</span><span class="default">128</span><span class="keyword">);
<br />    }
<br />   } else {
<br />    </span><span class="default">$retDone</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;
<br />   }
<br />  }
<br />  </span><span class="default">$done </span><span class="keyword">= (</span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$retDone</span><span class="keyword">) == </span><span class="default">count</span><span class="keyword">(</span><span class="default">$urlArr</span><span class="keyword">));
<br /> }
<br /> return </span><span class="default">$retData</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75388">  <div class="votes">
    <div id="Vu75388">
    <a href="/manual/vote-note.php?id=75388&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75388">
    <a href="/manual/vote-note.php?id=75388&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75388" title="60% like this...">
    6
    </div>
  </div>
  <a href="#75388" class="name">
  <strong class="user"><em>Alexander Wegener</em></strong></a><a class="genanchor" href="#75388"> &para;</a><div class="date" title="2007-05-26 07:29"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75388">
<div class="phpcode"><code><span class="html">To check if a Url is Online (with http and https)<br />Using @fgets to hide Warning when using SSL<br />(Bug: "Warning: function.fgets SSL: fatal protocol error", <a href="http://bugs.php.net/bug.php?id=23220" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=23220</a>)<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">isOnline</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">) {<br />        if (!</span><span class="default">$url_info </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">)) {<br />            return </span><span class="default">false</span><span class="keyword">;    <br />        }<br />        <br />        switch (</span><span class="default">$url_info</span><span class="keyword">[</span><span class="string">'scheme'</span><span class="keyword">]) {<br />            case </span><span class="string">'https'</span><span class="keyword">:<br />                </span><span class="default">$scheme </span><span class="keyword">= </span><span class="string">'ssl://'</span><span class="keyword">;<br />                </span><span class="default">$port </span><span class="keyword">= </span><span class="default">443</span><span class="keyword">;<br />                break;<br />            case </span><span class="string">'http'</span><span class="keyword">:<br />            default:<br />                </span><span class="default">$scheme </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />                </span><span class="default">$port </span><span class="keyword">= </span><span class="default">80</span><span class="keyword">;    <br />        }<br />        <br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />        </span><span class="default">$fid </span><span class="keyword">= @</span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$scheme </span><span class="keyword">. </span><span class="default">$url_info</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">], </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">);<br />        if (</span><span class="default">$fid</span><span class="keyword">) {<br />            </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fid</span><span class="keyword">, </span><span class="string">'HEAD ' </span><span class="keyword">. (isset(</span><span class="default">$url_info</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">])? </span><span class="default">$url_info</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">]: </span><span class="string">'/'</span><span class="keyword">) . (isset(</span><span class="default">$url_info</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">])? </span><span class="string">'?' </span><span class="keyword">. </span><span class="default">$url_info</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">]: </span><span class="string">''</span><span class="keyword">) . </span><span class="string">" HTTP/1.0\r\n" </span><span class="keyword">. <br />                        </span><span class="string">"Connection: close\r\n" </span><span class="keyword">. <br />                        </span><span class="string">'Host: ' </span><span class="keyword">. </span><span class="default">$url_info</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">] . </span><span class="string">"\r\n\r\n"</span><span class="keyword">);    <br />            while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fid</span><span class="keyword">)) {<br />                </span><span class="default">$data </span><span class="keyword">.= @</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fid</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">);<br />            }<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fid</span><span class="keyword">);<br />            return !empty(</span><span class="default">$data</span><span class="keyword">);<br />        } else {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    } <br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76626">  <div class="votes">
    <div id="Vu76626">
    <a href="/manual/vote-note.php?id=76626&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76626">
    <a href="/manual/vote-note.php?id=76626&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76626" title="66% like this...">
    1
    </div>
  </div>
  <a href="#76626" class="name">
  <strong class="user"><em>bradland at umich dot edu</em></strong></a><a class="genanchor" href="#76626"> &para;</a><div class="date" title="2007-07-23 09:32"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76626">
<div class="phpcode"><code><span class="html">I was having trouble doing an https in fopen and with fsockopen where the address had ssl://.  I was getting error code 114 in the log.  After much research i found that there was some ssl conflict trouble with MySQL 5.0.20-5.0.33.  It had some functions that were interfering with openssl that showed up in the php install.<br /><br /><a href="http://bugs.mysql.com/bug.php?id=21930" rel="nofollow" target="_blank">http://bugs.mysql.com/bug.php?id=21930</a><br /><a href="http://bugs.mysql.com/bug.php?id=19289" rel="nofollow" target="_blank">http://bugs.mysql.com/bug.php?id=19289</a></span></code></div>
  </div>
 </div>
  <div class="note" id="72576">  <div class="votes">
    <div id="Vu72576">
    <a href="/manual/vote-note.php?id=72576&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72576">
    <a href="/manual/vote-note.php?id=72576&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72576" title="66% like this...">
    1
    </div>
  </div>
  <a href="#72576" class="name">
  <strong class="user"><em>v13+phpnet at it dot teithe dot gr</em></strong></a><a class="genanchor" href="#72576"> &para;</a><div class="date" title="2007-01-24 03:01"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72576">
<div class="phpcode"><code><span class="html">The following function performs pop3 authentication. Returns NULL on error, or true/false to indicate username/password matching:<br /><br />$address is the hostname of the server and $ssl is a boolean that indicates whether an SSL connection is requested.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">pop3authCheck</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">$address</span><span class="keyword">, </span><span class="default">$ssl</span><span class="keyword">)<br />{<br />    if (</span><span class="default">$ssl</span><span class="keyword">)<br />        </span><span class="default">$uri</span><span class="keyword">=</span><span class="string">"ssl://</span><span class="default">$address</span><span class="string">:995"</span><span class="keyword">;<br />    else<br />        </span><span class="default">$uri</span><span class="keyword">=</span><span class="string">"tcp://</span><span class="default">$address</span><span class="string">:110"</span><span class="keyword">;<br /><br />    </span><span class="default">$fp</span><span class="keyword">=</span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$uri</span><span class="keyword">);<br /><br />    if (!</span><span class="default">$fp</span><span class="keyword">)<br />        return(</span><span class="default">NULL</span><span class="keyword">);<br /><br />    </span><span class="default">$st</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">512</span><span class="keyword">);<br />    if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)!=</span><span class="string">"+OK"</span><span class="keyword">)<br />    {<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />        return(</span><span class="default">NULL</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$st</span><span class="keyword">=</span><span class="string">"USER </span><span class="default">$username</span><span class="string">\n"</span><span class="keyword">;<br />    if (</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$st</span><span class="keyword">)!=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">))<br />    {<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />        return(</span><span class="default">NULL</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$st</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">512</span><span class="keyword">);<br />    if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)!=</span><span class="string">"+OK"</span><span class="keyword">)<br />    {<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />        return(</span><span class="default">NULL</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$st</span><span class="keyword">=</span><span class="string">"PASS </span><span class="default">$password</span><span class="string">\n"</span><span class="keyword">;<br />    if (</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$st</span><span class="keyword">)!=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">))<br />    {<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />        return(</span><span class="default">NULL</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$st</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">512</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />    if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)==</span><span class="string">"+OK"</span><span class="keyword">)<br />        return(</span><span class="default">true</span><span class="keyword">);<br />    else if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">)==</span><span class="string">"+ERR"</span><span class="keyword">)<br />        return(</span><span class="default">false</span><span class="keyword">);<br />    else<br />        return(</span><span class="default">NULL</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62380">  <div class="votes">
    <div id="Vu62380">
    <a href="/manual/vote-note.php?id=62380&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62380">
    <a href="/manual/vote-note.php?id=62380&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62380" title="66% like this...">
    1
    </div>
  </div>
  <a href="#62380" class="name">
  <strong class="user"><em>Duukkis</em></strong></a><a class="genanchor" href="#62380"> &para;</a><div class="date" title="2006-02-27 05:13"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62380">
<div class="phpcode"><code><span class="html">Lots of tries and lots of reading http-headers...<br /><br />If you want to post $_POST vars and (in this case) one file named userfile to $remote_server and $remote_url.<br /><br /><span class="default">&lt;?php<br />        </span><span class="comment">// get the necessary data<br />        </span><span class="default">$file_name </span><span class="keyword">= </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">];     </span><span class="comment">// the file<br />        </span><span class="default">$tmp_name </span><span class="keyword">= </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">];     </span><span class="comment">// the file<br />        </span><span class="default">$content_type </span><span class="keyword">= </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'type'</span><span class="keyword">];     </span><span class="comment">// the file mime type<br />        <br />        </span><span class="default">srand</span><span class="keyword">((double)</span><span class="default">microtime</span><span class="keyword">()*</span><span class="default">1000000</span><span class="keyword">);<br />        </span><span class="default">$boundary </span><span class="keyword">= </span><span class="string">"---------------------"</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">md5</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">32000</span><span class="keyword">)),</span><span class="default">0</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br />        <br />        </span><span class="comment">// Build the header<br />        </span><span class="default">$header </span><span class="keyword">= </span><span class="string">"POST </span><span class="default">$remote_url</span><span class="string"> HTTP/1.0\r\n"</span><span class="keyword">;<br />        </span><span class="default">$header </span><span class="keyword">.= </span><span class="string">"Host: </span><span class="default">$remote_server</span><span class="string">\r\n"</span><span class="keyword">;<br />        </span><span class="default">$header </span><span class="keyword">.= </span><span class="string">"Content-type: multipart/form-data, boundary=</span><span class="default">$boundary</span><span class="string">\r\n"</span><span class="keyword">;<br />        </span><span class="comment">// attach post vars<br />        </span><span class="keyword">foreach(</span><span class="default">$_POST </span><span class="keyword">AS </span><span class="default">$index </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){<br />            </span><span class="default">$data </span><span class="keyword">.=</span><span class="string">"--</span><span class="default">$boundary</span><span class="string">\r\n"</span><span class="keyword">;<br />            </span><span class="default">$data </span><span class="keyword">.= </span><span class="string">"Content-Disposition: form-data; name=\""</span><span class="keyword">.</span><span class="default">$index</span><span class="keyword">.</span><span class="string">"\"\r\n"</span><span class="keyword">;<br />            </span><span class="default">$data </span><span class="keyword">.= </span><span class="string">"\r\n"</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">;<br />            </span><span class="default">$data </span><span class="keyword">.=</span><span class="string">"--</span><span class="default">$boundary</span><span class="string">\r\n"</span><span class="keyword">;<br />        }<br />        </span><span class="comment">// and attach the file<br />        </span><span class="default">$data </span><span class="keyword">.= </span><span class="string">"--</span><span class="default">$boundary</span><span class="string">\r\n"</span><span class="keyword">;<br />        </span><span class="default">$content_file </span><span class="keyword">= </span><span class="default">join</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">, </span><span class="default">file</span><span class="keyword">(</span><span class="default">$tmp_name</span><span class="keyword">));<br />        </span><span class="default">$data </span><span class="keyword">.=</span><span class="string">"Content-Disposition: form-data; name=\"userfile\"; filename=\"</span><span class="default">$file_name</span><span class="string">\"\r\n"</span><span class="keyword">;<br />        </span><span class="default">$data </span><span class="keyword">.= </span><span class="string">"Content-Type: </span><span class="default">$content_type</span><span class="string">\r\n\r\n"</span><span class="keyword">;<br />        </span><span class="default">$data </span><span class="keyword">.= </span><span class="string">""</span><span class="keyword">.</span><span class="default">$content_file</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">;<br />        </span><span class="default">$data </span><span class="keyword">.=</span><span class="string">"--</span><span class="default">$boundary</span><span class="string">--\r\n"</span><span class="keyword">;<br />        </span><span class="default">$header </span><span class="keyword">.= </span><span class="string">"Content-length: " </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) . </span><span class="string">"\r\n\r\n"</span><span class="keyword">;<br />                 </span><span class="comment">// Open the connection<br />        </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$remote_server</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">);<br />        </span><span class="comment">// then just <br />        </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">.</span><span class="default">$data</span><span class="keyword">);<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52033">  <div class="votes">
    <div id="Vu52033">
    <a href="/manual/vote-note.php?id=52033&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52033">
    <a href="/manual/vote-note.php?id=52033&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52033" title="63% like this...">
    3
    </div>
  </div>
  <a href="#52033" class="name">
  <strong class="user"><em>saul dot dobney at dobney dot com</em></strong></a><a class="genanchor" href="#52033"> &para;</a><div class="date" title="2005-04-19 08:40"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52033">
<div class="phpcode"><code><span class="html">If you are using fsockopen to access webpage, but come across a redirect (Location: ) in the header and want to find and follow the redirect as in this snippet:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {
<br />   </span><span class="default">$line</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);                
<br />   if (</span><span class="default">stristr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">,</span><span class="string">"location:"</span><span class="keyword">)!=</span><span class="string">""</span><span class="keyword">) {
<br />    </span><span class="default">$redirect</span><span class="keyword">=</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/location:/i"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$line</span><span class="keyword">);
<br />   }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Then don't forget to <span class="default">&lt;?php $redirect </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$redirect</span><span class="keyword">); </span><span class="default">?&gt;</span> before trying to follow this new link as $redirect actually has a \r\n on the end of it and won't give you a valid path in the next iteration otherwise. A six hour bug.
<br />
<br />Saul Dobney</span></code></div>
  </div>
 </div>
  <div class="note" id="95605">  <div class="votes">
    <div id="Vu95605">
    <a href="/manual/vote-note.php?id=95605&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95605">
    <a href="/manual/vote-note.php?id=95605&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95605" title="58% like this...">
    6
    </div>
  </div>
  <a href="#95605" class="name">
  <strong class="user"><em>nytro_rst at yahoo dot com</em></strong></a><a class="genanchor" href="#95605"> &para;</a><div class="date" title="2010-01-12 02:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95605">
<div class="phpcode"><code><span class="html">A simple proxy list checker. You can check a list ip:port if that port is opened on that IP.<br /><br /><span class="default">&lt;?php<br /><br />$fisier </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'proxy_list.txt'</span><span class="keyword">); </span><span class="comment">// Read the file with the proxy list<br /></span><span class="default">$linii </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$fisier</span><span class="keyword">); </span><span class="comment">// Get each proxy<br /></span><span class="default">$fisier </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"bune.txt"</span><span class="keyword">, </span><span class="string">"a"</span><span class="keyword">); </span><span class="comment">// Here we will write the good ones<br /><br /></span><span class="keyword">for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$linii</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) </span><span class="default">test</span><span class="keyword">(</span><span class="default">$linii</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]); </span><span class="comment">// Test each proxy<br /><br /></span><span class="keyword">function </span><span class="default">test</span><span class="keyword">(</span><span class="default">$proxy</span><span class="keyword">)<br />{<br />  global </span><span class="default">$fisier</span><span class="keyword">;<br />  </span><span class="default">$splited </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">':'</span><span class="keyword">,</span><span class="default">$proxy</span><span class="keyword">); </span><span class="comment">// Separate IP and port<br />  </span><span class="keyword">if(</span><span class="default">$con </span><span class="keyword">= @</span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$splited</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$splited</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$eroare</span><span class="keyword">, </span><span class="default">$eroare_str</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)) <br />  {<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fisier</span><span class="keyword">, </span><span class="default">$proxy </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">); </span><span class="comment">// Check if we can connect to that IP and port<br />    </span><span class="keyword">print </span><span class="default">$proxy </span><span class="keyword">. </span><span class="string">'&lt;br&gt;'</span><span class="keyword">; </span><span class="comment">// Show the proxy<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$con</span><span class="keyword">); </span><span class="comment">// Close the socket handle<br />  </span><span class="keyword">}<br />}<br /><br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fisier</span><span class="keyword">); </span><span class="comment">// Close the file<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="32830">  <div class="votes">
    <div id="Vu32830">
    <a href="/manual/vote-note.php?id=32830&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32830">
    <a href="/manual/vote-note.php?id=32830&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32830" title="66% like this...">
    1
    </div>
  </div>
  <a href="#32830" class="name">
  <strong class="user"><em>blazely at removetoemail netspace net au</em></strong></a><a class="genanchor" href="#32830"> &para;</a><div class="date" title="2003-06-08 09:55"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32830">
<div class="phpcode"><code><span class="html">Here's a quick function to establish a connection to a web server that will time out if the connection is lost after a user definable amount of time or if the server can't be reached.
<br />
<br />Also supports Basic authentication if a username/password is specified. Any improvements or criticisms, please email me! :-)
<br />
<br />Returns either a resource ID, an error code or 0 if the server can't be reached at all. Returns -1 in the event that something really wierd happens like a non-standard http response or something. Hope it helps someone.
<br />
<br />Cheers,
<br />
<br />Ben Blazely
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">connectToURL</span><span class="keyword">(</span><span class="default">$addr</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">=</span><span class="string">"30"</span><span class="keyword">)
<br />{
<br /> </span><span class="default">$urlHandle </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$addr</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">);
<br /> if (</span><span class="default">$urlHandle</span><span class="keyword">)
<br /> {
<br />  </span><span class="default">socket_set_timeout</span><span class="keyword">(</span><span class="default">$urlHandle</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">);
<br />  if (</span><span class="default">$path</span><span class="keyword">)
<br />  {
<br />   </span><span class="default">$urlString </span><span class="keyword">= </span><span class="string">"GET </span><span class="default">$path</span><span class="string"> HTTP/1.0\r\nHost: </span><span class="default">$addr</span><span class="string">\r\nConnection: Keep-Alive\r\nUser-Agent: MyURLGrabber\r\n"</span><span class="keyword">;
<br />   if (</span><span class="default">$user</span><span class="keyword">)
<br />    </span><span class="default">$urlString </span><span class="keyword">.= </span><span class="string">"Authorization: Basic "</span><span class="keyword">.</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="string">"</span><span class="default">$user</span><span class="string">:</span><span class="default">$pass</span><span class="string">"</span><span class="keyword">).</span><span class="string">"\r\n"</span><span class="keyword">;
<br />    </span><span class="default">$urlString </span><span class="keyword">.= </span><span class="string">"\r\n"</span><span class="keyword">;
<br />
<br />    </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$urlHandle</span><span class="keyword">, </span><span class="default">$urlString</span><span class="keyword">);
<br />
<br />    </span><span class="default">$response </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$urlHandle</span><span class="keyword">);
<br />
<br />    if (</span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">, </span><span class="string">"200 OK"</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">)      </span><span class="comment">// Check the status of the link
<br />    </span><span class="keyword">{
<br />     </span><span class="default">$endHeader </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;                     </span><span class="comment">// Strip initial header information
<br />     </span><span class="keyword">while ( !</span><span class="default">$endHeader</span><span class="keyword">)
<br />     {
<br />      if (</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$urlHandle</span><span class="keyword">) == </span><span class="string">"\r\n"</span><span class="keyword">)
<br />       </span><span class="default">$endHeader </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />     }
<br />
<br />     return </span><span class="default">$urlHandle</span><span class="keyword">;                      </span><span class="comment">// All OK, return the file handle
<br />    </span><span class="keyword">}
<br />    else if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">) &lt; </span><span class="default">15</span><span class="keyword">)                </span><span class="comment">// Cope with wierd non standard responses
<br />    </span><span class="keyword">{
<br />     </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$urlHandle</span><span class="keyword">);
<br />     return -</span><span class="default">1</span><span class="keyword">;
<br />    }
<br />    else                                            </span><span class="comment">// Cope with a standard error response
<br />    </span><span class="keyword">{
<br />     </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$urlHandle</span><span class="keyword">);
<br />     return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);
<br />    }
<br />   }
<br />
<br />   return </span><span class="default">$urlHandle</span><span class="keyword">;
<br />  }
<br />  else
<br />  {
<br />   return </span><span class="default">0</span><span class="keyword">;
<br />  }
<br /> }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="27755">  <div class="votes">
    <div id="Vu27755">
    <a href="/manual/vote-note.php?id=27755&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27755">
    <a href="/manual/vote-note.php?id=27755&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27755" title="66% like this...">
    1
    </div>
  </div>
  <a href="#27755" class="name">
  <strong class="user"><em>dan at lovepond dot com</em></strong></a><a class="genanchor" href="#27755"> &para;</a><div class="date" title="2002-12-17 01:38"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27755">
<div class="phpcode"><code><span class="html">Here is some code to help out abit more with the EOF problem.
<br />I had a problem where I needed to strip out so many lines of server input to get back right data i wanted.
<br />
<br /><span class="default">&lt;?php
<br />$port</span><span class="keyword">=</span><span class="default">4000</span><span class="keyword">;
<br /></span><span class="default">$host</span><span class="keyword">=</span><span class="string">"localhost"</span><span class="keyword">;
<br /></span><span class="default">$message</span><span class="keyword">=</span><span class="string">"test"</span><span class="keyword">;
<br /></span><span class="default">$status</span><span class="keyword">=</span><span class="default">senddata</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">,</span><span class="default">$port</span><span class="keyword">,</span><span class="default">$message</span><span class="keyword">);
<br />print </span><span class="string">"</span><span class="default">$status</span><span class="string">"</span><span class="keyword">;
<br />
<br />function </span><span class="default">senddata</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">,</span><span class="default">$port</span><span class="keyword">,</span><span class="default">$message</span><span class="keyword">) {
<br />
<br /></span><span class="comment">#takes in account servers that do not return EOF character
<br />#send data to server and get back input
<br />
<br />#function globals
<br /></span><span class="default">$linenumber</span><span class="keyword">=</span><span class="string">"2"</span><span class="keyword">; </span><span class="comment">#amount of lines to get rid of before we give input
<br /></span><span class="default">$lineamount</span><span class="keyword">=</span><span class="string">"1"</span><span class="keyword">; </span><span class="comment">#amount of lines to read after we give input
<br />
<br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="string">"</span><span class="default">$host</span><span class="string">"</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">);
<br />if (!</span><span class="default">$fp</span><span class="keyword">) {
<br />   echo </span><span class="string">"</span><span class="default">$errstr</span><span class="string"> (</span><span class="default">$errno</span><span class="string">)"</span><span class="keyword">;
<br />}
<br />else {
<br />   for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$linenumber</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />      </span><span class="default">fread </span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);
<br />      </span><span class="default">$bytes_left </span><span class="keyword">= </span><span class="default">socket_get_status</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />      if (</span><span class="default">$bytes_left </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) { </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$bytes_left</span><span class="keyword">[</span><span class="default">unread_bytes</span><span class="keyword">]); }
<br />   }
<br />   </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"</span><span class="default">$message</span><span class="string">\r\n"</span><span class="keyword">);
<br />   for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$lineamount</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />      </span><span class="default">$status</span><span class="keyword">.=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);
<br />      </span><span class="default">$bytes_left </span><span class="keyword">= </span><span class="default">socket_get_status</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />      if (</span><span class="default">$bytes_left </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) { </span><span class="default">$status</span><span class="keyword">.=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$bytes_left</span><span class="keyword">[</span><span class="default">unread_bytes</span><span class="keyword">]); }
<br />   }
<br />   </span><span class="default">fclose </span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />}
<br />
<br />return </span><span class="default">$status</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="26074">  <div class="votes">
    <div id="Vu26074">
    <a href="/manual/vote-note.php?id=26074&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26074">
    <a href="/manual/vote-note.php?id=26074&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26074" title="63% like this...">
    3
    </div>
  </div>
  <a href="#26074" class="name">
  <strong class="user"><em>verran at descent-rangers dot com</em></strong></a><a class="genanchor" href="#26074"> &para;</a><div class="date" title="2002-10-16 07:28"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26074">
<div class="phpcode"><code><span class="html">I was tearing my hair out for a week trying to figure out how to do this.
<br />
<br />If you use fsockopen with a service that doesn't have an EOF, or you try to read beyond EOF or line break, PHP can hang completely.
<br />
<br />In my case, I was trying to write a class that talks to Kali servers (www.kali.net) to get a list of people on the chat server. To keep PHP from hanging due to the above, I discovered this:
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">class </span><span class="default">kali_utils </span><span class="keyword">{
<br />        function </span><span class="default">games_list</span><span class="keyword">(</span><span class="default">$kali_server_ip</span><span class="keyword">, </span><span class="default">$kali_server_port</span><span class="keyword">) {
<br />            </span><span class="default">$result </span><span class="keyword">= array();
<br />            </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$kali_server_ip</span><span class="keyword">, </span><span class="default">$kali_server_port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$error</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">);
<br />            if (!</span><span class="default">$fp</span><span class="keyword">) {
<br />                </span><span class="default">$result</span><span class="keyword">[</span><span class="string">"errno"</span><span class="keyword">] = </span><span class="default">$errno</span><span class="keyword">;
<br />                </span><span class="default">$result</span><span class="keyword">[</span><span class="string">"error"</span><span class="keyword">] = </span><span class="default">$error</span><span class="keyword">;
<br />            }
<br />            else {
<br />                </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"KALIQ"</span><span class="keyword">);
<br />                </span><span class="default">$header </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);
<br />                </span><span class="default">$bytes_left </span><span class="keyword">= </span><span class="default">socket_get_status</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />                if (</span><span class="default">$bytes_left </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {
<br />                    </span><span class="default">$result</span><span class="keyword">[</span><span class="string">"results"</span><span class="keyword">] = </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$bytes_left</span><span class="keyword">[</span><span class="string">"unread_bytes"</span><span class="keyword">]);
<br />                }
<br />                else {
<br />                    </span><span class="default">$result</span><span class="keyword">[</span><span class="string">"results"</span><span class="keyword">] = </span><span class="string">""</span><span class="keyword">;
<br />                }
<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />            }
<br />            return </span><span class="default">$result</span><span class="keyword">;
<br />        }
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />When I send the request packet, I get a response packet of length 5. Then I call socket_get_status() and use the unread_bytes key from it to know how far to fread from the socket. Works very good.
<br />
<br />I've only used this on PHP 4.2.1 so far.</span></code></div>
  </div>
 </div>
  <div class="note" id="91644">  <div class="votes">
    <div id="Vu91644">
    <a href="/manual/vote-note.php?id=91644&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91644">
    <a href="/manual/vote-note.php?id=91644&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91644" title="60% like this...">
    1
    </div>
  </div>
  <a href="#91644" class="name">
  <strong class="user"><em>oliver dot christen at camptocamp dot com</em></strong></a><a class="genanchor" href="#91644"> &para;</a><div class="date" title="2009-06-21 03:17"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91644">
<div class="phpcode"><code><span class="html">When downloading large files, it is not really efficient to put the whole server answer in memory before parsing the data to remove the header parts. Here is a simple way to do it while writing the data as it arrive:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// $socket is a valid fsockopen handle<br /><br /></span><span class="default">$out </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$headerendfound </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$fileTarget</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);<br /></span><span class="default">$buffer </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">)) {<br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="default">fgets </span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">,</span><span class="default">16384</span><span class="keyword">);<br />    if (</span><span class="default">$headerendfound</span><span class="keyword">) {<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$out</span><span class="keyword">);<br />        print </span><span class="string">'.'</span><span class="keyword">;<br />    }<br />    if (!</span><span class="default">$headerendfound</span><span class="keyword">) {<br />        </span><span class="default">$buffer </span><span class="keyword">.= </span><span class="default">$out</span><span class="keyword">;<br />        print </span><span class="string">"searching for header\n"</span><span class="keyword">;<br />        </span><span class="default">$headerend </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">, </span><span class="string">"\r\n\r\n"</span><span class="keyword">);<br />        if (</span><span class="default">$headerend </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="default">$headerendfound </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />            </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">, </span><span class="default">$headerend</span><span class="keyword">+</span><span class="default">4</span><span class="keyword">));<br />            </span><span class="default">$buffer </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        }<br />    }<br />} <br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49938">  <div class="votes">
    <div id="Vu49938">
    <a href="/manual/vote-note.php?id=49938&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49938">
    <a href="/manual/vote-note.php?id=49938&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49938" title="60% like this...">
    1
    </div>
  </div>
  <a href="#49938" class="name">
  <strong class="user"><em>konrad dot meyer at gmail dot com</em></strong></a><a class="genanchor" href="#49938"> &para;</a><div class="date" title="2005-02-12 01:34"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49938">
<div class="phpcode"><code><span class="html">The documentation example is of a GET request. I have found POST documentation to be lacking, and here's a function to easily simulate submitting form data:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># $host includes host and path and filename<br />    # ex: "myserver.com/this/is/path/to/file.php"<br /># $query is the POST query data<br />    # ex: "a=thisstring&amp;number=46&amp;string=thatstring<br /># $others is any extra headers you want to send<br />    # ex: "Accept-Encoding: compress, gzip\r\n"<br /></span><span class="keyword">function </span><span class="default">post</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">,</span><span class="default">$query</span><span class="keyword">,</span><span class="default">$others</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">){<br />    </span><span class="default">$path</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">,</span><span class="default">$host</span><span class="keyword">);<br />    </span><span class="default">$host</span><span class="keyword">=</span><span class="default">$path</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    unset(</span><span class="default">$path</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    </span><span class="default">$path</span><span class="keyword">=</span><span class="string">'/'</span><span class="keyword">.(</span><span class="default">implode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">,</span><span class="default">$path</span><span class="keyword">));<br />    </span><span class="default">$post</span><span class="keyword">=</span><span class="string">"POST </span><span class="default">$path</span><span class="string"> HTTP/1.1\r\nHost: </span><span class="default">$host</span><span class="string">\r\nContent-type: application/x-www-form-urlencoded\r\n</span><span class="keyword">${</span><span class="default">others</span><span class="keyword">}</span><span class="string">User-Agent: Mozilla 4.0\r\nContent-length: "</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">).</span><span class="string">"\r\nConnection: close\r\n\r\n</span><span class="default">$query</span><span class="string">"</span><span class="keyword">;<br />    </span><span class="default">$h</span><span class="keyword">=</span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">,</span><span class="default">80</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">,</span><span class="default">$post</span><span class="keyword">);<br />    for(</span><span class="default">$a</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;!</span><span class="default">$a</span><span class="keyword">;){<br />        </span><span class="default">$b</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">,</span><span class="default">8192</span><span class="keyword">);<br />        </span><span class="default">$r</span><span class="keyword">.=</span><span class="default">$b</span><span class="keyword">;<br />        </span><span class="default">$a</span><span class="keyword">=((</span><span class="default">$b</span><span class="keyword">==</span><span class="string">''</span><span class="keyword">)?</span><span class="default">1</span><span class="keyword">:</span><span class="default">0</span><span class="keyword">);<br />    }<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">);<br />    return </span><span class="default">$r</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77587">  <div class="votes">
    <div id="Vu77587">
    <a href="/manual/vote-note.php?id=77587&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77587">
    <a href="/manual/vote-note.php?id=77587&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77587" title="56% like this...">
    2
    </div>
  </div>
  <a href="#77587" class="name">
  <strong class="user"><em>anarchy</em></strong></a><a class="genanchor" href="#77587"> &para;</a><div class="date" title="2007-09-04 06:34"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77587">
<div class="phpcode"><code><span class="html">The DEFAULT stream timeout is set according to default_socket_timeout in your php.ini file.  Took forever for me to dig that up....</span></code></div>
  </div>
 </div>
  <div class="note" id="101872">  <div class="votes">
    <div id="Vu101872">
    <a href="/manual/vote-note.php?id=101872&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101872">
    <a href="/manual/vote-note.php?id=101872&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101872" title="53% like this...">
    2
    </div>
  </div>
  <a href="#101872" class="name">
  <strong class="user"><em>Jeremy Saintot</em></strong></a><a class="genanchor" href="#101872"> &para;</a><div class="date" title="2011-01-14 04:24"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101872">
<div class="phpcode"><code><span class="html">Here is my fsockopen-based HTTP request fonction (GET and POST) :
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">http_request</span><span class="keyword">(
<br />    </span><span class="default">$verb </span><span class="keyword">= </span><span class="string">'GET'</span><span class="keyword">,             </span><span class="comment">/* HTTP Request Method (GET and POST supported) */
<br />    </span><span class="default">$ip</span><span class="keyword">,                       </span><span class="comment">/* Target IP/Hostname */
<br />    </span><span class="default">$port </span><span class="keyword">= </span><span class="default">80</span><span class="keyword">,                </span><span class="comment">/* Target TCP port */
<br />    </span><span class="default">$uri </span><span class="keyword">= </span><span class="string">'/'</span><span class="keyword">,                </span><span class="comment">/* Target URI */
<br />    </span><span class="default">$getdata </span><span class="keyword">= array(),        </span><span class="comment">/* HTTP GET Data ie. array('var1' =&gt; 'val1', 'var2' =&gt; 'val2') */
<br />    </span><span class="default">$postdata </span><span class="keyword">= array(),       </span><span class="comment">/* HTTP POST Data ie. array('var1' =&gt; 'val1', 'var2' =&gt; 'val2') */
<br />    </span><span class="default">$cookie </span><span class="keyword">= array(),         </span><span class="comment">/* HTTP Cookie Data ie. array('var1' =&gt; 'val1', 'var2' =&gt; 'val2') */
<br />    </span><span class="default">$custom_headers </span><span class="keyword">= array(), </span><span class="comment">/* Custom HTTP headers ie. array('Referer: <a href="http://localhost/" rel="nofollow" target="_blank">http://localhost/</a> */
<br />    </span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">,           </span><span class="comment">/* Socket timeout in seconds */
<br />    </span><span class="default">$req_hdr </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">,          </span><span class="comment">/* Include HTTP request headers */
<br />    </span><span class="default">$res_hdr </span><span class="keyword">= </span><span class="default">false           </span><span class="comment">/* Include HTTP response headers */
<br />    </span><span class="keyword">)
<br />{
<br />    </span><span class="default">$ret </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    </span><span class="default">$verb </span><span class="keyword">= </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$verb</span><span class="keyword">);
<br />    </span><span class="default">$cookie_str </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    </span><span class="default">$getdata_str </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$getdata</span><span class="keyword">) ? </span><span class="string">'?' </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">;
<br />    </span><span class="default">$postdata_str </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />
<br />    foreach (</span><span class="default">$getdata </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)
<br />                </span><span class="default">$getdata_str </span><span class="keyword">.= </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">) .</span><span class="string">'='</span><span class="keyword">. </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">) . </span><span class="string">'&amp;'</span><span class="keyword">;
<br />
<br />    foreach (</span><span class="default">$postdata </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)
<br />        </span><span class="default">$postdata_str </span><span class="keyword">.= </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">) .</span><span class="string">'='</span><span class="keyword">. </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">) .</span><span class="string">'&amp;'</span><span class="keyword">;
<br />
<br />    foreach (</span><span class="default">$cookie </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)
<br />        </span><span class="default">$cookie_str </span><span class="keyword">.= </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">) .</span><span class="string">'='</span><span class="keyword">. </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">) .</span><span class="string">'; '</span><span class="keyword">;
<br />
<br />    </span><span class="default">$crlf </span><span class="keyword">= </span><span class="string">"\r\n"</span><span class="keyword">;
<br />    </span><span class="default">$req </span><span class="keyword">= </span><span class="default">$verb </span><span class="keyword">.</span><span class="string">' '</span><span class="keyword">. </span><span class="default">$uri </span><span class="keyword">. </span><span class="default">$getdata_str </span><span class="keyword">.</span><span class="string">' HTTP/1.1' </span><span class="keyword">. </span><span class="default">$crlf</span><span class="keyword">;
<br />    </span><span class="default">$req </span><span class="keyword">.= </span><span class="string">'Host: '</span><span class="keyword">. </span><span class="default">$ip </span><span class="keyword">. </span><span class="default">$crlf</span><span class="keyword">;
<br />    </span><span class="default">$req </span><span class="keyword">.= </span><span class="string">'User-Agent: Mozilla/5.0 Firefox/3.6.12' </span><span class="keyword">. </span><span class="default">$crlf</span><span class="keyword">;
<br />    </span><span class="default">$req </span><span class="keyword">.= </span><span class="string">'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8' </span><span class="keyword">. </span><span class="default">$crlf</span><span class="keyword">;
<br />    </span><span class="default">$req </span><span class="keyword">.= </span><span class="string">'Accept-Language: en-us,en;q=0.5' </span><span class="keyword">. </span><span class="default">$crlf</span><span class="keyword">;
<br />    </span><span class="default">$req </span><span class="keyword">.= </span><span class="string">'Accept-Encoding: deflate' </span><span class="keyword">. </span><span class="default">$crlf</span><span class="keyword">;
<br />    </span><span class="default">$req </span><span class="keyword">.= </span><span class="string">'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7' </span><span class="keyword">. </span><span class="default">$crlf</span><span class="keyword">;
<br />    
<br />    foreach (</span><span class="default">$custom_headers </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)
<br />        </span><span class="default">$req </span><span class="keyword">.= </span><span class="default">$k </span><span class="keyword">.</span><span class="string">': '</span><span class="keyword">. </span><span class="default">$v </span><span class="keyword">. </span><span class="default">$crlf</span><span class="keyword">;
<br />        
<br />    if (!empty(</span><span class="default">$cookie_str</span><span class="keyword">))
<br />        </span><span class="default">$req </span><span class="keyword">.= </span><span class="string">'Cookie: '</span><span class="keyword">. </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$cookie_str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">2</span><span class="keyword">) . </span><span class="default">$crlf</span><span class="keyword">;
<br />        
<br />    if (</span><span class="default">$verb </span><span class="keyword">== </span><span class="string">'POST' </span><span class="keyword">&amp;&amp; !empty(</span><span class="default">$postdata_str</span><span class="keyword">))
<br />    {
<br />        </span><span class="default">$postdata_str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$postdata_str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);
<br />        </span><span class="default">$req </span><span class="keyword">.= </span><span class="string">'Content-Type: application/x-www-form-urlencoded' </span><span class="keyword">. </span><span class="default">$crlf</span><span class="keyword">;
<br />        </span><span class="default">$req </span><span class="keyword">.= </span><span class="string">'Content-Length: '</span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$postdata_str</span><span class="keyword">) . </span><span class="default">$crlf </span><span class="keyword">. </span><span class="default">$crlf</span><span class="keyword">;
<br />        </span><span class="default">$req </span><span class="keyword">.= </span><span class="default">$postdata_str</span><span class="keyword">;
<br />    }
<br />    else </span><span class="default">$req </span><span class="keyword">.= </span><span class="default">$crlf</span><span class="keyword">;
<br />    
<br />    if (</span><span class="default">$req_hdr</span><span class="keyword">)
<br />        </span><span class="default">$ret </span><span class="keyword">.= </span><span class="default">$req</span><span class="keyword">;
<br />    
<br />    if ((</span><span class="default">$fp </span><span class="keyword">= @</span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">)) == </span><span class="default">false</span><span class="keyword">)
<br />        return </span><span class="string">"Error </span><span class="default">$errno</span><span class="string">: </span><span class="default">$errstr</span><span class="string">\n"</span><span class="keyword">;
<br />    
<br />    </span><span class="default">stream_set_timeout</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$timeout </span><span class="keyword">* </span><span class="default">1000</span><span class="keyword">);
<br />    
<br />    </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$req</span><span class="keyword">);
<br />    while (</span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) </span><span class="default">$ret </span><span class="keyword">.= </span><span class="default">$line</span><span class="keyword">;
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />    
<br />    if (!</span><span class="default">$res_hdr</span><span class="keyword">)
<br />        </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$ret</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$ret</span><span class="keyword">, </span><span class="string">"\r\n\r\n"</span><span class="keyword">) + </span><span class="default">4</span><span class="keyword">);
<br />    
<br />    return </span><span class="default">$ret</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Example usages :
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">echo </span><span class="default">http_request</span><span class="keyword">(</span><span class="string">'GET'</span><span class="keyword">, </span><span class="string">'www.php.net'</span><span class="keyword">);
<br />echo </span><span class="default">http_request</span><span class="keyword">(</span><span class="string">'GET'</span><span class="keyword">, </span><span class="string">'www.php.net'</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">, </span><span class="string">'/manual/en/function.phpinfo.php'</span><span class="keyword">);
<br />echo </span><span class="default">http_request</span><span class="keyword">(</span><span class="string">'GET'</span><span class="keyword">, </span><span class="string">'www.php.net'</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">, </span><span class="string">'/manual/en/function.phpinfo.php'</span><span class="keyword">, array(</span><span class="string">'get1' </span><span class="keyword">=&gt; </span><span class="string">'v_get1'</span><span class="keyword">), array(), array(</span><span class="string">'cookie1' </span><span class="keyword">=&gt; </span><span class="string">'v_cookie1'</span><span class="keyword">), array(</span><span class="string">'X-My-Header' </span><span class="keyword">=&gt; </span><span class="string">'My Value'</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />[EDIT BY danbrown AT php DOT net: Contains a bugfix provided by "Wrinkled Cheese" on 24-JUN-2011 to fix the $getdata foreach() loop; another bugfix provided by Suat Secmen on 12-JAN-2012 to fix a $timeout = 1000, then stream_set_timeout($fp, 0, $timeout * 1000), equaling 1,000 seconds.]</span></code></div>
  </div>
 </div>
  <div class="note" id="36703">  <div class="votes">
    <div id="Vu36703">
    <a href="/manual/vote-note.php?id=36703&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36703">
    <a href="/manual/vote-note.php?id=36703&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36703" title="55% like this...">
    1
    </div>
  </div>
  <a href="#36703" class="name">
  <strong class="user"><em>richardaburton at hotmail dot com</em></strong></a><a class="genanchor" href="#36703"> &para;</a><div class="date" title="2003-10-19 08:29"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36703">
<div class="phpcode"><code><span class="html">Improved HTTP/1.1 chunked transfer-encoding example.
<br />
<br />The sample code given below by Jack does not function correctly when run against a recent version of Apache (I'm assuming that this did once work, but from the HTTP/1.1 spec I can only assume if it did work it was based mostly on luck).
<br />
<br /><span class="default">&lt;?php
<br />
<br />$header </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br /></span><span class="default">$response </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />
<br /></span><span class="comment">// connect
<br /></span><span class="keyword">if (!(</span><span class="default">$request</span><span class="keyword">=</span><span class="default">fsockopen</span><span class="keyword">(</span><span class="string">'example.com'</span><span class="keyword">,</span><span class="default">80</span><span class="keyword">,</span><span class="default">$errno</span><span class="keyword">,</span><span class="default">$errstr</span><span class="keyword">))) exit(</span><span class="default">$errstr</span><span class="keyword">);
<br />else {
<br />   </span><span class="default">socket_set_timeout</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);
<br />   </span><span class="comment">// send request
<br />   </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">,</span><span class="default">$post</span><span class="keyword">);
<br />   </span><span class="comment">// get header
<br />   </span><span class="keyword">do </span><span class="default">$header</span><span class="keyword">.=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">); while (!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\\r\\n\\r\\n$/'</span><span class="keyword">,</span><span class="default">$header</span><span class="keyword">));
<br />   </span><span class="comment">// check for chunked encoding
<br />   </span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/Transfer\\-Encoding:\\s+chunked\\r\\n/'</span><span class="keyword">,</span><span class="default">$header</span><span class="keyword">))
<br />      do {
<br />         </span><span class="default">$byte </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />         </span><span class="default">$chunk_size</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;
<br />         do {
<br />            </span><span class="default">$chunk_size</span><span class="keyword">.=</span><span class="default">$byte</span><span class="keyword">;
<br />            </span><span class="default">$byte</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);
<br />         } while (</span><span class="default">$byte</span><span class="keyword">!=</span><span class="string">"\\r"</span><span class="keyword">);      </span><span class="comment">// till we match the CR
<br />         </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);         </span><span class="comment">// also drop off the LF
<br />         </span><span class="default">$chunk_size</span><span class="keyword">=</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$chunk_size</span><span class="keyword">); </span><span class="comment">// convert to real number
<br />         </span><span class="default">$response</span><span class="keyword">.=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">,</span><span class="default">$chunk_size</span><span class="keyword">);
<br />         </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);          </span><span class="comment">// ditch the CRLF that trails the chunk
<br />      </span><span class="keyword">} while (</span><span class="default">$chunk_size</span><span class="keyword">);         </span><span class="comment">// till we reach the 0 length chunk (end marker)
<br />   </span><span class="keyword">else {
<br />      </span><span class="comment">// check for specified content length
<br />      </span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/Content\\-Length:\\s+([0-9]*)\\r\\n/'</span><span class="keyword">,</span><span class="default">$header</span><span class="keyword">,</span><span class="default">$matches</span><span class="keyword">)) {
<br />         </span><span class="default">$response</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">,</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />      } else {
<br />         </span><span class="comment">// not a nice way to do it (may also result in extra CRLF which trails the real content???)
<br />         </span><span class="keyword">while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">)) </span><span class="default">$response </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);
<br />      }
<br />   }
<br />   </span><span class="comment">// close connection
<br />   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">// do something useful with the response
<br /></span><span class="keyword">print(</span><span class="default">$header</span><span class="keyword">);
<br />print(</span><span class="default">$response</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Richard.</span></code></div>
  </div>
 </div>
  <div class="note" id="23481">  <div class="votes">
    <div id="Vu23481">
    <a href="/manual/vote-note.php?id=23481&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23481">
    <a href="/manual/vote-note.php?id=23481&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23481" title="55% like this...">
    1
    </div>
  </div>
  <a href="#23481" class="name">
  <strong class="user"><em>iain at monitormedia dot co dot uk</em></strong></a><a class="genanchor" href="#23481"> &para;</a><div class="date" title="2002-07-19 05:48"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23481">
<div class="phpcode"><code><span class="html">Here's how to send an email using SMTP. This includes rudimentary checking on server responses during the process of sending an email. Could be improved by more comprehensive processing of the result codes...or going on to the next mail exchanger when you fail after connecting to the first.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">another_mail</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">,</span><span class="default">$subject</span><span class="keyword">,</span><span class="default">$headers</span><span class="keyword">,</span><span class="default">$message</span><span class="keyword">)
<br />{
<br /> </span><span class="comment">// Could get this from the php ini?
<br /> </span><span class="default">$from</span><span class="keyword">=</span><span class="string">"me@example.com"</span><span class="keyword">;
<br /> list(</span><span class="default">$me</span><span class="keyword">,</span><span class="default">$mydomain</span><span class="keyword">) = </span><span class="default">split</span><span class="keyword">(</span><span class="string">"@"</span><span class="keyword">,</span><span class="default">$from</span><span class="keyword">);
<br />
<br /> </span><span class="comment">// Now look up the mail exchangers for the recipient
<br /> </span><span class="keyword">list(</span><span class="default">$user</span><span class="keyword">,</span><span class="default">$domain</span><span class="keyword">) = </span><span class="default">split</span><span class="keyword">(</span><span class="string">"@"</span><span class="keyword">,</span><span class="default">$to</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);
<br /> if(</span><span class="default">getmxrr</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">,</span><span class="default">$mx</span><span class="keyword">,</span><span class="default">$weight</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">)  return </span><span class="default">FALSE</span><span class="keyword">;
<br />
<br /> </span><span class="comment">// Try them in order of lowest weight first
<br /> </span><span class="default">array_multisort</span><span class="keyword">(</span><span class="default">$mx</span><span class="keyword">,</span><span class="default">$weight</span><span class="keyword">);
<br /> </span><span class="default">$success</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />
<br /> foreach(</span><span class="default">$mx </span><span class="keyword">as </span><span class="default">$host</span><span class="keyword">) {
<br />  </span><span class="comment">// Open an SMTP connection
<br />  </span><span class="default">$connection </span><span class="keyword">= </span><span class="default">fsockopen </span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />  if (!</span><span class="default">$connection</span><span class="keyword">)
<br />    continue;
<br />  </span><span class="default">$res</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">256</span><span class="keyword">);
<br />  if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">) != </span><span class="string">"220"</span><span class="keyword">) break;
<br />
<br />  </span><span class="comment">// Introduce ourselves
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">"HELO </span><span class="default">$mydomain</span><span class="string">\n"</span><span class="keyword">);
<br />  </span><span class="default">$res</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">256</span><span class="keyword">);
<br />  if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">) != </span><span class="string">"250"</span><span class="keyword">) break;
<br />
<br />  </span><span class="comment">// Envelope from
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">"MAIL FROM: </span><span class="default">$from</span><span class="string">\n"</span><span class="keyword">);
<br />  </span><span class="default">$res</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">256</span><span class="keyword">);
<br />  if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">) != </span><span class="string">"250"</span><span class="keyword">) break;
<br />
<br />  </span><span class="comment">// Envelope to
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">"RCPT TO: </span><span class="default">$to</span><span class="string">\n"</span><span class="keyword">);
<br />  </span><span class="default">$res</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">256</span><span class="keyword">);
<br />  if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">) != </span><span class="string">"250"</span><span class="keyword">) break;
<br />
<br />  </span><span class="comment">// The message
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">"DATA\n"</span><span class="keyword">);
<br />  </span><span class="default">$res</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">256</span><span class="keyword">);
<br />  if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">) != </span><span class="string">"354"</span><span class="keyword">) break;
<br />
<br />  </span><span class="comment">// Send To:, From:, Subject:, other headers, blank line, message, and finish
<br />  // with a period on its own line.
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">"To: </span><span class="default">$to</span><span class="string">\nFrom: </span><span class="default">$from</span><span class="string">\nSubject: </span><span class="default">$subject</span><span class="string">\n</span><span class="default">$headers</span><span class="string">\n\n</span><span class="default">$message</span><span class="string">\n.\n"</span><span class="keyword">);
<br />  </span><span class="default">$res</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">256</span><span class="keyword">);
<br />  if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">) != </span><span class="string">"250"</span><span class="keyword">) break;
<br />
<br />  </span><span class="comment">// Say bye bye
<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="string">"QUIT\n"</span><span class="keyword">);
<br />  </span><span class="default">$res</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">256</span><span class="keyword">);
<br />  if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">) != </span><span class="string">"221"</span><span class="keyword">) break;
<br />
<br />  </span><span class="comment">// It worked! So break out of the loop which tries all the mail exchangers.
<br />  </span><span class="default">$success</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;
<br />  break;
<br /> }
<br /> </span><span class="comment">// Debug for if we fall over - uncomment as desired
<br /> // print $success?"Mail sent":"Failure: $res\n";
<br /> </span><span class="keyword">if(</span><span class="default">$connection</span><span class="keyword">) {
<br />  if(</span><span class="default">$success</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">) </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">"QUIT\n"</span><span class="keyword">);
<br />  </span><span class="default">fclose </span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">);
<br /> }
<br /> return </span><span class="default">$success</span><span class="keyword">?</span><span class="default">TRUE</span><span class="keyword">:</span><span class="default">FALSE</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">another_mail</span><span class="keyword">(</span><span class="string">"recipient@example.com"</span><span class="keyword">,</span><span class="string">"My Subject"</span><span class="keyword">,</span><span class="string">"X-mailer: PHP Script\nX-another-header: Whatever"</span><span class="keyword">,</span><span class="string">"Test email body.\n\nNote if you actually put a period on a line\nby itself, the function will terminate prematurely.\n\nYou will get a partial email sent though.\n"</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="37517">  <div class="votes">
    <div id="Vu37517">
    <a href="/manual/vote-note.php?id=37517&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37517">
    <a href="/manual/vote-note.php?id=37517&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37517" title="53% like this...">
    2
    </div>
  </div>
  <a href="#37517" class="name">
  <strong class="user"><em>asalamanca at redcetus dot com</em></strong></a><a class="genanchor" href="#37517"> &para;</a><div class="date" title="2003-11-18 11:27"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37517">
<div class="phpcode"><code><span class="html">This is a very fast program for test a form or link (many times).
<br /><span class="default">&lt;?php
<br />$repeat  </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;  </span><span class="comment">// How many times repeat the test
<br />
<br /></span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;  </span><span class="comment">// Max time for stablish the conection
<br /></span><span class="default">$size    </span><span class="keyword">= </span><span class="default">16</span><span class="keyword">;   </span><span class="comment">// Bytes will be read (and display). 0 for read all
<br />
<br /></span><span class="default">$server  </span><span class="keyword">= </span><span class="string">'127.0.0.1'</span><span class="keyword">;            </span><span class="comment">// IP address
<br /></span><span class="default">$host    </span><span class="keyword">= </span><span class="string">'www.example.net'</span><span class="keyword">;             </span><span class="comment">// Domain name
<br /></span><span class="default">$target  </span><span class="keyword">= </span><span class="string">'/poll/answer.asp'</span><span class="keyword">;        </span><span class="comment">// Specific program
<br /></span><span class="default">$referer </span><span class="keyword">= </span><span class="string">'<a href="http://www.example.com/" rel="nofollow" target="_blank">http://www.example.com/</a>'</span><span class="keyword">;    </span><span class="comment">// Referer
<br /></span><span class="default">$port    </span><span class="keyword">= </span><span class="default">80</span><span class="keyword">;
<br />
<br /></span><span class="comment">// Setup an array of fields to get with then create the get string
<br /></span><span class="default">$gets </span><span class="keyword">= array ( </span><span class="string">'get_field_1' </span><span class="keyword">=&gt; </span><span class="string">'somevalue'</span><span class="keyword">,
<br />                </span><span class="string">'get_field_2' </span><span class="keyword">=&gt; </span><span class="string">'somevalue' </span><span class="keyword">);
<br />
<br /></span><span class="comment">// Setup an array of fields to post with then create the post string
<br /></span><span class="default">$posts </span><span class="keyword">= array ( </span><span class="string">'post_field_1' </span><span class="keyword">=&gt; </span><span class="string">'somevalue'</span><span class="keyword">,
<br />                 </span><span class="string">'post_field_2' </span><span class="keyword">=&gt; </span><span class="string">'somevalue' </span><span class="keyword">);
<br />
<br /></span><span class="comment">// That's all. Now the program proccess $repeat times
<br />
<br /></span><span class="default">$method </span><span class="keyword">= </span><span class="string">"GET"</span><span class="keyword">;
<br />if ( </span><span class="default">is_array</span><span class="keyword">( </span><span class="default">$gets </span><span class="keyword">) ) {
<br />    </span><span class="default">$getValues </span><span class="keyword">= </span><span class="string">'?'</span><span class="keyword">;
<br />    foreach( </span><span class="default">$gets </span><span class="keyword">AS </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">){
<br />        </span><span class="default">$getValues </span><span class="keyword">.= </span><span class="default">urlencode</span><span class="keyword">( </span><span class="default">$name </span><span class="keyword">) . </span><span class="string">"=" </span><span class="keyword">. </span><span class="default">urlencode</span><span class="keyword">( </span><span class="default">$value </span><span class="keyword">) . </span><span class="string">'&amp;'</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">$getValues </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$getValues</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1 </span><span class="keyword">);
<br />} else {
<br />    </span><span class="default">$getValues </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />}
<br />
<br />if ( </span><span class="default">is_array</span><span class="keyword">( </span><span class="default">$posts </span><span class="keyword">) ) {
<br />    foreach( </span><span class="default">$posts </span><span class="keyword">AS </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">){
<br />        </span><span class="default">$postValues </span><span class="keyword">.= </span><span class="default">urlencode</span><span class="keyword">( </span><span class="default">$name </span><span class="keyword">) . </span><span class="string">"=" </span><span class="keyword">. </span><span class="default">urlencode</span><span class="keyword">( </span><span class="default">$value </span><span class="keyword">) . </span><span class="string">'&amp;'</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">$postValues </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$postValues</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1 </span><span class="keyword">);
<br />    </span><span class="default">$method </span><span class="keyword">= </span><span class="string">"POST"</span><span class="keyword">;
<br />} else {
<br />    </span><span class="default">$postValues </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">$request  </span><span class="keyword">= </span><span class="string">"</span><span class="default">$method</span><span class="string"> </span><span class="default">$target$getValues</span><span class="string"> HTTP/1.1\r\n"</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"Host: </span><span class="default">$host</span><span class="string">\r\n"</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">'User-Agent: Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2.1) '</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"Gecko/20021204\r\n"</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">'Accept: text/xml,application/xml,application/xhtml+xml,'</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">'text/html;q=0.9,text/plain;q=0.8,video/x-mng,image/png,'</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"image/jpeg,image/gif;q=0.2,text/css,*/*;q=0.1\r\n"</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"Accept-Language: en-us, en;q=0.50\r\n"</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"Accept-Encoding: gzip, deflate, compress;q=0.9\r\n"</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"Accept-Charset: ISO-8859-1, utf-8;q=0.66, *;q=0.66\r\n"</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"Keep-Alive: 300\r\n"</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"Connection: keep-alive\r\n"</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"Referer: </span><span class="default">$referer</span><span class="string">\r\n"</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"Cache-Control: max-age=0\r\n"</span><span class="keyword">;
<br />
<br />if ( </span><span class="default">$method </span><span class="keyword">== </span><span class="string">"POST" </span><span class="keyword">) {
<br />    </span><span class="default">$lenght </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$postValues </span><span class="keyword">);
<br />    </span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"Content-Type: application/x-www-form-urlencoded\r\n"</span><span class="keyword">;
<br />    </span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"Content-Length: </span><span class="default">$lenght</span><span class="string">\r\n"</span><span class="keyword">;
<br />    </span><span class="default">$request </span><span class="keyword">.= </span><span class="string">"\r\n"</span><span class="keyword">;
<br />    </span><span class="default">$request </span><span class="keyword">.= </span><span class="default">$postValues</span><span class="keyword">;
<br />}
<br />
<br />for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$repeat</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ ) {
<br />    </span><span class="default">$socket  </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">( </span><span class="default">$server</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$timeout </span><span class="keyword">);
<br />    </span><span class="default">fputs</span><span class="keyword">( </span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$request </span><span class="keyword">);
<br />    if ( </span><span class="default">$size </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">) {
<br />        </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">( </span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$size </span><span class="keyword">);
<br />    } else {
<br />        </span><span class="default">$ret </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />        while ( !</span><span class="default">feof</span><span class="keyword">( </span><span class="default">$socket </span><span class="keyword">) ) {
<br />            </span><span class="default">$ret </span><span class="keyword">.= </span><span class="default">fgets</span><span class="keyword">( </span><span class="default">$socket</span><span class="keyword">, </span><span class="default">4096 </span><span class="keyword">);
<br />        }
<br />    }
<br />    </span><span class="default">fclose</span><span class="keyword">( </span><span class="default">$socket </span><span class="keyword">);
<br />    echo </span><span class="string">"&lt;hr&gt; </span><span class="default">$i</span><span class="string"> -- </span><span class="default">$content</span><span class="string"> </span><span class="default">$ret</span><span class="string">"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Alejandro Salamanca</span></code></div>
  </div>
 </div>
  <div class="note" id="33411">  <div class="votes">
    <div id="Vu33411">
    <a href="/manual/vote-note.php?id=33411&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33411">
    <a href="/manual/vote-note.php?id=33411&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33411" title="53% like this...">
    1
    </div>
  </div>
  <a href="#33411" class="name">
  <strong class="user"><em>xbensemhoun at t-systems dot fr</em></strong></a><a class="genanchor" href="#33411"> &para;</a><div class="date" title="2003-06-25 02:48"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33411">
<div class="phpcode"><code><span class="html">To make a telnet connection with a Cisco router:
<br />
<br /><span class="default">&lt;?php
<br />$cfgServer </span><span class="keyword">= </span><span class="string">"nnn.nnn.nnn.nnn"</span><span class="keyword">;  </span><span class="comment">//IP of your router
<br /></span><span class="default">$cfgPort    </span><span class="keyword">= </span><span class="default">23</span><span class="keyword">;                </span><span class="comment">//port, 22 if SSH
<br /></span><span class="default">$cfgTimeOut </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;
<br />
<br /></span><span class="default">$usenet </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$cfgServer</span><span class="keyword">, </span><span class="default">$cfgPort</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$cfgTimeOut</span><span class="keyword">);
<br />
<br />if(!</span><span class="default">$usenet</span><span class="keyword">)
<br />        {
<br />        echo </span><span class="string">"Connexion failed\n"</span><span class="keyword">;
<br />        exit();
<br />        }
<br />else
<br />        {
<br />        echo </span><span class="string">"Connected\n&lt;BR&gt;"</span><span class="keyword">;
<br />        </span><span class="default">fputs </span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="string">"toto\r\n"</span><span class="keyword">);
<br />        </span><span class="default">fputs </span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="string">"en\r\n"</span><span class="keyword">);
<br />        </span><span class="default">fputs </span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="string">"tutu\r\n"</span><span class="keyword">);
<br />        </span><span class="default">fputs </span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="string">"exit\r\n"</span><span class="keyword">);
<br />        while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">))
<br />                {
<br />                echo </span><span class="string">". "</span><span class="keyword">.</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$usenet</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">).</span><span class="string">"&lt;BR&gt;\n"</span><span class="keyword">;
<br />                }
<br />        }
<br /></span><span class="default">?&gt;
<br /></span>
<br />Then you will have:
<br />Connected
<br />. ��������
<br />.
<br />. User Access Verification
<br />.
<br />. Password:
<br />. testXB&gt;en
<br />. Password:
<br />. testXB#exit
<br />.</span></code></div>
  </div>
 </div>
  <div class="note" id="123157">  <div class="votes">
    <div id="Vu123157">
    <a href="/manual/vote-note.php?id=123157&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123157">
    <a href="/manual/vote-note.php?id=123157&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123157" title="100% like this...">
    1
    </div>
  </div>
  <a href="#123157" class="name">
  <strong class="user"><em>Goce Dokoski</em></strong></a><a class="genanchor" href="#123157"> &para;</a><div class="date" title="2018-09-25 07:45"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123157">
<div class="phpcode"><code><span class="html">Trying to fsockopen an ssl:// connection, but it was hanging for a long time, ignoring timeout parameter, and eventually returning false, without an error message. <br /><br />Turns out (at least) on Windows it validates certificates and doesn't have a valid certificate store.<br /><br />This worked for me:<br /><br />- download Mozilla's certificate store from <a href="https://curl.haxx.se/ca/cacert.pem" rel="nofollow" target="_blank">https://curl.haxx.se/ca/cacert.pem</a><br />- copy it inside php installation (for example: c:\php)<br />- and set it up in php.ini <br />        <br />              openssl.cafile="c:\php\cacert.pem"<br /><br />My system: Apache/2.4.29 (Win64) OpenSSL/1.0.2n PHP/5.6.38</span></code></div>
  </div>
 </div>
  <div class="note" id="115405">  <div class="votes">
    <div id="Vu115405">
    <a href="/manual/vote-note.php?id=115405&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115405">
    <a href="/manual/vote-note.php?id=115405&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115405" title="50% like this...">
    1
    </div>
  </div>
  <a href="#115405" class="name">
  <strong class="user"><em>p14nd4</em></strong></a><a class="genanchor" href="#115405"> &para;</a><div class="date" title="2014-07-18 09:30"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115405">
<div class="phpcode"><code><span class="html">It appears that in PHP 5.6.0 (at least the version in Debian jessie, with openssl 1.0.1h-3), this function *is* now validating SSL certificates (in a variety of ways). First, it appears to fail for untrusted certificates (i.e. no matching CA trusted locally), and secondly, it appears to fail for mismatched hostnames in the request and certificate.<br /><br />---------<br />$ echo "<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">fsockopen</span><span class="keyword">(\</span><span class="string">"ssl://localhost\", 993); ?&gt;" </span><span class="keyword">| </span><span class="default">php </span><span class="keyword">-</span><span class="default">a<br />Interactive mode enabled<br /><br />PHP Warning</span><span class="keyword">:  </span><span class="default">fsockopen</span><span class="keyword">(): </span><span class="default">Peer certificate CN</span><span class="keyword">=`</span><span class="string">my.test.server' did not match expected CN=</span><span class="keyword">`</span><span class="default">localhost</span><span class="string">' in - on line 1<br />PHP Warning:  fsockopen(): Failed to enable crypto in - on line 1<br />PHP Warning:  fsockopen(): unable to connect to ssl://localhost:993 (Unknown error) in - on line 1<br />----------<br />$ echo "&lt;?php echo fsockopen(\"ssl://my.test.server\", 993); ?&gt;" | php -a<br />Interactive mode enabled<br /><br />PHP Warning:  fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:<br />error:14090086:SSL routines:SSL3_GET_SERVER_CERTIFICATE:certificate verify failed in - on line 1<br />PHP Warning:  fsockopen(): Failed to enable crypto in - on line 1<br />PHP Warning:  fsockopen(): unable to connect to ssl://my.test.server:993 (Unknown error) in - on line 1<br />---------<br />#installed CA locally<br />---------<br />$ echo "&lt;?php echo fsockopen(\"ssl://my.test.server\", 993); ?&gt;" | php -a<br />Interactive mode enabled<br /><br />Resource id #1</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127649">  <div class="votes">
    <div id="Vu127649">
    <a href="/manual/vote-note.php?id=127649&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127649">
    <a href="/manual/vote-note.php?id=127649&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127649" title="no votes...">
    0
    </div>
  </div>
  <a href="#127649" class="name">
  <strong class="user"><em>jszoja at gmail dot com</em></strong></a><a class="genanchor" href="#127649"> &para;</a><div class="date" title="2022-09-17 06:23"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127649">
<div class="phpcode"><code><span class="html">Opening non-existing socket file via `unix//` protocol will result in exception also when suppressing error with @ like:<br /><span class="default">&lt;?php<br />$fh </span><span class="keyword">= @</span><span class="default">fsockopen</span><span class="keyword">(</span><span class="string">'unix:///var/run/file-not-exists.sock'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />It is important to know when migrating  from PHP 7.4 to 8.x, as handling error suppression with @ has changed.</span></code></div>
  </div>
 </div>
  <div class="note" id="107020">  <div class="votes">
    <div id="Vu107020">
    <a href="/manual/vote-note.php?id=107020&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107020">
    <a href="/manual/vote-note.php?id=107020&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107020" title="50% like this...">
    0
    </div>
  </div>
  <a href="#107020" class="name">
  <strong class="user"><em>kexianbin at diyism dot com</em></strong></a><a class="genanchor" href="#107020"> &para;</a><div class="date" title="2011-12-28 08:15"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107020">
<div class="phpcode"><code><span class="html">My recursive unchunk function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">unchunk</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)
<br />         {return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/([0-9A-F]+)\r\n(.*)/sie'</span><span class="keyword">,
<br />                              </span><span class="string">'($cnt=@base_convert("\1", 16, 10))
<br />                               ?substr(($str=@strtr(\'\2\', array(\'\"\'=&gt;\'"\', \'\\\\0\'=&gt;"\x00"))), 0, $cnt).unchunk(substr($str, $cnt+2))
<br />                               :""
<br />                              '</span><span class="keyword">,
<br />                              </span><span class="default">$result
<br />                             </span><span class="keyword">);
<br />         }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82586">  <div class="votes">
    <div id="Vu82586">
    <a href="/manual/vote-note.php?id=82586&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82586">
    <a href="/manual/vote-note.php?id=82586&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82586" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82586" class="name">
  <strong class="user"><em>jabeba at web dot de</em></strong></a><a class="genanchor" href="#82586"> &para;</a><div class="date" title="2008-04-17 06:21"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82586">
<div class="phpcode"><code><span class="html">If you have to use a proxy to make requests outside of your local network, you may use this class:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/*
<br /> * 
<br /> * No Proxy Authentification Implemented; PHP 5
<br /> * 
<br /> */
<br />
<br /></span><span class="keyword">class </span><span class="default">RemoteFopenViaProxy </span><span class="keyword">{
<br />
<br />    private </span><span class="default">$result</span><span class="keyword">;
<br />    private </span><span class="default">$proxy_name</span><span class="keyword">;
<br />    private </span><span class="default">$proxy_port</span><span class="keyword">;
<br />    private </span><span class="default">$request_url</span><span class="keyword">;
<br />
<br />    public function </span><span class="default">get_proxy_name</span><span class="keyword">() {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">proxy_name</span><span class="keyword">;
<br />    }
<br />
<br />    public function </span><span class="default">set_proxy_name</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">) {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">proxy_name </span><span class="keyword">= </span><span class="default">$n</span><span class="keyword">;
<br />    }
<br />
<br />    public function </span><span class="default">get_proxy_port</span><span class="keyword">() {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">proxy_port</span><span class="keyword">;
<br />    }
<br />
<br />    public function </span><span class="default">set_proxy_port</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">) {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">proxy_port </span><span class="keyword">= </span><span class="default">$p</span><span class="keyword">;
<br />    }
<br />
<br />    public function </span><span class="default">get_request_url</span><span class="keyword">() {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">request_url</span><span class="keyword">;
<br />    }
<br />
<br />    public function </span><span class="default">set_request_url</span><span class="keyword">(</span><span class="default">$u</span><span class="keyword">) {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">request_url </span><span class="keyword">= </span><span class="default">$u</span><span class="keyword">;
<br />    }
<br />
<br />    public function </span><span class="default">get_result</span><span class="keyword">() {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">result</span><span class="keyword">;
<br />    }
<br />
<br />    public function </span><span class="default">set_result</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">) {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">result </span><span class="keyword">= </span><span class="default">$r</span><span class="keyword">;
<br />    }
<br />
<br />    private function </span><span class="default">get_url_via_proxy</span><span class="keyword">() {
<br />
<br />        </span><span class="default">$proxy_fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_proxy_name</span><span class="keyword">(), </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_proxy_port</span><span class="keyword">());
<br />
<br />        if (!</span><span class="default">$proxy_fp</span><span class="keyword">) {
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$proxy_fp</span><span class="keyword">, </span><span class="string">"GET " </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_request_url</span><span class="keyword">() . </span><span class="string">" HTTP/1.0\r\nHost: " </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_proxy_name</span><span class="keyword">() . </span><span class="string">"\r\n\r\n"</span><span class="keyword">);
<br />        while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$proxy_fp</span><span class="keyword">)) {
<br />            </span><span class="default">$proxy_cont </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$proxy_fp</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);
<br />        }
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$proxy_fp</span><span class="keyword">);
<br />        </span><span class="default">$proxy_cont </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$proxy_cont</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$proxy_cont</span><span class="keyword">, </span><span class="string">"\r\n\r\n"</span><span class="keyword">) + </span><span class="default">4</span><span class="keyword">);
<br />        return </span><span class="default">$proxy_cont</span><span class="keyword">;
<br />
<br />    }
<br />
<br />    private function </span><span class="default">get_url</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">) {
<br />        </span><span class="default">$fd </span><span class="keyword">= @ </span><span class="default">file</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);
<br />        if (</span><span class="default">$fd</span><span class="keyword">) {
<br />            return </span><span class="default">$fd</span><span class="keyword">;
<br />        } else {
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />    }
<br />
<br />    private function </span><span class="default">logger</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">) {
<br />        </span><span class="default">$fd </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file </span><span class="keyword">. </span><span class="string">".log"</span><span class="keyword">, </span><span class="string">"a+"</span><span class="keyword">);
<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">date</span><span class="keyword">(</span><span class="string">"Ymd G:i:s"</span><span class="keyword">) . </span><span class="string">" - " </span><span class="keyword">. </span><span class="default">$file </span><span class="keyword">. </span><span class="string">" - " </span><span class="keyword">. </span><span class="default">$line </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">);
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);
<br />    }
<br />
<br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">$proxy_name </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">, </span><span class="default">$proxy_port </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">) {
<br />
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">set_request_url</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">set_proxy_name</span><span class="keyword">(</span><span class="default">$proxy_name</span><span class="keyword">);
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">set_proxy_port</span><span class="keyword">(</span><span class="default">$proxy_port</span><span class="keyword">);
<br />
<br />    }
<br />
<br />    public function </span><span class="default">request_via_proxy</span><span class="keyword">() {
<br />
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">set_result</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_url_via_proxy</span><span class="keyword">());
<br />        if (!</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_result</span><span class="keyword">()) {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">logger</span><span class="keyword">(</span><span class="string">"FAILED: get_url_via_proxy(" </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_proxy_name</span><span class="keyword">() . </span><span class="string">"," </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_proxy_port</span><span class="keyword">() . </span><span class="string">"," </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_request_url</span><span class="keyword">() . </span><span class="string">")"</span><span class="keyword">, </span><span class="string">"RemoteFopenViaProxyClass.log"</span><span class="keyword">);
<br />        }
<br />    }
<br />
<br />    public function </span><span class="default">request_without_proxy</span><span class="keyword">() {
<br />
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">set_result</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_url</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_request_url</span><span class="keyword">()));
<br />        if (!</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_result</span><span class="keyword">()) {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">logger</span><span class="keyword">(</span><span class="string">"FAILED: get_url(" </span><span class="keyword">. </span><span class="default">$url </span><span class="keyword">. </span><span class="string">")"</span><span class="keyword">, </span><span class="string">"RemoteFopenViaProxyClass.log"</span><span class="keyword">);
<br />        }
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Use it this way:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// call constructor
<br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">RemoteFopenViaProxy</span><span class="keyword">(</span><span class="default">$insert_request_url</span><span class="keyword">, </span><span class="default">$insert_proxy_name</span><span class="keyword">, </span><span class="default">$insert_proxy_port</span><span class="keyword">);
<br /></span><span class="comment">// change settings after object generation
<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">set_proxy_name</span><span class="keyword">(</span><span class="default">$insert_proxy_name</span><span class="keyword">);
<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">set_proxy_port</span><span class="keyword">(</span><span class="default">$insert_proxy_port</span><span class="keyword">);
<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">set_request_url</span><span class="keyword">(</span><span class="default">$insert_request_url</span><span class="keyword">);
<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">request_via_proxy</span><span class="keyword">();
<br />echo </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">get_result</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />If there are errors during execution, the script tries to write some useful information into a log file.</span></code></div>
  </div>
 </div>
  <div class="note" id="92588">  <div class="votes">
    <div id="Vu92588">
    <a href="/manual/vote-note.php?id=92588&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92588">
    <a href="/manual/vote-note.php?id=92588&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92588" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#92588" class="name">
  <strong class="user"><em>walter</em></strong></a><a class="genanchor" href="#92588"> &para;</a><div class="date" title="2009-07-30 08:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92588">
<div class="phpcode"><code><span class="html">For some reason the default FreeBSD 7.0 port (jailed environment) breaks fsockopen() on SSL URLs, returning a constant stream of nothing!  In my case this resulted in php-cgi bringing down lighttpd completely, in rapid time!  Avoid FreeBSD/jails/fsockopen + SSL.  Use curl_init() instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="99689">  <div class="votes">
    <div id="Vu99689">
    <a href="/manual/vote-note.php?id=99689&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99689">
    <a href="/manual/vote-note.php?id=99689&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99689" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#99689" class="name">
  <strong class="user"><em>gratcypalma at gmail dot com</em></strong></a><a class="genanchor" href="#99689"> &para;</a><div class="date" title="2010-08-30 08:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99689">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/*<br />this script i used for remote my PvPGN Server, to check email user.<br />not good, but it work.<br />*/<br /><br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">); <br /></span><span class="default">$host   </span><span class="keyword">= </span><span class="string">'host'</span><span class="keyword">;<br /></span><span class="default">$port   </span><span class="keyword">= </span><span class="string">'port'</span><span class="keyword">;<br /></span><span class="default">$user   </span><span class="keyword">= </span><span class="string">'user'</span><span class="keyword">;<br /></span><span class="default">$pass   </span><span class="keyword">= </span><span class="string">'pass'</span><span class="keyword">;<br /></span><span class="default">$socket </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">) or die(</span><span class="string">'Could not connect to: '</span><span class="keyword">.</span><span class="default">$host</span><span class="keyword">);<br /></span><span class="default">$userdota </span><span class="keyword">= </span><span class="string">"palma"</span><span class="keyword">;<br />if(</span><span class="default">$socket</span><span class="keyword">) <br />{ <br />    </span><span class="default">sendcmd</span><span class="keyword">(</span><span class="string">"\r"</span><span class="keyword">,</span><span class="default">$socket</span><span class="keyword">);<br />    </span><span class="default">$status </span><span class="keyword">= </span><span class="string">"open"</span><span class="keyword">; </span><span class="comment">// set status open<br />        <br />    </span><span class="keyword">while(</span><span class="default">$status</span><span class="keyword">==</span><span class="string">"open"</span><span class="keyword">) </span><span class="comment">//while we are connected to the server <br />      </span><span class="keyword">{     <br />             </span><span class="default">$line </span><span class="keyword">= @</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">) ;<br />              </span><span class="comment">/////////////login////////////////    <br />            </span><span class="keyword">if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">, </span><span class="string">"there is no guest account"</span><span class="keyword">))<br />              {<br />                 </span><span class="default">sendcmd</span><span class="keyword">(</span><span class="default">$user</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">,</span><span class="default">$socket</span><span class="keyword">);<br />                 </span><span class="default">sendcmd</span><span class="keyword">(</span><span class="default">$pass</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">,</span><span class="default">$socket</span><span class="keyword">);<br />              }    <br />            </span><span class="comment">//////////////send command ////////////////////<br />            </span><span class="keyword">if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">,</span><span class="string">"Your unique name: "</span><span class="keyword">.</span><span class="default">$user</span><span class="keyword">))<br />              {  </span><span class="default">sendcmd</span><span class="keyword">(</span><span class="string">"/finger "</span><span class="keyword">.</span><span class="default">$userdota</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">,</span><span class="default">$socket</span><span class="keyword">);<br />              }<br />            <br />            </span><span class="comment">//////////////get email////////////////////<br />            </span><span class="keyword">if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">,</span><span class="string">"email:"</span><span class="keyword">)) </span><span class="comment">// if respone server write "email:"<br />              </span><span class="keyword">{  <br />                 </span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">'/email:(.*) ,/'</span><span class="keyword">;<br />                 </span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />                 </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">); <br />                 </span><span class="default">$status</span><span class="keyword">=</span><span class="string">"close"</span><span class="keyword">; </span><span class="comment">// status close<br />                 </span><span class="default">$matches</span><span class="keyword">=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />                 </span><span class="default">$matches</span><span class="keyword">=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">",is_operator:0,is_admin:0,"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />                 </span><span class="default">$matches</span><span class="keyword">=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"email:"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />                 print </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];                 <br />                 </span><span class="default">$email</span><span class="keyword">=</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />              }<br />            if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">,</span><span class="string">"ERROR: Invalid user."</span><span class="keyword">)) </span><span class="comment">// if respone server write "ERROR: Invalid user."<br />              </span><span class="keyword">{  <br />                 <br />                 </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">); <br />                 </span><span class="default">$status</span><span class="keyword">=</span><span class="string">"close"</span><span class="keyword">;<br />                 </span><span class="default">$error </span><span class="keyword">=</span><span class="string">"Invalid User"</span><span class="keyword">;    </span><span class="comment">// error message<br />              </span><span class="keyword">}<br />            <br />            </span><span class="comment">////////////login failed //////////////////////////             <br />            </span><span class="keyword">if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">, </span><span class="string">"Login failed"</span><span class="keyword">)) </span><span class="comment">// if respone server write "Login failed"<br />              </span><span class="keyword">{<br />                 </span><span class="default">$error </span><span class="keyword">= </span><span class="string">"Login Failed"</span><span class="keyword">;    </span><span class="comment">// error message<br />                 </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">); <br />                 </span><span class="default">$status</span><span class="keyword">=</span><span class="string">"close"</span><span class="keyword">;<br />              }<br />            <br />            </span><span class="default">flush</span><span class="keyword">(); </span><span class="comment">// close<br />      <br />      </span><span class="keyword">}<br />          <br />}<br />function </span><span class="default">sendcmd</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">,</span><span class="default">$socket</span><span class="keyword">) </span><span class="comment">// send command function<br /></span><span class="keyword">{<br />  </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$cmd</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">)); <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="39948">  <div class="votes">
    <div id="Vu39948">
    <a href="/manual/vote-note.php?id=39948&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39948">
    <a href="/manual/vote-note.php?id=39948&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39948" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#39948" class="name">
  <strong class="user"><em>jack at jtr dot de</em></strong></a><a class="genanchor" href="#39948"> &para;</a><div class="date" title="2004-02-16 02:05"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39948">
<div class="phpcode"><code><span class="html">Here is a function for testing a website/URI for availability:<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">/*<br />    * @return boolean<br />    * @param  string $link<br />    * @desc   ?berpr?ft die angegeben URL auf Erreichbarkeit (HTTP-Code: 200)<br />    */<br />    </span><span class="keyword">function </span><span class="default">url_validate</span><span class="keyword">( </span><span class="default">$link </span><span class="keyword">)<br />    {        <br />        </span><span class="default">$url_parts </span><span class="keyword">= @</span><span class="default">parse_url</span><span class="keyword">( </span><span class="default">$link </span><span class="keyword">);<br /><br />        if ( empty( </span><span class="default">$url_parts</span><span class="keyword">[</span><span class="string">"host"</span><span class="keyword">] ) ) return( </span><span class="default">false </span><span class="keyword">);<br /><br />        if ( !empty( </span><span class="default">$url_parts</span><span class="keyword">[</span><span class="string">"path"</span><span class="keyword">] ) )<br />        {<br />            </span><span class="default">$documentpath </span><span class="keyword">= </span><span class="default">$url_parts</span><span class="keyword">[</span><span class="string">"path"</span><span class="keyword">];<br />        }<br />        else<br />        {<br />            </span><span class="default">$documentpath </span><span class="keyword">= </span><span class="string">"/"</span><span class="keyword">;<br />        }<br /><br />        if ( !empty( </span><span class="default">$url_parts</span><span class="keyword">[</span><span class="string">"query"</span><span class="keyword">] ) )<br />        {<br />            </span><span class="default">$documentpath </span><span class="keyword">.= </span><span class="string">"?" </span><span class="keyword">. </span><span class="default">$url_parts</span><span class="keyword">[</span><span class="string">"query"</span><span class="keyword">];<br />        }<br /><br />        </span><span class="default">$host </span><span class="keyword">= </span><span class="default">$url_parts</span><span class="keyword">[</span><span class="string">"host"</span><span class="keyword">];<br />        </span><span class="default">$port </span><span class="keyword">= </span><span class="default">$url_parts</span><span class="keyword">[</span><span class="string">"port"</span><span class="keyword">];<br />        </span><span class="comment">// Now (HTTP-)GET $documentpath at $host";<br /><br />        </span><span class="keyword">if (empty( </span><span class="default">$port </span><span class="keyword">) ) </span><span class="default">$port </span><span class="keyword">= </span><span class="string">"80"</span><span class="keyword">;<br />        </span><span class="default">$socket </span><span class="keyword">= @</span><span class="default">fsockopen</span><span class="keyword">( </span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">30 </span><span class="keyword">);<br />        if (!</span><span class="default">$socket</span><span class="keyword">)<br />        {<br />            return(</span><span class="default">false</span><span class="keyword">);<br />        }<br />        else<br />        {<br />            </span><span class="default">fwrite </span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="string">"HEAD "</span><span class="keyword">.</span><span class="default">$documentpath</span><span class="keyword">.</span><span class="string">" HTTP/1.0\r\nHost: </span><span class="default">$host</span><span class="string">\r\n\r\n"</span><span class="keyword">);<br />            </span><span class="default">$http_response </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">( </span><span class="default">$socket</span><span class="keyword">, </span><span class="default">22 </span><span class="keyword">);<br />            <br />            if ( </span><span class="default">ereg</span><span class="keyword">(</span><span class="string">"200 OK"</span><span class="keyword">, </span><span class="default">$http_response</span><span class="keyword">, </span><span class="default">$regs </span><span class="keyword">) )<br />            {<br />                return(</span><span class="default">true</span><span class="keyword">);<br />                </span><span class="default">fclose</span><span class="keyword">( </span><span class="default">$socket </span><span class="keyword">);<br />            } else<br />            {<br /></span><span class="comment">//                echo "HTTP-Response: $http_response&lt;br&gt;";<br />                </span><span class="keyword">return(</span><span class="default">false</span><span class="keyword">);<br />            }<br />        }<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118847">  <div class="votes">
    <div id="Vu118847">
    <a href="/manual/vote-note.php?id=118847&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118847">
    <a href="/manual/vote-note.php?id=118847&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118847" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#118847" class="name">
  <strong class="user"><em>perrya at shoalhaven dot nsw dot gov dot au</em></strong></a><a class="genanchor" href="#118847"> &para;</a><div class="date" title="2016-02-16 12:48"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118847">
<div class="phpcode"><code><span class="html">on my FreeBSD vm, with Joomla, I was getting the error <br /><br />fsockopen(): unable to connect to ssl://localhost:443 (Unknown error)<br /><br />when using a contact form and also the module updating process.<br /><br />After reading other notes on here, regarding certificate validation, I installed the port ca_root_nss<br /><br />(Root certificates from certificate authorities included in the Mozilla<br />NSS library and thus in Firefox and Thunderbird.)<br /><br />Now it works</span></code></div>
  </div>
 </div>
  <div class="note" id="36819">  <div class="votes">
    <div id="Vu36819">
    <a href="/manual/vote-note.php?id=36819&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36819">
    <a href="/manual/vote-note.php?id=36819&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36819" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#36819" class="name">
  <strong class="user"><em>terminal</em></strong></a><a class="genanchor" href="#36819"> &para;</a><div class="date" title="2003-10-23 12:30"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36819">
<div class="phpcode"><code><span class="html">Try this.<br />Use AUTH when necessary.<br />Read RFC 821 when having problems.<br /><br /><span class="default">&lt;?php<br /><br />    $handle </span><span class="keyword">= </span><span class="default">smtp_connect</span><span class="keyword">(</span><span class="default">$smtp_server</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    echo </span><span class="default">smtp_command</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="string">"EHLO </span><span class="default">$domain</span><span class="string">\r\n"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    echo </span><span class="default">smtp_command</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="string">"MAIL FROM:&lt;</span><span class="default">$from_mail</span><span class="string">&gt;\r\n"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    echo </span><span class="default">smtp_command</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="string">"RCPT TO:&lt;</span><span class="default">$to_mail</span><span class="string">&gt;\r\n"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    echo </span><span class="default">smtp_command</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="string">"DATA\r\n"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    echo </span><span class="default">smtp_command</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="string">"</span><span class="default">$message</span><span class="string">\r\n.\r\n"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="comment">// don't do it like this - it will hang up<br />    // echo smtp_command($handle, "$message", 1, 1);<br />    // echo smtp_command($handle, "\r\n.\r\n", 1, 1);<br />    </span><span class="keyword">echo </span><span class="default">smtp_command</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="string">"QUIT\r\n"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">smtp_close</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">); <br />    <br />    <br />    function </span><span class="default">smtp_connect</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">=</span><span class="default">30</span><span class="keyword">, </span><span class="default">$echo_command</span><span class="keyword">=</span><span class="default">False</span><span class="keyword">, </span><span class="default">$echo_response</span><span class="keyword">=</span><span class="default">False</span><span class="keyword">, </span><span class="default">$nl2br</span><span class="keyword">=</span><span class="default">False</span><span class="keyword">)<br />    {<br />        </span><span class="default">$errno </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$errstr </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        if(</span><span class="default">$echo_command</span><span class="keyword">)<br />        {<br />            if(</span><span class="default">$nl2br</span><span class="keyword">) { echo </span><span class="default">nl2br</span><span class="keyword">(</span><span class="string">"CONNECTING TO </span><span class="default">$host</span><span class="string">\r\n"</span><span class="keyword">); }<br />            else { echo </span><span class="string">"CONNECTING TO </span><span class="default">$host</span><span class="string">\r\n"</span><span class="keyword">; }<br />        }<br />        </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">);<br />        if(!</span><span class="default">$handle</span><span class="keyword">)<br />        {<br />            if(</span><span class="default">$echo_command</span><span class="keyword">)<br />            {<br />                if(</span><span class="default">$nl2br</span><span class="keyword">) { echo </span><span class="default">nl2br</span><span class="keyword">(</span><span class="string">"CONNECTION FAILED\r\n"</span><span class="keyword">); }<br />                else { echo </span><span class="string">"CONNECTION FAILED\r\n"</span><span class="keyword">; }<br />            }<br />            return </span><span class="default">False</span><span class="keyword">;<br />        }<br />        if(</span><span class="default">$echo_command</span><span class="keyword">)<br />        {<br />            if(</span><span class="default">$nl2br</span><span class="keyword">) { echo </span><span class="default">nl2br</span><span class="keyword">(</span><span class="string">"SUCCESS\r\n"</span><span class="keyword">); }<br />            else { echo </span><span class="string">"SUCCESS\r\n"</span><span class="keyword">; }<br />        }<br />        </span><span class="default">$response </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$bytes_left </span><span class="keyword">= </span><span class="default">socket_get_status</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />        if (</span><span class="default">$bytes_left </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) { </span><span class="default">$response </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$bytes_left</span><span class="keyword">[</span><span class="string">"unread_bytes"</span><span class="keyword">]); }<br />        if(</span><span class="default">$echo_response</span><span class="keyword">)<br />        {<br />            if(</span><span class="default">$nl2br</span><span class="keyword">) { echo </span><span class="default">nl2br</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">); }<br />            else { echo </span><span class="default">$response</span><span class="keyword">; }<br />        }<br />        return </span><span class="default">$handle</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">smtp_command</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$command</span><span class="keyword">, </span><span class="default">$echo_command</span><span class="keyword">=</span><span class="default">False</span><span class="keyword">, </span><span class="default">$nl2br</span><span class="keyword">=</span><span class="default">False</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">$echo_command</span><span class="keyword">)<br />        {<br />            if(</span><span class="default">$nl2br</span><span class="keyword">) { echo </span><span class="default">nl2br</span><span class="keyword">(</span><span class="default">$command</span><span class="keyword">); }<br />            else { echo </span><span class="default">$command</span><span class="keyword">; }<br />        }<br />        </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$command</span><span class="keyword">);<br />        </span><span class="default">$response </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$bytes_left </span><span class="keyword">= </span><span class="default">socket_get_status</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />        if (</span><span class="default">$bytes_left </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) { </span><span class="default">$response </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$bytes_left</span><span class="keyword">[</span><span class="string">"unread_bytes"</span><span class="keyword">]); }<br />        if(</span><span class="default">$nl2br</span><span class="keyword">) { return </span><span class="default">nl2br</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">); }<br />        else { return </span><span class="default">$response</span><span class="keyword">; }<br />    }<br />    <br />    function </span><span class="default">smtp_close</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)<br />    {<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="29005">  <div class="votes">
    <div id="Vu29005">
    <a href="/manual/vote-note.php?id=29005&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29005">
    <a href="/manual/vote-note.php?id=29005&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29005" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#29005" class="name">
  <strong class="user"><em>Sherif Gayed</em></strong></a><a class="genanchor" href="#29005"> &para;</a><div class="date" title="2003-01-29 10:00"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29005">
<div class="phpcode"><code><span class="html">Here is how to connect to the web from behind a proxy server:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/*************start code**************/
<br />/*your proxy server address*/
<br /></span><span class="default">$proxy </span><span class="keyword">= </span><span class="string">"192.168.10.1"</span><span class="keyword">;
<br /></span><span class="comment">/*your proxy server port*/
<br /></span><span class="default">$port </span><span class="keyword">= </span><span class="default">8080</span><span class="keyword">;
<br /></span><span class="comment">/*the url you want to connect to*/
<br /></span><span class="default">$url </span><span class="keyword">= </span><span class="string">"<a href="http://www.php.net/" rel="nofollow" target="_blank">http://www.php.net/</a>"</span><span class="keyword">;
<br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$proxy</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);
<br /></span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"GET </span><span class="default">$url</span><span class="string"> HTTP/1.0\r\nHost: </span><span class="default">$proxy</span><span class="string">\r\n\r\n"</span><span class="keyword">);
<br />while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)){
<br />  </span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">4000</span><span class="keyword">);
<br />  print(</span><span class="default">$line</span><span class="keyword">);
<br />}
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br /></span><span class="comment">/**************end code**************/
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85572">  <div class="votes">
    <div id="Vu85572">
    <a href="/manual/vote-note.php?id=85572&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85572">
    <a href="/manual/vote-note.php?id=85572&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85572" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#85572" class="name">
  <strong class="user"><em>mikey at badpenguins dot com</em></strong></a><a class="genanchor" href="#85572"> &para;</a><div class="date" title="2008-09-06 09:00"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85572">
<div class="phpcode"><code><span class="html">My $0.02 on handling chunked transfer encoded output...  Has rudimentary error handling.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//
<br />// Example usage...
<br />//
<br /></span><span class="default">$server  </span><span class="keyword">= </span><span class="string">'127.0.0.1'</span><span class="keyword">;
<br /></span><span class="default">$port    </span><span class="keyword">= </span><span class="string">'80'</span><span class="keyword">;
<br /></span><span class="default">$uri     </span><span class="keyword">= </span><span class="string">'/cgi-bin/random-cgi'</span><span class="keyword">;
<br /></span><span class="default">$content </span><span class="keyword">= </span><span class="string">'Your post content...'</span><span class="keyword">;
<br />
<br /></span><span class="default">$post_results </span><span class="keyword">= </span><span class="default">httpPost</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">,</span><span class="default">$port</span><span class="keyword">,</span><span class="default">$uri</span><span class="keyword">,</span><span class="default">$content</span><span class="keyword">);
<br />if (!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$post_results</span><span class="keyword">)) {
<br />    die(</span><span class="string">'uh oh, something went wrong'</span><span class="keyword">);
<br />    } else {
<br />    die(</span><span class="string">'Here are your results: ' </span><span class="keyword">. </span><span class="default">$post_results</span><span class="keyword">);
<br />    }
<br />
<br /></span><span class="comment">//
<br />// Post provided content to an http server and optionally
<br />// convert chunk encoded results.  Returns false on errors,
<br />// result of post on success.  This example only handles http,
<br />// not https.
<br />//
<br /></span><span class="keyword">function </span><span class="default">httpPost</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">,</span><span class="default">$port</span><span class="keyword">=</span><span class="default">80</span><span class="keyword">,</span><span class="default">$uri</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">,</span><span class="default">$content</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) {
<br />    if (empty(</span><span class="default">$ip</span><span class="keyword">))         { return </span><span class="default">false</span><span class="keyword">; }
<br />    if (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$port</span><span class="keyword">)) { return </span><span class="default">false</span><span class="keyword">; }
<br />    if (empty(</span><span class="default">$uri</span><span class="keyword">))        { return </span><span class="default">false</span><span class="keyword">; }
<br />    if (empty(</span><span class="default">$content</span><span class="keyword">))    { return </span><span class="default">false</span><span class="keyword">; }
<br />    </span><span class="comment">// generate headers in array.
<br />    </span><span class="default">$t   </span><span class="keyword">= array();
<br />    </span><span class="default">$t</span><span class="keyword">[] = </span><span class="string">'POST ' </span><span class="keyword">. </span><span class="default">$uri </span><span class="keyword">. </span><span class="string">' HTTP/1.1'</span><span class="keyword">;
<br />    </span><span class="default">$t</span><span class="keyword">[] = </span><span class="string">'Content-Type: text/html'</span><span class="keyword">;
<br />    </span><span class="default">$t</span><span class="keyword">[] = </span><span class="string">'Host: ' </span><span class="keyword">. </span><span class="default">$ip </span><span class="keyword">. </span><span class="string">':' </span><span class="keyword">. </span><span class="default">$port</span><span class="keyword">;
<br />    </span><span class="default">$t</span><span class="keyword">[] = </span><span class="string">'Content-Length: ' </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">);
<br />    </span><span class="default">$t</span><span class="keyword">[] = </span><span class="string">'Connection: close'</span><span class="keyword">;
<br />    </span><span class="default">$t   </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\r\n"</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">) . </span><span class="string">"\r\n\r\n" </span><span class="keyword">. </span><span class="default">$content</span><span class="keyword">;
<br />    </span><span class="comment">//
<br />    // Open socket, provide error report vars and timeout of 10
<br />    // seconds.
<br />    //
<br />    </span><span class="default">$fp  </span><span class="keyword">= @</span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">,</span><span class="default">$port</span><span class="keyword">,</span><span class="default">$errno</span><span class="keyword">,</span><span class="default">$errstr</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);
<br />    </span><span class="comment">// If we don't have a stream resource, abort.
<br />    </span><span class="keyword">if (!(</span><span class="default">get_resource_type</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">) == </span><span class="string">'stream'</span><span class="keyword">)) { return </span><span class="default">false</span><span class="keyword">; }
<br />    </span><span class="comment">//
<br />    // Send headers and content.
<br />    //
<br />    </span><span class="keyword">if (!</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">)) {
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />    </span><span class="comment">//
<br />    // Read all of response into $rsp and close the socket.
<br />    //
<br />    </span><span class="default">$rsp </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) { </span><span class="default">$rsp </span><span class="keyword">.= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">8192</span><span class="keyword">); }
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />    </span><span class="comment">//
<br />    // Call parseHttpResponse() to return the results.
<br />    //
<br />    </span><span class="keyword">return </span><span class="default">parseHttpResponse</span><span class="keyword">(</span><span class="default">$rsp</span><span class="keyword">);
<br />    }
<br />
<br /></span><span class="comment">//
<br />// Accepts provided http content, checks for a valid http response,
<br />// unchunks if needed, returns http content without headers on
<br />// success, false on any errors.
<br />//
<br /></span><span class="keyword">function </span><span class="default">parseHttpResponse</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) {
<br />    if (empty(</span><span class="default">$content</span><span class="keyword">)) { return </span><span class="default">false</span><span class="keyword">; }
<br />    </span><span class="comment">// split into array, headers and content.
<br />    </span><span class="default">$hunks </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\r\n\r\n"</span><span class="keyword">,</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">));
<br />    if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$hunks</span><span class="keyword">) or </span><span class="default">count</span><span class="keyword">(</span><span class="default">$hunks</span><span class="keyword">) &lt; </span><span class="default">2</span><span class="keyword">) {
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />    </span><span class="default">$header  </span><span class="keyword">= </span><span class="default">$hunks</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$hunks</span><span class="keyword">) - </span><span class="default">2</span><span class="keyword">];
<br />    </span><span class="default">$body    </span><span class="keyword">= </span><span class="default">$hunks</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$hunks</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">];
<br />    </span><span class="default">$headers </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">,</span><span class="default">$header</span><span class="keyword">);
<br />    unset(</span><span class="default">$hunks</span><span class="keyword">);
<br />    unset(</span><span class="default">$header</span><span class="keyword">);
<br />    if (!</span><span class="default">verifyHttpResponse</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">)) { return </span><span class="default">false</span><span class="keyword">; }
<br />    if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="string">'Transfer-Encoding: chunked'</span><span class="keyword">,</span><span class="default">$headers</span><span class="keyword">)) {
<br />        return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">unchunkHttpResponse</span><span class="keyword">(</span><span class="default">$body</span><span class="keyword">));
<br />        } else {
<br />        return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$body</span><span class="keyword">);
<br />        }
<br />    }
<br />
<br /></span><span class="comment">//
<br />// Validate http responses by checking header.  Expects array of
<br />// headers as argument.  Returns boolean.
<br />//
<br /></span><span class="keyword">function </span><span class="default">validateHttpResponse</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) {
<br />    if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">) or </span><span class="default">count</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">) &lt; </span><span class="default">1</span><span class="keyword">) { return </span><span class="default">false</span><span class="keyword">; }
<br />    switch(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]))) {
<br />        case </span><span class="string">'http/1.0 100 ok'</span><span class="keyword">:
<br />        case </span><span class="string">'http/1.0 200 ok'</span><span class="keyword">:
<br />        case </span><span class="string">'http/1.1 100 ok'</span><span class="keyword">:
<br />        case </span><span class="string">'http/1.1 200 ok'</span><span class="keyword">:
<br />            return </span><span class="default">true</span><span class="keyword">;
<br />        break;
<br />        }
<br />    return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="comment">//
<br />// Unchunk http content.  Returns unchunked content on success,
<br />// false on any errors...  Borrows from code posted above by
<br />// jbr at ya-right dot com.
<br />//
<br /></span><span class="keyword">function </span><span class="default">unchunkHttpResponse</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) {
<br />    if (!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) or </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) &lt; </span><span class="default">1</span><span class="keyword">) { return </span><span class="default">false</span><span class="keyword">; }
<br />    </span><span class="default">$eol </span><span class="keyword">= </span><span class="string">"\r\n"</span><span class="keyword">;
<br />    </span><span class="default">$add </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$eol</span><span class="keyword">);
<br />    </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">$str</span><span class="keyword">;
<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    do {
<br />        </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">ltrim</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">);
<br />        </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">$eol</span><span class="keyword">);
<br />        if (</span><span class="default">$pos </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) { return </span><span class="default">false</span><span class="keyword">; }
<br />        </span><span class="default">$len </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">));
<br />        if (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$len</span><span class="keyword">) or </span><span class="default">$len </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) { return </span><span class="default">false</span><span class="keyword">; }
<br />        </span><span class="default">$str </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, (</span><span class="default">$pos </span><span class="keyword">+ </span><span class="default">$add</span><span class="keyword">), </span><span class="default">$len</span><span class="keyword">);
<br />        </span><span class="default">$tmp  </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, (</span><span class="default">$len </span><span class="keyword">+ </span><span class="default">$pos </span><span class="keyword">+ </span><span class="default">$add</span><span class="keyword">));
<br />        </span><span class="default">$check </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">);
<br />        } while(!empty(</span><span class="default">$check</span><span class="keyword">));
<br />    unset(</span><span class="default">$tmp</span><span class="keyword">);
<br />    return </span><span class="default">$str</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114657">  <div class="votes">
    <div id="Vu114657">
    <a href="/manual/vote-note.php?id=114657&amp;page=function.fsockopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114657">
    <a href="/manual/vote-note.php?id=114657&amp;page=function.fsockopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114657" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#114657" class="name">
  <strong class="user"><em>biguenique at yahoo dot ca</em></strong></a><a class="genanchor" href="#114657"> &para;</a><div class="date" title="2014-03-19 04:29"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114657">
<div class="phpcode"><code><span class="html">Did you know that fsockopen() DOES NOT validate SSL certificates whatsoever? For the sake of World's overall security level, I guess it would be a very positive idea to add a BIG WARNING notice on the manual page!<br /><br />Citing the extensive study  titled "The Most Dangerous Code in the World: Validating SSL Certiﬁcates in Non-Browser Software" published in 2012 (google it if they removed the link) on page 5:<br /><br />"PHP provides several methods for establishing SSL connections. For example, fsockopen, which opens a raw socket to the remote server, can be used to connect to SSL servers by putting “ssl://” in the URL. Even though fsockopen does not perform any certificate checks whatsoever, PHP application developers routinely use it for SSL connection establishment (see Section 9)."<br /><br />For proper certificate validation with some level of ease, you can always move to cURL, but be careful:<br /><br />"PHP also provides a cURL binding, which uses cURL’s default settings to establish SSL connections with proper certificate validation. As we show in Sections 7.1, 7.2, and 7.3, application developers often set cURL options incorrectly, overriding the defaults and breaking certificate validation."<br /><br />For more detailed insights, try out the following code:<br /><span class="default">&lt;?php readfile</span><span class="keyword">(</span><span class="string">"http"</span><span class="keyword">.</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'+'</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="default">implode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, array(</span><span class="string">":"</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="string">"www+cs+utexas+edu"</span><span class="keyword">, </span><span class="string">"~shmat"</span><span class="keyword">, </span><span class="string">"shmat_ccs12.pdf"</span><span class="keyword">)))); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.fsockopen&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fsockopen.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.network.php">Network Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.checkdnsrr.php" title="checkdnsrr">checkdnsrr</a>
                        </li>
                                                <li class="">
                            <a href="function.closelog.php" title="closelog">closelog</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-check-record.php" title="dns_&#8203;check_&#8203;record">dns_&#8203;check_&#8203;record</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-get-mx.php" title="dns_&#8203;get_&#8203;mx">dns_&#8203;get_&#8203;mx</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-get-record.php" title="dns_&#8203;get_&#8203;record">dns_&#8203;get_&#8203;record</a>
                        </li>
                                                <li class="current">
                            <a href="function.fsockopen.php" title="fsockopen">fsockopen</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbyaddr.php" title="gethostbyaddr">gethostbyaddr</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbyname.php" title="gethostbyname">gethostbyname</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbynamel.php" title="gethostbynamel">gethostbynamel</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostname.php" title="gethostname">gethostname</a>
                        </li>
                                                <li class="">
                            <a href="function.getmxrr.php" title="getmxrr">getmxrr</a>
                        </li>
                                                <li class="">
                            <a href="function.getprotobyname.php" title="getprotobyname">getprotobyname</a>
                        </li>
                                                <li class="">
                            <a href="function.getprotobynumber.php" title="getprotobynumber">getprotobynumber</a>
                        </li>
                                                <li class="">
                            <a href="function.getservbyname.php" title="getservbyname">getservbyname</a>
                        </li>
                                                <li class="">
                            <a href="function.getservbyport.php" title="getservbyport">getservbyport</a>
                        </li>
                                                <li class="">
                            <a href="function.header.php" title="header">header</a>
                        </li>
                                                <li class="">
                            <a href="function.header-register-callback.php" title="header_&#8203;register_&#8203;callback">header_&#8203;register_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.header-remove.php" title="header_&#8203;remove">header_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.headers-list.php" title="headers_&#8203;list">headers_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.headers-sent.php" title="headers_&#8203;sent">headers_&#8203;sent</a>
                        </li>
                                                <li class="">
                            <a href="function.http-clear-last-response-headers.php" title="http_&#8203;clear_&#8203;last_&#8203;response_&#8203;headers">http_&#8203;clear_&#8203;last_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.http-get-last-response-headers.php" title="http_&#8203;get_&#8203;last_&#8203;response_&#8203;headers">http_&#8203;get_&#8203;last_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.http-response-code.php" title="http_&#8203;response_&#8203;code">http_&#8203;response_&#8203;code</a>
                        </li>
                                                <li class="">
                            <a href="function.inet-ntop.php" title="inet_&#8203;ntop">inet_&#8203;ntop</a>
                        </li>
                                                <li class="">
                            <a href="function.inet-pton.php" title="inet_&#8203;pton">inet_&#8203;pton</a>
                        </li>
                                                <li class="">
                            <a href="function.ip2long.php" title="ip2long">ip2long</a>
                        </li>
                                                <li class="">
                            <a href="function.long2ip.php" title="long2ip">long2ip</a>
                        </li>
                                                <li class="">
                            <a href="function.net-get-interfaces.php" title="net_&#8203;get_&#8203;interfaces">net_&#8203;get_&#8203;interfaces</a>
                        </li>
                                                <li class="">
                            <a href="function.openlog.php" title="openlog">openlog</a>
                        </li>
                                                <li class="">
                            <a href="function.pfsockopen.php" title="pfsockopen">pfsockopen</a>
                        </li>
                                                <li class="">
                            <a href="function.request-parse-body.php" title="request_&#8203;parse_&#8203;body">request_&#8203;parse_&#8203;body</a>
                        </li>
                                                <li class="">
                            <a href="function.setcookie.php" title="setcookie">setcookie</a>
                        </li>
                                                <li class="">
                            <a href="function.setrawcookie.php" title="setrawcookie">setrawcookie</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-get-status.php" title="socket_&#8203;get_&#8203;status">socket_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-blocking.php" title="socket_&#8203;set_&#8203;blocking">socket_&#8203;set_&#8203;blocking</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-timeout.php" title="socket_&#8203;set_&#8203;timeout">socket_&#8203;set_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.syslog.php" title="syslog">syslog</a>
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
